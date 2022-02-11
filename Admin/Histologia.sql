-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-02-2022 a las 09:03:31
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `histologia`
--
CREATE DATABASE IF NOT EXISTS `histologia` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `histologia`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria1`
--

DROP TABLE IF EXISTS `categoria1`;
CREATE TABLE `categoria1` (
  `id_cat1` int(11) NOT NULL,
  `nombre` varchar(256) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `categoria1`
--

INSERT INTO `categoria1` (`id_cat1`, `nombre`) VALUES
(1, 'organos'),
(2, 'tejidos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria2`
--

DROP TABLE IF EXISTS `categoria2`;
CREATE TABLE `categoria2` (
  `id_cat1` int(11) NOT NULL,
  `id_cat2` int(11) NOT NULL,
  `nombre` varchar(256) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `categoria2`
--

INSERT INTO `categoria2` (`id_cat1`, `id_cat2`, `nombre`) VALUES
(2, 1, 'epitelios'),
(2, 2, 'glandulas'),
(2, 3, 'TC'),
(2, 4, 'cartilago'),
(2, 5, 'hueso'),
(2, 6, 'musculo'),
(2, 7, 'nervio'),
(2, 8, 'arteria'),
(2, 9, 'vena');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria3`
--

DROP TABLE IF EXISTS `categoria3`;
CREATE TABLE `categoria3` (
  `id_cat2` int(11) NOT NULL,
  `id_cat3` int(11) NOT NULL,
  `nombre` varchar(256) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `categoria3`
--

INSERT INTO `categoria3` (`id_cat2`, `id_cat3`, `nombre`) VALUES
(1, 10, 'epit pseudoestratificado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria4`
--

DROP TABLE IF EXISTS `categoria4`;
CREATE TABLE `categoria4` (
  `id_cat3` int(11) NOT NULL,
  `id_cat4` int(11) NOT NULL,
  `nombre` varchar(256) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

DROP TABLE IF EXISTS `imagenes`;
CREATE TABLE `imagenes` (
  `id` int(11) NOT NULL,
  `nombreImagen` varchar(128) COLLATE utf8_bin NOT NULL,
  `nombreCorto` varchar(256) COLLATE utf8_bin NOT NULL,
  `titulo` varchar(2048) COLLATE utf8_bin NOT NULL,
  `cat1` int(11) NOT NULL,
  `cat2` int(11) NOT NULL,
  `cat3` int(11) NOT NULL,
  `cat4` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`id`, `nombreImagen`, `nombreCorto`, `titulo`, `cat1`, `cat2`, `cat3`, `cat4`) VALUES
(1, 'imagen0001.jpg', 'img1', 'chopped cortado a lo largo', 1, 2, 10, 0),
(2, 'imagen0020.jpg', 'img2', 'Tejido Conjuntivo Plano', 1, 2, 10, 0),
(3, 'imagen0021.jpg', 'img3', 'Tejido Conjuntivo Fibroso', 1, 2, 10, 0),
(4, 'imagen0022.jpg', 'img4', 'Tejido Epitelial Fibroso', 1, 2, 10, 0),
(5, 'imagen0023.jpg', 'img5', 'Tejido Hígado Fibroso', 1, 2, 10, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria1`
--
ALTER TABLE `categoria1`
  ADD PRIMARY KEY (`id_cat1`);

--
-- Indices de la tabla `categoria2`
--
ALTER TABLE `categoria2`
  ADD PRIMARY KEY (`id_cat2`);

--
-- Indices de la tabla `categoria3`
--
ALTER TABLE `categoria3`
  ADD PRIMARY KEY (`id_cat3`);

--
-- Indices de la tabla `categoria4`
--
ALTER TABLE `categoria4`
  ADD PRIMARY KEY (`id_cat4`);

--
-- Indices de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria1`
--
ALTER TABLE `categoria1`
  MODIFY `id_cat1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `categoria2`
--
ALTER TABLE `categoria2`
  MODIFY `id_cat2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `categoria3`
--
ALTER TABLE `categoria3`
  MODIFY `id_cat3` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `categoria4`
--
ALTER TABLE `categoria4`
  MODIFY `id_cat4` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
