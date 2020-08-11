-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2020 at 07:46 PM
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
  `id` varchar(255) NOT NULL,
  `groupname` varchar(255) NOT NULL,
  `facultyid` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `evalulators`
--

INSERT INTO `evalulators` (`id`, `groupname`, `facultyid`) VALUES
('f_1', 'f_1', 319),
('f_2', 'f_2', 664);

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
  `domain` varchar(255) NOT NULL DEFAULT 'ML/AI',
  `isEvaluator` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`sdrn`, `name`, `dept_name`, `phone`, `emailid`, `desig`, `domain`, `isEvaluator`) VALUES
(319, 'Mrs.  Bharne Smita D.', 'COMPUTER SCIENCE', '9096967040', 'bharne.smita@gmail.com', 'ADHOC PROFESSOR', 'ML/AI', 1),
(343, 'Dr. Vidhate Amarsinh A. ', 'COMPUTER SCIENCE', '9819384911', 'vidhate.amarsinh@gmail.com', 'Professor', 'ML/AI', 1),
(381, 'Dr. NarawadeVaibhav E. ', 'COMPUTER SCIENCE', '9869756853', 'narawade.vaibhav@rediffmail.com', 'PROFESSOR', 'ML/AI', 0),
(409, 'Dr. Joshi Bharti A. ', 'COMPUTER SCIENCE', '9324981241', 'joshi.bharti@gmail.com', 'PROFESSOR', 'ML/AI', 0),
(417, 'Dr. Dakhane Dhanajay M. ', 'COMPUTER SCIENCE', '9819144869', 'dakhane.dhanajay@yahoo.co.in', 'Professor', 'ML/AI', 0),
(454, 'Dr. Choudhari Sangeeta S.', 'COMPUTER SCIENCE', '9220329227', 'choudhari.sangeeta@gmail.com ', 'PROFESSOR', 'ML/AI', 0),
(490, 'Dr. Sharma Neeraj K. ', 'COMPUTER SCIENCE', '9970050445', 'sharma.neeraj@ gmail.com', 'Professor', 'ML/AI', 0),
(496, 'Dr. Barve Amit K. ', 'COMPUTER SCIENCE', '9029729347', 'bharve.amit@gmail.com', 'PROFESSOR', 'ML/AI', 0),
(515, 'Dr. Kolte Shilpa G.', 'COMPUTER SCIENCE', '9821344893', 'kolte.shilpa@gmail.com', 'PROFESSOR', 'ML/AI', 0),
(561, 'Mrs. Mane Vanita M. ', 'COMPUTER SCIENCE', '9096127012', 'mane.vanita@gmail.com', 'Associate Professor', 'ML/AI', 1),
(579, 'Mrs. Shedge Rajashree A. ', 'COMPUTER SCIENCE', '8097849645', 'shedge.rajashree@gmail.com', 'ASSTT. PROFESSOR', 'ML/AI', 0),
(582, 'Mrs. Padiya Puja Y. ', 'COMPUTER SCIENCE', '9766027442', 'padiya.puja@gmail.com', 'Associate Professor', 'ML/AI', 0),
(586, 'Mrs. Dhumal Rashmi A.', 'COMPUTER SCIENCE', '8424887047', 'dhumal.rashmi@gmail.com', 'ASSTT. PROFESSOR', 'ML/AI', 0),
(610, 'Mrs. Chhabria Aditi S. ', 'COMPUTER SCIENCE', '9833685166', 'chhabria.aditi@gmail.com', 'ASSTT. PROFESSOR', 'ML/AI', 0),
(623, 'Mrs. Maktum Tabassum A. ', 'COMPUTER SCIENCE', '9970893294', 'matkum.tabassum@gmail.com', 'ASSTT. PROFESSOR', 'ML/AI', 0),
(632, 'Mr. Chikkareddi Vishwanath ', 'COMPUTER SCIENCE', '8451845925', 'chikkareddi.vishwanath@yahoo.co', 'ASSTT. PROFESSOR', 'ML/AI', 0),
(634, 'Mrs. Gaikwad Snehal P. ', 'COMPUTER SCIENCE', '9664297355', 'gaikwad.snehal@gmail.com', 'ASSTT. PROFESSOR', 'ML/AI', 0),
(639, 'Mrs. Pulgam Namita D. ', 'COMPUTER SCIENCE', '9987782846/47', 'pulgam.namita@yahoo.co.in', 'ASSTT. PROFESSOR', 'ML/AI', 0),
(664, 'Mrs. Shinde Apurva S. ', 'COMPUTER SCIENCE', '9167101069', 'shinde.apurva@gmail.com', 'ASSTT. PROFESSOR', 'ML/AI', 1),
(665, 'Mrs. Kaur Preet C. ', 'COMPUTER SCIENCE', '9870071870', 'kaur.preet@gmail.com', 'ASSTT. PROFESSOR', 'ML/AI', 0),
(799, 'Mr. Ghorpade Tushar H. ', 'COMPUTER SCIENCE', '9819030975', 'ghorpade.tushar@yahoo.co.in ', 'ASSTT. PROFESSOR', 'ML/AI', 0),
(802, 'Dr. Ragha Leena R.', 'COMPUTER SCIENCE', '8888075747', 'dr.leena.ragha@gmail.com', 'Prof.', 'ML/AI', 1),
(810, 'Mrs. Ahir Sheetal A. ', 'COMPUTER SCIENCE', '8087394960', 'ahir.sheetal@gmail.com', 'ASSTT. PROFESSOR', 'ML/AI', 0),
(823, 'Mrs. Ekta K. Sarda', 'COMPUTER SCIENCE', '9969664235', 'sarda.ekta@gmail.com', 'LECTURER', 'ML/AI', 0),
(879, 'Mrs. Bodhe Swarupa', 'COMPUTER SCIENCE', '9936230788', 'bodhe.swarupa@hotmail.com', 'ASSTT. PROFESSOR', 'ML/AI', 0),
(883, 'Mrs. Bhoir Smita V. ', 'COMPUTER SCIENCE', '9828754282', 'bhoir.smita@gmail.com', 'ADHOC PROFESSOR', 'ML/AI', 0);

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
(1, 'f_1', 'Nikhil Ingale', 'Makarand Madhavi', 'Piyush Jha'),
(2, 'f_2', 'Kaushal Chande', 'Rohan Kadam', 'Rushab Mahawarkar'),
(3, 's_3', 'Isha Gujar', 'Mansi Lambat', 'Hemant Singh'),
(4, 's_4', 'Prasad Shete', 'Piyush Kadam', 'Mahesh Mahawarkar'),
(13, 'f_5', 'Vijay Dubhalkar', 'Harish Lanke', 'Abhishek Kolte'),
(14, 'f_6', 'Navtesh Sharma', 'Anuj Koli', 'Akhil Panchal');

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
(1, 'admin', 'admin', 'admin', 0, 'IT'),
(2, 'f_1', '123', 'student', 1, 'IT'),
(3, '319', '123', 'faculty', 0, 'IT'),
(4, 'f_2', '123', 'student', 0, 'IT'),
(5, 's_3', '123', 'student', 0, 'IT'),
(14, 's_4', 'IYA134', 'student', 0, 'IT'),
(15, 'f_5', '123', 'student', 0, 'IT'),
(16, 'f_6', '123', 'student', 0, 'IT');

