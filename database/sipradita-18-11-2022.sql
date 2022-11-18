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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- Dumping data for table sipradita.data_anamnesis: ~5 rows (approximately)
/*!40000 ALTER TABLE `data_anamnesis` DISABLE KEYS */;
INSERT INTO `data_anamnesis` (`id_anamnesis`, `id_pasien`, `tgl_mrs`, `tgl_pengkajian`, `keluhan_utama`, `riw_penyakit_sekarang`, `pernah_rawat`, `pernah_rawat_diagnosa`, `pernah_rawat_kapan`, `pernah_rawat_di`, `pernah_operasi`, `pernah_operasi_jenis`, `pernah_operasi_kapan`, `pernah_operasi_di`, `obatygdikonsumsi`, `obatygdikonsumsi_jenis`, `riwayat_penyakit_keluarga`, `riwayat_penyakit_jenis`, `penyakit_jenis_lainnya`, `riwayat_alergi`, `alergi_makanan`, `alergi_obat`, `alergi_lainnya`, `agama`, `pendidikan`, `kewarganegaraan`, `pekerjaan`, `status_pernikahan`, `tinggal_bersama_keluarga`, `create_at`, `update_at`) VALUES
	(3, 1, '2022-10-25 10:03:29', '2022-10-25 10:03:29', 'Mual Muntah sudah 3 hari 3 malam tidak tidur', 'Mual Muntah sudah 3 hari 3 malam tidak tidur', 'Pernah', 'asdf', '2022-10-25', 'asdf', 'Pernah', 'asdf', '2022-10-25', 'asdf', 'Ya', 'asdf', 'Ya', 'Tidak Dalam Pilihan', 'asdf', 'Ya', 'asdf', 'asdf', NULL, 'Islam', 'SD', 'WNI', 'PNS', 'Belum Menikah', 'Ya', '2022-10-25 10:03:29', NULL),
	(4, 1, '2022-11-06 16:42:25', '2022-11-06 16:42:25', 'Mual Muntah sudah 3 hari 3 malam tidak tidur', 'Mual Muntah sudah 3 hari 3 malam tidak tidur', 'Pernah', 'asdf', '2022-11-24', 'asd', 'Pernah', '', '2022-11-06', 'asd', 'Ya', 'asdf', 'Ya', 'Tidak Dalam Pilihan', 'asdf', 'Ya', 'asdf', 'asdf', 'asdf', 'Islam', 'SD', 'WNI', 'PNS', 'Belum Menikah', 'Ya', '2022-11-06 16:42:25', NULL),
	(5, 1, '2022-11-08 20:56:31', '2022-11-08 20:56:31', 'Mual Muntah sudah 3 hari 3 malam tidak tidur', 'Mual Muntah sudah 3 hari 3 malam tidak tidur', 'Pernah', 'asdf', '2022-11-23', 'asdf', 'Pernah', 'asdf', '2022-11-06', 'asdf', 'Ya', 'asdf', 'Ya', 'Tidak Dalam Pilihan', 'asdf', 'Ya', 'asdf', 'asdf', 'asdf', 'Islam', 'SD', 'WNI', 'PNS', 'Belum Menikah', 'Ya', '2022-11-08 20:56:31', NULL),
	(7, 1, '2022-11-14 13:22:32', '2022-11-14 13:22:32', 'pusing', 'demam', 'Pernah', 'ewfwqef', '2022-11-14', 'asdf', 'Pernah', 'asdf', '2022-11-14', 'asdf', 'Ya', 'asdf', 'Ya', 'Tidak Dalam Pilihan', 'asdf', 'Ya', 'jengkol', 'asdf', 'asdf', 'Islam', 'Sarjana', 'WNI', 'PNS', 'Belum Menikah', 'Ya', '2022-11-14 13:22:32', NULL),
	(8, 4, '2022-11-14 13:57:32', '2022-11-14 13:57:32', 'nyeri perut', '1minggu mengalami sakit perut bagian bawah', 'Tidak Pernah', '', '0000-00-00', '', 'Tidak Pernah', '', '0000-00-00', '', 'Tidak', '', 'Tidak', 'Tidak Dalam Pilihan', '', 'Tidak', 'asdf', '', '', 'Islam', 'SD', 'WNI', 'PNS', 'Belum Menikah', 'Ya', '2022-11-14 13:57:32', NULL),
	(9, 4, '2022-11-14 14:23:27', '2022-11-14 14:23:27', 'asdf', 'asdfas', 'Pernah', 'asdf', '2022-11-14', 'asdf', 'Pernah', 'asdf', '2022-11-14', 'asdf', 'Ya', 'asdf', 'Ya', 'Tidak Dalam Pilihan', 'asdf', 'Ya', 'asdf', 'asdf', 'asdf', 'Islam', 'SD', 'WNI', 'PNS', 'Belum Menikah', 'Ya', '2022-11-14 14:23:27', NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- Dumping data for table sipradita.data_pasien: ~2 rows (approximately)
/*!40000 ALTER TABLE `data_pasien` DISABLE KEYS */;
INSERT INTO `data_pasien` (`id_pasien`, `no_rm`, `nama`, `gender`, `t_lahir`, `tgl_lahir`, `nik`, `no_bpjs`, `no_hp`, `agama`, `pekerjaan`, `alamat`, `create_at`, `update_at`, `grafik`) VALUES
	(1, '22070001', 'Tulus Wahyuno', 'Laki-laki', 'Sragen', '1996-07-05', '33140219600078', '9998888667735', '089168467891', 'Islam', 'PNS Daerah', 'Margo Asri, Puro, Karangmalang, Sragen', '2022-07-05 10:56:48', NULL, '1'),
	(4, '22110002', 'EKA MUTYA', 'Perempuan', 'TANGERANG', '2022-11-14', NULL, NULL, '089673393833', 'Islam', 'Swasta', 'margo asri rt 36 rw 08\r\npuro, karangmalang', '2022-11-14 13:56:31', NULL, '1');
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table sipradita.data_pemeriksaan: ~3 rows (approximately)
/*!40000 ALTER TABLE `data_pemeriksaan` DISABLE KEYS */;
INSERT INTO `data_pemeriksaan` (`id_pemeriksaan`, `id_anamnesis`, `e`, `v`, `m`, `bb`, `tb`, `kesadaran`, `td`, `rr`, `n`, `s`, `spo`, `keadaan_umum`, `ivline_terpasangdi`, `lokasi`, `tanggal`, `kateter_terpasang_tgl`, `ngtogt_terpasang_tgl`, `create_at`, `update_at`) VALUES
	(1, 3, '1', '2', '2', '2', '2', 'Compos Mentis (GCS 14-15)', '2', '2', '2', '2', '2', 'Baik', 'Lengan', 'Kanan', '2022-10-25', '2022-10-27', '2022-11-04', '2022-10-31 12:59:55', NULL),
	(3, 7, '41', '5', '6', '60', '180', 'Apatis (GCS 12-13)', 'dsaf', 'asd', 'asdf', 'asdf', 'asdf', 'Baik', 'tangan', 'Kiri', '2022-11-14', '2022-11-14', '2022-11-14', '2022-11-14 13:24:15', NULL),
	(4, 8, '4', '5', '6', '70', '158', 'Compos Mentis (GCS 14-15)', '120/80', '20', '80', '36,3', '99', 'Baik', 'tangan', 'Kanan', '2022-11-14', '2022-11-14', '2022-11-14', '2022-11-14 14:02:18', NULL);
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

-- Dumping structure for table sipradita.grafik
CREATE TABLE IF NOT EXISTS `grafik` (
  `id_grafik` int(11) NOT NULL AUTO_INCREMENT,
  `id_anamnesis` varchar(250) DEFAULT NULL,
  `nadi` varchar(250) DEFAULT NULL,
  `suhu` varchar(250) DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_grafik`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- Dumping data for table sipradita.grafik: ~5 rows (approximately)
/*!40000 ALTER TABLE `grafik` DISABLE KEYS */;
INSERT INTO `grafik` (`id_grafik`, `id_anamnesis`, `nadi`, `suhu`, `create_at`, `update_at`) VALUES
	(1, '3', '88', '36', '2022-11-13 17:09:07', NULL),
	(2, '3', '90', '37', '2022-11-13 17:09:19', NULL),
	(3, '3', '89', '39', '2022-11-13 17:09:23', NULL),
	(4, '3', '100', '40', '2022-11-13 17:09:48', NULL),
	(9, '8', '68', '37', '2022-11-17 19:27:07', NULL);
/*!40000 ALTER TABLE `grafik` ENABLE KEYS */;

-- Dumping structure for table sipradita.intervensi_pernafasan
CREATE TABLE IF NOT EXISTS `intervensi_pernafasan` (
  `id_ip` int(11) NOT NULL AUTO_INCREMENT,
  `id_anamnesis` varchar(50) DEFAULT NULL,
  `id_pernafasan` varchar(50) DEFAULT NULL,
  `satu` varchar(250) DEFAULT NULL,
  `dua` varchar(250) DEFAULT NULL,
  `tiga` varchar(250) DEFAULT NULL,
  `empat` varchar(250) DEFAULT NULL,
  `lima` varchar(250) DEFAULT NULL,
  `enam` varchar(250) DEFAULT NULL,
  `tujuh` varchar(250) DEFAULT NULL,
  `delapan` varchar(250) DEFAULT NULL,
  `sembilan` varchar(250) DEFAULT NULL,
  `sepuluh` varchar(250) DEFAULT NULL,
  `sebelas` varchar(250) DEFAULT NULL,
  `duabelas` varchar(250) DEFAULT NULL,
  `tigabelas` varchar(250) DEFAULT NULL,
  `empatbelas` varchar(250) DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_ip`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table sipradita.intervensi_pernafasan: ~2 rows (approximately)
/*!40000 ALTER TABLE `intervensi_pernafasan` DISABLE KEYS */;
INSERT INTO `intervensi_pernafasan` (`id_ip`, `id_anamnesis`, `id_pernafasan`, `satu`, `dua`, `tiga`, `empat`, `lima`, `enam`, `tujuh`, `delapan`, `sembilan`, `sepuluh`, `sebelas`, `duabelas`, `tigabelas`, `empatbelas`, `create_at`, `update_at`) VALUES
	(4, '3', '4', 'Yes', NULL, 'Yes', 'Yes', NULL, NULL, NULL, NULL, NULL, 'Yes', 'Yes', NULL, NULL, 'Yes', '2022-11-17 13:53:12', NULL),
	(5, '8', '8', 'Yes', 'Yes', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-17 18:07:18', NULL);
/*!40000 ALTER TABLE `intervensi_pernafasan` ENABLE KEYS */;

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

-- Dumping structure for table sipradita.pengkajian_nyeri
CREATE TABLE IF NOT EXISTS `pengkajian_nyeri` (
  `id_nyeri` int(11) NOT NULL AUTO_INCREMENT,
  `id_anamnesis` int(11) DEFAULT NULL,
  `nyeri` varchar(250) DEFAULT NULL,
  `deskripsi` varchar(250) DEFAULT NULL,
  `lainnya` varchar(250) DEFAULT NULL,
  `quality` varchar(250) DEFAULT NULL,
  `region` varchar(250) DEFAULT NULL,
  `menyebar` varchar(250) DEFAULT NULL,
  `skala` varchar(250) DEFAULT NULL,
  `hasil` varchar(250) DEFAULT NULL,
  `waktu` varchar(250) DEFAULT NULL,
  `diagnosa_nyeri` varchar(250) DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_nyeri`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table sipradita.pengkajian_nyeri: ~4 rows (approximately)
/*!40000 ALTER TABLE `pengkajian_nyeri` DISABLE KEYS */;
INSERT INTO `pengkajian_nyeri` (`id_nyeri`, `id_anamnesis`, `nyeri`, `deskripsi`, `lainnya`, `quality`, `region`, `menyebar`, `skala`, `hasil`, `waktu`, `diagnosa_nyeri`, `create_at`, `update_at`) VALUES
	(1, 3, 'Ada', 'Benturan', '-', 'Seperti tertusuk-tusuk benda tajam/tumpul', 'perut', 'Tidak', 'Sedikit Sakit', '4', '< 6 Bulan', 'Nyeri Akut ', '2022-11-08 13:16:16', NULL),
	(3, 8, 'Ada', 'Proses Penyakit', '-', 'Seperti tertusuk-tusuk benda tajam/tumpul', 'perut', 'Ya', '8', '-', '< 6 Bulan', 'Nyeri Akut ', '2022-11-14 14:16:28', NULL),
	(4, 3, 'Ya', 'Benturan', '-', 'Seperti tertusuk-tusuk benda tajam/tumpul', 'tangan', 'Tidak', 'Sedikit Sakit', '4', '< 6 Bulan', 'Nyeri Akut ', '2022-11-16 13:50:12', NULL),
	(5, 3, 'Tidak', 'Benturan', '-', 'Seperti tertusuk-tusuk benda tajam/tumpul', 'perut', 'Tidak', 'Sedikit Sakit', '4', '< 6 Bulan', 'Nyeri Akut ', '2022-11-16 13:50:42', NULL);
/*!40000 ALTER TABLE `pengkajian_nyeri` ENABLE KEYS */;

-- Dumping structure for table sipradita.sistem_moskuloskelental
CREATE TABLE IF NOT EXISTS `sistem_moskuloskelental` (
  `id_moskuloskelental` int(11) NOT NULL AUTO_INCREMENT,
  `id_anamnesis` int(11) DEFAULT NULL,
  `pergerakan_sendi` varchar(250) DEFAULT NULL,
  `mudah_lelah` varchar(250) DEFAULT NULL,
  `kekuatan_otot` varchar(250) DEFAULT NULL,
  `hasil` varchar(250) DEFAULT NULL,
  `fraktur` varchar(250) DEFAULT NULL,
  `fraktur_lokasi` varchar(250) DEFAULT NULL,
  `postur_tubuh` varchar(250) DEFAULT NULL,
  `skore_resiko_jatuh` varchar(250) DEFAULT NULL,
  `aktivitas_seharihari` varchar(250) DEFAULT NULL,
  `berjalan` varchar(250) DEFAULT NULL,
  `alat_ambulasi` varchar(250) DEFAULT NULL,
  `kebiasaan_tidur` varchar(250) DEFAULT NULL,
  `jam_tidur_sebelumsakit` int(8) DEFAULT NULL,
  `jam_tidur_sesudahsakit` int(8) DEFAULT NULL,
  `diagnosa_moskuloskelental` varchar(250) DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_moskuloskelental`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Dumping data for table sipradita.sistem_moskuloskelental: ~3 rows (approximately)
/*!40000 ALTER TABLE `sistem_moskuloskelental` DISABLE KEYS */;
INSERT INTO `sistem_moskuloskelental` (`id_moskuloskelental`, `id_anamnesis`, `pergerakan_sendi`, `mudah_lelah`, `kekuatan_otot`, `hasil`, `fraktur`, `fraktur_lokasi`, `postur_tubuh`, `skore_resiko_jatuh`, `aktivitas_seharihari`, `berjalan`, `alat_ambulasi`, `kebiasaan_tidur`, `jam_tidur_sebelumsakit`, `jam_tidur_sesudahsakit`, `diagnosa_moskuloskelental`, `create_at`, `update_at`) VALUES
	(4, 3, 'Terbatas', 'Ya', '1', 'asdf', 'Ada', 'asdf', 'Normal', 'asdf', 'Ketergantungan Total', 'Kelumpuhan', 'Walker', 'Tidak', 160800, 181000, 'Gangguan Mobilitas Fisik', '2022-11-01 12:04:10', NULL),
	(7, 7, 'Terbatas', 'Ya', '3', 'sadfas', 'Ada', 'asdfasf', 'Normal', 'afsdf', 'Ketergantungan Total', 'Kelumpuhan', 'Walker', 'Tidak', 2, 3, 'Gangguan Mobilitas Fisik', '2022-11-14 13:27:00', NULL),
	(8, 8, 'Bebas', 'Tidak', '5', 'tidak ada kelainan', 'Tidak', '0', 'Normal', '30', 'Mandiri', 'Tidak ada kesulitan', 'Normal', 'Tidak', 90000, 80000, 'Tidak Terdiagnosa Moskuloskelental', '2022-11-14 14:13:27', NULL);
/*!40000 ALTER TABLE `sistem_moskuloskelental` ENABLE KEYS */;

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Dumping data for table sipradita.sistem_pernafasan: ~4 rows (approximately)
/*!40000 ALTER TABLE `sistem_pernafasan` DISABLE KEYS */;
INSERT INTO `sistem_pernafasan` (`id_sistempernafasan`, `id_anamnesis`, `pola_nafas`, `irama_nafas`, `retraksi`, `jenis_retraksi`, `jenis_pernafasan`, `alat_bantu`, `alat_bantu_lainnya`, `tekanan`, `terpasang_wsd`, `produksi`, `kesulitan_bernafas`, `kesulitan_bernafas_ya`, `lain_lain`, `saat`, `batukdansekresi`, `batukdansekresi_ya`, `warna_sputum`, `suara_nafas`, `perkusi`, `agd`, `diagnosa_penafasan`, `create_at`, `update_at`) VALUES
	(4, 3, 'Tachipneu', 'Tidak Teratur', 'Ya', 'a', 'Dada', 'NK', 'a', 'a', 'Ya', 'a', 'Ya', 'Dispneu', 'a', 'a', 'Ya', 'Produktif', 'Putih', 'Whizing', 'Sonor', 'PH 7,35-7,45', 'Pola Nafas Tidak Efektif', '2022-10-31 17:14:34', NULL),
	(6, 7, 'Bradikardi', 'Teratur', 'Ya', 'dada', 'Dada', 'NK', 'asdf', 'asdf', 'Ya', 'asdf', 'Ya', 'Dispneu', 'asdfa', 'asdf', 'Ya', 'Produktif', 'Putih', 'Vasikuler', 'Redup', 'HCO3>26', 'Tidak Terdiagnosa', '2022-11-14 13:25:26', NULL),
	(7, 7, 'Tachipneu', 'Teratur', 'Ya', 'dada', 'Dada', 'NK', 'asdf', 'asdf', 'Ya', 'asdf', 'Ya', 'Dispneu', 'asdfa', 'asdf', 'Ya', 'Produktif', 'Putih', 'Vasikuler', 'Redup', 'PH<7,35', 'asdfasd', '2022-11-14 14:06:35', NULL),
	(8, 8, 'Tachipneu', 'Tidak Teratur', 'Ya', 'asd', 'Dada', 'NK', 'asdf', 'asdf', 'Ya', 'asdf', 'Ya', 'Dispneu', 'asdf', 'asdf', 'Ya', 'Produktif', 'Putih', 'Whizing', 'Redup', 'PH 7,35-7,45', 'Bersihan Jalan Nafas Tidak Efektif', '2022-11-17 16:58:37', NULL);
/*!40000 ALTER TABLE `sistem_pernafasan` ENABLE KEYS */;

-- Dumping structure for table sipradita.sistem_proteksi
CREATE TABLE IF NOT EXISTS `sistem_proteksi` (
  `id_proteksi` int(11) NOT NULL AUTO_INCREMENT,
  `id_anamnesis` int(11) DEFAULT NULL,
  `suhu` varchar(250) DEFAULT NULL,
  `terdapat_luka` varchar(250) DEFAULT NULL,
  `lokasi_luka` varchar(250) DEFAULT NULL,
  `kondisi_luka` varchar(250) DEFAULT NULL,
  `kebersihan_luka` varchar(250) DEFAULT NULL,
  `riwayat_alergi` varchar(250) DEFAULT NULL,
  `nama_alergi` varchar(250) DEFAULT NULL,
  `nilai_leokosit` varchar(250) DEFAULT NULL,
  `gds` varchar(250) DEFAULT NULL,
  `diagnosa_proteksi` varchar(250) DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_proteksi`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table sipradita.sistem_proteksi: ~2 rows (approximately)
/*!40000 ALTER TABLE `sistem_proteksi` DISABLE KEYS */;
INSERT INTO `sistem_proteksi` (`id_proteksi`, `id_anamnesis`, `suhu`, `terdapat_luka`, `lokasi_luka`, `kondisi_luka`, `kebersihan_luka`, `riwayat_alergi`, `nama_alergi`, `nilai_leokosit`, `gds`, `diagnosa_proteksi`, `create_at`, `update_at`) VALUES
	(1, 3, '<36,5', 'Ya', 'baik baik saja', 'baik baik saja', 'Tidak', 'Ada', 'baik baik saja', '10000', 'baik baik saja', 'Tidak Terdiagnosa Masalah Proteksi dan Perlindungan', '2022-11-03 14:56:35', NULL),
	(5, 8, '>37,5', 'Tidak', '-', '-', 'Bersih', 'Ada', '-', '120000', '107', 'Hipertermia', '2022-11-14 14:14:51', NULL),
	(6, 3, '<36,5', 'Ya', 'asdf', 'asdf', 'Tidak', 'Ada', 'asdf', '10000', 'asdf', NULL, '2022-11-16 13:18:07', NULL);
/*!40000 ALTER TABLE `sistem_proteksi` ENABLE KEYS */;

-- Dumping structure for table sipradita.soap_pernafasan
CREATE TABLE IF NOT EXISTS `soap_pernafasan` (
  `id_soapnafas` int(11) NOT NULL AUTO_INCREMENT,
  `id_anamnesis` int(11) DEFAULT NULL,
  `s` varchar(500) DEFAULT NULL,
  `o` varchar(500) DEFAULT NULL,
  `a` varchar(500) DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_soapnafas`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table sipradita.soap_pernafasan: ~2 rows (approximately)
/*!40000 ALTER TABLE `soap_pernafasan` DISABLE KEYS */;
INSERT INTO `soap_pernafasan` (`id_soapnafas`, `id_anamnesis`, `s`, `o`, `a`, `create_at`, `update_at`) VALUES
	(1, 8, 'Tidak lapar dan tidak haus selama 3 hari 3 malam karena patah hati', 'pasien tampak pucat dan kelaparan hanya sok sok an saja tidak lapar, padahal lapar banget, wkwkwkwkwwk, mau ketawa takut mutasi, hahaha', 'asdfasdfasdfad', '2022-11-17 21:18:33', NULL),
	(2, 8, 'kelaparan', 'pucet kayak habis ditampol sendal', 'asdf', '2022-11-17 21:54:40', NULL);
/*!40000 ALTER TABLE `soap_pernafasan` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
