-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 24 fév. 2023 à 07:39
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `my_quizz`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `name`) VALUES
(1, 'php'),
(2, 'java'),
(3, 'orientedObject'),
(4, 'nature'),
(5, 'education');

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20210505101916', '2023-02-23 10:08:42', 44);

-- --------------------------------------------------------

--
-- Structure de la table `question`
--

CREATE TABLE `question` (
  `id` int(11) NOT NULL,
  `id_categorie` int(11) NOT NULL,
  `question` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `question`
--

INSERT INTO `question` (`id`, `id_categorie`, `question`) VALUES
(1, 1, 'php est il oo'),
(2, 3, 'c quoi'),
(3, 2, 'what is java'),
(4, 4, 'ou vive les poissons'),
(5, 5, 'nmbr chaptires reaseau');

-- --------------------------------------------------------

--
-- Structure de la table `quizz_history`
--

CREATE TABLE `quizz_history` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_categorie` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `number_of_questions` int(11) NOT NULL,
  `date_passed` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `quizz_history`
--

INSERT INTO `quizz_history` (`id`, `id_user`, `id_categorie`, `score`, `number_of_questions`, `date_passed`) VALUES
(1, 1, 1, 1, 1, '23-02-2023 10:19:21'),
(2, 2, 1, 1, 1, '23-02-2023 10:45:23'),
(3, 2, 1, 1, 1, '23-02-2023 10:52:57'),
(4, 2, 2, 1, 1, '23-02-2023 10:53:11'),
(5, 1, 2, 1, 1, '23-02-2023 11:20:45'),
(6, 1, 1, 1, 1, '23-02-2023 12:00:21'),
(7, 1, 1, 0, 1, '23-02-2023 22:27:15'),
(8, 1, 4, 1, 1, '23-02-2023 22:36:01'),
(9, 1, 1, 1, 1, '23-02-2023 22:36:20'),
(10, 2, 2, 1, 1, '23-02-2023 22:41:36'),
(11, 2, 4, 1, 1, '23-02-2023 22:45:38'),
(12, 4, 1, 1, 1, '24-02-2023 07:28:59'),
(13, 4, 4, 1, 1, '24-02-2023 07:29:04'),
(14, 4, 2, 1, 1, '24-02-2023 07:29:12'),
(15, 4, 2, 1, 1, '24-02-2023 07:29:13'),
(16, 4, 5, 1, 1, '24-02-2023 07:32:58'),
(17, 1, 1, 1, 1, '24-02-2023 07:34:39');

-- --------------------------------------------------------

--
-- Structure de la table `reponse`
--

CREATE TABLE `reponse` (
  `id` int(11) NOT NULL,
  `id_question` int(11) NOT NULL,
  `reponse` varchar(255) NOT NULL,
  `reponse_expected` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `reponse`
--

INSERT INTO `reponse` (`id`, `id_question`, `reponse`, `reponse_expected`) VALUES
(1, 1, 'non', 1),
(2, 1, 'rien', 0),
(3, 1, 'niiide', 1),
(4, 3, 'prog lang', 1),
(5, 4, 'kfelzfjz', 1),
(6, 1, 'ofjezeklj', 1),
(7, 1, '5', 1),
(8, 1, '6', 1),
(9, 1, '6,5,4,3,2', 1),
(10, 5, '10', 1),
(11, 1, '6', 1),
(12, 5, '7', 1),
(13, 1, '9', 1);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(180) NOT NULL,
  `roles` longtext NOT NULL COMMENT '(DC2Type:json)',
  `password` varchar(255) NOT NULL,
  `is_verified` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `roles`, `password`, `is_verified`) VALUES
(1, 'monrezult@gmail.com', '[\"ROLE_ADMIN\"]', '$argon2id$v=19$m=65536,t=4,p=1$eC9OdEJEU3I0STg2aC92Mw$3r55j+cflfWG7ASSUGtLft+NMwXeiAlc1v9C8+6RO40', 1),
(2, 'itsde@outlook.fr', '[]', '$argon2id$v=19$m=65536,t=4,p=1$aVpwSFB6Q0dINWVOc2ppcg$okojypMr0t/KFFTMuT/qNK71hJq0TDoXohf8xkXbZ5k', 1),
(3, 'hello@admin.tn', '[]', '$argon2id$v=19$m=65536,t=4,p=1$ejAwM3h3QkRJNDN4N0RkdQ$0HUfdQlXc//3qc/8wY5EhSjxg2XOB88n1RR8XD0BYoI', 1),
(4, 'oumayma@gmail.com', '[]', '$argon2id$v=19$m=65536,t=4,p=1$LzdReGdTMWV2QXFmWGc4Lg$+fpyT7YUjCkUHsUh6Q1o4N+hPKw9nK0+829bXv6dopA', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_B6F7494EC9486A13` (`id_categorie`);

--
-- Index pour la table `quizz_history`
--
ALTER TABLE `quizz_history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_4D50AF9F6B3CA4B` (`id_user`),
  ADD KEY `IDX_4D50AF9FC9486A13` (`id_categorie`);

--
-- Index pour la table `reponse`
--
ALTER TABLE `reponse`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_5FB6DEC7E62CA5DB` (`id_question`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `quizz_history`
--
ALTER TABLE `quizz_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `reponse`
--
ALTER TABLE `reponse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `FK_B6F7494EC9486A13` FOREIGN KEY (`id_categorie`) REFERENCES `categorie` (`id`);

--
-- Contraintes pour la table `quizz_history`
--
ALTER TABLE `quizz_history`
  ADD CONSTRAINT `FK_4D50AF9F6B3CA4B` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `FK_4D50AF9FC9486A13` FOREIGN KEY (`id_categorie`) REFERENCES `categorie` (`id`);

--
-- Contraintes pour la table `reponse`
--
ALTER TABLE `reponse`
  ADD CONSTRAINT `FK_5FB6DEC7E62CA5DB` FOREIGN KEY (`id_question`) REFERENCES `question` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
