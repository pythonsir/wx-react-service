/*
 Navicat Premium Data Transfer

 Source Server         : 本地
 Source Server Type    : MySQL
 Source Server Version : 50633
 Source Host           : 127.0.0.1
 Source Database       : latest

 Target Server Type    : MySQL
 Target Server Version : 50633
 File Encoding         : utf-8

 Date: 05/29/2018 09:56:14 AM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `tb_role`
-- ----------------------------
DROP TABLE IF EXISTS `tb_role`;
CREATE TABLE `tb_role` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(255) DEFAULT NULL,
  `role_code` varchar(255) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1002 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `tb_role`
-- ----------------------------
BEGIN;
INSERT INTO `tb_role` VALUES ('1000', '超级管理员', 'admin', null, null), ('1001', '普通管理员', 'cadmin', null, null);
COMMIT;

-- ----------------------------
--  Table structure for `tb_user`
-- ----------------------------
DROP TABLE IF EXISTS `tb_user`;
CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `password_hash` varchar(255) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  `access_token` varchar(255) DEFAULT NULL,
  `last_login_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `tb_user`
-- ----------------------------
BEGIN;
INSERT INTO `tb_user` VALUES ('1111', 'admin', '11111', null, null, '1', null, null), ('1526399496', 'bbbbb', '$2y$13$/dJJciuCoJsm0pN1somOBOLfRFEgNsNDvS6VBQyOG2qcL0oS2o/Tm', null, null, '1', 'o1xqfc7o1tdkO3lIrGM0TAr5PKIpn2UG', '1526632025'), ('1526554276', 'eeeee', '$2y$13$5iA2N9ucREv6A9h/OkTnAe7/TvrhjCK9l7gwgBMoSw1tKWswI3u4u', null, null, '0', null, null), ('1526633216', 'ddddddd', '$2y$13$LZVkkEwKPWl3idVk0Ws40usbfKscxxYWUhGgX2SxOu0D15lXIvuwS', '1526633219', '1526633219', '1', null, null), ('1526635740', 'python', '$2y$13$w3mug6DAm1Emm6wkJgwOWOYPxWkAipAiiZ2sC.Uf1bj5g.zdgFKfu', '1526635743', '1527505787', '0', '33TPY-J7Nnz7YBSzgOGpfJetf8I2isGp', '1527505787'), ('1526635864', 'python1', '$2y$13$VxBa..Z1QwFF0MtI.uwKTuq1B1k3BKpXhBOwhc7I.ZfGcR8QFP/JS', '1526635867', '1526635867', '0', null, null), ('1526636037', 'python2', '$2y$13$003hzYXgv.5TRmiTylUReOn2cgUJvd8y0lXqxTnotLl5PpsTFTmIG', '1526636040', '1526636040', '0', null, null), ('1526637291', 'python4', '$2y$13$8BjsLwFOzVhxQnVO8hY9ZekchdAOoORwKgMvmiVPM0jd.Wv/uWjDW', '1526637294', '1526637294', '0', null, null), ('1526637432', 'python6', '$2y$13$CsEj3BXLmLQAG/dQCxOEoOiy5u9taG8xA.dEQmkcKG3puN/JoBQfi', '1526637435', '1526637435', '0', null, null);
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
