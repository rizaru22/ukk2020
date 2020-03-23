-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 23 Mar 2020 pada 05.30
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.6.23

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
-- Struktur dari tabel `tbl_berkas`
--

CREATE TABLE `tbl_berkas` (
  `id_siswa` int(5) NOT NULL,
  `tanggal` date NOT NULL,
  `fc_raport` tinyint(1) NOT NULL,
  `fc_ijazah` tinyint(1) NOT NULL,
  `fc_nisn` tinyint(1) NOT NULL,
  `pas_foto` tinyint(1) NOT NULL,
  `sk_sehat` tinyint(1) NOT NULL,
  `catatan` text NOT NULL,
  `penerima` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_calon_siswa`
--

CREATE TABLE `tbl_calon_siswa` (
  `id` int(5) NOT NULL,
  `no_pendaftaran` varchar(30) NOT NULL,
  `nisn` varchar(12) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `asal_sekolah` varchar(30) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `alamat` text NOT NULL,
  `status` enum('0','1','2','3','4') NOT NULL,
  `pilihan1` int(5) NOT NULL,
  `pilihan2` int(5) NOT NULL,
  `nama_ortu` varchar(30) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `hubungan` enum('0','1') NOT NULL,
  `alamat_ortu` text NOT NULL,
  `hp_ortu` varchar(13) NOT NULL,
  `peringkat` enum('0','1','2','3','4','5','10') NOT NULL,
  `prestasi_lain` varchar(30) NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kompetensi_keahlian`
--

CREATE TABLE `tbl_kompetensi_keahlian` (
  `id` int(2) NOT NULL,
  `kode_kompetensi` int(4) NOT NULL,
  `kompetensi_keahlian` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kompetensi_keahlian`
--

INSERT INTO `tbl_kompetensi_keahlian` (`id`, `kode_kompetensi`, `kompetensi_keahlian`) VALUES
(1, 2072, 'Rekayasa Perangkat Lunak'),
(2, 2089, 'Multimedia'),
(3, 5369, 'Agribisnis Pembenihan dan Kultur Jaringan Tanaman'),
(4, 333, 'Agribisnis Ternak Unggas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_masyarakat`
--

CREATE TABLE `tbl_masyarakat` (
  `id` int(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_masyarakat`
--

INSERT INTO `tbl_masyarakat` (`id`, `nama`, `username`, `password`) VALUES
(1, 'Abda Zikri', 'abda', '16fe54bf750231c47f56af8a17912c04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_seleksi`
--

CREATE TABLE `tbl_seleksi` (
  `id` int(5) NOT NULL,
  `id_siswa` int(5) NOT NULL,
  `nilai` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(5) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_level` enum('admin','operator','kabid') NOT NULL,
  `id_kompetensi` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `password`, `user_level`, `id_kompetensi`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_berkas`
--
ALTER TABLE `tbl_berkas`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `tbl_calon_siswa`
--
ALTER TABLE `tbl_calon_siswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `no_pendaftaran` (`no_pendaftaran`),
  ADD UNIQUE KEY `nisn` (`nisn`);

--
-- Indexes for table `tbl_kompetensi_keahlian`
--
ALTER TABLE `tbl_kompetensi_keahlian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_masyarakat`
--
ALTER TABLE `tbl_masyarakat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_seleksi`
--
ALTER TABLE `tbl_seleksi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_siswa` (`id_siswa`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_calon_siswa`
--
ALTER TABLE `tbl_calon_siswa`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_kompetensi_keahlian`
--
ALTER TABLE `tbl_kompetensi_keahlian`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_masyarakat`
--
ALTER TABLE `tbl_masyarakat`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_seleksi`
--
ALTER TABLE `tbl_seleksi`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
