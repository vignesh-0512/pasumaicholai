<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
    <section id="order-confirmation">
        <div class="container m-5">
            <h1 class="text-center my-5">ORDER CONFIRMATION</h1>
            <div class="row">
                <div class="col-lg-8">
                    <?php
                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        $name = $_POST['name'];
                        $address = $_POST['address'];
                        $payment_method = $_POST['payment_method'];

                        // Process the order, send emails, and perform any necessary actions.
                    ?>
                    <h2>Order Details</h2>
                    <p><strong>Name:</strong> <?php echo $name; ?></p>
                    <p><strong>Address:</strong> <?php echo $address; ?></p>
                    <p>Your order has been placed successfully.</p>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
