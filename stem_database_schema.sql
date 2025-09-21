-- ========================================
-- STEM Project Database Schema
-- Generated on: 2025-09-21
-- Database: MySQL
-- ========================================

-- Set SQL mode and charset
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

-- Create database if not exists
CREATE DATABASE IF NOT EXISTS `stem_database` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `stem_database`;

-- ========================================
-- Core Laravel Tables
-- ========================================

-- Users table (Laravel default)
CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Password reset tokens
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Failed jobs table
CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Personal access tokens (Laravel Sanctum)
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ========================================
-- STEM Application Tables
-- ========================================

-- Age groups table
CREATE TABLE `age` (
  `ID_age` int(11) NOT NULL AUTO_INCREMENT,
  `sTenDoTuoi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sMoTa` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`ID_age`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Gender table
CREATE TABLE `gender` (
  `ID_gender` int(11) NOT NULL AUTO_INCREMENT,
  `sTenGioiTinh` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sMoTa` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`ID_gender`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Category parent table
CREATE TABLE `category_parent` (
  `ID_category_parent` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sTenChuDeParent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sMoTa` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`ID_category_parent`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Category table
CREATE TABLE `category` (
  `ID_category` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sTenChuDe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ID_category_parent` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sMoTa` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`ID_category`),
  KEY `fk_category_parent` (`ID_category_parent`),
  CONSTRAINT `fk_category_parent` FOREIGN KEY (`ID_category_parent`) REFERENCES `category_parent` (`ID_category_parent`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Image table
CREATE TABLE `image` (
  `ID_image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sDuongDan1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sDuongDan2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sDuongDan3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sDuongDan4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sDuongDan5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID_image`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Product table
CREATE TABLE `product` (
  `ID_Product` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sTenSanPham` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ID_category` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ID_image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fGiaNiemYet` decimal(15,2) NOT NULL DEFAULT '0.00',
  `fGiaBan` decimal(15,2) NOT NULL DEFAULT '0.00',
  `iSoLuong` int(11) NOT NULL DEFAULT '0',
  `sMoTa` text COLLATE utf8mb4_unicode_ci,
  `iLuotXem` int(11) NOT NULL DEFAULT '0',
  `iLuotMua` int(11) NOT NULL DEFAULT '0',
  `bIsActive` tinyint(1) NOT NULL DEFAULT '1',
  `ID_age` int(11) NOT NULL,
  `ID_gender` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID_Product`),
  KEY `fk_product_category` (`ID_category`),
  KEY `fk_product_image` (`ID_image`),
  KEY `fk_product_age` (`ID_age`),
  KEY `fk_product_gender` (`ID_gender`),
  CONSTRAINT `fk_product_age` FOREIGN KEY (`ID_age`) REFERENCES `age` (`ID_age`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_product_category` FOREIGN KEY (`ID_category`) REFERENCES `category` (`ID_category`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_product_gender` FOREIGN KEY (`ID_gender`) REFERENCES `gender` (`ID_gender`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_product_image` FOREIGN KEY (`ID_image`) REFERENCES `image` (`ID_image`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Rights/Permissions table
CREATE TABLE `quyen` (
  `ID_quyen` int(11) NOT NULL AUTO_INCREMENT,
  `sTenQuyen` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sMoTa` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`ID_quyen`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Employee table
CREATE TABLE `employee` (
  `ID_employee` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sHoTen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sDiaChi` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sEmail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sSdt` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sTaiKhoan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sMatKhau` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ID_quyen` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID_employee`),
  UNIQUE KEY `employee_email_unique` (`sEmail`),
  UNIQUE KEY `employee_account_unique` (`sTaiKhoan`),
  KEY `fk_employee_quyen` (`ID_quyen`),
  CONSTRAINT `fk_employee_quyen` FOREIGN KEY (`ID_quyen`) REFERENCES `quyen` (`ID_quyen`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Blog table
CREATE TABLE `blog` (
  `ID_blog` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sTieuDe` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ID_category` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sDuongDan1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sNoiDung` longtext COLLATE utf8mb4_unicode_ci,
  `sTomTat` text COLLATE utf8mb4_unicode_ci,
  `ID_employee` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sTrangThai` enum('cho_duyet','duyet','tu_choi') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'cho_duyet',
  `dCreateAt` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `dUpdateAt` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID_blog`),
  KEY `fk_blog_category` (`ID_category`),
  KEY `fk_blog_employee` (`ID_employee`),
  CONSTRAINT `fk_blog_category` FOREIGN KEY (`ID_category`) REFERENCES `category` (`ID_category`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_blog_employee` FOREIGN KEY (`ID_employee`) REFERENCES `employee` (`ID_employee`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Member table
CREATE TABLE `member` (
  `ID_member` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sHoTen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sEmail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sSdt` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sDiaChi` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sMatKhau` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID_member`),
  UNIQUE KEY `member_email_unique` (`sEmail`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Customer table
CREATE TABLE `customer` (
  `ID_customer` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ID_member` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dNgayTao` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID_customer`),
  KEY `fk_customer_member` (`ID_member`),
  CONSTRAINT `fk_customer_member` FOREIGN KEY (`ID_member`) REFERENCES `member` (`ID_member`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Order detail table
CREATE TABLE `order_detail` (
  `ID_order_detail` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ID_Product` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iSoLuong` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID_order_detail`, `ID_Product`),
  KEY `fk_order_detail_product` (`ID_Product`),
  CONSTRAINT `fk_order_detail_product` FOREIGN KEY (`ID_Product`) REFERENCES `product` (`ID_Product`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Order table
CREATE TABLE `_order` (
  `ID_order` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ID_order_detail` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ID_customer` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dNgayDat` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `dNgayGiaoHang` timestamp NULL DEFAULT NULL,
  `sTrangThai` enum('cho_xac_nhan','da_xac_nhan','dang_giao','da_giao','da_huy') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'cho_xac_nhan',
  PRIMARY KEY (`ID_order`),
  KEY `fk_order_customer` (`ID_customer`),
  KEY `fk_order_detail_ref` (`ID_order_detail`),
  CONSTRAINT `fk_order_customer` FOREIGN KEY (`ID_customer`) REFERENCES `customer` (`ID_customer`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Payments table (VNPay integration)
CREATE TABLE `payments` (
  `vnp_TxnRef` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vnp_Amount` decimal(15,2) NOT NULL,
  `vnp_OrderInfo` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vnp_ResponseCode` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vnp_TransactionNo` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vnp_BankCode` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vnp_PayDate` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vnp_SecureHash` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ID_order` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`vnp_TxnRef`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ========================================
-- Sample Data
-- ========================================

-- Insert age groups
INSERT INTO `age` (`ID_age`, `sTenDoTuoi`, `sMoTa`) VALUES
(1, 'Dưới 7 tuổi', 'Trẻ em mầm non'),
(2, '7-12 tuổi', 'Trẻ em tiểu học'),
(3, '13-18 tuổi', 'Trẻ em trung học');

-- Insert gender data
INSERT INTO `gender` (`ID_gender`, `sTenGioiTinh`, `sMoTa`) VALUES
(1, 'Nam', 'Dành cho bé trai'),
(2, 'Nữ', 'Dành cho bé gái'),
(3, 'Cả hai', 'Phù hợp cho cả nam và nữ');

-- Insert category parent
INSERT INTO `category_parent` (`ID_category_parent`, `sTenChuDeParent`, `sMoTa`) VALUES
('stem-tieu-hoc', 'STEM Tiểu học', 'Sản phẩm STEM dành cho học sinh tiểu học'),
('stem-trung-hoc-co-so', 'STEM Trung học cơ sở', 'Sản phẩm STEM dành cho học sinh THCS'),
('stem-trung-hoc-pho-thong', 'STEM Trung học phổ thông', 'Sản phẩm STEM dành cho học sinh THPT');

-- Insert categories
INSERT INTO `category` (`ID_category`, `sTenChuDe`, `ID_category_parent`, `sMoTa`) VALUES
('robotics-tieu-hoc', 'Robotics Tiểu học', 'stem-tieu-hoc', 'Bộ kit robotics dành cho tiểu học'),
('science-kit-tieu-hoc', 'Bộ thí nghiệm khoa học tiểu học', 'stem-tieu-hoc', 'Bộ thí nghiệm khoa học cơ bản'),
('programming-thcs', 'Lập trình THCS', 'stem-trung-hoc-co-so', 'Học lập trình cơ bản'),
('arduino-thpt', 'Arduino THPT', 'stem-trung-hoc-pho-thong', 'Kit Arduino nâng cao');

-- Insert permissions
INSERT INTO `quyen` (`ID_quyen`, `sTenQuyen`, `sMoTa`) VALUES
(1, 'Admin', 'Quản trị viên hệ thống'),
(2, 'Manager', 'Quản lý'),
(3, 'Content Creator', 'Người tạo nội dung'),
(4, 'Staff', 'Nhân viên');

-- Insert sample employee
INSERT INTO `employee` (`ID_employee`, `sHoTen`, `sDiaChi`, `sEmail`, `sSdt`, `sTaiKhoan`, `sMatKhau`, `ID_quyen`) VALUES
('id_emp_1', 'Admin User', 'Hà Nội, Việt Nam', 'admin@stem.vn', '0123456789', 'admin', SHA1('admin123'), 1);

-- Insert sample image records
INSERT INTO `image` (`ID_image`, `sDuongDan1`, `sDuongDan2`, `sDuongDan3`, `sDuongDan4`, `sDuongDan5`) VALUES
('combo-thi-nghiem', 'combo-1.jpg', 'combo-2.jpg', 'combo-3.jpg', 'combo-4.jpg', 'combo-5.jpg'),
('robotics-kit-1', 'robot-1.jpg', 'robot-2.jpg', 'robot-3.jpg', 'robot-4.jpg', 'robot-5.jpg');

-- Insert sample products
INSERT INTO `product` (`ID_Product`, `sTenSanPham`, `ID_category`, `ID_image`, `fGiaNiemYet`, `fGiaBan`, `iSoLuong`, `sMoTa`, `ID_age`, `ID_gender`) VALUES
('stem_kit_001', 'Bộ Kit STEM Cơ Bản', 'science-kit-tieu-hoc', 'combo-thi-nghiem', 500000.00, 450000.00, 50, 'Bộ kit STEM cơ bản dành cho trẻ em tiểu học', 2, 3),
('robot_kit_001', 'Bộ Kit Robotics Lego', 'robotics-tieu-hoc', 'robotics-kit-1', 800000.00, 750000.00, 30, 'Bộ kit robotics Lego dành cho trẻ em', 2, 3);

-- ========================================
-- Indexes for Performance
-- ========================================

-- Additional indexes for frequently queried fields
CREATE INDEX idx_product_category ON product(ID_category);
CREATE INDEX idx_product_price ON product(fGiaBan);
CREATE INDEX idx_product_quantity ON product(iSoLuong);
CREATE INDEX idx_product_views ON product(iLuotXem);
CREATE INDEX idx_product_sales ON product(iLuotMua);
CREATE INDEX idx_blog_status ON blog(sTrangThai);
CREATE INDEX idx_blog_create_date ON blog(dCreateAt);
CREATE INDEX idx_order_status ON _order(sTrangThai);
CREATE INDEX idx_order_date ON _order(dNgayDat);

COMMIT;

-- ========================================
-- Database Schema Documentation
-- ========================================
-- 
-- This schema represents a STEM education e-commerce platform with:
-- 
-- 1. Product Management:
--    - Products with categories, images, pricing, inventory
--    - Age groups and gender targeting
--    - Product views and sales tracking
-- 
-- 2. Content Management:
--    - Blog system with approval workflow
--    - Employee/staff management with role-based permissions
-- 
-- 3. E-commerce Features:
--    - Customer registration and management
--    - Shopping cart functionality
--    - Order processing and tracking
--    - VNPay payment integration
-- 
-- 4. User Management:
--    - Laravel default user system
--    - Custom employee system with roles
--    - Customer/member system
-- 
-- Key Features:
-- - Multi-level category system (parent/child)
-- - Image gallery support for products
-- - Inventory tracking
-- - Order status workflow
-- - Payment integration
-- - Content approval system
-- ========================================