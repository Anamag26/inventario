-- --------------------------------------------------------
-- Anfitrião:                    localhost
-- Versão do servidor:           5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Versão:              10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping data for table inventario.bibliotecas: ~14 rows (approximately)
/*!40000 ALTER TABLE `bibliotecas` DISABLE KEYS */;
INSERT INTO `bibliotecas` (`id`, `nomemaquina`, `descricao`, `id_escola`, `created_at`, `updated_at`) VALUES
	(1, 'PC1- CMB 40214', 'Insys-4GB', 1, '2021-06-16 09:37:40', '2021-06-16 09:33:35'),
	(3, 'B- CMB Bibliobase', '61 RAM 2G', 2, '2021-06-16 09:11:52', '2021-06-16 10:02:54'),
	(4, 'PC2-40220', 'Insys-4GB', 1, '2021-06-16 09:34:13', '2021-06-16 09:34:13'),
	(5, 'PC3-CMB40208', 'Insys-4GB', 1, '2021-06-16 09:34:50', '2021-06-16 09:34:50'),
	(6, 'PC4-CMB 40211', 'Insys-4GB', 1, '2021-06-16 09:35:12', '2021-06-16 09:35:12'),
	(7, 'PC Bibliotecaria CMB 40221', 'Insys-4GB', 1, '2021-06-16 09:36:24', '2021-06-16 09:36:24'),
	(8, 'PC5-CMB 40210', 'Insys-4GB', 1, '2021-06-16 09:36:50', '2021-06-16 09:36:50'),
	(9, 'B - CMB02285', '61 RAM 2G', 2, '2021-06-17 08:15:16', '2021-06-17 08:15:16'),
	(10, 'B - CMB36040', '61 RAM 2G', 2, '2021-06-17 08:15:43', '2021-06-17 08:15:43'),
	(11, 'B- CMB36037', '61 RAM 2G', 2, '2021-06-17 08:16:27', '2021-06-17 08:16:27'),
	(12, 'B -N/A', 'N/A', 2, '2021-06-17 08:16:49', '2021-06-17 08:16:49'),
	(13, 'PRO - CMB 40140', 'N/A', 8, '2021-06-17 08:20:50', '2021-06-17 08:20:50'),
	(14, 'PRO - CMB 40134', 'N/A', 8, '2021-06-17 08:21:17', '2021-06-17 08:21:17'),
	(15, 'COR - CMB 40134', 'N/A', 8, '2021-06-17 08:21:38', '2021-06-17 08:21:38');
/*!40000 ALTER TABLE `bibliotecas` ENABLE KEYS */;

-- Dumping data for table inventario.escolas: ~14 rows (approximately)
/*!40000 ALTER TABLE `escolas` DISABLE KEYS */;
INSERT INTO `escolas` (`id`, `nome`, `localizacao`, `created_at`, `updated_at`) VALUES
	(1, 'EB1', 'Benavente', '2021-06-04 14:44:13', '2021-06-04 14:44:15'),
	(2, 'Centro Escolar', 'Benavente', '2021-06-04 14:49:23', '2021-06-04 14:49:24'),
	(3, 'Areias', 'Benavente', '2021-06-04 16:14:14', '2021-06-04 16:14:15'),
	(4, 'Foros da Charneca', 'Benavente', '2021-06-04 16:14:23', '2021-06-04 16:14:23'),
	(5, 'Barrosa', 'Benavente', '2021-06-04 16:14:33', '2021-06-04 16:14:33'),
	(6, 'Santo Estevão', 'Benavente', '2021-06-04 16:14:41', '2021-06-04 16:14:41'),
	(7, 'Sénior de Benavente', 'Benavente', '2021-06-04 16:14:48', '2021-06-04 16:14:49'),
	(8, 'EB1 Escudeiros', 'Samora Correia', '2021-06-04 16:14:57', '2021-06-04 16:14:57'),
	(9, 'Centro Escolar', 'Samora Correia', '2021-06-04 16:15:04', '2021-06-04 16:15:04'),
	(10, 'Acácias', 'Samora Correia', '2021-06-04 16:15:11', '2021-06-04 16:15:12'),
	(11, 'EB das Acácia', 'Samora Correia', '2021-06-04 16:15:19', '2021-06-04 16:15:19'),
	(12, 'Escola Velha do Porto Alto', 'Samora Correia', '2021-06-04 16:15:30', '2021-06-04 16:15:31'),
	(13, 'C.E. Porto Alto', 'Samora Correia', '2021-06-04 16:15:55', '2021-06-04 16:15:55'),
	(14, 'Sénior do Porto Alto', 'Samora Correia', '2021-06-04 16:16:02', '2021-06-04 16:16:03');
/*!40000 ALTER TABLE `escolas` ENABLE KEYS */;

