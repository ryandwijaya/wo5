-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2019 at 03:18 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_wo5`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_banner`
--

CREATE TABLE `tb_banner` (
  `banner_id` int(11) NOT NULL,
  `banner_foto` text NOT NULL,
  `banner_judul` varchar(50) NOT NULL,
  `banner_deskripsi` varchar(255) NOT NULL,
  `banner_date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_banner`
--

INSERT INTO `tb_banner` (`banner_id`, `banner_foto`, `banner_judul`, `banner_deskripsi`, `banner_date_created`) VALUES
(1, 'banner1.jpg', 'ini judul banner', 'ini deskripsi banner nya', '2019-08-04 20:45:06'),
(2, 'banner2.jpg', 'Bugatti Veyron', 'ini Bugatti Veyron', '2019-08-04 21:09:28'),
(3, 'Digtive.png', 'Digtive Developer', 'Wikidevia adalah komunitas yang menggabungkan berbagai individu yang memiliki passion dibidang masing-masing namun memiliki tujuan yang sama yaitu menyelesaikan permasalahan dan mewujudkan mimpinya menggunakan digital seiring berkembangnya dunia digital', '2019-08-05 16:24:11'),
(4, 'banner3.jpg', 'Mantap Bro', 'Enumerating objects: 27, done.\r\nCounting objects: 100% (27/27), done.\r\nDelta compression using up to 4 threads\r\nCompressing objects: 100% (12/12), done.\r\nWriting objects: 100% (14/14), 1.39 KiB | 284.00 KiB/s, done.\r\nTotal 14 (delta 9), reused 0 (delta 0)', '2019-08-05 16:27:27');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `kategori_id` int(11) NOT NULL,
  `kategori_nama` varchar(50) NOT NULL,
  `kategori_date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`kategori_id`, `kategori_nama`, `kategori_date_created`) VALUES
(1, 'Paket', '2019-08-02 14:57:08'),
(3, 'Baju', '2019-08-03 14:20:45'),
(4, 'Pelaminan', '2019-08-04 14:52:35'),
(6, 'MakeUp', '2019-08-21 08:29:21');

-- --------------------------------------------------------

--
-- Table structure for table `tb_paket`
--

CREATE TABLE `tb_paket` (
  `paket_id` int(11) NOT NULL,
  `paket_nama` text NOT NULL,
  `paket_harga` bigint(20) NOT NULL,
  `paket_foto` text NOT NULL,
  `paket_deskripsi` text NOT NULL,
  `paket_dari` int(11) NOT NULL,
  `paket_date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_paket`
--

INSERT INTO `tb_paket` (`paket_id`, `paket_nama`, `paket_harga`, `paket_foto`, `paket_deskripsi`, `paket_dari`, `paket_date_created`) VALUES
(1, 'Paket Gedung', 10000000, 'Scotty-McCreery-Wedding-LEAD-1500x12001.jpg', '- Tenda 2x3 \r\n- Papan 10 bh \r\n- Lampu pijar 3bh \r\n- Meterial 4bh \r\n- Organ Tunggal', 5, '2019-08-22 15:40:20'),
(2, 'Paket Gedung', 9000000, 'w2.jpg', '- Tenda 2x3\r\n- Papan 10 bh\r\n- Lampu pijar 3bh\r\n- Meterial 4bh\r\n- Organ Tunggal\r\n- Pafilion', 5, '2019-08-22 15:53:08'),
(3, 'Paket Wedding 1', 5000000, 'w1.jpg', '- Paket Transportasi\r\n- Karpet 2 bh\r\n- dll', 5, '2019-08-22 20:43:25'),
(4, 'Paket Wedding', 12000000, 'moisture2.jpeg', '- paket wedding pelaminan\r\n- kipas besar 5bh\r\n- lampu terang 10 bh\r\n- tenda mewah\r\n- catering\r\n- transportasi\r\n- gedung 2hari\r\n- organ tunggal', 2, '2019-08-23 07:35:02'),
(5, 'Paket Delux', 18000000, 'Scotty-McCreery-Wedding-LEAD-1500x1200.jpg', '-Tenda 4x5\r\n-1 lembayung\r\n-3 Blower\r\n-3 Baju Pengantin\r\n-2 Make Up Pengantin \r\n', 4, '2019-08-23 21:26:39'),
(6, 'Paket Wedding Sederhana', 4000000, 'drawkit.jpg', '- Makan sederhana\r\n- minum sederhana\r\n- panggung sederhana\r\n- organ sedeerhana\r\n- tenda sederhana \r\n- serba sederhanalah pokoknya', 5, '2019-08-25 08:30:45'),
(7, 'Paket Royal Plus', 90000000, 'asas.jpg', '- Anda bebas memesan apa aja', 5, '2019-08-25 08:31:20');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelanggan`
--

CREATE TABLE `tb_pelanggan` (
  `pelanggan_id` int(11) NOT NULL,
  `pelanggan_username` text NOT NULL,
  `pelanggan_email` text NOT NULL,
  `pelanggan_password` text NOT NULL,
  `pelanggan_nama` text NOT NULL,
  `pelanggan_nope` text NOT NULL,
  `pelanggan_alamat` text NOT NULL,
  `pelanggan_jk` enum('pria','wanita') NOT NULL,
  `pelanggan_date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pemaketan`
--

CREATE TABLE `tb_pemaketan` (
  `pemaketan_id` int(11) NOT NULL,
  `pemaketan_paket` int(11) NOT NULL,
  `pemaketan_produk` int(11) NOT NULL,
  `pemaketan_date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembayaran`
--

CREATE TABLE `tb_pembayaran` (
  `pembayaran_id` int(11) NOT NULL,
  `pembayaran_pembelian` int(11) NOT NULL,
  `pembayaran_nama` text NOT NULL,
  `pembayaran_bank` text NOT NULL,
  `pembayaran_jumlah` bigint(20) NOT NULL,
  `pembayaran_tgl` date NOT NULL,
  `pembayaran_bukti` text NOT NULL,
  `pembayaran_status` enum('dikonfirmasi','pending') NOT NULL DEFAULT 'pending',
  `pembayaran_date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembelian`
--

CREATE TABLE `tb_pembelian` (
  `pembelian_id` int(11) NOT NULL,
  `pembelian_paket` int(11) NOT NULL,
  `pembelian_tgl` datetime NOT NULL DEFAULT current_timestamp(),
  `pembelian_tgl_acara` date NOT NULL,
  `pembelian_status` enum('sbayar','bbayar') NOT NULL,
  `pembelian_pelanggan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_petugas`
--

CREATE TABLE `tb_petugas` (
  `petugas_id` int(11) NOT NULL,
  `petugas_nama` text NOT NULL,
  `petugas_nope` text NOT NULL,
  `petugas_vendor` int(11) NOT NULL,
  `petugas_date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_petugas`
--

INSERT INTO `tb_petugas` (`petugas_id`, `petugas_nama`, `petugas_nope`, `petugas_vendor`, `petugas_date_created`) VALUES
(1, 'Bagus Sujatmiko', '082929910101', 1, '2019-08-20 10:29:48'),
(2, 'Rizky Asyari', '082299102101', 1, '2019-08-20 22:10:47'),
(4, 'Andre Vari Antoni', '082900190011', 1, '2019-08-21 06:44:00'),
(5, 'Manda Sulianto', '0822019102222', 2, '2019-08-21 06:44:20'),
(6, 'Abdul Haris', '082191012299', 2, '2019-08-21 06:46:14'),
(7, 'Marzuki Mantoha', '08129991012', 1, '2019-08-22 19:45:37'),
(8, 'Arif Evan', '0812812271212', 2, '2019-08-23 08:30:10'),
(9, 'selvia ningsih', '081224656777', 4, '2019-08-23 21:21:53'),
(10, 'listiana', '09397487767', 4, '2019-08-23 21:22:27'),
(11, 'Bang Jay', '082928898192', 5, '2019-08-29 07:54:30'),
(12, 'Bunga', '08219288191', 5, '2019-08-29 07:54:41'),
(13, 'Marjan', '0291181211', 5, '2019-08-29 07:54:52'),
(14, 'Jaya', '0822998291001', 5, '2019-08-29 07:55:14');

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk`
--

CREATE TABLE `tb_produk` (
  `produk_id` int(11) NOT NULL,
  `produk_nama` text NOT NULL,
  `produk_deskripsi` text NOT NULL,
  `produk_harga` bigint(11) NOT NULL,
  `produk_kategori` int(11) NOT NULL,
  `produk_foto` text NOT NULL,
  `produk_jenis` enum('Paket','Custom') NOT NULL,
  `produk_from` int(11) NOT NULL,
  `produk_date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_produk`
--

INSERT INTO `tb_produk` (`produk_id`, `produk_nama`, `produk_deskripsi`, `produk_harga`, `produk_kategori`, `produk_foto`, `produk_jenis`, `produk_from`, `produk_date_created`) VALUES
(1, 'Sepasang Baju Wedding', 'Sepasang Baju Wedding', 1500000, 3, '1113.jpg', 'Paket', 0, '2019-08-20 14:46:14'),
(2, 'Pelaminan 2 Kursi 1 Meja', 'Pelaminan dengan dilengkapi 2 kipas angin besar', 100000, 4, '1121.jpg', 'Custom', 0, '2019-08-20 15:01:11'),
(3, 'Paket Platinum', '- Kursi 2\r\n- Meja 2\r\n- Kipas 2\r\n- Keyboard 1', 4000000, 1, '4.PNG', 'Paket', 0, '2019-08-20 15:06:00'),
(4, 'Pelaminan Cantik ', 'Pelaminan bertemakan putih seperti cahaya bagaikan langit disore hari berwarna biru sebiru hatiku menantikabar yang aku tunggu peluk dan cium hangat nya untuk muuu', 3200000, 4, 'white.jpg', 'Paket', 0, '2019-08-20 17:01:57'),
(5, 'Baju Wedding Muslimah', 'Baju Wedding muslimah cocok untuk suami istri bukan suami suami. ^_^', 1200000, 3, 'wedding.jpg', 'Paket', 0, '2019-08-20 17:05:35'),
(6, 'Baju Pengantin Batik', 'Pengantin Batik Modern', 3000000, 3, 'bati.jpg', 'Paket', 0, '2019-08-20 17:25:32'),
(7, 'Natural Make Up', 'Makeup natural dengan memakai ini seperti tanpa makeup', 800000, 6, 'makeup-products.jpg', 'Paket', 0, '2019-08-21 08:31:11');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tugas`
--

CREATE TABLE `tb_tugas` (
  `tugas_id` int(11) NOT NULL,
  `tugas_petugas` int(11) NOT NULL,
  `tugas_pembelian` int(11) NOT NULL,
  `tugas_date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `user_id` int(11) NOT NULL,
  `user_username` text NOT NULL,
  `user_password` text NOT NULL,
  `user_level` text NOT NULL,
  `user_nama` text NOT NULL,
  `user_date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`user_id`, `user_username`, `user_password`, `user_level`, `user_nama`, `user_date_created`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'admin', '2019-08-20 17:20:37');

-- --------------------------------------------------------

--
-- Table structure for table `tb_vendor`
--

CREATE TABLE `tb_vendor` (
  `vendor_id` int(11) NOT NULL,
  `vendor_username` varchar(255) NOT NULL,
  `vendor_nama` text NOT NULL,
  `vendor_alamat` text NOT NULL,
  `vendor_password` text NOT NULL,
  `vendor_nope` text NOT NULL,
  `vendor_date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_vendor`
--

INSERT INTO `tb_vendor` (`vendor_id`, `vendor_username`, `vendor_nama`, `vendor_alamat`, `vendor_password`, `vendor_nope`, `vendor_date_created`) VALUES
(2, 'jaya', 'Jaya Wedding', 'JL Suka MAju', '202cb962ac59075b964b07152d234b70', '0822019102222', '2019-08-23 07:18:55'),
(3, 'Arta Nintia', 'Ita Wedding Organizer', 'Jl.Rambutan', '827ccb0eea8a706c4c34a16891f84e7b', '082387225413', '2019-08-23 20:41:50'),
(4, 'Inke Junno', 'Putri Tanjung Pesta', 'Jl.Taman Karya', '202cb962ac59075b964b07152d234b70', '081378502788', '2019-08-23 20:45:25'),
(5, 'Ani', 'Ani Wedding Organizer', 'Jl.Putri Tujuh Blok K 15', '827ccb0eea8a706c4c34a16891f84e7b', '08225452346', '2019-08-23 20:46:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_banner`
--
ALTER TABLE `tb_banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `tb_paket`
--
ALTER TABLE `tb_paket`
  ADD PRIMARY KEY (`paket_id`);

--
-- Indexes for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD PRIMARY KEY (`pelanggan_id`);

--
-- Indexes for table `tb_pemaketan`
--
ALTER TABLE `tb_pemaketan`
  ADD PRIMARY KEY (`pemaketan_id`);

--
-- Indexes for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD PRIMARY KEY (`pembayaran_id`);

--
-- Indexes for table `tb_pembelian`
--
ALTER TABLE `tb_pembelian`
  ADD PRIMARY KEY (`pembelian_id`);

--
-- Indexes for table `tb_petugas`
--
ALTER TABLE `tb_petugas`
  ADD PRIMARY KEY (`petugas_id`);

--
-- Indexes for table `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`produk_id`);

--
-- Indexes for table `tb_tugas`
--
ALTER TABLE `tb_tugas`
  ADD PRIMARY KEY (`tugas_id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tb_vendor`
--
ALTER TABLE `tb_vendor`
  ADD PRIMARY KEY (`vendor_id`),
  ADD UNIQUE KEY `vendor_username` (`vendor_username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_banner`
--
ALTER TABLE `tb_banner`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_paket`
--
ALTER TABLE `tb_paket`
  MODIFY `paket_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  MODIFY `pelanggan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_pemaketan`
--
ALTER TABLE `tb_pemaketan`
  MODIFY `pemaketan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  MODIFY `pembayaran_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_pembelian`
--
ALTER TABLE `tb_pembelian`
  MODIFY `pembelian_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_petugas`
--
ALTER TABLE `tb_petugas`
  MODIFY `petugas_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `produk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_tugas`
--
ALTER TABLE `tb_tugas`
  MODIFY `tugas_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_vendor`
--
ALTER TABLE `tb_vendor`
  MODIFY `vendor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