-- --------------------------------------------------------

--
-- Table structure for table `mentor`
--

CREATE TABLE `mentor` (
  `id` int(5) NOT NULL,
  `groupname` varchar(255) NOT NULL,
  `facultyid` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mentor`
--

INSERT INTO `mentor` (`id`, `groupname`, `facultyid`) VALUES
(0, 'f_1', 665),
(0, 'f_2', 810),
(0, 'f_6', 664);

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
  `mentor` varchar(255) NOT NULL,
  `comment` varchar(2250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `groupname`, `project_name`, `domain`, `abstract`, `ppt`, `research_paper_1`, `research_paper_2`, `research_paper_3`, `status`, `mentor`, `comment`) VALUES
(1, 'f_1', 'Snake Robot', 'Machine Learning', 'Nowadays robotics has grown beyond leaps in almost all every aspect of life and the most important fields are rescue search and medical field. Every year a number of people are losing their life because of natural calamities such as earthquakes and mine accidents. Often, many are trapped in the. Our idea is to provide a robot which can easily penetrate through the small gaps in debris and to track the people trapped inside and rescue them. \r\n\r\nSerpentine resembles the motion of the snake and is highly flexible to navigate through the available path in the debris. Basically, our serpentine has two modes of operation: In the first mode, it moves autonomously like a snake. This has been achieved through software. In the second mode, it just moves according to our instructions and this is handled via remote control. In each mode, a camera on the head of serpentine continuously provides the visual information to outside world through which we can track the trapped people and rescue them.', '5f286a6d44c6fran2018.pdf', '5f286a6d44c79ran2018.pdf', '5f286a6d44c7cran2018.pdf', '', 'Accept', '', 'great'),
(2, 'f_2', 'Cataract Detection', 'Machine Learning', 'vcjbsdvndf', '5f2d495db3426ran2018.pdf', '5f2d495db6a71ran2018.pdf', '5f2d495db6a8cran2018.pdf', '', 'Accept', '', 'Good'),
(3, 'f_6', 'Facial Expression Detection', 'Machine Learning', 'jbdsvmrtn', '5f2e89ae1dd01ran2018.pdf', '5f2e89ae2113cran2018.pdf', '5f2e89ae21153ran2018.pdf', '5f2e89ae2115b', 'pending', '', '');

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
(1, 'Nikhil Ingale', '17IT3001', 'nikhil.ingale99@gmail.com', 'IT', 'TE', 'A', 'A3', '7977064752', 1, 1),
(2, 'Makarand Madhavi', '17IT3002', 'makarand.madhavi99@gmail.com', 'IT', 'TE', 'A', 'A2', '1234567891', 1, 1),
(3, 'Piyush Jha', '17IT3003', 'piyush.jha99@gmail.com', 'IT', 'TE', 'A', 'A1', '1987654321', 1, 1),
(4, 'Isha Gujar', '17IT3004', 'isha.gujar99@gmail.com', 'IT', 'TE', 'A', 'A3', '5432167891', 2, 1),
(5, 'Mansi Lambat', '17IT3005', 'mansi.lambat99@gmail.com', 'IT', 'TE', 'A', 'A1', '6789012345', 2, 1),
(6, 'Hemant Singh', '17IT3006', 'hemant.singh99@gmail.com', 'IT', 'TE', 'A', 'A3', '1234567890', 1, 1),
(7, 'Prasad Shete', '17IT3007', 'prasad.shete99@gmail.com', 'IT', 'TE', 'A', 'A4', '1223456789', 2, 1),
(8, 'Piyush Kadam', '17IT3008', 'piyush.kadam99@gmail.com', 'IT', 'TE', 'A', 'A2', '2345617890', 1, 1),
(9, 'Kaushal Chande', '17IT3009', 'kaushal.chande99@gmail.com', 'IT', 'TE', 'A', 'A1', '7890123456', 1, 1),
(10, 'Rohan Kadam', '17IT3010', 'rohan.kadam99@gmail.com', 'IT', 'TE', 'A', 'A3', '4567890123', 2, 1),
(11, 'Rushab Mahawarkar', '17IT3011', 'rushab.mahawarkar99@gmail.com', 'IT', 'TE', 'A', 'A4', '7977064752', 1, 1),
(12, 'Mahesh Mahawarkar', '17IT3012', 'mahesh.mahawarkar99@gmail.com', 'IT', 'TE', 'A', 'A1', '1234567891', 2, 1),
(13, 'Vijay Dubhalkar', '17IT3013', 'vijay.dubhalkar99@gmail.com', 'IT', 'TE', 'A', 'A3', '1987654321', 1, 1),
(14, 'Harish Lanke', '17IT3014', 'harish.lanke99@gmail.com', 'IT', 'TE', 'A', 'A2', '5432167891', 1, 1),
(15, 'Abhishek Kolte', '17IT3015', 'abhishek.kolte99@gmail.com', 'IT', 'TE', 'A', 'A1', '6789012345', 2, 1),
(16, 'Navtesh Sharma', '17IT3016', 'navtesh.sharma99@gmail.com', 'IT', 'TE', 'A', 'A4', '1234567890', 2, 1),
(17, 'Anuj Koli', '17IT3017', 'anuj.koli99@gmail.com', 'IT', 'TE', 'A', 'A1', '1223456789', 1, 1),
(18, 'Akhil Panchal', '17IT3018', 'akhil.panchal99@gmail.com', 'IT', 'TE', 'A', 'A4', '2345617890', 1, 1),
(19, 'Shivam Gaikwad', '17IT3019', 'shivam.gaikwad99@gmail.com', 'IT', 'TE', 'A', 'A2', '7890123456', 1, 0),
(20, 'Niraj Singh', '17IT3020', 'niraj.singh99@gmail.com', 'IT', 'TE', 'A', 'A1', '4567890123', 1, 0),
(21, 'Adarsh Pednekar', '17IT3021', 'adarsh.pednekar99@gmail.com', 'IT', 'TE', 'A', 'A3', '7977064752', 1, 0),
(22, 'Rohan Behera', '17IT3022', 'rohan.behera99@gmail.com', 'IT', 'TE', 'A', 'A3', '1234567891', 2, 0),
(23, 'Shubham Karkar', '17IT3023', 'shubham.karkar99@gmail.com', 'IT', 'TE', 'A', 'A4', '1987654321', 1, 0);

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
  ADD PRIMARY KEY (`groupname`);

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
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
