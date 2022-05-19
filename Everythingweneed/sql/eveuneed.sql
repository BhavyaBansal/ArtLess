-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2022 at 06:39 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eveuneed`
--

-- --------------------------------------------------------

--
-- Table structure for table `certifications`
--

CREATE TABLE `certifications` (
  `Firstname` varchar(100) NOT NULL,
  `certificatename` varchar(100) NOT NULL,
  `test_points` int(11) NOT NULL,
  `certified` enum('Yes','No') NOT NULL DEFAULT 'No',
  `Created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `Firstname` varchar(100) NOT NULL,
  `Lastname` varchar(100) NOT NULL,
  `email` varchar(250) NOT NULL,
  `Course` varchar(100) NOT NULL,
  `Year` int(10) NOT NULL,
  `College` varchar(250) NOT NULL,
  `Password` varchar(150) NOT NULL,
  `Total Points` bigint(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Firstname`, `Lastname`, `email`, `Course`, `Year`, `College`, `Password`, `Total Points`, `created_at`, `updated_at`) VALUES
(1, 'Bhavya', 'Bansal', 'bhavyabansal0916@gmail.com', 'B.tech', 2, 'KIET Group of Institutions', '$2y$10$fPQ9qf68NZfJCpHk89JaEO5bkjq71nqOPsVMNHfGFY1/v2STfxUhC', 0, '2022-05-17 23:30:12', '2022-05-17 23:30:12'),
(2, 'Akash', 'Singh', 'akash@gmail.com', 'B.tech', 2, 'KIET Group of Institutions', '$2y$10$5DeW4mTiP5SotAZILvEY8OgUKxYIQcpX66FUZtRGRDqCl9u6i2LJ6', 0, '2022-05-17 23:32:34', '2022-05-17 23:32:34'),
(3, 'Mohit', 'Kumar', 'mohit@gmail.com', 'B.tech', 4, 'KIET Group of Institutions', '$2y$10$MlzjmZeDDnqV6Oa96jURxOQYb43ZXvHuQyHXNnoT5heauAQyPkZ42', 0, '2022-05-19 20:04:23', '2022-05-19 20:04:23');

--
-- Indexes for dumped tables
--

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
