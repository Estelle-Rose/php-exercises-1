-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 17 mars 2021 à 14:55
-- Version du serveur :  10.5.9-MariaDB
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `catalogue_produits`
--

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

DROP TABLE IF EXISTS `produits`;
CREATE TABLE IF NOT EXISTS `produits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `fk_tag_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_tag_id` (`fk_tag_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id`, `nom`, `image`, `description`, `fk_tag_id`) VALUES
(4, 'Les fondamentaux du Javascript et de Nodejs', 'JS.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu purus dolor. In tincidunt gravida porta. Sed vel mattis nisl, eu posuere orci. Nunc sagittis metus at enim volutpat, quis tempor eros fringilla.', 2),
(5, '35 exercices Javascript', 'JS2.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu purus dolor. In tincidunt gravida porta. Sed vel mattis nisl, eu posuere orci. Nunc sagittis metus at enim volutpat, quis tempor eros fringilla.', 2),
(6, 'Le php et ce qui l\'entoure', 'PHP.png', 'Curabitur eget lectus venenatis, tempus lorem ac, tempus metus. In dui dui, sagittis in risus sed, imperdiet tempus ante. Sed sodales est lacus, ut elementum eros placerat ac. Integer mollis ex mi, nec eleifend lacus dignissim ut. Quisque eu sem eleifend, rhoncus elit ut, ultrices dolor', 1),
(7, 'La refonte d\'un site web existant', 'PHP2.png', 'Maecenas laoreet, nibh nec elementum vulputate, ante quam facilisis diam, vel mattis nisi arcu eu leo. Aliquam id ligula sem. Nullam ut nibh et ipsum vulputate mattis sed et leo. Sed pellentesque lorem eget ex eleifend lobortis.', 1),
(8, '100 requêtes pour maîtriser SQL', 'SQL.png', 'Maecenas laoreet, nibh nec elementum vulputate, ante quam facilisis diam, vel mattis nisi arcu eu leo. Aliquam id ligula sem. Nullam ut nibh et ipsum vulputate mattis sed et leo. Sed pellentesque lorem eget ex eleifend lobortis.', 3),
(9, 'Créer des jeux web avec Phaser (v3)', 'Jeux.png', 'Quisque ornare ipsum felis, id cursus lorem tempor et. Aliquam dui ligula, finibus et sapien ac, iaculis tristique ipsum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nam suscipit purus eu purus dictum, maximus varius arcu commodo. Donec sit amet finibus sem. ', 4),
(10, '3 jeux web et leur IA', 'Jeux2.png', 'Quisque ornare ipsum felis, id cursus lorem tempor et. Aliquam dui ligula, finibus et sapien ac, iaculis tristique ipsum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nam suscipit purus eu purus dictum, maximus varius arcu commodo. Donec sit amet finibus sem. ', 4);

-- --------------------------------------------------------

--
-- Structure de la table `tags`
--

DROP TABLE IF EXISTS `tags`;
CREATE TABLE IF NOT EXISTS `tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomTag` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tags`
--

INSERT INTO `tags` (`id`, `nomTag`) VALUES
(1, 'PHP'),
(2, 'Javascript'),
(3, 'SQL'),
(4, 'Jeux');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `produits`
--
ALTER TABLE `produits`
  ADD CONSTRAINT `produits_ibfk_1` FOREIGN KEY (`fk_tag_id`) REFERENCES `tags` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
