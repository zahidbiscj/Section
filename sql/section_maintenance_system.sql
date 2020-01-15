-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2018 at 04:43 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `section_maintenance_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `cr_panel`
--

CREATE TABLE `cr_panel` (
  `id` int(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `mobile` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cr_panel`
--

INSERT INTO `cr_panel` (`id`, `username`, `password`, `email`, `mobile`) VALUES
(1, 'zahid', '202cb962ac59075b964b07152d234b70', 'zahidbiscj@gmail.com', 1855333448);

-- --------------------------------------------------------

--
-- Table structure for table `notice_board`
--

CREATE TABLE `notice_board` (
  `serial_no` int(20) NOT NULL,
  `title` varchar(50) NOT NULL,
  `course_code` varchar(50) NOT NULL,
  `topics` varchar(50000) NOT NULL,
  `publish_date` date NOT NULL,
  `type` varchar(50) NOT NULL,
  `submission_date` date NOT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice_board`
--

INSERT INTO `notice_board` (`serial_no`, `title`, `course_code`, `topics`, `publish_date`, `type`, `submission_date`, `time`) VALUES
(1, 'ANNOUNCEMENT FOR CLASS TEST', 'cse-315', 'chapter- 1 \r\nchapter-2', '2018-05-09', 'class test', '2018-05-11', '2018-05-09 14:44:05'),
(2, 'ANNOUNCEMENT FOR QUIZ', 'cse-215', 'chapter - 2', '2018-05-09', 'Quiz', '2018-05-11', '2018-05-09 15:03:55'),
(3, 'ANNOUNCEMENT FOR Assignment', 'cse-215', 'chapter -1 (problem -1)\r\nException Handling\r\nCollection\r\nMultithreading\r\nPolymorphism\r\nInterface', '2018-05-09', 'Assignment', '2018-05-16', '2018-05-09 18:26:36'),
(4, 'ANNOUNCEMENT FOR QUIZ', 'cse-315', '=> Interface \\n\r\n=> Multi threading \\n\r\n=> Exception Handling\r\n=> Collection', '2018-05-16', 'Quiz', '2018-05-11', '2018-05-09 18:30:48'),
(5, 'ANNOUNCEMENT FOR QUIZ', 'cse-315', '=> Gauss Elimination with partial pivoting\r\n', '2018-05-09', 'Quiz', '2018-05-10', '2018-05-09 18:35:27'),
(6, 'ANNOUNCEMENT FOR Assignment', 'cse-215', 'Exception Handling\r\nCollection\r\nMultithreading\r\nPolymorphism\r\nInterface', '2018-05-09', 'Assignment', '2018-05-16', '2018-05-09 19:30:32'),
(8, 'ANNOUNCEMENT FOR CLASS TEST', 'cse-215', 'chapter - 1, 2 ,3 \r\nnumber - 1', '2018-05-09', 'class test', '2018-05-11', '2018-05-09 20:21:59');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `serial_id` int(20) NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL,
  `course_code` varchar(20) NOT NULL,
  `course_title` varchar(20) NOT NULL,
  `room_no` int(20) NOT NULL,
  `type` varchar(20) NOT NULL DEFAULT 'class test',
  `cr_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cr_panel`
--
ALTER TABLE `cr_panel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice_board`
--
ALTER TABLE `notice_board`
  ADD PRIMARY KEY (`serial_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cr_panel`
--
ALTER TABLE `cr_panel`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `notice_board`
--
ALTER TABLE `notice_board`
  MODIFY `serial_no` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
