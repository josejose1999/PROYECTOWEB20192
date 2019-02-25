-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-02-2019 a las 15:16:35
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `optica`
--
CREATE DATABASE IF NOT EXISTS `optica` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci */;
USE `optica`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE IF NOT EXISTS `citas` (
  `id` int(11) NOT NULL,
  `FechaTentativa` date NOT NULL,
  `HoraCita` time(6) NOT NULL,
  `NombreOptica` varchar(100) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Celular` varchar(100) NOT NULL,
  `Telefono` varchar(100) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  PRIMARY KEY(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`id`, `FechaTentativa`, `HoraCita`, `NombreOptica`, `Nombre`, `Celular`, `Telefono`, `Correo`) VALUES
(1, '2019-02-13', '15:00:00.000000', 'lisseth corporation', 'lisseth matias', '9148887722', '2670259', 'shirleym96@hotmail.com'),
(2, '2019-02-08', '15:00:00.000000', 'llllllll', 'fernandez', '9148887722', '2670259', 'shirleym96@hotmail.com'),
(3, '2019-02-09', '14:00:00.000000', 'miriam', 'miriam fernandez', '9148887722', '2670259', 'shirleym96@hotmail.com'),
(4, '2019-02-14', '14:00:00.000000', 'miriam', 'lisseth matias', '9148887722', '2670259', 'shirleym96@hotmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--
CREATE TABLE IF NOT EXISTS `productos` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL DEFAULT '0',
  `image` varchar(200) NOT NULL DEFAULT '0',
  `price` double(10,2) NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `name`, `image`, `price`) VALUES
(14, 'lente acuatico', '1.jpg', 1221.00),
(17, 'lente de sol', '3.jpg', 5454.00),
(19, 'lente de viejo', '15.jpg', 99999999.99),
(20, 'lente sapo', '6.jpg', 123.00),
(21, 'lente de zorro', '7.jpg', 989.00),
(22, 'lente cafe', '2.jpg', 600.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE IF NOT EXISTS `tipo_usuario` (
  `id_tipo` int(11) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  PRIMARY KEY (`id_tipo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`id_tipo`, `tipo`) VALUES
(1, 'usuario'),
(2, 'administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL DEFAULT '0',
  `Apellido` varchar(50) NOT NULL DEFAULT '0',
  `Sexo` tinyint(4) NOT NULL DEFAULT '0',
  `FechaNacimiento` varchar(20) DEFAULT NULL,
  `FechaRegistro` varchar(20) DEFAULT NULL,
  `Correo` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `id_tipo` int(11) NOT NULL,
  `foto` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `Nombre`, `Apellido`, `Sexo`, `FechaNacimiento`, `FechaRegistro`, `Correo`, `username`, `password`, `id_tipo`, `foto`) VALUES
(4, 'sebastian', 'adsadd', 1, '3183-02-12', '2019-02-21', 'sdsjd@gof.com', 'sebas', '0d40d9aea2b3b5a149dc34495fff0a0a', 2, ''),
(5, 'Liset Sapa', 'Cabeza de Pato', 2, '3932-03-21', '2019-02-21', 'dsdj@hof.com', 'lise', 'e8d2a7b40868c9953638abcdae19e4ed', 1, ''),
(7, 'sjasasj', 'djadsjs', 1, '2283-03-12', '2019-02-21', 'dsds@gofdk.com', '', '', 1, ''),
(8, 'sapo', 'qekesjd', 1, '2332-03-12', '2019-02-21', 'wsdd@gmail.com', 'sapo', '28ea19352381b8659df830dd6d5c90a3', 1, ''),
(9, 'Luigi', 'Arreaga', 0, '1998-02-06', NULL, 'luigi.arreagawda@djxj.com', 'luigi', 'd9b1d7db4cd6e70935368a1efb10e377', 1, '2019-02-23');

--
-- Estructura para la tabla factura
--
CREATE TABLE IF NOT EXISTS `factura` (
  `num_factura` int(12) NOT NULL AUTO_INCREMENT,
  `id_cliente` int(11) NOT NULL,
  `fecha` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`num_factura`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
--
-- Estructura para la tabla detalle
--
CREATE TABLE IF NOT EXISTS `detalle` (
  `num_detalle` varchar(10) NOT NULL,
  `num_factura` int(12) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(5) NOT NULL,
  `precio` double(7,2) NOT NULL,
  PRIMARY KEY (`num_detalle`,`num_factura`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
--
-- Datos facturas
--
INSERT INTO `factura`(`num_factura`, `id_cliente`, `fecha`) VALUES (1,9,'24/02/2019');
INSERT INTO `detalle`(`num_detalle`, `num_factura`, `id_producto`, `cantidad`, `precio`) VALUES 
(1,1,14,5,6105),
(2,1,17,1,5454);

INSERT INTO `factura`(`num_factura`, `id_cliente`, `fecha`) VALUES (2,9,'23/02/2019');
INSERT INTO `detalle`(`num_detalle`, `num_factura`, `id_producto`, `cantidad`, `precio`) VALUES 
(1,2,20,2,246),
(2,2,22,1,600);


ALTER TABLE `citas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

alter table `factura` add foreign key (`id_cliente`) references `usuarios`(`id`);
alter table `detalle` add foreign key (`id_producto`) references `productos`(`id`);
alter table `detalle` add foreign key (`num_factura`) references `factura`(`num_factura`);
alter table `usuarios` add foreign key (`id_tipo`) references `tipo_usuario`(`id_tipo`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
