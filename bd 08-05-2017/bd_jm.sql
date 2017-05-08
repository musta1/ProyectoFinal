-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-05-2017 a las 16:04:44
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_jm`
--
CREATE DATABASE IF NOT EXISTS `bd_jm` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bd_jm`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_cliente`
--

CREATE TABLE `tbl_cliente` (
  `cliente_id` int(11) NOT NULL,
  `cliente_nombre` varchar(20) NOT NULL,
  `cliente_apellido1` varchar(20) NOT NULL,
  `cliente_apellido2` varchar(20) NOT NULL,
  `cliente_fecha` date NOT NULL,
  `cliente_peso` decimal(6,0) NOT NULL,
  `cliente_altura` decimal(5,0) NOT NULL,
  `cliente_sexo` varchar(9) NOT NULL,
  `cliente_telefono` int(9) NOT NULL,
  `cliente_email` varchar(100) NOT NULL,
  `cliente_password` int(20) NOT NULL,
  `cliente_categoria` enum('Admin','Usuario','Dietista','') NOT NULL,
  `dietas_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELACIONES PARA LA TABLA `tbl_cliente`:
--   `dietas_id`
--       `tbl_dietas` -> `dietas_id`
--

--
-- Volcado de datos para la tabla `tbl_cliente`
--

INSERT INTO `tbl_cliente` (`cliente_id`, `cliente_nombre`, `cliente_apellido1`, `cliente_apellido2`, `cliente_fecha`, `cliente_peso`, `cliente_altura`, `cliente_sexo`, `cliente_telefono`, `cliente_email`, `cliente_password`, `cliente_categoria`, `dietas_id`) VALUES
(1, 'Hector', 'Jimenez', 'Jimenez', '1994-07-13', '78', '180', 'masculino', 545456464, 'hector@gmail.com', 123, 'Usuario', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_dietas`
--

CREATE TABLE `tbl_dietas` (
  `dietas_id` int(11) NOT NULL,
  `dietas_nombre` varchar(30) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `dietista_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELACIONES PARA LA TABLA `tbl_dietas`:
--

--
-- Volcado de datos para la tabla `tbl_dietas`
--

INSERT INTO `tbl_dietas` (`dietas_id`, `dietas_nombre`, `menu_id`, `dietista_id`) VALUES
(1, 'Adelgazar', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_dietista`
--

CREATE TABLE `tbl_dietista` (
  `dietas_id` int(11) NOT NULL,
  `cliente_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELACIONES PARA LA TABLA `tbl_dietista`:
--   `cliente_id`
--       `tbl_cliente` -> `cliente_id`
--

--
-- Volcado de datos para la tabla `tbl_dietista`
--

INSERT INTO `tbl_dietista` (`dietas_id`, `cliente_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_direccion`
--

CREATE TABLE `tbl_direccion` (
  `direccion_id` int(11) NOT NULL,
  `direccion` varchar(250) NOT NULL,
  `cliente_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELACIONES PARA LA TABLA `tbl_direccion`:
--   `cliente_id`
--       `tbl_cliente` -> `cliente_id`
--

--
-- Volcado de datos para la tabla `tbl_direccion`
--

INSERT INTO `tbl_direccion` (`direccion_id`, `direccion`, `cliente_id`) VALUES
(1, 'Rambla de la Marina, 355 L''Hospitalet de Llobregat Barcelona', 1),
(2, 'Av. d''Europa, 56 L''Hospitalet de Llobregat Barcelona', 1),
(3, 'Avinguda Mare de Déu de Bellvitge, 259 L''Hospitalet de Llobregat Barcelona', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_menu`
--

CREATE TABLE `tbl_menu` (
  `menu_id` int(11) NOT NULL,
  `menu_semana` enum('Lunes','Martes','Miercoles','Jueves','Viernes') NOT NULL,
  `menu_comida` enum('Desayuno','Almuerzo','Comer','Merienda','Cena') NOT NULL,
  `dieta_id` int(11) NOT NULL,
  `plato_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELACIONES PARA LA TABLA `tbl_menu`:
--   `dieta_id`
--       `tbl_dietas` -> `dietas_id`
--   `plato_id`
--       `tbl_platos` -> `plato_id`
--

--
-- Volcado de datos para la tabla `tbl_menu`
--

INSERT INTO `tbl_menu` (`menu_id`, `menu_semana`, `menu_comida`, `dieta_id`, `plato_id`) VALUES
(1, 'Lunes', 'Comer', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_pedido`
--

CREATE TABLE `tbl_pedido` (
  `pedido_id` int(11) NOT NULL,
  `pedido_detalle` varchar(250) NOT NULL,
  `pedido_hora` datetime NOT NULL,
  `menu_id` int(11) NOT NULL,
  `direccion_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELACIONES PARA LA TABLA `tbl_pedido`:
--   `direccion_id`
--       `tbl_direccion` -> `direccion_id`
--   `menu_id`
--       `tbl_menu` -> `menu_id`
--

--
-- Volcado de datos para la tabla `tbl_pedido`
--

INSERT INTO `tbl_pedido` (`pedido_id`, `pedido_detalle`, `pedido_hora`, `menu_id`, `direccion_id`) VALUES
(1, 'contiene 150g de pollo a la plancha', '2017-05-10 09:22:00', 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_platos`
--

CREATE TABLE `tbl_platos` (
  `plato_id` int(11) NOT NULL,
  `plato_nombre` varchar(30) NOT NULL,
  `plato_peso` int(3) NOT NULL,
  `plato_descripcion` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELACIONES PARA LA TABLA `tbl_platos`:
--

--
-- Volcado de datos para la tabla `tbl_platos`
--

INSERT INTO `tbl_platos` (`plato_id`, `plato_nombre`, `plato_peso`, `plato_descripcion`) VALUES
(1, 'Pollo', 150, 'Contiene 150g de Pollo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_cliente`
--
ALTER TABLE `tbl_cliente`
  ADD PRIMARY KEY (`cliente_id`);

--
-- Indices de la tabla `tbl_dietas`
--
ALTER TABLE `tbl_dietas`
  ADD PRIMARY KEY (`dietas_id`);

--
-- Indices de la tabla `tbl_dietista`
--
ALTER TABLE `tbl_dietista`
  ADD PRIMARY KEY (`dietas_id`);

--
-- Indices de la tabla `tbl_direccion`
--
ALTER TABLE `tbl_direccion`
  ADD PRIMARY KEY (`direccion_id`);

--
-- Indices de la tabla `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indices de la tabla `tbl_pedido`
--
ALTER TABLE `tbl_pedido`
  ADD PRIMARY KEY (`pedido_id`);

--
-- Indices de la tabla `tbl_platos`
--
ALTER TABLE `tbl_platos`
  ADD PRIMARY KEY (`plato_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_cliente`
--
ALTER TABLE `tbl_cliente`
  MODIFY `cliente_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `tbl_dietas`
--
ALTER TABLE `tbl_dietas`
  MODIFY `dietas_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `tbl_dietista`
--
ALTER TABLE `tbl_dietista`
  MODIFY `dietas_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `tbl_direccion`
--
ALTER TABLE `tbl_direccion`
  MODIFY `direccion_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `tbl_menu`
--
ALTER TABLE `tbl_menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `tbl_pedido`
--
ALTER TABLE `tbl_pedido`
  MODIFY `pedido_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `tbl_platos`
--
ALTER TABLE `tbl_platos`
  MODIFY `plato_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
