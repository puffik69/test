<?php
require_once 'connect.php';
$title = $_POST['title'];
$author = $_POST['author'];
$description = $_POST['description'];
$content = $_POST['content'];

$query = $pdo->prepare("INSERT INTO `messages` SET `title` = :title, `author` = :author, `description` = :description, `content` = :content");
$query->execute(array('title' => $title, 'author' => $author, 'description' => $description, 'content' => $content));
header('Location: ../index.php');