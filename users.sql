-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 17 نوفمبر 2024 الساعة 17:20
-- إصدار الخادم: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- بنية الجدول `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `profile_img` varchar(255) NOT NULL DEFAULT 'user.png',
  `status` varchar(255) NOT NULL DEFAULT 'active',
  `auth` varchar(255) NOT NULL DEFAULT '2',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `profile_img`, `status`, `auth`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'أحمد عبدالملك', 'ahmed@womyemen.com', NULL, '$2y$10$JzEmlTStwdPusZ3Cjzvt9.iNQpBlLxF5IxB9gyBjx52y/kMqvMCoq', 'user_1_1711261592.jpg', 'active', '1', NULL, '2024-03-23 07:01:51', '2024-08-28 04:02:42'),
(5, 'عبدالرحمن ملهي', 'abdu@womyemen.com', NULL, '$2y$10$q82EaPsf90dc9dAaoX0XceBetLBpKemRx4XS0oazVN2zA7hH6ms.6', 'user_5_1725090541.PNG', 'active', '1', NULL, '2024-03-24 03:28:56', '2024-09-03 14:54:29'),
(6, 'Osama Abdullah', 'osama@gmail.com', NULL, '$2y$10$fpoHGKmwyL6z2sZMa/mMvOFm/enWY32hwjDd8EMCzAclac5bN1N42', '8b7f11c3-f64c-40b0-ba8b-cf7dd76fe032.jpg', 'active', '2', NULL, '2024-09-05 11:19:40', '2024-09-05 11:19:40'),
(7, 'محمد أحمد علي', 'ss@gmail.com', NULL, '$2y$10$/31SpYVFZUHSF.xQtsH1EeSMAks6xxVh1Fsp8pR9h70eXC2RPi3ve', 'user.png', 'active', '2', NULL, '2024-10-29 17:17:13', '2024-10-29 17:17:13'),
(8, 'ksjdkjsdkf', 'ss4@gmail.com', NULL, '$2y$10$Me.tfPK4lAlEyMfEu57yveC38AXrAHP6.tJoNH4hhhe6RiXN9rtYu', 'user.png', 'active', '2', NULL, '2024-10-29 17:17:45', '2024-10-29 17:17:45');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
