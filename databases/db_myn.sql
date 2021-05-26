-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Bulan Mei 2021 pada 08.41
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_myn`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `catalog`
--

CREATE TABLE `catalog` (
  `id_catalog` int(11) NOT NULL,
  `nama_catalog` varchar(128) NOT NULL,
  `deskripsi_catalog` text NOT NULL,
  `id_designer` int(11) NOT NULL,
  `id_category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `catalog`
--

INSERT INTO `catalog` (`id_catalog`, `nama_catalog`, `deskripsi_catalog`, `id_designer`, `id_category`) VALUES
(1, 'Design Minimalist', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `category`
--

CREATE TABLE `category` (
  `id_category` int(11) NOT NULL,
  `nama_category` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `category`
--

INSERT INTO `category` (`id_category`, `nama_category`) VALUES
(1, 'Kitchen Set'),
(3, 'living room'),
(4, 'Family Room'),
(5, 'Bathroom');

-- --------------------------------------------------------

--
-- Struktur dari tabel `designer`
--

CREATE TABLE `designer` (
  `id_designer` int(11) NOT NULL,
  `nama_designer` varchar(128) NOT NULL,
  `email_designer` varchar(128) NOT NULL,
  `telp_designer` varchar(15) NOT NULL,
  `alamat_designer` text NOT NULL,
  `maps` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `designer`
--

INSERT INTO `designer` (`id_designer`, `nama_designer`, `email_designer`, `telp_designer`, `alamat_designer`, `maps`) VALUES
(1, 'Miskah', '', '089976823231', 'Jl. Mawar Melati No. 32 Semarang', 'https://maps.google.com/'),
(2, 'Miskah Alfiyyah Kulsum', 'miskah@gmail.com', '087788832424', 'jl. Merdeka 3 No. 32 Bandung', ''),
(3, 'Muhammad Valensyah', 'valen@gmail.com', '0812234334556', 'jl. Pahlawan Raya No. 40 Bandung', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `role` int(1) NOT NULL COMMENT '1=admin\r\n2=designer',
  `status` int(1) NOT NULL COMMENT '0=not active\r\n1 = active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `role`, `status`) VALUES
(1, 'admin', 'admin@gmail.com', '0192023a7bbd73250516f069df18b500', 1, 1),
(2, 'Miskah Alfiyyah Kulsum', 'miskah@gmail.com', '3b3aa58a4a922f81c38fb8bb7e2a41a0', 2, 1),
(3, 'Muhammad Valensyah', 'valen@gmail.com', 'eed59ea2337108e10d5dced609999557', 2, 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id_catalog`),
  ADD UNIQUE KEY `id_designer` (`id_designer`),
  ADD UNIQUE KEY `id_category` (`id_category`);

--
-- Indeks untuk tabel `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indeks untuk tabel `designer`
--
ALTER TABLE `designer`
  ADD PRIMARY KEY (`id_designer`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id_catalog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `designer`
--
ALTER TABLE `designer`
  MODIFY `id_designer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `catalog`
--
ALTER TABLE `catalog`
  ADD CONSTRAINT `catalog_ibfk_1` FOREIGN KEY (`id_designer`) REFERENCES `designer` (`id_designer`),
  ADD CONSTRAINT `catalog_ibfk_2` FOREIGN KEY (`id_category`) REFERENCES `category` (`id_category`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
