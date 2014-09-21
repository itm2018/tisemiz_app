-- MySQL dump 10.13  Distrib 5.6.16, for Win32 (x86)
--
-- Host: localhost    Database: tisemiz
-- ------------------------------------------------------
-- Server version	5.6.16

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `baocaochatthainguyhai`
--

LOCK TABLES `baocaochatthainguyhai` WRITE;
/*!40000 ALTER TABLE `baocaochatthainguyhai` DISABLE KEYS */;
INSERT INTO `baocaochatthainguyhai` VALUES (1,10,0,'0000-00-00 00:00:00',NULL,'0000-00-00','0000-00-00',1),(2,10,0,'0000-00-00 00:00:00',NULL,'0000-00-00','0000-00-00',0),(3,10,0,'0000-00-00 00:00:00',NULL,'0000-00-00','0000-00-00',0),(4,10,0,'2014-09-13 00:00:00','2014-09-12 17:00:00','0000-00-00','0000-00-00',1),(5,0,0,'0000-00-00 00:00:00',NULL,'0000-00-00','0000-00-00',0),(6,0,0,'0000-00-00 00:00:00',NULL,'0000-00-00','0000-00-00',1),(7,0,0,'0000-00-00 00:00:00',NULL,'0000-00-00','0000-00-00',1),(8,0,0,'0000-00-00 00:00:00',NULL,'0000-00-00','0000-00-00',1);
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
INSERT INTO `baocaogsmt` VALUES (3,6,16,'2014-08-17 17:01:09','2014-08-17 17:01:09','2014-03-03','2014-08-31','<p><span style=\"color: #ff9900;\">quy tr&igrave;nh c&ocirc;ng nghß╗ç sß║ún xuß║Ñt</span></p>',NULL,NULL,NULL,'<p><span style=\"color: #ff9900;\">quy tr&igrave;nh xß╗¡ l&yacute; n╞░ß╗¢c thß║úi ─æang &aacute;p dß╗Ñng</span></p>',NULL,NULL,'<p><span style=\"color: #ff9900; background-color: #ffffff;\">quy tr&igrave;nh xß╗¡ l&yacute; kh&iacute; thß║úi ─æang &aacute;p dß╗Ñng</span></p>',NULL,'<p>nguß╗ôn ph&aacute;t sinh tiß║┐ng ß╗ôn v&agrave; biß╗çn ph&aacute;p khß║»c phß╗Ñc</p>',NULL,'<p>nguß╗ôn ph&aacute;t sinh ─æß╗Ö rung v&agrave; biß╗çn ph&aacute;p khß║»c phß╗Ñc</p>',NULL,NULL,NULL,'tisemiz\\2014-08-18\\'),(4,8,16,'2014-08-17 17:04:13','2014-08-17 17:04:13','2014-03-03','2014-08-31','<p><span style=\"color: #ff9900;\">quy tr&igrave;nh c&ocirc;ng nghß╗ç sß║ún xuß║Ñt</span></p>',NULL,NULL,NULL,'<p><span style=\"color: #ff9900;\">quy tr&igrave;nh xß╗¡ l&yacute; n╞░ß╗¢c thß║úi ─æang &aacute;p dß╗Ñng</span></p>',NULL,NULL,'<p><span style=\"color: #ff9900; background-color: #ffffff;\">quy tr&igrave;nh xß╗¡ l&yacute; kh&iacute; thß║úi ─æang &aacute;p dß╗Ñng</span></p>',NULL,'<p>nguß╗ôn ph&aacute;t sinh tiß║┐ng ß╗ôn v&agrave; biß╗çn ph&aacute;p khß║»c phß╗Ñc</p>',NULL,'<p>nguß╗ôn ph&aacute;t sinh ─æß╗Ö rung v&agrave; biß╗çn ph&aacute;p khß║»c phß╗Ñc</p>',NULL,NULL,NULL,'tisemiz\\2014-08-18\\'),(5,9,16,'2014-08-17 17:09:11','2014-08-17 17:09:11','2014-08-01','2014-08-31','',NULL,NULL,NULL,'',NULL,NULL,'',NULL,'',NULL,'',NULL,NULL,NULL,'tisemiz\\2014-08-18\\'),(6,10,16,'2014-08-17 17:11:02','2014-08-17 17:11:02','2014-08-01','2014-08-31','',NULL,NULL,NULL,'',NULL,NULL,'',NULL,'',NULL,'',NULL,NULL,NULL,'tisemiz\\2014-08-18\\'),(7,11,16,'2014-08-17 17:11:30','2014-08-17 17:11:30','2014-08-01','2014-08-31','',NULL,NULL,NULL,'',NULL,NULL,'',NULL,'',NULL,'',NULL,NULL,NULL,'tisemiz\\2014-08-18\\'),(8,12,16,'2014-08-17 17:20:46','2014-08-17 17:20:46','2014-08-03','2014-09-30','',NULL,NULL,NULL,'',NULL,NULL,'',NULL,'',NULL,'',NULL,NULL,NULL,'tisemiz\\2014-08-18\\'),(10,0,0,'0000-00-00 00:00:00',NULL,'0000-00-00','0000-00-00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'tisemiz\\2014-08-18\\');
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
INSERT INTO `bien_phap_xu_ly_nuoc_thai` VALUES (1,'Xß║ú v├áo tuyß║┐n n╞░ß╗¢c m╞░a'),(2,'Xß║ú v├áo tuyß║┐n m╞░ß╗¢c bß║⌐n'),(3,'Xß║ú v├áo tuyß║┐n cß╗æng chung'),(4,'Tuyß║┐n nß╗òi'),(5,'Lß║»ng'),(6,'Keo tß╗Ñ'),(7,'Lß╗ìc'),(8,'Sinh hß╗ìc kß╗╡ kh├¡'),(9,'Sinh hß╗ìc hiß║┐u kh├¡'),(10,'Khß╗¡ tr├╣ng'),(11,'├ëp b├╣n'),(12,'Kh├íc');
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
INSERT INTO `chat_thai` VALUES (2,'010102','C├íc loß║íi cß║╖n thß║úi kh├íc c├│ chß╗⌐a c├íc th├ánh phß║ºn nguy hß║íi','Rß║»n/lß╗Ång/b├╣n',1),(3,'010103','Chß║Ñt thß║úi c├│ chß╗⌐a c├íc th├ánh phß║ºn nguy hß║íi tß╗½ qu├í tr├¼nh chß║┐ biß║┐n quß║╖ng sß║»t','Rß║»n/lß╗Ång/b├╣n',1),(4,'010201','Chß║Ñt thß║úi c├│ chß╗⌐a c├íc th├ánh phß║ºn nguy hß║íi tß╗½ qu├í tr├¼nh chß║┐ biß║┐n quß║╖ng kim loß║íi m├áu bß║▒ng ph╞░╞íng ph├íp ho├í-l├╜','Rß║»n/lß╗Ång/b├╣n',2),(7,'010301','B├╣n thß║úi v├á chß║Ñt thß║úi c├│ chß╗⌐a dß║ºu tß╗½ qu├í tr├¼nh khoan','B├╣n/rß║»n/lß╗Ång',3),(9,'010302','B├╣n thß║úi v├á chß║Ñt thß║úi c├│ chß╗⌐a c├íc th├ánh phß║ºn nguy hß║íi tß╗½ qu├í tr├¼nh khoan','B├╣n/rß║»n/lß╗Ång',3),(11,'010401','B├╣n thß║úi tß╗½ thiß║┐t bß╗ï khß╗¡ muß╗æi','B├╣n',4),(12,'010402','B├╣n ─æ├íy bß╗â','B├╣n',4),(14,'010403','B├╣n thß║úi chß╗⌐a axit','B├╣n',4),(16,'010404','Dß║ºu tr├án','Lß╗Ång',4),(17,'010405','B├╣n thß║úi c├│ chß╗⌐a dß║ºu tß╗½ hoß║ít ─æß╗Öng bß║úo d╞░ß╗íng c╞í sß╗ƒ, m├íy m├│c, trang thiß║┐t bß╗ï','B├╣n',4),(19,'010406','C├íc loß║íi hß║»c ├¡n thß║úi','Rß║»n/b├╣n',4),(21,'010407','B├╣n thß║úi c├│ chß╗⌐a c├íc th├ánh phß║ºn nguy hß║íi tß╗½ qu├í tr├¼nh xß╗¡ l├╜ n╞░ß╗¢c thß║úi','B├╣n',4),(23,'010408','Chß║Ñt thß║úi tß╗½ qu├í tr├¼nh l├ám sß║ích nhi├¬n liß╗çu bß║▒ng baz╞í','Lß╗Ång',4),(25,'010409','Dß║ºu thß║úi chß╗⌐a axit','Lß╗Ång',4),(26,'010410','Vß║¡t liß╗çu lß╗ìc bß║▒ng ─æß║Ñt s├⌐t ─æ├ú qua sß╗¡ dß╗Ñng','Rß║»n',4),(27,'010501','C├íc loß║íi hß║»c ├¡n thß║úi','Rß║»n',5),(29,'010601','Chß║Ñt thß║úi c├│ chß╗⌐a thuß╗╖ ng├ón','Lß╗Ång',6),(31,'020101','Axit sunfuric v├á axit sunfur╞í thß║úi','Lß╗Ång',7),(33,'020102','Axit clohydric thß║úi','Lß╗Ång',7),(35,'020103','Axit flohydric thß║úi','Lß╗Ång',7),(36,'020104','Axit photphoric v├á axit photphor╞í thß║úi','Lß╗Ång',7),(37,'020105','Axit nitric v├á axit nitr╞í thß║úi','Lß╗Ång',7),(38,'020106','C├íc loß║íi axit thß║úi kh├íc','Lß╗Ång',7),(39,'020201','Natri hydroxit v├á kali hydroxit thß║úi','Rß║»n/Lß╗Ång',8),(40,'020202','C├íc loß║íi baz╞í thß║úi kh├íc','Rß║»n/Lß╗Ång',8),(41,'020301','Muß╗æi v├á dung dß╗ïch muß╗æi thß║úi c├│ chß╗⌐a xyanua','Rß║»n/Lß╗Ång',9),(42,'020302','Muß╗æi v├á dung dß╗ïch muß╗æi thß║úi c├│ chß╗⌐a kim loß║íi nß║╖ng','Rß║»n/Lß╗Ång',9),(43,'020303','Oxit kim loß║íi thß║úi c├│ chß╗⌐a kim loß║íi nß║╖ng','Rß║»n',9),(44,'020401','Chß║Ñt thß║úi chß╗⌐a asen','Rß║»n/lß╗Ång',11),(45,'070101','Axit tß║⌐y thß║úi','Lß╗Ång',49),(47,'010101','Cß║╖n thß║úi c├│ khß║ú n─âng sinh axit tß╗½ qu├í tr├¼nh chß║┐ biß║┐n quß║╖ng sunfua','Rß║»n/b├╣n',1),(48,'210101','test chat thai','Rß║»n/b├╣n',51),(49,'210201','test chat thai 2','Rß║»n/b├╣n',53);
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
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chat_thai_nguy_hai`
--

LOCK TABLES `chat_thai_nguy_hai` WRITE;
/*!40000 ALTER TABLE `chat_thai_nguy_hai` DISABLE KEYS */;
INSERT INTO `chat_thai_nguy_hai` VALUES (3,'0000-00-00 00:00:00',66,'test','trasetj','jasjdf','jsdfj',1,0,'fsdjofj','jfosjdf','jfsodjf','2014-08-07 00:00:00','2014-08-28 21:40:15',NULL,NULL,NULL,0,0,0,NULL,NULL),(4,'0000-00-00 00:00:00',10,'chß║Ñt thß║úi rß║»n','100','chß║Ñt thß║úi rß║»n','l╞░u',1,0,'','','','2014-08-06 00:00:00','2014-09-12 11:32:05',NULL,NULL,NULL,0,0,0,NULL,NULL),(5,NULL,71,'Cß║╖n thß║úi c├│ khß║ú n─âng sinh axit tß╗½ qu├í tr├¼nh chß║┐ biß║┐n quß║╖ng sunfua coloruan','1200',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-12 11:31:40','010101','Rß║»n',1,0,0,0,NULL,NULL),(6,NULL,71,'C├íc loß║íi cß║╖n thß║úi kh├íc c├│ chß╗⌐a c├íc th├ánh phß║ºn nguy hß║íi','123',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-12 11:31:40','010102','Rß║»n/lß╗Ång/b├╣n',2,0,0,0,NULL,NULL),(7,NULL,71,'Chß║Ñt thß║úi c├│ chß╗⌐a c├íc th├ánh phß║ºn nguy hß║íi tß╗½ qu├í tr├¼nh chß║┐ biß║┐n quß║╖ng sß║»t','1234',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-12 11:31:40','010103','Rß║»n/lß╗Ång/b├╣n',3,0,0,0,NULL,NULL),(53,NULL,72,'Chß║Ñt thß║úi c├│ chß╗⌐a c├íc th├ánh phß║ºn nguy hß║íi tß╗½ qu├í tr├¼nh chß║┐ biß║┐n quß║╖ng kim loß║íi m├áu bß║▒ng ph╞░╞íng ph├íp ','1245',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-12 11:44:40','010201','Rß║»n/lß╗Ång/b├╣n',1,0,0,0,NULL,NULL),(56,NULL,72,'Axit sunfuric v├á axit sunfur╞í thß║úi','12',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-13 04:04:25','020101','Rß║»n/lß╗Ång/b├╣n',1,0,0,0,NULL,NULL),(57,NULL,72,'Axit clohydric thß║úi','12',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-13 04:04:25','020102','Rß║»n/lß╗Ång/b├╣n',2,0,0,0,NULL,NULL),(58,NULL,72,'Axit flohydric thß║úi','3',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-13 04:04:25','020103','Rß║»n/lß╗Ång/b├╣n',3,0,0,0,NULL,NULL),(59,NULL,72,'Axit photphoric v├á axit photphor╞í thß║úi','34',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-13 04:04:25','020104','Rß║»n/lß╗Ång/b├╣n',4,0,0,0,NULL,NULL),(60,NULL,72,'Axit nitric v├á axit nitr╞í thß║úi','435',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-13 04:04:25','020105','Rß║»n/lß╗Ång/b├╣n',5,0,0,0,NULL,NULL),(61,NULL,72,'C├íc loß║íi axit thß║úi kh├íc','5345',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-13 04:04:25','020106','Rß║»n/lß╗Ång/b├╣n',6,0,0,0,NULL,NULL),(62,NULL,71,'Axit sunfuric v├á axit sunfur╞í thß║úi','123',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-13 04:55:54','020101','Rß║»n/lß╗Ång/b├╣n',4,0,0,0,NULL,NULL),(63,NULL,71,'Axit clohydric thß║úi','3445',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-13 04:55:54','020102','Rß║»n/lß╗Ång/b├╣n',5,0,0,0,NULL,NULL),(64,NULL,71,'Chß║Ñt thß║úi chß╗⌐a asen','33455',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-13 04:56:39','020401','Rß║»n/lß╗Ång',6,0,0,0,NULL,NULL),(65,NULL,71,'Chß║Ñt thß║úi c├│ chß╗⌐a c├íc th├ánh phß║ºn nguy hß║íi tß╗½ qu├í tr├¼nh chß║┐ biß║┐n quß║╖ng kim loß║íi m├áu bß║▒ng ph╞░╞íng ph├íp ','123',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-13 05:18:26','010201','Rß║»n/lß╗Ång/b├╣n',1,1,0,0,NULL,NULL),(66,NULL,71,'B├╣n thß║úi v├á chß║Ñt thß║úi c├│ chß╗⌐a dß║ºu tß╗½ qu├í tr├¼nh khoan','1234',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-13 05:35:54','010301','Rß║»n/lß╗Ång/b├╣n',2,1,0,0,NULL,NULL),(67,NULL,71,'Natri hydroxit v├á kali hydroxit thß║úi','1324',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-13 05:46:21','020201','Rß║»n/lß╗Ång/b├╣n',1,0,1,0,NULL,NULL),(68,NULL,71,'C├íc loß║íi baz╞í thß║úi kh├íc','4546',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-13 05:46:21','020202','Rß║»n/lß╗Ång/b├╣n',2,0,1,0,NULL,NULL),(69,NULL,71,'C├íc loß║íi hß║»c ├¡n thß║úi','123434',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-13 05:54:07','010501','Rß║»n/lß╗Ång/b├╣n',3,0,1,0,NULL,NULL),(70,NULL,72,'chß║Ñt thß║úi tß╗▒ xß╗¡ l├╜ 2','154',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-13 06:39:27','0115145','rß║»n',1,0,0,1,'─æß╗æt','triß╗çt ─æß╗â'),(71,NULL,71,'chß║Ñt thß║úi tß╗▒ xß╗¡ l├╜','234',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-13 06:40:02','234','324',1,0,0,1,'ß╗º','s╞í x├ái'),(72,NULL,70,'Chß║Ñt thß║úi c├│ chß╗⌐a c├íc th├ánh phß║ºn nguy hß║íi tß╗½ qu├í tr├¼nh chß║┐ biß║┐n quß║╖ng kim loß║íi m├áu bß║▒ng ph╞░╞íng ph├íp ','121',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-21 18:42:11','010201','Rß║»n/lß╗Ång/b├╣n',1,0,0,0,NULL,NULL),(73,NULL,80,'Cß║╖n thß║úi c├│ khß║ú n─âng sinh axit tß╗½ qu├í tr├¼nh chß║┐ biß║┐n quß║╖ng sunfua','24',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-21 18:57:08','010101','Rß║»n/lß╗Ång/b├╣n',1,0,0,0,NULL,NULL),(74,NULL,80,'C├íc loß║íi cß║╖n thß║úi kh├íc c├│ chß╗⌐a c├íc th├ánh phß║ºn nguy hß║íi','23412',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-21 18:57:08','010102','Rß║»n/lß╗Ång/b├╣n',2,0,0,0,NULL,NULL),(75,NULL,80,'Chß║Ñt thß║úi c├│ chß╗⌐a c├íc th├ánh phß║ºn nguy hß║íi tß╗½ qu├í tr├¼nh chß║┐ biß║┐n quß║╖ng sß║»t','434',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-21 18:57:08','010103','Rß║»n/lß╗Ång/b├╣n',3,0,0,0,NULL,NULL),(76,NULL,80,'Chß║Ñt thß║úi c├│ chß╗⌐a thuß╗╖ ng├ón','232',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-21 18:57:35','010601','Rß║»n/lß╗Ång/b├╣n',1,0,1,0,NULL,NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chat_thai_ran_cong_nghiep`
--

LOCK TABLES `chat_thai_ran_cong_nghiep` WRITE;
/*!40000 ALTER TABLE `chat_thai_ran_cong_nghiep` DISABLE KEYS */;
INSERT INTO `chat_thai_ran_cong_nghiep` VALUES (2,'0000-00-00 00:00:00',66,'dß║íng chß║Ñt thß║úi rß║»n c├┤ng nghiß╗çp','13 tß║Ñn','sß║ún xuß║Ñt','l╞░u giß╗» v├áo kho',1,0,'cty m├┤i tr╞░ß╗¥ng xanh','h├áng tuß║ºn','','2014-08-05 00:00:00','2014-08-28 21:23:21'),(4,'0000-00-00 00:00:00',66,'fkansf fasdf','fskdnf','jfksdf','hngdfg',1,0,' gdfgjopjsdfo','jsopdjfg','jgsdfgj','2014-09-16 00:00:00','2014-08-28 21:29:20');
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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact`
--

LOCK TABLES `contact` WRITE;
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
INSERT INTO `contact` VALUES (1,'','','','','','','','',''),(2,'','','','','','','','',''),(3,'','','','','','','','',''),(4,'','sadas','','fasdf','234324','','dfasdf@gmail.com','fasdf','fas fasd'),(5,'','sadas','','fasdf','234324','','dfasdf@gmail.com','fasdf','fas fasd'),(6,'','sadas','','fasdf','234324','','huynhsonca@gmail.com','fasdf','fas fasd'),(7,'','sadas','','fasdf','234324','','huynhsonca@gmail.com','fasdf','fas fasd'),(8,'','sadas','','fasdf','234324','','huynhsonca@gmail.com','fasdf','fas fasd'),(9,'','fasdf fas fasdf','fasd fsadf','fa fasdfa','896789','','huynhsonca@gmail.com','e234235','fasdfasdfa fasdf ├ídf');
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
INSERT INTO `danh_muc_chat_thai` VALUES (1,'01','CHß║ñT THß║óI Tß╗¬ NG├ÇNH TH─éM D├Æ, KHAI TH├üC, CHß║╛ BIß║╛N KHO├üNG Sß║óN, Dß║ªU KH├ì V├Ç THAN'),(2,'02','CHß║ñT THß║óI Tß╗¬ NG├ÇNH Sß║óN XUß║ñT HO├ü CHß║ñT V├ö C╞á'),(3,'03','CHß║ñT THß║óI Tß╗¬ NG├ÇNH Sß║óN XUß║ñT HO├ü CHß║ñT  Hß╗«U C╞á'),(4,'04','CHß║ñT THß║óI Tß╗¬ NG├ÇNH NHIß╗åT ─ÉIß╗åN V├Ç C├üC QU├ü TR├îNH NHIß╗åT KH├üC'),(5,'05','CHß║ñT THß║óI Tß╗¬ NG├ÇNH LUYß╗åN KIM'),(6,'06','CHß║ñT THß║óI Tß╗¬ NG├ÇNH Sß║óN XUß║ñT Vß║¼T LIß╗åU X├éY Dß╗░NG V├Ç THß╗ªY TINH'),(7,'07','CHß║ñT THß║óI Tß╗¬ QU├ü TR├îNH Xß╗¼ L├¥, CHE PHß╗ª Bß╗Ç Mß║╢T, Tß║áO H├îNH KIM LOß║áI V├Ç C├üC Vß║¼T LIß╗åU KH├üC'),(8,'08','CHß║ñT THß║óI Tß╗¬ QU├ü TR├îNH Sß║óN XUß║ñT, ─ÉIß╗ÇU CHß║╛, CUNG ß╗¿NG, Sß╗¼ Dß╗ñNG C├üC Sß║óN PHß║¿M CHE PHß╗ª (S╞áN, V├ëC NI, MEN THUß╗╢ TINH), CHß║ñT Kß║╛T D├ìNH, CHß║ñT Bß╗èT K├ìN V├Ç Mß╗░C IN'),(9,'09','CHß║ñT THß║óI Tß╗¬ NG├ÇNH CHß║╛ BIß║╛N Gß╗û, Sß║óN XUß║ñT C├üC Sß║óN PHß║¿M Gß╗û, GIß║ñY V├Ç Bß╗ÿT GIß║ñY'),(10,'10','CHß║ñT THß║óI Tß╗¬ NG├ÇNH CHß║╛ BIß║╛N DA, L├öNG V├Ç Dß╗åT NHUß╗ÿM'),(11,'11','CHß║ñT THß║óI X├éY Dß╗░NG V├Ç PH├ü Dß╗á (Kß╗é Cß║ó ─Éß║ñT ─É├ÇO Tß╗¬ C├üC KHU Vß╗░C Bß╗è ├ö NHIß╗äM)'),(12,'12','CHß║ñT THß║óI Tß╗¬ C├üC C╞á Sß╗₧ T├üI CHß║╛, Xß╗¼ L├¥, TI├èU HUß╗╢ CHß║ñT THß║óI, Xß╗¼ L├¥ N╞»ß╗ÜC Cß║ñP SINH HOß║áT V├Ç C├öNG NGHIß╗åP'),(13,'13','CHß║ñT THß║óI Tß╗¬ NG├ÇNH Y Tß║╛ V├Ç TH├Ü Y  (trß╗½ chß║Ñt thß║úi sinh hoß║ít cß╗ºa ng├ánh n├áy)'),(14,'14','CHß║ñT THß║óI Tß╗¬ NG├ÇNH N├öNG NGHIß╗åP, L├éM NGHIß╗åP V├Ç THUß╗╢ Sß║óN'),(16,'15','THIß║╛T Bß╗è, PH╞»╞áNG TIß╗åN GIAO TH├öNG Vß║¼N Tß║óI ─É├â Hß║╛T Hß║áN Sß╗¼ Dß╗ñNG V├Ç CHß║ñT THß║óI Tß╗¬ HOß║áT ─Éß╗ÿNG PH├ü Dß╗á, Bß║óO D╞»ß╗áNG THIß║╛T Bß╗è, PH╞»╞áNG TIß╗åN GIAO TH├öNG Vß║¼N Tß║óI'),(17,'16','CHß║ñT THß║óI Hß╗ÿ GIA ─É├îNH V├Ç CHß║ñT THß║óI SINH HOß║áT Tß╗¬ C├üC NGUß╗ÆN KH├üC'),(18,'17','Dß║ªU THß║óI, CHß║ñT THß║óI Tß╗¬ NHI├èN LIß╗åU Lß╗ÄNG, CHß║ñT THß║óI DUNG M├öI Hß╗«U C╞á, M├öI CHß║ñT Lß║áNH V├Ç CHß║ñT ─Éß║¿Y (propellant)'),(19,'18','C├üC LOß║áI CHß║ñT THß║óI BAO B├î, CHß║ñT Hß║ñP THß╗ñ, GIß║║ LAU, Vß║¼T LIß╗åU Lß╗îC V├Ç Vß║óI Bß║óO Vß╗å'),(22,'19','C├üC LOß║áI CHß║ñT THß║óI KH├üC'),(23,'20','Chß║Ñt thß║úi rß║»n');
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
INSERT INTO `danhmuc_sanpham` VALUES (13,'Nhß╗▒a c├┤ng nghiß╗çp',NULL,'2014-08-23 20:46:13','2014-08-23 13:46:13'),(16,'─Éß╗ô Gß╗ô Chß║┐ T├íc',NULL,'2014-08-23 20:48:45','2014-08-23 13:48:45'),(17,'─Éan L├ít',NULL,'2014-08-24 10:53:47','2014-08-24 03:53:47'),(18,'May mß║╖c',NULL,'2014-08-24 15:16:58','2014-08-24 08:16:58');
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
  PRIMARY KEY (`colMa`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dien_nuoc_doanh_nghiep`
--

LOCK TABLES `dien_nuoc_doanh_nghiep` WRITE;
/*!40000 ALTER TABLE `dien_nuoc_doanh_nghiep` DISABLE KEYS */;
INSERT INTO `dien_nuoc_doanh_nghiep` VALUES (4,66,2014,NULL,'234g','200',200,'2014-08-24 13:30:33'),(5,66,2014,NULL,'324t','13',2334,'2014-08-24 13:36:16'),(6,66,2014,NULL,'2345f','3',23545,'2014-08-24 13:36:54'),(7,10,2014,NULL,'fasdf','dfasdf',123,'2014-08-29 22:24:02'),(8,10,2014,1,'─Éiß╗çn','1232',2323,'2014-09-21 16:44:03'),(9,10,2014,5,'n╞░ß╗¢c','4334.32',23,'2014-09-21 16:45:49'),(10,10,2014,1,'n╞░ß╗¢c','4334.32',23,'2014-09-21 16:46:05');
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
) ENGINE=InnoDB AUTO_INCREMENT=88 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doanh_nghiep`
--

LOCK TABLES `doanh_nghiep` WRITE;
/*!40000 ALTER TABLE `doanh_nghiep` DISABLE KEYS */;
INSERT INTO `doanh_nghiep` VALUES (70,'T├ón Lß╗úi Ltd','fasdf','KCN B├¼nh ─Éiß╗ün, Q. B├¼nh Thß║ính','08234235','08234235','test@abc.com','32454467','Vietcombank',NULL,NULL,'1970-01-01 00:00:00','','',1,4,3,4,NULL,NULL,NULL,NULL,'',1,'',NULL,NULL,NULL,NULL,'/uploads/220520101225.jpg',2014,0,'Trß║ºn Cao','Cao Lß╗ù','0123457799','HCM','',NULL,16,1,NULL,70,'',1,'2014-09-16 00:00:00','','264878897','2014-09-16 00:00:00','HCM'),(71,'C├┤ng ty TNHH Tiß║┐n Ph├ít 2',NULL,'L├┤ sß╗æ 3, KCN T├ón B├¼nh, Quß║¡n T├ón B├¼nh, Tp. HCM3','(08)3456345','','tienphat2@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,16,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,10,NULL,0,NULL,'',NULL,NULL,NULL),(72,'C├┤ng ty TNHH Tiß║┐n Ph├ít 3',NULL,'L├┤ sß╗æ 4, KCN T├ón B├¼nh, Quß║¡n T├ón B├¼nh, Tp. HCM','(08)3456343','','tienphat3@gmail.com',NULL,NULL,45245,24352400,NULL,NULL,'BTX0934834883',NULL,6,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,10,NULL,0,NULL,'',NULL,NULL,NULL),(75,'C├┤ng ty TNHH Tiß║┐n Ph├ít 4',NULL,'L├┤ sß╗æ 4, KCN T├ón B├¼nh, Quß║¡n T├ón B├¼nh, Tp. HCM3','(08)3456345','','tienphat4@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,10,NULL,0,NULL,'',NULL,NULL,NULL),(77,'C├┤ng ty TNHH Tiß║┐n Ph├ít 5',NULL,'L├┤ sß╗æ 3, KCN T├ón B├¼nh, Quß║¡n T├ón B├¼nh, Tp. HCM3','(08)3456345','','tienphat3@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,10,NULL,0,NULL,'',NULL,NULL,NULL),(79,'C├┤ng ty TNHH Tiß║┐n Ph├ít 6',NULL,'L├┤ sß╗æ 4, KCN T├ón B├¼nh, Quß║¡n T├ón B├¼nh, Tp. HCM3','(08)3456343','','tienphat4@gmail.com',NULL,NULL,21334.3,2345.2,NULL,NULL,'BX1245677',NULL,3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,10,NULL,0,'2005-09-06 00:00:00','B├¼nh D╞░╞íng',NULL,NULL,NULL),(80,'C├┤ng ty TNHH Tiß║┐n Ph├ít 1021',NULL,'L├┤ sß╗æ 4, KCN T├ón B├¼nh, Quß║¡n T├ón B├¼nh, Tp. HCM3','(08)3456789','','tienphat8@gmail.com','','',NULL,NULL,NULL,NULL,'',NULL,5,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','','','',NULL,NULL,NULL,0,NULL,80,'',0,NULL,'','',NULL,''),(81,'C├┤ng ty TNHH Tiß║┐n Ph├ít 101',NULL,'L├┤ sß╗æ 2, KCN T├ón B├¼nh, Quß║¡n T├ón B├¼nh, Tp. HCM','(08)3456345','','tienphat3@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,5,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,10,NULL,0,NULL,'',NULL,NULL,NULL),(83,'C├┤ng ty TNHH TIß║┐n ph├ít 14',NULL,'HCM, L├┤ 14','(08)3456345','(08)35647890','tienphat3@gmail.com',NULL,NULL,45245,24352400,NULL,NULL,'BTX0934834883',NULL,3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,10,NULL,0,'1999-09-15 00:00:00','',NULL,NULL,NULL),(84,'Tiß║┐n ph├ít',NULL,'HCM-CITY Tan Phu Dist','(08)3456345','','tienphatxd@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,'BN32434',NULL,7,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,10,NULL,0,'2000-01-20 00:00:00','fasdfdsf',NULL,NULL,NULL),(86,'Tiß║┐n ph├ít 10','Tien Phat LTd','L├┤ sß╗æ 4, KCN T├ón B├¼nh, Quß║¡n T├ón B├¼nh, Tp. HCM3','(08)3456343','','tienphat10@gmail.com','',NULL,NULL,NULL,'2000-06-22 00:00:00','','',1,2,3,4,5,6,7,NULL,'',1,'',NULL,NULL,NULL,NULL,'/uploads/220520101225.jpg',2014,0,'','',NULL,NULL,'',NULL,16,1,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL),(87,'Tiß║┐n ph├ít','','L├┤ sß╗æ 2, KCN T├ón B├¼nh, Quß║¡n T├ón B├¼nh, Tp. HCM','(08)3456343','','tienphat3@gmail.com','',NULL,NULL,NULL,'1970-01-01 00:00:00','','',1,8,11,NULL,NULL,NULL,NULL,NULL,'',1,'',NULL,NULL,NULL,NULL,'/uploads/220520101225.jpg',2014,0,'','',NULL,NULL,'',NULL,16,1,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doanh_nghiep_thong_tin_tuan_thu_bvmt`
--

