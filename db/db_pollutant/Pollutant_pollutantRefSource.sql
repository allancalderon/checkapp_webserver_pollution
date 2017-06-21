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
-- Table structure for table `pollutantRefSource`
--

DROP TABLE IF EXISTS `pollutantRefSource`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pollutantRefSource` (
  `idPollutantsFK` int(11) NOT NULL,
  `idPollutantsSource` varchar(45) NOT NULL,
  `idStationRef` varchar(45) NOT NULL,
  PRIMARY KEY (`idPollutantsFK`,`idPollutantsSource`,`idStationRef`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pollutantRefSource`
--

LOCK TABLES `pollutantRefSource` WRITE;
/*!40000 ALTER TABLE `pollutantRefSource` DISABLE KEYS */;
INSERT INTO `pollutantRefSource` VALUES (1,'1','ESPMAD'),(2,'6','ESPMAD'),(3,'7','ESPMAD'),(4,'8','ESPMAD'),(5,'9','ESPMAD'),(6,'10','ESPMAD'),(7,'12','ESPMAD'),(8,'14','ESPMAD'),(9,'20','ESPMAD'),(10,'30','ESPMAD'),(11,'35','ESPMAD'),(12,'37','ESPMAD'),(13,'38','ESPMAD'),(14,'39','ESPMAD'),(15,'42','ESPMAD'),(16,'43','ESPMAD'),(17,'44','ESPMAD'),(18,'80','ESPMAD'),(19,'81','ESPMAD'),(20,'82','ESPMAD'),(21,'83','ESPMAD'),(22,'86','ESPMAD'),(23,'87','ESPMAD'),(24,'88','ESPMAD'),(25,'89','ESPMAD'),(26,'92','ESPMAD');
/*!40000 ALTER TABLE `pollutantRefSource` ENABLE KEYS */;
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
