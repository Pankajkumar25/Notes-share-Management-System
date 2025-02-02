-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2022 at 07:17 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sdata2`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment_tab`
--

CREATE TABLE `comment_tab` (
  `id` int(11) NOT NULL,
  `comment` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `dynamic_like`
--

CREATE TABLE `dynamic_like` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `notes_id` int(11) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `postnotes`
--

CREATE TABLE `postnotes` (
  `id` int(11) NOT NULL,
  `ref_id` int(11) NOT NULL,
  `stream` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `Notes` varchar(250) NOT NULL,
  `price` varchar(100) NOT NULL,
  `description` varchar(300) NOT NULL,
  `cov_image` varchar(250) NOT NULL DEFAULT 'NO_FILE_UPLOADED',
  `email` varchar(100) NOT NULL,
  `plike` int(11) NOT NULL,
  `dlike` int(11) NOT NULL,
  `preview` varchar(100) NOT NULL DEFAULT 'NO_Image'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `postnotes`
--

INSERT INTO `postnotes` (`id`, `ref_id`, `stream`, `subject`, `Notes`, `price`, `description`, `cov_image`, `email`, `plike`, `dlike`, `preview`) VALUES
(225, 97, 'bca', 'web programming', 'html language', '250', 'this notes are very useful', 'notes_files/225.docx', 'shubhamverma@gmail.com', 0, 0, 'images/225.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `professional`
--

CREATE TABLE `professional` (
  `id` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `city` varchar(40) NOT NULL,
  `speciality` varchar(50) NOT NULL,
  `certifications` varchar(40) NOT NULL,
  `experience` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `professional`
--

INSERT INTO `professional` (`id`, `username`, `gender`, `city`, `speciality`, `certifications`, `experience`, `password`) VALUES
(49, 'KOMAL', 'female', 'chandigarh', 'advance php', 'govt certified', 'coding', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact_no` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `ref_id` int(11) NOT NULL,
  `usertype` varchar(100) NOT NULL DEFAULT 'user',
  `status` varchar(100) NOT NULL,
  `otp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`id`, `email`, `contact_no`, `password`, `ref_id`, `usertype`, `status`, `otp`) VALUES
(44, 'admin@gmail.com', '979916502', '123456', 49, 'admin', '', ''),
(45, 'shubhamverma@gmail.com', '9915509151', '3034@shubham', 97, 'student', '', ''),
(46, 'monikagogna@gmail.com', '8568024592', '667788', 7, 'teacher', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `course` varchar(50) NOT NULL,
  `college` varchar(50) NOT NULL,
  `university` varchar(40) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `course`, `college`, `university`, `gender`, `password`) VALUES
(97, 'shubhamverma', 'bca', 'pggcg-11', 'punjab university', 'male', '3034@shubham');

-- --------------------------------------------------------

--
-- Table structure for table `subject_list`
--

CREATE TABLE `subject_list` (
  `id` int(11) NOT NULL,
  `stream` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject_list`
--

INSERT INTO `subject_list` (`id`, `stream`, `subject`) VALUES
(66, 'b.com', 'account'),
(67, 'b.com', 'business'),
(68, 'b.com', 'Economics'),
(69, 'b.com', 'physical fitnees'),
(70, 'b.com', 'math`s'),
(72, 'bca', 'c/c++'),
(73, 'bca', 'php'),
(74, 'bca', 'java'),
(75, 'bca', 'web programming'),
(76, 'b.com', 'statics'),
(77, 'b.com', 'Discrete Maths'),
(79, 'non-med', 'physics'),
(80, 'non-med', 'chemistry'),
(81, 'BA', ''),
(82, 'BA', 'political science'),
(83, 'BA', 'history'),
(84, 'BA', 'geography'),
(85, 'BA', 'sociology'),
(86, 'BA', 'public Administration'),
(87, 'b.com', 'english'),
(88, 'bca', 'english'),
(89, 'non-med', 'english');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `institute_name` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `speciality` varchar(100) NOT NULL,
  `practics` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `username`, `institute_name`, `city`, `gender`, `speciality`, `practics`, `password`) VALUES
(7, 'monika gogna', 'female', 'chandigarh', 'pggcg-42', 'cloud computing', '4 years', '667788');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment_tab`
--
ALTER TABLE `comment_tab`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dynamic_like`
--
ALTER TABLE `dynamic_like`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `postnotes`
--
ALTER TABLE `postnotes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `professional`
--
ALTER TABLE `professional`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ref_id` (`ref_id`),
  ADD KEY `ref_id_2` (`ref_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject_list`
--
ALTER TABLE `subject_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment_tab`
--
ALTER TABLE `comment_tab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `dynamic_like`
--
ALTER TABLE `dynamic_like`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `postnotes`
--
ALTER TABLE `postnotes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=226;

--
-- AUTO_INCREMENT for table `professional`
--
ALTER TABLE `professional`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `subject_list`
--
ALTER TABLE `subject_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
