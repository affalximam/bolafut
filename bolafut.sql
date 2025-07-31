-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 18, 2025 at 09:12 PM
-- Server version: 8.0.30
-- PHP Version: 8.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bolafut`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int NOT NULL,
  `booking_type` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `booking_lapangan_id` int NOT NULL DEFAULT '0',
  `booking_source` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `booking_users_id` int NOT NULL DEFAULT '0',
  `booking_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `booking_time_start` timestamp NOT NULL,
  `booking_time_end` timestamp NOT NULL,
  `booking_status` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `booking_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `booking_updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `booking_type`, `booking_lapangan_id`, `booking_source`, `booking_users_id`, `booking_name`, `booking_time_start`, `booking_time_end`, `booking_status`, `booking_created_at`, `booking_updated_at`) VALUES
(1, 'individu', 1, 'pelanggan', 1, 'Latihan Blue Sky 1', '2025-01-13 13:00:00', '2025-01-13 15:00:00', 'history', '2025-01-13 04:39:06', '2025-01-13 15:00:00'),
(2, 'individu', 1, 'pelanggan', 1, 'Latihan Blue Sky 2', '2025-01-22 13:00:00', '2025-01-22 13:59:59', 'on_schedule', '2025-01-16 04:39:06', '2025-01-16 04:39:06'),
(3, 'individu', 1, 'pelanggan', 1, 'Latihan Blue Sky 3', '2025-01-22 14:00:00', '2025-01-22 14:59:59', 'on_schedule', '2025-01-16 04:39:06', '2025-01-16 04:39:06'),
(4, 'individu', 1, 'pelanggan', 1, 'aaa', '2025-01-19 14:00:00', '2025-01-19 14:59:59', 'on_schedule', '2025-01-17 17:54:51', '2025-01-17 17:54:51'),
(5, 'individu', 1, 'pelanggan', 1, 'aaa', '2025-01-19 15:00:00', '2025-01-19 15:59:59', 'on_schedule', '2025-01-17 17:54:51', '2025-01-17 17:54:51'),
(8, 'individu', 1, 'pelanggan', 1, 'bb', '2025-01-17 14:00:00', '2025-01-17 14:59:59', 'history', '2025-01-17 18:07:55', '2025-01-17 14:59:59'),
(9, 'individu', 1, 'pelanggan', 1, 'bb', '2025-01-18 15:00:00', '2025-01-18 15:59:59', 'history', '2025-01-17 18:07:55', '2025-01-18 15:59:59'),
(69, 'individu', 1, 'pengelola', 2, 'dd', '2025-01-19 02:00:00', '2025-01-19 02:59:59', 'on_schedule', '2025-01-18 11:25:30', '2025-01-18 11:25:30'),
(70, 'individu', 1, 'pengelola', 2, 'ee', '2025-01-19 03:00:00', '2025-01-19 03:59:59', 'on_schedule', '2025-01-18 11:28:54', '2025-01-18 11:28:54'),
(71, 'individu', 1, 'pengelola', 2, 'ee', '2025-01-19 04:00:00', '2025-01-19 04:59:59', 'on_schedule', '2025-01-18 11:28:54', '2025-01-18 11:28:54'),
(72, 'individu', 1, 'pengelola', 2, 'ee', '2025-01-19 05:00:00', '2025-01-19 05:59:59', 'on_schedule', '2025-01-18 11:28:54', '2025-01-18 11:28:54'),
(73, 'individu', 3, 'pengelola', 2, 'FF', '2025-01-20 13:00:00', '2025-01-20 13:59:59', 'on_schedule', '2025-01-18 12:50:22', '2025-01-18 12:50:22'),
(74, 'individu', 1, 'pelanggan', 1, 'Lathian BlueSky 4', '2025-01-20 14:00:00', '2025-01-20 14:59:59', 'on_schedule', '2025-01-18 14:02:33', '2025-01-18 14:02:33'),
(75, 'individu', 1, 'pelanggan', 1, 'Lathian BlueSky 4', '2025-01-20 15:00:00', '2025-01-20 15:59:59', 'on_schedule', '2025-01-18 14:02:33', '2025-01-18 14:02:33'),
(76, 'individu', 1, 'pelanggan', 1, 'aaa', '2025-01-20 02:00:00', '2025-01-20 02:59:59', 'on_schedule', '2025-01-18 16:55:14', '2025-01-18 16:55:14'),
(77, 'individu', 1, 'pelanggan', 1, 'aaa', '2025-01-20 03:00:00', '2025-01-20 03:59:59', 'on_schedule', '2025-01-18 16:55:14', '2025-01-18 16:55:14'),
(78, 'individu', 1, 'pelanggan', 1, 'aaa', '2025-01-20 04:00:00', '2025-01-20 04:59:59', 'on_schedule', '2025-01-18 16:55:14', '2025-01-18 16:55:14'),
(79, 'individu', 1, 'pelanggan', 1, 'aaa', '2025-01-20 05:00:00', '2025-01-20 05:59:59', 'on_schedule', '2025-01-18 16:55:14', '2025-01-18 16:55:14');

