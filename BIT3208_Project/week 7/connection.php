<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "authentication_db"
);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

?>