-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 07-06-2011 a las 16:43:05
-- Versión del servidor: 5.0.51
-- Versión de PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `sesiones_php`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `usuariossesiones`
-- 

CREATE TABLE `usuariossesiones` (
  `id_usuario` int(100) NOT NULL auto_increment,
  `nombres` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `edad` varchar(100) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `contrasena` varchar(100) NOT NULL,
  PRIMARY KEY  (`id_usuario`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- 
-- Volcar la base de datos para la tabla `usuariossesiones`
-- 

INSERT INTO `usuariossesiones` VALUES (1, 'Nombre de Ejemplo', 'Apellido de Ejemplo', '26', 'mauricio', '123456');
