<?php
session_start();

if(!isset($_SESSION['user'])){
    header("Location: login.php");
    exit();
}
?>

<h1>Welcome <?php echo $_SESSION['user']; ?></h1>

<p>Login Successful!</p>

<a href="students/add_student.php">Add Student</a><br><br>

<a href="students/view_students.php">View Students</a><br><br>

<a href="logout.php">Logout</a>