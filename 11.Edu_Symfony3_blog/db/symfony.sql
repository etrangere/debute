-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  mar. 31 juil. 2018 à 22:39
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
  `species_count` int(11) NOT NULL,
  `fun_fact` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `genus`
--

INSERT INTO `genus` (`id`, `sub_family_id`, `species_count`, `fun_fact`, `name`) VALUES
(1, 11, 36056, 'Rerum quaerat ut fuga non quibusdam itaque ut.', 'Aurelia'),
(2, 5, 42857, 'Commodi fugiat debitis voluptatum occaecati nihil quam.', 'Trichechus'),
(3, 5, 3211, 'Qui itaque voluptatem quis numquam dicta accusamus.', 'Carcharodon'),
(4, 5, 54868, 'Tempore error rerum et autem sint.', 'Balistoides'),
(5, 7, 49734, 'Possimus consequuntur aliquam fugiat sit ratione est aut.', 'Hippocampus'),
(6, 6, 30984, 'Enim dolorem aliquid sint aut iure voluptates fuga.', 'Chelonia'),
(7, 10, 72265, 'Non enim enim cumque quasi corporis impedit porro.', 'Octopus'),
(8, 4, 31447, 'Laudantium et consequatur enim excepturi quo dolor.', 'Balaena'),
(9, 9, 66073, 'Consequatur earum aut consectetur cupiditate quae ut sit.', 'Trichechus'),
(10, 8, 21174, 'Voluptatem et eveniet nemo voluptatibus necessitatibus.', 'Cucumaria');

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
(1, 6, 'swalsh', 'leanna.jpeg', 'Id quod pariatur distinctio quis suscipit consectetur. Repellat qui alias et ad ab nam. Vitae dolores et rem est. Voluptatem ut ut quibusdam voluptas dicta voluptatem aut.', '2018-07-14 10:30:49'),
(2, 10, 'josue.mertz', 'ryan.jpeg', 'Sit veniam non perspiciatis totam et blanditiis corrupti. Optio nihil voluptas et ea repellat repudiandae velit. Id sint quia velit nihil blanditiis est et. Commodi ab doloremque quos perspiciatis tempora.', '2018-05-15 17:54:30'),
(3, 2, 'mconsidine', 'ryan.jpeg', 'Consequatur nihil quis non optio veniam dolores. Perspiciatis placeat possimus veniam dolorem dignissimos optio. Ut dignissimos et officiis eius. Eaque doloribus delectus earum autem ipsum ut veritatis.', '2018-03-23 01:23:08'),
(4, 8, 'reichert.anita', 'ryan.jpeg', 'Aut veritatis impedit ut est tempore. Atque quam et impedit illum consequuntur. Reprehenderit quasi et quae quod ea.', '2018-06-05 12:57:23'),
(5, 10, 'epacocha', 'leanna.jpeg', 'Qui modi est ab impedit rerum velit facilis. Voluptas provident beatae aperiam labore error. Maxime et non possimus voluptas. Quaerat eos qui soluta fugiat excepturi.', '2018-07-06 01:48:36'),
(6, 4, 'justus.altenwerth', 'leanna.jpeg', 'Accusamus maiores architecto animi ut et. Provident qui et sit corrupti voluptas. Ipsum laboriosam fugit est vitae hic fuga neque.', '2018-06-05 16:05:12'),
(7, 10, 'jbeier', 'leanna.jpeg', 'Ex repudiandae sed omnis fugiat qui. Quia iure quaerat delectus saepe doloremque est. Dolore velit impedit eum deserunt quia.', '2018-06-20 07:11:48'),
(8, 10, 'hoyt.douglas', 'leanna.jpeg', 'Harum id voluptates dolor et. Perspiciatis sunt numquam qui maiores adipisci magni aut. Praesentium voluptatem molestiae odio saepe. Ut quis enim sit et et ipsa.', '2018-06-13 18:17:57'),
(9, 3, 'schumm.kody', 'leanna.jpeg', 'Voluptatem et cupiditate molestiae explicabo cum distinctio doloremque. Aut quis nihil quo tempore cum. Quasi qui cum quos sit.', '2018-04-04 21:04:25'),
(10, 6, 'gerlach.elouise', 'ryan.jpeg', 'Quia veritatis quas ut at magnam. Quidem aliquid aut ducimus velit dolorum ad. Non ex aliquid eveniet harum temporibus. Et eligendi aperiam molestiae odit corrupti. Earum esse ab veniam distinctio velit.', '2018-05-05 20:19:54'),
(11, 10, 'walker.gonzalo', 'leanna.jpeg', 'Praesentium aliquid est dicta velit voluptatem asperiores. Voluptate natus sint qui consequuntur excepturi. Ex repellat quasi dolor aut et. Praesentium ullam minus iure dignissimos.', '2018-03-28 12:26:40'),
(12, 6, 'jane.nienow', 'ryan.jpeg', 'Sit ut aut enim in aperiam. Et consequatur aut necessitatibus ipsam numquam a. Perferendis alias sit minus at et aperiam veritatis.', '2018-04-11 20:40:52'),
(13, 3, 'barton26', 'leanna.jpeg', 'Vel quasi aut qui ipsa minus nostrum. Dolor ab consequuntur harum.', '2018-03-11 07:58:35'),
(14, 7, 'darius16', 'leanna.jpeg', 'Iure eum et autem repellat odit dolorum. Eos atque ullam sapiente omnis consequatur et. Et suscipit fugiat ullam provident in.', '2018-04-16 00:13:09'),
(15, 2, 'mlangosh', 'leanna.jpeg', 'Voluptas sint fugiat esse quasi. Aspernatur impedit ipsa explicabo aut recusandae. Sit possimus molestias voluptatem nemo inventore. Aliquam cumque nihil itaque.', '2018-04-16 14:37:20'),
(16, 8, 'geovanny.homenick', 'leanna.jpeg', 'Architecto inventore quasi quis id. Harum laborum cumque molestiae nostrum corporis hic sit. Soluta veniam illum qui voluptatibus. Labore assumenda eveniet ad officia.', '2018-07-20 03:14:01'),
(17, 9, 'waters.frankie', 'ryan.jpeg', 'Rerum rerum fugit omnis quis. Labore non ratione quas debitis.', '2018-02-18 21:20:20'),
(18, 6, 'fadams', 'ryan.jpeg', 'Assumenda id ut quis quis velit. Qui deserunt qui veniam eligendi enim asperiores dolore saepe. Natus voluptas quo qui earum sunt accusamus. Odit provident est nemo vel.', '2018-07-04 19:45:54'),
(19, 4, 'paxton.dare', 'ryan.jpeg', 'Doloribus recusandae ut aliquam sit numquam fuga. Et et esse quia voluptatem. Beatae esse aut et consequatur similique corrupti nisi. Cupiditate quae repellendus eaque et itaque.', '2018-04-04 14:06:59'),
(20, 6, 'wkeebler', 'leanna.jpeg', 'Rem ea similique enim vitae exercitationem voluptatem. Magnam dolorem saepe officia quis. Tenetur est iure nihil et voluptatem. Aut autem accusantium voluptatem reiciendis molestias quam.', '2018-06-02 21:00:33'),
(21, 10, 'westley35', 'leanna.jpeg', 'Odit occaecati consectetur aut exercitationem cupiditate ullam. Nesciunt cum non labore minima. Fugiat et et occaecati facilis quis magni ab.', '2018-06-17 03:27:52'),
(22, 5, 'aharris', 'ryan.jpeg', 'Est amet eaque iusto labore vel quo. Mollitia est sit iste magnam quidem nihil. Libero facere aliquid doloremque corrupti quia non. Ut quia id cupiditate corrupti.', '2018-05-25 11:41:20'),
(23, 2, 'mariano.strosin', 'ryan.jpeg', 'Expedita ut esse tenetur rem. Praesentium est nam ipsa ut accusantium assumenda. Fugit vel rem aut ipsa dolorem.', '2018-02-05 08:18:22'),
(24, 9, 'elian46', 'leanna.jpeg', 'Magni sunt consequatur sit dolorem ad aliquam. Omnis velit ad excepturi dolores fugiat. Rerum nulla iste rerum officiis exercitationem. Ut adipisci cumque maiores non maxime quos minima.', '2018-06-27 15:40:24'),
(25, 10, 'qmante', 'ryan.jpeg', 'Ullam accusantium corrupti nihil cupiditate est debitis soluta consequatur. Vel rerum consequatur mollitia sint et esse aliquam. Esse omnis aperiam sit velit accusantium. Minima nisi est tempore commodi qui.', '2018-05-10 19:50:12'),
(26, 7, 'jermain07', 'ryan.jpeg', 'Ex id nam in id. Cumque sunt reprehenderit et et temporibus iste. Sit necessitatibus voluptates qui aspernatur saepe.', '2018-03-31 23:22:41'),
(27, 6, 'cauer', 'ryan.jpeg', 'Sunt exercitationem optio quo qui nulla quis autem ipsa. Earum quia inventore illo. Quo reiciendis voluptatem et veniam. Provident impedit ipsam ut quibusdam recusandae ad reiciendis.', '2018-07-05 01:12:01'),
(28, 2, 'gboehm', 'leanna.jpeg', 'Neque magnam qui ipsum ut qui. Deserunt doloremque blanditiis nisi ex reiciendis dolores laborum quo.', '2018-07-14 07:58:59'),
(29, 9, 'brayan.kihn', 'leanna.jpeg', 'Sunt tempore et accusantium sapiente voluptatum sint. Quae sapiente omnis harum maxime quae. Rerum sed quia perferendis neque facere reiciendis vero.', '2018-05-12 10:33:20'),
(30, 1, 'florida.auer', 'leanna.jpeg', 'Temporibus magni ratione quasi perferendis voluptatibus. Velit et officiis quas non nisi laborum. Ipsa autem velit et inventore quos vero sint eius. Ut sit minima qui saepe quos dolorum.', '2018-02-17 10:55:59'),
(31, 1, 'marks.delia', 'leanna.jpeg', 'Ducimus facilis tempora nemo sunt ullam voluptatem nobis distinctio. In libero omnis veritatis qui. Voluptas aut voluptatibus ut sint eos fugiat. Aut voluptatem sapiente earum facere sed.', '2018-05-15 15:38:54'),
(32, 5, 'antonietta.ankunding', 'ryan.jpeg', 'Sunt ut omnis aspernatur consectetur. Nesciunt optio veniam ratione corporis asperiores. Est qui nihil ipsum quia esse pariatur vero. In impedit ipsam fugiat magnam.', '2018-04-26 05:01:05'),
(33, 1, 'jenkins.delores', 'leanna.jpeg', 'Autem saepe hic quam consequuntur officiis perspiciatis placeat. Sint veritatis dignissimos non unde. Sit sit ipsa dolorem reprehenderit voluptates alias soluta odit. Tenetur voluptas sunt aut est. Itaque dolor quam repudiandae consequatur.', '2018-05-04 13:36:25'),
(34, 8, 'kennedi.yundt', 'ryan.jpeg', 'Et nam ab eius qui. Consequatur sit doloremque vel doloribus laudantium. Ut maxime qui magnam natus sed quod qui. Qui nisi esse nihil quia ad aut mollitia.', '2018-05-02 20:37:41'),
(35, 2, 'watsica.paolo', 'ryan.jpeg', 'Nostrum odit doloremque rem sint est. Placeat et corporis enim amet laborum. Deleniti dolorem doloremque vitae.', '2018-05-12 12:00:17'),
(36, 9, 'rex.oconner', 'leanna.jpeg', 'Nemo nam numquam illum vel magnam reiciendis. Dicta voluptates saepe autem at odio nemo delectus. Itaque rem ut aut culpa et mollitia. Voluptatem exercitationem voluptate nesciunt incidunt.', '2018-07-20 23:26:08'),
(37, 1, 'buddy.buckridge', 'ryan.jpeg', 'Quidem voluptatem dolores quasi quae eos alias culpa. Laborum commodi qui sequi. Quisquam nostrum sed incidunt optio ut.', '2018-06-07 13:14:10'),
(38, 1, 'mmiller', 'leanna.jpeg', 'Dicta ad ut aut rerum nobis in quidem. Ut nesciunt ut vel nihil nulla aliquid. Provident accusantium eius quo impedit deserunt fugiat voluptate.', '2018-01-31 07:11:11'),
(39, 9, 'ucrooks', 'leanna.jpeg', 'Vero dolore aut est repudiandae. Qui deleniti molestiae suscipit ipsa nulla doloribus consequatur voluptas. Iste exercitationem consequatur laudantium incidunt. Voluptatum repellat odio ad enim quisquam.', '2018-05-26 09:31:33'),
(40, 10, 'nicholaus26', 'leanna.jpeg', 'Corrupti autem voluptas maiores est. Harum dignissimos similique minus animi. Fugit animi asperiores qui hic.', '2018-05-28 19:34:48'),
(41, 9, 'cartwright.lilian', 'leanna.jpeg', 'Aliquam quia qui voluptas inventore non eum nihil. Sunt dolor sit minus eius dolorum ut ratione ut. Voluptatibus ut esse consequatur est omnis. Nesciunt facere vitae eum neque est.', '2018-03-14 17:58:48'),
(42, 5, 'myron38', 'ryan.jpeg', 'Quis velit deserunt id recusandae deleniti at asperiores. Nam cupiditate corrupti sed nulla perspiciatis dolores maiores. Molestiae veniam at aut qui omnis. Occaecati saepe est ut delectus voluptatem numquam est.', '2018-03-23 09:40:01'),
(43, 9, 'jdicki', 'leanna.jpeg', 'Maiores assumenda ratione nostrum minus. Consequatur dolore ipsam ipsa doloremque. Sint voluptatum pariatur aliquam et aut quasi.', '2018-03-10 02:16:43'),
(44, 1, 'kemmer.rasheed', 'leanna.jpeg', 'Eos laudantium iusto beatae dolorum eos inventore veritatis. Nemo quia numquam itaque ut molestiae quis. Iste dolorem id veritatis voluptatem reiciendis quam possimus et. Voluptas molestiae ipsa in amet.', '2018-06-29 06:52:01'),
(45, 8, 'aurelio.aufderhar', 'ryan.jpeg', 'Ipsum numquam similique non omnis voluptatibus in. Voluptatem laboriosam recusandae voluptas architecto ducimus cupiditate. Fugit quam nisi deleniti accusantium nisi perferendis.', '2018-07-10 06:41:58'),
(46, 2, 'beatrice67', 'ryan.jpeg', 'Esse dicta sed soluta quod vel libero quasi. Quia quis tempora eum repudiandae at exercitationem suscipit autem. At facilis et saepe laudantium provident quaerat voluptatem assumenda.', '2018-06-15 21:29:05'),
(47, 7, 'betty25', 'leanna.jpeg', 'Nobis quas illum odio omnis sit. Nam non et et aut laboriosam ut reprehenderit. Sequi non expedita sit provident perspiciatis.', '2018-03-27 22:59:03'),
(48, 9, 'merle89', 'leanna.jpeg', 'Ut aut ipsam dolorum neque est et natus. Ab est ut dignissimos. Dolores dignissimos molestias adipisci amet nobis facere.', '2018-06-09 17:37:23'),
(49, 7, 'berta01', 'ryan.jpeg', 'Quis voluptatum dolorem error eum laudantium. Dolorum tempora non vitae animi eum nobis. Dolorem rerum explicabo deserunt ut.', '2018-03-06 10:52:13'),
(50, 4, 'bins.magali', 'leanna.jpeg', 'Sunt cupiditate minima ut qui dolor est. Eligendi unde accusamus molestias harum. Neque minima fugiat nam unde.', '2018-04-11 11:38:52'),
(51, 2, 'blanda.lee', 'ryan.jpeg', 'Sunt dicta assumenda rerum nobis. Sint omnis consequatur eligendi consequuntur. Vel cumque vel ut quaerat quis nam impedit ut.', '2018-04-17 07:39:39'),
(52, 4, 'bkeebler', 'ryan.jpeg', 'Animi illo modi eaque aperiam est nobis impedit quos. Neque nostrum eum consequatur iste debitis laboriosam. Maiores animi odio est cumque voluptate beatae. Sed aliquid consequatur tempora nesciunt.', '2018-04-28 18:18:21'),
(53, 5, 'jarret.jenkins', 'leanna.jpeg', 'Ut repellat molestiae ut ut excepturi. Ut repellat delectus sequi natus rerum. In dolorem itaque ullam occaecati. Velit molestiae sapiente reprehenderit tenetur tempora ut non.', '2018-03-06 00:09:35'),
(54, 2, 'hassie14', 'leanna.jpeg', 'Eius vitae id aut sunt ut dolore consequatur. Esse molestiae aut optio quisquam enim laudantium ex. Unde iste inventore similique nemo.', '2018-05-30 13:39:44'),
(55, 6, 'torrey92', 'ryan.jpeg', 'Molestias eos sint eveniet tempore alias est est odit. Itaque saepe est aliquam asperiores repudiandae. Mollitia ut hic saepe natus est excepturi.', '2018-02-13 04:14:09'),
(56, 7, 'owunsch', 'leanna.jpeg', 'Quasi deleniti asperiores molestiae sapiente. Delectus sit consectetur rerum omnis quasi. Eum nobis id temporibus.', '2018-05-01 10:20:55'),
(57, 7, 'fwalter', 'ryan.jpeg', 'Autem enim vel minus eaque quia accusantium. Sint eveniet magni excepturi ab maiores eum veniam. Delectus voluptatem omnis laudantium voluptatem.', '2018-04-08 03:38:39'),
(58, 4, 'leuschke.casimir', 'ryan.jpeg', 'Aut in voluptatem amet voluptas ad. Iure similique fuga sit dolores excepturi ratione quia. Consequatur nihil molestias corrupti nostrum eos ut reiciendis dolore. Nulla repellat eum ipsa eaque quasi.', '2018-06-08 13:44:40'),
(59, 6, 'dhuels', 'ryan.jpeg', 'Eos voluptas harum veritatis earum. Modi quaerat voluptate eligendi ut deleniti nulla officiis modi. Soluta sed enim sunt inventore. Odio molestias consequuntur cumque modi aut quae.', '2018-03-05 23:06:45'),
(60, 9, 'corkery.juliana', 'leanna.jpeg', 'Enim necessitatibus voluptatem nihil culpa eos. Deleniti saepe velit similique ullam magni.', '2018-06-12 11:57:14'),
(61, 8, 'emmett.gleichner', 'ryan.jpeg', 'Commodi debitis ut quasi occaecati est eos. Dolores ipsa nostrum maiores molestiae ut impedit neque. Nesciunt sequi nam a voluptas iure ea.', '2018-02-24 18:33:08'),
(62, 1, 'farrell.jordi', 'leanna.jpeg', 'Cum aut dolore consequatur ut assumenda sint. Voluptas qui nesciunt ipsum voluptas. Impedit perferendis quos voluptate ipsam vel placeat. Possimus et quia ut non quis nesciunt.', '2018-03-19 05:24:38'),
(63, 1, 'katlyn.strosin', 'leanna.jpeg', 'Amet quisquam sit id dolores. Ad cum fugiat sed labore voluptas quasi qui. Quia unde ad ipsum libero dolores. In impedit eum vel.', '2018-07-07 21:22:43'),
(64, 5, 'kuphal.marcelino', 'ryan.jpeg', 'Voluptatem ullam vero optio aut delectus. Non vitae sint ad voluptatum dolore deleniti id et. Illum est debitis non porro sunt.', '2018-07-08 00:06:12'),
(65, 2, 'gtorp', 'leanna.jpeg', 'Doloribus veritatis corrupti sed omnis qui. Minima culpa pariatur magni sequi facilis. Provident rem qui doloremque libero minus nam.', '2018-04-22 06:44:45'),
(66, 1, 'chanel.stracke', 'ryan.jpeg', 'Quis ut nesciunt sunt neque. Corporis et et nobis officiis voluptate laboriosam consectetur. Quia eos aut ullam vel autem hic harum eos.', '2018-07-14 20:50:40'),
(67, 8, 'toy87', 'ryan.jpeg', 'Occaecati aut quis fugit repellat et quaerat totam. Aut et nostrum sed exercitationem. Rerum et suscipit qui quis debitis placeat. Facere blanditiis repellendus dicta repudiandae.', '2018-07-06 16:15:22'),
(68, 10, 'albina62', 'leanna.jpeg', 'Exercitationem et qui alias voluptatem nemo voluptates. Quo deleniti magni cupiditate quibusdam repellendus soluta. Et vel officia est pariatur ut.', '2018-06-06 23:56:25'),
(69, 1, 'jones.kris', 'ryan.jpeg', 'Aliquam voluptatem deleniti rerum reprehenderit ut minus quia. Aliquid doloribus sed aut impedit atque sequi odit. Sit autem omnis cupiditate.', '2018-07-30 11:33:48'),
(70, 8, 'hegmann.matilde', 'leanna.jpeg', 'Voluptatem in at ducimus qui impedit. Optio excepturi debitis autem similique. Nisi praesentium rerum ut ut et in placeat. Assumenda fugiat rerum qui nam.', '2018-05-08 01:07:45'),
(71, 4, 'kane.kemmer', 'leanna.jpeg', 'Expedita rerum distinctio quos praesentium mollitia rem repellat. Eos est commodi et ex.', '2018-03-11 15:29:33'),
(72, 1, 'tromp.oceane', 'ryan.jpeg', 'Ratione eum aut provident impedit dolores qui. Voluptatum ut repellendus perferendis omnis et. Eos voluptatibus eligendi voluptas.', '2018-07-18 00:03:12'),
(73, 2, 'yaltenwerth', 'leanna.jpeg', 'Et tempora quas eveniet inventore distinctio. At aut molestiae nihil et. Dolorum odio neque iure sequi optio. Voluptatem incidunt repellat voluptate id amet enim sit. Consequatur minus totam illo iure repellat eveniet sunt.', '2018-06-24 17:16:16'),
(74, 5, 'alverta52', 'ryan.jpeg', 'Sed nihil rem vitae exercitationem aliquam vitae est. Modi dolores dolorum voluptatem et in quae porro qui. Molestiae harum minus nulla iste. Magnam sit nisi sint non rerum alias eum et. Aut velit vel aperiam voluptas rerum reiciendis qui aperiam.', '2018-07-27 16:32:16'),
(75, 8, 'otis23', 'ryan.jpeg', 'Facilis enim non nam eveniet. Iure quidem inventore odio ut sed. Minima sed est nihil repudiandae. Laboriosam praesentium accusantium nulla cumque exercitationem ipsam veritatis mollitia.', '2018-05-04 12:14:07'),
(76, 3, 'stroman.alvah', 'leanna.jpeg', 'Rerum sunt voluptas iste dolor. Non incidunt veritatis cupiditate. Sit ea modi voluptatem sed sit.', '2018-07-18 07:28:57'),
(77, 4, 'zion33', 'ryan.jpeg', 'Autem soluta magnam quod ducimus. Qui amet numquam cupiditate vel laudantium rerum. Aperiam eveniet qui est et ipsam. Ea earum in corrupti in quisquam similique. Reprehenderit quos assumenda quas id qui optio.', '2018-05-05 02:51:58'),
(78, 7, 'kshlerin.elmer', 'leanna.jpeg', 'Eos optio ut illo voluptatem totam quas aspernatur. Et optio libero et hic laborum id aut natus. Ut temporibus tempore aut dicta blanditiis.', '2018-02-27 00:05:13'),
(79, 9, 'swalsh', 'ryan.jpeg', 'Animi vel quisquam dolorem quos animi. Id quia voluptatem aperiam illum vel. Amet exercitationem qui possimus distinctio. Pariatur molestias id magnam animi odio.', '2018-05-01 21:41:33'),
(80, 4, 'alexandrea69', 'ryan.jpeg', 'Voluptatibus assumenda cum veniam soluta. Esse iste neque nihil. Magnam temporibus quos expedita cum aspernatur.', '2018-05-16 02:24:33'),
(81, 1, 'omoen', 'leanna.jpeg', 'Et quo nihil ipsa mollitia ratione nihil harum. Quis ducimus voluptate sit cupiditate. Et nisi quis consectetur recusandae voluptas vel. Accusantium tempora sed excepturi.', '2018-02-27 01:29:18'),
(82, 1, 'kparker', 'ryan.jpeg', 'Eum officia unde temporibus officiis est deserunt. Rerum beatae aliquid explicabo molestias dolore officiis. Atque amet in vel facere et. Quisquam doloremque incidunt eius voluptatem atque aut et.', '2018-06-25 19:09:45'),
(83, 2, 'senger.sarah', 'leanna.jpeg', 'Hic dolores blanditiis sunt provident. Porro rem aut hic id. Facere dolore explicabo esse ratione consequatur ratione. Maxime et autem quos commodi id quaerat cupiditate dignissimos.', '2018-06-23 20:04:57'),
(84, 5, 'roy17', 'ryan.jpeg', 'Quae sed sint in odit dicta. Quo cupiditate optio quae repudiandae quis ut. Ullam sit quia dignissimos deleniti ut vel optio. Alias voluptatem omnis perspiciatis asperiores.', '2018-04-03 03:59:42'),
(85, 5, 'buckridge.wilson', 'leanna.jpeg', 'Dicta earum enim velit quam. Officiis ut rerum distinctio exercitationem. Saepe et aut velit eius laboriosam aperiam neque aliquam. Nisi nulla aut vel facilis tempore.', '2018-03-09 10:50:36'),
(86, 7, 'jast.darlene', 'ryan.jpeg', 'Et sed fugiat voluptas unde. Assumenda sint quia a est.', '2018-02-28 08:11:37'),
(87, 7, 'awitting', 'leanna.jpeg', 'Placeat ducimus recusandae aut quia accusantium qui temporibus. Nihil iusto aliquid a unde adipisci et. Quaerat eum quibusdam minus adipisci.', '2018-05-17 01:29:10'),
(88, 3, 'reina.rowe', 'leanna.jpeg', 'Labore quia voluptatibus omnis rerum asperiores perspiciatis sit. Alias nisi cupiditate rerum. Maiores sint nihil consequatur quidem.', '2018-05-11 02:18:44'),
(89, 2, 'halvorson.ubaldo', 'ryan.jpeg', 'Asperiores atque qui minima consequatur pariatur itaque. Deserunt labore eius aspernatur odio voluptas. Recusandae explicabo consectetur esse illum nam.', '2018-03-18 12:51:48'),
(90, 8, 'tstark', 'ryan.jpeg', 'Corrupti tempore omnis quod quas amet ex. Quaerat ducimus nobis cumque earum. Quas enim neque aliquam perferendis. Ducimus non quia rerum delectus qui aspernatur quis.', '2018-06-02 05:59:31'),
(91, 6, 'colin28', 'leanna.jpeg', 'Reiciendis libero delectus et et voluptas eveniet ut excepturi. Fugit quas assumenda animi. Tempora ullam earum accusantium at ad quasi.', '2018-02-20 05:34:41'),
(92, 1, 'bianka99', 'ryan.jpeg', 'Omnis rerum enim voluptate aut. Velit molestiae numquam facere dolore maxime quasi molestiae. Voluptatem iure eum corporis maxime distinctio velit ut aut.', '2018-03-18 10:11:12'),
(93, 4, 'ybraun', 'leanna.jpeg', 'Fugiat non minus dicta nobis eveniet dicta. Quia dolorem consequatur itaque est labore molestiae. Officia inventore sit voluptates reiciendis libero.', '2018-02-25 21:15:23'),
(94, 5, 'jaleel.hauck', 'leanna.jpeg', 'Nostrum deleniti dicta placeat dolorum laborum. Alias iure consequatur vel. Illum ipsum laboriosam placeat accusantium ut corrupti.', '2018-04-29 02:48:41'),
(95, 8, 'zoe.wisozk', 'ryan.jpeg', 'Esse enim sunt nemo laborum corporis id. Rerum mollitia et quisquam voluptatem. Provident accusantium rerum error nihil.', '2018-05-19 10:55:32'),
(96, 9, 'johns.cara', 'leanna.jpeg', 'Quae voluptas occaecati non ut similique. Commodi sit qui molestias. Reprehenderit voluptatum qui labore molestias.', '2018-06-01 09:47:28'),
(97, 2, 'ieffertz', 'ryan.jpeg', 'Deleniti qui laboriosam dolorum. Qui ut non accusamus et animi qui. Enim et sit ipsa odio consequatur.', '2018-02-07 13:17:52'),
(98, 6, 'ledner.trey', 'ryan.jpeg', 'Itaque expedita et ullam suscipit minus. Debitis pariatur quia totam odio sed aspernatur. Voluptas veniam tempore sequi assumenda esse ut architecto. Laborum voluptate iusto optio possimus laboriosam quis rerum sapiente.', '2018-05-29 06:48:11'),
(99, 2, 'opouros', 'ryan.jpeg', 'Maiores aperiam deserunt dolore. Quo esse est qui nulla nisi. Tempora aut aut quam occaecati. Quas et voluptatum voluptates eaque et ab.', '2018-06-29 08:47:54'),
(100, 6, 'ibotsford', 'leanna.jpeg', 'Nisi labore molestias sequi quas ea et corporis temporibus. Quisquam sed a ut nisi. Illo iure enim quo occaecati beatae.', '2018-05-06 03:04:25');

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
(2, 'Morar'),
(3, 'Schmeler'),
(4, 'Reynolds'),
(5, 'Lindgren'),
(6, 'Ferry'),
(7, 'Conn'),
(8, 'Kemmer'),
(9, 'Muller'),
(10, 'Doyle'),
(11, 'Schmeler');

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
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `genus`
--
ALTER TABLE `genus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `genus_note`
--
ALTER TABLE `genus_note`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT pour la table `sub_family`
--
ALTER TABLE `sub_family`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
