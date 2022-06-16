/*
SQLyog Professional v12.09 (64 bit)
MySQL - 8.0.17 
*********************************************************************
*/
/*!40101 SET NAMES utf8 */;

create table `slide` (
	`id_slide` int (3),
	`nama_slide` varchar (150),
	`link_slide` varchar (150),
	`gambar_slide` varchar (300),
	`tanggal` date ,
	`jam` time ,
	`aktif` char (3)
); 
insert into `slide` (`id_slide`, `nama_slide`, `link_slide`, `gambar_slide`, `tanggal`, `jam`, `aktif`) values('37','Trinusa 2','#','78trinusa-3.PNG','2022-06-16','11:23:43','Y');
insert into `slide` (`id_slide`, `nama_slide`, `link_slide`, `gambar_slide`, `tanggal`, `jam`, `aktif`) values('38','Laba','#','8trinusa-1.PNG','2022-06-16','11:25:27','Y');
insert into `slide` (`id_slide`, `nama_slide`, `link_slide`, `gambar_slide`, `tanggal`, `jam`, `aktif`) values('39','Trinusa 3','#','85trinusa-2.PNG','2022-06-16','11:48:21','Y');
insert into `slide` (`id_slide`, `nama_slide`, `link_slide`, `gambar_slide`, `tanggal`, `jam`, `aktif`) values('40','Trinusa 4','#','45trinusa-4.PNG','2022-06-16','11:48:53','Y');
