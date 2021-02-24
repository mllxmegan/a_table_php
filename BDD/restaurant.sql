-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 23 fév. 2021 à 14:35
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
-- Base de données :  `restaurant`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id_client` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_client`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id_client`) VALUES
(1),
(2),
(3),
(4),
(5),
(6),
(7),
(8),
(9),
(10),
(11),
(12),
(13);

-- --------------------------------------------------------

--
-- Structure de la table `flasher`
--

DROP TABLE IF EXISTS `flasher`;
CREATE TABLE IF NOT EXISTS `flasher` (
  `id_flash` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `date_flash` datetime NOT NULL,
  PRIMARY KEY (`id_flash`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `flasher`
--

INSERT INTO `flasher` (`id_flash`, `date_flash`) VALUES
(1, '2021-02-22 00:00:00'),
(2, '2021-02-23 00:00:00'),
(3, '2021-02-23 00:00:00'),
(4, '2021-02-24 00:00:00'),
(5, '2021-02-24 00:00:00'),
(6, '2021-02-25 00:00:00'),
(7, '2021-02-25 00:00:00'),
(8, '2021-02-27 00:00:00'),
(9, '2021-02-28 00:00:00'),
(10, '2021-02-24 00:00:00'),
(11, '2021-02-22 00:00:00'),
(12, '2021-03-03 00:00:00'),
(13, '2021-03-05 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `qrcode`
--

DROP TABLE IF EXISTS `qrcode`;
CREATE TABLE IF NOT EXISTS `qrcode` (
  `id_QRCode` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom_QRCode` varchar(30) NOT NULL,
  `url` varchar(100) NOT NULL,
  PRIMARY KEY (`id_QRCode`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `qrcode`
--

INSERT INTO `qrcode` (`id_QRCode`, `nom_QRCode`, `url`) VALUES
(1, 'entrée', 'https://lemeilleurresto.com/entree.php'),
(2, 'Plat Principal', 'https://lemeilleurresto.com/plat_principal.php'),
(3, 'dessert', 'https://lemeilleurresto.com/dessert.php'),
(4, 'Nos Cocktails', 'https://lemeilleurresto.com/noscoktails.php');

-- --------------------------------------------------------

--
-- Structure de la table `smartphone`
--

DROP TABLE IF EXISTS `smartphone`;
CREATE TABLE IF NOT EXISTS `smartphone` (
  `id_smartphone` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `marque` varchar(20) NOT NULL,
  `langue` varchar(20) NOT NULL,
  PRIMARY KEY (`id_smartphone`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `smartphone`
--

INSERT INTO `smartphone` (`id_smartphone`, `marque`, `langue`) VALUES
(1, 'samsung', 'francais'),
(2, 'apple', 'francais'),
(3, 'sony', 'anglais'),
(4, 'huawei', 'chinois'),
(5, 'samsung', 'anglais'),
(6, 'apple', 'francais');

-- --------------------------------------------------------

--
-- Structure de la table `table_resto`
--

DROP TABLE IF EXISTS `table_resto`;
CREATE TABLE IF NOT EXISTS `table_resto` (
  `id_table` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `numero_table` int(4) NOT NULL,
  `luminosite` varchar(30) NOT NULL,
  `nbre_de_chaises` int(10) NOT NULL,
  `emplacement` varchar(30) NOT NULL,
  PRIMARY KEY (`id_table`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `table_resto`
--

INSERT INTO `table_resto` (`id_table`, `numero_table`, `luminosite`, `nbre_de_chaises`, `emplacement`) VALUES
(1, 1, 'soleil', 4, 'interieur'),
(2, 2, 'soleil', 6, 'interieur'),
(3, 3, 'ombre', 2, 'exterieur'),
(4, 4, 'soleil', 4, 'exterieur'),
(5, 5, 'soleil', 4, 'exterieur'),
(6, 6, 'soleil', 8, 'interieur');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
