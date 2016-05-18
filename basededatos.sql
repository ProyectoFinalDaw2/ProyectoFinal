-- CONSTRAINTS  to_FK_tf
--  ASI SE IMPORTA PERFECTAMENTE
-- Base de datos: `mangas`
--
CREATE DATABASE IF NOT EXISTS `mangas` ;
--
-- USAMOS LA BASE DATOS: MANGAS
--
USE mangas;
CREATE TABLE IF NOT EXISTS `usuario` (
  `ID` int(200)  NOT NULL AUTO_INCREMENT,
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
CREATE TABLE IF NOT EXISTS `usuarionormal` (
  `ID` int(200)  PRIMARY KEY DEFAULT '0',
  `activo` tinyint(1) NOT NULL DEFAULT '1', 
   CONSTRAINT usuarionormal_FK_usuario FOREIGN KEY(ID)REFERENCES usuario(ID)
  );
CREATE TABLE IF NOT EXISTS `administrador` (
   `ID` int(200) NOT NULL DEFAULT '0',
  `moderador` tinyint(1) NOT NULL DEFAULT '0', 
  `administrador` tinyint(1) NOT NULL DEFAULT '0', 
   CONSTRAINT adminisrador_FK_usuario FOREIGN KEY(ID)REFERENCES usuario(ID)
);
CREATE TABLE IF NOT EXISTS `uploader` (
  `ID` int(200) PRIMARY KEY DEFAULT '0',
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
  `ID` int(200) NOT NULL DEFAULT '0',
  `IDCHAT` int(200) NOT NULL DEFAULT '0',	
  CONSTRAINT entra_FK_chat FOREIGN KEY(IDCHAT)REFERENCES chat(IDCHAT),
  CONSTRAINT entra_FK_usuario FOREIGN KEY(ID)REFERENCES usuario(ID)
);
CREATE TABLE IF NOT EXISTS `manga` (
  `IDMANGA` int(200) NOT NULL AUTO_INCREMENT ,
  `titulo` varchar(20) NOT NULL,
  `imgportada` varchar(2000) NOT NULL,
  `fechapubliobr` date,
  `genero` varchar(200) ,
  `periocidad` varchar(20) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `adulto` tinyint(1) NOT NULL DEFAULT '0',
  `sinopsis` varchar(2000) NOT NULL,
  `autores` varchar(20) NOT NULL,
  `artistas` varchar(20) NOT NULL,
  `capitulo` varchar(20) NOT NULL,
  CONSTRAINT manga_PK_IDMANGA PRIMARY KEY(IDMANGA)
);
CREATE TABLE IF NOT EXISTS `control` (
  `IDMANGA` int(200) NOT NULL DEFAULT '0',
  `ID` int(200) NOT NULL DEFAULT '0',
  `estado` varchar(20) NOT NULL,
  `fecha` date NOT NULL,
  `global` int DEFAULT 0,
  `semanal` int DEFAULT 0,
  CONSTRAINT control_FK_MANGA FOREIGN KEY(IDMANGA)REFERENCES manga(IDMANGA),
  CONSTRAINT control_FK_usuarionormal FOREIGN KEY(ID)REFERENCES usuarionormal(ID)
);
CREATE TABLE IF NOT EXISTS `donaciones` (
  `IDDONA` int NOT NULL AUTO_INCREMENT ,
  `ID` int(200) NOT NULL DEFAULT '0',
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
  `IDDONA` int(200) PRIMARY KEY DEFAULT '0',
   CONSTRAINT paypal_FK_donaciones FOREIGN KEY(IDDONA)REFERENCES donaciones(IDDONA)
);
CREATE TABLE IF NOT EXISTS `tcredito` (
  `ntarjeta`int(200) NOT NULL ,
  `cv`int(4) NOT NULL,
  `caducidad` date NOT NULL,
  `IDDONA` int(200) PRIMARY KEY DEFAULT '0',
   CONSTRAINT tcredito_FK_donaciones FOREIGN KEY(IDDONA)REFERENCES donaciones(IDDONA)
);
CREATE TABLE IF NOT EXISTS `version` (
  `IDVER` int(200) NOT NULL AUTO_INCREMENT,
  `IDMANGA` int NOT NULL DEFAULT '0',
  `idioma` varchar(20) NOT NULL,
  `fecha` date NOT NULL,
   CONSTRAINT version_FK_manga FOREIGN KEY(IDMANGA)REFERENCES manga(IDMANGA),
   CONSTRAINT version_PK_IDVER PRIMARY KEY(IDVER)
);
CREATE TABLE IF NOT EXISTS `hay` (
  `IDVER` int(200) NOT NULL DEFAULT '0',
  `IDMANGA` int(200) NOT NULL DEFAULT '0',
   CONSTRAINT hay_FK_version FOREIGN KEY(IDVER)REFERENCES version(IDVER),
   CONSTRAINT hay_FK_manga FOREIGN KEY(IDMANGA)REFERENCES manga(IDMANGA)
);
CREATE TABLE IF NOT EXISTS `comentarios` (
  `IDCOM` int(200)  NOT NULL AUTO_INCREMENT ,
  `comentario` varchar(200) NOT NULL,
  `idUsuario` int(200) NOT NULL DEFAULT '0',
   CONSTRAINT comentarios_PK_IDCOM PRIMARY KEY(IDCOM)
);
CREATE TABLE IF NOT EXISTS `en` (
   `IDCOM` int NOT NULL DEFAULT '0',
  `IDMANGA` int NOT NULL DEFAULT '0',
   CONSTRAINT en_FK_comentarios FOREIGN KEY(IDCOM)REFERENCES comentarios(IDCOM),
   CONSTRAINT en_FK_manga FOREIGN KEY(IDMANGA)REFERENCES manga(IDMANGA)
);
CREATE TABLE IF NOT EXISTS `noticias` (
  `IDNOT` int(200) NOT NULL AUTO_INCREMENT ,
  `ID` int(200) NOT NULL DEFAULT '0',
  `titulo` varchar(50) NOT NULL,
  `noticia` text NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `fecha` varchar (50) NOT NULL ,
  `imagen` text NOT NULL,
  `video` text NOT NULL,
  `global` int DEFAULT 0,
  `semanal` int DEFAULT 0,
  `activo` BOOLEAN NOT NULL DEFAULT 1,
   CONSTRAINT noticias_PK_IDNOT PRIMARY KEY(IDNOT),
   CONSTRAINT noticias_FK_usuario FOREIGN KEY(ID)REFERENCES usuario(ID)
);
CREATE TABLE IF NOT EXISTS `todos` (
   `IDNOT` int(200) NOT NULL DEFAULT '0',
  `IDCOM` int(200) NOT NULL DEFAULT '0',
   CONSTRAINT todos_FK_noticias FOREIGN KEY(IDNOT)REFERENCES noticias(IDNOT),
   CONSTRAINT todos_FK_comentarios FOREIGN KEY(IDCOM)REFERENCES comentarios(IDCOM)
);
CREATE TABLE IF NOT EXISTS `sube` (
   `IDSUBE` int(200)  AUTO_INCREMENT ,
   `IDVER` int(200) NOT NULL DEFAULT '0',
   `ID` int(200) NOT NULL DEFAULT '0',
   `link` varchar(50) NOT NULL,
   `npaginas` int DEFAULT 0,
   `capitulo` int DEFAULT 0,
   `global` int DEFAULT 0,
  `semanal` int DEFAULT 0,  
  CONSTRAINT sube_PK_IDSUBE PRIMARY KEY(IDSUBE),
   CONSTRAINT sube_FK_VERSION FOREIGN KEY(IDVER)REFERENCES version(IDVER),
   CONSTRAINT sube_FK_uploader FOREIGN KEY(ID)REFERENCES uploader(ID)
);
CREATE TABLE IF NOT EXISTS `controla` (
   `ID` int(200) NOT NULL DEFAULT '0',
  `IDSUBE` int(200) NOT NULL DEFAULT '0',
   CONSTRAINT controla_FK_administrador FOREIGN KEY(ID)REFERENCES administrador(ID),
   CONSTRAINT controla_FK_sube FOREIGN KEY(IDSUBE)REFERENCES sube(IDSUBE)
);
CREATE TABLE IF NOT EXISTS `copyright` (
   `IDCOPY` int(200) NOT NULL AUTO_INCREMENT,
   `nombre` varchar(50) NOT NULL,
   CONSTRAINT copyright_PK_IDCOPY PRIMARY KEY(IDCOPY)
);
CREATE TABLE IF NOT EXISTS `tiene` (
   `IDMANGA` int(200) NOT NULL DEFAULT '0',
  `IDCOPY` int(200) NOT NULL DEFAULT '0',
   CONSTRAINT tiene_FK_manga FOREIGN KEY(IDMANGA)REFERENCES manga(IDMANGA),
   CONSTRAINT tiene_FK_copyright FOREIGN KEY(IDCOPY)REFERENCES copyright(IDCOPY)
);
CREATE TABLE IF NOT EXISTS `donativo` (
   `IDMANGA` int NOT NULL DEFAULT '0',
   `IDDONA` int NOT NULL DEFAULT '0',
   CONSTRAINT donativo_FK_manga FOREIGN KEY(IDMANGA)REFERENCES manga(IDMANGA),
   CONSTRAINT donativo_FK_donaciones FOREIGN KEY(IDDONA)REFERENCES donaciones(IDDONA)
);

INSERT INTO `mangas`.`usuario` (`ID`, `nick`, `correo`, `nombre`, `apellidos`, `contrasenya`, `fechaNacimiento`, `sexo`, `telefono`, `imagen`) VALUES (NULL, 'Juudyyt', 'carjuuc@hotmail.com', 'Judit', 'Cerdà Izquierdo', 'qwertY.8', '1996-09-03', 'mujer', '647545478', '');
INSERT INTO `mangas`.`usuario` (`ID`, `nick`, `correo`, `nombre`, `apellidos`, `contrasenya`, `fechaNacimiento`, `sexo`, `telefono`, `imagen`) VALUES (NULL, 'StonV', 'Ibis@hotmail.com', 'Ibis', 'Valencia', 'qwertY.8', '1996-09-03', 'hombre', '647545478', '');
INSERT INTO `mangas`.`administrador` (`ID`, `moderador`, `administrador`) VALUES ('1', '1', '1');
INSERT INTO `mangas`.`administrador` (`ID`, `moderador`, `administrador`) VALUES ('2', '1', '1');
INSERT INTO `mangas`.`usuario` (`ID`, `nick`, `correo`, `nombre`, `apellidos`, `contrasenya`, `fechaNacimiento`, `sexo`, `telefono`, `imagen`) VALUES (NULL, 'Juan', 'juan@hotmail.com', 'Juan', 'Serrano Gallego', 'usuarionormal.4', '1992-05-04', 'hombre', '647514512', '');
INSERT INTO `mangas`.`usuarionormal` (`ID`, `activo`) VALUES ('1', '1'), ('2', '1'), ('3', '1');
INSERT INTO `comentarios` (`IDCOM`, `comentario`, `idUsuario`) VALUES
(1, 'Pues esta muy bien el trailer, habrá que ir a ver la peli', 1);
INSERT INTO `noticias` (`IDNOT`, `ID`, `titulo`, `noticia`, `descripcion`, `fecha`, `imagen`, `video`, `global`, `semanal`, `activo`) VALUES
(1, 1, 'The Red Turtle ya tiene trailer', 'La pelÃ­cula cuenta con la participaciÃ³n del director japonÃ©s Isao Takahata como supervisor y productor artÃ­stico.\r\n\r\nEl filme tendrÃ¡ su premier en JapÃ³n el prÃ³ximo mes de Septiembre 2016, pero antes tendrÃ¡ proyecciones en en el afamado Festival de Cannes 2016, asÃ­ como en el Festival Internacional de Cine de AnimaciÃ³n de Annecy.\r\n\r\nPara su promociÃ³n ya existe un primer trÃ¡iler que nos deja ver el estilo que manejarÃ¡ la pelÃ­cula:', 'â€œLa Tortue rougeâ€ (o mejor conocida por su nombre internacional â€œThe Red Turtleâ€) es la prÃ³xima entrega del director neerlandÃ©s MichaÃ«l Dudok de Wit. Dicho largometraje animado serÃ¡ una co', '18/5/2016', '../style/imagenes/noticias/imagenes/Red-Turtle.jpg', '../style/imagenes/noticias/video/La Tortue rouge  - The Red Turtle - la bande annonce du film.mp4', 5, 5, 1),
(2, 1, 'Magi kyun Renaissance tendra Anime', 'En un mundo donde la magia es considerada un arte, y los estudiantes que la ven como tal son conocidos como Artistar. Ellos asisten al instituto privado â€œHoshinomori Mahou Geijutsuâ€.\r\n\r\nKohana Aigasaki es una chica que acaba de ser transferida a la famosa escuela, quien ahora estarÃ¡ a cargo el comitÃ© encargado de organizar el festival â€œHoshinomori Summer Festaâ€.', 'â€œMagi-kyun! Renaissanceâ€ (ãƒžã‚¸ãã‚…ã‚“ã£ï¼ãƒ«ãƒãƒƒã‚µãƒ³ã‚¹) es el nombre de una franquicia multimedia creada por la empresa Broccoli, el estudio de animaciÃ³n Sunrise y la disquera Pony Can', '18/5/2016', '../style/imagenes/noticias/imagenes/Magi-kyun-Renaissance.jpg', '', 2, 2, 1),
(3, 1, 'Tsukiuta. THE ANIMATION ya tiene fecha de estreno', 'Los Tsukiuta tienen dos versiones una masculina y una femenina.\r\n\r\nLas versiones masculinas viven en Tokio, y estÃ¡n divididas en dos grupos. La unidad de idols â€œSix Gravityâ€ conformados por los meses de Diciembre a Mayo, y la unidad â€œProcellarumâ€ conformada por los meses de Junio a Noviembre.\r\n\r\nMientras que las versiones masculinas viven en la tierra, las versiones femeninas viven en una dimensiÃ³n aparte, quienes se encargan de convertir la energÃ­a espiritual de la gente de la tierra en energÃ­a de vida; ademÃ¡s se encargan de mantener una relaciÃ³n de prosperidad entre ambos mundos. En la tierra se les conoce a esas mujeres como diosas. Hay 6 mujeres estudiantes (que representan los meses de Diciembre a Mayo) que buscan cumplir ese rol.', 'â€œTsukiuta. THE ANIMATIONâ€ (ãƒ„ã‚­ã‚¦ã‚¿ã€‚THE ANIMATION) es un proyecto que llevarÃ¡ al anime una serie de Drama CD que tiene como protagonista a versiones antropomorfas de los meses del aÃ±o.\r\n\r\n', '18/5/2016', '../style/imagenes/noticias/imagenes/Tsukiuta-THE-ANIMATION.jpg', '', 1, 1, 1),
(4, 1, 'Manga Koe Koi tendra una adaptacion', 'La buena noticia es que el primer tomo tankÅbon de la serie estÃ¡ programado a salir el prÃ³ximo 11 de Junio 2016, por lo que es probable que ahÃ­ se revele mÃ¡s informaciÃ³n al respecto.\r\nLa historia sigue la vida de Yuiko y Matsubara, quienes se conocen mediante una llamada telefÃ³nica. SegÃºn Yuiko, Matsubara es un chico amable con una fantÃ¡stica voz.\r\n\r\nCuando finalmente se conocen en la escuela, la chica descubre que Matsubara es un chico misterioso que siempre tiene una bolsa de papel sobre su cabeza. AÃºn asÃ­ una curiosa relaciÃ³n tiene lugar.\r\n\r\nLa serie se viene publicando desde mayo del 2015, y actualmente tiene 45 capÃ­tulos publicados mediante la App Comico.', 'Mediante la aplicaciÃ³n â€œComicoâ€, se ha anunciado que el manga â€œKoe Koiâ€ (ã“ãˆæ‹) creado por DÅruru tendra una adaptaciÃ³n a â€œpantallasâ€. Salvo eso no se comentarÃ­on mÃ¡s detalles, po', '18/5/2016', '../style/imagenes/noticias/imagenes/Koe-Koi.jpg', '', 2, 2, 1),
(5, 1, 'My Famicase Exhibition', 'â€œMy Famicase Exhibitionâ€ es una curiosa exhibiciÃ³n de arte que tiene como caracterÃ­stica el tener como lienzos cartuchos de la popular consola nipona de 8-bits. El evento lleva 12 aÃ±os ocurriendo, e invita a artistas de todo el mundo a que presenten sus propios diseÃ±os de juegos que no existen, pero que sus portadas son lo suficientemente buenas como para que uno diga: â€œWow, se ve interesante Â¿me pregunto cÃ³mo serÃ¡ el juego?â€.', 'Salvo en un par de excepciones (como â€œThe Legend of Zeldaâ€) los cartuchos de NES se caracterizan por tener un tono gris. Pero en JapÃ³n con su equivalente el FAMICON, el asunto era otro cantar, ya', '18/5/2016', '', '', 1, 1, 1),
(6, 1, 'Top 8 personajes Mahou Shoujo', 'Hoy en dÃ­a la oferta de series incluye tanto a aquellas que buscan al nicho original, pero tambiÃ©n otras que usan elementos clÃ¡sicos del gÃ©nero, con el agregado de tener historias mÃ¡s complejas que han sido bien recibidas por el pÃºblico general. Ejemplo de ello se puede ver en una encuesta realizada por el sitio Charapedia, donde se les preguntÃ³ a 10,000 japoneses por su personaje Mahou Shoujo favorito en el Anime. Con una participaciÃ³n de 65.2% masculina, y un 34.8% femenina, estos fueron los resultados:\r\n\r\n1.- Madoka Kaname (Mahou Shoujo Madoka Magica)\r\n\r\n2.- Homura Akemi (Mahou Shoujo Madoka Magica)\r\n\r\n3.- Sakura Kinomoto (CardCaptor Sakura)\r\n\r\n4.- Takamachi (MahÅ ShÅjo Lyrical Nanoha)\r\n\r\n5.- Illya (Fate/kaleid liner Prisma Illya)\r\n\r\n6.- Tomoe Mami (Mahou Shoujo Madoka Magica)\r\n\r\n7.- Fate Testarossa (MahÅ ShÅjo Lyrical Nanoha)\r\n\r\n8.- Doremi Harukaze (Ojamajo Doremi)', 'Si bien el gÃ©nero â€œMahou Shoujoâ€ originalmente apuntaba al nicho de mujeres jÃ³venes como audiencia. Pero poco a poco han aparecido propuestas que demuestran que este tipo de historias no tienen ', '18/5/2016', '', '', 1, 1, 1);
