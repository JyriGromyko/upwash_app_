-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 08, 2022 at 12:05 PM
-- Server version: 5.7.40
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `upwash_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `from` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `secondname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `registrar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adress` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `time_d` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time_m` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `car_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `main_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upsells` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci,
  `cupon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked` int(11) NOT NULL DEFAULT '0',
  `check1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `check2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `check3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `check4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `check5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `check6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `check7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `check8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `check9` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `param1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `param2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `param3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `param4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `price1` int(11) DEFAULT '0',
  `price2` int(11) DEFAULT '0',
  `price3` int(11) DEFAULT '0',
  `price4` int(11) DEFAULT '0',
  `priceCheck1` int(11) DEFAULT '0',
  `priceCheck2` int(11) DEFAULT '0',
  `priceCheck3` int(11) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `additionalPrice` double(8,2) NOT NULL DEFAULT '0.00',
  `postal_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `from`, `name`, `secondname`, `email`, `phone`, `registrar`, `adress`, `time_d`, `time_m`, `time`, `car_type`, `order_type`, `main_type`, `upsells`, `price`, `comment`, `cupon`, `checked`, `check1`, `check2`, `check3`, `check4`, `check5`, `check6`, `check7`, `check8`, `check9`, `param1`, `param2`, `param3`, `param4`, `price1`, `price2`, `price3`, `price4`, `priceCheck1`, `priceCheck2`, `priceCheck3`, `created_at`, `updated_at`, `additionalPrice`, `postal_code`) VALUES
(50, 30, 'Jyri', 'Gromyko', 'tuomas.lehtovirta@icloud.com', '435345445455', '1212', 'Punavuori Health Club, Pursimiehenkatu, Helsinki', '2', '8', '09:30-10:00', 'Sedan', 'standard', 'Ulkopesu', '0', 39, NULL, NULL, 29, 'false', 'false', 'false', '0', '0', '0', '0', '0', '0', 'true', 'false', 'false', 'false', 39, 0, 0, 0, 10, 20, 39, '2022-08-02 07:16:44', '2022-08-02 07:17:05', 0.00, '0'),
(51, 31, '1', '1', '1', '1', '1', 'Engelinaukio 1, 00150 Helsinki, Finland', '2', '8', '12:30-13:00', 'Sedan', 'standard', 'Ulkopesu', '0', 138, NULL, NULL, 29, 'false', 'false', 'false', '0', '0', '0', '0', '0', '0', 'true', 'false', 'false', 'true', 39, 0, 0, 99, 10, 20, 39, '2022-08-02 10:43:27', '2022-08-02 11:00:28', 0.00, '0'),
(52, 32, NULL, NULL, NULL, NULL, '12121', 'Äestäjäntie, Helsinki', '2', '8', '15:30-16:00', 'Korkea', 'standard', 'Molemmat', '0', 319, NULL, NULL, 29, 'false', 'false', 'false', '0', '0', '0', '0', '0', '0', 'false', 'false', 'true', 'false', 0, 0, 299, 0, 10, 20, 39, '2022-08-02 11:30:16', '2022-08-04 10:41:31', 0.00, '0'),
(53, NULL, 'Jyri', 'Gromyko', 'jyri@gromi.fi', '0449782028', '123 NRO', 'Äestäjäntie, Helsinki', '2', '8', '16:00-16:30', 'Sedan', 'standard', 'Ulkopesu', '0', 218, NULL, NULL, 0, 'false', 'false', 'false', '0', '0', '0', '0', '0', '0', 'false', 'false', 'true', 'true', 0, 0, 119, 99, 10, 20, 39, '2022-08-02 13:41:11', '2022-08-02 13:41:11', 0.00, '0'),
(54, NULL, 'Jyri Gromyko', 'Gromyko', 'jyri@gromi.fi', '449782028', 'Leldl', 'Harvarvägen 6, 00390 Helsingfors, Finland', '4', '8', '13:00-13:30', 'Korkea', 'standard', 'Molemmat', '0', 329, NULL, NULL, 0, 'true', 'false', 'false', '0', '0', '0', '0', '0', '0', 'false', 'false', 'true', 'false', 0, 0, 299, 0, 10, 20, 39, '2022-08-04 10:36:25', '2022-08-04 10:36:25', 0.00, '0'),
(55, NULL, 'Jyri', 'Gromyko', 'jyri.gromyko2002@gmail.com', '0449782028', '123 NRO', 'Betonimiehenkuja 5 C, 02150 Espoo, Finland', '4', '8', '13:30-14:00', 'Korkea', 'standard', 'Ulkopesu', '0', 89, NULL, NULL, 0, 'false', 'false', 'false', '0', '0', '0', '0', '0', '0', 'false', 'true', 'false', 'false', 0, 69, 0, 0, 10, 20, 39, '2022-08-04 10:38:56', '2022-08-04 10:38:56', 0.00, '0'),
(56, 33, 'Jyri', 'Gromyko', 'jyri.gromyko3003+1@gmail.com', '0449782028', '12121q2', 'Rautatientori, Helsinki', '4', '8', '14:00-14:30', 'Sedan', 'standard', 'Ulkopesu', '0', 109, NULL, NULL, 0, 'true', 'false', 'false', '0', '0', '0', '0', '0', '0', 'false', 'false', 'false', 'true', 0, 0, 0, 99, 10, 20, 39, '2022-08-04 10:42:58', '2022-08-04 10:42:58', 0.00, '0'),
(57, NULL, 'Jyri', 'Grmk', 'jyri.gromyko3003+1@gmail.com', '0449782028', '123 NRO', 'Äestäjäntie, Helsinki', '5', '8', '13:30-15:00', 'Sedan', 'standard', 'Ulkopesu', '0', 108, NULL, NULL, 0, 'false', 'false', 'false', '0', '0', '0', '0', '0', '0', 'true', 'true', 'false', 'false', 39, 69, 0, 0, 10, 20, 39, '2022-08-05 15:48:49', '2022-08-05 15:48:49', 0.00, '0'),
(58, NULL, 'Tuomas', 'Lehtovirta', 'Tuomas.lehtovirta@icloud.com', '0400236184', 'Fvvv', 'McDonald\'s Helsinki Herttoniemi, Laivalahdenkatu, Helsinki', '5', '8', '09:00-11:00', 'Sedan', 'standard', 'Ulkopesu', '0', 168, NULL, NULL, 0, 'true', 'false', 'false', '0', '0', '0', '0', '0', '0', 'true', 'false', 'true', 'false', 39, 0, 119, 0, 10, 20, 39, '2022-08-05 18:15:06', '2022-08-05 18:15:06', 0.00, '00810'),
(59, 34, 'Jyri', 'Gromyko', 'jyri.gromyko3003+2@gmail.com', '0449782028', '123', 'Äestäjäntie, Helsinki', '6', '8', '14:00-14:30', 'Sedan', 'standard', 'Ulkopesu', '0', 39, NULL, NULL, 29, 'false', 'false', 'false', '0', '0', '0', '0', '0', '0', 'true', 'false', 'false', 'false', 39, 0, 0, 0, 10, 20, 39, '2022-08-06 09:21:01', '2022-08-17 07:03:37', 0.00, '00390'),
(60, 34, 'Jyri', 'Gromyko', 'jyri.gromyko3003+2@gmail.com', '0449782028', '123 NRO', 'Äestäjäntie, Helsinki', '6', '8', '14:30-15:00', 'Sedan', 'standard', 'Ulkopesu', '0', 101, NULL, NULL, 0, 'false', 'false', 'false', '0', '0', '0', '0', '0', '0', 'false', 'false', 'false', 'true', 0, 0, 0, 99, 10, 20, 39, '2022-08-06 09:22:59', '2022-08-06 09:22:59', 1.50, '00390'),
(61, NULL, 'Jyri', 'Gromyko', 'jyri.gromyko3003+1@gmail.com', '0449782028', '123 NRO', 'Kirkkotori 5, 06100 Porvoo, Finland', '6', '8', '15:30-16:00', 'Sedan', 'standard', 'Ulkopesu', '0', 39, NULL, NULL, 0, 'false', 'false', 'false', '0', '0', '0', '0', '0', '0', 'true', 'false', 'false', 'false', 39, 0, 0, 0, 10, 20, 39, '2022-08-06 11:51:37', '2022-08-06 11:51:37', 0.00, '06100'),
(62, 29, 'none', 'none', 'jyri.gromykos@gmail.com', 'none', '111111', 'Kirkkotori 7, 06100 Porvoo, Finland', '6', '8', '10:00-11:00', 'Sedan', 'standard', 'Ulkopesu', '0', 69, NULL, NULL, 0, 'false', 'false', 'false', '0', '0', '0', '0', '0', '0', 'false', 'true', 'false', 'false', 0, 69, 0, 0, 10, 20, 39, '2022-08-06 11:53:52', '2022-08-06 11:53:52', 0.00, '06100'),
(63, 36, 'Jyri', 'Gromyko', 'jyri.gromyko3003+1123@gmail.com', '0449782028', '123 NRO', 'Harvarvägen 2, 00390 Helsingfors, Finland', '6', '8', '09:00-09:30', 'Sedan', 'standard', 'Ulkopesu', '0', 49, 'Tereve', NULL, 0, 'true', 'false', 'false', '0', '0', '0', '0', '0', '0', 'true', 'false', 'false', 'false', 39, 0, 0, 0, 10, 20, 39, '2022-08-06 12:06:07', '2022-08-06 12:06:07', 0.00, '00390'),
(64, 36, 'Jyri', 'Gromyko', 'jyri.gromyko3003+1123@gmail.com', '0449782028', '123 NRO', 'Harvarvägen 2, 00390 Helsingfors, Finland', '6', '8', '09:00-09:30', 'Sedan', 'standard', 'Ulkopesu', '0', 49, 'Tereve', NULL, 0, 'true', 'false', 'false', '0', '0', '0', '0', '0', '0', 'true', 'false', 'false', 'false', 39, 0, 0, 0, 10, 20, 39, '2022-08-06 12:06:08', '2022-08-06 12:06:08', 0.00, '00390'),
(65, NULL, 'Jyri', 'Gromyko', 'jyri@gromi.fi', '0449782028', '123 NRO', 'Äestäjäntie 2, Helsinki', '6', '8', '11:00-11:30', 'Sedan', 'standard', 'Ulkopesu', '0', 49, NULL, NULL, 0, 'true', 'false', 'false', '0', '0', '0', '0', '0', '0', 'true', 'false', 'false', 'false', 39, 0, 0, 0, 10, 20, 39, '2022-08-06 12:09:34', '2022-08-06 12:09:34', 0.00, '00390'),
(66, 47, 'Jyri', 'Gromyko', 'jyri.gromyko3003+11203@gmail.com', '0449782028', '123 NRO', 'Harvarvägen 6, 00390 Helsingfors, Finland', '8', '8', '09:00-10:30', 'Sedan', 'standard', 'Ulkopesu', '0', 39, NULL, NULL, 0, 'false', 'false', 'false', '0', '0', '0', '0', '0', '0', 'true', 'false', 'false', 'false', 39, 0, 0, 0, 10, 20, 39, '2022-08-07 15:21:00', '2022-08-07 15:21:00', 0.00, '00390'),
(67, 48, 'Jyri', 'Gromyko', 'jyri.gromyko3003+0@gmail.com', '0449782028', '21212', 'Äestäjäntie, Helsinki', '8', '8', '10:00-11:00', 'Sedan', 'standard', 'Ulkopesu', '0', 79, NULL, NULL, 0, 'true', 'false', 'false', '0', '0', '0', '0', '0', '0', 'false', 'true', 'false', 'false', 0, 69, 0, 0, 10, 20, 39, '2022-08-08 11:39:03', '2022-08-08 11:39:03', 0.00, '00390'),
(68, 49, 'Jyri', 'Gromyko', 'jyri.gromyko3003+00@gmail.com', '0449782028', '123 NRO', 'Kyntäjäntie 7, 00390 Helsinki, Finland', '9', '8', '09:30-10:00', 'Sedan', 'standard', 'Ulkopesu', '0', 49, NULL, NULL, 0, 'true', 'false', 'false', '0', '0', '0', '0', '0', '0', 'true', 'false', 'false', 'false', 39, 0, 0, 0, 10, 20, 39, '2022-08-09 04:52:17', '2022-08-09 04:52:17', 0.00, '00390'),
(69, NULL, 'Jyri', 'Grmk', 'jyri@gromi.fi', '0449782028', '123 NRO', 'Kyntäjäntie 7, 00390 Helsinki, Finland', '9', '8', '10:00-10:30', 'Sedan', 'standard', 'Ulkopesu', '0', 109, NULL, NULL, 0, 'true', 'false', 'false', '0', '0', '0', '0', '0', '0', 'false', 'false', 'false', 'true', 0, 0, 0, 99, 10, 20, 39, '2022-08-09 08:58:38', '2022-08-09 08:58:38', 0.00, '00390'),
(70, 29, 'none', 'none', 'jyri.gromykos@gmail.com', 'none', '11111', 'Äestäjäntie 11111,  11111 Helsinki', '9', '8', '10:30-11:00', 'Sedan', 'standard', 'Ulkopesu', '0', 41, NULL, NULL, 0, 'false', 'false', 'false', '0', '0', '0', '0', '0', '0', 'true', 'false', 'false', 'false', 39, 0, 0, 0, 10, 20, 39, '2022-08-09 09:02:17', '2022-08-09 09:02:17', 1.50, '00390'),
(71, 29, 'none', 'none', 'jyri.gromykos@gmail.com', 'none', '123 NRO', 'Harvarvägen 6, 00390 Helsingfors, Finland', '9', '8', '11:00-11:30', 'Sedan', 'standard', 'Ulkopesu', '0', 41, NULL, NULL, 0, 'false', 'false', 'false', '0', '0', '0', '0', '0', '0', 'true', 'false', 'false', 'false', 39, 0, 0, 0, 10, 20, 39, '2022-08-09 09:03:56', '2022-08-09 09:03:56', 1.50, '00390'),
(72, 29, 'none', 'none', 'jyri.gromykos@gmail.com', 'none', '123 NRO', '00100 Helsinki', '9', '8', '13:30-14:00', 'Sedan', 'standard', 'Ulkopesu', '0', 51, NULL, NULL, 0, 'true', 'false', 'false', '0', '0', '0', '0', '0', '0', 'true', 'false', 'false', 'false', 39, 0, 0, 0, 10, 20, 39, '2022-08-09 09:05:08', '2022-08-09 09:05:08', 1.50, '00100'),
(73, 29, 'none', 'none', 'jyri.gromykos@gmail.com', 'none', '123 NRO', 'Arkadiagatan 1, 00100 Helsingfors, Finland', '9', '8', '15:30-16:00', 'Sedan', 'standard', 'Ulkopesu', '0', 61, NULL, NULL, 0, 'false', 'true', 'false', '0', '0', '0', '0', '0', '0', 'true', 'false', 'false', 'false', 39, 0, 0, 0, 10, 20, 39, '2022-08-09 09:06:45', '2022-08-09 09:06:45', 1.50, '00100'),
(74, NULL, 'Jyri', 'Gromyko', 'jyri@gromi.fi', '0449782028', '123 NRO', 'Harvarvägen 8, 00390 Helsingfors, Finland', '9', '8', '12:30-13:00', 'Sedan', 'standard', 'Ulkopesu', '0', 39, NULL, NULL, 0, 'false', 'false', 'false', '0', '0', '0', '0', '0', '0', 'true', 'false', 'false', 'false', 39, 0, 0, 0, 10, 20, 39, '2022-08-09 09:48:55', '2022-08-09 09:48:55', 0.00, '00390'),
(75, 50, 'Jyri', 'Gromyko', 'jyri.gromyko3003+13@gmail.com', '0449782028', '123 NRO', 'Harvarvägen 8, 00390 Helsingfors, Finland', '9', '8', '14:30-15:00', 'Sedan', 'standard', 'Ulkopesu', '0', 39, NULL, NULL, 0, 'false', 'false', 'false', '0', '0', '0', '0', '0', '0', 'true', 'false', 'false', 'false', 39, 0, 0, 0, 10, 20, 39, '2022-08-09 09:52:52', '2022-08-09 09:52:52', 0.00, '00390'),
(76, 50, 'Jyri', 'Gromyko', 'jyri.gromyko3003+13@gmail.com', '0449782028', '121212', NULL, '9', '8', '17:00-17:30', 'Sedan', 'standard', 'Ulkopesu', '0', 41, NULL, NULL, 0, 'false', 'false', 'false', '0', '0', '0', '0', '0', '0', 'true', 'false', 'false', 'false', 39, 0, 0, 0, 10, 20, 39, '2022-08-09 09:55:42', '2022-08-09 09:55:42', 1.50, '0'),
(79, 54, 'test', 'test', 'test', 'test', '1235', '00320 Helsinki', '9', '8', '13:00-13:30', 'Sedan', 'standard', 'Ulkopesu', '0', 101, '', '', 0, 'false', 'false', 'false', '0', '0', '0', '0', '0', '0', 'false', 'false', 'false', 'true', 0, 0, 0, 99, 10, 20, 39, '2022-08-09 12:53:05', '2022-08-09 12:53:05', 0.00, '00320'),
(80, NULL, 'Jyri Gromyko', 'Gromyko', 'jyri@gromi.fi', '449782028', 'Ddzd', 'Kyntäjäntie 7, 00390 Helsinki, Finland', '9', '8', '18:00-18:30', 'Sedan', 'standard', 'Ulkopesu', '0', 69, NULL, NULL, 0, 'true', 'true', 'false', '0', '0', '0', '0', '0', '0', 'true', 'false', 'false', 'false', 39, 0, 0, 0, 10, 20, 39, '2022-08-09 14:06:44', '2022-08-09 14:06:44', 0.00, '00390'),
(81, 55, 'Jyri Gromi', 'Grmk', 'roskaposti@gromi.fi', '0449782028', '123 NRO', 'Äestäjäntie, Helsinki', '9', '8', '16:30-17:00', 'Sedan', 'standard', 'Ulkopesu', '0', 39, NULL, NULL, 0, 'false', 'false', 'false', '0', '0', '0', '0', '0', '0', 'true', 'false', 'false', 'false', 39, 0, 0, 0, 10, 20, 39, '2022-08-09 16:37:11', '2022-08-09 16:37:11', 0.00, '00390'),
(82, NULL, 'test', 'test', '', 'test', '1235', '00100 Helsinki', '9', '8', '11:30-12:00', 'Sedan', 'standard', 'Ulkopesu', '0', 99, '', '', 0, 'false', 'false', 'false', '0', '0', '0', '0', '0', '0', 'false', 'false', 'false', 'true', 0, 0, 0, 99, 10, 20, 39, '2022-08-09 18:57:10', '2022-08-09 18:57:10', 0.00, '00100'),
(83, NULL, 'Tuomas', 'Lehtovirta', 'tuomas.lehtovirta@icloud.com', '0400236184', 'ZNA-705', 'Halmetie 15, 00730 Helsinki, Finland', '10', '8', '13:30-15:00', 'Sedan', 'standard', 'Ulkopesu', '0', 39, NULL, NULL, 0, 'false', 'false', 'false', '0', '0', '0', '0', '0', '0', 'true', 'false', 'false', 'false', 39, 0, 0, 0, 10, 20, 39, '2022-08-10 09:21:02', '2022-08-10 09:21:02', 0.00, '00730'),
(84, 58, 'Ilkka', 'Wennerstrand', '', '+358400470749', 'Nlu-515', 'Suurkaski 7, Helsinki', '13', '9', '09:00-11:30', 'Farmari', 'standard', 'Molemmat', '0', 134, '', 'Upwash20', 0, 'false', 'false', 'false', '0', '0', '0', '0', '0', '0', 'false', 'true', 'false', 'false', 0, 134, 0, 0, 10, 20, 39, '2022-09-12 14:51:53', '2022-09-12 14:51:53', 0.00, '00680'),
(85, NULL, 'Tuomas', 'Lehtovirta', '', '0400236184', 'Zna-705', 'Takalantie 28, Helsinki', '15', '9', '09:00-09:30', 'Sedan', 'standard', 'Ulkopesu', '0', 2, '', 'MB95', 0, 'true', 'false', 'false', '0', '0', '0', '0', '0', '0', 'true', 'false', 'false', 'false', 39, 0, 0, 0, 10, 20, 39, '2022-09-14 04:08:29', '2022-09-14 04:08:29', 0.00, '00730'),
(87, NULL, 'Jyri Gromi', 'Gromi', '', '0449782028', '121212', 'Äestäjäntie, Helsinki', '16', '9', '10:00-10:30', 'Sedan', 'standard', 'Ulkopesu', '0', 2, '', 'MB95', 0, 'false', 'false', 'false', '0', '0', '0', '0', '0', '0', 'true', 'false', 'false', 'false', 39, 0, 0, 0, 10, 20, 39, '2022-09-15 17:25:56', '2022-09-15 17:25:56', 0.00, '00390'),
(88, 61, 'Jyri Gromi', 'Gromi', '', '0449782028', '123 NRO', 'AES rakennus Oy, Laajaniitynkuja, Vantaa', '16', '9', '15:00-15:30', 'Sedan', 'standard', 'Ulkopesu', '0', 39, '', '', 0, 'false', 'false', 'false', '0', '0', '0', '0', '0', '0', 'true', 'false', 'false', 'false', 39, 0, 0, 0, 10, 20, 39, '2022-09-15 17:29:45', '2022-09-15 17:29:45', 0.00, '01620'),
(89, 62, 'Jyri2', 'Gromi2', 'jyri.gromyko3003+10123@gmail.com', '0449782028', '123 NRO', 'Äeskuja, Vantaa', '17', '9', '09:00-09:30', 'Sedan', 'standard', 'Ulkopesu', '0', 2, 'Testi', 'MB95', 0, 'false', 'false', 'false', '0', '0', '0', '0', '0', '0', 'true', 'false', 'false', 'false', 39, 0, 0, 0, 10, 20, 39, '2022-09-16 02:43:58', '2022-09-16 02:43:58', 0.00, '01630'),
(90, 8, NULL, NULL, 'jyri@gromi.fi', NULL, 'ZNA-705', 'Gunillantie 15, Helsinki', '17', '9', '15:00-15:30', 'Sedan', 'standard', 'Ulkopesu', '0', 2, '', 'MB95', 0, 'false', 'false', 'false', '0', '0', '0', '0', '0', '0', 'true', 'false', 'false', 'false', 39, 0, 0, 0, 10, 20, 39, '2022-09-16 20:47:53', '2022-09-16 20:47:53', 0.00, '00870'),
(91, 8, NULL, NULL, 'jyri@gromi.fi', NULL, 'ZNA-705', 'Gunillantie 15, Helsinki', '17', '9', '16:30-17:00', 'Sedan', 'standard', 'Ulkopesu', '0', 2, '', 'MB95', 0, 'false', 'false', 'false', '0', '0', '0', '0', '0', '0', 'true', 'false', 'false', 'false', 39, 0, 0, 0, 10, 20, 39, '2022-09-16 20:54:57', '2022-09-16 20:54:57', 0.00, '00870'),
(92, 8, NULL, NULL, 'jyri@gromi.fi', NULL, 'ZNA-705', 'Gunillantie 15 A, Helsinki', '17', '9', '10:30-11:00', 'Sedan', 'standard', 'Ulkopesu', '0', 2, '', 'MB95', 0, 'false', 'false', 'false', '0', '0', '0', '0', '0', '0', 'true', 'false', 'false', 'false', 39, 0, 0, 0, 10, 20, 39, '2022-09-16 21:00:41', '2022-09-16 21:00:41', 1.50, '00870'),
(93, 8, NULL, NULL, 'jyri@gromi.fi', NULL, 'ZNA-705', 'Gunillantie 15, Helsinki', '18', '9', '09:30-10:00', 'Sedan', 'standard', 'Ulkopesu', '0', 2, '', 'MB95', 0, 'false', 'false', 'false', '0', '0', '0', '0', '0', '0', 'true', 'false', 'false', 'false', 39, 0, 0, 0, 10, 20, 39, '2022-09-16 21:10:34', '2022-09-16 21:10:34', 1.50, '00870'),
(94, 66, 'test', 'test', 'potano8510@edxplus.com', 'test', 'test', '00100 Helsinki', '19', '9', '17:30-18:00', 'Matala', 'standard', 'Ulkopesu', '0', 2, '', 'MB95', 0, 'false', 'false', 'false', '0', '0', '0', '0', '0', '0', 'true', 'false', 'false', 'false', 39, 0, 0, 0, 10, 20, 39, '2022-09-17 22:27:18', '2022-09-17 22:27:18', 0.00, '00100'),
(95, 66, 'test', 'test', 'potano8510@edxplus.com', 'test', '1235', '00100 Helsinki', '19', '9', '14:00-15:00', 'Matala', 'standard', 'Sisäpesu', '0', 3, '', 'MB95', 0, 'false', 'false', 'false', '0', '0', '0', '0', '0', '0', 'true', 'false', 'false', 'false', 39, 0, 0, 0, 10, 20, 39, '2022-09-17 22:30:42', '2022-09-17 22:30:42', 1.50, '00100'),
(96, 67, 'Test User', 'test', 'test@gmail.com', '123455', 'test', '00100 Helsinki', '19', '9', '16:00-16:30', 'Farmari', 'standard', 'Ulkopesu', '0', 99, '', '', 0, 'false', 'false', 'false', '0', '0', '0', '0', '0', '0', 'false', 'false', 'false', 'true', 0, 0, 0, 99, 10, 20, 39, '2022-09-17 22:51:11', '2022-09-17 22:51:11', 0.00, '00100'),
(97, 27, 'Jyri', 'Gromyko', 'jyri@gromi.fi', '+358449782028', '121212', 'Äestäjäntie, Helsinki', '19', '9', '12:00-12:30', 'Sedan', 'standard', 'Ulkopesu', '0', 2, '', 'MB95', 0, 'false', 'false', 'false', '0', '0', '0', '0', '0', '0', 'true', 'false', 'false', 'false', 39, 0, 0, 0, 10, 20, 39, '2022-09-18 10:19:05', '2022-09-18 10:19:05', 0.00, '00390'),
(98, 68, 'Jyri', 'Gromi', 'kirillkerensky@mail.ru', '0449782029', '123 NRO', 'Kyntäjäntie 7, 00390 Helsinki, Finland', '19', '9', '11:00-11:30', 'Sedan', 'standard', 'Ulkopesu', '0', 2, '', 'MB95', 0, 'false', 'false', 'false', '0', '0', '0', '0', '0', '0', 'true', 'false', 'false', 'false', 39, 0, 0, 0, 10, 20, 39, '2022-09-18 10:22:28', '2022-09-18 10:22:28', 0.00, '00390'),
(99, 55, 'Jyri Gromi', 'Grmk', 'roskaposti@gromi.fi', '0449782028', '121212', 'Allas Sea Pool, Katajanokanlaituri, Helsinki', '22', '9', '13:00-13:30', 'Sedan', 'standard', 'Ulkopesu', '0', 2, '', 'MB95', 0, 'false', 'false', 'false', '0', '0', '0', '0', '0', '0', 'true', 'false', 'false', 'false', 39, 0, 0, 0, 10, 20, 39, '2022-09-21 08:53:35', '2022-09-21 08:53:35', 0.00, '00160'),
(100, 55, 'Jyri Gromi', 'Grmk', 'roskaposti@gromi.fi', '0449782028', '121212', 'Äestäjäntie, Helsinki', '22', '9', '17:00-17:30', 'Sedan', 'standard', 'Ulkopesu', '0', 2, '', 'MB95', 0, 'false', 'false', 'false', '0', '0', '0', '0', '0', '0', 'true', 'false', 'false', 'false', 39, 0, 0, 0, 10, 20, 39, '2022-09-21 08:56:51', '2022-09-21 08:56:51', 1.50, '00390'),
(101, 55, 'Jyri Gromi', 'Grmk', 'roskaposti@gromi.fi', '0449782028', '123 NRO', 'Allas Sea Pool, Katajanokanlaituri, Helsinki', '22', '9', '09:30-10:00', 'Sedan', 'standard', 'Ulkopesu', '0', 2, '', 'MB95', 0, 'false', 'false', 'false', '0', '0', '0', '0', '0', '0', 'true', 'false', 'false', 'false', 39, 0, 0, 0, 10, 20, 39, '2022-09-21 09:06:17', '2022-09-21 09:06:17', 1.50, '00160'),
(102, 55, 'Jyri Gromi', 'Grmk', 'roskaposti@gromi.fi', '0449782028', '121212', 'Allas Sea Pool, Katajanokanlaituri, Helsinki', '22', '9', '18:00-18:30', 'Sedan', 'standard', 'Ulkopesu', '0', 2, '', 'MB95', 0, 'false', 'false', 'false', '0', '0', '0', '0', '0', '0', 'true', 'false', 'false', 'false', 39, 0, 0, 0, 10, 20, 39, '2022-09-21 13:25:38', '2022-09-21 13:25:38', 0.00, '00160'),
(103, 55, 'Jyri Gromi', 'Grmk', 'roskaposti@gromi.fi', '0449782028', '123 NRO', 'Äestäjäntie, Helsinki', '22', '9', '11:30-12:00', 'Sedan', 'standard', 'Ulkopesu', '0', 2, '', 'MB95', 0, 'false', 'false', 'false', '0', '0', '0', '0', '0', '0', 'true', 'false', 'false', 'false', 39, 0, 0, 0, 10, 20, 39, '2022-09-21 14:19:44', '2022-09-21 14:19:44', 1.50, '00390'),
(104, 55, 'Jyri Gromi', 'Grmk', 'roskaposti@gromi.fi', '0449782028', '123 NRO', 'Äestäjäntie, Helsinki', '22', '9', '15:00-15:30', 'Sedan', 'standard', 'Ulkopesu', '0', 2, '', 'MB95', 0, 'false', 'false', 'false', '0', '0', '0', '0', '0', '0', 'true', 'false', 'false', 'false', 39, 0, 0, 0, 10, 20, 39, '2022-09-21 14:21:19', '2022-09-21 14:21:19', 0.00, '00390'),
(105, 55, 'Jyri Gromi', 'Grmk', 'roskaposti@gromi.fi', '0449782028', '121212', 'Äestäjäntie, Helsinki', '22', '9', '16:30-17:00', 'Sedan', 'standard', 'Ulkopesu', '0', 2, '', 'MB95', 0, 'false', 'false', 'false', '0', '0', '0', '0', '0', '0', 'true', 'false', 'false', 'false', 39, 0, 0, 0, 10, 20, 39, '2022-09-21 14:31:57', '2022-09-21 14:31:57', 0.00, '00390'),
(106, 27, 'Jyri', 'Gromyko', 'jyri@gromi.fi', '+358449782028', 'krkf', 'Äestäjäntie, Helsinki', '22', '9', '14:00-14:30', 'Sedan', 'standard', 'Ulkopesu', '0', 2, '', 'MB95', 0, 'false', 'false', 'false', '0', '0', '0', '0', '0', '0', 'true', 'false', 'false', 'false', 39, 0, 0, 0, 10, 20, 39, '2022-09-21 16:35:23', '2022-09-21 16:35:23', 0.00, '00390'),
(107, 55, 'Jyri Gromi', 'Grmk', 'roskaposti@gromi.fi', '0449782028', '121212', 'Äestäjäntie, Helsinki', '23', '9', '09:30-10:00', 'Sedan', 'standard', 'Ulkopesu', '0', 2, '', 'MB95', 0, 'false', 'false', 'false', '0', '0', '0', '0', '0', '0', 'true', 'false', 'false', 'false', 39, 0, 0, 0, 10, 20, 39, '2022-09-22 09:13:44', '2022-09-22 09:13:44', 0.00, '00390'),
(108, 72, 'Juho', 'Lehtinen', 'Jiilehtinenfitness@gmail.com', '0440486589', 'CRB-405', 'Kuuluttajankatu, Helsinki', '23', '9', '12:00-12:30', 'Sedan', 'standard', 'Ulkopesu', '0', 39, '', '', 0, 'false', 'false', 'false', '0', '0', '0', '0', '0', '0', 'true', 'false', 'false', 'false', 39, 0, 0, 0, 10, 20, 39, '2022-09-22 13:24:52', '2022-09-22 13:24:52', 0.00, '00240'),
(109, 55, 'Jyri Gromi', 'Grmk', 'roskaposti@gromi.fi', '0449782028', '121212', 'Äestäjäntie, Helsinki', '24', '9', '10:00-10:30', 'Sedan', 'standard', 'Ulkopesu', '0', 2, '', 'MB95', 0, 'false', 'false', 'false', '0', '0', '0', '0', '0', '0', 'true', 'false', 'false', 'false', 39, 0, 0, 0, 10, 20, 39, '2022-09-23 09:37:54', '2022-09-23 09:37:54', 0.00, '00390'),
(110, 55, 'Jyri Gromi', 'Grmk', 'roskaposti@gromi.fi', '0449782028', '121212', 'Äestäjäntie, Helsinki', '27', '9', '09:00-09:30', 'Sedan', 'standard', 'Ulkopesu', '0', 2, '', 'MB95', 0, 'false', 'false', 'false', '0', '0', '0', '0', '0', '0', 'true', 'false', 'false', 'false', 39, 0, 0, 0, 10, 20, 39, '2022-09-26 05:41:13', '2022-09-26 05:41:13', 0.00, '00390'),
(111, 73, 'Susanna', 'Jansson', 'paivijansson@gmail.com', '+358403532300', 'SOA564', 'Pikkusirkuntie 1, Espoo', '28', '9', '17:00-17:30', 'Korkea', 'standard', 'Ulkopesu', '0', 98, '', '', 0, 'false', 'false', 'true', '0', '0', '0', '0', '0', '0', 'true', 'false', 'false', 'false', 39, 0, 0, 0, 10, 20, 39, '2022-09-27 14:20:07', '2022-09-27 14:20:07', 0.00, '02660'),
(112, 74, 'Nico', 'Rehn', 'rehnnico@gmail.com', '0453482526', 'Zka-962', 'Kurberget 15, 02750 Esbo, Finland', '1', '10', '09:00-11:00', 'Sedan', 'standard', 'Sisäpesu', '0', 104, '', '', 0, 'false', 'false', 'false', '0', '0', '0', '0', '0', '0', 'false', 'true', 'false', 'false', 0, 104, 0, 0, 10, 20, 39, '2022-09-30 03:33:22', '2022-09-30 03:33:22', 0.00, '02750'),
(113, 85, 'Jyri Gromyko', 'Gromyko', 'jyrigromyk@gromi.fi', '0449782028', '', '', '19', '11', '17:00-17:30', NULL, NULL, 'Ulkopesu', '0', 2, '', '', 0, 'false', 'false', 'false', '0', '0', '0', '0', '0', '0', 'true', 'false', 'false', 'false', 39, 0, 0, 0, 19, 19, 39, '2022-10-18 07:26:12', '2022-10-18 07:26:12', 0.00, ''),
(114, 86, '0', '0', 'jyri@gromi.fi', '0', '', 'Äestäjäntie, Helsinki', '19', '11', '16:30-17:00', NULL, NULL, 'Ulkopesu', '0', 3, '', '', 0, 'true', 'false', 'false', '0', '0', '0', '0', '0', '0', 'true', 'false', 'false', 'false', 39, 0, 0, 0, 19, 19, 39, '2022-10-18 09:40:06', '2022-10-18 09:40:06', 0.00, ''),
(115, 87, 'Jussi', 'Mattsson', 'jussi.mattsson@gmail.com', '+358408383232', 'Fpe769', 'Seiliniitty 11, Espoo', '20', '11', '11:00-12:00', NULL, NULL, 'Sisäpesu', '0', 39, '', '', 0, 'false', 'false', 'false', '0', '0', '0', '0', '0', '0', 'false', 'false', 'true', 'false', 0, 0, 39, 0, 19, 19, 39, '2022-10-19 10:53:46', '2022-10-19 10:53:46', 0.00, ''),
(116, 86, '0', '0', 'jyri@gromi.fi', '0', '', 'Äestäjäntie, Helsinki', '21', '11', '13:30-14:00', NULL, NULL, 'Ulkopesu', '0', 2, '', 'MB95', 0, 'false', 'false', 'false', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, 39, 0, 0, 0, 19, 19, 39, '2022-10-20 06:43:45', '2022-10-20 06:43:45', 1.50, ''),
(117, 27, 'Jyri', 'Gromyko', 'jyri@gromi.fi', '+358449782028', '', 'Äestäjäntie, Helsinki', '21', '11', '09:30-10:00', NULL, NULL, 'Ulkopesu', '0', 2, '', 'MB95', 0, 'false', 'false', 'false', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, 39, 0, 0, 0, 19, 19, 39, '2022-10-20 08:41:19', '2022-10-20 08:41:19', 0.00, ''),
(118, 8, NULL, NULL, 'jyri@gromi.fi', NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, '0', 1, '', '', 0, NULL, NULL, NULL, '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, '2022-11-01 16:51:30', '2022-11-01 16:51:30', 0.00, '0'),
(119, 93, 'Jyri Gromyko', 'Gromyko', 'jyri@gromi.fi', '0449782028', NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, '0', 1, '', '', 0, NULL, NULL, NULL, '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, '2022-11-02 07:44:27', '2022-11-02 07:44:27', 0.00, '0'),
(120, 94, 'Bergen', 'Merenvuori', 'bergenmerenvuori02@gmail.com', '', NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, '0', 1, '', '', 0, NULL, NULL, NULL, '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, '2022-11-03 11:34:34', '2022-11-03 11:34:34', 0.00, '0'),
(121, 95, 'Jyri', 'Gromi', 'roskaposti@gromi.fi', '0449782028', NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, '0', 1, '', '', 0, NULL, NULL, NULL, '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, '2022-11-04 07:07:04', '2022-11-04 07:07:04', 0.00, '0'),
(122, 95, 'Jyri', 'Gromi', 'roskaposti@gromi.fi', '0449782028', '1232332', NULL, NULL, '1', NULL, NULL, NULL, NULL, '0', 1, '', '', 0, NULL, NULL, NULL, '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, '2022-11-04 07:16:52', '2022-11-04 07:16:52', 0.00, '0'),
(123, 96, 'JJ', 'GG', 'jyri+001@gromi.fi', '0449782028', '1232332', NULL, NULL, '1', NULL, NULL, NULL, NULL, '0', 1, '', '', 0, NULL, NULL, NULL, '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, '2022-11-04 07:19:00', '2022-11-04 07:19:00', 0.00, '0'),
(124, 97, 'Jyri', 'Gromi', 'roskaposti@gromi.fi', '0449782028', NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, '0', 1, '', '', 0, NULL, NULL, NULL, '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, '2022-11-04 07:35:34', '2022-11-04 07:35:34', 0.00, '0'),
(125, 98, 'Jyri', 'Gromi', 'roskaposti@gromi.fi', '0449782028', NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, '0', 1, '', '', 0, NULL, NULL, NULL, '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, '2022-11-04 08:10:17', '2022-11-04 08:10:17', 0.00, '0'),
(126, 99, 'Jyri', 'Gromi', 'jyri+003@gromi.fi', '0449782028', NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, '0', 1, '', '', 0, NULL, NULL, NULL, '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, '2022-11-04 08:46:18', '2022-11-04 08:46:18', 0.00, '0'),
(127, 100, 'Jyri', 'GG', 'jyri+004@gromi.fi', '0449782028', NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, '0', 1, '', '', 0, NULL, NULL, NULL, '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, '2022-11-04 09:11:51', '2022-11-04 09:11:51', 0.00, '0'),
(128, 100, 'Jyri', 'GG', 'jyri+004@gromi.fi', '0449782028', NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, '0', 1, '', '', 0, NULL, NULL, NULL, '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, '2022-11-04 09:17:22', '2022-11-04 09:17:22', 0.00, '0'),
(129, 100, 'Jyri', 'GG', 'jyri+004@gromi.fi', '0449782028', NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, '0', 1, '', '', 0, NULL, NULL, NULL, '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, '2022-11-04 09:21:28', '2022-11-04 09:21:28', 0.00, '0'),
(130, 100, 'Jyri', 'GG', 'jyri+004@gromi.fi', '0449782028', '121212', NULL, NULL, '1', NULL, NULL, NULL, NULL, '0', 1, '', '', 0, NULL, NULL, NULL, '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, '2022-11-04 09:43:10', '2022-11-04 09:43:10', 0.00, '0'),
(131, 100, 'Jyri', 'GG', 'jyri+004@gromi.fi', '0449782028', '123 NRO', NULL, '5', '12', '09:00-10:00', NULL, NULL, 'Sisäpesu', '0', 1, '', 'MB95', 0, 'false', 'false', 'false', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, '2022-11-04 10:27:51', '2022-11-04 10:27:51', 1.50, '0'),
(132, 8, NULL, NULL, 'jyri@gromi.fi', NULL, 'ZNA-705', NULL, '5', '12', '09:00-09:30', NULL, NULL, 'Ulkopesu', '0', 1, '', 'MB95', 0, 'false', 'false', 'false', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, '2022-11-04 10:33:23', '2022-11-04 10:33:23', 1.50, '0'),
(133, 101, 'Jyri', 'Gromi', 'wee@gromi.fi', '0449782028', '121212', NULL, '5', '12', '09:00-09:30', NULL, NULL, 'Ulkopesu', '0', 1, '', 'MB95', 0, 'false', 'false', 'false', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, '2022-11-04 10:38:07', '2022-11-04 10:38:07', 0.00, '0'),
(134, 8, NULL, NULL, 'jyri@gromi.fi', NULL, 'ZNA-705', 'Äestäjäntie 2A', '5', '12', '09:00-09:30', NULL, NULL, 'Ulkopesu', '0', 1, '', 'MB95', 0, 'false', 'false', 'false', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, '2022-11-04 10:42:04', '2022-11-04 10:42:04', 1.50, '0'),
(135, 8, NULL, NULL, 'jyri@gromi.fi', NULL, 'ZNA-705', 'Äestäjäntie, Helsinki', '5', '12', '09:00-09:30', NULL, NULL, 'Ulkopesu', '0', 1, '', 'MB95', 0, 'false', 'false', 'false', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, '2022-11-04 10:44:33', '2022-11-04 10:44:33', 1.50, '0'),
(136, 8, NULL, NULL, 'jyri@gromi.fi', NULL, '123456', 'Äestäjäntie, Helsinki', '5', '12', '09:00-09:30', NULL, NULL, 'Ulkopesu', '0', 41, '', '', 0, 'false', 'false', 'false', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, '2022-11-04 13:10:39', '2022-11-04 13:10:39', 1.50, '0'),
(137, 105, 'Jyri', 'Gromi', 'roskaposti@gromi.fi', '0449782028', NULL, 'Äestäjäntie, Helsinki', '5', '12', '09:00-09:30', NULL, NULL, 'Ulkopesu', '0', 1, '', 'MB95', 0, 'false', 'false', 'false', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, '2022-11-04 13:17:22', '2022-11-04 13:17:22', 0.00, '0'),
(138, 105, 'Jyri', 'Gromi', 'roskaposti@gromi.fi', '0449782028', NULL, 'Äestäjäntie, Helsinki', '5', '12', '09:00-09:30', NULL, NULL, 'Ulkopesu', '0', 1, '', 'MB95', 0, 'false', 'false', 'false', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, '2022-11-04 13:18:27', '2022-11-04 13:18:27', 1.50, '0'),
(139, 105, 'Jyri', 'Gromi', 'roskaposti@gromi.fi', '0449782028', NULL, 'Äestäjäntie, Helsinki', '5', '12', '09:00-09:30', NULL, NULL, 'Ulkopesu', '0', 41, '', '', 0, 'false', 'false', 'false', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, '2022-11-04 13:22:14', '2022-11-04 13:22:14', 1.50, '0'),
(140, 8, NULL, NULL, 'jyri@gromi.fi', NULL, '123456', 'Äestäjäntie, Helsinki', '5', '12', '09:00-09:30', NULL, NULL, 'Ulkopesu', '0', 1, '', 'MB95', 0, 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, '2022-11-04 15:57:55', '2022-11-04 15:57:55', 1.50, '0'),
(141, 106, 'Jyri', 'Gromi', 'jyri+007@gromi.fi', '0449782028', NULL, 'Äestäjäntie, Helsinki', '5', '12', '09:00-09:30', NULL, NULL, 'Ulkopesu', '0', 1, '', 'MB95', 0, 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, '2022-11-04 16:03:56', '2022-11-04 16:03:56', 0.00, '0'),
(142, 106, 'Jyri', 'Gromi', 'jyri+007@gromi.fi', '0449782028', NULL, NULL, '5', '12', '09:00-09:30', NULL, NULL, 'Ulkopesu', '0', 1, '', 'MB95', 0, 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, '2022-11-04 16:14:42', '2022-11-04 16:14:42', 1.50, '0'),
(143, 106, 'Jyri', 'Gromi', 'jyri+007@gromi.fi', '0449782028', NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, '0', 1, '', '', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, '2022-11-04 16:24:23', '2022-11-04 16:24:23', 1.50, '0');

-- --------------------------------------------------------

--
-- Table structure for table `cupons`
--

CREATE TABLE `cupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `isLimit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isTime` tinyint(1) NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `percent` int(11) DEFAULT '0',
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `dateTo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cupons`
--

