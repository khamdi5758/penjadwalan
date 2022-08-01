-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Agu 2022 pada 13.24
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
-- Stand-in struktur untuk tampilan `jadwal`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `jadwal` (
`id_jadwal` int(11)
,`guru` varchar(150)
,`mapel` varchar(150)
,`hari` varchar(50)
,`jamke` varchar(11)
,`kelas` varchar(150)
,`ruang` varchar(150)
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_guru`
--

CREATE TABLE `tb_guru` (
  `nip` smallint(18) NOT NULL,
  `nama_guru` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_guru`
--

INSERT INTO `tb_guru` (`nip`, `nama_guru`) VALUES
(32767, 'juki irwansyah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gurumapel`
--

CREATE TABLE `tb_gurumapel` (
  `nipguru` smallint(18) NOT NULL,
  `kdmapel` int(11) NOT NULL,
  `jam_kerja` int(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jadwal`
--

CREATE TABLE `tb_jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `nipguru` smallint(18) NOT NULL,
  `kd_mapel` int(11) NOT NULL,
  `hari` varchar(50) NOT NULL,
  `jam` int(3) NOT NULL,
  `kelas` int(11) NOT NULL,
  `ruang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_jadwal`
--

INSERT INTO `tb_jadwal` (`id_jadwal`, `nipguru`, `kd_mapel`, `hari`, `jam`, `kelas`, `ruang`) VALUES
(90875, 32767, 3245335, 'senin', 1, 324534, 574456);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jam`
--

CREATE TABLE `tb_jam` (
  `idjam` int(2) NOT NULL,
  `waktu` varchar(100) NOT NULL,
  `keterangan` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_jam`
--

INSERT INTO `tb_jam` (`idjam`, `waktu`, `keterangan`) VALUES
(1, '07:00-07:40', '1'),
(2, '07:40-0820', '2'),
(3, '08:20-09:00', '3'),
(4, '09:00-09:40', '4'),
(5, '09:40-10:10', 'istirahat1'),
(6, '10:10-10:50', '5'),
(7, '10:50-11:30', '6'),
(8, '11:30-12:10', '7'),
(9, '12:10-12:50', 'istirahat2'),
(10, '12:50-13:30', '8'),
(11, '13:30-14:10', '9'),
(12, '14:10-14:50', '10'),
(13, '14:50-15:30', '11');

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

-- --------------------------------------------------------

--
-- Struktur untuk view `jadwal`
--
DROP TABLE IF EXISTS `jadwal`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `jadwal`  AS SELECT `tb_jadwal`.`id_jadwal` AS `id_jadwal`, `tb_guru`.`nama_guru` AS `guru`, `tb_mapel`.`nama_mapel` AS `mapel`, `tb_jadwal`.`hari` AS `hari`, `tb_jam`.`keterangan` AS `jamke`, `tb_kelas`.`nama_kelas` AS `kelas`, `tb_ruangkelas`.`nama_rulas` AS `ruang` FROM (((((`tb_jadwal` join `tb_guru` on(`tb_jadwal`.`nipguru` = `tb_guru`.`nip`)) join `tb_mapel` on(`tb_jadwal`.`kd_mapel` = `tb_mapel`.`kd_mapel`)) join `tb_jam` on(`tb_jadwal`.`jam` = `tb_jam`.`idjam`)) join `tb_kelas` on(`tb_jadwal`.`kelas` = `tb_kelas`.`kd_kelas`)) join `tb_ruangkelas` on(`tb_jadwal`.`ruang` = `tb_ruangkelas`.`kd_rulas`))  ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
