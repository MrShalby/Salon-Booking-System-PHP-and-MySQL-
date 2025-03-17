<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
    <h1> Services Booked by User</h1>
    <table>
        <!-- Table content goes here -->
    </table>
</div>
</body>
</html>
<?php
// Database connection
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "tgg";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the database
$sql = "SELECT 
            aps.id AS service_id,
            aps.service_name,
            aps.service_price,
            aps.image,
            apt.id AS appointment_id,
            apt.customer_name,
            apt.customer_email,
            apt.customer_phone,
            apt.date,
            apt.time,
            u.id AS user_id,
            u.name AS user_name,
            u.Address AS user_address
        FROM 
            appointment_services aps
        JOIN 
            appointments apt ON aps.appointment_id = apt.id
        LEFT JOIN 
            users u ON apt.customer_email = u.email";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data in a table
    echo "<table border='1'>
            <tr>
                <th>Service ID</th>
                <th>Service Name</th>
                <th>Service Price</th>
               
                <th>Appointment ID</th>
                <th>Customer Name</th>
                <th>Customer Email</th>
                <th>Customer Phone</th>
                <th>Date</th>
                <th>Time</th>
                <th>User ID</th>
                <th>User Name</th>
                <th>User Address</th>
            </tr>";
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row["service_id"]."</td>
                <td>".$row["service_name"]."</td>
                <td>".$row["service_price"]."</td>
               
                <td>".$row["appointment_id"]."</td>
                <td>".$row["customer_name"]."</td>
                <td>".$row["customer_email"]."</td>
                <td>".$row["customer_phone"]."</td>
                <td>".$row["date"]."</td>
                <td>".$row["time"]."</td>
                <td>".$row["user_id"]."</td>
                <td>".$row["user_name"]."</td>
                <td>".$row["user_address"]."</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

// Close connection
$conn->close();
?>
<style>
/* General Page Styling */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 20px;
}

/* Container for the table */
.container {
    max-width: 1200px;
    margin: 0 auto;
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

/* Table Styling */
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

table th, table td {
    padding: 12px 15px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

table th {
    background-color: #007bff;
    color: white;
    font-weight: bold;
}

table tr:nth-child(even) {
    background-color: #f9f9f9;
}

table tr:hover {
    background-color: #f1f1f1;
}

/* Image Styling */
table img {
    width: 100px;
    height: 100px;
    border-radius: 4px;
    object-fit: cover;
}

/* Button Styling (if you add buttons later) */
.button {
    background-color: #007bff;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}

.button:hover {
    background-color: #0056b3;
}

/* Header Styling */
h1 {
    text-align: center;
    color: #333;
    margin-bottom: 20px;
}

/* Responsive Table */
@media (max-width: 768px) {
    table {
        display: block;
        overflow-x: auto;
        white-space: nowrap;
    }
}
</style>