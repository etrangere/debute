-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  mar. 23 jan. 2018 à 20:55
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
-- Base de données :  `blog_base`
--

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `id_article` int(32) NOT NULL,
  `article_name` text NOT NULL,
  `article_text` text NOT NULL,
  `author_email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id_article`, `article_name`, `article_text`, `author_email`) VALUES
(5, 'Hello blog', 'hello blog ', 'hello blog'),
(11, 'Turing', 'En informatique thÃ©orique, une machine de Turing est un modÃ¨le abstrait du fonctionnement des appareils mÃ©caniques de calcul, tel un ordinateur et sa mÃ©moire. Ce modÃ¨le a Ã©tÃ© imaginÃ© par Alan Turing en 1936, en vue de donner une dÃ©finition prÃ©cise au concept dâ€™algorithme ou de Â« procÃ©dure mÃ©canique Â». Il est toujours largement utilisÃ© en informatique thÃ©orique, en particulier dans les domaines de la complexitÃ© algorithmique et de la calculabilitÃ©.', ''),
(12, '', '', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id_article`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `id_article` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
