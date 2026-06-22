<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
</head>
<body>

<h2>User Registration</h2>

<form action="process_register.php" method="POST">

    <input type="text"
           name="fullname"
           placeholder="Full Name"
           required><br><br>

    <input type="email"
           name="email"
           placeholder="Email"
           required><br><br>

    <input type="password"
           name="password"
           placeholder="Password"
           required><br><br>

    <button type="submit">
        Register
    </button>

</form>

<p>
    Already have an account?
    <a href="login.php">Login</a>
</p>

</body>
</html>