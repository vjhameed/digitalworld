-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2017 at 11:30 AM
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
  `cnic` text NOT NULL,
  `phone` text NOT NULL,
  `code` int(11) NOT NULL,
  `method` text NOT NULL,
  `amount` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registertrans`
--

INSERT INTO `registertrans` (`id`, `transid`, `trx`, `cnic`, `phone`, `code`, `method`, `amount`) VALUES
(30, 59, 0, '0', '0', 0, '', 0),
(31, 60, 0, '0', '0', 0, '', 0),
(32, 62, 0, '0', '0', 0, '', 0),
(33, 63, 0, '0', '0', 0, '', 0),
(34, 64, 0, '0', '0', 0, '', 0),
(35, 65, 0, '0', '0', 0, '', 0),
(36, 66, 0, '0', '0', 0, '', 0),
(37, 67, 0, '0', '0', 0, '', 0),
(38, 68, 0, '0', '0', 0, '', 0),
(39, 69, 0, '0', '0', 0, '', 0),
(40, 70, 0, '0', '0', 0, '', 0),
(41, 71, 0, '0', '0', 0, '', 0);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
