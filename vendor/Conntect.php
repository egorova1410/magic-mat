<?php 
    $connect = mysqli_connect('localhost', 'root', 'root', 'magicMat');
    if (!$connect) {
        die("Error connect to db");
    }
