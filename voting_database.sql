-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2023 at 03:16 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `voting_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_candidate`
--

CREATE TABLE `add_candidate` (
  `UID` int(20) NOT NULL,
  `fstname` varchar(30) NOT NULL,
  `course` varchar(30) NOT NULL,
  `image` varchar(500) NOT NULL,
  `vote` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_candidate`
--

INSERT INTO `add_candidate` (`UID`, `fstname`, `course`, `image`, `vote`) VALUES
(12212, 'RITIK RAJ TRIPATHI', 'bca', '64b31b039e38a.jpeg', 0),
(12321, 'ARJU SHARMA', 'bca', '64b31ac18b18a.jpeg', 0),
(15432, 'VYOM DUBEY', 'bca', '64b31addb7800.jpeg', 0),
(23212, 'RITIK KHARE', 'bca', '64b31af2b8584.jpeg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `Email` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Trans_passwd` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`Email`, `Password`, `Trans_passwd`) VALUES
('admin@gmail.com', '123456', '123456'),
('ritikkhare01@gmail.com', '123', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `rollno` int(20) NOT NULL,
  `Full name` varchar(30) NOT NULL,
  `last name` varchar(30) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`rollno`, `Full name`, `last name`, `Email`, `password`) VALUES
(0, '', '', '', ''),
(0, '', '', '', ''),
(0, '', '', '123456789', ''),
(0, '', '', '123456789', ''),
(0, '', '', '123465789', ''),
(0, '', '', '', ''),
(0, '', '', '123456789', ''),
(0, '', '', '', ''),
(0, '', '', '', ''),
(0, '', '', '12asd', ''),
(0, '', '', '', ''),
(74, 'ritik', 'khare', 'ritik@gmail.com', '123'),
(0, '', '', '', ''),
(122, 'vyom', 'dubey', 'khaae@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `otpregistration`
--

CREATE TABLE `otpregistration` (
  `email` varchar(30) NOT NULL,
  `otp` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `otpregistration`
--

INSERT INTO `otpregistration` (`email`, `otp`) VALUES
('vyomdubey2001@gmail.com', 736692),
('vyomdubeykp@gmail.com', 548145);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `IsResultPublished` int(1) NOT NULL,
  `isVotingStarted` int(1) NOT NULL,
  `ss` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`IsResultPublished`, `isVotingStarted`, `ss`) VALUES
(1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `Roll no` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `course` varchar(20) NOT NULL,
  `Semester` varchar(15) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `isEmailVerified` int(1) NOT NULL,
  `isVoted` decimal(1,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`Roll no`, `name`, `course`, `Semester`, `Email`, `password`, `isEmailVerified`, `isVoted`) VALUES
(11, 'vyom dubey', 'BCA', 'first semester', 'vyomdubeykp@gmail.com', '11', 1, '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_candidate`
--
ALTER TABLE `add_candidate`
  ADD PRIMARY KEY (`UID`);

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `otpregistration`
--
ALTER TABLE `otpregistration`
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD UNIQUE KEY `IsResultPublished` (`IsResultPublished`);

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`Roll no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
