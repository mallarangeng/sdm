-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2018 at 04:53 AM
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
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `nip` varchar(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jekel` varchar(2) NOT NULL,
  `kota_lahir` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `id_unit` int(5) NOT NULL,
  `id_posisi` int(5) NOT NULL,
  `id_provider` int(5) NOT NULL,
  `tmt_kerja` date NOT NULL,
  `jenis_kontrak` varchar(20) NOT NULL,
  `cabang` varchar(20) NOT NULL,
  `stat_peg` varchar(20) NOT NULL,
  `jw_kerja` date NOT NULL,
  `aktif` varchar(20) NOT NULL,
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

INSERT INTO `pegawai` (`nip`, `nama`, `jekel`, `kota_lahir`, `tgl_lahir`, `alamat`, `id_unit`, `id_posisi`, `id_provider`, `tmt_kerja`, `jenis_kontrak`, `cabang`, `stat_peg`, `jw_kerja`, `aktif`, `note_aktif`, `id_akses`, `password`, `i_by`, `i_date`, `e_by`, `e_date`) VALUES
('1301.0204', 'Hendri', 'L', 'TANGERANG', '2018-01-23', 'KP. GEBANG RT. 002/002 TANGERANG', 2, 3, 9003, '2018-01-24', 'SDM', 'CKG', 'PKWT', '2018-01-17', 'Non Aktif', 'AAAA', 1, '8a18484752c7e9ba08a7173797416cd0', '1217.0905', '2018-01-02 09:54:17', 'undefined', '0000-00-00 00:00:00'),
('1301.0205', 'Lasiman', 'L', 'TANGERANG', '2018-01-30', 'SUMATRA BARAT 2', 3, 4, 9004, '2018-01-30', 'PEKERJAAN', 'CGO', 'OS', '2018-01-10', 'Aktif', '', 1, 'ef17b854d676e48ffdfe481a2e7da6eb', '1217.0905', '2018-01-02 10:02:36', 'undefined', '0000-00-00 00:00:00'),
('1301.0206', 'Muh Hatta', 'L', 'Jakarta', '2018-01-16', 'KP. GEBANG RT. 002/002 TANGERANG', 4, 4, 9003, '2018-01-31', 'SDM', 'CGO', 'OS', '2018-01-10', 'Non Aktif', '-', 1, '013a28fce062010f1185e357c4c0d2b0', '1217.0905', '2018-01-02 10:09:07', 'undefined', '0000-00-00 00:00:00'),
('1301.0207', 'Luther', 'L', 'TANGERANG', '2018-01-30', 'SUMATRA BARAT 2', 2, 5, 9002, '2018-01-31', 'SDM', 'CGO', 'PKWT', '2018-01-09', 'Non Aktif', '-', 2, 'ef17b854d676e48ffdfe481a2e7da6eb', '1217.0905', '2018-01-02 10:12:07', 'undefined', '0000-00-00 00:00:00'),
('1301.0208', 'Bayu', 'L', 'Jakarta', '2018-01-30', 'SUMATRA BARAT 2', 2, 3, 9002, '2018-01-30', 'SDM', 'CGO', 'PKWT', '2018-01-10', 'Non Aktif', '-', 1, 'ef17b854d676e48ffdfe481a2e7da6eb', '1217.0905', '2018-01-02 10:15:33', 'undefined', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`nip`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
