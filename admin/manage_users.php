<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: a_login.php');
    exit();
}
include 'db_connection.php';

$sql = "SELECT * FROM users";
$stmt = $conn->prepare($sql);
$stmt->execute();

$users = [];
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $users[] = $row;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manage Users</title>
    <link rel="stylesheet" href="a_styles.css">
</head>
<body>
    <h1>Manage Users</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Is Admin</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $row): ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['Address']; ?></td>
                <td><?php echo $row['is_admin'] ? 'Yes' : 'No'; ?></td>
                <td>
                    <a href="delete_user.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete this user?');">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
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