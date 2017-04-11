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

 Date: 04/11/2017 17:01:40 PM
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `dospres_buku_ajar`
-- ----------------------------
DROP TABLE IF EXISTS `dospres_buku_ajar`;
CREATE TABLE `dospres_buku_ajar` (
  `id_buku_ajar` int(10) NOT NULL AUTO_INCREMENT,
  `nidn` varchar(10) DEFAULT NULL,
  `judul` varchar(1000) DEFAULT NULL,
  `isbn` varchar(50) DEFAULT NULL,
  `jml_halaman` int(11) DEFAULT NULL,
  `penerbit` varchar(200) DEFAULT NULL,
  `keterangan_invalid` varchar(100) DEFAULT NULL,
  `tahun` int(5) DEFAULT NULL,
  `file` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_buku_ajar`),
  KEY `fk_dosen` (`nidn`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=315 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- ----------------------------
--  Records of `dospres_buku_ajar`
-- ----------------------------
BEGIN;
INSERT INTO `dospres_buku_ajar` VALUES ('1', '0710086401', 'Menggagas Makna, Menggapai Cita ', '978-979-3984-32-2', '98', 'Aditya Media, Yogyakarta', '', '2010', null), ('2', '0710086401', 'Peran Matematika dalam Penentuan Arah Kiblat dan Implikasisnya (Bagian 3 Buku Muhammadiyah dan Tantangan Abad Baru, Percikan Pemikiran dari Negeri Jiran)', '978-979-990042-3-2', '15', 'Matan Press dan PCIM Kualalumpur  ', '', '2010', null), ('3', '0021026602', 'Eradikasi Kemiskinan Nelayan', '978-602-8743-13-6', '134', 'Unpad Press', '', '2010', null), ('4', '0711037502', 'Hak Asasi Manusia dalam Perspektif Islam', '9,78603E+12', '112', 'LPSHAM Muhammadiyah Jatim dan Madani dan Instrans', '', '2010', null), ('5', '0721085801', 'Menulis Buku Penuntun Praktikum Mikrobiologi', '', '60', 'UMM Press', 'isbn tidak ada', '2010', null), ('6', '0707066301', 'Modul Praktikum Pengelolaan Keuangan', '978-979-3984-10-0', '57', 'Aditya Media Publishing', '', '2010', null), ('7', '0729126402', 'Pendidikan Islam (Konsep dan Penegembangann', '978-979-796-184-8', '197', 'UMM Press', '', '2010', null), ('8', '0715017101', 'Nutrisi Ikan', '978-979-796-183-1', '317', 'UMM Press', '', '2010', null), ('9', '0718108501', 'CERDAS MEMENANGKAN LOMBA KARYA ILMIAH', '9,78603E+12', '213', 'Interprebook', '', '2010', null), ('10', '0702077601', 'Akuntansi Sektor Publik', '978-979-796-083-4', '320', 'UMM PRESS', '', '2010', null), ('11', '0717076602', 'awas makanan haram dari produk hewani', '1369-6874', '50', 'Adtya', '', '2010', null), ('12', '0711026401', 'Psikologi Eksperimen', '979-3021-46-2', '121', 'UMM PRESS', '', '2010', null), ('13', '0010116411', 'PROBIOTIK, Konsep dan Penerapan pada Ternak Ruminansia', '979-796-032-3', '155', 'UMM Press', '', '2010', null), ('14', '0005106602', 'Miskonsepsi dan Kontroversi Evolusi serta Implikasinya pada Pembelajaran', '978-979-796-115-2', '272', 'UMM Press', '', '2010', null), ('15', '0005106602', 'Teknik dan Metode Dasar dalam Mikrobiologi. Cetakan Kedua', '978-979-796-054-4', '305', 'UMM Press', '', '2010', null), ('16', '0008106601', 'English for Biology', '9793021667', '190', 'UMM Press', '', '2010', null), ('17', '0008106601', 'English for Medical Science', '9,7898E+12', '283', 'UMM Press', '', '2010', null), ('18', '0710126701', 'Kegawatan Neurologi', '976-602-8704-14-4', '207', 'Cakrawala Indonesia', '', '2010', null), ('19', '0728076501', 'Pelatihan Aplikasi Internet Terpadu edisi IV', '978-979-190-9', '133', 'UMM', '', '2010', null), ('20', '0024086702', 'Komunikasi Pembangunan', '978-602-98226-6-3', '345', 'Kerjasama Jurusan Komunikasi Fisip-UMM dengan Buku Litera', '', '2010', null), ('21', '0024086702', 'Mozaik Pemikiran Demokrasi Indonesia, Suatu Kemasan Banyak Rasa. (Tim Penulis)', '978-602-96721-3-8', '278', 'Kerjasama Fisip-UMM dgn Buku Litera', '', '2010', null), ('22', '0024086702', 'Teknologi Industri Media & Perubahan Sosial. (Tim Penulis)', '978-602-96721-9-0', '164', 'Kerjasama Program Studi Sosiologi Komunikasi Pascasarjana –UMM dengan Buku Litera', '', '2010', null), ('23', '0722097001', 'Citizen Journalism Sebagai Katarsis baru Masyarakat', '978-602-96721-7-6', '120', 'Buku Litera', '', '2010', null), ('24', '0722097001', 'Dasar-Dasar Penulisan', '979-796-012-9', '136', 'UMM Press', '', '2010', null), ('25', '0722097001', 'Jurnalisme Kemanusiaan: Membongkar Pemikiran Jakob Oetama Tentang Pers dan Jurnalisme', '978-979-796-174-6', '123', 'UMM Press', '', '2010', null), ('26', '0722097001', 'Pengantar Komunikasi Massa', '9797691128', '276', 'Rajawali Pers', '', '2010', null), ('27', '0012076602', 'Pendidikan Pancasila dan Kewarganegaraan dalam Membangun Karakter Bangsa (Nation and Character Building) Refleksi, Komitmen dan Prospek)', '602-8418-21-8', '293', 'Laboratorium PKn - UPI Bandung', '', '2010', null), ('28', '0012076602', 'Proceding Seminar Aktualisasi Pendidikan Karakter Bangsa ', '978-602-9559-10-1', '321', 'Widya Aksara Press dengan Prodi PKn - SPs UPI Bandung', '', '2010', null), ('29', '0012076602', 'Prosiding Seminar Internasional Pendidikan Kewarganegaraan   “Building Civic Competences in Global Era Through Civic Education: Problem and Prospect” ', '978-602-8418-19-5', '254', 'Laboratorium PKn - UPI Bandung', '', '2010', null), ('30', '0026036301', 'Fatwa MUI dan Kewenangan Pengadilan Agama Dalam Penyelesaian Sengketa Ekonomi Syariah', '165-574-526', '137', 'UMM Pres', '', '2010', null), ('31', '0026036301', 'Hukum Komersial ', '979-3602-24-2', '278', 'UMM PRESS', '', '2010', null), ('32', '0026036301', 'Model Teoritik Pengembangan Studi Penyelesaian Konflik Kompetensi (Pengadilan Niaga versus BANI)', '978-979-98299-6-2', '160', 'Malang', '', '2010', null), ('33', '0719097502', 'English for International Relations', '978-979-796-168-5', '210', 'UMM Press', '', '2010', null), ('34', '0730066102', 'Psikologi Pendidikan, Romlah', '978-979-796-167-8', '153', 'UMM-Press', '', '2010', null), ('35', '0013046202', 'Materi Biologi  SMA/ MA (Anggota)', '-', '0', 'Panitya Sertifikasi Guru (PSG) Rayon 44 UMM', 'isbn tidak ada', '2010', null), ('36', '0013046202', 'Materi IPA (Anggota)', '-', '0', 'Panitya Sertifikasi Guru (PSG) Rayon 44 UMM', 'isbn tidak ada', '2010', null), ('37', '0013046202', 'Petunjuk Praktikum Histologi  ', '-', '0', 'Lab. Biologi', 'isbn tidak ada', '2010', null), ('38', '0013046202', 'Petunjuk Praktikum Mikroteknik', '-', '50', 'Lab. Biologi', 'isbn tidak ada', '2010', null), ('39', '0024046303', 'Bahasa, Masyarakat dan Kekuasaan ', '978-979-1277-06-8', '275', 'Pustaka Pelajar, Yogyakarta', '', '2010', null), ('40', '0008106401', 'Menuju Usaha Sapi Perah Sukses', '978-979-796-084-8', '202', 'UMM-Press', '', '2010', null), ('41', '0722126701', 'ATTITUDES TO HUMAN RIGHTS AND FREEDOM OF RELIGION OR BELIEF IN INDONESIA', '978-979-21-2863-5', '108', 'Kanisus', '', '2010', null), ('42', '0722126701', 'Ediologi dan Praksis Gerakan Sosial Kaum Fundamental', '979 - 3602 - 70 - 8', '321', 'UMM PRESS', '', '2010', null), ('43', '0712125601', 'Seni dan Etika Bercinta Menurut Al-Qur’an dan Hadis', '978-979-796-162-6', '288', 'UMM-Press', '', '2010', null), ('44', '0721076301', '‘Grammar & Written Expression 1’', '978-979-796-171-8', '164', 'UMM Press', '', '2010', null), ('45', '0706106501', 'Rekonstruksi Pendidikan Agama untuk Membangun Etika Sosial dalam Kehidupan Berbangsa dan Bernegara', '-', '55', 'UMM-Press', 'isbn tidak ada', '2010', null), ('46', '0706106501', 'The Spiritual Leadership Pengefektifan Organisasi Noble Industri Melalui Pendekatan Spiritual Etis', '979-3602-57-0', '258', 'UMM-Press', '', '2010', null), ('47', '0716036801', 'Modul Sosiologi Gender', '978-979-011-545-3', '300', 'Universitas Terbuka ', '', '2010', null), ('48', '0721036201', 'Politisi Perempuan dalam Dinamika Politik di Indonesia dalam Bunga Rampai PERCIKAN PEMIKIRAN tentang SOSIOLOGI POLITIK', '978-979-796-174-9 ', '195', 'UMM Press', '', '2010', null), ('49', '0721036201', 'Sosiologi Gender (Modul 1-9)', '978-979-011-545-3', '243', 'penerbit UT, Jakarta', '', '2010', null), ('50', '0709016301', 'Nutrisi Ikan', '978-979-796-183-1', '317', 'UMM Press', '', '2010', null), ('51', '0705037702', 'Mudah & Cepat Menghafal Surat-surat Pilihan', '978-602-8512-77-0', '120', 'Ziyad Visi Media', '', '2010', null), ('52', '0705037702', 'Mudah, Cepat & Praktis Belajar Tajwid', '978-602-9298-18-5', '164', 'Ziyad Visi Media', '', '2010', null), ('53', '0705037702', 'Mudah dan Cepat Menghafal Surat-surat Pilihan', '978-602-8512-77-0', '118', 'Shahih Ziyad Visi Media', '', '2010', null), ('54', '0720026601', 'Sistem Agribisnis Terintegrasi Hulu-Hilir', '978-979-505-217-6', '216', 'Muara Indah, Bandung', '', '2010', null), ('55', '0706066501', 'Menggambar Teknik Elektro', '978-979-796-175-6', '182', 'UMM Press', '', '2010', null), ('56', '0026026201', 'Metodologi Penelitian Pendidikan', '978-979-796-215-9', '103', 'UMM PRESS', '', '2010', null), ('57', '0702127601', 'Ekonomi Politik Kebijakan Gula di Indonesia 1998-2002', '978-979-796-218-0', '90', 'UMM Press', '', '2010', null), ('58', '0721085801', 'Menulis Buku Penuntun Praktikum Dasar-Dasar Perlindungan Tanaman', '', '70', 'UMM Press', 'isbn tidak ada', '2010', null), ('59', '0021076302', 'Buku ESP Listening & Communication 1 (editor)', 'no.978-979-796-172-5', '178', 'UMM Press', '', '2010', null), ('60', '0021076302', 'Buku ESP Listening II (Tim) tahun 2012', '978-979-213-5', '0', 'UMM Press', '', '2010', null), ('61', '0724088201', 'Panduan Penulisan Tugas Akhir PGSD', '-', '50', 'Prodi PGSD', 'isbn tidak ada', '2010', null), ('62', '0723096201', 'Reading and Vocabulary 1', '978-979-796-173-2', '154', 'UMM Press', 'Isian tidak lengkap', '2010', null), ('63', '0718108501', 'Jago Karya Ilmiah Remaja', '9,78603E+12', '171', 'Pinus Grup', '', '2010', null), ('64', '0029076501', 'Nutrisi dan Pakan untuk Sapi Perah', '978-979-796-202-9', '203', 'UMM PRESS', '', '2010', null), ('65', '0717045901', 'Islam dan Ideologi-Ideologi Modern', '9,78603E+12', '174', 'Bayumedia Publishing Malang', '', '2010', null), ('66', '0717045901', 'Pengantar Sains Politik Islam', '9,78603E+12', '222', 'Bayumedia Publishing Malang', '', '2010', null), ('67', '0711026401', 'Kesehatan Mental', '979-3021-10-1', '308', 'UMM PRESS', '', '2010', null), ('68', '0711026401', 'Psikologi Konseling', '979-3021-11-X', '220', 'UMM Press', 'Isian tidak lengkap', '2010', null), ('69', '0030036201', 'Pengendalian Penyaklit Unggas', '978-979-796-066-7', '161', 'UMM Press', '', '2010', null), ('70', '0005106602', 'Kesehatan Masyarakat', '978-979-796-214-9', '302', 'UMMPress', '', '2010', null), ('71', '0005106602', 'Mikrobiologi Umum. Cetakan Keempat', '978-979-796-191-6', '344', 'UMM  Press', '', '2010', null), ('72', '0008106601', 'Reading and Vocabulary 1', '9,7898E+12', '154', 'UMM Press', 'Isian tidak lengkap', '2010', null), ('73', '0008106601', 'Reading & Vocabulary 2', '9,7898E+12', '152', 'UMM Press', 'Isian tidak lengkap', '2010', null), ('74', '0710126701', 'Pemeriksaan Klinis Di Bidang Penyakit Saraf', '978-979-796-210-4', '234', 'UMM Press', '', '2010', null), ('75', '0710126701', 'Pemeriksaan Klinis Neurologis', '978-979-796-146-6', '184', 'UMM PRESS', '', '2010', null), ('76', '0728076501', 'Pelatihan Aplikasi Internet Terpadu edisi V', '978-979-190-9', '133', 'UMM', '', '2010', null), ('77', '0706046704', 'Proses Produksi II ( Mesin-mesin Non Konvensional)', '', '600', '', 'isbn tidak ada', '2010', null), ('78', '0024086702', 'Komunikasi Tradisional: Pesan Kearifan Lokal Masyarakat Suawesi Selatan Melalui Berbagai Media Warisan', '978-602-19217-3-9', '325', 'Buku Litera', '', '2010', null), ('79', '0704086901', 'Metalurgi Pengelasan', '', '215', 'Mandiri', 'isbn tidak ada', '2010', null), ('80', '0012076602', 'Buku - Modul Perangkat Pembelajaran PKn SMP/MTs (Bahan Ajar PLPG – PSG Rayon 144)', '978-979-796-202-10', '136', 'PLPG  - Panitia PSG Rayon 144 Malang', '', '2010', null), ('81', '0012076602', 'Buku Pendidikan Karakter Berbasis Budaya Akademik, Religius dan Manusiawi (PKBB AREMA)', '978-979-796-122-0', '180', 'Dikti & UMM Press', '', '2010', null), ('82', '0012076602', 'Pendidikan Karakter Berbasis Budaya Akademik Religius dan Manusiawi', '978-979-796-221-0', '180', 'UMM PRESS', '', '2010', null), ('83', '0012076602', 'Procceding Abstract International Seminar and The 3rd Colloqium  - Reaktualisasi Pendidikan Karakter dalam Upaya Mewujudkan Civil Society” (Reactualization Nations Educational Character With Multicultural Citizenship Education Development Model Based On Local Wisdom in Higher Education)', '978-979-796-202-9', '74', 'FKIP- UMM Press', '', '2010', null), ('84', '0026036301', 'Aspek Hukum Bisnis', '978-979-98299-7-9', '198', 'Citra Mentari', '', '2010', null), ('85', '0026036301', 'Harmonisasi Konsep Keuangan Negara Terhadap Kepailitan BUMN Persero  Demi Menjamin Kepastian Hukum', '978-979- 98299- 8', '110', 'Citra Mentari, Malang', '', '2010', null), ('86', '0026036301', 'Kepailitan BUMN', '979-978-794-684-9', '135', 'UMM Press', '', '2010', null), ('87', '0001016504', 'Konsep dan Aplikasi Penelitian Gender', '978-979-505-216-4', '215', 'Muara Indah, Bandung', '', '2010', null), ('88', '0001016504', 'Sistem Agribisnis Terintegrasi Hulu-Hilir', '978-979-505-217-6', '216', 'Muara Indah, Bandung', 'Dientri lebih dari satu kali', '2010', null), ('89', '0719097502', 'English for Biology', '978-979-796-214-2', '235', 'UMM Press', '', '2010', null), ('90', '0006086501', 'Khasiat Beluntas sebagai Antifertilitas)- Uji pre klinis', '978-979-796-190-9', '97', 'UMM', '', '2010', null), ('91', '0716096803', 'Pengantar Klinik Ilmu Bedah', '978-979-796-139-8', '175', 'UMM PRESS', '', '2010', null), ('92', '0013046202', 'Diktat Fisika Biologi', '-', '0', 'Prodi Biologi', 'isbn tidak ada', '2010', null), ('93', '0013046202', ' Panduan Penulisan Tugas Akhir Pendidikan Biologi (Anggota)', '-', '0', 'Prodi Biologi', 'isbn tidak ada', '2010', null), ('94', '0723116801', 'Ilmu Social dan Budaya Dasar ( ISBD )', '978-979-796-197-8', '136', 'UMM Press', '', '2010', null), ('95', '0721076301', '‘Grammar & Written Expression 2’', '978-979-796-212-8', '134', 'UMM Press', '', '2010', null), ('96', '0712088203', 'Diplomasi Publik Jepang: Perkembangan dan Tantangan', '978-979-450-650-9', '114', 'Ghalia Indonesia', '', '2010', null), ('97', '0716036801', 'Demokrasi Civil Society dan Globalisasi', '978-602-99074-6-9', '236', 'Buku Litera Yogyakarta', '', '2010', null), ('98', '0008116301', 'Pedoman Integrasi Sistem Pengembangan Industri Anggrek  \n', '', '85', 'Direktorat Budidaya dan Pascapanen Florikultura Kementrian Pertanian', 'isbn tidak ada', '2010', null), ('99', '0008116301', 'Pedoman Penyilangan Anggrek', '', '36', 'Direktorat Perbenihan Hortikultura Kementrian Pertanian', 'isbn tidak ada', '2010', null), ('100', '0721036201', 'Modul Pemberdayaan Masyarakat partisipatif Integratif Melalui Pengembangan Industri Non-corporate Menuju Pembangunan Karakter Bangsa yang Berdaya Saing (tim)', '978-979-796-219-7', '69', 'UMM Press', '', '2010', null), ('101', '0717046701', 'Cepat Bercakap Bahasa Arab ', '979-9602-20-1', '176', 'UMM Press', '', '2010', null), ('102', '0707026601', 'Buku Teori Perilaku Organisasi', '979-8540-33-6', '150', 'UMM Press', '', '2010', null), ('103', '0725127302', 'Modul Praktikum Sistem Informasi Akuntansi', '978-979-3984-19-3', '52', 'Aditya Media Publishing', '', '2010', null), ('104', '0722076401', 'Rekayasa Genetik Padi Indica (Editor)', '978-602-7636-24-8', '151', 'penerbit Buku Litera Yogyakarta.', 'Dientri lebih dari satu kali', '2010', null), ('105', '0705037702', 'Rahasia 7 Waktu Shalat ', '978-602-9298-62-8', '130', 'Shahih, Ziyad Visi Media ', '', '2010', null), ('106', '0705037702', 'Rahasia 7 Waktu Shalat', '978-602-9298-62-8', '132', 'Ziyad Visi Media', '', '2010', null), ('107', '0710086401', 'Model Pembelajaran Matematika Berbasis Metakognitif', '978-602-8299-28-2', '155', 'Selaras, Malang', '', '2010', null), ('108', '0017046802', 'Pola Parta & Pemilih di Tengah MemudarnyaPolitik Aliran', '978-602-18554-1-6', '242', 'Citra Mentari Malang', '', '2010', null), ('109', '0703045801', 'Enhance Industrial Competitiveness through Improved ylang Essential Oil Quality and Synergy among members of the Cluster', '978-602-9030-09-9', '883', 'Jember University Press', '', '2010', null), ('110', '0703045801', 'Prosiding Seminar Nasional Dies Natalis XIII MMA \"Penguatan Agribisnis Perberasan Guna Mewujudkan Kemandirian dan Kesejahteraan Petani : Perilaku Petani Pengguna Pupuk Organik dan Anorganik', '978-979-96490-3-4', '347', 'MMA-UGM & PERHEPI', '', '2010', null), ('111', '0702127601', 'Problem dan Prospek Hubungan Indonesia – Australia Pasca Jajak Pendapat di Timor Timur', '978-602-225-428-7', '117', 'Leutikaprio.Press', '', '2010', null), ('112', '0721085801', 'Menulis Buku Pengenalan Jasad Penganngu Tanaman (dalam proses isbn)', '', '250', 'UMM Press', 'isbn tidak ada', '2010', null), ('113', '0707066301', 'Modul Praktikum Pengelolaan Keuangan', '978-979-3984-10-0', '57', 'Aditya Media Publishing', '', '2010', null), ('114', '0021076302', 'ESP Listening II (Editor)', 'No.978-979-213-5', '75', 'UMM Press', '', '2010', null), ('115', '0705056501', 'Sistem Kontrol', '978-979-796-239-5', '103', 'UMM Press', '', '2010', null), ('116', '0726076002', 'Ilmu Qawa’id cara Mudah memahami Teks-teks Berbahasa Arab', '', '62', 'Diktat', 'isbn tidak ada', '2010', null), ('117', '0726076002', 'Membangun kepribadian dengan Akhlak Islam', '', '85', 'Diktat', 'isbn tidak ada', '2010', null), ('118', '0724068501', 'BELAJAR DARI NEGERI GANDHI', '978-602-7677-10-4', '0', 'GRE PUBLISHING', '', '2010', null), ('119', '0723096201', 'English For Agribusiness ', '978-979-796-238-8', '313', 'UMM Press', '', '2010', null), ('120', '0723096201', 'English For Agronomy', '978-979-796-232-6', '290', 'UMM Press', '', '2010', null), ('121', '0718108501', 'Ekologi Tumbuhan', 'Induksi PJJ DIKTI', '500', 'Biologi FKIP UMM', '', '2010', null), ('122', '0718108501', 'Kamus Penyakit Pada Manusia', '9792930558', '168', 'Andi Publisher', '', '2010', null), ('123', '0019035301', 'Pembelajaran Kelas Rangkap', 'DIP-BPJJ', '35', 'Dikti', '', '2010', null), ('124', '0717045901', 'AHMADIYAH  Tradisi Mubahalah  Strategi Pembuktian  Kebenaran', '9,78603E+12', '227', 'Aditya Media Yogyakarta', '', '2010', null), ('125', '0717045901', 'Kontroversi Faham Islam AHMADIYAH', '9,7898E+12', '210', 'Aditya Media Yogyakarta', '', '2010', null), ('126', '0016076602', 'Pengembangan Agroindustri di Jawa Timur', '978-979-796-241-8', '103', 'UMM Press', '', '2010', null), ('127', '0709096001', 'Konservasi Lahan Hutan dan Pengelolaan DAS', '978-979-796-224-1', '217', 'UMM Press', '', '2010', null), ('128', '0005106602', 'Mikrobiologi Umum', '978-979-796-191-6', '344', 'UMM Press', '', '2010', null), ('129', '0005106602', ' Teknik dan Metode Dasar Mikrobiologi', '978-979-796-054-4', '305', 'UMM Press', '', '2010', null), ('130', '0012036801', 'Rekayasa Genetik Padi Indica.', '978-602-7636-24-8', '151', 'penerbit Buku Litera Yogyakarta', '', '2010', null), ('131', '0008106601', 'Engliah for Food Science and Technology', '9,7898E+12', '315', 'UMM-Press', '', '2010', null), ('132', '0008106601', 'English for Accounting', '9,7898E+12', '317', 'UMM-Press', '', '2010', null), ('133', '0008106601', 'English for Law', '9,7898E+12', '285', 'UMM Press', '', '2010', null), ('134', '0008106601', 'English for Tourism', '9,7898E+12', '345', 'UMM Press', '', '2010', null), ('135', '0715056502', 'Akuntansi Biaya  I (Edisi Revisi)', '978-979-796-103-9', '216', 'UMM Press', '', '2010', null), ('136', '0715056502', 'Modul Perusahaan Pemanufakturan ', '978-979-3984-06-3', '100', 'UMM Press', '', '2010', null), ('137', '0710126701', 'Neuroanatomi dan Aplikasi Klinis', '978-979-796-224-1', '221', 'UMM Press', '', '2010', null), ('138', '0028126501', 'Pendidikan Kewarganegaraan di Perguruan Tinggi', '978-979-796-246-3', '176', 'UMM Press', '', '2010', null), ('139', '0701056701', 'Jatuhnya Sebuah Tamadun Menyingkap Sejarah Kegemilangan dan Kehancuran Imperium Khalifah Islam', '978-979-796-250-0', '272', 'UMM Press', '', '2010', null), ('140', '0728076501', 'Pelatihan Aplikasi Internet Terpadu  edisi VI', '978-979-190-9', '117', 'UMM', '', '2010', null), ('141', '0731017301', 'Panduan Menulis Skripsi Jurusan Komunikasi', '978-979-796-265-4', '103', 'UMM Press', '', '2010', null), ('142', '0722097001', 'Dasar-Dasar Penulisan', '978-979-796-160-1', '108', 'UMM Press', '', '2010', null), ('143', '0722097001', 'Jurus Jitu Nulis Artikel yang Baik dan Benar', '978-979-450-660-8', '230', 'Ghalia', '', '2010', null), ('144', '0722097001', 'Media Sosial Baru dan Munculnya Revolusi Proses Komunikasi', '9,78603E+12', '140', 'DP2M DIKTI, Ilmu Komunikasi UMM, dan Buku Litera', '', '2010', null), ('145', '0722097001', 'Tuhan Baru Masyarakat Cyber di Era Digital', '9,78603E+12', '238', 'Aditya Media Publishing', '', '2010', null), ('146', '0012076602', 'Aktualisasi Nilai-Nilai Pancasila dalam Membangun Karakter Warga Negara', '978-602-99677-1-5', '426', 'Widya Aksara Press dengan Laboraorium PKn  UPI Bandung ', '', '2010', null), ('147', '0012076602', 'Modul Pendalaman Materi Matapelajaran PKn (Bahan Ajar PLPG – PSG Rayon 144)', '978-979-796-202-11', '294', 'PLPG  - Panitia PSG Rayon 144 Malang', '', '2010', null), ('148', '0012076602', 'Prosiding Seminar Perkembangan Pendidikan Nilai dan Kewarganegaraan di Indonesia dan Malaysia ', '978-602-99677-1-5', '189', 'Prodi PU & PKn - SPs UPI Bandung dengan Pusat Pengajian Penyelidikan USM', '', '2010', null), ('149', '0710107401', 'SOSIOLOGI LINGKUNGAN', '978-979-769-185-1', '213', 'PT RAJAGRAFINDO PERSADA', '', '2010', null), ('150', '0026036301', 'Hukum Kepailitan', '978-979-796-243-2', '492', 'UMM Press', '', '2010', null), ('151', '0026036301', 'Hukum Pengangkutan di Indonesia', '979796083-2', '304', 'Citra Mentari', '', '2010', null), ('152', '0026036301', 'Potret Hukum: Kumpulan Pemikiran Menghormati 70 tahun Prof. H. Rozali Abdullah, S.H., (Studi Kasus Putusan Kepailitan PT Dirgantara Indonesia Persero) Dalam Perspektif Hukum Keuangan Publik (Tulisan Bersama/ Kelompok).', '978-979-15913-5-5', '462', 'Total Media, Yogyakarta', '', '2010', null), ('153', '0026036301', 'Seri Unsur-unsur Penyusun Bangunan Negara Hukum: Bab-bab Tentang Hukum Perburuhan Indonesia (Penegakan Hak Buruh Dalam Kepailitan), (Tulisan Bersama/ Kelompok).', '978-979-3740-94-7', '172', 'Universiteit Leiden, Universiteit of Groningen, Universitas Indonesia, Pustaka Larasan', '', '2010', null), ('154', '0001016504', 'Dasar Manajemen Pendekatan Aplikasi Bidang Pertanian', '978-979-796-244-9', '190', 'UMM Press', '', '2010', null), ('155', '0725046701', 'Modul Praktikum Pemerisaan Akutansi ', '978-979-3984-124', '80', 'Aditya Media ', '', '2010', null), ('156', '0719097502', 'English for Agribusiness', '978-979-796-214-2', '228', 'UMM Press', '', '2010', null), ('157', '0007046704', 'PENGANTAR pENDIDIKAN', '979-796-026-9', '110', 'UMM PERS', '', '2010', null), ('158', '0730066102', 'AIK (Al-Islam dan Kemuhammadiyahan) 2, Aqidah dan Ibadah, Romlah dkk', '978-979-796-252-4', '383', 'UMM Press', '', '2010', null), ('159', '0730066102', 'Materi Keislaman dan Ibadah, Romlah dkk', '', '245', 'UPT. P2KK UMM', 'isbn tidak ada', '2010', null), ('160', '0006086501', 'Khasiat Beluntas sebagai Antifertilitas)- Uji pre klinis ', ' 978-979-796-190-9', '97', 'UMM  Press', '', '2010', null), ('161', '0701068702', 'Korupsi Demokrasi dan Pembangunan Daerah', '978-602-19217-4-6', '134', 'Buku Litera', '', '2010', null), ('162', '0712036401', 'Perpajakan ', '978-979-3984-124', '315', 'UMM Press', '', '2010', null), ('163', '0003116301', 'Pengantar Ekologi Hewan (Konsep, Prilaku, Psikologi dan Komunikasi)', '978-979-796-085-8', '151', 'UMM PRESS', '', '2010', null), ('164', '0012076402', 'Menuju Sistem Pemerintahan Presidensiil Murni', '978 602-99833-9-5', '190', 'Setara Press,  Malang', '', '2010', null), ('165', '0721076301', 'Buku ‘English For Food Science and Technology’', '978-979-796-237-1', '316', 'UMM Press', '', '2010', null), ('166', '0721076301', 'Buku ‘English For International Relations’', '978-979-796-172-5', '291', 'UMM Press', '', '2010', null), ('167', '0706106501', 'Relasi Kemanusiaan dalam Keberagamaan: Mengembangkan Etika Sosial melalui Pendidikan', '978-602-7573-16-1', '310', 'Karya Putra Dewanti', '', '2010', null), ('168', '0013016701', 'Dasar-dasar Hukum Pidanan di Indonesia', '978-979-796-058-2', '339', 'UMM Press', '', '2010', null), ('169', '0712088203', 'Bisnis Keluarga, Keluarga Bisnis: Strategi Jaringan Bisnis Perusahaan Jepang, Tiongkok dan Korea Selatan dalam Kemajuan Ekonomi', '978-602-19217-5-3', '146', 'Buku Litera', '', '2010', null), ('170', '0707056301', 'Psikologi Lintas Budaya', '978-979-796-071-1', '209', 'UMM Press', '', '2010', null), ('171', '0707056301', 'Psikologi Sosial', '978-979-796-102-2', '244', 'UMM Press', '', '2010', null), ('172', '0712086201', 'Statistika dalam Penelitian Psikologi dan Pendidikan', '978-979-796-35-7', '326', 'UMM Press', '', '2010', null), ('173', '0008116301', 'Road Map Anggrek Indonesia', '978-979-3844-41-1', '36', 'Direktorat Budidaya dan Pascapanen Florikultura Kementrian Pertanian', '', '2010', null), ('174', '0724036501', 'Matematika Ekonomi (Edisi Revisi)', '978-979-796-046-9', '270', 'UMM Press', '', '2010', null), ('175', '0718038003', 'A – Z Psikologi', '978-979-29-3215-7', '268', 'Andi Yogyakarta', '', '2010', null), ('176', '0716126701', 'Komunikasi Organisasi', '978-979-796-048-3', '324', 'UMM Press', '', '2010', null), ('177', '0725127302', 'Praktikum Sistem Informasi Akuntansi', '978-979-3984-19-3', '72', 'Aditya Media Publishing', '', '2010', null), ('178', '0705037702', 'Dahsyatnya 4 Sifat Nabi', '978-602-7929-06-7', '236', 'penerbit Sajada', '', '2010', null), ('179', '0705037702', 'Jurus Jitu Agar Anak Rajin Shalat Cepat Hafal al-Qur\'an dan Berbakti kepada Orang Tua', '978-602-7929-44-9', '113', 'Ahad Books ', '', '2010', null), ('180', '0705037702', 'Kesalahan-kesalahan Yang Sering Terjadi dalam Puasa dan Zakat', '978-602-7929-24-1', '142', 'al-Qudwah Publishing', '', '2010', null), ('181', '0706066704', 'Modul Praktikum 1: Praktik kerja Akuntansi Perusahaan Jasa', '978-979-3984-00-1', '17', 'Aditya Media Publishing', 'jumlah halaman <40', '2010', null), ('182', '0706066704', 'Modul Praktikum 2: Praktik Kerja Akuntansi Perusahaan Jasa', '978-979-3984-02-5', '25', 'Aditya Media Publishing', 'jumlah halaman <40', '2010', null), ('183', '0706066704', 'Modul Praktikum 3: Praktik Kerja Akuntansi Perusahaan Jasa', '978-979-3984-03-2', '8', 'Aditya Media Publishing', 'jumlah halaman <40', '2010', null), ('184', '0706066704', 'Modul Praktikum 4: Praktik Kerja Akuntansi Perusahaan Jasa', '978-979-3984-05-6', '35', 'Aditya Media Publishing', 'jumlah halaman <40', '2010', null), ('185', '0706066704', 'Praktik Kerja Akuntansi Perusahaan Jasa ( Modul 1)', '9,78979E+12', '17', 'Accounting Lab FEB UMM', 'jumlah halaman <40', '2010', null), ('186', '0706066704', 'Praktik Kerja Akuntansi Perusahaan Jasa (Modul 3)', '9,78979E+12', '8', 'Laboratorium FEB-UMM', 'jumlah halaman <40', '2010', null), ('187', '0706066704', 'Praktik Kerja Akuntansi Perusahaan Jasa (Modul 4)', '9,78979E+12', '35', 'Laboratorium FEB-UMM', 'jumlah halaman <40', '2010', null), ('188', '0706066704', 'Praktikum Kerja Akuntansi Perusahaan Jasa ( Modul 2)', '9,78979E+12', '35', 'Laboratorium FEB-UMM', 'jumlah halaman <40', '2010', null), ('189', '0706098002', 'Jurnalisme Cetak dalam Konsep dan praktik', '99878778', '311', 'UMM Press', '', '2010', null), ('190', '0029086401', 'Pemanfaatan Potensi Lokal Budaya Intangible Jawa Timur sebagai Dasar Model Pengembangan ', '978-979-796-197-8', '65', 'UMM Press', '', '2010', null), ('191', '0017046802', 'Keidakstabilan Elektoral dan Kehancuran Politik Aliran', '978-979-796-259-3', '288', 'UMM Press', '', '2010', null), ('192', '0715096401', 'Membentuk Pribadi Yang Unggul Membangun Peradaban Utama', '978-602-9461-53-4', '203', 'Aditya Media Publishing', '', '2010', null), ('193', '0715096401', 'Menjadi Pribadi Inovatif, Kreatif, dan Mandiri yang Berspiritualitas', '978-602-9461-33-6', '196', 'Aditya Media Publishing', '', '2010', null), ('194', '0020055901', 'Al Islam dan Kemuhammadiyah III : Kemuhammadiyahan', ' 978-979-796-249-4', '167', 'UMM Press', '', '2010', null), ('195', '0020055901', 'Aqidah dan Ibadah', '978-979-796-252-4', '60', 'UMM PRESS', '', '2010', null), ('196', '0711037502', 'Membangun Negara Hukum Yang Bermartabat judul Bab: \"Transformasi Norma Hukum HAM Internasional Ke Dalam Hukum Nasional Untuk Mewujudkan Negara Demokrasi Yang Konstitusional\"', '978-602-17091-5-3', '396', 'Setara Press Intrans Publishing Group dan Universitas Widya Gama ', '', '2010', null), ('197', '0725115601', 'Akuntansi Pengantar 1', '979-3021-14-4', '496', 'UMM-Press', '', '2010', null), ('198', '0713016301', 'Pengantar Psikologi Proyektif', '978-979-796-253-1', '166', 'UMM Press', '', '2010', null), ('199', '0713016301', 'Pengantar Psikologi Proyektif', '978-979-796-253-1', '60', 'UMM-Press', 'Dientri lebih dari satu kali', '2010', null), ('200', '0702106501', 'Ekonomika Makro', '978-979-796-272-2', '200', 'UMM PRESS', '', '2010', null), ('201', '0025116301', 'Bahasa Indonesia Untuk Karangan Ilmiah', '978-979-796-166-4', '200', 'UMM Press', '', '2010', null), ('202', '0712066301', 'Modul Praktik Perpajakan', '978-979-3984-64-3', '109', 'Aditya Media Puplishing', '', '2010', null), ('203', '0712066301', 'Praktikum Perpajakan Modul 1', '978-979-3984-63-6', '29', 'Aditya Media Publishing', 'Dientri lebih dari satu kali', '2010', null), ('204', '0712066301', 'Praktikum Perpajakan Modul 2', '978-979-3984-64-3', '80', 'Aditya Media Publishing', '', '2010', null), ('205', '0021076302', 'English for Islamic Studies', '978-979-796-271-5', '345', 'UMM Press', '', '2010', null), ('206', '0724088201', 'Pedoman Penulisan Skripsi\nProgram Studi Pendidikan Guru Sekolah Dasar', '-', '95', '-', 'isbn tidak ada', '2010', null), ('207', '0029016602', 'Budidaya dan Olahan Belimbing', '3657914', '102', 'UMM-Press', '', '2010', null), ('208', '0029016602', 'Pola Pembiayaan (Lending Model) Budidaya dan Olahan Belimbing', '-', '102', '-', '', '2010', null), ('209', '0010046202', 'Etnopedagogi PKn Wahana Pendidikan Karakter dan Budaya Bangsa di Perguruan Tinggi', '978-979-796-295-1', '132', 'UMM PRESS', '', '2010', null), ('210', '0723096201', 'English For Forestry', '978-979-796-256-2', '292', 'UMM PRESS', '', '2010', null), ('211', '0723096201', 'English For Islamic Stadies ', '978-979-796-271-5', '345', 'UMM Press', '', '2010', null), ('212', '0008126801', 'Pengantar Ekonomi Mikro', '978-979-796-266-1', '147', 'UMM Press', '', '2010', null), ('213', '0710047601', 'A review of Location-Allocation Problems in Multi-Echelon Supply Chain', '978-3-659-49702-5', '70', 'Lamber Academic Publishing, Jerman', '', '2010', null), ('214', '0029076501', 'Nutrisi & Pakan untuk Sapi Perah', '978-979-8803-28-4', '233', 'penerbit Pustaka Putra Khatulistiwa', '', '2010', null), ('215', '0717045901', 'Ahmadiyah Tradisi Mubahalah Strategi Pembuktian Kebenaran', '978-602-7957-07-7', '236', 'Aditya Media tahun Twerbit Nopember 2013', '', '2010', null), ('216', '0717045901', 'MALAYDIS-INDONESIA Romantika Hubungan Bangsa Serumpun', '978-967-11396-2-2', '363', 'Universitas Malaya 50603 Kuala Lumpur', '', '2010', null), ('217', '0709096001', 'Konservasi Lahan Hutan', '978-978-796-224-1', '120', 'UMM-Press', '', '2010', null), ('218', '0706046502', 'Sufi Tanpa Tarekat', '978-602-19308-7-8', '228', 'Madani', '', '2010', null), ('219', '0004025301', 'Hukum Perdata (Edisi Revisi)', '978-979-796-255-5', '217', 'UMM Press', '', '2010', null), ('220', '0030036201', 'Helmiontosis Penting pada Unggas dan Ruminansia serta Metode dan Masalah dalam Pengendaliannya', '978-979-796-128-2', '190', 'UMM Press', '', '2010', null), ('221', '0005106602', 'Mikrobiologi Lingkungan', '978-979-796-106-0', '355', 'UMM Press', '', '2010', null), ('222', '0005106602', 'Mikrobiologi Lingkungan. Cetakan Ketiga', '978-979-796-106-0', '319', 'UMM Press', '', '2010', null), ('223', '0008106601', 'English for Civic and Law Education', '978-979-796-237-1', '309', 'Languange Center - UMM Press', '', '2010', null), ('224', '0008106601', 'English for  Fisheries', '978-979-796-268-5', '394', 'UMM Press', '', '2010', null), ('225', '0008106601', 'English for Food Science and Technology', '978-979-796-237-1', '315', 'Language Center-UMM Press', '', '2010', null), ('226', '0008106601', 'ENGLISH FOR LAW', '978-979-796-213-5', '285', 'Language Center-UMM Press', '', '2010', null), ('227', '0715056502', 'Akuntansi Manajemen', '978-979-796-279-1', '228', 'UMM Press', '', '2010', null), ('228', '0715056502', 'Modul Praktikum 1 : Praktik Kerja Akuntansi Perusahaan Pemanufakturan', '978-979-3984-06-3', '16', 'Aditya Media Publishing', 'Dientri lebih dari satu kali', '2010', null), ('229', '0715056502', 'Modul Praktikum 2 : Praktik Kerja Akuntansi Perusahaan Pemanufakturan', '978-979-796-286-9', '48', 'UMM Press', 'Dientri lebih dari satu kali', '2010', null), ('230', '0715056502', 'Modul Praktikum 3 : Praktik Kerja Akuntansi Perusahaan Pemanufakturan', '978-979-3984-08-7', '15', 'Aditya Media Publishing', 'Dientri lebih dari satu kali', '2010', null), ('231', '0715056502', 'Modul Praktikum 4 : Praktik Kerja Akuntansi Perusahaan Pemanufakturan', '978-979-3984-09-4', '12', 'Aditya Media Publishing', 'setara bentuk artikel', '2010', null), ('232', '0710126701', 'Neurologi Klinis', '978-979-796-270-8', '493', 'UMM Press', '', '2010', null), ('233', '0028126501', 'Pendidikan Kewarganegaraan di Perguruan Tinggi', '978-979-796-246-3', '115', 'UMM PRESS', '', '2010', null), ('234', '0006045702', 'Dasar-Dasar Manajement Keuangan', '978-979-796-274-6', '85', 'UMM PRESS', '', '2010', null), ('235', '0728076501', 'Buku panduanPelatihan Aplikasi Teknologi Informasi edisi VII trahun 2013', '978-979-796-190-9', '148', 'UMM Press', '', '2010', null), ('236', '0012076602', 'Metodologi Penelitian Sosial dan Pendidikan : Teori dan Aplikasi (Cetakan ke 4)', '979-526-859-7', '291', 'penerbit Bumi Aksara Jakarta', '', '2010', null), ('237', '0012076602', 'Pendidikan Moral dan Budi Pekerti dalam Perspektif Perubahan  (Cetakan ke 4)', '979-526-859-6', '259', 'penerbit Bumi Aksara Jakarta ', '', '2010', null), ('238', '0710107401', 'Memahami Kembali Indonesia', '978-602-7636-46-0', '952', 'Mata Padi Pressindo', '', '2010', null), ('239', '0001016504', 'Dasar Manajement', '978-979-796-244-9', '75', 'UMM PRESS', '', '2010', null), ('240', '0725046701', 'Modul Praktikum 1: Pemeriksaan Akuntansi', '978-979-3984-12-4', '61', 'Aditya Media Publishing', '', '2010', null), ('241', '0725046701', 'Modul Praktikum 2: Pemeriksaan Akuntansi', '978-979-3984-13-1', '29', 'Aditya Media Publishing', 'jumlah halaman <40', '2010', null), ('242', '0725046701', 'Pemeriksaa Akuntansi (Modul 2)', '9,78979E+12', '29', 'Laboratorium FEB-UMM', 'jumlah halaman <40', '2010', null), ('243', '0725046701', 'Pemeriksaan Akuntansi (Modul 1)', '9,78979E+12', '61', 'Laboratorium FEB-UMM', '', '2010', null), ('244', '0726026201', 'Pengantar Bisnis', '979-3602-08-2', '330', 'UMM Press', '', '2010', null), ('245', '0712036401', 'Praktikum Perpajakan (Modul 1)', '9,78979E+12', '29', 'Laboratorium FEB-UMM', 'jumlah halaman <40', '2010', null), ('246', '0712036401', 'Praktikum Perpajakan (Modul 2)', '9,78979E+12', '80', 'Laboratorium FEB-UMM', 'Dientri lebih dari satu kali', '2010', null), ('247', '0717076502', 'Pegelolaan Keuangan', '978-979-3984-25-8', '45', 'Aditya Media Publishig', '', '2010', null), ('248', '0717076502', 'Praktik Akuntansi Dagang 4', '978=979-3984-24-7', '21', 'Aditya Akuntansi Dagang', '', '2010', null), ('249', '0717076502', 'Praktik Akuntansi Dagang III', '978-979-3984-22-4', '18', 'Aditya Media Publishing', '', '2010', null), ('250', '0714036801', 'Modul Praktikum 1 : Praktik Kerja Akuntansi Perusahaan Pemanufakturan', '978-979-3984-06-3', '16', 'Aditya Media Publishing', 'jumlah halaman <40', '2010', null), ('251', '0714036801', 'Modul Praktikum 2 : Praktik Kerja Akuntansi Perusahaan Pemanufakturan', '978-979-796-286-9', '48', 'UMM Press', '', '2010', null), ('252', '0714036801', 'Modul Praktikum 3 : Praktik Kerja Akuntansi Perusahaan Pemanufakturan', '978-979-3984-08-7', '15', 'Aditya Media Publishing', '', '2010', null), ('253', '0714036801', 'Modul Praktikum 4 : Praktik Kerja Akuntansi Perusahaan Pemanufakturan', '978-979-3984-09-4', '12', 'Aditya Media Publishing', 'Dientri lebih dari satu kali', '2010', null), ('254', '0714036801', 'Praktikum Sistem Informasi Akuntansi', '978-979-3984-19-3', '72', 'Aditya Media Publishing', 'Dientri lebih dari satu kali', '2010', null), ('255', '0708076201', 'Modul Praktikum 1 : Praktik Kerja Akuntansi Perusahaan Pemanufakturan', '978-979-3984-06-3', '16', 'Aditya Media Publishing', 'Dientri lebih dari satu kali', '2010', null), ('256', '0708076201', 'Modul Praktikum 2 : Praktik Kerja Akuntansi Perusahaan Pemanufakturan', '978-979-796-286-9', '48', 'UMM Press', 'Dientri lebih dari satu kali', '2010', null), ('257', '0708076201', 'Modul Praktikum 3 : Praktik Kerja Akuntansi Perusahaan Pemanufakturan', '978-979-3984-08-7', '15', 'Aditya Media Publishing', 'Dientri lebih dari satu kali', '2010', null), ('258', '0708076201', 'Modul Praktikum 4 : Praktik Kerja Akuntansi Perusahaan Pemanufakturan', '978-979-3984-09-4', '12', 'Aditya Media Publshing', 'Dientri lebih dari satu kali', '2010', null), ('259', '0008106401', 'Model Pengembangan Budidaya Ikan Kerapu dengan Rekayasa Pangan', '978-979-796-280-7', '51', 'UMM Press', '', '2010', null), ('260', '0003116301', 'Ekologi Hewan', '978-979-796-085-8', '151', 'UMM Press', '', '2010', null), ('261', '0012076402', 'Membangun Negara Hukum yang Bermartabat', '978-602-17091-5-3', '395', 'Setara Press', '', '2010', null), ('262', '0712125601', 'Seni dan Etika Bercinta Menurut Al-Qur’an dan Hadist', '978-979-796-162-6', '288', 'UMM Press', '', '2010', null), ('263', '0708087001', 'Pengantar Teknik Industri', '978-979-796-106-0', '103', 'UMM Press', '', '2010', null), ('264', '0022066401', 'Citizen Control Based on Competency: Colaboration on Structures and Cultures Towards Urban Spatial Politics', '978-947124-6', '11', 'International Public Organization Association', 'setara artikel', '2010', null), ('265', '0008116301', 'Buku Panduan Pertemuan Ilmiah Perhimpunan Biologi Indonesia (PBI)', '-', '267', '-', 'Isian tidak lengkap', '2010', null), ('266', '0008116301', 'Panduan Seminar \"Penguatan Potensi dan Posisi Tawar komoditi Lokal untuk Meujudkan Kemandirian Pangan dan Energi', '-', '125', '-', 'isbn tidak ada', '2010', null), ('267', '0008116301', 'Penguatan Potensi dan Posisi Tawar Komoditi Lokal Untuk Mewujudkan Kemandirian Pangan dan Energi', '46845687', '125', 'UMM-PRESS', '', '2010', null), ('268', '0703086702', 'Kemandirian Dalam Berkarya dan Berinovasi Sehat', '23553588', '62', 'Universitas Magelang', '', '2010', null), ('269', '0703026401', 'Kebijakan Program Keluarga Berencana Di Propinsi Jawa Timur pada Era Desentralisasi', '978-979-796-275-3', '119', 'KEMENKO KESRA', '', '2010', null), ('270', '0701068603', 'Program Absensi Siswa Realtime dengan PHP dan SMS Gateway', '978-602-1430-69-9', '140', 'Lokomedia Yogyakarta', '', '2010', null), ('271', '0017046802', 'Party Survival : Dinamika Politik Kepartaian Di Aras Lokal', '978-979-98299-9-3', '220', 'Impress Malang', '', '2010', null), ('272', '0715096401', 'Pengembangan Model Pendidikan Karakter Pada Pembelajaran Mipa Melalui Konsep Integratif di SMP MUhammadiyah se-Malang Raya', '978-979-796-312-5', '210', 'UMM PRESS', '', '2010', null), ('273', '0707066301', 'Modul Praktikum: Pengelolaan Keuangan', '978-979-3984-10-0', '49', 'Aditya Media ', '', '2010', null), ('274', '0021076302', 'English for Communication', '978-979-796-304-0', '389', 'UMM Press', '', '2010', null), ('275', '0724088201', 'Buku Matematika Dasar untuk PGSD (4orang tim=20/4=5)', '978-602-7959-88-6', '388', 'Aditya Media Puplising', '', '2010', null), ('276', '0717045901', 'Ahmadiyah Tradisi Mubahalah Strategi pembuktian\nKebenaran', '978-602-7957-07-7', '236', 'Aditya Media Publishing, Yogyakarta', '', '2010', null), ('277', '0717045901', ' Sosiologi Masyarakat  Islam; Ahmadiyah dan Sunni, Titik Temu  dan Seteru ', '978-602-7957-84-8', '354', 'Aditya Media Publishing, Yogyakarta   ', '', '2010', null), ('278', '0701016402', 'Catatan Politik di tahun Politik', '978-6027-636-55-2', '112', 'Litera', '', '2010', null), ('279', '0701016402', 'Negara Versus Masyarakat Sipil di Aras Lokal', '978-602-7636-59-0', '170', 'Buku Litera', '', '2010', null), ('280', '0005106602', 'Evolusi Organik. Cetakan Kedua', '978-979-796-279-1', '208', 'UMM Press', '', '2010', null), ('281', '0012036801', 'Teknik Dasar Analisis Biologi Molekuler', '602280262-4', '135', 'Dee Publish', '', '2010', null), ('282', '0715056502', 'Akutansi Manajemen', '978-979-796-279-1', '198', 'UMM PRESS', '', '2010', null), ('283', '0710126701', 'buku Neurologi Klinis', '978-979-796-270-8', '491', 'UMM Press', '', '2010', null), ('284', '0728076501', 'Panduan Pelatiahan Teknologi Informasi 2014', '978-979-796-294-4', '210', 'UMM press', '', '2010', null), ('285', '0024066402', 'Membangun Ekonomi Nasional Yang Kokoh (Kajian & Pengalaman Empiris)', '978-979-796-346-0', '441', 'UMM Press', '', '2010', null), ('286', '0708037701', 'Observasi dalam Psikologi', '978-979-796-305-7', '113', 'UMM PRESS', '', '2010', null), ('287', '0009026601', 'Negara Kesejahteraan dan Pelayanan Sosial', '978-979-3580-71-5', '204', 'Intrans Publishing', '', '2010', null), ('288', '0026036301', 'Paradigma Keuangan Negara Dan Kepailitan Di Indonesia', '978-979-796-309-5', '326', 'UMM Press', '', '2010', null), ('289', '0714036801', 'Modul Sistem Informasi Akuntansi', '9,78079E+12', '36', 'Aditya Media Publishing', 'Jumlah halaman kurang dari 40', '2010', null), ('290', '0712088203', 'Bisnis Keluarga-Keluarga Bisnis: Strategi Jaringan Bisnis Perusahaan Jepang, Tiongkok dan Korea Selatan dalam Kemajuan Ekonomi', '978-602-19217-5-3', '146', 'Buku Litera', '', '2010', null), ('291', '0712088203', 'Keberlanjutan Komunisme di Tiongkok: Sebuah Pendekatan Sosiologi Politik', '978-602-7636-36-1', '328', 'Buku Litera', '', '2010', null), ('292', '0718038003', 'Praktik Konseling', '978-979-796-294-4', '103', 'UMM PRESS', '', '2010', null), ('293', '0710086401', 'KEBIJAKAN PEMBERDAYAAN GURU: Analisis Dimensi dan Implementasi', '-', '140', 'Percetakan Pohon Cahaya', '', '2010', null), ('294', '0710086401', 'MENGUAK PENYELESAIAN MATEMATIKA: Analisis Pendekatan Metakognitif dan Model Polya', '978-602-323-016-7', '90', 'Aditya Media Publishing', '', '2010', null), ('295', '0025116301', 'Antologi Puisi', '-', '38', 'Universitas Muhammadiyah Malang', '', '2010', null), ('296', '0021076302', 'ENGLISH FOR LANGUAGE LEARNER', '978-979-796-342-2', '425', 'UMM PRESS', '', '2010', null), ('297', '0723096201', 'English for Medical Science', '978-979-796-366-8', '423', 'UMM Press', '', '2010', null), ('298', '0718108501', 'Pencerahan Pendidikan Masa Depan', '978-979-796-343-9', '218', 'UMM PRESS', '', '2010', null), ('299', '0718108501', 'Pengantar Pendidikan', '978-979-796-360-6', '178', 'UMM PRESS', '', '2010', null), ('300', '0701016402', 'Catatan Politik di tahun Politik', '9,78603E+12', '112', 'Buku Litera', '', '2010', null), ('301', '0701016402', 'Citizen Participation In Selected Local Governance of Asia Pacific Countries', '6021992245', '154', 'APSPA', '', '2010', null), ('302', '0701016402', 'Negara Versus Masyarakat Sipil di Aras Lokal', '9,78603E+12', '170', 'Buku Litera', '', '2010', null), ('303', '0005106602', 'Mikrobiologi Umum\nCetakan Kelima', '978-979-796-191-6', '317', 'UMM Press', '', '2010', null), ('304', '0008106601', 'ENGLISH FOR NURSING', '972-979-796-357-6', '378', 'UMM PRESS', '', '2010', null), ('305', '0006086501', 'Buku Pencerahan Pendidikan Masa Depan: Pembelajaran Teknologi, dan Reformasi Pendidikan di Era Pengetahuan', ' 978-979-796-343-9', '0', 'UMM Press', '', '2010', null), ('306', '0701068702', 'Catatan Politik di tahun Politik ', '9,78603E+13', '112', 'Litera Book', '', '2010', null), ('307', '0701068702', 'Citizen Participation in Selected Local Governance of Asia Pacific Countries', '6021992245', '154', 'APSPA', '', '2010', null), ('308', '0701068702', 'Negara Versus Masyarakat SIpil di ARas Lokal', '9,78603E+12', '170', 'Litera Book', '', '2010', null), ('309', '0013046202', 'Buku Pencerahan Pendidikan Masa Depan', '978-979-796-343-9', '15', 'UMM Press', '', '2010', null), ('310', '0003116301', 'Ekologi Islam', '978-979-796-291-3', '177', 'UMM Press', '', '2010', null), ('311', '0003116301', 'Pengantar Ekologi Hewan: Konsep, Perilaku, Psikologi dan Komunikasi', '978-979-796-085-8', '151', 'UMM Press', '', '2010', null), ('312', '0728106102', 'Panduan Penelitian Gender Bidang Pendidikan dengan Analisis Indeks Paritas dan Disparitas ', '978-979-796-365-1', '30', 'UMM PRESS', '', '2010', null), ('313', '0709016301', 'Panduan Penelitian Gender Bidang Pendidikan dengan Analisis Indeks Paritas da Disparitas', '978-979-796-365-1', '30', 'UMM PRESS', '', '2010', null), ('314', '0726117901', 'POLITIK PEMEKARAN DI INDONESIA', '978-979-796', '371', 'UMM PRESS', '', '2010', null);
COMMIT;

-- ----------------------------
--  Table structure for `dospres_calon_dosen_berprestasi`
-- ----------------------------
DROP TABLE IF EXISTS `dospres_calon_dosen_berprestasi`;
CREATE TABLE `dospres_calon_dosen_berprestasi` (
  `id_calon_dospres` int(255) NOT NULL AUTO_INCREMENT,
  `nidn` int(30) NOT NULL,
  `abstrak` int(10) DEFAULT '0',
  `latar_belakang` int(10) DEFAULT '0',
  `metode` int(10) DEFAULT '0',
  `prestasi` int(10) DEFAULT '0',
  `kemanfaatan` int(10) DEFAULT '0',
  `deseminasi` int(10) DEFAULT '0',
  `pengakuan_pihak` int(10) DEFAULT '0',
  `nilai` double(255,0) DEFAULT NULL,
  `tahun` year(4) NOT NULL,
  PRIMARY KEY (`id_calon_dospres`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `dospres_calon_dosen_berprestasi`
-- ----------------------------
BEGIN;
INSERT INTO `dospres_calon_dosen_berprestasi` VALUES ('4', '2014', '1', '1', '1', '1', null, '1', '1', '7', '2017'), ('5', '2015', '5', '10', '15', '20', null, '15', '15', '100', '2017');
COMMIT;

-- ----------------------------
--  Table structure for `dospres_calon_kaprodi_berprestasi`
-- ----------------------------
DROP TABLE IF EXISTS `dospres_calon_kaprodi_berprestasi`;
CREATE TABLE `dospres_calon_kaprodi_berprestasi` (
  `id_calon_kapres` int(255) NOT NULL AUTO_INCREMENT,
  `nidn` int(30) NOT NULL,
  `tahun` year(4) NOT NULL,
  PRIMARY KEY (`id_calon_kapres`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `dospres_dosen`
-- ----------------------------
DROP TABLE IF EXISTS `dospres_dosen`;
CREATE TABLE `dospres_dosen` (
  `nidn` varchar(10) NOT NULL,
  `nip` varchar(20) DEFAULT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `id_master` smallint(4) unsigned zerofill NOT NULL,
  PRIMARY KEY (`nidn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `dospres_dosen`
-- ----------------------------
BEGIN;
INSERT INTO `dospres_dosen` VALUES ('0001016504', '131883039', 'RAHAYU RELAWATI Ir., M.M.', '274'), ('0003116301', '131885453', 'SUKARSONO Drs., M.Si.,Dr.', '239'), ('0004025301', '130879743', 'KOMARIAH S.H., M.Si., M.Hum.', '28'), ('0005106602', '131930144', 'LUD WALUYO Drs., M.Kes., Dr.', '213'), ('0006045702', '131479724', 'M FAISAL ABDULLAH Drs., M.M.', '137'), ('0006086501', '131898647', 'RR EKO SUSETYARINI Dra., M.Si.,Dr.', '229'), ('0007046704', '132002931', 'ROHMAD WIDODO Drs., M.Si.', '227'), ('0008106401', '131877094', 'SUJONO Prof., Dr., Ir., M.Kes.', '285'), ('0008106601', '132048158', 'MASDUKI Dr., Drs., M.Pd.', '219'), ('0008116301', '131877093', 'UNTUNG SANTOSO Drs., M.Si.,Dr', '280'), ('0008126801', '132052039', 'IDA NURAINI ,S.E. ,M.Si.', '135'), ('0009026601', '132001833', 'OMAN SUKMANA Dr., M.Si.', '173'), ('0010046202', '131885465', 'HARI SUNARYO Drs., M.Si.,Dr.', '204'), ('0010116411', '131913166', 'LISTIARI HENDRANINGSIH Ir., M.P.', '80'), ('0012036801', '132040895', 'MAFTUCHAH Dr., Ir., M.P.', '268'), ('0012076402', '131879369', 'SULARDI Dr., S.H., M.Si.', '34'), ('0012076602', '131930151', 'NURUL ZURIAH Dra., M.Si.,Dr.', '224'), ('0013016701', '132083907', 'TONGAT S.H., M.Hum.,Dr.', '154'), ('0013046202', '131688312', 'SRI WAHYUNI Dra., M.Kes.', '235'), ('0016076602', '131918684', 'JABAL TARIK IBRAHIM Dr., Ir., M.S.', '266'), ('0017046802', '132049012', 'ASEP NURJAMAN Dr., M.Si.', '158'), ('0019035301', '130937178', 'ICHSAN ANSHORY AM Dr., M.Pd.', '208'), ('0020055901', '131485427', 'BAMBANG WIDAGDO Prof.,Dr., M.M.', '121'), ('0021026602', '131930150', 'ANAS TAIN Dr. Ir., M.M.', '254'), ('0021076302', '131877092', 'ERLY WAHYUNI Dra., M.Si.', '199'), ('0022066401', '131883043', 'TRI SULISTYANINGSIH Dr. Dra., M.Si.', '181'), ('0024046303', '131885467', 'SUDJALIL Drs., M.Si.', '237'), ('0024066402', '131846602', 'NAZARUDDIN MALIK ,Dr., M.Si.', '249'), ('0024086702', '132061814', 'MUSLIMIN  Drs., M.Si.,P.hD', '170'), ('0025116301', '131901402', 'EKA RINI SARASWATI ,Dr., Dra., M.Pd.', '196'), ('0026026201', '131886764', 'DWI PRIYO UTOMO Dr., M.Pd., Drs.', '195'), ('0026036301', '131879368', 'RAHAYU HARTINI Prof. Dr., S.H., M.Si., M.Hum.', '32'), ('0028126501', '131944790', 'MOHAMAD SYAHRI  Drs., M.Si., Dr.', '217'), ('0029016602', '131944781', 'FATIMAH NURSANDI Dr., Ir., M.Si.', '261'), ('0029076501', '131898643', 'INDAH PRIHARTINI Ir., M.P., Dr., Prof', '77'), ('0029086401', '131885891', 'ARIF BUDI WURIYANTO Dr., M.Si., Drs.', '190'), ('0030036201', '131663024', 'LILI ZALIZAR Dr., drh., M.S.', '283'), ('0701016402', null, 'JAINURI Drs., M.Si.', '513'), ('0701056701', null, 'MOH NURHAKIM Drs., M.Ag.,Dr', '107'), ('0701068603', null, 'AMINUDIN S.Kom.,M.Cs.', '1479'), ('0701068702', null, 'SALAHUDIN S.IP., M.Si.', '1545'), ('0702077601', null, 'IHYAUL ULUM  Dr.,S.E., M.Si.,Ak.,CA', '582'), ('0702106501', null, 'DWI EKO WALUYO ,S.E., M.Si.', '127'), ('0702127601', null, 'DYAH ESTU KURNIAWATI S.Sos., M.Si.', '1095'), ('0703026401', null, 'WIYONO Drs., M.M.', '67'), ('0703045801', null, 'DYAH ERNI WIDYASTUTI Ir., M.M.', '258'), ('0703086702', null, 'USWATUN CHASANAH Dra., Apt., M.Kes.', '1153'), ('0704086901', null, 'NUR SUBEKHI S.T., M.T.', '305'), ('0705037702', null, 'AHDA BINA AFIANTO L.C.,M.H.I.', '735'), ('0705056501', null, 'ERMANU AZIZUL HAKIM Ir., M.T., Dr.', '59'), ('0706046502', '-', 'KHOZIN Drs., M.Si., Dr', '1125'), ('0706046704', null, 'MURJITO Ir.', '8'), ('0706066501', null, 'DIDING SUHARDI Ir., M.T.', '57'), ('0706066704', null, 'AHMAD WALUYA JATI Drs., M.M.', '118'), ('0706098002', null, 'ARIEF HIDAYATULLAH S.IKom.', '1546'), ('0706106501', null, 'TOBRONI Prof. Dr. Drs., M.Si.', '112'), ('0707026601', null, 'ACHMAD MOHYI Drs., M.M., Dr', '44'), ('0707056301', null, 'TRI DAYAKISNI Dra., M.Si.', '420'), ('0707066301', null, 'ENDANG DWI WAHYUNI Dra., Ak., M.Si.', '130'), ('0708037701', null, 'NI\'MATUZAHROH ,S.Psi., M.Si.', '423'), ('0708076201', null, 'SRI WIBAWANI WAHYUNING ASTUTI Dra., Ak., M.Si.', '153'), ('0708087001', null, 'TEGUH BAROTO S.T., M.T.', '308'), ('0709016301', null, 'WAHYU WIDODO Ir., M.S.DR', '85'), ('0709096001', null, 'JOKO TRIWANTO Ir., M.P.', '311'), ('0710047601', null, 'ILYAS MASUDIN ,S.T., M.Log., Scm., Ph.D', '75'), ('0710086401', null, 'AKHSANUL IN\'AM Dr. Drs., M.M.', '187'), ('0710107401', null, 'RACHMAD KRISTIONO DWI SUSILO ,S.Sos.,M.A', '505'), ('0710116602', null, 'BUDIONO S.Si., M.T.', '1'), ('0710126701', null, 'MOCHAMAD BAHRUDIN dr., Sp.S.', '1149'), ('0711026401', null, 'LATIPUN Dr., M.Kes.', '290'), ('0711037502', null, 'CEKLI SETYA PRATIWI S.H., LL.M.', '342'), ('0712036401', null, 'SETU SETYAWAN Drs., M.M.', '149'), ('0712066301', null, 'ENY SUPRAPTI Dr.,Dra., Ak., M.M.', '131'), ('0712086201', null, 'TULUS WINARSUNU Drs., M.Si.', '448'), ('0712088203', null, 'TONNY DIAN EFFENDI ,S.Sos.,M.Si.', '1222'), ('0712125601', null, 'SYAMSURIZAL YAZID Drs., M.A.', '111'), ('0713016301', null, 'DIAH KARMIYATI Dra., M.Si., Dr.', '286'), ('0714036801', null, 'SRI WAHJUNI LATIFAH Dra., Ak., M.M.', '152'), ('0715017101', null, 'HANY HANDAYANI S.Pi., M.Si.', '615'), ('0715056502', null, 'MASIYAH KHOLMI Dra., Ak., M.M.,Dr', '139'), ('0715096401', null, 'ATOK MIFTACHUL HUDA Drs., M.Pd.', '113'), ('0716036801', null, 'TUTIK SULISTYOWATI Dra., M.Si.', '182'), ('0716096803', null, 'RUBY RIANA ASPARINI  dr., Sp.BP-RE.', '1263'), ('0716126701', null, 'ABDULLAH MASMUH Drs., M.Si.', '156'), ('0717045901', null, 'ISHOMUDDIN Prof. Dr., M.Si.,', '247'), ('0717046701', null, 'ABDUL HARIS Drs.,M.A.,Dr', '73'), ('0717076502', null, 'SITI ZUBAIDAH Dra., Ak., M.M.', '151'), ('0717076602', null, 'KHUSNUL KHOTIMAH Ir., M.M.,M.P.,Dr', '90'), ('0718038003', null, 'ZAINUL ANWAR S.Psi.,M.Psi.', '1417'), ('0718108501', null, 'HUSAMAH S.Pd.,M.Pd.', '1461'), ('0719097502', null, 'RIZA ELFANA S.Pd., M.A.', '1031'), ('0720026601', null, 'BAMBANG YUDI ARIADI Ir., M.M.', '325'), ('0721036201', null, 'VINA SALVIANA DARVINA SOEDARWO Dr., M.Si.', '183'), ('0721076301', null, 'THATHIT MANON ANDINI Dra., M.Hum,', '240'), ('0721085801', null, 'DYAH ROESWITAWATI Prof. Dr. Ir., M.S.', '116'), ('0722076401', null, 'AGUS ZAINUDIN Ir., M.P.', '251'), ('0722097001', null, 'NURUDIN ,S.Sos.,M.Si.', '172'), ('0722126701', null, 'SYAMSUL ARIFIN Prof. Dr. Drs., M.Si.', '250'), ('0723028801', null, 'GALIH WASIS WICAKSONO S.Kom.,M.Cs.', '1442'), ('0723096201', null, 'HARTONO Drs., M.Pd., Dr.', '206'), ('0723116801', null, 'SULISMADI Drs., M.Si.', '180'), ('0724036501', null, 'WAHYU HIDAYAT RIANTO Drs., M.M., Dr', '19'), ('0724068501', null, 'GONDA YUMITRO ,S.IP., MA', '1248'), ('0724088201', null, 'ERNA YAYUK ,S.Pd., M.Pd.', '1362'), ('0725046701', null, 'RATNA UTAMI Dra., M.M.', '144'), ('0725115601', null, 'DHANIEL SYAM Drs., M.M, Ak.', '124'), ('0725127302', null, 'ACHMAD SYAIFUL HIDAYAT ANWAR ,S.E., M.Sc.', '594'), ('0726026201', null, 'ROHMAT DWI JATMIKO Drs., M.M., Dr.', '147'), ('0726076002', null, 'FATHOR RAHIM Drs., M.Ag.', '104'), ('0726117901', null, 'YANA SYAFRIYANA S.IP.,M.IP', '900'), ('0728076501', null, 'MUH LUKMAN Ir., M.T.', '304'), ('0728106102', null, 'TRISAKTI HANDAYANI Dra., M.M., Dr.', '241'), ('0729126402', null, 'FARIDI Drs., M.Si.', '103'), ('0730066102', null, 'ROMELAH Dra., M.Ag.', '109'), ('0731017301', null, 'NASRULLAH S.Sos., M.Si.', '171');
COMMIT;

-- ----------------------------
--  Table structure for `dospres_dosen_berprestasi`
-- ----------------------------
DROP TABLE IF EXISTS `dospres_dosen_berprestasi`;
CREATE TABLE `dospres_dosen_berprestasi` (
  `id_dospres` int(255) NOT NULL AUTO_INCREMENT,
  `nidn` int(30) NOT NULL,
  `nilai` double(255,0) NOT NULL,
  `nidn_vote` int(30) NOT NULL,
  `email_vote` varchar(30) NOT NULL,
  `tahun` year(4) NOT NULL,
  `alasan` text NOT NULL,
  `id_program_studi` int(255) NOT NULL,
  PRIMARY KEY (`id_dospres`),
  KEY `fk_dospres_dosen_berprestasi` (`id_program_studi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
--  Table structure for `dospres_fasilitas_penunjang_penelitian`
-- ----------------------------
DROP TABLE IF EXISTS `dospres_fasilitas_penunjang_penelitian`;
CREATE TABLE `dospres_fasilitas_penunjang_penelitian` (
  `id_fasilitas_penunjang_penelitian` int(10) NOT NULL AUTO_INCREMENT,
  `nama_unit` varchar(100) DEFAULT NULL,
  `no_sk_pendirian` varchar(100) DEFAULT NULL,
  `fasilitas` varchar(1000) DEFAULT NULL,
  `status_fasilitas_penunjang` varchar(100) DEFAULT NULL,
  `kd_sts_berkas_sk_pendirian` int(10) DEFAULT NULL,
  `no_sertifikat` varchar(20) DEFAULT NULL,
  `kd_sts_berkas_sertifikat` int(10) DEFAULT NULL,
  `kd_sts_aktif` int(10) DEFAULT NULL,
  `keterangan_invalid` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_fasilitas_penunjang_penelitian`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- ----------------------------
--  Table structure for `dospres_formulir_kaprodi`
-- ----------------------------
DROP TABLE IF EXISTS `dospres_formulir_kaprodi`;
CREATE TABLE `dospres_formulir_kaprodi` (
  `id_formulir_kaprodi` int(255) NOT NULL AUTO_INCREMENT,
  `nidn` int(20) NOT NULL,
  `nama_lengkap` varchar(300) DEFAULT NULL,
  `jabatan_akademik` varchar(300) DEFAULT NULL,
  `pangkat_dan_golongan` varchar(255) DEFAULT NULL,
  `tempat_lahir` varchar(400) DEFAULT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(255) DEFAULT NULL,
  `bidang_keahlian` varchar(255) DEFAULT NULL,
  `no_hp` varchar(100) DEFAULT NULL,
  `email` varchar(300) DEFAULT NULL,
  `file_makalah` varchar(255) DEFAULT NULL,
  `tahun` year(4) DEFAULT NULL,
  `id_fakultas` int(255) DEFAULT NULL,
  `id_program_studi` int(255) DEFAULT NULL,
  PRIMARY KEY (`id_formulir_kaprodi`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `dospres_formulir_kaprodi`
-- ----------------------------
BEGIN;
INSERT INTO `dospres_formulir_kaprodi` VALUES ('7', '3123123', '123123', 'aaaa', 'aaaa', 'Trenggalek', '1996-03-13', 'Laki-Laki', 'asdas', '12344', 'pilusnarziz3@gmail.com', null, '2017', '11', '14');
COMMIT;

-- ----------------------------
--  Table structure for `dospres_hki`
-- ----------------------------
DROP TABLE IF EXISTS `dospres_hki`;
CREATE TABLE `dospres_hki` (
  `id_hki` int(10) NOT NULL AUTO_INCREMENT,
  `nidn` char(10) DEFAULT NULL,
  `judul_hki` varchar(1000) DEFAULT NULL,
  `jenis_hki` varchar(50) DEFAULT NULL,
  `no_pendaftaran` varchar(100) DEFAULT NULL,
  `status_hki` varchar(20) DEFAULT NULL,
  `no_hki` varchar(20) DEFAULT NULL,
  `kd_sts_berkas_hki` int(10) DEFAULT NULL,
  `keterangan_invalid` varchar(100) DEFAULT NULL,
  `tahun` int(5) DEFAULT NULL,
  PRIMARY KEY (`id_hki`),
  KEY `fk_dosen_hki` (`nidn`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- ----------------------------
--  Table structure for `dospres_kaprodi_berprestasi`
-- ----------------------------
DROP TABLE IF EXISTS `dospres_kaprodi_berprestasi`;
CREATE TABLE `dospres_kaprodi_berprestasi` (
  `id_kaprodi_berprestasi` int(255) NOT NULL AUTO_INCREMENT,
  `nidn` int(30) NOT NULL,
  `nilai` double(255,0) NOT NULL,
  `nidn_vote` int(30) NOT NULL,
  `email_vote` varchar(255) NOT NULL,
  `tahun` year(4) NOT NULL,
  `alasan` text NOT NULL,
  `id_program_studi` int(255) NOT NULL,
  PRIMARY KEY (`id_kaprodi_berprestasi`),
  KEY `fk_dospres_kaprodi_berprestasi` (`id_program_studi`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `dospres_kaprodi_berprestasi`
-- ----------------------------
BEGIN;
INSERT INTO `dospres_kaprodi_berprestasi` VALUES ('4', '3123123', '5', '123123', '31231231', '2017', '', '11');
COMMIT;

-- ----------------------------
--  Table structure for `dospres_luaran_lain`
-- ----------------------------
DROP TABLE IF EXISTS `dospres_luaran_lain`;
CREATE TABLE `dospres_luaran_lain` (
  `id_luaran_lain` int(10) NOT NULL AUTO_INCREMENT,
  `nidn` char(10) DEFAULT NULL,
  `judul_luaran` varchar(1000) DEFAULT NULL,
  `jenis_luaran_lain` varchar(100) DEFAULT NULL,
  `deskripsi` varchar(1000) DEFAULT NULL,
  `kd_sts_berkas_pendukung` int(10) DEFAULT NULL,
  `keterangan_invalid` varchar(100) DEFAULT NULL,
  `tahun` int(5) DEFAULT NULL,
  PRIMARY KEY (`id_luaran_lain`),
  KEY `fk_dosen_luaran_lain` (`nidn`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- ----------------------------
--  Table structure for `dospres_pemakalah_forum_ilmiah`
-- ----------------------------
DROP TABLE IF EXISTS `dospres_pemakalah_forum_ilmiah`;
CREATE TABLE `dospres_pemakalah_forum_ilmiah` (
  `id_pemakalah_forum_ilmiah` int(10) NOT NULL AUTO_INCREMENT,
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
  `tahun` int(5) DEFAULT NULL,
  PRIMARY KEY (`id_pemakalah_forum_ilmiah`),
  KEY `fk_dosen_pemakalah_forum_ilmiah` (`nidn`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- ----------------------------
--  Table structure for `dospres_penelitian_hibah_ditlitabmas`
-- ----------------------------
DROP TABLE IF EXISTS `dospres_penelitian_hibah_ditlitabmas`;
CREATE TABLE `dospres_penelitian_hibah_ditlitabmas` (
  `id_penelitian_hibah_ditlitabmas` int(10) NOT NULL AUTO_INCREMENT,
  `nama_skim` varchar(50) DEFAULT NULL,
  `judul` varchar(1000) DEFAULT NULL,
  `jumlah_dana` int(20) DEFAULT NULL,
  `nidn_ketua` char(11) DEFAULT NULL,
  `nama_ketua` varchar(50) DEFAULT NULL,
  `nama_anggota` varchar(50) DEFAULT NULL,
  `bidang_penelitian` varchar(100) DEFAULT NULL,
  `bidang_penelitian_lain` varchar(100) DEFAULT NULL,
  `tujuan_sosial_ekonomi` varchar(500) DEFAULT NULL,
  `tujuan_sosial_ekonomi_lain` varchar(100) DEFAULT NULL,
  `tahun` int(5) DEFAULT NULL,
  PRIMARY KEY (`id_penelitian_hibah_ditlitabmas`),
  KEY `fk_dosen_peelitian_hibah_ditlitabmas` (`nidn_ketua`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- ----------------------------
--  Table structure for `dospres_penelitian_hibah_non_ditlitabmas`
-- ----------------------------
DROP TABLE IF EXISTS `dospres_penelitian_hibah_non_ditlitabmas`;
CREATE TABLE `dospres_penelitian_hibah_non_ditlitabmas` (
  `id_penelitian_hibah_non_ditlitabmas` int(10) NOT NULL AUTO_INCREMENT,
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
  `tahun` int(5) DEFAULT NULL,
  PRIMARY KEY (`id_penelitian_hibah_non_ditlitabmas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- ----------------------------
--  Table structure for `dospres_prestasi_unggul`
-- ----------------------------
DROP TABLE IF EXISTS `dospres_prestasi_unggul`;
CREATE TABLE `dospres_prestasi_unggul` (
  `id_prestasi_unggul` int(255) NOT NULL AUTO_INCREMENT,
  `nidn` int(20) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `abstrak` text,
  `latar_belakang` text,
  `metode_pencapaian_unggulan` text,
  `prestasi_yang_diunggulkan` text,
  `kemanfaatan` text,
  `diseminasi` text,
  `pengakuan_pihak_terkait` text,
  `nilai_abstrak` int(255) DEFAULT NULL,
  `nilai_latar_belakang` int(255) DEFAULT NULL,
  `nilai_metode_pencapaian_unggulan` int(255) DEFAULT NULL,
  `nilai_prestasi_yang_diunggulkan` int(255) DEFAULT NULL,
  `nilai_kemanfaatan` int(255) DEFAULT NULL,
  `nilai_diseminasi` int(255) DEFAULT NULL,
  `nilai_pengakuan_pihak_terkait` int(255) DEFAULT NULL,
  `nilai_total` int(10) NOT NULL,
  `catatan` text,
  `tahun` year(4) DEFAULT NULL,
  `id_fakultas` int(255) DEFAULT NULL,
  `id_program_studi` int(255) DEFAULT NULL,
  PRIMARY KEY (`id_prestasi_unggul`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `dospres_prestasi_unggul`
-- ----------------------------
BEGIN;
INSERT INTO `dospres_prestasi_unggul` VALUES ('1', '123', 'aal', null, null, null, null, null, null, null, null, null, null, null, null, null, null, '0', null, '2017', '1', '1');
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

-- ----------------------------
--  Table structure for `dospres_setting`
-- ----------------------------
DROP TABLE IF EXISTS `dospres_setting`;
CREATE TABLE `dospres_setting` (
  `id_setting` int(255) NOT NULL,
  `tanggal_buka` date NOT NULL,
  `tanggal_tutup` date NOT NULL,
  `tahun` year(4) NOT NULL,
  PRIMARY KEY (`id_setting`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `dospres_setting`
-- ----------------------------
BEGIN;
INSERT INTO `dospres_setting` VALUES ('1', '2017-04-11', '2017-07-27', '2017');
COMMIT;

-- ----------------------------
--  Table structure for `dospres_user`
-- ----------------------------
DROP TABLE IF EXISTS `dospres_user`;
CREATE TABLE `dospres_user` (
  `id_user` int(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `level` tinyint(255) DEFAULT NULL COMMENT '1. admin/bkma; 2. dppm; 3. hki; 4. dosen',
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `dospres_user`
-- ----------------------------
BEGIN;
INSERT INTO `dospres_user` VALUES ('2', 'bkma', '$2y$12$jzsOGNepNoP4PnDWxAmRr.Zt8NvDjJiIecNx5AmHThMHo3F5w6EdG', 'BKMA', '1'), ('3', 'dppm', '$2y$12$sEnQGCEC1jkmqgorrLHW0u.lBTNFDbdJN7dAOXBkyIobCHJM8d.8C', 'DPPM-UMM', '2'), ('4', 'hki', '$2y$12$ebvZATpmQLPhFjsarEFiq.mjDOQyjPcTnYr5e7ghb..RrTWySOScC', 'HKI-UMM', '3');
COMMIT;

-- ----------------------------
--  View structure for `dospres_view_buku_ajar`
-- ----------------------------
DROP VIEW IF EXISTS `dospres_view_buku_ajar`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `dospres_view_buku_ajar` AS select `a`.`id_buku_ajar` AS `id_buku_ajar`,`a`.`nidn` AS `nidn`,`a`.`judul` AS `judul`,`a`.`isbn` AS `isbn`,`a`.`jml_halaman` AS `jml_halaman`,`a`.`penerbit` AS `penerbit`,`a`.`keterangan_invalid` AS `keterangan_invalid`,`a`.`tahun` AS `tahun`,`a`.`file` AS `file`,`b`.`nama_lengkap` AS `dosen` from (`dospres_buku_ajar` `a` left join `dospres_dosen` `b` on((`a`.`nidn` = `b`.`nidn`)));

SET FOREIGN_KEY_CHECKS = 1;
