-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2025 at 03:23 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `id` int(10) UNSIGNED NOT NULL,
  `user` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `stock` int(10) UNSIGNED NOT NULL,
  `category` varchar(100) DEFAULT NULL,
  `size` varchar(10) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`id`, `user`, `name`, `price`, `image`, `description`, `stock`, `category`, `size`, `created_at`) VALUES
(1, 'viswaaa', 'Noir Evening Dress', 2000.00, '1757563652_second-one.png', 'Step into the night with the timeless elegance of our Noir Evening Dress. Crafted from luxurious, flowing fabric, this dress embodies sophistication and grace.', 20, 'Women', 'Medium', '2025-09-12 17:15:06'),
(2, 'viswa11', 'Midnight Suit', 2500.00, '1757563291_second-two.png', 'Step into sophistication with the Midnight Suit, a masterpiece of timeless fashion crafted for the modern gentleman.', 30, 'Men', 'Medium', '2025-09-12 17:28:39'),
(3, 'check', 'Leather Collection', 1000.00, '1757568158_second-three.png', 'Experience timeless elegance and durability with our Leather Collection. Crafted from premium quality leather, each piece combines luxury with everyday functionality.', 20, 'Accessory', 'Medium', '2025-09-13 01:27:38'),
(4, 'checker', 'Noir Evening Dress', 9500.00, '1757563652_second-one.png', 'Step into the night with the timeless elegance of our Noir Evening Dress. Crafted from luxurious, flowing fabric, this dress embodies sophistication and grace.', 20, 'Women', 'Medium', '2025-09-13 01:31:34'),
(5, 'tester', 'Noir Evening Dress', 2000.00, '1757563652_second-one.png', 'Step into the night with the timeless elegance of our Noir Evening Dress. Crafted from luxurious, flowing fabric, this dress embodies sophistication and grace.', 20, 'Women', 'Small', '2025-09-13 01:48:03'),
(6, 'viswaaa', 'Noir Evening Dress', 7000.00, '1757563652_second-one.png', 'Step into the night with the timeless elegance of our Noir Evening Dress. Crafted from luxurious, flowing fabric, this dress embodies sophistication and grace.', 20, 'Women', 'Large', '2025-09-13 05:33:41'),
(7, 'viswa11', 'Midnight Suit', 2500.00, '1757563291_second-two.png', 'Step into sophistication with the Midnight Suit, a masterpiece of timeless fashion crafted for the modern gentleman.', 30, 'Men', 'Medium', '2025-09-16 04:03:16'),
(8, 'check', 'Leather Collection', 3500.00, '1757745140_second-three.png', 'Experience timeless elegance and durability with our Leather Collection. Crafted from premium quality leather, each piece combines luxury with everyday functionality.', 20, 'Accessory', 'Medium', '2025-09-18 12:53:50'),
(9, 'checker', 'Violet Whisper', 5500.00, '1758202768_purpleper.jpg', 'Step into allure with Violet Whisper, a perfume that embodies mystery, elegance, and charm. Infused with floral notes of lavender and iris, balanced by a soft touch of musk and vanilla, this fragrance wraps you in a sophisticated aura.', 10, 'Accessory', 'Large', '2025-09-19 05:15:01'),
(10, 'tester', 'Amber Essence', 39502.00, '1758202711_brownper.jpg', 'Experience warmth and depth with Amber Essence, a fragrance that captures the richness of earthy tones and timeless allure.', 10, 'Accessory', 'Large', '2025-09-19 13:11:58'),
(21, 'newUser', 'Azure Essence ', 1500.00, '1758285672_men-4.avif', 'Azure Essence is crafted for those who carry confidence with effortless charm. The fragrance opens with sparkling citrus notes, layered with crisp marine accords that evoke the calm of the ocean.', 20, 'Accessory', 'Small', '2025-10-03 13:54:27'),
(22, 'viswa11', 'Violet Whisper', 5500.00, '1758202768_purpleper.jpg', 'Step into allure with Violet Whisper, a perfume that embodies mystery, elegance, and charm. Infused with floral notes of lavender and iris, balanced by a soft touch of musk and vanilla, this fragrance wraps you in a sophisticated aura.', 10, 'Accessory', 'Medium', '2025-10-10 13:41:17'),
(23, 'viswa11', 'Azure Essence ', 5500.00, '1758285672_men-4.avif', 'Azure Essence is crafted for those who carry confidence with effortless charm. The fragrance opens with sparkling citrus notes, layered with crisp marine accords that evoke the calm of the ocean.', 20, 'Accessory', 'Medium', '2025-10-13 13:30:13'),
(24, 'viswa11', 'Noir Evening Dress', 24500.00, '1757563652_second-one.png', 'Step into the night with the timeless elegance of our Noir Evening Dress. Crafted from luxurious, flowing fabric, this dress embodies sophistication and grace.', 20, 'Women', 'Medium', '2025-10-22 13:50:05'),
(25, 'viswa11', 'Azure Essence  ', 3500.00, '1761141369_1758285672_men-4.avif', 'Azure Essence is crafted for those who carry confidence with effortless charm. The fragrance opens with sparkling citrus notes, layered with crisp marine accords that evoke the calm of the ocean.', 20, 'Accessory', 'Large', '2025-10-22 13:56:31'),
(26, 'viswa11', 'Noir Evening Dress', 12000.00, '1757563652_second-one.png', 'Step into the night with the timeless elegance of our Noir Evening Dress. Crafted from luxurious, flowing fabric, this dress embodies sophistication and grace.', 20, 'Women', 'Medium', '2025-10-23 13:01:04');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `message`, `created_at`) VALUES
(1, 'White Karthiga', 'viswa28@gmail.com', 'this this is testthis is testthis is testthis is testthis is testis test', '2025-09-11 10:21:55'),
(23, 'viswa', 'viswa28@gmail.com', 'this is testing this is testing   this is testingthis is testingthis is testingthis is testing', '2025-09-11 13:34:47'),
(24, 'testtest', 'viswa11@gmail.com', 'abebeabadahahahdhahashcfgvhbjnkml', '2025-09-13 05:34:44'),
(25, 'testtest', 'viswa11@gmail.com', 'abebeabadahahahdhahashcfgvhbjnkml', '2025-09-13 05:46:43'),
(26, 'viswa', 'test@gmail.com', 'admamffenanenewoeowoewjjewiojewiojfewojewojewoiewj', '2025-09-18 12:59:03'),
(27, 'viswa', 'viswa@gmail.com', 'this is testing this is testing this is testing this is testing', '2025-09-19 05:53:43'),
(28, 'viswa', 'viswa@gmail.com', 'this is testing this is testing this is testing this is testing', '2025-09-19 05:53:54'),
(29, 'ksadk', 'viswa28@gmail.com', 'this is testing this is testing this is testing this is testing', '2025-09-19 13:11:14'),
(30, 'ram', 'wsa243rw@gmail.com', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', '2025-09-20 05:10:48'),
(31, 'web checker', 'webchecker@gmail.con', '41298374012whfhadsfhp', '2025-09-30 14:10:05'),
(32, 'Checking', 'checking@gmail.com', 'sj zfaxamf asnkcf sajd lm', '2025-09-30 14:12:10'),
(33, 'viswa', 'viswa@gmail.com', 'testingtestingtestingtestingtestingtestingtesting', '2025-10-10 13:42:15'),
(34, 'viswa', 'viswa@gmail.com', 'testingtestingtestingtestingtestingtestingtesting', '2025-10-10 13:46:39'),
(35, 'White Karthiga', 'test@gmail.com', 'testingtestingtestingtestingtestingtestingtestingtesting', '2025-10-10 13:51:29'),
(36, 'White Karthiga', 'test@gmail.com', 'testingtestingtestingtestingtestingtestingtestingtesting', '2025-10-10 13:56:48');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` enum('Men','Women','Accessory') NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `stock` int(11) NOT NULL DEFAULT 0,
  `testimonial` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category`, `image`, `description`, `price`, `stock`, `testimonial`, `created_at`) VALUES
