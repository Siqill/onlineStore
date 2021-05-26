<?php
    $id = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    mysqli_query(mysqli_connect('localhost','root', '', 'zaliczenie'),
        "UPDATE `product` SET `name` = '$name', `description` = '$description', `price` = '$price' WHERE `id` = '$id'");
    header("Location: ../admin-panel.php");