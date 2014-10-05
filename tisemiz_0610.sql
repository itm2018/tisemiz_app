-- MySQL dump 10.13  Distrib 5.6.7-rc, for osx10.7 (i386)
--
-- Host: localhost    Database: tisemiz
-- ------------------------------------------------------
-- Server version	5.6.7-rc

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aros`
--

LOCK TABLES `aros` WRITE;
/*!40000 ALTER TABLE `aros` DISABLE KEYS */;
INSERT INTO `aros` VALUES (1,NULL,'User',20,NULL,1,2);
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
  `updated_date` timestamp NULL DEFAULT NULL,
  `tungay` date NOT NULL,
  `denngay` date NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`colMa`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `baocaochatthainguyhai`
--

LOCK TABLES `baocaochatthainguyhai` WRITE;
/*!40000 ALTER TABLE `baocaochatthainguyhai` DISABLE KEYS */;
INSERT INTO `baocaochatthainguyhai` VALUES (12,81,0,'2014-09-22 19:40:05',NULL,'0000-00-00','0000-00-00',1),(13,81,0,'2014-09-22 19:41:27',NULL,'0000-00-00','0000-00-00',1),(14,70,0,'2014-09-22 20:20:38',NULL,'0000-00-00','0000-00-00',1),(15,70,0,'2014-10-06 01:30:22',NULL,'0000-00-00','0000-00-00',1);
/*!40000 ALTER TABLE `baocaochatthainguyhai` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `baocaochatthainguyhai_coso`
--

DROP TABLE IF EXISTS `baocaochatthainguyhai_coso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `baocaochatthainguyhai_coso` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `colMaBaocao` int(11) NOT NULL,
  `colMaCoso` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `baocaochatthainguyhai_coso`
--

LOCK TABLES `baocaochatthainguyhai_coso` WRITE;
/*!40000 ALTER TABLE `baocaochatthainguyhai_coso` DISABLE KEYS */;
/*!40000 ALTER TABLE `baocaochatthainguyhai_coso` ENABLE KEYS */;
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
INSERT INTO `bien_phap_xu_ly_nuoc_thai` VALUES (1,'Xả vào tuyến nước mưa'),(2,'Xả vào tuyến mước bẩn'),(3,'Xả vào tuyến cống chung'),(4,'Tuyến nổi'),(5,'Lắng'),(6,'Keo tụ'),(7,'Lọc'),(8,'Sinh học kỵ khí'),(9,'Sinh học hiếu khí'),(10,'Khử trùng'),(11,'Ép bùn'),(12,'Khác');
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
  `is_tonluu` tinyint(1) NOT NULL DEFAULT '0',
  `is_phatsinhthuongxuyen` tinyint(1) NOT NULL DEFAULT '0',
  `is_tuxuly` tinyint(1) NOT NULL DEFAULT '0',
  `phuonganxuly` varchar(1000) DEFAULT NULL,
  `mucdoxuly` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`colMa`)
) ENGINE=InnoDB AUTO_INCREMENT=138 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chat_thai_nguy_hai`
--

LOCK TABLES `chat_thai_nguy_hai` WRITE;
/*!40000 ALTER TABLE `chat_thai_nguy_hai` DISABLE KEYS */;
INSERT INTO `chat_thai_nguy_hai` VALUES (3,'0000-00-00 00:00:00',66,'test','trasetj','jasjdf','jsdfj',1,0,'fsdjofj','jfosjdf','jfsodjf','2014-08-07 00:00:00','2014-08-28 21:40:15',NULL,NULL,NULL,0,0,0,NULL,NULL),(4,'0000-00-00 00:00:00',10,'chất thải rắn','100','chất thải rắn','lưu',1,0,'','','','2014-08-06 00:00:00','2014-09-12 11:32:05',NULL,NULL,NULL,0,0,0,NULL,NULL),(5,NULL,71,'Cặn thải có khả năng sinh axit từ quá trình chế biến quặng sunfua coloruan','1200',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-12 11:31:40','010101','Rắn',1,0,0,0,NULL,NULL),(6,NULL,71,'Các loại cặn thải khác có chứa các thành phần nguy hại','123',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-12 11:31:40','010102','Rắn/lỏng/bùn',2,0,0,0,NULL,NULL),(7,NULL,71,'Chất thải có chứa các thành phần nguy hại từ quá trình chế biến quặng sắt','1234',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-12 11:31:40','010103','Rắn/lỏng/bùn',3,0,0,0,NULL,NULL),(53,NULL,72,'Chất thải có chứa các thành phần nguy hại từ quá trình chế biến quặng kim loại màu bằng phương pháp ','1245',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-12 11:44:40','010201','Rắn/lỏng/bùn',1,0,0,0,NULL,NULL),(56,NULL,72,'Axit sunfuric và axit sunfurơ thải','12',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-13 04:04:25','020101','Rắn/lỏng/bùn',1,0,0,0,NULL,NULL),(57,NULL,72,'Axit clohydric thải','12',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-13 04:04:25','020102','Rắn/lỏng/bùn',2,0,0,0,NULL,NULL),(58,NULL,72,'Axit flohydric thải','3',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-13 04:04:25','020103','Rắn/lỏng/bùn',3,0,0,0,NULL,NULL),(59,NULL,72,'Axit photphoric và axit photphorơ thải','34',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-13 04:04:25','020104','Rắn/lỏng/bùn',4,0,0,0,NULL,NULL),(60,NULL,72,'Axit nitric và axit nitrơ thải','435',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-13 04:04:25','020105','Rắn/lỏng/bùn',5,0,0,0,NULL,NULL),(61,NULL,72,'Các loại axit thải khác','5345',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-13 04:04:25','020106','Rắn/lỏng/bùn',6,0,0,0,NULL,NULL),(62,NULL,71,'Axit sunfuric và axit sunfurơ thải','123',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-13 04:55:54','020101','Rắn/lỏng/bùn',4,0,0,0,NULL,NULL),(63,NULL,71,'Axit clohydric thải','3445',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-13 04:55:54','020102','Rắn/lỏng/bùn',5,0,0,0,NULL,NULL),(64,NULL,71,'Chất thải chứa asen','33455',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-13 04:56:39','020401','Rắn/lỏng',6,0,0,0,NULL,NULL),(65,NULL,71,'Chất thải có chứa các thành phần nguy hại từ quá trình chế biến quặng kim loại màu bằng phương pháp ','123',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-13 05:18:26','010201','Rắn/lỏng/bùn',1,1,0,0,NULL,NULL),(66,NULL,71,'Bùn thải và chất thải có chứa dầu từ quá trình khoan','1234',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-13 05:35:54','010301','Rắn/lỏng/bùn',2,1,0,0,NULL,NULL),(67,NULL,71,'Natri hydroxit và kali hydroxit thải','1324',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-13 05:46:21','020201','Rắn/lỏng/bùn',1,0,1,0,NULL,NULL),(68,NULL,71,'Các loại bazơ thải khác','4546',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-13 05:46:21','020202','Rắn/lỏng/bùn',2,0,1,0,NULL,NULL),(69,NULL,71,'Các loại hắc ín thải','123434',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-13 05:54:07','010501','Rắn/lỏng/bùn',3,0,1,0,NULL,NULL),(70,NULL,72,'chất thải tự xử lý 2','154',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-13 06:39:27','0115145','rắn',1,0,0,1,'đốt','triệt để'),(71,NULL,71,'chất thải tự xử lý','234',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-13 06:40:02','234','324',1,0,0,1,'ủ','sơ xài'),(73,NULL,80,'Cặn thải có khả năng sinh axit từ quá trình chế biến quặng sunfua','24',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-21 18:57:08','010101','Rắn/lỏng/bùn',1,0,0,0,NULL,NULL),(74,NULL,80,'Các loại cặn thải khác có chứa các thành phần nguy hại','23412',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-21 18:57:08','010102','Rắn/lỏng/bùn',2,0,0,0,NULL,NULL),(75,NULL,80,'Chất thải có chứa các thành phần nguy hại từ quá trình chế biến quặng sắt','434',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-21 18:57:08','010103','Rắn/lỏng/bùn',3,0,0,0,NULL,NULL),(76,NULL,80,'Chất thải có chứa thuỷ ngân','232',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-21 18:57:35','010601','Rắn/lỏng/bùn',1,0,1,0,NULL,NULL),(78,NULL,70,'Axit clohydric thải','134 tấn','song ngoi edit','1fasdfsdf',1,1,'fasdf','asdf','asdf','2014-09-12 00:00:00','2014-09-22 12:23:12','020102','Rắn/lỏng/bùn',2,1,0,0,NULL,NULL),(79,NULL,70,'Axit flohydric thải','4343','dfsasdf','asdfsadf',0,1,'','','','2014-01-12 00:00:00','2014-09-22 12:23:12','020103','Rắn/lỏng/bùn',3,1,0,0,NULL,NULL),(80,NULL,70,'Axit photphoric và axit photphorơ thải','434',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-22 12:23:12','020104','Rắn/lỏng/bùn',4,1,0,0,NULL,NULL),(81,NULL,70,'Axit nitric và axit nitrơ thải','343',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-22 12:23:12','020105','Rắn/lỏng/bùn',5,1,0,0,NULL,NULL),(82,NULL,70,'Các loại axit thải khác','43434',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-22 12:23:12','020106','Rắn/lỏng/bùn',6,1,0,0,NULL,NULL),(86,NULL,81,'Bùn thải từ thiết bị khử muối','12',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-22 12:44:40','010401','Rắn/lỏng/bùn',1,0,0,0,NULL,NULL),(87,NULL,81,'Bùn đáy bể','323',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-22 12:44:40','010402','Rắn/lỏng/bùn',2,0,0,0,NULL,NULL),(88,NULL,81,'Bùn thải chứa axit','232',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-22 12:44:40','010403','Rắn/lỏng/bùn',3,0,0,0,NULL,NULL),(89,NULL,81,'Dầu tràn','232',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-22 12:44:40','010404','Rắn/lỏng/bùn',4,0,0,0,NULL,NULL),(90,NULL,81,'Bùn thải có chứa dầu từ hoạt động bảo dưỡng cơ sở, máy móc, trang thiết bị','5654',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-22 12:44:40','010405','Rắn/lỏng/bùn',5,0,0,0,NULL,NULL),(91,NULL,81,'Các loại hắc ín thải','ưer',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-22 12:44:40','010406','Rắn/lỏng/bùn',6,0,0,0,NULL,NULL),(92,NULL,81,'Bùn thải có chứa các thành phần nguy hại từ quá trình xử lý nước thải','rưer',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-22 12:44:40','010407','Rắn/lỏng/bùn',7,0,0,0,NULL,NULL),(93,NULL,81,'Chất thải từ quá trình làm sạch nhiên liệu bằng bazơ','12323',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-22 12:44:40','010408','Rắn/lỏng/bùn',8,0,0,0,NULL,NULL),(94,NULL,81,'Dầu thải chứa axit','34234',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-22 12:44:40','010409','Rắn/lỏng/bùn',9,0,0,0,NULL,NULL),(95,NULL,81,'Vật liệu lọc bằng đất sét đã qua sử dụng','234',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-22 12:44:40','010410','Rắn/lỏng/bùn',10,0,0,0,NULL,NULL),(96,NULL,81,'Cặn thải có khả năng sinh axit từ quá trình chế biến quặng sunfua','12',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-22 12:44:58','010101','Rắn/lỏng/bùn',11,0,0,0,NULL,NULL),(97,NULL,81,'Các loại cặn thải khác có chứa các thành phần nguy hại','324',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-22 12:44:58','010102','Rắn/lỏng/bùn',12,0,0,0,NULL,NULL),(98,NULL,81,'Chất thải có chứa các thành phần nguy hại từ quá trình chế biến quặng sắt','545',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-22 12:44:58','010103','Rắn/lỏng/bùn',13,0,0,0,NULL,NULL),(99,NULL,81,'Chất thải có chứa các thành phần nguy hại từ quá trình chế biến quặng kim loại màu bằng phương pháp ','123',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-22 12:45:27','010201','Rắn/lỏng/bùn',1,0,1,0,NULL,NULL),(100,NULL,81,'Axit sunfuric và axit sunfurơ thải','34234',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-22 12:45:27','020101','Rắn/lỏng/bùn',2,0,1,0,NULL,NULL),(101,NULL,81,'Axit clohydric thải','234',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-22 12:45:27','020102','Rắn/lỏng/bùn',3,0,1,0,NULL,NULL),(102,NULL,81,'Axit flohydric thải','324',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-22 12:45:27','020103','Rắn/lỏng/bùn',4,0,1,0,NULL,NULL),(103,NULL,81,'Axit photphoric và axit photphorơ thải','234',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-22 12:45:27','020104','Rắn/lỏng/bùn',5,0,1,0,NULL,NULL),(104,NULL,81,'Axit nitric và axit nitrơ thải','234',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-22 12:45:27','020105','Rắn/lỏng/bùn',6,0,1,0,NULL,NULL),(105,NULL,81,'Các loại axit thải khác','545',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-22 12:45:27','020106','Rắn/lỏng/bùn',7,0,1,0,NULL,NULL),(106,NULL,81,'Chất thải có chứa các thành phần nguy hại từ quá trình chế biến quặng kim loại màu bằng phương pháp ','343',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-22 12:45:53','010201','Rắn/lỏng/bùn',1,1,0,0,NULL,NULL),(107,NULL,81,'rác thải nhà máy','8989',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-22 12:46:23','','rắn/ bùn',1,0,0,1,'đốt ','sơ chế'),(108,NULL,81,'bùn đáy','5644',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-22 12:48:00','','bùn',2,0,0,1,'hút và phơi đáy','toàn bộ'),(109,NULL,88,'Bùn thải từ thiết bị khử muối','23',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-22 13:18:19','010401','Rắn/lỏng/bùn',1,0,0,0,NULL,NULL),(110,NULL,88,'Bùn đáy bể','2323',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-22 13:18:19','010402','Rắn/lỏng/bùn',2,0,0,0,NULL,NULL),(111,NULL,88,'Bùn thải chứa axit','2323',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-22 13:18:19','010403','Rắn/lỏng/bùn',3,0,0,0,NULL,NULL),(112,NULL,88,'Dầu tràn','2323',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-22 13:18:19','010404','Rắn/lỏng/bùn',4,0,0,0,NULL,NULL),(113,NULL,88,'Bùn thải có chứa dầu từ hoạt động bảo dưỡng cơ sở, máy móc, trang thiết bị','23223',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-22 13:18:19','010405','Rắn/lỏng/bùn',5,0,0,0,NULL,NULL),(114,NULL,88,'Các loại hắc ín thải','23',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-22 13:18:19','010406','Rắn/lỏng/bùn',6,0,0,0,NULL,NULL),(115,NULL,88,'Bùn thải có chứa các thành phần nguy hại từ quá trình xử lý nước thải','45345',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-22 13:18:19','010407','Rắn/lỏng/bùn',7,0,0,0,NULL,NULL),(116,NULL,88,'Chất thải từ quá trình làm sạch nhiên liệu bằng bazơ','4534',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-22 13:18:19','010408','Rắn/lỏng/bùn',8,0,0,0,NULL,NULL),(117,NULL,88,'Dầu thải chứa axit','3454',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-22 13:18:20','010409','Rắn/lỏng/bùn',9,0,0,0,NULL,NULL),(118,NULL,88,'Vật liệu lọc bằng đất sét đã qua sử dụng','435',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-22 13:18:20','010410','Rắn/lỏng/bùn',10,0,0,0,NULL,NULL),(119,'0000-00-00 00:00:00',70,'chất thải tự xử lý 2','12','nhà máy','che chắn',1,1,'','','','2014-09-02 00:00:00','2014-09-22 15:37:59','0101','ran/long',1,0,0,0,NULL,NULL),(120,'0000-00-00 00:00:00',70,'Cặn thải có khả năng sinh axit từ quá trình chế biến quặng sunfua','12','fas fsdf ádf',' fsadfsdf',0,0,'','','','2014-10-22 00:00:00','2014-09-22 15:40:28','010101','teo',2,0,0,0,NULL,NULL),(121,'0000-00-00 00:00:00',70,'Cặn thải có khả năng sinh axit từ quá trình chế biến quặng sunfua coloruan','234324','rsfasf','f fasf',0,0,'','','','2014-07-02 00:00:00','2014-09-22 15:43:14',NULL,NULL,NULL,0,0,0,NULL,NULL),(122,'0000-00-00 00:00:00',70,'fasdf','fasdfasdf','ádf','ádfsdf',0,0,'','','','2014-09-11 00:00:00','2014-09-22 15:46:12',NULL,NULL,NULL,0,0,0,NULL,NULL),(126,'0000-00-00 00:00:00',70,'fasdf','ádf','ádf','ádf',0,0,'','','','2014-09-10 00:00:00','2014-09-22 15:59:02',NULL,NULL,NULL,0,0,0,NULL,NULL),(127,'0000-00-00 00:00:00',70,'fasdf','234324','fsadfas fasdfas','fasdfa fasdf',0,0,'','','','2014-09-04 00:00:00','2014-09-22 15:59:54',NULL,NULL,NULL,0,0,0,NULL,NULL),(132,'0000-00-00 00:00:00',70,'Cặn thải có khả năng sinh axit từ quá trình chế biến quặng sunfua','154','fasdf','asdfasdf',0,0,'','','','2014-10-21 00:00:00','2014-09-22 16:07:16',NULL,NULL,NULL,0,0,0,NULL,NULL),(133,'0000-00-00 00:00:00',70,'fasdf','asdfas','asdf','asdfasdf',0,0,'','','','2014-11-20 00:00:00','2014-09-22 16:12:48',NULL,NULL,NULL,0,0,0,NULL,NULL),(134,'0000-00-00 00:00:00',70,'chất thải tự xử lý 2','34','4234','asdfdsf',1,1,'','','','2014-09-17 00:00:00','2014-09-22 16:14:58',NULL,NULL,NULL,0,0,0,NULL,NULL),(135,'0000-00-00 00:00:00',71,'chất thải tự xử lý 2','24234','234234','2341234234',0,0,'','','','2014-09-11 00:00:00','2014-09-22 16:32:25',NULL,NULL,NULL,0,0,0,NULL,NULL),(137,'0000-00-00 00:00:00',70,'test','test','test','test',1,0,'test','test','test','2014-10-16 00:00:00','2014-10-05 16:46:27',NULL,NULL,NULL,0,0,0,NULL,NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chat_thai_ran_cong_nghiep`
--

