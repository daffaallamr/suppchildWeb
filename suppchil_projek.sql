-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2021 at 12:00 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `suppchil_projek`
--

-- --------------------------------------------------------

--
-- Table structure for table `anak`
--

CREATE TABLE `anak` (
  `id` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `nik` bigint(20) NOT NULL,
  `tempat_lahir` varchar(15) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` varchar(5) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `wali` varchar(150) NOT NULL,
  `kesehatan` int(1) DEFAULT NULL,
  `pendidikan` int(1) DEFAULT NULL,
  `ekonomi` int(1) DEFAULT NULL,
  `daerah` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anak`
--

INSERT INTO `anak` (`id`, `nama`, `nik`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `agama`, `alamat`, `wali`, `kesehatan`, `pendidikan`, `ekonomi`, `daerah`) VALUES
(1, 'Ananda Agustinus', 3571222244448888, 'Gresik', '2002-12-06', 'P', 'Islam', 'Jalan Raya Gresik No. 42B Gresik', 'Joko Susilo', 5, 3, 5, 'Gresik'),
(2, 'Mikel Luxuri', 123666888999, 'Lamongan', '2002-05-06', 'P', 'Islam', 'Ketintang Raya Barat No. 55C Kota Lamongan', 'Indah Dwi', 1, 2, 1, 'Lamongan'),
(11, 'Baru saja', 1805028999, 'Kediri', '2002-09-08', '', 'Islam', 'Ngadisimo GG 1 Buntu No. 42C', 'Adadeh Tri', 4, 5, 4, 'Kediri'),
(12, 'Anak Gresik', 18091285091285, 'Gresik', '2002-02-02', '', 'Islam', 'Gresik Raya', 'Gresik 123', 5, 5, 4, 'Gresik'),
(13, 'Anak Lamongan', 888666777, 'Lamongan', '2002-04-04', '', 'Islam', 'Lamongan Raya SLur', 'Lamongan 123', 4, 5, 4, 'Lamongan'),
(14, 'Lamongan Boy', 182718927519, 'Lamongan', '2002-09-09', '', 'Kristen', 'Lamongan Raya Baru', 'Lamongan Parent', 4, 5, 4, 'Lamongan'),
(15, 'Anak Gresik 2', 124124124, 'asdsad', '2002-09-09', '', 'asd', 'asd', 'asd', 4, 5, 4, 'Gresik'),
(16, 'sapa tuh', 124124, 'asd', '2002-09-09', '', 'asd', 'asd', 'asd', 1, 5, 4, 'Gresik'),
(17, 'w0w123	', 124124, 'asdsad', '2002-09-09', '', 'asd', 'asd', 'asd', 2, 5, 4, 'Gresik'),
(18, 'Daffa Allam Renanda ', 858585853558, 'Kediri ', '2002-04-04', '', 'Islam ', 'Surabaya ', 'Asdasd', 3, 5, 4, 'Gresik');

-- --------------------------------------------------------

--
-- Table structure for table `kasus`
--

CREATE TABLE `kasus` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `tempat` varchar(200) NOT NULL,
  `detail` varchar(500) NOT NULL,
  `status` varchar(150) DEFAULT NULL,
  `daerah` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kasus`
--

INSERT INTO `kasus` (`id`, `nama`, `tempat`, `detail`, `status`, `daerah`) VALUES
(1, 'Agustinus213', 'Gresik Kecamatan blabalbal', 'Pelecehan yang dilakukan oleh bapak...', 'Selesai', 'Gresik'),
(2, 'Asd111', 'Gresik Kecamatan blabalbal', 'Begini begitu lah', 'Proses', 'Gresik'),
(3, 'idgidhish', 'msvksvks', 'sncjsvjvs', 'Proses', 'Lamongan');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `pengaju` varchar(50) NOT NULL,
  `file_ajuan` varchar(150) NOT NULL,
  `status` varchar(150) DEFAULT NULL,
  `file_laporan` varchar(200) DEFAULT NULL,
  `foto_laporan` varchar(200) DEFAULT NULL,
  `lokasi` varchar(200) NOT NULL,
  `tgl_upload` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id`, `nama`, `pengaju`, `file_ajuan`, `status`, `file_laporan`, `foto_laporan`, `lokasi`, `tgl_upload`) VALUES
(1, 'Asd', 'Gresik', 'PEMBUATAN FILE PDF_FNH_tamim.pdf', 'diterima', 'The ITIL V3 Factsheet Benchmark Guide_ An Award-Winning ITIL Trainers Tips On Achieving ITIL V3 And ITIL Foundation Certification For ITIL Service Management, Second Edition ( PDFDrive ).pdf', 'e960ff3b-ca38-489e-bf29-04935e32310b419952448.jpg', 'Kecamatan Gayungan', '0000-00-00'),
(17, 'Diterima 1', 'Gresik', 'PEMBUATAN FILE PDF_FNH_tamim.pdf', 'diterima', 'Child-Rights-Programming-Indo.pdf', 'a54b1318-25bb-438c-bdcd-21c16938abb21430013332.jpg', 'Kecamatan Gayungan, 60232, Indonesia', '0000-00-00'),
(18, 'Bersih Desa', 'Gresik', 'PEMBUATAN FILE PDF_FNH_tamim.pdf', 'ditolak', NULL, NULL, '', '0000-00-00'),
(20, 'diterima 2', 'Gresik', 'Gekkou Bahasa Indonesia.pdf', 'diterima', NULL, NULL, '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_test`
--

CREATE TABLE `tb_test` (
  `id` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_test`
--

INSERT INTO `tb_test` (`id`, `nama`) VALUES
(1, 'Anjing'),
(3, 'Bangsat'),
(4, 'Bangsat'),
(5, 'Bangsat'),
(6, 'Cynn'),
(7, 'Anjing Cynn');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `daerahuser` varchar(159) NOT NULL,
  `level` varchar(50) NOT NULL,
  `role_id` int(11) NOT NULL,
  `active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`, `daerahuser`, `level`, `role_id`, `active`) VALUES
(1, 'pusat', 'pusat', 'Staff Pusat', 'Pusat', 'pusat', 2, 1),
(2, 'daerahgresik', 'gresik', 'Staff Daerah Gresik', 'Gresik', 'daerah', 0, 0),
(3, 'daerahbangkalan', 'bangkalan', 'Staff Daerah Bangkalan', 'Bangkalan', 'daerah', 0, 0),
(4, 'daerahmojokerto', 'mojokerto', 'Staff Daerah Mojokerto', 'Mojokerto', 'daerah', 0, 0),
(5, 'daerahsurabaya', 'surabaya', 'Staff Daerah Surabaya', 'Surabaya', 'daerah', 0, 0),
(6, 'daerahsidoarjo', 'sidoarjo', 'Staff Daerah Sidoarjo', 'Sidoarjo', 'daerah', 0, 0),
(7, 'Lamongan', 'lamongan', 'Staff Daerah Lamongan', 'Lamongan', 'daerah', 0, 0),
(21, 'admin', 'admin', 'admin', 'bebas', 'admin', 1, 1),
(30, 'siapa', 'siapa', 'siapa aku', 'dimana aku', 'pusat', 2, 1),
(32, 'coba', 'obito', 'coba', 'Surabaya', 'pusat', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'Staff Pusat');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anak`
--
ALTER TABLE `anak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kasus`
--
ALTER TABLE `kasus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_test`
--
ALTER TABLE `tb_test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anak`
--
ALTER TABLE `anak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `kasus`
--
ALTER TABLE `kasus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tb_test`
--
ALTER TABLE `tb_test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
