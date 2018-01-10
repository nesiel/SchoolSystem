-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2017 at 08:18 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `system_courses1`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `name` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`name`, `description`, `image`, `id`, `c_id`) VALUES
('mat', '', '', 0, 1),
('tora', '', 'lerning tora', 1, 0),
('sport', 'run', NULL, 68, 2);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `image` varchar(1000) NOT NULL,
  `image_name` varchar(44) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`image`, `image_name`, `id`) VALUES
('School2.png', '', 1),
('', 'men', 2),
('', 'student.jpg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET latin1 NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 NOT NULL,
  `image` varchar(200) CHARACTER SET latin1 NOT NULL,
  `course` varchar(500) CHARACTER SET latin1 NOT NULL,
  `c_id` int(11) NOT NULL,
  `text` varchar(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `phone`, `email`, `image`, `course`, `c_id`, `text`) VALUES
(1, 'israel', 2147483647, 'israel@gmail.com', 'man', 'tora', 0, '0'),
(47, 'coen', 544404040, 'experience@gmail.com', 'man', '', 2, '0');

-- --------------------------------------------------------

--
-- Table structure for table `students_and_courses`
--

CREATE TABLE `students_and_courses` (
  `id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Dumping data for table `students_and_courses`
--

INSERT INTO `students_and_courses` (`id`, `s_id`, `c_id`) VALUES
(1, 1, 1),
(2, 1, 1),
(3, 1, 1),
(4, 47, 68),
(5, 1, 1),
(6, 47, 68);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `user_type`, `password`) VALUES
(0, 'nesiel', 'nesiel@gmail.com', 'admin', '1234'),
(0, 'nesiel', 'nesiel@gmail.com', 'admin', '1234'),
(0, 'nesiel', 'nesiel@gmail.com', 'admin', '1234'),
(0, 'nesiel', 'nesiel@gmail.com', 'admin', '1234'),
(0, 'koko', 'lj@kj.com', 'user', '1234'),
(0, 'koko', 'lj@kj.com', 'user', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

--
-- Indexes for table `students_and_courses`
--
ALTER TABLE `students_and_courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `c_id` (`c_id`),
  ADD KEY `s_id` (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `students_and_courses`
--
ALTER TABLE `students_and_courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `students_and_courses`
--
ALTER TABLE `students_and_courses`
  ADD CONSTRAINT `students_and_courses_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `course` (`id`),
  ADD CONSTRAINT `students_and_courses_ibfk_2` FOREIGN KEY (`s_id`) REFERENCES `student` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
