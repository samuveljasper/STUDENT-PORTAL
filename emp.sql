-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 29, 2025 at 07:09 AM
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
-- Database: `emp`
--

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

DROP TABLE IF EXISTS `log`;
CREATE TABLE IF NOT EXISTS `log` (
  `name` varchar(30) NOT NULL,
  `age` int NOT NULL,
  `Gen` varchar(10) NOT NULL,
  `addr` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `eid` varchar(20) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `pwd` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`name`, `age`, `Gen`, `addr`, `eid`, `uname`, `pwd`) VALUES
('aa', 12, 'M', 'yrrr\r\nrtgrtr', 'aryasb222@gmail.com', 'abc', '123'),
('jasa', 23, 'Male', 'dsft\r\ndfgn\r\nfgh', 'aryasb222@gmail.com', 'jasi', '123');

-- --------------------------------------------------------

--
-- Table structure for table `mark`
--

DROP TABLE IF EXISTS `mark`;
CREATE TABLE IF NOT EXISTS `mark` (
  `name` varchar(20) NOT NULL,
  `roll` int NOT NULL,
  `m1` int NOT NULL,
  `m2` int NOT NULL,
  `m3` int NOT NULL,
  `m4` int NOT NULL,
  `m5` int NOT NULL,
  `m6` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `mark`
--

INSERT INTO `mark` (`name`, `roll`, `m1`, `m2`, `m3`, `m4`, `m5`, `m6`) VALUES
('abc', 1000, 23, 45, 56, 56, 67, 67);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
