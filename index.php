<?php session_start()?>
<!doctype html>
<html lang="ru">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <title>Document</title>
    </head>
<body>
    <header>
        <a href="pages/auth_form.php">Авторизация</a>
    </header>
    <div class="content">
        <?php if (!empty($_SESSION['user_id'])){?>
            <form action="./php/adding_theme.php" method="post" enctype="multipart/form-data">
                  <input type="text" placeholder="Название темы" name="title">
                  <input type="file" name="cover" required>
                  <textarea name="text" placeholder="Первое сообщение темы:">
                  </textarea>
                  <input type="submit" value="Создать тему">
            </form>
        <?php } ?>
    </div>
</body>
</html>
