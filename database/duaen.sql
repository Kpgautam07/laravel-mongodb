-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2022 at 02:18 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duaen`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking_fee`
--

CREATE TABLE `booking_fee` (
  `id` int(11) NOT NULL,
  `booking_rate` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking_fee`
--

INSERT INTO `booking_fee` (`id`, `booking_rate`, `created_at`, `updated_at`) VALUES
(1, '69', '2021-11-18 04:45:29', '2022-01-25 07:01:48');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `is_deleted` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `name`, `status`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'Category1', 1, 0, '2022-01-25 03:39:08', '2022-01-25 05:16:48'),
(2, 'Category2', 1, 0, '2022-01-25 03:39:18', '2022-01-25 03:39:18'),
(3, 'Category3', 1, 0, '2022-01-25 03:39:29', '2022-01-25 05:23:33');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `media_type` enum('url','video') NOT NULL,
  `status` tinyint(4) NOT NULL,
  `is_deleted` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `category_id`, `media_type`, `status`, `is_deleted`, `created_at`, `updated_at`) VALUES
(10, 1, 'video', 1, 0, '2022-01-27 03:42:22', '2022-01-27 03:42:22'),
(11, 2, 'video', 1, 0, '2022-01-27 03:42:52', '2022-01-27 03:42:52'),
(12, 3, 'video', 1, 0, '2022-01-27 03:43:05', '2022-01-27 03:43:05'),
(13, 1, 'url', 1, 0, '2022-01-28 22:42:16', '2022-01-28 22:42:16');

-- --------------------------------------------------------

--
-- Table structure for table `stored_media`
--

CREATE TABLE `stored_media` (
  `id` int(11) NOT NULL,
  `media_id` int(11) NOT NULL,
  `url` varchar(500) DEFAULT NULL,
  `video` varchar(500) DEFAULT NULL,
  `video_thumbnail` text NOT NULL,
  `is_deleted` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stored_media`
--

INSERT INTO `stored_media` (`id`, `media_id`, `url`, `video`, `video_thumbnail`, `is_deleted`, `created_at`, `updated_at`) VALUES
(55, 10, NULL, 'f23feebe5fc7f5ca827b4b006712dbe9.mp4', '', 0, '2022-01-27 03:42:27', '2022-01-27 03:42:27'),
(56, 11, NULL, 'f8415c92cda1a7e07a7736791801eb65.mp4', '', 0, '2022-01-27 03:42:55', '2022-01-27 03:42:55'),
(57, 12, NULL, 'e0458874c8aed74857729eec3a3374df.mp4', '', 0, '2022-01-27 03:43:09', '2022-01-27 03:43:09'),
(58, 13, 'http://techslides.com/demos/sample-videos/small.mp4', NULL, '', 0, '2022-01-28 22:42:16', '2022-01-28 22:42:16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone_no` varchar(20) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL,
  `country` varchar(20) DEFAULT NULL,
  `zipcode` varchar(10) DEFAULT NULL,
  `profile_image` varchar(100) DEFAULT NULL,
  `verification_code` varchar(200) NOT NULL,
  `is_verified` tinyint(4) NOT NULL,
  `device_type` enum('android','ios','web') NOT NULL,
  `device_token` varchar(100) NOT NULL,
  `google_id` varchar(255) DEFAULT NULL,
  `facebook_id` varchar(255) DEFAULT NULL,
  `user_type` enum('seller','buyer','admin') NOT NULL,
  `is_subscribed` tinyint(4) NOT NULL,
  `customer_id` varchar(255) NOT NULL,
  `payment_id` varchar(255) NOT NULL,
  `transaction_id` varchar(255) NOT NULL,
  `subscription_startdate` datetime NOT NULL,
  `subscription_enddate` datetime NOT NULL,
  `status` tinyint(4) NOT NULL,
  `remember_token` varchar(255) NOT NULL,
  `is_deleted` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `phone_no`, `address`, `city`, `state`, `country`, `zipcode`, `profile_image`, `verification_code`, `is_verified`, `device_type`, `device_token`, `google_id`, `facebook_id`, `user_type`, `is_subscribed`, `customer_id`, `payment_id`, `transaction_id`, `subscription_startdate`, `subscription_enddate`, `status`, `remember_token`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', 'admin@admin.com', '$2y$10$USY.LaXm/uJhbhZHPEHct.N.TGUyn3OyGLzl3bnnROj6G7WAOBLE6', '700079830', 'Laxmi\r\nchowk,hinjawadi,Bhopal', '0', '0', '0', '845684', 'admin_image.jpg', '', 0, 'android', 'eYa0MRhz0IlS4Of01tKGtg:APA91bEQaWfMqc2XqjJAgcFB0zsTd0C41FhJbqXRYcS16IAxKczXosP2P9qu5WFu5dfnGrcRGWseO', '', '', 'admin', 0, '', '', '', '2022-01-29 10:10:57', '2022-01-29 10:10:57', 0, '', 0, '2021-09-27 09:41:30', '2022-01-25 07:37:50'),
(44, 'Darshan', 'Modi', 'darshan.modi@sapphiresolutions.net', '$2y$10$vVUiHFB1nrqq32LPtyx8s.D5ajdf4H3rc5VDtW3mpIU5sOlSrLW2.', '8140308596', NULL, NULL, NULL, NULL, NULL, NULL, '', 1, 'android', '', NULL, NULL, 'seller', 0, '', '', '', '2022-01-29 10:10:57', '2022-01-29 10:10:57', 1, '', 0, '2022-01-26 07:19:13', '2022-01-26 23:41:56'),
(45, 'Kamta', 'Gautam', 'kamtagautam285@gmail.com', '$2y$10$tSnFLdeIdGU5pVn16Nuw0.3v/EWkct2Ng9Ek7oy6E2.g0LZnmb.4e', '7000797130', NULL, NULL, NULL, NULL, NULL, NULL, '', 1, 'android', '', NULL, NULL, 'seller', 0, '', 'ch_3KNF52SGgtpHd5rC0WSJVbUB', 'txn_3KNF52SGgtpHd5rC0mFScfK1', '2022-01-29 11:27:24', '2022-01-29 10:10:57', 1, '', 0, '2022-01-27 00:31:05', '2022-01-29 07:47:24'),
(46, 'Jainil', 'Darji', 'jainildarji007@gmail.com', '$2y$10$sokJT/nt/lao7i3Wb5FxHuqVjq6cd.s7iVWDRfB7L5DKfyoPPHxEC', '9638094083', NULL, NULL, NULL, NULL, NULL, NULL, '', 1, 'android', '', NULL, NULL, 'seller', 0, '', '', '', '2022-01-29 10:26:21', '2022-01-29 10:26:21', 1, '', 0, '2022-01-28 23:26:21', '2022-01-28 23:27:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking_fee`
--
ALTER TABLE `booking_fee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stored_media`
--
ALTER TABLE `stored_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking_fee`
--
ALTER TABLE `booking_fee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `stored_media`
--
ALTER TABLE `stored_media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
