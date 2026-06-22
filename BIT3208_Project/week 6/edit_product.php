<?php
include 'db.php';

$id = $_GET['id'];

$result = mysqli_query($conn,
"SELECT * FROM products WHERE id=$id");

$row = mysqli_fetch_assoc($result);

if(isset($_POST['update'])){

    $name = $_POST['product_name'];
    $price = $_POST['price'];
    $category = $_POST['category'];

    mysqli_query($conn,
    "UPDATE products
    SET product_name='$name',
        price='$price',
        category='$category'
    WHERE id=$id");

    header("Location: view_products.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
</head>
<body>

<h2>Edit Product</h2>

<form method="POST">

    Product Name:<br>
    <input type="text"
           name="product_name"
           value="<?php echo $row['product_name']; ?>"
           required><br><br>

    Price:<br>
    <input type="number"
           step="0.01"
           name="price"
           value="<?php echo $row['price']; ?>"
           required><br><br>

    Category:<br>
    <input type="text"
           name="category"
           value="<?php echo $row['category']; ?>"
           required><br><br>

    <button type="submit" name="update">
        Update Product
    </button>

</form>

</body>
</html>