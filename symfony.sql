-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2020 at 02:40 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `symfony`
--

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`id`, `name`, `tag`, `description`, `price`) VALUES
(1, 'Piccadilly', 'piccadilly', 'Designed to be our economy room, for those who will be spending more time seeing the sights, and less time hitting the hay. The Piccadilly room has a smaller footprint, but maintains the accommodations of some of our more deluxe rooms.', 1000),
(2, 'Cambridge', 'cambridge', 'This room features a king bed, with a Comfort-Plus mattress, covered in 400-thread Egyptian cotton sheets. The Cambridge room is decorated in tasteful and warm muted tones, that are soothing on the eyes and senses.', 800),
(3, 'Westminster', 'westminster', 'This room is available with a king or two double beds, and is furnished with our Premiere London collection – the softest and most luxurious bed and bath linens.', 499),
(4, 'Oxford', 'oxford', 'Our Oxford suites are some of the prettiest and most romantic rooms around and are perfect for honeymoons. All of these feature canopy beds, lots of windows, and spare no modern comfort or convenience, including a TLX media system.', 250),
(5, 'Victoria', 'victoria', 'Traveling with the family? Our spacious Victoria suites, with breathtaking views of the city, are the perfect choice. These corner rooms are furnished with a king or two double beds, and have a sofa with a comfortable pullout bed.', 1500),
(6, 'Manchester', 'manchester', 'The Manchester Executive Suite, is popular with business travelers the world over. These two-room suites feature a king-size bed, living room with leather recliner, full-sized executive desk, and leather desk chair.', 720);

-- --------------------------------------------------------

--
-- Table structure for table `migration_versions`
--

CREATE TABLE `migration_versions` (
  `version` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `executed_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migration_versions`
--

INSERT INTO `migration_versions` (`version`, `executed_at`) VALUES
('20200504140946', '2020-05-04 14:31:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migration_versions`
--
ALTER TABLE `migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
