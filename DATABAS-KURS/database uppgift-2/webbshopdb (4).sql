-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 24, 2021 at 01:27 PM
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
-- Database: `webbshopdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `customer_tel` varchar(50) NOT NULL,
  `customer_email` varchar(100) NOT NULL,
  `customer_address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_tel`, `customer_email`, `customer_address`) VALUES
(1, 'Mahmud Al Hakim', '07907625378', 'mahmud@alhakim.com', 'Stockholm'),
(13, 'rida', '54647748', 'rida@gmail.com', 'alby'),
(22, 'Ali', '54664747', 'ali@gmail.com', 'brömma');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `message_id` int(11) NOT NULL,
  `contactperson_name` varchar(100) NOT NULL,
  `contactperson_tel` varchar(50) NOT NULL,
  `contactperson_email` varchar(100) NOT NULL,
  `contactperson_message` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`message_id`, `contactperson_name`, `contactperson_tel`, `contactperson_email`, `contactperson_message`) VALUES
(11, 'sara', '5464744', 'sara@gmail.com', 'hej');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `customer_id`, `product_id`, `order_date`) VALUES
(1, 1, 5, '2021-02-15 17:45:14'),
(24, 22, 1, '2021-02-24 13:58:33');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_description` varchar(200) NOT NULL,
  `product_image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_price`, `product_description`, `product_image`) VALUES
(1, 'Träningshoodie', 799, 'Huvtröja i stretchkvalitet ned skimrande pricktryck upptill fram och på huvan. Dragkedja fram och fickor i sidorna.', 'https://images.pexels.com/photos/2787351/pexels-photo-2787351.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260'),
(2, '	\r\nRibbed Mock Neck Form-Fitting Sweater', 139, 'Type: Basic Tops, Style: Basics, Color: Dusty Pink, Pattern Type: Plain, Neckline: Stand collar', 'https://images.unsplash.com/photo-1589697547048-962940abc062'),
(3, 'Puff Top', 299, 'Topp i glansig trikå med strukturmönster. Långa ärmar med lagda veck på axlarna.', 'https://images.pexels.com/photos/4450356/pexels-photo-4450356.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940'),
(4, 'klänning Janni', 599, 'Klänning Janni med figurnära överdel i elastisk smock med sprund och knapp i nacken.', 'https://images.pexels.com/photos/4387524/pexels-photo-4387524.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940'),
(5, 'Color Block Rib-knit Cami Top', 200, 'Style: Casual, Color: Multicolor, Pattern Type: Colorblock, Neckline: Spaghetti Strap, Length: Regular, Details: Rib-Knit, Sleeve Length: Sleeveless, Season: Spring, Composition: 100% Acrylic.', 'https://images.unsplash.com/photo-1561538515-a63dfbf97ef1'),
(6, 'Tiger of sweden jeans', 1399, 'Jeans Rex från Tiger of Sweden i stretchdenim av ekologisk bomull.', 'https://images.pexels.com/photos/52574/pexels-photo-52574.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940'),
(7, 'Only Kappa', 479, 'Kappa onlSedona Light Coat från Only i vävd kvalitet med draperad huva. Dold stängning med dragkedja och tryckknappar. Två fickor i sidorna. Längd ca 81 cm i stl S.', 'https://images.pexels.com/photos/1381553/pexels-photo-1381553.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940'),
(8, 'Sneaker Air soft', 279, 'Sneakers Air Soft i slip on-modell med ovandel i strukturmönstrad textil med ribbad kant med stretch runt öppningen. Dragtamp i präglad skinnimitation både fram och bak.', 'https://images.pexels.com/photos/1478442/pexels-photo-1478442.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940'),
(9, 'Kappa Melina', 489, 'Kappa Melina i klassisk, rak modell i ullmix med knappar fram och två fickor med ficklock.', 'https://images.pexels.com/photos/3584505/pexels-photo-3584505.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940'),
(10, 'Boots Olivia', 1300, 'Boots Olivia från Vagabond i stilren modell med spetsig tå och klädd, snyggt formad klack. Dragkedja på skaftets insida. Ovansida i mocka.', 'https://images.pexels.com/photos/1055691/pexels-photo-1055691.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940'),
(11, 'Träninglinne', 174, 'Produkten består av viskos av bambu som är odlad utan bekämpningsmedel. Bambu är ett förnyelsebart material med hög absorberingsförmåga.', 'https://images.pexels.com/photos/4498292/pexels-photo-4498292.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940'),
(12, 'Byxor Lorelai', 209, 'Byxor Lorelai i snygg modell med hög midja och vida, raka ben. Bred, invändig resår upptill. Följsam stretchtrikå.', 'https://images.pexels.com/photos/3522692/pexels-photo-3522692.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940'),
(13, 'Plus Abstract Figure Print Tee', 150, 'Style: Casual, Color: Black, Pattern Type: Figure, Neckline: Round Neck, Length: Regular, Sleeve Length: Short Sleeve, Sleeve Type: Regular Sleeve, Season: Summer, Fit Type: Regular Fit.', 'https://images.unsplash.com/photo-1522706604291-210a56c3b376'),
(14, 'Plus Letter Graphic Drop Shoulder Tee', 260, 'Style: Casual, Color: Navy Blue, Pattern Type: Letter, Neckline: Round Neck, Length: Regular.', 'https://images.unsplash.com/photo-1520926559917-836c81ebfa3d');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
