/*
SQLyog Professional v12.09 (64 bit)
MySQL - 8.0.17 : Database - pijar
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`pijar` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

USE `pijar`;

/*Table structure for table `pembayaran` */

DROP TABLE IF EXISTS `pembayaran`;

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(5) NOT NULL AUTO_INCREMENT,
  `metode_pembayaran` varchar(100) NOT NULL,
  `rincian_pembayaran` text NOT NULL,
  `total_minimum` varchar(50) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `urutan` varchar(5) NOT NULL,
  `aktif` enum('Y','T') NOT NULL,
  PRIMARY KEY (`id_pembayaran`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `pembayaran` */

insert  into `pembayaran`(`id_pembayaran`,`metode_pembayaran`,`rincian_pembayaran`,`total_minimum`,`gambar`,`urutan`,`aktif`) values (12,'Engineer No Picture','tolong lagi','Kontrak','','1','Y'),(13,'Developer','<div class=\"sx2jih0 zcydq86q zcydq86v zcydq86w\">\r\n<div class=\"sx2jih0\" data-automation=\"job-details-job-highlights\">\r\n<div class=\"sx2jih0 _17fduda0 _17fduda2\">\r\n<div class=\"sx2jih0 zcydq866\">\r\n<h4 class=\"sx2jih0 _18qlyvc0 _18qlyvch _1d0g9qk4 _18qlyvcs _18qlyvc1x\">Job Highlights</h4>\r\n</div>\r\n<div class=\"sx2jih0 zcydq866\">\r\n<ul class=\"sx2jih0 sx2jih3 _17fduda0 _17fduda6\">\r\n<li class=\"sx2jih0 zcydq86m\">\r\n<div class=\"sx2jih0 zcydq856\">\r\n<div class=\"sx2jih0 zcydq84u _18qlyvc0 _18qlyvc1x _18qlyvc1 _1d0g9qk4 _18qlyvcb\">\r\n<div class=\"sx2jih0 zcydq856 zcydq8ea zcydq84 _1tawukb2\" aria-hidden=\"true\">\r\n<div class=\"sx2jih0 zcydq85q _1gvxfvi0 _1gvxfvi2\">&nbsp;</div>\r\n</div>\r\n</div>\r\n<div class=\"sx2jih0 zcydq8r zcydq8p zcydq89i\"><span class=\"sx2jih0 zcydq84u _18qlyvc0 _18qlyvc1x _18qlyvc1 _1d0g9qk4 _18qlyvcb\">Attractive salaries for qualified candidates</span></div>\r\n</div>\r\n</li>\r\n<li class=\"sx2jih0 zcydq86m\">\r\n<div class=\"sx2jih0 zcydq856\">\r\n<div class=\"sx2jih0 zcydq84u _18qlyvc0 _18qlyvc1x _18qlyvc1 _1d0g9qk4 _18qlyvcb\">\r\n<div class=\"sx2jih0 zcydq856 zcydq8ea zcydq84 _1tawukb2\" aria-hidden=\"true\">\r\n<div class=\"sx2jih0 zcydq85q _1gvxfvi0 _1gvxfvi2\">&nbsp;</div>\r\n</div>\r\n</div>\r\n<div class=\"sx2jih0 zcydq8r zcydq8p zcydq89i\"><span class=\"sx2jih0 zcydq84u _18qlyvc0 _18qlyvc1x _18qlyvc1 _1d0g9qk4 _18qlyvcb\">Positive &amp; energetic international work culture</span></div>\r\n</div>\r\n</li>\r\n<li class=\"sx2jih0 zcydq86m\">\r\n<div class=\"sx2jih0 zcydq856\">\r\n<div class=\"sx2jih0 zcydq84u _18qlyvc0 _18qlyvc1x _18qlyvc1 _1d0g9qk4 _18qlyvcb\">\r\n<div class=\"sx2jih0 zcydq856 zcydq8ea zcydq84 _1tawukb2\" aria-hidden=\"true\">\r\n<div class=\"sx2jih0 zcydq85q _1gvxfvi0 _1gvxfvi2\">&nbsp;</div>\r\n</div>\r\n</div>\r\n<div class=\"sx2jih0 zcydq8r zcydq8p zcydq89i\"><span class=\"sx2jih0 zcydq84u _18qlyvc0 _18qlyvc1x _18qlyvc1 _1d0g9qk4 _18qlyvcb\">Great opportunities for learning &amp; career advancement</span></div>\r\n</div>\r\n</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"sx2jih0 zcydq86q zcydq86v zcydq86w\">\r\n<div class=\"sx2jih0 _17fduda0 _17fduda2\">\r\n<div class=\"sx2jih0 zcydq866\">\r\n<h4 class=\"sx2jih0 _18qlyvc0 _18qlyvch _1d0g9qk4 _18qlyvcs _18qlyvc1x\">Job Description</h4>\r\n</div>\r\n<div class=\"sx2jih0 zcydq866\">\r\n<div class=\"YCeva_0\" data-automation=\"jobDescription\">\r\n<div class=\"sx2jih0\">\r\n<p>Our company provides advance equity trading systems to majority of the financial broking firms in Singapore &amp; Malaysia. Our clients also involve major international banks in Asia.</p>\r\n<p>We are looking for committed Engineers to work closely with our dynamic software development team in Singapore &amp; Malaysia. The successful candidate will be responsible for working on projects which includes gathering and analyzing business requirements, translating client requests into system design and product enhancements.</p>\r\n<p>We are looking for Software Engineers to join our growing team in Indonesia. This is a work-from-home position. Candidates will need to have stable internet connection while working from home.</p>\r\n<p><strong>Job Requirements:</strong></p>\r\n<ul>\r\n<li>Diploma / Degree in IT or equivalent</li>\r\n<li>At least 2 years development experience&nbsp;is a plus but not necessary</li>\r\n<li>Good working knowledge in C/C++, Java, Javascript, HTML5, JQuery or React JS</li>\r\n<li>Experience in Oracle and/or MySQL database</li>\r\n<li>Knowledge in OOP Concept and MVC designs</li>\r\n<li>Knowledge and experience in UNIX system and multi-tier architecture is a plus</li>\r\n<li>Knowledge in Client-Server architecture is a plus</li>\r\n<li>Experience in banking or securities trading applications is a plus</li>\r\n<li>Excellent problem solving and logical thinking skills</li>\r\n<li>High commitment and ability to work under a fast-paced work environment</li>\r\n<li>Able to work independently as well as contributing member of the team</li>\r\n<li>Able to multi-task as well as be strategic, creative, innovative, dynamic, fast-paced and not afraid to take on challenges</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>','FullTime','','2','Y'),(14,'Senior Accounting','<div class=\"sx2jih0 zcydq866\">\r\n<h4 class=\"sx2jih0 _18qlyvc0 _18qlyvch _1d0g9qk4 _18qlyvcs _18qlyvc1x\">Job Description</h4>\r\n</div>\r\n<div class=\"sx2jih0 zcydq866\">\r\n<div class=\"YCeva_0\" data-automation=\"jobDescription\">\r\n<div class=\"sx2jih0\">Deskripsi Pekerjaan\r\n<p><strong>Tugas dan Tanggung Jawab:</strong></p>\r\n<ul>\r\n<li>Melakukan input transaksi, membuat laporan keuangan harian, bulanan dan tahunan secara bertanggung jawab atas pengelompokan biaya</li>\r\n<li>Memverifikasi dokumen dan mengarsip dokumen dengan baik</li>\r\n<li>Membuat laporan-laporan yang dibutuhkan</li>\r\n<li>Melakukan stock opname</li>\r\n<li>Rekonsiliasi GL</li>\r\n<li>Menyusun dan membuat laporan perpajakan perusahaan secara periodic</li>\r\n<li>Menyusun dan membuat anggaran pengeluaran dan pendapatan perusahaan secara periodic (bulanan dan tahunan)</li>\r\n<li>Menyusun dan membuat surat-surat yang berhubungan dengan perbankan, pajak, atau lainnya dan kemampuan keuangan perusahaan</li>\r\n<li>Memahami peraturan perpajakan dan update tentang peraturan perpajakan yang berlaku</li>\r\n<li>Menyiapkan kebutuhan data untuk department atau pihak lain (seperti bank, pajak, audit)</li>\r\n</ul>\r\n<p><strong>Persyaratan:</strong></p>\r\n<ul>\r\n<li>Pendidikan minimal S1 jurusan Akuntansi/S1 Teknik</li>\r\n<li>Fresh Graduate welcome</li>\r\n<li>Menguasai MS-Office (Word, Excel dan Powerpoint) dan accounting program (ERP)</li>\r\n<li>Bekerja dari hari Senin &ndash; Sabtu (08.00 s/d 17.00)</li>\r\n<li>Bersedia di tempatkan di&nbsp;<strong>Pantai Indah Kapuk,&nbsp;JAKARTA UTARA</strong></li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>','Kontrak','','3','Y');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
