-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2020 at 11:06 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tuteehut`
--

-- --------------------------------------------------------

--
-- Table structure for table `quiz_details`
--

CREATE TABLE `quiz_details` (
  `id` int(100) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `answer` varchar(100) NOT NULL,
  `score` varchar(1000) NOT NULL,
  `quizid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quiz_details`
--

INSERT INTO `quiz_details` (`id`, `phone`, `answer`, `score`, `quizid`) VALUES
(6, '9445644788', ' 1,1,1,1,qwert,tyui,test,9445644788,', '2', 0),
(7, '9445644788', ' 1,1,1,1,/,tyui,test,9445644788,', '3', 0),
(8, '9445644788', ' 1,1,1,1,/,tyui,test,9445644788,', '3', 0),
(9, '9445644788', ' 1,1,1,1,/,tyui,test,9445644788,', '3', 0),
(10, '9445644788', ' 1,1,1,1,/,tyui,test,9445644788,', '3', 0),
(11, '9445644788', ' 1,1,1,1,/,tyui,test,9445644788,', '3', 0),
(12, '9445644788', ' 1,3,1,4,/,tyui,test,9445644788,', '5', 0),
(13, '9445644788', ' 1,3,2,4,/,tyui,test,9445644788,', '6', 0),
(14, '9445644788', ' 1,2,4,/,tyui,test,9445644788,', '3', 0),
(15, '9445644788', ' 1,3,1,4,/,kjhgfds,test,9445644788,', '5', 0),
(16, '3456789', ' 2,2,1,/,tyui,test,3456789,', '3', 0),
(17, '3456789', ' 1,3,1,/,tyui,test,3456789,', '2', 0),
(18, '3456789', ' 1,3,1,/,tyui,test,3456789,', '2', 0),
(20, '9445644788', ' 3,1,1,qwert,tyui,fghjkl,9445644788,', '1', 0),
(21, '9445644788', ' 3,1,1,/,tyui,test,9445644788,', '3', 0),
(22, '9234091872', ' 1,1,1,/,tyui,test,923409187234,', '2', 0),
(23, '9445644788', ' 3,2,1,/,tyui,test,9445644788,', '4', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `quiz_details`
--
ALTER TABLE `quiz_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `quiz_details`
--
ALTER TABLE `quiz_details`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
