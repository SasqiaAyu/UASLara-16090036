-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 14 Jul 2019 pada 12.19
-- Versi server: 5.7.24
-- Versi PHP: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brownies`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` text COLLATE utf8mb4_unicode_ci,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `customers_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `customers`
--

INSERT INTO `customers` (`id`, `nama`, `email`, `email_verified_at`, `password`, `avatar`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'sasqia', 'sasqia@gmail.com', '2019-07-03 17:00:00', '1234567', 'ss', '1', NULL, NULL, NULL),
(2, 'ayu', 'ayusekali@gmail.com', '2019-07-03 17:00:00', '123456', 'qq', '1', NULL, NULL, NULL),
(3, 'raisa', 'andriani@gmail.com', '2019-07-23 17:00:00', '12345678', 'aa', '1', NULL, NULL, NULL),
(4, 'lestari', 'lestari_alam@gmail.com', '2019-07-17 17:00:00', '12345678', 'aa', '1', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_06_27_021932_create_customers_table', 1),
(4, '2019_06_27_041710_create_produks_table', 1),
(5, '2019_06_27_051530_create_pemesans_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesans`
--

DROP TABLE IF EXISTS `pemesans`;
CREATE TABLE IF NOT EXISTS `pemesans` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_customer` int(10) UNSIGNED NOT NULL,
  `id_produk` int(10) UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `konfirmasi` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pemesans_id_customer_foreign` (`id_customer`),
  KEY `pemesans_id_produk_foreign` (`id_produk`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pemesans`
--

INSERT INTO `pemesans` (`id`, `id_customer`, `id_produk`, `tanggal`, `alamat`, `no_hp`, `konfirmasi`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2019-07-02', 'jl.patimura slawi', '0987654321', '1', '1', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produks`
--

DROP TABLE IF EXISTS `produks`;
CREATE TABLE IF NOT EXISTS `produks` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama_produk` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rasa` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `produks`
--

INSERT INTO `produks` (`id`, `nama_produk`, `rasa`, `harga`, `gambar`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'brownis keju coklat', 'Coklat', 55000, '1562145182.jpg', '0', NULL, NULL, '2019-07-03 02:13:02', '2019-07-07 10:39:44'),
(2, 'brownies lagi', 'Mocca', 45000, '1562145293.png', '0', NULL, NULL, '2019-07-03 02:14:53', '2019-07-07 10:39:49'),
(3, 'brownies baru 2', 'Strawberry', 60000, '1562145315.jpg', '0', NULL, NULL, '2019-07-03 02:15:15', '2019-07-07 10:39:52'),
(4, 'brownies baru edit', 'Coklat', 540000, '1562145408.jpg', '0', NULL, NULL, '2019-07-03 02:16:48', '2019-07-03 02:16:55'),
(5, 'brownis edit', 'Original', 25000, '1562145544.jpg', '0', NULL, NULL, '2019-07-03 02:19:04', '2019-07-03 02:35:54'),
(6, 'brownis', 'Original', 34500, '1562145569.jpg', '0', NULL, NULL, '2019-07-03 02:19:29', '2019-07-07 10:39:57'),
(7, 'Brownies Coklat', 'Original', 55000, '1562521178.jpg', '1', NULL, NULL, NULL, '2019-07-07 10:39:38'),
(8, 'Brownies Pandan', 'Original', 45000, '1562521214.jpg', '1', NULL, NULL, NULL, '2019-07-07 10:40:14'),
(9, 'Brownies Strawbberry', 'Strawberry', 60000, '1562521235.jpg', '1', NULL, NULL, NULL, '2019-07-07 10:40:35'),
(10, 'Brownies Mocca', 'Mocca', 55000, '1562521251.jpg', '1', NULL, NULL, NULL, '2019-07-07 10:40:51'),
(11, 'Brownies Original', 'Original', 40000, '1562521297.jpg', '1', NULL, NULL, '2019-07-07 10:41:37', '2019-07-07 10:41:37'),
(12, 'ASDF', 'Strawberry', 123456, '1562749929.png', '1', NULL, NULL, '2019-07-10 02:12:09', '2019-07-10 02:12:09'),
(13, 'qweefghjk', 'Original', 12345, '1562758788.jpg', '0', NULL, NULL, '2019-07-10 04:39:48', '2019-07-10 04:43:44'),
(14, 'kue kue', 'Original', 15000, '1562759562.jpg', '1', NULL, NULL, '2019-07-10 04:52:42', '2019-07-10 04:52:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `avatar`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'sasqia', 'sasqia@gmail.com', NULL, '123456', 'aa', NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
