-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-07-2022 a las 22:49:40
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `zona_de_alerta`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `control_temp_humedad`
--

CREATE TABLE `control_temp_humedad` (
  `id_registro` int(11) NOT NULL,
  `id_empresa` bigint(20) NOT NULL,
  `valor_temp` int(11) NOT NULL,
  `valor_hume` int(11) NOT NULL,
  `estado_not` int(11) NOT NULL,
  `fecha_registro` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `control_temp_humedad`
--

INSERT INTO `control_temp_humedad` (`id_registro`, `id_empresa`, `valor_temp`, `valor_hume`, `estado_not`, `fecha_registro`) VALUES
(1, 1, 1, 1, 1, '2022-07-09 15:39:28'),
(2, 1, 26, 32, 1, '2022-07-09 15:40:49'),
(3, 1, 26, 32, 1, '2022-07-10 15:34:38'),
(4, 1, 59, 59, 1, '2022-07-10 15:38:26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_empresas`
--

CREATE TABLE `tbl_empresas` (
  `id_empresa` int(11) NOT NULL,
  `razon_social` varchar(100) NOT NULL,
  `nit` varchar(20) NOT NULL,
  `telefono` bigint(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_empresas`
--

INSERT INTO `tbl_empresas` (`id_empresa`, `razon_social`, `nit`, `telefono`, `email`, `direccion`, `fecha_creacion`, `estado`) VALUES
(2, 'Zona de alerta', '9999999', 3228760890, 'zonadealerta@gmail.com', 'calle 34 # 14 - 00 este soacha', '2022-07-06 04:28:19', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuarios`
--

CREATE TABLE `tbl_usuarios` (
  `id_usuario` int(11) NOT NULL,
  `id_empresa` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `clave` varchar(100) NOT NULL,
  `telefono` bigint(20) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `estado` int(11) NOT NULL,
  `rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_usuarios`
--

INSERT INTO `tbl_usuarios` (`id_usuario`, `id_empresa`, `nombre`, `email`, `clave`, `telefono`, `direccion`, `fecha_creacion`, `estado`, `rol`) VALUES
(1, 2, 'Andres Santiago Rodriguez Romero', 'andres77u77@gmail.com', 'Andres1234.', 3228760890, 'cra 2 # 38 - 80 soacha', '2022-07-06 04:29:07', 1, 1),
(2, 2, 'Cristian Elias Rodriguez Romero', 'cerodrig@gmail.com', 'Cristian1234.', 3209859251, 'calle 34 # 34 - 00', '2022-07-06 04:29:40', 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_notificacion`
--

CREATE TABLE `usuarios_notificacion` (
  `id_usuario` int(11) NOT NULL,
  `tipo_notificacion` int(11) NOT NULL,
  `fecha_registro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `control_temp_humedad`
--
ALTER TABLE `control_temp_humedad`
  ADD PRIMARY KEY (`id_registro`);

--
-- Indices de la tabla `tbl_empresas`
--
ALTER TABLE `tbl_empresas`
  ADD PRIMARY KEY (`id_empresa`);

--
-- Indices de la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `control_temp_humedad`
--
ALTER TABLE `control_temp_humedad`
  MODIFY `id_registro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tbl_empresas`
--
ALTER TABLE `tbl_empresas`
  MODIFY `id_empresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
