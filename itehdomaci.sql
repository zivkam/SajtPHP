-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2022 at 10:23 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itehdomaci`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `is_admin` tinyint(1) NOT NULL,
  `name` varchar(25) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `is_admin`, `name`, `surname`, `email`) VALUES
(2, 'zivka', 'zivka', 1, 'Milica', 'Zivanovic', 'zivka@gmail.com'),
(3, 'mare', 'mare', 0, 'Marko', 'Zivanovic', 'mare@gmail.com'),
(4, 'zoks', 'zoks', 0, 'Zoka', 'Zivanovic', 'zoks@gmail.com'),
(5, 'miki', 'miki', 0, 'Milan', 'Zivanovic', 'miki@gmail.com'),
(6, 'beka', 'beka', 0, 'Bekuta', 'repac', 'beksi@gmail.com'),
(8, 'kemal', 'kemal', 0, 'kemal', 'malovcic', 'kemo@gmail.com'),
(9, 'bojana', 'bojana', 0, 'Бојана', 'Репац', 'bojkee@repulja.com');

-- --------------------------------------------------------

--
-- Table structure for table `vinyl`
--

CREATE TABLE `vinyl` (
  `vinyl_id` int(5) NOT NULL,
  `vinyl_name` varchar(50) NOT NULL,
  `artist` varchar(50) NOT NULL,
  `genre` varchar(20) NOT NULL,
  `year` int(4) NOT NULL,
  `user_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vinyl`
--

INSERT INTO `vinyl` (`vinyl_id`, `vinyl_name`, `artist`, `genre`, `year`, `user_id`) VALUES
(2, 'Magazin', 'Magazin', 'pop', 1987, 5),
(3, 'Ako pridjes blize', 'Zdravko Colic', 'pop', 1977, 9),
(4, 'Dark side of the moon', '  Pink Floyd', 'rok', 1973, 9),
(5, 'After Hours', 'The Weeknd', 'R&B', 2020, 9),
(6, 'Mile voli disko', 'Lepa Brena', 'folk', 1982, 6),
(7, 'Indexi', 'Indexi', 'rok', 1974, 6),
(8, 'Meni je s tobom sreca obecana', 'Saban Saulic', 'folk', 1981, 5),
(9, 'Kada bi me pitali', 'Zorica Brunclik', 'folk', 1995, 6),
(10, 'Kind of Blue', 'Miles Davis', 'jezz', 1959, 9),
(11, 'pristajem na sve', 'semsa', 'folk', 1989, 5),
(13, 'Pjesma samo o njoj', ' Halid Beslic', 'folk', 1982, 6),
(14, 'Pjesma samo o njoj', 'Halid Beslic', 'folk', 1982, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vinyl`
--
ALTER TABLE `vinyl`
  ADD PRIMARY KEY (`vinyl_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `vinyl`
--
ALTER TABLE `vinyl`
  MODIFY `vinyl_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
