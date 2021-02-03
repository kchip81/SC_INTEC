alter table usuarios MODIFY cliente VARCHAR(11);

alter table orden_servicio ADD COLUMN tipoServicio TINYINT DEFAULT 0;


-- 0 = Mantenimiento, 1 = Calibracion 


CREATE TABLE `servicio` (
  `IdServicio` int NOT NULL AUTO_INCREMENT,
  `IdCliente` int NOT NULL,
  `Fecha` date DEFAULT NULL,
  `Recoge` text DEFAULT NULL,
  `Prioridad` TINYINT DEFAULT 0,
  `Requerimiento` text DEFAULT NULL,
  `RazonSocial` text DEFAULT NULL,
  PRIMARY KEY (`IdServicio`),
  FOREIGN KEY (`IdCliente`) REFERENCES `cliente` (`IdCliente`)
);


CREATE TABLE `equipo_servicio` (
  `IdServicioEquipo` int NOT NULL AUTO_INCREMENT,
  `IdServicio` int NOT NULL,
  `IdEquipo` int NOT NULL,
  `FechaIni` date DEFAULT NULL,
  `FechaOut` date DEFAULT NULL,
  `Dano` text NOT NULL,
  `Ns` text NOT NULL,
  `Completo` TINYINT NOT NULL,
  `Observaciones` text NOT NULL,
  `Insumo` text NOT NULL,
  `Completo` TINYINT NOT NULL,
  PRIMARY KEY (`IdServicioEquipo`),
  FOREIGN KEY (`IdEquipo`) REFERENCES `equipo` (`IdEquipo`),
  FOREIGN KEY (`IdServicio`) REFERENCES `servicio` (`IdServicio`)
);