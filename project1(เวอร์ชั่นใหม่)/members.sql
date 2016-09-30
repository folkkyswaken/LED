-- Adminer 4.2.2 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `members`;
CREATE TABLE `members` (
  `memberId` int(10) NOT NULL AUTO_INCREMENT,
  `memberName` varchar(50) NOT NULL,
  `memberPass` varchar(50) NOT NULL,
  PRIMARY KEY (`memberId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `members` (`memberId`, `memberName`, `memberPass`) VALUES
(1,	'admin',	'12345');

-- 2016-02-15 05:43:30
