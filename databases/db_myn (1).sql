-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Jun 2021 pada 10.57
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
  `id_category` int(11) NOT NULL,
  `image_master` varchar(128) NOT NULL,
  `img_supp1` varchar(128) NOT NULL,
  `img_supp2` varchar(128) NOT NULL,
  `img_supp3` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `catalog`
--

INSERT INTO `catalog` (`id_catalog`, `nama_catalog`, `deskripsi_catalog`, `id_designer`, `id_category`, `image_master`, `img_supp1`, `img_supp2`, `img_supp3`) VALUES
(4, 'Kitchen Minimalis', 'deskripsi', 2, 10, 'image25.png', '', '', ''),
(5, 'Bedroom Minimalist hshshhs', 'Bedroom Minimalist', 2, 10, 'catalogchild11.png', '', '', ''),
(9, 'Bedroom', 'bedroom', 2, 10, 'catalogchild15.png', 'catalogchild23.png', 'catalogchild35.png', 'catalog111.png');

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
(10, 'Bedroom'),
(11, 'Living Room');

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
  `profile` varchar(128) NOT NULL,
  `maps` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `designer`
--

INSERT INTO `designer` (`id_designer`, `nama_designer`, `email_designer`, `telp_designer`, `alamat_designer`, `profile`, `maps`) VALUES
(1, 'Miskah', '', '089976823231', 'Jl. Mawar Melati No. 32 Semarang', 'default.jpg', 'https://maps.google.com/'),
(2, 'Miskah Alfiyyah Kulsum', 'miskah@gmail.com', '6282678563492', 'jl. Merdeka 3 No. 32 Bandung', 'default.jpg', ''),
(3, 'Muhammad Valensyah', 'valen@gmail.com', '62812234334556', 'jl. Pahlawan Raya No. 40 Bandung', 'default.jpg', ''),
(4, 'Yoga Pranata', 'yoga@gmail.com', '62899424244542', 'Bandung', 'default.jpg', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `feedback`
--

CREATE TABLE `feedback` (
  `id_feedback` int(11) NOT NULL,
  `id_catalog` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `review` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `feedback`
--

INSERT INTO `feedback` (`id_feedback`, `id_catalog`, `nama`, `review`) VALUES
(3, 8, 'nita', 'sangat bagus'),
(5, 8, 'nita', 'sangat bagus');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `telp_user` varchar(20) NOT NULL,
  `password` varchar(128) NOT NULL,
  `role` int(1) NOT NULL COMMENT '1=admin\r\n2=designer',
  `status` int(1) NOT NULL COMMENT '0=not active\r\n1 = active',
  `avatar_user` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `telp_user`, `password`, `role`, `status`, `avatar_user`) VALUES
(1, 'admin', 'admin@gmail.com', '', '0192023a7bbd73250516f069df18b500', 1, 1, 'default.jpg'),
(2, 'Miskah Alfiyyah Kulsum', 'miskah@gmail.com', '6282678563492', '25d55ad283aa400af464c76d713c07ad', 2, 1, 'default.jpg'),
(3, 'Muhammad Valensyah', 'valen@gmail.com', '62812234334556', 'eed59ea2337108e10d5dced609999557', 2, 1, 'default.jpg'),
(4, 'Yoga Pranata', 'yoga@gmail.com', '62899424244542', '3265c569f3d1f00b371e90080d6ab5dd', 2, 1, 'default.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id_catalog`);

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
-- Indeks untuk tabel `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id_feedback`);

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
  MODIFY `id_catalog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `designer`
--
ALTER TABLE `designer`
  MODIFY `id_designer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id_feedback` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
