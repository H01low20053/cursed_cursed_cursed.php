<?php
session_start();
echo $_SESSION['error'];
unset($_SESSION['error']);
?>

<form method="post" action="../php/login.php">
    <label for="login">Логин:</label>
    <input type="text" id="login" name="login" required>
    <br>
    <label for="pass">Пароль:</label>
    <input type="password" id="pass" name="password" required>
    <br>
    <input type="submit" value="Войти">
</form>
<a href="regist_form.php">Регистрация</a>
