-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 13, 2018 lúc 01:31 PM
-- Phiên bản máy phục vụ: 10.1.36-MariaDB
-- Phiên bản PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quan_ly_web_nhac`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baihat`
--

CREATE TABLE `baihat` (
  `mabh` int(11) NOT NULL,
  `tenbh` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `tencs` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tenns` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `quocgia` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `theloai` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `moi` int(1) NOT NULL DEFAULT '0',
  `haynhat` int(1) NOT NULL,
  `topten` int(2) NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `baihat`
--

INSERT INTO `baihat` (`mabh`, `tenbh`, `tencs`, `tenns`, `quocgia`, `theloai`, `moi`, `haynhat`, `topten`, `img`, `url`) VALUES
(1, 'Faded', 'Alan Walker', 'Alan Walker', 'Âu Mỹ', 'balad', 1, 2, 1, 'image/faded.jpg', 'mp3/Faded - Alan Walker.mp3'),
(2, 'Look What You made Me Do', 'Taylort Swift', 'Taylort Swift', 'Thế Giới', 'pop', 0, 0, 2, 'image/lwymmd.jpg', 'mp3/Look What You Made Me Do.mp3'),
(3, 'BangBang', 'Jessie J, Ariana Grande, Nicki Minaj', 'Jessie J', 'Thế Giới', 'pop', 1, 0, 0, 'image/bangbang.jpg', 'mp3/BangBang.mp3'),
(4, 'Cant Be Tamed', 'Miley Cyrus', 'Antonina Armato, Tim James,  John Shanks', 'Thế Giới', 'rock', 0, 0, 3, 'image/cantbetamed.jpg', 'mp3/CantBeTamed.mp3'),
(5, 'Chandelier', 'Sia', 'Sia', 'Thế Giới', 'balad', 0, 1, 0, 'image/chandelier.jpg', 'mp3/Chandelier.mp3'),
(6, 'Chạy ngay đi', 'Sơn Tùng MTP', 'Sơn Tùng MTP', 'Việt Nam', 'hiphop', 1, 0, 7, 'image/chayngaydi.jpg', 'mp3/ChayNgayDi.mp3'),
(7, 'Chúng ta không thuộc về nhau', 'Sơn Tùng MTP', 'Sơn Tùng MTP', 'Việt Nam', 'pop', 0, 0, 4, 'image/ctktvn.jpg', 'mp3/ChungTaKhongThuocVeNhau.mp3'),
(8, 'Không phải dạng vừa đâu', 'Sơn Tùng MTP', 'Sơn Tùng MTP', 'Việt Nam', 'hiphop', 0, 1, 0, 'image/kpdvd.jpg', 'mp3/KhongPhaiDangVuaDau.mp3'),
(9, 'Haru Haru', 'Big Bang', 'Big Bang', 'Thế Giới', 'hiphop', 0, 1, 8, 'image/haru.jpg', 'mp3/HaruHaru.mp3'),
(10, 'Smile', 'Vitas', 'Vitas', 'Thế Giới', 'opera', 1, 0, 9, 'image/smile.jpg', 'mp3/Smile.mp3'),
(11, 'Gee', 'SNSD', 'SNSD', 'Thế Giới', 'pop', 1, 1, 0, 'image/gee.jpg', 'mp3/Gee.mp3'),
(12, 'Wrecking Ball', 'Miley Cyrus', 'Miley Cyrus', 'Thế Giới', 'hiphop', 1, 1, 10, 'image/wreckingball.jpg', 'mp3/WreckingBall.mp3'),
(13, 'Love Yourself', 'Justin Bieber', 'Justin Bieber', 'Thế Giới', 'pop', 1, 0, 6, 'image/loveuself.jpg', 'mp3/LoveYourself.mp3'),
(14, 'Marshmello Wolves', 'Selena Gomes', 'Selena Gomes', 'Thế giới', 'balad', 0, 0, 5, 'image/mmwolves.jpg', 'mp3/Marshmello ï¿½ Wolves.mp3');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dsnhac`
--

CREATE TABLE `dsnhac` (
  `matv` int(11) NOT NULL,
  `mabh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dsnhac`
--

INSERT INTO `dsnhac` (`matv`, `mabh`) VALUES
(2, 1),
(2, 3),
(2, 5),
(2, 7),
(2, 8),
(2, 11);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thanhvien`
--

CREATE TABLE `thanhvien` (
  `matv` int(11) NOT NULL,
  `ho` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `ten` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `taikhoan` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `capbac` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thanhvien`
--

INSERT INTO `thanhvien` (`matv`, `ho`, `ten`, `email`, `taikhoan`, `matkhau`, `capbac`) VALUES
(1, 'Ad', 'Carry', 'admin@gmail.com', 'admin', '123456', 1),
(2, 'Cau', 'Vang', 'cauvang@gmail.com', 'cauvang', '123456', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `baihat`
--
ALTER TABLE `baihat`
  ADD PRIMARY KEY (`mabh`);

--
-- Chỉ mục cho bảng `dsnhac`
--
ALTER TABLE `dsnhac`
  ADD KEY `fk_baihat` (`mabh`),
  ADD KEY `fk_thanhvien` (`matv`);

--
-- Chỉ mục cho bảng `thanhvien`
--
ALTER TABLE `thanhvien`
  ADD PRIMARY KEY (`matv`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `baihat`
--
ALTER TABLE `baihat`
  MODIFY `mabh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `thanhvien`
--
ALTER TABLE `thanhvien`
  MODIFY `matv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `dsnhac`
--
ALTER TABLE `dsnhac`
  ADD CONSTRAINT `fk_baihat` FOREIGN KEY (`mabh`) REFERENCES `baihat` (`mabh`),
  ADD CONSTRAINT `fk_thanhvien` FOREIGN KEY (`matv`) REFERENCES `thanhvien` (`matv`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
