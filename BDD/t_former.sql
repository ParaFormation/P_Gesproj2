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
  PRIMARY KEY (`idFormer`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Contenu de la table `t_former`
--

INSERT INTO `t_former` (`idFormer`, `forFirstname`, `forLastname`, `forLogin`, `forPassword`, `forAddress`, `forEmail`, `forPhone`, `forQualifications`) VALUES
(5, 'Jannik', 'Fisher', 'jannikfi', NULL, 'Rue des cerisier 12', 'jannik.fisher@gmail.com', 784568455, 'CFC Informatique, Ingénieur informaticien en développement d''applications'),
(6, 'Louis', 'Leblanc', 'louisle', NULL, 'Route de la tour 8', 'louis.lb@bluewin.com', 783568456, 'Étude d''architecture de photographie et de science de l''écologie.'),
(7, 'David', 'Tavares', 'davidta', NULL, 'route de la marmelade 2', 'david.tav@paradisiac.ch', 784968457, 'CFC d''électronique '),
(8, 'Hank', 'Lardi', 'hankla', NULL, 'chemin du pommier 4', 'hank.lardi@heisenberg.de', 784568458, 'Formation dual de Mécatronique en entreprise.'),
(9, 'John', 'Ruth', 'johnru', NULL, 'avn 12 avril 28', 'john.ruth@hotmail.com', 784568659, 'CFC Maçonnerie, diplôme d''enseignement secondaire'),
(10, 'Robert', 'Mayer', 'mayerro', NULL, 'Rue des pommier 12', 'robert.Mayer@gmail.com', 783568456, 'CFC de constructeur métalique'),
(11, 'Marcus', 'Kaine', 'marcuska', NULL, 'Route du lac 8', 'Marcus.Kaine@bluewin.com', 783558445, 'CFC D''automaticien'),
(12, 'Tobias', 'Delasarra', 'delasarrato', NULL, 'avn du 24 janvier', 'tobias.dela@gmail.com', 784966757, 'Ingénieur en électricité, CFC de paysagiste'),
(13, 'Flavio', 'Pirello', 'pirellofl', NULL, 'Route des rangiers', 'flavio.pirello@titoli.it', 784568489, 'Maitre de dessein à l''école secondaire, CFC de photographe'),
(14, 'Michel', 'Lopez', 'lopezmi', NULL, 'avn 24 avril 28', 'michel.lopez@hotmail.com', 784568698, 'Maturité gymnasiale ');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
