-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           5.7.33 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Listage de la structure de la base pour store
CREATE DATABASE IF NOT EXISTS `store` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_bin */;
USE `store`;

-- Listage de la structure de la table store. product
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  `description` text COLLATE utf8_bin NOT NULL,
  `price` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Listage des données de la table store.product : ~24 rows (environ)
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` (`id`, `name`, `description`, `price`) VALUES
	(1, 'Pumpkin ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Mauris rhoncus aenean vel elit scelerisque mauris pellentesque. Pretium vulputate sapien nec sagittis aliquam malesuada. Nisl nunc mi ipsum faucibus vitae aliquet nec. Purus gravida quis blandit turpis cursus. Augue eget arcu dictum varius duis at consectetur lorem. Vestibulum morbi blandit cursus risus. Sagittis orci a scelerisque purus semper eget duis at. Odio euismod lacinia at quis risus sed vulputate odio ut. Et ultrices neque ornare aenean euismod elementum. Nibh cras pulvinar mattis nunc sed blandit libero volutpat sed. Lacinia quis vel eros donec ac odio tempor. Proin libero nunc consequat interdum. Non sodales neque sodales ut etiam sit. Ultrices neque ornare aenean euismod elementum nisi quis eleifend. Augue ut lectus arcu bibendum at varius. Sit amet luctus venenatis lectus.', 4.99),
	(2, 'apple ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Mauris rhoncus aenean vel elit scelerisque mauris pellentesque. Pretium vulputate sapien nec sagittis aliquam malesuada. Nisl nunc mi ipsum faucibus vitae aliquet nec. Purus gravida quis blandit turpis cursus. Augue eget arcu dictum varius duis at consectetur lorem. Vestibulum morbi blandit cursus risus. Sagittis orci a scelerisque purus semper eget duis at. Odio euismod lacinia at quis risus sed vulputate odio ut. Et ultrices neque ornare aenean euismod elementum. Nibh cras pulvinar mattis nunc sed blandit libero volutpat sed. Lacinia quis vel eros donec ac odio tempor. Proin libero nunc consequat interdum. Non sodales neque sodales ut etiam sit. Ultrices neque ornare aenean euismod elementum nisi quis eleifend. Augue ut lectus arcu bibendum at varius. Sit amet luctus venenatis lectus.', 6.99),
	(3, 'Mushroom ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Mauris rhoncus aenean vel elit scelerisque mauris pellentesque. Pretium vulputate sapien nec sagittis aliquam malesuada. Nisl nunc mi ipsum faucibus vitae aliquet nec. Purus gravida quis blandit turpis cursus. Augue eget arcu dictum varius duis at consectetur lorem. Vestibulum morbi blandit cursus risus. Sagittis orci a scelerisque purus semper eget duis at. Odio euismod lacinia at quis risus sed vulputate odio ut. Et ultrices neque ornare aenean euismod elementum. Nibh cras pulvinar mattis nunc sed blandit libero volutpat sed. Lacinia quis vel eros donec ac odio tempor. Proin libero nunc consequat interdum. Non sodales neque sodales ut etiam sit. Ultrices neque ornare aenean euismod elementum nisi quis eleifend. Augue ut lectus arcu bibendum at varius. Sit amet luctus venenatis lectus.', 12.99),
	(4, 'ginger ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Mauris rhoncus aenean vel elit scelerisque mauris pellentesque. Pretium vulputate sapien nec sagittis aliquam malesuada. Nisl nunc mi ipsum faucibus vitae aliquet nec. Purus gravida quis blandit turpis cursus. Augue eget arcu dictum varius duis at consectetur lorem. Vestibulum morbi blandit cursus risus. Sagittis orci a scelerisque purus semper eget duis at. Odio euismod lacinia at quis risus sed vulputate odio ut. Et ultrices neque ornare aenean euismod elementum. Nibh cras pulvinar mattis nunc sed blandit libero volutpat sed. Lacinia quis vel eros donec ac odio tempor. Proin libero nunc consequat interdum. Non sodales neque sodales ut etiam sit. Ultrices neque ornare aenean euismod elementum nisi quis eleifend. Augue ut lectus arcu bibendum at varius. Sit amet luctus venenatis lectus.', 5.99),
	(5, 'strawberry ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Mauris rhoncus aenean vel elit scelerisque mauris pellentesque. Pretium vulputate sapien nec sagittis aliquam malesuada. Nisl nunc mi ipsum faucibus vitae aliquet nec. Purus gravida quis blandit turpis cursus. Augue eget arcu dictum varius duis at consectetur lorem. Vestibulum morbi blandit cursus risus. Sagittis orci a scelerisque purus semper eget duis at. Odio euismod lacinia at quis risus sed vulputate odio ut. Et ultrices neque ornare aenean euismod elementum. Nibh cras pulvinar mattis nunc sed blandit libero volutpat sed. Lacinia quis vel eros donec ac odio tempor. Proin libero nunc consequat interdum. Non sodales neque sodales ut etiam sit. Ultrices neque ornare aenean euismod elementum nisi quis eleifend. Augue ut lectus arcu bibendum at varius. Sit amet luctus venenatis lectus.', 2.99),
	(6, 'Turkey ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Mauris rhoncus aenean vel elit scelerisque mauris pellentesque. Pretium vulputate sapien nec sagittis aliquam malesuada. Nisl nunc mi ipsum faucibus vitae aliquet nec. Purus gravida quis blandit turpis cursus. Augue eget arcu dictum varius duis at consectetur lorem. Vestibulum morbi blandit cursus risus. Sagittis orci a scelerisque purus semper eget duis at. Odio euismod lacinia at quis risus sed vulputate odio ut. Et ultrices neque ornare aenean euismod elementum. Nibh cras pulvinar mattis nunc sed blandit libero volutpat sed. Lacinia quis vel eros donec ac odio tempor. Proin libero nunc consequat interdum. Non sodales neque sodales ut etiam sit. Ultrices neque ornare aenean euismod elementum nisi quis eleifend. Augue ut lectus arcu bibendum at varius. Sit amet luctus venenatis lectus.', 20.99),
	(7, 'Fish ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Mauris rhoncus aenean vel elit scelerisque mauris pellentesque. Pretium vulputate sapien nec sagittis aliquam malesuada. Nisl nunc mi ipsum faucibus vitae aliquet nec. Purus gravida quis blandit turpis cursus. Augue eget arcu dictum varius duis at consectetur lorem. Vestibulum morbi blandit cursus risus. Sagittis orci a scelerisque purus semper eget duis at. Odio euismod lacinia at quis risus sed vulputate odio ut. Et ultrices neque ornare aenean euismod elementum. Nibh cras pulvinar mattis nunc sed blandit libero volutpat sed. Lacinia quis vel eros donec ac odio tempor. Proin libero nunc consequat interdum. Non sodales neque sodales ut etiam sit. Ultrices neque ornare aenean euismod elementum nisi quis eleifend. Augue ut lectus arcu bibendum at varius. Sit amet luctus venenatis lectus.', 14.99),
	(8, 'Cabbage ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Mauris rhoncus aenean vel elit scelerisque mauris pellentesque. Pretium vulputate sapien nec sagittis aliquam malesuada. Nisl nunc mi ipsum faucibus vitae aliquet nec. Purus gravida quis blandit turpis cursus. Augue eget arcu dictum varius duis at consectetur lorem. Vestibulum morbi blandit cursus risus. Sagittis orci a scelerisque purus semper eget duis at. Odio euismod lacinia at quis risus sed vulputate odio ut. Et ultrices neque ornare aenean euismod elementum. Nibh cras pulvinar mattis nunc sed blandit libero volutpat sed. Lacinia quis vel eros donec ac odio tempor. Proin libero nunc consequat interdum. Non sodales neque sodales ut etiam sit. Ultrices neque ornare aenean euismod elementum nisi quis eleifend. Augue ut lectus arcu bibendum at varius. Sit amet luctus venenatis lectus.', 3.99),
	(9, 'Chicken ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Mauris rhoncus aenean vel elit scelerisque mauris pellentesque. Pretium vulputate sapien nec sagittis aliquam malesuada. Nisl nunc mi ipsum faucibus vitae aliquet nec. Purus gravida quis blandit turpis cursus. Augue eget arcu dictum varius duis at consectetur lorem. Vestibulum morbi blandit cursus risus. Sagittis orci a scelerisque purus semper eget duis at. Odio euismod lacinia at quis risus sed vulputate odio ut. Et ultrices neque ornare aenean euismod elementum. Nibh cras pulvinar mattis nunc sed blandit libero volutpat sed. Lacinia quis vel eros donec ac odio tempor. Proin libero nunc consequat interdum. Non sodales neque sodales ut etiam sit. Ultrices neque ornare aenean euismod elementum nisi quis eleifend. Augue ut lectus arcu bibendum at varius. Sit amet luctus venenatis lectus.', 9.99),
	(10, 'steak ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Mauris rhoncus aenean vel elit scelerisque mauris pellentesque. Pretium vulputate sapien nec sagittis aliquam malesuada. Nisl nunc mi ipsum faucibus vitae aliquet nec. Purus gravida quis blandit turpis cursus. Augue eget arcu dictum varius duis at consectetur lorem. Vestibulum morbi blandit cursus risus. Sagittis orci a scelerisque purus semper eget duis at. Odio euismod lacinia at quis risus sed vulputate odio ut. Et ultrices neque ornare aenean euismod elementum. Nibh cras pulvinar mattis nunc sed blandit libero volutpat sed. Lacinia quis vel eros donec ac odio tempor. Proin libero nunc consequat interdum. Non sodales neque sodales ut etiam sit. Ultrices neque ornare aenean euismod elementum nisi quis eleifend. Augue ut lectus arcu bibendum at varius. Sit amet luctus venenatis lectus.', 11.99),
	(11, 'raspberry', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Mauris rhoncus aenean vel elit scelerisque mauris pellentesque. Pretium vulputate sapien nec sagittis aliquam malesuada. Nisl nunc mi ipsum faucibus vitae aliquet nec. Purus gravida quis blandit turpis cursus. Augue eget arcu dictum varius duis at consectetur lorem. Vestibulum morbi blandit cursus risus. Sagittis orci a scelerisque purus semper eget duis at. Odio euismod lacinia at quis risus sed vulputate odio ut. Et ultrices neque ornare aenean euismod elementum. Nibh cras pulvinar mattis nunc sed blandit libero volutpat sed. Lacinia quis vel eros donec ac odio tempor. Proin libero nunc consequat interdum. Non sodales neque sodales ut etiam sit. Ultrices neque ornare aenean euismod elementum nisi quis eleifend. Augue ut lectus arcu bibendum at varius. Sit amet luctus venenatis lectus.', 9.99),
	(12, 'orange', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Mauris rhoncus aenean vel elit scelerisque mauris pellentesque. Pretium vulputate sapien nec sagittis aliquam malesuada. Nisl nunc mi ipsum faucibus vitae aliquet nec. Purus gravida quis blandit turpis cursus. Augue eget arcu dictum varius duis at consectetur lorem. Vestibulum morbi blandit cursus risus. Sagittis orci a scelerisque purus semper eget duis at. Odio euismod lacinia at quis risus sed vulputate odio ut. Et ultrices neque ornare aenean euismod elementum. Nibh cras pulvinar mattis nunc sed blandit libero volutpat sed. Lacinia quis vel eros donec ac odio tempor. Proin libero nunc consequat interdum. Non sodales neque sodales ut etiam sit. Ultrices neque ornare aenean euismod elementum nisi quis eleifend. Augue ut lectus arcu bibendum at varius. Sit amet luctus venenatis lectus.', 10.99),
	(13, 'peache', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Mauris rhoncus aenean vel elit scelerisque mauris pellentesque. Pretium vulputate sapien nec sagittis aliquam malesuada. Nisl nunc mi ipsum faucibus vitae aliquet nec. Purus gravida quis blandit turpis cursus. Augue eget arcu dictum varius duis at consectetur lorem. Vestibulum morbi blandit cursus risus. Sagittis orci a scelerisque purus semper eget duis at. Odio euismod lacinia at quis risus sed vulputate odio ut. Et ultrices neque ornare aenean euismod elementum. Nibh cras pulvinar mattis nunc sed blandit libero volutpat sed. Lacinia quis vel eros donec ac odio tempor. Proin libero nunc consequat interdum. Non sodales neque sodales ut etiam sit. Ultrices neque ornare aenean euismod elementum nisi quis eleifend. Augue ut lectus arcu bibendum at varius. Sit amet luctus venenatis lectus.', 2.99),
	(48, 'pinapple', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Mauris rhoncus aenean vel elit scelerisque mauris pellentesque. Pretium vulputate sapien nec sagittis aliquam malesuada. Nisl nunc mi ipsum faucibus vitae aliquet nec. Purus gravida quis blandit turpis cursus. Augue eget arcu dictum varius duis at consectetur lorem. Vestibulum morbi blandit cursus risus. Sagittis orci a scelerisque purus semper eget duis at. Odio euismod lacinia at quis risus sed vulputate odio ut. Et ultrices neque ornare aenean euismod elementum. Nibh cras pulvinar mattis nunc sed blandit libero volutpat sed. Lacinia quis vel eros donec ac odio tempor. Proin libero nunc consequat interdum. Non sodales neque sodales ut etiam sit. Ultrices neque ornare aenean euismod elementum nisi quis eleifend. Augue ut lectus arcu bibendum at varius. Sit amet luctus venenatis lectus.', 19.99),
	(49, 'lemon', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Mauris rhoncus aenean vel elit scelerisque mauris pellentesque. Pretium vulputate sapien nec sagittis aliquam malesuada. Nisl nunc mi ipsum faucibus vitae aliquet nec. Purus gravida quis blandit turpis cursus. Augue eget arcu dictum varius duis at consectetur lorem. Vestibulum morbi blandit cursus risus. Sagittis orci a scelerisque purus semper eget duis at. Odio euismod lacinia at quis risus sed vulputate odio ut. Et ultrices neque ornare aenean euismod elementum. Nibh cras pulvinar mattis nunc sed blandit libero volutpat sed. Lacinia quis vel eros donec ac odio tempor. Proin libero nunc consequat interdum. Non sodales neque sodales ut etiam sit. Ultrices neque ornare aenean euismod elementum nisi quis eleifend. Augue ut lectus arcu bibendum at varius. Sit amet luctus venenatis lectus.', 11.99),
	(65, 'ananas', 'wqzxdvrtbgvyunjk,l;', 5),
	(66, 'pomme', 'qzswxdfcgv', 3),
	(67, 'pomme', 'qzswxdfcgv', 3),
	(68, 'kiwi', 'qsdxfcgvbhjk', 8.99),
	(69, 'pamplemouse', 'sdtrfyghbjnk', 10),
	(70, 'mur', 'sdtgfhjkl', 3),
	(71, 'mur', 'sdtgfhjkl', 3),
	(72, 'raisin', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Consequat mauris nunc congue nisi. Posuere lorem ipsum dolor sit amet consectetur adipiscing elit duis. Ultrices mi tempus imperdiet nulla malesuada pellentesque. Morbi tristique senectus et netus et malesuada fames ac. Consequat interdum varius sit amet mattis. Tristique et egestas quis ipsum. Ut faucibus pulvinar elementum integer enim. Ut placerat orci nulla pellentesque. Platea dictumst vestibulum rhoncus est pellentesque elit. Leo duis ut diam quam nulla porttitor massa. Sapien faucibus et molestie ac feugiat sed.', 2.99),
	(73, 'grapefruit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Consequat mauris nunc congue nisi. Posuere lorem ipsum dolor sit amet consectetur adipiscing elit duis. Ultrices mi tempus imperdiet nulla malesuada pellentesque. Morbi tristique senectus et netus et malesuada fames ac. Consequat interdum varius sit amet mattis. Tristique et egestas quis ipsum. Ut faucibus pulvinar elementum integer enim. Ut placerat orci nulla pellentesque. Platea dictumst vestibulum rhoncus est pellentesque elit. Leo duis ut diam quam nulla porttitor massa. Sapien faucibus et molestie ac feugiat sed.', 3.99);
/*!40000 ALTER TABLE `product` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;