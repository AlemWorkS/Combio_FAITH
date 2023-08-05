-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 05 août 2023 à 00:19
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `combio`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

DROP TABLE IF EXISTS `administrateur`;
CREATE TABLE IF NOT EXISTS `administrateur` (
  `mail` varchar(50) NOT NULL,
  `motdepasse` varchar(50) NOT NULL,
  PRIMARY KEY (`mail`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `codecateg` int NOT NULL AUTO_INCREMENT,
  `libelle` varchar(7) NOT NULL,
  `nomcatego` mediumtext NOT NULL,
  PRIMARY KEY (`codecateg`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`codecateg`, `libelle`, `nomcatego`) VALUES
(1, 'BTE', 'beaute'),
(2, 'CMP', 'complement'),
(3, 'FRT', 'fruits'),
(4, 'LEG', 'legumes'),
(5, 'SNT', 'sante');

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `noclient` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(15) NOT NULL,
  `prenoms` varchar(25) NOT NULL,
  `ville` varchar(25) NOT NULL,
  `contact` varchar(25) NOT NULL,
  `cli_parrain` int NOT NULL,
  PRIMARY KEY (`noclient`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `commandes`
--

DROP TABLE IF EXISTS `commandes`;
CREATE TABLE IF NOT EXISTS `commandes` (
  `nocommande` int NOT NULL AUTO_INCREMENT,
  `datecom` date NOT NULL,
  `adressedelivraison` mediumtext NOT NULL,
  `noclient` int NOT NULL,
  `IDPAIEMENT` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `IDVPAIEMENT` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `choixVPaiement` varchar(100) NOT NULL,
  PRIMARY KEY (`nocommande`),
  KEY `noclient` (`noclient`),
  KEY `IDPAIEMENT` (`IDPAIEMENT`),
  KEY `IDVPAIEMENT` (`IDVPAIEMENT`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `conditionner`
--

DROP TABLE IF EXISTS `conditionner`;
CREATE TABLE IF NOT EXISTS `conditionner` (
  `IDPRODUIT` varchar(10) NOT NULL,
  `IDEMBALLAGE` varchar(10) NOT NULL,
  `DATECONDITIONNER` timestamp NOT NULL,
  PRIMARY KEY (`IDPRODUIT`,`IDEMBALLAGE`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `contenir`
--

DROP TABLE IF EXISTS `contenir`;
CREATE TABLE IF NOT EXISTS `contenir` (
  `nocommande` int NOT NULL,
  `refproduit` int NOT NULL,
  `quantite` int NOT NULL,
  `prixvente` int NOT NULL,
  PRIMARY KEY (`nocommande`,`refproduit`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `emballage`
--

DROP TABLE IF EXISTS `emballage`;
CREATE TABLE IF NOT EXISTS `emballage` (
  `IDEMBALLAGE` varchar(10) NOT NULL,
  `LIBEMBALLAGE` varchar(50) NOT NULL,
  PRIMARY KEY (`IDEMBALLAGE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `emballage`
--

INSERT INTO `emballage` (`IDEMBALLAGE`, `LIBEMBALLAGE`) VALUES
('b001', 'boite'),
('t001', 'tube');

-- --------------------------------------------------------

--
-- Structure de la table `fournisseur`
--

DROP TABLE IF EXISTS `fournisseur`;
CREATE TABLE IF NOT EXISTS `fournisseur` (
  `IDFOURNISSEUR` varchar(10) NOT NULL,
  `IDPAYS` varchar(10) NOT NULL,
  `NOMFOURNISSEUR` varchar(30) NOT NULL,
  `PRENOMFOURNISSEUR` varchar(50) NOT NULL,
  PRIMARY KEY (`IDFOURNISSEUR`),
  KEY `IDPAYS` (`IDPAYS`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `modepaiement`
--

DROP TABLE IF EXISTS `modepaiement`;
CREATE TABLE IF NOT EXISTS `modepaiement` (
  `IDPAIEMENT` varchar(10) NOT NULL,
  `LIBMPAIEMENT` varchar(50) NOT NULL,
  PRIMARY KEY (`IDPAIEMENT`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `pays`
--

DROP TABLE IF EXISTS `pays`;
CREATE TABLE IF NOT EXISTS `pays` (
  `IDPAYS` varchar(10) NOT NULL,
  `LIBPAYS` varchar(25) NOT NULL,
  PRIMARY KEY (`IDPAYS`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

DROP TABLE IF EXISTS `produits`;
CREATE TABLE IF NOT EXISTS `produits` (
  `refproduits` int NOT NULL AUTO_INCREMENT,
  `libelle` mediumtext NOT NULL,
  `prixvente` int NOT NULL,
  `codecateg` int NOT NULL,
  `IDEMBALLAGE` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `image` varchar(50) NOT NULL,
  `poids` varchar(10) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`refproduits`),
  KEY `codecateg` (`codecateg`),
  KEY `IDEMBALLAGE` (`IDEMBALLAGE`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`refproduits`, `libelle`, `prixvente`, `codecateg`, `IDEMBALLAGE`, `image`, `poids`, `description`) VALUES
(9, 'Huile de Nigelle certifiée AB biologique ', 3000, 1, 't001', 'img/nigelle.jpg', '500g', 'L\'huile de Nigelle est extraite des graines de Nigella sativa, une plante originaire d\'Asie du Sud-Ouest (communément appelée cumin noir). Aussi connue sous le nom d\'huile de graines de cumin noir ou huile de kalonji, l\'huile de nigelle sativa est une huile de couleur ambrée utilisée en cuisine. Cette huile est sans sucre et sans conservateur. Elle peut être utilisée sous forme alimentaire ou pour une utilisation cutanée pour massage externe.\r\nHuile vierge de graine de nigelle en provenance d’Egypte avec certification Bio.\r\n'),
(10, 'Huile de Fenugrec ', 3000, 5, 'b001', 'img/nigelle.jpg', '1g', 'L\'huile de Fenugrec est devenu largement populaire pour les nombreux bienfaits qu\'elle procure à l\'organisme. Cette huile de graine de fenugrec offre des propriétés biologiques et une valeur nutritive très grande de part sa richesse: Le fenugrec est riche en vitamines A, B1, B2, B3, B5, D mais aussi en fer et en phosphore. Huile haut de gamme réservée à un usage exclusivement externe utilisation pour hydrater la peau, en soin pour les cheveux ou en huile de massage.\r\nDécouvrez tous les bienfaits de l\'huile de Fenugrec : problèmes de peaux, irritation, cheveux, augmentation mammaire...\r\n');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `IDCONNNEXION` int NOT NULL AUTO_INCREMENT,
  `NOM` varchar(25) NOT NULL,
  `PRENOM` varchar(50) NOT NULL,
  `NOMUSER` varchar(50) NOT NULL,
  `MOTDEPASSE` text NOT NULL,
  PRIMARY KEY (`IDCONNNEXION`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`IDCONNNEXION`, `NOM`, `PRENOM`, `NOMUSER`, `MOTDEPASSE`) VALUES
(1, 'KOUTOUA', 'Christopher', 'TheK', 'JesuisMoi'),
(2, 'KOUTOUA', 'Isaac', 'TheK@77', 'lavieestbelle'),
(3, 'Borown', 'tytan', 'tyty09', '1'),
(4, 'Oyotodé', 'Jojoo', 'jojolastar', 'Jojojesusi'),
(5, 'Oyotodé', 'Jojoo', 'jojolastareee', 'i'),
(6, 'Oyooo', 'Jojoo', 'jojolastareeer', 'J'),
(7, 'kk', 'juty', 'lord', 'mylord'),
(8, 'Kaminari no kokyu', 'Ichi non kata', 'hekireki', 'issen hachiren'),
(9, 'H', 'll', 'pl', 'please');

-- --------------------------------------------------------

--
-- Structure de la table `voiepaiement`
--

DROP TABLE IF EXISTS `voiepaiement`;
CREATE TABLE IF NOT EXISTS `voiepaiement` (
  `IDVPAIEMENT` varchar(10) NOT NULL,
  `LIBVPAIEMENT` varchar(20) NOT NULL,
  PRIMARY KEY (`IDVPAIEMENT`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD CONSTRAINT `commandes_ibfk_1` FOREIGN KEY (`noclient`) REFERENCES `clients` (`noclient`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `commandes_ibfk_2` FOREIGN KEY (`IDPAIEMENT`) REFERENCES `modepaiement` (`IDPAIEMENT`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `commandes_ibfk_3` FOREIGN KEY (`IDVPAIEMENT`) REFERENCES `voiepaiement` (`IDVPAIEMENT`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `fournisseur`
--
ALTER TABLE `fournisseur`
  ADD CONSTRAINT `fournisseur_ibfk_1` FOREIGN KEY (`IDPAYS`) REFERENCES `pays` (`IDPAYS`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `produits`
--
ALTER TABLE `produits`
  ADD CONSTRAINT `produits_ibfk_1` FOREIGN KEY (`codecateg`) REFERENCES `categories` (`codecateg`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `produits_ibfk_2` FOREIGN KEY (`IDEMBALLAGE`) REFERENCES `emballage` (`IDEMBALLAGE`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
