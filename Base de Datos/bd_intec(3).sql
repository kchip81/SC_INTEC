-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-11-2019 a las 21:33:35
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_intec`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogoestatusorden`
--

CREATE TABLE `catalogoestatusorden` (
  `IdEstatusOrden` int(11) NOT NULL,
  `DescripcionEstatusOrden` varchar(50) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `catalogoestatusorden`
--

INSERT INTO `catalogoestatusorden` (`IdEstatusOrden`, `DescripcionEstatusOrden`) VALUES
(1, 'CREADA'),
(2, 'EN SERVICIO'),
(3, 'CERRADA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogoestatuspaquetes`
--

CREATE TABLE `catalogoestatuspaquetes` (
  `IdEstatusPaquete` int(11) NOT NULL,
  `DescripcionEstatusPaquete` varchar(40) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `catalogoestatuspaquetes`
--

INSERT INTO `catalogoestatuspaquetes` (`IdEstatusPaquete`, `DescripcionEstatusPaquete`) VALUES
(1, 'Creado'),
(2, 'Enviado a Laboratorio'),
(3, 'Recibido Laboratorio'),
(4, 'Calibración Terminada'),
(5, 'En Retorno'),
(6, 'Recibido Intec'),
(7, 'Terminado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `IdCliente` int(11) NOT NULL,
  `NombreCompania` varchar(50) DEFAULT NULL,
  `NombreContacto` varchar(50) DEFAULT NULL,
  `Domicilio` varchar(50) DEFAULT NULL,
  `Correo` varchar(50) DEFAULT NULL,
  `Telefono` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`IdCliente`, `NombreCompania`, `NombreContacto`, `Domicilio`, `Correo`, `Telefono`) VALUES
(1, 'Vianney', 'Vianney', '', '', ''),
(2, 'TK', 'TK', '', '', ''),
(3, 'HOWA', 'HOWA', '', '', ''),
(4, 'QUAGSA', 'QUAGSA', NULL, NULL, NULL),
(5, 'SANOH', 'SANOH', NULL, NULL, NULL),
(6, 'ITW', 'ITW', NULL, NULL, NULL),
(7, 'OSHITANI', 'OSHITANI', NULL, NULL, NULL),
(8, 'Centro Diesel Profesional SA de CV', 'Armando Delgado', 'Carr. Salida a Durango, Plan de Ayal S/N', 'armando.delgado.silva@gmail.com', NULL),
(9, 'Quality Bolca S.A de C.V', '', 'Av. Independencia  203 Paseos de Aguascalientes C.', '\r', '9139955'),
(10, 'Ditromexico S.A. de C.V.', '', 'PABELLON DE ARTEAGA 114 PARQUE INDUSTRIAL DEL VALL', '\r', '01 (449) 9734300'),
(11, 'Grupo FARSANMAR S.A. de C.V.', 'Andres Ramirez', 'Avenida Circuito Aguascalientes 142-D Parque Indus', 'andres.ramirez@farmaciastamaria.com\r', '(449) 1-58-24-00'),
(12, 'SIA AUTOMATION S. DE R.L DE C.V', 'Israel Bueno ', 'AV. PASEO DE LOS INSURGENTES 304 INT. 20 JARDINES ', 'i.bueno@sia-automation.com.mx\r', '9711951'),
(13, 'SANDRA ELISA HERNANDEZ', 'oscar calzada rodriguez ', 'Jesus Rivera Franco 301 Cd. Industrial Aguascalien', 'oscarespmec@outlook.com\r', '9712479 - 9712353-68'),
(14, 'QUALITY DE AGUASCALIENTES S.A. DE C.V.', 'Marisol Haro', 'Av. Canal interceptor 703 Int. 5 Las arboledas Agu', 'marisol.haro@quagsa.com.mx\r', '1759823'),
(15, 'TF-METAL MEXICO SA DE CV', 'salvador Duenas ', 'Circuito Cerezos Sur No 105 san Francisco de los R', 's-duenas@tf-metal.mx\r', '52 449 922 40 00 ext'),
(16, 'VITECHMEX NONWOVENS SA DE CV', 'Nancy Martinez ', 'CARRETERA 45 NORTE KM 14.3 325-B J. Gomez Portugal', 'nmartinez@vitechmfgmx.com\r', '1535700- 1535711'),
(17, 'METALISTIK SA DE CV', 'Javier Delgado ', 'CARRETERA PANAMERICANA NORTE KM 14 INT. 15 PASEOS ', 'javier.delgado@metalistik.com\r', '449 188 42 19'),
(18, 'MGM NUTRICION ANIMAL SA DE CV', 'Ing. Cuahutemoc Sanchez', 'Carretera a San Luis Potosi km 14.5 El Retono Agua', 'csanchez@mgmnutricionanimal.com\r', '9711914'),
(19, 'MEXICO MURATA SPRING CORPORATION S.A DE C.V', 'Jose Haro ', 'PROLONGACION CONSTITUCION 802 EL PUERTECITO DE LA ', 'jharo@mexicomsc.com\r', '449 412 36 33'),
(20, 'SHOSHIBA MEXICANA SA DE CV', 'Adan Murillo ', 'CARRETERA 45 NORTE KM 14.3 325 A JESUS MARIA PORTU', 'adan.murillo@shoshiba.com.mx\r', '929 5434'),
(21, 'INDUSTRIAS DMU S.A DE C.V.', 'Refugio Rangel ', 'JOSE BARBA ALONSO 105 CD. INDUSTRIAL AGUASCALIENTE', 'rrangel@ind-dmu.com\r', '9712587'),
(22, 'J&R MAQUINADOS INDUSTRIALES S.A. DE C.V.', '', 'HEROE DE NACOZARI NTE 2905 INT. 3 LAS HADAS AGUASC', '\r', '912 11 85'),
(23, 'MAQUINADOS Y SERVICIOS ESPECIALIZADOS, S.A. DE C.V', '', 'AV. SIGLO XIX 109 LOMAS DE SANTA ANITA AGUASCALIEN', '\r', '9755502'),
(24, 'KUROTA MEXICO S.A. DE C.V.', 'Esmeralda Montes ', 'CIRCUITO CEREZO SUR 108 PARQUE INDUSTRIAL SAN FCO.', 'compras1@kurota-mx.com\r', '478-31-03'),
(25, 'Gestamp Aguascalientes S.A. de C.V.', 'Edgar Duron', 'AVDA. DE JAPON 124 PARQUE INDUSTRIAL SAN FRANCISCO', '\r', '449 910 9140 Ext. 19'),
(26, 'COMPANIA ALIMENTICIA RIVERA ROMO SA DE CV', '', 'Av. Independencia 502 Fracc. El sol Aguascalientes', 'calidad.ags@galletasvanessa.com.mxoffice@bccbi.bg\r', '9 15 55 45. Ext. 108'),
(27, 'IMPULSORA DE HERRAMIENTAS DEL CENTRO S. de R.L de ', 'Roberto Diaz', 'Altena 105 Ejido Cumbres Aguascalientes C.P 20175', 'ihc.ags@hotmail.com\r', '01 449 9725314'),
(28, 'TST NIKKEI METALES S. DE RL. DE CV.', 'Miguel Reyes ', 'CARRETERA LOS ARELLANOS P4 ARELLANO AGUASCALIENTES', 'mreyes@tstnikkei.com\r', ' 449 929 5517'),
(29, 'PARKER-TRUTEC MEXICANA S.A. DE C.V', 'Karla Rodriguez ', 'CAROLINA VILLANUEVA 408 CD. INDUSTRIAL AGUASCALIEN', 'krodriguez@parkertrutec.com\r', '449 9711436'),
(30, 'JIDOHKA SMART S.A. DE C.V.', 'Alejandra Robles', 'AV. MAHATMA GANDHI 814 COL SAN FRANCISCO DEL ARENA', 'compras@jidohkasmart.com.mx\r', '929-51-63 ext. 102'),
(31, 'Mahle Componentes de Motor de Mexico S. de R.L. de', 'Ana Mcias', 'KM. 0.3 carr. Maravillas- Jesus Maria 1176 Aguasca', 'ana.macias@mx.mahle.com\r', '(449) 9108244'),
(32, 'O-Tek Mexico S.A de C.V', 'Carolina Lizbeth Ayala Mata ', 'Carretera Aguascalientes - Zacatecas km. 17.5 parq', 'carolina.ayala@o-tek.com.mx\r', '139-39-60'),
(33, 'Smeltek S.A de C.V', 'Fernando Camacho ', 'Av. Julio Diaz Torre 112 CD Industrial Aguascalien', 'fernando.camacho@smeltek.mx\r', '9710910'),
(34, 'Texas Instruments de Mexico S de RL de CV', 'Rodriguez, Bety ', 'Jesus Rivera Franco 507 Cd. Industrial C.P20290 Ag', 'b-rodriguez2@ti.com\r', '175 1474'),
(35, 'Guadalupe del Rocio Lira Guerra', '', 'quirigua 603 Lomas de Jesus Maria Aguascalientes ', '\r', ''),
(36, 'S&C ELECTRIC MEXICANA S. DE R .L. DE C .V.', 'Castorena, Carlos', 'JESUS MARIA ROMO N. 143 CD. INDUSTRIAL AGUASCALIEN', ' Carlos.Castorena@sandc.com\r', '149-23-73'),
(37, 'CONEXIONES PLASTICAS DE AGUASCALIENTES SA DE CV', 'Norma Gloria', '20 de Noviembre N. 1604 Morelos Aguascalientes C.P', 'n.gloria@conplasa.com.mx\r', '9120122'),
(38, 'Operadora MPK S A P I de CV', 'Isabel Castorena ', 'Aguascalientes Sur 2729 Lote 12 Manzana jardines d', 'icastorena@miraplastek.com.mx\r', '9106620'),
(39, 'Cymesa S.A. de C.V.', 'ANTONIO PLASCENCIA ', 'Lerma 2111 Colonia Mitras Centro Nuevo Leon Monter', 'pagj670520@gmail.com\r', '9711488'),
(40, 'SANS MEXICANA S.A DE C.V.', '', 'Av. Mexico 204 Parque Industrial San Francisco Agu', 'calidad@sansmex.com.mx\r', '449 9109350'),
(41, 'POLICH INDUSTRIES S.A DE .C.V', 'Compras Polich Industries ', 'CIRCUITO IGNACIO AYALA 104 NORIAS DE PASO HONDO 23', 'compras@polich.us\r', '9141260'),
(42, 'SAKAIYA DE MEXICO S.A DE C.V', 'Magdalena Mendez Lara', 'Av.Muebleros 210 Chichimico C.P 20916 Jesus Maria ', 'Metrologia.chichimeco@sakaiya.com.mx\r', '9730010'),
(43, 'OROTEX INDUSTRIAL DE AGUASCALIENTES S DE RL DE CV', 'Claudia Ivonne V. ', 'JOSE BARBA ALONSO 215 CD INDUSTRIAL AGUASCALIENTES', 'cxp@orotexmx.com\r', '971-0484'),
(44, 'Advanced Carrier Products Mexico SA de CV', 'Eng. Miguel Angel Martinez', 'Carr. Panamericana Km 8.5 108-B Parque Industrial ', 'acp.calidad@acp-mex.com\r', '9295451'),
(45, 'TEKLAS AUTOMOTIVE MEXICO, S.A de C.V.', 'Brenda MASCORRO ', 'MEZQUITE 106 PARQUE INDUSTRIAL SAN FRANCISCO  C.P ', 'bmascorro@teklas.com.tr\r', '52 1 449 494 2445'),
(46, 'Fabrica Nacional De Herramientas S.A De C.V.', 'Ing. Oscar Alberto Macias Roman', 'Arturo Romo de Vivar 1 Parque Industrial  Chichime', 'calidad1@fandher.com.mx\r', '5000050 ext 114'),
(47, 'Productos Doblados de Mexico S.A de C.V.', 'Alberto Cortes R.', 'Av. Estados Unidos de America 114 Parque Industria', ' alberto.cortes@prodomex.com.mx\r', '(449) 929-20-94'),
(48, 'SERVICIOS TECNICOS PROFESIONALES MARISA SA DE CV.', '', 'PAPATZIN MANZA 26 LOTE 29 AJUSTO Ciudad de Mexico ', '\r', '15553386385'),
(49, 'Ma. Guadalupe Montoya Rubalcava', '', 'Conjunto Villa Hidalgo', '\r', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--

CREATE TABLE `equipo` (
  `IdEquipo` int(11) NOT NULL,
  `Descripcion` varchar(100) DEFAULT NULL,
  `Marca` varchar(50) DEFAULT NULL,
  `Modelo` varchar(50) DEFAULT NULL,
  `NumService` varchar(20) DEFAULT NULL,
  `ClaveId` varchar(50) DEFAULT NULL,
  `AlcanceMedicion` varchar(100) DEFAULT NULL,
  `DivisionMedicion` varchar(100) DEFAULT NULL,
  `IdCliente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `equipo`
--

INSERT INTO `equipo` (`IdEquipo`, `Descripcion`, `Marca`, `Modelo`, `NumService`, `ClaveId`, `AlcanceMedicion`, `DivisionMedicion`, `IdCliente`) VALUES
(4, 'CABINA DE LUZ', '', 'CMB', '2028', 'GTI. GRAPHIC TECHNOLOGY INC.', '', '', 1),
(5, 'BRILLOMETRO', '', '', '', 'BYK', '', '', 1),
(6, 'VISCOCIMETRO', '', 'RVDV-II+P', '8554801', '', '', '', 1),
(7, 'RADIOMETRO', 'DESINGED & MANUFACTURED EIT.', 'PP2-2000', '', '13661', '', '', 1),
(8, 'PIROMETRO', 'OEM', 'N/A', '', '25245', '', '', 1),
(9, 'BASCULA', 'DENVER INSTRUMEN', 'M-TE31025', '', '285/90218882', '', '', 1),
(10, '', '', '', '', '', '', '', 1),
(11, 'MICROMETROS (2)', 'MITUTOYO', '293-230', '1111', 'MDC-25MJ', '', '', 1),
(12, 'VERNIER', 'MITUTOYO', '', '', '', '', '', 1),
(13, 'VERNIER', 'TRUPER', '', '', '', '', '', 1),
(14, 'MEDIDOR DE HUMEDAD DE MADERA', 'DELMHORST', 'RDM3', '', '11991', '', '', 1),
(15, 'CUENTA HILOS', 'BAYER', 'YT10341', '', 'N/A', '', '', 1),
(16, 'BAÑO DE TEMPERATURA CONSTANTE', 'SCORPION  SCIENTIFIC', 'A50650', '', '110112', '', '', 1),
(17, 'MEDIDOR DE HUMEDAD DE MADERA', '', 'RDM3', '', '11991', '', '', 1),
(18, 'CUENTA HILOS', '', 'YT10341', '', 'N/A', '', '', 1),
(19, 'BAÑO DE TEMPERATURA CONSTANTE', '', 'A50650', '', '110112', '', '', 1),
(20, 'Densimetro', 'Alfa Mirage', 'MDS-300', '', '', '', '0.001', 2),
(21, 'Pirómetro', 'URREA', 'UD80', '', '', '-50°C  999°C', '1°C', 2),
(22, 'Pirómetro', 'TES', '1327', '', '', '-35°C  500°C', '0.1°C', 2),
(23, 'Báscula gramera', 'DIBATEC', 'EXACTA', '', '', '0-600 grs.', 'd=0.001g', 2),
(24, 'Báscula 500 kgs.', 'DIGI BASCULA', 'lumina SS', '', '', '0-500 kgrs.', '0.0 kgrs.', 2),
(25, 'Microscopio', 'Motic', 'Z14', '', '', '1X', '', 2),
(26, 'Dinamómetro', 'IMADA', 'DK 046', '309850', 'DK 046', '0-500 N', '0-500 N', 2),
(27, 'Dinamómetro', 'SHIMPO', 'DK047', '29513J709', 'DK047', '0-500 N', '0.0 N', 2),
(28, 'Densímetro', 'Alfa Mirage', 'N/A', 'N/S', 'N/A', '0.001', '0.001', 2),
(29, 'Pirómetro', 'URREA', 'PK048', '12510080', 'PK048', '-50 ª C 999ªC', '1ª C', 2),
(30, 'Pirómetro', 'TES', 'PTK049', '13030844', 'PTK049', '-35ªC 500ªC', '0.1 Cª', 2),
(31, 'Bascula gramera', 'DIBATEC', 'N/A', 'N/S', 'N/A', '0-600 grs.', 'D=0.001', 2),
(32, 'Bascula 500 kgs.', 'DIGI BASCULA', 'N/A', 'N/S', 'N/A', '0-500 Kgrs.', '0.0 kgrs.', 2),
(33, 'Microscopio', 'MOTIC', 'MPTK050', '35079196', 'MPTK050', '1X', '1X', 2),
(34, 'Micrometro de punta', 'Mitutoyo', 'MPTK051', '35080320', 'MPTK051', '0-1”', '0.001 mm', 2),
(35, 'Micrometro de punta', 'Mitutoyo', 'MPTK050', '35079196', 'MPTK050', '0-1”', '0.001 mm', 2),
(36, 'Vernier para interiores', 'Mitutoyo', 'VITK 052', '11187', 'VITK 052', '0-150 mm', '0.00 mm', 2),
(37, 'Vernier para interiores', 'Mitutoyo', 'VITK 053', '11189', 'VITK 053', '0-150 mm', '0.00 mm', 2),
(38, 'Goniometro ', 'Mitutoyo', 'GTK054', '130319', 'GTK054', '360ª', '0.5 mm', 2),
(39, 'Dinamómetro', 'IMADA', 'DS2-110', '309850', 'DK 046', '0-500 N', '0.01 N', 2),
(40, 'Dinamómetro', 'SHIMPO', 'FGE-100X', '29513J709', 'DK047', '0-500 N', '0.01 N', 2),
(41, 'Micrómetro de punta', 'Mitutoyo', '342-351', '35080320', 'MPTK051', '0-1”', '0.001 mm', 2),
(42, 'Micrómetro de punta', 'Mitutoyo', '342-351', '35079196', 'MPTK050', '0-1”', '0.001 mm', 2),
(43, 'Vernier para interiores', 'Mitutoyo', '571-211-20', '11187', 'VITK 052', '0-150 mm', '0.00 mm', 2),
(44, 'Vernier para interiores', 'Mitutoyo', '571-211-20', '11189', 'VITK 053', '0-150 mm', '0.00 mm', 2),
(45, 'Pirómetro', 'URREA', 'UD80', '12510080', 'PK048', '-50 ª C 999ªC', '1ª C', 2),
(46, 'Pirómetro', 'TES', '1327', '13030844', 'PTK049', '-35ªC 500ªC', '0.1 Cª', 2),
(47, 'Goniómetro ', 'Mitutoyo', '187-901', '130320', 'GTK055', '0 a 90', '0 a 90', 2),
(48, 'Dinamómetro', 'IMADA', 'DS2-110', '309908', 'DK 056', '0-500 N', '0.01 N', 2),
(49, 'Micrometro de punta', 'Mitutoyo', 'IP 65', '', '', '0-1”', '0.001 mm', 2),
(50, 'Vernier para interiores', 'Mitutoyo', '571-211-20', '', '', '0-150 mm', '0.00 mm', 2),
(51, 'Goniometro', 'Mitutoyo', '187-901', '', '', '360°', '0.5 mm', 2),
(52, 'scale 0-15mm', '', '', '', '', '', '', 2),
(53, 'scale 0-150mm', '', '', '', '', '', '', 2),
(54, 'metallica rule 1m', '', '', '', '', '', '', 2),
(55, 'metallica rule 600mm', '', '', '', '', '', '', 2),
(56, 'metallica rule 2 m', '', '', '', '', '', '', 2),
(57, 'Vernier 200 mm', '', '', '', '', '', '', 2),
(58, 'Vernier 150 mm', '', '', '', '', '', '', 2),
(59, 'metallica rule 300 mm', '', '', '', '', '', '', 2),
(60, 'weight scale min 20gr - max 10 kg', '', '', '', '', '', '', 2),
(61, 'Regla metalica', 'metax', '', '', '', '2 mts', '1mm', 2),
(62, 'Hardmatic', 'Mitutoyo', '811-336-10', '101231508', 'HTK001', '', '0.1 Dureza Short ', 2),
(63, 'Escala recta', 'Shinwa', 'H-101A', 'N/S', 'TK42', '0-150 mm', '0.1', 2),
(64, 'Escala recta', 'Shinwa', 'H-101A', 'N/S', 'TK43', '0-150 mm', '0.1', 2),
(65, 'Escala recta', 'Shinwa', 'H-101A', 'N/S', 'TK44', '0-130 mm', '0.1', 2),
(66, 'Escala recta', 'Shinwa', 'H-101A', 'N/S', 'TK45', '0-150 mm', '0.1', 2),
(67, 'Regla ', 'Shinwa', 'JQCN08004', 'N/S', 'ATK-39', '1 m', 'N/S', 2),
(68, 'Regla', 'Shinwa', 'JQCN08004', 'N/S', 'ATK-40', '1 m', 'N/S', 2),
(69, 'Regla', 'Shinwa', 'JQCN08004', 'N/S', 'TK41', '300 mm', 'N/S', 2),
(70, 'Regla *', 'Shinwa', 'N/S', 'N/S', 'BTK-001', '600 mm', 'N/S', 2),
(71, 'Regla *', 'Shinwa', 'N/S', 'N/S', 'DTK-001', '2 m', 'N/S', 2),
(72, 'Escala Graduada', 'Metax', '', '', 'QA-2014-003', '150mm', '', 3),
(73, 'Escala Graduada', 'Metax', '', '', 'QA-2014-004', '150mm', '', 3),
(74, 'Calibrador de lainas', 'Mitutoyo', '', '', 'QA-2014-005', '0.05 - 0.15mm', '', 3),
(75, 'Bascula Digital', 'Ohaus', '', '', 'QA-2014-008', '600g', '', 3),
(76, 'Escala Graduada', 'JIS', '', '', 'QA-2014-009', '150mm', '', 3),
(77, 'Gauge fixture DC', '', '', '', 'QA-2014-010', '', '', 3),
(78, 'Gauge fixture DC', '', '', '', 'QA-2014-011', '', '', 3),
(79, 'Bascula Digital', 'Ohaus', '', '', 'QA-2014-012', '600g', '', 3),
(80, 'Bascula Digital', 'Ohaus', '', '', 'QA-2014-006', '60kg', '', 3),
(81, 'Bascula Digital', 'Ohaus', '', '', 'QA-2014-007', '60kg', '', 3),
(82, 'Calibrador Vernier', 'Mitutoyo', '500-171-30', '13263109', 'QA-2014-001', '0-6”', '', 3),
(83, 'Calibrador Vernier', 'Mitutoyo', '500-171-30', '132263119', 'QA-2014-002', '0-6”', '', 3),
(84, 'Termómetro IN/OUT', 'AVALY', '', '', 'QA-2014-013', '0-50°C', '', 3),
(85, 'Termómetro de contacto', 'ANRITSU', 'HD-1100K', 'A03187', 'QA-2014-014', '200-1370', '', 3),
(86, 'Termómetro de Contacto', 'ANRITSU', 'HD-1000 series', 'A03186', 'QA-2014-016', '200-1370', '', 3),
(87, 'Regla conica ', 'shinwa', 'n/a', '700A', 'n/a', '15mm', '', 3),
(88, 'Termómetro Infrarrojo', 'FLUKE', '568', '27230029', 'QA-2014-015', '', '', 3),
(89, 'Calibrador Vernier', 'S/M', 'S/N', 'VE-QA-01', 'guanglu', '0-6”', '0.0005', 4),
(90, 'Regla 150 mm', 'Metax', 'N/P', 'N/P', 'ES-QA-01', '0 – 150 mm', '0.5 mm', 4),
(91, 'Regla 150 mm', 'Metax', 'N/P', 'N/P', 'ES-QA-01', '0 – 150 mm', '0.5 mm', 4),
(92, 'DINAMOMETRO', 'IMAD', 'SV-55C-2H', 'NI509539', 'CG9999', '', '', 5),
(93, 'MEDIDOR DE ESPESORES', 'MITUTOYO', '547-300S', '9012924', 'CR2828', '', '', 5),
(94, 'Master ball CMM ', 'Mitutoyo ', '06ABM944', 'M2647 ', 'MBAL-01 ', 'Diámetro 19.9821mm ', '', 5),
(95, 'torquimetro', 'URREA', '6310', '914059037', 'TCT-12', '24-240 IN-LB', '', 5),
(96, 'Torquímetro', 'SNAP-ON', '973.382', '6337', 'TCT-3', '0 – 100 LB/FT', '', 5),
(97, 'Torquimetro', 'tohnichi', '061955e', 'Qlls25ns', 's/n', '5-25 n.m', '', 5),
(98, 'Torquimetro', 'tohnichi', '177174E', 'QLLS25N5', 'G-62', '5-25 N·m', '', 5),
(99, 'Torquimetro', 'Urrea', '6062ª', '113002214', 'TCT-11', '2-17Nm', '', 5),
(100, 'Torquimetro', 'Urrea', '6061ª', '313048139', 'TCT-08', '1-7Nm', '', 5),
(101, 'Cabeza micrometrica', 'Mitutoyo', '164-162', '402835', 'T003', '0-50mm', '0.001mm', 6),
(102, 'Cabeza micrometrica', 'Mitutoyo', '164-162', '511567', '101', '0-50mm', '0.001mm', 6),
(103, 'Cabeza micrometrica', 'Mitutoyo', '164-163', '', 'T012', '0-50mm', '0.001mm', 6),
(104, 'Medidor de Alturas', 'Mitutoyo', 'IDC-CD1025EB', '5379', 'IND-105', '', '0.0005”', 6),
(105, 'Medidor de Alturas', 'Mitutoyo', 'IDC-C150TB', '4941', 'IND-96', '', '0.0001”', 6),
(106, 'Medidor de Alturas', 'Mitutoyo', 'ID-F150TB', '10148', 'IND-80', '', '0.0005”', 6),
(107, 'Medidor de Alturas', 'Mitutoyo', 'ID-F150E', '8201', 'IND-79', '', '0.0005”', 6),
(108, 'Micròmetro', 'Mitutoyo', 'IP65', '293-330', 'MC-139', '', '0.00005”', 6),
(109, 'Cabeza micrometrica', 'Mitutoyo', '164-162', '', 'CM-002', '0-50mm', '0.001mm', 6),
(110, 'Cabeza micrometrica', 'Mitutoyo', '164-162', '', 'MF-102', '0-50mm', '0.001mm', 6),
(111, 'Calibrador Digital', 'Fowler', '', '#284', 'CD-010', '', '0.001', 6),
(112, 'Calibrador Digital', 'Mitutoyo', '500-196-30', '13353451', 'CD-009', '', '0.0005', 6),
(113, 'Calibrador Digital', 'Mitutoyo', '500-196-30', '14486114', 'CD-014', '', '0.0005', 6),
(114, 'Calibrador Digital', 'Mitutoyo', '500-196-30', '13353569', 'CD-011', '', '0.0005', 6),
(115, 'TERMOMETRO', 'K-J-T THERMOCOUPLE', '840A', 'T-125B8B', 'TCP-001', '-200*-1372*C', '', 6),
(116, 'MICROMETRO', 'WESTON', 'STW-3203-66', '100434204', 'MIC 111', '0-1”', '', 6),
(117, 'MICROMETRO', 'WESTON', 'STW-2303-66', '100434323', '        MIC 112', '1-2”', '', 6),
(118, 'MICROMETRO', 'WESTON', 'STW-2303-66', '100434482', '        MIC 113', '2-3”', '', 6),
(119, 'MICROMETRO', 'WESTON', 'STW-2303-66', '100433681', '        MIC 114', '3-4”', '', 6),
(120, 'MICROMETRO', 'WESTON', 'STW-2303-66', '100486691', '       MIC 115', '        4-5”', '', 6),
(121, 'MICROMETRO', 'WESTON', 'STW-2303-66', '100433751', '       MIC 116', '5-6”', '', 6),
(122, 'BARRA E ALCANCE', '', '', '', '', '5', '', 6),
(123, 'BARRA E ALCANCE', '', '', '', '', '4', '', 6),
(124, 'BARRA E ALCANCE', '', '', '', '', '3', '', 6),
(125, 'BARRA E ALCANCE', '', '', '', '', '2', '', 6),
(126, 'BARRA E ALCANCE', '', '', '', '', '1', '', 6),
(127, 'CALIBRADOR', 'MITUTOYO', 'CD-6”CSX', '500-196-20', '       CD-004', 'O-6”', '', 6),
(128, 'Multimetro ', 'BK PRECISION', '810C', '161E14244', 'ALMACEN 001', '', '', 6),
(129, 'Dinamometro', 'Chatillon', '100 LBF 500 N', 'W03960', 'MF-102', '50 libras', '', 6),
(130, 'Megguer', 'HOKI', '', '150410159', 'IMU-005', '1000Ω', '50Ω', 6),
(131, 'Calibrador ', 'MITUTOYO', '500-196-30', '14486114', 'CD-014', '6”', '', 6),
(132, 'Calibrador ', 'MITUTOYO', '500-196-30', '13353569', 'CD-011', '6”', '', 6),
(133, 'Calibrador ', 'MITUTOYO', '573-701', '1841', 'CD-015', '6”', '', 6),
(134, 'Calibrador ', 'FLOWER', '', '', 'CD-010', '12”', '', 6),
(135, 'Indicador ', 'MITUTOYO', '2416S', '', 'IDC-003', '1”', '', 6),
(136, 'Micrometro', 'MITUTOYO', '293-330', '55171495', 'MC-139', '0-1”', '', 6),
(137, 'Micrometro', 'MITUTOYO', '331-361', '35178319', 'MIC-011', '0-1”', '', 6),
(138, ' GAUSIMETRO ', 'F.W BELL ', '5080', '0119119/ 0710057 ', 'GAU-002', '', 'N/A', 6),
(139, 'MULTIMETRO', 'FLUKE', '175 TRUE RMS MULTIMETER', '', 'MULT-0.06', '1000V CAT III', '600V CAT IV', 6),
(140, 'Iman de referencia transversal ', 'Magnetic Instrumetation inc', 'F062-1K  062', '20120421-2', 'IR-001', '', '0.5”', 6),
(141, 'Medidor de capacitancia ', 'BK PRECISION', '810C', '161E14244', 'CAP-001', '', '.01mF', 6),
(142, 'Micrómetro de Ranuras', 'Mitutoyo', '146-101A', '86041', 'KTP- 219', '', '.001”', 6),
(143, 'calibrador de puntas intercambiables', 'Mitutoyo', 'NTD14-8” C', '1617', 'CD-001', '', '0.0005', 6),
(144, 'Calibrador de exteriores 6”', 'Mitutoyo', '500-159-20', '14009807', 'CD-008', '', '0.0005', 6),
(145, 'PERNO ROSCA GO/ NO GO', 'SOUTHERN GAGE', '', '', 'QA-1', 'P.D 11.994 MM', '', 6),
(146, 'ROSCA NO GO', 'HEMCO', '', 'GOPD.7750', 'QA-75', '13/16-18 UNS 2 A', '13/16-18 UNS 2 A', 6),
(147, 'ROSCA GO', 'HEMCO', '', 'PG-4248', 'QA-65', '', '', 6),
(148, 'ROSCA GO', 'HEMCO', '', 'LO PD .463', 'QA-66', 'M13 X 1.5 6g', '', 6),
(149, 'Regla rigida ', 'TRUSCO', '4-1103', 'JQ0309009', 'CI-1474', '2000mm', '0.5mm', 7),
(150, 'Dinamometro', 'IMADA', 'SV-55C-2H', 'NI509539', 'CG-999', '20n', '', 7),
(151, 'REGLETA FLEXIBLE', 'MITUTOYO', '182-309', '1009', 'CI 1469', '40”/1000mm', '1mm', 7),
(152, 'REGLETA FLEXIBLE', 'MITUTOYO', '182-309', '1003', 'CI 1470', '40”/1000mm', '1mm', 7),
(153, 'Medidor de espesores', 'Mitutoyo', '547-300S', '9012924', 'CR2828', '', '.0005”', 7),
(154, 'Regla Rigida', 'TRUSCO', '4-1103', 'JQ0309009', 'CI-1474', '2000mm', '0.5mm', 7),
(155, 'DINAMOMETRO', 'IMADA', 'SV-55C-2H', 'NI509539', 'CG-999', '20n', '', 7),
(156, 'Bascula 300Kg', 'salter', 'S100', '1211000042', 'CR 2827', '300KG', '.01g', 7),
(157, 'CALIBRADOR DIGITAL', 'MACHINE-DRO.CO.UK', '', '', 'CT 1585', '40”/1000mm', '.01mm', 7),
(158, 'CALIBRADOR DIGITAL', 'MITUTOYO', '500-195-20', '11116877', 'CM4684', '40”/1000mm', '.01mm', 7),
(159, 'Medidor de espesores', 'MITUTOYO', '547-3005', '9012924', 'CR2828', '10mm', '.01mm', 7),
(160, 'CALIBRADOR DIGITAL', 'WESTON', 'N/A', 'A45491', '45491', '24\"', '', 8),
(161, 'MICROMETRO DE EXTERIORES ANALOGO', 'S/M', 'S/M', '080615186', 'MEA07', '6-7´´', '.0001', 37),
(162, 'VERNIER DIGITAL', 'MAHR', '4103069', '111202384J0', 'CALT03', '0-8´´', 'DIV', 37),
(163, 'VERNIER DIGITAL', 'MAHR', '4103208', '610900472C', 'CAL12', '0-12´´', 'DIV', 37),
(164, 'INDICADOR DE PESTAÑA', 'MITUTOYO', '513402-10', 'WZA011', 'INT12', '0-30\'\'', 'DIV', 37),
(165, 'VERNIER DIGITAL', 'MITUTOYO', '500197-30', 'A15023747', 'CALT07', '0-8\'\'', 'DIV', 37),
(166, 'VERNIER DIGITAL', 'MITUTOYO', '500197-30', 'A17251904', 'CALT10', '0-8\'\'', 'DIV', 37);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo_orden`
--

CREATE TABLE `equipo_orden` (
  `IdEquipoOrden` int(11) NOT NULL,
  `IdOrden` int(11) DEFAULT NULL,
  `IdEquipo` int(11) DEFAULT NULL,
  `IdPaqueteEnvio` int(11) DEFAULT NULL,
  `FechaFinCalLab` date DEFAULT NULL,
  `FechaRetLab` date DEFAULT NULL,
  `FechaRecIntecLab` date DEFAULT NULL,
  `FechaEstFinCal` date DEFAULT NULL,
  `Etiqueta` tinyint(1) DEFAULT NULL,
  `FechaEtiqueta` date DEFAULT NULL,
  `Factura` int(11) DEFAULT NULL,
  `Certificado` text NOT NULL,
  `IdEstatusPaquete` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `equipo_orden`
--

INSERT INTO `equipo_orden` (`IdEquipoOrden`, `IdOrden`, `IdEquipo`, `IdPaqueteEnvio`, `FechaFinCalLab`, `FechaRetLab`, `FechaRecIntecLab`, `FechaEstFinCal`, `Etiqueta`, `FechaEtiqueta`, `Factura`, `Certificado`, `IdEstatusPaquete`) VALUES
(1, 1, 160, 1, '2019-05-15', '2019-05-15', '2019-05-15', NULL, 1, NULL, NULL, 'Admon2.pdf', 7),
(2, 2, 90, 3, '2019-05-15', NULL, NULL, NULL, 1, NULL, 10, '', 7),
(3, 2, 89, 4, '2019-05-15', '2019-05-16', NULL, NULL, 1, NULL, NULL, '', 5),
(4, 3, 7, 5, '2019-05-16', '2019-05-16', '2019-05-16', NULL, 1, NULL, NULL, 'base_de_datos_red.pdf', 7),
(5, 3, 11, 5, NULL, NULL, NULL, NULL, 1, '2019-08-27', NULL, '', 7),
(11, 10, 7, 6, NULL, NULL, NULL, NULL, 1, '2019-08-27', NULL, '', 5),
(12, 11, 29, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 3),
(13, 12, 4, 8, '2019-07-17', '2019-07-17', NULL, NULL, 1, NULL, NULL, '', 7),
(14, 13, 15, 9, NULL, NULL, NULL, NULL, 1, '2019-08-27', NULL, 'AGENDA_GDE.pdf', 7),
(15, 14, 4, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 3),
(16, 15, 6, 12, NULL, NULL, NULL, NULL, 1, '2019-09-05', NULL, '', 7),
(17, 16, 4, 13, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 7),
(18, 17, 161, 14, NULL, NULL, NULL, NULL, 1, '2019-09-05', NULL, 'Admon2.pdf', 7),
(19, 17, 163, 14, NULL, NULL, NULL, NULL, 1, '2019-10-02', NULL, '', 7),
(20, 17, 162, 14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 6),
(21, 17, 164, 14, NULL, NULL, NULL, NULL, 1, '2019-09-24', NULL, '', 6),
(22, 17, 165, 14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 6),
(23, 17, 166, 14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 6),
(24, 18, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL),
(25, 18, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL),
(26, 19, 11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL),
(27, 19, 14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estatusequipo`
--

CREATE TABLE `estatusequipo` (
  `IdEquipoOrden` int(11) NOT NULL,
  `IdEstatusPaquetes` int(11) NOT NULL,
  `FechaEstatus` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `estatusequipo`
--

INSERT INTO `estatusequipo` (`IdEquipoOrden`, `IdEstatusPaquetes`, `FechaEstatus`) VALUES
(1, 7, '2019-09-24'),
(2, 5, '2019-10-01'),
(2, 6, '2019-10-01'),
(2, 7, '2019-11-12'),
(4, 7, '2019-08-27'),
(5, 4, '2019-08-27'),
(5, 5, '2019-08-27'),
(5, 6, '2019-08-27'),
(5, 7, '2019-08-27'),
(11, 4, '2019-10-02'),
(11, 5, '2019-10-02'),
(13, 6, '2019-08-27'),
(13, 7, '2019-08-27'),
(14, 4, '2019-08-27'),
(14, 5, '2019-08-27'),
(14, 6, '2019-09-03'),
(14, 7, '2019-09-05'),
(16, 4, '2019-09-05'),
(16, 5, '2019-09-05'),
(16, 6, '2019-09-05'),
(16, 7, '2019-09-05'),
(17, 4, '2019-09-05'),
(17, 5, '2019-09-05'),
(17, 6, '2019-09-05'),
(17, 7, '2019-09-05'),
(18, 4, '2019-09-05'),
(18, 5, '2019-09-24'),
(18, 6, '2019-09-24'),
(18, 7, '2019-09-24'),
(19, 4, '2019-09-05'),
(19, 5, '2019-09-05'),
(19, 6, '2019-09-24'),
(19, 7, '2019-09-24'),
(20, 4, '2019-09-24'),
(20, 5, '2019-09-24'),
(20, 6, '2019-09-24'),
(21, 4, '2019-09-24'),
(21, 5, '2019-09-24'),
(21, 6, '2019-09-24'),
(22, 4, '2019-09-24'),
(22, 5, '2019-09-24'),
(22, 6, '2019-09-24'),
(23, 4, '2019-09-24'),
(23, 5, '2019-09-24'),
(23, 6, '2019-09-24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturacliente`
--

CREATE TABLE `facturacliente` (
  `IdFactura` int(11) NOT NULL,
  `NumFactura` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `FechaFactura` date NOT NULL,
  `IdCliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `facturacliente`
--

INSERT INTO `facturacliente` (`IdFactura`, `NumFactura`, `FechaFactura`, `IdCliente`) VALUES
(2, '555555', '2019-10-01', 4),
(3, '11111', '2019-10-01', 4),
(4, '11111', '2019-10-01', 4),
(5, '11111', '2019-10-01', 4),
(6, '666666', '2019-10-01', 1),
(7, '6677777', '2019-09-30', 4),
(8, '', '0000-00-00', 37),
(9, 'F44532', '2019-10-01', 1),
(10, '11111222333', '2019-10-01', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `laboratorio`
--

CREATE TABLE `laboratorio` (
  `IdLaboratorio` int(11) NOT NULL,
  `Descripcion_lab` varchar(100) DEFAULT NULL,
  `Domicilio` varchar(200) DEFAULT NULL,
  `Telefono` varchar(20) DEFAULT NULL,
  `diasServicios` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `laboratorio`
--

INSERT INTO `laboratorio` (`IdLaboratorio`, `Descripcion_lab`, `Domicilio`, `Telefono`, `diasServicios`) VALUES
(4, 'HSM Sistemas Metrológicos SA de CV', 'Blvd. Bernardo Quintana No. 630 Local 21 Col. Desarrollo San Pablo, C.P. 76125', '462 1959668', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden_servicio`
--

CREATE TABLE `orden_servicio` (
  `IdOrden` int(11) NOT NULL,
  `IdCliente` int(11) DEFAULT NULL,
  `Fecha` date DEFAULT NULL,
  `FechaEnvio` date DEFAULT NULL,
  `FechaRecibo` date DEFAULT NULL,
  `Observaciones` varchar(200) DEFAULT NULL,
  `IdEstatusOrden` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `orden_servicio`
--

INSERT INTO `orden_servicio` (`IdOrden`, `IdCliente`, `Fecha`, `FechaEnvio`, `FechaRecibo`, `Observaciones`, `IdEstatusOrden`) VALUES
(1, 8, '2019-04-24', '0000-00-00', '0000-00-00', 'PAQUETE PARA ZACATECAS', 3),
(2, 4, '2019-05-13', '0000-00-00', '0000-00-00', '', 1),
(3, 1, '2019-05-16', '0000-00-00', '0000-00-00', '', 1),
(10, 1, '2019-05-31', '0000-00-00', '0000-00-00', '', 1),
(11, 2, '2019-05-31', '0000-00-00', '0000-00-00', '', NULL),
(12, 1, '2019-07-17', '0000-00-00', '0000-00-00', 'ORDEN DE PRUEBA', 1),
(13, 1, '2019-08-27', '0000-00-00', '0000-00-00', '', 1),
(14, 1, '2019-09-04', '0000-00-00', '0000-00-00', 'PRUEBA VIANNEY', NULL),
(15, 1, '2019-09-04', '0000-00-00', '0000-00-00', 'PRUEBA 2 VIANNEY', 2),
(16, 1, '2019-09-05', '0000-00-00', '0000-00-00', 'pruebas', 3),
(17, 37, '2019-09-05', '0000-00-00', '0000-00-00', '', 2),
(18, 1, '2019-11-12', '0000-00-00', '0000-00-00', '', 1),
(19, 1, '2019-11-12', '0000-00-00', '0000-00-00', '', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paquete_envio`
--

CREATE TABLE `paquete_envio` (
  `IdPaqueteEnvio` int(11) NOT NULL,
  `IdLaboratorio` int(11) DEFAULT NULL,
  `Descripcion` varchar(50) DEFAULT NULL,
  `FechaEnv` date DEFAULT NULL,
  `FechaRecLab` date DEFAULT NULL,
  `IdEstatusPaquete` int(11) DEFAULT '0',
  `NumeroGuia` varchar(30) DEFAULT NULL,
  `CostoEnvio` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `paquete_envio`
--

INSERT INTO `paquete_envio` (`IdPaqueteEnvio`, `IdLaboratorio`, `Descripcion`, `FechaEnv`, `FechaRecLab`, `IdEstatusPaquete`, `NumeroGuia`, `CostoEnvio`) VALUES
(1, 4, 'HSM', '2019-04-27', '2019-05-15', 7, NULL, NULL),
(3, 4, 'Paquete 1', '2019-05-13', '2019-05-13', 7, NULL, NULL),
(4, 4, 'Paquete 2', '2019-05-15', '2019-05-15', 3, NULL, NULL),
(5, 4, 'HSM Paquete 1', '2019-05-16', '2019-05-16', 7, NULL, NULL),
(6, 4, 'Paquete de Envio de Prueba', '2019-05-31', '2019-05-31', 3, '12345678901234', '450.00'),
(7, 4, 'Otro paquete', '2019-05-31', '2019-05-31', 3, '987654321', '800.00'),
(8, 4, 'paquete de prueba', '2019-07-17', '2019-07-17', 7, '11111', '10000.00'),
(9, 4, 'PAQUETE DE UNA PRUEBA NUEVA', '2019-08-27', '2019-08-27', 7, '59595959', '1000.00'),
(10, 4, 'paquete VIANNEY', '2019-09-04', '2019-09-04', 3, '111111', '1111.00'),
(12, 4, 'paquete 2 vianney', '2019-09-05', '2019-09-05', 7, '333333', '123.00'),
(13, 4, 'asdfsadf', '2019-09-05', '2019-09-05', 7, '123123', '111.00'),
(14, 4, 'paquete 1', '2019-09-05', '2019-09-05', 3, '1111', '800.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE `perfil` (
  `IdPerfil` int(11) NOT NULL,
  `DescripcionPerfil` varchar(40) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `perfil`
--

INSERT INTO `perfil` (`IdPerfil`, `DescripcionPerfil`) VALUES
(1, 'Administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `IdUsuario` int(11) NOT NULL,
  `NombreUsuario` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  `ApellidosUsuario` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  `usuario` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  `contrasena` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `IdPerfil` int(11) NOT NULL,
  `fechaActualizado` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `fechaCreacion` datetime DEFAULT CURRENT_TIMESTAMP,
  `fechaCaducidad` datetime DEFAULT NULL,
  `creacion` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`IdUsuario`, `NombreUsuario`, `ApellidosUsuario`, `usuario`, `contrasena`, `IdPerfil`, `fechaActualizado`, `fechaCreacion`, `fechaCaducidad`, `creacion`) VALUES
(1, 'David', 'Parrito', 'david.parrito', 'f182bb4f7003792e4b027d4fe5fbd9b3', 1, '2019-06-17 17:13:48', '2019-06-17 17:02:22', '2019-12-14 17:10:28', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `catalogoestatusorden`
--
ALTER TABLE `catalogoestatusorden`
  ADD PRIMARY KEY (`IdEstatusOrden`);

--
-- Indices de la tabla `catalogoestatuspaquetes`
--
ALTER TABLE `catalogoestatuspaquetes`
  ADD PRIMARY KEY (`IdEstatusPaquete`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`IdCliente`);

--
-- Indices de la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD PRIMARY KEY (`IdEquipo`),
  ADD KEY `IdCliente` (`IdCliente`);

--
-- Indices de la tabla `equipo_orden`
--
ALTER TABLE `equipo_orden`
  ADD PRIMARY KEY (`IdEquipoOrden`),
  ADD KEY `IdOrden` (`IdOrden`),
  ADD KEY `IdEquipo` (`IdEquipo`),
  ADD KEY `IdPaqueteEnvio` (`IdPaqueteEnvio`),
  ADD KEY `equipo_orden_ibfk_4` (`IdEstatusPaquete`),
  ADD KEY `equipo_orden_ibfk5` (`Factura`);

--
-- Indices de la tabla `estatusequipo`
--
ALTER TABLE `estatusequipo`
  ADD PRIMARY KEY (`IdEquipoOrden`,`IdEstatusPaquetes`),
  ADD KEY `EstatusPaquete_ibfk2` (`IdEstatusPaquetes`);

--
-- Indices de la tabla `facturacliente`
--
ALTER TABLE `facturacliente`
  ADD PRIMARY KEY (`IdFactura`),
  ADD KEY `facturacliente_ibfk1` (`IdCliente`);

--
-- Indices de la tabla `laboratorio`
--
ALTER TABLE `laboratorio`
  ADD PRIMARY KEY (`IdLaboratorio`);

--
-- Indices de la tabla `orden_servicio`
--
ALTER TABLE `orden_servicio`
  ADD PRIMARY KEY (`IdOrden`),
  ADD KEY `IdCliente` (`IdCliente`),
  ADD KEY `orden_servicio_ibfk2` (`IdEstatusOrden`);

--
-- Indices de la tabla `paquete_envio`
--
ALTER TABLE `paquete_envio`
  ADD PRIMARY KEY (`IdPaqueteEnvio`),
  ADD KEY `IdLaboratorio` (`IdLaboratorio`),
  ADD KEY `paquete_envio_ibfk_2` (`IdEstatusPaquete`);

--
-- Indices de la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`IdPerfil`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`IdUsuario`),
  ADD KEY `usuario_ibfk1` (`IdPerfil`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `catalogoestatusorden`
--
ALTER TABLE `catalogoestatusorden`
  MODIFY `IdEstatusOrden` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `catalogoestatuspaquetes`
--
ALTER TABLE `catalogoestatuspaquetes`
  MODIFY `IdEstatusPaquete` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `IdCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT de la tabla `equipo`
--
ALTER TABLE `equipo`
  MODIFY `IdEquipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;

--
-- AUTO_INCREMENT de la tabla `equipo_orden`
--
ALTER TABLE `equipo_orden`
  MODIFY `IdEquipoOrden` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `facturacliente`
--
ALTER TABLE `facturacliente`
  MODIFY `IdFactura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `laboratorio`
--
ALTER TABLE `laboratorio`
  MODIFY `IdLaboratorio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `orden_servicio`
--
ALTER TABLE `orden_servicio`
  MODIFY `IdOrden` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `paquete_envio`
--
ALTER TABLE `paquete_envio`
  MODIFY `IdPaqueteEnvio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `perfil`
--
ALTER TABLE `perfil`
  MODIFY `IdPerfil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `IdUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD CONSTRAINT `equipo_ibfk_1` FOREIGN KEY (`IdCliente`) REFERENCES `cliente` (`IdCliente`);

--
-- Filtros para la tabla `equipo_orden`
--
ALTER TABLE `equipo_orden`
  ADD CONSTRAINT `equipo_orden_ibfk5` FOREIGN KEY (`Factura`) REFERENCES `facturacliente` (`IdFactura`),
  ADD CONSTRAINT `equipo_orden_ibfk_1` FOREIGN KEY (`IdOrden`) REFERENCES `orden_servicio` (`IdOrden`),
  ADD CONSTRAINT `equipo_orden_ibfk_2` FOREIGN KEY (`IdPaqueteEnvio`) REFERENCES `paquete_envio` (`IdPaqueteEnvio`),
  ADD CONSTRAINT `equipo_orden_ibfk_3` FOREIGN KEY (`IdEquipo`) REFERENCES `equipo` (`IdEquipo`),
  ADD CONSTRAINT `equipo_orden_ibfk_4` FOREIGN KEY (`IdEstatusPaquete`) REFERENCES `catalogoestatuspaquetes` (`IdEstatusPaquete`);

--
-- Filtros para la tabla `estatusequipo`
--
ALTER TABLE `estatusequipo`
  ADD CONSTRAINT `EstatusPaquete_ibfk1` FOREIGN KEY (`IdEquipoOrden`) REFERENCES `equipo_orden` (`IdEquipoOrden`),
  ADD CONSTRAINT `EstatusPaquete_ibfk2` FOREIGN KEY (`IdEstatusPaquetes`) REFERENCES `catalogoestatuspaquetes` (`IdEstatusPaquete`);

--
-- Filtros para la tabla `facturacliente`
--
ALTER TABLE `facturacliente`
  ADD CONSTRAINT `facturacliente_ibfk1` FOREIGN KEY (`IdCliente`) REFERENCES `cliente` (`IdCliente`);

--
-- Filtros para la tabla `orden_servicio`
--
ALTER TABLE `orden_servicio`
  ADD CONSTRAINT `orden_servicio_ibfk2` FOREIGN KEY (`IdEstatusOrden`) REFERENCES `catalogoestatusorden` (`IdEstatusOrden`),
  ADD CONSTRAINT `orden_servicio_ibfk_1` FOREIGN KEY (`IdCliente`) REFERENCES `cliente` (`IdCliente`);

--
-- Filtros para la tabla `paquete_envio`
--
ALTER TABLE `paquete_envio`
  ADD CONSTRAINT `paquete_envio_ibfk_1` FOREIGN KEY (`IdLaboratorio`) REFERENCES `laboratorio` (`IdLaboratorio`),
  ADD CONSTRAINT `paquete_envio_ibfk_2` FOREIGN KEY (`IdEstatusPaquete`) REFERENCES `catalogoestatuspaquetes` (`IdEstatusPaquete`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuario_ibfk1` FOREIGN KEY (`IdPerfil`) REFERENCES `perfil` (`IdPerfil`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
