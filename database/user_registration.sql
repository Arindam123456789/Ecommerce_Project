-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2019 at 08:23 AM
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
(7, 'Adity', 'adity@gmail.com', '1234567890', '2 No Kapasdanga', '1234567890', '712103', 'MUMBAI', 'female');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_registration`
--
ALTER TABLE `user_registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_registration`
--
ALTER TABLE `user_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
