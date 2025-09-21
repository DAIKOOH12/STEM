-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 21, 2025 at 06:16 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stem`
--

-- --------------------------------------------------------

--
-- Table structure for table `age`
--

CREATE TABLE `age` (
  `ID_age` int NOT NULL,
  `sDoTuoi` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sMoTa` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `age`
--

INSERT INTO `age` (`ID_age`, `sDoTuoi`, `sMoTa`) VALUES
(1, 'Dưới 7 tuổi', 'Trẻ em mầm non'),
(2, '7-12 tuổi', 'Trẻ em tiểu học'),
(3, '13-18 tuổi', 'Trẻ em trung học');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `ID_blog` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sTieuDe` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ID_category` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sDuongDan1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sNoiDung` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `sTomTat` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `ID_employee` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sTrangThai` enum('cho_duyet','duyet','tu_choi') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'cho_duyet',
  `dCreateAt` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `dUpdateAt` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `ID_category` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sTenChuDe` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ID_category_parent` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sMoTa` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`ID_category`, `sTenChuDe`, `ID_category_parent`, `sMoTa`) VALUES
('arduino-thpt', 'Arduino THPT', 'stem-trung-hoc-pho-thong', 'Kit Arduino nâng cao'),
('programming-thcs', 'Lập trình THCS', 'stem-trung-hoc-co-so', 'Học lập trình cơ bản'),
('robotics-tieu-hoc', 'Robotics Tiểu học', 'stem-tieu-hoc', 'Bộ kit robotics dành cho tiểu học'),
('science-kit-tieu-hoc', 'Bộ thí nghiệm khoa học tiểu học', 'stem-tieu-hoc', 'Bộ thí nghiệm khoa học cơ bản');

-- --------------------------------------------------------

--
-- Table structure for table `category_parent`
--

CREATE TABLE `category_parent` (
  `ID_category_parent` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sTenChuDeParent` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sMoTa` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_parent`
--

INSERT INTO `category_parent` (`ID_category_parent`, `sTenChuDeParent`, `sMoTa`) VALUES
('stem-tieu-hoc', 'STEM Tiểu học', 'Sản phẩm STEM dành cho học sinh tiểu học'),
('stem-trung-hoc-co-so', 'STEM Trung học cơ sở', 'Sản phẩm STEM dành cho học sinh THCS'),
('stem-trung-hoc-pho-thong', 'STEM Trung học phổ thông', 'Sản phẩm STEM dành cho học sinh THPT');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `ID_customer` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ID_member` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dNgayTao` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `sHoTen` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sSoDienThoai` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sDiaChi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sEmail` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bIsMember` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`ID_customer`, `ID_member`, `dNgayTao`, `sHoTen`, `sSoDienThoai`, `sDiaChi`, `sEmail`, `bIsMember`) VALUES
('id_cus_1', 'id_mem_1', '2025-09-21 05:17:30', 'Nguyễn A', '0398673207', 'Số 2B Cầu Giấy Hà Nội', '21a100100401@students.hou.edu.vn', 1);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `ID_employee` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sHoTen` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sDiaChi` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sEmail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sSdt` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sTaiKhoan` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sMatKhau` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ID_quyen` int NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `bIsActive` int NOT NULL,
  `bIsLogin` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`ID_employee`, `sHoTen`, `sDiaChi`, `sEmail`, `sSdt`, `sTaiKhoan`, `sMatKhau`, `ID_quyen`, `created_at`, `updated_at`, `bIsActive`, `bIsLogin`) VALUES
('id_emp_1', 'Admin User', 'Hà Nội, Việt Nam', 'admin@stem.vn', '0123456789', 'admin', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1, '2025-09-21 01:23:26', '2025-09-21 05:56:05', 0, 0),
('id_emp_2', 'Phạm Duy Trường', 'Xuân La, Tây Hồ, Hà Nội', 'abc@gmail.com', '0398673207', 'Daikooh12', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 2, '2025-09-21 06:02:53', '2025-09-21 06:02:53', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE `gender` (
  `ID_gender` int NOT NULL,
  `sGioiTinh` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sMoTa` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`ID_gender`, `sGioiTinh`, `sMoTa`) VALUES
