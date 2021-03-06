-- MySQL dump 10.13  Distrib 5.7.9, for Win64 (x86_64)
--
-- Host: localhost    Database: dulzuras_artesanales
-- ------------------------------------------------------
-- Server version	5.7.11

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
-- Table structure for table `direccion`
--

DROP TABLE IF EXISTS `direccion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `direccion` (
  `id` int(11) NOT NULL,
  `calle` varchar(45) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `piso` int(11) DEFAULT NULL,
  `departamento` varchar(45) DEFAULT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `idUsuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_Direccion_Usuario_idx` (`idUsuario`),
  CONSTRAINT `FK_Direccion_Usuario` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `direccion`
--

LOCK TABLES `direccion` WRITE;
/*!40000 ALTER TABLE `direccion` DISABLE KEYS */;
/*!40000 ALTER TABLE `direccion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `envio`
--

DROP TABLE IF EXISTS `envio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `envio` (
  `id` int(11) NOT NULL,
  `detalle` varchar(85) DEFAULT NULL,
  `idDireccion` int(11) DEFAULT NULL,
  `importe` decimal(8,2) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `idFormaDePago` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_Envio_Direccion_idx` (`idDireccion`),
  KEY `FK_Envio_FormaDePAgo_idx` (`idFormaDePago`),
  CONSTRAINT `FK_Envio_Direccion` FOREIGN KEY (`idDireccion`) REFERENCES `direccion` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_Envio_FormaDePAgo` FOREIGN KEY (`idFormaDePago`) REFERENCES `forma_de_pago` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='				';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `envio`
--

LOCK TABLES `envio` WRITE;
/*!40000 ALTER TABLE `envio` DISABLE KEYS */;
/*!40000 ALTER TABLE `envio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estado_pedido`
--

DROP TABLE IF EXISTS `estado_pedido`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estado_pedido` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `imageLink` varchar(180) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estado_pedido`
--

LOCK TABLES `estado_pedido` WRITE;
/*!40000 ALTER TABLE `estado_pedido` DISABLE KEYS */;
INSERT INTO `estado_pedido` VALUES (1,'Solicitado',NULL),(2,'En elaboración',NULL),(3,'En camino',NULL),(4,'Entregado',NULL),(5,'Cancelado',NULL);
/*!40000 ALTER TABLE `estado_pedido` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `forma_de_pago`
--

DROP TABLE IF EXISTS `forma_de_pago`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `forma_de_pago` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `forma_de_pago`
--

LOCK TABLES `forma_de_pago` WRITE;
/*!40000 ALTER TABLE `forma_de_pago` DISABLE KEYS */;
INSERT INTO `forma_de_pago` VALUES (1,'Efectivo');
/*!40000 ALTER TABLE `forma_de_pago` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `item_detalle`
--

DROP TABLE IF EXISTS `item_detalle`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `item_detalle` (
  `id` int(11) NOT NULL,
  `item_pedido` int(11) DEFAULT NULL,
  `producto_detalle` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_itemDetalle_ItemPedido_idx` (`item_pedido`),
  KEY `FK_itemDetalle_ProductoDetalle_idx` (`producto_detalle`),
  CONSTRAINT `FK_itemDetalle_ItemPedido` FOREIGN KEY (`item_pedido`) REFERENCES `item_pedido` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_itemDetalle_ProductoDetalle` FOREIGN KEY (`producto_detalle`) REFERENCES `producto_detalle` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `item_detalle`
--

LOCK TABLES `item_detalle` WRITE;
/*!40000 ALTER TABLE `item_detalle` DISABLE KEYS */;
/*!40000 ALTER TABLE `item_detalle` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `item_pedido`
--

DROP TABLE IF EXISTS `item_pedido`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `item_pedido` (
  `id` int(11) NOT NULL,
  `idPedidoProducto` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_PedidoProductoDetalle_PedidoProducto_idx` (`idPedidoProducto`),
  CONSTRAINT `FK_PedidoProductoDetalle_Producto` FOREIGN KEY (`idPedidoProducto`) REFERENCES `producto` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `item_pedido`
--

