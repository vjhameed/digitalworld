-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2017 at 04:50 PM
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
-- Table structure for table `withdrawtrans`
--

CREATE TABLE `withdrawtrans` (
  `id` int(11) NOT NULL,
  `transid` int(11) NOT NULL,
  `cnic` text NOT NULL,
  `phone` text NOT NULL,
  `method` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `withdrawtrans`
--

INSERT INTO `withdrawtrans` (`id`, `transid`, `cnic`, `phone`, `method`) VALUES
(6, 61, '0', '32121', 'easypaisa'),
(7, 74, '42401', '03212199355', 'easypaisa'),
(8, 75, '42401', '03212199355', 'easypaisa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `withdrawtrans`
--
ALTER TABLE `withdrawtrans`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `withdrawtrans`
--
ALTER TABLE `withdrawtrans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
