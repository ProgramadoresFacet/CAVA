-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-08-2017 a las 04:53:00
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

--
-- Volcado de datos para la tabla `escriben`
--

INSERT INTO `escriben` (`id_persona`, `id_trabajo`) VALUES
(115, 1),
(116, 1),
(117, 1),
(118, 2),
(119, 2),
(120, 2),
(121, 3),
(129, 4),
(122, 4),
(123, 5),
(124, 5),
(125, 5),
(126, 5),
(127, 6),
(128, 6),
(122, 6),
(130, 6),
(128, 7),
(122, 7),
(131, 8),
(132, 8),
(133, 9),
(134, 9),
(135, 9),
(136, 9),
(137, 10),
(138, 10),
(139, 11),
(140, 12),
(141, 12),
(142, 13),
(143, 13),
(144, 13),
(145, 14),
(146, 15),
(147, 16),
(148, 16),
(149, 16),
(150, 16),
(151, 16),
(152, 17),
(153, 18),
(154, 19),
(155, 19),
(156, 20),
(157, 20),
(173, 20),
(158, 21),
(159, 21),
(160, 21),
(161, 22),
(162, 23),
(163, 23),
(164, 24),
(165, 24),
(164, 25),
(166, 26),
(167, 26),
(168, 26),
(169, 27),
(170, 27),
(171, 28),
(172, 28),
(173, 28),
(174, 29),
(172, 29),
(173, 29),
(175, 29),
(176, 30),
(173, 30),
(167, 31),
(177, 31),
(178, 31),
(168, 31),
(179, 31),
(180, 32),
(174, 32),
(181, 32),
(182, 33),
(183, 34),
(182, 35),
(183, 35);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `id_estado` int(11) NOT NULL,
  `estado` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`id_estado`, `estado`) VALUES
(1, 'NO'),
(2, 'EN TRAMITE'),
(3, 'SI');

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
  `id_persona` int(11) NOT NULL,
  `nombre` varchar(64) NOT NULL,
  `apellido` varchar(64) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `id_rol` int(11) NOT NULL,
  `id_pais` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`id_persona`, `nombre`, `apellido`, `mail`, `id_rol`, `id_pais`) VALUES
