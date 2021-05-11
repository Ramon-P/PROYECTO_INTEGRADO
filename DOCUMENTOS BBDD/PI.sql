-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 11-05-2021 a las 07:12:28
-- Versión del servidor: 10.3.25-MariaDB-0ubuntu0.20.04.1
-- Versión de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `PI`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Notas`
--

CREATE TABLE `Notas` (
  `idnota` int(11) NOT NULL,
  `tittle` varchar(50) NOT NULL,
  `text` text NOT NULL,
  `fecha` date NOT NULL,
  `idtable` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `Notas`
--

INSERT INTO `Notas` (`idnota`, `tittle`, `text`, `fecha`, `idtable`) VALUES
(1, 'Cine ', 'Blade runner', '2021-05-10', 2),
(2, 'HIEFHUYGU7', 'GGTRTGHGRGHTRGYYTR', '2021-05-10', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Tablero`
--

CREATE TABLE `Tablero` (
  `idtable` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `Tablero`
--

INSERT INTO `Tablero` (`idtable`, `userid`, `nombre`) VALUES
(2, 1, 'trgtrggrhtgrhtgrhtgrhbrgh'),
(3, 2, 'DUART TABLE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuarios`
--

CREATE TABLE `Usuarios` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `vercode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `Usuarios`
--

INSERT INTO `Usuarios` (`id`, `username`, `email`, `password`, `vercode`) VALUES
(1, 'Rams', 'rams@rams', '1234', 123),
(2, 'Duart', 'duart@duart', '123', 768);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Notas`
--
ALTER TABLE `Notas`
  ADD PRIMARY KEY (`idnota`),
  ADD KEY `idtable` (`idtable`);

--
-- Indices de la tabla `Tablero`
--
ALTER TABLE `Tablero`
  ADD PRIMARY KEY (`idtable`),
  ADD KEY `userid` (`userid`);

--
-- Indices de la tabla `Usuarios`
--
ALTER TABLE `Usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Notas`
--
ALTER TABLE `Notas`
  MODIFY `idnota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `Tablero`
--
ALTER TABLE `Tablero`
  MODIFY `idtable` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `Usuarios`
--
ALTER TABLE `Usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Notas`
--
ALTER TABLE `Notas`
  ADD CONSTRAINT `Notas_ibfk_1` FOREIGN KEY (`idtable`) REFERENCES `Tablero` (`idtable`);

--
-- Filtros para la tabla `Tablero`
--
ALTER TABLE `Tablero`
  ADD CONSTRAINT `Tablero_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `Usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
