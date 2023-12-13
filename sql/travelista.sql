-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2023 at 03:28 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travelista`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`) VALUES
(2, 'sofia', '$2y$10$ciduudfG3Nkl9QpkGbQkH.ItqcSD13TBAxn4RQ3saqa7yU4gwGAbu');

-- --------------------------------------------------------

--
-- Table structure for table `customer_book`
--

CREATE TABLE `customer_book` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `pax` int(255) NOT NULL,
  `contactnumber` varchar(255) NOT NULL,
  `dtarrivaldeparture` datetime NOT NULL,
  `pickupplace` varchar(255) NOT NULL,
  `pickuptime` time NOT NULL,
  `dropoff` varchar(255) NOT NULL,
  `paymentmethod` varchar(255) NOT NULL,
  `paymentstatus` varchar(255) NOT NULL DEFAULT 'Unpaid'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_book`
--

INSERT INTO `customer_book` (`id`, `firstname`, `lastname`, `pax`, `contactnumber`, `dtarrivaldeparture`, `pickupplace`, `pickuptime`, `dropoff`, `paymentmethod`, `paymentstatus`) VALUES
(17, 'breadiella', 'Cuevas', 4, '09568914195', '2023-12-13 20:46:00', 'ffad', '20:50:00', 'dfadsfadf', 'Collect', 'Unpaid'),
(18, 'Fetched first name', 'Fetched last name', 0, 'Fetched contact number', '0000-00-00 00:00:00', 'Fetched pick-up place', '00:00:00', 'Fetched dropoff', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_book`
--
ALTER TABLE `customer_book`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer_book`
--
ALTER TABLE `customer_book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
