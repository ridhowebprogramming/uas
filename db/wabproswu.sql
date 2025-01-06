-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Jan 2025 pada 02.31
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
-- Database: `wabproswu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(34, 'admin11122@gmail.com', '2233'),
(37, 'ridokurnia11@gmail.com', '1122'),
(38, 'adudu12@gmail.com', '4321'),
(39, 'admin2@gmail.com', '2222'),
(41, 'ridokurnia11@gmail.com', '32123'),
(42, 'ridhokurnia533@gmail.com', '112233');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lowongan_kerja`
--

CREATE TABLE `lowongan_kerja` (
  `id` int(11) NOT NULL,
  `lowongan_kerja` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `lowongan_kerja`
--

INSERT INTO `lowongan_kerja` (`id`, `lowongan_kerja`, `deskripsi`, `foto`, `tanggal_update`) VALUES
(1, 'PT PERTAMINA (persero)', 'PT Pertamina (Persero) adalah sebuah badan usaha milik negara Indonesia yang terutama bergerak di bidang minyak dan gas. Untuk menjalankan bisnis utamanya, perusahaan ini memiliki enam subholding yang masing-masing bergerak di bidang hulu, kilang & petrokimia, komersial & perdagangan, gas, listrik & energi terbarukan, dan pengapalan', 'uploads/1732541769_download (1).jfif', '2024-11-26 01:51:16'),
(2, 'PT Bumi Resources Tbk (BUMI)', 'PT Bumi Resources Tbk atau Bumi Resources adalah salah satu perusahaan pertambangan terbesar di Indonesia. Perusahaan ini sedang membutuhkan karyawan di bidang operator dan taknik mesin', 'uploads/1732543215_BUMI.jpg', '2024-11-26 01:51:12'),
(3, 'PT Freeport Indonesia (PTFI)', 'PT Freeport Indonesia (PTFI) adalah sebuah perusahaan Amerika Serikat yang berada di Indonesia dan bergerak di bidang eksplorasi, pertambangan, pemprosesan, dan pemasaran konsentrat tembaga, emas, dan perak di dataran tinggi Tembagapura, Mimika, Papua Tengah.', 'uploads/1732543436_images (2).png', '2024-11-26 01:51:08'),
(4, 'PT Garuda Indonesia (Persero) Tbk (GIAA)', 'PT Garuda Indonesia (Persero) Tbk (GIAA), adalah maskapai penerbangan utama Indonesia yang melayani lebih dari 90 destinasi lokal dan internasional, dengan lebih dari 600 penerbangan sehari.', 'uploads/1732543686_Lowongan-Kerja-BUMN-PT-Garuda-Indonesia-Persero-Tbk.webp', '2024-11-26 01:51:04'),
(5, 'PT Perusahaan Listrik Negara (Persero) ', 'PT Perusahaan Listrik Negara (Persero) atau biasa disingkat menjadi PLN, adalah sebuah badan usaha milik negara Indonesia yang bergerak di bidang ketenagalistrikan. Untuk mendukung kegiatan bisnisnya, hingga akhir tahun 2021, perusahaan ini mengelola sejumlah pembangkit listrik dengan total kapasitas terpasang mencapai 64.553 MW', 'uploads/1732543871_channels4_profile.jpg', '2024-11-26 01:51:01'),
(12, 'PT GRAHA INDAH', 'deegvsdbsba', 'uploads/1733238022_channels4_profile.jpg', '2024-12-03 15:00:22'),
(13, 'PT GRAHA INDAH', 'deegvsdbsba', 'uploads/1733238306_channels4_profile.jpg', '2024-12-03 15:05:06'),
(14, 'PT GRAHA INDAH', 'deegvsdbsba', 'uploads/1733239907_channels4_profile.jpg', '2024-12-03 15:31:47'),
(15, 'PT GRAHA INDAH', 'deegvsdbsba', 'uploads/1733241271_channels4_profile.jpg', '2024-12-03 15:54:31'),
(16, 'PT GRAHA INDAH', 'rhsh', 'uploads/1733493593_channels4_profile.jpg', '2024-12-06 13:59:53'),
(17, 'PT GRAHA INDAH', 'rhsh', 'uploads/1733493956_channels4_profile.jpg', '2024-12-06 14:05:56'),
(18, 'PT GRAHA INDAH', 'rhsh', 'uploads/1733494547_channels4_profile.jpg', '2024-12-06 14:15:47'),
(19, 'PT GRAHA INDAH', 'rhsh', 'uploads/1733494578_channels4_profile.jpg', '2024-12-06 14:16:18'),
(20, 'PT GRAHA INDAH', 'rhsh', 'uploads/1733494686_channels4_profile.jpg', '2024-12-06 14:18:06'),
(21, 'PT GRAHA INDAH', 'rhsh', 'uploads/1733494890_channels4_profile.jpg', '2024-12-06 14:21:30'),
(22, 'PT GRAHA INDAH', 'dd', 'uploads/1733543486_channels4_profile.jpg', '2024-12-07 03:51:26'),
(23, 'PT GRAHA INDAH', 'dd', 'uploads/1733543536_channels4_profile.jpg', '2024-12-07 03:52:16'),
(24, 'BAJU BATIK', 'Batik adalah hasil karya bangsa Indonesia yang merupakan perpaduan antara seni dan teknologi oleh leluhur bangsa Indonesia. Batik Indonesia dapat berkembang hingga sampai pada suatu tingkatan yang tak ada bandingannya baik dalam desain/motif maupun prosesnya.', 'uploads/1733543865_channels4_profile.jpg', '2024-12-07 03:57:45'),
(25, 'BAJU BATIK', 'Batik adalah hasil karya bangsa Indonesia yang merupakan perpaduan antara seni dan teknologi oleh leluhur bangsa Indonesia. Batik Indonesia dapat berkembang hingga sampai pada suatu tingkatan yang tak ada bandingannya baik dalam desain/motif maupun prosesnya.', 'uploads/1733543875_BATIK.jpg', '2024-12-07 03:57:55'),
(26, 'BAJU JAS PRIA', 'Baju jas pria adalah pakaian resmi model Eropa yang berlengan panjang dan dipakai di luar kemeja. Jas biasanya dibuat sepasang dengan celana, dan harus dipakai bersama dengan celananya yang dibuat dari bahan dan warna yang sama. ', 'uploads/1733543962_jas.jpg', '2024-12-07 03:59:22'),
(27, 'BAJU KOKO PRIA', 'Baju koko pria adalah pakaian muslim pria yang identik dengan kesederhanaan, kesopanan, dan kenyamanan. Baju koko memiliki ciri khas kerah tegak, lengan panjang, dan beberapa kancing di bawahnya. Baju koko bisa berdesain polos atau memiliki hiasan bordir. ', 'uploads/1733544042_koko.jpg', '2024-12-07 04:00:42');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `lowongan_kerja`
--
ALTER TABLE `lowongan_kerja`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT untuk tabel `lowongan_kerja`
--
ALTER TABLE `lowongan_kerja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
