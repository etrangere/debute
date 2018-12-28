-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Dim 25 Novembre 2018 à 01:39
-- Version du serveur :  5.7.24-0ubuntu0.16.04.1
-- Version de PHP :  7.1.24-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `8.blog`
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
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id_article`, `title`, `content`, `intro`, `mail`) VALUES
(39, 'Contenus de sites Web', 'Il y a eu plus de 3 millions d\'articles crÃ©Ã©s sur AboutUs.org au mois d\'aoÃ»t 2006. La plupart des articles ont Ã©tÃ© crÃ©Ã©s par un bot informatique. Dans bon nombre de cas, le contenu est simplement une re-publication des contenus About us, About me, Qui sommes-nous ou de la page d\'information Ã©quivalente sur le site web. De telles pages dÃ©crivent gÃ©nÃ©ralement l\'entitÃ© et peuvent contenir de l\'information auto-promotionnelle, ce que AboutUs.org n\'exclut pas. Dans bien d\'autres cas, le contenu d\'un article consiste Ã  recenser les donnÃ©es whois du site web.', 'Il y a eu plus de 3 millions d\'articles crÃ©Ã©s sur AboutUs.org au mois d\'aoÃ»t 2006. La plupart des articles ont Ã©tÃ© crÃ©Ã©s par un bot informatique. Dans bon nombre de cas, le contenu est simplement une re-publication des contenus About us, About me, Qui sommes-nous ou de la page d\'information Ã©quivalente sur le site web. De telles pages dÃ©cr', '0'),
(40, 'RÃ©volution1', 'Le premier enjeu porte sur lï¿½effet de la rÃ©volution numÃ©rique en cours sur la quantitÃ© dï¿½emplois disponibles dans lï¿½Ã©conomie, et donc sur le chÃ´mage. Les programmes et les machines dï¿½aujourdï¿½hui, comme celles des rÃ©volutions industrielles prÃ©cÃ©dentes, sont susceptibles de remplacer un certain nombre dï¿½emplois ; symÃ©triquement, lï¿½Ã©volution technologique alimente la croissance en crÃ©ant de nouveaux produits, en suscitant de nouveaux investissements, en amÃ©liorant la productivitÃ© des travailleurs. La question du solde de cet impact reste aujourdï¿½hui trÃ¨s controversÃ©e par les spÃ©cialistes de la question, et varie Ã  la fois selon le cadre thÃ©orique choisi et la mÃ©thode dï¿½investigation empirique utilisÃ©e. Certains, confiants dans les lois du marchÃ© et lï¿½observation des rÃ©volutions industrielles prÃ©cÃ©dentes, mettent lï¿½accent sur la capacitÃ© des Ã©conomies Ã  rÃ©investir les gains de productivitÃ© dans de nouveaux territoires de croissance, crÃ©ateurs dï¿½emplois ; dï¿½autres, observant lï¿½atonie de la conjoncture mondiale, pointent au contraire soit la possibilitÃ© dï¿½une rÃ©volution numÃ©rique sans croissance, soit le scÃ©nario dï¿½une croissance sans emplois. Les divergences dï¿½Ã©valuation des deux effets (compensation des emplois dÃ©truits / substitutions des machines aux emplois) reposent notamment sur des Ã©valuations diffÃ©renciÃ©es de la capacitÃ© des machines, robots et algorithmes> Ã  prendre en charge une part trÃ¨s large des tÃ¢ches effectuÃ©es aujourdï¿½hui par des', 'Le premier enjeu porte sur lï¿½effet de la rÃ©volution numÃ©rique en cours sur la quantitÃ© dï¿½emplois disponibles dans lï¿½Ã©conomie, et donc sur le chÃ´mage. Les programmes et les machines dï¿½aujourdï¿½hui, comme celles des rÃ©volutions industrielles prÃ©cÃ©dentes, sont susceptibles de remplacer un certain nombre dï¿½emplois ; symÃ©triquement, ', '0');

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
-- Contenu de la table `privs`
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
-- Contenu de la table `privs2roles`
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
-- Contenu de la table `roles`
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
-- Contenu de la table `sessions`
--

INSERT INTO `sessions` (`id_session`, `id_user`, `sid`, `time_start`, `time_last`) VALUES
(3, 111, 'loyCytu4aj', '2018-11-25 01:19:40', '2018-11-25 01:19:47');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_user` int(5) NOT NULL,
  `login` varchar(256) NOT NULL,
  `password` varchar(32) NOT NULL,
  `id_role` int(5) DEFAULT NULL,
  `f_name` varchar(256) DEFAULT NULL,
  `l_name` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id_user`, `login`, `password`, `id_role`, `f_name`, `l_name`) VALUES
(1, 'test@test.ru', '202cb962ac59075b964b07152d234b70', 1, 'manager', ''),
(2, 'boss@mail.ru', '81dc9bdb52d04dc20036dbd8313ed055', 2, 'boss', ''),
(3, '11', '11', NULL, 'aaaa', 'ezrezrez'),
(4, 'a.chiling@mail.ru', '123', NULL, 'Artur', 'Chilingarov'),
(5, 'a.dafok@mail.ru', '123', NULL, 'Arman', 'Dafok'),
(6, 'azako@mail.ru', '202cb962ac59075b964b07152d234b70', 2, 'azaro', 'akapulko'),
(7, 'jhgkjhgk@mail.ru', '81dc9bdb52d04dc20036dbd8313ed055', 2, 'katu', 'dariko'),
(8, 'ara@mail.ru', '202cb962ac59075b964b07152d234b70', NULL, 'ararat', 'arman'),
(9, 'zz@mail.ru', 'c20ad4d76fe97759aa27a0c99bff6710', NULL, 'aaa', 'zzzz'),
(12, 'ddd', 'd41d8cd98f00b204e9800998ecf8427e', NULL, '', ''),
(13, 'ze@mail.ru', 'c20ad4d76fe97759aa27a0c99bff6710', NULL, 'AA', 'ZZ'),
(14, 'zer@mail.ru', 'c20ad4d76fe97759aa27a0c99bff6710', NULL, 'ee', 'zz'),
(16, 'zera@mail.ru', 'c20ad4d76fe97759aa27a0c99bff6710', NULL, 'aer', 'zea'),
(19, 'eeeee@mail.ru', '202cb962ac59075b964b07152d234b70', NULL, 'aer', 'zea'),
(22, 'eeeee@mail', '6512bd43d9caa6e02c990b0a82652dca', NULL, 'a', 'z'),
(23, '33', '202cb962ac59075b964b07152d234b70', NULL, '11', '22'),
(27, '335', 'c20ad4d76fe97759aa27a0c99bff6710', NULL, '55', '223'),
(29, '3354', 'c20ad4d76fe97759aa27a0c99bff6710', NULL, '554', '2234'),
(31, 'aert@mail.ru', 'c20ad4d76fe97759aa27a0c99bff6710', NULL, 'ZZ', 'aert'),
(33, 'rr', 'c20ad4d76fe97759aa27a0c99bff6710', NULL, 'rr', 'rr'),
(35, 'zz', '25ed1bcb423b0b7200f485fc5ff71c8e', NULL, 'zz', 'zz'),
(37, 'rrr', '6512bd43d9caa6e02c990b0a82652dca', NULL, 'errrr', 'rrr'),
(39, 'rrrr', 'eb9279982226a42afdf2860dbdc29b45', NULL, 'rrrr', 'rrrr'),
(42, 'eee', 'd2f2297d6e829cd3493aa7de4416a18f', NULL, 'yyy', 'eee'),
(43, 'eerer', '202cb962ac59075b964b07152d234b70', NULL, 'AZ', 'sae'),
(46, 'zzz', '6512bd43d9caa6e02c990b0a82652dca', NULL, 'tretre', 'hgfdhgfd'),
(48, 'errrr', '343d9040a671c45832ee5381860e2996', NULL, 'az', 'er'),
(49, 'aze', '7c37be7260f8cd7c1f5e4dbdd7bc5b23', NULL, 'popo', 'azea'),
(53, 'jhgfjhgf', '6512bd43d9caa6e02c990b0a82652dca', NULL, 'hgfjhgf', 'khfjhgf'),
(55, 'qsdqsd', '511e33b4b0fe4bf75aa3bbac63311e5a', NULL, 'qsd', 'qsd'),
(56, 'kjhkjhkjh', '6512bd43d9caa6e02c990b0a82652dca', NULL, 'kkjhkjh', 'kjhkjh'),
(57, 'treyter', '6512bd43d9caa6e02c990b0a82652dca', NULL, 'aaa', 'eeee'),
(59, 'ss', '3691308f2a4c2f6983f2880d32e29c84', NULL, 'ss', 'ss'),
(60, 'erererer', '818f9c45cfa30eeff277ef38bcbe9910', NULL, 'er', 'ererer'),
(61, 'ere', '12eccbdd9b32918131341f38907cbbb5', NULL, 'erere', 'r'),
(62, 'zsszs', '4124bc0a9335c27f086f24ba207a4912', NULL, 'eee', 'szszsz'),
(63, 'jhgjhg', 'b6d767d2f8ed5d21a44b0e5886680cb9', NULL, 'gfdgfd', 'hgfhgf'),
(64, 'sdf', 'd9729feb74992cc3482b350163a1a010', NULL, 'sdf', 'sdf'),
(67, 'azeae', '0a5b3913cbc9a9092311630e869b4442', NULL, 'aze', 'aze'),
(69, 'azeazeaez', '6512bd43d9caa6e02c990b0a82652dca', NULL, 'zeazeaze', 'azezaeaezz'),
(70, 'mlkjmlkj', 'b6d767d2f8ed5d21a44b0e5886680cb9', NULL, 'Ã¹mlkjmlkj', 'mlkjmlkj'),
(71, 'azer', '182be0c5cdcd5072bb1864cdee4d3d6e', NULL, 'zer', 'azer'),
(74, '44', 'f7177163c833dff4b38fc8d2872f1ec6', NULL, '44', '44'),
(75, '22', 'b6d767d2f8ed5d21a44b0e5886680cb9', 2, '22', '22'),
(76, 'hgfddh', 'b6d767d2f8ed5d21a44b0e5886680cb9', 2, 'retztrze', 'hgfdhgfd'),
(77, 'aezaze', '6512bd43d9caa6e02c990b0a82652dca', 2, 'azeaze', 'azeaze'),
(78, 'ERR', '6512bd43d9caa6e02c990b0a82652dca', 1, 'ZZZ', 'AAA'),
(79, 'AA', '3b98e2dffc6cb06a89dcb0d5c60a0206', 1, 'AA', 'AA'),
(81, '11111', '6512bd43d9caa6e02c990b0a82652dca', 1, '11', '1111'),
(82, 'QQ', '6512bd43d9caa6e02c990b0a82652dca', 1, 'QQ', 'QQ'),
(85, 'WW', '0a9b52fb6605edc74fd7d5359f34477e', 1, 'WW', 'WW'),
(87, 'kjhgkjhgkjhg', '202cb962ac59075b964b07152d234b70', 1, 'kjhgk', 'kjhgkjhg'),
(90, 'eeee', '08a4415e9d594ff960030b921d42b91e', 1, 'eee', 'eeeee'),
(92, 'wwwwww', '6512bd43d9caa6e02c990b0a82652dca', 2, 'wwww', 'ww'),
(93, 'asasas', 'b6d767d2f8ed5d21a44b0e5886680cb9', 2, 'sss', 'sasas'),
(95, 'gfdsgfds', 'b6d767d2f8ed5d21a44b0e5886680cb9', 1, 'dfsgfds', 'fdsgfds'),
(96, 'XXX', 'b6d767d2f8ed5d21a44b0e5886680cb9', 1, 'XX', 'XXX'),
(98, 'ZZZZZZZZ', 'b6d767d2f8ed5d21a44b0e5886680cb9', 2, 'EE', 'ZZZZ'),
(101, 'DDDDD', '350bfcb1e3cfb28ddff48ce525d4f139', 2, 'DD', 'DDDDDD'),
(103, 'QQQQQQ', '3b98e2dffc6cb06a89dcb0d5c60a0206', 2, 'QQQQQQ', 'QQQQQQ'),
(105, 'SSS', 'd53aeb78abc83a52ab8982f5c82a3d5b', 1, 'SSSS', 'SSSSSSS'),
(107, 'qs', 'd41d8cd98f00b204e9800998ecf8427e', 0, '', ''),
(108, 'qsqs', 'd41d8cd98f00b204e9800998ecf8427e', 0, '', ''),
(110, 'ASER', '182be0c5cdcd5072bb1864cdee4d3d6e', 2, 'AZZZ', 'ZER'),
(111, 'gg@mail.ru', '73c18c59a39b18382081ec00bb456d43', 2, 'gg', 'ggg');

--
-- Index pour les tables exportées
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
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id_article` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
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
  MODIFY `id_session` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
