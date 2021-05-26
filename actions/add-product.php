<?php
    require_once 'connect.php';
    $productName = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    if (isset($connect)) {
        mysqli_query($connect, "INSERT INTO `product` (`id`, `name`, `description`, `price`) 
                           VALUES (NULL, '$productName', '$description', '$price')");
        header("Location: ../admin-panel.php");
    }



