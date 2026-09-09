-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Sep 2026 pada 04.04
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portofolio-huda-db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan-kontak`
--

CREATE TABLE `pesan-kontak` (
  `id` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `email` varchar(250) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pesan-kontak`
--

INSERT INTO `pesan-kontak` (`id`, `nama`, `email`, `pesan`) VALUES
(1, 'soleh', 'soleh@gmail.com', 'lets build together'),
(2, 'jana', 'jana@gmail.com', 'ayok'),
(3, 'jack ', 'jack@gmail.com', 'lets make future '),
(4, 'halo', 'halo@gmail.com', 'halo'),
(5, 'hai', 'hai@gmail.com', 'hai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel-proyek`
--

CREATE TABLE `tabel-proyek` (
  `id` int(11) NOT NULL,
  `judul` varchar(110) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(260) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tabel-proyek`
--

INSERT INTO `tabel-proyek` (`id`, `judul`, `deskripsi`, `gambar`) VALUES
(1, 'IoT Monitoring System', 'A multi-protocol system integrating Arduino Mega 2560, ESP8266 web servers, and Nextion displays for sensor logging.', 'Assets/img/iot.png'),
(2, 'Automated System', 'Developing system architectures and control logic for 3-axis CNC milling machines, including G-code execution workflows and use case modeling.', 'Assets/img/cnc.png'),
(3, 'Industrial Control Logic', 'Development of PLC ladder logic for automated sequencing, state machines, and pneumatic circuit configurations.', 'Assets/img/plc4.png'),
(4, 'Design of On-Grid and Off-Grid Solar Power Systems', 'Engineered complete architectures for both grid-tied and standalone solar energy systems. The project included comprehensive load analysis, sizing of PV arrays and battery banks, and selecting appropriate inverters. The result is a highly efficient, scalable renewable energy solution', 'Assets/img/energi.png'),
(5, 'Cinema Ticketing Management System', 'Developed a console-based cinema ticketing system in C++ designed to manage user bookings efficiently. The application utilizes custom structs and pointer-based memory management for dynamic seat allocation, alongside file stream operations (File I/O) to ensure persistent transaction logging and accurate data sorting.', 'Assets/img/program.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_skill_semester`
--

CREATE TABLE `tabel_skill_semester` (
  `id` int(11) NOT NULL,
  `semester` varchar(100) NOT NULL,
  `nilai_praktik` varchar(100) NOT NULL,
  `nilai_teori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tabel_skill_semester`
--

INSERT INTO `tabel_skill_semester` (`id`, `semester`, `nilai_praktik`, `nilai_teori`) VALUES
(1, 'Semester 1', '60,65,50,70,75,60', '70,70,60,75,80,65'),
(2, 'Semester 2', '75,70,65,80,80,70', '80,75,70,85,85,75'),
(3, 'Semester 3', '85,77,85,85,83,81', '81,75,85,75,75,75'),
(4, 'Semester 4', '70,81,88,75,90,83', '75,77,69,70,85,82'),
(5, 'Semester 5', '81,75,83,77,91,79', '73,75,83,76,80,81');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pesan-kontak`
--
ALTER TABLE `pesan-kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel-proyek`
--
ALTER TABLE `tabel-proyek`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_skill_semester`
--
ALTER TABLE `tabel_skill_semester`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pesan-kontak`
--
ALTER TABLE `pesan-kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tabel-proyek`
--
ALTER TABLE `tabel-proyek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tabel_skill_semester`
--
ALTER TABLE `tabel_skill_semester`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
