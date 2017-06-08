-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-06-2017 a las 21:15:31
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_jm`
--

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
  `cliente_categoria` enum('admin','usuario','dietista','') NOT NULL DEFAULT 'usuario',
  `dietas_id` int(11) NOT NULL,
  `cliente_objetivo` enum('Aumentar','Definición','Proteíca','Hipocalorica','HiperProteícas') NOT NULL,
  `coment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_cliente`
--

INSERT INTO `tbl_cliente` (`cliente_id`, `cliente_nombre`, `cliente_apellido1`, `cliente_apellido2`, `cliente_fecha`, `cliente_peso`, `cliente_altura`, `cliente_sexo`, `cliente_telefono`, `cliente_email`, `cliente_password`, `cliente_categoria`, `dietas_id`, `cliente_objetivo`, `coment`) VALUES
(1, 'Hector', 'Jimenez', 'Jimenez', '1994-07-13', '78', '181', 'hombre', 645456464, 'hector@gmail.com', 123, 'usuario', 3, 'Definición', ''),
(2, 'Javier', 'Acebo', 'Cordova', '1994-09-13', '65', '160', 'hombre', 687261559, 'javi@gmail.com', 123, 'admin', 0, '', ''),
(3, 'Mario', 'Bros', 'mario', '1997-11-09', '160', '180', 'hombre', 654654654, 'mario@gmail.com', 123, 'usuario', 3, 'Aumentar', ''),
(6, 'Leo', 'Messi', 'FCB', '1992-09-09', '67', '179', 'hombre', 635676767, 'messi@hotmail.com', 123, 'usuario', 1, 'Aumentar', 'alergia al gluten'),
(24, 'David', 'Marin', 'Daw', '1991-08-09', '70', '179', 'hombre', 933363763, 'david@gmail.com', 123, 'dietista', 2, 'Hipocalorica', ''),
(25, 'Cristiano', 'Ronaldo', 'CR7', '1985-07-11', '69', '181', 'hombre', 622656415, 'cr7@gmail.com', 123, 'usuario', 1, 'Definición', ''),
(26, 'Aron', 'Muñoz', 'Cuenca', '1997-12-17', '63', '178', 'hombre', 667530813, 'aron@realmadrid.com', 123, 'usuario', 2, 'Aumentar', ''),
(27, 'Agnes', 'Plans', 'Daw2', '1999-11-30', '77', '167', 'mujer', 654334556, 'aplans.joan23@fje.edu', 123, 'usuario', 3, 'Proteíca', ''),
(28, 'Toni', 'Fernandez', 'FP', '1972-06-08', '67', '183', 'hombre', 934465412, 'toni@gmail.com', 123, 'usuario', 3, 'Definición', ''),
(29, 'Marc', 'Petit', 'Nose', '1999-08-09', '76', '182', 'hombre', 665343535, 'petit@gmail.com', 123, 'usuario', 1, 'Aumentar', 'vegetariano');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_dietas`
--

