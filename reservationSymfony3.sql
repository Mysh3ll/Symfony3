-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mer 21 Décembre 2016 à 20:50
-- Version du serveur :  5.5.53-0+deb8u1
-- Version de PHP :  5.6.27-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `reservationSymfony3`
--

-- --------------------------------------------------------

--
-- Structure de la table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `titreEvent` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dateEvent` date DEFAULT NULL,
  `pathImage` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
`idEvent` int(11) NOT NULL,
  `idType` int(11) DEFAULT NULL,
  `idSalle` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `event`
--

INSERT INTO `event` (`titreEvent`, `dateEvent`, `pathImage`, `idEvent`, `idType`, `idSalle`, `updated_at`) VALUES
('AGE TENDRE "NOUVELLE TOUR', '2017-02-04', '582f1dbf405ae.gif', 16, 2, 3, '2016-11-18 16:26:55'),
('ANDRE RIEU - TOUR 2017', '2017-03-31', '582f1e582503c.gif', 17, 10, 1, '2016-11-18 16:29:28'),
('ARIANA GRANDE', '2017-06-07', '582f1e8e3b30f.gif', 18, 2, 1, '2016-11-18 16:30:22'),
('ARNAUD DUCRET VOUS FAIT P', '2016-11-30', '582f1ebbdd18e.gif', 19, 1, 3, '2016-11-18 16:31:07'),
('BIRDY NAM NAM', '2017-04-01', '582f1f16b2421.gif', 20, 2, 1, '2016-11-18 16:32:38'),
('LES BODIN''S GRANDEUR NATU', '2017-10-24', '582f1f86c4991.gif', 21, 1, 1, '2016-11-18 16:34:30'),
('LES CHEVALIERS DU FIEL', '2017-01-19', '582f1f9db9a3f.gif', 22, 1, 1, '2016-11-18 16:34:53'),
('CHRISTOPHE MAE', '2016-11-18', '582f2f2099a57.gif', 23, 2, 3, '2016-11-18 17:41:04'),
('VAREKAI', '2016-12-07', '582f1ff54411b.gif', 24, 11, 1, '2016-11-18 16:36:21'),
('COLDPLAY', '2017-07-18', '582f2017ad0d5.gif', 25, 2, 1, '2016-11-18 16:36:55'),
('DE PALMAS', '2017-01-28', '582f20651fd6c.gif', 26, 2, 1, '2016-11-18 16:38:13'),
('DEPECHE MODE', '2017-07-01', '582f2086b47a5.gif', 27, 2, 1, '2016-11-18 16:38:46'),
('DRAKE', '2017-03-12', '582f20a61e1ef.gif', 28, 2, 1, '2016-11-18 16:39:18'),
('ELIE SEMOUN A PARTAGER', '2016-12-16', '582f20bfe9f1c.gif', 29, 1, 1, '2016-11-18 16:39:43'),
('ERIC ANTOINE - MAGIC DELI', '2016-11-24', '582f210542a5c.gif', 30, 1, 1, '2016-11-18 16:40:53'),
('JEAN-MICHEL JARRE', '2016-12-23', '582f21218f6a8.gif', 31, 2, 1, '2016-11-18 16:41:21'),
('KEEN''V', '2016-12-31', '582f2140997a2.gif', 32, 2, 1, '2016-11-18 16:41:52'),
('KENDJI GIRAC', '2017-02-16', '582f219b3fbc4.gif', 33, 2, 1, '2016-11-18 16:43:23'),
('KEV & GAD', '2017-04-22', '582f21c569eb3.gif', 34, 1, 1, '2016-11-18 16:44:05'),
('KIDS UNITED', '2016-12-03', '582f21e95196a.gif', 35, 2, 1, '2016-11-18 16:44:41'),
('LAURENT GERRA', '2017-05-12', '582f22056dc39.gif', 36, 1, 1, '2016-11-18 16:45:09'),
('LINDSEY STIRLING', '2017-03-18', '582f225b5e592.gif', 37, 2, 1, '2016-11-18 16:46:35'),
('MAITRE GIMS', '2017-06-24', '582f227e3ad3d.gif', 38, 2, 1, '2016-11-18 16:47:10'),
('MESSMER', '2017-05-20', '582f229f90915.gif', 39, 1, 1, '2016-11-18 16:47:43'),
('MICHEL POLNAREFF', '2017-08-04', '582f22be38719.gif', 40, 2, 1, '2016-11-18 16:48:14'),
('GRAND SHOW DE CATCH', '2017-01-25', '582f2322bf39a.gif', 41, 3, 1, '2016-11-18 16:49:54'),
('REVOLUTION LEAGUE - CENTR', '2017-03-30', '582f235404b88.gif', 42, 3, 1, '2016-11-18 16:50:44'),
('J''AIME BEAUCOUP CE QUE VO', '2017-04-28', '582f237e6521f.gif', 43, 5, 1, '2016-11-18 16:51:26'),
('LA GUERRE DES SEXES', '2017-09-02', '582f239e3eb14.gif', 44, 5, 1, '2016-11-18 16:51:58'),
('PARCOURS AVENTURE', '2017-05-24', '582f23e075ddc.gif', 45, 6, 1, '2016-11-18 16:53:04'),
('OCEANOPOLIS', '2017-08-12', '582f240e4bd55.gif', 46, 6, 1, '2016-11-18 16:53:50'),
('15e FESTIVAL INTERNATIONA', '2017-12-01', '582f243e8c44f.gif', 47, 7, 1, '2016-11-18 16:54:38'),
('BLUES SUR SEINE : BLACK B', '2017-10-07', '582f248385847.gif', 48, 7, 1, '2016-11-18 16:55:47');

-- --------------------------------------------------------

--
-- Structure de la table `participer`
--

CREATE TABLE IF NOT EXISTS `participer` (
  `id` int(11) NOT NULL,
  `numPlace` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `idEvent` int(11) NOT NULL,
  `html_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT '0',
  `codeUnique` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `participer`
