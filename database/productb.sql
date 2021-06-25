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
-- Table structure for table `productb`
--

CREATE TABLE `productb` (
  `id` int(11) NOT NULL,
  `product_name` varchar(25) NOT NULL,
  `product_price` float DEFAULT NULL,
  `second_price` float DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL,
  `product_description` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productb`
--

INSERT INTO `productb` (`id`, `product_name`, `product_price`, `second_price`, `product_image`, `product_description`) VALUES
(1, 'Book1', 35, 40, './Image/book1.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit corporis corrupti libero aliquid voluptatem delectus cumque at perferendis excepturi veritatis. Facilis, veniam doloribus? Sapiente facere atque fugit ea dicta tenetur. lore'),
(2, 'Book2', 54, 60, './Image/book1.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit corporis corrupti libero aliquid voluptatem delectus cumque at perferendis excepturi veritatis. Facilis, veniam doloribus? Sapiente facere atque fugit ea dicta tenetur. lore'),
(3, 'Book3', 34, 44, './Image/book1.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit corporis corrupti libero aliquid voluptatem delectus cumque at perferendis excepturi veritatis. Facilis, veniam doloribus? Sapiente facere atque fugit ea dicta tenetur. lore'),
(4, 'Book4', 45, 50, './Image/book1.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit corporis corrupti libero aliquid voluptatem delectus cumque at perferendis excepturi veritatis. Facilis, veniam doloribus? Sapiente facere atque fugit ea dicta tenetur. lore');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `productb`
--
ALTER TABLE `productb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `productb`
--
ALTER TABLE `productb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
