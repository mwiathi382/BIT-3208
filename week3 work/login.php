<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h2>Smart E-Commerce Login</h2>

<form action="authenticate.php" method="POST">

    Username:<br>
    <input type="text" name="username" required><br><br>

    Email:<br>
    <input type="email" name="email" required><br><br>

    Password:<br>
    <input type="password" name="password" required><br><br>

    <button type="submit">Login</button>

</form>

</body>
</html>