(115, 'LUIS RODOLFO', 'LARA', 'verificar_mail@mail.com', 1, 1),
(116, 'RODOLFO RAMÓN ', 'RIZO', 'verificar_mail@mail.com', 1, 1),
(117, 'CLAUDIO ALEJANDRO', ' ARIZA', 'verificar_mail@mail.com', 1, 1),
(118, 'VILMA DALILA', ' VARAS', 'verificar_mail@mail.com', 1, 1),
(119, 'ANDREA LEONOR', 'AGUERO', 'verificar_mail@mail.com', 1, 1),
(120, 'CRISTINA SUSANA', 'GRAMAJO', 'verificar_mail@mail.com', 1, 1),
(121, 'MARCELO FABIO', 'ROLDAN', 'verificar_mail@mail.com', 1, 1),
(122, 'VANESA', 'GALLARDO', 'verificar_mail@mail.com', 1, 1),
(123, 'CAMILLE ', 'GRINGS SILVA', 'verificar_mail@mail.com', 1, 1),
(124, 'DÉBORA', 'NICE FERREIRA BARBOSA', 'verificar_mail@mail.com', 1, 1),
(125, 'LEANDRO', 'G. RASCH', 'verificar_mail@mail.com', 1, 1),
(126, 'SANDRA TERESINHA', 'MIORELLI', 'verificar_mail@mail.com', 1, 1),
(127, 'AMERICO', 'SIRVENTE', 'verificar_mail@mail.com', 1, 1),
(128, 'ELISA', 'OLIVA', 'verificar_mail@mail.com', 1, 1),
(129, 'MARIA INES', 'CIANCIO', 'verificar_mail@mail.com', 1, 1),
(130, 'LUCY', 'RIOS', 'verificar_mail@mail.com', 1, 1),
(131, 'MARTA', 'ORPI', 'verificar_mail@mail.com', 1, 1),
(132, 'MABEL', 'SOSA', 'verificar_mail@mail.com', 1, 1),
(133, 'MARÍA LUISA', 'BOSSOLASCO', 'verificar_mail@mail.com', 1, 1),
(134, 'EUGENIA ELIZABETH', 'ENRICO', 'verificar_mail@mail.com', 1, 1),
(135, 'BEATRIZ ADRIANA', 'CASANOVA', 'verificar_mail@mail.com', 1, 1),
(136, 'ROXANA JUDITH', 'ENRICO', 'verificar_mail@mail.com', 1, 1),
(137, 'MILENA', 'RAMÍREZ BAUTISTA', 'verificar_mail@mail.com', 1, 1),
(138, 'MARÍA VICTORIA', 'MURCIA ARREGOCES', 'verificar_mail@mail.com', 1, 1),
(139, 'FRANCISCO DANIEL', 'MENDOZA VARGAS', 'verificar_mail@mail.com', 1, 1),
(140, 'JUAN SEBASTIAN', 'BUSTAMANTE MONTOYA', 'verificar_mail@mail.com', 1, 1),
(141, 'CAROLINA', 'MEJIA', 'verificar_mail@mail.com', 1, 1),
(142, 'JESSICA PAOLA', 'OSORIO CABALLERO', 'verificar_mail@mail.com', 1, 1),
(143, 'BASHIR YACUB', 'BERMUDEZ', 'verificar_mail@mail.com', 1, 1),
(144, 'SERGIO LUIS', 'VARGAS MELENDEZ', 'verificar_mail@mail.com', 1, 1),
(145, 'DAYANA ALEJANDRA', ' BARRERA BUITRAGO', 'verificar_mail@mail.com', 1, 1),
(146, 'DENISE CAROLINE', 'ARGUELLES PABON', 'verificar_mail@mail.com', 1, 1),
(147, 'ALEJANDRA', 'ROA', 'verificar_mail@mail.com', 1, 1),
(148, 'ANYIN', 'MARTINEZ', 'verificar_mail@mail.com', 1, 1),
(149, 'GERALDINE', 'ISAZA', 'verificar_mail@mail.com', 1, 1),
(150, 'DANIEL', 'BEJARANO', 'verificar_mail@mail.com', 1, 1),
(151, 'PEDRO', 'MEDINA', 'verificar_mail@mail.com', 1, 1),
(152, 'LUIS', 'GAMA', 'verificar_mail@mail.com', 1, 1),
(153, 'MÓNICA', 'AGUDELO', 'verificar_mail@mail.com', 1, 1),
(154, 'LORENA', 'CASTAÑO', 'verificar_mail@mail.com', 1, 1),
(155, 'CAROLINA', 'MEJÍA', 'verificar_mail@mail.com', 1, 1),
(156, 'CRISTIAN CAMILO', 'PORTILLO', 'verificar_mail@mail.com', 1, 1),
(157, 'JOHAN', 'NAVARRO', 'verificar_mail@mail.com', 1, 1),
(158, 'ELENA BEATRIZ ', 'DURÁN', 'verificar_mail@mail.com', 1, 1),
(159, 'SILVINA ISABEL', 'UNZAGA', 'verificar_mail@mail.com', 1, 1),
(160, 'MARGARITA MARÍA', 'ALVAREZ', 'verificar_mail@mail.com', 1, 1),
(161, 'PABLO SEBASTIÁN', 'FANTINI', 'verificar_mail@mail.com', 1, 1),
(162, 'MIRIAM', 'BIDYERAN', 'verificar_mail@mail.com', 1, 1),
(163, 'MARCELA', 'TORRES', 'verificar_mail@mail.com', 1, 1),
(164, 'DIANA JANETH', 'LANCHEROS-CUESTA', 'verificar_mail@mail.com', 1, 1),
(165, 'CARLOS', 'BERNAL GRANADOS', 'verificar_mail@mail.com', 1, 1),
(166, 'MAGLE', 'SANCHEZ', 'verificar_mail@mail.com', 1, 1),
(167, 'LAURA', 'MANCERA', 'verificar_mail@mail.com', 1, 1),
(168, 'SILVIA', 'BALDIRIS', 'verificar_mail@mail.com', 1, 1),
(169, 'ANGEL RUBÉN', 'BARBERIS', 'verificar_mail@mail.com', 1, 1),
(170, 'LORENA ELIZABETH', 'DEL MORAL SACHETTI', 'verificar_mail@mail.com', 1, 1),
(171, 'ANYELA LORENA', 'OROZCO MORENO', 'verificar_mail@mail.com', 1, 1),
(172, 'VALENTINA', 'TABARES MORALES', 'verificar_mail@mail.com', 1, 1),
(173, 'NÉSTOR DARIO', 'DUQUE MÉNDEZ', 'verificar_mail@mail.com', 1, 1),
(174, 'DIANA VANESSA', 'SÁNCHEZ MORALES', 'verificar_mail@mail.com', 1, 1),
(175, 'LUIS FELIPE', 'LONDOÑO ROJAS', 'verificar_mail@mail.com', 1, 1),
(176, 'MARIA ALEJANDRA', 'HURTADO PARRA', 'verificar_mail@mail.com', 1, 1),
(177, 'CRISTINA', 'RIVERA', 'verificar_mail@mail.com', 1, 1),
(178, 'JULIA', 'PINEDA', 'verificar_mail@mail.com', 1, 1),
(179, 'JAVIER', 'LOPEZ', 'verificar_mail@mail.com', 1, 1),
(180, 'MARIA VICTORIA', 'HERNANDEZ VARGAS', 'verificar_mail@mail.com', 1, 1),
(181, 'RAUL', 'ANCIZAR MUNEVAR MOLINA', 'verificar_mail@mail.com', 1, 1),
(182, 'GLORIA', 'SIERRA', 'verificar_mail@mail.com', 1, 1),
(183, 'MARIA LUISA', 'ALVAREZ MEJÍA', 'verificar_mail@mail.com', 1, 1),
(184, 'DIANA LETICIA', 'DEL ROSARIO CRUZ', 'verificar_mail@mail.com', 1, 1),
(185, 'SILVIA GABRIELA', 'RIVADENEIRA', 'verificar_mail@mail.com', 1, 1);

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
  `pesos` float NOT NULL,
  `id_tipo_pago` int(11) NOT NULL,
  `id_trabajo` int(11) DEFAULT NULL,
  `id_persona` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `titulo` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `trabajos`
