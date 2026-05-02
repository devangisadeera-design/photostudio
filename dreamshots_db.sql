-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 06, 2026 at 06:01 PM
-- Server version: 9.1.0
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dreamshots_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

DROP TABLE IF EXISTS `bookings`;
CREATE TABLE IF NOT EXISTS `bookings` (
  `booking_id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `photographer_id` int NOT NULL,
  `event_type` varchar(50) NOT NULL,
  `event_date` date NOT NULL,
  `slot_id` int DEFAULT NULL,
  `notes` text,
  `status` enum('pending','confirmed','cancelled') DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`booking_id`),
  KEY `user_id` (`user_id`),
  KEY `photographer_id` (`photographer_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`booking_id`, `user_id`, `photographer_id`, `event_type`, `event_date`, `slot_id`, `notes`, `status`, `created_at`) VALUES
(1, 1, 4, 'Fashion', '2026-03-31', NULL, 'heyyyy', 'cancelled', '2026-03-06 11:39:20'),
(2, 1, 1, 'Wedding', '2026-03-23', NULL, 'hallo', 'cancelled', '2026-03-06 11:40:39'),
(3, 1, 6, 'Wedding', '2026-03-24', NULL, 'heyyy love', 'confirmed', '2026-03-06 13:44:23'),
(4, 2, 6, 'Engagement', '2026-04-23', NULL, '', 'cancelled', '2026-03-06 14:16:06'),
(5, 1, 4, 'Portrait', '2026-04-16', NULL, 'are you ok', 'confirmed', '2026-03-06 14:30:18'),
(6, 1, 6, 'weddings', '2026-03-23', NULL, 'ok', 'confirmed', '2026-03-06 14:33:20'),
(7, 2, 1, 'Wedding', '2026-01-01', 2, 'ok', 'pending', '2026-03-06 15:51:35'),
(8, 1, 4, 'Corporate', '2026-01-01', 1, '', 'confirmed', '2026-03-06 15:53:36');

-- --------------------------------------------------------

--
-- Table structure for table `inquiries`
--

DROP TABLE IF EXISTS `inquiries`;
CREATE TABLE IF NOT EXISTS `inquiries` (
  `inquiry_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`inquiry_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inquiries`
--

INSERT INTO `inquiries` (`inquiry_id`, `name`, `email`, `subject`, `message`, `created_at`) VALUES
(1, 'Devangi Sadeera', 'devangisadeera@gmail.com', 'hhhl', 'hii', '2026-03-06 10:35:59'),
(2, 'Devangi Sadeera', 'devangisadeera@gmail.com', 'hhhl', 'wjrpir', '2026-03-06 13:45:16');

-- --------------------------------------------------------

--
-- Table structure for table `photographers`
--

DROP TABLE IF EXISTS `photographers`;
CREATE TABLE IF NOT EXISTS `photographers` (
  `photographer_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `specialization` varchar(100) NOT NULL,
  PRIMARY KEY (`photographer_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `photographers`
--

INSERT INTO `photographers` (`photographer_id`, `name`, `specialization`) VALUES
(1, 'John Doe', 'Wedding'),
(4, 'Sarah Williams', 'Fashion'),
(5, 'David Brown', 'Engagement'),
(6, 'Anjana Vishwajith', 'weddings');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

DROP TABLE IF EXISTS `portfolio`;
CREATE TABLE IF NOT EXISTS `portfolio` (
  `id` int NOT NULL AUTO_INCREMENT,
  `photographer_id` int DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `caption` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `photographer_id` (`photographer_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `service_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` text,
  `duration` varchar(50) DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  PRIMARY KEY (`service_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_id`, `name`, `description`, `duration`, `price`) VALUES
(1, 'Anjana Vishwajith', 'Homecoming', '3 hours', 11.21),
(2, 'Senuka', 'Homecoming', '3 hours', 0.19);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
CREATE TABLE IF NOT EXISTS `settings` (
  `setting_key` varchar(50) NOT NULL,
  `setting_value` text,
  PRIMARY KEY (`setting_key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `time_slots`
--

DROP TABLE IF EXISTS `time_slots`;
CREATE TABLE IF NOT EXISTS `time_slots` (
  `slot_id` int NOT NULL AUTO_INCREMENT,
  `slot_time` time NOT NULL,
  `is_active` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`slot_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `time_slots`
--

INSERT INTO `time_slots` (`slot_id`, `slot_time`, `is_active`) VALUES
(2, '20:18:00', 1),
(3, '12:23:00', 0),
(4, '03:33:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `reset_token` varchar(64) DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `role` varchar(20) NOT NULL DEFAULT 'customer',
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `password`, `reset_token`, `reset_expires`, `created_at`, `role`) VALUES
(1, 'Devangi Perera', 'devangisadeera@gmail.com', '$2y$10$gEr785qwyy7eFlV8Wsiz..miNLqZdIzIScjJk0W2766PbMN274hBC', 'aa032fcde1a9ca9ab48c993c2b05b6d8b7ab5dff7a3d12b3129941b2f5a9a2cf', '2026-03-06 16:16:24', '2026-03-06 10:33:52', 'customer'),
(2, 'Admin', 'admin@example.com', '$2y$10$3IKZRi0P//QQdCxi8vfAlefYYLdmcD0Vem3bV7Mk38ycnYas1Aa/a', NULL, NULL, '2026-03-06 11:44:43', 'admin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
