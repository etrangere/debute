-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  mar. 04 sep. 2018 à 02:55
-- Version du serveur :  10.1.33-MariaDB
-- Version de PHP :  7.1.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `frame`
--

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
(1, 'USE_SECRET_FUNCTIONS', 'œ?Ë‚ËÎÂ„Ë? ‰Î? Ô?ËÏÂ?‡');

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
(1, 1);

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
(1, 'test', '–ÓÎ¸ ‰Î? Ô?ËÏÂ?‡');

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
(1, 'test@test.ru', '202cb962ac59075b964b07152d234b70', 1, 'test');

--
-- Index pour les tables déchargées
--

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
-- AUTO_INCREMENT pour la table `privs`
--
ALTER TABLE `privs`
  MODIFY `id_priv` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `id_role` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `sessions`
--
ALTER TABLE `sessions`
  MODIFY `id_session` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
