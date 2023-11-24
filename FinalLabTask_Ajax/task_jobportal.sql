-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2023 at 04:18 AM
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
-- Database: `task_jobportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admininfo`
--

CREATE TABLE `admininfo` (
  `username` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admininfo`
--

INSERT INTO `admininfo` (`username`, `name`, `password`) VALUES
('atif1', 'atif', '123'),
('atif11', 'Ashraful Atif', '123');

-- --------------------------------------------------------

--
-- Table structure for table `employerinfo`
--

CREATE TABLE `employerinfo` (
  `employerName` varchar(50) NOT NULL,
  `CompanyName` varchar(50) NOT NULL,
  `ContactNo` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employerinfo`
--

INSERT INTO `employerinfo` (`employerName`, `CompanyName`, `ContactNo`, `username`, `password`) VALUES
('atif', 'BDjobs', 17555515, 'atif', '123');

-- --------------------------------------------------------

--
-- Table structure for table `jobinfo`
--

CREATE TABLE `jobinfo` (
  `jobId` int(50) NOT NULL,
  `CompanyName` varchar(50) NOT NULL,
  `jobTitle` varchar(50) NOT NULL,
  `location` varchar(500) NOT NULL,
  `salary` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobinfo`
--

INSERT INTO `jobinfo` (`jobId`, `CompanyName`, `jobTitle`, `location`, `salary`) VALUES
(1, 'Desco', 'New manager ', 'Dhaka', 15000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admininfo`
--
ALTER TABLE `admininfo`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `employerinfo`
--
ALTER TABLE `employerinfo`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `jobinfo`
--
ALTER TABLE `jobinfo`
  ADD PRIMARY KEY (`jobId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jobinfo`
--
ALTER TABLE `jobinfo`
  MODIFY `jobId` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
