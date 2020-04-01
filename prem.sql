-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2020 at 12:44 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prem`
--

-- --------------------------------------------------------

--
-- Table structure for table `assets`
--

CREATE TABLE `assets` (
  `prop_name` varchar(50) NOT NULL,
  `prop_type` varchar(50) NOT NULL,
  `ass_type` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `summary` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assets`
--

INSERT INTO `assets` (`prop_name`, `prop_type`, `ass_type`, `location`, `summary`) VALUES
('RISHIKESH ', 'commercial', 'Machines', 'blore', 'hey,how are you?'),
('Rachana', 'residential', 'Furnished', 'dubai', 'Pay the bill..!');

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE `expense` (
  `prop_name` varchar(50) NOT NULL,
  `tent_name` varchar(50) NOT NULL,
  `exp_type` varchar(50) NOT NULL,
  `summary` varchar(25000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expense`
--

INSERT INTO `expense` (`prop_name`, `tent_name`, `exp_type`, `summary`) VALUES
('Rachana', 'Shruti', 'maintenance', 'pay the bill before due..!'),
('RISHIKESH Z', 'Disha', 'Cleanliness', 'remainder!!!');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `prop_id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `prop_type` varchar(50) NOT NULL,
  `prop_size` bigint(250) NOT NULL,
  `location` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`prop_id`, `name`, `prop_type`, `prop_size`, `location`, `status`) VALUES
('1100rr', 'RISHIKESH Z', 'commercial', 15000, 'blore', 'occupied'),
('1155rk', 'Rachana', 'residential', 15000, 'dubai', 'occupied');

-- --------------------------------------------------------

--
-- Table structure for table `rent`
--

CREATE TABLE `rent` (
  `prop_id` varchar(50) NOT NULL,
  `tenant` varchar(50) NOT NULL,
  `phone` int(10) NOT NULL,
  `month` date NOT NULL,
  `year` date NOT NULL,
  `total` int(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ripaid`
--

CREATE TABLE `ripaid` (
  `prop_name` varchar(50) NOT NULL,
  `tent_name` varchar(50) NOT NULL,
  `rent` int(250) NOT NULL,
  `paid_amt` int(255) NOT NULL,
  `due_amt` int(255) NOT NULL,
  `paid_date` date NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ripaid`
--

INSERT INTO `ripaid` (`prop_name`, `tent_name`, `rent`, `paid_amt`, `due_amt`, `paid_date`, `status`) VALUES
('Rachana', 'Shruti', 34000, 2000, 32000, '2020-02-01', 'Pending'),
('Rachana', 'Shruti', 18000, 2000, 16000, '2020-02-01', 'Pending'),
('Rachana', 'Shruti', 18000, 2000, 16000, '2020-02-01', 'Pending'),
('Rachana', 'Shruti', 5000, 1000, 4000, '2020-03-01', 'Pending'),
('Rachana', 'Shruti', 3000, 1000, 2000, '2020-03-01', 'Pending'),
('Rachana', 'Shruti', 2000, 1000, 1000, '2020-03-01', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `tentants`
--

CREATE TABLE `tentants` (
  `tent_id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `property` varchar(50) NOT NULL,
  `reg_date` date NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tentants`
--

INSERT INTO `tentants` (`tent_id`, `name`, `gender`, `phone`, `email`, `property`, `reg_date`, `status`) VALUES
('1', 'Disha', 'female', 2147483647, 'disha125@gmail.com', 'residential', '2020-05-21', 'occupied'),
('2', 'Shruti', 'female', 2147483647, 'shrutig11@gmail.com', 'commercial', '2007-12-04', 'vacant');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(20) CHARACTER SET utf8 NOT NULL,
  `fname` varchar(50) CHARACTER SET utf8 NOT NULL,
  `pass` varchar(50) CHARACTER SET utf8 NOT NULL,
  `role` int(20) NOT NULL,
  `active` int(2) NOT NULL,
  `llogin` varchar(20) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `fname`, `pass`, `role`, `active`, `llogin`) VALUES
(2, 'rach', 'rachana', '1010', 4, 1, 'admin'),
(3, 'rishi', 'rishizalake', '9999', 5, 1, 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`prop_id`);

--
-- Indexes for table `tentants`
--
ALTER TABLE `tentants`
  ADD PRIMARY KEY (`tent_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
