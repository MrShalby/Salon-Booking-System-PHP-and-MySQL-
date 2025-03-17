<?php
session_start(); // Start the session

// Check if the user is logged in
$isLoggedIn = isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beauty Parlour Packages</title>
    <link rel="stylesheet" href="styleep.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
</head>
<style>
    /* Add this CSS for cart icon and animations */
    .dropbtn {
        background-color: #333;
        color: white;
        padding: 16px;
        font-size: 16px;
        border: none;
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
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {
        background-color: #ddd;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .dropdown:hover .dropbtn {
        background-color: #555;
    }
</style>

<body>
    <header>
        <nav class="navbar">
            <div class="logo"></div>
            <ul class="nav-links" style="margin-right: 100px; margin-top=15px">
                <li><a href="index.php">Home</a></li>
                <li>
                    <div class="dropdown">
                        <button class="dropbtn" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">Services</button>
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
                <li><a href="contact.php">Contact</a></li>
                <?php if ($isLoggedIn): ?>
                    <li><a href="logout.php">Logout</a></li>
                <?php else: ?>
                    <li><a href="login.php">Login</a></li>
                <?php endif; ?>
                <li>
                    <a href="cart.php" class="cart-icon">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="cart-count">0</span>
                    </a>
                </li>
            </ul>
        </nav>
    </header>

    <section id="packages" style="margin-top: 100px;">
        <h1><i>PACKAGES</i></h1>
        <div class="part1">
            <div class="package">
                <u><h3>Package 1</h3></u>
                <p class="price">Rs.999</p>
                <ul>
                    <div class="item">
                        <li>Simple Haircut</li>
                        <li>Gel polish</li>
                    </div>
                </ul><br><br><br>
                <a href="<?php echo $isLoggedIn ? 'appointment.php?package_id=1&package_name=Package 1' : 'login.php?redirect=pack.php&package_id=1&package_name=Package 1'; ?>">
                    <button>Book Now</button>
                </a>
            </div>

            <div class="package">
                <u><h3>Package 2</h3></u>
                <p class="price">Rs.1199</p>
                <ul>
                    <div class="item">
                        <li>Facial</li>
                        <li>Body Massage</li>
                    </div>
                </ul><br><br>
                <a href="<?php echo $isLoggedIn ? 'appointment.php?package_id=2&package_name=Package 2' : 'login.php?redirect=pack.php&package_id=2&package_name=Package 2'; ?>">
                    <button>Book Now</button>
                </a>
            </div>

            <div class="package">
                <u><h3>Package 3</h3></u>
                <p class="price">Rs.1499</p>
                <ul>
                    <li>Facial</li>
                    <li>Manicure & Pedicure</li>
                    <li>Hot Stone Massage</li>
                </ul><br><br>
                <a href="<?php echo $isLoggedIn ? 'appointment.php?package_id=3&package_name=Package 3' : 'login.php?redirect=pack.php&package_id=3&package_name=Package 3'; ?>">
                    <button>Book Now</button>
                </a>
            </div>
        </div>
        <div class="part2">
            <div class="package">
                <u><h3>Package 4</h3></u>
                <p class="price">Rs.1899</p>
                <ul>
                    <li>Haircut + Hair Style</li>
                    <li>Acrylic Nail Extension</li>
                </ul><br><br>
                <a href="<?php echo $isLoggedIn ? 'appointment.php?package_id=4&package_name=Package 4' : 'login.php?redirect=pack.php&package_id=4&package_name=Package 4'; ?>">
                    <button>Book Now</button>
                </a>
            </div>

            <div class="package">
                <u><h3>Package 5</h3></u>
                <p class="price">Rs.2199</p>
                <ul>
                    <li>Airbrush makeup</li>
                    <li>Temperory Nail Extension</li>
                </ul><br><br>
                <a href="<?php echo $isLoggedIn ? 'appointment.php?package_id=5&package_name=Package 5' : 'login.php?redirect=pack.php&package_id=5&package_name=Package 5'; ?>">
                    <button>Book Now</button>
                </a>
            </div>

            <div class="package">
                <u><h3>Package 6</h3></u>
                <p class="price">Rs.2499</p>
                <ul>
                    <li>Fancy Hair Styling</li>
                    <li>HD Makeup</li>
                </ul><br><br>
                <a href="<?php echo $isLoggedIn ? 'appointment.php?package_id=6&package_name=Package 6' : 'login.php?redirect=pack.php&package_id=6&package_name=Package 6'; ?>">
                    <button>Book Now</button>
                </a>
            </div>
        </div><br><br>

        <div class="part2">
            <div class="package">
                <u><h3>Package 7</h3></u>
                <p class="price">Rs.2999</p>
                <ul>
                    <div class="item">
                        <li>Simple Haircut</li>
                        <li>Fancy Hair Styling</li>
                    </div>
                </ul><br><br><br>
                <a href="<?php echo $isLoggedIn ? 'appointment.php?package_id=7&package_name=Package 7' : 'login.php?redirect=pack.php&package_id=7&package_name=Package 7'; ?>">
                    <button>Book Now</button>
                </a>
            </div>

            <div class="package">
                <u><h3>Package 8</h3></u>
                <p class="price">Rs.14999</p>
                <ul>
                    <li>Bridal Look</li>
                    <li>Bridal Mehndi</li>
                </ul><br><br>
                <a href="<?php echo $isLoggedIn ? 'appointment.php?package_id=8&package_name=Package 8' : 'login.php?redirect=pack.php&package_id=8&package_name=Package 8'; ?>">
                    <button>Book Now</button>
                </a>
            </div>

            <div class="package">
                <u><h3>Package 9</h3></u>
                <p class="price">Rs.17999</p>
                <ul>
                    <li>Facial</li>
                    <li>Bridal Look</li>
                    <li>Bridal Mehndi</li>
                    <li>Temperory Nail Extension</li>
                </ul>
                <a href="<?php echo $isLoggedIn ? 'appointment.php?package_id=9&package_name=Package 9' : 'login.php?redirect=pack.php&package_id=9&package_name=Package 9'; ?>">
                    <button>Book Now</button>
                </a>
            </div>
        </div>
    </section>

    <footer>
        <div class="container1">
            <p>ANATAM RESORT</p>
            <p>Mahudi highway, pindarda village gandhinagar,gujrat 382610 </p><br>
            <div class="font_in_line_icon">
                <a href="" class="f1"><i class="fa-solid fa-square-envelope"></i>&nbsp;info@Aanantam.com</a>
                <a href="" class="f2"><i class="fa-solid fa-phone"></i>&nbsp;09687615514 | Ananatam Resort</a>
                <a href="" class="f3"><i class="fa-solid fa-phone"></i>&nbsp;09687615514</a>
            </div><br>
            <div class="socialicon">
                <p class="f4">GET IN TOUCH</p>
                <a href=""><i class="fa-regular fa-envelope"></i></a>
                <a href=""><i class="fa-brands fa-instagram"></i></a>
                <a href=""><i class="fa-brands fa-twitter"></i></a>
                <a href=""><i class="fa-brands fa-google"></i></a>
                <a href=""><i class="fa-brands fa-youtube"></i></a>
            </div>
    </footer>
</body>
</html>