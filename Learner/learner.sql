-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2024 at 09:44 AM
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
-- Database: `learner`
--

-- --------------------------------------------------------

--
-- Table structure for table `courseownership`
--

CREATE TABLE `courseownership` (
  `Own_id` char(36) NOT NULL,
  `C_id` char(36) NOT NULL,
  `L_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courseownership`
--

INSERT INTO `courseownership` (`Own_id`, `C_id`, `L_id`) VALUES
('0aeec41a-daf4-430b-b91f-334c3d2eca74', 'a1b2c3d4-5678-1234-5678-abcdef123456', 'borshon1017'),
('21e643b3-20f5-4699-905f-51d0de5836ff', 'a1b2c3d4-5678-1234-5678-abcdef123456', 'tatinee'),
('397972a3-7350-4e40-8b1a-3affed4e5487', 'c1d2e3f4-5678-1234-5678-abcdef123456', 'borshon1017'),
('7ca1f648-a7eb-4bf7-8f84-341453425364', 'c1d2e3f4-5678-1234-5678-abcdef123456', 'tatinee'),
('923aacc0-5f09-47dc-b857-e911ccef50d6', 'a1b2c3d4-5678-1234-5678-abcdef123456', 'tatinee'),
('951c94cf-79fa-4630-acdf-361685690c51', 'a1b2c3d4-5678-1234-5678-abcdef123456', 'ttt'),
('b61a5d32-f9e0-4142-be60-e8c0e9f3786b', 'y5z6a7b8-5678-1234-5678-abcdef123456', 'ttt'),
('b83c99ef-164f-4871-8919-b9a539f01e8c', 'a1b2c3d4-5678-1234-5678-abcdef123456', 'tatinee'),
('bfbe0f0f-f197-45f4-b309-97a3f86248fe', 'a1b2c3d4-5678-1234-5678-abcdef123456', 'tatinee'),
('c2766a30-f454-4ce5-938e-0c7a358d9436', 'c1d2e3f4-5678-1234-5678-abcdef123456', 'tatinee'),
('c5ef2d6b-ed66-4d73-a07d-04bb58754ce0', 'u1v2w3x4-5678-1234-5678-abcdef123456', 'ttt'),
('dd7da5a0-b711-4bb2-8367-4b155a31e2e0', 'c9d0e1f2-5678-1234-5678-abcdef123456', 'borshon1017'),
('e1753a13-668c-4bc9-9e2d-edce46897c5e', 'c1d2e3f4-5678-1234-5678-abcdef123456', 'tatinee'),
('ee3310a2-21f8-47a8-9128-13cb17d7a1c6', 'c9d0e1f2-5678-1234-5678-abcdef123456', 'tatinee');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `C_id` char(36) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Price` bigint(20) NOT NULL,
  `C_Admin` varchar(255) NOT NULL,
  `Thumbnail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`C_id`, `Name`, `Description`, `Price`, `C_Admin`, `Thumbnail`) VALUES
('a1b2c3d4-5678-1234-5678-abcdef123456', 'Web Development Bootcamp', 'Become a web developer with HTML, CSS, and JavaScript.', 29999, 'Bob Smith', '../upload/1.jpg'),
('c1d2e3f4-5678-1234-5678-abcdef123456', 'Introduction to Python', 'Learn the basics of Python programming.', 19999, 'Alice Johnson', '../upload/2.jpg'),
('c9d0e1f2-5678-1234-5678-abcdef123456', 'Project Management Professional', 'Prepare for the PMP certification.', 49999, 'Ivy Lee', '../upload/3.jpg'),
('e5f6g7h8-5678-1234-5678-abcdef123456', 'Data Science with R', 'Master data science using R programming.', 24999, 'Charlie Brown', '../upload/4.jpg'),
('g3h4i5j6-5678-1234-5678-abcdef123456', 'Photography Basics', 'Learn the fundamentals of photography.', 8999, 'Jack White', '../upload/5.jpg'),
('i9j0k1l2-5678-1234-5678-abcdef123456', 'Machine Learning A-Z', 'A comprehensive guide to machine learning.', 39999, 'Diana Ross', '../upload/6.jpg'),
('m3n4o5p6-5678-1234-5678-abcdef123456', 'Digital Marketing Mastery', 'Learn digital marketing strategies and tactics.', 19999, 'Evan Davis', '../upload/7.jpg'),
('q7r8s9t0-5678-1234-5678-abcdef123456', 'Graphic Design for Beginners', 'An introduction to graphic design principles.', 14999, 'Fiona Green', '../upload/8.jpg'),
('u1v2w3x4-5678-1234-5678-abcdef123456', 'Excel for Data Analysis', 'Analyze data efficiently using Excel.', 9999, 'George Harris', '../upload/9.jpg'),
('y5z6a7b8-5678-1234-5678-abcdef123456', 'Cybersecurity Essentials', 'Protect your digital assets and data.', 34999, 'Hannah Martin', '../upload/10.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `learner`
--

CREATE TABLE `learner` (
  `username` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `learner`
--

INSERT INTO `learner` (`username`, `Name`) VALUES
('rajbantee', 'rajbantee'),
('tatinee', 'tatinee');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` char(36) NOT NULL,
  `C_id` char(36) NOT NULL,
  `L_id` bigint(20) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Star` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `id` char(36) NOT NULL,
  `C_id` char(36) NOT NULL,
  `Topic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `Access` enum('Admin','Learner','Course Administrator','Instructor') NOT NULL DEFAULT 'Learner'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Username`, `Password`, `email`, `Access`) VALUES
('rajbantee ', '$2y$10$x/a3yM/ZLCKNQdHLGI.NJ.cCxg1vrkvH.qdg257qCnsgDcNlWfp3m', 'rr@gmail.com', 'Learner'),
('rrr', '$2y$10$08LA9yk8ffHcNWtbSw5CHeYUB6J1rAiBAV3hZIRNstRR8vGpqYVOm', 'rrr@gmail.com', 'Learner'),
('tatinee', '$2y$10$IOEKIWbWjXX4zN9czQ4D5.p.Ju81s7awbS1oVp8rB2q8ugt.1hf3m', 'tr@gmail.com', 'Learner'),
('tr', '$2y$10$y4R7SRc36AotRiW0Sf2rM.eTsG96eFlmLj2GE./2JIhc5GYo8D2Jm', 'trr@gmail.com', 'Learner'),
('trtr', '$2y$10$LDVu/nuqUxsSstzR2GzY5elH1V.QzEUO.8n/OD0HRvCnz.8rQvg.a', 'trtr@gmail.com', 'Learner'),
('ttt', '$2y$10$teSHJcRjCqLOhSHanD7HAuBAk3aVcYt7nIgz3U3h3gEykLLFg7LA.', 'ttt@gmail.com', 'Learner');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courseownership`
--
ALTER TABLE `courseownership`
  ADD PRIMARY KEY (`Own_id`),
  ADD KEY `courseownership_l_id_foreign` (`L_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`C_id`);

--
-- Indexes for table `learner`
--
ALTER TABLE `learner`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