LOCK TABLES `chat_thai_ran_cong_nghiep` WRITE;
/*!40000 ALTER TABLE `chat_thai_ran_cong_nghiep` DISABLE KEYS */;
INSERT INTO `chat_thai_ran_cong_nghiep` VALUES (2,'0000-00-00 00:00:00',66,'dạng chất thải rắn công nghiệp','13 tấn','sản xuất','lưu giữ vào kho',1,0,'cty môi trường xanh','hàng tuần','','2014-08-05 00:00:00','2014-08-28 21:23:21'),(4,'0000-00-00 00:00:00',66,'fkansf fasdf','fskdnf','jfksdf','hngdfg',1,0,' gdfgjopjsdfo','jsopdjfg','jgsdfgj','2014-09-16 00:00:00','2014-08-28 21:29:20'),(8,'0000-00-00 00:00:00',70,'fasdf','asdfa','sdfasdf','asdf',1,1,'fa sdfasdfasdfsdaf fasdf fasdf fsadfas df',' fasdfas fsadf ','fasdfasdfasdf f','2014-11-11 00:00:00','2014-10-05 15:01:53');
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
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `donvi` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hoten` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `chucvu` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diachi` varchar(450) COLLATE utf8_unicode_ci NOT NULL,
  `dienthoai` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `fax` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `tieude` varchar(455) COLLATE utf8_unicode_ci NOT NULL,
  `noidung` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact`
--

LOCK TABLES `contact` WRITE;
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
INSERT INTO `contact` VALUES (1,'','','','','','','','',''),(2,'','','','','','','','',''),(3,'','','','','','','','',''),(4,'','sadas','','fasdf','234324','','dfasdf@gmail.com','fasdf','fas fasd'),(5,'','sadas','','fasdf','234324','','dfasdf@gmail.com','fasdf','fas fasd'),(6,'','sadas','','fasdf','234324','','huynhsonca@gmail.com','fasdf','fas fasd'),(7,'','sadas','','fasdf','234324','','huynhsonca@gmail.com','fasdf','fas fasd'),(8,'','sadas','','fasdf','234324','','huynhsonca@gmail.com','fasdf','fas fasd'),(9,'','fasdf fas fasdf','fasd fsadf','fa fasdfa','896789','','huynhsonca@gmail.com','e234235','fasdfasdfa fasdf ádf'),(10,'ctu','Nguyen Van Tru','Tong Bi Thu','Ca Mau','089744546','0211454444','huynhsonca@gmail.com','Lien he','day la noi dung duoc lien he'),(11,'ctu','Nguyen Van Tru','Tong Bi Thu','Ca Mau','089744546','0211454444','huynhsonca@gmail.com','Lien he','day la noi dung duoc lien he'),(12,'ctu','Nguyen Van Tru','Tong Bi Thu','Ca Mau','089744546','0211454444','huynhsonca@gmail.com','Lien he','day la noi dung duoc lien he'),(13,'ctu','Nguyen Van Tru','Tong Bi Thu','Ca Mau','089744546','0211454444','huynhsonca@gmail.com','Lien he','day la noi dung duoc lien he'),(14,'test','Huynh Son Ca','manager','HCM','0214548','021545','huynhsonca@gmail.com','Ban san pham di ','A layout contains presentation code that wraps around a view. Anything you want to see in all of your views should be placed in a layout.\r\n\r\nCakePHP’s default layout is located at /app/View/Layouts/default.ctp. If you want to change the overall look of your application, then this is the right place to start, because controller-rendered view code is placed inside of the default layout when the page is rendered.\r\n\r\nOther layout files should be placed in /app/View/Layouts. When you create a layout, you need to tell CakePHP where to place the output of your views. To do so, make sure your layout includes a place for $this->fetch(\'content\') Here’s an example of what a default layout might look like:'),(15,'test','test','tset','Ca Mau','234324','0211454444','huynhsonca@gmail.com','423445','fasd fasdfasdfas fasdfsadf'),(16,'EVA','HUynh son ca','giam doc','HCM C','054878','15648478','huynhsonca@gmail.com','Can ho tro su dung','CakeEmail\r\nclass CakeEmail(mixed $config = null)\r\nCakeEmail is a new class to send email. With this class you can send email from any place in your application. In addition to using the EmailComponent from your controller, you can also send mail from Shells and Models.\r\n\r\nThis class replaces the EmailComponent and gives more flexibility in sending emails. For example, you can create your own transports to send email instead of using the provided SMTP and Mail transports.\r\n\r\nBasic usage\r\nFirst of all, you should ensure the class is loaded using App::uses():'),(17,'test','fasdf fas fasdf','fasd fsadf','fasdf','234324','34234','huynhsonca@gmail.com','ftestaetaset','CakeEmail\r\nclass CakeEmail(mixed $config = null)\r\nCakeEmail is a new class to send email. With this class you can send email from any place in your application. In addition to using the EmailComponent from your controller, you can also send mail from Shells and Models.\r\n\r\nThis class replaces the EmailComponent and gives more flexibility in sending emails. For example, you can create your own transports to send email instead of using the provided SMTP and Mail transports.\r\n\r\nBasic usage\r\nFirst of all, you should ensure the class is loaded using App::uses():CakeEmail\r\nclass CakeEmail(mixed $config = null)\r\nCakeEmail is a new class to send email. With this class you can send email from any place in your application. In addition to using the EmailComponent from your controller, you can also send mail from Shells and Models.\r\n\r\nThis class replaces the EmailComponent and gives more flexibility in sending emails. For example, you can create your own transports to send email instead of using the provided SMTP and Mail transports.\r\n\r\nBasic usage\r\nFirst of all, you should ensure the class is loaded using App::uses():CakeEmail\r\nclass CakeEmail(mixed $config = null)\r\nCakeEmail is a new class to send email. With this class you can send email from any place in your application. In addition to using the EmailComponent from your controller, you can also send mail from Shells and Models.\r\n\r\nThis class replaces the EmailComponent and gives more flexibility in sending emails. For example, you'),(18,'test','fasdf fas fasdf','fasd fsadf','fasdf','234324','34234','huynhsonca@gmail.com','ftestaetaset','CakeEmail\r\nclass CakeEmail(mixed $config = null)\r\nCakeEmail is a new class to send email. With this class you can send email from any place in your application. In addition to using the EmailComponent from your controller, you can also send mail from Shells and Models.\r\n\r\nThis class replaces the EmailComponent and gives more flexibility in sending emails. For example, you can create your own transports to send email instead of using the provided SMTP and Mail transports.\r\n\r\nBasic usage\r\nFirst of all, you should ensure the class is loaded using App::uses():CakeEmail\r\nclass CakeEmail(mixed $config = null)\r\nCakeEmail is a new class to send email. With this class you can send email from any place in your application. In addition to using the EmailComponent from your controller, you can also send mail from Shells and Models.\r\n\r\nThis class replaces the EmailComponent and gives more flexibility in sending emails. For example, you can create your own transports to send email instead of using the provided SMTP and Mail transports.\r\n\r\nBasic usage\r\nFirst of all, you should ensure the class is loaded using App::uses():CakeEmail\r\nclass CakeEmail(mixed $config = null)\r\nCakeEmail is a new class to send email. With this class you can send email from any place in your application. In addition to using the EmailComponent from your controller, you can also send mail from Shells and Models.\r\n\r\nThis class replaces the EmailComponent and gives more flexibility in sending emails. For example, you'),(19,'test','fasdf fas fasdf','fasd fsadf','fasdf','234324','34234','huynhsonca@gmail.com','ftestaetaset','CakeEmail\r\nclass CakeEmail(mixed $config = null)\r\nCakeEmail is a new class to send email. With this class you can send email from any place in your application. In addition to using the EmailComponent from your controller, you can also send mail from Shells and Models.\r\n\r\nThis class replaces the EmailComponent and gives more flexibility in sending emails. For example, you can create your own transports to send email instead of using the provided SMTP and Mail transports.\r\n\r\nBasic usage\r\nFirst of all, you should ensure the class is loaded using App::uses():CakeEmail\r\nclass CakeEmail(mixed $config = null)\r\nCakeEmail is a new class to send email. With this class you can send email from any place in your application. In addition to using the EmailComponent from your controller, you can also send mail from Shells and Models.\r\n\r\nThis class replaces the EmailComponent and gives more flexibility in sending emails. For example, you can create your own transports to send email instead of using the provided SMTP and Mail transports.\r\n\r\nBasic usage\r\nFirst of all, you should ensure the class is loaded using App::uses():CakeEmail\r\nclass CakeEmail(mixed $config = null)\r\nCakeEmail is a new class to send email. With this class you can send email from any place in your application. In addition to using the EmailComponent from your controller, you can also send mail from Shells and Models.\r\n\r\nThis class replaces the EmailComponent and gives more flexibility in sending emails. For example, you'),(20,'fasd','fasdasfdfas','fdasdfas','fasdfasdf','5345346','34563456','huynhsonca@gmail.com','fasdf','fasdfasdf');
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;
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
  `colThang` int(4) DEFAULT NULL,
  `colLoaiTThu` varchar(50) DEFAULT NULL,
  `colLuongSD` varchar(100) DEFAULT NULL,
  `colSoNgaySuDung` float DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `loai` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1: Điện, 2: Nước',
  PRIMARY KEY (`colMa`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dien_nuoc_doanh_nghiep`
