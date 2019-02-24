-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-02-2019 a las 07:47:17
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
-- Base de datos: `user`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL DEFAULT '0',
  `image` varchar(200) NOT NULL DEFAULT '0',
  `price` double(10,2) NOT NULL DEFAULT '0.00'
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

CREATE TABLE `tipo_usuario` (
  `id_tipo` int(11) NOT NULL,
  `tipo` varchar(20) NOT NULL
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

CREATE TABLE `usuarios` (
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
  `foto` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `Nombre`, `Apellido`, `Sexo`, `FechaNacimiento`, `FechaRegistro`, `Correo`, `username`, `password`, `id_tipo`, `foto`) VALUES
(4, 'sebastian', 'adsadd', 1, '3183-02-12', '2019-02-21', 'sdsjd@gof.com', 'sebas', '0d40d9aea2b3b5a149dc34495fff0a0a', 2, ''),
(5, 'Liset Sapa', 'Cabeza de Pato', 2, '3932-03-21', '2019-02-21', 'dsdj@hof.com', 'lise', 'e8d2a7b40868c9953638abcdae19e4ed', 1, ''),
(7, 'sjasasj', 'djadsjs', 1, '2283-03-12', '2019-02-21', 'dsds@gofdk.com', '', '', 0, ''),
(8, 'sapo', 'qekesjd', 1, '2332-03-12', '2019-02-21', 'wsdd@gmail.com', 'sapo', '28ea19352381b8659df830dd6d5c90a3', 1, ''),
(9, 'Luigi', 'Arreaga', 0, '1998-02-06', NULL, 'luigi.arreagawda@djxj.com', 'luigi', 'd9b1d7db4cd6e70935368a1efb10e377', 1, '2019-02-23');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`id_tipo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
