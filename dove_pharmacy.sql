-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2021 at 10:14 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dove_pharmacy`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(200) COLLATE utf8_bin NOT NULL,
  `email` varchar(200) COLLATE utf8_bin NOT NULL,
  `password` varchar(200) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `fullname`, `email`, `password`) VALUES
(2, 'owoeye precious', 'owoeye36@gmail.com', 'b03bc22d676985d310582cd138add5bdba0d4a26'),
(3, 'seun', 'seun22@gmail.com', 'Young22@'),
(4, 'owoeye seun', 'samzysamzy1010@gmail.com', 'b03bc22d676985d310582cd138add5bdba0d4a26'),
(5, 'joseph', 'info@parallelbox.ng', '1804bcd188fe05752992bb074423416bd930e03a');

-- --------------------------------------------------------

--
-- Table structure for table `appoinment_request`
--

CREATE TABLE `appoinment_request` (
  `id` int(11) NOT NULL,
  `Date` varchar(100) COLLATE utf8_bin NOT NULL,
  `Time` varchar(100) COLLATE utf8_bin NOT NULL,
  `Name` varchar(150) COLLATE utf8_bin NOT NULL,
  `Prefix` int(11) NOT NULL,
  `Phone` varchar(60) COLLATE utf8_bin NOT NULL,
  `Email` varchar(200) COLLATE utf8_bin NOT NULL,
  `Gender` varchar(100) COLLATE utf8_bin NOT NULL,
  `Age_range` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `appoinment_request`
--

INSERT INTO `appoinment_request` (`id`, `Date`, `Time`, `Name`, `Prefix`, `Phone`, `Email`, `Gender`, `Age_range`) VALUES
(1, '06/08/2021', '10:51', 'ali precious', 234, '0703888409', 'owoeue@gmail.com', 'Male', '12-25'),
(2, '06/07/2021', '11:53', 'ali precious', 234, '0703888409', 'africanonigeria@gmail.com', 'Female', '12-25'),
(3, '06/23/2021', '21:57', 'ali precious', 234, '0703888409', 'alovicma@gmail.com', 'Female', '12-25'),
(4, '06/19/2021', '10:00', 'ali precious', 234, '0703888409', 'africanonigeria@gmail.com', 'Male', '12-25'),
(5, '06/07/2021', '21:01', 'ali precious', 234, '09034293422', 'alovicma@gmail.com', 'Male', '12-25'),
(6, '06/07/2021', '12:01', 'ali precious', 234, '09034293422', 'alovicma@gmail.com', 'Male', 'Female'),
(7, '06/07/2021', '22:03', 'hello', 234, '0703888409', 'africanonigeria@gmail.com', 'Male', '12-25'),
(8, '06/24/2021', '11:26', 'Nifemi Owoeye', 234, '08035213980', 'parallelboxng@gmail.com', 'Male', '12-25'),
(9, '06/03/2021', '02:27', 'Nifemi Owoeye', 234, '08035213980', 'parallelboxng@gmail.com', 'Male', '12-25');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(200) COLLATE utf8_bin NOT NULL,
  `product_image` varchar(200) COLLATE utf8_bin NOT NULL,
  `product_description` text COLLATE utf8_bin NOT NULL,
  `product_short_desc` varchar(200) COLLATE utf8_bin NOT NULL,
  `old_price` decimal(10,0) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `slug` varchar(200) COLLATE utf8_bin NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_image`, `product_description`, `product_short_desc`, `old_price`, `price`, `slug`, `date_added`) VALUES
(1, 'Hand Gloves', 'Hand_Gloves.jpg', 'Lorem Ipsum Dolor Sit Amin PiggyVest helps you achieve financial freedom by enabling you save responsibly and invest on the go.', 'Lorem Ipsum Dolor Sit Amin PiggyVest ', '100000', '9000', 'Hand-Gloves', '2021-06-25 02:43:31'),
(3, 'digital pressure machine', 'digital_pressure_machine.png', 'digital_pressure_machine', 'digital_pressure_machine', '30000', '400', 'digital-pressure-machine', '2021-06-28 05:53:45');

-- --------------------------------------------------------

--
-- Table structure for table `product_image`
--

CREATE TABLE `product_image` (
  `id` int(11) NOT NULL,
  `images` varchar(200) COLLATE utf8_bin NOT NULL,
  `pid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `website_visitors_page`
--

CREATE TABLE `website_visitors_page` (
  `id` int(11) NOT NULL,
  `total_views` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appoinment_request`
--
ALTER TABLE `appoinment_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_image`
--
ALTER TABLE `product_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `website_visitors_page`
--
ALTER TABLE `website_visitors_page`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `appoinment_request`
--
ALTER TABLE `appoinment_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product_image`
--
ALTER TABLE `product_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `website_visitors_page`
--
ALTER TABLE `website_visitors_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
