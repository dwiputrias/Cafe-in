-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2018 at 09:36 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `del_cafe'in`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul`, `deskripsi`) VALUES
(1, 'Apa itu Del Cafe\'in?', 'Del Cafe adalah Cafe yang menyediakan berbagai jenis makanan sehat. Makanan sehat adalah Makanan yang memiliki kandungan gizi yang seimbang.');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Sayur'),
(2, 'Lauk'),
(3, 'Minuman');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `id_user`, `id_produk`, `isi`, `tanggal`, `status`) VALUES
(1, 4, 10, 'rbfasbbvjdbvo;bf', '2018-11-30', 'Confirmed'),
(2, 4, 20, 'nlsnvnslnsv', '2018-12-05', 'Confirmed'),
(3, 4, 10, 'Masukkan komentar anda tentang menu ini', '2018-12-05', 'Rejected'),
(4, 4, 9, 'Sangat Enak\r\n', '2018-12-07', 'On Progress'),
(5, 4, 10, 'jsjkrljvnslrnl', '2018-12-07', 'Confirmed');

-- --------------------------------------------------------

--
-- Table structure for table `makanan`
--

CREATE TABLE `makanan` (
  `id_produk` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` int(10) NOT NULL,
  `qty` int(9) NOT NULL,
  `keterangan` varchar(500) NOT NULL,
  `gambar` varchar(45) NOT NULL,
  `id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `makanan`
--

INSERT INTO `makanan` (`id_produk`, `nama`, `harga`, `qty`, `keterangan`, `gambar`, `id_kategori`) VALUES
(9, 'Daging Rendang', 14000, 1, 'Daging yang berkualitas dan sangat enak.', 'daging_rendang.jpg', 2),
(10, 'Ayam Sambal', 10000, 1, 'Ayam Sambal terkenal', 'ayam_sambal.jpg', 2),
(11, 'Ayam Gulai', 10000, 2, 'Pedas', 'ayam_gulai.jpg', 2),
(19, 'Ayam Goreng', 7000, 2, 'Ayam Goreng sangat enak.', 'ayam_goreng.jpg', 2),
(20, 'Ikan Mujair Asam Manis', 15000, 1, 'Ikan Mujair ini sangat sedap.', 'ikan_mujair_asam_manis.jpg', 2),
(21, 'Kangkung', 10000, 0, 'Sayurnya sangat lembut.', 'kangkung.jpg', 1),
(22, 'Lele Sambal', 12000, 1, 'Lele ini sangat enak', 'lele_sambal.jpg', 2),
(23, 'Pokcoy', 20000, 2, 'Pokcoy Lezat', 'pokcoy.jpg', 1),
(24, 'Sawi', 20000, 2, 'Sawi Manis', 'sawi.jpg', 1),
(25, 'Sayur Bayam', 12500, 1, 'Sayur Bayam ini sangat terjamin.', 'sayur_bayam.jpg', 1),
(26, 'Sayur Ubi', 17000, 1, 'Sayur Ubi Maknyoss', 'sayur_ubi.jpg', 1),
(27, 'Tahu Sambal', 15000, 1, 'Tahu Sambal Mantap', 'tahu_sambal.jpg', 2),
(28, 'Teh Manis', 14000, 1, 'Teh Manis Hangat', 'teh_manis.jpg', 3),
(29, 'Telur Dadar Sambal', 12000, 1, 'Telur Dadar Sambal', 'telur_dadar_sambal.jpg', 2),
(30, 'Telur Sambal', 12000, 1, 'Telur Bulat enakk', 'telur_sambal.jpg', 2),
(31, 'Ikan Teri', 16000, 1, 'Ikan Teri Sambal', 'teri_sambal.jpg', 2),
(32, 'Terong', 20000, 1, 'Terong Sambal sangat pedas.', 'terong_sambal.jpg', 1),
(33, 'Udang', 50000, 1, 'Udang Sambal', 'udang_sambal.jpg', 2),
(34, 'Susu Cokelat', 20000, 1, 'Susu Cokelat Hangat sangat enak diminum pada saat santai.', 'susu_coklat.jpg', 3),
(35, 'Cincau', 18500, 1, 'Cincau Dingin Maknyoss', 'cincau.jpg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `bukti_pembayaran` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id_role` int(3) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id_role`, `role`) VALUES
(1, 'Admin'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama`, `alamat`, `email`, `nohp`, `username`, `password`, `role`) VALUES
(1, 'Ayu Novita Ningsih', 'Tarutung', 'ayu.tobing30@yahoo.com', '082370003068', 'admin', 'admin', 1),
(4, 'Dwi', 'Balige', 'dwiputrias84@gmail.com', '082370284242', 'dwi', 'dwi', 2),
(5, 'jhon', 'balige', 'john@gmail.com', '123', 'jon', 'jon', 2),
(6, 'Fin', 'IT Del', 'john@gmail.com', '23456', 'FINN', '123', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `id_userFK` (`id_user`),
  ADD KEY `id_produkFK` (`id_produk`);

--
-- Indexes for table `makanan`
--
ALTER TABLE `makanan`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `id_kategoriFK` (`id_kategori`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`,`id_user`,`id_produk`),
  ADD KEY `id_user_FK` (`id_user`),
  ADD KEY `id_produk_FK` (`id_produk`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_roleFK` (`role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `makanan`
--
ALTER TABLE `makanan`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `id_produkFK` FOREIGN KEY (`id_produk`) REFERENCES `makanan` (`id_produk`),
  ADD CONSTRAINT `id_userFK` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Constraints for table `makanan`
--
ALTER TABLE `makanan`
  ADD CONSTRAINT `id_kategoriFK` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);

--
-- Constraints for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `id_produk_FK` FOREIGN KEY (`id_produk`) REFERENCES `makanan` (`id_produk`),
  ADD CONSTRAINT `id_user_FK` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `id_roleFK` FOREIGN KEY (`role`) REFERENCES `role` (`id_role`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
