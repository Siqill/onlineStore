<?php
    $productToDelete = $_GET['id'];

    mysqli_query(mysqli_connect('localhost','root', '', 'zaliczenie'),
        "DELETE FROM `product` WHERE `id` = '$productToDelete'");
    header("Location: ../admin-panel.php");