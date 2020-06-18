-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2020 at 01:59 AM
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
  `bandname` varchar(30) NOT NULL,
  `banddesc` varchar(500) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `genre_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `band`
--

INSERT INTO `band` (`band_id`, `user_id`, `bandname`, `banddesc`, `date`, `genre_id`) VALUES
(24, 160, 'Python Prose', 'Python FTW', '2020-06-15 06:21:16', 2),
(25, 160, '4th Band', 'May the 4th be with you', '2020-06-17 01:24:41', 5),
(26, 154, 'Striker', 'We strike we walk and we talk', '2020-06-15 06:26:01', 6),
(27, 154, 'Tremetol Psychosis', 'Crazy as crazy can be', '2020-06-17 02:31:59', 14);

-- --------------------------------------------------------

--
-- Table structure for table `band_member`
--

CREATE TABLE `band_member` (
  `grouping_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `band_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `band_member`
--

INSERT INTO `band_member` (`grouping_id`, `user_id`, `band_id`) VALUES
(42, 151, 24),
(50, 151, 25),
(44, 151, 26),
(62, 151, 28),
(33, 154, 24),
(37, 154, 25),
(43, 154, 26),
(53, 154, 27),
(61, 154, 28),
(77, 154, 40),
(32, 160, 24),
(35, 160, 25),
(59, 167, 24),
(55, 167, 25),
(56, 168, 25),
(57, 169, 25);

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
(14, 'Dub-Step');

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
(333, 159, NULL, '5-10-2020-12-26-50-528.wav', '', 'pheo/upload/5-10-2020-12-26-50-528.wav', '2020-06-10 19:26:52', NULL),
(336, 160, NULL, '5-10-2020-20-43-5-232.wav', '', 'pheo/upload/5-10-2020-20-43-5-232.wav', '2020-06-11 03:43:08', NULL),
(337, 166, NULL, '5-11-2020-10-49-50-800.wav', '', 'malls/upload/5-11-2020-10-49-50-800.wav', '2020-06-11 17:50:03', NULL),
(353, 151, NULL, '5-11-2020-18-40-40-230.wav', '', 'dh/upload/5-11-2020-18-40-40-230.wav', '2020-06-12 01:40:41', NULL),
(354, 151, NULL, '5-11-2020-18-40-58-103.wav', '', 'dh/upload/5-11-2020-18-40-58-103.wav', '2020-06-12 01:40:59', NULL),
(371, 151, NULL, '5-13-2020-22-15-39-90.wav', '', 'dh/upload/5-13-2020-22-15-39-90.wav', '2020-06-14 05:15:41', NULL),
(372, 151, NULL, '5-13-2020-22-17-9-973.wav', '', 'dh/upload/5-13-2020-22-17-9-973.wav', '2020-06-14 05:17:15', NULL),
(373, 151, NULL, '5-13-2020-22-18-15-816.wav', '', 'dh/upload/5-13-2020-22-18-15-816.wav', '2020-06-14 05:18:17', NULL),
(374, 151, NULL, '5-13-2020-22-20-26-750.wav', '', 'dh/upload/5-13-2020-22-20-26-750.wav', '2020-06-14 05:20:29', NULL),
(375, 151, NULL, '5-13-2020-22-21-44-644.wav', '', 'dh/upload/5-13-2020-22-21-44-644.wav', '2020-06-14 05:21:46', NULL),
(376, 151, NULL, '5-13-2020-22-26-45-105.wav', '', 'dh/upload/5-13-2020-22-26-45-105.wav', '2020-06-14 05:26:46', NULL),
(377, 151, NULL, '5-13-2020-22-28-38-232.wav', '', 'dh/upload/5-13-2020-22-28-38-232.wav', '2020-06-14 05:28:40', NULL),
(378, 154, NULL, '5-13-2020-23-50-55-314.wav', '', 'e/upload/5-13-2020-23-50-55-314.wav', '2020-06-14 06:50:56', NULL),
(379, 154, NULL, '5-14-2020-23-38-26-478.wav', '', 'e/upload/5-14-2020-23-38-26-478.wav', '2020-06-15 06:38:28', NULL),
(387, 151, NULL, '2020-06-07T18_1718.183Z.wav', '', 'dh/upload/2020-06-07T18_1718.183Z.wav', '2020-06-16 06:54:51', NULL),
(389, 154, NULL, '2020-06-07T18_1718.183Z.wav', '', 'e/upload/2020-06-07T18_1718.183Z.wav', '2020-06-16 18:09:19', NULL),
(390, 166, NULL, '5-16-2020-13-4-50-697.wav', '', 'molls/upload/5-16-2020-13-4-50-697.wav', '2020-06-16 20:04:51', NULL),
(392, 160, NULL, '5-16-2020-22-13-46-353.wav', '', 'pheo/upload/5-16-2020-22-13-46-353.wav', '2020-06-17 05:13:48', NULL),
(393, 160, NULL, '2020-06-07T18_1718.183Z.wav', '', 'pheo/upload/2020-06-07T18_1718.183Z.wav', '2020-06-17 05:14:03', NULL);

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
  `zip` varchar(15) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `profile_image` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `firstname`, `lastname`, `email`, `password`, `address`, `city`, `state`, `zip`, `phone`, `profile_image`, `description`, `date`) VALUES
(151, 'dh', 'Dark', 'Horse', 'darkhorse@dh.com', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2', '', '', '', '98662', '211 211 2112', 'dh/img/photo-1519326773765-3ae3b02c44cc.jpg', '', '2020-06-11 17:46:05'),
(154, 'e', 'Eddie', 'Maiden', 'edddiemadien@e.com', '4dff4ea340f0a823f15d3f4f01ab62eae0e5da579ccb851f8db9dfe84c58b2b37b89903a740e1ee172da793a6e79d560e5f7f9bd058a12a280433ed6fa46510a', '222 se 1st', 'Portland', 'Oregon', '78551', '555-111-2222', 'e/img/marc-olivier-paquin-2_RQhbu0ZDQ-unsplash.jpg', '', '2020-06-16 20:29:54'),
(160, 'pheo', 'Brenda', 'Leedle', 'bree@bree.com', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2', '555 SE 555th Ave', 'Vancouver', 'Washington', '55555', '555-555-5555', 'pheo/img/fractal-2040325_1920.jpg', '', '2020-06-11 17:47:09'),
(167, 'test', 'Test', 'Account', 'ta@g.com', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2', '', '', '', '', '', 'test/img/missing-profile-photo.png', '', '2020-06-12 02:34:06'),
(168, 'darkhorse', 'Garth', 'Leedle', 'g.leedle@students.clark.edu', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2', '9301 NE 82nd Ct', 'Vancouver', 'Washington', '98662', '3609441253', 'darkhorse/img/missing-profile-photo.png', '', '2020-06-17 04:23:02'),
(169, 'theosus', 'Theo', 'Sus', 'theo@sus.com', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2', '', '', '', '', '', 'theosus/img/missing-profile-photo.png', '', '2020-06-17 04:23:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `band`
--
ALTER TABLE `band`
  ADD PRIMARY KEY (`band_id`),
  ADD UNIQUE KEY `bandname` (`bandname`);

--
-- Indexes for table `band_member`
--
ALTER TABLE `band_member`
  ADD PRIMARY KEY (`grouping_id`),
  ADD UNIQUE KEY `user_id` (`user_id`,`band_id`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`genre_id`);

--
-- Indexes for table `riff`
--
ALTER TABLE `riff`
  ADD PRIMARY KEY (`riff_id`),
  ADD UNIQUE KEY `user_id` (`user_id`,`riff_name`);

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
  MODIFY `band_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `band_member`
--
ALTER TABLE `band_member`
  MODIFY `grouping_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `genre_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `riff`
--
ALTER TABLE `riff`
  MODIFY `riff_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=430;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=182;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
