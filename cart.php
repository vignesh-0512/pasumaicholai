<!DOCTYPE html>
<html lang="en">
<head>
    <style>
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

.container {
    background-color: #fff;
    border: 1px solid #e5e5e5;
    border-radius: 5px;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

/* Style the header and title */
h1 {
    text-align: center;
}

h2 {
    font-size: 24px;
    margin-bottom: 20px;
}

/* Style the table */
table {
    width: 100%;
    border-collapse: collapse;
}

table, th, td {
    border: 1px solid #ddd;
}

th, td {
    padding: 10px;
    text-align: left;
}

/* Style table header */
th {
    background-color: #333;
    color: #fff;
}

/* Style table data rows */
td {
    background-color: #f9f9f9;
}

/* Style Remove links */
td a {
    color: #d9534f;
    text-decoration: none;
}

td a:hover {
    text-decoration: underline;
}

.checkout-button {
    display: block;
    margin: 20px 0;
    text-align: center;
}

.checkout-button a {
    display: inline-block;
    background-color: #8bc34a; /* Light green background color */
    color: #fff;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s; /* Add a smooth transition */
}

.checkout-button a:hover {
    background-color: #689f38; /* Darker green on hover */
}

/* Style total row */
tr.total-row td {
    background-color: #333;
    color: #fff;
    font-weight: bold;
}
</style>
</head>
<body>
    <section id="cart">
        <div class="container m-5">
            <h1 class="text-center my-5">SHOPPING CART</h1>
            <div class="row">
                <div class="col-lg-8">
                    <h2>Your Cart</h2>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Product Name</th>
                                <th>Price</th>
                                <th>Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            session_start(); // Start a session to store cart items

                            if (isset($_POST['add_to_cart'])) {
                                $product_name = $_POST['product'];
                                $product_price = $_POST['price'];

                                // Initialize cart array if it doesn't exist
                                if (!isset($_SESSION['cart'])) {
                                    $_SESSION['cart'] = array();
                                }

                                // Add the item to the cart
                                $_SESSION['cart'][] = array('name' => $product_name, 'price' => $product_price);
                            }

                            // Display items in the cart
                            if (isset($_SESSION['cart'])) {
                                $total = 0; // Initialize total amount
                                foreach ($_SESSION['cart'] as $item) {
                                    echo '<tr>';
                                    echo '<td>' . $item['name'] . '</td>';
                                    echo '<td>Rs.' . number_format($item['price'], 2) . '</td>';
                                    echo '<td><a href="remove.php?name=' . $item['name'] . '">Remove</a></td>';
                                    echo '</tr>';
                                    $total += $item['price']; // Update total amount
                                }
                                echo '<tr>';
                                echo '<td><strong>Total:</strong></td>';
                                echo '<td><strong>Rs.' . number_format($total, 2) . '</strong></td>';
                                echo '<td></td>';
                                echo '</tr>';
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!--checkout btn-->
        <div class="checkout-button">
        <a href="checkout.php">Proceed to Checkout</a>
        </div>

    </section>
</body>
</html>
