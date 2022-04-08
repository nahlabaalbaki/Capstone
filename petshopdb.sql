-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3308
-- Generation Time: Apr 06, 2022 at 08:40 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petshopdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `adoption`
--

CREATE TABLE `adoption` (
  `adoption_id` int(11) NOT NULL,
  `owner_id` int(11) NOT NULL,
  `experience` text NOT NULL,
  `financial` text NOT NULL,
  `household` text NOT NULL,
  `work` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appointment_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `type` varchar(255) NOT NULL,
  `owner_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `boarding`
--

CREATE TABLE `boarding` (
  `boarding_id` int(11) NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `owner_id` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `calendar`
--

CREATE TABLE `calendar` (
  `00:00` int(11) NOT NULL,
  `01:00` int(11) NOT NULL,
  `02:00` int(11) NOT NULL,
  `03:00` int(11) NOT NULL,
  `04:00` int(11) NOT NULL,
  `05:00` int(11) NOT NULL,
  `06:00` int(11) NOT NULL,
  `07:00` int(11) NOT NULL,
  `08:00` int(11) NOT NULL,
  `09:00` int(11) NOT NULL,
  `10:00` int(11) NOT NULL,
  `12:00` int(11) NOT NULL,
  `13:00` int(11) NOT NULL,
  `14:00` int(11) NOT NULL,
  `15:00` int(11) NOT NULL,
  `16:00` int(11) NOT NULL,
  `17:00` int(11) NOT NULL,
  `18:00` int(11) NOT NULL,
  `19:00` int(11) NOT NULL,
  `20:00` int(11) NOT NULL,
  `21:00` int(11) NOT NULL,
  `22:00` int(11) NOT NULL,
  `23:00` int(11) NOT NULL,
  `24:00` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL,
  `owner_id` int(11) NOT NULL,
  `feedback` text NOT NULL,
  `rate` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `owners`
--

CREATE TABLE `owners` (
  `owner_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone_nb` int(36) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `owners`
--

INSERT INTO `owners` (`owner_id`, `first_name`, `last_name`, `username`, `password`, `phone_nb`, `email`, `address`) VALUES
(10, 'Ruba', 'Baalbaki', 'test1', '9af15b336e6a9619928537df30b2e6a2376569fcf9d7e773eccede65606529a0', 70691227, 'jsjs@lak.co', 'saida-abra- road turn next to the new electricity building 4th building on the left'),
(11, 'Ruba', 'Baalbaki', 'ree', '9af15b336e6a9619928537df30b2e6a2376569fcf9d7e773eccede65606529a0', 70691227, 'juju@hotmail.com', 'saida-abra- road turn next to the new electricity building 4th building on the left'),
(12, 'Ruba', 'Baalbaki', 'rania', '9af15b336e6a9619928537df30b2e6a2376569fcf9d7e773eccede65606529a0', 70691227, 'nahla_princessoo@hotmail.com', 'saida-abra- road turn next to the new electricity building 4th building on the left'),
(13, 'Ruba', 'Baalbaki', 'mario', '9af15b336e6a9619928537df30b2e6a2376569fcf9d7e773eccede65606529a0', 70691227, 'jsjs@lak.co', 'saida-abra- road turn next to the new electricity building 4th building on the left');

-- --------------------------------------------------------

--
-- Table structure for table `petsitters`
--

CREATE TABLE `petsitters` (
  `petsitters_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `exp_years` int(11) NOT NULL,
  `availability` tinyint(1) NOT NULL,
  `phone_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adoption`
--
ALTER TABLE `adoption`
  ADD PRIMARY KEY (`adoption_id`),
  ADD KEY `owner_id` (`owner_id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appointment_id`),
  ADD KEY `owner_id` (`owner_id`);

--
-- Indexes for table `boarding`
--
ALTER TABLE `boarding`
  ADD PRIMARY KEY (`boarding_id`),
  ADD KEY `owner_id` (`owner_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`),
  ADD KEY `owner_id` (`owner_id`);

--
-- Indexes for table `owners`
--
ALTER TABLE `owners`
  ADD PRIMARY KEY (`owner_id`);

--
-- Indexes for table `petsitters`
--
ALTER TABLE `petsitters`
  ADD PRIMARY KEY (`petsitters_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adoption`
--
ALTER TABLE `adoption`
  MODIFY `adoption_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `boarding`
--
ALTER TABLE `boarding`
  MODIFY `boarding_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `owners`
--
ALTER TABLE `owners`
  MODIFY `owner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `petsitters`
--
ALTER TABLE `petsitters`
  MODIFY `petsitters_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
