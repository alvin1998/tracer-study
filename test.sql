-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for view sistem_pendaftaran_pelatihan_kuesioner_tracer_study.creat_tabel
DROP VIEW IF EXISTS `creat_tabel`;
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `creat_tabel` (
	`id` INT(10) NOT NULL,
	`personal_id` INT(10) NULL,
	`training_id` INT(10) NULL,
	`code` VARCHAR(255) NULL COLLATE 'utf8mb3_general_ci',
	`nomor_mahasiswa` VARCHAR(150) NULL COLLATE 'utf8mb3_general_ci',
	`nik_mahasiswa` VARCHAR(150) NULL COLLATE 'utf8mb3_general_ci',
	`nama_mahasiswa` VARCHAR(150) NULL COLLATE 'utf8mb3_general_ci',
	`email` VARCHAR(150) NULL COLLATE 'utf8mb3_general_ci',
	`phone` VARCHAR(25) NULL COLLATE 'utf8mb3_general_ci',
	`kode_prodi` VARCHAR(150) NULL COLLATE 'utf8mb3_general_ci',
	`tahun_lulus` VARCHAR(50) NULL COLLATE 'utf8mb3_general_ci',
	`kode_pt` VARCHAR(150) NULL COLLATE 'utf8mb3_general_ci',
	`npwp` VARCHAR(150) NULL COLLATE 'utf8mb3_general_ci',
	`created_at` DATETIME NULL,
	`created_by` INT(10) NULL,
	`updated_at` DATETIME NULL,
	`updated_by` INT(10) NULL,
	`deleted_at` DATETIME NULL,
	`deleted_by` INT(10) NULL,
	`status_kerja` VARCHAR(150) NULL COLLATE 'utf8mb3_general_ci',
	`dapat_kerja_kurang_6_bulan` VARCHAR(150) NULL COLLATE 'utf8mb3_general_ci',
	`berapa_bulan_dapat_kerja` VARCHAR(150) NULL COLLATE 'utf8mb3_general_ci',
	`rata_rata_gaji` VARCHAR(150) NULL COLLATE 'utf8mb3_general_ci',
	`lokasi_kerja` TEXT NULL COLLATE 'utf8mb3_general_ci',
	`jenis_perusahaan` VARCHAR(150) NULL COLLATE 'utf8mb3_general_ci',
	`nama_perusahaan` VARCHAR(150) NULL COLLATE 'utf8mb3_general_ci',
	`posisi_wirausaha` VARCHAR(150) NULL COLLATE 'utf8mb3_general_ci',
	`tingkat_tempat_kerja` VARCHAR(150) NULL COLLATE 'utf8mb3_general_ci',
	`pertanyaan_studi_biaya` VARCHAR(150) NULL COLLATE 'utf8mb3_general_ci',
	`pertanyaan_studi_perguruan` VARCHAR(150) NULL COLLATE 'utf8mb3_general_ci',
	`pertanyaan_studi_program` VARCHAR(150) NULL COLLATE 'utf8mb3_general_ci',
	`pertanyaan_studi_tanggal` DATE NULL,
	`sumber_dana_kuliah` VARCHAR(150) NULL COLLATE 'utf8mb3_general_ci',
	`hubungan_antara_bidang_studi` VARCHAR(150) NULL COLLATE 'utf8mb3_general_ci',
	`tingkat_pendidikan_untuk_kerja` VARCHAR(150) NULL COLLATE 'utf8mb3_general_ci',
	`etika_a` INT(10) NULL,
	`etika_b` INT(10) NULL,
	`keahlian_a` INT(10) NULL,
	`keahlian_b` INT(10) NULL,
	`bahasa_inggris_a` INT(10) NULL,
	`bahasa_inggris_b` INT(10) NULL,
	`penggunaan_ti_a` INT(10) NULL,
	`penggunaan_ti_b` INT(10) NULL,
	`komunikasi_a` INT(10) NULL,
	`komunikasi_b` INT(10) NULL,
	`kerjasama_a` INT(10) NULL,
	`kerjasama_b` INT(10) NULL,
	`pengembangan_diri_a` INT(10) NULL,
	`pengembangan_diri_b` INT(10) NULL,
	`perkuliahan` INT(10) NULL,
	`demontasi` INT(10) NULL,
	`partisipasi` INT(10) NULL,
	`magang` INT(10) NULL,
	`praktikum` INT(10) NULL,
	`kerja_lapangan` INT(10) NULL,
	`diskusi` INT(10) NULL,
	`jenis_mulai_cari_kerja` VARCHAR(150) NULL COLLATE 'utf8mb3_general_ci',
	`mulai_cari_kerja` VARCHAR(150) NULL COLLATE 'utf8mb3_general_ci',
	`cara_mencari_kerja` TEXT NULL COLLATE 'utf8mb3_general_ci',
	`banyak_perusahaan_lamar` VARCHAR(150) NULL COLLATE 'utf8mb3_general_ci',
	`banyak_perusahaan_respon_lamar` VARCHAR(150) NULL COLLATE 'utf8mb3_general_ci',
	`banyak_perusahaan_mengundang` VARCHAR(50) NULL COLLATE 'utf8mb3_general_ci',
	`situasi_saat_ini` TEXT NULL COLLATE 'utf8mb3_general_ci',
	`aktif_cari_kerja_4_minggu` VARCHAR(150) NULL COLLATE 'utf8mb3_general_ci',
	`mengambil_kerja_tidak_sesuai_pendidikan` TEXT NULL COLLATE 'utf8mb3_general_ci',
	`kuesioner_id` INT(10) NOT NULL,
	`opsional_id` INT(10) NOT NULL
) ENGINE=MyISAM;

