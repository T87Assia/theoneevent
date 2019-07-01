# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.6.35)
# Database: weddingorganizer
# Generation Time: 2017-10-04 10:46:06 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table dekorasi
# ------------------------------------------------------------

DROP TABLE IF EXISTS `decoration`;

CREATE TABLE `decoration` (
  `dekorasi_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_dekorasi` varchar(15) NOT NULL,
  `deskripsi` TEXT NOT NULL,
  `harga_dekorasi` decimal(11,0) NOT NULL,
  `foto` varchar(255) NOT NULL,
  PRIMARY KEY (`dekorasi_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `decoration` (`dekorasi_id`, `nama_dekorasi`, `deskripsi`, `harga_dekorasi`, `foto`) VALUES
(1, '1er pack', '<ul><li>Estrade des mariés avec décorations</li><li>Eclairage à l’intérieur et l’extérieur du lieux</li><li>Table d’honneur spéciale pour les mariés</li><li>DJ + Orchestre</li><li>Issawa + dakka marrakchia</li><li><p>Neggafa :</p><ul><li>5 Tenus avec accessoires</li><li>Ammaria + Mida</li><li>Robe Marié et bouquet de fleur</li></ul></li></ul>', '23000', 'Table_01.jpg'),
(2, '2éme pack', '<ul><li>Estrade des mariés avec décorations </li><li>Eclairage à l’intérieur</li><li>Table d’honneur spéciale pour les mariés</li><li>DJ + Orchestre</li><li>Issawa ou dakka marrakchia</li><li><p>Neggafa :</p><ul><li>3 Tenus avec accessoires </li><li>Ammaria + Mida</li><li>Robe Marié et bouquet de fleur</li></ul></li></ul>', '17000', 'Table_02.jpg'),
(3, '3éme pack', '<li>Estrade des mariés avec décorations</li><li>Eclairage à l’intérieur</li><li>DJ</li><li>Issawa ou dakka marrakchia</li><li><p>Neggafa :</p><ul><li>3 Tenus avec accessoires</li><li>Ammaria</li><li>Robe Marié et bouquet de fleur</li></ul></li>', '11000', 'Table_03.jpg');


# Dump of table dokumentasi
# ------------------------------------------------------------

DROP TABLE IF EXISTS `dokumentasi`;

CREATE TABLE `dokumentasi` (
  `dokumentasi_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_dokumentasi` varchar(255) NOT NULL,
  `deskripsi` TEXT NOT NULL,
  `harga_dokumentasi` decimal(11,0) NOT NULL,
  PRIMARY KEY (`dokumentasi_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table gedung
# ------------------------------------------------------------

DROP TABLE IF EXISTS `gedung`;

CREATE TABLE `gedung` (
  `gedung_id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `nama_gedung` varchar(35) NOT NULL,
  `deskripsi` TEXT NOT NULL,
  `harga_gedung` decimal(11,0) NOT NULL,
  `foto` varchar(255) NOT NULL,
  KEY `gedung_id` (`gedung_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `gedung` (`gedung_id`, `nama_gedung`, `deskripsi`, `harga_gedung`, `foto`) VALUES
(1, 'Pavillon des rêves', '<p>Salle moderne, très bien équipée et très bien agencée. Tout y est pensé pour que la fête se déroule dans de très bonnes conditions.</p>', '30000', 'Pavillon_de_reve.jpg'),
(2, 'Riad El Asmar', '<p>Grande salle sympa en face de la maison Maserati.</p>', '20000', 'Riad_El_Asmar.jpg'),
(3, 'Ryad AL HAMRAA', '<p>Le meilleur endroit avec tout le sens que vous pouvez effectuer est un mariage.</p>', '25000', 'Ryad_AL_HAMRAA.jpg');


# Dump of table katering
# ------------------------------------------------------------

DROP TABLE IF EXISTS `katering`;

CREATE TABLE `katering` (
  `katering_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_katering` varchar(25) NOT NULL,
  `deskripsi` TEXT NOT NULL,
  `jumlah` decimal(5,0) NOT NULL,
  `harga_katering` decimal(11,0) NOT NULL,
  PRIMARY KEY (`katering_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `katering` (`katering_id`, `nama_katering`, `deskripsi`, `jumlah`, `harga_katering`) VALUES
(1, '150 Invités', '<ul><li>Accueil : Dattes et laits</li><li>Amuses gueule</li><li>Jus de fruit frais variés</li><li>Gâteau de soirée + marocains d’amande + prestige + pâte à choux</li><li>Thé et café noir</li><li>Boisson : eau minérale, eau gazeuse, limonade</li><li>Salade chef</li><li>Grande pastilla fruits de mer ou poulet</li><li>Demi d"agneau méchoui avec légumes sautés</li><li>Corbeille de fruits de la saison + glace</li><li>Pièce montée</li></ul>', '', '48000'),
(2, '120  Invités', '<ul><li>Accueil : Dattes et laits</li><li>Amuses gueule</li><li>Jus de fruit frais variés</li><li>Gâteau de soirée + marocains + prestige + pâte à choux</li><li>Thé et café noir</li><li>Boisson : eau minérale, eau gazeuse, limonade</li><li>Grande pastilla fruits de mer ou poulet</li><li>Demi d"agneau méchoui avec légumes sautés</li><li>Corbeille de fruits de la saison + glace</li><li>Pièce montée</li></ul>', '', '36000'),
(3, '70 Invités', '<ul><li>Accueil : Dattes et laits</li><li>Amuses gueule</li><li>Jus de fruit frais variés</li><li>Gâteau de soirée + marocains + prestige</li><li>Thé et café noir</li><li>Boisson : eau minérale, eau gazeuse, limonade</li><li>Salade chef</li><li>Grande pastilla poulet</li><li>Plat de viande avec fruit secs</li><li>Corbeille de fruits de la saison</li></ul>', '', '196000'),
(4, '40 Invités', '<ul><li>Accueil : Dattes et laits</li><li>Jus de fruit frais variés</li><li>Gâteau de soirée marocains</li><li>Thé</li><li>Boisson : eau minérale, eau gazeuse, limonade</li><li>Grande pastilla fruits de mer ou poulet</li><li>Poulet au citron ou viandes aux abricots</li><li>Corbeille de fruits de la saison + glace</li></ul>', '', '10000');


# Dump of table konfirmasi
# ------------------------------------------------------------

DROP TABLE IF EXISTS `konfirmasi`;

CREATE TABLE `konfirmasi` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `pelanggan_id` int(11) DEFAULT NULL,
  `pemesanan_id` int(11) DEFAULT NULL,
  `no_rek` varchar(25) DEFAULT NULL,
  `nama_bank` varchar(25) DEFAULT NULL,
  `pemilik` varchar(25) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `version` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table pelanggan
# ------------------------------------------------------------

DROP TABLE IF EXISTS `pelanggan`;

CREATE TABLE `pelanggan` (
  `pelanggan_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`pelanggan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `pelanggan` (`pelanggan_id`, `nama`, `no_telp`, `alamat`, `email`, `password`) VALUES
(1, 'Aziz Benani', '0612345678', 'Casa', 'user1@local', '5f4dcc3b5aa765d61d8327deb882cf99'),
(2, 'Yassine Kharaz', '0612345678', 'Casa', 'user2@local', '5f4dcc3b5aa765d61d8327deb882cf99'),
(3, 'Fouad ouahbi', '0612345678', 'Casa', 'user3@local', '5f4dcc3b5aa765d61d8327deb882cf99'),
(4, 'Nouha Samadi', '0612345678', 'Casa', 'user4@local', '5f4dcc3b5aa765d61d8327deb882cf99'),
(5, 'Soukaina achouba', '0612345678', 'Casa', 'user5@local', '5f4dcc3b5aa765d61d8327deb882cf99'),
(6, 'Hanane Yousfi', '0612345678', 'Casa', 'user6@local', '5f4dcc3b5aa765d61d8327deb882cf99'),
(7, 'El Kharraz Hamza', '0612345678', 'Casa', 'user7@local', '5f4dcc3b5aa765d61d8327deb882cf99'),
(8, 'Ahmed el attaoui', '0612345678', 'Casa', 'user8@local', '5f4dcc3b5aa765d61d8327deb882cf99'),
(9, 'Intissar Fares', '0612345678', 'Casa', 'user9@local', '5f4dcc3b5aa765d61d8327deb882cf99');

# Dump of table pemesanan
# ------------------------------------------------------------

DROP TABLE IF EXISTS `pemesanan`;

CREATE TABLE `pemesanan` (
  `id_pemesanan` varchar(15) NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `tgl_acara` varchar(10) NOT NULL,
  `status` varchar(15) NOT NULL,
  PRIMARY KEY (`id_pemesanan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table pemesanan_dekorasi
# ------------------------------------------------------------

DROP TABLE IF EXISTS `pemesanan_dekorasi`;

CREATE TABLE `pemesanan_dekorasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pemesanan_id` varchar(15) NOT NULL,
  `dekorasi_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table pemesanan_dokumentasi
# ------------------------------------------------------------

DROP TABLE IF EXISTS `pemesanan_dokumentasi`;

CREATE TABLE `pemesanan_dokumentasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pemesanan_id` varchar(15) NOT NULL,
  `dokumentasi_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table pemesanan_gedung
# ------------------------------------------------------------

DROP TABLE IF EXISTS `pemesanan_gedung`;

CREATE TABLE `pemesanan_gedung` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pemesanan_id` varchar(15) NOT NULL,
  `gedung_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table pemesanan_katering
# ------------------------------------------------------------

DROP TABLE IF EXISTS `pemesanan_katering`;

CREATE TABLE `pemesanan_katering` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pemesanan_id` varchar(15) NOT NULL,
  `katering_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table pemesanan_Mis_en_beaute
# ------------------------------------------------------------

DROP TABLE IF EXISTS `pemesanan_Mis_en_beaute`;

CREATE TABLE `pemesanan_Mis_en_beaute` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pemesanan_id` varchar(15) NOT NULL,
  `Mis_en_beaute_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table Mis_en_beaute
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Mis_en_beaute`;

CREATE TABLE `Mis_en_beaute` (
  `Mis_en_beaute_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_Mis_en_beaute` varchar(50) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `deskripsi` TEXT NOT NULL,
  `harga_Mis_en_beaute` decimal(11,0) NOT NULL,
  PRIMARY KEY (`Mis_en_beaute_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `Mis_en_beaute` (`Mis_en_beaute_id`, `nama_Mis_en_beaute`, `gambar`, `deskripsi`, `harga_Mis_en_beaute`) VALUES
(1, 'Royale', 'Royale.jpg', '<ul><li>Massage relaxant</li><li>Epilation visage</li><li>Soin de visage</li><li>Maquillage</li><li>Coloration + soin Capillaire</li><li>Coiffure</li><li>Soin des Mains</li><li>Soin des Pieds</li><li>Vernis permanent</li></ul>', '2500'),
(2, 'Princesse', 'Princesse.jpg', '<ul><li>Soin de visage</li><li>Maquillage</li><li>Coloration + soin Capillaire</li><li>Coiffure</li><li>Soin des Mains</li><li>Soin des Pieds</li><li>Vernis permanent</li></ul>', '1800'),
(3, 'Traditionnelle', 'Traditionnelle.jpg', '<ul><li>Maquillage</li><li>Coloration + soin Capillaire</li><li>Coiffure</li><li>Manicure</li><li>Pédicure</li><li>Vernis permanent</li></ul>', '1000');

# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `user_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(35) NOT NULL,
  `username` varchar(35) NOT NULL,
  `no_telp` varchar(12) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`user_id`, `name`, `username`, `no_telp`, `password`) VALUES
(1, 'admin', 'admin', '0612345678', '21232f297a57a5a743894a0e4a801fc3');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
