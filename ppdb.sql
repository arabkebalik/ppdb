-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 02 Jun 2016 pada 18.01
-- Versi Server: 5.7.10-log
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE `jurusan` (
  `id` int(11) NOT NULL,
  `kode` varchar(5) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`id`, `kode`, `nama`) VALUES
(3, '3', 'Teknik Sepeda Motor'),
(2, '2', 'Teknik Kendaraan Ringan'),
(1, '1', 'Teknik Komputer Jaringan'),
(4, '4', 'Akuntansi'),
(5, '5', 'Administrasi Perkantoran'),
(6, '6', 'Pemasaran');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfigurasi`
--

CREATE TABLE `konfigurasi` (
  `id` int(11) NOT NULL,
  `kode` varchar(25) NOT NULL,
  `konfigurasi` text NOT NULL,
  `keterangan` varchar(70) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `id` int(11) NOT NULL,
  `no_pendaftaran` varchar(50) NOT NULL,
  `pres_status` varchar(10) NOT NULL,
  `pres_tingkat` varchar(10) NOT NULL DEFAULT '0',
  `pres_juara` varchar(10) NOT NULL DEFAULT '0',
  `jarak` varchar(10) NOT NULL,
  `ekonomi` varchar(10) NOT NULL,
  `total_nilai` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`id`, `no_pendaftaran`, `pres_status`, `pres_tingkat`, `pres_juara`, `jarak`, `ekonomi`, `total_nilai`) VALUES
(27, '334041001', '1', '200', '40', '150', '0', '390');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pilihan`
--

CREATE TABLE `pilihan` (
  `id` int(11) NOT NULL,
  `no_pendaftaran` varchar(50) NOT NULL,
  `kode_jurusan` varchar(10) NOT NULL,
  `prioritas` int(11) NOT NULL COMMENT '1=pilihan 1, 2=pilihan 2'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pilihan`
--

INSERT INTO `pilihan` (`id`, `no_pendaftaran`, `kode_jurusan`, `prioritas`) VALUES
(76, '334041001', '5', 2),
(75, '334041001', '4', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `no_pendaftaran` varchar(50) NOT NULL,
  `no_formulir` varchar(10) NOT NULL,
  `no_ujian` varchar(20) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `asal_sekolah` varchar(200) NOT NULL,
  `tgllahir` date NOT NULL,
  `kelamin` varchar(50) NOT NULL,
  `ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `petugas` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id`, `no_pendaftaran`, `no_formulir`, `no_ujian`, `nama`, `asal_sekolah`, `tgllahir`, `kelamin`, `ts`, `petugas`) VALUES
(34, '334041001', '0334001001', '0334001001', 'KEN ETIKA', 'SMP NEGERI 2 TAMAN', '1997-08-14', 'Perempuan', '2016-04-19 03:43:00', 'Administrator');

-- --------------------------------------------------------

--
-- Struktur dari tabel `un`
--

CREATE TABLE `un` (
  `id` int(11) NOT NULL,
  `no_pendaftaran` int(4) NOT NULL,
  `unbi` int(4) NOT NULL,
  `unmat` int(4) NOT NULL,
  `uning` int(4) NOT NULL,
  `unipa` int(4) NOT NULL,
  `total_un` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `un`
--

INSERT INTO `un` (`id`, `no_pendaftaran`, `unbi`, `unmat`, `uning`, `unipa`, `total_un`) VALUES
(3, 334041001, 90, 80, 86, 89, 345);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `telp` varchar(20) DEFAULT NULL,
  `alamat` varchar(250) DEFAULT NULL,
  `level` varchar(15) NOT NULL DEFAULT 'operator',
  `ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`, `telp`, `alamat`, `level`, `ts`) VALUES
(3, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Administrator', '085225415416', 'Pemalang', 'admin', '2016-04-19 01:51:52'),
(6, 'arab', 'e39820722da4b4ef2f4015bbec431a1af23496ab', 'Bara', '085225415416', 'Jalan Sirayak No 61F, Jebed Utara', 'operator', '2016-04-14 14:05:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_akses`
--

CREATE TABLE `user_akses` (
  `id` int(11) NOT NULL,
  `level` varchar(15) NOT NULL,
  `kode_menu` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user_akses`
--

INSERT INTO `user_akses` (`id`, `level`, `kode_menu`) VALUES
(45, 'admin', 'pendaftaran'),
(46, 'operator', 'pendaftaran'),
(47, 'admin', 'data_pendaftar'),
(48, 'operator', 'data_pendaftar'),
(49, 'admin', 'administrator'),
(50, 'admin', 'atur_operator'),
(51, 'admin', 'atur_pendaftar'),
(52, 'admin', 'laporan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_level`
--

CREATE TABLE `user_level` (
  `id` int(11) NOT NULL,
  `level` varchar(15) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user_level`
--

INSERT INTO `user_level` (`id`, `level`, `keterangan`) VALUES
(1, 'admin', 'Administrator'),
(2, 'operator', 'Operator');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_log`
--

CREATE TABLE `user_log` (
  `id` int(11) NOT NULL,
  `ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `log` varchar(50) NOT NULL,
  `tipe` int(11) NOT NULL COMMENT '1=login, 2 umum'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `tipe` int(11) NOT NULL DEFAULT '1' COMMENT '0=parent, 1=child, 2=inside page',
  `parent` varchar(15) DEFAULT NULL,
  `kode` varchar(25) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `url` varchar(50) NOT NULL DEFAULT '#',
  `icon` varchar(30) DEFAULT NULL,
  `urutan` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `tipe`, `parent`, `kode`, `nama`, `url`, `icon`, `urutan`) VALUES
(29, 0, NULL, 'pendaftaran', 'Pendaftaran Siswa', '/pendaftaran', 'fa fa-sign-in', 1),
(30, 0, NULL, 'data_pendaftar', 'Data Calon Siswa', '/pendaftaran/data', 'fa fa-bars', 2),
(31, 0, NULL, 'administrator', 'Administrator', '#', 'fa fa-th-large', 3),
(32, 1, 'administrator', 'atur_operator', 'Pengaturan Operator', '/user/', 'fa fa-user', 3),
(33, 2, NULL, 'atur_pendaftar', 'Edit Data Calon Siswa', '#', 'fa fa-users', 1),
(34, 1, 'administrator', 'laporan', 'Laporan Data Calon Siswa', '/laporan', 'fa fa-list', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode` (`kode`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode` (`kode`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
