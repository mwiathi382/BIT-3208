<?php
include 'db_connect.php';

$id = 1; // change this to existing user ID

$new_username = "UpdatedUser";

$sql = "UPDATE users SET username='$new_username' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "User updated successfully";
} else {
    echo "Error: " . $conn->error;
}
?>