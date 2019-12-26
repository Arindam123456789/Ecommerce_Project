-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2019 at 08:21 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cias`
--

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
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `p_type_id`, `p_brand_id`, `p_name`, `p_slug`, `p_descrption`, `image`, `price`, `created_at`, `updated_at`) VALUES
(7, 3, 1, 'Lenovo K8-Plus', '3_1_8800', 'This is very good', 'images_(8).jpg', 8800, '2019-12-08 21:20:43', '2019-12-09 01:50:43'),
(8, 3, 7, '6.1 plus', '3_7_15000', 'sd 636 processor, 64/4 gb ram', 'download_(12)1.jpg', 15000, '2019-12-09 04:41:37', '2019-12-09 09:11:37'),
(9, 1, 9, 'Inspiron 15', '1_9_39000', 'Dell Inspiron 5370 Intel Core i5 8th Gen 13.3-inch FHD Thin and Light Laptop (8GB/256GB SSD/Windows 10 Home/MS Office/Silver/1.50kg)', 'images_(4).jpg', 39000, '2019-12-09 05:44:37', '2019-12-09 10:14:37'),
(10, 1, 1, 'Ideapad 330s', '1_1_55000', 'Lenovo Ideapad 330s Intel Core i3 8th Gen 14-inch Full HD Thin & Light Laptop (4GB RAM/1TB HDD/Windows 10 Home / Platinum Grey /1.6kg), 81F40196IN', 'images_(3).jpg', 55000, '2019-12-09 05:48:33', '2019-12-09 10:18:33'),
(11, 3, 3, 'S10E', '3_3_47,999', 'Samsung Galaxy S10e is powered by a 1.9GHz octa-core Samsung Exynos 9820 processor. It comes with 6GB of RAM.The Samsung Galaxy S10e runs Android 9.0 and is powered by a 3100mAh non-removable battery. The Samsung Galaxy S10e supports wireless charging, as', 'Samsung-Galaxy-S10e-Duos-128GB-Prism-Black-8801643546533-01032019-01-p1.jpg', 47000, '2019-12-09 05:50:14', '2019-12-09 10:52:11'),
(12, 2, 5, 'Pavllion 32', '2_5_79,999', 'HP Pavilion x360 desktop (4GB/256GB SSD/Windows 10/MS Office/Inking Pen/Natural Silver/1.59 kg), 14-dh0107TU', 'images_(12).jpg', 79, '2019-12-09 05:53:12', '2019-12-09 10:23:12'),
(13, 2, 9, 'XPS 24', '2_9_55000', 'DELL XPS 7590 15.6-inch Laptop (9th Gen Core i7-9750H/16GB/512GB SSD/Windows 10 Home/4GB Nvidia Graphics), Abyss Grey', 'download_(10)1.jpg', 55000, '2019-12-09 05:55:34', '2019-12-09 10:25:34'),
(14, 3, 7, 'Nokia 7.1', '3_7_18000', 'Nokia 7.2 The phone comes with a 6.30-inch touchscreen display with a resolution of 1080x2340 pixels. Nokia 7.2 is powered by an octa-core Qualcomm Snapdragon 660 processor.', 'images_(13).jpg', 18000, '2019-12-09 06:01:17', '2019-12-09 10:51:11'),
(15, 3, 10, 'iphone X', '3_10_89,000', '5.8-inch Super Retina XDR OLED display\r\nWater and dust resistant (4 meters for up to 30 minutes, IP68)\r\nTriple-camera system with 12MP Ultra Wide, Wide, and Telephoto cameras; Night mode, Portrait mode, and 4K video up to 60fps\r\n12MP TrueDepth front camer', 'images_(7).jpg', 89, '2019-12-09 06:12:07', '2019-12-09 10:42:07'),
(16, 3, 11, 'K20', '3_11_22,000', '48+13+8MP triple rear camera with IMX586,1/2.0 inch, 1.6 micrometer, 6P, f1.75, FOV79, AF, OL, 13MP (S5K3L6 1/3 inch, 1.12 micrometer, 5P, f2.4, FOV124.8, FF), 8MP (OV8856 1/4 inch, 1.12 micrometer, 5P, f2.4, FOV44.5, AF, OL, laser focus + PDAF), slow mot', 'download_(13).jpg', 22, '2019-12-09 06:15:39', '2019-12-09 10:45:39'),
(17, 1, 10, 'MacBook 14\'\'', '1_10_55000', 'Ninth-generation 8-core Intel Core i9 processor\r\nStunning 16-inch Retina display with True Tone technology\r\nTouch Bar and Touch ID\r\nAMD Radeon Pro 5500M graphics with GDDR6 memory\r\nUltrafast SSD\r\nIntel UHD Graphics 630\r\nSix-speaker system with force-cance', 'download_(3).jpg', 55000, '2019-12-09 06:19:20', '2019-12-09 10:49:20'),
(18, 2, 5, 'pavllion x360', '2_5_76,000', 'Processor: 8th Gen Intel Core i3-8145U processor, 2.1GHz base processor speed, 2 cores, 4MB cache\r\nOperating System: Pre-loaded Windows 10 Home with lifetime validity\r\nDisplay: 14-inch HD (1366 x 768) SVA Anti-Glare Micro-Edge Touchscreen display | WLED d', 'download_(9)1.jpg', 76, '2019-12-09 06:20:27', '2019-12-09 10:50:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
