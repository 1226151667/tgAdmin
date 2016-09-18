/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : tg1

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2016-09-18 23:44:40
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for link
-- ----------------------------
DROP TABLE IF EXISTS `link`;
CREATE TABLE `link` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pId` int(11) NOT NULL COMMENT '活动页面id',
  `keyword` varchar(255) NOT NULL COMMENT '关键词',
  `parameter` varchar(32) NOT NULL COMMENT '参数：唯一性',
  `form` tinyint(2) NOT NULL COMMENT '0-7   百度,360,搜狗,新浪扶翼,百度网盟,粉丝通,神马,陌陌',
  `tm` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of link
-- ----------------------------
INSERT INTO `link` VALUES ('1', '2', '贵金属', '3d5f6e2x7k4l3l3k4j3d5f6e2x7k4l3l', '1', '2016-09-16 13:42:07');

-- ----------------------------
-- Table structure for page
-- ----------------------------
DROP TABLE IF EXISTS `page`;
CREATE TABLE `page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL COMMENT '页面名称',
  `url` varchar(255) NOT NULL COMMENT '页面地址',
  `tm` datetime NOT NULL COMMENT '添加时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='页面表';

-- ----------------------------
-- Records of page
-- ----------------------------
INSERT INTO `page` VALUES ('1', '贵金属行情分析系统wap', 'http://zhibo.fcdongxiao.cn', '2016-09-17 15:40:07');
INSERT INTO `page` VALUES ('2', '贵金属行情分析系统pc', 'http://zhibo.fcdongxiao.cn', '2016-09-17 15:40:32');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `phoneArea` varchar(50) NOT NULL COMMENT '手机归属地',
  `keyword` varchar(255) NOT NULL COMMENT '搜索词',
  `ip` varchar(50) NOT NULL,
  `ipArea` varchar(50) NOT NULL,
  `num` int(11) NOT NULL COMMENT '多少次',
  `tm` datetime NOT NULL,
  `lId` int(11) NOT NULL,
  `isChecked` tinyint(2) NOT NULL COMMENT '0:未验证    1：已验证',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', '周先生', '1862156569', '安徽-阜阳 中国联通', '贵金属', '60.222.60.181', '山西省-运城市-万荣县', '1', '2016-09-16 13:34:11', '1', '0');
