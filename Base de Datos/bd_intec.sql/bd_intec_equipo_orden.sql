-- MySQL dump 10.13  Distrib 8.0.21, for Win64 (x86_64)
--
-- Host: localhost    Database: bd_intec
-- ------------------------------------------------------
-- Server version	8.0.21

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `equipo_orden`
--

DROP TABLE IF EXISTS `equipo_orden`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `equipo_orden` (
  `IdEquipoOrden` int NOT NULL AUTO_INCREMENT,
  `IdOrden` int DEFAULT NULL,
  `IdEquipo` int DEFAULT NULL,
  `IdPaqueteEnvio` int DEFAULT NULL,
  `FechaFinCalLab` date DEFAULT NULL,
  `FechaRetLab` date DEFAULT NULL,
  `FechaRecIntecLab` date DEFAULT NULL,
  `FechaEstFinCal` date DEFAULT NULL,
  `Etiqueta` tinyint(1) DEFAULT NULL,
  `FechaEtiqueta` date DEFAULT NULL,
  `Factura` int DEFAULT NULL,
  `Certificado` text NOT NULL,
  `IdEstatusPaquete` int DEFAULT NULL,
  PRIMARY KEY (`IdEquipoOrden`),
  KEY `IdOrden` (`IdOrden`),
  KEY `IdEquipo` (`IdEquipo`),
  KEY `IdPaqueteEnvio` (`IdPaqueteEnvio`),
  KEY `equipo_orden_ibfk_4` (`IdEstatusPaquete`),
  KEY `equipo_orden_ibfk5` (`Factura`),
  CONSTRAINT `equipo_orden_ibfk5` FOREIGN KEY (`Factura`) REFERENCES `facturacliente` (`IdFactura`),
  CONSTRAINT `equipo_orden_ibfk_1` FOREIGN KEY (`IdOrden`) REFERENCES `orden_servicio` (`IdOrden`),
  CONSTRAINT `equipo_orden_ibfk_2` FOREIGN KEY (`IdPaqueteEnvio`) REFERENCES `paquete_envio` (`IdPaqueteEnvio`),
  CONSTRAINT `equipo_orden_ibfk_3` FOREIGN KEY (`IdEquipo`) REFERENCES `equipo` (`IdEquipo`),
  CONSTRAINT `equipo_orden_ibfk_4` FOREIGN KEY (`IdEstatusPaquete`) REFERENCES `catalogoestatuspaquetes` (`IdEstatusPaquete`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;


/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-09-10 12:58:45
