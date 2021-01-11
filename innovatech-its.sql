-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jan 05, 2021 at 07:24 AM
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
-- Database: `innovatech-its`
--

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `id_ulpload` int(2) NOT NULL,
  `team` varchar(128) NOT NULL,
  `ketua` varchar(128) NOT NULL,
  `no_telp` varchar(128) NOT NULL,
  `photo` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id_ulpload`, `team`, `ketua`, `no_telp`, `photo`) VALUES
(1, 'redi', 'claee', '08151', 'ILib-min.jpg'),
(2, 'redi', 'claee', '08151', 'Getty_Vote_Ballot_Election.jpg'),
(3, 'redi', 'claee', '08151', 'Getty_Vote_Ballot_Election.jpg'),
(4, 'redi', 'claee', '08151', 'SCAN KTM.jpg'),
(5, 'ateamm', 'athaaa', '081512002091121212', 'SCAN KTM.jpg'),
(6, 'ashiaaap', 'atha halilintar', '08199218811', 'regist.png'),
(7, 'saya tim', 'saya', '081291921013', 'SCAN KTM.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'clarissa', 'clarissa.fatimah@gmail.com', '$2y$10$YHYRGcz8DOy6MK0wthgDaOnXrcm/NhOD1bVdw9Se22QPF8EJQjJuW'),
(2, 'clae', 'coba@gmail.com', '$2y$10$MS1eZAdUOXo8zUCtzof2yuFlB02qx12H2lORgoJ7/INfQObrdjZRG'),
(3, 'clae', 'coba@gmail.com', '$2y$10$Skvhcp8ZxmG4PO6oJE5Cxes9hf.9PSeAQU.jtUNqxBZKQHt78CJYu'),
(4, 'clarissa', 'claeee@gmail.com', '$2y$10$lYDKsWX60qHyKjJEBYhmhOflJ29Ffff.CGeZhk9JYj6RdSj6BocKC'),
(8, 'test', 'testing@gmail.com', '$2y$10$dTPjGIGDotjbkuCc9y1TsO4Jo2e5dWjFqKr.x.NPZ9hj7bSbXQKji'),
(9, 'teknologi', 'teknologi@gmail.id', '$2y$10$BY3RotSiUuZl/1kNhF9bw.vxybIHU1MbfHmOPlDaKRq.klDfQynA6'),
(10, 'test1', 'testing@gmail.com', '$2y$10$NaUQzKZsVConsYD6L3PHaOSe/uPA3IMnoF7rcFC0CjO8WQJzxyrpG'),
(11, 'fatimah', 'claeee@gmail.com', '$2y$10$bOZC1KuxwrJpLzK6w7xI7encCkbC6/X9aLc2frV6d/Qj/QaLGXAk6'),
(12, 'saya', 'saya@cantik.com', '$2y$10$Ez.1aVqmwh7SIFFQaDOzuOK6IvDW5vIXIFGWewiIpVG40StyAFn0K'),
(13, 'coba1', 'testing1@coba.com', '$2y$10$.Asc5q6sQuL4jpZIcs5B3ubI8ViMceyZat4bemA01CywuCX8Xam/G');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id_ulpload`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `id_ulpload` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
