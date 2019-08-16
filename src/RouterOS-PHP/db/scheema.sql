DROP DATABASE IF EXISTS `hosts`;
CREATE DATABASE `hosts`;
USE `hosts`;

DROP TABLE IF EXISTS `routers`;
CREATE TABLE `routers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `ip` varchar(13) NOT NULL,
  `user` varchar(100) NOT NULL,
  `pass` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
);

INSERT INTO `routers`
  (`ip`, `user`, `pass`)
VALUES
  ('10.0.4.11', 'admin', `pass`);
