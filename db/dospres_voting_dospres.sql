-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 17 Apr 2017 pada 13.06
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
-- Struktur untuk view `dospres_voting_dospres`
--

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `dospres_voting_dospres`  AS  select `a`.`id_calon_dospres` AS `id_calon_dospres`,`a`.`nidn` AS `nidn`,`b`.`nama_lengkap` AS `nama_lengkap`,`b`.`nip` AS `nip`,`a`.`nilai` AS `nilai`,`a`.`tahun` AS `tahun` from (`dospres_calon_dosen_berprestasi` `a` join `dospres_dosen` `b`) where (`b`.`nidn` = `a`.`nidn`) ;

--
-- VIEW  `dospres_voting_dospres`
-- Data: Tidak ada
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
