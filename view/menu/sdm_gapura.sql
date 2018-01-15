-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2018 at 09:50 AM
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
  `sertifikat` text NOT NULL,
  `i_by` varchar(15) NOT NULL,
  `i_date` datetime NOT NULL,
  `e_by` varchar(15) NOT NULL,
  `e_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apsensi`
--

INSERT INTO `apsensi` (`id_apsensi`, `nip`, `id_training`, `sertifikat`, `i_by`, `i_date`, `e_by`, `e_date`) VALUES
(1, '1305.0224', '10001', '', '12100410', '2017-12-28 08:59:39', '1712.0905', '2018-01-11 11:06:53'),
(2, '1305.0223', '10001', '', '12100410', '2017-12-21 15:06:50', '1712.0905', '2018-01-11 11:10:56'),
(3, 'undefined', 'undefine', '', '1712.0905', '2018-01-11 13:26:43', '', '0000-00-00 00:00:00'),
(4, 'undefined', 'undefine', '', '1712.0905', '2018-01-11 16:13:02', '', '0000-00-00 00:00:00'),
(5, '1712.0905', '10001', '', '1712.0905', '2018-01-15 09:30:23', '', '0000-00-00 00:00:00'),
(6, '1712.0906', '10001', '', '1712.0905', '2018-01-15 09:30:28', '', '0000-00-00 00:00:00'),
(7, '1712.0907', '10001', '', '1712.0905', '2018-01-15 09:30:32', '', '0000-00-00 00:00:00'),
(8, '1712.0908', '10001', '', '1712.0905', '2018-01-15 09:30:37', '', '0000-00-00 00:00:00'),
(9, '1712.0909', '10001', '', '1712.0905', '2018-01-15 09:30:43', '', '0000-00-00 00:00:00'),
(10, '1712.0911', '10001', '', '1712.0905', '2018-01-15 09:30:48', '', '0000-00-00 00:00:00'),
(11, '1305.0223', '10002', '', '1712.0905', '2018-01-15 13:43:07', '', '0000-00-00 00:00:00'),
(12, '1305.0224', '10002', '', '1712.0905', '2018-01-15 13:43:11', '', '0000-00-00 00:00:00'),
(13, '1712.0905', '10002', '', '1712.0905', '2018-01-15 13:43:15', '', '0000-00-00 00:00:00'),
(14, '1712.0906', '10002', '', '1712.0905', '2018-01-15 13:43:19', '', '0000-00-00 00:00:00'),
(15, '1712.0907', '10002', '', '1712.0905', '2018-01-15 13:43:24', '', '0000-00-00 00:00:00'),
(16, '1712.0908', '10002', '', '1712.0905', '2018-01-15 13:43:29', '', '0000-00-00 00:00:00'),
(17, '1712.0909', '10002', '', '1712.0905', '2018-01-15 13:43:35', '', '0000-00-00 00:00:00'),
(18, '1712.0911', '10002', '', '1712.0905', '2018-01-15 13:43:43', '', '0000-00-00 00:00:00'),
(19, '1712.0912', '10002', '', '1712.0905', '2018-01-05 15:28:52', '1712.0905', '2018-01-15 13:44:03'),
(20, '1712.0912', '10002', '', '1712.0905', '2018-01-15 13:44:10', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `datafile`
--

CREATE TABLE `datafile` (
  `kode_file` int(5) NOT NULL,
  `nip` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `kat_file` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `nama_file` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `gambar` text COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `datafile`
--

INSERT INTO `datafile` (`kode_file`, `nip`, `kat_file`, `nama_file`, `gambar`) VALUES
(1, '1305.0223', 'Lain-Lain', 'Foto KTP 2', '1305.0223_LAPORAN PROGRES SISTEM HRD.pdf'),
(2, '1305.0223', 'Foto', 'FILE ZILAA', '1305.0223_2016 2.jpg'),
(3, '1305.0223', 'Lain-Lain', 'Foto KTP ', '1305.0223_kurang.PNG'),
(4, '1305.0224', 'Lain-Lain', 'IJAZAH', '1305.0224_ijazah.jpg'),
(5, '1305.0224', 'Foto', 'Foto', '1305.0224_image33.png'),
(6, '1712.0914', 'Foto', '-', '1712.0914_batik2.jpg');

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
('11', 'Laporan Pegawai', 'pgw', 'pgw_lap', 1, 20, 'pe-7s-key', 2),
('12', 'Data pegawai', 'pgw', 'pgw', 1, 20, 'pe-7s-id', 0),
('13', 'Laporan Training', 'training', 'training_lap', 1, 6, 'pe-7s-print', 3),
('14', 'SETTING', 'setiing', 'setiing', 1, 0, 'pe-7s-config', 6),
('15', 'Akun', 'akun', 'akun', 1, 14, ' pe-7s-users', 1),
('16', 'Akses', 'akses', 'akses', 1, 14, ' pe-7s-key', 5),
('17', 'Posisi', 'posisi', 'posisi', 1, 1, ' pe-7s-map', 6),
('18', 'Unit Kerja', 'unit_kerja', 'unit', 1, 1, ' pe-7s-culture', 6),
('19', 'DOK LEMBUR', '-', '-', 1, 0, 'pe-7s-target', 5),
('2', 'Pegawai Non Aktif', 'Pgw', 'pegawai', 1, 20, 'pe-7s-plane', 1),
('20', 'PEGAWAI', 'pegawai', '#', 0, 0, 'pe-7s-users', 2),
('21', 'Data Pegawai Aktif', 'pgw', 'pgw_show', 1, 20, 'pe-7s-plane', 1),
('22', 'Data SPL', 'spl', 'spl', 1, 19, 'pe-7s-timer', 1),
('23', 'Data Fingerprint', 'spl', 'finger', 1, 19, 'pe-7s-like2', 2),
('3', 'Menu', 'menu', 'menu', 1, 14, ' pe-7s-menu', 2),
('4', 'Provider', 'provider', 'provider', 1, 1, 'pe-7s-cloud-upload', 3),
('5', 'Jabatan', 'jabatan', 'jabatan', 1, 1, ' pe-7s-culture', 4),
('6', 'TRAINING', 'training', 'training', 1, 0, 'pe-7s-graph1', 3),
('7', 'Data Training', 'training', 'training', 1, 6, ' pe-7s-graph3', 1),
('8', 'Apsensi Training', 'apsen', 'apsen', 1, 6, 'pe-7s-copy-file', 2),
('9', 'DATA CUTI', 'cuti', 'cuti', 1, 0, ' pe-7s-date', 4);

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
('1305.0223', 'Zaki Akbar', 'L', 'JAKARTA', '2018-05-17', '-', '02159309136', 7, 7, 9004, '2018-05-24', 'SDM', 'CGO', 'OS', '2018-01-08', 'S1', 'TEKNIK', 2010, 'Aktif', '0000-00-00', '', 1, 'dc4722fc0026d1f1927183b8c9c6011d', '12100410', '2017-12-28 08:59:39', '1712.0905', '2018-01-12 15:19:14'),
('1305.0224', 'Sutisna', 'L', 'aceh', '2018-01-31', '-', '', 4, 3, 9001, '2018-02-07', 'SDM', 'CGO', 'OS', '2018-01-15', 'S1', 'AKUNTASI', 2010, 'Aktif', '0000-00-00', 'aceh', 1, '764ac49220d465e2ca57a6273e24062e', '12100410', '2017-12-21 15:06:50', '1712.0905', '2018-01-15 13:38:23'),
('1712.0905', 'Hendri Yulianto', 'L', 'Rejo Agung', '1992-05-14', 'KP. GEBANG RT. 002/002 TANGERANG', '', 4, 5, 9001, '2017-12-05', 'SDM', 'CGO', 'OS', '2020-12-05', 'D3', 'TEKNIK KOMPUTER', 2011, 'Non Aktif', '2018-05-14', 'Resign', 1, '74a71e525cb83b70c44f8e1b7b644ff4', '12100410', '2017-12-28 08:58:33', '1712.0905', '2018-01-12 15:18:16'),
('1712.0906', 'Sudarmono', 'L', 'Jakarta', '2018-01-30', 'Cibodas', '', 3, 4, 9003, '2018-01-23', 'SDM', 'CGO', 'OS', '2018-01-16', 'SMK/A', 'IPA', 2010, 'Non Aktif', '2018-05-14', '-', 3, 'ef17b854d676e48ffdfe481a2e7da6eb', '12100410', '2017-12-27 08:19:53', '1712.0905', '2018-01-12 15:18:35'),
('1712.0907', 'Dwi Santoso', 'L', 'Tangerang', '2018-01-23', 'Kp. Gebang RT. 002/002', '', 2, 4, 9003, '2018-01-23', 'SDM', 'CGO', 'OS', '2018-01-10', 'D3', 'PAJAK', 2011, 'Aktif', '0000-00-00', '-', 1, '8a18484752c7e9ba08a7173797416cd0', '12100410', '2017-12-27 08:19:53', '1712.0905', '2018-01-08 10:26:37'),
('1712.0908', 'Soleh Mauludin', 'L', 'Jakarta', '2018-01-23', 'Kp. Gebang RT. 002/002', '', 2, 3, 9002, '2018-01-24', 'SDM', 'CGO', 'OS', '2018-01-16', 'S1', '', 0, 'Aktif', '0000-00-00', '-', 2, '8a18484752c7e9ba08a7173797416cd0', '12100410', '2017-12-21 15:06:50', '1712.0905', '2018-01-08 11:55:50'),
('1712.0909', 'Kuncoro Di Aji', 'L', 'Jakarta', '2018-01-16', '-', '', 3, 5, 9003, '2018-01-24', 'SDM', 'CGO', 'OS', '2018-01-17', 'S1', 'Sistem Informasi', 2010, 'Aktif', '0000-00-00', '-', 2, '013a28fce062010f1185e357c4c0d2b0', '12100410', '2017-12-28 08:58:33', '1712.0905', '2018-01-09 11:46:42'),
('1712.0910', 'Hasan Basri', 'L', 'Tangerang', '2018-01-23', '-', '', 3, 4, 9002, '2018-01-24', 'SDM', 'CGO', 'OS', '2018-01-16', 'Aktif', '0000-00-00', 0, '8a18484752c7e9ba08a7', '1210-04-10', '2017-12-27 08:19:53', 1712, '2018-01-08 09:16:12', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
('1712.0911', 'Rahmad Septiansyah', 'L', 'Tangerang', '2018-01-23', 'Jakarta Selatan', '', 4, 4, 9003, '2018-01-24', 'SDM', 'CGO', 'OS', '2018-01-11', '', '', 0, 'Aktif', '0000-00-00', '-', 1, '8a18484752c7e9ba08a7173797416cd0', '1712.0905', '2018-01-05 15:28:52', 'undefined', '0000-00-00 00:00:00'),
('1712.0912', 'Vergiantoro', 'L', 'Jakarta', '2018-01-16', '-', '', 3, 6, 9002, '2018-01-24', 'SDM', 'CGO', 'OS', '2018-01-09', '', '', 0, 'Aktif', '0000-00-00', '-', 1, '013a28fce062010f1185e357c4c0d2b0', '1712.0905', '2018-01-05 15:29:34', 'undefined', '0000-00-00 00:00:00'),
('1712.0913', 'Dwi Maulana', 'L', 'JAKARTA', '2018-01-30', 'CIKOKOL TANGERANG BANTEN', '', 1, 7, 9001, '2017-12-26', 'SDM', 'CGO', 'OS', '2018-01-17', '', '', 0, 'Non Aktif', '0000-00-00', '-', 3, 'ef17b854d676e48ffdfe481a2e7da6eb', '12100410', '2017-12-28 08:59:39', '1712.0905', '2018-01-13 22:01:38'),
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
  `id_training` varchar(5) NOT NULL,
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
('10001', 'SMS', 'CGO', 'BUDI', '2017-11-14', 4, '511', 'ROBY', 'Selesai', '', '1712.0905', '2018-01-11 11:06:17', '1712.0905', '2018-01-15 15:50:12'),
('10002', 'SOSIALISASI BATTERY', 'GLC', 'AGUS RUSTAMSYAH', '2018-02-02', 8, '511', 'SUDIRMAN', 'Terjadwal', '', '1712.0905', '2018-01-15 13:41:25', '1712.0905', '2018-01-15 15:09:49'),
('10003', 'INITIAL BASIC CARGO', 'CGO', 'DIW MAULANA', '2018-01-15', 8, '511', 'AGUS DWI P', 'Terjadwal', '', '1712.0905', '2018-01-15 13:42:36', '', '0000-00-00 00:00:00'),
('10004', 'LIVE ANIMAL REGULATION SESI 1', 'CGO', 'EDI PRAMONO', '2018-02-15', 5, '511', 'SURYA', 'Terjadwal', '', '1712.0905', '2018-01-15 14:35:23', '1712.0905', '2018-01-15 14:35:52'),
('10005', 'LIVE ANIMAL REGULATION SESI 2', 'CGO', 'EDI PRAMONO', '2018-02-21', 4, '511', 'SUHENDAR', 'Selesai', '', '1712.0905', '2018-01-15 14:49:20', '1712.0905', '2018-01-15 15:50:19'),
('10006', 'UJIAN RECURRENT DG', 'CGO', 'HASAN SUTISNA', '2018-02-14', 4, '540', '-', 'Terjadwal', '', '1712.0905', '2018-01-15 14:49:50', '', '0000-00-00 00:00:00'),
('10007', 'TRAINING RECURRENT BASIC AVSEC', 'GARUDA', 'DWI SUSANTO', '2018-01-15', 4, 'GL CENTER', 'ANGGA DWI P', 'Terjadwal', '', '1712.0905', '2018-01-15 14:50:34', '1712.0905', '2018-01-15 14:50:54'),
('10008', 'UJIAN RECURRENT FORKLIFT', 'CGO', 'GUNAWAN E', '2018-03-01', 4, 'KELAS HRG', 'BAMBANG T', 'Terjadwal', '', '1712.0905', '2018-01-15 14:53:50', '', '0000-00-00 00:00:00'),
('10009', 'WORKSHOP KOREAN AIR', 'CGO', 'DWI MAULANA', '2018-03-09', 5, 'JCC', 'AHMAD K', 'Terjadwal', '', '1712.0905', '2018-01-15 14:54:36', '', '0000-00-00 00:00:00');

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
  MODIFY `id_apsensi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `datafile`
--
ALTER TABLE `datafile`
  MODIFY `kode_file` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
