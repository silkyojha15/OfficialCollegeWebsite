-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 11, 2019 at 07:28 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ggpf`
--
CREATE DATABASE IF NOT EXISTS `ggpf` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ggpf`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `ID` int(6) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `username`, `password`) VALUES
(1, 'silky', 'kishu123');

-- --------------------------------------------------------

--
-- Table structure for table `itfinal`
--

CREATE TABLE IF NOT EXISTS `itfinal` (
  `sid` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `en_no` varchar(20) NOT NULL,
  `trade` text NOT NULL,
  `father` varchar(30) NOT NULL,
  `mobile` int(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `itfinal`
--

INSERT INTO `itfinal` (`sid`, `name`, `en_no`, `trade`, `father`, `mobile`, `email`, `dob`) VALUES
(5, '0', '0', '0', '0', 2147483647, '0', '2001-08-15'),
(6, '0', '456373', '0', '0', 2147483647, '0', '2000-04-12'),
(7, 'abc', '456373', 'IT', 'ako', 2147483647, 'abcw@gmail.com', '2000-05-12'),
(8, 'Silky', 'E1620635600017', 'IT', 'Arun Kumar Ojha', 2147483647, 'silkyojha15@gmail.com', '2001-08-15'),
(9, 'abc', '456373', 'IT', 'ako', 2147483647, 'abcw@gmail.com', '1997-07-14');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `enroll` varchar(25) NOT NULL,
  `dob` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `enroll`, `dob`) VALUES
(3, 'E1620635600017', '2001-08-15'),
(4, '456373', '1997-07-14');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
