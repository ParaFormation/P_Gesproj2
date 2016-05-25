-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Client: localhost:3306
-- Généré le: Mer 25 Mai 2016 à 09:26
-- Version du serveur: 5.5.44-MariaDB-cll-lve
-- Version de PHP: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `paradisi_db_gesproj2`
--
CREATE DATABASE IF NOT EXISTS `db_gesproj2` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `db_gesproj2`;

-- --------------------------------------------------------

--
-- Structure de la table `t_former`
--

CREATE TABLE IF NOT EXISTS `t_former` (
  `idFormer` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `forFirstname` varchar(50) NOT NULL,
  `forLastname` varchar(50) NOT NULL,
  `forAddress` varchar(100) NOT NULL,
  `forEmail` varchar(50) NOT NULL,
  `forPhone` int(10) unsigned NOT NULL,
  `forQualifications` tinytext NOT NULL,
  `fkUser` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`idFormer`),
  KEY `fkUser` (`fkUser`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=57 ;

--
-- Contenu de la table `t_former`
--

INSERT INTO `t_former` (`idFormer`, `forFirstname`, `forLastname`, `forAddress`, `forEmail`, `forPhone`, `forQualifications`, `fkUser`) VALUES
(5, 'Jannik', 'Fisher', 'Rue des cerisier 12', 'jannik.fisher@gmail.com', 784568455, 'CFC Informatique, Ingénieur informaticien en développement d''applications', 61),
(6, 'Louis', 'Leblanc', 'Route de la tour 8', 'louis.lb@bluewin.com', 783568456, 'Étude d''architecture de photographie et de science de l''écologie.', 62),
(7, 'David', 'Tavares', 'route de la marmelade 2', 'david.tav@paradisiac.ch', 784968457, 'CFC d''électronique ', 63),
(8, 'Hank', 'Lardi', 'chemin du pommier 4', 'hank.lardi@heisenberg.de', 784568458, 'Formation dual de Mécatronique en entreprise.', 64),
(9, 'John', 'Ruth', 'avn 12 avril 28', 'john.ruth@hotmail.com', 784568659, 'CFC Maçonnerie, diplôme d''enseignement secondaire', 65),
(10, 'Robert', 'Mayer', 'Rue des pommier 12', 'robert.Mayer@gmail.com', 783568456, 'CFC de constructeur métalique', 66),
(11, 'Marcus', 'Kaine', 'Route du lac 8', 'Marcus.Kaine@bluewin.com', 783558445, 'CFC D''automaticien', 67),
(12, 'Tobias', 'Delasarra', 'avn du 24 janvier', 'tobias.dela@gmail.com', 784966757, 'Ingénieur en électricité, CFC de paysagiste', 68),
(13, 'Flavio', 'Pirello', 'Route des rangiers', 'flavio.pirello@titoli.it', 784568489, 'Maitre de dessein à l''école secondaire, CFC de photographe', 69),
(14, 'Michel', 'Lopez', 'avn 24 avril 28', 'michel.lopez@hotmail.com', 784568698, 'Maturité gymnasiale ', 70),
(54, 'Mickey', 'Mouse', 'asdads 156', 'asddassd@sadads', 4294967295, 'Aadskladksd   df sa gfsd  gfsd  dgfs dfg', 89),
(56, 'Theodore', 'Voisard', 'Rue de la chenalette 13', 'theodore.voisard@gmail.com', 789172498, 'Apprentis CFC d''informatique', 93);

-- --------------------------------------------------------

--
-- Structure de la table `t_inscription`
--

CREATE TABLE IF NOT EXISTS `t_inscription` (
  `idInscription` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `insDate` date NOT NULL,
  `fkStudent` int(10) unsigned NOT NULL,
  `fkTraining` int(10) unsigned NOT NULL,
  PRIMARY KEY (`idInscription`),
  KEY `fkClass` (`fkStudent`,`fkTraining`),
  KEY `fkTraining` (`fkTraining`),
  KEY `fkStudent` (`fkStudent`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Contenu de la table `t_inscription`
--

INSERT INTO `t_inscription` (`idInscription`, `insDate`, `fkStudent`, `fkTraining`) VALUES
(9, '2016-05-09', 70, 1),
(10, '2016-05-09', 73, 1),
(11, '2016-05-24', 71, 1);

-- --------------------------------------------------------

--
-- Structure de la table `t_student`
--

CREATE TABLE IF NOT EXISTS `t_student` (
  `idStudent` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `stuFirstname` varchar(50) NOT NULL,
  `stuLastname` varchar(50) NOT NULL,
  `stuAddress` varchar(100) NOT NULL,
  `fkUser` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`idStudent`),
  KEY `fkUser` (`fkUser`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=76 ;

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
(69, 'pierre', 'pierre', 'pierre 123', 86),
(70, 'a', 'a', 'le aaaa 2', 90),
(71, 'Alen', 'Bijelic', 'Av. de Florissant 22', 91),
(72, 'Alen', 'Bij', 'aaaa@', 94),
(73, 'aaa', 'aaa', 'aaaa 111', 95),
(74, 'Alen', 'Bijelic', 'Av. de Florissant 22', 97),
(75, 's', 's', 's 1255', 98);

-- --------------------------------------------------------

--
-- Structure de la table `t_survey`
--

CREATE TABLE IF NOT EXISTS `t_survey` (
  `idSurvey` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `surDate` date NOT NULL,
  `surQuestion1Note` int(10) unsigned NOT NULL,
  `surQuestion2Note` int(10) unsigned NOT NULL,
  `surQuestion3Note` int(10) unsigned NOT NULL,
  `surQuestion4Note` int(10) unsigned NOT NULL,
  `surQuestion5Note` int(10) unsigned NOT NULL,
  `surQuestion6Note` int(10) unsigned NOT NULL,
  `surQuestion7Note` int(10) unsigned NOT NULL,
  `surQuestion8Note` int(10) unsigned NOT NULL,
  `surQuestion9Note` int(10) unsigned NOT NULL,
  `surQuestion10Note` int(10) unsigned NOT NULL,
  `surQuestion11Note` int(10) unsigned NOT NULL,
  `surComment` text NOT NULL,
  `fkTraining` int(10) unsigned NOT NULL,
  PRIMARY KEY (`idSurvey`),
  KEY `fkTraining` (`fkTraining`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Contenu de la table `t_survey`
--

INSERT INTO `t_survey` (`idSurvey`, `surDate`, `surQuestion1Note`, `surQuestion2Note`, `surQuestion3Note`, `surQuestion4Note`, `surQuestion5Note`, `surQuestion6Note`, `surQuestion7Note`, `surQuestion8Note`, `surQuestion9Note`, `surQuestion10Note`, `surQuestion11Note`, `surComment`, `fkTraining`) VALUES
(11, '2016-05-17', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'faux', 1);

-- --------------------------------------------------------

--
-- Structure de la table `t_training`
--

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

CREATE TABLE IF NOT EXISTS `t_user` (
  `idUser` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `useUsername` varchar(50) NOT NULL,
  `usePassword` varchar(100) NOT NULL,
  `isTeacherValidated` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`idUser`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=100 ;

--
-- Contenu de la table `t_user`
--

INSERT INTO `t_user` (`idUser`, `useUsername`, `usePassword`, `isTeacherValidated`) VALUES
(61, 'JFR', '$2y$10$hxmku3Horv/Nr/z9JBLkCeKbZrUviSfKEDxEp/QBLdDBvaJ58U3YW', 1),
(62, 'LLC', '$2y$10$TYeWKex4OBH9WazN5BU.eOpP23b1M.v1NSsztNfmd95zGJFE.N9au', 1),
(63, 'DTS', '$2y$10$dg684Y/isZ9ASk34R6oPK.JMbFzrj2.PE5KZVMJKEDXB6Gcd2K/TS', 1),
(64, 'HLI', '$2y$10$00.HTBnR7hwSLEdyqEWBXuiUx3achw3lzpxODYoZkxjQfCPVNEmbm', 1),
(65, 'JRH', '$2y$10$Zyoc7i.DWAKV/0TUmpc2nOiZnjQr2WKq1MphTcBa6UTGjjCfeWDhe', 1),
(66, 'RMR', '$2y$10$aBdlm7LNeZ60kfUkUqrduuez.eV3vdbhxNhwbN7nGX35jvYcX0be2', 1),
(67, 'MKE', '$2y$10$oG.WxLQIQKg3yzGoXueFcuOLyYa.9DGDUZYyKpL.ncgh3OjCL6zWa', 1),
(68, 'TDA', '$2y$10$8WazddcfiFP.1DsLZrngvuNJ70WxNkFsS2BT5T9BYVjxPezdus0Le', 1),
(69, 'FPO', '$2y$10$Jk65onwfFunaTeXbts0GrulZ5lLIN.IOHYIqdJ6T8EYCwopPphFme', 1),
(70, 'MLZ', '$2y$10$OiJig4fLcpa9acADy8enk.YhlRqJquFMPNWqtg/TOBubTu0SBn7Ha', 1),
(86, 'asdasd', '$2y$10$6jQZbEEIA9acXE14.AaVzub1V0JgaEE5XuSnvk26DjcCbjMjwXkk6', 0),
(89, 'asd12', '$2y$10$szC9Eg/mvb5ao5hpKaaCr.hYp.y61kSrLo8/olIi15D.YscGhhJRO', 1),
(90, 'test12', '$2y$10$hmzaaAK5KlbfC3Q0jv5Yx.UK0N2IQHs2DgUKYEGuHnrN9KUCeMLES', 0),
(91, 'bijelical', '$2y$10$Eq5311FaFAq.Y6Ci3B4dK.8hjTUnm8VogXo16KOTYmC2DWWGmRXsu', 0),
(93, 'TheodoreV', '$2y$10$LD8OuzBkelqDy7pVMUh/yumcXgpMUC7pKbZUx9qIJGjnvgyM9x0.S', 0),
(94, 'alen', '$2y$10$9DFT8tqRokPBFHK0xH871.i73rOwVD4T5pupdoCdxlrB0/1Sz4RUC', 0),
(95, 'romain', '$2y$10$egOQ5XS7NBnTo6.3CORRA.4emsQBkuUZKMDxWhJh.Ji17w5CCwKv6', 0),
(96, 'WHERE ID = 2', '$2y$10$R19qSyzf.juCBljnd.0KIeK5QuSIYowZlYMyF7pIpdBwaT4A5gszq', 0),
(97, 'test', '$2y$10$55VT8auyGm1ZPzcApsagSu6w9SJriWVRKp96B0piErzZF3TezKJxq', 1),
(98, 's', '$2y$10$iE6bgA92GPkVBtL3WoA/O.ZzePD16ekbYTR2GdvgYid8wmVIWaMu2', 0),
(99, 'testdav1', '$2y$10$6K6e55YS1juG8cim4qHjN.ixFOk5AhdXDNS8XlXQ7Fjk6nN0DO9py', 0);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `t_former`
--
ALTER TABLE `t_former`
  ADD CONSTRAINT `t_former_ibfk_1` FOREIGN KEY (`fkUser`) REFERENCES `t_user` (`idUser`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `t_inscription`
--
ALTER TABLE `t_inscription`
  ADD CONSTRAINT `t_inscription_ibfk_3` FOREIGN KEY (`fkTraining`) REFERENCES `t_training` (`idTraining`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `t_inscription_ibfk_2` FOREIGN KEY (`fkStudent`) REFERENCES `t_student` (`idStudent`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `t_student`
--
ALTER TABLE `t_student`
  ADD CONSTRAINT `t_student_ibfk_1` FOREIGN KEY (`fkUser`) REFERENCES `t_user` (`idUser`) ON DELETE CASCADE ON UPDATE CASCADE;

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
