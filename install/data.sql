/*
Navicat MySQL Data Transfer
Source Server         : localhost_3306
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : max
Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001
Date: 2020-05-25 14:02:20
*/
SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for mkcms_ad
-- ----------------------------
DROP TABLE IF EXISTS `mkcms_ad`;
CREATE TABLE `mkcms_ad` (
  `id` smallint(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `pic` text,
  `catid` varchar(255) DEFAULT NULL,
  `miaoshu` varchar(255) DEFAULT NULL,
  `picurl` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mkcms_ad`
--

INSERT INTO `mkcms_ad` VALUES (1,'广告演示',NULL,'<li style=\"background-color: #fff;box-shadow: 0px 0px 10px #dedede;padding: 5px;margin-top: 5px;margin-bottom: 5px;\" class=\"col-sm-2 col-xs-1\">\r\n<a href=\"#\" target=\"_blank\"><img src=\"images/guanggao.gif\" style=\"width:100%; border-radius: 10px;\" alt=\"广告合作联系站长QQ：88888888\"></a>\r\n</li>\r\n<li style=\"background-color: #fff;box-shadow: 0px 0px 10px #dedede;padding: 5px;margin-top: 5px;margin-bottom: 5px;\" class=\"col-sm-2 col-xs-1\">\r\n<a href=\"#\" target=\"_blank\"><img src=\"images/guanggao.gif\" style=\"width:100%; border-radius: 10px;\" alt=\"广告合作联系站长QQ：88888888\"></a>\r\n</li>','2',NULL,NULL,NULL);

-- ----------------------------
-- Table structure for mkcms_adclass
-- ----------------------------
DROP TABLE IF EXISTS `mkcms_adclass`;
CREATE TABLE `mkcms_adclass` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mkcms_adclass
-- ----------------------------
INSERT INTO `mkcms_adclass` VALUES ('1', '播放前广告');
INSERT INTO `mkcms_adclass` VALUES ('2', '首页公告下方广告');
INSERT INTO `mkcms_adclass` VALUES ('3', '首页美女视听上方广告');
INSERT INTO `mkcms_adclass` VALUES ('4', '首页最新电影上方广告');
INSERT INTO `mkcms_adclass` VALUES ('5', '首页热播剧集上方广告');
INSERT INTO `mkcms_adclass` VALUES ('6', '首页影视资讯上方广告');
INSERT INTO `mkcms_adclass` VALUES ('7', '首页最新综艺上方广告');
INSERT INTO `mkcms_adclass` VALUES ('8', '首页美女直播上方广告');
INSERT INTO `mkcms_adclass` VALUES ('9', '首页最新动漫上方广告');
INSERT INTO `mkcms_adclass` VALUES ('10', '友情链接上方广告');
INSERT INTO `mkcms_adclass` VALUES ('11', '电影栏目页广告');
INSERT INTO `mkcms_adclass` VALUES ('12', '剧集栏目页广告');
INSERT INTO `mkcms_adclass` VALUES ('13', '动漫栏目页广告');
INSERT INTO `mkcms_adclass` VALUES ('14', '综艺栏目页广告');
INSERT INTO `mkcms_adclass` VALUES ('15', 'YY栏目页广告');
INSERT INTO `mkcms_adclass` VALUES ('16', '娱乐栏目页广告');
INSERT INTO `mkcms_adclass` VALUES ('17', '音乐栏目页广告');
INSERT INTO `mkcms_adclass` VALUES ('18', '搞笑栏目页广告');
INSERT INTO `mkcms_adclass` VALUES ('19', '音乐MV栏目页广告');
INSERT INTO `mkcms_adclass` VALUES ('20', '电视直播页面广告');
INSERT INTO `mkcms_adclass` VALUES ('21', '尝鲜栏目页面广告');
INSERT INTO `mkcms_adclass` VALUES ('22', '播放页排行榜下方广告');

-- ----------------------------
-- Table structure for mkcms_book
-- ----------------------------
DROP TABLE IF EXISTS `mkcms_book`;
CREATE TABLE `mkcms_book` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text,
  `userid` varchar(11) DEFAULT NULL,
  `Reply` text,
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mkcms_book
-- ----------------------------

-- ----------------------------
-- Table structure for mkcms_fav
-- ----------------------------
DROP TABLE IF EXISTS `mkcms_fav`;
CREATE TABLE `mkcms_fav` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `userid` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mkcms_fav
-- ----------------------------

-- ----------------------------
-- Table structure for mkcms_link
-- ----------------------------
DROP TABLE IF EXISTS `mkcms_link`;
CREATE TABLE `mkcms_link` (
  `l_id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `l_name` varchar(64) NOT NULL DEFAULT '',
  `l_url` varchar(255) NOT NULL DEFAULT '',
  `l_logo` varchar(255) NOT NULL DEFAULT '',
  `l_type` tinyint(1) NOT NULL DEFAULT '0',
  `l_sort` smallint(6) NOT NULL DEFAULT '0',
  PRIMARY KEY (`l_id`),
  KEY `l_sort` (`l_sort`),
  KEY `l_type` (`l_type`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mkcms_link
-- ----------------------------
INSERT INTO `mkcms_link` VALUES (1,'丫同乐影视网','http://www.yatongle.com','',0,1);
-- ----------------------------
-- Table structure for mkcms_manager
-- ----------------------------
DROP TABLE IF EXISTS `mkcms_manager`;
CREATE TABLE `mkcms_manager` (
  `m_id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `m_name` varchar(32) NOT NULL DEFAULT '',
  `m_password` varchar(32) NOT NULL DEFAULT '',
  `m_levels` varchar(32) NOT NULL DEFAULT '',
  `m_random` varchar(32) NOT NULL DEFAULT '',
  `m_status` tinyint(1) NOT NULL DEFAULT '0',
  `m_logintime` int(10) NOT NULL DEFAULT '0',
  `m_loginip` int(15) NOT NULL DEFAULT '0',
  `m_loginnum` smallint(6) NOT NULL DEFAULT '0',
  PRIMARY KEY (`m_id`),
  KEY `m_status` (`m_status`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mkcms_manager
-- ----------------------------
INSERT INTO `mkcms_manager` VALUES ('1', 'admin', 'admin', 'b,c,d,e,f,g,h,i,j', '897de67740645ef418d8915547298d4c', '1', '1503380295', '2130706433', '0');

-- ----------------------------
-- Table structure for mkcms_nav
-- ----------------------------
DROP TABLE IF EXISTS `mkcms_nav`;
CREATE TABLE `mkcms_nav` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `n_name` varchar(255) DEFAULT NULL,
  `n_url` varchar(255) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mkcms_nav
-- ----------------------------

-- ----------------------------
-- Table structure for mkcms_play
-- ----------------------------
DROP TABLE IF EXISTS `mkcms_play`;
CREATE TABLE `mkcms_play` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `userid` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for mkcms_slideshow
-- ----------------------------
DROP TABLE IF EXISTS `mkcms_slideshow`;
CREATE TABLE `mkcms_slideshow` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `s_name` varchar(255) DEFAULT NULL,
  `s_parent` varchar(255) DEFAULT NULL,
  `s_order` int(11) DEFAULT NULL,
  `s_url` varchar(255) DEFAULT NULL,
  `s_picture` varchar(255) DEFAULT NULL,
  `s_content` longtext,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for mkcms_system
-- ----------------------------
DROP TABLE IF EXISTS `mkcms_system`;
CREATE TABLE `mkcms_system` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `s_name` varchar(255) DEFAULT NULL,
  `s_domain` varchar(255) DEFAULT NULL,
  `s_seoname` varchar(255) DEFAULT NULL,
  `s_keywords` varchar(255) DEFAULT NULL,
  `s_description` varchar(255) DEFAULT NULL,
  `s_cache` varchar(255) DEFAULT NULL,
  `s_wei` varchar(255) DEFAULT NULL,
  `s_user` varchar(255) DEFAULT NULL,
  `s_slow` varchar(255) DEFAULT NULL,
  `s_logo` varchar(255) DEFAULT NULL,
  `s_weixin` varchar(255) DEFAULT NULL,
  `s_dashang` varchar(255) DEFAULT NULL,
  `s_mjk` varchar(255) DEFAULT NULL,
  `s_jiekou` text,
  `s_copyright` text,
  `s_changyan` text,
  `s_alipay` varchar(255) DEFAULT NULL,
  `s_appid` varchar(255) DEFAULT NULL,
  `s_appkey` varchar(255) DEFAULT NULL,
  `s_shoukuan` varchar(255) DEFAULT NULL,
  `s_qqun` varchar(255) DEFAULT NULL,
  `s_token` varchar(255) DEFAULT NULL,
  `s_template` varchar(255) DEFAULT NULL,
  `s_tongji` text,
  `s_qianxian` varchar(255) DEFAULT NULL,
  `s_dianying` varchar(255) DEFAULT NULL,
  `s_dianshi` varchar(255) DEFAULT NULL,
  `s_zongyi` varchar(255) DEFAULT NULL,
  `s_dongman` varchar(255) DEFAULT NULL,
  `s_tuiguang` varchar(255) DEFAULT NULL,
  `s_shoufei` text,
  `s_cishu` varchar(255) DEFAULT NULL,
  `s_gx` varchar(255) DEFAULT NULL,
  `s_hong` varchar(255) DEFAULT NULL,
  `s_gonggao` text,
  `s_bofang` varchar(255) DEFAULT NULL,
  `s_guanzhu` text,
  `s_fengmian` varchar(255) DEFAULT NULL,
  `s_mail` varchar(255) DEFAULT NULL,
  `s_smtp` varchar(255) DEFAULT NULL,
  `s_muser` varchar(255) DEFAULT NULL,
  `s_mpwd` varchar(255) DEFAULT NULL,
  `s_wappid` varchar(255) DEFAULT NULL,
  `s_wkey` varchar(255) DEFAULT NULL,
  `s_tixing` varchar(255) DEFAULT NULL,
  `s_appewm` varchar(255) DEFAULT NULL,
  `s_appbt` varchar(255) DEFAULT NULL,
  `s_apppic` varchar(255) DEFAULT NULL,
  `s_appurl` varchar(255) DEFAULT NULL,
  `s_gg` varchar(255) DEFAULT NULL,
  `s_hctime` varchar(255) DEFAULT NULL,
  `s_beijing` varchar(255) DEFAULT NULL,
  `s_dianyingnew` varchar(255) DEFAULT NULL,
  `s_dongmannew` varchar(255) DEFAULT NULL,
  `s_zongyinew` varchar(255) DEFAULT NULL,
  `s_zhifu` varchar(255) DEFAULT NULL,
  `s_tuijian` text,
  `s_wxguanzhu` varchar(255) DEFAULT NULL,
  `s_smsname` varchar(255) DEFAULT NULL,
  `s_smspass` varchar(255) DEFAULT NULL,
  `s_miaoshu` varchar(255) DEFAULT NULL,
  `s_hz` varchar(255) DEFAULT NULL,
  `s_yq` varchar(255) DEFAULT NULL,
  `s_autoqx` varchar(255) DEFAULT NULL,
  `s_mv` varchar(255) DEFAULT NULL,
  `s_zixun` varchar(255) DEFAULT NULL,
  `s_yy` varchar(255) DEFAULT NULL,
  `s_cxzy` varchar(255) DEFAULT NULL,
  `s_tancgonggao` text,
  `s_tancurl` varchar(255) DEFAULT NULL,
  `s_tanchuangfenzhong` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mkcms_system
-- ----------------------------
INSERT INTO `mkcms_system` VALUES (1,'在线影视','http://xxx.com/','在线影视 - 在线免费高清电影！','电影,视频大全,在线高清电影,付费电影,免费电影,剧集,电影,在线观看,VIP高清电影直播','在线影视，是专门做剧集,电影等在线播放服务，本页面提供电影的相关内容。','0','1','0','0','/images/logo.png','','','http://api.3jx.top/vip/?url=','官网$https://api.3jx.top/vip/?url=','在线影院源码程序仅供PHP学习使用，禁止用于运营非法盈利<br />\r\n在线影院不承担任何由于个人原因非法运盈所引起的争议和法律责任<br />\r\n本网站内容收集于互联网，本站只提供web页面服务,并不提供影片资源存储\录制、上传,播放功能<br />\r\nCopyright &copy;&nbsp; 在线影视 版权所有','','','','','','','','default','','1','1','1','1','1','0','','5','1','0','公告：欢迎光临在线影院，建议手机安装app观看，为了本站的收入，广告是必不可少的，请点击一下广告！让本站走的更远！','10',NULL,NULL,'0','ssl://smtp.163.com','','',NULL,NULL,'','','','','','1','10','','','','','1',NULL,NULL,'','','0','1','1','1','1','1','1','http://www.123ku.com/inc/feifei3.4/','<h2 style=\"color: #FF00FF;\">今日公告</h2>搜不到资源？\" <a href=\"/book.html/"><span style=\"color:#ff5454\">点我反馈问题</span></a>\"','/book.html','60');

-- ----------------------------
-- Table structure for mkcms_user
-- ----------------------------
DROP TABLE IF EXISTS `mkcms_user`;
CREATE TABLE `mkcms_user` (
  `u_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `u_qid` varchar(32) NOT NULL DEFAULT '',
  `u_name` varchar(32) NOT NULL DEFAULT '',
  `u_password` varchar(32) NOT NULL DEFAULT '',
  `u_qq` varchar(16) NOT NULL DEFAULT '',
  `u_email` varchar(32) NOT NULL DEFAULT '',
  `u_phone` varchar(16) NOT NULL DEFAULT '',
  `u_status` tinyint(1) NOT NULL DEFAULT '0',
  `u_flag` tinyint(1) NOT NULL DEFAULT '0',
  `u_question` varchar(255) NOT NULL DEFAULT '',
  `u_answer` varchar(255) NOT NULL DEFAULT '',
  `u_group` smallint(6) NOT NULL DEFAULT '0',
  `u_points` smallint(6) NOT NULL DEFAULT '0',
  `u_regtime` char(255) NOT NULL DEFAULT '0',
  `u_logintime` char(255) NOT NULL DEFAULT '0',
  `u_loginnum` smallint(6) NOT NULL DEFAULT '0',
  `u_extend` smallint(6) NOT NULL DEFAULT '0',
  `u_loginip` char(15) NOT NULL DEFAULT '0',
  `u_random` varchar(32) NOT NULL DEFAULT '',
  `u_fav` text NOT NULL,
  `u_plays` text NOT NULL,
  `u_downs` text NOT NULL,
  `u_start` int(10) NOT NULL DEFAULT '0',
  `u_end` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`u_id`),
  KEY `u_group` (`u_group`),
  KEY `u_status` (`u_status`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for mkcms_userka
-- ----------------------------

DROP TABLE IF EXISTS `mkcms_userka`;
CREATE TABLE `mkcms_userka` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `day` varchar(255) DEFAULT NULL,
  `money` varchar(255) DEFAULT NULL,
  `jifen` varchar(255) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mkcms_userka
-- ----------------------------
INSERT INTO `mkcms_userka` VALUES ('1', '包月会员', '30', '5', '50', '2');

-- ----------------------------
-- Table structure for mkcms_user_card
-- ----------------------------
DROP TABLE IF EXISTS `mkcms_user_card`;
CREATE TABLE `mkcms_user_card` (
  `c_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `c_number` varchar(16) NOT NULL DEFAULT '',
  `c_pass` varchar(8) NOT NULL DEFAULT '' COMMENT '分类',
  `c_money` int(11) NOT NULL DEFAULT '0' COMMENT '天数',
  `c_used` tinyint(1) NOT NULL DEFAULT '0',
  `c_sale` tinyint(1) NOT NULL DEFAULT '0',
  `c_user` varchar(255) DEFAULT '0',
  `c_addtime` int(10) NOT NULL DEFAULT '0',
  `c_usetime` int(10) NOT NULL DEFAULT '0',
  `c_userid` int(11) DEFAULT NULL,
  PRIMARY KEY (`c_id`),
  KEY `c_used` (`c_used`),
  KEY `c_sale` (`c_sale`),
  KEY `c_user` (`c_user`),
  KEY `c_addtime` (`c_addtime`),
  KEY `c_usetime` (`c_usetime`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;


-- ----------------------------
-- Table structure for mkcms_user_cardclass
-- ----------------------------
DROP TABLE IF EXISTS `mkcms_user_cardclass`;
CREATE TABLE `mkcms_user_cardclass` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `card_id` varchar(255) DEFAULT NULL,
  `num` int(11) DEFAULT NULL,
  `day` int(11) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for mkcms_user_group
-- ----------------------------
DROP TABLE IF EXISTS `mkcms_user_group`;
CREATE TABLE `mkcms_user_group` (
  `ug_id` smallint(6) NOT NULL AUTO_INCREMENT,
  `ug_name` varchar(32) NOT NULL DEFAULT '',
  `ug_type` varchar(255) NOT NULL DEFAULT '',
  `ug_popedom` varchar(32) NOT NULL DEFAULT '',
  `ug_upgrade` smallint(6) NOT NULL DEFAULT '0',
  `ug_popvalue` smallint(6) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ug_id`),
  KEY `ug_upgrade` (`ug_upgrade`),
  KEY `ug_popvalue` (`ug_popvalue`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mkcms_user_group
-- ----------------------------
INSERT INTO `mkcms_user_group` VALUES ('1', '普通会员', '', '', '0', '1');
INSERT INTO `mkcms_user_group` VALUES ('2', '金牌会员', '', '', '10', '0');
INSERT INTO `mkcms_user_group` VALUES ('3', '超级会员', '', '', '500', '0');

-- ----------------------------
-- Table structure for mkcms_user_pay
-- ----------------------------
DROP TABLE IF EXISTS `mkcms_user_pay`;
CREATE TABLE `mkcms_user_pay` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_order` varchar(255) NOT NULL DEFAULT '0',
  `p_uid` varchar(255) NOT NULL DEFAULT '0',
  `p_price` varchar(255) NOT NULL DEFAULT '0',
  `p_time` int(10) NOT NULL DEFAULT '0',
  `p_point` varchar(255) NOT NULL DEFAULT '0',
  `p_status` tinyint(1) NOT NULL DEFAULT '0',
  `p_group` smallint(255) DEFAULT NULL,
  PRIMARY KEY (`p_id`),
  KEY `p_order` (`p_order`),
  KEY `p_uid` (`p_uid`),
  KEY `p_status` (`p_status`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mkcms_user_pay
-- ----------------------------

-- ----------------------------
-- Table structure for mkcms_user_visit
-- ----------------------------
DROP TABLE IF EXISTS `mkcms_user_visit`;
CREATE TABLE `mkcms_user_visit` (
  `uv_id` int(11) NOT NULL AUTO_INCREMENT,
  `uv_uid` int(11) DEFAULT '0',
  `uv_ip` int(10) NOT NULL DEFAULT '0',
  `uv_ly` varchar(128) NOT NULL DEFAULT '',
  `uv_time` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`uv_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Table structure for table `mkcms_diy`
--

DROP TABLE IF EXISTS `mkcms_diy`;
CREATE TABLE `mkcms_diy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `s_zbcode` text,
  `s_hallcode` text,
  `s_fulicode` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mkcms_diy`
--
INSERT INTO `mkcms_diy` VALUES (1,'<div class=\"stui-pannel_bd\">\r\n <div class=\"icon\">\r\n    <div class=\"container izb\">\r\n     <nav class=\"zb-nav\"><a href=\"javascript:;\" class=\"taba cur\">央视频道</a><a href=\"javascript:;\" class=\"taba\">卫视频道</a><a href=\"javascript:;\" class=\"taba\">明星专辑</a>\r\n      </nav>\r\n<div class=\"zb-con\">\r\n  <ul class=\"zb-list\">\r\n   <li><a href=\"javascript:;\" data-url=\"http://t.cn/RpFPVsE\"><b><img src=\"/template/default/img/zhibo/c1.png\" /></b><span>CCTV 1</span></a></li>\r\n   <li><a href=\"javascript:;\" data-url=\"http://t.cn/RpFPN6v\"><b><img src=\"/template/default/img/zhibo/c2.png\"></b><span>CCTV 2</span></a></li>\r\n   <li><a href=\"javascript:;\" data-url=\"http://t.cn/RXQY4TK\"><b><img src=\"/template/default/img/zhibo/c3.png\"></b><span>CCTV 3</span></a></li>\r\n   <li><a href=\"javascript:;\" data-url=\"http://t.cn/RpFPrgx\"><b><img src=\"/template/default/img/zhibo/c4.png\"></b><span>CCTV 4</span></a></li>\r\n   <li><a href=\"javascript:;\" data-url=\"http://t.cn/RGXxHn1\"><b><img src=\"/template/default/img/zhibo/c5.png\"></b><span>CCTV 5+</span></a></li>\r\n   <li><a href=\"javascript:;\" data-url=\"http://t.cn/RpFhJLn\"><b><img src=\"/template/default/img/zhibo/c6.png\"></b><span>CCTV 6</span></a></li>\r\n   <li><a href=\"javascript:;\" data-url=\"http://t.cn/A6PTHaOP\"><b><img src=\"/template/default/img/zhibo/c7.png\"></b><span>CCTV 7</span></a></li>\r\n   <li><a href=\"javascript:;\" data-url=\"http://t.cn/RpFhSzl\"><b><img src=\"/template/default/img/zhibo/c8.png\"></b><span>CCTV 8</span></a></li>\r\n   <li><a href=\"javascript:;\" data-url=\"http://t.cn/RpFhwWm\"><b><img src=\"/template/default/img/zhibo/c9.png\"></b><span>CCTV 9</span></a></li>\r\n   <li><a href=\"javascript:;\" data-url=\"http://t.cn/RpFh2KW\"><b><img src=\"/template/default/img/zhibo/c10.png\"></b><span>CCTV 10</span></a></li>\r\n   <li><a href=\"javascript:;\" data-url=\"http://t.cn/RpFhyzk\"><b><img src=\"/template/default/img/zhibo/c11.png\"></b><span>CCTV 11</span></a></li>\r\n   <li><a href=\"javascript:;\" data-url=\"http://t.cn/RpFhU8c\"><b><img src=\"/template/default/img/zhibo/c12.png\"></b><span>CCTV 12</span></a></li>\r\n   <li><a href=\"javascript:;\" data-url=\"http://t.cn/RpFhb9z\"><b><img src=\"/template/default/img/zhibo/c13.png\"></b><span>CCTV 13</span></a></li>\r\n   <li><a href=\"javascript:;\" data-url=\"http://t.cn/RpFhqUF\"><b><img src=\"/template/default/img/zhibo/c14.png\"></b><span>CCTV 14</span></a></li>\r\n   <li><a href=\"javascript:;\" data-url=\"http://t.cn/RpFhtUX\"><b><img src=\"/template/default/img/zhibo/c15.png\"></b><span>CCTV 15</span></a></li>\r\n </ul>\r\n <ul class=\"zb-list hide\">\r\n   <li><a href=\"javascript:;\" data-url=\"http://t.cn/RLQqNvg\"><b><img src=\"/template/default/img/zhibo/hn.png\" /></b><span>湖南卫视</span></a></li>\r\n   <li><a href=\"javascript:;\" data-url=\"http://t.cn/R6Jrh0y\"><b><img src=\"/template/default/img/zhibo/zj.png\" /></b><span>浙江卫视</span></a></li>\r\n   <li><a href=\"javascript:;\" data-url=\"http://t.cn/RVylk9M\"><b><img src=\"/template/default/img/zhibo/js.png\" /></b><span>江苏卫视</span></a></li>\r\n   <li><a href=\"javascript:;\" data-url=\"http://t.cn/RLcRIHw\"><b><img src=\"/template/default/img/zhibo/df.png\" /></b><span>东方卫视</span></a></li>\r\n   <li><a href=\"javascript:;\" data-url=\"http://t.cn/RpFzrnr\"><b><img src=\"/template/default/img/zhibo/bj.png\" /></b><span>北京卫视</span></a></li>\r\n   <li><a href=\"javascript:;\" data-url=\"http://t.cn/RpFzDXB\"><b><img src=\"/template/default/img/zhibo/ah.png\" /></b><span>安徽卫视</span></a></li>\r\n   <li><a href=\"javascript:;\" data-url=\"http://t.cn/RpFZvZn\"><b><img src=\"/template/default/img/zhibo/sd.png\" /></b><span>山东卫视</span></a></li>\r\n   <li><a href=\"javascript:;\" data-url=\"http://t.cn/RpFZL4M\"><b><img src=\"/template/default/img/zhibo/ha.png\" /></b><span>河南卫视</span></a></li>\r\n   <li><a href=\"javascript:;\" data-url=\"http://t.cn/RpFZqm8\"><b><img src=\"/template/default/img/zhibo/jx.png\" /></b><span>江西卫视</span></a></li>\r\n   <li><a href=\"javascript:;\" data-url=\"http://t.cn/RpFZVXT\"><b><img src=\"/template/default/img/zhibo/hlj.png\" /></b><span>黑龙江卫视</span></a></li>\r\n   <li><a href=\"javascript:;\" data-url=\"http://t.cn/RpFZxtl\"><b><img src=\"/template/default/img/zhibo/gd.png\" /></b><span>广东卫视</span></a></li>\r\n   <li><a href=\"javascript:;\" data-url=\"http://t.cn/RpFZXVc\"><b><img src=\"/template/default/img/zhibo/tj.png\" /></b><span>天津卫视</span></a></li>\r\n   <li><a href=\"javascript:;\" data-url=\"http://t.cn/RpFZNi6\"><b><img src=\"/template/default/img/zhibo/hub.png\" /></b><span>湖北卫视</span></a></li>\r\n    <li><a href=\"javascript:;\" data-url=\"http://t.cn/RpFZWZA\"><b><img src=\"/template/default/img/zhibo/heb.png\" /></b><span>河北卫视</span></a></li>\r\n    <li><a href=\"javascript:;\" data-url=\"http://t.cn/RpFZYop\"><b><img src=\"/template/default/img/zhibo/cq.png\" /></b><span>重庆卫视</span></a></li>\r\n   <li><a href=\"javascript:;\" data-url=\"http://t.cn/RpFZQHu\"><b><img src=\"/template/default/img/zhibo/dn.png\" /></b><span>东南卫视</span></a></li>\r\n   <li><a href=\"javascript:;\" data-url=\"http://t.cn/RpFZEC4\"><b><img src=\"/template/default/img/zhibo/sx1.png\" /></b><span>山西卫视</span></a></li>\r\n    <li><a href=\"javascript:;\" data-url=\"http://t.cn/RpFZuWA\"><b><img src=\"/template/default/img/zhibo/gx.png\" /></b><span>广西卫视</span></a></li>\r\n   <li><a href=\"javascript:;\" data-url=\"http://t.cn/RpFZBpR\"><b><img src=\"/template/default/img/zhibo/gz.png\" /></b><span>贵州卫视</span></a></li>\r\n   <li><a href=\"javascript:;\" data-url=\"http://t.cn/RpFZgD6\"><b><img src=\"/template/default/img/zhibo/sz.png\" /></b><span>深圳卫视</span></a></li>\r\n   <li><a href=\"javascript:;\" data-url=\"http://t.cn/RpFwP3U\"><b><img src=\"/template/default/img/zhibo/jl.png\" /></b><span>吉林卫视</span></a></li>\r\n   <li><a href=\"javascript:;\" data-url=\"http://t.cn/RpFwZUV\"><b><img src=\"/template/default/img/zhibo/ln.png\" /></b><span>辽宁卫视</span></a></li>\r\n   <li><a href=\"javascript:;\" data-url=\"http://t.cn/RpFw2zU\"><b><img src=\"/template/default/img/zhibo/sc.png\" /></b><span>四川卫视</span></a></li>\r\n </ul>\r\n <ul class=\"zb-list hide\">\r\n   <li><a href=\"javascript:;\" data-url=\"/ck/zb.php?url=http://bd.flv.huya.com/src/1524434090-1524434090-6547394561457520640-3048991636-10057-A-0-1_2000.m3u8\"><b><img src=\"/template/default/img/zhibo/wj.png\" /></b><span>吴京</span></a></li>\r\n   <li><a href=\"javascript:;\" data-url=\"/ck/zb.php?url=http://bd.flv.huya.com/src/94525224-2460685313-10568562945082523648-2789274524-10057-A-0-1-imgplus_2000.m3u8\"><b><img src=\"/template/default/img/zhibo/zxc.png\" /></b><span>周星驰</span></a></li>\r\n    <li><a href=\"javascript:;\" data-url=\"/ck/zb.php?url=http://bd.flv.huya.com/src/1394575547-1394575547-5989656366166310912-2789274550-10057-A-0-1_2000.m3u8\"><b><img src=\"/template/default/img/zhibo/ldh.png\" /></b><span>刘德华</span></a></li>\r\n    <li><a href=\"javascript:;\" data-url=\"/ck/zb.php?url=http://bd.flv.huya.com/src/94525224-2460685774-10568564925062447104-2789253840-10057-A-0-1_2000.m3u8\"><b><img src=\"/template/default/img/zhibo/zrf.png\" /></b><span>周润发</span></a></li>\r\n   <li><a href=\"javascript:;\" data-url=\"/ck/zb.php?url=http://bd.flv.huya.com/src/94525224-2460685722-10568564701724147712-2789253838-10057-A-0-1_2000.m3u8\"><b><img src=\"/template/default/img/zhibo/cl.png\" /></b><span>成龙</span></a></li>\r\n    <li><a href=\"javascript:;\" data-url=\"/ck/zb.php?url=//bd.flv.huya.com/src/1524434085-1524434085-6547394539982684160-3048991626-10057-A-0-1_2000.m3u8\"><b><img src=\"/template/default/img/zhibo/xz.png\" /></b><span>徐峥</span></a></li>\r\n   <li><a href=\"javascript:;\" data-url=\"/ck/zb.php?url=http://bd.flv.huya.com/src/1524439827-1524439827-6547419201684897792-3049003110-10057-A-0-1_2000.m3u8\"><b><img src=\"/template/default/img/zhibo/lxl.png\" /></b><span>李小龙</span></a></li>\r\n   <li><a href=\"javascript:;\" data-url=\"/ck/zb.php?url=http://bd.flv.huya.com/src/1423787820-1423787820-6115122123343134720-2847699096-10057-A-0-1_2000.m3u8\"><b><img src=\"/template/default/img/zhibo/zzd.png\" /></b><span>甄子丹</span></a></li>\r\n</ul>','<div class=\"aui-col-xs-4 pt-list\">\r\n<a href=\"/cx.html\"><i class=\"aui-iconfont\"><img src=\"/template/default/img/qiang.png\"></i><div class=\"aui-grid-label\">抢先看</div></a>\r\n</div>\r\n<div class=\"aui-col-xs-4 pt-list\">\r\n<a href=\"/movie_all_all_all_all_rankhot_1.html\"><i class=\"aui-iconfont\"><img src=\"/template/default/img/movie.png\"></i><div class=\"aui-grid-label\">热门电影</div></a>\r\n</div>\r\n<div class=\"aui-col-xs-4 pt-list\">\r\n<a href=\"/tv_all_all_all_all_rankhot_1.html\"><i class=\"aui-iconfont\"><img src=\"/template/default/img/juji.png\"/></i><div class=\"aui-grid-label\">电视剧集</div></a>\r\n</div>\r\n<div class=\"aui-col-xs-4 pt-list\">\r\n<a href=\"/dongman.html\"><i class=\"aui-iconfont\"><img src=\"/template/default/img/dongman.png\"></i><div class=\"aui-grid-label\">热血动漫</div></a>\r\n</div>\r\n<div class=\"aui-col-xs-4 pt-list\">\r\n<a href=\"/zongyi_all_all_all_rankhot_1.html\"><i class=\"aui-iconfont\"><img src=\"/template/default/img/zongyi.png\"></i><div class=\"aui-grid-label\">热门综艺</div></a>\r\n</div>\r\n<div class=\"aui-col-xs-4 pt-list\">\r\n<a href=\"/news.html\"><i class=\"aui-iconfont\"><img src=\"/template/default/img/yule.png\"></i><div class=\"aui-grid-label\">影视资讯</div></a>\r\n</div>\r\n<div class=\"aui-col-xs-4 pt-list\">\r\n<a href=\"/hy.html\"><i class=\"aui-iconfont\"><img src=\"/template/default/img/bo.png\"></i><div class=\"aui-grid-label\">虎牙直播</div></a>\r\n</div>\r\n<div class=\"aui-col-xs-4 pt-list\">\r\n<a href=\"/music.html\"><i class=\"aui-iconfont\"><img src=\"/template/default/img/yue.png\"></i><div class=\"aui-grid-label\">在线音乐</div></a>\r\n</div>\r\n<div class=\"aui-col-xs-4 pt-list\">\r\n<a href=\"/fuli.html\"><i class=\"aui-iconfont\"><img src=\"/template/default/img/fu.png\"></i><div class=\"aui-grid-label\">福利</div></a>\r\n</div>','<a href=\"/zhibo.html\" class=\"aui-flex b-line\">\r\n<div class=\"aui-flex-iphone\"><img src=\"/template/default/img/tv.png\" alt=\"\"></div>\r\n<div class=\"aui-flex-box\">\r\n<p><em class=\"aui-group-three\"> 电视直播</em></p>\r\n<h3>在线收看高清卫视</h3>\r\n<p><em class=\"aui-group-one\">实时更新</em> <em class=\"aui-group-two\">电视TV</em></p>\r\n</div>\r\n<div class=\"aui-flex-support\">看电视</div></a>\r\n             \r\n<a href=\"/hy.html\" class=\"aui-flex b-line\">\r\n<div class=\"aui-flex-iphone\"><img src=\"/template/default/img/game.png\" alt=\"\"></div>\r\n<div class=\"aui-flex-box\"><p><em class=\"aui-group-three\"> 虎牙直播</em></p>\r\n<h3>美女游戏直播平台 </h3>\r\n<p><em class=\"aui-group-one\">实时更新</em> <em class=\"aui-group-two\">直播在线</em></p>\r\n</div>\r\n<div class=\"aui-flex-support\">看直播</div></a>\r\n\r\n<a href=\"/yy_27_p1.html\" class=\"aui-flex b-line\">\r\n<div class=\"aui-flex-iphone\"><img src=\"/template/default/img/meinvxiezhen.png\" alt=\"\"></div>\r\n<div class=\"aui-flex-box\"><p><em class=\"aui-group-three\"> 美女视听</em></p>\r\n<h3>YY美女火辣热舞</h3>\r\n<p><em class=\"aui-group-one\">实时更新</em> <em class=\"aui-group-two\">多才多艺</em></p>\r\n</div>\r\n<div class=\"aui-flex-support\">看热舞</div></a>');