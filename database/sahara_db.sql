-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2026 at 04:55 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sahara_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `remember_tokens`
--

CREATE TABLE `remember_tokens` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `token` varchar(64) NOT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `remember_tokens`
--

INSERT INTO `remember_tokens` (`id`, `user_id`, `token`, `expires_at`, `created_at`) VALUES
(1, 4, 'e2cdb2a2c4c7d3e7cf7c309d56bcc248d08f270450c42fba9d1ebcccd503c3d7', '2026-02-15 10:42:20', '2026-01-16 15:42:20'),
(2, 4, '5da69b163b7295298e2398ab01681f25dbcde966e813a6c2105d5efde3dc8307', '2026-02-15 10:44:03', '2026-01-16 15:44:03'),
(3, 4, '2a12f416dcd8598b4dd159e07e01db3a5f309659ce8431374eceb8d813325297', '2026-02-15 10:47:02', '2026-01-16 15:47:02'),
(4, 4, 'f8b8694035a54dd7c9db1d13615c2315d7b8a110ca2cd0819e85fe59f6cb2c22', '2026-02-15 10:47:28', '2026-01-16 15:47:28'),
(5, 4, '5c04e68888d8977beea23c94cf048ec6acc75a41107c8bdced9493fe044a1f4a', '2026-02-15 10:48:20', '2026-01-16 15:48:20'),
(6, 4, 'a120326fa3c0c713d6039d3674740350af8441197710084416846335a5f9202a', '2026-02-15 10:49:13', '2026-01-16 15:49:13'),
(7, 4, '58bf11ecfb2015db889a891f71e24dcde4c4935c26225b43c6ebd8baf8a47869', '2026-02-15 10:50:12', '2026-01-16 15:50:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('customer','seller','admin') NOT NULL DEFAULT 'customer',
  `last_login` timestamp NULL DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `role`, `last_login`, `is_active`, `created_at`, `updated_at`) VALUES
(4, 'atif.chy@gmail.com', '$2y$10$kuLtKc2qTj73l6NpMoYWreeL/7gKCWvQXfNVn5bIOoUnI1nDc8COW', 'customer', '2026-01-16 15:50:12', 1, '2026-01-16 09:37:39', '2026-01-16 15:50:12');

-- --------------------------------------------------------

--
-- Table structure for table `user_profiles`
--

CREATE TABLE `user_profiles` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `gender` enum('MALE','FEMALE','OTHER') NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `newsletter` tinyint(1) NOT NULL DEFAULT 0,
  `picture` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_profiles`
--

INSERT INTO `user_profiles` (`user_id`, `first_name`, `last_name`, `phone`, `gender`, `address`, `newsletter`, `picture`) VALUES
(4, 'Atif', 'Chowdhury', '+8801834703212', 'MALE', NULL, 1, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `remember_tokens`
--
ALTER TABLE `remember_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `token` (`token`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user_profiles`
--
ALTER TABLE `user_profiles`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `remember_tokens`
--
ALTER TABLE `remember_tokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `remember_tokens`
--
ALTER TABLE `remember_tokens`
  ADD CONSTRAINT `remember_tokens_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_profiles`
--
ALTER TABLE `user_profiles`
  ADD CONSTRAINT `user_profiles_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
