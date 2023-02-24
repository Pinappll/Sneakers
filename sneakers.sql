-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : ven. 24 fév. 2023 à 10:35
-- Version du serveur :  5.7.34
-- Version de PHP : 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `sneakers`
--

-- --------------------------------------------------------

--
-- Structure de la table `adress`
--

CREATE TABLE `adress` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ccompany` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adress` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `adress`
--

INSERT INTO `adress` (`id`, `user_id`, `name`, `firstname`, `lastname`, `ccompany`, `adress`, `postal`, `city`, `country`, `phone`) VALUES
(4, 6, 'Ma maison', 'Jean', 'Dupont', 'test', '70 rue anatole france', '92200', 'Levallois', 'FR', '0123456789'),
(5, 11, 'Maison', 'Marie', 'Helene', NULL, '2 rue victor hugo', '91100', 'Corbeil-Essonens', 'FR', '0623346543'),
(6, 6, 'Travail', 'John', 'Doe', NULL, '43 rue des lilas', '75249', 'Paris', 'FR', '089843864758');

-- --------------------------------------------------------

--
-- Structure de la table `carrier`
--

CREATE TABLE `carrier` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `carrier`
--

INSERT INTO `carrier` (`id`, `name`, `description`, `price`) VALUES
(1, 'Collissimo', 'Livraison premium en 72h.', 990),
(2, 'Chronopost', 'Livraison express 24h', 1490);

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(3, 'Nike'),
(4, 'Adidas'),
(5, 'Puma');

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20230123150038', '2023-01-23 15:04:00', 129),
('DoctrineMigrations\\Version20230123153419', '2023-01-23 15:34:39', 121),
('DoctrineMigrations\\Version20230126131030', '2023-01-26 13:11:26', 96),
('DoctrineMigrations\\Version20230126132925', '2023-01-26 13:30:12', 169),
('DoctrineMigrations\\Version20230220113033', '2023-02-20 11:31:13', 162),
('DoctrineMigrations\\Version20230220144143', '2023-02-20 14:42:13', 118),
('DoctrineMigrations\\Version20230220145648', '2023-02-20 14:56:57', 230),
('DoctrineMigrations\\Version20230222101232', '2023-02-22 10:13:12', 173),
('DoctrineMigrations\\Version20230222152715', '2023-02-22 15:27:41', 229),
('DoctrineMigrations\\Version20230223081803', '2023-02-23 08:18:21', 193),
('DoctrineMigrations\\Version20230224085107', '2023-02-24 08:51:23', 197),
('DoctrineMigrations\\Version20230224091212', '2023-02-24 09:12:27', 102);

-- --------------------------------------------------------

--
-- Structure de la table `header`
--

CREATE TABLE `header` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `btn_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `btn_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `illustration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `header`
--

INSERT INTO `header` (`id`, `title`, `content`, `btn_title`, `btn_url`, `illustration`) VALUES
(1, 'Sneakers', 'Retrouver toutes les dernières sorties', 'Accéder', 'https://127.0.0.1:8002/produits', '7f844656708923ec6a1d5ccef00d718525b19b91.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `messenger_messages`
--

CREATE TABLE `messenger_messages` (
  `id` bigint(20) NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `headers` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue_name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `available_at` datetime NOT NULL,
  `delivered_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `carrier_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `carrier_price` double NOT NULL,
  `delivery` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_paid` tinyint(1) NOT NULL,
  `reference` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_session_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `order`
--

