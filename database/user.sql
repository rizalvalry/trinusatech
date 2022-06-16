/*
SQLyog Professional v12.09 (64 bit)
MySQL - 8.0.17 
*********************************************************************
*/
/*!40101 SET NAMES utf8 */;

create table `user` (
	`id_user` int (11),
	`nama_lengkap` varchar (120),
	`email` varchar (120),
	`password` varchar (180),
	`perusahaan` varchar (300),
	`alamat` varchar (450),
	`no_telp` varchar (45),
	`nama_web` varchar (300),
	`foto` varchar (300),
	`level` char (15),
	`blokir` char (3),
	`id_session` varchar (300)
); 
insert into `user` (`id_user`, `nama_lengkap`, `email`, `password`, `perusahaan`, `alamat`, `no_telp`, `nama_web`, `foto`, `level`, `blokir`, `id_session`) values('1','Hendri Ramdan','admin','$2y$10$/w/6TDjOvflBY73XAmzlI.V1xWZwcJ7QUUScuBBJOhcOR8kJhrNhe','','','082340124917','','74315117 - Copy.jpg','Admin','T','uais3gal9mf1do53j2t7i04p77');
insert into `user` (`id_user`, `nama_lengkap`, `email`, `password`, `perusahaan`, `alamat`, `no_telp`, `nama_web`, `foto`, `level`, `blokir`, `id_session`) values('2','Hendri Ramdan','hendriramdhan8@gmail.com','$2y$10$ejQegcjaozzN84SnYaENnuizgkJ6SMownQVI17Me.moYngZr8eKj2','','','082340124917','','31tiki.jpg','User','T','$2y$10$ejQegcjaozzN84SnYaENnuizgkJ6SMownQVI17Me.moYngZr8eKj2');
insert into `user` (`id_user`, `nama_lengkap`, `email`, `password`, `perusahaan`, `alamat`, `no_telp`, `nama_web`, `foto`, `level`, `blokir`, `id_session`) values('4','Hendri Ramdan','hendriramdhan88@gmail.com','$2y$10$FhhFgWWFaosnAp.76A8SL.AI5j2Jyki0JC5ctr2/2mBW1EaCPAeD.','PT Hendri Sejahtera','Brembeng Timur','082340124917','karangbayan.info','3720150817_164630.jpg','User','T','m3erhrklqe1se8cmgvsgl27ce2');
insert into `user` (`id_user`, `nama_lengkap`, `email`, `password`, `perusahaan`, `alamat`, `no_telp`, `nama_web`, `foto`, `level`, `blokir`, `id_session`) values('16','rizal direktur','rizal.muh.rzl@gmail.com','$2y$10$6xb31tftJIIJkDGIxRg0wOKJI/aPHs3Tg7D/sPOL6Rj2fdJ5YUUmu','','','085781571742','','28blue-logo.png','Admin','T','hs5fet4eck8bf1b7dpcjmn99c2');
