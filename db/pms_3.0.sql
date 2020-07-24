-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2020 at 03:23 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pms`
--

-- --------------------------------------------------------

--
-- Table structure for table `evalulators`
--

CREATE TABLE `evalulators` (
  `id` int(5) NOT NULL,
  `groupid` int(5) NOT NULL,
  `facultyid` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `sdrn` int(3) NOT NULL,
  `name` varchar(27) DEFAULT NULL,
  `dept_name` varchar(16) DEFAULT NULL,
  `phone` varchar(13) DEFAULT NULL,
  `emailid` varchar(31) DEFAULT NULL,
  `desig` varchar(21) DEFAULT NULL,
  `domain` varchar(255) NOT NULL,
  `is_evaluator` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`sdrn`, `name`, `dept_name`, `phone`, `emailid`, `desig`, `domain`, `is_evaluator`) VALUES
(13, 'Andrew111 Ng', 'IT', '9874111135', 'andr111ew@gmail.com', 'p334rof', 'Machine learning', 0),
(123, 'Andrew Ng', 'IT', '987435', 'andrew@gmail.com', 'prof', 'Internet OF Things', 0);

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(255) NOT NULL,
  `groupname` varchar(255) NOT NULL,
  `member1` varchar(255) NOT NULL,
  `member2` varchar(255) NOT NULL,
  `member3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `groupname`, `member1`, `member2`, `member3`) VALUES
(7, 'f_1', 'piyush', 'nikhil', 'makarand'),
(8, 'f_2', 'piyush', 'nikhil', 'makarand');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `type` varchar(10) NOT NULL,
  `change_password` int(11) NOT NULL DEFAULT 0,
  `department` varchar(255) NOT NULL DEFAULT 'IT'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `type`, `change_password`, `department`) VALUES
(1, 'f_1', 'NIKmak5@', 'student', 1, 'IT');

-- --------------------------------------------------------

--
-- Table structure for table `mentor`
--

CREATE TABLE `mentor` (
  `id` int(5) NOT NULL,
  `groupid` int(5) NOT NULL,
  `facultyid` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `groupname` varchar(255) NOT NULL,
  `project_name` varchar(500) NOT NULL,
  `domain` varchar(255) NOT NULL,
  `abstract` longtext NOT NULL,
  `ppt` varchar(255) NOT NULL,
  `research_paper_1` varchar(255) NOT NULL,
  `research_paper_2` varchar(255) NOT NULL,
  `research_paper_3` varchar(255) NOT NULL DEFAULT '""',
  `status` varchar(20) NOT NULL,
  `mentor` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `groupname`, `project_name`, `domain`, `abstract`, `ppt`, `research_paper_1`, `research_paper_2`, `research_paper_3`, `status`, `mentor`) VALUES
(61, 'f_1', 'cxv', 'fewwffevr', 'grg', '../uploads/5f188f1c36943resume.pdf', '../uploads/5f188f1c36951passport.jpeg', '../uploads/5f188f1c36955passport.jpeg', '../uploads/5f188f1c36971', 'pending', '');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(255) NOT NULL,
  `name` varchar(256) NOT NULL,
  `rollno` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `year` varchar(10) NOT NULL,
  `division` varchar(1) NOT NULL,
  `batch` varchar(2) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `shift` int(11) NOT NULL,
  `isGrouped` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `rollno`, `email`, `department`, `year`, `division`, `batch`, `phone`, `shift`, `isGrouped`) VALUES
(31, 'piyush', '17IT1', 'piyushjha65@gmail.com', 'IT', 'te', 'A', 'A1', '35', 1, 1),
(34, 'nikhil', '17IT111', 'piyushjha65@gmail.com', 'IT', 'te', 'A', 'A1', '35', 1, 1),
(35, 'makarand', '17IT10127', 'piyushjha65@gmail.com', 'IT', 'te', 'A', 'A1', '35', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `evalulators`
--
ALTER TABLE `evalulators`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`sdrn`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mentor`
--
ALTER TABLE `mentor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rollno` (`rollno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `evalulators`
--
ALTER TABLE `evalulators`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mentor`
--
ALTER TABLE `mentor`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