INSERT INTO `order` (`id`, `user_id`, `created_at`, `carrier_name`, `carrier_price`, `delivery`, `is_paid`, `reference`, `stripe_session_id`) VALUES
(10, 11, '2023-02-24 10:11:24', 'Chronopost', 1490, '0623346543<br/>2 rue victor hugo<br/>91100Corbeil-Essonens<br/>FR', 0, '240223-63f88d4c0dd0a', 'cs_test_b10sJnpWGJ4hYWud9shJjSbN0j7yvOX34AdD30BOkX1BhcZ71CrV4bnelR'),
(11, 11, '2023-02-24 10:14:05', 'Collissimo', 990, '0623346543<br/>2 rue victor hugo<br/>91100Corbeil-Essonens<br/>FR', 1, '240223-63f88ded034b6', 'cs_test_b1qeFvspCoEVA8XCR3ksIWe2oHUR9fDpH33vWBvdL1EnvIIr2YD1gIaOV2'),
(12, 6, '2023-02-24 10:16:10', 'Chronopost', 1490, '089843864758<br/>43 rue des lilas<br/>75249Paris<br/>FR', 1, '240223-63f88e6a69cf4', 'cs_test_b1cO1ZEbk4qrze2Ch44EGtYb57pkBVFC693WASIgBo0MOAjKH1pR0uOM9I'),
(13, 6, '2023-02-24 10:17:05', 'Collissimo', 990, '0123456789<br/>test<br/>70 rue anatole france<br/>92200Levallois<br/>FR', 1, '240223-63f88ea13f2e0', 'cs_test_b1mIQodr5TUnDTfrTmtolRtsIMWbRL7uAAaVQ1UDA0AyImae2hyja1r1g1'),
(14, 11, '2023-02-24 10:27:24', 'Collissimo', 990, '0623346543<br/>2 rue victor hugo<br/>91100Corbeil-Essonens<br/>FR', 1, '240223-63f8910c85677', 'cs_test_b1GZvhAIH8VuNeSPjBYKjVqAZbFrEQXusNPUQfpuJoF2LnRJGrQehUtZaR');

-- --------------------------------------------------------

--
-- Structure de la table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `my_order_id` int(11) NOT NULL,
  `product` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `order_details`
--

