-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2022 at 11:11 AM
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
(1, 'sdfa', 'afa', '2022-01-21 05:20:20'),
(2, 'dsa', 'fa', '2022-01-21 05:21:50'),
(3, 'dfafs', 'af', '2022-01-21 05:23:57');

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
(1, 'asfa', 0, 0, 'afaf', 0, 0, 'afa', '2022-01-21 10:04:20'),
(2, 'da', 0, 0, 'sd', 0, 0, 'a', '2022-01-21 10:04:33'),
(3, 'dsaf', 0, 0, 'afa', 0, 0, 'a', '2022-01-21 10:04:33');

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `allzoomdata`
--
ALTER TABLE `allzoomdata`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
