-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Feb 2024 pada 00.45
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `password`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `login_secure`
--

CREATE TABLE `login_secure` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` char(32) NOT NULL,
  `no_hp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `login_secure`
--

INSERT INTO `login_secure` (`id`, `username`, `email`, `password`, `no_hp`) VALUES
(5, 'Admin123', 'admin@admin.com', 'f45731e3d39a1b2330bbf93e9b3de59e', '4545454545'),
(6, 'Annisanur27', 'anisanurbaiti380@gmail.com', '14c4b06b824ec593239362517f538b29', '087665676576'),
(7, 'Admin2', 'admin@admin.com', '21eed4f2e9ab214fdbf00a2a091d63c4', '085866175822');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `login_secure`
--
ALTER TABLE `login_secure`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `login_secure`
--
ALTER TABLE `login_secure`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
