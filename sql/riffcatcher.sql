-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2020 at 02:14 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `riffcatcher`
--

-- --------------------------------------------------------

--
-- Table structure for table `band`
--

CREATE TABLE `band` (
  `band_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `groupname` varchar(30) NOT NULL,
  `groupdesc` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `genre_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `band_member`
--

CREATE TABLE `band_member` (
  `grouping_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `band_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `genre_id` int(11) NOT NULL,
  `genre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`genre_id`, `genre`) VALUES
(2, 'Rock'),
(3, 'Pop'),
(5, 'Rap'),
(6, 'Heavy Metal'),
(7, 'R&B/Hip-Hop'),
(8, 'Punk'),
(9, 'Electronic'),
(10, 'Jazz'),
(11, 'Country'),
(12, 'Reggae'),
(13, 'Alternative'),
(14, 'Dub-Step'),
(15, 'Rap'),
(16, 'Heavy Metal'),
(17, 'R&B/Hip-Hop'),
(18, 'Punk'),
(19, 'Electronic'),
(20, 'Jazz'),
(21, 'Country'),
(22, 'Reggae'),
(23, 'Alternative'),
(24, 'Dub-Step');

-- --------------------------------------------------------

--
-- Table structure for table `riff`
--

CREATE TABLE `riff` (
  `riff_id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `group_id` int(20) DEFAULT NULL,
  `riff_name` varchar(50) NOT NULL,
  `riff_desc` varchar(500) NOT NULL,
  `riff_loc` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `genre_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `riff`
--

INSERT INTO `riff` (`riff_id`, `user_id`, `group_id`, `riff_name`, `riff_desc`, `riff_loc`, `date`, `genre_id`) VALUES
(107, 154, NULL, '2 - Hard Enough.mp3', '', 'usr/e/upload/2 - Hard Enough.mp3', '2020-06-01 01:14:14', NULL),
(108, 154, NULL, '3 - Eat the Sun.mp3', '', 'usr/e/upload/3 - Eat the Sun.mp3', '2020-06-01 01:14:50', NULL),
(109, 154, NULL, '1 - Light of Time.mp3', '', 'usr/e/upload/1 - Light of Time.mp3', '2020-06-01 01:32:36', NULL),
(110, 154, NULL, '2 - Hard Enough.mp3', '', 'usr/e/upload/2 - Hard Enough.mp3', '2020-06-01 01:37:12', NULL),
(111, 154, NULL, '3 - Eat the Sun.mp3', '', 'usr/e/upload/3 - Eat the Sun.mp3', '2020-06-01 01:37:49', NULL),
(112, 154, NULL, '8 - Driving Blind.mp3', '', 'usr/e/upload/8 - Driving Blind.mp3', '2020-06-01 01:42:00', NULL),
(114, 154, NULL, 'Solo.wav', '', 'usr/e/upload/Solo.wav', '2020-06-01 01:44:44', NULL),
(115, 154, NULL, 'Guitar Rythm.wav', '', 'usr/e/upload/Guitar Rythm.wav', '2020-06-01 01:45:11', NULL),
(116, 154, NULL, 'Track 1.wav', '', 'usr/e/upload/Track 1.wav', '2020-06-01 01:45:35', NULL),
(117, 154, NULL, 'Track 2.1.wav', '', 'usr/e/upload/Track 2.1.wav', '2020-06-01 01:45:58', NULL),
(118, 154, NULL, 'Track 2.wav', '', 'usr/e/upload/Track 2.wav', '2020-06-01 01:46:08', NULL),
(119, 154, NULL, '1 - The Begining of the End.mp3', '', 'usr/e/upload/1 - The Begining of the End.mp3', '2020-06-01 01:48:08', NULL),
(120, 154, NULL, '2 - Haunted Voices.mp3', '', 'usr/e/upload/2 - Haunted Voices.mp3', '2020-06-01 01:48:16', NULL),
(121, 154, NULL, '3 - Soldiers Fight.mp3', '', 'usr/e/upload/3 - Soldiers Fight.mp3', '2020-06-01 01:48:21', NULL),
(122, 154, NULL, '4 - Skyhold.mp3', '', 'usr/e/upload/4 - Skyhold.mp3', '2020-06-01 01:48:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(128) NOT NULL,
  `address` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `zip` int(20) NOT NULL,
  `phone` int(20) NOT NULL,
  `image` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `firstname`, `lastname`, `email`, `password`, `address`, `city`, `state`, `zip`, `phone`, `image`, `description`, `date`) VALUES
(151, 'dh', 'Dark', 'Horse', 'darkhorse@dh.com', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2', '', '', '', 0, 0, '', '', '2020-05-31 02:04:16'),
(152, 'aaa', 'Aaron', 'Walley', 'awal@e.com', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2', '', '', '', 0, 0, '', '', '2020-05-31 02:54:21'),
(154, 'e', 'Eeee', 'Rrrrr', 'erere@e.com', '4dff4ea340f0a823f15d3f4f01ab62eae0e5da579ccb851f8db9dfe84c58b2b37b89903a740e1ee172da793a6e79d560e5f7f9bd058a12a280433ed6fa46510a', '', '', '', 0, 0, '', '', '2020-05-31 03:12:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `band`
--
ALTER TABLE `band`
  ADD PRIMARY KEY (`band_id`);

--
-- Indexes for table `band_member`
--
ALTER TABLE `band_member`
  ADD PRIMARY KEY (`grouping_id`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`genre_id`);

--
-- Indexes for table `riff`
--
ALTER TABLE `riff`
  ADD PRIMARY KEY (`riff_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`,`email`),
  ADD UNIQUE KEY `username_2` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `band`
--
ALTER TABLE `band`
  MODIFY `band_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `band_member`
--
ALTER TABLE `band_member`
  MODIFY `grouping_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `genre_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `riff`
--
ALTER TABLE `riff`
  MODIFY `riff_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
