-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-09-2023 a las 18:15:07
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `anemia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `atencion_medica`
--

CREATE TABLE `atencion_medica` (
  `embarazo` varchar(10) NOT NULL,
  `puerperio` varchar(10) NOT NULL,
  `id_paciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `atencion_medica`
--

INSERT INTO `atencion_medica` (`embarazo`, `puerperio`, `id_paciente`) VALUES
('Si', 'Si', 1),
('Sin regist', 'Sin regist', 2),
('Sin regist', 'Sin regist', 3),
('Sin regist', 'Sin regist', 4),
('Sin regist', 'Sin regist', 5),
('Sin regist', 'Sin regist', 7),
('No', 'No', 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conmorbilidades`
--

CREATE TABLE `conmorbilidades` (
  `tip` tinyint(1) DEFAULT NULL,
  `cancer` tinyint(1) DEFAULT NULL,
  `neumonia` tinyint(1) DEFAULT NULL,
  `drogasIV` tinyint(1) DEFAULT NULL,
  `eclampsia` tinyint(1) DEFAULT NULL,
  `artropatia` tinyint(1) DEFAULT NULL,
  `les_activo` tinyint(1) DEFAULT NULL,
  `miomatosis` tinyint(1) DEFAULT NULL,
  `nefropatia` tinyint(1) DEFAULT NULL,
  `colelitiasis` tinyint(1) DEFAULT NULL,
  `sx_hellp` tinyint(1) DEFAULT NULL,
  `sx_nefrotico` tinyint(1) DEFAULT NULL,
  `drepanocitica` tinyint(1) DEFAULT NULL,
  `hipotiroidismo` tinyint(1) DEFAULT NULL,
  `miastenia_gravis` tinyint(1) DEFAULT NULL,
  `ruptura_esplenica` tinyint(1) DEFAULT NULL,
  `lesion_renal` tinyint(1) DEFAULT NULL,
  `enferemedades_graves` tinyint(1) DEFAULT NULL,
  `diabetes_gestacional` tinyint(1) DEFAULT NULL,
  `condilomatosis_vulvar` tinyint(1) DEFAULT NULL,
  `hipertension_gestacional` tinyint(1) DEFAULT NULL,
  `falla_cardiaca` tinyint(1) DEFAULT NULL,
  `infeccion_vias` tinyint(1) DEFAULT NULL,
  `desequilibrio_hidro` tinyint(1) DEFAULT NULL,
  `ninguna` tinyint(1) DEFAULT NULL,
  `id_paciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `conmorbilidades`
--

INSERT INTO `conmorbilidades` (`tip`, `cancer`, `neumonia`, `drogasIV`, `eclampsia`, `artropatia`, `les_activo`, `miomatosis`, `nefropatia`, `colelitiasis`, `sx_hellp`, `sx_nefrotico`, `drepanocitica`, `hipotiroidismo`, `miastenia_gravis`, `ruptura_esplenica`, `lesion_renal`, `enferemedades_graves`, `diabetes_gestacional`, `condilomatosis_vulvar`, `hipertension_gestacional`, `falla_cardiaca`, `infeccion_vias`, `desequilibrio_hidro`, `ninguna`, `id_paciente`) VALUES
(1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2),
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3),
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4),
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5),
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 7),
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_paciente`
--

CREATE TABLE `datos_paciente` (
  `id_paciente` int(11) NOT NULL,
  `curp` varchar(20) NOT NULL,
  `nombre_paciente` varchar(50) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `edad` int(11) NOT NULL,
  `sexo` varchar(15) NOT NULL,
  `asnm` varchar(20) NOT NULL,
  `talla` decimal(3,2) NOT NULL,
  `peso` decimal(5,2) NOT NULL,
  `imc` decimal(5,2) NOT NULL,
  `resultadoimc` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `datos_paciente`
--

INSERT INTO `datos_paciente` (`id_paciente`, `curp`, `nombre_paciente`, `fecha_nacimiento`, `edad`, `sexo`, `asnm`, `talla`, `peso`, `imc`, `resultadoimc`) VALUES
(1, 'CILJ020514HMCHPSA2', 'Haz', '2002-05-14', 21, 'Hombre', '1000 msnm', '1.78', '68.00', '21.46', 'Peso normal'),
(2, 'GAOA010207MDFLLNA9', 'KAREN', '2001-02-07', 22, 'Mujer', '2000 msnm', '1.70', '68.00', '23.53', 'Peso normal'),
(3, 'GAOA010207MDFLLNA1', 'KAREN', '2001-02-07', 22, 'Mujer', '1000 msnm', '1.70', '68.00', '23.53', 'Peso normal'),
(4, 'GAOA010207MDFLLNA2', 'Karen', '2001-02-07', 22, 'Mujer', '2000 msnm', '1.70', '68.00', '23.53', 'Peso normal'),
(5, 'CILJ020514HMCHPSA3', 'Haz', '2002-05-14', 21, 'Hombre', 'Al Nivel del Mar', '1.78', '68.00', '21.46', 'Peso normal'),
(7, 'GAOA010207MDFLLNA3', 'Ejemplo', '2001-02-07', 22, 'Mujer', '2000 msnm', '1.44', '44.00', '21.22', 'Peso normal'),
(8, 'OEPS921224MMCLXN08', 'Sandra Olvera', '1992-12-24', 30, 'Mujer', '2000 msnm', '1.71', '60.00', '20.52', 'Peso normal');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `post_hierro`
--

CREATE TABLE `post_hierro` (
  `post_hemoglobina` int(11) NOT NULL,
  `post_b12` int(11) NOT NULL,
  `post_ferretina` int(11) NOT NULL,
  `post_calculoDeficiencia` int(11) NOT NULL,
  `post_tratamiento` varchar(20) NOT NULL,
  `tratamiento_oral` varchar(20) NOT NULL,
  `post_sacarato` varchar(20) NOT NULL,
  `post_dosis_sacarato` varchar(20) NOT NULL,
  `post_numero_dosisSacarato` int(11) NOT NULL,
  `post_carboximaltosa` varchar(20) NOT NULL,
  `post_dosis_carboximaltosa` varchar(20) NOT NULL,
  `post_numero_dosisCarboximaltosa` int(11) NOT NULL,
  `post_dextrano` varchar(20) NOT NULL,
  `post_dosis_dextrano` varchar(20) NOT NULL,
  `post_numero_dosisDextrano` int(11) NOT NULL,
  `post_premeditacion` varchar(20) NOT NULL,
  `post_medicamento` varchar(20) NOT NULL,
  `post_solucion_infundida` varchar(20) NOT NULL,
  `id_paciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `post_hierro`