--

INSERT INTO `trabajos` (`id_trabajo`, `titulo`) VALUES
(1, 'ANÁLISIS DE LA ACCESIBILIDAD DE LOS RECURSOS DE UN AULA VIRTUAL'),
(2, 'BENEFICIOS E IMPLEMENTACIÓN ACCESIBILIDAD WEB EN LA PLATAFORMA EVA UNLAR\n'),
(3, 'ADAPTABILIDAD PREDICTIVA BASADA EN PATRONES  TAXONÓMICOS CAUSANTES DE DESERCIÓN.\n'),
(4, 'HERRAMIENTA TECNOLÓGICA PARA APOYAR EL APRENDIZAJE  AUTÓNOMO DE CONTENIDOS GEOMÉTRICOS\n'),
(5, 'ENSINANDO LÓGICA COM AS TECNOLOGIAS DA INFORMAÇÃO: APLICAÇÃO DA LÓGICA E ALGORITMOS\n'),
(6, 'TALLER : OBJETO DE APRENDIZAJE ABIERTO Y ACCESIBLE PARA MATEMÁTICA\n'),
(7, 'DESARROLLO DE CONTENIDOS DE ALGEBRA LINEAL CON GEOGEBRA\n'),
(8, 'CRITERIOS DE USABILIDAD CON PERSPECTIVA PEDAGÓGICA PARA EVALUAR CURSOS MOOC\n'),
(9, 'ANÁLISIS DE BRECHAS DE ACCESIBILIDAD, USO Y APROPIACIÓN DE TIC EN INGRESANTES AL NIVEL SUPERIOR UNIVERSITARIO\n'),
(10, 'SEMILLERO DE INFORMÁTICA, LA EDUCACIÓN POR MEDIO DE VIDEOJUEGOS\n'),
(11, 'USE OF EMERGING TECHNOLOGIES (BUSINESS SIMULATORS) AS AN ADAPTIVE LEARNING STRATEGY (CLASSROOM EXPERIENCE)\n'),
(12, 'ESTRATEGIAS Y HERRAMIENTAS PARA GENERAR ESPACIOS DE EDUCACIÓN INCLUSIVA A TRAVÉS DE AMBIENTES VIRTUALES DE APRENDIZAJE - CASO COLOMBIA\n'),
(13, 'DISEÑO E IMPLEMENTACIÓN DE UN SISTEMA ALTERNATIVO DE COMUNICACIÓN PARA NIÑOS CON DISCAPACIDAD DEL CENTRO DE CAPACITACIÓN Y HABILITACIÓN ALUNA \n'),
(14, 'EN BUSCA DE METODOS DE ENSEÑANZA DE LA ESTADISTICA PARA ENTORNOS VIRTUALES \n'),
(15, 'EL DISEÑO DE CURSOS AUTOFORMATIVOS MASIVOS, ABIERTOS Y EN LÍNEA MOOC  ¡UNA APUESTA PARA INCENTIVAR EL APRENDIZAJE A LO LARGO DE LA VIDA!\n'),
(16, 'EL FORTALECIMIENTO DE LOS PROCESOS COMUNICATIVOS E INTERACCIÓN SOCIAL PARA NIÑOS SORDOS Y OYENTES MEDIANTE UN AVA\n'),
(17, 'APLICACIÓN DE LAS HERRAMIENTAS DE SISTEMAS EN LA CÁTEDRA COSTOS I\n'),
(18, 'UN AULA VIRTUAL: UNA APUESTA POR LA ATENCIÓN A LA DIVERSIDAD A TRAVÉS DE TIC\n'),
(19, 'UNA REVISIÓN TEÓRICA DE LAS HERRAMIENTAS PARA LA ASISTENCIA DE LA DISLEXIA EN COLOMBIA\n'),
(20, 'PLATAFORMAS DE GAMIFICACIÓN EDUCATIVA ADAPTABLES A UN ENTORNO EDUCATIVO UNIVERSITARIO\n'),
(21, 'PERSONALIZACIÓN DE SERVICIOS PARA APLICACIONES DE APRENDIZAJE UBICUO\n'),
(22, 'EL DOCENTE EN ENTORNOS VIRTUALES\n'),
(23, 'BIBLIOTECA DIGITAL ACCESIBLE\n'),
(24, 'MOOC OPORTUNIDAD DE CONOCIMIENTO Y SABER\n'),
(25, 'SISTEMA INTELIGENTE PARA DIAGNOSTICO DE CARIES DENTAL BASADO EN LA NORMA ICDAS\n'),
(26, 'ESTRATEGIA PARA LA GENERACIÓN DE ESPACIOS EDUCATIVOS INCLUSIVOS\n'),
(27, 'METODOLOGÍA PARA EL ENTRENAMIENTO ÁGIL EN LA PROGRAMACIÓN DE COMPUTADORAS\n'),
(28, 'EVALUANDO LA ACCESIBILIDAD DE RECURSOS EDUCATIVOS DIGITALES: VALIDACIÓN DE BARRERAS ASOCIADAS A USUARIOS CON DISCAPACIDAD VISUAL TOTAL\n'),
(29, 'COMPARACIÓN DE HERRAMIENTAS DE AUTOR A PARTIR DE EVALUACIONES DE ACCESIBILIDAD\n'),
(30, 'IDENTIFICACIÓN DE LA DISCALCULIA: ENFOQUE SOBRE LAS ÁREAS COGNITIVAS AFECTADAS EN LAS NIÑAS DE 6-7 AÑOS\n'),
(31, 'PROPUESTA DE IMPLEMENTACIÓN DEL MARCO UNIVERSAL DESIGN FOR LEARNING USANDO NARRATIVAS TRANSMEDIALES\n'),
(32, 'IMPACTO DE LAS REDES SOCIALES EN LOS PROCESOS DE ENSEÑANZA\n'),
(33, 'SISTEMA DE EVALUACIÓN DEL APRENDIZAJE POR COMPETENCIAS. UNA EXPERIENCIA EN EDUCACIÓN SUPERIOR.\n'),
(34, 'CREACIÓN DE UN AULA VIRTUAL EN MOODLE PARA EL USO Y APROPIACIÓN PEDAGÓGICA EN UNA UNIVERSIDAD COLOMBIANA\n'),
(35, 'EXPERIENCIAS SOBRE PENSAMIENTO COMPUTACIONAL EN EL PROFESORADO EN EDUCACIÓN PRIMARIA DE LA UNIVERSIDAD NACIONAL DE LA PATAGONIA AUSTRAL\n');

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
  ADD PRIMARY KEY (`id_persona`),
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
  MODIFY `id_estado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `pais`
--
ALTER TABLE `pais`
  MODIFY `id_pais` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `id_persona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=186;
--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id_ticket` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tipo_pagos`
--
ALTER TABLE `tipo_pagos`
  MODIFY `id_tipo_pago` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `trabajos`
--
ALTER TABLE `trabajos`
  MODIFY `id_trabajo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `escriben`
--
ALTER TABLE `escriben`
  ADD CONSTRAINT `escriben_ibfk_1` FOREIGN KEY (`id_persona`) REFERENCES `personas` (`id_persona`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `escriben_ibfk_2` FOREIGN KEY (`id_trabajo`) REFERENCES `trabajos` (`id_trabajo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `personas`
--
ALTER TABLE `personas`
  ADD CONSTRAINT `personas_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `personas_ibfk_2` FOREIGN KEY (`id_pais`) REFERENCES `pais` (`id_pais`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `ticket_ibfk_1` FOREIGN KEY (`id_persona`) REFERENCES `personas` (`id_persona`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ticket_ibfk_2` FOREIGN KEY (`id_trabajo`) REFERENCES `trabajos` (`id_trabajo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ticket_ibfk_3` FOREIGN KEY (`id_tipo_pago`) REFERENCES `tipo_pagos` (`id_tipo_pago`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ticket_ibfk_4` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id_estado`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
