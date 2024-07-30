-- MySQL dump 10.13  Distrib 8.0.36, for Win64 (x86_64)
--
-- Host: localhost    Database: conexao-news
-- ------------------------------------------------------
-- Server version	8.0.37

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
-- Table structure for table `noticias`
--

DROP TABLE IF EXISTS `noticias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `noticias` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `lead` varchar(150) NOT NULL,
  `author` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `category` tinyint NOT NULL,
  `description` text NOT NULL,
  `report` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `noticias`
--

LOCK TABLES `noticias` WRITE;
/*!40000 ALTER TABLE `noticias` DISABLE KEYS */;
INSERT INTO `noticias` VALUES (7,'Novo Projeto de Lei Promove Mudanças no Sistema Educacional Brasileiro','O Congresso Nacional aprovou um projeto de lei que visa reformar o sistema educacional, trazendo inovações tecnológicas e maior inclusão social.','Maria Silva Pinheiros','2024-07-30',1,'Esta reportagem aborda a aprovação de um projeto de lei pelo Congresso Nacional que visa reformar o sistema educacional brasileiro. O projeto inclui a introdução de inovações tecnológicas nas escolas e medidas para aumentar a inclusão social, destacando a importância dessas mudanças para o futuro da educação no Brasil.','Brasília – O Congresso Nacional aprovou nesta terça-feira um projeto de lei que promete transformar o sistema educacional brasileiro. A nova legislação, que ainda aguarda a sanção presidencial, introduz inovações tecnológicas nas escolas públicas e privadas, além de medidas para aumentar a inclusão social e reduzir a desigualdade educacional no país.\r\n\r\nDe acordo com o texto aprovado, as escolas terão acesso a recursos digitais avançados, como plataformas de ensino online e ferramentas de realidade aumentada. O objetivo é modernizar o ensino e torná-lo mais interativo e acessível para todos os alunos. Além disso, o projeto prevê a criação de programas de formação contínua para professores, visando prepará-los para utilizar essas novas tecnologias de forma eficiente.\r\n\r\nOutra medida importante é a ampliação do acesso à educação para alunos de baixa renda. O projeto de lei estabelece a criação de um fundo nacional destinado a financiar bolsas de estudo, materiais didáticos e transporte escolar. Com isso, espera-se reduzir a evasão escolar e garantir que mais crianças e jovens possam concluir seus estudos.\r\n\r\nO autor do projeto, deputado João Andrade (PSB-SP), destacou a importância da aprovação da lei para o futuro do país. \"Estamos dando um passo fundamental para garantir uma educação de qualidade e equitativa para todos os brasileiros. A tecnologia tem o poder de transformar a forma como aprendemos e ensinar, e é nosso dever garantir que essa transformação seja acessível a todos\", afirmou o deputado.\r\n\r\nEntidades educacionais e especialistas celebraram a aprovação do projeto, mas alertaram para a necessidade de uma implementação cuidadosa e monitorada. Segundo Ana Paula Ribeiro, diretora de uma ONG voltada para a educação, \"A aprovação é um grande avanço, mas precisamos garantir que as escolas tenham infraestrutura adequada e que os professores recebam o suporte necessário para que essas mudanças sejam efetivas.\"\r\n\r\nAgora, a proposta segue para a sanção do presidente da República, que terá até 15 dias para decidir sobre sua aprovação definitiva. Se sancionada, a nova lei começará a ser implementada já no próximo ano letivo.');
/*!40000 ALTER TABLE `noticias` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-07-30  8:01:11
