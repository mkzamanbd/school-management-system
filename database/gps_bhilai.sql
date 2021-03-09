-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 13, 2021 at 06:18 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`id`, `branch`, `address`, `detail`, `delete_status`, `creation_date`, `updating_date`) VALUES
(1, '1', 3, 'A', '1', '2021-02-07 21:08:36', '2021-02-07 21:09:36'),
(2, 'One', 1, 'A', '0', '2021-02-07 21:38:37', '2021-02-07 21:39:38'),
(3, 'One', 1, 'B', '0', '2021-02-08 09:38:07', '0000-00-00 00:00:00'),
(4, 'One', 1, 'C', '1', '2021-02-08 09:38:33', '2021-02-12 14:45:00'),
(5, 'Two', 2, 'A', '0', '2021-02-08 09:40:12', '0000-00-00 00:00:00'),
(6, 'Two', 2, 'B', '0', '2021-02-08 09:40:54', '0000-00-00 00:00:00'),
(7, 'Two', 2, 'C', '1', '2021-02-08 09:41:03', '2021-02-12 14:45:17'),
(8, 'Three', 3, 'A', '0', '2021-02-08 09:41:24', '0000-00-00 00:00:00'),
(9, 'Three', 3, 'B', '0', '2021-02-08 09:41:33', '0000-00-00 00:00:00'),
(10, 'Three', 3, 'C', '1', '2021-02-08 09:41:43', '2021-02-12 14:45:30'),
(11, 'Four', 1, 'A', '0', '2021-02-10 07:34:04', '0000-00-00 00:00:00'),
(12, 'Five', 1, 'A', '0', '2021-02-10 07:34:29', '0000-00-00 00:00:00'),
(13, 'Four', 4, 'B', '0', '2021-02-12 14:54:02', '0000-00-00 00:00:00'),
(14, 'Five', 2, 'B', '0', '2021-02-12 14:54:39', '0000-00-00 00:00:00');

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

--
-- Dumping data for table `bus_student`
--

INSERT INTO `bus_student` (`id`, `bid`, `sname`, `fname`, `admissionNo`, `admdate`, `fees`, `balance`, `april`, `july`, `october`, `january`, `aprilb`, `julyb`, `octoberb`, `januaryb`) VALUES
(1, 4, 'Antor', 'Akas Ahmed', 2, '2021-02-08', '500.00', '-100.00', '60.00', '60.00', '60.00', '60.00', '-90.00', '-90.00', '-90.00', '-90.00'),
(2, 5, 'Lubna', 'Ali Akbor', 5, '2021-02-06', '110.00', '-40.00', '30.00', '40.00', '20.00', '20.00', '-10.00', '10.00', '-30.00', '-10.00'),
(3, 2, 'Emran Ahmed', 'Kuddus Ahmed', 1, '2021-03-05', '150.00', '-350.00', '50.00', '30.00', '30.00', '40.00', '-50.00', '-70.00', '-70.00', '-60.00'),
(4, 5, 'Shanjida ', 'Mohomod', 3, '2021-02-06', '160.00', '-340.00', '40.00', '40.00', '40.00', '40.00', '-60.00', '-60.00', '-60.00', '-60.00');

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

--
-- Dumping data for table `bus_transaction`
--

INSERT INTO `bus_transaction` (`id`, `busid`, `paid`, `april`, `july`, `october`, `january`, `submitdate`, `fees_remark`) VALUES
(1, 1, '120.00', '30.00', '30.00', '30.00', '30.00', '2021-02-02', 'Buss fee`'),
(2, 1, '120.00', '30.00', '30.00', '30.00', '30.00', '2021-02-02', 'Buss fee`'),
(3, 1, '120.00', '30.00', '30.00', '30.00', '30.00', '2021-02-02', 'Buss fee`'),
(4, 1, '120.00', '30.00', '30.00', '30.00', '30.00', '2021-02-02', 'Buss fee`'),
(5, 1, '120.00', '30.00', '30.00', '30.00', '30.00', '2021-02-02', 'Buss fee`'),
(6, 2, '150.00', '40.00', '30.00', '50.00', '30.00', '2021-02-07', 'buss fee`'),
(7, 3, '500.00', '100.00', '100.00', '100.00', '100.00', '2021-02-13', 'buss fee`'),
(8, 4, '500.00', '100.00', '100.00', '100.00', '100.00', '2021-02-11', 'buss fee`');

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

--
-- Dumping data for table `expense`
--

INSERT INTO `expense` (`id`, `name`, `amount`, `date`) VALUES
(1, 'Fan', '1000.00', '2021-02-06'),
(2, 'Duster', '500.00', '2021-02-07'),
(3, 'Table', '3000.00', '2021-02-19'),
(4, 'chair', '800.00', '2021-02-03'),
(5, 'Board', '700.00', '2021-02-01'),
(6, 'Computer', '2000.00', '2021-02-01'),
(7, 'Light', '300.00', '2021-01-13');

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

--
-- Dumping data for table `fees_transaction`
--

