-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  mer. 13 sep. 2017 à 12:54
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `starwars`
--

-- --------------------------------------------------------

--
-- Structure de la table `characters`
--

CREATE TABLE `characters` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `height` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `specie_id` int(11) NOT NULL,
  `planet_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `characters`
--

INSERT INTO `characters` (`id`, `name`, `height`, `weight`, `specie_id`, `planet_id`) VALUES
(1, 'Luke Skywalker', 172, 77, 1, 1),
(2, 'R2-D2', 96, 32, 2, 2);

-- --------------------------------------------------------

--
-- Structure de la table `characters_films`
--

CREATE TABLE `characters_films` (
  `character_id` int(11) NOT NULL,
  `film_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `climats`
--

CREATE TABLE `climats` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `climats`
--

INSERT INTO `climats` (`id`, `name`) VALUES
(1, 'Tempéré'),
(2, 'Aride');

-- --------------------------------------------------------

--
-- Structure de la table `films`
--

CREATE TABLE `films` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `release_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `planets`
--

CREATE TABLE `planets` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `rotation` int(11) NOT NULL,
  `revolution` int(11) NOT NULL,
  `diameter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `planets`
--

INSERT INTO `planets` (`id`, `name`, `rotation`, `revolution`, `diameter`) VALUES
(1, 'Alderaan', 24, 364, 12500),
(2, 'Yavin IV', 24, 4818, 10200);

-- --------------------------------------------------------

--
-- Structure de la table `planets_climats`
--

CREATE TABLE `planets_climats` (
  `planet_id` int(11) NOT NULL,
  `climat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `planets_climats`
--

INSERT INTO `planets_climats` (`planet_id`, `climat_id`) VALUES
(1, 1),
(2, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Structure de la table `species`
--

CREATE TABLE `species` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `species`
--

INSERT INTO `species` (`id`, `name`) VALUES
(1, 'Humain'),
(2, 'Droïde');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `characters`
--
ALTER TABLE `characters`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `characters_films`
--
ALTER TABLE `characters_films`
  ADD PRIMARY KEY (`character_id`,`film_id`);

--
-- Index pour la table `climats`
--
ALTER TABLE `climats`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `planets`
--
ALTER TABLE `planets`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `planets_climats`
--
ALTER TABLE `planets_climats`
  ADD PRIMARY KEY (`planet_id`,`climat_id`);

--
-- Index pour la table `species`
--
ALTER TABLE `species`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `characters`
--
ALTER TABLE `characters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `climats`
--
ALTER TABLE `climats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `films`
--
ALTER TABLE `films`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `planets`
--
ALTER TABLE `planets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `species`
--
ALTER TABLE `species`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
