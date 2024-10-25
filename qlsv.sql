-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 25, 2024 lúc 03:18 AM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlsv`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbldiem`
--

CREATE TABLE `tbldiem` (
  `id` int(11) NOT NULL,
  `id_SinhVien` int(11) DEFAULT NULL,
  `id_HocPhan` int(11) DEFAULT NULL,
  `DiemCC` float NOT NULL,
  `DiemGK` float NOT NULL,
  `DiemCK` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblgiangvien`
--

CREATE TABLE `tblgiangvien` (
  `id` int(11) NOT NULL,
  `TenGV` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MaGV` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_Khoa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tblgiangvien`
--

INSERT INTO `tblgiangvien` (`id`, `TenGV`, `MaGV`, `id_Khoa`) VALUES
(6, 'Lưu Bị', '123486924', 1),
(7, 'Lê Dương Bảo lâm', '127845789', 1),
(8, 'Trần Anh Lâm', 'TAL-018319', 1),
(9, 'Mã Văn Tài', 'MVT-923841', 34),
(10, 'Lê Minh Hùng', 'LMH-983491', 31),
(11, 'Nguyễn Công Phượng', 'NCP-981739', 8),
(12, 'Sông Giông Kì', 'SJK-916349', 2),
(13, 'Lê Sô Huyền', 'LSH-1957619', 10),
(14, 'Lê Minh Hồ', 'LMH-19834719', 9),
(15, 'Lữ Hàn Anh', 'LHA-9836548', 10);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblhocphan`
--

CREATE TABLE `tblhocphan` (
  `id` int(11) NOT NULL,
  `TenHP` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MaHP` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SoTC` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tblhocphan`
--

INSERT INTO `tblhocphan` (`id`, `TenHP`, `MaHP`, `SoTC`) VALUES
(1, 'Xử lý tín hiệu số', 'XLTHS-00331', 3),
(2, 'Pháp luật đại cương', 'PLDC-000467', 2),
(3, 'Toán rời rạc', 'TRR-00448', 3),
(4, 'Cấu trúc dữ liệu và giải thuật', 'CTDL&GT-00559', 4),
(5, 'Toán xác suất', 'TXS-00777', 3),
(6, 'vật lý đại cương', 'VLDC-00123', 4),
(43, 'Tiếng Anh 1', 'TA-00001', 3),
(44, 'Tiếng Anh 2', 'TA-00002', 3),
(46, 'Tiếng Anh 3', 'TA-00003', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblkhoa`
--

CREATE TABLE `tblkhoa` (
  `id` int(11) NOT NULL,
  `TenKhoa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MaKhoa` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tblkhoa`
--

INSERT INTO `tblkhoa` (`id`, `TenKhoa`, `MaKhoa`) VALUES
(1, 'Công nghệ thông tin', 'CNNT-2024'),
(2, 'Báo chí', 'BC&TT-0013'),
(8, 'Kinh tế', 'KT-0999'),
(9, 'Thể dục thể thao', 'TDTT-0078'),
(10, 'Kĩ thuật phần mềm', 'KTPM-2298'),
(31, 'Ngôn Ngữ Anh', 'NNA-9148'),
(34, 'Sư Phạm Toán', 'SPT-4981');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbllophp`
--

CREATE TABLE `tbllophp` (
  `id` int(11) NOT NULL,
  `TenLop` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MaLop` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_HocPhan` int(11) DEFAULT NULL,
  `id_GiangVien` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbllophp`
--

INSERT INTO `tbllophp` (`id`, `TenLop`, `MaLop`, `id_HocPhan`, `id_GiangVien`) VALUES
(17, 'LT-02(Chiều T3 - Tiết 6789)', 'LT02CT3T6789', 4, 7),
(18, 'LT-01(Sáng T2 - Tiết 123)', 'LT01ST2T123', 43, 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblsinhvien`
--

CREATE TABLE `tblsinhvien` (
  `id` int(11) NOT NULL,
  `TenSV` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MaSV` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NgaySinh` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tblsinhvien`
--

INSERT INTO `tblsinhvien` (`id`, `TenSV`, `MaSV`, `NgaySinh`) VALUES
(2, 'Quan Vũ', '215748020110789', '2003-01-14'),
(3, 'Sơn Tùng', '215748020110992', '1999-04-03'),
(4, 'Trịnh Trần Phương Tuấn', '215748020103197', '1997-04-12');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblsinhvien_lophp`
--

CREATE TABLE `tblsinhvien_lophp` (
  `id` int(11) NOT NULL,
  `id_SinhVien` int(11) DEFAULT NULL,
  `id_LopHP` int(11) DEFAULT NULL,
  `id_HocPhan` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbldiem`
--
ALTER TABLE `tbldiem`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_SinhVien` (`id_SinhVien`),
  ADD KEY `id_HocPhan` (`id_HocPhan`);

--
-- Chỉ mục cho bảng `tblgiangvien`
--
ALTER TABLE `tblgiangvien`
  ADD PRIMARY KEY (`id`),
  ADD KEY `MaGV` (`MaGV`) USING BTREE,
  ADD KEY `fk_id_Khoa` (`id_Khoa`);

--
-- Chỉ mục cho bảng `tblhocphan`
--
ALTER TABLE `tblhocphan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `MaHP` (`MaHP`);

--
-- Chỉ mục cho bảng `tblkhoa`
--
ALTER TABLE `tblkhoa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `MaKhoa` (`MaKhoa`);

--
-- Chỉ mục cho bảng `tbllophp`
--
ALTER TABLE `tbllophp`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `MaLop` (`MaLop`),
  ADD KEY `fk_id_GiangVien` (`id_GiangVien`),
  ADD KEY `fk_id_HocPhan` (`id_HocPhan`);

--
-- Chỉ mục cho bảng `tblsinhvien`
--
ALTER TABLE `tblsinhvien`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `MaSV` (`MaSV`);

--
-- Chỉ mục cho bảng `tblsinhvien_lophp`
--
ALTER TABLE `tblsinhvien_lophp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_SinhVien` (`id_SinhVien`),
  ADD KEY `id_LopHP` (`id_LopHP`),
  ADD KEY `tblsinhvien_lophp_ibfk_3` (`id_HocPhan`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbldiem`
--
ALTER TABLE `tbldiem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tblgiangvien`
--
ALTER TABLE `tblgiangvien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `tblhocphan`
--
ALTER TABLE `tblhocphan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT cho bảng `tblkhoa`
--
ALTER TABLE `tblkhoa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT cho bảng `tbllophp`
--
ALTER TABLE `tbllophp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `tblsinhvien`
--
ALTER TABLE `tblsinhvien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `tblsinhvien_lophp`
--
ALTER TABLE `tblsinhvien_lophp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbldiem`
--
ALTER TABLE `tbldiem`
  ADD CONSTRAINT `tbldiem_ibfk_1` FOREIGN KEY (`id_SinhVien`) REFERENCES `tblsinhvien` (`id`),
  ADD CONSTRAINT `tbldiem_ibfk_2` FOREIGN KEY (`id_HocPhan`) REFERENCES `tblhocphan` (`id`);

--
-- Các ràng buộc cho bảng `tblgiangvien`
--
ALTER TABLE `tblgiangvien`
  ADD CONSTRAINT `fk_id_Khoa` FOREIGN KEY (`id_Khoa`) REFERENCES `tblkhoa` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tbllophp`
--
ALTER TABLE `tbllophp`
  ADD CONSTRAINT `fk_id_GiangVien` FOREIGN KEY (`id_GiangVien`) REFERENCES `tblgiangvien` (`id`),
  ADD CONSTRAINT `fk_id_HocPhan` FOREIGN KEY (`id_HocPhan`) REFERENCES `tblhocphan` (`id`),
  ADD CONSTRAINT `tbllophp_ibfk_1` FOREIGN KEY (`id_HocPhan`) REFERENCES `tblhocphan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tblsinhvien_lophp`
--
ALTER TABLE `tblsinhvien_lophp`
  ADD CONSTRAINT `tblsinhvien_lophp_ibfk_1` FOREIGN KEY (`id_SinhVien`) REFERENCES `tblsinhvien` (`id`),
  ADD CONSTRAINT `tblsinhvien_lophp_ibfk_2` FOREIGN KEY (`id_LopHP`) REFERENCES `tbllophp` (`id`),
  ADD CONSTRAINT `tblsinhvien_lophp_ibfk_3` FOREIGN KEY (`id_HocPhan`) REFERENCES `tblhocphan` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
