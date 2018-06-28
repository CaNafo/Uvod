-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 28, 2018 at 01:08 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uvod`
--

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

DROP TABLE IF EXISTS `logs`;
CREATE TABLE IF NOT EXISTS `logs` (
  `Id` int(255) NOT NULL AUTO_INCREMENT,
  `User` varchar(32) NOT NULL,
  `Time` varchar(32) NOT NULL,
  `Date` varchar(32) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`Id`, `User`, `Time`, `Date`) VALUES
(27, 'Ivana', '23:59:18', '27. 6. 2018'),
(21, 'Pipac', '20:32:41', '19. 2. 2018'),
(23, 'Dejan', '23:37:02', '19. 2. 2018');

-- --------------------------------------------------------

--
-- Table structure for table `prezentacije`
--

DROP TABLE IF EXISTS `prezentacije`;
CREATE TABLE IF NOT EXISTS `prezentacije` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Link` varchar(256) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prezentacije`
--

INSERT INTO `prezentacije` (`ID`, `Link`) VALUES
(19, 'https://onedrive.live.com/embed?resid=63AA891890832510%21556&amp;authkey=%21AKikM6-sVkxSB98&amp;em=2&amp;wdAr=1.3333333333333333\" width=\"350px\" height=\"286px\" frameborder=\"0\">This is an embedded <a target=\"_blank\" href=\"https://office.com\"'),
(21, '\"https://onedrive.live.com/embed?resid=63AA891890832510%21683&amp;authkey=%21AI1bck6NGhCefUQ&amp;em=2&amp;wdAr=1.3333333333333333\" width=\"350px\" height=\"286px\" frameborder=\"0\">This is an embedded <a target=\"_blank\" href=\"https://office.com\"'),
(22, '\"https://onedrive.live.com/embed?resid=63AA891890832510%21558&amp;authkey=%21AAZqZvzpAfRpqno&amp;em=2&amp;wdAr=1.3333333333333333\" width=\"350px\" height=\"286px\" frameborder=\"0\">This is an embedded <a target=\"_blank\" href=\"https://office.com\"');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `Id` int(255) NOT NULL AUTO_INCREMENT,
  `User` varchar(32) NOT NULL,
  `ModStat` varchar(32) NOT NULL,
  `Pass` varchar(256) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `User`, `ModStat`, `Pass`) VALUES
(4, 'User', '', 'cdfe07b5b873d48c260f8caae5dcb355c3188117'),
(3, 'Silvija', '', '87d911c74e9a3314761f98f4377f21a83c0a4192'),
(2, 'Ivana', 'A', '0d2e2120114236327dd26e600dceb2bcfec778c0'),
(1, 'Admin', 'A', 'a3a5a27a7bb5d7edceabf4565a903cec19885492'),
(5, 'Dejan', '', 'e3431a8e0adbf96fd140103dc6f63a3f8fa343ab'),
(6, 'Test', '', '58bd2c615ce3fbfa69b1e0e309b610e40cb4c83f'),
(7, 'Pipac', '', 'e3431a8e0adbf96fd140103dc6f63a3f8fa343ab');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
