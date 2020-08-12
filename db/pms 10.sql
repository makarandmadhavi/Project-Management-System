-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2020 at 07:43 PM
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
(319, 'Mrs.  Bharne Smita D.', 'COMPUTER SCIENCE', '9096967040', 'bharne.smita@gmail.com', 'ADHOC PROFESSOR', 'ML/AI', 0),
(343, 'Dr. Vidhate Amarsinh A. ', 'COMPUTER SCIENCE', '9819384911', 'vidhate.amarsinh@gmail.com', 'Professor', 'ML/AI', 0),
(381, 'Dr. NarawadeVaibhav E. ', 'COMPUTER SCIENCE', '9869756853', 'narawade.vaibhav@rediffmail.com', 'PROFESSOR', 'ML/AI', 0),
(409, 'Dr. Joshi Bharti A. ', 'COMPUTER SCIENCE', '9324981241', 'joshi.bharti@gmail.com', 'PROFESSOR', 'ML/AI', 0),
(417, 'Dr. Dakhane Dhanajay M. ', 'COMPUTER SCIENCE', '9819144869', 'dakhane.dhanajay@yahoo.co.in', 'Professor', 'ML/AI', 0),
(454, 'Dr. Choudhari Sangeeta S.', 'COMPUTER SCIENCE', '9220329227', 'choudhari.sangeeta@gmail.com ', 'PROFESSOR', 'ML/AI', 0),
(490, 'Dr. Sharma Neeraj K. ', 'COMPUTER SCIENCE', '9970050445', 'sharma.neeraj@ gmail.com', 'Professor', 'ML/AI', 0),
(496, 'Dr. Barve Amit K. ', 'COMPUTER SCIENCE', '9029729347', 'bharve.amit@gmail.com', 'PROFESSOR', 'ML/AI', 0),
(515, 'Dr. Kolte Shilpa G.', 'COMPUTER SCIENCE', '9821344893', 'kolte.shilpa@gmail.com', 'PROFESSOR', 'ML/AI', 0),
(561, 'Mrs. Mane Vanita M. ', 'COMPUTER SCIENCE', '9096127012', 'mane.vanita@gmail.com', 'Associate Professor', 'ML/AI', 0),
(579, 'Mrs. Shedge Rajashree A. ', 'COMPUTER SCIENCE', '8097849645', 'shedge.rajashree@gmail.com', 'ASSTT. PROFESSOR', 'ML/AI', 0),
(582, 'Mrs. Padiya Puja Y. ', 'COMPUTER SCIENCE', '9766027442', 'padiya.puja@gmail.com', 'Associate Professor', 'ML/AI', 0),
(586, 'Mrs. Dhumal Rashmi A.', 'COMPUTER SCIENCE', '8424887047', 'dhumal.rashmi@gmail.com', 'ASSTT. PROFESSOR', 'ML/AI', 0),
(610, 'Mrs. Chhabria Aditi S. ', 'COMPUTER SCIENCE', '9833685166', 'chhabria.aditi@gmail.com', 'ASSTT. PROFESSOR', 'ML/AI', 0),
(623, 'Mrs. Maktum Tabassum A. ', 'COMPUTER SCIENCE', '9970893294', 'matkum.tabassum@gmail.com', 'ASSTT. PROFESSOR', 'ML/AI', 0),
(632, 'Mr. Chikkareddi Vishwanath ', 'COMPUTER SCIENCE', '8451845925', 'chikkareddi.vishwanath@yahoo.co', 'ASSTT. PROFESSOR', 'ML/AI', 0),
(634, 'Mrs. Gaikwad Snehal P. ', 'COMPUTER SCIENCE', '9664297355', 'gaikwad.snehal@gmail.com', 'ASSTT. PROFESSOR', 'ML/AI', 0),
(639, 'Mrs. Pulgam Namita D. ', 'COMPUTER SCIENCE', '9987782846/47', 'pulgam.namita@yahoo.co.in', 'ASSTT. PROFESSOR', 'ML/AI', 0),
(664, 'Mrs. Shinde Apurva S. ', 'COMPUTER SCIENCE', '9167101069', 'shinde.apurva@gmail.com', 'ASSTT. PROFESSOR', 'ML/AI', 0),
(665, 'Mrs. Kaur Preet C. ', 'COMPUTER SCIENCE', '9870071870', 'kaur.preet@gmail.com', 'ASSTT. PROFESSOR', 'ML/AI', 0),
(799, 'Mr. Ghorpade Tushar H. ', 'COMPUTER SCIENCE', '9819030975', 'ghorpade.tushar@yahoo.co.in ', 'ASSTT. PROFESSOR', 'ML/AI', 0),
(802, 'Dr. Ragha Leena R.', 'COMPUTER SCIENCE', '8888075747', 'dr.leena.ragha@gmail.com', 'Prof.', 'ML/AI', 0),
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
(2, 'f_2', 'Nikhil Ingale', 'Makarand Madhavi', 'Piyush Jha');

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
  `department` varchar(255) NOT NULL DEFAULT 'COMPUTER SCIENCE'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `type`, `change_password`, `department`) VALUES
