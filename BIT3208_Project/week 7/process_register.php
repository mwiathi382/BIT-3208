<?php

include("connection.php");

if (isset($_POST['email'])) {

    $fullname = $_POST['fullname'];
    $email = $_POST['email'];

    // Hash the password before storing it
    $password = password_hash(
        $_POST['password'],
        PASSWORD_DEFAULT
    );

    $sql = "INSERT INTO users(fullname, email, password)
            VALUES('$fullname', '$email', '$password')";

    if (mysqli_query($conn, $sql)) {
        echo "Registration Successful! ";
        echo "<a href='login.php'>Login Here</a>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

?>