/*
 Navicat Premium Data Transfer

 Source Server         : 老codelaw
 Source Server Type    : MySQL
 Source Server Version : 80041
 Source Host           : 8.140.25.52:3006
 Source Schema         : shequ_codelaw_cn

 Target Server Type    : MySQL
 Target Server Version : 80041
 File Encoding         : 65001

 Date: 17/05/2025 12:51:44
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for admin_menu
-- ----------------------------
DROP TABLE IF EXISTS `admin_menu`;
CREATE TABLE `admin_menu`  (
  `id` int(0) UNSIGNED NOT NULL AUTO_INCREMENT,
  `parent_id` int(0) NOT NULL DEFAULT 0,
  `order` int(0) NOT NULL DEFAULT 0,
  `title` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `uri` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `permission` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of admin_menu
-- ----------------------------
INSERT INTO `admin_menu` VALUES (2, 0, 2, 'Admin', 'fa-tasks', '', NULL, NULL, NULL);
INSERT INTO `admin_menu` VALUES (3, 2, 3, 'Users', 'fa-users', 'auth/users', NULL, NULL, NULL);
INSERT INTO `admin_menu` VALUES (4, 2, 4, 'Roles', 'fa-user', 'auth/roles', NULL, NULL, NULL);
INSERT INTO `admin_menu` VALUES (5, 2, 5, 'Permission', 'fa-ban', 'auth/permissions', NULL, NULL, NULL);
INSERT INTO `admin_menu` VALUES (6, 2, 6, 'Menu', 'fa-bars', 'auth/menu', NULL, NULL, NULL);
INSERT INTO `admin_menu` VALUES (7, 2, 7, 'Operation log', 'fa-history', 'auth/logs', NULL, NULL, NULL);
INSERT INTO `admin_menu` VALUES (8, 0, 0, '用户管理', 'fa-users', 'user', NULL, '2023-03-23 15:38:50', '2023-03-23 15:42:18');
INSERT INTO `admin_menu` VALUES (9, 0, 0, '用户发帖', 'fa-dedent', 'article', NULL, '2023-03-23 15:41:22', '2023-03-23 15:42:36');

-- ----------------------------
-- Table structure for admin_operation_log
-- ----------------------------
DROP TABLE IF EXISTS `admin_operation_log`;
CREATE TABLE `admin_operation_log`  (
  `id` int(0) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(0) NOT NULL,
  `path` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `method` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `input` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `admin_operation_log_user_id_index`(`user_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 242 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of admin_operation_log
-- ----------------------------
INSERT INTO `admin_operation_log` VALUES (1, 1, 'admin', 'GET', '127.0.0.1', '[]', '2023-03-21 07:00:14', '2023-03-21 07:00:14');
INSERT INTO `admin_operation_log` VALUES (2, 1, 'admin', 'GET', '127.0.0.1', '[]', '2023-03-21 07:01:45', '2023-03-21 07:01:45');
INSERT INTO `admin_operation_log` VALUES (3, 1, 'admin', 'GET', '127.0.0.1', '[]', '2023-03-21 07:01:46', '2023-03-21 07:01:46');
INSERT INTO `admin_operation_log` VALUES (4, 1, 'admin', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-03-21 07:01:50', '2023-03-21 07:01:50');
INSERT INTO `admin_operation_log` VALUES (5, 1, 'admin', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-03-21 07:01:54', '2023-03-21 07:01:54');
INSERT INTO `admin_operation_log` VALUES (6, 1, 'admin', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-03-21 07:01:56', '2023-03-21 07:01:56');
INSERT INTO `admin_operation_log` VALUES (7, 1, 'admin/auth/roles', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-03-21 07:01:57', '2023-03-21 07:01:57');
INSERT INTO `admin_operation_log` VALUES (8, 1, 'admin/auth/users', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-03-21 07:01:58', '2023-03-21 07:01:58');
INSERT INTO `admin_operation_log` VALUES (9, 1, 'admin', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-03-21 07:02:00', '2023-03-21 07:02:00');
INSERT INTO `admin_operation_log` VALUES (10, 1, 'admin', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-03-21 07:02:04', '2023-03-21 07:02:04');
INSERT INTO `admin_operation_log` VALUES (11, 1, 'admin', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-03-21 07:02:04', '2023-03-21 07:02:04');
INSERT INTO `admin_operation_log` VALUES (12, 1, 'admin', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-03-21 07:02:05', '2023-03-21 07:02:05');
INSERT INTO `admin_operation_log` VALUES (13, 1, 'admin', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-03-21 07:02:07', '2023-03-21 07:02:07');
INSERT INTO `admin_operation_log` VALUES (14, 1, 'admin', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-03-21 07:02:07', '2023-03-21 07:02:07');
INSERT INTO `admin_operation_log` VALUES (15, 1, 'admin', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-03-21 07:02:08', '2023-03-21 07:02:08');
INSERT INTO `admin_operation_log` VALUES (16, 1, 'admin', 'GET', '127.0.0.1', '[]', '2023-03-21 07:13:28', '2023-03-21 07:13:28');
INSERT INTO `admin_operation_log` VALUES (17, 1, 'admin', 'GET', '127.0.0.1', '[]', '2023-03-21 07:13:45', '2023-03-21 07:13:45');
INSERT INTO `admin_operation_log` VALUES (18, 1, 'admin', 'GET', '127.0.0.1', '[]', '2023-03-23 06:29:40', '2023-03-23 06:29:40');
INSERT INTO `admin_operation_log` VALUES (19, 1, 'admin/auth/users', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-03-23 06:29:47', '2023-03-23 06:29:47');
INSERT INTO `admin_operation_log` VALUES (20, 1, 'admin/auth/users/1/edit', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-03-23 06:29:55', '2023-03-23 06:29:55');
INSERT INTO `admin_operation_log` VALUES (21, 1, 'admin', 'GET', '127.0.0.1', '[]', '2023-03-23 07:24:30', '2023-03-23 07:24:30');
INSERT INTO `admin_operation_log` VALUES (22, 1, 'admin', 'GET', '127.0.0.1', '[]', '2023-03-23 07:27:03', '2023-03-23 07:27:03');
INSERT INTO `admin_operation_log` VALUES (23, 1, 'admin', 'GET', '127.0.0.1', '[]', '2023-03-23 07:27:03', '2023-03-23 07:27:03');
INSERT INTO `admin_operation_log` VALUES (24, 1, 'admin', 'GET', '127.0.0.1', '[]', '2023-03-23 15:27:44', '2023-03-23 15:27:44');
INSERT INTO `admin_operation_log` VALUES (25, 1, 'admin', 'GET', '127.0.0.1', '[]', '2023-03-23 15:28:43', '2023-03-23 15:28:43');
INSERT INTO `admin_operation_log` VALUES (26, 1, 'admin', 'GET', '127.0.0.1', '[]', '2023-03-23 15:28:44', '2023-03-23 15:28:44');
INSERT INTO `admin_operation_log` VALUES (27, 1, 'admin', 'GET', '127.0.0.1', '[]', '2023-03-23 15:28:45', '2023-03-23 15:28:45');
INSERT INTO `admin_operation_log` VALUES (28, 1, 'admin', 'GET', '127.0.0.1', '[]', '2023-03-23 15:28:48', '2023-03-23 15:28:48');
INSERT INTO `admin_operation_log` VALUES (29, 1, 'admin', 'GET', '127.0.0.1', '[]', '2023-03-23 15:28:51', '2023-03-23 15:28:51');
INSERT INTO `admin_operation_log` VALUES (30, 1, 'admin', 'GET', '127.0.0.1', '[]', '2023-03-23 15:29:53', '2023-03-23 15:29:53');
INSERT INTO `admin_operation_log` VALUES (31, 1, 'admin', 'GET', '127.0.0.1', '[]', '2023-03-23 15:29:55', '2023-03-23 15:29:55');
INSERT INTO `admin_operation_log` VALUES (32, 1, 'admin', 'GET', '127.0.0.1', '[]', '2023-03-23 15:29:56', '2023-03-23 15:29:56');
INSERT INTO `admin_operation_log` VALUES (33, 1, 'admin', 'GET', '127.0.0.1', '[]', '2023-03-23 15:29:57', '2023-03-23 15:29:57');
INSERT INTO `admin_operation_log` VALUES (34, 1, 'admin', 'GET', '127.0.0.1', '[]', '2023-03-23 15:30:17', '2023-03-23 15:30:17');
INSERT INTO `admin_operation_log` VALUES (35, 1, 'admin', 'GET', '127.0.0.1', '[]', '2023-03-23 15:30:18', '2023-03-23 15:30:18');
INSERT INTO `admin_operation_log` VALUES (36, 1, 'admin', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-03-23 15:31:54', '2023-03-23 15:31:54');
INSERT INTO `admin_operation_log` VALUES (37, 1, 'admin', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-03-23 15:31:57', '2023-03-23 15:31:57');
INSERT INTO `admin_operation_log` VALUES (38, 1, 'admin/auth/users', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-03-23 15:32:00', '2023-03-23 15:32:00');
INSERT INTO `admin_operation_log` VALUES (39, 1, 'admin/auth/users/create', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-03-23 15:32:03', '2023-03-23 15:32:03');
INSERT INTO `admin_operation_log` VALUES (40, 1, 'admin/auth/users', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-03-23 15:32:04', '2023-03-23 15:32:04');
INSERT INTO `admin_operation_log` VALUES (41, 1, 'admin/auth/users', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-03-23 15:32:07', '2023-03-23 15:32:07');
INSERT INTO `admin_operation_log` VALUES (42, 1, 'admin/auth/users', 'GET', '127.0.0.1', '[]', '2023-03-23 15:32:09', '2023-03-23 15:32:09');
INSERT INTO `admin_operation_log` VALUES (43, 1, 'admin/auth/users', 'GET', '127.0.0.1', '[]', '2023-03-23 15:32:10', '2023-03-23 15:32:10');
INSERT INTO `admin_operation_log` VALUES (44, 1, 'admin/auth/users', 'GET', '127.0.0.1', '[]', '2023-03-23 15:38:05', '2023-03-23 15:38:05');
INSERT INTO `admin_operation_log` VALUES (45, 1, 'admin', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-03-23 15:38:08', '2023-03-23 15:38:08');
INSERT INTO `admin_operation_log` VALUES (46, 1, 'admin', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-03-23 15:38:12', '2023-03-23 15:38:12');
INSERT INTO `admin_operation_log` VALUES (47, 1, 'admin/auth/users', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-03-23 15:38:27', '2023-03-23 15:38:27');
INSERT INTO `admin_operation_log` VALUES (48, 1, 'admin/auth/menu', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-03-23 15:38:31', '2023-03-23 15:38:31');
INSERT INTO `admin_operation_log` VALUES (49, 1, 'admin/auth/menu', 'POST', '127.0.0.1', '{\"parent_id\":\"0\",\"title\":\"\\u7528\\u6237\\u7ba1\\u7406\",\"icon\":\"fa-bars\",\"uri\":\"user\",\"roles\":[null],\"permission\":null,\"_token\":\"xXnt53T13yVdcXjI3LeXd1QlLcpfmhXjIFhHtdPK\"}', '2023-03-23 15:38:50', '2023-03-23 15:38:50');
INSERT INTO `admin_operation_log` VALUES (50, 1, 'admin/auth/menu', 'GET', '127.0.0.1', '[]', '2023-03-23 15:38:51', '2023-03-23 15:38:51');
INSERT INTO `admin_operation_log` VALUES (51, 1, 'admin/auth/menu', 'GET', '127.0.0.1', '[]', '2023-03-23 15:38:53', '2023-03-23 15:38:53');
INSERT INTO `admin_operation_log` VALUES (52, 1, 'admin/auth/menu', 'GET', '127.0.0.1', '[]', '2023-03-23 15:39:42', '2023-03-23 15:39:42');
INSERT INTO `admin_operation_log` VALUES (53, 1, 'admin/auth/menu', 'GET', '127.0.0.1', '[]', '2023-03-23 15:39:55', '2023-03-23 15:39:55');
INSERT INTO `admin_operation_log` VALUES (54, 1, 'admin/auth/menu', 'GET', '127.0.0.1', '[]', '2023-03-23 15:39:57', '2023-03-23 15:39:57');
INSERT INTO `admin_operation_log` VALUES (55, 1, 'admin/auth/menu', 'GET', '127.0.0.1', '[]', '2023-03-23 15:40:50', '2023-03-23 15:40:50');
INSERT INTO `admin_operation_log` VALUES (56, 1, 'admin/auth/menu', 'GET', '127.0.0.1', '[]', '2023-03-23 15:40:51', '2023-03-23 15:40:51');
INSERT INTO `admin_operation_log` VALUES (57, 1, 'admin/auth/menu', 'GET', '127.0.0.1', '[]', '2023-03-23 15:40:55', '2023-03-23 15:40:55');
INSERT INTO `admin_operation_log` VALUES (58, 1, 'admin/auth/menu', 'POST', '127.0.0.1', '{\"parent_id\":\"0\",\"title\":\"\\u7528\\u6237\\u53d1\\u5e16\",\"icon\":\"fa-bars\",\"uri\":\"article\",\"roles\":[null],\"permission\":null,\"_token\":\"xXnt53T13yVdcXjI3LeXd1QlLcpfmhXjIFhHtdPK\"}', '2023-03-23 15:41:22', '2023-03-23 15:41:22');
INSERT INTO `admin_operation_log` VALUES (59, 1, 'admin/auth/menu', 'GET', '127.0.0.1', '[]', '2023-03-23 15:41:22', '2023-03-23 15:41:22');
INSERT INTO `admin_operation_log` VALUES (60, 1, 'admin/auth/menu', 'GET', '127.0.0.1', '[]', '2023-03-23 15:42:06', '2023-03-23 15:42:06');
INSERT INTO `admin_operation_log` VALUES (61, 1, 'admin/auth/menu/8/edit', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-03-23 15:42:09', '2023-03-23 15:42:09');
INSERT INTO `admin_operation_log` VALUES (62, 1, 'admin/auth/menu/8', 'PUT', '127.0.0.1', '{\"parent_id\":\"0\",\"title\":\"\\u7528\\u6237\\u7ba1\\u7406\",\"icon\":\"fa-users\",\"uri\":\"user\",\"roles\":[null],\"permission\":null,\"_token\":\"xXnt53T13yVdcXjI3LeXd1QlLcpfmhXjIFhHtdPK\",\"_method\":\"PUT\",\"_previous_\":\"http:\\/\\/lc.shequ\\/admin\\/auth\\/menu\"}', '2023-03-23 15:42:18', '2023-03-23 15:42:18');
INSERT INTO `admin_operation_log` VALUES (63, 1, 'admin/auth/menu', 'GET', '127.0.0.1', '[]', '2023-03-23 15:42:18', '2023-03-23 15:42:18');
INSERT INTO `admin_operation_log` VALUES (64, 1, 'admin/auth/menu/9/edit', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-03-23 15:42:20', '2023-03-23 15:42:20');
INSERT INTO `admin_operation_log` VALUES (65, 1, 'admin/auth/menu/9', 'PUT', '127.0.0.1', '{\"parent_id\":\"0\",\"title\":\"\\u7528\\u6237\\u53d1\\u5e16\",\"icon\":\"fa-dedent\",\"uri\":\"article\",\"roles\":[null],\"permission\":null,\"_token\":\"xXnt53T13yVdcXjI3LeXd1QlLcpfmhXjIFhHtdPK\",\"_method\":\"PUT\",\"_previous_\":\"http:\\/\\/lc.shequ\\/admin\\/auth\\/menu\"}', '2023-03-23 15:42:36', '2023-03-23 15:42:36');
INSERT INTO `admin_operation_log` VALUES (66, 1, 'admin/auth/menu', 'GET', '127.0.0.1', '[]', '2023-03-23 15:42:36', '2023-03-23 15:42:36');
INSERT INTO `admin_operation_log` VALUES (67, 1, 'admin/auth/menu', 'GET', '127.0.0.1', '[]', '2023-03-23 15:42:37', '2023-03-23 15:42:37');
INSERT INTO `admin_operation_log` VALUES (68, 1, 'admin', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-03-23 15:42:39', '2023-03-23 15:42:39');
INSERT INTO `admin_operation_log` VALUES (69, 1, 'admin/auth/menu', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-03-23 15:42:43', '2023-03-23 15:42:43');
INSERT INTO `admin_operation_log` VALUES (70, 1, 'admin/auth/menu/1', 'DELETE', '127.0.0.1', '{\"_method\":\"delete\",\"_token\":\"xXnt53T13yVdcXjI3LeXd1QlLcpfmhXjIFhHtdPK\"}', '2023-03-23 15:42:48', '2023-03-23 15:42:48');
INSERT INTO `admin_operation_log` VALUES (71, 1, 'admin/auth/menu', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-03-23 15:42:48', '2023-03-23 15:42:48');
INSERT INTO `admin_operation_log` VALUES (72, 1, 'admin/auth/menu', 'GET', '127.0.0.1', '[]', '2023-03-23 15:42:51', '2023-03-23 15:42:51');
INSERT INTO `admin_operation_log` VALUES (73, 1, 'admin/auth/menu', 'GET', '127.0.0.1', '[]', '2023-03-23 15:45:09', '2023-03-23 15:45:09');
INSERT INTO `admin_operation_log` VALUES (74, 1, 'admin/user', 'GET', '127.0.0.1', '[]', '2023-03-23 15:45:39', '2023-03-23 15:45:39');
INSERT INTO `admin_operation_log` VALUES (75, 1, 'admin/user', 'GET', '127.0.0.1', '[]', '2023-03-23 15:45:40', '2023-03-23 15:45:40');
INSERT INTO `admin_operation_log` VALUES (76, 1, 'admin/user', 'GET', '127.0.0.1', '[]', '2023-03-23 15:59:26', '2023-03-23 15:59:26');
INSERT INTO `admin_operation_log` VALUES (77, 1, 'admin/user', 'GET', '127.0.0.1', '[]', '2023-03-23 15:59:34', '2023-03-23 15:59:34');
INSERT INTO `admin_operation_log` VALUES (78, 1, 'admin/user', 'GET', '127.0.0.1', '[]', '2023-03-23 15:59:45', '2023-03-23 15:59:45');
INSERT INTO `admin_operation_log` VALUES (79, 1, 'admin/user/create', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-03-23 15:59:52', '2023-03-23 15:59:52');
INSERT INTO `admin_operation_log` VALUES (80, 1, 'admin/user', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-03-23 15:59:54', '2023-03-23 15:59:54');
INSERT INTO `admin_operation_log` VALUES (81, 1, 'admin/user', 'GET', '127.0.0.1', '[]', '2023-03-23 16:04:27', '2023-03-23 16:04:27');
INSERT INTO `admin_operation_log` VALUES (82, 1, 'admin/user', 'GET', '127.0.0.1', '[]', '2023-03-23 16:04:28', '2023-03-23 16:04:28');
INSERT INTO `admin_operation_log` VALUES (83, 1, 'admin/user', 'GET', '127.0.0.1', '[]', '2023-03-23 16:05:44', '2023-03-23 16:05:44');
INSERT INTO `admin_operation_log` VALUES (84, 1, 'admin/user', 'GET', '127.0.0.1', '[]', '2023-03-23 16:06:17', '2023-03-23 16:06:17');
INSERT INTO `admin_operation_log` VALUES (85, 1, 'admin/user', 'GET', '127.0.0.1', '[]', '2023-03-23 16:06:18', '2023-03-23 16:06:18');
INSERT INTO `admin_operation_log` VALUES (86, 1, 'admin/user', 'GET', '127.0.0.1', '[]', '2023-03-23 16:06:29', '2023-03-23 16:06:29');
INSERT INTO `admin_operation_log` VALUES (87, 1, 'admin/user', 'GET', '127.0.0.1', '[]', '2023-03-23 16:06:29', '2023-03-23 16:06:29');
INSERT INTO `admin_operation_log` VALUES (88, 1, 'admin/user', 'GET', '127.0.0.1', '[]', '2023-03-23 16:06:30', '2023-03-23 16:06:30');
INSERT INTO `admin_operation_log` VALUES (89, 1, 'admin/user', 'GET', '127.0.0.1', '[]', '2023-03-23 16:06:39', '2023-03-23 16:06:39');
INSERT INTO `admin_operation_log` VALUES (90, 1, 'admin/user', 'GET', '127.0.0.1', '[]', '2023-03-23 16:06:40', '2023-03-23 16:06:40');
INSERT INTO `admin_operation_log` VALUES (91, 1, 'admin/user', 'GET', '127.0.0.1', '[]', '2023-03-23 16:06:53', '2023-03-23 16:06:53');
INSERT INTO `admin_operation_log` VALUES (92, 1, 'admin/user', 'GET', '127.0.0.1', '[]', '2023-03-23 16:07:13', '2023-03-23 16:07:13');
INSERT INTO `admin_operation_log` VALUES (93, 1, 'admin/user/1/edit', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-03-23 16:07:18', '2023-03-23 16:07:18');
INSERT INTO `admin_operation_log` VALUES (94, 1, 'admin/user/1/edit', 'GET', '127.0.0.1', '[]', '2023-03-23 16:07:36', '2023-03-23 16:07:36');
INSERT INTO `admin_operation_log` VALUES (95, 1, 'admin/user/1/edit', 'GET', '127.0.0.1', '[]', '2023-03-23 16:07:39', '2023-03-23 16:07:39');
INSERT INTO `admin_operation_log` VALUES (96, 1, 'admin/user', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-03-23 16:07:40', '2023-03-23 16:07:40');
INSERT INTO `admin_operation_log` VALUES (97, 1, 'admin/user/create', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-03-23 16:07:41', '2023-03-23 16:07:41');
INSERT INTO `admin_operation_log` VALUES (98, 1, 'admin/user', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-03-23 16:07:44', '2023-03-23 16:07:44');
INSERT INTO `admin_operation_log` VALUES (99, 1, 'admin/user', 'GET', '127.0.0.1', '[]', '2023-03-23 16:08:10', '2023-03-23 16:08:10');
INSERT INTO `admin_operation_log` VALUES (100, 1, 'admin/user', 'GET', '127.0.0.1', '[]', '2023-03-23 16:08:28', '2023-03-23 16:08:28');
INSERT INTO `admin_operation_log` VALUES (101, 1, 'admin/user/create', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-03-23 16:08:30', '2023-03-23 16:08:30');
INSERT INTO `admin_operation_log` VALUES (102, 1, 'admin/user/create', 'GET', '127.0.0.1', '[]', '2023-03-23 16:10:05', '2023-03-23 16:10:05');
INSERT INTO `admin_operation_log` VALUES (103, 1, 'admin/user/create', 'GET', '127.0.0.1', '[]', '2023-03-23 16:10:09', '2023-03-23 16:10:09');
INSERT INTO `admin_operation_log` VALUES (104, 1, 'admin/user/create', 'GET', '127.0.0.1', '[]', '2023-03-23 16:11:11', '2023-03-23 16:11:11');
INSERT INTO `admin_operation_log` VALUES (105, 1, 'admin/user/create', 'GET', '127.0.0.1', '[]', '2023-03-23 16:11:17', '2023-03-23 16:11:17');
INSERT INTO `admin_operation_log` VALUES (106, 1, 'admin/user/create', 'GET', '127.0.0.1', '[]', '2023-03-23 16:11:18', '2023-03-23 16:11:18');
INSERT INTO `admin_operation_log` VALUES (107, 1, 'admin/user/create', 'GET', '127.0.0.1', '[]', '2023-03-23 16:11:19', '2023-03-23 16:11:19');
INSERT INTO `admin_operation_log` VALUES (108, 1, 'admin/user/create', 'GET', '127.0.0.1', '[]', '2023-03-23 16:11:30', '2023-03-23 16:11:30');
INSERT INTO `admin_operation_log` VALUES (109, 1, 'admin/user/create', 'GET', '127.0.0.1', '[]', '2023-03-23 16:11:35', '2023-03-23 16:11:35');
INSERT INTO `admin_operation_log` VALUES (110, 1, 'admin/user/create', 'GET', '127.0.0.1', '[]', '2023-03-23 16:17:35', '2023-03-23 16:17:35');
INSERT INTO `admin_operation_log` VALUES (111, 1, 'admin/user/create', 'GET', '127.0.0.1', '[]', '2023-03-23 16:17:36', '2023-03-23 16:17:36');
INSERT INTO `admin_operation_log` VALUES (112, 1, 'admin/user/create', 'GET', '127.0.0.1', '[]', '2023-03-23 16:17:44', '2023-03-23 16:17:44');
INSERT INTO `admin_operation_log` VALUES (113, 1, 'admin/user', 'GET', '127.0.0.1', '[]', '2023-03-23 16:18:31', '2023-03-23 16:18:31');
INSERT INTO `admin_operation_log` VALUES (114, 1, 'admin/user', 'GET', '127.0.0.1', '[]', '2023-03-23 16:18:33', '2023-03-23 16:18:33');
INSERT INTO `admin_operation_log` VALUES (115, 1, 'admin/user', 'GET', '127.0.0.1', '[]', '2023-03-23 16:18:34', '2023-03-23 16:18:34');
INSERT INTO `admin_operation_log` VALUES (116, 1, 'admin/user/3/edit', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-03-23 16:18:55', '2023-03-23 16:18:55');
INSERT INTO `admin_operation_log` VALUES (117, 1, 'admin/user/3', 'PUT', '127.0.0.1', '{\"name\":\"123\",\"head_img\":\"admin_uploads\\/article\\/48e0d0911d6dad96c3a48eea97c9ac96.jpeg\",\"status\":\"1\",\"_token\":\"xXnt53T13yVdcXjI3LeXd1QlLcpfmhXjIFhHtdPK\",\"_method\":\"PUT\",\"_previous_\":\"http:\\/\\/lc.shequ\\/admin\\/user\"}', '2023-03-23 16:18:57', '2023-03-23 16:18:57');
INSERT INTO `admin_operation_log` VALUES (118, 1, 'admin/user', 'GET', '127.0.0.1', '[]', '2023-03-23 16:18:57', '2023-03-23 16:18:57');
INSERT INTO `admin_operation_log` VALUES (119, 1, 'admin/user', 'GET', '127.0.0.1', '[]', '2023-03-23 16:19:12', '2023-03-23 16:19:12');
INSERT INTO `admin_operation_log` VALUES (120, 1, 'admin/user', 'GET', '127.0.0.1', '[]', '2023-03-23 16:22:32', '2023-03-23 16:22:32');
INSERT INTO `admin_operation_log` VALUES (121, 1, 'admin/article', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-03-23 16:22:33', '2023-03-23 16:22:33');
INSERT INTO `admin_operation_log` VALUES (122, 1, 'admin/article', 'GET', '127.0.0.1', '[]', '2023-03-23 16:22:55', '2023-03-23 16:22:55');
INSERT INTO `admin_operation_log` VALUES (123, 1, 'admin/article', 'GET', '127.0.0.1', '[]', '2023-03-23 16:23:48', '2023-03-23 16:23:48');
INSERT INTO `admin_operation_log` VALUES (124, 1, 'admin/article', 'GET', '127.0.0.1', '[]', '2023-03-23 16:24:11', '2023-03-23 16:24:11');
INSERT INTO `admin_operation_log` VALUES (125, 1, 'admin/article', 'GET', '127.0.0.1', '[]', '2023-03-23 16:24:12', '2023-03-23 16:24:12');
INSERT INTO `admin_operation_log` VALUES (126, 1, 'admin/article', 'GET', '127.0.0.1', '[]', '2023-03-23 16:24:19', '2023-03-23 16:24:19');
INSERT INTO `admin_operation_log` VALUES (127, 1, 'admin/article', 'GET', '127.0.0.1', '[]', '2023-03-23 16:24:28', '2023-03-23 16:24:28');
INSERT INTO `admin_operation_log` VALUES (128, 1, 'admin/article', 'GET', '127.0.0.1', '[]', '2023-03-23 16:24:29', '2023-03-23 16:24:29');
INSERT INTO `admin_operation_log` VALUES (129, 1, 'admin/article', 'GET', '127.0.0.1', '[]', '2023-03-23 16:24:39', '2023-03-23 16:24:39');
INSERT INTO `admin_operation_log` VALUES (130, 1, 'admin/article', 'GET', '127.0.0.1', '[]', '2023-03-23 16:24:57', '2023-03-23 16:24:57');
INSERT INTO `admin_operation_log` VALUES (131, 1, 'admin/article', 'GET', '127.0.0.1', '[]', '2023-03-23 16:24:58', '2023-03-23 16:24:58');
INSERT INTO `admin_operation_log` VALUES (132, 1, 'admin/article', 'GET', '127.0.0.1', '[]', '2023-03-23 16:27:59', '2023-03-23 16:27:59');
INSERT INTO `admin_operation_log` VALUES (133, 1, 'admin/article', 'GET', '127.0.0.1', '[]', '2023-03-23 16:28:13', '2023-03-23 16:28:13');
INSERT INTO `admin_operation_log` VALUES (134, 1, 'admin/article', 'GET', '127.0.0.1', '[]', '2023-03-23 16:28:25', '2023-03-23 16:28:25');
INSERT INTO `admin_operation_log` VALUES (135, 1, 'admin/article', 'GET', '127.0.0.1', '[]', '2023-03-23 16:28:50', '2023-03-23 16:28:50');
INSERT INTO `admin_operation_log` VALUES (136, 1, 'admin/article', 'GET', '127.0.0.1', '[]', '2023-03-23 16:28:52', '2023-03-23 16:28:52');
INSERT INTO `admin_operation_log` VALUES (137, 1, 'admin/article', 'GET', '127.0.0.1', '[]', '2023-03-23 16:28:52', '2023-03-23 16:28:52');
INSERT INTO `admin_operation_log` VALUES (138, 1, 'admin/article', 'GET', '127.0.0.1', '[]', '2023-03-23 16:29:05', '2023-03-23 16:29:05');
INSERT INTO `admin_operation_log` VALUES (139, 1, 'admin/article', 'GET', '127.0.0.1', '[]', '2023-03-23 16:29:07', '2023-03-23 16:29:07');
INSERT INTO `admin_operation_log` VALUES (140, 1, 'admin/article', 'GET', '127.0.0.1', '[]', '2023-03-23 16:29:16', '2023-03-23 16:29:16');
INSERT INTO `admin_operation_log` VALUES (141, 1, 'admin/article', 'GET', '127.0.0.1', '[]', '2023-03-23 16:29:17', '2023-03-23 16:29:17');
INSERT INTO `admin_operation_log` VALUES (142, 1, 'admin/article', 'GET', '127.0.0.1', '[]', '2023-03-23 16:29:18', '2023-03-23 16:29:18');
INSERT INTO `admin_operation_log` VALUES (143, 1, 'admin/article', 'GET', '127.0.0.1', '[]', '2023-03-23 16:29:20', '2023-03-23 16:29:20');
INSERT INTO `admin_operation_log` VALUES (144, 1, 'admin/article', 'GET', '127.0.0.1', '[]', '2023-03-23 16:29:21', '2023-03-23 16:29:21');
INSERT INTO `admin_operation_log` VALUES (145, 1, 'admin/article', 'GET', '127.0.0.1', '[]', '2023-03-23 16:29:21', '2023-03-23 16:29:21');
INSERT INTO `admin_operation_log` VALUES (146, 1, 'admin/article', 'GET', '127.0.0.1', '[]', '2023-03-23 16:29:36', '2023-03-23 16:29:36');
INSERT INTO `admin_operation_log` VALUES (147, 1, 'admin/article', 'GET', '127.0.0.1', '[]', '2023-03-23 16:29:37', '2023-03-23 16:29:37');
INSERT INTO `admin_operation_log` VALUES (148, 1, 'admin/article', 'GET', '127.0.0.1', '[]', '2023-03-23 16:29:56', '2023-03-23 16:29:56');
INSERT INTO `admin_operation_log` VALUES (149, 1, 'admin/article', 'GET', '127.0.0.1', '[]', '2023-03-23 16:30:04', '2023-03-23 16:30:04');
INSERT INTO `admin_operation_log` VALUES (150, 1, 'admin/article', 'GET', '127.0.0.1', '[]', '2023-03-23 16:30:05', '2023-03-23 16:30:05');
INSERT INTO `admin_operation_log` VALUES (151, 1, 'admin/article', 'GET', '127.0.0.1', '[]', '2023-03-23 16:30:08', '2023-03-23 16:30:08');
INSERT INTO `admin_operation_log` VALUES (152, 1, 'admin/article', 'GET', '127.0.0.1', '[]', '2023-03-23 16:30:22', '2023-03-23 16:30:22');
INSERT INTO `admin_operation_log` VALUES (153, 1, 'admin/article', 'GET', '127.0.0.1', '[]', '2023-03-23 16:30:23', '2023-03-23 16:30:23');
INSERT INTO `admin_operation_log` VALUES (154, 1, 'admin/article', 'GET', '127.0.0.1', '[]', '2023-03-23 16:30:25', '2023-03-23 16:30:25');
INSERT INTO `admin_operation_log` VALUES (155, 1, 'admin/article', 'GET', '127.0.0.1', '[]', '2023-03-23 16:30:27', '2023-03-23 16:30:27');
INSERT INTO `admin_operation_log` VALUES (156, 1, 'admin/article', 'GET', '127.0.0.1', '[]', '2023-03-23 16:30:55', '2023-03-23 16:30:55');
INSERT INTO `admin_operation_log` VALUES (157, 1, 'admin/article', 'GET', '127.0.0.1', '[]', '2023-03-23 16:30:56', '2023-03-23 16:30:56');
INSERT INTO `admin_operation_log` VALUES (158, 1, 'admin/article', 'GET', '127.0.0.1', '[]', '2023-03-23 16:30:57', '2023-03-23 16:30:57');
INSERT INTO `admin_operation_log` VALUES (159, 1, 'admin/article', 'GET', '127.0.0.1', '[]', '2023-03-23 16:31:23', '2023-03-23 16:31:23');
INSERT INTO `admin_operation_log` VALUES (160, 1, 'admin/article', 'GET', '127.0.0.1', '[]', '2023-03-23 16:31:24', '2023-03-23 16:31:24');
INSERT INTO `admin_operation_log` VALUES (161, 1, 'admin/article', 'GET', '127.0.0.1', '[]', '2023-03-23 16:31:37', '2023-03-23 16:31:37');
INSERT INTO `admin_operation_log` VALUES (162, 1, 'admin/article', 'GET', '127.0.0.1', '[]', '2023-03-23 16:31:37', '2023-03-23 16:31:37');
INSERT INTO `admin_operation_log` VALUES (163, 1, 'admin/article', 'GET', '127.0.0.1', '[]', '2023-03-23 16:31:41', '2023-03-23 16:31:41');
INSERT INTO `admin_operation_log` VALUES (164, 1, 'admin/article', 'GET', '127.0.0.1', '[]', '2023-03-23 16:31:44', '2023-03-23 16:31:44');
INSERT INTO `admin_operation_log` VALUES (165, 1, 'admin/article', 'GET', '127.0.0.1', '[]', '2023-03-23 16:31:53', '2023-03-23 16:31:53');
INSERT INTO `admin_operation_log` VALUES (166, 1, 'admin/article', 'GET', '127.0.0.1', '[]', '2023-03-23 16:31:55', '2023-03-23 16:31:55');
INSERT INTO `admin_operation_log` VALUES (167, 1, 'admin/article', 'GET', '127.0.0.1', '[]', '2023-03-23 16:31:57', '2023-03-23 16:31:57');
INSERT INTO `admin_operation_log` VALUES (168, 1, 'admin/article', 'GET', '127.0.0.1', '[]', '2023-03-23 16:31:57', '2023-03-23 16:31:57');
INSERT INTO `admin_operation_log` VALUES (169, 1, 'admin', 'GET', '118.228.150.100', '[]', '2023-03-24 06:27:44', '2023-03-24 06:27:44');
INSERT INTO `admin_operation_log` VALUES (170, 1, 'admin', 'GET', '118.228.150.100', '[]', '2023-03-24 06:43:33', '2023-03-24 06:43:33');
INSERT INTO `admin_operation_log` VALUES (171, 1, 'admin', 'GET', '118.228.150.100', '[]', '2023-03-24 06:43:45', '2023-03-24 06:43:45');
INSERT INTO `admin_operation_log` VALUES (172, 1, 'admin/auth/users', 'GET', '118.228.150.100', '{\"_pjax\":\"#pjax-container\"}', '2023-03-24 06:43:52', '2023-03-24 06:43:52');
INSERT INTO `admin_operation_log` VALUES (173, 1, 'admin/auth/roles', 'GET', '118.228.150.100', '{\"_pjax\":\"#pjax-container\"}', '2023-03-24 06:43:54', '2023-03-24 06:43:54');
INSERT INTO `admin_operation_log` VALUES (174, 1, 'admin/auth/permissions', 'GET', '118.228.150.100', '{\"_pjax\":\"#pjax-container\"}', '2023-03-24 06:43:56', '2023-03-24 06:43:56');
INSERT INTO `admin_operation_log` VALUES (175, 1, 'admin/auth/menu', 'GET', '118.228.150.100', '{\"_pjax\":\"#pjax-container\"}', '2023-03-24 06:43:56', '2023-03-24 06:43:56');
INSERT INTO `admin_operation_log` VALUES (176, 1, 'admin/auth/users', 'GET', '118.228.150.100', '{\"_pjax\":\"#pjax-container\"}', '2023-03-24 06:43:57', '2023-03-24 06:43:57');
INSERT INTO `admin_operation_log` VALUES (177, 1, 'admin/auth/users', 'GET', '118.228.150.100', '[]', '2023-03-24 06:45:08', '2023-03-24 06:45:08');
INSERT INTO `admin_operation_log` VALUES (178, 1, 'admin/article', 'GET', '118.228.150.100', '[]', '2023-03-24 14:49:43', '2023-03-24 14:49:43');
INSERT INTO `admin_operation_log` VALUES (179, 1, 'admin/article', 'GET', '118.228.150.100', '[]', '2023-03-24 14:49:45', '2023-03-24 14:49:45');
INSERT INTO `admin_operation_log` VALUES (180, 1, 'admin/article', 'GET', '118.228.150.100', '{\"_pjax\":\"#pjax-container\"}', '2023-03-24 14:49:49', '2023-03-24 14:49:49');
INSERT INTO `admin_operation_log` VALUES (181, 1, 'admin/user', 'GET', '118.228.150.100', '{\"_pjax\":\"#pjax-container\"}', '2023-03-24 14:49:50', '2023-03-24 14:49:50');
INSERT INTO `admin_operation_log` VALUES (182, 1, 'admin/user/1/edit', 'GET', '118.228.150.100', '{\"_pjax\":\"#pjax-container\"}', '2023-03-24 14:49:54', '2023-03-24 14:49:54');
INSERT INTO `admin_operation_log` VALUES (183, 1, 'admin/user/1/edit', 'GET', '118.228.150.100', '[]', '2023-03-24 14:50:28', '2023-03-24 14:50:28');
INSERT INTO `admin_operation_log` VALUES (184, 1, 'admin/user/1/edit', 'GET', '118.228.150.100', '[]', '2023-03-24 14:50:29', '2023-03-24 14:50:29');
INSERT INTO `admin_operation_log` VALUES (185, 1, 'admin/user/1/edit', 'GET', '118.228.150.100', '[]', '2023-03-24 14:50:30', '2023-03-24 14:50:30');
INSERT INTO `admin_operation_log` VALUES (186, 1, 'admin/user/1/edit', 'GET', '118.228.150.100', '[]', '2023-03-24 14:50:31', '2023-03-24 14:50:31');
INSERT INTO `admin_operation_log` VALUES (187, 1, 'admin/article', 'GET', '118.228.150.100', '{\"_pjax\":\"#pjax-container\"}', '2023-03-24 15:13:15', '2023-03-24 15:13:15');
INSERT INTO `admin_operation_log` VALUES (188, 1, 'admin/article', 'GET', '118.228.150.100', '[]', '2023-03-24 15:13:58', '2023-03-24 15:13:58');
INSERT INTO `admin_operation_log` VALUES (189, 1, 'admin', 'GET', '111.196.244.70', '[]', '2023-04-22 09:43:00', '2023-04-22 09:43:00');
INSERT INTO `admin_operation_log` VALUES (190, 1, 'admin/user', 'GET', '111.196.244.70', '[]', '2023-04-22 09:43:03', '2023-04-22 09:43:03');
INSERT INTO `admin_operation_log` VALUES (191, 1, 'admin/user/3/edit', 'GET', '111.196.244.70', '[]', '2023-04-22 09:43:06', '2023-04-22 09:43:06');
INSERT INTO `admin_operation_log` VALUES (192, 1, 'admin/user/3', 'PUT', '111.196.244.70', '{\"name\":\"\\u5bc7\\u4f0a\\u6db5\",\"head_img\":null,\"status\":\"1\",\"_token\":\"dV5CPcwnF0QIUuPhmwGtoI9jB7Fj1lExbOIcvMNb\",\"_method\":\"PUT\",\"_previous_\":\"http:\\/\\/shequ.codelaw.cn\\/admin\\/user\"}', '2023-04-22 09:43:12', '2023-04-22 09:43:12');
INSERT INTO `admin_operation_log` VALUES (193, 1, 'admin/user/3/edit', 'GET', '111.196.244.70', '[]', '2023-04-22 09:43:12', '2023-04-22 09:43:12');
INSERT INTO `admin_operation_log` VALUES (194, 1, 'admin/article', 'GET', '111.196.244.70', '{\"_pjax\":\"#pjax-container\"}', '2023-04-22 09:43:15', '2023-04-22 09:43:15');
INSERT INTO `admin_operation_log` VALUES (195, 1, 'admin/article/2/edit', 'GET', '111.196.244.70', '{\"_pjax\":\"#pjax-container\"}', '2023-04-22 09:43:18', '2023-04-22 09:43:18');
INSERT INTO `admin_operation_log` VALUES (196, 1, 'admin/article', 'GET', '111.196.244.70', '{\"_pjax\":\"#pjax-container\"}', '2023-04-22 09:43:22', '2023-04-22 09:43:22');
INSERT INTO `admin_operation_log` VALUES (197, 1, 'admin', 'GET', '127.0.0.1', '[]', '2023-04-24 18:26:20', '2023-04-24 18:26:20');
INSERT INTO `admin_operation_log` VALUES (198, 1, 'admin/user', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-04-24 18:26:22', '2023-04-24 18:26:22');
INSERT INTO `admin_operation_log` VALUES (199, 1, 'admin/article', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-04-24 18:26:28', '2023-04-24 18:26:28');
INSERT INTO `admin_operation_log` VALUES (200, 1, 'admin/article', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-04-24 18:26:31', '2023-04-24 18:26:31');
INSERT INTO `admin_operation_log` VALUES (201, 1, 'admin/article/2/edit', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-04-24 18:26:33', '2023-04-24 18:26:33');
INSERT INTO `admin_operation_log` VALUES (202, 1, 'admin/article', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-04-24 18:26:36', '2023-04-24 18:26:36');
INSERT INTO `admin_operation_log` VALUES (203, 1, 'admin/user', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-04-24 18:26:37', '2023-04-24 18:26:37');
INSERT INTO `admin_operation_log` VALUES (204, 1, 'admin/article', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-04-24 18:26:39', '2023-04-24 18:26:39');
INSERT INTO `admin_operation_log` VALUES (205, 1, 'admin/user', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-04-24 18:26:40', '2023-04-24 18:26:40');
INSERT INTO `admin_operation_log` VALUES (206, 1, 'admin/user/3/edit', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-04-24 18:26:43', '2023-04-24 18:26:43');
INSERT INTO `admin_operation_log` VALUES (207, 1, 'admin/user', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-04-24 18:26:46', '2023-04-24 18:26:46');
INSERT INTO `admin_operation_log` VALUES (208, 1, 'admin/user', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-04-24 18:26:49', '2023-04-24 18:26:49');
INSERT INTO `admin_operation_log` VALUES (209, 1, 'admin/user/3/edit', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-04-24 18:27:00', '2023-04-24 18:27:00');
INSERT INTO `admin_operation_log` VALUES (210, 1, 'admin/user', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-04-24 18:27:26', '2023-04-24 18:27:26');
INSERT INTO `admin_operation_log` VALUES (211, 1, 'admin/article', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-04-24 18:27:27', '2023-04-24 18:27:27');
INSERT INTO `admin_operation_log` VALUES (212, 1, 'admin/article', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-04-24 18:27:29', '2023-04-24 18:27:29');
INSERT INTO `admin_operation_log` VALUES (213, 1, 'admin/article/8/edit', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-04-24 18:27:49', '2023-04-24 18:27:49');
INSERT INTO `admin_operation_log` VALUES (214, 1, 'admin/article', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-04-24 18:28:04', '2023-04-24 18:28:04');
INSERT INTO `admin_operation_log` VALUES (215, 1, 'admin/article/8/edit', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-04-24 18:28:08', '2023-04-24 18:28:08');
INSERT INTO `admin_operation_log` VALUES (216, 1, 'admin/article/8/edit', 'GET', '127.0.0.1', '[]', '2023-04-24 18:30:40', '2023-04-24 18:30:40');
INSERT INTO `admin_operation_log` VALUES (217, 1, 'admin/article/8/edit', 'GET', '127.0.0.1', '[]', '2023-04-24 18:30:43', '2023-04-24 18:30:43');
INSERT INTO `admin_operation_log` VALUES (218, 1, 'admin/user', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-04-24 18:31:00', '2023-04-24 18:31:00');
INSERT INTO `admin_operation_log` VALUES (219, 1, 'admin/user/3/edit', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-04-24 18:31:03', '2023-04-24 18:31:03');
INSERT INTO `admin_operation_log` VALUES (220, 1, 'admin/user/3/edit', 'GET', '127.0.0.1', '[]', '2023-04-24 18:31:16', '2023-04-24 18:31:16');
INSERT INTO `admin_operation_log` VALUES (221, 1, 'admin/user/3/edit', 'GET', '127.0.0.1', '[]', '2023-04-24 18:31:18', '2023-04-24 18:31:18');
INSERT INTO `admin_operation_log` VALUES (222, 1, 'admin/user/3/edit', 'GET', '127.0.0.1', '[]', '2023-04-24 18:31:52', '2023-04-24 18:31:52');
INSERT INTO `admin_operation_log` VALUES (223, 1, 'admin/user', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-04-24 18:31:54', '2023-04-24 18:31:54');
INSERT INTO `admin_operation_log` VALUES (224, 1, 'admin/user', 'GET', '127.0.0.1', '[]', '2023-04-24 18:32:16', '2023-04-24 18:32:16');
INSERT INTO `admin_operation_log` VALUES (225, 1, 'admin/article', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-04-24 18:32:20', '2023-04-24 18:32:20');
INSERT INTO `admin_operation_log` VALUES (226, 1, 'admin/article', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-04-24 18:33:48', '2023-04-24 18:33:48');
INSERT INTO `admin_operation_log` VALUES (227, 1, 'admin/article', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-04-24 18:33:49', '2023-04-24 18:33:49');
INSERT INTO `admin_operation_log` VALUES (228, 1, 'admin/article', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-04-24 18:33:51', '2023-04-24 18:33:51');
INSERT INTO `admin_operation_log` VALUES (229, 1, 'admin/article/8/edit', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-04-24 18:33:55', '2023-04-24 18:33:55');
INSERT INTO `admin_operation_log` VALUES (230, 1, 'admin/user', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-04-24 18:34:27', '2023-04-24 18:34:27');
INSERT INTO `admin_operation_log` VALUES (231, 1, 'admin/user/7/edit', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-04-24 18:34:31', '2023-04-24 18:34:31');
INSERT INTO `admin_operation_log` VALUES (232, 1, 'admin/user/7', 'PUT', '127.0.0.1', '{\"name\":\"\\u6cd5\\u5916\\u72c2\\u5f92\\u5f20\\u4e09\",\"school_card\":\"\\/uploads\\/user_sc\\/user_sc_95f939b27408d01c6e6ee1fe0f08ec0a20a56564.jpg\",\"status\":\"1\",\"_token\":\"Dli5f9Oxo0n2G16hgAiIvT53OXxMAiYyybeatZSP\",\"_method\":\"PUT\",\"_previous_\":\"http:\\/\\/lc.shequ\\/admin\\/user\"}', '2023-04-24 18:34:35', '2023-04-24 18:34:35');
INSERT INTO `admin_operation_log` VALUES (233, 1, 'admin/user', 'GET', '127.0.0.1', '[]', '2023-04-24 18:34:35', '2023-04-24 18:34:35');
INSERT INTO `admin_operation_log` VALUES (234, 1, 'admin/article', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-04-24 18:34:37', '2023-04-24 18:34:37');
INSERT INTO `admin_operation_log` VALUES (235, 1, 'admin/article/2/edit', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-04-24 18:34:42', '2023-04-24 18:34:42');
INSERT INTO `admin_operation_log` VALUES (236, 1, 'admin/article/2/edit', 'GET', '127.0.0.1', '[]', '2023-04-24 18:35:03', '2023-04-24 18:35:03');
INSERT INTO `admin_operation_log` VALUES (237, 1, 'admin/article/2/edit', 'GET', '127.0.0.1', '[]', '2023-04-24 18:35:44', '2023-04-24 18:35:44');
INSERT INTO `admin_operation_log` VALUES (238, 1, 'admin/article/2/edit', 'GET', '127.0.0.1', '[]', '2023-04-24 18:36:00', '2023-04-24 18:36:00');
INSERT INTO `admin_operation_log` VALUES (239, 1, 'admin/article/2/edit', 'GET', '127.0.0.1', '[]', '2023-04-24 18:36:42', '2023-04-24 18:36:42');
INSERT INTO `admin_operation_log` VALUES (240, 1, 'admin/article/2/edit', 'GET', '127.0.0.1', '[]', '2023-04-24 18:36:43', '2023-04-24 18:36:43');
INSERT INTO `admin_operation_log` VALUES (241, 1, 'admin/article', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2023-04-24 18:36:46', '2023-04-24 18:36:46');
INSERT INTO `admin_operation_log` VALUES (242, 1, 'admin/article', 'GET', '127.0.0.1', '[]', '2023-04-24 18:37:19', '2023-04-24 18:37:19');

-- ----------------------------
-- Table structure for admin_permissions
-- ----------------------------
DROP TABLE IF EXISTS `admin_permissions`;
CREATE TABLE `admin_permissions`  (
  `id` int(0) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `http_method` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `http_path` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `admin_permissions_name_unique`(`name`) USING BTREE,
  UNIQUE INDEX `admin_permissions_slug_unique`(`slug`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of admin_permissions
-- ----------------------------
INSERT INTO `admin_permissions` VALUES (1, 'All permission', '*', '', '*', NULL, NULL);
INSERT INTO `admin_permissions` VALUES (2, 'Dashboard', 'dashboard', 'GET', '/', NULL, NULL);
INSERT INTO `admin_permissions` VALUES (3, 'Login', 'auth.login', '', '/auth/login\r\n/auth/logout', NULL, NULL);
INSERT INTO `admin_permissions` VALUES (4, 'User setting', 'auth.setting', 'GET,PUT', '/auth/setting', NULL, NULL);
INSERT INTO `admin_permissions` VALUES (5, 'Auth management', 'auth.management', '', '/auth/roles\r\n/auth/permissions\r\n/auth/menu\r\n/auth/logs', NULL, NULL);

-- ----------------------------
-- Table structure for admin_role_menu
-- ----------------------------
DROP TABLE IF EXISTS `admin_role_menu`;
CREATE TABLE `admin_role_menu`  (
  `role_id` int(0) NOT NULL,
  `menu_id` int(0) NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `admin_role_menu_role_id_menu_id_index`(`role_id`, `menu_id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of admin_role_menu
-- ----------------------------
INSERT INTO `admin_role_menu` VALUES (1, 2, NULL, NULL);

-- ----------------------------
-- Table structure for admin_role_permissions
-- ----------------------------
DROP TABLE IF EXISTS `admin_role_permissions`;
CREATE TABLE `admin_role_permissions`  (
  `role_id` int(0) NOT NULL,
  `permission_id` int(0) NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `admin_role_permissions_role_id_permission_id_index`(`role_id`, `permission_id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of admin_role_permissions
-- ----------------------------
INSERT INTO `admin_role_permissions` VALUES (1, 1, NULL, NULL);

-- ----------------------------
-- Table structure for admin_role_users
-- ----------------------------
DROP TABLE IF EXISTS `admin_role_users`;
CREATE TABLE `admin_role_users`  (
  `role_id` int(0) NOT NULL,
  `user_id` int(0) NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `admin_role_users_role_id_user_id_index`(`role_id`, `user_id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of admin_role_users
-- ----------------------------
INSERT INTO `admin_role_users` VALUES (1, 1, NULL, NULL);

-- ----------------------------
-- Table structure for admin_roles
-- ----------------------------
DROP TABLE IF EXISTS `admin_roles`;
CREATE TABLE `admin_roles`  (
  `id` int(0) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `admin_roles_name_unique`(`name`) USING BTREE,
  UNIQUE INDEX `admin_roles_slug_unique`(`slug`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of admin_roles
-- ----------------------------
INSERT INTO `admin_roles` VALUES (1, 'Administrator', 'administrator', '2023-03-09 06:50:21', '2023-03-09 06:50:21');

-- ----------------------------
-- Table structure for admin_user_permissions
-- ----------------------------
DROP TABLE IF EXISTS `admin_user_permissions`;
CREATE TABLE `admin_user_permissions`  (
  `user_id` int(0) NOT NULL,
  `permission_id` int(0) NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `admin_user_permissions_user_id_permission_id_index`(`user_id`, `permission_id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of admin_user_permissions
-- ----------------------------

-- ----------------------------
-- Table structure for admin_users
-- ----------------------------
DROP TABLE IF EXISTS `admin_users`;
CREATE TABLE `admin_users`  (
  `id` int(0) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(190) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `admin_users_username_unique`(`username`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of admin_users
-- ----------------------------
INSERT INTO `admin_users` VALUES (1, 'admin', '$2y$10$lpsFnRi5WrTxF9waqiIr2.4QzeT6HgCe3DZ7GlgxjeLz4XFTRL82C', 'Administrator', NULL, 'DlIBMIuq11DUfWLMLcOIW4OZkd8S8fRap5jU9akuEcDCHv8n5OI6B7NQH8k4', '2023-03-09 06:50:20', '2023-03-09 06:50:20');

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint(0) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `failed_jobs_uuid_unique`(`uuid`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(0) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(0) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2016_01_04_173148_create_admin_tables', 1);
INSERT INTO `migrations` VALUES (4, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (5, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens`  (
  `id` bigint(0) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(0) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `last_used_at` timestamp(0) NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `personal_access_tokens_token_unique`(`token`) USING BTREE,
  INDEX `personal_access_tokens_tokenable_type_tokenable_id_index`(`tokenable_type`, `tokenable_id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for sq_article
-- ----------------------------
DROP TABLE IF EXISTS `sq_article`;
CREATE TABLE `sq_article`  (
  `id` int(0) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(0) UNSIGNED NULL DEFAULT NULL,
  `title` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `category_id` int(0) UNSIGNED NULL DEFAULT NULL,
  `status` enum('0','1','2','99') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT '0' COMMENT '0为未审核',
  `remark` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL COMMENT '备注',
  `starnum` int(0) UNSIGNED NULL DEFAULT 0 COMMENT '点赞数',
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of sq_article
-- ----------------------------
INSERT INTO `sq_article` VALUES (2, 3, NULL, '我觉得是因为优秀学习者本来学习时长学习序列就多，再频次上出现学习疲劳的情况肯定比普通学习者多，所以其实要看的是频率', 1, '1', NULL, 0, '2022-03-09 17:54:21', '2023-04-21 17:54:21');
INSERT INTO `sq_article` VALUES (3, 3, NULL, '这个频率不好表示，所以就用控制变量法，选择与优秀学习者学习时长相同的普通学习者对比', 2, '1', NULL, 0, '2023-04-21 17:55:08', '2023-04-21 17:55:08');
INSERT INTO `sq_article` VALUES (4, 3, NULL, '我有一所房子，面朝大海，春暖花开', 3, '1', NULL, 0, '2023-04-21 17:55:57', '2023-04-21 17:55:57');
INSERT INTO `sq_article` VALUES (5, 3, NULL, '同城交友，在线等，24岁，是学生', 4, '1', NULL, 0, '2023-04-21 17:56:39', '2023-04-21 17:56:39');
INSERT INTO `sq_article` VALUES (6, 4, NULL, '看到了很漂亮的小猫！', 1, '1', NULL, 0, '2023-04-21 21:55:20', '2023-04-21 21:55:20');
INSERT INTO `sq_article` VALUES (7, 5, NULL, '今天多云、空气优，气温7℃。', 1, '1', NULL, 0, '2023-04-22 10:38:08', '2023-04-22 10:38:08');
INSERT INTO `sq_article` VALUES (8, 5, NULL, 'BNU学八宿舍床位出租！', 3, '1', NULL, 0, '2023-04-22 10:39:51', '2023-04-22 10:39:51');
INSERT INTO `sq_article` VALUES (9, 7, NULL, '한국어 테스트\r\nkorean test', 1, '0', NULL, 0, '2023-04-24 19:19:08', '2023-04-24 19:19:08');
INSERT INTO `sq_article` VALUES (10, 7, NULL, '한국어 테스트', 4, '0', NULL, 0, '2023-04-24 19:20:26', '2023-04-24 19:20:26');

-- ----------------------------
-- Table structure for sq_article_comment
-- ----------------------------
DROP TABLE IF EXISTS `sq_article_comment`;
CREATE TABLE `sq_article_comment`  (
  `id` int(0) NOT NULL AUTO_INCREMENT,
  `article_id` int(0) NULL DEFAULT NULL,
  `content` varchar(800) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(0) NULL DEFAULT NULL,
  `reply_to` int(0) NULL DEFAULT NULL,
  `created_at` datetime(0) NOT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of sq_article_comment
-- ----------------------------
INSERT INTO `sq_article_comment` VALUES (1, 7, '测试评论', 7, NULL, '2023-04-22 16:34:49', '2023-04-22 16:34:49');
INSERT INTO `sq_article_comment` VALUES (2, 8, '这是一个测试回复', 7, NULL, '2023-04-23 17:26:35', '2023-04-23 17:26:35');
INSERT INTO `sq_article_comment` VALUES (3, 3, 'test', 7, NULL, '2023-04-24 18:46:58', '2023-04-24 18:46:58');
INSERT INTO `sq_article_comment` VALUES (4, 8, '한국어 테스트', 7, NULL, '2023-04-24 19:20:47', '2023-04-24 19:20:47');

-- ----------------------------
-- Table structure for sq_category
-- ----------------------------
DROP TABLE IF EXISTS `sq_category`;
CREATE TABLE `sq_category`  (
  `id` int(0) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nick` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `category_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `sort` tinyint(0) UNSIGNED NULL DEFAULT 1,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of sq_category
-- ----------------------------
INSERT INTO `sq_category` VALUES (1, 'share', '分享', 1, NULL, NULL);
INSERT INTO `sq_category` VALUES (2, 'unused', '闲置', 2, NULL, NULL);
INSERT INTO `sq_category` VALUES (3, 'renting', '租房', 3, NULL, NULL);
INSERT INTO `sq_category` VALUES (4, 'friends', '交友', 4, NULL, NULL);

-- ----------------------------
-- Table structure for sq_notice
-- ----------------------------
DROP TABLE IF EXISTS `sq_notice`;
CREATE TABLE `sq_notice`  (
  `id` int(0) UNSIGNED NOT NULL AUTO_INCREMENT,
  `notice` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `to_user` int(0) NULL DEFAULT 0,
  `from_user` int(0) NULL DEFAULT NULL,
  `type` enum('star','comment','collect','notice') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT 'notice',
  `article_id` int(0) NULL DEFAULT NULL,
  `status` enum('0','1') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT '0',
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of sq_notice
-- ----------------------------
INSERT INTO `sq_notice` VALUES (1, NULL, 7, 6, 'comment', NULL, '1', NULL, '2023-04-26 14:45:44');
INSERT INTO `sq_notice` VALUES (2, '', 5, 7, 'star', 8, '0', '2023-04-25 16:48:15', '2023-04-25 16:48:15');

-- ----------------------------
-- Table structure for sq_user_collect
-- ----------------------------
DROP TABLE IF EXISTS `sq_user_collect`;
CREATE TABLE `sq_user_collect`  (
  `id` int(0) NOT NULL AUTO_INCREMENT,
  `article_id` int(0) NULL DEFAULT NULL,
  `user_id` int(0) NULL DEFAULT NULL,
  `status` enum('1','0') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT '1',
  `created_at` datetime(0) NOT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 223 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of sq_user_collect
-- ----------------------------
INSERT INTO `sq_user_collect` VALUES (213, 5, 3, '1', '2023-04-22 10:17:00', '2023-04-22 10:17:00');
INSERT INTO `sq_user_collect` VALUES (214, 6, 3, '1', '2023-04-22 10:17:05', '2023-04-22 10:20:25');
INSERT INTO `sq_user_collect` VALUES (215, 8, 7, '1', '2023-04-22 10:17:13', '2023-04-22 10:27:11');
INSERT INTO `sq_user_collect` VALUES (218, 7, 7, '1', '2023-04-23 17:32:35', '2023-04-23 17:32:35');
INSERT INTO `sq_user_collect` VALUES (219, 7, 3, '1', '2023-04-23 23:20:46', '2023-04-23 23:20:46');
INSERT INTO `sq_user_collect` VALUES (220, 6, 7, '0', '2023-04-24 17:50:26', '2023-04-24 18:25:30');
INSERT INTO `sq_user_collect` VALUES (221, 5, 7, '0', '2023-04-24 17:50:29', '2023-04-24 18:25:15');
INSERT INTO `sq_user_collect` VALUES (222, 3, 7, '1', '2023-04-24 18:46:46', '2023-04-24 18:46:46');
INSERT INTO `sq_user_collect` VALUES (223, 2, 3, '1', '2023-04-24 19:10:47', '2023-04-24 19:10:47');

-- ----------------------------
-- Table structure for sq_user_star
-- ----------------------------
DROP TABLE IF EXISTS `sq_user_star`;
CREATE TABLE `sq_user_star`  (
  `id` int(0) NOT NULL AUTO_INCREMENT,
  `article_id` int(0) NULL DEFAULT NULL,
  `user_id` int(0) NULL DEFAULT NULL,
  `status` enum('1','0') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT '1',
  `created_at` datetime(0) NOT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 224 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of sq_user_star
-- ----------------------------
INSERT INTO `sq_user_star` VALUES (213, 5, 3, '0', '2023-04-22 10:16:59', '2023-04-22 10:27:05');
INSERT INTO `sq_user_star` VALUES (214, 6, 3, '1', '2023-04-22 10:17:04', '2023-04-24 18:59:13');
INSERT INTO `sq_user_star` VALUES (215, 4, 3, '0', '2023-04-22 10:17:12', '2023-04-22 10:27:08');
INSERT INTO `sq_user_star` VALUES (216, 2, 3, '1', '2023-04-22 10:44:18', '2023-04-24 19:10:48');
INSERT INTO `sq_user_star` VALUES (218, 8, 7, '1', '2023-04-23 17:30:35', '2023-04-25 16:48:15');
INSERT INTO `sq_user_star` VALUES (219, 7, 3, '1', '2023-04-23 23:20:45', '2023-04-23 23:20:45');
INSERT INTO `sq_user_star` VALUES (220, 7, 7, '0', '2023-04-24 17:46:27', '2023-04-25 16:45:50');
INSERT INTO `sq_user_star` VALUES (221, 6, 7, '0', '2023-04-24 18:25:23', '2023-04-25 16:45:42');
INSERT INTO `sq_user_star` VALUES (222, 3, 7, '0', '2023-04-24 18:46:50', '2023-04-25 16:45:44');
INSERT INTO `sq_user_star` VALUES (223, 4, 7, '0', '2023-04-24 19:20:59', '2023-04-25 16:45:43');
INSERT INTO `sq_user_star` VALUES (224, 5, 7, '0', '2023-04-25 16:42:49', '2023-04-25 16:45:41');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint(0) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_code` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `changing_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `school_card` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp(0) NULL DEFAULT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `verification_code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `is_verified` int(0) NOT NULL DEFAULT 0,
  `status` int(0) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE,
  UNIQUE INDEX `users_school_card_unique`(`school_card`) USING BTREE,
  UNIQUE INDEX `users_user_code_unique`(`user_code`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (3, 'wx_1e2c85fd507c52e703ce48b70a5440d31bf3c423', 'Sept.九月', NULL, '1743301707@qq.com', '/uploads/user_sc/user_sc_ed219bdc47b84515c249a1ed6a45fe4fc6525dc7.png', NULL, '$2y$10$G4QQklBxihVyk7oduNajGOVuX94xO8ZUxC4cftEU/MJCAlw5M7Haa', 'ed219bdc47b84515c249a1ed6a45fe4fc6525dc7', 0, 0, NULL, '2023-04-21 17:50:17', '2023-04-24 18:59:55');
INSERT INTO `users` VALUES (4, 'wx_1e2c85fd507c52e703ce48b70a5440d31bf3c424', '公晨溪', NULL, 'gcx20020412@163.com', '/uploads/user_sc/user_sc_0b4c3f96ff71590dc58c3179a5214c850503d69d.jpg', NULL, '$2y$10$xAZ2qb3PSoPJBzT4VK26IOyegcvQp3R8eDkVJ23af7MPRWrsK.b4a', '0b4c3f96ff71590dc58c3179a5214c850503d69d', 0, 0, NULL, '2023-04-21 21:54:35', '2023-04-21 21:54:35');
INSERT INTO `users` VALUES (5, 'wx_1e2c85fd507c52e703ce48b70a5440d31bf3c425', '王璐瑶', NULL, '2791593320@qq.com', '/uploads/user_sc/user_sc_b1dfe73fc3da02d0b91d6eb3ff9270543d63ac2e.jpg', NULL, '$2y$10$n3Q30w7Tgt0iV1.QdzMox.tvJT5F6Jdx6jv3X6wDSWMvpkPeIpJbS', 'b1dfe73fc3da02d0b91d6eb3ff9270543d63ac2e', 0, 0, 'B5z1coLh4usqbQaruQLmYq0Ws3kVOtTxTFtGoOybAkVshk0fqXlRdyDkK9Ye', '2023-04-22 10:06:26', '2023-04-24 18:45:42');
INSERT INTO `users` VALUES (6, 'wx_1e2c85fd507c52e703ce48b70a5440d31bf3c426', '胡魏', NULL, '3093086023@qq.com', '/uploads/user_sc/user_sc_eaf4a8aacec55742385da1d217d216326119055a.png', NULL, '$2y$10$ZsQnuYBiAu/MDJJ525WchO1e3e70N2A98T7r/UODFmrNuMRmJuCoK', 'eaf4a8aacec55742385da1d217d216326119055a', 0, 0, NULL, '2023-04-22 10:36:57', '2023-04-22 10:36:57');
INSERT INTO `users` VALUES (7, 'wx_1e2c85fd507c52e703ce48b70a5440d31bf3c427', '法外狂徒张三', NULL, 'tyyphp@163.com', '/uploads/user_sc/user_sc_95f939b27408d01c6e6ee1fe0f08ec0a20a56564.jpg', NULL, '$2y$10$HllJurJVsvGvlpP141MoLuVd0CHwBuAaD1D/sLHKUIRpDzl1aB296', '95f939b27408d01c6e6ee1fe0f08ec0a20a56564', 0, 1, 'kQu0YSotPyQ1CqQ66Vijp39MAp0CesjrIjCKAuJKYqacvDSQlrLv7UdFf7VU', '2023-04-22 16:30:15', '2023-04-24 18:34:35');

SET FOREIGN_KEY_CHECKS = 1;
