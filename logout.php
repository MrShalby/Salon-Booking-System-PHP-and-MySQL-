<?php
session_start(); // Start the session

// Unset all session variables
$_SESSION = array();

// Destroy the session




// Clear localStorage using JavaScript


// Redirect to the login page


// Start the session
session_unset(); // Unset all session variables
session_destroy(); // Destroy the session

echo "<script>localStorage.removeItem('cart');</script>";
header("Location: index.php"); // Redirect to the home page
exit();

?>