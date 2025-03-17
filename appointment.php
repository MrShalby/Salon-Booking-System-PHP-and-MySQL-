<?php
// appointment.php

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="appo.css">
</head>
<body>
    <div class="booking-container">
        <h1>The Glam Gallery - Appointment Booking</h1>
        <form id="booking-form" action="process_appointment.php" method="POST" onsubmit="return validateDateAndTime();">

            <!-- Hidden field for package_id -->
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
                <label for="service">Select Service:</label>
                <select id="service" name="service" required>
                    <option value="<?php echo htmlspecialchars($package_name); ?>" selected><?php echo htmlspecialchars($package_name); ?></option>
                    <!-- You can add more static service options here if needed -->
                </select>
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
