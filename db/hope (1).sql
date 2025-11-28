-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Nov 28, 2025 at 01:05 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hope`
--

-- --------------------------------------------------------

--
-- Table structure for table `ashram`
--

CREATE TABLE `ashram` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `pincode` bigint(6) NOT NULL,
  `image` varchar(255) NOT NULL,
  `Message` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ashram`
--

INSERT INTO `ashram` (`id`, `name`, `location`, `pincode`, `image`, `Message`, `email`) VALUES
(0, 'Brudhashram', 'Bhubaneswar', 759014, 'ashram.webp', 'This is situated at Near Patia', 'sambit@gmail.com'),
(0, 'New Ashram', 'Bhubaneswar', 786754, 'ashram.webp', 'You are doing well', 'sudhkar@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `cpassword` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `cpassword`, `type`) VALUES
(1, 'sambit', 'sambit@gmail.com', '123', '123', 'ashram'),
(2, 'Yash', 'yash@gmail.com', '123', '123', 'volunteer'),
(3, 'manish', 'manish@gmail.com', '123', '123', 'ashram'),
(4, 'sudhakar', 'sudhkar@gmail.com', '123', '123', 'ashram');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ashram`
--
ALTER TABLE `ashram`
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
