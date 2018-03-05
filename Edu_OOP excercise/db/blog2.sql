-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 06 mars 2018 à 00:11
-- Version du serveur :  10.1.28-MariaDB
-- Version de PHP :  5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `blog2`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id_article` int(32) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `intro` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id_article`, `title`, `content`, `intro`) VALUES
(16, 'LE SCAN POLITIQUE', 'Va-t-il tenir dans la tourmente? Le ministre des Comptes publics, et pilier du gouvernement, G?©rald Darmanin, est vis?© par une plainte pour un viol remontant ?  2009. Le parquet de Paris a rouvert l\'enqu??te samedi apr??s une premi??re plainte class?©e sans suite mi-2017. La plaignante, Sophie Spatz, accuse G?©rald Darmanin de l\'avoir viol?©e alors qu\'elle lui demandait de l\'aide dans une affaire judiciaire.', ''),
(20, 'From today\'s featured article', 'In the Baltimore railroad strike of 1877, at least ten people were killed and more than 150 were injured. The unrest in Baltimore, Maryland, was part of a national railroad strike, following the global depression and economic downturns of the mid-1870s. On July 16, when the Baltimore and Ohio Railroad (B&O) scheduled 10 percent wage reductions, strikes broke out. Violence erupted in Baltimore on July 20, and police and soldiers of the Maryland National Guard clashed with crowds of thousands gathered throughout the city. In response, President Rutherford B. Hayes ordered federal troops to Baltimore, local officials recruited as many as 500 additional police, and two new national guard regiments were formed. Peace was restored two days later. Negotiations between strikers and the B&O were unsuccessful, and most strikers quit rather than return to work at reduced wages. The company easily found workers to replace the strikers, and rail traffic resumed on July 29 under the protection of the military and police. (Full article...)', ''),
(21, 'Did you know...', '... that the seed pods of Hardenbergia comptoniana (flowers pictured) make an audible \'pop\' as they release the seed?\r\n... that after contracting diphtheria, John Hunt believed he was one of the last cases in England to have his tonsils painted with cocaine and then removed by guillotine?\r\n... that the Jaguar multi-stage sounding rocket was designed to be launched using a toss bombing maneuver from a B-57 bomber?\r\n... that a Let\'s Save Togo protest rally in August 2012 called for a week-long sex strike by women to encourage men to oppose Togolese President Faure Gnassingb?©?\r\n... that prior to serving as executive fashion director for Cosmopolitan and Seventeen, and as a judge for Project Runway: Junior, Aya Kanai considered careers in puppetry and fine art?\r\n... that 50 million trees could be planted to form the Northern Forest in England?\r\n... that Major General Miles Graham was Monty\'s logistics supremo in both North Africa and North-West Europe during the Second World War?\r\n... that passengers traveling to the 1939 New York World\'s Fair via the World\'s Fair subway line paid the standard five-cent fare to board, but had to pay the fare again on arrival?', ''),
(31, '563232323232', '654323232232', '654654654654');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id_article`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id_article` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
