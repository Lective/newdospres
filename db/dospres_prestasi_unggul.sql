-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 14 Apr 2017 pada 23.03
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 7.1.1

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
-- Struktur dari tabel `dospres_prestasi_unggul`
--

CREATE TABLE `dospres_prestasi_unggul` (
  `id_prestasi_unggul` int(255) NOT NULL,
  `nidn` int(20) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `abstrak` text,
  `latar_belakang` text,
  `metode_pencapaian_unggulan` text,
  `prestasi_yang_diunggulkan` text,
  `kemanfaatan` text,
  `diseminasi` text,
  `pengakuan_pihak_terkait` text,
  `nilai_abstrak` int(255) DEFAULT '1',
  `nilai_latar_belakang` int(255) DEFAULT '1',
  `nilai_metode_pencapaian_unggulan` int(255) DEFAULT '1',
  `nilai_prestasi_yang_diunggulkan` int(255) DEFAULT '1',
  `nilai_kemanfaatan` int(255) DEFAULT '1',
  `nilai_diseminasi` int(255) DEFAULT '1',
  `nilai_pengakuan_pihak_terkait` int(255) DEFAULT '1',
  `nilai_total` int(10) NOT NULL DEFAULT '1',
  `catatan` text,
  `tahun` year(4) DEFAULT NULL,
  `id_fakultas` int(255) DEFAULT NULL,
  `id_program_studi` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dospres_prestasi_unggul`
--

INSERT INTO `dospres_prestasi_unggul` (`id_prestasi_unggul`, `nidn`, `nama_lengkap`, `abstrak`, `latar_belakang`, `metode_pencapaian_unggulan`, `prestasi_yang_diunggulkan`, `kemanfaatan`, `diseminasi`, `pengakuan_pihak_terkait`, `nilai_abstrak`, `nilai_latar_belakang`, `nilai_metode_pencapaian_unggulan`, `nilai_prestasi_yang_diunggulkan`, `nilai_kemanfaatan`, `nilai_diseminasi`, `nilai_pengakuan_pihak_terkait`, `nilai_total`, `catatan`, `tahun`, `id_fakultas`, `id_program_studi`) VALUES
(1, 123, 'aal', '<ol>\r\n	<li>Initial value.</li>\r\n	<li>aku coba tuk melangkah</li>\r\n</ol>\r\n', '<p><del>dsawqeqeqw qwer</del></p>\r\n\r\n<p>asdadsdwqwda</p>\r\n\r\n<h1>asdqwewqweqweasd</h1>\r\n\r\n<ol>\r\n	<li><strong>dasdasdaw<em>asdasdasda<s>sdasdasdasdasda</s></em></strong>sdasdasdasdadasdasdasdasdaaaaaaaaaaaaaaaaaaaas</li>\r\n	<li><strong><em><s>asdasda</s></em></strong></li>\r\n	<li><strong><em><s>asdasd</s></em></strong></li>\r\n	<li><strong><em><s>weqweqweasda</s></em></strong></li>\r\n</ol>\r\n', '<p>adssssssssssssssssssssssqweqweqwsdas</p>\r\n\r\n<h2 style=\"font-style:italic;\">asdasdasdadasdasdasxzZxasdasdasdas</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><cite>asdawqweqweqsdasdqweqw</cite></p>\r\n\r\n<blockquote>\r\n<p><cite>\\ADDEWQASDFASDFASDFAS</cite></p>\r\n</blockquote>\r\n', '<p>asdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>\r\n', '<p>dddddddddddddddddddddddqweeeeeeeeeeeeeeeeeeeeeeeeeeeee</p>\r\n', '<p>asddddddddddddddddddddddddddddddd a sadasdasdasdasd a sdasd a sd asd ads</p>\r\n', '<p>ngaku aj lo</p>\r\n', 4, 8, 12, 16, 17, 12, 13, 82, NULL, 2017, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dospres_prestasi_unggul`
--
ALTER TABLE `dospres_prestasi_unggul`
  ADD PRIMARY KEY (`id_prestasi_unggul`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dospres_prestasi_unggul`
--
ALTER TABLE `dospres_prestasi_unggul`
  MODIFY `id_prestasi_unggul` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
