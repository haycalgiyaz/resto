-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 09 Agu 2019 pada 20.30
-- Versi Server: 10.1.26-MariaDB
-- PHP Version: 7.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bebek`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `nama_admin` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `username`, `password`, `nama_admin`, `created_at`, `updated_at`) VALUES
(1, 'admin', '123456', 'Zulfa', '2019-04-04 20:43:57', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_detail_katagori`
--

CREATE TABLE `tb_detail_katagori` (
  `id_detail_katagori` int(11) NOT NULL,
  `id_katagori` int(11) NOT NULL,
  `id_elemen` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_detail_transaksi`
--

CREATE TABLE `tb_detail_transaksi` (
  `id_detail_transaksi` int(11) NOT NULL,
  `id_transaksi` int(11) DEFAULT NULL,
  `id_menu` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `request` text,
  `is_done` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_detail_transaksi`
--

INSERT INTO `tb_detail_transaksi` (`id_detail_transaksi`, `id_transaksi`, `id_menu`, `qty`, `total`, `request`, `is_done`) VALUES
(1, 2, 2, 2, 40000, '', NULL),
(2, 2, 3, 1, 34500, '', 0),
(3, 2, 4, 1, 8000, '', 0),
(4, 3, 2, 1, 20000, '', 2),
(5, 3, 3, 2, 69000, '', 2),
(6, 3, 4, 2, 16000, '', 2),
(7, 3, 5, 1, 8000, '', 2),
(8, 4, 2, 2, 40000, '', 2),
(9, 4, 4, 2, 16000, '', 2),
(10, 5, 2, 1, 20000, '', 5),
(11, 5, 6, 1, 15000, '', 5),
(12, 6, 2, 2, 40000, '', 5),
(13, 7, 2, 1, 20000, '', 2),
(14, 8, 2, 1, 20000, '', 2),
(15, 9, 2, 1, 20000, '', 2),
(16, 9, 4, 1, 8000, '', 2),
(17, 10, 2, 1, 20000, '', 2),
(18, 11, 3, 1, 34500, '', 1),
(19, 12, 4, 1, 8000, '', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_katagori`
--

CREATE TABLE `tb_katagori` (
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

CREATE TABLE `tb_meja` (
  `id_meja` int(11) NOT NULL,
  `nm_meja` varchar(255) NOT NULL,
  `total_serve` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `tb_menu` (
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_menu`
--

INSERT INTO `tb_menu` (`id_menu`, `nm_menu`, `harga`, `kategori`, `id_user`, `img_url`, `desc_menu`, `location`, `is_publish`, `created_at`, `updated_at`) VALUES
(2, 'Nasi Bakar 46', 20000, 1, 0, '19042019183543download.jpg', 'Nasi bakar adalah sebuah hidangan nasi yang proses memasaknya dengan beberapaa kombinasi dari direbus hingga di bakar , dari proses memasak ini lah nasi bakar , mempunyai citarasi tersendiri , dan rasanya pasti luar biasa. selain rasanya yang enak nasi bakar tidak mudah basi, dari proses di bakar ini menjadi tidak mudah basi.', 'dapur', 1, '2019-04-19 16:35:51', '2019-04-18 23:35:51'),
(3, 'Bebek Goreng Surabaya', 34500, 1, 0, '19042019181215Resep-Bebek-Goreng-Surabaya.jpg', 'Hidangan bebek merupakan salah satu hidangan khas Surabaya. Setiap pergi ke Surabaya, pasti tak ketinggalan para turis mampir di restoran yang menyediakan olahan bebek. Bukan tanpa alasan, daging bebek goreng yang disajikan di Surabaya memang terkenal nikmat. Tapi, daripada harus jauh-jauh ke Surabaya, anda bisa membuatnya sendiri di rumah. Sajian bebek goreng ini juga paling mantap disajikan dengan sambal. Bisa sambal terasi, sambal bawang, sambal hijau, maupun aneka sambal lainnya.', 'dapur', 1, '2019-04-19 16:35:58', '2019-04-18 23:35:58'),
(4, 'Es Dawet', 8000, 2, 0, '03062019061935Cara Bikin Cendol Yang Lembut Dari Tepung Beras.jpeg', 'Dawet hijau segar dengan manisnya gula jawa bercampur dengan gurihnya santan, adalah perpaduan cocok dikala cuaca panas', 'bar', 1, '2019-06-03 04:20:26', '2019-06-02 23:20:26'),
(5, 'Es Teh', 8000, 2, 0, '03062019062014121429_es-teh.jpg', 'Minuman dingin penyegar tenggorokan dikala cuaca panas', 'dapur', 1, '2019-06-02 23:20:14', '2019-06-02 23:20:14'),
(6, 'Kentang Stick', 15000, 3, 0, '03062019062109021248500_1440846143-header_chiantilvpa_com.jpg', 'Camilan renyah dan gurih, cocok dinikmati bersama minuman dingin nan menyegarkan', 'dapur', 1, '2019-06-02 23:21:09', '2019-06-02 23:21:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_waiters` int(11) NOT NULL,
  `id_meja` int(11) NOT NULL,
  `id_kasir` int(11) DEFAULT NULL,
  `sub_total` int(11) DEFAULT NULL,
  `service` int(11) DEFAULT NULL,
  `total_akhir` int(11) DEFAULT NULL,
  `total_real` int(11) DEFAULT NULL,
  `bayar` int(11) DEFAULT NULL,
  `kembalian` int(11) DEFAULT NULL,
  `payment_method` varchar(11) DEFAULT NULL,
  `is_print` int(11) DEFAULT NULL,
  `kitchen_closed` int(11) DEFAULT NULL,
  `bar_closed` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id_transaksi`, `id_waiters`, `id_meja`, `id_kasir`, `sub_total`, `service`, `total_akhir`, `total_real`, `bayar`, `kembalian`, `payment_method`, `is_print`, `kitchen_closed`, `bar_closed`, `status`, `created_at`, `updated_at`) VALUES
(3, 1, 4, 2, 113000, 32700, 145700, 145700, 200000, 54300, 'cash', NULL, 1, 1, 1, '2019-08-09 18:04:30', '0000-00-00 00:00:00'),
(4, 4, 3, NULL, 56000, 9600, 65600, NULL, NULL, NULL, NULL, NULL, 1, 1, NULL, '2019-06-19 15:13:55', '0000-00-00 00:00:00'),
(5, 4, 1, NULL, 35000, 5500, 40500, NULL, NULL, NULL, NULL, NULL, 1, 1, NULL, '2019-06-19 15:13:58', '0000-00-00 00:00:00'),
(6, 4, 4, NULL, 40000, 4000, 44000, NULL, NULL, NULL, NULL, NULL, 1, 1, NULL, '2019-06-19 15:14:01', '0000-00-00 00:00:00'),
(7, 4, 1, NULL, 20000, 2000, 22000, NULL, NULL, NULL, NULL, NULL, 1, 1, NULL, '2019-08-09 16:16:58', '0000-00-00 00:00:00'),
(8, 5, 3, NULL, 20000, 2000, 22000, NULL, NULL, NULL, NULL, NULL, 1, 1, NULL, '2019-08-09 16:32:10', '0000-00-00 00:00:00'),
(9, 6, 3, NULL, 28000, 4800, 32800, NULL, NULL, NULL, NULL, NULL, 1, 1, NULL, '2019-08-09 16:17:15', '0000-00-00 00:00:00'),
(10, 6, 1, NULL, 20000, 2000, 22000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-08-09 16:27:36', '0000-00-00 00:00:00'),
(11, 6, 3, NULL, 34500, 3450, 37950, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-08-09 16:28:12', '0000-00-00 00:00:00'),
(12, 6, 3, NULL, 8000, 800, 8800, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-08-09 16:48:09', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nm_user`, `username`, `password`, `jk_user`, `no_tlp`, `almt_user`, `nm_departemen`, `img_url`, `role`, `created_at`, `updated_at`) VALUES
(2, 'Tania', 'tania', '5ebe2294ecd0e0f08eab7690d2a6ee69', 'L', '085865150162', 'fatmawati', 'kasir', '', 3, '2019-07-16 19:20:27', '2019-07-16 19:20:27'),
(3, 'Zulfa', 'Zull', 'c93ccd78b2076528346216b3b2f701e6', 'L', '085865150162', 'pondok petir', 'Barista', '', 1, '2019-07-17 11:58:14', '2019-05-28 20:46:10'),
(4, 'NafiUnyu', 'nafi', 'e9f8f0b46cfb70b154cf5741841d3453', 'L', '', '', 'Dapur', '', 5, '2019-06-03 01:07:25', '2019-06-03 01:07:25'),
(5, 'NafiUnyu', 'zulfah', '5ebe2294ecd0e0f08eab7690d2a6ee69', 'L', '09093482349238', 'depok', '', '', 4, '2019-06-18 21:47:24', '2019-06-18 21:47:24'),
(6, 'ilham', 'ilham_waiters', '5ebe2294ecd0e0f08eab7690d2a6ee69', 'L', '', '', 'Waitres', '', 4, '2019-08-05 21:00:14', '2019-08-05 21:00:14');

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
-- Indexes for table `tb_detail_transaksi`
--
ALTER TABLE `tb_detail_transaksi`
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
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_detail_katagori`
--
ALTER TABLE `tb_detail_katagori`
  MODIFY `id_detail_katagori` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_detail_transaksi`
--
ALTER TABLE `tb_detail_transaksi`
  MODIFY `id_detail_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tb_katagori`
--
ALTER TABLE `tb_katagori`
  MODIFY `id_katagori` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_meja`
--
ALTER TABLE `tb_meja`
  MODIFY `id_meja` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_menu`
--
ALTER TABLE `tb_menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
