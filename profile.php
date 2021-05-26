<?php
    session_start();
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
<main>

    <h1>Hello <?= $_SESSION['user'] ?></h1>
    <?php
    if (!(isset($_SESSION['isAdmin'])) & isset($_SESSION['user'])) {
        echo '<a href = "basket.php" > Your basket </a>';
    }
    ?>
    <h2>This is your profile</h2>

</main>
</body>
</html>