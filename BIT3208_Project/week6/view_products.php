<?php
include 'db.php';

$result = mysqli_query($conn, "SELECT * FROM products");
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Products</title>
</head>
<body>

<h2>Product List</h2>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Product Name</th>
        <th>Price</th>
        <th>Category</th>
        <th>Actions</th>
    </tr>

    <?php while($row = mysqli_fetch_assoc($result)) { ?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['product_name']; ?></td>
        <td><?php echo $row['price']; ?></td>
        <td><?php echo $row['category']; ?></td>
        <td>
            <a href="edit_product.php?id=<?php echo $row['id']; ?>">Edit</a> |
            <a href="delete_product.php?id=<?php echo $row['id']; ?>"
               onclick="return confirm('Are you sure you want to delete this product?')">
               Delete
            </a>
        </td>
    </tr>
    <?php } ?>

</table>

</body>
</html>