-- --------------------------------------------------------

--
-- Table structure for table `cari_lawan`
--

CREATE TABLE `cari_lawan` (
  `cari_lawan_id` int NOT NULL,
  `cari_lawan_home` int NOT NULL,
  `cari_lawan_away` int NOT NULL,
  `cari_lawan_lapangan_id` int NOT NULL,
  `cari_lawan_start_time` timestamp NOT NULL,
  `cari_lawan_end_time` timestamp NOT NULL,
  `cari_lawan_status` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `cari_lawan_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `cari_lawan_updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lapangan`
--

CREATE TABLE `lapangan` (
  `lapangan_id` int NOT NULL,
  `lapangan_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `lapangan_alamat` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `lapangan_owner_id` int NOT NULL DEFAULT '0',
  `lapangan_open_hours` time DEFAULT NULL,
  `lapangan_close_hours` time DEFAULT NULL,
  `lapangan_profile_picture` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `lapangan_status` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `lapangan_number` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `lapangan_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lapangan_updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lapangan`
--

INSERT INTO `lapangan` (`lapangan_id`, `lapangan_name`, `lapangan_alamat`, `lapangan_owner_id`, `lapangan_open_hours`, `lapangan_close_hours`, `lapangan_profile_picture`, `lapangan_status`, `lapangan_number`, `lapangan_created_at`, `lapangan_updated_at`) VALUES
(1, 'Lapangan Futsal 1', 'Jalan Raya Banjarnegara', 2, '08:00:00', '23:00:00', '/assets/images/default-icon-lapangan.png', 'active', '62222222222', '2025-01-13 03:40:01', '2025-01-13 03:40:01'),
(2, 'Lapangan Futsal 2', 'Jalan Raya Banjarnegara 2', 3, '08:00:00', '23:00:00', '/assets/images/default-icon-lapangan.png', 'inactive', '62222222222222', '2025-01-13 03:40:01', '2025-01-13 03:40:01'),
(3, 'bb', 'bb', 9, NULL, NULL, '/assets/images/default-icon-lapangan.png', 'suspend', '22', '2025-01-16 10:32:40', '2025-01-16 10:32:40');

-- --------------------------------------------------------

--
-- Table structure for table `sistem_setting`
--

CREATE TABLE `sistem_setting` (
  `setting_id` int NOT NULL,
  `setting_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `setting_value` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users_id` int NOT NULL,
  `users_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `users_number` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `users_email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `users_password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `users_role` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `users_status` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `users_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `users_updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_id`, `users_name`, `users_number`, `users_email`, `users_password`, `users_role`, `users_status`, `users_created_at`, `users_updated_at`) VALUES
(1, 'affalximam', '085973170278', 'falahimamnur@gmail.com', '$2y$10$1LF3JL3SvRS3hiqiKbsB3.ht8X6Kq84qTiDO76HJ1h7WNyKWQP74y', 'pelanggan', 'active', '2025-01-12 12:17:29', '2025-01-12 12:17:29'),
(2, 'affal', '09999999', 'affalximam@gmail.com', '$2y$10$1LF3JL3SvRS3hiqiKbsB3.ht8X6Kq84qTiDO76HJ1h7WNyKWQP74y', 'pengelola', 'active', '2025-01-12 12:17:29', '2025-01-12 12:17:29'),
(3, 'aaaaaaaaa', '1111111111111', 'falahimamnur@gmail.com', '$2y$10$YJguX6YfgYdKQKSqJXEyvu03f3oG5.MQKOUkgIObuuOG80DRtz.IG', 'pelanggan', 'active', '2025-01-14 08:17:16', '2025-01-14 08:17:16'),
(4, 'aaaaaaaaaa', '111111111111', 'falahimamnur@gmail.com', '$2y$10$ZR8fgAJ/rV.YUhTUBTcic.CJA8vKg6T0FurlUZa3lh10li3GebV76', 'pelanggan', 'active', '2025-01-14 08:18:58', '2025-01-14 08:18:58'),
(5, 'aaaaaaaaaaa', '111111111111111', 'falahimamnur@gmail.com', '$2y$10$woeEaBAjhm8Xj1c39Cp0aONnB5zpm3kJmynGuEuc27RYYmbhxvPc6', 'pelanggan', 'active', '2025-01-14 08:22:40', '2025-01-14 08:22:40'),
(6, 'ddddddddddd', '1111111111', 'falahimamnur@gmal.com', '$2y$10$qLwIeJmR5QF5EvzCRrz4ueDWBEAqW25x741BTjf0mcGlA38bDn0CO', 'pelanggan', 'active', '2025-01-14 08:25:31', '2025-01-14 08:25:31'),
(7, 'eeeeeeeee', '11111111111', 'eeeeee@gmail.com', '$2y$10$k576X5v30lDFZKUCUckAbu/ENm2lTnX6GoQD5txzVNrxnhSlhUQEu', 'pelanggan', 'active', '2025-01-14 08:39:18', '2025-01-14 08:39:18'),
(8, 'aa', '11', 'aa@gmail.com', '$2y$10$zUJcZ8N6QBgc8K2mEv7dTOxJ/o1vvL4Js1E6U4F2uUal/4c0RdPty', 'pengelola', 'active', '2025-01-16 10:27:29', '2025-01-16 10:27:29'),
(9, 'bb', '22', 'bb@gmail.com', '$2y$10$D2MXzP5.gbVrF.U9BGf08eelmccnQH4wkr8kKMkqwELBFDSv7xi8u', 'pengelola', 'active', '2025-01-16 10:32:40', '2025-01-16 10:32:40');

-- --------------------------------------------------------

--
-- Table structure for table `users_bloked`
--

CREATE TABLE `users_bloked` (
  `blocked_id` int NOT NULL,
  `users_id` int NOT NULL DEFAULT '0',
  `blocked_users_id` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `cari_lawan`
--
ALTER TABLE `cari_lawan`
  ADD PRIMARY KEY (`cari_lawan_id`);

--
-- Indexes for table `lapangan`
--
ALTER TABLE `lapangan`
  ADD PRIMARY KEY (`lapangan_id`);

--
-- Indexes for table `sistem_setting`
--
ALTER TABLE `sistem_setting`
  ADD PRIMARY KEY (`setting_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- Indexes for table `users_bloked`
--
ALTER TABLE `users_bloked`
  ADD PRIMARY KEY (`blocked_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `cari_lawan`
--
ALTER TABLE `cari_lawan`
  MODIFY `cari_lawan_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lapangan`
--
ALTER TABLE `lapangan`
  MODIFY `lapangan_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sistem_setting`
--
ALTER TABLE `sistem_setting`
  MODIFY `setting_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users_bloked`
--
ALTER TABLE `users_bloked`
  MODIFY `blocked_id` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
