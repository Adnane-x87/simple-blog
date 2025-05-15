-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 15 mai 2025 à 13:15
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
(8, 'Tips for Better Sleep Quality', 'Michael Lee', 'Create a relaxing bedtime routine to signal your body it&#039;s time to rest. Keep your bedroom cool and dark for optimal comfort. Avoid caffeine and heavy meals late in the day. Limit screen time before sleeping to reduce blue light exposure. Practice deep breathing or meditation to calm your mind. Stick to a consistent sleep schedule, even on weekends. Make your bed comfortable with good pillows and mattress.'),
(9, 'How to Build Healthy Habits', 'Sarah Johnson', 'Wake up at the same time every day to set a consistent rhythm. Drink a glass of water first thing to hydrate your body. Spend a few minutes journaling to clear your mind and set intentions. Take short walks during breaks to refresh your focus. Avoid screens at least an hour before bedtime for better sleep. Celebrate small wins to stay motivated. Practice gratitude daily to improve your mindset.\r\n'),
(10, 'Effective Ways to Manage Stress', 'Emily Roberts', 'Take deep breaths whenever you feel overwhelmed to calm your nervous system. Break big problems into smaller, manageable steps. Stay physically active, as exercise releases tension and boosts mood. Connect with friends or family to share your feelings. Prioritize sleep to help your body recover. Limit caffeine and sugar intake, which can increase anxiety. Practice mindfulness to stay present and reduce worry.\r\n\r\n');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
