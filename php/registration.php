<?php
require 'db.php';
session_start();

$login = $_POST['login'];
$password = $_POST['password'];
$password_repeat = $_POST['password_repeat'];

if ($password != $password_repeat){
    $_SESSION['error'] = 'Пароли не совпадают!';
    header("location: ../php/registration.php");
}
else{
    $password = password_hash($password, PASSWORD_DEFAULT);
    $user = select('select * from users where login = :login', ['login' => $login]);
    if (!empty($user)){
        $_SESSION['error'] = 'Такой пользователь уже существует!';
        header("location: ../php/registration.php");
    }
    else{
    $user_id = insert('insert into users (login, password) values (:login, :password)', [
        'login' => $login,
        'password' => $password
    ]);
        header("location: ../pages/auth_form.php");
    };
}


