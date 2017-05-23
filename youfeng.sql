/*
 Navicat MySQL Data Transfer

 Source Server         : weichuang
 Source Server Version : 50505
 Source Host           : localhost
 Source Database       : youfeng

 Target Server Version : 50505
 File Encoding         : utf-8

 Date: 05/23/2017 15:00:58 PM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `t_address`
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='SASD';

-- ----------------------------
--  Records of `t_address`
-- ----------------------------
BEGIN;
INSERT INTO `t_address` VALUES ('2', '1', 'baidu', 'laoli', 'laoli', '东风南路', null, null), ('3', '1', 'baidu', 'laoli', '123123312', '东风南路', null, null), ('4', '1', 'baidu', 'laoli', '123123312', '东风南路', null, null);
COMMIT;

-- ----------------------------
--  Table structure for `t_cart`
-- ----------------------------
DROP TABLE IF EXISTS `t_cart`;
CREATE TABLE `t_cart` (
  `cart_id` int(11) NOT NULL COMMENT '购物车id',
  `product_id` int(11) NOT NULL COMMENT '商品id',
  `quantity` int(11) NOT NULL COMMENT '商品数量',
  `user_id` int(11) NOT NULL COMMENT '用户id',
  PRIMARY KEY (`cart_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `t_invoice`
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
--  Table structure for `t_message`
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
--  Table structure for `t_order`
-- ----------------------------
DROP TABLE IF EXISTS `t_order`;
CREATE TABLE `t_order` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_no` int(50) NOT NULL COMMENT '订单号',
  `order_status` varchar(255) NOT NULL COMMENT '订单状态',
  `trade_no` int(50) NOT NULL COMMENT '订单交易号',
  `order_memo` varchar(500) NOT NULL COMMENT '订单备注',
  `order_payway` varchar(255) NOT NULL COMMENT '订单方式',
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `t_product`
-- ----------------------------
DROP TABLE IF EXISTS `t_product`;
CREATE TABLE `t_product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '商品id',
  `product_title` varchar(255) NOT NULL COMMENT '商品标题',
  `product_quantity` int(11) NOT NULL COMMENT '商品数量',
  `product_standard` varchar(255) NOT NULL COMMENT '商品规格',
  `product_type` varchar(255) NOT NULL COMMENT '商品型号',
  `product_description` varchar(500) NOT NULL COMMENT '商品描述',
  `product_price` int(11) NOT NULL DEFAULT '0' COMMENT '商品价格',
  `product_sellnum` int(11) NOT NULL COMMENT '商品销量',
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `t_product_img`
-- ----------------------------
DROP TABLE IF EXISTS `t_product_img`;
CREATE TABLE `t_product_img` (
  `img_id` int(11) NOT NULL COMMENT '图片id',
  `product_id` int(11) NOT NULL COMMENT '商品id',
  `img_src` varchar(255) NOT NULL COMMENT '图片路径',
  `is_main` int(11) NOT NULL DEFAULT '0' COMMENT '是否为主图（1为是9为否）',
  PRIMARY KEY (`img_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `t_user`
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

SET FOREIGN_KEY_CHECKS = 1;
