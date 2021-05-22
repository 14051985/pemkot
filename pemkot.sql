# Host: localhost  (Version 8.0.22)
# Date: 2021-05-22 09:25:17
# Generator: MySQL-Front 6.1  (Build 1.26)


#
# Structure for table "p_muser"
#

DROP TABLE IF EXISTS `p_muser`;
CREATE TABLE `p_muser` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `strUsername` varchar(255) NOT NULL DEFAULT '',
  `strPassword` varchar(255) NOT NULL DEFAULT '',
  `stsAktif` char(1) NOT NULL DEFAULT '1',
  `usrCreate` varchar(255) NOT NULL DEFAULT 'SYSTEM',
  `dtCreate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

#
# Data for table "p_muser"
#

