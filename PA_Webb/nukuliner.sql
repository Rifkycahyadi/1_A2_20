-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Nov 2022 pada 16.53
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nukuliner`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) DEFAULT NULL,
  `nama_akun` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama_akun`, `username`, `pass`) VALUES
(NULL, 'Rifky Cahyadi', 'rifky123', '2009106043'),
(NULL, 'Rifky Cahyadi', 'rifky003', '$2y$10$QW8I208IONbh8aGpYvf/YO5Ez27Lf1MM79MNLHYw.YMiqlY9Yy.3O'),
(NULL, 'Rifky Cahyadi', 'rifky', '$2y$10$n2mvlXA5hJsNQtoagnmQS.XRJATocYP/p5udUVX42vJxo.O3tGl16'),
(NULL, 'indah', 'ndah123', '$2y$10$agvytnBrpseNXEsgS24YpOJYKXk1YMbEsJNNlvnDLn2EQQ8.S8khy'),
(NULL, 'Nanda Sheptiana', 'nan123', '$2y$10$Y008E/vS8jK61659C3/eneWTNORVaxfy8bpliV5IFmTrWq8Ue38dW');

-- --------------------------------------------------------

--
-- Struktur dari tabel `makanan`
--

CREATE TABLE `makanan` (
  `id` int(11) NOT NULL,
  `nama_masakan` varchar(255) NOT NULL,
  `asal_daerah` varchar(255) NOT NULL,
  `resep` varchar(255) NOT NULL,
  `tanggal_tambah` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `makanan`
--

INSERT INTO `makanan` (`id`, `nama_masakan`, `asal_daerah`, `resep`, `tanggal_tambah`, `gambar`) VALUES
(17, 'Rendang', 'Minang', 'kunyit\r\nlengkuas\r\njahe', '2022-11-14', 'Rendang Minang.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `resep`
--

CREATE TABLE `resep` (
  `id` int(11) NOT NULL,
  `bahan2` varchar(255) NOT NULL,
  `bahan` varchar(255) NOT NULL,
  `buat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `resep`
--

INSERT INTO `resep` (`id`, `bahan2`, `bahan`, `buat`) VALUES
(1, '1 kg daging sapi\r\n3 butir kelapa, diambil santan kental dan santan encernya\r\n4 lembar daun jeruk\r\n3 batang serai, memarkan\r\n4 butir asam kandis\r\n100ml minyak goreng\r\n5 gram garam\r\nBumbu rendang daging sapi 1 Kg:\r\n\r\n60 gram bawang merah\r\n50 gram bawangputi', '', ''),
(2, '', '', ''),
(3, '', '', '1. Haluskan semua bahan Bumbu dengan diulek atau diblender.\r\n\r\n2. Tumis bumbu dengan sedikit minyak goreng hingga wangi.\r\n\r\n3. Masukkan batang serai, daun jeruk, asam kandis dan garam, aduk rata.\r\n\r\n4. Tuangi santan dan dididihkan, masukkan daging.\r\n\r\n5. ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama_akun` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama_akun`, `username`, `pass`) VALUES
(1, 'sael', 'saell', '$2y$10$l47nFrKwLKKq65cuANMFq.1MFG1B9cCKwWv0cVasMF2kCubkQaYfW'),
(2, 'amri', 'amri123', '$2y$10$TKC7zg/PR3yOdisaR1SNuOJwhRgZci7qrzDKZ9CM8Xy/6pRhzMOVq'),
(3, 'sam sam', 'saelsam', '$2y$10$eVzqoB3.moIv0q5GaG3PH.prsoSWAcZ2iue1tIACq./VH4kHrOGxC');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `makanan`
--
ALTER TABLE `makanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `resep`
--
ALTER TABLE `resep`
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
-- AUTO_INCREMENT untuk tabel `makanan`
--
ALTER TABLE `makanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `resep`
--
ALTER TABLE `resep`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
