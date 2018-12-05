-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2018 at 08:50 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `customer_su`
--

-- --------------------------------------------------------

--
-- Table structure for table `com_su`
--

CREATE TABLE `com_su` (
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `com_su`
--

INSERT INTO `com_su` (`username`, `email`, `password`, `address`, `contact`) VALUES
('abc', 'abc@gmail.com', 'abc', 'abc', 4567891230),
('Aman LTD pvr', 'aman@gmail.com', 'aman', 'mumbai', 9876543210),
('Deep LTD PVR', 'deep@gmail.com', 'deep', 'sarbhon,Bardoli', 9952631478),
('fenil', 'fenil@gmail.com', 'fenil', 'maroli', 1472583690),
('mitul pvt ltd', 'mitul@gmail.com', 'mitul', 'bardoli', 4561237890),
('Raj LTD PVT', 'raj@gmail.com', 'raj123', 'Bharuch,Gujarat', 1234567890),
('Sougat PVT LTD', 'sougat@gmail.com', 'sougat', 'Dubai', 9596979899);

-- --------------------------------------------------------

--
-- Table structure for table `cus_su`
--

CREATE TABLE `cus_su` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` bigint(13) NOT NULL,
  `password` varchar(255) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `experience` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cus_su`
--

INSERT INTO `cus_su` (`name`, `email`, `contact`, `password`, `degree`, `experience`) VALUES
('deep', 'deep1@gmail.com', 9714948994, 'deep', 'Mechanical Engg.', 0),
('Manan', 'manan@gmail.com', 9714948994, 'manan', 'Computer Engg.', 6),
('ravi', 'ravi@gmail.com', 3216549870, 'ravi', 'Computer Engg.', 4),
('rishabh', 'rishabh@gmail.com', 5826934000, 'rishabh', 'Computer Engg.', 5),
('zxc', 'zxc@gmail.com', 1472583690, 'zxc', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `emp_com`
--

CREATE TABLE `emp_com` (
  `job` int(255) NOT NULL,
  `employee` varchar(255) NOT NULL,
  `no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_com`
--

INSERT INTO `emp_com` (`job`, `employee`, `no`) VALUES
(1, 'deep1@gmail.com', 1),
(3, 'manan@gmail.com', 2),
(6, 'ravi@gmail.com', 3),
(1, 'rishabh@gmail.com', 4),
(3, 'rishabh@gmail.com', 5),
(6, 'rishabh@gmail.com', 6),
(3, 'deep1@gmail.com', 7);

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `email` varchar(255) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `experience` int(11) NOT NULL,
  `position` varchar(255) NOT NULL,
  `vacancy` int(11) NOT NULL,
  `salary` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`email`, `degree`, `experience`, `position`, `vacancy`, `salary`, `id`) VALUES
('raj@gmail.com', 'Computer Engg.', 0, 'programmer', 1, 10000, 1),
('raj@gmail.com', 'Mechanical Engg.', 2, 'fitter', 2, 1000, 2),
('mitul@gmail.com', 'Computer Engg.', 1, 'gs', 3, 11000, 3),
('mitul@gmail.com', 'Mechanical Engg.', 2, 'cr', 3, 30000, 4),
('mitul@gmail.com', 'Mechanical Engg.', 4, 'coder', 2, 20000, 5),
('abc@gmail.com', 'Computer Engg.', 1, 'programmer', 3, 30000, 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `com_su`
--
ALTER TABLE `com_su`
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `contact` (`contact`);

--
-- Indexes for table `cus_su`
--
ALTER TABLE `cus_su`
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `emp_com`
--
ALTER TABLE `emp_com`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emp_com`
--
ALTER TABLE `emp_com`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
