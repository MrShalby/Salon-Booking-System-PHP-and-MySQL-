<?php
// confirmation.php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Database connection
$host = "localhost";
$username = "root";
$password = "";
$database = "tgg";

$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

try {
    // Fetch the latest appointment
    $sql = "SELECT * FROM appointments ORDER BY id DESC LIMIT 1";
    $result = $conn->query($sql);

    if (!$result) {
        throw new Exception("Error fetching appointment: " . $conn->error);
    }

    $appointment = $result->fetch_assoc();

    // Fetch cart services for this appointment
    if ($appointment) {
        $appointment_id = $appointment['id'];
        $sql_services = "SELECT * FROM appointment_services WHERE appointment_id = $appointment_id";
        $result_services = $conn->query($sql_services);

        if (!$result_services) {
            throw new Exception("Error fetching services: " . $conn->error);
        }

        $services = [];
        while ($row = $result_services->fetch_assoc()) {
            $services[] = $row;
        }
    }
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
    <title>Appointment Confirmation - The Glam Gallery</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="style.css"> <!-- Link to your main CSS file -->
    <style>
        /* Confirmation Page Styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }

        .confirmation-container {
            max-width: 800px;
            margin: 50px auto;
            padding: 30px;
            text-align: center;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .confirmation-container h1 {
            color: #4CAF50;
            font-size: 32px;
            margin-bottom: 20px;
        }

        .confirmation-container p {
            font-size: 18px;
            color: #555;
            margin-bottom: 20px;
        }

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

        .service-item {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            padding: 10px;
            background-color: #fff;
            border-radius: 8px;
            border: 1px solid #ddd;
        }

        .service-item img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 8px;
            margin-right: 15px;
        }

        .service-item-info {
            flex-grow: 1;
        }

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
    <div class="confirmation-container">
        <h1>Appointment Confirmed!</h1>
        <p>Thank you for booking with The Glam Gallery. Your appointment has been successfully scheduled.</p>

        <?php if ($appointment): ?>
            <div class="appointment-details">
                <h2>Appointment Details</h2>
                <p><strong>Name:</strong> <?php echo htmlspecialchars($appointment['customer_name']); ?></p>
                <p><strong>Email:</strong> <?php echo htmlspecialchars($appointment['customer_email']); ?></p>
                <p><strong>Phone:</strong> <?php echo htmlspecialchars($appointment['customer_phone']); ?></p>
                <p><strong>Date:</strong> <?php echo htmlspecialchars($appointment['date']); ?></p>
                <p><strong>Time:</strong> <?php echo htmlspecialchars($appointment['time']); ?></p>

                <h3>Selected Services:</h3>
                <?php if (!empty($services)): ?>
                    <?php foreach ($services as $service): ?>
                        <div class="service-item">
                            <?php if (!empty($service['image'])): ?>
                                <img src="<?php echo htmlspecialchars($service['image']); ?>" alt="<?php echo htmlspecialchars($service['service_name']); ?>">
                            <?php endif; ?>
                            <div class="service-item-info">
                                <p><strong>Service:</strong> <?php echo htmlspecialchars($service['service_name']); ?></p>
                                <p><strong>Price:</strong> Rs. <?php echo number_format($service['service_price'], 2); ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>No services selected.</p>
                <?php endif; ?>
            </div>
        <?php else: ?>
            <p>No appointment details found.</p>
        <?php endif; ?>

        <p>If you have any questions, please contact us at <a href="mailto:info@theglamgallery.com">info@theglamgallery.com</a>.</p>
        <a href="index.php" class="btn">Return to Home</a>
    </div>
</body>
</html>