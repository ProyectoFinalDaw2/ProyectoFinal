-- CONSTRAINTS  to_FK_tf
--  ASI SE IMPORTA PERFECTAMENTE
-- Base de datos: `mangas`
--
CREATE DATABASE IF NOT EXISTS `mangas` CHARACTER SET 'UTF8' COLLATE 'utf8_general_ci';
--
-- USAMOS LA BASE DATOS: MANGAS
--
USE mangas;
CREATE TABLE IF NOT EXISTS `usuario` (
  `ID` int  NOT NULL AUTO_INCREMENT,
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
   CONSTRAINT usuario_PK_ID PRIMARY KEY(ID)
);
CREATE TABLE IF NOT EXISTS `usuarioNormal` (
  `ID` int(200)  PRIMARY KEY,
  `activo` tinyint(1) NOT NULL DEFAULT '1', 
   CONSTRAINT usuarioNormal_FK_usuario FOREIGN KEY(ID)REFERENCES usuario(ID)
  );
CREATE TABLE IF NOT EXISTS `administrador` (
   `ID` int(200) NOT NULL,
  `moderador` tinyint(1) NOT NULL DEFAULT '0', 
  `administrador` tinyint(1) NOT NULL DEFAULT '0', 
   CONSTRAINT adminisrador_FK_usuario FOREIGN KEY(ID)REFERENCES usuario(ID)
);
CREATE TABLE IF NOT EXISTS `uploader` (
  `ID` int(200) PRIMARY KEY,
  `activo` tinyint(1) NOT NULL DEFAULT '0',
  `mangasSubidos` int(9),
   CONSTRAINT uploader_FK_usuario FOREIGN KEY(ID)REFERENCES usuario(ID)
);
CREATE TABLE IF NOT EXISTS `chat` (
  `IDCHAT` int(200) NOT NULL AUTO_INCREMENT,	
  `emoticono` varchar(20) NOT NULL,
  `imagen` varchar(200) NOT NULL,
   CONSTRAINT chat_PK_IDCHAT PRIMARY KEY(IDCHAT)
);
CREATE TABLE IF NOT EXISTS `entra` (
  `ID` int(200) NOT NULL,
  `IDCHAT` int(200) NOT NULL,	
  CONSTRAINT entra_FK_chat FOREIGN KEY(IDCHAT)REFERENCES chat(IDCHAT),
  CONSTRAINT entra_FK_usuario FOREIGN KEY(ID)REFERENCES usuario(ID)
);
CREATE TABLE IF NOT EXISTS `mangas` (
  `IDMANGA` int(200) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `fecha` date NOT NULL,
  `manga` varchar(2000) NOT NULL,
  CONSTRAINT mangas_PK_IDMANGAS PRIMARY KEY(IDMANGA)
);
CREATE TABLE IF NOT EXISTS `control` (
  `IDMANGA` int(200) NOT NULL,
  `ID` int(200) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `fecha` date NOT NULL,
  `global` int DEFAULT 0,
  `semanal` int DEFAULT 0,
  CONSTRAINT control_FK_MANGA FOREIGN KEY(IDMANGA)REFERENCES mangas(IDMANGA),
  CONSTRAINT control_FK_usuarioNormal FOREIGN KEY(ID)REFERENCES usuarioNormal(ID)
);
CREATE TABLE IF NOT EXISTS `donaciones` (
  `IDDONA` int NOT NULL AUTO_INCREMENT,
  `ID` int(200) NOT NULL,
  `modoPago` varchar(200) NOT NULL,
  `cantidad` float NOT NULL,
  `cuentaBancaria` varchar(200) NOT NULL,
  `fecha` date NOT NULL,
  `numSecreto` int(10) NOT NULL,
   CONSTRAINT donaciones_PK_IDDONA PRIMARY KEY(IDDONA),
   CONSTRAINT donaciones_FK_usuario FOREIGN KEY(ID)REFERENCES usuario(ID)
);
CREATE TABLE IF NOT EXISTS `paypal` (
  `cuentapaypal` varchar(200) NOT NULL,
  `IDDONA` int(200) PRIMARY KEY,
   CONSTRAINT paypal_FK_donaciones FOREIGN KEY(IDDONA)REFERENCES donaciones(IDDONA)
);
CREATE TABLE IF NOT EXISTS `tcredito` (
  `ntarjeta`int(200) NOT NULL,
  `cv`int(4) NOT NULL,
  `caducidad` date NOT NULL,
  `IDDONA` int(200) PRIMARY KEY,
   CONSTRAINT tcredito_FK_donaciones FOREIGN KEY(IDDONA)REFERENCES donaciones(IDDONA)
);
CREATE TABLE IF NOT EXISTS `version` (
  `IDVER` int(200) NOT NULL AUTO_INCREMENT,
  `version` varchar(20) NOT NULL,
  `fecha` date NOT NULL,
  CONSTRAINT version_PK_IDVER PRIMARY KEY(IDVER)
);
CREATE TABLE IF NOT EXISTS `hay` (
  `IDVER` int(200) NOT NULL,
  `IDMANGA` int(200) NOT NULL,
   CONSTRAINT hay_FK_version FOREIGN KEY(IDVER)REFERENCES version(IDVER),
   CONSTRAINT hay_FK_mangas FOREIGN KEY(IDMANGA)REFERENCES mangas(IDMANGA)
);
CREATE TABLE IF NOT EXISTS `comentarios` (
  `IDCOM` int(200)  NOT NULL AUTO_INCREMENT,
  `comentario` varchar(200) NOT NULL,
  `idUsuario` int(200) NOT NULL,
   CONSTRAINT comentarios_PK_IDCOM PRIMARY KEY(IDCOM)
);
CREATE TABLE IF NOT EXISTS `en` (
   `IDCOM` int NOT NULL,
  `IDMANGA` int NOT NULL,
   CONSTRAINT en_FK_comentarios FOREIGN KEY(IDCOM)REFERENCES comentarios(IDCOM),
   CONSTRAINT en_FK_mangas FOREIGN KEY(IDMANGA)REFERENCES mangas(IDMANGA)
);
CREATE TABLE IF NOT EXISTS `noticias` (
  `IDNOT` int(200) NOT NULL AUTO_INCREMENT,
  `ID` int(200) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `noticia` text NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `fecha` varchar (50) NOT NULL ,
  `imagen` text NOT NULL,
  `video` text NOT NULL,
  `global` int DEFAULT 0,
  `semanal` int DEFAULT 0,
   CONSTRAINT noticias_PK_IDNOT PRIMARY KEY(IDNOT),
   CONSTRAINT noticias_FK_usuario FOREIGN KEY(ID)REFERENCES usuario(ID)
);
CREATE TABLE IF NOT EXISTS `todos` (
   `IDNOT` int(200) NOT NULL,
  `IDCOM` int(200) NOT NULL,
   CONSTRAINT todos_FK_noticias FOREIGN KEY(IDNOT)REFERENCES noticias(IDNOT),
   CONSTRAINT todos_FK_comentarios FOREIGN KEY(IDCOM)REFERENCES comentarios(IDCOM)
);
CREATE TABLE IF NOT EXISTS `sube` (
   `IDSUBE` int(200) NOT NULL AUTO_INCREMENT,
   `IDVER` int(200) NOT NULL,
   `ID` int(200) NOT NULL,
   `link` varchar(50) NOT NULL,
   `global` int DEFAULT 0,
  `semanal` int DEFAULT 0,  
  CONSTRAINT sube_PK_IDSUBE PRIMARY KEY(IDSUBE),
   CONSTRAINT sube_FK_VERSION FOREIGN KEY(IDVER)REFERENCES version(IDVER),
   CONSTRAINT sube_FK_uploader FOREIGN KEY(ID)REFERENCES uploader(ID)
);
CREATE TABLE IF NOT EXISTS `controla` (
   `ID` int(200) NOT NULL,
  `IDSUBE` int(200) NOT NULL,
   CONSTRAINT controla_FK_administrador FOREIGN KEY(ID)REFERENCES administrador(ID),
   CONSTRAINT controla_FK_sube FOREIGN KEY(IDSUBE)REFERENCES sube(IDSUBE)
);
CREATE TABLE IF NOT EXISTS `copyright` (
   `IDCOPY` int(200) NOT NULL AUTO_INCREMENT,
   `nombre` varchar(50) NOT NULL,
   CONSTRAINT copyright_PK_IDCOPY PRIMARY KEY(IDCOPY)
);
CREATE TABLE IF NOT EXISTS `tiene` (
   `IDMANGA` int(200) NOT NULL,
  `IDCOPY` int(200) NOT NULL,
   CONSTRAINT tiene_FK_manga FOREIGN KEY(IDMANGA)REFERENCES mangas(IDMANGA),
   CONSTRAINT tiene_FK_copyright FOREIGN KEY(IDCOPY)REFERENCES copyright(IDCOPY)
);
CREATE TABLE IF NOT EXISTS `donativo` (
   `IDMANGA` int NOT NULL,
   `IDDONA` int NOT NULL,
   CONSTRAINT donativo_FK_manga FOREIGN KEY(IDMANGA)REFERENCES mangas(IDMANGA),
   CONSTRAINT donativo_FK_donaciones FOREIGN KEY(IDDONA)REFERENCES donaciones(IDDONA)
);
INSERT INTO `mangas`.`usuario` (`ID`, `nick`, `correo`, `nombre`, `apellidos`, `contrasenya`, `fechaNacimiento`, `sexo`, `telefono`, `imagen`) VALUES (NULL, 'Juudyyt', 'carjuuc@hotmail.com', 'Judit', 'Cerdà Izquierdo', 'qwertY.8', '1996-09-03', 'mujer', '647545478', '');
INSERT INTO `mangas`.`usuario` (`ID`, `nick`, `correo`, `nombre`, `apellidos`, `contrasenya`, `fechaNacimiento`, `sexo`, `telefono`, `imagen`) VALUES (NULL, 'StonV', 'Ibis@hotmail.com', 'Ibis', 'Valencia', 'qwertY.8', '1996-09-03', 'hombre', '647545478', '');
INSERT INTO `mangas`.`administrador` (`ID`, `moderador`, `administrador`) VALUES ('1', '1', '1');
INSERT INTO `mangas`.`administrador` (`ID`, `moderador`, `administrador`) VALUES ('2', '1', '1');
INSERT INTO `mangas`.`usuario` (`ID`, `nick`, `correo`, `nombre`, `apellidos`, `contrasenya`, `fechaNacimiento`, `sexo`, `telefono`, `imagen`) VALUES (NULL, 'Juan', 'juan@hotmail.com', 'Juan', 'Serrano Gallego', 'usuarionormal.4', '1992-05-04', 'hombre', '647514512', '');
INSERT INTO `mangas`.`usuarioNormal` (`ID`, `activo`) VALUES ('1', '1'), ('2', '1'), ('3', '1');
