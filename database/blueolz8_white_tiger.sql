-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2021 at 02:10 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blueolz8_white_tiger`
--

-- --------------------------------------------------------

--
-- Table structure for table `event_englishes`
--

CREATE TABLE `event_englishes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `place` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discription` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `m_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `event_hindis`
--

CREATE TABLE `event_hindis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `place` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discription` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `m_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `original_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_size` float DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `original_name`, `filename`, `file_size`, `created_at`, `updated_at`) VALUES
(1, 'BINDIYA.jpg', '54317b724cba89c3b7ea32469061831f4961d3eb.jpg', 145478, '2021-03-21 10:33:01', '2021-03-21 10:33:01'),
(2, 'COMMON CROW.jpg', '3869e981cf6135d7ea91a33fdd7a7e0c8ed2d3dc.jpg', 111559, '2021-03-21 10:33:02', '2021-03-21 10:33:02'),
(3, 'COMMON LEOPARD.jpg', '22f5fd4b6ca64707e69dbfcc6c9e4c9ad9eec1fc.jpg', 130951, '2021-03-21 10:33:02', '2021-03-21 10:33:02'),
(4, 'CRIMSON ROSE.jpg', '5bf62a7280fb4e2be2fefea6fe7515ef998f6f04.jpg', 112595, '2021-03-21 10:33:04', '2021-03-21 10:33:04'),
(5, 'DSC_0297.jpg', '4a6bfc215396bc348938c6971011530fb9b4a951.jpg', 305067, '2021-03-21 10:33:07', '2021-03-21 10:33:07'),
(6, 'DSC_0385.jpg', '0c83de0d035b917f751b1f72676229586e4a2375.jpg', 294048, '2021-03-21 10:33:07', '2021-03-21 10:33:07'),
(7, 'DSC_0386.jpg', '3e424e3a9e7b00fceac33710c3ce21226c63bdec.jpg', 280278, '2021-03-21 10:33:08', '2021-03-21 10:33:08'),
(8, 'DSC_0396.jpg', 'f490d2b105cd0fa13055cff30a4330349281683c.jpg', 306939, '2021-03-21 10:33:08', '2021-03-21 10:33:08'),
(9, 'DSC_0397.jpg', '7c6df0dde0860863b553b878266b0ca1592efa12.jpg', 405960, '2021-03-21 10:33:09', '2021-03-21 10:33:09'),
(10, 'DSC_0410.jpg', '174fde6ec1aa25381ed8ca305532637eccfcda85.jpg', 329915, '2021-03-21 10:33:09', '2021-03-21 10:33:09'),
(11, 'DSC_0416.jpg', '1f93a7cee3a160f1e8635eeb3aec7d5692da1542.jpg', 302880, '2021-03-21 10:33:10', '2021-03-21 10:33:10'),
(12, 'DSC_0424.jpg', 'd39a8be409646b3470563c009823a81bcb8fd983.jpg', 346264, '2021-03-21 10:33:11', '2021-03-21 10:33:11'),
(13, 'DSC_0438.jpg', '4163af4e4c2364e9c30dda630e679d493f852ad5.jpg', 353229, '2021-03-21 10:33:12', '2021-03-21 10:33:12'),
(14, 'DSC_0445.jpg', '243295e8d2fb6a0c1506c13a9f661de991987e85.jpg', 348908, '2021-03-21 10:33:12', '2021-03-21 10:33:12'),
(15, 'DSC_0449.jpg', '0896e10d087473849bf29e4ae78d53d947b616d8.jpg', 332308, '2021-03-21 10:33:13', '2021-03-21 10:33:13'),
(16, 'DSC_0451.jpg', '956348ee2da6e6d8757df13a65c6475834bab664.jpg', 256811, '2021-03-21 10:33:13', '2021-03-21 10:33:13'),
(17, 'DSC_0461.jpg', '4c305fb3eb08f9a219311a852f9e3a45f656b0d7.jpg', 160797, '2021-03-21 10:33:14', '2021-03-21 10:33:14'),
(18, 'DSC_0478.jpg', '9456fc975c416f945416645c74982cfcf19d9680.jpg', 318249, '2021-03-21 10:33:14', '2021-03-21 10:33:14'),
(19, 'DSC_0480.JPG', '72c5588e6dcf0745de730bea54eb22df7eeb270d.JPG', 307730, '2021-03-21 10:33:15', '2021-03-21 10:33:15'),
(20, 'DSC_0482.JPG', '9b710056f9a6f493287dd6d108b0b7f761be6559.JPG', 275595, '2021-03-21 10:33:15', '2021-03-21 10:33:15'),
(21, 'DSC_0496.JPG', '60ad0a7baeae627fff5102bb55a5c92b16c36889.JPG', 284568, '2021-03-21 10:33:17', '2021-03-21 10:33:17'),
(22, 'DSC_0497.JPG', 'f1bb88a14e3dec0349c48821211e0210dc5c2680.JPG', 254723, '2021-03-21 10:33:17', '2021-03-21 10:33:17'),
(23, 'DSC_0511.JPG', '64298d8fca87c15de6aed4f2501ad545c3aa29e5.JPG', 298318, '2021-03-21 10:33:19', '2021-03-21 10:33:19'),
(24, 'DSC_0518.JPG', '211abd4acea2e6f51d66e088f5b07a8c6ac96d8a.JPG', 294015, '2021-03-21 10:33:19', '2021-03-21 10:33:19'),
(25, 'DSC_0519.JPG', '5678f63990c3ad50ee1087961af51dbb0892fe81.JPG', 261375, '2021-03-21 10:33:20', '2021-03-21 10:33:20'),
(26, 'DSC_0522.JPG', 'e3c1e38f5bba256123fe28d9d74fbb64de4b0c8b.JPG', 350916, '2021-03-21 10:33:20', '2021-03-21 10:33:20'),
(27, 'DSC_0538.JPG', '239bd295bb8f3aa6952b72aa9485dc06fe1dcc59.JPG', 179485, '2021-03-21 10:33:22', '2021-03-21 10:33:22'),
(28, 'DSC_0542.JPG', '161e2710b5dcb024b2dbbb528152c132e20dd442.JPG', 244919, '2021-03-21 10:33:22', '2021-03-21 10:33:22'),
(29, 'DSC_0543.JPG', '39bdb6c789f78cc5102331d9dc950d9e19c278a5.JPG', 241625, '2021-03-21 10:33:24', '2021-03-21 10:33:24'),
(30, 'DSC_0544.JPG', 'a98f8e05f7edba9cd8670a545e88481ea99f54e0.JPG', 283756, '2021-03-21 10:33:24', '2021-03-21 10:33:24'),
(31, 'DSC_0546.JPG', 'e23a6d1f99c2aa1be111200502fbf80120a46584.JPG', 347082, '2021-03-21 10:33:25', '2021-03-21 10:33:25'),
(32, 'DSC_0547.JPG', '42d3acbdafea9c4b24151cb64efdd4507dfcc90b.JPG', 310887, '2021-03-21 10:33:26', '2021-03-21 10:33:26'),
(33, 'DSC_0566.JPG', 'd76c7727ea4fba840652106377a4bee24eb67b7b.JPG', 214180, '2021-03-21 10:33:27', '2021-03-21 10:33:27'),
(34, 'DSC_0589.JPG', '263fa3c27e23e45755e54e05be21c9ca52ee9ab0.JPG', 242705, '2021-03-21 10:33:29', '2021-03-21 10:33:29'),
(35, 'DSC_0590.JPG', '3e67437490117099039939e58909a62141e35648.JPG', 256385, '2021-03-21 10:33:31', '2021-03-21 10:33:31'),
(36, 'DSC_0592.JPG', '138784adb410173d0b80dbdf90b7d34eb140c183.JPG', 325744, '2021-03-21 10:33:32', '2021-03-21 10:33:32'),
(37, 'DSC_0605.JPG', '4f6cc07d472243881d30664f2471fdf2f3339667.JPG', 343608, '2021-03-21 10:33:34', '2021-03-21 10:33:34'),
(38, 'DSC_0614.JPG', '03489411bbfb2925c7aadeb73846ad8f7a55a289.JPG', 309860, '2021-03-21 10:33:34', '2021-03-21 10:33:34'),
(39, 'DSC_0634.JPG', '62bd5391c4288c692f4d385d721a37d611b3ba51.JPG', 393753, '2021-03-21 10:33:36', '2021-03-21 10:33:36'),
(40, 'DSC_0635.JPG', '58ad97f3f5f7136096ed41e27f490949e52b4bb7.JPG', 344810, '2021-03-21 10:33:37', '2021-03-21 10:33:37'),
(41, 'DSC_0637.JPG', '57d0c01ccd66eac0ebb9099433ca7bb42759379b.JPG', 285406, '2021-03-21 10:33:40', '2021-03-21 10:33:40'),
(42, 'DSC_0643.JPG', '48145fc5731a9583350c7518c4785b6b77ffbfda.JPG', 363436, '2021-03-21 10:33:40', '2021-03-21 10:33:40'),
(43, 'DSC_0645.JPG', '1f09b5f82fa5893323a15de83b9420e00d83d67d.JPG', 321745, '2021-03-21 10:33:42', '2021-03-21 10:33:42'),
(44, 'DSC_0647.JPG', '23269e0a5fe2c75992a718f72441f0cd8a374082.JPG', 272913, '2021-03-21 10:33:43', '2021-03-21 10:33:43'),
(45, 'DSC_0648.JPG', 'ff0332705aec6fdbcf2a69ae06305722633cd02a.JPG', 343030, '2021-03-21 10:33:45', '2021-03-21 10:33:45'),
(46, 'DSC_0652.JPG', '89504178270ee5a900ea46649e678e4445d7abff.JPG', 360348, '2021-03-21 10:33:45', '2021-03-21 10:33:45'),
(47, 'GREY-HEADED-CANARY-FLYCATCHER.jpg', '278c73c4b030a43376855a44da872532df82d73d.jpg', 114000, '2021-03-21 10:33:47', '2021-03-21 10:33:47'),
(48, 'INDIAN PARADISE FLYCATCHER.JPG', 'ca1b01521d3d0e40a00f9165519a9aaaa14eb8a1.JPG', 222394, '2021-03-21 10:33:47', '2021-03-21 10:33:47'),
(49, 'PicsArt.jpg', '902690ee2d6bf29422a7ad2a903d0f370504aba9.jpg', 204376, '2021-03-21 10:33:48', '2021-03-21 10:33:48'),
(50, 'TICKELL\'S BLUE FLYCATCHER.JPG', 'abf4c78d57fb22c0c12c1a3cf1c7d8bdbaf9d970.JPG', 149799, '2021-03-21 10:33:48', '2021-03-21 10:33:48'),
(51, 'tiger.jpg', 'c70212aa5a6785275cb24a2cf8b0429ef20d791d.jpg', 303686, '2021-03-21 10:33:49', '2021-03-21 10:33:49'),
(52, 'tiger-cube.jpg', '9363f697079a8137498ba20d8c0fb0989e09df54.jpg', 71268, '2021-03-21 10:33:50', '2021-03-21 10:33:50'),
(53, 'tiger-front.jpg', '4f7a5e56bbecc2d7b66eab4311a735f8b1cdc0de.jpg', 412918, '2021-03-21 10:33:51', '2021-03-21 10:33:51'),
(54, 'tiger-original.jpg', '1cb2db9c52880b75a28d4f8a4207077599b88951.jpg', 212510, '2021-03-21 10:33:52', '2021-03-21 10:33:52'),
(55, 'vaccination.jpg', '8d902791f45d47c7c23ccc83cb6dbfa9e2c8f058.jpg', 124121, '2021-03-21 10:33:53', '2021-03-21 10:33:53'),
(56, 'white-tiger.jpg', 'a8992fd73218810261b0ca91411b2e2082232a2b.jpg', 183265, '2021-03-21 10:33:53', '2021-03-21 10:33:53'),
(57, 'YELLOW PANSY.jpg', '003748f82876696ed35b7c7e48c37a0d4514875d.jpg', 110777, '2021-03-21 10:33:54', '2021-03-21 10:33:54');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_03_12_112049_create_event_englishes_table', 1),
(5, '2021_03_16_073648_create_event_hindis_table', 1),
(6, '2021_03_16_093402_create_news_englishes_table', 1),
(7, '2021_03_16_093608_create_news_hindis_table', 1),
(8, '2021_03_20_060813_create_galleries_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `news_englishes`
--

CREATE TABLE `news_englishes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `news_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_date` date NOT NULL,
  `news_discription` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `m_news_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news_hindis`
