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
-- Table structure for table `prk_carros`
--

DROP TABLE IF EXISTS `prk_carros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prk_carros` (
  `car_id` int(11) NOT NULL AUTO_INCREMENT,
  `car_nome` text,
  `car_modelo` text,
  `car_cor` tinytext,
  `car_ano_fabricacao` date DEFAULT NULL,
  `car_ano_modelo` date DEFAULT NULL,
  `car_renavan` tinytext,
  `car_data_entrada` datetime DEFAULT NULL,
  `car_cli_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`car_id`),
  KEY `car_cli_id` (`car_cli_id`),
  CONSTRAINT `car_cli_id` FOREIGN KEY (`car_cli_id`) REFERENCES `prk_clientes` (`cli_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prk_carros`
--

LOCK TABLES `prk_carros` WRITE;
/*!40000 ALTER TABLE `prk_carros` DISABLE KEYS */;
/*!40000 ALTER TABLE `prk_carros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prk_cidades`
--

DROP TABLE IF EXISTS `prk_cidades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prk_cidades` (
  `cid_id` int(11) NOT NULL AUTO_INCREMENT,
  `cid_descricao` tinytext,
  PRIMARY KEY (`cid_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prk_cidades`
--

LOCK TABLES `prk_cidades` WRITE;
/*!40000 ALTER TABLE `prk_cidades` DISABLE KEYS */;
INSERT INTO `prk_cidades` VALUES (1,'Guaratinguetá');
/*!40000 ALTER TABLE `prk_cidades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prk_clientes`
--

DROP TABLE IF EXISTS `prk_clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prk_clientes` (
  `cli_id` int(11) NOT NULL AUTO_INCREMENT,
  `cli_email` text,
  `cli_senha` tinytext,
  `cli_primeiro_nome` text,
  `cli_sobrenome` text,
  `cli_cpf` tinytext,
  `cli_rg` tinytext,
  `cli_data_nascimento` date DEFAULT NULL,
  `cli_data_entrada` datetime DEFAULT NULL,
  PRIMARY KEY (`cli_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prk_clientes`
--

LOCK TABLES `prk_clientes` WRITE;
/*!40000 ALTER TABLE `prk_clientes` DISABLE KEYS */;
INSERT INTO `prk_clientes` VALUES (1,'rafael.qdc88@gmail.com','123','Rafael','Castro','391.128.188-95','44.261.751.3','1988-08-14','2017-08-22 11:40:38');
/*!40000 ALTER TABLE `prk_clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prk_estabelecimentos`
--

DROP TABLE IF EXISTS `prk_estabelecimentos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prk_estabelecimentos` (
  `est_id` int(11) NOT NULL AUTO_INCREMENT,
  `est_nome` text,
  `est_razao_social` text,
  `est_cnpj` tinytext,
  `est_responsavel` text,
  `est_ddd` tinytext,
  `est_telefone` tinytext,
  `est_quantidade_vagas` int(4) DEFAULT NULL,
  `est_data_entrada` datetime DEFAULT NULL,
  PRIMARY KEY (`est_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prk_estabelecimentos`
--

LOCK TABLES `prk_estabelecimentos` WRITE;
/*!40000 ALTER TABLE `prk_estabelecimentos` DISABLE KEYS */;
INSERT INTO `prk_estabelecimentos` VALUES (1,'Buriti','Buriti-Shopping','159.159.95',NULL,NULL,NULL,220,NULL),(2,'Eco Valle Shopping','Eco.Vale','147.852.65',NULL,NULL,NULL,180,NULL);
/*!40000 ALTER TABLE `prk_estabelecimentos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prk_estados`
--

DROP TABLE IF EXISTS `prk_estados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prk_estados` (
  `etd_id` int(11) NOT NULL AUTO_INCREMENT,
  `etd_descricao` tinytext,
  PRIMARY KEY (`etd_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prk_estados`
--

LOCK TABLES `prk_estados` WRITE;
/*!40000 ALTER TABLE `prk_estados` DISABLE KEYS */;
INSERT INTO `prk_estados` VALUES (1,'São Paulo');
/*!40000 ALTER TABLE `prk_estados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prk_localizacao`
--

DROP TABLE IF EXISTS `prk_localizacao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prk_localizacao` (
  `loc_id` int(11) NOT NULL AUTO_INCREMENT,
  `loc_endereco` text,
  `loc_cep` text,
  `loc_bairro` text,
  `loc_etd_id` int(11) DEFAULT NULL,
  `loc_cid_id` int(11) DEFAULT NULL,
  `loc_usuario_id` int(11) DEFAULT NULL,
  `loc_estabelecimento_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`loc_id`),
  KEY `loc_etd_id` (`loc_etd_id`),
  KEY `loc_cid_id` (`loc_cid_id`),
  KEY `loc_estabelecimento_id` (`loc_estabelecimento_id`),
  KEY `loc_usuario_id` (`loc_usuario_id`),
  CONSTRAINT `loc_cid_id` FOREIGN KEY (`loc_cid_id`) REFERENCES `prk_cidades` (`cid_id`),
  CONSTRAINT `loc_estabelecimento_id` FOREIGN KEY (`loc_estabelecimento_id`) REFERENCES `prk_estabelecimentos` (`est_id`),
  CONSTRAINT `loc_etd_id` FOREIGN KEY (`loc_etd_id`) REFERENCES `prk_estados` (`etd_id`),
  CONSTRAINT `loc_usuario_id` FOREIGN KEY (`loc_usuario_id`) REFERENCES `prk_clientes` (`cli_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prk_localizacao`
--

LOCK TABLES `prk_localizacao` WRITE;
/*!40000 ALTER TABLE `prk_localizacao` DISABLE KEYS */;
INSERT INTO `prk_localizacao` VALUES (1,'Rua ','12700-000','Centro',1,1,1,NULL),(2,'Rua ','12705-000','Centro',1,1,NULL,1);
/*!40000 ALTER TABLE `prk_localizacao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'apparking'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-08-22 17:28:28
