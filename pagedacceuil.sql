-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  Dim 30 sep. 2018 à 15:51
-- Version du serveur :  10.1.35-MariaDB
-- Version de PHP :  7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `pagedacceuil`
--

-- --------------------------------------------------------

--
-- Structure de la table `application`
--

CREATE TABLE `application` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Lien` text NOT NULL,
  `Picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `application`
--

INSERT INTO `application` (`id`, `Name`, `Lien`, `Picture`) VALUES
(2, 'Github', 'https://www.github.com', 'github.png'),
(9, 'OpenClassrooms', 'https://openclassrooms.com/fr/dashboard', 'openclassrooms.jpg'),
(11, 'Free', 'http://mafreebox.freebox.fr/#Fbx.os.app.explorer.app', 'free.jpg'),
(12, 'hearthstoneReplay', 'https://hsreplay.net/', 'hreplay.png'),
(13, 'Youtube', 'https://www.youtube.com/?gl=FR&amp;hl=fr', 'youtube.jpg'),
(14, 'Gmail', 'https://mail.google.com/mail/u/0/#inbox', 'gmail.png'),
(15, 'Grafitkart', 'https://www.grafikart.fr/', 'grafitkart.jpg'),
(16, 'Udemy', 'https://www.udemy.com/', 'udemy.png'),
(17, 'Localhost', 'http://localhost/', 'localhost.jpg'),
(18, 'Php My admin', 'http://localhost/phpmyadmin/', 'PhpMyAdmin.png'),
(19, 'hearthstone Deck', 'http://www.hearthstone-decks.com/', 'Hearthstone-Deck.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `jour` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `event`
--

INSERT INTO `event` (`id`, `jour`, `message`) VALUES
(2, '11-10', 'Bonne Anniversaire Tryff'),
(3, '25-09', 'Entretien pour le service civique a Caden pour 10h30'),
(4, '10-06', 'Anniversaire Mon Coeur'),
(5, '28-09', 'Appeler Eveil si pas de réponse');

-- --------------------------------------------------------

--
-- Structure de la table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `backgroundimage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `settings`
--

INSERT INTO `settings` (`id`, `backgroundimage`) VALUES
(1, '510173.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `application`
--
ALTER TABLE `application`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
