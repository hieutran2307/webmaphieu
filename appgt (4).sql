-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 10, 2018 lúc 06:26 PM
-- Phiên bản máy phục vụ: 10.1.36-MariaDB
-- Phiên bản PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `appgt`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `addresses`
--

CREATE TABLE `addresses` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `addresses`
--

INSERT INTO `addresses` (`id`, `name`) VALUES
(1, 'Trường Đại học Khoa học Tự nhiên, Cơ sở Linh Trung, Thủ Đức'),
(2, 'Ngã ba 621'),
(4, 'Ngã 4 Công Nghệ Cao'),
(5, 'Ngã Tư Thủ Đức'),
(6, 'Ngã Tư Bình Thái'),
(7, 'Ngã Tư MK'),
(8, 'Cầu sai gòn'),
(9, 'Hàng xanh'),
(10, 'Trường Đại học Khoa học Tự nhiên'),
(11, 'Chợ Thủ Đức'),
(12, 'Cầu Bình Triệu'),
(13, 'Bên xe miền đồng'),
(14, 'Cầu điện biên phủ'),
(15, 'Vòng xoày điện biên phủ'),
(17, 'Vong Xoayy 3/2');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `Id` int(11) NOT NULL,
  `HoVaTen` varchar(255) NOT NULL,
  `SoDienThoai` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `TenDangNhap` varchar(255) NOT NULL,
  `MatKhau` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`Id`, `HoVaTen`, `SoDienThoai`, `Email`, `TenDangNhap`, `MatKhau`) VALUES
