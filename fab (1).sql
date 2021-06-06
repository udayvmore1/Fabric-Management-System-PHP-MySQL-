-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2021 at 06:22 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fab`
--

-- --------------------------------------------------------

--
-- Table structure for table `fabdb`
--

CREATE TABLE `fabdb` (
  `srno` int(20) NOT NULL,
  `stylename` varchar(100) NOT NULL,
  `fabricdetails` varchar(100) NOT NULL,
  `techpack` date NOT NULL,
  `gradedspecs` date NOT NULL,
  `factory` varchar(100) NOT NULL,
  `mill` varchar(100) NOT NULL,
  `costsheet` date NOT NULL,
  `po` date NOT NULL,
  `pi` date NOT NULL,
  `protosample` date NOT NULL,
  `fitsample` date NOT NULL,
  `fabricapproval` date NOT NULL,
  `fitcomments` date NOT NULL,
  `fitapproval` date NOT NULL,
  `trimapproval` date NOT NULL,
  `linereview` date NOT NULL,
  `fob` date NOT NULL,
  `fptandgpt` date NOT NULL,
  `ppsample` date NOT NULL,
  `fabricexmill` date NOT NULL,
  `trimsinhouse` date NOT NULL,
  `fabricinhouse` date NOT NULL,
  `ppm` date NOT NULL,
  `pcd` date NOT NULL,
  `loading` date NOT NULL,
  `inline` date NOT NULL,
  `midline` date NOT NULL,
  `final` date NOT NULL,
  `exfactory` date NOT NULL,
  `fca` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fabdb`
--

INSERT INTO `fabdb` (`srno`, `stylename`, `fabricdetails`, `techpack`, `gradedspecs`, `factory`, `mill`, `costsheet`, `po`, `pi`, `protosample`, `fitsample`, `fabricapproval`, `fitcomments`, `fitapproval`, `trimapproval`, `linereview`, `fob`, `fptandgpt`, `ppsample`, `fabricexmill`, `trimsinhouse`, `fabricinhouse`, `ppm`, `pcd`, `loading`, `inline`, `midline`, `final`, `exfactory`, `fca`) VALUES
(1, 'dsdas', 'dsfsd', '2021-03-02', '2021-03-02', 'vdsdcdsv', 'casv', '2021-03-02', '2021-03-02', '2021-03-02', '2021-03-02', '2021-03-02', '2021-03-02', '2021-03-02', '2021-03-02', '2021-03-02', '2021-03-02', '2021-03-02', '2021-03-02', '2021-03-02', '2021-03-02', '2021-03-02', '2021-03-02', '2021-03-02', '2021-03-02', '2021-03-02', '2021-03-02', '2021-03-02', '2021-03-02', '2021-03-02', '2021-03-02');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `ID` int(10) NOT NULL,
  `First_Name` varchar(100) NOT NULL,
  `Last_Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` int(100) NOT NULL,
  `File` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(100) NOT NULL,
  `user_id` bigint(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fabdb`
--
ALTER TABLE `fabdb`
  ADD PRIMARY KEY (`srno`),
  ADD UNIQUE KEY `srno` (`srno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `date` (`date`),
  ADD KEY `user_name` (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(100) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
