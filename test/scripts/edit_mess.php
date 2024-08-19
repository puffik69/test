<?php
require_once 'connect.php';
$title = $_POST['title'];
$author = $_POST['author'];
$description = $_POST['description'];
$content = $_POST['content'];
$ID = $_POST['ID'];

$query = $pdo->prepare("UPDATE `messages` SET `title` = :title, `description` = :description, `content`= :content, `author`=:author WHERE id = :ID;");
$query->execute(array('title' => $title, 'author' => $author, 'description' => $description, 'content' => $content, 'ID' => $ID));
header('Location: ../message.php?id='.$ID);