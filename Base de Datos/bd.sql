-- MySQL dump 10.13  Distrib 8.0.22, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: bd_intec
-- ------------------------------------------------------
-- Server version	8.0.22-0ubuntu0.20.04.2

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
-- Table structure for table `catalogoestatusorden`
--

DROP TABLE IF EXISTS `catalogoestatusorden`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `catalogoestatusorden` (
  `IdEstatusOrden` int NOT NULL AUTO_INCREMENT,
  `DescripcionEstatusOrden` varchar(50) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`IdEstatusOrden`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4  ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `catalogoestatusorden`
--

LOCK TABLES `catalogoestatusorden` WRITE;
/*!40000 ALTER TABLE `catalogoestatusorden` DISABLE KEYS */;
INSERT INTO `catalogoestatusorden` VALUES (1,'CREADA'),(2,'EN SERVICIO'),(3,'CERRADA');
/*!40000 ALTER TABLE `catalogoestatusorden` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `catalogoestatuspaquetes`
--

DROP TABLE IF EXISTS `catalogoestatuspaquetes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `catalogoestatuspaquetes` (
  `IdEstatusPaquete` int NOT NULL AUTO_INCREMENT,
  `DescripcionEstatusPaquete` varchar(40) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`IdEstatusPaquete`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `catalogoestatuspaquetes`
--

LOCK TABLES `catalogoestatuspaquetes` WRITE;
/*!40000 ALTER TABLE `catalogoestatuspaquetes` DISABLE KEYS */;
INSERT INTO `catalogoestatuspaquetes` VALUES (1,'Creado'),(2,'Enviado a Laboratorio'),(3,'Recibido Laboratorio'),(4,'Calibración Terminada'),(5,'En Retorno'),(6,'Recibido Intec'),(7,'Terminado');
/*!40000 ALTER TABLE `catalogoestatuspaquetes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `catalogoperiodos`
--

DROP TABLE IF EXISTS `catalogoperiodos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `catalogoperiodos` (
  `IdPeriodo` int NOT NULL AUTO_INCREMENT,
  `TipoPeriodo` varchar(20) NOT NULL,
  `ValorPeriodo` int DEFAULT NULL,
  PRIMARY KEY (`IdPeriodo`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `catalogoperiodos`
--

LOCK TABLES `catalogoperiodos` WRITE;
/*!40000 ALTER TABLE `catalogoperiodos` DISABLE KEYS */;
INSERT INTO `catalogoperiodos` VALUES (1,'Mensual',1),(2,'Trimestral',2),(3,'Semestral',3),(4,'Anual',4);
/*!40000 ALTER TABLE `catalogoperiodos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cliente`
--

DROP TABLE IF EXISTS `cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cliente` (
  `IdCliente` int NOT NULL AUTO_INCREMENT,
  `NombreCompania` varchar(50) DEFAULT NULL,
  `NombreContacto` varchar(50) DEFAULT NULL,
  `Domicilio` varchar(50) DEFAULT NULL,
  `Correo` varchar(50) DEFAULT NULL,
  `Telefono` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`IdCliente`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cliente`
--

LOCK TABLES `cliente` WRITE;
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` VALUES (1,'Vianney','Vianney','','',''),(2,'TK','TK','','',''),(3,'HOWA','HOWA','','',''),(4,'QUAGSA','QUAGSA',NULL,NULL,NULL),(5,'SANOH','SANOH',NULL,NULL,NULL),(6,'ITW','ITW',NULL,NULL,NULL),(7,'OSHITANI','OSHITANI',NULL,NULL,NULL),(8,'Centro Diesel Profesional SA de CV','Armando Delgado','Carr. Salida a Durango, Plan de Ayal S/N','armando.delgado.silva@gmail.com',NULL),(9,'Quality Bolca S.A de C.V','','Av. Independencia  203 Paseos de Aguascalientes C.','\r','9139955'),(10,'Ditromexico S.A. de C.V.','','PABELLON DE ARTEAGA 114 PARQUE INDUSTRIAL DEL VALL','\r','01 (449) 9734300'),(11,'Grupo FARSANMAR S.A. de C.V.','Andres Ramirez','Avenida Circuito Aguascalientes 142-D Parque Indus','andres.ramirez@farmaciastamaria.com\r','(449) 1-58-24-00'),(12,'SIA AUTOMATION S. DE R.L DE C.V','Israel Bueno ','AV. PASEO DE LOS INSURGENTES 304 INT. 20 JARDINES ','i.bueno@sia-automation.com.mx\r','9711951'),(13,'SANDRA ELISA HERNANDEZ','oscar calzada rodriguez ','Jesus Rivera Franco 301 Cd. Industrial Aguascalien','oscarespmec@outlook.com\r','9712479 - 9712353-68'),(14,'QUALITY DE AGUASCALIENTES S.A. DE C.V.','Marisol Haro','Av. Canal interceptor 703 Int. 5 Las arboledas Agu','marisol.haro@quagsa.com.mx\r','1759823'),(15,'TF-METAL MEXICO SA DE CV','salvador Duenas ','Circuito Cerezos Sur No 105 san Francisco de los R','s-duenas@tf-metal.mx\r','52 449 922 40 00 ext'),(16,'VITECHMEX NONWOVENS SA DE CV','Nancy Martinez ','CARRETERA 45 NORTE KM 14.3 325-B J. Gomez Portugal','nmartinez@vitechmfgmx.com\r','1535700- 1535711'),(17,'METALISTIK SA DE CV','Javier Delgado ','CARRETERA PANAMERICANA NORTE KM 14 INT. 15 PASEOS ','javier.delgado@metalistik.com\r','449 188 42 19'),(18,'MGM NUTRICION ANIMAL SA DE CV','Ing. Cuahutemoc Sanchez','Carretera a San Luis Potosi km 14.5 El Retono Agua','csanchez@mgmnutricionanimal.com\r','9711914'),(19,'MEXICO MURATA SPRING CORPORATION S.A DE C.V','Jose Haro ','PROLONGACION CONSTITUCION 802 EL PUERTECITO DE LA ','jharo@mexicomsc.com\r','449 412 36 33'),(20,'SHOSHIBA MEXICANA SA DE CV','Adan Murillo ','CARRETERA 45 NORTE KM 14.3 325 A JESUS MARIA PORTU','adan.murillo@shoshiba.com.mx\r','929 5434'),(21,'INDUSTRIAS DMU S.A DE C.V.','Refugio Rangel ','JOSE BARBA ALONSO 105 CD. INDUSTRIAL AGUASCALIENTE','rrangel@ind-dmu.com\r','9712587'),(22,'J&R MAQUINADOS INDUSTRIALES S.A. DE C.V.','','HEROE DE NACOZARI NTE 2905 INT. 3 LAS HADAS AGUASC','\r','912 11 85'),(23,'MAQUINADOS Y SERVICIOS ESPECIALIZADOS, S.A. DE C.V','','AV. SIGLO XIX 109 LOMAS DE SANTA ANITA AGUASCALIEN','\r','9755502'),(24,'KUROTA MEXICO S.A. DE C.V.','Esmeralda Montes ','CIRCUITO CEREZO SUR 108 PARQUE INDUSTRIAL SAN FCO.','compras1@kurota-mx.com\r','478-31-03'),(25,'Gestamp Aguascalientes S.A. de C.V.','Edgar Duron','AVDA. DE JAPON 124 PARQUE INDUSTRIAL SAN FRANCISCO','\r','449 910 9140 Ext. 19'),(26,'COMPANIA ALIMENTICIA RIVERA ROMO SA DE CV','','Av. Independencia 502 Fracc. El sol Aguascalientes','calidad.ags@galletasvanessa.com.mxoffice@bccbi.bg\r','9 15 55 45. Ext. 108'),(27,'IMPULSORA DE HERRAMIENTAS DEL CENTRO S. de R.L de ','Roberto Diaz','Altena 105 Ejido Cumbres Aguascalientes C.P 20175','ihc.ags@hotmail.com\r','01 449 9725314'),(28,'TST NIKKEI METALES S. DE RL. DE CV.','Miguel Reyes ','CARRETERA LOS ARELLANOS P4 ARELLANO AGUASCALIENTES','mreyes@tstnikkei.com\r',' 449 929 5517'),(29,'PARKER-TRUTEC MEXICANA S.A. DE C.V','Karla Rodriguez ','CAROLINA VILLANUEVA 408 CD. INDUSTRIAL AGUASCALIEN','krodriguez@parkertrutec.com\r','449 9711436'),(30,'JIDOHKA SMART S.A. DE C.V.','Alejandra Robles','AV. MAHATMA GANDHI 814 COL SAN FRANCISCO DEL ARENA','compras@jidohkasmart.com.mx\r','929-51-63 ext. 102'),(31,'Mahle Componentes de Motor de Mexico S. de R.L. de','Ana Mcias','KM. 0.3 carr. Maravillas- Jesus Maria 1176 Aguasca','ana.macias@mx.mahle.com\r','(449) 9108244'),(32,'O-Tek Mexico S.A de C.V','Carolina Lizbeth Ayala Mata ','Carretera Aguascalientes - Zacatecas km. 17.5 parq','carolina.ayala@o-tek.com.mx\r','139-39-60'),(33,'Smeltek S.A de C.V','Fernando Camacho ','Av. Julio Diaz Torre 112 CD Industrial Aguascalien','fernando.camacho@smeltek.mx\r','9710910'),(34,'Texas Instruments de Mexico S de RL de CV','Rodriguez, Bety ','Jesus Rivera Franco 507 Cd. Industrial C.P20290 Ag','b-rodriguez2@ti.com\r','175 1474'),(35,'Guadalupe del Rocio Lira Guerra','','quirigua 603 Lomas de Jesus Maria Aguascalientes ','\r',''),(36,'S&C ELECTRIC MEXICANA S. DE R .L. DE C .V.','Castorena, Carlos','JESUS MARIA ROMO N. 143 CD. INDUSTRIAL AGUASCALIEN',' Carlos.Castorena@sandc.com\r','149-23-73'),(37,'CONEXIONES PLASTICAS DE AGUASCALIENTES SA DE CV','Norma Gloria','20 de Noviembre N. 1604 Morelos Aguascalientes C.P','n.gloria@conplasa.com.mx\r','9120122'),(38,'Operadora MPK S A P I de CV','Isabel Castorena ','Aguascalientes Sur 2729 Lote 12 Manzana jardines d','icastorena@miraplastek.com.mx\r','9106620'),(39,'Cymesa S.A. de C.V.','ANTONIO PLASCENCIA ','Lerma 2111 Colonia Mitras Centro Nuevo Leon Monter','pagj670520@gmail.com\r','9711488'),(40,'SANS MEXICANA S.A DE C.V.','','Av. Mexico 204 Parque Industrial San Francisco Agu','calidad@sansmex.com.mx\r','449 9109350'),(41,'POLICH INDUSTRIES S.A DE .C.V','Compras Polich Industries ','CIRCUITO IGNACIO AYALA 104 NORIAS DE PASO HONDO 23','compras@polich.us\r','9141260'),(42,'SAKAIYA DE MEXICO S.A DE C.V','Magdalena Mendez Lara','Av.Muebleros 210 Chichimico C.P 20916 Jesus Maria ','Metrologia.chichimeco@sakaiya.com.mx\r','9730010'),(43,'OROTEX INDUSTRIAL DE AGUASCALIENTES S DE RL DE CV','Claudia Ivonne V. ','JOSE BARBA ALONSO 215 CD INDUSTRIAL AGUASCALIENTES','cxp@orotexmx.com\r','971-0484'),(44,'Advanced Carrier Products Mexico SA de CV','Eng. Miguel Angel Martinez','Carr. Panamericana Km 8.5 108-B Parque Industrial ','acp.calidad@acp-mex.com\r','9295451'),(45,'TEKLAS AUTOMOTIVE MEXICO, S.A de C.V.','Brenda MASCORRO ','MEZQUITE 106 PARQUE INDUSTRIAL SAN FRANCISCO  C.P ','bmascorro@teklas.com.tr\r','52 1 449 494 2445'),(46,'Fabrica Nacional De Herramientas S.A De C.V.','Ing. Oscar Alberto Macias Roman','Arturo Romo de Vivar 1 Parque Industrial  Chichime','calidad1@fandher.com.mx\r','5000050 ext 114'),(47,'Productos Doblados de Mexico S.A de C.V.','Alberto Cortes R.','Av. Estados Unidos de America 114 Parque Industria',' alberto.cortes@prodomex.com.mx\r','(449) 929-20-94'),(48,'SERVICIOS TECNICOS PROFESIONALES MARISA SA DE CV.','','PAPATZIN MANZA 26 LOTE 29 AJUSTO Ciudad de Mexico ','\r','15553386385'),(49,'Ma. Guadalupe Montoya Rubalcava','','Conjunto Villa Hidalgo','\r','');
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `equipo`
--

DROP TABLE IF EXISTS `equipo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `equipo` (
  `IdEquipo` int NOT NULL AUTO_INCREMENT,
  `Descripcion` varchar(100) DEFAULT NULL,
  `Marca` varchar(50) DEFAULT NULL,
  `Modelo` varchar(50) DEFAULT NULL,
  `NumService` varchar(20) DEFAULT NULL,
  `ClaveId` varchar(50) DEFAULT NULL,
  `AlcanceMedicion` varchar(100) DEFAULT NULL,
  `DivisionMedicion` varchar(100) DEFAULT NULL,
  `IdCliente` int DEFAULT NULL,
  `IdPeriodo` int DEFAULT NULL,
  `MesInicio` int DEFAULT NULL,
  `MesUltimoServicio` int DEFAULT NULL,
  PRIMARY KEY (`IdEquipo`),
  KEY `IdCliente` (`IdCliente`),
  KEY `IdPeriodo` (`IdPeriodo`),
  CONSTRAINT `equipo_ibfk_1` FOREIGN KEY (`IdCliente`) REFERENCES `cliente` (`IdCliente`),
  CONSTRAINT `equipo_ibfk_2` FOREIGN KEY (`IdPeriodo`) REFERENCES `catalogoperiodos` (`IdPeriodo`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `equipo`
--

LOCK TABLES `equipo` WRITE;
/*!40000 ALTER TABLE `equipo` DISABLE KEYS */;
INSERT INTO `equipo` VALUES (1,'1División','1Marca','1Modelo','1serie','1Clave ','1Alcance ','1División',39,NULL,NULL,9),(2,'2Descripción ','2Marca','2Modelo','2serie','2Clave ','2Alcance ','2División ',39,NULL,NULL,9),(3,'xDescripción ','xMarca','xModelo','xNumero ','xClave ','xAlcance ','xDivisión ',10,NULL,NULL,NULL),(4,'zDescripción ','zMarca','zModelo','zserie','zClave ','zAlcance ','zDivisión ',10,NULL,NULL,9);
/*!40000 ALTER TABLE `equipo` ENABLE KEYS */;
UNLOCK TABLES;

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
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `equipo_orden`
--

LOCK TABLES `equipo_orden` WRITE;
/*!40000 ALTER TABLE `equipo_orden` DISABLE KEYS */;
INSERT INTO `equipo_orden` VALUES (1,1,1,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',1),(3,3,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL),(4,3,2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL),(5,4,2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL),(6,5,2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL),(7,5,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL),(8,6,2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL),(9,6,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL),(10,7,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL),(11,7,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL),(12,7,2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL),(13,7,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL),(14,7,2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL),(15,7,2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL);
/*!40000 ALTER TABLE `equipo_orden` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estatusequipo`
--

DROP TABLE IF EXISTS `estatusequipo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `estatusequipo` (
  `IdEquipoOrden` int NOT NULL,
  `IdEstatusPaquetes` int NOT NULL,
  `FechaEstatus` date NOT NULL,
  PRIMARY KEY (`IdEquipoOrden`,`IdEstatusPaquetes`),
  KEY `EstatusPaquete_ibfk2` (`IdEstatusPaquetes`),
  CONSTRAINT `EstatusPaquete_ibfk1` FOREIGN KEY (`IdEquipoOrden`) REFERENCES `equipo_orden` (`IdEquipoOrden`),
  CONSTRAINT `EstatusPaquete_ibfk2` FOREIGN KEY (`IdEstatusPaquetes`) REFERENCES `catalogoestatuspaquetes` (`IdEstatusPaquete`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estatusequipo`
--

LOCK TABLES `estatusequipo` WRITE;
/*!40000 ALTER TABLE `estatusequipo` DISABLE KEYS */;
/*!40000 ALTER TABLE `estatusequipo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `facturacliente`
--

DROP TABLE IF EXISTS `facturacliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `facturacliente` (
  `IdFactura` int NOT NULL AUTO_INCREMENT,
  `NumFactura` varchar(30) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `FechaFactura` date NOT NULL,
  `IdCliente` int NOT NULL,
  PRIMARY KEY (`IdFactura`),
  KEY `facturacliente_ibfk1` (`IdCliente`),
  CONSTRAINT `facturacliente_ibfk1` FOREIGN KEY (`IdCliente`) REFERENCES `cliente` (`IdCliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `facturacliente`
--

LOCK TABLES `facturacliente` WRITE;
/*!40000 ALTER TABLE `facturacliente` DISABLE KEYS */;
/*!40000 ALTER TABLE `facturacliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `laboratorio`
--

DROP TABLE IF EXISTS `laboratorio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `laboratorio` (
  `IdLaboratorio` int NOT NULL AUTO_INCREMENT,
  `Descripcion_lab` varchar(100) DEFAULT NULL,
  `Domicilio` varchar(200) DEFAULT NULL,
  `Telefono` varchar(20) DEFAULT NULL,
  `diasServicios` tinyint NOT NULL,
  `activo` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`IdLaboratorio`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `laboratorio`
--

LOCK TABLES `laboratorio` WRITE;
/*!40000 ALTER TABLE `laboratorio` DISABLE KEYS */;
INSERT INTO `laboratorio` VALUES (1,'HSM Sistemas Metrológicos SA de CV','Blvd. Bernardo Quintana No. 630 Local 21 Col. Desarrollo San Pablo, C.P. 76125','462 1959668',10,1),(2,'HSM','Blvd. Bernardo Quintana No. 630 Local 21 Col. Desarrollo San Pablo, C.P. 76125','462 1959668',10,0),(3,'','','',0,0),(4,'','','',0,0),(5,'','','',0,0),(6,'','','',0,0),(7,'','','',0,0);
/*!40000 ALTER TABLE `laboratorio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orden_servicio`
--

DROP TABLE IF EXISTS `orden_servicio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `orden_servicio` (
  `IdOrden` int NOT NULL AUTO_INCREMENT,
  `IdCliente` int DEFAULT NULL,
  `Fecha` date DEFAULT NULL,
  `FechaEnvio` date DEFAULT NULL,
  `FechaRecibo` date DEFAULT NULL,
  `Observaciones` varchar(200) DEFAULT NULL,
  `IdEstatusOrden` int DEFAULT NULL,
  `tipoServicio` tinyint DEFAULT '0',
  PRIMARY KEY (`IdOrden`),
  KEY `IdCliente` (`IdCliente`),
  KEY `orden_servicio_ibfk2` (`IdEstatusOrden`),
  CONSTRAINT `orden_servicio_ibfk2` FOREIGN KEY (`IdEstatusOrden`) REFERENCES `catalogoestatusorden` (`IdEstatusOrden`),
  CONSTRAINT `orden_servicio_ibfk_1` FOREIGN KEY (`IdCliente`) REFERENCES `cliente` (`IdCliente`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4  ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orden_servicio`
--

LOCK TABLES `orden_servicio` WRITE;
/*!40000 ALTER TABLE `orden_servicio` DISABLE KEYS */;
INSERT INTO `orden_servicio` VALUES (1,39,'2020-11-12','0000-00-00','0000-00-00','',2,0),(2,39,'2020-11-13','0000-00-00','0000-00-00','',1,NULL),(3,39,'2020-11-13','0000-00-00','0000-00-00','',1,0),(4,39,'2020-11-13','0000-00-00','0000-00-00','',1,1),(5,39,'2020-11-18','0000-00-00','0000-00-00','',1,0),(6,39,'2020-11-18','0000-00-00','0000-00-00','',1,0),(7,39,'2020-11-18','0000-00-00','0000-00-00','',1,0);
/*!40000 ALTER TABLE `orden_servicio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `paquete_envio`
--

DROP TABLE IF EXISTS `paquete_envio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `paquete_envio` (
  `IdPaqueteEnvio` int NOT NULL AUTO_INCREMENT,
  `IdLaboratorio` int DEFAULT NULL,
  `Descripcion` varchar(50) DEFAULT NULL,
  `FechaEnv` date DEFAULT NULL,
  `FechaRecLab` date DEFAULT NULL,
  `IdEstatusPaquete` int DEFAULT '0',
  `NumeroGuia` varchar(30) DEFAULT NULL,
  `CostoEnvio` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`IdPaqueteEnvio`),
  KEY `IdLaboratorio` (`IdLaboratorio`),
  KEY `paquete_envio_ibfk_2` (`IdEstatusPaquete`),
  CONSTRAINT `paquete_envio_ibfk_1` FOREIGN KEY (`IdLaboratorio`) REFERENCES `laboratorio` (`IdLaboratorio`),
  CONSTRAINT `paquete_envio_ibfk_2` FOREIGN KEY (`IdEstatusPaquete`) REFERENCES `catalogoestatuspaquetes` (`IdEstatusPaquete`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4  ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paquete_envio`
--

LOCK TABLES `paquete_envio` WRITE;
/*!40000 ALTER TABLE `paquete_envio` DISABLE KEYS */;
INSERT INTO `paquete_envio` VALUES (1,1,'paquete 1',NULL,NULL,1,NULL,NULL);
/*!40000 ALTER TABLE `paquete_envio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `perfil`
--

DROP TABLE IF EXISTS `perfil`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `perfil` (
  `IdPerfil` int NOT NULL AUTO_INCREMENT,
  `DescripcionPerfil` varchar(40) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`IdPerfil`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4  ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `perfil`
--

LOCK TABLES `perfil` WRITE;
/*!40000 ALTER TABLE `perfil` DISABLE KEYS */;
INSERT INTO `perfil` VALUES (1,'Administrador'),(2,'Empleado'),(3,'Cliente');
/*!40000 ALTER TABLE `perfil` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `IdUsuario` int NOT NULL AUTO_INCREMENT,
  `NombreUsuario` varchar(20) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `ApellidosUsuario` varchar(20) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `usuario` varchar(20) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `contrasena` varchar(100) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `IdPerfil` int NOT NULL,
  `fechaActualizado` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `fechaCreacion` datetime DEFAULT CURRENT_TIMESTAMP,
  `fechaCaducidad` datetime DEFAULT NULL,
  `creacion` tinyint(1) NOT NULL DEFAULT '0',
  `cliente` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`IdUsuario`),
  KEY `usuario_ibfk1` (`IdPerfil`),
  CONSTRAINT `usuario_ibfk1` FOREIGN KEY (`IdPerfil`) REFERENCES `perfil` (`IdPerfil`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4  ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'David','Parrito','david.parrito','f182bb4f7003792e4b027d4fe5fbd9b3',1,'2019-06-17 17:13:48','2019-06-17 17:02:22','2019-12-14 17:10:28',1,'0'),(2,'1','1','1','c4ca4238a0b923820dcc509a6f75849b',2,NULL,'2020-11-12 19:57:26',NULL,0,''),(3,'2','2','2','f182bb4f7003792e4b027d4fe5fbd9b3',3,'2020-11-13 00:08:55','2020-11-12 19:57:41',NULL,1,'44'),(4,'cymesa','','cymesa','c4ca4238a0b923820dcc509a6f75849b',3,NULL,'2020-11-18 22:18:28',NULL,1,'39');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;



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

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-12-15 21:50:18
