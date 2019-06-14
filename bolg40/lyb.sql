-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 2018-12-26 00:41:36
-- 服务器版本： 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog40`
--

-- --------------------------------------------------------

--
-- 表的结构 `lyb`
--

CREATE TABLE `lyb` (
  `ID` int(11) NOT NULL,
  `title` varchar(60) NOT NULL,
  `content` text NOT NULL,
  `author` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `IP` varchar(20) NOT NULL,
  `addtime` datetime NOT NULL,
  `sex` char(2) NOT NULL DEFAULT '男'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `lyb`
--

INSERT INTO `lyb` (`ID`, `title`, `content`, `author`, `Email`, `IP`, `addtime`, `sex`) VALUES
(11, '胜多负少', '                双方都还记得上飞机                ', '张三', 'dfds@we.com', '121.12.23.9', '2018-12-02 00:00:00', '男'),
(12, '穿梭在校园里的红马甲', '的健康健康十分健康范德萨', '媒体运营部', 'ww', '::1', '0000-00-00 00:00:00', '女'),
(13, '你好', '12121', '张三', 'dfsah@1233.com', '121.12.23.2', '2018-12-17 00:00:00', '男'),
(14, '胜多负少', '                双方都还记得上飞机                ', '张三', 'dfds@we.com', '121.12.23.9', '2018-12-02 00:00:00', '男'),
(15, '穿梭在校园里的红马甲', '的健康健康十分健康范德萨', '媒体运营部', 'ww', '::1', '2018-12-18 04:00:00', '女'),
(16, '全面提升：从信息化教学大赛到教学能力比赛', '全球', '宣传处', 'ww', '::1', '2018-12-30 00:00:00', '男'),
(17, 'www', 'wwwwwwwwwwwwww呜呜呜呜呜呜呜呜无无无无无无', 'wwwwww', 'wwwwwwwwww', '::1', '2018-12-24 00:00:00', '女'),
(18, '', '', '', '', '::1', '2018-12-20 00:00:00', '男'),
(19, '全面提升：从信息化教学大赛到教学能力比赛', '2222222222222', '宣传处', 'ww', '::1', '2018-12-13 00:00:00', '女'),
(20, '全面提升：从信息化教学大赛到教学能力比赛', 'sssssssssssss', '张三', 'ww', '::1', '0000-00-00 00:00:00', '男'),
(21, '志愿服务队伍中的“国际风景”d', 'ddddddd', 'd', 'd', '::1', '0000-00-00 00:00:00', '女');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lyb`
--
ALTER TABLE `lyb`
  ADD PRIMARY KEY (`ID`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `lyb`
--
ALTER TABLE `lyb`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
