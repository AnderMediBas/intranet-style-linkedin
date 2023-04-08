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
  PRIMARY KEY (`idpropuesta`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `propuesta`
--

LOCK TABLES `propuesta` WRITE;
/*!40000 ALTER TABLE `propuesta` DISABLE KEYS */;
INSERT INTO `propuesta` VALUES (1,'Ingeniero de Soporte Tecnico Informatico','Soporte Tecnico para Hardware y Software en equipos informaticos y Redes LAN. Conocimiento en equipos DELL, LENOVO y otras marcas. Instalacion de Sistemas Operativos. Diagnostico Hardware y Cambio de ','EducaciÃ³n mÃ­nima: TÃ©cnico\r\n2 aÃ±os de experiencia\r\nIdiomas: InglÃ©s\r\nConocimientos: Windows, Networking, AdministraciÃ³n de sistemas, Microsoft Office\r\nDisponibilidad de viajar: S','2023-04-30','A'),(2,'Analista Estadistico de Datos','- Estructurar, gestionar, actualizar la base de datos con la informaciÃ³n\r\ngenerada por el sistema y por informaciÃ³n de fuentes externas.\r\n- Evaluar y proponer variables y parÃ¡metros que permitan el','Bachiller o titulado en IngenierÃ­a InformÃ¡tica, IngenierÃ­a de Sistemas, IngenierÃ­a EstadÃ­stica o afines con conocimientos en manejo de Bases de Datos y EstadÃ­sticas.\r\nAsÃ­ mismo, de preferencia que cuente con estudios de Herramientas de Bussine','2023-05-31','A'),(3,'EstadÃ­stico para proyecciones y control de la pro','Importante empresa agroindustrial lÃ­der a nivel mundial en el cultivo y procesamiento de hortalizas finas, frutas, sÃºper granos en las modalidades de fresco, conserva, secos y congelado para el merc','- Profesional de las carreras de Ing. EstadÃ­stica, Ing. Industrial y/o AgronomÃ­a.\r\n- Experiencia mÃ­nima de 06 meses.\r\n- Disponibilidad de tiempo completo.\r\n- Sexo: Mujer u Hombre','2023-07-20','A');
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
  `iduser` int NOT NULL,
  `archivo_solicitud` varchar(125) DEFAULT NULL,
  PRIMARY KEY (`idsolicitudes`),
  KEY `fk_user_idx` (`iduser`),
  KEY `fk_propuesta_idx` (`idpropuesta`),
  CONSTRAINT `fk_propuesta` FOREIGN KEY (`idpropuesta`) REFERENCES `propuesta` (`idpropuesta`),
  CONSTRAINT `fk_user` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `solicitudes`
--

LOCK TABLES `solicitudes` WRITE;
/*!40000 ALTER TABLE `solicitudes` DISABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (21,'Universidad Faustino','Empresa','AV. Indachocea','2132143','faustino@unjfsc.edu.pe','admin','12345'),(30,'Usiario x','Postulante','calle xxx','98881991','aasdasda@gmail.com','prueba','1234');
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

-- Dump completed on 2023-04-06 22:01:21
