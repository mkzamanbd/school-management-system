-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2018 at 11:12 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gps_bhilai`
--

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `id` int(11) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `address` int(5) NOT NULL,
  `detail` varchar(10) NOT NULL,
  `delete_status` enum('0','1') NOT NULL,
  `creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updating_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bus_student`
--

CREATE TABLE `bus_student` (
  `id` int(11) NOT NULL,
  `bid` int(11) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `admissionNo` int(10) NOT NULL,
  `admdate` date NOT NULL,
  `fees` decimal(10,2) NOT NULL,
  `balance` decimal(10,2) NOT NULL,
  `april` decimal(10,2) NOT NULL,
  `july` decimal(10,2) NOT NULL,
  `october` decimal(10,2) NOT NULL,
  `january` decimal(10,2) NOT NULL,
  `aprilb` decimal(10,2) NOT NULL,
  `julyb` decimal(10,2) NOT NULL,
  `octoberb` decimal(10,2) NOT NULL,
  `januaryb` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bus_transaction`
--

CREATE TABLE `bus_transaction` (
  `id` int(11) NOT NULL,
  `busid` int(11) NOT NULL,
  `paid` decimal(10,2) NOT NULL,
  `april` decimal(10,2) NOT NULL,
  `july` decimal(10,2) NOT NULL,
  `october` decimal(10,2) NOT NULL,
  `january` decimal(10,2) NOT NULL,
  `submitdate` date NOT NULL,
  `fees_remark` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE `expense` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `amount` decimal(15,2) DEFAULT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fees_transaction`
--

CREATE TABLE `fees_transaction` (
  `id` int(11) NOT NULL,
  `stdid` int(11) NOT NULL,
  `paid` decimal(15,2) NOT NULL,
  `april` decimal(10,2) DEFAULT NULL,
  `july` decimal(10,2) DEFAULT NULL,
  `october` decimal(10,2) DEFAULT NULL,
  `january` decimal(10,2) DEFAULT NULL,
  `submitdate` date NOT NULL,
  `transaction_remark` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(11) NOT NULL,
  `stdid` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `marks` int(4) NOT NULL,
  `posting_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updating_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `birthdate` date NOT NULL,
  `admissionNo` int(11) NOT NULL,
  `roll_number` int(5) NOT NULL,
  `joindate` date NOT NULL,
  `about` text NOT NULL,
  `contact` varchar(15) NOT NULL,
  `fees` decimal(15,2) NOT NULL,
  `april` decimal(10,2) DEFAULT NULL,
  `july` decimal(10,2) DEFAULT NULL,
  `october` decimal(10,2) DEFAULT NULL,
  `january` decimal(10,2) DEFAULT NULL,
  `aprilb` decimal(10,2) DEFAULT NULL,
  `julyb` decimal(10,2) DEFAULT NULL,
  `octoberb` decimal(10,2) DEFAULT NULL,
  `januaryb` decimal(10,2) DEFAULT NULL,
  `branch` varchar(20) NOT NULL,
  `balance` decimal(15,2) NOT NULL,
  `delete_status` enum('0','1') NOT NULL,
  `creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updation_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `subject_name` varchar(100) NOT NULL,
  `subject_code` varchar(30) NOT NULL,
  `total_marks` int(5) NOT NULL,
  `creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tc`
--

CREATE TABLE `tc` (
  `id` int(11) NOT NULL,
  `stdid` int(11) NOT NULL,
  `school_id` varchar(20) NOT NULL,
  `tc_code` varchar(20) NOT NULL,
  `classname` varchar(20) NOT NULL,
  `issue_date` date NOT NULL,
  `reason` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(30) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `lastlogin` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `name`, `emailid`, `lastlogin`) VALUES
(1, 'admin', '5f4dcc3b5aa765d61d8327deb882cf99', 'admin', 'admin@admin.com', '2018-03-15 03:15:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bus_student`
--
ALTER TABLE `bus_student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admissionNo` (`admissionNo`);

--
-- Indexes for table `bus_transaction`
--
ALTER TABLE `bus_transaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expense`
--
ALTER TABLE `expense`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fees_transaction`
--
ALTER TABLE `fees_transaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admissionNo` (`admissionNo`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tc`
--
ALTER TABLE `tc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `bus_student`
--
ALTER TABLE `bus_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `bus_transaction`
--
ALTER TABLE `bus_transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `expense`
--
ALTER TABLE `expense`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fees_transaction`
--
ALTER TABLE `fees_transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tc`
--
ALTER TABLE `tc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
