-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-07-2021 a las 20:38:39
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Usuario` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `Email` varchar(65) NOT NULL,
  `hora` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`id`, `Nombre`, `Usuario`, `password`, `Email`, `hora`) VALUES
(43, 'alejo cabrera', 'alejo', '1234', 'Email', '2021-07-07 16:49:23.755960'),
(45, 'kiki', 'flor', '1234', 'Email', '2021-07-07 17:56:34.109195'),
(46, 'rau', 'rau', '1234', 'Email', '2021-07-08 11:12:06.800112'),
(50, 'dante', 'dante', '1234', 'Email', '0000-00-00 00:00:00.000000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logins`
--

CREATE TABLE `logins` (
  `id` int(100) NOT NULL,
  `cliente` varchar(100) NOT NULL,
  `tiempo` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `logins`
--

INSERT INTO `logins` (`id`, `cliente`, `tiempo`) VALUES
(26, 'alejo', '2021-07-12 09:18:17.251348'),
(27, 'alejo', '2021-07-12 09:18:27.047361'),
(28, 'alejo', '2021-07-12 09:32:10.480080'),
(29, 'alejo', '2021-07-12 09:32:29.006975'),
(30, 'alejo', '2021-07-12 09:32:32.813814'),
(31, 'alejo', '2021-07-12 09:32:47.852010'),
(32, 'alejo', '2021-07-12 09:41:43.667792'),
(33, 'alejo', '2021-07-12 09:41:51.062314'),
(34, 'alejo', '2021-07-12 09:41:53.753023'),
(35, 'alejo', '2021-07-12 09:56:55.981806'),
(36, 'alejo', '2021-07-12 09:57:03.647302'),
(38, 'alejo', '2021-07-12 09:58:28.263317'),
(39, 'alejo', '2021-07-12 10:23:05.688420'),
(40, 'alejo', '2021-07-12 10:23:09.262344'),
(41, 'alejo', '2021-07-12 10:23:53.674819'),
(42, 'alejo', '2021-07-12 10:23:56.595488'),
(43, 'alejo', '2021-07-12 10:35:36.381242'),
(44, 'alejo', '2021-07-12 10:35:39.346779'),
(45, 'alejo', '2021-07-12 10:43:16.846196'),
(46, 'alejo', '2021-07-12 10:43:21.280647'),
(47, 'alejo', '2021-07-12 10:43:27.113270'),
(48, 'alejo', '2021-07-12 10:50:00.664928'),
(49, 'alejo', '2021-07-12 10:50:07.212508'),
(50, 'alejo', '2021-07-12 10:50:10.344998'),
(51, 'alejo', '2021-07-12 10:55:39.542667'),
(52, 'alejo', '2021-07-12 10:55:51.544205'),
(53, 'alejo', '2021-07-12 10:57:02.268910');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Usuario` (`Usuario`);

--
-- Indices de la tabla `logins`
--
ALTER TABLE `logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `logins_registros_fk` (`cliente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos`
--
ALTER TABLE `datos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de la tabla `logins`
--
ALTER TABLE `logins`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `logins`
--
ALTER TABLE `logins`
  ADD CONSTRAINT `logins_registros_fk` FOREIGN KEY (`cliente`) REFERENCES `datos` (`Usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
