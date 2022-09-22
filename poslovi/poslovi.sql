-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2022 at 08:29 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `poslovi`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `listings`
--

CREATE TABLE `listings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `listings`
--

INSERT INTO `listings` (`id`, `user_id`, `title`, `logo`, `tags`, `company`, `location`, `email`, `website`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'Cumque asperiores dolor nostrum eligendi veniam aspernatur et.', NULL, 'laravel, api, backend', 'Klein, Ritchie and Weimann', 'West Davonte', 'price.kaylah@kohler.com', 'http://www.schumm.com/ex-veritatis-sit-dolorem-et-quis-beatae-quae-et.html', 'Enim at non consequatur laborum. Et dolor nihil cumque iste sint ut quidem. Aspernatur eaque accusantium nihil quia. Ea sapiente saepe architecto.', '2022-09-21 16:04:55', '2022-09-21 16:04:55'),
(2, 1, 'Quibusdam ut tempora corrupti impedit deserunt odit.', NULL, 'laravel, api, backend', 'Koelpin Inc', 'Bauchborough', 'delilah71@koch.biz', 'http://harber.com/tenetur-est-omnis-rerum-modi-quis-id-sit', 'A nulla expedita quia quos itaque. Omnis odit facilis ipsum eligendi non aspernatur. Sunt sit rerum eum eius aperiam. Ut omnis ut nam omnis ut. Et sit delectus reiciendis aut vero sit.', '2022-09-21 16:04:55', '2022-09-21 16:04:55'),
(3, 1, 'Quibusdam sunt molestias qui ut ipsa.', NULL, 'laravel, api, backend', 'Schiller-Gusikowski', 'North Baylee', 'vreinger@kuphal.com', 'http://www.stokes.info/eius-ea-quas-id-sequi-sed-aut-quia-voluptatibus.html', 'Ratione et voluptatem delectus. Expedita velit neque reprehenderit enim possimus in. Aperiam aliquid eum fugit nemo. Et iste aliquam at ut error.', '2022-09-21 16:04:55', '2022-09-21 16:04:55'),
(4, 1, 'Asperiores eum numquam earum odio ratione tempore.', NULL, 'laravel, api, backend', 'Wilderman LLC', 'Lake Wiltonbury', 'herminio06@sanford.com', 'http://schulist.net/assumenda-cum-autem-aut-consequatur-dolor-eligendi-facilis-exercitationem', 'Rerum excepturi suscipit consequatur corporis qui aut. In nemo nobis consequuntur sed numquam consequatur. Porro quis placeat totam. Eos aut quae incidunt accusamus debitis eaque aut. Id reiciendis fugit architecto libero. Aliquam fuga atque eveniet asperiores esse voluptatibus et.', '2022-09-21 16:04:55', '2022-09-21 16:04:55'),
(5, 1, 'Sequi voluptatum dolorum quae.', NULL, 'laravel, api, backend', 'Windler, Bins and Kuphal', 'Smithburgh', 'hodkiewicz.stephany@paucek.info', 'http://www.klocko.com/deleniti-perferendis-alias-aliquam-autem-excepturi-magni', 'Magnam pariatur consequatur qui non consequatur. Voluptas in voluptas aut eveniet. Laborum aut quia iste voluptate. Nemo ut quia omnis dolores nemo. Veritatis quidem quas omnis fuga rerum quo. Molestiae aliquam et voluptate rerum reprehenderit quibusdam. Velit eaque exercitationem quo earum.', '2022-09-21 16:04:55', '2022-09-21 16:04:55'),
(6, 1, 'Molestiae aut laborum consequatur qui.', NULL, 'laravel, api, backend', 'Schaden-Lang', 'Lake Anissastad', 'bfritsch@flatley.info', 'https://auer.com/odit-voluptatem-rem-soluta-quis-corrupti-vel.html', 'Optio at explicabo ut laudantium et repellat. Quibusdam est non aliquam amet laboriosam. Sint et ad at. Eos necessitatibus ab voluptates. Ullam non rerum culpa optio porro consequatur. Sed quos vero numquam modi. Quasi soluta dignissimos qui nemo ea alias repellat et.', '2022-09-21 16:04:55', '2022-09-21 16:04:55'),
(7, 2, 'sddsdsda', NULL, 'laravel, ngx, react,backed', 'Nordeus', 'Beograd', 'milica@gmail.com', 'https://Nordeus.rs', '\"\r\n            sdsadsad', '2022-09-21 17:08:41', '2022-09-21 17:08:41');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(41, '2014_10_12_000000_create_users_table', 1),
(42, '2014_10_12_100000_create_password_resets_table', 1),
(43, '2019_08_19_000000_create_failed_jobs_table', 1),
(44, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(45, '2022_09_19_225509_create_listings_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
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
-- Table structure for table `users`
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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Stefan Simić', 'stefan@gmail.com', '2022-09-21 16:04:55', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'XXwhQJTMjK', '2022-09-21 16:04:55', '2022-09-21 16:04:55'),
(2, 'Stefan', 'xoteyo2887@iunicus.com', NULL, '$2y$10$jZ5ySgFB.LUDJEDTq/i5vO32IiDFFXn.sTjLIwBzmHm2sV0dhu96i', NULL, '2022-09-21 16:16:12', '2022-09-21 16:16:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `listings`
--
ALTER TABLE `listings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `listings_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `listings`
--
ALTER TABLE `listings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `listings`
--
ALTER TABLE `listings`
  ADD CONSTRAINT `listings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
