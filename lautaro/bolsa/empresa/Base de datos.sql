-- phpMyAdmin SQL Dump
-- version 2.11.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 24-01-2008 a las 11:34:56
-- Versión del servidor: 5.0.45
-- Versión de PHP: 5.2.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Base de datos: `abm`
--
CREATE DATABASE `abm` ;
-- --------------------------------------------------------
use `abm`;
--
-- Estructura de tabla para la tabla `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(11) NOT NULL auto_increment,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `fecha_nac` date NOT NULL,
  `peso` double NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Volcar la base de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `apellido`, `fecha_nac`, `peso`) VALUES
(1, 'Lucas', 'Forchino', '2008-01-24', 95.5),
(2, 'Jorge', 'Solis', '1945-10-01', 55.2),
(3, 'Javier', 'Figueroa', '1981-09-02', 90),
(23, 'Jorge', 'Solisa', '2008-01-01', 55.2),
(24, 'Jorge', 'Solisan', '2007-12-01', 55.4);






CREATE TABLE IF NOT EXISTS `bolsa` (
  `id_bolsa` int(11) NOT NULL AUTO_INCREMENT,
  `empresa` varchar(50) NOT NULL,
  `desc_empresa` varchar(50) NOT NULL,
  `puesto` varchar(25) NOT NULL,
  `dispo` varchar(20) NOT NULL,
  PRIMARY KEY (`id_bolsa`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;






INSERT INTO `bolsa` (`id_bolsa`, `empresa`, `desc_empresa`, `puesto`, `dispo`) VALUES
(1, 'MTR S.A', 'MTA DESCRIPCION', 'Técnico / Ingeniero electrónico para Proyectos de Automatización', `Full-time`),
(2, 'CocaCola', 'Fabrica de gaseosas', 'Repartidor', `Full-Time`),
(3, 'Peugeot S.A', 'Fabrica de autos', 'Sistemas', `Full-time`);






id_bolsa
empresa
desc_empresa
puesto
dispo
