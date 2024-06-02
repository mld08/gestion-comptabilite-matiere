-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 02 juin 2024 à 15:58
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestionstock`
--

-- --------------------------------------------------------

--
-- Structure de la table `besoins`
--

CREATE TABLE `besoins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `designation_specification` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantite` int(11) NOT NULL,
  `date` date NOT NULL,
  `observations` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `besoins`
--

INSERT INTO `besoins` (`id`, `designation_specification`, `quantite`, `date`, `observations`, `created_at`, `updated_at`) VALUES
(1, 'edkhjf', 1, '2024-04-01', 'DQHJKLSJK', '2024-04-01 18:50:18', '2024-04-01 18:52:27');

-- --------------------------------------------------------

--
-- Structure de la table `carburants`
--

CREATE TABLE `carburants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entree` enum('gasoil','super') COLLATE utf8mb4_unicode_ci NOT NULL,
  `sortie` enum('gasoil','super') COLLATE utf8mb4_unicode_ci NOT NULL,
  `stocks` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `carburants`
--

INSERT INTO `carburants` (`id`, `designation`, `entree`, `sortie`, `stocks`, `created_at`, `updated_at`) VALUES
(2, 'D555', 'gasoil', 'gasoil', 6, '2024-06-01 14:17:43', '2024-06-01 14:17:43');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lib_categorie` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `lib_categorie`, `created_at`, `updated_at`) VALUES
(1, 'CAT1', '2024-03-08 12:12:23', '2024-03-29 16:53:49');

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `societe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ville` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`id`, `nom`, `prenom`, `societe`, `adresse`, `telephone`, `email`, `ville`, `created_at`, `updated_at`) VALUES
(1, 'Fall', 'Dudu', 'Mbaye et freres', 'Dakar', '777777777', 'dudu.fall@gmail.com', 'Dakar', '2024-03-08 12:13:27', '2024-03-08 12:13:27');

-- --------------------------------------------------------

--
-- Structure de la table `commandes`
--

CREATE TABLE `commandes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cod_commande` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cod_facture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_commande` date NOT NULL,
  `sujet_commande` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `montant` double(8,2) NOT NULL,
  `statut_commande` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_paiement` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `commandes`
--

INSERT INTO `commandes` (`id`, `cod_commande`, `cod_facture`, `date_commande`, `sujet_commande`, `montant`, `statut_commande`, `type_paiement`, `created_at`, `updated_at`) VALUES
(1, 'C566', 'DGERRR', '2024-03-11', 'Sujet 1', 15000.00, 'Attente', 'Wave', '2024-03-08 12:14:17', '2024-03-08 12:37:20'),
(2, 'C333', 'FF22', '2024-03-12', 'Sujet 12', 1000.00, 'Valide', 'OM', '2024-03-08 16:19:11', '2024-03-08 16:19:11');

-- --------------------------------------------------------

--
-- Structure de la table `comptes`
--

CREATE TABLE `comptes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `no_bon` int(11) NOT NULL,
  `origine_destination` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entrees` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sortie_def` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix_uni` int(11) NOT NULL,
  `existant` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `montant_existant` int(11) NOT NULL,
  `sorties_provisoires` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_sorties_provisoires` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `comptes`
--

INSERT INTO `comptes` (`id`, `date`, `no_bon`, `origine_destination`, `entrees`, `sortie_def`, `prix_uni`, `existant`, `montant_existant`, `sorties_provisoires`, `date_sorties_provisoires`, `created_at`, `updated_at`) VALUES
(1, '2024-04-05', 12344, 'FDJKSDFJD', 'JFDHLKFDS', 'FDJKSJFD', 134567, 'DHDJDJD', 233, 'kdsjf', '2024-04-10', '2024-04-02 17:12:57', '2024-04-02 17:12:57');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `materiels`
--

CREATE TABLE `materiels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `reference` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantite` int(11) NOT NULL,
  `prix_unitaire` double(8,2) NOT NULL,
  `prix_total` double(8,2) NOT NULL,
  `fournisseur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rc_fournisseur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `materiels`
--