--

LOCK TABLES `dien_nuoc_doanh_nghiep` WRITE;
/*!40000 ALTER TABLE `dien_nuoc_doanh_nghiep` DISABLE KEYS */;
INSERT INTO `dien_nuoc_doanh_nghiep` VALUES (4,66,2014,NULL,'234g','200',200,'2014-08-24 13:30:33',1),(5,66,2014,NULL,'324t','13',2334,'2014-08-24 13:36:16',1),(6,66,2014,NULL,'2345f','3',23545,'2014-08-24 13:36:54',1),(7,10,2014,NULL,'fasdf','dfasdf',123,'2014-08-29 22:24:02',1),(8,10,2014,1,'Điện','1232',2323,'2014-09-21 16:44:03',1),(9,10,2014,5,'nước','4334.32',23,'2014-09-21 16:45:49',1),(10,10,2014,1,'nước','4334.32',23,'2014-09-21 16:46:05',1),(11,71,2014,3,'dádf','23423',23423,'2014-09-22 16:31:04',1),(12,70,2014,2,'điện','1234kw',12,'2014-10-05 10:53:14',1),(15,70,2014,3,'tata','23.4',23.4,'2014-10-05 17:51:20',2),(16,70,2014,3,'nước','123',3123,'2014-10-05 17:53:00',2);
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
  `colQTrinhSX` longtext,
  `colMoTaKT` longtext,
  `colMoTaNT` longtext,
  `colMoTaRT` longtext,
  `colGhiChu` longtext,
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
  `thongtinkiennghibvmt` longtext,
  `colMaDNME` int(11) DEFAULT NULL,
  `colMaQLCTNH` varchar(45) DEFAULT NULL,
  `lacanhan` tinyint(1) NOT NULL DEFAULT '0',
  `ngaycapchungnhanKDDT` datetime DEFAULT NULL,
  `noicapchungnhanKDDT` varchar(45) DEFAULT NULL,
  `cmndgiamdoc` varchar(45) DEFAULT NULL,
  `ngaycapcmndgiamdoc` datetime DEFAULT NULL,
  `noicapcmndgiamdoc` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`colMa`)
) ENGINE=InnoDB AUTO_INCREMENT=90 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doanh_nghiep`
--

LOCK TABLES `doanh_nghiep` WRITE;
/*!40000 ALTER TABLE `doanh_nghiep` DISABLE KEYS */;
INSERT INTO `doanh_nghiep` VALUES (70,'Tân Lợi Ltd','fasdf','KCN Bình Điền, Q. Bình Thạnh','08234235','4233','huynhsonca@gmail.com','32454467','Vietcombank',NULL,NULL,'2000-01-01 00:00:00','','',1,4,3,4,NULL,NULL,NULL,NULL,'',1,'',NULL,NULL,NULL,NULL,'/uploads/220520101225.jpg',2014,0,'Trần Cao','Cao Lỗ','0123457799','HCM','',NULL,16,1,NULL,70,'',1,'2014-09-16 00:00:00','','264878897','2014-09-16 00:00:00','HCM'),(71,'Công ty TNHH Tiến Phát 2','','Lô số 3, KCN Tân Bình, Quận Tân Bình, Tp. HCM3','(08)3456345','','tienphat2@gmail.com','',NULL,NULL,NULL,'2014-01-01 00:00:00',NULL,'',1,1,NULL,NULL,NULL,NULL,NULL,NULL,'',1,'',NULL,NULL,NULL,NULL,NULL,2014,0,'','',NULL,NULL,'',NULL,16,1,'<p>afasdf f</p>',10,NULL,0,NULL,'',NULL,NULL,NULL),(72,'Công ty TNHH Tiến Phát 3',NULL,'Lô số 4, KCN Tân Bình, Quận Tân Bình, Tp. HCM','(08)3456343','','tienphat3@gmail.com',NULL,NULL,45245,24352400,NULL,NULL,'BTX0934834883',NULL,6,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,10,NULL,0,NULL,'',NULL,NULL,NULL),(75,'Công ty TNHH Tiến Phát 4',NULL,'Lô số 4, KCN Tân Bình, Quận Tân Bình, Tp. HCM3','(08)3456345','','tienphat4@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,10,NULL,0,NULL,'',NULL,NULL,NULL),(77,'Công ty TNHH Tiến Phát 5',NULL,'Lô số 3, KCN Tân Bình, Quận Tân Bình, Tp. HCM3','(08)3456345','','tienphat3@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,10,NULL,0,NULL,'',NULL,NULL,NULL),(79,'Công ty TNHH Tiến Phát 6',NULL,'Lô số 4, KCN Tân Bình, Quận Tân Bình, Tp. HCM3','(08)3456343','','tienphat4@gmail.com',NULL,NULL,21334.3,2345.2,NULL,NULL,'BX1245677',NULL,3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,10,NULL,0,'2005-09-06 00:00:00','Bình Dương',NULL,NULL,NULL),(80,'Công ty TNHH Tiến Phát 1021',NULL,'Lô số 4, KCN Tân Bình, Quận Tân Bình, Tp. HCM3','(08)3456789','','tienphat8@gmail.com','','',NULL,NULL,NULL,NULL,'',NULL,5,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','','','',NULL,NULL,NULL,0,NULL,80,'',0,NULL,'','',NULL,''),(81,'Công ty TNHH Tiến Phát 101',NULL,'Lô số 2, KCN Tân Bình, Quận Tân Bình, Tp. HCM','(08)3456345','','tienphat3@gmail.com','','',NULL,NULL,NULL,NULL,'',NULL,5,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','','','',NULL,NULL,NULL,0,NULL,81,'',0,NULL,'','',NULL,''),(83,'Công ty TNHH TIến phát 14',NULL,'HCM, Lô 14','(08)3456345','(08)35647890','tienphat3@gmail.com',NULL,NULL,45245,24352400,NULL,NULL,'BTX0934834883',NULL,3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,10,NULL,0,'1999-09-15 00:00:00','',NULL,NULL,NULL),(84,'Tiến phát',NULL,'HCM-CITY Tan Phu Dist','(08)3456345','','tienphatxd@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,'BN32434',NULL,7,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,10,NULL,0,'2000-01-20 00:00:00','fasdfdsf',NULL,NULL,NULL),(86,'Tiến phát 10','Tien Phat LTd','Lô số 4, KCN Tân Bình, Quận Tân Bình, Tp. HCM3','(08)3456343','','tienphat10@gmail.com','',NULL,NULL,NULL,'2000-06-22 00:00:00','','',1,2,3,4,5,6,7,NULL,'',1,'',NULL,NULL,NULL,NULL,'/uploads/220520101225.jpg',2014,0,'','',NULL,NULL,'',NULL,16,1,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(87,'Tiến phát','','Lô số 2, KCN Tân Bình, Quận Tân Bình, Tp. HCM','(08)3456343','','tienphat3@gmail.com','',NULL,NULL,NULL,'1970-01-01 00:00:00','','',1,8,11,NULL,NULL,NULL,NULL,NULL,'',1,'',NULL,NULL,NULL,NULL,'/uploads/220520101225.jpg',2014,0,'','',NULL,NULL,'',NULL,16,1,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(88,'Cty TNHH TP 101.2','','Hưng Phú, Q.8, Tp. HCM','08154150','08154150','hungphuco@gmail.com','',NULL,NULL,NULL,'2001-01-17 00:00:00',NULL,'',1,4,NULL,NULL,NULL,NULL,NULL,NULL,'',1,'',NULL,NULL,NULL,NULL,'/uploads/1346567494261299019_574_574.jpg',2013,0,'','',NULL,NULL,'',NULL,16,1,'<p>asds dfdf dasd</p>',81,NULL,0,NULL,'',NULL,NULL,NULL),(89,'SCDF Stock Investment','','Hưng Phú, Q.8, Tp. HCM','0874545842','','hungphuco@gmail.com','',NULL,NULL,NULL,'2014-01-09 00:00:00',NULL,'',1,1,NULL,NULL,NULL,NULL,NULL,NULL,'',1,'',NULL,NULL,NULL,NULL,NULL,2014,0,'','',NULL,NULL,'',NULL,16,1,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doanh_nghiep_thong_tin_tuan_thu_bvmt`
--

