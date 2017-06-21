-- MySQL dump 10.13  Distrib 5.6.22, for osx10.8 (x86_64)
--
-- Host: localhost    Database: Pollutant
-- ------------------------------------------------------
-- Server version	5.6.24

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `pollutant`
--

DROP TABLE IF EXISTS `pollutant`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pollutant` (
  `idPollutants` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `formula` varchar(45) DEFAULT NULL,
  `unit` varchar(45) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `language` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`idPollutants`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pollutant`
--

LOCK TABLES `pollutant` WRITE;
/*!40000 ALTER TABLE `pollutant` DISABLE KEYS */;
INSERT INTO `pollutant` VALUES (1,'Dioxido de Azufre','SO2','µg/m3','ID 38: Fluorescencia ultravioleta','ESP'),(2,'Monoxido de Carbono','CO','mg/m3','ID 48: Absorcion infrarroja','ESP'),(3,'Monoxido de Nitrogeno','NO','µg/m3','ID 8: Quimioluminiscencia','ESP'),(4,'Dioxido de Nitrogeno','NO2','µg/m3','ID 8: Quimioluminiscencia','ESP'),(5,'Particulas < 2.5 µm','PM2.5','µg/m3','ID 47: Microbalanza','ESP'),(6,'Particulas < 10 µm','PM10','µg/m3','ID 47: Microbalanza','ESP'),(7,'oxidos de Nitrogeno','NOx','µg/m3','ID 8: Quimioluminiscencia','ESP'),(8,'Ozono','O3','µg/m3','ID 6: Absorcion ultravioleta','ESP'),(9,'Tolueno','TOL','µg/m3','ID 59: Cromatografia de gases','ESP'),(10,'Benceno','BEN','µg/m3','ID 59: Cromatografia de gases','ESP'),(11,'Etilbenceno','EBE','µg/m3','ID 59: Cromatografia de gases','ESP'),(12,'Metaxileno','MXY','µg/m3','ID 59: Cromatografia de gases','ESP'),(13,'Paraxileno','PXY','µg/m3','ID 59: Cromatografia de gases','ESP'),(14,'Ortoxileno','OXY','µg/m3','ID 59: Cromatografia de gases','ESP'),(15,'Hidrocarburos totales (hexano)','TCH','mg/m3','ID 2: Ionizacion de llama','ESP'),(16,'Hidrocarburos (metano)','CH4','mg/m3','ID 2: Ionizacion de llama','ESP'),(17,'Hidrocarburos no metanicos (hexano)','NMHC','mg/m3','ID 2: Ionizacion de llama','ESP'),(18,'Radiacion ultravioleta','UV','mW/m2','ID 98: Sensores meteorologicos','ESP'),(19,'Velocidad del viento','VV','m/s','ID 98: Sensores meteorologicos','ESP'),(20,'Direccion del viento','DV','Grados o cuadrante','ID 98: Sensores meteorologicos','ESP'),(21,'Temperatura','TMP','Grado Celsius','ID 98: Sensores meteorologicos','ESP'),(22,'Humedad relativa','HR','%','ID 98: Sensores meteorologicos','ESP'),(23,'Presion','PRB','mb','ID 98: Sensores meteorologicos','ESP'),(24,'Radiacion solar','RS','kW/m2','ID 98: Sensores meteorologicos','ESP'),(25,'Precipitacion','LL','l/m2','ID 98: Sensores meteorologicos','ESP'),(26,'Lluvia acida','LLA','pH','ID 98: Sensores meteorologicos','ESP');
/*!40000 ALTER TABLE `pollutant` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-06-21 20:21:38
