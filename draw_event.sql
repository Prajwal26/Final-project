-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2019 at 02:49 PM
-- Server version: 5.5.57
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `draw_event`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `Sno` int(11) NOT NULL,
  `Name` varchar(60) NOT NULL,
  `Val` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`Sno`, `Name`, `Val`) VALUES
(5, 'Slide 1 Title', 'Open mic Session'),
(6, 'Slide 1 Data', 'Rustik Mej Cafe Indore'),
(7, 'Slide 2 Title', 'Event Decortion'),
(8, 'Slide 2 Data', 'Winter Has COme'),
(9, 'Slide 3 Title', 'Where are you'),
(10, 'Slide 3 data', 'TERE KO KYA'),
(11, 'Slide 4 Title', 'Party'),
(12, 'Slide 4 Data', 'LALA KI CHAAL'),
(13, 'Vendors', '111156'),
(14, 'Events Planned', '2222'),
(15, 'Projects', '3333'),
(16, 'Cities', '444');

-- --------------------------------------------------------

--
-- Table structure for table `eventdetails`
--

CREATE TABLE `eventdetails` (
  `event_id` int(11) DEFAULT NULL,
  `event_name` varchar(100) DEFAULT NULL,
  `event_date` date DEFAULT NULL,
  `people` int(11) DEFAULT NULL,
  `budget_start` int(11) DEFAULT NULL,
  `budget_end` int(11) DEFAULT NULL,
  `other_spec` varchar(200) DEFAULT NULL,
  `personid` int(11) NOT NULL,
  `seen` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eventdetails`
--

INSERT INTO `eventdetails` (`event_id`, `event_name`, `event_date`, `people`, `budget_start`, `budget_end`, `other_spec`, `personid`, `seen`) VALUES
(1002, 'birthday', '2016-01-18', 55, 50000, 54223, 'proper dining should be there', 1001, 0),
(1004, 'wedding', '2017-01-18', 450, 563234, 4586695, 'luxorious wedding', 1001, 1);

-- --------------------------------------------------------

--
-- Table structure for table `person_details`
--

CREATE TABLE `person_details` (
  `name` varchar(50) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `contact` int(10) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `personid` int(11) NOT NULL DEFAULT '0',
  `password` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person_details`
--

INSERT INTO `person_details` (`name`, `city`, `contact`, `email`, `address`, `personid`, `password`) VALUES
('ramesh', 'agra', 456666346, 'hh@gmail.com', 'india nagar', 1001, '12345'),
('suresh', 'indore', 45865428, 'pk@gmail.com', 'rajendra nagar', 1002, '12345'),
('dobendra', 'pakistan', 45668855, 'dob@gmail.com', 'chota pakistan', 1004, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`Sno`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
