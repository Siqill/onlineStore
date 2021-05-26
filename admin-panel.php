<?php
    session_start();
    $users = mysqli_query(mysqli_connect('localhost','root', '', 'zaliczenie'),
        "SELECT * FROM `users`");
    $products = mysqli_query(mysqli_connect('localhost','root', '', 'zaliczenie'),
        "SELECT * FROM `product`");
    $orders = mysqli_query(mysqli_connect('localhost','root', '', 'zaliczenie'),
    "SELECT * FROM `orders`");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/main.css">
    <title>Document</title>
</head>
<body>
<header>
    <nav>
        <ul>
            <?php
            if (isset($_SESSION['user'])) {
                echo '<li><a href="admin-panel.php" class="user">' . $_SESSION['user'] . '</a></li>';
            }
            ?>
            <li><a href="index.php">Main</a></li>
            <li><a href="products.php">Products</a></li>
            <li><a href="registration.php">Create new account</a></li>
            <?php
            if (isset($_SESSION['user'])) {
                echo '<li><a href="sign-out.php">Sign out</a></li>';
            } else {
                echo '<li><a href="sign-in.php">Sign in</a></li>';
            }
            ?>
        </ul>
    </nav>
</header>
<hr>
<main class="panel-main">
    <h1>Admin panel</h1>
    <table border="1">
        <h2>Order list</h2>
        <tr>
            <th>ID</th>
            <th>ID_User</th>
            <th>ID_Product</th>
            <th>Date</th>
        </tr>
        <?php
        foreach ($orders as $order) {
        ?>
        <tr>
            <td><?= $order['id'] ?></td>
            <td><?= $order['id_users'] ?></td>
            <td><?= $order['id_product'] ?></td>
            <td><?= $order['date'] ?></td>
            <td><a style="color: red" href="actions/delete-order.php?id=<?= $order['id'] ?>">delete</a></td>
        </tr>
        <?php
        }
        ?>
    </table>

    <table border="1">
        <h2>Product list</h2>
        <tr>
            <th>ID</th>
            <th>Product name</th>
            <th>Description</th>
            <th>Price</th>
            <th><a style="color: aqua" href="product-add.php">Add</a></th>
        </tr>
        <?php
        foreach ($products as $product) {
            ?>
            <tr>
                <td><?= $product['id'] ?></td>
                <td><?= $product['name'] ?></td>
                <td><?= $product['description'] ?></td>
                <td><?= $product['price'] ?></td>
                <td><a style="color: orange" href="product-edit.php?id=<?= $product['id'] ?>">edit</a></td>
                <td><a style="color: red" href="actions/delete-product.php?id=<?= $product['id'] ?>">delete</a></td>
            </tr>

            <?php
        }
        ?>
    </table>

    <table border="1" >
        <h2>User list</h2>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>E-mail</th>
            <th>Phone Number</th>
        </tr>

        <?php

        foreach ($users as $user) {
            if ($user['username'] === 'admin') {
                continue;
            }
            ?>
            <tr>
                <td><?= $user['id'] ?></td>
                <td><?= $user['username'] ?></td>
                <td><?= $user['email'] ?></td>
                <td><?= $user['phoneNumber'] ?></td>
                <td><a style="color: red" href="actions/delete.php?id=<?= $user['id'] ?>">delete</a></td>
            </tr>

            <?php
        }
        ?>
    </table>

</main>
</body>
</html>
