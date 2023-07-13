-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 26, 2023 at 10:19 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--
CREATE DATABASE db;

USE db;

-- Create the 'hotel' table
CREATE TABLE hotel (
  id INT PRIMARY KEY AUTO_INCREMENT,
  hotel_name VARCHAR(100) NOT NULL,
  hotel_type VARCHAR(50) NOT NULL,
  facilities TEXT,
  status ENUM('active', 'inactive') NOT NULL,
  description TEXT
);

CREATE TABLE image (
  id INT PRIMARY KEY AUTO_INCREMENT,
  hotel_id INT,
  image_path VARCHAR(255) NOT NULL,
  FOREIGN KEY (hotel_id) REFERENCES hotel(id) ON DELETE CASCADE
);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hotel`
--

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
