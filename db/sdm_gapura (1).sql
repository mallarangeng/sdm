-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2001 at 06:09 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sdm_gapura`
--

-- --------------------------------------------------------

--
-- Table structure for table `ms_menu`
--

CREATE TABLE `ms_menu` (
  `id_menu` varchar(11) NOT NULL,
  `title` varchar(45) DEFAULT NULL,
  `folder` varchar(30) DEFAULT NULL,
  `link` varchar(45) DEFAULT NULL,
  `level` smallint(3) DEFAULT NULL,
  `parent` smallint(3) DEFAULT NULL,
  `icon` varchar(45) DEFAULT NULL,
  `urut` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ms_menu`
--

INSERT INTO `ms_menu` (`id_menu`, `title`, `folder`, `link`, `level`, `parent`, `icon`, `urut`) VALUES
('1', 'Kegiatan', 'Kegiatan', 'Kegiatan', NULL, 0, 'pe-7s-shuffle', 1),
('2', 'Data Kegiatan', 'Kegiatan', 'Data Kegiatan', NULL, 1, '', 2),
('3', 'Master', '', '', NULL, 0, 'pe-7s-search', 0),
('4', 'menu', 'menu', 'menu', NULL, 3, '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `ms_user`
--

CREATE TABLE `ms_user` (
  `username` varchar(15) NOT NULL,
  `id_jabatan` int(11) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `fullname` varchar(45) NOT NULL,
  `blokir` enum('Y','N') DEFAULT NULL,
  `picture` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=big5;

--
-- Dumping data for table `ms_user`
--

INSERT INTO `ms_user` (`username`, `id_jabatan`, `password`, `email`, `fullname`, `blokir`, `picture`) VALUES
('aaaaaaaa', 1, 'd41d8cd98f00b204e9800998ecf8427e', 'aaaaaaaa', 'aaaaaaaa', 'Y', ''),
('asasas', 2, 'd41d8cd98f00b204e9800998ecf8427e', 'asasas', 'asasas', 'Y', 'adi.PNG'),
('Diana', 2, '', 'diana.sayang@gmail.com', 'Diana Ac', 'N', NULL),
('Faisal', 2, '1ce9287a63e38534efb11b85339cbe59', 'faisalwa@gmail.com', 'Faisayal Yakub', 'N', NULL),
('Fisaly', 1, 'd41d8cd98f00b204e9800998ecf8427e', 'faisal', 'Fisal Y', 'N', 'Lighthouse.jpg'),
('Hahahaahhhahhah', 2, 'd41d8cd98f00b204e9800998ecf8427e', 'hahahhahah', 'hahahahhahahahhahahh', 'Y', 'Tulips.jpg'),
('hahhah', 3, 'd41d8cd98f00b204e9800998ecf8427e', 'jajajj', 'hahahah', 'Y', ''),
('qqqq', 2, 'd41d8cd98f00b204e9800998ecf8427e', 'qqqqq', 'qqqq', 'Y', '_'),
('zae', 1, '1ce9287a63e38534efb11b85339cbe59', 'arifin.dzae@gmail.com', 'Hendri', 'N', NULL),
('zainal', 4, 'd41d8cd98f00b204e9800998ecf8427e', 'zae@msc.com', 'Zainal Arifin', 'Y', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ms_menu`
--
ALTER TABLE `ms_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `ms_user`
--
ALTER TABLE `ms_user`
  ADD PRIMARY KEY (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
