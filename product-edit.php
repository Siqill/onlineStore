<?php
    $productToEdit = $_GET['id'];
    $productToEdit = mysqli_query(mysqli_connect('localhost','root', '', 'zaliczenie'),
        "SELECT * FROM `product` WHERE `id` = '$productToEdit'");
    $productToEdit = mysqli_fetch_assoc($productToEdit);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/main.css">
    <title>Document</title>
</head>
<body>
<div class="form">
    <form action="actions/edit-product.php" method="post">
        <a href="admin-panel.php">back</a>
        <h2>Edit product</h2>
        <input type="hidden" name="id" value="<?= $productToEdit['id'] ?>" >
        <label>Product name</label>
        <input type="text" name="name" value="<?= $productToEdit['name'] ?>">
        <label>Description</label>
        <input type="search" name="description" value="<?= $productToEdit['description'] ?>">
        <label>Price</label>
        <input type="text" name="price" value="<?= $productToEdit['price'] ?>">
        <button type="submit">Edit</button>
    </form>
</div>
</body>
</html>