--

INSERT INTO `participer` (`id`, `numPlace`, `idEvent`, `html_id`, `price`, `enabled`, `codeUnique`) VALUES
(1, '1', 21, '1_1', '100', 0, 'uKVBoVBC0pLsI8540bel-e27'),
(1, '10', 21, '1_10', '100', 0, 'R5LGjl3fgEOi866gnqnwmMw_'),
(1, '10', 42, '1_10', '100', 0, ''),
(5, '10', 16, '1_17', '100', 0, ''),
(1, '100', 22, '4_16', '100', 0, 'AqXjf-DxmcwC'),
(1, '100', 46, '4_16', '100', 0, 'b8Gy9F2HWisxtjTVZIflRhxI'),
(1, '11', 29, '1_11', '100', 0, ''),
(5, '11', 38, '1_11', '100', 0, ''),
(1, '12', 31, '1_12', '100', 0, ''),
(1, '12', 42, '1_12', '100', 0, ''),
(5, '12', 38, '1_12', '100', 0, ''),
(1, '123', 26, '5_15', '100', 0, ''),
(1, '123', 36, '5_15', '100', 1, 'hvyhCbcf7sgK0JQtghiOnvST'),
(1, '125', 39, '5_17', '100', 0, 'k1lM_yvNfwpl3ZqiUxZrrwQF'),
(1, '13', 29, '1_13', '100', 0, ''),
(1, '13', 31, '1_13', '100', 0, ''),
(1, '13', 34, '1_13', '100', 0, ''),
(5, '13', 38, '1_13', '100', 0, ''),
(1, '14', 34, '1_14', '100', 0, ''),
(1, '14', 41, '1_14', '100', 0, ''),
(1, '14', 42, '1_14', '100', 0, ''),
(5, '14', 38, '1_14', '100', 0, ''),
(1, '145', 22, '6_13', '100', 0, ''),
(1, '145', 34, '6_13', '100', 0, ''),
(1, '146', 22, '6_14', '100', 0, ''),
(1, '147', 26, '6_15', '100', 0, ''),
(1, '147', 33, '6_15', '100', 0, ''),
(1, '148', 33, '6_16', '100', 0, ''),
(1, '149', 34, '6_17', '100', 0, ''),
(1, '15', 33, '1_15', '100', 0, ''),
(1, '15', 34, '1_15', '100', 0, ''),
(1, '15', 42, '1_15', '100', 0, ''),
(1, '16', 32, '1_16', '100', 0, ''),
(1, '16', 33, '1_16', '100', 0, ''),
(1, '16', 34, '1_16', '100', 0, ''),
(1, '16', 36, '1_16', '100', 0, ''),
(1, '16', 39, '1_16', '100', 0, ''),
(1, '16', 41, '1_16', '100', 0, ''),
(1, '16', 42, '1_16', '100', 0, ''),
(1, '16', 46, '1_16', '100', 0, ''),
(5, '16', 17, '1_16', '100', 0, ''),
(1, '160', 22, '6_30', '100', 0, ''),
(1, '169', 31, '7_13', '40', 0, ''),
(1, '169', 33, '7_13', '40', 0, ''),
(1, '17', 29, '1_17', '100', 0, ''),
(1, '17', 32, '1_17', '100', 0, ''),
(1, '17', 33, '1_17', '100', 0, ''),
(1, '17', 36, '1_17', '100', 0, ''),
(1, '17', 39, '1_17', '100', 0, ''),
(1, '17', 41, '1_17', '100', 0, ''),
(1, '170', 31, '7_14', '40', 0, ''),
(1, '170', 33, '7_14', '40', 0, ''),
(1, '171', 31, '7_15', '40', 0, ''),
(1, '171', 33, '7_15', '40', 0, ''),
(1, '172', 31, '7_16', '40', 0, ''),
(1, '172', 34, '7_16', '40', 0, ''),
(1, '172', 36, '7_16', '40', 0, ''),
(1, '172', 41, '7_16', '40', 0, ''),
(5, '172', 17, '7_16', '40', 0, ''),
(1, '173', 31, '7_17', '40', 0, ''),
(1, '173', 34, '7_17', '40', 0, ''),
(5, '173', 17, '7_17', '40', 0, ''),
(1, '174', 31, '7_18', '40', 0, ''),
(1, '174', 34, '7_18', '40', 0, ''),
(1, '174', 36, '7_18', '40', 0, ''),
(1, '175', 31, '7_19', '40', 0, ''),
(1, '175', 34, '7_19', '40', 0, ''),
(1, '175', 36, '7_19', '40', 0, ''),
(1, '176', 36, '7_20', '40', 0, ''),
(1, '178', 26, '7_24', '40', 0, ''),
(1, '18', 22, '1_18', '100', 0, ''),
(1, '18', 31, '1_18', '100', 0, ''),
(1, '18', 33, '1_18', '100', 0, ''),
(1, '18', 36, '1_18', '100', 0, ''),
(1, '18', 39, '1_18', '100', 0, ''),
(1, '19', 22, '1_19', '100', 0, ''),
(1, '19', 26, '1_19', '100', 0, ''),
(1, '193', 31, '8_13', '40', 0, ''),
(1, '194', 42, '8_14', '40', 0, ''),
(1, '195', 42, '8_15', '40', 0, ''),
(1, '196', 32, '8_16', '40', 0, ''),
(1, '196', 42, '8_16', '40', 0, ''),
(1, '197', 39, '8_17', '40', 0, 'b5lxAPUtTHxo8u9g6lOg9yuG'),
(1, '197', 42, '8_17', '40', 0, 'aWF10FhW4NiI8ZjTsByZeOEI'),
(1, '198', 39, '8_18', '40', 0, 'Jwt1VGHXB129gvHv6fzvGNq0'),
(1, '2', 21, '1_2', '100', 0, 'ehTQ6CGzHzluPDtJQAnAhIJV'),
(1, '20', 26, '1_20', '100', 0, ''),
(1, '216', 42, '9_10', '40', 0, ''),
(1, '22', 22, '1_22', '100', 0, ''),
(1, '22', 45, '1_22', '100', 0, ''),
(1, '23', 22, '1_23', '100', 0, ''),
(1, '24', 22, '1_24', '100', 0, ''),
(1, '240', 34, '10_10', '40', 1, 'vTkwGiHTQbb3vygrv3KAK-yr'),
(1, '242', 34, '10_14', '40', 0, ''),
(1, '243', 34, '10_15', '40', 0, ''),
(1, '244', 34, '10_16', '40', 0, ''),
(1, '245', 34, '10_17', '40', 0, ''),
(1, '267', 45, '11_15', '40', 0, ''),
(1, '268', 22, '11_16', '40', 0, ''),
(1, '268', 45, '11_16', '40', 0, ''),
(1, '269', 42, '11_17', '40', 0, ''),
(1, '270', 22, '11_18', '40', 0, ''),
(1, '270', 42, '11_18', '40', 0, ''),
(1, '271', 39, '11_19', '40', 0, ''),
(1, '272', 39, '11_20', '40', 0, ''),
(1, '289', 46, '12_13', '40', 0, ''),
(1, '290', 46, '12_14', '40', 0, ''),
(1, '291', 46, '12_15', '40', 0, ''),
(1, '292', 28, '12_16', '40', 0, ''),
(1, '293', 28, '12_17', '40', 0, ''),
(1, '293', 44, '12_17', '40', 0, ''),
(1, '294', 28, '12_18', '40', 0, ''),
(1, '294', 44, '12_18', '40', 0, ''),
(1, '295', 31, '12_19', '40', 0, ''),
(1, '3', 21, '1_3', '100', 0, 'LuAMraXlXkSZ0e59rfkohE1b'),
(5, '343', 39, '14_19', '40', 0, ''),
(5, '344', 39, '14_20', '40', 0, ''),
(1, '346', 26, '14_24', '40', 0, ''),
(1, '347', 22, '14_25', '40', 0, ''),
(1, '348', 22, '14_26', '40', 0, ''),
(1, '352', 22, '14_30', '40', 0, ''),
(1, '363', 32, '15_15', '40', 0, ''),
(1, '364', 41, '15_16', '40', 0, ''),
(1, '365', 41, '15_17', '40', 0, ''),
(1, '388', 22, '16_16', '40', 0, ''),
(1, '4', 21, '1_4', '100', 0, 'GByt9w9FCaJX6inrCnqsUUG2'),
(1, '411', 31, '17_13', '20', 0, ''),
(1, '412', 32, '17_14', '20', 0, 'MnM1_QRE8UACv-SNo0zZBGGS'),
(1, '414', 33, '17_16', '20', 0, ''),
(1, '415', 47, '17_17', '20', 0, ''),
(1, '416', 34, '17_18', '20', 0, 'xfmE_EdRK89J'),
(1, '416', 47, '17_18', '20', 0, ''),
(1, '417', 34, '17_19', '20', 0, '4r6fmpZMJyZQ'),
(5, '417', 33, '17_19', '20', 0, ''),
(5, '418', 33, '17_20', '20', 0, ''),
(1, '428', 22, '17_32', '20', 0, ''),
(1, '428', 26, '17_32', '20', 0, ''),
(1, '442', 41, '18_16', '20', 0, ''),
(1, '443', 41, '18_17', '20', 0, ''),
(1, '45', 16, '3_16', '100', 0, 'OcEv35Ty_naRPdGmn0vWxnkc'),
(1, '45', 39, '2_13', '100', 0, ''),
(1, '46', 16, '3_17', '100', 0, 'FkKt1t9MbbyVIZkSYVgmCVjq'),
(1, '46', 39, '2_14', '100', 0, ''),
(1, '471', 41, '19_17', '20', 0, ''),
(1, '48', 34, '2_16', '100', 0, ''),
(1, '49', 33, '2_17', '100', 0, ''),
(1, '49', 34, '2_17', '100', 0, ''),
(1, '5', 21, '1_5', '100', 0, 'UVjqCfUhmDgM2PjE2xbs8wfO'),
(1, '50', 33, '2_18', '100', 0, ''),
(1, '50', 34, '2_18', '100', 0, ''),
(1, '500', 43, '20_18', '20', 0, ''),
(1, '519', 17, '21_8', '20', 0, ''),
(1, '520', 17, '21_9', '20', 0, ''),
(1, '521', 17, '21_10', '20', 0, ''),
(1, '527', 43, '21_18', '20', 0, ''),
(1, '553', 43, '22_18', '20', 0, ''),
(1, '571', 31, '23_8', '20', 0, ''),
(1, '572', 31, '23_9', '20', 0, ''),
(5, '578', 36, '23_17', '20', 0, ''),
(5, '579', 36, '23_18', '20', 0, ''),
(1, '590', 22, '23_31', '20', 0, ''),
(1, '6', 21, '1_6', '100', 0, 'Nvhc6S1-7Yz2Vk38k09QMOcR'),
(1, '6', 23, '1_14', '100', 0, ''),
(1, '646', 48, '26_17', '20', 0, ''),
(5, '671', 29, '28_8', '20', 0, ''),
(5, '672', 29, '28_9', '20', 0, ''),
(5, '673', 29, '28_10', '20', 0, ''),
(5, '688', 38, '29_13', '20', 0, ''),
(5, '689', 38, '29_14', '20', 0, ''),
(1, '7', 21, '1_7', '100', 0, 'YPj81UpAWj_D13q5vq5LpBhI'),
(1, '7', 23, '1_15', '100', 0, ''),
(1, '75', 22, '3_15', '100', 0, ''),
(1, '75', 34, '3_15', '100', 0, ''),
(1, '79', 34, '3_19', '100', 0, ''),
(1, '8', 21, '1_8', '100', 0, 'PKvudpNaGP7qMcEnLZq4eQx4'),
(1, '8', 23, '1_16', '100', 0, ''),
(1, '8', 29, '1_8', '100', 0, ''),
(1, '80', 34, '3_20', '100', 0, ''),
(1, '9', 21, '1_9', '100', 0, 'PmjyT34nwaIewjDHaCPNf2iV'),
(5, '9', 16, '1_16', '100', 0, ''),
(1, '99', 26, '4_15', '100', 0, '');