-- Dumping structure for table sistem_pendaftaran_pelatihan_kuesioner_tracer_study.kuesioner
DROP TABLE IF EXISTS `kuesioner`;
CREATE TABLE IF NOT EXISTS `kuesioner` (
  `id` int NOT NULL AUTO_INCREMENT,
  `registrant_id` int DEFAULT NULL,
  `status_kerja` varchar(150) DEFAULT NULL,
  `dapat_kerja_kurang_6_bulan` varchar(150) DEFAULT NULL,
  `berapa_bulan_dapat_kerja` varchar(150) DEFAULT NULL,
  `rata_rata_gaji` varchar(150) DEFAULT NULL,
  `lokasi_kerja` text,
  `jenis_perusahaan` varchar(150) DEFAULT NULL,
  `nama_perusahaan` varchar(150) DEFAULT NULL,
  `posisi_wirausaha` varchar(150) DEFAULT NULL,
  `tingkat_tempat_kerja` varchar(150) DEFAULT NULL,
  `pertanyaan_studi_biaya` varchar(150) DEFAULT NULL,
  `pertanyaan_studi_perguruan` varchar(150) DEFAULT NULL,
  `pertanyaan_studi_program` varchar(150) DEFAULT NULL,
  `pertanyaan_studi_tanggal` date DEFAULT NULL,
  `sumber_dana_kuliah` varchar(150) DEFAULT NULL,
  `hubungan_antara_bidang_studi` varchar(150) DEFAULT NULL,
  `tingkat_pendidikan_untuk_kerja` varchar(150) DEFAULT NULL,
  `etika_a` int DEFAULT NULL,
  `etika_b` int DEFAULT NULL,
  `keahlian_a` int DEFAULT NULL,
  `keahlian_b` int DEFAULT NULL,
  `bahasa_inggris_a` int DEFAULT NULL,
  `bahasa_inggris_b` int DEFAULT NULL,
  `penggunaan_ti_a` int DEFAULT NULL,
  `penggunaan_ti_b` int DEFAULT NULL,
  `komunikasi_a` int DEFAULT NULL,
  `komunikasi_b` int DEFAULT NULL,
  `kerjasama_a` int DEFAULT NULL,
  `kerjasama_b` int DEFAULT NULL,
  `pengembangan_diri_a` int DEFAULT NULL,
  `pengembangan_diri_b` int DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` int DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` int DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb3 ROW_FORMAT=DYNAMIC;

-- Data exporting was unselected.

-- Dumping structure for table sistem_pendaftaran_pelatihan_kuesioner_tracer_study.kuesioner_opsional
DROP TABLE IF EXISTS `kuesioner_opsional`;
CREATE TABLE IF NOT EXISTS `kuesioner_opsional` (
  `id` int NOT NULL AUTO_INCREMENT,
  `registrant_id` int NOT NULL,
  `perkuliahan` int DEFAULT NULL,
  `demontasi` int DEFAULT NULL,
  `partisipasi` int DEFAULT NULL,
  `magang` int DEFAULT NULL,
  `praktikum` int DEFAULT NULL,
  `kerja_lapangan` int DEFAULT NULL,
  `diskusi` int DEFAULT NULL,
  `jenis_mulai_cari_kerja` varchar(150) DEFAULT NULL,
  `mulai_cari_kerja` varchar(150) DEFAULT NULL,
  `cara_mencari_kerja` text,
  `banyak_perusahaan_lamar` varchar(150) DEFAULT NULL,
  `banyak_perusahaan_respon_lamar` varchar(150) DEFAULT NULL,
  `banyak_perusahaan_mengundang` varchar(50) DEFAULT NULL,
  `situasi_saat_ini` text,
  `aktif_cari_kerja_4_minggu` varchar(150) DEFAULT NULL,
  `mengambil_kerja_tidak_sesuai_pendidikan` text,
  `created_at` datetime DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` int DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` int DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb3 ROW_FORMAT=DYNAMIC;

-- Data exporting was unselected.

-- Dumping structure for table sistem_pendaftaran_pelatihan_kuesioner_tracer_study.personal
DROP TABLE IF EXISTS `personal`;
CREATE TABLE IF NOT EXISTS `personal` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `nim` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `whatsapp` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` int DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` int DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb3 ROW_FORMAT=DYNAMIC;

-- Data exporting was unselected.

-- Dumping structure for table sistem_pendaftaran_pelatihan_kuesioner_tracer_study.registrant
DROP TABLE IF EXISTS `registrant`;
CREATE TABLE IF NOT EXISTS `registrant` (
  `id` int NOT NULL AUTO_INCREMENT,
  `personal_id` int DEFAULT NULL,
  `training_id` int DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `nomor_mahasiswa` varchar(150) DEFAULT NULL,
  `nik_mahasiswa` varchar(150) DEFAULT NULL,
  `nama_mahasiswa` varchar(150) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `phone` varchar(25) DEFAULT NULL,
  `kode_prodi` varchar(150) DEFAULT NULL,
  `tahun_lulus` varchar(50) DEFAULT NULL,
  `kode_pt` varchar(150) DEFAULT NULL,
  `npwp` varchar(150) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` int DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` int DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb3 ROW_FORMAT=DYNAMIC;

-- Data exporting was unselected.

-- Dumping structure for table sistem_pendaftaran_pelatihan_kuesioner_tracer_study.training
DROP TABLE IF EXISTS `training`;
CREATE TABLE IF NOT EXISTS `training` (
  `id` int NOT NULL AUTO_INCREMENT,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `training` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` int DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` int DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb3 ROW_FORMAT=DYNAMIC;

-- Data exporting was unselected.

-- Dumping structure for table sistem_pendaftaran_pelatihan_kuesioner_tracer_study.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `group` enum('admin') DEFAULT 'admin',
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `password` text NOT NULL,
  `status` enum('active','non-active') NOT NULL DEFAULT 'active',
  `avatar` varchar(250) DEFAULT 'uploads/users/default.png',
  `created_at` datetime DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` int DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` int DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 ROW_FORMAT=DYNAMIC;

-- Data exporting was unselected.

-- Dumping structure for view sistem_pendaftaran_pelatihan_kuesioner_tracer_study.view_survey
DROP VIEW IF EXISTS `view_survey`;
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `view_survey` (
	`id` INT(10) NOT NULL,
	`personal_id` INT(10) NULL,
	`training_id` INT(10) NULL,
	`code` VARCHAR(255) NULL COLLATE 'utf8mb3_general_ci',
	`nomor_mahasiswa` VARCHAR(150) NULL COLLATE 'utf8mb3_general_ci',
	`nik_mahasiswa` VARCHAR(150) NULL COLLATE 'utf8mb3_general_ci',
	`nama_mahasiswa` VARCHAR(150) NULL COLLATE 'utf8mb3_general_ci',
	`email` VARCHAR(150) NULL COLLATE 'utf8mb3_general_ci',
	`phone` VARCHAR(25) NULL COLLATE 'utf8mb3_general_ci',
	`kode_prodi` VARCHAR(150) NULL COLLATE 'utf8mb3_general_ci',
	`tahun_lulus` VARCHAR(50) NULL COLLATE 'utf8mb3_general_ci',
	`kode_pt` VARCHAR(150) NULL COLLATE 'utf8mb3_general_ci',
	`npwp` VARCHAR(150) NULL COLLATE 'utf8mb3_general_ci',
	`created_at` DATETIME NULL,
	`created_by` INT(10) NULL,
	`updated_at` DATETIME NULL,
	`updated_by` INT(10) NULL,
	`deleted_at` DATETIME NULL,
	`deleted_by` INT(10) NULL,
	`personal_name` VARCHAR(100) NULL COLLATE 'utf8mb3_general_ci',
	`personal_nim` VARCHAR(100) NULL COLLATE 'utf8mb3_general_ci',
	`personal_email` VARCHAR(50) NULL COLLATE 'utf8mb3_general_ci',
	`whatsapp` VARCHAR(255) NULL COLLATE 'utf8mb3_general_ci',
	`date` DATE NULL,
	`time` TIME NULL,
	`training` VARCHAR(255) NULL COLLATE 'utf8mb3_general_ci',
	`description` VARCHAR(255) NULL COLLATE 'utf8mb3_general_ci',
	`status_kerja` VARCHAR(150) NULL COLLATE 'utf8mb3_general_ci',
	`dapat_kerja_kurang_6_bulan` VARCHAR(150) NULL COLLATE 'utf8mb3_general_ci',
	`berapa_bulan_dapat_kerja` VARCHAR(150) NULL COLLATE 'utf8mb3_general_ci',
	`rata_rata_gaji` VARCHAR(150) NULL COLLATE 'utf8mb3_general_ci',
	`lokasi_kerja` TEXT NULL COLLATE 'utf8mb3_general_ci',
	`jenis_perusahaan` VARCHAR(150) NULL COLLATE 'utf8mb3_general_ci',
	`nama_perusahaan` VARCHAR(150) NULL COLLATE 'utf8mb3_general_ci',
	`posisi_wirausaha` VARCHAR(150) NULL COLLATE 'utf8mb3_general_ci',
	`tingkat_tempat_kerja` VARCHAR(150) NULL COLLATE 'utf8mb3_general_ci',
	`pertanyaan_studi_biaya` VARCHAR(150) NULL COLLATE 'utf8mb3_general_ci',
	`pertanyaan_studi_perguruan` VARCHAR(150) NULL COLLATE 'utf8mb3_general_ci',
	`pertanyaan_studi_program` VARCHAR(150) NULL COLLATE 'utf8mb3_general_ci',
	`pertanyaan_studi_tanggal` DATE NULL,
	`sumber_dana_kuliah` VARCHAR(150) NULL COLLATE 'utf8mb3_general_ci',
	`hubungan_antara_bidang_studi` VARCHAR(150) NULL COLLATE 'utf8mb3_general_ci',
	`tingkat_pendidikan_untuk_kerja` VARCHAR(150) NULL COLLATE 'utf8mb3_general_ci',
	`etika_a` INT(10) NULL,
	`etika_b` INT(10) NULL,
	`keahlian_a` INT(10) NULL,
	`keahlian_b` INT(10) NULL,
	`bahasa_inggris_a` INT(10) NULL,
	`bahasa_inggris_b` INT(10) NULL,
	`penggunaan_ti_a` INT(10) NULL,
	`penggunaan_ti_b` INT(10) NULL,
	`komunikasi_a` INT(10) NULL,
	`komunikasi_b` INT(10) NULL,
	`kerjasama_a` INT(10) NULL,
	`kerjasama_b` INT(10) NULL,
	`pengembangan_diri_a` INT(10) NULL,
	`pengembangan_diri_b` INT(10) NULL,
	`perkuliahan` INT(10) NULL,
	`demontasi` INT(10) NULL,
	`partisipasi` INT(10) NULL,
	`magang` INT(10) NULL,
	`praktikum` INT(10) NULL,
	`kerja_lapangan` INT(10) NULL,
	`diskusi` INT(10) NULL,
	`jenis_mulai_cari_kerja` VARCHAR(150) NULL COLLATE 'utf8mb3_general_ci',
	`mulai_cari_kerja` VARCHAR(150) NULL COLLATE 'utf8mb3_general_ci',
	`cara_mencari_kerja` TEXT NULL COLLATE 'utf8mb3_general_ci',
	`banyak_perusahaan_lamar` VARCHAR(150) NULL COLLATE 'utf8mb3_general_ci',
	`banyak_perusahaan_respon_lamar` VARCHAR(150) NULL COLLATE 'utf8mb3_general_ci',
	`banyak_perusahaan_mengundang` VARCHAR(50) NULL COLLATE 'utf8mb3_general_ci',
	`situasi_saat_ini` TEXT NULL COLLATE 'utf8mb3_general_ci',
	`aktif_cari_kerja_4_minggu` VARCHAR(150) NULL COLLATE 'utf8mb3_general_ci',
	`mengambil_kerja_tidak_sesuai_pendidikan` TEXT NULL COLLATE 'utf8mb3_general_ci',
	`kuesioner_id` INT(10) NOT NULL,
	`opsional_id` INT(10) NOT NULL
) ENGINE=MyISAM;

-- Dumping structure for view sistem_pendaftaran_pelatihan_kuesioner_tracer_study.creat_tabel
DROP VIEW IF EXISTS `creat_tabel`;
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `creat_tabel`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `creat_tabel` AS select `registrant`.`id` AS `id`,`registrant`.`personal_id` AS `personal_id`,`registrant`.`training_id` AS `training_id`,`registrant`.`code` AS `code`,`registrant`.`nomor_mahasiswa` AS `nomor_mahasiswa`,`registrant`.`nik_mahasiswa` AS `nik_mahasiswa`,`registrant`.`nama_mahasiswa` AS `nama_mahasiswa`,`registrant`.`email` AS `email`,`registrant`.`phone` AS `phone`,`registrant`.`kode_prodi` AS `kode_prodi`,`registrant`.`tahun_lulus` AS `tahun_lulus`,`registrant`.`kode_pt` AS `kode_pt`,`registrant`.`npwp` AS `npwp`,`registrant`.`created_at` AS `created_at`,`registrant`.`created_by` AS `created_by`,`registrant`.`updated_at` AS `updated_at`,`registrant`.`updated_by` AS `updated_by`,`registrant`.`deleted_at` AS `deleted_at`,`registrant`.`deleted_by` AS `deleted_by`,`kuesioner`.`status_kerja` AS `status_kerja`,`kuesioner`.`dapat_kerja_kurang_6_bulan` AS `dapat_kerja_kurang_6_bulan`,`kuesioner`.`berapa_bulan_dapat_kerja` AS `berapa_bulan_dapat_kerja`,`kuesioner`.`rata_rata_gaji` AS `rata_rata_gaji`,`kuesioner`.`lokasi_kerja` AS `lokasi_kerja`,`kuesioner`.`jenis_perusahaan` AS `jenis_perusahaan`,`kuesioner`.`nama_perusahaan` AS `nama_perusahaan`,`kuesioner`.`posisi_wirausaha` AS `posisi_wirausaha`,`kuesioner`.`tingkat_tempat_kerja` AS `tingkat_tempat_kerja`,`kuesioner`.`pertanyaan_studi_biaya` AS `pertanyaan_studi_biaya`,`kuesioner`.`pertanyaan_studi_perguruan` AS `pertanyaan_studi_perguruan`,`kuesioner`.`pertanyaan_studi_program` AS `pertanyaan_studi_program`,`kuesioner`.`pertanyaan_studi_tanggal` AS `pertanyaan_studi_tanggal`,`kuesioner`.`sumber_dana_kuliah` AS `sumber_dana_kuliah`,`kuesioner`.`hubungan_antara_bidang_studi` AS `hubungan_antara_bidang_studi`,`kuesioner`.`tingkat_pendidikan_untuk_kerja` AS `tingkat_pendidikan_untuk_kerja`,`kuesioner`.`etika_a` AS `etika_a`,`kuesioner`.`etika_b` AS `etika_b`,`kuesioner`.`keahlian_a` AS `keahlian_a`,`kuesioner`.`keahlian_b` AS `keahlian_b`,`kuesioner`.`bahasa_inggris_a` AS `bahasa_inggris_a`,`kuesioner`.`bahasa_inggris_b` AS `bahasa_inggris_b`,`kuesioner`.`penggunaan_ti_a` AS `penggunaan_ti_a`,`kuesioner`.`penggunaan_ti_b` AS `penggunaan_ti_b`,`kuesioner`.`komunikasi_a` AS `komunikasi_a`,`kuesioner`.`komunikasi_b` AS `komunikasi_b`,`kuesioner`.`kerjasama_a` AS `kerjasama_a`,`kuesioner`.`kerjasama_b` AS `kerjasama_b`,`kuesioner`.`pengembangan_diri_a` AS `pengembangan_diri_a`,`kuesioner`.`pengembangan_diri_b` AS `pengembangan_diri_b`,`kuesioner_opsional`.`perkuliahan` AS `perkuliahan`,`kuesioner_opsional`.`demontasi` AS `demontasi`,`kuesioner_opsional`.`partisipasi` AS `partisipasi`,`kuesioner_opsional`.`magang` AS `magang`,`kuesioner_opsional`.`praktikum` AS `praktikum`,`kuesioner_opsional`.`kerja_lapangan` AS `kerja_lapangan`,`kuesioner_opsional`.`diskusi` AS `diskusi`,`kuesioner_opsional`.`jenis_mulai_cari_kerja` AS `jenis_mulai_cari_kerja`,`kuesioner_opsional`.`mulai_cari_kerja` AS `mulai_cari_kerja`,`kuesioner_opsional`.`cara_mencari_kerja` AS `cara_mencari_kerja`,`kuesioner_opsional`.`banyak_perusahaan_lamar` AS `banyak_perusahaan_lamar`,`kuesioner_opsional`.`banyak_perusahaan_respon_lamar` AS `banyak_perusahaan_respon_lamar`,`kuesioner_opsional`.`banyak_perusahaan_mengundang` AS `banyak_perusahaan_mengundang`,`kuesioner_opsional`.`situasi_saat_ini` AS `situasi_saat_ini`,`kuesioner_opsional`.`aktif_cari_kerja_4_minggu` AS `aktif_cari_kerja_4_minggu`,`kuesioner_opsional`.`mengambil_kerja_tidak_sesuai_pendidikan` AS `mengambil_kerja_tidak_sesuai_pendidikan`,`kuesioner`.`id` AS `kuesioner_id`,`kuesioner_opsional`.`id` AS `opsional_id` from ((`registrant` join `kuesioner` on((`registrant`.`id` = `kuesioner`.`registrant_id`))) join `kuesioner_opsional` on((`kuesioner_opsional`.`registrant_id` = `registrant`.`id`)));

-- Dumping structure for view sistem_pendaftaran_pelatihan_kuesioner_tracer_study.view_survey
DROP VIEW IF EXISTS `view_survey`;
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `view_survey`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `view_survey` AS select `registrant`.`id` AS `id`,`registrant`.`personal_id` AS `personal_id`,`registrant`.`training_id` AS `training_id`,`registrant`.`code` AS `code`,`registrant`.`nomor_mahasiswa` AS `nomor_mahasiswa`,`registrant`.`nik_mahasiswa` AS `nik_mahasiswa`,`registrant`.`nama_mahasiswa` AS `nama_mahasiswa`,`registrant`.`email` AS `email`,`registrant`.`phone` AS `phone`,`registrant`.`kode_prodi` AS `kode_prodi`,`registrant`.`tahun_lulus` AS `tahun_lulus`,`registrant`.`kode_pt` AS `kode_pt`,`registrant`.`npwp` AS `npwp`,`registrant`.`created_at` AS `created_at`,`registrant`.`created_by` AS `created_by`,`registrant`.`updated_at` AS `updated_at`,`registrant`.`updated_by` AS `updated_by`,`registrant`.`deleted_at` AS `deleted_at`,`registrant`.`deleted_by` AS `deleted_by`,`personal`.`name` AS `personal_name`,`personal`.`nim` AS `personal_nim`,`personal`.`email` AS `personal_email`,`personal`.`whatsapp` AS `whatsapp`,`training`.`date` AS `date`,`training`.`time` AS `time`,`training`.`training` AS `training`,`training`.`description` AS `description`,`kuesioner`.`status_kerja` AS `status_kerja`,`kuesioner`.`dapat_kerja_kurang_6_bulan` AS `dapat_kerja_kurang_6_bulan`,`kuesioner`.`berapa_bulan_dapat_kerja` AS `berapa_bulan_dapat_kerja`,`kuesioner`.`rata_rata_gaji` AS `rata_rata_gaji`,`kuesioner`.`lokasi_kerja` AS `lokasi_kerja`,`kuesioner`.`jenis_perusahaan` AS `jenis_perusahaan`,`kuesioner`.`nama_perusahaan` AS `nama_perusahaan`,`kuesioner`.`posisi_wirausaha` AS `posisi_wirausaha`,`kuesioner`.`tingkat_tempat_kerja` AS `tingkat_tempat_kerja`,`kuesioner`.`pertanyaan_studi_biaya` AS `pertanyaan_studi_biaya`,`kuesioner`.`pertanyaan_studi_perguruan` AS `pertanyaan_studi_perguruan`,`kuesioner`.`pertanyaan_studi_program` AS `pertanyaan_studi_program`,`kuesioner`.`pertanyaan_studi_tanggal` AS `pertanyaan_studi_tanggal`,`kuesioner`.`sumber_dana_kuliah` AS `sumber_dana_kuliah`,`kuesioner`.`hubungan_antara_bidang_studi` AS `hubungan_antara_bidang_studi`,`kuesioner`.`tingkat_pendidikan_untuk_kerja` AS `tingkat_pendidikan_untuk_kerja`,`kuesioner`.`etika_a` AS `etika_a`,`kuesioner`.`etika_b` AS `etika_b`,`kuesioner`.`keahlian_a` AS `keahlian_a`,`kuesioner`.`keahlian_b` AS `keahlian_b`,`kuesioner`.`bahasa_inggris_a` AS `bahasa_inggris_a`,`kuesioner`.`bahasa_inggris_b` AS `bahasa_inggris_b`,`kuesioner`.`penggunaan_ti_a` AS `penggunaan_ti_a`,`kuesioner`.`penggunaan_ti_b` AS `penggunaan_ti_b`,`kuesioner`.`komunikasi_a` AS `komunikasi_a`,`kuesioner`.`komunikasi_b` AS `komunikasi_b`,`kuesioner`.`kerjasama_a` AS `kerjasama_a`,`kuesioner`.`kerjasama_b` AS `kerjasama_b`,`kuesioner`.`pengembangan_diri_a` AS `pengembangan_diri_a`,`kuesioner`.`pengembangan_diri_b` AS `pengembangan_diri_b`,`kuesioner_opsional`.`perkuliahan` AS `perkuliahan`,`kuesioner_opsional`.`demontasi` AS `demontasi`,`kuesioner_opsional`.`partisipasi` AS `partisipasi`,`kuesioner_opsional`.`magang` AS `magang`,`kuesioner_opsional`.`praktikum` AS `praktikum`,`kuesioner_opsional`.`kerja_lapangan` AS `kerja_lapangan`,`kuesioner_opsional`.`diskusi` AS `diskusi`,`kuesioner_opsional`.`jenis_mulai_cari_kerja` AS `jenis_mulai_cari_kerja`,`kuesioner_opsional`.`mulai_cari_kerja` AS `mulai_cari_kerja`,`kuesioner_opsional`.`cara_mencari_kerja` AS `cara_mencari_kerja`,`kuesioner_opsional`.`banyak_perusahaan_lamar` AS `banyak_perusahaan_lamar`,`kuesioner_opsional`.`banyak_perusahaan_respon_lamar` AS `banyak_perusahaan_respon_lamar`,`kuesioner_opsional`.`banyak_perusahaan_mengundang` AS `banyak_perusahaan_mengundang`,`kuesioner_opsional`.`situasi_saat_ini` AS `situasi_saat_ini`,`kuesioner_opsional`.`aktif_cari_kerja_4_minggu` AS `aktif_cari_kerja_4_minggu`,`kuesioner_opsional`.`mengambil_kerja_tidak_sesuai_pendidikan` AS `mengambil_kerja_tidak_sesuai_pendidikan`,`kuesioner`.`id` AS `kuesioner_id`,`kuesioner_opsional`.`id` AS `opsional_id` from ((((`registrant` join `personal` on((`registrant`.`personal_id` = `personal`.`id`))) join `training` on((`registrant`.`training_id` = `training`.`id`))) join `kuesioner` on((`registrant`.`id` = `kuesioner`.`registrant_id`))) join `kuesioner_opsional` on((`registrant`.`id` = `kuesioner_opsional`.`registrant_id`)));

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
