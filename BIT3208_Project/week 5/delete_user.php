<?php
include 'db_connect.php';

$id = 1; // change to a real user id

$sql = "DELETE FROM users WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "User deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
?>