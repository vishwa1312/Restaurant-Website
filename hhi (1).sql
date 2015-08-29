-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 24, 2015 at 09:25 AM
-- Server version: 5.5.41-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hhi`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `room_no` varchar(10) NOT NULL,
  `type` varchar(10) NOT NULL,
  `arrival` varchar(12) NOT NULL,
  `departure` varchar(12) NOT NULL,
  `avail` varchar(20) NOT NULL,
  `order_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`room_no`, `type`, `arrival`, `departure`, `avail`, `order_id`) VALUES
('deluxe_11', 'deluxe', '2015-04-23', '2015-04-24', 'Not Available', 'YEceh1J7dB'),
('deluxe_13', 'deluxe', '2015-04-01', '2015-04-03', 'Not Available', 'gtnd263B5A'),
('deluxe_12', 'deluxe', '2015-04-08', '2015-04-10', 'Not Available', 'pwlQqszxTr'),
('deluxe_21', 'deluxe', '2015-04-08', '2015-04-09', 'Not Available', 'zJ5fFMokB1');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `news` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE IF NOT EXISTS `offers` (
  `offers` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`offers`) VALUES
('special offer from 2 to 10');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
  `room_no` varchar(10) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `ph_no` varchar(10) DEFAULT NULL,
  `arrival` varchar(12) DEFAULT NULL,
  `departure` varchar(12) DEFAULT NULL,
  `order_id` varchar(10) NOT NULL,
  PRIMARY KEY (`room_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`room_no`, `name`, `email`, `ph_no`, `arrival`, `departure`, `order_id`) VALUES
('deluxe_11', 'Vishwanath', 'vishwanathhiremath13', '9738849255', '2015-04-23', '2015-04-24', 'YEceh1J7dB'),
('deluxe_12', 'Vishwa', 'vishwa@gmail.com', '9738849255', '2015-04-08', '2015-04-10', 'pwlQqszxTr'),
('deluxe_13', 'Nikhil', 'nikhil@gmail.com', '9481086260', '2015-04-01', '2015-04-03', 'gtnd263B5A'),
('deluxe_21', 'Vijay', 'vijay@gmail.com', '7896544123', '2015-04-08', '2015-04-09', 'zJ5fFMokB1');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE IF NOT EXISTS `review` (
  `review` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`review`) VALUES
('nice accomadation');

-- --------------------------------------------------------

--
-- Table structure for table `room_details`
--

CREATE TABLE IF NOT EXISTS `room_details` (
  `room_no` varchar(10) NOT NULL,
  `type` varchar(10) NOT NULL,
  `adults` int(11) NOT NULL,
  `child` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `arrival` varchar(12) NOT NULL,
  `departure` varchar(12) NOT NULL,
  `Avail` varchar(20) NOT NULL,
  PRIMARY KEY (`room_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_details`
--

INSERT INTO `room_details` (`room_no`, `type`, `adults`, `child`, `price`, `arrival`, `departure`, `Avail`) VALUES
('deluxe_1', 'deluxe', 1, 1, 3500, '2015-04-01', '2015-04-09', 'Available'),
('deluxe_10', 'deluxe', 1, 2, 4000, '', '', 'Available'),
('deluxe_11', 'deluxe', 2, 1, 4300, '2015-04-23', '2015-04-24', 'Not Available'),
('deluxe_12', 'deluxe', 2, 1, 4300, '2015-04-08', '2015-04-10', 'Not Available'),
('deluxe_13', 'deluxe', 2, 1, 4300, '2015-04-01', '2015-04-03', 'Not Available'),
('deluxe_14', 'deluxe', 2, 1, 4300, '', '', 'Available'),
('deluxe_15', 'deluxe', 2, 1, 4300, '', '', 'Available'),
('deluxe_16', 'deluxe', 3, 1, 4600, '', '', 'Available'),
('deluxe_17', 'deluxe', 3, 1, 4600, '', '', 'Available'),
('deluxe_18', 'deluxe', 3, 1, 4600, '', '', 'Available'),
('deluxe_19', 'deluxe', 3, 1, 4600, '', '', 'Available'),
('deluxe_2', 'deluxe', 1, 1, 3500, '', '', 'Available'),
('deluxe_20', 'deluxe', 3, 1, 4600, '', '', 'Available'),
('deluxe_21', 'deluxe', 2, 2, 4600, '2015-04-08', '2015-04-09', 'Not Available'),
('deluxe_22', 'deluxe', 2, 2, 4600, '', '', 'Available'),
('deluxe_23', 'deluxe', 2, 2, 4600, '', '', 'Available'),
('deluxe_24', 'deluxe', 2, 2, 4600, '', '', 'Available'),
('deluxe_25', 'deluxe', 2, 2, 4600, '', '', 'Available'),
('deluxe_26', 'deluxe', 3, 2, 4900, '', '', 'Available'),
('deluxe_27', 'deluxe', 3, 2, 4900, '', '', 'Available'),
('deluxe_28', 'deluxe', 3, 2, 4900, '', '', 'Available'),
('deluxe_29', 'deluxe', 3, 2, 4900, '', '', 'Available'),
('deluxe_3', 'deluxe', 1, 1, 3500, '', '', 'Available'),
('deluxe_30', 'deluxe', 3, 2, 4900, '', '', 'Available'),
('deluxe_4', 'deluxe', 1, 1, 3500, '', '', 'Available'),
('deluxe_5', 'deluxe', 1, 1, 3500, '', '', 'Available'),
('deluxe_6', 'deluxe', 1, 2, 4000, '', '', 'Available'),
('deluxe_7', 'deluxe', 1, 2, 4000, '', '', 'Available'),
('deluxe_8', 'deluxe', 1, 2, 4000, '', '', 'Available'),
('deluxe_9', 'deluxe', 1, 2, 4000, '', '', 'Available'),
('normal_1', 'normal', 1, 1, 1200, '', '', 'Available'),
('normal_10', 'normal', 1, 2, 2000, '', '', 'Available'),
('normal_11', 'normal', 2, 1, 2200, '', '', 'Available'),
('normal_12', 'normal', 2, 1, 2200, '', '', 'Available'),
('normal_13', 'normal', 2, 1, 2200, '', '', 'Available'),
('normal_14', 'normal', 2, 1, 2200, '', '', 'Available'),
('normal_15', 'normal', 2, 1, 2200, '', '', 'Available'),
('normal_16', 'normal', 3, 1, 2500, '', '', 'Available'),
('normal_17', 'normal', 3, 1, 2500, '', '', 'Available'),
('normal_18', 'normal', 3, 1, 2500, '', '', 'Available'),
('normal_19', 'normal', 3, 1, 2500, '', '', 'Available'),
('normal_2', 'normal', 1, 1, 1200, '', '', 'Available'),
('normal_20', 'normal', 3, 1, 2500, '', '', 'Available'),
('normal_21', 'normal', 2, 2, 2500, '', '', 'Available'),
('normal_22', 'normal', 2, 2, 2500, '', '', 'Available'),
('normal_23', 'normal', 2, 2, 2500, '', '', 'Available'),
('normal_24', 'normal', 2, 2, 2500, '', '', 'Available'),
('normal_25', 'normal', 2, 2, 2500, '', '', 'Available'),
('normal_3', 'normal', 1, 1, 1200, '', '', 'Available'),
('normal_4', 'normal', 1, 1, 1200, '', '', 'Available'),
('normal_5', 'normal', 1, 1, 1200, '', '', 'Available'),
('normal_6', 'normal', 1, 2, 2000, '', '', 'Available'),
('normal_7', 'normal', 1, 2, 2000, '', '', 'Available'),
('normal_8', 'normal', 1, 2, 2000, '', '', 'Available'),
('normal_9', 'normal', 1, 2, 2000, '', '', 'Available'),
('suite_1', 'suite', 1, 1, 2700, '', '', 'Not Available'),
('suite_10', 'suite', 1, 2, 3200, '', '', 'Not Available'),
('suite_11', 'suite', 2, 1, 3500, '', '', 'Not Available'),
('suite_12', 'suite', 2, 1, 3500, '', '', 'Not Available'),
('suite_13', 'suite', 2, 1, 3500, '', '', 'Not Available'),
('suite_14', 'suite', 2, 1, 3500, '', '', 'Not Available'),
('suite_15', 'suite', 2, 1, 3500, '', '', 'Not Available'),
('suite_16', 'suite', 3, 1, 3800, '', '', 'Not Available'),
('suite_17', 'suite', 3, 1, 3800, '', '', 'Not Available'),
('suite_18', 'suite', 3, 1, 3800, '', '', 'Not Available'),
('suite_19', 'suite', 3, 1, 3800, '', '', 'Not Available'),
('suite_2', 'suite', 1, 1, 2700, '', '', 'Not Available'),
('suite_20', 'suite', 3, 1, 3800, '', '', 'Not Available'),
('suite_21', 'suite', 2, 2, 3800, '', '', 'Not Available'),
('suite_22', 'suite', 2, 2, 3800, '', '', 'Not Available'),
('suite_23', 'suite', 2, 2, 3800, '', '', 'Not Available'),
('suite_24', 'suite', 2, 2, 3800, '', '', 'Not Available'),
('suite_25', 'suite', 2, 2, 3800, '', '', 'Not Available'),
('suite_26', 'suite', 3, 2, 4200, '', '', 'Not Available'),
('suite_27', 'suite', 3, 2, 4200, '', '', 'Not Available'),
('suite_28', 'suite', 3, 2, 4200, '', '', 'Not Available'),
('suite_29', 'suite', 3, 2, 4200, '', '', 'Not Available'),
('suite_3', 'suite', 1, 1, 2700, '', '', 'Not Available'),
('suite_30', 'suite', 3, 2, 4200, '', '', 'Not Available'),
('suite_4', 'suite', 1, 1, 2700, '', '', 'Not Available'),
('suite_5', 'suite', 1, 1, 2700, '', '', 'Not Available'),
('suite_6', 'suite', 1, 2, 3200, '', '', 'Not Available'),
('suite_7', 'suite', 1, 2, 3200, '', '', 'Not Available'),
('suite_8', 'suite', 1, 2, 3200, '', '', 'Not Available'),
('suite_9', 'suite', 1, 2, 3200, '', '', 'Not Available');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`room_no`) REFERENCES `room_details` (`room_no`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
