/*
SQLyog Community v13.1.7 (64 bit)
MySQL - 10.4.19-MariaDB : Database - mit
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

/*Table structure for table `logs` */

DROP TABLE IF EXISTS `logs`;

CREATE TABLE `logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `data_log` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `type` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1920 DEFAULT CHARSET=utf8;

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
(1919,'Cairo Felipe dos Reis Machado','2022-02-02 15:28:46','login');

/*Table structure for table `plans` */

DROP TABLE IF EXISTS `plans`;

CREATE TABLE `plans` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data_create` timestamp NOT NULL DEFAULT current_timestamp(),
  `speed` varchar(50) DEFAULT NULL,
  `price` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

/*Data for the table `plans` */

insert  into `plans`(`id`,`data_create`,`speed`,`price`,`city`) values 
(1,'2022-01-10 16:58:49','400','100','teresina'),
(2,'2022-01-10 17:00:12','500','159','teresina'),
(3,'2022-01-31 11:10:25','600','179','teresina'),
(4,'2022-01-31 11:10:25','600','179','demerval'),
(5,'2022-01-10 17:00:12','500','159','demerval'),
(6,'2022-01-10 16:58:49','400','100','demerval'),
(7,'2022-01-10 16:58:49','400','100','monsenhor'),
(8,'2022-01-10 16:58:49','400','100','lagoa'),
(9,'2022-01-10 17:00:12','500','159','lagoa'),
(10,'2022-01-31 11:10:25','600','179','monsenhor'),
(11,'2022-01-31 11:10:25','600','179','lagoa'),
(12,'2022-01-10 17:00:12','500','159','monsenhor'),
(15,'2022-02-02 15:34:13','200','109,99','curralinhos'),
(16,'2022-02-02 15:34:30','300','129,99','curralinhos'),
(17,'2022-02-02 15:34:49','400','154,99','curralinhos');

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
(1,'Cairo Felipe dos Reis Machado','cairofelipedev','cairofelipedev@gmail.com','12345',1,'86999633288',NULL,NULL,'2021-12-29 11:12:49');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
