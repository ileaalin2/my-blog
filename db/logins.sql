-- phpMyAdmin SQL Dump
-- version 4.3.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 07, 2015 at 08:23 AM
-- Server version: 5.5.41-MariaDB
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ilear`
--

-- --------------------------------------------------------

--
-- Table structure for table `logins`
--

CREATE TABLE IF NOT EXISTS `logins` (
  `ID` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logins`
--

INSERT INTO `logins` (`ID`, `email`, `password`) VALUES
(1, 'mihai.sampaleanu@gmail.com', '3235764f63fe6cd6a1a8001b8c69a0934343387a'),
(2, 'alin.ilea@gmail.com', '1d5063a5cb0c5a8978069c0e81c8a98e07062d51'),
(3, 'roxana.girdan@gmail.com', '772d2d27fac0830695145d42f3a4005f536c9330'),
(4, 'daniel.mocanu@gmail.com', '772d2d27fac0830695145d42f3a4005f536c9330'),
(6, 'testdebonus@yahoo.com', '4daa6b695bb07c86f0ba372a1a02000a63619d66'),
(9, 'denisa.ilea@gmail.com', 'd9c1464f97d663478c798673b72d2d722d7fad9e'),
(12, 'mihai.sampaleanu@yahoo.com', 'ebb5e7cb22cd95a1aed216e793c7c313286f6e81'),
(17, 'alin.ilea@yahoo.com', '4daa6b695bb07c86f0ba372a1a02000a63619d66'),
(18, 'mihai.sampaleanu@mail.com', '4daa6b695bb07c86f0ba372a1a02000a63619d66'),
(19, 'dani.simon@gmail.com', '4daa6b695bb07c86f0ba372a1a02000a63619d66'),
(21, 'dani.simon@mail.com', 'd9c1464f97d663478c798673b72d2d722d7fad9e'),
(27, 'dani.simon@yahoo.com', '4daa6b695bb07c86f0ba372a1a02000a63619d66'),
(28, 'dani.simon1@yahoo.com', '4daa6b695bb07c86f0ba372a1a02000a63619d66'),
(29, 'alin.ilea@ail.com', '4daa6b695bb07c86f0ba372a1a02000a63619d66'),
(30, 'paul.ciosan@yahoo.com', '4daa6b695bb07c86f0ba372a1a02000a63619d66'),
(31, 'paul.ciosan@gmail.com', '4daa6b695bb07c86f0ba372a1a02000a63619d66'),
(32, 'andrei.lazurca@yahoo.com', '64bac7b2b701589b90106fe17bd2baff5f9e82fa'),
(33, 'alin.ilea@gmail.com', '4daa6b695bb07c86f0ba372a1a02000a63619d66'),
(34, 'alin.ilea2@gmail.com', '4daa6b695bb07c86f0ba372a1a02000a63619d66'),
(35, 'alin.ilea3@gmail.com', '4daa6b695bb07c86f0ba372a1a02000a63619d66'),
(36, 'ancabalc@gmail.com', '34f48036930d9941842b411fdf2871ead8928d4e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `logins`
--
ALTER TABLE `logins`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `logins`
--
ALTER TABLE `logins`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