(1, 'admin', 'admin', 'admin', 0, 'COMPUTER SCIENCE'),
(3, '319', '123', 'faculty', 0, 'COMPUTER SCIENCE'),
(19, '343', '123', 'faculty', 0, 'COMPUTER SCIENCE'),
(20, '381', '123', 'faculty', 0, 'COMPUTER SCIENCE'),
(21, '409', '123', 'faculty', 0, 'COMPUTER SCIENCE'),
(22, '417', '123', 'faculty', 0, 'COMPUTER SCIENCE'),
(23, '454', '123', 'faculty', 0, 'COMPUTER SCIENCE'),
(24, '490', '123', 'faculty', 0, 'COMPUTER SCIENCE'),
(25, '496', '123', 'faculty', 0, 'COMPUTER SCIENCE'),
(26, '515', '123', 'faculty', 0, 'COMPUTER SCIENCE'),
(27, '561', '123', 'faculty', 0, 'COMPUTER SCIENCE'),
(28, '579', '123', 'faculty', 0, 'COMPUTER SCIENCE'),
(29, '582', '123', 'faculty', 0, 'COMPUTER SCIENCE'),
(30, '586', '123', 'faculty', 0, 'COMPUTER SCIENCE'),
(31, '610', '123', 'faculty', 0, 'COMPUTER SCIENCE'),
(32, '623', '123', 'faculty', 0, 'COMPUTER SCIENCE'),
(33, '632', '123', 'faculty', 0, 'COMPUTER SCIENCE'),
(34, '634', '123', 'faculty', 0, 'COMPUTER SCIENCE'),
(35, '639', '123', 'faculty', 0, 'COMPUTER SCIENCE'),
(36, '664', '123', 'faculty', 0, 'COMPUTER SCIENCE'),
(37, '665', '123', 'faculty', 0, 'COMPUTER SCIENCE'),
(38, '799', '123', 'faculty', 0, 'COMPUTER SCIENCE'),
(39, '802', '123', 'faculty', 0, 'COMPUTER SCIENCE'),
(40, '810', '123', 'faculty', 0, 'COMPUTER SCIENCE'),
(41, '823', '123', 'faculty', 0, 'COMPUTER SCIENCE'),
(42, '879', '123', 'faculty', 0, 'COMPUTER SCIENCE'),
(43, '883', '123', 'faculty', 0, 'COMPUTER SCIENCE');

-- --------------------------------------------------------

--
-- Table structure for table `mentor`
--

