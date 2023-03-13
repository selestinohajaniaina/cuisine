-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 13 mars 2023 à 05:42
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
  `codeCa` int(11) NOT NULL AUTO_INCREMENT,
  `libelleCa` varchar(255) NOT NULL,
  PRIMARY KEY (`codeCa`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`codeCa`, `libelleCa`) VALUES
(1, 'legume'),
(2, 'viande'),
(6, 'epice');

-- --------------------------------------------------------

--
-- Structure de la table `detailplat`
--

DROP TABLE IF EXISTS `detailplat`;
CREATE TABLE IF NOT EXISTS `detailplat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_plat` varchar(255) NOT NULL,
  `libellePro` varchar(255) NOT NULL,
  `qte` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `detailplat`
--

INSERT INTO `detailplat` (`id`, `id_plat`, `libellePro`, `qte`) VALUES
(1, '2', 'poulet=kg', '2'),
(2, '2', 'carrotte=kg', '1'),
(3, '2', 'zebus=kg', '1'),
(6, '2', 'huil=L', '1'),
(7, '5', 'porc=kg', '2');

-- --------------------------------------------------------

--
-- Structure de la table `plat`
--

DROP TABLE IF EXISTS `plat`;
CREATE TABLE IF NOT EXISTS `plat` (
  `id_plat` int(11) NOT NULL AUTO_INCREMENT,
  `nom_plat` varchar(255) NOT NULL,
  PRIMARY KEY (`id_plat`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `plat`
--

INSERT INTO `plat` (`id_plat`, `nom_plat`) VALUES
(1, 'plat_1'),
(2, 'plat_2'),
(5, 'donnate_1');

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
(7, 'huil', 'epice', 'L'),
(8, 'poivre', 'epice', 'kg'),
(9, 'corgette', 'legume', 'kg'),
(10, 'porc', 'viande', 'kg');

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
