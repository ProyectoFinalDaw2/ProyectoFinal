-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-03-2016 a las 19:41:28
-- Versión del servidor: 5.6.26
-- Versión de PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mangas`
--
DROP DATABASE IF EXISTS `mangas`;
CREATE DATABASE IF NOT EXISTS `mangas`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentariosmangas`
--
-- Creación: 30-03-2016 a las 17:26:32
--

DROP TABLE IF EXISTS `comentariosmangas`;
CREATE TABLE IF NOT EXISTS `comentariosmangas` (
  `id` int(200) NOT NULL,
  `comentario` varchar(200) NOT NULL,
  `idUsuario` int(200) NOT NULL,
  `idManga` int(200) NOT NULL
  
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELACIONES PARA LA TABLA `comentariosmangas`:
--   `idManga`
--       `mangas` -> `id`
--   `idUsuario`
--       `usuarios` -> `id`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentariosnoticia`
--
-- Creación: 30-03-2016 a las 17:26:17
--

DROP TABLE IF EXISTS `comentariosnoticia`;
CREATE TABLE IF NOT EXISTS `comentariosnoticia` (
  `id` int(200) NOT NULL,
  `comentario` varchar(200) NOT NULL,
  `idUsuario` int(200) NOT NULL,
  `idNoticia` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELACIONES PARA LA TABLA `comentariosnoticia`:
--   `idNoticia`
--       `noticias` -> `id`
--   `idUsuario`
--       `usuarios` -> `id`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `donacionescobros`
--
-- Creación: 30-03-2016 a las 17:33:48
--

DROP TABLE IF EXISTS `donacionescobros`;
CREATE TABLE IF NOT EXISTS `donacionescobros` (
  `id` int(200) NOT NULL,
  `modoPago` varchar(200) NOT NULL,
  `cantidad` float NOT NULL,
  `cuentaBancaria` varchar(200) NOT NULL,
  `fecha` date NOT NULL,
  `numSecreto` int(10) NOT NULL,
  `idUsuario` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELACIONES PARA LA TABLA `donacionescobros`:
--   `idUsuario`
--       `usuarios` -> `id`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mangas`
--
-- Creación: 30-03-2016 a las 17:14:28
--

DROP TABLE IF EXISTS `mangas`;
CREATE TABLE IF NOT EXISTS `mangas` (
  `id` int(200) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `fecha` date NOT NULL,
  `manga` varchar(2000) NOT NULL,
  `idUsuario` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELACIONES PARA LA TABLA `mangas`:
--   `idUsuario`
--       `usuarios` -> `id`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--
-- Creación: 30-03-2016 a las 17:24:57
--

DROP TABLE IF EXISTS `noticias`;
CREATE TABLE IF NOT EXISTS `noticias` (
  `id` int(200) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `noticia` text NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `fecha` date NOT NULL,
  `imagen` text NOT NULL,
  `video` text NOT NULL,
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELACIONES PARA LA TABLA `noticias`:
--   `idUsuario`
--       `usuarios` -> `id`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--
-- Creación: 30-03-2016 a las 17:12:28
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(200) NOT NULL,
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
  `administrador` tinyint(1) NOT NULL DEFAULT '0',
  `moderador` tinyint(1) NOT NULL DEFAULT '0',
  `uploader` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELACIONES PARA LA TABLA `usuarios`:
--

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentariosmangas`
--
ALTER TABLE `comentariosmangas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `comentariosnoticia`
--
ALTER TABLE `comentariosnoticia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `donacionescobros`
--
ALTER TABLE `donacionescobros`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `mangas`
--
ALTER TABLE `mangas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nick` (`nick`),
  ADD UNIQUE KEY `correo` (`correo`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentariosmangas`
--
ALTER TABLE `comentariosmangas`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `comentariosnoticia`
--
ALTER TABLE `comentariosnoticia`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `donacionescobros`
--
ALTER TABLE `donacionescobros`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `mangas`
--
ALTER TABLE `mangas`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
