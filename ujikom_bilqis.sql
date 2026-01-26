-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 20, 2026 at 10:07 AM
-- Server version: 8.4.3
-- PHP Version: 8.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ujikom_bilqis`
--

-- --------------------------------------------------------

--
-- Table structure for table `input_aspirasi`
--

CREATE TABLE `input_aspirasi` (
  `id_pelaporan` int NOT NULL,
  `nis` varchar(10) NOT NULL,
  `id_kategori` int NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `status` enum('menunggu','proses','selesai') NOT NULL,
  `feedback` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

--
-- Dumping data for table `input_aspirasi`
--

INSERT INTO `input_aspirasi` (`id_pelaporan`, `nis`, `id_kategori`, `lokasi`, `keterangan`, `status`, `feedback`) VALUES
(15, '001', 2, 'ac', 'f', 'menunggu', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int NOT NULL,
  `ket_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `ket_kategori`) VALUES
(1, 'lingkungan'),
(2, 'fasilitas');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role` enum('Siswa','Admin') NOT NULL,
  `nis` varchar(10) NOT NULL,
  `kelas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`, `nis`, `kelas`) VALUES
(1, 'AA', '$2y$10$GERDaKhslAEI26JI2qRotubR0BBRA1mZa9ojTyM8WwlMdjVFYOAyq', 'Siswa', '001', '11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `input_aspirasi`
--
ALTER TABLE `input_aspirasi`
  ADD PRIMARY KEY (`id_pelaporan`),
  ADD UNIQUE KEY `nis` (`nis`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nis` (`nis`),
  ADD KEY `nis_2` (`nis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `input_aspirasi`
--
ALTER TABLE `input_aspirasi`
  MODIFY `id_pelaporan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `input_aspirasi`
--
ALTER TABLE `input_aspirasi`
  ADD CONSTRAINT `input_aspirasi_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `input_aspirasi_ibfk_2` FOREIGN KEY (`nis`) REFERENCES `user` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
