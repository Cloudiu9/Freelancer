-- MySQL dump 10.13  Distrib 8.0.33, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: freelancer
-- ------------------------------------------------------
-- Server version	8.0.33

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
-- Table structure for table `foreignk`
--

DROP TABLE IF EXISTS `foreignk`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `foreignk` (
  `serv_id` int NOT NULL,
  `port_id` int NOT NULL,
  KEY `fk_serv_id` (`serv_id`),
  KEY `fk_port_id` (`port_id`),
  CONSTRAINT `fk_port_id` FOREIGN KEY (`port_id`) REFERENCES `portfolio` (`port_id`),
  CONSTRAINT `fk_serv_id` FOREIGN KEY (`serv_id`) REFERENCES `services` (`serv_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `foreignk`
--

LOCK TABLES `foreignk` WRITE;
/*!40000 ALTER TABLE `foreignk` DISABLE KEYS */;
INSERT INTO `foreignk` VALUES (2,1),(3,1),(1,2),(1,3),(2,3),(3,3),(1,1),(2,2),(1,4),(2,4),(2,5),(3,6);
/*!40000 ALTER TABLE `foreignk` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `portfolio`
--

DROP TABLE IF EXISTS `portfolio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `portfolio` (
  `port_id` int NOT NULL AUTO_INCREMENT,
  `port_title` varchar(100) NOT NULL,
  `port_work` varchar(100) NOT NULL,
  `port_desc` varchar(1000) NOT NULL,
  PRIMARY KEY (`port_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `portfolio`
--

LOCK TABLES `portfolio` WRITE;
/*!40000 ALTER TABLE `portfolio` DISABLE KEYS */;
INSERT INTO `portfolio` VALUES (1,'UAB.RO','Full Website','Lorem ipsum dolor sit amet consectetur, adipisicing elit. Incidunt, dolorem fugit. Illum, tenetur eveniet animi corrupti distinctio doloremque est ipsa minima voluptas ipsum harum quidem necessitatibus, quaerat illo sit culpa!'),(2,'ELIT','Branding & catalog','Lorem ipsum dolor sit amet consectetur, adipisicing elit. Incidunt, dolorem fugit. Illum, tenetur eveniet animi corrupti distinctio doloremque est ipsa minima voluptas ipsum harum quidem necessitatibus, quaerat illo sit culpa!'),(3,'TECHNOMID.RO','Backend CMS','Lorem ipsum dolor sit amet consectetur, adipisicing elit. Incidunt, dolorem fugit. Illum, tenetur eveniet animi corrupti distinctio doloremque est ipsa minima voluptas ipsum harum quidem necessitatibus, quaerat illo sit culpa!'),(4,'CLIENT','Branding innovator','Lorem ipsum dolor sit amet consectetur, adipisicing elit. Incidunt, dolorem fugit. Illum, tenetur eveniet animi corrupti distinctio doloremque est ipsa minima voluptas ipsum harum quidem necessitatibus, quaerat illo sit culpa!'),(5,'CLIENT','Front end','Lorem ipsum dolor sit amet consectetur, adipisicing elit. Incidunt, dolorem fugit. Illum, tenetur eveniet animi corrupti distinctio doloremque est ipsa minima voluptas ipsum harum quidem necessitatibus, quaerat illo sit culpa!'),(6,'CLIENT','Database analyst','Lorem ipsum dolor sit amet consectetur, adipisicing elit. Incidunt, dolorem fugit. Illum, tenetur eveniet animi corrupti distinctio doloremque est ipsa minima voluptas ipsum harum quidem necessitatibus, quaerat illo sit culpa!');
/*!40000 ALTER TABLE `portfolio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `services` (
  `serv_id` int NOT NULL AUTO_INCREMENT,
  `serv_title` varchar(100) NOT NULL,
  `serv_desc` varchar(300) NOT NULL,
  `serv_img` varchar(100) NOT NULL,
  PRIMARY KEY (`serv_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` VALUES (1,'Graphic design','Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat quia exercitationem enim optio iure ut voluptate natus tempore consectetur rem iste, amet accusamus quo dolore, necessitatibus blanditiis qui, quos dolores.','design.png'),(2,'Front end','Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat quia exercitationem enim optio iure ut voluptate natus tempore consectetur rem iste, amet accusamus quo dolore, necessitatibus blanditiis qui, quos dolores.','front.png'),(3,'Back end','Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat quia exercitationem enim optio iure ut voluptate natus tempore consectetur rem iste, amet accusamus quo dolore, necessitatibus blanditiis qui, quos dolores.','backend.png');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-05-16 22:22:57