INSERT INTO `fees_transaction` (`id`, `stdid`, `paid`, `april`, `july`, `october`, `january`, `submitdate`, `transaction_remark`) VALUES
(1, 1, '180.00', '40.00', '50.00', '40.00', '50.00', '2021-02-10', 'Tuition fee`'),
(2, 1, '180.00', '40.00', '50.00', '40.00', '50.00', '2021-02-10', 'Tuition fee`'),
(3, 1, '180.00', '40.00', '50.00', '40.00', '50.00', '2021-02-10', 'Tuition fee`'),
(4, 1, '180.00', '40.00', '50.00', '40.00', '50.00', '2021-02-10', 'Tuition fee`'),
(5, 1, '180.00', '40.00', '50.00', '40.00', '50.00', '2021-02-10', 'Tuition fee`'),
(6, 1, '180.00', '40.00', '50.00', '40.00', '50.00', '2021-02-10', 'Tuition fee`'),
(7, 1, '180.00', '40.00', '50.00', '40.00', '50.00', '2021-02-10', 'Tuition fee`'),
(8, 2, '150.00', '50.00', '40.00', '10.00', '50.00', '2021-02-10', 'tuition fee`'),
(9, 2, '150.00', '50.00', '40.00', '10.00', '50.00', '2021-02-10', 'tuition fee`'),
(10, 2, '200.00', '500.00', '500.00', '500.00', '500.00', '2021-02-23', 'tusion fee`'),
(11, 3, '300.00', '333.00', '333.00', '333.00', '333.00', '2021-02-09', 'tussion fee`'),
(12, 3, '300.00', '333.00', '333.00', '333.00', '333.00', '2021-02-09', 'tussion fee`'),
(13, 3, '300.00', '333.00', '333.00', '333.00', '333.00', '2021-02-09', 'tussion fee`'),
(14, 3, '300.00', '333.00', '333.00', '333.00', '333.00', '2021-02-09', 'tussion fee`'),
(15, 5, '3000.00', '400.00', '200.00', '400.00', '200.00', '2021-02-06', 'tussion fee`'),
(16, 5, '3000.00', '400.00', '200.00', '400.00', '200.00', '2021-02-06', 'tussion fee`');

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

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `emailid`, `sname`, `fname`, `birthdate`, `admissionNo`, `roll_number`, `joindate`, `about`, `contact`, `fees`, `april`, `july`, `october`, `january`, `aprilb`, `julyb`, `octoberb`, `januaryb`, `branch`, `balance`, `delete_status`, `creation_date`, `updation_date`) VALUES
(1, 'Sokhina Khatun', 'Emran Ahmed', 'Kuddus Ahmed', '2015-05-12', 1, 1, '2021-01-09', 'Dapunia Bazar', '0176526191', '1200.00', '100.00', '100.00', '100.00', '100.00', '-180.00', '-250.00', '-180.00', '-250.00', '2', '-60.00', '0', '2021-02-09 08:04:47', '2021-02-10 06:35:41'),
(2, 'Bilkiss Khatun', 'Antor', 'Akas Ahmed', '2015-08-14', 2, 2, '2021-02-09', 'Mymensingh Sodor', '01682457854', '1200.00', '100.00', '100.00', '100.00', '100.00', '-500.00', '-480.00', '-420.00', '-500.00', '3', '700.00', '0', '2021-02-09 08:10:55', '2021-02-12 15:02:09'),
(3, 'Ruksana', 'Shanjida ', 'Mohomod', '2014-02-28', 3, 1, '2021-02-11', 'Akuya', '01784637261', '1200.00', '100.00', '100.00', '100.00', '100.00', '-1232.00', '-1232.00', '-1232.00', '-1232.00', '5', '0.00', '0', '2021-02-10 04:58:51', '2021-02-12 18:01:30'),
(4, 'Salma', 'Lubna', 'Ali Akbor', '2014-12-31', 5, 2, '2021-02-06', 'Aliya madrasa', '01954836285', '1200.00', '100.00', '100.00', '100.00', '100.00', '100.00', '100.00', '100.00', '100.00', '6', '1200.00', '0', '2021-02-10 05:01:45', '0000-00-00 00:00:00'),
(5, 'Roksana', 'Abu Raihan', 'Abdilla', '2014-05-01', 6, 1, '2021-01-14', 'Trishal', '01694283764', '4000.00', '1000.00', '500.00', '500.00', '100.00', '200.00', '100.00', '-300.00', '-300.00', '9', '-2000.00', '0', '2021-02-10 07:26:12', '2021-02-12 18:03:03'),
(6, 'Hamida Khatun', 'Suman Miya', 'Gulam Mustofa ', '2014-08-27', 7, 3, '2019-07-10', 'Valuka', '01772645328', '4000.00', '1000.00', '500.00', '500.00', '100.00', '1000.00', '500.00', '500.00', '100.00', '9', '4000.00', '0', '2021-02-10 07:29:39', '0000-00-00 00:00:00'),
(7, 'Sharmin', 'Rashedul', 'Mahamudul', '2013-07-10', 8, 1, '2017-01-10', 'Mymensingh', '01997436243', '5000.00', '1000.00', '1000.00', '500.00', '400.00', '1000.00', '1000.00', '500.00', '400.00', '11', '5000.00', '0', '2021-02-10 07:40:08', '0000-00-00 00:00:00'),
(8, 'morjina Khatun', 'Monirul Islam', 'Hadiyul', '2013-02-10', 9, 2, '2020-08-10', 'mymensingh', '01954884370', '5000.00', '1000.00', '1000.00', '500.00', '500.00', '1000.00', '1000.00', '500.00', '500.00', '11', '5000.00', '0', '2021-02-10 07:42:45', '0000-00-00 00:00:00');

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
  `role` varchar(50) NOT NULL DEFAULT 'user',
  `lastlogin` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `name`, `emailid`, `role`, `lastlogin`) VALUES
(1, 'admin', '5f4dcc3b5aa765d61d8327deb882cf99', 'Admin', 'admin@admin.com', 'admin', '2018-03-15 03:15:10'),
(2, 'user', '5f4dcc3b5aa765d61d8327deb882cf99', 'User', 'user@user.com', 'user', '2018-03-15 03:15:10');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `bus_student`
--
ALTER TABLE `bus_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bus_transaction`
--
ALTER TABLE `bus_transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `expense`
--
ALTER TABLE `expense`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
