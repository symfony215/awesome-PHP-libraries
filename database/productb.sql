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
-- Table structure for table `productb`
--

CREATE TABLE `productb` (
  `id` int(11) NOT NULL,
  `product_name` varchar(25) NOT NULL,
  `product_price` float DEFAULT NULL,
  `second_price` float DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL,
  `product_description` varchar(1000) DEFAULT NULL,
  `product_author` varchar(100) DEFAULT NULL,
  `product_category` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productb`
--

INSERT INTO `productb` (`id`, `product_name`, `product_price`, `second_price`, `product_image`, `product_description`, `product_author`, `product_category`) VALUES
(1, 'Kate in Waiting', 15.19, 20, './Image/Kate in Waiting.jpg', 'From #1 New York Times bestselling author and rom-com queen Becky Albertalli comes a buoyant new novel about daring to step out of the shadows and into the spotlight in love, life, and, yes, theater.', 'Becky Albertalli', 'Best Children’s Books of 2021 So Far'),
(2, 'Simon vs the homo', 7.12, 10, './Image/Simon vs. the Homo Sapiens Agenda.jpg', ' Langford! This edition includes new Simon and Blue emails, a behind-the-scenes scrapbook from the Love, Simon movie set, and Becky Albertalli in conversation with fellow authors Adam Silvera and Angie Thomas.', 'Becky Albertalli', 'Best Children’s Books of 2021 So Far'),
(3, 'Leah on the Offbeat', 8.87, 12, './Image/Leah on the Offbeat.jpg', 'In this sequel to the acclaimed Simon vs. the Homo Sapiens Agenda—now a major ', 'Becky Albertalli', 'Best Young Adult'),
(4, 'Love, Creekwood', 7.99, 9, './Image/Love, Creekwood,.jpg', 'bestselling Simonverse novels in this highly anticipated epilogue novella. Perfect for fans of Becky Albertalli, the movie Love, Simon, and the new Hulu series spin-off, Love, Victor!', 'Becky Albertalli', 'Becky Albertalli'),
(5, 'Upside of Unrequited', 9.01, 10, 'Image/The Upside of Unrequited.jpg', 'From the award-winning author of Simon vs. the Homo Sapiens Agenda comes a ', 'Becky Albertalli', 'in Teen & Young Adult US 20th Century Historical Fiction eBooks'),
(6, 'What If It s Us', 43.33, 45, 'Image/What If It\'s Us.jpg', 'combine their talents in this smart, funny, heartfelt collaboration about two very ', 'Becky Albertalli', 'in Teen & Young Adult US 20th Century Historical Fiction eBooks'),
(7, 'Heres to Us', 23.77, 25, 'Image/Here\'s to Us.jpg', 'Becky Albertalli and Adam Silvera reunite to continue the story of Arthur and Ben, ', 'Becky Albertalli', 'in Teen & Young Adult US 20th Century Historical Fiction eBooks'),
(8, 'Yes No Maybe So', 17.88, 20, 'Image/Yes No Maybe So.jpg', 'A book about the power of love and resistance from New York Times bestselling ', 'Becky Albertalli', 'in Teen & Young Adult US 20th Century Historical Fiction eBooks'),
(9, 'The Box in the Woods', 15.18, 17, 'Image/The Box in the Woods.jpg', 'After solving the case of Truly Devious, Stevie Bell investigates her first mystery ', 'Maureen Johnson', 'in Teen & Young Adult US 20th Century Historical Fiction eBooks'),
(10, 'Truly Devious', 14.69, 16.5, 'Image/book1.jpg', 'New York Times bestselling author Maureen Johnson weaves a delicate tale of ', 'Maureen Johnson', 'in Teen & Young Adult US 20th Century Historical Fiction eBooks'),
(11, 'The Vanishing Stair ', 12.76, 15, 'Image/The Vanishing Stair.jpg', 'In New York Times bestselling author Maureen Johnson’s second novel in the Truly ', 'Maureen Johnson', 'in Teen & Young Adult US 20th Century Historical Fiction eBooks'),
(12, 'Hand on the Wall', 10.03, 12, 'Image/The hand on the wall.jpg', 'in Teen & Young Adult US 20th Century Historical Fiction eBooks', 'Maureen Johnson', 'that has haunted Ellingham Academy for over 75 years.'),
(13, 'Hello, Cruel Heart', 10.99, 12, 'Image/Hello, Cruel Heart.jpg', 'An electric new story of teenage Cruella de Vil in an original novel inspired by the ', 'Maureen Johnson', 'romance, heartbreaking'),
(14, 'The Shadow Cabinet', 11.23, 14, 'Image/The Shadow Cabinet.jpg', 'Time is running out as Rory fights to find her friends and the ghost squad struggles ', 'Maureen Johnson', 'thrilling'),
(15, '13 Little Blue Envelopes', 12.99, 15, 'Image/13 Little Blue Envelopes.jpg', 'Ginny Blackstone never thought she’d spend her summer vacation backpacking ', 'Maureen Johnson', 'romance, heartbreaking'),
(16, 'The Madness Underneath', 20, 22, 'Image/The madness underneath.jpg', 'There’s a creepy new terror haunting modern-day London. Fresh from defeating a ', 'Maureen Johnson', 'thrilling, mystery'),
(17, 'Blood Guts and Glory', 13.44, 15, 'Image/Blood, Guts, and Glory,.jpg', 'One of the greatest characters in Western fiction.', 'William W. Johnstone', 'fiction'),
(18, 'Red River Vengeance', 22.78, 25, 'Image/Red River Vengeance.jpg', 'better cross the finish line first—or you won’t finish at all . . .', 'William W. Johnstone', 'fiction, mystery'),
(19, 'North of Laramie', 21.45, 23, 'Image/North of Laramie.jpg', 'The bestselling Johnstones kick off their blazing new western series with a real ', 'William W. Johnstone', 'fiction, mystery'),
(20, 'The Kerrigans', 10.87, 13, 'Image/The Kerrigans.jpg', 'A compelling saga of a family\'s struggle to build an empire on the frontier, from ', 'William W. Johnstone', 'fiction, mystery'),
(21, 'Trail of the Mountain Man', 16.77, 18, 'Image/Trail of the Mountain Man.jpg', 'Criminals draw the wrath of a retired gunfighter after shooting his wife in this western by a USA Today–bestselling author of War of the Mountain Man.Criminals draw the wrath of a retired gunfighter after shooting his wife in this western by a USA Today–bestselling author of War of the Mountain Man.', 'William W. Johnstone', 'fiction, mystery'),
(22, 'Out of the Ashes', 40.8, 42, 'Image/Out of the Ashes.jpg', 'In this western by the USA Today–bestselling author of Trail of the Mountain Man, ', 'William W. Johnstone', 'fiction, mystery'),
(23, 'Code of the Mountain Man', 35.2, 37, 'Image/Code of the Mountain Man.jpg', 'Criminals draw the wrath of a retired gunfighter after shooting his wife ', 'William W. Johnstone', 'fiction, mystery'),
(24, 'Revenge of  Mountain Man', 32.6, 34, 'Image/Revenge of the Mountain Man.jpg', 'In this western by the USA Today–bestselling author of Trail of the Mountain Man, ', 'William W. Johnstone', 'fiction, mystery');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
