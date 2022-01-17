-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2022 at 05:38 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `music`
--

-- --------------------------------------------------------

--
-- Table structure for table `song`
--

CREATE TABLE `song` (
  `song_id` int(11) NOT NULL,
  `song_title` varchar(30) DEFAULT NULL,
  `song_file` varchar(200) DEFAULT NULL,
  `song_thumbnail` varchar(200) DEFAULT NULL,
  `msdir_name` varchar(30) DEFAULT NULL,
  `singer_name` varchar(30) DEFAULT NULL,
  `msdir_id` int(11) DEFAULT NULL,
  `singer_id` int(11) DEFAULT NULL,
  `album_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `song`
--

INSERT INTO `song` (`song_id`, `song_title`, `song_file`, `song_thumbnail`, `msdir_name`, `singer_name`, `msdir_id`, `singer_id`, `album_id`) VALUES
(1, 'Holy', 'bieber.mp3', 'bieber.jpg', 'Justin Bieber', 'Justin Bieber', 1, 2, 2),
(2, 'HEAT WAVES', 'heatwaves.mp3', 'HEAT WAVES.jpg', 'Glass Animals', '', NULL, NULL, NULL),
(3, 'Peaches', 'peaches.mp3', 'peaches.jpg', 'Justin Bieber', 'Justin Bieber', 1, 2, 2),
(4, 'Stay', 'stay.mp3', 'stay.jpg', 'Justin Bieber', 'Justin Bieber', 1, 2, NULL),
(5, 'Sunflower', 'sunflower.mp3', 'sunflower.jpg', 'Post Malone', '', NULL, NULL, NULL),
(6, 'Vaathi Coming', 'vaathi.mp3', 'vaathicoming.jpg', 'Anirudh', '', 2, 1, 1),
(7, 'VIP', 'vip.mp3', 'ragh.jpg', 'Anirudh', 'Anirudh', 2, 1, NULL),
(8, 'Bad Habits', 'badhabits.mp3', 'badhabits.jpg', 'Ed Sheeran', 'Ed Sheeran', 3, 1, NULL),
(9, 'Aaluma Doluma', 'aaluma.mp3', 'aaluma.jpg', 'Anirudh', 'Anirudh', 2, 1, NULL),
(10, 'Master Blaster', 'blaster.mp3', 'masterblaster.jpg', 'Anirudh', 'Anirudh', 2, 1, 1),
(11, 'Luckanna Matte', 'luck.mp3', 'ragh.jpg', 'Anirudh', 'Anirudh', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `song`
--
ALTER TABLE `song`
  ADD PRIMARY KEY (`song_id`),
  ADD KEY `fsds` (`msdir_id`),
  ADD KEY `fsdss` (`singer_id`),
  ADD KEY `albumkey` (`album_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `song`
--
ALTER TABLE `song`
  MODIFY `song_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `song`
--
ALTER TABLE `song`
  ADD CONSTRAINT `albumkey` FOREIGN KEY (`album_id`) REFERENCES `album` (`album_id`),
  ADD CONSTRAINT `fsds` FOREIGN KEY (`msdir_id`) REFERENCES `msdir` (`msdir_id`),
  ADD CONSTRAINT `fsdss` FOREIGN KEY (`singer_id`) REFERENCES `singer` (`singer_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
