-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2024 at 10:58 AM
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
-- Database: `fridge_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `ingredients`
--

CREATE TABLE `ingredients` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ingredients`
--

INSERT INTO `ingredients` (`id`, `name`) VALUES
(8, 'Basil'),
(16, 'Beef'),
(3, 'Bell Pepper'),
(1, 'Carrot'),
(10, 'Chicken Breast'),
(6, 'Cucumber'),
(17, 'Fish'),
(20, 'Honey'),
(11, 'Mozzarella Cheese'),
(4, 'Mushroom'),
(7, 'Olive Oil'),
(9, 'Oregano'),
(12, 'Parmesan Cheese'),
(13, 'Pasta'),
(2, 'Potato'),
(14, 'Rice'),
(18, 'Soy Sauce'),
(5, 'Spinach'),
(19, 'Vinegar'),
(15, 'Yogurt');

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `instructions` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`id`, `name`, `instructions`) VALUES
(1, 'Chicken Caesar Salad', '1. Cook the chicken. 2. Chop the lettuce and add to a bowl. 3. Add cooked chicken, croutons, and Caesar dressing. 4. Toss and serve.'),
(2, 'Vegetable Stir Fry', '1. Heat oil in a pan. 2. Add chopped vegetables and stir fry. 3. Add soy sauce and spices. 4. Serve with rice.'),
(3, 'Beef Tacos', '1. Cook the beef. 2. Warm the tortillas. 3. Add beef to tortillas and top with lettuce, cheese, and salsa.'),
(4, 'Spaghetti Bolognese', '1. Cook the pasta. 2. Prepare the Bolognese sauce with ground beef and tomatoes. 3. Mix pasta with sauce and serve with Parmesan cheese.'),
(5, 'Greek Yogurt Parfait', '1. Layer Greek yogurt, honey, and granola in a glass. 2. Add fresh fruit on top. 3. Serve chilled.'),
(6, 'Grilled Cheese Sandwich', '1. Butter the bread slices. 2. Add cheese between the bread slices. 3. Grill until golden brown.'),
(7, 'Chicken Alfredo Pasta', '1. Cook the pasta. 2. Prepare Alfredo sauce with cream and cheese. 3. Add cooked chicken. 4. Mix pasta with sauce and serve.'),
(8, 'Fish Tacos', '1. Cook the fish. 2. Warm the tortillas. 3. Add fish to tortillas and top with cabbage, lime, and salsa.'),
(9, 'Caprese Salad', '1. Slice tomatoes and mozzarella. 2. Layer them on a plate. 3. Drizzle with olive oil and balsamic vinegar. 4. Sprinkle with basil.'),
(10, 'Garlic Butter Shrimp', '1. Melt butter in a pan. 2. Add minced garlic and cook until fragrant. 3. Add shrimp and cook until pink. 4. Serve with lemon wedges.');

-- --------------------------------------------------------

--
-- Table structure for table `recipe_ingredients`
--

CREATE TABLE `recipe_ingredients` (
  `recipe_id` int(11) NOT NULL,
  `ingredient_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recipe_ingredients`
--

INSERT INTO `recipe_ingredients` (`recipe_id`, `ingredient_id`) VALUES
(1, 5),
(1, 6),
(1, 11),
(2, 7),
(2, 10),
(2, 12),
(2, 13),
(3, 3),
(3, 5),
(3, 17),
(4, 1),
(4, 7),
(4, 11),
(4, 19),
(5, 6),
(5, 13),
(5, 14),
(5, 20),
(6, 3),
(6, 4),
(6, 10),
(6, 11),
(7, 1),
(7, 2),
(7, 3),
(7, 18),
(8, 3),
(8, 4),
(8, 5),
(8, 15),
(9, 1),
(9, 11),
(9, 13),
(9, 15),
(10, 9),
(10, 13),
(10, 15),
(10, 20);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'user1', '7c6a180b36896a0a8c02787eeafb0e4c'),
(2, 'user2', '6cb75f652a9b52798eb6cf2201057c73'),
(3, 'user3', '819b0643d6b89dc9b579fdfc9094f28e');

-- --------------------------------------------------------

--
-- Table structure for table `user_fridge`
--

CREATE TABLE `user_fridge` (
  `user_id` int(11) NOT NULL,
  `ingredient_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ingredients`
--
ALTER TABLE `ingredients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `recipe_ingredients`
--
ALTER TABLE `recipe_ingredients`
  ADD PRIMARY KEY (`recipe_id`,`ingredient_id`),
  ADD KEY `ingredient_id` (`ingredient_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_fridge`
--
ALTER TABLE `user_fridge`
  ADD PRIMARY KEY (`user_id`,`ingredient_id`),
  ADD KEY `ingredient_id` (`ingredient_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ingredients`
--
ALTER TABLE `ingredients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `recipe_ingredients`
--
ALTER TABLE `recipe_ingredients`
  ADD CONSTRAINT `recipe_ingredients_ibfk_1` FOREIGN KEY (`recipe_id`) REFERENCES `recipes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `recipe_ingredients_ibfk_2` FOREIGN KEY (`ingredient_id`) REFERENCES `ingredients` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_fridge`
--
ALTER TABLE `user_fridge`
  ADD CONSTRAINT `user_fridge_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_fridge_ibfk_2` FOREIGN KEY (`ingredient_id`) REFERENCES `ingredients` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
