-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2018 at 04:36 PM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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

CREATE TABLE `logs` (
  `Id` int(255) NOT NULL,
  `User` varchar(32) NOT NULL,
  `Time` varchar(32) NOT NULL,
  `Date` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`Id`, `User`, `Time`, `Date`) VALUES
(24, 'Ivana', '11:02:15', '20. 2. 2018'),
(21, 'Pipac', '20:32:41', '19. 2. 2018'),
(23, 'Dejan', '23:37:02', '19. 2. 2018');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(255) NOT NULL,
  `User` varchar(32) NOT NULL,
  `ModStat` varchar(32) NOT NULL,
  `Pass` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
