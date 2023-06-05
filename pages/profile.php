<?php
require "../php/db.php";

session_start();

$user_id = $_SESSION['user_id'];
$user = select('select * from users where id - :id', ['id' => $user_id]);
$user_name = $user[0]['name'];
var_dump($user_id);
?>
<form action="../php/edit_user.php" method="post">
    <h2>Изменение данных:</h2>
    <span><?php echo $_SESSION['error']; unset($_SESSION['error'])?>
        <?php echo $_SESSION['message']; unset($_SESSION['message'])?><br>
    </span>
    <label for="name"</label>
    <input type="text" id="name" name="name" value = <?if($user_name !=null){
        echo $user_name;

    }
    else{
        echo '';
    }
        ?>><br>

    <label for="password"</label>
    <input type="text" id="password" name="password"><br>

    <input type="submit" value="Сохранить изменения">
</form>
<form action='../php/delete_user.php' method="post">
    <h2>Удаление аккаунта</h2>
    <input type="submit" value="Удалить">
</form>