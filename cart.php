<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);// Start the session


// Check if the user is logged in
$isLoggedIn = isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart - The Glam Gallery</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f9f9f9;
            color: #333;
        }

        .cart-container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .cart-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px;
            border-bottom: 1px solid #ddd;
        }

        .cart-item:last-child {
            border-bottom: none;
        }

        .cart-item img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 8px;
            margin-right: 15px;
        }

        .cart-item-details {
            flex: 1;
        }

        .cart-item-details h3 {
            margin: 0;
            font-size: 18px;
            color: #2d3436;
        }

        .cart-item-details p {
            margin: 5px 0;
            color: #666;
        }

        .remove-btn {
            background-color: #ff6f61;
            color: white;
            border: none;
            padding: 8px 12px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            transition: background-color 0.3s ease;
        }

        .remove-btn:hover {
            background-color: #ff3b2f;
        }

        .cart-total {
            text-align: right;
            margin-top: 20px;
            font-size: 20px;
            font-weight: bold;
        }

        .book-appointment-btn {
            display: block;
            width: 100%;
            padding: 15px;
            background-color: #ff6f61;
            color: white;
            text-align: center;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }

        .book-appointment-btn:hover {
            background-color: #ff3b2f;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar">
            <div class="logo">
                <!-- Your logo here -->
            </div>
            <ul class="nav-links" style="margin-top: 22px;  margin-right: -15px;">
                <li><a href="index.php">Home</a></li>


                <li><a href="pack.php">Packages</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="cart.php" class="cart-icon"><i class="fas fa-shopping-cart"></i><span
                            class="cart-count">0</span></a></li>
            </ul>
        </nav>
    </header>

    <div class="cart-container">
        <style>
            .cart-item img {
                width: 100px;
                height: 100px;
                margin-right: 10px;
            }
        </style>
        <h1>Your Cart</h1>
        <div id="cart-items">
            <!-- Cart items will be dynamically added here -->
        </div>


        <div class="cart-total">
            <p>Total: Rs. <span id="cart-total">0</span></p>
            <form id="cart-form" action="appoint.php" method="POST">
                <input type="hidden" name="cart_items" id="cart-items-input">
                <button type="submit" class="book-appointment-btn">Book Appointment</button>
                </form>

                <script>
                    document.addEventListener("DOMContentLoaded", function () {

                        


                        const isLoggedIn = <?php echo json_encode(isset($_SESSION['loggedin']) 
                        && $_SESSION['loggedin'] === true); ?>;

                        if (!isLoggedIn) {
                            // If the user is not logged in, show an empty cart
                            document.getElementById("cart-items").innerHTML = "<p>Your cart is empty.</p>";
                            document.getElementById("cart-total").textContent = "0";
                            return;
                        }

                        // If the user is logged in, fetch cart items from localStorage
                        const cartItems = JSON.parse(localStorage.getItem('cart')) || [];
                        const cartItemsContainer = document.getElementById("cart-items");
                        const cartTotal = document.getElementById("cart-total");
                        let total = 0;

                        if (cartItems.length === 0) {
                            cartItemsContainer.innerHTML = "<p>Your cart is empty.</p>";
                            return;
                        }

                        cartItems.forEach(item => {
                            const cartItem = document.createElement("div");
                            cartItem.classList.add("cart-item");
                            cartItem.innerHTML = `
            <img src="${item.image}" alt="${item.name}">
            <div class="cart-item-details">
                <h3>${item.name}</h3>
                <p>Price: Rs. ${item.price}</p>
            </div>
            <button class="remove-btn" onclick="removeItem('${item.name}')">
                <i class="fas fa-trash"></i> Remove
            </button>
        `;
                            cartItemsContainer.appendChild(cartItem);
                            total += parseFloat(item.price);
                        });

                        cartTotal.textContent = total.toFixed(2);

                        // Handle form submission
                        const cartForm = document.getElementById("cart-form");
                        cartForm.addEventListener("submit", function (e) {
                            e.preventDefault(); // Prevent default form submission

                            // Set the cart items as a JSON string in the hidden input field
                            document.getElementById("cart-items-input").value = JSON.stringify(cartItems);

                            // Submit the form programmatically
                            this.submit();
                        });
                    });

                    // Function to remove an item from the cart
                    function removeItem(itemName) {
                        let cartItems = JSON.parse(localStorage.getItem('cart')) || [];
                        cartItems = cartItems.filter(item => item.name !== itemName);
                        localStorage.setItem('cart', JSON.stringify(cartItems));

                        // Refresh the cart display
                        window.location.reload();
                    }
                    // Function to update the cart count in the navbar
                    function updateCartCount() {
                        const cartItems = JSON.parse(localStorage.getItem('cart')) || [];
                        const cartCount = document.querySelector('.cart-count');
                        cartCount.textContent = cartItems.length;
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