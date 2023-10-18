<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the form is submitted

    // Connect to the database
    $connection = mysqli_connect('localhost', 'root', '', 'contactus');

    // Check the connection
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Get the name and address from the form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pno = $_POST['pno'];
    $reviews = $_POST['reviews'];

    

    // Prepare the SQL INSERT statement
    $sql = "INSERT INTO contact (name, email, pno, reviews) VALUES ('$name', '$email', '$pno', '$reviews')";

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