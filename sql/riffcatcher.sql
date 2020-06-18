-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2020 at 04:28 AM
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
(43, 182, 'Empty Method', 'Working on a project for the future', '2020-06-18 02:07:46', 2),
(44, 183, 'Cooper\'s Alice', 'The greatest Alice cooper tribute band eva!', '2020-06-18 02:11:25', 6),
(45, 183, 'CD/CA', 'AC/DC Tribute band', '2020-06-18 02:15:44', 2),
(46, 184, 'Loot', 'Tool tribute band featuring me', '2020-06-18 02:18:50', 2);

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
(82, 182, 43),
(84, 182, 44),
(83, 183, 44),
(85, 183, 45),
(87, 183, 46),
(86, 184, 46);

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
  `riff_name` varchar(50) NOT NULL,
  `riff_loc` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `riff`
--

INSERT INTO `riff` (`riff_id`, `user_id`, `riff_name`, `riff_loc`, `date`) VALUES
(430, 182, '5-17-2020-19-4-27-138.wav', 'garth/upload/5-17-2020-19-4-27-138.wav', '2020-06-18 02:04:29'),
(431, 182, '5-17-2020-19-6-1-695.wav', 'garth/upload/5-17-2020-19-6-1-695.wav', '2020-06-18 02:06:03'),
(432, 183, '5-17-2020-19-13-20-356.wav', 'brucie/upload/5-17-2020-19-13-20-356.wav', '2020-06-18 02:13:22'),
(433, 183, '5-17-2020-19-14-21-81.wav', 'brucie/upload/5-17-2020-19-14-21-81.wav', '2020-06-18 02:14:23'),
(434, 184, '5-17-2020-19-17-52-476.wav', 'rockstar/upload/5-17-2020-19-17-52-476.wav', '2020-06-18 02:17:53'),
(435, 184, '5-17-2020-19-18-20-141.wav', 'rockstar/upload/5-17-2020-19-18-20-141.wav', '2020-06-18 02:18:22');

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
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `firstname`, `lastname`, `email`, `password`, `address`, `city`, `state`, `zip`, `phone`, `profile_image`, `date`) VALUES
(182, 'garth', 'Garth', 'Leedle', 'garth@email.com', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2', '12345 E 34th st.', 'Vancouver', 'Washington', '98661', '360-555-5555', 'garth/img/20200519_163452.jpg', '2020-06-18 02:03:21'),
(183, 'brucie', 'Bruce', 'Elgort', 'belgort@clark.edu', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2', '', '', '', '', '', 'brucie/img/OIP.jpg', '2020-06-18 02:15:13'),
(184, 'rockstar', 'Tom', 'Merello', 'tmerello@rage.com', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2', '', '', '', '', '', 'rockstar/img/levi-ventura--sdXl1eqW7E-unsplash.jpg', '2020-06-18 02:19:34');

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
  MODIFY `band_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `band_member`
--
ALTER TABLE `band_member`
  MODIFY `grouping_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `genre_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `riff`
--
ALTER TABLE `riff`
  MODIFY `riff_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=436;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=185;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
