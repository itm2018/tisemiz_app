-- MySQL dump 10.13  Distrib 5.5.39, for Win32 (x86)
--
-- Host: localhost    Database: tisemiz
-- ------------------------------------------------------
-- Server version	5.5.39

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
-- Table structure for table `acos`
--

DROP TABLE IF EXISTS `acos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `acos`
--

LOCK TABLES `acos` WRITE;
/*!40000 ALTER TABLE `acos` DISABLE KEYS */;
/*!40000 ALTER TABLE `acos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(12) DEFAULT NULL,
  `role` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `aros`
--

DROP TABLE IF EXISTS `aros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aros` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aros`
--

LOCK TABLES `aros` WRITE;
/*!40000 ALTER TABLE `aros` DISABLE KEYS */;
/*!40000 ALTER TABLE `aros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `aros_acos`
--

DROP TABLE IF EXISTS `aros_acos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aros_acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `aro_id` int(10) NOT NULL,
  `aco_id` int(10) NOT NULL,
  `_create` varchar(2) NOT NULL DEFAULT '0',
  `_read` varchar(2) NOT NULL DEFAULT '0',
  `_update` varchar(2) NOT NULL DEFAULT '0',
  `_delete` varchar(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `ARO_ACO_KEY` (`aro_id`,`aco_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aros_acos`
--

LOCK TABLES `aros_acos` WRITE;
/*!40000 ALTER TABLE `aros_acos` DISABLE KEYS */;
/*!40000 ALTER TABLE `aros_acos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `baocaochatthainguyhai`
--

