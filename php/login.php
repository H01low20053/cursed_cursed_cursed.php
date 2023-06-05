<?php
require './db.php';
session_start();

$login = $_POST['login'];
$password = $_POST['password'];

$user = select('select * from users where login = :login', ['login' => $login]);
if (!empty($user)){
    if (password_verify($password, $user[0]['password'])){
        $_SESSION['user_id'] = $user[0]['id'];
        header('location: ../pages/profile.php');
    }
    else{
        $_SESSION['error'] = 'Неправильный пароль!';
        header('location ../pages/auth_form.php');
    }
}
else{
    $_SESSION['error'] = 'Неправильный логин!';
    header('location ../pages/auth_form.php');
}
