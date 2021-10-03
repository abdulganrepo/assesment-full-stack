-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2021 at 02:07 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `manajemenskorliga`
--

-- --------------------------------------------------------

--
-- Table structure for table `clubs`
--

CREATE TABLE `clubs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `club_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clubs`
--

INSERT INTO `clubs` (`id`, `club_name`, `logo`) VALUES
(14, 'Persib', 'logo/hx1Xn2R5Y94MYiw3T1vr9zt6nzOedWtA9DHkZ59X.png'),
(15, 'Arema FC', 'logo/1i3NQL43utKkE5Iy9t7HFnZphaHfyyfGq441x4FA.png'),
(16, 'Persija', 'logo/MJtCCpHgQ8BwbdaDvfVNaMuMmSjj81xCEkmZbvXJ.png'),
(17, 'PSM', 'logo/qm2qtf2GQh7QX0YnV21bIjyr7D7Rb6uSyryTMhXV.png'),
(18, 'Bhayangkara', 'logo/cENFRCKdjOoqJHzRPBRP2BBwn332sjsoVlY6KApn.png'),
(19, 'Persipura', 'logo/LaF20DvRi7v3TiFnP9qw0y4mH20ol7WxoH0Eljlb.png'),
(20, 'PSIS Semarang', 'logo/2S9cojcRfvcnl6MZlCZXMmuN3G7B2zVj9AS4uStJ.png'),
(21, 'Persebaya', 'logo/qipDTqOeSpKkFvdluIvoWT2x4EPCyxi5CEJ7kczl.png'),
(22, 'PSMS Medan', 'logo/fLp4D2zz3MRrr6GuAVjrEhF5WaJOVgUwAdeH57hV.jpg'),
(23, 'FC Duri Kepa', 'logo/PWDsRcCe4HS1ltfiFo3M4xr466CsFQIHauR874D6.png');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_10_02_033811_clubs_table', 2);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `scores`
--

CREATE TABLE `scores` (
  `id` bigint(20) NOT NULL,
  `club_id` bigint(20) UNSIGNED NOT NULL,
  `menang` int(11) DEFAULT NULL,
  `seri` int(11) DEFAULT NULL,
  `kalah` int(11) DEFAULT NULL,
  `gm` int(11) DEFAULT NULL,
  `gk` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `scores`
--

INSERT INTO `scores` (`id`, `club_id`, `menang`, `seri`, `kalah`, `gm`, `gk`, `created_at`, `updated_at`) VALUES
(6, 23, 1, 0, 0, 10, 0, '2021-10-02 10:34:43', '2021-10-02 17:34:43'),
(7, 14, 1, 0, 0, 2, 1, '2021-10-02 10:35:28', '2021-10-02 17:35:28'),
(8, 16, 0, 0, 1, 0, 2, '2021-10-02 10:35:37', '2021-10-02 17:35:37'),
(9, 17, 0, 1, 0, 1, 1, '2021-10-02 10:35:45', '2021-10-02 17:35:45'),
(10, 19, 0, 0, 1, 2, 4, '2021-10-02 10:35:56', '2021-10-02 17:35:56'),
(11, 14, 0, 1, 0, 2, 2, '2021-10-02 10:36:04', '2021-10-02 17:36:04'),
(12, 22, 0, 0, 1, 3, 4, '2021-10-02 10:36:39', '2021-10-02 17:36:39'),
(13, 14, 1, 0, 0, 1, 0, '2021-10-02 10:36:49', '2021-10-02 17:36:49'),
(14, 23, 1, 0, 0, 3, 0, '2021-10-02 10:36:58', '2021-10-02 17:36:58'),
(15, 14, 1, 0, 0, 3, 0, '2021-10-02 10:37:06', '2021-10-02 17:37:06'),
(16, 14, 1, 0, 0, 3, 0, '2021-10-02 10:37:19', '2021-10-02 17:37:19'),
(17, 23, 1, 0, 0, 3, 0, '2021-10-02 10:37:31', '2021-10-02 17:37:31'),
(18, 23, 1, 0, 0, 3, 0, '2021-10-02 10:37:38', '2021-10-02 17:37:38'),
(19, 23, 1, 0, 0, 10, 1, '2021-10-02 13:40:28', '2021-10-02 20:40:28'),
(20, 15, 0, 1, 0, 2, 2, '2021-10-02 13:41:37', '2021-10-02 20:41:37'),
(21, 16, 1, 0, 0, 5, 3, '2021-10-02 13:41:45', '2021-10-02 20:41:45'),
(22, 17, 1, 0, 0, 2, 0, '2021-10-02 13:41:53', '2021-10-02 20:41:53'),
(23, 18, 0, 1, 0, 3, 3, '2021-10-02 13:42:18', '2021-10-02 20:42:18'),
(24, 19, 0, 0, 1, 0, 1, '2021-10-02 13:42:33', '2021-10-02 20:42:33'),
(25, 20, 0, 0, 1, 0, 2, '2021-10-02 13:42:45', '2021-10-02 20:42:45'),
(26, 21, 0, 1, 0, 0, 0, '2021-10-02 13:42:55', '2021-10-02 20:42:55'),
(27, 16, 0, 1, 0, 3, 3, '2021-10-02 16:16:11', '2021-10-02 23:16:11'),
(29, 23, 1, 0, 0, 5, 0, '2021-10-02 17:07:01', '2021-10-03 00:07:01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `email`, `password`) VALUES
(1, 'Abdul Gani', 'Wijaya', 'abgan', 'gani@email.com', '123'),
(2, 'Abdul Gani', 'Wijaya', 'abgan1', 'gani1@email.com', '$2y$10$Sm0lEB9lPh6YR7drQ3gS5eOiH2fJkzxK61E6rVaGxu0Si60UzYlEq'),
(3, 'Abdul Gani', 'Wijaya', 'abgan2', 'gani2@email.com', '$2y$10$XZCBLk5AboP7QpIsnuXpm.ecCeC.A2.E9mE/ACqU1yLnedIefe6Hy'),
(4, 'Abdul Gani', 'Wijaya', 'abgan3', 'gani3@email.com', '$2y$10$v66L4OtFOTRnJIzNXEzyi.aPReO9h5RN5nF.WD.mGxkwqL9aE0R2m'),
(5, 'Abdul Gani', 'Wijaya', 'abgan4', 'gani4@email.com', '$2y$10$1ZL8iStF9/tsWEevSjifI.kazlIEgO./O.cgsvnUc3NPlrutxW.ly'),
(6, 'Abdul Gani', 'Wijaya', 'abgan5', 'gani5@email.com', '$2y$10$Gnre9P/innYdeGXNtKO4M.N1fmRzKE3z.7R8qEvUaQ0shtxEVeU7a'),
(7, 'Abdul Gani', 'Wijaya', 'abgan6', 'abgan6@gmail.com', '$2y$10$rdPiQ//He2CdvwP/BrCdW.JpfFJKNwalEa8zVTYHyQqesQHWk4Gx6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clubs`
--
ALTER TABLE `clubs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `scores`
--
ALTER TABLE `scores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clubs`
--
ALTER TABLE `clubs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `scores`
--
ALTER TABLE `scores`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
