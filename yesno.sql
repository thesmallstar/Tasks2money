-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2020 at 04:50 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yesno`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  `just` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`, `just`) VALUES
(6, '2014_10_12_000000_create_users_table', 1, 0),
(7, '2014_10_12_100000_create_password_resets_table', 1, 0),
(8, '', 0, 0),
(9, '', 0, 0),
(10, '', 2147483647, 0),
(11, '', 0, 0),
(12, '', 0, 0),
(1000011, '', 363534, 0);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ptasks`
--

CREATE TABLE `ptasks` (
  `id` int(11) NOT NULL,
  `body` longtext NOT NULL,
  `value` int(11) NOT NULL,
  `giver` int(11) NOT NULL,
  `taker` int(11) DEFAULT NULL,
  `accepted` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ptasks`
--

INSERT INTO `ptasks` (`id`, `body`, `value`, `giver`, `taker`, `accepted`) VALUES
(1, 'I need a logo designer', 5, 1, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(10) UNSIGNED NOT NULL,
  `comstat` tinyint(1) NOT NULL DEFAULT '0',
  `cmpstatnew` tinyint(1) DEFAULT NULL,
  `acpstat` tinyint(1) NOT NULL DEFAULT '0',
  `value` int(11) DEFAULT NULL,
  `body` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `giver` int(11) NOT NULL,
  `taker` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `maxdays` int(11) NOT NULL,
  `dispute_solver` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `comstat`, `cmpstatnew`, `acpstat`, `value`, `body`, `giver`, `taker`, `remember_token`, `created_at`, `updated_at`, `maxdays`, `dispute_solver`) VALUES
(28, 0, NULL, 0, 3, 'kuch Kam', 1, 3, NULL, '2018-10-20 09:06:35', '2018-10-20 09:06:35', 3, 3),
(32, 1, 1, 1, 50, 'Make a logo', 1, 4, NULL, '2018-10-20 13:40:49', '2018-10-20 13:41:49', 5, 2),
(33, 1, 1, 1, 50, 'Make a logo', 1, 4, NULL, '2018-10-20 23:23:54', '2018-10-20 23:25:34', 5, 2),
(34, 1, 1, 1, 50, 'Make a graphic', 1, 4, NULL, '2018-10-21 00:00:15', '2018-10-21 00:01:21', 5, 2),
(36, 1, 1, 1, 50, 'Make a movie', 1, 4, NULL, '2018-10-21 00:27:22', '2018-10-21 00:29:02', 5, 2),
(37, 1, 1, 1, 50, 'Make a new task', 1, 4, NULL, '2018-10-21 01:02:14', '2018-10-21 01:03:19', 5, 2),
(38, 1, 1, 1, 500, 'Make a new logo', 1, 4, NULL, '2018-10-21 02:55:13', '2018-10-21 02:56:38', 5, 2),
(39, 1, 1, 1, 500, 'make a cake', 4, 1, NULL, '2018-10-22 09:16:17', '2018-10-22 09:17:10', 5, 2),
(40, 1, 1, 1, 100, 'Make a cake', 1, 4, NULL, '2018-10-27 14:09:11', '2018-10-27 14:10:37', 5, 2),
(41, 1, 1, 1, 500, 'mecu kha', 1, 4, NULL, '2018-11-03 13:18:45', '2018-11-03 13:19:56', 5, 2),
(42, 1, 1, 1, 200, 'Jhadu', 1, 4, NULL, '2018-12-09 06:31:29', '2018-12-09 06:34:16', 5, 2),
(43, 1, 1, 1, 200, 'Ambar ko marna', 1, 4, NULL, '2018-12-10 07:04:14', '2018-12-10 07:06:13', 4, 2),
(44, 1, 1, 1, 200, 'Cake', 1, 4, NULL, '2018-12-11 23:29:38', '2018-12-11 23:30:28', 5, 2),
(45, 1, 1, 1, 400, 'Chicken rice bana', 1, 4, NULL, '2019-02-09 12:47:03', '2019-02-09 12:47:56', 3, 2),
(46, 1, 1, 1, 500, 'VEG RICE BANA', 1, 4, NULL, '2019-03-01 12:08:14', '2019-03-01 12:09:36', 5, 2),
(47, 1, 1, 1, 400, 'Make me a website', 1, 4, NULL, '2019-06-01 17:42:15', '2019-06-01 17:47:18', 5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phn` bigint(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `money` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `phn`, `remember_token`, `created_at`, `updated_at`, `money`) VALUES
(1, 'Manthan Surkar', 'manthan.surkar@gmail.com', NULL, '$2y$10$rYt6EWsgc7sOiqZfqusfluClNOjNfqYojOlSxNj4uRQ.136LIIgmK', 1, 'pFmyZdLbYuOyaRb4Ou2cpROVRsvJptZ9eBBKtBDoHjLfURVfMxLtckTYWdVE', '2018-10-20 06:44:46', '2019-06-01 17:42:15', 1099),
(2, 'Manthan Surkar', 'manthan1729@gmail.com', NULL, '$2y$10$5DePbNAKNYFs/x9RJQTpHux5PLmsSDTFdPg9efwCr6SqAWDaFDouy', 2, NULL, '2018-10-20 06:45:31', '2018-10-20 06:45:31', 0),
(3, 'Manthan R Surkar', 'manthan.surkar1@gmail.com', NULL, '$2y$10$2gYV6ZDUFkcmdAc2tIkxhOx2n.2OEMAmKzYi2imhKDVkmezOnibCW', 3, NULL, '2018-10-20 06:47:08', '2018-10-20 06:47:08', 0),
(4, 'Akash Manhas', 'akash@gmail.com', NULL, '$2y$10$vLN6qExhMk8DHryxiTYHkeEwNgt1jQMvbE/xapgmyXoZBTdC1eln.', 4, 'WinV5C0RlA4xZrydkzmIlLSkqpHXMDDz058JOtyzfZUHZHtXj2OyNKGNVqQb', '2018-10-20 06:48:22', '2019-06-01 17:47:18', 5069);

--
-- Indexes for dumped tables
--

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
-- Indexes for table `ptasks`
--
ALTER TABLE `ptasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `value` (`id`);

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000012;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
