-- MySQL dump 10.13  Distrib 8.0.39, for Linux (x86_64)
--
-- Host: localhost    Database: sistema_contratos
-- ------------------------------------------------------
-- Server version	8.0.39-0ubuntu0.22.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Current Database: `sistema_contratos`
--

/*!40000 DROP DATABASE IF EXISTS `sistema_contratos`*/;

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `sistema_contratos` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

USE `sistema_contratos`;

--
-- Table structure for table `tb_banco`
--

DROP TABLE IF EXISTS `tb_banco`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_banco` (
  `codigo` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_banco`
--

LOCK TABLES `tb_banco` WRITE;
/*!40000 ALTER TABLE `tb_banco` DISABLE KEYS */;
INSERT INTO `tb_banco` VALUES (1,'Banco do Brasil'),(2,'Itaú'),(3,'Bradesco'),(4,'Caixa Econômica Federal'),(5,'Santander'),(6,'Banco Safra'),(7,'Banco Inter'),(8,'BTG Pactual'),(9,'Banco Original'),(10,'Nubank');
/*!40000 ALTER TABLE `tb_banco` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_contrato`
--

DROP TABLE IF EXISTS `tb_contrato`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_contrato` (
  `codigo` int NOT NULL AUTO_INCREMENT,
  `prazo` int NOT NULL,
  `valor` decimal(15,2) NOT NULL,
  `data_inclusao` datetime NOT NULL,
  `convenio_servico` int DEFAULT NULL,
  PRIMARY KEY (`codigo`),
  KEY `convenio_servico` (`convenio_servico`),
  CONSTRAINT `tb_contrato_ibfk_1` FOREIGN KEY (`convenio_servico`) REFERENCES `tb_convenio_servico` (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_contrato`
--

LOCK TABLES `tb_contrato` WRITE;
/*!40000 ALTER TABLE `tb_contrato` DISABLE KEYS */;
INSERT INTO `tb_contrato` VALUES (21,12,50000.00,'2021-03-15 10:00:00',1),(22,24,100000.00,'2021-07-20 11:30:00',2),(23,18,75000.00,'2022-01-10 09:45:00',3),(24,36,120000.00,'2022-06-05 15:20:00',4),(25,6,45000.00,'2022-09-12 08:30:00',5),(26,24,60000.00,'2023-02-18 14:40:00',6),(27,12,90000.00,'2023-05-25 09:15:00',7),(28,30,75000.00,'2023-07-08 11:55:00',8),(29,18,110000.00,'2023-11-30 17:20:00',9),(30,12,50000.00,'2024-01-22 10:45:00',10),(31,12,55000.00,'2021-03-15 10:00:00',1),(32,18,32000.00,'2021-04-20 11:30:00',2),(33,24,105000.00,'2021-05-10 09:45:00',3),(34,6,72000.00,'2022-06-25 14:20:00',4),(35,36,130000.00,'2022-07-15 08:10:00',5),(36,12,68000.00,'2023-01-10 12:30:00',1),(37,18,90000.00,'2023-02-25 09:50:00',2),(38,24,45000.00,'2023-03-30 16:00:00',3),(39,36,85000.00,'2023-04-12 10:15:00',4),(40,6,40000.00,'2024-09-01 11:25:00',5);
/*!40000 ALTER TABLE `tb_contrato` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_convenio`
--

DROP TABLE IF EXISTS `tb_convenio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_convenio` (
  `codigo` int NOT NULL AUTO_INCREMENT,
  `convenio` varchar(100) NOT NULL,
  `verba` decimal(15,2) NOT NULL,
  `banco` int DEFAULT NULL,
  PRIMARY KEY (`codigo`),
  KEY `banco` (`banco`),
  CONSTRAINT `tb_convenio_ibfk_1` FOREIGN KEY (`banco`) REFERENCES `tb_banco` (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_convenio`
--

LOCK TABLES `tb_convenio` WRITE;
/*!40000 ALTER TABLE `tb_convenio` DISABLE KEYS */;
INSERT INTO `tb_convenio` VALUES (1,'Convênio A',100000.00,1),(2,'Convênio B',150000.00,2),(3,'Convênio C',200000.00,3),(4,'Convênio D',250000.00,4),(5,'Convênio E',300000.00,5),(6,'Convênio F',120000.00,6),(7,'Convênio G',180000.00,7),(8,'Convênio H',160000.00,8),(9,'Convênio I',140000.00,9),(10,'Convênio J',130000.00,10);
/*!40000 ALTER TABLE `tb_convenio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_convenio_servico`
--

DROP TABLE IF EXISTS `tb_convenio_servico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_convenio_servico` (
  `codigo` int NOT NULL AUTO_INCREMENT,
  `convenio` int DEFAULT NULL,
  `servico` varchar(100) NOT NULL,
  PRIMARY KEY (`codigo`),
  KEY `convenio` (`convenio`),
  CONSTRAINT `tb_convenio_servico_ibfk_1` FOREIGN KEY (`convenio`) REFERENCES `tb_convenio` (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_convenio_servico`
--

LOCK TABLES `tb_convenio_servico` WRITE;
/*!40000 ALTER TABLE `tb_convenio_servico` DISABLE KEYS */;
INSERT INTO `tb_convenio_servico` VALUES (1,1,'Serviço de Consultoria'),(2,2,'Serviço de Transporte'),(3,3,'Serviço de Alimentação'),(4,4,'Serviço de Limpeza'),(5,5,'Serviço de Segurança'),(6,6,'Serviço de Manutenção'),(7,7,'Serviço de TI'),(8,8,'Serviço de Marketing'),(9,9,'Serviço de Auditoria'),(10,10,'Serviço de Contabilidade');
/*!40000 ALTER TABLE `tb_convenio_servico` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'sistema_contratos'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-10-03  9:36:31
