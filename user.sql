-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2022 at 06:18 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(3) NOT NULL,
  `ncin` int(8) NOT NULL,
  `nom` varchar(25) NOT NULL,
  `prenom` varchar(25) NOT NULL,
  `email` varchar(255) NOT NULL COMMENT 'Email@gmail.com',
  `date_naissance` date NOT NULL,
  `ville` varchar(25) NOT NULL,
  `service` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `ncin`, `nom`, `prenom`, `email`, `date_naissance`, `ville`, `service`) VALUES
(1, 123456, 'ahmed', 'mohamed', 'ahmed.mohamed@gmail.com', '2002-04-01', 'manouba', 'community manager'),
(2, 1020304, 'hedi', 'mahmoud', 'mahmoud.hedi@gmail.com', '2013-04-08', 'nabeul', 'community manager');

-- --------------------------------------------------------

--
-- Table structure for table `employer`
--

CREATE TABLE `employer` (
  `EMPid` int(3) NOT NULL,
  `EMPncin` int(8) NOT NULL,
  `EMPnom` varchar(25) NOT NULL,
  `EMPprenpm` varchar(25) NOT NULL,
  `EMPdate_naissance` date NOT NULL,
  `job` varchar(25) NOT NULL,
  `hire_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employer`
--

INSERT INTO `employer` (`EMPid`, `EMPncin`, `EMPnom`, `EMPprenpm`, `EMPdate_naissance`, `job`, `hire_date`) VALUES
(111, 1222222, 'nihel', 'ajimi', '2001-04-03', 'community manager', '2022-04-26');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Lid` int(3) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Pwd` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Lid`, `Username`, `Pwd`, `date`) VALUES
(22, 'mohamed.hedi@gmail.com', '*84AAC12F54AB666ECFC2A83C676908C8BBC381B1', '2022-04-26');

-- --------------------------------------------------------

--
-- Table structure for table `projet`
--

CREATE TABLE `projet` (
  `Pid` int(3) NOT NULL,
  `Pnom` varchar(25) NOT NULL,
  `resp` varchar(25) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projet`
--

INSERT INTO `projet` (`Pid`, `Pnom`, `resp`, `start_date`, `end_date`) VALUES
(52, 'go food', 'nihel ajimi', '2022-04-26', '2022-08-31');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `Sid` int(3) NOT NULL,
  `Snom` varchar(25) NOT NULL,
  `emp` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`Sid`, `Snom`, `emp`) VALUES
(1, 'community manager', 'nihel ajimi'),
(2, 'web develpement ', 'may'),
(3, 'graphic design ', 'mohamed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`,`ncin`);

--
-- Indexes for table `employer`
--
ALTER TABLE `employer`
  ADD PRIMARY KEY (`EMPid`,`EMPncin`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Lid`);

--
-- Indexes for table `projet`
--
ALTER TABLE `projet`
  ADD PRIMARY KEY (`Pid`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`Sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employer`
--
ALTER TABLE `employer`
  MODIFY `EMPid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `Lid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `projet`
--
ALTER TABLE `projet`
  MODIFY `Pid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `Sid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
