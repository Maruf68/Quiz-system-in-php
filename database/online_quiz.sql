-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2022 at 07:48 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(5) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `exam_category`
--

CREATE TABLE `exam_category` (
  `id` int(5) NOT NULL,
  `category` varchar(100) NOT NULL,
  `exam_time_in_minutes` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam_category`
--

INSERT INTO `exam_category` (`id`, `category`, `exam_time_in_minutes`) VALUES
(18, 'laravel', '15'),
(19, 'asp.net', '25'),
(20, 'javascript', '30'),
(21, 'ruby', '20'),
(25, 'php', '35'),
(26, 'python', '20');

-- --------------------------------------------------------

--
-- Table structure for table `exam_results`
--

CREATE TABLE `exam_results` (
  `id` int(5) NOT NULL,
  `username` varchar(100) NOT NULL,
  `exam_type` varchar(100) NOT NULL,
  `total_question` varchar(10) NOT NULL,
  `correct_answer` varchar(10) NOT NULL,
  `wrong_answer` varchar(10) NOT NULL,
  `exam_time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam_results`
--

INSERT INTO `exam_results` (`id`, `username`, `exam_type`, `total_question`, `correct_answer`, `wrong_answer`, `exam_time`) VALUES
(1, 'roman2', 'laravel', '4', '1', '3', '2022-06-07'),
(2, 'roman2', 'laravel', '4', '0', '4', '2022-06-07'),
(3, 'roman2', 'php', '5', '0', '5', '2022-06-07'),
(4, 'roman2', 'ruby', '0', '0', '0', '2022-06-07'),
(5, 'roman2', 'asp.net', '2', '0', '2', '2022-06-07'),
(6, 'roman2', 'laravel', '4', '0', '4', '2022-06-07'),
(7, 'sakil', 'php', '5', '3', '2', '2022-06-07'),
(8, 'roman2', 'php', '5', '4', '1', '2022-06-07'),
(9, 'roman2', 'laravel', '4', '2', '2', '2022-06-07'),
(10, 'roman2', 'laravel', '4', '1', '3', '2022-06-07'),
(11, 'sakil', 'php', '5', '3', '2', '2022-06-07'),
(12, 'sakil', 'php', '5', '4', '1', '2022-06-07'),
(13, 'sakil', 'php', '5', '0', '5', '2022-06-07');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(5) NOT NULL,
  `question_no` varchar(5) NOT NULL,
  `question` varchar(500) NOT NULL,
  `opt1` varchar(100) NOT NULL,
  `opt2` varchar(100) NOT NULL,
  `opt3` varchar(100) NOT NULL,
  `opt4` varchar(100) NOT NULL,
  `answer` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question_no`, `question`, `opt1`, `opt2`, `opt3`, `opt4`, `answer`, `category`) VALUES
(1, '1', '5+3=?', '15', '8', '9', '10', '8', 'laravel'),
(3, '2', '11-3=?', '7', '8', '11', '9', '8', 'laravel'),
(14, '3', 'which one of these is vegetable?    ', 'opt_images/1892752.jpg', 'opt_images/180.jpg', 'opt_images/900.jpg', 'opt_images/maruf.jpg', 'opt_images/900.jpg', 'laravel'),
(18, '1', 'which one is a room?', 'opt_images/452175--.jpg', 'opt_images/1892752.jpg', 'opt_images/hacking-3840x2160_84777-mm-90.jpg', 'opt_images/Screenshot 2022-03-21 221834.png', 'opt_images/Screenshot 2022-03-21 221834.png', 'asp.net'),
(21, '5', '12+13', '27', '24', '25', '26', '25', 'laravel'),
(22, '2', 'what is the capital of Bangladesh?', 'paris', 'mumbai', 'dhaka', 'chitagong', 'dhaka', 'asp.net'),
(23, '1', 'PHP stands for -', 'Hypertext Preprocessor', 'Pretext Hypertext Preprocessor', 'Personal Home Processor', 'none of the above', 'Hypertext Preprocessor', 'php'),
(24, '2', 'Variable name in PHP starts with ?', '! (Exclamation)', '$ (Dollar)', '& (Ampersand)', '# (Hash)', '$ (Dollar)', 'php'),
(25, '3', 'Which of the following is not a variable scope in PHP?', 'Extern', 'Local', 'Static', 'Global', 'Extern', 'php'),
(26, '4', 'Which of the following is used to display the output in PHP?', 'writeline', 'print', 'echo', 'both 2 & 3', 'both 2 & 3', 'php'),
(27, '5', 'Which of the following is used for concatenation in PHP?', '+ (plus)', '* (Asterisk)', '. (dot)', 'append()', '. (dot)', 'php');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `firstname`, `lastname`, `username`, `password`, `email`, `contact`) VALUES
(2, 'roman', 'arthur', 'roman2', '12345', 'roman@gmail.com', '432423'),
(6, 'sakin', 'hasan', 'sakil', 'qwerty', 'sakil@gmail.com', '342434');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_category`
--
ALTER TABLE `exam_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_results`
--
ALTER TABLE `exam_results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `exam_category`
--
ALTER TABLE `exam_category`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `exam_results`
--
ALTER TABLE `exam_results`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
