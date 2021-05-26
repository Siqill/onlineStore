<?php

    $connect = mysqli_connect('localhost','root', '', 'zaliczenie');

    if(!$connect) {
        die("Error connection with database");
    }

