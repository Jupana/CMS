# Host: localhost  (Version 5.5.5-10.1.36-MariaDB)
# Date: 2018-12-04 18:56:19
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "admins"
#

DROP TABLE IF EXISTS `admins`;
CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `created_at` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "admins"
#

INSERT INTO `admins` VALUES (1,'Liviu','liviu@liviu.com','$2y$10$8hfS8SLrXNtJf708h16OTeAf2jMRKcVxH2N4YP4MJ2FTWjVjztetS','');

#
# Structure for table "categories"
#

DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "categories"
#

INSERT INTO `categories` VALUES (1,'Tecnologia'),(2,'Familia'),(4,'Plantas');

#
# Structure for table "favorites"
#

DROP TABLE IF EXISTS `favorites`;
CREATE TABLE `favorites` (
  `favorite_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `post_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`favorite_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "favorites"
#

INSERT INTO `favorites` VALUES (2,1,1),(3,1,2);

#
# Structure for table "posts"
#

DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `body` text,
  `category_id` int(11) DEFAULT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `img_post` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "posts"
#

INSERT INTO `posts` VALUES (1,'Publicacion 3','<p>wefewe</p>\n',4,NULL,'1543944320','5c06b880d990d'),(2,'Publicacion 1','<p>rfaerfgEFe</p>\n',2,NULL,'1543944379','5c06b8bb7e967'),(3,'Publicacion 3','<p>eqfeqq</p>\n',2,NULL,'1543944398','5c06b8cef1d98');

#
# Structure for table "users"
#

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `last_name` varchar(30) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `created_at` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

#
# Data for table "users"
#

INSERT INTO `users` VALUES (1,'Nicol','Laura','Nic','nicol@yahoo.com','$2y$10$8hfS8SLrXNtJf708h16OTeAf2jMRKcVxH2N4YP4MJ2FTWjVjztetS','1543942924');
