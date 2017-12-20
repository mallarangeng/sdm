-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2017 at 05:54 AM
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
('1', 'No AKses', 'No Akses'),
('2', 'SPV', 'Akses data untuk supervisor'),
('3', 'Manager', 'Akses Data untuk manager 2'),
('4', 'SPV Cargo 2', 'SPV Cargo 2'),
('5', 'SPV Pergudangan', 'SPV Pergudangan 2');

-- --------------------------------------------------------

--
-- Table structure for table `diklat`
--

CREATE TABLE `diklat` (
  `id_diklat` varchar(6) NOT NULL,
  `nama_diklat` varchar(100) NOT NULL,
  `penyelenggara` varchar(100) NOT NULL,
  `instruktur` varchar(20) NOT NULL,
  `tgl_diklat` date NOT NULL,
  `durasi` int(5) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `ketua_kelas` varchar(20) NOT NULL,
  `stat_diklat` varchar(20) NOT NULL,
  `note_diklat` varchar(200) NOT NULL,
  `input_by` int(10) NOT NULL,
  `input_date` datetime NOT NULL,
  `edit_by` int(10) NOT NULL,
  `edit_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diklat`
--

INSERT INTO `diklat` (`id_diklat`, `nama_diklat`, `penyelenggara`, `instruktur`, `tgl_diklat`, `durasi`, `lokasi`, `ketua_kelas`, `stat_diklat`, `note_diklat`, `input_by`, `input_date`, `edit_by`, `edit_date`) VALUES
('000001', 'Pelatihan K34', 'Pelatihan K34', 'Pelatihan K3', '2017-12-18', 3, '511', 'Pelatihan K3', 'berjalan', '', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
('000002', 'Perbaikan Pemerliharaan', 'Dwi Sekmono', 'Dwi Sekmono', '2017-12-18', 4, '511', 'Mahmud ST', 'berjalan', '', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
('000003', 'Training Teknik Pendingin AC', 'CGO', 'Edi Pramono', '2017-12-20', 4, '511', 'Edi Pramono', 'berjalan', '', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
('000004', 'Ujuan Recurrent Forklip', 'Gunawan', 'Gunawan', '2017-12-19', 1, '511', 'EDI PURNOMO', 'berjalan', '', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
('000005', 'Training Teknik Pendingin AC', 'CGO', 'Edi Pramono', '2017-12-20', 4, '511', 'SAIFUL BAHRI', 'berjalan', '', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
('000006', 'DG AWARENESS BATCH-1', 'CGO', 'BURHANUDDIN ', '2017-03-27', 2, '511', 'Komarudin', 'berjalan', '', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
('000007', 'Trainig Cargo Flash Warehouse System', 'CGO', 'Suharto Wagiman', '2017-07-14', 24, '511', 'Hendra', 'berjalan', '', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
('000008', 'UJIAN RECURRENT BASIC AVSEC', 'CGO', 'Damar Wulan', '2017-12-13', 4, '511', 'Hendro Sutoyo', 'berjalan', '', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
('000009', 'Trainig Cargo Flash Warehouse System', 'CGO', 'Duta', '1900-12-26', 4, '511', 'Nasir', 'berjalan', '', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
('000010', 'Trainig Cargo Flash Warehouse System', 'GLC', 'Joko Susilo', '1900-12-27', 3, 'Jakarta', 'Asep', 'berjalan', '', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
('T00011', 'xxx', 'xxxx', 'xxx', '2017-12-26', 3, 'xxxx', 'xxxxx', 'berjalan', '', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00');

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
('10', 'Data Cuti', 'cuti', 'cuti', 2, 9, '-', 1),
('11', 'AKTIVITAS', 'aktivitas', '', 2, 0, 'pe-7s-graph1', 0),
('12', 'Log Aktivitas', 'log', 'log', 0, 11, '-', 2),
('13', 'Jadwal Training', 'training', 'training', 0, 6, 'pe-7s-graph1', 3),
('14', 'SETTING', 'setiing', 'setiing', 0, 0, 'pe-7s-config', 5),
('15', 'Akun', 'akun', 'akun', 0, 14, '', 1),
('16', 'Akses', 'akses', 'akses', 2, 1, '-', 5),
('2', 'Pekerja', 'pekerja', 'pekerja', 0, 1, '-', 1),
('3', 'Menu', 'menu', 'menu', 0, 1, '-', 2),
('4', 'Provider', 'provider', 'provider', 0, 1, '-', 3),
('5', 'Jabatan', 'jabatan', 'jabatan', 0, 1, '-', 4),
('6', 'TRAINING', 'training', 'training', 0, 0, 'pe-7s-graph1', 2),
('7', 'Data Training', 'diklat', 'diklat', 0, 6, '-', 1),
('8', 'Apsensi Training', 'apsensi', 'apsensi', 0, 6, '-', 2),
('9', 'DATA CUTI', 'cuti', 'cuti', 0, 0, ' pe-7s-date', 3);

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
('12100410', 1, '1ce9287a63e38534efb11b85339cbe59', 'hendrimamang@gmail.com', 'HENDRI Y', 'N', NULL);

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
  `input_by` int(10) NOT NULL,
  `input_date` datetime NOT NULL,
  `edit_by` int(10) NOT NULL,
  `edit_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `provider`
--

INSERT INTO `provider` (`id_provider`, `nama_provider`, `alamat`, `telpon`, `web`, `email`, `direktur`, `input_by`, `input_date`, `edit_by`, `edit_date`) VALUES
('9001', 'PT. DINAMIKA PRIMA CARGO', '-', '-', '-', '-', '-', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
('9002', 'PT. DAHLIA TAMA CARGO', 'dddd', 'dddd', 'dddd', 'dddd', 'dddd', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
('9003', 'AAAeee', 'AAAeee', 'AAAeee', 'AAAeeee', 'AAAeeee', 'AAAeeee', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akses`
--
ALTER TABLE `akses`
  ADD PRIMARY KEY (`id_akses`);

--
-- Indexes for table `diklat`
--
ALTER TABLE `diklat`
  ADD PRIMARY KEY (`id_diklat`);

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

--
-- Indexes for table `provider`
--
ALTER TABLE `provider`
  ADD PRIMARY KEY (`id_provider`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
