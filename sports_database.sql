-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2022 at 06:54 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sports_database`
--
CREATE DATABASE IF NOT EXISTS `sports_database` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `sports_database`;

-- --------------------------------------------------------

--
-- Table structure for table `bookground`
--

DROP TABLE IF EXISTS `bookground`;
CREATE TABLE IF NOT EXISTS `bookground` (
  `bkid` int(11) NOT NULL AUTO_INCREMENT,
  `sid` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `ground` varchar(50) NOT NULL,
  `start` varchar(50) NOT NULL,
  `ending` varchar(50) NOT NULL,
  PRIMARY KEY (`bkid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookground`
--

INSERT INTO `bookground` (`bkid`, `sid`, `fname`, `ground`, `start`, `ending`) VALUES
(3, '1000', 'kelly', 'Stadium 1', '11-20-2020', '11-22-2020'),
(4, '12345', 'ronald', 'Stadium 1', '12-22-2020', '12-24-2020'),
(5, '3383', 'anthony', 'Stadium 1', '10-20-2020', '10-24-2020');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

DROP TABLE IF EXISTS `members`;
CREATE TABLE IF NOT EXISTS `members` (
  `memberid` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `student_id` varchar(50) NOT NULL,
  `school` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`memberid`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`memberid`, `fname`, `lname`, `email`, `student_id`, `school`, `password`) VALUES
(1, '', '', '', '', '', ''),
(2, 'test', 'test', 'test@gmail.com', '1234', 'kingston', '1234'),
(3, 'kelly', 'kane', 'kelly@gmail.com', '1000', 'brooklyn', '1212'),
(4, '', '', '', '', '', ''),
(5, 'peter', 'kigan', 'peter@gmail.com', '  1111', 'petersburg', '1111'),
(6, 'allan', 'allan', 'allan@gmail.com', '9999', 'kingston', '9999'),
(7, 'alex', 'alex', 'test@gmail.com', '9000', 'brooklyn', '9000'),
(8, '', 'dasas', '', '', '', ''),
(9, '', 'dsfsd', '', '', '', ''),
(10, 'ddasd', '', '', '', '', ''),
(11, '', 'sas', '', '', '', ''),
(12, '', '', 'test@gmail.com', '', '', ''),
(13, 'john', '', '', '', '', ''),
(14, 'jane', 'jane', 'jane@gmail.com', '1234', 'brooklyn', ''),
(15, 'wayne', 'wayne', 'wayne@gmail.com', '1900', 'brooklyn', 'wayne'),
(16, 'donald', 'trump', 'trump@gmail.com', '1991', 'brooklyn', '1991'),
(17, 'ronald', 'ronald', 'ronald@gmail.com', '12345', 'kingston', '12345'),
(18, 'antony', 'kigan', 'antony@gmail.com', '123456', 'brooklyn', '123456'),
(19, 'anthony', 'muthui', 'antony45@gmail.com', '3383', 'brooklyn', '33830561m!');

-- --------------------------------------------------------

--
-- Table structure for table `trainingmembership`
--

DROP TABLE IF EXISTS `trainingmembership`;
CREATE TABLE IF NOT EXISTS `trainingmembership` (
  `trainingid` int(20) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `sid` varchar(50) NOT NULL,
  `teamid` varchar(50) NOT NULL,
  `teamname` varchar(50) NOT NULL,
  `trainingname` varchar(50) NOT NULL,
  `sportsname` varchar(50) NOT NULL,
  PRIMARY KEY (`trainingid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trainingmembership`
--

INSERT INTO `trainingmembership` (`trainingid`, `fname`, `lname`, `sid`, `teamid`, `teamname`, `trainingname`, `sportsname`) VALUES
(1, 'donald', 'trump', '1991', 'devils', '1000', 'tackling', 'cricket'),
(2, 'donald', 'trump', '1991', 'devils', 'cricket', 'cricket', 'cricket'),
(3, 'donald', 'trump', '1991', 'devils', 'cricket', 'cricket', 'cricket'),
(4, 'donald', 'trump', '1991', 'devils', 'cricket', 'cricket', 'cricket'),
(5, 'ronald', 'ronald', '12345', 'devils', '323', 'tackling', 'football');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
