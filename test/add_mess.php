<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <title>Добавление сообщения</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Добавление сообщения</h1>
        <form method="POST" action="scripts/add_mess.php">
            <label>Заголовок:</label></br>
            <input name="title" type="text" required></br></br>
            <label>Автор:</label></br>
            <input name="author" type="text" required></br></br>
            <label>Краткое содержание:</label></br>
            <textarea name="description" type="text" rows='4' cols='50' required></textarea></br></br>
            <label>Полное содержание:</label></br>
            <textarea name="content" type="text"  rows='4' cols='50' required></textarea></br></br>
            <button type="submit">Добавить</button>
        </form>
        <br><br><a href = 'index.php'><button>Вернуться назад</button></a>
    </body>
</html>