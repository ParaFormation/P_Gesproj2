-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 18 Avril 2016 à 10:21
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

--
-- Contenu de la table `t_training`
--

INSERT INTO `t_training` (`idTraining`, `traName`, `traDescription`, `traStartDate`, `traEndDate`, `traPeriodicity`, `traPrice`, `traLocality`, `traMinParticipants`, `traMaxParticipants`, `fkFormer1`, `fkFormer2`) VALUES
(1, 'Informaticien', 'L’informaticien-ne est la ou le spécialiste des systèmes informatiques, des problèmes de programmation demandant des connaissances globales des processus ainsi que de la formation et du support apportés aux utilisateurs.', '2021-03-20', '2021-03-20', 25, 400, 'Lausanne', 8, 15, 5, 9),
(2, 'Ébéniste', 'L''ébéniste a pour activités essentielles la création de mobiliers tels que des armoires, des tables et des chaises de tous les styles ainsi que des aménagements de haute qualité pour nos habitations.', '2021-03-20', '2021-03-20', 20, 300, 'Lausanne', 8, 15, 6, 7),
(3, 'Électronicien', 'Elle ou il développe et réalise des commandes d''installations et d''appareils électroniques. Elle ou il met en service et dépanne diverses installations.', '2021-03-20', '2021-03-20', 25, 350, 'Lausanne', 5, 15, 7, 8),
(4, 'Mécatronicien', 'La ou le mécatronicien-ne d’automobiles réalise des diagnostics sur l''ensemble du véhicule et exécute les travaux de réparation de manière autonome.', '2021-03-20', '2021-03-20', 22, 600, 'Lausanne', 8, 15, 8, 9),
(5, 'Menusier', 'La menuisière ou le menuisier a pour activités essentielles la réalisation d''agencements intérieurs ou extérieurs, de portes, d''éléments vitrés, de plafonds et de cloisons.', '2021-03-20', '2021-03-20', 22, 450, 'Lausanne', 8, 15, 9, 10),
(6, 'Polymécanicien', 'La ou le polymécanicien-ne touche les domaines suivants : fabrication mécanique, montage et mise en service de machines bien sûr, mais aussi optique, industrie horlogère, appareillage médico-chirurgical, automobile, agriculture et aéronautique.', '2021-03-20', '2021-03-20', 20, 350, 'Lausanne', 5, 12, 10, 11),
(7, 'Automaticien', 'L''automaticien-ne développe et réalise des systèmes de commande d''automation industrielle.', '2021-03-20', '2021-03-20', 20, 400, 'Lausanne', 5, 12, 11, 12),
(8, 'Electricien', 'Installent et entretiennent des réseaux électriques et de communication à l''intérieur des logements, des bâtiments industriels, administratifs ou commerciaux.', '2021-03-20', '2021-03-20', 20, 450, 'Vevey', 2, 10, 12, 13),
(9, 'Graphiste', 'Conçoivent et réalisent des messages sous forme d''image, de photo, de typographie, etc.', '2021-03-20', '2021-03-20', 25, 300, 'Morges', 5, 10, 13, 14),
(10, 'Employé de commerce', 'L''employé ou l''employée de commerce effectuent des tâches administratives au sein d''une entreprise privée ou d''un service public. Leurs fonctions varient selon le champ d''activités de leur employeur et la nature de leur poste.', '2021-03-20', '2021-03-20', 22, 400, 'Morges', 2, 8, 14, 5);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `t_training`
--
ALTER TABLE `t_training`
  ADD CONSTRAINT `t_training_ibfk_1` FOREIGN KEY (`fkFormer2`) REFERENCES `t_former` (`idFormer`),
  ADD CONSTRAINT `t_training_ibfk_2` FOREIGN KEY (`fkFormer1`) REFERENCES `t_former` (`idFormer`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