INSERT INTO `order_details` (`id`, `my_order_id`, `product`, `quantity`, `price`, `total`) VALUES
(19, 10, 'Jordan 1 Mid', 1, 12999, 12999),
(20, 10, 'Jordan 13 Retro', 1, 20999, 20999),
(21, 11, 'Jordan 1 Mid', 1, 12999, 12999),
(22, 11, 'Jordan 13 Retro', 1, 20999, 20999),
(23, 12, 'Jordan 12 Retro', 2, 20999, 41998),
(24, 13, 'Puma Rs-xl', 1, 13999, 13999),
(25, 13, 'Puma Rs-x Drift', 1, 11999, 11999),
(26, 13, 'Jordan 13 Retro', 1, 20999, 20999),
(27, 14, 'Jordan 12 Retro', 1, 20999, 20999);

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `illustration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `is_in_first_page` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`id`, `category_id`, `name`, `slug`, `illustration`, `subtitle`, `description`, `price`, `is_in_first_page`) VALUES
(6, 5, 'Puma Rs-x Drift', 'puma-rs-x-drift', '71f28b8b2b0e578eaeb5577e55128521f0b99862.png', 'Homme - Warm White', 'Un style avant-gardiste paré pour le futur !\r\n\r\nPrépare-toi à voyager dans le futur avec le style classique des PUMA RS-X Efekt Archive Remastered.', 11999, 0),
(7, 3, 'Jordan 12 Retro', 'jordan-12-retro', 'cd0e13d033ac1f939edbb28075171e9306c4f432.png', 'Femme - Black-Hyper Royal-Mtlc Silver', 'UNE ICÔNE DE HAUTE VOLTIGE REMISE AU GOÛT DU JOUR.La chaussure Air Jordan 12 Retro pour Femme célèbre le modèle original avec des éléments en cuir et un amorti moelleux pour plus de confort.', 20999, 1),
(8, 3, 'Jordan 1 Mid', 'jordan-1-mid', '16cff1a3dc6cc926252c3720abf1f6df48e6d05e.png', 'Homme - Game Royal-Rush Orange-Phantom', 'DESIGN CLASSIQUE, NOUVELLES COULEURS.Inspirée de la AJ1 d’origine, la Air Jordan 1 Mid permet aux fans de suivre les traces de MJ. Grâce à sa nouvelle couleur, ce modèle aux matières classiques et épurées revient dans la tendance.', 12999, 0),
(9, 3, 'Jordan 13 Retro', 'jordan-13-retro', 'bafe493261bc5007540a3d18e2d9bcc40b5e7ab9.png', 'Homme - Black-True Red-White', 'Inspired by Michael Jordan’s nickname ‘Black Cat’, Nike brings you the Air Jordan 13 Retro.', 20999, 1),
(10, 4, 'adidas Ozweego', 'adidas-ozweego', '93b787b16e51fc0a30c83a3d66ccadcac9b79834.png', 'Enfants - Silver Green-Silver Green-Black Blue Met', 'Dans le sweet spot entre le style des années 90 et l\'innovation futuriste, les chaussures Adidas Ozweego de juniors. Une évolution des célèbres coureurs rétro, ils s\'adaptent, se sentent à l\'aise et ont l\'air audacieux.', 10999, 0),
(11, 4, 'adidas Response CL', 'adidas-response-cl', 'f6e7f2a66ffe22830f098270e5e62d8aee6ad1dd.png', 'Femme - Grey One-Grey Two-Grey', 'There\'s something about these adidas Response CL shoes that gives off the best kind of dad vibes.', 13999, 1),
(12, 5, 'Puma MB.02 Jade', 'puma-mb02-jade', '9346b2c36ec4e5d1584df6774278516958d11159.png', 'Homme - Puma Black-Sunset Glow', 'The second signature shoe. The follow up. The MB.02. This Jade version channels the positive energy of the jade stone and brings luck to your game.', 12999, 1),
(13, 5, 'Puma Rs-xl', 'puma-rs-xl', '3a7b42333d0be71c5ec6d598313c68bf1a9d1982.png', 'Homme - Barbados Cherry-Barbados Cherry', 'La RS-X est de retour. Avec sa forme rétro-futuristique, cette sneaker revient avec une esthétique et des détails plus modernes que jamais, sublimés par des couches de nubuck', 13999, 0);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `roles`, `password`, `firstname`, `lastname`) VALUES
(6, 'johndoe@gmail.com', '[]', '$2y$13$Fj1mSFtWY4HXeBDia/t2TO4RqCDiMdv8EEnNGN/VRLNGLbcND6naq', 'John', 'Doe'),
(8, 'admin@gmail.com', '[\"ROLE_ADMIN\"]', '$2y$13$OWCGdKv4/RZz318zptR1Se/EAsIOw2RjY1laFcX0D8Nt9fnwqETAi', 'admin', 'admin'),
(11, 'mariehelene@gmail.com', '[]', '$2y$13$hHJ.YoCtdoaqWe5UGYo6VuXj396lBsgBCxRWeKgrmtcoQZPQ8Jgiy', 'Marie', 'Helene'),
(12, 'pierredupont@gmail.com', '[]', '$2y$13$GdL6dhTl068SushdFzx0J.KugfabV0Uf4Nz.6NcyIaYetwSZzCtCC', 'Pierre', 'Dupont');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `adress`
--
ALTER TABLE `adress`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_5CECC7BEA76ED395` (`user_id`);

--
-- Index pour la table `carrier`
--
ALTER TABLE `carrier`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_75EA56E0FB7336F0` (`queue_name`),
  ADD KEY `IDX_75EA56E0E3BD61CE` (`available_at`),
  ADD KEY `IDX_75EA56E016BA31DB` (`delivered_at`);

--
-- Index pour la table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_F5299398A76ED395` (`user_id`);

--
-- Index pour la table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_845CA2C1BFCDF877` (`my_order_id`);

--
-- Index pour la table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_D34A04AD12469DE2` (`category_id`);

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
-- AUTO_INCREMENT pour la table `adress`
--
ALTER TABLE `adress`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `carrier`
--
ALTER TABLE `carrier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `header`
--
ALTER TABLE `header`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `adress`
--
ALTER TABLE `adress`
  ADD CONSTRAINT `FK_5CECC7BEA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `FK_F5299398A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `FK_845CA2C1BFCDF877` FOREIGN KEY (`my_order_id`) REFERENCES `order` (`id`);

--
-- Contraintes pour la table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `FK_D34A04AD12469DE2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
