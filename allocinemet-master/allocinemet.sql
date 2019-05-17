-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Ven 17 Mai 2019 à 16:05
-- Version du serveur :  5.7.25-0ubuntu0.18.04.2
-- Version de PHP :  7.2.15-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `allocinemet`
--

-- --------------------------------------------------------

--
-- Structure de la table `ACTEUR`
--

CREATE TABLE `ACTEUR` (
  `id_acteur` int(11) NOT NULL,
  `nom_acteur` varchar(50) NOT NULL,
  `prenom_acteur` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `ACTEUR`
--

INSERT INTO `ACTEUR` (`id_acteur`, `nom_acteur`, `prenom_acteur`) VALUES
(1, 'Brie', 'Larson'),
(2, 'Samuel', 'Jackson'),
(3, 'Jude', 'Law'),
(4, 'Chris', 'Evans'),
(5, 'Scarlett', 'Johansson'),
(6, 'Robert', 'Downey jr.'),
(7, 'Chris ', 'Hemsworth'),
(8, 'Silvester', 'Stallone'),
(9, 'Micheal B.', 'Jordan'),
(10, 'Collin', 'Farrel'),
(11, 'alexandre', 'Astier'),
(12, 'Christian', 'Clavier'),
(13, 'Chris', 'Patt'),
(14, 'Karren', 'Gillan'),
(15, 'Bradley', 'Cooper'),
(16, 'Lady', 'Gaga'),
(17, 'Ben', 'Affleck'),
(18, 'Jason', 'Momoa'),
(19, 'Ezra', 'Miller');

-- --------------------------------------------------------

--
-- Structure de la table `appartient`
--

CREATE TABLE `appartient` (
  `id_genre` int(11) NOT NULL,
  `id_film` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `appartient`
--

INSERT INTO `appartient` (`id_genre`, `id_film`) VALUES
(1, 1),
(2, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(2, 5),
(7, 6),
(5, 7),
(3, 8),
(5, 8);

-- --------------------------------------------------------

--
-- Structure de la table `etre`
--

CREATE TABLE `etre` (
  `id_role` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `FILM`
--

CREATE TABLE `FILM` (
  `id_film` int(11) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `resume` text NOT NULL,
  `affiche` varchar(100) NOT NULL,
  `bande_annonce` text NOT NULL,
  `date_de_sortie` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `FILM`
--

INSERT INTO `FILM` (`id_film`, `titre`, `resume`, `affiche`, `bande_annonce`, `date_de_sortie`) VALUES
(1, 'Captain Marvel', 'Captain Marvel ou Capitaine Marvel au Québec est un film de super-héros américain réalisé par Anna Boden et Ryan Fleck, sorti en 2019. Il s\'agit du vingt-et-unième film de l\'univers cinématographique Marvel, débuté en 2008 et du neuvième de la phase III, mettant en scène le super-héros le plus puissant de cet univers.', 'img/capmar.jpeg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/0LHxvxdRnYc\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2019-03-06'),
(2, ' creed 2', 'La vie est devenue un numéro d\'équilibriste pour Adonis Creed. Entre ses obligations personnelles et son entraînement pour son prochain grand match, il est à la croisée des chemins. L\'enjeu du combat est d\'autant plus élevé que son rival est lié au passé de sa famille. Toutefois, il peut compter sur la présence de Rocky Balboa à ses côtés : avec lui, il comprendra ce qui vaut la peine de se battre et découvrira qu\'il n\'y a rien de plus important que les valeurs familiales.', 'img/crd.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/0O3EGU1xH1o\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2019-04-11'),
(3, 'Avengers endgame', 'Avengers: Endgame ou Avengers : Phase finale au Québec est un film américain réalisé par Anthony et Joe Russo, sorti en 2019. Il met en scène l\'équipe de super-héros des comics Marvel, les Avengers.', 'img/endmar.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/wV-Q0o2OQjQ\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2019-04-24'),
(4, 'Justice league', 'Bruce Wayne, inspiré par l\'altruisme de Superman, sollicite l\'aide de sa nouvelle alliée, Diana Prince, pour affronter un ennemi plus redoutable que jamais. Ensemble, Batman et Wonder Woman ne tardent pas à recruter de nouveaux éléments afin de bâtir une équipe capable de sauver la planète, de plus en plus menacée.', 'img/js.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/cvUFoxU_Lq0\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2019-04-05'),
(5, 'Gardiens de la galaxie 2', 'Musicalement accompagné de la \'Awesome Mixtape 2\', ce deuxième volet propose à nouveau les aventures de l\'équipe alors qu\'elle traverse les confins du cosmos. Les gardiens doivent combattre pour rester unis alors qu\'ils découvrent les mystères de la filiation de Peter Quill. Les vieux ennemis vont devenir de nouveaux alliés et des personnages bien connus des fans de comics vont venir aider nos héros et continuer à étendre l\'univers Marvel.', 'img/gard.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/OULksfC2q-A\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2019-04-28'),
(6, 'A star is born', 'A Star Is Born est un film musical américain coécrit, coproduit et réalisé par Bradley Cooper, sorti en 2018. Il s\'agit du quatrième remake du film Une étoile est née de William A. Wellman, sorti en 1937.', 'img/star.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/jsg9NxCBzFs\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2019-04-22'),
(7, 'Astérix', 'À la suite d\'une chute lors de la cueillette du gui, le druide Panoramix décide qu\'il est temps d\'assurer l\'avenir du village. Accompagné d\'Astérix et Obélix, il entreprend de parcourir le monde gaulois à la recherche d\'un jeune druide talentueux à qui transmettre le secret de la Potion Magique.', 'img/aste.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/klnu4ps7C8w\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2019-04-09'),
(8, 'Dumbo', 'Dumbo est un film fantastique américain réalisé par Tim Burton, sorti en 2019. Il s\'agit d\'une adaptation en prise de vues réelle du long-métrage d\'animation Dumbo des studios Disney sorti en 1941, lui-même basé sur l\'histoire éponyme écrite par Helen Aberson et illustrée par Harold Pearl, parue en 1939.', 'img/dumb.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/lhwAcdj3HKg\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2019-04-11');

-- --------------------------------------------------------

--
-- Structure de la table `GENRE`
--

CREATE TABLE `GENRE` (
  `id_genre` int(11) NOT NULL,
  `intitule_du_genre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `GENRE`
--

INSERT INTO `GENRE` (`id_genre`, `intitule_du_genre`) VALUES
(1, 'Action'),
(2, 'Comédie'),
(3, 'Drame'),
(4, 'Science-fiction'),
(5, 'Animation'),
(6, 'Horreur'),
(7, 'Romance');

-- --------------------------------------------------------

--
-- Structure de la table `joue`
--

CREATE TABLE `joue` (
  `id_acteur` int(11) NOT NULL,
  `id_film` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `joue`
--

INSERT INTO `joue` (`id_acteur`, `id_film`) VALUES
(1, 1),
(2, 1),
(3, 1),
(8, 2),
(9, 2),
(4, 3),
(5, 3),
(6, 3),
(17, 4),
(18, 4),
(13, 5),
(14, 5),
(15, 6),
(16, 6),
(11, 7),
(12, 7),
(10, 8);

-- --------------------------------------------------------

--
-- Structure de la table `REALISATEUR`
--

CREATE TABLE `REALISATEUR` (
  `id_realisteur` int(11) NOT NULL,
  `nom_realisateur` varchar(50) NOT NULL,
  `prenom_realisateur` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `REALISATEUR`
--

INSERT INTO `REALISATEUR` (`id_realisteur`, `nom_realisateur`, `prenom_realisateur`) VALUES
(1, 'Zack', 'Snyder'),
(2, 'Bradley', 'Cooper'),
(3, 'James', 'Gun'),
(4, 'Alexandre', 'Astier'),
(5, 'Tim', 'Burton'),
(6, 'Ryan', 'Coogler'),
(7, 'Anthony', 'Russo'),
(8, 'Anna', 'Boden');

-- --------------------------------------------------------

--
-- Structure de la table `realiser`
--

CREATE TABLE `realiser` (
  `id_film` int(11) NOT NULL,
  `id_realisteur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `realiser`
--

INSERT INTO `realiser` (`id_film`, `id_realisteur`) VALUES
(4, 1),
(6, 2),
(5, 3),
(7, 4),
(8, 5),
(2, 6),
(3, 7),
(1, 8);

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `type_role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `mail_user` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id_user`, `login`, `pass`, `mail_user`) VALUES
(1, 'test', 'test', '');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `ACTEUR`
--
ALTER TABLE `ACTEUR`
  ADD PRIMARY KEY (`id_acteur`);

--
-- Index pour la table `appartient`
--
ALTER TABLE `appartient`
  ADD PRIMARY KEY (`id_genre`,`id_film`),
  ADD KEY `appartient_FILM0_FK` (`id_film`);

--
-- Index pour la table `etre`
--
ALTER TABLE `etre`
  ADD PRIMARY KEY (`id_role`,`id_user`),
  ADD KEY `etre_user0_FK` (`id_user`);

--
-- Index pour la table `FILM`
--
ALTER TABLE `FILM`
  ADD PRIMARY KEY (`id_film`);

--
-- Index pour la table `GENRE`
--
ALTER TABLE `GENRE`
  ADD PRIMARY KEY (`id_genre`);

--
-- Index pour la table `joue`
--
ALTER TABLE `joue`
  ADD PRIMARY KEY (`id_acteur`,`id_film`),
  ADD KEY `joue_FILM0_FK` (`id_film`);

--
-- Index pour la table `REALISATEUR`
--
ALTER TABLE `REALISATEUR`
  ADD PRIMARY KEY (`id_realisteur`);

--
-- Index pour la table `realiser`
--
ALTER TABLE `realiser`
  ADD PRIMARY KEY (`id_film`,`id_realisteur`),
  ADD KEY `realiser_REALISATEUR0_FK` (`id_realisteur`);

--
-- Index pour la table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `ACTEUR`
--
ALTER TABLE `ACTEUR`
  MODIFY `id_acteur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT pour la table `FILM`
--
ALTER TABLE `FILM`
  MODIFY `id_film` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `GENRE`
--
ALTER TABLE `GENRE`
  MODIFY `id_genre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `REALISATEUR`
--
ALTER TABLE `REALISATEUR`
  MODIFY `id_realisteur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT pour la table `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `appartient`
--
ALTER TABLE `appartient`
  ADD CONSTRAINT `appartient_FILM0_FK` FOREIGN KEY (`id_film`) REFERENCES `FILM` (`id_film`),
  ADD CONSTRAINT `appartient_GENRE_FK` FOREIGN KEY (`id_genre`) REFERENCES `GENRE` (`id_genre`);

--
-- Contraintes pour la table `etre`
--
ALTER TABLE `etre`
  ADD CONSTRAINT `etre_role_FK` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`),
  ADD CONSTRAINT `etre_user0_FK` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Contraintes pour la table `joue`
--
ALTER TABLE `joue`
  ADD CONSTRAINT `joue_ACTEUR_FK` FOREIGN KEY (`id_acteur`) REFERENCES `ACTEUR` (`id_acteur`),
  ADD CONSTRAINT `joue_FILM0_FK` FOREIGN KEY (`id_film`) REFERENCES `FILM` (`id_film`);

--
-- Contraintes pour la table `realiser`
--
ALTER TABLE `realiser`
  ADD CONSTRAINT `realiser_FILM_FK` FOREIGN KEY (`id_film`) REFERENCES `FILM` (`id_film`),
  ADD CONSTRAINT `realiser_REALISATEUR0_FK` FOREIGN KEY (`id_realisteur`) REFERENCES `REALISATEUR` (`id_realisteur`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
