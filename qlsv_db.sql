-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 12, 2024 lúc 09:02 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlsv_db`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbldiem`
--

CREATE TABLE `tbldiem` (
  `MaSV` int(11) NOT NULL,
  `MaLopHP` int(11) NOT NULL,
  `Diem` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblgiangvien`
--

CREATE TABLE `tblgiangvien` (
  `MaGV` int(11) NOT NULL,
  `HoTen` varchar(50) NOT NULL,
  `MaKhoa` int(11) NOT NULL,
  `NamSinh` int(11) NOT NULL,
  `QueQuan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblhocphan`
--

CREATE TABLE `tblhocphan` (
  `MaHP` int(11) NOT NULL,
  `TenHP` varchar(50) NOT NULL,
  `SoTC` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblkhoa`
--

CREATE TABLE `tblkhoa` (
  `MaKhoa` int(11) NOT NULL,
  `TenKhoa` varchar(50) NOT NULL,
  `DienThoai` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tblkhoa`
--

INSERT INTO `tblkhoa` (`MaKhoa`, `TenKhoa`, `DienThoai`) VALUES
(1, 'Kĩ thuật và công nghệ', '0987654321'),
(2, 'Kinh tế', '012345678'),
(3, 'Sư phạm', '0246813579'),
(6, 'Xây dựng', '07875665');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbllophc`
--

CREATE TABLE `tbllophc` (
  `MaLopHC` int(11) NOT NULL,
  `TenLopHC` varchar(30) NOT NULL,
  `MaKhoa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbllophp`
--

CREATE TABLE `tbllophp` (
  `MaLopHP` int(11) NOT NULL,
  `TenLopHP` varchar(50) NOT NULL,
  `MaHP` int(11) NOT NULL,
  `MaGV` int(11) NOT NULL,
  `HocKy` int(11) NOT NULL,
  `NamHoc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblnguoidung`
--

CREATE TABLE `tblnguoidung` (
  `MaNguoiDung` int(11) NOT NULL,
  `TenDangNhap` varchar(30) NOT NULL,
  `MatKhau` varchar(12) NOT NULL,
  `VaiTro` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblsinhvien`
--

CREATE TABLE `tblsinhvien` (
  `MaSV` int(11) NOT NULL,
  `HoTen` varchar(50) NOT NULL,
  `NamSinh` int(11) NOT NULL,
  `QueQuan` varchar(100) NOT NULL,
  `MaLopHC` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbldiem`
--
ALTER TABLE `tbldiem`
  ADD PRIMARY KEY (`MaSV`,`MaLopHP`),
  ADD KEY `fk_lophp` (`MaLopHP`);

--
-- Chỉ mục cho bảng `tblgiangvien`
--
ALTER TABLE `tblgiangvien`
  ADD PRIMARY KEY (`MaGV`),
  ADD KEY `fk_makhoa` (`MaKhoa`);

--
-- Chỉ mục cho bảng `tblhocphan`
--
ALTER TABLE `tblhocphan`
  ADD PRIMARY KEY (`MaHP`);

--
-- Chỉ mục cho bảng `tblkhoa`
--
ALTER TABLE `tblkhoa`
  ADD PRIMARY KEY (`MaKhoa`);

--
-- Chỉ mục cho bảng `tbllophc`
--
ALTER TABLE `tbllophc`
  ADD PRIMARY KEY (`MaLopHC`),
  ADD KEY `fk_makhoa1` (`MaKhoa`);

--
-- Chỉ mục cho bảng `tbllophp`
--
ALTER TABLE `tbllophp`
  ADD PRIMARY KEY (`MaLopHP`),
  ADD KEY `fk_magv` (`MaGV`),
  ADD KEY `fk_mahp` (`MaHP`);

--
-- Chỉ mục cho bảng `tblnguoidung`
--
ALTER TABLE `tblnguoidung`
  ADD PRIMARY KEY (`MaNguoiDung`);

--
-- Chỉ mục cho bảng `tblsinhvien`
--
ALTER TABLE `tblsinhvien`
  ADD PRIMARY KEY (`MaSV`),
  ADD KEY `fk_malophc` (`MaLopHC`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tblgiangvien`
--
ALTER TABLE `tblgiangvien`
  MODIFY `MaGV` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tblhocphan`
--
ALTER TABLE `tblhocphan`
  MODIFY `MaHP` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tblkhoa`
--
ALTER TABLE `tblkhoa`
  MODIFY `MaKhoa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tbllophc`
--
ALTER TABLE `tbllophc`
  MODIFY `MaLopHC` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbllophp`
--
ALTER TABLE `tbllophp`
  MODIFY `MaLopHP` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tblnguoidung`
--
ALTER TABLE `tblnguoidung`
  MODIFY `MaNguoiDung` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tblsinhvien`
--
ALTER TABLE `tblsinhvien`
  MODIFY `MaSV` int(11) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbldiem`
--
ALTER TABLE `tbldiem`
  ADD CONSTRAINT `fk_lophp` FOREIGN KEY (`MaLopHP`) REFERENCES `tbllophp` (`MaLopHP`),
  ADD CONSTRAINT `fk_masv` FOREIGN KEY (`MaSV`) REFERENCES `tblsinhvien` (`MaSV`);

--
-- Các ràng buộc cho bảng `tblgiangvien`
--
ALTER TABLE `tblgiangvien`
  ADD CONSTRAINT `fk_makhoa` FOREIGN KEY (`MaKhoa`) REFERENCES `tblkhoa` (`MaKhoa`);

--
-- Các ràng buộc cho bảng `tbllophc`
--
ALTER TABLE `tbllophc`
  ADD CONSTRAINT `fk_makhoa1` FOREIGN KEY (`MaKhoa`) REFERENCES `tblkhoa` (`MaKhoa`);

--
-- Các ràng buộc cho bảng `tbllophp`
--
ALTER TABLE `tbllophp`
  ADD CONSTRAINT `fk_magv` FOREIGN KEY (`MaGV`) REFERENCES `tblgiangvien` (`MaGV`),
  ADD CONSTRAINT `fk_mahp` FOREIGN KEY (`MaHP`) REFERENCES `tblhocphan` (`MaHP`);

--
-- Các ràng buộc cho bảng `tblsinhvien`
--
ALTER TABLE `tblsinhvien`
  ADD CONSTRAINT `fk_malophc` FOREIGN KEY (`MaLopHC`) REFERENCES `tbllophc` (`MaLopHC`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
