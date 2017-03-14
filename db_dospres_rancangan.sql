

CREATE TABLE `dospres_buku_ajar` (
`id_buku_ajar` int(10) NOT NULL AUTO_INCREMENT,
`nidn` char(10) NULL DEFAULT NULL,
`judul` varchar(1000) NULL DEFAULT NULL,
`isbn` varchar(50) NULL DEFAULT NULL,
`jml_halaman` int(11) NULL DEFAULT NULL,
`penerbit` varchar(200) NULL DEFAULT NULL,
`keterangan_invalid` varchar(100) NULL DEFAULT NULL,
`tahun` int(5) NULL DEFAULT NULL,
PRIMARY KEY (`id_buku_ajar`) ,
INDEX `fk_dosen` (`nidn` ASC) USING BTREE
)
ENGINE = InnoDB
AUTO_INCREMENT = 22
DEFAULT CHARACTER SET = latin1
COLLATE = latin1_swedish_ci
ROW_FORMAT = compact;

CREATE TABLE `dospres_fasilitas_penunjang_penelitian` (
`id_fasilitas_penunjang_penelitian` int(10) NOT NULL AUTO_INCREMENT,
`nama_unit` varchar(100) NULL DEFAULT NULL,
`no_sk_pendirian` varchar(100) NULL DEFAULT NULL,
`fasilitas` varchar(1000) NULL DEFAULT NULL,
`status_fasilitas_penunjang` varchar(100) NULL DEFAULT NULL,
`kd_sts_berkas_sk_pendirian` int(10) NULL DEFAULT NULL,
`no_sertifikat` varchar(20) NULL DEFAULT NULL,
`kd_sts_berkas_sertifikat` int(10) NULL DEFAULT NULL,
`kd_sts_aktif` int(10) NULL DEFAULT NULL,
`keterangan_invalid` varchar(100) NULL DEFAULT NULL,
PRIMARY KEY (`id_fasilitas_penunjang_penelitian`) 
)
ENGINE = InnoDB
AUTO_INCREMENT = 5
DEFAULT CHARACTER SET = latin1
COLLATE = latin1_swedish_ci
ROW_FORMAT = compact;

CREATE TABLE `dospres_hki` (
`id_hki` int(10) NOT NULL AUTO_INCREMENT,
`nidn` char(10) NULL DEFAULT NULL,
`judul_hki` varchar(1000) NULL DEFAULT NULL,
`jenis_hki` varchar(50) NULL DEFAULT NULL,
`no_pendaftaran` varchar(100) NULL DEFAULT NULL,
`status_hki` varchar(20) NULL DEFAULT NULL,
`no_hki` varchar(20) NULL DEFAULT NULL,
`kd_sts_berkas_hki` int(10) NULL DEFAULT NULL,
`keterangan_invalid` varchar(100) NULL DEFAULT NULL,
`tahun` int(5) NULL DEFAULT NULL,
PRIMARY KEY (`id_hki`) ,
INDEX `fk_dosen_hki` (`nidn` ASC) USING BTREE
)
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = latin1
COLLATE = latin1_swedish_ci
ROW_FORMAT = compact;

CREATE TABLE `dospres_luaran_lain` (
`id_luaran_lain` int(10) NOT NULL AUTO_INCREMENT,
`nidn` char(10) NULL DEFAULT NULL,
`judul_luaran` varchar(1000) NULL DEFAULT NULL,
`jenis_luaran_lain` varchar(100) NULL DEFAULT NULL,
`deskripsi` varchar(1000) NULL DEFAULT NULL,
`kd_sts_berkas_pendukung` int(10) NULL DEFAULT NULL,
`keterangan_invalid` varchar(100) NULL DEFAULT NULL,
`tahun` int(5) NULL DEFAULT NULL,
PRIMARY KEY (`id_luaran_lain`) ,
INDEX `fk_dosen_luaran_lain` (`nidn` ASC) USING BTREE
)
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = latin1
COLLATE = latin1_swedish_ci
ROW_FORMAT = compact;

