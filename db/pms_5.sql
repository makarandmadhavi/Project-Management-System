-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2020 at 05:34 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
  `groupname` varchar(255) NOT NULL,
  `facultyid` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `evalulators`
--

INSERT INTO `evalulators` (`id`, `groupname`, `facultyid`) VALUES
(1, 'f_1', 319);

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
  `isEvaluator` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`sdrn`, `name`, `dept_name`, `phone`, `emailid`, `desig`, `domain`, `isEvaluator`) VALUES
(319, 'GULWANI RESHMA RAMESHLAL', 'INFORMATION TECH', '8888075747', 'reshmagulwani@gmail.com', 'Adhoc Associate Prof.', 'ML/AI', 0),
(343, 'JADHAV DIPTI SHAILENDRA', 'INFORMATION TECH', '9819384911', '', 'Associate Professor', 'ML/AI', 0),
(381, 'DR.DASRE NARENDRAKUMAR R.', 'INFORMATION TECH', '9869756853', 'narendasre@rediffmail.com', 'ADHOC PROFESSOR', 'ML/AI', 0),
(409, 'DONGRE NILIMA MANOJ', 'INFORMATION TECH', '9324981241', '', 'ASSTT. PROFESSOR', 'ML/AI', 0),
(417, 'MARATHE NILESH RATNAKAR', 'INFORMATION TECH', '9819144869', 'nilmarathe2307 @ yahoo.co.in', 'Associate Professor', 'ML/AI', 0),
(454, 'JOSHI JYOTI KALPESH', 'INFORMATION TECH', '9220329227', 'jyo4523@gmail.com ', 'ASSTT. PROFESSOR', 'ML/AI', 0),
(490, 'KUNDALE JYOTI UMESH', 'INFORMATION TECH', '9970050445', 'jyojadhav04@ gmail.com', 'Associate Professor', 'ML/AI', 0),
(496, 'SHINDE SWAPNIL RAMESH', 'INFORMATION TECH', '9029729347', 'swapnil.rshine87@gmail.com', 'ASSTT. PROFESSOR', 'ML/AI', 0),
(515, 'SENATHI ANITA', 'INFORMATION TECH', '9821344893', 'anithasenathi@gmail.com', 'ASSTT. PROFESSOR', 'ML/AI', 0),
(561, 'DR. PATIL VIJAY BHIKA', 'INFORMATION TECH', '9096127012', 'patilvijay.95@gmail.com', 'Associate Professor', 'ML/AI', 0),
(579, 'PANSE NEELAM DEVDAS', 'INFORMATION TECH', '8097849645', 'panse.neelam@gmail.com', 'ASSTT. PROFESSOR', 'ML/AI', 0),
(582, 'MISHRA RAVITA VISHUDDHANAND', 'INFORMATION TECH', '9766027442', 'm.ravita@gmail.com', 'Associate Professor', 'ML/AI', 0),
(586, 'BITTAL VIJAYLAXMI', 'INFORMATION TECH', '8424887047', 'viaylaxmi.vittal@gmail.com', 'ASSTT. PROFESSOR', 'ML/AI', 0),
(610, 'SOLANKI SHREYA', 'INFORMATION TECH', '9833685166', 'shreyamrt@gmail.com', 'ASSTT. PROFESSOR', 'ML/AI', 0),
(623, 'PATIL ANITA RAM', 'INFORMATION TECH', '9970893294', 'aneeta.patil17@gmail.com', 'ASSTT. PROFESSOR', 'ML/AI', 0),
(632, 'BANERJEE SOUMI', 'INFORMATION TECH', '8451845925', 'soumi_crj@yahoo.co.in', 'ASSTT. PROFESSOR', 'ML/AI', 0),
(634, 'TATKARE KSHIPRA ASHOK', 'INFORMATION TECH', '9664297355', 'kshiprat.tatkare@gmail.com', 'ASSTT. PROFESSOR', 'ML/AI', 0),
(639, 'BHAGWAT SUMEDHA', 'INFORMATION TECH', '9987782846/47', 'sumedha_bhagwat@yahoo.co.in', 'ASSTT. PROFESSOR', 'ML/AI', 0),
(660, 'VAKHARE PUJA SURESH', 'INFORMATION TECH', '9773435316', 'puja.vakhare@gmail.com', 'ASSTT. PROFESSOR', 'ML/AI', 0),
(664, 'BHOPI SACHIN KAILAS', 'INFORMATION TECH', '9167101069', 'sach.703@gmail.com', 'ASSTT. PROFESSOR', 'ML/AI', 0),
(665, 'SANAP VARSHA KARBHARI', 'INFORMATION TECH', '9870071870', 'sanap-varshal13co1016@gmail.com', 'ASSTT. PROFESSOR', 'ML/AI', 0),
(703, 'KULKARNI NIKITA JANMEJAY', 'INFORMATION TECH', '9922404787', 'nikitajkulkarni@gmail.com', 'Associate Professor', 'ML/AI', 0),
(726, 'SARAF KRUPI PRANAV', 'INFORMATION TECH', '8828340945', 'krupipatel19@gmail.com', 'ASSTT. PROFESSOR', 'ML/AI', 0),
(735, 'DEONE JYOTI BHANUDASRAO', 'INFORMATION TECH', '9167913737', 'done.yyoti@hmsil.com', 'ASSTT. PROFESSOR', 'ML/AI', 0),
(737, 'PATIL DEEPALI KISHOR', 'INFORMATION TECH', '9029421978', 'deepali.kp1@rediffmail.com', 'ASSTT. PROFESSOR', 'ML/AI', 0),
(742, 'SHINGANE PRIYANKA V.', 'INFORMATION TECH', '9175689848', 'priyankashingane@gmail.com', 'ASSTT. PROFESSOR', 'ML/AI', 0),
(759, 'DR. JADHAV ASHISH NARENDRA', 'INFORMATION TECH', '7303063040', 'jadhav.ashish@gmail.com', 'PROFESSOR', 'ML/AI', 0),
(781, 'SAMUNDISWARY S.', 'INFORMATION TECH', '9969854620', 's.samundiswary@yahoo.com', 'ASSTT. PROFESSOR', 'ML/AI', 0),
(784, 'VYAS MADHAV SHASHISHEKHAR', 'INFORMATION TECH', '9987232642', 'madhavvvyasit@gmail.com', 'ASSTT.PROFESSOR', 'ML/AI', 0),
(788, 'WAGHMARE VIJAYA SANJEEV', 'INFORMATION TECH', '9869408585', 'vijayaswaghmare', 'Associate Professor', 'ML/AI', 0),
(799, 'OAK SUJATA ATUL', 'INFORMATION TECH', '9819030975', 'oak_sujata@yahoo.co.in ', 'ASSTT. PROFESSOR', 'ML/AI', 0),
(809, 'DR. CHAVAN PALLAVI VIJAY', 'INFORMATION TECH', '9096967040', 'pallavichavan 11@gmail.com', 'ADHOC PROFESSOR', 'ML/AI', 0),
(810, 'PATIL CHARUSHILA AMIT', 'INFORMATION TECH', '8087394960', 'charushila.p1@gmail.com', 'ASSTT. PROFESSOR', 'ML/AI', 0),
(823, 'SATHE SNEHA CHANDRAKANT', 'INFORMATION TECH', '9969664235', 'snehasathe47@gmail.com', 'LECTURER', 'ML/AI', 0),
(879, 'DR VIVEK KUMAR SINGH', 'INFORMATION TECH', '9936230788', 'vivekkr.singh@hotmail.com', 'ASSTT. PROFESSOR', 'ML/AI', 0),
(883, 'DR MURALI PARAMESWARAN', 'INFORMATION TECH', '9828754282', 'murali.p.iyer@gmail.com', 'ADHOC PROFESSOR', 'ML/AI', 0);

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
(1, 'f_1', 'Nikhil Ingale', 'Makarand Madhavi', 'Piyush Jha');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `type` varchar(10) NOT NULL,
  `change_password` int(11) NOT NULL DEFAULT '0',
  `department` varchar(255) NOT NULL DEFAULT 'IT'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `type`, `change_password`, `department`) VALUES
