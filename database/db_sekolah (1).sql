-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2023 at 08:29 AM
-- Server version: 10.10.2-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `username`, `password`) VALUES
(1, 'tes@gmail.com', 'tes', '123'),
(2, 'tes@gmail.com', 'TRIAL058', 'tes');

-- --------------------------------------------------------

--
-- Table structure for table `alokasi_mapel`
--

CREATE TABLE `alokasi_mapel` (
  `id` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `alokasi_mapel`
--

INSERT INTO `alokasi_mapel` (`id`, `id_mapel`, `id_kelas`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id` int(11) NOT NULL,
  `nama_guru` varchar(255) NOT NULL,
  `NIK` varchar(255) NOT NULL,
  `gander` varchar(255) NOT NULL,
  `id_mapel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id`, `nama_guru`, `NIK`, `gander`, `id_mapel`) VALUES
(1, 'riyan', '8****', 'pria', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` int(11) NOT NULL,
  `tingkat_kelas` varchar(255) NOT NULL,
  `jurusan_kelas` varchar(255) NOT NULL,
  `id_sekolah` int(11) NOT NULL,
  `id_walikelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `tingkat_kelas`, `jurusan_kelas`, `id_sekolah`, `id_walikelas`) VALUES
(1, '11', 'TKJ', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `id` int(11) NOT NULL,
  `nama_mapel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`id`, `nama_mapel`) VALUES
(1, 'mtk');

-- --------------------------------------------------------

--
-- Table structure for table `page login`
--

CREATE TABLE `page login` (
  `input_email` varchar(255) NOT NULL,
  `input_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `page register`
--

CREATE TABLE `page register` (
  `input_email` varchar(255) NOT NULL,
  `input_username` varchar(255) NOT NULL,
  `input_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sekolah`
--

CREATE TABLE `sekolah` (
  `id` int(11) NOT NULL,
  `nama_sekolah` varchar(255) NOT NULL,
  `alamat_sekolah` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sekolah`
--

INSERT INTO `sekolah` (`id`, `nama_sekolah`, `alamat_sekolah`) VALUES
(1, 'binusa', 'bapak_budi');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `nama_siswa` varchar(255) NOT NULL,
  `NISN` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `id_kelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nama_siswa`, `NISN`, `gender`, `id_kelas`) VALUES
(1, 'budi', '5*****', 'pria', 1);

-- --------------------------------------------------------

--
-- Table structure for table `walikelas`
--

CREATE TABLE `walikelas` (
  `id` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `walikelas`
--

INSERT INTO `walikelas` (`id`, `id_guru`) VALUES
(1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alokasi_mapel`
--
ALTER TABLE `alokasi_mapel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_mapel` (`id_mapel`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_mapel` (`id_mapel`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_sekolah` (`id_sekolah`),
  ADD KEY `id_walikelas` (`id_walikelas`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page login`
--
ALTER TABLE `page login`
  ADD PRIMARY KEY (`input_email`);

--
-- Indexes for table `page register`
--
ALTER TABLE `page register`
  ADD PRIMARY KEY (`input_email`);

--
-- Indexes for table `sekolah`
--
ALTER TABLE `sekolah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indexes for table `walikelas`
--
ALTER TABLE `walikelas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_guru` (`id_guru`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `alokasi_mapel`
--
ALTER TABLE `alokasi_mapel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mapel`
--
ALTER TABLE `mapel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sekolah`
--
ALTER TABLE `sekolah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `walikelas`
--
ALTER TABLE `walikelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `alokasi_mapel`
--
ALTER TABLE `alokasi_mapel`
  ADD CONSTRAINT `alokasi_mapel_ibfk_1` FOREIGN KEY (`id_mapel`) REFERENCES `mapel` (`id`),
  ADD CONSTRAINT `alokasi_mapel_ibfk_2` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id`);

--
-- Constraints for table `guru`
--
ALTER TABLE `guru`
  ADD CONSTRAINT `guru_ibfk_1` FOREIGN KEY (`id_mapel`) REFERENCES `mapel` (`id`);

--
-- Constraints for table `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `kelas_ibfk_1` FOREIGN KEY (`id_sekolah`) REFERENCES `sekolah` (`id`),
  ADD CONSTRAINT `kelas_ibfk_2` FOREIGN KEY (`id_walikelas`) REFERENCES `walikelas` (`id`);

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id`);

--
-- Constraints for table `walikelas`
--
ALTER TABLE `walikelas`
  ADD CONSTRAINT `walikelas_ibfk_1` FOREIGN KEY (`id_guru`) REFERENCES `guru` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
