-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-12-2021 a las 00:42:14
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdhagalo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE `articulo` (
  `idart` int(5) NOT NULL,
  `nombredelarticulo` varchar(40) NOT NULL,
  `precio` int(4) NOT NULL,
  `tipodearticulo` varchar(10) NOT NULL,
  `existenciadelart` varchar(2) NOT NULL,
  `formadepago` varchar(50) NOT NULL,
  `promocion` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `articulo`
--

INSERT INTO `articulo` (`idart`, `nombredelarticulo`, `precio`, `tipodearticulo`, `existenciadelart`, `formadepago`, `promocion`) VALUES
(2, 'block', 175, 'construcci', 'si', 'efectivo', 'Si'),
(241, 'cama', 600, 'madera', 'si', 'tarjeta', 'Si'),
(532, 'bloque', 250, 'construcci', 'Si', 'tarjeta', 'Si'),
(1233, 'retrete', 1200, 'baño', 'Si', 'efectivo', 'No');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `curp` varchar(18) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `apellido` varchar(40) NOT NULL,
  `edad` int(2) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `telefono` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`curp`, `nombre`, `apellido`, `edad`, `correo`, `direccion`, `telefono`) VALUES
('TATC040424HNELSA7', 'Yesenia', 'tovar', 35, 'josemtz2004@gmail.com', 'Piña 4556', 2147483647),
('TATW120600QJU2JNU4', 'Yesenia', 'Perez', 59, 'josemtz2004@gmail.com', 'lomas 4243', 656828746),
('TGDA123109DFV4HU4', 'Cesar', 'Talamantes', 21, 'paquita2005@gmail.com', 'lomas 4244', 2147483647);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `curp` varchar(18) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `apellido` varchar(40) NOT NULL,
  `telefono` int(10) NOT NULL,
  `edad` int(2) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `correo` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`curp`, `nombre`, `apellido`, `telefono`, `edad`, `direccion`, `correo`) VALUES
('TATC040424HNELSA7', 'Cesar', 'Talamantes', 2147483647, 21, 'lomas 4244', 'josemtz2004@gmail.com'),
('TDJS101202YNSUQ1W', 'Tania', 'tovar', 2147483647, 22, 'albo 32696', 'edsonguapo@gmail.com'),
('TGDA123109DFV4HU4', 'Pancha', 'Sanchez', 2147483647, 24, 'Piña 4556', 'paquita2005@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `idart` int(5) NOT NULL,
  `idempleado` int(3) NOT NULL,
  `idcliente` int(4) NOT NULL,
  `preciodelart` int(5) NOT NULL,
  `fechadeventa` date NOT NULL,
  `cantidad` int(2) NOT NULL,
  `nofactura` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`idart`, `idempleado`, `idcliente`, `preciodelart`, `fechadeventa`, `cantidad`, `nofactura`) VALUES
(2, 413, 3124, 320, '2021-12-01', 15, 543121);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD PRIMARY KEY (`idart`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`curp`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`curp`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`idart`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
