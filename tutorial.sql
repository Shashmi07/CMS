-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 27, 2024 at 11:14 AM
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
-- Database: `tutorial`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

DROP TABLE IF EXISTS `attendance`;
CREATE TABLE IF NOT EXISTS `attendance` (
  `attendance_id` int NOT NULL AUTO_INCREMENT,
  `participant_id` int NOT NULL,
  `session_id` int NOT NULL,
  `check_in_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`attendance_id`),
  KEY `participant_id` (`participant_id`),
  KEY `session_id` (`session_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `conference_schedule`
--

DROP TABLE IF EXISTS `conference_schedule`;
CREATE TABLE IF NOT EXISTS `conference_schedule` (
  `schedule_id` int NOT NULL AUTO_INCREMENT,
  `time_slot` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `event_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `location` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`schedule_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `conference_schedule`
--

INSERT INTO `conference_schedule` (`schedule_id`, `time_slot`, `event_name`, `location`) VALUES
(1, '09:00 AM - 10:00 AM', 'Keynote Speech', 'Main Hall'),
(2, '10:15 AM - 12:00 PM', 'Research Presentations (Track A)', 'Room 101'),
(3, '10:15 AM - 12:00 PM', 'Research Presentations (Track B)', 'Room 102'),
(4, '12:00 PM - 01:00 PM', 'Lunch Break', 'Cafeteria'),
(5, '01:00 PM - 03:00 PM', 'Panel Discussion', 'Main Hall'),
(6, '03:15 PM - 05:00 PM', 'Workshops', 'Rooms 201-203');

-- --------------------------------------------------------

--
-- Table structure for table `participant`
--

DROP TABLE IF EXISTS `participant`;
CREATE TABLE IF NOT EXISTS `participant` (
  `participant_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `organization` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `sessions_registered` text COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`participant_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `participant`
--

INSERT INTO `participant` (`participant_id`, `name`, `email`, `organization`, `sessions_registered`) VALUES
(1, 'Shashmi Amadi', 'amadi@gmail.com', 'ITUM,IT Department', 'Session 2,Session 3');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE IF NOT EXISTS `sessions` (
  `session_id` int NOT NULL AUTO_INCREMENT,
  `track_id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `speaker` varchar(255) NOT NULL,
  `time` datetime NOT NULL,
  `venue` varchar(255) NOT NULL,
  `capacity` int NOT NULL,
  `registered_count` int DEFAULT '0',
  PRIMARY KEY (`session_id`),
  KEY `track_id` (`track_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `session_details`
--

DROP TABLE IF EXISTS `session_details`;
CREATE TABLE IF NOT EXISTS `session_details` (
  `session_id` int NOT NULL AUTO_INCREMENT,
  `session_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `session_date` date NOT NULL,
  `session_time` time NOT NULL,
  `room_number` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`session_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `session_details`
--

INSERT INTO `session_details` (`session_id`, `session_name`, `session_date`, `session_time`, `room_number`) VALUES
(1, 'Session 1', '2024-01-15', '10:00:00', '101'),
(2, 'Session 2', '2024-01-16', '14:00:00', '202'),
(3, 'Session 3', '2024-01-17', '11:30:00', '303');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `Username` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Email` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Age` int DEFAULT NULL,
  `Password` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `Username`, `Email`, `Age`, `Password`) VALUES
(2, 'Shashmi Amadi', 'amadi@gmail.com', 23, 'amadi123'),
(4, 'Sethmi Prasadi', 'prasadi@gmail.com', 20, 'prasadi'),
(5, 'Tharusha', 'tharusha@gmail.com', 22, 'tharusha'),
(6, 'Kamal Perera', 'kamal@gmail.com', 25, '1234');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
