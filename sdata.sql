-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2022 at 04:46 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment_tab`
--

CREATE TABLE `comment_tab` (
  `id` int(11) NOT NULL,
  `comment` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment_tab`
--

INSERT INTO `comment_tab` (`id`, `comment`) VALUES
(1, 'hello'),
(2, 'hellosdsff'),
(3, 'this is my first  comment'),
(4, 'hindi is best notes');

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

--
-- Dumping data for table `dynamic_like`
--

INSERT INTO `dynamic_like` (`id`, `user_id`, `notes_id`, `status`) VALUES
(8, 101, 55, 'dlike'),
(10, 101, 76, 'dlike'),
(14, 101, 205, 'plike'),
(18, 101, 217, 'plike'),
(20, 101, 209, 'plike');

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
(203, 83, 'bca', 'web', 'eng', '0', ' guig ', 'notes_files/219.JPG', 'newusert@gmail.com', 0, 0, 'images/219.jpg'),
(204, 83, 'BTECH', 'maths', 'ruufu', '0', 'jjgiulgui', 'notes_files/219.JPG', 'newusert@gmail.com', 0, 0, 'images/219.jpg'),
(205, 84, 'BA', 'HINDI', 'hindi grammer', '50', 'this is very usefull  notes ', 'notes_files/218.png', 'ITPANKAJ25@GMAIL.COM', 1, 0, 'images/218.png'),
(206, 84, 'bca', 'php', 'opps', '20', 'opps all notes ', 'notes_files/218.png', 'ITPANKAJ25@GMAIL.COM', 0, 0, 'images/218.png'),
(207, 84, 'msc', 'project mangement', 'mathmactics', '0', 'best notes ', 'notes_files/218.png', 'ITPANKAJ25@GMAIL.COM', 1, 0, 'images/218.png'),
(208, 84, 'bca', 'web', 'html,css,javascript', '70', 'html and javascript is very usefull notes ', 'notes_files/218.png', 'ITPANKAJ25@GMAIL.COM', 1, 0, 'images/218.png'),
(209, 84, 'BA', 'HINDI', 'Chapter 2 hindi', '45', 'chapter 2 ALL Question with answer notes', 'notes_files/218.png', 'ITPANKAJ25@GMAIL.COM', 1, 0, 'images/218.png'),
(215, 84, 'BA', 'HINDI', 'what is Hindi Grammer', '120', 'The HIndi Grammer is Very Intresting subject', 'notes_files/218.png', 'ITPANKAJ25@GMAIL.COM', 0, 0, 'images/218.png'),
(216, 84, '', 'HINDI', '', '0', '', 'notes_files/218.png', 'ITPANKAJ25@GMAIL.COM', 0, 1, 'images/218.png'),
(217, 84, '', 'HINDI', '', '0', '', 'notes_files/218.png', 'ITPANKAJ25@GMAIL.COM', 1, 0, 'images/218.png'),
(218, 84, '', 'HINDI', 'ff', '0', 'dd', 'notes_files/218.png', 'ITPANKAJ25@GMAIL.COM', 0, 0, 'images/218.png'),
(219, 83, 'bca', 'php', 'opps new', '10', 'best subject', 'notes_files/219.JPG', 'newusert@gmail.com', 0, 0, 'images/219.jpg');

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
(15, 'Nitin', 'male', 'chd', 'web developer', 'graduated', '1 year', '0'),
(16, 'Nitin', 'male', 'chd', 'web developer', 'graduated', '1 year', '0'),
(17, 'pkverma', 'male', 'amethi', 'html', 'null', '0', '0'),
(18, 'pkverma', 'male', 'amethi', 'html', 'null', '0', '0'),
(19, 'test@gmail.com', 'male', 'hhkh', 'kh', 'khk', 'hk', '0'),
(20, 'test@gmail.com', 'male', 'hhkh', 'kh', 'khk', 'hk', '0'),
(21, 'pktest', 'male', 'd', 'd', 'd', 'd', '0'),
(22, 'pktest', 'male', 'd', 'd', 'd', 'd', '0'),
(23, 'professional  test ', 'male', 'amethi', 'coding', 'no', '2 year ', '0'),
(24, 'professional  test ', 'male', 'amethi', 'coding', 'no', '2 year ', '0'),
(25, 'jkjl', 'male', 'hk', 'hk', 'hk', 'hk', '0'),
(26, 'jkjl', 'male', 'hk', 'hk', 'hk', 'hk', '0'),
(27, 'fjlsjfls', 'male', 'hk', 'hk', 'hk', 'h', '123456'),
(28, 'fjlsjfls', 'male', 'hk', 'hk', 'hk', 'h', '123456');

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
(2, 'newusert@gmail.com', '9559878888', '1', 83, 'student', '', ''),
(3, 'admin@gmail.com', '9569315788', '1', 0, 'admin', '', ''),
(6, 'ITPANKAJ25@GMAIL.COM', '123456789', '123123', 84, 'user', '', ''),
(7, 'test@gmail.com', '123', '123456', 18, 'user', '', ''),
(8, 'h@gmail.com', 'khk', '2', 20, 'user', '', ''),
(9, 'hk@gmail.com', 'kh', '', 85, 'user', '', ''),
(10, 'pankajof@gmail.com', 'p', '', 86, 'user', '', ''),
(11, 'o@gmail.com', 'o', '', 87, 'user', '', ''),
(12, 'profes@gmail.com', 'dd', '', 22, 'user', '', ''),
(13, 'professional@gmail.com', '9889105555', '', 24, 'user', '', ''),
(14, 'hsss@gmail.com', 'h', '', 26, 'user', '', ''),
(15, 'kh1@gmail.com', 'k', '123456', 28, 'user', '', ''),
(16, 'itpankaj456@gmail.com', '988912588', '', 88, 'user', '', ''),
(17, 'jl@gmail.com', 'jl', 'jl', 89, 'user', '', ''),
(18, 'teacher@gmail.com', '', '', 1, 'user', '', '');

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
(79, '345679', '21321321', '', '', 'male', ''),
(80, '345679', '21321321', '', '', 'male', ''),
(81, '345679', '21321321', '', '', 'male', ''),
(82, '345679', '21321321', '', '', 'male', ''),
(83, 'Nitin', 'bca', 'pggc-46', 'Panjab university', 'male', ''),
(84, 'pankaj ', 'bca', 'pppcjg', 'pu', 'male', ''),
(85, 'hlh', 'hk', 'h', 'kh', 'male', ''),
(86, 'p', 'p', 'p', 'p', 'male', ''),
(87, 'oOo', 'o', 'o', 'o', 'male', 'pk25'),
(88, 'pankaj ', 'bca', 'pggc-46', 'pu', 'male', 'test123'),
(89, 'itpankaj25', 'jl', 'jl', 'jl', 'male', 'jl');

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
(27, 'BA', 'HINDI'),
(33, 'bca', 'web'),
(34, 'bca', 'php'),
(36, 'msc', 'project mangement'),
(40, 'MCA', ''),
(41, 'MCA', 'JAVA');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `institute_name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `city` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `speciality` varchar(100) NOT NULL,
  `practics` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `username`, `institute_name`, `email`, `contact_no`, `city`, `gender`, `speciality`, `practics`, `password`) VALUES
(1, '', 'test institute', '', '4561238521', 'teacherpur', 'male', 'html css javascript', '', '');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `dynamic_like`
--
ALTER TABLE `dynamic_like`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `postnotes`
--
ALTER TABLE `postnotes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=220;

--
-- AUTO_INCREMENT for table `professional`
--
ALTER TABLE `professional`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `subject_list`
--
ALTER TABLE `subject_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
