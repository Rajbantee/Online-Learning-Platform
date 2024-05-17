-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2024 at 04:22 PM
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
-- Database: `learnify`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `monthly_salary` varchar(100) NOT NULL,
  `current_balance` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `username`, `monthly_salary`, `current_balance`) VALUES
(1, 'asd', '20000', '150000'),
(2, 'qwe', '10000', '65400'),
(3, 'mahadi', '54000', '432000');

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `publishDate` date NOT NULL,
  `dueDate` date NOT NULL,
  `mark` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`id`, `name`, `publishDate`, `dueDate`, `mark`) VALUES
(1, 'Assignment on Programming - I', '2024-05-01', '2024-05-17', '20'),
(2, 'Assignment on Programming - II', '2024-05-02', '2024-05-29', '10'),
(3, 'Assignment on Programming - III', '2024-05-02', '2024-05-29', '20'),
(4, 'Assignment on AutoCAD', '2024-05-02', '2024-05-29', '50'),
(5, 'Assignment on Computer Graphics', '2024-05-02', '2024-05-29', '30'),
(9, 'Faculty of Business Administration', '2024-05-01', '2025-08-09', '50');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(100) NOT NULL,
  `courseId` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `attendance` varchar(50) NOT NULL,
  `assignment` varchar(50) NOT NULL,
  `quiz` varchar(50) NOT NULL,
  `presentation` varchar(50) NOT NULL,
  `termExam` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `courseId`, `name`, `attendance`, `assignment`, `quiz`, `presentation`, `termExam`) VALUES
(1, 'CO1', 'Introduction to Programming', '5', '10', '40', '5', '40'),
(2, 'CO2', 'Introduction to Computer Studies', '10', '20', '20', '', '50'),
(11, 'CO10', 'Computer Networks', '10', '20', '0', '20', '50');

-- --------------------------------------------------------

--
-- Table structure for table `facultys`
--

CREATE TABLE `facultys` (
  `id` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `faculty` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `specialization` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `roomNo` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `facultys`
--

INSERT INTO `facultys` (`id`, `name`, `faculty`, `department`, `specialization`, `email`, `roomNo`) VALUES
(1, 'Chaity', 'FST', 'Computer Science', 'Operating System, Computer Networks', 'chaity@gmail.com', 'DN0505'),
(2, 'Firoz Mridha', 'FST', 'Computer Science', 'Artificial Intelligence', 'mridha@gmail.com', 'DN0607'),
(3, 'Kausur ', 'FST', 'Computer Science', 'Web Technology', 'kausur@gmail.com', 'DN06017'),
(4, 'Nazia', 'FST', 'Computer Science', 'Artificial Intelligence', 'nazia@gmail.com', 'DS204'),
(5, 'Shaila', 'FASS', 'English', 'Literature', 'shaila@gmail.com', '4104'),
(6, 'Munjarin', 'FASS', 'English', 'Literature', 'munjarin@gmail.com', '4109'),
(7, 'Partha Proshad', 'FBA', 'BBA', 'Accounting', 'partha@gmail.com', '4207');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `id` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `coursename` varchar(50) NOT NULL,
  `studentCount` int(50) NOT NULL,
  `registeredStudent` int(100) NOT NULL,
  `duration` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`id`, `name`, `coursename`, `studentCount`, `registeredStudent`, `duration`) VALUES
(1, 'B1', 'Computer Networks ', 40, 0, 'Sun 02:00 - Sun 03:30, Tue 02:00 - Tue 03:30'),
(2, 'B2', 'Computer Networks ', 40, 0, 'Mon 02:00 - Mon 03:30, Wed 02:00 - Wed 03:30'),
(3, 'A1', 'Web Technology', 40, 0, 'Sun 02:00 - Sun 03:30, Tue 02:00 - Tue 03:30'),
(4, 'A2', 'Web Technology', 40, 0, 'Sun 02:00 - Sun 03:30, Tue 02:00 - Tue 03:30'),
(5, 'L1', 'Data Structure', 40, 0, 'Sun 02:00 - Sun 03:30, Tue 02:00 - Tue 03:30'),
(6, 'L3', 'Data Structure', 40, 0, 'Sun 02:00 - Sun 03:30, Tue 02:00 - Tue 03:30');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(100) NOT NULL,
  `sId` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `session` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `sId`, `name`, `session`, `dob`, `address`) VALUES
(1, '20-48942-3', 'Md. Abdul Momen', 'Fall 2020-21', '2024-05-01', 'Nikunja'),
(2, '20-48942-2', 'Md. Abdul Manik', 'Summer 2020-21', '2024-05-01', 'Khilkhet'),
(3, '23-48942-1', 'Md Abu Bakkar', 'Spring 2023-24', '2024-05-01', 'Khilkhet');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `name` varchar(32) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(32) NOT NULL,
  `address` varchar(200) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `gender`, `dob`, `phone`, `email`, `address`, `username`, `password`) VALUES
(3, 'Mahamodul Hasan Mahadi', 'male', '2024-04-28', '01626210103', 'mahamodulhasanmahadi@gmail.com', 'Kuril, Dhaka', 'asd', '12345'),
(4, 'MAHAMODUL HASAN MAHADI', 'male', '2024-05-03', '+8801626210103', 'mahamodul.aiub@gmail.com', 'hi', 'qwe', '123'),
(5, 'MAHAMODUL HASAN MAHADI', 'male', '2024-04-28', '01626210103', 'mahamodulhasanmahadi@gmail.com', 'Kuril', 'mahadi', '123456'),
(6, 'MAHAMODUL HASAN MAHADI', 'male', '2024-05-07', '01626210103', 'mahamodulhasanmahadi@gmail.com', 'Kuril, Dhaka', 'sakif', '23456'),
(7, 'MAHAMODUL HASAN MAHADI', 'male', '2024-05-22', '01626210103', 'mahamodulhasanmahadi@gmail.com', 'Kuril, Dhaka', 'inspiredbyraphael@gmail.com', '123456'),
(8, 'MAHAMODUL HASAN MAHADI', 'male', '2024-06-05', '01626210103', 'mahamodulhasanmahadi@gmail.com', 'Kuril, Dhaka', 'mahadi7', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facultys`
--
ALTER TABLE `facultys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `facultys`
--
ALTER TABLE `facultys`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `account_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
