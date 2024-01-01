-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2024 at 06:40 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(50) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `birth_date` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `full_name`, `contact`, `email`, `birth_date`, `address`, `city`, `state`, `zip`) VALUES
(1, 'deshmukh priya', '7620163042', 'deshmukhpriya155@gmail.com', '1994-12-04', 'plot no 23 vrundavan colony, takekar vasahat, jailroad, nashikroad', 'Nashik', 'Choose...', '422401'),
(3, 'deshmukh chetan', '8975135624', 'chetan1390@gmail.com', '1990-03-01', 'B41 new panchmoti h.soc.vijaynagar', 'Pune', 'Maharashtra', '422502'),
(4, 'testing', '1234567890', 'test@gmail.com', '2023-12-29', '123,main road,govind nagar', 'mumbai', 'Maharashtra', '422406'),
(5, 'deshmukh kaivalya', '8975135624', 'kaivalya@gmail.com', '2015-10-31', 'plot no 23 vrundavan colony takekar vasahat jailroad nashikroad', 'Pune', 'Maharastra', '422406'),
(6, 'deshmukh chetan', '7620163042', 'admin@mail.com', '2024-01-02', 'sailani baba  jailroad', 'mumbai', 'Maharastra', '422502');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
