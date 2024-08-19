<?php
require_once 'connect.php';
$author = $_POST['author'];
$content = $_POST['content'];
$ID = $_POST['ID'];

$insert_query = $pdo->prepare("INSERT INTO `comments` SET `author` = :author, `content` = :content");
$insert_query->execute(array('author' => $author, 'content' => $content));
$id_comm = $pdo->lastInsertId();
$insert_query = $pdo->prepare("INSERT INTO `comToMess` SET `id_message` = :id_message, `id_comment` = :id_comment");
$insert_query->execute(array('id_message' => $ID, 'id_comment' => $id_comm));
header('Location: ../message.php?id='.$ID);