# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.6.35)
# Database: theoneevent
# Generation Time: 2017-10-04 10:46:06 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `version` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


# Dump of table decoration
# ------------------------------------------------------------

DROP TABLE IF EXISTS `decoration`;

CREATE TABLE `decoration` (
  `decoration_id` int(11) NOT NULL AUTO_INCREMENT,
  `decoration_nom` varchar(15) NOT NULL,
  `description` TEXT NOT NULL,
  `decoration_prix` decimal(11,0) NOT NULL,
  `photo` varchar(255) NOT NULL,
  PRIMARY KEY (`decoration_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `decoration` (`decoration_id`, `decoration_nom`, `description`, `decoration_prix`, `photo`) VALUES
(1, '1er pack', '<ul><li>Estrade des mariés avec décorations</li><li>Eclairage à l’intérieur et l’extérieur du lieux</li><li>Table d’honneur spéciale pour les mariés</li><li>DJ + Orchestre</li><li>Issawa + dakka marrakchia</li><li><p>Neggafa :</p><ul><li>5 Tenus avec accessoires</li><li>Ammaria + Mida</li><li>Robe Marié et bouquet de fleur</li></ul></li></ul>', '23000', 'Table_01.jpg'),
(2, '2éme pack', '<ul><li>Estrade des mariés avec décorations </li><li>Eclairage à l’intérieur</li><li>Table d’honneur spéciale pour les mariés</li><li>DJ + Orchestre</li><li>Issawa ou dakka marrakchia</li><li><p>Neggafa :</p><ul><li>3 Tenus avec accessoires </li><li>Ammaria + Mida</li><li>Robe Marié et bouquet de fleur</li></ul></li></ul>', '17000', 'Table_02.jpg'),
(3, '3éme pack', '<li>Estrade des mariés avec décorations</li><li>Eclairage à l’intérieur</li><li>DJ</li><li>Issawa ou dakka marrakchia</li><li><p>Neggafa :</p><ul><li>3 Tenus avec accessoires</li><li>Ammaria</li><li>Robe Marié et bouquet de fleur</li></ul></li>', '11000', 'Table_03.jpg');


# Dump of table dragee
# ------------------------------------------------------------

DROP TABLE IF EXISTS `dragee`;

CREATE TABLE `dragee` (
  `dragee_id` int(11) NOT NULL AUTO_INCREMENT,
  `dragee_nom` varchar(255) NOT NULL,
  `description` TEXT NOT NULL,
  `dragee_prix` decimal(11,0) NOT NULL,
  `photo` varchar(255) NOT NULL,
  PRIMARY KEY (`dragee_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `dragee` (`dragee_id`, `dragee_nom`, `description`, `dragee_prix`, `photo`) VALUES
(1, 'Marguerite', 'Les Dragées Marguerite sont des amandes classiques beaucoup plus bombées.', '100', 'Marguerite.jpg'),
(2, 'Chocolat', 'Les Dragées Chocolat sont excellentes en raison de leur taux élevé en cacao.', '130', 'Chocolat.jpg'),
(3, 'Belle de nuit', 'Les Dragées Marguerite sont croquantes et enrobées de sucre.', '180', 'Belle_de_Nuit.jpg');


# Dump of table salle
# ------------------------------------------------------------

DROP TABLE IF EXISTS `salle`;

CREATE TABLE `salle` (
  `salle_id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `salle_nom` varchar(35) NOT NULL,
  `description` TEXT NOT NULL,
  `salle_prix` decimal(11,0) NOT NULL,
  `photo` varchar(255) NOT NULL,
  KEY `salle_id` (`salle_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `salle` (`salle_id`, `salle_nom`, `description`, `salle_prix`, `photo`) VALUES
(1, 'Pavillon des rêves', '<p>Salle moderne, très bien équipée et très bien agencée. Tout y est pensé pour que la fête se déroule dans de très bonnes conditions.</p>', '30000', 'Pavillon_de_reve.jpg'),
(2, 'Riad El Asmar', '<p>Grande salle sympa en face de la maison Maserati.</p>', '20000', 'Riad_El_Asmar.jpg'),
(3, 'Ryad AL HAMRAA', '<p>Le meilleur endroit avec tout le sens que vous pouvez effectuer est un mariage.</p>', '25000', 'Ryad_AL_HAMRAA.jpg');


# Dump of table restauration
# ------------------------------------------------------------

DROP TABLE IF EXISTS `restauration`;

CREATE TABLE `restauration` (
  `restauration_id` int(11) NOT NULL AUTO_INCREMENT,
  `restauration_nom` varchar(25) NOT NULL,
  `description` TEXT NOT NULL,
  `restauration_prix` decimal(11,0) NOT NULL,
  PRIMARY KEY (`restauration_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `restauration` (`restauration_id`, `restauration_nom`, `description`, `restauration_prix`) VALUES
(1, '150 Invités', '<ul><li>Accueil : Dattes et laits</li><li>Amuses gueule</li><li>Jus de fruit frais variés</li><li>Gâteau de soirée + marocains d’amande + prestige + pâte à choux</li><li>Thé et café noir</li><li>Boisson : eau minérale, eau gazeuse, limonade</li><li>Salade chef</li><li>Grande pastilla fruits de mer ou poulet</li><li>Demi d"agneau méchoui avec légumes sautés</li><li>Corbeille de fruits de la saison + glace</li><li>Pièce montée</li></ul>', '48000'),
(2, '120  Invités', '<ul><li>Accueil : Dattes et laits</li><li>Amuses gueule</li><li>Jus de fruit frais variés</li><li>Gâteau de soirée + marocains + prestige + pâte à choux</li><li>Thé et café noir</li><li>Boisson : eau minérale, eau gazeuse, limonade</li><li>Grande pastilla fruits de mer ou poulet</li><li>Demi d"agneau méchoui avec légumes sautés</li><li>Corbeille de fruits de la saison + glace</li><li>Pièce montée</li></ul>', '36000'),
(3, '70 Invités', '<ul><li>Accueil : Dattes et laits</li><li>Amuses gueule</li><li>Jus de fruit frais variés</li><li>Gâteau de soirée + marocains + prestige</li><li>Thé et café noir</li><li>Boisson : eau minérale, eau gazeuse, limonade</li><li>Salade chef</li><li>Grande pastilla poulet</li><li>Plat de viande avec fruit secs</li><li>Corbeille de fruits de la saison</li></ul>', '196000'),
(4, '40 Invités', '<ul><li>Accueil : Dattes et laits</li><li>Jus de fruit frais variés</li><li>Gâteau de soirée marocains</li><li>Thé</li><li>Boisson : eau minérale, eau gazeuse, limonade</li><li>Grande pastilla fruits de mer ou poulet</li><li>Poulet au citron ou viandes aux abricots</li><li>Corbeille de fruits de la saison + glace</li></ul>', '10000');


# Dump of table confirmation
# ------------------------------------------------------------

DROP TABLE IF EXISTS `confirmation`;

CREATE TABLE `confirmation` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `client_id` int(11) DEFAULT NULL,
  `reservation_id` int(11) DEFAULT NULL,
  `n_compte` varchar(25) DEFAULT NULL,
  `nom_banque` varchar(25) DEFAULT NULL,
  `proprietaire` varchar(25) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `confirmation` (`id`, `client_id`, `reservation_id`, `n_compte`, `nom_banque`, `proprietaire`, `photo`) VALUES
(1, 1, 201907121, '1234567890', 'TIPS€PA', 'LE CREANCIER', 'Preuve.jpg');


# Dump of table client
# ------------------------------------------------------------

DROP TABLE IF EXISTS `client`;

CREATE TABLE `client` (
  `client_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `tel` varchar(12) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`client_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `client` (`client_id`, `nama`, `tel`, `adresse`, `email`, `password`) VALUES
(1, 'Aziz Benani', '0612345678', 'Casa', 'user1@local', '5f4dcc3b5aa765d61d8327deb882cf99'),
(2, 'Yassine Kharaz', '0612345678', 'Casa', 'user2@local', '5f4dcc3b5aa765d61d8327deb882cf99'),
(3, 'Fouad ouahbi', '0612345678', 'Casa', 'user3@local', '5f4dcc3b5aa765d61d8327deb882cf99'),
(4, 'Nouha Samadi', '0612345678', 'Casa', 'user4@local', '5f4dcc3b5aa765d61d8327deb882cf99'),
(5, 'Soukaina achouba', '0612345678', 'Casa', 'user5@local', '5f4dcc3b5aa765d61d8327deb882cf99'),
(6, 'Hanane Yousfi', '0612345678', 'Casa', 'user6@local', '5f4dcc3b5aa765d61d8327deb882cf99'),
(7, 'El Kharraz Hamza', '0612345678', 'Casa', 'user7@local', '5f4dcc3b5aa765d61d8327deb882cf99'),
(8, 'Ahmed el attaoui', '0612345678', 'Casa', 'user8@local', '5f4dcc3b5aa765d61d8327deb882cf99'),
(9, 'Intissar Fares', '0612345678', 'Casa', 'user9@local', '5f4dcc3b5aa765d61d8327deb882cf99');


# Dump of table reservation
# ------------------------------------------------------------

DROP TABLE IF EXISTS `reservation`;

CREATE TABLE `reservation` (
  `id_reservation` varchar(15) NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `jour` varchar(10) NOT NULL,
  `statut` varchar(15) NOT NULL,
  PRIMARY KEY (`id_reservation`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `reservation` (`id_reservation`, `user_id`, `jour`, `statut`) VALUES
('201907121', 1, '2019-07-12', 'active'),
('201907131', 7, '2019-07-13', 'pending'),
('201907141', 9, '2019-07-14', 'pending');


# Dump of table reservation_decoration
# ------------------------------------------------------------

DROP TABLE IF EXISTS `reservation_decoration`;

CREATE TABLE `reservation_decoration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reservation_id` varchar(15) NOT NULL,
  `decoration_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `reservation_decoration` (`id`, `reservation_id`, `decoration_id`) VALUES
(1, '201907121', 1);


# Dump of table reservation_dragee
# ------------------------------------------------------------

DROP TABLE IF EXISTS `reservation_dragee`;

CREATE TABLE `reservation_dragee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reservation_id` varchar(15) NOT NULL,
  `dragee_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


# Dump of table reservation_salle
# ------------------------------------------------------------

DROP TABLE IF EXISTS `reservation_salle`;

CREATE TABLE `reservation_salle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reservation_id` varchar(15) NOT NULL,
  `salle_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `reservation_salle` (`id`, `reservation_id`, `salle_id`) VALUES
(1, '201907121', 1);


# Dump of table reservation_restauration
# ------------------------------------------------------------

DROP TABLE IF EXISTS `reservation_restauration`;

CREATE TABLE `reservation_restauration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reservation_id` varchar(15) NOT NULL,
  `restauration_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `reservation_restauration` (`id`, `reservation_id`, `restauration_id`) VALUES
(1, '201907121', 1);


# Dump of table reservation_beaute
# ------------------------------------------------------------

DROP TABLE IF EXISTS `reservation_beaute`;

CREATE TABLE `reservation_beaute` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reservation_id` varchar(15) NOT NULL,
  `beaute_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `reservation_beaute` (`id`, `reservation_id`, `beaute_id`) VALUES
(1, '201907121', 1);


# Dump of table beaute
# ------------------------------------------------------------

DROP TABLE IF EXISTS `beaute`;

CREATE TABLE `beaute` (
  `beaute_id` int(11) NOT NULL AUTO_INCREMENT,
  `beaute_nom` varchar(50) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `description` TEXT NOT NULL,
  `beaute_prix` decimal(11,0) NOT NULL,
  PRIMARY KEY (`beaute_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `beaute` (`beaute_id`, `beaute_nom`, `photo`, `description`, `beaute_prix`) VALUES
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
  `tel` varchar(12) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`user_id`, `name`, `username`, `tel`, `password`) VALUES
(1, 'admin', 'admin', '0612345678', '21232f297a57a5a743894a0e4a801fc3');


/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;


/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