(1, 'Midnight Suit Testing', 'Men', '1757563291_second-two.png', 'Step into sophistication with the Midnight Suit, a masterpiece of timeless fashion crafted for the modern gentleman.', 3000.00, 30, '', '2025-09-11 04:01:31'),
(7, 'Noir Evening Dress', 'Women', '1757563652_second-one.png', 'Step into the night with the timeless elegance of our Noir Evening Dress. Crafted from luxurious, flowing fabric, this dress embodies sophistication and grace.', 2500.00, 20, '', '2025-09-11 04:07:32'),
(8, 'Leather Collection', 'Accessory', '1758203047_second-three.png', 'Experience timeless elegance and durability with our Leather Collection. Crafted from premium quality leather, each piece combines luxury with everyday functionality.', 2000.00, 20, '', '2025-09-11 04:16:22'),
(12, 'Royal Amethyst Trench', 'Men', '1758202419_purplecoat.jpg', 'Unveil your bold sophistication with the Royal Amethyst Trench, a striking blend of luxury and confidence. Crafted in a rich purple hue, this coat radiates elegance while keeping you warm and comfortable.', 2000.00, 20, '', '2025-09-18 13:33:39'),
(13, 'Emerald Noir Overcoat', 'Men', '1758202471_darkgreencoat.jpg', 'Embrace refined sophistication with the Emerald Noir Overcoat, a timeless piece designed in a deep, dark green shade that exudes quiet luxury.', 2000.00, 20, '', '2025-09-18 13:34:31'),
(14, 'Ebon Grace Gown', 'Women', '1758202528_blackgirl.jpg', 'Channel timeless elegance with the Ebon Grace Gown, a stunning all-black full-length dress designed for sophistication and charm', 3000.00, 40, '', '2025-09-18 13:35:28'),
(15, 'Obsidian Charm Gown', 'Women', '1758202608_halfblack.jpg', 'Turn heads with the Obsidian Charm Gown, a striking half-black ensemble that blends modern flair with timeless elegance', 3000.00, 10, '', '2025-09-18 13:36:48'),
(16, 'Crimson Noir Dress', 'Women', '1758202665_blackred.jpg', 'Make a bold statement with the Crimson Noir Dress, a stunning fusion of fiery red and classic black. Designed with a sleek, figure-flattering silhouette, this dress exudes confidence and allure.', 3000.00, 10, '', '2025-09-18 13:37:45'),
(17, 'Amber Essence', 'Accessory', '1758202711_brownper.jpg', 'Experience warmth and depth with Amber Essence, a fragrance that captures the richness of earthy tones and timeless allure.', 2000.00, 10, '', '2025-09-18 13:38:31'),
(18, 'Violet Whisper', 'Accessory', '1758202768_purpleper.jpg', 'Step into allure with Violet Whisper, a perfume that embodies mystery, elegance, and charm. Infused with floral notes of lavender and iris, balanced by a soft touch of musk and vanilla, this fragrance wraps you in a sophisticated aura.', 2000.00, 10, '', '2025-09-18 13:39:28'),
(20, 'Azure Essence  ', 'Accessory', '1761141369_1758285672_men-4.avif', 'Azure Essence is crafted for those who carry confidence with effortless charm. The fragrance opens with sparkling citrus notes, layered with crisp marine accords that evoke the calm of the ocean.', 2000.00, 20, '', '2025-09-19 12:41:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('super_admin','admin','user') NOT NULL DEFAULT 'user',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `created_at`) VALUES
(1, 'viswaaa', 'viswa@gmail.com', '$2y$10$pY47OacuufSpobCZEZ4X3.jxTIoXznXngTsgl2xWh6mG7HoaMcBCC', 'super_admin', '2025-09-11 02:02:31'),
(15, 'check', 'test123@gmail.com', '$2y$10$75JW8hrsiWqYuRC5lqL1ruzuVLoukgXk5hGS4mvKSI/oLdYWcdQNi', 'user', '2025-09-19 13:17:05'),
(16, 'checker', 'checker@gmail.com', '$2y$10$gRoSmWYbrtm.J1dRQcW05.wx0giOox8/6/nZRLegtE4HfAtfCHQ0.', 'user', '2025-09-19 14:03:49'),
(17, 'tester', 'tester@gmail.com', '$2y$10$cuxeaj3Rq74qjcYbb1PjvuSCmKYmCFBgWheSQemH6kTWamTJ6WtqG', 'user', '2025-09-20 05:13:33'),
(18, NULL, 'admin@gmail.com', '$2y$10$c.yeYKJWRXq.IAL4EoOe5OECq47OoRMZlAoep7gYxhUNYdUX3oboO', 'admin', '2025-09-23 13:11:30'),
(20, 'jk', 'jk@gmail.com', '$2y$10$FxSBMIqgYkKrRog.6Fl.Gemz50OxqAlQw40D0MYMCsDrFjcDN.z46', 'user', '2025-09-30 14:14:02'),
(21, 'newUser', 'newUser@gmail.com', '$2y$10$BUp6/ZeHhO8UuKFBs2s5V.D4JsBvNlh62sfqogtBg8mtTX.fl3TYe', 'user', '2025-10-03 13:10:55'),
(22, NULL, 'viswa', '$2y$10$NDd3K9zDMpe8YJ7DGoCWoOUPg5j/YvaJM0lgXryYQ4D6xbRYY.VGy', 'admin', '2025-10-10 13:44:26'),
(23, 'viswa11', 'viswa28@gmail.com', '$2y$10$rinEG53Aq0IGHgnq76xjT.BNrWNMGZlvhZyZesNM8CEOndUfCICM.', 'user', '2025-10-22 12:49:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
