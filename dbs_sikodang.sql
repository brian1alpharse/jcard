/*
SQLyog Ultimate v12.4.3 (64 bit)
MySQL - 10.1.38-MariaDB : Database - db_sikodang
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_sikodang` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_sikodang`;

/*Table structure for table `data_pelanggan` */

DROP TABLE IF EXISTS `data_pelanggan`;

CREATE TABLE `data_pelanggan` (
  `id_plg` char(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gambar_brg` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_plg`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `data_pelanggan` */

insert  into `data_pelanggan`(`id_plg`,`username`,`email`,`gambar_brg`) values 
('12AR','Muji','Muji@gmail.com',NULL);

/*Table structure for table `gambar` */

DROP TABLE IF EXISTS `gambar`;

CREATE TABLE `gambar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `deskripsi` varchar(100) NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `ukuran_file` double NOT NULL,
  `tipe_file` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `gambar` */

/*Table structure for table `tbl_barangkeluar` */

DROP TABLE IF EXISTS `tbl_barangkeluar`;

CREATE TABLE `tbl_barangkeluar` (
  `kode_brg` char(10) NOT NULL,
  `nama_brg` varchar(50) NOT NULL,
  `stok_brg` int(11) NOT NULL,
  `tanggal_keluar` datetime NOT NULL,
  `gambar_brg` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`kode_brg`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_barangkeluar` */

insert  into `tbl_barangkeluar`(`kode_brg`,`nama_brg`,`stok_brg`,`tanggal_keluar`,`gambar_brg`) values 
('122','undangan emas',2,'2022-06-28 00:00:00','undangan1.png');

/*Table structure for table `tbl_barangmasuk` */

DROP TABLE IF EXISTS `tbl_barangmasuk`;

CREATE TABLE `tbl_barangmasuk` (
  `kode_brg` char(10) NOT NULL,
  `nama_brg` varchar(50) NOT NULL,
  `stok_brg` int(11) NOT NULL,
  `tanggal_msk` datetime NOT NULL,
  `gambar_brg` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`kode_brg`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_barangmasuk` */

insert  into `tbl_barangmasuk`(`kode_brg`,`nama_brg`,`stok_brg`,`tanggal_msk`,`gambar_brg`) values 
('1234','undangan hijau',22,'2022-06-24 19:54:08','undangan1.png');

/*Table structure for table `tbl_exspired` */

DROP TABLE IF EXISTS `tbl_exspired`;

CREATE TABLE `tbl_exspired` (
  `kode_brg` char(10) NOT NULL,
  `nama_brg` varchar(50) NOT NULL,
  `stok_brg` int(11) NOT NULL,
  `tanggal_msk` datetime NOT NULL,
  `tanggal_keluar` datetime NOT NULL,
  `gambar_brg` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`kode_brg`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_exspired` */

insert  into `tbl_exspired`(`kode_brg`,`nama_brg`,`stok_brg`,`tanggal_msk`,`tanggal_keluar`,`gambar_brg`) values 
('1234','undangan emas',20,'2022-07-14 10:05:54','2022-07-21 10:05:59','undangan1.png');

/*Table structure for table `tbl_kertas` */

DROP TABLE IF EXISTS `tbl_kertas`;

CREATE TABLE `tbl_kertas` (
  `id_krt` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kertas` varchar(50) NOT NULL,
  `deskripsi` text,
  `stok` int(11) DEFAULT NULL,
  `gambar` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_krt`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_kertas` */

insert  into `tbl_kertas`(`id_krt`,`nama_kertas`,`deskripsi`,`stok`,`gambar`) values 
(1,'Flamboyan','<p>Gambar belum memiliki deskripsi</p>',11,'6.jpg'),
(2,'Linen','<p>Gambar tidak jelas</p>',32,'2.jpg');

/*Table structure for table `tbl_supply` */

DROP TABLE IF EXISTS `tbl_supply`;

CREATE TABLE `tbl_supply` (
  `kode_brg` char(10) NOT NULL,
  `nama_brg` varchar(45) NOT NULL,
  `loka_brg` varchar(45) NOT NULL,
  `stok_brg` int(11) NOT NULL,
  `tanggal_msk` datetime DEFAULT NULL,
  `tanggal_keluar` datetime DEFAULT NULL,
  `foto_brg` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`kode_brg`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_supply` */

insert  into `tbl_supply`(`kode_brg`,`nama_brg`,`loka_brg`,`stok_brg`,`tanggal_msk`,`tanggal_keluar`,`foto_brg`) values 
('1222','gak ada','Gudang C',11,'2022-08-18 00:00:00','2022-08-31 00:00:00',NULL),
('1234','undangan emas','Gudang A',875,'2022-07-29 00:00:00','2022-08-06 00:00:00','emas.jpg'),
('12AR','undangan ungu','Gudang A',24,'2022-07-22 00:00:00','2022-08-06 00:00:00','ungu.jpg'),
('12MER','undangan merah','Gudang B',25,'2022-07-29 00:00:00','2022-08-06 00:00:00','merah.jpg'),
('14art','undangan contoh','Gudang C',67,'2022-05-03 14:00:25','2022-08-31 14:00:42','hijau.jpg'),
('16GRE','Undangan Green','Gudang C',300,'2022-02-01 13:45:05','2022-08-22 13:45:12','sd4.jpg'),
('16MRO','Undangan Maroon','Gudang A',40,'2022-01-28 13:24:40','2022-08-31 13:24:42','undanganmaroon.jpg');

/*Table structure for table `tbl_transaksi` */

DROP TABLE IF EXISTS `tbl_transaksi`;

CREATE TABLE `tbl_transaksi` (
  `id_plg` char(10) NOT NULL,
  `nama_plg` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` char(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama_brg` varchar(50) NOT NULL,
  `jumlah_brg` int(11) NOT NULL,
  `gambar_brg` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_plg`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_transaksi` */

insert  into `tbl_transaksi`(`id_plg`,`nama_plg`,`alamat`,`no_hp`,`email`,`nama_brg`,`jumlah_brg`,`gambar_brg`) values 
('12MRN','Muhammad Rizky','Bilabong','0895325543883','muhamadrizky21@gmail.com','undangan emas',1000,NULL);

/*Table structure for table `tbl_user` */

DROP TABLE IF EXISTS `tbl_user`;

CREATE TABLE `tbl_user` (
  `uname` varchar(12) NOT NULL,
  `upass` char(40) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `hakakses` varchar(40) NOT NULL,
  PRIMARY KEY (`uname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_user` */

insert  into `tbl_user`(`uname`,`upass`,`nama`,`email`,`foto`,`hakakses`) values 
('admin','21232f297a57a5a743894a0e4a801fc3','ADMIN','-',NULL,'admin'),
('user','25d55ad283aa400af464c76d713c07ad','USER','+6282246324321',NULL,'user');

/*Table structure for table `fifo` */

DROP TABLE IF EXISTS `fifo`;

/*!50001 DROP VIEW IF EXISTS `fifo` */;
/*!50001 DROP TABLE IF EXISTS `fifo` */;

/*!50001 CREATE TABLE  `fifo`(
 `kode_brg` char(10) ,
 `nama_brg` varchar(45) ,
 `loka_brg` varchar(45) ,
 `stok_brg` int(11) ,
 `tanggal_msk` datetime ,
 `tanggal_keluar` datetime ,
 `foto_brg` varchar(50) 
)*/;

/*Table structure for table `jumlahsupply` */

DROP TABLE IF EXISTS `jumlahsupply`;

/*!50001 DROP VIEW IF EXISTS `jumlahsupply` */;
/*!50001 DROP TABLE IF EXISTS `jumlahsupply` */;

/*!50001 CREATE TABLE  `jumlahsupply`(
 `dat_tsp` decimal(32,0) ,
 `datagt` bigint(21) ,
 `datkl` decimal(32,0) ,
 `lapr` bigint(21) 
)*/;

/*View structure for view fifo */

/*!50001 DROP TABLE IF EXISTS `fifo` */;
/*!50001 DROP VIEW IF EXISTS `fifo` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `fifo` AS (select `tbl_supply`.`kode_brg` AS `kode_brg`,`tbl_supply`.`nama_brg` AS `nama_brg`,`tbl_supply`.`loka_brg` AS `loka_brg`,`tbl_supply`.`stok_brg` AS `stok_brg`,`tbl_supply`.`tanggal_msk` AS `tanggal_msk`,`tbl_supply`.`tanggal_keluar` AS `tanggal_keluar`,`tbl_supply`.`foto_brg` AS `foto_brg` from `tbl_supply` order by `tbl_supply`.`tanggal_msk`) */;

/*View structure for view jumlahsupply */

/*!50001 DROP TABLE IF EXISTS `jumlahsupply` */;
/*!50001 DROP VIEW IF EXISTS `jumlahsupply` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `jumlahsupply` AS (select sum(`tbl_supply`.`stok_brg`) AS `dat_tsp`,(select count(0) from `data_pelanggan`) AS `datagt`,(select sum(`tbl_supply`.`stok_brg`) from `tbl_supply`) AS `datkl`,(select count(0) from `tbl_transaksi`) AS `lapr` from `tbl_supply`) */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
