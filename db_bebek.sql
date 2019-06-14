-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 24 Apr 2019 pada 15.44
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_bebek`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE IF NOT EXISTS `tb_admin` (
`id_admin` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `nama_admin` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `username`, `password`, `nama_admin`, `created_at`, `updated_at`) VALUES
(1, 'admin', '123456', 'Zulfa', '2019-04-04 20:43:57', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_detail_katagori`
--

CREATE TABLE IF NOT EXISTS `tb_detail_katagori` (
`id_detail_katagori` int(11) NOT NULL,
  `id_katagori` int(11) NOT NULL,
  `id_elemen` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_detail_traksaksi`
--

CREATE TABLE IF NOT EXISTS `tb_detail_traksaksi` (
`id_detail_transaksi` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `request` text NOT NULL,
  `is_done` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_katagori`
--

CREATE TABLE IF NOT EXISTS `tb_katagori` (
`id_katagori` int(11) NOT NULL,
  `nm_katagori` varchar(255) NOT NULL,
  `img_url` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_meja`
--

CREATE TABLE IF NOT EXISTS `tb_meja` (
`id_meja` int(11) NOT NULL,
  `nm_meja` varchar(255) NOT NULL,
  `total_serve` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_meja`
--

INSERT INTO `tb_meja` (`id_meja`, `nm_meja`, `total_serve`, `created_at`, `updated_at`) VALUES
(1, 'Meja 27227', 0, '2019-04-09 16:25:52', '2019-04-08 23:25:52'),
(3, 'Meja 2', NULL, '2019-03-12 20:18:35', '2019-03-12 20:18:35'),
(4, 'Meja 3', NULL, '2019-03-12 20:22:54', '2019-03-12 20:22:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_menu`
--

CREATE TABLE IF NOT EXISTS `tb_menu` (
`id_menu` int(11) NOT NULL,
  `nm_menu` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `kategori` int(2) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `img_url` varchar(200) NOT NULL,
  `desc_menu` text NOT NULL,
  `location` varchar(255) NOT NULL,
  `is_publish` int(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_menu`
--

INSERT INTO `tb_menu` (`id_menu`, `nm_menu`, `harga`, `kategori`, `id_user`, `img_url`, `desc_menu`, `location`, `is_publish`, `created_at`, `updated_at`) VALUES
(2, 'Nasi Bakar 46', 20000, 1, 0, '19042019183543download.jpg', 'Nasi bakar adalah sebuah hidangan nasi yang proses memasaknya dengan beberapaa kombinasi dari direbus hingga di bakar , dari proses memasak ini lah nasi bakar , mempunyai citarasi tersendiri , dan rasanya pasti luar biasa. selain rasanya yang enak nasi bakar tidak mudah basi, dari proses di bakar ini menjadi tidak mudah basi.', 'dapur', 1, '2019-04-19 16:35:51', '2019-04-18 23:35:51'),
(3, 'Bebek Goreng Surabaya', 34500, 1, 0, '19042019181215Resep-Bebek-Goreng-Surabaya.jpg', 'Hidangan bebek merupakan salah satu hidangan khas Surabaya. Setiap pergi ke Surabaya, pasti tak ketinggalan para turis mampir di restoran yang menyediakan olahan bebek. Bukan tanpa alasan, daging bebek goreng yang disajikan di Surabaya memang terkenal nikmat. Tapi, daripada harus jauh-jauh ke Surabaya, anda bisa membuatnya sendiri di rumah. Sajian bebek goreng ini juga paling mantap disajikan dengan sambal. Bisa sambal terasi, sambal bawang, sambal hijau, maupun aneka sambal lainnya.', 'dapur', 1, '2019-04-19 16:35:58', '2019-04-18 23:35:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_transaksi`
--

CREATE TABLE IF NOT EXISTS `tb_transaksi` (
`id_transaksi` int(11) NOT NULL,
  `id_waiters` int(11) NOT NULL,
  `id_meja` int(11) NOT NULL,
  `id_kasir` int(11) NOT NULL,
  `sub_total` int(11) NOT NULL,
  `service` int(11) NOT NULL,
  `total_akhir` int(11) NOT NULL,
  `is_debit` int(11) NOT NULL,
  `kitchen_closed` int(11) NOT NULL,
  `bar_closed` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
`id_user` int(11) NOT NULL,
  `nm_user` varchar(255) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `jk_user` varchar(255) DEFAULT NULL,
  `no_tlp` varchar(255) DEFAULT NULL,
  `almt_user` varchar(255) DEFAULT NULL,
  `nm_departemen` varchar(255) DEFAULT NULL,
  `img_url` text,
  `role` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nm_user`, `username`, `password`, `jk_user`, `no_tlp`, `almt_user`, `nm_departemen`, `img_url`, `role`, `created_at`, `updated_at`) VALUES
(2, 'Tania', 'tania', '18181996', 'P', '085865150162', 'fatmawati', 'kasir', '', 2, '2019-04-14 05:48:04', '2019-04-14 05:48:04'),
(3, 'Zulfa', 'Zull', 'c790a0d651e7bf67bb11c8d2f26be84f', 'L', '085865150162', 'pondok petir', 'Barista', '', 1, '2019-04-14 05:09:37', '2019-04-14 05:09:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
 ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_detail_katagori`
--
ALTER TABLE `tb_detail_katagori`
 ADD PRIMARY KEY (`id_detail_katagori`);

--
-- Indexes for table `tb_detail_traksaksi`
--
ALTER TABLE `tb_detail_traksaksi`
 ADD PRIMARY KEY (`id_detail_transaksi`);

--
-- Indexes for table `tb_katagori`
--
ALTER TABLE `tb_katagori`
 ADD PRIMARY KEY (`id_katagori`);

--
-- Indexes for table `tb_meja`
--
ALTER TABLE `tb_meja`
 ADD PRIMARY KEY (`id_meja`);

--
-- Indexes for table `tb_menu`
--
ALTER TABLE `tb_menu`
 ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
 ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
 ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_detail_katagori`
--
ALTER TABLE `tb_detail_katagori`
MODIFY `id_detail_katagori` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_detail_traksaksi`
--
ALTER TABLE `tb_detail_traksaksi`
MODIFY `id_detail_transaksi` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_katagori`
--
ALTER TABLE `tb_katagori`
MODIFY `id_katagori` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_meja`
--
ALTER TABLE `tb_meja`
MODIFY `id_meja` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_menu`
--
ALTER TABLE `tb_menu`
MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
