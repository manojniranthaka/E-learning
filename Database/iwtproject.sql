-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2018 at 04:55 AM
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
-- Database: `iwtproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `cartsahanjayawardena96`
--

CREATE TABLE `cartsahanjayawardena96` (
  `MaterialID` int(11) NOT NULL,
  `MatName` text,
  `Category` varchar(30) DEFAULT NULL,
  `Price` float DEFAULT NULL,
  `Description` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cartsahanjayawardena96`
--

INSERT INTO `cartsahanjayawardena96` (`MaterialID`, `MatName`, `Category`, `Price`, `Description`) VALUES
(3, 'Introduction to English', 'English', 500, 'Part 1');

-- --------------------------------------------------------

--
-- Table structure for table `carttest123`
--

CREATE TABLE `carttest123` (
  `MaterialID` int(11) NOT NULL,
  `MatName` text,
  `Category` varchar(30) DEFAULT NULL,
  `Price` float DEFAULT NULL,
  `Description` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carttest123`
--

INSERT INTO `carttest123` (`MaterialID`, `MatName`, `Category`, `Price`, `Description`) VALUES
(2, 'Introduction to Maths', 'Maths', 500, 'Part 1'),
(3, 'Introduction to English', 'English', 500, 'Part 1');

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `MaterialID` int(11) NOT NULL,
  `MatName` text NOT NULL,
  `Category` varchar(30) NOT NULL,
  `Price` float NOT NULL,
  `Description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`MaterialID`, `MatName`, `Category`, `Price`, `Description`) VALUES
(2, 'Introduction to Maths', 'Maths', 500, 'Part 1'),
(3, 'Introduction to English', 'English', 500, 'Part 1'),
(4, 'Inorganic', 'Science', 600, 'Part 1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `FirstName` varchar(30) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `DateOfBirth` date NOT NULL,
  `Gender` varchar(8) NOT NULL,
  `User_ID` int(11) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`FirstName`, `LastName`, `DateOfBirth`, `Gender`, `User_ID`, `Username`, `Email`, `Password`) VALUES
('Andrew', 'Fernando', '2017-11-07', 'Male', 24, 'test123', 'andy@gmail.com', 'Test123#'),
('Sahan', 'Jayawardena', '1996-04-19', 'Male', 25, 'sahanjayawardena96', 'sahanlakshitha1996@hotmail.com', 'Sahan12345.');

-- --------------------------------------------------------

--
-- Table structure for table `userlogouttime`
--

CREATE TABLE `userlogouttime` (
  `LogID` int(11) NOT NULL,
  `Username` varchar(10) NOT NULL,
  `Date_Time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlogouttime`
--

INSERT INTO `userlogouttime` (`LogID`, `Username`, `Date_Time`) VALUES
(68, 'test123', '2017-Nov-18 11:27:55'),
(69, 'test123', '2017-Nov-20 11:05:24'),
(70, 'test123', '2017-Nov-20 11:09:02'),
(71, 'test123', '2017-Nov-20 11:17:27'),
(72, 'test123', '2017-Nov-20 11:49:52'),
(73, 'test123', '2018-Mar-06 12:05:36'),
(74, 'sahanjayaw', '2018-Mar-06 12:09:22');

-- --------------------------------------------------------

--
-- Table structure for table `userlogtime`
--

CREATE TABLE `userlogtime` (
  `LogID` int(11) NOT NULL,
  `Username` varchar(10) NOT NULL,
  `Date_Time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlogtime`
--

INSERT INTO `userlogtime` (`LogID`, `Username`, `Date_Time`) VALUES
(87, 'test123', '2017-Nov-18 11:27:51'),
(88, 'test123', '2017-Nov-20 10:55:47'),
(89, 'test123', '2017-Nov-20 11:06:07'),
(90, 'test123', '2017-Nov-20 11:14:03'),
(91, 'test123', '2017-Nov-20 11:37:47'),
(92, 'test123', '2017-Nov-20 11:50:02'),
(93, 'test123', '2017-Nov-20 11:54:01'),
(94, 'test123', '2017-Nov-20 11:58:35'),
(95, 'test123', '2017-Nov-20 12:05:00'),
(96, 'test123', '2018-Mar-06 12:03:07'),
(97, 'sahanjayaw', '2018-Mar-06 12:08:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cartsahanjayawardena96`
--
ALTER TABLE `cartsahanjayawardena96`
  ADD PRIMARY KEY (`MaterialID`);

--
-- Indexes for table `carttest123`
--
ALTER TABLE `carttest123`
  ADD PRIMARY KEY (`MaterialID`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`MaterialID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_ID`);

--
-- Indexes for table `userlogouttime`
--
ALTER TABLE `userlogouttime`
  ADD PRIMARY KEY (`LogID`);

--
-- Indexes for table `userlogtime`
--
ALTER TABLE `userlogtime`
  ADD PRIMARY KEY (`LogID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `userlogouttime`
--
ALTER TABLE `userlogouttime`
  MODIFY `LogID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `userlogtime`
--
ALTER TABLE `userlogtime`
  MODIFY `LogID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
