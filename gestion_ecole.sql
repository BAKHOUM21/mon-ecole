-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 07 mai 2024 à 15:46
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestion_ecole`
--

-- --------------------------------------------------------

--
-- Structure de la table `mes_chapitres`
--

CREATE TABLE `mes_chapitres` (
  `Id` int(11) NOT NULL,
  `Libelle_cours` varchar(300) NOT NULL,
  `Libelle_exos` varchar(100) NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `categories` varchar(30) NOT NULL,
  `niveau` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `mes_chapitres`
--

INSERT INTO `mes_chapitres` (`Id`, `Libelle_cours`, `Libelle_exos`, `Nom`, `categories`, `niveau`) VALUES
(1, '../img/Maths/SENEMATHS-6ème.pdf', '../img/Maths/Exos/Adem-Maths-6e.pdf', 'Cours  Maths 6iem', 'Math', '6iem'),
(2, '../img/Maths/SENEMATHS-5ème.pdf', '../img/Maths/Exos/Adem-Maths-5iem.pdf', 'Cours  Maths 5iem', 'Math', '5iem'),
(3, '../img/Maths/SENEMATHS 4eme.pdf', '../img/Maths/Exos/Adem-Maths-4iem.pdf', 'Cours  Maths 4iem', 'Math', '4iem'),
(4, '../img/PC/ADEM_FASCICULE_PC_4eme_v10_17.pdf', '../img/PC/Exos/ADEM-PC-4em.pdf', 'Cours  PC 4iem', 'PC', '4iem'),
(5, '../img/Maths/SENEMATHS-3iem.pdf', '../img/Maths/Exos/SENEMATHS-3iem.pdf', 'Math 3iem', 'Math', '3iem'),
(6, '../img/PC/Cours_physiques BFEM.pdf', '../img/PC/Exos/ADEM-PC-4em.pdf', 'PC 3iem', 'PC', '3iem'),
(7, '../img/Maths/SENEMATHS 4eme.pdf', '../img/Maths/Exos/', 'Cour Math 2nd S', 'Math', '2nd S'),
(8, '../img/PC/Physique_2nde_S.pdf', '../img/PC/Exos/', 'Cour PC 2nd S', 'PC', '2nd S'),
(9, '../img/Maths/SENEMATHS 4eme.pdf', '../img/Maths/Exos/', 'Cour Math 1ere S', 'Math', '1ere S'),
(10, '../img/PC/Physique_1ere_S.pdf', '../img/PC/Exos/', 'Cour PC 1ere S', 'PC', '1ere S'),
(11, '../img/Maths/SENEMATHS 4eme.pdf', '../img/Maths/Exos/', 'Cours  Maths TS', 'Math', 'Tle S'),
(12, '../img/PC/Chimie_tle.pdf', '../img/PC/Exos/', 'Cours  PC TS', 'PC', 'Tle S');

-- --------------------------------------------------------

--
-- Structure de la table `mes_cours`
--

CREATE TABLE `mes_cours` (
  `Id_cours` int(11) NOT NULL,
  `Nom` varchar(256) NOT NULL,
  `Id_formation` int(11) NOT NULL,
  `Id_module` int(11) NOT NULL,
  `niveau` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `mes_cours`
--

INSERT INTO `mes_cours` (`Id_cours`, `Nom`, `Id_formation`, `Id_module`, `niveau`) VALUES
(1, 'Maths', 1, 1, 'quatrieme'),
(2, 'PC', 1, 1, 'quatrieme');

-- --------------------------------------------------------

--
-- Structure de la table `niveau`
--

CREATE TABLE `niveau` (
  `Id` int(11) NOT NULL,
  `Libelle` varchar(30) NOT NULL,
  `Nom` varchar(20) NOT NULL,
  `categories` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `niveau`
--

INSERT INTO `niveau` (`Id`, `Libelle`, `Nom`, `categories`) VALUES
(1, 'sixieme', '6iem', 'college'),
(2, 'cinquieme', '5iem', 'college'),
(3, 'quatrieme', '4iem', 'college'),
(4, 'troisieme', '3iem', 'college'),
(5, 'seconde S', '2nd S', 'lycee'),
(6, 'seconde L', '2nd L', 'lycee'),
(7, 'premiere S', '1ere S', 'lycee'),
(8, 'premiere L', '1ere L', 'lycee'),
(9, 'terminale S', 'Tle S', 'lycee'),
(10, 'terminale L', 'Tle L', 'lycee');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `mes_chapitres`
--
ALTER TABLE `mes_chapitres`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `mes_cours`
--
ALTER TABLE `mes_cours`
  ADD PRIMARY KEY (`Id_cours`);

--
-- Index pour la table `niveau`
--
ALTER TABLE `niveau`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `mes_chapitres`
--
ALTER TABLE `mes_chapitres`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=193;

--
-- AUTO_INCREMENT pour la table `mes_cours`
--
ALTER TABLE `mes_cours`
  MODIFY `Id_cours` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `niveau`
--
ALTER TABLE `niveau`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