LOCK TABLES `doanh_nghiep_thong_tin_tuan_thu_bvmt` WRITE;
/*!40000 ALTER TABLE `doanh_nghiep_thong_tin_tuan_thu_bvmt` DISABLE KEYS */;
INSERT INTO `doanh_nghiep_thong_tin_tuan_thu_bvmt` VALUES (10,67,1,1),(57,66,3,1),(58,66,4,1),(59,66,7,1),(60,66,8,1),(61,66,9,1),(62,66,10,1),(63,66,11,1),(64,16,1,1),(65,16,4,1),(66,16,7,1),(70,10,1,1),(71,10,2,1),(72,10,3,1),(73,10,13,1);
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
INSERT INTO `doanhnghiep` VALUES (1,'ten co so','dia chi co so','08744-4548','fax','test@gmail.com','giay dang ky kinh doanh','ma so thue43',NULL,NULL),(2,'T├¬n c├┤ng ty','asdfsdf','07806548','097754645664','email@gmail.com','giay dang ky kinh doanh','ma so thue',NULL,1),(3,'ten co so','dia chi co so','08744-4548','fax','test@gmail.com','giay dang ky kinh doanh','ma so thue43',NULL,NULL),(4,'T├¬n c├┤ng ty','asdfsdf','07806548','097754645664','email@gmail.com','giay dang ky kinh doanh','ma so thue',NULL,3),(5,'ten co so','dia chi co so','08744-4548','fax','test@gmail.com','giay dang ky kinh doanh','ma so thue43',NULL,NULL),(6,'T├¬n c├┤ng ty','asdfsdf','07806548','097754645664','email@gmail.com','giay dang ky kinh doanh','ma so thue',NULL,5),(7,'ten co so','dia chi co so','08744-4548','fax','test@gmail.com','giay dang ky kinh doanh','ma so thue43',NULL,NULL),(8,'T├¬n c├┤ng ty','asdfsdf','07806548','097754645664','email@gmail.com','giay dang ky kinh doanh','ma so thue',NULL,7),(9,'T├¬n c├┤ng ty','trß╗Ñ sß╗ƒ c├┤ng ty','078056478','','email@gmail.com','giay dang ky kinh doanh','ma so thue',NULL,NULL),(10,'T├¬n c├┤ng ty','trß╗Ñ sß╗ƒ c├┤ng ty','078056478','','email@gmail.com','giay dang ky kinh doanh','ma so thue',NULL,NULL),(11,'T├¬n c├┤ng ty','trß╗Ñ sß╗ƒ c├┤ng ty','078056478','','email@gmail.com','giay dang ky kinh doanh','ma so thue',NULL,NULL),(12,'Evolable Asia ','9 Dinh Tien Hoang, Dakao, Q.1','09972420','','huynhsonca@gmail.com','GP214345','2384934285',NULL,NULL);
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
INSERT INTO `hientrangchatthairan` VALUES (1,1,1,'chß║Ñt thß║úi rß║»n','khg',12,12,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,24,NULL,1),(2,1,2,'chß║Ñt thß║úi rß║»n 2','khg',NULL,NULL,21,12,12,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,45,NULL,1),(3,2,1,'chß║Ñt thß║úi cn','kg',23,24,4.2,23.34,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,74.54,NULL,1),(4,2,2,'chß║Ñt thß║úi nguy hß║íi','kg',42,3243,34,345,35.3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,3699.3,NULL,1),(5,3,1,'n╞░ß╗¢c thß║úi 1','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,1),(6,3,2,'n╞░ß╗¢c thß║úi 2','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,1);
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
INSERT INTO `hientrangkhithai` VALUES (1,1,'Bß╗Ñi','mg/m3',12,12,43,12,79,'',NULL,1),(2,2,'SO2','mg/m3',23,123,12,24,182,'',NULL,1);
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
INSERT INTO `hientrangnuocthai` VALUES (1,1,'n╞░ß╗¢c thß║úi 1','g',12,13,14,15,54,'',NULL,1),(2,2,'n╞░ß╗¢c thß║úi 2','g',12,14.5,12.2,23.1,61.8,'',NULL,1);
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
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hoat_dong_san_xuat`
--

LOCK TABLES `hoat_dong_san_xuat` WRITE;
/*!40000 ALTER TABLE `hoat_dong_san_xuat` DISABLE KEYS */;
INSERT INTO `hoat_dong_san_xuat` VALUES (1,52,NULL,NULL,203145,'425',NULL,4,'5004','<p>test</p>',2),(2,52,NULL,NULL,203145,'425',NULL,4,'5004','<p>test</p>',2),(3,NULL,NULL,NULL,4127350,'1236',NULL,3,'4789','<p>qui tr&igrave;nh c&ocirc;ng nghß╗ç sß║ún xuß║Ñt hiß╗çn ─æß║íi tr&ecirc;n d&acirc;y chuyß╗ün c&ocirc;ng nghß╗ç ─É&agrave;i Loan</p>',NULL),(4,NULL,NULL,NULL,4127350,'1236',NULL,3,'4789','<p>qui tr&igrave;nh c&ocirc;ng nghß╗ç sß║ún xuß║Ñt hiß╗çn ─æß║íi tr&ecirc;n d&acirc;y chuyß╗ün c&ocirc;ng nghß╗ç ─É&agrave;i Loan</p>',NULL),(5,55,NULL,NULL,234873,'4234',NULL,2,'23','<p>hoatj ddong san xuat kinh doanh</p>',2),(6,55,NULL,NULL,20343,'82374',NULL,2,'434','<p>NGUYß╗äN V─éN H&Oacute;A</p>',NULL),(7,55,NULL,NULL,123,'1213',NULL,4,'434','<p>NGUYß╗äN V─éN H&Oacute;A</p>',NULL),(8,55,NULL,NULL,123,'1213',NULL,4,'434','<p>NGUYß╗äN V─éN H&Oacute;A</p>',NULL),(9,55,NULL,NULL,123,'1213',NULL,4,'434','<p>NGUYß╗äN V─éN H&Oacute;A</p>',NULL),(10,55,NULL,NULL,123,'1213',NULL,4,'434','<p>NGUYß╗äN V─éN H&Oacute;A</p>',2),(11,55,NULL,NULL,123,'1213',NULL,4,'434','<p>NGUYß╗äN V─éN H&Oacute;A</p>',2),(12,55,NULL,NULL,123,'1213',NULL,4,'434','<p>NGUYß╗äN V─éN H&Oacute;A</p>',2),(13,55,NULL,NULL,123,'1213',NULL,4,'434','<p>NGUYß╗äN V─éN H&Oacute;A</p>',2),(14,55,NULL,NULL,123,'1213',NULL,4,'434','<p>NGUYß╗äN V─éN H&Oacute;A</p>',2),(15,55,NULL,NULL,123,'1213',NULL,4,'434','<p>NGUYß╗äN V─éN H&Oacute;A</p>',2),(16,55,NULL,NULL,123,'1213',NULL,4,'434','<p>NGUYß╗äN V─éN H&Oacute;A</p>',2),(17,55,NULL,NULL,203145,'4234532',NULL,34345,'2','<p>t&eacute;t</p>',2),(18,55,0,NULL,203145,'4234532',NULL,34345,'2','<p>t&eacute;t</p>',2),(19,55,0,NULL,203145,'4234532',NULL,34345,'2','<p>t&eacute;t</p>',2),(20,55,0,NULL,203145,'4234532',NULL,34345,'2','<p>t&eacute;t</p>',2),(21,55,2014,NULL,203145,'4234532',NULL,34345,'2','<p>t&eacute;t</p>',2),(22,55,2014,NULL,203145,'4234532',NULL,34345,'2','<p>t&eacute;t</p>',2),(23,55,2014,NULL,203145,'4234532',NULL,34345,'2','<p>t&eacute;t</p>',2),(24,55,2014,NULL,203145,'4234532',NULL,34345,'2','<p>t&eacute;t</p>',2),(25,55,2014,NULL,3241230,'4124245',NULL,1234,'324','<p>this is technology progress</p>',2),(26,55,2014,NULL,3241230,'4124245',NULL,1234,'324','<p>this is technology progress</p>',2),(27,55,2014,NULL,203145,'425232',NULL,4,'4343','<p>t&eacute;t tet</p>',2),(28,59,2014,NULL,203145,'425232',NULL,4,'4343','<p>─É&acirc;y l&agrave; th&ocirc;ng tin hoß║ít ─æß╗Öng sß║ún xuß║Ñt cß╗ºa doanh nghiß╗çp</p>',2),(29,59,2014,NULL,203145,'425232',NULL,4,'4343','<p>─É&acirc;y l&agrave; th&ocirc;ng tin hoß║ít ─æß╗Öng sß║ún xuß║Ñt cß╗ºa doanh nghiß╗çp</p>',2),(30,59,2014,NULL,203145,'425232',NULL,4,'4343','<p>─É&acirc;y l&agrave; th&ocirc;ng tin hoß║ít ─æß╗Öng sß║ún xuß║Ñt cß╗ºa doanh nghiß╗çp</p>',2),(31,59,2014,NULL,203145,'425232',NULL,3,'','',NULL),(32,59,2014,NULL,203145,'425232',NULL,3,'','',NULL),(33,59,2014,NULL,203145,'425',NULL,3,'434','<p>this is tet</p>',2),(34,59,2014,NULL,203145,'425',NULL,3,'434','<p>this is tet</p>',2),(35,59,2014,NULL,203145,'425',NULL,3,'434','<p>─É&acirc;y l&agrave; qui tr&igrave;nh c&ocirc;ng nghß╗ç sß║ún xuß║Ñt cß╗ºa doanh nghiß╗çp</p>',2),(36,59,2014,NULL,203145,'425',NULL,3,'434','<p><img src=\"../../../assets/tinymce/plugins/uploads/images.jpg\" alt=\"\" width=\"240\" height=\"210\" />─É&acirc;y l&agrave; qui tr&igrave;nh c&ocirc;ng nghß╗ç sß║ún xuß║Ñt cß╗ºa doanh nghiß╗çp</p>',2),(37,60,2014,NULL,203145,'425',NULL,3,'','',2),(38,60,2014,NULL,203145,'425',NULL,3,'','<p>test</p>',2),(39,60,2014,NULL,203145,'425',NULL,3,'','<p>test</p>',2),(57,61,2014,NULL,203145,'425232',NULL,4,'456','<p>th&ocirc;ng tin hoß║ít ─æß╗Öng sß║ún xuß║Ñt cß╗ºa ty&nbsp;</p>',2),(62,62,2014,NULL,203145,'425',NULL,3,'434','<p>test</p>',2),(63,64,2014,NULL,203145,'425',NULL,3,'434','<p>─æ&acirc;y l&agrave; qui tr&igrave;nh c&ocirc;ng nghß╗ç sß║ún xuß║Ñt</p>',NULL),(65,65,2014,NULL,213214,'2353245',NULL,5234540,'523456','<p>52345</p>',NULL),(67,66,2014,NULL,203145,'425232',NULL,3,'434','<p>test</p>',2),(68,16,2014,NULL,123,'23',NULL,23,'2134','<p>23434 fasdf fasd fsdf</p>\r\n<p>asdfas fadf</p>',2),(70,69,2014,NULL,203145,'425232',NULL,3,'├ídf','<p>dfasdf</p>',2),(72,86,2014,NULL,1200,'234',NULL,3,'234','<p>test</p>',2),(75,10,2014,NULL,12345,'2323',NULL,0,'2445','',NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hosokemtheo`
--

