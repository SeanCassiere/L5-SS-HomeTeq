-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2020 at 07:19 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2016074`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `prodId` int(4) NOT NULL,
  `prodName` varchar(30) NOT NULL,
  `prodPicNameSmall` varchar(100) NOT NULL,
  `prodPicNameLarge` varchar(100) NOT NULL,
  `prodDescripShort` varchar(1000) DEFAULT NULL,
  `prodDescripLong` varchar(3000) DEFAULT NULL,
  `prodPrice` decimal(6,2) NOT NULL,
  `prodQuantity` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`prodId`, `prodName`, `prodPicNameSmall`, `prodPicNameLarge`, `prodDescripShort`, `prodDescripLong`, `prodPrice`, `prodQuantity`) VALUES
(1, 'Google Pixelbook Go', 'pixelBookGo_Small.webp', 'pixelBookGo_Large.jpg', 'Google Pixelbook Go GA00526-UK Laptop, Intel Core M3 Processor, 8GB RAM, 64GB, 13.3\'\' Full HD, Just Black', 'The portable Google Pixelbook Go laptop has been created with a battery that will last up to 12 hours, an Intel Core M3 processor, a 13.3” Full HD touch display, a 2MP web cam, along with microphones that offer improved noise cancellation and dual front-firing speakers for immersive sound. This device uses Google’s Chrome OS (Operating System), which means access to your favourite Android apps via the Google Play Store.', '629.00', 20),
(2, 'Apple Watch Series 5', 'appleWatch_Small.webp', 'appleWatch_Large.webp', 'Apple Watch Series 5 GPS, 40mm Gold Aluminium Case with Pink Sand Sport Band', 'Apple Watch Series 5 brings some new innovations to ensure it\'s always ready to use when you need it. The retina display is now always-on, so you don\'t need a flick of the wrist to activate the screen and see your notifications. Even with the always-on screen, Apple have cleverly kept the battery life at up to 18 hours, enough to safely see you through the day. It also now sports a built-in compass, perfect for runners, hikers and walkers.', '399.00', 15),
(3, 'Apple iPad 10.2', 'appleIPad_Small.webp', 'appleIPad_Large.webp', '2019 Apple iPad 10.2\", A10, iPadOS, Wi-Fi, 128GB, Gold', 'Apple\'s new iPad is more versatile than ever. The 10.2\" Retina screen gives you more room to work and play, and as well as supporting the Apple Pencil it now also supports the full-size Smart Keyboard (available separately).\r\n\r\nPowered by an A10 Fusion chip, multitasking, playing games or watching high-resolution videos won’t be an issue, while the fingerprint sensor ensures your privacy.', '429.00', 9),
(4, 'Samsung UE43RU7100 (2019)', 'samsungTV_Small.jpg', 'samsungTV_Large.webp', 'Samsung UE43RU7100 (2019) HDR 4K Ultra HD Smart TV, 43\" with TVPlus & Apple TV App, Charcoal Black.', 'Samsung’s RU7100 TV lets you discover the latest films and TV with True 4K colour and clarity. Spend less time searching and more time watching with tailored recommendations for what to watch next. Control all compatible devices with One Remote Control, and access a world of online entertainment via Samsung\'s Smart Hub.', '319.00', 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`prodId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `prodId` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
