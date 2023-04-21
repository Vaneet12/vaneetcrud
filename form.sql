-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 13, 2023 at 03:18 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `responsiveform3`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `cpassword` varchar(30) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `caste` varchar(10) NOT NULL,
  `language` varchar(40) NOT NULL,
  `address` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `fname`, `lname`, `password`, `cpassword`, `gender`, `email`, `phone`, `caste`, `language`, `address`) VALUES
(4, 'vaneet', 'kumar', '1234', '1234', 'male', 'vaneetkumar@gmail.com', '23453', '', '', '\r\nrth'),
(6, 'aman', 'thakur', '1234', '1234', 'male', 'am@gmail.com', '243', '', '', '\r\nres'),
(7, 'aman', 'thakur', '1234', '1234', 'male', 'am@gmail.com', '243', '', '', '\r\nres'),
(8, 'aman', 'thakur', '1234', '1234', 'male', 'am@gmail.com', '243', '', '', '\r\nres'),
(9, 'aman', 'thakur', '1234', '1234', 'male', 'am@gmail.com', '243', '', '', '\r\nres'),
(10, 'aman', 'thakur', '1234', '1234', 'male', 'am@gmail.com', '243', '', '', '\r\nres'),
(11, 'aman', 'thakur', '1234', '1234', 'male', 'am@gmail.com', '243', '', '', '\r\nres'),
(12, 'aman', 'thakur', '1234', '1234', 'male', 'am@gmail.com', '243', '', '', '\r\nres'),
(13, 'aman', 'thakur', '1234', '1234', 'male', 'am@gmail.com', '243', '', '', '\r\nres'),
(14, 'aman', 'thakur', '1234', '1234', 'male', 'am@gmail.com', '243', '', '', '\r\nres'),
(15, 'aman', 'thakur', '1234', '1234', 'male', 'am@gmail.com', '243', '', '', '\r\nres'),
(16, 'vaneet', 'kumar', '1234', '1234', 'male', 'sdg', '46', 'ST', '', 'rfh\r\n'),
(17, 'vaneet', 'kumar', '1234', '1234', 'male', 'sdg', '46', 'SC', '', 'rfh\r\n'),
(18, 'vaneet', 'kumar', '1234', '1234', 'male', 'sdg', '46', 'SC', '', 'rfh\r\n'),
(19, ' tgj ', ' fg', '', '', 'female', ' dfeg', ' 5654', 'General', '', '               dfcn\r\n'),
(20, ' bunty ', ' s', '', '', 'male', ' dsfgvb', ' 234', 'General', 'Hindi,English', '               \r\nerh'),
(21, 'bunty', 's', '1234', '1234', 'male', 'dsfgvb', '234', 'General', 'Hindi', '\r\nerh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
