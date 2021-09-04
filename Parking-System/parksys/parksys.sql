-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2021 at 05:10 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parksys`
--

-- --------------------------------------------------------

--
-- Table structure for table `lots`
--

CREATE TABLE `lots` (
  `slot_no` int(5) NOT NULL,
  `user_type` varchar(10) NOT NULL,
  `vacancy` int(5) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lots`
--

INSERT INTO `lots` (`slot_no`, `user_type`, `vacancy`, `time`) VALUES
(1, 'H', 1, '2021-09-03 14:51:18'),
(2, 'H', 1, '2021-09-03 14:51:20'),
(3, 'H', 1, '2021-09-03 14:55:49'),
(4, 'H', 1, '2021-09-03 14:55:50'),
(5, 'H', 1, '2021-09-03 14:57:57'),
(6, 'H', 1, '2021-09-03 15:04:47'),
(7, 'H', 0, '2021-09-03 09:50:30'),
(8, 'H', 0, '2021-09-03 09:50:30'),
(9, 'H', 0, '2021-09-03 09:50:30'),
(10, 'H', 0, '2021-09-03 09:50:30'),
(11, 'H', 0, '2021-09-03 09:50:30'),
(12, 'H', 0, '2021-09-03 09:50:30'),
(13, 'H', 0, '2021-09-03 09:50:30'),
(14, 'H', 0, '2021-09-03 09:50:30'),
(15, 'H', 0, '2021-09-03 09:50:30'),
(16, 'H', 0, '2021-09-03 09:50:30'),
(17, 'H', 0, '2021-09-03 09:50:30'),
(18, 'H', 0, '2021-09-03 09:50:30'),
(19, 'H', 0, '2021-09-03 09:50:30'),
(20, 'H', 0, '2021-09-03 09:50:30'),
(21, 'V', 1, '2021-09-03 15:01:20'),
(22, 'V', 1, '2021-09-03 15:01:34'),
(23, 'V', 1, '2021-09-03 15:08:33'),
(24, 'V', 0, '2021-09-02 11:16:12'),
(25, 'V', 0, '2021-09-02 11:16:12'),
(26, 'V', 0, '2021-09-02 11:16:12'),
(27, 'V', 0, '2021-09-02 15:57:02'),
(28, 'V', 0, '2021-09-02 11:16:12'),
(29, 'V', 0, '2021-09-02 11:16:12'),
(30, 'V', 0, '2021-09-02 11:16:12'),
(31, 'V', 0, '2021-09-02 11:16:12'),
(32, 'V', 0, '2021-09-02 11:16:12'),
(33, 'V', 0, '2021-09-02 11:16:12'),
(34, 'V', 0, '2021-09-02 11:16:12'),
(35, 'V', 0, '2021-09-02 11:16:12'),
(36, 'V', 0, '2021-09-02 11:16:12'),
(37, 'V', 0, '2021-09-02 11:16:12'),
(38, 'V', 0, '2021-09-02 11:16:12'),
(39, 'V', 0, '2021-09-02 11:16:12'),
(40, 'V', 0, '2021-09-02 11:16:12'),
(41, 'T', 1, '2021-09-03 14:47:52'),
(42, 'T', 1, '2021-09-03 14:50:19'),
(43, 'T', 1, '2021-09-03 14:51:05'),
(44, 'T', 1, '2021-09-03 14:53:43'),
(45, 'T', 1, '2021-09-03 14:53:47'),
(46, 'T', 1, '2021-09-03 14:53:47'),
(47, 'T', 1, '2021-09-03 14:54:32'),
(48, 'T', 1, '2021-09-03 14:56:31'),
(49, 'T', 1, '2021-09-03 14:56:34'),
(50, 'T', 1, '2021-09-03 14:56:34'),
(51, 'T', 1, '2021-09-03 14:57:13'),
(52, 'T', 1, '2021-09-03 14:57:15'),
(53, 'T', 1, '2021-09-03 14:57:15'),
(54, 'T', 1, '2021-09-03 14:58:06'),
(55, 'T', 1, '2021-09-03 14:58:10'),
(56, 'T', 1, '2021-09-03 14:58:10'),
(57, 'T', 1, '2021-09-03 14:58:12'),
(58, 'T', 1, '2021-09-03 14:58:46'),
(59, 'T', 0, '2021-09-03 15:09:01'),
(60, 'T', 0, '2021-09-03 15:08:58'),
(71, 'S', 1, '2021-09-03 12:22:16'),
(72, 'S', 1, '2021-09-03 12:22:19'),
(73, 'S', 1, '2021-09-03 12:31:35'),
(74, 'S', 1, '2021-09-03 12:48:40'),
(75, 'S', 1, '2021-09-03 12:57:58'),
(76, 'S', 1, '2021-09-03 13:08:16'),
(77, 'S', 1, '2021-09-03 13:47:26'),
(78, 'S', 1, '2021-09-03 15:02:56'),
(79, 'S', 1, '2021-09-03 15:03:21'),
(80, 'S', 0, '2021-09-03 09:54:36'),
(81, 'S', 0, '2021-09-03 09:54:38'),
(82, 'S', 0, '2021-09-03 09:54:40'),
(83, 'S', 0, '2021-09-03 09:54:42'),
(84, 'S', 0, '2021-09-03 09:54:44'),
(85, 'S', 0, '2021-09-03 09:54:46'),
(86, 'S', 0, '2021-09-03 09:54:48'),
(87, 'S', 0, '2021-09-03 09:54:50'),
(88, 'S', 0, '2021-09-03 09:54:52'),
(89, 'S', 0, '2021-09-03 09:54:54'),
(90, 'S', 0, '2021-09-03 09:54:56');