CREATE TABLE `dospres_pemakalah_forum_ilmiah` (
`id_pemakalah_forum_ilmiah` int(10) NOT NULL AUTO_INCREMENT,
`nidn` char(10) NULL DEFAULT NULL,
`status_pemakalah` varchar(50) NULL DEFAULT NULL,
`judul_pemakalah` varchar(1000) NULL DEFAULT NULL,
`nama_forum` varchar(1000) NULL DEFAULT NULL,
`institusi_penyelenggara` varchar(500) NULL DEFAULT NULL,
`tgl_mulai_pelaksanaan` varchar(10) NULL DEFAULT NULL,
`tgl_akhir_pelaksanaan` varchar(10) NULL DEFAULT NULL,
`tempat_pelaksanaan` varchar(100) NULL DEFAULT NULL,
`kd_sts_berkas_makalah` int(10) NULL DEFAULT NULL,
`keterangan_invalid` varchar(500) NULL DEFAULT NULL,
`tahun` int(5) NULL DEFAULT NULL,
PRIMARY KEY (`id_pemakalah_forum_ilmiah`) ,
INDEX `fk_dosen_pemakalah_forum_ilmiah` (`nidn` ASC) USING BTREE
)
ENGINE = InnoDB
AUTO_INCREMENT = 9
DEFAULT CHARACTER SET = latin1
COLLATE = latin1_swedish_ci
ROW_FORMAT = compact;

CREATE TABLE `dospres_penelitian_hibah_ditlitabmas` (
`id_penelitian_hibah_ditlitabmas` int(10) NOT NULL AUTO_INCREMENT,
`nama_skim` varchar(50) NULL DEFAULT NULL,
`judul` varchar(1000) NULL DEFAULT NULL,
`jumlah_dana` int(20) NULL DEFAULT NULL,
`nidn_ketua` char(11) NULL DEFAULT NULL,
`nama_ketua` varchar(50) NULL DEFAULT NULL,
`nama_anggota` varchar(50) NULL DEFAULT NULL,
`bidang_penelitian` varchar(100) NULL DEFAULT NULL,
`bidang_penelitian_lain` varchar(100) NULL DEFAULT NULL,
`tujuan_sosial_ekonomi` varchar(500) NULL DEFAULT NULL,
`tujuan_sosial_ekonomi_lain` varchar(100) NULL DEFAULT NULL,
`tahun` int(5) NULL DEFAULT NULL,
PRIMARY KEY (`id_penelitian_hibah_ditlitabmas`) ,
INDEX `fk_dosen_peelitian_hibah_ditlitabmas` (`nidn_ketua` ASC) USING BTREE
)
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = latin1
COLLATE = latin1_swedish_ci
ROW_FORMAT = compact;

CREATE TABLE `dospres_penelitian_hibah_non_ditlitabmas` (
`id_penelitian_hibah_non_ditlitabmas` int(10) NOT NULL AUTO_INCREMENT,
`judul` varchar(1000) NULL DEFAULT NULL,
`nama_ketua` varchar(50) NULL DEFAULT NULL,
`nama_anggota` varchar(50) NULL DEFAULT NULL,
`sumber_dana` varchar(50) NULL DEFAULT NULL,
`institusi_sumber_dana` varchar(50) NULL DEFAULT NULL,
`jenis_penelitian` varchar(100) NULL DEFAULT NULL,
`bidang_penelitian` varchar(100) NULL DEFAULT NULL,
`bidang_penelitian_lain` varchar(100) NULL DEFAULT NULL,
`tujuan_sosial_ekonomi` varchar(500) NULL DEFAULT NULL,
`tujuan_sosial_ekonomi_lain` varchar(50) NULL DEFAULT NULL,
`jumlah_dana` int(20) NULL DEFAULT NULL,
`keterangan_invalid` varchar(100) NULL DEFAULT NULL,
`tahun` int(5) NULL DEFAULT NULL,
PRIMARY KEY (`id_penelitian_hibah_non_ditlitabmas`) 
)
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = latin1
COLLATE = latin1_swedish_ci
ROW_FORMAT = compact;

CREATE TABLE `dospres_prestasi_unggul` (
`id_prestasi_unggul` int(255) NOT NULL AUTO_INCREMENT,
`nidn` int(20) NOT NULL,
`abstrak` text NULL,
`latar_belakang` text NULL,
`metode_pencapaian_unggulan` text NULL,
`prestasi_yang_diunggulkan` text NULL,
`kemanfaatan` text NULL,
`diseminasi` text NULL,
`pengakuan_pihak_terkait` text NULL,
`nilai_abstrak` int(255) NULL,
`nilai_latar_belakang` int(255) NULL,
`nilai_metode_pencapaian_unggulan` int(255) NULL,
`nilai_prestasi_yang_diunggulkan` int(255) NULL,
`nilai_kemanfaatan` int(255) NULL,
`nilai_diseminasi` int(255) NULL,
`nilai_pengakuan_pihak_terkait` int(255) NULL,
`catatan` text NULL,
`tahun` year NULL,
`id_fakultas` int(255) NULL,
`id_program_studi` int(255) NULL,
PRIMARY KEY (`id_prestasi_unggul`) 
);

