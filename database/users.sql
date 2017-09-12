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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `country` text NOT NULL,
  `city` text NOT NULL,
  `refid` text,
  `package` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`, `country`, `city`, `refid`, `package`) VALUES
(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, 'OhR2f4E7rhCRQXttjsZlBO', 1268889823, 1505234804, 1, 'Admin', 'istrator', 'ADMIN', '0', '', '', '', ''),
(5, '::1', 'vjhameed1', '$2y$08$5PUxuw069p1fPab9tvAGTuqmoKkdQnYK8GfsUq4hRhJnzuJFptjGm', NULL, 'vjhameed1@gmail.com', '3443c76110eb69f27ec08bdfb3f462a791a25856', NULL, NULL, 'FIiNRO7wMrHmPBXygI0Y5O', 1504856778, 1505234012, 1, 'hameed', 'khan', '', '03420803510', 'pakistan', 'city', '', 'basic'),
(6, '::1', 'vjhameed2', '$2y$08$j6TzTkAwMJ7QNXQ91WdhkeiYmewqlfjsubjwOvytzgw5MYVk0MEe6', NULL, 'vjhameed2@gmail.com', NULL, NULL, NULL, NULL, 1504856843, NULL, 1, 'hameed', 'khan', '', '03420803510', 'pakistan', 'city', '5', 'basic'),
(7, '::1', 'vjhameed3', '$2y$08$PdfPShqFdtuiCuZ.4xuCl.SckMRjpMpqmMLo1On4CVwojNF79I5HG', NULL, 'vjhameed3@gmail.com', NULL, NULL, NULL, 'qvOtd4PTUPXIKTUgRsFGa.', 1504856966, 1505214616, 1, 'hameed', 'khan', '', '03420803510', 'pakistan', 'city', '6', 'basic'),
(8, '::1', 'vjhameed4', '$2y$08$CdGrNZXasrJu34l8yH.GUefFjIgb4O6IfPHLJyCTHydEysYRFERV.', NULL, 'vjhameed4@gmail.com', NULL, NULL, NULL, 'y9vGPlRSuQFuxd50pi606e', 1504856987, 1504868440, 1, 'hameed', 'khan', '', '03420803510', 'pakistan', 'city', '7', 'basic'),
(9, '::1', 'vjhameed5', '$2y$08$EYolkK7xmc84T1VGYfJ5m.D9vSHt7CBsM4cHkiVLCetpc0Pj78bPy', NULL, 'vjhameed5@gmail.com', NULL, NULL, NULL, NULL, 1504857013, NULL, 1, 'hameed', 'khan', '', '03420803510', 'pakistan', 'city', '8', 'basic'),
(10, '::1', 'vjhameed6', '$2y$08$AhggitbzbbAl5vBJ5WOUiOqE6v/0OcAu72pNP1vlMlaqb8jSgw.4O', NULL, 'vjhameed6@gmail.com', NULL, NULL, NULL, NULL, 1504857036, NULL, 1, 'hameed', 'khan', '', '03420803510', 'pakistan', 'city', '9', 'basic'),
(11, '::1', 'vjhameed7', '$2y$08$YAu142PcyCcpiqck5AwL/uT5tMSjQ1eHeu9BMIOg/VeziqZMHuJHy', NULL, 'vjhameed7@gmail.com', NULL, NULL, NULL, NULL, 1504857118, NULL, 1, 'hameed', 'khan', '', '03420803510', 'pakistan', 'city', '10', 'basic'),
(12, '::1', 'vjhameed8', '$2y$08$JHK5M.FBUhaMCsD8xxiyMuh/Cixy5.gXUt4RGQfhw18vmE5Zf.gza', NULL, 'vjhameed8@gmail.com', NULL, NULL, NULL, '6WlkcaD6VFCpgYYnGvAa/.', 1504857140, 1504894400, 1, 'hameed', 'khan', 'vjhameed8.jpg', '03420803510', 'pakistan', 'city', '11', 'basic'),
(13, '::1', 'vjhameed12', '$2y$08$2u/7koHYnshVItFqQyJd3Oq.IFg.HldPneg1J52nMT7evMrQJQmiK', NULL, 'vjhameed12@gmail.com', 'bf8dd3e229779e8fc2288396551c0984a37f1d28', NULL, NULL, NULL, 1504865418, NULL, 1, 'hameed', 'khan', '', '03420803510', 'pakistan', 'city', '5', 'basic'),
(14, '::1', 'vjhameed15', '$2y$08$3J9JOXyN39gUyu.1Fm2DVOaDqGp4qTwzyflqPcYgVuLfmB1u.wSDC', NULL, 'vjhameed15@gmail.com', '1a357869d65dc6d62fdce97e6fd8a29677f66da1', NULL, NULL, NULL, 1504981628, NULL, 0, 'hameed', 'khan', '', '03420803510', 'pakistan', 'city', '', 'basic'),
(15, '::1', 'vjhameed16', '$2y$08$Xtj0ci0pJk7RAHK5De4f.O86c9qCn9tyTZyc6WJ.u5yKfaXEY4ap6', NULL, 'vjhameed16@gmail.com', '05a954b2a2e2b0e6aaf0fd9456ff21b7bd3fc7b3', NULL, NULL, NULL, 1504981719, NULL, 0, 'hameed', 'khan', '', '03420803510', 'pakistan', 'city', '', 'basic');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
