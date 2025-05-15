-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 13 mai 2025 à 16:12
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `simple-blog`
--

CREATE TABLE `simple-blog` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(100) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `simple-blog`
--

INSERT INTO `simple-blog` (`id`, `title`, `author`, `content`) VALUES
(5, '🌍 On Life', 'BY Sholom Aleichem', '&quot;Life is a dream for the wise, a game for the fool, a comedy for the rich, a tragedy for the poor.&quot;'),
(6, '💼  On Work', 'BY  Derek Jeter', '\"There may be people who have more talent than you, but there’s no excuse for anyone to work harder than you do.\"'),
(7, '🌞 On Happiness', ' BY Mahatma Gandhi', '\"Happiness is not doing what you like. It’s liking what you do.\"');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `simple-blog`
--
ALTER TABLE `simple-blog`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `simple-blog`
--
ALTER TABLE `simple-blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
