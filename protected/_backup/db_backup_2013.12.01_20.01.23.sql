-- -------------------------------------------
SET AUTOCOMMIT=0;
START TRANSACTION;
SET SQL_QUOTE_SHOW_CREATE = 1;
SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
-- -------------------------------------------
-- -------------------------------------------
-- START BACKUP
-- -------------------------------------------
-- -------------------------------------------
-- TABLE `d_applyuser`
-- -------------------------------------------
DROP TABLE IF EXISTS `d_applyuser`;
CREATE TABLE IF NOT EXISTS `d_applyuser` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `projectid` int(10) NOT NULL DEFAULT '0',
  `name` varchar(50) DEFAULT NULL,
  `telphone` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `describe` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- -------------------------------------------
-- TABLE `d_dict`
-- -------------------------------------------
DROP TABLE IF EXISTS `d_dict`;
CREATE TABLE IF NOT EXISTS `d_dict` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `dcode` varchar(50) NOT NULL DEFAULT '0',
  `dname` varchar(50) NOT NULL DEFAULT '0',
  `dtype` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- -------------------------------------------
-- TABLE `d_mail`
-- -------------------------------------------
DROP TABLE IF EXISTS `d_mail`;
CREATE TABLE IF NOT EXISTS `d_mail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- -------------------------------------------
-- TABLE `d_news`
-- -------------------------------------------
DROP TABLE IF EXISTS `d_news`;
CREATE TABLE IF NOT EXISTS `d_news` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `content` text,
  `publishDate` datetime DEFAULT NULL,
  `updatetime` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- -------------------------------------------
-- TABLE `d_project`
-- -------------------------------------------
DROP TABLE IF EXISTS `d_project`;
CREATE TABLE IF NOT EXISTS `d_project` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `number` varchar(10) DEFAULT '0',
  `name` varchar(200) DEFAULT '0',
  `promoter` int(11) DEFAULT '0',
  `personCount` int(11) DEFAULT '0',
  `demand` varchar(500) DEFAULT '0',
  `startdate` datetime DEFAULT NULL,
  `lastdate` datetime DEFAULT NULL,
  `content` text,
  `email` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `promoterType` varchar(50) DEFAULT NULL,
  `updatetime` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- -------------------------------------------
-- TABLE `d_studioinfo`
-- -------------------------------------------
DROP TABLE IF EXISTS `d_studioinfo`;
CREATE TABLE IF NOT EXISTS `d_studioinfo` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `info` varchar(500) DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- -------------------------------------------
-- TABLE `d_user`
-- -------------------------------------------
DROP TABLE IF EXISTS `d_user`;
CREATE TABLE IF NOT EXISTS `d_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- -------------------------------------------
-- TABLE DATA d_dict
-- -------------------------------------------
INSERT INTO `d_dict` (`id`,`dcode`,`dname`,`dtype`) VALUES
('1','1','有效','state');
INSERT INTO `d_dict` (`id`,`dcode`,`dname`,`dtype`) VALUES
('2','0','无效','state');
INSERT INTO `d_dict` (`id`,`dcode`,`dname`,`dtype`) VALUES
('3','1','个人','orgtype');
INSERT INTO `d_dict` (`id`,`dcode`,`dname`,`dtype`) VALUES
('4','2','团体','orgtype');
INSERT INTO `d_dict` (`id`,`dcode`,`dname`,`dtype`) VALUES
('5','3','工作室','orgtype');
INSERT INTO `d_dict` (`id`,`dcode`,`dname`,`dtype`) VALUES
('6','0','项目编号','project_num');



-- -------------------------------------------
-- TABLE DATA d_mail
-- -------------------------------------------
INSERT INTO `d_mail` (`id`,`smtphost`,`mailform`,`username`,`password`,`mailformname`,`address`,`subject`,`body`,`updatetime`) VALUES
('1','xx','xx','xx','xx','xx','xx','xx','xx','0000-00-00 00:00:00');



-- -------------------------------------------
-- TABLE DATA d_project
-- -------------------------------------------
INSERT INTO `d_project` (`id`,`number`,`name`,`promoter`,`personCount`,`demand`,`startdate`,`lastdate`,`content`,`email`,`state`,`promoterType`,`updatetime`) VALUES
('2','0','我的一个个项目','0','0','0','0000-00-00 00:00:00','0000-00-00 00:00:00','<p><strong>哈哈哈啊哈<img alt=\"angry\" src=\"http://127.0.0.1/wxm/js/ckeditor/plugins/smiley/images/angry_smile.png\" style=\"height:23px; width:23px\" title=\"angry\" /></strong></p>
','','','','0000-00-00 00:00:00');
INSERT INTO `d_project` (`id`,`number`,`name`,`promoter`,`personCount`,`demand`,`startdate`,`lastdate`,`content`,`email`,`state`,`promoterType`,`updatetime`) VALUES
('3','0','456','0','0','0','0000-00-00 00:00:00','0000-00-00 00:00:00','<p><img alt=\"\" src=\"/wxm/images/upload/Koala.jpg\" style=\"height:768px; width:1024px\" /></p>
','','','','0000-00-00 00:00:00');



-- -------------------------------------------
-- TABLE DATA d_user
-- -------------------------------------------
INSERT INTO `d_user` (`id`,`username`,`password`,`role`) VALUES
('8','admin','1','admin');
INSERT INTO `d_user` (`id`,`username`,`password`,`role`) VALUES
('9','user1','1','user');
INSERT INTO `d_user` (`id`,`username`,`password`,`role`) VALUES
('10','p1','1','manager');



-- -------------------------------------------
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
COMMIT;
-- -------------------------------------------
-- -------------------------------------------
-- END BACKUP
-- -------------------------------------------
