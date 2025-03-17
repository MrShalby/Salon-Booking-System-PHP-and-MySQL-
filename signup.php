<?php
session_start(); // Start the session

// Check if the user is logged in
$isLoggedIn = isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true;

if ($isLoggedIn) {
    header("Location: index.php"); // Redirect to home if already logged in
    exit();
}

// signup.php

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

// Handle signup form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = mysqli_real_escape_string($conn, $_POST["name"]);
  $address = mysqli_real_escape_string($conn, $_POST["address"]);
  $email = mysqli_real_escape_string($conn, $_POST["email"]);
  $password = mysqli_real_escape_string($conn, $_POST["password"]); // Store password as plain text

  // Check if email already exists
  $sql_check = "SELECT * FROM users WHERE email = '$email'";
  $result_check = mysqli_query($conn, $sql_check);

  if (mysqli_num_rows($result_check) > 0) {
    echo "Email already exists. Please use a different email.";
  } else {
    // Insert user data into the database
    $sql = "INSERT INTO users (name, address, email, password) VALUES ('$name', '$address', '$email', '$password')"; // Use plain text password

    if (mysqli_query($conn, $sql)) {

        // Set session variable
        $_SESSION["loggedin"] = true;
        $_SESSION["email"] = $email; // Or any other user identifier
      echo "Signup successful! <a href='login.php'>Login</a>";
      header("Location: index.php"); // Redirect to the home page
      exit(); // Make sure no other code is executed
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
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
    <title>Signup</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
    <header>
        
    </header>
	
<div class="container" id="container">
	<div class="form-container sign-in-container">
		<form action="#" method="POST">
			<h1>Create Account</h1>
			<input type="text" placeholder="Name" name="name"required/>
			<input type="email" placeholder="Email" name="email" required/>
			<input type="password" placeholder="Password" name="password" required/>
			<input type="Address" placeholder="Address" name="address" required>
			<button href="login.php">Sign Up</button>
			<a href="login.php">Click Here For Login...!</a>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-right">
                <h1>Hello,  cheif!</h1>
				<p>Enter your personal details and <br>start your journey with<br> The Glam Gallery.</p>	
			</div>
		</div>
	</div>
</div>
</body>
</html>