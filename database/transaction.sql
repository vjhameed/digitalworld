-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2017 at 10:16 AM
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
(47, 90, 'hameedkhan', 'vjhameed6@gmail.com', 'vjhameed6', 'waiting', 200, '2017-09-03', 'registration'),
(46, 89, 'hameedkhan', 'vjhameed5@gmail.com', 'vjhameed5', 'waiting', 200, '2017-09-03', 'registration'),
(45, 88, 'hameedkhan', 'vjhameed5@gmail.com', 'vjhameed5', 'waiting', 200, '2017-09-03', 'registration'),
(44, 87, 'hameedkhan', 'vjhameed4@gmail.com', 'vjhameed4', 'waiting', 200, '2017-09-03', 'registration'),
(43, 86, 'hameedkhan', 'vjhameed2@gmail.com', 'vjhameed2', 'waiting', 200, '2017-09-03', 'registration'),
(42, 85, 'hameedkhan', 'vjhameed1@gmail.com', 'vjhameed1', 'waiting', 200, '2017-09-03', 'registration'),
(41, 84, 'hameedkhan', 'vjhameed1@gmail.com', 'vjhameed1', 'waiting', 200, '2017-09-03', 'registration'),
(40, 83, 'hameedkhan', 'vjhameed3@gmail.com', 'vjhameed3', 'pending', 2, '2017-09-03', 'registration'),
(39, 82, 'iqbalkhan', 'iqbal@gmail.com', 'iqbal', 'waiting', 2, '2017-08-29', 'registration'),
(38, 81, 'hameedkhan', 'vjhameed3@gmail.com', 'vjhameed3', 'pending', 2, '2017-08-29', 'registration'),
(37, 80, 'hameedkhan', 'vjhameed4@gmail.com', 'vjhameed4', 'waiting', 2, '2017-08-29', 'registration'),
(36, 79, 'hameedkhan', 'vjhameed3@gmail.com', 'vjhameed3', 'pending', 2, '2017-08-28', 'registration'),
(35, 78, 'hameedkhan', 'iqbal1@gmail.com', 'iqbal1@gmail.com', 'waiting', 2, '2017-08-28', 'registration'),
(34, 77, 'hameedkhan', 'iqbal@gmail.com', 'iqbal', 'waiting', 2, '2017-08-28', 'registration'),
(33, 76, 'iqbalkhan', 'vjhameed4@gmail.com', 'vjhameed4', 'waiting', 2, '2017-08-27', 'registration'),
(31, 75, 'hameedkhan', 'vjhameed3@gmail.com', 'vjhameed3', 'pending', 2, '2017-08-26', 'registration'),
(32, 75, 'hameedkhan', 'vjhameed3@gmail.com', 'vjhameed3', 'pending', 9, '2017-08-26', 'withdrawal'),
(48, 91, 'hameedkhan', 'vjhameed7@gmail.com', 'vjhameed7', 'waiting', 200, '2017-09-03', 'registration'),
(49, 92, 'hameedkhan', 'vjhameed8@gmail.com', 'vjhameed8', 'waiting', 200, '2017-09-03', 'registration'),
(50, 93, 'hameedkhan', 'vjhameed9@gmail.com', 'vjhameed9', 'waiting', 200, '2017-09-03', 'registration'),
(51, 94, 'hameedkhan', 'vjhameed10@gmail.com', 'vjhameed10', 'waiting', 200, '2017-09-04', 'registration'),
(52, 95, 'hameedkhan', 'vjhameed11@gmail.com', 'vjhameed11', 'waiting', 200, '2017-09-04', 'registration'),
(53, 96, 'hameedkhan', 'vjhameed11@gmail.com', 'vjhameed11', 'waiting', 200, '2017-09-04', 'registration');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
