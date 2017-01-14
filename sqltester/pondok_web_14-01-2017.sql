-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2017 at 02:47 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pondok_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `list_user`
--

CREATE TABLE `list_user` (
  `id_list_user` int(11) NOT NULL,
  `id_user` varchar(50) NOT NULL,
  `pass_user` varchar(50) NOT NULL,
  `level_user` varchar(1) NOT NULL,
  `blokir_user` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list_user`
--

INSERT INTO `list_user` (`id_list_user`, `id_user`, `pass_user`, `level_user`, `blokir_user`) VALUES
(1, 'rio', 'rio', '1', 'T'),
(3, 'rio1', 'rio', '2', 'T'),
(4, 'rio2', 'rio', '3', 'T');

-- --------------------------------------------------------

--
-- Table structure for table `mtest`
--

CREATE TABLE `mtest` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL COMMENT 'Nama Santri',
  `nm_pelajaran` varchar(100) NOT NULL COMMENT 'Nama Pelajaran',
  `n_ul1` double(5,2) NOT NULL,
  `n_ul2` double(5,2) NOT NULL,
  `n_uts` double(5,2) NOT NULL,
  `n_ul3` double(5,2) NOT NULL,
  `n_ul4` double(5,2) NOT NULL,
  `n_uas` double(5,2) NOT NULL,
  `n_semester` double(5,2) NOT NULL,
  `kelas` varchar(3) NOT NULL COMMENT 'Kelas ex: 1B, 1A',
  `tahun_semester` varchar(6) NOT NULL COMMENT '{Diisi 2 angka terakhir tahun}_{1 atau 2} ex: 1617_1, 1617_2'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mtest`
--

INSERT INTO `mtest` (`id`, `nama`, `nm_pelajaran`, `n_ul1`, `n_ul2`, `n_uts`, `n_ul3`, `n_ul4`, `n_uas`, `n_semester`, `kelas`, `tahun_semester`) VALUES
(1, 'dsaf', 'ddx', 87.00, 67.00, 87.00, 78.00, 87.00, 78.00, 89.00, '1A', '1617_1'),
(2, 'ccsd', 'ddx', 87.00, 67.00, 87.00, 88.00, 87.00, 78.00, 86.00, '1A', '1617_1'),
(3, 'csad', 'ddx', 87.00, 67.00, 87.00, 68.00, 87.00, 78.00, 84.00, '1B', '1617_1'),
(4, 'ffre', 'ddx', 87.00, 67.00, 87.00, 58.00, 87.00, 78.00, 82.00, '1B', '1617_1'),
(5, 'dsaf', 'ddx', 87.00, 67.00, 87.00, 48.00, 87.00, 78.00, 85.00, '1A', '1617_2'),
(6, 'ccsd', 'ddx', 87.00, 67.00, 87.00, 38.00, 87.00, 78.00, 81.00, '1A', '1617_2'),
(7, 'csad', 'ddx', 87.00, 67.00, 87.00, 28.00, 87.00, 78.00, 82.00, '1B', '1617_2'),
(8, 'ffre', 'ddx', 87.00, 67.00, 87.00, 18.00, 87.00, 78.00, 83.00, '1B', '1617_2'),
(9, 'dsaf', 'efv', 87.00, 67.00, 87.00, 78.00, 87.00, 78.00, 89.00, '1A', '1617_1'),
(10, 'ccsd', 'efv', 87.00, 67.00, 87.00, 88.00, 87.00, 78.00, 86.00, '1A', '1617_1'),
(11, 'csad', 'efv', 87.00, 67.00, 87.00, 68.00, 87.00, 78.00, 84.00, '1B', '1617_1'),
(12, 'ffre', 'efv', 87.00, 67.00, 87.00, 58.00, 87.00, 78.00, 82.00, '1B', '1617_1'),
(13, 'dsaf', 'efv', 87.00, 67.00, 87.00, 48.00, 87.00, 78.00, 85.00, '1A', '1617_2'),
(14, 'ccsd', 'efv', 87.00, 67.00, 87.00, 38.00, 87.00, 78.00, 81.00, '1A', '1617_2'),
(15, 'csad', 'efv', 87.00, 67.00, 87.00, 28.00, 87.00, 78.00, 82.00, '1B', '1617_2'),
(16, 'ffre', 'efv', 87.00, 67.00, 87.00, 18.00, 87.00, 78.00, 83.00, '1B', '1617_2'),
(17, 'dsaf', 'lkj', 87.00, 67.00, 87.00, 78.00, 87.00, 78.00, 89.00, '1A', '1617_1'),
(18, 'ccsd', 'lkj', 87.00, 67.00, 87.00, 88.00, 87.00, 78.00, 86.00, '1A', '1617_1'),
(19, 'csad', 'lkj', 87.00, 67.00, 87.00, 68.00, 87.00, 78.00, 84.00, '1B', '1617_1'),
(20, 'ffre', 'lkj', 87.00, 67.00, 87.00, 58.00, 87.00, 78.00, 82.00, '1B', '1617_1'),
(21, 'dsaf', 'lkj', 87.00, 67.00, 87.00, 48.00, 87.00, 78.00, 85.00, '1A', '1617_2'),
(22, 'ccsd', 'lkj', 87.00, 67.00, 87.00, 38.00, 87.00, 78.00, 81.00, '1A', '1617_2'),
(23, 'csad', 'lkj', 87.00, 67.00, 87.00, 28.00, 87.00, 78.00, 82.00, '1B', '1617_2'),
(24, 'ffre', 'lkj', 87.00, 67.00, 87.00, 18.00, 87.00, 78.00, 83.00, '1B', '1617_2');

-- --------------------------------------------------------

--
-- Table structure for table `td_bayanat`
--

CREATE TABLE `td_bayanat` (
  `id_bayanat` int(6) NOT NULL,
  `id_kelas_jadwal` int(6) NOT NULL,
  `tgl_ujian` date NOT NULL,
  `nis` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `nomor` int(4) NOT NULL,
  `nilai` float(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `td_bayanat`
--

INSERT INTO `td_bayanat` (`id_bayanat`, `id_kelas_jadwal`, `tgl_ujian`, `nis`, `nomor`, `nilai`) VALUES
(1, 1, '2017-01-03', '000111', 11, 60.00),
(2, 1, '2017-01-03', '000111', 11, 78.00),
(3, 1, '2017-01-13', '000111', 11, 70.00),
(4, 1, '2017-01-06', '000111', 70, 90.00),
(5, 1, '2017-01-13', '000111', 70, 100.00);

-- --------------------------------------------------------

--
-- Table structure for table `td_karyawan`
--

CREATE TABLE `td_karyawan` (
  `id_karyawan` int(4) NOT NULL,
  `id_jns_karyawan` int(2) NOT NULL,
  `id_jns_status` int(2) NOT NULL,
  `nama` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `nama_ar` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `tempat_lahir` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `no_sk` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tgl_sk` date NOT NULL,
  `tgl_awal` date NOT NULL,
  `tgl_akhir` date NOT NULL,
  `alamat` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `no_telp` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `no_telp2` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `td_karyawan`
--

INSERT INTO `td_karyawan` (`id_karyawan`, `id_jns_karyawan`, `id_jns_status`, `nama`, `nama_ar`, `tempat_lahir`, `tgl_lahir`, `no_sk`, `tgl_sk`, `tgl_awal`, `tgl_akhir`, `alamat`, `no_telp`, `no_telp2`, `email`) VALUES
(1, 1, 1, 'Karyawan', '', 'Jakarta', '2016-12-01', '', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `td_karyawan_kompentensi`
--

CREATE TABLE `td_karyawan_kompentensi` (
  `id_kopetensi` int(6) NOT NULL,
  `id_karyawan` int(4) NOT NULL,
  `id_jns_kompetensi` int(3) NOT NULL,
  `id_jns_pelajaran` int(3) NOT NULL,
  `id_jns_skill` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `td_karyawan_pendidikan`
--

CREATE TABLE `td_karyawan_pendidikan` (
  `id_pendidikan` int(5) NOT NULL,
  `id_jns_pendidikan` int(3) NOT NULL,
  `nama_pendidikan` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nama_lembaga` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `td_kelas`
--

CREATE TABLE `td_kelas` (
  `id_kelas` int(4) NOT NULL,
  `id_ta` int(3) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `tgl_awal` date NOT NULL,
  `tgl_akhir` date NOT NULL,
  `id_jns_kelas` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `td_kelas`
--

INSERT INTO `td_kelas` (`id_kelas`, `id_ta`, `jumlah`, `tgl_awal`, `tgl_akhir`, `id_jns_kelas`) VALUES
(1, 1, 30, '0000-00-00', '0000-00-00', '1');

-- --------------------------------------------------------

--
-- Table structure for table `td_kelas_dtl`
--

CREATE TABLE `td_kelas_dtl` (
  `id_kelas_dtl` int(6) NOT NULL,
  `id_kelas` int(4) NOT NULL,
  `nis` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `td_kelas_jadwal`
--

CREATE TABLE `td_kelas_jadwal` (
  `id_kelas_jadwal` int(6) NOT NULL,
  `semester` int(1) NOT NULL,
  `id_jns_pelajaran` int(3) NOT NULL,
  `id_kelas` int(4) NOT NULL,
  `tgl_ujian` date DEFAULT NULL,
  `id_jns_jadwal` int(3) NOT NULL,
  `id_ruangan` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `td_kelas_jadwal`
--

INSERT INTO `td_kelas_jadwal` (`id_kelas_jadwal`, `semester`, `id_jns_pelajaran`, `id_kelas`, `tgl_ujian`, `id_jns_jadwal`, `id_ruangan`) VALUES
(1, 1, 1, 1, '2017-01-03', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `td_kelas_jadwal_dtl`
--

CREATE TABLE `td_kelas_jadwal_dtl` (
  `id_kelas_jadwal_dtl` int(6) NOT NULL,
  `id_kelas_jadwal` int(6) NOT NULL,
  `id_jns_hari` int(1) NOT NULL,
  `id_jns_jam` int(2) NOT NULL,
  `jml_jam` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `td_kelas_jadwal_dtl`
--

INSERT INTO `td_kelas_jadwal_dtl` (`id_kelas_jadwal_dtl`, `id_kelas_jadwal`, `id_jns_hari`, `id_jns_jam`, `jml_jam`) VALUES
(1, 1, 1, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `td_kelas_nilai`
--

CREATE TABLE `td_kelas_nilai` (
  `id_kelas_nilai` int(6) NOT NULL,
  `id_kelas_jadwal` int(6) NOT NULL,
  `id_bayanat` int(6) DEFAULT NULL,
  `nis` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `nilai_ujian` float(5,2) NOT NULL,
  `nilai_remed1` float(5,2) DEFAULT NULL,
  `nilai_remed2` float(5,2) DEFAULT NULL,
  `nilai_akhir` float(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `td_kelas_nilai`
--

INSERT INTO `td_kelas_nilai` (`id_kelas_nilai`, `id_kelas_jadwal`, `id_bayanat`, `nis`, `nilai_ujian`, `nilai_remed1`, `nilai_remed2`, `nilai_akhir`) VALUES
(1, 1, 0, '151607001', 54.34, 56.44, 76.45, 75.00),
(2, 1, 4, '000111', 90.00, NULL, NULL, 90.00),
(3, 1, 5, '000111', 100.00, NULL, NULL, 100.00);

-- --------------------------------------------------------

--
-- Table structure for table `td_kelas_wali`
--

CREATE TABLE `td_kelas_wali` (
  `id_kelas_wali` int(11) NOT NULL,
  `id_kelas` int(4) NOT NULL,
  `id_jns_wali` int(2) NOT NULL,
  `id_karyawan` int(4) NOT NULL,
  `tgl_awal` date NOT NULL,
  `tgl_akhir` date NOT NULL,
  `no_sk` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `tgl_sk` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `td_pembayaran`
--

CREATE TABLE `td_pembayaran` (
  `id_pembayaran` int(6) NOT NULL,
  `id_jns_pembayaran` int(3) NOT NULL,
  `tahun` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `bulan` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `jumlah` double(9,2) NOT NULL,
  `tgl_jt_tempo` date NOT NULL,
  `tgl_lunas` date NOT NULL,
  `fl_cicil` varchar(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'T',
  `fl_beasiswa` varchar(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'T',
  `id_jns_beasiswa` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `td_pembayaran_dtl`
--

CREATE TABLE `td_pembayaran_dtl` (
  `id_pembayaran_dtl` int(6) NOT NULL,
  `id_pembayaran` int(6) NOT NULL,
  `id_jns_pembayaran` int(3) NOT NULL,
  `jumlah` double(9,2) NOT NULL,
  `tgl_jt_tempo` date NOT NULL,
  `id_jns_beasiswa` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `td_ruangan`
--

CREATE TABLE `td_ruangan` (
  `id_ruangan` int(4) NOT NULL,
  `id_jns_ruangan` int(3) NOT NULL,
  `nama` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `nama_ar` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `ur_alias` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `kapasitas` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `td_ruangan`
--

INSERT INTO `td_ruangan` (`id_ruangan`, `id_jns_ruangan`, `nama`, `nama_ar`, `alias`, `ur_alias`, `kapasitas`) VALUES
(1, 1, 'Kelas 1B', '', '', '', 0),
(2, 1, 'Kelas 1 C', '', '', '', 0),
(3, 0, 'Kelas A1', '1111', 'A1+', 'ga tau', 11);

-- --------------------------------------------------------

--
-- Table structure for table `td_ruangan_jadwal`
--

CREATE TABLE `td_ruangan_jadwal` (
  `id_ruangan_jadwal` int(6) NOT NULL,
  `id_ruangan` int(4) NOT NULL,
  `id_kelas_jadwal` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `td_ruangan_jadwal`
--

INSERT INTO `td_ruangan_jadwal` (`id_ruangan_jadwal`, `id_ruangan`, `id_kelas_jadwal`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `td_santri`
--

CREATE TABLE `td_santri` (
  `nis` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `nisn` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `id_jns_santri` int(2) NOT NULL,
  `nama` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `nama_ar` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `tempat_lahir` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tgl_awal` date NOT NULL,
  `daerah` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `daerah_ar` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `tgl_akhir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `td_santri`
--

INSERT INTO `td_santri` (`nis`, `nisn`, `id_jns_santri`, `nama`, `nama_ar`, `tempat_lahir`, `tgl_lahir`, `tgl_awal`, `daerah`, `daerah_ar`, `tgl_akhir`) VALUES
('000111', '000111', 1, 'roi', 'roi', 'rio', '2017-01-12', '2017-01-12', 'ori', 'roi', '0000-00-00'),
('151607001', '123456', 1, 'coba', 'عبد الفتح', 'kota', '2016-12-26', '0000-00-00', '', '', '0000-00-00'),
('170103', '114514', 3, 'coba', 'Rio Suga in Arab', '', '2017-01-10', '2017-01-10', 'Jawa Timur', 'Jawa Timur in Arab', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `td_santri_nilai`
--

CREATE TABLE `td_santri_nilai` (
  `id_santri_nilai` int(6) NOT NULL,
  `nis` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `id_jns_pelajaran` int(3) NOT NULL,
  `id_jns_jadwal` int(3) NOT NULL,
  `nilai_akhir` float(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `td_santri_wali`
--

CREATE TABLE `td_santri_wali` (
  `id_santri_wali` int(6) NOT NULL,
  `nis` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `id_jns_wali` int(2) NOT NULL,
  `nama` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `nama_ar` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `no_telp` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `no_telp2` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `email` int(50) NOT NULL,
  `fl_wali` varchar(1) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `td_santri_wali`
--

INSERT INTO `td_santri_wali` (`id_santri_wali`, `nis`, `id_jns_wali`, `nama`, `nama_ar`, `alamat`, `no_telp`, `no_telp2`, `email`, `fl_wali`) VALUES
(1, '151607001', 1, 'nama', 'عبد الفتح', '', '', '', 0, '7');

-- --------------------------------------------------------

--
-- Table structure for table `td_tabungan`
--

CREATE TABLE `td_tabungan` (
  `id_tabungan` int(7) NOT NULL,
  `nis` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `id_jns_transaksi` int(2) NOT NULL,
  `tgl_transaksi` int(11) NOT NULL,
  `nilai` double(12,2) NOT NULL,
  `saldo` double(12,2) NOT NULL,
  `keterangan` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `td_tahun_ajaran`
--

CREATE TABLE `td_tahun_ajaran` (
  `id_ta` int(3) NOT NULL,
  `tahun_awal` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `tahun_akhir` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `tgl_awal` date NOT NULL,
  `tgl_akhir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `td_tahun_ajaran`
--

INSERT INTO `td_tahun_ajaran` (`id_ta`, `tahun_awal`, `tahun_akhir`, `tgl_awal`, `tgl_akhir`) VALUES
(1, '2016', '2017', '2016-07-29', '2017-06-23');

-- --------------------------------------------------------

--
-- Table structure for table `tp_kelas_jadwal`
--

CREATE TABLE `tp_kelas_jadwal` (
  `id_kelas_jadwal` int(6) NOT NULL,
  `semester` int(1) NOT NULL,
  `id_jns_pelajaran` int(3) NOT NULL,
  `id_kelas` int(4) NOT NULL,
  `nilai_rata` float(5,2) DEFAULT NULL,
  `nilai_max` float(5,2) DEFAULT NULL,
  `nilai_min` float(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tp_log`
--

CREATE TABLE `tp_log` (
  `id_log` int(11) NOT NULL,
  `id_proses` int(5) NOT NULL,
  `nama_proses` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `nama_form` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `wk_rekam` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_rekam` varchar(60) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tp_log`
--

INSERT INTO `tp_log` (`id_log`, `id_proses`, `nama_proses`, `nama_form`, `keterangan`, `wk_rekam`, `id_rekam`) VALUES
(1, 1, '1', '1', '1', '2016-12-28 01:50:58', '1'),
(2, 1, 'insert data', 'referensi_jenis_karyawan', 'berhasil', '2017-01-04 04:37:06', 'rio'),
(3, 1, 'update data', 'referensi_jenis_karyawan', 'berhasil', '2017-01-04 06:07:37', 'rio'),
(4, 1, 'update data', 'referensi_jenis_karyawan', 'berhasil', '2017-01-04 06:19:38', 'rio'),
(5, 1, 'insert data', 'data_akademik : santri', 'berhasil', '2017-01-10 02:47:28', 'rio'),
(6, 1, 'insert data', 'referensi_jenis_beasiswa', 'berhasil', '2017-01-10 02:52:25', 'rio'),
(7, 1, 'update data', 'referensi_jenis_beasiswa', 'berhasil', '2017-01-10 02:52:43', 'rio'),
(8, 1, 'update data', 'data_akademik : santri', 'berhasil', '2017-01-10 03:51:07', 'rio'),
(9, 1, 'delete data', 'data_akademik : santri', 'berhasil', '2017-01-10 03:51:45', 'rio'),
(10, 6, 'update data', 'referensi_jenis_ruangan', 'berhasil', '2017-01-10 04:36:40', 'rio'),
(11, 6, 'insert data', 'referensi_jenis_ruangan', 'gagal', '2017-01-10 04:41:36', 'rio'),
(12, 1, 'insert data', 'data_akademik : ruangan', 'berhasil', '2017-01-10 04:47:18', 'rio'),
(13, 1, 'insert data', 'data_akademik : ruangan', 'berhasil', '2017-01-10 06:05:16', 'rio'),
(14, 1, 'insert data', 'data_akademik : ruangan', 'berhasil', '2017-01-10 06:05:52', 'rio'),
(15, 1, 'insert data', 'data_akademik : ruangan', 'berhasil', '2017-01-10 06:06:04', 'rio'),
(16, 1, 'insert data', 'data_akademik : ruangan', 'berhasil', '2017-01-10 06:07:23', 'rio'),
(17, 1, 'insert data', 'data_akademik : ruangan', 'berhasil', '2017-01-10 06:09:17', 'rio'),
(18, 1, 'delete data', 'data_akademik : ruangan', 'berhasil', '2017-01-10 06:11:12', 'rio'),
(19, 1, 'insert data', 'data_akademik : ruangan', 'berhasil', '2017-01-10 06:11:24', 'rio'),
(20, 1, 'insert data', 'referensi_jenis_jam', 'berhasil', '2017-01-10 07:04:42', 'rio'),
(21, 1, 'delete data', 'referensi_jenis_jam', 'berhasil', '2017-01-10 07:06:00', 'rio'),
(22, 1, 'insert data', 'referensi_jenis_jam', 'berhasil', '2017-01-10 07:06:26', 'rio'),
(23, 1, 'update data', 'referensi_jenis_jam', 'berhasil', '2017-01-10 07:10:14', 'rio'),
(24, 1, 'insert data', 'referensi_jenis_jam', 'berhasil', '2017-01-10 07:10:36', 'rio'),
(25, 1, 'insert data', 'data_akademik : santri', 'berhasil', '2017-01-12 02:32:52', 'rio'),
(26, 1, 'insert data', 'data_akademik : bayanat', 'berhasil', '2017-01-13 01:49:17', 'rio');

-- --------------------------------------------------------

--
-- Table structure for table `tp_santri_current`
--

CREATE TABLE `tp_santri_current` (
  `nis` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `id_kelas_current` int(4) NOT NULL,
  `id_kelas` int(4) NOT NULL,
  `id_kelas_wali` int(11) NOT NULL,
  `id_asrama` int(4) NOT NULL,
  `id_asrama_wali` int(11) NOT NULL,
  `jml_tabungan` double(9,2) NOT NULL,
  `jml_kekurangan` double(9,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tr_hari`
--

CREATE TABLE `tr_hari` (
  `id_jns_hari` int(1) NOT NULL,
  `uraian` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `uraian_ar` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `uraian_en` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tr_hari`
--

INSERT INTO `tr_hari` (`id_jns_hari`, `uraian`, `uraian_ar`, `uraian_en`) VALUES
(1, 'Ahad', '', ''),
(2, 'Senin', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tr_jenis_beasiswa`
--

CREATE TABLE `tr_jenis_beasiswa` (
  `id_jns_beasiswa` int(2) NOT NULL,
  `uraian` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `donatur` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `jumlah` double(9,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tr_jenis_beasiswa`
--

INSERT INTO `tr_jenis_beasiswa` (`id_jns_beasiswa`, `uraian`, `donatur`, `jumlah`) VALUES
(1, 'Beasiswa Gudang Salty', 'Sultan Itsuponx', 9999999.99);

-- --------------------------------------------------------

--
-- Table structure for table `tr_jenis_jadwal`
--

CREATE TABLE `tr_jenis_jadwal` (
  `id_jns_jadwal` int(3) NOT NULL,
  `uraian` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `uraian_ar` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `keterangan` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Tabel referensi jenis ujian';

--
-- Dumping data for table `tr_jenis_jadwal`
--

INSERT INTO `tr_jenis_jadwal` (`id_jns_jadwal`, `uraian`, `uraian_ar`, `keterangan`) VALUES
(1, 'KBM Kelas', '', 'Kegiatan Belajar Mengajar Di Ruang Kelas'),
(2, 'KBM Praktek', '', 'Praktek'),
(3, 'Ujian Harian', '', ''),
(4, 'Ujian Mid Semester', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tr_jenis_jam`
--

CREATE TABLE `tr_jenis_jam` (
  `id_jns_jam` int(2) NOT NULL,
  `jam_awal` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `menit_awal` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `jam_akhir` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `menit_akhir` varchar(2) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tr_jenis_jam`
--

INSERT INTO `tr_jenis_jam` (`id_jns_jam`, `jam_awal`, `menit_awal`, `jam_akhir`, `menit_akhir`) VALUES
(1, '07', '30', '08', '45'),
(3, '00', '12', '12', '00'),
(4, '10', '10', '11', '11');

-- --------------------------------------------------------

--
-- Table structure for table `tr_jenis_karyawan`
--

CREATE TABLE `tr_jenis_karyawan` (
  `id_jns_karyawan` int(2) NOT NULL,
  `uraian` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `uraian_ar` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `keterangan` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tr_jenis_karyawan`
--

INSERT INTO `tr_jenis_karyawan` (`id_jns_karyawan`, `uraian`, `uraian_ar`, `keterangan`) VALUES
(1, 'fafa', 'jgkgj', 'jkgkgj'),
(2, 'Guru Ustad', 'غبي', 'Mengaji'),
(3, 'Guru Umum', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tr_jenis_kelas`
--

CREATE TABLE `tr_jenis_kelas` (
  `id_jns_kelas` int(3) NOT NULL,
  `uraian` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `keterangan` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tr_jenis_kelas`
--

INSERT INTO `tr_jenis_kelas` (`id_jns_kelas`, `uraian`, `keterangan`) VALUES
(1, 'Kelas 1A', ''),
(2, 'Kelas 1B', '');

-- --------------------------------------------------------

--
-- Table structure for table `tr_jenis_kompetensi`
--

CREATE TABLE `tr_jenis_kompetensi` (
  `id_jns_kompetensi` int(3) NOT NULL,
  `uraian` varchar(60) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tr_jenis_kompetensi`
--

INSERT INTO `tr_jenis_kompetensi` (`id_jns_kompetensi`, `uraian`) VALUES
(1, 'Mengajar'),
(2, 'Pidato');

-- --------------------------------------------------------

--
-- Table structure for table `tr_jenis_pelajaran`
--

CREATE TABLE `tr_jenis_pelajaran` (
  `id_jns_pelajaran` int(3) NOT NULL,
  `uraian` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `uraian_en` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `uraian_ar` varchar(60) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Tabel referensi daftar pelajaran';

--
-- Dumping data for table `tr_jenis_pelajaran`
--

INSERT INTO `tr_jenis_pelajaran` (`id_jns_pelajaran`, `uraian`, `uraian_en`, `uraian_ar`) VALUES
(1, 'Arabic Dictation', 'Arabic Dictation', 'الإملاء العربي'),
(2, 'Oral Arabic Composition', 'Oral Arabic Composition', 'الإنشاء الشفوي'),
(3, 'Written Arabic Composition', 'Written Arabic Composition', 'الإنشاء التحريري');

-- --------------------------------------------------------

--
-- Table structure for table `tr_jenis_pembayaran`
--

CREATE TABLE `tr_jenis_pembayaran` (
  `id_jns_pembayaran` int(3) NOT NULL,
  `uraian` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `keterangan` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Tabel referensi jenis pembayaran';

--
-- Dumping data for table `tr_jenis_pembayaran`
--

INSERT INTO `tr_jenis_pembayaran` (`id_jns_pembayaran`, `uraian`, `keterangan`) VALUES
(1, 'SPP', '0'),
(2, 'Uang Makan', '0'),
(3, 'Uang Gedung', ''),
(4, 'Sumbangan', '');

-- --------------------------------------------------------

--
-- Table structure for table `tr_jenis_pendidikan`
--

CREATE TABLE `tr_jenis_pendidikan` (
  `id_jns_pendidikan` int(3) NOT NULL,
  `uraian` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `fl_formal` varchar(1) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tr_jenis_pendidikan`
--

INSERT INTO `tr_jenis_pendidikan` (`id_jns_pendidikan`, `uraian`, `fl_formal`) VALUES
(1, 'SMA / SMK / MA', 'Y'),
(2, 'D3', 'Y'),
(3, 'S1 / D4', 'Y'),
(4, 'S2', 'Y'),
(5, 'S3', ''),
(7, 'Diklat', 'T');

-- --------------------------------------------------------

--
-- Table structure for table `tr_jenis_ruangan`
--

CREATE TABLE `tr_jenis_ruangan` (
  `id_jns_ruangan` int(3) NOT NULL,
  `uraian` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `uraian_ar` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `uraian_en` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `keterangan` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tr_jenis_ruangan`
--

INSERT INTO `tr_jenis_ruangan` (`id_jns_ruangan`, `uraian`, `uraian_ar`, `uraian_en`, `keterangan`) VALUES
(1, 'Ruang Olahraga', 'Olahragawan', 'Sport Room', 'Buat olahraga'),
(2, 'Ruang Kelas', 'welp', 'Class Room', 'Untuk belajar mengajar'),
(3, 'Ruang Asrama', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tr_jenis_santri`
--

CREATE TABLE `tr_jenis_santri` (
  `id_jns_santri` int(2) NOT NULL,
  `uraian` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `keterangan` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tr_jenis_santri`
--

INSERT INTO `tr_jenis_santri` (`id_jns_santri`, `uraian`, `keterangan`) VALUES
(1, 'Baru', ''),
(2, 'Pindahan', ''),
(3, 'Nyusup', 'Tiba tiba ada');

-- --------------------------------------------------------

--
-- Table structure for table `tr_jenis_skill`
--

CREATE TABLE `tr_jenis_skill` (
  `id_jns_skill` int(1) NOT NULL,
  `uraian` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `keterangan` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tr_jenis_skill`
--

INSERT INTO `tr_jenis_skill` (`id_jns_skill`, `uraian`, `keterangan`) VALUES
(1, 'Ahli', ''),
(2, 'Sangat Baik', ''),
(3, 'Baik', ''),
(4, 'Cukup', ''),
(5, 'Kurang', ''),
(6, 'Tidak Ada', '');

-- --------------------------------------------------------

--
-- Table structure for table `tr_jenis_status`
--

CREATE TABLE `tr_jenis_status` (
  `id_jns_status` int(2) NOT NULL,
  `uraian` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `keterangan` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tr_jenis_status`
--

INSERT INTO `tr_jenis_status` (`id_jns_status`, `uraian`, `keterangan`) VALUES
(1, 'Tetap', ''),
(2, 'Kontrak', ''),
(3, 'Magang', '');

-- --------------------------------------------------------

--
-- Table structure for table `tr_jenis_transaksi`
--

CREATE TABLE `tr_jenis_transaksi` (
  `id_jns_transaksi` int(2) NOT NULL,
  `kode` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `uraian` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tr_jenis_transaksi`
--

INSERT INTO `tr_jenis_transaksi` (`id_jns_transaksi`, `kode`, `uraian`) VALUES
(1, 'D', 'Setor Tunai'),
(2, 'K', 'Ambil Tunai'),
(3, 'K', 'Kredit SPP');

-- --------------------------------------------------------

--
-- Table structure for table `tr_jenis_ujian`
--

CREATE TABLE `tr_jenis_ujian` (
  `id_jns_ujian` int(2) NOT NULL,
  `uraian` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `uraian_ar` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `keterangan` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Tabel referensi jenis ujian';

--
-- Dumping data for table `tr_jenis_ujian`
--

INSERT INTO `tr_jenis_ujian` (`id_jns_ujian`, `uraian`, `uraian_ar`, `keterangan`) VALUES
(1, 'Ujian Harian', '', '0'),
(2, 'Ujian Mid Semester', '', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tr_jenis_wali`
--

CREATE TABLE `tr_jenis_wali` (
  `id_jns_wali` int(2) NOT NULL,
  `uraian` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `uraian_ar` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `keterangan` varchar(60) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tr_jenis_wali`
--

INSERT INTO `tr_jenis_wali` (`id_jns_wali`, `uraian`, `uraian_ar`, `keterangan`) VALUES
(1, 'Ayah', '', 'Ayah Kandung'),
(2, 'Ibu', '', 'Ayah Kandung'),
(3, 'Ayah Tiri', '', 'Ayah Tiri'),
(4, 'Ibu Tiri', '', 'Ibu Tiri'),
(5, 'Ayah Angkat', '', 'Ibu Angkat'),
(6, 'Ibu Angkat', '', 'Ibu Angkat'),
(7, 'Wali Kelas', '', ''),
(8, 'Wali Asrama', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tr_kkm`
--

CREATE TABLE `tr_kkm` (
  `id_kkm` int(3) NOT NULL,
  `nilai` int(3) NOT NULL,
  `id_ta` int(3) NOT NULL,
  `id_jns_pelajaran` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tr_kkm`
--

INSERT INTO `tr_kkm` (`id_kkm`, `nilai`, `id_ta`, `id_jns_pelajaran`) VALUES
(1, 70, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `list_user`
--
ALTER TABLE `list_user`
  ADD PRIMARY KEY (`id_list_user`),
  ADD UNIQUE KEY `user_uniquer` (`id_user`);

--
-- Indexes for table `mtest`
--
ALTER TABLE `mtest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `td_bayanat`
--
ALTER TABLE `td_bayanat`
  ADD PRIMARY KEY (`id_bayanat`);

--
-- Indexes for table `td_karyawan`
--
ALTER TABLE `td_karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `td_karyawan_kompentensi`
--
ALTER TABLE `td_karyawan_kompentensi`
  ADD PRIMARY KEY (`id_kopetensi`);

--
-- Indexes for table `td_karyawan_pendidikan`
--
ALTER TABLE `td_karyawan_pendidikan`
  ADD PRIMARY KEY (`id_pendidikan`);

--
-- Indexes for table `td_kelas`
--
ALTER TABLE `td_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `td_kelas_dtl`
--
ALTER TABLE `td_kelas_dtl`
  ADD PRIMARY KEY (`id_kelas_dtl`);

--
-- Indexes for table `td_kelas_jadwal`
--
ALTER TABLE `td_kelas_jadwal`
  ADD PRIMARY KEY (`id_kelas_jadwal`);

--
-- Indexes for table `td_kelas_jadwal_dtl`
--
ALTER TABLE `td_kelas_jadwal_dtl`
  ADD PRIMARY KEY (`id_kelas_jadwal_dtl`);

--
-- Indexes for table `td_kelas_nilai`
--
ALTER TABLE `td_kelas_nilai`
  ADD PRIMARY KEY (`id_kelas_nilai`);

--
-- Indexes for table `td_kelas_wali`
--
ALTER TABLE `td_kelas_wali`
  ADD PRIMARY KEY (`id_kelas_wali`);

--
-- Indexes for table `td_pembayaran`
--
ALTER TABLE `td_pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `td_pembayaran_dtl`
--
ALTER TABLE `td_pembayaran_dtl`
  ADD PRIMARY KEY (`id_pembayaran_dtl`);

--
-- Indexes for table `td_ruangan`
--
ALTER TABLE `td_ruangan`
  ADD PRIMARY KEY (`id_ruangan`);

--
-- Indexes for table `td_ruangan_jadwal`
--
ALTER TABLE `td_ruangan_jadwal`
  ADD PRIMARY KEY (`id_ruangan_jadwal`),
  ADD KEY `id_ruangan_jadwal` (`id_ruangan_jadwal`);

--
-- Indexes for table `td_santri`
--
ALTER TABLE `td_santri`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `td_santri_nilai`
--
ALTER TABLE `td_santri_nilai`
  ADD PRIMARY KEY (`id_santri_nilai`);

--
-- Indexes for table `td_santri_wali`
--
ALTER TABLE `td_santri_wali`
  ADD PRIMARY KEY (`id_santri_wali`);

--
-- Indexes for table `td_tabungan`
--
ALTER TABLE `td_tabungan`
  ADD PRIMARY KEY (`id_tabungan`);

--
-- Indexes for table `td_tahun_ajaran`
--
ALTER TABLE `td_tahun_ajaran`
  ADD PRIMARY KEY (`id_ta`);

--
-- Indexes for table `tp_kelas_jadwal`
--
ALTER TABLE `tp_kelas_jadwal`
  ADD PRIMARY KEY (`id_kelas_jadwal`);

--
-- Indexes for table `tp_log`
--
ALTER TABLE `tp_log`
  ADD PRIMARY KEY (`id_log`);

--
-- Indexes for table `tp_santri_current`
--
ALTER TABLE `tp_santri_current`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `tr_hari`
--
ALTER TABLE `tr_hari`
  ADD PRIMARY KEY (`id_jns_hari`);

--
-- Indexes for table `tr_jenis_beasiswa`
--
ALTER TABLE `tr_jenis_beasiswa`
  ADD PRIMARY KEY (`id_jns_beasiswa`);

--
-- Indexes for table `tr_jenis_jadwal`
--
ALTER TABLE `tr_jenis_jadwal`
  ADD PRIMARY KEY (`id_jns_jadwal`),
  ADD KEY `id_jns_jadwal` (`id_jns_jadwal`);

--
-- Indexes for table `tr_jenis_jam`
--
ALTER TABLE `tr_jenis_jam`
  ADD PRIMARY KEY (`id_jns_jam`);

--
-- Indexes for table `tr_jenis_karyawan`
--
ALTER TABLE `tr_jenis_karyawan`
  ADD PRIMARY KEY (`id_jns_karyawan`);

--
-- Indexes for table `tr_jenis_kelas`
--
ALTER TABLE `tr_jenis_kelas`
  ADD PRIMARY KEY (`id_jns_kelas`);

--
-- Indexes for table `tr_jenis_kompetensi`
--
ALTER TABLE `tr_jenis_kompetensi`
  ADD PRIMARY KEY (`id_jns_kompetensi`);

--
-- Indexes for table `tr_jenis_pelajaran`
--
ALTER TABLE `tr_jenis_pelajaran`
  ADD PRIMARY KEY (`id_jns_pelajaran`);

--
-- Indexes for table `tr_jenis_pembayaran`
--
ALTER TABLE `tr_jenis_pembayaran`
  ADD PRIMARY KEY (`id_jns_pembayaran`);

--
-- Indexes for table `tr_jenis_pendidikan`
--
ALTER TABLE `tr_jenis_pendidikan`
  ADD PRIMARY KEY (`id_jns_pendidikan`);

--
-- Indexes for table `tr_jenis_ruangan`
--
ALTER TABLE `tr_jenis_ruangan`
  ADD PRIMARY KEY (`id_jns_ruangan`);

--
-- Indexes for table `tr_jenis_santri`
--
ALTER TABLE `tr_jenis_santri`
  ADD PRIMARY KEY (`id_jns_santri`);

--
-- Indexes for table `tr_jenis_skill`
--
ALTER TABLE `tr_jenis_skill`
  ADD PRIMARY KEY (`id_jns_skill`);

--
-- Indexes for table `tr_jenis_status`
--
ALTER TABLE `tr_jenis_status`
  ADD PRIMARY KEY (`id_jns_status`);

--
-- Indexes for table `tr_jenis_transaksi`
--
ALTER TABLE `tr_jenis_transaksi`
  ADD PRIMARY KEY (`id_jns_transaksi`);

--
-- Indexes for table `tr_jenis_ujian`
--
ALTER TABLE `tr_jenis_ujian`
  ADD PRIMARY KEY (`id_jns_ujian`);

--
-- Indexes for table `tr_jenis_wali`
--
ALTER TABLE `tr_jenis_wali`
  ADD PRIMARY KEY (`id_jns_wali`);

--
-- Indexes for table `tr_kkm`
--
ALTER TABLE `tr_kkm`
  ADD PRIMARY KEY (`id_kkm`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `list_user`
--
ALTER TABLE `list_user`
  MODIFY `id_list_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `mtest`
--
ALTER TABLE `mtest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `td_bayanat`
--
ALTER TABLE `td_bayanat`
  MODIFY `id_bayanat` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `td_karyawan`
--
ALTER TABLE `td_karyawan`
  MODIFY `id_karyawan` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `td_karyawan_kompentensi`
--
ALTER TABLE `td_karyawan_kompentensi`
  MODIFY `id_kopetensi` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `td_karyawan_pendidikan`
--
ALTER TABLE `td_karyawan_pendidikan`
  MODIFY `id_pendidikan` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `td_kelas`
--
ALTER TABLE `td_kelas`
  MODIFY `id_kelas` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `td_kelas_dtl`
--
ALTER TABLE `td_kelas_dtl`
  MODIFY `id_kelas_dtl` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `td_kelas_jadwal`
--
ALTER TABLE `td_kelas_jadwal`
  MODIFY `id_kelas_jadwal` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `td_kelas_jadwal_dtl`
--
ALTER TABLE `td_kelas_jadwal_dtl`
  MODIFY `id_kelas_jadwal_dtl` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `td_kelas_nilai`
--
ALTER TABLE `td_kelas_nilai`
  MODIFY `id_kelas_nilai` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `td_kelas_wali`
--
ALTER TABLE `td_kelas_wali`
  MODIFY `id_kelas_wali` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `td_pembayaran`
--
ALTER TABLE `td_pembayaran`
  MODIFY `id_pembayaran` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `td_pembayaran_dtl`
--
ALTER TABLE `td_pembayaran_dtl`
  MODIFY `id_pembayaran_dtl` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `td_ruangan`
--
ALTER TABLE `td_ruangan`
  MODIFY `id_ruangan` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `td_ruangan_jadwal`
--
ALTER TABLE `td_ruangan_jadwal`
  MODIFY `id_ruangan_jadwal` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `td_santri_nilai`
--
ALTER TABLE `td_santri_nilai`
  MODIFY `id_santri_nilai` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `td_santri_wali`
--
ALTER TABLE `td_santri_wali`
  MODIFY `id_santri_wali` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `td_tabungan`
--
ALTER TABLE `td_tabungan`
  MODIFY `id_tabungan` int(7) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `td_tahun_ajaran`
--
ALTER TABLE `td_tahun_ajaran`
  MODIFY `id_ta` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tp_kelas_jadwal`
--
ALTER TABLE `tp_kelas_jadwal`
  MODIFY `id_kelas_jadwal` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tp_log`
--
ALTER TABLE `tp_log`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `tr_hari`
--
ALTER TABLE `tr_hari`
  MODIFY `id_jns_hari` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tr_jenis_beasiswa`
--
ALTER TABLE `tr_jenis_beasiswa`
  MODIFY `id_jns_beasiswa` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tr_jenis_jadwal`
--
ALTER TABLE `tr_jenis_jadwal`
  MODIFY `id_jns_jadwal` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tr_jenis_jam`
--
ALTER TABLE `tr_jenis_jam`
  MODIFY `id_jns_jam` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tr_jenis_karyawan`
--
ALTER TABLE `tr_jenis_karyawan`
  MODIFY `id_jns_karyawan` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tr_jenis_kelas`
--
ALTER TABLE `tr_jenis_kelas`
  MODIFY `id_jns_kelas` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tr_jenis_kompetensi`
--
ALTER TABLE `tr_jenis_kompetensi`
  MODIFY `id_jns_kompetensi` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tr_jenis_pelajaran`
--
ALTER TABLE `tr_jenis_pelajaran`
  MODIFY `id_jns_pelajaran` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tr_jenis_pembayaran`
--
ALTER TABLE `tr_jenis_pembayaran`
  MODIFY `id_jns_pembayaran` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tr_jenis_pendidikan`
--
ALTER TABLE `tr_jenis_pendidikan`
  MODIFY `id_jns_pendidikan` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tr_jenis_ruangan`
--
ALTER TABLE `tr_jenis_ruangan`
  MODIFY `id_jns_ruangan` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tr_jenis_santri`
--
ALTER TABLE `tr_jenis_santri`
  MODIFY `id_jns_santri` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tr_jenis_skill`
--
ALTER TABLE `tr_jenis_skill`
  MODIFY `id_jns_skill` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tr_jenis_status`
--
ALTER TABLE `tr_jenis_status`
  MODIFY `id_jns_status` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tr_jenis_transaksi`
--
ALTER TABLE `tr_jenis_transaksi`
  MODIFY `id_jns_transaksi` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tr_jenis_ujian`
--
ALTER TABLE `tr_jenis_ujian`
  MODIFY `id_jns_ujian` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tr_jenis_wali`
--
ALTER TABLE `tr_jenis_wali`
  MODIFY `id_jns_wali` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tr_kkm`
--
ALTER TABLE `tr_kkm`
  MODIFY `id_kkm` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
