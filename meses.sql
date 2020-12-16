-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2020 at 02:37 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `meses`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `forums`
--

CREATE TABLE `forums` (
  `id_forum` bigint(20) UNSIGNED NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `kelas_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategori_soal`
--

CREATE TABLE `kategori_soal` (
  `id_kategori` bigint(20) UNSIGNED NOT NULL,
  `nama_kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori_soal`
--

INSERT INTO `kategori_soal` (`id_kategori`, `nama_kategori`, `created_at`, `updated_at`) VALUES
(1, 'Saraf', NULL, NULL),
(2, 'Psikiatri', NULL, NULL),
(3, 'THT', NULL, NULL),
(4, 'Mata', NULL, NULL),
(5, 'Respirasi', NULL, NULL),
(6, 'Kardiologi', NULL, NULL),
(7, 'Gastrohepato', NULL, NULL),
(8, 'Ginjal', NULL, NULL),
(9, 'Reproduksi', NULL, NULL),
(10, 'Endokrin', NULL, NULL),
(11, 'Hematoimuno', NULL, NULL),
(12, 'Muskuloskeletal', NULL, NULL),
(13, 'Integumentum', NULL, NULL),
(14, 'Sistem Kesehatan', NULL, NULL),
(15, 'Metodologi', NULL, NULL),
(16, 'Etika', NULL, NULL),
(17, 'Forensik', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abstraksi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagesdesc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `funfact` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `kesimpulan1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kesimpulan2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `faq1` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `ans1` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `faq2` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `ans2` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `judul`, `abstraksi`, `body`, `link`, `images`, `imagesdesc`, `funfact`, `kesimpulan1`, `kesimpulan2`, `faq1`, `ans1`, `faq2`, `ans2`, `created_at`, `updated_at`) VALUES
(1, 'Saraf', 'Ini Abstraksi Blok 1', 'Contoh isi\r\n<br>\r\nBody Block 1', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/4BDZXPhIfLg\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '-', 'Deskripsi Foto', 'Funfact adalah tempat menaruh fakta unik', '<b>kesimpulan</b> pertama', '<b>kesimpulan</b> kedua', 'Pertanyaan 1', 'Jawaban 1', 'Pertanyaan 2', 'Jawaban 2', NULL, NULL),
(2, 'Psikiatri', 'Ini Abstraksi Blok 2', 'Contoh isi\r\n<br>\r\nBody Blok 2', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/FOFZfxaT9PY\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '-', 'Deskripsi Foto', 'Funfact adalah tempat menaruh fakta unik', '<b>kesimpulan</b> pertama', '<b>kesimpulan</b> kedua', 'Pertanyaan 1', 'Jawaban 1', 'Pertanyaan 2', 'Jawaban 2', NULL, NULL),
(3, 'THT', 'Ini Abstraksi Blok 3', 'Contoh isi\r\n<br>\r\nBody Blok 3', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/FOFZfxaT9PY\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '-', 'Deskripsi Foto', 'Funfact adalah tempat menaruh fakta unik', '<b>kesimpulan</b> pertama', '<b>kesimpulan</b> kedua', 'Pertanyaan 1', 'Jawaban 1', 'Pertanyaan 2', 'Jawaban 2', NULL, NULL),
(4, 'Mata', 'Ini Abstraksi Blok 4', 'Contoh isi\r\n<br>\r\nBody Blok 4', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/FOFZfxaT9PY\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '-', 'Deskripsi Foto', 'Funfact adalah tempat menaruh fakta unik', '<b>kesimpulan</b> pertama', '<b>kesimpulan</b> kedua', 'Pertanyaan 1', 'Jawaban 1', 'Pertanyaan 2', 'Jawaban 2', NULL, NULL),
(5, 'Respirasi', 'Ini Abstraksi Blok 5', 'Contoh isi <br> Body Blok 5', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/FOFZfxaT9PY\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '-', 'Deskripsi Foto', 'Funfact adalah tempat menaruh fakta unik', '<b>kesimpulan</b> pertama', '<b>kesimpulan</b> kedua', 'Pertanyaan 1', 'Jawaban 1', 'Pertanyaan 2', 'Jawaban 2', NULL, NULL),
(6, 'Kardiologi', 'Ini Abstraksi Blok 6', 'Contoh isi &nbsp; Body Blok 6', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/FOFZfxaT9PY\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '-', 'Deskripsi Foto', 'Funfact adalah tempat menaruh fakta unik', '<b>kesimpulan</b> pertama', '<b>kesimpulan</b> kedua', 'Pertanyaan 1', 'Jawaban 1', 'Pertanyaan 2', 'Jawaban 2', NULL, NULL),
(7, 'Gastrohepato', 'Ini Abstraksi Blok 7', 'A<br><br>Hi<br><br>tes', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/FOFZfxaT9PY\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '-', 'Deskripsi Foto', 'Funfact adalah tempat menaruh fakta unik', '<b>kesimpulan</b> pertama', '<b>kesimpulan</b> kedua', 'Pertanyaan 1', 'Jawaban 1', 'Pertanyaan 2', 'Jawaban 2', NULL, NULL),
(8, 'Ginjal', 'Ini Abstraksi Blok 8', 'Contoh isi <br> Body Blok 8', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/FOFZfxaT9PY\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '-', 'Deskripsi Foto', 'Funfact adalah tempat menaruh fakta unik', '<b>kesimpulan</b> pertama', '<b>kesimpulan</b> kedua', 'Pertanyaan 1', 'Jawaban 1', 'Pertanyaan 2', 'Jawaban 2', NULL, NULL),
(9, 'Reproduksi', 'Ini Abstraksi Blok 9', 'Contoh isi <br> Body Blok 9', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/FOFZfxaT9PY\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '-', 'Deskripsi Foto', 'Funfact adalah tempat menaruh fakta unik', '<b>kesimpulan</b> pertama', '<b>kesimpulan</b> kedua', 'Pertanyaan 1', 'Jawaban 1', 'Pertanyaan 2', 'Jawaban 2', NULL, NULL),
(10, 'Endokrin', 'Ini Abstraksi Blok 10', 'Contoh isi <br> Body Blok 10', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/FOFZfxaT9PY\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '-', 'Deskripsi Foto', 'Funfact adalah tempat menaruh fakta unik', '<b>kesimpulan</b> pertama', '<b>kesimpulan</b> kedua', 'Pertanyaan 1', 'Jawaban 1', 'Pertanyaan 2', 'Jawaban 2', NULL, NULL),
(11, 'Hematoimuno', 'Ini Abstraksi Blok 11', 'Contoh isi <br> Body Blok 11', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/FOFZfxaT9PY\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '-', 'Deskripsi Foto', 'Funfact adalah tempat menaruh fakta unik', '<b>kesimpulan</b> pertama', '<b>kesimpulan</b> kedua', 'Pertanyaan 1', 'Jawaban 1', 'Pertanyaan 2', 'Jawaban 2', NULL, NULL),
(12, 'Muskuloskeletal', 'Ini Abstraksi Blok 12', 'Contoh isi <br> Body Blok 12', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/FOFZfxaT9PY\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '-', 'Deskripsi Foto', 'Funfact adalah tempat menaruh fakta unik', '<b>kesimpulan</b> pertama', '<b>kesimpulan</b> kedua', 'Pertanyaan 1', 'Jawaban 1', 'Pertanyaan 2', 'Jawaban 2', NULL, NULL);

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
(4, '2020_12_15_054803_create_kelas_table', 1),
(5, '2020_12_15_054909_create_videos_table', 1),
(6, '2020_12_15_073711_create_kategori_soal_table', 1),
(7, '2020_12_15_073818_create_soals_table', 1),
(8, '2020_12_15_083503_create_forums_table', 1);

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
-- Table structure for table `soals`
--

CREATE TABLE `soals` (
  `id_soal` bigint(20) UNSIGNED NOT NULL,
  `cover_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body_soal` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `a` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `b` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `d` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jawaban` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `kategori_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `soals`
--

INSERT INTO `soals` (`id_soal`, `cover_image`, `body_soal`, `a`, `b`, `c`, `d`, `jawaban`, `created_at`, `updated_at`, `kategori_id`) VALUES
(1, '-', 'Pertanyaan 1', 'Opsi 1', 'Opsi 2', 'Opsi 3', 'Opsi 4', 'KunJaw', NULL, NULL, 1);

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
(1, 'Aulia Ihza Hendradi', 'auliaihza@gmail.com', NULL, '$2y$10$eWJtAxX8gkS6imlyuOXICOLpRwHOeqsQVXcogsjWVND9PBdPoVhJ.', 'zamtc8jBcg4VVhsxjAtPz4G4jS7zzvVD9D8kPtff3k65Td9N8iDrREcBbZAM', '2020-12-15 22:55:13', '2020-12-15 22:55:13');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id_video` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id_video`, `title`, `body`, `link`, `created_at`, `updated_at`) VALUES
(1, 'Video 1', 'Body Video 1', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/j1VCIBfcfUM\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', NULL, NULL),
(2, 'Video 2', 'Body Video 2', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/2wC8nNwvsns\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', NULL, NULL),
(3, 'Video 3', 'Desk Video 3', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/2wC8nNwvsns\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', NULL, NULL),
(4, 'Video 4', 'Desk Video 4', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/2wC8nNwvsns\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forums`
--
ALTER TABLE `forums`
  ADD PRIMARY KEY (`id_forum`),
  ADD KEY `forums_kelas_id_foreign` (`kelas_id`);

--
-- Indexes for table `kategori_soal`
--
ALTER TABLE `kategori_soal`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

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
-- Indexes for table `soals`
--
ALTER TABLE `soals`
  ADD PRIMARY KEY (`id_soal`),
  ADD KEY `soals_kategori_id_foreign` (`kategori_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id_video`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forums`
--
ALTER TABLE `forums`
  MODIFY `id_forum` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori_soal`
--
ALTER TABLE `kategori_soal`
  MODIFY `id_kategori` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `soals`
--
ALTER TABLE `soals`
  MODIFY `id_soal` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id_video` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `forums`
--
ALTER TABLE `forums`
  ADD CONSTRAINT `forums_kelas_id_foreign` FOREIGN KEY (`kelas_id`) REFERENCES `kelas` (`id_kelas`);

--
-- Constraints for table `soals`
--
ALTER TABLE `soals`
  ADD CONSTRAINT `soals_kategori_id_foreign` FOREIGN KEY (`kategori_id`) REFERENCES `kategori_soal` (`id_kategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
