<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
</head>
<body>

<h2>User Registration Form</h2>

<form action="process_register.php" method="POST">

    Username:<br>
    <input type="text" name="username" required><br><br>

    Email:<br>
    <input type="email" name="email" required><br><br>

    Password:<br>
    <input type="password" name="password" required><br><br>

    <input type="submit" value="Register">

</form>

</body>
</html>