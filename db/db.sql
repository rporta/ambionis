-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 04-10-2017 a las 04:58:08
-- Versión del servidor: 5.7.10-log
-- Versión de PHP: 5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ambionis_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diapositivas`
--

CREATE TABLE `diapositivas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `grupo` int(11) NOT NULL,
  `url` text NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `diapositivas`
--

INSERT INTO `diapositivas` (`id`, `grupo`, `url`, `descripcion`) VALUES
(1, 1, '..//img/diapositivas/1.jpg', 'titulo1'),
(2, 1, '..//img/diapositivas/2.jpg', 'titulo2'),
(3, 1, '..//img/diapositivas/3.jpg', 'titulo3'),
(4, 1, '..//img/diapositivas/4.jpg', 'titulo4'),
(5, 1, '..//img/diapositivas/5.jpg', 'titulo5'),
(6, 1, '..//img/diapositivas/6.jpg', 'titulo6'),
(7, 1, '..//img/diapositivas/7.jpg', 'titulo7'),
(8, 1, '..//img/diapositivas/8.jpg', 'titulo8'),
(9, 1, '..//img/diapositivas/9.jpg', 'titulo9'),
(10, 2, '..//bichoTaladro/diapositiva/1.jpg', 'titulo1'),
(11, 2, '..//bichoTaladro/diapositiva/2.jpg', 'titulo2'),
(12, 2, '..//bichoTaladro/diapositiva/3.jpg', 'titulo3'),
(13, 2, '..//bichoTaladro/diapositiva/4.jpg', 'titulo4'),
(14, 2, '..//bichoTaladro/diapositiva/5.jpg', 'titulo5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fondo`
--

CREATE TABLE `fondo` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `fondo`
--

INSERT INTO `fondo` (`id`, `url`) VALUES
(1, '..//img/background/1.jpg'),
(2, '..//img/background/2.jpg'),
(3, '..//img/background/3.jpg'),
(4, '..//img/background/4.jpg'),
(5, '..//img/background/1.jpg'),
(6, '..//img/background/2.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `footer`
--

CREATE TABLE `footer` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `des` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `footer`
--

INSERT INTO `footer` (`id`, `des`) VALUES
(1, 'Ambionis Solucion integral en plagas 5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `head`
--

CREATE TABLE `head` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `head`
--

INSERT INTO `head` (`id`, `url`) VALUES
(1, '..//img/logo/logo.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seccion_1`
--

CREATE TABLE `seccion_1` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo` text NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `seccion_1`
--

INSERT INTO `seccion_1` (`id`, `titulo`, `descripcion`) VALUES
(1, 'Titulo1', 'Descripcion ...');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pass` varchar(10) NOT NULL,
  `usuario` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `pass`, `usuario`) VALUES
(1, 'reznof', 'abstergo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos`
--

CREATE TABLE `contactos` (
  `id` INT NOT NULL , 
  `correo` TEXT NOT NULL 
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `contactos` (`id`, `correo`) VALUES
(1, 'correo@correo.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `diapositivas`
--
ALTER TABLE `diapositivas`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `fondo`
--
ALTER TABLE `fondo`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `footer`
--
ALTER TABLE `footer`
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `id_2` (`id`);

--
-- Indices de la tabla `head`
--
ALTER TABLE `head`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `seccion_1`
--
ALTER TABLE `seccion_1`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `diapositivas`
--
ALTER TABLE `diapositivas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `fondo`
--
ALTER TABLE `fondo`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `footer`
--
ALTER TABLE `footer`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `head`
--
ALTER TABLE `head`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `seccion_1`
--
ALTER TABLE `seccion_1`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
