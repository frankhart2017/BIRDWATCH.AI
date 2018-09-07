-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 07, 2018 at 11:21 AM
-- Server version: 10.2.12-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id7047881_data_collect`
--

-- --------------------------------------------------------

--
-- Table structure for table `birds`
--

CREATE TABLE `birds` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `scientific` text COLLATE utf8_unicode_ci NOT NULL,
  `kingdom` text COLLATE utf8_unicode_ci NOT NULL,
  `phylum` text COLLATE utf8_unicode_ci NOT NULL,
  `class` text COLLATE utf8_unicode_ci NOT NULL,
  `ord` text COLLATE utf8_unicode_ci NOT NULL,
  `family` text COLLATE utf8_unicode_ci NOT NULL,
  `genus` text COLLATE utf8_unicode_ci NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `birds`
--

INSERT INTO `birds` (`id`, `name`, `scientific`, `kingdom`, `phylum`, `class`, `ord`, `family`, `genus`, `image`) VALUES
(1, 'Mallard', 'Anas platyrhynchos', 'Animalia', 'Chordata', 'Aves', 'Anseriformes', 'Anatidae', 'Anas', 'mallard.jpg'),
(2, 'European nightjar', 'Caprimulgus europaeus', 'Animalia', 'Chordata', 'Aves', 'Caprimulgiformes', 'Caprimulgidae', 'Caprimulgus', 'european_nightjar.jpg'),
(3, 'Thick billed murre', 'Uria lomvia', 'Animalia', 'Chordata', 'Aves', 'Charadriiformes', 'Alcidae', 'Uria', 'thick_billed_murre.jpg'),
(4, 'White faced ibis', 'Plegadis chihi', 'Animalia', 'Chordata', 'Aves', 'Pelecaniformes', 'Threskiornithidae', 'Plegadis', 'white_faced_ibis.jpg'),
(5, 'Rock pigeon', 'Columba livia', 'Animalia', 'Chordata', 'Aves', 'Columbiformes', 'Columbidae', 'Columba', 'rock_pigeon.jpeg'),
(6, 'Common cuckoo', 'Cuculus canorus', 'Animalia', 'Chordata', 'Aves', 'Cuculiformes', 'Cuculidae', 'Cuculus', 'common_cuckoo.jpg'),
(7, 'Common kestrel', 'Falco tinnunculus', 'Animalia', 'Chordata', 'Aves', 'Falconiformes', 'Falconidae', 'Falco', 'common_kestrel.jpg'),
(8, 'Pacific loon', 'Gavia pacifica', 'Animalia', 'Chordata', 'Aves', 'Gaviiformes', 'Gaviidae', 'Gavia', 'pacific_loon.jpg'),
(9, 'Lesser flamingo', 'Phoenicoparrus minor', 'Animalia', 'Chordata', 'Aves', 'Phoenicopteriformes', 'Phoenicopteridae', 'Phoenicoparrus', 'lesser_flamingo.jpg'),
(10, 'Great spotted woodpecker', 'Dendropcopos major', 'Animalia', 'Chordata', 'Aves', 'Piciformes', 'Picidae', 'Dendropcopos', 'great_spotted_woodpecker.jpg'),
(11, 'Black necked grebe', 'Podiceps nigricollis', 'Animalia', 'Chordata', 'Aves', 'Podicipediformes', 'Podicipedidae', 'Podiceps', 'black_necked_grebe.jpg'),
(12, 'Short tailed shearwater', 'Ardenna tenuirostris', 'Animalia', 'Chordata', 'Aves', 'Procellariiformes', 'Procellariidae', 'Ardenna', 'short_tailed_shearwater.jpg'),
(13, 'Short eared owl', 'Asio flammeus', 'Animalia', 'Chordata', 'Aves', 'Strigiformes', 'Strigidae', 'Asio', 'short_eared_owl.jpg'),
(14, 'Willow ptarmigan', 'Lagopus lagopus', 'Animalia', 'Chordata', 'Aves', 'Galliformes', 'Phasianidae', 'Lagopus', 'willow_ptarmigan.jpg'),
(15, 'Flightless cormorant', 'Phalacrocorax harrisi', 'Animalia', 'Chordata', 'Aves', 'Pelecaniformes', 'Phalacrocoracidae', 'Phalacrocorax', 'flightless_cormorant.jpg'),
(16, 'Common ostrich', 'Struthio camelus', 'Animalia', 'Chordata', 'Aves', 'Struthioniformes', 'Struthionidae', 'Struthio', 'common_ostrich.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `birds`
--
ALTER TABLE `birds`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `birds`
--
ALTER TABLE `birds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
