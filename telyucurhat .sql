-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Okt 2021 pada 15.25
-- Versi server: 10.4.16-MariaDB
-- Versi PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `telyucurhat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `id_status` int(11) NOT NULL,
  `nim` varchar(50) NOT NULL,
  `komentar` varchar(250) NOT NULL,
  `date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `id_status`, `nim`, `komentar`, `date`) VALUES
(1, 2, '6706194026', 'kenapa', 1619614160),
(4, 2, '6706194047', 'ok', 1619684992),
(5, 5, '6706194047', 'ok', 1623160487),
(16, 16, '6706194079', 'kok', 1623337501),
(17, 15, '6706194046', 'ok', 1624032604),
(18, 20, '6706194041', 'ok', 1634484657);

-- --------------------------------------------------------

--
-- Struktur dari tabel `status`
--

CREATE TABLE `status` (
  `id_status` int(11) NOT NULL,
  `nim` varchar(50) NOT NULL,
  `status` varchar(250) NOT NULL,
  `judul_status` varchar(255) NOT NULL,
  `date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `status`
--

INSERT INTO `status` (`id_status`, `nim`, `status`, `judul_status`, `date`) VALUES
(1, '6706194026', 'galau karna muu', 'aku galau', 1619585192),
(2, '6706194026', 'jangan kesini', 'buat yang disana', 1619590433),
(5, '6706194047', 'ujicoba 1', 'uji coba', 1619685098),
(12, '6706194046', 'skuy', 'revisi ', 1623218355),
(14, '670', 'coba]', 'tes', 1623322004),
(15, '670', 'tessssss', 'tes', 1623327616),
(20, '6706194041', 'yoi', 'revisi 1', 1634484641);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `nim` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`nim`, `email`, `nama`, `password`) VALUES
('670', 'cahyarobbi@gmail.com', 'cahyates', '$2y$10$duireYKlg69hi6y/Vkm30OLCIOjPjG7AM8GfII23ZchiQd3nJFeia'),
('6706194041', 'dsb210420@gmail.com', 'Eka', '$2y$10$eYYXdWjTjkjms3JVDY1xM.4CMuyuHpNUIhdNG1Cz6oHBj.1XYXWEe'),
('6706194046', 'ekab@gmail.com', 'Muhammad Eka Bakhtiar', '$2y$10$ok4dFm1mSdhjtxmRzncKKuHfuoaajOZKBNK97IGf0nCdJ9sliz/rm'),
('6706194047', 'dsb2104@gmail.com', 'eka', '$2y$10$n35K3Bd/SPhGNpDsJaTJw.paP3k3bMmjVw2qIPlE2XFcY3mdBtmzG'),
('6706194079', 'rozyfauzan@365.telkomuniversity.ac.id', 'Rozy Fauzan', '$2y$10$HZqgloEaB4UbIMYBkzzGNO/3bK6qZ2F/X6X3SO3d9CEzafR5acJuW');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indeks untuk tabel `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`nim`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `status`
--
ALTER TABLE `status`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
