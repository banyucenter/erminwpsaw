-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 24, 2020 at 05:13 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.3.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_wp_saw`
--

-- --------------------------------------------------------

--
-- Table structure for table `alternatif`
--

CREATE TABLE `alternatif` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `C1` int(11) DEFAULT NULL,
  `C2` int(11) DEFAULT NULL,
  `C3` int(11) DEFAULT NULL,
  `C4` int(11) DEFAULT NULL,
  `C5` int(11) DEFAULT NULL,
  `C6` int(11) DEFAULT NULL,
  `C7` int(11) DEFAULT NULL,
  `C8` int(11) DEFAULT NULL,
  `C9` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alternatif`
--

INSERT INTO `alternatif` (`id`, `nama`, `C1`, `C2`, `C3`, `C4`, `C5`, `C6`, `C7`, `C8`, `C9`) VALUES
(1, 'Yatno', 80, 59, 4, 4, 4, 3, 4, 2, 3),
(2, 'Andi', 79, 65, 3, 3, 2, 3, 5, 3, 5),
(3, 'Sarah', 77, 62, 3, 3, 2, 4, 3, 3, 4),
(4, 'Dewita', 81, 60, 4, 3, 2, 3, 4, 3, 5),
(5, 'Asri', 75, 82, 4, 4, 3, 3, 3, 2, 3),
(6, 'Yumame', 80, 78, 3, 2, 4, 3, 5, 3, 3),
(7, 'Infri', 78, 65, 4, 2, 3, 4, 4, 3, 4),
(8, 'Yohanis', 85, 70, 3, 3, 3, 3, 3, 3, 4),
(9, 'Joni', 83, 48, 4, 5, 3, 2, 5, 3, 3),
(10, 'Sengki', 85, 55, 4, 5, 3, 2, 5, 4, 3);

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id` int(11) NOT NULL,
  `kode_kriteria` varchar(50) NOT NULL,
  `kriteria` varchar(50) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `bobot` int(11) NOT NULL,
  `value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id`, `kode_kriteria`, `kriteria`, `tipe`, `bobot`, `value`) VALUES
(1, 'C1', 'Pendidikan', 'Benefit', 5, 1),
(2, 'C2', 'Pengalaman Kerja', 'Benefit', 4, 1),
(3, 'C3', 'Motivation Letter', 'Cost', 3, -1),
(4, 'C4', 'Kemampuan Intrapersonal', 'Benefit', 4, 1),
(5, 'C5', 'Orientasi Prestasi', 'Benefit', 4, 1),
(6, 'C6', 'Kemampuan Penjual', 'Benefit', 5, 1),
(7, 'C7', 'Kepercayaan Diri', 'Benefit', 3, 1),
(8, 'C8', 'Dapat Dipercaya', 'Cost', 3, -1),
(9, 'C9', 'Etos Kerja', 'Benefit', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pivot_pangkat`
--

