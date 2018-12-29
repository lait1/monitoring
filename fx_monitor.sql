-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 29 2018 г., 11:47
-- Версия сервера: 5.7.14
-- Версия PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `fx_monitor`
--

-- --------------------------------------------------------

--
-- Структура таблицы `history`
--

CREATE TABLE `history` (
  `Id_history` int(11) NOT NULL,
  `link` int(11) NOT NULL,
  `last_update` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `history`
--

INSERT INTO `history` (`Id_history`, `link`, `last_update`) VALUES
(1, 1, '2018-12-20'),
(2, 1, '2018-12-02'),
(3, 2, '2018-12-20');

-- --------------------------------------------------------

--
-- Структура таблицы `links`
--

CREATE TABLE `links` (
  `Id_link` int(11) NOT NULL,
  `Name_link` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Distrib_link` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Tracker` int(11) NOT NULL,
  `Path_file` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `last_update` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `links`
--

INSERT INTO `links` (`Id_link`, `Name_link`, `Distrib_link`, `Tracker`, `Path_file`, `last_update`) VALUES
(1, 'Викинги', 'http://www.lostfilm.tv/series/Vikings/', 1, '', '2018-12-20'),
(2, 'Возвращение', 'http://www.lostfilm.tv/series/Homecoming/', 1, '', '2018-12-11');

-- --------------------------------------------------------

--
-- Структура таблицы `trackers`
--

CREATE TABLE `trackers` (
  `Id_track` int(11) NOT NULL,
  `Name_track` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Link_track` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `login_track` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `pass_track` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `trackers`
--

INSERT INTO `trackers` (`Id_track`, `Name_track`, `Link_track`, `login_track`, `pass_track`) VALUES
(1, 'Лост Фильм', 'http://www.lostfilm.tv/', 'liar', 'uii80byu'),
(2, 'Нова Фильм', 'http://newstudio.tv/', 'liar', 'uii80byu'),
(3, 'АлексФильм', 'https://alexfilm.cc/', 'liar', 'uii80byu');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`Id_history`);

--
-- Индексы таблицы `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`Id_link`);

--
-- Индексы таблицы `trackers`
--
ALTER TABLE `trackers`
  ADD PRIMARY KEY (`Id_track`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `history`
--
ALTER TABLE `history`
  MODIFY `Id_history` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `links`
--
ALTER TABLE `links`
  MODIFY `Id_link` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `trackers`
--
ALTER TABLE `trackers`
  MODIFY `Id_track` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
