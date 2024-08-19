<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <title>Редактирование сообщения</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Редактирование сообщения</h1>
        <form method="POST" action="scripts/edit_mess.php">
            <label>Заголовок:</label></br>
            <input name="title" type="text" value='<?echo $_POST['title']?>' required></br></br>
            <label>Автор:</label></br>
            <input name="author" type="text" value='<?echo $_POST['author']?>' required></br></br>
            <label>Краткое содержание:</label></br>
            <textarea name="description" type="text" rows='4' cols='50' required><?echo $_POST['description']?></textarea></br></br>
            <label>Полное содержание:</label></br>
            <textarea name="content" type="text" rows='4' cols='50' required><?echo $_POST['content']?></textarea></br></br>
            <input type='hidden' name='ID' value='<?echo $_POST['ID']?>'>
            <button type="submit">Добавить</button>
        </form>
    </body>
    <br><br><a href = 'message.php?id=<?echo $_POST['ID']?>'><button>Вернуться назад</button></a>
</html>