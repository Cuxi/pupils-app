-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-02-2020 a las 20:38:36
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pupils_app`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `DNI` varchar(9) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellidos` varchar(100) NOT NULL,
  `Nacimiento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`DNI`, `Nombre`, `Apellidos`, `Nacimiento`) VALUES
('12345678D', 'Maria', 'Gomez Gomez', '1992-04-05'),
('14785236F', 'Rafael', 'Sotomonte', '1989-12-02'),
('23415698L', 'Timo', 'Werner', '1994-11-04'),
('23456789L', 'Timo', 'Sutterer', '1994-11-04'),
('30267641D', 'Maria', 'Gomez Quintanilla', '1992-04-05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignatura`
--

CREATE TABLE `asignatura` (
  `id` int(11) NOT NULL,
  `Asignatura` varchar(100) NOT NULL,
  `Nota` int(50) DEFAULT NULL,
  `DNI` varchar(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `asignatura`
--

INSERT INTO `asignatura` (`id`, `Asignatura`, `Nota`, `DNI`) VALUES
(2, 'Mates', 4, '12345678D'),
(3, 'Lengua', 6, '12345678D'),
(4, 'Inglés', 9, '12345678D'),
(5, 'Física', 7, '12345678D'),
(6, 'Mates', 6, '14785236F'),
(7, 'Lengua', 4, '14785236F'),
(8, 'Inglés', 9, '14785236F'),
(9, 'Biología', 6, '14785236F'),
(10, 'Mates', 6, '23415698L'),
(11, 'Lengua', 4, '23415698L'),
(12, 'Inglés', 9, '23415698L'),
(13, 'Biología', 6, '23415698L'),
(14, 'Mates', 6, '23456789L'),
(15, 'Lengua', 4, '23456789L'),
(16, 'Inglés', 9, '23456789L'),
(17, 'Biología', 6, '23456789L'),
(18, 'Mates', 6, '30267641D'),
(19, 'Lengua', 4, '30267641D'),
(20, 'Inglés', 9, '30267641D'),
(21, 'Biología', 6, '30267641D'),
(22, 'CTM', 7, '23415698L');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telefono`
--

CREATE TABLE `telefono` (
  `Telefono` int(15) NOT NULL,
  `DNI` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `telefono`
--

INSERT INTO `telefono` (`Telefono`, `DNI`) VALUES
(687895647, '12345678D'),
(985654741, '12345678D'),
(658986142, '14785236F'),
(456789123, '23415698L'),
(627984625, '23415698L'),
(965856325, '23415698L'),
(954677359, '23456789L'),
(654789321, '30267641D'),
(987456258, '30267641D');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`DNI`);

--
-- Indices de la tabla `asignatura`
--
ALTER TABLE `asignatura`
  ADD PRIMARY KEY (`id`),
  ADD KEY `DNI` (`DNI`),
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `telefono`
--
ALTER TABLE `telefono`
  ADD PRIMARY KEY (`Telefono`),
  ADD KEY `DNI` (`DNI`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asignatura`
--
ALTER TABLE `asignatura`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asignatura`
--
ALTER TABLE `asignatura`
  ADD CONSTRAINT `asignatura_ibfk_1` FOREIGN KEY (`DNI`) REFERENCES `alumno` (`DNI`);

--
-- Filtros para la tabla `telefono`
--
ALTER TABLE `telefono`
  ADD CONSTRAINT `telefono_ibfk_1` FOREIGN KEY (`DNI`) REFERENCES `alumno` (`DNI`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
