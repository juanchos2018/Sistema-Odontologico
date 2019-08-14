-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         10.3.16-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para dentista2
CREATE DATABASE IF NOT EXISTS `dentista2` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `dentista2`;

-- Volcando estructura para tabla dentista2.categoria
CREATE TABLE IF NOT EXISTS `categoria` (
  `idca` int(100) NOT NULL AUTO_INCREMENT,
  `descrip` varchar(100) NOT NULL,
  PRIMARY KEY (`idca`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla dentista2.categoria: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
INSERT INTO `categoria` (`idca`, `descrip`) VALUES
	(6, 'Baja'),
	(7, 'Medio'),
	(8, 'Alto'),
	(9, 'Intermedio');
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;

-- Volcando estructura para tabla dentista2.citashechas
CREATE TABLE IF NOT EXISTS `citashechas` (
  `Dni` bigint(100) NOT NULL,
  `Diente` varchar(100) DEFAULT NULL,
  `Procedimiento` varchar(100) NOT NULL,
  `Costo` decimal(18,2) NOT NULL,
  `Fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla dentista2.citashechas: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `citashechas` DISABLE KEYS */;
/*!40000 ALTER TABLE `citashechas` ENABLE KEYS */;

-- Volcando estructura para tabla dentista2.citasmedicas
CREATE TABLE IF NOT EXISTS `citasmedicas` (
  `Codigo` bigint(100) NOT NULL AUTO_INCREMENT,
  `Medico` varchar(100) DEFAULT NULL,
  `Paciente` varchar(100) NOT NULL,
  `Hora` varchar(250) NOT NULL,
  `Fecha` varchar(250) NOT NULL,
  `Observacion` varchar(250) NOT NULL,
  `Estado` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`Codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla dentista2.citasmedicas: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `citasmedicas` DISABLE KEYS */;
/*!40000 ALTER TABLE `citasmedicas` ENABLE KEYS */;

-- Volcando estructura para tabla dentista2.citasmedicas2
CREATE TABLE IF NOT EXISTS `citasmedicas2` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `title` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Medico` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Paciente` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `color` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Textcolor` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Observacion` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `start` datetime NOT NULL,
  `Estado` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla dentista2.citasmedicas2: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `citasmedicas2` DISABLE KEYS */;
INSERT INTO `citasmedicas2` (`id`, `title`, `Medico`, `Paciente`, `color`, `Textcolor`, `Observacion`, `start`, `Estado`) VALUES
	(13, 'Cita', '6', '45713875', '#ff0000', '#FFFFFF', 'paciente con alergia al polvo', '2019-06-27 05:10:00', 'Finalizado'),
	(14, 'Cita', '7', '02147811', '#ff0000', '#FFFFFF', 'dolor de muelas', '2019-06-28 02:10:00', 'Finalizado'),
	(15, 'Cita', '8', '78965587', '#ff0000', '#FFFFFF', 'sdfsd', '2019-06-21 12:12:00', 'Pendiente');
/*!40000 ALTER TABLE `citasmedicas2` ENABLE KEYS */;

-- Volcando estructura para tabla dentista2.consulta
CREATE TABLE IF NOT EXISTS `consulta` (
  `Dni` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `Numero` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `Estado` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Partes` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `Fecha` varchar(45) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla dentista2.consulta: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `consulta` DISABLE KEYS */;
INSERT INTO `consulta` (`Dni`, `Numero`, `Estado`, `Partes`, `Fecha`) VALUES
	(' 45713875', '4', 'Cariado', 'Distal', '2019-06-27 07:28:47'),
	(' 2147811', '7', 'Cariado', 'Distal', '2019-06-27 13:36:51'),
	(' 2147811', '18', 'Incrustacion', 'Mesial', '2019-06-27 13:37:20'),
	(' 2147811', '25', 'Caries Penetrante', 'Platino', '2019-06-27 13:37:48'),
	(' 78965587', '1', 'Cariado', 'Mesial', '2019-06-27 16:01:15');
/*!40000 ALTER TABLE `consulta` ENABLE KEYS */;

-- Volcando estructura para tabla dentista2.enfermedades
CREATE TABLE IF NOT EXISTS `enfermedades` (
  `Codigo` varchar(100) NOT NULL,
  `Descripcion` varchar(100) NOT NULL,
  `Estado` varchar(100) NOT NULL,
  PRIMARY KEY (`Codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla dentista2.enfermedades: ~9 rows (aproximadamente)
/*!40000 ALTER TABLE `enfermedades` DISABLE KEYS */;
INSERT INTO `enfermedades` (`Codigo`, `Descripcion`, `Estado`) VALUES
	('E1', 'Anodoncia ', 'Activo'),
	('E2', 'Hiperodontia', 'Activo'),
	('E3', 'Transtorno en la formacion de dientes', 'Activo'),
	('E4', 'Sindrome de la denticion', 'Activo'),
	('E5', 'Dientes Embetidos', 'Activo'),
	('E6', 'Caries ', 'A'),
	('E7', 'Placa Dental', 'Activo'),
	('E8', 'Manchas Dentales', 'Activo'),
	('E9', 'Halitosis', 'Activo');
/*!40000 ALTER TABLE `enfermedades` ENABLE KEYS */;

-- Volcando estructura para tabla dentista2.enfermedadiente
CREATE TABLE IF NOT EXISTS `enfermedadiente` (
  `Dni` varchar(100) DEFAULT NULL,
  `Diente` varchar(100) DEFAULT NULL,
  `Enfemedad` varchar(100) NOT NULL,
  `Fecha` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla dentista2.enfermedadiente: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `enfermedadiente` DISABLE KEYS */;
INSERT INTO `enfermedadiente` (`Dni`, `Diente`, `Enfemedad`, `Fecha`) VALUES
	('45713875', '4', 'Caries ', '2019-06-27 07:29:08'),
	('2147811', '7', 'Anodoncia ', '2019-06-27 13:37:06'),
	('2147811', '18', 'Caries ', '2019-06-27 13:37:28'),
	('2147811', '25', 'Halitosis', '2019-06-27 13:38:00'),
	('78965587', '1', 'Anodoncia ', '2019-06-27 17:43:52');
/*!40000 ALTER TABLE `enfermedadiente` ENABLE KEYS */;

-- Volcando estructura para tabla dentista2.eventos
CREATE TABLE IF NOT EXISTS `eventos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `descripcion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `color` varchar(45) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'event-important',
  `textcolor` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla dentista2.eventos: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `eventos` DISABLE KEYS */;
/*!40000 ALTER TABLE `eventos` ENABLE KEYS */;

-- Volcando estructura para tabla dentista2.fechas
CREATE TABLE IF NOT EXISTS `fechas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `documento` varchar(213) NOT NULL,
  `cliente` varchar(255) NOT NULL,
  `producto` varchar(255) NOT NULL,
  `precio` double(12,2) NOT NULL,
  `iva` double NOT NULL,
  `estado` varchar(213) NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla dentista2.fechas: 0 rows
/*!40000 ALTER TABLE `fechas` DISABLE KEYS */;
/*!40000 ALTER TABLE `fechas` ENABLE KEYS */;

-- Volcando estructura para tabla dentista2.historial
CREATE TABLE IF NOT EXISTS `historial` (
  `Dni` varchar(100) DEFAULT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Fecha` varchar(250) NOT NULL,
  `Doctor` varchar(250) NOT NULL,
  `Procedimientos` varchar(250) NOT NULL,
  `Estado` varchar(250) NOT NULL,
  `Costo` decimal(18,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla dentista2.historial: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `historial` DISABLE KEYS */;
/*!40000 ALTER TABLE `historial` ENABLE KEYS */;

-- Volcando estructura para tabla dentista2.medicos
CREATE TABLE IF NOT EXISTS `medicos` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `Nombres` varchar(100) NOT NULL,
  `Apellido` varchar(100) NOT NULL,
  `Dni` varchar(100) NOT NULL,
  `Ruc` varchar(100) NOT NULL,
  `Colegiatura` varchar(100) NOT NULL,
  `NumeroTelefono` varchar(250) NOT NULL,
  `Direccion` varchar(250) NOT NULL,
  `Email` varchar(250) DEFAULT NULL,
  `Sexo` varchar(250) DEFAULT NULL,
  `Fechanaci` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla dentista2.medicos: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `medicos` DISABLE KEYS */;
INSERT INTO `medicos` (`id`, `Nombres`, `Apellido`, `Dni`, `Ruc`, `Colegiatura`, `NumeroTelefono`, `Direccion`, `Email`, `Sexo`, `Fechanaci`) VALUES
	(6, 'Marlon', 'villegas', '8885479', '54545451', '111111212', '99674123', 'villa los granados', 'marlon@hotmail.com', 'masculino', '20/01/1995'),
	(7, 'Diego', 'porlles', '6665479', '33345451', '111111212', '90874123', 'avenida leguia sin numero', 'diego@hotmail.com', 'masculino', '20/01/1998'),
	(8, 'angelo', 'salcedo', '656546', '545646', 'colegiatura', '92014788', 'casa', 'angelo@gmail.com', 'masculino', '02/12/21018'),
	(9, 'Alejando ', 'Vega', '544651612', '65461621621', 'Cogeliatura', '988774477', 'avenida el son', 'ale@gmail.com', 'Masculino', '12/10/1882');
/*!40000 ALTER TABLE `medicos` ENABLE KEYS */;

-- Volcando estructura para tabla dentista2.pacientes
CREATE TABLE IF NOT EXISTS `pacientes` (
  `Codigo` int(100) NOT NULL AUTO_INCREMENT,
  `Nombres` varchar(100) NOT NULL,
  `Apellido` varchar(100) DEFAULT NULL,
  `Dni` varchar(100) NOT NULL,
  `NumeroTelefono` varchar(250) NOT NULL,
  `Direccion` varchar(250) NOT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Enfermedad` varchar(250) DEFAULT NULL,
  `Alergia` varchar(250) DEFAULT NULL,
  `Sexo` varchar(250) DEFAULT NULL,
  `Fechanaci` varchar(250) NOT NULL,
  PRIMARY KEY (`Codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla dentista2.pacientes: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `pacientes` DISABLE KEYS */;
INSERT INTO `pacientes` (`Codigo`, `Nombres`, `Apellido`, `Dni`, `NumeroTelefono`, `Direccion`, `Email`, `Enfermedad`, `Alergia`, `Sexo`, `Fechanaci`) VALUES
	(6, 'juan carlos', 'caceres', '45713875', '952802752', 'los sauces 2da etapa', 'jcarlossenati@gmail.com', 'ninguna', 'nada', 'masculino', '28/0301989'),
	(7, 'Andrea', 'cepelio', '78965587', '970780835', 'lima peru', 'Adnrea', 'Ninguna', 'Ninguna', 'Femenino', '12/12/1980'),
	(8, 'Angela ', 'Balaguer', '55447788', '987445502', 'Casa', 'Angela@gmail.com', 'niguna', 'niguna', 'femenino', '12/05/1990'),
	(9, 'Fiorela', 'valles', '02147811', '963001112', 'calle zela', 'fio@gmail.com', 'nada', 'nada', 'femenino', '22/8/1191');
/*!40000 ALTER TABLE `pacientes` ENABLE KEYS */;

-- Volcando estructura para tabla dentista2.procedimiento
CREATE TABLE IF NOT EXISTS `procedimiento` (
  `idproc` int(100) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `grupo` varchar(100) NOT NULL,
  PRIMARY KEY (`idproc`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla dentista2.procedimiento: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `procedimiento` DISABLE KEYS */;
INSERT INTO `procedimiento` (`idproc`, `nombre`, `grupo`) VALUES
	(6, 'Limpieza', 'Dientes'),
	(7, 'Endodoncia', 'Dientes'),
	(8, 'Obturacion', 'Dientes'),
	(9, 'Sacada de Caries Dental', 'Dientes'),
	(10, 'Curacion ', 'Dientes'),
	(11, 'extraccion', 'dientes');
/*!40000 ALTER TABLE `procedimiento` ENABLE KEYS */;

-- Volcando estructura para tabla dentista2.procepaciente
CREATE TABLE IF NOT EXISTS `procepaciente` (
  `Dni` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Diente` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Procedimiento` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Costo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Fecha` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla dentista2.procepaciente: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `procepaciente` DISABLE KEYS */;
INSERT INTO `procepaciente` (`Dni`, `Diente`, `Procedimiento`, `Costo`, `Fecha`) VALUES
	('45713875', '4', 'Sacada de Caries Dental-Alto', '30.00', '2019-06-27 07:29:43'),
	('2147811', '18', 'Limpieza-Medio', '20.00', '2019-06-27 13:38:33'),
	('2147811', '7', 'Limpieza-Medio', '20.00', '2019-06-27 13:38:38'),
	('2147811', '7', 'Limpieza-Medio', '20.00', '2019-06-27 13:38:38');
/*!40000 ALTER TABLE `procepaciente` ENABLE KEYS */;

-- Volcando estructura para tabla dentista2.tarifas
CREATE TABLE IF NOT EXISTS `tarifas` (
  `idta` int(100) NOT NULL AUTO_INCREMENT,
  `procedimiento` varchar(100) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `costo` double(18,2) NOT NULL,
  PRIMARY KEY (`idta`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla dentista2.tarifas: ~9 rows (aproximadamente)
/*!40000 ALTER TABLE `tarifas` DISABLE KEYS */;
INSERT INTO `tarifas` (`idta`, `procedimiento`, `categoria`, `costo`) VALUES
	(7, '7', '7', 100.00),
	(8, '8', '7', 30.00),
	(9, '6', '7', 20.00),
	(10, '9', '8', 30.00),
	(11, '10', '6', 20.00),
	(12, '6', '8', 40.00),
	(13, '8', '6', 50.00),
	(14, '11', '8', 35.00),
	(15, '11', '9', 35.00),
	(16, '11', '6', 11.00);
/*!40000 ALTER TABLE `tarifas` ENABLE KEYS */;

-- Volcando estructura para tabla dentista2.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `Codigo` varchar(250) NOT NULL,
  `Nombre` varchar(250) DEFAULT NULL,
  `Clave` varchar(250) DEFAULT NULL,
  `Nivel` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`Codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla dentista2.usuarios: ~7 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`Codigo`, `Nombre`, `Clave`, `Nivel`) VALUES
	('11', 'eli', '123', 'loca'),
	('111', 'leydi', '123', 'loca'),
	('121', 'ereres', '12', NULL),
	('123', 'juanchi', '123', 'Administrador'),
	('222', 'melisa', '123', 'loca'),
	('333', 'sofia', '123', 'loca'),
	('cha', 'Sandra Velasquez', '123', 'Administrador');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
