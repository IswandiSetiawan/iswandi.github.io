-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Jun 2021 pada 01.29
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `butikstore`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `keranjang`
--

CREATE TABLE `keranjang` (
  `id` int(40) NOT NULL,
  `kode_barang` varchar(50) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` bigint(20) NOT NULL,
  `total` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `keranjang`
--

INSERT INTO `keranjang` (`id`, `kode_barang`, `jumlah`, `harga`, `total`) VALUES
(20, '4', 0, 100000, 0),
(20, '3', 4, 90000, 360000),
(20, '3', 1, 90000, 90000),
(20, '2', 1, 130000, 130000),
(20, '2', 2, 130000, 260000),
(20, '4', 2, 100000, 200000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` int(40) NOT NULL,
  `username` varchar(100) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `kelas` varchar(10) DEFAULT NULL,
  `jkel` varchar(10) DEFAULT NULL,
  `notelp` varchar(12) DEFAULT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `username`, `nama`, `password`, `kelas`, `jkel`, `notelp`, `email`) VALUES
(4, 'rafli004', 'rafli', 'rafli', 'admin', 'laki-laki', '089666101397', ''),
(15, 'riski', 'riski', 'riski', 'pelanggan', 'Perempuan', '090219012', ''),
(17, 'terserah', 'terserah', 'terserah', 'pelanggan', 'Laki-Laki', '09090909', ''),
(18, 'Arif', 'Muh Arif', 'rafliakashi12345', 'pelanggan', 'laki-laki', '08990871795', ''),
(19, 'mamad', 'Muhammad Nur', 'mamad123', 'admin', 'laki-laki', '089008765456', ''),
(20, 'mnur', 'Mamad nur', 'mnur123', 'pelanggan', 'laki-laki', '089618970448', 'hajarmuh88@gmail.com'),
(21, 'Mamadji', 'Muhnur', 'mamad123', 'pelanggan', 'perempuan', '0895283572', 'nursianghafsa@yahoo.co.id');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_barang`
--

CREATE TABLE `tb_barang` (
  `kode_barang` varchar(50) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `stok` int(11) DEFAULT NULL,
  `ukuran` char(2) NOT NULL,
  `harga` int(100) NOT NULL,
  `warna` varchar(50) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_barang`
--

INSERT INTO `tb_barang` (`kode_barang`, `nama_barang`, `stok`, `ukuran`, `harga`, `warna`, `gambar`) VALUES
('1', 'Lofog', 7, 'L', 200000, 'Putih', '12062021175157images (6).jpg'),
('2', 'Distro Daeng', 7, 'M', 130000, 'hitam', '12062021175317c201887af9009d41b083683c8b5676c0.jpg'),
('3', 'Toxix', 5, 'S', 90000, 'hitam', '1206202117540268fb900c2cdc3fcf96b2b02bb9c79926_tn.jpg'),
('4', 'daeng MKS', 13, 'M', 100000, 'hitam', '12062021175451e5533cdc6839c2fc13eb6fd23f3ca255.jpg'),
('5', 'Sudiang Distro', 120000, 'L', 80000, 'Putih', '12062021175535images (7).jpg'),
('6', 'Karger', 4, 'L', 200000, 'Biru Tua', '26062021225904images (11).jpg'),
('7', 'generar', 6, 'M', 150000, 'Coklat', '26062021230120images (9).jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  ADD KEY `keranjang_ibfk_1` (`id`),
  ADD KEY `keranjang_ibfk_2` (`kode_barang`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`kode_barang`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  ADD CONSTRAINT `keranjang_ibfk_1` FOREIGN KEY (`id`) REFERENCES `login` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `keranjang_ibfk_2` FOREIGN KEY (`kode_barang`) REFERENCES `tb_barang` (`kode_barang`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
