-- MySQL dump 10.13  Distrib 8.0.32, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: sistema
-- ------------------------------------------------------
-- Server version	8.0.32

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
-- Table structure for table `articulo`
--

DROP TABLE IF EXISTS `articulo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `articulo` (
  `id_articulo` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `precio` float NOT NULL,
  PRIMARY KEY (`id_articulo`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articulo`
--

LOCK TABLES `articulo` WRITE;
/*!40000 ALTER TABLE `articulo` DISABLE KEYS */;
INSERT INTO `articulo` VALUES (1,' Torta','Bolillo con guisado  ',28),(2,'Enchiladas ','Orden con 5 enchiladas rojas',34),(3,'Pizza','Rebanda de pizza',20),(4,'Sincronizadas','Tortilla de harina con queso,jitomate,etc',22),(5,'Tacos','Tacos con guisado',10),(6,'Agua Ciel','Agua natural de 1 litro',13),(7,'Jugo Jumex','Jugo de nectar de frutas',20),(8,'Leche Santa Clara','Leche de distintos sabores',13),(9,'Jugo del Valle','Jugo de nectar de frutas',18),(10,'Fuze Tea','Te negro de 600ml',18),(11,'Donas','Donas de distintos sabores',12),(12,'Lucas','Caramelo con polvo picante',15),(13,'Pay','Pay de nuez,queso,etc',20),(14,'Principe','Galletas con relleno de chocolate',18),(15,'Gomitas','gomittas de distintas formas y sabores',10),(16,'Pan de Carnes Frias','Rollo relleno de carne',20),(17,'Hot Dogs','Contiene cebolla,jitomate,salchicha,etc',15),(18,'PowerAde','Bebida energetica',22),(19,'Tikito','Yoghurt congelado',7),(20,'Burrito','Trotilla de harina rellena de guisado',13),(21,'Palomitas','Palomitas botaneras',10),(22,'Pan','Distintos panes para elegir',8),(23,'Cacahuates','Cacahuates sabor queso,habanero o normales',13),(24,'Papas','Papas botaneras',15),(25,'Mangonada','Nieve de mango con chamoy',18),(26,'Chokis','Galletas sabor chocolate',18),(27,'Chicles Orbit','Chicles con sabor a menta',4),(28,'Gomitas Bubbaloo','Gomitas acidas',10),(29,'Paleta de la Rosa','Paleta de caramelo con relleno de chicle',5),(30,'Picafresa','dulce ácido y picante con forma de fresa',1);
/*!40000 ALTER TABLE `articulo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `email` varchar(100) NOT NULL,
  `apPaterno` varchar(45) NOT NULL,
  `apMaterno` varchar(45) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `fecha_nac` date NOT NULL,
  `estado` varchar(45) NOT NULL,
  `municipio` varchar(45) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `rol` varchar(45) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES ('ejemplo3@cetis155.edu.mx','Nuñez','Martinez','Pablo','2023-03-14','Aguascalientes','Aguascalientes','4495587541','bG9s','Estudiante'),('ejemplo5@cetis155.edu.mx','Espinoza','Díaz','Julian','2023-02-28','Aguascalientes','Aguascalientes','4495587541','YWRpb3M=','Administrador'),('ejemplo@cetis155.edu.mx','Palos','Padilla','Angie','2023-02-28','Aguascalientes','Aguascalientes','4495587541','YWRpb3M=','Administrador');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-03-31  0:28:30
