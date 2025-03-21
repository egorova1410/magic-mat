<?php
    session_start();
    require_once('../Conntect.php');

    $login = $_POST['login'];
    $password = $_POST['password'];
    $password = md5($password);
    mysqli_query($connect, "INSERT INTO user (`id`, login, `password`) VALUES (NULL, '$login', '$password')");
    header('Location: ../../Auth.php');
