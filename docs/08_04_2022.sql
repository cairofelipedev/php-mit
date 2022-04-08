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
) ENGINE=InnoDB AUTO_INCREMENT=1925 DEFAULT CHARSET=utf8;

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
(1924,'Cairo Felipe dos Reis Machado','2022-02-11 17:46:28','login');

/*Table structure for table `plans` */

DROP TABLE IF EXISTS `plans`;

CREATE TABLE `plans` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data_create` timestamp NOT NULL DEFAULT current_timestamp(),
  `speed` varchar(50) DEFAULT NULL,
  `price` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL,
  `tv` varchar(100) DEFAULT NULL,
  `channels` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4;

/*Data for the table `plans` */

insert  into `plans`(`id`,`data_create`,`speed`,`price`,`city`,`type`,`tv`,`channels`) values 
(4,'2022-01-31 11:10:25','600','179','demerval','1',NULL,NULL),
(5,'2022-01-10 17:00:12','500','159','demerval','1',NULL,NULL),
(6,'2022-01-10 16:58:49','400','100','demerval','1',NULL,NULL),
(7,'2022-01-10 16:58:49','400','100','monsenhor','1',NULL,NULL),
(8,'2022-01-10 16:58:49','400','100','lagoa','1',NULL,NULL),
(9,'2022-01-10 17:00:12','500','159','lagoa','1',NULL,NULL),
(10,'2022-01-31 11:10:25','600','179','monsenhor','1',NULL,NULL),
(11,'2022-01-31 11:10:25','600','179','lagoa','1',NULL,NULL),
(12,'2022-01-10 17:00:12','500','159','monsenhor','1',NULL,NULL),
(15,'2022-02-02 15:34:13','200','109,99','curralinhos','1',NULL,NULL),
(16,'2022-02-02 15:34:30','300','129,99','curralinhos','1',NULL,NULL),
(17,'2022-02-02 15:34:49','400','154,99','curralinhos','1',NULL,NULL),
(18,'2022-04-07 20:37:25','200','134,99','teresina','3','DIGITAL HD',NULL),
(19,'2022-04-07 20:37:37','300','159,99','teresina','2','TOP HD','181'),
(20,'2022-04-07 20:41:53','400','189,99','teresina','2','PREMIUM HD','217'),
(22,'2022-04-07 20:37:25','300','134,99','teresina','3','DIGITAL HD',NULL),
(23,'2022-04-07 20:37:25','300','134,99','teresina','2','DIGITAL HD','155'),
(24,'2022-04-07 20:41:53','400','189,99','teresina','3','DIGITAL HD',NULL),
(25,'2022-04-07 20:41:53','600','189,99','teresina','3','DIGITAL HD',NULL),
(26,'2022-04-07 20:41:53','600','129,99','teresina','4','',NULL),
(27,'2022-04-07 20:41:53','500','104,99','teresina','4','',NULL),
(28,'2022-04-08 00:11:41','200','99,99','teresina','4','',NULL),
(30,'2022-01-31 11:10:25','600','139,90','teresina','1',NULL,NULL),
(31,'2022-01-31 11:10:25','600','139,90','teresina','1',NULL,NULL);

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
(1,'Cairo Felipe dos Reis Machado','cairofelipedev','cairofelipedev@gmail.com','12345',1,'86999633288','cairo.jpg',NULL,'2021-12-29 11:12:49');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
