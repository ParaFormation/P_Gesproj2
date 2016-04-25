-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 25 Avril 2016 à 08:16
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

--
-- Contenu de la table `t_class`
--

INSERT INTO `t_class` (`idClass`, `claName`, `claYear`) VALUES
(1, 'CIN1', 1),
(2, 'CIN2', 2),
(3, 'CIN3', 3),
(4, 'CIN4', 4),
(5, 'EBE1', 1),
(6, 'EBE2', 2),
(7, 'EBE3', 3),
(8, 'ELEC1', 1),
(9, 'ELEC2', 2),
(10, 'ELEC3', 3),
(11, 'MEC1', 1),
(12, 'MEC2', 2),
(13, 'MEC3', 3),
(14, 'MEN1', 1),
(15, 'MEN2', 2),
(16, 'MEN3', 3),
(17, 'POL1', 1),
(18, 'POL2', 2),
(19, 'POL3', 3),
(20, 'AUT1', 1),
(21, 'AUT2', 2),
(22, 'AUT3', 3),
(23, 'ELE1', 1),
(24, 'ELE2', 2),
(25, 'ELE3', 3),
(26, 'GRA1', 1),
(27, 'GRA2', 2),
(28, 'GRA3', 3),
(29, 'GRA4', 4),
(30, 'EPC1', 1),
(31, 'EPC2', 2),
(32, 'EPC3', 3);

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

--
-- Contenu de la table `t_former`
--

INSERT INTO `t_former` (`idFormer`, `forFirstname`, `forLastname`, `forLogin`, `forPassword`, `forAddress`, `forEmail`, `forPhone`, `forQualifications`, `fkUser`) VALUES
(5, 'Jannik', 'Fisher', 'jannikfi', NULL, 'Rue des cerisier 12', 'jannik.fisher@gmail.com', 784568455, 'CFC Informatique, Ingénieur informaticien en développement d''applications', NULL),
(6, 'Louis', 'Leblanc', 'louisle', NULL, 'Route de la tour 8', 'louis.lb@bluewin.com', 783568456, 'Étude d''architecture de photographie et de science de l''écologie.', NULL),
(7, 'David', 'Tavares', 'davidta', NULL, 'route de la marmelade 2', 'david.tav@paradisiac.ch', 784968457, 'CFC d''électronique ', NULL),
(8, 'Hank', 'Lardi', 'hankla', NULL, 'chemin du pommier 4', 'hank.lardi@heisenberg.de', 784568458, 'Formation dual de Mécatronique en entreprise.', NULL),
(9, 'John', 'Ruth', 'johnru', NULL, 'avn 12 avril 28', 'john.ruth@hotmail.com', 784568659, 'CFC Maçonnerie, diplôme d''enseignement secondaire', NULL),
(10, 'Robert', 'Mayer', 'mayerro', NULL, 'Rue des pommier 12', 'robert.Mayer@gmail.com', 783568456, 'CFC de constructeur métalique', NULL),
(11, 'Marcus', 'Kaine', 'marcuska', NULL, 'Route du lac 8', 'Marcus.Kaine@bluewin.com', 783558445, 'CFC D''automaticien', NULL),
(12, 'Tobias', 'Delasarra', 'delasarrato', NULL, 'avn du 24 janvier', 'tobias.dela@gmail.com', 784966757, 'Ingénieur en électricité, CFC de paysagiste', NULL),
(13, 'Flavio', 'Pirello', 'pirellofl', NULL, 'Route des rangiers', 'flavio.pirello@titoli.it', 784568489, 'Maitre de dessein à l''école secondaire, CFC de photographe', NULL),
(14, 'Michel', 'Lopez', 'lopezmi', NULL, 'avn 24 avril 28', 'michel.lopez@hotmail.com', 784568698, 'Maturité gymnasiale ', NULL);

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

--
-- Contenu de la table `t_student`
--

