-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 22, 2018 at 10:45 PM
-- Server version: 5.7.24-0ubuntu0.16.04.1
-- PHP Version: 7.2.12-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `10.Edu_Symfony3_hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `title` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address` longtext COLLATE utf8_unicode_ci NOT NULL,
  `zip_code` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `room_type` int(11) NOT NULL,
  `adult` int(11) NOT NULL,
  `child` int(11) DEFAULT NULL,
  `baby` int(11) DEFAULT NULL,
  `id_room` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `title`, `name`, `last_name`, `address`, `zip_code`, `city`, `state`, `email`, `room_type`, `adult`, `child`, `baby`, `id_room`) VALUES
(26, 'mr selected', 'SDFQSDFSDFG', 'QGSDFQSFDG', 'SQFDGS', '90', 'sqgSDG', 'SQDFGSDG', 'sdgSDG', 2, 1, 1, 1, '2'),
(30, 'mr selected', 'zaeraezrzaer', 'zetzetazerazr', 'zttrz\'r', '89', 'zerzer', 'zezet', 'zzerzer', 1, 1, 1, 1, '3'),
(31, 'mr', 'zertzert', 'eztrzetr', 'eztrzetr', '99', 'zertzertzert', 'erteztr', 'zerzer', 1, 1, 1, 1, '2'),
(32, 'mr', 'ererererer', 'rtrtrtr', 'rtyerty', '66', 'sdfsdfgsdfg', 'dfghfdhdfhg', 'fdghfdghdfhg', 1, 1, 1, 1, '2'),
(33, 'mr', 'sdsfd', 'erteztzert', 'zertazetzes', '888', 'dfgqegert', 'ertezrtzetr', 'ezrtz\'y\'(yzt', 1, 1, 0, 0, '1');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `client_id` int(11) DEFAULT NULL,
  `room_id` int(11) DEFAULT NULL,
  `date_in` datetime NOT NULL,
  `date_out` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `client_id`, `room_id`, `date_in`, `date_out`) VALUES
(12, 26, 2, '2018-12-26 00:00:00', '2018-12-28 00:00:00'),
(16, 30, 3, '2018-12-25 00:00:00', '2018-12-27 00:00:00'),
(17, 31, 2, '2018-12-25 20:18:00', '2018-12-27 20:18:00'),
(18, 32, 2, '2018-12-23 20:18:00', '2018-12-26 20:18:00'),
(19, 33, 1, '2018-12-24 20:18:00', '2018-12-28 20:18:00');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `floor` int(11) NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `room_type` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `name`, `floor`, `description`, `room_type`, `price`) VALUES
(1, '101', 1, 'Single 1-adult/child/wifi', 1, 55),
(2, '102', 1, 'Twin 2-adult/child/wifi', 2, 75),
(3, '103', 1, 'Triple 3-adult/child/wifi', 3, 105);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_C7440455E7927C74` (`email`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_42C8495519EB6921` (`client_id`),
  ADD KEY `IDX_42C8495554177093` (`room_id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `FK_42C8495519EB6921` FOREIGN KEY (`client_id`) REFERENCES `client` (`id`),
  ADD CONSTRAINT `FK_42C8495554177093` FOREIGN KEY (`room_id`) REFERENCES `room` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
