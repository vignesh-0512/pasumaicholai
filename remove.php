<?php
session_start(); // Start the session

if (isset($_GET['name'])) {
    $nameToRemove = $_GET['name'];

    // Check if the cart session variable exists
    if (isset($_SESSION['cart'])) {
        // Loop through the cart items
        foreach ($_SESSION['cart'] as $key => $item) {
            // Check if the item matches the name to remove
            if ($item['name'] === $nameToRemove) {
                // Remove the item from the cart
                unset($_SESSION['cart'][$key]);
            }
        }
    }
}

// Redirect back to the cart page
header("Location: cart.php");
