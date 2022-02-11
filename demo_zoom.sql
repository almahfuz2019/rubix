-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2022 at 05:18 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo_zoom`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(99) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `email`, `password`, `time`) VALUES
(1, 'admin', 'admin', '2022-01-25 09:39:33'),
(2, 'adsa', 'dadsfa', '2022-01-26 00:53:37'),
(3, 'adsa', 'dadsfa', '2022-01-26 00:53:43'),
(4, 'adsa', 'dadsfa', '2022-01-26 00:53:47'),
(5, 'sdf', 'afsaf', '2022-02-11 03:28:44'),
(6, 'sdf', 'afsaf', '2022-02-11 03:28:50');

-- --------------------------------------------------------

--
-- Table structure for table `allzoomdata`
--

CREATE TABLE `allzoomdata` (
  `id` int(99) NOT NULL,
  `name` varchar(255) NOT NULL,
  `roll` int(99) NOT NULL,
  `reg` int(99) NOT NULL,
  `technology` varchar(255) NOT NULL,
  `semester` int(99) NOT NULL,
  `shift` int(99) NOT NULL,
  `session` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `allzoomdata`
--

INSERT INTO `allzoomdata` (`id`, `name`, `roll`, `reg`, `technology`, `semester`, `shift`, `session`, `time`) VALUES
(1, 'sdafa', 0, 0, 'sfsdf', 0, 0, 'dsaf', '2022-02-11 02:43:13'),
(2, 'sdafa', 0, 0, 'sfsdf', 0, 0, 'dsaf', '2022-02-11 02:43:25'),
(3, 'sdafa', 0, 0, 'sfsdf', 0, 0, 'dsaf', '2022-02-11 02:45:43'),
(4, 'sdafa', 0, 0, 'sfsdf', 0, 0, 'dsaf', '2022-02-11 02:47:36');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(99) NOT NULL,
  `name` varchar(155) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `email`, `comment`, `time`) VALUES
(1, 'Al Mansur', 'dkslfaklsfkla@gmail.com', 'Bootstrap is supported by an extensive color system that themes our styles and components. This enables more comprehensive customization and extension for any project', '2022-02-11 10:10:55'),
(2, 'Shakib Al Hasan', 'fdsdaf', 'Be sure to monitor contrast ratios as you customize colors. As shown below, we’ve added three contrast ratios to each of the main colors—one for the swatch’s current colors, one for against white, and one for against black.', '2022-02-11 10:11:36');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(5) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `name`) VALUES
(5, 'today is the last day to submit form.'),
(6, 'dfas'),
(7, 'dfas'),
(8, 'dfas'),
(9, 'k'),
(10, 'a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `allzoomdata`
--
ALTER TABLE `allzoomdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `allzoomdata`
--
ALTER TABLE `allzoomdata`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
