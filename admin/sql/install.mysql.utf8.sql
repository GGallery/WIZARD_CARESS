/*
Navicat MySQL Data Transfer

Source Server         : Dekra
Source Server Version : 50555
Source Host           : 31.14.141.98:3306
Source Database       : site_dbglobal

Target Server Type    : MYSQL
Target Server Version : 50555
File Encoding         : 65001

Date: 2017-08-29 16:59:37
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `jml3_wizard_info`
-- ----------------------------
DROP TABLE IF EXISTS `jml3_wizard_info`;
CREATE TABLE `#__wizard_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `info` text,
  `reg_type` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `approved` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;
