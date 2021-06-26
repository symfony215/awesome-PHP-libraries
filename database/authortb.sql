-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2021 at 07:17 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `productdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `authortb`
--

CREATE TABLE `authortb` (
  `id` int(11) NOT NULL,
  `author_name` varchar(25) NOT NULL,
  `author_since` float DEFAULT NULL,
  `author_image` varchar(100) DEFAULT NULL,
  `author_description` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `authortb`
--

INSERT INTO `authortb` (`id`, `author_name`, `author_since`, `author_image`, `author_description`) VALUES
(1, 'Becky Albertalli', 2017, './image/author_BA.jpg', 'Becky Albertalli is the author of the acclaimed novels Simon vs. the Homo Sapiens Agenda (film: Love, Simon), The Upside of Unrequited, and Leah on the Offbeat. She is also the co-author of What If It\'s Us with Adam Silvera. A former clinical psychologist who specialized in working with children and teens, Becky lives with her family in Atlanta. You can visit her online at www.beckyalbertalli.com.'),
(2, 'Maureen Johnson', 2020, './image/author_MJ.jpg', 'Becky Albertalli is the author of the acclaimed novels Simon vs. the Homo Sapiens Agenda (film: Love, Simon), The Upside of Unrequited, and Leah on the Offbeat. She is also the co-author of What If It\'s Us with '),
(3, 'William W. Johnstone', 1991, './Image/author_WJ.jpg', 'Blood, Guts, and Glory: Smoke Jensen: American Legend (Mountain Man)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authortb`
--
ALTER TABLE `authortb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authortb`
--
ALTER TABLE `authortb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
