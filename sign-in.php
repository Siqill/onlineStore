<?php
    session_start();
    if (isset($_SESSION['user'])) {
        header('Location: profile.php');
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
            <li><a href="index.php">Main</a></li>
            <li><a href="products.php">Products</a></li>
            <li><a href="registration.php">Create new account</a></li>
            <li><a href="sign-in.php">Sign in</a></li>
        </ul>
    </nav>
</header>
<hr>

<div class="form">
    <form  method="post" action="actions/verification.php">
        <label>Username</label>
        <input type="text" placeholder="Enter your username" name="login">
        <label>Password</label>
        <input type="password" placeholder="Enter password" name="pass">
        <button type="submit">Sign in</button>
        <p>
            Still dont have account? - <a href="registration.php">Create a new one</a>
        </p>
        <?php
        if (isset($_SESSION['errMsg'])) {
            echo '<p class="errMsg">' . $_SESSION['errMsg'] . '</p>';
            unset($_SESSION['errMsg']);
        }
        ?>
    </form>
</div>
<hr>

</body>
</html>
