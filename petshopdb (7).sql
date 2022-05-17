-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3310
-- Generation Time: May 17, 2022 at 12:37 PM
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
  `experience` text NOT NULL,
  `financial` text NOT NULL,
  `household` text NOT NULL,
  `work` text NOT NULL,
  `document` text NOT NULL,
  `owner_id4` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adoption`
--

INSERT INTO `adoption` (`adoption_id`, `experience`, `financial`, `household`, `work`, `document`, `owner_id4`) VALUES
(4, 'fjkejflkfjlkef', 'fkjljkejk', 'tt', 'jkfweljlekwjeklw', 'questions.txt', 22),
(5, 'q', 'fkjljkejk', 'tt', 'jkfweljlekwjeklw', 'spookymenuimage.jpg', 25),
(6, 'vfds', 'tt', 'tt', 'jkfweljlekwjeklw', '.docx', 22),
(7, 'vfds', 'tt', 'kewjfklwejklew', 'tttt', 'maharat.jpg', 22);

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appointment_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` text NOT NULL,
  `available` tinyint(1) NOT NULL,
  `comments` text NOT NULL,
  `owner_id3` int(11) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appointment_id`, `date`, `time`, `available`, `comments`, `owner_id3`, `type`) VALUES
(144, '2022-05-16', '10:00AM-12:00PM', 0, 'Be Careful', 22, 'Trim the nails'),
(145, '2022-05-16', '12:00PM-2:00PM', 0, 'Be Careful', 22, 'Trim the nails'),
(146, '2022-05-16', '2:00PM-4:00PM', 1, '', NULL, NULL),
(147, '2022-05-16', '4:00PM-6:00PM', 1, '', NULL, NULL),
(148, '2022-05-17', '10:00AM-12:00PM', 1, '', NULL, NULL),
(149, '2022-05-17', '12:00PM-2:00PM', 0, 'Be Careful', 22, 'Hair Cut'),
(150, '2022-05-17', '2:00PM-4:00PM', 1, '', NULL, NULL),
(151, '2022-05-17', '4:00PM-6:00PM', 1, '', NULL, NULL),
(152, '2022-05-18', '10:00AM-12:00PM', 0, 'Be Careful', 22, 'Trim the nails'),
(153, '2022-05-18', '12:00PM-2:00PM', 0, 'Be Careful', 22, 'Trim the nails'),
(155, '2022-05-18', '4:00PM-6:00PM', 1, '', NULL, NULL),
(156, '2022-05-19', '10:00AM-12:00PM', 1, '', NULL, NULL),
(157, '2022-05-19', '12:00PM-2:00PM', 1, '', NULL, NULL),
(158, '2022-05-19', '2:00PM-4:00PM', 1, '', NULL, NULL),
(159, '2022-05-19', '4:00PM-6:00PM', 1, '', NULL, NULL),
(160, '2022-05-20', '10:00AM-12:00PM', 1, '', NULL, NULL),
(161, '2022-05-20', '12:00PM-2:00PM', 1, '', NULL, NULL),
(162, '2022-05-20', '2:00PM-4:00PM', 1, '', NULL, NULL),
(163, '2022-05-20', '4:00PM-6:00PM', 1, '', NULL, NULL),
(164, '2022-05-21', '10:00AM-12:00PM', 1, '', NULL, NULL),
(165, '2022-05-21', '12:00PM-2:00PM', 1, '', NULL, NULL),
(166, '2022-05-21', '2:00PM-4:00PM', 1, '', NULL, NULL),
(167, '2022-05-21', '4:00PM-6:00PM', 1, '', NULL, NULL),
(168, '2022-05-23', '10:00AM-12:00PM', 1, '', NULL, NULL),
(169, '2022-05-23', '12:00PM-2:00PM', 1, '', NULL, NULL),
(170, '2022-05-10', '2:00PM-4:00PM', 1, '', NULL, NULL),
(171, '2022-05-10', '4:00PM-6:00PM', 1, '', NULL, NULL),
(172, '2022-05-11', '10:00AM-12:00PM', 1, '', NULL, NULL),
(173, '2022-05-11', '12:00PM-2:00PM', 1, '', NULL, NULL),
(174, '2022-05-11', '2:00PM-4:00PM', 1, '', NULL, NULL),
(175, '2022-05-11', '4:00PM-6:00PM', 1, '', NULL, NULL),
(176, '2022-05-12', '10:00AM-12:00PM', 1, '', NULL, NULL),
(177, '2022-05-12', '12:00PM-2:00PM', 1, '', NULL, NULL),
(178, '2022-05-12', '2:00PM-4:00PM', 1, '', NULL, NULL),
(179, '2022-05-12', '4:00PM-6:00PM', 1, '', NULL, NULL),
(180, '2022-05-13', '10:00AM-12:00PM', 1, '', NULL, NULL),
(181, '2022-05-13', '12:00PM-2:00PM', 1, '', NULL, NULL),
(182, '2022-05-13', '2:00PM-4:00PM', 1, '', NULL, NULL),
(183, '2022-05-13', '4:00PM-6:00PM', 1, '', NULL, NULL),
(184, '2022-05-14', '10:00AM-12:00PM', 1, '', NULL, NULL),
(185, '2022-05-14', '12:00PM-2:00PM', 1, '', NULL, NULL),
(186, '2022-05-14', '2:00PM-4:00PM', 1, '', NULL, NULL),
(187, '2022-05-14', '4:00PM-6:00PM', 1, '', NULL, NULL),
(188, '2022-05-15', '10:00AM-12:00PM', 1, '', NULL, NULL),
(189, '2022-05-15', '12:00PM-2:00PM', 1, '', NULL, NULL),
(190, '2022-05-15', '2:00PM-4:00PM', 1, '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `boarding`
--

CREATE TABLE `boarding` (
  `boarding_id` int(11) NOT NULL,
  `room` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `comments` text NOT NULL,
  `owner_id2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `boarding`
