-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2018 at 11:14 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fppweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar`
--

CREATE TABLE `daftar` (
  `id_daftar` int(11) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `jenis_kelamin_siswa` enum('Pria','Wanita') NOT NULL,
  `tgl_lahir_siswa` date NOT NULL,
  `agama_siswa` tinytext NOT NULL,
  `alamat_siswa` text NOT NULL,
  `asal_sekolah_siswa` varchar(60) NOT NULL,
  `no_hp_siswa` varchar(15) NOT NULL,
  `nama_ayah_siswa` varchar(60) NOT NULL,
  `nama_ibu_siswa` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar`
--

INSERT INTO `daftar` (`id_daftar`, `nama_siswa`, `jenis_kelamin_siswa`, `tgl_lahir_siswa`, `agama_siswa`, `alamat_siswa`, `asal_sekolah_siswa`, `no_hp_siswa`, `nama_ayah_siswa`, `nama_ibu_siswa`) VALUES
(1, 'Bagus Dharma', 'Pria', '1997-11-06', 'Hindu', 'Anggi Elok, Bali', 'SMAN 000 Denpasar', '08112345678', 'Pak Budi', 'Ibu Ani'),
(4, 'Yayan', 'Pria', '1999-05-27', 'Islam', 'ITS', 'SMA 2 MADIUN', '08312211244', 'Budaa', 'Mama'),
(5, 'BUDI', 'Pria', '1997-05-06', 'Islam', 'BOGOR', 'SMA 3 PADANG', '0876781213', 'bayumas', 'maimunah');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `status` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `akses` enum('admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `alamat`, `telepon`, `status`, `password`, `akses`) VALUES
('15028', 'Bagus', 'Bali', '085829203504', 'Admin', 'ae0b6ccf1feea1ec718136d281afe5b0', 'admin'),
('admin', 'Mr. Kode Rumit', 'Rembang', '08977299387', 'Admin', '21232f297a57a5a743894a0e4a801fc3', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `web`
--

CREATE TABLE `web` (
  `id_web` int(11) NOT NULL,
  `nama_web` varchar(35) NOT NULL,
  `domain_web` varchar(10) NOT NULL,
  `slogan_web` text NOT NULL,
  `alamat_web` text NOT NULL,
  `telp_web` varchar(16) NOT NULL,
  `fax_web` varchar(16) NOT NULL,
  `email_web` varchar(50) NOT NULL,
  `author_web` varchar(50) NOT NULL,
  `deskripsi_web` text NOT NULL,
  `keyword_web` text NOT NULL,
  `tahun_web` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `web`
--

INSERT INTO `web` (`id_web`, `nama_web`, `domain_web`, `slogan_web`, `alamat_web`, `telp_web`, `fax_web`, `email_web`, `author_web`, `deskripsi_web`, `keyword_web`, `tahun_web`) VALUES
(1, 'belajarweb', 'belajarweb', 'Aplikasi Pendaftaran Peserta Didik Baru Berbasis Web', 'Perumdos ITS Blok J2, Surabaya', '085829203504', '---', 'bagus.dharma@gmail.com', 'Bagus', 'Belajar Web adalah Aplikasi Pendaftaran Peserta Didik Baru Berbasis Web', 'Aplikasi PPDB, Web PPDB Online Free', 2018);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar`
--
ALTER TABLE `daftar`
  ADD PRIMARY KEY (`id_daftar`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `web`
--
ALTER TABLE `web`
  ADD PRIMARY KEY (`id_web`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar`
--
ALTER TABLE `daftar`
  MODIFY `id_daftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `web`
--
ALTER TABLE `web`
  MODIFY `id_web` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
