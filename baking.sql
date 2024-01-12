-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2024 at 12:24 PM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baking`
--

-- --------------------------------------------------------

--
-- Table structure for table `bakery`
--

CREATE TABLE `bakery` (
  `ID` int(11) NOT NULL,
  `Productname` varchar(100) NOT NULL,
  `Productprice` varchar(100) NOT NULL,
  `Manufacturingdate` varchar(100) NOT NULL,
  `Productdescription` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bakery`
--

INSERT INTO `bakery` (`ID`, `Productname`, `Productprice`, `Manufacturingdate`, `Productdescription`) VALUES
(1, 'Rainbow swirl', '120000', '2024-01-01', 'multiple colour'),
(2, 'Black Forest cake', '145000', '2024-01-11', 'warm chocolate taste'),
(3, 'chocolate chip cookies', '1500', '2023-11-08', 'plain chocolate taste with a little sweet suprise to it'),
(4, 'coconut cake', '138000', '2024-01-06', 'a simple and easy coconut cake recipe , one may even say a common flavor but the taste is so flavorful ,for you to resist sinking your teeth ack into those moist layers'),
(5, 'mocha fudge cake', '100000', '2024-01-04', 'irresistible coffee flavor'),
(6, 'marble pound cake', '110000', '2023-12-28', 'chocolate infused with a plain vanilla flavor made to the desired taste of an individual\'s preference'),
(7, 'strawberry cake', '105000', '2023-12-22', 'sweet red berry flavor with a fruity taste'),
(8, ' mango-banana cake', '135000', '2024-01-03', 'a perfect healthy combination of two loved tropical fruits to create a superb combo to your preference'),
(9, 'red velvet cake', '150000', '2024-01-06', 'red masterpiece of soft layers with a finishing touch of a cherry flavor '),
(10, 'rich dark chocolate cake', '145000', '2023-12-20', 'full chocolate flavor that describes the true meaning of this cocoa product');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bakery`
--
ALTER TABLE `bakery`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bakery`
--
ALTER TABLE `bakery`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
