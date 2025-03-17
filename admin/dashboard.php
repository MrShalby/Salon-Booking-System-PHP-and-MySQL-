<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: a_login.php');
    exit();
}
include 'db_connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    
</head>
<body>
    <h1>Welcome, Admin</h1>
    <nav>
        <ul>
            <li><a href="manage_appointments.php">User Appointments</a></li>
            <li><a href="manage_packages.php">Packages</a></li>
            <li><a href="manage_services.php">User services</a></li>
            <li><a href="manage_users.php">Manage Users</a></li>
            <li><a href="admin_contact.php">Users Reviews</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>
</body>
</html>
<style>
    /* General Page Styling */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f9;
    margin: 0;
    padding: 0;
    color: #333;
}

/* Header Styling */
h1 {
    text-align: center;
    color: #007bff;
    margin-top: 20px;
    font-size: 2.5em;
}

/* Navigation Bar Styling */
nav {
    background-color: #007bff;
    padding: 10px 0;
    text-align: center;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
}

nav ul li {
    margin: 0 15px;
}

nav ul li a {
    color: white;
    text-decoration: none;
    font-size: 1.1em;
    padding: 10px 15px;
    display: block;
    transition: background-color 0.3s ease;
}

nav ul li a:hover {
    background-color: #0056b3;
    border-radius: 4px;
}

/* Container Styling (if you add content later) */
.container {
    max-width: 1200px;
    margin: 20px auto;
    padding: 20px;
    background: white;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

/* Button Styling (if you add buttons later) */
.button {
    background-color: #007bff;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 1em;
    transition: background-color 0.3s ease;
}

.button:hover {
    background-color: #0056b3;
}

/* Responsive Design */
@media (max-width: 768px) {
    nav ul {
        flex-direction: column;
    }

    nav ul li {
        margin: 10px 0;
    }

    h1 {
        font-size: 2em;
    }
}
</style>