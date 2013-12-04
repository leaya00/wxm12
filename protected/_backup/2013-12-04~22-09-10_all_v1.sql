--
-- MySQL database dump
-- Created by DBManage class, Power By yanue. 
-- http://www.yanue.net 
--
-- 主机: 127.0.0.1
-- 生成日期: 2013 年  12 月 04 日 22:09
-- MySQL版本: 5.5.27
-- PHP 版本: 5.4.7

--
-- 数据库: `wxm`
--

-- -------------------------------------------------------

--
-- 表的结构d_applyuser
--

DROP TABLE IF EXISTS `d_applyuser`;
CREATE TABLE `d_applyuser` (
  `id` varchar(36) NOT NULL,
  `projectid` varchar(36) NOT NULL DEFAULT '0',
  `name` varchar(50) DEFAULT NULL,
  `telphone` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `describe` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 d_applyuser
--

--
-- 表的结构d_dict
--

DROP TABLE IF EXISTS `d_dict`;
CREATE TABLE `d_dict` (
  `id` varchar(36) NOT NULL,
  `dcode` varchar(50) NOT NULL DEFAULT '0',
  `dname` varchar(50) NOT NULL DEFAULT '0',
  `dtype` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 d_dict
--

INSERT INTO `d_dict` VALUES('1','1','有效','state');
INSERT INTO `d_dict` VALUES('2','0','无效','state');
INSERT INTO `d_dict` VALUES('3','1','个人','orgtype');
INSERT INTO `d_dict` VALUES('4','2','团体','orgtype');
INSERT INTO `d_dict` VALUES('5','3','工作室','orgtype');
INSERT INTO `d_dict` VALUES('6','19','项目编号','project_num');
--
-- 表的结构d_mail
--

DROP TABLE IF EXISTS `d_mail`;
CREATE TABLE `d_mail` (
  `id` varchar(36) NOT NULL,
  `smtphost` varchar(50) NOT NULL,
  `mailform` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mailformname` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `body` varchar(500) NOT NULL,
  `updatetime` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 d_mail
--

INSERT INTO `d_mail` VALUES('1','xx','xx','xx','xx','xx','xx','xx','xx','0000-00-00 00:00:00');
--
-- 表的结构d_news
--

DROP TABLE IF EXISTS `d_news`;
CREATE TABLE `d_news` (
  `id` varchar(36) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text,
  `publishDate` datetime DEFAULT NULL,
  `updatetime` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 d_news
--

--
-- 表的结构d_project
--

DROP TABLE IF EXISTS `d_project`;
CREATE TABLE `d_project` (
  `id` varchar(36) NOT NULL,
  `number` varchar(10) DEFAULT '0',
  `name` varchar(200) DEFAULT '0',
  `promoter` varchar(36) DEFAULT '0',
  `personCount` int(11) DEFAULT '0',
  `demand` varchar(200) DEFAULT '0',
  `startdate` datetime DEFAULT NULL,
  `lastdate` datetime DEFAULT NULL,
  `content` text,
  `email` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `promoterType` varchar(50) DEFAULT NULL,
  `updatetime` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 d_project
--

INSERT INTO `d_project` VALUES('333','000018','项目1','8','3',' 士大夫似的 士大夫似的 士大夫似的 士大夫似的','2013-12-03 00:00:00','2013-12-13 00:00:00','<p>士大夫似的</p>\r\n','xx@xxcv.com','1','2','2013-12-04 20:58:27');
INSERT INTO `d_project` VALUES('49841a44-5c15-11e3-b6b2-90e6ba57d19d','000018','项目1','8','3',' 士大夫似的','2013-12-03 00:00:00','2013-12-13 00:00:00','<p>士大夫似的</p>\r\n','xx@xxcv.com','1','2','2013-12-03 21:12:54');
INSERT INTO `d_project` VALUES('7d44e1f7-5ce1-11e3-b10c-90e6ba57d19d','000019','项目1','8','12',' 无要求','2013-12-04 00:00:00','2013-12-13 00:00:00','<h1>士大夫<span style=\"color:#a52a2a\">士大夫士</span>大夫士大夫士大夫</h1>\r\n\r\n<p><img alt=\"\" src=\"/wxm/images/upload/Penguins.jpg\" style=\"height:75px; width:100px\" /></p>\r\n','xxxx@ssss.com','1','1','');
--
-- 表的结构d_studioinfo
--

DROP TABLE IF EXISTS `d_studioinfo`;
CREATE TABLE `d_studioinfo` (
  `id` varchar(36) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `info` varchar(500) DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 d_studioinfo
--

--
-- 表的结构d_user
--

DROP TABLE IF EXISTS `d_user`;
CREATE TABLE `d_user` (
  `id` varchar(36) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 d_user
--

INSERT INTO `d_user` VALUES('10','p1','C4CA4238A0B923820DCC509A6F75849B','manager');
INSERT INTO `d_user` VALUES('8','admin','C4CA4238A0B923820DCC509A6F75849B','admin');
INSERT INTO `d_user` VALUES('9','user1','C4CA4238A0B923820DCC509A6F75849B','user');
--
-- 表的结构v_uuid
--

DROP TABLE IF EXISTS `v_uuid`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_uuid` AS select uuid() AS `uuid`;

--
-- 转存表中的数据 v_uuid
--

INSERT INTO `v_uuid` VALUES('a555ddc8-5ced-11e3-b10c-90e6ba57d19d');
