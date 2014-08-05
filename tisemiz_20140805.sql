-- MySQL dump 10.13  Distrib 5.5.34, for Win32 (x86)
--
-- Host: localhost    Database: tisemiz
-- ------------------------------------------------------
-- Server version	5.5.34-log

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
  `tendanhmuc` varchar(50) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `danhmuc_sanpham`
--

LOCK TABLES `danhmuc_sanpham` WRITE;
/*!40000 ALTER TABLE `danhmuc_sanpham` DISABLE KEYS */;
INSERT INTO `danhmuc_sanpham` VALUES (1,'Quần áo',NULL,NULL,'2014-06-13 13:07:33'),(2,'Hàng thủ công mỹ nghệ',NULL,NULL,'2014-06-13 13:07:33'),(3,'Hóa mỹ phẩm',NULL,NULL,'2014-06-13 13:07:33'),(4,'Đồ nhựa',NULL,NULL,'2014-06-13 13:07:33'),(5,'Đồ sắt',NULL,NULL,'2014-06-13 13:07:33');
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
  `colNam` datetime DEFAULT NULL,
  `colLoaiTThu` int(11) DEFAULT NULL,
  `colLuongSD` float DEFAULT NULL,
  `colSoNgaySuDung` float DEFAULT NULL,
  PRIMARY KEY (`colMa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dien_nuoc_doanh_nghiep`
--

LOCK TABLES `dien_nuoc_doanh_nghiep` WRITE;
/*!40000 ALTER TABLE `dien_nuoc_doanh_nghiep` DISABLE KEYS */;
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
  `colMaNganh6` int(11) NOT NULL,
  `colLinhVucHD` tinytext,
  `colSanPham` tinytext,
  `colCongSuat` varchar(50) DEFAULT NULL,
  `colQuocGia` int(11) DEFAULT NULL,
  `colQTrinhSX` tinytext,
  `colMoTaKT` tinytext,
  `colMoTaNT` tinytext,
  `colMoTaRT` tinytext,
  `colGhiChu` tinytext,
  `colHinhAnh` blob,
  PRIMARY KEY (`colMa`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doanh_nghiep`
--

LOCK TABLES `doanh_nghiep` WRITE;
/*!40000 ALTER TABLE `doanh_nghiep` DISABLE KEYS */;
INSERT INTO `doanh_nghiep` VALUES (1,'Công ty TNHH Tiến Phát','Tien Phat Ltd.','Lô số 2, KCN Tân Bình, Quận Tân Bình, Tp. HCM','(08)3456789','(08)35647890','tienphat@gmail.com','369258147',29,21,'2013-07-23 02:21:00','BTX0934834885','BTX0934834885',2,1,1,NULL,NULL,NULL,2,'May mặc, quần áo, hàng xuất khẩu','May mặc, quần áo, hàng xuất khẩu','',2,'','','','','',''),(2,'Công ty CP Vạn Thắng','Van Thang JSC.','Lô 3, KCN Tân Bình, Q. Tân Bình, Tp.HCM','(08)3454878','021544484','info@vanthang.vn','498815454988',NULL,NULL,'1999-05-23 11:46:00','BTX093483488VB','BTX09348348VN',2,2,2,NULL,NULL,NULL,2,'thủ công mỹ nghệ, đồ gỗ','ghế, bàn','30000sp/nam',2,'sơ chế gỗ, gia công, đánh bóng, đóng gói, xuất xưởng','','','','',''),(3,'Công ty CP JVIT','JV-IT Jsc','Lô 10, KCN Tân Bình','(08)3456789','(08)34567890','info@jv-it.com.vn','4958546782',NULL,NULL,'1999-05-23 11:46:00',NULL,'BTX0934834885',3,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(4,'Công ty CP T&T','T&T','Lô 10, KCN Tân Bình','(08)3456789','(08)34567890','info@jv-it.com.vn','498815454988',NULL,NULL,'1999-05-23 11:46:00',NULL,'BTX0934834885',3,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(5,'Công ty Hoa Sen','Hoa Sen Ltd','Lô 10, KCN Tân Bình','(08)3456789','(08)34567890','info@jv-it.com.vn','498815454988',NULL,NULL,'1999-05-23 11:46:00',NULL,'BTX0934834885',3,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(6,'Công ty Evolable Asia','EVA','Lô 10, KCN Tân Bình','(08)3456789','(08)34567890','vinfo@jv-it.com.vn','498815454988',NULL,NULL,'1999-05-23 11:46:00',NULL,'BTX0934834885',3,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(7,'Công ty Radar','Radar','Lô 10, KCN Tân Bình','(08)3456789','(08)34567890','info@jv-it.com.vn','498815454988',NULL,NULL,'1999-05-23 11:46:00',NULL,'BTX0934834885',3,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(8,'Công ty Lực Thiên','LT media Ltd','Lô 10, KCN Tân Bình','(08)3456789','(08)34567890','info@jv-it.com.vn','498815454988',NULL,NULL,'1999-05-23 11:46:00',NULL,'BTX0934834885',3,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9,'Công ty Hoàn Vũ','HV Ltd','Lô 10, KCN Tân Bình','(08)3456789','(08)34567890','info@jv-it.com.vn','498815454988',NULL,NULL,'2000-05-23 11:46:00',NULL,'BTX0934834885',3,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(10,'Công ty TNHH Tiến Phát','Tien Phat Ltd.','Lô số 2, KCN Tân Bình, Quận Tân Bình, Tp. HCM','(08)3456789','(08)35647890','tienphat@gmail.com','369258147',29,21,'2013-07-23 02:21:00','BTX0934834885','BTX0934834885',2,1,1,NULL,NULL,NULL,2,'May mặc, quần áo, hàng xuất khẩu','May mặc, quần áo, hàng xuất khẩu','',2,'','','','','','?'),(11,'Công ty TNHH Tiến Phát','Tien Phat Ltd.','Lô số 2, KCN Tân Bình, Quận Tân Bình, Tp. HCM','(08)3456789','(08)35647890','tienphat@gmail.com','369258147',29,21,'2013-07-23 02:21:00','BTX0934834885','BTX0934834885',2,1,1,NULL,NULL,NULL,2,'May mặc, quần áo, hàng xuất khẩu','May mặc, quần áo, hàng xuất khẩu','',2,'','','','','','?'),(12,'Công ty TNHH Tiến Phát','Tien Phat Ltd.','Lô số 2, KCN Tân Bình, Quận Tân Bình, Tp. HCM','(08)3456789','(08)35647890','tienphat@gmail.com','369258147',29,21,'2013-07-23 02:21:00','BTX0934834885','BTX0934834885',2,1,1,NULL,NULL,NULL,2,'May mặc, quần áo, hàng xuất khẩu','May mặc, quần áo, hàng xuất khẩu','',2,'','','','','','?'),(13,'Công ty TNHH Tiến Phát','Tien Phat Ltd.','Lô số 2, KCN Tân Bình, Quận Tân Bình, Tp. HCM','(08)3456789','(08)35647890','tienphat@gmail.com','369258147',29,21,'2013-07-23 02:21:00','BTX0934834885','BTX0934834885',2,1,1,NULL,NULL,NULL,2,'May mặc, quần áo, hàng xuất khẩu','May mặc, quần áo, hàng xuất khẩu','',2,'','','','','','?'),(14,'Công ty TNHH Tiến Phát','Tien Phat Ltd.','Lô số 2, KCN Tân Bình, Quận Tân Bình, Tp. HCM','(08)3456789','(08)35647890','tienphat@gmail.com','369258147',29,21,'2013-07-23 02:21:00','BTX0934834885','BTX0934834885',2,1,1,NULL,NULL,NULL,2,'May mặc, quần áo, hàng xuất khẩu','May mặc, quần áo, hàng xuất khẩu','',2,'','','','','','?'),(15,'Công ty TNHH Tiến Phát','Tien Phat Ltd.','Lô số 2, KCN Tân Bình, Quận Tân Bình, Tp. HCM','(08)3456789','(08)35647890','tienphat@gmail.com','369258147',29,21,'2013-07-23 02:21:00','BTX0934834885','BTX0934834885',2,1,1,NULL,NULL,NULL,2,'May mặc, quần áo, hàng xuất khẩu','May mặc, quần áo, hàng xuất khẩu','',2,'','','','','','?'),(16,'Công ty TNHH Tiến Phát','Tien Phat Ltd.','Lô số 2, KCN Tân Bình, Quận Tân Bình, Tp. HCM','(08)3456789','(08)35647890','tienphat@gmail.com','369258147',29,21,'2013-07-23 02:21:00','BTX0934834885','BTX0934834885',2,1,1,NULL,NULL,NULL,2,'May mặc, quần áo, hàng xuất khẩu','May mặc, quần áo, hàng xuất khẩu','',2,'','','','','','?'),(17,'Công ty TNHH Tiến Phát','Tien Phat Ltd.','Lô số 2, KCN Tân Bình, Quận Tân Bình, Tp. HCM','(08)3456789','(08)35647890','tienphat@gmail.com','369258147',29,21,'2013-07-23 02:21:00','BTX0934834885','BTX0934834885',2,1,1,NULL,NULL,NULL,2,'May mặc, quần áo, hàng xuất khẩu','May mặc, quần áo, hàng xuất khẩu','',2,'','','','','','?'),(18,'Công ty TNHH Tiến Phát','Tien Phat Ltd.','Lô số 2, KCN Tân Bình, Quận Tân Bình, Tp. HCM','(08)3456789','(08)35647890','tienphat@gmail.com','369258147',29,21,'2013-07-23 02:21:00','BTX0934834885','BTX0934834885',2,1,1,NULL,NULL,NULL,2,'May mặc, quần áo, hàng xuất khẩu','May mặc, quần áo, hàng xuất khẩu','',2,'','','','','','?'),(19,'Công ty TNHH Tiến Phát','Tien Phat Ltd.','Lô số 2, KCN Tân Bình, Quận Tân Bình, Tp. HCM','(08)3456789','(08)35647890','tienphat@gmail.com','369258147',29,21,'2013-07-23 02:21:00','BTX0934834885','BTX0934834885',2,1,1,NULL,NULL,NULL,2,'May mặc, quần áo, hàng xuất khẩu','May mặc, quần áo, hàng xuất khẩu','',2,'','','','','','?'),(20,'Công ty TNHH Tiến Phát','Tien Phat Ltd.','Lô số 2, KCN Tân Bình, Quận Tân Bình, Tp. HCM','(08)3456789','(08)35647890','tienphat@gmail.com','369258147',29,21,'2013-07-23 02:21:00','BTX0934834885','BTX0934834885',2,1,1,NULL,NULL,NULL,2,'May mặc, quần áo, hàng xuất khẩu','May mặc, quần áo, hàng xuất khẩu','',2,'','','','','','?'),(21,'Công ty TNHH Tiến Phát','Tien Phat Ltd.','Lô số 2, KCN Tân Bình, Quận Tân Bình, Tp. HCM','(08)3456789','(08)35647890','tienphat@gmail.com','369258147',29,21,'2013-07-23 02:21:00','BTX0934834885','BTX0934834885',2,1,1,NULL,NULL,NULL,2,'May mặc, quần áo, hàng xuất khẩu','May mặc, quần áo, hàng xuất khẩu','',2,'','','','','','?'),(22,'Công ty TNHH Tiến Phát','Tien Phat Ltd.','Lô số 2, KCN Tân Bình, Quận Tân Bình, Tp. HCM','(08)3456789','(08)35647890','tienphat@gmail.com','369258147',29,21,'2013-07-23 02:21:00','BTX0934834885','BTX0934834885',2,1,1,NULL,NULL,NULL,2,'May mặc, quần áo, hàng xuất khẩu','May mặc, quần áo, hàng xuất khẩu','',2,'','','','','','?'),(23,'Công ty TNHH Tiến Phát','Tien Phat Ltd.','Lô số 2, KCN Tân Bình, Quận Tân Bình, Tp. HCM','(08)3456789','(08)35647890','tienphat@gmail.com','369258147',29,21,'2013-07-23 02:21:00','BTX0934834885','BTX0934834885',2,1,1,NULL,NULL,NULL,2,'May mặc, quần áo, hàng xuất khẩu','May mặc, quần áo, hàng xuất khẩu','',2,'','','','','','?'),(24,'Công ty TNHH Tiến Phát','Tien Phat Ltd.','Lô số 2, KCN Tân Bình, Quận Tân Bình, Tp. HCM','(08)3456789','(08)35647890','tienphat@gmail.com','369258147',29,21,'2013-07-23 02:21:00','BTX0934834885','BTX0934834885',2,1,1,NULL,NULL,NULL,2,'May mặc, quần áo, hàng xuất khẩu','May mặc, quần áo, hàng xuất khẩu','',2,'','','','','','?'),(25,'Công ty TNHH Tiến Phát','Tien Phat Ltd.','Lô số 2, KCN Tân Bình, Quận Tân Bình, Tp. HCM','(08)3456789','(08)35647890','tienphat@gmail.com','369258147',29,21,'2013-07-23 02:21:00','BTX0934834885','BTX0934834885',2,1,1,NULL,NULL,NULL,2,'May mặc, quần áo, hàng xuất khẩu','May mặc, quần áo, hàng xuất khẩu','',2,'','','','','','?'),(26,'Công ty TNHH Tiến Phát','Tien Phat Ltd.','Lô số 2, KCN Tân Bình, Quận Tân Bình, Tp. HCM','(08)3456789','(08)35647890','tienphat@gmail.com','369258147',29,21,'2013-07-23 02:21:00','BTX0934834885','BTX0934834885',2,1,1,NULL,NULL,NULL,2,'May mặc, quần áo, hàng xuất khẩu','May mặc, quần áo, hàng xuất khẩu','',2,'','','','','','?'),(27,'Công ty TNHH Tiến Phát','Tien Phat Ltd.','Lô số 2, KCN Tân Bình, Quận Tân Bình, Tp. HCM','(08)3456789','(08)35647890','tienphat@gmail.com','369258147',29,21,'2013-07-23 02:21:00','BTX0934834885','BTX0934834885',2,1,1,NULL,NULL,NULL,2,'May mặc, quần áo, hàng xuất khẩu','May mặc, quần áo, hàng xuất khẩu','',2,'','','','','','?'),(28,'Công ty TNHH Tiến Phát','Tien Phat Ltd.','Lô số 2, KCN Tân Bình, Quận Tân Bình, Tp. HCM','(08)3456789','(08)35647890','tienphat@gmail.com','369258147',29,21,'2013-07-23 02:21:00','BTX0934834885','BTX0934834885',2,1,1,NULL,NULL,NULL,2,'May mặc, quần áo, hàng xuất khẩu','May mặc, quần áo, hàng xuất khẩu','',2,'','','','','','?'),(29,'Công ty TNHH Tiến Phát','Tien Phat Ltd.','Lô số 2, KCN Tân Bình, Quận Tân Bình, Tp. HCM','(08)3456789','(08)35647890','tienphat@gmail.com','369258147',29,21,'2013-07-23 02:21:00','BTX0934834885','BTX0934834885',2,1,1,NULL,NULL,NULL,2,'May mặc, quần áo, hàng xuất khẩu','May mặc, quần áo, hàng xuất khẩu','',2,'','','','','','?'),(30,'Công ty TNHH Tiến Phát','Tien Phat Ltd.','Lô số 2, KCN Tân Bình, Quận Tân Bình, Tp. HCM','(08)3456789','(08)35647890','tienphat@gmail.com','369258147',29,21,'2013-07-23 02:21:00','BTX0934834885','BTX0934834885',2,1,1,NULL,NULL,NULL,2,'May mặc, quần áo, hàng xuất khẩu','May mặc, quần áo, hàng xuất khẩu','',2,'','','','','','?'),(31,'Công ty TNHH Tiến Phát','Tien Phat Ltd.','Lô số 2, KCN Tân Bình, Quận Tân Bình, Tp. HCM','(08)3456789','(08)35647890','tienphat@gmail.com','369258147',29,21,'2013-07-23 02:21:00','BTX0934834885','BTX0934834885',2,1,1,NULL,NULL,NULL,2,'May mặc, quần áo, hàng xuất khẩu','May mặc, quần áo, hàng xuất khẩu','',2,'','','','','','?'),(32,'Công ty TNHH Tiến Phát','Tien Phat Ltd.','Lô số 2, KCN Tân Bình, Quận Tân Bình, Tp. HCM','(08)3456789','(08)35647890','tienphat@gmail.com','369258147',29,21,'2013-07-23 02:21:00','BTX0934834885','BTX0934834885',2,1,1,NULL,NULL,NULL,2,'May mặc, quần áo, hàng xuất khẩu','May mặc, quần áo, hàng xuất khẩu','',2,'','','','','','?'),(33,'Công ty TNHH Tiến Phát','Tien Phat Ltd.','Lô số 2, KCN Tân Bình, Quận Tân Bình, Tp. HCM','(08)3456789','(08)35647890','tienphat@gmail.com','369258147',29,21,'2013-07-23 02:21:00','BTX0934834885','BTX0934834885',2,1,1,NULL,NULL,NULL,2,'May mặc, quần áo, hàng xuất khẩu','May mặc, quần áo, hàng xuất khẩu','',2,'','','','','','?'),(34,'Công ty TNHH Tiến Phát','Tien Phat Ltd.','Lô số 2, KCN Tân Bình, Quận Tân Bình, Tp. HCM','(08)3456789','(08)35647890','tienphat@gmail.com','369258147',29,21,'2013-07-23 02:21:00','BTX0934834885','BTX0934834885',2,1,1,NULL,NULL,NULL,2,'May mặc, quần áo, hàng xuất khẩu','May mặc, quần áo, hàng xuất khẩu','',2,'','','','','','?'),(35,'Công ty TNHH Tiến Phát','Tien Phat Ltd.','Lô số 2, KCN Tân Bình, Quận Tân Bình, Tp. HCM','(08)3456789','(08)35647890','tienphat@gmail.com','369258147',29,21,'2013-07-23 02:21:00','BTX0934834885','BTX0934834885',2,1,1,NULL,NULL,NULL,2,'May mặc, quần áo, hàng xuất khẩu','May mặc, quần áo, hàng xuất khẩu','',2,'','','','','','?'),(36,'Công ty TNHH Tiến Phát','Tien Phat Ltd.','Lô số 2, KCN Tân Bình, Quận Tân Bình, Tp. HCM','(08)3456789','(08)35647890','tienphat@gmail.com','369258147',29,21,'2013-07-23 02:21:00','BTX0934834885','BTX0934834885',2,1,1,NULL,NULL,NULL,2,'May mặc, quần áo, hàng xuất khẩu','May mặc, quần áo, hàng xuất khẩu','',2,'','','','','','?'),(37,'Công ty TNHH Tiến Phát','Tien Phat Ltd.','Lô số 2, KCN Tân Bình, Quận Tân Bình, Tp. HCM','(08)3456789','(08)35647890','tienphat@gmail.com','369258147',29,21,'2013-07-23 02:21:00','BTX0934834885','BTX0934834885',2,1,1,NULL,NULL,NULL,2,'May mặc, quần áo, hàng xuất khẩu','May mặc, quần áo, hàng xuất khẩu','',2,'','','','','','?'),(38,'Công ty TNHH Tiến Phát','Tien Phat Ltd.','Lô số 2, KCN Tân Bình, Quận Tân Bình, Tp. HCM','(08)3456789','(08)35647890','tienphat@gmail.com','369258147',29,21,'2013-07-23 02:21:00','BTX0934834885','BTX0934834885',2,1,1,NULL,NULL,NULL,2,'May mặc, quần áo, hàng xuất khẩu','May mặc, quần áo, hàng xuất khẩu','',2,'','','','','','?'),(39,'Công ty TNHH Tiến Phát','Tien Phat Ltd.','Lô số 2, KCN Tân Bình, Quận Tân Bình, Tp. HCM','(08)3456789','(08)35647890','tienphat@gmail.com','369258147',29,21,'2013-07-23 02:21:00','BTX0934834885','BTX0934834885',2,1,1,NULL,NULL,NULL,2,'May mặc, quần áo, hàng xuất khẩu','May mặc, quần áo, hàng xuất khẩu','',2,'','','','','','?'),(40,'Công ty TNHH Tiến Phát','Tien Phat Ltd.','Lô số 2, KCN Tân Bình, Quận Tân Bình, Tp. HCM','(08)3456789','(08)35647890','tienphat@gmail.com','369258147',29,21,'2013-07-23 02:21:00','BTX0934834885','BTX0934834885',2,1,1,NULL,NULL,NULL,2,'May mặc, quần áo, hàng xuất khẩu','May mặc, quần áo, hàng xuất khẩu','',2,'','','','','','?'),(41,'Công ty TNHH Tiến Phát','Tien Phat Ltd.','Lô số 2, KCN Tân Bình, Quận Tân Bình, Tp. HCM','(08)3456789','(08)35647890','tienphat@gmail.com','369258147',29,21,'2013-07-23 02:21:00','BTX0934834885','BTX0934834885',2,1,1,NULL,NULL,NULL,2,'May mặc, quần áo, hàng xuất khẩu','May mặc, quần áo, hàng xuất khẩu','',2,'','','','','','?');
/*!40000 ALTER TABLE `doanh_nghiep` ENABLE KEYS */;
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
  `colNam` datetime DEFAULT NULL,
  `colDTichDat` float DEFAULT NULL,
  `colDienTichDatXD` float DEFAULT NULL,
  `colNVienTT` varchar(50) DEFAULT NULL,
  `colNVienGT` varchar(50) DEFAULT NULL,
  `colSoCaSX` float DEFAULT NULL,
  `colSuatAn` varchar(50) DEFAULT NULL,
  `colQTrinhSX` tinytext,
  PRIMARY KEY (`colMa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hoat_dong_san_xuat`
--

LOCK TABLES `hoat_dong_san_xuat` WRITE;
/*!40000 ALTER TABLE `hoat_dong_san_xuat` DISABLE KEYS */;
/*!40000 ALTER TABLE `hoat_dong_san_xuat` ENABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nguon_gay_on_rung`
--

LOCK TABLES `nguon_gay_on_rung` WRITE;
/*!40000 ALTER TABLE `nguon_gay_on_rung` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nguon_thai_khi_thai`
--

LOCK TABLES `nguon_thai_khi_thai` WRITE;
/*!40000 ALTER TABLE `nguon_thai_khi_thai` DISABLE KEYS */;
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
  `colTenNguonThai` varchar(10) DEFAULT NULL,
  `colGhiChu` tinytext,
  PRIMARY KEY (`colMa`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nguon_thai_nuoc_thai`
--

LOCK TABLES `nguon_thai_nuoc_thai` WRITE;
/*!40000 ALTER TABLE `nguon_thai_nuoc_thai` DISABLE KEYS */;
INSERT INTO `nguon_thai_nuoc_thai` VALUES (1,'Sinh hoạt',NULL),(2,'Sản xuất',NULL);
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
  `colNam` datetime DEFAULT NULL,
  `colNguyenLieu` int(11) DEFAULT NULL,
  `colDonVi` varchar(50) DEFAULT NULL,
  `colLuongSD` float DEFAULT NULL,
  `colLuongDTru` float DEFAULT NULL,
  PRIMARY KEY (`colMa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nguyen_lieu_san_pham`
--

LOCK TABLES `nguyen_lieu_san_pham` WRITE;
/*!40000 ALTER TABLE `nguyen_lieu_san_pham` DISABLE KEYS */;
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nguyenlieu`
--

LOCK TABLES `nguyenlieu` WRITE;
/*!40000 ALTER TABLE `nguyenlieu` DISABLE KEYS */;
INSERT INTO `nguyenlieu` VALUES (1,'Củi'),(2,'Trấu'),(3,'Than Đá'),(4,'Gaz'),(5,'Gỗ'),(6,'Nhựa PVC'),(7,'Vãi Cotton'),(8,'Vãi Silk'),(9,'Dầu'),(10,'Xăng'),(11,'Da');
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
  `colNam` datetime DEFAULT NULL,
  `colNhienLieu` int(11) DEFAULT NULL,
  `colDonVi` varchar(50) DEFAULT NULL,
  `colLuongSD` float DEFAULT NULL,
  `colSoNgaySD` float DEFAULT NULL,
  `colMDichSD` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`colMa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nhien_lieu_doanh_nghiep`
--

LOCK TABLES `nhien_lieu_doanh_nghiep` WRITE;
/*!40000 ALTER TABLE `nhien_lieu_doanh_nghiep` DISABLE KEYS */;
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
  `colNam` datetime DEFAULT NULL,
  `colMaGK` varchar(50) DEFAULT NULL,
  `colViTri` varchar(50) DEFAULT NULL,
  `colX` float DEFAULT NULL,
  `colY` float DEFAULT NULL,
  `colCongSuat` float DEFAULT NULL,
  `colLLuong` float DEFAULT NULL,
  `colSoGiayPhep` varchar(50) DEFAULT NULL,
  `colGhiChu` tinytext,
  PRIMARY KEY (`colMa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nuoc_ngam_doanh_nghiep`
--

LOCK TABLES `nuoc_ngam_doanh_nghiep` WRITE;
/*!40000 ALTER TABLE `nuoc_ngam_doanh_nghiep` DISABLE KEYS */;
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
  `colCSSX` int(11) DEFAULT NULL,
  `colThoiGian` datetime DEFAULT NULL,
  `colNguonThai` varchar(50) DEFAULT NULL,
  `colLLuongThai` float DEFAULT NULL,
  `colNguonPSinh` varchar(50) DEFAULT NULL,
  `colLLXLyTK` float DEFAULT NULL,
  `colLLXLyTT` float DEFAULT NULL,
  PRIMARY KEY (`colMa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nuoc_thai_nha_may`
--

LOCK TABLES `nuoc_thai_nha_may` WRITE;
/*!40000 ALTER TABLE `nuoc_thai_nha_may` DISABLE KEYS */;
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
  `colNam` datetime DEFAULT NULL,
  `colSanPham` varchar(50) DEFAULT NULL,
  `colDVi` varchar(50) DEFAULT NULL,
  `colCongSuatTK` float DEFAULT NULL,
  `colCongSuatTT` float DEFAULT NULL,
  PRIMARY KEY (`colMa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `san_pham_doanh_nghiep`
--

LOCK TABLES `san_pham_doanh_nghiep` WRITE;
/*!40000 ALTER TABLE `san_pham_doanh_nghiep` DISABLE KEYS */;
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
  `danhmuc_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sanpham`
--

LOCK TABLES `sanpham` WRITE;
/*!40000 ALTER TABLE `sanpham` DISABLE KEYS */;
INSERT INTO `sanpham` VALUES (1,'Áo sơ mi',NULL,NULL,'2014-06-13 12:58:00',NULL,NULL,NULL),(2,'Áo thun',NULL,NULL,'2014-06-13 12:58:00',NULL,NULL,NULL),(3,'Bình Ắc Qui',NULL,NULL,'2014-06-13 12:58:00',NULL,NULL,NULL),(4,'Bóng Đèn',NULL,NULL,'2014-06-13 12:58:00',NULL,NULL,NULL);
/*!40000 ALTER TABLE `sanpham` ENABLE KEYS */;
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
-- Table structure for table `xu_ly_nuoc_thai_doanh_nghiep`
--

DROP TABLE IF EXISTS `xu_ly_nuoc_thai_doanh_nghiep`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `xu_ly_nuoc_thai_doanh_nghiep` (
  `colMa` int(11) NOT NULL AUTO_INCREMENT,
  `colNam` datetime DEFAULT NULL,
  `colCSSX` int(11) DEFAULT NULL,
  `colBPhapXL` varchar(50) DEFAULT NULL,
  `colNTSHoat` tinyint(1) DEFAULT NULL,
  `colNTSX` tinyint(1) DEFAULT NULL,
  `colXLKT` tinyint(1) DEFAULT NULL,
  `colLamNguoi` tinyint(1) DEFAULT NULL,
  `colNguonKhac` varchar(50) DEFAULT NULL,
  `colGhiChu` tinytext,
  `colThoiGian` datetime DEFAULT NULL,
  PRIMARY KEY (`colMa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `xu_ly_nuoc_thai_doanh_nghiep`
--

LOCK TABLES `xu_ly_nuoc_thai_doanh_nghiep` WRITE;
/*!40000 ALTER TABLE `xu_ly_nuoc_thai_doanh_nghiep` DISABLE KEYS */;
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
  `colNguonGayOn` varchar(50) DEFAULT NULL,
  `colNguonPSinh` varchar(50) DEFAULT NULL,
  `colKhongXLy` tinyint(1) DEFAULT NULL,
  `colCheChan` tinyint(1) DEFAULT NULL,
  `colBocCachAm` tinyint(1) DEFAULT NULL,
  `colBienPhapKhac` varchar(50) DEFAULT NULL,
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

-- Dump completed on 2014-08-05 18:25:23
