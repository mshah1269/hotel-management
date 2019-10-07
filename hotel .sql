-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Sep 30, 2019 at 04:16 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cusid` int(10) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phoneno` bigint(10) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cusid`, `fname`, `lname`, `email`, `phoneno`, `dob`, `address`) VALUES
(17, 'YASH', 'SHAH', 'mshah261299@gmail.com', 9321440501, '0000-00-00', ' '),
(18, 'YASH', 'SHAH', 'mshah261299@gmail.com', 9321440501, '0000-00-00', ' '),
(19, 'purvesh', 'sakhiya', 'pur@gmail.com', 7977255132, '2019-09-25', 'b/106 sanghvi tower'),
(20, 'shantanu', 'shah', 'shan@gmail.com', 8080189802, '1999-10-20', 'shaitan gali, khatra mahal ,andher-nagar , near sh');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `room_id` int(10) NOT NULL,
  `room_type` varchar(50) NOT NULL,
  `room_price` int(20) NOT NULL,
  `cusid` int(10) DEFAULT NULL,
  `available` int(10) NOT NULL,
  `check_in` date DEFAULT NULL,
  `check_out` date DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  `last_update` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `room_type`, `room_price`, `cusid`, `available`, `check_in`, `check_out`, `description`, `last_update`) VALUES
(101, 'deluxe', 15000, 18, 0, NULL, NULL, NULL, '2019-09-21 20:25:28'),
(102, 'deluxe', 15000, 17, 0, NULL, NULL, NULL, '2019-09-21 20:26:14'),
(103, 'deluxe', 15000, 17, 0, '0000-00-00', '0000-00-00', ' ', '2019-09-21 20:26:14'),
(104, 'deluxe', 15000, 19, 0, '2019-09-25', '2019-09-26', ' yeah', '2019-09-21 20:26:46'),
(105, 'deluxe', 15000, 20, 0, '2019-09-25', '2019-09-26', ' ', '2019-09-21 20:26:46'),
(201, 'double', 10000, 18, 0, '0000-00-00', '0000-00-00', ' chacha vidhayak h hamare', '2019-09-21 20:27:39'),
(202, 'double', 10000, 19, 0, '2019-09-26', '2019-09-27', ' ', '2019-09-21 20:27:39'),
(203, 'double', 10000, NULL, 1, NULL, NULL, NULL, '2019-09-21 20:28:19'),
(204, 'double', 10000, 18, 0, '2019-09-27', '2019-09-27', ' ', '2019-09-21 20:28:19'),
(205, 'double', 10000, NULL, 1, NULL, NULL, NULL, '2019-09-21 20:29:37'),
(301, 'single', 5000, NULL, 1, NULL, NULL, NULL, '2019-09-21 20:29:37'),
(302, 'single', 5000, 18, 0, '2019-09-27', '2019-09-28', ' ', '2019-09-21 20:30:20'),
(303, 'single', 5000, NULL, 1, NULL, NULL, NULL, '2019-09-21 20:30:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cusid`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cusid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
