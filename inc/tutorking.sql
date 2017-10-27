-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2017 at 11:01 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tutorking`
--

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(3) NOT NULL,
  `state_id` int(3) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `state_id`, `name`) VALUES
(1, 10, 'Warri-Ogunu'),
(2, 10, 'Warri-Edjeba');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(3) NOT NULL,
  `state_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `state_name`) VALUES
(1, 'Abia'),
(2, 'Adamawa'),
(3, 'Akwa Ibom'),
(4, 'Anambra'),
(5, 'Bauchi'),
(6, 'Bayelsa'),
(7, 'Benue'),
(8, 'Borno'),
(9, 'Cross River'),
(10, 'Delta');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(2) NOT NULL,
  `subject` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `subject`) VALUES
(1, 'Mathematics'),
(2, 'Physics');

-- --------------------------------------------------------

--
-- Table structure for table `tutors`
--

CREATE TABLE `tutors` (
  `id` int(3) NOT NULL,
  `fname` varchar(12) NOT NULL,
  `lname` varchar(12) NOT NULL,
  `email` varchar(20) NOT NULL,
  `pword` varchar(65) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `profilepic` varchar(120) NOT NULL,
  `cv` varchar(120) NOT NULL,
  `subjOne` int(3) NOT NULL,
  `subjTwo` int(3) NOT NULL,
  `subjThree` int(3) NOT NULL,
  `subjFour` int(3) NOT NULL,
  `subjFive` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutors`
--

INSERT INTO `tutors` (`id`, `fname`, `lname`, `email`, `pword`, `phone`, `profilepic`, `cv`, `subjOne`, `subjTwo`, `subjThree`, `subjFour`, `subjFive`) VALUES
(1, '', '', 'chinoms925@gmail.com', 'c976c1dd14d0050497c6130d18d079f9653409fe8cfc22a22701cdd776173736', '08167318389', '', '', 1, 2, 0, 0, 0),
(2, '', '', 'dozzyslim@gmail.com', 'c976c1dd14d0050497c6130d18d079f9653409fe8cfc22a22701cdd776173736', '08167318389', '', '', 0, 0, 0, 0, 0),
(3, '', '', 'dozzyslim@gmail.com', 'c976c1dd14d0050497c6130d18d079f9653409fe8cfc22a22701cdd776173736', '08167318389', '', '', 0, 0, 0, 0, 0),
(4, '', '', 'dozzyslim@gmail.com', 'c976c1dd14d0050497c6130d18d079f9653409fe8cfc22a22701cdd776173736', '08167318389', '', '', 0, 0, 0, 0, 0),
(5, '', '', 'dozzyslim@gmail.com', 'c976c1dd14d0050497c6130d18d079f9653409fe8cfc22a22701cdd776173736', '08167318389', '', '', 0, 0, 0, 0, 0),
(6, '', '', 'dozzyslim@gmail.com', 'f0e4c2f76c58916ec258f246851bea091d14d4247a2fc3e18694461b1816e13b', '08166779900', '', '', 0, 0, 0, 0, 0),
(7, '', '', 'dozzyslim@yahoo.com', '65e84be33532fb784c48129675f9eff3a682b27168c0ea744b2cf58ee02337c5', '08167317878', '', '', 0, 0, 0, 0, 0),
(8, '', '', 'dozzyslim@yahoo.com', '65e84be33532fb784c48129675f9eff3a682b27168c0ea744b2cf58ee02337c5', '08167317878', '', '', 0, 0, 0, 0, 0),
(9, '', '', 'dozzyslim@yahoo.com', '65e84be33532fb784c48129675f9eff3a682b27168c0ea744b2cf58ee02337c5', '08167317878', '', '', 0, 0, 0, 0, 0),
(10, '', '', 'qwerty@qwerty.io', '65e84be33532fb784c48129675f9eff3a682b27168c0ea744b2cf58ee02337c5', '0987654321', '', '', 0, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tutors`
--
ALTER TABLE `tutors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tutors`
--
ALTER TABLE `tutors`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
