-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2024 at 05:27 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `be22_exam4_mustafaerkamarafat_biglibrary`
--
CREATE DATABASE IF NOT EXISTS `be22_exam4_mustafaerkamarafat_biglibrary` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `be22_exam4_mustafaerkamarafat_biglibrary`;

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `ISBN` int(13) NOT NULL,
  `short_description` text NOT NULL,
  `type` varchar(10) NOT NULL,
  `author_first_name` varchar(50) NOT NULL,
  `author_last_name` varchar(30) NOT NULL,
  `publisher_name` varchar(100) NOT NULL,
  `publisher_address` varchar(255) NOT NULL,
  `publish_date` date NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`id`, `title`, `image`, `ISBN`, `short_description`, `type`, `author_first_name`, `author_last_name`, `publisher_name`, `publisher_address`, `publish_date`, `status`) VALUES
(8, 'The Silent Echo', 'https://cdn.pixabay.com/photo/2018/07/01/20/01/music-3510326_640.jpg', 2147483647, 'A thrilling mystery novel set in a small town.', 'book', 'John', 'Doe', 'Greenfield Publishing', '123 Maple St, Springfield, IL', '2021-12-05', 'available'),
(9, 'The Last Kingdom', 'https://cdn.pixabay.com/photo/2014/08/16/18/17/book-419589_640.jpg', 2147483647, 'Historical fiction set in medieval England.', 'book', 'Bernard', 'Cornwell', 'HarperCollins', '195 Broadway, New York, NY', '2015-06-10', 'available'),
(10, 'Digital Fortress', 'https://cdn.pixabay.com/photo/2015/11/19/21/10/glasses-1052010_640.jpg', 2147483647, 'A techno-thriller novel involving cryptography.', 'book', 'Dan', 'Brown', 'St. Martins Press', '175 Fifth Avenue, New York, NY', '1998-01-02', 'available'),
(11, 'The Martian', 'https://cdn.pixabay.com/photo/2015/11/19/21/14/glasses-1052023_640.jpg', 2147483647, 'A gripping survival story of an astronaut stranded on Mars.', 'book', 'Andy', 'Weir', 'Crown Publishing Group', '1745 Broadway, New York, NY', '2014-02-01', 'reserved'),
(12, 'Educated', 'https://cdn.pixabay.com/photo/2023/10/05/11/57/book-8295812_640.jpg', 2147483647, 'A memoir about a woman who grows up in a strict and abusive household in rural Idaho but eventually escapes to learn about the wider world through education.', 'book', 'Tara', 'Westover', 'Random House', '1745 Broadway, New York, NY', '0218-02-02', 'available'),
(13, 'Becoming', 'https://cdn.pixabay.com/photo/2016/11/29/07/21/book-1868068_640.jpg', 2147483647, 'Michelle Obama memoir.', 'book', 'Michelle', 'Obama', 'Crown Publishing Group', '1745 Broadway, New York, NY', '2018-12-11', 'available'),
(14, 'To Kill a Mockingbird', 'https://cdn.pixabay.com/photo/2015/12/04/09/13/leaves-1076307_640.jpg', 2147483647, ' A novel about racial injustice in the Deep South.', 'book', 'Harper', 'Lee', 'J.B. Lippincott & Co.', '227 East Washington Square, Philadelphia, PA', '1960-11-07', 'available'),
(15, 'The Great Gatsby', 'https://cdn.pixabay.com/photo/2022/11/03/13/07/book-7567437_640.jpg', 2147483647, 'A critique of the American Dream set in the Jazz Age.', 'book', 'F. Scott', 'Fitzgerald', 'Charles Scribners Sons', '597 Fifth Avenue, New York, NY', '1925-10-04', 'available'),
(16, '1984', 'https://cdn.pixabay.com/photo/2016/09/10/17/18/book-1659717_640.jpg', 2147483647, 'A dystopian novel about a totalitarian regime.', 'book', 'George', 'Orwell', 'Secker & Warburg', '20 Vauxhall Bridge Rd, London, UK', '1948-08-06', 'available'),
(17, 'Thriller', 'https://cdn.pixabay.com/photo/2017/08/06/03/07/cd-2588173_640.jpg', 2147483647, 'Michael Jacksons best-selling album.', 'cd', 'Michael', 'Jackson', 'Epic Records', '550 Madison Ave, New York, NY', '1982-11-30', 'available'),
(18, 'The Dark Side of the Moon', 'https://cdn.pixabay.com/photo/2017/12/02/16/27/cd-cover-2993240_640.jpg', 2147483647, 'Pink Floyds iconic album.', 'cd', 'Pink', 'Floyd', 'Harvest Records', '364-366 Kensington High St, London, UK', '1973-01-03', 'reserved'),
(19, 'Abbey Road', 'https://cdn.pixabay.com/photo/2015/09/21/00/54/plant-949111_640.jpg', 2147483647, 'The Beatles eleventh studio album.', 'dvd', 'The Beatles', '', 'Apple Records', '3 Savile Row, London, UK', '1969-09-26', 'available'),
(20, 'Back in Black', 'https://cdn.pixabay.com/photo/2017/12/02/16/19/cd-cover-2993231_640.jpg', 2147483647, 'AC/DCs best-selling rock album.', 'dvd', 'AC', 'DC', 'Atlantic Records', '1290 Avenue of the Americas, New York, NY', '1980-07-25', 'reserved'),
(21, 'Rumours', 'https://cdn.pixabay.com/photo/2014/05/04/00/59/cd-337362_640.jpg', 2147483647, ' Fleetwood Macs critically acclaimed album.', 'dvd', 'Fleetwood', 'Mac', 'Warner Bros. Records', '3300 Warner Blvd, Burbank, CA', '1987-04-02', 'reserved');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `library`
--
ALTER TABLE `library`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
