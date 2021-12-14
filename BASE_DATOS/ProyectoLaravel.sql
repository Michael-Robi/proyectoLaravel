-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         5.7.24 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para proyectolaravel
CREATE DATABASE IF NOT EXISTS `proyectolaravel` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `proyectolaravel`;

-- Volcando estructura para tabla proyectolaravel.estudiantes
CREATE TABLE IF NOT EXISTS `estudiantes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genero` enum('masculino','femenino') COLLATE utf8mb4_unicode_ci NOT NULL,
  `grado` enum('6','7','8','9','10','11') COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla proyectolaravel.estudiantes: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `estudiantes` DISABLE KEYS */;
INSERT IGNORE INTO `estudiantes` (`id`, `nombre`, `apellido`, `genero`, `grado`, `user_id`, `created_at`, `updated_at`) VALUES
	(1, 'Margarita', 'Zayas', 'masculino', '8', '1', '2021-04-13 19:04:26', '2021-04-13 19:04:26'),
	(2, 'Alicia', 'Del Río', 'masculino', '7', '2', '2021-04-13 19:04:26', '2021-04-13 19:04:26'),
	(3, 'Fátima', 'Font', 'masculino', '11', '3', '2021-04-13 19:04:26', '2021-04-13 19:04:26'),
	(4, 'Emilia', 'Cabello', 'femenino', '8', '4', '2021-04-13 19:04:26', '2021-04-13 19:04:26'),
	(5, 'Raúl', 'Arevalo', 'masculino', '8', '5', '2021-04-13 19:04:26', '2021-04-13 19:04:26');
/*!40000 ALTER TABLE `estudiantes` ENABLE KEYS */;

-- Volcando estructura para tabla proyectolaravel.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla proyectolaravel.failed_jobs: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Volcando estructura para tabla proyectolaravel.materias
CREATE TABLE IF NOT EXISTS `materias` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profesor_id` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla proyectolaravel.materias: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `materias` DISABLE KEYS */;
INSERT IGNORE INTO `materias` (`id`, `descripcion`, `profesor_id`, `created_at`, `updated_at`) VALUES
	(1, 'matematicas', '6', '2021-04-13 19:04:26', '2021-04-13 19:04:26'),
	(2, 'ingles', '7', '2021-04-13 19:04:26', '2021-04-13 19:04:26'),
	(3, 'español', '8', '2021-04-13 19:04:26', '2021-04-13 19:04:26'),
	(4, 'fisica', '9', '2021-04-13 19:04:26', '2021-04-13 19:04:26'),
	(5, 'artistica', '10', '2021-04-13 19:04:27', '2021-04-13 19:04:27');
/*!40000 ALTER TABLE `materias` ENABLE KEYS */;

-- Volcando estructura para tabla proyectolaravel.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla proyectolaravel.migrations: ~8 rows (aproximadamente)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT IGNORE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(17, '2014_10_12_000000_create_users_table', 1),
	(18, '2014_10_12_100000_create_password_resets_table', 1),
	(19, '2019_08_19_000000_create_failed_jobs_table', 1),
	(20, '2021_04_12_083233_crear_tabla_estudiantes', 1),
	(21, '2021_04_12_083425_crear_tabla_profesores', 1),
	(22, '2021_04_12_083604_crear_tabla_salones', 1),
	(23, '2021_04_12_083629_crear_tabla_materias', 1),
	(24, '2021_04_12_083650_crear_tabla_notas', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Volcando estructura para tabla proyectolaravel.notas
CREATE TABLE IF NOT EXISTS `notas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `periodo1` decimal(9,2) NOT NULL,
  `periodo2` decimal(9,2) NOT NULL,
  `periodo3` decimal(9,2) NOT NULL,
  `definitiva` decimal(9,2) NOT NULL,
  `estado` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estudiante_id` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `materia_id` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla proyectolaravel.notas: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `notas` DISABLE KEYS */;
INSERT IGNORE INTO `notas` (`id`, `periodo1`, `periodo2`, `periodo3`, `definitiva`, `estado`, `estudiante_id`, `materia_id`, `created_at`, `updated_at`) VALUES
	(1, 5.00, 2.00, 2.00, 3.00, 'Sobresaliente', '1', '1', '2021-04-13 19:03:27', '2021-04-13 19:03:27'),
	(2, 2.00, 2.00, 4.00, 2.70, 'Reprobado', '2', '2', '2021-04-13 19:03:27', '2021-04-13 19:03:27'),
	(3, 4.00, 2.00, 4.00, 3.30, 'Sobresaliente', '3', '3', '2021-04-13 19:03:27', '2021-04-13 19:03:27'),
	(4, 5.00, 3.00, 4.00, 4.00, 'Aprobado', '4', '4', '2021-04-13 19:03:27', '2021-04-13 19:03:27'),
	(5, 5.00, 1.00, 1.00, 2.30, 'Reprobado', '5', '5', '2021-04-13 19:03:27', '2021-04-13 19:03:27');
/*!40000 ALTER TABLE `notas` ENABLE KEYS */;

-- Volcando estructura para tabla proyectolaravel.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla proyectolaravel.password_resets: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Volcando estructura para tabla proyectolaravel.profesores
CREATE TABLE IF NOT EXISTS `profesores` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genero` enum('masculino','femenino') COLLATE utf8mb4_unicode_ci NOT NULL,
  `profesion` enum('Licenciado','Ingeniero','Tecnologo') COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla proyectolaravel.profesores: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `profesores` DISABLE KEYS */;