INSERT INTO `materiels` (`id`, `reference`, `designation`, `quantite`, `prix_unitaire`, `prix_total`, `fournisseur`, `rc_fournisseur`, `email`, `telephone`, `adresse`, `created_at`, `updated_at`) VALUES
(1, 'C333', 'D555', 3, 15000.00, 45000.00, 'Mass Demba', 'SN6776', 'mass@gmail.com', '776665554', 'Almadies 2', '2024-05-31 22:17:06', '2024-05-31 22:21:32');

-- --------------------------------------------------------

--
-- Structure de la table `matieres`
--

CREATE TABLE `matieres` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date_operation` date NOT NULL,
  `no_comptes_nomenclature` int(11) NOT NULL,
  `nature_matieres` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entrees_no_bon` int(11) NOT NULL,
  `entrees_nbre_unites` int(11) NOT NULL,
  `entrees_nature_unite` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sorties_no_bon` int(11) NOT NULL,
  `sorties_nbre_unites` int(11) NOT NULL,
  `sorties_nature_unite` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix_uni` int(11) NOT NULL,
  `montant_entrees` int(11) NOT NULL,
  `montant_sorties` int(11) NOT NULL,
  `sorties_provisoires` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `observations` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `matieres`
--

INSERT INTO `matieres` (`id`, `date_operation`, `no_comptes_nomenclature`, `nature_matieres`, `entrees_no_bon`, `entrees_nbre_unites`, `entrees_nature_unite`, `sorties_no_bon`, `sorties_nbre_unites`, `sorties_nature_unite`, `prix_uni`, `montant_entrees`, `montant_sorties`, `sorties_provisoires`, `observations`, `created_at`, `updated_at`) VALUES
(1, '2024-04-05', 123234, 'DQSFSQ', 222, 33323, 'FSEDSDS', 2323, 33223, 'CDDDSCS', 2334, 1233431, 23121234, 'FGGHHH', 'DSFDSFZSEDF', '2024-04-05 17:50:56', '2024-04-05 18:05:41');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_03_04_191745_create_unites_table', 1),
(6, '2024_03_04_191924_create_categories_table', 1),
(7, '2024_03_04_192020_create_clients_table', 1),
(8, '2024_03_05_190901_create_produits_table', 1),
(9, '2024_03_08_112937_create_commandes_table', 1),
(10, '2024_03_08_114827_create_commande_produit_table', 1),
(11, '2024_03_08_120513_create_commande_client_table', 1),
(12, '2024_03_29_153857_create_carburants_table', 2),
(13, '2024_03_31_174110_create_besoins_table', 3),
(14, '2024_04_02_153105_create_comptes_table', 4),
(15, '2024_04_05_154908_create_matieres_table', 5),
(16, '2024_05_31_211530_create_materiels_table', 6);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'bcm', 'bcm@gmail.com', NULL, '$2y$10$WP6IUylEAw2ePGkAzS12EuONWl5i/.McLpqJ8ffM67/imdPB7C6F6', NULL, '2024-06-01 17:46:27', '2024-06-01 17:46:27'),
(3, 'user', 'user@gmail.com', NULL, '$2y$10$zY7DIZ3UTNOq.Ud2kW3gWeLCEubA.erusmv4fWxpsgYyej6Rxb82W', NULL, '2024-06-01 17:49:16', '2024-06-01 17:49:16'),
(4, 'operateur1', 'operateur1@gmail.com', NULL, '$2y$10$qV4GN6MFsUh9yUgLktS0JeJLLNPvKksVhU/EJ489VwEVcAOh7XA4q', NULL, '2024-06-01 17:50:23', '2024-06-01 17:50:23'),
(5, 'operateur2', 'operateur2@gmail.com', NULL, '$2y$10$5md9GvdqmfAcMP4cCulhJ.YxDweoFR1xghPrkOzAdN.VxT084YlUO', NULL, '2024-06-01 17:51:05', '2024-06-01 17:51:05');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `besoins`
--
ALTER TABLE `besoins`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `carburants`
--
ALTER TABLE `carburants`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `comptes`
--
ALTER TABLE `comptes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `materiels`
--
ALTER TABLE `materiels`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `matieres`
--
ALTER TABLE `matieres`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `besoins`
--
ALTER TABLE `besoins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `carburants`
--
ALTER TABLE `carburants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `commandes`
--
ALTER TABLE `commandes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `comptes`
--
ALTER TABLE `comptes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `materiels`
--
ALTER TABLE `materiels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `matieres`
--
ALTER TABLE `matieres`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
