<?php
    session_start();
    unset($_SESSION['user']);
    unset($_SESSION['isAdmin']);
    unset($_SESSION['id-user']);
    header('Location: index.php');