/*
SQLyog Community v13.1.9 (64 bit)
MySQL - 10.4.22-MariaDB : Database - mit
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `banners` */

DROP TABLE IF EXISTS `banners`;

CREATE TABLE `banners` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) DEFAULT NULL,
  `img` varchar(200) DEFAULT NULL,
  `img2` varchar(200) DEFAULT NULL,
  `data_create` timestamp NULL DEFAULT current_timestamp(),
  `link` varchar(200) NOT NULL,
  `type` varchar(100) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;

/*Data for the table `banners` */

insert  into `banners`(`id`,`nome`,`img`,`img2`,`data_create`,`link`,`type`,`status`) values 
(48,'Monte seu combo','banner-Monteseucombo.jpg',NULL,'2022-01-27 15:04:28','','home',NULL),
(49,'BBB','banner-BBB.jpg',NULL,'2022-01-27 15:04:49','','home',NULL),
(51,'Melhor avaliação','banner-Melhoravaliação.jpg',NULL,'2022-01-31 11:44:18','','home',NULL),
(52,'Viabilidade','banner-Viabilidade.png',NULL,'2022-01-31 11:44:30','https://mitfibra.com.br/viabilidade-tecnica.php','home',NULL);

/*Table structure for table `leads` */

DROP TABLE IF EXISTS `leads`;

CREATE TABLE `leads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `whats` varchar(50) DEFAULT NULL,
  `opc` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `msg` varchar(1000) DEFAULT NULL,
  `data_envio` timestamp NULL DEFAULT current_timestamp(),
  `dv` varchar(100) DEFAULT NULL,
  `tipo` varchar(10) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `user_vz` varchar(100) DEFAULT NULL,
  `data_vz` varchar(100) DEFAULT NULL,
  `user_ok` varchar(100) DEFAULT NULL,
  `data_ok` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=292 DEFAULT CHARSET=latin1;

/*Data for the table `leads` */

insert  into `leads`(`id`,`nome`,`whats`,`opc`,`email`,`msg`,`data_envio`,`dv`,`tipo`,`status`,`user_vz`,`data_vz`,`user_ok`,`data_ok`) values 
(289,'Cairo Felipe dos Reis Machado','086999069329',NULL,'cairofelipedev@gmail.com','teste','2022-02-11 15:42:29',NULL,'1',NULL,NULL,NULL,NULL,NULL),
(290,'Cairo Felipe dos Reis Machado','086999069329',NULL,'cairofelipedev@gmail.com','teste','2022-02-11 15:43:16',NULL,'1',NULL,NULL,NULL,NULL,NULL),
(291,'Cairo Felipe dos Reis Machado','86999069329',NULL,'cairofelipedev@gmail.com','teste','2022-03-29 21:58:52',NULL,'1',NULL,NULL,NULL,NULL,NULL);

/*Table structure for table `logs` */

DROP TABLE IF EXISTS `logs`;

CREATE TABLE `logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `data_log` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `type` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1927 DEFAULT CHARSET=utf8;

/*Data for the table `logs` */