LOCK TABLES `item_pedido` WRITE;
/*!40000 ALTER TABLE `item_pedido` DISABLE KEYS */;
/*!40000 ALTER TABLE `item_pedido` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `participante`
--

DROP TABLE IF EXISTS `participante`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `participante` (
  `id` int(11) NOT NULL,
  `idUsuario` int(11) DEFAULT NULL,
  `idSorteo` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_participante_usuario_idx` (`idUsuario`),
  KEY `FK_participante_sorteo_idx` (`idSorteo`),
  CONSTRAINT `FK_participante_sorteo` FOREIGN KEY (`idSorteo`) REFERENCES `sorteo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_participante_usuario` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `participante`
--

LOCK TABLES `participante` WRITE;
/*!40000 ALTER TABLE `participante` DISABLE KEYS */;
/*!40000 ALTER TABLE `participante` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedido`
--

DROP TABLE IF EXISTS `pedido`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedido` (
  `id` int(11) NOT NULL,
  `numero` int(11) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `idUsuario` int(11) DEFAULT NULL,
  `idEnvio` int(11) DEFAULT NULL,
  `total` decimal(8,2) DEFAULT NULL,
  `idFormaDePago` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_Pedido_Usuario_idx` (`idUsuario`),
  KEY `FK_Pedido_Envio_idx` (`idEnvio`),
  KEY `FK_Pedido_FormaDePago_idx` (`idFormaDePago`),
  CONSTRAINT `FK_Pedido_Envio` FOREIGN KEY (`idEnvio`) REFERENCES `envio` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_Pedido_FormaDePago` FOREIGN KEY (`idFormaDePago`) REFERENCES `forma_de_pago` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_Pedido_Usuario` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedido`
--

LOCK TABLES `pedido` WRITE;
/*!40000 ALTER TABLE `pedido` DISABLE KEYS */;
/*!40000 ALTER TABLE `pedido` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedido_detalle`
--

DROP TABLE IF EXISTS `pedido_detalle`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedido_detalle` (
  `id` int(11) NOT NULL,
  `idPedido` int(11) DEFAULT NULL,
  `idItemPedido` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `precioUnitario` decimal(8,2) DEFAULT NULL,
  `precioTotal` decimal(8,2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_PedidoDetalle_Pedido_idx` (`idPedido`),
  KEY `FK_PedidoDetalle_ItemPedido_idx` (`idItemPedido`),
  CONSTRAINT `FK_PedidoDetalle_ItemPedido` FOREIGN KEY (`idItemPedido`) REFERENCES `item_pedido` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_PedidoDetalle_Pedido` FOREIGN KEY (`idPedido`) REFERENCES `pedido` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedido_detalle`
--

LOCK TABLES `pedido_detalle` WRITE;
/*!40000 ALTER TABLE `pedido_detalle` DISABLE KEYS */;
/*!40000 ALTER TABLE `pedido_detalle` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `producto`
--

DROP TABLE IF EXISTS `producto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `producto` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(85) DEFAULT NULL,
  `imageLink` varchar(180) DEFAULT NULL,
  `estado` bit(1) DEFAULT NULL,
  `precioUnitario` decimal(5,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='															';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `producto`
--

LOCK TABLES `producto` WRITE;
/*!40000 ALTER TABLE `producto` DISABLE KEYS */;
INSERT INTO `producto` VALUES (1,'Alfajores Chicos',NULL,NULL,4.00),(2,'Cubanitos',NULL,NULL,7.00),(3,'Muffins',NULL,NULL,5.00),(4,'Chocotorta',NULL,NULL,200.00),(5,'Tarta de coco',NULL,NULL,300.00),(6,'Alfajores Grandes',NULL,NULL,6.00);
/*!40000 ALTER TABLE `producto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `producto_detalle`
--

DROP TABLE IF EXISTS `producto_detalle`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `producto_detalle` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(85) DEFAULT NULL,
  `estado` bit(1) DEFAULT NULL,
  `suma` decimal(5,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='		';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `producto_detalle`
--

LOCK TABLES `producto_detalle` WRITE;
/*!40000 ALTER TABLE `producto_detalle` DISABLE KEYS */;
INSERT INTO `producto_detalle` VALUES (1,'Dulce de Leche',NULL,0.00),(2,'Color Rojo',NULL,0.00),(3,'Color Rosa',NULL,0.00),(4,'Color Verde',NULL,0.00),(5,'Nueces',NULL,1.00),(6,'Almendras',NULL,1.00),(7,'Coco',NULL,1.00),(8,'Chips Chocolate Negro',NULL,1.00),(9,'Chips Chocolate Blanco',NULL,1.00),(10,'Marroc',NULL,1.00),(11,'Nugget',NULL,1.00),(12,'Baño Chocolate Negro',NULL,3.00),(13,'Frutos Del Bosque',NULL,1.00),(14,'Baño Chocolate Blanco',NULL,3.00);
/*!40000 ALTER TABLE `producto_detalle` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sorteo`
--

DROP TABLE IF EXISTS `sorteo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sorteo` (
  `id` int(11) NOT NULL,
  `numero` int(11) DEFAULT NULL,
  `idPedido` int(11) DEFAULT NULL,
  `fechaInicio` datetime DEFAULT NULL,
  `fechaFin` datetime DEFAULT NULL,
  `fechaSorteo` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_sorteo_pedido_idx` (`idPedido`),
  CONSTRAINT `FK_sorteo_pedido` FOREIGN KEY (`idPedido`) REFERENCES `pedido` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='	';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sorteo`
--

LOCK TABLES `sorteo` WRITE;
/*!40000 ALTER TABLE `sorteo` DISABLE KEYS */;
/*!40000 ALTER TABLE `sorteo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sorteo_ganador`
--

DROP TABLE IF EXISTS `sorteo_ganador`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sorteo_ganador` (
  `id` int(11) NOT NULL,
  `idParticipante` int(11) DEFAULT NULL,
  `puesto` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_ganador_participante_idx` (`idParticipante`),
  CONSTRAINT `FK_ganador_participante` FOREIGN KEY (`idParticipante`) REFERENCES `participante` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sorteo_ganador`
--

LOCK TABLES `sorteo_ganador` WRITE;
/*!40000 ALTER TABLE `sorteo_ganador` DISABLE KEYS */;
/*!40000 ALTER TABLE `sorteo_ganador` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tracking_pedido`
--

DROP TABLE IF EXISTS `tracking_pedido`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tracking_pedido` (
  `id` int(11) NOT NULL,
  `fecha` datetime DEFAULT NULL,
  `idPedido` int(11) DEFAULT NULL,
  `idEstadoPedido` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_trackingpedido_Pedido_idx` (`idPedido`),
  KEY `FK_trackingpedido_Pedido_idx1` (`idPedido`),
  KEY `FK_trackingpedido_Pedido_idx_1` (`idPedido`),
  KEY `FK_tracking_pedido_idx` (`idPedido`),
  KEY `FK_tracking_pedido_idx3` (`idPedido`),
  KEY `FK_tracking_estadoPedido_idx` (`idEstadoPedido`),
  KEY `FK_tracking_estadoPedido_idx3` (`idEstadoPedido`),
  CONSTRAINT `FK_tracking_estadoPedido` FOREIGN KEY (`idEstadoPedido`) REFERENCES `estado_pedido` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_tracking_pedido` FOREIGN KEY (`idPedido`) REFERENCES `pedido` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tracking_pedido`
--

LOCK TABLES `tracking_pedido` WRITE;
/*!40000 ALTER TABLE `tracking_pedido` DISABLE KEYS */;
/*!40000 ALTER TABLE `tracking_pedido` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `alias` varchar(45) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `facebook` varchar(45) DEFAULT NULL,
  `contrasenia` varchar(45) DEFAULT NULL,
  `fUid` varchar(100) DEFAULT NULL,
  `fFname` varchar(60) DEFAULT NULL,
  `fEmail` varchar(60) DEFAULT NULL,
  `fechaNac` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,NULL,NULL,NULL,NULL,NULL,'1708282002537912','Jonatan Marquez','',NULL),(2,'aa',NULL,'jonatanmarquez88@gmail.com',NULL,'4124bc0a9335c27f086f24ba207a4912',NULL,NULL,NULL,'2011-08-19'),(3,'dd',NULL,'dd@gmail.com',NULL,'1aabac6d068eef6a7bad3fdf50a05cc8',NULL,NULL,NULL,'2011-08-19'),(4,'ww',NULL,'ww@gmail.com',NULL,'ad57484016654da87125db86f4227ea3',NULL,NULL,NULL,'2011-08-19');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-11-16 13:46:36
