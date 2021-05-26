<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/main.css">
    <title>Document</title>
</head>
<body>
<div class="form">
    <form action="actions/add-product.php" method="post">
        <a href="admin-panel.php">back</a>
        <h2>Add a new product</h2>
        <label>Product name</label>
        <input type="text" name="name">
        <label>Description</label>
        <input type="text" name="description">
        <label>Price</label>
        <input type="text" name="price">
        <button type="submit">Add</button>
    </form>
</div>
</body>
</html>