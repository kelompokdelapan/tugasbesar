-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2018 at 05:58 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `nama`, `harga`, `jumlah`, `gambar`) VALUES
(54, 'onesie pikachu', 145000, 4, '8.jpg'),
(55, 'onesie micky mouse', 165000, 9, '9.jpg'),
(56, 'onesie batman', 135000, 0, '5.jpg'),
(57, 'onesie mario brosh', 150000, 10, '20.jpg'),
(58, 'onesie duck', 135000, 10, '14.jpg'),
(59, 'onesie goovie', 120000, 10, '19.jpg'),
(60, 'onesie naruto', 145000, 10, '15.jpg'),
(61, 'onesie frog', 120000, 10, '16.jpg'),
(62, 'onesie uvo', 100000, 10, '17.jpg'),
(63, 'onesie winnie the pooh', 145000, 12, '4.jpg'),
(64, 'onesie stars', 150000, 10, '11.jpg'),
(65, 'onesie panda', 130000, 12, '13.jpg'),
(67, 'onesie halloween', 165000, 20, '18.jpg'),
(68, 'onesie owl', 120000, 5, '12.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `barang_disewa`
--

CREATE TABLE `barang_disewa` (
  `id` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total_harga` int(255) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang_disewa`
--

INSERT INTO `barang_disewa` (`id`, `id_barang`, `id_user`, `jumlah`, `total_harga`, `tgl_pinjam`, `tgl_kembali`, `status`) VALUES
(8, 54, 2, 1, 145000, '2018-01-31', '0000-00-00', 1),
(9, 55, 2, 1, 165000, '2018-01-31', '0000-00-00', 1),
(10, 56, 2, 10, 1350000, '2018-01-31', '0000-00-00', 1);

--
-- Triggers `barang_disewa`
--
DELIMITER $$
CREATE TRIGGER `update_jumlah` AFTER UPDATE ON `barang_disewa` FOR EACH ROW IF NEW.status = 1 THEN
UPDATE barang SET jumlah = jumlah - NEW.jumlah WHERE id = NEW.id_barang;
END IF
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `status`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'user1', 'yaallah', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barang_disewa`
--
ALTER TABLE `barang_disewa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK1` (`id_barang`),
  ADD KEY `FK2` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
--
-- AUTO_INCREMENT for table `barang_disewa`
--
ALTER TABLE `barang_disewa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang_disewa`
--
ALTER TABLE `barang_disewa`
  ADD CONSTRAINT `FK1` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
