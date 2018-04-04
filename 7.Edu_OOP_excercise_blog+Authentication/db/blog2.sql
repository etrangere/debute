-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  mer. 04 avr. 2018 à 21:38
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
  `intro` varchar(350) CHARACTER SET latin1 NOT NULL,
  `mail` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id_article`, `title`, `content`, `intro`, `mail`) VALUES
(39, 'Contenus de sites Web', 'Il y a eu plus de 3 millions d\'articles crÃ©Ã©s sur AboutUs.org au mois d\'aoÃ»t 2006. La plupart des articles ont Ã©tÃ© crÃ©Ã©s par un bot informatique. Dans bon nombre de cas, le contenu est simplement une re-publication des contenus About us, About me, Qui sommes-nous ou de la page d\'information Ã©quivalente sur le site web. De telles pages dÃ©crivent gÃ©nÃ©ralement l\'entitÃ© et peuvent contenir de l\'information auto-promotionnelle, ce que AboutUs.org n\'exclut pas. Dans bien d\'autres cas, le contenu d\'un article consiste Ã  recenser les donnÃ©es whois du site web.', 'Il y a eu plus de 3 millions d\'articles crÃ©Ã©s sur AboutUs.org au mois d\'aoÃ»t 2006. La plupart des articles ont Ã©tÃ© crÃ©Ã©s par un bot informatique. Dans bon nombre de cas, le contenu est simplement une re-publication des contenus About us, About me, Qui sommes-nous ou de la page d\'information Ã©quivalente sur le site web. De telles pages dÃ©cr', '0'),
(40, 'RÃ©volution', 'Le premier enjeu porte sur lï¿½effet de la rÃ©volution numÃ©rique en cours sur la quantitÃ© dï¿½emplois disponibles dans lï¿½Ã©conomie, et donc sur le chÃ´mage. Les programmes et les machines dï¿½aujourdï¿½hui, comme celles des rÃ©volutions industrielles prÃ©cÃ©dentes, sont susceptibles de remplacer un certain nombre dï¿½emplois ; symÃ©triquement, lï¿½Ã©volution technologique alimente la croissance en crÃ©ant de nouveaux produits, en suscitant de nouveaux investissements, en amÃ©liorant la productivitÃ© des travailleurs. La question du solde de cet impact reste aujourdï¿½hui trÃ¨s controversÃ©e par les spÃ©cialistes de la question, et varie Ã  la fois selon le cadre thÃ©orique choisi et la mÃ©thode dï¿½investigation empirique utilisÃ©e. Certains, confiants dans les lois du marchÃ© et lï¿½observation des rÃ©volutions industrielles prÃ©cÃ©dentes, mettent lï¿½accent sur la capacitÃ© des Ã©conomies Ã  rÃ©investir les gains de productivitÃ© dans de nouveaux territoires de croissance, crÃ©ateurs dï¿½emplois ; dï¿½autres, observant lï¿½atonie de la conjoncture mondiale, pointent au contraire soit la possibilitÃ© dï¿½une rÃ©volution numÃ©rique sans croissance, soit le scÃ©nario dï¿½une croissance sans emplois. Les divergences dï¿½Ã©valuation des deux effets (compensation des emplois dÃ©truits / substitutions des machines aux emplois) reposent notamment sur des Ã©valuations diffÃ©renciÃ©es de la capacitÃ© des machines, robots et algorithmes> Ã  prendre en charge une part trÃ¨s large des tÃ¢ches effectuÃ©es aujourdï¿½hui par des', 'Le premier enjeu porte sur lï¿½effet de la rÃ©volution numÃ©rique en cours sur la quantitÃ© dï¿½emplois disponibles dans lï¿½Ã©conomie, et donc sur le chÃ´mage. Les programmes et les machines dï¿½aujourdï¿½hui, comme celles des rÃ©volutions industrielles prÃ©cÃ©dentes, sont susceptibles de remplacer un certain nombre dï¿½emplois ; symÃ©triquement, ', '0'),
(67, 'ddddd', 'dddddmkjdlkjhdlkjhlkjhlkjhlkjhlkjhkljh', 'dddddmkjdlkjhdlkjhlkjhlkjhlkjhlkjhkljh', 'ddddd@mail.ru'),
(68, 'zaeaez11133', 'kjhlkjhlkjhlkjhlkjhlkjhlkjh111133', 'kjhlkjhlkjhlkjhlkjhlkjhlkjh111133', 'eazazeazeaze@mail.ru111133'),
(69, 'AAA', 'AAAAAAAAAA', 'AAAAAAAAAA', 'AAA@mail.ru');

-- --------------------------------------------------------

--
-- Structure de la table `privs`
--

CREATE TABLE `privs` (
  `id_priv` int(5) NOT NULL,
  `name` varchar(256) NOT NULL,
  `description` varchar(512) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `privs`
--

INSERT INTO `privs` (`id_priv`, `name`, `description`) VALUES
(1, 'VIEW_EDITOR', 'View articles list to edit'),
(2, 'VIEW_EDIT', 'Modify and delete everything');

-- --------------------------------------------------------

--
-- Structure de la table `privs2roles`
--

CREATE TABLE `privs2roles` (
  `id_priv` int(5) NOT NULL,
  `id_role` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `privs2roles`
--

INSERT INTO `privs2roles` (`id_priv`, `id_role`) VALUES
(1, 1),
(1, 2),
(2, 2);

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `id_role` int(5) NOT NULL,
  `name` varchar(256) NOT NULL,
  `description` varchar(512) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`id_role`, `name`, `description`) VALUES
(1, 'manager', 'Worker'),
(2, 'boss', 'Director');

-- --------------------------------------------------------

--
-- Structure de la table `sessions`
--

CREATE TABLE `sessions` (
  `id_session` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `sid` varchar(10) NOT NULL,
  `time_start` datetime NOT NULL,
  `time_last` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `sessions`
--

INSERT INTO `sessions` (`id_session`, `id_user`, `sid`, `time_start`, `time_last`) VALUES
(24, 2, 'wCUy3spHIA', '2018-04-04 21:19:29', '2018-04-04 21:21:34'),
(25, 1, '7JNKtgujv3', '2018-04-04 21:21:56', '2018-04-04 21:24:05'),
(26, 1, 'uAAh4guivd', '2018-04-04 21:24:25', '2018-04-04 21:24:46'),
(27, 2, '5hm5zI4aVV', '2018-04-04 21:25:47', '2018-04-04 21:26:28'),
(28, 1, 'Ym1VXceR7q', '2018-04-04 21:32:59', '2018-04-04 21:32:59'),
(29, 2, 'h3Vp5FfdBJ', '2018-04-04 21:33:19', '2018-04-04 21:33:24');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_user` int(5) NOT NULL,
  `login` varchar(256) NOT NULL,
  `password` varchar(32) NOT NULL,
  `id_role` int(5) DEFAULT NULL,
  `name` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_user`, `login`, `password`, `id_role`, `name`) VALUES
(1, 'test@test.ru', '202cb962ac59075b964b07152d234b70', 1, 'manager'),
(2, 'boss@mail.ru', '81dc9bdb52d04dc20036dbd8313ed055', 2, 'boss');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id_article`);

--
-- Index pour la table `privs`
--
ALTER TABLE `privs`
  ADD PRIMARY KEY (`id_priv`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Index pour la table `privs2roles`
--
ALTER TABLE `privs2roles`
  ADD PRIMARY KEY (`id_priv`,`id_role`);

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_role`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Index pour la table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id_session`),
  ADD UNIQUE KEY `sid` (`sid`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id_article` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
--
-- AUTO_INCREMENT pour la table `privs`
--
ALTER TABLE `privs`
  MODIFY `id_priv` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `id_role` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `sessions`
--
ALTER TABLE `sessions`
  MODIFY `id_session` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