LOCK TABLES `doanh_nghiep_thong_tin_tuan_thu_bvmt` WRITE;
/*!40000 ALTER TABLE `doanh_nghiep_thong_tin_tuan_thu_bvmt` DISABLE KEYS */;
INSERT INTO `doanh_nghiep_thong_tin_tuan_thu_bvmt` VALUES (10,67,1,1),(57,66,3,1),(58,66,4,1),(59,66,7,1),(60,66,8,1),(61,66,9,1),(62,66,10,1),(63,66,11,1),(64,16,1,1),(65,16,4,1),(66,16,7,1),(70,10,1,1),(71,10,2,1),(72,10,3,1),(73,10,13,1),(74,71,6,1),(75,71,7,1),(81,88,1,1),(82,88,2,1),(83,88,3,1),(84,88,4,1);
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
  `colQTrinhSX` longtext,
  `colNoiCapSuatAn` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`colMa`)
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hoat_dong_san_xuat`
--

LOCK TABLES `hoat_dong_san_xuat` WRITE;
/*!40000 ALTER TABLE `hoat_dong_san_xuat` DISABLE KEYS */;
INSERT INTO `hoat_dong_san_xuat` VALUES (1,52,NULL,NULL,203145,'425',NULL,4,'5004','<p>test</p>',2),(2,52,NULL,NULL,203145,'425',NULL,4,'5004','<p>test</p>',2),(3,NULL,NULL,NULL,4127350,'1236',NULL,3,'4789','<p>qui tr&igrave;nh c&ocirc;ng nghệ sản xuất hiện đại tr&ecirc;n d&acirc;y chuyền c&ocirc;ng nghệ Đ&agrave;i Loan</p>',NULL),(4,NULL,NULL,NULL,4127350,'1236',NULL,3,'4789','<p>qui tr&igrave;nh c&ocirc;ng nghệ sản xuất hiện đại tr&ecirc;n d&acirc;y chuyền c&ocirc;ng nghệ Đ&agrave;i Loan</p>',NULL),(5,55,NULL,NULL,234873,'4234',NULL,2,'23','<p>hoatj ddong san xuat kinh doanh</p>',2),(6,55,NULL,NULL,20343,'82374',NULL,2,'434','<p>NGUYỄN VĂN H&Oacute;A</p>',NULL),(7,55,NULL,NULL,123,'1213',NULL,4,'434','<p>NGUYỄN VĂN H&Oacute;A</p>',NULL),(8,55,NULL,NULL,123,'1213',NULL,4,'434','<p>NGUYỄN VĂN H&Oacute;A</p>',NULL),(9,55,NULL,NULL,123,'1213',NULL,4,'434','<p>NGUYỄN VĂN H&Oacute;A</p>',NULL),(10,55,NULL,NULL,123,'1213',NULL,4,'434','<p>NGUYỄN VĂN H&Oacute;A</p>',2),(11,55,NULL,NULL,123,'1213',NULL,4,'434','<p>NGUYỄN VĂN H&Oacute;A</p>',2),(12,55,NULL,NULL,123,'1213',NULL,4,'434','<p>NGUYỄN VĂN H&Oacute;A</p>',2),(13,55,NULL,NULL,123,'1213',NULL,4,'434','<p>NGUYỄN VĂN H&Oacute;A</p>',2),(14,55,NULL,NULL,123,'1213',NULL,4,'434','<p>NGUYỄN VĂN H&Oacute;A</p>',2),(15,55,NULL,NULL,123,'1213',NULL,4,'434','<p>NGUYỄN VĂN H&Oacute;A</p>',2),(16,55,NULL,NULL,123,'1213',NULL,4,'434','<p>NGUYỄN VĂN H&Oacute;A</p>',2),(17,55,NULL,NULL,203145,'4234532',NULL,34345,'2','<p>t&eacute;t</p>',2),(18,55,0,NULL,203145,'4234532',NULL,34345,'2','<p>t&eacute;t</p>',2),(19,55,0,NULL,203145,'4234532',NULL,34345,'2','<p>t&eacute;t</p>',2),(20,55,0,NULL,203145,'4234532',NULL,34345,'2','<p>t&eacute;t</p>',2),(21,55,2014,NULL,203145,'4234532',NULL,34345,'2','<p>t&eacute;t</p>',2),(22,55,2014,NULL,203145,'4234532',NULL,34345,'2','<p>t&eacute;t</p>',2),(23,55,2014,NULL,203145,'4234532',NULL,34345,'2','<p>t&eacute;t</p>',2),(24,55,2014,NULL,203145,'4234532',NULL,34345,'2','<p>t&eacute;t</p>',2),(25,55,2014,NULL,3241230,'4124245',NULL,1234,'324','<p>this is technology progress</p>',2),(26,55,2014,NULL,3241230,'4124245',NULL,1234,'324','<p>this is technology progress</p>',2),(27,55,2014,NULL,203145,'425232',NULL,4,'4343','<p>t&eacute;t tet</p>',2),(28,59,2014,NULL,203145,'425232',NULL,4,'4343','<p>Đ&acirc;y l&agrave; th&ocirc;ng tin hoạt động sản xuất của doanh nghiệp</p>',2),(29,59,2014,NULL,203145,'425232',NULL,4,'4343','<p>Đ&acirc;y l&agrave; th&ocirc;ng tin hoạt động sản xuất của doanh nghiệp</p>',2),(30,59,2014,NULL,203145,'425232',NULL,4,'4343','<p>Đ&acirc;y l&agrave; th&ocirc;ng tin hoạt động sản xuất của doanh nghiệp</p>',2),(31,59,2014,NULL,203145,'425232',NULL,3,'','',NULL),(32,59,2014,NULL,203145,'425232',NULL,3,'','',NULL),(33,59,2014,NULL,203145,'425',NULL,3,'434','<p>this is tet</p>',2),(34,59,2014,NULL,203145,'425',NULL,3,'434','<p>this is tet</p>',2),(35,59,2014,NULL,203145,'425',NULL,3,'434','<p>Đ&acirc;y l&agrave; qui tr&igrave;nh c&ocirc;ng nghệ sản xuất của doanh nghiệp</p>',2),(36,59,2014,NULL,203145,'425',NULL,3,'434','<p><img src=\"../../../assets/tinymce/plugins/uploads/images.jpg\" alt=\"\" width=\"240\" height=\"210\" />Đ&acirc;y l&agrave; qui tr&igrave;nh c&ocirc;ng nghệ sản xuất của doanh nghiệp</p>',2),(37,60,2014,NULL,203145,'425',NULL,3,'','',2),(38,60,2014,NULL,203145,'425',NULL,3,'','<p>test</p>',2),(39,60,2014,NULL,203145,'425',NULL,3,'','<p>test</p>',2),(57,61,2014,NULL,203145,'425232',NULL,4,'456','<p>th&ocirc;ng tin hoạt động sản xuất của ty&nbsp;</p>',2),(62,62,2014,NULL,203145,'425',NULL,3,'434','<p>test</p>',2),(63,64,2014,NULL,203145,'425',NULL,3,'434','<p>đ&acirc;y l&agrave; qui tr&igrave;nh c&ocirc;ng nghệ sản xuất</p>',NULL),(65,65,2014,NULL,213214,'2353245',NULL,5234540,'523456','<p>52345</p>',NULL),(67,66,2014,NULL,203145,'425232',NULL,3,'434','<p>test</p>',2),(68,16,2014,NULL,123,'23',NULL,23,'2134','<p>23434 fasdf fasd fsdf</p>\r\n<p>asdfas fadf</p>',2),(70,69,2014,NULL,203145,'425232',NULL,3,'ádf','<p>dfasdf</p>',2),(72,86,2014,NULL,1200,'234',NULL,3,'234','<p>test</p>',2),(75,10,2014,NULL,12345,'2323',NULL,0,'2445','',NULL),(77,71,2014,NULL,12345,'425',NULL,1234,'4343','<p>fsadf</p>',NULL),(78,70,2014,NULL,10000,'123',NULL,3,'','<p>fasd fasdf</p>',2);
/*!40000 ALTER TABLE `hoat_dong_san_xuat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hosokemtheo`
--

DROP TABLE IF EXISTS `hosokemtheo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hosokemtheo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `colMaBaocao` int(11) NOT NULL,
  `stt` int(11) DEFAULT NULL,
  `tenhoso` varchar(100) NOT NULL,
  `tenfile` varchar(100) NOT NULL,
  `filepath` varchar(200) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `filesize` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hosokemtheo`
--

LOCK TABLES `hosokemtheo` WRITE;
/*!40000 ALTER TABLE `hosokemtheo` DISABLE KEYS */;
INSERT INTO `hosokemtheo` VALUES (4,7,1,'kcn xfsdf','1.jpg','1.jpg','2014-09-21 18:58:08',287819),(5,8,2,'dsafasdf','84_7_1357099676_16_Tai nha may Co khi Pho Yen - Thai Nguyen.jpg','84_7_1357099676_16_Tai nha may Co khi Pho Yen - Thai Nguyen.jpg','2014-09-21 18:58:21',1130860),(6,13,1,'ảnh số 8','8.jpg','8.jpg','2014-09-22 12:51:03',296294),(7,13,2,'toan canh','toancanhKCN.JPG','toancanhKCN.JPG','2014-09-22 12:55:59',1362380),(8,14,2,'hình 9','9.jpg','9.jpg','2014-09-22 13:21:08',229821);
/*!40000 ALTER TABLE `hosokemtheo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ket_qua_giam_sat_dinh_ky_do_rung`
--

DROP TABLE IF EXISTS `ket_qua_giam_sat_dinh_ky_do_rung`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ket_qua_giam_sat_dinh_ky_do_rung` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `colCSSX` int(11) NOT NULL,
  `tieng_on` float DEFAULT NULL,
  `do_rung` float DEFAULT NULL,
  `ghichu` text COLLATE utf8_unicode_ci,
  `vi_tri_do` varchar(200) COLLATE utf8_unicode_ci DEFAULT '',
  `ngay_giam_sat` datetime NOT NULL,
  `ngay_nhap` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `mota` longtext COLLATE utf8_unicode_ci,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ket_qua_giam_sat_dinh_ky_do_rung`
--

LOCK TABLES `ket_qua_giam_sat_dinh_ky_do_rung` WRITE;
/*!40000 ALTER TABLE `ket_qua_giam_sat_dinh_ky_do_rung` DISABLE KEYS */;
INSERT INTO `ket_qua_giam_sat_dinh_ky_do_rung` VALUES (1,88,34,35.2,'<p>tesadsf</p>','sân chùa','2014-10-16 00:00:00','2014-11-26 00:00:00',NULL,NULL,NULL),(2,88,34.34,12.34,'<p>fasdf fasfasdf</p>','fasd fasdf','2014-10-17 00:00:00','2014-10-08 00:00:00',NULL,NULL,NULL),(5,70,45,23,'<p>test testa</p>','test 3','2014-11-05 00:00:00','2014-11-18 00:00:00',NULL,NULL,NULL);
/*!40000 ALTER TABLE `ket_qua_giam_sat_dinh_ky_do_rung` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ket_qua_giam_sat_dinh_ky_khi_thai`
--