LOCK TABLES `hosokemtheo` WRITE;
/*!40000 ALTER TABLE `hosokemtheo` DISABLE KEYS */;
INSERT INTO `hosokemtheo` VALUES (4,7,1,'kcn xfsdf','1.jpg','1.jpg','2014-09-21 18:58:08',287819),(5,8,2,'dsafasdf','84_7_1357099676_16_Tai nha may Co khi Pho Yen - Thai Nguyen.jpg','84_7_1357099676_16_Tai nha may Co khi Pho Yen - Thai Nguyen.jpg','2014-09-21 18:58:21',1130860);
/*!40000 ALTER TABLE `hosokemtheo` ENABLE KEYS */;
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
INSERT INTO `ketquaphantichkhithai` VALUES (1,1,'Tiß║┐ng ß╗ôn Khu vß╗▒c cß╗òng bß║úo vß╗ç','dBA',12,23,23.2,21.2,NULL,NULL,79.4,'',NULL,1),(2,2,'Nhiß╗çt ─æß╗Ö Khu vß╗▒c cß╗òng bß║úo vß╗ç','─Éß╗Ö C',23,34,34,23,NULL,NULL,114,'',NULL,1);
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
INSERT INTO `ketquaphantichnuocthai` VALUES (1,1,'Tiß║┐ng ß╗ôn Khu vß╗▒c cß╗òng bß║úo vß╗ç','dBA',12,23,23.2,21.2,NULL,NULL,79.4,'',NULL,1),(2,2,'Nhiß╗çt ─æß╗Ö Khu vß╗▒c cß╗òng bß║úo vß╗ç','─Éß╗Ö C',23,34,34,23,NULL,NULL,114,'',NULL,1);
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
INSERT INTO `khu_cong_nghiep` VALUES (1,'Khu C├┤ng Nghiß╗çp T├ón B├¼nh','Tan Binh Industry Zone','Q. T├ón B├¼nh, Tp.HCM','086484848','081515418','tanbinhindustryzone@gmail.com','2000-03-05 11:50:00',50,300,'10000','','');
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
INSERT INTO `linhvucvanban` VALUES (1,'Doanh nghiß╗çp',NULL),(2,'─Éß║ºu t╞░',NULL),(3,'Lao ─æß╗Öng',NULL),(4,'M├┤i tr╞░ß╗¥ng',NULL),(5,'X├óy dß╗▒ng',NULL),(6,'Xuß║Ñt nhß║¡p khß║⌐u',NULL),(7,'Kh├íc',NULL),(8,'Cß║Ñp ph├⌐p x├óy dß╗▒ng',5),(9,'Nh├á ß╗ƒ c├┤ng d├ón',5),(10,'Qui hoß║ích',5),(11,'Thß║ºu x├óy dß╗▒ng n╞░ß╗¢c ngo├ái',5),(12,'Chung',5);
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
INSERT INTO `loaihinhdoanhnghiep` VALUES (1,'C├┤ng ty TNHH',NULL,'2014-06-13 11:31:05'),(2,'Doanh Nghiß╗çp T╞░ Nh├ón',NULL,'2014-09-21 15:11:37'),(3,'C├┤ng ty Li├¬n Doanh',NULL,'2014-06-13 11:31:05'),(4,'C├┤ng ty Nh├á N╞░ß╗¢c',NULL,'2014-06-13 11:31:05'),(5,'C├┤ng ty Cß╗ò phß║ºn',NULL,'2014-09-21 15:11:37');
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
INSERT INTO `loaivanban` VALUES (1,'Chß╗ë Thß╗ï'),(2,'B├ío C├ío'),(3,'Nghß╗ï ─æß╗ïnh'),(4,'Quyß║┐t ─æß╗ïnh'),(5,'Th├┤ng t╞░ '),(6,'Kß║┐ hoß║ích'),(7,'Th├┤ng t╞░ li├¬n tß╗ïch'),(8,'Th├┤ng b├ío'),(9,'Luß║¡t'),(10,'Phß╗Ñ lß╗Ñc'),(11,'C├┤ng v─ân li├¬n sß╗ƒ'),(12,'Quy chuß║⌐n kß╗╣ thuß║¡t quß╗æc gia'),(13,'C├┤ng v─ân'),(14,'Lß╗çnh');
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
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nganh`
--

LOCK TABLES `nganh` WRITE;
/*!40000 ALTER TABLE `nganh` DISABLE KEYS */;
INSERT INTO `nganh` VALUES (1,'D╞░ß╗úc phß║⌐m',NULL,NULL,'2014-09-21 15:19:20',NULL),(2,'─Éiß╗çn/─æiß╗çn tß╗¡',NULL,NULL,'2014-09-21 15:19:20',NULL),(3,'Giß║Ñy/sß║ún phß║⌐m tß╗½ giß║Ñy',NULL,NULL,'2014-09-21 15:19:20',NULL),(4,'C╞í kh├¡',NULL,NULL,'2014-09-21 15:19:20',NULL),(5,'Cao su/nhß╗▒a',NULL,NULL,'2014-09-21 15:19:20',NULL),(6,'H├│a chß║Ñt',NULL,NULL,'2014-09-21 15:19:20',NULL),(7,'Ph├ón b├│n/thuß╗æc trß╗½ s├óu',NULL,NULL,'2014-09-21 15:19:20',NULL),(8,'Dß╗çt may',NULL,NULL,'2014-09-21 15:19:20',NULL),(9,'Gß╗ù/sß║ún phß║⌐m gß╗ù',NULL,NULL,'2014-09-21 15:19:20',NULL),(10,'Chß║┐ biß║┐n thß╗▒c phß║⌐m',NULL,NULL,'2014-09-21 15:19:20',NULL),(11,'Chß║┐ biß║┐n n├┤ng sß║ún',NULL,NULL,'2014-09-21 15:19:20',NULL),(12,'Kh├íc',NULL,NULL,'2014-09-21 15:19:20',NULL);
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
INSERT INTO `nguon_gay_on_rung` VALUES (1,'Hoß║ít ─æß╗Öng cß╗ºa c├┤ng nh├ón vi├¬n',NULL),(2,'Hoß║ít ─æß╗Öng sß║ún xuß║Ñt',NULL),(3,'Kh├íc',NULL);
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
INSERT INTO `nguon_thai` VALUES (1,'0101','Chß║Ñt thß║úi tß╗½ qu├í tr├¼nh chß║┐ biß║┐n quß║╖ng sß║»t bß║▒ng ph╞░╞íng ph├íp ho├í-l├╜',1),(2,'0102','Chß║Ñt thß║úi tß╗½ qu├í tr├¼nh chß║┐ biß║┐n quß║╖ng kim loß║íi m├áu bß║▒ng ph╞░╞íng ph├íp ho├í-l├╜',1),(3,'0103','B├╣n thß║úi v├á c├íc chß║Ñt thß║úi kh├íc tß╗½ qu├í tr├¼nh khoan',1),(4,'0104','Chß║Ñt thß║úi tß╗½ qu├í tr├¼nh lß╗ìc dß║ºu',1),(5,'0105','Chß║Ñt thß║úi tß╗½ qu├í tr├¼nh chß║┐ biß║┐n than bß║▒ng ph╞░╞íng ph├íp nhiß╗çt ph├ón',1),(6,'0106','Chß║Ñt thß║úi tß╗½ qu├í tr├¼nh tinh chß║┐ v├á vß║¡n chuyß╗ân kh├¡ thi├¬n nhi├¬n',1),(7,'0201','Chß║Ñt thß║úi tß╗½ qu├í tr├¼nh sß║ún xuß║Ñt, ─æiß╗üu chß║┐, cung ß╗⌐ng v├á sß╗¡ dß╗Ñng axit',2),(8,'0202','Chß║Ñt thß║úi tß╗½ qu├í tr├¼nh sß║ún xuß║Ñt, ─æiß╗üu chß║┐, cung ß╗⌐ng v├á sß╗¡ dß╗Ñng baz╞í',2),(9,'0203','Chß║Ñt thß║úi tß╗½ qu├í tr├¼nh sß║ún xuß║Ñt, ─æiß╗üu chß║┐, cung ß╗⌐ng, sß╗¡ dß╗Ñng muß╗æi, dung dß╗ïch muß╗æi v├á oxit kim loß║íi',2),(11,'0204','Chß║Ñt thß║úi c├│ chß╗⌐a kim loß║íi',2),(12,'0205','B├╣n thß║úi tß╗½ qu├í tr├¼nh xß╗¡ l├╜ n╞░ß╗¢c thß║úi ',2),(13,'0206','Chß║Ñt thß║úi tß╗½ qu├í tr├¼nh sß║ún xuß║Ñt, ─æiß╗üu chß║┐, cung ß╗⌐ng, sß╗¡ dß╗Ñng ho├í chß║Ñt chß╗⌐a l╞░u huß╗│nh, chß║┐ biß║┐n ho├í chß║Ñt chß╗⌐a l╞░u huß╗│nh v├á qu├í tr├¼nh khß╗¡ l╞░u huß╗│nh',2),(14,'0207','Chß║Ñt thß║úi tß╗½ qu├í tr├¼nh sß║ún xuß║Ñt, ─æiß╗üu chß║┐, cung ß╗⌐ng, sß╗¡ dß╗Ñng halogen v├á chuyß╗ân ho├í hß╗úp chß║Ñt chß╗⌐a halogen',2),(15,'0208','Chß║Ñt thß║úi tß╗½ qu├í tr├¼nh sß║ún xuß║Ñt, ─æiß╗üu chß║┐, cung ß╗⌐ng, sß╗¡ dß╗Ñng silicon v├á c├íc dß║½n xuß║Ñt cß╗ºa silicon',2),(16,'0209','Chß║Ñt thß║úi tß╗½ qu├í tr├¼nh sß║ún xuß║Ñt, ─æiß╗üu chß║┐, cung ß╗⌐ng, sß╗¡ dß╗Ñng ho├í chß║Ñt chß╗⌐a photpho v├á chß║┐ biß║┐n ho├í chß║Ñt chß╗⌐a photpho',2),(17,'0210','Chß║Ñt thß║úi tß╗½ qu├í tr├¼nh sß║ún xuß║Ñt, ─æiß╗üu chß║┐, cung ß╗⌐ng, sß╗¡ dß╗Ñng ho├í chß║Ñt chß╗⌐a nit╞í, chß║┐ biß║┐n ho├í chß║Ñt chß╗⌐a nit╞í v├á sß║ún xuß║Ñt ph├ón b├│n',2),(18,'0211','Chß║Ñt thß║úi tß╗½ c├íc qu├í tr├¼nh chß║┐ biß║┐n ho├í chß║Ñt v├┤ c╞í kh├íc',2),(19,'0301','Chß║Ñt thß║úi tß╗½ qu├í tr├¼nh sß║ún xuß║Ñt, ─æiß╗üu chß║┐, cung ß╗⌐ng v├á sß╗¡ dß╗Ñng ho├í chß║Ñt hß╗»u c╞í c╞í bß║ún',3),(20,'0302','Chß║Ñt thß║úi tß╗½ qu├í tr├¼nh sß║ún xuß║Ñt, ─æiß╗üu chß║┐, cung ß╗⌐ng, sß╗¡ dß╗Ñng nhß╗▒a, cao su tß╗òng hß╗úp v├á sß╗úi nh├ón tß║ío',3),(21,'0303','Chß║Ñt thß║úi tß╗½ qu├í tr├¼nh sß║ún xuß║Ñt, ─æiß╗üu chß║┐, cung ß╗⌐ng, sß╗¡ dß╗Ñng phß║⌐m m├áu hß╗»u c╞í v├á v├┤ c╞í ',3),(22,'0304','Chß║Ñt thß║úi tß╗½ qu├í tr├¼nh sß║ún xuß║Ñt, ─æiß╗üu chß║┐, cung ß╗⌐ng, sß╗¡ dß╗Ñng c├íc sß║ún phß║⌐m thuß╗æc bß║úo vß╗ç thß╗▒c vß║¡t, chß║Ñt bß║úo quß║ún gß╗ù v├á c├íc loß║íi bioxit hß╗»u c╞í kh├íc',3),(23,'0305','Chß║Ñt thß║úi tß╗½ qu├í tr├¼nh sß║ún xuß║Ñt, ─æiß╗üu chß║┐, cung ß╗⌐ng v├á sß╗¡ dß╗Ñng d╞░ß╗úc phß║⌐m',3),(24,'0306','Chß║Ñt thß║úi tß╗½ qu├í tr├¼nh sß║ún xuß║Ñt, ─æiß╗üu chß║┐, cung ß╗⌐ng, sß╗¡ dß╗Ñng chß║Ñt b├⌐o, x├á ph├▓ng, chß║Ñt tß║⌐y rß╗¡a, s├ít tr├╣ng v├á mß╗╣ phß║⌐m',3),(25,'0307','Chß║Ñt thß║úi tß╗½ qu├í tr├¼nh sß║ún xuß║Ñt, ─æiß╗üu chß║┐, cung ß╗⌐ng, sß╗¡ dß╗Ñng ho├í chß║Ñt tinh khiß║┐t v├á c├íc ho├í phß║⌐m kh├íc',3),(26,'0401','Chß║Ñt thß║úi tß╗½ nh├á m├íy nhiß╗çt ─æiß╗çn ',4),(27,'0402','Chß║Ñt thß║úi tß╗½ c├íc c╞í sß╗ƒ ─æß╗æt kh├íc ',4),(28,'0501','Chß║Ñt thß║úi tß╗½ ng├ánh c├┤ng nghiß╗çp gang th├⌐p',5),(29,'0502','Chß║Ñt thß║úi tß╗½ qu├í tr├¼nh nhiß╗çt luyß╗çn nh├┤m',5),(30,'0503','Chß║Ñt thß║úi tß╗½ qu├í tr├¼nh nhiß╗çt luyß╗çn ch├¼',5),(31,'0504','Chß║Ñt thß║úi tß╗½ qu├í tr├¼nh nhiß╗çt luyß╗çn kß║╜m',5),(32,'0505','Chß║Ñt thß║úi tß╗½ qu├í tr├¼nh nhiß╗çt luyß╗çn ─æß╗ông',5),(39,'0506','Chß║Ñt thß║úi tß╗½ qu├í tr├¼nh nhiß╗çt luyß╗çn v├áng bß║íc v├á platin',5),(40,'0507','Chß║Ñt thß║úi tß╗½ qu├í tr├¼nh nhiß╗çt luyß╗çn c├íc kim loß║íi m├áu kh├íc',5),(41,'0508','Chß║Ñt thß║úi tß╗½ qu├í tr├¼nh ─æ├║c kim loß║íi ─æen',5),(42,'0509','Chß║Ñt thß║úi tß╗½ qu├í tr├¼nh ─æ├║c kim loß║íi m├áu',5),(43,'0510','Chß║Ñt thß║úi tß╗½ qu├í tr├¼nh thuß╗╖ luyß╗çn kim loß║íi m├áu',5),(44,'0511','B├╣n thß║úi v├á chß║Ñt thß║úi rß║»n tß╗½ qu├í tr├¼nh t├┤i luyß╗çn',5),(45,'0601','Chß║Ñt thß║úi tß╗½ qu├í tr├¼nh sß║ún xuß║Ñt thuß╗╖ tinh v├á sß║ún phß║⌐m thuß╗╖ tinh',6),(46,'0602','Chß║Ñt thß║úi tß╗½ qu├í tr├¼nh sß║ún xuß║Ñt h├áng gß╗æm sß╗⌐, gß║ích ng├│i, tß║Ñm ß╗æp l├ít v├á c├íc sß║ún phß║⌐m x├óy dß╗▒ng kh├íc',6),(48,'0603','Chß║Ñt thß║úi tß╗½ qu├í tr├¼nh sß║ún xuß║Ñt xi m─âng, v├┤i, thß║ích cao v├á c├íc sß║ún phß║⌐m cß╗ºa ch├║ng',6),(49,'0701','Chß║Ñt thß║úi tß╗½ qu├í tr├¼nh xß╗¡ l├╜ ho├í hß╗ìc, che phß╗º bß╗ü mß║╖t kim loß║íi v├á c├íc vß║¡t liß╗çu kh├íc (v├¡ dß╗Ñ qu├í tr├¼nh mß║í ─æiß╗çn, tr├íng kß║╜m, tß║⌐y axit/baz╞í, khß║»c axit, photphat ho├í, tß║⌐y mß╗í nhß╗¥n bß║▒ng kiß╗üm, anot ho├í)',7),(50,'0702','Chß║Ñt thß║úi tß╗½ qu├í tr├¼nh mß║í ─æiß╗çn',7),(51,'2101','test nguon thai',24);
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
INSERT INTO `nguon_thai_khi_thai` VALUES (1,'Kh├¡ thß║úi/Bß╗Ñi',NULL),(2,'M├╣i h├┤i',NULL),(3,'Kh├¡ thß║úi l├▓ h╞íi',NULL),(4,'Kh├│i tß╗½ sß║Ñy, ─æß╗æt',NULL),(5,'M├íy ph├ít ─æiß╗çn dß╗▒ ph├▓ng',NULL);
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
INSERT INTO `nguon_thai_nuoc_thai` VALUES (1,'Sinh hoß║ít hß║▒ng ng├áy',NULL,NULL),(3,'Kh├│i bß╗Ñi v─⌐a h├¿1',NULL,'2014-08-26 13:26:27'),(4,'Xß║ú thß║úi c├┤ng nghiß╗çp',NULL,'2014-08-26 13:30:33');
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
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nguyen_lieu_san_pham`
--

