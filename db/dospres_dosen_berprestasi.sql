-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 23 Mar 2017 pada 17.36
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
-- Struktur dari tabel `dospres_dosen_berprestasi`
--

CREATE TABLE `dospres_dosen_berprestasi` (
  `id_dospres` int(255) NOT NULL,
  `nidn` int(30) NOT NULL,
  `nilai` double(255,0) NOT NULL,
  `nidn_vote` int(30) NOT NULL,
  `email_vote` varchar(30) NOT NULL,
  `tahun` year(4) NOT NULL,
  `alasan` text NOT NULL,
  `id_program_studi` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dospres_dosen_berprestasi`
--
ALTER TABLE `dospres_dosen_berprestasi`
  ADD PRIMARY KEY (`id_dospres`),
  ADD KEY `fk_dospres_dosen_berprestasi` (`id_program_studi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dospres_dosen_berprestasi`
--
ALTER TABLE `dospres_dosen_berprestasi`
  MODIFY `id_dospres` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
