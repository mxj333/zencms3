/*
Navicat MySQL Data Transfer

Source Server         : 10.33.10.10_3306
Source Server Version : 50622
Source Host           : 10.33.10.10:3306
Source Database       : cake3api_app

Target Server Type    : MYSQL
Target Server Version : 50622
File Encoding         : 65001

Date: 2016-02-12 22:31:50
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for articles
-- ----------------------------
DROP TABLE IF EXISTS `articles`;
CREATE TABLE `articles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8_unicode_ci,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of articles
-- ----------------------------
INSERT INTO `articles` VALUES ('1', 'The title', 'This is the article body.', '2016-02-09 16:54:14', null);
INSERT INTO `articles` VALUES ('2', 'A title once again', 'And the article body follows.', '2016-02-09 16:54:14', null);
INSERT INTO `articles` VALUES ('3', 'Title strikes back', 'This is really exciting! Not.', '2016-02-09 16:54:14', null);

-- ----------------------------
-- Table structure for cocktails
-- ----------------------------
DROP TABLE IF EXISTS `cocktails`;
CREATE TABLE `cocktails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cocktails
-- ----------------------------
INSERT INTO `cocktails` VALUES ('1', 'Cosmopolitan', 'Vodka based', '2015-04-10 15:56:23', null);
INSERT INTO `cocktails` VALUES ('2', 'Margarita', 'Tequila based', '2015-04-10 15:59:39', null);
INSERT INTO `cocktails` VALUES ('3', 'Mojito', 'Rum based', '2015-04-11 09:52:01', null);
INSERT INTO `cocktails` VALUES ('4', 'Cuba Libre', 'Rum based', '2015-04-11 09:52:01', null);
INSERT INTO `cocktails` VALUES ('5', 'Caipirinha', 'Rum based', '2015-04-11 09:33:37', null);
INSERT INTO `cocktails` VALUES ('6', 'Tequila Sunrise', 'Tequila based', '2015-04-11 09:52:02', null);
INSERT INTO `cocktails` VALUES ('7', 'Bloody Mary', 'Vodka based', '2015-04-11 09:52:02', null);
INSERT INTO `cocktails` VALUES ('8', 'Black Velvet', 'Beer based', '2015-04-11 09:52:02', null);
INSERT INTO `cocktails` VALUES ('9', 'Martini', 'Gin based', '2015-04-11 09:52:02', null);
INSERT INTO `cocktails` VALUES ('10', 'Manhattan', 'Whiskey based', '2015-04-11 09:52:03', null);
INSERT INTO `cocktails` VALUES ('11', 'Bronx', 'Gin based', '2015-04-11 09:52:03', null);
INSERT INTO `cocktails` VALUES ('12', 'Rose', 'Gin bassed', '2015-04-11 09:52:03', null);
INSERT INTO `cocktails` VALUES ('13', 'Hot Shot', 'Coffee based', '2015-04-11 09:52:03', null);
INSERT INTO `cocktails` VALUES ('14', 'Parrot', 'Tequila based', '2015-04-11 09:52:03', null);
INSERT INTO `cocktails` VALUES ('15', 'Boxer', 'Whiskey based', '2015-04-11 09:52:03', null);
INSERT INTO `cocktails` VALUES ('16', 'Monkey', 'Cointreau based', '2015-04-11 09:52:03', null);
INSERT INTO `cocktails` VALUES ('17', 'Pink Panther', 'Cointreau based', '2015-04-11 09:52:03', null);
INSERT INTO `cocktails` VALUES ('18', 'Zombie', 'Rum based', '2015-04-11 09:52:03', null);
INSERT INTO `cocktails` VALUES ('19', 'Matador', 'Tequila based', '2015-04-11 09:52:03', null);
INSERT INTO `cocktails` VALUES ('20', 'B52', 'Cream based', '2015-04-11 09:52:03', null);
INSERT INTO `cocktails` VALUES ('21', 'Beach Runner', 'Gin based', '2015-04-11 09:52:03', null);

-- ----------------------------
-- Table structure for managements
-- ----------------------------
DROP TABLE IF EXISTS `managements`;
CREATE TABLE `managements` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `structure_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '结构表ID',
  `name` varchar(20) NOT NULL DEFAULT '' COMMENT '名称',
  `label` varchar(20) NOT NULL DEFAULT '' COMMENT '中文显示',
  `icon` varchar(20) DEFAULT NULL,
  `url` varchar(100) NOT NULL DEFAULT '' COMMENT '外链地址',
  `target` varchar(20) NOT NULL DEFAULT '' COMMENT '打开目标窗口',
  `weight` tinyint(4) unsigned DEFAULT '0' COMMENT '权重',
  `status` tinyint(4) unsigned DEFAULT '1' COMMENT '1，启用',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of managements
-- ----------------------------
INSERT INTO `managements` VALUES ('1', '1', 'dashboards', '仪表盘', 'fa fa-tachometer', './dashboard.php', '', '0', '1');
INSERT INTO `managements` VALUES ('2', '2', 'posts', '内容管理', 'fa fa-pencil fa-fw', './post.php', '', '1', '1');
INSERT INTO `managements` VALUES ('3', '3', 'users', '用户管理', 'fa fa-user', './users.php', '', '0', '1');
INSERT INTO `managements` VALUES ('4', '3', 'groups', '用户组管理', 'fa fa-users', './group.php', '', '1', '1');
INSERT INTO `managements` VALUES ('5', '4', 'roles', '权限控制', 'fa fa-cog fa-fw', './role.php', '', '9', '1');
INSERT INTO `managements` VALUES ('6', '4', 'taxonomys', '分类管理', 'fa fa-certificate', './taxonomys.php', '', '1', '1');
INSERT INTO `managements` VALUES ('7', '5', 'configs', '系统配置', 'fa fa-cog fa-fw', './configs.php', '', '9', '1');
INSERT INTO `managements` VALUES ('8', '4', 'structures', '结构管理', 'fa fa-gg', './structure.php', '', '0', '1');
INSERT INTO `managements` VALUES ('9', '4', 'managements', '菜单管理', 'fa fa-bars', './management.php', '', '1', '1');
INSERT INTO `managements` VALUES ('10', '5', 'caches', '缓存管理', 'fa fa-fire-extinguis', './cache.php', '', '0', '1');

-- ----------------------------
-- Table structure for phinxlog
-- ----------------------------
DROP TABLE IF EXISTS `phinxlog`;
CREATE TABLE `phinxlog` (
  `version` bigint(20) NOT NULL,
  `start_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `end_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of phinxlog
-- ----------------------------
INSERT INTO `phinxlog` VALUES ('20150411161731', '2016-02-09 17:47:39', '2016-02-09 17:47:39');
INSERT INTO `phinxlog` VALUES ('20150420112310', '2016-02-09 18:20:48', '2016-02-09 18:20:48');

-- ----------------------------
-- Table structure for posts
-- ----------------------------
DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(250) NOT NULL DEFAULT '',
  `last_name` varchar(250) NOT NULL DEFAULT '',
  `position` varchar(250) NOT NULL DEFAULT '',
  `email` varchar(250) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `office` varchar(250) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `start_date` datetime DEFAULT NULL,
  `age` int(8) DEFAULT NULL,
  `salary` int(8) DEFAULT NULL,
  `seq` int(8) DEFAULT NULL,
  `extn` varchar(8) CHARACTER SET latin1 NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `seq` (`seq`)
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of posts
-- ----------------------------
INSERT INTO `posts` VALUES ('1', 'dasfasdfs', 'Nixon', 'System Architect', 't.nixon@datatables.net', 'Edinburgh', '2011-04-25 00:00:00', '61', '320800', '2', '5421');
INSERT INTO `posts` VALUES ('2', 'Garrett', 'Winters', 'Accountant', 'g.winters@datatables.net', 'Tokyo', '2011-07-25 00:00:00', '63', '170750', '22', '8422');
INSERT INTO `posts` VALUES ('3', 'Ashton', 'Cox', 'Junior Technical Author', 'a.cox@datatables.net', 'San Francisco', '2009-01-12 00:00:00', '66', '86000', '6', '1562');
INSERT INTO `posts` VALUES ('4', 'Cedric 44444', 'Kelly', 'Senior Javascript Developer', 'c.kelly@datatables.net', 'Edinburgh', '2012-03-29 00:00:00', '22', '433060', '41', '6224');
INSERT INTO `posts` VALUES ('5', 'Airi55555', 'Satou', 'Accountant', 'a.satou@datatables.net', 'Tokyo', '2008-11-28 00:00:00', '33', '162700', '55', '5407');
INSERT INTO `posts` VALUES ('6', 'Brielle', 'Williamson', 'Integration Specialist', 'b.williamson@datatables.net', 'New York', '2012-12-02 00:00:00', '61', '372000', '21', '4804');
INSERT INTO `posts` VALUES ('7', 'Herrod', 'Chandler', 'Sales Assistant', 'h.chandler@datatables.net', 'San Francisco', '2012-08-06 00:00:00', '59', '137500', '46', '9608');
INSERT INTO `posts` VALUES ('8', 'Rhona', 'Davidson', 'Integration Specialist', 'r.davidson@datatables.net', 'Tokyo', '2010-10-14 00:00:00', '55', '327900', '50', '6200');
INSERT INTO `posts` VALUES ('9', 'Colleen', 'Hurst', 'Javascript Developer', 'c.hurst@datatables.net', 'San Francisco', '2009-09-15 00:00:00', '39', '205500', '26', '2360');
INSERT INTO `posts` VALUES ('10', 'Sonya', 'Frost', 'Software Engineer', 's.frost@datatables.net', 'Edinburgh', '2008-12-13 00:00:00', '23', '103600', '18', '1667');
INSERT INTO `posts` VALUES ('11', 'Jena', 'Gaines', 'Office Manager', 'j.gaines@datatables.net', 'London', '2008-12-19 00:00:00', '30', '90560', '13', '3814');
INSERT INTO `posts` VALUES ('12', 'Quinn', 'Flynn', 'Support Lead', 'q.flynn@datatables.net', 'Edinburgh', '2013-03-03 00:00:00', '22', '342000', '23', '9497');
INSERT INTO `posts` VALUES ('13', 'Charde', 'Marshall', 'Regional Director', 'c.marshall@datatables.net', 'San Francisco', '2008-10-16 00:00:00', '36', '470600', '14', '6741');
INSERT INTO `posts` VALUES ('14', 'Haley', 'Kennedy', 'Senior Marketing Designer', 'h.kennedy@datatables.net', 'London', '2012-12-18 00:00:00', '43', '313500', '12', '3597');
INSERT INTO `posts` VALUES ('15', 'Tatyana', 'Fitzpatrick', 'Regional Director', 't.fitzpatrick@datatables.net', 'London', '2010-03-17 00:00:00', '19', '385750', '54', '1965');
INSERT INTO `posts` VALUES ('16', 'Michael', 'Silva', 'Marketing Designer', 'm.silva@datatables.net', 'London', '2012-11-27 00:00:00', '66', '198500', '37', '1581');
INSERT INTO `posts` VALUES ('17', 'Paul', 'Byrd', 'Chief Financial Officer (CFO)', 'p.byrd@datatables.net', 'New York', '2010-06-09 00:00:00', '64', '725000', '32', '3059');
INSERT INTO `posts` VALUES ('18', 'Gloria', 'Little', 'Systems Administrator', 'g.little@datatables.net', 'New York', '2009-04-10 00:00:00', '59', '237500', '35', '1721');
INSERT INTO `posts` VALUES ('19', 'Bradley', 'Greer', 'Software Engineer', 'b.greer@datatables.net', 'London', '2012-10-13 00:00:00', '41', '132000', '48', '2558');
INSERT INTO `posts` VALUES ('20', 'Dai', 'Rios', 'Personnel Lead', 'd.rios@datatables.net', 'Edinburgh', '2012-09-26 00:00:00', '35', '217500', '45', '2290');
INSERT INTO `posts` VALUES ('21', 'Jenette', 'Caldwell', 'Development Lead', 'j.caldwell@datatables.net', 'New York', '2011-09-03 00:00:00', '30', '345000', '17', '1937');
INSERT INTO `posts` VALUES ('22', 'Yuri', 'Berry', 'Chief Marketing Officer (CMO)', 'y.berry@datatables.net', 'New York', '2009-06-25 00:00:00', '40', '675000', '57', '6154');
INSERT INTO `posts` VALUES ('23', 'Caesar', 'Vance', 'Pre-Sales Support', 'c.vance@datatables.net', 'New York', '2011-12-12 00:00:00', '21', '106450', '29', '8330');
INSERT INTO `posts` VALUES ('24', 'Doris', 'Wilder', 'Sales Assistant', 'd.wilder@datatables.net', 'Sidney', '2010-09-20 00:00:00', '23', '85600', '56', '3023');
INSERT INTO `posts` VALUES ('25', 'Angelica', 'Ramos', 'Chief Executive Officer (CEO)', 'a.ramos@datatables.net', 'London', '2009-10-09 00:00:00', '47', '1200000', '36', '5797');
INSERT INTO `posts` VALUES ('26', 'Gavin', 'Joyce', 'Developer', 'g.joyce@datatables.net', 'Edinburgh', '2010-12-22 00:00:00', '42', '92575', '5', '8822');
INSERT INTO `posts` VALUES ('27', 'Jennifer', 'Chang', 'Regional Director', 'j.chang@datatables.net', 'Singapore', '2010-11-14 00:00:00', '28', '357650', '51', '9239');
INSERT INTO `posts` VALUES ('28', 'Brenden', 'Wagner', 'Software Engineer', 'b.wagner@datatables.net', 'San Francisco', '2011-06-07 00:00:00', '28', '206850', '20', '1314');
INSERT INTO `posts` VALUES ('29', 'Fiona', 'Green', 'Chief Operating Officer (COO)', 'f.green@datatables.net', 'San Francisco', '2010-03-11 00:00:00', '48', '850000', '7', '2947');
INSERT INTO `posts` VALUES ('30', 'Shou', 'Itou', 'Regional Marketing', 's.itou@datatables.net', 'Tokyo', '2011-08-14 00:00:00', '20', '163000', '1', '8899');
INSERT INTO `posts` VALUES ('31', 'Michelle', 'House', 'Integration Specialist', 'm.house@datatables.net', 'Sidney', '2011-06-02 00:00:00', '37', '95400', '39', '2769');
INSERT INTO `posts` VALUES ('32', 'Suki', 'Burks', 'Developer', 's.burks@datatables.net', 'London', '2009-10-22 00:00:00', '53', '114500', '40', '6832');
INSERT INTO `posts` VALUES ('33', 'Prescott', 'Bartlett', 'Technical Author', 'p.bartlett@datatables.net', 'London', '2011-05-07 00:00:00', '27', '145000', '47', '3606');
INSERT INTO `posts` VALUES ('34', 'Gavin', 'Cortez', 'Team Leader', 'g.cortez@datatables.net', 'San Francisco', '2008-10-26 00:00:00', '22', '235500', '52', '2860');
INSERT INTO `posts` VALUES ('35', 'Martena', 'Mccray', 'Post-Sales support', 'm.mccray@datatables.net', 'Edinburgh', '2011-03-09 00:00:00', '46', '324050', '8', '8240');
INSERT INTO `posts` VALUES ('36', 'Unity', 'Butler', 'Marketing Designer', 'u.butler@datatables.net', 'San Francisco', '2009-12-09 00:00:00', '47', '85675', '24', '5384');
INSERT INTO `posts` VALUES ('37', 'Howard', 'Hatfield', 'Office Manager', 'h.hatfield@datatables.net', 'San Francisco', '2008-12-16 00:00:00', '51', '164500', '38', '7031');
INSERT INTO `posts` VALUES ('38', 'Hope', 'Fuentes', 'Secretary', 'h.fuentes@datatables.net', 'San Francisco', '2010-02-12 00:00:00', '41', '109850', '53', '6318');
INSERT INTO `posts` VALUES ('39', 'Vivian', 'Harrell', 'Financial Controller', 'v.harrell@datatables.net', 'San Francisco', '2009-02-14 00:00:00', '62', '452500', '30', '9422');
INSERT INTO `posts` VALUES ('40', 'Timothy', 'Mooney', 'Office Manager', 't.mooney@datatables.net', 'London', '2008-12-11 00:00:00', '37', '136200', '28', '7580');
INSERT INTO `posts` VALUES ('41', 'Jackson', 'Bradshaw', 'Director', 'j.bradshaw@datatables.net', 'New York', '2008-09-26 00:00:00', '65', '645750', '34', '1042');
INSERT INTO `posts` VALUES ('42', 'Olivia', 'Liang', 'Support Engineer', 'o.liang@datatables.net', 'Singapore', '2011-02-03 00:00:00', '64', '234500', '4', '2120');
INSERT INTO `posts` VALUES ('43', 'Bruno', 'Nash', 'Software Engineer', 'b.nash@datatables.net', 'London', '2011-05-03 00:00:00', '38', '163500', '3', '6222');
INSERT INTO `posts` VALUES ('44', 'Sakura', 'Yamamoto', 'Support Engineer', 's.yamamoto@datatables.net', 'Tokyo', '2009-08-19 00:00:00', '37', '139575', '31', '9383');
INSERT INTO `posts` VALUES ('45', 'Thor', 'Walton', 'Developer', 't.walton@datatables.net', 'New York', '2013-08-11 00:00:00', '61', '98540', '11', '8327');
INSERT INTO `posts` VALUES ('46', 'Finn', 'Camacho', 'Support Engineer', 'f.camacho@datatables.net', 'San Francisco', '2009-07-07 00:00:00', '47', '87500', '10', '2927');
INSERT INTO `posts` VALUES ('47', 'Serge', 'Baldwin', 'Data Coordinator', 's.baldwin@datatables.net', 'Singapore', '2012-04-09 00:00:00', '64', '138575', '44', '8352');
INSERT INTO `posts` VALUES ('48', 'Zenaida', 'Frank', 'Software Engineer', 'z.frank@datatables.net', 'New York', '2010-01-04 00:00:00', '63', '125250', '42', '7439');
INSERT INTO `posts` VALUES ('49', 'Zorita', 'Serrano', 'Software Engineer', 'z.serrano@datatables.net', 'San Francisco', '2012-06-01 00:00:00', '56', '115000', '27', '4389');
INSERT INTO `posts` VALUES ('50', 'Jennifer', 'Acosta', 'Junior Javascript Developer', 'j.acosta@datatables.net', 'Edinburgh', '2013-02-01 00:00:00', '43', '75650', '49', '3431');
INSERT INTO `posts` VALUES ('51', 'Cara', 'Stevens', 'Sales Assistant', 'c.stevens@datatables.net', 'New York', '2011-12-06 00:00:00', '46', '145600', '15', '3990');
INSERT INTO `posts` VALUES ('52', 'Hermione', 'Butler', 'Regional Director', 'h.butler@datatables.net', 'London', '2011-03-21 00:00:00', '47', '356250', '9', '1016');
INSERT INTO `posts` VALUES ('53', 'Lael', 'Greer', 'Systems Administrator', 'l.greer@datatables.net', 'London', '2009-02-27 00:00:00', '21', '103500', '25', '6733');
INSERT INTO `posts` VALUES ('54', 'Jonas', 'Alexander', 'Developer', 'j.alexander@datatables.net', 'San Francisco', '2010-07-14 00:00:00', '30', '86500', '33', '8196');
INSERT INTO `posts` VALUES ('55', 'Shad', 'Decker', 'Regional Director', 's.decker@datatables.net', 'Edinburgh', '2008-11-13 00:00:00', '51', '183000', '43', '6373');
INSERT INTO `posts` VALUES ('56', 'Michael', 'Bruce', 'Javascript Developer', 'm.bruce@datatables.net', 'Singapore', '2011-06-27 00:00:00', '29', '183000', '16', '5384');
INSERT INTO `posts` VALUES ('57', 'Donna', 'Snider', 'Customer Support', 'd.snider@datatables.net', 'New York', '2011-01-25 00:00:00', '27', '112000', '19', '4226');
INSERT INTO `posts` VALUES ('76', 'dfdgfdgf', 'fhgfhg', 'qqwyj', '', 'ghfyh', null, null, null, null, '');

-- ----------------------------
-- Table structure for structures
-- ----------------------------
DROP TABLE IF EXISTS `structures`;
CREATE TABLE `structures` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT '' COMMENT '名称',
  `label` varchar(20) NOT NULL DEFAULT '' COMMENT '中文显示',
  `icon` varchar(20) DEFAULT '' COMMENT 'calss名',
  `url` varchar(100) NOT NULL DEFAULT '' COMMENT '外链地址',
  `target` varchar(20) NOT NULL DEFAULT '' COMMENT '打开目标窗口',
  `weight` tinyint(4) unsigned DEFAULT '0' COMMENT '权重',
  `status` tinyint(4) unsigned DEFAULT '1' COMMENT '1,启用,',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of structures
-- ----------------------------
INSERT INTO `structures` VALUES ('1', 'index', '首页', 'fa fa-home', './index.php', '', '0', '1');
INSERT INTO `structures` VALUES ('2', 'content', '内容', 'fa fa-pencil fa-fw', './content.php', '', '1', '1');
INSERT INTO `structures` VALUES ('3', 'users', '用户', 'fa fa-user', './users.php', '', '2', '1');
INSERT INTO `structures` VALUES ('4', 'basic_configuration', '基础', 'fa fa-certificate', './basic_configuration.php', '', '3', '1');
INSERT INTO `structures` VALUES ('5', 'system_management', '系统', 'fa fa-cog fa-fw', './system_management.php', '', '4', '1');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `active` tinyint(1) DEFAULT '0',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'admin', '$2y$10$5YePQ3lsxuQCvz8hyxef..l/yl3XvIyynghf/zGZUWpYpetxOVFe6', '1', '2016-02-09 18:23:48', '2016-02-09 18:23:48');
