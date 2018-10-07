-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Okt 2018 pada 15.30
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `d_modul5`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_jurnal1`
--

CREATE TABLE `t_jurnal1` (
  `NIM` int(10) NOT NULL,
  `Nama` text NOT NULL,
  `Tanggal_lahir` date NOT NULL,
  `Jenik_kelamin` varchar(10) NOT NULL,
  `Program_jurusan` varchar(30) NOT NULL,
  `Fakultas` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL DEFAULT '@gmail.com'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_jurnal1`
--

INSERT INTO `t_jurnal1` (`NIM`, `Nama`, `Tanggal_lahir`, `Jenik_kelamin`, `Program_jurusan`, `Fakultas`, `Email`) VALUES
(2147483647, 'martya', '1999-03-10', 'Wanita', 'prodi', 'fakultas', 'email'),
(2147483647, 'almira', '1999-03-13', 'Wanita', 'prodi', 'fakultas', 'email'),
(2147483647, 'almira', '1999-02-02', 'Wanita', 'prodi', 'fakultas', 'email'),
(2147483647, 'maret', '2018-10-04', 'Wanita', '', '', 'almira@gmail.com'),
(2147483647, 'maret', '0000-00-00', '2018-10-17', 'Wanita', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
