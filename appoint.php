<?php
// apposession_start();
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);


if (!isset($_SESSION['loggedin'])) {
    header("Location: login.php");
    exit();
}
// Debug: Check if cart_items are received


if (isset($_POST['cart_items'])) {
    $cartItems = json_decode($_POST['cart_items'], true);

    if (json_last_error() !== JSON_ERROR_NONE) {
        die("Invalid cart data: " . json_last_error_msg());
    }

    if (empty($cartItems)) {
        die("No items in the cart!");
    }
} else {
    die("Cart items not received!");
}
// Get cart items from the form submission

// Process the cart items (e.g., save to database, display, etc.)


// Clear the cart after booking
echo "<script>localStorage.removeItem('cart');</script>";

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

$cart_items = [];
if (isset($_POST['cart_items']) && !empty($_POST['cart_items'])) {
    $cart_items = json_decode($_POST['cart_items'], true);
    if (json_last_error() !== JSON_ERROR_NONE) {
        die('Invalid cart data');
    }
}

if (empty($cart_items)) {
    echo '<p>No services selected. Please <a href="index.php"><button class="btn btn-primary">Go to Services Page</button></a> and add services to your cart first.</p>';
    die();
}

// 3. Retrieve package_id and package_name from URL parameters
$package_id = isset($_GET['package_id']) ? intval($_GET['package_id']) : null;
$package_name = isset($_GET['package_name']) ? $_GET['package_name'] : '';  // Sanitize this more rigorously in a production environment

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Glam Gallery - Appointment Booking</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="appo.css">
    <link rel="stylesheet" href="appo.js">
    <style>
        .cart-summary {
            margin: 20px 0;
            padding: 15px;
            background: #f8f9fa;
            border-radius: 8px;
        }

        .cart-item {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
            padding: 10px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .cart-item img {
            width: 60px;
            height: 60px;
            object-fit: cover;
            border-radius: 4px;
            margin-right: 15px;
        }

        .cart-item-info {
            flex-grow: 1;
        }
    </style>
</head>

<body>
    <div class="booking-container">
        <h1>The Glam Gallery - Appointment Booking</h1>

        <div class="cart-summary">
            <h3>Selected Services:</h3>
            <?php foreach ($cart_items as $item): ?>
                <div class="cart-item">
                    <?php if (!empty($item['image'])): ?>
                        <img src="<?php echo htmlspecialchars($item['image']); ?>"
                            alt="<?php echo htmlspecialchars($item['name']); ?>">
                    <?php endif; ?>
                    <div class="cart-item-info">
                        <h4><?php echo htmlspecialchars($item['name']); ?></h4>
                        <p>Price: Rs. <?php echo number_format($item['price']); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <form id="booking-form" action="process_s.php" method="POST" onsubmit="return validateDateAndTime();">

            <!-- Hidden field for package_id -->
            <input type="hidden" name="cart_items" value="<?php echo htmlspecialchars(json_encode($cart_items)); ?>">
            <?php if ($package_id !== null): ?>
                <input type="hidden" name="package_id" value="<?php echo htmlspecialchars($package_id); ?>">
            <?php endif; ?>

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="number">Phone Number:</label>
                <input type="tel" id="number" name="number" required>
            </div>

            <div class="form-group">
                <label for="date">Date:</label>
                <input type="date" id="date" name="date" required>
            </div>
            <div class="form-group">
                <label for="time">Time:</label>
                <input type="time" id="time" name="time" required>
            </div>
            <button type="submit">Book Appointment</button>
        </form>
    </div>
    <!-- <script src="appo.js"></script> -->

    <script>
        function validateDateAndTime() {
            const dateInput = document.getElementById('date');
            const timeInput = document.getElementById('time');
            const selectedDate = new Date(dateInput.value);
            const selectedTime = timeInput.value.split(':');
            const selectedHours = parseInt(selectedTime[0], 10);
            const selectedMinutes = parseInt(selectedTime[1], 10);
            const today = new Date();
            today.setHours(0, 0, 0, 0); // Set time to midnight for comparison

            // Check if the selected date is in the past
            if (selectedDate < today) {
                alert("You cannot book an appointment for a date before today.");
                return false; // Prevent form submission
            }

            // Check if the selected time is within the allowed range (9 AM to 7 PM)
            if (selectedHours < 9 || selectedHours > 19 || (selectedHours === 19 && selectedMinutes > 0)) {
                alert("You can only book appointments between 9 AM and 7 PM.");
                return false; // Prevent form submission
            }

            return true; // Allow form submission
        }
    </script>
</body>

</html>