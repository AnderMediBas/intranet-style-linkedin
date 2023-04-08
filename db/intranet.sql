-- MySQL dump 10.13  Distrib 8.0.32, for Win64 (x86_64)
--
-- Host: localhost    Database: intranet
-- ------------------------------------------------------
-- Server version	8.0.32

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
-- Table structure for table `curriculum`
--

DROP TABLE IF EXISTS `curriculum`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `curriculum` (
  `idcurriculum` int NOT NULL AUTO_INCREMENT,
  `cargo` varchar(45) DEFAULT NULL,
  `perfil` text,
  `archivo` varchar(145) DEFAULT NULL,
  `iduser` int NOT NULL,
  PRIMARY KEY (`idcurriculum`),
  KEY `fk_curriculum_idx` (`iduser`),
  CONSTRAINT `fk_curriculum` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `curriculum`
--

LOCK TABLES `curriculum` WRITE;
/*!40000 ALTER TABLE `curriculum` DISABLE KEYS */;
INSERT INTO `curriculum` VALUES (8,'Ingeniero','Desarrollo web','cv Anderson Aimar Medina Bastidas (1) (1) (1).pdf',37),(9,'ing','asdasd','cv Anderson Aimar Medina Bastidas (1) (1) (1) (1).pdf',39);
/*!40000 ALTER TABLE `curriculum` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `propuesta`
--

DROP TABLE IF EXISTS `propuesta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `propuesta` (
  `idpropuesta` int NOT NULL AUTO_INCREMENT,
  `nombrepropuesta` varchar(50) NOT NULL,
  `descripcionpropuesta` varchar(200) NOT NULL,
  `requisitos` varchar(250) NOT NULL,
  `fechapropuesta` date NOT NULL,
  `estado` varchar(1) NOT NULL,
  `iduser` int DEFAULT NULL,
  PRIMARY KEY (`idpropuesta`),
  KEY `FK_propuesta_user_idx` (`iduser`),
  CONSTRAINT `FK_propuesta_user` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `propuesta`
--

LOCK TABLES `propuesta` WRITE;
/*!40000 ALTER TABLE `propuesta` DISABLE KEYS */;
INSERT INTO `propuesta` VALUES (3,'EstadÃ­stico para proyecciones y control de la pro','Importante empresa agroindustrial lÃ­der a nivel mundial en el cultivo y procesamiento de hortalizas finas, frutas, sÃºper granos en las modalidades de fresco, conserva, secos y congelado para el asd','- Profesional de las carreras de Ing. EstadÃ­stica, Ing. Industrial y/o AgronomÃ­a.\r\n- Experiencia mÃ­nima de 06 meses.\r\n- Disponibilidad de tiempo completo.\r\n- Sexo: Mujer u Hombreasd','2023-07-23','A',21),(16,'Linkedin','asdasd','asdasd','2023-04-18','A',21);
/*!40000 ALTER TABLE `propuesta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `solicitudes`
--

DROP TABLE IF EXISTS `solicitudes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `solicitudes` (
  `idsolicitudes` int NOT NULL AUTO_INCREMENT,
  `idpropuesta` int NOT NULL,
  `iduser` int DEFAULT NULL,
  PRIMARY KEY (`idsolicitudes`),
  KEY `fk_propuesta_idx` (`idpropuesta`),
  KEY `fk_solicitud_user_idx` (`iduser`),
  CONSTRAINT `fk_propuesta` FOREIGN KEY (`idpropuesta`) REFERENCES `propuesta` (`idpropuesta`),
  CONSTRAINT `fk_solicitud_user` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `solicitudes`
--

LOCK TABLES `solicitudes` WRITE;
/*!40000 ALTER TABLE `solicitudes` DISABLE KEYS */;
INSERT INTO `solicitudes` VALUES (16,3,37),(17,3,39),(18,16,39);
/*!40000 ALTER TABLE `solicitudes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `iduser` int NOT NULL AUTO_INCREMENT,
  `nombreempresa` varchar(50) NOT NULL,
  `categoria` varchar(30) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `telefono` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (21,'Universidad Faustino','Empresa','AV. Indachocea','2132143','faustino@unjfsc.edu.pe','admin','12345'),(37,'qwwqe','Postulante','qwe','243432','andermedib@gmail.com','prueba12345','12345'),(38,'asdasd','Empresa','asd','123123','andermedibasdas@gmail.com','prueba1','12345'),(39,'asdasd','Postulante','asd','23123','andermedibada@gmail.com','prueba2','12345');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-04-07 20:57:07