DROP TABLE IF EXISTS `ket_qua_giam_sat_dinh_ky_khi_thai`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ket_qua_giam_sat_dinh_ky_khi_thai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stt` int(11) NOT NULL DEFAULT '0',
  `chi_tieu` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `gia_tri_can_tren` float DEFAULT NULL,
  `gia_tri_can_duoi` float DEFAULT NULL,
  `gia_tri_trung_binh` float NOT NULL,
  `ghichu` text COLLATE utf8_unicode_ci,
  `id_vi_tri_do` int(11) NOT NULL,
  `ngay_giam_sat` datetime NOT NULL,
  `ngay_nhap` datetime NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `mota` longtext COLLATE utf8_unicode_ci,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ket_qua_giam_sat_dinh_ky_khi_thai`
--

LOCK TABLES `ket_qua_giam_sat_dinh_ky_khi_thai` WRITE;
/*!40000 ALTER TABLE `ket_qua_giam_sat_dinh_ky_khi_thai` DISABLE KEYS */;
INSERT INTO `ket_qua_giam_sat_dinh_ky_khi_thai` VALUES (2,0,'pH',0.1,12,12.45,'khong co gi de ghi chu',10,'0000-00-00 00:00:00','0000-00-00 00:00:00',NULL,NULL,NULL),(7,0,'reafsadfsaf',NULL,NULL,23.2,'asdf',8,'0000-00-00 00:00:00','0000-00-00 00:00:00',NULL,NULL,NULL),(8,0,'Kiem NaOH',12.02,23.45,15.48,'xin dung xa rac',10,'0000-00-00 00:00:00','0000-00-00 00:00:00',NULL,NULL,NULL),(9,0,'Kiem NaCl',12.45,23.45,15.48,'xin dung xa rac',10,'0000-00-00 00:00:00','0000-00-00 00:00:00',NULL,NULL,NULL),(11,0,'sau lai trong',23.2,23.4,12.45,'fsdf',8,'0000-00-00 00:00:00','0000-00-00 00:00:00',NULL,NULL,NULL),(12,0,'Kiem',NULL,NULL,12.45,'fadsf fsadfsdf',8,'0000-00-00 00:00:00','0000-00-00 00:00:00',NULL,NULL,NULL),(13,0,'pH',23,435.34,343.32,'fdsafsd',8,'0000-00-00 00:00:00','0000-00-00 00:00:00',NULL,NULL,NULL),(14,0,'chi tieu 1',13,15,14,'test test',18,'0000-00-00 00:00:00','0000-00-00 00:00:00',NULL,NULL,NULL);
/*!40000 ALTER TABLE `ket_qua_giam_sat_dinh_ky_khi_thai` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ket_qua_giam_sat_dinh_ky_nuoc_thai`
--

DROP TABLE IF EXISTS `ket_qua_giam_sat_dinh_ky_nuoc_thai`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ket_qua_giam_sat_dinh_ky_nuoc_thai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stt` int(11) NOT NULL DEFAULT '0',
  `chi_tieu` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `truoc_xu_ly` float DEFAULT NULL,
  `sau_xu_ly` float DEFAULT NULL,
  `nuoc_sinh_hoat` float DEFAULT NULL,
  `ghichu` text COLLATE utf8_unicode_ci,
  `id_vi_tri_do` int(11) NOT NULL,
  `ngay_giam_sat` datetime NOT NULL,
  `ngay_nhap` datetime NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `mota` longtext COLLATE utf8_unicode_ci,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ket_qua_giam_sat_dinh_ky_nuoc_thai`
--

LOCK TABLES `ket_qua_giam_sat_dinh_ky_nuoc_thai` WRITE;
/*!40000 ALTER TABLE `ket_qua_giam_sat_dinh_ky_nuoc_thai` DISABLE KEYS */;
INSERT INTO `ket_qua_giam_sat_dinh_ky_nuoc_thai` VALUES (2,0,'pH',23.4,23.34,4.2,'ghi chú chus',12,'0000-00-00 00:00:00','0000-00-00 00:00:00',NULL,NULL,NULL),(3,0,'Kiềm',NULL,NULL,12.3,'',12,'0000-00-00 00:00:00','0000-00-00 00:00:00',NULL,NULL,NULL),(4,0,'NaOH',23.3,34.3,23.5,'fasdf',14,'0000-00-00 00:00:00','0000-00-00 00:00:00',NULL,NULL,NULL),(6,0,'chi tieu 1',35,100,55.4,'test est',19,'0000-00-00 00:00:00','0000-00-00 00:00:00',NULL,NULL,NULL);
/*!40000 ALTER TABLE `ket_qua_giam_sat_dinh_ky_nuoc_thai` ENABLE KEYS */;
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
-- Table structure for table `linhvucvanban`
--

DROP TABLE IF EXISTS `linhvucvanban`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `linhvucvanban` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `linhvuc` varchar(100) DEFAULT NULL,
  `id_parent` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `linhvucvanban`
--

