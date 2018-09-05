-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-09-2018 a las 02:16:00
-- Versión del servidor: 5.6.15-log
-- Versión de PHP: 5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `dbtareas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ttareas`
--

CREATE TABLE IF NOT EXISTS `ttareas` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `Descr` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `F_Entrega` date NOT NULL,
  `Autor` int(11) NOT NULL,
  `Terminado` tinyint(1) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `ttareas`
--

INSERT INTO `ttareas` (`ID`, `Nombre`, `Descr`, `F_Entrega`, `Autor`, `Terminado`) VALUES
(1, 'Bagnar al perro', 'Bien', '2018-08-24', 1, 1),
(2, 'Tarea1', 'Algo', '2018-08-31', 1, 0),
(3, 'Tarea1', 'Algo', '2018-08-31', 1, 0),
(4, 'Tarea 2', 'Un rollo', '2018-08-25', 1, 0),
(5, 'Tarea 2', 'Un rollo', '2018-08-25', 1, 0),
(6, 'Tarea 2', 'Un rollo', '2018-08-25', 1, 0),
(7, 'm i nueva prueba', 'Rollo', '2018-09-04', 1, 0),
(8, 'm i nueva prueba', 'Rollo', '2018-09-04', 1, 0),
(9, 'otra', 'asdsadsa', '2018-09-15', 1, 0),
(10, 'Otra', 'asdad', '2018-09-23', 1, 0),
(11, 'Otra', 'asdad', '2018-09-23', 1, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
