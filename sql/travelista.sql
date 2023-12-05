-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2023 at 01:43 PM
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
  `paymentmethod` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_book`
--

INSERT INTO `customer_book` (`id`, `firstname`, `lastname`, `pax`, `contactnumber`, `dtarrivaldeparture`, `pickupplace`, `pickuptime`, `dropoff`, `paymentmethod`) VALUES
(1, 'Raniella', 'Cuevas', 2, '09568914195', '2023-12-05 20:33:00', 'ff', '20:38:00', 'df', 'option1'),
(2, 'Sofia', 'mae', 5, '09568914195', '2023-12-06 20:35:00', 'adsfadf', '20:39:00', 'dfadsfadf', 'option2'),
(3, 'chubarnes', 'chcuhcu', 7, '09568914195', '2023-12-07 20:36:00', 'adsfadf', '12:36:00', 'dfadsfadf', 'option2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_book`
--
ALTER TABLE `customer_book`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_book`
--
ALTER TABLE `customer_book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
