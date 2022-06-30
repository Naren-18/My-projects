-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2020 at 05:45 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nk`
--

-- --------------------------------------------------------

--
-- Table structure for table `complete`
--

CREATE TABLE `complete` (
  `sno` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `age` varchar(10) NOT NULL,
  `number` varchar(10) NOT NULL,
  `email` varchar(56) NOT NULL,
  `address` varchar(100) NOT NULL,
  `cource` varchar(20) NOT NULL,
  `fee` varchar(20) NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp(),
  `pass` varchar(8) NOT NULL,
  `cpass` varchar(8) NOT NULL,
  `grade` varchar(10) NOT NULL,
  `uniqueid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complete`
--

INSERT INTO `complete` (`sno`, `name`, `age`, `number`, `email`, `address`, `cource`, `fee`, `dt`, `pass`, `cpass`, `grade`, `uniqueid`) VALUES
(52, 'Vijay', '22', '9866467542', 'vijay.v@gmail.com', 'Beg', 'Pythone', '4000', '2020-09-14 06:40:08', '12', '', 'A', 'vijay'),
(53, 'Vijay', '22', '9866467542', 'vijay.v@gmail.com', 'Beg', 'Pythone', '4000', '2020-09-14 06:45:51', 'v', '', 'B', 'vi'),
(69, 'Kumar', '21', '999999999', '19N31A05N7@mrcet.ac.in', 'hyd', 'C language', '2000', '2020-09-14 07:24:41', '12', '', 'O', 'Naren12'),
(70, 'navven', '12', '12', '19N31A05N7@mrcet.ac.in', 'hyd', 'C++ language', '3000', '2020-09-15 03:19:38', 'p', '', 'O', 'cp'),
(71, 'Narendra', '23', '9090909090', '19N31A05N7@mrcet.ac.in', 'Hyd', 'Java', '5000', '2020-09-16 10:36:25', '12', '', 'Fail', 'naren'),
(73, 'Venkat', '23', '232', '19N31A05N7@mrcet.ac.in', '1', 'C language', '2000', '2020-09-16 23:26:48', '11', '', 'O', 'Naren123'),
(74, 'Narendra', '23', '9898989898', '19N31A05N7@mrcet.ac.in', 'hyd', 'C language', '2000', '2020-09-18 00:28:24', '12', '', 'A+', 'NAV223');

-- --------------------------------------------------------

--
-- Table structure for table `completelist`
--
-- Error reading structure for table nk.completelist: #1030 - Got error 194 &quot;Tablespace is missing for a table&quot; from storage engine InnoDB
-- Error reading data for table nk.completelist: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `nk`.`completelist`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `contactform`
--

CREATE TABLE `contactform` (
  `id` int(3) NOT NULL,
  `name` varchar(40) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `enquiries` varchar(256) NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactform`
--

INSERT INTO `contactform` (`id`, `name`, `phone`, `email`, `enquiries`, `dt`) VALUES
(27, 'navven', '9087654567', 'naren.v113@gmail.com', 'How many cources do you Offer?', '2020-11-18 20:31:51');

-- --------------------------------------------------------

--
-- Table structure for table `fee`
--

CREATE TABLE `fee` (
  `id` int(3) NOT NULL,
  `cource` varchar(40) NOT NULL,
  `amount` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fee`
--

INSERT INTO `fee` (`id`, `cource`, `amount`) VALUES
(1, 'C language', '2000'),
(2, 'C++ language', '3000'),
(3, 'Java', '5000'),
(4, 'Pythone', '4000'),
(5, 'WEB development', '9000'),
(6, 'AI', '9000'),
(7, 'Machine learning', '8000'),
(8, 'Apptitude', '1000'),
(9, 'Etiquettes', '1500');

-- --------------------------------------------------------

--
-- Table structure for table `loginform`
--

CREATE TABLE `loginform` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loginform`
--

INSERT INTO `loginform` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `registerlist`
--

CREATE TABLE `registerlist` (
  `sno` int(3) NOT NULL,
  `name` varchar(40) NOT NULL,
  `age` int(3) NOT NULL,
  `number` varchar(10) NOT NULL,
  `email` varchar(56) NOT NULL,
  `address` varchar(256) NOT NULL,
  `cource` varchar(20) NOT NULL,
  `fee` varchar(10000) NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp(),
  `pass` varchar(8) NOT NULL,
  `cpass` varchar(8) NOT NULL,
  `grade` varchar(10) NOT NULL,
  `uniqueid` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registerlist`
--

INSERT INTO `registerlist` (`sno`, `name`, `age`, `number`, `email`, `address`, `cource`, `fee`, `dt`, `pass`, `cpass`, `grade`, `uniqueid`) VALUES
(1, 'Narendra', 20, '9090909090', 'naren.v@gmail.com', 'hyd', 'C language', '2000', '2020-09-11 23:03:09', '123', '123', 'A++', 'Naren487'),
(60, '', 0, '', '', '', 'none', '0', '2020-12-06 20:05:39', '', '', '0', '11');

-- --------------------------------------------------------

--
-- Table structure for table `timer`
--
-- Error reading structure for table nk.timer: #1030 - Got error 194 &quot;Tablespace is missing for a table&quot; from storage engine InnoDB
-- Error reading data for table nk.timer: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `nk`.`timer`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(3) NOT NULL,
  `cource` varchar(40) NOT NULL,
  `des` varchar(256) NOT NULL,
  `src` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `cource`, `des`, `src`) VALUES
(11, 'C language', 'C programming Introduction Part 1', 'c.mp4'),
(31, 'Java', 'Java Introduction Part 1', 'java.mp4'),
(32, 'Pythone', 'Pythone Introduction Part 1', 'pythone.mp4'),
(33, 'WEB development', 'WEB Develoment Introduction Part 1', 'web_deve.mp4'),
(39, 'AI', 'AI Introduction Part 1', 'ai.mp4'),
(43, 'C language', 'C programming Introduction Part 2', 'c2.mp4'),
(48, 'C++ language', 'C++ programming Introduction Part 1', 'cpp.mp4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complete`
--
ALTER TABLE `complete`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `contactform`
--
ALTER TABLE `contactform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fee`
--
ALTER TABLE `fee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loginform`
--
ALTER TABLE `loginform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registerlist`
--
ALTER TABLE `registerlist`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complete`
--
ALTER TABLE `complete`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `contactform`
--
ALTER TABLE `contactform`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `fee`
--
ALTER TABLE `fee`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `loginform`
--
ALTER TABLE `loginform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `registerlist`
--
ALTER TABLE `registerlist`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
