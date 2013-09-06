-- ----------------------------
-- Table structure for `taas_session`
-- ----------------------------
DROP TABLE IF EXISTS `taas_session`;
CREATE TABLE `taas_session` (
  `session_id` varchar(255) DEFAULT NULL,
  `user_agent` text,
  `ip_address` varchar(50) DEFAULT NULL,
  `last_activity` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `user_data` text,
  KEY `session_id` (`session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of taas_session
-- ----------------------------
