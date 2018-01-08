-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 08 Jan 2018 pada 01.01
-- Versi Server: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sdm_gapura`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akses`
--

CREATE TABLE IF NOT EXISTS `akses` (
  `id_akses` varchar(3) NOT NULL,
  `nama_akses` varchar(20) NOT NULL,
  `ket_akses` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akses`
--

INSERT INTO `akses` (`id_akses`, `nama_akses`, `ket_akses`) VALUES
('1', 'No', 'No'),
('2', 'SPV Human Resource', 'SPV Human Resource'),
('3', 'Staff HRD', 'Staff HRD'),
('4', 'Staff Keuangan', 'Staff Keuangan 2'),
('5', 'Staff Pajak', 'Staff Pajak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `apsensi`
--

CREATE TABLE IF NOT EXISTS `apsensi` (
  `id_apsensi` int(10) NOT NULL,
  `nip` varchar(15) NOT NULL,
  `id_training` varchar(8) NOT NULL,
  `i_by` varchar(15) NOT NULL,
  `i_date` datetime NOT NULL,
  `e_by` varchar(15) NOT NULL,
  `e_date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `apsensi`
--

INSERT INTO `apsensi` (`id_apsensi`, `nip`, `id_training`, `i_by`, `i_date`, `e_by`, `e_date`) VALUES
(2, '1712.0905', '10000003', '1712.0905', '2018-01-07 17:38:07', '', '0000-00-00 00:00:00'),
(3, '1712.0910', '10000003', '1712.0905', '2018-01-07 17:38:13', '', '0000-00-00 00:00:00'),
(4, '1712.0911', '10000003', '1712.0905', '2018-01-07 17:38:20', '', '0000-00-00 00:00:00'),
(5, '1712.0907', '10000001', '1712.0905', '2018-01-07 17:38:53', '', '0000-00-00 00:00:00'),
(6, '1305.0223', '10000001', '1712.0905', '2018-01-07 17:39:01', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ms_menu`
--

CREATE TABLE IF NOT EXISTS `ms_menu` (
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
-- Dumping data untuk tabel `ms_menu`
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
-- Struktur dari tabel `ms_user`
--

CREATE TABLE IF NOT EXISTS `ms_user` (
  `username` varchar(15) NOT NULL,
  `id_jabatan` int(11) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `fullname` varchar(45) NOT NULL,
  `blokir` enum('Y','N') DEFAULT NULL,
  `picture` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=big5;

--
-- Dumping data untuk tabel `ms_user`
--

INSERT INTO `ms_user` (`username`, `id_jabatan`, `password`, `email`, `fullname`, `blokir`, `picture`) VALUES
('12100410', 1, '1ce9287a63e38534efb11b85339cbe59', 'hendrimamang@gmail.com', 'HENDRI Y', 'N', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE IF NOT EXISTS `pegawai` (
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
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`nip`, `nama`, `jekel`, `kota_lahir`, `tgl_lahir`, `alamat`, `id_unit`, `id_posisi`, `id_provider`, `tmt_kerja`, `jenis_kontrak`, `cabang`, `stat_peg`, `jw_kerja`, `aktif`, `note_aktif`, `id_akses`, `password`, `i_by`, `i_date`, `e_by`, `e_date`) VALUES
('1301.0107', 'Hasan Setiawan', 'L', 'Jakarta', '2018-01-30', 'Cikupa mas tangerang', 4, 3, 9001, '2018-01-30', 'SDM', 'CGO', 'OS', '2018-01-23', 'Aktif', 'Jakarta', 1, 'ef17b854d676e48ffdfe481a2e7da6eb', '12100410', '2017-12-21 15:06:50', '1712.0905', '2018-01-05 16:07:31'),
('1305.0223', 'Suhada', 'L', 'Jakarta', '2018-01-30', 'Cikupa Tangerang', 2, 2, 9003, '2018-01-30', 'SDM', 'CGO', 'OS', '2018-01-18', 'Aktif', '-', 1, 'ef17b854d676e48ffdfe481a2e7da6eb', '', '0000-00-00 00:00:00', '1301.0204', '2018-01-02 14:05:31'),
('1305.0224', 'Sutisna', 'L', 'aceh', '2018-01-31', '-', 4, 3, 9001, '2018-01-30', 'SDM', 'CGO', 'OS', '2018-01-15', 'Aktif', 'aceh', 1, '764ac49220d465e2ca57a6273e24062e', '12100410', '2017-12-21 15:06:50', '1712.0905', '2018-01-05 16:07:43'),
('1712.0905', 'Hendri Yulianto', 'L', 'Rejo Agung', '1992-05-14', 'KP. GEBANG RT. 002/002 TANGERANG', 4, 5, 9001, '2017-12-05', 'SDM', 'CGO', 'OS', '2020-12-05', 'Aktif', '-', 1, '74a71e525cb83b70c44f8e1b7b644ff4', '1301.0107', '2018-01-05 08:14:39', 'undefined', '0000-00-00 00:00:00'),
('1712.0906', 'Sudarmono', 'L', 'Jakarta', '2018-01-30', 'Cibodas', 3, 4, 9003, '2018-01-23', 'SDM', 'CGO', 'OS', '2018-01-16', 'Aktif', '-', 3, 'ef17b854d676e48ffdfe481a2e7da6eb', '1712.0905', '2018-01-05 14:25:30', 'undefined', '0000-00-00 00:00:00'),
('1712.0907', 'Dwi Santoso', 'L', 'Tangerang', '2018-01-23', 'Kp. Gebang RT. 002/002', 2, 4, 9003, '2018-01-23', 'SDM', 'CKG', 'OS', '2018-01-10', 'Aktif', '-', 1, '8a18484752c7e9ba08a7173797416cd0', '1712.0905', '2018-01-05 14:26:22', 'undefined', '0000-00-00 00:00:00'),
('1712.0908', 'Soleh Mauludin', 'L', 'Jakarta', '2018-01-23', 'Kp. Gebang RT. 002/002', 2, 3, 9002, '2018-01-24', 'PEKERJAAN', 'CKG', 'PKWT', '2018-01-16', 'Non Aktif', '-', 2, '8a18484752c7e9ba08a7173797416cd0', '1712.0905', '2018-01-05 14:31:49', 'undefined', '0000-00-00 00:00:00'),
('1712.0909', 'Kuncoro Di Aji', 'L', 'Jakarta', '2018-01-16', '-', 3, 5, 9003, '2018-01-24', 'SDM', 'CGO', 'OS', '2018-01-17', 'Aktif', '-', 2, '013a28fce062010f1185e357c4c0d2b0', '1712.0905', '2018-01-05 14:32:28', 'undefined', '0000-00-00 00:00:00'),
('1712.0910', 'Hasan Basri', 'L', 'Tangerang', '2018-01-23', '-', 3, 4, 9002, '2018-01-24', 'SDM', 'CGO', 'OS', '2018-01-16', 'Aktif', '', 1, '8a18484752c7e9ba08a7173797416cd0', '1712.0905', '2018-01-05 14:33:16', 'undefined', '0000-00-00 00:00:00'),
('1712.0911', 'Rahmad Septiansyah', 'L', 'Tangerang', '2018-01-23', 'Jakarta Selatan', 4, 4, 9003, '2018-01-24', 'SDM', 'CGO', 'OS', '2018-01-11', 'Aktif', '-', 1, '8a18484752c7e9ba08a7173797416cd0', '1712.0905', '2018-01-05 15:28:52', 'undefined', '0000-00-00 00:00:00'),
('1712.0912', 'Vergiantoro', 'L', 'Jakarta', '2018-01-16', '-', 3, 6, 9002, '2018-01-24', 'SDM', 'CGO', 'OS', '2018-01-09', 'Aktif', '-', 1, '013a28fce062010f1185e357c4c0d2b0', '1712.0905', '2018-01-05 15:29:34', 'undefined', '0000-00-00 00:00:00'),
('1712.0913', 'Bella Nugraha Wiguna', 'L', 'Tangerang', '2018-01-23', 'Cikupa Tangerang', 2, 4, 0, '2018-01-24', 'SDM', 'CGO', 'OS', '2018-01-23', 'Aktif', '-', 3, '8a18484752c7e9ba08a7173797416cd0', '1712.0905', '2018-01-05 15:47:17', 'undefined', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendidikan`
--

CREATE TABLE IF NOT EXISTS `pendidikan` (
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
-- Dumping data untuk tabel `pendidikan`
--

INSERT INTO `pendidikan` (`id_pend`, `nip`, `pend_terakhir`, `prodi`, `thn_lulus`, `pend_asal`, `i_by`, `i_date`, `e_by`, `e_date`) VALUES
('1', '1305.0223', 'S1', 'Sastra Inggris', 2010, 'Univ Gajah Mada', '', '0000-00-00 00:00:00', '1301.0204', '2018-01-02 14:13:58'),
('10', '1712.0911', '', '', 0, '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
('11', '1712.0912', '', '', 0, '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
('12', '1712.0913', '', '', 0, '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
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
-- Struktur dari tabel `posisi_kerja`
--

CREATE TABLE IF NOT EXISTS `posisi_kerja` (
  `id_posisi` int(5) NOT NULL,
  `nm_posisi` varchar(30) NOT NULL,
  `ket_posisi` varchar(50) NOT NULL,
  `i_by` varchar(15) NOT NULL,
  `i_date` datetime NOT NULL,
  `e_by` varchar(15) NOT NULL,
  `e_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `posisi_kerja`
--

INSERT INTO `posisi_kerja` (`id_posisi`, `nm_posisi`, `ket_posisi`, `i_by`, `i_date`, `e_by`, `e_date`) VALUES
(1, 'Krani', 'Krani', '12100410', '2017-12-21 15:06:20', '1217.0905', '2017-12-29 14:11:51'),
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
-- Struktur dari tabel `provider`
--

CREATE TABLE IF NOT EXISTS `provider` (
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
-- Dumping data untuk tabel `provider`
--

INSERT INTO `provider` (`id_provider`, `nama_provider`, `alamat`, `telpon`, `web`, `email`, `direktur`, `i_by`, `i_date`, `e_by`, `e_date`) VALUES
('9001', 'PT. Dinamika P', '-', '-', '-', '-', '-', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00'),
('9002', 'PT. Dahlia Tama', '-', '-', '-', '-', '-', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00'),
('9003', 'PT. Dutagaruda', '-', '-', '-', '-', '-', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00'),
('9004', 'PT. Gapura A', '-', '-', '-', '-', '-', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `training`
--

CREATE TABLE IF NOT EXISTS `training` (
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
-- Dumping data untuk tabel `training`
--

INSERT INTO `training` (`id_training`, `nama_training`, `penyelenggara`, `instruktur`, `tgl_training`, `durasi`, `lokasi`, `ketua_kelas`, `stat_training`, `note_diklat`, `i_by`, `i_date`, `e_by`, `e_date`) VALUES
('10000001', 'PELARIHAN K3', 'GLC', 'ABAS S', '2018-01-07', 4, '511', 'AHMAD K', 'Terjadwal', '', '1712.0905', '2018-01-07 17:31:28', '1712.0905', '2018-01-07 17:32:42'),
('10000002', 'SCURITY AWERNES', 'GLC', 'MAULANA', '2018-01-07', 4, '511', 'ABAS S', 'Terjadwal', '', '1712.0905', '2018-01-07 17:33:17', '', '0000-00-00 00:00:00'),
('10000003', 'IMPLEMENTASI CAHAYA', 'GLC', 'BASUKI P', '2018-01-07', 4, '511', 'AHMAD M', 'Selesai', '', '1712.0905', '2018-01-07 17:34:25', '1712.0905', '2018-01-07 17:34:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `unit_kerja`
--

CREATE TABLE IF NOT EXISTS `unit_kerja` (
  `id_unit` int(3) NOT NULL,
  `nama_unit` varchar(50) NOT NULL,
  `ket_unit` varchar(50) NOT NULL,
  `i_by` varchar(15) NOT NULL,
  `i_date` datetime NOT NULL,
  `e_by` varchar(15) NOT NULL,
  `e_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `unit_kerja`
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
  MODIFY `id_apsensi` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
