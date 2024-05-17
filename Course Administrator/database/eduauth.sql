-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2024 at 07:52 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eduauth`
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
(2, 'Firoz ', 'FST', 'Computer Science', 'Artificial Intelligence', 'mridha@gmail.com', ''),
(4, 'Nazia', 'FST', 'Computer Science', 'Artificial Intelligence', 'nazia@gmail.com', 'DS204'),
(5, 'Shaila', 'FASS', 'English', 'Literature', 'shaila@gmail.com', '4104'),
(6, 'Munjarin', 'FASS', 'English', 'Literature', 'munjarin@gmail.com', '4109'),
(7, 'Partha Proshad', 'FBA', 'BBA', 'Accounting', 'partha@gmail.com', '4207'),
(9, 'Riya', 'FASS', 'BBA', 'Accounting,Economics', 'cdfbgnhm', 'DN1111'),
(10, 'c', 'fc', 'cf', 'c', 'fcrr@gmail.com', 'xcv'),
(12, 'ed', 'def', 'cd', 'cdx', 'c@gmail.com', 'def'),
(13, 'vdf', 'bgn', 'bhn', 'bnh', 'nm@g.com', 'nm'),
(14, 'dwef', 'def', 'xcde', 'dcef', 'sdf@gmail.com', '');

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
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(10) NOT NULL,
  `AdminName` varchar(120) DEFAULT NULL,
  `UserName` varchar(120) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `UserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`) VALUES
(2, 'shakir', '123', 1712993366, 'mahmudulhaqueshakir@gmail.com', '1234', '2024-05-14 09:09:36'),
(3, 'rdf', 'fgj', 43567, 'riadassilver44@gmail.com', 'riyariya', '2024-05-15 15:17:21'),
(9, 'riya', '111', 45676, 'riadassilver44@gmail.com', '$2y$10$0sXzV6peHiH8Uy6lnL.iJuju6dFe9AgO94oM2//PYY/fb381JowJ.', '2024-05-15 15:41:06'),
(10, 'dcfjtrc', 'sfdcv', 145674246, 'riadassilver44@gmail.com', '$2y$10$A6MIKlEGxIR2f93N00O9tuMPt3pnJGhI9EjVBS2scexr44IG53bZa', '2024-05-15 17:20:56'),
(11, 'dcfjtrc', '', 145674246, '', '$2y$10$mjY.NyOBLjubggFphruVfuzuS.adHDW4t.siObeO9XSuh7fXz1r2i', '2024-05-15 17:20:57'),
(12, 'xdfvfb', 'mayurik', 167238873, 'riadassilver44@gmail.com', '$2y$10$ivkp//84wYG7UKf0JITx.ehcLEKQqciAcWk49e.Reu/MloNsL.2ki', '2024-05-15 17:25:57'),
(13, 'xdfvfb', 'root', 167238873, '', '$2y$10$chlPgmbHi2x0oJYe55C3kuWhSDE4Eo9/Y0yc8dLrbPiqSrIK1goJW', '2024-05-15 17:25:58'),
(14, 'xdfvfb', 'mayurik', 2364657, 'xsdfcdff@gmail.xyz', '$2y$10$u8S5BEqbCBQ/AINr/d2PYeaJPvNVX/3YdTPTtBeU0Rtd2wi5ZP3na', '2024-05-15 17:28:08'),
(15, 'xdfvfb', 'root', 0, 'xsdfcdff@gmail.xyz', '$2y$10$x0AUDG.dxgtSVa4noFwhxecPgJ5Gb5w0oaT8hYTq4qu8a6ODXF7O2', '2024-05-15 17:28:08'),
(16, '', '', 0, '', '$2y$10$YM5L0aW5K4ne.lRpbCT/jOt1Pq3uQIcKgN1HCjgE5Xyhx3fAbdUyG', '2024-05-15 17:32:25'),
(17, '', '', 0, '', '$2y$10$fWxWThDkxMSkYLZKrQ1x..VOauksQOOgmxsJoBL8L9S0Ps1uSya3u', '2024-05-15 17:32:26'),
(18, '', '', 0, '', '$2y$10$GqrRbnA.imlXmwyMhS9OFOBRmVIWP6v5OkfhqFLbJ2Hoh0c69OhHm', '2024-05-15 17:32:27'),
(19, '', '', 0, '', '$2y$10$KDWDtYIgQ.qKjNN5Ys5vTu88ypu30LNrcQUzWe1.y9fURhXTjwFl2', '2024-05-15 17:32:28'),
(20, '', '', 0, '', '$2y$10$4ah1RLYpMcvg9Ey/6wn7Kux6EhuhBUymIRheH8P2I.mj3xxIFW6ZK', '2024-05-15 17:32:29'),
(21, '', '', 0, '', '$2y$10$gU.BIRxStwEvWGxXtWw8Y.coaPaLohGXt9C62cNG3IiTrAabxrlGy', '2024-05-15 17:34:14'),
(22, '', '', 0, '', '$2y$10$gBnCrJ.VC8D2LYC72jQ8YONKqK6NZh8myQT5fMtr3EPq7c/7A5Dri', '2024-05-15 17:34:17'),
(23, '', '', 0, '', '$2y$10$711xRKSSgAtXSanB/mcpVOiGgTOkcyJxRnDGqWbrJQW6STocbqFZG', '2024-05-15 17:34:18'),
(24, '', '', 0, '', '$2y$10$KFoScx.w3gien3sjAC/f2OzPA6jhi.SQVt8T.c5UQB6QMi4JeoCK6', '2024-05-15 17:34:19'),
(25, '', '', 0, '', '$2y$10$La9KO8JJEAXTZDV5/UtOUeILIBxL.ipH8c76FENTzHMly8ovrRpxm', '2024-05-15 17:34:19'),
(26, '', '', 0, '', '$2y$10$r3456AXF2eHxvZU.Yn1UVucbjQ2yj.8mIZljs4EZ2TBGfo4fjLQ/q', '2024-05-15 17:35:51'),
(27, '', '', 0, '', '$2y$10$zcJSaKWIiMZCx0uHZpEaH./8KiXa0CD0O.H5lvJyElGVYLtq1I9ny', '2024-05-15 17:35:54'),
(28, '', '', 0, '', '$2y$10$URP8UZsJUZ2dqTnhsvuAteeTHgADKOufqzfSAo3OXDnNyrkSmVG8.', '2024-05-15 17:35:55'),
(29, '', '', 0, '', '$2y$10$qbB.NET36G6RIn2FOge0I.rHULM9mK2cF.tGO8RARUAbU/tzfZJ3C', '2024-05-15 17:35:56'),
(30, '', '', 0, '', '$2y$10$TA84E4WANNklOnGt9JWDm.UrwkJoKcyekab/Yv6.SxJM9Y6d.ogVC', '2024-05-15 17:35:56'),
(31, '', 'root', 0, '', '$2y$10$ahRdBW98rnKT97pSa/BFhOEmZ97qvVRd6HAhdAq6SEXVsoxA6Tc72', '2024-05-15 17:36:32'),
(32, '', 'root', 0, '', '$2y$10$rjRJIMe3yF6KJhklzz1tH.zzZVoCD/TkyoV85kUUhAvu3BB3cPlii', '2024-05-15 17:36:33'),
(33, '', 'root', 0, '', '$2y$10$V2ObywS8sI/DOos6paKGu.OgbZV5hsdztcNRgljJMhN2nyEj5LJwG', '2024-05-15 17:38:15'),
(34, '', 'root', 0, '', '$2y$10$s8Id6R7jJBBdve3Cp/3bT.qtjplufz5aWTI0X..HJ9kJZOoj/VT3m', '2024-05-15 17:38:16'),
(35, '', 'root', 0, '', '$2y$10$oyuiEwEgnf.QJaS39QPko.8BjzOs6EEz3kNxICr5ATxPiSq7ggr/6', '2024-05-15 17:38:16'),
(36, '', 'root', 0, '', '$2y$10$4fd0hRdTn1mYc5bOHrUU.emGHoNJxVJ8iBBSaug5FQKrBcydoOC4q', '2024-05-15 17:38:17'),
(37, '', 'root', 0, '', '$2y$10$R6fczsQJzsGBlCpLhSuVsujh.JW2/szLQcYU2pTwxdJc1f9jS3Brm', '2024-05-15 17:38:17'),
(38, '', 'root', 0, '', '$2y$10$eZdckEog5R0eM8bAwskmxe3yAIAiMU9fuw0lAPkMi8EAWNaZFLynO', '2024-05-15 17:38:17'),
(39, '', 'root', 0, '', '$2y$10$0RJBZe5Af2mbGYKBy/5i7.jrwU7KIzit7zsGr7X3eakRiTsYFPUbC', '2024-05-15 17:38:17'),
(40, '', 'root', 0, '', '$2y$10$3Ch4k66D8UC76sp9kVw57O0N9DHOAVG3XZzsrGGqBqCx4Fn.mgXPa', '2024-05-15 17:38:18'),
(41, '', 'root', 0, '', '$2y$10$.IHpiAPzPQ1zGhNeltERLuV1U8nfNdG4mTmjhg8YKIwIHHCfJ5k/K', '2024-05-15 17:38:18'),
(42, '', 'root', 0, '', '$2y$10$xhVnLLvDvZSV51BKIisfTOJd.MgrbeS3fntLireg.JDxd3W3/IvvW', '2024-05-15 17:38:19'),
(43, '', 'root', 0, '', '$2y$10$Q/Q28kqmWCENJeljsSPn5OSc3tomqsHdvH9GHnhmzleFI5UYBimTe', '2024-05-15 17:38:38'),
(44, '', 'root', 0, '', '$2y$10$ET0Ks95NbtF5W22C3TJIbeJXYWuuZcuKLKpIH/ImZguqPXvOXswcC', '2024-05-15 17:47:16'),
(45, '', 'root', 0, '', '$2y$10$yRw7DAzP95ECZfEdrK4XhOYb0HJR49iqjxb7yz.26N1HCJMPv9vKm', '2024-05-15 17:47:18'),
(46, '', 'root', 0, '', '$2y$10$XNMQSO87ZWI22.6j5UdymOwLMM9jOn1X9j8f6fm1se7NllFIWIo0K', '2024-05-15 17:47:19'),
(47, '', 'root', 0, '', '$2y$10$7TzsKI4NkYIZuV7jZiyUxeO8U1584ntM5IMZ0gFl9tCm5eqBeMX3G', '2024-05-15 17:47:38'),
(48, '', 'root', 0, '', '$2y$10$2ybFKDNRyTIfcLUif8K.PODfmNghDXJK5pPS67CWC2MizJe/MaKUa', '2024-05-15 17:47:39');

-- --------------------------------------------------------

--
-- Table structure for table `tblclass`
--

CREATE TABLE `tblclass` (
  `ID` int(5) NOT NULL,
  `CategoryName` varchar(50) DEFAULT NULL,
  `CategoryID` varchar(20) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblclass`
