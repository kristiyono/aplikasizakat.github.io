-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 01 Jul 2018 pada 10.59
-- Versi Server: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zakatinaja`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bank`
--

CREATE TABLE `bank` (
  `id` int(11) NOT NULL,
  `nama_bank` varchar(25) NOT NULL,
  `rekening` varchar(50) NOT NULL,
  `saldo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bank`
--

INSERT INTO `bank` (`id`, `nama_bank`, `rekening`, `saldo`) VALUES
(1, 'BANK BCA', '45545-55454-2221', 0),
(2, 'BANK BRI', '62155-9854-665', 0),
(3, 'BANK CIMB', '4325345-23423-34444', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_zakat`
--

CREATE TABLE `data_zakat` (
  `id_activity` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jzakat` varchar(30) NOT NULL,
  `notelp` int(11) NOT NULL,
  `metode` varchar(25) NOT NULL,
  `nominal` int(11) NOT NULL,
  `bank` varchar(25) NOT NULL,
  `status` enum('DITERIMA','BELUM') NOT NULL DEFAULT 'BELUM'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_zakat`
--

INSERT INTO `data_zakat` (`id_activity`, `nama`, `email`, `jzakat`, `notelp`, `metode`, `nominal`, `bank`, `status`) VALUES
(23, 'Leandri', 'rean@x.com', 'Zakat Mal', 23455345, 'transfer', 500000, 'BANK BRI', 'DITERIMA'),
(24, 'John', 'Jhon@mm.com', 'Zakat penghasilan', 2147483647, 'transfer', 1000000, 'BANK BCA', 'BELUM'),
(25, 'Nana', 'anan@mm.com', 'Zakat Mal', 234535345, 'transfer', 2500000, 'BANK BRI', 'DITERIMA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', 'zakatinaja');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_zakat`
--
ALTER TABLE `data_zakat`
  ADD PRIMARY KEY (`id_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `data_zakat`
--
ALTER TABLE `data_zakat`
  MODIFY `id_activity` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
