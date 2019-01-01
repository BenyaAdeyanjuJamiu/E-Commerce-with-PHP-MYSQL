-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  mar. 01 jan. 2019 à 20:45
-- Version du serveur :  10.1.22-MariaDB
-- Version de PHP :  7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `dsti_ecommerce`
--

-- --------------------------------------------------------

--
-- Structure de la table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(10) NOT NULL,
  `brand_title` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(1, 'HP'),
(2, 'Samsung'),
(3, 'Apple'),
(4, 'Sony'),
(5, 'LG '),
(6, 'Cloth Brand');

-- --------------------------------------------------------

--
-- Structure de la table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(250) NOT NULL,
  `user_id` int(10) NOT NULL,
  `product_title` varchar(200) NOT NULL,
  `product_image` text NOT NULL,
  `qty` int(100) NOT NULL,
  `price` int(100) NOT NULL,
  `total_amt` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cart`
--

INSERT INTO `cart` (`cart_id`, `p_id`, `ip_add`, `user_id`, `product_title`, `product_image`, `qty`, `price`, `total_amt`) VALUES
(22, 3, '0', 0, 'Easy To Wear', 'l2.png', 1, 90, 90),
(23, 1, '0', 0, 'Samsung Galaxy S8 Dual Sim - 64G', 'samsung_galaxy.png', 1, 2000, 2000),
(32, 19, '0', 7, 'Digital Quran', 'q6.png', 10, 88, 880);

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(10) NOT NULL,
  `cat_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Electronics'),
(2, 'Ladies Wears'),
(3, 'Mens Wears'),
(4, 'Kids Wears'),
(5, 'Funitures'),
(6, 'Home Appliances'),
(7, 'Electronics Gadgets');

-- --------------------------------------------------------

--
-- Structure de la table `customer_order`
--

CREATE TABLE `customer_order` (
  `id` int(100) NOT NULL,
  `uid` int(100) NOT NULL,
  `pid` int(100) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_price` int(100) NOT NULL,
  `p_qty` int(100) NOT NULL,
  `p_status` varchar(300) NOT NULL,
  `trx_id` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `product_cat` int(100) NOT NULL,
  `product_brand` int(100) NOT NULL,
  `product_title` varchar(100) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL,
  `product_keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_brand`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`) VALUES
