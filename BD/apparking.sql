CREATE DATABASE  IF NOT EXISTS `apparking` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `apparking`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: apparking
-- ------------------------------------------------------
-- Server version	5.7.17-log

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
-- Dumping data for table `prk_carros`
--

LOCK TABLES `prk_carros` WRITE;
/*!40000 ALTER TABLE `prk_carros` DISABLE KEYS */;
/*!40000 ALTER TABLE `prk_carros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `prk_cidades`
--

LOCK TABLES `prk_cidades` WRITE;
/*!40000 ALTER TABLE `prk_cidades` DISABLE KEYS */;
INSERT INTO `prk_cidades` VALUES (1,'Guaratinguetá');
/*!40000 ALTER TABLE `prk_cidades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `prk_clientes`
--

LOCK TABLES `prk_clientes` WRITE;
/*!40000 ALTER TABLE `prk_clientes` DISABLE KEYS */;
INSERT INTO `prk_clientes` VALUES (1,'rafael.qdc88@gmail.com','123','Rafael','Castro','391.128.188-95','44.261.751.3','1988-08-14','2017-08-22 11:40:38');
/*!40000 ALTER TABLE `prk_clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `prk_estabelecimentos`
--

LOCK TABLES `prk_estabelecimentos` WRITE;
/*!40000 ALTER TABLE `prk_estabelecimentos` DISABLE KEYS */;
INSERT INTO `prk_estabelecimentos` VALUES (1,'Buriti','Buriti-Shopping','159.159.95',NULL,NULL,NULL,220,NULL),(2,'Eco Valle Shopping','Eco.Vale','147.852.65',NULL,NULL,NULL,180,NULL);
/*!40000 ALTER TABLE `prk_estabelecimentos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `prk_estados`
--

LOCK TABLES `prk_estados` WRITE;
/*!40000 ALTER TABLE `prk_estados` DISABLE KEYS */;
INSERT INTO `prk_estados` VALUES (1,'São Paulo');
/*!40000 ALTER TABLE `prk_estados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `prk_localizacao`
--

LOCK TABLES `prk_localizacao` WRITE;
/*!40000 ALTER TABLE `prk_localizacao` DISABLE KEYS */;
INSERT INTO `prk_localizacao` VALUES (1,'Rua ','12700-000','Centro',1,1,1,NULL),(2,'Rua ','12705-000','Centro',1,1,NULL,1);
/*!40000 ALTER TABLE `prk_localizacao` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-08-22 17:19:58
