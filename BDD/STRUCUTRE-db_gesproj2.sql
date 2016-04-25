-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 25 Avril 2016 à 08:17
-- Version du serveur :  5.6.15-log
-- Version de PHP :  5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `db_gesproj2`
--
CREATE DATABASE IF NOT EXISTS `db_gesproj2` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `db_gesproj2`;

-- --------------------------------------------------------

--
-- Structure de la table `t_class`
--

DROP TABLE IF EXISTS `t_class`;
CREATE TABLE IF NOT EXISTS `t_class` (
  `idClass` int(10) unsigned NOT NULL,
  `claName` varchar(20) NOT NULL,
  `claYear` int(10) unsigned NOT NULL,
  PRIMARY KEY (`idClass`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `t_former`
--

DROP TABLE IF EXISTS `t_former`;
CREATE TABLE IF NOT EXISTS `t_former` (
  `idFormer` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `forFirstname` varchar(50) NOT NULL,
  `forLastname` varchar(50) NOT NULL,
  `forLogin` varchar(50) NOT NULL,
  `forPassword` varchar(50) DEFAULT NULL,
  `forAddress` varchar(100) NOT NULL,
  `forEmail` varchar(50) NOT NULL,
  `forPhone` int(10) unsigned NOT NULL,
  `forQualifications` tinytext NOT NULL,
  `fkUser` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`idFormer`),
  KEY `fkUser` (`fkUser`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

-- --------------------------------------------------------

--
-- Structure de la table `t_inscription`
--

DROP TABLE IF EXISTS `t_inscription`;
CREATE TABLE IF NOT EXISTS `t_inscription` (
  `idInscription` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `insDate` date NOT NULL,
  `fkClass` int(10) unsigned NOT NULL,
  `fkStudent` int(10) unsigned NOT NULL,
  `fkTraining` int(10) unsigned NOT NULL,
  PRIMARY KEY (`idInscription`),
  KEY `fkClass` (`fkClass`,`fkStudent`,`fkTraining`),
  KEY `fkTraining` (`fkTraining`),
  KEY `fkStudent` (`fkStudent`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `t_student`
--

DROP TABLE IF EXISTS `t_student`;
CREATE TABLE IF NOT EXISTS `t_student` (
  `idStudent` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `stuFirstname` varchar(50) NOT NULL,
  `stuLastname` varchar(50) NOT NULL,
  `stuAddress` varchar(100) NOT NULL,
  `fkUser` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`idStudent`),
  KEY `fkUser` (`fkUser`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=79 ;

-- --------------------------------------------------------

--
-- Structure de la table `t_survey`
--

DROP TABLE IF EXISTS `t_survey`;
CREATE TABLE IF NOT EXISTS `t_survey` (
  `idSurvey` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `surDate` date NOT NULL,
  `surQuestion1Note` int(10) unsigned NOT NULL,
  `surQuestion2Note` int(10) unsigned NOT NULL,
  `surQuestion3Note` int(10) unsigned NOT NULL,
  `surQuestion4Note` int(10) unsigned NOT NULL,
  `surQuestion5Note` int(10) unsigned NOT NULL,
  `surComment` text NOT NULL,
  `fkTraining` int(10) unsigned NOT NULL,
  PRIMARY KEY (`idSurvey`),
  KEY `fkTraining` (`fkTraining`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `t_training`
--

DROP TABLE IF EXISTS `t_training`;
CREATE TABLE IF NOT EXISTS `t_training` (
  `idTraining` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `traName` varchar(50) NOT NULL,
  `traDescription` tinytext NOT NULL,
  `traStartDate` date NOT NULL,
  `traEndDate` date NOT NULL,
  `traPeriodicity` int(10) unsigned NOT NULL,
  `traPrice` float unsigned NOT NULL,
  `traLocality` varchar(100) NOT NULL,
  `traMinParticipants` int(10) unsigned NOT NULL,
  `traMaxParticipants` int(10) unsigned NOT NULL,
  `fkFormer1` int(10) unsigned NOT NULL,
  `fkFormer2` int(10) unsigned NOT NULL,
  PRIMARY KEY (`idTraining`),
  KEY `fkFormer1` (`fkFormer1`,`fkFormer2`),
  KEY `fkFormer2` (`fkFormer2`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

-- --------------------------------------------------------

--
-- Structure de la table `t_user`
--

DROP TABLE IF EXISTS `t_user`;
CREATE TABLE IF NOT EXISTS `t_user` (
  `idUser` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `useUsername` varchar(50) NOT NULL,
  `usePassword` varchar(100) NOT NULL,
  `isTeacherValidated` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`idUser`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `t_former`
--
ALTER TABLE `t_former`
  ADD CONSTRAINT `t_former_ibfk_1` FOREIGN KEY (`fkUser`) REFERENCES `t_user` (`idUser`);

--
-- Contraintes pour la table `t_inscription`
--
ALTER TABLE `t_inscription`
  ADD CONSTRAINT `fkClassToIDclass` FOREIGN KEY (`fkClass`) REFERENCES `t_class` (`idClass`),
  ADD CONSTRAINT `t_inscription_ibfk_2` FOREIGN KEY (`fkStudent`) REFERENCES `t_student` (`idStudent`),
  ADD CONSTRAINT `t_inscription_ibfk_3` FOREIGN KEY (`fkTraining`) REFERENCES `t_training` (`idTraining`);

--
-- Contraintes pour la table `t_student`
--
ALTER TABLE `t_student`
  ADD CONSTRAINT `t_student_ibfk_1` FOREIGN KEY (`fkUser`) REFERENCES `t_user` (`idUser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `t_survey`
--
ALTER TABLE `t_survey`
  ADD CONSTRAINT `t_survey_ibfk_1` FOREIGN KEY (`fkTraining`) REFERENCES `t_training` (`idTraining`);

--
-- Contraintes pour la table `t_training`
--
ALTER TABLE `t_training`
  ADD CONSTRAINT `t_training_ibfk_1` FOREIGN KEY (`fkFormer2`) REFERENCES `t_former` (`idFormer`),
  ADD CONSTRAINT `t_training_ibfk_2` FOREIGN KEY (`fkFormer1`) REFERENCES `t_former` (`idFormer`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
