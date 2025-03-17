<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Us - The Glam Gallery</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style11.css"> <!-- Link to external CSS file -->
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            color: #333;
        }

        /* Header and Navigation */
        header {
            background-color: #333;
            padding: 10px 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .nav-links {
            list-style: none;
            display: flex;
            margin: 0;
            padding: 0;
        }

        .nav-links li {
            margin-left: 20px;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            font-size: 16px;
            transition: color 0.3s ease;
        }

        

        .dropdown {
            position: relative;
        }

        .dropbtn {
            background-color: #333;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;
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

        /* About Us Section */
        .first {
            text-align: center;
            padding: 60px 20px;
            background-color: #fff;
        }

        /* .first .one {
            font-size: 36px;
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
        } */

        /* .first .two {
            font-size: 24px;
            color: #555;
        } */

        .heading {
            text-align: center;
            font-size: 32px;
            font-weight: bold;
            color: #333;
            margin: 40px 0;
        }

        .service-container {
            display: flex;
            justify-content: center;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .service-container img {
            max-width: 400px;
            border-radius: 10px;
            margin-right: 40px;
        }

        .service1 p {
            font-size: 18px;
            color: #555;
            line-height: 1.6;
        }

        /* Specialist Section */
        .about {
            padding: 40px 20px;
            background-color: #f4f4f9;
        }

        .meet-row, .meet2 {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .meet-col {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 300px;
        }

        .meet-col img {
            width: 100%;
            border-radius: 10px;
            margin-bottom: 15px;
        }

        .meet-col h2 {
            font-size: 20px;
            color: #333;
            margin-bottom: 5px;
        }

        .meet-col small {
            font-size: 16px;
            color: #777;
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="logo">
                <!-- Add your logo here -->
            </div>
            <ul class="nav-links">
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
                <li><a href="contact.php">Contact</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav>
    </header>

    <div class="first" style="padding-top: 200px;" >
        <p class="one"><u>About Us</u></p>
        <p class="two">Naturals Creating Experience With Businesses</p>
    </div>

    <p class="heading">Creating A Beautiful World</p>

    <div class="service-container">
        <img src="ab1.jpg" alt="Makeup">
        <div class="service1">
            <p>
                Our carefully chosen and highly trained staff is here to exceed your expectations.
                The same goes for our elegant salon space – dedicated to guest comfort – and our
                devotion to innovation and artistry. We're focused on making your day and
                continually raising the bar.
            </p>
        </div>
    </div>

    <u><p class="heading">SPECIALIST</p></u>

    <div class="about">
        <div class="meet-row">
            <div class="meet-col">
                <img src="p6.jpeg" alt="Ria Sinha">
                <h2>Ria Sinha</h2>
                <small>@ Make-up Artist</small>
            </div>
            <div class="meet-col">
                <img src="p5.jpeg" alt="Aaryan Desai">
                <h2>Aaryan Desai</h2>
                <small>@ Haircutting Specialist</small>
            </div>
            <div class="meet-col">
                <img src="p2.jpeg" alt="Hetvi Parmar">
                <h2>Hetvi Parmar</h2>
                <small>@ Beautician</small>
            </div>
        </div>

        <div class="meet2">
            <div class="meet-col">
                <img src="p1.jpeg" alt="Raj Trivedi">
                <h2>Raj Trivedi</h2>
                <small>@ Spa & Massage Expert</small>
            </div>
            <div class="meet-col">
                <img src="p3.jpeg" alt="Smita Shah">
                <h2>Smita Shah</h2>
                <small>@ Mehndi Specialist</small>
            </div>
            <div class="meet-col">
                <img src="p4.jpeg" alt="Meet Mehta">
                <h2>Meet Mehta</h2>
                <small>@ Nail Art Specialist</small>
            </div>
        </div>
    </div>
</body>
</html>