CREATE TABLE `mentor` (
  `id` int(5) NOT NULL,
  `groupname` varchar(255) NOT NULL,
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
  `mentor` varchar(255) NOT NULL,
  `comment` varchar(2250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(3) DEFAULT NULL,
  `name` varchar(24) DEFAULT NULL,
  `rollno` varchar(8) DEFAULT NULL,
  `email` varchar(29) DEFAULT NULL,
  `department` varchar(16) DEFAULT NULL,
  `year` varchar(2) DEFAULT NULL,
  `division` varchar(1) DEFAULT NULL,
  `batch` varchar(2) DEFAULT NULL,
  `phone` bigint(10) DEFAULT NULL,
  `shift` int(1) DEFAULT NULL,
  `isGrouped` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `rollno`, `email`, `department`, `year`, `division`, `batch`, `phone`, `shift`, `isGrouped`) VALUES
(1, 'Nikhil Ingale', '17IT3001', 'nikhil.ingale99@gmail.com', 'IT', 'TE', 'A', 'A3', 7977064752, 1, 1),
(2, 'Makarand Madhavi', '17IT3002', 'jha.piyush.17it1027@gmail.com', 'IT', 'TE', 'A', 'A2', 1234567891, 1, 1),
(3, 'Piyush Jha', '17IT3003', 'piyushjha65@gmail.com', 'IT', 'TE', 'A', 'A1', 1987654321, 1, 1),
(4, 'Isha Gujar', '17IT3004', 'nikhil.ingale99@gmail.com', 'IT', 'TE', 'A', 'A3', 5432167891, 2, 0),
(5, 'Mansi Lambat', '17IT3005', 'jha.piyush.17it1027@gmail.com', 'IT', 'TE', 'A', 'A1', 6789012345, 2, 0),
(6, 'Hemant Singh', '17IT3006', 'piyushjha65@gmail.com', 'IT', 'TE', 'A', 'A3', 1234567890, 1, 0),
(7, 'Prasad Shete', '17IT3007', 'nikhil.ingale99@gmail.com', 'IT', 'TE', 'A', 'A4', 1223456789, 2, 0),
(8, 'Piyush Kadam', '17IT3008', 'jha.piyush.17it1027@gmail.com', 'IT', 'TE', 'A', 'A2', 2345617890, 1, 0),
(9, 'Kaushal Chande', '17IT3009', 'piyushjha65@gmail.com', 'IT', 'TE', 'A', 'A1', 7890123456, 1, 0),
(10, 'Rohan Kadam', '17IT3010', 'nikhil.ingale99@gmail.com', 'IT', 'TE', 'A', 'A3', 4567890123, 2, 0),
(11, 'Rushab Mahawarkar', '17IT3011', 'jha.piyush.17it1027@gmail.com', 'IT', 'TE', 'A', 'A4', 7977064752, 1, 0),
(12, 'Mahesh Mahawarkar', '17IT3012', 'piyushjha65@gmail.com', 'IT', 'TE', 'A', 'A1', 1234567891, 2, 0),
(13, 'Vijay Dubhalkar', '17IT3013', 'nikhil.ingale99@gmail.com', 'IT', 'TE', 'A', 'A3', 1987654321, 1, 0),
(14, 'Harish Lanke', '17IT3014', 'jha.piyush.17it1027@gmail.com', 'IT', 'TE', 'A', 'A2', 5432167891, 1, 0),
(15, 'Abhishek Kolte', '17IT3015', 'piyushjha65@gmail.com', 'IT', 'TE', 'A', 'A1', 6789012345, 2, 0),
(16, 'Navtesh Sharma', '17IT3016', 'nikhil.ingale99@gmail.com', 'IT', 'TE', 'A', 'A4', 1234567890, 2, 0),
(17, 'Anuj Koli', '17IT3017', 'jha.piyush.17it1027@gmail.com', 'IT', 'TE', 'A', 'A1', 1223456789, 1, 0),
(18, 'Akhil Panchal', '17IT3018', 'piyushjha65@gmail.com', 'IT', 'TE', 'A', 'A4', 2345617890, 1, 0),
(19, 'Shivam Gaikwad', '17IT3019', 'nikhil.ingale99@gmail.com', 'IT', 'TE', 'A', 'A2', 7890123456, 1, 0),
(20, 'Niraj Singh', '17IT3020', 'jha.piyush.17it1027@gmail.com', 'IT', 'TE', 'A', 'A1', 4567890123, 1, 0),
(21, 'Adarsh Pednekar', '17IT3021', 'piyushjha65@gmail.com', 'COMPUTER SCIENCE', 'TE', 'A', 'A3', 7977064752, 1, 0),
(22, 'Rohan Behera', '17IT3022', 'nikhil.ingale99@gmail.com', 'COMPUTER SCIENCE', 'TE', 'A', 'A3', 1234567891, 2, 0),
(23, 'Shubham Karkar', '17IT3023', 'jha.piyush.17it1027@gmail.com', 'COMPUTER SCIENCE', 'TE', 'A', 'A4', 1987654321, 1, 0),
(24, 'SUNIL KUMAR MEENA', '17IT3024', 'piyushjha65@gmail.com', 'COMPUTER SCIENCE', 'TE', 'A', 'A3', 7977064752, 1, 0),
(25, 'AADITYA BHARAT KUMAR', '17IT3025', 'nikhil.ingale99@gmail.com', 'COMPUTER SCIENCE', 'TE', 'A', 'A2', 1234567891, 1, 0),
(26, 'ABHISHEK ANAND', '17IT3026', 'jha.piyush.17it1027@gmail.com', 'COMPUTER SCIENCE', 'TE', 'A', 'A1', 1987654321, 1, 0),
(27, 'ABHISHEK TIWARI', '17IT3027', 'piyushjha65@gmail.com', 'COMPUTER SCIENCE', 'TE', 'A', 'A3', 5432167891, 2, 0),
(28, 'AMAN GUPTA', '17IT3028', 'nikhil.ingale99@gmail.com', 'COMPUTER SCIENCE', 'TE', 'A', 'A1', 6789012345, 2, 0),
(29, 'AMIT SAXENA', '17IT3029', 'jha.piyush.17it1027@gmail.com', 'COMPUTER SCIENCE', 'TE', 'A', 'A3', 1234567890, 1, 0),
(30, 'ANKIT ANAND', '17IT3030', 'piyushjha65@gmail.com', 'COMPUTER SCIENCE', 'TE', 'A', 'A4', 1223456789, 2, 0),
(31, 'ANURAG DASH', '17IT3031', 'nikhil.ingale99@gmail.com', 'COMPUTER SCIENCE', 'TE', 'A', 'A2', 2345617890, 1, 0),
(32, 'ARPIT SRIVASTAVA', '17IT3032', 'jha.piyush.17it1027@gmail.com', 'COMPUTER SCIENCE', 'TE', 'A', 'A1', 7890123456, 1, 0),
(33, 'ATUL KUMAR', '17IT3033', 'piyushjha65@gmail.com', 'COMPUTER SCIENCE', 'TE', 'A', 'A3', 4567890123, 2, 0),
(34, 'BANOTHU KESHAVA RAO', '17IT3034', 'nikhil.ingale99@gmail.com', 'COMPUTER SCIENCE', 'TE', 'A', 'A4', 7977064752, 1, 0),
(35, 'CHANDAN KUMAR', '17IT3035', 'jha.piyush.17it1027@gmail.com', 'COMPUTER SCIENCE', 'TE', 'A', 'A1', 1234567891, 2, 0),
(36, 'DIGRAJ SINGH CHAHAL', '17IT3036', 'piyushjha65@gmail.com', 'COMPUTER SCIENCE', 'TE', 'A', 'A3', 1987654321, 1, 0),
(37, 'GOURAV GARG', '17IT3037', 'nikhil.ingale99@gmail.com', 'COMPUTER SCIENCE', 'TE', 'A', 'A2', 5432167891, 1, 0),
(38, 'KONANKI SIVARAM', '17IT3038', 'jha.piyush.17it1027@gmail.com', 'COMPUTER SCIENCE', 'TE', 'A', 'A1', 6789012345, 2, 0),
(39, 'KUMAR SHUBHAM', '17IT3039', 'piyushjha65@gmail.com', 'COMPUTER SCIENCE', 'TE', 'A', 'A4', 1234567890, 2, 0),
(40, 'MADHAV GOSWAMI', '17IT3040', 'nikhil.ingale99@gmail.com', 'COMPUTER SCIENCE', 'TE', 'A', 'A1', 1223456789, 1, 0),
(41, 'MD. SHADAB ALAM', '17IT3041', 'jha.piyush.17it1027@gmail.com', 'EXTC', 'TE', 'A', 'A4', 2345617890, 1, 0),
(42, 'MUDIT DHAKAR', '17IT3042', 'piyushjha65@gmail.com', 'EXTC', 'TE', 'A', 'A2', 7890123456, 1, 0),
(43, 'NAVIN KUMAR', '17IT3043', 'nikhil.ingale99@gmail.com', 'EXTC', 'TE', 'A', 'A1', 4567890123, 1, 0),
(44, 'NITISH ARYA', '17IT3044', 'jha.piyush.17it1027@gmail.com', 'EXTC', 'TE', 'A', 'A3', 7977064752, 1, 0),
(45, 'PAWAN KUMAR', '17IT3045', 'piyushjha65@gmail.com', 'EXTC', 'TE', 'A', 'A3', 1234567891, 2, 0),
(46, 'PRATAP BHANU SOLANKI', '17IT3046', 'nikhil.ingale99@gmail.com', 'EXTC', 'TE', 'A', 'A4', 1987654321, 1, 0),
(47, 'RAGHAV MISHRA', '17IT3047', 'jha.piyush.17it1027@gmail.com', 'EXTC', 'TE', 'A', 'A3', 7977064752, 1, 0),
(48, 'ROHIT KUMAR SINHA', '17IT3048', 'piyushjha65@gmail.com', 'EXTC', 'TE', 'A', 'A2', 1234567891, 1, 0),
(49, 'SAMBHAV JAIN', '17IT3049', 'nikhil.ingale99@gmail.com', 'EXTC', 'TE', 'A', 'A1', 1987654321, 1, 0),
(50, 'SAURABH CHOKHRA', '17IT3050', 'jha.piyush.17it1027@gmail.com', 'EXTC', 'TE', 'A', 'A3', 5432167891, 2, 0),
(51, 'SHIRJON SHALKU HANSDAH', '17IT3051', 'piyushjha65@gmail.com', 'EXTC', 'TE', 'A', 'A1', 6789012345, 2, 0),
(52, 'SHUBHAM GUPTA', '17IT3052', 'nikhil.ingale99@gmail.com', 'EXTC', 'TE', 'A', 'A3', 1234567890, 1, 0),
(53, 'SOUMITRA NARAIN PATHAK', '17IT3053', 'jha.piyush.17it1027@gmail.com', 'EXTC', 'TE', 'A', 'A4', 1223456789, 2, 0),
(54, 'SUSHANT SINGH', '17IT3054', 'piyushjha65@gmail.com', 'EXTC', 'TE', 'A', 'A2', 2345617890, 1, 0),
(55, 'V SUHAS', '17IT3055', 'nikhil.ingale99@gmail.com', 'EXTC', 'TE', 'A', 'A1', 7890123456, 1, 0),
(56, 'VIJAYPAL SINGH NEGI', '17IT3056', 'jha.piyush.17it1027@gmail.com', 'EXTC', 'TE', 'A', 'A3', 4567890123, 2, 0),
(57, 'VISHVAS MEENA', '17IT3057', 'piyushjha65@gmail.com', 'EXTC', 'TE', 'A', 'A4', 7977064752, 1, 0),
(58, 'RAHUL MISHRA', '17IT3058', 'nikhil.ingale99@gmail.com', 'EXTC', 'TE', 'A', 'A1', 1234567891, 2, 0),
(59, 'SHAMBHU KUMAR', '17IT3059', 'jha.piyush.17it1027@gmail.com', 'EXTC', 'TE', 'A', 'A3', 1987654321, 1, 0),
(60, 'AASHISH AGARWAL', '17IT3060', 'piyushjha65@gmail.com', 'EXTC', 'TE', 'A', 'A2', 5432167891, 1, 0),
(61, 'ABHISHEK BHATIA', '17IT3061', 'nikhil.ingale99@gmail.com', 'ETRX', 'TE', 'A', 'A1', 6789012345, 2, 0),
(62, 'AEKAANSH VERMA', '17IT3062', 'jha.piyush.17it1027@gmail.com', 'ETRX', 'TE', 'A', 'A4', 1234567890, 2, 0),
(63, 'AKASH AGRAWAL', '17IT3063', 'piyushjha65@gmail.com', 'ETRX', 'TE', 'A', 'A1', 1223456789, 1, 0),
(64, 'AMAN JAISWAL', '17IT3064', 'nikhil.ingale99@gmail.com', 'ETRX', 'TE', 'A', 'A4', 2345617890, 1, 0),
(65, 'AMOL RATAN SINGH', '17IT3065', 'jha.piyush.17it1027@gmail.com', 'ETRX', 'TE', 'A', 'A2', 7890123456, 1, 0),
(66, 'ANKIT BHUTANI', '17IT3066', 'piyushjha65@gmail.com', 'ETRX', 'TE', 'A', 'A1', 4567890123, 1, 0),
(67, 'ANSHU ABHISHEK', '17IT3067', 'nikhil.ingale99@gmail.com', 'ETRX', 'TE', 'A', 'A3', 7977064752, 1, 0),
(68, 'ANURAG KAITHAL', '17IT3068', 'jha.piyush.17it1027@gmail.com', 'ETRX', 'TE', 'A', 'A3', 1234567891, 2, 0),
(69, 'ARSHPREET SINGH', '17IT3069', 'piyushjha65@gmail.com', 'ETRX', 'TE', 'A', 'A4', 1987654321, 1, 0),
(70, 'AVINASH VERMA', '17IT3070', 'nikhil.ingale99@gmail.com', 'ETRX', 'TE', 'A', 'A3', 7977064752, 1, 0),
(71, 'CHAVAN NITHIN KUMAR', '17IT3071', 'jha.piyush.17it1027@gmail.com', 'ETRX', 'TE', 'A', 'A2', 1234567891, 1, 0),
(72, 'DIVYANK MITTAL', '17IT3072', 'piyushjha65@gmail.com', 'ETRX', 'TE', 'A', 'A1', 1987654321, 1, 0),
(73, 'GAURAV KUMAR', '17IT3073', 'nikhil.ingale99@gmail.com', 'ETRX', 'TE', 'A', 'A3', 5432167891, 2, 0),
(74, 'GUDEPU SANTOSH KUMAR', '17IT3074', 'jha.piyush.17it1027@gmail.com', 'ETRX', 'TE', 'A', 'A1', 6789012345, 2, 0),
(75, 'K E ADITYA SUBRAMANYAM', '17IT3075', 'piyushjha65@gmail.com', 'ETRX', 'TE', 'A', 'A3', 1234567890, 1, 0),
(76, 'KONERU ABHISHEK', '17IT3076', 'nikhil.ingale99@gmail.com', 'ETRX', 'TE', 'A', 'A4', 1223456789, 2, 0),
(77, 'KUNAL MISHRA', '17IT3077', 'jha.piyush.17it1027@gmail.com', 'ETRX', 'TE', 'A', 'A2', 2345617890, 1, 0),
(78, 'MAHENDRA', '17IT3078', 'piyushjha65@gmail.com', 'ETRX', 'TE', 'A', 'A1', 7890123456, 1, 0),
(79, 'MD. SHARIQUE BIN MANSOOR', '17IT3079', 'nikhil.ingale99@gmail.com', 'ETRX', 'TE', 'A', 'A3', 4567890123, 2, 0),
(80, 'MUNISHA BANSAL', '17IT3080', 'jha.piyush.17it1027@gmail.com', 'ETRX', 'TE', 'A', 'A4', 7977064752, 1, 0),
(81, 'NIKHIL BUGALIA', '17IT3081', 'piyushjha65@gmail.com', 'Instrumentation', 'TE', 'A', 'A1', 1234567891, 2, 0),
(82, 'NITISH GOENKA', '17IT3082', 'nikhil.ingale99@gmail.com', 'Instrumentation', 'TE', 'A', 'A3', 1987654321, 1, 0),
(83, 'PIYUSH NEGI', '17IT3083', 'jha.piyush.17it1027@gmail.com', 'Instrumentation', 'TE', 'A', 'A2', 5432167891, 1, 0),
(84, 'PRATEEK AGARWAL', '17IT3084', 'piyushjha65@gmail.com', 'Instrumentation', 'TE', 'A', 'A1', 6789012345, 2, 0),
(85, 'RAHIL SHEIKH', '17IT3085', 'nikhil.ingale99@gmail.com', 'Instrumentation', 'TE', 'A', 'A4', 1234567890, 2, 0),
(86, 'RAJKUMAR GURJAR', '17IT3086', 'jha.piyush.17it1027@gmail.com', 'Instrumentation', 'TE', 'A', 'A1', 1223456789, 1, 0),
(87, 'ROHIT KYAL', '17IT3087', 'piyushjha65@gmail.com', 'Instrumentation', 'TE', 'A', 'A4', 2345617890, 1, 0),
(88, 'SAURABH KUMAR', '17IT3088', 'nikhil.ingale99@gmail.com', 'Instrumentation', 'TE', 'A', 'A2', 7890123456, 1, 0),
(89, 'SHIV PRAKASH', '17IT3089', 'jha.piyush.17it1027@gmail.com', 'Instrumentation', 'TE', 'A', 'A1', 4567890123, 1, 0),
(90, 'SHUBHAM GUPTA', '17IT3090', 'piyushjha65@gmail.com', 'Instrumentation', 'TE', 'A', 'A3', 7977064752, 1, 0),
(91, 'SRIJAN PATEL', '17IT3091', 'nikhil.ingale99@gmail.com', 'Instrumentation', 'TE', 'A', 'A3', 1234567891, 2, 0),
(92, 'T ADITYA DUTTA', '17IT3092', 'jha.piyush.17it1027@gmail.com', 'Instrumentation', 'TE', 'A', 'A4', 1987654321, 1, 0),
(93, 'VAIBHAV FOUZDAR', '17IT3093', 'piyushjha65@gmail.com', 'Instrumentation', 'TE', 'A', 'A3', 7977064752, 2, 0),
(94, 'VIKASH KUMAR MEHTA', '17IT3094', 'nikhil.ingale99@gmail.com', 'Instrumentation', 'TE', 'A', 'A2', 1234567891, 2, 0),
(95, 'VISHWAS AGGARWAL', '17IT3095', 'jha.piyush.17it1027@gmail.com', 'Instrumentation', 'TE', 'A', 'A1', 1987654321, 1, 0),
(96, 'AAYUSH GUPTA', '17IT3096', 'piyushjha65@gmail.com', 'Instrumentation', 'TE', 'A', 'A3', 5432167891, 1, 0),
(97, 'ABHISHEK GUPTA', '17IT3097', 'nikhil.ingale99@gmail.com', 'Instrumentation', 'TE', 'A', 'A1', 6789012345, 1, 0),
(98, 'AENUGU ANURAG REDDY', '17IT3098', 'jha.piyush.17it1027@gmail.com', 'Instrumentation', 'TE', 'A', 'A3', 1234567890, 1, 0),
(99, 'AKASH DEEP PATEL', '17IT3099', 'piyushjha65@gmail.com', 'Instrumentation', 'TE', 'A', 'A4', 1223456789, 1, 0),
(100, 'AMARJEET KUMAR', '17IT3100', 'jha.piyush.17it1027@gmail.com', 'Instrumentation\n', 'TE', 'A', 'A2', 2345617890, 2, 0);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
