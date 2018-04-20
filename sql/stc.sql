-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2018 at 12:19 PM
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
-- Table structure for table `calls`
--

CREATE TABLE `calls` (
  `id` int(11) NOT NULL,
  `client_name` text NOT NULL,
  `process_name` text NOT NULL,
  `current_update` text NOT NULL,
  `conversational_history` text NOT NULL,
  `region` text NOT NULL,
  `client_contact_name` text NOT NULL,
  `client_contact_designation` text NOT NULL,
  `sales_spoc` text NOT NULL,
  `first_meet` date NOT NULL,
  `second_meet` date NOT NULL,
  `prodapt_participants` text NOT NULL,
  `discussion_points` text NOT NULL,
  `client_feedback` text NOT NULL,
  `next_steps` text NOT NULL,
  `responsible` text NOT NULL,
  `target_date` date NOT NULL,
  `remarks` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calls`
--

INSERT INTO `calls` (`id`, `client_name`, `process_name`, `current_update`, `conversational_history`, `region`, `client_contact_name`, `client_contact_designation`, `sales_spoc`, `first_meet`, `second_meet`, `prodapt_participants`, `discussion_points`, `client_feedback`, `next_steps`, `responsible`, `target_date`, `remarks`) VALUES
(1, 'h', 'j', '2018-12-31 : sa\n', '2018-12-31 : scs\n', 'h', 'jj', 'hj', 'd', '2018-12-31', '2018-12-31', '2018-12-31 : dssa\n', '2018-12-31 : sasd\n', 'sdss', '2018-12-31 : scs\n', 'dsd', '2018-12-31', 'das'),
(2, 'HI', 'jk', '2018-12-31 : sd\n', '2018-10-31 : sd\n', 'jljk', 'jkj', 'jkj', 'jkj', '2018-12-31', '2018-12-31', '2018-12-31 : sdsd\n', '2018-12-31 : ds\n', 'ds', '2018-12-31 : sdsd\n', 'd', '0000-00-00', 'ass'),
(3, 'dfs', 'kjk', '2018-12-31 : s\n', '2018-12-31 : sdf\n', 'jk', 'jkks', 'sds', 'ddvs', '2018-12-31', '2018-12-31', '2018-12-31 : sdfsdf\n', '2018-12-31 : dsfsd\n', 'sd', '2018-12-31 : dsfs\n', 'asd', '2018-12-31', 'sdsdfsd'),
(4, '2', '2', '2222-02-02 : 2\n1111-11-11 : 1\n', '2222-02-02 : 2\n1111-11-11 : 1\n', '2', '2', '2', '2', '2222-02-02', '2222-02-02', '2222-02-02 : 2\n1111-11-11 : 1\n', '2222-02-02 : 2\n1111-11-11 : 1\n', '2', '2222-02-02 : 2\n1111-11-11 : 1\n', '2', '2222-02-02', '2');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`) VALUES
(1, 'Win Telco'),
(2, 'Win Others'),
(3, 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `mapping`
--

CREATE TABLE `mapping` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `call_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mapping`
--

INSERT INTO `mapping` (`id`, `user_id`, `call_id`, `category_id`, `status_id`) VALUES
(1, 2, 1, 3, 1),
(2, 2, 2, 3, 2),
(3, 2, 3, 1, 3),
(4, 2, 4, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `status`) VALUES
(1, 'Green'),
(2, 'Red'),
(3, 'Amber');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `pass` text NOT NULL,
  `mail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `pass`, `mail`) VALUES
(2, 'Rajesh Sambasivam', 'raj', 'rajesh.s@prodapt.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calls`
--
ALTER TABLE `calls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mapping`
--
ALTER TABLE `mapping`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calls`
--
ALTER TABLE `calls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mapping`
--
ALTER TABLE `mapping`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
