-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2023 at 02:20 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dynamicportfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `banner_photo` varchar(255) NOT NULL,
  `about_photo` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `banner_photo`, `about_photo`, `name`) VALUES
(4, '4.png', '4.png', 'Sadekur Rahman');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=unread\r\n2=read'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `message`, `status`) VALUES
(1, 'Sadek', 'sadekur@gmail.com', 'I am in trouble ', 1),
(2, 'md. Sadekur Rahman', 'sadek14@cse.pstu.ac.bd', 'hey sadek how are you', 1);

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `passing_year` varchar(255) DEFAULT NULL,
  `progress` tinyint(4) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=active\r\n2=deactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `title`, `passing_year`, `progress`, `status`) VALUES
(1, 'SSC', '2014', 90, 1),
(2, 'HSC', '2016', 0, 1),
(4, 'Hons', '2022', 60, 1);

-- --------------------------------------------------------

--
-- Table structure for table `partner`
--

CREATE TABLE `partner` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=active\r\n2=delete\r\n'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `partner`
--

INSERT INTO `partner` (`id`, `name`, `logo`, `status`) VALUES
(6, '5box', '1064275585.png', 1),
(8, 'New Sun', '310753730.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `category` varchar(255) DEFAULT NULL,
  `featured_image` varchar(255) DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=active\r\n2=deactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `title`, `category`, `featured_image`, `thumbnail`, `description`, `status`) VALUES
(1, 'Design', 'art', '0.jpg', '0.jpg', 'Its a design from my article', 1),
(4, 'DynamicPortfolio', 'Web Development', '1667714576.jpg', '1667714576.jpg', 'Make a portfolio with pre made portfolio by use a dashboard', 1);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `summary` text NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `icon`, `summary`, `status`) VALUES
(1, 'Md. Sadekur Rahman', 'fab fa-facebook-f', 'Join me on Facebook', 'active'),
(2, 'Md. Sadekur Rahman', 'fab fa-linkedin', 'this is my linkedIn account', 'active'),
(3, 'Web Development', 'fab fa-react', 't is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. ', 'active'),
(4, 'PHP', 'fas fa-magic', 't is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. ', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(10) UNSIGNED NOT NULL,
  `websiteTitle` varchar(255) DEFAULT NULL,
  `headerLogo` varchar(255) DEFAULT NULL,
  `favIcon` varchar(255) DEFAULT NULL,
  `footerText` varchar(255) DEFAULT NULL,
  `about` varchar(255) DEFAULT NULL,
  `tagline` varchar(255) DEFAULT NULL,
  `office_adress` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `websiteTitle`, `headerLogo`, `favIcon`, `footerText`, `about`, `tagline`, `office_adress`, `email`, `phone`) VALUES
(15, 'Welcome to my web portfolio', '4.png', '4.png', 'Sadekur Rahman', 'Professional web developper in PHP and laravel\'s', 'Professional web developper', 'manikganj,1860', 'sk92@gmail.com', '01950850715'),
(16, 'Welcome to my web portfolio', '', '', 'Sadekur Rahman', 'Professional web developper in PHP and laravel\'s', 'Professional web developper', 'manikganj,1860', 'sk92', '01950850715'),
(17, 'Welcome to my portfolio', '4.png', '4.png', 'Sadekur Rahman', 'Professional web developper in PHP and laravel\'s', 'Professional web developper', 'manikganj,1860', 'sk92@gmail.com', '01950850715'),
(18, 'Welcome to my  portfolio', '4.png', '4.png', 'Sadekur Rahman', 'Professional web developper in PHP and laravel\'s', 'Professional web developper', 'manikganj,1860', 'sk92@gmail.com', '01950850715'),
(19, 'Welcome to my  portfolio', '', '', 'Sadekur Rahman', 'Professional web developper in PHP and laravel\'s', 'Professional web developper', 'manikganj,1860', 'sk92@gmail.com', '01950850715');

-- --------------------------------------------------------

--
-- Table structure for table `socials`
--

CREATE TABLE `socials` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `link` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `socials`
--

INSERT INTO `socials` (`id`, `name`, `icon`, `link`, `status`) VALUES
(1, 'sadek', 'fab fa-facebook', 'fb.com/sadek', 'active'),
(2, 'Sadek', 'fab fa-github', 'github/sadek00', 'active'),
(3, 'Sadek', 'fab fa-linkedin', 'linkedin/dsl', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'Primary key',
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=acitve 2=deactive ',
  `role` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=user 2=employee 3=admin',
  `profile_image` varchar(255) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `password`, `status`, `role`, `profile_image`) VALUES
(1, 'sadekur rahman sadek', 'sadekurrahman92@gmail.com', '$2y$10$TolvzrBakpkm9JQfnwSGMeZTJNUQ9CsRmQTsr2OCqQajwXzAi8Zs6', 2, 1, 'default.png'),
(2, 'Sonali akter', 'sonali.lalmatia1@gmail.com', '$2y$10$D0.e02OnMs8ROjBaJdnOI.ZybBc46gNyDHJOTVNsa8.kQD7joZm/O', 1, 1, 'default.png'),
(3, 'Sonali sorna', 'sonali.lalmatia2@gmail.com', '$2y$10$Pr1J6Xb3Z3VNGXy.DPZS0eP.FGrFQXM9P5v1aPbx/od84Bgx.ts7y', 1, 3, 'default.png'),
(4, 'Sadekur Rahman', 'sadekur@gmail.com', '$2y$10$zcUIpy1EUqMGQkNiE5d7Yub7CLMmjt/Auf1KMM5gI3sP9qhZ7obGm', 1, 1, '4.jpeg'),
(5, 'sadek92', 'sadekur1@gmail.com', '$2y$10$0fYuyHB/dXhKsr9raa08gucKWRhmyosI/yt4SXhEJoymRYeArcRGS', 1, 2, 'default.png'),
(6, 'sadek924', 'sadekur5@gmail.com', '$2y$10$Rt9djvUVcNpNUIoNkcMupu8F88AKoZpQ9xJfgYy99J5kmXt6mvMT2', 1, 1, 'default.png'),
(7, 'Sonali922', 'sadekur3@gmail.com', '$2y$10$pPSve4X7xxf0UXXGXAAime2qos.vPOuO8D4nDsi2FU9bsiJhSR2aG', 1, 1, 'default.png'),
(8, 'Sonali3', 'sadekur6@gmail.com', '$2y$10$Vtrafh.VPmkj2nJcwh79R.v31yhGOtpd4AjlUSWLrjbYZL4xP3cDO', 1, 1, 'default.png'),
(9, 'Sonali4', 'sadekur2@gmail.com', '$2y$10$CppMhyfNQ0mmSTFNVH4TPOYAOHt/KnLpA0X6sbZPO2ouXelYCjZwe', 1, 1, 'default.png'),
(10, 'Sonali akter65', 'sonali.lalmatia@gmail.com', '$2y$10$al5vRa9qriaMXSDubcgALe0R1D5/nGyjlHA7QhEmiahKUjNcsMva2', 1, 1, 'default.png'),
(11, 'sadekur', 'sadekur4@gmail.com', '$2y$10$qg6W6H7nuCZAM8bXYuA6dea8LNIJY72NOMr018qxIFwVV7By4C5hm', 1, 1, 'default.png'),
(12, 'akash', 'akash@gmail.com', '$2y$10$N5DM9sCh1aMgp2oDSL33s.3wLC0h9P98QdcnNDiivxPoUP73404f.', 2, 1, 'default.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `partner`
--
ALTER TABLE `partner`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `socials`
--
ALTER TABLE `socials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Primary key', AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
