-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2020 at 07:36 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('adtuteeminhut', 'eetuthut@123');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `sno` int(2) NOT NULL,
  `name` varchar(20) NOT NULL,
  `definition` longtext NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`sno`, `name`, `definition`, `image`) VALUES
(1, 'IT', 'The department was bifurcated from computer science departmnet and mainly focuses on technology!', 'uploads/it.jpg'),
(2, 'dwdwe', 'efficient!     ', '../home/uploads/certificate.jpg'),
(3, 'helo', 'Welcome to TuteeHUT!', '../home/uploads/home.jpg'),
(4, 'Meghaa', '      Meghaa', 'uploads/high_quality2.png'),
(5, 'bdewd', '      wdewdd', 'uploads/AboutUs1.jpg'),
(6, 'da', '      dwqd', 'uploads/instructor.png'),
(8, 'EEE', 'This department is electrical', 'uploads/world_class.png'),
(9, 'Mechanical', 'This department is full of automobiles!', '../home/uploads/home2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `job` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `name`, `job`, `description`, `image`) VALUES
(12, 'karenaoisdfaojsdf', 'jhgkhbyrugy', 'oyigiulkhpoh \r\nhello hi \r\nHello world this is booooooooo', 'Instructors.php'),
(13, 'pranava raman', 'Good person', 'oyigiulkhpohaksljghdpaosfhgel;kgjo;jfsgnshdbjsdbfkjsdnkfnsdfsdfasdf', '47002.jpg'),
(14, 'Kohila', 'as;dlkgjalsk;fg', 'osdjlhbfpojhfoiwpehrpowjngmvsakjnga/.,snv', '24114.jpg'),
(15, 'Raj', 's;lkgjf;ksdfljghkdfh', 'kjagfnksjdfgh;aighj;lkf;nd/.,snv', ''),
(16, 'Preeeet', 'asfa', 'abcdefghijklmnopqrstuvwxyz\r\nzyxwvutsrqponmlkjihgfedcba', '46238.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `sno` int(2) NOT NULL,
  `department` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `link` text NOT NULL,
  `definition` longtext NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`sno`, `department`, `name`, `link`, `definition`, `image`) VALUES
(3, 2, 'QUIZ 2', 'sugnup_page.php', 'Welcome!!!', '../home/uploads/creative.png'),
(10, 2, 'Quiz 1', '', 'This is LIT!  ', '../home/uploads/home.jpg'),
(12, 1, 'quiz 2', '', 'This quiz test ur skills!  ', '../home/uploads/AboutUs1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `fillups`
--

CREATE TABLE `fillups` (
  `id` int(11) NOT NULL,
  `question` varchar(100) NOT NULL,
  `answer` varchar(50) NOT NULL,
  `visibility` tinyint(1) NOT NULL,
  `quizid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fillups`
--

INSERT INTO `fillups` (`id`, `question`, `answer`, `visibility`, `quizid`) VALUES
(1, '............................character is used to indicate an end tag.', '/', 1, 1),
(2, '.............................is the correct HTML for making a checkbox.', 'input type = ', 1, 1),
(3, '.......................blahhhhhhhhh.', 'test', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `headings` text NOT NULL,
  `paragraphs` longtext NOT NULL,
  `visibility` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`headings`, `paragraphs`, `visibility`) VALUES
('initial_subheading', 'Welcome to tuteehut! ', 1),
('initial_heading', '  We are here to make Learning Fun!                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           ', 1),
('initial_definition', '', 1),
('address', '                                                                                                                                                                                                                                                                                                                                                                                                                           175, Nehru street, chennai-521321                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           ', 1),
('phone_number1', '                                                                                                                                                                                                                                                                                                                                                                                                                          +91 7428099283                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         ', 1),
('phone_number2', '                                                                                                                                                                                                                                                                                                                                                                                                                           +91 7397113393                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           ', 1),
('contact_about', 'We the team from Anna University is constantly working to create the revolution in the learning process of learning. For that, this is our big step and already it is elucidated in the home page.', 1),
('contact_heading', '                                                                                                                                                                                                                                                                                                                                                                                                                          Have some questions?                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           ', 1),
('about_subtext', '', 1),
('about_definition', 'Welcome to tutedjwb bwebwu buewbfuewbf bfuewbfuw wbeufbewuf hbefuewf hbfeuewfb ufuewf uefhuewf uefhuewf uefbuewfh ewfbuew uefhuew efhbuew ewfbuewf uefbuewf euwfbuebwf fhbewufb                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  ', 1),
('quiz1_type', '', 1),
('quiz1_heading', 'Engineering Mathematics III                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                ', 1),
('quiz1_description', 'qcxs   cyuvu befnrf jbbuefvbuevb ehbhevb bvubev hwberuvb hbuervbu hbrevb bfuebrv bvurevb hvub urhvurevh uvhuevfb bruevb                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          ', 1),
('quiz2_type', '', 1),
('quiz2_heading', 'Web Development                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          ', 1),
('quiz2_description', 'HTML, CSS, JS                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   ', 1),
('quiz3_type', '', 1),
('quiz3_heading', ' Data Structures                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       ', 1),
('quiz3_description', 'Linked List, Queue                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            ', 1),
('stages_intro', '', 1),
('quality_description', '', 1),
('instructor_description', '', 1),
('quiz_praise', '', 1),
('get_certified', '', 1),
('result1_date', '', 1),
('result1_heading', '', 1),
('result1_description', '', 1),
('result2_date', '', 1),
('result2_heading', '', 1),
('result2_description', '', 1),
('result3_date', '', 1),
('result3_heading', '', 1),
('result3_description', '', 1),
('quiz1', '', 1),
('quiz2', '', 1),
('quiz3', '', 1),
('quiz', '', 1),
('result', '', 1),
('result1', '', 1),
('result2', '', 1),
('result3', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `ID` int(11) NOT NULL,
  `position` varchar(100) NOT NULL,
  `name` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`ID`, `position`, `name`) VALUES
(1, 'background', 'uploads/home2.jpg'),
(6, 'quiz1', 'uploads/quiz1.jpg'),
(7, 'quiz2', 'uploads/quiz2.jpg'),
(8, 'quiz3', 'uploads/treasure.jpg'),
(9, 'result1', 'uploads/reveal1.jpg'),
(10, 'result2', 'uploads/reveal3.jpg'),
(11, 'result3', 'uploads/reveal1.jpg'),
(12, 'about1', 'uploads/aboutUS.png'),
(13, 'about2', 'uploads/aboutus3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(100) NOT NULL,
  `question` varchar(250) NOT NULL,
  `option1` varchar(100) NOT NULL,
  `option2` varchar(100) NOT NULL,
  `option3` varchar(100) NOT NULL,
  `option4` varchar(100) NOT NULL,
  `answer` varchar(100) NOT NULL,
  `visibility` tinyint(1) NOT NULL,
  `quizid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`, `visibility`, `quizid`) VALUES
(10, 'How is how amazzing?', 'how', 'how', 'how', 'how', '1', 1, 10),
(12, 'How is how?', 'how', 'how', 'how', 'how', '2', 1, 1),
(18, 'Whats pc?', 'Hyper text markup language', 'Hyper tool markup language', 'High tool markup language', 'Higher tool markup language', '4', 1, 1),
(19, 'what is tuteehut?', 'website', 'er', 'ew', 'qwerty', '1', 1, 3),
(20, 'what is Viswa?', 'dwd', 'wdw', 'qwe', 'qwerty', '1', 1, 12);

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
(23, '9445644788', ' 3,2,1,/,tyui,test,9445644788,', '4', 0),
(25, '1234567890', ' 1,4,1,/,t,nh,1234567890,', '2', 0),
(26, '1234567890', ' 1,1234567890,', '1', 0),
(27, '1234567890', ' 3,1234567890,', '0', 0),
(28, '1234567890', ' 1,1234567890,', '2', 0),
(29, '1234567890', ' 1,1234567890,', '1', 0),
(30, '1234567890', ' 1,1234567890,', '1', 0),
(31, '1234567890', ' 1,1234567890,', '1', 0),
(32, '1234567890', ' 1,1234567890,', '1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `ID` int(7) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `department` varchar(100) DEFAULT NULL,
  `year` int(1) NOT NULL,
  `address` varchar(20) DEFAULT NULL,
  `password` varchar(20) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`ID`, `Name`, `Email`, `phone`, `department`, `year`, `address`, `password`, `status`) VALUES
(3, 'Ratcha', 'hloo@gmail.com', '1234567890', 'CSE', 2, 'Kalpakkam', '123456', 0),
(2, 'John Doe', 'k.john_doe@gmail.com', '0000000000', 'IT', 3, 'Erode-5', '123456', 0),
(1, 'test', 'test@gmail.com', '0000000000', 'IT', 1, 'Thiruchi', '123456', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `fillups`
--
ALTER TABLE `fillups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD UNIQUE KEY `headings` (`headings`) USING HASH;

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz_details`
--
ALTER TABLE `quiz_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`Email`),
  ADD UNIQUE KEY `email` (`Email`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `sno` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `sno` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `fillups`
--
ALTER TABLE `fillups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `quiz_details`
--
ALTER TABLE `quiz_details`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
