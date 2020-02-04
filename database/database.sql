/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100408
 Source Host           : localhost:3306
 Source Schema         : rucak

 Target Server Type    : MySQL
 Target Server Version : 100408
 File Encoding         : 65001

 Date: 29/01/2020 09:57:40
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for dan
-- ----------------------------
DROP TABLE IF EXISTS `dan`;
CREATE TABLE `dan`  (
  `id_dan` int(11) NOT NULL AUTO_INCREMENT,
  `dan` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_dan`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of dan
-- ----------------------------
INSERT INTO `dan` VALUES (1, 'Ponedeljak');
INSERT INTO `dan` VALUES (2, 'Utorak');
INSERT INTO `dan` VALUES (3, 'Sreda');
INSERT INTO `dan` VALUES (4, 'Cetvrtak');
INSERT INTO `dan` VALUES (5, 'Petak');
INSERT INTO `dan` VALUES (6, 'Subota');
INSERT INTO `dan` VALUES (7, 'Nedelja');

-- ----------------------------
-- Table structure for glavno_jelo
-- ----------------------------
DROP TABLE IF EXISTS `glavno_jelo`;
CREATE TABLE `glavno_jelo`  (
  `id_glavno_jelo` int(11) NOT NULL AUTO_INCREMENT,
  `ime_jela` varchar(45) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nedelja` int(11) NULL DEFAULT NULL,
  `dan` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id_glavno_jelo`) USING BTREE,
  INDEX `fk_dan_dan`(`dan`) USING BTREE,
  CONSTRAINT `fk_dan_dan` FOREIGN KEY (`dan`) REFERENCES `dan` (`id_dan`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 47 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of glavno_jelo
-- ----------------------------
INSERT INTO `glavno_jelo` VALUES (1, 'Svinjska becka snicla', 1, 1);
INSERT INTO `glavno_jelo` VALUES (2, 'Pileci paprikas', 1, 1);
INSERT INTO `glavno_jelo` VALUES (3, 'Piletina sa mlincima', 1, 2);
INSERT INTO `glavno_jelo` VALUES (4, 'Juneci gulas', 1, 2);
INSERT INTO `glavno_jelo` VALUES (5, 'Prebranac sa kobasicom', 1, 3);
INSERT INTO `glavno_jelo` VALUES (6, 'Prasece pecenje', 1, 3);
INSERT INTO `glavno_jelo` VALUES (7, 'Svinjski vrat na satarasu', 1, 4);
INSERT INTO `glavno_jelo` VALUES (8, 'Sarma', 1, 4);
INSERT INTO `glavno_jelo` VALUES (9, 'Grasak sa piletinom', 1, 5);
INSERT INTO `glavno_jelo` VALUES (10, 'Svinjski raznjici', 1, 5);
INSERT INTO `glavno_jelo` VALUES (11, 'Punjena piletina', 2, 1);
INSERT INTO `glavno_jelo` VALUES (12, 'Sote stroganov', 2, 1);
INSERT INTO `glavno_jelo` VALUES (13, 'Pohovana slana palacinka', 2, 2);
INSERT INTO `glavno_jelo` VALUES (14, 'Svinjska muckalica', 2, 2);
INSERT INTO `glavno_jelo` VALUES (15, 'Musaka od krompira', 2, 3);
INSERT INTO `glavno_jelo` VALUES (16, 'Karadjordjeva', 2, 3);
INSERT INTO `glavno_jelo` VALUES (17, 'Svinjski but u saftu', 2, 4);
INSERT INTO `glavno_jelo` VALUES (18, 'Cezar salata', 2, 4);
INSERT INTO `glavno_jelo` VALUES (19, 'Podvarak sa suvim mesom', 2, 5);
INSERT INTO `glavno_jelo` VALUES (20, 'Svinjska kremenadla', 2, 5);
INSERT INTO `glavno_jelo` VALUES (21, 'Carski ustipak', 3, 1);
INSERT INTO `glavno_jelo` VALUES (22, 'Pileci sote', 3, 1);
INSERT INTO `glavno_jelo` VALUES (23, 'Cupkana prasetina u saftu', 3, 2);
INSERT INTO `glavno_jelo` VALUES (24, 'Pohovana piletina', 3, 2);
INSERT INTO `glavno_jelo` VALUES (25, 'Cufte u paradajz sosu', 3, 3);
INSERT INTO `glavno_jelo` VALUES (26, 'Jagnjece pecenje', 3, 3);
INSERT INTO `glavno_jelo` VALUES (27, 'Zapecene makarone-bolonjez', 3, 4);
INSERT INTO `glavno_jelo` VALUES (28, 'Punjena vesalica', 3, 4);
INSERT INTO `glavno_jelo` VALUES (29, 'Fasirane snicle', 3, 5);
INSERT INTO `glavno_jelo` VALUES (30, 'Djuvec', 3, 5);
INSERT INTO `glavno_jelo` VALUES (31, 'Punjene paprike', 4, 1);
INSERT INTO `glavno_jelo` VALUES (32, 'Natur snicla', 4, 1);
INSERT INTO `glavno_jelo` VALUES (33, 'Spring rolnice', 4, 2);
INSERT INTO `glavno_jelo` VALUES (34, 'Piletina cornflakes', 4, 2);
INSERT INTO `glavno_jelo` VALUES (35, 'Svinjski becarac', 4, 3);
INSERT INTO `glavno_jelo` VALUES (36, 'Cureci-Nuggets', 4, 3);
INSERT INTO `glavno_jelo` VALUES (37, 'Gratinirane palacinke', 4, 4);
INSERT INTO `glavno_jelo` VALUES (38, 'Lovacke snicle', 4, 4);
INSERT INTO `glavno_jelo` VALUES (39, 'Punjene meksicke tortilje', 4, 5);
INSERT INTO `glavno_jelo` VALUES (40, 'Cordon bleu(poh.punjena vesalica,kackavalj,su', 4, 5);
INSERT INTO `glavno_jelo` VALUES (43, 'Oslic u kukuruznom brasnu', 0, 7);
INSERT INTO `glavno_jelo` VALUES (44, 'Pastrmka', 0, 7);
INSERT INTO `glavno_jelo` VALUES (45, 'Rizoto sa salsom od povrca', 0, 7);
INSERT INTO `glavno_jelo` VALUES (46, 'Riblji stapici', 0, 7);

-- ----------------------------
-- Table structure for hleb
-- ----------------------------
DROP TABLE IF EXISTS `hleb`;
CREATE TABLE `hleb`  (
  `id_hleb` int(11) NOT NULL AUTO_INCREMENT,
  `ime_hleba` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_hleb`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hleb
-- ----------------------------
INSERT INTO `hleb` VALUES (1, 'Domaca lepinja od belog brasna');
INSERT INTO `hleb` VALUES (2, 'Domaca lepinja od heljdinog brasna');

-- ----------------------------
-- Table structure for kompanija
-- ----------------------------
DROP TABLE IF EXISTS `kompanija`;
CREATE TABLE `kompanija`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `naziv` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kontakt` int(15) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of kompanija
-- ----------------------------
INSERT INTO `kompanija` VALUES (1, 'Avangarda', 'milanradusin@yahoo.com', 641674221);

-- ----------------------------
-- Table structure for menu
-- ----------------------------
DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NULL DEFAULT NULL,
  `href` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `icon` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `order` int(11) NULL DEFAULT NULL,
  `description` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of menu
-- ----------------------------
INSERT INTO `menu` VALUES (1, 0, '/porudzbina/index', NULL, 'Porudzbine', 1, 'Porudzbine link');
INSERT INTO `menu` VALUES (2, 0, '/glavno-jelo/index', NULL, 'Glavno jelo', 2, NULL);
INSERT INTO `menu` VALUES (4, 0, '/salata/index', NULL, 'Salata', 3, NULL);
INSERT INTO `menu` VALUES (5, 0, '/prilog/index', NULL, 'Prilog', 4, NULL);
INSERT INTO `menu` VALUES (6, 0, '/osoba/index', NULL, 'Zaposleni', 5, NULL);
INSERT INTO `menu` VALUES (7, 0, '/kompanija/index', NULL, 'Kopmanije', 6, NULL);
INSERT INTO `menu` VALUES (8, 0, '/site/login', NULL, 'Login', 7, NULL);
INSERT INTO `menu` VALUES (9, 0, '/site/logout', NULL, 'Logout', 8, NULL);

-- ----------------------------
-- Table structure for migration
-- ----------------------------
DROP TABLE IF EXISTS `migration`;
CREATE TABLE `migration`  (
  `version` varchar(180) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `apply_time` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`version`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migration
-- ----------------------------
INSERT INTO `migration` VALUES ('m140209_132017_init', 1577360087);
INSERT INTO `migration` VALUES ('m140403_174025_create_account_table', 1577360087);
INSERT INTO `migration` VALUES ('m140504_113157_update_tables', 1577360087);
INSERT INTO `migration` VALUES ('m140504_130429_create_token_table', 1577360087);
INSERT INTO `migration` VALUES ('m140830_171933_fix_ip_field', 1577360087);
INSERT INTO `migration` VALUES ('m140830_172703_change_account_table_name', 1577360087);
INSERT INTO `migration` VALUES ('m141222_110026_update_ip_field', 1577360087);
INSERT INTO `migration` VALUES ('m141222_135246_alter_username_length', 1577360088);
INSERT INTO `migration` VALUES ('m150614_103145_update_social_account_table', 1577360088);
INSERT INTO `migration` VALUES ('m150623_212711_fix_username_notnull', 1577360088);
INSERT INTO `migration` VALUES ('m151218_234654_add_timezone_to_profile', 1577360088);
INSERT INTO `migration` VALUES ('m160929_103127_add_last_login_at_to_user_table', 1577360088);
INSERT INTO `migration` VALUES ('m191201_095231_menu', 1575194154);

-- ----------------------------
-- Table structure for nedelja
-- ----------------------------
DROP TABLE IF EXISTS `nedelja`;
CREATE TABLE `nedelja`  (
  `id_nedelja` int(11) NOT NULL AUTO_INCREMENT,
  `broj_nedelje` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id_nedelja`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of nedelja
-- ----------------------------
INSERT INTO `nedelja` VALUES (1, 1);

-- ----------------------------
-- Table structure for odredi_cenu
-- ----------------------------
DROP TABLE IF EXISTS `odredi_cenu`;
CREATE TABLE `odredi_cenu`  (
  `id_cena` int(11) NOT NULL AUTO_INCREMENT,
  `trenutna_cena` double(5, 2) NULL DEFAULT NULL,
  PRIMARY KEY (`id_cena`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of odredi_cenu
-- ----------------------------
INSERT INTO `odredi_cenu` VALUES (1, 300.00);

-- ----------------------------
-- Table structure for osoba
-- ----------------------------
DROP TABLE IF EXISTS `osoba`;
CREATE TABLE `osoba`  (
  `id_osoba` int(11) NOT NULL AUTO_INCREMENT,
  `ime` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `prezime` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_osoba`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 22 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of osoba
-- ----------------------------
INSERT INTO `osoba` VALUES (1, 'Supervisor', 'supervisor');
INSERT INTO `osoba` VALUES (2, 'Nemanja', 'Jankovic');
INSERT INTO `osoba` VALUES (3, 'Zoran', 'Grcic');
INSERT INTO `osoba` VALUES (4, 'Bogdan ', 'Maksimovic');
INSERT INTO `osoba` VALUES (5, 'Vladimir ', 'Simsic');
INSERT INTO `osoba` VALUES (6, 'Damjan', 'Miladinovic');
INSERT INTO `osoba` VALUES (7, 'Mirela', 'Kondic');
INSERT INTO `osoba` VALUES (8, 'Nina ', 'Nedeljkovic');
INSERT INTO `osoba` VALUES (9, 'Bojana ', 'Rakic');
INSERT INTO `osoba` VALUES (10, 'Filip ', 'Miletic');
INSERT INTO `osoba` VALUES (11, 'Natasa', 'Kekanovic');
INSERT INTO `osoba` VALUES (12, 'Nikola', 'Bulog');
INSERT INTO `osoba` VALUES (13, 'Boban ', 'Damjanovic');
INSERT INTO `osoba` VALUES (14, 'Goran', 'Josipovic');
INSERT INTO `osoba` VALUES (15, 'Bojana', 'Majstorovic');
INSERT INTO `osoba` VALUES (16, 'Boris', 'Bejatovic');
INSERT INTO `osoba` VALUES (17, 'Dragan', 'Loncarevic');
INSERT INTO `osoba` VALUES (18, 'Marko', 'Medojevic');
INSERT INTO `osoba` VALUES (19, 'Zoran', 'Gojkovic');
INSERT INTO `osoba` VALUES (21, 'Milan', 'Radusin');

-- ----------------------------
-- Table structure for porudzbina
-- ----------------------------
DROP TABLE IF EXISTS `porudzbina`;
CREATE TABLE `porudzbina`  (
  `id_porudzbina` int(11) NOT NULL AUTO_INCREMENT,
  `id_osoba` int(11) NULL DEFAULT NULL,
  `id_glavno_jelo` int(11) NULL DEFAULT NULL,
  `id_prilog` int(11) NULL DEFAULT NULL,
  `id_salata` int(11) NULL DEFAULT NULL,
  `id_hleb` int(11) NULL DEFAULT NULL,
  `cena` double NULL DEFAULT NULL,
  `created_on` date NULL DEFAULT NULL,
  PRIMARY KEY (`id_porudzbina`) USING BTREE,
  INDEX `id_ime_idx`(`id_osoba`) USING BTREE,
  INDEX `id_ime_fk_porudzbina_osoba_idx`(`id_glavno_jelo`) USING BTREE,
  INDEX `id_ime_fk_porudzbina_prilog_idx`(`id_prilog`) USING BTREE,
  INDEX `id_ime_fk_porudzbina_salata_idx`(`id_salata`) USING BTREE,
  INDEX `id_ime_fk_porudzbina_hleb_idx`(`id_hleb`) USING BTREE,
  CONSTRAINT `id_ime_fk_porudzbina_hleb` FOREIGN KEY (`id_hleb`) REFERENCES `hleb` (`id_hleb`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `id_ime_fk_porudzbina_jelo` FOREIGN KEY (`id_glavno_jelo`) REFERENCES `glavno_jelo` (`id_glavno_jelo`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `id_ime_fk_porudzbina_osoba` FOREIGN KEY (`id_osoba`) REFERENCES `osoba` (`id_osoba`) ON DELETE RESTRICT ON UPDATE CASCADE,
  CONSTRAINT `id_ime_fk_porudzbina_prilog` FOREIGN KEY (`id_prilog`) REFERENCES `prilog` (`id_prilog`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `id_ime_fk_porudzbina_salata` FOREIGN KEY (`id_salata`) REFERENCES `salata` (`id_salata`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of porudzbina
-- ----------------------------
INSERT INTO `porudzbina` VALUES (6, 21, 43, 2, 2, 1, 300, '2020-01-07');

-- ----------------------------
-- Table structure for posna_jela
-- ----------------------------
DROP TABLE IF EXISTS `posna_jela`;
CREATE TABLE `posna_jela`  (
  `id_posno_jelo` int(11) NOT NULL AUTO_INCREMENT,
  `ime_posnog_jela` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_posno_jelo`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of posna_jela
-- ----------------------------
INSERT INTO `posna_jela` VALUES (1, 'Oslic u kukuruznom brasnu');
INSERT INTO `posna_jela` VALUES (2, 'Pastrmka');
INSERT INTO `posna_jela` VALUES (3, 'Rizoto sa salsom od povrca');
INSERT INTO `posna_jela` VALUES (4, 'Riblji stapici');

-- ----------------------------
-- Table structure for prilog
-- ----------------------------
DROP TABLE IF EXISTS `prilog`;
CREATE TABLE `prilog`  (
  `id_prilog` int(11) NOT NULL AUTO_INCREMENT,
  `ime_priloga` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_prilog`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of prilog
-- ----------------------------
INSERT INTO `prilog` VALUES (1, 'Pomfrit');
INSERT INTO `prilog` VALUES (2, 'Pikant krompir');
INSERT INTO `prilog` VALUES (3, 'Pire od(graska, krompira, sargarepe)');
INSERT INTO `prilog` VALUES (4, 'Grilovano povrce');
INSERT INTO `prilog` VALUES (5, 'Pecurke na zaru');

-- ----------------------------
-- Table structure for profile
-- ----------------------------
DROP TABLE IF EXISTS `profile`;
CREATE TABLE `profile`  (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `public_email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `gravatar_email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `gravatar_id` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `location` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `website` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `bio` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `timezone` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`user_id`) USING BTREE,
  CONSTRAINT `fk_user_profile` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of profile
-- ----------------------------
INSERT INTO `profile` VALUES (1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `profile` VALUES (2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `profile` VALUES (3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for salata
-- ----------------------------
DROP TABLE IF EXISTS `salata`;
CREATE TABLE `salata`  (
  `id_salata` int(11) NOT NULL AUTO_INCREMENT,
  `ime_salate` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_salata`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of salata
-- ----------------------------
INSERT INTO `salata` VALUES (1, 'Kupus');
INSERT INTO `salata` VALUES (2, 'Vitaminska ');
INSERT INTO `salata` VALUES (3, 'Srpska');
INSERT INTO `salata` VALUES (4, 'Sopska');
INSERT INTO `salata` VALUES (5, 'Zelena');

-- ----------------------------
-- Table structure for social_account
-- ----------------------------
DROP TABLE IF EXISTS `social_account`;
CREATE TABLE `social_account`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NULL DEFAULT NULL,
  `provider` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `client_id` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `data` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `code` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `created_at` int(11) NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `account_unique`(`provider`, `client_id`) USING BTREE,
  UNIQUE INDEX `account_unique_code`(`code`) USING BTREE,
  INDEX `fk_user_account`(`user_id`) USING BTREE,
  CONSTRAINT `fk_user_account` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for token
-- ----------------------------
DROP TABLE IF EXISTS `token`;
CREATE TABLE `token`  (
  `user_id` int(11) NOT NULL,
  `code` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) NOT NULL,
  `type` smallint(6) NOT NULL,
  UNIQUE INDEX `token_unique`(`user_id`, `code`, `type`) USING BTREE,
  CONSTRAINT `fk_user_token` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(60) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `confirmed_at` int(11) NULL DEFAULT NULL,
  `unconfirmed_email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `blocked_at` int(11) NULL DEFAULT NULL,
  `registration_ip` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `flags` int(11) NOT NULL DEFAULT 0,
  `last_login_at` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `user_unique_username`(`username`) USING BTREE,
  UNIQUE INDEX `user_unique_email`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (1, 'Supervisor', 'milanradusin@yahoo.com', '$2y$10$NFclEwLB0csM4OLZUznYieBMf2EYcnQFrWxrkaGEKB0MgatoDMv.y', 'LiJ4tXqGPCzqM48v1dV3EwUBqL20xB9P', 1577360424, NULL, NULL, '127.0.0.1', 1577360346, 1577360346, 0, 1578490144);
INSERT INTO `user` VALUES (2, 'Milan', 'milanradusin@gmil.com', '$2y$10$oc6kxHASuPq9Nc.U2oZXcuW1UukPa07rKuMHcU8nnrmK12iREQmDu', 'rE0LgzQZRPGnF3qjl9bj-9UgxdsQGQmE', 1577366617, NULL, NULL, '127.0.0.1', 1577366436, 1577366436, 0, 1578300061);
INSERT INTO `user` VALUES (3, 'Boban', 'radusinmilan@gmail.com', '$2y$10$qaArgDp7zs/7hdgaLqE2Z.aO8mL8.ZgAqscGuxdbeSRDJR9.yaYAq', 'rgfLxIrFlHLBqW8G4zTC5_L2BTj43UXs', 1577455428, NULL, NULL, '127.0.0.1', 1577455326, 1577455326, 0, 1578300252);

SET FOREIGN_KEY_CHECKS = 1;
