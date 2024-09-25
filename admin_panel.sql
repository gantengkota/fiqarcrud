-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Sep 2024 pada 08.45
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin_panel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '482c811da5d5b4bc6d497ffa98491e38'),
(2, 'admin123', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tempat`
--

CREATE TABLE `tempat` (
  `No` int(11) NOT NULL,
  `Nama_Tempat` varchar(100) NOT NULL,
  `Alamat` varchar(255) NOT NULL,
  `Nomor_Telepon` varchar(20) NOT NULL,
  `Email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tempat`
--

INSERT INTO `tempat` (`No`, `Nama_Tempat`, `Alamat`, `Nomor_Telepon`, `Email`) VALUES
(1, 'konz', 'konz', '0927812', 'jbsab@gmail.com'),
(2, 'konz', 'konz', '0927812', 'harahateoy@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tempat_pkl`
--

CREATE TABLE `tempat_pkl` (
  `No` int(11) NOT NULL,
  `Nama_Tempat` varchar(100) NOT NULL,
  `Alamat` varchar(255) NOT NULL,
  `Nomor_Telepon` varchar(20) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Jurusan` varchar(10) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tempat_pkl_bp`
--

CREATE TABLE `tempat_pkl_bp` (
  `No` int(11) NOT NULL,
  `Nama_Tempat` varchar(255) NOT NULL,
  `Alamat` varchar(255) NOT NULL,
  `Nomor_Telepon` varchar(20) NOT NULL,
  `Email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tempat_pkl_bp`
--

INSERT INTO `tempat_pkl_bp` (`No`, `Nama_Tempat`, `Alamat`, `Nomor_Telepon`, `Email`) VALUES
(1, 'konz', '122132', '23213', 'muhammadmadani045@smk.belajar.id');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tempat_pkl_dpib`
--

CREATE TABLE `tempat_pkl_dpib` (
  `No` int(11) NOT NULL,
  `Nama_Tempat` varchar(255) NOT NULL,
  `Alamat` varchar(255) NOT NULL,
  `Nomor_Telepon` varchar(20) NOT NULL,
  `Email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tempat_pkl_kp`
--

CREATE TABLE `tempat_pkl_kp` (
  `No` int(11) NOT NULL,
  `Nama_Tempat` varchar(255) NOT NULL,
  `Alamat` varchar(255) NOT NULL,
  `Nomor_Telepon` varchar(20) NOT NULL,
  `Email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tempat_pkl_te`
--

CREATE TABLE `tempat_pkl_te` (
  `No` int(11) NOT NULL,
  `Nama_Tempat` varchar(255) NOT NULL,
  `Alamat` varchar(255) NOT NULL,
  `Nomor_Telepon` varchar(20) NOT NULL,
  `Email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tempat_pkl_tj`
--

CREATE TABLE `tempat_pkl_tj` (
  `No` int(11) NOT NULL,
  `Nama_Tempat` varchar(255) NOT NULL,
  `Alamat` varchar(255) NOT NULL,
  `Nomor_Telepon` varchar(20) NOT NULL,
  `Email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tempat_pkl_tj`
--

INSERT INTO `tempat_pkl_tj` (`No`, `Nama_Tempat`, `Alamat`, `Nomor_Telepon`, `Email`) VALUES
(1, 'didik mototrshop', 'pandean', '02839074893', 'didikgunshop@gmail.crot');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tempat_pkl_tkr`
--

CREATE TABLE `tempat_pkl_tkr` (
  `No` int(11) NOT NULL,
  `Nama_Tempat` varchar(255) NOT NULL,
  `Alamat` varchar(255) NOT NULL,
  `Nomor_Telepon` varchar(20) NOT NULL,
  `Email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tempat_pkl_tl`
--

CREATE TABLE `tempat_pkl_tl` (
  `No` int(11) NOT NULL,
  `Nama_Tempat` varchar(255) NOT NULL,
  `Alamat` varchar(255) NOT NULL,
  `Nomor_Telepon` varchar(20) NOT NULL,
  `Email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tempat_pkl_tp`
--

CREATE TABLE `tempat_pkl_tp` (
  `No` int(11) NOT NULL,
  `Nama_Tempat` varchar(255) NOT NULL,
  `Alamat` varchar(255) NOT NULL,
  `Nomor_Telepon` varchar(20) NOT NULL,
  `Email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tempat`
--
ALTER TABLE `tempat`
  ADD PRIMARY KEY (`No`);

--
-- Indeks untuk tabel `tempat_pkl`
--
ALTER TABLE `tempat_pkl`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_no_jurusan` (`No`,`Jurusan`);

--
-- Indeks untuk tabel `tempat_pkl_bp`
--
ALTER TABLE `tempat_pkl_bp`
  ADD PRIMARY KEY (`No`);

--
-- Indeks untuk tabel `tempat_pkl_dpib`
--
ALTER TABLE `tempat_pkl_dpib`
  ADD PRIMARY KEY (`No`);

--
-- Indeks untuk tabel `tempat_pkl_kp`
--
ALTER TABLE `tempat_pkl_kp`
  ADD PRIMARY KEY (`No`);

--
-- Indeks untuk tabel `tempat_pkl_te`
--
ALTER TABLE `tempat_pkl_te`
  ADD PRIMARY KEY (`No`);

--
-- Indeks untuk tabel `tempat_pkl_tj`
--
ALTER TABLE `tempat_pkl_tj`
  ADD PRIMARY KEY (`No`);

--
-- Indeks untuk tabel `tempat_pkl_tkr`
--
ALTER TABLE `tempat_pkl_tkr`
  ADD PRIMARY KEY (`No`);

--
-- Indeks untuk tabel `tempat_pkl_tl`
--
ALTER TABLE `tempat_pkl_tl`
  ADD PRIMARY KEY (`No`);

--
-- Indeks untuk tabel `tempat_pkl_tp`
--
ALTER TABLE `tempat_pkl_tp`
  ADD PRIMARY KEY (`No`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tempat`
--
ALTER TABLE `tempat`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tempat_pkl`
--
ALTER TABLE `tempat_pkl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tempat_pkl_bp`
--
ALTER TABLE `tempat_pkl_bp`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tempat_pkl_dpib`
--
ALTER TABLE `tempat_pkl_dpib`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tempat_pkl_kp`
--
ALTER TABLE `tempat_pkl_kp`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tempat_pkl_te`
--
ALTER TABLE `tempat_pkl_te`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tempat_pkl_tj`
--
ALTER TABLE `tempat_pkl_tj`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tempat_pkl_tkr`
--
ALTER TABLE `tempat_pkl_tkr`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tempat_pkl_tl`
--
ALTER TABLE `tempat_pkl_tl`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tempat_pkl_tp`
--
ALTER TABLE `tempat_pkl_tp`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
