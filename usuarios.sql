-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-06-2023 a las 12:33:53
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `datos usuarios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `rol` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Id`, `email`, `password`, `rol`) VALUES
(1, 'xxx', '$2y$10$QqrXhSwyoliezMeYevApfO9ziMH0l0sXEjECny72UBdXQr0Yl3/qe', 2),
(2, 'xxxx', '$2y$10$WztZ/.DX1SsoBh18ad6d3eNZGpf5WG7m7v/oCn9d7gezxPK21OVYS', NULL),
(3, 'edwinramirez11e17@gmail.com', '$2y$10$/NtOL5cwcvYW5cixIswNzutN.9j5jVSigQZ2l3KD.bga1d.bzx0Qa', 2),
(4, 'edwin_jesus02@hotmail.com', '$2y$10$1zi3GkVFXIiIQusH0tg6k.MEYZX/CrKwLrkZDKfYChAD55.D9rsAC', NULL),
(5, 'edwin_jesus02@hotmail.com', '$2y$10$Lxq375VcSZpfS8jFUexxj./aPiMH55Gtv3HkA18cDvOD0rislucF6', NULL),
(6, 'edwinramirez11e172@gmail.com', '$2y$10$F1eMo8Q1S6.pL5ackTh3BO54Kg7yfF2kGJxQSmBcwoG4VL0VhGUfm', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
