-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Янв 15 2019 г., 16:52
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
  `Path_file` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `last_update` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `links`
--

INSERT INTO `links` (`Id_link`, `Name_link`, `Distrib_link`, `Tracker`, `Path_file`, `last_update`) VALUES
(1, 'Викинги', 'http://www.lostfilm.tv/series/Vikings/', 1, 'http://tracktor.in/td.php?s=%2Fqv%2BAlqCnpj%2F9DW24x%2B3plaRhL4DaQRa0bLMVNWge2%2FA7GEcziDwJ97dl3HBL6PLjiUByzoTXZGGozh%2BGfCypr2Mym89MzzRsRDTFW0j%2BXi3f%2FemdmetrGK8H0eS0y4q7HseqA%3D%3D', '2019-01-11'),
(2, 'Возвращение', 'http://www.lostfilm.tv/series/Homecoming/', 1, 'http://tracktor.in/td.php?s=%2Bq%2FiwkW1zo7R%2F%2BeBK9OSIqE4qIyOITUl7w22161Tf9LQH%2B024fhI4t5vnQNimkHZgHqyDmCKNXyXV7uvhAtck4kGWPmwCRWeXKeunKW2DW5SGeTmrJAUyRpYEzLhbZ%2F3blQI2A%3D%3D', '2019-01-07'),
(4, 'ЧЗ', 'http://www.lostfilm.tv/series/Black_Mirror', 1, '', '2019-01-15'),
(5, 'Бесстыжие / Shameless', 'https://alexfilm.cc/?f=119', 3, '', '2019-01-15');

-- --------------------------------------------------------

--
-- Структура таблицы `trackers`
--

CREATE TABLE `trackers` (
  `Id_track` int(11) NOT NULL,
  `Name_track` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Link_track` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `login_track` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `pass_track` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `cookies` varchar(250) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `trackers`
--

INSERT INTO `trackers` (`Id_track`, `Name_track`, `Link_track`, `login_track`, `pass_track`, `cookies`) VALUES
(1, 'Лост Фильм', 'http://www.lostfilm.tv/', 'lait123', 'null', 'PHPSESSID=nhmkorlsvgjtnui7ksonn67j03; lf_udv=8d48281f91c58bf5def64428d9217a8a; lf_loyal_person=0; lnk_uid=2223ac40a3a10cef696aa681df266335; lf_new=1; lf_session=114a05eb1c421e657469bbf376af54e1.3199372; _gat=1'),
(2, 'Нова Фильм', 'http://newstudio.tv/', 'lait123', 'null', 'b=b; bb_data=a%3A3%3A%7Bs%3A2%3A%22uk%22%3BN%3Bs%3A3%3A%22uid%22%3Bi%3A449797%3Bs%3A3%3A%22sid%22%3Bs%3A20%3A%22g11bDRVu7e8y9IwotKOE%22%3B%7D'),
(3, 'АлексФильм', 'https://alexfilm.cc/', 'lait123', 'null', 'al_data=a%3A3%3A%7Bs%3A2%3A%22uk%22%3Bs%3A12%3A%222qyFH91QO65F%22%3Bs%3A3%3A%22uid%22%3Bi%3A31498%3Bs%3A3%3A%22sid%22%3Bs%3A20%3A%22tZdBGjSP5Gfk8arOAgAV%22%3B%7D');

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
  MODIFY `Id_link` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `trackers`
--
ALTER TABLE `trackers`
  MODIFY `Id_track` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
