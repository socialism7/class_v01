-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2019 at 05:30 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `classys01`
--
CREATE DATABASE IF NOT EXISTS `classys01` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `classys01`;

-- --------------------------------------------------------

--
-- Table structure for table `data_riset`
--

CREATE TABLE `data_riset` (
  `id_data` varchar(100) NOT NULL,
  `id_waktu` varchar(100) NOT NULL,
  `id_wilayah` int(100) NOT NULL,
  `id_researcher` varchar(100) NOT NULL,
  `salary` int(100) NOT NULL,
  `data_x` int(100) NOT NULL,
  `data_y` int(100) NOT NULL,
  `data_z` int(100) NOT NULL,
  `result` varchar(100) NOT NULL,
  `categories` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_riset`
--

INSERT INTO `data_riset` (`id_data`, `id_waktu`, `id_wilayah`, `id_researcher`, `salary`, `data_x`, `data_y`, `data_z`, `result`, `categories`) VALUES
('65152', '2342', 65151, '2012333', 3000000, 1000000, 99999, 59889, '1840112', 'Upper Class'),
('65153', '2342', 65151, '2012333', 2500000, 1000000, 500000, 50000, '950000', 'Middle Class'),
('65154', '2342', 65151, '2012333', 7000000, 1000000, 200000, 30000, '5770000', 'Upper Class'),
('65155', '2342', 65151, '2012333', 3000000, 700000, 900000, 100000, '1300000', 'Middle Class'),
('65156', '2342', 65151, '2012333', 2000000, 900000, 900000, 200000, '0', 'Lower Class'),
('65157', '2342', 65151, '2012333', 3000000, 800000, 500000, 90000, '1610000', 'Upper Class'),
('65158', '2342', 65151, '2012333', 3000000, 1500000, 600000, 100000, '800000', 'Lower Class'),
('65159', '2342', 65151, '2012333', 4000000, 1200000, 400000, 79000, '2321000', 'Upper Class'),
('65160', '2342', 65151, '2012333', 3000000, 780000, 300000, 300000, '1620000', 'Upper Class'),
('65161', '2342', 65151, '2012333', 2500000, 800000, 500000, 100000, '1100000', 'Middle Class'),
('65162', '2342', 65151, '2012333', 2000000, 980000, 555555, 30000, '434445', 'Lower Class'),
('65163', '2342', 65151, '2012333', 1700000, 776700, 605050, 45000, '273250', 'Lower Class'),
('65164', '2342', 65151, '2012333', 2000000, 990000, 444000, 90000, '476000', 'Lower Class'),
('65165', '2342', 65151, '2012333', 1500000, 300000, 666600, 40000, '493400', 'Middle Class'),
('65166', '2342', 65151, '2012333', 2000000, 750000, 1000000, 43000, '207000', 'Lower Class'),
('65167', '2342', 65151, '2012333', 1300000, 200000, 400000, 40000, '660000', 'Upper Class'),
('65168', '2342', 65151, '2012333', 1200000, 500000, 444000, 70000, '186000', 'Lower Class'),
('65169', '2342', 65151, '2012333', 1500000, 400000, 999000, 20000, '81000', 'Lower Class');

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `id_info` int(100) NOT NULL,
  `isi` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`id_info`, `isi`) VALUES
(1, 'Riset dilakukan pada tanggal 4 Januari - 12 Maret 2019.\r\nBertempat di Desa Wonogoro. Oke Kamerad!'),
(3, 'Bismillah wes.. oyi kamerad!'),
(4, 'Ini percobaan informasi terbaru.. muncul paling atas suiip!');

-- --------------------------------------------------------

--
-- Table structure for table `researcher`
--

CREATE TABLE `researcher` (
  `id_researcher` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `hp` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `researcher`
--

INSERT INTO `researcher` (`id_researcher`, `nama`, `username`, `password`, `hp`, `alamat`) VALUES
(2012328, 'Hasan', '2012328', 'cd00692c3bfe59267d5ecfac5310286c', '08789876798', 'Brebes'),
(2012333, 'Rahmat', '2012333', '310dcbbf4cce62f762a2aaa148d556bd', '08333333333', 'Kediri');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` int(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `hp` varchar(20) NOT NULL,
  `level` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `hp`, `level`) VALUES
(2019111, 'Hesti', 2019111, '698d51a19d8a121ce581499d7b701668', '08111111111', 1),
(2019353, 'ubay', 2019353, '138bb0696595b338afbab333c555292a', '083534343', 2),
(20197333, 'aa', 20197333, '310dcbbf4cce62f762a2aaa148d556bd', '098', 1);

-- --------------------------------------------------------

--
-- Table structure for table `waktu`
--

CREATE TABLE `waktu` (
  `id_waktu` varchar(50) NOT NULL,
  `waktu` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `waktu`
--

INSERT INTO `waktu` (`id_waktu`, `waktu`) VALUES
('2342', '2019-06-29'),
('245', '2019-06-09'),
('343', '2019-06-12');

-- --------------------------------------------------------

--
-- Table structure for table `wilayah`
--

CREATE TABLE `wilayah` (
  `id_wilayah` int(100) NOT NULL,
  `nama_desa` varchar(20) NOT NULL,
  `nama_kec` varchar(20) NOT NULL,
  `nama_kab_kot` varchar(20) NOT NULL,
  `nama_prov` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wilayah`
--

INSERT INTO `wilayah` (`id_wilayah`, `nama_desa`, `nama_kec`, `nama_kab_kot`, `nama_prov`) VALUES
(43212, 'Blaruuuu', 'Badas', 'Kediri', 'Jawa Timur'),
(64218, 'Krecek', 'Badas', 'Kediri', 'Jawa Timur'),
(65151, 'Landungsari', 'Dau', 'Malang', 'Jawa Timur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_riset`
--
ALTER TABLE `data_riset`
  ADD PRIMARY KEY (`id_data`);

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id_info`);

--
-- Indexes for table `researcher`
--
ALTER TABLE `researcher`
  ADD PRIMARY KEY (`id_researcher`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `id_researcher` (`id_researcher`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- Indexes for table `waktu`
--
ALTER TABLE `waktu`
  ADD PRIMARY KEY (`id_waktu`);

--
-- Indexes for table `wilayah`
--
ALTER TABLE `wilayah`
  ADD PRIMARY KEY (`id_wilayah`),
  ADD UNIQUE KEY `id_wilayah` (`id_wilayah`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id_info` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `researcher`
--
ALTER TABLE `researcher`
  MODIFY `id_researcher` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2012334;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
