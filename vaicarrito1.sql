-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 16-05-2022 a las 01:58:09
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
-- Base de datos: `vaicarrito1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `img` text DEFAULT NULL,
  `cod` varchar(50) DEFAULT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `pre` double(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `img`, `cod`, `nom`, `pre`) VALUES
(1, 'img/mesa.png', 'KDFI1', 'Mesa', 12.00),
(3, 'img/radio.png', 'P4KU1L', 'Radio', 32.00),
(4, 'img/silla.png', 'KFJD31', 'Silla', 3.00),
(5, 'img/sofa.png', 'ASDKQ1', 'Sofa', 10.00),
(6, 'img/tv.png', 'OQMKEM4', 'Televisor', 41.00),
(7, 'img/microondas.png', 'AAS2DGE', 'Microondas', 32.00);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