LOCK TABLES `linhvucvanban` WRITE;
/*!40000 ALTER TABLE `linhvucvanban` DISABLE KEYS */;
INSERT INTO `linhvucvanban` VALUES (1,'Doanh nghiệp',NULL),(2,'Đầu tư',NULL),(3,'Lao động',NULL),(4,'Môi trường',NULL),(5,'Xây dựng',NULL),(6,'Xuất nhập khẩu',NULL),(7,'Khác',NULL),(8,'Cấp phép xây dựng',5),(9,'Nhà ở công dân',5),(10,'Qui hoạch',5),(11,'Thầu xây dựng nước ngoài',5),(12,'Chung',5);
/*!40000 ALTER TABLE `linhvucvanban` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `loaihinhdoanhnghiep`
--

LOCK TABLES `loaihinhdoanhnghiep` WRITE;
/*!40000 ALTER TABLE `loaihinhdoanhnghiep` DISABLE KEYS */;
INSERT INTO `loaihinhdoanhnghiep` VALUES (1,'Công ty TNHH',NULL,'2014-06-13 11:31:05'),(2,'Doanh Nghiệp Tư Nhân',NULL,'2014-09-21 15:11:37'),(3,'Công ty Liên Doanh',NULL,'2014-06-13 11:31:05'),(4,'Công ty Nhà Nước',NULL,'2014-06-13 11:31:05'),(5,'Công ty Cổ phần',NULL,'2014-09-21 15:11:37');
/*!40000 ALTER TABLE `loaihinhdoanhnghiep` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `loaivanban`
--

DROP TABLE IF EXISTS `loaivanban`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `loaivanban` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tenloai` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `loaivanban`
--

LOCK TABLES `loaivanban` WRITE;
/*!40000 ALTER TABLE `loaivanban` DISABLE KEYS */;
INSERT INTO `loaivanban` VALUES (1,'Chỉ Thị'),(2,'Báo Cáo'),(3,'Nghị định'),(4,'Quyết định'),(5,'Thông tư '),(6,'Kế hoạch'),(7,'Thông tư liên tịch'),(8,'Thông báo'),(9,'Luật'),(10,'Phụ lục'),(11,'Công văn liên sở'),(12,'Quy chuẩn kỹ thuật quốc gia'),(13,'Công văn'),(14,'Lệnh');
/*!40000 ALTER TABLE `loaivanban` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nganh`
--

LOCK TABLES `nganh` WRITE;
/*!40000 ALTER TABLE `nganh` DISABLE KEYS */;
INSERT INTO `nganh` VALUES (1,'Dược phẩm',NULL,NULL,'2014-09-21 15:19:20',NULL),(2,'Điện/điện tử',NULL,NULL,'2014-09-21 15:19:20',NULL),(3,'Giấy/sản phẩm từ giấy',NULL,NULL,'2014-09-21 15:19:20',NULL),(4,'Cơ khí',NULL,NULL,'2014-09-21 15:19:20',NULL),(5,'Cao su/nhựa',NULL,NULL,'2014-09-21 15:19:20',NULL),(6,'Hóa chất',NULL,NULL,'2014-09-21 15:19:20',NULL),(7,'Phân bón/thuốc trừ sâu',NULL,NULL,'2014-09-21 15:19:20',NULL),(8,'Dệt may',NULL,NULL,'2014-09-21 15:19:20',NULL),(9,'Gỗ/sản phẩm gỗ',NULL,NULL,'2014-09-21 15:19:20',NULL),(10,'Chế biến thực phẩm',NULL,NULL,'2014-09-21 15:19:20',NULL),(11,'Chế biến nông sản',NULL,NULL,'2014-09-21 15:19:20',NULL),(12,'Khác',NULL,NULL,'2014-09-21 15:19:20',NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nguon_gay_on_rung`
--

LOCK TABLES `nguon_gay_on_rung` WRITE;
/*!40000 ALTER TABLE `nguon_gay_on_rung` DISABLE KEYS */;
INSERT INTO `nguon_gay_on_rung` VALUES (1,'Hoạt động của công nhân viên',NULL),(2,'Hoạt động sản xuất',NULL),(3,'Khác',NULL);
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
INSERT INTO `nguon_thai_khi_thai` VALUES (1,'Khí thải/Bụi',NULL),(2,'Mùi hôi',NULL),(3,'Khí thải lò hơi',NULL),(4,'Khói từ sấy, đốt',NULL),(5,'Máy phát điện dự phòng',NULL);
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
  `colThang` int(4) DEFAULT NULL,
  `colNguyenLieu` int(11) DEFAULT NULL,
  `colDonVi` varchar(50) DEFAULT NULL,
  `colLuongSD` float DEFAULT NULL,
  `colLuongDTru` float DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `stt` int(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`colMa`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nguyen_lieu_san_pham`
--

LOCK TABLES `nguyen_lieu_san_pham` WRITE;
/*!40000 ALTER TABLE `nguyen_lieu_san_pham` DISABLE KEYS */;
INSERT INTO `nguyen_lieu_san_pham` VALUES (1,65,2014,NULL,5,'kg',2354240,235245,'2014-08-24 10:37:05',0),(2,65,2014,NULL,5,'kg',2354240,235245,'2014-08-24 10:39:03',0),(3,65,2014,NULL,3,'tấn',3000,3500,'2014-08-24 11:03:13',0),(4,65,2014,NULL,3,'tấn',3000,3500,'2014-08-24 11:04:14',0),(5,65,2014,NULL,3,'tấn',3000,3500,'2014-08-24 11:04:18',0),(13,65,2014,NULL,8,'cái',213242,34324,'2014-08-24 11:33:11',0),(14,66,2014,NULL,3,'tấn',1000,1100,'2014-08-24 12:43:13',0),(16,86,2014,NULL,1,'tấn',300,34,'2014-09-06 16:55:53',0),(27,72,NULL,NULL,2,'tấn',45,NULL,'2014-09-08 05:02:03',1),(28,72,NULL,NULL,3,'tấn',100,NULL,'2014-09-08 05:02:15',2),(30,10,2014,1,2,'tấn',2343,NULL,'2014-09-21 16:18:04',0),(31,10,2014,3,5,'kg',3243,NULL,'2014-09-21 16:20:14',0),(32,10,2014,1,7,'tấn',234,NULL,'2014-09-21 16:21:44',0),(33,10,2014,2,6,'m3',3434,NULL,'2014-09-21 16:34:42',0),(34,10,2014,2,6,'sdf',234,NULL,'2014-09-21 16:36:54',0),(35,70,2014,1,2,'12',2.23,12,'2014-09-21 18:41:46',1),(36,80,NULL,NULL,6,'fsdaf',23434,NULL,'2014-09-21 18:56:38',1),(37,80,NULL,NULL,5,'sadf',232,NULL,'2014-09-21 18:56:45',2),(39,81,NULL,NULL,2,'kg',12345,NULL,'2014-09-22 12:43:02',1),(40,81,NULL,NULL,5,'kg',1456,NULL,'2014-09-22 12:43:20',2),(41,81,NULL,NULL,7,'kg',454,NULL,'2014-09-22 12:55:31',3),(42,88,NULL,NULL,2,'kg',45,NULL,'2014-09-22 13:17:27',1),(43,88,NULL,NULL,6,'kg',4584,NULL,'2014-09-22 13:17:36',2),(44,71,2014,2,6,'tấn',232,232,'2014-09-22 16:30:24',0),(45,70,2014,2,5,'m3',234,243,'2014-10-05 09:39:52',0),(46,70,2014,6,6,'kg',12.34,233.3,'2014-10-05 10:45:58',0);
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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nguyenlieu`
--

LOCK TABLES `nguyenlieu` WRITE;
/*!40000 ALTER TABLE `nguyenlieu` DISABLE KEYS */;
INSERT INTO `nguyenlieu` VALUES (1,'Củi khô','2014-01-31 22:05:05',NULL),(2,'Trấu','2014-01-31 22:05:05',NULL),(5,'Gỗ thông','2014-01-31 22:05:05',NULL),(6,'Nhựa PVC','2014-01-31 22:05:05',NULL),(7,'Vãi Cotton','2014-01-31 22:05:05',NULL),(8,'Vãi Silk','2014-01-31 22:05:05',NULL),(9,'Dầu','2014-01-31 22:05:05',NULL),(10,'Xăng AO','2014-01-31 22:05:05',NULL),(12,'Lụa Ấn Độ','2014-08-24 12:13:45',NULL);
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
  `colCSSX` int(11) NOT NULL,
  `colNam` int(4) DEFAULT NULL,
  `colThang` int(4) DEFAULT NULL,
  `colNhienLieu` varchar(50) NOT NULL DEFAULT '',
  `colDonVi` varchar(50) DEFAULT NULL,
  `colLuongSD` float DEFAULT NULL,
  `colSoNgaySD` float DEFAULT NULL,
  `colMDichSD` varchar(300) DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`colMa`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nhien_lieu_doanh_nghiep`
--

LOCK TABLES `nhien_lieu_doanh_nghiep` WRITE;
/*!40000 ALTER TABLE `nhien_lieu_doanh_nghiep` DISABLE KEYS */;
INSERT INTO `nhien_lieu_doanh_nghiep` VALUES (3,66,2014,NULL,'than củi','tấn',900,153,'đốt','2014-08-26 09:54:06'),(4,66,2014,NULL,'than đá','tấn',900,365,'đốt lò phản ứng hạt nhân','2014-08-26 09:54:45'),(5,66,2014,NULL,'dfasd','ádf',3423,231,'***','2014-08-26 09:56:22'),(7,10,2014,3,'petrol','kg',2,3,'12','2014-09-21 16:52:29'),(8,10,2014,12,'than đá','tấn',234,434,'df f','2014-09-21 16:55:29'),(9,10,2014,1,'54','dsf',34,23,'dfsf','2014-09-21 16:55:53'),(10,10,2014,2,'234','ádf',324,23,'fsdfasdf','2014-09-21 16:56:45'),(11,71,2014,3,'téadas','fasdf',2343,44234,'fasdfasdf','2014-09-22 16:31:43'),(12,70,2014,2,'than đá','kg',12.213,345,'fasdf fsad','2014-10-05 11:26:51'),(14,0,NULL,NULL,'',NULL,NULL,NULL,NULL,'2014-10-05 12:45:06'),(15,0,NULL,NULL,'',NULL,NULL,NULL,NULL,'2014-10-05 12:45:15'),(16,0,NULL,NULL,'',NULL,NULL,NULL,NULL,'2014-10-05 12:45:48'),(17,0,NULL,NULL,'',NULL,NULL,NULL,NULL,'2014-10-05 12:48:58'),(18,0,NULL,NULL,'',NULL,NULL,NULL,NULL,'2014-10-05 12:49:01'),(19,0,NULL,NULL,'',NULL,NULL,NULL,NULL,'2014-10-05 12:52:01'),(20,0,NULL,NULL,'',NULL,NULL,NULL,NULL,'2014-10-05 12:52:07'),(21,0,NULL,NULL,'',NULL,NULL,NULL,NULL,'2014-10-05 12:52:31'),(22,0,NULL,NULL,'',NULL,NULL,NULL,NULL,'2014-10-05 12:56:57'),(23,0,NULL,NULL,'',NULL,NULL,NULL,NULL,'2014-10-05 12:58:49'),(24,0,NULL,NULL,'',NULL,NULL,NULL,NULL,'2014-10-05 13:06:22'),(25,0,NULL,NULL,'',NULL,NULL,NULL,NULL,'2014-10-05 13:09:41'),(27,70,2014,4,'đá','m3',2344.3,23.3,'ghi chú','2014-10-05 13:21:42');
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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nuoc_ngam_doanh_nghiep`
--

LOCK TABLES `nuoc_ngam_doanh_nghiep` WRITE;
/*!40000 ALTER TABLE `nuoc_ngam_doanh_nghiep` DISABLE KEYS */;
INSERT INTO `nuoc_ngam_doanh_nghiep` VALUES (4,66,2014,'GKHK3','trung taam',23,234,'1234m3/h','1234m3/ngayf','','','2014-08-24 14:50:03'),(5,66,2014,'GKHK3','trung taam',23,234,'1234m3/h','1234m3/ngayf','','','2014-08-24 14:56:19'),(6,66,2014,'dfasdf','asdfsdf',24,234,'34324','23434','afsdf','asdfdf','2014-08-24 14:56:44'),(7,66,2014,'T6Y','terae78',234,78890,'436m3/h','436m3/h','GK2345','fjsdfj fasdhf fahsdfh','2014-08-24 14:59:45'),(8,10,2014,'fasdf','ádf',0,0,'ádf','ádf','ádf','df','2014-08-29 22:24:20'),(9,71,2014,'fasdfasdf','fasdfaf',2343,2343,'234','34324','dfasdfasdf','fasdf','2014-09-22 16:31:23'),(10,70,2014,'HD981','vi tri nay ',24,24,' fsdf7','234','fasdf','fasdf','2014-10-05 11:25:20');
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
  `colNguonThai` int(11) NOT NULL,
  `colLLuongThai` decimal(11,2) NOT NULL DEFAULT '0.00',
  `colNguonPSinh` varchar(500) DEFAULT NULL,
  `colLLXLyTK` decimal(11,2) DEFAULT '0.00',
  `colLLXLyTT` decimal(11,2) DEFAULT '0.00',
  `created` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `colNguonNT` varchar(100) DEFAULT NULL,
  `colNam` int(4) DEFAULT NULL,
  `colThang` int(4) DEFAULT NULL,
  PRIMARY KEY (`colMa`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nuoc_thai_nha_may`
--

LOCK TABLES `nuoc_thai_nha_may` WRITE;
/*!40000 ALTER TABLE `nuoc_thai_nha_may` DISABLE KEYS */;
INSERT INTO `nuoc_thai_nha_may` VALUES (35,66,1,23545.00,'kiểm tra',234.00,324.00,'2014-08-26 14:16:03',NULL,2014,NULL),(36,66,3,23434.00,'asdfsdfxcvvz g gdfgg',24.00,434.00,'2014-08-26 14:18:34',NULL,2014,NULL),(37,66,4,234.44,'dfadf fasdf',324.00,34.00,'2014-08-26 14:18:59',NULL,2014,NULL),(38,66,1,2332.34,'4rfesr fasd fsadfas fasdfa fsadfasdfasd fasdf',23434.00,234.45,'2014-08-26 14:19:25',NULL,2014,NULL),(40,66,1,2123.00,'121',121.00,12.00,'2014-08-26 15:06:16',NULL,2014,NULL),(42,10,3,243.00,'fsdf',2143.00,234.00,'2014-09-21 17:18:03',NULL,2014,2),(45,10,4,234.00,'fasdfsdf',NULL,NULL,'2014-09-21 17:29:32',NULL,2014,10),(46,70,3,12.23,'f fasdfsf',12.00,1234.50,'2014-10-05 14:14:18',NULL,2014,3),(47,70,4,100.00,'fasdf fasdf',12.00,23.00,'2014-10-05 14:09:47',NULL,2014,3),(49,70,3,234.00,'4234',12.24,3.00,'2014-10-05 14:12:35',NULL,2014,4);
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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
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
  `colThang` int(4) DEFAULT NULL,
  `colSanPham` varchar(50) DEFAULT NULL,
  `colDVi` varchar(50) DEFAULT NULL,
  `colCongSuatTK` float DEFAULT NULL,
  `colCongSuatTT` float DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`colMa`)
) ENGINE=InnoDB AUTO_INCREMENT=88 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `san_pham_doanh_nghiep`
--

