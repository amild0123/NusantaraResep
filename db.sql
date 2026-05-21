-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versi server:                 8.4.3 - MySQL Community Server - GPL
-- OS Server:                    Win64
-- HeidiSQL Versi:               12.8.0.6908
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Membuang struktur basisdata untuk nusantara_resep
CREATE DATABASE IF NOT EXISTS `nusantara_resep` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `nusantara_resep`;

-- membuang struktur untuk table nusantara_resep.resep
CREATE TABLE IF NOT EXISTS `resep` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `sampul` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `kategori` varchar(100) DEFAULT NULL,
  `langkah1` text,
  `langkah2` text,
  `langkah3` text,
  `langkah4` text,
  `gambar1` varchar(255) DEFAULT NULL,
  `gambar2` varchar(255) DEFAULT NULL,
  `gambar3` varchar(255) DEFAULT NULL,
  `gambar4` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Membuang data untuk tabel nusantara_resep.resep: ~3 rows (lebih kurang)
DELETE FROM `resep`;
INSERT INTO `resep` (`id`, `user_id`, `judul`, `sampul`, `deskripsi`, `kategori`, `langkah1`, `langkah2`, `langkah3`, `langkah4`, `gambar1`, `gambar2`, `gambar3`, `gambar4`) VALUES
	(14, NULL, '', 'Cuplikan layar 2026-02-17 085204.png', NULL, 'design', 'web', 'apk', '', '', '', '', '', 'makanan'),
	(15, NULL, 'mie ayam', 'Cuplikan layar 2026-01-24 113557.png', NULL, 'oww oww', 'oke', 'yaya', 'apaaja', '', '', '', '', 'minuman'),
	(16, NULL, 'buka dulu', 'Cuplikan layar 2026-01-24 171403.png', NULL, 'minuman', 'wiejriaew', 'kjFHJKWR', 'JKSFES', 'JSIFK', '', '', '', '');

-- membuang struktur untuk table nusantara_resep.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Membuang data untuk tabel nusantara_resep.users: ~2 rows (lebih kurang)
DELETE FROM `users`;
INSERT INTO `users` (`id`, `nama`, `email`, `password`, `created_at`) VALUES
	(1, 'Mild Apriliana', 'mildapriliana@gmail.com', '$2y$10$hOgTw5S/faVAVUXf8Qt.VOnh3sMEMn1hlXU4rQizrC8PUmuzDlCl2', '2026-05-19 09:22:29'),
	(2, 'Mild ', 'amild384@gmail.com', '$2y$10$U1h6.eC597znl33wIEDXse9Rl.iGhA0kKTjA9UUQsGIq3af/O3aHy', '2026-05-19 09:24:01');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
