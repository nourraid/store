-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2022 at 04:47 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fashion`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `password`) VALUES
(2, 'nada', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `title`, `image_name`) VALUES
(5, 'MAN', '../images/category/MAN.jpg'),
(6, 'KIDS', '../images/category/Kids.avif'),
(7, 'WOMAN', '../images/category/WOMAN.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `clothes`
--

CREATE TABLE `clothes` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `color` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `featured` varchar(255) NOT NULL,
  `active` varchar(255) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `image_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clothes`
--

INSERT INTO `clothes` (`id`, `title`, `description`, `price`, `color`, `size`, `featured`, `active`, `cat_id`, `image_name`) VALUES
(10, 'LOT Baby Rompers Short Sleeve 100%Cotton', 'Baby Rompers Short Sleeve\r\nAvailable in several colors, comfortable to wear\r\nIt can be worn on many occasions\r\nIt can be ordered now from our store in the right size and color', 15, 'white', 's', 'Yes', 'Yes', 6, '../images/clothes/1.avif'),
(11, 'Long Sleeve Tops Floral Print Pants Headband', 'Long Sleeve Tops Floral Print Pants Headband\r\nAvailable in several colors, comfortable to wear It can be worn on many occasions It can be ordered now from our store in the right size and color	', 150, 'red', 's', 'Yes', 'Yes', 6, '../images/clothes/2.webp'),
(12, ' Socks For Newborns', ' Socks For Newborns\r\nAvailable in several colors, comfortable to wear It can be worn on many occasions It can be ordered now from our store in the right size and color	', 50, 'Pink', 's', 'Yes', 'Yes', 6, '../images/clothes/3.webp'),
(13, 'baby suit girl', 'baby suit girl\r\nAvailable in several colors, comfortable to wear It can be worn on many occasions It can be ordered now from our store in the right size and color	', 120, 'Pink', 's', 'Yes', 'Yes', 6, '../images/clothes/4.avif'),
(14, 'Casual wear for everyday wear', 'Casual wear for everyday wear\r\nAvailable in several colors, comfortable to wear It can be worn on many occasions It can be ordered now from our store in the right size and color	', 350, 'red', 'M', 'Yes', 'Yes', 7, '../images/clothes/Casual wear for everyday wear.jpeg'),
(16, 'Full outfit for winter', 'Full outfit for winter\r\nAvailable in several colors, comfortable to wear It can be worn on many occasions It can be ordered now from our store in the right size and color	', 400, 'gray', 'M', 'Yes', 'Yes', 7, '../images/clothes/7.jpeg'),
(17, 'Full outfit for winter', 'Full outfit for winter Available in several colors, comfortable to wear It can be worn on many occasions It can be ordered now from our store in the right size and color	', 450, 'white', 'M', 'Yes', 'Yes', 7, '../images/clothes/8.jpeg'),
(18, 'Casual wear for everyday wear	', 'Casual wear for everyday wear	 Available in several colors, comfortable to wear It can be worn on many occasions It can be ordered now from our store in the right size and color	', 500, 'Brouwn', 'M', 'Yes', 'Yes', 7, '../images/clothes/9.avif'),
(19, 'Oversize Recycled Cotton Blend Cardigan', 'Oversize Recycled Cotton Blend Cardigan\r\n Available in several colors, comfortable to wear It can be worn on many occasions It can be ordered now from our store in the right size and color	', 350, 'gray', 'XL', 'Yes', 'Yes', 5, '../images/clothes/10.avif'),
(20, 'casual suit', 'casual suit\r\nAvailable in several colors, comfortable to wear It can be worn on many occasions It can be ordered now from our store in the right size and color	', 250, 'white & gray', 'L', 'Yes', 'Yes', 5, '../images/clothes/11.jpeg'),
(21, 'casual suit for every day user', 'casual suit\r\nAvailable in several colors, comfortable to wear It can be worn on many occasions It can be ordered now from our store in the right size and color	', 300, 'Brouwn & Red', 'L', 'Yes', 'Yes', 5, '../images/clothes/12.jpeg'),
(22, 'Long Sleeve T-Shirt', 'Long Sleeve T-Shirt\r\nAvailable in several colors, comfortable to wear It can be worn on many occasions It can be ordered now from our store in the right size and color	', 170, 'white', 'XL', 'Yes', 'Yes', 5, '../images/clothes/13.avif'),
(23, 'Jeans with a T-shirt', 'Jeans with a T-shirt\r\n Available in several colors, comfortable to wear It can be worn on many occasions It can be ordered now from our store in the right size and color	', 120, 'black', 's', 'Yes', 'Yes', 6, '../images/clothes/14.avif'),
(24, 'Full outfit for summer', 'Full outfit for summer Available in several colors, comfortable to wear It can be worn on many occasions It can be ordered now from our store in the right size and color	', 300, 'yellow', 'M', 'Yes', 'Yes', 7, '../images/clothes/15.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `address`, `password`, `phone`, `email`) VALUES
(1, 'nada', 'gaza', '202cb962ac59075b964b07152d234b70', 592212481, 'nada@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clothes`
--
ALTER TABLE `clothes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `clothes`
--
ALTER TABLE `clothes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `clothes`
--
ALTER TABLE `clothes`
  ADD CONSTRAINT `clothes_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
