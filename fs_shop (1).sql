-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 08 Jan 2019 pada 04.34
-- Versi Server: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fs_shop`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `identitas`
--

CREATE TABLE `identitas` (
  `nama_toko` varchar(1028) NOT NULL,
  `nama_pemilik` varchar(1028) NOT NULL,
  `nama_tanggung` varchar(1028) NOT NULL,
  `alamat` varchar(1028) NOT NULL,
  `kota` varchar(1028) NOT NULL,
  `kontak` varchar(1028) NOT NULL,
  `email` varchar(1028) NOT NULL,
  `website` varchar(1028) NOT NULL,
  `logo` varchar(1028) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `identitas`
--

INSERT INTO `identitas` (`nama_toko`, `nama_pemilik`, `nama_tanggung`, `alamat`, `kota`, `kontak`, `email`, `website`, `logo`) VALUES
('FS Indonesia', 'Mehmed Mevlana Feisal', 'Ikhsan Rasidin', 'Bojong cd. soreang milletvekili dogu cava', 'bandunk', '089622779622', 'isanrasidin54@gmail.com', 'www.iccstore.com', '07012019102529DSC_0217.JPG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tampilan`
--

CREATE TABLE `tampilan` (
  `judul_web` varchar(255) NOT NULL,
  `background` varchar(255) NOT NULL,
  `warna` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `font` varchar(255) NOT NULL,
  `footer_faktur` varchar(1023) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tampilan`
--

INSERT INTO `tampilan` (`judul_web`, `background`, `warna`, `color`, `font`, `footer_faktur`) VALUES
('ICC STORE', '07012019101502', '#0080ff', '#2c2c2c', 'calibri', 'Zahit Bizi Tan Eyleme Hay Hay Hak Ismin Okur Dilimiz Hey Canim');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_lengkap`, `nama_user`, `password`, `keterangan`, `level`) VALUES
('1', 'Reyhan', 'reyhanmevlana', 'isan12345', 'Aku Adalah Reyhan', 'admin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
