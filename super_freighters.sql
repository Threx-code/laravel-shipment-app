-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2021 at 01:07 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `super_freighters`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2021_02_22_145600_create_shippings_table', 1),
(4, '2021_02_23_093923_create_payments_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `trans_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ref_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `channel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `auth_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cus_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `trans_id`, `ref_code`, `amount`, `date`, `currency`, `channel`, `auth_code`, `card_type`, `bank`, `card_brand`, `cus_id`, `email`, `customer_code`, `created_at`, `updated_at`) VALUES
(15, '1012347949', 'T151554505495477', '20350', '2021-02-23T11:03:14.000Z', 'NGN', 'card', 'AUTH_3p4h0jdgzd', 'visa ', 'TEST BANK', 'visa', '39945371', 'thocynrheel@gmail.com', 'CUS_hz4qkv2ozp89v7d', '2021-02-23 10:03:22', '2021-02-23 10:03:22'),
(16, '1012349992', 'T543103659424964', '78650', '2021-02-23T11:05:15.000Z', 'NGN', 'card', 'AUTH_n9ove8wsb2', 'visa ', 'TEST BANK', 'visa', '39942249', 'oluwatosin.amokeodo@gmail.com', 'CUS_qupebrtao4ig339', '2021-02-23 10:05:21', '2021-02-23 10:05:21'),
(17, '1012354890', 'T130314836274988', '78650', '2021-02-23T11:10:25.000Z', 'NGN', 'card', 'AUTH_5xd7uhjysb', 'visa ', 'TEST BANK', 'visa', '39942249', 'oluwatosin.amokeodo@gmail.com', 'CUS_qupebrtao4ig339', '2021-02-23 10:10:30', '2021-02-23 10:10:30'),
(18, '1012358793', 'T109540627411832', '67650', '2021-02-23T11:14:24.000Z', 'NGN', 'card', 'AUTH_c3caakqd0w', 'visa ', 'TEST BANK', 'visa', '39942249', 'oluwatosin.amokeodo@gmail.com', 'CUS_qupebrtao4ig339', '2021-02-23 10:14:30', '2021-02-23 10:14:30'),
(19, '1012359684', 'T669464001084510', '67650', '2021-02-23T11:15:19.000Z', 'NGN', 'card', 'AUTH_ei5ggpupxe', 'visa ', 'TEST BANK', 'visa', '39942249', 'oluwatosin.amokeodo@gmail.com', 'CUS_qupebrtao4ig339', '2021-02-23 10:15:29', '2021-02-23 10:15:29'),
(20, '1012360625', 'T496809305374632', '67650', '2021-02-23T11:16:18.000Z', 'NGN', 'card', 'AUTH_1mo2zn1tcr', 'visa ', 'TEST BANK', 'visa', '39942249', 'oluwatosin.amokeodo@gmail.com', 'CUS_qupebrtao4ig339', '2021-02-23 10:16:26', '2021-02-23 10:16:26'),
(21, '1012365366', 'T266607534547811', '67650', '2021-02-23T11:21:08.000Z', 'NGN', 'card', 'AUTH_p5q95fbg0g', 'visa ', 'TEST BANK', 'visa', '39942249', 'oluwatosin.amokeodo@gmail.com', 'CUS_qupebrtao4ig339', '2021-02-23 10:21:18', '2021-02-23 10:21:18'),
(22, '1012366623', 'T569491301583984', '67650', '2021-02-23T11:22:22.000Z', 'NGN', 'card', 'AUTH_v4clrb0a4v', 'visa ', 'TEST BANK', 'visa', '39942249', 'oluwatosin.amokeodo@gmail.com', 'CUS_qupebrtao4ig339', '2021-02-23 10:22:28', '2021-02-23 10:22:28'),
(23, '1012367817', 'T072005339760162', '67650', '2021-02-23T11:23:28.000Z', 'NGN', 'card', 'AUTH_03z0oyrlf3', 'visa ', 'TEST BANK', 'visa', '39942249', 'oluwatosin.amokeodo@gmail.com', 'CUS_qupebrtao4ig339', '2021-02-23 10:23:36', '2021-02-23 10:23:36'),
(24, '1012368684', 'T497719447699115', '67650', '2021-02-23T11:24:20.000Z', 'NGN', 'card', 'AUTH_t1kvrgh7jc', 'visa ', 'TEST BANK', 'visa', '39942249', 'oluwatosin.amokeodo@gmail.com', 'CUS_qupebrtao4ig339', '2021-02-23 10:24:24', '2021-02-23 10:24:24'),
(25, '1012370362', 'T002395240569270', '67650', '2021-02-23T11:26:01.000Z', 'NGN', 'card', 'AUTH_q2qlbwl899', 'visa ', 'TEST BANK', 'visa', '39945371', 'thocynrheel@gmail.com', 'CUS_hz4qkv2ozp89v7d', '2021-02-23 10:26:12', '2021-02-23 10:26:12'),
(26, '1012371847', 'T894961086457455', '67650', '2021-02-23T11:27:29.000Z', 'NGN', 'card', 'AUTH_tbqlj6gs6u', 'visa ', 'TEST BANK', 'visa', '39945371', 'thocynrheel@gmail.com', 'CUS_hz4qkv2ozp89v7d', '2021-02-23 10:27:38', '2021-02-23 10:27:38'),
(27, '1012373499', 'T559538540020752', '67650', '2021-02-23T11:29:09.000Z', 'NGN', 'card', 'AUTH_ht48bwpqt1', 'visa ', 'TEST BANK', 'visa', '39945371', 'thocynrheel@gmail.com', 'CUS_hz4qkv2ozp89v7d', '2021-02-23 10:29:15', '2021-02-23 10:29:15'),
(28, '1012375714', 'T601666753854644', '67650', '2021-02-23T11:31:23.000Z', 'NGN', 'card', 'AUTH_imhdwpklry', 'visa ', 'TEST BANK', 'visa', '39942249', 'oluwatosin.amokeodo@gmail.com', 'CUS_qupebrtao4ig339', '2021-02-23 10:31:32', '2021-02-23 10:31:32'),
(29, '1012376460', 'T549860136232579', '67650', '2021-02-23T11:32:11.000Z', 'NGN', 'card', 'AUTH_vfrtmkepay', 'visa ', 'TEST BANK', 'visa', '39942249', 'oluwatosin.amokeodo@gmail.com', 'CUS_qupebrtao4ig339', '2021-02-23 10:32:17', '2021-02-23 10:32:17'),
(30, '1012377567', 'T026627572152683', '67650', '2021-02-23T11:33:10.000Z', 'NGN', 'card', 'AUTH_z6xgpsi3ls', 'visa ', 'TEST BANK', 'visa', '39942249', 'oluwatosin.amokeodo@gmail.com', 'CUS_qupebrtao4ig339', '2021-02-23 10:33:17', '2021-02-23 10:33:17'),
(31, '1012380286', 'T221714142140622', '67650', '2021-02-23T11:36:08.000Z', 'NGN', 'card', 'AUTH_uqdyva1k69', 'visa ', 'TEST BANK', 'visa', '39942249', 'oluwatosin.amokeodo@gmail.com', 'CUS_qupebrtao4ig339', '2021-02-23 10:36:16', '2021-02-23 10:36:16'),
(32, '1012381152', 'T070263259459943', '67650', '2021-02-23T11:36:58.000Z', 'NGN', 'card', 'AUTH_57wzpgi9fc', 'visa ', 'TEST BANK', 'visa', '39942249', 'oluwatosin.amokeodo@gmail.com', 'CUS_qupebrtao4ig339', '2021-02-23 10:37:03', '2021-02-23 10:37:03'),
(33, '1012384846', 'T814000820804337', '19580', '2021-02-23T11:40:56.000Z', 'NGN', 'card', 'AUTH_qet59eezso', 'visa ', 'TEST BANK', 'visa', '39942249', 'oluwatosin.amokeodo@gmail.com', 'CUS_qupebrtao4ig339', '2021-02-23 10:41:02', '2021-02-23 10:41:02'),
(34, '1012385593', 'T756869564126134', '19580', '2021-02-23T11:41:51.000Z', 'NGN', 'card', 'AUTH_fwjzxl1l68', 'visa ', 'TEST BANK', 'visa', '39942249', 'oluwatosin.amokeodo@gmail.com', 'CUS_qupebrtao4ig339', '2021-02-23 10:41:57', '2021-02-23 10:41:57'),
(35, '1012387171', 'T742886748582122', '66880', '2021-02-23T11:43:33.000Z', 'NGN', 'card', 'AUTH_e0hoamywda', 'visa ', 'TEST BANK', 'visa', '39945371', 'thocynrheel@gmail.com', 'CUS_hz4qkv2ozp89v7d', '2021-02-23 10:43:38', '2021-02-23 10:43:38'),
(36, '1012388666', 'T949256250912418', '19580', '2021-02-23T11:45:08.000Z', 'NGN', 'card', 'AUTH_8lx81wo876', 'visa ', 'TEST BANK', 'visa', '39942249', 'oluwatosin.amokeodo@gmail.com', 'CUS_qupebrtao4ig339', '2021-02-23 10:45:14', '2021-02-23 10:45:14'),
(37, '1012392225', 'T839638900439636', '67650', '2021-02-23T11:48:54.000Z', 'NGN', 'card', 'AUTH_56vove6pe0', 'visa ', 'TEST BANK', 'visa', '39945371', 'thocynrheel@gmail.com', 'CUS_hz4qkv2ozp89v7d', '2021-02-23 10:49:01', '2021-02-23 10:49:01'),
(38, '1012393773', 'T053349429551445', '67650', '2021-02-23T11:50:34.000Z', 'NGN', 'card', 'AUTH_a4nky09ib8', 'visa ', 'TEST BANK', 'visa', '39942249', 'oluwatosin.amokeodo@gmail.com', 'CUS_qupebrtao4ig339', '2021-02-23 10:50:43', '2021-02-23 10:50:43'),
(39, '1012395173', 'T751312300099299', '66880', '2021-02-23T11:52:08.000Z', 'NGN', 'card', 'AUTH_4effv1dsb9', 'visa ', 'TEST BANK', 'visa', '39942249', 'oluwatosin.amokeodo@gmail.com', 'CUS_qupebrtao4ig339', '2021-02-23 10:52:14', '2021-02-23 10:52:14'),
(40, '1012399918', 'T580710327256329', '19580', '2021-02-23T11:57:09.000Z', 'NGN', 'card', 'AUTH_easm5xyqf7', 'visa ', 'TEST BANK', 'visa', '39942249', 'oluwatosin.amokeodo@gmail.com', 'CUS_qupebrtao4ig339', '2021-02-23 10:57:16', '2021-02-23 10:57:16');

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country_origin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_destination` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transportation_mode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kilo_weight` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shippings`
--

INSERT INTO `shippings` (`id`, `country_origin`, `country_destination`, `transportation_mode`, `kilo_weight`, `shipping_total`, `created_at`, `updated_at`) VALUES
(1, 'US', 'Nigeria', 'Base Fare by Air', '1', '61500', '2021-02-22 16:49:25', '2021-02-22 16:49:25'),
(2, 'US', 'Nigeria', 'Base Fare by Air', '3', '81500', '2021-02-22 16:49:48', '2021-02-22 16:49:48'),
(3, 'UK', 'Nigeria', 'Base Fare by Sea', '3', '21800', '2021-02-22 16:50:27', '2021-02-22 16:50:27'),
(4, 'UK', 'Nigeria', 'Base Fare by Air', '1', '60800', '2021-02-22 17:03:32', '2021-02-22 17:03:32'),
(5, 'UK', 'Nigeria', 'Base Fare by Air', '1', '60800', '2021-02-22 17:04:46', '2021-02-22 17:04:46'),
(6, 'UK', 'Nigeria', 'Base Fare by Air', '1', '60800', '2021-02-22 17:04:50', '2021-02-22 17:04:50'),
(7, 'US', 'Nigeria', 'Base Fare by Air', '2', '71500', '2021-02-22 17:06:37', '2021-02-22 17:06:37'),
(8, 'US', 'Nigeria', 'Base Fare by Air', '2', '71500', '2021-02-22 17:06:43', '2021-02-22 17:06:43'),
(9, 'US', 'Nigeria', 'Base Fare by Air', '1', '61500', '2021-02-22 17:08:07', '2021-02-22 17:08:07'),
(10, 'US', 'Nigeria', 'Base Fare by Air', '1', '61500', '2021-02-22 17:08:11', '2021-02-22 17:08:11'),
(11, 'US', 'Nigeria', 'Base Fare by Air', '1', '61500', '2021-02-22 17:09:26', '2021-02-22 17:09:26'),
(12, 'US', 'Nigeria', 'Base Fare by Air', '1', '61500', '2021-02-22 17:09:29', '2021-02-22 17:09:29'),
(13, 'US', 'Nigeria', 'Base Fare by Air', '1', '61500', '2021-02-22 17:10:50', '2021-02-22 17:10:50'),
(14, 'US', 'Nigeria', 'Base Fare by Air', '1', '61500', '2021-02-22 17:10:52', '2021-02-22 17:10:52'),
(15, 'US', 'Nigeria', 'Base Fare by Air', '1', '61500', '2021-02-22 17:11:38', '2021-02-22 17:11:38'),
(16, 'US', 'Nigeria', 'Base Fare by Air', '1', '61500', '2021-02-22 17:12:30', '2021-02-22 17:12:30'),
(17, 'US', 'Nigeria', 'Base Fare by Air', '1', '61500', '2021-02-22 17:13:02', '2021-02-22 17:13:02'),
(18, 'UK', 'Nigeria', 'Base Fare by Air', '7', '120800', '2021-02-22 17:13:58', '2021-02-22 17:13:58'),
(19, 'US', 'Nigeria', 'Base Fare by Air', '1', '61500', '2021-02-22 17:15:17', '2021-02-22 17:15:17'),
(20, 'US', 'Nigeria', 'Base Fare by Air', '1', '61500', '2021-02-22 17:17:15', '2021-02-22 17:17:15'),
(21, 'US', 'Nigeria', 'Base Fare by Air', '1', '61500', '2021-02-22 17:18:28', '2021-02-22 17:18:28'),
(22, 'UK', 'Nigeria', 'Base Fare by Sea', '3', '21800', '2021-02-22 17:20:07', '2021-02-22 17:20:07'),
(23, 'US', 'Nigeria', 'Base Fare by Air', '2', '71500', '2021-02-22 17:21:18', '2021-02-22 17:21:18'),
(24, 'US', 'Nigeria', 'Base Fare by Air', '1', '61500', '2021-02-22 17:21:49', '2021-02-22 17:21:49'),
(25, 'UK', 'Nigeria', 'Base Fare by Air', '1', '66880', '2021-02-23 07:16:43', '2021-02-23 07:16:43'),
(26, 'US', 'Nigeria', 'Base Fare by Air', '1', '67650', '2021-02-23 07:17:15', '2021-02-23 07:17:15'),
(27, 'US', 'Nigeria', 'Base Fare by Air', '1', '67650', '2021-02-23 07:18:43', '2021-02-23 07:18:43'),
(28, 'US', 'Nigeria', 'Base Fare by Sea', '1', '20350', '2021-02-23 07:48:51', '2021-02-23 07:48:51'),
(29, 'US', 'Nigeria', 'Base Fare by Sea', '1', '20350', '2021-02-23 07:50:21', '2021-02-23 07:50:21'),
(30, 'US', 'Nigeria', 'Base Fare by Sea', '1', '20350', '2021-02-23 07:51:34', '2021-02-23 07:51:34'),
(31, 'US', 'Nigeria', 'Base Fare by Sea', '1', '20350', '2021-02-23 07:52:28', '2021-02-23 07:52:28'),
(32, 'US', 'Nigeria', 'Base Fare by Sea', '1', '20350', '2021-02-23 07:53:05', '2021-02-23 07:53:05'),
(33, 'US', 'Nigeria', 'Base Fare by Air', '1', '67650', '2021-02-23 07:53:51', '2021-02-23 07:53:51'),
(34, 'US', 'Nigeria', 'Base Fare by Air', '1', '67650', '2021-02-23 07:55:24', '2021-02-23 07:55:24'),
(35, 'US', 'Nigeria', 'Base Fare by Air', '1', '67650', '2021-02-23 07:55:55', '2021-02-23 07:55:55'),
(36, 'US', 'Nigeria', 'Base Fare by Air', '1', '67650', '2021-02-23 08:03:37', '2021-02-23 08:03:37'),
(37, 'US', 'Nigeria', 'Base Fare by Air', '1', '67650', '2021-02-23 08:05:15', '2021-02-23 08:05:15'),
(38, 'US', 'Nigeria', 'Base Fare by Air', '1', '67650', '2021-02-23 08:05:56', '2021-02-23 08:05:56'),
(39, 'US', 'Nigeria', 'Base Fare by Air', '1', '67650', '2021-02-23 08:09:37', '2021-02-23 08:09:37'),
(40, 'US', 'Nigeria', 'Base Fare by Air', '1', '67650', '2021-02-23 08:10:59', '2021-02-23 08:10:59'),
(41, 'US', 'Nigeria', 'Base Fare by Air', '1', '67650', '2021-02-23 08:12:08', '2021-02-23 08:12:08'),
(42, 'US', 'Nigeria', 'Base Fare by Air', '1', '67650', '2021-02-23 08:13:26', '2021-02-23 08:13:26'),
(43, 'US', 'Nigeria', 'Base Fare by Air', '1', '67650', '2021-02-23 08:14:22', '2021-02-23 08:14:22'),
(44, 'US', 'Nigeria', 'Base Fare by Air', '1', '67650', '2021-02-23 08:18:16', '2021-02-23 08:18:16'),
(45, 'US', 'Nigeria', 'Base Fare by Air', '1', '67650', '2021-02-23 08:20:06', '2021-02-23 08:20:06'),
(46, 'US', 'Nigeria', 'Base Fare by Air', '1', '67650', '2021-02-23 08:23:55', '2021-02-23 08:23:55'),
(47, 'US', 'Nigeria', 'Base Fare by Air', '1', '67650', '2021-02-23 08:25:38', '2021-02-23 08:25:38'),
(48, 'US', 'Nigeria', 'Base Fare by Air', '1', '67650', '2021-02-23 08:26:20', '2021-02-23 08:26:20'),
(49, 'US', 'Nigeria', 'Base Fare by Air', '1', '67650', '2021-02-23 08:26:48', '2021-02-23 08:26:48'),
(50, 'US', 'Nigeria', 'Base Fare by Air', '2', '78650', '2021-02-23 08:31:09', '2021-02-23 08:31:09'),
(51, 'US', 'Nigeria', 'Base Fare by Air', '1', '67650', '2021-02-23 08:55:22', '2021-02-23 08:55:22'),
(52, 'US', 'Nigeria', 'Base Fare by Air', '1', '67650', '2021-02-23 09:40:15', '2021-02-23 09:40:15'),
(53, 'US', 'Nigeria', 'Base Fare by Air', '1', '67650', '2021-02-23 09:41:34', '2021-02-23 09:41:34'),
(54, 'US', 'Nigeria', 'Base Fare by Air', '1', '67650', '2021-02-23 09:42:29', '2021-02-23 09:42:29'),
(55, 'US', 'Nigeria', 'Base Fare by Air', '1', '67650', '2021-02-23 09:43:39', '2021-02-23 09:43:39'),
(56, 'US', 'Nigeria', 'Base Fare by Air', '1', '67650', '2021-02-23 09:44:42', '2021-02-23 09:44:42'),
(57, 'US', 'Nigeria', 'Base Fare by Air', '1', '67650', '2021-02-23 09:46:24', '2021-02-23 09:46:24'),
(58, 'US', 'Nigeria', 'Base Fare by Air', '1', '67650', '2021-02-23 09:47:08', '2021-02-23 09:47:08'),
(59, 'US', 'Nigeria', 'Base Fare by Sea', '1', '20350', '2021-02-23 09:50:43', '2021-02-23 09:50:43'),
(60, 'US', 'Nigeria', 'Base Fare by Sea', '1', '20350', '2021-02-23 09:54:05', '2021-02-23 09:54:05'),
(61, 'US', 'Nigeria', 'Base Fare by Sea', '1', '20350', '2021-02-23 09:55:39', '2021-02-23 09:55:39'),
(62, 'US', 'Nigeria', 'Base Fare by Sea', '1', '20350', '2021-02-23 10:00:18', '2021-02-23 10:00:18'),
(63, 'US', 'Nigeria', 'Base Fare by Sea', '1', '20350', '2021-02-23 10:00:59', '2021-02-23 10:00:59'),
(64, 'US', 'Nigeria', 'Base Fare by Sea', '1', '20350', '2021-02-23 10:02:26', '2021-02-23 10:02:26'),
(65, 'US', 'Nigeria', 'Base Fare by Sea', '1', '20350', '2021-02-23 10:03:11', '2021-02-23 10:03:11'),
(66, 'US', 'Nigeria', 'Base Fare by Air', '2', '78650', '2021-02-23 10:05:11', '2021-02-23 10:05:11'),
(67, 'US', 'Nigeria', 'Base Fare by Air', '2', '78650', '2021-02-23 10:10:21', '2021-02-23 10:10:21'),
(68, 'US', 'Nigeria', 'Base Fare by Air', '1', '67650', '2021-02-23 10:14:21', '2021-02-23 10:14:21'),
(69, 'US', 'Nigeria', 'Base Fare by Air', '1', '67650', '2021-02-23 10:15:16', '2021-02-23 10:15:16'),
(70, 'US', 'Nigeria', 'Base Fare by Air', '1', '67650', '2021-02-23 10:16:14', '2021-02-23 10:16:14'),
(71, 'US', 'Nigeria', 'Base Fare by Air', '1', '67650', '2021-02-23 10:21:05', '2021-02-23 10:21:05'),
(72, 'US', 'Nigeria', 'Base Fare by Air', '1', '67650', '2021-02-23 10:22:19', '2021-02-23 10:22:19'),
(73, 'US', 'Nigeria', 'Base Fare by Air', '1', '67650', '2021-02-23 10:23:25', '2021-02-23 10:23:25'),
(74, 'US', 'Nigeria', 'Base Fare by Air', '1', '67650', '2021-02-23 10:24:16', '2021-02-23 10:24:16'),
(75, 'US', 'Nigeria', 'Base Fare by Air', '1', '67650', '2021-02-23 10:25:58', '2021-02-23 10:25:58'),
(76, 'US', 'Nigeria', 'Base Fare by Air', '1', '67650', '2021-02-23 10:27:26', '2021-02-23 10:27:26'),
(77, 'US', 'Nigeria', 'Base Fare by Air', '1', '67650', '2021-02-23 10:29:06', '2021-02-23 10:29:06'),
(78, 'US', 'Nigeria', 'Base Fare by Air', '1', '67650', '2021-02-23 10:31:19', '2021-02-23 10:31:19'),
(79, 'US', 'Nigeria', 'Base Fare by Air', '1', '67650', '2021-02-23 10:32:08', '2021-02-23 10:32:08'),
(80, 'US', 'Nigeria', 'Base Fare by Air', '1', '67650', '2021-02-23 10:33:07', '2021-02-23 10:33:07'),
(81, 'US', 'Nigeria', 'Base Fare by Air', '1', '67650', '2021-02-23 10:36:05', '2021-02-23 10:36:05'),
(82, 'US', 'Nigeria', 'Base Fare by Air', '1', '67650', '2021-02-23 10:36:54', '2021-02-23 10:36:54'),
(83, 'UK', 'Nigeria', 'Base Fare by Sea', '1', '19580', '2021-02-23 10:40:54', '2021-02-23 10:40:54'),
(84, 'UK', 'Nigeria', 'Base Fare by Sea', '1', '19580', '2021-02-23 10:41:48', '2021-02-23 10:41:48'),
(85, 'UK', 'Nigeria', 'Base Fare by Air', '1', '66880', '2021-02-23 10:43:28', '2021-02-23 10:43:28'),
(86, 'UK', 'Nigeria', 'Base Fare by Sea', '1', '19580', '2021-02-23 10:45:05', '2021-02-23 10:45:05'),
(87, 'US', 'Nigeria', 'Base Fare by Air', '1', '67650', '2021-02-23 10:48:49', '2021-02-23 10:48:49'),
(88, 'US', 'Nigeria', 'Base Fare by Air', '1', '67650', '2021-02-23 10:50:29', '2021-02-23 10:50:29'),
(89, 'UK', 'Nigeria', 'Base Fare by Air', '1', '66880', '2021-02-23 10:52:05', '2021-02-23 10:52:05'),
(90, 'UK', 'Nigeria', 'Base Fare by Sea', '1', '19580', '2021-02-23 10:57:05', '2021-02-23 10:57:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shippings_country_origin_index` (`country_origin`),
  ADD KEY `shippings_country_destination_index` (`country_destination`),
  ADD KEY `shippings_transportation_mode_index` (`transportation_mode`),
  ADD KEY `shippings_shipping_total_index` (`shipping_total`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
