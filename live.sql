/*
Navicat MySQL Data Transfer

Source Server         : Mysql
Source Server Version : 50553
Source Host           : 127.0.0.1:3306
Source Database       : live

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2017-10-08 14:49:17
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for live_channel
-- ----------------------------
DROP TABLE IF EXISTS `live_channel`;
CREATE TABLE `live_channel` (
  `channel_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '频道自增主键',
  `channel_images` varchar(255) COLLATE utf8_bin DEFAULT NULL COMMENT '频道图片路径',
  `channel_name` varchar(30) COLLATE utf8_bin DEFAULT NULL COMMENT '频道名称',
  `user_id` int(11) DEFAULT NULL COMMENT '关联用户表自增id',
  `class_id` int(11) DEFAULT NULL COMMENT '关联频道分类表live_class',
  `channel_recommend` int(11) DEFAULT '2' COMMENT '是否加入首页轮播图推荐,1为是,2为否(默认2)',
  `channel_username` varchar(30) COLLATE utf8_bin DEFAULT NULL COMMENT '主播名称',
  `channel_start` int(11) NOT NULL DEFAULT '0' COMMENT '状态',
  PRIMARY KEY (`channel_id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of live_channel
-- ----------------------------
INSERT INTO `live_channel` VALUES ('5', '/uplod/img/2.jpg', '直播3', '1', '3', '2', '测试直播', '1');
INSERT INTO `live_channel` VALUES ('6', '/uplod/img/2.jpg', '直播4', '2', '4', '2', '测试直播', '1');
INSERT INTO `live_channel` VALUES ('7', '/uplod/img/2.jpg', '直播5', '1', '5', '2', '测试直播', '1');
INSERT INTO `live_channel` VALUES ('8', '/uplod/img/2.jpg', '直播6', '2', '6', '2', '测试直播', '1');
INSERT INTO `live_channel` VALUES ('10', '/uplod/img/2.jpg', '测试直播', '1', '3', '2', '测试直播', '1');
INSERT INTO `live_channel` VALUES ('11', '/uplod/img/2.jpg', '测试直播', '1', '3', '2', '测试直播', '1');
INSERT INTO `live_channel` VALUES ('12', '/uplod/img/2.jpg', '测试直播', '2', '4', '2', '测试直播', '1');
INSERT INTO `live_channel` VALUES ('13', '/uplod/img/2.jpg', '直播1', '1', '5', '2', '测试直播', '1');
INSERT INTO `live_channel` VALUES ('14', '/uplod/img/2.jpg', '直播2', '2', '6', '2', '测试直播', '1');
INSERT INTO `live_channel` VALUES ('15', '/uplod/img/2.jpg', '直播3', '1', '3', '2', '测试直播', '1');
INSERT INTO `live_channel` VALUES ('16', '/uplod/img/2.jpg', '直播4', '2', '4', '2', '测试直播', '1');
INSERT INTO `live_channel` VALUES ('17', '/uplod/img/2.jpg', '直播5', '1', '5', '2', '测试直播', '1');
INSERT INTO `live_channel` VALUES ('18', '/uplod/img/2.jpg', '直播6', '2', '6', '2', '测试直播', '1');
INSERT INTO `live_channel` VALUES ('19', '/uplod/img/2.jpg', '12348888mi', '1', '3', '2', '12348888mi', '0');

-- ----------------------------
-- Table structure for live_class
-- ----------------------------
DROP TABLE IF EXISTS `live_class`;
CREATE TABLE `live_class` (
  `class_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '分类表自增主键',
  `class_name` varchar(30) COLLATE utf8_bin DEFAULT NULL COMMENT '分类名称',
  `class_parent` int(11) DEFAULT '0' COMMENT '分类父级id',
  `class_addTime` int(11) DEFAULT '0' COMMENT '分类添加时间',
  PRIMARY KEY (`class_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of live_class
-- ----------------------------
INSERT INTO `live_class` VALUES ('1', '玩家推荐', '0', '1506639164');
INSERT INTO `live_class` VALUES ('2', '玩家推荐', '0', '1506639164');
INSERT INTO `live_class` VALUES ('3', '网游竞技', '1', '1506639164');
INSERT INTO `live_class` VALUES ('4', '单机热游', '1', '1506639164');
INSERT INTO `live_class` VALUES ('5', '娱乐综艺', '1', '1506639164');
INSERT INTO `live_class` VALUES ('6', '手游休闲', '2', '1506639164');
INSERT INTO `live_class` VALUES ('9', '顶级分类测试', '0', '1507445109');

-- ----------------------------
-- Table structure for live_news
-- ----------------------------
DROP TABLE IF EXISTS `live_news`;
CREATE TABLE `live_news` (
  `news_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '新闻自增主键',
  `news_name` varchar(60) COLLATE utf8_bin DEFAULT NULL COMMENT '新闻标题',
  `news_classId` int(11) DEFAULT NULL COMMENT '新闻分类表关键id',
  `new_tmp` varchar(255) COLLATE utf8_bin DEFAULT NULL COMMENT '新闻静态页路径(新闻内容添加自动生成静态页)',
  `new_addTime` int(11) DEFAULT NULL COMMENT '添加时间',
  `new_start` int(11) DEFAULT '1' COMMENT '新闻状态:1发布;2不发布;3官方活动;4作废(默认1)',
  PRIMARY KEY (`news_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of live_news
-- ----------------------------
INSERT INTO `live_news` VALUES ('1', '新闻标题', '2', '这是路径', '1506649164', '1');
INSERT INTO `live_news` VALUES ('2', '新闻标题', '2', '这是路径', '1506549164', '1');

-- ----------------------------
-- Table structure for live_newsclass
-- ----------------------------
DROP TABLE IF EXISTS `live_newsclass`;
CREATE TABLE `live_newsclass` (
  `newsClass_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '新闻分类自增主键',
  `newsClass_name` varchar(30) COLLATE utf8_bin DEFAULT NULL COMMENT '新闻分类名称',
  PRIMARY KEY (`newsClass_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of live_newsclass
-- ----------------------------
INSERT INTO `live_newsclass` VALUES ('1', '首页');
INSERT INTO `live_newsclass` VALUES ('2', '新闻');
INSERT INTO `live_newsclass` VALUES ('3', '产品');
INSERT INTO `live_newsclass` VALUES ('4', '政策');

-- ----------------------------
-- Table structure for live_notice
-- ----------------------------
DROP TABLE IF EXISTS `live_notice`;
CREATE TABLE `live_notice` (
  `notice_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '节目表自增id',
  `notice_time` int(11) DEFAULT NULL COMMENT '节目播放时间',
  `notice_title` varchar(30) COLLATE utf8_bin DEFAULT NULL COMMENT '预告标题',
  `notice_images` varchar(255) COLLATE utf8_bin DEFAULT NULL COMMENT '节目图片',
  PRIMARY KEY (`notice_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of live_notice
-- ----------------------------
INSERT INTO `live_notice` VALUES ('1', '1506549164', '开播啦', '这是图片路径');

-- ----------------------------
-- Table structure for live_noticeuser
-- ----------------------------
DROP TABLE IF EXISTS `live_noticeuser`;
CREATE TABLE `live_noticeuser` (
  `noticeUser_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '节目预订表自增id',
  `notice_id_d` int(11) DEFAULT NULL COMMENT '节目预告表关联id',
  `notice_user_id` int(11) DEFAULT NULL COMMENT '关联用户表id',
  PRIMARY KEY (`noticeUser_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of live_noticeuser
-- ----------------------------
INSERT INTO `live_noticeuser` VALUES ('1', '1', '1');

-- ----------------------------
-- Table structure for live_usertop
-- ----------------------------
DROP TABLE IF EXISTS `live_usertop`;
CREATE TABLE `live_usertop` (
  `userTop_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '该表自增id',
  `user_id_d` int(11) DEFAULT NULL COMMENT '关联用户表 主播id',
  PRIMARY KEY (`userTop_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of live_usertop
-- ----------------------------

-- ----------------------------
-- Table structure for log
-- ----------------------------
DROP TABLE IF EXISTS `log`;
CREATE TABLE `log` (
  `log_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '访问统计表',
  `log_ip` varchar(30) DEFAULT NULL COMMENT '访客ip',
  `log_u_id` int(11) DEFAULT '0' COMMENT '用户id',
  `log_time` int(11) DEFAULT NULL COMMENT '访客时间',
  PRIMARY KEY (`log_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of log
-- ----------------------------
INSERT INTO `log` VALUES ('1', '127.0.0.1', '1', '1507549164');
INSERT INTO `log` VALUES ('2', '127.0.0.1', '1', '1506149164');

-- ----------------------------
-- Table structure for money
-- ----------------------------
DROP TABLE IF EXISTS `money`;
CREATE TABLE `money` (
  `u_id` int(11) NOT NULL COMMENT '用户id',
  `a_money` int(11) DEFAULT NULL COMMENT '金豆',
  `b_money` int(11) DEFAULT NULL COMMENT '银豆'
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of money
-- ----------------------------
INSERT INTO `money` VALUES ('2', '100', '100');
INSERT INTO `money` VALUES ('1', '100', '11');

-- ----------------------------
-- Table structure for room
-- ----------------------------
DROP TABLE IF EXISTS `room`;
CREATE TABLE `room` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `room_id` int(11) DEFAULT NULL,
  `room_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of room
-- ----------------------------
INSERT INTO `room` VALUES ('1', '1', 'wq');
INSERT INTO `room` VALUES ('2', '2', 'dsfs');
INSERT INTO `room` VALUES ('3', '3', 'dsf sss');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '用户id',
  `username` varchar(20) COLLATE utf8_bin DEFAULT NULL COMMENT '用户名',
  `nickname` varchar(30) COLLATE utf8_bin DEFAULT NULL COMMENT '昵称',
  `u_img` varchar(100) COLLATE utf8_bin DEFAULT NULL COMMENT '用户头像地址',
  `sign` text COLLATE utf8_bin COMMENT '个性签名',
  `sex` tinyint(1) DEFAULT NULL COMMENT '性别',
  `birthday` date DEFAULT NULL COMMENT '生日',
  `home` varchar(30) COLLATE utf8_bin DEFAULT NULL COMMENT '所在地',
  `password` char(32) COLLATE utf8_bin DEFAULT NULL COMMENT '面膜',
  `mynum` int(11) DEFAULT NULL COMMENT '个人积分',
  `tel` char(11) COLLATE utf8_bin DEFAULT NULL COMMENT '手机号',
  `qq_openid` varchar(30) COLLATE utf8_bin DEFAULT NULL COMMENT 'QQ第三方登录openid',
  `weibo_openid` varchar(30) COLLATE utf8_bin DEFAULT NULL COMMENT '微博第三方登录',
  `renren_openid` varchar(30) COLLATE utf8_bin DEFAULT NULL COMMENT '人人网第三方',
  `douban_openid` varchar(30) COLLATE utf8_bin DEFAULT NULL COMMENT '豆瓣第三方',
  `xiaomi_openid` varchar(30) COLLATE utf8_bin DEFAULT NULL COMMENT '小米第三方',
  `tianyi_openid` varchar(30) COLLATE utf8_bin DEFAULT NULL COMMENT '天翼第三方登录',
  `baidu_openid` varchar(30) COLLATE utf8_bin DEFAULT NULL COMMENT '百度第三方登录',
  `user_addTime` int(11) DEFAULT NULL COMMENT '用户注册时间',
  `user_start` int(11) NOT NULL DEFAULT '1' COMMENT '账号状态,1为正常',
  PRIMARY KEY (`u_id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', '张三', '昵称：测试', '/uplod/img/1.jpg', 0xE4B8AAE680A7E7ADBEE5908DE6B58BE8AF95, '1', '2017-09-21', '北京', '123', '123', '18865573256', null, null, null, null, null, null, null, '1506639164', '1');
INSERT INTO `user` VALUES ('2', '李四', null, '/uplod/img/1.jpg', 0xE4B8AAE680A7E7ADBEE5908DE6B58BE8AF95, '1', '2017-09-22', '北京', '123', '123', '18865573256', null, null, null, null, null, null, null, '1506649164', '1');
INSERT INTO `user` VALUES ('3', 'xiao', '李四', '/uplod/img/2.jpg', 0xE4B8AAE680A7E7ADBEE5908DE6B58BE8AF95, '1', '2017-09-28', '北京', '123', '123', '18865573256', '', '', '', '', '', '', '', '1506649164', '1');
INSERT INTO `user` VALUES ('4', '李捷', null, '/uplod/img/1.jpg', 0xE4B8AAE680A7E7ADBEE5908DE6B58BE8AF95, '1', '2017-09-09', '北京', '123', '123', '18865573256', null, null, null, null, null, null, null, '1506649164', '2');
INSERT INTO `user` VALUES ('5', '张三', '昵称：测试', '/uplod/img/1.jpg', 0xE4B8AAE680A7E7ADBEE5908DE6B58BE8AF95, '1', '2017-09-21', '北京', '123', '123', '18865573256', '', '', '', '', '', '', '', '1506639164', '2');
INSERT INTO `user` VALUES ('6', '李四', '', '/uplod/img/1.jpg', 0xE4B8AAE680A7E7ADBEE5908DE6B58BE8AF95, '1', '2017-09-22', '北京', '123', '123', '18865573256', '', '', '', '', '', '', '', '1506649164', '1');
INSERT INTO `user` VALUES ('7', 'xiao', '李四', '/uplod/img/2.jpg', 0xE4B8AAE680A7E7ADBEE5908DE6B58BE8AF95, '1', '2017-09-28', '北京', '123', '123', '18865573256', '', '', '', '', '', '', '', '1506649164', '1');
INSERT INTO `user` VALUES ('8', '李捷', '', '/uplod/img/1.jpg', 0xE4B8AAE680A7E7ADBEE5908DE6B58BE8AF95, '1', '2017-09-09', '北京', '123', '123', '18865573256', '', '', '', '', '', '', '', '1506649164', '1');
INSERT INTO `user` VALUES ('9', '张三', '昵称：测试', '/uplod/img/1.jpg', 0xE4B8AAE680A7E7ADBEE5908DE6B58BE8AF95, '1', '2017-09-21', '北京', '123', '123', '18865573256', '', '', '', '', '', '', '', '1506639164', '2');
INSERT INTO `user` VALUES ('10', '李四', '', '/uplod/img/1.jpg', 0xE4B8AAE680A7E7ADBEE5908DE6B58BE8AF95, '1', '2017-09-22', '北京', '123', '123', '18865573256', '', '', '', '', '', '', '', '1506649164', '1');
INSERT INTO `user` VALUES ('11', 'xiao', '李四', '/uplod/img/2.jpg', 0xE4B8AAE680A7E7ADBEE5908DE6B58BE8AF95, '1', '2017-09-28', '北京', '123', '123', '18865573256', '', '', '', '', '', '', '', '1506649164', '1');
INSERT INTO `user` VALUES ('12', '李捷', '', '/uplod/img/1.jpg', 0xE4B8AAE680A7E7ADBEE5908DE6B58BE8AF95, '1', '2017-09-09', '北京', '123', '123', '18865573256', '', '', '', '', '', '', '', '1506649164', '1');
INSERT INTO `user` VALUES ('13', '张三', '昵称：测试', '/uplod/img/1.jpg', 0xE4B8AAE680A7E7ADBEE5908DE6B58BE8AF95, '1', '2017-09-21', '北京', '123', '123', '18865573256', '', '', '', '', '', '', '', '1506639164', '2');
INSERT INTO `user` VALUES ('14', '李四', '', '/uplod/img/1.jpg', 0xE4B8AAE680A7E7ADBEE5908DE6B58BE8AF95, '1', '2017-09-22', '北京', '123', '123', '18865573256', '', '', '', '', '', '', '', '1506649164', '1');
INSERT INTO `user` VALUES ('15', 'xiao', '李四', '/uplod/img/2.jpg', 0xE4B8AAE680A7E7ADBEE5908DE6B58BE8AF95, '1', '2017-09-28', '北京', '123', '123', '18865573256', '', '', '', '', '', '', '', '1506649164', '1');
INSERT INTO `user` VALUES ('16', '李捷', '', '/uplod/img/1.jpg', 0xE4B8AAE680A7E7ADBEE5908DE6B58BE8AF95, '1', '2017-09-09', '北京', '123', '123', '18865573256', '', '', '', '', '', '', '', '1506649164', '1');

-- ----------------------------
-- Table structure for vip
-- ----------------------------
DROP TABLE IF EXISTS `vip`;
CREATE TABLE `vip` (
  `v_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'vipid',
  `v_type` varchar(30) COLLATE utf8_bin DEFAULT NULL COMMENT '贵族类型',
  PRIMARY KEY (`v_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of vip
-- ----------------------------
INSERT INTO `vip` VALUES ('1', '2');

-- ----------------------------
-- Table structure for watch_history
-- ----------------------------
DROP TABLE IF EXISTS `watch_history`;
CREATE TABLE `watch_history` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '用户id',
  `time` int(11) DEFAULT NULL COMMENT '时间戳',
  `bo_id` int(11) DEFAULT NULL COMMENT '主播id',
  PRIMARY KEY (`u_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of watch_history
-- ----------------------------