DROP TABLE IF EXISTS `baocaochatthainguyhai`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `baocaochatthainguyhai` (
  `colMa` int(11) NOT NULL AUTO_INCREMENT,
  `colCSSX` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime DEFAULT NULL,
  `tungay` date NOT NULL,
  `denngay` date NOT NULL,
  PRIMARY KEY (`colMa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `baocaochatthainguyhai`
--

LOCK TABLES `baocaochatthainguyhai` WRITE;
/*!40000 ALTER TABLE `baocaochatthainguyhai` DISABLE KEYS */;
/*!40000 ALTER TABLE `baocaochatthainguyhai` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `baocaogsmt`
--

DROP TABLE IF EXISTS `baocaogsmt`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `baocaogsmt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_doanhnghiep` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime DEFAULT NULL,
  `tungay` date NOT NULL,
  `denngay` date NOT NULL,
  `quytrinhcnxstrongkybc` text,
  `file_quytrinhcnsxbaocaogsmt` varchar(100) DEFAULT NULL,
  `file_nguononhiem` varchar(100) DEFAULT NULL,
  `file_quytrinhcnxlnt` varchar(100) DEFAULT NULL,
  `quytrinhcnxlnt` text,
  `file_ketquaphantichnt` varchar(100) DEFAULT NULL,
  `file_quytrinhcnxlkt` varchar(100) DEFAULT NULL,
  `quytrinhcnxlkt` text,
  `file_ketquaphantichkt` varchar(100) DEFAULT NULL,
  `nguonpstiengonvabpkp` text,
  `file_ketquaphantichtiengon` varchar(100) DEFAULT NULL,
  `nguonpsdorungvabpkp` text,
  `file_ketquaphantichdorung` varchar(100) DEFAULT NULL,
  `file_sodovitricacdiemgiamsatmtxq` varchar(100) DEFAULT NULL,
  `file_ketquadodacphantichmtxq` varchar(100) DEFAULT NULL,
  `customdir` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `baocaogsmt`
--

LOCK TABLES `baocaogsmt` WRITE;
/*!40000 ALTER TABLE `baocaogsmt` DISABLE KEYS */;
INSERT INTO `baocaogsmt` VALUES (3,6,16,'2014-08-17 17:01:09','2014-08-17 17:01:09','2014-03-03','2014-08-31','<p><span style=\"color: #ff9900;\">quy tr&igrave;nh c&ocirc;ng nghệ sản xuất</span></p>',NULL,NULL,NULL,'<p><span style=\"color: #ff9900;\">quy tr&igrave;nh xử l&yacute; nước thải đang &aacute;p dụng</span></p>',NULL,NULL,'<p><span style=\"color: #ff9900; background-color: #ffffff;\">quy tr&igrave;nh xử l&yacute; kh&iacute; thải đang &aacute;p dụng</span></p>',NULL,'<p>nguồn ph&aacute;t sinh tiếng ồn v&agrave; biện ph&aacute;p khắc phục</p>',NULL,'<p>nguồn ph&aacute;t sinh độ rung v&agrave; biện ph&aacute;p khắc phục</p>',NULL,NULL,NULL,'tisemiz\\2014-08-18\\'),(4,8,16,'2014-08-17 17:04:13','2014-08-17 17:04:13','2014-03-03','2014-08-31','<p><span style=\"color: #ff9900;\">quy tr&igrave;nh c&ocirc;ng nghệ sản xuất</span></p>',NULL,NULL,NULL,'<p><span style=\"color: #ff9900;\">quy tr&igrave;nh xử l&yacute; nước thải đang &aacute;p dụng</span></p>',NULL,NULL,'<p><span style=\"color: #ff9900; background-color: #ffffff;\">quy tr&igrave;nh xử l&yacute; kh&iacute; thải đang &aacute;p dụng</span></p>',NULL,'<p>nguồn ph&aacute;t sinh tiếng ồn v&agrave; biện ph&aacute;p khắc phục</p>',NULL,'<p>nguồn ph&aacute;t sinh độ rung v&agrave; biện ph&aacute;p khắc phục</p>',NULL,NULL,NULL,'tisemiz\\2014-08-18\\'),(5,9,16,'2014-08-17 17:09:11','2014-08-17 17:09:11','2014-08-01','2014-08-31','',NULL,NULL,NULL,'',NULL,NULL,'',NULL,'',NULL,'',NULL,NULL,NULL,'tisemiz\\2014-08-18\\'),(6,10,16,'2014-08-17 17:11:02','2014-08-17 17:11:02','2014-08-01','2014-08-31','',NULL,NULL,NULL,'',NULL,NULL,'',NULL,'',NULL,'',NULL,NULL,NULL,'tisemiz\\2014-08-18\\'),(7,11,16,'2014-08-17 17:11:30','2014-08-17 17:11:30','2014-08-01','2014-08-31','',NULL,NULL,NULL,'',NULL,NULL,'',NULL,'',NULL,'',NULL,NULL,NULL,'tisemiz\\2014-08-18\\'),(8,12,16,'2014-08-17 17:20:46','2014-08-17 17:20:46','2014-08-03','2014-09-30','',NULL,NULL,NULL,'',NULL,NULL,'',NULL,'',NULL,'',NULL,NULL,NULL,'tisemiz\\2014-08-18\\'),(10,0,0,'0000-00-00 00:00:00',NULL,'0000-00-00','0000-00-00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'tisemiz\\2014-08-18\\');
/*!40000 ALTER TABLE `baocaogsmt` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bien_phap_xu_ly_khi_thai`
--

DROP TABLE IF EXISTS `bien_phap_xu_ly_khi_thai`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bien_phap_xu_ly_khi_thai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tenbienphap` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bien_phap_xu_ly_khi_thai`
--

LOCK TABLES `bien_phap_xu_ly_khi_thai` WRITE;
/*!40000 ALTER TABLE `bien_phap_xu_ly_khi_thai` DISABLE KEYS */;
/*!40000 ALTER TABLE `bien_phap_xu_ly_khi_thai` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bien_phap_xu_ly_nuoc_thai`
--

DROP TABLE IF EXISTS `bien_phap_xu_ly_nuoc_thai`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bien_phap_xu_ly_nuoc_thai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tenbienphap` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bien_phap_xu_ly_nuoc_thai`
--

LOCK TABLES `bien_phap_xu_ly_nuoc_thai` WRITE;
/*!40000 ALTER TABLE `bien_phap_xu_ly_nuoc_thai` DISABLE KEYS */;
INSERT INTO `bien_phap_xu_ly_nuoc_thai` VALUES (1,'Xả vào tuyến nước mưa'),(2,'Xả vào tuyến mước bẩn'),(3,'Song chắn rác'),(4,'Tuyến nổi'),(5,'Lắng'),(6,'Keo tụ'),(7,'Điều chỉnh pH'),(8,'Sinh học kỵ khí'),(9,'Lắng 2'),(10,'Lọc'),(11,'Khử trùng'),(12,'Ép bon');
/*!40000 ALTER TABLE `bien_phap_xu_ly_nuoc_thai` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `chat_thai`
--

DROP TABLE IF EXISTS `chat_thai`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `chat_thai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ma_chatthai` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `ten_chatthai` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `tt_tontai` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_nguonthai` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ma_chatthai_UNIQUE` (`ma_chatthai`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chat_thai`
--

LOCK TABLES `chat_thai` WRITE;
/*!40000 ALTER TABLE `chat_thai` DISABLE KEYS */;
INSERT INTO `chat_thai` VALUES (2,'010102','Các loại cặn thải khác có chứa các thành phần nguy hại','Rắn/lỏng/bùn',1),(3,'010103','Chất thải có chứa các thành phần nguy hại từ quá trình chế biến quặng sắt','Rắn/lỏng/bùn',1),(4,'010201','Chất thải có chứa các thành phần nguy hại từ quá trình chế biến quặng kim loại màu bằng phương pháp hoá-lý','Rắn/lỏng/bùn',2),(7,'010301','Bùn thải và chất thải có chứa dầu từ quá trình khoan','Bùn/rắn/lỏng',3),(9,'010302','Bùn thải và chất thải có chứa các thành phần nguy hại từ quá trình khoan','Bùn/rắn/lỏng',3),(11,'010401','Bùn thải từ thiết bị khử muối','Bùn',4),(12,'010402','Bùn đáy bể','Bùn',4),(14,'010403','Bùn thải chứa axit','Bùn',4),(16,'010404','Dầu tràn','Lỏng',4),(17,'010405','Bùn thải có chứa dầu từ hoạt động bảo dưỡng cơ sở, máy móc, trang thiết bị','Bùn',4),(19,'010406','Các loại hắc ín thải','Rắn/bùn',4),(21,'010407','Bùn thải có chứa các thành phần nguy hại từ quá trình xử lý nước thải','Bùn',4),(23,'010408','Chất thải từ quá trình làm sạch nhiên liệu bằng bazơ','Lỏng',4),(25,'010409','Dầu thải chứa axit','Lỏng',4),(26,'010410','Vật liệu lọc bằng đất sét đã qua sử dụng','Rắn',4),(27,'010501','Các loại hắc ín thải','Rắn',5),(29,'010601','Chất thải có chứa thuỷ ngân','Lỏng',6),(31,'020101','Axit sunfuric và axit sunfurơ thải','Lỏng',7),(33,'020102','Axit clohydric thải','Lỏng',7),(35,'020103','Axit flohydric thải','Lỏng',7),(36,'020104','Axit photphoric và axit photphorơ thải','Lỏng',7),(37,'020105','Axit nitric và axit nitrơ thải','Lỏng',7),(38,'020106','Các loại axit thải khác','Lỏng',7),(39,'020201','Natri hydroxit và kali hydroxit thải','Rắn/Lỏng',8),(40,'020202','Các loại bazơ thải khác','Rắn/Lỏng',8),(41,'020301','Muối và dung dịch muối thải có chứa xyanua','Rắn/Lỏng',9),(42,'020302','Muối và dung dịch muối thải có chứa kim loại nặng','Rắn/Lỏng',9),(43,'020303','Oxit kim loại thải có chứa kim loại nặng','Rắn',9),(44,'020401','Chất thải chứa asen','Rắn/lỏng',11),(45,'070101','Axit tẩy thải','Lỏng',49),(47,'010101','Cặn thải có khả năng sinh axit từ quá trình chế biến quặng sunfua','Rắn/bùn',1),(48,'210101','test chat thai','Rắn/bùn',51),(49,'210201','test chat thai 2','Rắn/bùn',53);
/*!40000 ALTER TABLE `chat_thai` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `chat_thai_nguy_hai`
--

DROP TABLE IF EXISTS `chat_thai_nguy_hai`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `chat_thai_nguy_hai` (
  `colMa` int(11) NOT NULL AUTO_INCREMENT,
  `colNam` datetime DEFAULT NULL,
  `colCSSX` int(11) DEFAULT NULL,
  `colDangCThai` varchar(100) DEFAULT NULL,
  `colTongKL` varchar(100) NOT NULL,
  `colNguonPSinh` varchar(50) DEFAULT NULL,
  `colHThucLuu` varchar(50) DEFAULT NULL,
  `colBanRa` tinyint(1) DEFAULT NULL,
  `colThaiBo` tinyint(1) DEFAULT NULL,
  `colDViThuMua` varchar(50) DEFAULT NULL,
  `colDinhKyThuMua` varchar(50) DEFAULT NULL,
  `colGhiChu` tinytext,
  `colThoiGian` datetime DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `ma_chatthai` varchar(45) DEFAULT NULL,
  `tt_tontai` varchar(45) DEFAULT NULL,
  `stt` int(11) DEFAULT NULL,
  PRIMARY KEY (`colMa`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chat_thai_nguy_hai`
--

LOCK TABLES `chat_thai_nguy_hai` WRITE;
/*!40000 ALTER TABLE `chat_thai_nguy_hai` DISABLE KEYS */;
INSERT INTO `chat_thai_nguy_hai` VALUES (3,'0000-00-00 00:00:00',66,'test','trasetj','jasjdf','jsdfj',1,0,'fsdjofj','jfosjdf','jfsodjf','2014-08-07 00:00:00','2014-08-28 21:40:15',NULL,NULL,NULL),(4,'0000-00-00 00:00:00',10,'chất thải rắn','100','chất thải rắn','lưu',1,0,'','','','2014-08-06 00:00:00','2014-09-12 11:32:05',NULL,NULL,NULL),(5,NULL,71,'Cặn thải có khả năng sinh axit từ quá trình chế biến quặng sunfua','12',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-12 11:31:40','010101','Rắn/lỏng/bùn',1),(6,NULL,71,'Các loại cặn thải khác có chứa các thành phần nguy hại','123',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-12 11:31:40','010102','Rắn/lỏng/bùn',2),(7,NULL,71,'Chất thải có chứa các thành phần nguy hại từ quá trình chế biến quặng sắt','1234',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-12 11:31:40','010103','Rắn/lỏng/bùn',3),(8,NULL,71,'Cặn thải có khả năng sinh axit từ quá trình chế biến quặng sunfua','13214',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-12 11:42:24','010101','Rắn/lỏng/bùn',1),(9,NULL,71,'Các loại cặn thải khác có chứa các thành phần nguy hại','4325',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-12 11:42:24','010102','Rắn/lỏng/bùn',2),(10,NULL,71,'Chất thải có chứa các thành phần nguy hại từ quá trình chế biến quặng sắt','2454',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-12 11:42:24','010103','Rắn/lỏng/bùn',3),(11,NULL,71,'Cặn thải có khả năng sinh axit từ quá trình chế biến quặng sunfua','132141',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-12 11:43:41','010101','Rắn/lỏng/bùn',1),(12,NULL,71,'Các loại cặn thải khác có chứa các thành phần nguy hại','13234',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-12 11:43:41','010102','Rắn/lỏng/bùn',2),(13,NULL,71,'Chất thải có chứa các thành phần nguy hại từ quá trình chế biến quặng sắt','13234',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-12 11:43:41','010103','Rắn/lỏng/bùn',3),(14,NULL,71,'Cặn thải có khả năng sinh axit từ quá trình chế biến quặng sunfua','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-12 11:43:48','010101','Rắn/lỏng/bùn',1),(15,NULL,71,'Các loại cặn thải khác có chứa các thành phần nguy hại','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-12 11:43:48','010102','Rắn/lỏng/bùn',2),(16,NULL,71,'Chất thải có chứa các thành phần nguy hại từ quá trình chế biến quặng sắt','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-12 11:43:48','010103','Rắn/lỏng/bùn',3),(17,NULL,71,'Cặn thải có khả năng sinh axit từ quá trình chế biến quặng sunfua','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-12 11:50:24','010101','Rắn/lỏng/bùn',1),(18,NULL,71,'Các loại cặn thải khác có chứa các thành phần nguy hại','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-12 11:50:24','010102','Rắn/lỏng/bùn',2),(19,NULL,71,'Chất thải có chứa các thành phần nguy hại từ quá trình chế biến quặng sắt','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-12 11:50:24','010103','Rắn/lỏng/bùn',3),(20,NULL,71,'Cặn thải có khả năng sinh axit từ quá trình chế biến quặng sunfua','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-12 11:51:16','010101','Rắn/lỏng/bùn',1),(21,NULL,71,'Các loại cặn thải khác có chứa các thành phần nguy hại','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-12 11:51:16','010102','Rắn/lỏng/bùn',2),(22,NULL,71,'Chất thải có chứa các thành phần nguy hại từ quá trình chế biến quặng sắt','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-12 11:51:16','010103','Rắn/lỏng/bùn',3),(23,NULL,71,'Cặn thải có khả năng sinh axit từ quá trình chế biến quặng sunfua','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-12 11:52:24','010101','Rắn/lỏng/bùn',1),(24,NULL,71,'Các loại cặn thải khác có chứa các thành phần nguy hại','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-12 11:52:24','010102','Rắn/lỏng/bùn',2),(25,NULL,71,'Chất thải có chứa các thành phần nguy hại từ quá trình chế biến quặng sắt','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-12 11:52:24','010103','Rắn/lỏng/bùn',3),(26,NULL,71,'Cặn thải có khả năng sinh axit từ quá trình chế biến quặng sunfua','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-12 11:55:31','010101','Rắn/lỏng/bùn',1),(27,NULL,71,'Các loại cặn thải khác có chứa các thành phần nguy hại','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-12 11:55:31','010102','Rắn/lỏng/bùn',2),(28,NULL,71,'Chất thải có chứa các thành phần nguy hại từ quá trình chế biến quặng sắt','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-12 11:55:31','010103','Rắn/lỏng/bùn',3),(29,NULL,71,'Cặn thải có khả năng sinh axit từ quá trình chế biến quặng sunfua','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-12 11:57:35','010101','Rắn/lỏng/bùn',1),(30,NULL,71,'Các loại cặn thải khác có chứa các thành phần nguy hại','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-12 11:57:35','010102','Rắn/lỏng/bùn',2),(31,NULL,71,'Chất thải có chứa các thành phần nguy hại từ quá trình chế biến quặng sắt','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-12 11:57:35','010103','Rắn/lỏng/bùn',3),(32,NULL,71,'Cặn thải có khả năng sinh axit từ quá trình chế biến quặng sunfua','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-12 11:57:46','010101','Rắn/lỏng/bùn',1),(33,NULL,71,'Các loại cặn thải khác có chứa các thành phần nguy hại','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-12 11:57:46','010102','Rắn/lỏng/bùn',2),(34,NULL,71,'Chất thải có chứa các thành phần nguy hại từ quá trình chế biến quặng sắt','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-12 11:57:46','010103','Rắn/lỏng/bùn',3),(35,NULL,71,'Cặn thải có khả năng sinh axit từ quá trình chế biến quặng sunfua','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-12 12:00:12','010101','Rắn/lỏng/bùn',1),(36,NULL,71,'Các loại cặn thải khác có chứa các thành phần nguy hại','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-12 12:00:12','010102','Rắn/lỏng/bùn',2),(37,NULL,71,'Chất thải có chứa các thành phần nguy hại từ quá trình chế biến quặng sắt','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-12 12:00:12','010103','Rắn/lỏng/bùn',3),(38,NULL,71,'Cặn thải có khả năng sinh axit từ quá trình chế biến quặng sunfua','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-12 12:00:20','010101','Rắn/lỏng/bùn',1),(39,NULL,71,'Các loại cặn thải khác có chứa các thành phần nguy hại','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-12 12:00:20','010102','Rắn/lỏng/bùn',2),(40,NULL,71,'Chất thải có chứa các thành phần nguy hại từ quá trình chế biến quặng sắt','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-12 12:00:20','010103','Rắn/lỏng/bùn',3),(41,NULL,71,'Cặn thải có khả năng sinh axit từ quá trình chế biến quặng sunfua','5234',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-12 12:03:01','010101','Rắn/lỏng/bùn',1),(42,NULL,71,'Các loại cặn thải khác có chứa các thành phần nguy hại','234',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-12 12:03:01','010102','Rắn/lỏng/bùn',2),(43,NULL,71,'Chất thải có chứa các thành phần nguy hại từ quá trình chế biến quặng sắt','2345',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-12 12:03:01','010103','Rắn/lỏng/bùn',3),(44,NULL,71,'Cặn thải có khả năng sinh axit từ quá trình chế biến quặng sunfua','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-12 12:03:12','010101','Rắn/lỏng/bùn',1),(45,NULL,71,'Các loại cặn thải khác có chứa các thành phần nguy hại','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-12 12:03:12','010102','Rắn/lỏng/bùn',2),(46,NULL,71,'Chất thải có chứa các thành phần nguy hại từ quá trình chế biến quặng sắt','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-12 12:03:12','010103','Rắn/lỏng/bùn',3),(47,NULL,71,'Cặn thải có khả năng sinh axit từ quá trình chế biến quặng sunfua','fasdf',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-12 12:04:36','010101','Rắn/lỏng/bùn',1),(48,NULL,71,'Các loại cặn thải khác có chứa các thành phần nguy hại','ádf',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-12 12:04:36','010102','Rắn/lỏng/bùn',2),(49,NULL,71,'Chất thải có chứa các thành phần nguy hại từ quá trình chế biến quặng sắt','sdf',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-12 12:04:36','010103','Rắn/lỏng/bùn',3),(50,NULL,71,'Cặn thải có khả năng sinh axit từ quá trình chế biến quặng sunfua','3324',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-12 12:05:03','010101','Rắn',7),(51,NULL,71,'Các loại cặn thải khác có chứa các thành phần nguy hại','43534',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-12 12:05:03','010102','Rắn/lỏng/bùn',8),(52,NULL,71,'Chất thải có chứa các thành phần nguy hại từ quá trình chế biến quặng sắt','23434',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-12 12:05:03','010103','lỏng',9),(53,NULL,72,'Chất thải có chứa các thành phần nguy hại từ quá trình chế biến quặng kim loại màu bằng phương pháp ','1245',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-12 11:44:40','010201','Rắn/lỏng/bùn',1);
/*!40000 ALTER TABLE `chat_thai_nguy_hai` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `chat_thai_ran_cong_nghiep`
--

DROP TABLE IF EXISTS `chat_thai_ran_cong_nghiep`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `chat_thai_ran_cong_nghiep` (
  `colMa` int(11) NOT NULL AUTO_INCREMENT,
  `colNam` datetime DEFAULT NULL,
  `colCSSX` int(11) DEFAULT NULL,
  `colDangCThai` varchar(100) DEFAULT NULL,
  `colTongKL` varchar(100) DEFAULT NULL,
  `colNguonPSinh` varchar(50) DEFAULT NULL,
  `colHThucLuu` varchar(50) DEFAULT NULL,
  `colBanRa` tinyint(1) DEFAULT NULL,
  `colThaiBo` tinyint(1) DEFAULT NULL,
  `colDViThuMua` varchar(50) DEFAULT NULL,
  `colDinhKyThuMua` varchar(50) DEFAULT NULL,
  `colGhiChu` tinytext,
  `colThoiGian` datetime DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`colMa`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chat_thai_ran_cong_nghiep`
--

LOCK TABLES `chat_thai_ran_cong_nghiep` WRITE;
/*!40000 ALTER TABLE `chat_thai_ran_cong_nghiep` DISABLE KEYS */;
INSERT INTO `chat_thai_ran_cong_nghiep` VALUES (2,'0000-00-00 00:00:00',66,'dạng chất thải rắn công nghiệp','13 tấn','sản xuất','lưu giữ vào kho',1,0,'cty môi trường xanh','hàng tuần','','2014-08-05 00:00:00','2014-08-28 21:23:21'),(4,'0000-00-00 00:00:00',66,'fkansf fasdf','fskdnf','jfksdf','hngdfg',1,0,' gdfgjopjsdfo','jsopdjfg','jgsdfgj','2014-09-16 00:00:00','2014-08-28 21:29:20');
/*!40000 ALTER TABLE `chat_thai_ran_cong_nghiep` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `co_quan_quan_ly`
--

DROP TABLE IF EXISTS `co_quan_quan_ly`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `co_quan_quan_ly` (
  `colMa` int(11) NOT NULL AUTO_INCREMENT,
  `colTen` varchar(50) DEFAULT NULL,
  `colDiaChi` varchar(50) DEFAULT NULL,
  `colDThoai` varchar(50) DEFAULT NULL,
  `colFax` varchar(50) DEFAULT NULL,
  `colEmail` varchar(50) DEFAULT NULL,
  `colMoTa` tinytext,
  `colHinhAnh` blob,
  PRIMARY KEY (`colMa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `co_quan_quan_ly`
--

LOCK TABLES `co_quan_quan_ly` WRITE;
/*!40000 ALTER TABLE `co_quan_quan_ly` DISABLE KEYS */;
/*!40000 ALTER TABLE `co_quan_quan_ly` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `danh_muc_chat_thai`
--

DROP TABLE IF EXISTS `danh_muc_chat_thai`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `danh_muc_chat_thai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ma_danhmuc` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `ten_danhmuc` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ma_danhmuc_UNIQUE` (`ma_danhmuc`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `danh_muc_chat_thai`
--

LOCK TABLES `danh_muc_chat_thai` WRITE;
/*!40000 ALTER TABLE `danh_muc_chat_thai` DISABLE KEYS */;
INSERT INTO `danh_muc_chat_thai` VALUES (1,'01','CHẤT THẢI TỪ NGÀNH THĂM DÒ, KHAI THÁC, CHẾ BIẾN KHOÁNG SẢN, DẦU KHÍ VÀ THAN'),(2,'02','CHẤT THẢI TỪ NGÀNH SẢN XUẤT HOÁ CHẤT VÔ CƠ'),(3,'03','CHẤT THẢI TỪ NGÀNH SẢN XUẤT HOÁ CHẤT  HỮU CƠ'),(4,'04','CHẤT THẢI TỪ NGÀNH NHIỆT ĐIỆN VÀ CÁC QUÁ TRÌNH NHIỆT KHÁC'),(5,'05','CHẤT THẢI TỪ NGÀNH LUYỆN KIM'),(6,'06','CHẤT THẢI TỪ NGÀNH SẢN XUẤT VẬT LIỆU XÂY DỰNG VÀ THỦY TINH'),(7,'07','CHẤT THẢI TỪ QUÁ TRÌNH XỬ LÝ, CHE PHỦ BỀ MẶT, TẠO HÌNH KIM LOẠI VÀ CÁC VẬT LIỆU KHÁC'),(8,'08','CHẤT THẢI TỪ QUÁ TRÌNH SẢN XUẤT, ĐIỀU CHẾ, CUNG ỨNG, SỬ DỤNG CÁC SẢN PHẨM CHE PHỦ (SƠN, VÉC NI, MEN THUỶ TINH), CHẤT KẾT DÍNH, CHẤT BỊT KÍN VÀ MỰC IN'),(9,'09','CHẤT THẢI TỪ NGÀNH CHẾ BIẾN GỖ, SẢN XUẤT CÁC SẢN PHẨM GỖ, GIẤY VÀ BỘT GIẤY'),(10,'10','CHẤT THẢI TỪ NGÀNH CHẾ BIẾN DA, LÔNG VÀ DỆT NHUỘM'),(11,'11','CHẤT THẢI XÂY DỰNG VÀ PHÁ DỠ (KỂ CẢ ĐẤT ĐÀO TỪ CÁC KHU VỰC BỊ Ô NHIỄM)'),(12,'12','CHẤT THẢI TỪ CÁC CƠ SỞ TÁI CHẾ, XỬ LÝ, TIÊU HUỶ CHẤT THẢI, XỬ LÝ NƯỚC CẤP SINH HOẠT VÀ CÔNG NGHIỆP'),(13,'13','CHẤT THẢI TỪ NGÀNH Y TẾ VÀ THÚ Y  (trừ chất thải sinh hoạt của ngành này)'),(14,'14','CHẤT THẢI TỪ NGÀNH NÔNG NGHIỆP, LÂM NGHIỆP VÀ THUỶ SẢN'),(16,'15','THIẾT BỊ, PHƯƠNG TIỆN GIAO THÔNG VẬN TẢI ĐÃ HẾT HẠN SỬ DỤNG VÀ CHẤT THẢI TỪ HOẠT ĐỘNG PHÁ DỠ, BẢO DƯỠNG THIẾT BỊ, PHƯƠNG TIỆN GIAO THÔNG VẬN TẢI'),(17,'16','CHẤT THẢI HỘ GIA ĐÌNH VÀ CHẤT THẢI SINH HOẠT TỪ CÁC NGUỒN KHÁC'),(18,'17','DẦU THẢI, CHẤT THẢI TỪ NHIÊN LIỆU LỎNG, CHẤT THẢI DUNG MÔI HỮU CƠ, MÔI CHẤT LẠNH VÀ CHẤT ĐẨY (propellant)'),(19,'18','CÁC LOẠI CHẤT THẢI BAO BÌ, CHẤT HẤP THỤ, GIẺ LAU, VẬT LIỆU LỌC VÀ VẢI BẢO VỆ'),(22,'19','CÁC LOẠI CHẤT THẢI KHÁC'),(23,'20','Chất thải rắn');
/*!40000 ALTER TABLE `danh_muc_chat_thai` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `danhmuc_sanpham`
--

DROP TABLE IF EXISTS `danhmuc_sanpham`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `danhmuc_sanpham` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tendanhmuc` varchar(100) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `danhmuc_sanpham`
--

LOCK TABLES `danhmuc_sanpham` WRITE;
/*!40000 ALTER TABLE `danhmuc_sanpham` DISABLE KEYS */;
INSERT INTO `danhmuc_sanpham` VALUES (13,'Nhựa công nghiệp',NULL,'2014-08-23 20:46:13','2014-08-23 13:46:13'),(16,'Đồ Gồ Chế Tác',NULL,'2014-08-23 20:48:45','2014-08-23 13:48:45'),(17,'Đan Lát',NULL,'2014-08-24 10:53:47','2014-08-24 03:53:47'),(18,'May mặc',NULL,'2014-08-24 15:16:58','2014-08-24 08:16:58');
/*!40000 ALTER TABLE `danhmuc_sanpham` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dien_nuoc_doanh_nghiep`
--

DROP TABLE IF EXISTS `dien_nuoc_doanh_nghiep`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dien_nuoc_doanh_nghiep` (
  `colMa` int(11) NOT NULL AUTO_INCREMENT,
  `colCSSX` int(11) DEFAULT NULL,
  `colNam` int(4) DEFAULT NULL,
  `colLoaiTThu` varchar(50) DEFAULT NULL,
  `colLuongSD` varchar(100) DEFAULT NULL,
  `colSoNgaySuDung` float DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`colMa`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dien_nuoc_doanh_nghiep`
--

LOCK TABLES `dien_nuoc_doanh_nghiep` WRITE;
/*!40000 ALTER TABLE `dien_nuoc_doanh_nghiep` DISABLE KEYS */;
INSERT INTO `dien_nuoc_doanh_nghiep` VALUES (4,66,2014,'234g','200',200,'2014-08-24 13:30:33'),(5,66,2014,'324t','13',2334,'2014-08-24 13:36:16'),(6,66,2014,'2345f','3',23545,'2014-08-24 13:36:54'),(7,10,2014,'fasdf','dfasdf',123,'2014-08-29 22:24:02');
/*!40000 ALTER TABLE `dien_nuoc_doanh_nghiep` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doanh_nghiep`
--

DROP TABLE IF EXISTS `doanh_nghiep`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doanh_nghiep` (
  `colMa` int(11) NOT NULL AUTO_INCREMENT,
  `colTen` varchar(50) DEFAULT NULL,
  `colTenTAnh` varchar(50) DEFAULT NULL,
  `colDiaChi` varchar(50) DEFAULT NULL,
  `colDienThoai` varchar(50) DEFAULT NULL,
  `colFax` varchar(50) DEFAULT NULL,
  `colEmail` varchar(50) DEFAULT NULL,
  `colSoTKhoan` varchar(50) DEFAULT NULL,
  `colTKMoTaiNH` varchar(100) DEFAULT NULL,
  `colX` float DEFAULT NULL,
  `colY` float DEFAULT NULL,
  `colNamHopDong` datetime DEFAULT NULL,
  `colGiayPhepDT` varchar(50) DEFAULT NULL,
  `colGiayPhepKD` varchar(50) DEFAULT NULL,
  `colLoaiHinhDN` int(11) DEFAULT NULL,
  `colMaNganh1` int(11) DEFAULT NULL,
  `colMaNganh2` int(11) DEFAULT NULL,
  `colMaNganh3` int(11) DEFAULT NULL,
  `colMaNganh4` int(11) DEFAULT NULL,
  `colMaNganh5` int(11) DEFAULT NULL,
  `colMaNganh6` int(11) DEFAULT NULL,
  `colLinhVucHD` tinytext,
  `colCongsuat` varchar(500) DEFAULT NULL,
  `colQuocGia` int(11) DEFAULT NULL,
  `colQTrinhSX` tinytext,
  `colMoTaKT` tinytext,
  `colMoTaNT` tinytext,
  `colMoTaRT` tinytext,
  `colGhiChu` tinytext,
  `colHinhAnh` blob,
  `nam` int(4) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `nguoiphutrachmt` varchar(100) DEFAULT NULL,
  `giamdoc` varchar(45) DEFAULT NULL,
  `dienthoaigiamdoc` varchar(45) DEFAULT NULL,
  `diadanhdangky` varchar(100) DEFAULT NULL,
  `colSanpham` varchar(1000) DEFAULT NULL,
  `create_by` varchar(45) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `saving_status` tinyint(4) NOT NULL DEFAULT '0',
  `thongtinkiennghibvmt` text,
  `colMaDNME` int(11) DEFAULT NULL,
  `colMaQLCTNH` varchar(45) DEFAULT NULL,
  `lacanhan` tinyint(1) NOT NULL DEFAULT '0',
  `ngaycapchungnhanKDDT` datetime DEFAULT NULL,
  `noicapchungnhanKDDT` varchar(45) DEFAULT NULL,
  `cmndgiamdoc` varchar(45) DEFAULT NULL,
  `ngaycapcmndgiamdoc` datetime DEFAULT NULL,
  `noicapcmndgiamdoc` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`colMa`)
) ENGINE=InnoDB AUTO_INCREMENT=88 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doanh_nghiep`
--

LOCK TABLES `doanh_nghiep` WRITE;
/*!40000 ALTER TABLE `doanh_nghiep` DISABLE KEYS */;
INSERT INTO `doanh_nghiep` VALUES (10,'Công ty TNHH Tiến Phát','Tien Phat Ltd.','Lô số 2, KCN Tân Bình, Quận Tân Bình, Tp. HCM','(08)3456789','(08)35647890','tienphat@gmail.com','369258147','Đông Á Bank Nam Sài Gòn',29,21,'2013-07-23 00:00:00','BTX0934834885','BTX0934834885',2,3,4,5,6,8,9,NULL,'',2,'',NULL,NULL,NULL,NULL,'/uploads/5.jpg',2014,0,'Huỳnh Sơn Ca','Huỳnh Sơn Ca','0933754549','Hóc Môn','May mặc, quần áo, hàng xuất khẩu',NULL,16,1,'<p>fasd sdf fdsaf</p>',NULL,'TDGDG',1,'2014-09-16 00:00:00','Sở Công Thương HCM','381456789','2012-06-19 00:00:00','Cà Mau'),(70,'Tân Lợi Ltd','fasdf','KCN Bình Điền, Q. Bình Thạnh','08234235','08234235','test@abc.com','32454467','Vietcombank',NULL,NULL,'1970-01-01 00:00:00','','',1,1,3,4,NULL,NULL,NULL,NULL,'',1,'',NULL,NULL,NULL,NULL,'/uploads/220520101225.jpg',2014,0,'Trần Cao','Cao Lỗ','0123457799','HCM','',NULL,16,1,NULL,70,'',1,'2014-09-16 00:00:00','','264878897','2014-09-16 00:00:00','HCM'),(71,'Công ty TNHH Tiến Phát 2',NULL,'Lô số 3, KCN Tân Bình, Quận Tân Bình, Tp. HCM3','(08)3456345','','tienphat2@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,16,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,10,NULL,0,NULL,'',NULL,NULL,NULL),(72,'Công ty TNHH Tiến Phát 3',NULL,'Lô số 4, KCN Tân Bình, Quận Tân Bình, Tp. HCM','(08)3456343','','tienphat3@gmail.com',NULL,NULL,45245,24352400,NULL,NULL,'BTX0934834883',NULL,6,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,10,NULL,0,NULL,'',NULL,NULL,NULL),(75,'Công ty TNHH Tiến Phát 4',NULL,'Lô số 4, KCN Tân Bình, Quận Tân Bình, Tp. HCM3','(08)3456345','','tienphat4@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,10,NULL,0,NULL,'',NULL,NULL,NULL),(77,'Công ty TNHH Tiến Phát 5',NULL,'Lô số 3, KCN Tân Bình, Quận Tân Bình, Tp. HCM3','(08)3456345','','tienphat3@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,10,NULL,0,NULL,'',NULL,NULL,NULL),(79,'Công ty TNHH Tiến Phát 6',NULL,'Lô số 4, KCN Tân Bình, Quận Tân Bình, Tp. HCM3','(08)3456343','','tienphat4@gmail.com',NULL,NULL,21334.3,2345.2,NULL,NULL,'BX1245677',NULL,3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,10,NULL,0,'2005-09-06 00:00:00','Bình Dương',NULL,NULL,NULL),(80,'Công ty TNHH Tiến Phát 1021',NULL,'Lô số 4, KCN Tân Bình, Quận Tân Bình, Tp. HCM3','(08)3456789','','tienphat8@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,10,NULL,0,NULL,'',NULL,NULL,NULL),(81,'Công ty TNHH Tiến Phát 101',NULL,'Lô số 2, KCN Tân Bình, Quận Tân Bình, Tp. HCM','(08)3456345','','tienphat3@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,5,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,10,NULL,0,NULL,'',NULL,NULL,NULL),(83,'Công ty TNHH TIến phát 14',NULL,'HCM, Lô 14','(08)3456345','(08)35647890','tienphat3@gmail.com',NULL,NULL,45245,24352400,NULL,NULL,'BTX0934834883',NULL,3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,10,NULL,0,'1999-09-15 00:00:00','',NULL,NULL,NULL),(84,'Tiến phát',NULL,'HCM-CITY Tan Phu Dist','(08)3456345','','tienphatxd@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,'BN32434',NULL,7,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,10,NULL,0,'2000-01-20 00:00:00','fasdfdsf',NULL,NULL,NULL),(86,'Tiến phát 10','Tien Phat LTd','Lô số 4, KCN Tân Bình, Quận Tân Bình, Tp. HCM3','(08)3456343','','tienphat10@gmail.com','',NULL,NULL,NULL,'2000-06-22 00:00:00','','',1,2,3,4,5,6,7,NULL,'',1,'',NULL,NULL,NULL,NULL,'/uploads/220520101225.jpg',2014,0,'','',NULL,NULL,'',NULL,16,1,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(87,'Tiến phát','','Lô số 2, KCN Tân Bình, Quận Tân Bình, Tp. HCM','(08)3456343','','tienphat3@gmail.com','',NULL,NULL,NULL,'1970-01-01 00:00:00','','',1,8,11,NULL,NULL,NULL,NULL,NULL,'',1,'',NULL,NULL,NULL,NULL,'/uploads/220520101225.jpg',2014,0,'','',NULL,NULL,'',NULL,16,1,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `doanh_nghiep` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doanh_nghiep_thong_tin_tuan_thu_bvmt`
--

DROP TABLE IF EXISTS `doanh_nghiep_thong_tin_tuan_thu_bvmt`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doanh_nghiep_thong_tin_tuan_thu_bvmt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `colMaDN` int(11) NOT NULL,
  `colMaTailieu` int(11) NOT NULL,
  `daco` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`,`colMaDN`,`colMaTailieu`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doanh_nghiep_thong_tin_tuan_thu_bvmt`
--

LOCK TABLES `doanh_nghiep_thong_tin_tuan_thu_bvmt` WRITE;
/*!40000 ALTER TABLE `doanh_nghiep_thong_tin_tuan_thu_bvmt` DISABLE KEYS */;
INSERT INTO `doanh_nghiep_thong_tin_tuan_thu_bvmt` VALUES (10,67,1,1),(57,66,3,1),(58,66,4,1),(59,66,7,1),(60,66,8,1),(61,66,9,1),(62,66,10,1),(63,66,11,1),(64,16,1,1),(65,16,4,1),(66,16,7,1),(67,10,1,1),(68,10,2,1),(69,10,3,1);
/*!40000 ALTER TABLE `doanh_nghiep_thong_tin_tuan_thu_bvmt` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doanhnghiep`
--

DROP TABLE IF EXISTS `doanhnghiep`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doanhnghiep` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tencoso` varchar(100) NOT NULL,
  `truso` varchar(100) NOT NULL,
  `dienthoai` varchar(20) NOT NULL,
  `fax` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `gpkinhdoanh` varchar(50) DEFAULT NULL,
  `masothue` varchar(50) DEFAULT NULL,
  `quytrinhcnxs` text,
  `id_cosolapbc` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doanhnghiep`
--

LOCK TABLES `doanhnghiep` WRITE;
/*!40000 ALTER TABLE `doanhnghiep` DISABLE KEYS */;
INSERT INTO `doanhnghiep` VALUES (1,'ten co so','dia chi co so','08744-4548','fax','test@gmail.com','giay dang ky kinh doanh','ma so thue43',NULL,NULL),(2,'Tên công ty','asdfsdf','07806548','097754645664','email@gmail.com','giay dang ky kinh doanh','ma so thue',NULL,1),(3,'ten co so','dia chi co so','08744-4548','fax','test@gmail.com','giay dang ky kinh doanh','ma so thue43',NULL,NULL),(4,'Tên công ty','asdfsdf','07806548','097754645664','email@gmail.com','giay dang ky kinh doanh','ma so thue',NULL,3),(5,'ten co so','dia chi co so','08744-4548','fax','test@gmail.com','giay dang ky kinh doanh','ma so thue43',NULL,NULL),(6,'Tên công ty','asdfsdf','07806548','097754645664','email@gmail.com','giay dang ky kinh doanh','ma so thue',NULL,5),(7,'ten co so','dia chi co so','08744-4548','fax','test@gmail.com','giay dang ky kinh doanh','ma so thue43',NULL,NULL),(8,'Tên công ty','asdfsdf','07806548','097754645664','email@gmail.com','giay dang ky kinh doanh','ma so thue',NULL,7),(9,'Tên công ty','trụ sở công ty','078056478','','email@gmail.com','giay dang ky kinh doanh','ma so thue',NULL,NULL),(10,'Tên công ty','trụ sở công ty','078056478','','email@gmail.com','giay dang ky kinh doanh','ma so thue',NULL,NULL),(11,'Tên công ty','trụ sở công ty','078056478','','email@gmail.com','giay dang ky kinh doanh','ma so thue',NULL,NULL),(12,'Evolable Asia ','9 Dinh Tien Hoang, Dakao, Q.1','09972420','','huynhsonca@gmail.com','GP214345','2384934285',NULL,NULL);
/*!40000 ALTER TABLE `doanhnghiep` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hientrangchatthairan`
--

DROP TABLE IF EXISTS `hientrangchatthairan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hientrangchatthairan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_loaichatthairan` int(11) NOT NULL,
  `stt` int(4) NOT NULL DEFAULT '0',
  `loaichatthai` varchar(100) NOT NULL,
  `donvi` varchar(50) NOT NULL,
  `thang1` float DEFAULT NULL,
  `thang2` float DEFAULT NULL,
  `thang3` float DEFAULT NULL,
  `thang4` float DEFAULT NULL,
  `thang5` float DEFAULT NULL,
  `thang6` float DEFAULT NULL,
  `thang7` float DEFAULT NULL,
  `thang8` float DEFAULT NULL,
  `thang9` float DEFAULT NULL,
  `thang10` float DEFAULT NULL,
  `thang11` float DEFAULT NULL,
  `thang12` float DEFAULT NULL,
  `donvithugomvanchuyen` varchar(100) DEFAULT NULL,
  `tong` float DEFAULT NULL,
  `chucnang` varchar(100) DEFAULT NULL,
  `id_bc` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hientrangchatthairan`
--

LOCK TABLES `hientrangchatthairan` WRITE;
/*!40000 ALTER TABLE `hientrangchatthairan` DISABLE KEYS */;
INSERT INTO `hientrangchatthairan` VALUES (1,1,1,'chất thải rắn','khg',12,12,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,24,NULL,1),(2,1,2,'chất thải rắn 2','khg',NULL,NULL,21,12,12,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,45,NULL,1),(3,2,1,'chất thải cn','kg',23,24,4.2,23.34,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,74.54,NULL,1),(4,2,2,'chất thải nguy hại','kg',42,3243,34,345,35.3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,3699.3,NULL,1),(5,3,1,'nước thải 1','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,1),(6,3,2,'nước thải 2','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,1);
/*!40000 ALTER TABLE `hientrangchatthairan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hientrangkhithai`
--

DROP TABLE IF EXISTS `hientrangkhithai`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hientrangkhithai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stt` int(4) NOT NULL DEFAULT '0',
  `loaikhithai` varchar(100) NOT NULL,
  `donvi` varchar(50) DEFAULT NULL,
  `quy1` float DEFAULT NULL,
  `quy2` float DEFAULT NULL,
  `quy3` float DEFAULT NULL,
  `quy4` float DEFAULT NULL,
  `tong` float DEFAULT NULL,
  `ghichu` varchar(100) DEFAULT NULL,
  `chucnang` varchar(100) DEFAULT NULL,
  `id_bc` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hientrangkhithai`
--

LOCK TABLES `hientrangkhithai` WRITE;
/*!40000 ALTER TABLE `hientrangkhithai` DISABLE KEYS */;
INSERT INTO `hientrangkhithai` VALUES (1,1,'Bụi','mg/m3',12,12,43,12,79,'',NULL,1),(2,2,'SO2','mg/m3',23,123,12,24,182,'',NULL,1);
/*!40000 ALTER TABLE `hientrangkhithai` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hientrangnuocthai`
--

DROP TABLE IF EXISTS `hientrangnuocthai`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hientrangnuocthai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stt` int(4) NOT NULL DEFAULT '0',
  `loainuocthai` varchar(100) NOT NULL,
  `donvi` varchar(50) DEFAULT NULL,
  `quy1` float DEFAULT NULL,
  `quy2` float DEFAULT NULL,
  `quy3` float DEFAULT NULL,
  `quy4` float DEFAULT NULL,
  `tong` float DEFAULT NULL,
  `ghichu` varchar(100) DEFAULT NULL,
  `chucnang` varchar(100) DEFAULT NULL,
  `id_bc` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hientrangnuocthai`
--

LOCK TABLES `hientrangnuocthai` WRITE;
/*!40000 ALTER TABLE `hientrangnuocthai` DISABLE KEYS */;
INSERT INTO `hientrangnuocthai` VALUES (1,1,'nước thải 1','g',12,13,14,15,54,'',NULL,1),(2,2,'nước thải 2','g',12,14.5,12.2,23.1,61.8,'',NULL,1);
/*!40000 ALTER TABLE `hientrangnuocthai` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hoat_dong_san_xuat`
--

DROP TABLE IF EXISTS `hoat_dong_san_xuat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hoat_dong_san_xuat` (
  `colMa` int(11) NOT NULL AUTO_INCREMENT,
  `colCSSX` int(11) DEFAULT NULL,
  `colNam` int(4) DEFAULT NULL,
  `colDTichDat` float DEFAULT NULL,
  `colDienTichDatXD` float DEFAULT NULL,
  `colNVienTT` varchar(50) DEFAULT NULL,
  `colNVienGT` varchar(50) DEFAULT NULL,
  `colSoCaSX` float DEFAULT NULL,
  `colSuatAn` varchar(50) DEFAULT NULL,
  `colQTrinhSX` tinytext,
  `colNoiCapSuatAn` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`colMa`)
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hoat_dong_san_xuat`
--

LOCK TABLES `hoat_dong_san_xuat` WRITE;
/*!40000 ALTER TABLE `hoat_dong_san_xuat` DISABLE KEYS */;
INSERT INTO `hoat_dong_san_xuat` VALUES (1,52,NULL,NULL,203145,'425',NULL,4,'5004','<p>test</p>',2),(2,52,NULL,NULL,203145,'425',NULL,4,'5004','<p>test</p>',2),(3,NULL,NULL,NULL,4127350,'1236',NULL,3,'4789','<p>qui tr&igrave;nh c&ocirc;ng nghệ sản xuất hiện đại tr&ecirc;n d&acirc;y chuyền c&ocirc;ng nghệ Đ&agrave;i Loan</p>',NULL),(4,NULL,NULL,NULL,4127350,'1236',NULL,3,'4789','<p>qui tr&igrave;nh c&ocirc;ng nghệ sản xuất hiện đại tr&ecirc;n d&acirc;y chuyền c&ocirc;ng nghệ Đ&agrave;i Loan</p>',NULL),(5,55,NULL,NULL,234873,'4234',NULL,2,'23','<p>hoatj ddong san xuat kinh doanh</p>',2),(6,55,NULL,NULL,20343,'82374',NULL,2,'434','<p>NGUYỄN VĂN H&Oacute;A</p>',NULL),(7,55,NULL,NULL,123,'1213',NULL,4,'434','<p>NGUYỄN VĂN H&Oacute;A</p>',NULL),(8,55,NULL,NULL,123,'1213',NULL,4,'434','<p>NGUYỄN VĂN H&Oacute;A</p>',NULL),(9,55,NULL,NULL,123,'1213',NULL,4,'434','<p>NGUYỄN VĂN H&Oacute;A</p>',NULL),(10,55,NULL,NULL,123,'1213',NULL,4,'434','<p>NGUYỄN VĂN H&Oacute;A</p>',2),(11,55,NULL,NULL,123,'1213',NULL,4,'434','<p>NGUYỄN VĂN H&Oacute;A</p>',2),(12,55,NULL,NULL,123,'1213',NULL,4,'434','<p>NGUYỄN VĂN H&Oacute;A</p>',2),(13,55,NULL,NULL,123,'1213',NULL,4,'434','<p>NGUYỄN VĂN H&Oacute;A</p>',2),(14,55,NULL,NULL,123,'1213',NULL,4,'434','<p>NGUYỄN VĂN H&Oacute;A</p>',2),(15,55,NULL,NULL,123,'1213',NULL,4,'434','<p>NGUYỄN VĂN H&Oacute;A</p>',2),(16,55,NULL,NULL,123,'1213',NULL,4,'434','<p>NGUYỄN VĂN H&Oacute;A</p>',2),(17,55,NULL,NULL,203145,'4234532',NULL,34345,'2','<p>t&eacute;t</p>',2),(18,55,0,NULL,203145,'4234532',NULL,34345,'2','<p>t&eacute;t</p>',2),(19,55,0,NULL,203145,'4234532',NULL,34345,'2','<p>t&eacute;t</p>',2),(20,55,0,NULL,203145,'4234532',NULL,34345,'2','<p>t&eacute;t</p>',2),(21,55,2014,NULL,203145,'4234532',NULL,34345,'2','<p>t&eacute;t</p>',2),(22,55,2014,NULL,203145,'4234532',NULL,34345,'2','<p>t&eacute;t</p>',2),(23,55,2014,NULL,203145,'4234532',NULL,34345,'2','<p>t&eacute;t</p>',2),(24,55,2014,NULL,203145,'4234532',NULL,34345,'2','<p>t&eacute;t</p>',2),(25,55,2014,NULL,3241230,'4124245',NULL,1234,'324','<p>this is technology progress</p>',2),(26,55,2014,NULL,3241230,'4124245',NULL,1234,'324','<p>this is technology progress</p>',2),(27,55,2014,NULL,203145,'425232',NULL,4,'4343','<p>t&eacute;t tet</p>',2),(28,59,2014,NULL,203145,'425232',NULL,4,'4343','<p>Đ&acirc;y l&agrave; th&ocirc;ng tin hoạt động sản xuất của doanh nghiệp</p>',2),(29,59,2014,NULL,203145,'425232',NULL,4,'4343','<p>Đ&acirc;y l&agrave; th&ocirc;ng tin hoạt động sản xuất của doanh nghiệp</p>',2),(30,59,2014,NULL,203145,'425232',NULL,4,'4343','<p>Đ&acirc;y l&agrave; th&ocirc;ng tin hoạt động sản xuất của doanh nghiệp</p>',2),(31,59,2014,NULL,203145,'425232',NULL,3,'','',NULL),(32,59,2014,NULL,203145,'425232',NULL,3,'','',NULL),(33,59,2014,NULL,203145,'425',NULL,3,'434','<p>this is tet</p>',2),(34,59,2014,NULL,203145,'425',NULL,3,'434','<p>this is tet</p>',2),(35,59,2014,NULL,203145,'425',NULL,3,'434','<p>Đ&acirc;y l&agrave; qui tr&igrave;nh c&ocirc;ng nghệ sản xuất của doanh nghiệp</p>',2),(36,59,2014,NULL,203145,'425',NULL,3,'434','<p><img src=\"../../../assets/tinymce/plugins/uploads/images.jpg\" alt=\"\" width=\"240\" height=\"210\" />Đ&acirc;y l&agrave; qui tr&igrave;nh c&ocirc;ng nghệ sản xuất của doanh nghiệp</p>',2),(37,60,2014,NULL,203145,'425',NULL,3,'','',2),(38,60,2014,NULL,203145,'425',NULL,3,'','<p>test</p>',2),(39,60,2014,NULL,203145,'425',NULL,3,'','<p>test</p>',2),(57,61,2014,NULL,203145,'425232',NULL,4,'456','<p>th&ocirc;ng tin hoạt động sản xuất của ty&nbsp;</p>',2),(62,62,2014,NULL,203145,'425',NULL,3,'434','<p>test</p>',2),(63,64,2014,NULL,203145,'425',NULL,3,'434','<p>đ&acirc;y l&agrave; qui tr&igrave;nh c&ocirc;ng nghệ sản xuất</p>',NULL),(65,65,2014,NULL,213214,'2353245',NULL,5234540,'523456','<p>52345</p>',NULL),(67,66,2014,NULL,203145,'425232',NULL,3,'434','<p>test</p>',2),(68,16,2014,NULL,123,'23',NULL,23,'2134','<p>23434 fasdf fasd fsdf</p>\r\n<p>asdfas fadf</p>',2),(69,10,2014,NULL,12345,'2323',NULL,0,'2445','<p>&eacute;df</p>',NULL),(70,69,2014,NULL,203145,'425232',NULL,3,'ádf','<p>dfasdf</p>',2),(72,86,2014,NULL,1200,'234',NULL,3,'234','<p>test</p>',2);
/*!40000 ALTER TABLE `hoat_dong_san_xuat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ketquaphantichkhithai`
--

DROP TABLE IF EXISTS `ketquaphantichkhithai`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ketquaphantichkhithai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stt` int(4) NOT NULL DEFAULT '0',
  `thongsodo` varchar(100) NOT NULL,
  `donvi` varchar(50) DEFAULT NULL,
  `lan1` float DEFAULT NULL,
  `lan2` float DEFAULT NULL,
  `lan3` float DEFAULT NULL,
  `lan4` float DEFAULT NULL,
  `lan5` float DEFAULT NULL,
  `lan6` float DEFAULT NULL,
  `tong` float DEFAULT NULL,
  `ghichu` varchar(100) DEFAULT NULL,
  `chucnang` varchar(100) DEFAULT NULL,
  `id_bc` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ketquaphantichkhithai`
--

LOCK TABLES `ketquaphantichkhithai` WRITE;
/*!40000 ALTER TABLE `ketquaphantichkhithai` DISABLE KEYS */;
INSERT INTO `ketquaphantichkhithai` VALUES (1,1,'Tiếng ồn Khu vực cổng bảo vệ','dBA',12,23,23.2,21.2,NULL,NULL,79.4,'',NULL,1),(2,2,'Nhiệt độ Khu vực cổng bảo vệ','Độ C',23,34,34,23,NULL,NULL,114,'',NULL,1);
/*!40000 ALTER TABLE `ketquaphantichkhithai` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ketquaphantichnuocthai`
--

DROP TABLE IF EXISTS `ketquaphantichnuocthai`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ketquaphantichnuocthai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stt` int(4) NOT NULL DEFAULT '0',
  `thongsodo` varchar(100) NOT NULL,
  `donvi` varchar(50) DEFAULT NULL,
  `lan1` float DEFAULT NULL,
  `lan2` float DEFAULT NULL,
  `lan3` float DEFAULT NULL,
  `lan4` float DEFAULT NULL,
  `lan5` float DEFAULT NULL,
  `lan6` float DEFAULT NULL,
  `tong` float DEFAULT NULL,
  `ghichu` varchar(100) DEFAULT NULL,
  `chucnang` varchar(100) DEFAULT NULL,
  `id_bc` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ketquaphantichnuocthai`
--

LOCK TABLES `ketquaphantichnuocthai` WRITE;
/*!40000 ALTER TABLE `ketquaphantichnuocthai` DISABLE KEYS */;
INSERT INTO `ketquaphantichnuocthai` VALUES (1,1,'Tiếng ồn Khu vực cổng bảo vệ','dBA',12,23,23.2,21.2,NULL,NULL,79.4,'',NULL,1),(2,2,'Nhiệt độ Khu vực cổng bảo vệ','Độ C',23,34,34,23,NULL,NULL,114,'',NULL,1);
/*!40000 ALTER TABLE `ketquaphantichnuocthai` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `khu_cong_nghiep`
--

DROP TABLE IF EXISTS `khu_cong_nghiep`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `khu_cong_nghiep` (
  `colMa` int(11) NOT NULL AUTO_INCREMENT,
  `colTen` varchar(50) DEFAULT NULL,
  `colTenTAnh` varchar(50) DEFAULT NULL,
  `colDiaChi` varchar(50) DEFAULT NULL,
  `colDThoai` varchar(50) DEFAULT NULL,
  `colFax` varchar(50) DEFAULT NULL,
  `colEmail` varchar(50) DEFAULT NULL,
  `colNamHDong` datetime DEFAULT NULL,
  `colDienTich` float DEFAULT NULL,
  `colSoCTy` float DEFAULT NULL,
  `colSoCNhan` varchar(50) DEFAULT NULL,
  `colMoTa` tinytext,
  `colHinhAnh` blob,
  PRIMARY KEY (`colMa`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `khu_cong_nghiep`
--

LOCK TABLES `khu_cong_nghiep` WRITE;
/*!40000 ALTER TABLE `khu_cong_nghiep` DISABLE KEYS */;
INSERT INTO `khu_cong_nghiep` VALUES (1,'Khu Công Nghiệp Tân Bình','Tan Binh Industry Zone','Q. Tân Bình, Tp.HCM','086484848','081515418','tanbinhindustryzone@gmail.com','2000-03-05 11:50:00',50,300,'10000','','');
/*!40000 ALTER TABLE `khu_cong_nghiep` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kiem_soat_o_nhiem`
--

DROP TABLE IF EXISTS `kiem_soat_o_nhiem`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kiem_soat_o_nhiem` (
  `colMa` int(11) NOT NULL AUTO_INCREMENT,
  `colNam` datetime DEFAULT NULL,
  `colCSSX` int(11) DEFAULT NULL,
  `colNguonThai` varchar(50) DEFAULT NULL,
  `colNguonPSinh` varchar(50) DEFAULT NULL,
  `colBPhapXL` varchar(50) DEFAULT NULL,
  `colGhiChu` tinytext,
  PRIMARY KEY (`colMa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kiem_soat_o_nhiem`
--

LOCK TABLES `kiem_soat_o_nhiem` WRITE;
/*!40000 ALTER TABLE `kiem_soat_o_nhiem` DISABLE KEYS */;
/*!40000 ALTER TABLE `kiem_soat_o_nhiem` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `loaichatthairan`
--

DROP TABLE IF EXISTS `loaichatthairan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `loaichatthairan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tenloai` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `loaichatthairan`
--

LOCK TABLES `loaichatthairan` WRITE;
/*!40000 ALTER TABLE `loaichatthairan` DISABLE KEYS */;
/*!40000 ALTER TABLE `loaichatthairan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `loaihinhdoanhnghiep`
--

DROP TABLE IF EXISTS `loaihinhdoanhnghiep`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `loaihinhdoanhnghiep` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tenloaihinh` varchar(100) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `loaihinhdoanhnghiep`
--

LOCK TABLES `loaihinhdoanhnghiep` WRITE;
/*!40000 ALTER TABLE `loaihinhdoanhnghiep` DISABLE KEYS */;
INSERT INTO `loaihinhdoanhnghiep` VALUES (1,'Công ty TNHH',NULL,'2014-06-13 11:31:05'),(2,'Công ty Cổ phần',NULL,'2014-06-13 11:31:05'),(3,'Công ty Liên Doanh',NULL,'2014-06-13 11:31:05'),(4,'Công ty Nhà Nước',NULL,'2014-06-13 11:31:05');
/*!40000 ALTER TABLE `loaihinhdoanhnghiep` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nganh`
--

DROP TABLE IF EXISTS `nganh`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nganh` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tennganh` varchar(100) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `create_by` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nganh`
--

LOCK TABLES `nganh` WRITE;
/*!40000 ALTER TABLE `nganh` DISABLE KEYS */;
INSERT INTO `nganh` VALUES (1,'Ắc qui',NULL,NULL,'2014-08-28 19:28:04',NULL),(2,'Thuốc BVTV',NULL,NULL,'2014-08-28 19:28:04',NULL),(3,'Cơ khí',NULL,NULL,'2014-08-28 19:28:04',NULL),(4,'Hóa chất',NULL,NULL,'2014-08-28 19:28:04',NULL),(5,'Dệt may',NULL,NULL,'2014-08-28 19:28:04',NULL),(6,'Cao su, nhựa',NULL,NULL,'2014-08-28 19:28:04',NULL),(7,'Nhuộm, wash, in hoa vải',NULL,NULL,'2014-08-28 19:28:04',NULL),(8,'Thực phẩm',NULL,NULL,'2014-08-28 19:28:04',NULL),(9,'Thuộc da',NULL,NULL,'2014-08-28 19:28:04',NULL),(10,'Xi mạ',NULL,NULL,'2014-08-28 19:28:04',NULL),(11,'Chế biến thực phẩm',NULL,NULL,'2014-09-06 00:23:37',NULL),(12,'Dầu khí',NULL,NULL,'2014-09-06 00:23:37',NULL),(13,'Dược',NULL,NULL,'2014-09-06 00:23:37',NULL),(14,'Điện',NULL,NULL,'2014-09-06 00:23:37',NULL),(15,'Điện tử',NULL,NULL,'2014-09-06 00:23:37',NULL),(16,'Khoáng sản',NULL,NULL,'2014-09-06 00:23:37',NULL),(17,'Luyện kim',NULL,NULL,'2014-09-06 00:23:37',NULL),(18,'Nông nghiệp',NULL,NULL,'2014-09-06 00:23:37',NULL),(19,'Quản lý, xử lý nước, nước thải, chất thải',NULL,NULL,'2014-09-06 00:23:37',NULL),(20,'Sản xuất hàng tiêu dùng',NULL,NULL,'2014-09-06 00:23:37',NULL),(21,'Sản xuất vật liệu cơ bản (cao su, nhựa, thủy tinh...)',NULL,NULL,'2014-09-06 00:23:37',NULL),(22,'Sản xuất vật liệu xây dựng',NULL,NULL,'2014-09-06 00:23:37',NULL),(23,'Xây dựng',NULL,NULL,'2014-09-06 00:23:37',NULL),(24,'Y tế và thú y',NULL,NULL,'2014-09-06 00:23:37',NULL),(25,'Ngành khác',NULL,NULL,'2014-09-06 00:23:37',NULL);
/*!40000 ALTER TABLE `nganh` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nguon_gay_on_rung`
--

DROP TABLE IF EXISTS `nguon_gay_on_rung`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nguon_gay_on_rung` (
  `colMa` int(11) NOT NULL AUTO_INCREMENT,
  `colTenNguon` varchar(50) DEFAULT NULL,
  `colGhiChu` tinytext,
  PRIMARY KEY (`colMa`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nguon_gay_on_rung`
--

LOCK TABLES `nguon_gay_on_rung` WRITE;
/*!40000 ALTER TABLE `nguon_gay_on_rung` DISABLE KEYS */;
INSERT INTO `nguon_gay_on_rung` VALUES (1,'Chạy mát phát điện',NULL),(2,'Chạy máy sản xuất',NULL);
/*!40000 ALTER TABLE `nguon_gay_on_rung` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nguon_thai`
--

DROP TABLE IF EXISTS `nguon_thai`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nguon_thai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ma_nguonthai` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `ten_nguonthai` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `id_danhmucchatthai` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ma_nguonthai_UNIQUE` (`ma_nguonthai`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nguon_thai`
--

LOCK TABLES `nguon_thai` WRITE;
/*!40000 ALTER TABLE `nguon_thai` DISABLE KEYS */;
INSERT INTO `nguon_thai` VALUES (1,'0101','Chất thải từ quá trình chế biến quặng sắt bằng phương pháp hoá-lý',1),(2,'0102','Chất thải từ quá trình chế biến quặng kim loại màu bằng phương pháp hoá-lý',1),(3,'0103','Bùn thải và các chất thải khác từ quá trình khoan',1),(4,'0104','Chất thải từ quá trình lọc dầu',1),(5,'0105','Chất thải từ quá trình chế biến than bằng phương pháp nhiệt phân',1),(6,'0106','Chất thải từ quá trình tinh chế và vận chuyển khí thiên nhiên',1),(7,'0201','Chất thải từ quá trình sản xuất, điều chế, cung ứng và sử dụng axit',2),(8,'0202','Chất thải từ quá trình sản xuất, điều chế, cung ứng và sử dụng bazơ',2),(9,'0203','Chất thải từ quá trình sản xuất, điều chế, cung ứng, sử dụng muối, dung dịch muối và oxit kim loại',2),(11,'0204','Chất thải có chứa kim loại',2),(12,'0205','Bùn thải từ quá trình xử lý nước thải ',2),(13,'0206','Chất thải từ quá trình sản xuất, điều chế, cung ứng, sử dụng hoá chất chứa lưu huỳnh, chế biến hoá chất chứa lưu huỳnh và quá trình khử lưu huỳnh',2),(14,'0207','Chất thải từ quá trình sản xuất, điều chế, cung ứng, sử dụng halogen và chuyển hoá hợp chất chứa halogen',2),(15,'0208','Chất thải từ quá trình sản xuất, điều chế, cung ứng, sử dụng silicon và các dẫn xuất của silicon',2),(16,'0209','Chất thải từ quá trình sản xuất, điều chế, cung ứng, sử dụng hoá chất chứa photpho và chế biến hoá chất chứa photpho',2),(17,'0210','Chất thải từ quá trình sản xuất, điều chế, cung ứng, sử dụng hoá chất chứa nitơ, chế biến hoá chất chứa nitơ và sản xuất phân bón',2),(18,'0211','Chất thải từ các quá trình chế biến hoá chất vô cơ khác',2),(19,'0301','Chất thải từ quá trình sản xuất, điều chế, cung ứng và sử dụng hoá chất hữu cơ cơ bản',3),(20,'0302','Chất thải từ quá trình sản xuất, điều chế, cung ứng, sử dụng nhựa, cao su tổng hợp và sợi nhân tạo',3),(21,'0303','Chất thải từ quá trình sản xuất, điều chế, cung ứng, sử dụng phẩm màu hữu cơ và vô cơ ',3),(22,'0304','Chất thải từ quá trình sản xuất, điều chế, cung ứng, sử dụng các sản phẩm thuốc bảo vệ thực vật, chất bảo quản gỗ và các loại bioxit hữu cơ khác',3),(23,'0305','Chất thải từ quá trình sản xuất, điều chế, cung ứng và sử dụng dược phẩm',3),(24,'0306','Chất thải từ quá trình sản xuất, điều chế, cung ứng, sử dụng chất béo, xà phòng, chất tẩy rửa, sát trùng và mỹ phẩm',3),(25,'0307','Chất thải từ quá trình sản xuất, điều chế, cung ứng, sử dụng hoá chất tinh khiết và các hoá phẩm khác',3),(26,'0401','Chất thải từ nhà máy nhiệt điện ',4),(27,'0402','Chất thải từ các cơ sở đốt khác ',4),(28,'0501','Chất thải từ ngành công nghiệp gang thép',5),(29,'0502','Chất thải từ quá trình nhiệt luyện nhôm',5),(30,'0503','Chất thải từ quá trình nhiệt luyện chì',5),(31,'0504','Chất thải từ quá trình nhiệt luyện kẽm',5),(32,'0505','Chất thải từ quá trình nhiệt luyện đồng',5),(39,'0506','Chất thải từ quá trình nhiệt luyện vàng bạc và platin',5),(40,'0507','Chất thải từ quá trình nhiệt luyện các kim loại màu khác',5),(41,'0508','Chất thải từ quá trình đúc kim loại đen',5),(42,'0509','Chất thải từ quá trình đúc kim loại màu',5),(43,'0510','Chất thải từ quá trình thuỷ luyện kim loại màu',5),(44,'0511','Bùn thải và chất thải rắn từ quá trình tôi luyện',5),(45,'0601','Chất thải từ quá trình sản xuất thuỷ tinh và sản phẩm thuỷ tinh',6),(46,'0602','Chất thải từ quá trình sản xuất hàng gốm sứ, gạch ngói, tấm ốp lát và các sản phẩm xây dựng khác',6),(48,'0603','Chất thải từ quá trình sản xuất xi măng, vôi, thạch cao và các sản phẩm của chúng',6),(49,'0701','Chất thải từ quá trình xử lý hoá học, che phủ bề mặt kim loại và các vật liệu khác (ví dụ quá trình mạ điện, tráng kẽm, tẩy axit/bazơ, khắc axit, photphat hoá, tẩy mỡ nhờn bằng kiềm, anot hoá)',7),(50,'0702','Chất thải từ quá trình mạ điện',7),(51,'2101','test nguon thai',24);
/*!40000 ALTER TABLE `nguon_thai` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nguon_thai_khi_thai`
--

DROP TABLE IF EXISTS `nguon_thai_khi_thai`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nguon_thai_khi_thai` (
  `colMa` int(11) NOT NULL AUTO_INCREMENT,
  `colTenNgThai` varchar(50) DEFAULT NULL,
  `colGhiChu` tinytext,
  PRIMARY KEY (`colMa`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nguon_thai_khi_thai`
--

LOCK TABLES `nguon_thai_khi_thai` WRITE;
/*!40000 ALTER TABLE `nguon_thai_khi_thai` DISABLE KEYS */;
INSERT INTO `nguon_thai_khi_thai` VALUES (1,'Khí Thải/Mùi',NULL),(2,'Bụi',NULL),(3,'Khói Thải Lò Hơi',NULL),(4,'Khói Từ Máy Sấy Đốt',NULL),(5,'Máy Phát Dự Phòng',NULL);
/*!40000 ALTER TABLE `nguon_thai_khi_thai` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nguon_thai_nuoc_thai`
--

DROP TABLE IF EXISTS `nguon_thai_nuoc_thai`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nguon_thai_nuoc_thai` (
  `colMa` int(11) NOT NULL AUTO_INCREMENT,
  `colTenNguonThai` varchar(100) NOT NULL,
  `colGhiChu` tinytext,
  `created` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`colMa`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nguon_thai_nuoc_thai`
--

LOCK TABLES `nguon_thai_nuoc_thai` WRITE;
/*!40000 ALTER TABLE `nguon_thai_nuoc_thai` DISABLE KEYS */;
INSERT INTO `nguon_thai_nuoc_thai` VALUES (1,'Sinh hoạt hằng ngày',NULL,NULL),(3,'Khói bụi vĩa hè1',NULL,'2014-08-26 13:26:27'),(4,'Xả thải công nghiệp',NULL,'2014-08-26 13:30:33');
/*!40000 ALTER TABLE `nguon_thai_nuoc_thai` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nguyen_lieu_san_pham`
--

DROP TABLE IF EXISTS `nguyen_lieu_san_pham`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nguyen_lieu_san_pham` (
  `colMa` int(11) NOT NULL AUTO_INCREMENT,
  `colCSSX` int(11) DEFAULT NULL,
  `colNam` int(4) DEFAULT NULL,
  `colNguyenLieu` int(11) DEFAULT NULL,
  `colDonVi` varchar(50) DEFAULT NULL,
  `colLuongSD` float DEFAULT NULL,
  `colLuongDTru` float DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `stt` int(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`colMa`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nguyen_lieu_san_pham`
--

LOCK TABLES `nguyen_lieu_san_pham` WRITE;
/*!40000 ALTER TABLE `nguyen_lieu_san_pham` DISABLE KEYS */;
INSERT INTO `nguyen_lieu_san_pham` VALUES (1,65,2014,5,'kg',2354240,235245,'2014-08-24 10:37:05',0),(2,65,2014,5,'kg',2354240,235245,'2014-08-24 10:39:03',0),(3,65,2014,3,'tấn',3000,3500,'2014-08-24 11:03:13',0),(4,65,2014,3,'tấn',3000,3500,'2014-08-24 11:04:14',0),(5,65,2014,3,'tấn',3000,3500,'2014-08-24 11:04:18',0),(13,65,2014,8,'cái',213242,34324,'2014-08-24 11:33:11',0),(14,66,2014,3,'tấn',1000,1100,'2014-08-24 12:43:13',0),(15,10,2014,3,'ư3f',1212,1212,'2014-08-29 22:23:50',0),(16,86,2014,1,'tấn',300,34,'2014-09-06 16:55:53',0),(23,71,NULL,5,'tấn',324,NULL,'2014-09-08 04:25:30',3),(24,71,NULL,2,'tấn',1000,NULL,'2014-09-08 04:26:44',2),(25,71,NULL,6,'m',900456,NULL,'2014-09-08 04:32:21',4),(26,71,NULL,1,'tấn',90.34,NULL,'2014-09-08 04:34:36',1),(27,72,NULL,2,'tấn',45,NULL,'2014-09-08 05:02:03',1),(28,72,NULL,3,'tấn',100,NULL,'2014-09-08 05:02:15',2),(29,71,NULL,7,'m',1000000,NULL,'2014-09-12 08:40:27',5);
/*!40000 ALTER TABLE `nguyen_lieu_san_pham` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nguyenlieu`
--

DROP TABLE IF EXISTS `nguyenlieu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nguyenlieu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tennguyenlieu` varchar(100) DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `create_by` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nguyenlieu`
--

LOCK TABLES `nguyenlieu` WRITE;
/*!40000 ALTER TABLE `nguyenlieu` DISABLE KEYS */;
INSERT INTO `nguyenlieu` VALUES (1,'Củi khô','2014-01-31 22:05:05',NULL),(2,'Trấu','2014-01-31 22:05:05',NULL),(3,'Than Đá','2014-01-31 22:05:05',NULL),(5,'Gỗ thông','2014-01-31 22:05:05',NULL),(6,'Nhựa PVC','2014-01-31 22:05:05',NULL),(7,'Vãi Cotton','2014-01-31 22:05:05',NULL),(8,'Vãi Silk','2014-01-31 22:05:05',NULL),(9,'Dầu','2014-01-31 22:05:05',NULL),(10,'Xăng AO','2014-01-31 22:05:05',NULL),(12,'Lụa Ấn Độ','2014-08-24 12:13:45',NULL),(14,'Lụa Châu ÂU','2014-08-24 12:15:09',NULL);
/*!40000 ALTER TABLE `nguyenlieu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nhien_lieu_doanh_nghiep`
--

DROP TABLE IF EXISTS `nhien_lieu_doanh_nghiep`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nhien_lieu_doanh_nghiep` (
  `colMa` int(11) NOT NULL AUTO_INCREMENT,
  `colCSSX` int(11) DEFAULT NULL,
  `colNam` int(4) DEFAULT NULL,
  `colNhienLieu` varchar(50) DEFAULT NULL,
  `colDonVi` varchar(50) DEFAULT NULL,
  `colLuongSD` float DEFAULT NULL,
  `colSoNgaySD` float DEFAULT NULL,
  `colMDichSD` varchar(300) DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`colMa`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nhien_lieu_doanh_nghiep`
--

LOCK TABLES `nhien_lieu_doanh_nghiep` WRITE;
/*!40000 ALTER TABLE `nhien_lieu_doanh_nghiep` DISABLE KEYS */;
INSERT INTO `nhien_lieu_doanh_nghiep` VALUES (3,66,2014,'than củi','tấn',900,153,'đốt','2014-08-26 09:54:06'),(4,66,2014,'than đá','tấn',900,365,'đốt lò phản ứng hạt nhân','2014-08-26 09:54:45'),(5,66,2014,'dfasd','ádf',3423,231,'***','2014-08-26 09:56:22'),(6,10,2014,'fasdf','ádf',324324,234,'4234','2014-08-29 22:24:31');
/*!40000 ALTER TABLE `nhien_lieu_doanh_nghiep` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nuoc_ngam_doanh_nghiep`
--

DROP TABLE IF EXISTS `nuoc_ngam_doanh_nghiep`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nuoc_ngam_doanh_nghiep` (
  `colMa` int(11) NOT NULL AUTO_INCREMENT,
  `colCSSX` int(11) DEFAULT NULL,
  `colNam` int(4) DEFAULT NULL,
  `colMaGK` varchar(50) DEFAULT NULL,
  `colViTri` varchar(50) DEFAULT NULL,
  `colX` float DEFAULT NULL,
  `colY` float DEFAULT NULL,
  `colCongSuat` varchar(100) DEFAULT NULL,
  `colLLuong` varchar(100) DEFAULT NULL,
  `colSoGiayPhep` varchar(50) DEFAULT NULL,
  `colGhiChu` tinytext,
  `created` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`colMa`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nuoc_ngam_doanh_nghiep`
--

LOCK TABLES `nuoc_ngam_doanh_nghiep` WRITE;
/*!40000 ALTER TABLE `nuoc_ngam_doanh_nghiep` DISABLE KEYS */;
INSERT INTO `nuoc_ngam_doanh_nghiep` VALUES (4,66,2014,'GKHK3','trung taam',23,234,'1234m3/h','1234m3/ngayf','','','2014-08-24 14:50:03'),(5,66,2014,'GKHK3','trung taam',23,234,'1234m3/h','1234m3/ngayf','','','2014-08-24 14:56:19'),(6,66,2014,'dfasdf','asdfsdf',24,234,'34324','23434','afsdf','asdfdf','2014-08-24 14:56:44'),(7,66,2014,'T6Y','terae78',234,78890,'436m3/h','436m3/h','GK2345','fjsdfj fasdhf fahsdfh','2014-08-24 14:59:45'),(8,10,2014,'fasdf','ádf',0,0,'ádf','ádf','ádf','df','2014-08-29 22:24:20');
/*!40000 ALTER TABLE `nuoc_ngam_doanh_nghiep` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nuoc_thai_nha_may`
--

DROP TABLE IF EXISTS `nuoc_thai_nha_may`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nuoc_thai_nha_may` (
  `colMa` int(11) NOT NULL AUTO_INCREMENT,
  `colCSSX` int(11) NOT NULL,
  `colThoiGian` datetime DEFAULT NULL,
  `colNguonThai` int(11) NOT NULL,
  `colLLuongThai` decimal(11,2) NOT NULL DEFAULT '0.00',
  `colNguonPSinh` varchar(500) DEFAULT NULL,
  `colLLXLyTK` decimal(11,2) NOT NULL DEFAULT '0.00',
  `colLLXLyTT` decimal(11,2) NOT NULL DEFAULT '0.00',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `colNguonNT` varchar(100) DEFAULT NULL,
  `colNam` int(4) DEFAULT NULL,
  PRIMARY KEY (`colMa`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nuoc_thai_nha_may`
--

LOCK TABLES `nuoc_thai_nha_may` WRITE;
/*!40000 ALTER TABLE `nuoc_thai_nha_may` DISABLE KEYS */;
INSERT INTO `nuoc_thai_nha_may` VALUES (35,66,'2014-08-12 00:00:00',1,23545.00,'kiểm tra',234.00,324.00,'2014-08-26 14:16:03',NULL,2014),(36,66,'2014-08-21 00:00:00',3,23434.00,'asdfsdfxcvvz g gdfgg',24.00,434.00,'2014-08-26 14:18:34',NULL,2014),(37,66,'2014-08-05 00:00:00',4,234.44,'dfadf fasdf',324.00,34.00,'2014-08-26 14:18:59',NULL,2014),(38,66,'2014-08-07 00:00:00',1,2332.34,'4rfesr fasd fsadfas fasdfa fsadfasdfasd fasdf',23434.00,234.45,'2014-08-26 14:19:25',NULL,2014),(40,66,'2014-08-08 00:00:00',1,2123.00,'121',121.00,12.00,'2014-08-26 15:06:16',NULL,2014),(41,10,'2014-08-20 00:00:00',3,21343.00,'fasdf',234324.00,234.00,'2014-08-29 22:25:16',NULL,2014);
/*!40000 ALTER TABLE `nuoc_thai_nha_may` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `quocgia`
--

DROP TABLE IF EXISTS `quocgia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `quocgia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tenquocgia` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `quocgia`
--

LOCK TABLES `quocgia` WRITE;
/*!40000 ALTER TABLE `quocgia` DISABLE KEYS */;
INSERT INTO `quocgia` VALUES (1,'Việt Nam'),(2,'Hàn Quốc'),(3,'Nhật Bản'),(4,'Singapore'),(5,'Malaysia'),(6,'Mỹ'),(7,'Anh'),(8,'Úc'),(9,'Thụy Điển'),(10,'Italy'),(11,'Đức'),(12,'Hà Lan'),(13,'Áo'),(14,'Brazil'),(15,'Pháp');
/*!40000 ALTER TABLE `quocgia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rac_thai_sinh_hoat`
--

DROP TABLE IF EXISTS `rac_thai_sinh_hoat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rac_thai_sinh_hoat` (
  `colMa` int(11) NOT NULL AUTO_INCREMENT,
  `colNam` datetime DEFAULT NULL,
  `colCSSX` int(11) DEFAULT NULL,
  `colDangCThai` varchar(100) DEFAULT NULL,
  `colTongKL` varchar(100) DEFAULT NULL,
  `colNguonPSinh` varchar(50) DEFAULT NULL,
  `colHThucLuu` varchar(50) DEFAULT NULL,
  `colBanRa` tinyint(1) DEFAULT NULL,
  `colThaiBo` tinyint(1) DEFAULT NULL,
  `colDViThuMua` varchar(50) DEFAULT NULL,
  `colDinhKyThuMua` varchar(50) DEFAULT NULL,
  `colThoiGian` datetime DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `colGhiChu` varchar(155) NOT NULL DEFAULT '',
  PRIMARY KEY (`colMa`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rac_thai_sinh_hoat`
--

LOCK TABLES `rac_thai_sinh_hoat` WRITE;
/*!40000 ALTER TABLE `rac_thai_sinh_hoat` DISABLE KEYS */;
INSERT INTO `rac_thai_sinh_hoat` VALUES (5,'0000-00-00 00:00:00',66,'dạng chất thải ','13 tấn','nguồn phát sinh chủ yếu','hình thức lưu giữ',1,1,'đơn vị thu mua ','mỗi ngày','2014-10-15 00:00:00','2014-08-28 21:07:22','ghi chú'),(6,'0000-00-00 00:00:00',66,'đồ cặn','123 m3/ngày','hoạt động nhà ăn tập thể','bỏ thùng và bọc rác',0,0,'','','2014-08-14 00:00:00','2014-08-28 21:10:53',''),(8,'0000-00-00 00:00:00',66,'rác thải sinh hoạt','132','fasjdfij','jfisjadfij',1,1,'ódojf',' ','2014-08-11 00:00:00','2014-08-28 21:28:32','jojfo');
/*!40000 ALTER TABLE `rac_thai_sinh_hoat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `san_pham_doanh_nghiep`
--

DROP TABLE IF EXISTS `san_pham_doanh_nghiep`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `san_pham_doanh_nghiep` (
  `colMa` int(11) NOT NULL AUTO_INCREMENT,
  `colCSSX` int(11) DEFAULT NULL,
  `stt` int(4) DEFAULT NULL,
  `colNam` int(4) DEFAULT NULL,
  `colSanPham` varchar(50) DEFAULT NULL,
  `colDVi` varchar(50) DEFAULT NULL,
  `colCongSuatTK` float DEFAULT NULL,
  `colCongSuatTT` float DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`colMa`)
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `san_pham_doanh_nghiep`
--

LOCK TABLES `san_pham_doanh_nghiep` WRITE;
/*!40000 ALTER TABLE `san_pham_doanh_nghiep` DISABLE KEYS */;
INSERT INTO `san_pham_doanh_nghiep` VALUES (1,61,NULL,0,'1','kg',5215,4584,NULL),(2,61,NULL,0,'1','kg',5215,4584,NULL),(3,61,NULL,0,'3','kg',5215,4584,NULL),(4,61,NULL,0,'3','kg',5215,4584,NULL),(5,61,NULL,0,'3','kg',5215,4584,NULL),(6,61,NULL,0,'3','kg',5215,4584,NULL),(7,61,NULL,0,'3','kg',5215,4584,NULL),(8,61,NULL,2014,'3','kg',5215,4584,NULL),(9,61,NULL,2014,'3','kg',5215,4584,NULL),(10,61,NULL,2014,'3','kg',5215,4584,NULL),(11,61,NULL,2014,'3','kg',5215,4584,NULL),(12,61,NULL,2014,'3','kg',5215,4584,NULL),(13,61,NULL,2014,'3','kg',5215,4584,NULL),(14,61,NULL,2014,'1','test',2005,2005,NULL),(15,62,NULL,2014,'1','test',1234,12345,NULL),(16,62,NULL,2014,'1','test',12,12,NULL),(17,62,NULL,2014,'1','teest',3,23,NULL),(18,62,NULL,2014,'3','tấn',3,23,NULL),(19,62,NULL,2014,'3','tấn',3,23,NULL),(20,62,NULL,2014,'3','teest',234,234,NULL),(21,62,NULL,2014,'4','cái',560000,898645,NULL),(22,62,NULL,2014,'3','cái',3000,3500,NULL),(23,62,NULL,2014,'2','test',2,2,NULL),(24,62,NULL,2014,'2','test',2,2,NULL),(25,62,NULL,2014,'2','cái',5230,4564,NULL),(26,62,NULL,2014,'3','test',1323,123,NULL),(27,62,NULL,2014,'3','test',2313,12323,NULL),(28,62,NULL,2014,'2','tét',2,2,NULL),(29,62,NULL,2014,'1','kai',234,23434,NULL),(30,62,NULL,2014,'2','áo thun nè',214,234,'2014-08-23 11:58:12'),(31,62,NULL,2014,'1','bao',89,90,'2014-08-23 12:05:53'),(32,62,NULL,2014,'1','bao',89,90,'2014-08-23 12:05:56'),(33,62,NULL,2014,'1','bao',89,90,'2014-08-23 12:05:57'),(34,62,NULL,2014,'1','bao',89,90,'2014-08-23 12:05:58'),(35,62,NULL,2014,'1','bao',89,90,'2014-08-23 12:05:59'),(36,62,NULL,2014,'1','bao',89,90,'2014-08-23 12:05:59'),(37,62,NULL,2014,'1','bao',89,90,'2014-08-23 12:06:19'),(38,62,NULL,2014,'1','bao',89,90,'2014-08-23 12:07:23'),(39,62,NULL,2014,'4','cái',54454,54564,'2014-08-23 12:07:58'),(40,64,NULL,2014,'2','teest',2123,123,'2014-08-24 03:53:25'),(41,64,NULL,2014,'14','teest',3,2,'2014-08-24 06:02:38'),(45,65,NULL,2014,'35','m',2432540,2342540,'2014-08-24 09:05:12'),(47,66,NULL,2014,'15','m',1000000,1500000,'2014-08-24 12:42:25'),(48,66,NULL,2014,'35','tấn',3000,3100,'2014-08-24 12:42:44'),(49,16,NULL,2014,'50','tấn',3423,324,'2014-08-29 21:58:39'),(51,10,NULL,2014,'48','teest',234,234,'2014-08-29 22:23:39'),(52,86,NULL,2014,'48','tấn',3000,3500,'2014-09-06 16:27:08'),(53,86,NULL,2014,'45','cái',200,210,'2014-09-06 16:28:56'),(54,86,NULL,2014,'31','cái',324,324,'2014-09-06 16:30:16'),(55,71,1,NULL,'39','cái',1000,1000,'2014-09-08 04:04:18'),(57,71,2,NULL,'34','cái',123,123,'2014-09-08 04:09:13'),(59,71,3,NULL,'31','cái',5484,5484,'2014-09-08 04:42:49'),(64,72,1,NULL,'39','cái',10000,10000,'2014-09-08 05:03:38'),(65,72,2,NULL,'48','cái',10000,10000,'2014-09-08 05:03:57');
/*!40000 ALTER TABLE `san_pham_doanh_nghiep` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sanpham`
--

DROP TABLE IF EXISTS `sanpham`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tensanpham` varchar(100) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(1) DEFAULT NULL,
  `create_by` varchar(50) DEFAULT NULL,
  `update_by` varchar(45) DEFAULT NULL,
  `danhmuc_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sanpham`
--

LOCK TABLES `sanpham` WRITE;
/*!40000 ALTER TABLE `sanpham` DISABLE KEYS */;
INSERT INTO `sanpham` VALUES (31,'Chiếu tre',NULL,'2014-08-24 12:35:22','2014-08-24 05:35:22',NULL,'admin-tisemiz',NULL,17),(34,'Bình hoa',NULL,'2014-08-24 12:39:00','2014-08-24 05:39:00',NULL,'admin-tisemiz',NULL,17),(36,'Áo Polo',NULL,'2014-08-24 15:17:35','2014-08-24 08:17:35',NULL,'admin-tisemiz',NULL,18),(37,'Áo Polo',NULL,'2014-08-24 15:23:24','2014-08-24 08:23:24',NULL,'admin-tisemiz',NULL,18),(38,'Áo Polo',NULL,'2014-08-24 15:25:05','2014-08-24 08:25:05',NULL,'admin-tisemiz',NULL,18),(39,'Áo Sơ Mi',NULL,'2014-08-24 15:44:39','2014-08-24 08:44:39',NULL,'admin-tisemiz',NULL,18),(42,'Ống PVC ',NULL,'2014-08-24 15:46:26','2014-08-24 08:47:45',NULL,'admin-tisemiz','admin-tisemiz',18),(43,'Ống PVC ',NULL,'2014-08-24 15:47:22','2014-08-24 08:47:22',NULL,'admin-tisemiz',NULL,18),(44,'Ống PVC ô',NULL,'2014-08-24 15:47:37','2014-08-24 08:47:37',NULL,'admin-tisemiz',NULL,18),(45,'Tượng phật',NULL,'2014-08-24 15:52:02','2014-08-24 08:52:02',NULL,'admin-tisemiz',NULL,16),(46,'Tỳ Hưu',NULL,'2014-08-24 15:52:11','2014-08-24 08:52:11',NULL,'admin-tisemiz',NULL,16),(47,'Tượng Đá',NULL,'2014-08-24 15:52:34','2014-08-24 08:52:34',NULL,'admin-tisemiz',NULL,16),(48,'Túi Nylon',NULL,'2014-08-24 15:54:00','2014-08-24 08:58:16',NULL,'admin-tisemiz','admin-tisemiz',13),(50,'Túi nhựa',NULL,'2014-08-24 15:57:53','2014-08-24 08:58:56',NULL,'admin-tisemiz','admin-tisemiz',13);
/*!40000 ALTER TABLE `sanpham` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `thong_tin_kien_nghi_bvmt`
--

DROP TABLE IF EXISTS `thong_tin_kien_nghi_bvmt`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `thong_tin_kien_nghi_bvmt` (
  `colMa` int(11) NOT NULL AUTO_INCREMENT,
  `colCSSX` int(11) NOT NULL,
  `colKiennghi` longtext,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`colMa`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `thong_tin_kien_nghi_bvmt`
--

LOCK TABLES `thong_tin_kien_nghi_bvmt` WRITE;
/*!40000 ALTER TABLE `thong_tin_kien_nghi_bvmt` DISABLE KEYS */;
INSERT INTO `thong_tin_kien_nghi_bvmt` VALUES (12,66,'<p>d&agrave;dsf</p>','2014-08-29 20:48:01'),(13,66,'<p>d&agrave;dsf</p>','2014-08-29 20:49:28'),(14,66,'<p>d&agrave;dsf</p>','2014-08-29 20:49:47'),(15,66,'<p>fasdfa fasdf</p>\r\n<p>&aacute;df</p>\r\n<p>fasdf</p>','2014-08-29 20:55:56'),(16,66,'<p>fkasod fjasdjf fasdfh fhasdf</p>\r\n<p>fasd;pfasdf</p>\r\n<p>test kien nghi luu lai trong session</p>\r\n<p>test th&ecirc;m&nbsp;</p>\r\n<p>lại test</p>\r\n<p>&nbsp;test plan 1</p>\r\n<p>test lan 2</p>\r\n<p>test plan 3</p>','2014-08-29 21:08:21'),(17,16,'<p>fasd fasdf fsa</p>','2014-08-29 22:01:25'),(18,10,'<p>cvzcvvzxcv</p>','2014-08-29 22:02:32'),(19,10,'<p>fdzcfxf</p>','2014-08-29 22:25:46'),(20,68,'<p>fasdf fasdf</p>','2014-08-29 22:26:43'),(21,69,'<p>gsdfgsdfg</p>','2014-08-29 22:44:11'),(22,10,'<p>kiến nghị&nbsp;bảo vệ m&ocirc;i trường c&ocirc;ng ty tiến ph&aacute;t</p>','2014-09-06 18:21:34'),(23,70,'<p>kiến nghị</p>','2014-09-06 18:27:54'),(24,70,'<p>kiến nghị</p>','2014-09-06 18:35:28'),(25,86,'<p>kiến nghị</p>','2014-09-06 18:36:06'),(26,87,'<p>kiến nghị</p>','2014-09-06 18:36:48'),(27,10,'<p>kiến ngị</p>','2014-09-06 18:37:20');
/*!40000 ALTER TABLE `thong_tin_kien_nghi_bvmt` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `thong_tin_tuan_thu_bvmt`
--

DROP TABLE IF EXISTS `thong_tin_tuan_thu_bvmt`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `thong_tin_tuan_thu_bvmt` (
  `colMa` int(11) NOT NULL AUTO_INCREMENT,
  `colTentailieu` varchar(50) DEFAULT NULL,
  `colStt` int(11) NOT NULL DEFAULT '0',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`colMa`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `thong_tin_tuan_thu_bvmt`
--

LOCK TABLES `thong_tin_tuan_thu_bvmt` WRITE;
/*!40000 ALTER TABLE `thong_tin_tuan_thu_bvmt` DISABLE KEYS */;
INSERT INTO `thong_tin_tuan_thu_bvmt` VALUES (1,'Luật bảo vệ môi trường 2005',1,'2014-08-28 21:47:56'),(2,'\"Sổ đăng ký nguồn thải\" chất nguy hại',2,'2014-08-28 21:47:56'),(3,'Quy chế quản lý nhà nước về môi trường đối với các',3,'2014-08-28 21:47:56'),(4,'Nghị Định 81/2006/NĐ-CP',4,'2014-08-28 21:47:56'),(5,'Lập hồ sơ để được cấp Chứng nhận đạt tiêu chuẩn mô',5,'2014-08-28 21:48:10'),(6,'Lập hồ sơ báo cáo nghiệm thu môi trường',6,'2014-08-28 21:48:10'),(7,'Kê khai và nộp phí bảo vệ môi trường đối với nước ',7,'2014-08-28 21:48:10'),(8,'Chứng nhận ISO9000',8,'2014-08-28 21:48:10'),(9,'Chứng nhận HACCAP',9,'2014-08-28 21:48:10'),(10,'Triển khai sản xuất sach hơn',10,'2014-08-28 21:48:10'),(11,'Các hoạt động khác',11,'2014-08-28 21:48:10');
/*!40000 ALTER TABLE `thong_tin_tuan_thu_bvmt` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tinhhinhsxkd`
--

DROP TABLE IF EXISTS `tinhhinhsxkd`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tinhhinhsxkd` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stt` int(4) NOT NULL DEFAULT '0',
  `tennguyenlieu` varchar(100) NOT NULL,
  `donvi` varchar(100) DEFAULT NULL,
  `quy1` float DEFAULT NULL,
  `quy2` float DEFAULT NULL,
  `quy3` float DEFAULT NULL,
  `quy4` float DEFAULT NULL,
  `tong` float DEFAULT NULL,
  `chucnang` varchar(255) DEFAULT NULL,
  `id_bc` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tinhhinhsxkd`
--

LOCK TABLES `tinhhinhsxkd` WRITE;
/*!40000 ALTER TABLE `tinhhinhsxkd` DISABLE KEYS */;
INSERT INTO `tinhhinhsxkd` VALUES (1,1,'gỗ','g',12,12,12,12,48,NULL,1),(2,2,'coppha','g',12,12,12,12,48,NULL,1),(3,3,'keo glue','kg',24532,35353,3525,325,63735,NULL,1);
/*!40000 ALTER TABLE `tinhhinhsxkd` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` tinyint(1) DEFAULT '0',
  `role` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username_UNIQUE` (`username`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (2,'huynhsonca','huynhsonca@gmail.com','85496c56aa43cc81deb09c6dff14abc8c29aaeb5d6d2a1f4fc1fe22fe0a3ad85',1,NULL),(3,'admin','cahiepsi@yahoo.com','85496c56aa43cc81deb09c6dff14abc8c29aaeb5d6d2a1f4fc1fe22fe0a3ad85',0,NULL),(4,'administrator','admin@tisemiz.com.vn','196832cbf926cee7d42abca03703fc143409a2cac7fbbab6781b75fa24ac57d4',0,NULL),(5,'user1','user1@tabikobo.com','d698cbf30c0d9e7442dadbd1f60485bc35d56df63c712ec22a3ff2b9ee9ac6d2',0,NULL),(6,'testuser','titi@gmail.com','a1eb3b4e81fa4fc3fa1b753a274030e1dcd9d22cc4ca39b326f6b312221703fe',0,NULL),(7,'user2','user2@gmail.com','f7fc6d320b5d2cefb2d7916ebf0bbb0b39b60d3a6aa5cd48e8f1d9efd0ede3b8',0,NULL),(9,'user3','user3@gmail.com','85496c56aa43cc81deb09c6dff14abc8c29aaeb5d6d2a1f4fc1fe22fe0a3ad85',0,NULL),(10,'huynhsonca1','huynhsonca1@gmail.com','0dfae5cb2187dc41db639e448427ee2a499b609efbb9f876309d33a3df8c3f1e',0,NULL),(11,'huynhsonca2','huynhsonca2@gmail.com','dfdada88f9528afceb3e0f67bb2c10b8829f6e0bbafee1cd6691436070414ac7',0,NULL),(12,'huynhsonca434','huynhsonca4@gmail.com','09c0a0ee235d86a68473895b76973112c780f4116570ac0708fde16419121f7a',0,NULL),(13,'admin-admin','admin@gmail.com','09dc3a96f528b7a4f99c6307da3b96b4e69f48b2058614475caf3d1d53905a6a',0,NULL),(14,'huynhsonca3','huynhsonca3@gmail.com','12e4c8bc5df9f3d0683ce005f14ff38b8523c9ae3fbf833d5b74bddca616d024',0,NULL),(15,'huynhsonca5','huynhsonca5@gmail.com','12e4c8bc5df9f3d0683ce005f14ff38b8523c9ae3fbf833d5b74bddca616d024',0,NULL),(16,'admin-tisemiz','admin@tisemiz.com','caf44f0c6cee8d9c398a07a1cbd0a05e998931778c69cb877a34799ebe2d3fac',1,NULL);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vanbanphapquy`
--

DROP TABLE IF EXISTS `vanbanphapquy`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vanbanphapquy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kyhieu` varchar(50) NOT NULL,
  `ngayky` datetime DEFAULT NULL,
  `ngayhieuluc` datetime DEFAULT NULL,
  `ngaybanhanh` datetime DEFAULT NULL,
  `ngayhethieuluc` datetime DEFAULT NULL,
  `coquanbanhanh` varchar(100) DEFAULT NULL,
  `nguon` varchar(50) DEFAULT NULL,
  `tukhoa` varchar(500) DEFAULT NULL,
  `tukhoalienquan` varchar(500) DEFAULT NULL,
  `noidung` varchar(500) DEFAULT NULL,
  `ghichu` varchar(500) DEFAULT NULL,
  `nguoiky` varchar(100) DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `url` varchar(500) DEFAULT NULL,
  `mota` varchar(500) DEFAULT NULL,
  `kichthuoc` varchar(100) DEFAULT NULL,
  `solantai` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vanbanphapquy`
--

LOCK TABLES `vanbanphapquy` WRITE;
/*!40000 ALTER TABLE `vanbanphapquy` DISABLE KEYS */;
/*!40000 ALTER TABLE `vanbanphapquy` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `xu_ly_khi_thai_doanh_nghiep`
--

DROP TABLE IF EXISTS `xu_ly_khi_thai_doanh_nghiep`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `xu_ly_khi_thai_doanh_nghiep` (
  `colMa` int(11) NOT NULL AUTO_INCREMENT,
  `colNam` int(4) NOT NULL,
  `colCSSX` int(11) NOT NULL,
  `colMaNguonThai` int(11) NOT NULL,
  `colNguonPSinh` varchar(500) NOT NULL,
  `colChuaXLy` tinyint(1) NOT NULL DEFAULT '0',
  `colOngKhoi` tinyint(1) NOT NULL DEFAULT '0',
  `colHapPhu` tinyint(1) NOT NULL DEFAULT '0',
  `colHapThu` tinyint(1) NOT NULL DEFAULT '0',
  `colBienPhapKhac` tinyint(1) NOT NULL DEFAULT '0',
  `colMotaBienPhapKhac` varchar(200) NOT NULL DEFAULT '',
  `colGhiChu` varchar(200) DEFAULT NULL,
  `colThoiGian` datetime DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`colMa`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `xu_ly_khi_thai_doanh_nghiep`
--

LOCK TABLES `xu_ly_khi_thai_doanh_nghiep` WRITE;
/*!40000 ALTER TABLE `xu_ly_khi_thai_doanh_nghiep` DISABLE KEYS */;
INSERT INTO `xu_ly_khi_thai_doanh_nghiep` VALUES (15,2014,66,1,'fdasdfasdf',1,1,0,0,1,'fasdf','fasdf','2014-08-05 00:00:00','2014-08-27 22:28:44'),(16,2014,66,2,'tsafasfd',1,0,1,0,1,'fsdfa fasdfsd','fasdfasdf','2014-11-11 00:00:00','2014-08-27 22:29:01'),(17,2014,66,4,'fsadfa fasfdsdfaf',1,0,0,1,0,'ádfsdf','fasdfasdf','2014-08-07 00:00:00','2014-08-27 22:29:21');
/*!40000 ALTER TABLE `xu_ly_khi_thai_doanh_nghiep` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `xu_ly_nuoc_thai_doanh_nghiep`
--

DROP TABLE IF EXISTS `xu_ly_nuoc_thai_doanh_nghiep`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `xu_ly_nuoc_thai_doanh_nghiep` (
  `colMa` int(11) NOT NULL AUTO_INCREMENT,
  `colNam` int(4) NOT NULL,
  `colCSSX` int(11) NOT NULL,
  `colBPhapXL` varchar(50) NOT NULL,
  `colNTSHoat` tinyint(1) NOT NULL DEFAULT '0',
  `colNTSX` tinyint(1) NOT NULL DEFAULT '0',
  `colXLKT` tinyint(1) NOT NULL DEFAULT '0',
  `colLamNguoi` tinyint(1) NOT NULL DEFAULT '0',
  `colNguonKhac` tinyint(1) NOT NULL DEFAULT '0',
  `colMotaNguonKhac` varchar(200) NOT NULL DEFAULT '',
  `colGhiChu` tinytext NOT NULL,
  `colThoiGian` datetime DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`colMa`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `xu_ly_nuoc_thai_doanh_nghiep`
--

LOCK TABLES `xu_ly_nuoc_thai_doanh_nghiep` WRITE;
/*!40000 ALTER TABLE `xu_ly_nuoc_thai_doanh_nghiep` DISABLE KEYS */;
INSERT INTO `xu_ly_nuoc_thai_doanh_nghiep` VALUES (5,2014,66,'5',1,0,0,0,0,'','','2014-08-17 00:00:00','2014-08-26 15:31:52'),(6,2014,66,'4',1,1,0,0,0,'','tet','2014-08-23 00:00:00','2014-08-26 15:33:04'),(7,2014,66,'8',0,0,1,0,1,'testestaet aseta tet','testta taset','2014-09-09 00:00:00','2014-08-26 15:33:26'),(8,2014,66,'7',1,1,1,1,1,'nguon khac','ghi chu','2014-08-20 00:00:00','2014-08-26 15:38:04'),(9,2014,66,'11',1,1,1,1,1,'tes','tsat','2014-08-05 00:00:00','2014-08-26 15:39:07'),(10,2014,66,'4',1,1,1,1,1,'dsfadf','dfa fasdfasdfas34wq4','2014-09-02 00:00:00','2014-08-26 15:41:44'),(11,2014,10,'3',1,1,1,0,0,'','fdf','2014-08-14 00:00:00','2014-08-29 22:25:31');
/*!40000 ALTER TABLE `xu_ly_nuoc_thai_doanh_nghiep` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `xu_ly_tieng_on_rung`
--

DROP TABLE IF EXISTS `xu_ly_tieng_on_rung`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `xu_ly_tieng_on_rung` (
  `colMa` int(11) NOT NULL AUTO_INCREMENT,
  `colNam` int(4) DEFAULT NULL,
  `colCSSX` int(11) DEFAULT NULL,
  `colNguonGayOn` int(11) NOT NULL,
  `colNguonPSinh` varchar(50) NOT NULL,
  `colKhongXLy` tinyint(1) DEFAULT NULL,
  `colCheChan` tinyint(1) DEFAULT NULL,
  `colBocCachAm` tinyint(1) DEFAULT NULL,
  `colBienPhapKhac` tinyint(1) DEFAULT NULL,
  `colMoTaBienPhapKhac` varchar(450) NOT NULL DEFAULT '',
  `colThoiGian` datetime DEFAULT NULL,
  `colGhiChu` varchar(450) NOT NULL DEFAULT '',
  `created` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`colMa`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `xu_ly_tieng_on_rung`
--

LOCK TABLES `xu_ly_tieng_on_rung` WRITE;
/*!40000 ALTER TABLE `xu_ly_tieng_on_rung` DISABLE KEYS */;
INSERT INTO `xu_ly_tieng_on_rung` VALUES (5,2014,66,2,'ffasd fsdffsdf fsdf sfadf fasdf',1,0,0,1,'','2014-06-16 00:00:00','tsaetesaasghi','2014-08-28 19:04:20'),(6,2014,66,2,'nguồn phát sinh chủ yếu',1,1,0,1,'tesstttttt mô tả','2014-06-25 00:00:00','test ghi chú','2014-08-28 19:08:04'),(7,2014,66,2,'fsadf fasdf',1,1,1,1,'ffasdf f','2014-08-14 00:00:00','sadfasdf','2014-08-28 19:09:28');
/*!40000 ALTER TABLE `xu_ly_tieng_on_rung` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-09-12 18:48:48