LOCK TABLES `san_pham_doanh_nghiep` WRITE;
/*!40000 ALTER TABLE `san_pham_doanh_nghiep` DISABLE KEYS */;
INSERT INTO `san_pham_doanh_nghiep` VALUES (1,61,NULL,0,NULL,'1','kg',5215,4584,NULL),(2,61,NULL,0,NULL,'1','kg',5215,4584,NULL),(3,61,NULL,0,NULL,'3','kg',5215,4584,NULL),(4,61,NULL,0,NULL,'3','kg',5215,4584,NULL),(5,61,NULL,0,NULL,'3','kg',5215,4584,NULL),(6,61,NULL,0,NULL,'3','kg',5215,4584,NULL),(7,61,NULL,0,NULL,'3','kg',5215,4584,NULL),(8,61,NULL,2014,NULL,'3','kg',5215,4584,NULL),(9,61,NULL,2014,NULL,'3','kg',5215,4584,NULL),(10,61,NULL,2014,NULL,'3','kg',5215,4584,NULL),(11,61,NULL,2014,NULL,'3','kg',5215,4584,NULL),(12,61,NULL,2014,NULL,'3','kg',5215,4584,NULL),(13,61,NULL,2014,NULL,'3','kg',5215,4584,NULL),(14,61,NULL,2014,NULL,'1','test',2005,2005,NULL),(15,62,NULL,2014,NULL,'1','test',1234,12345,NULL),(16,62,NULL,2014,NULL,'1','test',12,12,NULL),(17,62,NULL,2014,NULL,'1','teest',3,23,NULL),(18,62,NULL,2014,NULL,'3','tấn',3,23,NULL),(19,62,NULL,2014,NULL,'3','tấn',3,23,NULL),(20,62,NULL,2014,NULL,'3','teest',234,234,NULL),(21,62,NULL,2014,NULL,'4','cái',560000,898645,NULL),(22,62,NULL,2014,NULL,'3','cái',3000,3500,NULL),(23,62,NULL,2014,NULL,'2','test',2,2,NULL),(24,62,NULL,2014,NULL,'2','test',2,2,NULL),(25,62,NULL,2014,NULL,'2','cái',5230,4564,NULL),(26,62,NULL,2014,NULL,'3','test',1323,123,NULL),(27,62,NULL,2014,NULL,'3','test',2313,12323,NULL),(28,62,NULL,2014,NULL,'2','tét',2,2,NULL),(29,62,NULL,2014,NULL,'1','kai',234,23434,NULL),(30,62,NULL,2014,NULL,'2','áo thun nè',214,234,'2014-08-23 11:58:12'),(31,62,NULL,2014,NULL,'1','bao',89,90,'2014-08-23 12:05:53'),(32,62,NULL,2014,NULL,'1','bao',89,90,'2014-08-23 12:05:56'),(33,62,NULL,2014,NULL,'1','bao',89,90,'2014-08-23 12:05:57'),(34,62,NULL,2014,NULL,'1','bao',89,90,'2014-08-23 12:05:58'),(35,62,NULL,2014,NULL,'1','bao',89,90,'2014-08-23 12:05:59'),(36,62,NULL,2014,NULL,'1','bao',89,90,'2014-08-23 12:05:59'),(37,62,NULL,2014,NULL,'1','bao',89,90,'2014-08-23 12:06:19'),(38,62,NULL,2014,NULL,'1','bao',89,90,'2014-08-23 12:07:23'),(39,62,NULL,2014,NULL,'4','cái',54454,54564,'2014-08-23 12:07:58'),(40,64,NULL,2014,NULL,'2','teest',2123,123,'2014-08-24 03:53:25'),(41,64,NULL,2014,NULL,'14','teest',3,2,'2014-08-24 06:02:38'),(45,65,NULL,2014,NULL,'35','m',2432540,2342540,'2014-08-24 09:05:12'),(47,66,NULL,2014,NULL,'15','m',1000000,1500000,'2014-08-24 12:42:25'),(48,66,NULL,2014,NULL,'35','tấn',3000,3100,'2014-08-24 12:42:44'),(49,16,NULL,2014,NULL,'50','tấn',3423,324,'2014-08-29 21:58:39'),(52,86,NULL,2014,NULL,'48','tấn',3000,3500,'2014-09-06 16:27:08'),(53,86,NULL,2014,NULL,'45','cái',200,210,'2014-09-06 16:28:56'),(54,86,NULL,2014,NULL,'31','cái',324,324,'2014-09-06 16:30:16'),(64,72,1,NULL,NULL,'39','cái',10000,10000,'2014-09-08 05:03:38'),(65,72,2,NULL,NULL,'48','cái',10000,10000,'2014-09-08 05:03:57'),(67,10,NULL,2014,2,'48','tấn',13,34,'2014-09-21 16:02:31'),(68,10,NULL,2014,3,'46','tấn',345,435,'2014-09-21 16:04:21'),(69,10,NULL,2014,1,'48','test',343,324,'2014-09-21 16:07:57'),(70,10,NULL,2014,1,'50','test',324,234,'2014-09-21 16:36:38'),(71,10,NULL,2014,3,'48','cái',234,423,'2014-09-21 18:36:39'),(73,80,1,NULL,NULL,'37','fsd',213,213,'2014-09-21 18:56:53'),(74,81,1,NULL,NULL,'34','tấn',300,300,'2014-09-22 12:43:45'),(75,81,2,NULL,NULL,'39','chiếc',10000,10000,'2014-09-22 12:44:13'),(76,88,1,NULL,NULL,'34','cái',908,908,'2014-09-22 13:17:45'),(77,88,2,NULL,NULL,'46','cái',264,264,'2014-09-22 13:17:55'),(78,71,NULL,2014,3,'31','cái',2564,456,'2014-09-22 16:29:37'),(80,70,NULL,2015,2,'46','tấn',23.12,12,'2014-10-05 01:42:56'),(81,NULL,NULL,NULL,3,'45','cái',120,100,'2014-10-05 04:37:38'),(82,NULL,NULL,NULL,3,'45','cái',120,100,'2014-10-05 04:37:44'),(83,NULL,NULL,NULL,3,'45','cái',120,100,'2014-10-05 04:37:45');
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
  `colTentailieu` text,
  `colStt` int(11) NOT NULL DEFAULT '0',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`colMa`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `thong_tin_tuan_thu_bvmt`
--

