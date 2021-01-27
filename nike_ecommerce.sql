-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Jan 2021 pada 10.14
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nike_ecommerce`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `id_cust` int(11) NOT NULL,
  `nama_cust` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `notelp_cust` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id_cust`, `nama_cust`, `email`, `password`, `notelp_cust`) VALUES
(0, 'Alfin Sugestian', 'alfinsugestian99@gmail.com', 'asugestian88', '085156378470'),
(1, 'gobes', 'gobes123@gmail.com', 'gobes123', '08974879215');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kasir`
--

CREATE TABLE `kasir` (
  `id_kasir` int(11) NOT NULL,
  `nama_kasir` varchar(255) DEFAULT NULL,
  `email_kasir` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `notelp_kasir` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kasir`
--

INSERT INTO `kasir` (`id_kasir`, `nama_kasir`, `email_kasir`, `password`, `notelp_kasir`) VALUES
(1, 'Denise', 'denise@gamil.com', 'denise123', '08974879210');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `kode_produk` int(11) NOT NULL,
  `nama_produk` varchar(255) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `size` varchar(255) NOT NULL,
  `tipe_produk` varchar(255) NOT NULL,
  `img_produk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`kode_produk`, `nama_produk`, `stok`, `harga`, `size`, `tipe_produk`, `img_produk`) VALUES
(1, 'Nike Air Zoom Pegasus 37 A.I.R Chaz Bear', 20, 1979000, '39 - 45', 'Running Shoe', 'asset/img_shoes/nike-1.jpg'),
(2, 'Zoom Freak 2', 10, 1799000, '39 - 45', 'Basketball Shoe', 'asset/img_shoes/nike-2.jpg'),
(3, 'Nike Air Max 95', 10, 2649000, '39 - 45', 'Men’s Shoe', 'asset/img_shoes/nike-3.jpg'),
(4, 'Nike Air Force 1 Shadow SE', 10, 1799000, '35 - 43', 'Women’s Shoe', 'asset/img_shoes/nike-4.jpg'),
(5, 'Nike Air Max 90', 15, 1799000, '35 - 43', 'Women’s Shoe', 'asset/img_shoes/nike-5.jpg'),
(6, 'Nike Air Max 2090', 10, 2099000, '35 - 43', 'Women’s Shoe', 'asset/img_shoes/nike-6.jpg'),
(7, 'Kyrie 7', 15, 1099000, '16 - 30', 'Younger Kids’ Shoe', 'asset/img_shoes/nike-7.jpg'),
(8, 'Nike Revolution 5', 10, 649000, '16 - 30', 'Younger Kids’ Shoe', 'asset/img_shoes/nike-8.jpg'),
(9, 'Nike Force 1 LV8', 10, 899000, '16 - 30', 'Younger Kids’ Shoe', 'asset/img_shoes/nike-9.jpg'),
(10, 'Nike Air Max 1', 10, 2099000, '39 - 45', 'Men’s Shoe', 'asset/img_shoes/nike-10.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_trx` int(11) NOT NULL,
  `kode_produk` int(11) DEFAULT NULL,
  `id_cust` int(11) DEFAULT NULL,
  `jml_beli` int(11) DEFAULT NULL,
  `size` int(11) NOT NULL,
  `total_bayar` int(11) DEFAULT NULL,
  `id_kasir` int(11) DEFAULT NULL,
  `tgl_trx` varchar(255) NOT NULL,
  `bukti_pembayaran` varchar(255) NOT NULL,
  `status_trans` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_trx`, `kode_produk`, `id_cust`, `jml_beli`, `size`, `total_bayar`, `id_kasir`, `tgl_trx`, `bukti_pembayaran`, `status_trans`) VALUES
(1, 4, 1, 2, 43, 105000, 1, 'Selasa, 23 Januari 2021', 'asset/img_shoes/nike-2.jpg', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_cust`);

--
-- Indeks untuk tabel `kasir`
--
ALTER TABLE `kasir`
  ADD PRIMARY KEY (`id_kasir`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`kode_produk`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_trx`),
  ADD KEY `id_kasir` (`id_kasir`),
  ADD KEY `id_cust` (`id_cust`),
  ADD KEY `kode_produk` (`kode_produk`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_kasir`) REFERENCES `kasir` (`id_kasir`),
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_cust`) REFERENCES `customer` (`id_cust`),
  ADD CONSTRAINT `transaksi_ibfk_3` FOREIGN KEY (`kode_produk`) REFERENCES `produk` (`kode_produk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
