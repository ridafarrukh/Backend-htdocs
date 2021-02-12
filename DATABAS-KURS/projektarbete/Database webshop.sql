-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 12, 2021 at 11:28 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webshopdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `webshop`
--

CREATE TABLE `webshop` (
  `id` int(11) NOT NULL,
  `productName` varchar(50) NOT NULL,
  `productPrice` varchar(50) NOT NULL,
  `productDescription` varchar(200) NOT NULL,
  `productImages` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `webshop`
--

INSERT INTO `webshop` (`id`, `productName`, `productPrice`, `productDescription`, `productImages`) VALUES
(1, 'Träningshoodie', '799', 'Huvtröja i stretchkvalitet ned skimrande pricktryck upptill fram och på huvan. Dragkedja fram och fickor i sidorna', 'https://www.pexels.com/photo/woman-wearing-black-hoodie-2787351/'),
(2, 'Puff Top', '299', 'Topp i glansig trikå med strukturmönster. Långa ärmar med lagda veck på axlarna.', 'https://www.pexels.com/photo/woman-in-black-long-sleeved-shirt-wearing-black-hat-4450356/'),
(4, 'klänning Janni', '599', 'Klänning Janni med figurnära överdel i elastisk smock med sprund och knapp i nacken.', 'https://www.pexels.com/photo/woman-in-blue-dress-leaning-on-wooden-fence-4387524/'),
(11, 'Tiger of sweden jeans', '1399', 'Jeans Rex från Tiger of Sweden i stretchdenim av ekologisk bomull.', 'https://www.pexels.com/photo/person-in-blue-denim-jeans-and-white-converse-all-stars-52574/'),
(12, 'Only Kappa', '479', 'Kappa onlSedona Light Coat från Only i vävd kvalitet med draperad huva. Dold stängning med dragkedja och tryckknappar. Två fickor i sidorna. Längd ca 81 cm i stl S.', 'https://www.pexels.com/photo/selective-focus-photography-woman-wearing-gray-coat-standing-near-building-1381553/'),
(13, 'Sneaker Air soft', '279', 'Sneakers Air Soft i slip on-modell med ovandel i strukturmönstrad textil med ribbad kant med stretch runt öppningen. Dragtamp i präglad skinnimitation både fram och bak. ', 'https://www.pexels.com/sv-se/foto/mode-skor-oskarpa-logotyp-1478442/'),
(14, 'Kappa Melina', '489', 'Kappa Melina i klassisk, rak modell i ullmix med knappar fram och två fickor med ficklock.', 'https://www.pexels.com/photo/woman-in-red-and-black-coat-and-black-hat-3584505/'),
(15, 'Boots Olivia', '1300', 'Boots Olivia från Vagabond i stilren modell med spetsig tå och klädd, snyggt formad klack. Dragkedja på skaftets insida. Ovansida i mocka.', 'https://www.pexels.com/photo/women-s-yellow-long-sleeved-dress-1055691/'),
(16, 'Träninglinne', '174', 'Produkten består av viskos av bambu som är odlad utan bekämpningsmedel. Bambu är ett förnyelsebart material med hög absorberingsförmåga.', 'https://www.pexels.com/photo/happy-young-sportswoman-doing-exercise-with-dumbbell-4498292/'),
(17, 'Byxor Lorelai', '209', 'Byxor Lorelai i snygg modell med hög midja och vida, raka ben. Bred, invändig resår upptill. Följsam stretchtrikå.', 'https://www.pexels.com/sv-se/foto/landskap-mode-person-hander-3522692/'),
(18, 'Plus Abstract Figure Print Tee', '150', 'Style: Casual, Color: Black, Pattern Type: Figure, Neckline: Round Neck, Length: Regular, Sleeve Length: Short Sleeve, Sleeve Type: Regular Sleeve, Season: Summer, Fit Type: Regular Fit.', 'https://images.unsplash.com/photo-1522706604291-210a56c3b376'),
(19, 'Plus Letter Graphic Drop Shoulder Tee', '260', 'Style: Casual, Color: Navy Blue, Pattern Type: Letter, Neckline: Round Neck, Length: Regular.', 'https://images.unsplash.com/photo-1520926559917-836c81ebfa3d'),
(20, 'MOTF Premium Voluminous Chunky-Knit Sweater', '379', 'Style: Elegant, Color: Beige, Pattern Type: Plain, Neckline: Stand Collar, Length: Knee Length, Type:shirt.', 'https://images.unsplash.com/photo-1585487000160-6ebcfceb0d03'),
(21, 'Flap Detail Single Breasted Teddy Jacket', '360', 'Style: Casual, Color: Mocha Brown, Pattern Type: Plain, Neckline: Collar, Length: Regular. ', 'https://images.unsplash.com/photo-1573248447125-09a9bc0daa0c'),
(22, 'Ribbed Mock Neck Form-Fitting Sweater', '139', 'Type: Basic Tops, Style: Basics, Color: Dusty Pink, Pattern Type: Plain, Neckline: Stand collar', 'https://images.unsplash.com/photo-1589697547048-962940abc062'),
(23, 'Color Block Rib-knit Cami Top', '200', 'Style: Casual, Color: Multicolor, Pattern Type: Colorblock, Neckline: Spaghetti Strap, Length: Regular, Details: Rib-Knit, Sleeve Length: Sleeveless, Season: Spring, Composition: 100% Acrylic.', 'https://images.unsplash.com/photo-1561538515-a63dfbf97ef1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `webshop`
--
ALTER TABLE `webshop`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `webshop`
--
ALTER TABLE `webshop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
