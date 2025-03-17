document.addEventListener("DOMContentLoaded", function () {
    const cartItems = JSON.parse(localStorage.getItem('cart')) || [];
    const cartItemsContainer = document.getElementById("cart-items");
    const cartTotal = document.getElementById("cart-total");
    const cartForm = document.getElementById("cart-form");
    const cartItemsInput = document.getElementById("cart-items-input");

    let total = 0;

    if (cartItems.length === 0) {
        cartItemsContainer.innerHTML = "<p>Your cart is empty.</p>";
        return;
    }

    // Display cart items
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
    cartForm.addEventListener("submit", function (e) {
        e.preventDefault(); // Prevent default form submission

        // Set the cart items as a JSON string in the hidden input field
        cartItemsInput.value = JSON.stringify(cartItems);

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