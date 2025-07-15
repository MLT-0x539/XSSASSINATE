DROP DATABASE IF EXISTS `ourdb`;
CREATE DATABASE IF NOT EXISTS `ourdb`;
USE `ourdb`;
DROP TABLE IF EXISTS `User`;

CREATE TABLE `User` (
  `id` INT unsigned NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` VARCHAR(150) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `User` (`id`, `username`, `password`) VALUES (1, "OurUsername", "P@zzw0rd123!");
