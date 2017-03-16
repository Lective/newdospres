/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100110
 Source Host           : localhost
 Source Database       : db_dospres

 Target Server Type    : MySQL
 Target Server Version : 100110
 File Encoding         : utf-8

 Date: 03/16/2017 18:53:21 PM
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `dospres_fakultas`
-- ----------------------------
DROP TABLE IF EXISTS `dospres_fakultas`;
CREATE TABLE `dospres_fakultas` (
  `id_fakultas` tinyint(2) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `nama_fakultas` varchar(40) DEFAULT NULL,
  `nama_singkat` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_fakultas`),
  KEY `namaFakultas` (`nama_fakultas`),
  KEY `namaFakPendek` (`nama_singkat`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `dospres_fakultas`
-- ----------------------------
BEGIN;
INSERT INTO `dospres_fakultas` VALUES ('1', 'Fakultas Agama Islam', 'FAI'), ('2', 'Fakultas Ilmu Sosial dan Ilmu Politik', 'FISIP'), ('3', 'Fakultas Keguruan dan Ilmu Pendidikan', 'FKIP'), ('4', 'Fakultas Hukum', 'FH'), ('5', 'Fakultas Teknik', 'FT'), ('6', 'Fakultas Ekonomi Dan Bisnis', 'FE'), ('7', 'Fakultas Pertanian - Peternakan', 'FPP'), ('8', 'Fakultas Psikologi', 'FPsi'), ('9', 'Fakultas Peternakan', 'Faperta'), ('10', 'Fakultas Ilmu Kesehatan', 'FIKES'), ('11', 'Fakultas Kedokteran', 'FK'), ('12', 'Program Pascasarjana', 'PPs');
COMMIT;

-- ----------------------------
--  Table structure for `dospres_program_studi`
-- ----------------------------
DROP TABLE IF EXISTS `dospres_program_studi`;
CREATE TABLE `dospres_program_studi` (
  `id_program_studi` tinyint(3) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `id_fakultas` tinyint(2) unsigned zerofill NOT NULL,
  `kode_depart` varchar(7) NOT NULL,
  `nama_program_studi` varchar(50) DEFAULT NULL,
  `nama_singkat` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id_program_studi`),
  KEY `kodeFakultas` (`id_fakultas`),
  KEY `kode_depart` (`kode_depart`)
) ENGINE=MyISAM AUTO_INCREMENT=256 DEFAULT CHARSET=utf8 PACK_KEYS=1;

