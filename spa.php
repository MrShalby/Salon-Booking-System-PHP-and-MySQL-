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
        <nav class="navbar" style="height: 67px;">

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

    <!------------------------------------------------>
    <div class="container">
        <div class="temp">
            <div class="image-container">
                <img src="img3.jpeg" alt="Image" class="image">
            </div>
            <div class="details">
                <h2>
                    SPA & MASSAGE
                </h2>
                <p>A spa is a place offering relaxation, beauty treatments, and wellness therapies.
                    It often includes services like massages, facials, body treatments, and hydrotherapy to rejuvenate
                    the body and mind.
                    Spas can be luxurious retreats or simple wellness centers focusing on holistic health</p>

            </div>
        </div>
    </div>
    <div class="nail">Types of Spa Massage</div>
    <br>
    <section class="one">
        <div class="box-container">
            <div class="box">
                <img src="facial.jpeg" alt="Image 1" class="image-front">
                <div class="info-back">
                    <h3>FACIAL</h3>
                    <p>A facial is a skincare treatment designed to cleanse, exfoliate, hydrate,
                        and nourish the skin, promoting a clear and youthful complexion.
                        It is often combined with relaxation techniques like gentle massage to enhance circulation and
                        relieve stress.

                        Key Benefits of a Spa Facial:
                        Deep Cleansing – Removes dirt, oil, and impurities from the skin.
                        Exfoliation – Gets rid of dead skin cells for a smoother texture.
                        Anti-Aging Effects – Helps reduce fine lines, wrinkles, and dullness.
                        Acne & Blemish Control – Targets skin concerns like acne and pigmentation.
                        Relaxation & Stress Relief – The process is soothing and relieves tension.
                    </p>
                    <div class="price-container">
                        <div class="price-tag">
                            <span class="currency">Rs.</span>
                            <span class="amount">1000</span>
                        </div>
                        <button class="add-to-cart-btn" onclick="addToCart('Facial', 1000, 'facial.jpeg')">
                            <i class="fas fa-shopping-cart"></i>
                            Add to Cart
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="box-container">
            <div class="box">
                <img src="men_ped.jpeg" alt="Image 1" class="image-front">
                <div class="info-back">
                    <h3>MANICURE & PEDICURE </h3>
                    <p>Manicure and pedicure treatments are essential spa services that focus on the
                        care and beautification of hands,feet, and nails. These treatments go beyond
                        aesthetic appeal, offering relaxation, rejuvenation, and therapeutic benefits.

                        Steps in a Manicure & pedicure:
                        Soaking – Hands are soaked in warm water with essential oils to soften the skin and nails.
                        Nail Shaping & Filing – Nails are trimmed and shaped according to the client's preference.
                        Cuticle Treatment – Cuticles are pushed back and moisturized.
                        Callus Removal – Rough, dry skin is gently filed or exfoliated.
                        Massage – A foot and calf massage relieves tension and improves circulation</p>
                    <div class="price-container">
                        <div class="price-tag">
                            <span class="currency">Rs.</span>
                            <span class="amount">1000</span>
                        </div>
                        <button class="add-to-cart-btn" onclick="addToCart('MAICURE & PEDICURE', 1000, 'men_ped.jpeg')">
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
                <img src="ayu.jpeg" alt="Image 1" class="image-front">
                <div class="info-back">
                    <h3>AYURVEDIC SPA</h3>
                    <p>IAyurvedic spas offer therapeutic treatments based on Ayurveda, an ancient Indian system of
                        natural healing.
                        hese spas focus on balancing the body's three doshas (Vata, Pitta, and Kapha) to promote overall
                        well-being,
                        relaxation, and detoxification.

                        Benefits of Ayurvedic Spa Treatments:
                        Deep relaxation and stress relief
                        Detoxification and cleansing of the body
                        Improved blood circulation and immunity
                        Relief from chronic pain and muscle tension
                        Skin rejuvenation and anti-aging benefits
                        Balance of mind, body, and spirit</p>
                    <div class="price-container">
                        <div class="price-tag">
                            <span class="currency">Rs.</span>
                            <span class="amount">1000</span>
                        </div>
                        <button class="add-to-cart-btn" onclick="addToCart('AYURVEDIC SPA', 1000, 'ayu.jpeg')">
                            <i class="fas fa-shopping-cart"></i>
                            Add to Cart
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="box-container">
            <div class="box">
                <img src="hot.jpeg" alt="Image 1" class="image-front">
                <div class="info-back">
                    <h3>HOT STONE MASSAGE</h3>
                    <p>
                        A hot stone massage is a type of massage therapy that uses smooth, heated stones to help relax
                        muscles,
                        improve circulation, and relieve tension. The therapist places warm basalt stones on specific
                        points
                        of the body and may also use them as a tool to perform massage strokes.

                        How a Hot Stone Massage Works:
                        Preparation: The therapist heats the stones (usually between 130-145°F or 55-63°C) in a water
                        bath before placing them on the body.
                        Placement: Stones are placed along the spine, palms, feet, and other key pressure points.
                        Massage Technique: The therapist may glide the stones over the skin using Swedish massage
                        techniques such as long strokes, circular movements, and kneading.
                        Cooling Stones (Optional): Some sessions include cool stones to reduce inflammation and balance
                        the body.

                    </p>
                    <div class="price-container">
                        <div class="price-tag">
                            <span class="currency">Rs.</span>
                            <span class="amount">1000</span>
                        </div>
                        <button class="add-to-cart-btn" onclick="addToCart('HOT STONE MASSAGE', 1000, 'hot.jpeg')">
                            <i class="fas fa-shopping-cart"></i>
                            Add to Cart
                        </button>
                    </div>
                </div>
            </div>
    </section>
    <section class="one">
        <div class="box-container">
            <div class="box">
                <img src="thai.jpeg" alt="Image 1" class="image-front">
                <div class="info-back">
                    <h3>THAI MASSAGE</h3>
                    <p> Thai massage is an ancient healing practice that combines acupressure, assisted yoga-like
                        stretching,
                        and energy work. Unlike Western-style massages that use oil and are performed on a massage
                        table,
                        Thai massage is typically done on a floor mat with the client fully clothed.

                        Benefits of Thai Massage:
                        Relieves muscle tension and pain
                        Improves flexibility and mobility
                        Enhances blood circulation
                        Reduces stress and promotes relaxation
                        Boosts energy levels and mental clarity
                        Aids in detoxification and lymphatic drainage
                    </p>
                    <div class="price-container">
                        <div class="price-tag">
                            <span class="currency">Rs.</span>
                            <span class="amount">1000</span>
                        </div>
                        <button class="add-to-cart-btn" onclick="addToCart('THAI MASSAGE', 1000, 'thai.jpeg')">
                            <i class="fas fa-shopping-cart"></i>
                            Add to Cart
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="box-container">
            <div class="box">
                <img src="Shiatsu.jpeg" alt="Image 1" class="image-front">
                <div class="info-back">
                    <h3>SHIATSU MASSAGE</h3>
                    <p> Shiatsu massage is a Japanese therapeutic technique that applies pressure using
                        fingers, palms, and thumbs to specific points on the body, similar to acupuncture
                        but without needles. It is based on traditional Chinese medicine principles, aiming
                        to balance the body's energy flow (Qi or Chi) through the meridians.

                        Benefits of Shiatsu Massage:
                        Relieves muscle tension and pain
                        Reduces stress and anxiety
                        Improves circulation and lymphatic flow
                        Enhances flexibility and posture
                        Supports digestive health
                        Aids in better sleep</p>
                    <div class="price-container">
                        <div class="price-tag">
                            <span class="currency">Rs.</span>
                            <span class="amount">1000</span>
                        </div>
                        <button class="add-to-cart-btn" onclick="addToCart('SHIATSU MASSAGE', 1000, 'shiatsu.jpeg')">
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