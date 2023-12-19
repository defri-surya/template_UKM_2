-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 20 Jun 2022 pada 04.48
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dinkop-jemparingan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detailtransaksis`
--

CREATE TABLE `detailtransaksis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `transaksi_id` bigint(20) UNSIGNED NOT NULL,
  `produk_id` bigint(20) UNSIGNED NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `galleries`
--

INSERT INTO `galleries` (`id`, `foto`, `judul`, `created_at`, `updated_at`) VALUES
(1, 'upload/gallery/1652161008gallery1566792432_Jemparingan.jpg', 'Jemparingan Satu', '2022-05-09 22:36:48', '2022-05-09 22:36:48'),
(2, 'upload/gallery/1652161030gallery11918--730x420px.jpg', 'Jemparingan dua', '2022-05-09 22:37:10', '2022-05-09 22:37:10'),
(3, 'upload/gallery/1652161057gallery11917--730x420px.jpg', 'Jemparingan Tiga', '2022-05-09 22:37:37', '2022-05-09 22:37:37'),
(4, 'upload/gallery/1652162003galleryalat jem.jpg', 'Panah', '2022-05-09 22:53:23', '2022-05-09 22:53:23'),
(5, 'upload/gallery/1652162022galleryalat jemb.jpg', 'Busur', '2022-05-09 22:53:42', '2022-05-09 22:53:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategoriproduks`
--

CREATE TABLE `kategoriproduks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kategoriproduks`
--

INSERT INTO `kategoriproduks` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Kriya Alat Jemparing', '2022-05-09 22:40:12', '2022-05-09 22:40:42'),
(2, 'Edukasi Jemparing', '2022-05-09 22:40:29', '2022-05-09 22:40:29');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2022_03_28_033148_create_profiles_table', 1),
(5, '2022_03_28_040316_create_produkunggulans_table', 1),
(6, '2022_03_28_040417_create_kategoriproduks_table', 1),
(7, '2022_03_28_040451_create_produks_table', 1),
(8, '2022_03_28_040827_create_galleries_table', 1),
(9, '2022_04_27_073110_create_transaksis_table', 1),
(10, '2022_04_27_073505_create_detailtransaksis_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `produks`
--

CREATE TABLE `produks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori_id` bigint(20) UNSIGNED NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `produks`
--

INSERT INTO `produks` (`id`, `kategori_id`, `foto`, `nama`, `slug`, `harga`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 1, 'upload/produk/1652161643produkalat jem.jpg', 'Alat Jemparingan', 'alat-jemparingan', '200000', 'Sebermula, seni panahan ini hanya berkembang di kalangan Kerajaan Mataram, bahkan dijadikan perlombaan bagi prajurit kerajaan. Seiring waktu jemparingan semakin diminati dan banyak dimainkan rakyat biasa.', '2022-05-09 22:47:23', '2022-05-09 22:47:23'),
(2, 1, 'upload/produk/1652161702produkalat jemb.jpg', 'Busur Panah', 'busur-panah', '300000', 'Adapun peralatan yang digunakan dalam seni jemparingan terdiri dari deder (batang anak panah) dan bedor (mata panah). Yang lainnya adalah wulu (bulu pada pangkal panah), dan nyenyep (bagian pangkal dari jemparing pada tali busur saat memanah).', '2022-05-09 22:48:22', '2022-05-09 22:48:22'),
(3, 1, 'upload/produk/1652161781produkseni_jemparingan_set.jpg', 'Jemparingan Set', 'jemparingan-set', '400000', 'Jemparingan, Anda mengenal seni olahraga asli Jogja ini? Betul, ini adalah olahraga panahan khas Kerajaan Mataram. Seni sarat makna tersebut bemula dari Kasultanan Ngayogyakarta Hadiningrat dan dikenal pula dengan jemparingan gaya Mataram Ngayogyakarta.', '2022-05-09 22:49:41', '2022-05-09 22:49:41'),
(5, 1, 'upload/produk/1655351172produk1647412338produkkaos1.1.jpg', 'Jemparing Panah', 'jemparing-panah', '250000', 'jemparinga panah', '2022-06-15 20:46:12', '2022-06-15 20:46:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produkunggulans`
--

CREATE TABLE `produkunggulans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `produkunggulans`
--

INSERT INTO `produkunggulans` (`id`, `foto`, `nama`, `slug`, `harga`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'upload/produkunggulan/1655186840produkunggulan1647412338produkkaos1.1.jpg', 'Alat Jemparingan', 'alat-jemparingan', '-', 'jemparingan agak berbeda dengan olahraga panahan. Bila panahan umumnya dilakukan berdiri, jemparingan dimainkan dalam posisi duduk bersila. Pemanah jemparingan juga tidak membidik dengan mata tetapi memposisikan busur di depan perut sehingga bidikan didasarkan pada perasaan memanah.', '2022-05-09 22:50:51', '2022-06-13 23:07:20'),
(2, 'upload/produkunggulan/1652161919produkunggulanseni_jemparingan_set.jpg', 'Jemparing Set', 'jemparing-set', '-', 'Gaya memanah ini selaras dengan filosofi jemparingan gaya Mataram yaitu pamenthanging gandewa pamanthening cipta. Artinya, membentangnya busur seiring dengan konsentrasi yang ditujukan pada sasaran yang dibidik. Dalam kehidupan sehari-hari hal itu bermakna manusia yang punya cita-cita hendaknya berkonsentrasi penuh pada cita-citanya agar bisa tercapai.', '2022-05-09 22:51:59', '2022-05-09 22:51:59'),
(6, 'upload/produkunggulan/1655191333produkunggulanpanah1.jpeg', 'Anak Panah', 'anak-panah', '425000', 'anak panah', '2022-06-14 00:22:13', '2022-06-14 00:22:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `foto1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ytb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ig` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `profiles`
--

INSERT INTO `profiles` (`id`, `foto1`, `foto2`, `foto3`, `alamat`, `email`, `phone`, `video`, `ytb`, `fb`, `ig`, `created_at`, `updated_at`) VALUES
(1, 'upload/profil/1652160959profil1566792432_Jemparingan.jpg', 'upload/profil/1652160959profil11917--730x420px.jpg', 'upload/profil/1652160959profil11919--730x420px.jpg', 'Jl. Garuda No.18 B, Pelem Mulong, Banguntapan, Kec. Banguntapan, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55198', 'ukm@gmail.com', '62858989082', 'https://www.youtube.com/embed/U8CUoTpGyfY', 'www.youtube.com', 'www.facebook.com', 'www.instagram.com', NULL, '2022-06-06 21:39:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksis`
--

CREATE TABLE `transaksis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `kode_invoice` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_asal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_customer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tlp_customer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_customer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_qty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtotal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_berat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kurir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ongkir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prov_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kab_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provinsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kabupaten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_pembayaran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
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
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@mail.com', NULL, '$2y$10$WknRotaDxKZPOOpvJnqbF.LHwqf4IRhHwADRm8PMsQ3TvU2TS.0/m', NULL, NULL, NULL);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `produks_kategori_id_foreign` (`kategori_id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `kategoriproduks`
--
ALTER TABLE `kategoriproduks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `produks`
--
ALTER TABLE `produks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `produkunggulans`
--
ALTER TABLE `produkunggulans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `transaksis`
--
ALTER TABLE `transaksis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detailtransaksis`
--
ALTER TABLE `detailtransaksis`
  ADD CONSTRAINT `detailtransaksis_produk_id_foreign` FOREIGN KEY (`produk_id`) REFERENCES `produks` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detailtransaksis_transaksi_id_foreign` FOREIGN KEY (`transaksi_id`) REFERENCES `transaksis` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `produks`
--
ALTER TABLE `produks`
  ADD CONSTRAINT `produks_kategori_id_foreign` FOREIGN KEY (`kategori_id`) REFERENCES `kategoriproduks` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
