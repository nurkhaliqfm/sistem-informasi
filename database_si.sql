-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 19, 2022 at 03:32 AM
-- Server version: 10.6.5-MariaDB
-- PHP Version: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_si`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_jadwal`
--

CREATE TABLE `data_jadwal` (
  `id` int(11) NOT NULL,
  `nama_mahasiswa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul_skripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jadwal_ujian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dosen_pembimbing` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dosen_penguji` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_jadwal`
--

INSERT INTO `data_jadwal` (`id`, `nama_mahasiswa`, `nim`, `judul_skripsi`, `jadwal_ujian`, `dosen_pembimbing`, `dosen_penguji`, `updated_at`, `created_at`) VALUES
(5, 'Nurkhaliq Futhra Maulana', '19971110', 'Aplikasi', '2021-12-26', 'Alexaa', 'Steaven', '2022-01-18 12:44:11', '2022-01-17 13:14:51'),
(6, 'Alvin', '20181001', 'Open Web', '2022-01-18', 'I Love You', 'Steaven', '2022-01-17 17:13:18', '2022-01-17 16:45:45'),
(7, 'Nurkhaliq Futhra Maulana', '12343452', 'Aplikasi', '2021-12-26', 'Alexaa', 'Steaven', '2022-01-18 12:44:11', '2022-01-17 13:14:51'),
(8, 'Alvin', '12341234', 'Open Web', '2022-01-18', 'I Love You', 'Steaven', '2022-01-17 17:13:18', '2022-01-17 16:45:45');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_login` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `level_user`, `last_login`, `updated_at`, `created_at`) VALUES
(1, 'admin', 'admin', 'admin', '2022-01-18 13:32:12', '2022-01-18 13:32:12', '2022-01-19 02:17:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_jadwal`
--
ALTER TABLE `data_jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_jadwal`
--
ALTER TABLE `data_jadwal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
