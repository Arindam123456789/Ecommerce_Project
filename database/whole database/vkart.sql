-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2019 at 09:43 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vkart`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_email` varchar(60) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  `totalprice` bigint(20) NOT NULL DEFAULT '0',
  `orderedquantity` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `checkoutdetails`
--

CREATE TABLE `checkoutdetails` (
  `id` int(11) NOT NULL,
  `email` varchar(200) DEFAULT NULL,
  `title` varchar(20) DEFAULT NULL,
  `first_name` varchar(200) DEFAULT NULL,
  `last_name` varchar(200) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `country` varchar(200) DEFAULT NULL,
  `state` varchar(200) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `contact` bigint(20) DEFAULT NULL,
  `checkouttime` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `checkoutdetails`
--

INSERT INTO `checkoutdetails` (`id`, `email`, `title`, `first_name`, `last_name`, `address`, `country`, `state`, `password`, `contact`, `checkouttime`) VALUES
(3, 'ararindam36@gmail.com', 'Mr.', 'Arindam', 'Roy', '49 Kn road', '742101', 'West Bengal', 'Arindam123#', 7478894095, '2019-12-17 05:35:21pm'),
(4, 'ararindam36@gmail.com', 'Mr.', 'Arindam', 'Roy', '49 Kn road', '742101', 'West Bengal', 'Arindam123#', 7478894095, '2019-12-17 05:40:08pm'),
(5, 'ararindam36@gmail.com', 'Mr.', 'Arindam', 'Roy', '49 Kn road', '742101', 'West Bengal', 'Arindam123#', 7478894095, '2019-12-17 05:47:20pm'),
(6, 'ararindam36@gmail.com', 'Mr.', 'Arindam', 'Roy', '49 Kn road', '742101', 'West Bengal', 'Arindam123#', 7478894095, '2019-12-17 06:27:35pm'),
(7, 'ararindam36@gmail.com', 'Mr.', 'Arindam', 'Roy', '49 Kn road', '742101', 'West Bengal', 'Arindam123#', 7478894095, '2019-12-17 07:28:29pm'),
(8, 'ararindam36@gmail.com', 'Mr.', 'Arindam', 'Roy', '49 Kn road', '742101', 'Odisha', 'Arindam123#', 7478894095, '2019-12-17 07:41:29pm'),
(9, 'ararindam36@gmail.com', 'Mr.', 'Arindam', 'Roy', '49 Kn road', '742101', 'Telangana', 'Arindam123#', 7478894095, '2019-12-17 07:42:53pm'),
(10, 'ararindam36@gmail.com', 'Mr.', 'Arindam', 'Roy', '49 Kn road', '742101', 'Maharastra', 'Arindam123#', 7478894095, '2019-12-17 08:10:47pm'),
(11, 'ararindam36@gmail.com', 'Mr.', 'Arindam', 'Roy', '49 Kn road', '742101', 'Odisha', 'Arindam123#', 7478894095, '2019-12-17 08:13:25pm'),
(12, 'ararindam36@gmail.com', 'Mr.', 'Arindam', 'Roy', '49 Kn road', '742101', 'Odisha', 'Arindam123#', 7478894095, '2019-12-17 09:04:51pm'),
(13, 'ararindam36@gmail.com', 'Mr.', 'Arindam', 'Roy', '49 Kn road', '742101', 'Odisha', 'Arindam123#', 7478894095, '2019-12-18 09:41:38am');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `p_type_id` int(100) NOT NULL,
  `p_brand_id` int(100) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_slug` varchar(255) NOT NULL,
  `p_descrption` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `p_type_id`, `p_brand_id`, `p_name`, `p_slug`, `p_descrption`, `image`, `price`, `created_at`, `updated_at`) VALUES
(8, 3, 7, '6.1 plus', '3_7_15000', 'sd 636 processor, 64/4 gb ram', 'download_(12)1.jpg', 15000, '2019-12-09 04:41:37', '2019-12-09 09:11:37'),
(9, 1, 9, 'Inspiron 15', '1_9_39000', 'Dell Inspiron 5370 Intel Core i5 8th Gen 13.3-inch FHD Thin and Light Laptop (8GB/256GB SSD/Windows 10 Home/MS Office/Silver/1.50kg)', 'images_(4).jpg', 39000, '2019-12-09 05:44:37', '2019-12-09 10:14:37'),
(10, 1, 1, 'Ideapad 330s', '1_1_55000', 'Lenovo Ideapad 330s Intel Core i3 8th Gen 14-inch Full HD Thin & Light Laptop (4GB RAM/1TB HDD/Windows 10 Home / Platinum Grey /1.6kg), 81F40196IN', 'images_(3).jpg', 55000, '2019-12-09 05:48:33', '2019-12-09 10:18:33'),
(11, 3, 3, 'S10E', '3_3_47,999', 'Samsung Galaxy S10e is powered by a 1.9GHz octa-core Samsung Exynos 9820 processor. It comes with 6GB of RAM.The Samsung Galaxy S10e runs Android 9.0 and is powered by a 3100mAh non-removable battery. The Samsung Galaxy S10e supports wireless charging, as', 'Samsung-Galaxy-S10e-Duos-128GB-Prism-Black-8801643546533-01032019-01-p1.jpg', 47000, '2019-12-09 05:50:14', '2019-12-09 10:52:11'),
(13, 2, 9, 'XPS 24', '2_9_55000', 'DELL XPS 7590 15.6-inch Laptop (9th Gen Core i7-9750H/16GB/512GB SSD/Windows 10 Home/4GB Nvidia Graphics), Abyss Grey', 'xps3.jpg', 45000, '2019-12-09 05:55:34', '2019-12-18 14:09:08'),
(14, 3, 7, 'Nokia 7.1', '3_7_18000', 'Nokia 7.2 The phone comes with a 6.30-inch touchscreen display with a resolution of 1080x2340 pixels. Nokia 7.2 is powered by an octa-core Qualcomm Snapdragon 660 processor.', 'images_(13).jpg', 18000, '2019-12-09 06:01:17', '2019-12-09 10:51:11'),
(17, 1, 10, 'MacBook 14\'\'', '1_10_55000', 'Ninth-generation 8-core Intel Core i9 processor\r\nStunning 16-inch Retina display with True Tone technology\r\nTouch Bar and Touch ID\r\nAMD Radeon Pro 5500M graphics with GDDR6 memory\r\nUltrafast SSD\r\nIntel UHD Graphics 630\r\nSix-speaker system with force-cance', 'download_(3).jpg', 55000, '2019-12-09 06:19:20', '2019-12-09 10:49:20'),
(19, 2, 9, 'Inspiron 3480', '2_9_42990', 'Intel Core i5-8265U 8th Gen processor (1.6 to 3.9 Ghz Speed)\r\n8GB DDR4 RAM\r\n1TB 5400rpm hard drive\r\n14-inch HD screen, Intel UHD Graphics\r\nNo Optical Drive\r\nUpto 16GB RAM Upgrade\r\nNo SSD Slot', 'dell-inspiron.jpg', 42990, '2019-12-16 06:56:38', '2019-12-16 11:26:38'),
(20, 3, 7, 'Nokia 7.1_BL', '3_7_11719', '12MP+5MP Dual Pixel MP primary camera and 8MP front facing camera\r\n14.83 centimeters (5.84-inch) with 1080 x 2280 pixels resolution\r\nMemory, Storage and SIM: 4GB | 64GB internal memory expandable up to 64GB | Dual SIM dual-standby (4G+4G)\r\nAndroid v9 Pie ', '61cWoqY8uwL__AC_SL1137_.jpg', 11719, '2019-12-18 07:02:04', '2019-12-18 11:32:04'),
(21, 3, 7, 'Nokia 7.2', '3_7_17633', '6 GB RAM | 64 GB ROM | Expandable Upto 512 GB\r\n16.0 cm (6.3 inch) FHD+ Display\r\n48MP + 5MP + 8MP | 20MP Front Camera Product Attributes Bullet Points\r\n3500 mAh Battery\r\nQualcomm Snapdragon 660 Processor', '41iIqowymjL__AC_.jpg', 17633, '2019-12-18 07:04:22', '2019-12-18 11:34:22');

-- --------------------------------------------------------

--
-- Table structure for table `product_brand`
--

CREATE TABLE `product_brand` (
  `id` int(10) NOT NULL,
  `p_type_id` int(100) NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `quantity` int(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_brand`
--

INSERT INTO `product_brand` (`id`, `p_type_id`, `brand_name`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 1, 'Lenovo', 10, '2019-12-15 14:19:22', '2019-12-15 14:19:22'),
(3, 3, 'Samsung', 15, '2019-12-01 13:49:53', '2019-12-01 18:19:53'),
(5, 2, 'Hp', 10, '2019-12-02 02:10:36', '2019-12-02 06:40:36'),
(7, 3, 'Nokia', 15, '2019-12-07 12:03:45', '2019-12-07 16:33:45'),
(9, 1, 'Dell', 78, '2019-12-07 12:11:32', '2019-12-07 16:41:32'),
(10, 3, 'Apple', 78, '2019-12-09 00:34:15', '2019-12-09 05:04:15'),
(11, 3, 'Redmi', 10, '2019-12-09 00:34:42', '2019-12-09 05:04:42'),
(12, 3, 'Apple', 67, '2019-12-15 06:33:17', '2019-12-15 06:33:17'),
(13, 1, 'Lg', 87, '2019-12-09 22:14:46', '2019-12-10 02:44:46'),
(14, 3, 'Redmi', 100, '2019-12-13 06:01:30', '2019-12-13 10:31:30'),
(15, 3, 'Samsung Galaxy M30s', 40, '2019-12-16 01:46:18', '2019-12-16 06:16:18');

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

CREATE TABLE `product_type` (
  `id` int(10) NOT NULL,
  `type_name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_type`
--

INSERT INTO `product_type` (`id`, `type_name`, `created_at`, `updated_at`) VALUES
(1, 'Laptop', '2019-12-01 18:15:40', '2019-12-15 18:33:48'),
(2, 'Desktop', '2019-12-01 18:16:17', '2019-12-01 22:46:17'),
(3, 'Mobile', '2019-12-01 18:36:40', '2019-12-16 14:02:07');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_items`
--

CREATE TABLE `tbl_items` (
  `itemId` int(11) NOT NULL,
  `itemHeader` varchar(512) NOT NULL COMMENT 'Heading',
  `itemSub` varchar(1021) NOT NULL COMMENT 'sub heading',
  `itemDesc` text COMMENT 'content or description',
  `itemImage` varchar(80) DEFAULT NULL,
  `isDeleted` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDtm` datetime NOT NULL,
  `updatedDtm` datetime DEFAULT NULL,
  `updatedBy` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_items`
--

INSERT INTO `tbl_items` (`itemId`, `itemHeader`, `itemSub`, `itemDesc`, `itemImage`, `isDeleted`, `createdBy`, `createdDtm`, `updatedDtm`, `updatedBy`) VALUES
(1, 'jquery.validation.js', 'Contribution towards jquery.validation.js', 'jquery.validation.js is the client side javascript validation library authored by Jörn Zaefferer hosted on github for us and we are trying to contribute to it. Working on localization now', 'validation.png', 0, 1, '2015-09-02 00:00:00', NULL, NULL),
(2, 'CodeIgniter User Management', 'Demo for user management system', 'This the demo of User Management System (Admin Panel) using CodeIgniter PHP MVC Framework and AdminLTE bootstrap theme. You can download the code from the repository or forked it to contribute. Usage and installation instructions are provided in ReadMe.MD', 'cias.png', 0, 1, '2015-09-02 00:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reset_password`
--

CREATE TABLE `tbl_reset_password` (
  `id` bigint(20) NOT NULL,
  `email` varchar(128) NOT NULL,
  `activation_id` varchar(32) NOT NULL,
  `agent` varchar(512) NOT NULL,
  `client_ip` varchar(32) NOT NULL,
  `isDeleted` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` bigint(20) NOT NULL DEFAULT '1',
  `createdDtm` datetime NOT NULL,
  `updatedBy` bigint(20) DEFAULT NULL,
  `updatedDtm` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_reset_password`
--

INSERT INTO `tbl_reset_password` (`id`, `email`, `activation_id`, `agent`, `client_ip`, `isDeleted`, `createdBy`, `createdDtm`, `updatedBy`, `updatedDtm`) VALUES
(22, 'admin@gmail.com', 'dL2TUE3wOAFxnml', 'Chrome 79.0.3945.79', '::1', 0, 1, '2019-12-15 07:48:01', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_roles`
--

CREATE TABLE `tbl_roles` (
  `roleId` tinyint(4) NOT NULL COMMENT 'role id',
  `role` varchar(50) NOT NULL COMMENT 'role text'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_roles`
--

INSERT INTO `tbl_roles` (`roleId`, `role`) VALUES
(1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `userId` int(11) NOT NULL,
  `email` varchar(128) NOT NULL COMMENT 'login email',
  `password` varchar(128) NOT NULL COMMENT 'hashed login password',
  `name` varchar(128) DEFAULT NULL COMMENT 'full name of user',
  `mobile` varchar(20) DEFAULT NULL,
  `roleId` tinyint(4) NOT NULL,
  `isDeleted` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDtm` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDtm` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`userId`, `email`, `password`, `name`, `mobile`, `roleId`, `isDeleted`, `createdBy`, `createdDtm`, `updatedBy`, `updatedDtm`) VALUES
(1, 'admin@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'System Administrator', '9890098900', 1, 0, 0, '2015-07-01 18:56:49', 1, '2019-12-15 07:40:33');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `id` int(11) NOT NULL,
  `email` varchar(40) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_registration`
--

CREATE TABLE `user_registration` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`id`, `name`, `email`, `password`, `address`, `mobile`, `pincode`, `location`, `gender`) VALUES
(1, 'bapon', 'abc@GMAIL.COM', '1234567890', '2 No Kapasdanga', '0987654321', '712103', 'BANGALORE', 'female'),
(2, 'bobbie', 'jayanta@gmail.com', '0987654321', '2 No Kapasdanga', '9090909090', '712103', 'BANGALORE', 'female'),
(3, 'Puja', 'puja@gmail.com', '0909090909', '2 No Kapasdanga', '1234567809', '712103', 'DELHI', 'female'),
(4, 'vicky', 'vivekmallick09@gmail.com', '1151115111', '2 No Kapasdanga', '8282872007', '712103', 'MUMBAI', 'male'),
(5, 'Jayanta', 'jayanta@gmail.com', 'jayanta123', '2 No Kapasdanga', '0987654321', '712103', 'DELHI', 'male'),
(6, 'vivek mallick', 'vivekmallick09@gmail.com', '1234554321', '2 No Kapasdanga', '0987609876', '712103', 'KOLKATA', 'male'),
(7, 'Adity', 'adity@gmail.com', '1234567890', '2 No Kapasdanga', '1234567890', '712103', 'MUMBAI', 'female'),
(8, 'Arindam Roy', 'ararindam36@gmail.com', 'Arindam123#', '49 K.N Road Berhampore', '7478894095', '742101', 'KOLKATA', 'male'),
(9, 'bobbie', 'abc@GMAIL.COM', '9898989890', '2 No Kapasdanga', '8989898767', '712103', 'DELHI', 'male'),
(10, 'vicky', 'vickymark82@gmail.com', '8282828282', '2 No Kapasdanga', '9674107617', '712100', 'MUMBAI', 'male'),
(11, 'Arindam Roy', 'ararindam36@gmail.com', 'Arindam123#', '49 krishnath road, Berhampore, MSD..', '7478894095', '742101', 'KOLKATA', 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkoutdetails`
--
ALTER TABLE `checkoutdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_brand`
--
ALTER TABLE `product_brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_type`
--
ALTER TABLE `product_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_items`
--
ALTER TABLE `tbl_items`
  ADD PRIMARY KEY (`itemId`);

--
-- Indexes for table `tbl_reset_password`
--
ALTER TABLE `tbl_reset_password`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  ADD PRIMARY KEY (`roleId`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_registration`
--
ALTER TABLE `user_registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;
--
-- AUTO_INCREMENT for table `checkoutdetails`
--
ALTER TABLE `checkoutdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `product_brand`
--
ALTER TABLE `product_brand`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `product_type`
--
ALTER TABLE `product_type`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_items`
--
ALTER TABLE `tbl_items`
  MODIFY `itemId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_reset_password`
--
ALTER TABLE `tbl_reset_password`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  MODIFY `roleId` tinyint(4) NOT NULL AUTO_INCREMENT COMMENT 'role id', AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_registration`
--
ALTER TABLE `user_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
