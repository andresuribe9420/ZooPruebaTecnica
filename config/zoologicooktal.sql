
--
-- Estructura de tabla para la tabla `tblanimal`
--

CREATE TABLE `tblanimal` (
  `ani_id` int(10) NOT NULL,
  `ani_nombre` varchar(35) NOT NULL,
  `ani_especie` varchar(20) NOT NULL,
  `ani_sexo` varchar(10) NOT NULL,
  `ani_fnacimiento` date NOT NULL,
  `ani_fingreso` date NOT NULL,
  `ani_color` varchar(10) NOT NULL,
  `ani_raza` varchar(10) NOT NULL,
  `tblcuidador_cui_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tblanimal`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblcria`
--

CREATE TABLE `tblcria` (
  `cri_id` int(10) NOT NULL,
  `cri_nombre` varchar(35) NOT NULL,
  `cri_raza` varchar(35) NOT NULL,
  `cri_especie` varchar(35) NOT NULL,
  `cri_sexo` varchar(10) NOT NULL,
  `cri_color` varchar(35) NOT NULL,
  `cri_fnacimiento` date NOT NULL,
  `tblanimal_ani_id` int(10) NOT NULL,
  `tblcuidador_cui_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tblcria`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblcuidador`
--

CREATE TABLE `tblcuidador` (
  `cui_id` int(10) NOT NULL,
  `cui_cedula` int(15) UNSIGNED NOT NULL,
  `cui_nombre` varchar(35) NOT NULL,
  `cui_apellido` varchar(35) NOT NULL,
  `cui_telefono` int(15) UNSIGNED NOT NULL,
  `cui_correo` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tblcuidador`
--

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tblanimal`
--
ALTER TABLE `tblanimal`
  ADD PRIMARY KEY (`ani_id`),
  ADD KEY `tblcuidador_cui_id` (`tblcuidador_cui_id`);

--
-- Indices de la tabla `tblcria`
--
ALTER TABLE `tblcria`
  ADD PRIMARY KEY (`cri_id`),
  ADD KEY `tblanimal_ani_id` (`tblanimal_ani_id`),
  ADD KEY `cuidador` (`tblcuidador_cui_id`);

--
-- Indices de la tabla `tblcuidador`
--
ALTER TABLE `tblcuidador`
  ADD PRIMARY KEY (`cui_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tblanimal`
--
ALTER TABLE `tblanimal`
  MODIFY `ani_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tblcria`
--
ALTER TABLE `tblcria`
  MODIFY `cri_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tblcuidador`
--
ALTER TABLE `tblcuidador`
  MODIFY `cui_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tblanimal`
--
ALTER TABLE `tblanimal`
  ADD CONSTRAINT `tblcuidador_cui_id` FOREIGN KEY (`tblcuidador_cui_id`) REFERENCES `tblcuidador` (`cui_id`);

--
-- Filtros para la tabla `tblcria`
--
ALTER TABLE `tblcria`
  ADD CONSTRAINT `cuidador` FOREIGN KEY (`tblcuidador_cui_id`) REFERENCES `tblcuidador` (`cui_id`),
  ADD CONSTRAINT `tblanimal_ani_id` FOREIGN KEY (`tblanimal_ani_id`) REFERENCES `tblanimal` (`ani_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
