-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2025 at 04:52 PM
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
-- Database: `lesson_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `student_id` varchar(4) NOT NULL,
  `password` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_thai_520_w2;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `student_id`, `password`) VALUES
(1, '1234', '1234'),
(49, '1055', '1055'),
(50, '1056', '1056'),
(51, '1057', '1057'),
(52, '1058', '1058'),
(53, '1059', '1059'),
(54, '1060', '1060'),
(55, '1061', '1061'),
(56, '1062', '1062'),
(57, '1063', '1063'),
(58, '1064', '1064'),
(59, '1065', '1065'),
(60, '1066', '1066'),
(61, '1067', '1067'),
(62, '1068', '1068'),
(63, '1069', '1069'),
(64, '1070', '1070'),
(65, '1071', '1071'),
(66, '1072', '1072'),
(67, '1073', '1073'),
(68, '1074', '1074'),
(69, '1075', '1075'),
(70, '1076', '1076'),
(71, '1077', '1077'),
(72, '1078', '1078');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_id` (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
