-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 04, 2023 at 09:40 AM
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
-- Database: `insan-school1`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `sl` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`sl`, `email`, `password`) VALUES
(1, 'insanschool@gmail.com', '052fd9358d859af573fffd824298440452379dea');

-- --------------------------------------------------------

--
-- Table structure for table `alumini`
--

CREATE TABLE `alumini` (
  `sl` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `contact` int(20) NOT NULL,
  `native_place` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pin` int(20) NOT NULL,
  `durationDatefrm` date NOT NULL,
  `durationDateto` date NOT NULL,
  `profession` varchar(100) NOT NULL,
  `classfrm` int(30) NOT NULL,
  `classto` int(40) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `proof` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `alumini`
--

INSERT INTO `alumini` (`sl`, `name`, `fname`, `contact`, `native_place`, `address`, `pin`, `durationDatefrm`, `durationDateto`, `profession`, `classfrm`, `classto`, `photo`, `proof`) VALUES
(10, 'Naqui Hasan', 'M abul Hasan', 2147483647, 'Katihar, Bihar', 'bijhara, kurum har balia belown', 879878, '2021-08-12', '2021-09-03', 'Software Engineer', 7, 8, 'naqui.jpg', ''),
(11, 'Nafeesa Hasan', 'M abul Hasan', 2147483647, 'Katihar, Bihar', 'bijhara, kurum har balia belown', 6, '2021-08-01', '2021-08-12', 'Software Engineer', 4, 9, '_20170211_144132.JPG', ''),
(12, 'hasan', 'M abul Hasan', 2147483647, 'Bijhara ', 'New Delhi', 8855904, '2021-08-26', '2021-08-27', 'house wife', 1, 10, '‪+91 95401 26057‬ 20170519_092442.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `sl` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `contact` int(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`sl`, `name`, `contact`, `address`, `subject`, `email`) VALUES
(4, 'Naqui Hasan', 2147483647, 'bijhara, kurum har balia belown', 'When will school be reopen', 'naquijmi@gmail.com'),
(8, 'Naqui Hasan', 2147483647, 'batla house', 'When will school be reopen', 'naquijmi@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `sl` int(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `amount` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`sl`, `name`, `email`, `address`, `amount`) VALUES
(2, 'Sayema Hasan', 'sayema@gmail.com', 'Bijhara kurum', 2000),
(3, 'naqui hasan', 'insanschool@gmail.com', 'Bijhara kurum', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `sl` int(50) NOT NULL,
  `img` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`sl`, `img`, `Description`) VALUES
(24, 'g17.jpeg', 'Sayed bhai with teachers'),
(27, 'WhatsApp Image 2021-08-19 at 12.16.06 PM.jpeg', 'An honor to neeraj chopra at insan schools');

-- --------------------------------------------------------

--
-- Table structure for table `news_update`
--

CREATE TABLE `news_update` (
  `sl` int(11) NOT NULL,
  `news` varchar(255) NOT NULL,
  `news_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news_update`
--

INSERT INTO `news_update` (`sl`, `news`, `news_date`) VALUES
(41, 'hello', '2021-08-24'),
(42, 'hello my friends', '2021-08-20'),
(43, 'hello', '2021-08-30'),
(44, 'School is  going on very good', '2021-08-25');

-- --------------------------------------------------------

--
-- Table structure for table `school_admission_form`
--

CREATE TABLE `school_admission_form` (
  `Sl_No` int(11) NOT NULL,
  `class` int(10) NOT NULL,
  `admission_date` date NOT NULL,
  `tc_no` int(20) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `address` varchar(256) NOT NULL,
  `mobile1` int(20) NOT NULL,
  `mobile2` int(20) NOT NULL,
  `dob` date NOT NULL,
  `adhar` int(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `account` varchar(40) NOT NULL,
  `ifsc` varchar(20) NOT NULL,
  `bank` varchar(40) NOT NULL,
  `brother` int(10) NOT NULL,
  `sister` int(10) NOT NULL,
  `mothertongue` varchar(20) NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `illness` varchar(256) NOT NULL,
  `meter` int(10) NOT NULL,
  `centimeter` int(100) NOT NULL,
  `suggestion` varchar(256) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `signature` varchar(255) NOT NULL,
  `mother` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `student_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `school_admission_form`
--

INSERT INTO `school_admission_form` (`Sl_No`, `class`, `admission_date`, `tc_no`, `student_name`, `fname`, `mname`, `address`, `mobile1`, `mobile2`, `dob`, `adhar`, `email`, `account`, `ifsc`, `bank`, `brother`, `sister`, `mothertongue`, `nationality`, `illness`, `meter`, `centimeter`, `suggestion`, `photo`, `signature`, `mother`, `gender`, `student_type`) VALUES
(41, 5, '2021-08-11', 878476643, 'naqui hasan', 'M abul Hasan', 'asima khatoon', 'kfkjkdgf', 96736368, 2147483647, '2021-08-25', 847557634, 'elahifaiz@gmail.com', '3847668', '87486674334', 'central bank of India', 465, 8585, 'urdu', 'indian', 'no', 1, 3, 'shhfges', 'Screenshot (5).png', 'Screenshot (6).png', 'own', 'male', 'border'),
(42, 5, '2021-08-11', 878476643, 'naqui hasan', 'M abul Hasan', 'asima khatoon', 'kfkjkdgf', 96736368, 2147483647, '2021-08-25', 847557634, 'elahifaiz@gmail.com', '3847668', '87486674334', 'central bank of India', 465, 8585, 'urdu', 'indian', 'no', 1, 3, 'shhfges', 'Screenshot (5).png', 'Screenshot (6).png', 'own', 'male', 'border'),
(93, 8, '1999-12-21', 123, 'name', 'father', 'mother', 'address', 123456789, 951324647, '2000-02-02', 154941, 'email@email.com', '12344', '836735', 'bank name', 1, 2, 'tongue', 'indian', 'any illness', 123, 123, 'Message', 'download.jpeg', 'download.jpeg', 'step', 'male', 'day_scholar'),
(94, 8, '1999-12-21', 123, 'name', 'father', 'mother', 'address', 123456789, 951324647, '2000-02-02', 154941, 'email@email.com', '12344', '836735', 'bank name', 1, 2, 'tongue', 'indian', 'any illness', 123, 123, 'Message', 'download.jpeg', 'download.jpeg', 'step', 'male', 'day_scholar'),
(95, 8, '1999-12-21', 123, 'name', 'father', 'mother', 'address', 123456789, 951324647, '2000-02-02', 154941, 'email@email.com', '12344', '836735', 'bank name', 1, 2, 'tongue', 'indian', 'any illness', 123, 123, 'Message', 'download.jpeg', 'download.jpeg', 'step', 'male', 'day_scholar');

-- --------------------------------------------------------

--
-- Table structure for table `school_result`
--

CREATE TABLE `school_result` (
  `sl` int(50) NOT NULL,
  `class` int(50) NOT NULL,
  `result` varchar(255) NOT NULL,
  `year` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `school_result`
--

INSERT INTO `school_result` (`sl`, `class`, `result`, `year`) VALUES
(8, 7, 'script technology-task.pdf', '2021-08-11'),
(9, 10, 'demo.pdf', '2021-08-11'),
(10, 8, 'file (7).pdf', '2021-08-24');

-- --------------------------------------------------------

--
-- Table structure for table `school_teachers`
--

CREATE TABLE `school_teachers` (
  `id` int(11) NOT NULL,
  `designation` varchar(512) NOT NULL,
  `contact_name` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `school_teachers`
--

INSERT INTO `school_teachers` (`id`, `designation`, `contact_name`, `timestamp`) VALUES
(4, 'Director', 'DR. UMAR SHEES BHAI', '2023-06-01 18:44:29'),
(5, 'Secretary Taleemi Mission Corps', 'REZA SYED HAFEEZ BHAI', '2023-06-03 05:39:48');

-- --------------------------------------------------------

--
-- Table structure for table `std_payment`
--

CREATE TABLE `std_payment` (
  `sl` int(50) NOT NULL,
  `amount` int(255) NOT NULL,
  `student_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `std_payment`
--

INSERT INTO `std_payment` (`sl`, `amount`, `student_name`) VALUES
(4, 5, 'naqui'),
(5, 5, 'naqui'),
(6, 5, 'jvjh'),
(7, 5, 'naqui');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `alumini`
--
ALTER TABLE `alumini`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `news_update`
--
ALTER TABLE `news_update`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `school_admission_form`
--
ALTER TABLE `school_admission_form`
  ADD PRIMARY KEY (`Sl_No`);

--
-- Indexes for table `school_result`
--
ALTER TABLE `school_result`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `school_teachers`
--
ALTER TABLE `school_teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `std_payment`
--
ALTER TABLE `std_payment`
  ADD PRIMARY KEY (`sl`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `alumini`
--
ALTER TABLE `alumini`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `sl` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `sl` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `sl` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `news_update`
--
ALTER TABLE `news_update`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `school_admission_form`
--
ALTER TABLE `school_admission_form`
  MODIFY `Sl_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `school_result`
--
ALTER TABLE `school_result`
  MODIFY `sl` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `school_teachers`
--
ALTER TABLE `school_teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `std_payment`
--
ALTER TABLE `std_payment`
  MODIFY `sl` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
