-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 27 Nov 2023 pada 06.29
-- Versi server: 8.0.30
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommarce-kcn`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detailtransaksis`
--

CREATE TABLE `detailtransaksis` (
  `id` bigint UNSIGNED NOT NULL,
  `transaksi_id` bigint UNSIGNED NOT NULL,
  `produk_id` bigint UNSIGNED NOT NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_produk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint UNSIGNED NOT NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `judul` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `galleries`
--

INSERT INTO `galleries` (`id`, `foto`, `judul`, `created_at`, `updated_at`) VALUES
(1, 'upload/gallery/1700202264galleryWhy-AngularJS-A1.jpg', 'Programmer PHP Laravel', '2023-11-16 23:24:24', '2023-11-16 23:24:24'),
(2, 'upload/gallery/1700202291gallerybootstrap-responsive-front-end-framework.jpg', 'Boostrap', '2023-11-16 23:24:51', '2023-11-16 23:24:51'),
(3, 'upload/gallery/1700202309galleryWhy-AngularJS-A1.jpg', 'Angular JS', '2023-11-16 23:25:09', '2023-11-16 23:25:09'),
(4, 'upload/gallery/1700202329gallerysistemanalis.jpg', 'System Analys', '2023-11-16 23:25:29', '2023-11-16 23:25:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategoriproduks`
--

CREATE TABLE `kategoriproduks` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `link`
--

CREATE TABLE `link` (
  `id` bigint UNSIGNED NOT NULL,
  `url_marketplase` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `url_wa` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `link`
--

INSERT INTO `link` (`id`, `url_marketplase`, `url_wa`, `created_at`, `updated_at`) VALUES
(1, 'https://shopee.co.id/gbgbgbg', '12345678956456', NULL, '2023-11-17 00:43:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `linkpaketdua`
--

CREATE TABLE `linkpaketdua` (
  `id` bigint UNSIGNED NOT NULL,
  `marketplase` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `wa` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `linkpaketdua`
--

INSERT INTO `linkpaketdua` (`id`, `marketplase`, `wa`, `created_at`, `updated_at`) VALUES
(3, 'https://shopee.co.id/', '1234567890', '2023-11-23 19:56:00', '2023-11-23 19:56:00'),
(4, 'https://www.lazada.co.id/', '1234567890', '2023-11-23 19:56:21', '2023-11-23 19:56:21'),
(5, 'https://www.tokopedia.com/', '1234567890', '2023-11-23 19:56:34', '2023-11-23 19:56:34'),
(6, 'https://www.blibli.com/', '1234567890', '2023-11-23 19:56:56', '2023-11-23 19:56:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2022_03_28_033148_create_profiles_table', 1),
(5, '2022_03_28_040316_create_produkunggulans_table', 1),
(6, '2022_03_28_040417_create_kategoriproduks_table', 1),
(7, '2022_03_28_040451_create_produks_table', 1),
(8, '2022_03_28_040827_create_galleries_table', 1),
(9, '2022_04_27_073110_create_transaksis_table', 1),
(10, '2022_04_27_073505_create_detailtransaksis_table', 1),
(11, '2023_11_14_083228_create__link_table', 1),
(12, '2023_11_22_043207_create_linkpaketdua_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `produks`
--

CREATE TABLE `produks` (
  `id` bigint UNSIGNED NOT NULL,
  `foto` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `foto2` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `foto3` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `produks`
--

INSERT INTO `produks` (`id`, `foto`, `foto2`, `foto3`, `nama`, `slug`, `harga`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'upload/produk/1700207551produkWhy-AngularJS-A1.jpg', 'upload/produk/1700207551produksistemanalis.jpg', 'upload/produk/1700207551produkmarketing.jpeg', 'Produk Tets 1', 'produk-tets-1', '150000', 'Kala Citra Nuswantara berdiri sejak tahun 2016 sebagai perseroan terbatas dengan bidang layanan Informasi dan Komunikasi, Periklanan, Digital Campaign, Penelitian, Pengembangan dan Konsultasi Keilmuan Sosial-Politik-Budaya yang mengedepankan keterbukaan dalam pengaplikasian ide – ide kreatif.', '2023-11-17 00:52:31', '2023-11-17 00:52:31'),
(2, 'upload/produk/1700207625produkJavascript-adalah-1.jpg', 'upload/produk/1700207625produkWordPress-Development.jpg', 'upload/produk/1700207625produkdesainer.jfif', 'Produk test 2', 'produk-test-2', '200000', 'o Video Company Profile o Video Profil Kreatif o Video Mini Profil o Video Iklan o Film Mini Series o Dan Lain-Lain.', '2023-11-17 00:53:45', '2023-11-17 00:53:45'),
(3, 'upload/produk/1700207727produkmobiledeveloper.jpeg', 'upload/produk/1700207727produkMaterialize-CSS-Tutorial.jpg', 'upload/produk/1700207727produkjavasale-301982-article-image-1630523474787.jpeg', 'Produk test 3', 'produk-test-3', '300000', 'o Pengembangan dan implementasi platform digital melalui aplikasi atau portal web, termasuk transaksi elektronik berupa payment gateway', '2023-11-17 00:55:27', '2023-11-17 00:55:27'),
(4, 'upload/produk/1700207816produk1691733390fileTugasPesertaWordPress-Development.jpg', 'upload/produk/1700207816produkbootstrap-responsive-front-end-framework.jpg', 'upload/produk/1700207816produkJavascript-adalah-1.jpg', 'Produk test 4', 'produk-test-4', '350000', 'o Kreasi dan realisasi promosi iklan baik melalui media offline maupun media online. o Produksi desain publikasi informasi di media cetak seperti poster, pamflet, brosur, baliho, layout buku dan lain-lain.', '2023-11-17 00:56:56', '2023-11-17 00:56:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produkunggulans`
--

CREATE TABLE `produkunggulans` (
  `id` bigint UNSIGNED NOT NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `produkunggulans`
--

INSERT INTO `produkunggulans` (`id`, `foto`, `nama`, `slug`, `harga`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'upload/produkunggulan/1700453568produkunggulanpelatihan bisnis.jpg', 'test', 'test', '1000000', 'test', '2023-11-19 21:12:48', '2023-11-19 21:12:48'),
(2, 'upload/produkunggulan/1700453598produkunggulanpelatihan bisnis.jpg', 'test 2', 'test-2', '120000', 'test 2', '2023-11-19 21:13:18', '2023-11-19 21:13:18'),
(3, 'upload/produkunggulan/1700453631produkunggulanbisnis online.png', 'produk test 3', 'produk-test-3', '500000', 'Produk test 3', '2023-11-19 21:13:51', '2023-11-19 21:13:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint UNSIGNED NOT NULL,
  `logo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `foto1` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `foto2` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `foto3` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ytb` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fb` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ig` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiktok` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `profiles`
--

INSERT INTO `profiles` (`id`, `logo`, `foto1`, `foto2`, `foto3`, `nama`, `email`, `phone`, `deskripsi`, `alamat`, `video`, `ytb`, `fb`, `ig`, `tiktok`, `created_at`, `updated_at`) VALUES
(1, 'upload/profil/1700201952profilclassentra.png', 'upload/profil/1700201989profil1652160959profil1566792432_Jemparingan.jpg', 'upload/profil/1700201989profil1652160959profil11917--730x420px.jpg', 'upload/profil/1700201989profil1652160959profil11919--730x420px.jpg', 'PT KALA CITRA NUSWANTARA', 'ukm@gmail.com', '62858989082', 'PT Kala Citra Nuswantara berdiri sejak tahun 2016 sebagai perusahaan Perseroan Terbatas yang bergerak dibidang layanan Informasi dan Komunikasi, focus dalam industry Periklanan, Digital Campaign, Penelitian, Pengembangan dan Konsultasi Keilmuan Sosial-Politik-Budaya. Oleh sebab itu PT Kala Citra Nuswantara selalu memberikan kualitas terbaik dalam pengembangan potensi, ide, kreativitas, kecerdasan dan ketelitian. PT Kala Citra Nuswantara berkomitmen untuk terus memperkuat dan meningkatkan kualitas perusahaan dengan fokus dalam penyediaan dasar-dasar pelayanan jasa, kecakapan dan keahlian intelektual, serta mampu menjawab tantangan dalam berbagai sektor melalui kemampuan perusahaan dalam membangun relasi sebagai mitra internal, juga mampu melayani pemangku kepentingan yang membutuhkan (pemerintah, masyarakat dan swasta).', 'Jl. Garuda No.18 B, Pelem Mulong, Banguntapan, Kec. Banguntapan, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55198', 'https://www.youtube.com/embed/AK9yxcqo4eM', 'https://www.youtube.com/watch?v=OKVqNYerp3M', 'www.facebook.com', 'www.instagram.com', 'www.tiktok.com', NULL, '2023-11-21 23:08:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksis`
--

CREATE TABLE `transaksis` (
  `id` bigint UNSIGNED NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `kode_invoice` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_asal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_customer` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tlp_customer` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_customer` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_qty` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtotal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_harga` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_berat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kurir` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ongkir` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `prov_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kab_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `provinsi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kabupaten` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_pembayaran` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `role`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'superadmin', 'admin@mail.com', NULL, '$2y$10$XSWew5YlMr5ZBMOAnDPUCOgMrLir0nX1Oh.WJmESDYtuzL/bkuN3C', NULL, NULL, NULL),
(2, 'Paketdua', 'paketdua', 'paketdua@mail.com', NULL, '$2y$10$1wpSigwFzJHSrAI35qs56ey7nICyoi.y66e4Oz.h7fHeE3hVD6rDa', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `detailtransaksis`
--
ALTER TABLE `detailtransaksis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detailtransaksis_transaksi_id_foreign` (`transaksi_id`),
  ADD KEY `detailtransaksis_produk_id_foreign` (`produk_id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategoriproduks`
--
ALTER TABLE `kategoriproduks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `link`
--
ALTER TABLE `link`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `linkpaketdua`
--
ALTER TABLE `linkpaketdua`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `produks`
--
ALTER TABLE `produks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `produkunggulans`
--
ALTER TABLE `produkunggulans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaksis`
--
ALTER TABLE `transaksis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `detailtransaksis`
--
ALTER TABLE `detailtransaksis`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kategoriproduks`
--
ALTER TABLE `kategoriproduks`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `link`
--
ALTER TABLE `link`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `linkpaketdua`
--
ALTER TABLE `linkpaketdua`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `produks`
--
ALTER TABLE `produks`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `produkunggulans`
--
ALTER TABLE `produkunggulans`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `transaksis`
--
ALTER TABLE `transaksis`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detailtransaksis`
--
ALTER TABLE `detailtransaksis`
  ADD CONSTRAINT `detailtransaksis_produk_id_foreign` FOREIGN KEY (`produk_id`) REFERENCES `produks` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detailtransaksis_transaksi_id_foreign` FOREIGN KEY (`transaksi_id`) REFERENCES `transaksis` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
