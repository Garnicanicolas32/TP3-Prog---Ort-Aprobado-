-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 02-09-2019 a las 15:01:33
-- Versión del servidor: 5.7.21
-- Versión de PHP: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistema`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

DROP TABLE IF EXISTS `categorias`;
CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`) VALUES
(1, 'Camisetas Copa America 2019'),
(2, 'Camisetas Superliga 2020');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

DROP TABLE IF EXISTS `productos`;
CREATE TABLE IF NOT EXISTS `productos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `codigo` varchar(50) NOT NULL,
  `precio` float NOT NULL,
  `descuento` float NOT NULL,
  `stockmin` int(11) NOT NULL,
  `stockactual` int(11) NOT NULL,
  `categoria` int(11) NOT NULL,
  `foto` int(11) NOT NULL,
  `video` int(11) NOT NULL,
  `desccorta` varchar(100) NOT NULL,
  `desclarga` varchar(200) NOT NULL,
  `destacado` tinyint(1) NOT NULL,
  `onsale` tinyint(1) NOT NULL,
  `mostrar` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `codigo`, `precio`, `descuento`, `stockmin`, `stockactual`, `categoria`, `foto`, `video`, `desccorta`, `desclarga`, `destacado`, `onsale`, `mostrar`) VALUES
(1, 'Camiseta Selección Argentina 2019', 'aaa000', 2499, 0, 50, 100, 1, 444444744, 444444744, 'Camiseta titular de la seleccion argentina en la copa america 2019', 'Camiseta titular de la seleccion argentina en la copa america 2019. Hecha de buana calidad', 0, 0, 0),
(2, 'Camiseta Selección Colombia 2019', 'aaa001', 1999, 10, 50, 100, 2, 44444744, 44444744, 'Camiseta titular de la seleccion colombiana en la copa america 2019', 'Camiseta titular de la seleccion colombiana en la copa america 2019. Hecha con buenos materiales.', 0, 1, 1),
(3, 'Camiseta Selección Qatar 2019', 'aaa002', 999, 50, 20, 50, 1, 4444744, 4444744, 'Camiseta titular de la seleccion Qatari en la copa america 2019', 'Camiseta titular de la seleccion Qatari en la copa america 2019. hecha con buenos materiales', 0, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `slider`
--

DROP TABLE IF EXISTS `slider`;
CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `foto` varchar(199) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `slider`
--

INSERT INTO `slider` (`id`, `nombre`, `foto`) VALUES
(1, 'slider2', 'foto1'),
(2, 'dd', 'aaa2222gh'),
(3, 'hola', 'fotog'),
(4, 'slider', 'aaa'),
(5, 'sliderl', 'aaa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `clave` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `mail`, `clave`) VALUES
(1, 'pau', 'pau@gmail.com', 'pau123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
