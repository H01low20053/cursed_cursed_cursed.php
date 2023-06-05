<?php
require "../php/db.php";
session_start();

$user_id = $_SESSION['user_id'];

delete(
    'delete from users  where id = :user_id',
    ['user_id' => $user_id]
);

unset($_SESSION['user_id']);

header("location: ../pages/auth_form.php");