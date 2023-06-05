<?php
require "../php/db.php";

session_start();


$name = $_POST['name'];
$password = $_POST['password'];
$user_id = $_SESSION['user_id'];


if (!empty($name)){
    if (!empty($password)){
        update('update users set name = :name, password = :password where id = :user_id',
            ['name' => $name, 'password' => password_hash($_POST['password'], PASSWORD_DEFAULT), 'user_id' => $user_id]);
        $_SESSION['message'] = 'Обновление данных прошло успешно!';
    }
    else{
        $_SESSION['error'] = "Пароль пуст!";
    }
}
else{
    $_SESSION['error'] = "Имя пустое!";
}
header("location: ../pages/profile.php");