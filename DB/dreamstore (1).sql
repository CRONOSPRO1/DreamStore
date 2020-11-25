-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 25-11-2020 a las 23:01:36
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
-- Estructura de tabla para la tabla `administrador`
--

DROP TABLE IF EXISTS `administrador`;
CREATE TABLE IF NOT EXISTS `administrador` (
  `id_adminsitrador` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_administrador` varchar(40) DEFAULT NULL,
  `apellido` varchar(40) DEFAULT NULL,
  `numero_identificacion` varchar(40) DEFAULT NULL,
  `direccion` varchar(40) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `telefono` varchar(30) DEFAULT NULL,
  `foto` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id_adminsitrador`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bolsa_productos`
--

DROP TABLE IF EXISTS `bolsa_productos`;
CREATE TABLE IF NOT EXISTS `bolsa_productos` (
  `id_bolsa` int(11) NOT NULL AUTO_INCREMENT,
  `id_producto` int(11) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_bolsa`),
  KEY `fk_bolsa_producto` (`id_producto`),
  KEY `fk_bolsa_usuario` (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

DROP TABLE IF EXISTS `categorias`;
CREATE TABLE IF NOT EXISTS `categorias` (
  `id_categoria` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_categoria` varchar(40) DEFAULT NULL,
  `descripcion_categoria` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_categoria`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `nombre_categoria`, `descripcion_categoria`) VALUES
(1, 'Tecnologia', 'Todos los productos de tecnologia ,telefonos ,audifonos,computadores ,etc');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chat`
--

DROP TABLE IF EXISTS `chat`;
CREATE TABLE IF NOT EXISTS `chat` (
  `id_chat` int(11) NOT NULL AUTO_INCREMENT,
  `emisor` int(11) DEFAULT NULL,
  `receptor` int(11) DEFAULT NULL,
  `mensajes` varchar(250) NOT NULL,
  `imagen` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_chat`),
  KEY `fk_chat_emisor_clipro` (`emisor`),
  KEY `fk_chat_receptor_clipro` (`receptor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingresos`
--

DROP TABLE IF EXISTS `ingresos`;
CREATE TABLE IF NOT EXISTS `ingresos` (
  `id_ingreso` int(11) NOT NULL AUTO_INCREMENT,
  `hora` time DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `tipo` varchar(30) NOT NULL,
  PRIMARY KEY (`id_ingreso`),
  KEY `fk_ingresos_clipro` (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mis_compras`
--

DROP TABLE IF EXISTS `mis_compras`;
CREATE TABLE IF NOT EXISTS `mis_compras` (
  `id_compra` int(11) NOT NULL AUTO_INCREMENT,
  `id_comprador` int(11) DEFAULT NULL,
  `idProducto` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_compra`),
  KEY `fk_compras_clipro` (`id_comprador`),
  KEY `fk_compras_producto` (`idProducto`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `mis_compras`
--

INSERT INTO `mis_compras` (`id_compra`, `id_comprador`, `idProducto`) VALUES
(1, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

DROP TABLE IF EXISTS `pedidos`;
CREATE TABLE IF NOT EXISTS `pedidos` (
  `id_pedido` int(11) NOT NULL AUTO_INCREMENT,
  `id_producto` int(11) DEFAULT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  `estado` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_pedido`),
  KEY `fk_pedidos_clipro` (`id_cliente`),
  KEY `fk_pedidos_producto` (`id_producto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

DROP TABLE IF EXISTS `productos`;
CREATE TABLE IF NOT EXISTS `productos` (
  `id_producto` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_producto` varchar(40) NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `ciudad` varchar(40) DEFAULT NULL,
  `categoria` int(11) DEFAULT NULL,
  `precio` int(100) DEFAULT NULL,
  `imagen` varchar(100) DEFAULT NULL,
  `id_vendedor` int(11) DEFAULT NULL,
  `estado` varchar(30) NOT NULL,
  PRIMARY KEY (`id_producto`),
  KEY `fk_productos_categoria` (`categoria`),
  KEY `fk_productos_usuarios` (`id_vendedor`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `nombre_producto`, `descripcion`, `cantidad`, `ciudad`, `categoria`, `precio`, `imagen`, `id_vendedor`, `estado`) VALUES
(1, 'Audifonos Sony', 'Diafragmas de neodimio de 30 mm, Rango de frecuencia 10-24.000 Hz, Diseño plegable compacto\r\n', 2, 'Bogota', 1, 40000, '', 1, 'Disponible'),
(2, 'Honor 8x', 'Camara 24mp\r\nBateria 3700 Mh', 2, 'Bogota', 1, 700000, NULL, 2, 'Disponible');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `quejas`
--

DROP TABLE IF EXISTS `quejas`;
CREATE TABLE IF NOT EXISTS `quejas` (
  `id_queja` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) DEFAULT NULL,
  `queja` varchar(255) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `hora` time NOT NULL DEFAULT current_timestamp(),
  `imagen` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_queja`),
  KEY `fk_quejas_clipro` (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `quejas`
--

INSERT INTO `quejas` (`id_queja`, `id_usuario`, `queja`, `fecha`, `hora`, `imagen`) VALUES
(1, 2, 'Mis productos no se dejan subir a la plataforma', '2020-11-20 00:00:00', '09:18:09', NULL);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `bolsa_productos`
--
ALTER TABLE `bolsa_productos`
  ADD CONSTRAINT `fk_bolsa_producto` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`),
  ADD CONSTRAINT `fk_bolsa_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `cli_pro` (`id_cli_pro`);

--
-- Filtros para la tabla `chat`
--
ALTER TABLE `chat`
  ADD CONSTRAINT `fk_chat_emisor_clipro` FOREIGN KEY (`emisor`) REFERENCES `cli_pro` (`id_cli_pro`),
  ADD CONSTRAINT `fk_chat_receptor_clipro` FOREIGN KEY (`receptor`) REFERENCES `cli_pro` (`id_cli_pro`);

--
-- Filtros para la tabla `ingresos`
--
ALTER TABLE `ingresos`
  ADD CONSTRAINT `fk_ingresos_clipro` FOREIGN KEY (`id_usuario`) REFERENCES `cli_pro` (`id_cli_pro`);

--
-- Filtros para la tabla `mis_compras`
--
ALTER TABLE `mis_compras`
  ADD CONSTRAINT `fk_compras_clipro` FOREIGN KEY (`id_comprador`) REFERENCES `cli_pro` (`id_cli_pro`),
  ADD CONSTRAINT `fk_compras_producto` FOREIGN KEY (`idProducto`) REFERENCES `productos` (`id_producto`);

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `fk_pedidos_clipro` FOREIGN KEY (`id_cliente`) REFERENCES `cli_pro` (`id_cli_pro`),
  ADD CONSTRAINT `fk_pedidos_producto` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `fk_productos_categoria` FOREIGN KEY (`categoria`) REFERENCES `categorias` (`id_categoria`),
  ADD CONSTRAINT `fk_productos_usuarios` FOREIGN KEY (`id_vendedor`) REFERENCES `cli_pro` (`id_cli_pro`);

--
-- Filtros para la tabla `quejas`
--
ALTER TABLE `quejas`
  ADD CONSTRAINT `fk_quejas_clipro` FOREIGN KEY (`id_usuario`) REFERENCES `cli_pro` (`id_cli_pro`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
