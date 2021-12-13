-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2021 at 08:09 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `allsubjects`
--

CREATE TABLE `allsubjects` (
  `id` int(10) NOT NULL,
  `class` int(10) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `day` varchar(20) NOT NULL,
  `time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `allsubjects`
--

INSERT INTO `allsubjects` (`id`, `class`, `subject`, `day`, `time`) VALUES
(1, 6, 'Bangla', 'SUN-TUE', '8.00-10.00 AM'),
(2, 6, 'English for Today', 'MON-WED', '10.00-12.00 AM'),
(3, 6, 'Mathematics', 'SUN-TUE', '1.00-3.00 PM'),
(4, 6, 'Science', 'MON-WED', '3.00-5.00 PM'),
(5, 7, 'Bangla', 'SUN-TUE', '8.00-10.00 AM'),
(6, 7, 'English for Today', 'MON-WED', '10.00-12.00 PM'),
(7, 7, 'Science', 'SUN-TUE', '1.00-3.00 PM'),
(8, 7, 'Mathematics', 'MON-WED', '3.00-5.00 PM'),
(9, 7, 'Physical Education and Health', 'WED', '5.00-5.30 PM'),
(10, 8, 'Bangla', 'SUN-TUE', '8.00-10.00 AM'),
(11, 8, 'English for Today', 'MON-WED', '10.00-12.00 PM'),
(12, 8, 'Mathematics', 'SUN-TUE', '1.00-3.00 PM'),
(13, 8, 'Science', 'MON-WED', '3.00-5.00 PM'),
(14, 8, 'Work and Life Oriented Education', 'MON', '5.00-5.30 PM'),
(15, 9, 'Bangla', 'SUN-TUE', '8.00-10.00 AM'),
(16, 9, 'English for Today', 'MON-WED', '10.00-12.00 PM'),
(17, 9, 'Science', 'SUN-TUE', '1.00-3.00 PM'),
(18, 9, 'General Math', 'MON-WED', '3.00-5.00 PM'),
(19, 10, 'Bangla', 'SUN-TUE', '8.00-10.00 AM'),
(20, 10, 'English for Today', 'MON-WED', '10.00-12.00 PM'),
(21, 10, 'Science', 'SUN-TUE', '1.00-3.00 PM'),
(22, 10, 'Higher Math', 'MON-WED', '3.00-5.00 PM');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `bid` int(10) NOT NULL,
  `bname` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`bid`, `bname`, `author`, `category`, `status`) VALUES
(1, 'Agni Veena', 'Kazi Nasrul Islam', 'Poetry Book', 'a'),
(2, 'Alice in Wonderland', 'Lewis Carrol', 'Novel', 'a'),
(3, 'Adventures of Tom Sawyer', 'Mark Twain', 'Novel', 'a'),
(4, 'Pride and Prejudice', 'Jane Austen', 'Novel', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `dashboard`
--

CREATE TABLE `dashboard` (
  `id` int(20) NOT NULL,
  `title` varchar(50) NOT NULL,
  `notice` varchar(600) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dashboard`
--

INSERT INTO `dashboard` (`id`, `title`, `notice`, `date`) VALUES
(1, 'School Opening', 'Spring 2022-2013', '2021-03-26');

-- --------------------------------------------------------

--
-- Table structure for table `librarycard`
--

CREATE TABLE `librarycard` (
  `id` int(10) NOT NULL,
  `uid` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `balance` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `librarycard`
--

INSERT INTO `librarycard` (`id`, `uid`, `name`, `balance`) VALUES
(1, '1016', 'Sheikh Hasina', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(10) NOT NULL,
  `uid` varchar(10) NOT NULL,
  `class` int(10) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `mid` float DEFAULT NULL,
  `final` float DEFAULT NULL,
  `total` float DEFAULT NULL,
  `tid` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `uid`, `class`, `subject`, `mid`, `final`, `total`, `tid`) VALUES
(1, '1001', 6, 'Bangla', 95, 85, 90, '1008'),
(2, '1002', 6, 'Bangla', 90, 85, 87.5, '1008'),
(3, '1003', 7, 'English', 85, 80, 82.5, '1008'),
(4, '1004', 7, 'English', 95, 85, 90, '1008'),
(5, '1005', 10, 'Bangla', 98, 90, 94, '1008');

-- --------------------------------------------------------

--
-- Table structure for table `studentnote`
--

CREATE TABLE `studentnote` (
  `id` int(10) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `class` int(10) NOT NULL,
  `note` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentnote`
--

INSERT INTO `studentnote` (`id`, `subject`, `class`, `note`) VALUES
(1, 'Bangla', 6, 'Bangla.txt'),
(2, 'English for Today', 10, 'English.txt');

-- --------------------------------------------------------

--
-- Table structure for table `studentnotice`
--

CREATE TABLE `studentnotice` (
  `id` int(10) NOT NULL,
  `class` int(10) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `notice` varchar(255) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentnotice`
--

INSERT INTO `studentnotice` (`id`, `class`, `subject`, `title`, `notice`, `date`) VALUES
(1, 6, 'Bangla', 'Class Test', 'All tests have been cancelled.', '2021-11-25'),
(2, 10, 'English for Today', 'Makup Class', 'Makup of missed class.', '2021-11-27'),
(3, 8, 'Science', 'Extra Class', 'Thursday will be an extra class', '2021-11-29'),
(4, 8, 'Bangla', 'Class Cancelled', 'Next Thursday, class is cancelled.', '2021-12-11');

-- --------------------------------------------------------

--
-- Table structure for table `teachernotice`
--

CREATE TABLE `teachernotice` (
  `id` int(100) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `notice` varchar(255) DEFAULT NULL,
  `date` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teachernotice`
--

INSERT INTO `teachernotice` (`id`, `title`, `notice`, `date`) VALUES
(1, 'Meeting', 'Meeting at 4 p.m.', '2021-11-25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `uid` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `bloodgrp` varchar(10) DEFAULT NULL,
  `class` int(10) DEFAULT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `picture` text NOT NULL,
  `type` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uid`, `password`, `name`, `dob`, `gender`, `bloodgrp`, `class`, `address`, `email`, `picture`, `type`, `status`) VALUES
(1, '1001', '123', 'Jihad Shahariar Joy', '2000-11-27', 'Male', 'O+', 6, 'Kuratoli,Kuril, Dhaka', 'jihadshahariarjoy2211@gmail.com', 'face.jpg', 's', 'a'),
(2, '1002', '456', 'Jihad', '2000-01-01', 'Male', 'A+', 7, 'Kuratoli,Kuril, Dhaka', 'jihad@gmail.com', 'cat1.jpg', 's', 'a'),
(3, '1003', '789', 'Name', '2021-11-11', 'Female', 'A+', 8, 'Kuratoli,Kuril, Dhaka', 'example@gmail.com', 'cat8.jpg', 's', 'a'),
(4, '1004', 'a123@', 'ABC', '2021-11-11', 'Female', 'AB+', 9, 'Kuratoli,Kuril, Dhaka', 'example@gmail.com', 'cat4.jpg', 's', 'a'),
(5, '1005', 'xyz', 'XYZ', '2021-11-11', 'Male', 'B+', 10, 'Dhaka, Bangladesh', 'xyz@gmail.com', 'cat5.jpg', 's', 'a'),
(6, '1006', '12345', 'Sam', '2005-05-01', 'Female', 'AB+', 6, 'Dhaka,Bangladesh', 'example@gmail.com', 'cat6.jpg', 's', 'p'),
(8, '1007', '1007', 'Samsung', '2021-11-01', 'Female', 'A-', 7, 'Dhaka,Bangladesh', 'abc@gmail.com', 'cat2.jpg', 's', 'p'),
(9, '1008', '1008', 'Teacher Name', '1990-11-01', 'Male', NULL, NULL, 'Dhaka,Bangladesh', 'teacher@gmail.com', 'cat3.jpg', 't', 'a'),
(10, '1009', '1009', 'Teacher 2 Name', '1980-11-01', 'Male', NULL, NULL, 'Dhaka,Bangladesh', 'teacher@gmail.com', 'cat7.jpg', 't', 'a'),
(11, '1010', '1010', 'Teacher 3 Name', '1980-11-01', 'Male', NULL, NULL, 'Dhaka,Bangladesh', 'teacher@gmail.com', 'cat9.jpg', 't', 'p'),
(12, '1011', '11', 'j.s.joy', '2021-11-01', 'Male', 'O+', 8, 'Dhaka,Bangladesh', 'example@gmail.com', 'cat10.jpg', 's', 'p'),
(13, '1012', '12', 'joy', '2021-11-06', 'Male', NULL, NULL, 'Dhaka', 'example@gmail.com', 'cat10.jpg', 't', 'p'),
(14, '1013', '13', 'Samsung', '2021-12-09', 'Female', 'A+', 8, 'Dhaka,Bangladesh', 'abc@gmail.com', 'cat7.jpg', 's', 'p'),
(15, '1014', '14', 'Amrin', '1998-01-01', 'Female', '', 0, 'Dhaka', 'example@gmail.com', 'cat5.jpg', 't', 'a'),
(16, '1015', 'arumoy', 'Arumoy', '2021-12-01', 'Male', '', 0, 'Dhaka,Bangladesh', 'example@gmail.com', 'face3.jpg', 'l', 'a'),
(17, '1000', 'admin', 'Vishal Paul', '1998-10-06', 'Male', '', 0, 'Dhaka,Bangladesh', 'example@gmail.com', 'face2.jpg', 'a', 'a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allsubjects`
--
ALTER TABLE `allsubjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `dashboard`
--
ALTER TABLE `dashboard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `librarycard`
--
ALTER TABLE `librarycard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentnote`
--
ALTER TABLE `studentnote`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentnotice`
--
ALTER TABLE `studentnotice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachernotice`
--
ALTER TABLE `teachernotice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uid` (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allsubjects`
--
ALTER TABLE `allsubjects`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `bid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `dashboard`
--
ALTER TABLE `dashboard`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `librarycard`
--
ALTER TABLE `librarycard`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `studentnote`
--
ALTER TABLE `studentnote`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `studentnotice`
--
ALTER TABLE `studentnotice`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `teachernotice`
--
ALTER TABLE `teachernotice`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
