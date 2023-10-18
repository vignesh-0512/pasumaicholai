<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the form is submitted

    // Connect to the database
    $connection = mysqli_connect('localhost', 'root', '', 'atc');

    // Check the connection
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Get the name and address from the form
    $names = $_POST['name'];
    $addres = $_POST['address'];

    // Prepare the SQL INSERT statement
    $sql = "INSERT INTO proorder (name, address) VALUES ('$names', '$addres')";

    // Execute the INSERT statement
    if (mysqli_query($connection, $sql)) {
        header("Location:index.php");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connection);
    }

    // Close the database connection
    mysqli_close($connection);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<style>

body {
  font-family: sans-serif;
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 700px;
  margin: 0;
  background-color: #f0f0f0; /* Optional background color */
}

.container {
  background-color: #fff;
  border: 1px solid #e5e5e5;
  border-radius: 5px;
  padding: 30px; /* Increase padding for more height and width */
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.2); /* Increase box shadow for a more professional look */
  max-width: 600px;
  width:3000px;
}

.form-group {
  margin-bottom: 20px;
  margin-right: 20px;
}

.form-control {
  width: 100%;
  padding: 15px; /* Increase padding for more height and width */
  border: 1px solid #ccc;
  border-radius: 5px;
  font-size: 18px; /* Increase font size */
  transition: border-color 0.2s;
}

.form-control:hover {
  border-color: #007BFF;
}

.form-control:focus {
  border-color: #0056b3;
}

.payment-method {
  margin-top: 20px;
}

.form-check-label {
  margin-left: 10px;
  list-style-type: disc; /* Add bullet points */
}

.btn-primary {
  display: block;
  padding: 10px; /* Increase padding for more height and width */
  background-color: #007BFF;
  color: #fff;
  border: none;
  border-radius: 5px;
  font-size: 22px; /* Increase font size */
  cursor: pointer;
  transition: background-color 0.2s;
  width: 600px;
}

.btn-primary:hover {
  background-color: #0056b3; /* Slightly darker on hover */
}


    </style>
</head>
<body>
    <section id="checkout">
        <div class="container">
            <h1 class="text-center">CHECKOUT</h1>
            <div class="row">
                <div class="col-lg-8">
                    <form method="post" action="checkout.php">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="address">Address:</label>
                            <textarea name="address" id="address" class="form-control"  required></textarea>
                        </div>
                        <div class="form-group"> <!-- Add a space between Address and Payment Method -->
                            <h2>Payment Method</h2>
                        </div>
                        <div class="form-check payment-method">
                            <input type="radio" name="payment_method" id="cod" class="form-check-input" value="cod" checked>
                            <label for="cod" class="form-check-label">Cash on Delivery</label><br></br>
                        </div>
                        <div class="form-group"> <!-- Add a space between Payment Method and Place Order -->
                            <button type="submit" class="btn-primary">Place Order</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
