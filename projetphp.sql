-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 24 Avril 2016 à 18:31
-- Version du serveur :  5.7.9
-- Version de PHP :  5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projetphp`
--

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(60) NOT NULL,
  `contenu` varchar(255) NOT NULL,
  `news_id` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(12, 'TEST1', 'sdfr'),
(13, 'TEST1', 'azer'),
(14, 'id', 'mdp'),
(15, 'id', 'mdp1'),
(16, 'test', 'azrr'),
(17, 'test', 'azer'),
(18, '', ''),
(19, 'test', 'aze'),
(20, 'azer', 'test1'),
(21, 'ccc', 'cc');

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

DROP TABLE IF EXISTS `projet`;
CREATE TABLE IF NOT EXISTS `projet` (
  `idarticle` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(50) DEFAULT NULL,
  `contenu` text,
  `categorie` enum('musique','informatique','art','actualite','politique','science','people') DEFAULT NULL,
  `tag` varchar(50) DEFAULT NULL,
  `auteur` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`idarticle`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `projet`
--

INSERT INTO `projet` (`idarticle`, `titre`, `contenu`, `categorie`, `tag`, `auteur`) VALUES
(1, 'titre1', 'contenu test 1', 'actualite', 'tag1', 'azer'),
(2, 'test 2', 'contenu test 2', 'informatique', 'tag2', 'test'),
(3, 'test 3', 'contenu test 3', 'informatique', 'tag3', 'test'),
(4, 'article', 'test d"un truc', 'informatique', 'tag1', 'test'),
(5, 'article 5', 'test d''article 2', 'politique', 'tag1', 'test'),
(8, 'ertr', 'dgdfg', 'musique', 'zer', 'test'),
(12, 'test 9', 'article texte 9', 'actualite', 'tag 9', 'ccc'),
(13, 'test 9', 'article texte 9', 'actualite', 'tag 9', 'ccc');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
