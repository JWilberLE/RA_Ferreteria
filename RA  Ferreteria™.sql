-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.24-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para ferreteria_ra
CREATE DATABASE IF NOT EXISTS `ferreteria_ra` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci */;
USE `ferreteria_ra`;

-- Volcando estructura para tabla ferreteria_ra.ferrproductos
CREATE TABLE IF NOT EXISTS `ferrproductos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `codproducto` int(11) DEFAULT 0,
  `marca` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `precio_compra` decimal(7,2) DEFAULT NULL,
  `precio_venta` decimal(7,2) DEFAULT NULL,
  `fecha_registro` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- Volcando datos para la tabla ferreteria_ra.ferrproductos: ~14 rows (aproximadamente)
INSERT INTO `ferrproductos` (`id`, `nombre`, `codproducto`, `marca`, `stock`, `precio_compra`, `precio_venta`, `fecha_registro`) VALUES
	(1, 'Lija #50', 934, 'Fandeli', 25, 35.99, 55.00, '2022-08-18'),
	(2, 'Lija #100', 8541, 'Fandeli', 30, 36.00, 50.00, '2022-08-18'),
	(3, 'Lija #150', 3248, 'Fandeli', 28, 45.00, 65.00, '2022-08-18'),
	(4, 'Sierra Circular', 6532, 'Truper', 5, 1795.00, 2000.00, '2022-08-18'),
	(5, 'Sierra Circular', 5432, 'DeWalt', 6, 3750.00, 4000.00, '2022-08-18'),
	(6, 'Martillo', 4895, 'Truper', 34, 175.00, 210.00, '2022-08-18'),
	(7, 'Mazo', 8734, 'Truper', 10, 255.46, 304.99, '2022-08-18'),
	(8, 'Cinta Metrica', 5159, 'Pretul', 12, 95.00, 125.00, '2022-08-18'),
	(9, 'Pala', 6723, 'Truper', 19, 150.00, 200.00, '2022-08-18'),
	(10, 'Formon', 3452, 'Truper', 12, 190.00, 270.00, '2022-08-18'),
	(11, 'Escuadra', 3131, 'Bosh', 14, 120.00, 190.00, '2022-08-18'),
	(12, 'Marro', 5186, 'Truper', 9, 200.00, 290.00, '2022-08-18'),
	(13, 'Sincel', 2354, 'Truper', 20, 95.00, 135.00, '2022-08-18'),
	(14, 'Niveleta', 6415, 'Pretul', 17, 155.00, 225.00, '2022-08-18'),
	(15, 'Barreton', 4565, 'Sensaya', 16, 280.00, 390.00, '2022-08-18');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