--

INSERT INTO `post_hierro` (`post_hemoglobina`, `post_b12`, `post_ferretina`, `post_calculoDeficiencia`, `post_tratamiento`, `tratamiento_oral`, `post_sacarato`, `post_dosis_sacarato`, `post_numero_dosisSacarato`, `post_carboximaltosa`, `post_dosis_carboximaltosa`, `post_numero_dosisCarboximaltosa`, `post_dextrano`, `post_dosis_dextrano`, `post_numero_dosisDextrano`, `post_premeditacion`, `post_medicamento`, `post_solucion_infundida`, `id_paciente`) VALUES
(1, 1, 1, 1, 'Si', 'Si', 'Si', '300', 1, 'Si', '500', 1, 'Si', '300', 1, 'Si', 'Clorpinamida', 'Cloruro de Sodio', 1),
(0, 0, 0, 0, 'Sin registro', 'Sin registro', 'Sin registro', 'Sin registro', 0, 'Sin registro', 'Sin registro', 0, 'Sin registro', 'Sin registro', 0, 'Sin registro', 'Sin registro', 'Sin registro', 2),
(0, 0, 0, 0, 'Sin registro', 'Sin registro', 'Sin registro', 'Sin registro', 0, 'Sin registro', 'Sin registro', 0, 'Sin registro', 'Sin registro', 0, 'Sin registro', 'Sin registro', 'Sin registro', 3),
(0, 0, 0, 0, 'Sin registro', 'Sin registro', 'Sin registro', 'Sin registro', 0, 'Sin registro', 'Sin registro', 0, 'Sin registro', 'Sin registro', 0, 'Sin registro', 'Sin registro', 'Sin registro', 4),
(0, 0, 0, 0, 'Sin registro', 'Sin registro', 'Sin registro', 'Sin registro', 0, 'Sin registro', 'Sin registro', 0, 'Sin registro', 'Sin registro', 0, 'Sin registro', 'Sin registro', 'Sin registro', 5),
(0, 0, 0, 0, 'Sin registro', 'Sin registro', 'Sin registro', 'Sin registro', 0, 'Sin registro', 'Sin registro', 0, 'Sin registro', 'Sin registro', 0, 'Sin registro', 'Sin registro', 'Sin registro', 7),
(12, 12, 12, 12, 'Si', 'Si', 'Si', '300', 1, 'Si', '500', 1, 'Si', '300', 1, 'Si', 'Clorpinamida', 'Cloruro de Sodio', 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pre_hierro`
--

CREATE TABLE `pre_hierro` (
  `pre_hemoglobina` int(11) NOT NULL,
  `pre_b12` int(11) NOT NULL,
  `pre_ferretina` int(11) NOT NULL,
  `pre_calculoDeficiencia` int(11) NOT NULL,
  `pre_tratamiento` varchar(10) NOT NULL,
  `pre_sacarato` varchar(10) NOT NULL,
  `dosis_sacarato` varchar(10) NOT NULL,
  `numero_dosisSacarato` int(11) NOT NULL,
  `pre_carboximaltosa` varchar(10) NOT NULL,
  `dosis_carboximaltosa` varchar(10) NOT NULL,
  `numero_dosisCarboximaltosa` int(11) NOT NULL,
  `pre_dextrano` varchar(10) NOT NULL,
  `dosis_dextrano` varchar(10) NOT NULL,
  `numero_dosisDextrano` int(11) NOT NULL,
  `premeditacion` varchar(10) NOT NULL,
  `medicamento` varchar(20) NOT NULL,
  `solucion_infundida` varchar(20) NOT NULL,
  `id_paciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pre_hierro`
--

INSERT INTO `pre_hierro` (`pre_hemoglobina`, `pre_b12`, `pre_ferretina`, `pre_calculoDeficiencia`, `pre_tratamiento`, `pre_sacarato`, `dosis_sacarato`, `numero_dosisSacarato`, `pre_carboximaltosa`, `dosis_carboximaltosa`, `numero_dosisCarboximaltosa`, `pre_dextrano`, `dosis_dextrano`, `numero_dosisDextrano`, `premeditacion`, `medicamento`, `solucion_infundida`, `id_paciente`) VALUES
(1, 1, 1, 1, 'Si', 'Si', '300', 1, 'Si', '500', 1, 'Si', '300', 1, 'Si', 'Clorpinamida', 'Cloruro de Sodio', 1),
(0, 0, 0, 0, 'Sin regist', 'Sin regist', 'Sin regist', 0, 'Sin regist', 'Sin regist', 0, 'Sin regist', '0', 0, 'Sin regist', 'Sin registro', 'Sin registro', 2),
(0, 0, 0, 0, 'Sin regist', 'Sin regist', 'Sin regist', 0, 'Sin regist', 'Sin regist', 0, 'Sin regist', '0', 0, 'Sin regist', 'Sin registro', 'Sin registro', 3),
(0, 0, 0, 0, 'Sin regist', 'Sin regist', 'Sin regist', 0, 'Sin regist', 'Sin regist', 0, 'Sin regist', '0', 0, 'Sin regist', 'Sin registro', 'Sin registro', 4),
(0, 0, 0, 0, 'Sin regist', 'Sin regist', 'Sin regist', 0, 'Sin regist', 'Sin regist', 0, 'Sin regist', '0', 0, 'Sin regist', 'Sin registro', 'Sin registro', 5),
(0, 0, 0, 0, 'Sin regist', 'Sin regist', 'Sin regist', 0, 'Sin regist', 'Sin regist', 0, 'Sin regist', '0', 0, 'Sin regist', 'Sin registro', 'Sin registro', 7),
(12, 12, 12, 12, 'Si', 'Si', '500', 2, 'Si', '500', 2, 'Si', '400', 2, 'Si', 'Clorpinamida', 'Cloruro de Sodio', 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `procedimiento_qx`
--

CREATE TABLE `procedimiento_qx` (
  `cirugia` varchar(10) NOT NULL,
  `fecha_cirugia` date NOT NULL,
  `pre_qxHemoglobina` int(11) NOT NULL,
  `cesarea` varchar(10) NOT NULL,
  `fecha_cesarea` date NOT NULL,
  `hemorragia_masiva` varchar(10) NOT NULL,
  `cantidad_sangrado` int(11) NOT NULL,
  `hemorragia` varchar(10) NOT NULL,
  `complicasiones` varchar(10) NOT NULL,
  `transfusiones` varchar(10) NOT NULL,
  `ninguna_transfusion` tinyint(1) DEFAULT NULL,
  `plasma` tinyint(1) DEFAULT NULL,
  `no_plasma` int(11) NOT NULL,
  `plaquetas` tinyint(1) DEFAULT NULL,
  `no_plaquetas` int(11) NOT NULL,
  `crioprecipitado` tinyint(1) DEFAULT NULL,
  `no_crioprecipitado` int(11) NOT NULL,
  `plaqueta_globular` tinyint(1) DEFAULT NULL,
  `no_plaqueta_globular` int(11) NOT NULL,
  `id_paciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `procedimiento_qx`
--

INSERT INTO `procedimiento_qx` (`cirugia`, `fecha_cirugia`, `pre_qxHemoglobina`, `cesarea`, `fecha_cesarea`, `hemorragia_masiva`, `cantidad_sangrado`, `hemorragia`, `complicasiones`, `transfusiones`, `ninguna_transfusion`, `plasma`, `no_plasma`, `plaquetas`, `no_plaquetas`, `crioprecipitado`, `no_crioprecipitado`, `plaqueta_globular`, `no_plaqueta_globular`, `id_paciente`) VALUES
('Si', '2019-08-17', 1, 'Si', '2023-12-30', 'Si', 1, 'Si', 'Si', 'Si', 0, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('Sin regist', '0000-00-00', 0, 'Sin regist', '0000-00-00', 'Sin regist', 0, 'Sin regist', 'Sin regist', 'Sin regist', 0, 0, 0, 0, 0, 0, 0, 0, 0, 2),
('Sin regist', '0000-00-00', 0, 'Sin regist', '0000-00-00', 'Sin regist', 0, 'Sin regist', 'Sin regist', 'Sin regist', 0, 0, 0, 0, 0, 0, 0, 0, 0, 3),
('Sin regist', '0000-00-00', 0, 'Sin regist', '0000-00-00', 'Sin regist', 0, 'Sin regist', 'Sin regist', 'Sin regist', 0, 0, 0, 0, 0, 0, 0, 0, 0, 4),
('Sin regist', '0000-00-00', 0, 'Sin regist', '0000-00-00', 'Sin regist', 0, 'Sin regist', 'Sin regist', 'Sin regist', 0, 0, 0, 0, 0, 0, 0, 0, 0, 5),
('Sin regist', '0000-00-00', 0, 'Sin regist', '0000-00-00', 'Sin regist', 0, 'Sin regist', 'Sin regist', 'Sin regist', 0, 0, 0, 0, 0, 0, 0, 0, 0, 7),
('Si', '2023-09-06', 12, 'Si', '2023-09-01', 'Si', 12, 'No', 'Si', 'Si', 0, 1, 12, 1, 12, 1, 12, 1, 12, 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reacciones_posteriores`
--

CREATE TABLE `reacciones_posteriores` (
  `post_cefalea` tinyint(1) DEFAULT NULL,
  `post_nauseas` tinyint(1) DEFAULT NULL,
  `post_hipertension` tinyint(1) DEFAULT NULL,
  `post_hipotension` tinyint(1) DEFAULT NULL,
  `post_taquicardia` tinyint(1) DEFAULT NULL,
  `post_bradicardia` tinyint(1) DEFAULT NULL,
  `post_otro` tinyint(1) DEFAULT NULL,
  `post_ninguna` tinyint(1) DEFAULT NULL,
  `post_grado_reaccion` varchar(15) DEFAULT NULL,
  `id_paciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `reacciones_posteriores`
--

INSERT INTO `reacciones_posteriores` (`post_cefalea`, `post_nauseas`, `post_hipertension`, `post_hipotension`, `post_taquicardia`, `post_bradicardia`, `post_otro`, `post_ninguna`, `post_grado_reaccion`, `id_paciente`) VALUES
(1, 1, 1, 1, 1, 1, 1, 0, '1', 1),
(0, 0, 0, 0, 0, 0, 0, 0, '1', 2),
(0, 0, 0, 0, 0, 0, 0, 0, '1', 3),
(0, 0, 0, 0, 0, 0, 0, 0, '1', 4),
(0, 0, 0, 0, 0, 0, 0, 0, '1', 5),
(0, 0, 0, 0, 0, 0, 0, 0, '1', 7),
(0, 1, 0, 0, 0, 0, 0, 0, '1', 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reacciones_previas`
--

CREATE TABLE `reacciones_previas` (
  `pre_cefalea` tinyint(1) DEFAULT NULL,
  `pre_nauseas` tinyint(1) DEFAULT NULL,
  `pre_hipertension` tinyint(1) DEFAULT NULL,
  `pre_hipotension` tinyint(1) DEFAULT NULL,
  `pre_taquicardia` tinyint(1) DEFAULT NULL,
  `pre_bradicardia` tinyint(1) DEFAULT NULL,
  `pre_otro` tinyint(1) DEFAULT NULL,
  `pre_ninguna` tinyint(1) DEFAULT NULL,
  `pre_grado_reaccion` varchar(15) DEFAULT NULL,
  `id_paciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `reacciones_previas`
--

INSERT INTO `reacciones_previas` (`pre_cefalea`, `pre_nauseas`, `pre_hipertension`, `pre_hipotension`, `pre_taquicardia`, `pre_bradicardia`, `pre_otro`, `pre_ninguna`, `pre_grado_reaccion`, `id_paciente`) VALUES
(1, 1, 1, 1, 1, 1, 1, 0, '1', 1),
(0, 0, 0, 0, 0, 0, 0, 0, '1', 2),
(0, 0, 0, 0, 0, 0, 0, 0, '1', 3),
(0, 0, 0, 0, 0, 0, 0, 0, '1', 4),
(0, 0, 0, 0, 0, 0, 0, 0, '1', 5),
(0, 0, 0, 0, 0, 0, 0, 0, '1', 7),
(0, 1, 0, 0, 0, 0, 0, 0, '1', 8);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `atencion_medica`
--
ALTER TABLE `atencion_medica`
  ADD KEY `id_paciente` (`id_paciente`);

--
-- Indices de la tabla `conmorbilidades`
--
ALTER TABLE `conmorbilidades`
  ADD KEY `id_paciente` (`id_paciente`);

--
-- Indices de la tabla `datos_paciente`
--
ALTER TABLE `datos_paciente`
  ADD PRIMARY KEY (`id_paciente`),
  ADD UNIQUE KEY `curp` (`curp`);

--
-- Indices de la tabla `post_hierro`
--
ALTER TABLE `post_hierro`
  ADD KEY `id_paciente` (`id_paciente`);

--
-- Indices de la tabla `pre_hierro`
--
ALTER TABLE `pre_hierro`
  ADD KEY `id_paciente` (`id_paciente`);

--
-- Indices de la tabla `procedimiento_qx`
--
ALTER TABLE `procedimiento_qx`
  ADD KEY `id_paciente` (`id_paciente`);

--
-- Indices de la tabla `reacciones_posteriores`
--
ALTER TABLE `reacciones_posteriores`
  ADD KEY `id_paciente` (`id_paciente`);

--
-- Indices de la tabla `reacciones_previas`
--
ALTER TABLE `reacciones_previas`
  ADD KEY `id_paciente` (`id_paciente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos_paciente`
--
ALTER TABLE `datos_paciente`
  MODIFY `id_paciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
