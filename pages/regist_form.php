<?php
session_start();
echo $_SESSION['error'];
unset($_SESSION['error']);
?>

<form method="post" action="../php/registration.php">
    <label for="login">Логин:</label>
    <input type="text" id="login" name="login">
    <br>
    <label for="pass">Пароль:</label>
    <input type="password" id="pass" name="password">
    <br>
    <label for="pass_repeat">Повторите пароль:</label>
    <input type="password" id="pass_repeat" name="password_repeat">
    <br>
    <input type="submit" value="Зарегистрироваться">
</form>
<a href="auth_form.php">Авторизация</a>