-- Dumping data for table inventario.failed_jobs: ~0 rows (approximately)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping data for table inventario.migrations: ~7 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2021_06_02_145712_create_escolas_table', 1),
	(5, '2021_06_02_145922_create_salas_table', 1),
	(6, '2021_06_16_081607_create_bibliotecas_table', 2),
	(7, '2021_06_16_081642_create_outros_table', 2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping data for table inventario.outros: ~5 rows (approximately)
/*!40000 ALTER TABLE `outros` DISABLE KEYS */;
INSERT INTO `outros` (`id`, `nomeoutros`, `descricao`, `id_escola`, `created_at`, `updated_at`) VALUES
	(1, 'P - CMB 40218', 'Insys-4GB', 1, '2021-06-16 09:38:11', '2021-06-16 10:05:16'),
	(2, 'C - CMB 40213', 'Insys-4GB', 1, '2021-06-16 09:38:09', '2021-06-16 09:38:09'),
	(3, 'PSI - CMB 40212', 'Insys-4GB', 1, '2021-06-16 09:38:39', '2021-06-16 09:38:39'),
	(4, 'C - N/A', 'N/A', 2, '2021-06-17 08:17:34', '2021-06-17 08:17:34'),
	(5, 'E - DIRECCAO', '51  RAM 2G', 2, '2021-06-17 08:18:08', '2021-06-17 08:18:08'),
	(6, 'P- CMB36033', '1607 RAM 2G', 2, '2021-06-17 08:18:31', '2021-06-17 08:18:31');
/*!40000 ALTER TABLE `outros` ENABLE KEYS */;

-- Dumping data for table inventario.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping data for table inventario.salas: ~15 rows (approximately)
/*!40000 ALTER TABLE `salas` DISABLE KEYS */;
INSERT INTO `salas` (`id`, `nome`, `impressora`, `maquina`, `projetor`, `id_escola`, `created_at`, `updated_at`) VALUES
	(1, 'Sala 4', 'HP LASER JET M4345MFPPCL6', 'CMB 40219 - INSYS', 'EB-475WI', 1, '2021-06-14 08:56:32', '2021-06-14 09:44:38'),
	(2, 'Sala 5', 'Canon iR 1730\\1740\\1750', 'CMB 40216 - INSYS', 'EB-475WI', 1, '2021-06-14 09:57:36', '2021-06-14 09:44:00'),
	(3, 'Sala 6', 'Canon iR 1730\\1740\\1750', 'CMB 40217- INSYS', 'EB-475WI', 1, '2021-06-14 09:58:37', '2021-06-14 09:46:00'),
	(4, 'Sala 7', 'Canon iR 1730\\1740\\1750', 'CMB 40215 - INSYS', 'EB-475WI', 1, '2021-06-14 09:59:44', '2021-06-14 09:47:19'),
	(5, 'Sala 8', 'Canon iR 1730\\1740\\1750', 'CMB 36054 - INSYS', 'EB-410W', 1, '2021-06-14 10:14:54', '2021-06-14 10:08:14'),
	(6, 'Sala 9', 'Canon iR 1730\\1740\\1750', 'CMB 31665 - HP500B', 'EB-475WI', 1, '2021-06-14 10:15:24', '2021-06-14 10:10:04'),
	(7, 'Sala 10', 'Canon iR 1730\\1740\\1750', 'CMB 31663- O760', 'EB-410W', 1, '2021-06-14 10:15:28', '2021-06-14 10:12:34'),
	(8, 'Sala 11', 'Canon iR 1730\\1740\\1750', 'CMB 31817- O760', 'EB-410W', 1, '2021-06-14 10:16:00', '2021-06-14 13:22:01'),
	(9, 'Sala 1', 'RICOHAFICIO 1035 BCL 6', 'CMB 031720 - 1607 RAM 2GB', 'EB-410W', 2, '2021-06-16 09:42:27', '2021-06-16 09:42:27'),
	(10, 'Sala 2', 'N/A', 'CMB 031669 - 1607 RAM 2GB', 'EB-410W', 2, '2021-06-16 09:43:38', '2021-06-16 09:43:38'),
	(11, 'Sala 3', 'RICOHAFICIO 1035 BCL 6', 'DESKTOP-FLT349C -1607 RAM 2GB', 'EB-410W', 2, '2021-06-16 09:45:12', '2021-06-16 09:45:12'),
	(12, 'Sala 4', 'N/A', 'N/A', 'N/A', 2, '2021-06-16 09:46:40', '2021-06-16 09:46:40'),
	(13, 'Sala 5', 'RICOHAFICIO 1035 BCL 6', 'CMB-031677- 1607 RAM 2GB', 'EB-410W', 2, '2021-06-16 09:47:41', '2021-06-16 09:47:41'),
	(14, 'Sala 6', 'RICOHAFICIO 1035 BCL 6', 'CMB-36035-1607 RAM 2GB', 'EB-410W', 2, '2021-06-16 09:48:55', '2021-06-16 09:48:55'),
	(15, 'Sala 7', 'RICOHAFICIO 1035 BCL 6', 'CMB-031664 - 1607 RAM 2GB', 'N/A', 2, '2021-06-16 09:50:58', '2021-06-16 09:50:58'),
	(26, 'Sala 8', 'N/A', 'CMB-031734 - 1607 RAM 2GB', 'N/A', 2, '2021-06-16 09:55:20', '2021-06-16 09:55:20');
/*!40000 ALTER TABLE `salas` ENABLE KEYS */;

-- Dumping data for table inventario.users: ~0 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Ana Margarida', 'ana26mag.g@gmail.com', NULL, '$2y$10$0IoWqqZDBdTOfGXQt9rCk.AEYR1zy7VsbfAXvw32n27cI14G4LVYu', NULL, '2021-06-04 13:44:52', '2021-06-04 13:44:52');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
