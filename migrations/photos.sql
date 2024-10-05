-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2024 at 04:11 PM
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
-- Database: `photos`
--

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `PhotoID` int(11) NOT NULL,
  `LargePath` varchar(200) NOT NULL,
  `ThumbPath` varchar(200) NOT NULL,
  `PhotoName` varchar(200) NOT NULL,
  `Description` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `photos`
--

-- Убедитесь, что вы находитесь в нужной базе данных

INSERT INTO `photos` (`LargePath`, `ThumbPath`, `PhotoName`, `Description`) VALUES
('John Lennon.jpg', 'John Lennon_small.jpg', 'Джон Леннон', 'Джон Леннон - выдающийся музыкант. Лидер молодежных движений 60-70ых. Муж Йоко Оно.'),
('Karl Marx.jpg', 'Karl Marx_small.jpg', 'Карл Маркс', 'Карл Маркс - философ, экономист, социолог и политический деятель, создатель марксизма.'),
('Naomi Campbell.jpg', 'Naomi Campbell_small.jpg', 'Наоми Кэмпбелл', 'Наоми Кэмпбелл - известная британская модель и актриса, одна из самых популярных супермоделей 90-х.'),
('Paris Hilton.jpg', 'Paris Hilton_small.jpg', 'Пэрис Хилтон', 'Пэрис Хилтон - американская светская львица, бизнесвумен и модель, известная своей культурой знаменитостей.');


--
-- Indexes for dumped tables
--

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`PhotoID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `PhotoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
