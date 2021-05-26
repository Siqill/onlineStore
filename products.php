<?php
session_start();
$products = mysqli_query(mysqli_connect('localhost','root', '', 'zaliczenie'),
    "SELECT * FROM `product`");
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
            if (isset($_SESSION['user']) & isset($_SESSION['isAdmin'])) {
                echo '<li><a href="admin-panel.php" class="user">'. $_SESSION['user'] .'</a></li>';
            }
            else if (isset($_SESSION['user'])) {

                echo '<li><a href="sign-in.php" class="user">'. $_SESSION['user'] .'</a></li>';
            }
            ?>
            <li><a href="index.php">Main</a></li>
            <li><a href="products.php">Products</a></li>
            <li><a href="registration.php">Create new account</a></li>
            <?php
            if (isset($_SESSION['user'])) {
                echo '<li><a href="sign-out.php">Sign out</a></li>';
            }
            else {
                echo '<li><a href="sign-in.php">Sign in</a></li>';
            }
            ?>
        </ul>
    </nav>
</header>
<hr>
<main >
    <h1>List of out products</h1>
    <table >
        <tr>
            <th></th>
            <th>Name of product</th>
            <th>Description</th>
            <th>Price</th>
        </tr>
        <?php
        $i = 1;
        foreach ($products as $product) {
            ?>
            <tr>
                <td style="font-weight: bold"><?= $i ?></td>
                <td><?= $product['name'] ?></td>
                <td><?= $product['description'] ?></td>
                <td><?= $product['price'] ?></td>
                <?php
                if (!(isset($_SESSION['isAdmin'])) & isset($_SESSION['user'])) {
                    echo '<td ><a href = "basket.php?id='.$product['id'].'"> Buy </a></td>';
                }
                ?>
            </tr>
            <?php
            $i += 1;
        }
        ?>
    </table>
</main>

</body>
</html>