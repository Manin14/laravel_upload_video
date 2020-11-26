-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2020 at 05:24 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_v`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_video`
--

CREATE TABLE `tabel_video` (
  `id_video` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `file` text NOT NULL,
  `crerated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_video`
--

INSERT INTO `tabel_video` (`id_video`, `keterangan`, `file`, `crerated_at`, `updated_at`) VALUES
(4, 'tt', '1605238325171.mp4', '2020-11-13 03:32:05', '2020-11-13 03:32:05'),
(5, 'tt', '1605238575501.mp4', '2020-11-13 03:36:15', '2020-11-13 03:36:15'),
(6, 'tt', '1605238643967.mp4', '2020-11-13 03:37:23', '2020-11-13 03:37:23'),
(7, 'spideman', '1605240022117.mp4', '2020-11-13 04:00:22', '2020-11-13 04:00:22'),
(8, 'spideman', '1605240664125.mp4', '2020-11-13 04:11:04', '2020-11-13 04:11:04'),
(9, 'iron man', '1605240761537.mp4', '2020-11-13 04:12:41', '2020-11-13 04:12:41'),
(10, 'kapten amerika', '1605240887515.mp4', '2020-11-13 04:14:47', '2020-11-13 04:14:47'),
(11, 'hulk', '1605240994303.mp4', '2020-11-13 04:16:34', '2020-11-13 04:16:34'),
(12, 'thor', '1605241136544.mp4', '2020-11-13 04:18:56', '2020-11-13 04:18:56'),
(13, 'hawakeye', '1605241189154.mp4', '2020-11-13 04:19:49', '2020-11-13 04:19:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_video`
--
ALTER TABLE `tabel_video`
  ADD PRIMARY KEY (`id_video`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_video`
--
ALTER TABLE `tabel_video`
  MODIFY `id_video` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
