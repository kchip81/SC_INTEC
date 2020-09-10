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
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cliente`
--

LOCK TABLES `cliente` WRITE;
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` VALUES (1,'Vianney','Vianney','','',''),(2,'TK','TK','','',''),(3,'HOWA','HOWA','','',''),(4,'QUAGSA','QUAGSA',NULL,NULL,NULL),(5,'SANOH','SANOH',NULL,NULL,NULL),(6,'ITW','ITW',NULL,NULL,NULL),(7,'OSHITANI','OSHITANI',NULL,NULL,NULL),(8,'Centro Diesel Profesional SA de CV','Armando Delgado','Carr. Salida a Durango, Plan de Ayal S/N','armando.delgado.silva@gmail.com',NULL),(9,'Quality Bolca S.A de C.V','','Av. Independencia  203 Paseos de Aguascalientes C.','\r','9139955'),(10,'Ditromexico S.A. de C.V.','','PABELLON DE ARTEAGA 114 PARQUE INDUSTRIAL DEL VALL','\r','01 (449) 9734300'),(11,'Grupo FARSANMAR S.A. de C.V.','Andres Ramirez','Avenida Circuito Aguascalientes 142-D Parque Indus','andres.ramirez@farmaciastamaria.com\r','(449) 1-58-24-00'),(12,'SIA AUTOMATION S. DE R.L DE C.V','Israel Bueno ','AV. PASEO DE LOS INSURGENTES 304 INT. 20 JARDINES ','i.bueno@sia-automation.com.mx\r','9711951'),(13,'SANDRA ELISA HERNANDEZ','oscar calzada rodriguez ','Jesus Rivera Franco 301 Cd. Industrial Aguascalien','oscarespmec@outlook.com\r','9712479 - 9712353-68'),(14,'QUALITY DE AGUASCALIENTES S.A. DE C.V.','Marisol Haro','Av. Canal interceptor 703 Int. 5 Las arboledas Agu','marisol.haro@quagsa.com.mx\r','1759823'),(15,'TF-METAL MEXICO SA DE CV','salvador Duenas ','Circuito Cerezos Sur No 105 san Francisco de los R','s-duenas@tf-metal.mx\r','52 449 922 40 00 ext'),(16,'VITECHMEX NONWOVENS SA DE CV','Nancy Martinez ','CARRETERA 45 NORTE KM 14.3 325-B J. Gomez Portugal','nmartinez@vitechmfgmx.com\r','1535700- 1535711'),(17,'METALISTIK SA DE CV','Javier Delgado ','CARRETERA PANAMERICANA NORTE KM 14 INT. 15 PASEOS ','javier.delgado@metalistik.com\r','449 188 42 19'),(18,'MGM NUTRICION ANIMAL SA DE CV','Ing. Cuahutemoc Sanchez','Carretera a San Luis Potosi km 14.5 El Retono Agua','csanchez@mgmnutricionanimal.com\r','9711914'),(19,'MEXICO MURATA SPRING CORPORATION S.A DE C.V','Jose Haro ','PROLONGACION CONSTITUCION 802 EL PUERTECITO DE LA ','jharo@mexicomsc.com\r','449 412 36 33'),(20,'SHOSHIBA MEXICANA SA DE CV','Adan Murillo ','CARRETERA 45 NORTE KM 14.3 325 A JESUS MARIA PORTU','adan.murillo@shoshiba.com.mx\r','929 5434'),(21,'INDUSTRIAS DMU S.A DE C.V.','Refugio Rangel ','JOSE BARBA ALONSO 105 CD. INDUSTRIAL AGUASCALIENTE','rrangel@ind-dmu.com\r','9712587'),(22,'J&R MAQUINADOS INDUSTRIALES S.A. DE C.V.','','HEROE DE NACOZARI NTE 2905 INT. 3 LAS HADAS AGUASC','\r','912 11 85'),(23,'MAQUINADOS Y SERVICIOS ESPECIALIZADOS, S.A. DE C.V','','AV. SIGLO XIX 109 LOMAS DE SANTA ANITA AGUASCALIEN','\r','9755502'),(24,'KUROTA MEXICO S.A. DE C.V.','Esmeralda Montes ','CIRCUITO CEREZO SUR 108 PARQUE INDUSTRIAL SAN FCO.','compras1@kurota-mx.com\r','478-31-03'),(25,'Gestamp Aguascalientes S.A. de C.V.','Edgar Duron','AVDA. DE JAPON 124 PARQUE INDUSTRIAL SAN FRANCISCO','\r','449 910 9140 Ext. 19'),(26,'COMPANIA ALIMENTICIA RIVERA ROMO SA DE CV','','Av. Independencia 502 Fracc. El sol Aguascalientes','calidad.ags@galletasvanessa.com.mxoffice@bccbi.bg\r','9 15 55 45. Ext. 108'),(27,'IMPULSORA DE HERRAMIENTAS DEL CENTRO S. de R.L de ','Roberto Diaz','Altena 105 Ejido Cumbres Aguascalientes C.P 20175','ihc.ags@hotmail.com\r','01 449 9725314'),(28,'TST NIKKEI METALES S. DE RL. DE CV.','Miguel Reyes ','CARRETERA LOS ARELLANOS P4 ARELLANO AGUASCALIENTES','mreyes@tstnikkei.com\r',' 449 929 5517'),(29,'PARKER-TRUTEC MEXICANA S.A. DE C.V','Karla Rodriguez ','CAROLINA VILLANUEVA 408 CD. INDUSTRIAL AGUASCALIEN','krodriguez@parkertrutec.com\r','449 9711436'),(30,'JIDOHKA SMART S.A. DE C.V.','Alejandra Robles','AV. MAHATMA GANDHI 814 COL SAN FRANCISCO DEL ARENA','compras@jidohkasmart.com.mx\r','929-51-63 ext. 102'),(31,'Mahle Componentes de Motor de Mexico S. de R.L. de','Ana Mcias','KM. 0.3 carr. Maravillas- Jesus Maria 1176 Aguasca','ana.macias@mx.mahle.com\r','(449) 9108244'),(32,'O-Tek Mexico S.A de C.V','Carolina Lizbeth Ayala Mata ','Carretera Aguascalientes - Zacatecas km. 17.5 parq','carolina.ayala@o-tek.com.mx\r','139-39-60'),(33,'Smeltek S.A de C.V','Fernando Camacho ','Av. Julio Diaz Torre 112 CD Industrial Aguascalien','fernando.camacho@smeltek.mx\r','9710910'),(34,'Texas Instruments de Mexico S de RL de CV','Rodriguez, Bety ','Jesus Rivera Franco 507 Cd. Industrial C.P20290 Ag','b-rodriguez2@ti.com\r','175 1474'),(35,'Guadalupe del Rocio Lira Guerra','','quirigua 603 Lomas de Jesus Maria Aguascalientes ','\r',''),(36,'S&C ELECTRIC MEXICANA S. DE R .L. DE C .V.','Castorena, Carlos','JESUS MARIA ROMO N. 143 CD. INDUSTRIAL AGUASCALIEN',' Carlos.Castorena@sandc.com\r','149-23-73'),(37,'CONEXIONES PLASTICAS DE AGUASCALIENTES SA DE CV','Norma Gloria','20 de Noviembre N. 1604 Morelos Aguascalientes C.P','n.gloria@conplasa.com.mx\r','9120122'),(38,'Operadora MPK S A P I de CV','Isabel Castorena ','Aguascalientes Sur 2729 Lote 12 Manzana jardines d','icastorena@miraplastek.com.mx\r','9106620'),(39,'Cymesa S.A. de C.V.','ANTONIO PLASCENCIA ','Lerma 2111 Colonia Mitras Centro Nuevo Leon Monter','pagj670520@gmail.com\r','9711488'),(40,'SANS MEXICANA S.A DE C.V.','','Av. Mexico 204 Parque Industrial San Francisco Agu','calidad@sansmex.com.mx\r','449 9109350'),(41,'POLICH INDUSTRIES S.A DE .C.V','Compras Polich Industries ','CIRCUITO IGNACIO AYALA 104 NORIAS DE PASO HONDO 23','compras@polich.us\r','9141260'),(42,'SAKAIYA DE MEXICO S.A DE C.V','Magdalena Mendez Lara','Av.Muebleros 210 Chichimico C.P 20916 Jesus Maria ','Metrologia.chichimeco@sakaiya.com.mx\r','9730010'),(43,'OROTEX INDUSTRIAL DE AGUASCALIENTES S DE RL DE CV','Claudia Ivonne V. ','JOSE BARBA ALONSO 215 CD INDUSTRIAL AGUASCALIENTES','cxp@orotexmx.com\r','971-0484'),(44,'Advanced Carrier Products Mexico SA de CV','Eng. Miguel Angel Martinez','Carr. Panamericana Km 8.5 108-B Parque Industrial ','acp.calidad@acp-mex.com\r','9295451'),(45,'TEKLAS AUTOMOTIVE MEXICO, S.A de C.V.','Brenda MASCORRO ','MEZQUITE 106 PARQUE INDUSTRIAL SAN FRANCISCO  C.P ','bmascorro@teklas.com.tr\r','52 1 449 494 2445'),(46,'Fabrica Nacional De Herramientas S.A De C.V.','Ing. Oscar Alberto Macias Roman','Arturo Romo de Vivar 1 Parque Industrial  Chichime','calidad1@fandher.com.mx\r','5000050 ext 114'),(47,'Productos Doblados de Mexico S.A de C.V.','Alberto Cortes R.','Av. Estados Unidos de America 114 Parque Industria',' alberto.cortes@prodomex.com.mx\r','(449) 929-20-94'),(48,'SERVICIOS TECNICOS PROFESIONALES MARISA SA DE CV.','','PAPATZIN MANZA 26 LOTE 29 AJUSTO Ciudad de Mexico ','\r','15553386385'),(49,'Ma. Guadalupe Montoya Rubalcava','','Conjunto Villa Hidalgo','\r','');
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-09-10 12:58:45
