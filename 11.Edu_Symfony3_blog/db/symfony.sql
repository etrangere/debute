-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  mer. 05 sep. 2018 à 13:34
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
-- Base de données :  `symfony`
--

-- --------------------------------------------------------

--
-- Structure de la table `genus`
--

CREATE TABLE `genus` (
  `id` int(11) NOT NULL,
  `sub_family_id` int(11) NOT NULL,
  `is_published` tinyint(1) NOT NULL,
  `first_discovered_at` date NOT NULL,
  `species_count` int(11) NOT NULL,
  `fun_fact` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `genus`
--

INSERT INTO `genus` (`id`, `sub_family_id`, `is_published`, `first_discovered_at`, `species_count`, `fun_fact`, `name`) VALUES
(2, 71, 1, '1838-03-05', 36056, 'Rerum quaerat ut fuga non quibusdam itaque ut.', 'Aureliaaa'),
(3, 64, 0, '1833-11-11', 91601, 'Voluptatum occaecati nihil quam quaerat ipsum.', 'Trichechus'),
(4, 66, 1, '1949-12-30', 89694, 'Dicta accusamus non laboriosam ad.', 'Hippocampus'),
(5, 71, 0, '1927-09-21', 72958, 'Laboriosam et aut ipsum possimus consequuntur aliquam fugiat.', 'Hippocampus'),
(6, 63, 1, '1835-02-22', 99748111, 'Nihil enim dolorem aliquid sint aut iure voluptates.', 'Aurelia'),
(7, 65, 1, '1854-07-21', 21006, 'Enim cumque quasi corporis impedit porro ab adipisci.', 'Balaena'),
(8, 71, 0, '1983-05-04', 63122, 'Quo dolor et officiis minima et consequatur earum.', 'Asterias'),
(9, 65, 0, '1977-03-19', 65719, 'Facilis accusamus ex voluptatem et.', 'Eumetopias'),
(10, 71, 1, '1937-05-04', 19011, 'Ducimus consequuntur voluptatem id quod pariatur distinctio quis.', 'Eumetopias'),
(11, 64, 1, '1832-09-13', 91592, 'Ad ab nam cupiditate vitae dolores.', 'Asterias');

-- --------------------------------------------------------

--
-- Structure de la table `genus_note`
--

CREATE TABLE `genus_note` (
  `id` int(11) NOT NULL,
  `genus_id` int(11) NOT NULL,
  `userame` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_avatar_filename` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `note` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `genus_note`
--

INSERT INTO `genus_note` (`id`, `genus_id`, `userame`, `user_avatar_filename`, `note`, `created_at`) VALUES
(1, 11, 'mhamill', 'leanna.jpeg', 'Dicta voluptatem aut soluta aut inventore non dolores. In sit dicta sit veniam non perspiciatis totam et. Corrupti eius optio nihil voluptas et ea repellat. Velit ex id sint quia velit nihil.', '2018-03-31 09:15:01'),
(2, 4, 'savion48', 'leanna.jpeg', 'Tempora aut alias quidem voluptas atque nulla necessitatibus. Consequatur nihil quis non optio veniam dolores. Perspiciatis placeat possimus veniam dolorem dignissimos optio.', '2018-04-26 00:22:23'),
(3, 4, 'hillary.skiles', 'ryan.jpeg', 'Delectus earum autem ipsum ut veritatis. Molestiae voluptatibus esse occaecati consequatur voluptatem modi. Aut veritatis impedit ut est tempore.', '2018-07-17 05:35:11'),
(4, 10, 'sabina.mueller', 'leanna.jpeg', 'Quasi et quae quod ea occaecati. Voluptas dolorum omnis nostrum. Ut qui modi est ab impedit rerum velit.', '2018-05-06 15:08:27'),
(5, 3, 'ejones', 'ryan.jpeg', 'Velit maxime et non possimus voluptas. Quaerat eos qui soluta fugiat excepturi. Qui esse ipsum iusto corrupti libero est atque accusamus.', '2018-03-09 16:50:25'),
(6, 9, 'roslyn15', 'ryan.jpeg', 'Sit corrupti voluptas et ipsum laboriosam fugit est vitae. Fuga neque enim nostrum consequatur. Expedita suscipit et et.', '2018-08-08 21:53:26'),
(7, 6, 'laila.corkery', 'ryan.jpeg', 'Quaerat delectus saepe doloremque est dicta. Velit impedit eum deserunt quia id voluptatem omnis. Ullam impedit quasi soluta.', '2018-07-09 23:58:45'),
(8, 8, 'kacey.cummerata', 'ryan.jpeg', 'Numquam qui maiores adipisci magni aut animi. Voluptatem molestiae odio saepe et ut quis. Sit et et ipsa animi facere voluptatum et et. Est quasi aspernatur voluptatem et cupiditate molestiae explicabo.', '2018-04-03 17:14:12'),
(9, 5, 'kaleb.blick', 'leanna.jpeg', 'Cum provident quasi qui cum quos sit. Quasi soluta minus quo et voluptas quasi. Quia veritatis quas ut at magnam.', '2018-04-06 09:45:36'),
(10, 7, 'glueilwitz', 'ryan.jpeg', 'Fugiat non ex aliquid eveniet harum temporibus voluptatem. Eligendi aperiam molestiae odit corrupti. Earum esse ab veniam distinctio velit.', '2018-06-01 14:05:26'),
(11, 11, 'walker.gonzalo', 'leanna.jpeg', 'Praesentium aliquid est dicta velit voluptatem asperiores. Voluptate natus sint qui consequuntur excepturi. Ex repellat quasi dolor aut et. Praesentium ullam minus iure dignissimos.', '2018-04-24 06:12:12'),
(12, 7, 'jane.nienow', 'ryan.jpeg', 'Sit ut aut enim in aperiam. Et consequatur aut necessitatibus ipsam numquam a. Perferendis alias sit minus at et aperiam veritatis.', '2018-05-08 14:26:24'),
(13, 4, 'barton26', 'leanna.jpeg', 'Vel quasi aut qui ipsa minus nostrum. Dolor ab consequuntur harum.', '2018-04-07 02:44:07'),
(14, 8, 'darius16', 'leanna.jpeg', 'Iure eum et autem repellat odit dolorum. Eos atque ullam sapiente omnis consequatur et. Et suscipit fugiat ullam provident in.', '2018-05-12 17:58:41'),
(15, 3, 'mlangosh', 'leanna.jpeg', 'Voluptas sint fugiat esse quasi. Aspernatur impedit ipsa explicabo aut recusandae. Sit possimus molestias voluptatem nemo inventore. Aliquam cumque nihil itaque.', '2018-05-13 08:22:52'),
(16, 9, 'geovanny.homenick', 'leanna.jpeg', 'Architecto inventore quasi quis id. Harum laborum cumque molestiae nostrum corporis hic sit. Soluta veniam illum qui voluptatibus. Labore assumenda eveniet ad officia.', '2018-08-15 20:59:33'),
(17, 10, 'waters.frankie', 'ryan.jpeg', 'Rerum rerum fugit omnis quis. Labore non ratione quas debitis.', '2018-03-17 15:05:52'),
(18, 7, 'fadams', 'ryan.jpeg', 'Assumenda id ut quis quis velit. Qui deserunt qui veniam eligendi enim asperiores dolore saepe. Natus voluptas quo qui earum sunt accusamus. Odit provident est nemo vel.', '2018-07-31 13:31:26'),
(19, 5, 'paxton.dare', 'ryan.jpeg', 'Doloribus recusandae ut aliquam sit numquam fuga. Et et esse quia voluptatem. Beatae esse aut et consequatur similique corrupti nisi. Cupiditate quae repellendus eaque et itaque.', '2018-05-01 07:52:31'),
(20, 7, 'wkeebler', 'leanna.jpeg', 'Rem ea similique enim vitae exercitationem voluptatem. Magnam dolorem saepe officia quis. Tenetur est iure nihil et voluptatem. Aut autem accusantium voluptatem reiciendis molestias quam.', '2018-06-29 14:46:05'),
(21, 11, 'westley35', 'leanna.jpeg', 'Odit occaecati consectetur aut exercitationem cupiditate ullam. Nesciunt cum non labore minima. Fugiat et et occaecati facilis quis magni ab.', '2018-07-13 21:13:24'),
(22, 6, 'aharris', 'ryan.jpeg', 'Est amet eaque iusto labore vel quo. Mollitia est sit iste magnam quidem nihil. Libero facere aliquid doloremque corrupti quia non. Ut quia id cupiditate corrupti.', '2018-06-21 05:26:52'),
(23, 3, 'mariano.strosin', 'ryan.jpeg', 'Expedita ut esse tenetur rem. Praesentium est nam ipsa ut accusantium assumenda. Fugit vel rem aut ipsa dolorem.', '2018-03-04 02:03:54'),
(24, 10, 'elian46', 'leanna.jpeg', 'Magni sunt consequatur sit dolorem ad aliquam. Omnis velit ad excepturi dolores fugiat. Rerum nulla iste rerum officiis exercitationem. Ut adipisci cumque maiores non maxime quos minima.', '2018-07-24 09:25:56'),
(25, 11, 'qmante', 'ryan.jpeg', 'Ullam accusantium corrupti nihil cupiditate est debitis soluta consequatur. Vel rerum consequatur mollitia sint et esse aliquam. Esse omnis aperiam sit velit accusantium. Minima nisi est tempore commodi qui.', '2018-06-06 13:35:44'),
(26, 8, 'jermain07', 'ryan.jpeg', 'Ex id nam in id. Cumque sunt reprehenderit et et temporibus iste. Sit necessitatibus voluptates qui aspernatur saepe.', '2018-04-27 17:08:13'),
(27, 7, 'cauer', 'ryan.jpeg', 'Sunt exercitationem optio quo qui nulla quis autem ipsa. Earum quia inventore illo. Quo reiciendis voluptatem et veniam. Provident impedit ipsam ut quibusdam recusandae ad reiciendis.', '2018-07-31 18:57:33'),
(28, 3, 'gboehm', 'leanna.jpeg', 'Neque magnam qui ipsum ut qui. Deserunt doloremque blanditiis nisi ex reiciendis dolores laborum quo.', '2018-08-10 01:44:31'),
(29, 10, 'brayan.kihn', 'leanna.jpeg', 'Sunt tempore et accusantium sapiente voluptatum sint. Quae sapiente omnis harum maxime quae. Rerum sed quia perferendis neque facere reiciendis vero.', '2018-06-08 04:18:52'),
(30, 2, 'florida.auer', 'leanna.jpeg', 'Temporibus magni ratione quasi perferendis voluptatibus. Velit et officiis quas non nisi laborum. Ipsa autem velit et inventore quos vero sint eius. Ut sit minima qui saepe quos dolorum.', '2018-03-16 04:41:31'),
(31, 2, 'marks.delia', 'leanna.jpeg', 'Ducimus facilis tempora nemo sunt ullam voluptatem nobis distinctio. In libero omnis veritatis qui. Voluptas aut voluptatibus ut sint eos fugiat. Aut voluptatem sapiente earum facere sed.', '2018-06-11 09:24:26'),
(32, 6, 'antonietta.ankunding', 'ryan.jpeg', 'Sunt ut omnis aspernatur consectetur. Nesciunt optio veniam ratione corporis asperiores. Est qui nihil ipsum quia esse pariatur vero. In impedit ipsam fugiat magnam.', '2018-05-22 22:46:37'),
(33, 2, 'jenkins.delores', 'leanna.jpeg', 'Autem saepe hic quam consequuntur officiis perspiciatis placeat. Sint veritatis dignissimos non unde. Sit sit ipsa dolorem reprehenderit voluptates alias soluta odit. Tenetur voluptas sunt aut est. Itaque dolor quam repudiandae consequatur.', '2018-05-31 07:21:57'),
(34, 9, 'kennedi.yundt', 'ryan.jpeg', 'Et nam ab eius qui. Consequatur sit doloremque vel doloribus laudantium. Ut maxime qui magnam natus sed quod qui. Qui nisi esse nihil quia ad aut mollitia.', '2018-05-29 14:23:13'),
(35, 3, 'watsica.paolo', 'ryan.jpeg', 'Nostrum odit doloremque rem sint est. Placeat et corporis enim amet laborum. Deleniti dolorem doloremque vitae.', '2018-06-08 05:45:49'),
(36, 10, 'rex.oconner', 'leanna.jpeg', 'Nemo nam numquam illum vel magnam reiciendis. Dicta voluptates saepe autem at odio nemo delectus. Itaque rem ut aut culpa et mollitia. Voluptatem exercitationem voluptate nesciunt incidunt.', '2018-08-16 17:11:40'),
(37, 2, 'buddy.buckridge', 'ryan.jpeg', 'Quidem voluptatem dolores quasi quae eos alias culpa. Laborum commodi qui sequi. Quisquam nostrum sed incidunt optio ut.', '2018-07-04 06:59:42'),
(38, 2, 'mmiller', 'leanna.jpeg', 'Dicta ad ut aut rerum nobis in quidem. Ut nesciunt ut vel nihil nulla aliquid. Provident accusantium eius quo impedit deserunt fugiat voluptate.', '2018-02-27 00:56:43'),
(39, 10, 'ucrooks', 'leanna.jpeg', 'Vero dolore aut est repudiandae. Qui deleniti molestiae suscipit ipsa nulla doloribus consequatur voluptas. Iste exercitationem consequatur laudantium incidunt. Voluptatum repellat odio ad enim quisquam.', '2018-06-22 03:17:05'),
(40, 11, 'nicholaus26', 'leanna.jpeg', 'Corrupti autem voluptas maiores est. Harum dignissimos similique minus animi. Fugit animi asperiores qui hic.', '2018-06-24 13:20:20'),
(41, 10, 'cartwright.lilian', 'leanna.jpeg', 'Aliquam quia qui voluptas inventore non eum nihil. Sunt dolor sit minus eius dolorum ut ratione ut. Voluptatibus ut esse consequatur est omnis. Nesciunt facere vitae eum neque est.', '2018-04-10 12:44:20'),
(42, 6, 'myron38', 'ryan.jpeg', 'Quis velit deserunt id recusandae deleniti at asperiores. Nam cupiditate corrupti sed nulla perspiciatis dolores maiores. Molestiae veniam at aut qui omnis. Occaecati saepe est ut delectus voluptatem numquam est.', '2018-04-19 04:25:33'),
(43, 10, 'jdicki', 'leanna.jpeg', 'Maiores assumenda ratione nostrum minus. Consequatur dolore ipsam ipsa doloremque. Sint voluptatum pariatur aliquam et aut quasi.', '2018-04-05 21:02:15'),
(44, 2, 'kemmer.rasheed', 'leanna.jpeg', 'Eos laudantium iusto beatae dolorum eos inventore veritatis. Nemo quia numquam itaque ut molestiae quis. Iste dolorem id veritatis voluptatem reiciendis quam possimus et. Voluptas molestiae ipsa in amet.', '2018-07-26 00:37:33'),
(45, 9, 'aurelio.aufderhar', 'ryan.jpeg', 'Ipsum numquam similique non omnis voluptatibus in. Voluptatem laboriosam recusandae voluptas architecto ducimus cupiditate. Fugit quam nisi deleniti accusantium nisi perferendis.', '2018-08-06 00:27:30'),
(46, 3, 'beatrice67', 'ryan.jpeg', 'Esse dicta sed soluta quod vel libero quasi. Quia quis tempora eum repudiandae at exercitationem suscipit autem. At facilis et saepe laudantium provident quaerat voluptatem assumenda.', '2018-07-12 15:14:37'),
(47, 8, 'betty25', 'leanna.jpeg', 'Nobis quas illum odio omnis sit. Nam non et et aut laboriosam ut reprehenderit. Sequi non expedita sit provident perspiciatis.', '2018-04-23 16:44:35'),
(48, 10, 'merle89', 'leanna.jpeg', 'Ut aut ipsam dolorum neque est et natus. Ab est ut dignissimos. Dolores dignissimos molestias adipisci amet nobis facere.', '2018-07-06 11:22:55'),
(49, 8, 'berta01', 'ryan.jpeg', 'Quis voluptatum dolorem error eum laudantium. Dolorum tempora non vitae animi eum nobis. Dolorem rerum explicabo deserunt ut.', '2018-04-02 05:37:45'),
(50, 5, 'bins.magali', 'leanna.jpeg', 'Sunt cupiditate minima ut qui dolor est. Eligendi unde accusamus molestias harum. Neque minima fugiat nam unde.', '2018-05-08 05:24:24'),
(51, 3, 'blanda.lee', 'ryan.jpeg', 'Sunt dicta assumenda rerum nobis. Sint omnis consequatur eligendi consequuntur. Vel cumque vel ut quaerat quis nam impedit ut.', '2018-05-14 01:25:11'),
(52, 5, 'bkeebler', 'ryan.jpeg', 'Animi illo modi eaque aperiam est nobis impedit quos. Neque nostrum eum consequatur iste debitis laboriosam. Maiores animi odio est cumque voluptate beatae. Sed aliquid consequatur tempora nesciunt.', '2018-05-25 12:03:53'),
(53, 6, 'jarret.jenkins', 'leanna.jpeg', 'Ut repellat molestiae ut ut excepturi. Ut repellat delectus sequi natus rerum. In dolorem itaque ullam occaecati. Velit molestiae sapiente reprehenderit tenetur tempora ut non.', '2018-04-01 18:55:07'),
(54, 3, 'hassie14', 'leanna.jpeg', 'Eius vitae id aut sunt ut dolore consequatur. Esse molestiae aut optio quisquam enim laudantium ex. Unde iste inventore similique nemo.', '2018-06-26 07:25:16'),
(55, 7, 'torrey92', 'ryan.jpeg', 'Molestias eos sint eveniet tempore alias est est odit. Itaque saepe est aliquam asperiores repudiandae. Mollitia ut hic saepe natus est excepturi.', '2018-03-11 21:59:41'),
(56, 8, 'owunsch', 'leanna.jpeg', 'Quasi deleniti asperiores molestiae sapiente. Delectus sit consectetur rerum omnis quasi. Eum nobis id temporibus.', '2018-05-28 04:06:27'),
(57, 8, 'fwalter', 'ryan.jpeg', 'Autem enim vel minus eaque quia accusantium. Sint eveniet magni excepturi ab maiores eum veniam. Delectus voluptatem omnis laudantium voluptatem.', '2018-05-04 21:24:11'),
(58, 5, 'leuschke.casimir', 'ryan.jpeg', 'Aut in voluptatem amet voluptas ad. Iure similique fuga sit dolores excepturi ratione quia. Consequatur nihil molestias corrupti nostrum eos ut reiciendis dolore. Nulla repellat eum ipsa eaque quasi.', '2018-07-05 07:30:12'),
(59, 7, 'dhuels', 'ryan.jpeg', 'Eos voluptas harum veritatis earum. Modi quaerat voluptate eligendi ut deleniti nulla officiis modi. Soluta sed enim sunt inventore. Odio molestias consequuntur cumque modi aut quae.', '2018-04-01 17:52:17'),
(60, 10, 'corkery.juliana', 'leanna.jpeg', 'Enim necessitatibus voluptatem nihil culpa eos. Deleniti saepe velit similique ullam magni.', '2018-07-09 05:42:46'),
(61, 9, 'emmett.gleichner', 'ryan.jpeg', 'Commodi debitis ut quasi occaecati est eos. Dolores ipsa nostrum maiores molestiae ut impedit neque. Nesciunt sequi nam a voluptas iure ea.', '2018-03-23 12:18:40'),
(62, 2, 'farrell.jordi', 'leanna.jpeg', 'Cum aut dolore consequatur ut assumenda sint. Voluptas qui nesciunt ipsum voluptas. Impedit perferendis quos voluptate ipsam vel placeat. Possimus et quia ut non quis nesciunt.', '2018-04-15 00:10:10'),
(63, 2, 'katlyn.strosin', 'leanna.jpeg', 'Amet quisquam sit id dolores. Ad cum fugiat sed labore voluptas quasi qui. Quia unde ad ipsum libero dolores. In impedit eum vel.', '2018-08-03 15:08:15'),
(64, 6, 'kuphal.marcelino', 'ryan.jpeg', 'Voluptatem ullam vero optio aut delectus. Non vitae sint ad voluptatum dolore deleniti id et. Illum est debitis non porro sunt.', '2018-08-03 17:51:44'),
(65, 3, 'gtorp', 'leanna.jpeg', 'Doloribus veritatis corrupti sed omnis qui. Minima culpa pariatur magni sequi facilis. Provident rem qui doloremque libero minus nam.', '2018-05-19 00:30:17'),
(66, 2, 'chanel.stracke', 'ryan.jpeg', 'Quis ut nesciunt sunt neque. Corporis et et nobis officiis voluptate laboriosam consectetur. Quia eos aut ullam vel autem hic harum eos.', '2018-08-10 14:36:12'),
(67, 9, 'toy87', 'ryan.jpeg', 'Occaecati aut quis fugit repellat et quaerat totam. Aut et nostrum sed exercitationem. Rerum et suscipit qui quis debitis placeat. Facere blanditiis repellendus dicta repudiandae.', '2018-08-02 10:00:54'),
(68, 11, 'albina62', 'leanna.jpeg', 'Exercitationem et qui alias voluptatem nemo voluptates. Quo deleniti magni cupiditate quibusdam repellendus soluta. Et vel officia est pariatur ut.', '2018-07-03 17:41:57'),
(69, 2, 'jones.kris', 'ryan.jpeg', 'Aliquam voluptatem deleniti rerum reprehenderit ut minus quia. Aliquid doloribus sed aut impedit atque sequi odit. Sit autem omnis cupiditate.', '2018-08-26 05:19:20'),
(70, 9, 'hegmann.matilde', 'leanna.jpeg', 'Voluptatem in at ducimus qui impedit. Optio excepturi debitis autem similique. Nisi praesentium rerum ut ut et in placeat. Assumenda fugiat rerum qui nam.', '2018-06-03 18:53:17'),
(71, 5, 'kane.kemmer', 'leanna.jpeg', 'Expedita rerum distinctio quos praesentium mollitia rem repellat. Eos est commodi et ex.', '2018-04-07 10:15:05'),
(72, 2, 'tromp.oceane', 'ryan.jpeg', 'Ratione eum aut provident impedit dolores qui. Voluptatum ut repellendus perferendis omnis et. Eos voluptatibus eligendi voluptas.', '2018-08-13 17:48:44'),
(73, 3, 'yaltenwerth', 'leanna.jpeg', 'Et tempora quas eveniet inventore distinctio. At aut molestiae nihil et. Dolorum odio neque iure sequi optio. Voluptatem incidunt repellat voluptate id amet enim sit. Consequatur minus totam illo iure repellat eveniet sunt.', '2018-07-21 11:01:48'),
(74, 6, 'alverta52', 'ryan.jpeg', 'Sed nihil rem vitae exercitationem aliquam vitae est. Modi dolores dolorum voluptatem et in quae porro qui. Molestiae harum minus nulla iste. Magnam sit nisi sint non rerum alias eum et. Aut velit vel aperiam voluptas rerum reiciendis qui aperiam.', '2018-08-23 10:17:48'),
(75, 9, 'otis23', 'ryan.jpeg', 'Facilis enim non nam eveniet. Iure quidem inventore odio ut sed. Minima sed est nihil repudiandae. Laboriosam praesentium accusantium nulla cumque exercitationem ipsam veritatis mollitia.', '2018-05-31 05:59:39'),
(76, 4, 'stroman.alvah', 'leanna.jpeg', 'Rerum sunt voluptas iste dolor. Non incidunt veritatis cupiditate. Sit ea modi voluptatem sed sit.', '2018-08-14 01:14:29'),
(77, 5, 'zion33', 'ryan.jpeg', 'Autem soluta magnam quod ducimus. Qui amet numquam cupiditate vel laudantium rerum. Aperiam eveniet qui est et ipsam. Ea earum in corrupti in quisquam similique. Reprehenderit quos assumenda quas id qui optio.', '2018-05-31 20:37:30'),
(78, 8, 'kshlerin.elmer', 'leanna.jpeg', 'Eos optio ut illo voluptatem totam quas aspernatur. Et optio libero et hic laborum id aut natus. Ut temporibus tempore aut dicta blanditiis.', '2018-03-25 18:50:45'),
(79, 10, 'swalsh', 'ryan.jpeg', 'Animi vel quisquam dolorem quos animi. Id quia voluptatem aperiam illum vel. Amet exercitationem qui possimus distinctio. Pariatur molestias id magnam animi odio.', '2018-05-28 15:27:05'),
(80, 5, 'alexandrea69', 'ryan.jpeg', 'Voluptatibus assumenda cum veniam soluta. Esse iste neque nihil. Magnam temporibus quos expedita cum aspernatur.', '2018-06-11 20:10:05'),
(81, 2, 'omoen', 'leanna.jpeg', 'Et quo nihil ipsa mollitia ratione nihil harum. Quis ducimus voluptate sit cupiditate. Et nisi quis consectetur recusandae voluptas vel. Accusantium tempora sed excepturi.', '2018-03-25 20:14:50'),
(82, 2, 'kparker', 'ryan.jpeg', 'Eum officia unde temporibus officiis est deserunt. Rerum beatae aliquid explicabo molestias dolore officiis. Atque amet in vel facere et. Quisquam doloremque incidunt eius voluptatem atque aut et.', '2018-07-22 12:55:17'),
(83, 3, 'senger.sarah', 'leanna.jpeg', 'Hic dolores blanditiis sunt provident. Porro rem aut hic id. Facere dolore explicabo esse ratione consequatur ratione. Maxime et autem quos commodi id quaerat cupiditate dignissimos.', '2018-07-20 13:50:29'),
(84, 6, 'roy17', 'ryan.jpeg', 'Quae sed sint in odit dicta. Quo cupiditate optio quae repudiandae quis ut. Ullam sit quia dignissimos deleniti ut vel optio. Alias voluptatem omnis perspiciatis asperiores.', '2018-04-29 21:45:14'),
(85, 6, 'buckridge.wilson', 'leanna.jpeg', 'Dicta earum enim velit quam. Officiis ut rerum distinctio exercitationem. Saepe et aut velit eius laboriosam aperiam neque aliquam. Nisi nulla aut vel facilis tempore.', '2018-04-05 05:36:08'),
(86, 8, 'jast.darlene', 'ryan.jpeg', 'Et sed fugiat voluptas unde. Assumenda sint quia a est.', '2018-03-27 02:57:09'),
(87, 8, 'awitting', 'leanna.jpeg', 'Placeat ducimus recusandae aut quia accusantium qui temporibus. Nihil iusto aliquid a unde adipisci et. Quaerat eum quibusdam minus adipisci.', '2018-06-12 19:14:42'),
(88, 4, 'reina.rowe', 'leanna.jpeg', 'Labore quia voluptatibus omnis rerum asperiores perspiciatis sit. Alias nisi cupiditate rerum. Maiores sint nihil consequatur quidem.', '2018-06-06 20:04:16'),
(89, 3, 'halvorson.ubaldo', 'ryan.jpeg', 'Asperiores atque qui minima consequatur pariatur itaque. Deserunt labore eius aspernatur odio voluptas. Recusandae explicabo consectetur esse illum nam.', '2018-04-14 07:37:20'),
(90, 9, 'tstark', 'ryan.jpeg', 'Corrupti tempore omnis quod quas amet ex. Quaerat ducimus nobis cumque earum. Quas enim neque aliquam perferendis. Ducimus non quia rerum delectus qui aspernatur quis.', '2018-06-28 23:45:03'),
(91, 7, 'colin28', 'leanna.jpeg', 'Reiciendis libero delectus et et voluptas eveniet ut excepturi. Fugit quas assumenda animi. Tempora ullam earum accusantium at ad quasi.', '2018-03-18 23:20:13'),
(92, 2, 'bianka99', 'ryan.jpeg', 'Omnis rerum enim voluptate aut. Velit molestiae numquam facere dolore maxime quasi molestiae. Voluptatem iure eum corporis maxime distinctio velit ut aut.', '2018-04-14 04:56:44'),
(93, 5, 'ybraun', 'leanna.jpeg', 'Fugiat non minus dicta nobis eveniet dicta. Quia dolorem consequatur itaque est labore molestiae. Officia inventore sit voluptates reiciendis libero.', '2018-03-24 15:00:55'),
(94, 6, 'jaleel.hauck', 'leanna.jpeg', 'Nostrum deleniti dicta placeat dolorum laborum. Alias iure consequatur vel. Illum ipsum laboriosam placeat accusantium ut corrupti.', '2018-05-25 20:34:13'),
(95, 9, 'zoe.wisozk', 'ryan.jpeg', 'Esse enim sunt nemo laborum corporis id. Rerum mollitia et quisquam voluptatem. Provident accusantium rerum error nihil.', '2018-06-15 04:41:04'),
(96, 10, 'johns.cara', 'leanna.jpeg', 'Quae voluptas occaecati non ut similique. Commodi sit qui molestias. Reprehenderit voluptatum qui labore molestias.', '2018-06-28 03:33:00'),
(97, 3, 'ieffertz', 'ryan.jpeg', 'Deleniti qui laboriosam dolorum. Qui ut non accusamus et animi qui. Enim et sit ipsa odio consequatur.', '2018-03-06 07:03:24'),
(98, 7, 'ledner.trey', 'ryan.jpeg', 'Itaque expedita et ullam suscipit minus. Debitis pariatur quia totam odio sed aspernatur. Voluptas veniam tempore sequi assumenda esse ut architecto. Laborum voluptate iusto optio possimus laboriosam quis rerum sapiente.', '2018-06-25 00:33:43'),
(99, 3, 'opouros', 'ryan.jpeg', 'Maiores aperiam deserunt dolore. Quo esse est qui nulla nisi. Tempora aut aut quam occaecati. Quas et voluptatum voluptates eaque et ab.', '2018-07-26 02:33:26'),
(100, 7, 'ibotsford', 'leanna.jpeg', 'Nisi labore molestias sequi quas ea et corporis temporibus. Quisquam sed a ut nisi. Illo iure enim quo occaecati beatae.', '2018-06-01 20:49:57');

-- --------------------------------------------------------

--
-- Structure de la table `migration_versions`
--

CREATE TABLE `migration_versions` (
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `sub_family`
--

CREATE TABLE `sub_family` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `sub_family`
--

INSERT INTO `sub_family` (`id`, `name`) VALUES
(62, 'Morar'),
(63, 'Schmeler'),
(64, 'Reynolds'),
(65, 'Lindgren'),
(66, 'Ferry'),
(67, 'Conn'),
(68, 'Kemmer'),
(69, 'Muller'),
(70, 'Doyle'),
(71, 'Schmeler');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`) VALUES
(61, 'weaverryan+1@gmail.com'),
(70, 'weaverryan+10@gmail.com'),
(62, 'weaverryan+2@gmail.com'),
(63, 'weaverryan+3@gmail.com'),
(64, 'weaverryan+4@gmail.com'),
(65, 'weaverryan+5@gmail.com'),
(66, 'weaverryan+6@gmail.com'),
(67, 'weaverryan+7@gmail.com'),
(68, 'weaverryan+8@gmail.com'),
(69, 'weaverryan+9@gmail.com');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `genus`
--
ALTER TABLE `genus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_38C5106ED15310D4` (`sub_family_id`);

--
-- Index pour la table `genus_note`
--
ALTER TABLE `genus_note`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_6478FCEC85C4074C` (`genus_id`);

--
-- Index pour la table `migration_versions`
--
ALTER TABLE `migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `sub_family`
--
ALTER TABLE `sub_family`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `genus`
--
ALTER TABLE `genus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `genus_note`
--
ALTER TABLE `genus_note`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT pour la table `sub_family`
--
ALTER TABLE `sub_family`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `genus`
--
ALTER TABLE `genus`
  ADD CONSTRAINT `FK_38C5106ED15310D4` FOREIGN KEY (`sub_family_id`) REFERENCES `sub_family` (`id`);

--
-- Contraintes pour la table `genus_note`
--
ALTER TABLE `genus_note`
  ADD CONSTRAINT `FK_6478FCEC85C4074C` FOREIGN KEY (`genus_id`) REFERENCES `genus` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
