<?php
session_start();
include('admin/db_connection.php'); // Ensure the path is correct

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = isset($_POST['message']) ? $_POST['message'] : ''; // Handle undefined variable

    // Insert data into the database
    $sql = "INSERT INTO contact_submissions (name, email, message) VALUES (:name, :email, :message)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':message', $message);

    if (isset($conn)) {
        if ($stmt->execute()) {
            $success_message = "Thank you for contacting us! We will get back to you soon.";
        } else {
            $error_message = "There was an error submitting your message. Please try again.";
        }
    } else {
        echo "Database connection not established.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="stylec.css">
    <style>
        /* Dropdown Menu Styling */
        .dropbtn {
            background-color: #333;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #333;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: white;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #575757;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown:hover .dropbtn {
            background-color: #555;
        }

        /* Contact Section Background */
        .contact {

            background-image: url("pexels-ink-drop-118789-15387699.jpg");
            backdrop-filter: blur(5px);
            background-size: cover;
            background-position: center;
          
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="logo">
               
            </div>
            <ul class="nav-links" style="justify-content: flex-end;">
                <li><a href="index.php">Home</a></li>
                <li>
                    <div class="dropdown">
                        <button class="dropbtn">Services</button>
                        <div class="dropdown-content">
                            <a href="make.php">Makeup</a>
                            <a href="hair.php">Haircutting & Styling</a>
                            <a href="imggg.php">Nail Art</a>
                            <a href="mehndi.php">Mehndi</a>
                            <a href="spa.php">Spa & Massage</a>
                        </div>
                    </div>
                </li>
                <li><a href="pack.php">Packages</a></li>
                <li><a href="about.php">About</a></li>
               
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav>
    </header>

    <section class="contact">
        <div class="naem">
            
        </div>
        <div class="content" style="margin-top: 120px;">
            <h2 style="color: #333;"><b>Contact Us</b></h2>
            <p style="color:rgb(0, 0, 0); font-size: 22px; font-weight: bold;">
                Here is a summary that you can contact us directly via Phone or Email. Also, you can visit our company at the
                Address is given below. May we be useful for you! Thanks for choosing us.
            </p>
        </div>

        <div class="container">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon">
                        <i class="fa fa-map-marker" style="font-size:36px"></i>
                    </div>
                    <div class="text">
                        <h3><b>Our Address</b></h3>
                        <p>
                            E/3, 42 Ground Floor Ananta Square Opp<br>
                            108 Center Naroda, Kathwada Rd,<br>
                            Nava Naroda, Ahmedabad, Gujarat 380038
                        </p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon">
                        <i class="fa fa-phone" style="font-size:36px"></i>
                    </div>
                    <div class="text">
                        <h3><b>Contact Number</b></h3>
                        <p>9913391712</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon">
                        <i class="fa fa-envelope-o" style="font-size:36px"></i>
                    </div>
                    <div class="text">
                        <h3><b>Email Address</b></h3>
                        <p>Theglamgallery@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="contactForm">
                <form action="#" method="POST">
                    <h2>Send Your Message Here</h2>
                    <div class="inputBox">
                        <input type="text" name="name" required>
                        <span>Full Name</span>
                    </div>
                    <div class="inputBox">
                        <input type="text" name="email" required>
                        <span>Email</span>
                    </div>
                    <div class="inputBox">
                        <textarea required></textarea>
                        <span>Type your message here..</span>
                    </div>
                    <div class="inputBox">
                        <input type="submit" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </section>

    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3670.755709268258!2d72.67616777056263!3d23.069416068502264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e870625daed57%3A0xd2e59dc4a000aeb5!2sTHE%20GLAM%20UNISEX%20SALON!5e0!3m2!1sen!2sin!4v1738687771500!5m2!1sen!2sin"
        width="100%"
        height="450"
        style="border:0;"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade">
    </iframe>
    <style>
        .footer {
            background-color: #333;
            padding: 1rem;
            text-align: center;
            color: white;
        }

        .containerr {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .footer-col-2 p {
            font-size: 1rem;
            margin-bottom: 20px;
        }

        .copyright {
            font-size: 0.9rem;
            margin-top: 20px;
        }
    </style>

    <div class="footer">
        <div class="containerr">
            <div class="row1">
                <div class="footer-col-2">
                    <p>
                        Our purpose is to sustainably make the pleasure and benefits of home services accessible to the many.
                    </p>
                </div>
            </div>
            <p class="copyright">Copyright 2025 - The Glam Services</p>
        </div>
    </div>
</body>
</html>