(1, 1, 2, 'Samsung Galaxy S8 Dual Sim - 64G', 2000, 'Very good and portable', 'samsung_galaxy.png', 'samsung, galaxy,portable, iphone'),
(2, 3, 6, 'Winter Wear', 100, 'Good Wear for Winter', 'm1.png', 'Winter, cloth, mens, men, wearing, black'),
(3, 2, 6, 'Easy To Wear', 90, 'Beautiful and  nice for the  woman, ladies ', 'l2.png', 'Woman, ladies, wears, summer cloth.'),
(4, 7, 5, 'AWS ALEX', 126, 'This one of language Translation Machine from Amazon', 'el2.png', 'amazon, electronics, language translation, machine'),
(5, 6, 3, 'Home Appliance', 56, 'This is one of the beautiful home appliance.', 'ha4.png', 'Home appliance, cooking, eating, drinking'),
(6, 5, 4, 'Funiture and Appliance', 77, 'Good and Nice', 'f1.png', 'Home table, chair'),
(7, 7, 5, 'Good Camera', 200, 'Japanese Product', 'c1.png', 'camera, iphone, ipad, telephone'),
(8, 1, 2, 'New Arraival', 96, 'This is powerful camera and scanner', 'eg1.png', 'Camera, scanner, iphone,ipad,'),
(9, 3, 6, 'Golden Shoe', 36, 'This is standard shoe for men', 'shoe1.png', 'shoe,wear, man'),
(10, 1, 1, 'Just Arraived', 70, 'Good quality', 'l4.png', 'ladies cloth, beautiful, winter, summer'),
(11, 1, 3, 'Taken Your Soft Drink', 58, 'Good product,', 'l1.png', 'nice, wear, ladies wear'),
(12, 1, 2, 'Sony Computer', 146, 'This is nice laptop', 'el4.png', 'pc,sony, computer'),
(13, 5, 5, 'Home Made ', 131, 'Table for eating', 'f3.png', 'Table, chair, food'),
(14, 1, 5, 'Digita Quran best for Kids', 66, 'Good for Kids and easy to learn Quran', 'q1.png', 'Quran, Hadith, muslim, kids, woman, man, islam, muslim, mosque'),
(15, 2, 3, 'New Arriaval from Saudi', 46, 'Easy to memorize Quran', 'q2.png', 'Muslim, quran, Hadith, islam, mosque, kids, woman, man, religion, muslims'),
(16, 6, 4, 'Digital Quran', 90, 'New Digial Quran', 'q3.png', 'Muslim, quran, Hadith, islam, mosque, kids, woman, man, religion, muslims'),
(17, 4, 2, 'New Arraival for the Kids', 101, 'Quran', 'q4.png', 'Muslim, quran, Hadith, islam, mosque, kids, woman, man, religion, muslims'),
(18, 4, 6, 'Teach Your Kids Quran', 66, 'Muslim, quran, Hadith, islam, mosque, kids, woman, man, religion, muslims', 'q5.png', 'Muslim, quran, Hadith, islam, mosque, kids, woman, man, religion, muslims'),
(19, 4, 4, 'Digital Quran', 88, 'Muslim, quran, Hadith, islam, mosque, kids, woman, man, religion, muslims', 'q6.png', 'Muslim, quran, Hadith, islam, mosque, kids, woman, man, religion, muslims'),
(20, 4, 6, 'Easy To memorize', 65, 'Muslim, quran, Hadith, islam, mosque, kids, woman, man, religion, muslims', 'q6.png', 'Muslim, quran, Hadith, islam, mosque, kids, woman, man, religion, muslims'),
(21, 7, 6, 'Easy to Read', 78, 'Muslim, quran, Hadith, islam, mosque, kids, woman, man, religion, muslims', 'q7.png', 'Muslim, quran, Hadith, islam, mosque, kids, woman, man, religion, muslims'),
(22, 6, 5, 'Easy Reciatation', 91, 'Muslim, quran, Hadith, islam, mosque, kids, woman, man, religion, muslims', 'q8.png', 'Muslim, quran, Hadith, islam, mosque, kids, woman, man, religion, muslims'),
(23, 4, 4, 'Easy for Men', 120, 'Muslim, quran, Hadith, islam, mosque, kids, woman, man, religion, muslims', 'q9.png', 'Muslim, quran, Hadith, islam, mosque, kids, woman, man, religion, muslims'),
(24, 1, 1, 'Good Islamic book', 101, 'Muslim, quran, Hadith, islam, mosque, kids, woman, man, religion, muslims, islamic book, ', 'b1.png', 'Muslim, quran, Hadith, islam, mosque, kids, woman, man, religion, muslims, islamic book, '),
(25, 2, 2, 'Good Islamic book', 101, 'Muslim, quran, Hadith, islam, mosque, kids, woman, man, religion, muslims, islamic book, ', 'b2.png', 'Muslim, quran, Hadith, islam, mosque, kids, woman, man, religion, muslims, islamic book, '),
(26, 3, 3, 'Good Islamic book', 101, 'Muslim, quran, Hadith, islam, mosque, kids, woman, man, religion, muslims, islamic book, ', 'b3.png', 'Muslim, quran, Hadith, islam, mosque, kids, woman, man, religion, muslims, islamic book, '),
(27, 4, 4, 'Good Islamic book', 101, 'Muslim, quran, Hadith, islam, mosque, kids, woman, man, religion, muslims, islamic book, ', 'b4.png', 'Muslim, quran, Hadith, islam, mosque, kids, woman, man, religion, muslims, islamic book, '),
(28, 5, 5, 'Good Islamic book', 101, 'Muslim, quran, Hadith, islam, mosque, kids, woman, man, religion, muslims, islamic book, ', 'b5.png', 'Muslim, quran, Hadith, islam, mosque, kids, woman, man, religion, muslims, islamic book, '),
(29, 6, 6, 'Good Islamic book', 101, 'Muslim, quran, Hadith, islam, mosque, kids, woman, man, religion, muslims, islamic book, ', 'b6.png', 'Muslim, quran, Hadith, islam, mosque, kids, woman, man, religion, muslims, islamic book, '),
(30, 5, 4, 'Good Islamic book', 101, 'Muslim, quran, Hadith, islam, mosque, kids, woman, man, religion, muslims, islamic book, ', 'b7.png', 'Muslim, quran, Hadith, islam, mosque, kids, woman, man, religion, muslims, islamic book, '),
(31, 7, 5, 'Good Islamic book', 101, 'Muslim, quran, Hadith, islam, mosque, kids, woman, man, religion, muslims, islamic book, ', 'b8.png', 'Muslim, quran, Hadith, islam, mosque, kids, woman, man, religion, muslims, islamic book, '),
(32, 3, 3, 'Good Islamic book', 101, 'Muslim, quran, Hadith, islam, mosque, kids, woman, man, religion, muslims, islamic book, ', 'b3.png', 'Muslim, quran, Hadith, islam, mosque, kids, woman, man, religion, muslims, islamic book, '),
(33, 4, 4, 'Good Islamic book', 101, 'Muslim, quran, Hadith, islam, mosque, kids, woman, man, religion, muslims, islamic book, ', 'b4.png', 'Muslim, quran, Hadith, islam, mosque, kids, woman, man, religion, muslims, islamic book, '),
(34, 5, 5, 'Good Islamic book', 101, 'Muslim, quran, Hadith, islam, mosque, kids, woman, man, religion, muslims, islamic book, ', 'b5.png', 'Muslim, quran, Hadith, islam, mosque, kids, woman, man, religion, muslims, islamic book, '),
(35, 3, 3, 'Good Islamic book', 101, 'Muslim, quran, Hadith, islam, mosque, kids, woman, man, religion, muslims, islamic book, ', 'b8.png', 'Muslim, quran, Hadith, islam, mosque, kids, woman, man, religion, muslims, islamic book, '),
(36, 4, 4, 'Good Islamic book', 101, 'Muslim, quran, Hadith, islam, mosque, kids, woman, man, religion, muslims, islamic book, ', 'b9.png', 'Muslim, quran, Hadith, islam, mosque, kids, woman, man, religion, muslims, islamic book, '),
(37, 5, 5, 'Good Islamic book', 101, 'Muslim, quran, Hadith, islam, mosque, kids, woman, man, religion, muslims, islamic book, ', 'b1.png', 'Muslim, quran, Hadith, islam, mosque, kids, woman, man, religion, muslims, islamic book, '),
(38, 3, 3, 'Good Islamic book', 101, 'Muslim, quran, Hadith, islam, mosque, kids, woman, man, religion, muslims, islamic book, ', 'w1.png', 'Muslim, quran, Hadith, islam, mosque, kids, woman, man, religion, muslims, islamic book, '),
(39, 4, 4, 'Good Islamic book', 101, 'Muslim, quran, Hadith, islam, mosque, kids, woman, man, religion, muslims, islamic book, ', 'w2.png', 'Muslim, quran, Hadith, islam, mosque, kids, woman, man, religion, muslims, islamic book, '),
(40, 5, 5, 'Good Islamic book', 101, 'Muslim, quran, Hadith, islam, mosque, kids, woman, man, religion, muslims, islamic book, ', 'w3.png', 'Muslim, quran, Hadith, islam, mosque, kids, woman, man, religion, muslims, islamic book, '),
(41, 1, 1, 'Good Islamic book', 101, 'Muslim, quran, Hadith, islam, mosque, kids, woman, man, religion, muslims, islamic book, ', 'w6.png', 'Muslim, quran, Hadith, islam, mosque, kids, woman, man, religion, muslims, islamic book, '),
(42, 2, 2, 'Good Islamic book', 101, 'Muslim, quran, Hadith, islam, mosque, kids, woman, man, religion, muslims, islamic book, ', 'w5.png', 'Muslim, quran, Hadith, islam, mosque, kids, woman, man, religion, muslims, islamic book, '),
(43, 3, 3, 'Good Islamic book', 101, 'Muslim, quran, Hadith, islam, mosque, kids, woman, man, religion, muslims, islamic book, ', 'w4.png', 'Muslim, quran, Hadith, islam, mosque, kids, woman, man, religion, muslims, islamic book, '),
(44, 7, 5, 'Good Islamic book', 101, 'Muslim, quran, Hadith, islam, mosque, kids, woman, man, religion, muslims, islamic book, ', 'w10.png', 'Muslim, quran, Hadith, islam, mosque, kids, woman, man, religion, muslims, islamic book, '),
(45, 4, 6, 'Good Islamic book', 101, 'Muslim, quran, Hadith, islam, mosque, kids, woman, man, religion, muslims, islamic book, ', 'w9.png', 'Muslim, quran, Hadith, islam, mosque, kids, woman, man, religion, muslims, islamic book, '),
(46, 1, 5, 'Good Islamic book', 101, 'Muslim, quran, Hadith, islam, mosque, kids, woman, man, religion, muslims, islamic book, ', 'w8.png', 'Muslim, quran, Hadith, islam, mosque, kids, woman, man, religion, muslims, islamic book, ');

