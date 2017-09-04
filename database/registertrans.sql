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
-- Table structure for table `registertrans`
--

CREATE TABLE `registertrans` (
  `id` int(11) NOT NULL,
  `transid` int(11) NOT NULL,
  `trx` int(11) NOT NULL,
  `cnic` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `code` int(11) NOT NULL,
  `method` text NOT NULL,
  `amount` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registertrans`
--

INSERT INTO `registertrans` (`id`, `transid`, `trx`, `cnic`, `phone`, `code`, `method`, `amount`) VALUES
(10, 36, 0, 0, 0, 0, '', 0),
(9, 35, 0, 0, 0, 0, '', 0),
(8, 34, 0, 0, 0, 0, '', 0),
(7, 33, 0, 0, 0, 0, '', 0),
(6, 31, 42401, 4204, 2147483647, 5555, '', 0),
(11, 37, 0, 0, 0, 0, '', 0),
(12, 38, 0, 0, 0, 0, '', 0),
(13, 39, 0, 0, 0, 0, '', 0),
(14, 40, 13234, 1255, 32121, 555, 'easypaisa', 0),
(15, 41, 0, 0, 0, 0, '', 0),
(16, 42, 0, 0, 0, 0, '', 0),
(17, 43, 0, 0, 0, 0, '', 0),
(18, 44, 0, 0, 0, 0, '', 0),
(19, 45, 0, 0, 0, 0, '', 0),
(20, 46, 0, 0, 0, 0, '', 0),
(21, 47, 0, 0, 0, 0, '', 0),
(22, 48, 0, 0, 0, 0, '', 0),
(23, 49, 0, 0, 0, 0, '', 0),
(24, 50, 0, 0, 0, 0, '', 0),
(25, 51, 0, 0, 0, 0, '', 0),
(26, 52, 0, 0, 0, 0, '', 0),
(27, 53, 0, 0, 0, 0, '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registertrans`
--
ALTER TABLE `registertrans`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registertrans`
--
ALTER TABLE `registertrans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
