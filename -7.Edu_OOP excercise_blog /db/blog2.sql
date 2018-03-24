-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 08 mars 2018 à 22:02
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
  `title` text CHARACTER SET latin1 NOT NULL,
  `content` text CHARACTER SET latin1 NOT NULL,
  `intro` varchar(350) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id_article`, `title`, `content`, `intro`) VALUES
(105, 'Integration and Difference', 'World historians look for global patterns that emerge from the world\'s vast collection of historical narratives. In studying patterns historians employ a thematic approach, looking for significant connections across both time and geographical space. Two broad themes can be applied to view the people and events of world history: integration (how the processes of world history have drawn peoples of the world together) and difference (how the patterns of world history also reveal the diversity of the human experience).\r\n\r\nThe very forces that accelerated the integration of the peoples of the world have also sharpened awareness of difference among them. The construction of world history reflects the same global processes that have both integrated the experiences of people all over the world and highlighted differences among them. World history seeks to bridge the tensions between these two dynamic processes.', 'World historians look for global patterns that emerge from the world\'s vast collection of historical narratives. In studying patterns historians employ a thematic approach, looking for significant connections across both time and geographical space. Two broad themes can be applied to view the people and events of world history: integration (how the'),
(106, 'World History and Historians', 'The study of world history is in itself a product of history. It might be said that it is humanity\'s attempt to fully understand itself in an age of globalization.\r\n\r\nSince world history, like all history, is subject to ever-changing interpretations, it is also an arena of disagreement and challenge. The task for world historians is to construct an integrated past that retains voices of difference. World history in the 21st century will be created by an on-going dialogue between the common and collective past and the many individual voices of memory that past contains.\r\n\r\nThe advent of world history as a discrete field of study was heralded in the 1980s by the organization of the World History Association and the creation of graduate programs at a handful of universities. Over the past 20 years, scholarly publications, professional and academic organizations, and graduate programs in world history have proliferated, yet the terrain of world history education remained relatively undeveloped when compared to other fields.', 'The study of world history is in itself a product of history. It might be said that it is humanity\'s attempt to fully understand itself in an age of globalization.\r\n\r\nSince world history, like all history, is subject to ever-changing interpretations, it is also an arena of disagreement and challenge. The task for world historians is to construct an'),
(107, 'Teaching the World History Survey Course in the 21st Century', 'Abstract: At the 117th annual meeting of the American Historical Association in January 2003, there was a presidential panel entitled \"Writing the History of Western \'Civ\' in the Global Age: A Roundtable.\" Five professors, all authors of European History textbooks, gave presentations about the appropriateness of teaching Western Civ as the foundational survey in college and university history departments. A related theme of several of the presentations was why it was inappropriate, or even impossible, to teach World History as the foundational survey course. The fear (in academia and in Congress) that World History will replace \"traditional\" western civilization and even US History courses seems based on the notion that by studying global trends, processes, and interactions, students will never learn the specifics of their own national histories or the European cultural and intellectual roots of western traditions. They will therefore be unable to appreciate or understand American cultural and political traditions, and in the long run will be unappreciative, uninformed citizens, voters, and members of American society as a whole.', 'Abstract: At the 117th annual meeting of the American Historical Association in January 2003, there was a presidential panel entitled \"Writing the History of Western \'Civ\' in the Global Age: A Roundtable.\" Five professors, all authors of European History textbooks, gave presentations about the appropriateness of teaching Western Civ as the foundati'),
(108, 'Cross-Cultural Interaction and Periodization in World History', 'Abstract: Periodization ranks among the more elusive tasks of historical Scholarship. As practicing historians well know, the identification of coherent periods of history involves much more than the simple discovery of self-evident turning points in the past: it depends on prior decisions about the issues and processes that are most important for the shaping of human societies, and it requires the establishment of criteria or principles that enable historians to sort through masses of information and recognize patterns of continuity and change. Even within the framework of a single society, changes in perspective can call the coherence of conventionally recognized periods into question, as witness Joan Kelly\'s famous essay \"Did Women Have a Renaissance?\" or Dietrich Gerhard\'s concept of \"old Europe.\"', 'Abstract: Periodization ranks among the more elusive tasks of historical Scholarship. As practicing historians well know, the identification of coherent periods of history involves much more than the simple discovery of self-evident turning points in the past: it depends on prior decisions about the issues and processes that are most important for '),
(109, 'The Problem of Interactions in World History', 'Abstract: Jerry Bentley, in proposing a periodization of world history, offers us more than a set of periods. He defends a specific criterion for evaluating world-historical change, develops his set of periods out of that criterion, and utilizes the periods to suggest long-term interpretations of history. His criterion focuses on cross-cultural interaction. More precisely, he identifies three main kinds of processes (mass migration, empire building, and long-distance trade) as having had \"significant repercussions across the boundary lines of societies and cultural regions.\" In applying his criterion to develop a periodization, Bentley relies on documented changes in the scale and character of these three -\"kinds of processes\" to identify six major periods in the history of the Afro-Eurasian land mass. Then, within the framework of this periodization, he offers a narrative of periodic expansion in scale and transformation in character of cross-cultural interactions. The latter point is worthy of underscoring: if Bentley\'s interpretation focused mainly on expansions in the scale of cross-cultural contacts, we would have yet another narrative of progress. Instead, he sidesteps a linear interpretation of world history by emphasizing successive changes in the character of cross-cultural interactions along with their growing magnitude.', 'Abstract: Jerry Bentley, in proposing a periodization of world history, offers us more than a set of periods. He defends a specific criterion for evaluating world-historical change, develops his set of periods out of that criterion, and utilizes the periods to suggest long-term interpretations of history. His criterion focuses on cross-cultural int');

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
  MODIFY `id_article` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
