-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Sam 25 Janvier 2014 à 16:46
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `fff`
--
CREATE DATABASE IF NOT EXISTS `fff` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `fff`;

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `idAdmin` int(11) NOT NULL AUTO_INCREMENT,
  `loginAdmin` varchar(30) NOT NULL,
  `mdpAdmin` varchar(30) NOT NULL,
  `nomAdmin` varchar(30) NOT NULL,
  `prenomAdmin` varchar(30) NOT NULL,
  `grade` int(11) NOT NULL,
  `NumClub` int(11) DEFAULT NULL,
  PRIMARY KEY (`idAdmin`),
  KEY `NumClub` (`NumClub`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`idAdmin`, `loginAdmin`, `mdpAdmin`, `nomAdmin`, `prenomAdmin`, `grade`, `NumClub`) VALUES
(1, 'admin', 'admin', 'Admin1', 'Admin2', 1, NULL),
(2, 'Club1', 'Pass1', 'Toto', 'Tata', 0, 1),
(3, 'Club2', 'pass2', 'Titi', 'Tonton', 0, 2),
(4, 'Club3', 'pass3', 'Tutu', 'Tete', 0, 3);

-- --------------------------------------------------------

--
-- Structure de la table `club`
--

CREATE TABLE IF NOT EXISTS `club` (
  `NumClub` int(11) NOT NULL AUTO_INCREMENT,
  `NomClub` varchar(30) NOT NULL,
  `AdresseClub` varchar(50) NOT NULL,
  `CPClub` int(5) NOT NULL,
  `VilleClub` varchar(30) NOT NULL,
  `TelClub` varchar(30) NOT NULL,
  `MailClub` varchar(30) NOT NULL,
  `imgClub` varchar(50) NOT NULL,
  `imgClubS` varchar(30) NOT NULL,
  PRIMARY KEY (`NumClub`),
  KEY `NumClub` (`NumClub`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Contenu de la table `club`
--

INSERT INTO `club` (`NumClub`, `NomClub`, `AdresseClub`, `CPClub`, `VilleClub`, `TelClub`, `MailClub`, `imgClub`, `imgClubS`) VALUES
(1, 'AS Nancy', '90 boulevard Jean Jaures', 54510, 'Tomblaine', '**.**.**.**.**', '****@****.**', 'images/asnl.png', 'images/asnlS.png'),
(2, 'FC Metz', '3 allée Saint Symphorien', 57000, 'Metz', '**.**.**.**.**', '****@****.**', 'images/fcmetz.png', 'images/fcmetzS.png'),
(3, 'SAS Epinal', ' -', 12345, '-', '-', '-', 'images/epinal.png', 'images/epinalS.png'),
(20, 'TestC', '123', 1234, 'Blibla', '123456789', 'fez@fze.com', 'images/ph.png', 'images/phS.png');

-- --------------------------------------------------------

--
-- Structure de la table `joueur`
--

CREATE TABLE IF NOT EXISTS `joueur` (
  `idJou` int(11) NOT NULL AUTO_INCREMENT,
  `NumJou` int(11) NOT NULL,
  `NomJou` varchar(30) NOT NULL,
  `PrenomJou` varchar(30) NOT NULL,
  `AdresseJou` varchar(50) DEFAULT NULL,
  `CPJou` int(11) DEFAULT NULL,
  `VilleJou` varchar(30) DEFAULT NULL,
  `TelJou` int(11) DEFAULT NULL,
  `MailJou` varchar(30) DEFAULT NULL,
  `Date_NaissJou` date DEFAULT NULL,
  `imgJou` varchar(30) NOT NULL,
  `NumClub` int(11) NOT NULL,
  PRIMARY KEY (`idJou`),
  KEY `NumClub` (`NumClub`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Contenu de la table `joueur`
--

INSERT INTO `joueur` (`idJou`, `NumJou`, `NomJou`, `PrenomJou`, `AdresseJou`, `CPJou`, `VilleJou`, `TelJou`, `MailJou`, `Date_NaissJou`, `imgJou`, `NumClub`) VALUES
(19, 1, 'Toto1', 'Toto', NULL, NULL, NULL, NULL, NULL, NULL, 'images/phJ.png', 1),
(20, 2, 'Toto2', 'Toto', NULL, NULL, NULL, NULL, NULL, NULL, 'images/phJ.png', 1),
(21, 3, 'Toto3', 'Toto', NULL, NULL, NULL, NULL, NULL, NULL, 'images/phJ.png', 1),
(22, 4, 'Toto4', 'Toto', NULL, NULL, NULL, NULL, NULL, NULL, 'images/phJ.png', 1),
(23, 5, 'Toto5', 'Toto', NULL, NULL, NULL, NULL, NULL, NULL, 'images/phJ.png', 1),
(24, 6, 'Toto6', 'Toto', NULL, NULL, NULL, NULL, NULL, NULL, 'images/phJ.png', 1),
(25, 7, 'Toto7', 'Toto', NULL, NULL, NULL, NULL, NULL, NULL, 'images/phJ.png', 1),
(26, 8, 'Toto8', 'Toto', NULL, NULL, NULL, NULL, NULL, NULL, 'images/phJ.png', 1),
(27, 9, 'Toto9', 'Toto', NULL, NULL, NULL, NULL, NULL, NULL, 'images/phJ.png', 1),
(28, 10, 'Toto10', 'Toto', NULL, NULL, NULL, NULL, NULL, NULL, 'images/phJ.png', 1),
(32, 1, 'Tata1', 'Tata', NULL, NULL, NULL, NULL, NULL, NULL, 'images/ph.png', 2),
(33, 2, 'Tata2', 'Tata', NULL, NULL, NULL, NULL, NULL, NULL, 'images/ph.png', 2),
(34, 3, 'Tata3', 'Tata', NULL, NULL, NULL, NULL, NULL, NULL, 'images/ph.png', 2),
(35, 4, 'Tata4', 'Tata', NULL, NULL, NULL, NULL, NULL, NULL, 'images/ph.png', 2),
(36, 5, 'Tata5', 'Tata', NULL, NULL, NULL, NULL, NULL, NULL, 'images/ph.png', 2),
(37, 6, 'Tata6', 'Tata', NULL, NULL, NULL, NULL, NULL, NULL, 'images/ph.png', 2),
(38, 7, 'Tata7', 'Tata', NULL, NULL, NULL, NULL, NULL, NULL, 'images/ph.png', 2),
(39, 8, 'Tata8', 'Tata', NULL, NULL, NULL, NULL, NULL, NULL, 'images/ph.png', 2),
(40, 9, 'Tata9', 'Tata', NULL, NULL, NULL, NULL, NULL, NULL, 'images/ph.png', 2),
(41, 10, 'Tata10', 'Tata', NULL, NULL, NULL, NULL, NULL, NULL, 'images/ph.png', 2);

-- --------------------------------------------------------

--
-- Structure de la table `match`
--

CREATE TABLE IF NOT EXISTS `match` (
  `numMatch` int(11) NOT NULL AUTO_INCREMENT,
  `dateMatch` date NOT NULL,
  `epreuveMatch` varchar(30) NOT NULL,
  `numClub1` int(11) NOT NULL,
  `numClub2` int(11) NOT NULL,
  PRIMARY KEY (`numMatch`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Contenu de la table `match`
--

INSERT INTO `match` (`numMatch`, `dateMatch`, `epreuveMatch`, `numClub1`, `numClub2`) VALUES
(11, '2014-01-22', 'Match Amical', 1, 2),
(12, '2014-01-24', 'Match Pro', 3, 20),
(13, '2014-02-07', 'Match Pro', 1, 3),
(14, '2014-02-10', 'Match Amical', 2, 1),
(15, '2014-03-20', 'Match Amical', 20, 2);

-- --------------------------------------------------------

--
-- Structure de la table `participer`
--

CREATE TABLE IF NOT EXISTS `participer` (
  `idMatch` int(11) NOT NULL,
  `idJoueur` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`idMatch`,`idJoueur`),
  UNIQUE KEY `idMatch` (`idMatch`,`idJoueur`),
  KEY `idJoueur` (`idJoueur`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `participer`
--

INSERT INTO `participer` (`idMatch`, `idJoueur`, `status`) VALUES
(13, 19, 'Titulaire'),
(13, 20, 'Titulaire'),
(13, 21, 'Titulaire'),
(13, 24, 'Titulaire'),
(13, 26, 'Remplacant'),
(13, 27, 'Titulaire'),
(13, 28, 'Remplacant'),
(15, 32, 'Titulaire'),
(15, 33, 'Titulaire'),
(15, 35, 'Titulaire'),
(15, 38, 'Remplacant'),
(15, 40, 'Remplacant');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`NumClub`) REFERENCES `club` (`NumClub`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `joueur`
--
ALTER TABLE `joueur`
  ADD CONSTRAINT `joueur_ibfk_2` FOREIGN KEY (`NumClub`) REFERENCES `club` (`NumClub`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `participer`
--
ALTER TABLE `participer`
  ADD CONSTRAINT `participer_ibfk_1` FOREIGN KEY (`idMatch`) REFERENCES `match` (`numMatch`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `participer_ibfk_3` FOREIGN KEY (`idJoueur`) REFERENCES `joueur` (`idJou`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
