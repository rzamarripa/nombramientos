/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50539
Source Host           : localhost:3306
Source Database       : issste

Target Server Type    : MYSQL
Target Server Version : 50539
File Encoding         : 65001

Date: 2016-09-22 23:44:29
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `adscripcionfisica`
-- ----------------------------
DROP TABLE IF EXISTS `adscripcionfisica`;
CREATE TABLE `adscripcionfisica` (
  `codigo` int(10) NOT NULL,
  `denominacion` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `estatus` int(11) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- ----------------------------
-- Records of adscripcionfisica
-- ----------------------------
INSERT INTO `adscripcionfisica` VALUES ('123', 'alkfmlkanfknwekjfnjk', '1');

-- ----------------------------
-- Table structure for `adscripcionpresupuestal`
-- ----------------------------
DROP TABLE IF EXISTS `adscripcionpresupuestal`;
CREATE TABLE `adscripcionpresupuestal` (
  `codigo` int(10) NOT NULL,
  `denominacion` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `estatus` int(11) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- ----------------------------
-- Records of adscripcionpresupuestal
-- ----------------------------
INSERT INTO `adscripcionpresupuestal` VALUES ('3211', '123123123', '1');

-- ----------------------------
-- Table structure for `horario`
-- ----------------------------
DROP TABLE IF EXISTS `horario`;
CREATE TABLE `horario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` int(11) NOT NULL,
  `deInicio` varchar(10) NOT NULL,
  `aInicio` varchar(10) NOT NULL,
  `deFinal` varchar(10) NOT NULL,
  `aFinal` varchar(10) NOT NULL,
  `estatus` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of horario
-- ----------------------------
INSERT INTO `horario` VALUES ('1', '123', 'wefwe', 'wefweqwdqw', 'wef', 'wefwef', '1');

-- ----------------------------
-- Table structure for `nombramiento`
-- ----------------------------
DROP TABLE IF EXISTS `nombramiento`;
CREATE TABLE `nombramiento` (
  `a` int(11) NOT NULL,
  `folio` int(11) NOT NULL,
  `quincena` int(11) NOT NULL,
  `anio` int(11) NOT NULL,
  `numeroEmpleado_id` int(11) NOT NULL,
  `tipoMovimiento_id` int(11) NOT NULL,
  `vigenciaDel` date NOT NULL,
  `vigenciaAl` date NOT NULL,
  `numeroPlaza_id` int(11) NOT NULL,
  `unidadAdministrativa_id` int(11) NOT NULL,
  `adscripcionPresupuestal_id` int(11) NOT NULL,
  `adscripcionFisica_id` int(11) NOT NULL,
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
  `observaciones` varchar(200) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`folio`),
  KEY `numeroEmpleado` (`numeroEmpleado_id`),
  KEY `tipoMovimiento` (`tipoMovimiento_id`),
  KEY `numerPlaza` (`numeroPlaza_id`),
  KEY `unidadAdministrativa` (`unidadAdministrativa_id`),
  KEY `adsFisica` (`adscripcionFisica_id`),
  KEY `adsPresupuestal` (`adscripcionPresupuestal_id`),
  KEY `servicio` (`servicio_id`),
  KEY `turno` (`turno_id`),
  KEY `horario` (`horario_id`),
  CONSTRAINT `horario` FOREIGN KEY (`horario_id`) REFERENCES `horario` (`id`),
  CONSTRAINT `adsFisica` FOREIGN KEY (`adscripcionFisica_id`) REFERENCES `adscripcionfisica` (`codigo`),
  CONSTRAINT `adsPresupuestal` FOREIGN KEY (`adscripcionPresupuestal_id`) REFERENCES `adscripcionpresupuestal` (`codigo`),
  CONSTRAINT `numeroEmpleado` FOREIGN KEY (`numeroEmpleado_id`) REFERENCES `trabajadores` (`id`),
  CONSTRAINT `numerPlaza` FOREIGN KEY (`numeroPlaza_id`) REFERENCES `plaza` (`numeroPlaza`),
  CONSTRAINT `servicio` FOREIGN KEY (`servicio_id`) REFERENCES `servicio` (`codigo`),
  CONSTRAINT `tipoMovimiento` FOREIGN KEY (`tipoMovimiento_id`) REFERENCES `tipomovimiento` (`codigo`),
  CONSTRAINT `turno` FOREIGN KEY (`turno_id`) REFERENCES `turno` (`id`),
  CONSTRAINT `unidadAdministrativa` FOREIGN KEY (`unidadAdministrativa_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- ----------------------------
-- Records of nombramiento
-- ----------------------------

-- ----------------------------
-- Table structure for `plaza`
-- ----------------------------
DROP TABLE IF EXISTS `plaza`;
CREATE TABLE `plaza` (
  `numeroPlaza` int(11) NOT NULL,
  `codigoPuesto` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `nivelSubnivel` varchar(5) COLLATE latin1_general_ci NOT NULL,
  `grupoGradoNivelSalarial` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `clasificacion` int(11) NOT NULL,
  `integracionSalarial` int(11) NOT NULL,
  `denominacionPuesto` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `zonaEconomica` int(11) NOT NULL,
  `tipoPlaza` varchar(1) COLLATE latin1_general_ci NOT NULL,
  `ocupacion` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `estatus` int(11) NOT NULL,
  `tipoTabulador` varchar(1) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`numeroPlaza`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- ----------------------------
-- Records of plaza
-- ----------------------------
INSERT INTO `plaza` VALUES ('4', 'wgweg', 'rgerh', 'wegwe', '30', '3', 'wegweg', '3', 'e', 'wegweg', '1', 'w');
INSERT INTO `plaza` VALUES ('6', 'wgweg', 'rgerh', 'wegwe', '30', '3', 'wegweg', '3', 'e', 'wegweg', '1', 'w');

-- ----------------------------
-- Table structure for `puesto`
-- ----------------------------
DROP TABLE IF EXISTS `puesto`;
CREATE TABLE `puesto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `nivel` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `denominacion` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `sueldoZEII` decimal(10,0) NOT NULL,
  `compensacionZEII` decimal(10,0) NOT NULL,
  `totalZEII` decimal(10,0) NOT NULL,
  `sueldoZEIII` decimal(10,0) NOT NULL,
  `compensacionZEIII` decimal(10,0) NOT NULL,
  `totalZEIII` decimal(10,0) NOT NULL,
  `tipoPuesto_id` int(11) NOT NULL,
  `estatus` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tipoPuesto` (`tipoPuesto_id`),
  CONSTRAINT `tipoPuesto` FOREIGN KEY (`tipoPuesto_id`) REFERENCES `tipopuesto` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- ----------------------------
-- Records of puesto
-- ----------------------------
INSERT INTO `puesto` VALUES ('1', 'dsbrd', '223', 'swrger', '123123', '123123', '1231231', '12312312', '123123123', '123123', '1', '1');
INSERT INTO `puesto` VALUES ('2', 'ewgerg', 'ewrger', 'ergerg', '6', '6', '7', '6', '5', '5', '1', '1');
INSERT INTO `puesto` VALUES ('3', '123', '23fe', '213423', '234234', '234234', '234234', '234234', '234234', '234234', '2', '1');

-- ----------------------------
-- Table structure for `servicio`
-- ----------------------------
DROP TABLE IF EXISTS `servicio`;
CREATE TABLE `servicio` (
  `codigo` int(10) NOT NULL,
  `denominacion` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `estatus` int(11) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- ----------------------------
-- Records of servicio
-- ----------------------------
INSERT INTO `servicio` VALUES ('3234', 'wergergerg234', '1');
INSERT INTO `servicio` VALUES ('12354', 'weñjkrgnwenrgnwerjngwergerngnenrgnerg', '1');
INSERT INTO `servicio` VALUES ('3434534', 'fthrtrtynrthrt', '1');
INSERT INTO `servicio` VALUES ('123124123', 'rtrtbrtbrtbrtb', '1');

-- ----------------------------
-- Table structure for `tipomovimiento`
-- ----------------------------
DROP TABLE IF EXISTS `tipomovimiento`;
CREATE TABLE `tipomovimiento` (
  `codigo` int(11) NOT NULL,
  `tipoMovimiento` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `movimientoEspecifico` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `definicion` text COLLATE latin1_general_ci NOT NULL,
  `estatus` int(11) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- ----------------------------
-- Records of tipomovimiento
-- ----------------------------
INSERT INTO `tipomovimiento` VALUES ('124312', 'ergerg', 'wergerkjgnek', 'legjnwlkejwrnbg jlwjerhg', '1');

-- ----------------------------
-- Table structure for `tipomovimientodocumentacion`
-- ----------------------------
DROP TABLE IF EXISTS `tipomovimientodocumentacion`;
CREATE TABLE `tipomovimientodocumentacion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigoTipoMovimiento_id` int(11) NOT NULL,
  `nombre` varchar(250) COLLATE latin1_general_ci NOT NULL,
  `estatus` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tipomovimeinto` (`codigoTipoMovimiento_id`),
  CONSTRAINT `tipomovimeinto` FOREIGN KEY (`codigoTipoMovimiento_id`) REFERENCES `tipomovimiento` (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- ----------------------------
-- Records of tipomovimientodocumentacion
-- ----------------------------
INSERT INTO `tipomovimientodocumentacion` VALUES ('1', '124312', 'awregmiergbdrerg', '1');

-- ----------------------------
-- Table structure for `tipopuesto`
-- ----------------------------
DROP TABLE IF EXISTS `tipopuesto`;
CREATE TABLE `tipopuesto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `estatus` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- ----------------------------
-- Records of tipopuesto
-- ----------------------------
INSERT INTO `tipopuesto` VALUES ('1', 'Puesto 1', '1');
INSERT INTO `tipopuesto` VALUES ('2', 'Puesto 2', '1');
INSERT INTO `tipopuesto` VALUES ('3', 'Puesto 3', '1');
INSERT INTO `tipopuesto` VALUES ('4', 'Puesto 4', '1');

-- ----------------------------
-- Table structure for `trabajadores`
-- ----------------------------
DROP TABLE IF EXISTS `trabajadores`;
CREATE TABLE `trabajadores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numeroEmpleado` int(11) NOT NULL,
  `nombre` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `RFC` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `CURP` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `sexo` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `CUIP` varchar(40) COLLATE latin1_general_ci DEFAULT NULL,
  `nacionalidad` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `numeroHijos` int(11) DEFAULT NULL,
  `escolaridad` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `cedulaProfesional` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `domicilio` varchar(200) COLLATE latin1_general_ci DEFAULT NULL,
  `estatus` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `numeroEmpleado` (`numeroEmpleado`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- ----------------------------
-- Records of trabajadores
-- ----------------------------
INSERT INTO `trabajadores` VALUES ('1', '1234', 'Cosme López', 'asdasda', 'sdasdasd', 'asdasd', 'asdasdasd', 'asdasd', '3', 'asdasd', 'asdasd', 'asdasda', '1');
INSERT INTO `trabajadores` VALUES ('2', '950', 'Juana la cubana', '56', '545', '45', '54', '45', '45', '454', '545', '54', '1');
INSERT INTO `trabajadores` VALUES ('3', '123', 'nk', 'jnk', 'jnkjkn', 'kjnjnkjkn', 'kjn', 'jkjnk', '1212', 'jkn', 'jnkjnkjnk', 'jnkjnk', null);
INSERT INTO `trabajadores` VALUES ('4', '123', 'njk', 'njk', 'jknjnk', 'jn', 'nj', 'njnj', '123', 'nj', 'nj', 'njn', null);
INSERT INTO `trabajadores` VALUES ('5', '123', 'kjn', 'njkn', 'jnk', 'njk', 'njk', 'jnk', '12', 'jnk', 'jnk', 'kjn', null);
INSERT INTO `trabajadores` VALUES ('6', '123', 'hj', 'bjh', 'bhj', 'bjh', 'b', 'jhb', null, 'hjhj', 'j', 'jjjhhj', null);
INSERT INTO `trabajadores` VALUES ('7', '123', 'hj', 'bjh', 'bhj', 'bjh', 'b', 'jhb', '4', 'hjhj', 'j', 'jjjhhj', null);
INSERT INTO `trabajadores` VALUES ('8', '123', 'hj', 'bjh', 'bhj', 'bjh', 'b', 'jhb', null, 'hjhj', 'j', 'jjjhhj', null);
INSERT INTO `trabajadores` VALUES ('9', '123', 'hj', 'bjh', 'bhj', 'bjh', 'b', 'jhb', '5', 'hjhj', 'j', '', null);
INSERT INTO `trabajadores` VALUES ('10', '112312', 'ergergerg', null, '', null, null, null, null, null, null, '', '1');
INSERT INTO `trabajadores` VALUES ('11', '123', '123123', 'WEMGKEWRMNGKERKGK', 'KK', 'Masculino', 'KNNVWEKNRKNNK', 'KNVKNERKNVKNNK', '1212', 'KLWKELG', 'WKEGK', 'KJWEKJNF', '1');
INSERT INTO `trabajadores` VALUES ('12', '5', 'qewfwe', 'dwqf', 'wsevw', 'wevev', 'sve', 'wvev', '1212', 'wefw', 'wefvwe', '23wfer', '1');
INSERT INTO `trabajadores` VALUES ('13', '23423', 'srgerg', 'klhjb', 'jlhb', 'jlhb', 'jlh', 'bjh', null, 'bhjj', 'hbhjb', 'hbj', '1');
INSERT INTO `trabajadores` VALUES ('14', '213123', 'wef', null, null, null, null, null, null, null, null, null, '1');
INSERT INTO `trabajadores` VALUES ('15', '4', 'swerwdv', 'edverv', 'wver', 'wevwe', 'wsver', 'wvev', '123', 'wef', 'wefwe', 'wefwef', '1');
INSERT INTO `trabajadores` VALUES ('16', '4', 'swerwdv', 'edverv', 'wver', 'wevwe', 'wsver', 'wvev', '123', 'wef', 'wefwe', 'wefwef', '1');
INSERT INTO `trabajadores` VALUES ('17', '32', 'erhgerg', null, null, null, null, null, null, null, null, null, '1');
INSERT INTO `trabajadores` VALUES ('18', '2423', 'sgseg', null, null, null, null, null, null, null, null, null, '1');
INSERT INTO `trabajadores` VALUES ('19', '123', 'ewrgerg', null, null, null, null, null, null, null, null, null, '1');
INSERT INTO `trabajadores` VALUES ('20', '123', 'wgeg', null, null, null, null, null, null, null, null, null, '1');
INSERT INTO `trabajadores` VALUES ('21', '123', 'wegweg', 'wgweg', 'bger', 'weg', 'wefg', 'wefg', '23', 'wegwe', 'wegw', 'wegweg', '1');

-- ----------------------------
-- Table structure for `turno`
-- ----------------------------
DROP TABLE IF EXISTS `turno`;
CREATE TABLE `turno` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `estatus` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- ----------------------------
-- Records of turno
-- ----------------------------
INSERT INTO `turno` VALUES ('1', 'aaSas', '1');
INSERT INTO `turno` VALUES ('2', 'asdasd', '1');

-- ----------------------------
-- Table structure for `unidadadministrativa`
-- ----------------------------
DROP TABLE IF EXISTS `unidadadministrativa`;
CREATE TABLE `unidadadministrativa` (
  `codigo` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `denominacion` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `estatus` int(11) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- ----------------------------
-- Records of unidadadministrativa
-- ----------------------------
INSERT INTO `unidadadministrativa` VALUES ('2123', 'wefwefwefasxasxas', '1');
INSERT INTO `unidadadministrativa` VALUES ('345', 'f3wgege', '1');

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'admin', '05fe7461c607c33229772d402505601016a7d0ea', null, null, '3', '2016-09-22 23:08:15', '');
