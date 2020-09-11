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
  `cliente` int NULL,
  PRIMARY KEY (`IdUsuario`),
  KEY `usuario_ibfk1` (`IdPerfil`),
  CONSTRAINT `usuario_ibfk1` FOREIGN KEY (`IdPerfil`) REFERENCES `perfil` (`IdPerfil`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'David','Parrito','david.parrito','f182bb4f7003792e4b027d4fe5fbd9b3',1,'2019-06-17 17:13:48','2019-06-17 17:02:22','2019-12-14 17:10:28',1);
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

-- Dump completed on 2020-09-10 12:58:45