(1, 'Admin', '', 'truong@gmail.com', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `canhbao`
--

CREATE TABLE `canhbao` (
  `ID` int(11) NOT NULL,
  `TenDuong` varchar(255) NOT NULL,
  `KinhDo` varchar(255) NOT NULL,
  `ViDo` varchar(255) NOT NULL,
  `HinhAnh` varchar(255) NOT NULL,
  `TieuDe` varchar(255) NOT NULL,
  `NoiDung` varchar(255) NOT NULL,
  `TinhTrang` varchar(255) NOT NULL,
  `NguonTin` varchar(255) NOT NULL,
  `DiaDiem` varchar(100) NOT NULL,
  `icon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `canhbao`
--

INSERT INTO `canhbao` (`ID`, `TenDuong`, `KinhDo`, `ViDo`, `HinhAnh`, `TieuDe`, `NoiDung`, `TinhTrang`, `NguonTin`, `DiaDiem`, `icon`) VALUES
(22, 'Quản Trọng Linh,Quận 8', '10.7024053', '106.6064763', 'ngaplut.jpeg', '', '12:00', 'kẹt xe do phương tiện lưu thông đông', '', 'Chợ Đầu Mối Bình Điền', 'ngaplut.png'),
(23, 'Đường D2', '10.8053215', '106.7137063', 'ngaplut.jpeg', '', '12:00', 'Kẹt xe do lưu lượng mưa', '', 'Coffee House D2', 'tainan.png'),
(24, 'Dường D2', '10.801789', '106.715384', 'ngaplut.jpeg', '', '12:00', 'Kẹt xe do lưu lượng mưa', '', '', 'ngaplut.png'),
(25, 'Dường D1', '10.801789', '106.715384', 'ngaplut.jpeg', '', '12:00', 'Kẹt xe do lưu lượng mưa', '', '', 'ngaplut.png'),
(26, 'Dường D5', '10.803684', '106.715829', 'ngaplut.jpeg', '', '12:00', 'Kẹt xe do lưu lượng mưa', '', '', 'ngaplut.png'),
(27, 'Dường D3', '10.803475', '106.715705', 'ngaplut.jpeg', '', '12:00', 'Kẹt xe do lưu lượng mưa', '', '', 'ngaplut.png'),
(28, 'Dường D2', '10.804535', '106.715936', 'ngaplut.jpeg', '', '12:00', 'Kẹt xe do lưu lượng mưa', '', '', 'ngaplut.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `duongdi`
--

CREATE TABLE `duongdi` (
  `Id` int(11) NOT NULL,
  `TenDuong` varchar(255) NOT NULL,
  `KinhDo` varchar(255) NOT NULL,
  `ViDo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `duongdi`
--

INSERT INTO `duongdi` (`Id`, `TenDuong`, `KinhDo`, `ViDo`) VALUES
(1, 'Đường Nguyễn Gia Trí', '10.806074', '106.716808'),
(2, 'Đại Học Công Nghệ HUTECH cơ sở Ung Văn Khiêm', '10.809765', '106.715069'),
(3, 'Đại học Hutech', '10.804114', '106.714610'),
(4, 'Viện Công Nghệ Cao Hutech', '10.835495', '106.805543');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `location`
--

CREATE TABLE `location` (
  `id` int(11) NOT NULL,
  `address` int(11) DEFAULT NULL,
  `latitude` varchar(50) DEFAULT NULL,
  `longitude` varchar(50) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `location`
--

INSERT INTO `location` (`id`, `address`, `latitude`, `longitude`, `description`) VALUES
(1, 1, '10.876023', '106.797432', NULL),
(2, NULL, '10.875169', '106.799930', NULL),
(3, NULL, '10.875482', '106.800032', NULL),
(4, NULL, '10.875746', '106.800590', NULL),
(5, NULL, '10.875746', '106.801427', NULL),
(6, NULL, '10.875019', '106.802768', NULL),
(7, NULL, '10.874650', '106.802779', NULL),
(8, NULL, '10.874513', '106.802918', NULL),
(9, NULL, '10.874492', '106.803015', NULL),
(10, NULL, '10.874702', '106.803905', NULL),
(11, NULL, '10.874608', '106.805139', NULL),
(12, NULL, '10.874945', '106.805268', NULL),
(13, NULL, '10.875019', '106.805386', NULL),
(14, NULL, '10.874534', '106.806512', NULL),
(15, 2, '10.873048', '106.808487', NULL),
(17, 4, '10.857999', '106.787871', NULL),
(18, 5, '10.849085', '106.774052', NULL),
(19, 6, '10.835365', '106.765898', NULL),
(20, 7, '10.826496', '106.760840', NULL),
(21, NULL, '10.823608', '106.759145', NULL),
(22, NULL, '10.822481', '106.758726', NULL),
(23, NULL, '10.813565', '106.756977', NULL),
(24, NULL, '10.809814', '106.756269', NULL),
(25, NULL, '10.807959', '106.755368', NULL),
(26, NULL, '10.805103', '106.752933', NULL),
(27, NULL, '10.802532', '106.746302', NULL),
(28, 8, '10.798966', '106.727639', NULL),
(29, NULL, '10.797786', '106.722125', NULL),
(30, NULL, '10.798144', '106.720515', NULL),
(31, NULL, '10.800294', '106.716481', NULL),
(32, NULL, '10.801095', '106.714164', NULL),
(33, 9, '10.801411', '106.711482', 'Hàng Xanh'),
(34, NULL, '10.799581', '106.711122', NULL),
(35, NULL, '10.795534', '106.710082', NULL),
(36, NULL, '10.795165', '106.709738', NULL),
(37, NULL, '10.791655', '106.706402', NULL),
(38, NULL, '10.788610', '106.703505', NULL),
(39, NULL, '10.786597', '106.701670', NULL),
(40, NULL, '10.783677', '106.698806', NULL),
(68, NULL, '10.784584', '106.697840', NULL),
(69, NULL, '10.782876', '106.696166', NULL),
(70, NULL, '10.782855', '106.695598', NULL),
(71, NULL, '10.782254', '106.695555', NULL),
(72, NULL, '10.775709', '106.689557', 'Bà huyện thanh quan và võ văn tần'),
(73, NULL, '10.774813', '106.690534', NULL),
(74, NULL, '10.773622', '106.689461', 'CMT8 và NTMK'),
(75, NULL, '10.765591', '106.681919', NULL),
(76, NULL, '10.765180', '106.681747', NULL),
(77, NULL, '10.762809', '106.682627', NULL),
(78, 10, '10.762643', '106.682020', NULL),
(79, NULL, '10.783656', '106.698816', NULL),
(80, NULL, '10.849552', '106.773371', NULL),
(81, NULL, '10.849720', '106.770807', NULL),
(82, NULL, '10.849678', '106.768135', NULL),
(83, NULL, '10.849899', '106.767588', NULL),
(84, NULL, '10.850405', '106.767105', 'Vòng xoay điện biên phủ'),
(85, NULL, '10.850553', '106.765775', NULL),
(86, NULL, '10.850806', '106.762868', NULL),
(87, NULL, '10.850574', '106.762320', NULL),
(88, NULL, '10.850574', '106.758673', NULL),
(89, NULL, '10.851195', '106.756720', NULL),
(90, 11, '10.851251', '106.754950', NULL),
(91, NULL, '10.849520', '106.753501', NULL),
(92, NULL, '10.849351', '106.753609', NULL),
(93, NULL, '10.846085', '106.750637', NULL),
(94, NULL, '10.841817', '106.746892', NULL),
(95, NULL, '10.840901', '106.745777', NULL),
(96, NULL, '10.840679', '106.745047', NULL),
(97, NULL, '10.840721', '106.744564', NULL),
(98, NULL, '10.840911', '106.744242', NULL),
(99, NULL, '10.841269', '106.743802', NULL),
(100, NULL, '10.839731', '106.739082', NULL),
(101, NULL, '10.838382', '106.734683', NULL),
(102, NULL, '10.836970', '106.732194', NULL),
(103, NULL, '10.834388', '106.728943', NULL),
(104, NULL, '10.832860', '106.727098', NULL),
(105, NULL, '10.829193', '106.722602', NULL),
(106, NULL, '10.829193', '106.722388', NULL),
(107, NULL, '10.828919', '106.722184', NULL),
(108, NULL, '10.827539', '106.719770', NULL),
(109, NULL, '10.826685', '106.717109', NULL),
(110, NULL, '10.826032', '106.714556', NULL),
(111, NULL, '10.826148', '106.713987', NULL),
(112, NULL, '10.825284', '106.713933', NULL),
(113, 12, '10.821266', '106.713241', NULL),
(114, NULL, '10.819614', '106.713021', NULL),
(115, NULL, '10.817760', '106.712710', NULL),
(116, 13, '10.814640', '106.710243', NULL),
(117, NULL, '10.812448', '106.709234', NULL),
(118, NULL, '10.812153', '106.709180', NULL),
(119, NULL, '10.802953', '106.709406', NULL),
(120, NULL, '10.802742', '106.711326', NULL),
(121, NULL, '10.801047', '106.711342', NULL),
(122, NULL, '10.801243', '106.710066', NULL),
(123, NULL, '10.800863', '106.708971', NULL),
(124, NULL, '10.799831', '106.706933', NULL),
(125, NULL, '10.798924', '106.705753', NULL),
(126, NULL, '10.797913', '106.704723', NULL),
(127, 14, '10.793360', '106.700538', NULL),
(128, 15, '10.792222', '106.699423', 'Vòng xoày điện biên phủ'),
(129, NULL, '10.790367', '106.701440', 'Nguyễn bỉnh Khiêm và Nguyễn đình chiểu'),
(136, NULL, '10.784594', '106.695930', 'Hai bà chưng và Nguyễn đình chiểu'),
(137, NULL, '10.779093', '106.690716', 'Trần quốc thảo và Nguyễn đình chiểu'),
(138, NULL, '10.776763', '106.688442', 'Bà huyện thanh quan và Nguyễn đình chiểu'),
(139, NULL, '10.790445', '106.697403', 'DBP và Dinh Tien Hoang'),
(140, NULL, '10.791815', '106.695901', 'Vo thi sáu và Dinh Tien Hoang'),
(141, NULL, '10.787900', '106.691937', 'Vo thi sáu và Hai Ba Trung'),
(142, NULL, '10.784949', '106.689104', 'Vo thi sáu và NKKN'),
(143, NULL, '10.778862', '106.683075', NULL),
(144, 17, '10.777871', '106.681932', 'Vong Xoay 3/2'),
(145, NULL, '10.777666', '106.681921', NULL),
(146, NULL, '10.777181', '106.682796', NULL),
(147, NULL, '10.776691', '106.683702', 'DBP và CMT8'),
(148, NULL, '10.774999', '106.686840', 'CMT8 và Nguyễn đình chiểu'),
(149, NULL, '10.774235', '106.688181', 'CMT8 và Võ văn tần');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `luatgiaothong`
--

CREATE TABLE `luatgiaothong` (
  `Id` int(11) NOT NULL,
  `HinhAnh` varchar(255) NOT NULL,
  `PhuongTien` varchar(255) NOT NULL,
  `TIeuDe` varchar(255) NOT NULL,
  `NoiDung` text NOT NULL,
  `MucPhat` varchar(255) NOT NULL,
  `NghiDinh` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `luatgiaothong`
--

INSERT INTO `luatgiaothong` (`Id`, `HinhAnh`, `PhuongTien`, `TIeuDe`, `NoiDung`, `MucPhat`, `NghiDinh`) VALUES
(9, '2.jpg', '234', '4234', '<p>\r\n	23423</p>\r\n', '23423', '423423 ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `parent_children`
--

CREATE TABLE `parent_children` (
  `id` int(11) NOT NULL,
  `parent` int(11) NOT NULL DEFAULT '0',
  `children` int(11) NOT NULL DEFAULT '0',
  `distance` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `parent_children`
--

INSERT INTO `parent_children` (`id`, `parent`, `children`, `distance`) VALUES
(1, 1, 2, 10),
(2, 2, 3, 10),
(3, 3, 4, 10),
(4, 4, 5, 20),
(5, 5, 6, 10),
(6, 6, 7, 10),
(7, 7, 8, 10),
(8, 8, 9, 10),
(9, 9, 10, 10),
(10, 10, 11, 10),
(11, 11, 12, 10),
(12, 12, 13, 100),
(13, 13, 14, 25),
(14, 14, 15, 10),
(15, 15, 17, 10),
(16, 17, 18, 10),
(17, 18, 19, 10),
(18, 19, 20, 10),
(19, 20, 21, 10),
(20, 21, 22, 10),
(21, 22, 23, 10),
(22, 23, 24, 10),
(23, 24, 25, 10),
(24, 25, 26, 10),
(25, 26, 27, 10),
(26, 27, 28, 10),
(27, 28, 29, 10),
(28, 29, 30, 10),
(29, 30, 31, 10),
(30, 31, 32, 10),
(31, 32, 33, 10),
(32, 33, 34, 10),
(33, 34, 35, 10),
(34, 35, 36, 10),
(35, 36, 37, 10),
(36, 37, 38, 10),
(37, 38, 39, 10),
(38, 39, 40, 10),
(39, 40, 68, 10),
(68, 68, 69, 1),
(69, 69, 70, 1),
(70, 70, 71, 1),
(71, 71, 72, 1),
(72, 72, 73, 1),
(73, 73, 74, 1),
(74, 74, 75, 1),
(75, 75, 76, 1),
(76, 76, 77, 1),
(77, 77, 78, 1),
(78, 78, 78, 1),
(122, 18, 80, 1),
(123, 80, 81, 1),
(124, 81, 82, 1),
(125, 82, 83, 1),
(126, 83, 84, 1),
(127, 84, 85, 1),
(128, 85, 86, 1),
(129, 86, 87, 1),
(130, 87, 88, 1),
(131, 88, 89, 1),
(132, 89, 90, 1),
(133, 90, 91, 1),
(134, 91, 92, 1),
(135, 92, 93, 1),
(136, 93, 94, 1),
(137, 94, 95, 1),
(138, 95, 96, 1),
(139, 96, 97, 1),
(140, 97, 98, 1),
(141, 98, 99, 1),
(142, 99, 100, 1),
(143, 100, 101, 1),
(144, 101, 102, 2),
(145, 102, 103, 1),
(146, 103, 104, 2),
(147, 104, 105, 1),
(148, 105, 106, 2),
(149, 106, 107, 2),
(150, 107, 108, 2),
(151, 108, 109, 2),
(152, 109, 110, 1),
(153, 110, 111, 100),
(154, 111, 112, 2),
(155, 112, 113, 2),
(156, 113, 114, 2),
(157, 114, 115, 2),
(158, 115, 116, 2),
(159, 116, 117, 2),
(161, 117, 118, 2),
(162, 118, 119, 2),
(163, 119, 120, 3),
(164, 120, 33, 2),
(165, 33, 121, 1),
(166, 121, 122, 1),
(167, 122, 123, 1),
(168, 123, 124, 1),
(169, 124, 125, 1),
(170, 125, 126, 1),
(171, 126, 127, 1),
(172, 127, 128, 1),
(173, 128, 129, 1),
(174, 129, 136, 1),
(177, 136, 137, 1),
(178, 137, 138, 1),
(179, 138, 72, 1),
(180, 128, 139, 20),
(181, 139, 140, 20),
(182, 140, 141, 20),
(183, 142, 143, 20),
(184, 143, 144, 20),
(185, 145, 146, 20),
(186, 146, 147, 20),
(187, 147, 148, 20),
(188, 148, 149, 20),
(189, 149, 74, 20),
(190, 141, 142, 20),
(191, 144, 145, 20);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phananh`
--

CREATE TABLE `phananh` (
  `Id` int(11) NOT NULL,
  `HoVaTen` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `SoDienThoai` varchar(255) NOT NULL,
  `NoiDung` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `phananh`
--

INSERT INTO `phananh` (`Id`, `HoVaTen`, `Email`, `SoDienThoai`, `NoiDung`) VALUES
(1, 'tran ngoc hieu', 'tnhieu123@gmail.com', '01692307840', 'cap nhat he thong'),
(2, 'tran ngoc hieu', 'tnhieu123@gmail.com', '01692307840', 'cap nhat he thong'),
(3, 'tran ngoc hieu', 'tnhieu123@gmail.com', '01692307840', 'cap nhat he thong'),
(4, 'tran ngoc hieu', 'tnhieu123@gmail.com', '01692307840', 'cap nhat he thong'),
(5, '', '', '', ''),
(6, '', '', '', ''),
(7, '', '', '', ''),
(8, '', '', '', ''),
(9, '', '', '', ''),
(10, '', '', '', ''),
(11, '', '', '', ''),
(12, 'Wer', 'Wre', 'Werwe', 'Rwerwe'),
(13, 'Wqe', 'Ewqeqw', 'Ewee', 'Qwe'),
(14, 'Rewr', 'Werwe', 'Werrwer', 'Werer'),
(15, '', '', '', ''),
(16, '5', '5', '5', '5');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quangcao`
--

CREATE TABLE `quangcao` (
  `Id` int(11) NOT NULL,
  `HinhAnh` varchar(255) NOT NULL,
  `NoiDung` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `quangcao`
--

INSERT INTO `quangcao` (`Id`, `HinhAnh`, `NoiDung`) VALUES
(1, 'giaothong.jpg', 'Cập nhật hình trạng giao thông đang lưu thông'),
(2, 'map.jpg', 'Hệ thống tra cứu thông tin đường đi');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc`
--

CREATE TABLE `tintuc` (
  `Id` int(11) NOT NULL,
  `TieuDe` varchar(255) NOT NULL,
  `ThoiGian` date NOT NULL,
  `NoiDung` text NOT NULL,
  `HinhAnh` varchar(255) NOT NULL,
  `NoiDungChiTiet` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tintuc`
--

INSERT INTO `tintuc` (`Id`, `TieuDe`, `ThoiGian`, `NoiDung`, `HinhAnh`, `NoiDungChiTiet`) VALUES
(34, 'Chồng mất tích, vợ tử vong sau khi xuồng máy tông sà lan', '2018-12-10', '<p>\r\n	<span font-size:=\"\" font-weight:=\"\" noto=\"\" style=\"color: rgb(51, 51, 51); font-family: \">Xuồng m&aacute;y của vợ chồng &ocirc;ng Ho&agrave;ng ch&igrave;m dưới s&ocirc;ng Bảy H&aacute;p ở C&agrave; Mau sau khi t&ocirc;ng v&agrave;o s&agrave; lan.</span></p>\r\n', 'mattich.JPG', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `canhbao`
--
ALTER TABLE `canhbao`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `DiaDiem` (`ID`) USING BTREE;

--
-- Chỉ mục cho bảng `duongdi`
--
ALTER TABLE `duongdi`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `luatgiaothong`
--
ALTER TABLE `luatgiaothong`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `parent_children`
--
ALTER TABLE `parent_children`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `phananh`
--
ALTER TABLE `phananh`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `quangcao`
--
ALTER TABLE `quangcao`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `canhbao`
--
ALTER TABLE `canhbao`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `duongdi`
--
ALTER TABLE `duongdi`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `location`
--
ALTER TABLE `location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

--
-- AUTO_INCREMENT cho bảng `luatgiaothong`
--
ALTER TABLE `luatgiaothong`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `parent_children`
--
ALTER TABLE `parent_children`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=192;

--
-- AUTO_INCREMENT cho bảng `phananh`
--
ALTER TABLE `phananh`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `quangcao`
--
ALTER TABLE `quangcao`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
