-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 13 mars 2023 à 12:32
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `cuisine`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_code` varchar(255) DEFAULT NULL,
  `libelleCa` varchar(255) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`cat_id`, `cat_code`, `libelleCa`) VALUES
(1, 'L', 'legume'),
(2, 'V', 'viande'),
(6, 'E', 'epice'),
(12, 'F', 'fruit'),
(13, 'P', 'poisson'),
(14, 'LG', 'legumineuse'),
(15, 'LQ', 'liquide');

-- --------------------------------------------------------

--
-- Structure de la table `detailplat`
--

DROP TABLE IF EXISTS `detailplat`;
CREATE TABLE IF NOT EXISTS `detailplat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_plat` varchar(255) NOT NULL,
  `libellePro` varchar(255) NOT NULL,
  `variete` varchar(255) DEFAULT NULL,
  `qte` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `detailplat`
--

INSERT INTO `detailplat` (`id`, `id_plat`, `libellePro`, `variete`, `qte`) VALUES
(1, '2', 'poulet=kg', 'chair', '0.25'),
(2, '2', 'carrotte=kg', NULL, '0.25'),
(6, '2', 'huil=L', NULL, '0.05'),
(8, '2', 'poivre=kg', 'en graine', '0.01'),
(9, '2', 'pomme de terre=kg', NULL, '0.25'),
(10, '2', 'corgette=kg', NULL, '0.15');

-- --------------------------------------------------------

--
-- Structure de la table `plat`
--

DROP TABLE IF EXISTS `plat`;
CREATE TABLE IF NOT EXISTS `plat` (
  `id_plat` int(11) NOT NULL AUTO_INCREMENT,
  `nom_plat` varchar(255) NOT NULL,
  PRIMARY KEY (`id_plat`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `plat`
--

INSERT INTO `plat` (`id_plat`, `nom_plat`) VALUES
(2, 'poulet avec legume');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `codePro` int(11) NOT NULL AUTO_INCREMENT,
  `libellePro` varchar(255) NOT NULL,
  `codeCa` varchar(255) NOT NULL,
  `unite` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`codePro`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`codePro`, `libellePro`, `codeCa`, `unite`) VALUES
(2, 'carrotte', 'legume', 'kg'),
(3, 'poulet', 'viande', 'kg'),
(4, 'zebus', 'viande', 'kg'),
(5, 'pomme de terre', 'legume', 'kg'),
(6, 'poulet de chair', 'viande', 'kg'),
(8, 'poivre', 'epice', 'kg'),
(9, 'corgette', 'legume', 'kg');

-- --------------------------------------------------------

--
-- Structure de la table `recette`
--

DROP TABLE IF EXISTS `recette`;
CREATE TABLE IF NOT EXISTS `recette` (
  `codeRe` int(11) NOT NULL AUTO_INCREMENT,
  `nom_plat` varchar(255) NOT NULL,
  `nbr_per` int(11) NOT NULL,
  PRIMARY KEY (`codeRe`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
