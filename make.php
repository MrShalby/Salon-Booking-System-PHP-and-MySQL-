<?php
session_start();

$isLoggedIn = isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hover Image and Info Box</title>
    <link rel="stylesheet" href="stylei.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

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
    <div class="container">
        <div class="temp">
            <div class="image-container">
                <img src="img1.jpeg" alt="Image" class="image">
            </div>
            <div class="details">
                <h2>
                    MAKE UP
                </h2>
                <p>Makeup is the art of enhancing facial features using cosmetics.
                    It can be used for beauty, self-expression, or even professional purposes like photography, film,
                    and theater.
                    Makeup styles can range from natural and subtle to bold and dramatic,
                    depending on personal preference, trends, and occasions.</p>
            </div>
        </div>
    </div>
    <div class="nail">Types of Make Up</div>

    <!------------------------------------------------>

    <section class="one">
        <div class="box-container">
            <div class="box">
                <img src="hd.webp" alt="Image 1" class="image-front">
                <div class="info-back">
                    <h3>HD MAKEUP</h3>
                    <p>HD (High Definition) Makeup is a professional makeup technique that uses high-quality products
                        designed to provide a flawless,
                        natural finish, even under high-resolution cameras.
                        It is widely used in bridal, film, television, and photography to create a smooth,
                        long-lasting look.

                        Key Features of HD Makeup:
                        Flawless Finish – HD makeup is designed to give a smooth, even look that blurs imperfections
                        while maintaining a natural skin texture.
                        Lightweight Feel – Unlike traditional makeup, HD formulas are lightweight and do not feel cakey
                        or heavy on the skin.
                        High-Quality Products – HD makeup products contain light-diffusing pigments that blend
                        seamlessly and avoid a patchy appearance.
                        Long-Lasting – The products used in HD makeup are resistant to sweat and oil, making them ideal
                        for long wear.

                    </p>
                    <div class="price-container">
                        <div class="price-tag">
                            <span class="currency">Rs.</span>
                            <span class="amount">1000</span>
                        </div>
                        <button class="add-to-cart-btn" onclick="addToCart('HD MAKEUP', 1000, 'hd.webp')">
                            <i class="fas fa-shopping-cart"></i>
                            Add to Cart
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="box-container">
            <div class="box">
                <img src="m4.jpg" alt="Image 1" class="image-front">
                <div class="info-back">
                    <h3>GLITTER MAKEUP </h3>
                    <p>IGlitter makeup is a popular beauty trend that adds sparkle and glamour to various makeup looks.
                        It is commonly used in special events, stage performances, parties, and festivals to enhance
                        facial features and create a bold, eye-catching appearance.

                        Types of Glitter Makeup:
                        Loose Glitter – Fine or chunky particles applied with an adhesive or gel.
                        Pressed Glitter – Pre-mixed with a binding agent, easy to apply without additional glue.
                        Glitter Gel – A gel-based formula that provides long-lasting hold.
                        Glitter Eyeliner – Liquid or gel liner with infused glitter for precision application.
                        Glitter Lipstick – A shimmery or metallic finish for lips.
                        Glitter Highlighter – Adds a luminous glow to the cheekbones and body.
                    </p>
                    <div class="price-container">
                        <div class="price-tag">
                            <span class="currency">Rs.</span>
                            <span class="amount">1000</span>
                        </div>
                        <button class="add-to-cart-btn" onclick="addToCart('GLITTER MAKEUP', 1000, 'm4.jpg')">
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
                <img src="smokey.jpg" alt="Image 1" class="image-front">
                <div class="info-back">
                    <h3>SMOKEY MAKEUP</h3>
                    <p>Smokey makeup is a popular and timeless makeup technique that creates a sultry, blended, and
                        dramatic
                        look around the eyes. It is often requested for special occasions, evening events, and glamorous
                        beauty
                        transformations. Here's a breakdown of what smokey makeup entails:
                        Key Features of Smokey Makeup:
                        Dark and Blended Eyeshadow: A seamless transition of dark to light shades, often with black or
                        deep brown at the outer corners.
                        Smudged Eyeliner: Soft, smudged eyeliner along the lash lines for a diffused effect.
                        Well-Defined Lashes: Voluminous mascara or false eyelashes enhance the dramatic look.
                        Balanced Face Makeup: Typically paired with neutral lips and well-contoured cheeks to keep the
                        focus on the eyes.
                    </p>
                    <div class="price-container">
                        <div class="price-tag">
                            <span class="currency">Rs.</span>
                            <span class="amount">1000</span>
                        </div>
                        <button class="add-to-cart-btn" onclick="addToCart('SMOKEY MAKEUP', 1000, 'smokey.jpg')">
                            <i class="fas fa-shopping-cart"></i>
                            Add to Cart
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="box-container">
            <div class="box">
                <img src="m3.jpg" alt="Image 1" class="image-front">
                <div class="info-back">
                    <h3>NUDE MAKEUP</h3>
                    <p>Nude makeup is a natural, minimalistic makeup style that enhances one's features while
                        maintaining a
                        fresh and effortless look. It is commonly offered in beauty salons and professional makeup
                        services for
                        clients who want a refined yet understated appearance.

                        Popular Beauty Services Offering Nude Makeup:
                        Bridal Makeup – Many brides opt for nude makeup for a soft and romantic wedding look.
                        Corporate & Professional Makeup – Perfect for business settings where a polished but natural
                        appearance is needed.
                        Photoshoots & Editorial Work – Creates a clean, radiant look for natural beauty-focused
                        photography.
                        Everyday Glam Services – Many salons offer nude makeup applications for daily wear or special
                        occasions.
                    </p>
                    <div class="price-container">
                        <div class="price-tag">
                            <span class="currency">Rs.</span>
                            <span class="amount">1000</span>
                        </div>
                        <button class="add-to-cart-btn" onclick="addToCart('NUDE MAKEUP', 1000, 'm3.jpg')">
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
                <img src="m6.jpeg" alt="Image 1" class="image-front">
                <div class="info-back">
                    <h3>Airbrush MAKEUP</h3>
                    <p>Airbrush makeup is a professional makeup application technique that uses a special airbrush
                        machine to spray a fine mist of foundation (or other makeup products) onto the skin.
                        This method provides a smooth, flawless finish and is commonly used for high-definition
                        photography,
                        special occasions, or on the runway.

                        How Airbrush Makeup Works
                        An airbrush system consists of:

                        Airbrush Gun: A small, handheld device that sprays makeup onto the skin using compressed air.
                        The nozzle releases a fine mist of makeup, which is evenly applied to the face.
                        Compressor: This is the machine that powers the airbrush gun. It pumps air through the gun,
                        which then mixes with the makeup and sprays it onto the skin.
                        Makeup Formula: The makeup used in airbrushing is often a lightweight, liquid foundation that's
                        specially formulated for airbrush application. It's usually designed to be thinner than regular
                        liquid foundation so that it can flow easily through the airbrush gun
                    </p>
                    <div class="price-container">
                        <div class="price-tag">
                            <span class="currency">Rs.</span>
                            <span class="amount">1000</span>
                        </div>
                        <button class="add-to-cart-btn" onclick="addToCart('AIRBUSH MAKEUP', 1000, 'm6.jpeg')">
                            <i class="fas fa-shopping-cart"></i>
                            Add to Cart
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="box-container">
            <div class="box">
                <img src="bridemakeup.jpg" alt="Image 1" class="image-front">
                <div class="info-back">
                    <h3>BRIDAL MAKEUP</h3>
                    <p>Bridal makeup is a specialized beauty service designed to enhance a bride's natural beauty while
                        ensuring
                        a long-lasting, flawless look for her wedding day. It involves professional makeup techniques,
                        high-quality
                        products, and often includes additional skincare and hairstyling services.

                        Skin Preparation – Cleansing, toning, and moisturizing to create a smooth base
                        Primer Application – Helps makeup last longer and reduces pores
                        Foundation & Concealer – Provides even coverage and hides imperfections
                        Eye Makeup – Includes eyeshadow, eyeliner, and lashes for a dramatic or natural effect
                        Blush & Contouring – Enhances facial structure and adds a natural glow
                        Lip Makeup – A well-defined lip color that complements the bride's look
                        Setting Spray – Seals the makeup for long-lasting wear

                    </p>
                    <div class="price-container">
                        <div class="price-tag">
                            <span class="currency">Rs.</span>
                            <span class="amount">1000</span>
                        </div>
                        <button class="add-to-cart-btn" onclick="addToCart('BRIDAL MAKEUP', 1000, 'bridemakeup.jpg')">
                            <i class="fas fa-shopping-cart"></i>
                            Add to Cart
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!---------------------------------------------->
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