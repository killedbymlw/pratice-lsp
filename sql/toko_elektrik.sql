-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Bulan Mei 2021 pada 21.46
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_elektrik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `jenis_barang` varchar(50) NOT NULL,
  `harga_barang` int(20) NOT NULL,
  `stok_barang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `jenis_barang`, `harga_barang`, `stok_barang`) VALUES
(2, 'Mousepad', 'Computer', 5000000, 2),
(3, 'Keyboard', 'Computer', 200000, 2),
(5, 'Laptop Acer', 'Computer', 10000000, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_barang` varchar(20) NOT NULL,
  `id_user` varchar(20) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `total_harga` int(11) NOT NULL,
  `jumlah_barang` int(11) NOT NULL,
  `status` enum('pending','accept','reject') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_barang`, `id_user`, `tgl_transaksi`, `total_harga`, `jumlah_barang`, `status`) VALUES
(1, 'Mousepad', 'Akmal', '2021-05-02', 10000000, 2, 'accept'),
(2, 'Monitor 4K', 'Akmal', '2021-05-03', 40000000, 2, 'accept'),
(3, 'Keyboard', 'Rohan', '2021-05-02', 400000, 2, 'reject'),
(4, 'Mousepad', 'Rohan', '2021-05-02', 10000000, 2, 'reject'),
(5, 'Keyboard', 'Dinda', '2021-05-02', 400000, 2, 'accept');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `role` enum('costumer','admin') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `nama_user`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Akmal', '$2y$10$f8n.jzq84JXEy2sUW.qv8.zYVSSl1l09VKRKwNUDUIoFkLXq.b7vK', 'Akmal', 'costumer', '2021-05-01 15:39:44', '2021-05-01 15:39:44'),
(2, 'Rohan', '$2y$10$M5VSm8nJYlppNI4trLZ9puqsfrliYPp6vY2UGcYMVH09v8ADwLaEG', 'Rohan', 'costumer', '2021-05-01 15:51:41', '2021-05-01 15:51:41'),
(3, 'admin', '$2y$10$steQ9NoYUQZuQ7IeF/eupObsfd2.WRdFGjAnm0mMn.jiyaIAD2JV6', 'admin', 'admin', '2021-05-01 16:14:30', '2021-05-01 16:14:30'),
(4, 'Dinda', '$2y$10$69whhopZESRAlZMbPLZXNeZhK9YRu4L5AE7tuul9TiFd6G5GzDrQO', 'Dinda', 'costumer', '2021-05-01 19:44:05', '2021-05-01 19:44:05');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
