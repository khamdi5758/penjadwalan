-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Jul 2022 pada 02.30
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_penjadwalan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_guru`
--

CREATE TABLE `tb_guru` (
  `nip` int(12) NOT NULL,
  `nama_guru` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_guru`
--

INSERT INTO `tb_guru` (`nip`, `nama_guru`) VALUES
(324242423, 'Juki Irfansyah'),
(1233123412, 'Zaima Faiza,S.Pd'),
(32445234, 'sdsdf325sdfsdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gurumapel`
--

CREATE TABLE `tb_gurumapel` (
  `nipguru` int(11) NOT NULL,
  `kdmapel` int(11) NOT NULL,
  `jam_kerja` int(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `kd_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kelas`
--

INSERT INTO `tb_kelas` (`kd_kelas`, `nama_kelas`) VALUES
(786789, 'X RPL 1'),
(324234, 'X RPL 2'),
(242342, 'X dkv 1'),
(324534, 'X DKV 2'),
(87987, 'XI MM 2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mapel`
--

CREATE TABLE `tb_mapel` (
  `kd_mapel` int(11) NOT NULL,
  `nama_mapel` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_mapel`
--

INSERT INTO `tb_mapel` (`kd_mapel`, `nama_mapel`) VALUES
(6757768, 'Dasar program keahlian'),
(3245335, 'informatika');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ruangkelas`
--

CREATE TABLE `tb_ruangkelas` (
  `kd_rulas` int(11) NOT NULL,
  `nama_rulas` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_ruangkelas`
--

INSERT INTO `tb_ruangkelas` (`kd_rulas`, `nama_rulas`) VALUES
(879878, 'nangka 1'),
(324242, 'nangka 2'),
(574456, 'Lab MM B'),
(8797078, 'Lab MM A');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
