<?php
session_start();
require "./db.php";

$cover = file_get_contents($_FILES['cover']['tmp.name']);
$title = $_POST['title'];
$text = $_POST['text'];

if (!empty($title)) {
    if (!empty($text)) {
        insert(
            'insert into themes (tutle, message, authtor, cover) VALUES (:title, :message, :user_id, :cover)',
            [
                'title' => $title,
                'message' => $text,
                'user_id' => $_SESSION['user_id'],
                'cover' => $cover
            ]
        );
    } else {
        $_SESSION['error'] = "Текст отсутсвует!";
        header('location: ../index.php');
    }
}
else {
    $_SESSION['error'] = "Заголовок пуст!";
    header('location: ../index.php');
}
