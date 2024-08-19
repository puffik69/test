<?php
require_once __DIR__.'/scripts/connect.php'; //подключение к бд
$id = $_GET['id']; // id сообщения
$sth = $pdo->prepare("SELECT * FROM `messages` WHERE id = ?"); //получаем сообщение
$sth->execute(array($id));
$message = $sth->fetch(PDO::FETCH_ASSOC);
$result = $pdo->prepare("SELECT author, content FROM `comments` INNER JOIN comToMess ON comments.id = comToMess.id_comment WHERE comToMess.id_message = ?;"); //получаем комментарии
$result->execute(array($id));
$comments = $result->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <title>Сообщение</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <!--сообщение-->
 		<h2><?echo $message['title']?></h2>
        <h4><?echo $message['author']?></h4>
 		<p><?echo $message['description']?></p>
        <p><?echo $message['content']?></p>
        <!--редактирование сообщения -->
        <form method="POST" action="edit_mess.php">
            <input type='hidden' name='ID' value='<?echo $id?>'>
            <input type='hidden' name='title' value='<?echo $message['title']?>'>
            <input type='hidden' name='author' value='<?echo $message['author']?>'>
            <input type='hidden' name='description' value='<?echo $message['description']?>'>
            <input type='hidden' name='content' value='<?echo $message['content']?>'>
            <button type="submit">Редактировать сообщение</button>
        </form>
        <h1>Комментарии</h1>
        <?if (empty($comments)){ echo 'Комментариев нет';}
        else {
            foreach($comments as $comment){
                echo "<h3>".$comment['author']."</h3>";
                echo "<p>".$comment['content']."</p>";
            }
        }?>
        <h2>Добавить коментраий</h2>
        <form method="POST" action="scripts/add_comm.php">
            <input type='hidden' name='ID' value='<?echo $id?>'>
            <label>Автор:</label></br>
            <input name='author' type='text'></br></br>
            <label>Комментарий:</label></br>
            <textarea name="content" type="text"  rows='4' cols='50' required></textarea></br>
            <button type="submit">Добавить</button>
        </form>
        <br><br><a href = 'index.php'><button>Вернуться назад</button></a>
    </body>
</html>