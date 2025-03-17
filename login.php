<?php
// login.php

session_start(); 
error_reporting(E_ALL);
ini_set('display_errors', 1);// Start the session

// Check if the user is logged in
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    header("Location: index.php"); // Redirect to home if already logged in
    exit();
}

// Database connection details
$servername = "localhost";
$username = "root";
$password = ""; // Your MySQL password
$dbname = "tgg";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Handle login form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = mysqli_real_escape_string($conn, $_POST["email"]);
  $password = mysqli_real_escape_string($conn, $_POST["password"]); // Use plain text password

  // Check if email exists and password matches
  $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'"; // Check plain text password
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {

    echo "<script>localStorage.removeItem('cart');</script>";   
    $_SESSION["loggedin"] = true; // Set session variable for logged-in user
    $_SESSION["email"] = $email;

    

    header("Location: index.php"); // Redirect to home page
    exit(); // Ensure no further code is executed after the redirect
  } else {
    echo "Invalid email or password.";
  }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>

<div class="container" id="container">
	<div class="form-container sign-in-container">
		<form action="#" method="POST">
			<h1>Login</h1>
			<input type="email" placeholder="Email" name="email" required/>
			<input type="password" placeholder="Password" name="password" required/>
			<button type="submit" class="button">Login</button>
			<a href="signup.php">Click Here For Signup</a>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-right">
				<h1>Welcome !</h1>
				<p>To Explore The Glam Gallery please login with your personal information.</p>
			</div>
		</div>
	</div>
</div>
</body>
</html>