LOCK TABLES `thong_tin_tuan_thu_bvmt` WRITE;
/*!40000 ALTER TABLE `thong_tin_tuan_thu_bvmt` DISABLE KEYS */;
INSERT INTO `thong_tin_tuan_thu_bvmt` VALUES (1,'Quyết định phê duyệt báo cáo đánh giá tác động môi trường',1,'2014-09-21 18:09:57'),(2,'Thông báo chấp nhận bản cam kết đạt chuẩn  môi trường',2,'2014-09-21 18:09:57'),(3,'Quyết định phê duyệt đề án bảo vệ môi trường chi tiết/đơn giản',3,'2014-09-21 18:09:57'),(4,'Giấy xác nhận hoàn thành các công trình, biện pháp bảo vệ môi trường',4,'2014-09-21 18:09:57'),(5,'Sổ đăng ký chủ nguồn thải chất thải nguy hại ',5,'2014-09-21 18:07:51'),(6,'Giấy phép khai thác nước ngầm ',6,'2014-09-21 18:07:51'),(7,'Giây phép xả thải',7,'2014-09-21 18:07:51'),(8,'Giấy phép xin đấu nối',8,'2014-09-21 18:07:51'),(9,'Kê khai và nộp phí bảo vệ môi trường đối với nước ',9,'2014-09-21 18:07:51'),(10,'Chứng nhận ISO',10,'2014-09-21 18:07:51'),(11,'Chứng nhận HACCAP',11,'2014-09-21 18:07:51'),(12,'Triển khai sản xuất sạch hơn',0,'2014-09-21 18:07:51'),(13,'Khác ',0,'2014-09-21 18:07:51');
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
  `role_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username_UNIQUE` (`username`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (2,'huynhsonca','huynhsonca@gmail.com','85496c56aa43cc81deb09c6dff14abc8c29aaeb5d6d2a1f4fc1fe22fe0a3ad85',1,NULL),(3,'admin','cahiepsi@yahoo.com','85496c56aa43cc81deb09c6dff14abc8c29aaeb5d6d2a1f4fc1fe22fe0a3ad85',0,NULL),(4,'administrator','admin@tisemiz.com.vn','196832cbf926cee7d42abca03703fc143409a2cac7fbbab6781b75fa24ac57d4',0,NULL),(5,'user1','user1@tabikobo.com','d698cbf30c0d9e7442dadbd1f60485bc35d56df63c712ec22a3ff2b9ee9ac6d2',0,NULL),(6,'testuser','titi@gmail.com','a1eb3b4e81fa4fc3fa1b753a274030e1dcd9d22cc4ca39b326f6b312221703fe',0,NULL),(7,'user2','user2@gmail.com','f7fc6d320b5d2cefb2d7916ebf0bbb0b39b60d3a6aa5cd48e8f1d9efd0ede3b8',0,NULL),(9,'user3','user3@gmail.com','85496c56aa43cc81deb09c6dff14abc8c29aaeb5d6d2a1f4fc1fe22fe0a3ad85',0,NULL),(10,'huynhsonca1','huynhsonca1@gmail.com','0dfae5cb2187dc41db639e448427ee2a499b609efbb9f876309d33a3df8c3f1e',0,NULL),(11,'huynhsonca2','huynhsonca2@gmail.com','dfdada88f9528afceb3e0f67bb2c10b8829f6e0bbafee1cd6691436070414ac7',0,NULL),(12,'huynhsonca434','huynhsonca4@gmail.com','09c0a0ee235d86a68473895b76973112c780f4116570ac0708fde16419121f7a',0,NULL),(13,'admin-admin','admin@gmail.com','09dc3a96f528b7a4f99c6307da3b96b4e69f48b2058614475caf3d1d53905a6a',0,NULL),(14,'huynhsonca3','huynhsonca3@gmail.com','12e4c8bc5df9f3d0683ce005f14ff38b8523c9ae3fbf833d5b74bddca616d024',0,NULL),(15,'huynhsonca5','huynhsonca5@gmail.com','12e4c8bc5df9f3d0683ce005f14ff38b8523c9ae3fbf833d5b74bddca616d024',0,NULL),(16,'admin-tisemiz','admin@tisemiz.com','caf44f0c6cee8d9c398a07a1cbd0a05e998931778c69cb877a34799ebe2d3fac',1,NULL),(17,'cahiepsi','cahiepsi1@yahoo.com','c70c7dee07327da27dfbd890836fc27c9d940faa9f5ed58708f363d91b6ef729',0,NULL),(18,'cahiepsi2','cahiepsi2@yahoo.com','c70c7dee07327da27dfbd890836fc27c9d940faa9f5ed58708f363d91b6ef729',0,NULL),(19,'cahiepsi3','cahiepsi3@gmail.com','610b11b4999f45dc1e9886129a8a2466429b4ca48e17b4f78adf48ea81d50c62',0,NULL),(20,'cahiepsi33','cahiepsi33@gmail.com','610b11b4999f45dc1e9886129a8a2466429b4ca48e17b4f78adf48ea81d50c62',0,NULL);
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
  `kyhieu` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ngayky` datetime DEFAULT NULL,
  `ngayhieuluc` datetime DEFAULT NULL,
  `ngaybanhanh` datetime DEFAULT NULL,
  `ngayhethieuluc` datetime DEFAULT NULL,
  `coquanbanhanh` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nguon` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tukhoa` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tukhoalienquan` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noidung` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ghichu` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nguoiky` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `path` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mota` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kichthuoc` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `solantai` int(11) DEFAULT NULL,
  `id_loai` int(11) DEFAULT NULL,
  `id_linhvuc` int(11) DEFAULT NULL,
  `tenfile` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tenvanban` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stt` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vanbanphapquy`
--

LOCK TABLES `vanbanphapquy` WRITE;
/*!40000 ALTER TABLE `vanbanphapquy` DISABLE KEYS */;
INSERT INTO `vanbanphapquy` VALUES (13,'BTN/676/TN','2007-12-11 00:00:00',NULL,'2007-12-10 00:00:00',NULL,'','','','','','','','2014-09-13 21:54:10',NULL,'','7986',6,13,5,'Jiem-validator.pdf','Quy định về chất thải nguy hại cho doanh ngiệp trong niên 2014',NULL);
/*!40000 ALTER TABLE `vanbanphapquy` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vi_tri_do`
--

DROP TABLE IF EXISTS `vi_tri_do`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vi_tri_do` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vi_tri` varchar(200) NOT NULL,
  `colCSSX` int(11) DEFAULT NULL,
  `mota` longtext,
  `ngay_giam_sat` datetime NOT NULL,
  `ngay_nhap` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` tinyint(4) DEFAULT NULL COMMENT '1: khithai, 2: nuocthai, 3: tiengon',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vi_tri_do`
--

LOCK TABLES `vi_tri_do` WRITE;
/*!40000 ALTER TABLE `vi_tri_do` DISABLE KEYS */;
INSERT INTO `vi_tri_do` VALUES (1,'fd fasdfasdf',84,'<p>&nbsp;fas dfasdf</p>','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL,NULL,1),(6,'vi tri thu 5 after',88,'<p>after edited fasdf asdf sa</p>','2014-11-06 00:00:00','2014-11-27 00:00:00',NULL,NULL,1),(8,'vị trí cần tìm',88,'<p>fasdf</p>','2014-10-14 00:00:00','2014-11-09 00:00:00',NULL,NULL,1),(10,'cách cổng 500m',88,'<p>fasdf</p>','2014-11-30 00:00:00','2014-11-30 00:00:00',NULL,NULL,1),(12,'Giếng nước',88,'<address>hello ajinomoto</address>','2014-10-23 00:00:00','2014-10-02 00:00:00',NULL,NULL,2),(13,'Cầu ao',88,'<p>fasd fasdf</p>','2014-11-17 00:00:00','2014-10-31 00:00:00',NULL,NULL,2),(15,'',88,NULL,'2014-10-08 00:00:00','2014-11-25 00:00:00',NULL,NULL,NULL),(16,'Ruộng lúa',88,'<p>fa sdfasdf</p>','2014-10-15 00:00:00','2014-10-15 00:00:00',NULL,NULL,2),(17,'Sân đình after',88,'<p>sdasDA</p>','2014-09-09 00:00:00','2014-11-12 00:00:00',NULL,NULL,2),(18,'test',70,'<p>mo ta</p>','2014-10-16 00:00:00','2014-11-12 00:00:00',NULL,NULL,1),(19,'test 2',70,'<p>test test</p>','2014-11-19 00:00:00','2014-11-12 00:00:00',NULL,NULL,2);
/*!40000 ALTER TABLE `vi_tri_do` ENABLE KEYS */;
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
  `colThoiGian` int(4) DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`colMa`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `xu_ly_khi_thai_doanh_nghiep`
--

LOCK TABLES `xu_ly_khi_thai_doanh_nghiep` WRITE;
/*!40000 ALTER TABLE `xu_ly_khi_thai_doanh_nghiep` DISABLE KEYS */;
INSERT INTO `xu_ly_khi_thai_doanh_nghiep` VALUES (15,2014,66,1,'fdasdfasdf',1,1,0,0,1,'fasdf','fasdf',2147483647,'2014-08-27 22:28:44'),(16,2014,66,2,'tsafasfd',1,0,1,0,1,'fsdfa fasdfsd','fasdfasdf',2147483647,'2014-08-27 22:29:01'),(17,2014,66,4,'fsadfa fasfdsdfaf',1,0,0,1,0,'ádfsdf','fasdfasdf',2147483647,'2014-08-27 22:29:21'),(18,2014,10,2,'àdfa',1,1,0,0,1,'ádf','fasdf',2013,'2014-09-21 17:56:46'),(19,2014,70,2,'từ hoạt động xả rác',1,1,0,1,1,'do xuong song','choi do lam',2014,'2014-10-05 14:35:35');
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
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `xu_ly_nuoc_thai_doanh_nghiep`
--

LOCK TABLES `xu_ly_nuoc_thai_doanh_nghiep` WRITE;
/*!40000 ALTER TABLE `xu_ly_nuoc_thai_doanh_nghiep` DISABLE KEYS */;
INSERT INTO `xu_ly_nuoc_thai_doanh_nghiep` VALUES (5,2014,66,'5',1,0,0,0,0,'','','2014-08-17 00:00:00','2014-08-26 15:31:52'),(6,2014,66,'4',1,1,0,0,0,'','tet','2014-08-23 00:00:00','2014-08-26 15:33:04'),(7,2014,66,'8',0,0,1,0,1,'testestaet aseta tet','testta taset','2014-09-09 00:00:00','2014-08-26 15:33:26'),(8,2014,66,'7',1,1,1,1,1,'nguon khac','ghi chu','2014-08-20 00:00:00','2014-08-26 15:38:04'),(9,2014,66,'11',1,1,1,1,1,'tes','tsat','2014-08-05 00:00:00','2014-08-26 15:39:07'),(10,2014,66,'4',1,1,1,1,1,'dsfadf','dfa fasdfasdfas34wq4','2014-09-02 00:00:00','2014-08-26 15:41:44'),(11,2014,10,'3',1,1,1,0,0,'','fdf','2014-08-14 00:00:00','2014-08-29 22:25:31'),(12,2014,70,'2',1,0,1,0,0,'','khong co ghi chu','2014-10-08 00:00:00','2014-10-05 14:17:11'),(14,2014,70,'5',1,0,1,0,0,'','test','2014-10-22 00:00:00','2014-10-05 14:33:02'),(15,2014,70,'2',1,0,1,0,0,'','test',NULL,'2014-10-05 18:16:43'),(16,2014,70,'6',1,0,0,1,1,'test','testtest',NULL,'2014-10-05 18:17:19'),(17,2014,70,'6',1,0,1,1,0,'','test','2014-11-19 00:00:00','2014-10-05 18:21:24'),(23,2014,70,'1',0,0,1,1,1,'test','test','2014-11-13 00:00:00','2014-10-05 18:25:32');
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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `xu_ly_tieng_on_rung`
--

LOCK TABLES `xu_ly_tieng_on_rung` WRITE;
/*!40000 ALTER TABLE `xu_ly_tieng_on_rung` DISABLE KEYS */;
INSERT INTO `xu_ly_tieng_on_rung` VALUES (5,2014,66,2,'ffasd fsdffsdf fsdf sfadf fasdf',1,0,0,1,'','2014-06-16 00:00:00','tsaetesaasghi','2014-08-28 19:04:20'),(6,2014,66,2,'nguồn phát sinh chủ yếu',1,1,0,1,'tesstttttt mô tả','2014-06-25 00:00:00','test ghi chú','2014-08-28 19:08:04'),(7,2014,66,2,'fsadf fasdf',1,1,1,1,'ffasdf f','2014-08-14 00:00:00','sadfasdf','2014-08-28 19:09:28'),(8,2014,70,1,'fasdfsadf',1,0,1,0,'','2014-11-18 00:00:00','fasdf','2014-10-05 14:44:55');
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

-- Dump completed on 2014-10-06  4:25:15
