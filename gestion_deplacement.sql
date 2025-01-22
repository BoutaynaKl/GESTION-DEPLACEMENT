-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 09 juin 2022 à 03:27
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestion_deplacement`
--

-- --------------------------------------------------------

--
-- Structure de la table `deplacement`
--

DROP TABLE IF EXISTS `deplacement`;
CREATE TABLE IF NOT EXISTS `deplacement` (
  `id_deplacement` int(10) NOT NULL AUTO_INCREMENT,
  `heure_depart` varchar(6) NOT NULL,
  `heure_retour` varchar(6) NOT NULL,
  `ville_depart` varchar(30) NOT NULL,
  `ville_arrivee` varchar(30) NOT NULL,
  `date_depart` date NOT NULL,
  `date_arrivee` date NOT NULL,
  `forfait` int(10) NOT NULL,
  `nb_jours` int(10) DEFAULT NULL,
  `nb_repas` int(10) DEFAULT NULL,
  `id_employe` int(50) NOT NULL,
  `id_mission` int(10) NOT NULL,
  PRIMARY KEY (`id_deplacement`),
  KEY `id_mission` (`id_mission`),
  KEY `id_employe` (`id_employe`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `deplacement`
--

INSERT INTO `deplacement` (`id_deplacement`, `heure_depart`, `heure_retour`, `ville_depart`, `ville_arrivee`, `date_depart`, `date_arrivee`, `forfait`, `nb_jours`, `nb_repas`, `id_employe`, `id_mission`) VALUES
(1, '10:00', '22:00', 'beni mellal', 'rabat', '2022-06-02', '2022-07-08', 1000, 36, 104, 1, 1),
(2, '09:00', '17:00', 'beni mellal', 'casablanca', '2022-06-01', '2022-06-08', 900, 7, 17, 2, 3),
(3, '07:00', '21:00 ', 'beni mellal', 'rabat', '2022-06-02', '2022-06-08', 1140, 6, 14, 3, 2),
(4, '06:00', '15:00 ', 'beni mellal', 'eljadida', '2022-06-03', '2022-06-10', 1200, 7, 17, 9, 3),
(5, '09:00', '22:00 ', 'beni mellal', 'casablanca', '2022-06-01', '2022-06-08', 1000, 7, 17, 7, 6),
(6, '06:00', '17:00 ', 'beni mellal', 'tanger', '2022-06-05', '2022-06-10', 800, 5, 11, 6, 4),
(7, '07:00', '17:00 ', 'beni mellal', 'khouribgua', '2022-06-06', '2022-06-10', 700, 4, 8, 8, 4),
(8, '07:00', '23:00 ', 'beni mellal', 'casablanca', '2022-06-01', '2022-06-08', 1000, 7, 17, 4, 1),
(9, '08:00', '22:00 ', 'beni mellal', 'eljadida', '2022-06-03', '2022-06-10', 1100, 7, 17, 5, 3);

-- --------------------------------------------------------

--
-- Structure de la table `employe`
--

DROP TABLE IF EXISTS `employe`;
CREATE TABLE IF NOT EXISTS `employe` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `n_ordre` int(10) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `rib` int(30) NOT NULL,
  `echelle` int(10) NOT NULL,
  `taux` int(10) DEFAULT NULL,
  `cadre` varchar(30) NOT NULL,
  `id_deplacement` int(10) DEFAULT NULL,
  `id_vehicule` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_deplacement` (`id_deplacement`),
  KEY `id_vehicule` (`id_vehicule`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `employe`
--

INSERT INTO `employe` (`id`, `n_ordre`, `nom`, `prenom`, `adresse`, `email`, `tel`, `rib`, `echelle`, `taux`, `cadre`, `id_deplacement`, `id_vehicule`) VALUES
(2, 2, 'employe22', 'employe2', 'adresse2', 'employe2@gmail.com', '0623422346', 230098386, 11, 80, 'cadre2', NULL, NULL),
(3, 3, 'employe3', 'employe3', 'adresse3', 'employe3@gmail.com', '0605861489', 230055754, 10, 60, 'cadre3', NULL, NULL),
(5, 5, 'employ5', 'employe5', 'adresse5', 'employe5@gmail.com', '0689871489', 230041298, 8, 40, 'cadre5', NULL, NULL),
(6, 6, 'employ6', 'employe6', 'adresse6', 'employe6@gmail.com', '0617761489', 230012348, 8, 40, 'cadre6', NULL, NULL),
(7, 7, 'employ7', 'employe7', 'adresse7', 'employe7@gmail.com', '0776574327', 230095732, 7, 40, 'cadre7', NULL, NULL),
(8, 8, 'employ8', 'employe8', 'adresse8', 'employe8@gmail.com', '0689323454', 230098384, 11, 80, 'cadre8', NULL, NULL),
(9, 9, 'employ9', 'employe9', 'adresse9', 'employe9@gmail.com', '0677836354', 230034578, 9, 60, 'cadre9', NULL, NULL),
(10, 10, 'employ10', 'employe10', 'adresse10', 'employe10@gmail.com', '0678754788', 230765389, 12, 100, 'cadre10', NULL, NULL),
(13, 11, 'employe11', 'employe11', 'adresse11', 'employe11@gmail.com', '1234', 2345, 60, 0, 'cadre11', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `mission`
--

DROP TABLE IF EXISTS `mission`;
CREATE TABLE IF NOT EXISTS `mission` (
  `id_mission` int(10) NOT NULL AUTO_INCREMENT,
  `intitule` varchar(50) NOT NULL,
  PRIMARY KEY (`id_mission`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `mission`
--

INSERT INTO `mission` (`id_mission`, `intitule`) VALUES
(1, 'mission1234'),
(2, 'mission2'),
(3, 'mission3'),
(4, 'mission4'),
(5, 'mission5'),
(6, 'mission623'),
(8, 'mission7');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id_user` int(10) NOT NULL AUTO_INCREMENT,
  `login` varchar(30) NOT NULL,
  `mot_de_passe` varchar(30) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_user`, `login`, `mot_de_passe`) VALUES
(2, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `vehicule`
--

DROP TABLE IF EXISTS `vehicule`;
CREATE TABLE IF NOT EXISTS `vehicule` (
  `id_vehicule` int(10) NOT NULL AUTO_INCREMENT,
  `immatricule` varchar(10) NOT NULL,
  `marque` varchar(20) NOT NULL,
  `id_deplacement` int(10) NOT NULL,
  `etat` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_vehicule`),
  KEY `id_deplacement` (`id_deplacement`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `vehicule`
--

INSERT INTO `vehicule` (`id_vehicule`, `immatricule`, `marque`, `id_deplacement`, `etat`) VALUES
(1, 'A12356', 'dacia', 1, 'occupee'),
(2, 'A12356', 'dacia', 2, 'occupee'),
(3, 'B12346', 'dacia', 3, 'libre'),
(4, 'A12356', 'dacia', 4, 'occupee'),
(5, 'A12356', 'dacia', 5, 'occupee'),
(6, 'A12356', 'dacia', 6, 'occupee'),
(7, 'L123456', 'fiat', 7, 'libre'),
(8, 'B12346', 'dacia', 9, 'libre'),
(9, 'M1234', 'dacia', 10, 'libre');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
