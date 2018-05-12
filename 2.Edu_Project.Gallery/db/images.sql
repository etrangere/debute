-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  mar. 23 jan. 2018 à 20:54
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
-- Base de données :  `images`
--

-- --------------------------------------------------------

--
-- Structure de la table `images_table`
--

CREATE TABLE `images_table` (
  `id_file` int(32) NOT NULL,
  `file_name` varchar(32) NOT NULL,
  `file_type` varchar(32) NOT NULL,
  `file_size` int(32) NOT NULL,
  `file_like` int(32) NOT NULL,
  `file_dislike` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `images_table`
--

INSERT INTO `images_table` (`id_file`, `file_name`, `file_type`, `file_size`, `file_like`, `file_dislike`) VALUES
(349, '', '', 0, 0, 0),
(352, '550x-awesome-3d-floorart.jpg', 'image/jpeg', 104622, 0, 0),
(355, '', '', 0, 0, 0),
(360, '', '', 0, 0, 0),
(361, '', '', 0, 0, 0),
(362, '', '', 0, 0, 0),
(363, '', '', 0, 0, 0),
(364, '', '', 0, 0, 0),
(365, '', '', 0, 0, 0),
(367, '3D_Street_Art_Painting_45-575x32', 'image/png', 384263, 0, 0),
(368, '550x-awesome-3d-floorart.jpg', 'image/jpeg', 104622, 0, 0),
(369, '550x-awesome-3d-floorart.jpg', 'image/jpeg', 104622, 0, 0),
(370, 'index.jpg', 'image/jpeg', 4745, 0, 0),
(371, 'index.jpg', 'image/jpeg', 4745, 0, 0),
(372, '013.jpg', 'image/jpeg', 45123, 0, 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `images_table`
--
ALTER TABLE `images_table`
  ADD PRIMARY KEY (`id_file`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `images_table`
--
ALTER TABLE `images_table`
  MODIFY `id_file` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=373;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