-- ----------------------------
--  Records of `dospres_program_studi`
-- ----------------------------
BEGIN;
INSERT INTO `dospres_program_studi` VALUES ('1', '1', '001-011', 'Pendidikan Agama Islam', 'Tarbiyah'), ('2', '1', '001-012', 'Ahwal Syakhshiyyah', 'Syari\'ah'), ('3', '2', '001-021', 'Ilmu Kesejahteraan Sosial', 'Kesos'), ('4', '2', '001-022', 'Ilmu Komunikasi', 'Komunikasi'), ('5', '2', '001-023', 'Ilmu Pemerintahan', 'IP'), ('6', '3', '001-032', 'Pendidikan Matematika', 'Matematika'), ('7', '3', '001-033', 'Pendidikan Biologi', 'Biologi'), ('8', '3', '001-034', 'Pendidikan Bahasa dan Sastra Indonesia ', 'BI'), ('9', '3', '001-035', 'Pendidikan Pancasila dan Kewarganegaraan', 'PPKn'), ('10', '3', '001-036', 'Pendidikan Bahasa Inggris', 'B. Inggris'), ('11', '4', '001-040', 'Ilmu Hukum', 'Hukum'), ('12', '5', '001-051', 'Teknik Mesin', 'Mesin'), ('13', '5', '001-053', 'Teknik Elektro', 'Elektro'), ('14', '5', '001-054', 'Teknik Industri', 'Industri'), ('15', '5', '001-055', 'D-III Teknik Elektronika', 'D3 Elektro'), ('16', '6', '001-061', 'Manajemen', 'Manajemen'), ('17', '6', '001-062', 'Akuntansi', 'Akuntansi'), ('18', '6', '001-063', 'Ekonomi Pembangunan', 'EP'), ('19', '6', '001-065', 'D-III Keuangan dan Perbankan', 'D3-Bank'), ('20', '7', '001-071', 'Agroteknologi / Agronomi', 'Agronomi'), ('21', '7', '001-072', 'Agribisnis', 'Agribisnis'), ('22', '7', '001-073', 'Ilmu dan Teknologi Pangan', 'ITP'), ('23', '8', '001-081', 'Psikologi', 'Psikologi'), ('24', '12', '001-037', 'Magister Kebijakan dan Pengembangan Pendidikan', 'MKPP'), ('25', '7', '001-092', 'Teknologi Industri Peternakan', 'TIP'), ('26', '7', '001-093', 'Budidaya Perairan', 'Perikanan'), ('27', '12', '001-025', 'Magister Sosiologi', 'MS'), ('28', '12', '001-066', 'Magister Manajemen', 'MM'), ('29', '12', '001-013', 'Magister Ilmu Agama Islam', 'MAg'), ('30', '10', '001-001', 'D-III Keperawatan', 'D-III Kepe'), ('31', '2', '001-024', 'Sosiologi', 'Sosiologi'), ('32', '7', '001-074', 'Kehutanan', 'Kehutanan'), ('33', '11', '001-002', 'Pendidikan Dokter', 'Kedokteran'), ('34', '5', '001-052', 'Teknik Sipil', 'Sipil'), ('35', '7', '001-091', 'Peternakan', 'Peternakan'), ('36', '2', '001-026', 'Ilmu Hubungan Internasional', 'HI'), ('37', '5', '001-056', 'Teknik Informatika', 'TI'), ('38', '12', '001-043', 'Magister Ilmu Hukum', 'MH'), ('39', '12', '001-075', 'Magister Agribisnis', 'Magr'), ('40', '11', '001-003', 'Profesi Dokter', 'Dokter'), ('41', '10', '001-004', 'Farmasi', 'Farmasi'), ('42', '10', '001-006', 'Ilmu Keperawatan', 'Perawat S1'), ('43', '3', '001-039', 'Pendidikan Guru Sekolah Dasar', 'PGSD'), ('50', '12', '', 'Magister Psikologi Profesi', 'MPsi'), ('45', '12', '', 'Doktor Ilmu Sosial dan Ilmu Politik', 'Doktor'), ('46', '10', '', 'Pendidikan Profesi Ners', 'Ners'), ('47', '10', '', 'Profesi Apoteker', 'Apt'), ('48', '3', '', 'PSKGJ - Pendidikan Guru Sekolah Dasar', 'PSKGJ-PGSD'), ('49', '10', '', 'Fisioterapi', 'Fisio'), ('44', '12', '', 'Magister Psikologi ', 'MPsikolog'), ('51', '1', '', 'Ekonomi Syariah', 'Eko Syariah'), ('52', '12', '', 'Doktor Pendidikan Agama Islam', 'Dok PAI'), ('53', '12', '', 'Magister Pendidikan Matematika', 'Mag Matik'), ('54', '6', '', 'Profesi Akuntansi', 'Pro Akunt'), ('55', '12', '', 'Magister Pendidikan Bahasa dan Sastra Indonesia', 'Mag BI'), ('56', '12', '', 'Magister Pendidikan Bahasa Inggris', 'Mag BIngg'), ('57', '1', '', 'Pendidikan Bahasa Arab', 'PBA'), ('58', '12', '', 'Doktor Ilmu Pertanian', 'Ilmu Pertanian'), ('59', '3', '', 'Profesi Guru Pendidikan Biologi', '--'), ('60', '3', '', 'Profesi Guru Pendidikan Guru Sekolah Dasar', '--');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