INSERT IGNORE INTO `profesores` (`id`, `nombre`, `apellido`, `genero`, `profesion`, `user_id`, `created_at`, `updated_at`) VALUES
	(1, 'Hugo', 'Benavides', 'femenino', 'Licenciado', '6', '2021-04-13 19:04:26', '2021-04-13 19:04:26'),
	(2, 'Gabriel', 'Avilés', 'femenino', 'Tecnologo', '7', '2021-04-13 19:04:26', '2021-04-13 19:04:26'),
	(3, 'Aleix', 'Villa', 'masculino', 'Tecnologo', '8', '2021-04-13 19:04:26', '2021-04-13 19:04:26'),
	(4, 'Verónica', 'Camarillo', 'femenino', 'Ingeniero', '9', '2021-04-13 19:04:26', '2021-04-13 19:04:26'),
	(5, 'Silvia', 'Macias', 'femenino', 'Tecnologo', '10', '2021-04-13 19:04:26', '2021-04-13 19:04:26');
/*!40000 ALTER TABLE `profesores` ENABLE KEYS */;

-- Volcando estructura para procedimiento proyectolaravel.RegistrarNota
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `RegistrarNota`(
  IN `primerperiodo` DECIMAL(9,2), IN `segundoperiodo` DECIMAL(9,2),
  IN `tercerperiodo` DECIMAL(9,2),
  IN `Estudiante_codigo` VARCHAR(10), IN `Materia_idasignatura` VARCHAR(10))
BEGIN

  DECLARE definitiva decimal(9,2);
  DECLARE estado varchar(66);

  SET definitiva = ROUND((primerperiodo + segundoperiodo + tercerperiodo)/3, 1);

  IF (definitiva>=4.8 AND definitiva<=5) THEN
  SET estado='Excelente';
  END IF;
  IF (definitiva>=3.6 AND definitiva<=4.7) THEN
  SET estado='Aprobado';
  END IF;
  IF (definitiva>=3.0 AND definitiva<=3.5) THEN
  SET estado='Sobresaliente';
  END IF;
  IF (definitiva>=0 AND definitiva<3) THEN
  SET estado='Reprobado';
  END IF;

  INSERT INTO notas VALUES (NULL, primerperiodo, segundoperiodo, tercerperiodo, definitiva, estado, Estudiante_codigo, Materia_idasignatura, NOW(), NOW());
END//
DELIMITER ;

-- Volcando estructura para tabla proyectolaravel.salones
CREATE TABLE IF NOT EXISTS `salones` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dia` enum('lunes','martes','miercoles','jueves','viernes') COLLATE utf8mb4_unicode_ci NOT NULL,
  `materia_id` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grado` enum('6','7','8','9','10','11') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla proyectolaravel.salones: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `salones` DISABLE KEYS */;