-- --------------------------------------------------------

--
-- Structure de la table `receive_payment`
--

CREATE TABLE `receive_payment` (
  `id` int(100) NOT NULL,
  `uid` int(100) NOT NULL,
  `pid` int(100) NOT NULL,
  `amount` int(100) NOT NULL,
  `trx_id` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `users_info`
--

CREATE TABLE `users_info` (
  `user_id` int(10) NOT NULL,
  `first_name` varchar(300) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `address1` varchar(300) NOT NULL,
  `address2` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users_info`
--

INSERT INTO `users_info` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `address1`, `address2`) VALUES
(1, 'Benya', 'Jamiu', 'shaffiyah1@gmail.com', '25f9e794323b453885f5181f1b624d0b', '1234567890', 'Yokohama 2003-06-19 ', 'Kanagawa-ken, Japan 203-100'),
(2, 'Benya', 'Jamiu', 'shaffiyah1@gmail.com', '25f9e794323b453885f5181f1b624d0b', '1234567890', 'Yokohama 2003-06-19 ', 'Kanagawa-ken, Japan 203-100'),
(3, 'Benya', 'Jamiu', 'shaffiyah1@gmail.com', '25f9e794323b453885f5181f1b624d0b', '1234567890', 'Yokohama 2003-06-19 ', 'Kanagawa-ken, Japan 203-100'),
(4, 'Benya', 'Jamiu', 'shaffiyah1@gmail.com', '25f9e794323b453885f5181f1b624d0b', '1234567890', 'Yokohama 2003-06-19 ', 'Kanagawa-ken, Japan 203-100'),
(5, 'Shaffiyah', 'Hirakawa', 'lawkeen@hotmail.com', '25f9e794323b453885f5181f1b624d0b', '1234567890', 'Yokohama 2003-06-19 ', 'Kanagawa-ken, Japan 203-100'),
(6, 'Shaffiyah', 'Hirakawa', 'lawkeen1@hotmail.com', '25f9e794323b453885f5181f1b624d0b', '1234567891', 'Yokohama 2003-06-19 ', 'Kanagawa-ken, Japan 203-100'),
(7, 'Aishah', 'Hirakawa', 'hirakawa@japan.jp', '25f9e794323b453885f5181f1b624d0b', '1234567898', 'Japan, Yokohama', 'Kanagawa-ken');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Index pour la table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Index pour la table `customer_order`
--
ALTER TABLE `customer_order`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Index pour la table `receive_payment`
--
ALTER TABLE `receive_payment`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users_info`
--
ALTER TABLE `users_info`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `customer_order`
--
ALTER TABLE `customer_order`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT pour la table `receive_payment`
--
ALTER TABLE `receive_payment`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `users_info`
--
ALTER TABLE `users_info`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
