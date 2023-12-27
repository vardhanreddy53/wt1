-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2023 at 09:11 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wt`
--

-- --------------------------------------------------------

--
-- Table structure for table `eligiblet`
--

CREATE TABLE `eligiblet` (
  `mail` varchar(100) NOT NULL,
  `subject` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `eligiblet`
--

INSERT INTO `eligiblet` (`mail`, `subject`) VALUES
('vardhanreddy53@gmail.com', 'pps');

-- --------------------------------------------------------

--
-- Table structure for table `ppsq`
--

CREATE TABLE `ppsq` (
  `qn` int(11) NOT NULL,
  `ques` varchar(500) NOT NULL,
  `op1` varchar(100) NOT NULL,
  `op2` varchar(100) NOT NULL,
  `op3` varchar(100) NOT NULL,
  `op4` varchar(100) NOT NULL,
  `ans` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ppsq`
--

INSERT INTO `ppsq` (`qn`, `ques`, `op1`, `op2`, `op3`, `op4`, `ans`) VALUES
(1, 'What is the full form of pps?', 'Programming for problem solving', 'Programming and problem solving', 'Practical Problem solving', 'Programming of program solving', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `student_name` varchar(40) NOT NULL,
  `student_mail` varchar(30) DEFAULT NULL,
  `student_password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`student_name`, `student_mail`, `student_password`) VALUES
('', '21r11a0593@gcet.edu.in', '12345'),
('', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_info`
--

CREATE TABLE `teacher_info` (
  `teacher_name` varchar(30) NOT NULL,
  `teacher_mail` varchar(50) NOT NULL,
  `teacher_password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacher_info`
--

INSERT INTO `teacher_info` (`teacher_name`, `teacher_mail`, `teacher_password`) VALUES
('vardhan', 'vardhanreddy53@gmail.com', '12345'),
('naveen', 'naveenrampa05@gmail.com', '123'),
('vardhan', 'vardhanreddy53@gmail.com', '12345'),
('naveen', 'naveenrampa05@gmail.com', '123'),
('', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `temp`
--

CREATE TABLE `temp` (
  `videos` varchar(100) NOT NULL,
  `Uploaded_on` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
