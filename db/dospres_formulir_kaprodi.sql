-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 18 Mar 2017 pada 08.36
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
-- Struktur dari tabel `dospres_formulir_kaprodi`
--

CREATE TABLE `dospres_formulir_kaprodi` (
  `id_formulir_kaprodi` int(255) NOT NULL,
  `nidn` int(20) NOT NULL,
  `nama_lengkap` varchar(300) DEFAULT NULL,
  `jabatan_akademik` varchar(300) DEFAULT NULL,
  `pangkat_dan_golongan` varchar(255) DEFAULT NULL,
  `ttl` varchar(400) DEFAULT NULL,
  `jenis_kelamin` varchar(255) DEFAULT NULL,
  `bidang_keahlian` varchar(255) DEFAULT NULL,
  `no_hp` varchar(100) DEFAULT NULL,
  `email` varchar(300) DEFAULT NULL,
  `file_makalah` varchar(255) DEFAULT NULL,
  `tahun` year(4) DEFAULT NULL,
  `id_fakultas` int(255) DEFAULT NULL,
  `id_program_studi` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dospres_formulir_kaprodi`
--

INSERT INTO `dospres_formulir_kaprodi` (`id_formulir_kaprodi`, `nidn`, `nama_lengkap`, `jabatan_akademik`, `pangkat_dan_golongan`, `ttl`, `jenis_kelamin`, `bidang_keahlian`, `no_hp`, `email`, `file_makalah`, `tahun`, `id_fakultas`, `id_program_studi`) VALUES
(1, 123, 'aldy', 'kk', 'lk', 'awdsa', 'Laki-Laki', 'asdas', 'asdas', 'asdaw', NULL, 2017, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dospres_formulir_kaprodi`
--
ALTER TABLE `dospres_formulir_kaprodi`
  ADD PRIMARY KEY (`id_formulir_kaprodi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dospres_formulir_kaprodi`
--
ALTER TABLE `dospres_formulir_kaprodi`
  MODIFY `id_formulir_kaprodi` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
