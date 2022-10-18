-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2022 at 05:43 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ajax_basics`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) UNSIGNED NOT NULL,
  `author` varchar(50) NOT NULL,
  `message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `author`, `message`) VALUES
(1, 'akaakahol tartor kingdom', 'Lorem ipsum, dolor sit amet consectetur \r\nadipisicing elit. Cumque necessitatibus asperiores'),
(2, 'ajon aondosoo victory', 'quasi dolorum cum enim culpa ab aperiam nihil amet,\r\neos iste odio, dicta, corporis nulla quaerat optio'),
(3, 'ajon abigail nguhilen', 'aliquam facere delectus ipsa provident? Officia, \r\nuos laborum! Repudiandae perspiciatis, voluptate'),
(4, 'pever luper collins', 'assumenda beatae perferendis nostrum nulla! Ab, \r\nconsequuntur soluta non beatae aspernatur ad doloremque'),
(5, 'shie paul aondohemba', 'doloribus neque illum odit nobis praesentium totam\r\nalias vero perferendis corrupti libero quam animi'),
(6, 'pahar barnabas aondonenge', 'asperiores quis autem iste voluptatum repellat! Possimus, \r\nconsequatur, laudantium deserunt natus aspernatur sed esse'),
(7, 'ahua fanen christopher', 'at quasi praesentium nisi qui voluptatibus neque laborum \r\nipsam error eveniet cumque! Sequi dolore, atque nihil \r\nrepellendus enim porro explicabo!'),
(8, 'abur daniel orhembaga', ''),
(9, 'iorngbough charles orjighjigh', 'Lorem ipsum, dolor sit amet consectetur \r\nadipisicing elit. Cumque necessitatibus asperiores');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
