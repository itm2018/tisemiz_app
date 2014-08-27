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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
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
-- Table structure for table `chat_thai_nguy_hai`
--

DROP TABLE IF EXISTS `chat_thai_nguy_hai`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `chat_thai_nguy_hai` (
  `colMa` int(11) NOT NULL AUTO_INCREMENT,
  `colNam` datetime DEFAULT NULL,
  `colCSSX` int(11) DEFAULT NULL,
  `colDangCT` int(11) DEFAULT NULL,
  `colKLDVi` float DEFAULT NULL,
  `colNguon` varchar(50) DEFAULT NULL,
  `colHThucLuu` varchar(50) DEFAULT NULL,
  `colBanRa` tinyint(1) DEFAULT NULL,
  `colThueThaiBo` tinyint(1) DEFAULT NULL,
  `colDViThuMua` varchar(50) DEFAULT NULL,
  `colDKyThuMua` varchar(50) DEFAULT NULL,
  `colGhiChu` tinytext,
  PRIMARY KEY (`colMa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chat_thai_nguy_hai`
--

LOCK TABLES `chat_thai_nguy_hai` WRITE;
/*!40000 ALTER TABLE `chat_thai_nguy_hai` DISABLE KEYS */;
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
  `colDangCT` int(11) DEFAULT NULL,
  `colKLDVi` float DEFAULT NULL,
  `colNguon` varchar(50) DEFAULT NULL,
  `colHThucLuu` varchar(50) DEFAULT NULL,
  `colBanRa` tinyint(1) DEFAULT NULL,
  `colThueThaiBo` tinyint(1) DEFAULT NULL,
  `colDViThuMua` varchar(50) DEFAULT NULL,
  `colDKyThuMua` varchar(50) DEFAULT NULL,
  `colGhiChu` tinytext,
  PRIMARY KEY (`colMa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chat_thai_ran_cong_nghiep`
--

LOCK TABLES `chat_thai_ran_cong_nghiep` WRITE;
/*!40000 ALTER TABLE `chat_thai_ran_cong_nghiep` DISABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dien_nuoc_doanh_nghiep`
--

LOCK TABLES `dien_nuoc_doanh_nghiep` WRITE;
/*!40000 ALTER TABLE `dien_nuoc_doanh_nghiep` DISABLE KEYS */;
INSERT INTO `dien_nuoc_doanh_nghiep` VALUES (4,66,2014,'234g','200',200,'2014-08-24 13:30:33'),(5,66,2014,'324t','13',2334,'2014-08-24 13:36:16'),(6,66,2014,'2345f','3',23545,'2014-08-24 13:36:54');
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
  `colSanpham` varchar(1000) DEFAULT NULL,
  `create_by` varchar(45) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `saving_status` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`colMa`)
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doanh_nghiep`
--

LOCK TABLES `doanh_nghiep` WRITE;
/*!40000 ALTER TABLE `doanh_nghiep` DISABLE KEYS */;
INSERT INTO `doanh_nghiep` VALUES (1,'Công ty TNHH Tiến Phát','Tien Phat Ltd.','Lô số 2, KCN Tân Bình, Quận Tân Bình, Tp. HCM','(08)3456789','(08)35647890','tienphat@gmail.com','369258147',29,21,'2013-07-23 02:21:00','BTX0934834885','BTX0934834885',2,1,1,NULL,NULL,NULL,2,'May mặc, quần áo, hàng xuất khẩu','',2,'','','','','','',NULL,NULL,NULL,NULL,'May mặc, quần áo, hàng xuất khẩu',NULL,NULL,0),(2,'Công ty CP Vạn Thắng','Van Thang JSC.','Lô 3, KCN Tân Bình, Q. Tân Bình, Tp.HCM','(08)3454878','021544484','info@vanthang.vn','498815454988',NULL,NULL,'1999-05-23 11:46:00','BTX093483488VB','BTX09348348VN',2,2,2,NULL,NULL,NULL,2,'thủ công mỹ nghệ, đồ gỗ','30000sp/nam',2,'sơ chế gỗ, gia công, đánh bóng, đóng gói, xuất xưởng','','','','','',NULL,NULL,NULL,NULL,'ghế, bàn',NULL,NULL,0),(3,'Công ty CP JVIT','JV-IT Jsc','Lô 10, KCN Tân Bình','(08)3456789','(08)34567890','info@jv-it.com.vn','4958546782',NULL,NULL,'1999-05-23 11:46:00',NULL,'BTX0934834885',3,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(4,'Công ty CP T&T','T&T','Lô 10, KCN Tân Bình','(08)3456789','(08)34567890','info@jv-it.com.vn','498815454988',NULL,NULL,'1999-05-23 11:46:00',NULL,'BTX0934834885',3,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(5,'Công ty Hoa Sen','Hoa Sen Ltd','Lô 10, KCN Tân Bình','(08)3456789','(08)34567890','info@jv-it.com.vn','498815454988',NULL,NULL,'1999-05-23 11:46:00',NULL,'BTX0934834885',3,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(6,'Công ty Evolable Asia','EVA','Lô 10, KCN Tân Bình','(08)3456789','(08)34567890','vinfo@jv-it.com.vn','498815454988',NULL,NULL,'1999-05-23 11:46:00',NULL,'BTX0934834885',3,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(7,'Công ty Radar','Radar','Lô 10, KCN Tân Bình','(08)3456789','(08)34567890','info@jv-it.com.vn','498815454988',NULL,NULL,'1999-05-23 11:46:00',NULL,'BTX0934834885',3,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(8,'Công ty Lực Thiên','LT media Ltd','Lô 10, KCN Tân Bình','(08)3456789','(08)34567890','info@jv-it.com.vn','498815454988',NULL,NULL,'1999-05-23 11:46:00',NULL,'BTX0934834885',3,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(9,'Công ty Hoàn Vũ','HV Ltd','Lô 10, KCN Tân Bình','(08)3456789','(08)34567890','info@jv-it.com.vn','498815454988',NULL,NULL,'2000-05-23 11:46:00',NULL,'BTX0934834885',3,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(10,'Công ty TNHH Tiến Phát','Tien Phat Ltd.','Lô số 2, KCN Tân Bình, Quận Tân Bình, Tp. HCM','(08)3456789','(08)35647890','tienphat@gmail.com','369258147',29,21,'2013-07-23 02:21:00','BTX0934834885','BTX0934834885',2,1,1,NULL,NULL,NULL,2,'May mặc, quần áo, hàng xuất khẩu','',2,'','','','','','?',NULL,NULL,NULL,NULL,'May mặc, quần áo, hàng xuất khẩu',NULL,NULL,0),(11,'Công ty TNHH Tiến Phát','Tien Phat Ltd.','Lô số 2, KCN Tân Bình, Quận Tân Bình, Tp. HCM','(08)3456789','(08)35647890','tienphat@gmail.com','369258147',29,21,'2013-07-23 02:21:00','BTX0934834885','BTX0934834885',2,1,1,NULL,NULL,NULL,2,'May mặc, quần áo, hàng xuất khẩu','',2,'','','','','','?',NULL,NULL,NULL,NULL,'May mặc, quần áo, hàng xuất khẩu',NULL,NULL,0),(12,'Công ty TNHH Tiến Phát','Tien Phat Ltd.','Lô số 2, KCN Tân Bình, Quận Tân Bình, Tp. HCM','(08)3456789','(08)35647890','tienphat@gmail.com','369258147',29,21,'2013-07-23 02:21:00','BTX0934834885','BTX0934834885',2,1,1,NULL,NULL,NULL,2,'May mặc, quần áo, hàng xuất khẩu','',2,'','','','','','?',NULL,NULL,NULL,NULL,'May mặc, quần áo, hàng xuất khẩu',NULL,NULL,0),(13,'Công ty TNHH Tiến Phát','Tien Phat Ltd.','Lô số 2, KCN Tân Bình, Quận Tân Bình, Tp. HCM','(08)3456789','(08)35647890','tienphat@gmail.com','369258147',29,21,'2013-07-23 02:21:00','BTX0934834885','BTX0934834885',2,1,1,NULL,NULL,NULL,2,'May mặc, quần áo, hàng xuất khẩu','',2,'','','','','','?',NULL,NULL,NULL,NULL,'May mặc, quần áo, hàng xuất khẩu',NULL,NULL,0),(14,'Công ty TNHH Tiến Phát','Tien Phat Ltd.','Lô số 2, KCN Tân Bình, Quận Tân Bình, Tp. HCM','(08)3456789','(08)35647890','tienphat@gmail.com','369258147',29,21,'2013-07-23 02:21:00','BTX0934834885','BTX0934834885',2,1,1,NULL,NULL,NULL,2,'May mặc, quần áo, hàng xuất khẩu','',2,'','','','','','?',NULL,NULL,NULL,NULL,'May mặc, quần áo, hàng xuất khẩu',NULL,NULL,0),(15,'Công ty TNHH Tiến Phát','Tien Phat Ltd.','Lô số 2, KCN Tân Bình, Quận Tân Bình, Tp. HCM','(08)3456789','(08)35647890','tienphat@gmail.com','369258147',29,21,'2013-07-23 02:21:00','BTX0934834885','BTX0934834885',2,1,1,NULL,NULL,NULL,2,'May mặc, quần áo, hàng xuất khẩu','',2,'','','','','','?',NULL,NULL,NULL,NULL,'May mặc, quần áo, hàng xuất khẩu',NULL,NULL,0),(16,'Công ty TNHH Tiến Phát','Tien Phat Ltd.','Lô số 2, KCN Tân Bình, Quận Tân Bình, Tp. HCM','(08)3456789','(08)35647890','tienphat@gmail.com','369258147',29,21,'2013-07-23 02:21:00','BTX0934834885','BTX0934834885',2,1,1,NULL,NULL,NULL,2,'May mặc, quần áo, hàng xuất khẩu','',2,'','','','','','?',NULL,NULL,NULL,NULL,'May mặc, quần áo, hàng xuất khẩu',NULL,NULL,0),(17,'Công ty TNHH Tiến Phát','Tien Phat Ltd.','Lô số 2, KCN Tân Bình, Quận Tân Bình, Tp. HCM','(08)3456789','(08)35647890','tienphat@gmail.com','369258147',29,21,'2013-07-23 02:21:00','BTX0934834885','BTX0934834885',2,1,1,NULL,NULL,NULL,2,'May mặc, quần áo, hàng xuất khẩu','',2,'','','','','','?',NULL,NULL,NULL,NULL,'May mặc, quần áo, hàng xuất khẩu',NULL,NULL,0),(18,'Công ty TNHH Tiến Phát','Tien Phat Ltd.','Lô số 2, KCN Tân Bình, Quận Tân Bình, Tp. HCM','(08)3456789','(08)35647890','tienphat@gmail.com','369258147',29,21,'2013-07-23 02:21:00','BTX0934834885','BTX0934834885',2,1,1,NULL,NULL,NULL,2,'May mặc, quần áo, hàng xuất khẩu','',2,'','','','','','?',NULL,NULL,NULL,NULL,'May mặc, quần áo, hàng xuất khẩu',NULL,NULL,0),(19,'Công ty TNHH Tiến Phát','Tien Phat Ltd.','Lô số 2, KCN Tân Bình, Quận Tân Bình, Tp. HCM','(08)3456789','(08)35647890','tienphat@gmail.com','369258147',29,21,'2013-07-23 02:21:00','BTX0934834885','BTX0934834885',2,1,1,NULL,NULL,NULL,2,'May mặc, quần áo, hàng xuất khẩu','',2,'','','','','','?',NULL,NULL,NULL,NULL,'May mặc, quần áo, hàng xuất khẩu',NULL,NULL,0),(20,'Công ty TNHH Tiến Phát','Tien Phat Ltd.','Lô số 2, KCN Tân Bình, Quận Tân Bình, Tp. HCM','(08)3456789','(08)35647890','tienphat@gmail.com','369258147',29,21,'2013-07-23 02:21:00','BTX0934834885','BTX0934834885',2,1,1,NULL,NULL,NULL,2,'May mặc, quần áo, hàng xuất khẩu','',2,'','','','','','?',NULL,NULL,NULL,NULL,'May mặc, quần áo, hàng xuất khẩu',NULL,NULL,0),(21,'Công ty TNHH Tiến Phát','Tien Phat Ltd.','Lô số 2, KCN Tân Bình, Quận Tân Bình, Tp. HCM','(08)3456789','(08)35647890','tienphat@gmail.com','369258147',29,21,'2013-07-23 02:21:00','BTX0934834885','BTX0934834885',2,1,1,NULL,NULL,NULL,2,'May mặc, quần áo, hàng xuất khẩu','',2,'','','','','','?',NULL,NULL,NULL,NULL,'May mặc, quần áo, hàng xuất khẩu',NULL,NULL,0),(22,'Công ty TNHH Tiến Phát','Tien Phat Ltd.','Lô số 2, KCN Tân Bình, Quận Tân Bình, Tp. HCM','(08)3456789','(08)35647890','tienphat@gmail.com','369258147',29,21,'2013-07-23 02:21:00','BTX0934834885','BTX0934834885',2,1,1,NULL,NULL,NULL,2,'May mặc, quần áo, hàng xuất khẩu','',2,'','','','','','?',NULL,NULL,NULL,NULL,'May mặc, quần áo, hàng xuất khẩu',NULL,NULL,0),(23,'Công ty TNHH Tiến Phát','Tien Phat Ltd.','Lô số 2, KCN Tân Bình, Quận Tân Bình, Tp. HCM','(08)3456789','(08)35647890','tienphat@gmail.com','369258147',29,21,'2013-07-23 02:21:00','BTX0934834885','BTX0934834885',2,1,1,NULL,NULL,NULL,2,'May mặc, quần áo, hàng xuất khẩu','',2,'','','','','','?',NULL,NULL,NULL,NULL,'May mặc, quần áo, hàng xuất khẩu',NULL,NULL,0),(24,'Công ty TNHH Tiến Phát','Tien Phat Ltd.','Lô số 2, KCN Tân Bình, Quận Tân Bình, Tp. HCM','(08)3456789','(08)35647890','tienphat@gmail.com','369258147',29,21,'2013-07-23 02:21:00','BTX0934834885','BTX0934834885',2,1,1,NULL,NULL,NULL,2,'May mặc, quần áo, hàng xuất khẩu','',2,'','','','','','?',NULL,NULL,NULL,NULL,'May mặc, quần áo, hàng xuất khẩu',NULL,NULL,0),(25,'Công ty TNHH Tiến Phát','Tien Phat Ltd.','Lô số 2, KCN Tân Bình, Quận Tân Bình, Tp. HCM','(08)3456789','(08)35647890','tienphat@gmail.com','369258147',29,21,'2013-07-23 02:21:00','BTX0934834885','BTX0934834885',2,1,1,NULL,NULL,NULL,2,'May mặc, quần áo, hàng xuất khẩu','',2,'','','','','','?',NULL,NULL,NULL,NULL,'May mặc, quần áo, hàng xuất khẩu',NULL,NULL,0),(26,'Công ty TNHH Tiến Phát','Tien Phat Ltd.','Lô số 2, KCN Tân Bình, Quận Tân Bình, Tp. HCM','(08)3456789','(08)35647890','tienphat@gmail.com','369258147',29,21,'2013-07-23 02:21:00','BTX0934834885','BTX0934834885',2,1,1,NULL,NULL,NULL,2,'May mặc, quần áo, hàng xuất khẩu','',2,'','','','','','?',NULL,NULL,NULL,NULL,'May mặc, quần áo, hàng xuất khẩu',NULL,NULL,0),(27,'Công ty TNHH Tiến Phát','Tien Phat Ltd.','Lô số 2, KCN Tân Bình, Quận Tân Bình, Tp. HCM','(08)3456789','(08)35647890','tienphat@gmail.com','369258147',29,21,'2013-07-23 02:21:00','BTX0934834885','BTX0934834885',2,1,1,NULL,NULL,NULL,2,'May mặc, quần áo, hàng xuất khẩu','',2,'','','','','','?',NULL,NULL,NULL,NULL,'May mặc, quần áo, hàng xuất khẩu',NULL,NULL,0),(28,'Công ty TNHH Tiến Phát','Tien Phat Ltd.','Lô số 2, KCN Tân Bình, Quận Tân Bình, Tp. HCM','(08)3456789','(08)35647890','tienphat@gmail.com','369258147',29,21,'2013-07-23 02:21:00','BTX0934834885','BTX0934834885',2,1,1,NULL,NULL,NULL,2,'May mặc, quần áo, hàng xuất khẩu','',2,'','','','','','?',NULL,NULL,NULL,NULL,'May mặc, quần áo, hàng xuất khẩu',NULL,NULL,0),(29,'Công ty TNHH Tiến Phát','Tien Phat Ltd.','Lô số 2, KCN Tân Bình, Quận Tân Bình, Tp. HCM','(08)3456789','(08)35647890','tienphat@gmail.com','369258147',29,21,'2013-07-23 02:21:00','BTX0934834885','BTX0934834885',2,1,1,NULL,NULL,NULL,2,'May mặc, quần áo, hàng xuất khẩu','',2,'','','','','','?',NULL,NULL,NULL,NULL,'May mặc, quần áo, hàng xuất khẩu',NULL,NULL,0),(30,'Công ty TNHH Tiến Phát','Tien Phat Ltd.','Lô số 2, KCN Tân Bình, Quận Tân Bình, Tp. HCM','(08)3456789','(08)35647890','tienphat@gmail.com','369258147',29,21,'2013-07-23 02:21:00','BTX0934834885','BTX0934834885',2,1,1,NULL,NULL,NULL,2,'May mặc, quần áo, hàng xuất khẩu','',2,'','','','','','?',NULL,NULL,NULL,NULL,'May mặc, quần áo, hàng xuất khẩu',NULL,NULL,0),(31,'Công ty TNHH Tiến Phát','Tien Phat Ltd.','Lô số 2, KCN Tân Bình, Quận Tân Bình, Tp. HCM','(08)3456789','(08)35647890','tienphat@gmail.com','369258147',29,21,'2013-07-23 02:21:00','BTX0934834885','BTX0934834885',2,1,1,NULL,NULL,NULL,2,'May mặc, quần áo, hàng xuất khẩu','',2,'','','','','','?',NULL,NULL,NULL,NULL,'May mặc, quần áo, hàng xuất khẩu',NULL,NULL,0),(32,'Công ty TNHH Tiến Phát','Tien Phat Ltd.','Lô số 2, KCN Tân Bình, Quận Tân Bình, Tp. HCM','(08)3456789','(08)35647890','tienphat@gmail.com','369258147',29,21,'2013-07-23 02:21:00','BTX0934834885','BTX0934834885',2,1,1,NULL,NULL,NULL,2,'May mặc, quần áo, hàng xuất khẩu','',2,'','','','','','?',NULL,NULL,NULL,NULL,'May mặc, quần áo, hàng xuất khẩu',NULL,NULL,0),(33,'Công ty TNHH Tiến Phát','Tien Phat Ltd.','Lô số 2, KCN Tân Bình, Quận Tân Bình, Tp. HCM','(08)3456789','(08)35647890','tienphat@gmail.com','369258147',29,21,'2013-07-23 02:21:00','BTX0934834885','BTX0934834885',2,1,1,NULL,NULL,NULL,2,'May mặc, quần áo, hàng xuất khẩu','',2,'','','','','','?',NULL,NULL,NULL,NULL,'May mặc, quần áo, hàng xuất khẩu',NULL,NULL,0),(34,'Công ty TNHH Tiến Phát','Tien Phat Ltd.','Lô số 2, KCN Tân Bình, Quận Tân Bình, Tp. HCM','(08)3456789','(08)35647890','tienphat@gmail.com','369258147',29,21,'2013-07-23 02:21:00','BTX0934834885','BTX0934834885',2,1,1,NULL,NULL,NULL,2,'May mặc, quần áo, hàng xuất khẩu','',2,'','','','','','?',NULL,NULL,NULL,NULL,'May mặc, quần áo, hàng xuất khẩu',NULL,NULL,0),(35,'Công ty TNHH Tiến Phát','Tien Phat Ltd.','Lô số 2, KCN Tân Bình, Quận Tân Bình, Tp. HCM','(08)3456789','(08)35647890','tienphat@gmail.com','369258147',29,21,'2013-07-23 02:21:00','BTX0934834885','BTX0934834885',2,1,1,NULL,NULL,NULL,2,'May mặc, quần áo, hàng xuất khẩu','',2,'','','','','','?',NULL,NULL,NULL,NULL,'May mặc, quần áo, hàng xuất khẩu',NULL,NULL,0),(36,'Công ty TNHH Tiến Phát','Tien Phat Ltd.','Lô số 2, KCN Tân Bình, Quận Tân Bình, Tp. HCM','(08)3456789','(08)35647890','tienphat@gmail.com','369258147',29,21,'2013-07-23 02:21:00','BTX0934834885','BTX0934834885',2,1,1,NULL,NULL,NULL,2,'May mặc, quần áo, hàng xuất khẩu','',2,'','','','','','?',NULL,NULL,NULL,NULL,'May mặc, quần áo, hàng xuất khẩu',NULL,NULL,0),(37,'Công ty TNHH Tiến Phát','Tien Phat Ltd.','Lô số 2, KCN Tân Bình, Quận Tân Bình, Tp. HCM','(08)3456789','(08)35647890','tienphat@gmail.com','369258147',29,21,'2013-07-23 02:21:00','BTX0934834885','BTX0934834885',2,1,1,NULL,NULL,NULL,2,'May mặc, quần áo, hàng xuất khẩu','',2,'','','','','','?',NULL,NULL,NULL,NULL,'May mặc, quần áo, hàng xuất khẩu',NULL,NULL,0),(38,'Công ty TNHH Tiến Phát','Tien Phat Ltd.','Lô số 2, KCN Tân Bình, Quận Tân Bình, Tp. HCM','(08)3456789','(08)35647890','tienphat@gmail.com','369258147',29,21,'2013-07-23 02:21:00','BTX0934834885','BTX0934834885',2,1,1,NULL,NULL,NULL,2,'May mặc, quần áo, hàng xuất khẩu','',2,'','','','','','?',NULL,NULL,NULL,NULL,'May mặc, quần áo, hàng xuất khẩu',NULL,NULL,0),(39,'Công ty TNHH Tiến Phát','Tien Phat Ltd.','Lô số 2, KCN Tân Bình, Quận Tân Bình, Tp. HCM','(08)3456789','(08)35647890','tienphat@gmail.com','369258147',29,21,'2013-07-23 02:21:00','BTX0934834885','BTX0934834885',2,1,1,NULL,NULL,NULL,2,'May mặc, quần áo, hàng xuất khẩu','',2,'','','','','','?',NULL,NULL,NULL,NULL,'May mặc, quần áo, hàng xuất khẩu',NULL,NULL,0),(40,'Công ty TNHH Tiến Phát','Tien Phat Ltd.','Lô số 2, KCN Tân Bình, Quận Tân Bình, Tp. HCM','(08)3456789','(08)35647890','tienphat@gmail.com','369258147',29,21,'2013-07-23 02:21:00','BTX0934834885','BTX0934834885',2,1,1,NULL,NULL,NULL,2,'May mặc, quần áo, hàng xuất khẩu','',2,'','','','','','?',NULL,NULL,NULL,NULL,'May mặc, quần áo, hàng xuất khẩu',NULL,NULL,0),(41,'Công ty TNHH Tiến Phát','Tien Phat Ltd.','Lô số 2, KCN Tân Bình, Quận Tân Bình, Tp. HCM','(08)3456789','(08)35647890','tienphat@gmail.com','369258147',29,21,'2013-07-23 02:21:00','BTX0934834885','BTX0934834885',2,1,1,NULL,NULL,NULL,2,'May mặc, quần áo, hàng xuất khẩu','',2,'','','','','','?',NULL,NULL,NULL,NULL,'May mặc, quần áo, hàng xuất khẩu',NULL,NULL,0),(42,'Tên Doanh Nghiệp','dn','145/56B Thoại Ngọc Hầu','08456456','','huynhsonca@gmail.com',NULL,NULL,NULL,NULL,'adsf','',1,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,1,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(43,'Tên Doanh Nghiệp','dn','145/56B Thoại Ngọc Hầu','08456456','','huynhsonca@gmail.com',NULL,NULL,NULL,NULL,'adsf','',1,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,1,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(44,'Tiki','Tiki','Hưng Phú, Q.8, Tp. HCM','0874545842','','hungphuco@gmail.com',NULL,32425,45345,'2007-06-01 00:00:00','DTCP324/324','GP029343/KH',2,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,2,'<p>Tiếng Anh giọng Anh tr&ocirc;i chảy của kẻ chặt đầu nh&agrave; b&aacute;o Mỹ Jame Foley trong đoạn video đang g&acirc;y n&ecirc;n nghi vấn rằng y c&oacute; thể l&agrave; một c&ocirc;ng d&acirc;n Anh.&nbsp;</p>\r\n<p>Tuy nhi&e',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(45,'Tiki','Tiki','Hưng Phú, Q.8, Tp. HCM','0874545842','','hungphuco@gmail.com',NULL,32425,45345,'2007-06-01 00:00:00','DTCP324/324','GP029343/KH',2,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,2,'<p>Tiếng Anh giọng Anh tr&ocirc;i chảy của kẻ chặt đầu nh&agrave; b&aacute;o Mỹ Jame Foley trong đoạn video đang g&acirc;y n&ecirc;n nghi vấn rằng y c&oacute; thể l&agrave; một c&ocirc;ng d&acirc;n Anh.&nbsp;</p>\r\n<p>Tuy nhi&e',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(46,'Tiki','Tiki','Hưng Phú, Q.8, Tp. HCM','0874545842','','hungphuco@gmail.com',NULL,32425,45345,'2007-06-01 00:00:00','DTCP324/324','GP029343/KH',2,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,2,'<p>Tiếng Anh giọng Anh tr&ocirc;i chảy của kẻ chặt đầu nh&agrave; b&aacute;o Mỹ Jame Foley trong đoạn video đang g&acirc;y n&ecirc;n nghi vấn rằng y c&oacute; thể l&agrave; một c&ocirc;ng d&acirc;n Anh.&nbsp;</p>\r\n<p>Tuy nhi&e',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(47,'Tiki','Tiki','Hưng Phú, Q.8, Tp. HCM','0874545842','','hungphuco@gmail.com',NULL,32425,45345,'2007-06-01 00:00:00','DTCP324/324','GP029343/KH',2,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,2,'<p>Tiếng Anh giọng Anh tr&ocirc;i chảy của kẻ chặt đầu nh&agrave; b&aacute;o Mỹ Jame Foley trong đoạn video đang g&acirc;y n&ecirc;n nghi vấn rằng y c&oacute; thể l&agrave; một c&ocirc;ng d&acirc;n Anh.&nbsp;</p>\r\n<p>Tuy nhi&e',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(48,'Tiki','Tiki','Hưng Phú, Q.8, Tp. HCM','0874545842','','hungphuco@gmail.com',NULL,32425,45345,'2007-06-01 00:00:00','DTCP324/324','GP029343/KH',2,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,2,'<p>Tiếng Anh giọng Anh tr&ocirc;i chảy của kẻ chặt đầu nh&agrave; b&aacute;o Mỹ Jame Foley trong đoạn video đang g&acirc;y n&ecirc;n nghi vấn rằng y c&oacute; thể l&agrave; một c&ocirc;ng d&acirc;n Anh.&nbsp;</p>\r\n<p>Tuy nhi&e',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(49,'Tiến Vua','','145/56B Thoại Ngọc Hầu','0874545842','','hungphuco@gmail.com',NULL,0,0,'2004-01-12 00:00:00','DTCP324/324','GP029343/KH',2,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,8,'<pre class=\"lang-php prettyprint prettyprinted\"><code><span class=\"kwd\">class</span><span class=\"typ\">BookController</span><span class=\"kwd\">extends</span><span class=\"typ\">AppController</span><span class=\"pun\">{</span><span class=\"kwd\">function</span><sp',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(50,'Tên Doanh Nghiệp','dn','Hưng Phú, Q.8, Tp. HCM','0874545842','','hungphuco@gmail.com',NULL,NULL,NULL,'2007-06-01 00:00:00','DTCP324/324','GP029343/KH',1,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,10,'<p>t&eacute;t</p>',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(51,'Tên Doanh Nghiệp','dn','Hưng Phú, Q.8, Tp. HCM','0874545842','','hungphuco@gmail.com',NULL,NULL,NULL,'2007-06-01 00:00:00','DTCP324/324','GP029343/KH',1,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,10,'<p>t&eacute;t</p>',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(52,'Tên Doanh Nghiệp','dn','Hưng Phú, Q.8, Tp. HCM','0874545842','','hungphuco@gmail.com',NULL,NULL,NULL,'2007-06-01 00:00:00','DTCP324/324','GP029343/KH',1,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,10,'<p>t&eacute;t</p>',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(53,'Tên Doanh Nghiệp','dn','Hưng Phú, Q.8, Tp. HCM','0874545842','','hungphuco@gmail.com',NULL,NULL,NULL,'2007-06-01 00:00:00','DTCP324/324','GP029343/KH',1,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,10,'<p>t&eacute;t</p>',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(54,'Cty TNHH Bình Minh','Binh Minh Ltd','Cụm cn tân qui','012834921348','','cahiepsi@yahoo.com',NULL,NULL,NULL,'2014-03-12 00:00:00','GP124235346','GP324543534',2,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,1,'<p>quy tr&igrave;nh sản suất</p>',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(55,'Cty TNHH Hoang Hon','Hoang Hon Ltd','tran van dang - sai gon','083248787','','test.abc@gmail.com',NULL,NULL,NULL,'1977-03-20 00:00:00','sadfasdf','sdfasdg',1,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,1,'<p>tran cong ly</p>',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(56,'Tên Doanh Nghiệp','Tiki','Hưng Phú, Q.8, Tp. HCM','0874545842','','hungphuco@gmail.com',NULL,NULL,NULL,'2007-06-01 00:00:00','DTCP324/324','GP029343/KH',3,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,1,'<p>quy tr&igrave;nh c&ocirc;ng nghệ sản xuất</p>',NULL,NULL,NULL,NULL,'failed upload',2014,NULL,NULL,NULL,NULL,NULL,NULL,0),(57,'Đây là doanh nghiệp thử nghiệm','This is testing enterprise','Hưng Phú, Q.8, Tp. HCM','0874545842','','hungphuco@gmail.com',NULL,NULL,NULL,'2007-06-01 00:00:00','DTCP324/324','GP029343/KH',2,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,2,'<p>đ&acirc;y l&agrave; quy tr&igrave;nh c&ocirc;ng nghệ sản xuất</p>',NULL,NULL,NULL,NULL,'failed upload',2014,NULL,NULL,NULL,NULL,NULL,NULL,0),(58,'Tiki','Binh Minh Ltd','Hưng Phú, Q.8, Tp. HCM','0874545842','','hungphuco@gmail.com',NULL,NULL,NULL,'1977-03-20 00:00:00','','',1,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,3,'',NULL,NULL,NULL,NULL,'failed upload',2014,NULL,NULL,NULL,NULL,NULL,NULL,0),(59,'SCDF Stock Investment','SCDF Stock Investment','145/56B Thoại Ngọc Hầu','012834921348','','cahiepsi@yahoo.com',NULL,NULL,NULL,NULL,'DTCP324/324','GPafjhsdf',1,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,1,'',NULL,NULL,NULL,NULL,'failed upload',2014,NULL,NULL,NULL,NULL,NULL,NULL,0),(60,'SCDF Stock Investment','SCDF Stock Investment','Cụm cn tân qui','08458484','312345234','hungphuco@gmail.com',NULL,NULL,NULL,'2014-03-12 00:00:00','DTCP324/324','GP029343/KH',1,1,2,3,4,5,0,NULL,NULL,2,'',NULL,NULL,NULL,NULL,'/uploads/IMG_0168.jpg',2014,NULL,NULL,NULL,NULL,NULL,NULL,0),(61,'testing','testing','Hưng Phú, Q.8, Tp. HCM','08458484','34453566','hungphuco@gmail.com','1234567678',32425,45345,'2004-01-12 00:00:00','GPDT17987','GPHDKD2548',2,1,2,3,4,NULL,0,NULL,'1 triệu tấn/ năm',6,'<p>qui tr&igrave;nh sản xuất</p>',NULL,NULL,NULL,NULL,'/uploads/IMG_0172.jpg',2014,1,'Huỳnh Sơn Ca','Trần Văn Sơn','cá hộp, bàn ghế, cốp pha, bê tông',NULL,NULL,0),(62,'SCDF Stock Investment','SCDF Stock Investment','145/56B Thoại Ngọc Hầu','08458484','34453566','hungphuco@gmail.com','1234567678',32425,45345,'2005-03-12 00:00:00','DTCP324/324','GP029343/KH',2,1,2,3,NULL,NULL,NULL,NULL,'1 triệu tấn/ năm',1,'<p>this is testing data</p>',NULL,NULL,NULL,NULL,'/uploads/IMG_0318.jpg',2014,1,'Huỳnh Sơn Ca','Trần Văn Sơn','cá hộp, bàn ghế, cốp pha, bê tông',NULL,NULL,0),(63,'HSCB JSC','Huynh Son Ca Bank Joint Stock Company','4','0874545842','','hungphuco@gmail.com','1234567678',32425,45345,'2004-03-12 00:00:00','GP53465','GHJKJ154874',3,1,2,3,NULL,NULL,NULL,NULL,'1 triệu tấn/ năm',1,'',NULL,NULL,NULL,NULL,NULL,2014,0,'Huỳnh Sơn Ca','Huỳnh Sơn Ca','cá hộp, bàn ghế, cốp pha, bê tông',NULL,NULL,0),(64,'SCDF Stock Investment','testing','145/56B Thoại Ngọc Hầu','08458484','','hungphuco@gmail.com','1234567678',234,45345,'2014-03-12 00:00:00','DTCP324/324','GP029343/KH',2,2,3,4,NULL,NULL,NULL,NULL,'1 triệu tấn/ năm',1,'<p>đ&acirc;y l&agrave; th&ocirc;ng tin qui tr&igrave;nh sản xuất của doanh nghiệp<img src=\"../../assets/tinymce/plugins/emoticons/img/smiley-embarassed.gif\" alt=\"embarassed\" /></p>',NULL,NULL,NULL,NULL,'/uploads/IMG_0167.jpg',2014,0,'Huỳnh Sơn Ca','Trần Văn Sơn','cá hộp, bàn ghế, cốp pha, bê tông',NULL,NULL,0),(65,'SCDF Stock Investment','SCDF Stock Investment','Hưng Phú, Q.8, Tp. HCM','0874545842','','hungphuco@gmail.com','1234567678',NULL,NULL,'2004-01-12 00:00:00','DTCP324/324','GPHDKD2548',2,1,2,3,4,5,6,NULL,'',2,'',NULL,NULL,NULL,NULL,'/uploads/2014-08-24 09.27.50.jpg',2014,0,'Huỳnh Sơn Ca','Trần Văn Sơn','',NULL,NULL,0),(66,'Huynh Son Ca JSC','testing','Hưng Phú, Q.8, Tp. HCM','012834921348','08080800808','huynhsonca@gmail.com','123455645',123,123,'2004-01-12 00:00:00','GPDT17987','GPHDKD2548',3,1,2,3,NULL,NULL,NULL,NULL,'',3,'',NULL,NULL,NULL,NULL,'/uploads/2014-08-24 09.27.50.jpg',2014,0,'','Trần Văn Sơn','',NULL,16,0),(67,'SCDF Stock Investment','SCDF Stock Investment','Hưng Phú, Q.8, Tp. HCM','08458484','','cahiepsi@yahoo.com','',NULL,NULL,'2002-01-12 00:00:00','GPDT17987','GP029343/KH',2,2,3,4,NULL,NULL,NULL,NULL,'',2,'<p>test</p>',NULL,NULL,NULL,NULL,'/uploads/2014-08-24 09.27.50.jpg',2014,1,'Huỳnh Sơn Ca','Trần Văn Sơn','','admin-tisemiz',0,0);
/*!40000 ALTER TABLE `doanh_nghiep` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hoat_dong_san_xuat`
--

LOCK TABLES `hoat_dong_san_xuat` WRITE;
/*!40000 ALTER TABLE `hoat_dong_san_xuat` DISABLE KEYS */;
INSERT INTO `hoat_dong_san_xuat` VALUES (1,52,NULL,NULL,203145,'425',NULL,4,'5004','<p>test</p>',2),(2,52,NULL,NULL,203145,'425',NULL,4,'5004','<p>test</p>',2),(3,NULL,NULL,NULL,4127350,'1236',NULL,3,'4789','<p>qui tr&igrave;nh c&ocirc;ng nghệ sản xuất hiện đại tr&ecirc;n d&acirc;y chuyền c&ocirc;ng nghệ Đ&agrave;i Loan</p>',NULL),(4,NULL,NULL,NULL,4127350,'1236',NULL,3,'4789','<p>qui tr&igrave;nh c&ocirc;ng nghệ sản xuất hiện đại tr&ecirc;n d&acirc;y chuyền c&ocirc;ng nghệ Đ&agrave;i Loan</p>',NULL),(5,55,NULL,NULL,234873,'4234',NULL,2,'23','<p>hoatj ddong san xuat kinh doanh</p>',2),(6,55,NULL,NULL,20343,'82374',NULL,2,'434','<p>NGUYỄN VĂN H&Oacute;A</p>',NULL),(7,55,NULL,NULL,123,'1213',NULL,4,'434','<p>NGUYỄN VĂN H&Oacute;A</p>',NULL),(8,55,NULL,NULL,123,'1213',NULL,4,'434','<p>NGUYỄN VĂN H&Oacute;A</p>',NULL),(9,55,NULL,NULL,123,'1213',NULL,4,'434','<p>NGUYỄN VĂN H&Oacute;A</p>',NULL),(10,55,NULL,NULL,123,'1213',NULL,4,'434','<p>NGUYỄN VĂN H&Oacute;A</p>',2),(11,55,NULL,NULL,123,'1213',NULL,4,'434','<p>NGUYỄN VĂN H&Oacute;A</p>',2),(12,55,NULL,NULL,123,'1213',NULL,4,'434','<p>NGUYỄN VĂN H&Oacute;A</p>',2),(13,55,NULL,NULL,123,'1213',NULL,4,'434','<p>NGUYỄN VĂN H&Oacute;A</p>',2),(14,55,NULL,NULL,123,'1213',NULL,4,'434','<p>NGUYỄN VĂN H&Oacute;A</p>',2),(15,55,NULL,NULL,123,'1213',NULL,4,'434','<p>NGUYỄN VĂN H&Oacute;A</p>',2),(16,55,NULL,NULL,123,'1213',NULL,4,'434','<p>NGUYỄN VĂN H&Oacute;A</p>',2),(17,55,NULL,NULL,203145,'4234532',NULL,34345,'2','<p>t&eacute;t</p>',2),(18,55,0,NULL,203145,'4234532',NULL,34345,'2','<p>t&eacute;t</p>',2),(19,55,0,NULL,203145,'4234532',NULL,34345,'2','<p>t&eacute;t</p>',2),(20,55,0,NULL,203145,'4234532',NULL,34345,'2','<p>t&eacute;t</p>',2),(21,55,2014,NULL,203145,'4234532',NULL,34345,'2','<p>t&eacute;t</p>',2),(22,55,2014,NULL,203145,'4234532',NULL,34345,'2','<p>t&eacute;t</p>',2),(23,55,2014,NULL,203145,'4234532',NULL,34345,'2','<p>t&eacute;t</p>',2),(24,55,2014,NULL,203145,'4234532',NULL,34345,'2','<p>t&eacute;t</p>',2),(25,55,2014,NULL,3241230,'4124245',NULL,1234,'324','<p>this is technology progress</p>',2),(26,55,2014,NULL,3241230,'4124245',NULL,1234,'324','<p>this is technology progress</p>',2),(27,55,2014,NULL,203145,'425232',NULL,4,'4343','<p>t&eacute;t tet</p>',2),(28,59,2014,NULL,203145,'425232',NULL,4,'4343','<p>Đ&acirc;y l&agrave; th&ocirc;ng tin hoạt động sản xuất của doanh nghiệp</p>',2),(29,59,2014,NULL,203145,'425232',NULL,4,'4343','<p>Đ&acirc;y l&agrave; th&ocirc;ng tin hoạt động sản xuất của doanh nghiệp</p>',2),(30,59,2014,NULL,203145,'425232',NULL,4,'4343','<p>Đ&acirc;y l&agrave; th&ocirc;ng tin hoạt động sản xuất của doanh nghiệp</p>',2),(31,59,2014,NULL,203145,'425232',NULL,3,'','',NULL),(32,59,2014,NULL,203145,'425232',NULL,3,'','',NULL),(33,59,2014,NULL,203145,'425',NULL,3,'434','<p>this is tet</p>',2),(34,59,2014,NULL,203145,'425',NULL,3,'434','<p>this is tet</p>',2),(35,59,2014,NULL,203145,'425',NULL,3,'434','<p>Đ&acirc;y l&agrave; qui tr&igrave;nh c&ocirc;ng nghệ sản xuất của doanh nghiệp</p>',2),(36,59,2014,NULL,203145,'425',NULL,3,'434','<p><img src=\"../../../assets/tinymce/plugins/uploads/images.jpg\" alt=\"\" width=\"240\" height=\"210\" />Đ&acirc;y l&agrave; qui tr&igrave;nh c&ocirc;ng nghệ sản xuất của doanh nghiệp</p>',2),(37,60,2014,NULL,203145,'425',NULL,3,'','',2),(38,60,2014,NULL,203145,'425',NULL,3,'','<p>test</p>',2),(39,60,2014,NULL,203145,'425',NULL,3,'','<p>test</p>',2),(57,61,2014,NULL,203145,'425232',NULL,4,'456','<p>th&ocirc;ng tin hoạt động sản xuất của ty&nbsp;</p>',2),(62,62,2014,NULL,203145,'425',NULL,3,'434','<p>test</p>',2),(63,64,2014,NULL,203145,'425',NULL,3,'434','<p>đ&acirc;y l&agrave; qui tr&igrave;nh c&ocirc;ng nghệ sản xuất</p>',NULL),(65,65,2014,NULL,213214,'2353245',NULL,5234540,'523456','<p>52345</p>',NULL),(67,66,2014,NULL,203145,'425232',NULL,3,'434','<p>test</p>',2);
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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nganh`
--

LOCK TABLES `nganh` WRITE;
/*!40000 ALTER TABLE `nganh` DISABLE KEYS */;
INSERT INTO `nganh` VALUES (1,'Dệt may',NULL,NULL,'2014-06-13 11:35:46',NULL),(2,'Điện tử',NULL,NULL,'2014-06-13 11:35:46',NULL),(3,'Giày dép',NULL,NULL,'2014-06-13 11:35:46',NULL),(4,'Thuốc BVTV',NULL,NULL,'2014-06-13 11:35:46',NULL),(5,'Hóa Phẩm',NULL,NULL,'2014-06-13 11:35:46',NULL),(6,'Ắc Qui',NULL,NULL,'2014-06-13 11:35:46',NULL),(7,'Cơ khí',NULL,NULL,'2014-06-13 11:35:46',NULL),(8,'Dịch vụ',NULL,NULL,'2014-06-13 11:35:46',NULL);
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
INSERT INTO `nguon_thai_nuoc_thai` VALUES (1,'Sinh hoạt hằng ngày',NULL,NULL),(3,'Khói bụi vĩa hè',NULL,'2014-08-26 13:26:27'),(4,'Xả thải công nghiệp',NULL,'2014-08-26 13:30:33');
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
  PRIMARY KEY (`colMa`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nguyen_lieu_san_pham`
--

LOCK TABLES `nguyen_lieu_san_pham` WRITE;
/*!40000 ALTER TABLE `nguyen_lieu_san_pham` DISABLE KEYS */;
INSERT INTO `nguyen_lieu_san_pham` VALUES (1,65,2014,5,'kg',2354240,235245,'2014-08-24 10:37:05'),(2,65,2014,5,'kg',2354240,235245,'2014-08-24 10:39:03'),(3,65,2014,3,'tấn',3000,3500,'2014-08-24 11:03:13'),(4,65,2014,3,'tấn',3000,3500,'2014-08-24 11:04:14'),(5,65,2014,3,'tấn',3000,3500,'2014-08-24 11:04:18'),(13,65,2014,8,'cái',213242,34324,'2014-08-24 11:33:11'),(14,66,2014,3,'tấn',1000,1100,'2014-08-24 12:43:13');
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nhien_lieu_doanh_nghiep`
--

LOCK TABLES `nhien_lieu_doanh_nghiep` WRITE;
/*!40000 ALTER TABLE `nhien_lieu_doanh_nghiep` DISABLE KEYS */;
INSERT INTO `nhien_lieu_doanh_nghiep` VALUES (3,66,2014,'than củi','tấn',900,153,'đốt','2014-08-26 09:54:06'),(4,66,2014,'than đá','tấn',900,365,'đốt lò phản ứng hạt nhân','2014-08-26 09:54:45'),(5,66,2014,'dfasd','ádf',3423,231,'***','2014-08-26 09:56:22');
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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nuoc_ngam_doanh_nghiep`
--

LOCK TABLES `nuoc_ngam_doanh_nghiep` WRITE;
/*!40000 ALTER TABLE `nuoc_ngam_doanh_nghiep` DISABLE KEYS */;
INSERT INTO `nuoc_ngam_doanh_nghiep` VALUES (4,66,2014,'GKHK3','trung taam',23,234,'1234m3/h','1234m3/ngayf','','','2014-08-24 14:50:03'),(5,66,2014,'GKHK3','trung taam',23,234,'1234m3/h','1234m3/ngayf','','','2014-08-24 14:56:19'),(6,66,2014,'dfasdf','asdfsdf',24,234,'34324','23434','afsdf','asdfdf','2014-08-24 14:56:44'),(7,66,2014,'T6Y','terae78',234,78890,'436m3/h','436m3/h','GK2345','fjsdfj fasdhf fahsdfh','2014-08-24 14:59:45');
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
  `colThoiGian` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `colNguonThai` int(11) NOT NULL,
  `colLLuongThai` decimal(11,2) NOT NULL DEFAULT '0.00',
  `colNguonPSinh` varchar(500) DEFAULT NULL,
  `colLLXLyTK` decimal(11,2) NOT NULL DEFAULT '0.00',
  `colLLXLyTT` decimal(11,2) NOT NULL DEFAULT '0.00',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `colNguonNT` varchar(100) DEFAULT NULL,
  `colNam` int(4) DEFAULT NULL,
  PRIMARY KEY (`colMa`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nuoc_thai_nha_may`
--

LOCK TABLES `nuoc_thai_nha_may` WRITE;
/*!40000 ALTER TABLE `nuoc_thai_nha_may` DISABLE KEYS */;
INSERT INTO `nuoc_thai_nha_may` VALUES (35,66,'2014-08-12 00:00:00',1,23545.00,'kiểm tra',234.00,324.00,'2014-08-26 14:16:03',NULL,2014),(36,66,'2014-08-21 00:00:00',3,23434.00,'asdfsdfxcvvz g gdfgg',24.00,434.00,'2014-08-26 14:18:34',NULL,2014),(37,66,'2014-08-05 00:00:00',4,234.44,'dfadf fasdf',324.00,34.00,'2014-08-26 14:18:59',NULL,2014),(38,66,'2014-08-07 00:00:00',1,2332.34,'4rfesr fasd fsadfas fasdfa fsadfasdfasd fasdf',23434.00,234.45,'2014-08-26 14:19:25',NULL,2014),(40,66,'2014-08-08 00:00:00',1,2123.00,'121',121.00,12.00,'2014-08-26 15:06:16',NULL,2014);
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
  `colDangCThai` int(11) DEFAULT NULL,
  `colTongKL` float DEFAULT NULL,
  `colNguonPSinh` varchar(50) DEFAULT NULL,
  `colHThucLuu` varchar(50) DEFAULT NULL,
  `colBanRa` tinyint(1) DEFAULT NULL,
  `colThaiBo` tinyint(1) DEFAULT NULL,
  `colDViThuMua` varchar(50) DEFAULT NULL,
  `colDinhKyThuMua` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`colMa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rac_thai_sinh_hoat`
--

LOCK TABLES `rac_thai_sinh_hoat` WRITE;
/*!40000 ALTER TABLE `rac_thai_sinh_hoat` DISABLE KEYS */;
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
  `colNam` int(4) DEFAULT NULL,
  `colSanPham` varchar(50) DEFAULT NULL,
  `colDVi` varchar(50) DEFAULT NULL,
  `colCongSuatTK` float DEFAULT NULL,
  `colCongSuatTT` float DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`colMa`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `san_pham_doanh_nghiep`
--

LOCK TABLES `san_pham_doanh_nghiep` WRITE;
/*!40000 ALTER TABLE `san_pham_doanh_nghiep` DISABLE KEYS */;
INSERT INTO `san_pham_doanh_nghiep` VALUES (1,61,0,'1','kg',5215,4584,NULL),(2,61,0,'1','kg',5215,4584,NULL),(3,61,0,'3','kg',5215,4584,NULL),(4,61,0,'3','kg',5215,4584,NULL),(5,61,0,'3','kg',5215,4584,NULL),(6,61,0,'3','kg',5215,4584,NULL),(7,61,0,'3','kg',5215,4584,NULL),(8,61,2014,'3','kg',5215,4584,NULL),(9,61,2014,'3','kg',5215,4584,NULL),(10,61,2014,'3','kg',5215,4584,NULL),(11,61,2014,'3','kg',5215,4584,NULL),(12,61,2014,'3','kg',5215,4584,NULL),(13,61,2014,'3','kg',5215,4584,NULL),(14,61,2014,'1','test',2005,2005,NULL),(15,62,2014,'1','test',1234,12345,NULL),(16,62,2014,'1','test',12,12,NULL),(17,62,2014,'1','teest',3,23,NULL),(18,62,2014,'3','tấn',3,23,NULL),(19,62,2014,'3','tấn',3,23,NULL),(20,62,2014,'3','teest',234,234,NULL),(21,62,2014,'4','cái',560000,898645,NULL),(22,62,2014,'3','cái',3000,3500,NULL),(23,62,2014,'2','test',2,2,NULL),(24,62,2014,'2','test',2,2,NULL),(25,62,2014,'2','cái',5230,4564,NULL),(26,62,2014,'3','test',1323,123,NULL),(27,62,2014,'3','test',2313,12323,NULL),(28,62,2014,'2','tét',2,2,NULL),(29,62,2014,'1','kai',234,23434,NULL),(30,62,2014,'2','áo thun nè',214,234,'2014-08-23 11:58:12'),(31,62,2014,'1','bao',89,90,'2014-08-23 12:05:53'),(32,62,2014,'1','bao',89,90,'2014-08-23 12:05:56'),(33,62,2014,'1','bao',89,90,'2014-08-23 12:05:57'),(34,62,2014,'1','bao',89,90,'2014-08-23 12:05:58'),(35,62,2014,'1','bao',89,90,'2014-08-23 12:05:59'),(36,62,2014,'1','bao',89,90,'2014-08-23 12:05:59'),(37,62,2014,'1','bao',89,90,'2014-08-23 12:06:19'),(38,62,2014,'1','bao',89,90,'2014-08-23 12:07:23'),(39,62,2014,'4','cái',54454,54564,'2014-08-23 12:07:58'),(40,64,2014,'2','teest',2123,123,'2014-08-24 03:53:25'),(41,64,2014,'14','teest',3,2,'2014-08-24 06:02:38'),(45,65,2014,'35','m',2432540,2342540,'2014-08-24 09:05:12'),(47,66,2014,'15','m',1000000,1500000,'2014-08-24 12:42:25'),(48,66,2014,'35','tấn',3000,3100,'2014-08-24 12:42:44');
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
INSERT INTO `xu_ly_nuoc_thai_doanh_nghiep` VALUES (5,2014,66,'5',1,0,0,0,0,'','','2014-08-17 00:00:00','2014-08-26 15:31:52'),(6,2014,66,'4',1,1,0,0,0,'','tet','2014-08-23 00:00:00','2014-08-26 15:33:04'),(7,2014,66,'8',0,0,1,0,1,'testestaet aseta tet','testta taset','2014-09-09 00:00:00','2014-08-26 15:33:26'),(8,2014,66,'7',1,1,1,1,1,'nguon khac','ghi chu','2014-08-20 00:00:00','2014-08-26 15:38:04'),(9,2014,66,'11',1,1,1,1,1,'tes','tsat','2014-08-05 00:00:00','2014-08-26 15:39:07'),(10,2014,66,'4',1,1,1,1,1,'dsfadf','dfa fasdfasdfas34wq4','2014-09-02 00:00:00','2014-08-26 15:41:44');
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
  `colNam` datetime DEFAULT NULL,
  `colCSSX` int(11) DEFAULT NULL,
  `colNguonGayOn` int(11) NOT NULL,
  `colNguonPSinh` varchar(50) NOT NULL,
  `colKhongXLy` tinyint(1) DEFAULT NULL,
  `colCheChan` tinyint(1) DEFAULT NULL,
  `colBocCachAm` tinyint(1) DEFAULT NULL,
  `colBienPhapKhac` tinyint(1) DEFAULT NULL,
  `colMoTaBienPhapKhac` varchar(450) DEFAULT NULL,
  `colThoiGian` datetime DEFAULT NULL,
  `colGhiChu` varchar(450) DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`colMa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `xu_ly_tieng_on_rung`
--

LOCK TABLES `xu_ly_tieng_on_rung` WRITE;
/*!40000 ALTER TABLE `xu_ly_tieng_on_rung` DISABLE KEYS */;
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

-- Dump completed on 2014-08-28  6:15:22
