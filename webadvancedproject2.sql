-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2025 at 10:27 PM
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
-- Database: `webadvancedproject2`
--

-- --------------------------------------------------------

--
-- Table structure for table `advisor`
--

CREATE TABLE `advisor` (
  `db_id` int(11) NOT NULL,
  `db_email` varchar(30) NOT NULL,
  `db_password` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `advisor`
--

INSERT INTO `advisor` (`db_id`, `db_email`, `db_password`) VALUES
(1, 'mostafa@gmail.com', 12345678),
(2, 'misto@gmail.com', 12345678),
(3, 'bassel@gmail.com', 12345678);

-- --------------------------------------------------------

--
-- Table structure for table `burger`
--

CREATE TABLE `burger` (
  `img_id` int(11) NOT NULL,
  `img` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `burger`
--

INSERT INTO `burger` (`img_id`, `img`) VALUES
(11, 'burger4.jpg'),
(12, 'burger1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `burger_info`
--

CREATE TABLE `burger_info` (
  `db_id` int(11) NOT NULL,
  `db_burger_name` varchar(60) NOT NULL,
  `db_burger_price` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `burger_info`
--

INSERT INTO `burger_info` (`db_id`, `db_burger_name`, `db_burger_price`) VALUES
(11, 'Cheese burger', '12'),
(12, 'Classic Burger', '5.00');

-- --------------------------------------------------------

--
-- Table structure for table `dessert`
--

CREATE TABLE `dessert` (
  `img_id` int(11) NOT NULL,
  `img` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dessert`
--

INSERT INTO `dessert` (`img_id`, `img`) VALUES
(1, 'dessert1.jpg'),
(2, 'dessert3.jpg'),
(3, 'dessert4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `dessert_info`
--

CREATE TABLE `dessert_info` (
  `db_id` int(11) NOT NULL,
  `db_dessert_name` varchar(20) NOT NULL,
  `db_dessert_price` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dessert_info`
--

INSERT INTO `dessert_info` (`db_id`, `db_dessert_name`, `db_dessert_price`) VALUES
(1, 'Chocolate Cake', '5'),
(2, 'Lotus Cake ', '6'),
(3, 'Kinder Cake', '6.00');

-- --------------------------------------------------------

--
-- Table structure for table `fries`
--

CREATE TABLE `fries` (
  `img_id` int(11) NOT NULL,
  `img` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fries`
--

INSERT INTO `fries` (`img_id`, `img`) VALUES
(1, 'fries2.jpg'),
(2, 'fries4.avif');

-- --------------------------------------------------------

--
-- Table structure for table `fries_info`
--

CREATE TABLE `fries_info` (
  `id` int(11) NOT NULL,
  `db_fries_name` varchar(20) NOT NULL,
  `db_fries_price` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fries_info`
--

INSERT INTO `fries_info` (`id`, `db_fries_name`, `db_fries_price`) VALUES
(1, 'Cheese Fries', '4'),
(2, 'Mix Cheese Fries', '7');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `db_id` int(11) NOT NULL,
  `db_fullName` varchar(50) NOT NULL,
  `db_email` varchar(30) NOT NULL,
  `db_date` date NOT NULL,
  `db_time` varchar(20) NOT NULL,
  `db_select` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`db_id`, `db_fullName`, `db_email`, `db_date`, `db_time`, `db_select`) VALUES
(3, 'Misto', 'm@gmail.com', '2024-12-26', '07:46', '3'),
(4, 'karim misto', 'kareem@gmail.com', '2024-12-05', '14:22', '1');

-- --------------------------------------------------------

--
-- Table structure for table `pasta`
--

CREATE TABLE `pasta` (
  `img_id` int(11) NOT NULL,
  `img` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pasta`
--

INSERT INTO `pasta` (`img_id`, `img`) VALUES
(1, 'pasta.jpg'),
(2, 'pasta2.jpeg'),
(3, 'pasta4.webp');

-- --------------------------------------------------------

--
-- Table structure for table `pasta_info`
--

CREATE TABLE `pasta_info` (
  `db_id` int(11) NOT NULL,
  `db_pasta_name` varchar(30) NOT NULL,
  `db_pasta_price` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pasta_info`
--

INSERT INTO `pasta_info` (`db_id`, `db_pasta_name`, `db_pasta_price`) VALUES
(1, 'Cheese Pasta', '15'),
(2, 'Mushroom Pasta', '17'),
(3, 'Hair Pasta', '4.00');

-- --------------------------------------------------------

--
-- Table structure for table `soft_drink`
--

CREATE TABLE `soft_drink` (
  `img_id` int(11) NOT NULL,
  `img` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `soft_drink`
--

INSERT INTO `soft_drink` (`img_id`, `img`) VALUES
(1, 'pepsi.jpg'),
(2, 'darkblue.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `soft_drink_info`
--

CREATE TABLE `soft_drink_info` (
  `db_id` int(11) NOT NULL,
  `db_soft_drink_name` varchar(20) NOT NULL,
  `db_soft_drink_price` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `soft_drink_info`
--

INSERT INTO `soft_drink_info` (`db_id`, `db_soft_drink_name`, `db_soft_drink_price`) VALUES
(1, 'Pepsi', '3'),
(2, 'Dark blue', '4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advisor`
--
ALTER TABLE `advisor`
  ADD PRIMARY KEY (`db_id`);

--
-- Indexes for table `burger`
--
ALTER TABLE `burger`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `burger_info`
--
ALTER TABLE `burger_info`
  ADD PRIMARY KEY (`db_id`);

--
-- Indexes for table `dessert`
--
ALTER TABLE `dessert`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `dessert_info`
--
ALTER TABLE `dessert_info`
  ADD PRIMARY KEY (`db_id`);

--
-- Indexes for table `fries`
--
ALTER TABLE `fries`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `fries_info`
--
ALTER TABLE `fries_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`db_id`);

--
-- Indexes for table `pasta`
--
ALTER TABLE `pasta`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `pasta_info`
--
ALTER TABLE `pasta_info`
  ADD PRIMARY KEY (`db_id`);

--
-- Indexes for table `soft_drink`
--
ALTER TABLE `soft_drink`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `soft_drink_info`
--
ALTER TABLE `soft_drink_info`
  ADD PRIMARY KEY (`db_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advisor`
--
ALTER TABLE `advisor`
  MODIFY `db_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `burger`
--
ALTER TABLE `burger`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `burger_info`
--
ALTER TABLE `burger_info`
  MODIFY `db_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `dessert`
--
ALTER TABLE `dessert`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dessert_info`
--
ALTER TABLE `dessert_info`
  MODIFY `db_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fries`
--
ALTER TABLE `fries`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fries_info`
--
ALTER TABLE `fries_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `db_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pasta`
--
ALTER TABLE `pasta`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pasta_info`
--
ALTER TABLE `pasta_info`
  MODIFY `db_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `soft_drink`
--
ALTER TABLE `soft_drink`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `soft_drink_info`
--
ALTER TABLE `soft_drink_info`
  MODIFY `db_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
