-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2025 at 05:35 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `product`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `stock` int(11) NOT NULL,
  `is_sell` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `stock`, `is_sell`, `created_at`, `updated_at`) VALUES
(92, 'Dalton Boone', '196.00', 48, 1, '2025-02-15 15:49:46', '2025-02-15 15:49:46'),
(93, 'Eleanor Blanchard', '821.00', 50, 1, '2025-02-15 15:53:12', '2025-02-15 15:53:12'),
(94, 'Chaney Delgado', '99999999.99', 44, 1, '2025-02-15 15:59:36', '2025-02-15 15:59:36'),
(95, 'Demetria Rios', '392.00', 93, 1, '2025-02-15 15:59:51', '2025-02-15 15:59:51'),
(96, 'Samantha Burris', '693.00', 60, 1, '2025-02-15 15:59:57', '2025-02-15 15:59:57'),
(97, 'Herman Carter', '53.00', 14, 1, '2025-02-15 16:06:00', '2025-02-15 16:06:00'),
(98, 'Ira Hill', '4650000.00', 2900, 1, '2025-02-15 16:10:39', '2025-02-15 16:10:39'),
(99, 'Lilah Delaney', '105.00', 1, 1, '2025-02-15 16:12:02', '2025-02-15 16:12:02'),
(100, 'Radio', '12000000.00', 1000, 0, '2025-02-15 16:13:09', '2025-02-15 16:13:09'),
(101, 'Avannah Navarro1234', '258.00', 76, 1, '2025-02-15 16:21:52', '2025-02-15 16:21:52'),
(102, 'Perry Dodson', '22.00', 21, 1, '2025-02-15 16:20:14', '2025-02-15 16:20:14'),
(103, 'Blair Frazier', '428.00', 46, 1, '2025-02-15 16:34:26', '2025-02-15 16:34:26');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
