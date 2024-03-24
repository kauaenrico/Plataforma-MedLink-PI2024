-- MySQL dump 10.13  Distrib 8.1.0, for Win64 (x86_64)
--
-- Host: db01.ddnsfree.com    Database: plataforma
-- ------------------------------------------------------
-- Server version	8.0.36-0ubuntu0.22.04.1

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
-- Table structure for table `clinica`
--

DROP TABLE IF EXISTS `clinica`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `clinica` (
  `clinica_cnpj` varchar(14) NOT NULL,
  `clinica_nome` varchar(255) DEFAULT NULL,
  `clinica_end` varchar(1024) DEFAULT NULL,
  `clinica_telefone` varchar(13) DEFAULT NULL,
  PRIMARY KEY (`clinica_cnpj`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clinica`
--

LOCK TABLES `clinica` WRITE;
/*!40000 ALTER TABLE `clinica` DISABLE KEYS */;
INSERT INTO `clinica` VALUES ('35640866000141','Pequenos Passos Clinica de Psicologia LTDA','R. José de Alencar, 304 - Vila Pires, Santa Bárbara d\'Oeste - SP, 13450-224','19999313104');
/*!40000 ALTER TABLE `clinica` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `departamento`
--

DROP TABLE IF EXISTS `departamento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `departamento` (
  `depto_id` int NOT NULL AUTO_INCREMENT,
  `depto_nome` varchar(255) DEFAULT NULL,
  `clinica_cnpj` varchar(14) DEFAULT NULL,
  PRIMARY KEY (`depto_id`),
  KEY `clinica_cnpj` (`clinica_cnpj`),
  CONSTRAINT `departamento_ibfk_1` FOREIGN KEY (`clinica_cnpj`) REFERENCES `clinica` (`clinica_cnpj`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `departamento`
--

LOCK TABLES `departamento` WRITE;
/*!40000 ALTER TABLE `departamento` DISABLE KEYS */;
INSERT INTO `departamento` VALUES (26,'Psicologia','35640866000141'),(27,'Fonoaudiologia','35640866000141'),(28,'Terapia Ocupacional','35640866000141'),(29,'Pedagogia','35640866000141'),(30,'Nutrição','35640866000141');
/*!40000 ALTER TABLE `departamento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `paciente`
--

DROP TABLE IF EXISTS `paciente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `paciente` (
  `pac_cpf` varchar(11) NOT NULL,
  `pac_nome` varchar(255) DEFAULT NULL,
  `pac_nascimento` date DEFAULT NULL,
  `pac_initerap` date DEFAULT NULL,
  `pac_responsavel` varchar(255) DEFAULT NULL,
  `pac_telefone` varchar(13) DEFAULT NULL,
  `pac_autresp` varchar(255) DEFAULT NULL,
  `pac_condicao` int DEFAULT NULL,
  `pac_terapia` int DEFAULT NULL,
  `pac_autimagem` tinyint(1) DEFAULT NULL,
  `pac_alergias` text,
  `pac_preferencias` text,
  `pac_observacoes` text,
  `pac_status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`pac_cpf`),
  KEY `pac_condicao` (`pac_condicao`),
  KEY `pac_terapia` (`pac_terapia`),
  CONSTRAINT `paciente_ibfk_1` FOREIGN KEY (`pac_condicao`) REFERENCES `tipos_condicao` (`condicao_id`),
  CONSTRAINT `paciente_ibfk_2` FOREIGN KEY (`pac_terapia`) REFERENCES `tipos_terapia` (`terapia_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paciente`
--

LOCK TABLES `paciente` WRITE;
/*!40000 ALTER TABLE `paciente` DISABLE KEYS */;
INSERT INTO `paciente` VALUES ('11111111111','Lucas Oliveira','2010-05-15','2021-01-01','Ana Oliveira','999999999','Ana Oliveira',1,1,1,'Nenhuma','Brinquedos coloridos','Observações sobre o paciente Lucas...',1),('22222222222','Mariana Santos','2008-10-20','2020-11-15','José Santos','888888888','José Santos',2,3,0,'Alergia a amendoim','Livros de histórias','Observações sobre a paciente Mariana...',1),('33333333333','Carlos Silva','2015-03-10','2022-02-01','João Silva','777777777','João Silva',3,2,1,'Nenhuma','Desenhos animados','Observações sobre o paciente Carlos...',1),('44444444444','Ana Souza','2012-08-25','2021-09-10','Maria Souza','666666666','Maria Souza',1,4,0,'Alergia a lactose','Jogos educativos','Observações sobre a paciente Ana...',1),('55555555555','Paula Costa','2018-12-01','2023-03-05','Pedro Costa','555555555','Pedro Costa',5,5,1,'Nenhuma','Pelúcias','Observações sobre a paciente Paula...',1);
/*!40000 ALTER TABLE `paciente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profissionais`
--

DROP TABLE IF EXISTS `profissionais`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `profissionais` (
  `profiss_cpf` varchar(11) NOT NULL,
  `profiss_nome` varchar(255) DEFAULT NULL,
  `depto_id` int DEFAULT NULL,
  `profiss_telefone` varchar(13) DEFAULT NULL,
  `profiss_email` varchar(255) DEFAULT NULL,
  `profiss_status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`profiss_cpf`),
  KEY `depto_id` (`depto_id`),
  CONSTRAINT `profissionais_ibfk_1` FOREIGN KEY (`depto_id`) REFERENCES `departamento` (`depto_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profissionais`
--

LOCK TABLES `profissionais` WRITE;
/*!40000 ALTER TABLE `profissionais` DISABLE KEYS */;
INSERT INTO `profissionais` VALUES ('11111111111','João Silva',26,'999999999','joao.silva@example.com',1),('22222222222','Maria Souza',27,'888888888','maria.souza@example.com',1),('33333333333','Pedro Oliveira',28,'777777777','pedro.oliveira@example.com',1),('44444444444','Ana Santos',29,'666666666','ana.santos@example.com',0),('55555555555','Luana Costa',30,'555555555','luana.costa@example.com',1);
/*!40000 ALTER TABLE `profissionais` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipos_condicao`
--

DROP TABLE IF EXISTS `tipos_condicao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tipos_condicao` (
  `condicao_id` int NOT NULL AUTO_INCREMENT,
  `condicao_nome` varchar(255) DEFAULT NULL,
  `condicao_descricao` text,
  PRIMARY KEY (`condicao_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipos_condicao`
--

LOCK TABLES `tipos_condicao` WRITE;
/*!40000 ALTER TABLE `tipos_condicao` DISABLE KEYS */;
INSERT INTO `tipos_condicao` VALUES (1,'Autismo','Transtorno do desenvolvimento que afeta a comunicação e interação social.'),(2,'Síndrome de Down','Condição genética que causa características físicas distintas e deficiência intelectual.'),(3,'Transtorno de Déficit de Atenção e Hiperatividade (TDAH)','Dificuldade em manter a atenção, hiperatividade e impulsividade.'),(4,'Síndrome de Asperger','Transtorno do espectro autista caracterizado por dificuldades sociais e padrões de comportamento repetitivos.'),(5,'Deficiência Intelectual','Limitações significativas no funcionamento intelectual e no comportamento adaptativo.');
/*!40000 ALTER TABLE `tipos_condicao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipos_terapia`
--

DROP TABLE IF EXISTS `tipos_terapia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tipos_terapia` (
  `terapia_id` int NOT NULL AUTO_INCREMENT,
  `terapia_nome` varchar(255) DEFAULT NULL,
  `terapia_descricao` text,
  PRIMARY KEY (`terapia_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipos_terapia`
--

LOCK TABLES `tipos_terapia` WRITE;
/*!40000 ALTER TABLE `tipos_terapia` DISABLE KEYS */;
INSERT INTO `tipos_terapia` VALUES (1,'Terapia ABA','Abordagem baseada em princípios científicos para entender e modificar comportamentos.'),(2,'Terapia Ocupacional','Ajuda pessoas a participarem das atividades diárias através de técnicas terapêuticas.'),(3,'Fonoaudiologia','Trata distúrbios de comunicação, linguagem e audição.'),(4,'Psicomotricidade','Abordagem terapêutica que se concentra no desenvolvimento motor e nas interações sociais.'),(5,'Musicoterapia','Utiliza a música para melhorar a saúde física, emocional, cognitiva e social.');
/*!40000 ALTER TABLE `tipos_terapia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'plataforma'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-03-23 23:51:04
