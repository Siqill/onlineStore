<?php
session_start();


 if (isset($_SESSION['user'])) {
    header("Location: profile.php");
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
    <form action="actions/sign-up.php" method="post">
        <label>Username</label>
        <input type="text" placeholder="Enter your username" name="username" required>
        <label>Password</label>
        <input type="password" placeholder="Enter password" name="password" required>
        <label>Confirm password</label>
        <input type="password" placeholder="Enter password" name="confirmPassword" required>
        <label>E-mail</label>
        <input type="email" placeholder="Enter email" name="email" required>
        <label>Phone number</label>
        <input type="text" placeholder="Enter your phone number" name="phoneNumber" required>
        <button type="submit">Confirm</button>
        <p>
            Do you have account - <a href="sign-in.php">Sign in</a>
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