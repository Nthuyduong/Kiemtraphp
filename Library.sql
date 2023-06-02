-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:8889
-- Thời gian đã tạo: Th6 02, 2023 lúc 10:52 AM
-- Phiên bản máy phục vụ: 5.7.34
-- Phiên bản PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `Kiemtra`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `Library`
--

CREATE TABLE `Library` (
  `bookid` int(11) NOT NULL,
  `authorid` int(11) NOT NULL DEFAULT '0',
  `title` varchar(55) NOT NULL DEFAULT '',
  `ISBN` varchar(25) NOT NULL DEFAULT '',
  `pub_year` smallint(6) NOT NULL DEFAULT '0',
  `available` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `Library`
--

INSERT INTO `Library` (`bookid`, `authorid`, `title`, `ISBN`, `pub_year`, `available`) VALUES
(1, 0, 'PHP Programming', 'PHP01', 2004, 1),
(2, 0, 'PHP Avanced Programing', 'PHP02', 2004, 0),
(3, 0, 'MySQL Database Management System', 'MYSQL01', 2002, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
