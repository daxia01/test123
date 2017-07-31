/*
Navicat MySQL Data Transfer

Source Server         : 本地数据库
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : db_oa

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2017-07-27 09:43:40
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `sp_dept`
-- ----------------------------
DROP TABLE IF EXISTS `sp_dept`;
CREATE TABLE `sp_dept` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `pid` int(11) NOT NULL DEFAULT '0',
  `sort` int(11) NOT NULL DEFAULT '50',
  `remark` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sp_dept
-- ----------------------------
INSERT INTO `sp_dept` VALUES ('2', '财务部', '0', '3', '');
INSERT INTO `sp_dept` VALUES ('22', '教育部', '0', '11', '');
INSERT INTO `sp_dept` VALUES ('41', '01-生产线', '38', '18', '01-生产线');
INSERT INTO `sp_dept` VALUES ('1', '管理部', '0', '2', '高级管理层');
INSERT INTO `sp_dept` VALUES ('38', '产品部', '0', '21', '生产线操作');

-- ----------------------------
-- Table structure for `sp_doc`
-- ----------------------------
DROP TABLE IF EXISTS `sp_doc`;
CREATE TABLE `sp_doc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL COMMENT '公文标题',
  `filepath` varchar(255) DEFAULT NULL COMMENT '附件存储路径',
  `filename` varchar(255) DEFAULT NULL COMMENT '附件原名',
  `hasfile` smallint(1) NOT NULL DEFAULT '0' COMMENT '是否存在附件',
  `content` text COMMENT '公文内容',
  `author` varchar(40) NOT NULL COMMENT '作者',
  `addtime` int(11) NOT NULL COMMENT '添加时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sp_doc
-- ----------------------------
INSERT INTO `sp_doc` VALUES ('2', '天蚕土豆入选福布斯中国30岁以下精英榜 堂姐：嘚瑟', null, null, '0', '天蚕土豆入选福布斯中国30岁以下精英榜 堂姐：嘚瑟', 'admin', '1500788920');
INSERT INTO `sp_doc` VALUES ('3', '非洲男孩路边售卖的这种“零食” 看着就渗人居然还有人吃？！', null, null, '0', '蓝瘦 香菇', 'daixa', '1500789431');
INSERT INTO `sp_doc` VALUES ('4', '非洲男孩路边售卖的这种“零食” 看着就渗人居然还有人吃？！', null, null, '0', '非洲男孩路边售卖的这种“零食” 看着就渗人居然还有人吃？！', 'daixa', '1500791488');
INSERT INTO `sp_doc` VALUES ('10', '是男人就下100层', null, null, '0', '&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20170723/1500807778504289.jpg&quot; title=&quot;1500807778504289.jpg&quot; alt=&quot;Koala.jpg&quot;/&gt;&lt;/p&gt;', 'auto', '1500807781');
INSERT INTO `sp_doc` VALUES ('16', '东莞不需要眼泪', '/Public/Upload/2017-07-24/59756df04a76c.jpg', 'Hydrangeas.jpg', '1', '&lt;p&gt;&lt;img src=&quot;http://img.baidu.com/hi/jx2/j_0002.gif&quot;/&gt;&lt;/p&gt;', '韩宇', '1500868080');
INSERT INTO `sp_doc` VALUES ('17', '陈根是傻逼', '/Public/Upload/2017-07-26/5978387fd0190.jpg', 'Koala.jpg', '1', '&lt;p&gt;陈根就是傻逼&lt;/p&gt;', 'daxia', '1501051007');
INSERT INTO `sp_doc` VALUES ('18', '陈根你好', '/Public/Upload/2017-07-26/597838aa91764.jpg', 'Penguins.jpg', '1', '&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20170726/1501051048106275.jpg&quot; title=&quot;1501051048106275.jpg&quot; alt=&quot;Koala.jpg&quot;/&gt;&lt;/p&gt;', 'daxia', '1501051050');
INSERT INTO `sp_doc` VALUES ('19', '陈根是傻逼', '/Public/Upload/2017-07-26/5978a5a5d6fb3.jpg', 'Penguins.jpg', '1', '&lt;p&gt;&lt;span style=&quot;font-family: 黑体, SimHei; font-size: 24px;&quot;&gt;shide ,就是这样&lt;img src=&quot;http://img.baidu.com/hi/jx2/j_0003.gif&quot;/&gt;&lt;/span&gt;&lt;/p&gt;', 'daxia', '1501078949');

-- ----------------------------
-- Table structure for `sp_email`
-- ----------------------------
DROP TABLE IF EXISTS `sp_email`;
CREATE TABLE `sp_email` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `from_id` int(11) NOT NULL COMMENT '发送者id',
  `to_id` int(11) NOT NULL COMMENT '接收者id',
  `title` varchar(50) NOT NULL COMMENT '标题',
  `file` varchar(255) DEFAULT NULL COMMENT '文件',
  `filename` varchar(255) NOT NULL COMMENT '文件名字',
  `hasfile` smallint(1) NOT NULL DEFAULT '0' COMMENT '是否有文件',
  `content` text COMMENT '内容',
  `addtime` int(11) DEFAULT NULL COMMENT '添加时间',
  `isread` smallint(1) DEFAULT '0' COMMENT '是否读',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sp_email
-- ----------------------------
INSERT INTO `sp_email` VALUES ('11', '1', '3', '大大好', '/Public/Upload/2017-07-25/5976d7948deb3.jpg', 'Koala.jpg', '1', '大大你好', '1500960660', '1');
INSERT INTO `sp_email` VALUES ('10', '1', '8', '大黄', '/Public/Upload/2017-07-25/5976d777718bd.jpg', 'Penguins.jpg', '1', '大黄是我的好朋友', '1500960631', '1');
INSERT INTO `sp_email` VALUES ('9', '1', '8', 'daxia', '/Public/Upload/2017-07-25/5976d572d256b.jpg', 'Penguins.jpg', '1', 'daxia', '1500960114', '0');
INSERT INTO `sp_email` VALUES ('12', '1', '8', '加班', '/Public/Upload/2017-07-26/59782422cb2c8.jpg', 'Chrysanthemum.jpg', '1', '今天加班到9点', '1501045794', '1');

-- ----------------------------
-- Table structure for `sp_user`
-- ----------------------------
DROP TABLE IF EXISTS `sp_user`;
CREATE TABLE `sp_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) NOT NULL,
  `password` char(32) NOT NULL,
  `nickname` varchar(40) NOT NULL,
  `truename` varchar(40) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `birthday` date NOT NULL,
  `tel` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `remark` varchar(255) DEFAULT NULL,
  `addtime` int(11) NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sp_user
-- ----------------------------
INSERT INTO `sp_user` VALUES ('1', 'admin', '123456', 'admin', 'admin', '1', '男', '2017-07-20', '10010', '1@123.com', null, '1464167030', '1');
INSERT INTO `sp_user` VALUES ('2', 'laowang', '123', 'laowang', 'laowang', '22', '男', '2017-07-20', '10086', '2@123.com', null, '1470000000', null);
INSERT INTO `sp_user` VALUES ('3', '大侠', '123', '侠', '大', '38', '男', '2017-07-19', '1111', '123@qq.com', null, '1500629827', null);
INSERT INTO `sp_user` VALUES ('6', 'fire', '0123', '汪汪', '汪生', '41', '男', '2017-06-25', '1380013800', '142@123.com', '123', '1500688951', null);
INSERT INTO `sp_user` VALUES ('8', '汪汪', '45', '大黄', '汪', '22', '男', '2017-06-26', '123', '123', '大黄', '1500704690', '2');
