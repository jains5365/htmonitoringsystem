-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2018 at 06:50 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `html`
--

-- --------------------------------------------------------

--
-- Table structure for table `coal`
--

CREATE TABLE `coal` (
  `id` int(11) NOT NULL,
  `driver_id` varchar(255) NOT NULL,
  `entry_wt` varchar(255) NOT NULL,
  `exit_wt` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coal`
--

INSERT INTO `coal` (`id`, `driver_id`, `entry_wt`, `exit_wt`, `name`) VALUES
(2, '1122334455', '1.5 kg', '5.5 kg', 'Sanu'),
(3, '1223344556', '1.0 kg', '5.0 kg', 'Manu'),
(4, '1212121212', '2.5 kg', '4.5 kg', 'Raju'),
(5, '2121212121', '2.5', '8.5', 'Pradeep'),
(6, '4321212323', '3.5 kg', '9.5 kg', 'Yashasvi'),
(7, '5432122343', '2.2 kg', '7.5 kg', 'Ayush ');

-- --------------------------------------------------------

--
-- Table structure for table `c_detail`
--

CREATE TABLE `c_detail` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `adhar` varchar(255) NOT NULL,
  `license` varchar(255) NOT NULL,
  `mob` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `c_detail`
--

INSERT INTO `c_detail` (`id`, `name`, `address`, `adhar`, `license`, `mob`) VALUES
(1, '111111', '11111', '111111', '111111', '1111111'),
(2, '111111', '11111', '111111', '111111', '1111111'),
(3, '111111', '11111', '111111', '111111', '1111111');

-- --------------------------------------------------------

--
-- Table structure for table `d_detail`
--

CREATE TABLE `d_detail` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contractor_id` varchar(255) NOT NULL,
  `adhar_no` varchar(255) NOT NULL,
  `truck_no` varchar(255) NOT NULL,
  `driver_id` varchar(255) NOT NULL,
  `entry_wt` varchar(255) NOT NULL,
  `exit_wt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `d_detail`
--

INSERT INTO `d_detail` (`id`, `name`, `contractor_id`, `adhar_no`, `truck_no`, `driver_id`, `entry_wt`, `exit_wt`) VALUES
(12, 'Ayush Dixit', '11111', '11111', '11111', '1212121212', '1.5 kg', '6.5 kg'),
(13, 'Yashasvi', 'Ayush', '111122223333', 'Up 78 1212', '1231231231', '4.5 kg', '9.9 kg');

-- --------------------------------------------------------

--
-- Table structure for table `govt`
--

CREATE TABLE `govt` (
  `name` varchar(256) NOT NULL DEFAULT 'govt',
  `password` varchar(256) NOT NULL DEFAULT 'govt'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `govt`
--

INSERT INTO `govt` (`name`, `password`) VALUES
('qqqq', '123456'),
('govt', 'govt');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coal`
--
ALTER TABLE `coal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `c_detail`
--
ALTER TABLE `c_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `d_detail`
--
ALTER TABLE `d_detail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coal`
--
ALTER TABLE `coal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `c_detail`
--
ALTER TABLE `c_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `d_detail`
--
ALTER TABLE `d_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
