/*
SQLyog Ultimate v9.02 
MySQL - 5.6.12-log : Database - comphk
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`comphk` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `comphk`;

/*Table structure for table `access_logs` */

DROP TABLE IF EXISTS `access_logs`;

CREATE TABLE `access_logs` (
  `log_id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `access_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `access_ip` varchar(15) DEFAULT NULL,
  `exit_time` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`log_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

/*Data for the table `access_logs` */

insert  into `access_logs`(`log_id`,`userid`,`access_time`,`access_ip`,`exit_time`) values (1,2,'2013-10-24 08:31:22','127.0.0.1',NULL),(2,2,'2013-10-24 08:59:35','127.0.0.1',NULL),(3,2,'2013-10-30 11:01:02','127.0.0.1',NULL),(4,1,'2013-10-31 06:11:27','192.168.0.65',NULL),(5,1,'2013-10-31 06:19:45','192.168.0.65','2013-10-31 06:20:02'),(6,1,'2013-11-04 02:16:33','192.168.0.68','2013-11-04 02:16:48'),(7,1,'2013-11-04 10:33:19','192.168.0.57',NULL);

/*Table structure for table `api_clients` */

DROP TABLE IF EXISTS `api_clients`;

CREATE TABLE `api_clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `clientID` varchar(45) NOT NULL,
  `secretKEY` varchar(45) NOT NULL,
  `auth` varchar(45) DEFAULT NULL,
  `expiry` datetime DEFAULT NULL,
  `issued_at` datetime NOT NULL,
  `allowed` enum('ALL','NONE') DEFAULT 'NONE',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `api_clients` */

insert  into `api_clients`(`id`,`clientID`,`secretKEY`,`auth`,`expiry`,`issued_at`,`allowed`) values (1,'devTest092013','mysecretkams','98740','2014-09-19 07:44:00','2013-09-09 00:00:00','ALL');

/*Table structure for table `api_logs` */

DROP TABLE IF EXISTS `api_logs`;

CREATE TABLE `api_logs` (
  `log_id` int(11) NOT NULL AUTO_INCREMENT,
  `log_client_id` int(11) NOT NULL,
  `log_access_time` datetime DEFAULT CURRENT_TIMESTAMP,
  `log_method` varchar(50) DEFAULT NULL,
  `log_url` varchar(50) DEFAULT NULL,
  `log_request` text,
  `log_response` text,
  `log_query` text,
  PRIMARY KEY (`log_id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

/*Data for the table `api_logs` */

insert  into `api_logs`(`log_id`,`log_client_id`,`log_access_time`,`log_method`,`log_url`,`log_request`,`log_response`,`log_query`) values (1,98740,'2013-10-24 08:50:08','LOGIN - GET','api/users/login/hk/98740','false','{\"success\":false,\"rc\":999,\"message\":[\"Username must be provided\",\"Password must be provided\"]}',NULL),(2,987401,'2013-10-24 08:50:24','LOGIN - GET','api/users/login/hk/987401','false','{\"rc\":999,\"success\":false,\"message\":[[\"Authorization Key is not valid, please try again.\"]]}',NULL),(3,98740,'2013-10-24 08:56:42','LOGIN - POST','api/users/login/hk/98740','{\"username\":\"pinkyhk@novafabrik.com\",\"password\":\"password\",\"locale\":\"hk\"}','{\"rc\":0,\"success\":true,\"data\":{\"user\":{\"userid\":\"1\",\"email\":\"pinkyhk@novafabrik.com\",\"fname\":\"pinky\",\"lname\":\"liwanagan\",\"password\":\"5f4dcc3b5aa765d61d8327deb882cf99\",\"create_time\":\"2013-10-24 12:21:14\",\"verified\":\"1\",\"user_level_id\":\"3\",\"log_id\":7,\"locale\":\"hk\"}}}',NULL),(4,98740,'2013-10-24 09:58:04','PRODUCTTYPE - GET','api/producttype/hk/98740','false','{\"rc\":999,\"success\":false,\"message\":[\"Product Type List: No Records Found.\"]}',NULL),(5,98740,'2013-10-25 04:27:21','PRODUCTTYPE - GET','api/producttype/hk/98740','false','{\"rc\":999,\"success\":false,\"message\":[\"Product Type List: No Records Found.\"]}',NULL),(6,0,'2013-10-25 04:28:21','LOGIN - POST','api/users/login/hk/98740','{\"username\":\"\",\"password\":\"d41d8cd98f00b204e9800998ecf8427e\",\"locale\":\"hk\"}','{\"success\":false,\"rc\":999,\"message\":[\"Username must be provided\",\"Password must be provided\"]}',NULL),(7,0,'2013-10-29 03:25:04','LOGIN - POST','api/users/login/hk/98740','{\"username\":\"tearjerker_20@yahoo.com\",\"password\":\"5f4dcc3b5aa765d61d8327deb882cf99\",\"locale\":\"hk\"}','{\"rc\":999,\"success\":false,\"message\":[\"User does not exist.\"]}',NULL),(8,0,'2013-10-30 09:10:07','LOGIN - POST','api/users/login/hk/98740','{\"username\":\"tearjerker_20@yahoo.com\",\"password\":\"5f4dcc3b5aa765d61d8327deb882cf99\",\"locale\":\"hk\"}','{\"rc\":999,\"success\":false,\"message\":[\"User does not exist.\"]}',NULL),(9,0,'2013-10-30 11:01:02','LOGIN - POST','api/users/login/hk/98740','{\"username\":\"raphaelhk@novafabrik.com\",\"password\":\"5f4dcc3b5aa765d61d8327deb882cf99\",\"locale\":\"hk\"}','{\"rc\":0,\"success\":true,\"data\":{\"user\":{\"userid\":\"2\",\"email\":\"raphaelhk@novafabrik.com\",\"fname\":\"raphael\",\"lname\":\"torres\",\"password\":\"5f4dcc3b5aa765d61d8327deb882cf99\",\"create_time\":\"2013-10-24 12:22:16\",\"verified\":\"1\",\"user_level_id\":\"3\",\"log_id\":3,\"locale\":\"hk\"}}}',NULL),(10,98740,'2013-10-30 11:01:02','PRODUCTTYPE - GET','api/producttype/hk/98740','false','{\"rc\":999,\"success\":false,\"message\":[\"Product Type List: No Records Found.\"]}',NULL),(11,98740,'2013-10-30 11:01:07','PRODUCTS - GET','api/products/hk/98740','false','{\"rc\":999,\"success\":false,\"message\":[\"Product List: No Records Found.\"]}',NULL),(12,98740,'2013-10-30 11:01:07','PRODUCTTYPE - GET','api/producttype/hk/98740','false','{\"rc\":999,\"success\":false,\"message\":[\"Product Type List: No Records Found.\"]}',NULL),(13,98740,'2013-10-30 11:01:15','PRODUCTS - GET','api/products/hk/98740','false','{\"rc\":999,\"success\":false,\"message\":[\"Product List: No Records Found.\"]}',NULL),(14,98740,'2013-10-30 11:01:15','PRODUCTTYPE - GET','api/producttype/hk/98740','false','{\"rc\":999,\"success\":false,\"message\":[\"Product Type List: No Records Found.\"]}',NULL),(15,98740,'2013-10-30 11:06:44','PRODUCTTYPE - GET','api/producttype/hk/98740','false','{\"rc\":999,\"success\":false,\"message\":[\"Product Type List: No Records Found.\"]}',NULL),(16,98740,'2013-10-30 11:09:31','PRODUCTTYPE - GET','api/producttype/hk/98740','false','{\"rc\":999,\"success\":false,\"message\":[\"Product Type List: No Records Found.\"]}',NULL),(17,98740,'2013-10-30 11:09:31','PRODUCTTYPE - GET','api/producttype/hk/98740','false','{\"rc\":999,\"success\":false,\"message\":[\"Product Type List: No Records Found.\"]}',NULL),(18,98740,'2013-10-30 11:09:37','PRODUCTS - GET','api/products/hk/98740','false','{\"rc\":999,\"success\":false,\"message\":[\"Product List: No Records Found.\"]}',NULL),(19,98740,'2013-10-30 11:09:37','PRODUCTTYPE - GET','api/producttype/hk/98740','false','{\"rc\":999,\"success\":false,\"message\":[\"Product Type List: No Records Found.\"]}',NULL),(20,98740,'2013-10-30 11:09:41','COMPANY - GET','api/company/hk/98740','false','{\"rc\":999,\"success\":false,\"message\":[\"Company List: No Records Found.\"]}',NULL),(21,98740,'2013-10-30 11:09:41','PRODUCTTYPE - GET','api/producttype/hk/98740','false','{\"rc\":999,\"success\":false,\"message\":[\"Product Type List: No Records Found.\"]}',NULL),(22,98740,'2013-10-30 11:09:41','PRODUCTAREA - GET','api/productarea/hk/98740','false','{\"rc\":999,\"success\":false,\"message\":[\"Product Area List: No Records Found.\"]}',NULL),(23,98740,'2013-10-30 11:09:41','COUNTRY - GET','api/country/hk/98740','false','{\"rc\":0,\"success\":true,\"data\":{\"countrylist\":[{\"country_id\":\"99\",\"iso2\":\"HK\",\"short_name\":\"Hong Kong\",\"long_name\":\"Hong Kong\",\"iso3\":\"HKG\",\"numcode\":\"344\",\"un_member\":\"no\",\"calling_code\":\"852\",\"cctld\":\".hk\",\"visible\":\"show\"},{\"country_id\":\"133\",\"iso2\":\"MY\",\"short_name\":\"Malaysia\",\"long_name\":\"Malaysia\",\"iso3\":\"MYS\",\"numcode\":\"458\",\"un_member\":\"yes\",\"calling_code\":\"60\",\"cctld\":\".my\",\"visible\":\"show\"},{\"country_id\":\"174\",\"iso2\":\"PH\",\"short_name\":\"Phillipines\",\"long_name\":\"Republic of the Philippines\",\"iso3\":\"PHL\",\"numcode\":\"608\",\"un_member\":\"yes\",\"calling_code\":\"63\",\"cctld\":\".ph\",\"visible\":\"show\"}]}}',NULL),(24,98740,'2013-10-30 11:09:41','PRODUCTTYPE - GET','api/producttype/hk/98740','false','{\"rc\":999,\"success\":false,\"message\":[\"Product Type List: No Records Found.\"]}',NULL),(25,98740,'2013-10-30 11:15:31','COMPANY - GET','api/company/hk/98740','false','{\"rc\":999,\"success\":false,\"message\":[\"Company List: No Records Found.\"]}',NULL),(26,98740,'2013-10-30 11:15:31','PRODUCTTYPE - GET','api/producttype/hk/98740','false','{\"rc\":999,\"success\":false,\"message\":[\"Product Type List: No Records Found.\"]}',NULL),(27,98740,'2013-10-30 11:15:31','PRODUCTAREA - GET','api/productarea/hk/98740','false','{\"rc\":999,\"success\":false,\"message\":[\"Product Area List: No Records Found.\"]}',NULL),(28,98740,'2013-10-30 11:15:31','COUNTRY - GET','api/country/hk/98740','false','{\"rc\":0,\"success\":true,\"data\":{\"countrylist\":[{\"country_id\":\"99\",\"iso2\":\"HK\",\"short_name\":\"Hong Kong\",\"long_name\":\"Hong Kong\",\"iso3\":\"HKG\",\"numcode\":\"344\",\"un_member\":\"no\",\"calling_code\":\"852\",\"cctld\":\".hk\",\"visible\":\"show\"},{\"country_id\":\"133\",\"iso2\":\"MY\",\"short_name\":\"Malaysia\",\"long_name\":\"Malaysia\",\"iso3\":\"MYS\",\"numcode\":\"458\",\"un_member\":\"yes\",\"calling_code\":\"60\",\"cctld\":\".my\",\"visible\":\"show\"},{\"country_id\":\"174\",\"iso2\":\"PH\",\"short_name\":\"Phillipines\",\"long_name\":\"Republic of the Philippines\",\"iso3\":\"PHL\",\"numcode\":\"608\",\"un_member\":\"yes\",\"calling_code\":\"63\",\"cctld\":\".ph\",\"visible\":\"show\"}]}}',NULL),(29,98740,'2013-10-30 11:15:31','PRODUCTTYPE - GET','api/producttype/hk/98740','false','{\"rc\":999,\"success\":false,\"message\":[\"Product Type List: No Records Found.\"]}',NULL),(30,0,'2013-10-31 06:11:27','LOGIN - POST','api/users/login/hk/98740','{\"username\":\"pinkyhk@novafabrik.com\",\"password\":\"5f4dcc3b5aa765d61d8327deb882cf99\",\"locale\":\"hk\"}','{\"rc\":0,\"success\":true,\"data\":{\"user\":{\"userid\":\"1\",\"email\":\"pinkyhk@novafabrik.com\",\"fname\":\"pinky\",\"lname\":\"liwanagan\",\"password\":\"5f4dcc3b5aa765d61d8327deb882cf99\",\"create_time\":\"2013-10-24 12:21:14\",\"verified\":\"1\",\"user_level_id\":\"3\",\"log_id\":4,\"locale\":\"hk\"}}}',NULL),(31,98740,'2013-10-31 06:11:27','PRODUCTTYPE - GET','api/producttype/hk/98740','false','{\"rc\":999,\"success\":false,\"message\":[\"Product Type List: No Records Found.\"]}',NULL),(32,98740,'2013-10-31 06:11:32','PRODUCTS - GET','api/products/hk/98740','false','{\"rc\":999,\"success\":false,\"message\":[\"Product List: No Records Found.\"]}',NULL),(33,98740,'2013-10-31 06:11:32','PRODUCTTYPE - GET','api/producttype/hk/98740','false','{\"rc\":999,\"success\":false,\"message\":[\"Product Type List: No Records Found.\"]}',NULL),(34,98740,'2013-10-31 06:19:35','PRODUCTS - GET','api/products/hk/98740','false','{\"rc\":999,\"success\":false,\"message\":[\"Product List: No Records Found.\"]}',NULL),(35,98740,'2013-10-31 06:19:35','PRODUCTTYPE - GET','api/producttype/hk/98740','false','{\"rc\":999,\"success\":false,\"message\":[\"Product Type List: No Records Found.\"]}',NULL),(36,0,'2013-10-31 06:19:45','LOGIN - POST','api/users/login/hk/98740','{\"username\":\"pinkyhk@novafabrik.com\",\"password\":\"5f4dcc3b5aa765d61d8327deb882cf99\",\"locale\":\"hk\"}','{\"rc\":0,\"success\":true,\"data\":{\"user\":{\"userid\":\"1\",\"email\":\"pinkyhk@novafabrik.com\",\"fname\":\"pinky\",\"lname\":\"liwanagan\",\"password\":\"5f4dcc3b5aa765d61d8327deb882cf99\",\"create_time\":\"2013-10-24 12:21:14\",\"verified\":\"1\",\"user_level_id\":\"3\",\"log_id\":5,\"locale\":\"hk\"}}}',NULL),(37,98740,'2013-10-31 06:19:45','PRODUCTTYPE - GET','api/producttype/hk/98740','false','{\"rc\":999,\"success\":false,\"message\":[\"Product Type List: No Records Found.\"]}',NULL),(38,98740,'2013-10-31 06:19:50','PRODUCTS - GET','api/products/hk/98740','false','{\"rc\":999,\"success\":false,\"message\":[\"Product List: No Records Found.\"]}',NULL),(39,98740,'2013-10-31 06:19:50','PRODUCTTYPE - GET','api/producttype/hk/98740','false','{\"rc\":999,\"success\":false,\"message\":[\"Product Type List: No Records Found.\"]}',NULL),(40,0,'2013-11-04 02:16:33','LOGIN - POST','api/users/login/hk/98740','{\"username\":\"pinkyhk@novafabrik.com\",\"password\":\"5f4dcc3b5aa765d61d8327deb882cf99\",\"locale\":\"hk\"}','{\"rc\":0,\"success\":true,\"data\":{\"user\":{\"userid\":\"1\",\"email\":\"pinkyhk@novafabrik.com\",\"fname\":\"pinky\",\"lname\":\"liwanagan\",\"password\":\"5f4dcc3b5aa765d61d8327deb882cf99\",\"create_time\":\"2013-10-24 12:21:14\",\"verified\":\"1\",\"user_level_id\":\"3\",\"log_id\":6,\"locale\":\"hk\"}},\"log_query\":\"SELECT *\\nFROM (`user`)\\nWHERE `email` =  \'pinkyhk@novafabrik.com\'\\nAND `password` =  \'5f4dcc3b5aa765d61d8327deb882cf99\'\"}','SELECT *\nFROM (`user`)\nWHERE `email` =  \'pinkyhk@novafabrik.com\'\nAND `password` =  \'5f4dcc3b5aa765d61d8327deb882cf99\''),(41,98740,'2013-11-04 02:16:34','PRODUCTTYPE - GET','api/producttype/hk/98740','false','{\"rc\":999,\"success\":false,\"message\":[\"Product Type List: No Records Found.\"],\"log_query\":\"SELECT *\\nFROM (`products_types`)\\nORDER BY `product_type_id` asc\"}','SELECT *\nFROM (`products_types`)\nORDER BY `product_type_id` asc'),(42,0,'2013-11-04 02:16:56','LOGIN - POST','api/users/login/hk/98740','{\"username\":\"pinkymy@novafabrik.com\",\"password\":\"5f4dcc3b5aa765d61d8327deb882cf99\",\"locale\":\"hk\"}','{\"rc\":999,\"success\":false,\"message\":[\"User does not exist.\"],\"log_query\":\"SELECT *\\nFROM (`user`)\\nWHERE `email` =  \'pinkymy@novafabrik.com\'\\nAND `password` =  \'5f4dcc3b5aa765d61d8327deb882cf99\'\"}','SELECT *\nFROM (`user`)\nWHERE `email` =  \'pinkymy@novafabrik.com\'\nAND `password` =  \'5f4dcc3b5aa765d61d8327deb882cf99\''),(43,0,'2013-11-04 02:17:07','LOGIN - POST','api/users/login/hk/98740','{\"username\":\"pinkymy@novafabrik.com\",\"password\":\"5f4dcc3b5aa765d61d8327deb882cf99\",\"locale\":\"hk\"}','{\"rc\":999,\"success\":false,\"message\":[\"User does not exist.\"],\"log_query\":\"SELECT *\\nFROM (`user`)\\nWHERE `email` =  \'pinkymy@novafabrik.com\'\\nAND `password` =  \'5f4dcc3b5aa765d61d8327deb882cf99\'\"}','SELECT *\nFROM (`user`)\nWHERE `email` =  \'pinkymy@novafabrik.com\'\nAND `password` =  \'5f4dcc3b5aa765d61d8327deb882cf99\''),(44,0,'2013-11-04 10:33:19','LOGIN - POST','api/users/login/hk/98740','{\"username\":\"pinkyhk@novafabrik.com\",\"password\":\"5f4dcc3b5aa765d61d8327deb882cf99\",\"locale\":\"hk\"}','{\"rc\":0,\"success\":true,\"data\":{\"user\":{\"userid\":\"1\",\"email\":\"pinkyhk@novafabrik.com\",\"fname\":\"pinky\",\"lname\":\"liwanagan\",\"password\":\"5f4dcc3b5aa765d61d8327deb882cf99\",\"create_time\":\"2013-10-24 12:21:14\",\"verified\":\"1\",\"user_level_id\":\"3\",\"log_id\":7,\"locale\":\"hk\"}},\"log_query\":\"SELECT *\\nFROM (`user`)\\nWHERE `email` =  \'pinkyhk@novafabrik.com\'\\nAND `password` =  \'5f4dcc3b5aa765d61d8327deb882cf99\'\"}','SELECT *\nFROM (`user`)\nWHERE `email` =  \'pinkyhk@novafabrik.com\'\nAND `password` =  \'5f4dcc3b5aa765d61d8327deb882cf99\''),(45,98740,'2013-11-04 10:33:19','PRODUCTTYPE - GET','api/producttype/hk/98740','false','{\"rc\":999,\"success\":false,\"message\":[\"Product Type List: No Records Found.\"],\"log_query\":\"SELECT *\\nFROM (`products_types`)\\nORDER BY `product_type_id` asc\"}','SELECT *\nFROM (`products_types`)\nORDER BY `product_type_id` asc'),(46,0,'2013-11-04 10:36:53','LOGIN - POST','api/users/login/hk/98740','{\"username\":\"pinkymy@novafabrik.com\",\"password\":\"5f4dcc3b5aa765d61d8327deb882cf99\",\"locale\":\"hk\"}','{\"rc\":999,\"success\":false,\"message\":[\"User does not exist.\"],\"log_query\":\"SELECT *\\nFROM (`user`)\\nWHERE `email` =  \'pinkymy@novafabrik.com\'\\nAND `password` =  \'5f4dcc3b5aa765d61d8327deb882cf99\'\"}','SELECT *\nFROM (`user`)\nWHERE `email` =  \'pinkymy@novafabrik.com\'\nAND `password` =  \'5f4dcc3b5aa765d61d8327deb882cf99\'');

/*Table structure for table `ci_sessions` */

DROP TABLE IF EXISTS `ci_sessions`;

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(64) NOT NULL DEFAULT '0',
  `user_agent` varchar(1024) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` mediumtext NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ci_sessions` */

/*Table structure for table `companies` */

DROP TABLE IF EXISTS `companies`;

CREATE TABLE `companies` (
  `company_id` int(11) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(100) NOT NULL,
  `company_email` varchar(50) NOT NULL,
  `company_phone` varchar(45) DEFAULT NULL,
  `company_fax` varchar(45) DEFAULT NULL,
  `company_address` varchar(255) DEFAULT NULL,
  `company_country_id` int(11) NOT NULL,
  `company_contact` varchar(255) DEFAULT NULL,
  `company_logo` varchar(255) DEFAULT NULL,
  `company_datecreated` datetime DEFAULT NULL,
  `company_weblink` varchar(50) DEFAULT NULL,
  `company_description` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`company_id`),
  UNIQUE KEY `company_id_UNIQUE` (`company_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `companies` */

/*Table structure for table `countries` */

DROP TABLE IF EXISTS `countries`;

CREATE TABLE `countries` (
  `country_id` int(5) NOT NULL AUTO_INCREMENT,
  `iso2` char(2) DEFAULT NULL,
  `short_name` varchar(80) NOT NULL DEFAULT '',
  `long_name` varchar(80) NOT NULL DEFAULT '',
  `iso3` char(3) DEFAULT NULL,
  `numcode` varchar(6) DEFAULT NULL,
  `un_member` varchar(12) DEFAULT NULL,
  `calling_code` varchar(8) DEFAULT NULL,
  `cctld` varchar(5) DEFAULT NULL,
  `visible` enum('show','hide') NOT NULL DEFAULT 'show',
  PRIMARY KEY (`country_id`)
) ENGINE=MyISAM AUTO_INCREMENT=251 DEFAULT CHARSET=latin1;

/*Data for the table `countries` */

insert  into `countries`(`country_id`,`iso2`,`short_name`,`long_name`,`iso3`,`numcode`,`un_member`,`calling_code`,`cctld`,`visible`) values (1,'AF','Afghanistan','Islamic Republic of Afghanistan','AFG','004','yes','93','.af',''),(2,'AX','Aland Islands','&Aring;land Islands','ALA','248','no','358','.ax',''),(3,'AL','Albania','Republic of Albania','ALB','008','yes','355','.al',''),(4,'DZ','Algeria','People\'s Democratic Republic of Algeria','DZA','012','yes','213','.dz',''),(5,'AS','American Samoa','American Samoa','ASM','016','no','1+684','.as',''),(6,'AD','Andorra','Principality of Andorra','AND','020','yes','376','.ad',''),(7,'AO','Angola','Republic of Angola','AGO','024','yes','244','.ao',''),(8,'AI','Anguilla','Anguilla','AIA','660','no','1+264','.ai',''),(9,'AQ','Antarctica','Antarctica','ATA','010','no','672','.aq',''),(10,'AG','Antigua and Barbuda','Antigua and Barbuda','ATG','028','yes','1+268','.ag',''),(11,'AR','Argentina','Argentine Republic','ARG','032','yes','54','.ar',''),(12,'AM','Armenia','Republic of Armenia','ARM','051','yes','374','.am',''),(13,'AW','Aruba','Aruba','ABW','533','no','297','.aw',''),(14,'AU','Australia','Commonwealth of Australia','AUS','036','yes','61','.au',''),(15,'AT','Austria','Republic of Austria','AUT','040','yes','43','.at',''),(16,'AZ','Azerbaijan','Republic of Azerbaijan','AZE','031','yes','994','.az',''),(17,'BS','Bahamas','Commonwealth of The Bahamas','BHS','044','yes','1+242','.bs',''),(18,'BH','Bahrain','Kingdom of Bahrain','BHR','048','yes','973','.bh',''),(19,'BD','Bangladesh','People\'s Republic of Bangladesh','BGD','050','yes','880','.bd',''),(20,'BB','Barbados','Barbados','BRB','052','yes','1+246','.bb',''),(21,'BY','Belarus','Republic of Belarus','BLR','112','yes','375','.by',''),(22,'BE','Belgium','Kingdom of Belgium','BEL','056','yes','32','.be',''),(23,'BZ','Belize','Belize','BLZ','084','yes','501','.bz',''),(24,'BJ','Benin','Republic of Benin','BEN','204','yes','229','.bj',''),(25,'BM','Bermuda','Bermuda Islands','BMU','060','no','1+441','.bm',''),(26,'BT','Bhutan','Kingdom of Bhutan','BTN','064','yes','975','.bt',''),(27,'BO','Bolivia','Plurinational State of Bolivia','BOL','068','yes','591','.bo',''),(28,'BQ','Bonaire, Sint Eustatius and Saba','Bonaire, Sint Eustatius and Saba','BES','535','no','599','.bq',''),(29,'BA','Bosnia and Herzegovina','Bosnia and Herzegovina','BIH','070','yes','387','.ba',''),(30,'BW','Botswana','Republic of Botswana','BWA','072','yes','267','.bw',''),(31,'BV','Bouvet Island','Bouvet Island','BVT','074','no','NONE','.bv',''),(32,'BR','Brazil','Federative Republic of Brazil','BRA','076','yes','55','.br',''),(33,'IO','British Indian Ocean Territory','British Indian Ocean Territory','IOT','086','no','246','.io',''),(34,'BN','Brunei','Brunei Darussalam','BRN','096','yes','673','.bn',''),(35,'BG','Bulgaria','Republic of Bulgaria','BGR','100','yes','359','.bg',''),(36,'BF','Burkina Faso','Burkina Faso','BFA','854','yes','226','.bf',''),(37,'BI','Burundi','Republic of Burundi','BDI','108','yes','257','.bi',''),(38,'KH','Cambodia','Kingdom of Cambodia','KHM','116','yes','855','.kh',''),(39,'CM','Cameroon','Republic of Cameroon','CMR','120','yes','237','.cm',''),(40,'CA','Canada','Canada','CAN','124','yes','1','.ca',''),(41,'CV','Cape Verde','Republic of Cape Verde','CPV','132','yes','238','.cv',''),(42,'KY','Cayman Islands','The Cayman Islands','CYM','136','no','1+345','.ky',''),(43,'CF','Central African Republic','Central African Republic','CAF','140','yes','236','.cf',''),(44,'TD','Chad','Republic of Chad','TCD','148','yes','235','.td',''),(45,'CL','Chile','Republic of Chile','CHL','152','yes','56','.cl',''),(46,'CN','China','People\'s Republic of China','CHN','156','yes','86','.cn',''),(47,'CX','Christmas Island','Christmas Island','CXR','162','no','61','.cx',''),(48,'CC','Cocos (Keeling) Islands','Cocos (Keeling) Islands','CCK','166','no','61','.cc',''),(49,'CO','Colombia','Republic of Colombia','COL','170','yes','57','.co',''),(50,'KM','Comoros','Union of the Comoros','COM','174','yes','269','.km',''),(51,'CG','Congo','Republic of the Congo','COG','178','yes','242','.cg',''),(52,'CK','Cook Islands','Cook Islands','COK','184','some','682','.ck',''),(53,'CR','Costa Rica','Republic of Costa Rica','CRI','188','yes','506','.cr',''),(54,'CI','Cote d\'ivoire (Ivory Coast)','Republic of C&ocirc;te D\'Ivoire (Ivory Coast)','CIV','384','yes','225','.ci',''),(55,'HR','Croatia','Republic of Croatia','HRV','191','yes','385','.hr',''),(56,'CU','Cuba','Republic of Cuba','CUB','192','yes','53','.cu',''),(57,'CW','Curacao','Cura&ccedil;ao','CUW','531','no','599','.cw',''),(58,'CY','Cyprus','Republic of Cyprus','CYP','196','yes','357','.cy',''),(59,'CZ','Czech Republic','Czech Republic','CZE','203','yes','420','.cz',''),(60,'CD','Democratic Republic of the Congo','Democratic Republic of the Congo','COD','180','yes','243','.cd',''),(61,'DK','Denmark','Kingdom of Denmark','DNK','208','yes','45','.dk',''),(62,'DJ','Djibouti','Republic of Djibouti','DJI','262','yes','253','.dj',''),(63,'DM','Dominica','Commonwealth of Dominica','DMA','212','yes','1+767','.dm',''),(64,'DO','Dominican Republic','Dominican Republic','DOM','214','yes','1+809, 8','.do',''),(65,'EC','Ecuador','Republic of Ecuador','ECU','218','yes','593','.ec',''),(66,'EG','Egypt','Arab Republic of Egypt','EGY','818','yes','20','.eg',''),(67,'SV','El Salvador','Republic of El Salvador','SLV','222','yes','503','.sv',''),(68,'GQ','Equatorial Guinea','Republic of Equatorial Guinea','GNQ','226','yes','240','.gq',''),(69,'ER','Eritrea','State of Eritrea','ERI','232','yes','291','.er',''),(70,'EE','Estonia','Republic of Estonia','EST','233','yes','372','.ee',''),(71,'ET','Ethiopia','Federal Democratic Republic of Ethiopia','ETH','231','yes','251','.et',''),(72,'FK','Falkland Islands (Malvinas)','The Falkland Islands (Malvinas)','FLK','238','no','500','.fk',''),(73,'FO','Faroe Islands','The Faroe Islands','FRO','234','no','298','.fo',''),(74,'FJ','Fiji','Republic of Fiji','FJI','242','yes','679','.fj',''),(75,'FI','Finland','Republic of Finland','FIN','246','yes','358','.fi',''),(76,'FR','France','French Republic','FRA','250','yes','33','.fr',''),(77,'GF','French Guiana','French Guiana','GUF','254','no','594','.gf',''),(78,'PF','French Polynesia','French Polynesia','PYF','258','no','689','.pf',''),(79,'TF','French Southern Territories','French Southern Territories','ATF','260','no',NULL,'.tf',''),(80,'GA','Gabon','Gabonese Republic','GAB','266','yes','241','.ga',''),(81,'GM','Gambia','Republic of The Gambia','GMB','270','yes','220','.gm',''),(82,'GE','Georgia','Georgia','GEO','268','yes','995','.ge',''),(83,'DE','Germany','Federal Republic of Germany','DEU','276','yes','49','.de',''),(84,'GH','Ghana','Republic of Ghana','GHA','288','yes','233','.gh',''),(85,'GI','Gibraltar','Gibraltar','GIB','292','no','350','.gi',''),(86,'GR','Greece','Hellenic Republic','GRC','300','yes','30','.gr',''),(87,'GL','Greenland','Greenland','GRL','304','no','299','.gl',''),(88,'GD','Grenada','Grenada','GRD','308','yes','1+473','.gd',''),(89,'GP','Guadaloupe','Guadeloupe','GLP','312','no','590','.gp',''),(90,'GU','Guam','Guam','GUM','316','no','1+671','.gu',''),(91,'GT','Guatemala','Republic of Guatemala','GTM','320','yes','502','.gt',''),(92,'GG','Guernsey','Guernsey','GGY','831','no','44','.gg',''),(93,'GN','Guinea','Republic of Guinea','GIN','324','yes','224','.gn',''),(94,'GW','Guinea-Bissau','Republic of Guinea-Bissau','GNB','624','yes','245','.gw',''),(95,'GY','Guyana','Co-operative Republic of Guyana','GUY','328','yes','592','.gy',''),(96,'HT','Haiti','Republic of Haiti','HTI','332','yes','509','.ht',''),(97,'HM','Heard Island and McDonald Islands','Heard Island and McDonald Islands','HMD','334','no','NONE','.hm',''),(98,'HN','Honduras','Republic of Honduras','HND','340','yes','504','.hn',''),(99,'HK','Hong Kong','Hong Kong','HKG','344','no','852','.hk','show'),(100,'HU','Hungary','Hungary','HUN','348','yes','36','.hu',''),(101,'IS','Iceland','Republic of Iceland','ISL','352','yes','354','.is',''),(102,'IN','India','Republic of India','IND','356','yes','91','.in',''),(103,'ID','Indonesia','Republic of Indonesia','IDN','360','yes','62','.id',''),(104,'IR','Iran','Islamic Republic of Iran','IRN','364','yes','98','.ir',''),(105,'IQ','Iraq','Republic of Iraq','IRQ','368','yes','964','.iq',''),(106,'IE','Ireland','Ireland','IRL','372','yes','353','.ie',''),(107,'IM','Isle of Man','Isle of Man','IMN','833','no','44','.im',''),(108,'IL','Israel','State of Israel','ISR','376','yes','972','.il',''),(109,'IT','Italy','Italian Republic','ITA','380','yes','39','.jm',''),(110,'JM','Jamaica','Jamaica','JAM','388','yes','1+876','.jm',''),(111,'JP','Japan','Japan','JPN','392','yes','81','.jp',''),(112,'JE','Jersey','The Bailiwick of Jersey','JEY','832','no','44','.je',''),(113,'JO','Jordan','Hashemite Kingdom of Jordan','JOR','400','yes','962','.jo',''),(114,'KZ','Kazakhstan','Republic of Kazakhstan','KAZ','398','yes','7','.kz',''),(115,'KE','Kenya','Republic of Kenya','KEN','404','yes','254','.ke',''),(116,'KI','Kiribati','Republic of Kiribati','KIR','296','yes','686','.ki',''),(117,'XK','Kosovo','Republic of Kosovo','---','---','some','381','',''),(118,'KW','Kuwait','State of Kuwait','KWT','414','yes','965','.kw',''),(119,'KG','Kyrgyzstan','Kyrgyz Republic','KGZ','417','yes','996','.kg',''),(120,'LA','Laos','Lao People\'s Democratic Republic','LAO','418','yes','856','.la',''),(121,'LV','Latvia','Republic of Latvia','LVA','428','yes','371','.lv',''),(122,'LB','Lebanon','Republic of Lebanon','LBN','422','yes','961','.lb',''),(123,'LS','Lesotho','Kingdom of Lesotho','LSO','426','yes','266','.ls',''),(124,'LR','Liberia','Republic of Liberia','LBR','430','yes','231','.lr',''),(125,'LY','Libya','Libya','LBY','434','yes','218','.ly',''),(126,'LI','Liechtenstein','Principality of Liechtenstein','LIE','438','yes','423','.li',''),(127,'LT','Lithuania','Republic of Lithuania','LTU','440','yes','370','.lt',''),(128,'LU','Luxembourg','Grand Duchy of Luxembourg','LUX','442','yes','352','.lu',''),(129,'MO','Macao','The Macao Special Administrative Region','MAC','446','no','853','.mo',''),(130,'MK','Macedonia','The Former Yugoslav Republic of Macedonia','MKD','807','yes','389','.mk',''),(131,'MG','Madagascar','Republic of Madagascar','MDG','450','yes','261','.mg',''),(132,'MW','Malawi','Republic of Malawi','MWI','454','yes','265','.mw',''),(133,'MY','Malaysia','Malaysia','MYS','458','yes','60','.my','show'),(134,'MV','Maldives','Republic of Maldives','MDV','462','yes','960','.mv',''),(135,'ML','Mali','Republic of Mali','MLI','466','yes','223','.ml',''),(136,'MT','Malta','Republic of Malta','MLT','470','yes','356','.mt',''),(137,'MH','Marshall Islands','Republic of the Marshall Islands','MHL','584','yes','692','.mh',''),(138,'MQ','Martinique','Martinique','MTQ','474','no','596','.mq',''),(139,'MR','Mauritania','Islamic Republic of Mauritania','MRT','478','yes','222','.mr',''),(140,'MU','Mauritius','Republic of Mauritius','MUS','480','yes','230','.mu',''),(141,'YT','Mayotte','Mayotte','MYT','175','no','262','.yt',''),(142,'MX','Mexico','United Mexican States','MEX','484','yes','52','.mx',''),(143,'FM','Micronesia','Federated States of Micronesia','FSM','583','yes','691','.fm',''),(144,'MD','Moldava','Republic of Moldova','MDA','498','yes','373','.md',''),(145,'MC','Monaco','Principality of Monaco','MCO','492','yes','377','.mc',''),(146,'MN','Mongolia','Mongolia','MNG','496','yes','976','.mn',''),(147,'ME','Montenegro','Montenegro','MNE','499','yes','382','.me',''),(148,'MS','Montserrat','Montserrat','MSR','500','no','1+664','.ms',''),(149,'MA','Morocco','Kingdom of Morocco','MAR','504','yes','212','.ma',''),(150,'MZ','Mozambique','Republic of Mozambique','MOZ','508','yes','258','.mz',''),(151,'MM','Myanmar (Burma)','Republic of the Union of Myanmar','MMR','104','yes','95','.mm',''),(152,'NA','Namibia','Republic of Namibia','NAM','516','yes','264','.na',''),(153,'NR','Nauru','Republic of Nauru','NRU','520','yes','674','.nr',''),(154,'NP','Nepal','Federal Democratic Republic of Nepal','NPL','524','yes','977','.np',''),(155,'NL','Netherlands','Kingdom of the Netherlands','NLD','528','yes','31','.nl',''),(156,'NC','New Caledonia','New Caledonia','NCL','540','no','687','.nc',''),(157,'NZ','New Zealand','New Zealand','NZL','554','yes','64','.nz',''),(158,'NI','Nicaragua','Republic of Nicaragua','NIC','558','yes','505','.ni',''),(159,'NE','Niger','Republic of Niger','NER','562','yes','227','.ne',''),(160,'NG','Nigeria','Federal Republic of Nigeria','NGA','566','yes','234','.ng',''),(161,'NU','Niue','Niue','NIU','570','some','683','.nu',''),(162,'NF','Norfolk Island','Norfolk Island','NFK','574','no','672','.nf',''),(163,'KP','North Korea','Democratic People\'s Republic of Korea','PRK','408','yes','850','.kp',''),(164,'MP','Northern Mariana Islands','Northern Mariana Islands','MNP','580','no','1+670','.mp',''),(165,'NO','Norway','Kingdom of Norway','NOR','578','yes','47','.no',''),(166,'OM','Oman','Sultanate of Oman','OMN','512','yes','968','.om',''),(167,'PK','Pakistan','Islamic Republic of Pakistan','PAK','586','yes','92','.pk',''),(168,'PW','Palau','Republic of Palau','PLW','585','yes','680','.pw',''),(169,'PS','Palestine','State of Palestine (or Occupied Palestinian Territory)','PSE','275','some','970','.ps',''),(170,'PA','Panama','Republic of Panama','PAN','591','yes','507','.pa',''),(171,'PG','Papua New Guinea','Independent State of Papua New Guinea','PNG','598','yes','675','.pg',''),(172,'PY','Paraguay','Republic of Paraguay','PRY','600','yes','595','.py',''),(173,'PE','Peru','Republic of Peru','PER','604','yes','51','.pe',''),(174,'PH','Phillipines','Republic of the Philippines','PHL','608','yes','63','.ph','show'),(175,'PN','Pitcairn','Pitcairn','PCN','612','no','NONE','.pn',''),(176,'PL','Poland','Republic of Poland','POL','616','yes','48','.pl',''),(177,'PT','Portugal','Portuguese Republic','PRT','620','yes','351','.pt',''),(178,'PR','Puerto Rico','Commonwealth of Puerto Rico','PRI','630','no','1+939','.pr',''),(179,'QA','Qatar','State of Qatar','QAT','634','yes','974','.qa',''),(180,'RE','Reunion','R&eacute;union','REU','638','no','262','.re',''),(181,'RO','Romania','Romania','ROU','642','yes','40','.ro',''),(182,'RU','Russia','Russian Federation','RUS','643','yes','7','.ru',''),(183,'RW','Rwanda','Republic of Rwanda','RWA','646','yes','250','.rw',''),(184,'BL','Saint Barthelemy','Saint Barth&eacute;lemy','BLM','652','no','590','.bl',''),(185,'SH','Saint Helena','Saint Helena, Ascension and Tristan da Cunha','SHN','654','no','290','.sh',''),(186,'KN','Saint Kitts and Nevis','Federation of Saint Christopher and Nevis','KNA','659','yes','1+869','.kn',''),(187,'LC','Saint Lucia','Saint Lucia','LCA','662','yes','1+758','.lc',''),(188,'MF','Saint Martin','Saint Martin','MAF','663','no','590','.mf',''),(189,'PM','Saint Pierre and Miquelon','Saint Pierre and Miquelon','SPM','666','no','508','.pm',''),(190,'VC','Saint Vincent and the Grenadines','Saint Vincent and the Grenadines','VCT','670','yes','1+784','.vc',''),(191,'WS','Samoa','Independent State of Samoa','WSM','882','yes','685','.ws',''),(192,'SM','San Marino','Republic of San Marino','SMR','674','yes','378','.sm',''),(193,'ST','Sao Tome and Principe','Democratic Republic of S&atilde;o Tom&eacute; and Pr&iacute;ncipe','STP','678','yes','239','.st',''),(194,'SA','Saudi Arabia','Kingdom of Saudi Arabia','SAU','682','yes','966','.sa',''),(195,'SN','Senegal','Republic of Senegal','SEN','686','yes','221','.sn',''),(196,'RS','Serbia','Republic of Serbia','SRB','688','yes','381','.rs',''),(197,'SC','Seychelles','Republic of Seychelles','SYC','690','yes','248','.sc',''),(198,'SL','Sierra Leone','Republic of Sierra Leone','SLE','694','yes','232','.sl',''),(199,'SG','Singapore','Republic of Singapore','SGP','702','yes','65','.sg',''),(200,'SX','Sint Maarten','Sint Maarten','SXM','534','no','1+721','.sx',''),(201,'SK','Slovakia','Slovak Republic','SVK','703','yes','421','.sk',''),(202,'SI','Slovenia','Republic of Slovenia','SVN','705','yes','386','.si',''),(203,'SB','Solomon Islands','Solomon Islands','SLB','090','yes','677','.sb',''),(204,'SO','Somalia','Somali Republic','SOM','706','yes','252','.so',''),(205,'ZA','South Africa','Republic of South Africa','ZAF','710','yes','27','.za',''),(206,'GS','South Georgia and the South Sandwich Islands','South Georgia and the South Sandwich Islands','SGS','239','no','500','.gs',''),(207,'KR','South Korea','Republic of Korea','KOR','410','yes','82','.kr',''),(208,'SS','South Sudan','Republic of South Sudan','SSD','728','yes','211','.ss',''),(209,'ES','Spain','Kingdom of Spain','ESP','724','yes','34','.es',''),(210,'LK','Sri Lanka','Democratic Socialist Republic of Sri Lanka','LKA','144','yes','94','.lk',''),(211,'SD','Sudan','Republic of the Sudan','SDN','729','yes','249','.sd',''),(212,'SR','Suriname','Republic of Suriname','SUR','740','yes','597','.sr',''),(213,'SJ','Svalbard and Jan Mayen','Svalbard and Jan Mayen','SJM','744','no','47','.sj',''),(214,'SZ','Swaziland','Kingdom of Swaziland','SWZ','748','yes','268','.sz',''),(215,'SE','Sweden','Kingdom of Sweden','SWE','752','yes','46','.se',''),(216,'CH','Switzerland','Swiss Confederation','CHE','756','yes','41','.ch',''),(217,'SY','Syria','Syrian Arab Republic','SYR','760','yes','963','.sy',''),(218,'TW','Taiwan','Republic of China (Taiwan)','TWN','158','former','886','.tw',''),(219,'TJ','Tajikistan','Republic of Tajikistan','TJK','762','yes','992','.tj',''),(220,'TZ','Tanzania','United Republic of Tanzania','TZA','834','yes','255','.tz',''),(221,'TH','Thailand','Kingdom of Thailand','THA','764','yes','66','.th',''),(222,'TL','Timor-Leste (East Timor)','Democratic Republic of Timor-Leste','TLS','626','yes','670','.tl',''),(223,'TG','Togo','Togolese Republic','TGO','768','yes','228','.tg',''),(224,'TK','Tokelau','Tokelau','TKL','772','no','690','.tk',''),(225,'TO','Tonga','Kingdom of Tonga','TON','776','yes','676','.to',''),(226,'TT','Trinidad and Tobago','Republic of Trinidad and Tobago','TTO','780','yes','1+868','.tt',''),(227,'TN','Tunisia','Republic of Tunisia','TUN','788','yes','216','.tn',''),(228,'TR','Turkey','Republic of Turkey','TUR','792','yes','90','.tr',''),(229,'TM','Turkmenistan','Turkmenistan','TKM','795','yes','993','.tm',''),(230,'TC','Turks and Caicos Islands','Turks and Caicos Islands','TCA','796','no','1+649','.tc',''),(231,'TV','Tuvalu','Tuvalu','TUV','798','yes','688','.tv',''),(232,'UG','Uganda','Republic of Uganda','UGA','800','yes','256','.ug',''),(233,'UA','Ukraine','Ukraine','UKR','804','yes','380','.ua',''),(234,'AE','United Arab Emirates','United Arab Emirates','ARE','784','yes','971','.ae',''),(235,'GB','United Kingdom','United Kingdom of Great Britain and Nothern Ireland','GBR','826','yes','44','.uk',''),(236,'US','United States','United States of America','USA','840','yes','1','.us',''),(237,'UM','United States Minor Outlying Islands','United States Minor Outlying Islands','UMI','581','no','NONE','NONE',''),(238,'UY','Uruguay','Eastern Republic of Uruguay','URY','858','yes','598','.uy',''),(239,'UZ','Uzbekistan','Republic of Uzbekistan','UZB','860','yes','998','.uz',''),(240,'VU','Vanuatu','Republic of Vanuatu','VUT','548','yes','678','.vu',''),(241,'VA','Vatican City','State of the Vatican City','VAT','336','no','39','.va',''),(242,'VE','Venezuela','Bolivarian Republic of Venezuela','VEN','862','yes','58','.ve',''),(243,'VN','Vietnam','Socialist Republic of Vietnam','VNM','704','yes','84','.vn',''),(244,'VG','Virgin Islands, British','British Virgin Islands','VGB','092','no','1+284','.vg',''),(245,'VI','Virgin Islands, US','Virgin Islands of the United States','VIR','850','no','1+340','.vi',''),(246,'WF','Wallis and Futuna','Wallis and Futuna','WLF','876','no','681','.wf',''),(247,'EH','Western Sahara','Western Sahara','ESH','732','no','212','.eh',''),(248,'YE','Yemen','Republic of Yemen','YEM','887','yes','967','.ye',''),(249,'ZM','Zambia','Republic of Zambia','ZMB','894','yes','260','.zm',''),(250,'ZW','Zimbabwe','Republic of Zimbabwe','ZWE','716','yes','263','.zw','');

/*Table structure for table `products` */

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_type_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_description` text,
  `featured` int(11) NOT NULL DEFAULT '0',
  `country_id` int(11) NOT NULL DEFAULT '0',
  `area_id` int(11) NOT NULL DEFAULT '0',
  `product_icon` varchar(255) NOT NULL,
  `product_link` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`product_id`),
  UNIQUE KEY `product_id_UNIQUE` (`product_id`),
  KEY `company_id_idx` (`company_id`),
  KEY `product_type_id_idx` (`product_type_id`),
  KEY `FK_products` (`area_id`),
  CONSTRAINT `company_id` FOREIGN KEY (`company_id`) REFERENCES `companies` (`company_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_products` FOREIGN KEY (`area_id`) REFERENCES `products_areas` (`area_id`),
  CONSTRAINT `product_type_id` FOREIGN KEY (`product_type_id`) REFERENCES `products_types` (`product_type_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `products` */

/*Table structure for table `products_areas` */

DROP TABLE IF EXISTS `products_areas`;

CREATE TABLE `products_areas` (
  `area_id` int(11) NOT NULL AUTO_INCREMENT,
  `area_name` varchar(55) NOT NULL,
  `area_description` varchar(255) NOT NULL,
  `area_active` tinyint(1) NOT NULL DEFAULT '1',
  `area_country_id` int(11) NOT NULL,
  PRIMARY KEY (`area_id`),
  UNIQUE KEY `area_id_UNIQUE` (`area_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `products_areas` */

/*Table structure for table `products_options` */

DROP TABLE IF EXISTS `products_options`;

CREATE TABLE `products_options` (
  `option_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `vertical_optionid` int(11) NOT NULL,
  `option` varchar(25) DEFAULT NULL,
  `option_value` longtext NOT NULL,
  `expiry_date` datetime NOT NULL,
  PRIMARY KEY (`option_id`),
  UNIQUE KEY `option_id_UNIQUE` (`option_id`),
  KEY `product_id_idx` (`product_id`),
  KEY `FK_products_options` (`vertical_optionid`),
  CONSTRAINT `FK_products_options` FOREIGN KEY (`vertical_optionid`) REFERENCES `vertical_options` (`id`),
  CONSTRAINT `product_id` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `products_options` */

insert  into `products_options`(`option_id`,`product_id`,`vertical_optionid`,`option`,`option_value`,`expiry_date`) values (1,5,4,'Color','Red','2013-10-25 10:53:15');

/*Table structure for table `products_types` */

DROP TABLE IF EXISTS `products_types`;

CREATE TABLE `products_types` (
  `product_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_type` varchar(55) NOT NULL,
  `description` tinytext,
  `url_slug` varchar(50) NOT NULL,
  PRIMARY KEY (`product_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `products_types` */

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `fname` varchar(45) NOT NULL,
  `lname` varchar(45) NOT NULL,
  `password` varchar(32) NOT NULL,
  `create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `verified` tinyint(1) NOT NULL DEFAULT '0',
  `user_level_id` int(11) NOT NULL DEFAULT '3',
  PRIMARY KEY (`userid`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  KEY `user_level_id_idx` (`user_level_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `user` */

insert  into `user`(`userid`,`email`,`fname`,`lname`,`password`,`create_time`,`verified`,`user_level_id`) values (1,'pinkyhk@novafabrik.com','pinky','liwanagan','5f4dcc3b5aa765d61d8327deb882cf99','2013-10-24 12:21:14',1,3),(2,'raphaelhk@novafabrik.com','raphael','torres','5f4dcc3b5aa765d61d8327deb882cf99','2013-10-24 12:22:16',1,3);

/*Table structure for table `user_levels` */

DROP TABLE IF EXISTS `user_levels`;

CREATE TABLE `user_levels` (
  `user_level_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_level` varchar(45) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`user_level_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `user_levels` */

/*Table structure for table `vertical_options` */

DROP TABLE IF EXISTS `vertical_options`;

CREATE TABLE `vertical_options` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `option_key` varchar(255) NOT NULL,
  `option_description` text,
  `option_autoload` tinyint(4) NOT NULL DEFAULT '1',
  `product_type_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_vertical_options` (`product_type_id`),
  CONSTRAINT `FK_vertical_options` FOREIGN KEY (`product_type_id`) REFERENCES `products_types` (`product_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `vertical_options` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