--

INSERT INTO `boarding` (`boarding_id`, `room`, `start_date`, `end_date`, `comments`, `owner_id2`) VALUES
(1, 'Multiple Room', '2022-08-03', '2022-05-20', 'Be Careful', 22);

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
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `service` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `rate` int(11) NOT NULL,
  `owner_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `name`, `email`, `service`, `message`, `rate`, `owner_id`) VALUES
(1, 'Ruba Baalbaki', 'nahla.baalbaki@lau.edu', 'the', 'hello', 3, 22);

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
  `address` varchar(255) NOT NULL,
  `owner_type` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `owners`
--

INSERT INTO `owners` (`owner_id`, `first_name`, `last_name`, `username`, `password`, `phone_nb`, `email`, `address`, `owner_type`) VALUES
(21, 'Ruba', 'Baalbaki', 'Admin', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4', 76071587, 'ruba.baalbaki@lau.edu', 'Saida-Hilaleyeh-Abra', 'admin'),
(22, 'Nahla', 'Baalbaki', 'Nahla', '9af15b336e6a9619928537df30b2e6a2376569fcf9d7e773eccede65606529a0', 71187258, 'nahla.baalbaki@lau.edu', 'Saida-Hilaleyeh-Abra', 'user'),
(25, 'Sawsan', 'Yaman', 'SawsanY', 'db2e7f1bd5ab9968ae76199b7cc74795ca7404d5a08d78567715ce532f9d2669', 71187258, 'syaman@ccias.org.lb', 'saida-abra', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `petimages`
--

CREATE TABLE `petimages` (
  `image_id` int(11) NOT NULL,
  `image` text NOT NULL,
  `pet_type` varchar(255) NOT NULL,
  `pet_age` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petimages`
--

INSERT INTO `petimages` (`image_id`, `image`, `pet_type`, `pet_age`) VALUES
(1, 'image1.jfif', 'German Shepherd', '2 years'),
(2, 'image2.jfif', 'Bengal', '4 months'),
(3, 'image3.jfif', 'Mix Husky', '2 years'),
(4, 'image4.jfif', 'Munchkin', '8 months'),
(5, 'image5.jfif', 'Maine Coon', '3 years'),
(6, 'image6.jfif', 'Turkish Angora', '15 months'),
(7, 'image7.jfif', 'Husky', '3 years'),
(8, 'image8.jfif', 'Savvanah', '2 years'),
(9, 'image9.jfif', 'Golden Retriever', '5 months');

-- --------------------------------------------------------

--
-- Table structure for table `petsitters`
--

CREATE TABLE `petsitters` (
  `petsitters_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `experience` text NOT NULL,
  `availability` text NOT NULL,
  `phone_number` int(11) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petsitters`
--

INSERT INTO `petsitters` (`petsitters_id`, `name`, `age`, `experience`, `availability`, `phone_number`, `image`) VALUES
(1, 'Nahla Baalbaki', 21, 'Hello there pet lovers!\r\nI ve been working with Purr-fect Pets for 2 years now. I am very well used to working with pets. I enjoy spending time with pets. I am looking forward to meeting yours! <3', '10:00-2:00', 76071587, 'nahla.png'),
(2, 'Reina Bitar', 20, 'Hello!!\r\nI own two lovely cats which clearly shows I have a favorite pet. However, it does not mean I am not a HUGE lover!\r\nCan\'t wait to meet those fluffy creatures!!!', '2:00-5:00', 70712994, 'reina.png'),
(3, 'Jad Hammoud', 23, 'Hey!\r\nBiggest Dog Lover\r\nI am excited to meet your pets!\r\nI can assure you they will be loved and taken care of.', '10:00-3:00', 74859654, 'jad.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adoption`
--
ALTER TABLE `adoption`
  ADD PRIMARY KEY (`adoption_id`),
  ADD KEY `owner_id4` (`owner_id4`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appointment_id`),
  ADD KEY `owner_id3` (`owner_id3`);

--
-- Indexes for table `boarding`
--
ALTER TABLE `boarding`
  ADD PRIMARY KEY (`boarding_id`),
  ADD KEY `owner_id2` (`owner_id2`);

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
-- Indexes for table `petimages`
--
ALTER TABLE `petimages`
  ADD PRIMARY KEY (`image_id`);

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
  MODIFY `adoption_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=192;

--
-- AUTO_INCREMENT for table `boarding`
--
ALTER TABLE `boarding`
  MODIFY `boarding_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `owners`
--
ALTER TABLE `owners`
  MODIFY `owner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `petimages`
--
ALTER TABLE `petimages`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `petsitters`
--
ALTER TABLE `petsitters`
  MODIFY `petsitters_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `boarding`
--
ALTER TABLE `boarding`
  ADD CONSTRAINT `owner_id2` FOREIGN KEY (`owner_id2`) REFERENCES `owners` (`owner_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
