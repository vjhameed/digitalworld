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
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `username` text NOT NULL,
  `status` text NOT NULL,
  `Amount` double NOT NULL,
  `date` date NOT NULL,
  `type` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `userid`, `name`, `email`, `username`, `status`, `Amount`, `date`, `type`) VALUES
(73, 15, 'hameedkhan', 'vjhameed16@gmail.com', 'vjhameed16', 'waiting', 200, '2017-09-09', 'registration'),
(72, 14, 'hameedkhan', 'vjhameed15@gmail.com', 'vjhameed15', 'waiting', 200, '2017-09-09', 'registration'),
(71, 13, 'hameedkhan', 'vjhameed12@gmail.com', 'vjhameed12', 'waiting', 200, '2017-09-08', 'registration'),
(70, 12, 'hameedkhan', 'vjhameed8@gmail.com', 'vjhameed8', 'waiting', 200, '2017-09-08', 'registration'),
(69, 11, 'hameedkhan', 'vjhameed7@gmail.com', 'vjhameed7', 'waiting', 200, '2017-09-08', 'registration'),
(68, 10, 'hameedkhan', 'vjhameed6@gmail.com', 'vjhameed6', 'waiting', 200, '2017-09-08', 'registration'),
(67, 9, 'hameedkhan', 'vjhameed5@gmail.com', 'vjhameed5', 'waiting', 200, '2017-09-08', 'registration'),
(66, 8, 'hameedkhan', 'vjhameed4@gmail.com', 'vjhameed4', 'waiting', 200, '2017-09-08', 'registration'),
(65, 7, 'hameedkhan', 'vjhameed3@gmail.com', 'vjhameed3', 'waiting', 200, '2017-09-08', 'registration'),
(63, 5, 'hameedkhan', 'vjhameed1@gmail.com', 'vjhameed1', 'waiting', 200, '2017-09-08', 'registration'),
(64, 6, 'hameedkhan', 'vjhameed2@gmail.com', 'vjhameed2', 'waiting', 200, '2017-09-08', 'registration'),
(62, 4, 'hameedkhan', 'vjhameed4@gmail.com', 'vjhameed4', 'waiting', 200, '2017-09-08', 'registration'),
(61, 3, 'hameedkhan', 'vjhameed3@gmail.com', 'vjhameed3', 'pending', 1000, '2017-09-08', 'withdrawal'),
(59, 3, '21fjabjbjvbjvab', 'vjhameed14@gmail.com', 'vjhameed', 'complete', 200, '2017-09-08', 'withdrawal'),
(60, 3, 'hameedkhan', 'vjhameed3@gmail.com', 'vjhameed3', 'pending', 200, '2017-09-08', 'withdrawal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
