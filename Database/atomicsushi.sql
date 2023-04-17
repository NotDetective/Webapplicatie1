-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 12, 2023 at 10:08 AM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atomicsushi`
--

-- --------------------------------------------------------

--
-- Table structure for table `sushi`
--

CREATE TABLE `sushi` (
  `id` int(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT '/#',
  `category` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sushi`
--

INSERT INTO `sushi` (`id`, `name`, `description`, `price`, `image`, `category`) VALUES
(11, 'normal', 'WITH ZA VISH My freidn', 2.99, '', 1),
(12, 'notnormal', 'not with za vish', 6, '/#', 2),
(13, 'extra normal', 'za sushi with za extra luxe vish', 200, '/#', 3),
(19, 'exta box', 'a box with extra box(no sushi)', 25, '/#', 1),
(20, 'the wout', 'a susy sushi, wiht eh imposter fish and o dip saus', 29, '/#', 3),
(22, 'work PLS', 'theone that work or i am gone trow my laptop out of the window', 1.3, 'japanse-otoro-sushi-roze-vette-tonijn-of-maguro_jpg.png', 2),
(24, 'jober', 'the tall en not so hot sushi', 4.99, '/#', 2),
(25, 'tester', 'sussy suhi SUCKS', 20, '/#', 2),
(26, 'maiker', 'the box for you and you 20 other famalies :)', 999.99, '/#', 1),
(27, 'sushi sushi', 'sushi wiht sushi in it ', 29.99, '/#', 3),
(28, 'sushi sushi sushi sushi sushi sushi ', 'euuhhh this may break the universum', 19.99, '/#', 3),
(29, 'no sushi', 'vegan, vegetarian, lactoce free, sushi free, air free, bacon free, human, oopiefree.', 5.98, '/#', 3),
(30, 'sus', 'sus', 22, '', 3),
(31, 'bart', 'new', 2.99, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `roll` int(255) NOT NULL DEFAULT '10'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `roll`) VALUES
(1, 'sussy', 'bakka', 7),
(2, 'fred', 'ex', 1),
(3, 'sintayu', 'nigger', 10),
(4, 'Malik', 'boobs', 10),
(5, 'berardt', 'berard', 4),
(6, 'test2', '1', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sushi`
--
ALTER TABLE `sushi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sushi`
--
ALTER TABLE `sushi`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
