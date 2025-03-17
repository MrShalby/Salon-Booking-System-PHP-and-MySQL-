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

    <!------------------------------------------------>
    <div class="container">
        <div class="temp">
            <div class="image-container">
                <img src="img6.jpeg" alt="Image" class="image">
            </div>
            <div class="details">
                <h2>
                    HAIR CUTTING & STYLING
                </h2>
                <p>A haircut is a way of shaping or trimming hair to achieve a specific look,
                    enhance facial features, and maintain hair health.
                    Haircuts can be customized based on hair length, texture, and personal style
                    Hairstyles vary based on hair length, texture, and personal preference.
                    They can be classic, trendy, or occasion-specific. </p>
            </div>
        </div>
    </div>
    <div class="nail">Types of Hair Cutting & Styling</div>
    <br>
    <section class="one">
        <div class="box-container">
            <div class="box">
                <img src="bob.jpeg" alt="Image 1" class="image-front">
                <div class="info-back">
                    <h3>Bob Cut</h3>
                    <p>The bob cut is one of the most iconic and versatile haircuts that has stood the test of time.
                        Known for its sleek and chic appearance, the bob can be customized in various ways to suit
                        different face shapes, hair textures, and personal styles.
                        Here's an in-depth look at the bob cut, its variations, and how it can be adapted to your needs:

                        1. Classic Bob Cut
                        Description: The classic bob is a straight-across haircut, typically cut at jaw-length or
                        slightly longer, with no layers or frills. It is one of the most recognizable and timeless
                        hairstyles, often associated with sleek sophistication.
                        Ideal For: People with straight or slightly wavy hair, as it works best when hair is smooth and
                        easy to manage.
                        Best Face Shapes: Oval, heart-shaped, and square faces.
                        Styling Tips: Use a flat iron to achieve a smooth and polished look, or add some texturizing
                        spray for a more natural finish.

                    </p>
                    <div class="price-container">
                        <div class="price-tag">
                            <span class="currency">Rs.</span>
                            <span class="amount">1000</span>
                        </div>
                        <button class="add-to-cart-btn" onclick="addToCart('Bob Cut', 1000, 'bob.jpeg')">
                            <i class="fas fa-shopping-cart"></i>
                            Add to Cart
                        </button>
                    </div>
                </div>
            </div>
        </div>



        <div class="box-container">
            <div class="box">
                <img src="feather.jpeg" alt="Image 1" class="image-front">
                <div class="info-back">
                    <h3>FEATHER CUT</h3>
                    <p>A feather cut is a popular hairstyle that involves layering the hair in a way
                        that creates a soft, feather-like effect. This style was widely popularized in
                        the 1970s, thanks to celebrities like Farrah Fawcett, and remains a trendy choice
                        for those looking for a stylish yet effortless look.

                        Key Features of Feather Cut:
                        Layered Look: Hair is cut in fine layers to give a light, bouncy effect.
                        Soft and Wispy Ends: The ends are tapered to create a feathery appearance.
                        Volume and Movement: Adds natural volume and movement, making it great for both straight and
                        wavy hair.
                        Face-Framing Effect: Usually styled with layers around the face to enhance facial features.
                        Versatile Style: Works well for short, medium, and long hair.

                    </p>
                    <div class="price-container">
                        <div class="price-tag">
                            <span class="currency">Rs.</span>
                            <span class="amount">1000</span>
                        </div>
                        <button class="add-to-cart-btn" onclick="addToCart('Feather Cut', 1000, 'feather.jpeg')">
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
                <img src="straight.jpeg" alt="Image 1" class="image-front">
                <div class="info-back">
                    <h3>STRAIGHTING</h3>
                    <p>Hair straightening is a popular beauty service that helps achieve smooth, sleek, and frizz-free
                        hair.
                        It involves various techniques, from temporary styling to permanent chemical treatments,
                        depending
                        on the client's needs and hair type.

                        Types of Hair Straightening Services:
                        Blow Drying & Brushing: Uses a round brush and blow dryer to smooth hair.
                        Flat Ironing: A heat tool that straightens hair strand by strand.
                        Hair Botox: A deep conditioning treatment that relaxes waves while strengthening hair.
                        Japanese Hair Straightening: A chemical treatment that restructures hair bonds to make it
                        permanently straight.
                        Hair Relaxing: Uses chemicals to break natural curls, making hair straighter for several months.



                    </p>
                    <div class="price-container">
                        <div class="price-tag">
                            <span class="currency">Rs.</span>
                            <span class="amount">1000</span>
                        </div>
                        <button class="add-to-cart-btn" onclick="addToCart('STRAIGHTING', 1000, 'straight.jpeg')">
                            <i class="fas fa-shopping-cart"></i>
                            Add to Cart
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-container">
            <div class="box">
                <img src="curls.jpeg" alt="Image 1" class="image-front">
                <div class="info-back">
                    <h3>CURLS</h3>
                    <p>A curls haircut for beauty services is a specialized hair-cutting technique designed to enhance
                        the shape,
                        definition, and movement of curly hair. Unlike straight haircuts, which often rely on blunt cuts
                        or layers
                        for styling, curly hair requires techniques that work with the natural curl pattern to prevent
                        frizz and maintain volume.

                        Types of Curls Haircuts:
                        DevaCut – A dry-cutting technique where each curl is shaped individually to enhance its natural
                        structure.
                        Rezo Cut – Focuses on adding volume and even length around the head while maintaining curl
                        shape.
                        Ouidad Cut – Uses the "carving and slicing" method to remove bulk while maintaining curl
                        definition.
                        Layered Curly Cut – Adds movement and shape by cutting layers that complement the curl type.
                        Blunt Curly Cut – A bold, structured cut that keeps curls full at the ends.

                    </p>
                    <div class="price-container">
                        <div class="price-tag">
                            <span class="currency">Rs.</span>
                            <span class="amount">1000</span>
                        </div>
                        <button class="add-to-cart-btn" onclick="addToCart('CURLS', 1000, 'curls.jpeg')">
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
                <img src="butterfly.jpeg" alt="Image 1" class="image-front">
                <div class="info-back">
                    <h3>BUTTERLY CUT</h3>
                    <p>The butterfly cut is a trendy and voluminous layered haircut that creates the illusion of shorter
                        hair while
                        maintaining length. It is especially popular in the beauty and hairstyling industry because of
                        its ability to
                        add movement, bounce, and face-framing layers.

                        Key Features of the Butterfly Cut:
                        Face-Framing Layers: The haircut features shorter layers around the face, mimicking butterfly
                        wings.
                        Voluminous Look: The layering technique enhances natural volume and makes hair appear fuller.
                        Illusion of Shorter Hair: The top layers are cut shorter while the bottom layers remain long,
                        making it easy to style the hair in a way that resembles a shorter bob or lob.
                        Ideal for Thick or Medium Hair: This cut works best for medium to thick hair as it enhances
                        natural texture.
                        Versatile Styling: It allows for multiple styling options, including soft waves, blowouts, and
                        flipped-out ends.
                    </p>
                    <div class="price-container">
                        <div class="price-tag">
                            <span class="currency">Rs.</span>
                            <span class="amount">1000</span>
                        </div>
                        <button class="add-to-cart-btn" onclick="addToCart('BUTTERLY CUT', 1000, 'butterfly.jpeg')">
                            <i class="fas fa-shopping-cart"></i>
                            Add to Cart
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="box-container">
            <div class="box">
                <img src="bun.jpeg" alt="Image 1" class="image-front">
                <div class="info-back">
                    <h3> MESSY BUN</h3>
                    <p>A messy bun cut in beauty services refers to a haircut or styling technique designed
                        to make creating a messy bun easier and more effortless. It is particularly popular for
                        people who love casual, chic updos without needing excessive effort.

                        Key Features of a Messy Bun Cut:
                        Layered Cut – The hair is usually cut in layers to add movement and texture, making it easier to
                        achieve volume in a messy bun.
                        Face-Framing Pieces – Stylists often leave shorter strands around the face for a softer, more
                        flattering look when the bun is tied up.
                        Medium to Long Length – Works best with medium to long hair, as it provides enough length to
                        twist into a bun while still having wispy strands.
                        Textured Ends – A stylist may use razoring or point cutting to create a natural, tousled effect.
                    </p>
                    <div class="price-container">
                        <div class="price-tag">
                            <span class="currency">Rs.</span>
                            <span class="amount">1000</span>
                        </div>
                        <button class="add-to-cart-btn" onclick="addToCart('MESSY BUN', 1000, 'bun.jpeg')">
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