-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 20 Sep 2024 pada 13.39
-- Versi server: 8.0.30
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `persuratan_dosen`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan_kerja_lembur`
--

CREATE TABLE `laporan_kerja_lembur` (
  `lembur_id` int NOT NULL,
  `hari_tgl_laporan` date NOT NULL,
  `waktu` time NOT NULL,
  `uraian_pekerjaan` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `dosen_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `laporan_kerja_lembur`
--

INSERT INTO `laporan_kerja_lembur` (`lembur_id`, `hari_tgl_laporan`, `waktu`, `uraian_pekerjaan`, `keterangan`, `dosen_id`) VALUES
(1, '2024-09-19', '08:00:00', 'Menyelesaikan proposal penelitian', 'Selesai', 1001),
(2, '2024-09-20', '09:00:00', 'Menyusun materi kuliah', 'Dalam proses', 1002),
(3, '2024-09-21', '10:00:00', 'Mengoreksi tugas mahasiswa', 'Selesai', 1003),
(4, '2024-09-22', '11:00:00', 'Melakukan bimbingan skripsi', 'Dalam proses', 1004),
(5, '2024-09-23', '12:00:00', 'Mengembangkan modul ajar', 'Selesai', 1005),
(6, '2024-09-24', '08:00:00', 'Memeriksa pengganti pengawas ujian Fakultas Teknik', 'Selesai', 1006),
(7, '2024-09-25', '09:30:00', 'Mengatur pengganti pengawas ujian Fakultas Ekonomi', 'Selesai', 1007),
(8, '2024-09-26', '10:15:00', 'Koordinasi pengganti pengawas ujian Fakultas Ilmu Komputer', 'Selesai', 1008),
(9, '2024-09-27', '11:00:00', 'Mengelola pengganti pengawas ujian Fakultas Pertanian', 'Dalam proses', 1009),
(10, '2024-09-28', '12:45:00', 'Memastikan pengganti pengawas ujian Fakultas Ilmu Budaya', 'Dalam proses', 1010);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penggantian_pengawas_ujian`
--

CREATE TABLE `penggantian_pengawas_ujian` (
  `pengganti_id` int NOT NULL,
  `nama_pengawas_diganti` varchar(255) NOT NULL,
  `unit_kerja` varchar(255) NOT NULL,
  `hari_tgl_penggantian` datetime NOT NULL,
  `jam` time NOT NULL,
  `ruang` varchar(50) NOT NULL,
  `nama_pengawas_pengganti` varchar(255) NOT NULL,
  `dosen_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `penggantian_pengawas_ujian`
--

INSERT INTO `penggantian_pengawas_ujian` (`pengganti_id`, `nama_pengawas_diganti`, `unit_kerja`, `hari_tgl_penggantian`, `jam`, `ruang`, `nama_pengawas_pengganti`, `dosen_id`) VALUES
(1, 'Budi Santoso', 'Fakultas Teknik', '2024-09-19 00:00:00', '08:00:00', 'Ruang A1', 'Agus Setiawan', 1001),
(2, 'Sri Lestari', 'Fakultas Ekonomi', '2024-09-20 00:00:00', '09:30:00', 'Ruang B2', 'Maya Sari', 1002),
(3, 'Ahmad Fauzi', 'Fakultas Hukum', '2024-09-21 00:00:00', '10:15:00', 'Ruang C3', 'Dewi Ratnasari', 1003),
(4, 'Siti Aminah', 'Fakultas Ilmu Sosial', '2024-09-22 00:00:00', '11:00:00', 'Ruang D4', 'Eko Prasetyo', 1004),
(5, 'Andi Wijaya', 'Fakultas Kedokteran', '2024-09-23 00:00:00', '12:45:00', 'Ruang E5', 'Rina Astuti', 1005),
(6, 'Rudi Hartono', 'Fakultas Teknik', '2024-09-24 00:00:00', '08:00:00', 'Ruang F1', 'Dian Permana', 1006),
(7, 'Teguh Wibowo', 'Fakultas Ekonomi', '2024-09-25 00:00:00', '09:30:00', 'Ruang G2', 'Wahyu Ramadhan', 1007),
(8, 'Nur Aini', 'Fakultas Ilmu Komputer', '2024-09-26 00:00:00', '10:15:00', 'Ruang H3', 'Sari Dewi', 1008),
(9, 'Iwan Kurniawan', 'Fakultas Pertanian', '2024-09-27 00:00:00', '11:00:00', 'Ruang I4', 'Fitri Handayani', 1009),
(10, 'Dewi Sartika', 'Fakultas Ilmu Budaya', '2024-09-28 00:00:00', '12:45:00', 'Ruang J5', 'Luki Priyanto', 1010);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `laporan_kerja_lembur`
--
ALTER TABLE `laporan_kerja_lembur`
  ADD PRIMARY KEY (`lembur_id`);

--
-- Indeks untuk tabel `penggantian_pengawas_ujian`
--
ALTER TABLE `penggantian_pengawas_ujian`
  ADD PRIMARY KEY (`pengganti_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
