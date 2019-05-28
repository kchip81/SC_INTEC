-- MySQL dump 10.13  Distrib 8.0.15, for Win64 (x86_64)
--
-- Host: localhost    Database: bd_intec
-- ------------------------------------------------------
-- Server version	8.0.15

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8mb4 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `catalogoestatuspaquetes`
--

DROP TABLE IF EXISTS `catalogoestatuspaquetes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `catalogoestatuspaquetes` (
  `IdEstatusPaquete` int(11) DEFAULT NULL,
  `DescripcionEstatusPaquete` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `catalogoestatuspaquetes`
--

LOCK TABLES `catalogoestatuspaquetes` WRITE;
/*!40000 ALTER TABLE `catalogoestatuspaquetes` DISABLE KEYS */;
INSERT INTO `catalogoestatuspaquetes` VALUES (1,'Creado'),(2,'Enviado a Laboratorio'),(3,'Recibido Laboratorio'),(4,'Calibración Terminada'),(5,'En Retorno'),(6,'Recibido Intec');
/*!40000 ALTER TABLE `catalogoestatuspaquetes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cliente`
--

DROP TABLE IF EXISTS `cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `cliente` (
  `IdCliente` int(11) NOT NULL AUTO_INCREMENT,
  `NombreCompania` varchar(70) DEFAULT NULL,
  `NombreContacto` varchar(100) DEFAULT NULL,
  `Domicilio` varchar(150) DEFAULT NULL,
  `Correo` varchar(50) DEFAULT NULL,
  `Telefono` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`IdCliente`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cliente`
--

LOCK TABLES `cliente` WRITE;
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` VALUES (1,'Quality Bolca S.A de C.V','','Av. Independencia  203 Paseos de Aguascalientes C.P 20911\n','\r','9139955'),(2,'Ditromexico S.A. de C.V.','','PABELLON DE ARTEAGA 114 PARQUE INDUSTRIAL DEL VALLE DE AGUASCALIENTES C.P 20358 SAN FRANCISCO DE LOS ROMO, AGS','\r','01 (449) 9734300'),(3,'Grupo FARSANMAR S.A. de C.V.','Andres Ramirez','Avenida Circuito Aguascalientes 142-D Parque Industrial del Valle de Aguascalientes San Francisco de los Romo Aguascalientes C,P 20329','andres.ramirez@farmaciastamaria.com\r','(449) 1-58-24-00'),(4,'SIA AUTOMATION S. DE R.L DE C.V','Israel Bueno ','AV. PASEO DE LOS INSURGENTES 304 INT. 20 JARDINES  DEL MORAL CP 37160 Leon Guanajuato ','i.bueno@sia-automation.com.mx\r','9711951'),(5,'SANDRA ELISA HERNANDEZ','oscar calzada rodriguez ','Jesus Rivera Franco 301 Cd. Industrial Aguascalientes C.p 20290','oscarespmec@outlook.com\r','9712479 - 9712353-6887018'),(6,'QUALITY DE AGUASCALIENTES S.A. DE C.V.','Marisol Haro','Av. Canal interceptor 703 Int. 5 Las arboledas Aguascalientes C.P 20020','marisol.haro@quagsa.com.mx\r','1759823'),(7,'TF-METAL MEXICO SA DE CV','salvador Duenas ','Circuito Cerezos Sur No 105 san Francisco de los Romo Aguascalientes C.P 20304','s-duenas@tf-metal.mx\r','52 449 922 40 00 ext. 201'),(8,'VITECHMEX NONWOVENS SA DE CV','Nancy Martinez ','CARRETERA 45 NORTE KM 14.3 325-B J. Gomez Portugal C.P 20909 Aguascalientes','nmartinez@vitechmfgmx.com\r','1535700- 1535711'),(9,'METALISTIK SA DE CV','Javier Delgado ','CARRETERA PANAMERICANA NORTE KM 14 INT. 15 PASEOS DE GOMEZ PORTUGAL JESUS GOMEZ PORTUGAL JESUS MARIA AGS. ','javier.delgado@metalistik.com\r','449 188 42 19'),(10,'MGM NUTRICION ANIMAL SA DE CV','Ing. Cuahutemoc Sanchez','Carretera a San Luis Potosi km 14.5 El Retono Aguascalientes ','csanchez@mgmnutricionanimal.com\r','9711914'),(11,'MEXICO MURATA SPRING CORPORATION S.A DE C.V','Jose Haro ','PROLONGACION CONSTITUCION 802 EL PUERTECITO DE LA VIRGEN AGUASCALIENTES C.P 20329','jharo@mexicomsc.com\r','449 412 36 33'),(12,'SHOSHIBA MEXICANA SA DE CV','Adan Murillo ','CARRETERA 45 NORTE KM 14.3 325 A JESUS MARIA PORTUGAL AGUASCALIENTES C.P 20909','adan.murillo@shoshiba.com.mx\r','929 5434'),(13,'INDUSTRIAS DMU S.A DE C.V.','Refugio Rangel ','JOSE BARBA ALONSO 105 CD. INDUSTRIAL AGUASCALIENTES 20290','rrangel@ind-dmu.com\r','9712587'),(14,'J&R MAQUINADOS INDUSTRIALES S.A. DE C.V.','','HEROE DE NACOZARI NTE 2905 INT. 3 LAS HADAS AGUASCALIENTES C.P 20400','\r','912 11 85'),(15,'MAQUINADOS Y SERVICIOS ESPECIALIZADOS, S.A. DE C.V.','','AV. SIGLO XIX 109 LOMAS DE SANTA ANITA AGUASCALIENTES C.P 20164','\r','9755502'),(16,'KUROTA MEXICO S.A. DE C.V.','Esmeralda Montes ','CIRCUITO CEREZO SUR 108 PARQUE INDUSTRIAL SAN FCO. IV AGUASCALIENTES ','compras1@kurota-mx.com\r','478-31-03'),(17,'Gestamp Aguascalientes S.A. de C.V.','Edgar Duron','AVDA. DE JAPON 124 PARQUE INDUSTRIAL SAN FRANCISCO C.P 20304','\r','449 910 9140 Ext. 19168'),(18,'COMPANIA ALIMENTICIA RIVERA ROMO SA DE CV','','Av. Independencia 502 Fracc. El sol Aguascalientes ','calidad.ags@galletasvanessa.com.mxoffice@bccbi.bg\r','9 15 55 45. Ext. 108'),(19,'IMPULSORA DE HERRAMIENTAS DEL CENTRO S. de R.L de C.V.','Roberto Diaz','Altena 105 Ejido Cumbres Aguascalientes C.P 20175','ihc.ags@hotmail.com\r','01 449 9725314'),(20,'TST NIKKEI METALES S. DE RL. DE CV.','Miguel Reyes ','CARRETERA LOS ARELLANOS P4 ARELLANO AGUASCALIENTES C.P 20340','mreyes@tstnikkei.com\r',' 449 929 5517'),(21,'PARKER-TRUTEC MEXICANA S.A. DE C.V','Karla Rodriguez ','CAROLINA VILLANUEVA 408 CD. INDUSTRIAL AGUASCALIENTES C.P 20290','krodriguez@parkertrutec.com\r','449 9711436'),(22,'JIDOHKA SMART S.A. DE C.V.','Alejandra Robles','AV. MAHATMA GANDHI 814 COL SAN FRANCISCO DEL ARENAL AGUASCALIENTES C.P 20290','compras@jidohkasmart.com.mx\r','929-51-63 ext. 102'),(23,'VIANNEY TEXTIL HOGAR S.A DE C.V.','Ochoa Tellez, Jose Luis ','Salvador Quezada Limon 1512 Curtidores C.P 20040 Aguascalientes','luis.ochoa@vianney.com.mx\r','449 9223050'),(24,'Mahle Componentes de Motor de Mexico S. de R.L. de C.V.','Ana Mcias','KM. 0.3 carr. Maravillas- Jesus Maria 1176 Aguascalientes c.p 20900','ana.macias@mx.mahle.com\r','(449) 9108244'),(25,'O-Tek Mexico S.A de C.V','Carolina Lizbeth Ayala Mata ','Carretera Aguascalientes - Zacatecas km. 17.5 parque Industrial san francisco Aguascalientes','carolina.ayala@o-tek.com.mx\r','139-39-60'),(26,'Smeltek S.A de C.V','Fernando Camacho ','Av. Julio Diaz Torre 112 CD Industrial Aguascalientes C.P 20290','fernando.camacho@smeltek.mx\r','9710910'),(27,'Texas Instruments de Mexico S de RL de CV','Rodriguez, Bety ','Jesus Rivera Franco 507 Cd. Industrial C.P20290 Aguascalientes','b-rodriguez2@ti.com\r','175 1474'),(28,'TK Minth Mexico S.A de C.V','','Carretera los Arellanos 220 Parque Industrial Siglo XXI C.P 20283 Aguascalientes','\r','929 5434'),(29,'OSHITANI INDUSTRIAL MEXICANA S DE RL DE CV','Araceli Delacruz ','Prolongacion M Juarez 1089-12 Linda Vista  Tijiana Baja california C.P 22054 ','Araceli.Delacruz@oshitani.com.mx\r','9734605'),(30,'Guadalupe del Rocio Lira Guerra','','quirigua 603 Lomas de Jesus Maria Aguascalientes ','\r',''),(31,'ITW AUTOMOTIVE PRODUCTS MEXICO S DE RL CV.','Nieto, Angel ','AVENIDA ESTADOS UNIDOS 108 PARQUE INDUSTRIAL SAN FRANCISCO AGUASCALIENTES C.P 20300','Anieto@itwautomx.com\r','449-2394270'),(32,'S&C ELECTRIC MEXICANA S. DE R .L. DE C .V.','Castorena, Carlos','JESUS MARIA ROMO N. 143 CD. INDUSTRIAL AGUASCALIENTES C.P 20290',' Carlos.Castorena@sandc.com\r','149-23-73'),(33,'CONEXIONES PLASTICAS DE AGUASCALIENTES SA DE CV','Norma Gloria','20 de Noviembre N. 1604 Morelos Aguascalientes C.P 20140','n.gloria@conplasa.com.mx\r','9120122'),(34,'Operadora MPK S A P I de CV','Isabel Castorena ','Aguascalientes Sur 2729 Lote 12 Manzana jardines de las fuentes Aguascalientes ','icastorena@miraplastek.com.mx\r','9106620'),(35,'Cymesa S.A. de C.V.','ANTONIO PLASCENCIA ','Lerma 2111 Colonia Mitras Centro Nuevo Leon Monterrey ','pagj670520@gmail.com\r','9711488'),(36,'SANS MEXICANA S.A DE C.V.','','Av. Mexico 204 Parque Industrial San Francisco Aguascalientes','calidad@sansmex.com.mx\r','449 9109350'),(37,'SANOH INDUSTRIAL DE MEXICO S.A DE C.V','Maria Eugenia Moreno Delgado ','Circuito Aguascalientes Oriente 130 P.I.V.A C.P 20126 Aguascalientes San Francisco de los romo','eugenia.moreno@sanohmx.com\r','910-9660 Ext: 2233'),(38,'POLICH INDUSTRIES S.A DE .C.V','Compras Polich Industries ','CIRCUITO IGNACIO AYALA 104 NORIAS DE PASO HONDO 2384 AGUASCALIENTES','compras@polich.us\r','9141260'),(39,'SAKAIYA DE MEXICO S.A DE C.V','Magdalena Mendez Lara','Av.Muebleros 210 Chichimico C.P 20916 Jesus Maria Aguascalientes','Metrologia.chichimeco@sakaiya.com.mx\r','9730010'),(40,'OROTEX INDUSTRIAL DE AGUASCALIENTES S DE RL DE CV','Claudia Ivonne V. ','JOSE BARBA ALONSO 215 CD INDUSTRIAL AGUASCALIENTES C.P 20290','cxp@orotexmx.com\r','971-0484'),(41,'Advanced Carrier Products Mexico SA de CV','Eng. Miguel Angel Martinez','Carr. Panamericana Km 8.5 108-B Parque Industrial  Altec C.P 20290 Aguascalientes','acp.calidad@acp-mex.com\r','9295451'),(42,'TEKLAS AUTOMOTIVE MEXICO, S.A de C.V.','Brenda MASCORRO ','MEZQUITE 106 PARQUE INDUSTRIAL SAN FRANCISCO  C.P 20355','bmascorro@teklas.com.tr\r','52 1 449 494 2445'),(43,'Fabrica Nacional De Herramientas S.A De C.V.','Ing. Oscar Alberto Macias Roman','Arturo Romo de Vivar 1 Parque Industrial  Chichimeco Jesus Maria Aguascalientes C.P 20900','calidad1@fandher.com.mx\r','5000050 ext 114'),(44,'Productos Doblados de Mexico S.A de C.V.','Alberto Cortes R.','Av. Estados Unidos de America 114 Parque Industrial San Francisco de los Romo  C.P 20350',' alberto.cortes@prodomex.com.mx\r','(449) 929-20-94'),(45,'SERVICIOS TECNICOS PROFESIONALES MARISA SA DE CV.','','PAPATZIN MANZA 26 LOTE 29 AJUSTO Ciudad de Mexico  C.P 4300 Coyoacan ','\r','15553386385'),(46,'HOWA MEXICO S.A DE C.V','','Circuito Progreso 201 Parque industrial Logistica Automotriz C.P 20340 Aguascalientes','\r','449 6880886'),(47,'Ma. Guadalupe Montoya Rubalcava','','Conjunto Villa Hidalgo','\r','');
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `equipo`
--

DROP TABLE IF EXISTS `equipo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `equipo` (
  `IdEquipo` int(11) NOT NULL AUTO_INCREMENT,
  `Descripcion` varchar(100) DEFAULT NULL,
  `Marca` varchar(50) DEFAULT NULL,
  `Modelo` varchar(50) DEFAULT NULL,
  `NumService` varchar(20) DEFAULT NULL,
  `ClaveId` varchar(50) DEFAULT NULL,
  `AlcanceMedicion` varchar(100) DEFAULT NULL,
  `DivisionMedicion` varchar(100) DEFAULT NULL,
  `IdCliente` int(11) DEFAULT NULL,
  PRIMARY KEY (`IdEquipo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `equipo`
--

LOCK TABLES `equipo` WRITE;
/*!40000 ALTER TABLE `equipo` DISABLE KEYS */;
/*!40000 ALTER TABLE `equipo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `equipo_orden`
--

DROP TABLE IF EXISTS `equipo_orden`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `equipo_orden` (
  `IdEquipoOrden` int(11) NOT NULL AUTO_INCREMENT,
  `IdOrden` int(11) DEFAULT NULL,
  `IdEquipo` int(11) DEFAULT NULL,
  `FechaFinCalLab` date DEFAULT NULL,
  `FechaRetLab` date DEFAULT NULL,
  `FechaRecIntecLab` date DEFAULT NULL,
  `IdEstatusPaquete` int(11) DEFAULT '0',
  `Etiqueta` tinyint(1) DEFAULT NULL,
  `Certificado` text,
  `Factura` tinyint(1) DEFAULT NULL,
  `IdPaqueteEnvio` int(11) DEFAULT NULL,
  PRIMARY KEY (`IdEquipoOrden`),
  KEY `IdPaqueteEnvio` (`IdPaqueteEnvio`),
  CONSTRAINT `equipo_orden_ibfk_1` FOREIGN KEY (`IdPaqueteEnvio`) REFERENCES `paquete_envio` (`IdPaqueteEnvio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `equipo_orden`
--

LOCK TABLES `equipo_orden` WRITE;
/*!40000 ALTER TABLE `equipo_orden` DISABLE KEYS */;
/*!40000 ALTER TABLE `equipo_orden` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `laboratorio`
--

DROP TABLE IF EXISTS `laboratorio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `laboratorio` (
  `IdLaboratorio` int(11) NOT NULL AUTO_INCREMENT,
  `Descripcion_lab` varchar(100) DEFAULT NULL,
  `Domicilio` varchar(50) DEFAULT NULL,
  `Telefono` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`IdLaboratorio`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `laboratorio`
--

LOCK TABLES `laboratorio` WRITE;
/*!40000 ALTER TABLE `laboratorio` DISABLE KEYS */;
INSERT INTO `laboratorio` VALUES (1,'Laboratorio 1','Domicilio Laboratorio 1','111111111'),(2,'Laboratorio 2','Domicilio Laboratorio 2','222222222');
/*!40000 ALTER TABLE `laboratorio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orden_servicio`
--

DROP TABLE IF EXISTS `orden_servicio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `orden_servicio` (
  `IdOrden` int(11) NOT NULL AUTO_INCREMENT,
  `IdCliente` int(11) DEFAULT NULL,
  `Fecha` date DEFAULT NULL,
  `FechaEnvio` date DEFAULT NULL,
  `FechaRecibo` date DEFAULT NULL,
  `Observaciones` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`IdOrden`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orden_servicio`
--

LOCK TABLES `orden_servicio` WRITE;
/*!40000 ALTER TABLE `orden_servicio` DISABLE KEYS */;
/*!40000 ALTER TABLE `orden_servicio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `paquete_envio`
--

DROP TABLE IF EXISTS `paquete_envio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `paquete_envio` (
  `IdPaqueteEnvio` int(11) NOT NULL AUTO_INCREMENT,
  `IdOrden` int(11) NOT NULL,
  `IdLaboratorio` int(11) DEFAULT NULL,
  `Descripcion` varchar(50) DEFAULT NULL,
  `FechaEnv` date DEFAULT NULL,
  `FechaRecLab` date DEFAULT NULL,
  `FechaFinalCalLab` date DEFAULT NULL,
  `FechaRetLab` date DEFAULT NULL,
  `FechaRecpIntecLab` date DEFAULT NULL,
  `IdEstatusPaquete` int(11) DEFAULT '0',
  PRIMARY KEY (`IdPaqueteEnvio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paquete_envio`
--

LOCK TABLES `paquete_envio` WRITE;
/*!40000 ALTER TABLE `paquete_envio` DISABLE KEYS */;
/*!40000 ALTER TABLE `paquete_envio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `perfil`
--

DROP TABLE IF EXISTS `perfil`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `perfil` (
  `IdPerfil` int(11) NOT NULL AUTO_INCREMENT,
  `DescripcionPerfil` varchar(40) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`IdPerfil`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `perfil`
--

LOCK TABLES `perfil` WRITE;
/*!40000 ALTER TABLE `perfil` DISABLE KEYS */;
INSERT INTO `perfil` VALUES (1,'Administrador');
/*!40000 ALTER TABLE `perfil` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `usuarios` (
  `IdUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `NombreUsuario` varchar(20) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `ApellidosUsuario` varchar(20) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `usuario` varchar(20) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `contrasena` varchar(20) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `IdPerfil` int(11) NOT NULL,
  PRIMARY KEY (`IdUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'David','Parrito','david.parrito','Intec@123.',1),(2,'Diego','Garcia','diego','',1),(3,'Usuario','','','',1);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-05-27  8:10:03
