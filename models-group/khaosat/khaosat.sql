-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.28-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.4.0.6659
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for khaosat
CREATE DATABASE IF NOT EXISTS `khaosat` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `khaosat`;

-- Dumping structure for table khaosat.canbo
CREATE TABLE IF NOT EXISTS `canbo` (
  `id_can_bo` int(11) NOT NULL AUTO_INCREMENT,
  `ma_can_bo` varchar(50) DEFAULT NULL,
  `ten_can_bo` varchar(50) DEFAULT NULL,
  `gioi_tinh` tinyint(4) DEFAULT NULL,
  `ngay_sinh` date DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `so_dien_thoai_1` varchar(11) DEFAULT NULL,
  `so_dien_thoai_2` varchar(11) DEFAULT NULL,
  `dia_chi_lien_lac` text DEFAULT NULL,
  `dia_chi_thuong_tru` text DEFAULT NULL,
  `id_trinh_do` int(11) DEFAULT NULL,
  `id_don_vi` int(11) DEFAULT NULL,
  `id_phan_loai` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_can_bo`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table khaosat.canbo: ~0 rows (approximately)

-- Dumping structure for table khaosat.cauhoi
CREATE TABLE IF NOT EXISTS `cauhoi` (
  `id_cau_hoi` int(11) NOT NULL AUTO_INCREMENT,
  `ten_cau_hoi` text DEFAULT NULL,
  `ghi_chu` text DEFAULT NULL,
  `thu_tu` int(11) DEFAULT NULL,
  `id_nhom` int(11) DEFAULT NULL,
  `is_text` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id_cau_hoi`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table khaosat.cauhoi: ~0 rows (approximately)

-- Dumping structure for table khaosat.doituongapdung
CREATE TABLE IF NOT EXISTS `doituongapdung` (
  `id_doi_tuong_ap_dung` int(11) NOT NULL AUTO_INCREMENT,
  `id_dot` int(11) NOT NULL DEFAULT 0,
  `id_ten_khao_sat` int(11) NOT NULL DEFAULT 0,
  `id_phan_nhom` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_doi_tuong_ap_dung`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table khaosat.doituongapdung: ~0 rows (approximately)

-- Dumping structure for table khaosat.donvi
CREATE TABLE IF NOT EXISTS `donvi` (
  `id_don_vi` int(11) NOT NULL AUTO_INCREMENT,
  `ten_don_vi` varchar(50) DEFAULT NULL,
  `ghi_chu` text DEFAULT NULL,
  `is_khoa` tinyint(1) DEFAULT 1,
  PRIMARY KEY (`id_don_vi`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table khaosat.donvi: ~0 rows (approximately)

-- Dumping structure for table khaosat.dotkhaosat
CREATE TABLE IF NOT EXISTS `dotkhaosat` (
  `id_dot` int(11) NOT NULL AUTO_INCREMENT,
  `ten_dot` text DEFAULT NULL,
  `ghi_chu` text DEFAULT NULL,
  `thoi_gian_bat_dau` date DEFAULT NULL,
  `thoi_gian_ket_thuc` date DEFAULT NULL,
  `id_hoc_ky` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_dot`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table khaosat.dotkhaosat: ~0 rows (approximately)

-- Dumping structure for table khaosat.hocky
CREATE TABLE IF NOT EXISTS `hocky` (
  `id_hoc_ky` int(11) NOT NULL AUTO_INCREMENT,
  `ten_hoc_ky` varchar(50) DEFAULT NULL,
  `ghi_chu` text DEFAULT NULL,
  `id_nam_hoc` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_hoc_ky`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table khaosat.hocky: ~0 rows (approximately)

-- Dumping structure for table khaosat.khoahoc
CREATE TABLE IF NOT EXISTS `khoahoc` (
  `id_khoa_hoc` int(11) NOT NULL AUTO_INCREMENT,
  `ten_khoa_hoc` varchar(50) DEFAULT NULL,
  `ghi_chu` text DEFAULT NULL,
  PRIMARY KEY (`id_khoa_hoc`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table khaosat.khoahoc: ~0 rows (approximately)

-- Dumping structure for table khaosat.lophoc
CREATE TABLE IF NOT EXISTS `lophoc` (
  `id_lop_hoc` int(11) NOT NULL AUTO_INCREMENT,
  `ten_lop_hoc` varchar(50) DEFAULT NULL,
  `ghi_chu` text DEFAULT NULL,
  `id_khoa_hoc` int(11) DEFAULT NULL,
  `id_nganh_hoc` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_lop_hoc`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table khaosat.lophoc: ~0 rows (approximately)

-- Dumping structure for table khaosat.namhoc
CREATE TABLE IF NOT EXISTS `namhoc` (
  `id_nam_hoc` int(11) NOT NULL AUTO_INCREMENT,
  `ten_nam_hoc` varchar(50) DEFAULT NULL,
  `ghi_chu` text DEFAULT NULL,
  PRIMARY KEY (`id_nam_hoc`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table khaosat.namhoc: ~0 rows (approximately)

-- Dumping structure for table khaosat.nganhhoc
CREATE TABLE IF NOT EXISTS `nganhhoc` (
  `id_khoa_hoc` int(11) NOT NULL AUTO_INCREMENT,
  `ten_khoa_hoc` varchar(50) DEFAULT NULL,
  `ghi_chu` text DEFAULT NULL,
  `id_khoa` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_khoa_hoc`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table khaosat.nganhhoc: ~0 rows (approximately)

-- Dumping structure for table khaosat.nhomcauhoi
CREATE TABLE IF NOT EXISTS `nhomcauhoi` (
  `id_nhom_cau_hoi` int(11) NOT NULL AUTO_INCREMENT,
  `ten_nhom_cau_hoi` text DEFAULT NULL,
  `ghi_chu` text DEFAULT NULL,
  `thu_tu` int(11) DEFAULT NULL,
  `id_ten_khao_sat` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_nhom_cau_hoi`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table khaosat.nhomcauhoi: ~0 rows (approximately)

-- Dumping structure for table khaosat.phanloai
CREATE TABLE IF NOT EXISTS `phanloai` (
  `id_phan_loai` int(11) NOT NULL AUTO_INCREMENT,
  `ten_phan_loai` varchar(50) DEFAULT NULL,
  `ghi_chu` text DEFAULT NULL,
  PRIMARY KEY (`id_phan_loai`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table khaosat.phanloai: ~0 rows (approximately)

-- Dumping structure for table khaosat.phanquyen
CREATE TABLE IF NOT EXISTS `phanquyen` (
  `id_phan_quyen` int(11) NOT NULL AUTO_INCREMENT,
  `ten_phan_quyen` varchar(50) DEFAULT NULL,
  `ghi_chu` text DEFAULT NULL,
  PRIMARY KEY (`id_phan_quyen`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table khaosat.phanquyen: ~0 rows (approximately)

-- Dumping structure for table khaosat.phieukhaosat
CREATE TABLE IF NOT EXISTS `phieukhaosat` (
  `id_phieu` int(11) NOT NULL AUTO_INCREMENT,
  `id_ap_dung` int(11) NOT NULL DEFAULT 0,
  `id_doi_tuong` int(11) NOT NULL DEFAULT 0,
  `ket_qua` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`ket_qua`)),
  `ngay_khao_sat` datetime DEFAULT NULL,
  PRIMARY KEY (`id_phieu`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table khaosat.phieukhaosat: ~0 rows (approximately)

-- Dumping structure for table khaosat.sinhvien
CREATE TABLE IF NOT EXISTS `sinhvien` (
  `id_sinh_vien` int(11) NOT NULL AUTO_INCREMENT,
  `ma_sinh_vien` varchar(50) DEFAULT NULL,
  `ten_sinh_vien` varchar(50) DEFAULT NULL,
  `gioi_tinh` tinyint(4) DEFAULT NULL,
  `ngay_sinh` date DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `so_dien_thoai_1` varchar(11) DEFAULT NULL,
  `so_dien_thoai_2` varchar(11) DEFAULT NULL,
  `dia_chi_lien_lac` text DEFAULT NULL,
  `dia_chi_thuong_tru` text DEFAULT NULL,
  `id_lop_hoc` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_sinh_vien`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table khaosat.sinhvien: ~0 rows (approximately)

-- Dumping structure for table khaosat.taikhoan
CREATE TABLE IF NOT EXISTS `taikhoan` (
  `id_tai_khoan` int(11) NOT NULL AUTO_INCREMENT,
  `ten_tai_khoan` varchar(50) DEFAULT NULL,
  `mat_khau` varchar(50) DEFAULT NULL,
  `ghi_chu` text DEFAULT NULL,
  `id_phan_quyen` int(11) DEFAULT NULL,
  `id_phan_nhom` int(11) DEFAULT NULL,
  `id_nguoi_dung` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_tai_khoan`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table khaosat.taikhoan: ~0 rows (approximately)

-- Dumping structure for table khaosat.tenkhaosat
CREATE TABLE IF NOT EXISTS `tenkhaosat` (
  `id_ten_khao_sat` int(11) NOT NULL AUTO_INCREMENT,
  `ten_khao_sat` text DEFAULT NULL,
  `ghi_chu` text DEFAULT NULL,
  PRIMARY KEY (`id_ten_khao_sat`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table khaosat.tenkhaosat: ~0 rows (approximately)

-- Dumping structure for table khaosat.trinhdo
CREATE TABLE IF NOT EXISTS `trinhdo` (
  `id_trinh_do` int(11) NOT NULL AUTO_INCREMENT,
  `ten_trinh_do` varchar(50) DEFAULT NULL,
  `ghi_chu` text DEFAULT NULL,
  PRIMARY KEY (`id_trinh_do`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table khaosat.trinhdo: ~0 rows (approximately)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