CREATE TABLE `pivot_pangkat` (
  `id` int(11) NOT NULL,
  `C1` double NOT NULL,
  `C2` double NOT NULL,
  `C3` double NOT NULL,
  `C4` double NOT NULL,
  `C5` double NOT NULL,
  `C6` double NOT NULL,
  `C7` double NOT NULL,
  `C8` double NOT NULL,
  `C9` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pivot_pangkat`
--

INSERT INTO `pivot_pangkat` (`id`, `C1`, `C2`, `C3`, `C4`, `C5`, `C6`, `C7`, `C8`, `C9`) VALUES
(1, 0.1389, 0.1111, -0.0833, 0.1111, 0.1111, 0.1389, 0.0833, -0.0833, 0.1389);

-- --------------------------------------------------------

--
-- Table structure for table `pivot_pangkat_saw`
--

CREATE TABLE `pivot_pangkat_saw` (
  `id` int(11) NOT NULL,
  `C1` double NOT NULL,
  `C2` double NOT NULL,
  `C3` double NOT NULL,
  `C4` double NOT NULL,
  `C5` double NOT NULL,
  `C6` double NOT NULL,
  `C7` double NOT NULL,
  `C8` double NOT NULL,
  `C9` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pivot_pangkat_saw`
--

INSERT INTO `pivot_pangkat_saw` (`id`, `C1`, `C2`, `C3`, `C4`, `C5`, `C6`, `C7`, `C8`, `C9`) VALUES
(1, 0.1389, 0.1111, 0.0833, 0.1111, 0.1111, 0.1389, 0.0833, 0.0833, 0.1389);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'ermin', '7fb128efe4a776129030a02ae1ae34a44eb626f3');

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_hasil_saw`
-- (See below for the actual view)
--
CREATE TABLE `v_hasil_saw` (
`id` int(11)
,`nama` varchar(50)
,`nilai_v` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_maks_min`
-- (See below for the actual view)
--
CREATE TABLE `v_maks_min` (
`maks_C1` int(11)
,`maks_C2` int(11)
,`min_C3` int(11)
,`maks_C4` int(11)
,`maks_C5` int(11)
,`maks_C6` int(11)
,`maks_C7` int(11)
,`min_C8` int(11)
,`maks_C9` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_normalisasi_saw`
-- (See below for the actual view)
--
CREATE TABLE `v_normalisasi_saw` (
`id` int(11)
,`nama` varchar(50)
,`normal_C1` decimal(14,4)
,`normal_C2` decimal(14,4)
,`normal_C3` decimal(14,4)
,`normal_C4` decimal(14,4)
,`normal_C5` decimal(14,4)
,`normal_C6` decimal(14,4)
,`normal_C7` decimal(14,4)
,`normal_C8` decimal(14,4)
,`normal_C9` decimal(14,4)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_pangkat_saw`
-- (See below for the actual view)
--
CREATE TABLE `v_pangkat_saw` (
`kode_kriteria` varchar(50)
,`pangkat_saw` decimal(14,4)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_pangkat_wp`
-- (See below for the actual view)
--
CREATE TABLE `v_pangkat_wp` (
`kode_kriteria` varchar(50)
,`tipe` varchar(50)
,`bobot` int(11)
,`value` int(11)
,`pangkat_wp` decimal(24,4)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_total_bobot_wp`
-- (See below for the actual view)
--
CREATE TABLE `v_total_bobot_wp` (
`total_bobot_wp` decimal(32,0)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_total_pangkat_wp`
-- (See below for the actual view)
--
CREATE TABLE `v_total_pangkat_wp` (
`total_pangkat_wp` decimal(46,4)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_total_vector_s`
-- (See below for the actual view)
--
CREATE TABLE `v_total_vector_s` (
`total_pembagi` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_vector_s`
-- (See below for the actual view)
--
CREATE TABLE `v_vector_s` (
`id` int(11)
,`nama` varchar(50)
,`vector_s` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_vector_v`
-- (See below for the actual view)
--
CREATE TABLE `v_vector_v` (
`id` int(11)
,`nama` varchar(50)
,`vector_v` double
);

-- --------------------------------------------------------

--
-- Structure for view `v_hasil_saw`
--
DROP TABLE IF EXISTS `v_hasil_saw`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_hasil_saw`  AS  select `v_normalisasi_saw`.`id` AS `id`,`v_normalisasi_saw`.`nama` AS `nama`,`v_normalisasi_saw`.`normal_C1` * `pivot_pangkat_saw`.`C1` + `v_normalisasi_saw`.`normal_C2` * `pivot_pangkat_saw`.`C2` + `v_normalisasi_saw`.`normal_C3` * `pivot_pangkat_saw`.`C3` + `v_normalisasi_saw`.`normal_C4` * `pivot_pangkat_saw`.`C4` + `v_normalisasi_saw`.`normal_C5` * `pivot_pangkat_saw`.`C5` + `v_normalisasi_saw`.`normal_C6` * `pivot_pangkat_saw`.`C6` + `v_normalisasi_saw`.`normal_C7` * `pivot_pangkat_saw`.`C7` + `v_normalisasi_saw`.`normal_C8` * `pivot_pangkat_saw`.`C8` + `v_normalisasi_saw`.`normal_C9` * `pivot_pangkat_saw`.`C9` AS `nilai_v` from (`v_normalisasi_saw` join `pivot_pangkat_saw`) order by `v_normalisasi_saw`.`normal_C1` * `pivot_pangkat_saw`.`C1` + `v_normalisasi_saw`.`normal_C2` * `pivot_pangkat_saw`.`C2` + `v_normalisasi_saw`.`normal_C3` * `pivot_pangkat_saw`.`C3` + `v_normalisasi_saw`.`normal_C4` * `pivot_pangkat_saw`.`C4` + `v_normalisasi_saw`.`normal_C5` * `pivot_pangkat_saw`.`C5` + `v_normalisasi_saw`.`normal_C6` * `pivot_pangkat_saw`.`C6` + `v_normalisasi_saw`.`normal_C7` * `pivot_pangkat_saw`.`C7` + `v_normalisasi_saw`.`normal_C8` * `pivot_pangkat_saw`.`C8` + `v_normalisasi_saw`.`normal_C9` * `pivot_pangkat_saw`.`C9` desc ;

-- --------------------------------------------------------

--
-- Structure for view `v_maks_min`
--
DROP TABLE IF EXISTS `v_maks_min`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_maks_min`  AS  select max(`alternatif`.`C1`) AS `maks_C1`,max(`alternatif`.`C2`) AS `maks_C2`,min(`alternatif`.`C3`) AS `min_C3`,max(`alternatif`.`C4`) AS `maks_C4`,max(`alternatif`.`C5`) AS `maks_C5`,max(`alternatif`.`C6`) AS `maks_C6`,max(`alternatif`.`C7`) AS `maks_C7`,min(`alternatif`.`C8`) AS `min_C8`,max(`alternatif`.`C9`) AS `maks_C9` from `alternatif` ;

-- --------------------------------------------------------

--
-- Structure for view `v_normalisasi_saw`
--
DROP TABLE IF EXISTS `v_normalisasi_saw`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_normalisasi_saw`  AS  select `alternatif`.`id` AS `id`,`alternatif`.`nama` AS `nama`,`alternatif`.`C1` / `v_maks_min`.`maks_C1` AS `normal_C1`,`alternatif`.`C2` / `v_maks_min`.`maks_C2` AS `normal_C2`,`v_maks_min`.`min_C3` / `alternatif`.`C3` AS `normal_C3`,`alternatif`.`C4` / `v_maks_min`.`maks_C4` AS `normal_C4`,`alternatif`.`C5` / `v_maks_min`.`maks_C5` AS `normal_C5`,`alternatif`.`C6` / `v_maks_min`.`maks_C6` AS `normal_C6`,`alternatif`.`C7` / `v_maks_min`.`maks_C7` AS `normal_C7`,`v_maks_min`.`min_C8` / `alternatif`.`C8` AS `normal_C8`,`alternatif`.`C9` / `v_maks_min`.`maks_C9` AS `normal_C9` from (`alternatif` join `v_maks_min`) ;

-- --------------------------------------------------------

--
-- Structure for view `v_pangkat_saw`
--
DROP TABLE IF EXISTS `v_pangkat_saw`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_pangkat_saw`  AS  select `kriteria`.`kode_kriteria` AS `kode_kriteria`,`kriteria`.`bobot` / `v_total_bobot_wp`.`total_bobot_wp` AS `pangkat_saw` from (`kriteria` join `v_total_bobot_wp`) ;

-- --------------------------------------------------------

--
-- Structure for view `v_pangkat_wp`
--
DROP TABLE IF EXISTS `v_pangkat_wp`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_pangkat_wp`  AS  select `kriteria`.`kode_kriteria` AS `kode_kriteria`,`kriteria`.`tipe` AS `tipe`,`kriteria`.`bobot` AS `bobot`,`kriteria`.`value` AS `value`,`kriteria`.`bobot` / `v_total_bobot_wp`.`total_bobot_wp` * `kriteria`.`value` AS `pangkat_wp` from (`kriteria` join `v_total_bobot_wp`) ;

-- --------------------------------------------------------

--
-- Structure for view `v_total_bobot_wp`
--
DROP TABLE IF EXISTS `v_total_bobot_wp`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_total_bobot_wp`  AS  select sum(`kriteria`.`bobot`) AS `total_bobot_wp` from `kriteria` ;

-- --------------------------------------------------------

--
-- Structure for view `v_total_pangkat_wp`
--
DROP TABLE IF EXISTS `v_total_pangkat_wp`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_total_pangkat_wp`  AS  select sum(`v_pangkat_wp`.`pangkat_wp`) AS `total_pangkat_wp` from `v_pangkat_wp` ;

-- --------------------------------------------------------

--
-- Structure for view `v_total_vector_s`
--
DROP TABLE IF EXISTS `v_total_vector_s`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_total_vector_s`  AS  select sum(`v_vector_s`.`vector_s`) AS `total_pembagi` from `v_vector_s` ;

-- --------------------------------------------------------

--
-- Structure for view `v_vector_s`
--
DROP TABLE IF EXISTS `v_vector_s`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_vector_s`  AS  select `alternatif`.`id` AS `id`,`alternatif`.`nama` AS `nama`,pow(`alternatif`.`C1`,`pivot_pangkat`.`C1`) * pow(`alternatif`.`C2`,`pivot_pangkat`.`C2`) * pow(`alternatif`.`C3`,`pivot_pangkat`.`C3`) * pow(`alternatif`.`C4`,`pivot_pangkat`.`C4`) * pow(`alternatif`.`C5`,`pivot_pangkat`.`C5`) * pow(`alternatif`.`C6`,`pivot_pangkat`.`C6`) * pow(`alternatif`.`C7`,`pivot_pangkat`.`C7`) * pow(`alternatif`.`C8`,`pivot_pangkat`.`C8`) * pow(`alternatif`.`C9`,`pivot_pangkat`.`C9`) AS `vector_s` from (`alternatif` join `pivot_pangkat`) ;

-- --------------------------------------------------------

--
-- Structure for view `v_vector_v`
--
DROP TABLE IF EXISTS `v_vector_v`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_vector_v`  AS  select `v_vector_s`.`id` AS `id`,`v_vector_s`.`nama` AS `nama`,`v_vector_s`.`vector_s` / `v_total_vector_s`.`total_pembagi` AS `vector_v` from (`v_vector_s` join `v_total_vector_s`) order by `v_vector_s`.`vector_s` / `v_total_vector_s`.`total_pembagi` desc ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pivot_pangkat`
--
ALTER TABLE `pivot_pangkat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pivot_pangkat_saw`
--
ALTER TABLE `pivot_pangkat_saw`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alternatif`
--
ALTER TABLE `alternatif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pivot_pangkat`
--
ALTER TABLE `pivot_pangkat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pivot_pangkat_saw`
--
ALTER TABLE `pivot_pangkat_saw`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
