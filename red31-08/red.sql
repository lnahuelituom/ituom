-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-09-2014 a las 00:59:48
-- Versión del servidor: 5.6.20
-- Versión de PHP: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `red`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carreras`
--

CREATE TABLE IF NOT EXISTS `carreras` (
`id_carrera` int(5) NOT NULL,
  `carrera` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Volcado de datos para la tabla `carreras`
--

INSERT INTO `carreras` (`id_carrera`, `carrera`) VALUES
(13, 'Análisis de Sistemas'),
(14, 'Diseño Industrial'),
(15, 'Automatización y Robotica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
`id_usuario` int(5) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `id_carrera` int(5) NOT NULL,
  `descripcion` text NOT NULL,
  `usu_foto` varchar(30) NOT NULL,
  `usu_alta` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellido`, `mail`, `pass`, `id_carrera`, `descripcion`, `usu_foto`, `usu_alta`) VALUES
(1, 'Marisa', 'Genoud', 'henouddo@gmail.com', '123456', 1, 'probando ', 'foto5.jpg', '2014-06-06'),
(2, 'Lautaro', 'Nahuel', 'nahuel@gmail.com', '123456', 3, '', '', '0000-00-00'),
(3, 'Marcelo', 'Salinas', 'salinas@gmail.com', '123456', 4, '', '', '0000-00-00'),
(4, 'Flavia', 'Tula', 'tula@gmail.com', '123456', 6, '', '', '0000-00-00'),
(5, 'Marisa', 'Genoud', '', '13', 2014, 'henouddo@gmail.com', '123456', '0000-00-00'),
(6, 'Marisa', 'Genoud', 'hola', '13', 2014, 'henouddo@gmail.com', '123456', '0000-00-00'),
(7, 'Marisa', 'Genoud', 'fdasfasd', '13', 2014, 'henouddo@gmail.com', '123456', '0000-00-00'),
(8, 'Marisa', 'Genoud', '', '13', 2014, 'henouddo@gmail.com', '123456', '0000-00-00'),
(9, 'carlos', 'brada', '', '15', 2014, 'henouddo@gmail.com', '123456', '0000-00-00'),
(10, 'aaa', 'bbb', 'ccc', 'ddd', 15, '', '', '0000-00-00'),
(11, 'aaaa', 'bbbbb', 'ccccc', 'dddddd', 14, '', '', '0000-00-00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carreras`
--
ALTER TABLE `carreras`
 ADD PRIMARY KEY (`id_carrera`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
 ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carreras`
--
ALTER TABLE `carreras`
MODIFY `id_carrera` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
MODIFY `id_usuario` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
