-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 18 Mar 2017 pada 08.25
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_dospres`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dospres_calon_dosen_berprestasi`
--

CREATE TABLE `dospres_calon_dosen_berprestasi` (
  `id_calon_dospres` int(255) NOT NULL,
  `nidn` int(30) NOT NULL,
  `abstrak` int(10) DEFAULT '0',
  `latar_belakang` int(10) DEFAULT '0',
  `metode` int(10) DEFAULT '0',
  `prestasi` int(10) DEFAULT '0',
  `kemanfaatan` int(10) DEFAULT '0',
  `desemisasi` int(10) DEFAULT '0',
  `pengakuan_pihak` int(10) DEFAULT '0',
  `nilai` double(255,0) DEFAULT NULL,
  `tahun` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dospres_calon_dosen_berprestasi`
--
ALTER TABLE `dospres_calon_dosen_berprestasi`
  ADD PRIMARY KEY (`id_calon_dospres`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dospres_calon_dosen_berprestasi`
--
ALTER TABLE `dospres_calon_dosen_berprestasi`
  MODIFY `id_calon_dospres` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
