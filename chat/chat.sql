-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2024 at 05:09 PM
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
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `MessageID` int(11) NOT NULL,
  `UserName` varchar(15) NOT NULL,
  `Message` varchar(20) NOT NULL,
  `Timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`MessageID`, `UserName`, `Message`, `Timestamp`) VALUES
(1, 'Yuri', 'Привет всем!', '2024-10-19 16:25:26'),
(2, 'Vasya', 'Привет, Юрий!', '2024-10-19 16:25:26'),
(3, 'MASHA', 'Привет, мальчики!', '2024-10-19 17:26:55'),
(4, 'MASHA', 'Привет, мальчики!', '2024-10-19 17:26:55'),
(5, 'MASHA', 'Привет, мальчики!', '2024-10-19 17:27:04'),
(6, 'MASHA', 'Привет, мальчики!', '2024-10-19 17:27:19'),
(7, 'MASHA', 'Привет, мальчики!', '2024-10-19 17:27:22'),
(8, 'MASHA', 'Привет, мальчики!', '2024-10-19 17:27:25'),
(9, 'MASHA', 'Привет, мальчики!', '2024-10-19 17:27:28'),
(10, 'MASHA', 'Привет, мальчики!', '2024-10-19 17:27:31'),
(11, 'MASHA', 'Привет, мальчики!', '2024-10-19 17:27:34'),
(12, 'MASHA', 'Привет, мальчики!', '2024-10-19 17:27:37'),
(13, 'MASHA', 'Привет, мальчики!', '2024-10-19 17:27:40'),
(14, 'MASHA', 'Привет, мальчики!', '2024-10-19 17:27:43'),
(15, 'MASHA', 'Привет, мальчики!', '2024-10-19 17:27:47'),
(16, 'Yuri', '???', '2024-10-19 17:39:05'),
(17, 'Yuri', 'Ура!', '2024-10-19 17:39:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`MessageID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `MessageID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
