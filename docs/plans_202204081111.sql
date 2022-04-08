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
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=utf8mb4;

INSERT INTO mit.plans (data_create,speed,price,city,`type`,tv,channels) VALUES
	 ('2022-04-08 09:09:53','600	','129,99','teresina','1',NULL,NULL),
	 ('2022-04-08 09:09:53','600	','129,99','demerval','1',NULL,NULL),
	 ('2022-04-08 09:09:53','600	','129,99','lagoa','1',NULL,NULL),
	 ('2022-04-08 09:09:53','600	','129,99','monsenhor','1',NULL,NULL),
	 ('2022-04-08 09:09:53','500','104,99','teresina','1',NULL,NULL),
	 ('2022-04-08 09:09:53','500','104,99','demerval','1',NULL,NULL),
	 ('2022-04-08 09:09:53','500','104,99','lagoa','1',NULL,NULL),
	 ('2022-04-08 09:09:53','500','104,99','monsenhor','1',NULL,NULL),
	 ('2022-04-08 09:09:53','200','99,99','teresina','1',NULL,NULL),
	 ('2022-04-08 09:09:53','200','99,99','demerval','1',NULL,NULL);
INSERT INTO mit.plans (data_create,speed,price,city,`type`,tv,channels) VALUES
	 ('2022-04-08 09:09:53','200','99,99','lagoa','1',NULL,NULL),
	 ('2022-04-08 09:09:53','200','99,99','monsenhor','1',NULL,NULL),
	 ('2022-04-08 09:09:53','500','129,99','curralinhos','1',NULL,NULL),
	 ('2022-04-08 09:09:53','300','109,99','curralinhos','1',NULL,NULL),
	 ('2022-04-08 09:09:53','120','99,99','curralinhos','1',NULL,NULL),
	 ('2022-04-08 09:09:53','300','134,99','teresina','2','DIGITAL HD','155'),
	 ('2022-04-08 09:09:53','300','159,99','teresina','2','TOP HD','181'),
	 ('2022-04-08 09:09:53','400','189,99','teresina','2','PREMIUM HD','217'),
	 ('2022-04-08 09:09:53','300','134,99','monsenhor','2','DIGITAL HD','155'),
	 ('2022-04-08 09:09:53','300','159,99','monsenhor','2','TOP HD','181');
INSERT INTO mit.plans (data_create,speed,price,city,`type`,tv,channels) VALUES
	 ('2022-04-08 09:09:53','400','189,99','monsenhor','2','PREMIUM HD','217'),
	 ('2022-04-08 09:09:53','300','134,99','lagoa','2','DIGITAL HD','155'),
	 ('2022-04-08 09:09:53','300','159,99','lagoa','2','TOP HD','181'),
	 ('2022-04-08 09:09:53','400','189,99','lagoa','2','PREMIUM HD','217'),
	 ('2022-04-08 09:09:53','300','134,99','demerval','2','DIGITAL HD','155'),
	 ('2022-04-08 09:09:53','300','159,99','demerval','2','TOP HD','181'),
	 ('2022-04-08 09:09:53','400','189,99','demerval','2','PREMIUM HD','217'),
	 ('2022-04-08 09:09:53','300','134,99','curralinhos','2','DIGITAL HD','155'),
	 ('2022-04-08 09:09:53','300','159,99','curralinhos','2','TOP HD','181'),
	 ('2022-04-08 09:09:53','400','189,99','curralinhos','2','PREMIUM HD','217');
INSERT INTO mit.plans (data_create,speed,price,city,`type`,tv,channels) VALUES
	 ('2022-04-08 09:09:53','600','129,99','teresina','3','',''),
	 ('2022-04-08 09:09:53','600','129,99','monsenhor','3','',''),
	 ('2022-04-08 09:09:53','600','129,99','lagoa','3','',''),
	 ('2022-04-08 09:09:53','600','129,99','demerval','3','',''),
	 ('2022-04-08 09:09:53','600','129,99','curralinhos','3','',''),
	 ('2022-04-08 09:09:53','600','139,99','monsenhor','4','',''),
	 ('2022-04-08 09:09:53','600','139,99','lagoa','4','',''),
	 ('2022-04-08 09:09:53','600','139,99','demerval','4','',''),
	 ('2022-04-08 09:09:53','600','139,99','curralinhos','4','','');
