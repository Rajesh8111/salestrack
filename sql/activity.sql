-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2018 at 12:25 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stc`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `id` int(11) NOT NULL,
  `processName` varchar(150) NOT NULL,
  `activity` varchar(50) NOT NULL,
  `userName` varchar(150) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`id`, `processName`, `activity`, `userName`, `timestamp`) VALUES
(1, 'sd', 'added', 'Rajesh Sambasivam', '2018-05-27 18:54:01'),
(2, 'asd', 'modified', 'Rajesh Sambasivam', '2018-05-27 18:55:37'),
(3, '', 'removed', 'Rajesh Sambasivam', '2018-05-27 19:18:19'),
(4, '', 'removed', 'Rajesh Sambasivam', '2018-05-27 19:18:23'),
(5, '', 'removed', 'Rajesh Sambasivam', '2018-05-27 19:18:27'),
(6, 'a', 'modified', 'Rajesh Sambasivam', '2018-05-27 19:21:15'),
(7, '', 'removed', 'Rajesh Sambasivam', '2018-05-27 19:40:33'),
(8, '', 'removed', 'Rajesh Sambasivam', '2018-05-27 19:40:35'),
(9, '', 'removed', 'Rajesh Sambasivam', '2018-05-27 19:40:38'),
(10, '', 'removed', 'Rajesh Sambasivam', '2018-05-27 19:40:43'),
(11, '', 'removed', 'Rajesh Sambasivam', '2018-05-27 19:40:46'),
(12, '', 'removed', 'Rajesh Sambasivam', '2018-05-27 19:40:49'),
(13, '', 'removed', 'Rajesh Sambasivam', '2018-05-27 19:41:13'),
(14, '', 'removed', 'Rajesh Sambasivam', '2018-05-27 19:41:24'),
(15, 'undefined', 'removed', 'Rajesh Sambasivam', '2018-05-27 21:58:22'),
(16, 'bbkh', 'removed', 'Rajesh Sambasivam', '2018-05-27 22:16:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
