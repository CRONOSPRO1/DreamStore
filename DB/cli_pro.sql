-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 25-11-2020 a las 17:50:45
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dreamstore`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cli_pro`
--

DROP TABLE IF EXISTS `cli_pro`;
CREATE TABLE IF NOT EXISTS `cli_pro` (
  `id_cli_pro` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(40) DEFAULT NULL,
  `apellido` varchar(40) DEFAULT NULL,
  `numero_identificacion` varchar(40) NOT NULL,
  `tipo_identificacion` varchar(30) NOT NULL,
  `direccion` varchar(40) DEFAULT NULL,
  `ciudad` varchar(30) NOT NULL,
  `email` varchar(40) DEFAULT NULL,
  `pass` varchar(250) NOT NULL,
  `telefono` varchar(30) DEFAULT NULL,
  `imagen` varchar(40) DEFAULT NULL,
  `rol` varchar(30) NOT NULL,
  `fecha_registro` date NOT NULL DEFAULT current_timestamp(),
  `condicion` int(11) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id_cli_pro`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cli_pro`
--

INSERT INTO `cli_pro` (`id_cli_pro`, `nombre`, `apellido`, `numero_identificacion`, `tipo_identificacion`, `direccion`, `ciudad`, `email`, `pass`, `telefono`, `imagen`, `rol`, `fecha_registro`, `condicion`) VALUES
(1, 'Juan  ', 'Arevalo', '123456789', 'Cedula', 'cra 4 ', 'Bogota', 'arevalojuan48@gmail.com', '123', '123', NULL, 'Usuario', '2020-11-20', 1),
(2, 'Carlos', 'Beltran', '1000022313', 'Cedula', 'Cra 4 cll 2', 'Bogota', 'carlos@gmail.com', '1233', '3123123112', NULL, 'Usuario', '2020-11-20', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
