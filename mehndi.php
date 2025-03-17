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
    <title>Hover Image and Info Box</title>
    <link rel="stylesheet" href="stylei.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
        <nav class="navbar" style="height: 70px;">
            <div class="logo">

            </div>
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>


                <li>
                    <div class="dropdown">
                        <button class="dropbtn"
                            style=" font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">Services</button>
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
    </header>
    <div class="container">
        <div class="temp">
            <div class="image-container">
                <img src="img4.jpeg" alt="Image" class="image">
            </div>
            <div class="details">
                <h2>
                    MEHNDI
                </h2>
                <p>Mehndi, also known as henna, is a form of body art in which intricate designs are drawn on the skin
                    using a paste made from the powdered leaves of the henna plant (Lawsonia inermis).
                    It has been used for centuries in various cultures, especially in South Asia, the Middle East, and
                    North Africa, for decorative and ceremonial purposes.</p>
            </div>
        </div>
    </div>
    <div class="nail">Types of Mehndi</div>

    <!------------------------------------------------>

    <br>

    <section class="one">
        <div class="box-container">
            <div class="box">
                <img src="arabic.jpg.jpeg" alt="Image 1" class="image-front">
                <div class="info-back">
                    <h3>ARABIC MEHNDI</h3>
                    <p>Arabic mehndi (henna) is a popular style of henna art known for its bold, flowing, and elegant
                        designs.
                        Unlike traditional Indian mehndi, which is often intricate and dense, Arabic mehndi focuses on
                        floral,
                        leafy, and paisley patterns with more open spaces, making it look modern and stylish.

                        Key Features of Arabic Mehndi:
                        Bold Outlines & Minimal Shading – The designs are made with thick, dark lines that stand out.
                        Floral & Leafy Patterns – Often inspired by nature, featuring roses, vines, and peacock motifs.
                        Quick to Apply – Compared to intricate Indian bridal mehndi, Arabic mehndi is faster and easier
                        to apply.
                        Elegant & Modern Look – Suitable for both casual and bridal wear.
                        Dark Stain – Typically, Arabic mehndi uses high-quality natural henna, which gives a rich brown
                        or reddish stain.
                    </p>
                    <div class="price-container">
                        <div class="price-tag">
                            <span class="currency">Rs.</span>
                            <span class="amount">1000</span>
                        </div>
                        <button class="add-to-cart-btn" onclick="addToCart('ARABIC MEHNDI', 1000, 'arabic.jpg.jpeg')">
                            <i class="fas fa-shopping-cart"></i>
                            Add to Cart
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="box-container">
            <div class="box">
                <img src="indian.jpg.jpeg" alt="Image 1" class="image-front">
                <div class="info-back">
                    <h3>INDIAN MEHNDI</h3>
                    <p>Mehndi (Henna) is an ancient body art form widely used in India for beauty and cultural
                        traditions.
                        It involves applying intricate designs on the hands, feet, and other body parts using a paste
                        made from dried henna leaves.
                        Mehndi is commonly used for weddings, festivals, and special occasions as a symbol of beauty,
                        good luck, and celebration.

                        Uses of Mehndi in Beauty Services:
                        Bridal Mehndi – A major part of Indian weddings, brides get elaborate henna designs on their
                        hands and feet. The darker the stain, the more auspicious it is believed to be.
                        Festive Mehndi – Applied during festivals like Diwali, Karva Chauth, Eid, and Teej for aesthetic
                        and cultural significance.
                        Casual & Party Mehndi – Trendy and minimalistic designs for casual occasions, engagements, or
                        parties.
                        Temporary Tattoo Art – Mehndi is used as a natural and temporary body art, an alternative to
                        permanent tattoos.


                    </p>
                    <div class="price-container">
                        <div class="price-tag">
                            <span class="currency">Rs.</span>
                            <span class="amount">1000</span>
                        </div>
                        <button class="add-to-cart-btn" onclick="addToCart('INDIAN MEHNDI', 1000, 'indian.jpg.jpeg')">
                            <i class="fas fa-shopping-cart"></i>
                            Add to Cart
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="one">
        <div class="box-container">
            <div class="box">
                <img src="western.jpg.jpeg" alt="Image 1" class="image-front">
                <div class="info-back">
                    <h3>WESTERN MEHNDI</h3>
                    <p>Western Mehndi is a modern adaptation of traditional henna (mehndi) designs, incorporating
                        contemporary patterns,
                        minimalistic styles, and fusion aesthetics. It is often used in beauty services for various
                        occasions,
                        including weddings, parties, festivals, and fashion events.

                        Features of Western Mehndi:
                        Minimalistic Designs – Unlike traditional Indian or Arabic mehndi, Western mehndi often features
                        simple, elegant, and geometric patterns.
                        White & Colored Henna – White, gold, and silver henna are trendy in Western beauty services,
                        offering a temporary tattoo-like effect.
                        Floral & Abstract Patterns – More focus on stylish floral motifs, bohemian patterns, and
                        abstract designs rather than dense traditional patterns.
                        Fusion with Other Art Forms – Blends elements of tattoo artistry, fine-line work, and modern
                        aesthetics.
                    </p>
                    <div class="price-container">
                        <div class="price-tag">
                            <span class="currency">Rs.</span>
                            <span class="amount">1000</span>
                        </div>
                        <button class="add-to-cart-btn" onclick="addToCart('WESTERN MEHNDI', 1000, 'western.jpg.jpeg')">
                            <i class="fas fa-shopping-cart"></i>
                            Add to Cart
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="box-container">
            <div class="box">
                <img src="flo.jpg.jpeg" alt="Image 1" class="image-front">
                <div class="info-back">
                    <h3>FLORAL MEHNDI</h3>
                    <p>Floral mehndi is a popular and elegant style of henna art that focuses on intricate
                        flower-inspired designs.
                        It is widely used in beauty services for special occasions like weddings, festivals, and
                        parties.
                        Unlike traditional mehndi patterns, which may include paisleys, geometric shapes, or cultural
                        motifs.

                        Key Features of Floral Mehndi Designs:
                        Nature-Inspired Patterns – Designs often include roses, lotuses, daisies, or peonies, along with
                        swirling vines and leaves.
                        Modern & Minimalistic Styles – Some designs are bold and full, while others are more
                        minimalistic with spaced-out floral elements for a trendy look.
                        Suitable for All Occasions – From bridal mehndi to casual beauty services, floral patterns work
                        well for all kinds of events.
                        Customization Options – Beauty professionals can mix floral patterns with Arabic, Indo-Western,
                        or tattoo-style mehndi for a unique look.

                    </p>
                    <div class="price-container">
                        <div class="price-tag">
                            <span class="currency">Rs.</span>
                            <span class="amount">1000</span>
                        </div>
                        <button class="add-to-cart-btn" onclick="addToCart('FLORAL MEHNDI', 1000, 'flo.jpg.jpeg')">
                            <i class="fas fa-shopping-cart"></i>
                            Add to Cart
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="one">
        <div class="box-container">
            <div class="box">
                <img src="african.jpeg" alt="Image 1" class="image-front">
                <div class="info-back">
                    <h3>African MEHNDI</h3>
                    <p>African Mehndi is a unique and culturally significant style of body art that blends traditional
                        African design motifs with the use of henna or mehndi paste.
                        This style is rooted in the rich artistic heritage of Africa, where body art has long been used
                        for ceremonial, social, and personal purposes.
                        African mehndi, unlike the more commonly known Indian or Arabic mehndi, is distinguished by its
                        bold, geometric patterns and tribal influences.


                        Key Characteristics of African Mehndi
                        Bold and Geometric Patterns:

                        African mehndi designs tend to feature bold, sharp lines and geometric shapes, often consisting
                        of triangles, squares, diamonds, and straight lines. These designs stand out on the skin and are
                        visually striking.
                        Patterns are typically symmetrical, balanced, and sometimes incorporate repetition, giving a
                        sense of rhythm and structure to the design</p>
                    <div class="price-container">
                        <div class="price-tag">
                            <span class="currency">Rs.</span>
                            <span class="amount">1000</span>
                        </div>
                        <button class="add-to-cart-btn" onclick="addToCart('AFRICAN MEHNDI', 1000, 'african.jpeg')">
                            <i class="fas fa-shopping-cart"></i>
                            Add to Cart
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="box-container">
            <div class="box">
                <img src="bridal.jpg.jpeg" alt="Image 1" class="image-front">
                <div class="info-back">
                    <h3>BRIDAL MEHNDI</h3>
                    <p>Bridal Mehndi (henna) is an essential part of traditional wedding beauty services,
                        especially in South Asian, Middle Eastern, and North African cultures.
                        It involves the application of intricate henna designs on the bride’s hands,and good fortune.

                        Importance of Bridal Mehndi in Beauty Services:
                        Enhances Bridal Look – Complements bridal attire and jewelry.
                        Symbolic Meaning – Represents love, happiness, and the bond between the bride and groom.
                        Long-Lasting & Natural – Henna is a natural dye that lasts for a week or more, making it an
                        organic beauty treatment.
                        Customization Options – Many beauty services offer personalized henna designs to match the
                        bride’s theme.</p>
                    <div class="price-container">
                        <div class="price-tag">
                            <span class="currency">Rs.</span>
                            <span class="amount">1000</span>
                        </div>
                        <button class="add-to-cart-btn" onclick="addToCart('BRIDAL MEHNDI', 1000, 'bridal.jpg.jpeg')">
                            <i class="fas fa-shopping-cart"></i>
                            Add to Cart
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </section>
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
    function showToast(message) {
        const toast = document.createElement('div');
        toast.className = 'toast-notification';
        toast.innerHTML = `
        <i class="fas fa-check-circle"></i>
        ${message}
    `;
        document.body.appendChild(toast);

        setTimeout(() => toast.remove(), 3000);
    }

    // Initialize cart count when the page loads
    document.addEventListener('DOMContentLoaded', () => {
        updateCartCount();
    });

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
    function addToCart(name, price, image) {
        const isLoggedIn = <?php echo json_encode($isLoggedIn); ?>;

        if (!isLoggedIn) {
            window.location.href = 'login.php';
            return;
        }

        // Get existing cart items from localStorage
        let cartItems = JSON.parse(localStorage.getItem('cart')) || [];

        // Add the new item to the cart
        cartItems.push({ name, price, image });

        // Save the updated cart back to localStorage
        localStorage.setItem('cart', JSON.stringify(cartItems));

        // Show a success message
        showToast(`${name} added to cart!`);

        // Update the cart count in the navbar
        updateCartCount();
    }

    // Function to update the cart count in the navbar
    function updateCartCount() {
        const cartItems = JSON.parse(localStorage.getItem('cart')) || [];
        const cartCount = document.querySelector('.cart-count');
        cartCount.textContent = cartItems.length;
    }

    // Function to show a toast notification
    function showToast(message) {
        const toast = document.createElement('div');
        toast.className = 'toast-notification';
        toast.innerHTML = `
        <i class="fas fa-check-circle"></i>
        ${message}
    `;
        document.body.appendChild(toast);

        setTimeout(() => toast.remove(), 3000);
    }

    // Initialize cart count when the page loads
    document.addEventListener('DOMContentLoaded', () => {
        updateCartCount();
    });
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