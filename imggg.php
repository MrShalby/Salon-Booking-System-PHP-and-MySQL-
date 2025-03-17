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
    <title>Box Layout</title>
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


    <div class="container">
        <div class="temp">
            <div class="image-container">
                <img src="img2.jpeg" alt="Image" class="image">
            </div>
            <div class="details">
                <h2>
                    NAIL ART
                </h2>
                <p>Nail art is a creative way of decorating, painting, and enhancing nails to make them look
                    stylish and attractive. It has become a popular fashion trend, with various techniques and
                    designs to suit different occasions, moods, and personalities.This technique allows individuals
                    to achieve a variety of nail shapes, designs, and lengths that they may not be able to achieve
                    naturally</p>

            </div>
        </div>
    </div>
    <div class="nail">Types of Nail Art</div>


    <section class="one">
        <div class="box-container">
            <div class="box">
                <img src="metalic.jpg.jpeg" alt="Image 1" class="image-front">
                <div class="info-back">
                    <h3><i>METALIC EXTENSION</i></h3>
                    <p>Metallic nail extensions are a trendy and eye-catching way to enhance your nails.
                        These extensions are made from a variety of materials, including acrylic, gel,
                        or polygel, and are designed to give a sleek, shiny, and metallic finish.
                        The metallic effect can range from gold and silver to more colorful tones,
                        such as chrome, rose gold, or even holographic shades.<br>

                        Acrylic: Acrylic nails can be customized with metallic powders or foil to achieve a metallic
                        finish. These extensions are durable and can last several weeks with proper care.<br>
                        Gel: Gel nails often provide a more flexible, natural finish. Metallic gel polishes are applied
                        to create a shiny, reflective look. Some gel systems allow for a chrome effect when applied over
                        a dark base.<br>
                        Polygel: A hybrid of acrylic and gel, polygel offers a lightweight, flexible option for
                        extensions. Metallic finishes can also be added.</p>
                    <div class="price-container">
                        <div class="price-tag">
                            <span class="currency">Rs.</span>
                            <span class="amount">1000</span>
                        </div>
                        <button class="add-to-cart-btn"
                            onclick="addToCart('METALIC EXTENSION', 1000, 'metalic.jpg.jpeg')">
                            <i class="fas fa-shopping-cart"></i>
                            Add to Cart
                        </button>
                    </div>
                </div>


            </div>
        </div>


        <div class="box-container">
            <div class="box">
                <img src="3d.jpg.jpeg" alt="Image 1" class="image-front">
                <div class="info-back">
                    <h3><i>3-D ART</i></h3>
                    <p>3D nail art is an innovative and creative way to make your nails stand out by adding dimension
                        and texture to traditional nail designs. It involves creating raised, sculpted elements on the
                        nails, giving them a more eye-catching and tactile appearance. This type of nail art goes beyond
                        regular painting and allows for intricate designs that seem to "pop" off the surface of the
                        nails.

                        <br>
                        2.Acrylic Sculpting: One of the most common methods is using acrylic powders to build up 3D
                        shapes like flowers, bows, or abstract designs. The acrylic is applied over the nail and molded
                        into the desired shape before it hardens.
                        <br>
                        4.Sculpted Flowers and Characters: Popular designs often involve sculpted flowers, butterflies,
                        cartoon characters, and themed elements.
                    </p>
                    <div class="price-container">
                        <div class="price-tag">
                            <span class="currency">Rs.</span>
                            <span class="amount">1000</span>
                        </div>
                        <button class="add-to-cart-btn" onclick="addToCart('3-D ART', 1000, '3d.jpg.jpeg')">
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
                <img src="glitter.jpg.jpeg" alt="Image 1" class="image-front">
                <div class="info-back">
                    <h3><i>GLITTER ART</i></h3>
                    <p>Glitter nail extensions are a stunning way to add length and sparkle to your nails, blending the
                        classic appeal of nail extensions with the dazzling effect of glitter.
                        Whether you choose acrylic, gel, or other types of extensions, glitter can be seamlessly
                        integrated into the process for a bold, glam look
                        <br>Glitter Powder: The glitter can be mixed with the acrylic powder before applying it to the
                        nail, resulting in a more uniform sparkle throughout the nail.
                        <br>Layering: Glitter can also be applied after the acrylic nail has been shaped and cured. A
                        layer of glitter polish can be applied for a defined glitter effect.
                        <br>Encapsulation: Glitter can be encapsulated within the acrylic layers, ensuring a smooth
                        finish while preserving the sparkly effect. This technique is often used to preserve chunky
                        glitter without roughness
                    <div class="price-container">
                        <div class="price-tag">
                            <span class="currency">Rs.</span>
                            <span class="amount">1000</span>
                        </div>
                        <button class="add-to-cart-btn" onclick="addToCart('GLITTER ART', 1000, 'glitter.jpg.jpeg')">
                            <i class="fas fa-shopping-cart"></i>
                            Add to Cart
                        </button>
                    </div>
                </div>

            </div>
        </div>

        <div class="box-container">
            <div class="box">
                <img src="gel.jpg.jpeg" alt="Image 1" class="image-front">
                <div class="info-back">
                    <h3><i>GEL NAIL ART</i></h3>
                    <p>Gel nail art is a popular, long-lasting way to create beautiful, vibrant, and intricate nail
                        designs. The key feature of gel nails is the use of a gel polish that is cured under UV or LED
                        light, resulting in a smooth, glossy finish that lasts much longer than regular nail polish. Gel
                        nail art allows for endless creative possibilities, from subtle elegance to bold, intricate
                        designs. Here’s a deeper dive into gel nail art:


                        Gel nails are made from a special formula that is applied to the natural nails or nail
                        extensions.

                        <br>Gel Polish: Similar to regular nail polish but thicker and more durable. Gel polish is cured
                        under UV/LED light.
                        <br>Hard Gel: A thicker gel used for building nail extensions. It's applied in layers and is
                        often used for sculpting or adding length to the natural nails.

                        <br>Soft Gel: This type of gel can be easily soaked off, typically used for gel manicures rather
                        than extensions.
                    </p>
                    <div class="price-container">
                        <div class="price-tag">
                            <span class="currency">Rs.</span>
                            <span class="amount">1000</span>
                        </div>
                        <button class="add-to-cart-btn" onclick="addToCart('GEL NAIL ART', 1000, 'gel.jpg.jpeg')">
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
                <img src="acrylic.jpeg" alt="Image 1" class="image-front">
                <div class="info-back">
                    <h3><i>ACRLIC NAIL EXTENSION</i></h3>
                    <p>It is a cosmetic treatment where a durable acrylic material is
                        applied to natural nails to enhance length and shape
                        Acrylic nail extensions are a popular way to enhance the appearance of your natural nails,
                        providing length, strength, and a polished look. <br>
                        The process involves applying a mixture of liquid monomer and powder polymer to the natural nail
                        and sculpting it into the desired shape and length.<br>
                        The mixture hardens and forms a durable layer over the natural nail.<br>

                        The natural nails are cleaned and trimmed, and any old nail polish or extensions are removed.
                        <br> The cuticles are pushed back, and the nail surface is lightly buffed to ensure good
                        adhesion.
                    </p>
                    <div class="price-container">
                        <div class="price-tag">
                            <span class="currency">Rs.</span>
                            <span class="amount">1000</span>
                        </div>
                        <button class="add-to-cart-btn"
                            onclick="addToCart('ACRLIC NAIL EXTENSION', 1000, 'acrylic.jpeg')">
                            <i class="fas fa-shopping-cart"></i>
                            Add to Cart
                        </button>
                    </div>
                </div>


            </div>
        </div>

        <div class="box-container">
            <div class="box">
                <img src="dip.jpeg" alt="Image 1" class="image-front">
                <div class="info-back">
                    <h3><i>DIP POWDER NAILS</i></h3>
                    <p>Dip Powder Nails are a popular alternative to traditional gel and acrylic nails. They offer
                        long-lasting results with a variety of colors and designs, and they're generally considered to
                        be less damaging than other nail extension methods.
                        Dip powder nails involve applying a specially formulated powder to the nails, which is then
                        sealed with a bonding solution. The process doesn’t require UV light (unlike gel nails) and is
                        often considered quicker and easier than acrylic nails.


                        <BR>Nail cleaning: The natural nails are cleaned and shaped to your desired length and shape
                        (square, oval, almond, etc.).
                        <br>Cuticle care: Cuticles are pushed back and trimmed to ensure the nails are neat and clean.
                        <br> Buffing: The nail surface is lightly buffed to remove shine, which helps the bonding
                        solution adhere better
                    </p>
                    <div class="price-container">
                        <div class="price-tag">
                            <span class="currency">Rs.</span>
                            <span class="amount">1000</span>
                        </div>
                        <button class="add-to-cart-btn" onclick="addToCart('DIP POWDER NAILS', 1000, 'dip.jpeg')">
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