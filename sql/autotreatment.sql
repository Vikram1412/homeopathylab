-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2022 at 11:08 AM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'e6e061838856bf47e1de730719fb2609');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `catname` varchar(55) NOT NULL,
  `descrition` varchar(33) NOT NULL
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
(6, 'Digestive Problems', ''),
(7, 'Headache', ''),
(8, 'Fevers', ''),
(9, 'Diseases of Eye, Ear, ', ''),
(10, 'Naso-respiratory disea', ''),
(11, 'Diseases of Eye, Ear, Nose, Mouth, Teeth, Throat', ''),
(12, 'Naso-respiratory diseases', ''),
(13, 'Gastrointestinal disorders', ''),
(14, 'Skin diseases', ''),
(15, 'Allergic Disorders', ''),
(16, 'Childhood illnesses', ''),
(17, 'Menstrual and reproductive health problems', ''),
(18, 'Geriatric ailments', ''),
(19, 'Psychological illnesses', ''),
(20, 'Injuries, Burns, Hemorrhages', '');

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
-- Table structure for table `medicine_list`
--

CREATE TABLE `medicine_list` (
  `id` int(11) NOT NULL,
  `medicine` varchar(22) NOT NULL,
  `dilutions` varchar(22) NOT NULL,
  `description` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicine_list`
--

INSERT INTO `medicine_list` (`id`, `medicine`, `dilutions`, `description`) VALUES
(1, 'Aconite ', 'img.jpg', 'description here'),
(2, 'Aesculus hippocastanum', 'img.jpg', 'description here'),
(3, 'Allium cepa ', 'Allium.jpg', 'description of Allium '),
(4, 'Aloeaceae ', 'Aloeaceae ', 'Aloeaceae '),
(5, 'Arnica ', 'Arnica ', 'Arnica '),
(6, ' Baptisia ', 'Baptisia ', 'Baptisia'),
(7, 'Belladonna ', '', ''),
(8, ' Bellis perennis ', 'Bellis perennis ', 'Bellis perennis '),
(9, 'Calendula ', '', ''),
(10, 'Colocynthis ', '', ''),
(11, 'Digitalis ', '', ''),
(12, 'Drosera ', '', ''),
(13, 'Dulcamara ', '', ''),
(14, 'Hamamelis', '', ''),
(15, 'Lachesis ', '', ''),
(16, 'Ledum Pal', '', ''),
(17, 'Lycopodium ', ' ', ''),
(18, 'Thuja', '', ''),
(19, 'Urtica urens', '', ''),
(20, 'Abrotanum', '30/200', 'description'),
(21, 'Absinthium', '30', ''),
(22, 'Acalypha Indica', '3x/6', ''),
(23, 'Acalypha Indica', '3x/6', ''),
(24, 'Aconitum Napellus', '6/200/1M', ''),
(25, 'Actaea Racemosa', '200', ''),
(26, 'Acsculus hippocastanum', '200', ''),
(27, 'Agaricus muscarius', '200', ''),
(28, 'Allium cepa', '200', ''),
(29, 'Aloe socotrina', '200', ''),
(30, 'Alumina', '200', ''),
(31, 'Alumina', '200', ''),
(32, 'Ammonium carbonicum', '200', ''),
(33, 'Ammonium muriaticum', '200', ''),
(34, 'Ammonium phosphoricum', '200', ''),
(35, 'Anacardium orientale', '200/1M', ''),
(36, 'Angustra vera', 'Q', ''),
(37, 'Anthracinum', '200', ''),
(38, 'Antimonium crudum', '30/200', ''),
(39, 'Antimonium tartaricum', '6/30/200', ''),
(40, 'Apis mellifica', '30/200', ''),
(41, 'Apocynum cannabinum', '30/200', ''),
(42, 'Argentum metallicum', '30/200', ''),
(43, 'Argentum nitricum', '30/200', '');

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
(2, 1, 'simtom-2', 'description-2'),
(3, 1, 'simtom-3', 'description here '),
(5, 2, 'simtom-5', 'description-here'),
(6, 4, 'simtom-10', ' simtom-10 description.'),
(7, 4, 'simtom-10', ' simtom-10 description.'),
(8, 4, 'simtom-10', ' simtom-10 description.');

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
(12, 1, 'Rgweed Allergy', 'desc'),
(13, 4, 'Teeth pain', ' this is description '),
(14, 2, 'Pulsing ', ' Pulse is most problem'),
(15, 2, 'Baby colic', ' Baby colic is a disea'),
(16, 2, 'Cradle cap', ' Cradle cap'),
(17, 2, 'Diaper rash', ' Diaper rash');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(300) DEFAULT NULL,
  `contactno` varchar(11) DEFAULT NULL,
  `posting_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`, `contactno`, `posting_date`) VALUES
(9, 'Anuj', 'Kumar', 'demouser@gmail.com', 'Test@123', '21222222', '2015-11-11 18:30:00'),
(11, 'Anuj', 'Kumar', 'phpgurukulofficial@gmail.com', 'Test@123', '1234567890', '2019-07-14 09:36:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `medicine_list`
--
ALTER TABLE `medicine_list`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `find_right_medicine`
--
ALTER TABLE `find_right_medicine`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `medicine_list`
--
ALTER TABLE `medicine_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `simtoms`
--
ALTER TABLE `simtoms`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
