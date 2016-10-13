# ************************************************************
# Sequel Pro SQL dump
# Versión 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.39)
# Base de datos: issste
# Tiempo de Generación: 2016-10-13 208:02:30 p.m. +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Volcado de tabla adscripcionFisica
# ------------------------------------------------------------

DROP TABLE IF EXISTS `adscripcionFisica`;

CREATE TABLE `adscripcionFisica` (
  `codigo` varchar(10) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `denominacion` varchar(100) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `estatus` int(11) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;



# Volcado de tabla adscripcionPresupuestal
# ------------------------------------------------------------

DROP TABLE IF EXISTS `adscripcionPresupuestal`;

CREATE TABLE `adscripcionPresupuestal` (
  `codigo` varchar(10) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `denominacion` varchar(100) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `estatus` int(11) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;



# Volcado de tabla configuracion
# ------------------------------------------------------------

DROP TABLE IF EXISTS `configuracion`;

CREATE TABLE `configuracion` (
  `titularUnidadAdministrativa` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `titularResponsableAdministrativo` varchar(100) CHARACTER SET utf8 DEFAULT '',
  `titularCentroTrabajo` varchar(100) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;



# Volcado de tabla documentacionPlantillaAutorizada
# ------------------------------------------------------------

DROP TABLE IF EXISTS `documentacionPlantillaAutorizada`;

CREATE TABLE `documentacionPlantillaAutorizada` (
  `folio_id` int(11) DEFAULT NULL,
  `tipoMovimientoDocumentacion_id` int(11) NOT NULL,
  `archivo` binary(1) DEFAULT NULL,
  `estatus` int(11) DEFAULT NULL,
  KEY `tipoDocumentacion` (`tipoMovimientoDocumentacion_id`),
  KEY `folio` (`folio_id`),
  CONSTRAINT `folio` FOREIGN KEY (`folio_id`) REFERENCES `plantillaAutorizada` (`folio`),
  CONSTRAINT `tipoDocumentacion` FOREIGN KEY (`tipoMovimientoDocumentacion_id`) REFERENCES `tipoMovimientoDocumentacion` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;



# Volcado de tabla horario
# ------------------------------------------------------------

DROP TABLE IF EXISTS `horario`;

CREATE TABLE `horario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` int(11) NOT NULL,
  `deInicio` varchar(10) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `aInicio` varchar(10) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `deFinal` varchar(10) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `aFinal` varchar(10) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `estatus` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Volcado de tabla plantillaAutorizada
# ------------------------------------------------------------

DROP TABLE IF EXISTS `plantillaAutorizada`;

CREATE TABLE `plantillaAutorizada` (
  `folio` int(11) NOT NULL,
  `quincena` int(11) NOT NULL,
  `anio` int(11) NOT NULL,
  `numeroEmpleado_id` int(11) NOT NULL,
  `tipoMovimiento_id` int(11) NOT NULL,
  `vigenciaDel` date NOT NULL,
  `vigenciaAl` date NOT NULL,
  `numeroPlaza_id` int(11) NOT NULL,
  `adscripcionPresupuestal_id` varchar(10) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `unidadAdministrativa_id` varchar(10) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `adscripcionFisica_id` varchar(10) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `servicio_id` int(11) NOT NULL,
  `turno_id` int(11) NOT NULL,
  `horario_id` int(11) NOT NULL,
  `perceocionesMando` tinyint(1) NOT NULL,
  `perceocionesEnlaceAD` tinyint(1) NOT NULL,
  `perceocionesEnlace` tinyint(1) NOT NULL,
  `perceocionesOperativo` tinyint(1) NOT NULL,
  `perceocionesRamaMedica` tinyint(1) NOT NULL,
  `turnoOpcional` tinyint(1) NOT NULL,
  `perceocionesAdicional` tinyint(1) NOT NULL,
  `riegosProfesionales` tinyint(1) NOT NULL,
  `observaciones` varchar(200) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `antecedenteNombre` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `antecedenteNumeroEmpleado` int(11) DEFAULT NULL,
  `antecedenteCodigoMovimiento` int(11) DEFAULT NULL,
  `antecedenteTipoMovimiento` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `antecedenteVigenciaDelDia` int(11) DEFAULT NULL,
  `antecedenteVigenciaDelMes` int(11) DEFAULT NULL,
  `antecedenteVigenciaDelAnio` int(11) DEFAULT NULL,
  `antecedenteVigenciaAlDia` int(11) DEFAULT NULL,
  `antecedenteVigenciaAlMes` int(11) DEFAULT NULL,
  `antecedenteVigenciaAlAnio` int(11) DEFAULT NULL,
  `antecedenteTurnoOpcional` int(11) DEFAULT NULL,
  `antecedentePercepcionAdicional` int(11) DEFAULT NULL,
  `antecedenteRiesgosProfesionales` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`folio`),
  KEY `numeroEmpleado` (`numeroEmpleado_id`),
  KEY `tipoMovimiento` (`tipoMovimiento_id`),
  KEY `numerPlaza` (`numeroPlaza_id`),
  KEY `unidadAdministrativa` (`unidadAdministrativa_id`),
  KEY `adsFisica` (`adscripcionFisica_id`),
  KEY `servicio` (`servicio_id`),
  KEY `turno` (`turno_id`),
  KEY `horario` (`horario_id`),
  KEY `adscripcionPRresupuestal` (`adscripcionPresupuestal_id`),
  CONSTRAINT `adscripcionFisica` FOREIGN KEY (`adscripcionFisica_id`) REFERENCES `adscripcionFisica` (`codigo`),
  CONSTRAINT `adscripcionPRresupuestal` FOREIGN KEY (`adscripcionPresupuestal_id`) REFERENCES `adscripcionPresupuestal` (`codigo`),
  CONSTRAINT `horario` FOREIGN KEY (`horario_id`) REFERENCES `horario` (`id`),
  CONSTRAINT `numerPlaza` FOREIGN KEY (`numeroPlaza_id`) REFERENCES `plaza` (`numeroPlaza`),
  CONSTRAINT `numeroEmpleado` FOREIGN KEY (`numeroEmpleado_id`) REFERENCES `trabajadores` (`id`),
  CONSTRAINT `servicio` FOREIGN KEY (`servicio_id`) REFERENCES `servicio` (`codigo`),
  CONSTRAINT `tipoMovimiento` FOREIGN KEY (`tipoMovimiento_id`) REFERENCES `tipomovimiento` (`codigo`),
  CONSTRAINT `turno` FOREIGN KEY (`turno_id`) REFERENCES `turno` (`id`),
  CONSTRAINT `unidadAdministrativa` FOREIGN KEY (`unidadAdministrativa_id`) REFERENCES `unidadAdministrativa` (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;



# Volcado de tabla plantillaReal
# ------------------------------------------------------------

DROP TABLE IF EXISTS `plantillaReal`;

CREATE TABLE `plantillaReal` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `numeroTrabajador_id` int(11) NOT NULL,
  `turno_id` int(11) NOT NULL,
  `servicio_id` int(11) NOT NULL,
  `periodoDelDia` int(11) NOT NULL,
  `periodoDelMes` int(11) NOT NULL,
  `periodoDelAnio` int(11) NOT NULL,
  `periodoAlDia` int(11) NOT NULL,
  `periodoAlMes` int(11) NOT NULL,
  `periodoAlAnio` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `Oficio` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `PlantillaRealTrabajador` (`numeroTrabajador_id`),
  KEY `PlantillaRealTurno` (`turno_id`),
  KEY `PlantillaRealServicio` (`servicio_id`),
  CONSTRAINT `PlantillaRealServicio` FOREIGN KEY (`servicio_id`) REFERENCES `servicio` (`codigo`),
  CONSTRAINT `PlantillaRealTrabajador` FOREIGN KEY (`numeroTrabajador_id`) REFERENCES `trabajadores` (`id`),
  CONSTRAINT `PlantillaRealTurno` FOREIGN KEY (`turno_id`) REFERENCES `turno` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;



# Volcado de tabla plaza
# ------------------------------------------------------------

DROP TABLE IF EXISTS `plaza`;

CREATE TABLE `plaza` (
  `numeroPlaza` int(11) NOT NULL,
  `codigoPuesto` varchar(20) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `nivelSubnivel` varchar(5) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `grupoGradoNivelSalarial` varchar(10) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `clasificacion` int(11) NOT NULL,
  `integracionSalarial` int(11) NOT NULL,
  `denominacionPuesto` varchar(100) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `zonaEconomica` int(11) NOT NULL,
  `tipoPlaza` varchar(1) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `ocupacion` varchar(100) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `tipoTabulador` varchar(1) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `turnoOpcional` decimal(12,2) DEFAULT NULL,
  `percepcionAdicional` decimal(12,2) DEFAULT NULL,
  `riesgoProfesional` decimal(12,2) DEFAULT NULL,
  `unidadAdministrativa_id` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `adscripcionPresupuestal_id` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `adscripcionFisica_id` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `servicio_id` int(11) NOT NULL,
  `turno_id` int(11) NOT NULL,
  `jornada` int(11) DEFAULT NULL,
  `horario_id` int(11) NOT NULL,
  `estatus` int(11) NOT NULL,
  PRIMARY KEY (`numeroPlaza`),
  KEY `plazaUA` (`unidadAdministrativa_id`),
  KEY `plazaAP` (`adscripcionPresupuestal_id`),
  KEY `PlazaAF` (`adscripcionFisica_id`),
  KEY `PlazaServicio` (`servicio_id`),
  KEY `PlazaTurno` (`turno_id`),
  KEY `PlazaHorario` (`horario_id`),
  CONSTRAINT `PlazaAF` FOREIGN KEY (`adscripcionFisica_id`) REFERENCES `adscripcionFisica` (`codigo`),
  CONSTRAINT `PlazaHorario` FOREIGN KEY (`horario_id`) REFERENCES `horario` (`id`),
  CONSTRAINT `PlazaServicio` FOREIGN KEY (`servicio_id`) REFERENCES `servicio` (`codigo`),
  CONSTRAINT `PlazaTurno` FOREIGN KEY (`turno_id`) REFERENCES `turno` (`id`),
  CONSTRAINT `plazaUA` FOREIGN KEY (`unidadAdministrativa_id`) REFERENCES `unidadAdministrativa` (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;



# Volcado de tabla puesto
# ------------------------------------------------------------

DROP TABLE IF EXISTS `puesto`;

CREATE TABLE `puesto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(15) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `nivel` varchar(15) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `denominacion` varchar(100) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `sueldoZEII` decimal(10,0) DEFAULT NULL,
  `compensacionZEII` decimal(10,0) DEFAULT NULL,
  `totalZEII` decimal(10,0) DEFAULT NULL,
  `sueldoZEIII` decimal(10,0) DEFAULT NULL,
  `compensacionZEIII` decimal(10,0) DEFAULT NULL,
  `totalZEIII` decimal(10,0) DEFAULT NULL,
  `estatus` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;



# Volcado de tabla servicio
# ------------------------------------------------------------

DROP TABLE IF EXISTS `servicio`;

CREATE TABLE `servicio` (
  `codigo` int(10) NOT NULL,
  `denominacion` varchar(100) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `estatus` int(11) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;



# Volcado de tabla tipoMovimiento
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tipoMovimiento`;

CREATE TABLE `tipoMovimiento` (
  `codigo` int(11) NOT NULL,
  `tipoMovimiento` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `movimientoEspecifico` varchar(100) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `definicion` text CHARACTER SET utf8 NOT NULL,
  `estatus` int(11) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;



# Volcado de tabla tipoMovimientoDocumentacion
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tipoMovimientoDocumentacion`;

CREATE TABLE `tipoMovimientoDocumentacion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigoTipoMovimiento_id` int(11) NOT NULL,
  `nombre` varchar(250) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `estatus` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tipomovimeinto` (`codigoTipoMovimiento_id`),
  CONSTRAINT `tipomovimeinto` FOREIGN KEY (`codigoTipoMovimiento_id`) REFERENCES `tipomovimiento` (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;



# Volcado de tabla trabajadores
# ------------------------------------------------------------

DROP TABLE IF EXISTS `trabajadores`;

CREATE TABLE `trabajadores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numeroEmpleado` int(11) NOT NULL,
  `nombre` varchar(200) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `RFC` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `CURP` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `sexo` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `CUIP` varchar(40) CHARACTER SET utf8 DEFAULT NULL,
  `nacionalidad` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `numeroHijos` int(11) DEFAULT NULL,
  `escolaridad` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `cedulaProfesional` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `domicilio` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `correo` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `estatus` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `numeroEmpleado` (`numeroEmpleado`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;



# Volcado de tabla turno
# ------------------------------------------------------------

DROP TABLE IF EXISTS `turno`;

CREATE TABLE `turno` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `estatus` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;



# Volcado de tabla unidadAdministrativa
# ------------------------------------------------------------

DROP TABLE IF EXISTS `unidadAdministrativa`;

CREATE TABLE `unidadAdministrativa` (
  `codigo` varchar(10) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `denominacion` varchar(100) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `estatus` int(11) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;



# Volcado de tabla user
# ------------------------------------------------------------

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `auth_key` varchar(2000) DEFAULT NULL,
  `access_token` varchar(2000) DEFAULT NULL,
  `tipoUsuario_id` int(11) NOT NULL,
  `fechaCreacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `password_reset_token` varchar(2000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;

INSERT INTO `user` (`id`, `username`, `password`, `auth_key`, `access_token`, `tipoUsuario_id`, `fechaCreacion`, `password_reset_token`)
VALUES
	(1,'admin','05fe7461c607c33229772d402505601016a7d0ea',NULL,NULL,3,'2016-09-22 23:08:15','');

/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