insert  into `logs`(`id`,`name`,`data_log`,`type`) values 
(1905,'<br />\r\n<b>Warning</b>:  Undefined variable $_SESS','2021-12-29 11:54:12','login'),
(1906,'Cairo Felipe dos Reis Machado','2021-12-29 11:55:12','login'),
(1907,'Cairo Felipe dos Reis Machado','2021-12-29 15:56:42','login'),
(1908,'Cairo Felipe dos Reis Machado','2021-12-29 15:58:46','login'),
(1909,'Cairo Felipe dos Reis Machado','2021-12-29 15:59:09','login'),
(1910,'Cairo Felipe dos Reis Machado','2021-12-30 09:36:16','login'),
(1911,'Cairo Felipe dos Reis Machado','2022-01-10 13:09:01','login'),
(1912,'Cairo Felipe dos Reis Machado','2022-01-19 16:00:25','login'),
(1913,'Cairo Felipe dos Reis Machado','2022-01-21 14:00:13','login'),
(1914,'Cairo Felipe dos Reis Machado','2022-01-24 09:56:51','login'),
(1915,'Cairo Felipe dos Reis Machado','2022-01-24 15:51:00','login'),
(1916,'Cairo Felipe dos Reis Machado','2022-01-27 14:57:00','login'),
(1917,'Cairo Felipe dos Reis Machado','2022-01-31 11:43:28','login'),
(1918,'Cairo Felipe dos Reis Machado','2022-02-02 09:34:16','login'),
(1919,'Cairo Felipe dos Reis Machado','2022-02-02 15:28:46','login'),
(1920,'Cairo Felipe dos Reis Machado','2022-02-11 11:05:20','login'),
(1921,'Cairo Felipe dos Reis Machado','2022-02-11 11:18:29','login'),
(1922,'Cairo Felipe dos Reis Machado','2022-02-11 11:30:42','login'),
(1923,'Cairo Felipe dos Reis Machado','2022-02-11 15:32:11','login'),
(1924,'Cairo Felipe dos Reis Machado','2022-02-11 17:46:28','login'),
(1925,'Cairo Felipe dos Reis Machado','2022-04-12 20:16:05','login'),
(1926,'Cairo Felipe dos Reis Machado','2022-04-12 20:20:41','login');

/*Table structure for table `plans` */

DROP TABLE IF EXISTS `plans`;

