-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Jun 2023 pada 16.11
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci4-manut-restapi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mhs` int(11) UNSIGNED NOT NULL,
  `nama_mhs` varchar(100) NOT NULL,
  `nim` int(11) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `angkatan` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mhs`, `nama_mhs`, `nim`, `jurusan`, `angkatan`, `email`, `foto`, `created_at`, `updated_at`) VALUES
(2, 'Basmalah', 203100102, 'Sistem Informasi', 2020, 'basmalah@gmail.com', 'female.png', '2023-06-03 04:16:22', '2023-06-07 12:58:41'),
(5, 'Azazel', 203100105, 'Sistem Infomasi', 2020, 'aza-zel@gmail.com', 'male.png', '2023-06-07 15:46:53', '2023-06-19 01:48:27'),
(6, 'Centosh', 203100107, 'Sistem Infomasi', 2020, 'centosh@gmail.com', 'male.png', '2023-06-19 00:04:10', '2023-06-19 00:04:10'),
(7, 'Dandelion', 203100108, 'Sistem Informasi', 2020, 'dandelion@gmail.com', 'male.png', '2023-06-19 01:40:47', '2023-06-19 01:40:47'),
(8, 'Evangelion', 203100109, 'Sistem Informasi', 2020, 'evangelion@gmail.com', 'female.png', '2023-06-20 12:18:09', '2023-06-20 12:18:09'),
(10, 'Georgina', 203100113, 'Sistem Informasi', 2020, 'georgina@gmail.com', 'male.png', '2023-06-20 19:07:37', '2023-06-20 19:17:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2023-06-02-184249', 'App\\Database\\Migrations\\Mahasiswa', 'default', 'App', 1685732887, 1),
(2, '2023-06-07-130152', 'App\\Database\\Migrations\\Pembayaran', 'default', 'App', 1686143635, 2),
(3, '2023-06-07-162933', 'App\\Database\\Migrations\\Tagihan', 'default', 'App', 1686188772, 3),
(4, '2023-06-08-015435', 'App\\Database\\Migrations\\Tagihan', 'default', 'App', 1686189289, 4),
(5, '2023-06-08-192229', 'App\\Database\\Migrations\\PembayaranTagihan', 'default', 'App', 1686252501, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pmb` int(11) UNSIGNED NOT NULL,
  `nama_pmb` varchar(100) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`id_pmb`, `nama_pmb`, `jumlah`, `created_at`, `updated_at`) VALUES
(1, 'KRS Semester 1', 110000, '2023-06-07 14:16:38', '2023-06-07 14:18:03'),
(2, 'KRS Semester 2', 120000, '2023-06-07 14:18:16', '2023-06-07 14:18:16'),
(3, 'KRS Semester 3', 130000, '2023-06-07 14:18:23', '2023-06-07 14:18:23'),
(4, 'KRS Semester 4', 140000, '2023-06-07 14:18:36', '2023-06-07 14:18:36'),
(5, 'KRS Semester 5', 150000, '2023-06-07 14:18:44', '2023-06-07 14:18:44'),
(6, 'KRS Semester 6', 160000, '2023-06-07 14:18:52', '2023-06-07 14:18:52'),
(7, 'KRS Semester 7', 170000, '2023-06-07 14:18:59', '2023-06-07 14:18:59'),
(8, 'KRS Semester 8', 180000, '2023-06-07 14:19:06', '2023-06-07 14:19:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran_tagihan`
--

CREATE TABLE `pembayaran_tagihan` (
  `id_pmbtag` int(11) UNSIGNED NOT NULL,
  `id_tag` int(11) UNSIGNED NOT NULL,
  `nama_mhs` varchar(100) NOT NULL,
  `nim` int(11) NOT NULL,
  `nama_pmb` varchar(100) NOT NULL,
  `jumlah_bayar` int(11) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `pembayaran_tagihan`
--

INSERT INTO `pembayaran_tagihan` (`id_pmbtag`, `id_tag`, `nama_mhs`, `nim`, `nama_pmb`, `jumlah_bayar`, `created_at`, `updated_at`) VALUES
(3, 2, 'Azazel', 203100104, 'KRS Semester 1', 110000, '2023-06-08 20:13:10', '2023-06-08 20:13:10'),
(4, 1, 'Basmalah', 203100102, 'KRS Semester 1', 110000, '2023-06-20 21:40:00', '2023-06-20 21:40:00'),
(5, 3, 'Basmalah', 203100102, 'KRS Semester 2', 120000, '2023-06-21 00:09:01', '2023-06-21 00:09:01'),
(7, 1, 'Basmalah', 203100102, 'KRS Semester 1', 1243, '2023-06-21 00:33:52', '2023-06-21 00:33:52'),
(8, 1, 'Basmalah', 203100102, 'KRS Semester 1', 111, '2023-06-21 06:54:39', '2023-06-21 06:54:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tagihan`
--

CREATE TABLE `tagihan` (
  `id_tag` int(11) UNSIGNED NOT NULL,
  `id_mhs` int(11) UNSIGNED NOT NULL,
  `id_pmb` int(11) UNSIGNED NOT NULL,
  `nama_mhs` varchar(100) NOT NULL,
  `nim` int(11) NOT NULL,
  `nama_pmb` varchar(100) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `status` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `tagihan`
--

INSERT INTO `tagihan` (`id_tag`, `id_mhs`, `id_pmb`, `nama_mhs`, `nim`, `nama_pmb`, `jumlah`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'Basmalah', 203100102, 'KRS Semester 1', 110000, 'Lunas', '2023-06-08 02:12:23', '2023-06-20 21:40:19'),
(2, 5, 1, 'Azazel', 203100104, 'KRS Semester 1', 110000, 'Lunas', '2023-06-08 19:18:26', '2023-06-20 20:57:47'),
(3, 2, 2, 'Basmalah', 203100102, 'KRS Semester 2', 120000, 'Belum lunas', '2023-06-08 19:19:44', '2023-06-08 19:19:44');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mhs`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pmb`);

--
-- Indeks untuk tabel `pembayaran_tagihan`
--
ALTER TABLE `pembayaran_tagihan`
  ADD PRIMARY KEY (`id_pmbtag`),
  ADD KEY `pembayaran-tagihan_id_tag_foreign` (`id_tag`);

--
-- Indeks untuk tabel `tagihan`
--
ALTER TABLE `tagihan`
  ADD PRIMARY KEY (`id_tag`),
  ADD KEY `tagihan_id_mhs_foreign` (`id_mhs`),
  ADD KEY `tagihan_id_pmb_foreign` (`id_pmb`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mhs` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pmb` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `pembayaran_tagihan`
--
ALTER TABLE `pembayaran_tagihan`
  MODIFY `id_pmbtag` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tagihan`
--
ALTER TABLE `tagihan`
  MODIFY `id_tag` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pembayaran_tagihan`
--
ALTER TABLE `pembayaran_tagihan`
  ADD CONSTRAINT `pembayaran-tagihan_id_tag_foreign` FOREIGN KEY (`id_tag`) REFERENCES `tagihan` (`id_tag`);

--
-- Ketidakleluasaan untuk tabel `tagihan`
--
ALTER TABLE `tagihan`
  ADD CONSTRAINT `tagihan_id_mhs_foreign` FOREIGN KEY (`id_mhs`) REFERENCES `mahasiswa` (`id_mhs`),
  ADD CONSTRAINT `tagihan_id_pmb_foreign` FOREIGN KEY (`id_pmb`) REFERENCES `pembayaran` (`id_pmb`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
