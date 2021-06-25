-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2021 at 02:45 PM
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
(1, 'aryaa stark', 2017, './image/author23.jpg', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque facilis quis expedita quaerat, ipsam dicta, inventore nobis animi nisi dolorem aspernatur tenetur? Sed quas aspernatur ad. Nesciunt delectus modi distinctio inventore ratione non reprehenderit veniam possimus adipisci enim. Deleniti ra'),
(13, 'ragnar lothbrok', 2020, './image/author24.jpg', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque facilis quis expedita quaerat, ipsam dicta, inventore nobis animi nisi dolorem aspernatur tenetur? Sed quas aspernatur ad. Nesciunt delectus modi distinctio inventore ratione non reprehenderit veniam possimus adipisci enim. Deleniti ratione deserunt atque iure doloribus tenetur, perferendis delectus quaerat! Suscipit dolorem quisquam ipsum quos facere minus. Reiciendis adipisci atque illum, libero vitae amet ipsum, quos earum blanditiis provident nisi omnis error culpa ut dolorum perferendis, accusantium ad aperiam illo. Amet, eligendi? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit iure blanditiis architecto aperiam, officiis natus voluptatibus quidem ullam voluptatum perferendis quibusdam perspiciatis temporibus iusto tempora, officia beatae eveniet laborum dolorem.'),
(19, 'Napoleon Hill', 1991, './Image/napoleon.jpg', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque facilis quis expedita quaerat, ipsam dicta, inventore nobis animi nisi dolorem aspernatur tenetur? Sed quas aspernatur ad. Nesciunt delectus modi distinctio inventore ratione non reprehenderit veniam possimus adipisci enim. Deleniti ratione deserunt atque iure doloribus tenetur, perferendis delectus quaerat! Suscipit dolorem quisquam ipsum quos facere minus. Reiciendis adipisci atque illum, libero vitae amet ipsum, quos earum blanditiis provident nisi omnis error culpa ut dolorum perferendis, accusantium ad aperiam illo. Amet, eligendi? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit iure blanditiis architecto aperiam, officiis natus voluptatibus quidem ullam voluptatum perferendis quibusdam perspiciatis temporibus iusto tempora, officia beatae eveniet laborum dolorem.');

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
