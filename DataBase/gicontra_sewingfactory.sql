-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
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
-- Table structure for table `addtasleh`
--

CREATE TABLE `addtasleh` (
  `taslehID` int(11) NOT NULL,
  `workerID` int(11) NOT NULL,
  `clientName` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phoneNum` int(11) NOT NULL,
  `taslehType` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `qty` int(11) NOT NULL,
  `tPrice` float NOT NULL,
  `wasl` float NOT NULL,
  `baki` float NOT NULL,
  `workerName` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `dateOfCompletion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `addtasleh`
--

INSERT INTO `addtasleh` (`taslehID`, `workerID`, `clientName`, `phoneNum`, `taslehType`, `qty`, `tPrice`, `wasl`, `baki`, `workerName`, `dateOfCompletion`) VALUES
(17, 1, '[value-3]', 0, '[value-5]', 0, 0, 0, 0, '[value-10]', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `alteraddress`
--

CREATE TABLE `alteraddress` (
  `address_id` int(11) NOT NULL,
  `address` text NOT NULL,
  `addressEn` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `alteraddress`
--

INSERT INTO `alteraddress` (`address_id`, `address`, `addressEn`) VALUES
(1, 'الرياض - حي الخليج - شارع الأمير بندر بن عبد العزيز - خلف فندق قصر الخليج - تلفون: 011/2395359 - ترخيص 40849', 'Riyadh - Al Khaleej Area - Prince Bandar Bin Abdulaziz St. - Behind Palace Gulf Hotel - Tel.: 011/2395359 - License 40849');

-- --------------------------------------------------------

--
-- Table structure for table `altermahal`
--

CREATE TABLE `altermahal` (
  `alterMahal_id` int(11) NOT NULL,
  `mahalName` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `altermahal`
--

INSERT INTO `altermahal` (`alterMahal_id`, `mahalName`) VALUES
(1, 'نورة محمد ناصر'),
(2, 'المعمل السعودي للخياطة العسطرية'),
(3, 'المعمل السعودي للخياطة العسكرية'),
(4, 'محمد علي'),
(5, 'البلد العملاق للخياطة العسكرية'),
(6, 'البلد العملاق للخياطة العسكرية'),
(7, 'MOHAMMAD Ali Charanek'),
(8, 'البلد العملاق للخياطة العسكرية');

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

-- --------------------------------------------------------

--
-- Table structure for table `badlahtype`
--

CREATE TABLE `badlahtype` (
  `badlahT_ID` int(11) NOT NULL,
  `badlahType` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `omolaPercent` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `badlahtype`
--

INSERT INTO `badlahtype` (`badlahT_ID`, `badlahType`, `omolaPercent`) VALUES
(1, 'قيافة', 20),
(2, 'مكتبي', 30),
(3, 'مكتبي دبل', 35),
(4, 'ميداني', 30),
(5, 'ميداني دبل', 35),
(6, 'مموه', 35),
(7, 'مموه دبل', 40),
(8, 'بدلة تشريفات', 80),
(9, 'بدلة أمن / سكيورتي', 25),
(10, 'بدلة مستشفي', 25),
(11, 'بالطو', 15),
(12, 'قميص', 15),
(13, 'بنطلون', 15),
(14, 'بدلة طفل', 25),
(15, 'جاكت', 50),
(16, 'مموه كلية أمنية ', 45),
(17, 'كلية الملك فهد', 32),
(18, 'بدلة عريس', 36);

-- --------------------------------------------------------

--
-- Table structure for table `daftarm`
--

CREATE TABLE `daftarm` (
  `daftar_id` int(11) NOT NULL,
  `senf` text DEFAULT NULL,
  `se3r` float DEFAULT NULL,
  `senfS` text DEFAULT NULL,
  `se3rS` float DEFAULT NULL,
  `naw3M` text DEFAULT NULL,
  `si3rM` float DEFAULT NULL,
  `mabe3Today` varchar(50) DEFAULT NULL,
  `baki` float DEFAULT NULL,
  `sumOfSe3r` float DEFAULT NULL,
  `dateOfToday` date NOT NULL,
  `currentDateAndTime` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `daftarvariables`
--

CREATE TABLE `daftarvariables` (
  `daftarVar_id` int(11) NOT NULL,
  `derj` float NOT NULL,
  `dateOfDerj` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `daftarvariables`
--

INSERT INTO `daftarvariables` (`daftarVar_id`, `derj`, `dateOfDerj`) VALUES
(1, 0, '2018-05-28'),
(2, 4, '2018-05-09'),
(3, 0, '2018-05-28'),
(4, 0, '2018-05-28'),
(5, 6, '2018-05-28'),
(6, 7, '2018-05-28'),
(7, 8, '2018-05-30'),
(8, 9, '2018-10-13'),
(9, 10, '2018-10-13'),
(10, 9, '2018-10-14'),
(11, 10, '2018-10-31'),
(12, 15, '2018-10-31'),
(13, 16, '2018-10-31'),
(14, 18, '2018-10-31'),
(15, 19, '2018-10-31'),
(16, 20, '2018-10-31'),
(17, 20, '2018-10-31'),
(18, 30, '2018-10-31'),
(19, 40, '2018-10-31'),
(20, 41, '2018-11-05'),
(21, 42, '2018-11-05'),
(22, 43, '2018-11-05'),
(23, 44, '2018-11-05'),
(24, 45, '2018-11-05'),
(25, 22, '2018-11-05'),
(26, 33, '2018-11-05'),
(27, 46, '2018-11-05'),
(28, 47, '2018-11-05'),
(29, 48, '2018-11-05'),
(30, 49, '2018-11-05'),
(31, 50, '2018-11-05'),
(32, 51, '2018-11-05'),
(33, 52, '2018-11-05'),
(34, 53, '2018-11-05'),
(35, 17, '2018-11-05'),
(36, 18, '2018-11-05'),
(37, 19, '2018-11-05'),
(38, 16, '2018-11-05'),
(39, 17, '2018-11-05'),
(40, 18, '2018-11-05'),
(41, 15, '2018-11-05'),
(42, 14, '2018-11-05'),
(43, 13, '2018-11-05'),
(44, 16, '2018-11-05'),
(45, 17, '2018-11-05'),
(46, 18, '2018-11-05'),
(47, 11, '2018-11-05'),
(48, 10, '2018-11-05'),
(49, 9, '2018-11-05'),
(50, 10, '2018-11-05'),
(51, 11, '2018-11-05'),
(52, 12, '2018-11-05'),
(53, 15, '2018-11-05'),
(54, 19, '2018-11-05'),
(55, 20, '2018-11-05'),
(56, 21, '2018-11-05'),
(57, 1, '2018-11-05'),
(58, 5, '2018-11-05'),
(59, 25, '2018-11-05'),
(60, 50, '2018-11-05'),
(61, 60, '2018-11-05'),
(62, 70, '2018-11-05'),
(63, 80, '2018-11-05'),
(64, 70, '2018-11-05'),
(65, 80, '2018-11-05'),
(66, 90, '2018-11-05'),
(67, 50, '2018-11-05'),
(68, 60, '2018-11-05'),
(69, 70, '2018-11-05'),
(70, 80, '2019-03-28');

-- --------------------------------------------------------

--
-- Table structure for table `law7atism`
--

CREATE TABLE `law7atism` (
  `law7atIsm_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `qita3` text NOT NULL,
  `jawal` varchar(14) NOT NULL,
  `overall` float NOT NULL,
  `type` text NOT NULL,
  `paid` float NOT NULL,
  `baki` float NOT NULL,
  `notes` text NOT NULL,
  `dateOfCompletion` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `law7atism`
--

INSERT INTO `law7atism` (`law7atIsm_id`, `name`, `qita3`, `jawal`, `overall`, `type`, `paid`, `baki`, `notes`, `dateOfCompletion`) VALUES
(1, 'أحمد جمال محمد المغيري', 'القوات المسلحة المصرية', '0564396941', 100, 'حفر', 55, 45, '', '0000-00-00'),
(2, 'أكرم الشدودي', 'الحرس الملكي', '1235698754', 100, 'حفر', 20, 80, '', '0000-00-00'),
(3, 'أكرم الشدودي', 'الحرس الملكي', '1235698754', 100, 'حفر', 20, 80, '', '0000-00-00'),
(4, 'mohammad', 'qita3', '5036985214', 300, 'تطريز', 50, 250, '', '0000-00-00'),
(5, 'mohammad', 'qita3', '5036985214', 300, 'تطريز', 50, 0, '', '0000-00-00'),
(6, 'mohammad', 'qita3', '5036985214', 300, 'تطريز', 50, 0, '', '0000-00-00'),
(7, 'محمد علي', '55', '0564396941', 200, 'تطريز', 25, 0, '', '0000-00-00'),
(8, 'محمد علي', 'قطاع', '0564396941', 25, 'قزاز', 5, 0, '', '0000-00-00'),
(9, 'محمد علي', 'قطاع', '0564396941', 25, 'قزاز', 5, 0, '', '0000-00-00'),
(10, 'محمد علي شرانق', 'قطاع', '0564396941', 25, 'قزاز', 5, 0, '', '0000-00-00'),
(11, 'محمد زهير', 'الجيش', '2353697547', 190, 'حفر', 70, 0, '', '0000-00-00'),
(12, 'محمد علي', '3', '0564396941', 158, 'حفر', 8, 0, '', '0000-00-00'),
(13, 'محمد علي', '', '0564396941', 158, 'حفر', 84, 0, '', '0000-00-00'),
(14, 'محمد علي', '', '0564396941', 258, 'طباعة', 5, 0, '', '0000-00-00'),
(15, 'محمد علي', '', '0564396941', 158, 'طباعة', 8, 0, '', '0000-00-00'),
(16, 'محمد علي', 'قطاع', '0564396941', 258, 'طباعة', 84, 0, '', '0000-00-00'),
(17, 'محمد علي', 'قطاع', '0564396941', 158, 'طباعة', 55, 0, '', '0000-00-00'),
(18, 'sdfsdfsdf', '5', '0564396941', 0, 'طباعة', 0, 0, '', '0000-00-00'),
(19, 'mohammad', '1', '0564396941', 25874, 'حفر', 4, 0, '', '0000-00-00'),
(20, 'خالد بن فهد الحربي', 'القوات الجوية الملكية السعودية', '1414141414', 40, 'حفر', 40, 0, '', '0000-00-00'),
(21, 'خالد بن فهد الحربي', 'القوات الجوية الملكية السعودية', '1414141414', 40, 'حفر', 40, 0, '', '0000-00-00'),
(22, 'فايز زايد الخمعلي', '', '0507111403', 30, 'قزاز', 10, 0, '', '0000-00-00'),
(23, 'فايز زايد الخمعلي', '', '0507111403', 30, 'قزاز', 10, 0, '', '0000-00-00'),
(24, 'محمد علي', 'قطاع', '0564396941', 258, '', 84, 0, '', '0000-00-00'),
(25, 'محمد علي', '5', '0564396941', 300, '', 25, 0, '', '0000-00-00'),
(26, 'dfgdfg', 'قطاع', '0564396941', 258, '', 8, 0, '', '0000-00-00'),
(27, 'Karam', 'test dept', '0564396941', 180, 'حفر', 80, 0, '', '0000-00-00'),
(28, 'Karam', 'test dept', '0564396970', 140, 'حفر', 120, 0, '', '0000-00-00'),
(29, 'Karam', 'test dept', '0564396941', 140, 'حفر', 120, 0, '', '0000-00-00'),
(30, 'Karam', 'test dept', '0564396950', 10, 'حفر قزاز طباعة تطريز', 5, 0, '', '0000-00-00'),
(31, 'Karam', 'test dept', '0564396941', 180, 'حفر   تطريز', 10, 0, '', '0000-00-00'),
(32, 'last test', 'last test', '0564396970', 50, 'حفر قزاز  تطريز', 12, 0, '', '0000-00-00'),
(33, 'jhon mark', 'last test', '0564396970', 50, 'حفر قزاز  تطريز', 12, 38, '', '0000-00-00'),
(34, 'mohammad', 'new', '0564396941', 258, 'حفر قزاز  ', 25, 233, '', '0000-00-00'),
(35, 'سلطان خالد الشهراني', 'كلية الملك فهد الامنية', '1245789531', 40, '  طباعة تطريز', 0, 40, '', '0000-00-00'),
(36, 'mohammad', 'qita3', '0564396941', 258, ' قزاز  ', 85, 173, '', '0000-00-00'),
(37, 'mohammad', 'qita3', '0564396942', 258, ' قزاز  ', 85, 173, '', '0000-00-00'),
(38, 'محمد علي', 'قطاع', '0564396941', 158, 'حفر   ', 8, 150, '', '0000-00-00'),
(39, 'محمد علي', 'قطاع', '0564396941', 158, 'حفر   ', 8, 150, '', '2018-01-11'),
(40, 'محمد علي', 'قطاع', '0564396941', 158, 'حفر   ', 8, 150, '', '2018-01-11'),
(41, 'محمد علي', 'قطاع', '0564396941', 158, 'حفر قزاز  ', 8, 150, '', '2018-01-11'),
(42, 'محمد علي', 'قطاع', '0564396941', 158, 'حفر قزاز طباعة ', 8, 150, '', '2018-01-11'),
(43, 'كوثر', 'ميداني', '1478523698', 15, '   تطريز', 15, 0, '', '2018-01-10'),
(44, 'محمد أحمد محمد', 'الحرس الوطني السعودي', '7848789545', 40, 'حفر   ', 30, 10, '', '2018-01-11'),
(45, 'محمد علي', 'قطاع جديد', '0564396941', 25874, 'حفر قزاز طباعة تطريز بلاستيك', 25, 25849, '', '2018-01-21'),
(46, 'محمد علي الثاني', 'قطاع جديد', '0564396941', 25874, '    بلاستيك', 25, 25849, '', '2018-01-21'),
(47, 'علي', 'القوات البرية الملكية السعودية', '0123456987', 40, 'حفر    ', 30, 10, '', '2018-01-22'),
(48, 'mohammad', 'qita3', '0564396941', 258, 'حفر    بلاستيك', 25, 233, 'notes', '2018-01-15'),
(49, 'mohammad', 'qita3', '0564396941', 258, 'حفر    بلاستيك', 25, 233, 'notes', '2018-01-15'),
(50, 'mohammad', 'qita3', '0564396941', 258, 'حفر  طباعة تطريز بلاستيك', 25, 233, 'notes new', '2018-01-15'),
(51, 'mohammad', 'qita3', '0564396941', 258, 'حفر  طباعة تطريز بلاستيك', 25, 233, 'notes new', '2018-01-15'),
(52, 'mohammad', 'qita3', '0564396941', 258, 'حفر  طباعة تطريز بلاستيك', 25, 233, 'new5', '2018-01-15'),
(53, 'أحمد جمال المغيري', 'القوات الجوية الملكية السعودية', '0564396941', 40, 'حفر    ', 30, 10, '    حفر عربي + أنجليزي قماش مقلوب', '2018-01-23'),
(54, 'محمد علي', '', '0564396941', 0, 'حفر    ', 0, 0, '', '2018-03-21'),
(55, 'محمد علي', 'qita3', '0564396941', 258, 'حفر قزاز طباعة  ', 8, 250, 'new note', '2018-03-21'),
(56, 'mohammad', '8', '0564396941', 0, '    بلاستيك', 0, 0, '', '2018-03-03'),
(57, 'محمد علي', 'قطاع', '0564396941', 258, '   تطريز ', 8, 250, '', '2018-03-01'),
(58, 'محمد علي', '', '0564396941', 0, '  طباعة  ', 0, 0, '', '2017-06-06'),
(59, 'محمد علي', '', '0564396941', 0, 'حفر    ', 0, 0, '', '2018-03-14'),
(60, 'محمد علي', '', '0564396941', 258, ' قزاز   ', 8, 250, '', '2018-03-15'),
(61, 'محمد علي', '', '0564396941', 0, ' قزاز   ', 0, 0, '', '2018-03-07'),
(62, 'محمد علي', '8', '0564396941', 258, ' قزاز   ', 0, 0, 'ىثص', '2018-03-14'),
(63, 'محمد علي', '8', '0564396941', 258, '  طباعة  ', 8, 250, 'new', '2018-03-09'),
(64, 'محمد علي', '8', '0564396941', 258, ' قزاز   ', 5, 253, 'new', '2018-03-21'),
(65, 'محمد علي', '8', '0564396941', 258, '   تطريز ', 8, 250, '', '2018-01-01'),
(66, 'محمد علي', '8', '0564396941', 258, '  طباعة  ', 8, 250, '', '2018-03-28'),
(67, 'محمد علي', '8', '0564396941', 0, ' قزاز   ', 0, 0, '', '2018-03-20'),
(68, 'mohammad', '5', '0564396941', 0, ' قزاز   ', 0, 0, '', '2018-03-28'),
(69, 'محمد علي', '', '0564396941', 0, '   تطريز ', 0, 0, '', '2018-03-26'),
(70, 'mohammad', '', '0564396941', 0, 'حفر    ', 0, 0, '', '2018-03-28'),
(71, 'محمد علي', '', '0564396941', 0, 'حفر    ', 0, 0, '', '2018-03-30'),
(72, 'محمد علي', '', '0564396941', 0, '   تطريز ', 0, 0, '', '2018-03-19'),
(73, 'mohammad', '8', '0564396941', 158, '   تطريز ', 8, 150, '', '2018-03-13'),
(74, 'mohammad', '2', '0564396941', 36988, '    بلاستيك', 5, 36983, 'last', '2018-03-23'),
(75, 'محمد علي', 'قطاع', '0564396941', 0, '   تطريز ', 0, 0, '', '2018-03-24'),
(76, 'mohammad', '8', '0564396941', 0, ' قزاز   ', 0, 0, '', '2018-03-31'),
(77, 'محمد علي', '', '0564396941', 0, 'حفر    ', 0, 0, '', '2018-03-26'),
(78, 'mohammad', '', '0564396941', 258, 'حفر    ', 8, 250, '', '2018-03-07'),
(79, 'moeali', 'new', '0564396941', 0, 'حفر    ', 0, 0, '', '2018-03-21'),
(80, 'محمد علي', '', '0564396941', 0, 'حفر    ', 0, 0, '', '2018-03-13'),
(81, 'newpk', '', '0564396941', 258, 'حفر قزاز   ', 8, 250, '', '2018-03-20'),
(82, 'محمد علي', 'قطاع', '0564396941', 258, 'حفر قزاز   ', 8, 250, '', '2018-03-27'),
(83, 'mohammad', 'new', '0564396941', 0, 'حفر    ', 0, 0, '', '2018-03-23'),
(84, 'محمد علي', '8', '0564396941', 258, 'حفر    ', 8, 250, '', '2018-03-19'),
(85, 'محمد علي', '8', '0564396941', 0, 'حفر    ', 0, 0, '', '2018-03-19'),
(86, 'محمد علي', '8', '0564396941', 0, 'حفر    ', 0, 0, '', '2018-03-14'),
(87, 'محمد علي', '', '0564396941', 0, 'حفر    ', 0, 0, '', '2018-03-18'),
(88, 'محمد علي', 'new', '0564396941', 0, 'حفر    ', 0, 0, '', '2018-04-18'),
(89, 'محمد علي', '8', '0564396941', 258, 'حفر    ', 8, 250, '', '2018-04-18'),
(90, 'mohammad', 'قطاع', '0564396941', 258, 'حفر    ', 8, 250, 'new', '2018-04-26'),
(91, 'محمد علي', 'قطاع', '0564396941', 258, 'حفر    ', 8, 250, '', '2018-04-25'),
(92, 'محمد علي', 'قطاع', '0564396941', 258, 'حفر    ', 8, 250, 'new', '2018-04-11'),
(93, 'محمد علي', '8', '0564396941', 0, ' قزاز   ', 0, 0, '', '2018-04-04'),
(94, 'محمد علي', '8', '0564396941', 0, 'حفر قزاز طباعة تطريز ', 0, 0, '', '2018-04-03'),
(95, 'محمد علي', 'قطاع', '0564396941', 158, '  طباعة  بلاستيك', 5, 153, 'ل', '2018-04-26'),
(96, 'mohammad', 'قطاع', '0564396941', 300, 'حفر    ', 0, 0, '', '2018-04-17'),
(97, 'محمد علي', '8', '0564396941', 0, ' قزاز   ', 0, 0, '', '2018-04-18'),
(98, 'محمد علي', '', '0564396941', 0, '  طباعة  ', 0, 0, '', '2018-03-13'),
(99, 'محمد علي', '8', '0564396941', 258, ' قزاز   ', 8, 250, '', '2018-04-11'),
(100, 'محمد علي', '8', '0564396941', 258, 'حفر   تطريز ', 8, 250, 'neqw', '2018-04-18'),
(101, 'محمد علي', 'قطاع', '0564396941', 5888, 'حفر   تطريز ', 8, 5880, 'new', '2018-04-19'),
(102, 'aboudi', 'new', '0564396941', 300, ' قزاز  تطريز ', 8, 292, 'mola7ada', '2018-04-27'),
(103, 'محمد علي', 'قطاع', '0564396941', 258, 'حفر    ', 8, 250, '', '2018-10-07'),
(104, 'محمد علي', 'new', '3698589698', 1000, 'حفر    ', 36, 964, 'new', '2019-03-15'),
(105, 'محمد علي', 'new', '3698589698', 1000, 'حفر    ', 36, 964, 'new', '2019-03-15'),
(106, 'محمد علي', '5', '3698589698', 1000, ' قزاز   ', 5, 995, 'new', '2019-03-16'),
(107, 'محمد علي', 'new', '3698589698', 1000, 'حفر    ', 5, 995, 'new', '2019-03-08'),
(108, 'محمد علي', 'kita', '3698589698', 1000, 'حفر    ', 9, 991, 'new', '2019-03-22');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user_ID` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_ID`, `username`, `password`) VALUES
(1, 'baladimlakAdmin', 'f0ecc6e41b2fa0e9f37a5a353062ad0c');

-- --------------------------------------------------------

--
-- Table structure for table `omola`
--

CREATE TABLE `omola` (
  `omola_ID` int(11) NOT NULL,
  `badlahT_ID` int(11) NOT NULL,
  `workerID` int(11) NOT NULL,
  `badlah_id` int(11) NOT NULL,
  `qty` float NOT NULL,
  `qtyOverall` int(11) NOT NULL,
  `badlahType` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `workerName` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `omola` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `previousvalue`
--

CREATE TABLE `previousvalue` (
  `PreviousValue_id` int(11) NOT NULL,
  `PrevVal` float NOT NULL,
  `datePrevVal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `previousvalue`
--

INSERT INTO `previousvalue` (`PreviousValue_id`, `PrevVal`, `datePrevVal`) VALUES
(1, 123, '2018-05-22'),
(2, 36, '2018-05-23'),
(3, 25, '2018-05-25');

-- --------------------------------------------------------

--
-- Table structure for table `raseedprev`
--

CREATE TABLE `raseedprev` (
  `raseedPrev_id` int(11) NOT NULL,
  `raseedPrev` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `workertb`
--

CREATE TABLE `workertb` (
  `workerID` int(11) NOT NULL,
  `wName` text NOT NULL,
  `wPNum` int(11) NOT NULL,
  `wAddress` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `workertb`
--

INSERT INTO `workertb` (`workerID`, `wName`, `wPNum`, `wAddress`) VALUES
(1, 'انصاري', 50, 'الهند'),
(2, 'علي', 5, 'الهند'),
(3, 'شريف', 1, ''),
(4, 'برهان ', 4, ''),
(5, 'زهير ', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addtasleh`
--
ALTER TABLE `addtasleh`
  ADD PRIMARY KEY (`taslehID`),
  ADD KEY `workerID` (`workerID`);

--
-- Indexes for table `alteraddress`
--
ALTER TABLE `alteraddress`
  ADD PRIMARY KEY (`address_id`);

--
-- Indexes for table `altermahal`
--
ALTER TABLE `altermahal`
  ADD PRIMARY KEY (`alterMahal_id`);

--
-- Indexes for table `badlah`
--
ALTER TABLE `badlah`
  ADD PRIMARY KEY (`badlah_id`),
  ADD UNIQUE KEY `kamis_id` (`badlah_id`),
  ADD KEY `badlahT_ID` (`badlahT_ID`);

--
-- Indexes for table `badlahtype`
--
ALTER TABLE `badlahtype`
  ADD PRIMARY KEY (`badlahT_ID`);

--
-- Indexes for table `daftarm`
--
ALTER TABLE `daftarm`
  ADD PRIMARY KEY (`daftar_id`);

--
-- Indexes for table `daftarvariables`
--
ALTER TABLE `daftarvariables`
  ADD PRIMARY KEY (`daftarVar_id`);

--
-- Indexes for table `law7atism`
--
ALTER TABLE `law7atism`
  ADD PRIMARY KEY (`law7atIsm_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`user_ID`);

--
-- Indexes for table `omola`
--
ALTER TABLE `omola`
  ADD PRIMARY KEY (`omola_ID`),
  ADD KEY `workerID` (`workerID`),
  ADD KEY `badlahT_ID` (`badlahT_ID`),
  ADD KEY `badlah_id` (`badlah_id`);

--
-- Indexes for table `previousvalue`
--
ALTER TABLE `previousvalue`
  ADD PRIMARY KEY (`PreviousValue_id`);

--
-- Indexes for table `raseedprev`
--
ALTER TABLE `raseedprev`
  ADD PRIMARY KEY (`raseedPrev_id`);

--
-- Indexes for table `workertb`
--
ALTER TABLE `workertb`
  ADD PRIMARY KEY (`workerID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addtasleh`
--
ALTER TABLE `addtasleh`
  MODIFY `taslehID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `alteraddress`
--
ALTER TABLE `alteraddress`
  MODIFY `address_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `altermahal`
--
ALTER TABLE `altermahal`
  MODIFY `alterMahal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `badlah`
--
ALTER TABLE `badlah`
  MODIFY `badlah_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `badlahtype`
--
ALTER TABLE `badlahtype`
  MODIFY `badlahT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `daftarm`
--
ALTER TABLE `daftarm`
  MODIFY `daftar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `daftarvariables`
--
ALTER TABLE `daftarvariables`
  MODIFY `daftarVar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `law7atism`
--
ALTER TABLE `law7atism`
  MODIFY `law7atIsm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `user_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `omola`
--
ALTER TABLE `omola`
  MODIFY `omola_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `previousvalue`
--
ALTER TABLE `previousvalue`
  MODIFY `PreviousValue_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `raseedprev`
--
ALTER TABLE `raseedprev`
  MODIFY `raseedPrev_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `workertb`
--
ALTER TABLE `workertb`
  MODIFY `workerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
