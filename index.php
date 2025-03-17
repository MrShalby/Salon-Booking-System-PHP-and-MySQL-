<!DOCTYPE html>
<html>

<head>
	<title>Salone - Beauty Salon HTML Template Free Download</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="author" content="author">
	<meta name="keywords" content="keywords">
	<meta name="description" content="description">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/vendor.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Roboto:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap"
		rel="stylesheet">
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
</head>

<body>

	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Unique Navbar</title>
		<link rel="stylesheet" href="style.css">
	</head>

	<body>

		<?php
		session_start(); // Start the session to access session variables
		
		// Check if the user is logged in
		$isLoggedIn = isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true;
		?>

		<header>
			<nav class="navbar">
				<div class="logo">
					<a href="index.php"></a>
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
		<div class="xyz">
			<div>THE GLAM GALLERY</div>

		</div>

		<section class="services">
			<div class="service-container">
				<div class="service">


					<h1 class="text-uppercase,font-family: var(--heading-font),font-size: 40px;color: #333;">Why to
						Choose The Glam Gallery?</h1>
					<p style="font-size: 24px; color: #333;margin-right: 100px;margin-left:50px;"><i>
							To choose this beauty parlor, you might consider its reputation for excellent service,
							experienced professionals, quality products, relaxing ambiance,
							and wide range of beauty treatments tailored to your needs.
							If it offers personalized care, competitive pricing,
							and a focus on customer satisfaction,
							it's a great option to trust with your beauty and grooming needs!</i></p>
					</p>
				</div>
				<img src="1p.jpeg" alt="home"
					style="width: 650px;height:600px; vertical-align: right; margin-right: 5px; margin-left:50px;">
			</div>
		</section>


		<div class="container">
			<div class="box">
				<div class="imgBx">
					<img src="im1.jpeg">
				</div>
				<div class="content">
					<div>
						<p>Hair Styling
						</p>
					</div>
				</div>
			</div>
			<div class="box">
				<div class="imgBx">
					<img src="d.jpg">
				</div>
				<div class="content">
					<div>

						<p>Nail Art
						</p>
					</div>
				</div>
			</div>
			<div class="box">
				<div class="imgBx">
					<img src="bridal.jpg.jpeg">
				</div>
				<div class="content">
					<div>

						<p>Mehndi
						</p>
					</div>
				</div>
			</div>
			<div class="box">
				<div class="imgBx">
					<img src="i2.jpg">
				</div>
				<div class="content">
					<div>

						<p>SPA
						</p>
					</div>
				</div>
			</div>
			<div class="box">
				<div class="imgBx">
					<img src="i5.jpg">
				</div>
				<div class="content">
					<div>
						<p>Beautiful Bridal
						</p>
					</div>
				</div>
			</div>
			<div class="box">
				<div class="imgBx">
					<img src="im7.jpg">
				</div>
				<div class="content">
					<div>

						<p>MAKEUP
						</p>
					</div>
				</div>
			</div>
			<div class="box">
				<div class="imgBx">
					<img src="im11.jpg.avif">
				</div>
				<div class="content">
					<div>

						<p>Gel polish
						</p>
					</div>
				</div>
			</div>
			<div class="box">
				<div class="imgBx">
					<img src="im8.jpeg">
				</div>
				<div class="content">
					<div>

						<p>Makeup Products
						</p>
					</div>
				</div>
			</div>
			<div class="box">
				<div class="imgBx">
					<img src="im5.jpg">
				</div>
				<div class="content">
					<div>

						<p>
						</p>
					</div>
				</div>
			</div>
			<div class="box">
				<div class="imgBx">
					<img src="im6.jpg">
				</div>
				<div class="content">
					<div>

						<p>Bridal Mehndi
						</p>
					</div>
				</div>
			</div>
			<div class="box">
				<div class="imgBx">
					<img src="img13.jpeg">
				</div>
				<div class="content">
					<div>

						<p> Royal Bride
						</p>
					</div>
				</div>
			</div>
			<div class="box">
				<div class="imgBx">
					<img src="se7.jpg">
				</div>
				<div class="content">
					<div>

						<p>Hair Washing
						</p>
					</div>
				</div>
			</div>


		</div>


		</section>

		<section class="testimonials py-5">
			<div class="container">
				<div class="row">
					<div class="section-header text-center my-5">
						<h1 class="display-1 text-uppercase">Customer Reviews</h1>
						<h3><i> Here what our satisfied clients say about their experience at The Glam Gallery</i></h3>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="testimonial-item">
							<blockquote>
								<svg class="text-primary" width="24" height="24" viewBox="0 0 24 24">
									<use xlink:href="#quote"></use>
								</svg>
								<p class="fs-5">"I can never thank you enough for all you did on the wedding day
									I absolutely LOVED my hair & makeup and your incredibly calm and warm presence
									made all of my dress/veil changes seem so easy!"</p><br>
								<div class="cir">
									<img src="p1.jpg"></img><br>
								</div>
								<strong> Maria </strong><br>
								CEO, ABC Inc.
							</blockquote>
						</div>
					</div>
					<div class="col-md-4">
						<div class="testimonial-item">
							<blockquote>
								<svg class="text-primary" width="24" height="24" viewBox="0 0 24 24">
									<use xlink:href="#quote"></use>
								</svg>
								<p class="fs-5">"The massage felt totally professional! I was comfortable at all
									times, my body felt better for it and I would recommend it"</p><br><br>
								<div class="cir">
									<img src="p2.jpg"></img><br>
								</div>
								<strong>Rahul</strong><br>
								CEO, ABC Inc
							</blockquote>
						</div>
					</div>
					<div class="col-md-4">
						<div class="testimonial-item">
							<blockquote>
								<svg class="text-primary" width="24" height="24" viewBox="0 0 24 24">
									<use xlink:href="#quote"></use>
								</svg>
								<p class="fs-5">" The hair smoothning was just fantastic and the staff was professional,
									creating a truly luxurious atmosphere"</p><br><br>
								<div class="cir">
									<div class="crc"><img src="p4.jpg"></img> </div>
									<br< /div>
										<strong>Babita</strong><br>
										<h5>CEO, ABC</h5>
							</blockquote>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!---<div class="post-thumbnail">
						<img src="post-thumbnail-2.jpg" alt="Post" class="img-fluid">
					</div>-->

		<footer>
			<div class="container1">
				<b><i>
						
					<p>Prahladnagar</p><br>
					<div class="font_in_line_icon">
						<a href="" class="f1"><i class="fa-solid fa-square-envelope"></i>&nbsp;info@glamm.com</a>
						<a href="" class="f2"><i class="fa-solid fa-phone"></i>&nbsp;09687615514 | The Glam Gallery</a>
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

	<script>
		// Function to update the cart count
		function updateCartCount() {
			const cartItems = JSON.parse(localStorage.getItem('cart')) || [];
			const cartCount = document.querySelector('.cart-count');
			cartCount.textContent = cartItems.length;
		}

		// Function to add an item to the cart
		function addToCart(name, price, image) {
			// Check if the user is logged in
			const isLoggedIn = <?php echo json_encode($isLoggedIn); ?>;

			if (!isLoggedIn) {
				// Redirect to login page if not logged in
				window.location.href = 'login.php';
				return; // Exit the function
			}

			const cartItems = JSON.parse(localStorage.getItem('cart')) || [];
			cartItems.push({ name, price, image });
			localStorage.setItem('cart', JSON.stringify(cartItems));

			// Update the cart count
			updateCartCount();

			// Show toast notification
			showToast(`${name} added to cart!`);
		}

		// Function to show a toast notification
		function showToast(message) {
			const toast = document.createElement('div');
			toast.className = 'toast';
			toast.textContent = message;
			document.body.appendChild(toast);

			setTimeout(() => {
				toast.remove();
			}, 3000);
		}

		// Initialize cart count when the page loads
		document.addEventListener('DOMContentLoaded', () => {
			updateCartCount();
		});

		function checkLogin(event) {
			// Prevent the default action
			event.preventDefault();

			// Check if the user is logged in
			const isLoggedIn = <?php echo json_encode($isLoggedIn); ?>;

			if (!isLoggedIn) {
				// Redirect to login page if not logged in
				window.location.href = 'login.php';
			} else {
				// Proceed to the cart page if logged in
				window.location.href = 'cart.php';
			}
		}

		function addToCart(name, price, image) {
			// Check if the user is logged in
			const isLoggedIn = <?php echo json_encode($isLoggedIn); ?>;

			if (!isLoggedIn) {
				// Redirect to login page if not logged in
				window.location.href = 'login.php';
				return; // Exit the function
			}

			const cartItems = JSON.parse(localStorage.getItem('cart')) || [];
			cartItems.push({ name, price, image });
			localStorage.setItem('cart', JSON.stringify(cartItems));

			// Update the cart count
			updateCartCount();

			// Show toast notification
			showToast(`${name} added to cart!`);
		}

		function addToCart(name, price, image) {
			const isLoggedIn = <?php echo json_encode($isLoggedIn); ?>;
			const userEmail = <?php echo json_encode($_SESSION['email'] ?? ''); ?>;

			if (!isLoggedIn) {
				window.location.href = 'login.php';
				return;
			}

			const cartKey = `cart_${userEmail}`;
			const cartItems = JSON.parse(localStorage.getItem(cartKey)) || [];
			cartItems.push({ name, price, image });
			localStorage.setItem(cartKey, JSON.stringify(cartItems));

			updateCartCount();
			showToast(`${name} added to cart!`);
		}

		function updateCartCount() {
			const userEmail = <?php echo json_encode($_SESSION['email'] ?? ''); ?>;
			const cartKey = `cart_${userEmail}`;
			const cartItems = JSON.parse(localStorage.getItem(cartKey)) || [];
			const cartCount = document.querySelector('.cart-count');
			cartCount.textContent = cartItems.length;
		}
		function updateCartCount() {
			const isLoggedIn = <?php echo json_encode(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true); ?>;
			const cartCount = document.querySelector('.cart-count');

			if (!isLoggedIn) {
				// If the user is not logged in, set the cart count to 0
				cartCount.textContent = 0;
				return;
			}

			// If the user is logged in, fetch the cart count from localStorage
			const cartItems = JSON.parse(localStorage.getItem('cart')) || [];
			cartCount.textContent = cartItems.length;
		}

		// Initialize cart count when the page loads
		document.addEventListener('DOMContentLoaded', () => {
			updateCartCount();
		});
	</script>

	</html>