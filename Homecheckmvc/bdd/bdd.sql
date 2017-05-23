-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Lun 22 Mai 2017 à 16:13
-- Version du serveur :  10.1.21-MariaDB
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bdd`
--

-- --------------------------------------------------------

--
-- Structure de la table `capteur/actionneur`
--

CREATE TABLE `capteur/actionneur` (
  `numero de serie` varchar(255) NOT NULL,
  `id-piece` int(255) NOT NULL,
  `reference` varchar(255) NOT NULL,
  `type` int(255) NOT NULL COMMENT '1: fumée',
  `description` varchar(255) NOT NULL,
  `etat` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `information`
--

CREATE TABLE `information` (
  `id` int(255) NOT NULL,
  `numero de serie` varchar(255) NOT NULL,
  `id-logement` int(255) NOT NULL,
  `donnees physiques` int(255) NOT NULL,
  `temps` int(255) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `logement`
--

CREATE TABLE `logement` (
  `id` int(255) NOT NULL,
  `type` int(2) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `code postal` int(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `superficie` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `logement`
--

INSERT INTO `logement` (`id`, `type`, `adresse`, `code postal`, `ville`, `superficie`) VALUES
(1, 2, '57 rue Sedaine', 75011, 'PARIS', 50);

-- --------------------------------------------------------

--
-- Structure de la table `messagerie`
--

CREATE TABLE `messagerie` (
  `id` int(11) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `messagerie`
--

INSERT INTO `messagerie` (`id`, `nom`, `mail`, `telephone`, `message`) VALUES
(2, 'iribarne', 'natho-metal@hotmail.fr', '00000000', 'test'),
(3, 'iribarne', 'natho-metal@hotmail.fr', '00000000', 'test'),
(4, 'manon', 'iribarne.manon@gmail.com', '000000000', 'helo'),
(5, 'SUBLIME', 'iribarne.manon@gmail.com', '0758391321', 'luc'),
(6, 'jjsnsx', 'manon@juniorisep.com', '0758391323', 'manon'),
(7, 'rodin', 'loli@hksqd.com', '0758391320', 'try'),
(8, 'tujkl', 'miribarne@juniorisep.com', '00000000', 'on essai');

-- --------------------------------------------------------

--
-- Structure de la table `piece`
--

CREATE TABLE `piece` (
  `id` int(255) NOT NULL,
  `id-logement` int(255) NOT NULL,
  `nombre de capteurs` int(255) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `piece`
--

INSERT INTO `piece` (`id`, `id-logement`, `nombre de capteurs`, `nom`) VALUES
(1, 1, 3, 'CUISINE'),
(2, 1, 1, 'SALLE DE BAIN'),
(3, 1, 3, 'CHAMBRE');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(255) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `identifiant` varchar(100) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  `date de naissance` date NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `numero` int(11) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `code postal` int(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `type` int(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `identifiant`, `mdp`, `date de naissance`, `telephone`, `mail`, `numero`, `adresse`, `code postal`, `ville`, `type`, `message`) VALUES
(1, 'SUBLIME', 'jérémie', 'jeremie.sublime@isep.fr', 'Motdepasse', '2017-05-11', '0657485768', 'jeremie.sublime@isep.fr', 10, 'Abbé groult', 75011, 'paris', 1, 'jcsjqcb');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur_logement`
--

CREATE TABLE `utilisateur_logement` (
  `id` int(255) NOT NULL,
  `id-logement` int(255) NOT NULL,
  `id-utilisateur` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `capteur/actionneur`
--
ALTER TABLE `capteur/actionneur`
  ADD PRIMARY KEY (`numero de serie`);

--
-- Index pour la table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `logement`
--
ALTER TABLE `logement`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `messagerie`
--
ALTER TABLE `messagerie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `piece`
--
ALTER TABLE `piece`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur_logement`
--
ALTER TABLE `utilisateur_logement`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `messagerie`
--
ALTER TABLE `messagerie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
