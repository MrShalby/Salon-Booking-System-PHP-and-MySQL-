<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: a_login.php');
    exit();
}
include 'db_connection.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Prepare the delete statement
    $sql = "DELETE FROM users WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    
    if ($stmt->execute()) {
        // Redirect back to manage users page with success message
        header('Location: manage_users.php?message=User deleted successfully');
    } else {
        // Redirect back with error message
        header('Location: manage_users.php?error=Failed to delete user');
    }
} else {
    header('Location: manage_users.php');
}
?> 