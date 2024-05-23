-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1.10? <?PHP  ?>
-- Generation Time: Mar 26, 2023 at 08:00 AM
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
-- Database: `gicontra_sewingfactory`
--

-- --------------------------------------------------------

--
-- Table structure for table `badlah`
--

CREATE TABLE `badlah` (
  `badlah_id` int(11) NOT NULL,
  `badlahT_ID` int(11) NOT NULL,
  `clientname` text NOT NULL,
  `mobilenum` varchar(13) NOT NULL,
  `dateOfCompletion` date NOT NULL,
  `naw3al3amal` text NOT NULL,
  `tool` float NOT NULL,
  `katef` float NOT NULL,
  `kom1` float NOT NULL,
  `kom2` float NOT NULL,
  `kom3` float NOT NULL,
  `sadr` float NOT NULL,
  `batn` float NOT NULL,
  `asfal` float NOT NULL,
  `raqba` float NOT NULL,
  `qita3` varchar(100) NOT NULL,
  `comments` text NOT NULL,
  `toolp` float NOT NULL,
  `shi3arN` int(11) NOT NULL,
  `shi3ar` float NOT NULL,
  `hizam` float NOT NULL,
  `rotbahN` int(11) NOT NULL,
  `rotbah` float NOT NULL,
  `base` float NOT NULL,
  `splaytN` int(11) NOT NULL,
  `splayt` float NOT NULL,
  `fa5th` float NOT NULL,
  `kabou3N` int(11) NOT NULL,
  `kabou3` float NOT NULL,
  `sak` float NOT NULL,
  `law7aN` int(11) NOT NULL,
  `law7a` float NOT NULL,
  `asfalbnt` float NOT NULL,
  `yakaN` int(11) NOT NULL,
  `yaka` float NOT NULL,
  `waynakN` int(11) NOT NULL,
  `waynak` float NOT NULL,
  `notahN` int(11) NOT NULL,
  `notah` float NOT NULL,
  `kravtaN` int(11) NOT NULL,
  `kravta` float NOT NULL,
  `qty` float DEFAULT NULL,
  `bQty` int(11) NOT NULL,
  `price` float DEFAULT NULL,
  `vat` float NOT NULL,
  `omla` varchar(50) NOT NULL,
  `overallP` float NOT NULL,
  `wasl` float NOT NULL,
  `baki` float NOT NULL,
  `finished` varchar(50) NOT NULL,
  `received` varchar(50) NOT NULL,
  `naw3exp` text NOT NULL,
  `numexp` float NOT NULL,
  `pexp` float NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `badlah`
--
ALTER TABLE `badlah`
  ADD PRIMARY KEY (`badlah_id`),
  ADD UNIQUE KEY `kamis_id` (`badlah_id`),
  ADD KEY `badlahT_ID` (`badlahT_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `badlah`
--
ALTER TABLE `badlah`
  MODIFY `badlah_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