INSERT INTO `t_student` (`idStudent`, `stuFirstname`, `stuLastname`, `stuAddress`, `fkUser`) VALUES
(1, 'Loïc', 'Berdoz', 'Rue Centrale 34 Lausanne', NULL),
(2, 'Alen', 'Bijelic', 'Avenue des Monts 43 Lausanne', NULL),
(3, 'Léandre', 'Campiche', 'Route des Acacias 7 Genève', NULL),
(4, 'Carvalho', 'David', 'Route de Nyon 10 Chavannes-près-Renens', NULL),
(5, 'Samuel', 'Dadié', 'Route de la Laiterie 6 Chavannes-près-Renens', NULL),
(6, 'Julien', 'Favre', 'Chemin des Clochetons 8 Biel/Bienne', NULL),
(7, 'Miguel', 'Fernandes', 'Avenue du Midi 12 Nyon', NULL),
(8, 'Romain', 'Gillieron', 'Chemindu Parchet 3 Lausanne', NULL),
(9, 'Maxime', 'Pichonnat', 'Avenue d''Echallens 23 Montreux', NULL),
(10, 'Quentin', 'Rey', 'Chemin des Rosiers 3 Féchy', NULL),
(11, 'Dylan', 'Sewell', 'Route des Mennettes 4 Trélex', NULL),
(12, 'Axel', 'Taverney', 'Rue de la Mouline 4 Morrens', NULL),
(13, 'Théodore', 'Voisard', 'Chemin des Rosiers 6 Lausanne', NULL),
(14, 'Maryse', 'Bordeleau', 'Route des Mennettes 64 Fléchy', NULL),
(15, 'Yvette', 'Huard', 'Rue de la Mouline 5 Lausanne', NULL),
(16, 'Paul', 'Marois', 'Rte des Avants 1 Montreux', NULL),
(17, 'Thibodeau', 'Lorraine', 'Rue des Mousquetaires 30', NULL),
(18, 'Jean', 'Nébzoin', 'Av. Des jolies filles 10 Morges', NULL),
(19, 'Jean', 'Népasbzoin', 'Kammelenbergstrasse 82 Fisibach', NULL),
(20, 'Louis', 'Rochat', 'Rue des Singes 12 Vevey', NULL),
(21, 'Jean', 'Nébzoin', 'Via Pestariso 97 St. Gallen', NULL),
(22, 'Jean', 'Népasbzoin', 'Brunnacherstrasse 28 Zürich', NULL),
(23, 'Louis', 'Rochat', 'Rue d Port 1912 Lausanne', NULL),
(24, 'Jérémy', 'Bossel', 'Rue des Instincts 100 Lausanne', NULL),
(25, 'David', 'Casas', 'Landstrasse 119 Schaufelbüel', NULL),
(26, 'Loïc', 'Geinoz', 'Blvd des Terminadors 10 Genève', NULL),
(27, 'Tharsshan', 'Gnanasekaram', 'Fortunastrasse 83 Erlen', NULL),
(28, 'David', 'Junior Branco', 'Herrenberg 117 Provence', NULL),
(29, 'Nicolas', 'Klun', 'Chemin de de la course 1 Fribourg', NULL),
(30, 'Emilie', 'Le Labousse', 'Loorenstrasse 115 Coinsins', NULL),
(31, 'Nikita', 'Martin', 'Gerbiweg 117 Buch', NULL),
(32, 'Thibaud', 'Michel', 'Rue des Juges 10 Mex', NULL),
(33, 'Matteo', 'Perroud', 'Herrenberg 13 Privilasco', NULL),
(34, 'Patrick', 'Pittet', 'Studhaldenstrasse 53 Les Petits Ponts', NULL),
(35, 'Ruben Dario', 'Rios', 'Rue de la Démolition 5 Renens', NULL),
(36, 'Florian', 'Vuffray', 'Via Stazione 61 Stalden', NULL),
(37, 'Oriel ', 'Guimond', 'Sonnenbergstr 145 Bretonnières', NULL),
(38, 'Sumner', 'Laboissonnière', 'Binzmühlestrasse 2 Salenstein', NULL),
(39, 'Cher', 'Curtois', 'Avenue de Bouvines Lausanne', NULL),
(40, 'Gaetan', 'Camus', 'Rue Sadi Carnot Vevey', NULL),
(41, 'Vilette', 'Mazuret', 'Rue des Coudriers Morrens', NULL),
(42, 'Astopho', 'Sabourin', 'Via Gabbietta 114 Verdasio', NULL),
(43, 'Cendrillon', 'Mercure', 'Höhenweg 111 Herferswil', NULL),
(44, 'Sacripant', 'Labrosse', 'Rosenweg 149 Ladir', NULL),
(45, 'Denis', 'Arpin', 'Avenue d''Ouchy 134 Pont-la-Ville', NULL),
(46, 'Latimer', 'Melanson', 'Tösstalstrasse 30 Wavre', NULL),
(47, 'Pierpont', 'Hughes', 'Kornquaderweg 91 Reigoldswil', NULL),
(48, 'Gifford', 'Pelletier', 'Im Sandbüel 117 Fregiécourt', NULL),
(49, 'Fitz', 'Émond', 'Rasenstrasse 147 Hersiwil', NULL),
(50, 'Lefèbvre', 'Aubine', 'Bergrain 144 Chavornay', NULL),
(71, 'Test3', 'Test3', 'Test3', 11),
(72, 'Test', 'test', 'Test', 12),
(73, 'Test', 'test', 'Test', 12),
(74, 'Test', 'test', 'Test', 12),
(75, 'Test', 'test', 'Test', 12),
(76, 'Test', 'test', 'Test', 12),
(77, 'test', 'test', 'test', 13),
(78, 'Bijelic', 'Alen', 'Renens', 14);

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
-- Contenu de la table `t_user`
--

