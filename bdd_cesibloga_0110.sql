-- --------------------------------------------------------
-- Hôte :                        127.0.0.1
-- Version du serveur:           5.7.24 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Export de la structure de la base pour cesiblog
CREATE DATABASE IF NOT EXISTS `cesiblog` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `cesiblog`;

-- Export de la structure de la table cesiblog. categories
CREATE TABLE IF NOT EXISTS `categories` (
  `Nom` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`Nom`),
  CONSTRAINT `FK_categories_posts` FOREIGN KEY (`Nom`) REFERENCES `posts` (`Categorie`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Les données exportées n'étaient pas sélectionnées.
-- Export de la structure de la table cesiblog. posts
CREATE TABLE IF NOT EXISTS `posts` (
  `Id` bigint(20) NOT NULL AUTO_INCREMENT,
  `imageRepository` varchar(50) DEFAULT '0',
  `imageFileName` varchar(50) DEFAULT '0',
  `Titre` varchar(50) DEFAULT NULL,
  `Description` text,
  `DateAjout` date DEFAULT NULL,
  `Auteur` varchar(50) DEFAULT NULL,
  `Categorie` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `Categorie` (`Categorie`)
) ENGINE=InnoDB AUTO_INCREMENT=201 DEFAULT CHARSET=utf8;

-- Les données exportées n'étaient pas sélectionnées.
-- Export de la structure de la table cesiblog. utilisateurs
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(50) DEFAULT '0',
  `Prenom` varchar(50) DEFAULT '0',
  `DateInscription` date DEFAULT NULL,
  `ValidationAdmin` varchar(50) DEFAULT '0',
  `Mail` varchar(50) DEFAULT '0',
  `Password` varchar(50) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- Les données exportées n'étaient pas sélectionnées.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
