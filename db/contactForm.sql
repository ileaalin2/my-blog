-- phpMyAdmin SQL Dump
-- version 4.3.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 07, 2015 at 08:22 AM
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
-- Table structure for table `contactForm`
--

CREATE TABLE IF NOT EXISTS `contactForm` (
  `ID` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactForm`
--

INSERT INTO `contactForm` (`ID`, `first_name`, `last_name`, `phone`, `email`, `message`) VALUES
(1, 'Marius', 'Bodea', '723123456', 'mariusbodea@mail.com', 'Test'),
(2, 'Radu Alin', 'Ilea', '0740193024', 'ilea.alin@myaddress.com', 'Mail Storage Test Mail Storage Test Mail Storage Test Mail \r\nStorage Test Mail Storage Test Mail Storage Test Mail Storage \r\nTest Mail Storage Test Mail Storage Test Mail Storage Test Mail \r\nStorage Test Mail Storage Test Mail Storage Test Mail Storage \r\nTest Mail Storage Test Mail Storage Test Mail Storage Test Mail \r\nStorage Test Mail Storage Test Mail Storage Test Mail Storage \r\nTest Mail Storage Test Mail Storage Test Mail Storage Test Mail \r\nStorage Test Mail Storage Test Mail Storage Test Mail Storage \r\nTest Mail Storage Test Mail Storage Test Mail Storage Test Mail \r\nStorage Test Mail Storage Test Mail Storage Test Mail Storage \r\nTest Mail Storage Test Mail Storage Test Mail Storage Test Mail \r\nStorage Test Mail Storage Test Mail Storage Test '),
(3, 'Dora', 'Hanganu', '', 'hanganudora@yahoo.com', 'Mail Storage test: without inserting the phone number'),
(4, 'Paul', 'Ciosan', '', 'PAULCIOSAN@GMAIL.COM', 'SALUT!'),
(5, 'Paul', 'Ciosan', '', 'PAULCIOSAN@GMAIL.COM', 'SALUT!'),
(6, 'Dani', 'Simon', '', 'danisimon@yahoo.com', 'Sautari!'),
(7, 'Robert', 'Echert', '', 'robert_echert@mail.com', 'Salutari de pe Vladeasa!'),
(8, 'Radu Alin', 'Ilea', '', 'ilea.alin@myaddress.com', 'Salut!'),
(9, 'Dora', 'Hanganu', '', 'dorahanganu@mail.com', 'Salutari!'),
(10, 'Daniel', 'Mocan', '', 'contact_daniel@yahoo.com', 'Sa imi zici daca ai primit mail-ul.\r\n\r\nSpor la coding.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactForm`
--
ALTER TABLE `contactForm`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactForm`
--
ALTER TABLE `contactForm`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
