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
    $sql = "DELETE FROM packages WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    
    if ($stmt->execute()) {
        header('Location: manage_packages.php?message=Package deleted successfully');
    } else {
        header('Location: manage_packages.php?error=Failed to delete package');
    }
} else {
    header('Location: manage_packages.php');
}
?> 