-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-08-2021 a las 00:47:11
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
-- Base de datos: `id17081747_concesionaria_havanette`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `automotor`
--

CREATE TABLE `automotor` (
  `id_automotor` int(5) NOT NULL,
  `matricula` varchar(15) NOT NULL,
  `marca` varchar(25) NOT NULL,
  `tipo` varchar(40) NOT NULL,
  `modelo` year(4) NOT NULL,
  `equipamiento` text NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `precio_ofrecido` int(15) NOT NULL,
  `condicion` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `automotor`
--

INSERT INTO `automotor` (`id_automotor`, `matricula`, `marca`, `tipo`, `modelo`, `equipamiento`, `imagen`, `precio_ofrecido`, `condicion`) VALUES
(94, 'AA123AA', 'PEUGEOT', '207 XT FELIN 1.4 HDI', 2012, ' 135.00 KM\r\nAirbags, Abs\r\nClimatizador AutomÃ¡tico\r\nLevanta vidrios y espejos elÃ©ctricos\r\n4 cubiertas nuevas', 'imagenes/207.jpeg', 700000, 'Usado'),
(95, 'AA123AB', 'FIAT', '500 1.4 8V CULT', 2012, ' 76.000 KM\r\nAirbags, Abs.\r\nAire y direcciÃ³n\r\nLevantavidrios y espejos automÃ¡ticos\r\nModelo Sport\r\n4 Cubiertas nuevas', 'imagenes/500.jpeg', 1090000, 'Usado'),
(96, 'AA123AC', 'VOLKSWAGEN', 'AMAROK HIGHLINE PACK 4X2', 2011, '172.000 KM\r\nAsientos de cuero, caja 6ta. manual\r\nClimatizador bi-zona, airbags frontales y laterales\r\nCubiertas Michelin en excelente estado', 'imagenes/amarok.jpeg', 2150000, 'Usado'),
(101, 'AA123AD', 'VOLKSWAGEN', 'GOL TREND 1.6 PACK 1', 2015, ' 65.000 KM\r\nAirbags y Abs\r\nAire y direcciÃ³n, alarma y cierre\r\n4 cubiertas en excelente estado, llantas', 'imagenes/Gol.jpeg', 950000, 'Usado'),
(102, 'AA123AE', 'TOYOTA', 'HILUX 2.8 SRV MT 4x2', 2017, ' 76.000 KM\r\nAirbags, Abs\r\nCaja manual de 6ta.\r\nVelocidad crucero\r\nPantalla tÃ¡ctil\r\nExcelente estado', 'imagenes/hilux.jpg', 2860000, 'Usado');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `automotor`
--
ALTER TABLE `automotor`
  ADD PRIMARY KEY (`id_automotor`),
  ADD UNIQUE KEY `matricula` (`matricula`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `automotor`
--
ALTER TABLE `automotor`
  MODIFY `id_automotor` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
