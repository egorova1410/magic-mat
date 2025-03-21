<?php 
session_start();
require_once('../Conntect.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = $_POST['login'];
    $password = md5($_POST['password']);


    echo "Логин: $login, Пароль: $password<br>";


    $stmt = $connect->prepare("SELECT * FROM `user` WHERE `login` = ? AND `password` = ?");
    $stmt->bind_param("ss", $login, $password);
    
    if ($stmt->execute()) {
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $userData = $result->fetch_assoc();
            $_SESSION['username'] = $userData['name'];
            header('Location: ../../User/Profile/Profile.php');
            exit();
        } else {
            echo '<p style="color:red;">Неправильный логин или пароль</p>';
        }
    } else {
        echo '<p style="color:red;">Ошибка выполнения запроса: ' . $stmt->error . '</p>';
    }
}
