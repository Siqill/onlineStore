<?php
    $userIdToDelete = $_GET['id'];

    mysqli_query(mysqli_connect('localhost','root', '', 'zaliczenie'),
        "DELETE FROM `users` WHERE `id` = '$userIdToDelete'");
    header("Location: ../admin-panel.php");


