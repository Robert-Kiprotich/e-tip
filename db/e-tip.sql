-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2021 at 05:00 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-tip`
--

-- --------------------------------------------------------

--
-- Table structure for table `cases`
--

CREATE TABLE `cases` (
  `date` date NOT NULL,
  `fname` text NOT NULL,
  `mname` text NOT NULL,
  `lname` text NOT NULL,
  `id` int(10) NOT NULL,
  `crime` varchar(20) DEFAULT NULL,
  `residence` varchar(20) NOT NULL,
  `statement` varchar(1000) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cases`
--

INSERT INTO `cases` (`date`, `fname`, `mname`, `lname`, `id`, `crime`, `residence`, `statement`, `phone`, `image`) VALUES
('0000-00-00', 'mejja', 'kiprotich', 'robert', 56869675, 'gyyyby', 'kisauni', '<p>Enter your statement/Ingiza maelezo</p>', '011146356738', ''),
('0000-00-00', 'mejja', 'kiprotich', 'robert', 56869676, 'gyyyby', 'kisauni', '<p>Enter your statement/Ingiza maelezo</p>', '011146356738', ''),
('0000-00-00', 'mejja', 'kiprotich', 'robert', 56869677, 'gyyyby', 'kisauni', '<p>Enter your statement/Ingiza maelezo</p>', '011146356738', ''),
('0000-00-00', 'mejja', 'kiprotich', 'robert', 56869679, '', 'kisauni', '<p><span style=\"color: #f5f8fa; font-family: Helvetica, Roboto, \'Segoe UI\', Calibri, sans-serif; font-size: 12px; white-space: pre-wrap; background-color: rgba(25, 30, 35, 0.61);\">e complainant recounted how the policeman flagged down his Piaggio Tuk Tuk, registration number KTWA 546X, before he allegedly made a demand of Sh2,000. When the driver failed to part with the money, the officer allegedly snatched Sh300 that the driver was holding. </span></p>', '011146356738', ''),
('0000-00-00', 'mejja', 'kiprotich', 'robert', 568696777, 'gyyyby', 'kisauni', '<p>Enter your statement/Ingiza maelezo</p>', '7979', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(4, 'admin', 'kyprohz@gmail.com', '21232f297a57a5a7');

-- --------------------------------------------------------

--
-- Table structure for table `whistleblowers`
--

CREATE TABLE `whistleblowers` (
  `date` date NOT NULL,
  `spctname` varchar(40) NOT NULL,
  `crime` text NOT NULL,
  `location` varchar(20) NOT NULL,
  `statement` varchar(1000) NOT NULL,
  `image` text NOT NULL,
  `idimg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `whistleblowers`
--

INSERT INTO `whistleblowers` (`date`, `spctname`, `crime`, `location`, `statement`, `image`, `idimg`) VALUES
('0000-00-00', 'fjjhh;d;hj;hh', 'money laundering', 'kisauni', '<p>Enter your statement/Ingiza maelezo</p>', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cases`
--
ALTER TABLE `cases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `whistleblowers`
--
ALTER TABLE `whistleblowers`
  ADD PRIMARY KEY (`idimg`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `whistleblowers`
--
ALTER TABLE `whistleblowers`
  MODIFY `idimg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