--

CREATE TABLE `news_hindis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `news_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_date` date NOT NULL,
  `news_discription` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `m_news_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_as` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'admin',
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role_as`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin WTS', 'admin@wts.com', NULL, '$2y$10$.EBQAIwGPZn8eLiZIe12eus.A90pYmM/6h0MAe04xDYmACzirGTRK', 'admin', 0, NULL, '2021-03-16 04:35:39', '2021-07-17 05:10:42'),
(2, 'SuperU', 'super@gmail.com', NULL, '$2y$10$YCSP/NU.5aLHcEDiG679z.2PFqg2AQpe0BLjimYKh0ff1pR3jpQHW', 'superadmin', 0, NULL, '2021-03-16 04:36:30', '2021-03-16 04:36:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event_englishes`
--
ALTER TABLE `event_englishes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `event_englishes_slug_unique` (`slug`);

--
-- Indexes for table `event_hindis`
--
ALTER TABLE `event_hindis`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `event_hindis_slug_unique` (`slug`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_englishes`
--
ALTER TABLE `news_englishes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `news_englishes_news_slug_unique` (`news_slug`);

--
-- Indexes for table `news_hindis`
--
ALTER TABLE `news_hindis`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `news_hindis_news_slug_unique` (`news_slug`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event_englishes`
--
ALTER TABLE `event_englishes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `event_hindis`
--
ALTER TABLE `event_hindis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `news_englishes`
--
ALTER TABLE `news_englishes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `news_hindis`
--
ALTER TABLE `news_hindis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
