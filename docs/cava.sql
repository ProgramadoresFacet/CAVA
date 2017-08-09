-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-08-2017 a las 15:31:40
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cava`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `escriben`
--

CREATE TABLE `escriben` (
  `id_persona` int(11) NOT NULL,
  `id_trabajo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `id_estado` int(11) NOT NULL,
  `estado` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE `pais` (
  `id_pais` int(11) NOT NULL,
  `pais` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`id_pais`, `pais`) VALUES
(1, 'ARGENTINA'),
(2, 'BRASIL'),
(3, 'COLOMBIA'),
(4, 'VENEZUELA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `id_pesona` int(11) NOT NULL,
  `nombre` varchar(64) NOT NULL,
  `apellido` varchar(64) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `id_rol` int(11) NOT NULL,
  `id_pais` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`id_pesona`, `nombre`, `apellido`, `mail`, `id_rol`, `id_pais`) VALUES
(1, 'juan', 'perez', 'mail@mail.com', 1, 1),
(2, 'mario', 'bros', 'mail@mail.com', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id_rol` int(11) NOT NULL,
  `rol` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `rol`) VALUES
(1, 'AUTOR'),
(2, 'PONENTE'),
(3, 'ASISTENTE'),
(4, 'CONFERENSISTA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ticket`
--

CREATE TABLE `ticket` (
  `id_ticket` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_estado` int(11) NOT NULL,
  `monto` float NOT NULL,
  `id_tipo_pago` int(11) NOT NULL,
  `id_trabajo` int(11) NOT NULL,
  `id_persona` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ticket`
--

INSERT INTO `ticket` (`id_ticket`, `fecha`, `id_estado`, `monto`, `id_tipo_pago`, `id_trabajo`, `id_persona`) VALUES
(1, '2017-08-09 12:38:36', 1, 253.25, 0, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_pagos`
--

CREATE TABLE `tipo_pagos` (
  `id_tipo_pago` int(11) NOT NULL,
  `tipo` varchar(40) NOT NULL,
  `monto` float NOT NULL,
  `fecha` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_pagos`
--

INSERT INTO `tipo_pagos` (`id_tipo_pago`, `tipo`, `monto`, `fecha`) VALUES
(1, 'Autor ', 150, 'Precio hasta el 21 de julio 2017'),
(2, 'Docente/investigador', 100, 'Precio hasta el 21 de julio 2017'),
(3, 'Docentes con 5 alumnos o más', 80, 'Precio hasta el 21 de julio 2017'),
(4, 'Alumnos del docente', 10, 'Precio hasta el 21 de julio 2017'),
(5, 'Alumnos de Posgrado con trabajo\n', 80, 'Precio hasta el 21 de julio 2017'),
(6, 'Alumnos de Posgrado sin trabajo\n', 50, 'Precio hasta el 21 de julio 2017'),
(7, 'Alumnos de Grado con trabajo\n', 50, 'Precio hasta el 21 de julio 2017'),
(8, 'Alumnos de Grado sin trabajo\r\n', 30, 'Precio hasta el 21 de julio 2017'),
(9, 'Autor ', 150, 'Precio después del 21 de julio 2017'),
(10, 'Docente/investigador', 150, 'Precio después del 21 de julio 2017'),
(11, 'Docentes con 5 alumnos o más', 100, 'Precio después del 21 de julio 2017'),
(12, 'Alumnos del docente', 20, 'Precio después del 21 de julio 2017'),
(13, 'Alumnos de Posgrado con trabajo\r', 80, 'Precio después del 21 de julio 2017'),
(14, 'Alumnos de Posgrado sin trabajo\r', 50, 'Precio después del 21 de julio 2017'),
(15, 'Alumnos de Grado con trabajo\r\n', 50, 'Precio después del 21 de julio 2017'),
(16, 'Alumnos de Grado sin trabajo\r\n', 30, 'Precio después del 21 de julio 2017');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajos`
--

CREATE TABLE `trabajos` (
  `id_trabajo` int(11) NOT NULL,
  `titulo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `escriben`
--
ALTER TABLE `escriben`
  ADD KEY `id_persona` (`id_persona`),
  ADD KEY `id` (`id_trabajo`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id_estado`);

--
-- Indices de la tabla `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`id_pais`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`id_pesona`),
  ADD KEY `id_rol` (`id_rol`),
  ADD KEY `id_pais` (`id_pais`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id_ticket`),
  ADD KEY `id_estado` (`id_estado`),
  ADD KEY `id_trabajo` (`id_trabajo`),
  ADD KEY `id_persona` (`id_persona`),
  ADD KEY `id_tipo_pago` (`id_tipo_pago`);

--
-- Indices de la tabla `tipo_pagos`
--
ALTER TABLE `tipo_pagos`
  ADD PRIMARY KEY (`id_tipo_pago`);

--
-- Indices de la tabla `trabajos`
--
ALTER TABLE `trabajos`
  ADD PRIMARY KEY (`id_trabajo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `id_estado` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pais`
--
ALTER TABLE `pais`
  MODIFY `id_pais` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `id_pesona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id_ticket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `tipo_pagos`
--
ALTER TABLE `tipo_pagos`
  MODIFY `id_tipo_pago` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `trabajos`
--
ALTER TABLE `trabajos`
  MODIFY `id_trabajo` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
