/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.6.21 : Database - demakkab
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `demak_pak` */

DROP TABLE IF EXISTS `demak_pak`;

CREATE TABLE `demak_pak` (
  `pak_id` int(10) NOT NULL AUTO_INCREMENT,
  `pns_id` int(5) unsigned zerofill NOT NULL,
  `kd_gol` int(2) NOT NULL,
  `kd_jabfung` varchar(5) NOT NULL,
  `pak_bln_1` date DEFAULT NULL,
  `pak_bln_2` date DEFAULT NULL,
  `pak_nuptk` varchar(50) DEFAULT NULL,
  `pak_no_karpeg` varchar(20) NOT NULL,
  `pak_tmt_fungsi` date NOT NULL,
  `pak_tmt_jab` date DEFAULT NULL,
  `pak_tmt_pangkat` date DEFAULT NULL,
  `pak_lama_kerja_thn` int(2) NOT NULL,
  `pak_lama_kerja_bln` int(2) NOT NULL,
  `pak_baru_kerja_thn` int(2) NOT NULL,
  `pak_baru_kerja_bln` int(2) NOT NULL,
  `pak_gelar_lama` int(10) DEFAULT NULL,
  `pak_gelar_baru` int(10) DEFAULT NULL,
  `pak_gelar_jumlah` int(10) DEFAULT NULL,
  `pak_pra_lama` int(10) DEFAULT NULL,
  `pak_pra_baru` int(10) DEFAULT NULL,
  `pak_pra_jumlah` int(10) DEFAULT NULL,
  `pak_tugas_lama` int(10) DEFAULT NULL,
  `pak_tugas_baru` int(10) DEFAULT NULL,
  `pak_tugas_jumlah` int(10) DEFAULT NULL,
  `pak_pengembang_lama` int(10) DEFAULT NULL,
  `pak_pengembang_baru` int(10) DEFAULT NULL,
  `pak_pengembang_jumlah` int(10) DEFAULT NULL,
  `pak_publik_lama` int(10) DEFAULT NULL,
  `pak_publik_baru` int(10) DEFAULT NULL,
  `pak_publik_jumlah` int(10) DEFAULT NULL,
  `pak_karya_lama` int(10) DEFAULT NULL,
  `pak_karya_baru` int(10) DEFAULT NULL,
  `pak_karya_jumlah` int(10) DEFAULT NULL,
  `pak_jumlahutama_lama` int(10) DEFAULT NULL,
  `pak_jumlahutama_baru` int(10) DEFAULT NULL,
  `pak_jumlahutama_total` int(10) DEFAULT NULL,
  `pak_ijazah_lama` int(10) DEFAULT NULL,
  `pak_ijazah_baru` int(10) DEFAULT NULL,
  `pak_ijazah_jumlah` int(10) DEFAULT NULL,
  `pak_dukung_lama` int(10) DEFAULT NULL,
  `pak_dukung_baru` int(10) DEFAULT NULL,
  `pak_dukung_jumlah` int(10) DEFAULT NULL,
  `pak_jumlahpenunjang_lama` int(10) DEFAULT NULL,
  `pak_jumlahpenunjang_baru` int(10) DEFAULT NULL,
  `pak_jumlahpenunjang_total` int(10) DEFAULT NULL,
  `pak_total_lama` int(10) DEFAULT NULL,
  `pak_total_baru` int(10) DEFAULT NULL,
  `pak_total_jumlah` int(10) DEFAULT NULL,
  `pak_date_update` date NOT NULL,
  `pak_time_update` time NOT NULL,
  `user_id` int(7) NOT NULL,
  PRIMARY KEY (`pak_id`),
  KEY `pns_id` (`pns_id`),
  KEY `pak_date_update` (`pak_date_update`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `demak_pak` */

insert  into `demak_pak`(`pak_id`,`pns_id`,`kd_gol`,`kd_jabfung`,`pak_bln_1`,`pak_bln_2`,`pak_nuptk`,`pak_no_karpeg`,`pak_tmt_fungsi`,`pak_tmt_jab`,`pak_tmt_pangkat`,`pak_lama_kerja_thn`,`pak_lama_kerja_bln`,`pak_baru_kerja_thn`,`pak_baru_kerja_bln`,`pak_gelar_lama`,`pak_gelar_baru`,`pak_gelar_jumlah`,`pak_pra_lama`,`pak_pra_baru`,`pak_pra_jumlah`,`pak_tugas_lama`,`pak_tugas_baru`,`pak_tugas_jumlah`,`pak_pengembang_lama`,`pak_pengembang_baru`,`pak_pengembang_jumlah`,`pak_publik_lama`,`pak_publik_baru`,`pak_publik_jumlah`,`pak_karya_lama`,`pak_karya_baru`,`pak_karya_jumlah`,`pak_jumlahutama_lama`,`pak_jumlahutama_baru`,`pak_jumlahutama_total`,`pak_ijazah_lama`,`pak_ijazah_baru`,`pak_ijazah_jumlah`,`pak_dukung_lama`,`pak_dukung_baru`,`pak_dukung_jumlah`,`pak_jumlahpenunjang_lama`,`pak_jumlahpenunjang_baru`,`pak_jumlahpenunjang_total`,`pak_total_lama`,`pak_total_baru`,`pak_total_jumlah`,`pak_date_update`,`pak_time_update`,`user_id`) values (2,03695,31,'00401','2015-05-01','2015-05-09','898348884899','E.893054','2015-05-03','2014-07-01','2015-04-01',10,9,11,2,40000,0,40000,0,0,0,41772,23666,65438,4000,0,4000,0,0,0,0,0,0,85772,23666,109438,0,5000,5000,11150,0,11150,11150,5000,16150,96922,28666,125588,'2015-05-03','14:38:09',1),(3,02600,44,'00402','2015-05-04','2015-05-30','998988989898989','C 0684869','2015-05-09','2015-05-10','2016-05-31',10,5,12,5,3000,0,3000,1000,1000,2000,1000,50000,51000,0,50000,50000,0,30000,30000,0,20000,20000,5000,151000,156000,25000,20000,45000,0,0,0,25000,20000,45000,30000,171000,201000,'2015-05-04','06:39:45',1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
