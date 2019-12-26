-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2019 at 08:22 AM
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
-- Table structure for table `product_brand`
--

CREATE TABLE `product_brand` (
  `id` int(10) NOT NULL,
  `p_type_id` int(100) NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `quantity` int(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_brand`
--

INSERT INTO `product_brand` (`id`, `p_type_id`, `brand_name`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 1, 'Lenovo', 10, '2019-12-01 17:01:22', '2019-12-01 17:01:22'),
(3, 3, 'Samsung', 15, '2019-12-01 13:49:53', '2019-12-01 18:19:53'),
(5, 2, 'Hp', 10, '2019-12-02 02:10:36', '2019-12-02 06:40:36'),
(7, 3, 'Nokia', 15, '2019-12-07 12:03:45', '2019-12-07 16:33:45'),
(9, 1, 'Dell', 78, '2019-12-07 12:11:32', '2019-12-07 16:41:32'),
(10, 3, 'Apple', 78, '2019-12-09 00:34:15', '2019-12-09 05:04:15'),
(11, 3, 'Redmi', 10, '2019-12-09 00:34:42', '2019-12-09 05:04:42'),
(12, 4, 'Apple', 67, '2019-12-09 22:14:34', '2019-12-10 02:44:34'),
(13, 1, 'Lg', 87, '2019-12-09 22:14:46', '2019-12-10 02:44:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product_brand`
--
ALTER TABLE `product_brand`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product_brand`
--
ALTER TABLE `product_brand`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