CREATE TABLE `plans` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data_create` timestamp NOT NULL DEFAULT current_timestamp(),
  `description` varchar(500) DEFAULT NULL,
  `speed` varchar(50) DEFAULT NULL,
  `link` varchar(200) DEFAULT NULL,
  `price` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL,
  `tv` varchar(100) DEFAULT NULL,
  `channels` varchar(100) DEFAULT NULL,
  `price_display` varchar(100) DEFAULT NULL,
  `footer_text1` varchar(500) DEFAULT NULL,
  `footer_text2` varchar(500) DEFAULT NULL,
  `footer_icon1` varchar(200) DEFAULT NULL,
  `footer_icon2` varchar(200) DEFAULT NULL,
  `footer_icon3` varchar(200) DEFAULT NULL,
  `footer_icon4` varchar(200) DEFAULT NULL,
  `footer_icon5` varchar(200) DEFAULT NULL,
  `footer_text3` varchar(500) DEFAULT NULL,
  `footer_text4` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=178 DEFAULT CHARSET=utf8mb4;

/*Data for the table `plans` */

insert  into `plans`(`id`,`data_create`,`description`,`speed`,`link`,`price`,`city`,`type`,`tv`,`channels`,`price_display`,`footer_text1`,`footer_text2`,`footer_icon1`,`footer_icon2`,`footer_icon3`,`footer_icon4`,`footer_icon5`,`footer_text3`,`footer_text4`) values 
(71,'2022-04-08 09:09:53','COM CASHBACK 5%','600	',NULL,'129,99','teresina','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(72,'2022-04-08 09:09:53','COM CASHBACK 5%','600	',NULL,'129,99','demerval','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(73,'2022-04-08 09:09:53','COM CASHBACK 5%','600	',NULL,'129,99','lagoa','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(74,'2022-04-08 09:09:53','COM CASHBACK 5%','600	',NULL,'129,99','monsenhor','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(75,'2022-04-08 09:09:53','COM CASHBACK 5%','500',NULL,'104,99','teresina','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(76,'2022-04-08 09:09:53','COM CASHBACK 5%','500',NULL,'104,99','demerval','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(77,'2022-04-08 09:09:53','COM CASHBACK 5%','500',NULL,'104,99','lagoa','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(78,'2022-04-08 09:09:53','COM CASHBACK 5%','500',NULL,'104,99','monsenhor','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(79,'2022-04-08 09:09:53','COM CASHBACK 5%','200',NULL,'99,99','teresina','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(80,'2022-04-08 09:09:53','COM CASHBACK 5%','200',NULL,'99,99','demerval','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(81,'2022-04-08 09:09:53','COM CASHBACK 5%','200',NULL,'99,99','lagoa','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(82,'2022-04-08 09:09:53','COM CASHBACK 5%','200',NULL,'99,99','monsenhor','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(83,'2022-04-08 09:09:53','COM CASHBACK 5%','500',NULL,'129,99','curralinhos','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(84,'2022-04-08 09:09:53','COM CASHBACK 5%','300',NULL,'109,99','curralinhos','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(85,'2022-04-08 09:09:53','COM CASHBACK 5%','120',NULL,'99,99','curralinhos','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(86,'2022-04-08 09:09:53',NULL,'300',NULL,'134,99','teresina','2','DIGITAL HD','155','30',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(87,'2022-04-08 09:09:53',NULL,'300',NULL,'159,99','teresina','2','TOP HD','181','45',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(88,'2022-04-08 09:09:53',NULL,'400',NULL,'189,99','teresina','2','PREMIUM HD','217','60',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(89,'2022-04-08 09:09:53',NULL,'300',NULL,'134,99','monsenhor','2','DIGITAL HD','155','30',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(90,'2022-04-08 09:09:53',NULL,'300',NULL,'159,99','monsenhor','2','TOP HD','181','45',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(91,'2022-04-08 09:09:53',NULL,'400',NULL,'189,99','monsenhor','2','PREMIUM HD','217','60',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(92,'2022-04-08 09:09:53',NULL,'300',NULL,'134,99','lagoa','2','DIGITAL HD','155','30',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(93,'2022-04-08 09:09:53',NULL,'300',NULL,'159,99','lagoa','2','TOP HD','181','45',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(94,'2022-04-08 09:09:53',NULL,'400',NULL,'189,99','lagoa','2','PREMIUM HD','217','60',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(95,'2022-04-08 09:09:53',NULL,'300',NULL,'134,99','demerval','2','DIGITAL HD','155','30',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(96,'2022-04-08 09:09:53',NULL,'300',NULL,'159,99','demerval','2','TOP HD','181','45',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(97,'2022-04-08 09:09:53',NULL,'400',NULL,'189,99','demerval','2','PREMIUM HD','217','60',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(98,'2022-04-08 09:09:53',NULL,'300',NULL,'134,99','curralinhos','2','DIGITAL HD','155','30',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(99,'2022-04-08 09:09:53',NULL,'300',NULL,'159,99','curralinhos','2','TOP HD','181','45',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(100,'2022-04-08 09:09:53',NULL,'400',NULL,'189,99','curralinhos','2','PREMIUM HD','217','60',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(101,'2022-04-08 09:09:53',NULL,'600',NULL,'129,99','teresina','3','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(102,'2022-04-08 09:09:53',NULL,'600',NULL,'129,99','monsenhor','3','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(103,'2022-04-08 09:09:53',NULL,'600',NULL,'129,99','lagoa','3','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(104,'2022-04-08 09:09:53',NULL,'600',NULL,'129,99','demerval','3','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(105,'2022-04-08 09:09:53',NULL,'600',NULL,'129,99','curralinhos','3','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(106,'2022-04-08 09:09:53',NULL,'600',NULL,'139,99','monsenhor','4','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(107,'2022-04-08 09:09:53',NULL,'600',NULL,'139,99','lagoa','4','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(108,'2022-04-08 09:09:53',NULL,'600',NULL,'139,99','demerval','4','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(109,'2022-04-08 09:09:53',NULL,'600',NULL,'139,99','curralinhos','4','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(111,'2022-04-08 09:09:53',NULL,'600',NULL,'159,99','teresina','4','','netflix','175,99',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(115,'2022-04-08 09:09:53',NULL,'600',NULL,'159,99','lagoa','4','','netflix','175,99',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(116,'2022-04-08 09:09:53',NULL,'600',NULL,'159,99','demerval','4','','netflix','175,99',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(117,'2022-04-08 09:09:53',NULL,'600',NULL,'159,99','curralinhos','4','','netflix','175,99',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(118,'2022-04-08 09:09:53',NULL,'600',NULL,'159,99','monsenhor','4','','netflix','175,99',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(122,'2022-04-08 09:09:53',NULL,'300',NULL,'134,99','demerval','4','','netflix','2',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(123,'2022-04-08 09:09:53',NULL,'300',NULL,'134,99','curralinhos','4','','netflix','2',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(124,'2022-04-08 09:09:53',NULL,'300',NULL,'134,99','monsenhor','4','','netflix','2',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(125,'2022-04-08 09:09:53',NULL,'300',NULL,'150,99','lagoa','4','','netflix','4',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(126,'2022-04-08 09:09:53',NULL,'300',NULL,'150,99','curralinhos','4','','netflix','4',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(127,'2022-04-08 09:09:53',NULL,'300',NULL,'150,99','monsenhor','4','','netflix','4',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(128,'2022-04-08 09:09:53',NULL,'300',NULL,'150,99','demerval','4','','netflix','4',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(129,'2022-04-08 09:09:53',NULL,'300',NULL,'134,99','teresina','4','','netflix','2',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(130,'2022-04-08 09:09:53',NULL,'300',NULL,'150,99','teresina','4','','netflix','4',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(131,'2022-04-08 09:09:53',NULL,'300',NULL,'134,99','lagoa','4','','netflix','2',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(132,'2022-04-08 09:09:53',NULL,'500',NULL,'139,99','teresina','4','','netflix','2',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(133,'2022-04-08 09:09:53',NULL,'500',NULL,'139,99','lagoa','4','','netflix','2',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(134,'2022-04-08 09:09:53',NULL,'500',NULL,'139,99','demerval','4','','netflix','2',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(135,'2022-04-08 09:09:53',NULL,'500',NULL,'139,99','curralinhos','4','','netflix','2',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(136,'2022-04-08 09:09:53',NULL,'500',NULL,'139,99','monsenhor','4','','netflix','2',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(137,'2022-04-08 09:09:53',NULL,'500',NULL,'155,99','lagoa','4','','netflix','4',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(138,'2022-04-08 09:09:53',NULL,'500',NULL,'155,99','curralinhos','4','','netflix','4',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(139,'2022-04-08 09:09:53',NULL,'500',NULL,'155,99','monsenhor','4','','netflix','4',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(140,'2022-04-08 09:09:53',NULL,'500',NULL,'155,99','demerval','4','','netflix','4',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(141,'2022-04-08 09:09:53',NULL,'500',NULL,'155,99','teresina','4','','netflix','4',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(142,'2022-04-08 09:09:53',NULL,'500',NULL,'129,99','lagoa','4','','disney','4',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(143,'2022-04-08 09:09:53',NULL,'500',NULL,'129,99','curralinhos','4','','disney','4',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(144,'2022-04-08 09:09:53',NULL,'500',NULL,'129,99','monsenhor','4','','disney','4',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(145,'2022-04-08 09:09:53',NULL,'500',NULL,'129,99','demerval','4','','disney','4',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(146,'2022-04-08 09:09:53',NULL,'500',NULL,'129,99','teresina','4','','disney','4',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(147,'2022-04-08 09:09:53',NULL,'300',NULL,'124,99','lagoa','4','','disney','4',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(148,'2022-04-08 09:09:53',NULL,'300',NULL,'124,99','curralinhos','4','','disney','4',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(149,'2022-04-08 09:09:53',NULL,'300',NULL,'124,99','monsenhor','4','','disney','4',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(150,'2022-04-08 09:09:53',NULL,'300',NULL,'124,99','demerval','4','','disney','4',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(151,'2022-04-08 09:09:53',NULL,'300',NULL,'124,99','teresina','4','','disney','4',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(152,'2022-04-08 09:09:53',NULL,'600',NULL,'149,99','lagoa','4','','disney','4',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(153,'2022-04-08 09:09:53',NULL,'600',NULL,'149,99','curralinhos','4','','disney','4',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(154,'2022-04-08 09:09:53',NULL,'600',NULL,'149,99','monsenhor','4','','disney','4',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(155,'2022-04-08 09:09:53',NULL,'600',NULL,'149,99','demerval','4','','disney','4',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(156,'2022-04-08 09:09:53',NULL,'600',NULL,'149,99','teresina','4','','disney','4',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(157,'2022-04-08 09:09:53',NULL,'500',NULL,'109,99','lagoa','4','','amazon','4',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(158,'2022-04-08 09:09:53',NULL,'500',NULL,'109,99','curralinhos','4','','amazon','4',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(159,'2022-04-08 09:09:53',NULL,'500',NULL,'109,99','monsenhor','4','','amazon','4',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(160,'2022-04-08 09:09:53',NULL,'500',NULL,'109,99','demerval','4','','amazon','4',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(161,'2022-04-08 09:09:53',NULL,'500',NULL,'109,99','teresina','4','','amazon','4',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(162,'2022-04-08 09:09:53',NULL,'600',NULL,'134,99','teresina','4','','amazon','4',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(163,'2022-04-08 09:09:53',NULL,'300',NULL,'104,99','curralinhos','4','','amazon','4',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(164,'2022-04-08 09:09:53',NULL,'300',NULL,'104,99','monsenhor','4','','amazon','4',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(165,'2022-04-08 09:09:53',NULL,'300',NULL,'104,99','demerval','4','','amazon','4',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(172,'2022-04-08 09:09:53',NULL,'300',NULL,'104,99','teresina','4','','amazon','4',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(173,'2022-04-08 09:09:53',NULL,'300',NULL,'104,99','lagoa','4','','amazon','4',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(174,'2022-04-08 09:09:53',NULL,'600',NULL,'134,99','monsenhor','4','','amazon','4',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(175,'2022-04-08 09:09:53',NULL,'600',NULL,'134,99','demerval','4','','amazon','4',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(176,'2022-04-08 09:09:53',NULL,'600',NULL,'134,99','lagoa','4','','amazon','4',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(177,'2022-04-08 09:09:53',NULL,'600',NULL,'134,99','curralinhos','4','','amazon','4',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);

/*Table structure for table `posts` */

DROP TABLE IF EXISTS `posts`;

CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) DEFAULT NULL,
  `subtitle` varchar(2000) DEFAULT NULL,
  `category` varchar(200) DEFAULT NULL,
  `category_2` varchar(200) DEFAULT NULL,
  `link` varchar(500) DEFAULT NULL,
  `link_2` varchar(500) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `text_1` varchar(2000) DEFAULT NULL,
  `text_2` varchar(2000) DEFAULT NULL,
  `text_3` varchar(1000) DEFAULT NULL,
  `img` varchar(200) DEFAULT NULL,
  `img2` varchar(200) DEFAULT NULL,
  `user_create` varchar(200) DEFAULT NULL,
  `data_create` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

/*Data for the table `posts` */

insert  into `posts`(`id`,`title`,`subtitle`,`category`,`category_2`,`link`,`link_2`,`status`,`text_1`,`text_2`,`text_3`,`img`,`img2`,`user_create`,`data_create`) values 
(9,'Fim de semana com diversão tem que ter Mit. ',NULL,'Diversão',NULL,NULL,NULL,NULL,' Contrate os nossos planos e ofereça Internet rápida para seu filho não perder o game preferido. Vem com a Mit! ????','#Internet #fibraoptica #mitinternet #piaui #teresina #tecnologia #qualidade #velocidade #redessociais #wifi #netrapida #game #criança #felicidade #videogame #diversão #aniamação #entretenimento',NULL,'diversao.jpg',NULL,NULL,'2022-02-11 16:23:33');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `login` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `pass` varchar(100) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `whats` varchar(50) DEFAULT NULL,
  `img` varchar(200) DEFAULT NULL,
  `user_create` varchar(50) DEFAULT NULL,
  `data_create` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`login`,`email`,`pass`,`type`,`whats`,`img`,`user_create`,`data_create`) values 
(1,'Cairo Felipe dos Reis Machado','cairofelipedev','cairofelipedev@gmail.com','12345cf',1,'86999633288','cairo.jpg',NULL,'2021-12-29 11:12:49');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
