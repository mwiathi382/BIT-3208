<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "ecommerce_db"
);

if ($conn) {
    echo "Connected Successfully";
} else {
    echo "Connection Failed";
}

?>