(1, 'admin', 'admin', 'admin', 0, 'IT'),
(2, 'f_1', 'RUFT6G', 'student', 0, 'IT');

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
(1, 'f_1', 'Snake Robot', 'Robotics', 'Nowadays robotics has grown beyond leaps in almost all every aspect of life and the most important fields are rescue search and medical field. Every year a number of people are losing their life because of natural calamities such as earthquakes and mine accidents. Often, many are trapped in the. Our idea is to provide a robot which can easily penetrate through the small gaps in debris and to track the people trapped inside and rescue them. Serpentine resembles the motion of the snake and is highly flexible to navigate through the available path in the debris. Basically, our serpentine has two modes of operation: In the first mode, it moves autonomously like a snake. This has been achieved through software. In the second mode, it just moves according to our instructions and this is handled via remote control. In each mode, a camera on the head of serpentine continuously provides the visual information to outside world through which we can track the trapped people and rescue them.', '5f2827597c79bADMT_Nov_2018.pdf', '5f2827597c7c0ADMT_Nov_2018.pdf', '5f2827597c7d3ADMT_Nov_2018.pdf', '5f2827597c7e3ADMT_Nov_2018.pdf', 'pending', '');

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
(4, 'Isha Gujar', '17IT3004', 'isha.gujar99@gmail.com', 'IT', 'TE', 'A', 'A3', '5432167891', 2, 0),
(5, 'Mansi Lambat', '17IT3005', 'mansi.lambat99@gmail.com', 'IT', 'TE', 'A', 'A1', '6789012345', 2, 0),
(6, 'Hemant Singh', '17IT3006', 'hemant.singh99@gmail.com', 'IT', 'TE', 'A', 'A3', '1234567890', 1, 0),
(7, 'Prasad Shete', '17IT3007', 'prasad.shete99@gmail.com', 'IT', 'TE', 'A', 'A4', '1223456789', 2, 0),
(8, 'Piyush Kadam', '17IT3008', 'piyush.kadam99@gmail.com', 'IT', 'TE', 'A', 'A2', '2345617890', 1, 0),
(9, 'Kaushal Chande', '17IT3009', 'kaushal.chande99@gmail.com', 'IT', 'TE', 'A', 'A1', '7890123456', 1, 0),
(10, 'Rohan Kadam', '17IT3010', 'rohan.kadam99@gmail.com', 'IT', 'TE', 'A', 'A3', '4567890123', 2, 0),
(11, 'Rushab Mahawarkar', '17IT3011', 'rushab.mahawarkar99@gmail.com', 'IT', 'TE', 'A', 'A4', '7977064752', 1, 0),
(12, 'Mahesh Mahawarkar', '17IT3012', 'mahesh.mahawarkar99@gmail.com', 'IT', 'TE', 'A', 'A1', '1234567891', 2, 0),
(13, 'Vijay Dubhalkar', '17IT3013', 'vijay.dubhalkar99@gmail.com', 'IT', 'TE', 'A', 'A3', '1987654321', 1, 0),
(14, 'Harish Lanke', '17IT3014', 'harish.lanke99@gmail.com', 'IT', 'TE', 'A', 'A2', '5432167891', 1, 0),
(15, 'Abhishek Kolte', '17IT3015', 'abhishek.kolte99@gmail.com', 'IT', 'TE', 'A', 'A1', '6789012345', 2, 0),
(16, 'Navtesh Sharma', '17IT3016', 'navtesh.sharma99@gmail.com', 'IT', 'TE', 'A', 'A4', '1234567890', 2, 0),
(17, 'Anuj Koli', '17IT3017', 'anuj.koli99@gmail.com', 'IT', 'TE', 'A', 'A1', '1223456789', 1, 0),
(18, 'Akhil Panchal', '17IT3018', 'akhil.panchal99@gmail.com', 'IT', 'TE', 'A', 'A4', '2345617890', 1, 0),
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
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mentor`
--
ALTER TABLE `mentor`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