INSERT INTO `cupons` (`id`, `isLimit`, `isTime`, `code`, `created_at`, `updated_at`, `percent`, `date`, `dateTo`) VALUES
(16, 'false', 2, 'UPWASH20', '2022-09-11 11:00:36', '2022-09-11 11:00:36', 20, '2022-09-11', '2022-09-18'),
(18, 'false', 1, 'TEST-2022', '2022-09-13 17:20:36', '2022-09-13 17:20:36', 20, '2022-09-12', '2022-09-17'),
(20, 'false', 1, 'MB99', '2022-09-16 20:40:43', '2022-09-16 20:40:43', 99, '2022-09-16', '2022-09-18'),
(21, 'false', 1, 'MB100', '2022-09-18 10:30:56', '2022-09-18 10:30:56', 100, '2022-09-17', '2022-09-24'),
(29, 'false', 1, 'LANSEERAUS10', '2022-10-23 18:14:13', '2022-10-23 18:14:13', 10, '2022-10-03', '2022-12-31'),
(30, 'false', 1, 'lanseeraus10', '2022-10-23 18:14:55', '2022-10-23 18:14:55', 10, '2022-10-03', '2022-12-31'),
(31, 'false', 1, 'MB95', '2022-11-01 14:51:54', '2022-11-01 14:51:54', 98, '2022-10-31', '2022-11-06');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2022_07_14_121907_users', 2),
(3, '2022_07_14_121917_clients', 2),
(4, '2022_07_16_142452_create_prices_table', 3),
(5, '2022_07_17_094901_create_tickets_table', 4),
(6, '2022_07_19_170813_create_cupons_table', 5),
(7, '2022_08_04_133926_add_zip_code_to_users_table', 6),
(8, '2022_08_04_171515_create_zip_codes_table', 7),
(9, '2022_08_05_021320_add_additionalprice_to_clients_table', 7),
(10, '2022_08_05_114200_add_column_to_prices_table', 7),
(11, '2022_08_05_191011_add_column_to_clients_table', 7),
(12, '2022_08_09_125230_add_column_to_users_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prices`
--

CREATE TABLE `prices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `step1_1` int(11) NOT NULL,
  `step1_2` int(11) NOT NULL,
  `step1_3` int(255) DEFAULT '0',
  `step3_1` int(11) NOT NULL,
  `step3_2` int(11) NOT NULL,
  `step3_3` int(11) NOT NULL,
  `step4_1` int(11) NOT NULL,
  `step4_2` int(11) NOT NULL,
  `step4_3` int(11) NOT NULL,
  `step4_4` int(11) NOT NULL,
  `step4_5` int(11) NOT NULL,
  `step5_1` int(11) NOT NULL,
  `step5_2` int(11) NOT NULL,
  `step5_3` int(11) NOT NULL,
  `step5_4` int(11) NOT NULL,
  `step6_1` int(11) NOT NULL DEFAULT '0',
  `step6_2` int(11) NOT NULL DEFAULT '0',
  `step6_3` int(11) NOT NULL DEFAULT '0',
  `step6_4` int(11) NOT NULL DEFAULT '0',
  `ulk1` int(11) NOT NULL DEFAULT '0',
  `ulk2` int(11) NOT NULL DEFAULT '0',
  `ulk3` int(11) NOT NULL DEFAULT '0',
  `ulk4` int(11) DEFAULT '0',
  `sis1` int(11) NOT NULL DEFAULT '0',
  `sis2` int(11) NOT NULL DEFAULT '0',
  `sis3` int(11) NOT NULL DEFAULT '0',
  `mol1` int(11) NOT NULL DEFAULT '0',
  `mol2` int(11) NOT NULL DEFAULT '0',
  `mol3` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ulk1_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '30',
  `ulk2_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '30',
  `ulk3_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '30',
  `ulk4_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '30',
  `sis1_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '30',
  `sis2_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '30',
  `sis3_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '30',
  `sis4_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '30',
  `mol1_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '30',
  `mol2_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '30',
  `mol3_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '30',
  `step5_5` int(15) DEFAULT NULL,
  `step5_6` int(15) DEFAULT NULL,
  `step5_7` int(15) DEFAULT NULL,
  `step5_8` int(15) DEFAULT NULL,
  `step5_9` int(15) DEFAULT NULL,
  `step5_10` int(15) DEFAULT NULL,
  `step5_11` int(15) DEFAULT NULL,
  `step5_12` int(15) DEFAULT NULL,
  `step5_13` int(15) DEFAULT NULL,
  `step5_14` int(15) DEFAULT NULL,
  `step5_15` int(15) DEFAULT NULL,
  `step5_16` int(15) DEFAULT NULL,
  `step5_17` int(15) DEFAULT NULL,
  `step5_18` int(15) DEFAULT NULL,
  `step5_19` int(15) DEFAULT NULL,
  `step5_20` int(15) DEFAULT NULL,
  `step5_21` int(15) DEFAULT NULL,
  `step5_22` int(15) DEFAULT NULL,
  `step5_23` int(15) DEFAULT NULL,
  `step1_4` int(11) DEFAULT NULL,
  `sis1_1` int(10) NOT NULL DEFAULT '0',
  `sis1_2` int(10) NOT NULL DEFAULT '0',
  `sis1_3` int(10) NOT NULL DEFAULT '0',
  `sis1_4` int(10) NOT NULL DEFAULT '0',
  `sis1_5` int(10) NOT NULL DEFAULT '0',
  `sis1_6` int(10) NOT NULL DEFAULT '0',
  `sis1_7` int(10) NOT NULL DEFAULT '0',
  `sis1_8` int(10) NOT NULL DEFAULT '0',
  `sis1_9` int(10) NOT NULL DEFAULT '0',
  `sis1_10` int(10) NOT NULL DEFAULT '0',
  `sis1_11` int(10) NOT NULL DEFAULT '0',
  `sis1_12` int(10) NOT NULL DEFAULT '0',
  `sis2_1` int(10) NOT NULL DEFAULT '0',
  `sis2_2` int(10) NOT NULL DEFAULT '0',
  `sis2_3` int(10) NOT NULL DEFAULT '0',
  `sis2_4` int(10) NOT NULL DEFAULT '0',
  `sis3_1` int(10) NOT NULL DEFAULT '0',
  `sis3_2` int(10) NOT NULL DEFAULT '0',
  `sis3_3` int(10) NOT NULL DEFAULT '0',
  `ulk1_1` int(10) NOT NULL DEFAULT '0',
  `ulk1_2` int(10) NOT NULL DEFAULT '0',
  `ulk1_3` int(10) NOT NULL DEFAULT '0',
  `ulk1_4` int(10) NOT NULL DEFAULT '0',
  `ulk1_5` int(10) NOT NULL DEFAULT '0',
  `ulk1_6` int(10) NOT NULL DEFAULT '0',
  `ulk1_7` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `ulk1_8` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `ulk1_9` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `ulk1_10` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `ulk1_11` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `ulk2_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `ulk2_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `ulk2_3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `ulk2_4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `ulk2_5` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `ulk2_6` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `ulk2_7` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `ulk2_8` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `ulk2_9` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `ulk2_10` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `ulk3_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `ulk3_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `ulk3_3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `ulk3_4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `mol1_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `mol1_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `mol1_3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `mol1_4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `mol2_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `mol2_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `mol2_3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `mol2_4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `mol3_1` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `mol3_2` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `mol3_3` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prices`
--

INSERT INTO `prices` (`id`, `step1_1`, `step1_2`, `step1_3`, `step3_1`, `step3_2`, `step3_3`, `step4_1`, `step4_2`, `step4_3`, `step4_4`, `step4_5`, `step5_1`, `step5_2`, `step5_3`, `step5_4`, `step6_1`, `step6_2`, `step6_3`, `step6_4`, `ulk1`, `ulk2`, `ulk3`, `ulk4`, `sis1`, `sis2`, `sis3`, `mol1`, `mol2`, `mol3`, `created_at`, `updated_at`, `ulk1_time`, `ulk2_time`, `ulk3_time`, `ulk4_time`, `sis1_time`, `sis2_time`, `sis3_time`, `sis4_time`, `mol1_time`, `mol2_time`, `mol3_time`, `step5_5`, `step5_6`, `step5_7`, `step5_8`, `step5_9`, `step5_10`, `step5_11`, `step5_12`, `step5_13`, `step5_14`, `step5_15`, `step5_16`, `step5_17`, `step5_18`, `step5_19`, `step5_20`, `step5_21`, `step5_22`, `step5_23`, `step1_4`, `sis1_1`, `sis1_2`, `sis1_3`, `sis1_4`, `sis1_5`, `sis1_6`, `sis1_7`, `sis1_8`, `sis1_9`, `sis1_10`, `sis1_11`, `sis1_12`, `sis2_1`, `sis2_2`, `sis2_3`, `sis2_4`, `sis3_1`, `sis3_2`, `sis3_3`, `ulk1_1`, `ulk1_2`, `ulk1_3`, `ulk1_4`, `ulk1_5`, `ulk1_6`, `ulk1_7`, `ulk1_8`, `ulk1_9`, `ulk1_10`, `ulk1_11`, `ulk2_1`, `ulk2_2`, `ulk2_3`, `ulk2_4`, `ulk2_5`, `ulk2_6`, `ulk2_7`, `ulk2_8`, `ulk2_9`, `ulk2_10`, `ulk3_1`, `ulk3_2`, `ulk3_3`, `ulk3_4`, `mol1_1`, `mol1_2`, `mol1_3`, `mol1_4`, `mol2_1`, `mol2_2`, `mol2_3`, `mol2_4`, `mol3_1`, `mol3_2`, `mol3_3`) VALUES
(1, 0, 0, 0, 0, 0, 0, 0, 0, 20, 10, 5, 19, 19, 39, 5, 14, 15, 16, 20, 39, 69, 119, 99, 39, 104, 199, 69, 134, 299, NULL, '2022-10-27 11:55:52', '30', '75', '90', '30', '60', '150', '210', '60', '75', '150', '300', 49, 10, 10, 10, 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 39, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL DEFAULT '0',
  `mailCreate` text,
  `mailTakeOrder` text,
  `mailFinish` text,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `mailCreate`, `mailTakeOrder`, `mailFinish`, `updated_at`, `created_at`) VALUES
(0, 'Hei! Tilauksesi on otettu vastaan. Ilmoitamme pikimiten pesijälle ajanvarauksestasi ja pidämme sinut ajan tasalla. Voit seurata tilaustasi osoitteessa https://tilaus.upwash.fi/login, käyttämällä sähköpostia käyttäjätunnuksena ja auton rekisterinumeroa salasanana.\r\n\r\nKiitos!\r\n- Upwashin Tiimi', NULL, 'Hei! Tilauksesi on kuitattu tehdyksi. Mikäli sinulla jäi vielä kysyttävää, otathan yhteyttä sähköpostiimme info@upwash.fi. \r\n\r\nKiitos!\r\n- Upwashin Tiimi', '2022-10-25 10:16:03', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `theme` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` text COLLATE utf8mb4_unicode_ci,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `login` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `secondname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin` int(11) DEFAULT '0',
  `adress` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `auto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `zip_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `email`, `name`, `secondname`, `phone`, `type`, `admin`, `adress`, `auto`, `created_at`, `updated_at`, `zip_code`, `start_time`, `end_time`) VALUES
(8, 'admin', 'ee61e766467546320854c3446ccde3d4', 'jyri@gromi.fi', NULL, NULL, NULL, 'client', 1, 'Gunillantie 15', 'ZNA-705', '2022-07-19 15:25:58', '2022-09-16 20:45:52', NULL, NULL, NULL),
(26, 'Tkcvnvcghb', '790969ed15a095ef1a46d7022d0abe39', 'Tkcvnvcghb', 'Tuomas', 'Lehtovirta', '0547(467', 'client', 0, NULL, NULL, '2022-07-30 17:56:24', '2022-07-30 17:56:24', NULL, NULL, NULL),
(27, 'jyri@gromi.fi', '0a3a84601c9be934f05178757f8f0a08', 'jyri@gromi.fi', 'Jyri', 'Gromyko', '+358449782028', 'client', 0, NULL, NULL, '2022-07-31 15:04:55', '2022-07-31 15:04:55', NULL, NULL, NULL),
(29, 'pesija', '28163870f91398eb3432ed6dea88013f', 'jyri.gromykos@gmail.com', 'none', 'none', 'none', 'washer', 0, '00100', NULL, '2022-08-02 07:14:51', '2022-08-09 09:04:38', '00390,00100', '06:00', '22:30'),
(30, 'tuomas.lehtovirta@icloud.com', 'a01610228fe998f515a72dd730294d87', 'tuomas.lehtovirta@icloud.com', 'Jyri', 'Gromyko', '435345445455', 'client', 0, NULL, '223413', '2022-08-02 07:16:44', '2022-08-02 07:19:30', NULL, NULL, NULL),
(32, NULL, 'de872154ffbf91a5dcc0e539dd2d5106', NULL, NULL, NULL, NULL, 'client', 0, NULL, NULL, '2022-08-02 11:30:16', '2022-08-02 11:30:16', NULL, NULL, NULL),
(33, 'jyri.gromyko3003+1@gmail.com', '1d21659b5172b48f57f1f4e04c9de195', 'jyri.gromyko3003+1@gmail.com', 'Jyri', 'Gromyko', '0449782028', 'client', 0, NULL, NULL, '2022-08-04 10:42:58', '2022-08-04 10:42:58', NULL, NULL, NULL),
(34, 'jyri.gromyko3003+2@gmail.com', '202cb962ac59075b964b07152d234b70', 'jyri.gromyko3003+2@gmail.com', 'Jyri', 'Gromyko', '0449782028', 'client', 0, NULL, NULL, '2022-08-06 09:21:01', '2022-08-06 09:21:01', NULL, NULL, NULL),
(35, 'porvoo', 'fec17da9d666038570d6913faa90a2e2', 'porvoo@gmail.com', 'none', 'none', 'none', 'washer', 0, '06100', NULL, '2022-08-06 11:29:44', '2022-08-09 05:35:31', '06150,06100,06400,06650', '08:00', '18:00'),
(36, 'jyri.gromyko3003+1123@gmail.com', '0a3a84601c9be934f05178757f8f0a08', 'jyri.gromyko3003+1123@gmail.com', 'Jyri', 'Gromyko', '0449782028', 'client', 0, NULL, NULL, '2022-08-06 12:06:07', '2022-08-06 12:06:07', NULL, NULL, NULL),
(37, 'hakaniemi', 'cd7ccce10dfcaf8a477da48545b3b6b1', 'hakaniemi@postiosoitetahan.com', 'none', 'none', 'none', 'washer', 0, '00530', NULL, '2022-08-06 12:57:23', '2022-08-06 12:57:23', '00170,00160,00130,00120,00180,00100,00260,00500,00540,00580,00510,00520,00250,00270,00240,00280,00300,00550,00560,00610,00600,00620,00530', NULL, NULL),
(38, 'toolo', 'dfa91cceff8d645e284b81a7a0a18006', 'toolo@sahkopostitahan.com', 'none', 'none', 'none', 'washer', 0, '00101', NULL, '2022-08-06 12:57:55', '2022-08-06 12:57:55', '00170,00160,00130,00120,00180,00100,00260,00500,00540,00580,00510,00520,00250,00270,00240,00280,00300,00140,00150,00220,00210,00200,00101,00390', NULL, NULL),
(39, 'tapulikaupunki', '417ada93185e9512f261e75956bb1e62', 'tapulikaupunki@sahkopostitahan.com', 'none', 'none', 'none', 'washer', 0, '00740', NULL, '2022-08-06 12:59:23', '2022-08-06 12:59:23', '00700,00701,00704,00705,00710,00711,00714,00715,00720,00721,00724,00725,00730,00734,00740,00741,00744,00750,00751,00754,00760,00761,00764,00765,00770,00771,00774,00775,00780,00781,00785,00790,00791,00794,00795', NULL, NULL),
(40, 'koivuhaka', '75b5b996ad9e7cfc3c4e537f4b9c8c3b', 'koivuhaka@sahkopostitahan.com', 'none', 'none', 'none', 'washer', 0, '01300', NULL, '2022-08-06 13:01:42', '2022-08-06 13:01:42', '01300,01301,01304,01305,01340,01344,01350,01351,01354,01360,01361,01364,01365,01370,01374,01380,01390,01391,01394', NULL, NULL),
(41, 'tikkurila', 'ddad4c708328dc74e245932f2632600c', 'tikkurila@sahkopostitahan.com', 'none', 'none', 'none', 'washer', 0, '01300', NULL, '2022-08-06 13:01:47', '2022-08-06 13:01:47', '01300,01301,01304,01305,01340,01344,01350,01351,01354,01360,01361,01364,01365,01370,01374,01380,01390,01391,01394', NULL, NULL),
(46, 'haukilahti', '002134e8a0c4ba49ded09d604abd4807', 'haukilahti@sahkopostitahan.com', 'none', 'none', 'none', 'washer', 0, '02170', NULL, '2022-08-06 13:02:16', '2022-08-06 13:02:16', '00200,00201,00204,00210,00211,00214,00215,00220,00221,00224,00225,00230,00231,00232,00234,00235,00240,00241,00244,00245,00250,00251,00254,00255,00260,00264,00270,00271,00274,00280,00281,00284', NULL, NULL),
(47, 'jyri.gromyko3003+11203@gmail.com', '0a3a84601c9be934f05178757f8f0a08', 'jyri.gromyko3003+11203@gmail.com', 'Jyri', 'Gromyko', '0449782028', 'client', 0, NULL, NULL, '2022-08-07 15:21:00', '2022-08-07 15:21:00', NULL, NULL, NULL),
(48, 'jyri.gromyko3003+0@gmail.com', 'ef80af910fa07870e25b1a4c86d10402', 'jyri.gromyko3003+0@gmail.com', 'Jyri', 'Gromyko', '0449782028', 'client', 0, NULL, NULL, '2022-08-08 11:39:03', '2022-08-08 11:39:03', NULL, NULL, NULL),
(49, 'jyri.gromyko3003+00@gmail.com', '0a3a84601c9be934f05178757f8f0a08', 'jyri.gromyko3003+00@gmail.com', 'Jyri', 'Gromyko', '0449782028', 'client', 0, NULL, NULL, '2022-08-09 04:52:17', '2022-08-09 04:52:17', NULL, NULL, NULL),
(50, 'jyri.gromyko3003+13@gmail.com', '0a3a84601c9be934f05178757f8f0a08', 'jyri.gromyko3003+13@gmail.com', 'Jyri', 'Gromyko', '0449782028', 'client', 0, NULL, NULL, '2022-08-09 09:52:52', '2022-08-09 09:52:52', NULL, NULL, NULL),
(51, 'dasdasd', '9996535e07258a7bbfd8b132435c5962', 'dasdasd', 'dadasd', 'adasdas', 'asdasda', 'client', 0, NULL, NULL, '2022-08-09 09:55:48', '2022-08-09 09:55:48', NULL, NULL, NULL),
(54, 'test', '098f6bcd4621d373cade4e832627b4f6', 'test', 'test', 'test', 'test', 'client', 0, NULL, NULL, '2022-08-09 12:47:37', '2022-08-09 12:47:37', NULL, NULL, NULL),
(55, 'roskaposti@gromi.fi', '0a3a84601c9be934f05178757f8f0a08', 'roskaposti@gromi.fi', 'Jyri Gromi', 'Grmk', '0449782028', 'client', 0, NULL, NULL, '2022-08-09 16:37:11', '2022-08-09 16:37:11', NULL, NULL, NULL),
(56, 'Osku', '8a2bfd6bb9c7532ef2aed74e584846f4', 'ritva.rastimo@welho.com', 'Ritva', 'Rastimo', '0405516291', 'client', 0, NULL, NULL, '2022-09-04 02:56:30', '2022-09-04 02:58:35', NULL, NULL, NULL),
(57, 'Sarahmariaaas', '643340b78c9ddaa929a3134334a10c36', 'sarahmariaas@icloud.com', '0', '0', '0', 'client', 0, NULL, 'FOX-631', '2022-09-04 13:13:48', '2022-09-04 13:15:12', NULL, NULL, NULL),
(58, 'Ilkka.wennerstrand@welho.com', '14c7efae030c2ed889217074db83fac2', 'Ilkka.wennerstrand@welho.com', 'Ilkka', 'Wennerstrand', '+358400470749', 'client', 0, NULL, NULL, '2022-09-12 14:51:53', '2022-09-12 14:51:53', NULL, NULL, NULL),
(59, 'ilkka.pihlainen@gmail.com', '76cd28925a4911a9d2fa334c602de090', 'ilkka.pihlainen@gmail.com', '0', '0', '0', 'client', 0, NULL, NULL, '2022-09-13 02:50:03', '2022-09-13 02:50:03', NULL, NULL, NULL),
(60, 'Mikvei', '3dbf8de85d0c354a2c9379ae6bdf7bdf', 'mikko.veijalainen@welho.com', 'Mikko', 'Veijalainen', '+358505874142', 'client', 0, 'Mäkitorpantie 14', 'CKS-304', '2022-09-14 01:36:34', '2022-09-14 01:38:10', NULL, NULL, NULL),
(61, 'jyri+1@gromi.fi', '0a3a84601c9be934f05178757f8f0a08', 'jyri+1@gromi.fi', 'Jyri Gromi', 'Gromi', '0449782028', 'client', 0, NULL, NULL, '2022-09-15 17:29:45', '2022-09-15 17:29:45', NULL, NULL, NULL),
(62, 'jyri.gromyko3003+10123@gmail.com', '0a3a84601c9be934f05178757f8f0a08', 'jyri.gromyko3003+10123@gmail.com', 'Jyri2', 'Gromi2', '0449782028', 'client', 0, NULL, NULL, '2022-09-16 02:43:58', '2022-09-16 02:43:58', NULL, NULL, NULL),
(63, 'testuser@gmail.com', '9996535e07258a7bbfd8b132435c5962', 'testuser@gmail.com', 'TEst', 'test', '4664545', 'client', 0, NULL, NULL, '2022-09-16 05:05:34', '2022-09-16 05:05:34', NULL, NULL, NULL),
(64, 'Olli1', '22fd0f9991449a6ac6a02867474e6882', 'olli1313@hotmail.com', '0', '0', '0', 'client', 0, 'Orelinkatu 53', 'LLP-188', '2022-09-17 05:19:36', '2022-09-17 05:26:08', NULL, NULL, NULL),
(65, 'Ansku', 'f37f63a0a13b91e33572e894e12339c1', 'angelina.kalvilainen@hotmail.fi', '0', '0', '0', 'client', 0, NULL, NULL, '2022-09-17 10:14:24', '2022-09-17 10:14:24', NULL, NULL, NULL),
(66, 'potano8510@edxplus.com', '098f6bcd4621d373cade4e832627b4f6', 'potano8510@edxplus.com', 'test', 'test', 'test', 'client', 0, NULL, NULL, '2022-09-17 22:27:18', '2022-09-17 22:27:18', NULL, NULL, NULL),
(67, 'test@gmail.com', '098f6bcd4621d373cade4e832627b4f6', 'test@gmail.com', 'Test User', 'test', '123455', 'client', 0, NULL, NULL, '2022-09-17 22:51:11', '2022-09-17 22:51:11', NULL, NULL, NULL),
(68, 'kirillkerensky@mail.ru', '0a3a84601c9be934f05178757f8f0a08', 'kirillkerensky@mail.ru', 'Jyri', 'Gromi', '0449782029', 'client', 0, NULL, NULL, '2022-09-18 10:22:28', '2022-09-18 10:22:28', NULL, NULL, NULL),
(69, 'GennadyGA', 'ed40c61ffbe076dd8f353a876a09a47b', 'GennadyGA@yandex.ru', '0', '0', '0', 'client', 0, NULL, NULL, '2022-09-21 15:58:25', '2022-09-21 15:58:25', NULL, NULL, NULL),
(70, 'autopesu', 'dff36bd5d769eddab69a6ecfab9196ac', 'annepietila1@gmail.com', 'Anne', 'Pietilä', '0505066876', NULL, 0, NULL, NULL, '2022-09-22 06:50:32', '2022-09-22 06:51:05', NULL, NULL, NULL),
(71, 'AbskuJunior', '44b2d0b1b57e6cf8a5fab941bc38e029', 'abskujunior@icloud.com', '0', '0', '0', 'client', 0, 'Helsinki', NULL, '2022-09-22 07:00:15', '2022-09-22 07:00:28', NULL, NULL, NULL),
(72, 'Jiilehtinenfitness@gmail.com', '9718db9b93324d1f09ef74a432b51000', 'Jiilehtinenfitness@gmail.com', 'Juho', 'Lehtinen', '0440486589', 'client', 0, NULL, NULL, '2022-09-22 13:24:52', '2022-09-22 13:24:52', NULL, NULL, NULL),
(73, 'paivijansson@gmail.com', '01f4c0a08c272f022831acbbda75be89', 'paivijansson@gmail.com', 'Susanna', 'Jansson', '+358403532300', 'client', 0, NULL, NULL, '2022-09-27 14:20:07', '2022-09-27 14:20:07', NULL, NULL, NULL),
(74, 'rehnnico@gmail.com', '43be4e6fb67b4d0aa54e4a879ca18ced', 'rehnnico@gmail.com', 'Nico', 'Rehn', '0453482526', 'client', 0, NULL, NULL, '2022-09-30 03:33:22', '2022-09-30 03:33:22', NULL, NULL, NULL),
(75, 'Jubeee', '541c66a226d2b3f1d84e5fc1df8121c6', 'juuso.raittinen99@gmail.com', '0', '0', '0', 'client', 0, NULL, 'NKI-565', '2022-10-04 10:09:32', '2022-10-04 10:09:49', NULL, NULL, NULL),
(76, 'Jesse', '86615132d75b98a9057b70fe28a71f6b', 'jezze.kettunen@gmail.com', '0', '0', '0', 'client', 0, NULL, NULL, '2022-10-04 12:34:02', '2022-10-04 12:34:02', NULL, NULL, NULL),
(77, 'Amos', '849e204269e6a2ac7aae84b7fd0f58ce', 'rapilaamos66@gmail.com', '0', '0', '0', 'client', 0, NULL, NULL, '2022-10-04 13:31:59', '2022-10-04 13:31:59', NULL, NULL, NULL),
(78, 'Amos rapila', '849e204269e6a2ac7aae84b7fd0f58ce', 'rapilaamos66@gmail.com', '0', '0', '0', 'client', 0, NULL, NULL, '2022-10-04 13:40:10', '2022-10-04 13:40:10', NULL, NULL, NULL),
(79, 'tiiuleena', '37b75ef1815168ce18fb90dfc07d9a4c', 'tiiu.kilpelainen@gmail.com', 'Tiiu', 'Kilpeläinen', '0442912441', 'client', 0, 'Soukanniementie 1A', 'ETP-914', '2022-10-12 11:06:12', '2022-10-12 11:07:34', NULL, NULL, NULL),
(80, 'Talonmiespaikalle Oy', '54c21e8bb4ab3bd12ef29583e1a420d8', 'dani@talonmiespaikalle.fi', '0', '0', '0', 'client', 0, NULL, NULL, '2022-10-12 17:43:18', '2022-10-12 17:43:18', NULL, NULL, NULL),
(81, 'Jackiks', '9633a9ab675e8eef5d4cef6a96f26bbf', 'jackiks@gmail.com', 'Janec', 'Junninen', '041 7423478', 'client', 0, 'Kuusikallionkuja 4c', NULL, '2022-10-15 07:00:09', '2022-10-15 07:02:07', NULL, NULL, NULL),
(82, 'Uunonen', '547bdbc473181caeb962fdcc8f43bc42', 'joonasuunonen@gmail.com', '0', '0', '0', 'client', 0, 'Perkkoonkatu 1 Tampere', 'XNA-135', '2022-10-15 07:28:47', '2022-10-15 07:29:44', NULL, NULL, NULL),
(83, 'Kokkola', 'f7285c9ffae348d57090aeebdafb9018', 'rkokkola@gmail.com', '0', '0', '0', 'client', 0, NULL, 'FPA-813', '2022-10-15 09:25:04', '2022-10-15 09:25:37', NULL, NULL, NULL),
(84, 'Pesu', '5384cb2016483f482cb98de48df499da', 'taaonmun@windowslive.com', '0', '0', '0', 'client', 0, NULL, NULL, '2022-10-15 15:11:45', '2022-10-15 15:11:45', NULL, NULL, NULL),
(85, 'jyrigromyk@gromi.fi', 'd41d8cd98f00b204e9800998ecf8427e', 'jyrigromyk@gromi.fi', 'Jyri Gromyko', 'Gromyko', '0449782028', 'client', 0, NULL, NULL, '2022-10-18 07:26:12', '2022-10-18 07:26:12', NULL, NULL, NULL),
(86, 'jyri', '28163870f91398eb3432ed6dea88013f', 'jyri@gromi.fi', '0', '0', '0', 'client', 0, NULL, NULL, '2022-10-18 09:39:14', '2022-10-18 09:39:14', NULL, NULL, NULL),
(87, 'jussi.mattsson@gmail.com', 'b50b57d7db71a25d0949973342f9f9ea', 'jussi.mattsson@gmail.com', 'Jussi', 'Mattsson', '+358408383232', 'client', 0, NULL, NULL, '2022-10-19 10:53:46', '2022-10-19 10:53:46', NULL, NULL, NULL),
(88, 'Hyytäjä', '22fd0f9991449a6ac6a02867474e6882', 'olli1313@hotmail.com', 'Olli', 'Tuominen', '0505583550', 'client', 0, 'Orelinkatu 53', 'LLP-188', '2022-10-21 17:23:55', '2022-10-21 17:24:50', NULL, NULL, NULL),
(89, 'joonas.laitinen@finsta.fi', 'd41d8cd98f00b204e9800998ecf8427e', 'joonas.laitinen@finsta.fi', 'Joonas', 'Laitinen', '0451214121', 'client', 0, NULL, NULL, '2022-10-31 07:28:23', '2022-10-31 07:28:23', NULL, NULL, NULL),
(90, 'mitja.mantynen@gmail.com', 'da8a31474362ae1b1eff644c8960d8ec', 'mitja.mantynen@gmail.com', '0', '0', '0', 'client', 0, 'Helsinki', NULL, '2022-10-31 09:06:22', '2022-10-31 09:06:52', NULL, NULL, NULL),
(91, 'arttu@rytkonen.cc', 'd41d8cd98f00b204e9800998ecf8427e', 'arttu@rytkonen.cc', 'Arttu', 'Rytkönen', '045 355 4820', 'client', 0, NULL, NULL, '2022-10-31 15:23:18', '2022-10-31 15:23:18', NULL, NULL, NULL),
(92, 'nytlahtee@gromi.fi', 'd41d8cd98f00b204e9800998ecf8427e', 'nytlahtee@gromi.fi', 'Nyt', 'Lähtee', '0449782028', 'client', 0, NULL, 'SSD-111', '2022-11-01 16:34:36', '2022-11-01 16:34:36', NULL, NULL, NULL),
(93, 'jyri@gromi.fi', 'd41d8cd98f00b204e9800998ecf8427e', 'jyri@gromi.fi', 'Jyri Gromyko', 'Gromyko', '0449782028', 'client', 0, NULL, NULL, '2022-11-02 07:44:27', '2022-11-02 07:44:27', NULL, NULL, NULL),
(94, 'bergenmerenvuori02@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'bergenmerenvuori02@gmail.com', 'Bergen', 'Merenvuori', '', 'client', 0, NULL, NULL, '2022-11-03 11:34:34', '2022-11-03 11:34:34', NULL, NULL, NULL),
(95, 'roskaposti@gromi.fi', 'd41d8cd98f00b204e9800998ecf8427e', 'roskaposti@gromi.fi', 'Jyri', 'Gromi', '0449782028', 'client', 0, NULL, NULL, '2022-11-04 07:07:04', '2022-11-04 07:07:04', NULL, NULL, NULL),
(96, 'jyri+001@gromi.fi', 'd41d8cd98f00b204e9800998ecf8427e', 'jyri+001@gromi.fi', 'JJ', 'GG', '0449782028', 'client', 0, NULL, NULL, '2022-11-04 07:19:00', '2022-11-04 07:19:00', NULL, NULL, NULL),
(97, 'roskaposti@gromi.fi', 'd41d8cd98f00b204e9800998ecf8427e', 'roskaposti@gromi.fi', 'Jyri', 'Gromi', '0449782028', 'client', 0, NULL, NULL, '2022-11-04 07:35:34', '2022-11-04 07:35:34', NULL, NULL, NULL),
(98, 'roskaposti@gromi.fi', 'd41d8cd98f00b204e9800998ecf8427e', 'roskaposti@gromi.fi', 'Jyri', 'Gromi', '0449782028', 'client', 0, NULL, NULL, '2022-11-04 08:10:17', '2022-11-04 08:10:17', NULL, NULL, NULL),
(99, 'jyri+003@gromi.fi', 'd41d8cd98f00b204e9800998ecf8427e', 'jyri+003@gromi.fi', 'Jyri', 'Gromi', '0449782028', 'client', 0, NULL, NULL, '2022-11-04 08:46:18', '2022-11-04 08:46:18', NULL, NULL, NULL),
(100, 'jyri+004@gromi.fi', 'd41d8cd98f00b204e9800998ecf8427e', 'jyri+004@gromi.fi', 'Jyri', 'GG', '0449782028', 'client', 0, NULL, NULL, '2022-11-04 09:11:51', '2022-11-04 09:11:51', NULL, NULL, NULL),
(101, 'wee@gromi.fi', 'd41d8cd98f00b204e9800998ecf8427e', 'wee@gromi.fi', 'Jyri', 'Gromi', '0449782028', 'client', 0, NULL, NULL, '2022-11-04 10:36:09', '2022-11-04 10:36:09', NULL, NULL, NULL),
(102, 'roskaposti@gromi.fi', 'd41d8cd98f00b204e9800998ecf8427e', 'roskaposti@gromi.fi', 'Jyri', 'Gromi', '0449782028', 'client', 0, NULL, NULL, '2022-11-04 12:55:45', '2022-11-04 12:55:45', NULL, NULL, NULL),
(103, 'roskaposti@gromi.fi', 'd41d8cd98f00b204e9800998ecf8427e', 'roskaposti@gromi.fi', 'Jyri', 'Gromi', '0449782028', 'client', 0, NULL, NULL, '2022-11-04 13:02:16', '2022-11-04 13:02:16', NULL, NULL, NULL),
(104, 'roskaposti@gromi.fi', 'd41d8cd98f00b204e9800998ecf8427e', 'roskaposti@gromi.fi', 'Jyri', 'Gromi', '0449782028', 'client', 0, NULL, NULL, '2022-11-04 13:06:05', '2022-11-04 13:06:05', NULL, NULL, NULL),
(105, 'roskaposti@gromi.fi', 'd41d8cd98f00b204e9800998ecf8427e', 'roskaposti@gromi.fi', 'Jyri', 'Gromi', '0449782028', 'client', 0, NULL, NULL, '2022-11-04 13:15:35', '2022-11-04 13:15:35', NULL, NULL, NULL),
(106, 'jyri+007@gromi.fi', 'd41d8cd98f00b204e9800998ecf8427e', 'jyri+007@gromi.fi', 'Jyri', 'Gromi', '0449782028', 'client', 0, NULL, NULL, '2022-11-04 15:59:28', '2022-11-04 15:59:28', NULL, NULL, NULL),
(107, 'jyri+008@gromi.fi', 'd41d8cd98f00b204e9800998ecf8427e', 'jyri+008@gromi.fi', 'Jyri', 'Gromi', '0449782028', 'client', 0, NULL, NULL, '2022-11-04 16:09:35', '2022-11-04 16:09:35', NULL, NULL, NULL),
(108, 'WillWhiteApple', 'f0b407b11a62acbfaa65400ce3310f04', 'willwhiteapple@gmail.com', 'Will', 'WhiteApple', '123123123', 'client', 0, NULL, NULL, '2022-11-05 06:38:56', '2022-11-05 06:44:39', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `zip_codes`
--

CREATE TABLE `zip_codes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Code of index',
  `price` double(8,2) NOT NULL DEFAULT '0.00' COMMENT 'Price for distance',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `zip_codes`
--

INSERT INTO `zip_codes` (`id`, `code`, `price`, `created_at`, `updated_at`) VALUES
(1, '00320', 2.00, '2022-08-05 14:22:23', '2022-08-05 14:22:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cupons`
--
ALTER TABLE `cupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `prices`
--
ALTER TABLE `prices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zip_codes`
--
ALTER TABLE `zip_codes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT for table `cupons`
--
ALTER TABLE `cupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prices`
--
ALTER TABLE `prices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `zip_codes`
--
ALTER TABLE `zip_codes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