INSERT INTO `t_user` (`idUser`, `useUsername`, `usePassword`, `isTeacherValidated`) VALUES
(1, 'carvalhoda', '$2y$10$dE.CnN.A66K4PgtmalaEbeH8xY/R5HR.IDHh3RZMLzKgqOpAYOWgS', NULL),
(2, 'Paradisiac', '$2y$10$ojSh/yKDSXCqXWDIX3pZveEn6B8J7WsEH6bzOl4829Jj.eDPAdEpm', NULL),
(3, 'Romain', '$2y$10$qQ8m8XsMUS5.OF1dljSIIOZVzlzu.2IvmeD04P6azQp9y2OTDoY.u', NULL),
(4, 'a', '$2y$10$xquUZQ2Ghw9M8TvHy9efnuEpunAe9AfZJBtrjAjM0BimScqiN33yO', NULL),
(5, 'Test', '$2y$10$YslTNRkc9rlHPl97XmFgtuLSZQF1ShV7UGE4kcqCnoCedXuJ3eJgW', NULL),
(6, 'aaa', '$2y$10$kG9eyerzy/Q0H2WRZv7WNO5WxgMtfPl.kphrO7AZRTqA5ANw5M6ei', NULL),
(7, 'TestDav', '$2y$10$jJDXg3LBFiENWZdpJf9uCOyl0utbVW2NPGiDtc3Ao9ogmQRXkGc9G', NULL),
(8, 'Theo', '$2y$10$U6GKP95yJ32ZBEGhMYZQNeVxC1DbcYxgRVAEA3X3rso8nyF0er8Lu', NULL),
(9, 'P4R4DiSi4C', '$2y$10$neQFvDNiTvpLF9lt6VoCJuw1C3ZLqUOZ.RtyCmyyXqxLhD1Wdb656', NULL),
(10, 'test222', '$2y$10$xNx6kVsR0OfWUk9ua7L1EuC3v27A/wgW..vesyEXdXa8kncfEAAMe', NULL),
(11, 'test3', '$2y$10$4.frcnjy87y7BVAyUcnFQeD/kmcahp0bl2oXT1LNRdCuP2uVE1.LG', NULL),
(12, 'test4', '$2y$10$8Hh02lBj4OQ.Iel/755LfOFncYo7FFmmoY0Vw3ayEk1gJne.3NpTu', NULL),
(13, 'test5', '$2y$10$4WtqgO0HOZzx4TjCWCDIreewWorsPCSxd3/ty18uDn6MQFmGnTd0i', NULL),
(14, 'alen2', '$2y$10$DI9LoLDFPy/7kXIg9LrGdum.6K3p1YQjE/9y0g9cpff8DV2TJWq4y', NULL);

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
