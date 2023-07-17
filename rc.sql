-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2023 at 09:18 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rc`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
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
(5, '2022_05_23_023234_create_pendaftarans_table', 1),
(6, '2022_05_23_030851_create_tm_periodes_table', 1),
(7, '2022_05_23_032210_create_tm_agamas_table', 1),
(8, '2022_05_23_032727_create_tm_kelass_table', 1),
(9, '2022_05_23_033133_create_tm_divisis_table', 1),
(10, '2022_05_23_033520_create_tm_izin_ortus_table', 1),
(11, '2022_05_25_030322_create_tm_walass_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pendaftarans`
--

CREATE TABLE `pendaftarans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_periode` tinyint(4) NOT NULL,
  `id_no` char(4) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `id_agama` tinyint(4) NOT NULL,
  `id_kelas` tinyint(4) NOT NULL,
  `id_walas` tinyint(4) NOT NULL,
  `id_divisi` tinyint(4) NOT NULL,
  `alasan` text NOT NULL,
  `id_izin_ortu` tinyint(4) NOT NULL,
  `hp_siswa` char(255) NOT NULL,
  `hp_ortu` char(255) NOT NULL,
  `akun_ig` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tm_agamas`
--

CREATE TABLE `tm_agamas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `agama` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tm_agamas`
--

INSERT INTO `tm_agamas` (`id`, `agama`, `created_at`, `updated_at`) VALUES
(1, 'Islam', '2023-05-29 00:17:49', NULL),
(2, 'Katholik', '2023-05-29 00:17:49', NULL),
(3, 'Protestan', '2023-05-29 00:17:49', NULL),
(4, 'Hindu', '2023-05-29 00:17:49', NULL),
(5, 'Buddha', '2023-05-29 00:17:49', NULL),
(6, 'Konghucu', '2023-05-29 00:17:49', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tm_divisis`
--

CREATE TABLE `tm_divisis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `divisi` char(5) NOT NULL,
  `divisi_lengkap` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tm_divisis`
--

