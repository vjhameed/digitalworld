-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2017 at 05:58 PM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digitalworld`
--

-- --------------------------------------------------------

--
-- Table structure for table `levelearning`
--

CREATE TABLE `levelearning` (
  `id` int(11) NOT NULL,
  `userName` text NOT NULL,
  `first` int(11) NOT NULL,
  `second` int(11) NOT NULL,
  `third` int(11) NOT NULL,
  `fourth` int(11) NOT NULL,
  `fifth` int(11) NOT NULL,
  `sixth` int(11) NOT NULL,
  `seventh` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `levelearning`
--

INSERT INTO `levelearning` (`id`, `userName`, `first`, `second`, `third`, `fourth`, `fifth`, `sixth`, `seventh`) VALUES
(2, 'vjhameed1', 40, 36, 30, 20, 16, 10, 6),
(3, 'vjhameed2', 40, 36, 30, 20, 16, 10, 0),
(4, 'vjhameed3', 40, 36, 30, 20, 16, 0, 0),
(5, 'vjhameed4', 40, 36, 30, 20, 0, 0, 0),
(6, 'vjhameed5', 40, 36, 30, 0, 0, 0, 0),
(7, 'vjhameed6', 40, 36, 0, 0, 0, 0, 0),
(8, 'vjhameed7', 40, 0, 0, 0, 0, 0, 0),
(9, 'vjhameed8', 0, 0, 0, 0, 0, 0, 0),
(10, 'vjhameed12', 0, 0, 0, 0, 0, 0, 0),
(11, 'vjhameed15', 0, 0, 0, 0, 0, 0, 0),
(12, 'vjhameed16', 0, 0, 0, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `levelearning`
--
ALTER TABLE `levelearning`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `levelearning`
--
ALTER TABLE `levelearning`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