CREATE TABLE `dospres_formulir_kaprodi` (
`id_formulir_kaprodi` int(255) NOT NULL AUTO_INCREMENT,
`nidn` int(20) NOT NULL,
`nama_lengkap` varchar(300) NULL,
`jabatan_akademik` varchar(300) NULL,
`pangkat_dan_golongan` varchar(255) NULL,
`ttl` varchar(400) NULL,
`jenis_kelamin` varchar(255) NULL,
`bidang_keahlian` varchar(255) NULL,
`no_hp` varchar(100) NULL,
`email` varchar(300) NULL,
`file_makalah` varchar(255) NULL,
`tahun` year NULL,
`id_fakultas` int(255) NULL,
`id_program_studi` int(255) NULL,
PRIMARY KEY (`id_formulir_kaprodi`) 
);

CREATE TABLE `dospres_user` (
`id_user` int(255) NOT NULL AUTO_INCREMENT,
`username` varchar(255) NOT NULL,
`password` varchar(255) NOT NULL,
`fullname` varchar(255) NULL,
`level` tinyint(255) NULL COMMENT '1. admin/bkma; 2. dppm; 3. hki; 4. dosen',
PRIMARY KEY (`id_user`) 
);

CREATE TABLE `dospres_setting` (
`id_setting` int(255) NOT NULL,
`tanggal_buka` date NOT NULL,
`tanggal_tutup` date NOT NULL,
`tahun` year NOT NULL,
PRIMARY KEY (`id_setting`) 
);

CREATE TABLE `dospres_calon_dosen_berprestasi` (
`id_calon_dospres` int(255) NOT NULL AUTO_INCREMENT,
`nilai` double(255,0) NULL,
`tahun` year NOT NULL,
PRIMARY KEY (`id_calon_dospres`) 
);

CREATE TABLE `dospres_calon_kaprodi_berprestasi` (
`id_calon_kapres` int(255) NOT NULL AUTO_INCREMENT,
`nidn` int(30) NOT NULL,
`tahun` year NOT NULL,
PRIMARY KEY (`id_calon_kapres`) 
);

CREATE TABLE `dospres_dosen_berprestasi` (
`id_dospres` int(255) NOT NULL AUTO_INCREMENT,
`nidn` int(30) NOT NULL,
`nilai` double(255,0) NOT NULL,
`nidn_vote` int(30) NOT NULL,
`email_vote` varchar(30) NOT NULL,
`tahun` year NOT NULL,
`id_program_studi` int(255) NOT NULL,
PRIMARY KEY (`id_dospres`) 
);

CREATE TABLE `dospres_kaprodi_berprestasi` (
`id_kaprodi_berprestasi` int(255) NOT NULL AUTO_INCREMENT,
`nidn` int(30) NOT NULL,
`nilai` double(255,0) NOT NULL,
`nidn_vote` int(30) NOT NULL,
`email_vote` varchar(255) NOT NULL,
`tahun` year NOT NULL,
`id_program_studi` int(255) NOT NULL,
PRIMARY KEY (`id_kaprodi_berprestasi`) 
);

CREATE TABLE `dospres_fakultas` (
`id_fakultas` int(255) NOT NULL AUTO_INCREMENT,
`nama_fakultas` varchar(255) NOT NULL,
PRIMARY KEY (`id_fakultas`) 
);

CREATE TABLE `dospres_program_studi` (
`id_program_studi` int(255) NOT NULL AUTO_INCREMENT,
`nama_program_studi` varchar(255) NOT NULL,
`id_fakultas` int(255) NOT NULL,
PRIMARY KEY (`id_program_studi`) 
);


ALTER TABLE `dospres_program_studi` ADD CONSTRAINT `fk_dospres_program_studi` FOREIGN KEY (`id_fakultas`) REFERENCES `dospres_fakultas` (`id_fakultas`) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE `dospres_dosen_berprestasi` ADD CONSTRAINT `fk_dospres_dosen_berprestasi` FOREIGN KEY (`id_program_studi`) REFERENCES `dospres_program_studi` (`id_program_studi`) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE `dospres_kaprodi_berprestasi` ADD CONSTRAINT `fk_dospres_kaprodi_berprestasi` FOREIGN KEY (`id_program_studi`) REFERENCES `dospres_fakultas` (`id_fakultas`) ON DELETE CASCADE ON UPDATE CASCADE;