INSERT INTO `tm_divisis` (`id`, `divisi`, `divisi_lengkap`, `created_at`, `updated_at`) VALUES
(1, 'RPL', 'Rekayasa Perangkat Lunak', '2023-05-29 00:17:49', NULL),
(2, 'TKJ', 'Teknik Komputer Dan Jaringan', '2023-05-29 00:17:49', NULL),
(3, 'MM', 'Multimedia', '2023-05-29 00:17:49', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tm_izin_ortus`
--

CREATE TABLE `tm_izin_ortus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `izin_ortu` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tm_izin_ortus`
--

INSERT INTO `tm_izin_ortus` (`id`, `izin_ortu`, `created_at`, `updated_at`) VALUES
(1, 'Ya', '2023-05-29 00:17:49', NULL),
(2, 'Tidak', '2023-05-29 00:17:49', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tm_kelass`
--

CREATE TABLE `tm_kelass` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kelas` varchar(15) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tm_kelass`
--

INSERT INTO `tm_kelass` (`id`, `kelas`, `created_at`, `updated_at`) VALUES
(1, 'X.IPA-1', '2023-05-29 00:17:49', NULL),
(2, 'X.IPA-2', '2023-05-29 00:17:49', NULL),
(3, 'X.IPA-3', '2023-05-29 00:17:49', NULL),
(4, 'X.IPA-4', '2023-05-29 00:17:49', NULL),
(5, 'X.IPA-5', '2023-05-29 00:17:49', NULL),
(6, 'X.IPS-1', '2023-05-29 00:17:49', NULL),
(7, 'X.IPS-2', '2023-05-29 00:17:49', NULL),
(8, 'X.IPS-3', '2023-05-29 00:17:49', NULL),
(9, 'X.P.A-1', '2023-05-29 00:17:49', NULL),
(10, 'X.U.A-1', '2023-05-29 00:17:49', NULL),
(11, 'X.U.A-2', '2023-05-29 00:17:49', NULL),
(12, 'X.U.A-3', '2023-05-29 00:17:49', NULL),
(13, 'X.U.A-4', '2023-05-29 00:17:49', NULL),
(14, 'X.U.A-5', '2023-05-29 00:17:49', NULL),
(15, 'X.U.A-6', '2023-05-29 00:17:49', NULL),
(16, 'X.U.S-1', '2023-05-29 00:17:49', NULL),
(17, 'X.U.S-2', '2023-05-29 00:17:49', NULL),
(18, 'X.U.S-3', '2023-05-29 00:17:49', NULL),
(19, 'XI.IPA-1', '2023-05-29 00:17:49', NULL),
(20, 'XI.IPA-2', '2023-05-29 00:17:49', NULL),
(21, 'XI.IPA-3', '2023-05-29 00:17:49', NULL),
(22, 'XI.IPA-4', '2023-05-29 00:17:49', NULL),
(23, 'XI.IPA-5', '2023-05-29 00:17:49', NULL),
(24, 'XI.IPS-1', '2023-05-29 00:17:49', NULL),
(25, 'XI.IPS-2', '2023-05-29 00:17:49', NULL),
(26, 'XI.IPS-3', '2023-05-29 00:17:49', NULL),
(27, 'XI.IPS-4', '2023-05-29 00:17:49', NULL),
(28, 'XI.P.A-1', '2023-05-29 00:17:49', NULL),
(29, 'XI.U.A-1', '2023-05-29 00:17:49', NULL),
(30, 'XI.U.A-2', '2023-05-29 00:17:49', NULL),
(31, 'XI.U.A-3', '2023-05-29 00:17:49', NULL),
(32, 'XI.U.A-4', '2023-05-29 00:17:49', NULL),
(33, 'XI.U.A-5', '2023-05-29 00:17:49', NULL),
(34, 'XI.U.S-1', '2023-05-29 00:17:49', NULL),
(35, 'XI.U.S-2', '2023-05-29 00:17:49', NULL),
(36, 'XI.U.S-3', '2023-05-29 00:17:49', NULL),
(37, 'XII.IPA-1', '2023-05-29 00:17:49', NULL),
(38, 'XII.IPA-2', '2023-05-29 00:17:49', NULL),
(39, 'XII.IPA-3', '2023-05-29 00:17:49', NULL),
(40, 'XII.IPA-4', '2023-05-29 00:17:49', NULL),
(41, 'XII.IPA-5', '2023-05-29 00:17:49', NULL),
(42, 'XII.IPS-1', '2023-05-29 00:17:49', NULL),
(43, 'XII.IPS-2', '2023-05-29 00:17:49', NULL),
(44, 'XII.IPS-3', '2023-05-29 00:17:49', NULL),
(45, 'XII.U.A-1', '2023-05-29 00:17:49', NULL),
(46, 'XII.U.A-2', '2023-05-29 00:17:49', NULL),
(47, 'XII.U.A-3', '2023-05-29 00:17:49', NULL),
(48, 'XII.U.A-4', '2023-05-29 00:17:49', NULL),
(49, 'XII.U.A-5', '2023-05-29 00:17:49', NULL),
(50, 'XII.U.A-6', '2023-05-29 00:17:49', NULL),
(51, 'XII.U.A-7', '2023-05-29 00:17:49', NULL),
(52, 'XII.U.A-8', '2023-05-29 00:17:49', NULL),
(53, 'XII.U.S-1', '2023-05-29 00:17:49', NULL),
(54, 'XII.U.S-2', '2023-05-29 00:17:49', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tm_periodes`
--

CREATE TABLE `tm_periodes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `periode` smallint(6) NOT NULL,
  `aktif` enum('Y','N') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tm_periodes`
--

INSERT INTO `tm_periodes` (`id`, `periode`, `aktif`, `created_at`, `updated_at`) VALUES
(1, 2022, 'Y', '2023-05-29 00:17:49', NULL),
(2, 2021, 'N', '2023-05-29 00:17:49', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tm_walass`
--

CREATE TABLE `tm_walass` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `walas` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tm_walass`
--

INSERT INTO `tm_walass` (`id`, `walas`, `created_at`, `updated_at`) VALUES
(1, 'FIKRI MAULANA RIDHO, S.PD.', '2023-05-29 00:17:50', NULL),
(2, 'IKA MUHARYANI, S.PD.', '2023-05-29 00:17:50', NULL),
(3, 'ADAM JULIO WASKITO, S.PD.', '2023-05-29 00:17:50', NULL),
(4, 'AHMAD RIFAI, S.AG.', '2023-05-29 00:17:50', NULL),
(5, 'ANNISA MARHEKIYANA, S.PD.', '2023-05-29 00:17:50', NULL),
(6, 'RIZKY JULIAN PANGESTU AJI, S.PD.', '2023-05-29 00:17:50', NULL),
(7, 'DWI ANANTO KUSUMO, S.PD.', '2023-05-29 00:17:50', NULL),
(8, 'ASIH MULYANI, S.KOM.', '2023-05-29 00:17:50', NULL),
(9, 'LARISKA SAPTIANI, S.PD.', '2023-05-29 00:17:50', NULL),
(10, 'DWI APRIANI, S.PD.', '2023-05-29 00:17:50', NULL),
(11, 'AI WARNI, S.PD.', '2023-05-29 00:17:50', NULL),
(12, 'ILMA ZULIA, S.T.', '2023-05-29 00:17:50', NULL),
(13, 'PURWONUGROHO, S.PD.', '2023-05-29 00:17:50', NULL),
(14, 'ASYFA QOLBI RAKHAPUTRY.', '2023-05-29 00:17:50', NULL),
(15, 'N. SANTI SITI N., S.PD.', '2023-05-29 00:17:50', NULL),
(16, 'INTAN BAEDARI, S.PD.', '2023-05-29 00:17:50', NULL),
(17, 'KEMALA SARAS RIANTY, S.PD.', '2023-05-29 00:17:50', NULL),
(18, 'YUSI RAKHMAH WATI, S.SAS.', '2023-05-29 00:17:50', NULL),
(19, 'RIZKY NURUL HIDAYAH, S.PD.', '2023-05-29 00:17:50', NULL),
(20, 'MUKTI ALI, S.PD.', '2023-05-29 00:17:50', NULL),
(21, 'DHIENA FARIDA, S.T.', '2023-05-29 00:17:50', NULL),
(22, 'ADITYA DWI NUGROHO, S.PD.', '2023-05-29 00:17:50', NULL),
(23, 'IMANUDIN HIDAYAT, S.PD.', '2023-05-29 00:17:50', NULL),
(24, 'NURZAMAN, S.PD.', '2023-05-29 00:17:50', NULL),
(25, 'GINA FARIANI, S.P.', '2023-05-29 00:17:50', NULL),
(26, 'GIYANTI, S.PD.', '2023-05-29 00:17:50', NULL),
(27, 'MUHAMMAD FALAHAEN JIDDAN, S.PD.', '2023-05-29 00:17:50', NULL),
(28, 'DWI PRATIWI, S.PD.', '2023-05-29 00:17:50', NULL),
(29, 'Dra. INDIATI SRI HARYONO.', '2023-05-29 00:17:50', NULL),
(30, 'TITI RAHMAWATI, S.SI.', '2023-05-29 00:17:50', NULL),
(31, 'JUJU JURIAH, S.SI.', '2023-05-29 00:17:50', NULL),
(32, 'ARIE SUCIPTO, S.SS.', '2023-05-29 00:17:50', NULL),
(33, 'IWAN SUTIAWAN, S.PD.', '2023-05-29 00:17:50', NULL),
(34, 'DIANA MUSTIKA SARI, S.PD.', '2023-05-29 00:17:50', NULL),
(35, 'GIRI INDAH SARI, S.PD.', '2023-05-29 00:17:50', NULL),
(36, 'SUPRIYADI, S.KOM.', '2023-05-29 00:17:50', NULL),
(37, 'Dra. AI NURFARIDAH', '2023-05-29 00:17:50', NULL),
(38, 'SRI HAYATI, S.PD.', '2023-05-29 00:17:50', NULL),
(39, 'TIODORA SABARINA, S.PD.', '2023-05-29 00:17:50', NULL),
(40, 'SRI MILDAWATI, M.PD.', '2023-05-29 00:17:50', NULL),
(41, 'WIRYA AINI, M.PD.', '2023-05-29 00:17:50', NULL),
(42, 'FIA FIANTI, S.PD.', '2023-05-29 00:17:50', NULL),
(43, 'MOCHAMAD ILHAM LAHIA, S.PAR.', '2023-05-29 00:17:50', NULL),
(44, 'Dra. HJ. RINI KOMALASARI', '2023-05-29 00:17:50', NULL),
(45, 'SRI WILUJENG S.PD, M.PD', '2023-05-29 00:17:50', NULL),
(46, 'SYARIFAH, S.PDI.', '2023-05-29 00:17:50', NULL),
(47, 'IKE YUNIAWATI, S.PD.', '2023-05-29 00:17:50', NULL),
(48, 'FREDDY ANGGIAT, S.PD.', '2023-05-29 00:17:50', NULL),
(49, 'YANUAR HARDI H., S.PD.', '2023-05-29 00:17:50', NULL),
(50, 'IKA SEPTIANAWATI, S.PD.', '2023-05-29 00:17:50', NULL),
(51, 'TRI RAHAYU, S.PD.', '2023-05-29 00:17:50', NULL),
(52, 'LIDDIA HENDRIATI, S.PD.', '2023-05-29 00:17:50', NULL),
(53, 'JANUAR AMBARWATI, S.PD.', '2023-05-29 00:17:50', NULL),
(54, 'FERY YANTINI, S.PD.', '2023-05-29 00:17:50', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Valen', 'valen@gmail.com', NULL, '$2y$10$ly5wl1cagIL3k8VOGkCWTeAeJPWZRg3pXbvxvPgRqQoxTwVG5a43K', NULL, '2023-05-29 00:17:50', NULL),
(2, 'oz2785', 'zidane@gmail.com', NULL, '$2y$10$QzHuN4a17XdlAa7FlkL.qewQhuXwoiKigAqUGlEdHk0CNrnYQHNgK', NULL, '2023-05-29 00:17:50', NULL);

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
-- Indexes for table `pendaftarans`
--
ALTER TABLE `pendaftarans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `tm_agamas`
--
ALTER TABLE `tm_agamas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tm_divisis`
--
ALTER TABLE `tm_divisis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tm_izin_ortus`
--
ALTER TABLE `tm_izin_ortus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tm_kelass`
--
ALTER TABLE `tm_kelass`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tm_periodes`
--
ALTER TABLE `tm_periodes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tm_walass`
--
ALTER TABLE `tm_walass`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pendaftarans`
--
ALTER TABLE `pendaftarans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tm_agamas`
--
ALTER TABLE `tm_agamas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tm_divisis`
--
ALTER TABLE `tm_divisis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tm_izin_ortus`
--
ALTER TABLE `tm_izin_ortus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tm_kelass`
--
ALTER TABLE `tm_kelass`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `tm_periodes`
--
ALTER TABLE `tm_periodes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tm_walass`
--
ALTER TABLE `tm_walass`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
