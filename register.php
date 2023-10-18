<?php
$name = $_POST['name1'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$adhar = $_POST['adhar'];
$pass1 = $_POST['pass1'];
$pass2  = $_POST['pass2'];

echo $name1;

$host = "localhost";
$db_username = "root";
$db_password = ""; 
$db_name = "hackathon";

$conn = new mysqli($host, $db_username, $db_password, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO registration (name1, email, phone, adhar,pass1, pass2 ) VALUES ('$name', '$email', '$phone', '$adhar', '$pass1', '$pass2')";

if ($conn->query($sql) === TRUE) {
    echo header("Location: test.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 
$conn->close();
?>

