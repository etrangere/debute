-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 06 mars 2018 à 23:44
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
(33, 'l\'h&#233;licopt&#232;re', 'L\'histoire de l\'h&#233;licopt&#232;re commence au d&#233;but du xxe si&#232;cle, comme pour l\'avion. Mais l\'insuffisance de la puissance des moteurs et les probl&#232;mes de stabilit&#233; rendent les d&#233;veloppements beaucoup plus longs et al&#233;atoires. En dehors de la parenth&#232;se des autogires, l\'h&#233;licopt&#232;re parvient &#224; prouver son efficacit&#233; potentielle au cours de la Seconde Guerre mondiale. Les Allemands sont les premiers, d&#232;s 1936, &#224; concevoir un dessin d\'h&#233;licopt&#232;re viable et &#224; faire voler un appareil stable avec le Focke-Wulf Fw 61. Les scientifiques du IIIe Reich ont mis au point, en 1945, des h&#233;licopt&#232;res op&#233;rationnels, et ont montr&#233; leur potentiel au combat. D&#232;s la fin des ann&#233;es 1930, l\'Allemagne est devenue, de fait, le centre de d&#233;veloppement des h&#233;licopt&#232;res.\r\n\r\nLes guerres men&#233;es dans les ann&#233;es 1950 par la France, en Indochine, en Alg&#233;rie, et les &#201;tats-Unis, en Cor&#233;e puis au Vi&#234;t Nam dans les ann&#233;es 1960/1970, d&#233;montreront son int&#233;r&#234;t militaire pour les missions de p&#233;n&#233;tration, d\'appui-feu, de lutte anti-chars et pour le secours des bless&#233;s.\r\n\r\nSur le plan technique c\'est l\'apparition des turbomachines permettant le d&#233;veloppement d\'appareils plus lourds, plus rapides et plus fiables, qui donne &#224; l\'h&#233;licopt&#232;re une place importante au sein des forces arm&#233;es, de police, de s&#233;curit&#233; civile, et de douane de beaucoup de pays. Sur le plan civil, en raison du co&#251;t tr&#232;s &#233;lev&#233; de l\'heure de vol et de la maintenance, seuls quelques privil&#233;gi&#233;s, et quelques op&#233;rations cruciales3, profitent de ce moyen de transport et de manutention.', 'L\'histoire de l\'h&#233;licopt&#232;re commence au d&#233;but du xxe si&#232;cle, comme pour l\'avion. Mais l\'insuffisance de la puissance des moteurs et les probl&#232;mes de stabilit&#233; rendent les'),
(34, 'Plan&#233;taires', 'Elle est compos&#233;e g&#233;n&#233;ralement de plusieurs engrenages appel&#233;s « plan&#233;taires » et « satellites » permettant de r&#233;duire la vitesse de rotation de sortie moteur (plusieurs dizaines de milliers de tours par minute pour les moteurs &#224; turbine) et de transmettre la puissance au rotor principal (g&#233;n&#233;ralement aux alentours de 200 &#224; 400 tr/min selon le diam&#232;tre rotor) ainsi qu\'au RAC. Cette transmission de puissance est assum&#233;e par des engrenages (droits, h&#233;lico&#239;daux, trains &#233;picyclo&#239;daux…). Au regard du couple transmis et des sp&#233;cificit&#233;s d\'utilisation, le graissage est fait sous pression et refroidi par radiateur. La BTP comporte &#233;galement une ou plusieurs roues libres, pour d&#233;solidariser le rotor du moteur pour le d&#233;marrage et aussi en cas de panne ou pour permettre l\'autorotation sans frein. La roue libre est du type &#224; galets : les galets sont coinc&#233;s entre l\'arbre menant &#224; facettes et l\'anneau ext&#233;rieur de roue libre. Afin d\'assurer une transmission de mouvement sans &#224;-coups, un syst&#232;me &#224; ressort plaque les galets contre l\'anneau ext&#233;rieur. Certains constructeurs pr&#233;voient un syst&#232;me de d&#233;crabotage qui permet de d&#233;coincer les galets de fa&#231;on permanente : cela permet d\'alimenter les accessoires sans entrainer les rotors arri&#232;re et principal. Les accessoires fix&#233;s sur la BTP sont g&#233;n&#233;ralement ceux qui ont besoin d\'&#233;nergie m&#233;canique : la ou les pompes hydrauliques, le ou les alternateurs, un entrainement pour le ventilateur (circuit de refroidissement huile BTP)…', 'Elle est compos&#233;e g&#233;n&#233;ralement de plusieurs engrenages appel&#233;s « plan&#233;taires » et « satellites » permettant de r&#233;duire la vitesse de rotation de sortie moteur (plusieurs dizaines de milliers de tours par minute pour les moteurs &#224; turbine) et de transmettre la puissance au rotor principal (g&#233;n&#233;ralement au'),
(38, 'Liens et cr&#233;ation de pages', 'Les wikis favorisent la cr&#233;ation d\'hyperliens en simplifiant l\'&#233;criture et en n\'imposant aucune contrainte organisationnelle. Ainsi, chaque page web contient de nombreux liens qui la relient &#224; d\'autres pages, sans structure hi&#233;rarchique apparente. Il existe des fonctionnalit&#233;s pour classer, ou plus pr&#233;cis&#233;ment retrouver les pages, mais elles ne sont pas indispensables. Le wiki devient donc un foisonnement de pages mises au m&#234;me niveau et reli&#233;es les unes aux autres, selon la logique propre au contenu de chacune d\'entre elles.\r\n\r\nOriginellement, les wikis utilisaient des MotsWiki (comme « CompteUtilisateur ») pour g&#233;n&#233;rer automatiquement des liens vers d\'autres pages. Certains wikis ont des r&#232;gles syntaxiques distinctes pour la cr&#233;ation de liens, &#224; l\'exemple de MediaWiki o&#249; l\'utilisateur emploie les crochets.\r\n\r\nL\'apparence des liens (par exemple leur couleur) varie selon qu\'ils m&#232;nent &#224; une page existante ou &#224; une page encore inexistante, que l\'utilisateur a, toutefois, la possibilit&#233; de cr&#233;er.', 'Les wikis favorisent la cr&#233;ation d\'hyperliens en simplifiant l\'&#233;criture et en n\'imposant aucune contrainte organisationnelle. Ainsi, chaque page web contient de nombreux liens qui la relient &#224; d\'autres pages, sans structure hi&#233;rarchique apparente. Il existe des fonctionnalit&#233;s pour classer, ou plus pr&#233;cis&#233;ment ret'),
(39, 'Contenus de sites Web', 'Il y a eu plus de 3 millions d\'articles cr&#233;&#233;s sur AboutUs.org au mois d\'ao&#251;t 2006. La plupart des articles ont &#233;t&#233; cr&#233;&#233;s par un bot informatique. Dans bon nombre de cas, le contenu est simplement une re-publication des contenus About us, About me, Qui sommes-nous ou de la page d\'information &#233;quivalente sur le site web. De telles pages d&#233;crivent g&#233;n&#233;ralement l\'entit&#233; et peuvent contenir de l\'information auto-promotionnelle, ce que AboutUs.org n\'exclut pas. Dans bien d\'autres cas, le contenu d\'un article consiste &#224; recenser les donn&#233;es whois du site web.', 'Il y a eu plus de 3 millions d\'articles cr&#233;&#233;s sur AboutUs.org au mois d\'ao&#251;t 2006. La plupart des articles ont &#233;t&#233; cr&#233;&#233;s par un bot informatique. Dans bon nombre de cas, le contenu est simplement une re-publication des contenus About us, About me, Qui sommes-nous ou de la page d\'information &#233;quivalente sur le'),
(40, 'R&#233;volution', 'Le premier enjeu porte sur l’effet de la r&#233;volution num&#233;rique en cours sur la quantit&#233; d’emplois disponibles dans l’&#233;conomie, et donc sur le ch&#244;mage. Les programmes et les machines d’aujourd’hui, comme celles des r&#233;volutions industrielles pr&#233;c&#233;dentes, sont susceptibles de remplacer un certain nombre d’emplois ; sym&#233;triquement, l’&#233;volution technologique alimente la croissance en cr&#233;ant de nouveaux produits, en suscitant de nouveaux investissements, en am&#233;liorant la productivit&#233; des travailleurs. La question du solde de cet impact reste aujourd’hui tr&#232;s controvers&#233;e par les sp&#233;cialistes de la question, et varie &#224; la fois selon le cadre th&#233;orique choisi et la m&#233;thode d’investigation empirique utilis&#233;e. Certains, confiants dans les lois du march&#233; et l’observation des r&#233;volutions industrielles pr&#233;c&#233;dentes, mettent l’accent sur la capacit&#233; des &#233;conomies &#224; r&#233;investir les gains de productivit&#233; dans de nouveaux territoires de croissance, cr&#233;ateurs d’emplois ; d’autres, observant l’atonie de la conjoncture mondiale, pointent au contraire soit la possibilit&#233; d’une r&#233;volution num&#233;rique sans croissance, soit le sc&#233;nario d’une croissance sans emplois. Les divergences d’&#233;valuation des deux effets (compensation des emplois d&#233;truits / substitutions des machines aux emplois) reposent notamment sur des &#233;valuations diff&#233;renci&#233;es de la capacit&#233; des machines, robots et algorithmes> &#224; prendre en charge une part tr&#232;s large des t&#226;ches effectu&#233;es aujourd’hui par des', 'Le premier enjeu porte sur l’effet de la r&#233;volution num&#233;rique en cours sur la quantit&#233; d’emplois disponibles dans l’&#233;conomie, et donc sur le ch&#244;mage. Les programmes et les machines d’aujourd’hui, comme celles des r&#233;volutions industrielles pr&#233;c&#233;dentes, sont susceptibles de remplacer un certain nombre d’emplois'),
(41, 'Un consensus', 'Un consensus se dessine en revanche sur le fait que la r&#233;volution industrielle en cours d&#233;place les emplois disponibles, en termes de secteurs et de qualifications. De nombreux travaux empiriques s’efforcent de saisir dans le d&#233;tail quelles sont les t&#226;ches susceptibles d’&#234;tre effectu&#233;es prochainement par des machines, de distinguer les emplois les plus menac&#233;s d’obsolescence de ceux qui sont au contraire compl&#233;mentaires des machines. Se dessinent ainsi diff&#233;rents sc&#233;narii de d&#233;formation du march&#233; du travail au profit des plus dipl&#244;m&#233;s (ou d’une partie d’entre eux), tandis que les emplois faiblement et surtout moyennement qualifi&#233;s apparaissent fortement menac&#233;s. L’effet du progr&#232;s technique se combine ici avec celui de la mondialisation de l’&#233;conomie pour fragiliser les moins dipl&#244;m&#233;s, mais aussi les classes moyennes, ce qui constitue un fait in&#233;dit dans l’histoire du couple technologie/emploi.', 'Un consensus se dessine en revanche sur le fait que la r&#233;volution industrielle en cours d&#233;place les emplois disponibles, en termes de secteurs et de qualifications. De nombreux travaux empiriques s’efforcent de saisir dans le d&#233;tail quelles sont les t&#226;ches susceptibles d’&#234;tre effectu&#233;es prochainement par des machines, ');

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
  MODIFY `id_article` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
