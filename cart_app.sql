-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 09, 2022 at 11:45 PM
-- Server version: 8.0.31-0ubuntu0.20.04.1
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cart_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `meals`
--

CREATE TABLE `meals` (
  `id` int NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `calories` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `fat` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `protein` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `category` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `netcarbs` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `meals`
--

INSERT INTO `meals` (`id`, `name`, `calories`, `fat`, `protein`, `category`, `netcarbs`, `image`, `time`) VALUES
(1, 'Charred Veggie and Fried Goat Cheese Salad', '260', '26.0g', '14.0g', 'BREAKFAST', '1.0g', 'src/image/breakfast.jpg', '25 Min Total'),
(2, 'Low Carb Spicy Baked Eggs with Cheesy Hash', '260', '26.0g', '14.0g', 'LUNCH', '1.0g', 'src/image/lunch.jpg', '120 Min Total'),
(3, 'Keto Chorizo Shakshuka', '260', '26.0g', '14.0g', 'DINNER', '1.0g', 'src/image/dinner.jpg ', '45 Min Total ');

-- --------------------------------------------------------

--
-- Table structure for table `week_slot`
--

CREATE TABLE `week_slot` (
  `id` int NOT NULL,
  `week` varchar(100) NOT NULL,
  `days` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `items` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `week_slot`
--

INSERT INTO `week_slot` (`id`, `week`, `days`, `date`, `items`) VALUES
(1, 'week2', '12', '2022-12-09', 'breakfast,lunch,dinner'),
(2, 'week3', '12,20', '2022-12-09', 'breakfast,lunch,dinner'),
(3, 'week3', '12,18,20', '2022-12-09', 'breakfast,lunch,dinner');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `meals`
--
ALTER TABLE `meals`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `week_slot`
--
ALTER TABLE `week_slot`
  ADD PRIMARY KEY (`id`),
  ADD KEY `date` (`date`),
  ADD KEY `week` (`week`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `meals`
--
ALTER TABLE `meals`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `week_slot`
--
ALTER TABLE `week_slot`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
