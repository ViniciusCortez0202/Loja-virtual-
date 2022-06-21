-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: lojaonline
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.33-MariaDB

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
-- Table structure for table `tb_administradores`
--

DROP TABLE IF EXISTS `tb_administradores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_administradores` (
  `adm_id` int(11) NOT NULL AUTO_INCREMENT,
  `adm_nome` varchar(100) NOT NULL,
  `adm_cpf` varchar(16) NOT NULL,
  `adm_email` varchar(100) NOT NULL,
  `adm_nome_de_usuario` varchar(30) NOT NULL,
  `adm_senha` text NOT NULL,
  PRIMARY KEY (`adm_id`),
  UNIQUE KEY `adm_email_UNIQUE` (`adm_email`),
  UNIQUE KEY `adm_nome_de_usuario_UNIQUE` (`adm_nome_de_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_administradores`
--

LOCK TABLES `tb_administradores` WRITE;
/*!40000 ALTER TABLE `tb_administradores` DISABLE KEYS */;
INSERT INTO `tb_administradores` VALUES (4,'Carlos Eduardo Leonel dos Santos','13262620416','carloseduardoleonel17@gmail.com','adm','b09c600fddc573f117449b3723f23d64'),(5,'Carlos Eduardo Leonel dos Santos','88015767067','carloseduardoleo@outlook.com','administrador','202cb962ac59075b964b07152d234b70');
/*!40000 ALTER TABLE `tb_administradores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_atualizar_pedido`
--

DROP TABLE IF EXISTS `tb_atualizar_pedido`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_atualizar_pedido` (
  `atp_id` int(11) NOT NULL AUTO_INCREMENT,
  `atp_data_hora` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tb_administradores_adm_id` int(11) NOT NULL,
  `tb_pedidos_ped_id` int(11) NOT NULL,
  PRIMARY KEY (`atp_id`),
  KEY `fk_tb_atualizar_pedido_tb_administradores1_idx` (`tb_administradores_adm_id`),
  KEY `fk_tb_atualizar_pedido_tb_pedidos1_idx` (`tb_pedidos_ped_id`),
  CONSTRAINT `fk_tb_atualizar_pedido_tb_administradores1` FOREIGN KEY (`tb_administradores_adm_id`) REFERENCES `tb_administradores` (`adm_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_tb_atualizar_pedido_tb_pedidos1` FOREIGN KEY (`tb_pedidos_ped_id`) REFERENCES `tb_pedidos` (`ped_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_atualizar_pedido`
--

LOCK TABLES `tb_atualizar_pedido` WRITE;
/*!40000 ALTER TABLE `tb_atualizar_pedido` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_atualizar_pedido` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_cadastro_das_categorias`
--

DROP TABLE IF EXISTS `tb_cadastro_das_categorias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_cadastro_das_categorias` (
  `cdc_id` int(11) NOT NULL AUTO_INCREMENT,
  `cdc_data_hota` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tb_categorias_cat_id` int(11) NOT NULL,
  `tb_administradores_adm_id` int(11) NOT NULL,
  PRIMARY KEY (`cdc_id`),
  KEY `fk_tb_cadastro_das_categorias_tb_categorias1_idx` (`tb_categorias_cat_id`),
  KEY `fk_tb_cadastro_das_categorias_tb_administradores1_idx` (`tb_administradores_adm_id`),
  CONSTRAINT `fk_tb_cadastro_das_categorias_tb_administradores1` FOREIGN KEY (`tb_administradores_adm_id`) REFERENCES `tb_administradores` (`adm_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_tb_cadastro_das_categorias_tb_categorias1` FOREIGN KEY (`tb_categorias_cat_id`) REFERENCES `tb_categorias` (`cat_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_cadastro_das_categorias`
--

LOCK TABLES `tb_cadastro_das_categorias` WRITE;
/*!40000 ALTER TABLE `tb_cadastro_das_categorias` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_cadastro_das_categorias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_categorias`
--

DROP TABLE IF EXISTS `tb_categorias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_categorias` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_tipo` varchar(50) NOT NULL,
  `cat_estado` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`cat_id`),
  UNIQUE KEY `cat_tipo_UNIQUE` (`cat_tipo`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_categorias`
--

LOCK TABLES `tb_categorias` WRITE;
/*!40000 ALTER TABLE `tb_categorias` DISABLE KEYS */;
INSERT INTO `tb_categorias` VALUES (5,'shounen',1),(6,'shoujo',1),(7,'seinen',1),(8,'yaoi',1),(9,'yuri',1);
/*!40000 ALTER TABLE `tb_categorias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_clientes`
--

DROP TABLE IF EXISTS `tb_clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_clientes` (
  `cli_id` int(11) NOT NULL AUTO_INCREMENT,
  `cli_nome` varchar(100) NOT NULL,
  `cli_email` varchar(100) NOT NULL,
  `cli_nome_de_usuario` varchar(30) NOT NULL,
  `cli_senha` text NOT NULL,
  `cli_cpf` varchar(16) NOT NULL,
  PRIMARY KEY (`cli_id`),
  UNIQUE KEY `cli_cpf_UNIQUE` (`cli_cpf`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_clientes`
--

LOCK TABLES `tb_clientes` WRITE;
/*!40000 ALTER TABLE `tb_clientes` DISABLE KEYS */;
INSERT INTO `tb_clientes` VALUES (16,'Vinicius Cortez','cortez@gmail.com','cortez','202cb962ac59075b964b07152d234b70','12921601443');
/*!40000 ALTER TABLE `tb_clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_enderecos`
--

DROP TABLE IF EXISTS `tb_enderecos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_enderecos` (
  `end_id` int(11) NOT NULL AUTO_INCREMENT,
  `end_estado` varchar(45) NOT NULL,
  `end_logradouro` varchar(100) NOT NULL,
  `end_numero` varchar(10) NOT NULL,
  `end_cep` varchar(15) NOT NULL,
  `end_bairro` varchar(100) NOT NULL,
  `end_cidade` varchar(50) NOT NULL,
  PRIMARY KEY (`end_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_enderecos`
--

LOCK TABLES `tb_enderecos` WRITE;
/*!40000 ALTER TABLE `tb_enderecos` DISABLE KEYS */;
INSERT INTO `tb_enderecos` VALUES (11,'AL','Rua Antônio Leite','65','57304540','Cacimbas','Arapiraca'),(12,'AL','Rua Margarita Palmerina de Almeida','20','57307160','Baixa Grande','Arapiraca'),(13,'AL','Rua Antônio Leite','65','57304540','Cacimbas','Arapiraca');
/*!40000 ALTER TABLE `tb_enderecos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_enderecos_dos_administradores`
--

DROP TABLE IF EXISTS `tb_enderecos_dos_administradores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_enderecos_dos_administradores` (
  `eda_id` int(11) NOT NULL AUTO_INCREMENT,
  `tb_administradores_adm_id` int(11) NOT NULL,
  `tb_enderecos_end_id` int(11) NOT NULL,
  PRIMARY KEY (`eda_id`),
  KEY `fk_tb_enderecos_dos_administradores_tb_administradores1_idx` (`tb_administradores_adm_id`),
  KEY `fk_tb_enderecos_dos_administradores_tb_enderecos1_idx` (`tb_enderecos_end_id`),
  CONSTRAINT `fk_tb_enderecos_dos_administradores_tb_administradores1` FOREIGN KEY (`tb_administradores_adm_id`) REFERENCES `tb_administradores` (`adm_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_tb_enderecos_dos_administradores_tb_enderecos1` FOREIGN KEY (`tb_enderecos_end_id`) REFERENCES `tb_enderecos` (`end_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_enderecos_dos_administradores`
--

LOCK TABLES `tb_enderecos_dos_administradores` WRITE;
/*!40000 ALTER TABLE `tb_enderecos_dos_administradores` DISABLE KEYS */;
INSERT INTO `tb_enderecos_dos_administradores` VALUES (2,4,11),(3,5,13);
/*!40000 ALTER TABLE `tb_enderecos_dos_administradores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_enderecos_dos_clientes`
--

DROP TABLE IF EXISTS `tb_enderecos_dos_clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_enderecos_dos_clientes` (
  `edc_id` int(11) NOT NULL AUTO_INCREMENT,
  `tb_enderecos_end_id` int(11) NOT NULL,
  `tb_clientes_cli_id` int(11) NOT NULL,
  PRIMARY KEY (`edc_id`),
  KEY `fk_tb_enderecos_dos_clientes_tb_enderecos1_idx` (`tb_enderecos_end_id`),
  KEY `fk_tb_enderecos_dos_clientes_tb_clientes1_idx` (`tb_clientes_cli_id`),
  CONSTRAINT `fk_tb_enderecos_dos_clientes_tb_clientes1` FOREIGN KEY (`tb_clientes_cli_id`) REFERENCES `tb_clientes` (`cli_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_tb_enderecos_dos_clientes_tb_enderecos1` FOREIGN KEY (`tb_enderecos_end_id`) REFERENCES `tb_enderecos` (`end_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_enderecos_dos_clientes`
--

LOCK TABLES `tb_enderecos_dos_clientes` WRITE;
/*!40000 ALTER TABLE `tb_enderecos_dos_clientes` DISABLE KEYS */;
INSERT INTO `tb_enderecos_dos_clientes` VALUES (8,12,16);
/*!40000 ALTER TABLE `tb_enderecos_dos_clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_gerencia_dos_produtos`
--

DROP TABLE IF EXISTS `tb_gerencia_dos_produtos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_gerencia_dos_produtos` (
  `gdp_id` int(11) NOT NULL AUTO_INCREMENT,
  `gdc_data_hora_cadastro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `gdc_data_hora_modificacao` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tb_administradores_adm_id` int(11) NOT NULL,
  `tb_produtos_pro_id` int(11) NOT NULL,
  PRIMARY KEY (`gdp_id`),
  KEY `fk_tb_gerencia_dos_produtos_tb_administradores1_idx` (`tb_administradores_adm_id`),
  KEY `fk_tb_gerencia_dos_produtos_tb_produtos1_idx` (`tb_produtos_pro_id`),
  CONSTRAINT `fk_tb_gerencia_dos_produtos_tb_administradores1` FOREIGN KEY (`tb_administradores_adm_id`) REFERENCES `tb_administradores` (`adm_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_tb_gerencia_dos_produtos_tb_produtos1` FOREIGN KEY (`tb_produtos_pro_id`) REFERENCES `tb_produtos` (`pro_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_gerencia_dos_produtos`
--

LOCK TABLES `tb_gerencia_dos_produtos` WRITE;
/*!40000 ALTER TABLE `tb_gerencia_dos_produtos` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_gerencia_dos_produtos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_pedidos`
--

DROP TABLE IF EXISTS `tb_pedidos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_pedidos` (
  `ped_id` int(11) NOT NULL AUTO_INCREMENT,
  `ped_data_hora` datetime NOT NULL,
  `ped_valor_total` float NOT NULL,
  `ped_status` enum('AP','EP','EV','SE','E','C','CR') NOT NULL,
  `tb_clientes_cli_id` int(11) NOT NULL,
  PRIMARY KEY (`ped_id`),
  KEY `fk_tb_pedidos_tb_clientes1_idx` (`tb_clientes_cli_id`),
  CONSTRAINT `fk_tb_pedidos_tb_clientes1` FOREIGN KEY (`tb_clientes_cli_id`) REFERENCES `tb_clientes` (`cli_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=765 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_pedidos`
--

LOCK TABLES `tb_pedidos` WRITE;
/*!40000 ALTER TABLE `tb_pedidos` DISABLE KEYS */;
INSERT INTO `tb_pedidos` VALUES (762,'2019-05-03 15:11:03',69,'EP',16),(763,'2019-05-03 16:05:18',20,'EP',16),(764,'2019-05-03 16:06:03',69,'EP',16);
/*!40000 ALTER TABLE `tb_pedidos` ENABLE KEYS */;
UNLOCK TABLES;
ALTER DATABASE `lojaonline` CHARACTER SET utf8 COLLATE utf8_general_ci ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `lojaonline`.`tb_pedidos_AFTER_UPDATE` AFTER UPDATE ON `tb_pedidos` FOR EACH ROW
BEGIN

	IF NEW.ped_status = 'EP' THEN
		CALL retirada_estoque(NEW.ped_id);
	END IF;

END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
ALTER DATABASE `lojaonline` CHARACTER SET utf8 COLLATE utf8_unicode_ci ;

--
-- Table structure for table `tb_produtos`
--

DROP TABLE IF EXISTS `tb_produtos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_produtos` (
  `pro_id` int(11) NOT NULL AUTO_INCREMENT,
  `pro_nome` varchar(100) NOT NULL,
  `pro_descricao` varchar(200) NOT NULL,
  `pro_imagem` varchar(100) NOT NULL,
  `pro_preco` float NOT NULL,
  `pro_estoque` int(11) NOT NULL,
  `pro_estado` tinyint(4) NOT NULL DEFAULT '1',
  `tb_categorias_cat_id` int(11) NOT NULL,
  PRIMARY KEY (`pro_id`),
  KEY `fk_tb_produtos_tb_categorias_idx` (`tb_categorias_cat_id`),
  CONSTRAINT `fk_tb_produtos_tb_categorias` FOREIGN KEY (`tb_categorias_cat_id`) REFERENCES `tb_categorias` (`cat_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_produtos`
--

LOCK TABLES `tb_produtos` WRITE;
/*!40000 ALTER TABLE `tb_produtos` DISABLE KEYS */;
INSERT INTO `tb_produtos` VALUES (14,'Boku no hero','novo dragon ball','imagens / 15569069265ccc83ae3422f.jpg',69,22,1,5),(15,'dragon ball','melhor anime','imagens / 15569101585ccc904e01297.jpg',20,9,1,5);
/*!40000 ALTER TABLE `tb_produtos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_produtos_dos_pedidos`
--

DROP TABLE IF EXISTS `tb_produtos_dos_pedidos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_produtos_dos_pedidos` (
  `pdp_id` int(11) NOT NULL AUTO_INCREMENT,
  `pdp_quantidade` int(11) NOT NULL,
  `tb_produtos_pro_id` int(11) NOT NULL,
  `tb_pedidos_ped_id` int(11) NOT NULL,
  PRIMARY KEY (`pdp_id`),
  KEY `fk_tb_produtos_dos_pedidos_tb_produtos1_idx` (`tb_produtos_pro_id`),
  KEY `fk_tb_produtos_dos_pedidos_tb_pedidos1_idx` (`tb_pedidos_ped_id`),
  CONSTRAINT `fk_tb_produtos_dos_pedidos_tb_pedidos1` FOREIGN KEY (`tb_pedidos_ped_id`) REFERENCES `tb_pedidos` (`ped_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_tb_produtos_dos_pedidos_tb_produtos1` FOREIGN KEY (`tb_produtos_pro_id`) REFERENCES `tb_produtos` (`pro_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_produtos_dos_pedidos`
--

LOCK TABLES `tb_produtos_dos_pedidos` WRITE;
/*!40000 ALTER TABLE `tb_produtos_dos_pedidos` DISABLE KEYS */;
INSERT INTO `tb_produtos_dos_pedidos` VALUES (55,1,15,763),(57,1,14,764);
/*!40000 ALTER TABLE `tb_produtos_dos_pedidos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'lojaonline'
--

--
-- Dumping routines for database 'lojaonline'
--
/*!50003 DROP PROCEDURE IF EXISTS `retirada_estoque` */;
ALTER DATABASE `lojaonline` CHARACTER SET utf8 COLLATE utf8_general_ci ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `retirada_estoque`(IN id_pedido INT)
BEGIN

	DECLARE terminou INT DEFAULT FALSE;
	DECLARE quantidade INT;
	DECLARE id INT;

	DECLARE quantidade_pedidos CURSOR FOR 
		SELECT pdp_quantidade, tb_produtos_pro_id FROM tb_produtos_dos_pedidos WHERE tb_pedidos_ped_id = id_pedido;
    
	DECLARE CONTINUE HANDLER FOR NOT FOUND SET terminou = true;
    
    OPEN quantidade_pedidos;
    
    mudando_estoque: LOOP
		
        FETCH quantidade_pedidos INTO quantidade, id;
        
        IF terminou THEN
			LEAVE mudando_estoque;
		END IF;
        
        update tb_produtos 
		set 
			pro_estoque = pro_estoque - quantidade
		where
			pro_id = id;
        
    END LOOP;
    
    CLOSE quantidade_pedidos;


END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
ALTER DATABASE `lojaonline` CHARACTER SET utf8 COLLATE utf8_unicode_ci ;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-05-03 19:41:18