(1, 'Nam', 'Dành cho bé trai'),
(2, 'Nữ', 'Dành cho bé gái'),
(3, 'Cả hai', 'Phù hợp cho cả nam và nữ');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `ID_image` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sDuongDan1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sDuongDan2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sDuongDan3` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sDuongDan4` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sDuongDan5` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`ID_image`, `sDuongDan1`, `sDuongDan2`, `sDuongDan3`, `sDuongDan4`, `sDuongDan5`) VALUES
('combo-thi-nghiem', 'phong-stem-lab-1.png', 'phong-stem-lab-1.png', 'phong-stem-lab-1.png', 'phong-stem-lab-1.png', 'phong-stem-lab-1.png'),
('robotics-kit-1', '2ff2e936dcd67fe7bd1db8bfc91baf22.jpg', '2ff2e936dcd67fe7bd1db8bfc91baf22.jpg', '2ff2e936dcd67fe7bd1db8bfc91baf22.jpg', '2ff2e936dcd67fe7bd1db8bfc91baf22.jpg', '2ff2e936dcd67fe7bd1db8bfc91baf22.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `ID_member` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ID_quyen` int NOT NULL,
  `sTaiKhoan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sSdt` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sDiaChi` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sMatKhau` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `isLogin` int NOT NULL,
  `sXacMinhEmail` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sEmail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`ID_member`, `ID_quyen`, `sTaiKhoan`, `sSdt`, `sDiaChi`, `sMatKhau`, `created_at`, `updated_at`, `isLogin`, `sXacMinhEmail`, `sEmail`) VALUES
('id_mem_1', 3, '21a100100401@students.hou.edu.vn', NULL, NULL, '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2025-09-21 05:17:30', '2025-09-21 05:17:30', 0, 'verified', '21a100100401@students.hou.edu.vn');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `ID_order_detail` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ID_Product` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `iSoLuong` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`ID_order_detail`, `ID_Product`, `iSoLuong`, `created_at`, `updated_at`) VALUES
('id_detail_id_cus_1', 'stem_kit_001', 1, '2025-09-21 05:34:41', '2025-09-21 05:35:03');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `vnp_TxnRef` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `vnp_Amount` decimal(15,2) NOT NULL,
  `vnp_OrderInfo` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vnp_ResponseCode` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vnp_TransactionNo` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vnp_BankCode` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vnp_PayDate` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vnp_SecureHash` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ID_order` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ID_Product` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sTenSanPham` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ID_category` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ID_image` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fGiaNiemYet` decimal(15,2) NOT NULL DEFAULT '0.00',
  `fGiaBan` decimal(15,2) NOT NULL DEFAULT '0.00',
  `iSoLuong` int NOT NULL DEFAULT '0',
  `sMoTa` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `iLuotXem` int NOT NULL DEFAULT '0',
  `iLuotMua` int NOT NULL DEFAULT '0',
  `bIsActive` tinyint(1) NOT NULL DEFAULT '1',
  `ID_age` int NOT NULL,
  `ID_gender` int NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ID_Product`, `sTenSanPham`, `ID_category`, `ID_image`, `fGiaNiemYet`, `fGiaBan`, `iSoLuong`, `sMoTa`, `iLuotXem`, `iLuotMua`, `bIsActive`, `ID_age`, `ID_gender`, `created_at`, `updated_at`) VALUES
('robot_kit_001', 'Bộ Kit Robotics Lego', 'robotics-tieu-hoc', 'robotics-kit-1', '800000.00', '750000.00', 30, 'Bộ kit robotics Lego dành cho trẻ em', 0, 0, 1, 2, 3, '2025-09-21 01:23:26', '2025-09-21 01:23:26'),
('stem_kit_001', 'Bộ Kit STEM Cơ Bản', 'science-kit-tieu-hoc', 'combo-thi-nghiem', '500000.00', '450000.00', 46, 'Bộ kit STEM cơ bản dành cho trẻ em tiểu học', 4, 0, 1, 2, 3, '2025-09-21 01:23:26', '2025-09-21 05:35:03');

-- --------------------------------------------------------

--
-- Table structure for table `quyen`
--

CREATE TABLE `quyen` (
  `ID_quyen` int NOT NULL,
  `sTenQuyen` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sMoTa` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quyen`
--

INSERT INTO `quyen` (`ID_quyen`, `sTenQuyen`, `sMoTa`) VALUES
(1, 'Admin', 'Quản trị viên hệ thống'),
(2, 'Manager', 'Quản lý'),
(3, 'Content Creator', 'Người tạo nội dung'),
(4, 'Staff', 'Nhân viên');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `_order`
--

CREATE TABLE `_order` (
  `ID_order` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ID_order_detail` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ID_customer` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dNgayDat` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `dNgayGiaoHang` timestamp NULL DEFAULT NULL,
  `sTrangThai` enum('cho_xac_nhan','da_xac_nhan','dang_giao','da_giao','da_huy') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'cho_xac_nhan'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `_order`
