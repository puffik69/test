<?php
require_once 'scripts/connect.php'; //подключение к бд
//получаем все сообщения
$result = $pdo->prepare("SELECT * FROM `messages`");
$result->execute();
$messages = $result->fetchAll(PDO::FETCH_ASSOC);
$count = 4; //количество сообщений выводимых на странице
$page_count = ceil(count($messages) / $count); //количество страниц
$page = $_GET['page'];
?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <title>Тест</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <!--сообщения-->
        <?for($i = $page*$count; $i < ($page + 1)*$count; $i++):?>
            <a href='message.php?id=<? echo $messages[$i]['id']?>'><h2><?echo $messages[$i]['title']?></h2></a>
            <h3><? echo $messages[$i]['description']?></h3>
        <?endfor;?>
        <?require_once 'pagination.php'?> <!--кнопки для перехода между страницами-->
        <br><br><a href='add_mess.php'><button>Добавить сообщение</button></a>
    </body>
</html>