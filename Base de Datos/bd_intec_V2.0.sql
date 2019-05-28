-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-05-2019 a las 03:57:36
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
(6, 'Recibido Intec');

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
(1, 'compañia1', 'contacto1', 'domicilio1', 'correo1', '123456789'),
(2, 'compañia2', 'contacto2', 'domicilio2', 'correo2', '123456789'),
(3, 'compañia3', 'contacto3', 'domicilio3', 'correo3', '123456789');

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
(1, 'descripcion1', 'marca1', 'modelo1', 'numserie1', 'clave1', 'alcance1', 'divicion1', 1),
(2, 'descripcion2', 'marca2', 'modelo2', 'numserie2', 'clave2', 'alcance2', 'divicion2', 2),
(3, 'descripcion3', 'marca3', 'modelo3', 'numserie3', 'clave3', 'alcance3', 'divicion3', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo_orden`
--

CREATE TABLE `equipo_orden` (
  `IdEquipoOrden` int(11) NOT NULL,
  `IdOrden` int(11) DEFAULT NULL,
  `IdEquipo` int(11) DEFAULT NULL,
  `IdPaqueteEnvio` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `equipo_orden`
--

INSERT INTO `equipo_orden` (`IdEquipoOrden`, `IdOrden`, `IdEquipo`, `IdPaqueteEnvio`) VALUES
(1, 1, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `laboratorio`
--

CREATE TABLE `laboratorio` (
  `IdLaboratorio` int(11) NOT NULL,
  `Descripcion_lab` varchar(100) DEFAULT NULL,
  `Domicilio` varchar(50) DEFAULT NULL,
  `Telefono` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `laboratorio`
--

INSERT INTO `laboratorio` (`IdLaboratorio`, `Descripcion_lab`, `Domicilio`, `Telefono`) VALUES
(4, 'Laboratorio 1', 'Domicilio Laboratorio 1', '111111111');

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
  `Observaciones` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `orden_servicio`
--

INSERT INTO `orden_servicio` (`IdOrden`, `IdCliente`, `Fecha`, `FechaEnvio`, `FechaRecibo`, `Observaciones`) VALUES
(1, 2, '2019-04-30', '0000-00-00', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paquete_envio`
--

CREATE TABLE `paquete_envio` (
  `IdPaqueteEnvio` int(11) NOT NULL,
  `IdOrden` int(11) NOT NULL,
  `IdLaboratorio` int(11) DEFAULT NULL,
  `Descripcion` varchar(50) DEFAULT NULL,
  `FechaEnv` date DEFAULT NULL,
  `FechaRecLab` date DEFAULT NULL,
  `FechaFinalCalLab` date DEFAULT NULL,
  `FechaRetLab` date DEFAULT NULL,
  `FechaRecpIntecLab` date DEFAULT NULL,
  `IdEstatusPaquete` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `paquete_envio`
--

INSERT INTO `paquete_envio` (`IdPaqueteEnvio`, `IdOrden`, `IdLaboratorio`, `Descripcion`, `FechaEnv`, `FechaRecLab`, `FechaFinalCalLab`, `FechaRetLab`, `FechaRecpIntecLab`, `IdEstatusPaquete`) VALUES
(1, 1, 4, NULL, NULL, NULL, NULL, NULL, NULL, 1);

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
  `contrasena` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  `IdPerfil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`IdUsuario`, `NombreUsuario`, `ApellidosUsuario`, `usuario`, `contrasena`, `IdPerfil`) VALUES
(1, 'David', 'Parrito', 'david.parrito', 'Intec@123.', 1);

--
-- Índices para tablas volcadas
--

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
  ADD KEY `IdPaqueteEnvio` (`IdPaqueteEnvio`);

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
  ADD KEY `IdCliente` (`IdCliente`);

--
-- Indices de la tabla `paquete_envio`
--
ALTER TABLE `paquete_envio`
  ADD PRIMARY KEY (`IdPaqueteEnvio`),
  ADD KEY `IdLaboratorio` (`IdLaboratorio`),
  ADD KEY `paquete_envio_ibfk_2` (`IdEstatusPaquete`),
  ADD KEY `paquete_envio_ibfk3` (`IdOrden`);

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
-- AUTO_INCREMENT de la tabla `catalogoestatuspaquetes`
--
ALTER TABLE `catalogoestatuspaquetes`
  MODIFY `IdEstatusPaquete` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `IdCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `equipo`
--
ALTER TABLE `equipo`
  MODIFY `IdEquipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `equipo_orden`
--
ALTER TABLE `equipo_orden`
  MODIFY `IdEquipoOrden` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `laboratorio`
--
ALTER TABLE `laboratorio`
  MODIFY `IdLaboratorio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `orden_servicio`
--
ALTER TABLE `orden_servicio`
  MODIFY `IdOrden` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `paquete_envio`
--
ALTER TABLE `paquete_envio`
  MODIFY `IdPaqueteEnvio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  ADD CONSTRAINT `equipo_orden_ibfk_1` FOREIGN KEY (`IdOrden`) REFERENCES `orden_servicio` (`IdOrden`),
  ADD CONSTRAINT `equipo_orden_ibfk_2` FOREIGN KEY (`IdPaqueteEnvio`) REFERENCES `paquete_envio` (`IdPaqueteEnvio`),
  ADD CONSTRAINT `equipo_orden_ibfk_3` FOREIGN KEY (`IdEquipo`) REFERENCES `equipo` (`IdEquipo`);

--
-- Filtros para la tabla `orden_servicio`
--
ALTER TABLE `orden_servicio`
  ADD CONSTRAINT `orden_servicio_ibfk_1` FOREIGN KEY (`IdCliente`) REFERENCES `cliente` (`IdCliente`);

--
-- Filtros para la tabla `paquete_envio`
--
ALTER TABLE `paquete_envio`
  ADD CONSTRAINT `paquete_envio_ibfk3` FOREIGN KEY (`IdOrden`) REFERENCES `orden_servicio` (`IdOrden`),
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
