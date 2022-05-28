-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: meublog
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `artigos`
--

DROP TABLE IF EXISTS `artigos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `artigos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` text DEFAULT NULL,
  `previa` text DEFAULT NULL,
  `conteudo` text DEFAULT NULL,
  `genero` varchar(20) DEFAULT NULL,
  `imagem` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `artigos`
--

LOCK TABLES `artigos` WRITE;
/*!40000 ALTER TABLE `artigos` DISABLE KEYS */;
INSERT INTO `artigos` VALUES (5,'Por que não indicamos o Python para iniciantes ','Sabemos que o Python é uma ótima linguagem para programação e que vale a pena ser estudar, mas descubra nesse artigo por que não recomendamos o Python para os programadores iniciantes.','    O Python é uma linguagem de programação que está em alta. Principalmente, devido às áreas de atuação em que ele pode ser aplicado, como por exemplo: Big Data, Internet das Coisas, Data Science e Inteligência Artificial. Ou seja, o que há de mais novo em tecnologia pode ser desenvolvido, também, através do Python. Mas com tanta coisa incrível que ele pode fazer você deve estar se perguntando cada vez mais porque a DevMedia não me indica o Python pra quem quer começar.','BACK-END',''),(6,'Lista de Fontes padrão no CSS','As fontes padrão do CSS podem ser usadas para mudar a aparência dos textos sem a necessidade instalar essas fontes ou importá-las de um link externo. Nesse artigo vamos conhecer as fontes e como usá-las no CSS.','Com as fontes padrão você já pode estilizar os elementos de textos para melhorar a aparência das suas páginas. Essas fontes são simples de usar, pois basta definir o nome da fonte na propriedade font-family e o texto já terá uma aparência diferente.','FRONT-END',NULL),(20,'Conceitos básicos para programar para Android','Android é um sistema operacional desenvolvido pela Google em meados de 2009 inicialmente para smartphones e tablets, mas que hoje está presente em diversos dispositivos como televisores, automóveis e relógios inteligentes.','Android é um sistema operacional desenvolvido pela Google, inicialmente para smartphones. Hoje, ele está presente em diversos dispositivos como televisores, veículos, relógios inteligentes, e muitos outros.\r\nPor conta disso, poucas carreiras são tão interessantes para o programador atualmente quanto a de desenvolvedor Android. Devido ao constante investimento em hardware feito pelos fabricantes de dispositivos, podemos executar desde utilitários até jogos de alta performance nesse sistema operacional.','MOBILE','62816c1919381.jpg'),(23,'O que é o PHP?','O PHP (um acrônimo recursivo para PHP: Hypertext Preprocessor) é uma linguagem de script open source de uso geral, muito utilizada, e especialmente adequada para o desenvolvimento web e que pode ser embutida dentro do HTML.\r\n','Em vez de muitos comandos para mostrar HTML (como acontece com C ou Perl), as páginas PHP contém HTML em código mesclado que faz \"alguma coisa\" (neste caso, mostra \"Olá, eu sou um script PHP!\"). O código PHP é delimitado pelas instruções de processamento (tags) de início e fim <?php e ?> que permitem que você entre e saia do \"modo PHP\".\r\n\r\nO que distingue o PHP de algo como o JavaScript no lado do cliente é que o código é executado no servidor, gerando o HTML que é então enviado para o navegador. O navegador recebe os resultados da execução desse script, mas não sabe qual era o código fonte. Você pode inclusive configurar seu servidor web para processar todos os seus arquivos HTML com o PHP, e então não há como os usuários dizerem o que você tem na sua manga.','BACK-END','628ec02db8890.jpg');
/*!40000 ALTER TABLE `artigos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-27 20:38:51
