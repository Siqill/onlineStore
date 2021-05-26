<?php
    session_start();
    require_once 'connect.php';

    $username = $_POST['login'];
    $password = $_POST['pass'];

    if (isset($connect)) {
       $check = mysqli_query($connect, "SELECT * FROM `users` WHERE `username` = '$username' AND `password` = '$password'");

       if (mysqli_num_rows($check) > 0) {
           if ($username === 'admin') {
               $_SESSION['isAdmin'] = true;
           }
           $_SESSION['id-user'] = mysqli_fetch_assoc($check)['id'];
           $_SESSION['user'] = $username;
            header("Location: ../profile.php");
       }
       else {
           $_SESSION['errMsg'] = 'Invalid username or password';
           header('Location: ../sign-in.php');
       }

    }