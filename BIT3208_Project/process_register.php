<?php
include 'db_connect.php';

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO users (username, email, password)
VALUES ('$username', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "<h2>Registration Successful!</h2>";
} else {
    echo "Error: " . $conn->error;
}
?>