<?php

    session_start();
    require_once 'connect.php';

    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];

    if ($password === $confirmPassword) {
        if (isset($connect)) {
            mysqli_query($connect, "INSERT INTO `users` (`id`, `username`, `password`, `email`, `phoneNumber`) 
                           VALUES (NULL, '$username', '$password', '$email', '$phoneNumber')");
            $_SESSION['msg'] = 'registration was successful';
            header('Location: ../index.php');
        }
    }
    else {
        $_SESSION['errMsg'] = 'passwords dont match';
        header('Location: ../registration.php');
    }