-- --------------------------------------------------------

--
-- Table structure for table `std`
--

CREATE TABLE `std` (
  `sl_no` int(11) NOT NULL,
  `usn` varchar(10) NOT NULL,
  `slot_no` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `std`
--

INSERT INTO `std` (`sl_no`, `usn`, `slot_no`) VALUES
(1, '1ds19cs052', 'S71'),
(2, '1ds19cs051', 'S72');

-- --------------------------------------------------------

--
-- Table structure for table `tea`
--

CREATE TABLE `tea` (
  `sl_no` int(11) NOT NULL,
  `s_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tea`
--

INSERT INTO `tea` (`sl_no`, `s_id`) VALUES
(1, '1dsdaa01');

-- --------------------------------------------------------

--
-- Table structure for table `vis`
--

CREATE TABLE `vis` (
  `sl_no` int(11) NOT NULL,
  `vl_no` varchar(10) NOT NULL,
  `slot_no` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vis`
--

INSERT INTO `vis` (`sl_no`, `vl_no`, `slot_no`) VALUES
(1, 'ka052182', ''),
(2, 'ka052182', ''),
(12, 'ka051221', 'V21'),
(13, 'ka051221', 'V21'),
(14, 'ka051221', 'A21'),
(15, 'ka05122163', 'V21'),
(16, 'ka05122163', 'V23'),
(17, 'ka051221', 'V23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lots`
--
ALTER TABLE `lots`
  ADD PRIMARY KEY (`slot_no`);

--
-- Indexes for table `std`
--
ALTER TABLE `std`
  ADD PRIMARY KEY (`sl_no`,`usn`,`slot_no`);

--
-- Indexes for table `tea`
--
ALTER TABLE `tea`
  ADD PRIMARY KEY (`sl_no`,`s_id`);

--
-- Indexes for table `vis`
--
ALTER TABLE `vis`
  ADD PRIMARY KEY (`sl_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `std`
--
ALTER TABLE `std`
  MODIFY `sl_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tea`
--
ALTER TABLE `tea`
  MODIFY `sl_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vis`
--
ALTER TABLE `vis`
  MODIFY `sl_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
