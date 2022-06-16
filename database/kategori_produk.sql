/*
SQLyog Professional v12.09 (64 bit)
MySQL - 8.0.17 
*********************************************************************
*/
/*!40101 SET NAMES utf8 */;

create table `kategori_produk` (
	`id_kategori` int (5),
	`nama_kategori` varchar (150),
	`kategori_seo` varchar (180),
	`icon` text 
); 
insert into `kategori_produk` (`id_kategori`, `nama_kategori`, `kategori_seo`, `icon`) values('8','Industri Jasa Keuangan','industri-jasa-keuangan','<i class=\"fa-solid fa-money-bill\"></i>');
insert into `kategori_produk` (`id_kategori`, `nama_kategori`, `kategori_seo`, `icon`) values('9','Telekomunikasi','telekomunikasi','<i class=\"fa-solid fa-tower-cell\"></i>');
insert into `kategori_produk` (`id_kategori`, `nama_kategori`, `kategori_seo`, `icon`) values('10','Pemerintah & Sektor Publik','pemerintah--sektor-publik','<i class=\"fa-solid fa-building-ngo\"></i>');
insert into `kategori_produk` (`id_kategori`, `nama_kategori`, `kategori_seo`, `icon`) values('11','Tambang, Minyak & Gas','tambang-minyak--gas','<i class=\"fa-solid fa-land-mine-on\"></i>');
insert into `kategori_produk` (`id_kategori`, `nama_kategori`, `kategori_seo`, `icon`) values('12','Bisnis','bisnis','<i class=\"fa-solid fa-business-time\"></i>');
insert into `kategori_produk` (`id_kategori`, `nama_kategori`, `kategori_seo`, `icon`) values('13','Edukasi','edukasi','<i class=\"fa-solid fa-bus\"></i>');
insert into `kategori_produk` (`id_kategori`, `nama_kategori`, `kategori_seo`, `icon`) values('15','Startup','startup','<i class=\"fas fa-building\"></i>');
insert into `kategori_produk` (`id_kategori`, `nama_kategori`, `kategori_seo`, `icon`) values('16','Kesehatan','kesehatan','<i class=\"fa-solid fa-heart\"></i>');
insert into `kategori_produk` (`id_kategori`, `nama_kategori`, `kategori_seo`, `icon`) values('17','Transportasi','transportasi','<i class=\"fa-solid fa-bus\"></i>');
insert into `kategori_produk` (`id_kategori`, `nama_kategori`, `kategori_seo`, `icon`) values('18','Retail','retail','<i class=\"fa-solid fa-cash-register\"></i>');
insert into `kategori_produk` (`id_kategori`, `nama_kategori`, `kategori_seo`, `icon`) values('19','Hospitality','hospitality','<i class=\"fa-solid fa-hospital\"></i>');
