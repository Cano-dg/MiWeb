-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-02-2020 a las 14:43:16
-- Versión del servidor: 10.1.35-MariaDB
-- Versión de PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `empleadodaw`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `depart`
--

CREATE TABLE `depart` (
  `dept_no` int(5) NOT NULL,
  `dnombre` varchar(30) DEFAULT NULL,
  `loc` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `emple`
--

CREATE TABLE `emple` (
  `emp_no` int(5) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `oficio` varchar(30) DEFAULT NULL,
  `dir` int(5) DEFAULT NULL,
  `fecha_alt` date DEFAULT NULL,
  `salario` int(5) DEFAULT NULL,
  `comision` int(5) DEFAULT NULL,
  `dept_no` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `depart`
--
ALTER TABLE `depart`
  ADD PRIMARY KEY (`dept_no`);

--
-- Indices de la tabla `emple`
--
ALTER TABLE `emple`
  ADD PRIMARY KEY (`emp_no`),
  ADD KEY `fk_emple_depart` (`dept_no`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `emple`
--
ALTER TABLE `emple`
  ADD CONSTRAINT `fk_emple_depart` FOREIGN KEY (`dept_no`) REFERENCES `depart` (`dept_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
