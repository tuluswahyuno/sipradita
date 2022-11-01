-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table sipradita.data_anamnesis
CREATE TABLE IF NOT EXISTS `data_anamnesis` (
  `id_anamnesis` int(11) NOT NULL AUTO_INCREMENT,
  `id_pasien` int(11) DEFAULT NULL,
  `tgl_mrs` datetime DEFAULT CURRENT_TIMESTAMP,
  `tgl_pengkajian` datetime DEFAULT CURRENT_TIMESTAMP,
  `keluhan_utama` varchar(250) DEFAULT NULL,
  `riw_penyakit_sekarang` varchar(250) DEFAULT NULL,
  `pernah_rawat` varchar(250) DEFAULT NULL,
  `pernah_rawat_diagnosa` varchar(250) DEFAULT NULL,
  `pernah_rawat_kapan` date DEFAULT NULL,
  `pernah_rawat_di` varchar(250) DEFAULT NULL,
  `pernah_operasi` varchar(250) DEFAULT NULL,
  `pernah_operasi_jenis` varchar(250) DEFAULT NULL,
  `pernah_operasi_kapan` date DEFAULT NULL,
  `pernah_operasi_di` varchar(250) DEFAULT NULL,
  `obatygdikonsumsi` varchar(250) DEFAULT NULL,
  `obatygdikonsumsi_jenis` varchar(250) DEFAULT NULL,
  `riwayat_penyakit_keluarga` varchar(250) DEFAULT NULL,
  `riwayat_penyakit_jenis` varchar(250) DEFAULT NULL,
  `penyakit_jenis_lainnya` varchar(250) DEFAULT NULL,
  `riwayat_alergi` varchar(250) DEFAULT NULL,
  `alergi_makanan` varchar(250) DEFAULT NULL,
  `alergi_obat` varchar(250) DEFAULT NULL,
  `alergi_lainnya` varchar(250) DEFAULT NULL,
  `agama` varchar(250) DEFAULT NULL,
  `pendidikan` varchar(250) DEFAULT NULL,
  `kewarganegaraan` varchar(250) DEFAULT NULL,
  `pekerjaan` varchar(250) DEFAULT NULL,
  `status_pernikahan` varchar(250) DEFAULT NULL,
  `tinggal_bersama_keluarga` varchar(250) DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_anamnesis`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- Dumping data for table sipradita.data_anamnesis: ~2 rows (approximately)
/*!40000 ALTER TABLE `data_anamnesis` DISABLE KEYS */;
INSERT INTO `data_anamnesis` (`id_anamnesis`, `id_pasien`, `tgl_mrs`, `tgl_pengkajian`, `keluhan_utama`, `riw_penyakit_sekarang`, `pernah_rawat`, `pernah_rawat_diagnosa`, `pernah_rawat_kapan`, `pernah_rawat_di`, `pernah_operasi`, `pernah_operasi_jenis`, `pernah_operasi_kapan`, `pernah_operasi_di`, `obatygdikonsumsi`, `obatygdikonsumsi_jenis`, `riwayat_penyakit_keluarga`, `riwayat_penyakit_jenis`, `penyakit_jenis_lainnya`, `riwayat_alergi`, `alergi_makanan`, `alergi_obat`, `alergi_lainnya`, `agama`, `pendidikan`, `kewarganegaraan`, `pekerjaan`, `status_pernikahan`, `tinggal_bersama_keluarga`, `create_at`, `update_at`) VALUES
	(1, 1, '2022-10-24 17:18:07', '2022-10-24 17:18:07', 'Pusing mual', 'pusing mual sudah 2 hari karena males makan', 'Pernah', 'lapar', '2022-10-01', 'rumah aja', 'Pernah', 'kepo deh', '2022-10-11', 'rumah aja', 'Ya', 'bengkoang', 'Ya', 'Tidak Dalam Pilihan', NULL, 'Ya', 'asdf', 'asdf', NULL, 'Islam', 'SD', 'WNI', 'Ya', NULL, NULL, '2022-10-24 17:18:07', NULL),
	(3, 1, '2022-10-25 10:03:29', '2022-10-25 10:03:29', 'asdf', 'asdf', 'Pernah', 'asdf', '2022-10-25', 'asdf', 'Pernah', 'asdf', '2022-10-25', 'asdf', 'Ya', 'asdf', 'Ya', 'Tidak Dalam Pilihan', 'asdf', 'Ya', 'asdf', 'asdf', NULL, 'Islam', 'SD', 'WNI', 'PNS', 'Belum Menikah', 'Ya', '2022-10-25 10:03:29', NULL);
/*!40000 ALTER TABLE `data_anamnesis` ENABLE KEYS */;

-- Dumping structure for table sipradita.data_pasien
CREATE TABLE IF NOT EXISTS `data_pasien` (
  `id_pasien` int(11) NOT NULL AUTO_INCREMENT,
  `no_rm` varchar(100) DEFAULT NULL,
  `nama` varchar(220) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `t_lahir` varchar(200) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `nik` varchar(50) DEFAULT NULL,
  `no_bpjs` varchar(50) DEFAULT NULL,
  `no_hp` varchar(100) DEFAULT NULL,
  `agama` varchar(100) DEFAULT NULL,
  `pekerjaan` varchar(200) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` datetime DEFAULT NULL,
  `grafik` varchar(50) DEFAULT '1',
  PRIMARY KEY (`id_pasien`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- Dumping data for table sipradita.data_pasien: ~2 rows (approximately)
/*!40000 ALTER TABLE `data_pasien` DISABLE KEYS */;
INSERT INTO `data_pasien` (`id_pasien`, `no_rm`, `nama`, `gender`, `t_lahir`, `tgl_lahir`, `nik`, `no_bpjs`, `no_hp`, `agama`, `pekerjaan`, `alamat`, `create_at`, `update_at`, `grafik`) VALUES
	(1, '22070001', 'Tulus Wahyuno', 'Laki-laki', 'Sragen', '1996-07-05', '33140219600078', '9998888667735', '089168467891', 'Islam', 'PNS Daerah', 'Margo Asri, Puro, Karangmalang, Sragen', '2022-07-05 10:56:48', NULL, '1');
/*!40000 ALTER TABLE `data_pasien` ENABLE KEYS */;

-- Dumping structure for table sipradita.data_pemeriksaan
CREATE TABLE IF NOT EXISTS `data_pemeriksaan` (
  `id_pemeriksaan` int(11) NOT NULL AUTO_INCREMENT,
  `id_anamnesis` int(11) DEFAULT NULL,
  `e` varchar(250) DEFAULT NULL,
  `v` varchar(250) DEFAULT NULL,
  `m` varchar(250) DEFAULT NULL,
  `bb` varchar(250) DEFAULT NULL,
  `tb` varchar(250) DEFAULT NULL,
  `kesadaran` varchar(250) DEFAULT NULL,
  `td` varchar(250) DEFAULT NULL,
  `rr` varchar(250) DEFAULT NULL,
  `n` varchar(250) DEFAULT NULL,
  `s` varchar(250) DEFAULT NULL,
  `spo` varchar(250) DEFAULT NULL,
  `keadaan_umum` varchar(250) DEFAULT NULL,
  `ivline_terpasangdi` varchar(250) DEFAULT NULL,
  `lokasi` varchar(250) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `kateter_terpasang_tgl` varchar(250) DEFAULT NULL,
  `ngtogt_terpasang_tgl` varchar(250) DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_pemeriksaan`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table sipradita.data_pemeriksaan: ~1 rows (approximately)
/*!40000 ALTER TABLE `data_pemeriksaan` DISABLE KEYS */;
INSERT INTO `data_pemeriksaan` (`id_pemeriksaan`, `id_anamnesis`, `e`, `v`, `m`, `bb`, `tb`, `kesadaran`, `td`, `rr`, `n`, `s`, `spo`, `keadaan_umum`, `ivline_terpasangdi`, `lokasi`, `tanggal`, `kateter_terpasang_tgl`, `ngtogt_terpasang_tgl`, `create_at`, `update_at`) VALUES
	(1, 3, '1', '2', '2', '2', '2', 'Compos Mentis (GCS 14-15)', '2', '2', '2', '2', '2', 'Baik', 'asdf', 'Kanan', '2022-10-25', '2022-10-27', '2022-11-04', '2022-10-31 12:59:55', NULL);
/*!40000 ALTER TABLE `data_pemeriksaan` ENABLE KEYS */;

-- Dumping structure for table sipradita.data_periksa
CREATE TABLE IF NOT EXISTS `data_periksa` (
  `id_periksa` int(11) NOT NULL AUTO_INCREMENT,
  `id_pasien` int(11) DEFAULT NULL,
  `keluhan` varchar(250) DEFAULT NULL,
  `bb` varchar(250) DEFAULT NULL,
  `tb` varchar(250) DEFAULT NULL,
  `status_gizi` varchar(250) DEFAULT NULL,
  `anamnesis` varchar(250) DEFAULT NULL,
  `hasil_periksa` varchar(250) DEFAULT NULL,
  `diagnosis` varchar(250) DEFAULT NULL,
  `obat` varchar(250) DEFAULT NULL,
  `status` int(10) DEFAULT '0',
  `tgl_kunjungan` datetime DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_periksa`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- Dumping data for table sipradita.data_periksa: ~1 rows (approximately)
/*!40000 ALTER TABLE `data_periksa` DISABLE KEYS */;
INSERT INTO `data_periksa` (`id_periksa`, `id_pasien`, `keluhan`, `bb`, `tb`, `status_gizi`, `anamnesis`, `hasil_periksa`, `diagnosis`, `obat`, `status`, `tgl_kunjungan`, `create_at`, `update_at`) VALUES
	(7, 1, 'panas sudah 3 hari tidak mau makan, panas sudah 3 hari tidak mau makan sekali', '9.8', '110', 'Gizi Baik Banget', 'tensi 130/110, denyut nadi normal, tidak panas, tidak ngantuk', 'tidak ada masalah berarti', 'lapar', 'mixagrib 1x2, mixagrib 1x2, mixagrib 1x2, mixagrib 1x2', 1, '2022-07-12 13:52:13', '2022-07-12 13:52:13', '2022-07-13 08:45:54');
/*!40000 ALTER TABLE `data_periksa` ENABLE KEYS */;

-- Dumping structure for table sipradita.data_user
CREATE TABLE IF NOT EXISTS `data_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(220) DEFAULT NULL,
  `status_aktif` varchar(50) DEFAULT '1',
  `username` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_user`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=409 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- Dumping data for table sipradita.data_user: ~2 rows (approximately)
/*!40000 ALTER TABLE `data_user` DISABLE KEYS */;
INSERT INTO `data_user` (`id_user`, `nama_lengkap`, `status_aktif`, `username`, `password`, `role`, `create_at`, `update_at`) VALUES
	(406, 'Tulus Wahyuno', '1', 'tulusw', '8ea2cc6d7d5a961971c7fa974540b37e', '1', '2022-08-29 14:12:13', '2022-08-29 14:12:13'),
	(408, 'Administrator', '1', 'aridwi', '11b2807b6b8b375e2b7f0ef9cc922ecd', '1', '2022-07-22 12:46:54', '2022-07-22 12:46:54');
/*!40000 ALTER TABLE `data_user` ENABLE KEYS */;

-- Dumping structure for table sipradita.master_pasien
CREATE TABLE IF NOT EXISTS `master_pasien` (
  `id_pasien` int(11) NOT NULL AUTO_INCREMENT,
  `no_rm` varchar(100) DEFAULT NULL,
  `nama` varchar(220) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `ruang` varchar(200) DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_pasien`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- Dumping data for table sipradita.master_pasien: ~2 rows (approximately)
/*!40000 ALTER TABLE `master_pasien` DISABLE KEYS */;
INSERT INTO `master_pasien` (`id_pasien`, `no_rm`, `nama`, `tgl_lahir`, `alamat`, `ruang`, `create_at`, `update_at`) VALUES
	(1, '22070001', 'Tulus Wahyuno', '1996-07-05', 'Margo Asri, Puro, Karangmalang, Sragen', 'Anggrek', '2022-07-05 10:56:48', NULL);
/*!40000 ALTER TABLE `master_pasien` ENABLE KEYS */;

-- Dumping structure for table sipradita.sistem_pernafasan
CREATE TABLE IF NOT EXISTS `sistem_pernafasan` (
  `id_sistempernafasan` int(11) NOT NULL AUTO_INCREMENT,
  `id_anamnesis` int(11) DEFAULT NULL,
  `pola_nafas` varchar(250) DEFAULT NULL,
  `irama_nafas` varchar(250) DEFAULT NULL,
  `retraksi` varchar(250) DEFAULT NULL,
  `jenis_retraksi` varchar(250) DEFAULT NULL,
  `jenis_pernafasan` varchar(250) DEFAULT NULL,
  `alat_bantu` varchar(250) DEFAULT NULL,
  `alat_bantu_lainnya` varchar(250) DEFAULT NULL,
  `tekanan` varchar(250) DEFAULT NULL,
  `terpasang_wsd` varchar(250) DEFAULT NULL,
  `produksi` varchar(250) DEFAULT NULL,
  `kesulitan_bernafas` varchar(250) DEFAULT NULL,
  `kesulitan_bernafas_ya` varchar(250) DEFAULT NULL,
  `lain_lain` varchar(250) DEFAULT NULL,
  `saat` varchar(250) DEFAULT NULL,
  `batukdansekresi` varchar(250) DEFAULT NULL,
  `batukdansekresi_ya` varchar(250) DEFAULT NULL,
  `warna_sputum` varchar(250) DEFAULT NULL,
  `suara_nafas` varchar(250) DEFAULT NULL,
  `perkusi` varchar(250) DEFAULT NULL,
  `agd` varchar(250) DEFAULT NULL,
  `diagnosa_penafasan` varchar(250) DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_sistempernafasan`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table sipradita.sistem_pernafasan: ~4 rows (approximately)
/*!40000 ALTER TABLE `sistem_pernafasan` DISABLE KEYS */;
INSERT INTO `sistem_pernafasan` (`id_sistempernafasan`, `id_anamnesis`, `pola_nafas`, `irama_nafas`, `retraksi`, `jenis_retraksi`, `jenis_pernafasan`, `alat_bantu`, `alat_bantu_lainnya`, `tekanan`, `terpasang_wsd`, `produksi`, `kesulitan_bernafas`, `kesulitan_bernafas_ya`, `lain_lain`, `saat`, `batukdansekresi`, `batukdansekresi_ya`, `warna_sputum`, `suara_nafas`, `perkusi`, `agd`, `diagnosa_penafasan`, `create_at`, `update_at`) VALUES
	(1, 3, 'Normal', 'Teratur', 'Dada', 'asdf', 'Dada', 'NK', 'asdf', 'asdf', 'Ya', 'asdf', 'Ya', 'Dispneu', 'asdf', 'asdf', 'Ya', 'Produktif', 'Putih', 'Vasikuler', 'Sonor', 'PH<7,35', NULL, '2022-10-31 16:51:41', NULL),
	(2, 3, 'Tachipneu', 'Tidak Teratur', 'Ya', 'Dispneu', 'Dada', 'NK', 'tes', 'tes', 'Ya', 'tes', 'Ya', 'Dispneu', 'tes', 'tes', 'Tidak', 'Produktif', 'Putih', 'Whizing', 'Sonor', 'PH 7,35-7,45', 'Pola Nafas Tidak Efektif', '2022-10-31 17:03:21', NULL),
	(3, 3, 'Normal', 'Teratur', 'Ya', 'sdfg', 'Dada', 'NK', 'asdf', 'asdf', 'Ya', 'asdf', 'Ya', 'Dispneu', 'asdf', 'asdf', 'Ya', 'Produktif', 'Putih', 'Vasikuler', 'Sonor', 'PH<7,35', NULL, '2022-10-31 17:04:15', NULL),
	(4, 3, 'Tachipneu', 'Tidak Teratur', 'Ya', 'a', 'Dada', 'NK', 'a', 'a', 'Ya', 'a', 'Ya', 'Dispneu', 'a', 'a', 'Ya', 'Produktif', 'Putih', 'Rongki', 'Redup', 'PH<7,35', 'Bersihan Jalan Nafas Tidak Efektif', '2022-10-31 17:14:34', NULL);
/*!40000 ALTER TABLE `sistem_pernafasan` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
