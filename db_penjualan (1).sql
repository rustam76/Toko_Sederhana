-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2021 at 08:24 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_penjualan`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_admin`
--

CREATE TABLE `t_admin` (
  `id_admin` int(11) NOT NULL,
  `u_admin` text NOT NULL,
  `p_admin` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_admin`
--

INSERT INTO `t_admin` (`id_admin`, `u_admin`, `p_admin`) VALUES
(1, 'rustam', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `t_checkout`
--

CREATE TABLE `t_checkout` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `alamat` text NOT NULL,
  `total` int(11) NOT NULL,
  `tgl` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_checkout`
--

INSERT INTO `t_checkout` (`id`, `user`, `no_hp`, `alamat`, `total`, `tgl`) VALUES
(6, 'rustam', '086554432121', 'Tokyo', 980500, '21-10-2021');

-- --------------------------------------------------------

--
-- Table structure for table `t_kategori`
--

CREATE TABLE `t_kategori` (
  `id_kat` int(11) NOT NULL,
  `nm_kat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_kategori`
--

INSERT INTO `t_kategori` (`id_kat`, `nm_kat`) VALUES
(3, 'Minuman'),
(4, 'Baju'),
(5, 'Celana'),
(6, 'Makanan');

-- --------------------------------------------------------

--
-- Table structure for table `t_keranjang`
--

CREATE TABLE `t_keranjang` (
  `id_k` int(11) NOT NULL,
  `user` text NOT NULL,
  `nm_b` text NOT NULL,
  `harga` int(11) NOT NULL,
  `qty` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_keranjang`
--

INSERT INTO `t_keranjang` (`id_k`, `user`, `nm_b`, `harga`, `qty`) VALUES
(3, 'rustam', 'jam tangan', 2000, '1'),
(14, 'rustam', 'kiki', 3000, '1');

-- --------------------------------------------------------

--
-- Table structure for table `t_pembeli`
--

CREATE TABLE `t_pembeli` (
  `id` int(11) NOT NULL,
  `nm_pembeli` text NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_pembeli`
--

INSERT INTO `t_pembeli` (`id`, `nm_pembeli`, `alamat`, `no_hp`) VALUES
(5, 'majidur', 'Seoul rere', '085934643864'),
(6, 'rustam', 'Seoul rere', '086554432121'),
(8, 'majid', 'jl.Tokyo', '086554432121');

-- --------------------------------------------------------

--
-- Table structure for table `t_produk`
--

CREATE TABLE `t_produk` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `harga` int(10) NOT NULL,
  `kategori` text NOT NULL,
  `jumlah` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_produk`
--

INSERT INTO `t_produk` (`id`, `nama`, `harga`, `kategori`, `jumlah`, `deskripsi`, `gambar`) VALUES
(1, 'jam tangan', 250, 'Makanan', 783, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam ratione ipsa sunt veritatis nisi aliquam, odio deleniti quaerat asperiores error maxime debitis obcaecati, blanditiis saepe eum beatae facilis porro esse.Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam ratione ipsa sunt veritatis nisi aliquam, odio deleniti quaerat asperiores error maxime debitis obcaecati, blanditiis saepe eum beatae facilis porro esse.', '1327055124_images (1).jpg'),
(10, 'Tomo', 25000, 'Makanan', 2, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam ratione ipsa sunt veritatis nisi aliquam, odio deleniti quaerat asperiores error maxime debitis obcaecati, blanditiis saepe eum beatae facilis porro esse.Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam ratione ipsa sunt veritatis nisi aliquam, odio deleniti quaerat asperiores error maxime debitis obcaecati, blanditiis saepe eum beatae facilis porro esse.', '1380121731_images (2).jpg'),
(11, 'Tomo', 25000, 'Makanan', 2, '', '217041153_download.jpg'),
(14, 'Shotaro', 300000, 'Makanan', 1, '', '1873015793_download.jpg'),
(15, 'kiki', 25000, 'Makanan', 2, '', '554600815_download (1).jpg'),
(16, 'Tomo Yamashita', 25000, 'Makanan', 2, '', '1474280053_images.jpg'),
(17, 'Golda', 5000, 'Minuman', 20, '', '290792466_images (2).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

CREATE TABLE `t_user` (
  `id_user` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `alamat` text NOT NULL,
  `tlp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_user`
--

INSERT INTO `t_user` (`id_user`, `username`, `password`, `alamat`, `tlp`) VALUES
(1, 'rustam', '21232f297a57a5a743894a0e4a801fc3', 'kolaka timur', '085242850576'),
(2, 'admin', '12345', 'ass', '085242850576'),
(3, 'rustam', '12345', 'Tokyo', '086554432121');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_admin`
--
ALTER TABLE `t_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `t_checkout`
--
ALTER TABLE `t_checkout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_kategori`
--
ALTER TABLE `t_kategori`
  ADD PRIMARY KEY (`id_kat`);

--
-- Indexes for table `t_keranjang`
--
ALTER TABLE `t_keranjang`
  ADD PRIMARY KEY (`id_k`);

--
-- Indexes for table `t_pembeli`
--
ALTER TABLE `t_pembeli`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_produk`
--
ALTER TABLE `t_produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_admin`
--
ALTER TABLE `t_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t_checkout`
--
ALTER TABLE `t_checkout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `t_kategori`
--
ALTER TABLE `t_kategori`
  MODIFY `id_kat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `t_keranjang`
--
ALTER TABLE `t_keranjang`
  MODIFY `id_k` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `t_pembeli`
--
ALTER TABLE `t_pembeli`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `t_produk`
--
ALTER TABLE `t_produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `t_user`
--
ALTER TABLE `t_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
