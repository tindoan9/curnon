-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 17, 2022 lúc 01:42 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `doanphp`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`username`, `password`, `status`) VALUES
('admin', '123456', 1),
('tintoo', '113', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `memberid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `content` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comments`
--

INSERT INTO `comments` (`id`, `memberid`, `productid`, `date`, `content`, `status`) VALUES
(1, 1, 2, '2022-03-10 17:45:43', 'nhanh\r\n', 0),
(2, 1, 17, '2022-03-10 17:46:47', 'dep', 0),
(3, 1, 9, '2022-03-10 17:49:09', 'xau', 0),
(4, 1, 9, '2022-03-10 17:49:58', 'abc', 0),
(5, 6, 16, '2022-03-10 18:12:21', 'ádasd', 0),
(6, 1, 13, '2022-03-10 18:15:18', 'dep\r\n', 1),
(10, 1, 11, '2022-03-10 20:03:56', 'TinToo', 0),
(13, 6, 2, '2022-03-10 20:06:37', 'abcxyz\r\n', 0),
(14, 6, 9, '2022-03-10 20:11:21', 'xyz\r\n', 0),
(15, 6, 9, '2022-03-10 20:12:23', 'xyz\r\n', 0),
(16, 1, 14, '2022-03-10 20:29:22', 'abc\r\n', 0),
(17, 1, 1, '2022-03-11 08:55:18', 'abc\r\n', 0),
(18, 7, 16, '2022-03-13 19:20:56', 'xau\r\n', 0),
(19, 1, 3, '2022-03-15 19:01:07', 'ab', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orderdetail`
--

CREATE TABLE `orderdetail` (
  `productid` int(11) NOT NULL,
  `orderid` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orderdetail`
--

INSERT INTO `orderdetail` (`productid`, `orderid`, `number`, `price`) VALUES
(1, 53, 1, 2290000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ordermethod`
--

CREATE TABLE `ordermethod` (
  `id` int(11) NOT NULL,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ordermethod`
--

INSERT INTO `ordermethod` (`id`, `name`, `status`) VALUES
(1, 'Thanh toán khi nhận hàng', 1),
(2, 'Chuyển khoản', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `ordermethodid` int(11) NOT NULL,
  `memberid` int(11) NOT NULL,
  `ordate` datetime NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `note` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `ordermethodid`, `memberid`, `ordate`, `status`, `name`, `address`, `mobile`, `email`, `note`) VALUES
(53, 1, 1, '2022-03-15 20:11:40', 1, 'Tín Đoàn', 'Quảng Nam', '07026', 'tindoan9@gmail.com', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `image` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quantity` int(50) DEFAULT NULL,
  `description` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`, `quantity`, `description`, `status`) VALUES
(1, 'ARCTIC', 2290000, 'Namm1.png', 9, 'Đồng Hồ ', 1),
(2, 'HURRICANE', 2290000, 'Namm2.png', 9, 'Đồng Hồ ', 1),
(3, 'BALTIC', 2290000, 'Namm3.png', 9, 'Đồng hồ nam', 1),
(4, 'I-94', 2290000, 'Namm4.png', 12, 'Đồng hồ thời trang', 1),
(6, 'TAD', 2290000, 'nam9.png', 9, '', 1),
(7, 'MILE', 2290000, 'nam6.png', 10, '', 1),
(8, 'LAVA', 2290000, 'nam7.png', 9, '', 1),
(9, 'HERBERT', 2290000, 'nam8.png', 11, '', 1),
(10, 'HAZE', 1190000, 'Nuu10.png', 10, 'Trang sức nói lên cá tính của người phụ nữ hiện đại', 0),
(11, 'WIND', 1190000, 'Nuu11.png', 10, 'Trang sức nói lên cá tính của người phụ nữ hiện đại', 0),
(12, 'TASTEFUL', 1190000, 'Nuu12.png', 11, 'Trang sức nói lên cá tính của người phụ nữ hiện đại', 0),
(13, 'LACE', 1190000, 'Nuu13.png', 12, 'Trang sức nói lên cá tính của người phụ nữ hiện đại', 0),
(14, 'Dây Da', 299000, 'day10.png', 12, 'withdraw', 2),
(15, 'Day kim loai', 320000, 'day11.png', 12, 'withdraw', 2),
(16, 'Dây Da', 299000, 'day12.png', 12, 'withdraw', 2),
(17, 'Day kim loai', 320000, 'day13.png', 12, 'withdraw', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fullname` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `fullname`, `mobile`, `address`, `status`) VALUES
(1, 'tindoan9@gmail.com', 'abc', 'Tín Đoàn', '07026', 'Quảng Nam', 0),
(6, 'abc@gmail.com', 'abc', 'TínToo', '0012345790', 'da nang', 0),
(10, 'huynh12@gmail.com', '113', 'huỳnh', '', '', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`productid`,`orderid`);

--
-- Chỉ mục cho bảng `ordermethod`
--
ALTER TABLE `ordermethod`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `ordermethod`
--
ALTER TABLE `ordermethod`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
