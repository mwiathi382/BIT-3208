<?php

include 'dbconnect.php';

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users
        WHERE username='$username'
        AND email='$email'
        AND password='$password'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

    header("Location: dashboard.php");
    exit();

} else {

    echo "Invalid Login Credentials";

}

?>