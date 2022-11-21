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

-- Dumping structure for table sipradita.soap
CREATE TABLE IF NOT EXISTS `soap` (
  `id_soap` int(11) NOT NULL AUTO_INCREMENT,
  `id_anamnesis` int(11) DEFAULT NULL,
  `s` varchar(500) DEFAULT NULL,
  `o` varchar(500) DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_soap`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table sipradita.soap: ~5 rows (approximately)
/*!40000 ALTER TABLE `soap` DISABLE KEYS */;
INSERT INTO `soap` (`id_soap`, `id_anamnesis`, `s`, `o`, `create_at`, `update_at`) VALUES
	(1, 8, 'aa', 'nn', '2022-11-20 06:44:18', NULL),
	(2, 10, 'Pasien mengalami demam tinggi', 'Demam karena musim hujan dan sekeluarga juga demam\r\n', '2022-11-20 06:51:49', NULL),
	(3, 10, 'asdf', 'asdf', '2022-11-20 06:52:09', NULL),
	(4, 10, 'asdf', 'adsf', '2022-11-20 08:46:40', NULL),
	(5, 9, 'asdf', 'asdf', '2022-11-20 13:41:36', NULL);
/*!40000 ALTER TABLE `soap` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