LOCK TABLES `nguyen_lieu_san_pham` WRITE;
/*!40000 ALTER TABLE `nguyen_lieu_san_pham` DISABLE KEYS */;
INSERT INTO `nguyen_lieu_san_pham` VALUES (1,65,2014,NULL,5,'kg',2354240,235245,'2014-08-24 10:37:05',0),(2,65,2014,NULL,5,'kg',2354240,235245,'2014-08-24 10:39:03',0),(3,65,2014,NULL,3,'tß║Ñn',3000,3500,'2014-08-24 11:03:13',0),(4,65,2014,NULL,3,'tß║Ñn',3000,3500,'2014-08-24 11:04:14',0),(5,65,2014,NULL,3,'tß║Ñn',3000,3500,'2014-08-24 11:04:18',0),(13,65,2014,NULL,8,'c├íi',213242,34324,'2014-08-24 11:33:11',0),(14,66,2014,NULL,3,'tß║Ñn',1000,1100,'2014-08-24 12:43:13',0),(16,86,2014,NULL,1,'tß║Ñn',300,34,'2014-09-06 16:55:53',0),(23,71,NULL,NULL,5,'tß║Ñn',324,NULL,'2014-09-08 04:25:30',3),(24,71,NULL,NULL,2,'tß║Ñn',1000,NULL,'2014-09-08 04:26:44',2),(25,71,NULL,NULL,6,'m',900456,NULL,'2014-09-08 04:32:21',4),(26,71,NULL,NULL,1,'tß║Ñn',90.34,NULL,'2014-09-08 04:34:36',1),(27,72,NULL,NULL,2,'tß║Ñn',45,NULL,'2014-09-08 05:02:03',1),(28,72,NULL,NULL,3,'tß║Ñn',100,NULL,'2014-09-08 05:02:15',2),(29,71,NULL,NULL,7,'m',1000000,NULL,'2014-09-12 08:40:27',5),(30,10,2014,1,2,'tß║Ñn',2343,NULL,'2014-09-21 16:18:04',0),(31,10,2014,3,5,'kg',3243,NULL,'2014-09-21 16:20:14',0),(32,10,2014,1,7,'tß║Ñn',234,NULL,'2014-09-21 16:21:44',0),(33,10,2014,2,6,'m3',3434,NULL,'2014-09-21 16:34:42',0),(34,10,2014,2,6,'sdf',234,NULL,'2014-09-21 16:36:54',0),(35,70,NULL,NULL,2,'12',2,NULL,'2014-09-21 18:41:46',1),(36,80,NULL,NULL,6,'fsdaf',23434,NULL,'2014-09-21 18:56:38',1),(37,80,NULL,NULL,5,'sadf',232,NULL,'2014-09-21 18:56:45',2);
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
INSERT INTO `nguyenlieu` VALUES (1,'Cß╗ºi kh├┤','2014-01-31 22:05:05',NULL),(2,'Trß║Ñu','2014-01-31 22:05:05',NULL),(5,'Gß╗ù th├┤ng','2014-01-31 22:05:05',NULL),(6,'Nhß╗▒a PVC','2014-01-31 22:05:05',NULL),(7,'V├úi Cotton','2014-01-31 22:05:05',NULL),(8,'V├úi Silk','2014-01-31 22:05:05',NULL),(9,'Dß║ºu','2014-01-31 22:05:05',NULL),(10,'X─âng AO','2014-01-31 22:05:05',NULL),(12,'Lß╗Ña ß║ñn ─Éß╗Ö','2014-08-24 12:13:45',NULL);
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
  `colThang` int(4) DEFAULT NULL,
  `colNhienLieu` varchar(50) DEFAULT NULL,
  `colDonVi` varchar(50) DEFAULT NULL,
  `colLuongSD` float DEFAULT NULL,
  `colSoNgaySD` float DEFAULT NULL,
  `colMDichSD` varchar(300) DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`colMa`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nhien_lieu_doanh_nghiep`
--

LOCK TABLES `nhien_lieu_doanh_nghiep` WRITE;
/*!40000 ALTER TABLE `nhien_lieu_doanh_nghiep` DISABLE KEYS */;
INSERT INTO `nhien_lieu_doanh_nghiep` VALUES (3,66,2014,NULL,'than cß╗ºi','tß║Ñn',900,153,'─æß╗æt','2014-08-26 09:54:06'),(4,66,2014,NULL,'than ─æ├í','tß║Ñn',900,365,'─æß╗æt l├▓ phß║ún ß╗⌐ng hß║ít nh├ón','2014-08-26 09:54:45'),(5,66,2014,NULL,'dfasd','├ídf',3423,231,'***','2014-08-26 09:56:22'),(7,10,2014,3,'petrol','kg',2,3,'12','2014-09-21 16:52:29'),(8,10,2014,12,'than ─æ├í','tß║Ñn',234,434,'df f','2014-09-21 16:55:29'),(9,10,2014,1,'54','dsf',34,23,'dfsf','2014-09-21 16:55:53'),(10,10,2014,2,'234','├ídf',324,23,'fsdfasdf','2014-09-21 16:56:45');
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
INSERT INTO `nuoc_ngam_doanh_nghiep` VALUES (4,66,2014,'GKHK3','trung taam',23,234,'1234m3/h','1234m3/ngayf','','','2014-08-24 14:50:03'),(5,66,2014,'GKHK3','trung taam',23,234,'1234m3/h','1234m3/ngayf','','','2014-08-24 14:56:19'),(6,66,2014,'dfasdf','asdfsdf',24,234,'34324','23434','afsdf','asdfdf','2014-08-24 14:56:44'),(7,66,2014,'T6Y','terae78',234,78890,'436m3/h','436m3/h','GK2345','fjsdfj fasdhf fahsdfh','2014-08-24 14:59:45'),(8,10,2014,'fasdf','├ídf',0,0,'├ídf','├ídf','├ídf','df','2014-08-29 22:24:20');
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
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nuoc_thai_nha_may`
--

