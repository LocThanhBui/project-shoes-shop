-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2021 at 06:36 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `csdlbangiay`
--

-- --------------------------------------------------------

--
-- Table structure for table `acc_admin`
--

CREATE TABLE IF NOT EXISTS `acc_admin` (
  `admin_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `admin_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `admin_gmail` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `admin_user` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `admin_pass` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `acc_admin`
--

INSERT INTO `acc_admin` (`admin_id`, `admin_name`, `admin_gmail`, `admin_user`, `admin_pass`) VALUES
('ad1', 'Chac Dau Thanh', 'luanchodien999@gmail.com', 'adminthanh', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `chitiet`
--

CREATE TABLE IF NOT EXISTS `chitiet` (
  `sohd` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `masp` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `soluong` int(10) NOT NULL,
  PRIMARY KEY (`sohd`,`masp`),
  KEY `FK_sp_ct` (`masp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE IF NOT EXISTS `hoadon` (
  `sohd` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ngaylap` timestamp(6) NULL DEFAULT NULL,
  `makh` int(11) NOT NULL AUTO_INCREMENT,
  `manv` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`sohd`,`makh`,`manv`),
  KEY `FK_kh_hd` (`makh`),
  KEY `FK_nv_hd` (`manv`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE IF NOT EXISTS `khachhang` (
  `makh` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`makh`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`makh`, `username`, `email`, `password`) VALUES
(2, 'admin1', 'xzcxzcxz@gmail.com', '202cb962ac59075b964b07152d234b70'),
(3, 'thanh', 'trinhlinhtinh065461@gmail.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `loaihang`
--

CREATE TABLE IF NOT EXISTS `loaihang` (
  `loaisp` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `tenloai` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `manv` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`loaisp`,`manv`),
  KEY `FK_nv_lh` (`manv`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loaihang`
--

INSERT INTO `loaihang` (`loaisp`, `tenloai`, `manv`) VALUES
('LADS', 'Adidas', 'NV03'),
('LJDN', 'Jordan', 'NV02'),
('LNKE', 'Nike', 'NV01');

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE IF NOT EXISTS `nhanvien` (
  `manv` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `tennv` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diachi` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sdt` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`manv`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`manv`, `tennv`, `diachi`, `sdt`) VALUES
('NV01', 'Chac Dau Thanh', 'Binh Tan', '0933029627'),
('NV02', 'Bui Thanh Loc', 'Binh Tan', '0909090909'),
('NV03', 'Nguyen Quoc Loi', 'Binh Tan', '0909090909');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `idd` int(11) NOT NULL AUTO_INCREMENT,
  `namee` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phonee` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `notee` text COLLATE utf8_unicode_ci,
  `total` double NOT NULL,
  PRIMARY KEY (`idd`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE IF NOT EXISTS `order_detail` (
  `detail_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `product_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL,
  PRIMARY KEY (`detail_id`,`order_id`),
  KEY `product_id` (`product_id`),
  KEY `FK_ord_orddl_1` (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE IF NOT EXISTS `sanpham` (
  `masp` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `tensp` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gia` double DEFAULT NULL,
  `soluong` int(10) DEFAULT NULL,
  `ngaynhap` timestamp(6) NOT NULL,
  `loaisp` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `hinhanhsp` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Mota` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `giamgia` double DEFAULT NULL,
  `trangthai` tinyint(1) NOT NULL,
  PRIMARY KEY (`masp`,`loaisp`),
  KEY `FK_sp_lh` (`loaisp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`masp`, `tensp`, `gia`, `soluong`, `ngaynhap`, `loaisp`, `hinhanhsp`, `Mota`, `giamgia`, `trangthai`) VALUES
('AD0001', 'Solar boost', 0, 100, '2021-03-15 17:00:00.000000', 'LADS', 'Solar boost.jpeg', 'Solar boost', 2800000, 1),
('AD0002', 'SUPERSTAR DISNEY MICKEY MOUSE', 0, 100, '2021-03-15 17:00:00.000000', 'LADS', 'SUPERSTAR DISNEY MICKEY MOUSE.jpg', 'SUPERSTAR DISNEY MICKEY MOUSE', 2200000, 1),
('AD0003', 'ADGE GAMEDAY', 0, 100, '2021-03-15 17:00:00.000000', 'LADS', 'ADGE GAMEDAY.jpg', 'ADGE GAMEDAY', 2600000, 1),
('AD0004', 'PROPHERE CORE BLACK', 2800000, 100, '2021-03-15 17:00:00.000000', 'LADS', 'PROPHERE CORE BLACK.jpg', 'PROPHERE CORE BLACK', 2500000, 1),
('AD0005', 'QUESTAR RISE', 2300000, 100, '2021-03-15 17:00:00.000000', 'LADS', 'QUESTAR RISE.jpg', 'QUESTAR RISE', 1600000, 1),
('AD0006', 'QUESTAR RISE 1', 2300000, 0, '2021-03-15 17:00:00.000000', 'LADS', 'QUESTAR RISE-1.jpg', 'QUESTAR RISE', 1600000, 0),
('AD0007', 'STAN SMITH GREEN', 1950000, 100, '2021-03-15 17:00:00.000000', 'LADS', 'STAN SMITH GREEN.jpg', 'STAN SMITH GREEN', 1650000, 1),
('AD0008', 'STAN SMITH MICKEY 3D', 2900000, 100, '2021-03-15 17:00:00.000000', 'LADS', 'STAN SMITH MICKEY 3D.jpg', 'STAN SMITH MICKEY 3D', 2500000, 1),
('AD0009', 'SUPERSTAR', 1950000, 0, '2021-03-15 17:00:00.000000', 'LADS', 'SUPERSTAR.jpg', 'SUPERSTAR', 1800000, 0),
('AD0010', 'ULTRABOOST 20 BLUE BOOST', 4200000, 100, '2021-03-15 17:00:00.000000', 'LADS', 'ULTRABOOST 20 BLUE BOOST.jpg', 'ULTRABOOST 20 BLUE BOOST', 3800000, 1),
('AD0011', 'ULTRABOOST 20 CORE BLACK/GOLD', 4200000, 100, '2021-03-15 17:00:00.000000', 'LADS', 'ULTRABOOST 20 CORE BLACKGOLD.jpg', 'ULTRABOOST 20 CORE BLACK/GOLD', 3800000, 1),
('AD0012', 'ULTRABOOST 20 SOLAR RED', 4200000, 100, '2021-03-15 17:00:00.000000', 'LADS', 'ULTRABOOST 20 SOLAR RED.jpg', 'ULTRABOOST 20 SOLAR RED', 3800000, 1),
('AD0013', 'ULTRABOOST LTD SILVER', 4200000, 100, '2021-03-15 17:00:00.000000', 'LADS', 'ULTRABOOST LTD SILVER.jpg', 'ULTRABOOST LTD SILVER', 3800000, 1),
('AD0014', 'YUNG-1 OG RED', 2800000, 100, '2021-03-15 17:00:00.000000', 'LADS', 'YUNG-1 OG RED.jpg', 'YUNG-1 OG RED', 2500000, 1),
('AD0015', 'ZX 2K BOOST', 0, 100, '2021-03-15 17:00:00.000000', 'LADS', 'ZX 2K BOOST.jpg', 'ZX 2K BOOST', 2800000, 1),
('JD0001', 'AIR JORDAN 1 HI TROPHY ROOM CHICAGO', 0, 10, '2021-03-15 17:00:00.000000', 'LJDN', 'AIR JORDAN 1 HI TROPHY ROOM CHICAGO.jpg', 'AIR JORDAN 1 HI TROPHY ROOM CHICAGO', 60000000, 1),
('JD0002', 'AIR JORDAN 1 LOW BRED', 0, 100, '2021-03-15 17:00:00.000000', 'LJDN', 'AIR JORDAN 1 LOW BRED.png', 'AIR JORDAN 1 LOW BRED', 5600000, 1),
('JD0003', 'DUNK LOW COAST', 0, 100, '2021-03-15 17:00:00.000000', 'LJDN', 'DUNK LOW COAST.jpg', 'DUNK LOW COAST', 9500000, 1),
('JD0004', 'DUNK LOW MEDIUM GREY/ RED', 0, 100, '2021-03-15 17:00:00.000000', 'LJDN', 'DUNK LOW MEDIUM GREYRED.jpg', 'DUNK LOW MEDIUM GREY/ RED', 7800000, 1),
('JD0005', 'DUNK LOW ORANGE PEARL', 0, 0, '2021-03-16 14:43:15.000000', 'LJDN', 'DUNK LOW ORANGE PEARL.jpg', 'DUNK LOW ORANGE PEARL', 8500000, 0),
('JD0006', 'DUNK LOW RETRO BLACK/WH', 0, 100, '2021-03-15 17:00:00.000000', 'LJDN', 'DUNK LOW RETRO BLACKWH.jpg', 'DUNK LOW RETRO BLACK/WH', 8500000, 1),
('JD0007', 'JORDAN 1 LOW BLACK SIREN RED', 0, 100, '2021-03-15 17:00:00.000000', 'LJDN', 'JORDAN 1 LOW BLACK SIREN RED.jpg', 'JORDAN 1 LOW BLACK SIREN RED', 5800000, 1),
('JD0008', 'JORDAN 1 LOW BLACK TOE', 0, 100, '2021-03-15 17:00:00.000000', 'LJDN', 'JORDAN 1 LOW BLACK TOE.jpg', 'JORDAN 1 LOW BLACK TOE', 9500000, 1),
('JD0009', 'JORDAN 1 LOW CANYON RUST', 0, 100, '2021-03-15 17:00:00.000000', 'LJDN', 'JORDAN 1 LOW CANYON RUST.jpg', 'JORDAN 1 LOW CANYON RUST', 7500000, 1),
('JD0010', 'JORDAN 1 LOW GREY CAMO', 0, 0, '2021-03-15 17:00:00.000000', 'LJDN', 'JORDAN 1 LOW GREY CAMO.jpg', 'JORDAN 1 LOW GREY CAMO', 7200000, 0),
('JD0011', 'JORDAN 1 LOW GYM RED WHITE', 0, 100, '2021-03-15 17:00:00.000000', 'LJDN', 'JORDAN 1 LOW GYM RED WHITE.jpg', 'JORDAN 1 LOW GYM RED WHITE', 6800000, 1),
('JD0012', 'JORDAN 1 LOW LIGHT SMOKE GREY', 0, 100, '2021-03-15 17:00:00.000000', 'LJDN', 'JORDAN 1 LOW GREY CAMO.jpg', 'JORDAN 1 LOW LIGHT SMOKE GREY', 7200000, 1),
('JD0013', 'JORDAN 1 LOW PURPLE', 0, 100, '2021-03-15 17:00:00.000000', 'LJDN', 'JORDAN 1 LOW PURPLE.jpg', 'JORDAN 1 LOW PURPLE', 5800000, 1),
('JD0014', 'JORDAN 1 LOW SILVER TOE', 0, 100, '2021-03-15 17:00:00.000000', 'LJDN', 'JORDAN 1 LOW SILVER TOE.jpg', 'JORDAN 1 LOW SILVER TOE', 6200000, 1),
('JD0015', 'JORDAN 1 LOW WHITE METALLIC GOLD', 0, 0, '2021-03-15 17:00:00.000000', 'LJDN', 'JORDAN 1 LOW WHITE METALLIC GOLD.jpg', 'JORDAN 1 LOW WHITE METALLIC GOLD', 6200000, 0),
('NK0001', 'AIR FORCE 1 LOW QS', 3900000, 100, '2021-03-16 13:54:47.000000', 'LNKE', 'AIR FORCE 1 LOW QS.jpg', 'Nike Air Force 1 ra máº¯t vÃ o nÄƒm 1982 vá»›i tÆ° cÃ¡ch lÃ  giÃ y bÃ³ng rá»• Ä‘áº§u tiÃªn cÃ³ tÃºi khÃ­ á»Ÿ gÃ³t chÃ¢n. NhÃ  thiáº¿t káº¿ Bruce Kilgore cá»§a há» Ä‘Ã£ Ä‘áº·t tÃªn cho nhá»¯ng cÃº Ä‘Ã¡ theo tÃªn chiáº¿c mÃ¡y bay chá»Ÿ Tá»•ng thá»‘ng Hoa Ká»³. NgÃ y nay, chÃºng lÃ  biá»ƒu tÆ°á»£ng cá»§a vÄƒn hÃ³a hip-hop vÃ  lÃ  má»™t sá»‘ hÃ¬nh bÃ³ng phá»• biáº¿n nháº¥t cá»§a Nike.', 3600000, 1),
('NK0002', 'AIR FORCE 1 LOW WORLDWIDE KATAKANA GOLD', 3900000, 100, '2021-03-15 17:00:00.000000', 'LNKE', 'AIR FORCE 1 LOW WORLDWIDE KATAKANA GOLD.jpg', 'Tuyá»‡t pháº©m Ä‘áº¹p Ä‘áº¿n tá»«ng chi tiáº¿t gÃ³c cáº¡nh', 3600000, 1),
('NK0003', 'AIR FORCE 1 LV8 EMB', 3900000, 100, '2021-03-15 17:00:00.000000', 'LNKE', 'AIR FORCE 1 LV8 EMB.jpg', 'Äáº¿ cá»±c Ãªm , Ä‘Ã n há»“i tá»‘t , Ä‘á»™ bá»n vÃ  bÃ¡m dÃ­nh cao.GiÃ y Ä‘i nháº¹ , Ã´m chÃ¢n .', 3600000, 1),
('NK0004', 'AIR FORCE 1 LV8', 3900000, 100, '2021-03-15 17:00:00.000000', 'LNKE', 'AIR FORCE 1 LV8.jpg', 'Äáº¿ cá»±c Ãªm , Ä‘Ã n há»“i tá»‘t , Ä‘á»™ bá»n vÃ  bÃ¡m dÃ­nh cao. GiÃ y Ä‘i nháº¹ , Ã´m chÃ¢n', 3600000, 1),
('NK0005', 'AIR FORCE 1 MOVE TO ZERO', 0, 0, '2021-03-15 17:00:00.000000', 'LNKE', 'AIR FORCE 1 MOVE TO ZERO.jpg', 'AIR FORCE 1 MOVE TO ZERO', 3900000, 0),
('NK0006', 'AIR FORCE 1 MOVE TO ZERO 1', 0, 100, '2021-03-15 17:00:00.000000', 'LNKE', 'AIR FORCE 1 MOVE TO ZERO-1.jpg', 'AIR FORCE 1 MOVE TO ZERO 1', 3900000, 1),
('NK0007', 'AIR FORCE 1 NBA GREY/BLACK', 3900000, 100, '2021-03-15 17:00:00.000000', 'LNKE', 'AIR FORCE 1 NBA.jpg', 'AIR FORCE 1 NBA GREY/BLACK', 3600000, 1),
('NK0008', 'AIR FORCE 1 PIXEL', 0, 100, '2021-03-15 17:00:00.000000', 'LNKE', 'AIR FORCE 1 PIXEL.jpg', 'AIR FORCE 1 PIXEL', 3900000, 1),
('NK0009', 'AIR FORCE 1 PRM WW', 4200000, 100, '2021-03-15 17:00:00.000000', 'LNKE', 'AIR FORCE 1 PRM WW.jpg', 'AIR FORCE 1 PRM WW', 3900000, 1),
('NK0010', 'AIR MAX 2017 BINARY BLUE', 0, 0, '2021-03-15 17:00:00.000000', 'LNKE', 'AIR MAX 2017 BINARY BLUE.jpg', 'AIR MAX 2017 BINARY BLUE', 4900000, 0),
('NK0011', 'AIR MAX 90 HOME & AWAY BLUE', 0, 100, '2021-03-15 17:00:00.000000', 'LNKE', 'air-max-90.jpg', 'AIR MAX 90 HOME & AWAY BLUE', 3900000, 1),
('NK0012', 'LEBRON WITNESS 4 RED CARPET', 0, 100, '2021-03-15 17:00:00.000000', 'LNKE', 'LEBRON WITNESS 4 RED CARPET.jpeg', 'LEBRON WITNESS 4 RED CARPET', 3900000, 1),
('NK0013', 'LEBRON XVII LOW', 0, 0, '2021-03-15 17:00:00.000000', 'LNKE', 'LEBRON XVII LOW.jpg', 'LEBRON XVII LOW', 42000000, 0),
('NK0014', 'AIR FORCE 1 LOW NBA WH/GREY', 3900000, 100, '2021-03-15 17:00:00.000000', 'LNKE', 'SNEAKER-AIR-FORCE-1.jpg', 'AIR FORCE 1 LOW NBA WH/GREY', 3600000, 1),
('NK0015', 'ZOOM PEGASUS 37 FLYASE', 3900000, 100, '2021-03-15 17:00:00.000000', 'LNKE', 'ZOOM PEGASUS 37 FLYASE.jpg', 'ZOOM PEGASUS 37 FLYASE', 3200000, 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitiet`
--
ALTER TABLE `chitiet`
  ADD CONSTRAINT `FK_ct_sp` FOREIGN KEY (`masp`) REFERENCES `sanpham` (`masp`),
  ADD CONSTRAINT `FK_hd_ct` FOREIGN KEY (`sohd`) REFERENCES `hoadon` (`sohd`);

--
-- Constraints for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `FK_hd_kh_1` FOREIGN KEY (`makh`) REFERENCES `khachhang` (`makh`);

--
-- Constraints for table `loaihang`
--
ALTER TABLE `loaihang`
  ADD CONSTRAINT `FK_nv_lh` FOREIGN KEY (`manv`) REFERENCES `nhanvien` (`manv`);

--
-- Constraints for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `FK_ord_orddl_2` FOREIGN KEY (`product_id`) REFERENCES `sanpham` (`masp`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_ord_orddl_1` FOREIGN KEY (`order_id`) REFERENCES `order` (`idd`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `FK_sp_lh` FOREIGN KEY (`loaisp`) REFERENCES `loaihang` (`loaisp`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
