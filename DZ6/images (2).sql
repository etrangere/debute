-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Май 28 2017 г., 17:20
-- Версия сервера: 5.6.25
-- Версия PHP: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `images`
--

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `Num` int(32) NOT NULL,
  `ImgName` text NOT NULL,
  `click` int(255) NOT NULL,
  `image_type` varchar(32) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `images`
--

INSERT INTO `images` (`Num`, `ImgName`, `click`, `image_type`) VALUES
(1, 'image_namee', 3, 'jpg'),
(2, 'image_nameemmm', 34, 'gif'),
(55, 'newimage', 25, 'gif'),
(56, 'newimage1', 26, 'gif'),
(57, 'newimage2', 27, 'gif'),
(58, 'newimage3', 28, 'gif'),
(59, 'newimage4', 29, 'gif'),
(60, '', 30, ''),
(61, '', 30, ''),
(62, '', 30, ''),
(63, 'C:xampp	mpphpEA88.tmp', 30, 'image/jpeg'),
(64, 'C:xampp	mpphp29BA.tmp', 30, 'image/jpeg'),
(65, 'C:xampp	mpphpD0A4.tmp', 30, 'image/jpeg'),
(66, 'C:xampp	mpphp1562.tmp', 30, 'image/jpeg'),
(67, 'C:xampp	mpphpB4BD.tmp', 30, 'image/jpeg'),
(68, 'C:xampp	mpphp2CAB.tmp', 14571, 'image/jpeg'),
(69, 'C:xampp	mpphp68B2.tmp', 40649, 'image/jpeg'),
(70, 'small-chef-illustration_23-2147517820.jpg', 40649, 'image/jpeg'),
(71, '', 0, ''),
(72, '', 0, ''),
(73, 'images.png', 11002, 'image/png'),
(74, 'images.png', 11002, 'image/png'),
(75, '', 0, ''),
(76, 'csm_TdS_NHS2138_82d6321095.jpg', 129021, 'image/jpeg'),
(77, 'csm_TdS_NHS2138_82d6321095.jpg', 129021, 'image/jpeg'),
(78, '', 0, ''),
(79, 'small-chef-illustration_23-2147517820.jpg', 40649, 'image/jpeg'),
(80, 'small-chef-illustration_23-2147517820.jpg', 40649, 'image/jpeg'),
(81, 'small-chef-illustration_23-2147517820.jpg', 40649, 'image/jpeg'),
(82, 'small-chef-illustration_23-2147517820.jpg', 40649, 'image/jpeg'),
(83, 'images.png', 11002, 'image/png'),
(84, 'images.png', 11002, 'image/png'),
(85, 'csm_TdS_NHS2138_82d6321095.jpg', 129021, 'image/jpeg'),
(86, 'csm_TdS_NHS2138_82d6321095.jpg', 129021, 'image/jpeg'),
(87, 'csm_TdS_NHS2138_82d6321095.jpg', 129021, 'image/jpeg'),
(88, 'csm_TdS_NHS2138_82d6321095.jpg', 129021, 'image/jpeg'),
(89, 'Chrysanthemum.jpg', 879394, 'image/jpeg'),
(90, 'Desert.jpg', 845941, 'image/jpeg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`Num`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `images`
--
ALTER TABLE `images`
  MODIFY `Num` int(32) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=91;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