LOCK TABLES `nuoc_thai_nha_may` WRITE;
/*!40000 ALTER TABLE `nuoc_thai_nha_may` DISABLE KEYS */;
INSERT INTO `nuoc_thai_nha_may` VALUES (35,66,1,23545.00,'kiß╗âm tra',234.00,324.00,'2014-08-26 14:16:03',NULL,2014,NULL),(36,66,3,23434.00,'asdfsdfxcvvz g gdfgg',24.00,434.00,'2014-08-26 14:18:34',NULL,2014,NULL),(37,66,4,234.44,'dfadf fasdf',324.00,34.00,'2014-08-26 14:18:59',NULL,2014,NULL),(38,66,1,2332.34,'4rfesr fasd fsadfas fasdfa fsadfasdfasd fasdf',23434.00,234.45,'2014-08-26 14:19:25',NULL,2014,NULL),(40,66,1,2123.00,'121',121.00,12.00,'2014-08-26 15:06:16',NULL,2014,NULL),(42,10,3,243.00,'fsdf',2143.00,234.00,'2014-09-21 17:18:03',NULL,2014,2),(45,10,4,234.00,'fasdfsdf',NULL,NULL,'2014-09-21 17:29:32',NULL,2014,10);
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
INSERT INTO `quocgia` VALUES (1,'Viß╗çt Nam'),(2,'H├án Quß╗æc'),(3,'Nhß║¡t Bß║ún'),(4,'Singapore'),(5,'Malaysia'),(6,'Mß╗╣'),(7,'Anh'),(8,'├Üc'),(9,'Thß╗Ñy ─Éiß╗ân'),(10,'Italy'),(11,'─Éß╗⌐c'),(12,'H├á Lan'),(13,'├üo'),(14,'Brazil'),(15,'Ph├íp');
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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rac_thai_sinh_hoat`
--

LOCK TABLES `rac_thai_sinh_hoat` WRITE;
/*!40000 ALTER TABLE `rac_thai_sinh_hoat` DISABLE KEYS */;
INSERT INTO `rac_thai_sinh_hoat` VALUES (5,'0000-00-00 00:00:00',66,'dß║íng chß║Ñt thß║úi ','13 tß║Ñn','nguß╗ôn ph├ít sinh chß╗º yß║┐u','h├¼nh thß╗⌐c l╞░u giß╗»',1,1,'─æ╞ín vß╗ï thu mua ','mß╗ùi ng├áy','2014-10-15 00:00:00','2014-08-28 21:07:22','ghi ch├║'),(6,'0000-00-00 00:00:00',66,'─æß╗ô cß║╖n','123 m3/ng├áy','hoß║ít ─æß╗Öng nh├á ─ân tß║¡p thß╗â','bß╗Å th├╣ng v├á bß╗ìc r├íc',0,0,'','','2014-08-14 00:00:00','2014-08-28 21:10:53',''),(8,'0000-00-00 00:00:00',66,'r├íc thß║úi sinh hoß║ít','132','fasjdfij','jfisjadfij',1,1,'├│dojf',' ','2014-08-11 00:00:00','2014-08-28 21:28:32','jojfo');
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
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `san_pham_doanh_nghiep`
--

LOCK TABLES `san_pham_doanh_nghiep` WRITE;
/*!40000 ALTER TABLE `san_pham_doanh_nghiep` DISABLE KEYS */;
INSERT INTO `san_pham_doanh_nghiep` VALUES (1,61,NULL,0,NULL,'1','kg',5215,4584,NULL),(2,61,NULL,0,NULL,'1','kg',5215,4584,NULL),(3,61,NULL,0,NULL,'3','kg',5215,4584,NULL),(4,61,NULL,0,NULL,'3','kg',5215,4584,NULL),(5,61,NULL,0,NULL,'3','kg',5215,4584,NULL),(6,61,NULL,0,NULL,'3','kg',5215,4584,NULL),(7,61,NULL,0,NULL,'3','kg',5215,4584,NULL),(8,61,NULL,2014,NULL,'3','kg',5215,4584,NULL),(9,61,NULL,2014,NULL,'3','kg',5215,4584,NULL),(10,61,NULL,2014,NULL,'3','kg',5215,4584,NULL),(11,61,NULL,2014,NULL,'3','kg',5215,4584,NULL),(12,61,NULL,2014,NULL,'3','kg',5215,4584,NULL),(13,61,NULL,2014,NULL,'3','kg',5215,4584,NULL),(14,61,NULL,2014,NULL,'1','test',2005,2005,NULL),(15,62,NULL,2014,NULL,'1','test',1234,12345,NULL),(16,62,NULL,2014,NULL,'1','test',12,12,NULL),(17,62,NULL,2014,NULL,'1','teest',3,23,NULL),(18,62,NULL,2014,NULL,'3','tß║Ñn',3,23,NULL),(19,62,NULL,2014,NULL,'3','tß║Ñn',3,23,NULL),(20,62,NULL,2014,NULL,'3','teest',234,234,NULL),(21,62,NULL,2014,NULL,'4','c├íi',560000,898645,NULL),(22,62,NULL,2014,NULL,'3','c├íi',3000,3500,NULL),(23,62,NULL,2014,NULL,'2','test',2,2,NULL),(24,62,NULL,2014,NULL,'2','test',2,2,NULL),(25,62,NULL,2014,NULL,'2','c├íi',5230,4564,NULL),(26,62,NULL,2014,NULL,'3','test',1323,123,NULL),(27,62,NULL,2014,NULL,'3','test',2313,12323,NULL),(28,62,NULL,2014,NULL,'2','t├⌐t',2,2,NULL),(29,62,NULL,2014,NULL,'1','kai',234,23434,NULL),(30,62,NULL,2014,NULL,'2','├ío thun n├¿',214,234,'2014-08-23 11:58:12'),(31,62,NULL,2014,NULL,'1','bao',89,90,'2014-08-23 12:05:53'),(32,62,NULL,2014,NULL,'1','bao',89,90,'2014-08-23 12:05:56'),(33,62,NULL,2014,NULL,'1','bao',89,90,'2014-08-23 12:05:57'),(34,62,NULL,2014,NULL,'1','bao',89,90,'2014-08-23 12:05:58'),(35,62,NULL,2014,NULL,'1','bao',89,90,'2014-08-23 12:05:59'),(36,62,NULL,2014,NULL,'1','bao',89,90,'2014-08-23 12:05:59'),(37,62,NULL,2014,NULL,'1','bao',89,90,'2014-08-23 12:06:19'),(38,62,NULL,2014,NULL,'1','bao',89,90,'2014-08-23 12:07:23'),(39,62,NULL,2014,NULL,'4','c├íi',54454,54564,'2014-08-23 12:07:58'),(40,64,NULL,2014,NULL,'2','teest',2123,123,'2014-08-24 03:53:25'),(41,64,NULL,2014,NULL,'14','teest',3,2,'2014-08-24 06:02:38'),(45,65,NULL,2014,NULL,'35','m',2432540,2342540,'2014-08-24 09:05:12'),(47,66,NULL,2014,NULL,'15','m',1000000,1500000,'2014-08-24 12:42:25'),(48,66,NULL,2014,NULL,'35','tß║Ñn',3000,3100,'2014-08-24 12:42:44'),(49,16,NULL,2014,NULL,'50','tß║Ñn',3423,324,'2014-08-29 21:58:39'),(52,86,NULL,2014,NULL,'48','tß║Ñn',3000,3500,'2014-09-06 16:27:08'),(53,86,NULL,2014,NULL,'45','c├íi',200,210,'2014-09-06 16:28:56'),(54,86,NULL,2014,NULL,'31','c├íi',324,324,'2014-09-06 16:30:16'),(55,71,1,NULL,NULL,'39','c├íi',1000,1000,'2014-09-08 04:04:18'),(57,71,2,NULL,NULL,'34','c├íi',123,123,'2014-09-08 04:09:13'),(59,71,3,NULL,NULL,'31','c├íi',5484,5484,'2014-09-08 04:42:49'),(64,72,1,NULL,NULL,'39','c├íi',10000,10000,'2014-09-08 05:03:38'),(65,72,2,NULL,NULL,'48','c├íi',10000,10000,'2014-09-08 05:03:57'),(67,10,NULL,2014,2,'48','tß║Ñn',13,34,'2014-09-21 16:02:31'),(68,10,NULL,2014,3,'46','tß║Ñn',345,435,'2014-09-21 16:04:21'),(69,10,NULL,2014,1,'48','test',343,324,'2014-09-21 16:07:57'),(70,10,NULL,2014,1,'50','test',324,234,'2014-09-21 16:36:38'),(71,10,NULL,2014,3,'48','c├íi',234,423,'2014-09-21 18:36:39'),(72,70,1,NULL,NULL,'36','╞░e',1,1,'2014-09-21 18:41:53'),(73,80,1,NULL,NULL,'37','fsd',213,213,'2014-09-21 18:56:53');
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
INSERT INTO `sanpham` VALUES (31,'Chiß║┐u tre',NULL,'2014-08-24 12:35:22','2014-08-24 05:35:22',NULL,'admin-tisemiz',NULL,17),(34,'B├¼nh hoa',NULL,'2014-08-24 12:39:00','2014-08-24 05:39:00',NULL,'admin-tisemiz',NULL,17),(36,'├üo Polo',NULL,'2014-08-24 15:17:35','2014-08-24 08:17:35',NULL,'admin-tisemiz',NULL,18),(37,'├üo Polo',NULL,'2014-08-24 15:23:24','2014-08-24 08:23:24',NULL,'admin-tisemiz',NULL,18),(38,'├üo Polo',NULL,'2014-08-24 15:25:05','2014-08-24 08:25:05',NULL,'admin-tisemiz',NULL,18),(39,'├üo S╞í Mi',NULL,'2014-08-24 15:44:39','2014-08-24 08:44:39',NULL,'admin-tisemiz',NULL,18),(42,'ß╗Éng PVC ',NULL,'2014-08-24 15:46:26','2014-08-24 08:47:45',NULL,'admin-tisemiz','admin-tisemiz',18),(43,'ß╗Éng PVC ',NULL,'2014-08-24 15:47:22','2014-08-24 08:47:22',NULL,'admin-tisemiz',NULL,18),(44,'ß╗Éng PVC ├┤',NULL,'2014-08-24 15:47:37','2014-08-24 08:47:37',NULL,'admin-tisemiz',NULL,18),(45,'T╞░ß╗úng phß║¡t',NULL,'2014-08-24 15:52:02','2014-08-24 08:52:02',NULL,'admin-tisemiz',NULL,16),(46,'Tß╗│ H╞░u',NULL,'2014-08-24 15:52:11','2014-08-24 08:52:11',NULL,'admin-tisemiz',NULL,16),(47,'T╞░ß╗úng ─É├í',NULL,'2014-08-24 15:52:34','2014-08-24 08:52:34',NULL,'admin-tisemiz',NULL,16),(48,'T├║i Nylon',NULL,'2014-08-24 15:54:00','2014-08-24 08:58:16',NULL,'admin-tisemiz','admin-tisemiz',13),(50,'T├║i nhß╗▒a',NULL,'2014-08-24 15:57:53','2014-08-24 08:58:56',NULL,'admin-tisemiz','admin-tisemiz',13);
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
INSERT INTO `thong_tin_kien_nghi_bvmt` VALUES (12,66,'<p>d&agrave;dsf</p>','2014-08-29 20:48:01'),(13,66,'<p>d&agrave;dsf</p>','2014-08-29 20:49:28'),(14,66,'<p>d&agrave;dsf</p>','2014-08-29 20:49:47'),(15,66,'<p>fasdfa fasdf</p>\r\n<p>&aacute;df</p>\r\n<p>fasdf</p>','2014-08-29 20:55:56'),(16,66,'<p>fkasod fjasdjf fasdfh fhasdf</p>\r\n<p>fasd;pfasdf</p>\r\n<p>test kien nghi luu lai trong session</p>\r\n<p>test th&ecirc;m&nbsp;</p>\r\n<p>lß║íi test</p>\r\n<p>&nbsp;test plan 1</p>\r\n<p>test lan 2</p>\r\n<p>test plan 3</p>','2014-08-29 21:08:21'),(17,16,'<p>fasd fasdf fsa</p>','2014-08-29 22:01:25'),(18,10,'<p>cvzcvvzxcv</p>','2014-08-29 22:02:32'),(19,10,'<p>fdzcfxf</p>','2014-08-29 22:25:46'),(20,68,'<p>fasdf fasdf</p>','2014-08-29 22:26:43'),(21,69,'<p>gsdfgsdfg</p>','2014-08-29 22:44:11'),(22,10,'<p>kiß║┐n nghß╗ï&nbsp;bß║úo vß╗ç m&ocirc;i tr╞░ß╗¥ng c&ocirc;ng ty tiß║┐n ph&aacute;t</p>','2014-09-06 18:21:34'),(23,70,'<p>kiß║┐n nghß╗ï</p>','2014-09-06 18:27:54'),(24,70,'<p>kiß║┐n nghß╗ï</p>','2014-09-06 18:35:28'),(25,86,'<p>kiß║┐n nghß╗ï</p>','2014-09-06 18:36:06'),(26,87,'<p>kiß║┐n nghß╗ï</p>','2014-09-06 18:36:48'),(27,10,'<p>kiß║┐n ngß╗ï</p>','2014-09-06 18:37:20');
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
INSERT INTO `thong_tin_tuan_thu_bvmt` VALUES (1,'Quyß║┐t ─æß╗ïnh ph├¬ duyß╗çt b├ío c├ío ─æ├ính gi├í t├íc ─æß╗Öng m├┤i tr╞░ß╗¥ng',1,'2014-09-21 18:09:57'),(2,'Th├┤ng b├ío chß║Ñp nhß║¡n bß║ún cam kß║┐t ─æß║ít chuß║⌐n  m├┤i tr╞░ß╗¥ng',2,'2014-09-21 18:09:57'),(3,'Quyß║┐t ─æß╗ïnh ph├¬ duyß╗çt ─æß╗ü ├ín bß║úo vß╗ç m├┤i tr╞░ß╗¥ng chi tiß║┐t/─æ╞ín giß║ún',3,'2014-09-21 18:09:57'),(4,'Giß║Ñy x├íc nhß║¡n ho├án th├ánh c├íc c├┤ng tr├¼nh, biß╗çn ph├íp bß║úo vß╗ç m├┤i tr╞░ß╗¥ng',4,'2014-09-21 18:09:57'),(5,'Sß╗ò ─æ─âng k├╜ chß╗º nguß╗ôn thß║úi chß║Ñt thß║úi nguy hß║íi ',5,'2014-09-21 18:07:51'),(6,'Giß║Ñy ph├⌐p khai th├íc n╞░ß╗¢c ngß║ºm ',6,'2014-09-21 18:07:51'),(7,'Gi├óy ph├⌐p xß║ú thß║úi',7,'2014-09-21 18:07:51'),(8,'Giß║Ñy ph├⌐p xin ─æß║Ñu nß╗æi',8,'2014-09-21 18:07:51'),(9,'K├¬ khai v├á nß╗Öp ph├¡ bß║úo vß╗ç m├┤i tr╞░ß╗¥ng ─æß╗æi vß╗¢i n╞░ß╗¢c ',9,'2014-09-21 18:07:51'),(10,'Chß╗⌐ng nhß║¡n ISO',10,'2014-09-21 18:07:51'),(11,'Chß╗⌐ng nhß║¡n HACCAP',11,'2014-09-21 18:07:51'),(12,'Triß╗ân khai sß║ún xuß║Ñt sß║ích h╞ín',0,'2014-09-21 18:07:51'),(13,'Kh├íc ',0,'2014-09-21 18:07:51');
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
INSERT INTO `tinhhinhsxkd` VALUES (1,1,'gß╗ù','g',12,12,12,12,48,NULL,1),(2,2,'coppha','g',12,12,12,12,48,NULL,1),(3,3,'keo glue','kg',24532,35353,3525,325,63735,NULL,1);
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
INSERT INTO `vanbanphapquy` VALUES (13,'BTN/676/TN','2007-12-11 00:00:00',NULL,'2007-12-10 00:00:00',NULL,'','','','','','','','2014-09-13 21:54:10',NULL,'','7986',6,13,5,'Jiem-validator.pdf','Quy ─æß╗ïnh vß╗ü chß║Ñt thß║úi nguy hß║íi cho doanh ngiß╗çp trong ni├¬n 2014',NULL);
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
  `colThoiGian` int(4) DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`colMa`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `xu_ly_khi_thai_doanh_nghiep`
--

LOCK TABLES `xu_ly_khi_thai_doanh_nghiep` WRITE;
/*!40000 ALTER TABLE `xu_ly_khi_thai_doanh_nghiep` DISABLE KEYS */;
INSERT INTO `xu_ly_khi_thai_doanh_nghiep` VALUES (15,2014,66,1,'fdasdfasdf',1,1,0,0,1,'fasdf','fasdf',2147483647,'2014-08-27 22:28:44'),(16,2014,66,2,'tsafasfd',1,0,1,0,1,'fsdfa fasdfsd','fasdfasdf',2147483647,'2014-08-27 22:29:01'),(17,2014,66,4,'fsadfa fasfdsdfaf',1,0,0,1,0,'├ídfsdf','fasdfasdf',2147483647,'2014-08-27 22:29:21'),(18,2014,10,2,'├ádfa',1,1,0,0,1,'├ídf','fasdf',2013,'2014-09-21 17:56:46');
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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `xu_ly_tieng_on_rung`
--

LOCK TABLES `xu_ly_tieng_on_rung` WRITE;
/*!40000 ALTER TABLE `xu_ly_tieng_on_rung` DISABLE KEYS */;
INSERT INTO `xu_ly_tieng_on_rung` VALUES (5,2014,66,2,'ffasd fsdffsdf fsdf sfadf fasdf',1,0,0,1,'','2014-06-16 00:00:00','tsaetesaasghi','2014-08-28 19:04:20'),(6,2014,66,2,'nguß╗ôn ph├ít sinh chß╗º yß║┐u',1,1,0,1,'tesstttttt m├┤ tß║ú','2014-06-25 00:00:00','test ghi ch├║','2014-08-28 19:08:04'),(7,2014,66,2,'fsadf fasdf',1,1,1,1,'ffasdf f','2014-08-14 00:00:00','sadfasdf','2014-08-28 19:09:28');
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

-- Dump completed on 2014-09-22  3:13:42
