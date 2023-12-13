-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2022 at 03:17 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `autotreatment`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `catname` varchar(22) NOT NULL,
  `descrition` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `catname`, `descrition`) VALUES
(1, 'Allergy', 'description here'),
(2, 'Children', 'description'),
(3, 'Circulatory', 'description'),
(4, 'Oral care', 'description'),
(5, 'Cold and Flu', 'description'),
(6, 'Digestive Problems', '');

-- --------------------------------------------------------

--
-- Table structure for table `find_right_medicine`
--

CREATE TABLE `find_right_medicine` (
  `id` int(55) NOT NULL,
  `simtom` int(22) NOT NULL,
  `medicine` varchar(22) NOT NULL,
  `description` varchar(55) NOT NULL,
  `images` varchar(55) NOT NULL,
  `other` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `find_right_medicine`
--

INSERT INTO `find_right_medicine` (`id`, `simtom`, `medicine`, `description`, `images`, `other`) VALUES
(1, 1, 'm1', 'd1', 'img1', 'test'),
(2, 2, 'm2', 'description here', 'img.jpg', 'other'),
(3, 3, 'm3', 'description here', 'img.jpg', 'other'),
(4, 4, 'm4', 'dsgxcvfhd dgdf', 'jgh.jpg', 'other'),
(5, 5, 'm6', 'description', 'img.jpg', 'other');

-- --------------------------------------------------------

--
-- Table structure for table `simtoms`
--

CREATE TABLE `simtoms` (
  `id` int(22) NOT NULL,
  `subcategory` int(22) NOT NULL,
  `simtom` varchar(55) NOT NULL,
  `description` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `simtoms`
--

INSERT INTO `simtoms` (`id`, `subcategory`, `simtom`, `description`) VALUES
(1, 1, 'simtom ab', 'this is description'),
(2, 1, 'simtom-2', 'description-2'),
(3, 1, 'simtom-3', 'description here '),
(4, 2, 'simtopm-4', 'description-5'),
(5, 2, 'simtom-5', 'description-here');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `id` int(22) NOT NULL,
  `category` int(22) NOT NULL,
  `subcategory` varchar(22) NOT NULL,
  `decription` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id`, `category`, `subcategory`, `decription`) VALUES
(1, 1, 'Cold urticaria', 'description'),
(2, 1, 'Eye irretation ', 'description here.'),
(3, 1, 'Hayes', 'description'),
(4, 1, 'Hives', 'description'),
(5, 1, 'Itchy nose', 'description'),
(6, 1, 'Nasal congestion', 'des'),
(7, 1, 'Runny noise', ''),
(8, 1, 'Sin rash', 'description'),
(9, 1, 'Sneezing', ''),
(10, 1, 'Sun allergy', 'description'),
(11, 1, 'Weals', 'description'),
(12, 1, 'Rgweed Allergy', 'desc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `find_right_medicine`
--
ALTER TABLE `find_right_medicine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `simtoms`
--
ALTER TABLE `simtoms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `find_right_medicine`
--
ALTER TABLE `find_right_medicine`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `simtoms`
--
ALTER TABLE `simtoms`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