-- --------------------------------------------------------

--
-- Structure de la table `personne`
--

CREATE TABLE IF NOT EXISTS `personne` (
`id` int(11) NOT NULL,
  `username` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(180) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pathImage` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `personne`
--

INSERT INTO `personne` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`, `nom`, `prenom`, `pathImage`, `updated_at`) VALUES
(1, 'Mysh3ll', 'mysh3ll', 'peacefulloijkn@gmail.com', 'peacefulloijkn@gmail.com', 1, 'tit0s77aikg0wwg444wcwsog80ookss', '$2y$13$COVsDMuzFiwGJsnn8Hl0IO/Fhb7IDrAr6tRHPEvIXc6.lHtS1lRKK', '2016-12-21 17:20:21', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:10:"ROLE_ADMIN";}', 0, NULL, 'Pompas', 'Michel', '582e3d7d0ebc4.png', '2016-11-18 00:30:05'),
(5, 'toto', 'toto', 'toto123456789@yopmail.com', 'toto123456789@yopmail.com', 1, 'h1algfxvgo0g0g888wgsk40g4sssg4w', '$2y$13$N/vKFSBwH7j58D/7h3Nm2OQ3fleOaBPc1NiQLXew74rvvd6NuC1o.', '2016-12-17 12:10:47', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 'titi', 'tata', '13143b91530cf0343a0b2a030141c5bb.jpeg', NULL),
(6, 'test', 'test', 'test1@yopmail.com', 'test1@yopmail.com', 1, '2dfan12ufz9cw8c0c00k0wcwcsscsk0', '$2y$13$TlHjxxP5.u8OBGSUyGgO7uYDdDsbHNncFRNxSLFiqDhxc77wWqWGS', '2016-11-13 14:36:02', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 'test1', 'test1', '582874d255412.jpg', '2016-11-13 15:12:34'),
(7, 'titi', 'titi', 'titi@yopmail.com', 'titi@yopmail.com', 1, 'c54hibb6f7k0ws4g4c4ccw4csk0so00', '$2y$13$UGd5XRw/PfwBpU3mN3ufnOvL.po64UVorJAeS/I3giA7UUStd4n/m', '2016-11-17 17:01:01', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 'fdvfd', 'fv', NULL, NULL),
(8, 'test1', 'test1', 'tototata65@yopmail.com', 'tototata65@yopmail.com', 0, 'alc5mr3nvmoggkwggg8kcgcs4wsoo4o', '$2y$13$YBBZne8tto07L1Q/wA/ttuZeKMB90Es4311U7oS6dQcA0r0NelCGW', NULL, 0, 0, NULL, 'SyhBQs68tBmy2Xyb3usAXAU-01kqzX7xivY3uhFYFmY', NULL, 'a:0:{}', 0, NULL, 'test', 'test', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `salle`
--

CREATE TABLE IF NOT EXISTS `salle` (
  `nbPlaces` int(11) NOT NULL,
  `nomSalle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
`idSalle` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `salle`
--

INSERT INTO `salle` (`nbPlaces`, `nomSalle`, `idSalle`) VALUES
(698, 'Principale', 1),
(272, 'Secondaire', 3);

-- --------------------------------------------------------

--
-- Structure de la table `typeevent`
--

CREATE TABLE IF NOT EXISTS `typeevent` (
  `libelleType` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
`idType` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `typeevent`
--

INSERT INTO `typeevent` (`libelleType`, `idType`) VALUES
('Spectacle', 1),
('Concert', 2),
('Sport', 3),
('Théâtre', 5),
('Parc', 6),
('Festival', 7),
('Expo/Musée', 8),
('Salon', 9),
('Opéra', 10),
('Cirque', 11),
('Tourisme', 12);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `event`
--
ALTER TABLE `event`
 ADD PRIMARY KEY (`idEvent`), ADD KEY `FK_Event_idType` (`idType`), ADD KEY `FK_Event_idSalle` (`idSalle`);

--
-- Index pour la table `participer`
--
ALTER TABLE `participer`
 ADD PRIMARY KEY (`numPlace`,`id`,`idEvent`), ADD KEY `FK_Participer_id` (`id`), ADD KEY `IDX_EDBE16F82C6A49BA` (`idEvent`);

--
-- Index pour la table `personne`
--
ALTER TABLE `personne`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `UNIQ_FCEC9EF92FC23A8` (`username_canonical`), ADD UNIQUE KEY `UNIQ_FCEC9EFA0D96FBF` (`email_canonical`), ADD UNIQUE KEY `UNIQ_FCEC9EFC05FB297` (`confirmation_token`);

--
-- Index pour la table `salle`
--
ALTER TABLE `salle`
 ADD PRIMARY KEY (`idSalle`);

--
-- Index pour la table `typeevent`
--
ALTER TABLE `typeevent`
 ADD PRIMARY KEY (`idType`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `event`
--
ALTER TABLE `event`
MODIFY `idEvent` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT pour la table `personne`
--
ALTER TABLE `personne`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `salle`
--
ALTER TABLE `salle`
MODIFY `idSalle` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `typeevent`
--
ALTER TABLE `typeevent`
MODIFY `idType` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `event`
--
ALTER TABLE `event`
ADD CONSTRAINT `FK_3BAE0AA759533D41` FOREIGN KEY (`idSalle`) REFERENCES `salle` (`idSalle`),
ADD CONSTRAINT `FK_3BAE0AA7FF2309B7` FOREIGN KEY (`idType`) REFERENCES `typeevent` (`idType`);

--
-- Contraintes pour la table `participer`
--
ALTER TABLE `participer`
ADD CONSTRAINT `FK_EDBE16F82C6A49BA` FOREIGN KEY (`idEvent`) REFERENCES `event` (`idEvent`),
ADD CONSTRAINT `FK_EDBE16F8BF396750` FOREIGN KEY (`id`) REFERENCES `personne` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
