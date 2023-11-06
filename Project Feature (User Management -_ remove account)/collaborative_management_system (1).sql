-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2023 at 07:43 AM
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
-- Database: `collaborative_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminproject`
--

CREATE TABLE `adminproject` (
  `projectId` int(20) NOT NULL,
  `projectName` varchar(20) NOT NULL,
  `projectType` varchar(20) NOT NULL,
  `projectDetails` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminproject`
--

INSERT INTO `adminproject` (`projectId`, `projectName`, `projectType`, `projectDetails`) VALUES
(1, 'database', 'Web', ' this project is about database'),
(2, 'collaboration system', 'Web', ' tthis is web based project');

-- --------------------------------------------------------

--
-- Table structure for table `assignmanager`
--

CREATE TABLE `assignmanager` (
  `assignManID` int(20) NOT NULL,
  `projectId` int(20) NOT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `assignmanager`
--

INSERT INTO `assignmanager` (`assignManID`, `projectId`, `username`) VALUES
(2, 1, 'akash'),
(3, 2, 'fabliha'),
(4, 1, 'akash');

-- --------------------------------------------------------

--
-- Table structure for table `set_task_priority`
--

CREATE TABLE `set_task_priority` (
  `set_task_id` int(20) NOT NULL,
  `projectId` int(20) NOT NULL,
  `task_Priority` varchar(100) NOT NULL,
  `deadline` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `team_member`
--

CREATE TABLE `team_member` (
  `add_member_id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `team_member`
--

INSERT INTO `team_member` (`add_member_id`, `username`, `role`) VALUES
(1, 'karim', 'fix the new html file'),
(2, 'rahim', 'fix new window');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `username` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(11) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `dob` date NOT NULL,
  `userType` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`username`, `name`, `email`, `password`, `gender`, `dob`, `userType`) VALUES
('akash', 'akash', 'as@gnmal.com', 'aka@12', 'Female', '2023-11-20', 'Manager'),
('aluuu', 'aluuu', 'ashrafulhaque08@gmai', 'alu@123', 'Male', '2023-10-02', 'Admin'),
('ashrafulati', 'Ashraful At', 'ashrafulhaque08@gmai', 'atif@08', 'Male', '1999-10-08', 'Admin'),
('atif1', 'Ashraful Haque Alif', 'as@gnmal.com', 'atif@08', 'Male', '2023-10-17', 'Admin'),
('atif12', 'atif', 'as@gnma.com', '123', 'Male', '2023-10-03', 'Admin'),
('atif3', 'atif', 'as@gnma.com', '123', 'Male', '2023-10-02', 'Admin'),
('atiff', 'atif', 'as@gnma.com', 'pass@08', 'Male', '2023-10-24', 'Admin'),
('blakee', 'blakee', 'ashrafulatif@outlook', 'atif@12', 'Male', '2023-10-04', 'Admin'),
('fabliha', 'duti', 'fabliha.hasnin@gmail.com', 'duti@12', 'Female', '2023-11-07', 'Manager'),
('karim', 'karim', 'karim@gmail.com', 'karim@08', 'Male', '2023-11-28', 'Developer'),
('padfoott', 'blake', 'ashrafulhaque08@gmai', 'at@123', 'Male', '2023-10-10', 'Admin'),
('padfoottt', 'Ashraful At', 'ashrafulatif@outlook', 'hello@08', 'Male', '2023-10-03', 'Admin'),
('rahim', 'rahim', 'rahim@gmail.com', 'rahim@08', 'Male', '2023-11-29', 'Developer'),
('rahul', 'rahul', 'ashrafulhaque08@gmai', 'rahul@12', 'Male', '2023-10-17', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminproject`
--
ALTER TABLE `adminproject`
  ADD PRIMARY KEY (`projectId`);

--
-- Indexes for table `assignmanager`
--
ALTER TABLE `assignmanager`
  ADD PRIMARY KEY (`assignManID`),
  ADD KEY `assignmanager_ibfk_1` (`projectId`),
  ADD KEY `assignmanager_ibfk_2` (`username`);

--
-- Indexes for table `set_task_priority`
--
ALTER TABLE `set_task_priority`
  ADD PRIMARY KEY (`set_task_id`),
  ADD KEY `projectId` (`projectId`);

--
-- Indexes for table `team_member`
--
ALTER TABLE `team_member`
  ADD PRIMARY KEY (`add_member_id`),
  ADD KEY `team_member_ibfk_1` (`username`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminproject`
--
ALTER TABLE `adminproject`
  MODIFY `projectId` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `assignmanager`
--
ALTER TABLE `assignmanager`
  MODIFY `assignManID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `set_task_priority`
--
ALTER TABLE `set_task_priority`
  MODIFY `set_task_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `team_member`
--
ALTER TABLE `team_member`
  MODIFY `add_member_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assignmanager`
--
ALTER TABLE `assignmanager`
  ADD CONSTRAINT `assignmanager_ibfk_1` FOREIGN KEY (`projectId`) REFERENCES `adminproject` (`projectId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `assignmanager_ibfk_2` FOREIGN KEY (`username`) REFERENCES `userinfo` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `set_task_priority`
--
ALTER TABLE `set_task_priority`
  ADD CONSTRAINT `set_task_priority_ibfk_1` FOREIGN KEY (`projectId`) REFERENCES `adminproject` (`projectId`);

--
-- Constraints for table `team_member`
--
ALTER TABLE `team_member`
  ADD CONSTRAINT `team_member_ibfk_1` FOREIGN KEY (`username`) REFERENCES `userinfo` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
