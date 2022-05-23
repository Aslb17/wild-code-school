-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : jeu. 19 mai 2022 à 13:57
-- Version du serveur :  5.7.34
-- Version de PHP : 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `jason`
--

-- --------------------------------------------------------

--
-- Structure de la table `argonautes`
--

CREATE TABLE `argonautes` (
  `id` int(11) NOT NULL,
  `nom` varchar(128) NOT NULL,
  `qualités` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `argonautes`
--

INSERT INTO `argonautes` (`id`, `nom`, `qualités`) VALUES
(1, 'Eleftheria', 'premier inscrit'),
(2, 'Gennadios', 'deuxième inscrit'),
(3, 'Lysimachos', 'troisième inscrit'),
(4, 'test', 'no idea');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `argonautes`
--
ALTER TABLE `argonautes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `argonautes`
--
ALTER TABLE `argonautes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