--

INSERT INTO `tblclass` (`ID`, `CategoryName`, `CategoryID`, `CreationDate`) VALUES
(9, 'PYTHON', 'PY-101', '2024-05-09 16:00:56'),
(11, 'Design', 'D-101', '2024-05-12 23:42:24'),
(12, '11e', '223', '2024-05-13 20:14:13'),
(13, 'aa', 'bb', '2024-05-13 20:31:47'),
(15, 'rr', '123', '2024-05-14 19:48:52'),
(19, 'dfece', '123', '2024-05-14 20:23:17'),
(20, 'rr', '56', '2024-05-14 21:06:02');

-- --------------------------------------------------------

--
-- Table structure for table `tblnotice`
--

CREATE TABLE `tblnotice` (
  `ID` int(5) NOT NULL,
  `NoticeTitle` mediumtext DEFAULT NULL,
  `NoticeID` varchar(200) NOT NULL,
  `NoticeFor` varchar(100) DEFAULT NULL,
  `NoticeMessage` mediumtext DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblnotice`
--

INSERT INTO `tblnotice` (`ID`, `NoticeTitle`, `NoticeID`, `NoticeFor`, `NoticeMessage`, `CreationDate`) VALUES
(7, 'sdf', '123', 'vcfg', 'dfbgn', '2024-05-15 06:28:41'),
(8, 'mmm', '35435', 'fg', 'ctf', '2024-05-15 06:40:42');

-- --------------------------------------------------------

--
-- Table structure for table `tblpage`
--

CREATE TABLE `tblpage` (
  `ID` int(10) NOT NULL,
  `PageType` varchar(200) DEFAULT NULL,
  `PageTitle` mediumtext DEFAULT NULL,
  `PageDescription` mediumtext DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `UpdationDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblpublicnotice`
--

CREATE TABLE `tblpublicnotice` (
  `ID` int(5) NOT NULL,
  `NoticeTitle` varchar(200) DEFAULT NULL,
  `NoticeMessage` mediumtext DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblpublicnotice`
--

INSERT INTO `tblpublicnotice` (`ID`, `NoticeTitle`, `NoticeMessage`, `CreationDate`) VALUES
(1, 'water supply unviability ', '<b style=\"color: rgb(32, 33, 36); font-family: arial, sans-serif;\">municipal corporation has temporarily ceased the water supply due to some repair works.</b><br>', '2023-02-12 10:27:07');

-- --------------------------------------------------------

--
-- Table structure for table `tblstudent`
--

CREATE TABLE `tblstudent` (
  `ID` int(10) NOT NULL,
  `CourseName` varchar(200) DEFAULT NULL,
  `Category` varchar(100) DEFAULT NULL,
  `CourseID` varchar(200) DEFAULT NULL,
  `Price` bigint(10) DEFAULT NULL,
  `CourseDetails` mediumtext DEFAULT NULL,
  `Image` varchar(200) DEFAULT NULL,
  `DateofAdding` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblstudent`
--

INSERT INTO `tblstudent` (`ID`, `CourseName`, `Category`, `CourseID`, `Price`, `CourseDetails`, `Image`, `DateofAdding`) VALUES
(23, 'vc', 'aabb', 'fg', 2345, 'gh', NULL, '2024-05-14 20:43:17'),
(24, 'cfg', '11e223', 'vbgn', 45, 'bgn', NULL, '2024-05-15 13:53:46');

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
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblclass`
--
ALTER TABLE `tblclass`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblnotice`
--
ALTER TABLE `tblnotice`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblpage`
--
ALTER TABLE `tblpage`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblpublicnotice`
--
ALTER TABLE `tblpublicnotice`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblstudent`
--
ALTER TABLE `tblstudent`
  ADD PRIMARY KEY (`ID`);

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
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

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
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `tblclass`
--
ALTER TABLE `tblclass`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tblnotice`
--
ALTER TABLE `tblnotice`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tblpage`
--
ALTER TABLE `tblpage`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblpublicnotice`
--
ALTER TABLE `tblpublicnotice`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblstudent`
--
ALTER TABLE `tblstudent`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

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
