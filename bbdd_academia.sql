-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-01-2023 a las 20:04:04
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `academia`
--
DROP DATABASE IF EXISTS `academia`;
CREATE DATABASE IF NOT EXISTS `academia` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `academia`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

DROP TABLE IF EXISTS `profesores`;
CREATE TABLE `profesores` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellidos` varchar(255) NOT NULL,
  `edad` int(11) NOT NULL,
  `curso` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `profesores`
--

INSERT INTO `profesores` (`id`, `nombre`, `apellidos`, `edad`, `curso`) VALUES
(13, 'Lola', 'Gonzalez', 34, 'js'),
(16, 'Juan', 'Perez', 33, 'css'),
(17, 'Manolo', 'AAAA', 43, 'js'),
(18, 'Manolo', 'AAAA', 43, 'js');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT current_timestamp(),
  `fecha_modificacion` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `email`, `password`, `imagen`, `fecha_creacion`, `fecha_modificacion`) VALUES
(2, 'tomas', 't@t.com', '81dc9bdb52d04dc20036dbd8313ed055', NULL, '2023-01-10 18:22:32', NULL),
(3, 'juan', 'juan@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', NULL, '2023-01-10 18:25:17', NULL),
(4, 'Maria', 'maria@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', NULL, '2023-01-10 18:59:33', NULL),
(5, 'Lucia', 'l@l.com', '81dc9bdb52d04dc20036dbd8313ed055', NULL, '2023-01-10 19:02:54', NULL),
(6, 'a', 'a@a', 'c20ad4d76fe97759aa27a0c99bff6710', NULL, '2023-01-10 19:04:01', NULL),
(7, 'ff', 'ff@ff', 'c4ca4238a0b923820dcc509a6f75849b', NULL, '2023-01-10 19:24:14', NULL),
(8, 'fff', 'ffff@ff', 'c4ca4238a0b923820dcc509a6f75849b', NULL, '2023-01-10 19:25:08', NULL),
(9, 'aaaad', 'a@a', 'c4ca4238a0b923820dcc509a6f75849b', NULL, '2023-01-10 19:26:01', NULL),
(10, 'f', 'ff@f', 'c81e728d9d4c2f636f067f89cc14862c', NULL, '2023-01-10 19:26:25', NULL),
(11, 'v', 'v@v', 'c81e728d9d4c2f636f067f89cc14862c', NULL, '2023-01-10 19:27:17', NULL),
(12, 'd', 'd@d', 'c4ca4238a0b923820dcc509a6f75849b', NULL, '2023-01-10 19:28:41', NULL),
(13, 'admin', 'admin@admin', '81dc9bdb52d04dc20036dbd8313ed055', NULL, '2023-01-11 17:55:58', NULL),
(14, 'admin', 'admin@admin', '81dc9bdb52d04dc20036dbd8313ed055', NULL, '2023-01-11 17:57:14', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `profesores`
--
ALTER TABLE `profesores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
