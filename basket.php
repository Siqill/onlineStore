<?php
    session_start();
    $q = array();
    if (isset($_GET['id'])) {
        $product = $_GET['id'];
        $product = mysqli_query(mysqli_connect('localhost','root', '', 'zaliczenie'),
            "SELECT * FROM `product` WHERE `id` = '$product'");
        $q = mysqli_fetch_assoc($product);
    }
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
<main>
    <table>
        <h1>Your products</h1>
            <tr>
                <th>Name of product</th>
                <th>Description</th>
                <th>Price</th>
            </tr>
        <?php
        if (isset($q) & $q != null) {
            ?>
            <tr>
                <td><?= $q['name'] ?></td>
                <td><?= $q['description'] ?></td>
                <td><?= $q['price'] ?></td>
            </tr>
            <?php
            unset($q);
        }
        ?>
    </table>
</main>

</body>
</html>
