-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 17 avr. 2025 à 19:54
-- Version du serveur : 8.3.0
-- Version de PHP : 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bowling`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(100) DEFAULT NULL,
  `mdp` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `email`, `mdp`) VALUES
(1, 'elio@bowling.fr', '1234'),
(2, 'wilson@bowling.fr', '567'),
(3, 'jeremy@bowling.fr', 'azerty');

-- --------------------------------------------------------

--
-- Structure de la table `joueur`
--

DROP TABLE IF EXISTS `joueur`;
CREATE TABLE IF NOT EXISTS `joueur` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) DEFAULT NULL,
  `prenom` varchar(100) DEFAULT NULL,
  `age` int DEFAULT NULL,
  `pseudo` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `mdp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `score_total` int DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `joueur`
--

INSERT INTO `joueur` (`id`, `nom`, `prenom`, `age`, `pseudo`, `email`, `mdp`, `score_total`) VALUES
(1, 'Martin', 'Lucas', 22, 'LStrike', 'lucas@bowling.fr', 'mdp123', 420),
(2, 'Durand', 'Émilie', 19, 'Eshot', 'emilie@bowling.fr', 'mdp456', 510),
(3, 'Nguyen', 'Alex', 25, 'AXBowler', 'alex@bowling.fr', 'mdp789', 390),
(4, 'Fernandez', 'Lea', 20, 'LeaZone', 'lea@bowling.fr', 'mdp321', 445),
(5, 'Bernard', 'Thomas', 23, 'T-Smash', 'thomas@bowling.fr', 'mdp654', 470),
(6, 'Moreau', 'Chloe', 18, 'ChloStrike', 'chloe@bowling.fr', 'mdp999', 495),
(7, 'Dubois', 'Mathis', 21, 'Mathix', 'mathis@bowling.fr', 'mdp000', 430),
(8, 'Roux', 'Camille', 22, 'CamShot', 'camille@bowling.fr', 'mdp147', 485),
(9, 'Petit', 'Noah', 24, 'NoahStorm', 'noah@bowling.fr', 'mdp258', 460),
(10, 'Blanc', 'Jade', 20, 'JadeX', 'jade@bowling.fr', 'mdp369', 440),
(11, 'aa', 'bb', 8, 'zz', 'aaa@eazaz.com', 'a', 0),
(12, 'aa', 'bb', 8, 'zz', 'aaa@eazaz.com', 'a', 0),
(13, 'aa', 'bb', 8, 'zz', 'aaa@eazaz.com', 'aezaze', 0);

-- --------------------------------------------------------

--
-- Structure de la table `tournois`
--

DROP TABLE IF EXISTS `tournois`;
CREATE TABLE IF NOT EXISTS `tournois` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `lieu` varchar(100) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `tournois`
--

INSERT INTO `tournois` (`id`, `nom`, `date`, `lieu`, `description`) VALUES
(2, 'Nocturne du Strike', '2025-07-03', 'Bowling Grand Reims', 'Tournoi de nuit avec ambiance musicale, réservé aux plus de 18 ans. Tenu correcte obligé.'),
(3, 'Coupe Été Jeunes', '2025-08-12', 'Bowling Kids Zone, Lyon', 'Tournoi spécial jeunes de moins de 18 ans.'),
(4, 'Championnat Régional', '2025-09-01', 'Bowling Bordeaux Sud', 'Tournoi officiel comptant pour le classement régional.'),
(5, 'Tournoi Halloween', '2025-10-31', 'Bowling Enchanté, Nantes', 'Tournoi déguisé avec animations et lots à gagner.'),
(6, 'Strike de Noël', '2025-12-20', 'Bowling Saint-Lazare, Paris', 'Tournoi festif de fin d’année avec vin chaud et chocolats offerts.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
