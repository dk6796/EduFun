-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Nov 2024 pada 14.48
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edufun`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `SubjectID` bigint(20) UNSIGNED NOT NULL,
  `ArticleImage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `WriterID` bigint(20) UNSIGNED NOT NULL,
  `ArticleContent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `articles`
--

INSERT INTO `articles` (`id`, `SubjectID`, `ArticleImage`, `WriterID`, `ArticleContent`, `created_at`, `updated_at`) VALUES
(1, 1, 'https://via.placeholder.com/640x480.png/00dd77?text=recusandae', 1, 'Corrupti expedita earum perspiciatis enim porro facere dolor. Non alias in itaque et quam doloremque. Suscipit hic est totam voluptas.', '2024-11-05 17:35:39', '2024-11-05 17:35:39'),
(2, 5, 'https://via.placeholder.com/640x480.png/00ddbb?text=aspernatur', 2, 'Voluptas non consequatur laudantium facilis. Voluptas rerum asperiores voluptas aut. Provident voluptates dolores beatae iure voluptate. Accusantium quo qui consectetur distinctio.', '2024-11-05 17:35:39', '2024-11-05 17:35:39'),
(3, 6, 'https://via.placeholder.com/640x480.png/00ffbb?text=doloremque', 3, 'Fugiat ut eum nihil aut necessitatibus minima. A eius neque dolor distinctio vel quaerat. Et et qui et.', '2024-11-05 17:35:39', '2024-11-05 17:35:39'),
(4, 3, 'https://via.placeholder.com/640x480.png/009922?text=repellendus', 3, 'Cum doloremque aut voluptatem iusto consequatur cupiditate. Adipisci eum aut labore doloremque atque. Ut qui asperiores dignissimos minus.', '2024-11-05 17:35:39', '2024-11-05 17:35:39'),
(5, 2, 'https://via.placeholder.com/640x480.png/003366?text=voluptates', 2, 'Dolorem qui tenetur porro. Odio excepturi culpa aliquid incidunt non et rerum atque.', '2024-11-05 17:35:39', '2024-11-05 17:35:39'),
(6, 4, 'https://via.placeholder.com/640x480.png/0011ff?text=voluptatem', 3, 'Iure suscipit dolore blanditiis temporibus cumque quia laudantium rerum. Explicabo eum officia cupiditate voluptatem. Atque qui eveniet temporibus aspernatur perferendis.', '2024-11-05 17:35:39', '2024-11-05 17:35:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `CategoryName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `CategoryName`, `created_at`, `updated_at`) VALUES
(1, 'Interactive Multimedia', '2024-11-05 17:35:39', '2024-11-05 17:35:39'),
(2, 'Software Engineering', '2024-11-05 17:35:39', '2024-11-05 17:35:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2024_11_05_130319_create_categories_table', 1),
(3, '2024_11_05_130405_create_subjects_table', 1),
(4, '2024_11_05_130521_create_writers_table', 1),
(5, '2024_11_05_130619_create_articles_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
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
-- Struktur dari tabel `subjects`
--

CREATE TABLE `subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `CategoryID` bigint(20) UNSIGNED NOT NULL,
  `SubjectName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `subjects`
--

INSERT INTO `subjects` (`id`, `CategoryID`, `SubjectName`, `created_at`, `updated_at`) VALUES
(1, 1, 'Human and Computer Interaction', '2024-11-05 17:35:39', '2024-11-05 17:35:39'),
(2, 1, 'User \n                Experience', '2024-11-05 17:35:39', '2024-11-05 17:35:39'),
(3, 1, 'User Experience for Digital Immersive Technology', '2024-11-05 17:35:39', '2024-11-05 17:35:39'),
(4, 2, 'Pattern Software Design', '2024-11-05 17:35:39', '2024-11-05 17:35:39'),
(5, 2, 'Agile Software \n                Development', '2024-11-05 17:35:39', '2024-11-05 17:35:39'),
(6, 2, 'Code Reengineering', '2024-11-05 17:35:39', '2024-11-05 17:35:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `writers`
--

CREATE TABLE `writers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `WriterName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `WriterDesc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `WriterProfPict` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `writers`
--

INSERT INTO `writers` (`id`, `WriterName`, `WriterDesc`, `WriterProfPict`, `created_at`, `updated_at`) VALUES
(1, 'Mrs. Gladyce Kunde', 'Interactive Multimedia Specialist', 'https://i.natgeofe.com/n/548467d8-c5f1-4551-9f58-6817a8d2c45e/NationalGeographic_2572187_square.jpg', '2024-11-05 17:35:39', '2024-11-05 17:35:39'),
(2, 'Anna Metz', 'Software Engineering Specialist', 'https://i.natgeofe.com/n/4f5aaece-3300-41a4-b2a8-ed2708a0a27c/domestic-dog_thumb_square.jpg', '2024-11-05 17:35:39', '2024-11-05 17:35:39'),
(3, 'Blanca Corkery', 'Interactive Multimedia Specialist', 'https://www.otterspecialistgroup.org/osg-newsite/wp-content/uploads/2017/04/ThinkstockPhotos-827261360.jpg', '2024-11-05 17:35:39', '2024-11-05 17:35:39');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articles_subjectid_foreign` (`SubjectID`),
  ADD KEY `articles_writerid_foreign` (`WriterID`);

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subjects_categoryid_foreign` (`CategoryID`);

--
-- Indeks untuk tabel `writers`
--
ALTER TABLE `writers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `writers`
--
ALTER TABLE `writers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_subjectid_foreign` FOREIGN KEY (`SubjectID`) REFERENCES `subjects` (`id`),
  ADD CONSTRAINT `articles_writerid_foreign` FOREIGN KEY (`WriterID`) REFERENCES `writers` (`id`);

--
-- Ketidakleluasaan untuk tabel `subjects`
--
ALTER TABLE `subjects`
  ADD CONSTRAINT `subjects_categoryid_foreign` FOREIGN KEY (`CategoryID`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
