-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-04-2021 a las 18:35:57
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `zoologicooktal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblanimal`
--

CREATE TABLE `tblanimal` (
  `ani_id` int(10) NOT NULL,
  `ani_nombre` varchar(35) NOT NULL,
  `ani_especie` varchar(20) NOT NULL,
  `ani_sexo` varchar(10) NOT NULL,
  `ani_fnacimiento` date NOT NULL,
  `ani_fingreso` date NOT NULL,
  `ani_color` varchar(10) NOT NULL,
  `ani_raza` varchar(10) NOT NULL,
  `tblcuidador_cui_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblcria`
--

CREATE TABLE `tblcria` (
  `cri_id` int(10) NOT NULL,
  `cri_nombre` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblcuidador`
--

CREATE TABLE `tblcuidador` (
  `cui_id` int(10) NOT NULL,
  `cui_cedula` int(15) UNSIGNED NOT NULL,
  `cui_nombre` varchar(35) NOT NULL,
  `cui_apellido` varchar(35) NOT NULL,
  `cui_telefono` int(15) UNSIGNED NOT NULL,
  `cui_correo` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tblcuidador`
--

INSERT INTO `tblcuidador` (`cui_id`, `cui_cedula`, `cui_nombre`, `cui_apellido`, `cui_telefono`, `cui_correo`) VALUES
(2, 3455, 'Carlos Andres', 'Castañeda', 3106540205, 'cauribe56@misena.edu.co'),
(4, 224045, 'Miguel Angel', 'Castañeda', 3216426016, 'mauribe2026@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblsexo`
--

CREATE TABLE `tblsexo` (
  `sex_id` int(10) NOT NULL,
  `sex_nombre` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tblanimal`
--
ALTER TABLE `tblanimal`
  ADD PRIMARY KEY (`ani_id`),
  ADD KEY `tblcuidador_cui_id` (`tblcuidador_cui_id`);

--
-- Indices de la tabla `tblcria`
--
ALTER TABLE `tblcria`
  ADD PRIMARY KEY (`cri_id`);

--
-- Indices de la tabla `tblcuidador`
--
ALTER TABLE `tblcuidador`
  ADD PRIMARY KEY (`cui_id`);

--
-- Indices de la tabla `tblsexo`
--
ALTER TABLE `tblsexo`
  ADD PRIMARY KEY (`sex_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tblanimal`
--
ALTER TABLE `tblanimal`
  MODIFY `ani_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tblcria`
--
ALTER TABLE `tblcria`
  MODIFY `cri_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tblcuidador`
--
ALTER TABLE `tblcuidador`
  MODIFY `cui_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tblsexo`
--
ALTER TABLE `tblsexo`
  MODIFY `sex_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tblanimal`
--
ALTER TABLE `tblanimal`
  ADD CONSTRAINT `tblcuidador_cui_id` FOREIGN KEY (`tblcuidador_cui_id`) REFERENCES `tblcuidador` (`cui_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
