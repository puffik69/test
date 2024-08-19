-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 19 2024 г., 07:59
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int NOT NULL,
  `author` text NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `author`, `content`) VALUES
(1, 'Василий', 'Комментарий 1'),
(2, 'Игнат', 'Комментарий 2'),
(3, 'Артемий', 'Комментарий 3'),
(20, 'Артемий', 'Комментарий Артемия');

-- --------------------------------------------------------

--
-- Структура таблицы `comToMess`
--

CREATE TABLE `comToMess` (
  `id_message` int NOT NULL,
  `id_comment` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `comToMess`
--

INSERT INTO `comToMess` (`id_message`, `id_comment`) VALUES
(3, 1),
(3, 2),
(4, 3),
(3, 20);

-- --------------------------------------------------------

--
-- Структура таблицы `messages`
--

CREATE TABLE `messages` (
  `id` int NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `content` text NOT NULL,
  `author` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `messages`
--

INSERT INTO `messages` (`id`, `title`, `description`, `content`, `author`) VALUES
(3, 'Сообщение 1', 'Краткое описание', 'Описание', 'Антон'),
(4, 'Сообщение 2', 'Краткое описание', 'Описание', 'Вадим'),
(5, 'Сообщение 3', 'Краткое описание', 'Описание', 'Богдан'),
(6, 'Сообщение 4', 'Краткое описание', 'Описание', 'Кирилл'),
(7, 'Сообщение 5', 'Краткое описание', 'Описание', 'Владислав'),
(8, 'Сообщение 6', 'Краткое описание', 'Описание', 'Роман'),
(9, 'Сообщение 7', 'Краткое описание', 'Описание', 'Максим'),
(10, 'Сообщение 8', 'Краткое описание', 'Описание', 'Александр'),
(11, 'Сообщение 9', 'Краткое описание', 'Описание', 'Анна'),
(12, 'Сообщение 10', 'Краткое описание', 'Описание', 'Анастасия'),
(13, 'Сообщение 11', 'Краткое описание', 'Описание', 'Лилиана'),
(14, 'Сообщение 12', 'Краткое описание', 'Описание', 'Наташа'),
(15, 'Сообщение 13', 'Краткое описание', 'Описание', 'Диана'),
(16, 'Сообщение 14', 'Краткое описание', 'Описание', 'Ульяна'),
(17, 'Сообщение 15', 'Краткое описание', 'Описание', 'Мария'),
(18, 'Сообщение 16', 'Краткое описание', 'Описание', 'Свтелана'),
(19, 'Сообщение 17', 'Краткое описание', 'Описание', 'Кристина'),
(20, 'Сообщение 18', 'Краткое описание', 'Описание', 'Анжелика'),
(21, 'Сообщение 19', 'Краткое описание', 'Описание', 'Екатерина'),
(22, 'Сообщение 20', 'Краткое описание', 'Описание', 'Виктория');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `comToMess`
--
ALTER TABLE `comToMess`
  ADD KEY `id_message` (`id_message`),
  ADD KEY `id_comment` (`id_comment`);

--
-- Индексы таблицы `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT для таблицы `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `comToMess`
--
ALTER TABLE `comToMess`
  ADD CONSTRAINT `comtomess_ibfk_1` FOREIGN KEY (`id_message`) REFERENCES `messages` (`id`),
  ADD CONSTRAINT `comtomess_ibfk_2` FOREIGN KEY (`id_comment`) REFERENCES `comments` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
