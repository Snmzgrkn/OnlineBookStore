-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2022 at 11:02 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booksstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `idBooks` int(11) NOT NULL,
  `copies` longtext NOT NULL,
  `bookstitle` longtext NOT NULL,
  `booksauthor` longtext NOT NULL,
  `price` longtext NOT NULL,
  `published` longtext NOT NULL,
  `customername` longtext NOT NULL,
  `orders` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`idBooks`, `copies`, `bookstitle`, `booksauthor`, `price`, `published`, `customername`, `orders`) VALUES
(8, '2,069', 'As a Man Grows OlderAs a Man Grows Older', 'Italo Svevo', '21', '1898', 'Anatjari Teodor', '362'),
(9, '20,196', 'Lives of Girls and WomenLives of Girls and Women', 'Alice Munro', '47', '1971', 'Viliame Oliver', '404'),
(10, '33,210', 'Home', 'Marilynne Robinson', '99', '2008', 'Arnaldo Aulikki', '397'),
(11, '4,590', 'MonicaMonica', 'Saunders Lewis', '32', '1930', 'Shraga Hōkūlani', '344'),
(12, '13,494', 'World\'s EndWorld\'s End', 'Iain Banks', '57', '1993', 'Joele Müge', '389');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`idBooks`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `idBooks` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
