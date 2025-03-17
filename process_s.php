<?php
// process_s.php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Debugging: Print POST data
echo "<pre>";
print_r($_POST);
echo "</pre>";

// 1. Database connection details
$host = "localhost";
$username = "root";
$password = "";
$database = "tgg";

// 2. Establish database connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 3. Validate and sanitize input data
$required_fields = ["name", "email", "number", "date", "time"];
foreach ($required_fields as $field) {
    if (empty($_POST[$field])) {
        die("Error: Missing required field '$field'.");
    }
}

$customer_name = htmlspecialchars($_POST["name"]);
$customer_email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
$customer_phone = htmlspecialchars($_POST["number"]);
$date = htmlspecialchars($_POST["date"]);
$time = htmlspecialchars($_POST["time"]);

// Validate email
if (!filter_var($customer_email, FILTER_VALIDATE_EMAIL)) {
    die("Error: Invalid email address.");
}

// Validate date format (YYYY-MM-DD)
if (!preg_match("/^\d{4}-\d{2}-\d{2}$/", $date)) {
    die("Error: Invalid date format. Expected YYYY-MM-DD.");
}

// Validate time format (HH:MM)
if (!preg_match("/^\d{2}:\d{2}$/", $time)) {
    die("Error: Invalid time format. Expected HH:MM.");
}

// 4. Prepare and execute the SQL query
try {
    // Use the correct table name and column names
    $sql = "INSERT INTO appointments (customer_name, customer_email, customer_phone, date, time)
            VALUES (?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        throw new Exception("Prepare failed: " . $conn->error);
    }

    $stmt->bind_param("sssss", $customer_name, $customer_email, $customer_phone, $date, $time);

    if ($stmt->execute()) {
        // Get the last inserted appointment ID
        $appointment_id = $stmt->insert_id;

        // Insert cart items into appointment_services table
        if (!empty($_POST['cart_items'])) {
            $cart_items = json_decode($_POST['cart_items'], true);

            $sql_services = "INSERT INTO appointment_services (appointment_id, service_name, service_price, image)
                             VALUES (?, ?, ?, ?)";
            $stmt_services = $conn->prepare($sql_services);

            if (!$stmt_services) {
                throw new Exception("Prepare failed: " . $conn->error);
            }

            foreach ($cart_items as $item) {
                $stmt_services->bind_param("isds", $appointment_id, $item['name'], $item['price'], $item['image']);
                $stmt_services->execute();
            }
        }

        // Redirect to confirmation page
        header("Location: confirm.php");
        exit();
    } else {
        throw new Exception("Error booking appointment: " . $stmt->error);
    }
} catch (Exception $e) {
    // Log the error and display a user-friendly message
    error_log("Appointment booking error: " . $e->getMessage());
    echo "<p style='color: red;'>An error occurred while booking your appointment. Please try again later.</p>";
    echo "<p>Error details: " . $e->getMessage() . "</p>"; // Display detailed error for debugging
} finally {
    // Close the statement and connection
    if (isset($stmt)) {
        $stmt->close();
    }
    if (isset($stmt_services)) {
        $stmt_services->close();
    }
    $conn->close();
}
?>