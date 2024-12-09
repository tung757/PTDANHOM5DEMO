-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 09, 2024 lúc 05:25 PM
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
-- Cơ sở dữ liệu: `quanlydoan`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `doan`
--

CREATE TABLE `doan` (
  `maDoAn` int(11) NOT NULL,
  `tenDoAn` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `tenDeTai` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `ngayBatDau` date DEFAULT NULL,
  `pathFile` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `iD` int(11) DEFAULT NULL,
  `trangThai` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `doan`
--

INSERT INTO `doan` (`maDoAn`, `tenDoAn`, `tenDeTai`, `ngayBatDau`, `pathFile`, `iD`, `trangThai`) VALUES
(343, 'totnghiep', 'dsdsd', '2024-12-19', 'sđsd', 45445, 1),
(373, 'abcde', 'abcde', '2024-12-21', 'sdsd', 323, 1),
(37343, 's', 's', '2024-12-21', 'sdsd', 323, 1),
(353535, 'êre', 'rể', '2024-12-08', 'êrere', 45445, 1),
(353536, 'dsd', 'sds', '2024-12-03', 'dsd', 323, 1),
(353540, 'dskjdsdsf', 'sfsgdgsgsgs', '2024-11-26', NULL, 323, 1),
(353541, 'dssfsdf', 'fsfsfs', '2024-12-05', NULL, 323, 1),
(353542, 'fsfs', 'sfsf', '2024-11-28', NULL, 45445, 1),
(353543, 'sfsf', 'sfsfs', '2024-11-25', NULL, 323, 1),
(353544, 'dsds', 'sdsdsđ', '2024-11-27', NULL, 323, 1),
(353545, 'dsd', 'dsdsdsđsdfsfs', '2024-12-12', NULL, 323, 1),
(353546, '1232', '2323', '2024-12-21', NULL, 323, 1),
(353547, '3', '4', '2024-11-27', NULL, 323, 1),
(353548, '6', '6', '2024-12-07', NULL, 323, 0),
(353549, '2', '8', '2024-12-15', NULL, 323, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giangvien`
--

CREATE TABLE `giangvien` (
  `iD` int(11) NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `username` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `fullName` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `khoa` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `sDt` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `gender` varchar(5) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `address` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `giangvien`
--

INSERT INTO `giangvien` (`iD`, `email`, `username`, `password`, `fullName`, `khoa`, `sDt`, `gender`, `address`) VALUES
(323, '2424', '424', '424', 'Nguyen Thi Hoa Hue', 'CNTT', '03843535', 'Nu', 'sfsfs'),
(45445, 'giangvien@gmail.com', 'giangvien', '123', 'sfsfs', 'CNTT', '03843535', 'Nam', 'dichithaibf');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kehoach`
--

CREATE TABLE `kehoach` (
  `idCV` int(11) NOT NULL,
  `tenCV` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `maDoAn` int(11) DEFAULT NULL,
  `UsID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tiendo`
--

CREATE TABLE `tiendo` (
  `iDTienDo` int(11) NOT NULL,
  `dateTH` date NOT NULL,
  `note` text DEFAULT NULL,
  `evaluation` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `DoAnmaDoAn` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tiendo`
--

INSERT INTO `tiendo` (`iDTienDo`, `dateTH`, `note`, `evaluation`, `DoAnmaDoAn`) VALUES
(34464, '2024-12-01', 'sdsfwssgg', 'sfjggjg', 343);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `iD` int(11) NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `username` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `fullName` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `khoa` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `class` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `sttKhoa` int(11) DEFAULT NULL,
  `sDt` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `gender` varchar(5) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `address` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `maDoAn` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`iD`, `email`, `username`, `password`, `fullName`, `khoa`, `class`, `sttKhoa`, `sDt`, `gender`, `address`, `maDoAn`) VALUES
(4343, 'rêrer', 'rẻ', 'êr', 'fsfs', 'CNTT', 'CNTT02', 17, '03843535', 'Nam', 'sfsfsf', 343),
(7349, '', 'ewew', '4', 'ưlejwewewewew', NULL, NULL, NULL, '34343', 'Nam', 'ewewe', NULL),
(7352, '', 'sdsdsd', 'er', 'sdsds', NULL, NULL, NULL, 'fsf', 'Nu', 'dsdsd', NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `doan`
--
ALTER TABLE `doan`
  ADD PRIMARY KEY (`maDoAn`),
  ADD KEY `iD` (`iD`);

--
-- Chỉ mục cho bảng `giangvien`
--
ALTER TABLE `giangvien`
  ADD PRIMARY KEY (`iD`);

--
-- Chỉ mục cho bảng `kehoach`
--
ALTER TABLE `kehoach`
  ADD PRIMARY KEY (`idCV`),
  ADD KEY `maDoAn` (`maDoAn`),
  ADD KEY `UsID` (`UsID`);

--
-- Chỉ mục cho bảng `tiendo`
--
ALTER TABLE `tiendo`
  ADD PRIMARY KEY (`iDTienDo`),
  ADD KEY `DoAnmaDoAn` (`DoAnmaDoAn`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iD`),
  ADD KEY `maDoAn` (`maDoAn`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `doan`
--
ALTER TABLE `doan`
  MODIFY `maDoAn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=353550;

--
-- AUTO_INCREMENT cho bảng `giangvien`
--
ALTER TABLE `giangvien`
  MODIFY `iD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45446;

--
-- AUTO_INCREMENT cho bảng `kehoach`
--
ALTER TABLE `kehoach`
  MODIFY `idCV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68679;

--
-- AUTO_INCREMENT cho bảng `tiendo`
--
ALTER TABLE `tiendo`
  MODIFY `iDTienDo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34465;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `iD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7353;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `doan`
--
ALTER TABLE `doan`
  ADD CONSTRAINT `doan_ibfk_1` FOREIGN KEY (`iD`) REFERENCES `giangvien` (`iD`) ON DELETE SET NULL;

--
-- Các ràng buộc cho bảng `kehoach`
--
ALTER TABLE `kehoach`
  ADD CONSTRAINT `kehoach_ibfk_1` FOREIGN KEY (`maDoAn`) REFERENCES `doan` (`maDoAn`) ON DELETE CASCADE,
  ADD CONSTRAINT `kehoach_ibfk_2` FOREIGN KEY (`UsID`) REFERENCES `user` (`iD`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `tiendo`
--
ALTER TABLE `tiendo`
  ADD CONSTRAINT `tiendo_ibfk_1` FOREIGN KEY (`DoAnmaDoAn`) REFERENCES `doan` (`maDoAn`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`maDoAn`) REFERENCES `doan` (`maDoAn`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
