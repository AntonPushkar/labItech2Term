-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Апр 23 2020 г., 09:31
-- Версия сервера: 10.4.10-MariaDB
-- Версия PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `iteh1lbvar7`
--

-- --------------------------------------------------------

--
-- Структура таблицы `game`
--

CREATE TABLE `game` (
  `ID_Game` int(11) NOT NULL,
  `date` date NOT NULL,
  `place` varchar(128) NOT NULL,
  `score` varchar(5) NOT NULL,
  `FID_Team1` int(11) NOT NULL,
  `FID_Team2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `game`
--

INSERT INTO `game` (`ID_Game`, `date`, `place`, `score`, `FID_Team1`, `FID_Team2`) VALUES
(5, '2019-10-08', 'Харьков', '2:0', 45, 65),
(6, '2019-11-13', 'Киев', '0:2', 45, 65),
(7, '2020-04-25', 'Москва', '0:3', 54, 65),
(8, '2020-04-05', 'Португалия', '1:1', 65, 23),
(11, '2020-05-21', 'Днепр', '1:2', 23, 45);

-- --------------------------------------------------------

--
-- Структура таблицы `player`
--

CREATE TABLE `player` (
  `ID_Player` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `FID_Team` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `player`
--

INSERT INTO `player` (`ID_Player`, `name`, `FID_Team`) VALUES
(2187, 'Пятов', 65),
(5412, 'Ермак', 45);

-- --------------------------------------------------------

--
-- Структура таблицы `team`
--

CREATE TABLE `team` (
  `ID_Team` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `league` varchar(128) NOT NULL,
  `coach` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `team`
--

INSERT INTO `team` (`ID_Team`, `name`, `league`, `coach`) VALUES
(23, 'Барселона', 'Лига чемпионата УЕФА', 'Зубенко Михаил Петрович'),
(45, 'Динамо', 'Украинская лига', 'Иванов А.Г.'),
(54, 'Сборная ХНУРЭ', 'Golden Ball', 'Физрук'),
(65, 'Шахтер', 'Украинская лига', 'Петров А.А.');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`ID_Game`);

--
-- Индексы таблицы `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`ID_Player`);

--
-- Индексы таблицы `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`ID_Team`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
