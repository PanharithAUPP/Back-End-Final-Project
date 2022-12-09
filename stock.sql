-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2022 at 04:34 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stockdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `id` int(11) NOT NULL,
  `product_name` varchar(25) NOT NULL,
  `product_price` float DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`id`, `product_name`, `product_price`, `product_image`) VALUES
(1, 'Apple iPhone 13 Pro', 999, './images/iphone13pro6.1.png'),
(2, 'Apple iPhone 13 Pro Max', 1099, './images/iphone13pro.png'),
(3, 'Apple iPhone 13 mini', 699, './images/iphone13mini.png'),
(4, 'Apple iPhone 13', 799, './images/iphone13.png'),
(5, 'Apple iPad Pro 11\"', 799, './images/ipadpro11new.jpeg'),
(6, 'Apple iPad Pro 12.9\"', 1099, './images/ipadpro12.9new.jpeg'),
(7, 'Apple iPad mini\"', 499, './images/ipadmini.png'),
(8, 'Apple iPad Air', 599, './images/ipadair.png'),
(9, 'Apple iPad', 329, './images/ipad.png'),
(10, 'Apple Watch Series 7', 799, './images/series7.jpeg'),
(11, 'Apple Watch SE', 799, './images/watchse.jpeg'),
(12, 'Google Pixel 6', 599, './images/pixel6.jpeg'),
(14, 'Galaxy S22', 799, './images/s22small.jpeg'),
(15, 'Galaxy S22 Ultra', 1199, './images/s22ultranew.jpeg'),
(16, 'Galaxy Z Flip 3', 999, './images/zflip3.jpeg'),
(17, 'Galaxy Z Fold 3', 1699, './images/zfold3.jpeg'),
(18, 'OPPO Find X5 Pro', 1199, './images/oppofindx5.jpeg'),
(19, 'Sony Xperia 1 iii', 1199, './images/sonyxperia1.webp'),
(20, 'OPPO A93', 249, './images/oppoa93.png'),
(21, 'OPPO Reno 7 Pro', 399, './images/reno7pro.webp'),
(22, 'Xiaomi 11 Ultra', 1099, './images/xiaomi11ultra.jpeg'),
(23, 'Xiaomi 12', 799, './images/xiaomi12.png'),
(24, 'OnePlus 10 Pro', 999, './images/oneplus10pro.jpeg'),
(29, 'OnePlus Nord CE 2', 399, './images/nordce.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
