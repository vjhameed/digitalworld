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
(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, 'UaYRHlXa8WO6158D.qmbC.', 1268889823, 1504512487, 1, 'Admin', 'istrator', 'ADMIN', '0', '', '', '', ''),
(83, '::1', 'vjhameed3', '$2y$08$7ZRD943dY7DFouvtjWYp7efVHyqLUbmDX6bZm9ALz4FrLBfo67ssK', NULL, 'vjhameed3@gmail.com', '83e796323abfc50ae83aee8fd500ee1a2261961a', NULL, NULL, 'GgodXiwR..bpd04XyP1unO', 1504410159, 1504512567, 1, 'hameed', 'khan', 'vjhameed3.jpg', '03420803510', 'pakistan', 'city', '', 'basic'),
(85, '::1', 'vjhameed1', '$2y$08$88wZsmLVHIltmcIy61kmCe0DLnl8araBH.U8tdG1jDxZgrg0pywj2', NULL, 'vjhameed1@gmail.com', '5291c49cc143eebf2ee846106899613aa543f449', NULL, NULL, NULL, 1504446475, NULL, 0, 'hameed', 'khan', '', '03420803510', 'pakistan', 'city', '83', 'basic'),
(86, '::1', 'vjhameed2', '$2y$08$JQLqX4H7P3mJN3TFKb/C7er3X8.qlOOblwIZtWtyo86dNe4JcvDgS', NULL, 'vjhameed2@gmail.com', 'e71d005d963fbbdf44c3f8217fc717b9767b1263', NULL, NULL, NULL, 1504446532, NULL, 0, 'hameed', 'khan', '', '03420803510', 'pakistan', 'city', '85', 'basic'),
(87, '::1', 'vjhameed4', '$2y$08$ee7yJUypBPiN3QEir5X0xu6BwZvxJLtUzbAEsjgNG7EBJfT7SdCTW', NULL, 'vjhameed4@gmail.com', '99c3d9a8be3fa2bfc0a29145e44b67485baa8947', NULL, NULL, NULL, 1504446589, NULL, 0, 'hameed', 'khan', '', '03420803510', 'pakistan', 'city', '86', 'basic'),
(89, '::1', 'vjhameed5', '$2y$08$eNs8gmMSNK/e/2d7i21FM.zGBJjbm.4fZMq1AcGaFgfu4IjV0ArKO', NULL, 'vjhameed5@gmail.com', '4374ee331df86f8bf5bd7db437ffa11e1810ecd2', NULL, NULL, NULL, 1504446707, NULL, 0, 'hameed', 'khan', '', '03420803510', 'pakistan', 'city', '87', 'basic'),
(90, '::1', 'vjhameed6', '$2y$08$.37IdssqKNq7ljmxRLI7XOFV4DgQtYRcv/Z1o8uo17UonUMb0krE6', NULL, 'vjhameed6@gmail.com', 'e81fc8e30872a4d0b37989b9f3f27b625a443c79', NULL, NULL, NULL, 1504446782, NULL, 0, 'hameed', 'khan', '', '03420803510', 'pakistan', 'city', '89', 'basic'),
(91, '::1', 'vjhameed7', '$2y$08$ubL63a/CEzFIld.sENRCb.8moVJcK7SHVkELHlnNadxMM1GHb9HNG', NULL, 'vjhameed7@gmail.com', 'aeb691dbacf49dac7d24d752786d297c103520ca', NULL, NULL, NULL, 1504446850, NULL, 0, 'hameed', 'khan', '', '03420803510', 'pakistan', 'city', '90', 'basic'),
(92, '::1', 'vjhameed8', '$2y$08$/RvXT7UoJSVnJ0SEuO8jnuO7i8OzIc22jvd8oU8g6fBLq5OHztfV.', NULL, 'vjhameed8@gmail.com', '8fbd81a12f4b2f42530ee23ec326901c42897b37', NULL, NULL, NULL, 1504446889, NULL, 0, 'hameed', 'khan', '', '03420803510', 'pakistan', 'city', '91', 'basic'),
(93, '::1', 'vjhameed9', '$2y$08$Q0sS3GUPNRrSUywDWvhsMOAZzOaAL/l4UJY7lSgo0LUPGJb/4NZnm', NULL, 'vjhameed9@gmail.com', '570d5112b323c9e50d4870467505df09ab626164', NULL, NULL, NULL, 1504446984, NULL, 0, 'hameed', 'khan', '', '03420803510', 'pakistan', 'city', '92', 'basic'),
(94, '::1', 'vjhameed10', '$2y$08$zXieu8xe4ZbiV3CGLzuuAOMghP72rimlVrRQKEhmWhlZ0vM2W9FW.', NULL, 'vjhameed10@gmail.com', '3d7a121b002c03c297d5d8077c942ad5038cf9d3', NULL, NULL, NULL, 1504503034, NULL, 0, 'hameed', 'khan', '', '03420803510', 'pakistan', 'city', '83', 'basic'),
(96, '::1', 'vjhameed11', '$2y$08$Y0.NEs9FJFIv2CC8n0NIbO24eg2a7s3ZFGkTlRkWl2BDLzovimLzW', NULL, 'vjhameed11@gmail.com', NULL, NULL, NULL, NULL, 1504512470, NULL, 1, 'hameed', 'khan', '', '03420803510', 'pakistan', 'city', '85', 'basic');

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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
