-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2024 at 09:12 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dietcian`
--

-- --------------------------------------------------------

--
-- Table structure for table `admintable`
--

CREATE TABLE `admintable` (
  `aid` int(11) NOT NULL,
  `anm` varchar(30) NOT NULL,
  `aem` varchar(150) NOT NULL,
  `apwd` varchar(20) NOT NULL,
  `amob` varchar(20) NOT NULL,
  `aque` varchar(50) NOT NULL,
  `aans` varchar(30) NOT NULL,
  `afb` varchar(100) NOT NULL,
  `ainsta` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admintable`
--

INSERT INTO `admintable` (`aid`, `anm`, `aem`, `apwd`, `amob`, `aque`, `aans`, `afb`, `ainsta`) VALUES
(1, 'pranil', 'pranilpawar09@gmail.com', '1234567', '7666238246', 'What is your favourite color', 'yc', 'https://www.facebook.com', 'https://www.instagram.com');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `apid` int(11) NOT NULL,
  `rid` int(11) NOT NULL,
  `tid` int(11) NOT NULL,
  `apdate` date NOT NULL,
  `apstatus` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`apid`, `rid`, `tid`, `apdate`, `apstatus`) VALUES
(1, 6, 1, '2024-03-08', 'Not Confirmed');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `rid` int(11) NOT NULL,
  `rname` varchar(100) NOT NULL,
  `remail` varchar(100) NOT NULL,
  `rpass` varchar(100) NOT NULL,
  `rmob` bigint(11) NOT NULL,
  `rque` varchar(100) NOT NULL,
  `rans` varchar(100) NOT NULL,
  `rphoto` varchar(200) NOT NULL,
  `radr` varchar(150) NOT NULL,
  `rgender` varchar(20) NOT NULL,
  `rdob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`rid`, `rname`, `remail`, `rpass`, `rmob`, `rque`, `rans`, `rphoto`, `radr`, `rgender`, `rdob`) VALUES
(6, 'rohan deshmukh', 'rohan@gmail.com', '123456789', 9049027582, 'school name', 'bvm', '', '', '', '0000-00-00'),
(7, '', 'sd@gmail.com', '123', 9049027582, '', '', 'images/Screenshot_20200315_161435.jpg', '', '', '0000-00-00'),
(11, 'harshal', 'hk@gmail.com', '1234', 9561600777, 'What is your favourite color', 'ycis', 'profile-photo/IMG_20200208_115447.jpg', 'wai', 'male', '2024-01-09'),
(12, 'pranav phadtare', 'phadtarradinath@gmail.com', '145', 9850551642, 'What is your hobby', 'playing', 'images/IMG_20200208_121057.jpg', 'wai', 'male', '2024-02-01'),
(13, 'pranil', 'pranil2@gmail.com', '789', 7666238246, 'What is your hobby', 'dg', 'profile-photo/IMG_20200208_121057.jpg', 'wai', 'male', '2024-01-10'),
(14, 'sagar gade', 'sagar@gmai.com', '123', 7666238246, 'What is your School Name', '12', 'profile-photo/IMG_20200208_121038.jpg', 'wai', 'male', '2024-01-10'),
(15, 'ajinkya', 'ajinkya@gmail.com', '123456', 9850551642, 'What is your School Name', 'yc', 'profile-photo/IMG_20200208_121038.jpg', 'wai', 'male', '2024-01-04'),
(16, 'Harshal Kumbhar', 'harshal@gmail.com', '123', 9850895623, 'What is your hobby', 'sutti', 'profile-photo/1610864007783.jpg', 'koregaon', 'male', '2008-06-24');

-- --------------------------------------------------------

--
-- Table structure for table `treatment`
--

CREATE TABLE `treatment` (
  `tid` int(11) NOT NULL,
  `tnm` varchar(100) NOT NULL,
  `tpr` int(11) NOT NULL,
  `tinfo` text NOT NULL,
  `timg` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `treatment`
--

INSERT INTO `treatment` (`tid`, `tnm`, `tpr`, `tinfo`, `timg`) VALUES
(1, 'weight gain', 1223, 'hig q treatment', 'assets/treatment_imgAnnotation 2022-01-21 115548.png'),
(2, 'wq', 12, 'ipw', 'assets/treatment_imgWhatsApp Image 2024-02-04 at 9.10.55 PM.jpeg'),
(3, 'wq', 12, 'ipw', 'assets/treatment_imgWhatsApp Image 2024-02-04 at 9.10.55 PM.jpeg'),
(4, 'wq', 12, 'ipw', 'assets/treatment_imgWhatsApp Image 2024-02-04 at 9.10.55 PM.jpeg'),
(5, 'wq', 12, 'ipw', 'assets/treatment_imgWhatsApp Image 2024-02-04 at 9.10.55 PM.jpeg'),
(6, 'wq', 12, 'ipw', 'assets/treatment_imgWhatsApp Image 2024-02-04 at 9.10.55 PM.jpeg'),
(7, 'thiriod', 1234, 'rrr', 'assets/treatment_imgWhatsApp Image 2024-02-04 at 9.56.07 PM.jpeg'),
(8, 'thiriod', 1234, 'rrr', 'assets/treatment_imgWhatsApp Image 2024-02-04 at 9.56.07 PM.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admintable`
--
ALTER TABLE `admintable`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`apid`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `treatment`
--
ALTER TABLE `treatment`
  ADD PRIMARY KEY (`tid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admintable`
--
ALTER TABLE `admintable`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `apid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `treatment`
--
ALTER TABLE `treatment`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
