-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Jun 2020 pada 07.30
-- Versi server: 10.1.40-MariaDB
-- Versi PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_projek`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(3) NOT NULL,
  `id_admin_verifikasi` int(3) NOT NULL,
  `nama` varchar(15) COLLATE utf8_bin NOT NULL,
  `user` varchar(10) COLLATE utf8_bin NOT NULL,
  `password` varchar(10) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_customer`
--

CREATE TABLE `tb_customer` (
  `id_customer` int(3) NOT NULL,
  `nam_leng` varchar(30) COLLATE utf8_bin NOT NULL,
  `no_telp` varchar(13) COLLATE utf8_bin NOT NULL,
  `alamat` varchar(30) COLLATE utf8_bin NOT NULL,
  `email` varchar(25) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `foto_diri` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `foto_ktp` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `status_cus` int(1) NOT NULL,
  `status_tukang` int(1) NOT NULL,
  `pembuatan_data` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data untuk tabel `tb_customer`
--

INSERT INTO `tb_customer` (`id_customer`, `nam_leng`, `no_telp`, `alamat`, `email`, `password`, `foto_diri`, `foto_ktp`, `status_cus`, `status_tukang`, `pembuatan_data`) VALUES
(32, 'Mohammad Ali Romadoni', '082345678123', 'Jl Jawa 6/35', 'doniiali098@gmail.com', '$2y$10$rTMWIMvawbd1QIN8zuRT2eX.9i3WiN8iMJJsbmMov0Ktw38Oy1FIy', '1591951127203.jpg', '1591950958652.png', 1, 2, 1591950908),
(33, 'Nanda Juni Ferdi', '082345678123', 'Jl Gajah MAda 14 /a', 'umelsam098@gmail.com', '$2y$10$7tgT9EwQqHYo2RySH42w4uWhsfRhYDNV67VV6DLDNDyNCC8Lx7V8e', 'person_default.jpg', '1591956519435.PNG', 1, 2, 1591951178),
(34, 'Fatto Gum', '081777563333', 'Jl Bambu Hijau/12a', 'Bagus@gmail.com', '$2y$10$9Rq8YjrbVoBCDZE1NDlUSOgCmvStyvYwDv14JwTGzgJZjkGVPG3XG', 'person_default.jpg', '1591956671680.jpg', 1, 2, 1591956578),
(35, 'Andaru Bagus G', '082345678123', 'Perum Gunung Batu blok b/12', 'Fatto@gmail.com', '$2y$10$dTpc1nrDdB33IC/24.Lo3uWdnfqQ9zrSAWYmoKDCZtyERF1ZCJZbC', '1591956908505.jpg', '1591956892527.png', 1, 2, 1591956832),
(36, 'Fahrur', '081123456788', 'jl.jawa7 12b', 'Andaru@gmail.com', '$2y$10$oyCRkOwLOZrUr7w4g7.sxeqzHeQ4H6cOjEKTwKibkDZ0SlPIkKpoq', '1591957045050.jpg', '1591957030585.jpg', 1, 2, 1591956956),
(37, 'customer1', '081123456789', 'Jl Bambu Hijau/40a', 'bajolelek098@gmail.com', '$2y$10$VCnOKx7f.eu3tDfmdmPupe99hdID6Ja0FPk4qARDXeh0Lsy920Loq', '1591961643147.jpg', NULL, 1, 0, 1591957124);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pembayaran_cus`
--

CREATE TABLE `tb_pembayaran_cus` (
  `id_pemb_cus` int(5) NOT NULL,
  `id_sewa` int(5) NOT NULL,
  `no_rek_cus` varchar(20) COLLATE utf8_bin NOT NULL,
  `no_rek_admin` varchar(20) COLLATE utf8_bin NOT NULL,
  `tgl_pemb` date NOT NULL,
  `foto_transaksi` varchar(50) COLLATE utf8_bin NOT NULL,
  `status_pemb_cus` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data untuk tabel `tb_pembayaran_cus`
--

INSERT INTO `tb_pembayaran_cus` (`id_pemb_cus`, `id_sewa`, `no_rek_cus`, `no_rek_admin`, `tgl_pemb`, `foto_transaksi`, `status_pemb_cus`) VALUES
(1, 4, '1234-2321-4566-8970', '1845-2356-2564-8632', '2020-06-12', '1591966541073.jpg', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pembayaran_tukang`
--

CREATE TABLE `tb_pembayaran_tukang` (
  `id_pemb_tuk` int(3) NOT NULL,
  `id_pemb_cus` int(5) NOT NULL,
  `id_admin` int(3) NOT NULL,
  `id_admin_verifikasi` int(3) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rating`
--

CREATE TABLE `tb_rating` (
  `id` int(11) NOT NULL,
  `id_tukang` int(3) NOT NULL,
  `rating` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data untuk tabel `tb_rating`
--

INSERT INTO `tb_rating` (`id`, `id_tukang`, `rating`) VALUES
(5, 9, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sewa`
--

CREATE TABLE `tb_sewa` (
  `id_sewa` int(5) NOT NULL,
  `id_customer` int(3) NOT NULL,
  `id_tukang` int(3) NOT NULL,
  `alamat_sewa` varchar(30) COLLATE utf8_bin NOT NULL,
  `luas_sewa` int(11) NOT NULL,
  `detail_sewa` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `total_sewa` int(11) NOT NULL,
  `tgl_sewa` varchar(13) COLLATE utf8_bin NOT NULL,
  `status_sewa` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data untuk tabel `tb_sewa`
--

INSERT INTO `tb_sewa` (`id_sewa`, `id_customer`, `id_tukang`, `alamat_sewa`, `luas_sewa`, `detail_sewa`, `total_sewa`, `tgl_sewa`, `status_sewa`) VALUES
(3, 33, 6, 'Jl Riau 12 no 7a', 10, 'Alumunium atap', 500000, '2020-06-25', 0),
(4, 37, 9, 'Jl Riau 12 no 7a', 20, 'Cat ruang tamu', 1000000, '2020-06-16', 5),
(5, 37, 10, 'jl sumatra12a', 25, 'Las Gerbang depan dan belakang', 750000, '2020-06-17', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tukang`
--

CREATE TABLE `tb_tukang` (
  `id_tukang` int(3) NOT NULL,
  `id_customer` int(3) NOT NULL,
  `Keahlian` varchar(20) COLLATE utf8_bin NOT NULL,
  `harga_tukang` int(11) NOT NULL,
  `no_rek` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data untuk tabel `tb_tukang`
--

INSERT INTO `tb_tukang` (`id_tukang`, `id_customer`, `Keahlian`, `harga_tukang`, `no_rek`) VALUES
(6, 32, 'Tukang Alumunium', 50000, '1987-2345-0098-6899'),
(7, 33, 'Tukang Keramik', 50000, '1987-2345-0098-6899'),
(8, 34, 'Tukang Atap', 50000, '1987-2345-0098-6899'),
(9, 35, 'Tukang Cat', 50000, '1987-2345-0098-6899'),
(10, 36, 'Tukang Las', 30000, '1987-2345-0098-6899');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_verif_tukang`
--

CREATE TABLE `tb_verif_tukang` (
  `id_verif` int(3) NOT NULL,
  `id_customer` int(3) NOT NULL,
  `Keahlian` varchar(20) COLLATE utf8_bin NOT NULL,
  `harga_tukang` int(11) NOT NULL,
  `no_rek` varchar(20) COLLATE utf8_bin NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(125) NOT NULL,
  `token` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`) VALUES
(5, 'bajolelek098@gmail.com', 'pL83NJd3GOSUcFHIkd6sUxSteg+AgaS9+FW3B/TeA8k='),
(6, 'bajolelek098@gmail.com', 'MmZMP08NkzxGmL6jA7Vq3U/Zm3y8WwIPhv4Sb8pvTNs='),
(7, 'bajolelek098@gmail.com', '2uMT+eWzS5mP5IrHRx/5JhkdXvCh5xOSZ3KQIAkCIF0='),
(8, 'bajolelek098@gmail.com', 'CAIIpfdI+6BxG9VYz2xlyMLCaplOMnHMVBazqalGOiw='),
(9, 'bajolelek098@gmail.com', 'odi2DIyz4O+y1TXGB0IJMX0U8masGsNuiAjQruHxjhw='),
(10, 'bajolelek098@gmail.com', 'p2HJpdN26hZA+2RZhgpIYc1ju+s+TGgRPOUtlYgKbzw=');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tb_customer`
--
ALTER TABLE `tb_customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indeks untuk tabel `tb_pembayaran_cus`
--
ALTER TABLE `tb_pembayaran_cus`
  ADD PRIMARY KEY (`id_pemb_cus`);

--
-- Indeks untuk tabel `tb_pembayaran_tukang`
--
ALTER TABLE `tb_pembayaran_tukang`
  ADD PRIMARY KEY (`id_pemb_tuk`);

--
-- Indeks untuk tabel `tb_rating`
--
ALTER TABLE `tb_rating`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tukang` (`id_tukang`);

--
-- Indeks untuk tabel `tb_sewa`
--
ALTER TABLE `tb_sewa`
  ADD PRIMARY KEY (`id_sewa`);

--
-- Indeks untuk tabel `tb_tukang`
--
ALTER TABLE `tb_tukang`
  ADD PRIMARY KEY (`id_tukang`);

--
-- Indeks untuk tabel `tb_verif_tukang`
--
ALTER TABLE `tb_verif_tukang`
  ADD PRIMARY KEY (`id_verif`);

--
-- Indeks untuk tabel `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_customer`
--
ALTER TABLE `tb_customer`
  MODIFY `id_customer` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `tb_pembayaran_cus`
--
ALTER TABLE `tb_pembayaran_cus`
  MODIFY `id_pemb_cus` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_pembayaran_tukang`
--
ALTER TABLE `tb_pembayaran_tukang`
  MODIFY `id_pemb_tuk` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_rating`
--
ALTER TABLE `tb_rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_sewa`
--
ALTER TABLE `tb_sewa`
  MODIFY `id_sewa` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_tukang`
--
ALTER TABLE `tb_tukang`
  MODIFY `id_tukang` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_verif_tukang`
--
ALTER TABLE `tb_verif_tukang`
  MODIFY `id_verif` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
