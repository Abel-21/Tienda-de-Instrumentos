-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-11-2019 a las 19:44:40
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `tienda3`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `apartado`
--

CREATE TABLE IF NOT EXISTS `apartado` (
  `fecha` date NOT NULL,
  `id_apartado` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
  `id_categorias` int(11) NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `descripcion`
--

CREATE TABLE IF NOT EXISTS `descripcion` (
  `tipo` varchar(20) NOT NULL,
  `marca` text NOT NULL,
  `modelo` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instrumento`
--

CREATE TABLE IF NOT EXISTS `instrumento` (
  `id_instrumento` int(50) NOT NULL,
  `disponibilidad` varchar(20) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `id_categoria` varchar(20) NOT NULL,
  `precio` varchar(20) NOT NULL,
  PRIMARY KEY (`id_instrumento`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `instrumento`
--

INSERT INTO `instrumento` (`id_instrumento`, `disponibilidad`, `nombre`, `id_categoria`, `precio`) VALUES
(1, '5', 'Guitarra Eléctrica Gibson Les Paul Tribute 2019', 'guitarra', '26500'),
(2, '6', 'Guitarra Taylor Premium 410CE', 'guitarra', '19000'),
(3, '7', 'Guitarra Memphis Gibson ES-335', 'guitarra', '6800'),
(4, '8', 'Guitarra Yamaha C80', 'guitarra', '4300'),
(5, '9', 'Bajo Fender Edicion limitada Telecaster 2018', 'bajos', '18300'),
(6, '5', 'Bajo Fender ROGER WATERS PRECISION BASS', 'bajos', '28000'),
(7, '5', 'Bajo Epiphone EB-3 Cherry', 'bajos', '9000'),
(8, '5', 'Bajo Fender AMERICAN ORIGINAL 60S', 'bajos', '34000'),
(9, '5', 'Sintetizador Workstation Yamaha Motifxf8 88 Teclas', 'teclados', '80000'),
(10, '5', 'Piano Kurzweil PC3A8', 'teclados', '75000'),
(11, '5', 'Piano Profesional Roland RD-2000', 'teclados', '70000'),
(12, '5', 'Teclado Digital Yamaha NP32', 'teclados', '9000'),
(13, '5', 'Bateria Yamaha Tmp0f4 Tour Custom Shell Pack, Hard', 'baterias', '33890'),
(14, '5', 'Batería Tama Stagestar azul', 'baterias', '13785'),
(15, '5', 'Bateria Electronica Roland Td17kv', 'baterias', '31699'),
(16, '5', 'Bateria Rydeen Yamaha Plata', 'baterias', '15499');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE IF NOT EXISTS `pedido` (
  `id_instrumento` int(50) NOT NULL,
  `cantidad` int(50) NOT NULL,
  `id_apartado` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(50) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(64) NOT NULL,
  `apellido_pat` varchar(64) NOT NULL,
  `apellido_mat` varchar(64) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `correo` varchar(64) NOT NULL,
  `telefono` int(10) NOT NULL,
  `direccion` varchar(64) NOT NULL,
  `psw` varchar(64) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `apellido_pat`, `apellido_mat`, `fecha_nacimiento`, `correo`, `telefono`, `direccion`, `psw`) VALUES
(6, 'Luis Fernando', 'Velázquez', 'Estudillo', '1996-10-31', 'fernandovelaz96@gmail.com', 2147483647, '17 de Junio #172', '123456');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
