-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 10, 2021 at 06:24 AM
-- Server version: 5.7.34
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `local_idm232`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `id` int(11) NOT NULL,
  `image` longblob NOT NULL,
  `title` varchar(250) NOT NULL,
  `category` varchar(250) NOT NULL,
  `make_time` varchar(250) NOT NULL,
  `ingredients` varchar(5000) NOT NULL,
  `steps` varchar(10000) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`id`, `image`, `title`, `category`, `make_time`, `ingredients`, `steps`, `date_created`, `date_updated`) VALUES
(36, '', 'Banana Bread', 'Dessert', '1 hour 30 minutes', '<p>Makes 1 (9- by 5-inch) loaf (about 12 servings)</p>\r\n<p>1 2/3 cups all-purpose flour, plus additional flour for dusting pan</p>\r\n<p>1 teaspoon baking powder</p>\r\n<p>1/2 teaspoon baking soda</p>\r\n<p>1/2 teaspoon salt</p>\r\n<p>1 cup mashed ripe banana (about 2 large or 3 medium bananas)</p>\r\n<p>3 tablespoons sour cream</p>\r\n<p>1 teaspoon pure vanilla extract</p>\r\n<p>8 tablespoons (1 stick) unsalted butter, at room temperature, plus additional butter for greasing pan</p>\r\n<p>1 cup sugar</p>\r\n<p>1 large egg, at room temperature</p>', '<p><strong>Step 1</strong></p>\r\n<p>Position a rack in the lower third of the oven and preheat to 350&deg;F. Butter the bottom and sides of 1 (9- by 5- by 3-inch) loaf pan and dust with flour.</p>\r\n<p><strong>Step 2</strong></p>\r\n<p>In a large bowl, sift together the flour, baking powder, baking soda, and salt.</p>\r\n<p><strong>Step 3</strong></p>\r\n<p>In a medium bowl, combine the banana, sour cream, and vanilla and stir to combine.</p>\r\n<p><strong>Step 4</strong></p>\r\n<p>In the bowl of a stand mixer fitted with the paddle attachment, combine the butter and sugar and beat on medium until light and fluffy, about 3 minutes. Add the egg and beat on medium until completely incorporated, about 1 minute. Add the banana mixture and beat for about 30 seconds. Add the flour mixture in 2 batches, and stir on low until just incorporated, about 30 seconds total. Add the nuts or chocolate chips, if desired, and use a rubber spatula to fold them into the batter.</p>\r\n<p><strong>Step 5</strong></p>\r\n<p>Spoon the batter into the prepared pan and smooth the top. Bake until a wooden toothpick inserted in the center of the loaf emerges clean and when you press gently in the center of the loaf, it springs back without leaving an impression, 45 to 50 minutes. Transfer to a wire rack to let cool for 10 to 15 minutes then gently tap the pan on the countertop to help release the loaf. Place a second rack or a large plate on top of the loaf, invert, and then carefully remove the pan. Use the original rack to invert the loaf again so that it\'s right side up then let cool completely before cutting and serving. DO AHEAD: Banana bread can be baked ahead, cooled completely, and kept, wrapped in plastic wrap, up to 2 days, or frozen, wrapped in plastic wrap and foil, up to 3 months.</p>', '2021-12-09 22:44:51', '2021-12-09 22:56:36'),
(37, '', 'Eggs', 'breakfast', '10 minutes', '<p>1 Egg</p>', '<p>Fry egg</p>', '2021-12-10 03:28:10', '2021-12-10 03:28:10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(250) NOT NULL,
  `last_name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
