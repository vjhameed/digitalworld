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
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `userEmail` text NOT NULL,
  `subject` text NOT NULL,
  `body` text NOT NULL,
  `date` date NOT NULL,
  `userName` text NOT NULL,
  `status` text NOT NULL,
  `number` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `userEmail`, `subject`, `body`, `date`, `userName`, `status`, `number`) VALUES
(4, 'vjhameed3@gmail.com', 'product', 'this is a compalint', '2017-09-08', 'hameed', 'complete', ''),
(5, 'vjhameed3@gmail.com', 'product', 'this is a compalint', '2017-09-08', 'hameed', 'complete', ''),
(6, 'vjhameed3@gmail.com', 'suggestions', 'this si amsg', '2017-09-08', 'hameed', 'complete', '03212199355'),
(7, 'vjhameed3@gmail.com', 'suggestions', 'this is a support msg', '2017-09-08', 'hameed', 'pending', '03212199355');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
