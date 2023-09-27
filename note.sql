-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:8111
-- Generation Time: Jun 01, 2023 at 10:29 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `note`
--

-- --------------------------------------------------------

--
-- Table structure for table `developers`
--

CREATE TABLE `developers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `skills` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `developers`
--

INSERT INTO `developers` (`id`, `name`, `skills`, `address`, `gender`, `designation`, `age`, `image`) VALUES
(1, 'vicky', 'php', 'haldwani', 'male', 'developer', 24, 'not avl');

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `fname`, `lname`, `email`) VALUES
(1, 'mohit', 'vdfdfdf', 'shanti'),
(2, 'neeraj', 'vdfdfdf', 'fdfdfg@232'),
(3, 'kamal', 'vdfdfdf', 'fdfdfg@232'),
(4, 'kunal', 'vdfdfdf', 'fdfdfg@232'),
(5, 'nitin', 'sir', 'sir@12123'),
(6, 'manju', 'babu', 'popat'),
(7, 'vicky', 'rawat', 'vicky@123'),
(8, 'vikram', 'dfd', 'fdfdfg@232'),
(9, 'karan', 'dfd', 'fdfdfg@232'),
(10, 'arjun', 'erwerw', 'lolu');

-- --------------------------------------------------------

--
-- Table structure for table `pdfwa`
--

CREATE TABLE `pdfwa` (
  `name` varchar(18) NOT NULL,
  `phone` int(20) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `checkbox` varchar(25) NOT NULL,
  `radio` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pdfwa`
--

INSERT INTO `pdfwa` (`name`, `phone`, `description`, `image`, `checkbox`, `radio`) VALUES
('vicky', 121324, 'hey there', 'images/cool.jpg', 'Bike', 'HTML');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pdfwa`
--
ALTER TABLE `pdfwa`
  ADD PRIMARY KEY (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
