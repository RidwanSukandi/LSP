-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Feb 2023 pada 19.19
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lsp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `id` int(11) NOT NULL,
  `Nip` int(15) NOT NULL,
  `Nama_guru` varchar(30) NOT NULL,
  `Tempat_lahir` varchar(30) NOT NULL,
  `Tanggal_lahir` date NOT NULL,
  `Jenis_kelamin` varchar(10) NOT NULL,
  `Alamat` varchar(30) NOT NULL,
  `Telpon` varchar(11) NOT NULL,
  `Kode_mata_pelajaran` varchar(20) NOT NULL,
  `Nama_mata_pelajaran` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id`, `Nip`, `Nama_guru`, `Tempat_lahir`, `Tanggal_lahir`, `Jenis_kelamin`, `Alamat`, `Telpon`, `Kode_mata_pelajaran`, `Nama_mata_pelajaran`) VALUES
(2, 890657, 'Budiarto', 'Depok', '2023-03-01', 'Laki-Laki', 'Depok', '0812456784', '05TPLE', 'Pemograman');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `Nis` int(10) NOT NULL,
  `Nama_siswa` varchar(20) NOT NULL,
  `Tempat_lahir` varchar(20) NOT NULL,
  `Tanggal_lahir` date NOT NULL,
  `Jenis_kelamin` varchar(10) NOT NULL,
  `Alamat` varchar(20) NOT NULL,
  `Telepon` int(20) NOT NULL,
  `Nama_wali` varchar(20) NOT NULL,
  `Kode_kelas` varchar(20) NOT NULL,
  `Username` char(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id`, `Nis`, `Nama_siswa`, `Tempat_lahir`, `Tanggal_lahir`, `Jenis_kelamin`, `Alamat`, `Telepon`, `Nama_wali`, `Kode_kelas`, `Username`, `Password`) VALUES
(1, 19902306, 'Bambang', 'Depok', '2023-03-01', 'Laki-Laki', 'Depok', 8128327, 'Budi', '08', 'Bambang', '123456');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
