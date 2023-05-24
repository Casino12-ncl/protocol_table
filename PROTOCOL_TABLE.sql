-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 24 2023 г., 19:18
-- Версия сервера: 10.5.17-MariaDB
-- Версия PHP: 8.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `PROTOCOL_TABLE`
--

-- --------------------------------------------------------

--
-- Структура таблицы `PROTOCOL_TABLE`
--

CREATE TABLE `PROTOCOL_TABLE` (
  `number` int(11) NOT NULL,
  `date` date NOT NULL,
  `worker` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_norm` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `PROTOCOL_TABLE`
--

INSERT INTO `PROTOCOL_TABLE` (`number`, `date`, `worker`, `pro_norm`) VALUES
(1, '2023-05-01', 'ivanov', 'yes'),
(3, '2023-05-09', '21321', 'yes'),
(4, '2023-05-02', 'petrov', 'no'),
(6, '2023-05-02', '123', ''),
(7, '2023-05-09', '123', 'yes'),
(9, '2023-05-25', '21321', 'yes'),
(11, '2023-05-10', '123', 'yes'),
(12, '2023-04-25', 'petrov', 'yes'),
(13, '2023-05-02', '21321', ''),
(33, '2023-05-10', 'qwewq', ''),
(34, '2023-05-09', '123', 'yes'),
(54, '2023-05-02', '21321', 'yes');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `PROTOCOL_TABLE`
--
ALTER TABLE `PROTOCOL_TABLE`
  ADD PRIMARY KEY (`number`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
