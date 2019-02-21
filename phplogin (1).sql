-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-02-2019 a las 02:50:04
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
-- Base de datos: `phplogin`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `Id` mediumint(8) NOT NULL,
  `Name` varchar(64) NOT NULL,
  `Email` varchar(64) NOT NULL,
  `Password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`Id`, `Name`, `Email`, `Password`) VALUES
(0, 'luigi', 'lui.amarillo@hotmail.com', '$2y$10$Ec2fkT1vxn61f5y2H61T/uh9SSBA3vDXUP2LtIs/q1ZlBsjGveX92'),
(0, 'luigi', 'lui.amarillo@hotmail.es', '$2y$10$Tz.2jQuxgs/cEsyc9NpyUepdGqfZtSS1Qzy4imXcZ4gIyIeLZeSOy'),
(0, 'Luigi2', 'luigi@gmail.com', '$2y$10$eAWlYmoT2jMhZrgQjD36Meaop4uSzugHOyfwZVM4iIlEXd8MADnP.'),
(0, 'Luigi2', 'luigi@gmail.es', '$2y$10$3VxN.jFz4wex8u0f/Ze/1e.doCU3KPPiwbQ8wXKd6pkgXxDThMGxm'),
(0, 'Luigi2', 'luigi@gmail.ec', '$2y$10$I.1W4VHzODPCBg5AAMgItekLnL.zqAPtBApMRqJrPElGjYbD6kqQe'),
(0, 'luigi3', 'luigiap@ug.edu', '$2y$10$qTmUZVdR6vmoCyk5GIV0wODmyogIQEuatm.q69KS8XAe6wx1pz82G'),
(0, 'luigi10', 'luigi@ug.edu', '$2y$10$BS.xmoIvSivEf73lbq8GYuM/9Yfci8TLqK1hMH3V7hl5mDEqfQ276'),
(0, 'sapo', 'sapo@hotmail.com', '$2y$10$OV9MrmgTgPcrCPDkrKoOA.37x/vj1TaBA.p3zuVeUV7HRti8uAZ96'),
(0, 'sebastian', 'sebasqwer1@gmail.com', '$2y$10$ewJzNy/AAQY5V.63vWvjmup7RMu4UQJDbJ8EZCa/xcqKF9M4A7wOG'),
(0, 'pedro', 'dasfadfdf@gmail.com', '$2y$10$A6uOYrN0cBrsd45LrhbFVuL89sNZR8LDKoU3AdCkQ/5SWLYl.HgXa'),
(0, 'administrador', '123@gmail.com', '$2y$10$SNhhp9QahgkPoso04CBlq.q2bulix0HvMpjtV7ZPXc7s2uVZ/5iCm'),
(0, 'administrador', 'sebasqwer2@gmail.com', '$2y$10$yZwS2LfMiMtCep/MPCGKyOsRWuiaipTJK3WY9rtsNYxS/eSLURTUe');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
