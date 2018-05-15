-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2018 at 08:21 AM
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
  `remarks` text NOT NULL,
  `project_start_date` date NOT NULL,
  `project_end_date` date NOT NULL,
  `current_status` varchar(50) NOT NULL,
  `opportunity_status` varchar(50) NOT NULL,
  `last_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calls`
--

INSERT INTO `calls` (`id`, `client_name`, `process_name`, `current_update`, `conversational_history`, `region`, `client_contact_name`, `client_contact_designation`, `sales_spoc`, `first_meet`, `second_meet`, `prodapt_participants`, `discussion_points`, `client_feedback`, `next_steps`, `responsible`, `target_date`, `remarks`, `project_start_date`, `project_end_date`, `current_status`, `opportunity_status`, `last_updated`) VALUES
(3, 'a', 'a', '', '', 'a', 'a', 'a', 'a', '2018-12-31', '2017-12-31', '', '', 'a', '', 'aa', '2018-12-31', 'a', '0000-00-00', '0000-00-00', 'a', '', '2018-04-30 03:32:47'),
(4, 'asd', 'asd', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '', '2018-04-30 03:38:25'),
(5, 'sfds', 'sf', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '', '2018-04-30 03:39:48'),
(6, 'ads', 'sad', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 'dfv', '2018-04-30 03:40:18'),
(7, 'sdf', 'dfs', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '', '2018-04-11', '2018-04-04', 'Deployment', 's', '2018-04-30 03:41:59'),
(8, 'a', 'a', '', '', 'aa', 'a', 'a', 'a', '2018-12-31', '2018-12-31', '', '', 'a', '', 'a', '2018-12-31', 'a', '2018-12-31', '2018-12-31', 'Demo', 'b', '2018-04-30 03:49:23'),
(9, 'fsfq', 'bbkh', 'sdf', 'sdfs', 'hkjh', 'kjh', 'hk', 'hk', '2018-12-31', '0000-00-00', 'sdfsdf', 'dsfdsf', 'lnn', 'fsdfsd`', 'mnbjhb', '2018-12-31', 'fdsd', '2018-12-31', '2018-12-31', 'Kick off call', 'vfdf', '2018-05-01 06:36:13');

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
(2, 'Other Telco'),
(3, 'Non Telco'),
(4, 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `mapping`
--

CREATE TABLE `mapping` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `call_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  `Enabled` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mapping`
--

INSERT INTO `mapping` (`id`, `user_id`, `call_id`, `category_id`, `status_id`, `Enabled`) VALUES
(3, 2, 3, 1, 1, 1),
(4, 2, 4, 1, 3, 1),
(5, 2, 5, 1, 3, 1),
(6, 2, 6, 3, 3, 1),
(7, 2, 7, 1, 1, 1),
(8, 2, 8, 1, 2, 1),
(9, 2, 9, 2, 1, 1);

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
  `mail` text NOT NULL,
  `resetToken` bigint(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `pass`, `mail`, `resetToken`) VALUES
(2, 'Rajesh Sambasivam', 'f5bb0c8de146c67b44babbf4e6584cc0', 'rajesh.s@prodapt.com', 0),
(3, 'Sivakumar S', 'siva', 'sivakumar.s@prodapt.com', 0);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mapping`
--
ALTER TABLE `mapping`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
