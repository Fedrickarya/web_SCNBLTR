-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Nov 2021 pada 14.54
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `game`
--

CREATE TABLE `game` (
  `id` int(100) NOT NULL,
  `Judul` varchar(100) NOT NULL,
  `gambar` varchar(200) DEFAULT NULL,
  `harga` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `game`
--

INSERT INTO `game` (`id`, `Judul`, `gambar`, `harga`) VALUES
(8, 'Slime Ratcher', ' files/maxresdefault.jpg', 100000),
(9, 'Yotuber Life', ' files/yt.jpg', 130000),
(13, 'Universim', ' files/maxresdefault (1).jpg', 200000),
(14, 'Cooking Simulator', ' files/th.jpg', 50000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(2, 'sahefi', '$2y$10$/Esvt.0u2sWfUQ6L7Ijna.6xicH.TIGZjr9DQdqsIjkSnHG.VIWXa'),
(3, 'danis', '$2y$10$FvbfzJcz1XQIFw0F/y/9ReqVsQduEr89DRFeR/ebCAxd8wiZkE5oG'),
(4, 'yanto', '$2y$10$iuFrAAW.xKe9Ydn06fVP0uYwHAK8cDi7VwS0fABlRdIGZ6IOkb1aa'),
(5, 'sanos', '$2y$10$1cuxewF7a0btJ166S6.SKu8kvBppuYZ6TdGVTHLgF4NwLcvoDYV.2'),
(6, 'rafi', '$2y$10$Nq/kWICkk51xvJgp/cCsLu5yCISK25mXfGoBtU1rX4vzyBKLJ4QPu'),
(7, 'admin', '$2y$10$NadD7R2uxUE1Iiiug9vm8O6B/ohVDgVmt8GWpJkcYf0jrCDgdausa'),
(11, 'faaf', '$2y$10$pw4i5svr3r4t3VrsXzS6FOrmxiht7Sud4nSug1Xdz7qNTsCfmuHZ2'),
(15, 'black', '1111111');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `game`
--
ALTER TABLE `game`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
