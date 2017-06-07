-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Mer 07 Juin 2017 à 15:56
-- Version du serveur :  5.7.18-0ubuntu0.17.04.1
-- Version de PHP :  7.0.18-0ubuntu0.17.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `footgolf`
--

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `color` varchar(7) DEFAULT NULL,
  `start` datetime NOT NULL,
  `end` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `events`
--

INSERT INTO `events` (`id`, `title`, `color`, `start`, `end`) VALUES
(1, 'All Day Event', '#40E0D0', '2016-01-01 00:00:00', '0000-00-00 00:00:00'),
(2, 'Long Event', '#FF0000', '2016-01-07 00:00:00', '2016-01-10 00:00:00'),
(3, 'Repeating Event', '#0071c5', '2016-01-09 16:00:00', '0000-00-00 00:00:00'),
(4, 'Conference', '#40E0D0', '2016-01-11 00:00:00', '2016-01-13 00:00:00'),
(5, 'Meeting', '#000', '2016-01-12 10:30:00', '2016-01-12 12:30:00'),
(6, 'Lunch', '#0071c5', '2016-01-12 12:00:00', '0000-00-00 00:00:00'),
(7, 'Happy Hour', '#0071c5', '2016-01-12 17:30:00', '0000-00-00 00:00:00'),
(8, 'Dinner', '#0071c5', '2016-01-12 20:00:00', '0000-00-00 00:00:00'),
(9, 'Birthday Party', '#FFD700', '2016-01-14 07:00:00', '2016-01-14 07:00:00'),
(10, 'Double click to change', '#008000', '2016-01-28 00:00:00', '0000-00-00 00:00:00'),
(15, 'Rebonjour', '#0071c5', '2017-06-15 00:00:00', '2017-06-16 00:00:00'),
(16, 'Deuxième Golf', '#008000', '2017-05-30 00:00:00', '2017-05-31 00:00:00'),
(23, 'Golf du Coudray', '#40E0D0', '2017-06-01 00:00:00', '2017-06-02 00:00:00'),
(25, 'Golf de Torcy', '#0071c5', '2017-06-17 00:00:00', '2017-06-18 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `golf`
--

CREATE TABLE `golf` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `source` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `golf`
--

INSERT INTO `golf` (`id`, `name`, `adresse`, `source`) VALUES
(1, 'Golf de Torcy', 'Golf de Torcy (77) - Rue du Parc de Loisir de Torcy, 77200 Torcy', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.6117239942373!2d2.6621683156746383!3d48.865613979288256!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e61ac1221ac1d3%3A0x615ddb66a7da1135!2sGolf+de+Torcy!5e0!3m2!1sfr!2sfr!4v1496136129002\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen>'),
(2, 'Golf du Coudray', 'Golf du Coudray (91) - Avenue du Coudray, 91830 Le Coudray-Montceaux', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2640.48052115077!2d2.5055947156639284!3d48.562344779259654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e5e664c9b49e5d%3A0x8ed39bf39d0dc31!2sExclusiv+Golf+du+Coudray!5e0!3m2!1sfr!2sfr!4v1496136368979\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen>'),
(3, 'Golf du Lys', 'Golf du Lys Lamorlaye Chantilly (60) - Rond-point du Grand Cerf, 60260 Lamorlaye', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2608.5297664045247!2d2.413389915685495!3d49.17153317931937!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e646194ca53efb%3A0xee59227df2e686b8!2sClub+du+Lys+Chantilly!5e0!3m2!1sfr!2sfr!4v1496136475715\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen>');

-- --------------------------------------------------------

--
-- Structure de la table `upload`
--

CREATE TABLE `upload` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `type` varchar(30) NOT NULL,
  `size` int(11) NOT NULL,
  `content` mediumblob NOT NULL,
  `ref` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) CHARACTER SET utf8 NOT NULL,
  `lastname` varchar(255) CHARACTER SET utf8 NOT NULL,
  `pack` varchar(75) CHARACTER SET utf8 NOT NULL,
  `mail` varchar(255) CHARACTER SET utf8 NOT NULL,
  `pass` varchar(255) CHARACTER SET utf8 NOT NULL,
  `age` int(2) NOT NULL,
  `sexe` varchar(30) CHARACTER SET utf8 NOT NULL,
  `cm` varchar(30) CHARACTER SET utf8 NOT NULL,
  `ville` varchar(100) CHARACTER SET utf8 NOT NULL,
  `adresse` text CHARACTER SET utf8 NOT NULL,
  `phone` int(15) NOT NULL,
  `admin` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `pack`, `mail`, `pass`, `age`, `sexe`, `cm`, `ville`, `adresse`, `phone`, `admin`) VALUES
(1, 'admin', 'BucKz', 'packLoisirs', 'lefevre.maxime96@gmail.com', '0706025b2bbcec1ed8d64822f4eccd96314938d0', 20, 'Alien', 'Non', 'Paris', '11, rue du clos', 768313937, 1);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `golf`
--
ALTER TABLE `golf`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mail` (`mail`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT pour la table `golf`
--
ALTER TABLE `golf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
