-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2020 at 04:30 PM
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
  `research_paper_3` varchar(255) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `groupname`, `project_name`, `domain`, `abstract`, `ppt`, `research_paper_1`, `research_paper_2`, `research_paper_3`, `status`) VALUES
(52, 's_1', 'web', 'ML', 'dsgdgf', '../assets/uploads/ppt/5f0c82ad52862aptwhatjr.pdf', '../assets/uploads/ppt/5f0c82ad52875aptwhatjr.pdf', '../assets/uploads/ppt/5f0c82ad5287captwhatjr.pdf', '../assets/uploads/ppt/5f0c82ad52882aptwhatjr.pdf', 'pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
