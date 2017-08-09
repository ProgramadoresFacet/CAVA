-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-08-2017 a las 15:56:31
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
(1, 'Robert', 'Orla Boyle', 'nec.imperdiet.nec@eget.org', 2, 3),
(2, 'Cathleen', 'Merrill Lowery', 'natoque@placerat.com', 1, 1),
(3, 'Phillip', 'Tyler Chaney', 'cubilia@Proinnonmassa.org', 1, 1),
(4, 'Mark', 'Lacy Farley', 'ipsum.nunc@purusaccumsan.co.uk', 4, 2),
(5, 'Silas', 'Lionel Shaw', 'ut@parturientmontesnascetur.net', 4, 2),
(6, 'Mary', 'Carolyn Nguyen', 'Nunc.sollicitudin@malesuada.ca', 1, 3),
(7, 'Anastasia', 'Dacey Banks', 'scelerisque.neque@temporloremeget.co.uk', 3, 3),
(8, 'Judith', 'Florence Delacruz', 'congue.a.aliquet@metusVivamus.com', 4, 2),
(9, 'Giacomo', 'Leila Dodson', 'feugiat.tellus@aliquetsemut.co.uk', 2, 3),
(10, 'Jaquelyn', 'Dominic Fernandez', 'commodo@eget.co.uk', 3, 3),
(11, 'Emily', 'Phoebe Petty', 'torquent@Quisque.co.uk', 4, 2),
(12, 'Regan', 'Samson Chen', 'dui.in.sodales@blanditNam.net', 1, 3),
(13, 'Tyler', 'Aquila Cook', 'sit@nonfeugiatnec.co.uk', 3, 3),
(14, 'Brittany', 'Yoshi Heath', 'risus@anunc.com', 1, 2),
(15, 'Lila', 'Hector Leonard', 'urna.Nullam@Aeneanegestas.com', 2, 4),
(16, 'Nora', 'Jerome Rivera', 'purus@euismod.ca', 3, 2),
(17, 'Kamal', 'Davis Preston', 'Mauris@facilisisvitaeorci.edu', 3, 4),
(18, 'Herman', 'Xander Lancaster', 'erat@odiosagittis.org', 2, 1),
(19, 'Meredith', 'Ignacia Woodward', 'est@estNunc.org', 3, 2),
(20, 'Jeanette', 'Ross Knight', 'adipiscing@lectus.net', 2, 1),
(21, 'Francis', 'Garrison Sloan', 'a@liberoet.edu', 2, 4),
(22, 'Oprah', 'Colorado Hartman', 'blandit.at@massa.co.uk', 1, 1),
(23, 'Curran', 'Donna Conner', 'a@ametornarelectus.co.uk', 4, 1),
(24, 'Shea', 'Blaze Mooney', 'lectus@egestas.com', 4, 4),
(25, 'Uriel', 'Garth Sparks', 'Proin.dolor@Nullaeu.ca', 3, 1),
(26, 'Ashely', 'Paki Vang', 'risus@maurisblandit.net', 3, 4),
(27, 'Lyle', 'Alden Gordon', 'viverra@asollicitudin.ca', 3, 1),
(28, 'Josiah', 'Naida Forbes', 'sit.amet@nec.org', 2, 4),
(29, 'Lucas', 'Igor Talley', 'consectetuer.cursus.et@Etiam.org', 3, 4),
(30, 'Walter', 'Hayden Garner', 'dui@mauriselitdictum.co.uk', 4, 4),
(31, 'Chaney', 'Kennan Delacruz', 'Donec.at@libero.net', 3, 1),
(32, 'Jason', 'Nevada Wells', 'vel@sit.co.uk', 1, 1),
(33, 'Evelyn', 'Yolanda Savage', 'Nullam@vehiculaaliquetlibero.com', 1, 3),
(34, 'Jasmine', 'Jana Kaufman', 'eget.lacus.Mauris@urnaUttincidunt.com', 4, 3),
(35, 'Fitzgerald', 'Quentin Richardson', 'dolor.vitae@Phasellus.co.uk', 2, 3),
(36, 'Tashya', 'Freya Mooney', 'mattis@nonsapienmolestie.net', 1, 3),
(37, 'Kim', 'Lacy Pennington', 'ligula@inaliquetlobortis.net', 3, 2),
(38, 'James', 'Macon King', 'pulvinar.arcu@ut.net', 3, 3),
(39, 'Amy', 'Urielle Hamilton', 'eu.dolor@anteMaecenasmi.edu', 1, 4),
(40, 'Russell', 'Wallace Schwartz', 'Nullam.nisl@eratinconsectetuer.org', 1, 4),
(41, 'August', 'Sophia Carver', 'rutrum@porttitoreros.org', 4, 4),
(42, 'Serena', 'Larissa Chang', 'egestas.urna.justo@diam.org', 2, 1),
(43, 'Scarlett', 'Gemma Leon', 'gravida@arcuac.ca', 4, 1),
(44, 'Blythe', 'Ronan Jennings', 'Duis.gravida@lacusQuisque.co.uk', 4, 3),
(45, 'Elizabeth', 'Bruce Horn', 'euismod.in@Curabitursed.co.uk', 3, 4),
(46, 'Mohammad', 'Erich Kent', 'et.tristique.pellentesque@consectetuermauris.net', 3, 2),
(47, 'Chadwick', 'Howard Green', 'laoreet.ipsum@Donec.org', 3, 3),
(48, 'Ursa', 'Gretchen Ross', 'tortor@placerateget.net', 3, 3),
(49, 'Berk', 'Sonia Cash', 'amet@velit.org', 4, 2),
(50, 'Constance', 'Perry Hoffman', 'vel@egestas.net', 1, 1),
(51, 'Leah', 'Dylan Hendricks', 'Aenean@quispedePraesent.com', 3, 4),
(52, 'Boris', 'Sylvester Burch', 'libero.et.tristique@pellentesque.ca', 2, 3),
(53, 'Byron', 'Bo Pennington', 'nunc.nulla.vulputate@consectetuer.net', 3, 2),
(54, 'Daniel', 'Dorothy Stanton', 'aliquet.libero@montes.org', 3, 2),
(55, 'Tobias', 'Serena Tyson', 'Proin@lacinia.org', 4, 4),
(56, 'Carter', 'Jade Ward', 'sit.amet@hendreritidante.net', 1, 4),
(57, 'Gabriel', 'Dora Bray', 'vulputate.dui@atsemmolestie.edu', 3, 3),
(58, 'Keaton', 'Lamar Clements', 'enim.Mauris@ullamcorper.edu', 3, 3),
(59, 'Portia', 'Julie Mejia', 'dapibus@nec.org', 4, 4),
(60, 'Serena', 'Keegan Trevino', 'sociis@purusDuiselementum.com', 4, 2),
(61, 'Basia', 'Noelle Slater', 'lorem@nullavulputate.ca', 4, 1),
(62, 'Justin', 'Karen Gay', 'Nulla.eget.metus@scelerisqueneque.co.uk', 3, 1),
(63, 'Rudyard', 'Fuller Cobb', 'vel.faucibus@euodio.net', 1, 1),
(64, 'Marsden', 'Chadwick Buckley', 'in.aliquet.lobortis@turpisvitaepurus.org', 2, 3),
(65, 'Jacob', 'Xantha West', 'vel.sapien@mauriserateget.co.uk', 2, 3),
(66, 'Jemima', 'Mercedes Robbins', 'pede@Donecconsectetuer.org', 3, 2),
(67, 'Whoopi', 'Avram Curtis', 'lectus.a@convallisdolor.net', 3, 2),
(68, 'Curran', 'Quentin House', 'ac@In.com', 3, 2),
(69, 'Gary', 'Amity Lynn', 'fringilla.euismod@magna.edu', 4, 4),
(70, 'Marvin', 'Tana Bradley', 'sollicitudin.commodo@arcuiaculis.org', 1, 1),
(71, 'Maryam', 'Ivan Gilmore', 'Vivamus.non.lorem@cursuseteros.edu', 1, 3),
(72, 'Ifeoma', 'Jana Holcomb', 'lectus.a.sollicitudin@Maurismagna.com', 2, 2),
(73, 'Oscar', 'Miranda Mullins', 'fringilla@ligula.com', 3, 3),
(74, 'Keegan', 'Karina Cooley', 'elit.pretium.et@volutpatornarefacilisis.co.uk', 3, 2),
(75, 'Vincent', 'Declan Yang', 'ut@Namacnulla.com', 2, 4),
(76, 'Iris', 'Belle Valentine', 'tellus.non@aliquetmagnaa.org', 4, 3),
(77, 'Sierra', 'Jaden Austin', 'Donec@ac.com', 4, 1),
(78, 'Chaney', 'Hoyt Tyler', 'urna@neceleifend.net', 1, 1),
(79, 'Bernard', 'Elton Robles', 'orci.sem@Nunc.net', 2, 1),
(80, 'Kiayada', 'Jordan Hawkins', 'non.massa@velconvallis.org', 2, 1),
(81, 'Adrian', 'Dominique Barnes', 'ultricies@consectetueripsum.net', 4, 1),
(82, 'Keane', 'Veronica Jefferson', 'ornare.tortor@Nullaeu.ca', 2, 1),
(83, 'Seth', 'Hashim Stewart', 'ligula.consectetuer.rhoncus@sodaleseliterat.net', 4, 2),
(84, 'Jin', 'Cally Pollard', 'Sed.nunc@Fusce.org', 1, 2),
(85, 'Karly', 'Buckminster Hoover', 'libero@consectetueradipiscing.net', 3, 3),
(86, 'Rigel', 'Giselle Farmer', 'Quisque.porttitor@loremvehicula.net', 4, 2),
(87, 'Chiquita', 'Hadley Powell', 'tincidunt@tincidunt.ca', 4, 4),
(88, 'Isaac', 'Hyatt Gallagher', 'a.facilisis.non@est.com', 4, 3),
(89, 'Joy', 'Nola Calderon', 'ligula.Aenean@semperNamtempor.com', 3, 3),
(90, 'Joy', 'Rhona Oliver', 'dignissim.Maecenas@enim.edu', 3, 3),
(91, 'Lev', 'Signe Houston', 'at.pede.Cras@PraesentluctusCurabitur.edu', 1, 4),
(92, 'Noelani', 'Graiden Allen', 'vehicula.aliquet@tempusrisus.net', 3, 2),
(93, 'Ginger', 'Constance Mejia', 'ullamcorper.Duis@risusquis.edu', 1, 1),
(94, 'Sydnee', 'Harrison Henson', 'ut.lacus@lacus.org', 1, 1),
(95, 'Nita', 'Russell Ball', 'vehicula@a.org', 4, 3),
(96, 'Rigel', 'Curran Emerson', 'penatibus.et@imperdietornare.net', 2, 2),
(97, 'Lucius', 'Sopoline Pate', 'euismod@turpis.edu', 2, 3),
(98, 'Adrian', 'Hakeem Rivera', 'congue@Vivamus.org', 3, 1),
(99, 'Roary', 'Aladdin Baird', 'dapibus.id@idblanditat.ca', 2, 3),
(100, 'Wesley', 'Amos James', 'aliquet@montesnascetur.net', 1, 4);

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
  `titulo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `trabajos`
--

INSERT INTO `trabajos` (`id_trabajo`, `titulo`) VALUES
(1, 'Judah, Ferris, Jasper, Jaquelyn'),
(2, 'Louis, Rhoda, Abraham, Debra'),
(3, 'Brooke, Kibo, Jacob, Xandra'),
(4, 'Cecilia, Lamar, Eric, Kimberley'),
(5, 'Hyacinth, Penelope, Alexa, Ahmed'),
(6, 'Pearl, Silas, Willow, Acton'),
(7, 'Zachery, Alana, Raphael, Malcolm'),
(8, 'Indira, Kareem, Otto, Illiana'),
(9, 'Steel, Emmanuel, Kai, Mara'),
(10, 'Stone, Calvin, Britanni, Carter'),
(11, 'Sydnee, Ian, Geoffrey, Morgan'),
(12, 'Tiger, Ayanna, Clark, Astra'),
(13, 'Phillip, Prescott, Emerson, Xander'),
(14, 'Lesley, Claire, Daphne, Erasmus'),
(15, 'Gabriel, Nadine, Ralph, Jeremy'),
(16, 'Aladdin, Hilda, Vincent, Lacy'),
(17, 'Martin, Illiana, Nathan, Lois'),
(18, 'Barry, Darryl, Armando, Maia'),
(19, 'Demetria, Quin, Seth, Kameko'),
(20, 'Astra, Danielle, Genevieve, Jada'),
(21, 'Macy, Gannon, Rebekah, Joel'),
(22, 'Quincy, Lacota, Walker, Rinah'),
(23, 'Madeson, Quinlan, Wade, Edward'),
(24, 'Colton, Clayton, Zephania, Lewis'),
(25, 'Maxine, Leonard, Ora, Simon'),
(26, 'Xyla, Holmes, Allen, Leilani'),
(27, 'Julian, Raven, Inga, Colt'),
(28, 'Remedios, Violet, Jordan, Beatrice'),
(29, 'Talon, Bevis, Germane, Jared'),
(30, 'Vaughan, Elaine, Kirby, Duncan'),
(31, 'Ferris, Wayne, Deanna, Zachery'),
(32, 'Bruno, Cody, Caleb, Miranda'),
(33, 'Hunter, Inez, Hillary, Violet'),
(34, 'Amir, Prescott, Odysseus, Erin'),
(35, 'Amber, Aquila, Emi, Raja'),
(36, 'Cassidy, Chaim, Hadley, Logan'),
(37, 'Dalton, Alisa, Caleb, Demetria'),
(38, 'Zeph, Michael, Armando, Leandra'),
(39, 'Matthew, Molly, Alexandra, Josiah'),
(40, 'Rahim, Randall, Judah, Maryam'),
(41, 'Winter, Seth, Quinn, Wanda'),
(42, 'Tallulah, Honorato, Shea, Mechelle'),
(43, 'Montana, Garth, Prescott, Austin'),
(44, 'Todd, Karyn, Christen, Alfonso'),
(45, 'Eleanor, Nero, Walter, Hedley'),
(46, 'Maxwell, Hedley, Urielle, Brianna'),
(47, 'Nora, Idola, Natalie, Brenna'),
(48, 'Zelda, Alexa, Noah, Kuame'),
(49, 'Noah, Hashim, Zachery, Rooney'),
(50, 'Jael, Jayme, Emery, Colt'),
(51, 'Cameran, Erasmus, Lewis, Venus'),
(52, 'Xanthus, Nehru, Malachi, Marvin'),
(53, 'Erin, Jakeem, Erasmus, Murphy'),
(54, 'Dominique, Nigel, Acton, Maxwell'),
(55, 'Audrey, Tanya, Harding, Lionel'),
(56, 'Xantha, Jamal, Blaine, Kyle'),
(57, 'Stacy, Kylie, Jerry, Keegan'),
(58, 'Demetrius, Vernon, Lawrence, Shannon'),
(59, 'Nadine, Amery, Deacon, Brandon'),
(60, 'Raphael, Liberty, Alisa, Geoffrey'),
(61, 'Kareem, Noelle, Rina, Berk'),
(62, 'Edward, Price, Sydnee, Elton'),
(63, 'Dominique, Indigo, Orli, Nolan'),
(64, 'Hayfa, Christopher, Kamal, Emery'),
(65, 'Rafael, Kareem, Edward, Ulysses'),
(66, 'Savannah, Gemma, Bree, Tarik'),
(67, 'Calvin, Uta, Kato, Lucy'),
(68, 'Grady, Eric, Amity, Ursula'),
(69, 'Louis, Curran, Signe, Madaline'),
(70, 'Silas, Montana, Merritt, Graiden'),
(71, 'Erasmus, Davis, Eagan, Dante'),
(72, 'Roanna, Shad, Shoshana, Patrick'),
(73, 'Gage, Ignacia, Thane, Rafael'),
(74, 'Jameson, Xerxes, Beverly, Lev'),
(75, 'Perry, Rana, Channing, Rosalyn'),
(76, 'Faith, Lila, Ashely, Hilda'),
(77, 'Laith, Eugenia, Harrison, Kamal'),
(78, 'Amethyst, Ingrid, Serina, Anthony'),
(79, 'Macaulay, Shafira, Mariam, Dennis'),
(80, 'Joelle, Linus, Derek, Naomi'),
(81, 'Jared, Flynn, Ina, Berk'),
(82, 'Hillary, Amena, Amber, Graham'),
(83, 'Timothy, Slade, Jennifer, Dara'),
(84, 'Barry, Nomlanga, Hilel, Eden'),
(85, 'Tallulah, Amelia, Jolie, Debra'),
(86, 'Brian, Imelda, Duncan, Molly'),
(87, 'Kirsten, Mercedes, Keegan, Ethan'),
(88, 'Aimee, Akeem, Beatrice, Christen'),
(89, 'Stephanie, Denton, Jelani, Naomi'),
(90, 'Macey, Doris, Kendall, Sonia'),
(91, 'Ferdinand, Pandora, Nadine, Shelly'),
(92, 'Shea, Duncan, Lyle, Samson'),
(93, 'Olga, Abbot, Clarke, Timon'),
(94, 'Dale, Fuller, Kyla, Wayne'),
(95, 'Felix, Riley, Marshall, Aileen'),
(96, 'Julian, Davis, Jackson, Melissa'),
(97, 'Amber, Phillip, Calvin, Daquan'),
(98, 'Liberty, Cheyenne, Alika, Palmer'),
(99, 'Cameron, Camilla, Omar, Jada'),
(100, 'Judah, Colin, Mohammad, Thomas');

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
  MODIFY `id_persona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
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
  MODIFY `id_trabajo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
