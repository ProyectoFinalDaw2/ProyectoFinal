SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
 -- CONSTRAINTS  to_FK_tf
--
-- Base de datos: `mangas`
--
DROP DATABASE IF EXISTS `mangas`;
<<<<<<< HEAD
CREATE DATABASE IF NOT EXISTS `mangas` ;
--
-- USAMOS LA BASE DATOS: MANGAS
--
USE mangas;
=======
CREATE DATABASE `mangas` IF NOT EXISTS;

>>>>>>> 3940bc8a855bc3bb4dc2fce7f074891b91147ee6
-- --------------------------------------------------------
--
-- Tabla: `usuario`
--
<<<<<<< HEAD

=======
DROP TABLE IF EXISTS `usuario`;
>>>>>>> 3940bc8a855bc3bb4dc2fce7f074891b91147ee6
CREATE TABLE IF NOT EXISTS `usuario` (
  `ID` int(200) NOT NULL,
  `nick` varchar(20) NOT NULL,
  `correo` varchar(20) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellidos` varchar(40) NOT NULL,
  `contrasenya` varchar(20) NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `sexo` varchar(20) NOT NULL,
  `telefono` int(9) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT '1',
  `moderador` tinyint(1) NOT NULL DEFAULT '0',
   CONSTRAINT usuario_PK_ID PRIMARY KEY(ID)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- --------------------------------------------------------
--
-- Tabla: `usuarioNormal`
--
<<<<<<< HEAD
CREATE TABLE IF NOT EXISTS `usuarioNormal` (
  `ID` int(200)  PRIMARY KEY,
  `activo` tinyint(1) NOT NULL DEFAULT '1', 
=======
DROP TABLE IF EXISTS `usuarioNormal`;
CREATE TABLE IF NOT EXISTS `usuarioNormal` (
  `IDN` int(200) NOT NULL,
  `ID` int(200) NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT '1',
   CONSTRAINT usuarioNormal_PK_IDN PRIMARY KEY(IDN),
>>>>>>> 3940bc8a855bc3bb4dc2fce7f074891b91147ee6
   CONSTRAINT usuarioNormal_FK_usuario FOREIGN KEY(ID)REFERENCES usuario(ID)
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
----------------------------------------------------------
--
-- Tabla: `administrador`
--
<<<<<<< HEAD
CREATE TABLE IF NOT EXISTS `administrador` (
  `ID` int(200)  PRIMARY KEY,
  `moderador` tinyint(1) NOT NULL DEFAULT '0', 
  `administrador` tinyint(1) NOT NULL DEFAULT '0',  
=======
DROP TABLE IF EXISTS `administrador`;
CREATE TABLE IF NOT EXISTS `administrador` (
  `IDA` int(200) NOT NULL,
  `ID` int(200) NOT NULL,
  `moderador` tinyint(1) NOT NULL DEFAULT '0', 
  `administrador` tinyint(1) NOT NULL DEFAULT '0',  --revisar por si hace falta la tabla
   CONSTRAINT administrador_PK_IDA PRIMARY KEY(IDA),
>>>>>>> 3940bc8a855bc3bb4dc2fce7f074891b91147ee6
   CONSTRAINT adminisrador_FK_usuario FOREIGN KEY(ID)REFERENCES usuario(ID)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- --------------------------------------------------------
--
-- Tabla: `uploader` (El que sube los mangas)
--
<<<<<<< HEAD
CREATE TABLE IF NOT EXISTS `uploader` (
  `ID` int(200) PRIMARY KEY,
  `activo` tinyint(1) NOT NULL DEFAULT '1',
  `mangasSubidos` int(9),
=======
DROP TABLE IF EXISTS `uploader`;
CREATE TABLE IF NOT EXISTS `uploader` (
  `IDU` int(200) NOT NULL, 
  `ID` int(200) NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT '1',
  `mangasSubidos` int(9),
   CONSTRAINT uploader_PK_IDU PRIMARY KEY(IDU),
>>>>>>> 3940bc8a855bc3bb4dc2fce7f074891b91147ee6
   CONSTRAINT uploader_FK_usuario FOREIGN KEY(ID)REFERENCES usuario(ID)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- --------------------------------------------------------
--
-- Tabla: `chat`
--
<<<<<<< HEAD
=======
DROP TABLE IF EXISTS `chat`;
>>>>>>> 3940bc8a855bc3bb4dc2fce7f074891b91147ee6
CREATE TABLE IF NOT EXISTS `chat` (
  `IDCHAT` int(200) NOT NULL,	
  `emoticono` varchar(20) NOT NULL,
  `imagen` varchar(200) NOT NULL,
<<<<<<< HEAD
  CONSTRAINT chat_PK_IDCHAT PRIMARY KEY(IDCHAT)
   
=======
   CONSTRAINT chat_PK_IDCHAT PRIMARY KEY(IDCHAT)
>>>>>>> 3940bc8a855bc3bb4dc2fce7f074891b91147ee6
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------
--
-- Tabla: `ENTRA` (Relacion entre CHAT y Usuarios)
--
<<<<<<< HEAD
=======
DROP TABLE IF EXISTS `entra`;
>>>>>>> 3940bc8a855bc3bb4dc2fce7f074891b91147ee6
CREATE TABLE IF NOT EXISTS `entra` (
  `ID` int(200) NOT NULL,
  `IDCHAT` int(200) NOT NULL,	
  CONSTRAINT entra_FK_chat FOREIGN KEY(IDCHAT)REFERENCES chat(IDCHAT),
  CONSTRAINT entra_FK_usuario FOREIGN KEY(ID)REFERENCES usuario(ID)
)ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- --------------------------------------------------------
--
<<<<<<< HEAD
-- Tabla: `mangasmangas` (donde se guardan todos los mangas)
--
=======
-- Tabla: `mangas` (donde se guardan todos los mangas)
--
DROP TABLE IF EXISTS `mangas`;
>>>>>>> 3940bc8a855bc3bb4dc2fce7f074891b91147ee6
CREATE TABLE IF NOT EXISTS `mangas` (
  `IDMANGA` int(200) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `fecha` date NOT NULL,
  `manga` varchar(2000) NOT NULL,
<<<<<<< HEAD
  CONSTRAINT mangas_PK_IDMANGAS PRIMARY KEY(IDMANGA)
=======
  CONSTRAINT mangas_PK_IDMANGAS PRIMARY KEY(IDMANGAS)
>>>>>>> 3940bc8a855bc3bb4dc2fce7f074891b91147ee6
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- --------------------------------------------------------
--
-- Tabla: `CONTROL` (Relacion entre usuarioNormal` y mangas)
--
<<<<<<< HEAD
CREATE TABLE IF NOT EXISTS `control` (
  `IDMANGA` int(200) NOT NULL,
  `ID` int(200) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `fecha` date NOT NULL,
  CONSTRAINT control_FK_MANGA FOREIGN KEY(IDMANGA)REFERENCES mangas(IDMANGA),
  CONSTRAINT control_FK_usuario FOREIGN KEY(ID)REFERENCES usuario(ID)
=======
DROP TABLE IF EXISTS `control`;
CREATE TABLE IF NOT EXISTS `control` (
  `IDMANGA` int(200) NOT NULL,
  `IDN` int(200) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `fecha` date NOT NULL,
  CONSTRAINT control_FK_MANGA FOREIGN KEY(IDMANGA)REFERENCES chat(IDMANGA),
  CONSTRAINT control_FK_usuarioNormal FOREIGN KEY(IDN)REFERENCES usuario(IDN)
>>>>>>> 3940bc8a855bc3bb4dc2fce7f074891b91147ee6
)ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- --------------------------------------------------------
--
-- Tabla: `Donaciones` (Para los copyright de los mangas)
--
<<<<<<< HEAD
CREATE TABLE IF NOT EXISTS `donaciones` (
  `IDDONA` int(200) NOT NULL,
    `ID` int(200) NOT NULL,
=======
DROP TABLE IF EXISTS `donaciones`;
CREATE TABLE IF NOT EXISTS `donaciones` (
  `IDDONA` int(200) NOT NULL,
>>>>>>> 3940bc8a855bc3bb4dc2fce7f074891b91147ee6
  `modoPago` varchar(200) NOT NULL,
  `cantidad` float NOT NULL,
  `cuentaBancaria` varchar(200) NOT NULL,
  `fecha` date NOT NULL,
  `numSecreto` int(10) NOT NULL,
<<<<<<< HEAD
   CONSTRAINT donaciones_PK_IDDONA PRIMARY KEY(IDDONA),
   CONSTRAINT donaciones_FK_usuario FOREIGN KEY(ID)REFERENCES usuario(ID)
=======
   CONSTRAINT donaciones_PK_IDDONA PRIMARY KEY(IDDONA)
>>>>>>> 3940bc8a855bc3bb4dc2fce7f074891b91147ee6
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- --------------------------------------------------------
--
-- Tabla: `PAYPAL` (Hijo de donaciones, metodo de pago)
--
<<<<<<< HEAD
CREATE TABLE IF NOT EXISTS `paypal` (
  `cuentapaypal` varchar(200) NOT NULL,
  `IDDONA` int(200) PRIMARY KEY,
=======
DROP TABLE IF EXISTS `paypal`;
CREATE TABLE IF NOT EXISTS `paypal` (
  `IDPAYPAL` int(200) NOT NULL,
  `cuentapaypal` varchar(200) NOT NULL,
  `IDDONA` int(200) NOT NULL,
   CONSTRAINT paypal_PK_IDPAYPAL PRIMARY KEY(IDPAYPAL),
>>>>>>> 3940bc8a855bc3bb4dc2fce7f074891b91147ee6
   CONSTRAINT paypal_FK_donaciones FOREIGN KEY(IDDONA)REFERENCES donaciones(IDDONA)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- --------------------------------------------------------
--
-- Tabla: `TCREDIO` (Hijo de donaciones, metodo de pago)
--
<<<<<<< HEAD
CREATE TABLE IF NOT EXISTS `tcredito` (
  `ntarjeta`int(200) NOT NULL,
  `cv`int(4) NOT NULL,
  `caducidad` date NOT NULL,
  `IDDONA` int(200) PRIMARY KEY,
=======
DROP TABLE IF EXISTS `tcredito`;
CREATE TABLE IF NOT EXISTS `tcredito` (
  `IDCRE` int(200) NOT NULL,
  `ntarjeta`int(200) NOT NULL,
  `cv`int(4) NOT NULL,
  `caducidad` date NOT NULL,
   `IDDONA` int(200) NOT NULL,
   CONSTRAINT tcredito_PK_IDCRE PRIMARY KEY(IDPAYPAL),
>>>>>>> 3940bc8a855bc3bb4dc2fce7f074891b91147ee6
   CONSTRAINT tcredito_FK_donaciones FOREIGN KEY(IDDONA)REFERENCES donaciones(IDDONA)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- --------------------------------------------------------
--
-- Tabla: `da` (relacion entre donaciones y usuario)
--
<<<<<<< HEAD
=======
DROP TABLE IF EXISTS `da`;
>>>>>>> 3940bc8a855bc3bb4dc2fce7f074891b91147ee6
CREATE TABLE IF NOT EXISTS `da` (
  `ID` int(200) NOT NULL,
  `IDDONA` int(200) NOT NULL,
   CONSTRAINT da_FK_usuario FOREIGN KEY(ID)REFERENCES usuario(ID),
   CONSTRAINT da_FK_donaciones FOREIGN KEY(IDDONA)REFERENCES donaciones(IDDONA)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------
--
-- Tabla: `VERSION` (control de la version, idioma del manga)
--
<<<<<<< HEAD
=======
DROP TABLE IF EXISTS `version`;
>>>>>>> 3940bc8a855bc3bb4dc2fce7f074891b91147ee6
CREATE TABLE IF NOT EXISTS `version` (
  `IDVER` int(200) NOT NULL,
  `version` varchar(20) NOT NULL,
  `fecha` date NOT NULL,
  CONSTRAINT version_PK_IDVER PRIMARY KEY(IDVER)
<<<<<<< HEAD
=======
  --revisar si hace falta ferign
>>>>>>> 3940bc8a855bc3bb4dc2fce7f074891b91147ee6
)ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- --------------------------------------------------------
--
-- Tabla: `HAY` (relacion muchos a muchos version y manga)
--
<<<<<<< HEAD
=======
DROP TABLE IF EXISTS `hay`;
>>>>>>> 3940bc8a855bc3bb4dc2fce7f074891b91147ee6
CREATE TABLE IF NOT EXISTS `hay` (
  `IDVER` int(200) NOT NULL,
  `IDMANGA` int(200) NOT NULL,
   CONSTRAINT hay_FK_version FOREIGN KEY(IDVER)REFERENCES version(IDVER),
   CONSTRAINT hay_FK_mangas FOREIGN KEY(IDMANGA)REFERENCES mangas(IDMANGA)
<<<<<<< HEAD
=======
  --revisar si hace falta ferign
>>>>>>> 3940bc8a855bc3bb4dc2fce7f074891b91147ee6
)ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- --------------------------------------------------------
--
-- Tabla: `comentarios` (para mangas y noticias)
--
<<<<<<< HEAD
CREATE TABLE IF NOT EXISTS `comentarios` (
  `IDCOM` int(200)  NOT NULL,
=======
DROP TABLE IF EXISTS `comentarios`;
CREATE TABLE IF NOT EXISTS `comentarios` (
  `IDCOM` int(200) PRIMARY KEY NOT NULL,
>>>>>>> 3940bc8a855bc3bb4dc2fce7f074891b91147ee6
  `comentario` varchar(200) NOT NULL,
  `idUsuario` int(200) NOT NULL,
   CONSTRAINT comentarios_PK_IDCOM PRIMARY KEY(IDCOM)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- --------------------------------------------------------
--
-- Tabla: `en` (para mangas y comentarios)
--
<<<<<<< HEAD
CREATE TABLE IF NOT EXISTS `en` (
   `IDCOM` int NOT NULL,
  `IDMANGA` int NOT NULL,
   CONSTRAINT en_FK_comentarios FOREIGN KEY(IDCOM)REFERENCES comentarios(IDCOM),
   CONSTRAINT en_FK_mangas FOREIGN KEY(IDMANGA)REFERENCES mangas(IDMANGA)
=======
DROP TABLE IF EXISTS `en`;
CREATE TABLE IF NOT EXISTS `en` (
   `IDCOM` int(200) NOT NULL,
  `IDMANGA` int(200) NOT NULL,
   CONSTRAINT hay_FK_comentarios FOREIGN KEY(IDVER)REFERENCES comentarios(IDCOM),
   CONSTRAINT hay_FK_mangas FOREIGN KEY(IDMANGA)REFERENCES mangas(IDMANGA)
>>>>>>> 3940bc8a855bc3bb4dc2fce7f074891b91147ee6
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------
--
-- Tabla: `NOTICIAS` (Noticias sobre mangas, eventos)
--
<<<<<<< HEAD
=======
DROP TABLE IF EXISTS `noticias`;
>>>>>>> 3940bc8a855bc3bb4dc2fce7f074891b91147ee6
CREATE TABLE IF NOT EXISTS `noticias` (
  `IDNOT` int(200) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `noticia` text NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `fecha` date NOT NULL,
  `imagen` text NOT NULL,
  `video` text NOT NULL,
   CONSTRAINT noticias_PK_IDNOT PRIMARY KEY(IDNOT)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- --------------------------------------------------------
--
-- Tabla: `todos` (para mangas y comentarios)
--
<<<<<<< HEAD
CREATE TABLE IF NOT EXISTS `todos` (
   `IDNOT` int(200) NOT NULL,
  `IDMANGA` int(200) NOT NULL,
   CONSTRAINT todos_FK_noticias FOREIGN KEY(IDNOT)REFERENCES noticias(IDNOT),
   CONSTRAINT todos_FK_mangas FOREIGN KEY(IDMANGA)REFERENCES mangas(IDMANGA)
=======
DROP TABLE IF EXISTS `todos`;
CREATE TABLE IF NOT EXISTS `todos` (
   `IDNOT` int(200) NOT NULL,
  `IDMANGA` int(200) NOT NULL,
   CONSTRAINT hay_FK_noticias FOREIGN KEY(IDNOT)REFERENCES noticias(IDNOT),
   CONSTRAINT hay_FK_mangas FOREIGN KEY(IDMANGA)REFERENCES mangas(IDMANGA)
>>>>>>> 3940bc8a855bc3bb4dc2fce7f074891b91147ee6
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- --------------------------------------------------------
--
-- Tabla: `sube` (para mangas y control del administrador asociativa)
--
<<<<<<< HEAD
CREATE TABLE IF NOT EXISTS `sube` (
   `IDSUBE` int(200) NOT NULL,
   `IDVER` int(200) NOT NULL,
   `ID` int(200) NOT NULL,
   `link` varchar(50) NOT NULL,
   CONSTRAINT sube_PK_IDSUBE PRIMARY KEY(IDSUBE),
   CONSTRAINT sube_FK_VERSION FOREIGN KEY(IDVER)REFERENCES version(IDVER),
   CONSTRAINT sube_FK_usuario FOREIGN KEY(ID)REFERENCES usuario(ID)
=======
DROP TABLE IF EXISTS `sube`;
CREATE TABLE IF NOT EXISTS `sube` (
   `IDSUBE` int(200) NOT NULL,
   `IDVER` int(200) NOT NULL,
   `IDU` int(200) NOT NULL,
   `link` varchar(50) NOT NULL,
   CONSTRAINT sube_PK_IDSUBE PRIMARY KEY(IDSUBE)
   CONSTRAINT sube_FK_VERSION FOREIGN KEY(IDVER)REFERENCES version(IDVER),
   CONSTRAINT sube_FK_UPLOADER FOREIGN KEY(IDU)REFERENCES uploader(IDU)
>>>>>>> 3940bc8a855bc3bb4dc2fce7f074891b91147ee6
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- --------------------------------------------------------
--
-- Tabla: `controla` (para sube y administrador)
--
<<<<<<< HEAD
CREATE TABLE IF NOT EXISTS `controla` (
   `ID` int(200) NOT NULL,
  `IDSUBE` int(200) NOT NULL,
   CONSTRAINT controla_FK_usuario FOREIGN KEY(ID)REFERENCES usuario(ID),
   CONSTRAINT controla_FK_sube FOREIGN KEY(IDSUBE)REFERENCES sube(IDSUBE)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- --------------------------------------------------------
--
-- Tabla: `sube` (para mangas y control del administrador asociativa)
--
CREATE TABLE IF NOT EXISTS `copyright` (
   `IDCOPY` int(200) NOT NULL,
   `nombre` varchar(50) NOT NULL,
   CONSTRAINT copyright_PK_IDCOPY PRIMARY KEY(IDCOPY)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- --------------------------------------------------------
--
-- Tabla: `tiene` (para sube y administrador)
--
CREATE TABLE IF NOT EXISTS `tiene` (
   `IDMANGA` int(200) NOT NULL,
  `IDCOPY` int(200) NOT NULL,
   CONSTRAINT tiene_FK_manga FOREIGN KEY(IDMANGA)REFERENCES mangas(IDMANGA),
   CONSTRAINT tiene_FK_copyright FOREIGN KEY(IDCOPY)REFERENCES copyright(IDCOPY)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
=======
DROP TABLE IF EXISTS `controla`;
CREATE TABLE IF NOT EXISTS `controla` (
   `IDA` int(200) NOT NULL,
  `IDSUBE` int(200) NOT NULL,
   CONSTRAINT controla_FK_administrador FOREIGN KEY(IDA)REFERENCES administrador(IDA),
   CONSTRAINT controla_FK_sube FOREIGN KEY(IDSUBE)REFERENCES sube(IDSUBE)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

>>>>>>> 3940bc8a855bc3bb4dc2fce7f074891b91147ee6

