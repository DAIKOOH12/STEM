-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 23, 2025 at 10:21 AM
-- Server version: 8.4.3
-- PHP Version: 8.3.16

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
('gio-hoa-sinh-nhat', 'Giỏ hoa tặng sinh nhật', 'hoa-sinh-nhat', NULL),
('hoa-20/10', 'Hoa chúc mừng 20/10', 'chu-de', NULL),
('hoa-8/3', 'Hoa chúc mừng 8/3', 'chu-de', NULL),
('hoa-baby', 'Hoa baby', 'hoa-tuoi', NULL),
('hoa-cam-tay', 'Hoa cưới cầm tay', 'chu-de', NULL),
('hoa-chuc-mung', 'Hoa chúc mừng', 'chu-de', NULL),
('Hoa-cuc-tana', 'Hoa cúc tana', 'hoa-tuoi', NULL),
('hoa-dong-tien', 'Hoa đồng tiền', 'hoa-tuoi', NULL),
('hoa-hong', 'Hoa hồng', 'hoa-tuoi', NULL),
('hoa-hong-sinh-nhat', 'Hoa hồng tặng sinh nhật', 'hoa-sinh-nhat', NULL),
('hoa-huong-duong', 'Hoa hướng dương', 'hoa-tuoi', NULL),
('hoa-khai-truong-de-ban', 'Hoa khai trương để bàn', 'hoa-khai-truong', NULL),
('hoa-khai-truong-gia-re', 'Kệ hoa khai trương giá rẻ', 'hoa-khai-truong', NULL),
('hoa-ki-niem-cuoi', 'Hoa kỉ niệm cưới', 'chu-de', NULL),
('hoa-lhd', 'Hoa lan hồ điệp', 'hoa-tuoi', NULL),
('hoa-mau-don', 'Hoa mẫu đơn', 'hoa-tuoi', NULL),
('hoa-sinh-nhat-ban', 'Hoa sinh nhật tặng bạn', 'hoa-sinh-nhat', NULL),
('hoa-sinh-nhat-gia-re', 'Hoa sinh nhật giá rẻ', 'hoa-sinh-nhat', NULL),
('hoa-sinh-nhat-me', 'Hoa sinh nhật tặng mẹ', 'hoa-sinh-nhat', NULL),
('hoa-sinh-nhat-nguoi-yeu', 'Hoa sinh nhật tặng người yêu', 'hoa-sinh-nhat', NULL),
('hoa-sinh-nhat-trang-trong', 'Hoa sinh nhật trang trọng', 'hoa-sinh-nhat', NULL),
('hoa-tang-le', 'Hoa tang lễ', 'chu-de', NULL),
('Hoa-thach-thao', 'Hoa thạch thảo', 'hoa-tuoi', NULL),
('hoa-tinh-yeu', 'Hoa tình yêu', 'chu-de', NULL),
('hoa-tot-nghiệp', 'Hoa tốt nghiệp', 'chu-de', NULL),
('hoa-tulip', 'Hoa tulip', 'hoa-tuoi', NULL),
('hoa-valentine', 'Hoa valentine', 'chu-de', NULL),
('ke-hoa-khai-truong', 'Kệ hoa khai trương', 'hoa-khai-truong', NULL),
('ke-khai-truong-hien-dai', 'Kệ hoa khai trương hiện đại', 'hoa-khai-truong', NULL),
('lan-3-canh', 'Lan hồ điệp 3 cành', 'lan-ho-diep', NULL),
('lan-5-canh', 'Lan hồ điệp 5 cành', 'lan-ho-diep', NULL),
('lan-mini', 'Lan hồ điệp mini', 'lan-ho-diep', NULL),
('lan-tim', 'Lan hồ điệp tím', 'lan-ho-diep', NULL),
('lan-trang', 'Lan hồ điệp trắng', 'lan-ho-diep', NULL),
('lan-vang', 'Lan hồ điệp vàng', 'lan-ho-diep', NULL),
('lang-sinh-nhat', 'Lãng hoa tặng sinh nhật', 'hoa-sinh-nhat', NULL);

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
('chu-de', 'Chủ đề', NULL),
('hoa-khai-truong', 'Hoa khai trương', NULL),
('hoa-sinh-nhat', 'Hoa sinh nhật', NULL),
('hoa-tuoi', 'Hoa tươi', NULL),
('lan-ho-diep', 'Lan hồ điệp', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `ID_customer` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ID_member` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dNgayTao` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `sHoTen` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sSoDienThoai` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sDiaChi` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sEmail` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `bIsMember` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
('admin', 'admin', '1', '', NULL, 'admin', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1, '2025-09-23 10:07:11', '2025-09-23 10:07:11', 1, 0);

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
('hoa-1', 'anh1.jpg', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `ID_member` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ID_quyen` int NOT NULL,
  `sTaiKhoan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sSdt` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sDiaChi` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sMatKhau` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `isLogin` int NOT NULL,
  `sXacMinhEmail` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sEmail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ID_Product`, `sTenSanPham`, `ID_category`, `ID_image`, `fGiaNiemYet`, `fGiaBan`, `iSoLuong`, `sMoTa`, `iLuotXem`, `iLuotMua`, `bIsActive`, `created_at`, `updated_at`) VALUES
('baby-01', 'Bó Hoa Baby Trắng Tinh Khôi', 'hoa-baby', 'hoa-1', 550000.00, 490000.00, 50, 'Một bó hoa baby trắng lớn, tượng trưng cho sự thuần khiết và tình yêu vĩnh cửu.', 0, 0, 1, '2025-09-23 10:19:22', '2025-09-23 10:19:22'),
('baby-02', 'Bó Hoa Baby Hồng Dịu Dàng', 'hoa-baby', 'hoa-1', 600000.00, 540000.00, 45, 'Sắc hồng nhẹ nhàng của hoa baby mang đến cảm giác ngọt ngào và lãng mạn.', 0, 0, 1, '2025-09-23 10:19:22', '2025-09-23 10:19:22'),
('baby-03', 'Bó Hoa Baby Tím Mộng Mơ', 'hoa-baby', 'hoa-1', 620000.00, 560000.00, 40, 'Bó hoa baby tím, thể hiện sự thủy chung và một tình yêu đầy mộng mơ.', 0, 0, 1, '2025-09-23 10:19:22', '2025-09-23 10:19:22'),
('baby-04', 'Bó Hoa Baby Mix Cầu Vồng', 'hoa-baby', 'hoa-1', 750000.00, 680000.00, 35, 'Sự kết hợp nhiều màu sắc của hoa baby, tạo nên một bó hoa vui tươi và đầy sức sống.', 0, 0, 1, '2025-09-23 10:19:22', '2025-09-23 10:19:22'),
('baby-05', 'Bó Hoa Baby và Hồng Đỏ', 'hoa-baby', 'hoa-1', 850000.00, 780000.00, 30, 'Sự kết hợp kinh điển giữa hoa baby trắng và hoa hồng đỏ, một biểu tượng của tình yêu nồng cháy và thuần khiết.', 0, 0, 1, '2025-09-23 10:19:22', '2025-09-23 10:19:22'),
('bo-hoa-1464', 'Bó hoa Sunny', 'hoa-sinh-nhat-trang-trong', 'hoa-1', 290000.00, 250000.00, 30, 'Bó Hoa Sunny được thiết kế từ\r\n\r\nHoa hướng dương: 3 cành\r\nCác loại hoa lá phụ: Sao tím', 0, 0, 1, '2025-09-23 03:10:05', '2025-09-23 03:10:05'),
('bo-hoa-7338', 'Bó hoa may mắn', 'lang-sinh-nhat', 'hoa-1', 590000.00, 560000.00, 25, 'Giỏ hoa chúc mừng may mắn được thiết kế với hoa hướng dương và cát tường mang đến sự may mắn, tài lộc phù hợp để làm quà tặng bạn bè nhân dịp khai trương. Nếu bạn đang tìm kiếm một mẫu giỏ hoa khai trương giá rẻ thì May Mắn là sự lựa chọn hoàn hảo.\r\n\r\nGiỏ hoa chúc mừng May Mắn được thiết kế từ:\r\n\r\nHoa hướng dương: 3 cành\r\nHoa cát tường trắng: 5 cành\r\nHoa cẩm chướng trắng: 10 cành\r\nCác loại hoa lá phụ: Hoa thạch thảo trắng, lá bạc nhí', 0, 0, 1, '2025-09-23 03:11:08', '2025-09-23 03:11:08'),
('bo-hoa-say-anh-mat', 'Say Ánh Mắt', 'hoa-sinh-nhat-trang-trong', 'hoa-1', 190000.00, 165000.00, 20, 'Bó hoa Say Ánh Mắt được thiết kế từ:\r\n\r\nHoa thạch thảo trắng: 1 bó\r\nHoa hồng kem: 1 cành\r\nCác loại hoa lá phụ trang trí khác: Cỏ đồng tiền\r\nLưu ý:\r\n\r\n**Do được làm thủ công, nên sản phẩm ngoài thực tế sẽ có đôi chút khác biệt so với hình ảnh trên website. Tuy nhiên, Flowercorner cam kết hoa sẽ giống khoảng 80% so với hình ảnh.\r\n\r\n** Vì các loại hoa lá phụ sẽ có tùy vào thời điểm trong năm, Flowercorner đảm bảo các loại hoa chính, các loại hoa lá phụ sẽ thay đổi phù hợp giá cả và thiết kế sản phẩm.', 0, 0, 1, '2025-09-23 03:05:45', '2025-09-23 03:05:45'),
('ghsn-01', 'Giỏ Hoa Tươi Sáng', 'gio-hoa-sinh-nhat', 'hoa-1', 850000.00, 790000.00, 20, 'Giỏ hoa hồng kết hợp với cẩm chướng và baby, mang lại vẻ đẹp tươi sáng và rạng rỡ, là món quà tuyệt vời cho ngày sinh nhật.', 0, 0, 1, '2025-09-23 10:18:31', '2025-09-23 10:18:31'),
('ghsn-02', 'Giỏ Hoa Yêu Thương', 'gio-hoa-sinh-nhat', 'hoa-1', 950000.00, 900000.00, 15, 'Giỏ hoa mẫu đơn hồng và hoa hồng trắng, biểu tượng của tình yêu thương và sự trân trọng.', 0, 0, 1, '2025-09-23 10:18:31', '2025-09-23 10:18:31'),
('ghsn-03', 'Giỏ Hoa Rực Rỡ', 'gio-hoa-sinh-nhat', 'hoa-1', 1200000.00, 1100000.00, 10, 'Sự kết hợp của hoa hướng dương, hoa hồng vàng và cúc tana tạo nên một giỏ hoa đầy sức sống và rực rỡ.', 0, 0, 1, '2025-09-23 10:18:31', '2025-09-23 10:18:31'),
('ghsn-04', 'Giỏ Hoa Ngọt Ngào', 'gio-hoa-sinh-nhat', 'hoa-1', 750000.00, 690000.00, 25, 'Giỏ hoa baby trắng tinh khôi kết hợp cùng hoa thạch thảo tím mộng mơ, mang đến cảm giác ngọt ngào và lãng mạn.', 0, 0, 1, '2025-09-23 10:18:31', '2025-09-23 10:18:31'),
('ghsn-05', 'Giỏ Hoa Thanh Lịch', 'gio-hoa-sinh-nhat', 'hoa-1', 1500000.00, 1450000.00, 8, 'Giỏ hoa lan hồ điệp trắng sang trọng và quý phái, là món quà sinh nhật đẳng cấp.', 0, 0, 1, '2025-09-23 10:18:31', '2025-09-23 10:18:31'),
('hh-01', 'Bó Hoa Hồng Đỏ Nồng Nàn', 'hoa-hong', 'hoa-1', 650000.00, 590000.00, 30, 'Bó hoa gồm 19 bông hồng đỏ Ecuador nhập khẩu, biểu tượng cho tình yêu say đắm và nồng nàn.', 0, 0, 1, '2025-09-23 10:19:02', '2025-09-23 10:19:02'),
('hh-02', 'Bó Hoa Hồng Kem Dịu Dàng', 'hoa-hong', 'hoa-1', 550000.00, 490000.00, 40, 'Bó hoa hồng kem nhẹ nhàng, tinh tế, thích hợp để tặng bạn bè, người thân trong những dịp đặc biệt.', 0, 0, 1, '2025-09-23 10:19:02', '2025-09-23 10:19:02'),
('hh-03', 'Bó Hoa Hồng Tím Thủy Chung', 'hoa-hong', 'hoa-1', 700000.00, 650000.00, 25, 'Sắc tím mộng mơ của hoa hồng tím mang thông điệp về một tình yêu vĩnh cửu và lòng thủy chung son sắt.', 0, 0, 1, '2025-09-23 10:19:02', '2025-09-23 10:19:02'),
('hh-04', 'Bó Hoa Hồng Mix Sắc Màu', 'hoa-hong', 'hoa-1', 800000.00, 720000.00, 22, 'Bó hoa kết hợp nhiều màu sắc của hoa hồng như đỏ, vàng, hồng, cam, tạo nên một tổng thể vui tươi và sống động.', 0, 0, 1, '2025-09-23 10:19:02', '2025-09-23 10:19:02'),
('hh-05', 'Bó Hoa Hồng Juliet Quý Phái', 'hoa-hong', 'hoa-1', 1300000.00, 1200000.00, 15, 'Hồng Juliet, nữ hoàng của các loài hoa hồng, mang vẻ đẹp kiêu sa, quý phái và vô cùng cuốn hút.', 0, 0, 1, '2025-09-23 10:19:02', '2025-09-23 10:19:02'),
('hty-01', 'Bó Hoa Chuyện Tình Yêu', 'hoa-tinh-yeu', 'hoa-1', 990000.00, 900000.00, 19, 'Bó hoa baby trắng khổng lồ, tượng trưng cho một tình yêu trong sáng, thuần khiết và vĩnh cửu.', 0, 0, 1, '2025-09-23 10:19:11', '2025-09-23 10:19:11'),
('hty-02', 'Bó Hoa Ngọt Ngào Bên Em', 'hoa-tinh-yeu', 'hoa-1', 780000.00, 720000.00, 28, 'Sự kết hợp giữa hoa hồng dâu và cúc tana, mang đến vẻ đẹp ngọt ngào, đáng yêu như chính người bạn yêu.', 0, 0, 1, '2025-09-23 10:19:11', '2025-09-23 10:19:11'),
('hty-03', 'Bó Hoa Tulip Lời Tỏ Tình', 'hoa-tinh-yeu', 'hoa-1', 1100000.00, 990000.00, 17, 'Bó hoa tulip hồng là lời tỏ tình hoàn hảo, thể hiện sự quan tâm và tình yêu chân thành.', 0, 0, 1, '2025-09-23 10:19:11', '2025-09-23 10:19:11'),
('hty-04', 'Bó Hoa Mãi Mãi Một Tình Yêu', 'hoa-tinh-yeu', 'hoa-1', 1500000.00, 1390000.00, 11, 'Bó hoa 99 bông hồng đỏ thắm, thay cho lời hứa về một tình yêu vĩnh cửu, không bao giờ phai nhạt.', 0, 0, 1, '2025-09-23 10:19:11', '2025-09-23 10:19:11'),
('hty-05', 'Bó Hoa Hướng Dương Tình Yêu Tỏa Nắng', 'hoa-tinh-yeu', 'hoa-1', 500000.00, 450000.00, 35, 'Hoa hướng dương luôn hướng về phía mặt trời, cũng như tình yêu của anh luôn hướng về phía em.', 0, 0, 1, '2025-09-23 10:19:11', '2025-09-23 10:19:11'),
('khkt-01', 'Kệ Hoa Phát Tài Phát Lộc', 'ke-hoa-khai-truong', 'hoa-1', 1800000.00, 1690000.00, 12, 'Kệ hoa khai trương với tông màu đỏ và vàng chủ đạo từ hoa đồng tiền và hoa hướng dương, mang ý nghĩa may mắn, phát tài phát lộc.', 0, 0, 1, '2025-09-23 10:18:46', '2025-09-23 10:18:46'),
('khkt-02', 'Kệ Hoa Vạn Sự Như Ý', 'ke-hoa-khai-truong', 'hoa-1', 2200000.00, 2000000.00, 10, 'Kệ hoa kết hợp lan hồ điệp, hoa hồng môn đỏ và hoa ly vàng, tượng trưng cho sự thành công và vạn sự như ý.', 0, 0, 1, '2025-09-23 10:18:46', '2025-09-23 10:18:46'),
('khkt-03', 'Kệ Hoa Khai Trương Hồng Phát', 'ke-hoa-khai-truong', 'hoa-1', 1500000.00, 1350000.00, 18, 'Kệ hoa được thiết kế hiện đại với hoa hồng đỏ, cẩm tú cầu xanh và các loại lá phụ, mang lại thông điệp về sự phát triển và thịnh vượng.', 0, 0, 1, '2025-09-23 10:18:46', '2025-09-23 10:18:46'),
('khkt-04', 'Kệ Hoa Thành Công Vươn Xa', 'ke-hoa-khai-truong', 'hoa-1', 2800000.00, 2600000.00, 7, 'Kệ hoa 2 tầng hoành tráng với hoa lan vũ nữ, hoa thiên điểu, thể hiện ý chí vươn lên và bay cao, bay xa.', 0, 0, 1, '2025-09-23 10:18:46', '2025-09-23 10:18:46'),
('khkt-05', 'Kệ Hoa Tấn Tài Tấn Lộc', 'ke-hoa-khai-truong', 'hoa-1', 1900000.00, 1750000.00, 14, 'Sự kết hợp giữa hoa cúc mẫu đơn xanh và hoa hồng vàng, mang lại may mắn về tiền tài và lộc lá cho gia chủ.', 0, 0, 1, '2025-09-23 10:18:46', '2025-09-23 10:18:46');

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
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

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
  ADD CONSTRAINT `fk_product_category` FOREIGN KEY (`ID_category`) REFERENCES `category` (`ID_category`) ON DELETE CASCADE ON UPDATE CASCADE,
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
