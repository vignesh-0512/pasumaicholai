<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Include your CSS and other head elements here -->
</head>
<body>
    <section id="product">
        <div class="container m-5">
            <h1 class="text-center my-5">OUR PRODUCTS</h1>
            <div class="row">
                <?php
                // Connect to the database (replace with your credentials)
                $mysqli = new mysqli("localhost", "root", "", "shoppingcart");

                if ($mysqli->connect_error) {
                    die("Connection failed: " . $mysqli->connect_error);
                }

                // Query the database to retrieve product data
               // Query the database to retrieve product data
                $sql = "SELECT name, price, img FROM products";
                $result = $mysqli->query($sql);


                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<div class="col-lg-4 col-md-4 col-12">';
                        echo '<div class="card">';
                        echo '<img src="' . $row["img"] . '" class="card-img-top">';
                        echo '<div class="card-body text-center">';
                        echo '<h5 class="card-title">' . $row["name"] . '</h5>';
                        echo '<p class="price">Rs.' . number_format($row["price"], 2) . '</p>';
                        echo '<form method="post" action="cart.php">';
                        echo '<input type="hidden" name="product" value="' . $row["name"] . '">';
                        echo '<input type="hidden" name="price" value="' . $row["price"] . '">';
                        echo '<button type="submit" class="btn signin" name="add_to_cart">Add To Cart</button>';
                        echo '</form>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                } else {
                    echo "No products available.";
                }

                // Close the database connection
                $mysqli->close();
                ?>
            </div>
        </div>
    </section>
</body>
</html>
