-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-06-2023 a las 06:26:09
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `renova`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `categoria` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `categoria`) VALUES
(2, 'inmobiliaria modular'),
(3, 'servicios de construccion'),
(4, 'cabañas'),
(5, 'diseño arquitectonico'),
(6, 'eco ladrillo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE `imagenes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `imagen` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(80) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `precio-regu` decimal(10,0) NOT NULL,
  `precio-desc` decimal(10,0) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `imagen` blob DEFAULT NULL,
  `estrellas` decimal(10,0) NOT NULL,
  `id_reseña` int(11) DEFAULT NULL,
  `id_categoria` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `precio-regu`, `precio-desc`, `cantidad`, `imagen`, `estrellas`, `id_reseña`, `id_categoria`) VALUES
(1, 'PA-01 DISEÑO DE FACHADA', 'Con este paquete obtendrás.\r\n\r\n1.- Imagen (Render) de fachada de casa habitación de hasta 10 mts de largo y 6 mts de alto.\r\n\r\n2.- Una corrección sobre la propuesta.', '2500', '1490', 1000000, NULL, '5', NULL, 5),
(2, 'LOSAS M2 de ARMADO DE ACERO en losa de concreto hasta una altura de 3.00 mts.', 'MANO DE OBRA PARA ARMADO DE LOSA con varilla de hasta 1/2\" de diámetro y separación de 0 hasta 25 cm como máximo en una sola parrilla, incluye: herramienta y equipo.', '120', '120', 1000000, NULL, '5', NULL, 3),
(3, 'ECO LADRILLO GRANDE 6X12X24 CM', 'Con 48 piezas cubres un metro cuadrado.\r\nLas dimensiones del G70 son de 6X12X24 cm (h*a*l)\r\nSe adhiere perfectamente a elementos de concreto como castillos, dalas y columnas.\r\nLa fabricación se realiz', '2800', '2100', 1000000, NULL, '5', NULL, 6),
(4, 'CABAÑA modelo \"L\" con 2 camas, 2 baño completo, 1 cocina, 1 sala tipo \"L\".', 'CABAÑA modelo \"L\", consta en su interior de:\r\n\r\n2 Camas.\r\n1 Cocina.\r\n2 Baño completo.\r\n1 Sala tipo \"L\". ', '382540', '382540', 1000000, NULL, '5', NULL, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reseñas`
--

CREATE TABLE `reseñas` (
  `id` int(11) NOT NULL,
  `comentario` varchar(100) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `reseñas`
--

INSERT INTO `reseñas` (`id`, `comentario`, `id_user`) VALUES
(1, 'muy buen servicio por parte de los arquitectos', 3),
(2, 'cumplen con lo que prometen', 1),
(3, 'me pareció una gran innovación lo de los eco ladrillos', 4),
(4, 'buena la atencion al cliente, resolvieron mi problema en minutos', 5),
(5, 'buen servicio', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `foto` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `password`, `foto`) VALUES
(1, 'Diego', '1234', NULL),
(3, 'Mauro', '12345', NULL),
(4, 'Derek', '4321', NULL),
(5, 'renovadepot', '1234321', NULL),
(6, 'selene', '54321', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reseñas`
--
ALTER TABLE `reseñas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `reseñas`
--
ALTER TABLE `reseñas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
