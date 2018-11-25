-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Dim 25 Novembre 2018 à 01:33
-- Version du serveur :  5.7.24-0ubuntu0.16.04.1
-- Version de PHP :  7.1.24-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `12.Edu_Symfony3_excercise_blog`
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
-- Contenu de la table `article`
--

INSERT INTO `article` (`id`, `title`, `content`, `email`) VALUES
(10, 'Gxxxxxx', 'Bla blaaaaamlkmlkmjhlkjhlkjh', 'lkjhlkjh@mail.ru'),
(11, '11222222', 'Bla blaaaaamlkmlkmjhlkjhlkjh', 'lkjhlkjh@mail.ru'),
(12, 'Gxxxxxx', 'Bla blaaaaamlkmlkmjhlkjhlkjh', 'lkjhlkjh@mail.ru'),
(15, 'Gxxxxxx', 'Bla blaaaaamlkmlkmjhlkjhlkjh', 'lkjhlkjh@mail.ru'),
(16, 'Gxxxxxx', 'Bla blaaaaamlkmlkmjhlkjhlkjh', 'lkjhlkjh@mail.ru'),
(17, 'jhgfjhgf', 'textreezerd', 'heloooo'),
(18, 'jhgfjhgf', 'textreezerd', 'heloooo');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
