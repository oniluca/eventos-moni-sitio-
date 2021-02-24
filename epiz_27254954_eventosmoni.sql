/*
SQLyog Ultimate v8.61 
MySQL - 5.6.15-log : Database - epiz_27254954_eventosmoni
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`epiz_27254954_eventosmoni` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `epiz_27254954_eventosmoni`;

/*Table structure for table `fotos` */

DROP TABLE IF EXISTS `fotos`;

CREATE TABLE `fotos` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `ruta` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

/*Data for the table `fotos` */

insert  into `fotos`(`id`,`ruta`) values (1,'imagen/fotos/1.jpg'),(2,'imagen/fotos/2.jpg'),(3,'imagen/fotos/3.jpg'),(4,'imagen/fotos/4.jpg'),(5,'imagen/fotos/5.jpg'),(6,'imagen/fotos/6.jpg'),(7,'imagen/fotos/7.jpg'),(8,'imagen/fotos/8.jpg'),(9,'imagen/fotos/9.jpg'),(10,'imagen/fotos/10.jpg'),(11,'imagen/fotos/11.jpg'),(12,'imagen/fotos/12.jpg'),(13,'imagen/fotos/13.jpg'),(14,'imagen/fotos/14.jpg'),(15,'imagen/fotos/15.jpg'),(16,'imagen/fotos/14.jpg');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
