-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 04 août 2023 à 00:19
-- Version du serveur : 8.0.28
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `combase`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `IDCATEGORIE` varchar(10) NOT NULL,
  `LIBCATEGORIE` varchar(50) NOT NULL,
  PRIMARY KEY (`IDCATEGORIE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `IDCLIENT` varchar(10) NOT NULL,
  `NOM` varchar(25) NOT NULL,
  `PRENOM` varchar(50) NOT NULL,
  `VILLE` varchar(50) NOT NULL,
  `CLI_PARRAIN` int DEFAULT NULL,
  PRIMARY KEY (`IDCLIENT`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `IDCOMMANDE` varchar(10) NOT NULL,
  `IDCLIENT` varchar(10) NOT NULL,
  `IDPAIEMENT` varchar(10) NOT NULL,
  `IDVPAIEMENT` varchar(10) NOT NULL,
  `CHOIXVPAIEMENT` varchar(100) NOT NULL,
  `DATECOMMANDE` date NOT NULL,
  PRIMARY KEY (`IDCOMMANDE`),
  KEY `FK_EFFECTUER` (`IDVPAIEMENT`),
  KEY `FK_PASSER` (`IDCLIENT`),
  KEY `FK_PAYER` (`IDPAIEMENT`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `conditionner`
--

DROP TABLE IF EXISTS `conditionner`;
CREATE TABLE IF NOT EXISTS `conditionner` (
  `IDPRODUIT` varchar(10) NOT NULL,
  `IDEMBALLAGE` varchar(10) NOT NULL,
  `DATECONDITIONNER` timestamp NOT NULL,
  PRIMARY KEY (`IDPRODUIT`,`IDEMBALLAGE`),
  KEY `FK_CONDITIONNER2` (`IDEMBALLAGE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `contenir`
--

DROP TABLE IF EXISTS `contenir`;
CREATE TABLE IF NOT EXISTS `contenir` (
  `IDCOMMANDE` varchar(10) NOT NULL,
  `IDPRODUIT` varchar(10) NOT NULL,
  `QUANTITTE` int NOT NULL,
  `PRIXVENTE` int NOT NULL,
  PRIMARY KEY (`IDCOMMANDE`,`IDPRODUIT`),
  KEY `FK_CONTENIR2` (`IDPRODUIT`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
  KEY `FK_ABRITER` (`IDPAYS`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `IDIMAGE` varchar(10) NOT NULL,
  `DESCRIPTION` text NOT NULL,
  `CHEMIN` varchar(255) NOT NULL,
  PRIMARY KEY (`IDIMAGE`)
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
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `IDPRODUIT` varchar(10) NOT NULL,
  `IDCATEGORIE` varchar(10) DEFAULT NULL,
  `IDFOURNISSEUR` varchar(10) NOT NULL,
  `LIBPRODUIT` varchar(50) NOT NULL,
  `CASIER` varchar(10) NOT NULL,
  PRIMARY KEY (`IDPRODUIT`),
  KEY `FK_APPARTENIR` (`IDCATEGORIE`),
  KEY `FK_FOURNIR` (`IDFOURNISSEUR`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `IDCONNNEXION` decimal(8,0) NOT NULL,
  `NOM` varchar(25) NOT NULL,
  `PRENOM` varchar(50) NOT NULL,
  `NOMUSER` varchar(50) NOT NULL,
  `MOTDEPASSE` text NOT NULL,
  PRIMARY KEY (`IDCONNNEXION`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `FK_EFFECTUER` FOREIGN KEY (`IDVPAIEMENT`) REFERENCES `voiepaiement` (`IDVPAIEMENT`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_PASSER` FOREIGN KEY (`IDCLIENT`) REFERENCES `client` (`IDCLIENT`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_PAYER` FOREIGN KEY (`IDPAIEMENT`) REFERENCES `modepaiement` (`IDPAIEMENT`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `conditionner`
--
ALTER TABLE `conditionner`
  ADD CONSTRAINT `FK_CONDITIONNER` FOREIGN KEY (`IDPRODUIT`) REFERENCES `produit` (`IDPRODUIT`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_CONDITIONNER2` FOREIGN KEY (`IDEMBALLAGE`) REFERENCES `emballage` (`IDEMBALLAGE`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `contenir`
--
ALTER TABLE `contenir`
  ADD CONSTRAINT `FK_CONTENIR` FOREIGN KEY (`IDCOMMANDE`) REFERENCES `commande` (`IDCOMMANDE`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_CONTENIR2` FOREIGN KEY (`IDPRODUIT`) REFERENCES `produit` (`IDPRODUIT`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `fournisseur`
--
ALTER TABLE `fournisseur`
  ADD CONSTRAINT `FK_ABRITER` FOREIGN KEY (`IDPAYS`) REFERENCES `pays` (`IDPAYS`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `FK_APPARTENIR` FOREIGN KEY (`IDCATEGORIE`) REFERENCES `categorie` (`IDCATEGORIE`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_FOURNIR` FOREIGN KEY (`IDFOURNISSEUR`) REFERENCES `fournisseur` (`IDFOURNISSEUR`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
