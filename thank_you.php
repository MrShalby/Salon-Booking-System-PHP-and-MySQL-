<?php
// thank_you.php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Database connection
$host = "localhost";
$username = "root";
$password = "";
$database = "tgg";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

try {
    // Use the correct table name (appointments)
    $sql = "SELECT * FROM appointments ORDER BY id DESC LIMIT 1";
    $result = $conn->query($sql);

    if (!$result) {
        throw new Exception("Error fetching appointment: " . $conn->error);
    }

    $appointment = $result->fetch_assoc();
} catch (Exception $e) {
    die("Error: " . $e->getMessage());
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You - The Glam Gallery</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="appo.css"> <!-- Use the same CSS as your appointment page -->
    <style>
        /* Thank You Container */
        .thank-you-container {
            max-width: 600px;
            margin: 50px auto;
            padding: 30px;
            text-align: center;
            border: 1px solid #ddd;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .thank-you-container h1 {
            color: #4CAF50;
            font-size: 32px;
            margin-bottom: 20px;
        }

        .thank-you-container p {
            font-size: 18px;
            color: #555;
            margin-bottom: 20px;
        }

        /* Appointment Details */
        .appointment-details {
            text-align: left;
            margin-top: 20px;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            border: 1px solid #eee;
        }

        .appointment-details h2 {
            font-size: 24px;
            color: #333;
            margin-bottom: 15px;
        }

        .appointment-details p {
            font-size: 16px;
            margin: 10px 0;
            color: #555;
        }

        .appointment-details strong {
            color: #333;
            font-weight: 600;
        }

        /* Button Styles */
        .btn {
            display: inline-block;
            background-color: #4CAF50;
            color: #fff;
            padding: 12px 24px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            text-decoration: none;
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #3e8e41;
        }

        /* Link Styles */
        a {
            color: #4CAF50;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        a:hover {
            color: #3e8e41;
        }
    </style>
</head>
<body>
    <div class="thank-you-container">
        <h1>Thank You!</h1>
        <p>Your appointment has been successfully booked.</p>

        <?php if ($appointment): ?>
            <div class="appointment-details">
                <h2>Appointment Details</h2>
                <p><strong>Name:</strong> <?php echo htmlspecialchars($appointment['customer_name']); ?></p>
                <p><strong>Email:</strong> <?php echo htmlspecialchars($appointment['customer_email']); ?></p>
                <p><strong>Phone:</strong> <?php echo htmlspecialchars($appointment['customer_phone']); ?></p>
                <p><strong>Service:</strong> <?php echo htmlspecialchars($appointment['service']); ?></p>
                <p><strong>Date:</strong> <?php echo htmlspecialchars($appointment['date']); ?></p>
                <p><strong>Time:</strong> <?php echo htmlspecialchars($appointment['time']); ?></p>
            </div>
        <?php else: ?>
            <p>No appointment details found.</p>
        <?php endif; ?>

        <p>If you have any questions, please contact us at <a href="about.php">info@theglamgallery.com</a>.</p>
        <a href="index.php" class="btn">Return to Home</a>
    </div>
</body>
</html>