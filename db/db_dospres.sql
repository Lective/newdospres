-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 20 Feb 2017 pada 09.18
-- Versi Server: 10.1.9-MariaDB
-- PHP Version: 5.6.15

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
-- Struktur dari tabel `dospres_buku_ajar`
--

CREATE TABLE `dospres_buku_ajar` (
  `id_buku_ajar` int(10) NOT NULL,
  `nidn` char(10) DEFAULT NULL,
  `judul` varchar(1000) DEFAULT NULL,
  `isbn` varchar(50) DEFAULT NULL,
  `jml_halaman` int(11) DEFAULT NULL,
  `penerbit` varchar(200) DEFAULT NULL,
  `keterangan_invalid` varchar(100) DEFAULT NULL,
  `tahun` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dospres_buku_ajar`
--

INSERT INTO `dospres_buku_ajar` (`id_buku_ajar`, `nidn`, `judul`, `isbn`, `jml_halaman`, `penerbit`, `keterangan_invalid`, `tahun`) VALUES
(2, NULL, 'ini judul', 'ini isbn', 32, 'fikri', 'valid', 2017),
(20, NULL, 'ini judul lagi', '32nj2392', 1000, 'fikri', 'ini keterangan', 2017),
(21, NULL, 'ini judul 3', 'nsajnf00', 200, 'fikri', 'keterangan', 2017);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dospres_dosen`
--

CREATE TABLE `dospres_dosen` (
  `nidn` char(10) NOT NULL,
  `nama_lengkap` varchar(50) DEFAULT NULL,
  `jenis_kelamin` varchar(9) DEFAULT NULL,
  `nama_program_studi` varchar(50) DEFAULT NULL,
  `jenjang_pendidikan` varchar(10) DEFAULT NULL,
  `jabatan_akademik` varchar(50) DEFAULT NULL,
  `kepakaran` varchar(100) DEFAULT NULL,
  `rumpun_ilmu` varchar(100) DEFAULT NULL,
  `aktif` varchar(10) DEFAULT NULL,
  `validasi` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dospres_fasilitas_penunjang_penelitian`
--

CREATE TABLE `dospres_fasilitas_penunjang_penelitian` (
  `id_fasilitas_penunjang_penelitian` int(10) NOT NULL,
  `nama_unit` varchar(100) DEFAULT NULL,
  `no_sk_pendirian` varchar(100) DEFAULT NULL,
  `fasilitas` varchar(1000) DEFAULT NULL,
  `status_fasilitas_penunjang` varchar(100) DEFAULT NULL,
  `kd_sts_berkas_sk_pendirian` int(10) DEFAULT NULL,
  `no_sertifikat` varchar(20) DEFAULT NULL,
  `kd_sts_berkas_sertifikat` int(10) DEFAULT NULL,
  `kd_sts_aktif` int(10) DEFAULT NULL,
  `keterangan_invalid` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dospres_fasilitas_penunjang_penelitian`
--

INSERT INTO `dospres_fasilitas_penunjang_penelitian` (`id_fasilitas_penunjang_penelitian`, `nama_unit`, `no_sk_pendirian`, `fasilitas`, `status_fasilitas_penunjang`, `kd_sts_berkas_sk_pendirian`, `no_sertifikat`, `kd_sts_berkas_sertifikat`, `kd_sts_aktif`, `keterangan_invalid`) VALUES
(2, '2323', '3252', '23232', 'Terakreditasi', NULL, NULL, NULL, NULL, 'sdvdsvs'),
(3, 'unit 1 ', '242gsd', 'Laptop', 'Terakreditasi', NULL, NULL, NULL, NULL, 'safafafaagag'),
(4, 'unit umm', '39292', 'laptop', 'Belum Terakreditasi', NULL, NULL, NULL, NULL, 'ini keterangan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dospres_hki`
--

CREATE TABLE `dospres_hki` (
  `id_hki` int(10) NOT NULL,
  `nidn` char(10) DEFAULT NULL,
  `judul_hki` varchar(1000) DEFAULT NULL,
  `jenis_hki` varchar(50) DEFAULT NULL,
  `no_pendaftaran` varchar(100) DEFAULT NULL,
  `status_hki` varchar(20) DEFAULT NULL,
  `no_hki` varchar(20) DEFAULT NULL,
  `kd_sts_berkas_hki` int(10) DEFAULT NULL,
  `keterangan_invalid` varchar(100) DEFAULT NULL,
  `tahun` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dospres_hki`
--

INSERT INTO `dospres_hki` (`id_hki`, `nidn`, `judul_hki`, `jenis_hki`, `no_pendaftaran`, `status_hki`, `no_hki`, `kd_sts_berkas_hki`, `keterangan_invalid`, `tahun`) VALUES
(1, NULL, 'ini judul', 'Hak Cipta', '3829', 'Terdaftar', '3292', NULL, 'keterangan', 2009),
(2, NULL, 'ini judul', 'Paten', '8293', 'Granted', '8239', NULL, 'keterangan', 2010);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dospres_luaran_lain`
--

CREATE TABLE `dospres_luaran_lain` (
  `id_luaran_lain` int(10) NOT NULL,
  `nidn` char(10) DEFAULT NULL,
  `judul_luaran` varchar(1000) DEFAULT NULL,
  `jenis_luaran_lain` varchar(100) DEFAULT NULL,
  `deskripsi` varchar(1000) DEFAULT NULL,
  `kd_sts_berkas_pendukung` int(10) DEFAULT NULL,
  `keterangan_invalid` varchar(100) DEFAULT NULL,
  `tahun` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dospres_luaran_lain`
--

INSERT INTO `dospres_luaran_lain` (`id_luaran_lain`, `nidn`, `judul_luaran`, `jenis_luaran_lain`, `deskripsi`, `kd_sts_berkas_pendukung`, `keterangan_invalid`, `tahun`) VALUES
(2, NULL, 'judul', 'Desain', 'deskrip', NULL, 'keter', 2009),
(3, NULL, 'ini judul 2', 'Rekayasa', 'ini deskripsi 2', NULL, 'ini keterangan 2', 2010);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dospres_pemakalah_forum_ilmiah`
--

CREATE TABLE `dospres_pemakalah_forum_ilmiah` (
  `id_pemakalah_forum_ilmiah` int(10) NOT NULL,
  `nidn` char(10) DEFAULT NULL,
  `status_pemakalah` varchar(50) DEFAULT NULL,
  `judul_pemakalah` varchar(1000) DEFAULT NULL,
  `nama_forum` varchar(1000) DEFAULT NULL,
  `institusi_penyelenggara` varchar(500) DEFAULT NULL,
  `tgl_mulai_pelaksanaan` varchar(10) DEFAULT NULL,
  `tgl_akhir_pelaksanaan` varchar(10) DEFAULT NULL,
  `tempat_pelaksanaan` varchar(100) DEFAULT NULL,
  `kd_sts_berkas_makalah` int(10) DEFAULT NULL,
  `keterangan_invalid` varchar(500) DEFAULT NULL,
  `tahun` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dospres_pemakalah_forum_ilmiah`
--

INSERT INTO `dospres_pemakalah_forum_ilmiah` (`id_pemakalah_forum_ilmiah`, `nidn`, `status_pemakalah`, `judul_pemakalah`, `nama_forum`, `institusi_penyelenggara`, `tgl_mulai_pelaksanaan`, `tgl_akhir_pelaksanaan`, `tempat_pelaksanaan`, `kd_sts_berkas_makalah`, `keterangan_invalid`, `tahun`) VALUES
(5, NULL, 'Pemakalah Biasa', 'ini judul', 'ini nama', 'umm', '02/07/2017', '02/17/2017', 'malang', NULL, 'keterangan', 2017),
(6, NULL, 'Invited / Keynote Speaker', 'egwg', 'wgewg', 'wegweg', '02/21/2017', '02/25/2017', 'ewgew', NULL, 'gewgewg', 2017),
(7, NULL, 'Invited / Keynote Speaker', 'egwg', 'wgewg', 'wegweg', '02/21/2017', '02/25/2017', 'ewgew', NULL, 'gewgewg', 2017),
(8, NULL, 'Invited / Keynote Speaker', 'ewrw', '235', '25325', '02/22/2017', '02/25/2017', 'verv', NULL, '43', 2017);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dospres_penelitian_hibah_ditlitabmas`
--

CREATE TABLE `dospres_penelitian_hibah_ditlitabmas` (
  `id_penelitian_hibah_ditlitabmas` int(10) NOT NULL,
  `nama_skim` varchar(50) DEFAULT NULL,
  `judul` varchar(1000) DEFAULT NULL,
  `jumlah_dana` int(20) DEFAULT NULL,
  `nidn_KETUA` char(11) DEFAULT NULL,
  `nama_ketua` varchar(50) DEFAULT NULL,
  `nama_anggota` varchar(50) DEFAULT NULL,
  `bidang_penelitian` varchar(100) DEFAULT NULL,
  `bidang_penelitian_lain` varchar(100) DEFAULT NULL,
  `tujuan_sosial_ekonomi` varchar(500) DEFAULT NULL,
  `tujuan_sosial_ekonomi_lain` varchar(100) DEFAULT NULL,
  `tahun` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dospres_penelitian_hibah_ditlitabmas`
--

INSERT INTO `dospres_penelitian_hibah_ditlitabmas` (`id_penelitian_hibah_ditlitabmas`, `nama_skim`, `judul`, `jumlah_dana`, `nidn_KETUA`, `nama_ketua`, `nama_anggota`, `bidang_penelitian`, `bidang_penelitian_lain`, `tujuan_sosial_ekonomi`, `tujuan_sosial_ekonomi_lain`, `tahun`) VALUES
(1, 'skim 1', 'judul 1', 19990, NULL, 'fikri', 'fikri 1', 'penelitian', 'penelitian 1', 'sosial ekonomi', 'sosial ekonomi 1', 2017),
(2, 'skim 2', 'judul 2', 1000000, NULL, 'fikri 2', 'fikri lagi', 'bidang 3', 'bidangnya bagus', 'sosial 2', 'sosialnya 5', 2010);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dospres_penelitian_hibah_non_ditlitabmas`
--

CREATE TABLE `dospres_penelitian_hibah_non_ditlitabmas` (
  `id_penelitian_hibah_non_ditlitabmas` int(10) NOT NULL,
  `judul` varchar(1000) DEFAULT NULL,
  `nama_ketua` varchar(50) DEFAULT NULL,
  `nama_anggota` varchar(50) DEFAULT NULL,
  `sumber_dana` varchar(50) DEFAULT NULL,
  `institusi_sumber_dana` varchar(50) DEFAULT NULL,
  `jenis_penelitian` varchar(100) DEFAULT NULL,
  `bidang_penelitian` varchar(100) DEFAULT NULL,
  `bidang_penelitian_lain` varchar(100) DEFAULT NULL,
  `tujuan_sosial_ekonomi` varchar(500) DEFAULT NULL,
  `tujuan_sosial_ekonomi_lain` varchar(50) DEFAULT NULL,
  `jumlah_dana` int(20) DEFAULT NULL,
  `keterangan_invalid` varchar(100) DEFAULT NULL,
  `tahun` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dospres_penelitian_hibah_non_ditlitabmas`
--

INSERT INTO `dospres_penelitian_hibah_non_ditlitabmas` (`id_penelitian_hibah_non_ditlitabmas`, `judul`, `nama_ketua`, `nama_anggota`, `sumber_dana`, `institusi_sumber_dana`, `jenis_penelitian`, `bidang_penelitian`, `bidang_penelitian_lain`, `tujuan_sosial_ekonomi`, `tujuan_sosial_ekonomi_lain`, `jumlah_dana`, `keterangan_invalid`, `tahun`) VALUES
(1, 'Judul Penelitian 1', 'fikri', 'fikri anggota', 'Luar Negeri / Asing', 'umm', 'Penelitian Terapan', 'bidangnya', 'lainnya', 'ekonomi', 'admka', NULL, NULL, 2017);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dospres_buku_ajar`
--
ALTER TABLE `dospres_buku_ajar`
  ADD PRIMARY KEY (`id_buku_ajar`),
  ADD KEY `fk_dosen` (`nidn`);

--
-- Indexes for table `dospres_dosen`
--
ALTER TABLE `dospres_dosen`
  ADD PRIMARY KEY (`nidn`);

--
-- Indexes for table `dospres_fasilitas_penunjang_penelitian`
--
ALTER TABLE `dospres_fasilitas_penunjang_penelitian`
  ADD PRIMARY KEY (`id_fasilitas_penunjang_penelitian`);

--
-- Indexes for table `dospres_hki`
--
ALTER TABLE `dospres_hki`
  ADD PRIMARY KEY (`id_hki`),
  ADD KEY `fk_dosen_hki` (`nidn`);

--
-- Indexes for table `dospres_luaran_lain`
--
ALTER TABLE `dospres_luaran_lain`
  ADD PRIMARY KEY (`id_luaran_lain`),
  ADD KEY `fk_dosen_luaran_lain` (`nidn`);

--
-- Indexes for table `dospres_pemakalah_forum_ilmiah`
--
ALTER TABLE `dospres_pemakalah_forum_ilmiah`
  ADD PRIMARY KEY (`id_pemakalah_forum_ilmiah`),
  ADD KEY `fk_dosen_pemakalah_forum_ilmiah` (`nidn`);

--
-- Indexes for table `dospres_penelitian_hibah_ditlitabmas`
--
ALTER TABLE `dospres_penelitian_hibah_ditlitabmas`
  ADD PRIMARY KEY (`id_penelitian_hibah_ditlitabmas`),
  ADD KEY `fk_dosen_peelitian_hibah_ditlitabmas` (`nidn_KETUA`);

--
-- Indexes for table `dospres_penelitian_hibah_non_ditlitabmas`
--
ALTER TABLE `dospres_penelitian_hibah_non_ditlitabmas`
  ADD PRIMARY KEY (`id_penelitian_hibah_non_ditlitabmas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dospres_buku_ajar`
--
ALTER TABLE `dospres_buku_ajar`
  MODIFY `id_buku_ajar` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `dospres_fasilitas_penunjang_penelitian`
--
ALTER TABLE `dospres_fasilitas_penunjang_penelitian`
  MODIFY `id_fasilitas_penunjang_penelitian` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `dospres_hki`
--
ALTER TABLE `dospres_hki`
  MODIFY `id_hki` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `dospres_luaran_lain`
--
ALTER TABLE `dospres_luaran_lain`
  MODIFY `id_luaran_lain` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `dospres_pemakalah_forum_ilmiah`
--
ALTER TABLE `dospres_pemakalah_forum_ilmiah`
  MODIFY `id_pemakalah_forum_ilmiah` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `dospres_penelitian_hibah_ditlitabmas`
--
ALTER TABLE `dospres_penelitian_hibah_ditlitabmas`
  MODIFY `id_penelitian_hibah_ditlitabmas` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `dospres_penelitian_hibah_non_ditlitabmas`
--
ALTER TABLE `dospres_penelitian_hibah_non_ditlitabmas`
  MODIFY `id_penelitian_hibah_non_ditlitabmas` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `dospres_hki`
--
ALTER TABLE `dospres_hki`
  ADD CONSTRAINT `fk_dosen_hki` FOREIGN KEY (`nidn`) REFERENCES `dospres_dosen` (`nidn`);

--
-- Ketidakleluasaan untuk tabel `dospres_luaran_lain`
--
ALTER TABLE `dospres_luaran_lain`
  ADD CONSTRAINT `fk_dosen_luaran_lain` FOREIGN KEY (`nidn`) REFERENCES `dospres_dosen` (`nidn`);

--
-- Ketidakleluasaan untuk tabel `dospres_pemakalah_forum_ilmiah`
--
ALTER TABLE `dospres_pemakalah_forum_ilmiah`
  ADD CONSTRAINT `fk_dosen_pemakalah_forum_ilmiah` FOREIGN KEY (`nidn`) REFERENCES `dospres_dosen` (`nidn`);

--
-- Ketidakleluasaan untuk tabel `dospres_penelitian_hibah_ditlitabmas`
--
ALTER TABLE `dospres_penelitian_hibah_ditlitabmas`
  ADD CONSTRAINT `fk_dosen_peelitian_hibah_ditlitabmas` FOREIGN KEY (`nidn_KETUA`) REFERENCES `dospres_dosen` (`nidn`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
