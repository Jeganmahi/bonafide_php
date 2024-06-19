-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2023 at 03:53 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mm`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic`
--

CREATE TABLE `academic` (
  `uid` int(100) NOT NULL,
  `id` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `Degree` varchar(50) NOT NULL,
  `branch` varchar(60) NOT NULL,
  `iname` varchar(100) NOT NULL,
  `univ` varchar(100) NOT NULL,
  `state` varchar(50) NOT NULL,
  `mos` varchar(30) NOT NULL,
  `mes` varchar(30) NOT NULL,
  `yc` varchar(30) NOT NULL,
  `cs` varchar(30) NOT NULL,
  `score` varchar(30) NOT NULL,
  `cnum` varchar(50) NOT NULL,
  `cert` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `academic`
--

INSERT INTO `academic` (`uid`, `id`, `course`, `Degree`, `branch`, `iname`, `univ`, `state`, `mos`, `mes`, `yc`, `cs`, `score`, `cnum`, `cert`) VALUES
(784, 'admin', 'SSLC', 'SSLC', 'COMPUTER SCIENCE AND ENGINEERING', 'AJITHA V', 'stateboard', 'Manipur', 'Full Time', 'xcsd', 'xvdv', 'Completed', '100', 'zzz222', 'images/cert/adminSSLC.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `basic`
--

CREATE TABLE `basic` (
  `id` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `religion` varchar(50) NOT NULL,
  `social` varchar(50) NOT NULL,
  `caste` varchar(50) NOT NULL,
  `ms` varchar(50) NOT NULL,
  `pmc` varchar(50) NOT NULL,
  `pim1` varchar(50) NOT NULL,
  `pim2` varchar(50) NOT NULL,
  `paddress` text NOT NULL,
  `taddress` text NOT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `zip` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `blood` varchar(50) NOT NULL,
  `aadhar` varchar(200) NOT NULL,
  `pan` varchar(200) NOT NULL,
  `surgery` varchar(200) NOT NULL,
  `insurance` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bonafide`
--

CREATE TABLE `bonafide` (
  `uid` int(11) NOT NULL,
  `reference` int(100) NOT NULL,
  `date` date NOT NULL,
  `name` varchar(30) NOT NULL,
  `rollno` varchar(15) NOT NULL,
  `type` varchar(30) NOT NULL,
  `reason` varchar(30) NOT NULL,
  `status` int(10) NOT NULL,
  `department` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bonafide`
--

INSERT INTO `bonafide` (`uid`, `reference`, `date`, `name`, `rollno`, `type`, `reason`, `status`, `department`) VALUES
(2, 22, '2023-10-03', 'soundhar', '99', 'boafi', 'ss', 0, 'IT');

-- --------------------------------------------------------

--
-- Table structure for table `bonafide2`
--

CREATE TABLE `bonafide2` (
  `uid` int(11) NOT NULL,
  `id` varchar(200) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `refno` varchar(200) NOT NULL,
  `regno` varchar(200) NOT NULL,
  `aadhar` int(100) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `fathername` varchar(200) NOT NULL,
  `type` varchar(100) NOT NULL,
  `syear` varchar(100) NOT NULL,
  `degree` varchar(100) NOT NULL,
  `dept` varchar(200) NOT NULL,
  `ayear` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `boarding` varchar(100) NOT NULL,
  `graduate` varchar(100) NOT NULL,
  `admissiontype` varchar(100) NOT NULL,
  `purpose` varchar(200) NOT NULL,
  `status` int(11) NOT NULL,
  `applydate` date NOT NULL,
  `photo` varchar(200) NOT NULL,
  `rejection_reason` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bonafide2`
--

INSERT INTO `bonafide2` (`uid`, `id`, `fname`, `lname`, `refno`, `regno`, `aadhar`, `gender`, `fathername`, `type`, `syear`, `degree`, `dept`, `ayear`, `dob`, `boarding`, `graduate`, `admissiontype`, `purpose`, `status`, `applydate`, `photo`, `rejection_reason`) VALUES
(4, 'jp', 'JP', 'K', '2023/MKCE/927621BCS046/4', '927621BCS046', 2147483647, 'FEMALE', 'RAM', 'Bonafide', 'II', 'B.E', 'COMPUTER SCIENCE AND ENGINEERING', '2030-2031', '2023-10-04', 'DAYSCHOLAR', '', '', 'INTERNSHIP - GROUP', 10, '2023-10-07', 'images/profile/jegii.png', ''),
(5, 'jp', 'JP', 'K', '2023/MKCE/927621BCS046/5', '927621BCS046', 2147483647, 'FEMALE', 'RAM', 'Bonafide', 'II', 'B.E', 'COMPUTER SCIENCE AND ENGINEERING', '2029-2030', '2023-10-04', 'DAYSCHOLAR', '', '', 'INTERNSHIP - INDIVIDUAL', 10, '2023-10-07', 'images/profile/jegii.png', ''),
(6, 'jp', 'JP', 'K', '2023/MKCE/927621BCS046/6', '927621BCS046', 2147483647, 'FEMALE', 'RAM', 'Bonafide', 'III', 'B.E', 'COMPUTER SCIENCE AND ENGINEERING', '2033-2034', '2023-10-04', 'DAYSCHOLAR', '', '', 'INTERNSHIP - GROUP', 10, '2023-10-07', 'images/profile/jegii.png', ''),
(7, 'jp', 'JP', 'K', '2023/MKCE/927621BCS046/7', '927621BCS046', 2147483647, 'FEMALE', 'RAM', 'Bonafide', 'III', 'B.E', 'COMPUTER SCIENCE AND ENGINEERING', '2031-2032', '2023-10-04', 'DAYSCHOLAR', '', '', 'INTERNSHIP - INDIVIDUAL', 10, '2023-10-08', 'images/profile/jegii.png', ''),
(19, 'jp', 'JP', 'K', '2023/MKCE/927621BCS046/8', '927621BCS046', 2147483647, 'FEMALE', 'RAM', 'Bonafide', 'I', 'B.E', 'COMPUTER SCIENCE AND ENGINEERING', '2024-2025', '2023-10-04', 'DAYSCHOLAR', '', '', 'CHIEF MINISTER SCHOLARSHIP', 10, '2023-10-09', 'IMAGES/PROFILE/JEGII.PNG', ''),
(20, 'jp', 'JP', 'K', '2023/MKCE/927621BCS046/20', '927621BCS046', 2147483647, 'FEMALE', 'RAM', 'Bonafide', 'I', 'B.E', 'COMPUTER SCIENCE AND ENGINEERING', '2023-2024', '2023-10-04', 'DAYSCHOLAR', '', '', 'LABOUR WELFARE', 10, '2023-10-09', 'IMAGES/PROFILE/JEGII.PNG', ''),
(21, 'jp', 'JP', 'K', '2023/MKCE/927621BCS046/21', '927621BCS046', 2147483647, 'FEMALE', 'RAM', 'Bonafide', 'I', 'B.E', 'COMPUTER SCIENCE AND ENGINEERING', '2025-2026', '2023-10-04', 'DAYSCHOLAR', '', '', 'LABOUR WELFARE', 10, '2023-10-09', 'IMAGES/PROFILE/JEGII.PNG', ''),
(24, 'jp', 'JP', 'K', '2023/MKCE/927621BCS046/24', '927621BCS046', 2147483647, 'FEMALE', 'RAM', 'Bonafide', 'I', 'B.E', 'COMPUTER SCIENCE AND ENGINEERING', '2027-2028', '2023-10-04', 'DAYSCHOLAR', '', '', 'FIRST GRADUATE APPLY PURPOSE', 10, '2023-10-09', 'IMAGES/PROFILE/JEGII.PNG', ''),
(25, 'jp', 'JP', 'K', '2023/MKCE/927621BCS046/25', '927621BCS046', 2147483647, 'FEMALE', 'RAM', 'Bonafide', 'I', 'B.E', 'COMPUTER SCIENCE AND ENGINEERING', '2031-2032', '2023-10-04', 'DAYSCHOLAR', '', '', 'FIRST GRADUATE APPLY PURPOSE', 10, '2023-10-10', 'IMAGES/PROFILE/JEGII.PNG', ''),
(29, 'jp', 'JP', 'K', '2023/MKCE/927621BCS046/29', '927621BCS046', 2147483647, 'FEMALE', 'RAM', 'Bonafide', 'II', 'B.E', 'COMPUTER SCIENCE AND ENGINEERING', '2033-2034', '2023-10-04', 'DAYSCHOLAR', '', '', 'PMSS BC MBC DNC SCHOLARSHIP', 10, '2023-12-13', 'IMAGES/PROFILE/JEGII.PNG', ''),
(30, 'jp', 'JP', 'K', '2023/MKCE/927621BCS046/30', '927621BCS046', 2147483647, 'FEMALE', 'RAM', 'Bonafide', 'III', 'B.E', 'COMPUTER SCIENCE AND ENGINEERING', '2032-2033', '2023-10-04', 'DAYSCHOLAR', '', '', 'INTERNSHIP - GROUP', 10, '2023-12-14', 'IMAGES/PROFILE/JEGII.PNG', ''),
(31, 'jp', 'JP', 'K', '2023/MKCE/927621BCS046/31', '927621BCS046', 2147483647, 'FEMALE', 'RAM', 'Bonafide', 'I', 'B.E', 'COMPUTER SCIENCE AND ENGINEERING', '2032-2033', '2023-10-04', 'DAYSCHOLAR', '', '', 'BANK ACCOUNT OPENING', 10, '2023-12-14', 'IMAGES/PROFILE/JEGII.PNG', ''),
(32, 'jp', 'JP', 'K', '2023/MKCE/927621BCS046/32', '927621BCS046', 2147483647, 'FEMALE', 'RAM', 'Bonafide', '', 'B.E', 'COMPUTER SCIENCE AND ENGINEERING', '', '2023-10-04', 'DAYSCHOLAR', '', '', '', 10, '2023-12-14', 'IMAGES/PROFILE/JEGII.PNG', ''),
(33, 'jp', 'JP', 'K', '2023/MKCE/927621BCS046/33', '927621BCS046', 2147483647, 'FEMALE', 'RAM', 'Bonafide', 'II', 'B.E', 'COMPUTER SCIENCE AND ENGINEERING', '2031-2032', '2023-10-04', 'DAYSCHOLAR', '', '', 'BANK ACCOUNT OPENING', 10, '2023-12-14', 'IMAGES/PROFILE/JEGII.PNG', ''),
(38, 'jp', 'JP', 'K', '2023/MKCE/927621BCS046/38', '927621BCS046', 2147483647, 'FEMALE', 'RAM', 'Bonafide', 'I', 'B.E', 'COMPUTER SCIENCE AND ENGINEERING', '2028-2029', '2023-10-04', 'DAYSCHOLAR', '', '', 'BANK LOAN', 1, '2023-12-14', 'IMAGES/PROFILE/JEGII.PNG', ''),
(44, 'jp', 'JP', 'K', '2023/MKCE/927621BCS046/44', '927621BCS046', 2147483647, 'FEMALE', 'RAM', 'Bonafide', 'I', 'B.E', 'COMPUTER SCIENCE AND ENGINEERING', '2031-2032', '2023-10-04', 'DAYSCHOLAR', '', '', 'BANK ACCOUNT OPENING', 10, '2023-12-14', 'IMAGES/PROFILE/JEGII.PNG', 'poda punda'),
(45, 'jp', 'JP', 'K', '2023/MKCE/927621BCS046/45', '927621BCS046', 2147483647, 'FEMALE', 'RAM', 'Bonafide', 'I', 'B.E', 'COMPUTER SCIENCE AND ENGINEERING', '2032-2033', '2023-10-04', 'DAYSCHOLAR', '', '', 'INTERNSHIP - INDIVIDUAL', 10, '2023-12-14', 'IMAGES/PROFILE/JEGII.PNG', ''),
(47, 'jp', 'JP', 'K', '2023/MKCE/927621BCS046/47', '927621BCS046', 2147483647, 'FEMALE', 'RAM', 'Bonafide', 'I', 'B.E', 'COMPUTER SCIENCE AND ENGINEERING', '2029-2030', '2023-10-04', 'DAYSCHOLAR', '', '', 'INTERNSHIP - GROUP', 10, '2023-12-14', 'IMAGES/PROFILE/JEGII.PNG', ''),
(48, 'jp', 'JP', 'K', '2023/MKCE/927621BCS046/48', '927621BCS046', 2147483647, 'FEMALE', 'RAM', 'Bonafide', 'II', 'B.E', 'COMPUTER SCIENCE AND ENGINEERING', '2032-2033', '2023-10-04', 'DAYSCHOLAR', '', '', 'INTERNSHIP - INDIVIDUAL', 1, '2023-12-14', 'IMAGES/PROFILE/JEGII.PNG', ''),
(49, 'jp', 'JP', 'K', '2023/MKCE/927621BCS046/49', '927621BCS046', 2147483647, 'FEMALE', 'RAM', 'Bonafide', '', 'B.E', 'COMPUTER SCIENCE AND ENGINEERING', '', '2023-10-04', 'DAYSCHOLAR', '', '', 'SPORTS PARTICIPATION', 1, '2023-12-15', 'IMAGES/PROFILE/JEGII.PNG', ''),
(50, 'jp', 'JP', 'K', '2023/MKCE/927621BCS046/49', '927621BCS046', 2147483647, 'FEMALE', 'RAM', 'Bonafide', '', 'B.E', 'COMPUTER SCIENCE AND ENGINEERING', '', '2023-10-04', 'DAYSCHOLAR', '', '', '', 1, '2023-12-15', 'IMAGES/PROFILE/JEGII.PNG', ''),
(51, 'jp', 'JP', 'K', '2023/MKCE/927621BCS046/51', '927621BCS046', 2147483647, 'FEMALE', 'RAM', 'Bonafide', '', 'B.E', 'COMPUTER SCIENCE AND ENGINEERING', '', '2023-10-04', 'DAYSCHOLAR', '', '', 'INTERNSHIP - GROUP', 1, '2023-12-15', 'IMAGES/PROFILE/JEGII.PNG', ''),
(52, 'jp', 'JP', 'K', '2023/MKCE/927621BCS046/52', '927621BCS046', 2147483647, 'FEMALE', 'RAM', 'Bonafide', 'IV', 'B.E', 'COMPUTER SCIENCE AND ENGINEERING', '2031-2032', '2023-10-04', 'DAYSCHOLAR', '', '', 'SPORTS PARTICIPATION', 1, '2023-12-15', 'IMAGES/PROFILE/JEGII.PNG', ''),
(53, 'jp', 'JP', 'K', '2023/MKCE/927621BCS046/52', '927621BCS046', 2147483647, 'FEMALE', 'RAM', 'Bonafide', '', 'B.E', 'COMPUTER SCIENCE AND ENGINEERING', '', '2023-10-04', 'DAYSCHOLAR', '', '', '', 1, '2023-12-15', 'IMAGES/PROFILE/JEGII.PNG', ''),
(54, 'jp', 'JP', 'K', '2023/MKCE/927621BCS046/54', '927621BCS046', 2147483647, 'FEMALE', 'RAM', 'Bonafide', 'II', 'B.E', 'COMPUTER SCIENCE AND ENGINEERING', '2029-2030', '2023-10-04', 'DAYSCHOLAR', '', '', 'INTERNSHIP - INDIVIDUAL', 1, '2023-12-15', 'IMAGES/PROFILE/JEGII.PNG', ''),
(55, 'jp', 'JP', 'K', '2023/MKCE/927621BCS046/55', '927621BCS046', 2147483647, 'FEMALE', 'RAM', 'Bonafide', '', 'B.E', 'COMPUTER SCIENCE AND ENGINEERING', '', '2023-10-04', 'DAYSCHOLAR', '', '', 'GIRL CHILD PROTECTION', 10, '2023-12-15', 'IMAGES/PROFILE/JEGII.PNG', ''),
(59, 'jp', 'JP', 'K', '2023/MKCE/927621BCS046/59', '927621BCS046', 2147483647, 'FEMALE', 'RAM', 'Bonafide', '', 'B.E', 'COMPUTER SCIENCE AND ENGINEERING', '', '2023-10-04', 'DAYSCHOLAR', '', '', 'GIRL CHILD PROTECTION', 1, '2023-12-15', 'IMAGES/PROFILE/JEGII.PNG', ''),
(60, 'jp', 'JP', 'K', '2023/MKCE/927621BCS046/60', '927621BCS046', 2147483647, 'FEMALE', 'RAM', 'Bonafide', '', 'B.E', 'COMPUTER SCIENCE AND ENGINEERING', '', '2023-10-04', 'DAYSCHOLAR', '', '', 'GIRL CHILD PROTECTION', 1, '2023-12-15', 'IMAGES/PROFILE/JEGII.PNG', ''),
(61, 'jp', 'JP', 'K', '2023/MKCE/927621BCS046/61', '927621BCS046', 2147483647, 'FEMALE', 'RAM', 'Bonafide', '', 'B.E', 'COMPUTER SCIENCE AND ENGINEERING', '', '2023-10-04', 'DAYSCHOLAR', '', '', 'SPORTS PARTICIPATION', 0, '2023-12-15', 'IMAGES/PROFILE/JEGII.PNG', ''),
(62, 'jp', 'JP', 'K', '2023/MKCE/927621BCS046/62', '927621BCS046', 2147483647, 'FEMALE', 'RAM', 'Bonafide', 'I', 'B.E', 'COMPUTER SCIENCE AND ENGINEERING', '2030-2031', '2023-10-04', 'DAYSCHOLAR', '', '', 'GIRL CHILD PROTECTION', 10, '2023-12-15', 'IMAGES/PROFILE/JEGII.PNG', '');

-- --------------------------------------------------------

--
-- Table structure for table `cocurricular`
--

CREATE TABLE `cocurricular` (
  `uid` int(100) NOT NULL,
  `id` varchar(50) NOT NULL,
  `event` varchar(100) NOT NULL,
  `pp` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL,
  `org_det` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `cert` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cocurricular`
--

INSERT INTO `cocurricular` (`uid`, `id`, `event`, `pp`, `level`, `org_det`, `date`, `cert`) VALUES
(1, 'admin', 'Symposium', 'Participation', 'finals', 'mkce', '2023-08-01', 'images/cert/admin.png'),
(5, 'admin', 'Workshop', 'Participation', 'finals', 'mkce', '2023-08-01', 'images/cert/admin.png');

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `id` bigint(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `time` time(6) DEFAULT current_timestamp(),
  `complaint_type` varchar(255) NOT NULL,
  `description` varchar(100) NOT NULL,
  `block` varchar(20) NOT NULL,
  `place` varchar(30) NOT NULL,
  `fac_id` varchar(20) NOT NULL,
  `hod_id` varchar(20) NOT NULL,
  `status` int(10) NOT NULL DEFAULT 0,
  `rating` int(10) DEFAULT 0,
  `feedback` varchar(100) DEFAULT NULL,
  `rej_comment` varchar(100) DEFAULT NULL,
  `hod_ap_date` date DEFAULT NULL,
  `man_ap_date` date DEFAULT NULL,
  `fin_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`id`, `date`, `time`, `complaint_type`, `description`, `block`, `place`, `fac_id`, `hod_id`, `status`, `rating`, `feedback`, `rej_comment`, `hod_ap_date`, `man_ap_date`, `fin_date`) VALUES
(1, '2023-09-19', NULL, 'none', '', 'none', '10', 'aji', 'ME01', 0, 5, 'asd', NULL, NULL, NULL, NULL),
(2, '2023-09-19', NULL, 'Technical Issues', 'efgsdfg', 'Guest House', '45464', 'aji', 'ME01', 0, NULL, NULL, NULL, NULL, NULL, '2023-09-20 21:41:04'),
(3, '2023-09-19', NULL, 'Technical Issues', 'asd', 'PG Block', '1', 'aji', 'ME01', 0, 4, 'asdasd', NULL, NULL, NULL, NULL),
(4, '2023-09-19', NULL, 'Technical Issues', 'vzcvxzvcx', 'Boys New Hostel', '12333', 'aji', 'ME01', 0, NULL, NULL, NULL, NULL, NULL, '2023-09-20 21:41:15'),
(5, '2023-09-19', NULL, 'Non Technical Issues', '201', 'Main Block', '200', 'aji', 'ME01', 0, 3, 'as', NULL, NULL, NULL, NULL),
(6, '2023-09-19', NULL, 'Technical Issues', '98', 'Main Block', '98', 'aji', 'ME01', 0, 4, 'light fix', NULL, NULL, NULL, NULL),
(7, '2023-09-19', NULL, 'Non Technical Issues', '12', 'Main Block', '99', 'aji', 'ME01', 0, 4, 'star working\r\n', NULL, '2023-09-25', NULL, '2023-09-20 21:41:20'),
(8, '2023-09-19', NULL, 'Technical Issues', 'as', 'Main Block', '78', 'aji', 'ME01', 0, 5, 'last', NULL, NULL, NULL, '2023-09-20 21:37:49'),
(9, '2023-09-19', NULL, 'Non Technical Issues', '6', 'Main Block', '3', 'aji', 'ME01', 0, 5, 'it should be much cleaner job', 'it was not necessary', NULL, NULL, NULL),
(10, '2023-09-20', '09:48:06.000000', 'Technical Issues', '234', 'Main Block', '12', 'aji', 'ME01', 0, 4, 'it is working well now', NULL, '2023-09-20', '2023-09-20', NULL),
(12, '2023-09-20', '10:12:44.000000', 'Non Technical Issues', 'needs the bulb fix at the right corner of the room', 'PG Block', '12', 'aji', 'ME01', 0, 2, 'the lightr quality is not that good', NULL, '2023-09-20', '2023-09-20', '2023-09-20 21:18:00'),
(13, '2023-09-21', '12:01:26.000000', 'Technical Issues', 'qw', 'Main Block', '1', 'aji', 'ME01', 0, 0, NULL, NULL, '2023-09-25', '2023-09-25', NULL),
(14, '2023-09-21', '12:09:38.000000', 'none', '', 'none', '', 'aji', 'ME01', 0, 0, NULL, NULL, '2023-10-03', NULL, NULL),
(15, '2023-09-21', '12:11:28.000000', 'Technical Issues', 'm', 'PG Block', '1', 'aji', 'EEE01', 0, 0, NULL, NULL, NULL, NULL, NULL),
(16, '2023-09-21', '12:12:48.000000', 'Non Technical Issues', 'dsfsdfsdfsd', 'PG Block', 'dsfsd', 'aji', 'ME01', 0, 0, NULL, NULL, '2023-09-25', NULL, NULL),
(17, '2023-09-21', '12:13:45.000000', 'Non Technical Issues', '123qw', 'PG Block', '1212', 'aji', 'ME01', 0, 0, NULL, NULL, '2023-09-25', NULL, NULL),
(18, '2023-09-21', '12:14:33.000000', 'Technical Issues', '0', 'Main Block', '1212121', 'aji', 'ME01', 0, 0, NULL, NULL, '2023-09-25', NULL, NULL),
(67, '2023-09-23', '17:41:55.000000', 'Non Technical Issues', 'sdfsdfsdfsdf', 'PG Block', 'dfsdfsd', 'aji', 'ME01', 0, 0, NULL, NULL, '2023-10-03', NULL, NULL),
(68, '2023-09-23', '17:44:13.000000', 'Technical Issues', 'india', 'Transport', '12', 'aji', 'ME01', 0, 0, NULL, NULL, '2023-10-03', NULL, NULL),
(69, '2023-09-23', '17:46:32.000000', 'Technical Issues', 'as', 'Main Block', '301', 'aji', 'ME01', 0, 5, '12', NULL, '2023-10-03', NULL, NULL),
(70, '2023-09-25', '10:18:28.000000', 'Non Technical Issues', '90', 'PG Block', '90', 'aji', 'ME01', 0, 0, NULL, NULL, '2023-10-03', NULL, NULL),
(71, '2023-09-26', '11:40:19.000000', 'Technical Issues', 'sdaasd', 'PG Block', '4554545454', 'aji', 'EEE01', 0, 0, NULL, NULL, NULL, NULL, NULL),
(72, '2023-09-26', '13:47:42.000000', 'Technical Issues', 'dvxdcv', 'PG Block', '1100', 'aji', 'EEE01', 0, 0, NULL, NULL, NULL, NULL, NULL),
(73, '2023-10-03', '11:16:30.000000', 'Technical Issues', 'sad', 'PG Block', '1', 'aji', 'ME01', 0, 0, NULL, NULL, NULL, NULL, NULL),
(74, '2023-10-03', '11:17:31.000000', 'Technical Issues', 'dfsdfsd', 'Boys New Hostel', '12', 'aji', 'ME01', 0, 0, NULL, NULL, NULL, NULL, NULL),
(75, '2023-10-03', '13:35:01.000000', 'Technical Issues', 'xchfg\r\n', 'Boys Mess', '23456788765', 'aji', 'ECE01', 0, 0, NULL, NULL, NULL, NULL, NULL),
(76, '2023-10-03', '13:36:55.000000', 'Non Technical Issues', '3434', 'Main Block', '334', 'aji', 'ECE01', 0, 0, NULL, NULL, NULL, NULL, NULL),
(77, '2023-10-03', '13:40:16.000000', 'Technical Issues', 'fdgvhdjklfd\r\n', 'Boys Old Hostel', '234567', 'aji', 'ME01', 0, 0, NULL, NULL, NULL, NULL, NULL),
(78, '2023-10-03', '13:55:56.000000', 'Technical Issues', 'adfadf', 'Boys New Hostel', '6789', 'aji', 'ECE01', 0, 0, NULL, NULL, NULL, NULL, NULL),
(79, '2023-10-03', '13:57:59.000000', 'Technical Issues', '232323', 'Boys New Hostel', '3424', 'aji', 'CS01', 0, 0, NULL, NULL, NULL, NULL, NULL),
(80, '2023-10-03', '14:01:33.000000', 'Non Technical Issues', '3r2r2344', 'PG Block', '334', 'aji', 'EEE01', 0, 0, NULL, NULL, NULL, NULL, NULL),
(81, '2023-10-03', '14:03:42.000000', 'Technical Issues', 'ertyguijo', 'Boys Mess', '34567', 'aji', 'CS01', 0, 0, NULL, NULL, NULL, NULL, NULL),
(82, '2023-10-03', '14:09:35.000000', 'Non Technical Issues', '345re34rfcx', 'Boys New Hostel', '2345', 'aji', 'EEE01', 0, 0, NULL, NULL, NULL, NULL, NULL),
(83, '2023-10-03', '14:11:22.000000', 'Technical Issues', 'werwe', 'Boys New Hostel', '334', 'aji', 'EEE01', 0, 0, NULL, NULL, NULL, NULL, NULL),
(84, '2023-10-03', '14:12:59.000000', 'Non Technical Issues', 'asdgas', 'Boys New Hostel', '334', 'aji', 'CS01', 0, 0, NULL, NULL, NULL, NULL, NULL),
(85, '2023-10-03', '14:13:44.000000', 'Non Technical Issues', 'sdfasfasdf', 'Boys Old Hostel', '334434343', 'aji', 'ECE01', 0, 0, NULL, NULL, NULL, NULL, NULL),
(86, '2023-10-03', '14:14:41.000000', 'Non Technical Issues', 'adfasfsadf', 'Boys New Hostel', '6789', 'aji', 'IT01', 0, 0, NULL, NULL, NULL, NULL, NULL),
(87, '2023-10-03', '14:15:08.000000', 'Non Technical Issues', 'km,.', 'Boys Old Hostel', '5821', 'aji', 'EEE01', 0, 0, NULL, NULL, NULL, NULL, NULL),
(88, '2023-10-03', '14:21:36.000000', 'Technical Issues', 'sfgafas', 'Boys New Hostel', '6789', 'aji', 'EEE01', 0, 0, NULL, NULL, NULL, NULL, NULL),
(89, '2023-10-03', '14:22:23.000000', 'Technical Issues', 'arasgsagasg', 'PG Block', '6789', 'aji', 'EEE01', 0, 0, NULL, NULL, NULL, NULL, NULL),
(90, '2023-10-03', '14:29:08.000000', 'Technical Issues', 'sdfsafsf', 'Boys New Hostel', '234567', 'aji', 'IT01', 0, 0, NULL, NULL, NULL, NULL, NULL),
(91, '2023-10-03', '14:32:48.000000', 'Non Technical Issues', 'sdagsd', 'Boys Old Hostel', '6789', 'aji', 'ECE01', 0, 0, NULL, NULL, NULL, NULL, NULL),
(92, '2023-10-03', '14:34:30.000000', 'Technical Issues', 'wertghjnbnjk', 'Boys New Hostel', '6789', 'aji', 'EEE01', 0, 0, NULL, NULL, NULL, NULL, NULL),
(93, '2023-10-03', '14:38:37.000000', 'Technical Issues', 'dfsafasdfadf', 'Main Block', '334', 'aji', 'ECE01', 0, 0, NULL, NULL, NULL, NULL, NULL),
(94, '2023-10-03', '14:39:20.000000', 'Technical Issues', 'adsfadsf', 'Boys Old Hostel', '23456788765', 'aji', 'ECE01', 0, 0, NULL, NULL, NULL, NULL, NULL),
(95, '2023-10-03', '14:41:58.000000', 'Technical Issues', 'sdgasdga', 'Main Block', '23456788765', 'aji', 'EEE01', 0, 0, NULL, NULL, NULL, NULL, NULL),
(96, '2023-10-03', '14:43:27.000000', 'Technical Issues', 'sfgasgafgdsg', 'PG Block', '23456788765', 'aji', 'CS01', 0, 0, NULL, NULL, NULL, NULL, NULL),
(97, '2023-10-03', '14:49:41.000000', 'Non Technical Issues', 'fgsdfgdfsg', 'Boys Old Hostel', '2345432', 'aji', 'IT01', 0, 0, NULL, NULL, NULL, NULL, NULL),
(98, '2023-10-03', '14:50:23.000000', 'Non Technical Issues', 'dsfasdfasdf', 'PG Block', '334', 'aji', 'CS01', 0, 0, NULL, NULL, NULL, NULL, NULL),
(99, '2023-10-03', '14:51:10.000000', 'Non Technical Issues', 'dfasdfsadfasdf', 'Boys Old Hostel', '23456788765', 'aji', 'ECE01', 0, 0, NULL, NULL, NULL, NULL, NULL),
(100, '2023-10-03', '14:52:47.000000', 'Technical Issues', 'gdsfgsdf', 'Boys New Hostel', '6789', 'aji', 'CS01', 0, 0, NULL, NULL, NULL, NULL, NULL),
(101, '2023-10-03', '14:56:35.000000', 'Technical Issues', 'fdsagasgfsafg', 'Boys Old Hostel', '23456788765', 'aji', 'ECE01', 0, 0, NULL, NULL, NULL, NULL, NULL),
(102, '2023-10-03', '14:57:03.000000', 'Technical Issues', 'dafafaf', 'Boys New Hostel', '334', 'aji', 'ME01', 0, 0, NULL, NULL, '2023-10-03', NULL, NULL),
(103, '2023-10-03', '15:04:19.000000', 'Non Technical Issues', '\'\'l;kk', 'PG Block', '6789', 'aji', 'ECE01', 0, 0, NULL, NULL, NULL, NULL, NULL),
(104, '2023-10-03', '15:06:24.000000', 'Non Technical Issues', 'sdafasf', 'Ladies Hostel', '334', 'aji', 'CS01', 0, 0, NULL, NULL, NULL, NULL, NULL),
(105, '2023-10-03', '15:07:39.000000', 'Non Technical Issues', 'fasdfasdf', 'Boys New Hostel', '6789', 'aji', 'IT01', 0, 0, NULL, NULL, NULL, NULL, NULL),
(106, '2023-10-03', '15:10:24.000000', 'Non Technical Issues', 'sfgasgg', 'Boys Old Hostel', '23456788765', 'aji', 'IT01', 0, 0, NULL, NULL, NULL, NULL, NULL),
(107, '2023-10-03', '15:11:19.000000', 'Technical Issues', 'dsfasdasgasg', 'Boys New Hostel', '23456788765', 'aji', 'EEE01', 0, 0, NULL, NULL, NULL, NULL, NULL),
(108, '2023-10-03', '15:12:53.000000', 'none', '', 'none', '', 'aji', 'IT01', 0, 0, NULL, NULL, NULL, NULL, NULL),
(109, '2023-10-03', '15:13:27.000000', 'Non Technical Issues', 'fasdfasdf', 'PG Block', '234567', 'aji', 'CS01', 0, 0, NULL, NULL, NULL, NULL, NULL),
(110, '2023-10-03', '15:15:13.000000', 'Non Technical Issues', 'dfasfasd', 'Ladies Hostel', '23456788765', 'aji', 'EEE01', 0, 0, NULL, NULL, NULL, NULL, NULL),
(111, '2023-10-03', '15:15:50.000000', 'Technical Issues', 'asfasd', 'Boys Old Hostel', '23456788765', 'aji', 'CS01', 0, 0, NULL, NULL, NULL, NULL, NULL),
(112, '2023-10-03', '15:18:37.000000', 'Technical Issues', 'm,mm,m', 'Boys Mess', '334', 'aji', 'ECE01', 0, 0, NULL, NULL, NULL, NULL, NULL),
(113, '2023-10-03', '15:21:05.000000', 'Non Technical Issues', 'sdfasdfasd', 'Boys Old Hostel', '6789', 'aji', 'EEE01', 0, 0, NULL, NULL, NULL, NULL, NULL),
(114, '2023-10-03', '15:21:41.000000', 'Technical Issues', 'njkkj', 'Boys Old Hostel', '334', 'aji', 'ECE01', 0, 0, NULL, NULL, NULL, NULL, NULL),
(115, '2023-10-03', '15:22:41.000000', 'Non Technical Issues', 'gfhjkhg', 'Boys Old Hostel', 'ertyuiouy', 'aji', 'EEE01', 0, 0, NULL, NULL, NULL, NULL, NULL),
(116, '2023-10-03', '15:24:03.000000', 'Technical Issues', 'ytujy', 'PG Block', '046', 'aji', 'EEE01', 0, 0, NULL, NULL, NULL, NULL, NULL),
(117, '2023-10-03', '15:25:15.000000', 'Technical Issues', 'dfgsd', 'Main Block', 'sfgsdfg', 'aji', 'EEE01', 0, 0, NULL, NULL, NULL, NULL, NULL),
(118, '2023-10-03', '20:42:15.000000', 'Technical Issues', 'jkjkjk', 'PG Block', '6789', 'aji', 'ECE01', 0, 0, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cons`
--

CREATE TABLE `cons` (
  `id` int(11) NOT NULL,
  `company` varchar(255) DEFAULT NULL,
  `product_category` varchar(255) DEFAULT NULL,
  `product` varchar(255) DEFAULT NULL,
  `date_of_purchase` date DEFAULT NULL,
  `intent_no` varchar(255) DEFAULT NULL,
  `po_no` varchar(255) DEFAULT NULL,
  `inv_no` varchar(255) DEFAULT NULL,
  `warranty` varchar(255) DEFAULT NULL,
  `unit_cost` decimal(10,2) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `remarks` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cons`
--

INSERT INTO `cons` (`id`, `company`, `product_category`, `product`, `date_of_purchase`, `intent_no`, `po_no`, `inv_no`, `warranty`, `unit_cost`, `status`, `quantity`, `remarks`) VALUES
(9, 'Dropin', 'Dropin', 'Dropin', '2023-10-10', '1', '2', '3', '36', 10.00, 'Select', 11, 'sdfasfdasfsd'),
(10, 'Dropin', 'Dropin', 'Dropin', '2023-10-18', '3', '4', '5', '12', 2000.00, 'Select', 26, 'ASDFASD'),
(11, 'Dropin', 'Dropin', 'Dropin', '2023-09-28', '343', '434', '343', '43', 3.00, 'Select', 343, 'rwasdg');

-- --------------------------------------------------------

--
-- Table structure for table `exp`
--

CREATE TABLE `exp` (
  `uid` int(200) NOT NULL,
  `id` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `iname` varchar(100) NOT NULL,
  `design` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `fromd` date NOT NULL,
  `tod` date NOT NULL,
  `exp` varchar(200) NOT NULL,
  `cert` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exp`
--

INSERT INTO `exp` (`uid`, `id`, `type`, `iname`, `design`, `role`, `fromd`, `tod`, `exp`, `cert`) VALUES
(1234, '123', 'HOD', 'erterter', 'etrter', 'HOD', '2013-09-03', '2022-09-03', 'tert', 'ertert');

-- --------------------------------------------------------

--
-- Table structure for table `extracurricular`
--

CREATE TABLE `extracurricular` (
  `uid` int(100) NOT NULL,
  `id` varchar(50) NOT NULL,
  `event` varchar(50) NOT NULL,
  `pp` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL,
  `org_det` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `cert` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `extracurricular`
--

INSERT INTO `extracurricular` (`uid`, `id`, `event`, `pp`, `level`, `org_det`, `date`, `cert`) VALUES
(15, 'admin', 'Symposium', '1st Prize', 'level 1', 'mkce', '2023-08-09', 'images/cert/admin.png');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `uid` int(100) NOT NULL,
  `id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `design` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `doj` date NOT NULL,
  `pass` varchar(50) NOT NULL,
  `cert` varchar(100) NOT NULL,
  `bc` int(200) NOT NULL,
  `ac` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`uid`, `id`, `name`, `dept`, `design`, `role`, `doj`, `pass`, `cert`, `bc`, `ac`) VALUES
(1, 'ME01', 'hod', 'ME01', 'hod', 'HOD', '2023-09-07', '123', 'asd', 1, 1),
(12346, 'aji', 'ajitha', 'COMPUTER SCIENCE AND ENGINEERING', 'Fac', 'FACULTY', '2023-09-05', '123', '121', 1, 26),
(12347, 'admin', 'admin', 'mkce', 'admin', 'MANAGER', '2023-09-06', 'admin', 's', 26, 26),
(12348, 'itkm', 'itkm', 'itkm', 'itkm', 'ITKM', '2023-09-07', '12', '122', 1, 1),
(12349, 'gen', 'genral staff', 'non technical', 'staff', 'GENERAL', '2023-09-07', '1', '1', 1, 1),
(12350, 'jp', 'jp', 'computer science and engineering', 'student', 'student', '2023-10-01', '33', 'ndr', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `family`
--

CREATE TABLE `family` (
  `uid` int(200) NOT NULL,
  `id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `relationship` varchar(20) NOT NULL,
  `mobile` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `journal`
--

CREATE TABLE `journal` (
  `uid` int(200) NOT NULL,
  `id` varchar(100) NOT NULL,
  `pt` varchar(100) NOT NULL,
  `jn` varchar(100) NOT NULL,
  `pn` varchar(100) NOT NULL,
  `vol` varchar(100) NOT NULL,
  `issue` varchar(100) NOT NULL,
  `pages` varchar(100) NOT NULL,
  `pissn` varchar(100) NOT NULL,
  `eissn` varchar(100) NOT NULL,
  `scope` varchar(30) NOT NULL,
  `mon` varchar(100) NOT NULL,
  `paper` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `uid` varchar(40) NOT NULL,
  `pass` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`uid`, `pass`) VALUES
('admin', 'admin'),
('aji', 'aji'),
('ME01', '123'),
('itkm', '12'),
('gen', '12');

-- --------------------------------------------------------

--
-- Table structure for table `mic`
--

CREATE TABLE `mic` (
  `uid` int(11) NOT NULL,
  `id` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `regno` varchar(100) NOT NULL,
  `aadhar` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `fathername` varchar(100) NOT NULL,
  `degree` varchar(100) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `boarding` varchar(100) NOT NULL,
  `batch` varchar(100) NOT NULL,
  `photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mic`
--

INSERT INTO `mic` (`uid`, `id`, `fname`, `lname`, `regno`, `aadhar`, `gender`, `fathername`, `degree`, `dept`, `dob`, `boarding`, `batch`, `photo`) VALUES
(2, 'jp', 'jp', 'k', '927621bcs046', '7896541230', 'female', 'ram', 'b.e', 'computer science and engineering', '2023-10-04', 'dayscholar', '2021-2022', 'images/profile/jegii.png');

-- --------------------------------------------------------

--
-- Table structure for table `nominee`
--

CREATE TABLE `nominee` (
  `id` int(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `type` varchar(100) NOT NULL,
  `share` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patent`
--

CREATE TABLE `patent` (
  `uid` int(200) NOT NULL,
  `id` varchar(100) NOT NULL,
  `type` varchar(50) NOT NULL,
  `title` varchar(200) NOT NULL,
  `fd` date NOT NULL,
  `anum` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `noa` varchar(30) NOT NULL,
  `cert` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posting`
--

CREATE TABLE `posting` (
  `uid` int(30) NOT NULL,
  `id` varchar(30) NOT NULL,
  `level` varchar(30) NOT NULL,
  `pname` varchar(40) NOT NULL,
  `fromd` date NOT NULL,
  `tod` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `punish`
--

CREATE TABLE `punish` (
  `uid` int(20) NOT NULL,
  `id` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `reason` varchar(200) NOT NULL,
  `fromd` varchar(30) NOT NULL,
  `tod` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `punish`
--

INSERT INTO `punish` (`uid`, `id`, `type`, `reason`, `fromd`, `tod`) VALUES
(8, 'admin', 'Cricket ', 'final', 'MKCE ,Karur', '1st Prize'),
(9, 'admin', 'BasketBall', 'pre-finals', 'MKCE ,Karur', 'Participation');

-- --------------------------------------------------------

--
-- Table structure for table `research`
--

CREATE TABLE `research` (
  `id` varchar(30) NOT NULL,
  `oid` varchar(30) NOT NULL DEFAULT '0000-0000',
  `sid` varchar(30) NOT NULL,
  `rid` varchar(30) NOT NULL,
  `gsid` varchar(30) NOT NULL,
  `hid` varchar(30) NOT NULL,
  `iid` varchar(30) NOT NULL,
  `gi` varchar(30) NOT NULL,
  `cs` varchar(30) NOT NULL,
  `cgs` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `table`
--

CREATE TABLE `table` (
  `reference` varchar(70) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `reason` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `training`
--

CREATE TABLE `training` (
  `uid` int(30) NOT NULL,
  `id` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `no` varchar(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `fromd` varchar(30) NOT NULL DEFAULT 'primary',
  `tod` date NOT NULL,
  `cert` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `training`
--

INSERT INTO `training` (`uid`, `id`, `type`, `no`, `name`, `fromd`, `tod`, `cert`) VALUES
(722, 'admin', 'Symposium', 'Finals', 'VSB', 'Prize', '2023-08-02', 'images/training/adminVSB.png'),
(724, 'admin', 'Hackathon', 'Pre-Finals', 'PSG', '1st Prize', '2023-08-01', 'images/training/adminPSG.png'),
(726, 'admin', 'Hackathon', 'Finals', 'mkce', 'Participation', '2023-08-02', 'images/training/adminmkce.png'),
(727, 'aji', 'wafasdf', 'asdfasdf', 'dsafasdf', '2023-10-07', '2023-11-03', 'images/training/ajidsafasdf.webp');

-- --------------------------------------------------------

--
-- Table structure for table `wifi`
--

CREATE TABLE `wifi` (
  `id` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wifi`
--

INSERT INTO `wifi` (`id`, `pass`) VALUES
('admin@gmail.com', '1'),
('927621bcs046', '11234'),
('927621mcs006', '927621mcs006'),
('927621bcs014', 'mkce'),
('admin@gmail.com', '1'),
('admin@gmail.com', 'dfdfa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic`
--
ALTER TABLE `academic`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `bonafide`
--
ALTER TABLE `bonafide`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `reference` (`reference`);

--
-- Indexes for table `bonafide2`
--
ALTER TABLE `bonafide2`
  ADD PRIMARY KEY (`uid`,`id`);

--
-- Indexes for table `cocurricular`
--
ALTER TABLE `cocurricular`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cons`
--
ALTER TABLE `cons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exp`
--
ALTER TABLE `exp`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `extracurricular`
--
ALTER TABLE `extracurricular`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `family`
--
ALTER TABLE `family`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `journal`
--
ALTER TABLE `journal`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `mic`
--
ALTER TABLE `mic`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `patent`
--
ALTER TABLE `patent`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `posting`
--
ALTER TABLE `posting`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `punish`
--
ALTER TABLE `punish`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `training`
--
ALTER TABLE `training`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academic`
--
ALTER TABLE `academic`
  MODIFY `uid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=785;

--
-- AUTO_INCREMENT for table `bonafide`
--
ALTER TABLE `bonafide`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bonafide2`
--
ALTER TABLE `bonafide2`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `cocurricular`
--
ALTER TABLE `cocurricular`
  MODIFY `uid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `cons`
--
ALTER TABLE `cons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `exp`
--
ALTER TABLE `exp`
  MODIFY `uid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12346;

--
-- AUTO_INCREMENT for table `extracurricular`
--
ALTER TABLE `extracurricular`
  MODIFY `uid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `uid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12351;

--
-- AUTO_INCREMENT for table `family`
--
ALTER TABLE `family`
  MODIFY `uid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=532;

--
-- AUTO_INCREMENT for table `journal`
--
ALTER TABLE `journal`
  MODIFY `uid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mic`
--
ALTER TABLE `mic`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `patent`
--
ALTER TABLE `patent`
  MODIFY `uid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `posting`
--
ALTER TABLE `posting`
  MODIFY `uid` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=239;

--
-- AUTO_INCREMENT for table `punish`
--
ALTER TABLE `punish`
  MODIFY `uid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `training`
--
ALTER TABLE `training`
  MODIFY `uid` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=728;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