INSERT IGNORE INTO `salones` (`id`, `descripcion`, `dia`, `materia_id`, `grado`, `created_at`, `updated_at`) VALUES
	(1, 'salon 1', 'lunes', '1', '11', '2021-04-13 19:04:27', '2021-04-13 19:04:27'),
	(2, 'salon 2', 'martes', '2', '8', '2021-04-13 19:04:27', '2021-04-13 19:04:27'),
	(3, 'salon 3', 'miercoles', '3', '6', '2021-04-13 19:04:27', '2021-04-13 19:04:27'),
	(4, 'salon 4', 'jueves', '4', '11', '2021-04-13 19:04:27', '2021-04-13 19:04:27'),
	(5, 'salon 5', 'viernes', '5', '6', '2021-04-13 19:04:27', '2021-04-13 19:04:27');
/*!40000 ALTER TABLE `salones` ENABLE KEYS */;

-- Volcando estructura para tabla proyectolaravel.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('user','admin','student','teacher') COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla proyectolaravel.users: ~10 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT IGNORE INTO `users` (`id`, `name`, `email`, `password`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Fernando Hidalgo', 'bvillareal@example.com', '$2y$10$DlfKizUyelYyY2ZRWA3/H.eDD5HB2em5f1J12LCmbrYsqFk6MHvz2', 'user', 'OjdnIRnUNKxVgxo6Kxsm5sYjzjmQ2vo1cBIwE638kZ6PMgmbrGCuwjjwnucz', '2021-04-13 19:03:27', '2021-04-13 19:03:27'),
	(2, 'Erika Galván Hijo', 'epalomo@example.com', '$2y$10$DlfKizUyelYyY2ZRWA3/H.eDD5HB2em5f1J12LCmbrYsqFk6MHvz2', 'user', 'ao1bOfEoFZ', '2021-04-13 19:03:27', '2021-04-13 19:03:27'),
	(3, 'Ian Barrientos', 'cristian.cordoba@example.com', '$2y$10$DlfKizUyelYyY2ZRWA3/H.eDD5HB2em5f1J12LCmbrYsqFk6MHvz2', 'admin', 'HH16NiIeKA', '2021-04-13 19:03:27', '2021-04-13 19:03:27'),
	(4, 'Bruno Guzmán', 'caraballo.alberto@example.org', '$2y$10$DlfKizUyelYyY2ZRWA3/H.eDD5HB2em5f1J12LCmbrYsqFk6MHvz2', 'teacher', 'XBt2PG4Ms9', '2021-04-13 19:03:28', '2021-04-13 19:03:28'),
	(5, 'Leandro Rayan Palomino', 'santiago86@example.net', '$2y$10$DlfKizUyelYyY2ZRWA3/H.eDD5HB2em5f1J12LCmbrYsqFk6MHvz2', 'student', 'gEu1TJXwv9', '2021-04-13 19:03:28', '2021-04-13 19:03:28'),
	(6, 'Enrique Pedro Ramírez Barroso', 'carmona.sergio@example.com', '$2y$10$DlfKizUyelYyY2ZRWA3/H.eDD5HB2em5f1J12LCmbrYsqFk6MHvz2', 'teacher', 'v1lzDsKyDH', '2021-04-13 19:03:28', '2021-04-13 19:03:28'),
	(7, 'Sr. David Alonso Hijo', 'pmireles@example.com', '$2y$10$DlfKizUyelYyY2ZRWA3/H.eDD5HB2em5f1J12LCmbrYsqFk6MHvz2', 'admin', 'DcTcRndat7', '2021-04-13 19:03:28', '2021-04-13 19:03:28'),
	(8, 'Dr. Juan Barajas', 'lucas.marcos@example.net', '$2y$10$DlfKizUyelYyY2ZRWA3/H.eDD5HB2em5f1J12LCmbrYsqFk6MHvz2', 'user', 'TIX0N4vatz', '2021-04-13 19:03:28', '2021-04-13 19:03:28'),
	(9, 'Julia Sevilla Hijo', 'vsoler@example.com', '$2y$10$DlfKizUyelYyY2ZRWA3/H.eDD5HB2em5f1J12LCmbrYsqFk6MHvz2', 'teacher', 'RtJxT7acCa', '2021-04-13 19:03:28', '2021-04-13 19:03:28'),
	(10, 'Dra. Africa Jaramillo', 'jimena90@example.com', '$2y$10$DlfKizUyelYyY2ZRWA3/H.eDD5HB2em5f1J12LCmbrYsqFk6MHvz2', 'user', 'BR3gbAGvdr', '2021-04-13 19:03:28', '2021-04-13 19:03:28');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
