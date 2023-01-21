-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 21 jan. 2023 à 11:19
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `maison_connect`
--

-- --------------------------------------------------------

--
-- Structure de la table `consommation`
--

CREATE TABLE `consommation` (
  `Id_conso` int(11) NOT NULL,
  `Conso_kWh` double DEFAULT NULL,
  `Duree_conso_en_h` decimal(15,2) DEFAULT NULL,
  `Date_conso` date DEFAULT NULL,
  `Id_Ressource` int(11) NOT NULL,
  `Id_Appareil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `consommation`
--

INSERT INTO `consommation` (`Id_conso`, `Conso_kWh`, `Duree_conso_en_h`, `Date_conso`, `Id_Ressource`, `Id_Appareil`) VALUES
(1, 1500, '2.00', '2023-01-03', 1, 1),
(2, 1600, '2.00', '2023-01-03', 2, 1),
(3, 1555, '3.00', '2023-01-04', 1, 2),
(4, 800, '0.50', '2023-01-04', 2, 2),
(5, 1980, '1.00', '2023-01-21', 1, 1),
(6, 6000, '4.00', '2023-01-21', 2, 1),
(7, 250, '4.00', '2022-12-19', 1, 1),
(8, 600, '3.00', '2022-12-20', 1, 1),
(9, 790, '5.00', '2023-01-27', 2, 1),
(10, 460, '7.00', '2023-01-28', 2, 2);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `consommation`
--
ALTER TABLE `consommation`
  ADD PRIMARY KEY (`Id_conso`),
  ADD KEY `Id_Ressource` (`Id_Ressource`),
  ADD KEY `Id_Appareil` (`Id_Appareil`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `consommation`
--
ALTER TABLE `consommation`
  MODIFY `Id_conso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `consommation`
--
ALTER TABLE `consommation`
  ADD CONSTRAINT `consommation_ibfk_1` FOREIGN KEY (`Id_Ressource`) REFERENCES `ressource` (`Id_ressource`),
  ADD CONSTRAINT `consommation_ibfk_2` FOREIGN KEY (`Id_Appareil`) REFERENCES `appareil` (`Id_appareil`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
