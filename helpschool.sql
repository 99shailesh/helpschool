-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2023 at 07:49 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `helpschool`
--

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `t_name` varchar(25) NOT NULL,
  `uname` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `amount` varchar(25) NOT NULL,
  `description` varchar(50) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `fname` varchar(25) NOT NULL,
  `contact` varchar(25) NOT NULL,
  `add` text NOT NULL,
  `school1` varchar(25) NOT NULL,
  `s1d1` varchar(25) NOT NULL,
  `s1d2` varchar(25) NOT NULL,
  `school2` varchar(25) NOT NULL,
  `s2d1` varchar(25) NOT NULL,
  `s2d2` varchar(25) NOT NULL,
  `school3` varchar(25) NOT NULL,
  `s3d1` varchar(25) NOT NULL,
  `s3d2` varchar(25) NOT NULL,
  `school4` varchar(25) NOT NULL,
  `s4d1` varchar(25) NOT NULL,
  `s4d2` varchar(25) NOT NULL,
  `sc1d1` varchar(25) NOT NULL,
  `sc1d2` varchar(25) NOT NULL,
  `sc2d1` varchar(25) NOT NULL,
  `sc2d2` varchar(25) NOT NULL,
  `sc3d1` varchar(25) NOT NULL,
  `sc3d2` varchar(25) NOT NULL,
  `sc4d1` varchar(25) NOT NULL,
  `sc4d2` varchar(25) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`fname`, `contact`, `add`, `school1`, `s1d1`, `s1d2`, `school2`, `s2d1`, `s2d2`, `school3`, `s3d1`, `s3d2`, `school4`, `s4d1`, `s4d2`, `sc1d1`, `sc1d2`, `sc2d1`, `sc2d2`, `sc3d1`, `sc3d2`, `sc4d1`, `sc4d2`, `description`) VALUES
('sonam', '8928434971', 'B 1104 Vasai road', 'raghuvir', '2015-03-17', '4343-12-31', 'tp bhatiya', '2023-01-12', '2023-01-10', 'sndt', '2023-01-11', '2023-01-18', 'viva', '2023-01-17', '2023-01-17', '34', '100', '34', '100', '45', '100', '45', '100', 'i need scholaship');

-- --------------------------------------------------------

--
-- Table structure for table `t_profile_action`
--

CREATE TABLE `t_profile_action` (
  `fname` varchar(25) NOT NULL,
  `tcontact` varchar(25) NOT NULL,
  `tgmail` varchar(25) NOT NULL,
  `amount` varchar(25) NOT NULL,
  `t_type` varchar(25) NOT NULL,
  `description` varchar(25) NOT NULL,
  `t_add` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_profile_action`
--

INSERT INTO `t_profile_action` (`fname`, `tcontact`, `tgmail`, `amount`, `t_type`, `description`, `t_add`) VALUES
('tata', '9167616482', '', '5000', 'only jain', '', ''),
('Poonam', '234567890', 'poonam@gmail.com', '50000', 'government', 'only for singh', 'vasai road near box streat'),
('Manoj', '9087654321', 'manoj@gmail.com', '5000000', 'nGO', 'only for SC students', 'Virar 102 near sai temple');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ukey` int(10) NOT NULL,
  `uname` varchar(25) NOT NULL,
  `type` varchar(25) NOT NULL,
  `psw` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ukey`, `uname`, `type`, `psw`) VALUES
(1, 'sonam', 'student', 'Sonam@24'),
(2, 'rohit', 'student', 'Rohit'),
(3, 'tata', 'trust', 'Tata@123'),
(4, 'Manoj', 'trust', 'Manoj@123'),
(5, 'Poonam', 'trust', 'Poonam@123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ukey`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
