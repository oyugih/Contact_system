-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2024 at 10:18 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contacts`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(22) UNSIGNED NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `middlename` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contacts` varchar(50) NOT NULL,
  `companyname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `firstname`, `middlename`, `lastname`, `email`, `contacts`, `companyname`) VALUES
(1, 'Joseph', ' Owiti', 'Oyugi', 'joseph.makoyugi@gmail.com', '0702785855', 'Oyugis'),
(2, 'Lynne', ' Atieno', 'Ochako', 'lynny@gmail.com', '0754317689', 'Nairobi '),
(5, 'Sheilla', ' Awuor', 'Onyango', 'sheillawuor@gmail.com', '0783214567', 'Nakuru'),
(6, 'Boury', ' Onyango', 'Okeyo', 'oeyo.onyango@gmail.com', '0724316580', 'Eldoret'),
(9, 'Lydia', ' Achieng', 'Omoso', 'om@gmail.com', '0783673212', 'Rongo'),
(10, 'Amos', ' Onsongo', 'Jeremiah', 'jeremiahosongo@yahoo.com', '0784562378', 'Keroka'),
(11, 'Ruth', ' Blessed', 'Odiwuor', 'blessedpatient@gmail.com', '0721478456', 'Nakuru'),
(12, 'Henry', ' odiwuor', 'oyugi', 'odiwuorodiyo@gmail.com', '0721000000', 'Kisumu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(22) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
