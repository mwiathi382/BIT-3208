<?php
include 'db.php';

if(isset($_POST['submit'])){

    $name = $_POST['product_name'];
    $price = $_POST['price'];
    $category = $_POST['category'];

    $sql = "INSERT INTO products(product_name, price, category)
            VALUES('$name','$price','$category')";

    mysqli_query($conn, $sql);

    echo "Product added successfully!";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
</head>
<body>

<h2>Add Product</h2>

<form method="POST">
    Product Name:<br>
    <input type="text" name="product_name" required><br><br>

    Price:<br>
    <input type="number" step="0.01" name="price" required><br><br>

    Category:<br>
    <input type="text" name="category" required><br><br>

    <button type="submit" name="submit">Save Product</button>
</form>

</body>
</html>