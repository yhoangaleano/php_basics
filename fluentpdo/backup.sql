-- Volcando estructura de base de datos para jornalero
CREATE DATABASE IF NOT EXISTS `jornalero` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci */;
USE `jornalero`;

-- Volcando estructura para tabla jornalero.jornalero
CREATE TABLE IF NOT EXISTS `jornalero` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `correoElectronico` varchar(50) NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `peso` int(11) NOT NULL,
  `creado` datetime DEFAULT CURRENT_TIMESTAMP,
  `actualizado` datetime DEFAULT NULL,
  `eliminado` datetime DEFAULT NULL,  
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO `jornalero` (`id`, `nombre`, `correoElectronico`, `fechaNacimiento`, `peso`) VALUES
	(1, 'Julian Gomez', 'julian@gmail.com', '1994-01-07', 65),
	(2, 'Sara Lopez', 'saral@gmail.com', '1993-01-28', 78);

