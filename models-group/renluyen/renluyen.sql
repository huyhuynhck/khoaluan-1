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


-- Dumping database structure for renluyen
CREATE DATABASE IF NOT EXISTS `renluyen` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `renluyen`;

-- Dumping structure for table renluyen.canbo
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
  PRIMARY KEY (`id_can_bo`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table renluyen.canbo: ~0 rows (approximately)

-- Dumping structure for table renluyen.dieu
CREATE TABLE IF NOT EXISTS `dieu` (
  `id_dieu` int(11) NOT NULL AUTO_INCREMENT,
  `ten_dieu` text DEFAULT NULL,
  `ghi_chu` text DEFAULT NULL,
  `thu_tu` int(11) DEFAULT NULL,
  `id_mau_phieu` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_dieu`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table renluyen.dieu: ~0 rows (approximately)

-- Dumping structure for table renluyen.doituongapdung
CREATE TABLE IF NOT EXISTS `doituongapdung` (
  `id_doi_tuong_ap_dung` int(11) NOT NULL AUTO_INCREMENT,
  `id_dot` int(11) NOT NULL DEFAULT 0,
  `id_mau_phieu` int(11) NOT NULL DEFAULT 0,
  `id_phan_nhom` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_doi_tuong_ap_dung`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table renluyen.doituongapdung: ~0 rows (approximately)

-- Dumping structure for table renluyen.donvi
CREATE TABLE IF NOT EXISTS `donvi` (
  `id_don_vi` int(11) NOT NULL AUTO_INCREMENT,
  `ten_don_vi` varchar(50) DEFAULT NULL,
  `ghi_chu` text DEFAULT NULL,
  `is_khoa` tinyint(1) DEFAULT 1,
  PRIMARY KEY (`id_don_vi`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table renluyen.donvi: ~0 rows (approximately)

-- Dumping structure for table renluyen.dotchamdiem
CREATE TABLE IF NOT EXISTS `dotchamdiem` (
  `id_dot` int(11) NOT NULL AUTO_INCREMENT,
  `ten_dot` text DEFAULT NULL,
  `ghi_chu` text DEFAULT NULL,
  `thoi_gian_bat_dau` date DEFAULT NULL,
  `thoi_gian_ket_thuc` date DEFAULT NULL,
  `id_hoc_ky` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_dot`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table renluyen.dotchamdiem: ~0 rows (approximately)

-- Dumping structure for table renluyen.hocky
CREATE TABLE IF NOT EXISTS `hocky` (
  `id_hoc_ky` int(11) NOT NULL AUTO_INCREMENT,
  `ten_hoc_ky` varchar(50) DEFAULT NULL,
  `ghi_chu` text DEFAULT NULL,
  `id_nam_hoc` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_hoc_ky`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table renluyen.hocky: ~0 rows (approximately)

-- Dumping structure for table renluyen.import
CREATE TABLE IF NOT EXISTS `import` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `note` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table renluyen.import: ~0 rows (approximately)

-- Dumping structure for table renluyen.khoahoc
CREATE TABLE IF NOT EXISTS `khoahoc` (
  `id_khoa_hoc` int(11) NOT NULL AUTO_INCREMENT,
  `ten_khoa_hoc` varchar(50) DEFAULT NULL,
  `ghi_chu` text DEFAULT NULL,
  PRIMARY KEY (`id_khoa_hoc`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table renluyen.khoahoc: ~0 rows (approximately)

-- Dumping structure for table renluyen.khoan
CREATE TABLE IF NOT EXISTS `khoan` (
  `id_khoan` int(11) NOT NULL AUTO_INCREMENT,
  `ten_khoan` text DEFAULT NULL,
  `ghi_chu` text DEFAULT NULL,
  `can_tren` int(11) DEFAULT NULL,
  `thu_tu` int(11) DEFAULT NULL,
  `id_dieu` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_khoan`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table renluyen.khoan: ~0 rows (approximately)

-- Dumping structure for table renluyen.lophoc
CREATE TABLE IF NOT EXISTS `lophoc` (
  `id_lop_hoc` int(11) NOT NULL AUTO_INCREMENT,
  `ten_lop_hoc` varchar(50) DEFAULT NULL,
  `ghi_chu` text DEFAULT NULL,
  `id_khoa_hoc` int(11) DEFAULT NULL,
  `id_nganh_hoc` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_lop_hoc`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table renluyen.lophoc: ~0 rows (approximately)

-- Dumping structure for table renluyen.mauphieu
CREATE TABLE IF NOT EXISTS `mauphieu` (
  `id_mau_phieu` int(11) NOT NULL AUTO_INCREMENT,
  `ten_mau_phieu` text DEFAULT NULL,
  `ghi_chu` text DEFAULT NULL,
  PRIMARY KEY (`id_mau_phieu`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table renluyen.mauphieu: ~0 rows (approximately)

-- Dumping structure for table renluyen.minhchung
CREATE TABLE IF NOT EXISTS `minhchung` (
  `id_minh_chung` int(11) NOT NULL AUTO_INCREMENT,
  `ten_minh_chung` text DEFAULT NULL,
  `ghi_chu` text DEFAULT NULL,
  `hinh_anh` longblob DEFAULT NULL,
  `id_muc` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_minh_chung`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table renluyen.minhchung: ~0 rows (approximately)

-- Dumping structure for table renluyen.muc
CREATE TABLE IF NOT EXISTS `muc` (
  `id_muc` int(11) NOT NULL AUTO_INCREMENT,
  `ten_muc` text DEFAULT NULL,
  `ghi_chu` text DEFAULT NULL,
  `can_tren` int(11) DEFAULT NULL,
  `thu_tu` int(11) DEFAULT NULL,
  `id_khoan` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_muc`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table renluyen.muc: ~0 rows (approximately)

-- Dumping structure for table renluyen.namhoc
CREATE TABLE IF NOT EXISTS `namhoc` (
  `id_nam_hoc` int(11) NOT NULL AUTO_INCREMENT,
  `ten_nam_hoc` varchar(50) DEFAULT NULL,
  `ghi_chu` text DEFAULT NULL,
  PRIMARY KEY (`id_nam_hoc`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table renluyen.namhoc: ~0 rows (approximately)

-- Dumping structure for table renluyen.nganhhoc
CREATE TABLE IF NOT EXISTS `nganhhoc` (
  `id_nganh_hoc` int(11) NOT NULL AUTO_INCREMENT,
  `ten_nganh_hoc` varchar(50) DEFAULT NULL,
  `ghi_chu` text DEFAULT NULL,
  `id_khoa` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_nganh_hoc`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table renluyen.nganhhoc: ~0 rows (approximately)

-- Dumping structure for table renluyen.phanloai
CREATE TABLE IF NOT EXISTS `phanloai` (
  `id_phan_loai` int(11) NOT NULL AUTO_INCREMENT,
  `ten_phan_loai` varchar(50) DEFAULT NULL,
  `ghi_chu` text DEFAULT NULL,
  PRIMARY KEY (`id_phan_loai`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table renluyen.phanloai: ~0 rows (approximately)

-- Dumping structure for table renluyen.phannhom
CREATE TABLE IF NOT EXISTS `phannhom` (
  `id_phan_nhom` int(11) NOT NULL AUTO_INCREMENT,
  `ten_phan_nhom` varchar(50) DEFAULT NULL,
  `ghi_chu` text DEFAULT NULL,
  PRIMARY KEY (`id_phan_nhom`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table renluyen.phannhom: ~0 rows (approximately)

-- Dumping structure for table renluyen.phanquyen
CREATE TABLE IF NOT EXISTS `phanquyen` (
  `id_phan_quyen` int(11) NOT NULL AUTO_INCREMENT,
  `ten_phan_quyen` varchar(50) DEFAULT NULL,
  `ghi_chu` text DEFAULT NULL,
  PRIMARY KEY (`id_phan_quyen`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table renluyen.phanquyen: ~0 rows (approximately)

-- Dumping structure for table renluyen.phieuchamdiem
CREATE TABLE IF NOT EXISTS `phieuchamdiem` (
  `id_phieu` int(11) NOT NULL AUTO_INCREMENT,
  `id_ap_dung` int(11) NOT NULL DEFAULT 0,
  `id_doi_tuong` int(11) NOT NULL DEFAULT 0,
  `ket_qua` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`ket_qua`)),
  `ngay_thuc_hien` datetime DEFAULT NULL,
  PRIMARY KEY (`id_phieu`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table renluyen.phieuchamdiem: ~0 rows (approximately)

-- Dumping structure for table renluyen.sinhvien
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

-- Dumping data for table renluyen.sinhvien: ~0 rows (approximately)

-- Dumping structure for table renluyen.taikhoan
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

-- Dumping data for table renluyen.taikhoan: ~0 rows (approximately)

-- Dumping structure for table renluyen.trinhdo
CREATE TABLE IF NOT EXISTS `trinhdo` (
  `id_trinh_do` int(11) NOT NULL AUTO_INCREMENT,
  `ten_trinh_do` varchar(50) DEFAULT NULL,
  `ghi_chu` text DEFAULT NULL,
  PRIMARY KEY (`id_trinh_do`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table renluyen.trinhdo: ~2 rows (approximately)
INSERT INTO `trinhdo` (`id_trinh_do`, `ten_trinh_do`, `ghi_chu`) VALUES
	(3, 'a', 'a'),
	(4, 'a', 'a');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
