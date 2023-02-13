-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2023 at 09:33 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `khobza`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'First post', 'alright this is the first post in this blog and I hope you enjoy it !', '2023-02-09 14:11:14', '2023-02-09 14:11:14'),
(2, 'Deserunt inventore voluptas at illum.', 'Sequi eum perferendis esse fugit quo voluptas repudiandae. Nihil sed aut et non. Beatae officiis officia facere temporibus officiis in. Hic magni et laboriosam adipisci temporibus asperiores totam. Rerum ratione possimus magni qui.', '2023-02-09 14:32:59', '2023-02-09 14:32:59'),
(3, 'Sapiente omnis illo beatae esse aut quidem.', 'Quos doloribus voluptas sapiente accusamus. Aut voluptatem enim quis qui. Facere sit mollitia voluptates ullam voluptates sed. Repellat dolor ab voluptatum doloribus neque. Assumenda neque et ut error sit quia. Voluptatem aliquid deleniti alias. Blanditiis qui alias cum autem.', '2023-02-09 14:32:59', '2023-02-09 14:32:59'),
(4, 'Labore ipsum omnis ipsam.', 'Unde sed sed fuga qui. Aut quia eius mollitia ipsa ipsa. Repudiandae velit corrupti quas maxime dolores pariatur voluptatem voluptatibus. Et officiis velit possimus architecto tempore ex. Ipsum ea ipsum perspiciatis dolores consequatur aut qui.', '2023-02-09 14:32:59', '2023-02-09 14:32:59'),
(5, 'Non neque facere iure delectus dolores.', 'Aliquam ipsum aut est necessitatibus neque ut. Quis ut modi enim sit vero quidem eveniet aut. Error vel similique quo maxime placeat quaerat. Iste quae expedita quis tempore assumenda. Enim quia reiciendis ullam provident eum nemo deleniti nam.', '2023-02-09 14:32:59', '2023-02-09 14:32:59'),
(6, 'Et minus quis suscipit mollitia aut cum explicabo.', 'Est omnis placeat aut dolor perferendis hic. Similique et ut eaque nisi qui. Dolore doloremque officia voluptate voluptate autem sunt. Placeat sequi accusamus non id vel unde.', '2023-02-09 14:32:59', '2023-02-09 14:32:59'),
(7, 'Voluptas omnis dolores vel error aspernatur dignissimos.', 'Quia consectetur sed blanditiis sint. Quaerat deleniti quia et sint dolor ipsam nesciunt. Commodi sunt distinctio expedita nemo temporibus. Omnis cum aut voluptates.', '2023-02-09 14:32:59', '2023-02-09 14:32:59'),
(8, 'Culpa tenetur blanditiis numquam ullam.', 'Natus praesentium libero explicabo occaecati quis voluptatem enim dolores. Voluptatem eveniet molestiae iusto illum iusto. Nobis dolores quo ut laboriosam nihil. Et quia labore illo et labore dicta sed. Sequi harum ad eligendi illo. Qui non totam expedita est. Est maxime aut delectus dolores corrupti non dolorum voluptas.', '2023-02-09 14:32:59', '2023-02-09 14:32:59'),
(9, 'Beatae et quidem optio fugit.', 'Blanditiis qui molestiae sit accusamus velit. Nesciunt perspiciatis aut voluptate et omnis quia. Nobis beatae assumenda iure vero quisquam placeat. Consequatur porro soluta est labore omnis. Ut in libero sit.', '2023-02-09 14:32:59', '2023-02-09 14:32:59'),
(10, 'Est harum aut dolor magni adipisci tempore.', 'Eos distinctio voluptate aliquid ipsam neque qui. Sed possimus consequatur ab ut quas. Aut voluptatum quia voluptatum dolores quis. Dolor illum doloremque adipisci aut soluta et tempora exercitationem. Sint iste enim sit magnam qui ducimus.', '2023-02-09 14:32:59', '2023-02-09 14:32:59'),
(11, 'Sunt vel iusto asperiores aut.', 'Inventore voluptatem quae temporibus ab. Ex eius voluptatum cum odit. Voluptas sit dignissimos placeat quis. In sunt nihil ad itaque.', '2023-02-09 14:32:59', '2023-02-09 14:32:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