--

INSERT INTO `_order` (`ID_order`, `ID_order_detail`, `ID_customer`, `dNgayDat`, `dNgayGiaoHang`, `sTrangThai`) VALUES
('id_order_id_cus_1', 'id_detail_id_cus_1', 'id_cus_1', '2025-09-20 17:00:00', NULL, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `age`
--
ALTER TABLE `age`
  ADD PRIMARY KEY (`ID_age`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`ID_blog`),
  ADD KEY `fk_blog_category` (`ID_category`),
  ADD KEY `fk_blog_employee` (`ID_employee`),
  ADD KEY `idx_blog_status` (`sTrangThai`),
  ADD KEY `idx_blog_create_date` (`dCreateAt`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`ID_category`),
  ADD KEY `fk_category_parent` (`ID_category_parent`);

--
-- Indexes for table `category_parent`
--
ALTER TABLE `category_parent`
  ADD PRIMARY KEY (`ID_category_parent`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`ID_customer`),
  ADD KEY `fk_customer_member` (`ID_member`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`ID_employee`),
  ADD UNIQUE KEY `employee_email_unique` (`sEmail`),
  ADD UNIQUE KEY `employee_account_unique` (`sTaiKhoan`),
  ADD KEY `fk_employee_quyen` (`ID_quyen`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`ID_gender`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`ID_image`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`ID_member`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`ID_order_detail`,`ID_Product`),
  ADD KEY `fk_order_detail_product` (`ID_Product`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`vnp_TxnRef`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID_Product`),
  ADD KEY `fk_product_category` (`ID_category`),
  ADD KEY `fk_product_image` (`ID_image`),
  ADD KEY `fk_product_age` (`ID_age`),
  ADD KEY `fk_product_gender` (`ID_gender`),
  ADD KEY `idx_product_category` (`ID_category`),
  ADD KEY `idx_product_price` (`fGiaBan`),
  ADD KEY `idx_product_quantity` (`iSoLuong`),
  ADD KEY `idx_product_views` (`iLuotXem`),
  ADD KEY `idx_product_sales` (`iLuotMua`);

--
-- Indexes for table `quyen`
--
ALTER TABLE `quyen`
  ADD PRIMARY KEY (`ID_quyen`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `_order`
--
ALTER TABLE `_order`
  ADD PRIMARY KEY (`ID_order`),
  ADD KEY `fk_order_customer` (`ID_customer`),
  ADD KEY `fk_order_detail_ref` (`ID_order_detail`),
  ADD KEY `idx_order_status` (`sTrangThai`),
  ADD KEY `idx_order_date` (`dNgayDat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `age`
--
ALTER TABLE `age`
  MODIFY `ID_age` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gender`
--
ALTER TABLE `gender`
  MODIFY `ID_gender` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quyen`
--
ALTER TABLE `quyen`
  MODIFY `ID_quyen` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `fk_blog_category` FOREIGN KEY (`ID_category`) REFERENCES `category` (`ID_category`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_blog_employee` FOREIGN KEY (`ID_employee`) REFERENCES `employee` (`ID_employee`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `fk_category_parent` FOREIGN KEY (`ID_category_parent`) REFERENCES `category_parent` (`ID_category_parent`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `fk_customer_member` FOREIGN KEY (`ID_member`) REFERENCES `member` (`ID_member`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `fk_employee_quyen` FOREIGN KEY (`ID_quyen`) REFERENCES `quyen` (`ID_quyen`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `fk_order_detail_product` FOREIGN KEY (`ID_Product`) REFERENCES `product` (`ID_Product`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_product_age` FOREIGN KEY (`ID_age`) REFERENCES `age` (`ID_age`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_product_category` FOREIGN KEY (`ID_category`) REFERENCES `category` (`ID_category`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_product_gender` FOREIGN KEY (`ID_gender`) REFERENCES `gender` (`ID_gender`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_product_image` FOREIGN KEY (`ID_image`) REFERENCES `image` (`ID_image`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `_order`
--
ALTER TABLE `_order`
  ADD CONSTRAINT `fk_order_customer` FOREIGN KEY (`ID_customer`) REFERENCES `customer` (`ID_customer`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
