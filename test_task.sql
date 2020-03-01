-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 02 2020 г., 01:20
-- Версия сервера: 8.0.15
-- Версия PHP: 7.0.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test_task`
--

-- --------------------------------------------------------

--
-- Структура таблицы `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `task` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `done` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tasks`
--

INSERT INTO `tasks` (`id`, `task`, `done`) VALUES
(1, '5555', 1),
(2, '5555', 1),
(3, 'task', 1),
(4, 'task', 1),
(5, 'task', 1),
(6, 'task', 1),
(7, 'task', 1),
(8, 'task', 1),
(9, 'task', 1),
(10, '222', 1),
(11, 'task', 1),
(12, '3333', 1),
(13, '5555', 1),
(14, 't55', 1),
(15, 'task', 1),
(16, 'task', 1),
(17, 'task', 1),
(18, 'task', 1),
(19, '1545', 1),
(20, '1545', 1),
(21, '1545', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `login` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET ucs2 COLLATE ucs2_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `login`, `password`) VALUES
(1, '', 'mather', '$2y$11$8ee82d517805e978f4687eV2H1xjYlA.vbfB8Qnx8UcGH/3Hbh4gm'),
(2, '', 'father', '$2y$11$e5a4a889c4024de251f23Ohfc83/YsiQzPGApBaV4S9xasO2ZIexq'),
(3, 'evgen_kalina@mail.ru', 'admin', '$2y$11$66b722e6ccba8c1858c01OgNuBUnxbL08yEHFC1t8clrqdWKFv2WG'),
(4, 'evgen23041983@gmail.com', '111', '$2y$11$74d93b9e630bf4393780cO9QIYbbdW9gCJEnEb0obsGI.u7fT8NuC'),
(5, 'evgen@gmail.com', 'fhather', '$2y$11$f858ca35e8be819d895dfujMgWv7vj3QL692lUydIsOSXZEEfw26a');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
