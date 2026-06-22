<?php
$name = "";

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dynamic User Input</title>
</head>
<body>

    <h2>Dynamic User Input Form</h2>

    <form method="POST">
        Enter Your Name:
        <input type="text" name="name" required>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if($name != "") {
        echo "<h3>Welcome, $name!</h3>";
    }
    ?>

</body>
</html>