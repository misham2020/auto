-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 29 2021 г., 18:13
-- Версия сервера: 8.0.12
-- Версия PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `lims`
--

-- --------------------------------------------------------

--
-- Структура таблицы `protocol_table`
--

CREATE TABLE `protocol_table` (
  `id` int(11) NOT NULL,
  `numbers` varchar(256) NOT NULL,
  `Datav` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `employee` varchar(256) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `protocol` varchar(256) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `protocol_table`
--

INSERT INTO `protocol_table` (`id`, `numbers`, `Datav`, `employee`, `protocol`) VALUES
(122, '1', '2021-06-29 15:07:11', 'Петров', 'нет');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `protocol_table`
--
ALTER TABLE `protocol_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `protocol_table`
--
ALTER TABLE `protocol_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
