-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 27 Bulan Mei 2024 pada 05.37
-- Versi server: 11.3.2-MariaDB-log
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biografi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbbio`
--

CREATE TABLE `tbbio` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `hobby` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tbbio`
--

INSERT INTO `tbbio` (`id`, `name`, `hobby`, `email`, `address`) VALUES
(1, 'M. Garuh Meidy P', 'Taekwondo, Coding, Games', 'garuhmeidy@gmail.com', 'Cigunung, Sukabumi');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbbio`
--
ALTER TABLE `tbbio`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbbio`
--
ALTER TABLE `tbbio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
