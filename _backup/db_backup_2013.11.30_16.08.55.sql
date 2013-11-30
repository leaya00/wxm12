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
  `lastdate` datetime DEFAULT NULL,
  `content` text,
  `updatetime` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
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
-- TABLE DATA d_mail
-- -------------------------------------------
INSERT INTO `d_mail` (`id`,`smtphost`,`mailform`,`username`,`password`,`mailformname`,`address`,`subject`,`body`,`updatetime`) VALUES
('1','xx','xx','xx','xx','xx','xx','xx','xx','0000-00-00 00:00:00');



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
