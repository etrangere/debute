-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  ven. 01 juin 2018 à 17:36
-- Version du serveur :  10.1.25-MariaDB
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `excercise_blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `title` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `title`, `content`, `email`) VALUES
(9, 'ljhgkjhgkjhgkjhg', 'jhgkjhgkjhgkjhgkjhgkjhgkjh', 'kjhgkjhgkjhgkjhgkjhgkjh'),
(10, 'Gxxxxxx', 'Bla blaaaaamlkmlkmjhlkjhlkjh', 'lkjhlkjh@mail.ru'),
(11, '11222222', 'Bla blaaaaamlkmlkmjhlkjhlkjh', 'lkjhlkjh@mail.ru'),
(12, 'Gxxxxxx', 'Bla blaaaaamlkmlkmjhlkjhlkjh', 'lkjhlkjh@mail.ru'),
(15, 'Gxxxxxx', 'Bla blaaaaamlkmlkmjhlkjhlkjh', 'lkjhlkjh@mail.ru'),
(16, 'Gxxxxxx', 'Bla blaaaaamlkmlkmjhlkjhlkjh', 'lkjhlkjh@mail.ru'),
(17, 'jhgfjhgf', 'textreezerd', 'heloooo'),
(18, 'jhgfjhgf', 'textreezerd', 'heloooo');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
