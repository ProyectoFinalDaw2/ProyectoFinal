-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-04-2016 a las 10:43:34
-- Versión del servidor: 5.7.9
-- Versión de PHP: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mangas`
--
CREATE DATABASE IF NOT EXISTS `mangas` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mangas`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--
-- Creación: 30-04-2016 a las 10:39:34
--

DROP TABLE IF EXISTS `administrador`;
CREATE TABLE IF NOT EXISTS `administrador` (
  `ID` int(200) NOT NULL,
  `moderador` tinyint(1) NOT NULL DEFAULT '0',
  `administrador` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chat`
--
-- Creación: 30-04-2016 a las 10:39:51
--

DROP TABLE IF EXISTS `chat`;
CREATE TABLE IF NOT EXISTS `chat` (
  `IDCHAT` int(200) NOT NULL,
  `emoticono` varchar(20) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  PRIMARY KEY (`IDCHAT`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--
-- Creación: 30-04-2016 a las 10:41:34
--

DROP TABLE IF EXISTS `comentarios`;
CREATE TABLE IF NOT EXISTS `comentarios` (
  `IDCOM` int(200) NOT NULL,
  `comentario` varchar(200) NOT NULL,
  `idUsuario` int(200) NOT NULL,
  PRIMARY KEY (`IDCOM`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `control`
--
-- Creación: 30-04-2016 a las 10:40:18
--

DROP TABLE IF EXISTS `control`;
CREATE TABLE IF NOT EXISTS `control` (
  `IDMANGA` int(200) NOT NULL,
  `ID` int(200) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `fecha` date NOT NULL,
  KEY `control_FK_MANGA` (`IDMANGA`),
  KEY `control_FK_usuario` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `controla`
--
-- Creación: 30-04-2016 a las 10:42:13
--

DROP TABLE IF EXISTS `controla`;
CREATE TABLE IF NOT EXISTS `controla` (
  `ID` int(200) NOT NULL,
  `IDSUBE` int(200) NOT NULL,
  KEY `controla_FK_usuario` (`ID`),
  KEY `controla_FK_sube` (`IDSUBE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `copyright`
--
-- Creación: 30-04-2016 a las 10:42:21
--

DROP TABLE IF EXISTS `copyright`;
CREATE TABLE IF NOT EXISTS `copyright` (
  `IDCOPY` int(200) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`IDCOPY`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `da`
--
-- Creación: 30-04-2016 a las 10:40:49
--

DROP TABLE IF EXISTS `da`;
CREATE TABLE IF NOT EXISTS `da` (
  `ID` int(200) NOT NULL,
  `IDDONA` int(200) NOT NULL,
  KEY `da_FK_usuario` (`ID`),
  KEY `da_FK_donaciones` (`IDDONA`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `donaciones`
--
-- Creación: 30-04-2016 a las 10:40:26
--

DROP TABLE IF EXISTS `donaciones`;
CREATE TABLE IF NOT EXISTS `donaciones` (
  `IDDONA` int(200) NOT NULL,
  `ID` int(200) NOT NULL,
  `modoPago` varchar(200) NOT NULL,
  `cantidad` float NOT NULL,
  `cuentaBancaria` varchar(200) NOT NULL,
  `fecha` date NOT NULL,
  `numSecreto` int(10) NOT NULL,
  PRIMARY KEY (`IDDONA`),
  KEY `donaciones_FK_usuario` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `en`
--
-- Creación: 30-04-2016 a las 10:41:43
--

DROP TABLE IF EXISTS `en`;
CREATE TABLE IF NOT EXISTS `en` (
  `IDCOM` int(11) NOT NULL,
  `IDMANGA` int(11) NOT NULL,
  KEY `en_FK_comentarios` (`IDCOM`),
  KEY `en_FK_mangas` (`IDMANGA`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entra`
--
-- Creación: 30-04-2016 a las 10:40:01
--

DROP TABLE IF EXISTS `entra`;
CREATE TABLE IF NOT EXISTS `entra` (
  `ID` int(200) NOT NULL,
  `IDCHAT` int(200) NOT NULL,
  KEY `entra_FK_chat` (`IDCHAT`),
  KEY `entra_FK_usuario` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hay`
--
-- Creación: 30-04-2016 a las 10:41:25
--

DROP TABLE IF EXISTS `hay`;
CREATE TABLE IF NOT EXISTS `hay` (
  `IDVER` int(200) NOT NULL,
  `IDMANGA` int(200) NOT NULL,
  KEY `hay_FK_version` (`IDVER`),
  KEY `hay_FK_mangas` (`IDMANGA`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mangas`
--
-- Creación: 30-04-2016 a las 10:40:10
--

DROP TABLE IF EXISTS `mangas`;
CREATE TABLE IF NOT EXISTS `mangas` (
  `IDMANGA` int(200) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `fecha` date NOT NULL,
  `manga` varchar(2000) NOT NULL,
  PRIMARY KEY (`IDMANGA`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--
-- Creación: 30-04-2016 a las 10:41:51
--

DROP TABLE IF EXISTS `noticias`;
CREATE TABLE IF NOT EXISTS `noticias` (
  `IDNOT` int(200) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `noticia` text NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `fecha` date NOT NULL,
  `imagen` text NOT NULL,
  `video` text NOT NULL,
  PRIMARY KEY (`IDNOT`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paypal`
--
-- Creación: 30-04-2016 a las 10:40:35
--

DROP TABLE IF EXISTS `paypal`;
CREATE TABLE IF NOT EXISTS `paypal` (
  `cuentapaypal` varchar(200) NOT NULL,
  `IDDONA` int(200) NOT NULL,
  PRIMARY KEY (`IDDONA`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sube`
--
-- Creación: 30-04-2016 a las 10:42:06
--

DROP TABLE IF EXISTS `sube`;
CREATE TABLE IF NOT EXISTS `sube` (
  `IDSUBE` int(200) NOT NULL,
  `IDVER` int(200) NOT NULL,
  `ID` int(200) NOT NULL,
  `link` varchar(50) NOT NULL,
  PRIMARY KEY (`IDSUBE`),
  KEY `sube_FK_VERSION` (`IDVER`),
  KEY `sube_FK_usuario` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tcredito`
--
-- Creación: 30-04-2016 a las 10:40:42
--

DROP TABLE IF EXISTS `tcredito`;
CREATE TABLE IF NOT EXISTS `tcredito` (
  `ntarjeta` int(200) NOT NULL,
  `cv` int(4) NOT NULL,
  `caducidad` date NOT NULL,
  `IDDONA` int(200) NOT NULL,
  PRIMARY KEY (`IDDONA`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiene`
--
-- Creación: 30-04-2016 a las 10:42:30
--

DROP TABLE IF EXISTS `tiene`;
CREATE TABLE IF NOT EXISTS `tiene` (
  `IDMANGA` int(200) NOT NULL,
  `IDCOPY` int(200) NOT NULL,
  KEY `tiene_FK_manga` (`IDMANGA`),
  KEY `tiene_FK_copyright` (`IDCOPY`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `todos`
--
-- Creación: 30-04-2016 a las 10:41:58
--

DROP TABLE IF EXISTS `todos`;
CREATE TABLE IF NOT EXISTS `todos` (
  `IDNOT` int(200) NOT NULL,
  `IDMANGA` int(200) NOT NULL,
  KEY `todos_FK_noticias` (`IDNOT`),
  KEY `todos_FK_mangas` (`IDMANGA`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `uploader`
--
-- Creación: 30-04-2016 a las 10:39:42
--

DROP TABLE IF EXISTS `uploader`;
CREATE TABLE IF NOT EXISTS `uploader` (
  `ID` int(200) NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT '1',
  `mangasSubidos` int(9) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--
-- Creación: 30-04-2016 a las 10:39:00
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `ID` int(200) NOT NULL  AUTO_INCREMENT,
  `nick` varchar(20) NOT NULL,
  `correo` varchar(20) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellidos` varchar(40) NOT NULL,
  `contrasenya` varchar(20) NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `sexo` varchar(20) NOT NULL,
  `telefono` int(9) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarionormal`
--
-- Creación: 30-04-2016 a las 10:39:00
--

DROP TABLE IF EXISTS `usuarionormal`;
CREATE TABLE IF NOT EXISTS `usuarionormal` (
  `ID` int(200) NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `version`
--
-- Creación: 30-04-2016 a las 10:41:12
--

DROP TABLE IF EXISTS `version`;
CREATE TABLE IF NOT EXISTS `version` (
  `IDVER` int(200) NOT NULL,
  `version` varchar(20) NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`IDVER`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD CONSTRAINT `adminisrador_FK_usuario` FOREIGN KEY (`ID`) REFERENCES `usuario` (`ID`);

--
-- Filtros para la tabla `control`
--
ALTER TABLE `control`
  ADD CONSTRAINT `control_FK_MANGA` FOREIGN KEY (`IDMANGA`) REFERENCES `mangas` (`IDMANGA`),
  ADD CONSTRAINT `control_FK_usuario` FOREIGN KEY (`ID`) REFERENCES `usuario` (`ID`);

--
-- Filtros para la tabla `controla`
--
ALTER TABLE `controla`
  ADD CONSTRAINT `controla_FK_sube` FOREIGN KEY (`IDSUBE`) REFERENCES `sube` (`IDSUBE`),
  ADD CONSTRAINT `controla_FK_usuario` FOREIGN KEY (`ID`) REFERENCES `usuario` (`ID`);

--
-- Filtros para la tabla `da`
--
ALTER TABLE `da`
  ADD CONSTRAINT `da_FK_donaciones` FOREIGN KEY (`IDDONA`) REFERENCES `donaciones` (`IDDONA`),
  ADD CONSTRAINT `da_FK_usuario` FOREIGN KEY (`ID`) REFERENCES `usuario` (`ID`);

--
-- Filtros para la tabla `donaciones`
--
ALTER TABLE `donaciones`
  ADD CONSTRAINT `donaciones_FK_usuario` FOREIGN KEY (`ID`) REFERENCES `usuario` (`ID`);

--
-- Filtros para la tabla `en`
--
ALTER TABLE `en`
  ADD CONSTRAINT `en_FK_comentarios` FOREIGN KEY (`IDCOM`) REFERENCES `comentarios` (`IDCOM`),
  ADD CONSTRAINT `en_FK_mangas` FOREIGN KEY (`IDMANGA`) REFERENCES `mangas` (`IDMANGA`);

--
-- Filtros para la tabla `entra`
--
ALTER TABLE `entra`
  ADD CONSTRAINT `entra_FK_chat` FOREIGN KEY (`IDCHAT`) REFERENCES `chat` (`IDCHAT`),
  ADD CONSTRAINT `entra_FK_usuario` FOREIGN KEY (`ID`) REFERENCES `usuario` (`ID`);

--
-- Filtros para la tabla `hay`
--
ALTER TABLE `hay`
  ADD CONSTRAINT `hay_FK_mangas` FOREIGN KEY (`IDMANGA`) REFERENCES `mangas` (`IDMANGA`),
  ADD CONSTRAINT `hay_FK_version` FOREIGN KEY (`IDVER`) REFERENCES `version` (`IDVER`);

--
-- Filtros para la tabla `paypal`
--
ALTER TABLE `paypal`
  ADD CONSTRAINT `paypal_FK_donaciones` FOREIGN KEY (`IDDONA`) REFERENCES `donaciones` (`IDDONA`);

--
-- Filtros para la tabla `sube`
--
ALTER TABLE `sube`
  ADD CONSTRAINT `sube_FK_VERSION` FOREIGN KEY (`IDVER`) REFERENCES `version` (`IDVER`),
  ADD CONSTRAINT `sube_FK_usuario` FOREIGN KEY (`ID`) REFERENCES `usuario` (`ID`);

--
-- Filtros para la tabla `tcredito`
--
ALTER TABLE `tcredito`
  ADD CONSTRAINT `tcredito_FK_donaciones` FOREIGN KEY (`IDDONA`) REFERENCES `donaciones` (`IDDONA`);

--
-- Filtros para la tabla `tiene`
--
ALTER TABLE `tiene`
  ADD CONSTRAINT `tiene_FK_copyright` FOREIGN KEY (`IDCOPY`) REFERENCES `copyright` (`IDCOPY`),
  ADD CONSTRAINT `tiene_FK_manga` FOREIGN KEY (`IDMANGA`) REFERENCES `mangas` (`IDMANGA`);

--
-- Filtros para la tabla `todos`
--
ALTER TABLE `todos`
  ADD CONSTRAINT `todos_FK_mangas` FOREIGN KEY (`IDMANGA`) REFERENCES `mangas` (`IDMANGA`),
  ADD CONSTRAINT `todos_FK_noticias` FOREIGN KEY (`IDNOT`) REFERENCES `noticias` (`IDNOT`);

--
-- Filtros para la tabla `uploader`
--
ALTER TABLE `uploader`
  ADD CONSTRAINT `uploader_FK_usuario` FOREIGN KEY (`ID`) REFERENCES `usuario` (`ID`);

--
-- Filtros para la tabla `usuarionormal`
--
ALTER TABLE `usuarionormal`
  ADD CONSTRAINT `usuarioNormal_FK_usuario` FOREIGN KEY (`ID`) REFERENCES `usuario` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
