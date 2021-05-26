<?php
    $orderToDelete = $_GET['id'];

    mysqli_query(mysqli_connect('localhost','root', '', 'zaliczenie'),
    "DELETE FROM `orders` WHERE `id` = '$orderToDelete'");
    header("Location: ../admin-panel.php");