CREATE TABLE `tbl_dietas` (
  `dietas_id` int(11) NOT NULL,
  `dietas_nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_dietas`
--

INSERT INTO `tbl_dietas` (`dietas_id`, `dietas_nombre`) VALUES
(0, 'Sin dieta'),
(1, 'Volumen'),
(2, 'Definición'),
(3, 'Proteíca'),
(4, 'HipoCalorica'),
(5, 'HiperProteíca');

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
-- Volcado de datos para la tabla `tbl_direccion`
--

INSERT INTO `tbl_direccion` (`direccion_id`, `direccion`, `cliente_id`) VALUES
(1, 'Rambla de la Marina, 355 L\'Hospitalet de Llobregat Barcelona', 1),
(2, 'Av. d\'Europa, 56 L\'Hospitalet de Llobregat Barcelona', 1),
(3, 'Avinguda Mare de Déu de Bellvitge, 259 L\'Hospitalet de Llobregat Barcelona', 6),
(5, 'calle hola 87', 3),
(13, 'Centre J23', 24),
(18, 'Les corts, CampNou Stadium', 6),
(19, 'Real Madrid CF', 25),
(20, 'Valdebebas Ciudad Deportiva s/n', 25),
(21, 'Rambla la marina', 26),
(22, 'Joan23 centre', 27),
(23, 'Calle dirección FP', 28),
(24, 'Viladecans s/n', 29);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_menu`
--

CREATE TABLE `tbl_menu` (
  `menu_id` int(11) NOT NULL,
  `menu_semana` enum('Lunes','Martes','Miercoles','Jueves','Viernes') NOT NULL,
  `menu_comida` enum('Desayuno','Almuerzo','Comer','Merienda','Cena') NOT NULL,
  `dieta_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_menu`
--

INSERT INTO `tbl_menu` (`menu_id`, `menu_semana`, `menu_comida`, `dieta_id`) VALUES
(1, 'Lunes', 'Desayuno', 1),
(2, 'Lunes', 'Almuerzo', 1),
(3, 'Lunes', 'Comer', 1),
(4, 'Lunes', 'Merienda', 1),
(5, 'Lunes', 'Cena', 1),
(6, 'Martes', 'Desayuno', 1),
(14, 'Martes', 'Almuerzo', 1),
(15, 'Martes', 'Comer', 1),
(16, 'Martes', 'Merienda', 1),
(17, 'Martes', 'Cena', 1),
(18, 'Miercoles', 'Desayuno', 1),
(19, 'Miercoles', 'Almuerzo', 1),
(20, 'Miercoles', 'Comer', 1),
(21, 'Miercoles', 'Merienda', 1),
(22, 'Miercoles', 'Cena', 1),
(23, 'Jueves', 'Desayuno', 1),
(24, 'Jueves', 'Almuerzo', 1),
(25, 'Jueves', 'Comer', 1),
(26, 'Jueves', 'Merienda', 1),
(27, 'Jueves', 'Cena', 1),
(28, 'Viernes', 'Desayuno', 1),
(29, 'Viernes', 'Almuerzo', 1),
(30, 'Viernes', 'Comer', 1),
(31, 'Viernes', 'Merienda', 1),
(32, 'Viernes', 'Cena', 1),
(33, 'Lunes', 'Desayuno', 2),
(34, 'Lunes', 'Almuerzo', 2),
(35, 'Lunes', 'Comer', 2),
(36, 'Lunes', 'Merienda', 2),
(37, 'Lunes', 'Cena', 2),
(38, 'Martes', 'Desayuno', 2),
(39, 'Martes', 'Almuerzo', 2),
(40, 'Martes', 'Comer', 2),
(41, 'Martes', 'Merienda', 2),
(42, 'Martes', 'Cena', 2),
(43, 'Miercoles', 'Desayuno', 2),
(44, 'Miercoles', 'Almuerzo', 2),
(45, 'Miercoles', 'Comer', 2),
(46, 'Miercoles', 'Merienda', 2),
(47, 'Miercoles', 'Cena', 2),
(48, 'Jueves', 'Desayuno', 2),
(49, 'Jueves', 'Almuerzo', 2),
(50, 'Jueves', 'Comer', 2),
(51, 'Jueves', 'Merienda', 2),
(52, 'Jueves', 'Cena', 2),
(53, 'Viernes', 'Desayuno', 2),
(54, 'Viernes', 'Almuerzo', 2),
(55, 'Viernes', 'Comer', 2),
(56, 'Viernes', 'Merienda', 2),
(57, 'Viernes', 'Cena', 2),
(58, 'Lunes', 'Desayuno', 3),
(59, 'Lunes', 'Almuerzo', 3),
(60, 'Lunes', 'Comer', 3),
(61, 'Lunes', 'Merienda', 3),
(62, 'Lunes', 'Cena', 3),
(63, 'Martes', 'Desayuno', 3),
(64, 'Martes', 'Almuerzo', 3),
(65, 'Martes', 'Comer', 3),
(66, 'Martes', 'Merienda', 3),
(67, 'Martes', 'Cena', 3),
(68, 'Miercoles', 'Desayuno', 3),
(69, 'Miercoles', 'Almuerzo', 3),
(70, 'Miercoles', 'Comer', 3),
(71, 'Miercoles', 'Merienda', 3),
(72, 'Miercoles', 'Cena', 3),
(73, 'Jueves', 'Desayuno', 3),
(74, 'Jueves', 'Almuerzo', 3),
(75, 'Jueves', 'Comer', 3),
(76, 'Jueves', 'Merienda', 3),
(77, 'Jueves', 'Cena', 3),
(78, 'Viernes', 'Desayuno', 3),
(79, 'Viernes', 'Almuerzo', 3),
(80, 'Viernes', 'Comer', 3),
(81, 'Viernes', 'Merienda', 3),
(82, 'Viernes', 'Cena', 3),
(83, 'Lunes', 'Desayuno', 4),
(84, 'Lunes', 'Almuerzo', 4),
(85, 'Lunes', 'Comer', 4),
(86, 'Lunes', 'Merienda', 4),
(87, 'Lunes', 'Cena', 4),
(88, 'Martes', 'Desayuno', 4),
(89, 'Martes', 'Almuerzo', 4),
(90, 'Martes', 'Comer', 4),
(91, 'Martes', 'Merienda', 4),
(92, 'Martes', 'Cena', 4),
(93, 'Miercoles', 'Desayuno', 4),
(94, 'Miercoles', 'Almuerzo', 4),
(95, 'Miercoles', 'Comer', 4),
(96, 'Miercoles', 'Merienda', 4),
(97, 'Miercoles', 'Cena', 4),
(98, 'Jueves', 'Desayuno', 4),
(99, 'Jueves', 'Almuerzo', 4),
(100, 'Jueves', 'Comer', 4),
(101, 'Jueves', 'Merienda', 4),
(102, 'Jueves', 'Cena', 4),
(103, 'Viernes', 'Desayuno', 4),
(104, 'Viernes', 'Almuerzo', 4),
(105, 'Viernes', 'Comer', 4),
(106, 'Viernes', 'Merienda', 4),
(107, 'Viernes', 'Cena', 4),
(108, 'Lunes', 'Desayuno', 5),
(109, 'Lunes', 'Almuerzo', 5),
(110, 'Lunes', 'Comer', 5),
(111, 'Lunes', 'Merienda', 5),
(112, 'Lunes', 'Cena', 5),
(113, 'Martes', 'Desayuno', 5),
(114, 'Martes', 'Almuerzo', 5),
(115, 'Martes', 'Comer', 5),
(116, 'Martes', 'Merienda', 5),
(117, 'Martes', 'Cena', 5),
(118, 'Miercoles', 'Desayuno', 5),
(119, 'Miercoles', 'Almuerzo', 5),
(120, 'Miercoles', 'Comer', 5),
(121, 'Miercoles', 'Merienda', 5),
(122, 'Miercoles', 'Cena', 5),
(123, 'Jueves', 'Desayuno', 5),
(124, 'Jueves', 'Almuerzo', 5),
(125, 'Jueves', 'Comer', 5),
(126, 'Jueves', 'Merienda', 5),
(127, 'Jueves', 'Cena', 5),
(128, 'Viernes', 'Desayuno', 5),
(129, 'Viernes', 'Almuerzo', 5),
(130, 'Viernes', 'Comer', 5),
(131, 'Viernes', 'Merienda', 5),
(132, 'Viernes', 'Cena', 5);

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
-- Volcado de datos para la tabla `tbl_pedido`
--

INSERT INTO `tbl_pedido` (`pedido_id`, `pedido_detalle`, `pedido_hora`, `menu_id`, `direccion_id`) VALUES
(1, 'contiene 150g de pollo a la plancha', '2017-05-10 09:22:00', 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_platomenu`
--

CREATE TABLE `tbl_platomenu` (
  `platoMenu_id` int(11) NOT NULL,
  `plato_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `tbl_platomenu`
--

INSERT INTO `tbl_platomenu` (`platoMenu_id`, `plato_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 1, 6),
(5, 4, 6),
(6, 3, 6),
(7, 5, 18),
(8, 6, 18),
(9, 3, 18),
(10, 7, 23),
(11, 8, 23),
(12, 3, 23),
(13, 5, 28),
(14, 9, 28),
(15, 3, 28),
(16, 10, 2),
(17, 13, 2),
(18, 11, 14),
(19, 14, 14),
(20, 13, 19),
(21, 12, 24),
(22, 14, 24),
(23, 11, 29),
(24, 13, 29),
(25, 10, 19),
(26, 15, 3),
(27, 16, 3),
(28, 17, 15),
(29, 18, 15),
(30, 19, 20),
(31, 20, 20),
(32, 21, 25),
(33, 22, 25),
(34, 15, 30),
(35, 23, 30),
(36, 24, 4),
(37, 25, 4),
(38, 14, 4),
(39, 5, 16),
(40, 9, 16),
(41, 30, 16),
(42, 27, 21),
(43, 28, 21),
(44, 29, 21),
(45, 24, 26),
(46, 25, 26),
(47, 30, 26),
(48, 31, 31),
(49, 32, 31),
(50, 33, 31),
(51, 34, 5),
(52, 35, 5),
(53, 15, 17),
(54, 36, 17),
(55, 37, 22),
(56, 38, 22),
(57, 39, 27),
(58, 40, 27),
(59, 41, 32),
(60, 42, 32),
(61, 43, 33),
(62, 44, 33),
(63, 45, 33),
(64, 46, 33),
(65, 47, 33),
(66, 48, 38),
(67, 49, 38),
(68, 46, 38),
(69, 48, 48),
(70, 49, 48),
(71, 46, 48),
(72, 43, 43),
(73, 44, 43),
(74, 45, 43),
(75, 46, 43),
(76, 47, 43),
(77, 43, 53),
(78, 44, 53),
(79, 45, 53),
(80, 46, 53),
(81, 47, 53),
(82, 51, 34),
(83, 52, 34),
(84, 51, 44),
(85, 52, 44),
(86, 51, 54),
(87, 52, 54),
(88, 53, 39),
(89, 46, 39),
(90, 53, 49),
(91, 46, 49),
(92, 54, 35),
(93, 55, 35),
(94, 56, 35),
(95, 54, 45),
(96, 55, 45),
(97, 56, 45),
(98, 54, 55),
(99, 55, 55),
(100, 56, 55),
(101, 57, 40),
(102, 58, 40),
(103, 59, 40),
(104, 60, 40),
(105, 57, 50),
(106, 58, 50),
(107, 59, 50),
(108, 60, 50),
(109, 46, 36),
(110, 3, 36),
(111, 60, 36),
(112, 46, 46),
(113, 3, 46),
(114, 60, 46),
(115, 46, 56),
(116, 3, 56),
(117, 60, 56),
(118, 61, 41),
(119, 61, 51),
(120, 62, 37),
(121, 63, 37),
(122, 9, 37),
(123, 14, 37),
(124, 62, 47),
(125, 63, 47),
(126, 9, 47),
(127, 14, 47),
(128, 62, 57),
(129, 63, 57),
(130, 9, 57),
(131, 14, 57),
(132, 64, 42),
(133, 65, 42),
(134, 66, 42),
(135, 60, 42),
(136, 64, 52),
(137, 65, 52),
(138, 66, 52),
(139, 60, 52);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_platos`
--

CREATE TABLE `tbl_platos` (
  `plato_id` int(11) NOT NULL,
  `plato_nombre` varchar(30) NOT NULL,
  `plato_descripcion` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `tbl_platos`
--

INSERT INTO `tbl_platos` (`plato_id`, `plato_nombre`, `plato_descripcion`) VALUES
(1, 'desayuno1-volum1', 'Avena con leche desnatada y cucharada de miel'),
(2, 'desayuno1-volumen2', '2 lonchas de pavo'),
(3, 'desayuno1-volumen3', 'zumo naranja'),
(4, 'desayuno1-volumen4', '1 lata de atún'),
(5, 'desayuno1-volumen5', 'Avena con 2 yogures desnatados'),
(6, 'desayuno1-volumen6', '2 lonchas de queso bajo en grasa'),
(7, 'desayuno1-volumen7', 'Avena con leche desnatada y cucharada de Cola cao 0%'),
(8, 'desayuno1-volumen8', '1 lata de pulpo cocido'),
(9, 'desayuno1-volumen9', 'Queso de burgos 0%'),
(10, 'almuerzo1-volumen1', 'Sándwich pan integral de atún'),
(11, 'almuerzo1-volum2', 'Sándwich pan integral de pavo'),
(12, 'almuerzo1-volumen3', 'Sándwich pan integral de queso 0%'),
(13, 'almuerzo1-volumen4', 'frutos secos'),
(14, 'almuerzo1-volumen5', 'Plátano'),
(15, 'comida1-volumen1', 'Arroz integral cocido'),
(16, 'comida1-volumen2', 'Pechugas de pavo a la plancha'),
(17, 'comida1-volumen3', 'Pasta integral cocida'),
(18, 'comida1-volumen4', 'Salmón a la plancha'),
(19, 'comida1-volumen5', 'Lentejas cocidas sin sacramentos'),
(20, 'comida1-volumen6', 'Solomillo de ternera plancha'),
(21, 'comida1-volumen7', 'Ensalada de pasta integral'),
(22, 'comida1-volumen8', 'langostinos'),
(23, 'comida1-volumen9', 'pechugas de pollo a la plancha'),
(24, 'merienda1-volumen1', '3 Tostas de arroz sin sal'),
(25, 'merienda1-volumen2', '3 lonchas de fiambre de pavo'),
(26, 'merienda1-volumen3', 'Un puñado de avellanas'),
(27, 'merienda1-volumen4', '3 tostadas de pan integral sin sal con aceite de oliva'),
(28, 'merienda1-volumen5', '3 lonchas de pavo'),
(29, 'merienda1-volumen6', '1 manzana'),
(30, 'merienda1-volumen7', 'Puñado de nueces'),
(31, 'merienda1-volumen8', '3 tostadas de pan integral sin sal'),
(32, 'merienda1-volumen9', '2 latas atún'),
(33, 'merienda1-volumen10', 'piña natural'),
(34, 'cena1-volumen1', 'Patata cocida'),
(35, 'cena1-volumen2', 'Filete de pescado blanco'),
(36, 'cena1-volumen3', '3 huevos cocidos (solo yema)'),
(37, 'cena1-volumen4', 'Guisantes, champiñones y cebolla a la plancha'),
(38, 'cena1-volumen5', 'revuelto de dos claras y un huevo con tacos de jamón'),
(39, 'cena1-volumen6', 'Espaguetis integrales cocidos'),
(40, 'cena1-volumen7', 'Merluza al horno'),
(41, 'cena1-volumen8', 'Puré de patatas'),
(42, 'cena1-volumen9', 'Filete de cerdo desgrasado'),
(43, 'desayuno2-definicion1', 'Revuelto de claras de huevo'),
(44, 'desayuno2-definicion2', 'Pan con tomate'),
(45, 'desayuno2-definicion3', 'Cuatro rebanadas integral'),
(46, 'desayuno2-definicion4', 'Fruta'),
(47, 'desayuno2-definicion5', 'Café Leche desnatada'),
(48, 'desayuno2-definicion6', '100g de cereales ricos en fibra'),
(49, 'desayuno2-definicion7', '3 tostadas con 80g de mermelada sin azúcar'),
(51, 'almuerzo2-definicion1', '300 gr pasta'),
(52, 'almuerzo2-definicion2', '300gr de pavo o pollo'),
(53, 'almuerzo2-definicion3', '3 rebanadas de tostadas integrales con 80g de pavo 0%'),
(54, 'comida2-definicion1', 'Ensalada verde'),
(55, 'comida2-definicion2', '300 gr de arroz y de atún'),
(56, 'comida2-definicion3', 'Yogur y fruta'),
(57, 'comida2-definicion4', '150g de pasta'),
(58, 'comida2-definicion5', '150g de filete de ternera'),
(59, 'comida2-definicion6', '300g de ensalada mixta (lechuga, tomate y cebolla)'),
(60, 'comida2-definicion7', 'yogur desnatado'),
(61, 'merienda2-definicion1', '2 piezas de fruta'),
(62, 'cena2-defincion1', 'Arroz tres delicias'),
(63, 'cena2-defincion2', 'pechugas pollo plancha'),
(64, 'cena2-defincion3', '80g de pasta'),
(65, 'cena2-defincion4', '120g de filete de ternera'),
(66, 'cena2-defincion5', '250g de calabacín, verduras variadas, pimiento, champiñones');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_cliente`
--
ALTER TABLE `tbl_cliente`
  ADD PRIMARY KEY (`cliente_id`),
  ADD KEY `dietas_id` (`dietas_id`);

--
-- Indices de la tabla `tbl_dietas`
--
ALTER TABLE `tbl_dietas`
  ADD PRIMARY KEY (`dietas_id`);

--
-- Indices de la tabla `tbl_direccion`
--
ALTER TABLE `tbl_direccion`
  ADD PRIMARY KEY (`direccion_id`),
  ADD KEY `cliente_id` (`cliente_id`);

--
-- Indices de la tabla `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD PRIMARY KEY (`menu_id`),
  ADD KEY `dieta_id` (`dieta_id`);

--
-- Indices de la tabla `tbl_pedido`
--
ALTER TABLE `tbl_pedido`
  ADD PRIMARY KEY (`pedido_id`),
  ADD KEY `menu_id` (`menu_id`),
  ADD KEY `direccion_id` (`direccion_id`);

--
-- Indices de la tabla `tbl_platomenu`
--
ALTER TABLE `tbl_platomenu`
  ADD PRIMARY KEY (`platoMenu_id`),
  ADD KEY `plato_id` (`plato_id`),
  ADD KEY `menu_id` (`menu_id`);

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
  MODIFY `cliente_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT de la tabla `tbl_dietas`
--
ALTER TABLE `tbl_dietas`
  MODIFY `dietas_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `tbl_direccion`
--
ALTER TABLE `tbl_direccion`
  MODIFY `direccion_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT de la tabla `tbl_menu`
--
ALTER TABLE `tbl_menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;
--
-- AUTO_INCREMENT de la tabla `tbl_pedido`
--
ALTER TABLE `tbl_pedido`
  MODIFY `pedido_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `tbl_platomenu`
--
ALTER TABLE `tbl_platomenu`
  MODIFY `platoMenu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;
--
-- AUTO_INCREMENT de la tabla `tbl_platos`
--
ALTER TABLE `tbl_platos`
  MODIFY `plato_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_cliente`
--
ALTER TABLE `tbl_cliente`
  ADD CONSTRAINT `tbl_cliente_ibfk_1` FOREIGN KEY (`dietas_id`) REFERENCES `tbl_dietas` (`dietas_id`);

--
-- Filtros para la tabla `tbl_direccion`
--
ALTER TABLE `tbl_direccion`
  ADD CONSTRAINT `tbl_direccion_ibfk_1` FOREIGN KEY (`cliente_id`) REFERENCES `tbl_cliente` (`cliente_id`);

--
-- Filtros para la tabla `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD CONSTRAINT `tbl_menu_ibfk_2` FOREIGN KEY (`dieta_id`) REFERENCES `tbl_dietas` (`dietas_id`);

--
-- Filtros para la tabla `tbl_pedido`
--
ALTER TABLE `tbl_pedido`
  ADD CONSTRAINT `tbl_pedido_ibfk_1` FOREIGN KEY (`menu_id`) REFERENCES `tbl_menu` (`menu_id`),
  ADD CONSTRAINT `tbl_pedido_ibfk_2` FOREIGN KEY (`direccion_id`) REFERENCES `tbl_direccion` (`direccion_id`);

--
-- Filtros para la tabla `tbl_platomenu`
--
ALTER TABLE `tbl_platomenu`
  ADD CONSTRAINT `tbl_platomenu_ibfk_1` FOREIGN KEY (`plato_id`) REFERENCES `tbl_platos` (`plato_id`),
  ADD CONSTRAINT `tbl_platomenu_ibfk_2` FOREIGN KEY (`menu_id`) REFERENCES `tbl_menu` (`menu_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
