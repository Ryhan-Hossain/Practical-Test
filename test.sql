-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2019 at 07:56 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(20) NOT NULL,
  `product_name` varchar(120) NOT NULL,
  `product_type` varchar(20) NOT NULL,
  `product_brand` varchar(100) NOT NULL,
  `product_price` decimal(8,2) NOT NULL,
  `product_ram` char(5) NOT NULL,
  `product_storage` varchar(50) NOT NULL,
  `product_camera` varchar(20) NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `product_quantity` mediumint(5) NOT NULL,
  `product_status` enum('0','1') NOT NULL COMMENT '0-inactive,1-active'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_type`, `product_brand`, `product_price`, `product_ram`, `product_storage`, `product_camera`, `product_image`, `product_quantity`, `product_status`) VALUES
(1, 'Honor 9 Lite (Sapphire Blue, 64 GB)  (4 GB RAM)', 'Android', 'Honor', '14499.00', '4', '64', '13', 'image-1.jpeg', 10, '0'),
(2, '\r\nInfinix Hot S3 (Sandstone Black, 32 GB)  (3 GB RAM)', 'Android', 'Infinix', '8999.00', '3', '32', '13', 'image-2.jpeg', 10, '1'),
(3, 'VIVO V9 Youth (Gold, 32 GB)  (4 GB RAM)', 'Android', 'VIVO', '16990.00', '4', '32', '16', 'image-3.jpeg', 10, '1'),
(4, 'Moto E4 Plus (Fine Gold, 32 GB)  (3 GB RAM)', 'Android', 'Moto', '11499.00', '3', '32', '8', 'image-4.jpeg', 10, '0'),
(5, 'Lenovo K8 Plus (Venom Black, 32 GB)  (3 GB RAM)', 'Android', 'Lenevo', '9999.00', '3', '32', '13', 'image-5.jpg', 10, '1'),
(6, 'Samsung Galaxy On Nxt (Gold, 16 GB)  (3 GB RAM)', 'Android', 'Samsung', '10990.00', '3', '16', '13', 'image-6.jpeg', 10, '1'),
(7, 'Moto C Plus (Pearl White, 16 GB)  (2 GB RAM)', 'Android', 'Moto', '7799.00', '2', '16', '8', 'image-7.jpeg', 10, '1'),
(8, 'Panasonic P77 (White, 16 GB)  (1 GB RAM)', 'Android', 'Panasonic', '5999.00', '1', '16', '8', 'image-8.jpeg', 10, '1'),
(9, 'OPPO F5 (Black, 64 GB)  (6 GB RAM)', 'Android', 'OPPO', '19990.00', '6', '64', '16', 'image-9.jpeg', 10, '1'),
(10, 'Honor 7A (Gold, 32 GB)  (3 GB RAM)', 'Android', 'Honor', '8999.00', '3', '32', '13', 'image-10.jpeg', 10, '1'),
(11, 'Asus ZenFone 5Z (Midnight Blue, 64 GB)  (6 GB RAM)', 'Android', 'Asus', '29999.00', '6', '128', '12', 'image-12.jpeg', 10, '0'),
(12, 'Redmi 5A (Gold, 32 GB)  (3 GB RAM)', 'Android', 'MI', '5999.00', '3', '32', '13', 'image-12.jpeg', 10, '1'),
(13, 'Intex Indie 5 (Black, 16 GB)  (2 GB RAM)', 'Android', 'Intex', '4999.00', '2', '16', '8', 'image-13.jpeg', 10, '0'),
(14, 'Google Pixel 2 XL (18:9 Display, 64 GB) White', 'Android', 'Google', '61990.00', '4', '64', '12', 'image-14.jpeg', 10, '1'),
(15, 'Apple iPhone XR', 'IOS', 'iPhone', '50000.00', '3', '128', '7', 'image-15.jpg', 6, '1'),
(16, 'Apple iPhone X', 'IOS', 'iPhone', '48000.00', '3', '256', '12', 'image-16.jpg', 10, '1'),
(17, 'Apple iPhone 7 Plus', 'IOS', 'iPhone', '45000.00', '3', '128', '12', 'image-17.jpg', 6, '0'),
(18, 'Apple iPhone 7', 'IOS', 'iPhone', '40000.00', '2', '256', '12', 'image-18.jpg', 10, '1'),
(19, 'Nokia N95', 'Symbian', 'Nokia', '20000.00', '0.064', '0.16', '5', 'image-19.jpg', 10, '1'),
(20, 'Nokia E17', 'Symbian', 'Nokia', '22500.00', '0.128', '0.11', '3.15', 'image-20.jpg', 10, '1'),
(21, 'Nokia E7', 'Symbian', 'Nokia', '28000.00', '0.256', '1', '8', 'image-21.jpg', 10, '1'),
(22, 'SAMSUNG ROGUE SCH-U960', 'Java', 'Samsung', '25000.00', '0.256', '0.768', '3', 'image-22.jpeg', 10, '1'),
(23, 'LG LOTUS ELITE LX610', 'Java', 'LG', '15000.00', '0', '0.052', '2', 'image-23.jpg', 10, '0'),
(24, 'Nokia Asha 200', 'Java', 'Nokia', '10000.00', '0.032', '0.064', '2', 'image-24.jpg', 10, '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
