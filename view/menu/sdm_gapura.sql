-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2018 at 10:41 AM
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
-- Table structure for table `akses`
--

CREATE TABLE `akses` (
  `id_akses` varchar(3) NOT NULL,
  `nama_akses` varchar(20) NOT NULL,
  `ket_akses` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akses`
--

INSERT INTO `akses` (`id_akses`, `nama_akses`, `ket_akses`) VALUES
('1', 'No', 'No'),
('2', 'SPV Human Resource', 'SPV Human Resource'),
('3', 'Staff HRD', 'Staff HRD'),
('4', 'Staff Keuangan', 'Staff Keuangan 2'),
('5', 'Staff Pajak', 'Staff Pajak');

-- --------------------------------------------------------

--
-- Table structure for table `apsensi`
--

CREATE TABLE `apsensi` (
  `id_apsensi` int(10) NOT NULL,
  `nip` varchar(15) NOT NULL,
  `id_training` varchar(8) NOT NULL,
  `i_by` varchar(15) NOT NULL,
  `i_date` datetime NOT NULL,
  `e_by` varchar(15) NOT NULL,
  `e_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apsensi`
--

INSERT INTO `apsensi` (`id_apsensi`, `nip`, `id_training`, `i_by`, `i_date`, `e_by`, `e_date`) VALUES
(2, '1305.0223', '10000003', '12100410', '2017-12-28 08:59:39', '1712.0905', '2018-01-08 16:16:16'),
(3, '1712.0910', '10000003', '1712.0905', '2018-01-07 17:38:13', '', '0000-00-00 00:00:00'),
(4, '1712.0911', '10000003', '1712.0905', '2018-01-07 17:38:20', '', '0000-00-00 00:00:00'),
(5, '1712.0907', '10000001', '1712.0905', '2018-01-07 17:38:53', '', '0000-00-00 00:00:00'),
(6, '1305.0223', '10000001', '1712.0905', '2018-01-07 17:39:01', '', '0000-00-00 00:00:00'),
(7, '1712.0910', '10000002', '1712.0905', '2018-01-08 08:15:18', '', '0000-00-00 00:00:00'),
(8, '1712.0905', '10000002', '1712.0905', '2018-01-08 09:09:43', '', '0000-00-00 00:00:00'),
(9, 'undefined', 'undefine', '1712.0905', '2018-01-08 11:00:33', '', '0000-00-00 00:00:00'),
(10, 'undefined', 'undefine', '1712.0905', '2018-01-08 11:01:45', '', '0000-00-00 00:00:00'),
(11, 'undefined', 'undefine', '1712.0905', '2018-01-08 11:02:11', '', '0000-00-00 00:00:00'),
(12, 'undefined', 'undefine', '1712.0905', '2018-01-08 11:02:48', '', '0000-00-00 00:00:00'),
(13, 'undefined', 'undefine', '1712.0905', '2018-01-08 11:02:49', '', '0000-00-00 00:00:00'),
(14, 'undefined', 'undefine', '1712.0905', '2018-01-08 11:02:50', '', '0000-00-00 00:00:00'),
(15, 'undefined', 'undefine', '1712.0905', '2018-01-08 11:02:51', '', '0000-00-00 00:00:00'),
(16, 'undefined', 'undefine', '1712.0905', '2018-01-08 11:02:52', '', '0000-00-00 00:00:00'),
(17, 'undefined', 'undefine', '1712.0905', '2018-01-08 11:02:54', '', '0000-00-00 00:00:00'),
(18, 'undefined', 'undefine', '1712.0905', '2018-01-08 11:02:55', '', '0000-00-00 00:00:00'),
(19, 'undefined', 'undefine', '1712.0905', '2018-01-08 11:02:55', '', '0000-00-00 00:00:00'),
(20, 'undefined', 'undefine', '1712.0905', '2018-01-08 11:03:18', '', '0000-00-00 00:00:00'),
(21, 'undefined', 'undefine', '1712.0905', '2018-01-08 11:03:21', '', '0000-00-00 00:00:00'),
(22, 'undefined', 'undefine', '1712.0905', '2018-01-08 11:03:23', '', '0000-00-00 00:00:00'),
(23, 'undefined', 'undefine', '1712.0905', '2018-01-08 11:03:23', '', '0000-00-00 00:00:00'),
(24, 'undefined', 'undefine', '1712.0905', '2018-01-08 11:04:17', '', '0000-00-00 00:00:00'),
(25, 'undefined', 'undefine', '1712.0905', '2018-01-08 11:14:58', '', '0000-00-00 00:00:00'),
(26, 'undefined', 'undefine', '1712.0905', '2018-01-08 11:20:24', '', '0000-00-00 00:00:00'),
(27, 'undefined', 'undefine', '1712.0905', '2018-01-08 11:24:19', '', '0000-00-00 00:00:00'),
(28, 'undefined', 'undefine', '1712.0905', '2018-01-08 11:29:22', '', '0000-00-00 00:00:00'),
(29, 'undefined', 'undefine', '1712.0905', '2018-01-08 11:29:25', '', '0000-00-00 00:00:00'),
(30, 'undefined', 'undefine', '1712.0905', '2018-01-08 11:29:27', '', '0000-00-00 00:00:00'),
(31, 'undefined', 'undefine', '1712.0905', '2018-01-08 11:29:31', '', '0000-00-00 00:00:00'),
(32, 'undefined', 'undefine', '1712.0905', '2018-01-08 11:29:32', '', '0000-00-00 00:00:00'),
(33, 'undefined', 'undefine', '1712.0905', '2018-01-08 11:29:34', '', '0000-00-00 00:00:00'),
(34, 'undefined', 'undefine', '1712.0905', '2018-01-08 11:29:35', '', '0000-00-00 00:00:00'),
(35, 'undefined', 'undefine', '1712.0905', '2018-01-08 11:29:53', '', '0000-00-00 00:00:00'),
(36, 'undefined', 'undefine', '1712.0905', '2018-01-08 11:29:55', '', '0000-00-00 00:00:00'),
(37, 'undefined', 'undefine', '1712.0905', '2018-01-08 11:29:56', '', '0000-00-00 00:00:00'),
(38, 'undefined', 'undefine', '1712.0905', '2018-01-08 11:29:58', '', '0000-00-00 00:00:00'),
(39, 'undefined', 'undefine', '1712.0905', '2018-01-08 11:29:59', '', '0000-00-00 00:00:00'),
(40, 'undefined', 'undefine', '1712.0905', '2018-01-08 11:30:41', '', '0000-00-00 00:00:00'),
(41, 'undefined', 'undefine', '1712.0905', '2018-01-08 11:30:42', '', '0000-00-00 00:00:00'),
(42, 'undefined', 'undefine', '1712.0905', '2018-01-08 11:30:46', '', '0000-00-00 00:00:00'),
(43, 'undefined', 'undefine', '1712.0905', '2018-01-08 11:31:14', '', '0000-00-00 00:00:00'),
(44, 'undefined', 'undefine', '1712.0905', '2018-01-08 11:31:15', '', '0000-00-00 00:00:00'),
(45, 'undefined', 'undefine', '1712.0905', '2018-01-08 11:31:17', '', '0000-00-00 00:00:00'),
(46, 'undefined', 'undefine', '1712.0905', '2018-01-08 11:31:18', '', '0000-00-00 00:00:00'),
(47, 'undefined', 'undefine', '1712.0905', '2018-01-08 11:31:19', '', '0000-00-00 00:00:00'),
(48, 'undefined', 'undefine', '1712.0905', '2018-01-08 11:31:20', '', '0000-00-00 00:00:00'),
(49, 'undefined', 'undefine', '1712.0905', '2018-01-08 11:31:22', '', '0000-00-00 00:00:00'),
(50, 'undefined', 'undefine', '1712.0905', '2018-01-08 11:31:23', '', '0000-00-00 00:00:00'),
(51, 'undefined', 'undefine', '1712.0905', '2018-01-08 11:32:26', '', '0000-00-00 00:00:00'),
(52, 'undefined', 'undefine', '1712.0905', '2018-01-08 11:32:30', '', '0000-00-00 00:00:00'),
(53, 'undefined', 'undefine', '1712.0905', '2018-01-08 11:32:32', '', '0000-00-00 00:00:00'),
(54, 'undefined', 'undefine', '1712.0905', '2018-01-08 11:34:05', '', '0000-00-00 00:00:00'),
(55, 'undefined', 'undefine', '1712.0905', '2018-01-08 11:34:21', '', '0000-00-00 00:00:00'),
(56, 'undefined', 'undefine', '1712.0905', '2018-01-08 11:34:32', '', '0000-00-00 00:00:00'),
(57, 'undefined', 'undefine', '1712.0905', '2018-01-08 11:35:06', '', '0000-00-00 00:00:00'),
(58, 'undefined', 'undefine', '1712.0905', '2018-01-08 11:35:12', '', '0000-00-00 00:00:00'),
(59, 'undefined', 'undefine', '1712.0905', '2018-01-08 11:35:14', '', '0000-00-00 00:00:00'),
(60, 'undefined', 'undefine', '1712.0905', '2018-01-08 11:35:52', '', '0000-00-00 00:00:00'),
(61, 'undefined', 'undefine', '1712.0905', '2018-01-08 11:36:29', '', '0000-00-00 00:00:00'),
(62, 'undefined', 'undefine', '1712.0905', '2018-01-08 11:36:45', '', '0000-00-00 00:00:00'),
(63, 'undefined', 'undefine', '1712.0905', '2018-01-08 11:36:51', '', '0000-00-00 00:00:00'),
(64, 'undefined', 'undefine', '1712.0905', '2018-01-08 11:37:14', '', '0000-00-00 00:00:00'),
(65, 'undefined', 'undefine', '1712.0905', '2018-01-08 11:37:29', '', '0000-00-00 00:00:00'),
(66, 'undefined', 'undefine', '1712.0905', '2018-01-08 11:39:14', '', '0000-00-00 00:00:00'),
(67, 'undefined', 'undefine', '1712.0905', '2018-01-08 11:39:16', '', '0000-00-00 00:00:00'),
(68, 'undefined', 'undefine', '1712.0905', '2018-01-08 11:39:19', '', '0000-00-00 00:00:00'),
(69, 'undefined', 'undefine', '1712.0905', '2018-01-08 11:39:44', '', '0000-00-00 00:00:00'),
(70, 'undefined', 'undefine', '1712.0905', '2018-01-08 11:40:03', '', '0000-00-00 00:00:00'),
(71, 'undefined', 'undefine', '1712.0905', '2018-01-08 12:06:24', '', '0000-00-00 00:00:00'),
(72, 'undefined', 'undefine', '1712.0905', '2018-01-08 12:07:48', '', '0000-00-00 00:00:00'),
(73, 'undefined', 'undefine', '1712.0905', '2018-01-08 12:17:27', '', '0000-00-00 00:00:00'),
(74, 'undefined', 'undefine', '1712.0905', '2018-01-08 14:14:10', '', '0000-00-00 00:00:00'),
(75, 'undefined', 'undefine', '1712.0905', '2018-01-08 14:14:12', '', '0000-00-00 00:00:00'),
(76, 'undefined', 'undefine', '1712.0905', '2018-01-08 14:14:14', '', '0000-00-00 00:00:00'),
(77, 'undefined', 'undefine', '1712.0905', '2018-01-08 14:14:15', '', '0000-00-00 00:00:00'),
(78, 'undefined', 'undefine', '1712.0905', '2018-01-08 14:15:09', '', '0000-00-00 00:00:00'),
(79, 'undefined', 'undefine', '1712.0905', '2018-01-08 14:15:11', '', '0000-00-00 00:00:00'),
(80, 'undefined', 'undefine', '1712.0905', '2018-01-08 14:17:34', '', '0000-00-00 00:00:00'),
(81, 'undefined', 'undefine', '1712.0905', '2018-01-08 14:17:35', '', '0000-00-00 00:00:00'),
(82, 'undefined', 'undefine', '1712.0905', '2018-01-08 14:17:36', '', '0000-00-00 00:00:00'),
(83, 'undefined', 'undefine', '1712.0905', '2018-01-08 14:17:38', '', '0000-00-00 00:00:00'),
(84, 'undefined', 'undefine', '1712.0905', '2018-01-08 14:18:01', '', '0000-00-00 00:00:00'),
(85, 'undefined', 'undefine', '1712.0905', '2018-01-08 14:18:57', '', '0000-00-00 00:00:00'),
(86, 'undefined', 'undefine', '1712.0905', '2018-01-08 14:19:32', '', '0000-00-00 00:00:00'),
(87, 'undefined', 'undefine', '1712.0905', '2018-01-08 14:19:34', '', '0000-00-00 00:00:00'),
(88, 'undefined', 'undefine', '1712.0905', '2018-01-08 14:20:17', '', '0000-00-00 00:00:00'),
(89, 'undefined', 'undefine', '1712.0905', '2018-01-08 14:20:19', '', '0000-00-00 00:00:00'),
(90, 'undefined', 'undefine', '1712.0905', '2018-01-08 14:20:20', '', '0000-00-00 00:00:00'),
(91, 'undefined', 'undefine', '1712.0905', '2018-01-08 14:20:22', '', '0000-00-00 00:00:00'),
(92, 'undefined', 'undefine', '1712.0905', '2018-01-08 14:20:25', '', '0000-00-00 00:00:00'),
(93, 'undefined', 'undefine', '1712.0905', '2018-01-08 14:20:34', '', '0000-00-00 00:00:00'),
(94, 'undefined', 'undefine', '1712.0905', '2018-01-08 14:20:37', '', '0000-00-00 00:00:00'),
(95, 'undefined', 'undefine', '1712.0905', '2018-01-08 14:20:48', '', '0000-00-00 00:00:00'),
(96, 'undefined', 'undefine', '1712.0905', '2018-01-08 14:20:49', '', '0000-00-00 00:00:00'),
(97, 'undefined', 'undefine', '1712.0905', '2018-01-08 14:20:50', '', '0000-00-00 00:00:00'),
(98, 'undefined', 'undefine', '1712.0905', '2018-01-08 14:20:51', '', '0000-00-00 00:00:00'),
(99, 'undefined', 'undefine', '1712.0905', '2018-01-08 14:20:52', '', '0000-00-00 00:00:00'),
(100, 'undefined', 'undefine', '1712.0905', '2018-01-08 14:20:53', '', '0000-00-00 00:00:00'),
(101, 'undefined', 'undefine', '1712.0905', '2018-01-08 14:20:53', '', '0000-00-00 00:00:00'),
(102, 'undefined', 'undefine', '1712.0905', '2018-01-08 14:20:53', '', '0000-00-00 00:00:00'),
(103, 'undefined', 'undefine', '1712.0905', '2018-01-08 14:20:53', '', '0000-00-00 00:00:00'),
(104, 'undefined', 'undefine', '1712.0905', '2018-01-08 14:20:54', '', '0000-00-00 00:00:00'),
(105, 'undefined', 'undefine', '1712.0905', '2018-01-08 14:20:54', '', '0000-00-00 00:00:00'),
(106, 'undefined', 'undefine', '1712.0905', '2018-01-08 14:20:56', '', '0000-00-00 00:00:00'),
(107, 'undefined', 'undefine', '1712.0905', '2018-01-08 14:20:58', '', '0000-00-00 00:00:00'),
(108, 'undefined', 'undefine', '1712.0905', '2018-01-08 14:20:59', '', '0000-00-00 00:00:00'),
(109, 'undefined', 'undefine', '1712.0905', '2018-01-08 14:21:01', '', '0000-00-00 00:00:00'),
(110, 'undefined', 'undefine', '1712.0905', '2018-01-08 14:21:02', '', '0000-00-00 00:00:00'),
(111, 'undefined', 'undefine', '1712.0905', '2018-01-08 14:21:04', '', '0000-00-00 00:00:00'),
(112, 'undefined', 'undefine', '1712.0905', '2018-01-08 14:21:43', '', '0000-00-00 00:00:00'),
(113, 'undefined', 'undefine', '1712.0905', '2018-01-08 14:21:45', '', '0000-00-00 00:00:00'),
(114, 'undefined', 'undefine', '1712.0905', '2018-01-08 14:21:56', '', '0000-00-00 00:00:00'),
(115, 'undefined', 'undefine', '1712.0905', '2018-01-08 14:21:58', '', '0000-00-00 00:00:00'),
(116, 'undefined', 'undefine', '1712.0905', '2018-01-08 14:21:59', '', '0000-00-00 00:00:00'),
(117, 'undefined', 'undefine', '1712.0905', '2018-01-08 14:22:00', '', '0000-00-00 00:00:00'),
(118, 'undefined', 'undefine', '1712.0905', '2018-01-08 14:22:01', '', '0000-00-00 00:00:00'),
(119, 'undefined', 'undefine', '1712.0905', '2018-01-08 14:22:03', '', '0000-00-00 00:00:00'),
(120, 'undefined', 'undefine', '1712.0905', '2018-01-08 14:22:06', '', '0000-00-00 00:00:00'),
(121, 'undefined', 'undefine', '1712.0905', '2018-01-08 14:22:07', '', '0000-00-00 00:00:00'),
(122, 'undefined', 'undefine', '1712.0905', '2018-01-08 14:22:08', '', '0000-00-00 00:00:00'),
(123, 'undefined', 'undefine', '1712.0905', '2018-01-08 14:32:09', '', '0000-00-00 00:00:00'),
(124, 'undefined', 'undefine', '1712.0905', '2018-01-08 14:33:43', '', '0000-00-00 00:00:00'),
(125, 'undefined', 'undefine', '1712.0905', '2018-01-08 14:43:41', '', '0000-00-00 00:00:00'),
(126, 'undefined', 'undefine', '1712.0905', '2018-01-08 14:45:58', '', '0000-00-00 00:00:00'),
(127, 'undefined', 'undefine', '1712.0905', '2018-01-08 14:47:26', '', '0000-00-00 00:00:00'),
(128, 'undefined', 'undefine', '1712.0905', '2018-01-08 14:49:27', '', '0000-00-00 00:00:00'),
(129, 'undefined', 'undefine', '1712.0905', '2018-01-08 14:50:14', '', '0000-00-00 00:00:00'),
(130, 'undefined', 'undefine', '1712.0905', '2018-01-08 14:51:31', '', '0000-00-00 00:00:00'),
(131, 'undefined', 'undefine', '1712.0905', '2018-01-08 15:03:12', '', '0000-00-00 00:00:00'),
(132, 'undefined', 'undefine', '1712.0905', '2018-01-08 15:04:15', '', '0000-00-00 00:00:00'),
(133, 'undefined', 'undefine', '1712.0905', '2018-01-08 15:05:02', '', '0000-00-00 00:00:00'),
(134, 'undefined', 'undefine', '1712.0905', '2018-01-08 15:06:10', '', '0000-00-00 00:00:00'),
(135, 'undefined', 'undefine', '1712.0905', '2018-01-08 15:07:00', '', '0000-00-00 00:00:00'),
(136, 'undefined', 'undefine', '1712.0905', '2018-01-08 15:07:37', '', '0000-00-00 00:00:00'),
(137, 'undefined', 'undefine', '1712.0905', '2018-01-08 15:08:32', '', '0000-00-00 00:00:00'),
(138, 'undefined', 'undefine', '1712.0905', '2018-01-08 15:11:47', '', '0000-00-00 00:00:00'),
(139, 'undefined', 'undefine', '1712.0905', '2018-01-08 15:22:49', '', '0000-00-00 00:00:00'),
(140, 'undefined', 'undefine', '1712.0905', '2018-01-08 15:26:19', '', '0000-00-00 00:00:00'),
(141, 'undefined', 'undefine', '1712.0905', '2018-01-08 15:26:22', '', '0000-00-00 00:00:00'),
(142, 'undefined', 'undefine', '1712.0905', '2018-01-08 15:26:31', '', '0000-00-00 00:00:00'),
(143, 'undefined', 'undefine', '1712.0905', '2018-01-08 15:50:00', '', '0000-00-00 00:00:00'),
(144, 'undefined', 'undefine', '1712.0905', '2018-01-08 15:50:05', '', '0000-00-00 00:00:00'),
(145, 'undefined', 'undefine', '1712.0905', '2018-01-08 15:50:07', '', '0000-00-00 00:00:00'),
(146, 'undefined', 'undefine', '1712.0905', '2018-01-08 15:50:09', '', '0000-00-00 00:00:00'),
(147, 'undefined', 'undefine', '1712.0905', '2018-01-08 15:50:23', '', '0000-00-00 00:00:00'),
(148, 'undefined', 'undefine', '1712.0905', '2018-01-08 15:51:52', '', '0000-00-00 00:00:00'),
(149, 'undefined', 'undefine', '1712.0905', '2018-01-08 15:54:21', '', '0000-00-00 00:00:00'),
(150, 'undefined', 'undefine', '1712.0905', '2018-01-08 15:54:47', '', '0000-00-00 00:00:00'),
(151, 'undefined', 'undefine', '1712.0905', '2018-01-08 15:55:24', '', '0000-00-00 00:00:00'),
(152, 'undefined', 'undefine', '1712.0905', '2018-01-08 15:56:21', '', '0000-00-00 00:00:00'),
(153, 'undefined', 'undefine', '1712.0905', '2018-01-08 16:00:42', '', '0000-00-00 00:00:00'),
(154, '1712.0905', '10000003', '1712.0905', '2018-01-08 16:14:05', '', '0000-00-00 00:00:00'),
(155, '1712.0909', '10000003', '1712.0905', '2018-01-08 16:38:06', '', '0000-00-00 00:00:00'),
(156, '1712.0917', '10000003', '1712.0905', '2018-01-08 16:39:20', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `datafile`
--

CREATE TABLE `datafile` (
  `kode_file` int(5) NOT NULL,
  `nip` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `nama_file` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `gambar` text COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `datafile`
--

INSERT INTO `datafile` (`kode_file`, `nip`, `nama_file`, `gambar`) VALUES
(1, '1305.0223', 'Ijazah', '1305.0223_Koala.jpg'),
(2, '1305.0223', 'Foto', '1305.0223_Koala.jpg'),
(3, '1305.0224', 'Dokumen CV', '1305.0224_Koala.jpg'),
(4, '1305.0223', 'Copy KTP', '1305.0223_LAPORAN KEUANGAN KEGIATAN FAS 2017.pdf'),
(5, '1305.0223', 'Dokumen CV', '1305.0223_SK. TUNJANGAN GL - DES 2017.doc');

-- --------------------------------------------------------

--
-- Table structure for table `ms_menu`
--

CREATE TABLE `ms_menu` (
  `id_menu` varchar(5) NOT NULL,
  `judul` varchar(45) DEFAULT NULL,
  `folder` varchar(30) DEFAULT NULL,
  `link` varchar(45) DEFAULT NULL,
  `id_akses` int(3) DEFAULT NULL,
  `parent` smallint(3) DEFAULT NULL,
  `icon` varchar(45) DEFAULT NULL,
  `urut` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ms_menu`
--

INSERT INTO `ms_menu` (`id_menu`, `judul`, `folder`, `link`, `id_akses`, `parent`, `icon`, `urut`) VALUES
('1', 'MASTER DATA', 'master', 'master', 1, 0, 'pe-7s-server', 1),
('10', 'Data Cuti', 'cuti', 'cuti', 1, 9, ' pe-7s-coffee', 1),
('13', 'Jadwal Training', 'training', 'training', 0, 6, 'pe-7s-graph1', 3),
('14', 'SETTING', 'setiing', 'setiing', 0, 0, 'pe-7s-config', 5),
('15', 'Akun', 'akun', 'akun', 1, 14, ' pe-7s-users', 1),
('16', 'Akses', 'akses', 'akses', 1, 14, ' pe-7s-key', 5),
('17', 'Posisi', 'posisi', 'posisi', 1, 1, ' pe-7s-map', 6),
('18', 'Unit Kerja', 'unit_kerja', 'unit', 1, 1, ' pe-7s-culture', 6),
('19', 'Pendidikan', 'pendidikan', 'pendidikan', 1, 20, 'pe-7s-study', 7),
('2', 'Calon Pegawai', 'Pgw', 'pegawai', 2, 20, 'pe-7s-plane', 1),
('20', 'PEGAWAI', 'pegawai', '#', 0, 0, 'pe-7s-users', 2),
('21', 'Data pegawai', 'pgw', 'pgw', 1, 20, 'pe-7s-id', 0),
('3', 'Menu', 'menu', 'menu', 1, 14, ' pe-7s-menu', 2),
('4', 'Provider', 'provider', 'provider', 1, 1, 'pe-7s-cloud-upload', 3),
('5', 'Jabatan', 'jabatan', 'jabatan', 1, 1, ' pe-7s-culture', 4),
('6', 'TRAINING', 'training', 'training', 0, 0, 'pe-7s-graph1', 2),
('7', 'Data Training', 'training', 'training', 1, 6, ' pe-7s-graph3', 1),
('8', 'Apsensi Training', 'apsen', 'apsen', 1, 6, 'pe-7s-copy-file', 2),
('9', 'DATA CUTI', 'cuti', 'cuti', 0, 0, ' pe-7s-date', 3);

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `nip` varchar(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jekel` varchar(2) NOT NULL,
  `kota_lahir` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `id_unit` int(5) NOT NULL,
  `id_posisi` int(5) NOT NULL,
  `id_provider` int(5) NOT NULL,
  `tmt_kerja` date NOT NULL,
  `jenis_kontrak` varchar(20) NOT NULL,
  `cabang` varchar(20) NOT NULL,
  `stat_peg` varchar(20) NOT NULL,
  `jw_kerja` date NOT NULL,
  `pend_terakhir` varchar(10) NOT NULL,
  `prodi` varchar(30) NOT NULL,
  `thn_lulus` int(4) NOT NULL,
  `aktif` varchar(20) NOT NULL,
  `tgl_aktif` date NOT NULL,
  `note_aktif` varchar(100) NOT NULL,
  `id_akses` int(3) NOT NULL,
  `password` varchar(255) NOT NULL,
  `i_by` varchar(15) NOT NULL,
  `i_date` datetime NOT NULL,
  `e_by` varchar(15) NOT NULL,
  `e_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`nip`, `nama`, `jekel`, `kota_lahir`, `tgl_lahir`, `alamat`, `no_hp`, `id_unit`, `id_posisi`, `id_provider`, `tmt_kerja`, `jenis_kontrak`, `cabang`, `stat_peg`, `jw_kerja`, `pend_terakhir`, `prodi`, `thn_lulus`, `aktif`, `tgl_aktif`, `note_aktif`, `id_akses`, `password`, `i_by`, `i_date`, `e_by`, `e_date`) VALUES
('1301.0107', 'Hasan Setiawan', 'L', 'Jakarta', '2018-01-30', 'Cikupa mas tangerang', '085715887704', 4, 3, 9001, '2018-01-30', 'SDM', 'CGO', 'OS', '2018-01-23', 'Aktif', '1900-12-28', 0, 'ef17b854d676e48ffdfe', '1210-04-10', '2017-12-21 15:06:50', 1712, '2018-01-08 09:15:00', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
('1305.0223', 'Zaki Akbar', 'L', 'JAKARTA', '2018-01-29', '-', '02159309136', 7, 7, 9004, '2018-01-08', 'SDM', 'CGO', 'OS', '2018-01-08', 'S1', 'TEKNIK', 2010, 'Aktif', '0000-00-00', '', 1, '5b6ed43161d0f822abca1ea2ce05cf8d', '12100410', '2017-12-28 08:59:39', '1712.0905', '2018-01-08 11:55:05'),
('1305.0224', 'Sutisna', 'L', 'aceh', '2018-01-31', '-', '', 4, 3, 9001, '2018-01-30', 'SDM', 'CGO', 'OS', '2018-01-15', 'S1', 'AKUNTASI', 2010, 'Aktif', '0000-00-00', 'aceh', 1, '764ac49220d465e2ca57a6273e24062e', '12100410', '2017-12-21 15:06:50', '1712.0905', '2018-01-08 09:45:29'),
('1712.0905', 'Hendri Yulianto', 'L', 'Rejo Agung', '1992-05-14', 'KP. GEBANG RT. 002/002 TANGERANG', '', 4, 5, 9001, '2017-12-05', 'SDM', 'CGO', 'OS', '2020-12-05', 'D3', 'TEKNIK KOMPUTER', 2011, 'Aktif', '2018-05-14', 'Resign', 1, '74a71e525cb83b70c44f8e1b7b644ff4', '12100410', '2017-12-28 08:58:33', '1712.0905', '2018-01-08 09:47:20'),
('1712.0906', 'Sudarmono', 'L', 'Jakarta', '2018-01-30', 'Cibodas', '', 3, 4, 9003, '2018-01-23', 'SDM', 'CGO', 'OS', '2018-01-16', 'SMK/A', 'IPA', 2010, 'Aktif', '0000-00-00', '-', 3, 'ef17b854d676e48ffdfe481a2e7da6eb', '12100410', '2017-12-27 08:19:53', '1712.0905', '2018-01-08 10:26:26'),
('1712.0907', 'Dwi Santoso', 'L', 'Tangerang', '2018-01-23', 'Kp. Gebang RT. 002/002', '', 2, 4, 9003, '2018-01-23', 'SDM', 'CGO', 'OS', '2018-01-10', 'D3', 'PAJAK', 2011, 'Aktif', '0000-00-00', '-', 1, '8a18484752c7e9ba08a7173797416cd0', '12100410', '2017-12-27 08:19:53', '1712.0905', '2018-01-08 10:26:37'),
('1712.0908', 'Soleh Mauludin', 'L', 'Jakarta', '2018-01-23', 'Kp. Gebang RT. 002/002', '', 2, 3, 9002, '2018-01-24', 'SDM', 'CGO', 'OS', '2018-01-16', 'S1', '', 0, 'Aktif', '0000-00-00', '-', 2, '8a18484752c7e9ba08a7173797416cd0', '12100410', '2017-12-21 15:06:50', '1712.0905', '2018-01-08 11:55:50'),
('1712.0909', 'Kuncoro Di Aji', 'L', 'Jakarta', '2018-01-16', '-', '', 3, 5, 9003, '2018-01-24', 'SDM', 'CGO', 'OS', '2018-01-17', 'S1', '', 0, 'Aktif', '0000-00-00', '-', 2, '013a28fce062010f1185e357c4c0d2b0', '12100410', '2017-12-28 08:58:33', '1712.0905', '2018-01-08 16:17:45'),
('1712.0910', 'Hasan Basri', 'L', 'Tangerang', '2018-01-23', '-', '', 3, 4, 9002, '2018-01-24', 'SDM', 'CGO', 'OS', '2018-01-16', 'Aktif', '0000-00-00', 0, '8a18484752c7e9ba08a7', '1210-04-10', '2017-12-27 08:19:53', 1712, '2018-01-08 09:16:12', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
('1712.0911', 'Rahmad Septiansyah', 'L', 'Tangerang', '2018-01-23', 'Jakarta Selatan', '', 4, 4, 9003, '2018-01-24', 'SDM', 'CGO', 'OS', '2018-01-11', '', '', 0, 'Aktif', '0000-00-00', '-', 1, '8a18484752c7e9ba08a7173797416cd0', '1712.0905', '2018-01-05 15:28:52', 'undefined', '0000-00-00 00:00:00'),
('1712.0912', 'Vergiantoro', 'L', 'Jakarta', '2018-01-16', '-', '', 3, 6, 9002, '2018-01-24', 'SDM', 'CGO', 'OS', '2018-01-09', '', '', 0, 'Aktif', '0000-00-00', '-', 1, '013a28fce062010f1185e357c4c0d2b0', '1712.0905', '2018-01-05 15:29:34', 'undefined', '0000-00-00 00:00:00'),
('1712.0913', 'Dwi Maulana', 'L', 'JAKARTA', '2018-01-30', 'CIKOKOL TANGERANG BANTEN', '', 1, 7, 9001, '2017-12-26', 'SDM', 'CGO', 'OS', '2018-01-17', '', '', 0, 'Aktif', '1900-12-28', '-', 3, 'ef17b854d676e48ffdfe481a2e7da6eb', '12100410', '2017-12-28 08:59:39', '1712.0905', '2018-01-08 11:57:12'),
('1712.0914', 'ARIS SETYAWAN ', 'L', 'TANGERANG', '1991-05-14', 'KERONCONG PERMAI TANGERANG', '', 2, 6, 9001, '2018-01-31', 'SDM', 'CGO', 'OS', '2018-01-11', '', '', 0, 'Aktif', '0000-00-00', 'TANGERANG', 1, '625684cb33358c0f5583450760bf8070', '12100410', '2017-12-28 08:58:56', '1712.0905', '2018-01-08 08:24:30'),
('1712.0915', 'RATU DESNIAR A', 'P', 'PEREMPUAN', '2018-01-30', 'KOTA BUMI TANGERANG', '085125251478', 1, 3, 9001, '2018-01-31', 'SDM', 'CGO', 'OS', '2018-01-31', '', '', 0, 'Aktif', '0000-00-00', '', 1, 'ef17b854d676e48ffdfe481a2e7da6eb', '1712.0905', '2018-01-08 08:46:17', 'undefined', '0000-00-00 00:00:00'),
('1712.0916', 'ARI WILDAN', 'L', 'LAMPUNG', '2018-01-29', 'KP. GEBANG TANGERANG', '02159309136', 1, 2, 9001, '2018-01-31', 'SDM', 'CGO', 'OS', '2018-01-24', 'D3', 'MANAGEMENT', 2010, 'Aktif', '0000-00-00', '', 1, '5b6ed43161d0f822abca1ea2ce05cf8d', '12100410', '2017-12-21 15:06:34', '1712.0905', '2018-01-08 09:52:20'),
('1712.0917', 'YUSUF MAULANA', 'L', 'PADANG', '2018-01-30', 'PADANG BARAT ', '021593091354', 2, 3, 9002, '2018-01-24', 'SDM', 'CGO', 'OS', '2018-01-23', 'D4', 'AKUNTANSI', 2011, 'Aktif', '0000-00-00', '', 1, 'ef17b854d676e48ffdfe481a2e7da6eb', '1712.0905', '2018-01-08 10:03:44', 'undefined', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id_pend` varchar(10) NOT NULL,
  `nip` varchar(15) NOT NULL,
  `pend_terakhir` varchar(10) NOT NULL,
  `prodi` varchar(30) NOT NULL,
  `thn_lulus` int(4) NOT NULL,
  `pend_asal` varchar(50) NOT NULL,
  `i_by` varchar(15) NOT NULL,
  `i_date` datetime NOT NULL,
  `e_by` varchar(15) NOT NULL,
  `e_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendidikan`
--

INSERT INTO `pendidikan` (`id_pend`, `nip`, `pend_terakhir`, `prodi`, `thn_lulus`, `pend_asal`, `i_by`, `i_date`, `e_by`, `e_date`) VALUES
('1', '1305.0223', 'S1', 'Sastra Inggris', 2010, 'Univ Gajah Mada', '', '0000-00-00 00:00:00', '1301.0204', '2018-01-02 14:13:58'),
('10', '1712.0911', '', '', 0, '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
('11', '1712.0912', '', '', 0, '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
('12', '1712.0913', '', '', 0, '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
('13', '1712.0914', '', '', 0, '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
('14', '1712.0915', '', '', 0, '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
('2', '1301.0107', 'D3', 'Bahasa Belanda', 2010, 'LP31', '', '0000-00-00 00:00:00', '1301.0204', '2018-01-02 14:13:16'),
('3', '1305.0224', 'S1', 'Teknik Informatika', 2011, 'LP3i', '', '0000-00-00 00:00:00', '1301.0204', '2018-01-02 14:13:50'),
('4', '1712.0905', 'S1', 'Sistem Informasi', 2015, 'Universitas Esa Unggul', '', '0000-00-00 00:00:00', '1301.0107', '2018-01-05 08:15:09'),
('5', '1712.0906', '', '', 0, '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
('6', '1712.0907', '', '', 0, '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
('7', '1712.0908', '', '', 0, '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
('8', '1712.0909', '', '', 0, '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
('9', '1712.0910', '', '', 0, '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `posisi_kerja`
--

CREATE TABLE `posisi_kerja` (
  `id_posisi` int(5) NOT NULL,
  `nm_posisi` varchar(30) NOT NULL,
  `ket_posisi` varchar(50) NOT NULL,
  `i_by` varchar(15) NOT NULL,
  `i_date` datetime NOT NULL,
  `e_by` varchar(15) NOT NULL,
  `e_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posisi_kerja`
--

INSERT INTO `posisi_kerja` (`id_posisi`, `nm_posisi`, `ket_posisi`, `i_by`, `i_date`, `e_by`, `e_date`) VALUES
(1, 'Krani', 'Krani 2', '12100410', '2017-12-21 15:06:20', '1712.0905', '2018-01-08 08:57:13'),
(2, 'Kasir', 'Kasir', '12100410', '2017-12-21 15:06:34', '12100410', '2017-12-21 15:13:11'),
(3, 'Driver', 'Driver Porklip', '12100410', '2017-12-21 15:06:50', '12100410', '2017-12-21 15:10:39'),
(4, 'Hrd', 'Human Resource Departemen', '12100410', '2017-12-27 08:19:53', '12100410', '2017-12-28 09:02:39'),
(5, 'Fassar', 'Fassar', '12100410', '2017-12-28 08:58:33', '1217.0905', '2017-12-29 16:23:23'),
(6, 'Checker', 'Checker', '12100410', '2017-12-28 08:58:56', '1712.0905', '2018-01-06 23:01:42'),
(7, 'Acceptance', 'Acceptance', '12100410', '2017-12-28 08:59:39', '0', '0000-00-00 00:00:00'),
(8, 'Mechanic', 'Mechanic', '12100410', '2017-12-28 08:59:49', '0', '0000-00-00 00:00:00'),
(9, 'Group Leader Domestic', 'Group Leader Domestic', '12100410', '2017-12-28 09:00:04', '12100410', '2017-12-28 09:13:48'),
(10, 'Assisten SVP Kasir', 'Assisten SVP  Kasir', '12100410', '2017-12-28 09:00:13', '12100410', '2017-12-28 09:13:02'),
(11, 'Staff Traffic V', 'Staff Traffic VN', '12100410', '2017-12-28 09:00:27', '0', '0000-00-00 00:00:00'),
(12, 'staff  IT', 'staff  IT', '12100410', '2017-12-28 09:00:37', '0', '0000-00-00 00:00:00'),
(13, 'Staff PDE', 'Staff PDE', '12100410', '2017-12-28 09:00:49', '0', '0000-00-00 00:00:00'),
(14, 'Staff Pajak', 'Staff Pajak', '12100410', '2017-12-28 09:01:20', '0', '0000-00-00 00:00:00'),
(15, 'Checker Import ', 'Checker Import MU', '12100410', '2017-12-28 09:01:31', '0', '0000-00-00 00:00:00'),
(16, 'Staff Docpross', 'Staff Docpross', '12100410', '2017-12-28 09:01:48', '0', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `provider`
--

CREATE TABLE `provider` (
  `id_provider` varchar(4) NOT NULL,
  `nama_provider` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telpon` varchar(12) NOT NULL,
  `web` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `direktur` varchar(50) NOT NULL,
  `i_by` varchar(15) NOT NULL,
  `i_date` datetime NOT NULL,
  `e_by` varchar(15) NOT NULL,
  `e_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `provider`
--

INSERT INTO `provider` (`id_provider`, `nama_provider`, `alamat`, `telpon`, `web`, `email`, `direktur`, `i_by`, `i_date`, `e_by`, `e_date`) VALUES
('9001', 'PT. Dinamika P', '-', '-', '-', '-', '-', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00'),
('9002', 'PT. Dahlia Tama', '-', '-', '-', '-', '-', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00'),
('9003', 'PT. Dutagaruda', '-', '-', '-', '-', '-', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00'),
('9004', 'PT. Gapura A', '-', '-', '-', '-', '-', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `training`
--

CREATE TABLE `training` (
  `id_training` varchar(8) NOT NULL,
  `nama_training` varchar(100) NOT NULL,
  `penyelenggara` varchar(100) NOT NULL,
  `instruktur` varchar(20) NOT NULL,
  `tgl_training` date NOT NULL,
  `durasi` int(5) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `ketua_kelas` varchar(20) NOT NULL,
  `stat_training` varchar(20) NOT NULL,
  `note_diklat` varchar(200) NOT NULL,
  `i_by` varchar(15) NOT NULL,
  `i_date` datetime NOT NULL,
  `e_by` varchar(15) NOT NULL,
  `e_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `training`
--

INSERT INTO `training` (`id_training`, `nama_training`, `penyelenggara`, `instruktur`, `tgl_training`, `durasi`, `lokasi`, `ketua_kelas`, `stat_training`, `note_diklat`, `i_by`, `i_date`, `e_by`, `e_date`) VALUES
('10000001', 'PELARIHAN K3', 'GLC', 'ABAS S', '2018-01-07', 4, '511', 'AHMAD K', 'Terjadwal', '', '1712.0905', '2018-01-07 17:31:28', '1712.0905', '2018-01-07 17:32:42'),
('10000002', 'SCURITY AWERNES', 'GLC', 'MAULANA', '2018-01-07', 4, '511', 'ABAS S', 'Terjadwal', '', '1712.0905', '2018-01-07 17:33:17', '', '0000-00-00 00:00:00'),
('10000003', 'IMPLEMENTASI CAHAYA', 'GLC', 'BASUKI P', '2018-01-07', 4, '511', 'AHMAD M', 'Selesai', '', '1712.0905', '2018-01-07 17:34:25', '1712.0905', '2018-01-07 17:34:33');

-- --------------------------------------------------------

--
-- Table structure for table `unit_kerja`
--

CREATE TABLE `unit_kerja` (
  `id_unit` int(3) NOT NULL,
  `nama_unit` varchar(50) NOT NULL,
  `ket_unit` varchar(50) NOT NULL,
  `i_by` varchar(15) NOT NULL,
  `i_date` datetime NOT NULL,
  `e_by` varchar(15) NOT NULL,
  `e_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unit_kerja`
--

INSERT INTO `unit_kerja` (`id_unit`, `nama_unit`, `ket_unit`, `i_by`, `i_date`, `e_by`, `e_date`) VALUES
(1, 'Fasilitas dan Sarana', 'Fasilitas dan Sarana', '12100410', '2017-12-21 16:41:57', '1712.0905', '2018-01-06 22:04:51'),
(2, 'Import 540', 'Import 540', '12100410', '2017-12-21 16:43:08', '12100410', '2017-12-22 08:23:57'),
(3, 'Driver Thai Chargo', 'Driver Thai Chargo 123', '12100410', '2017-12-22 08:23:33', '12100410', '2017-12-27 11:57:34'),
(4, 'Export MU', 'Export MU Bandara CGO', '12100410', '2017-12-22 08:24:21', '12100410', '2017-12-27 14:23:58'),
(5, 'Checker Import 540', 'Checker Import 540', '12100410', '2017-12-22 08:24:34', '12100410', '2017-12-28 08:05:22'),
(6, 'HRD', 'HRD', '1217.0905', '2017-12-29 15:22:33', '1217.0905', '2017-12-29 15:23:26'),
(7, 'Krani', 'Krani', '1217.0905', '2017-12-29 15:40:50', '1217.0905', '2017-12-29 15:40:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akses`
--
ALTER TABLE `akses`
  ADD PRIMARY KEY (`id_akses`);

--
-- Indexes for table `apsensi`
--
ALTER TABLE `apsensi`
  ADD PRIMARY KEY (`id_apsensi`);

--
-- Indexes for table `datafile`
--
ALTER TABLE `datafile`
  ADD PRIMARY KEY (`kode_file`);

--
-- Indexes for table `ms_menu`
--
ALTER TABLE `ms_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id_pend`);

--
-- Indexes for table `posisi_kerja`
--
ALTER TABLE `posisi_kerja`
  ADD PRIMARY KEY (`id_posisi`);

--
-- Indexes for table `provider`
--
ALTER TABLE `provider`
  ADD PRIMARY KEY (`id_provider`);

--
-- Indexes for table `training`
--
ALTER TABLE `training`
  ADD PRIMARY KEY (`id_training`);

--
-- Indexes for table `unit_kerja`
--
ALTER TABLE `unit_kerja`
  ADD PRIMARY KEY (`id_unit`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apsensi`
--
ALTER TABLE `apsensi`
  MODIFY `id_apsensi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;
--
-- AUTO_INCREMENT for table `datafile`
--
ALTER TABLE `datafile`
  MODIFY `kode_file` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
