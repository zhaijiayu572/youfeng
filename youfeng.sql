/*
Navicat MySQL Data Transfer

Source Server         : test
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : youfeng

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-05-16 21:46:15
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for t_address
-- ----------------------------
DROP TABLE IF EXISTS `t_address`;
CREATE TABLE `t_address` (
  `addr_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL COMMENT '用户id',
  `addr_company` varchar(255) DEFAULT NULL COMMENT '联系公司',
  `addr_name` varchar(255) DEFAULT NULL COMMENT '联系人',
  `addr_phone` varchar(255) DEFAULT NULL COMMENT '手机',
  `addr_addr` varchar(255) DEFAULT NULL COMMENT '详细地址',
  `addr_postal` varchar(255) DEFAULT NULL COMMENT '邮政编码',
  `addr_ismain` varchar(255) DEFAULT NULL COMMENT '是否为默认地址',
  PRIMARY KEY (`addr_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='SASD';

-- ----------------------------
-- Records of t_address
-- ----------------------------
INSERT INTO `t_address` VALUES ('1', null, null, null, null, null, null, null);

-- ----------------------------
-- Table structure for t_invoice
-- ----------------------------
DROP TABLE IF EXISTS `t_invoice`;
CREATE TABLE `t_invoice` (
  `invoice_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL COMMENT '用户id',
  `invoice_type` varchar(255) DEFAULT NULL COMMENT '发票类型',
  `invoice_head` varchar(255) DEFAULT NULL COMMENT '发票抬头',
  `invoice_reg` varchar(255) DEFAULT NULL COMMENT '税务登记号',
  `invoice_bank` varchar(255) DEFAULT NULL COMMENT '开户银行',
  `invoice_bankAcount` varchar(255) DEFAULT NULL COMMENT '银行账户',
  `invoice_company_phone` varchar(255) DEFAULT NULL COMMENT '公司电话',
  `invoice_company_addr` varchar(255) DEFAULT NULL COMMENT '公司注册地址',
  `invoice_name` varchar(255) DEFAULT NULL COMMENT '收票人',
  `invoice_phone` varchar(255) DEFAULT NULL COMMENT '收票人电话',
  `invoice_addr` varchar(255) DEFAULT NULL COMMENT '发票邮寄地址',
  `invoice_postal` varchar(255) DEFAULT NULL COMMENT '邮政编码',
  PRIMARY KEY (`invoice_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_invoice
-- ----------------------------

-- ----------------------------
-- Table structure for t_message
-- ----------------------------
DROP TABLE IF EXISTS `t_message`;
CREATE TABLE `t_message` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `message_title` varchar(255) DEFAULT NULL COMMENT '留言标题',
  `message_content` varchar(255) DEFAULT NULL COMMENT '留言内容',
  `message_type` varchar(255) DEFAULT NULL COMMENT '留言类型',
  PRIMARY KEY (`message_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_message
-- ----------------------------

-- ----------------------------
-- Table structure for t_user
-- ----------------------------
DROP TABLE IF EXISTS `t_user`;
CREATE TABLE `t_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_accout` varchar(255) DEFAULT NULL COMMENT '账户',
  `user_pass` varchar(255) DEFAULT NULL COMMENT '密码',
  `user_admin` varchar(255) DEFAULT NULL COMMENT '是否为管理员',
  `user_company` varchar(255) DEFAULT NULL COMMENT '公司名称',
  `user_name` varchar(255) DEFAULT NULL COMMENT '联系人',
  `user_phone` varchar(255) DEFAULT NULL COMMENT '手机',
  `user_fax` varchar(255) DEFAULT NULL COMMENT '传真',
  `user_email` varchar(255) DEFAULT NULL COMMENT '邮箱',
  `user_qq` varchar(255) DEFAULT NULL COMMENT 'qq',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_user
-- ----------------------------
