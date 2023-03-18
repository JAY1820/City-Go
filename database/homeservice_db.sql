-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2023 at 12:30 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homeservice_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `aid` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`aid`, `title`, `description`, `image`) VALUES
(1, 'Introduction Of Service Provider', 'Home service india\'s all city  based e-com Company, founded by group of aspirant with consideration to put the world in more comfort zone via weaving new ideas and implementing it at ground level.\n                                \n                                With an idea of “Smart Way Easy Life” Service Provider is home solution providing company. With Service Provider website you can book your desired home service like electrician, plumber, carpenter, cleaner, painter, AC repair, Washing machine repair, and so many other services which serve directly to your door step in your desired timeslot and on affordable prices. In this way Service Provider.in makes your life easy and full of comfort. Customer trust and safety is our profit so we have strict criteria for our vendors and supportive staff who are professionals and authenticated and verified by Police administration.\n                                \n                                We are available 24*7 to assist you any time anywhere.', 'a1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `ssid` int(11) NOT NULL,
  `city` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `provider_status` tinyint(4) NOT NULL,
  `sub_name` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `uid` int(11) NOT NULL,
  `booking_status` tinyint(4) NOT NULL,
  `visiting_price` varchar(200) NOT NULL,
  `Qty` int(11) NOT NULL,
  `bookingid` varchar(200) NOT NULL,
  `invoice` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bid`, `pid`, `sid`, `ssid`, `city`, `time`, `provider_status`, `sub_name`, `date`, `uid`, `booking_status`, `visiting_price`, `Qty`, `bookingid`, `invoice`) VALUES
(1, 11, 13, 3, 'VAPI', '10.00am - 11.00am', 4, 'PIPE', '2022-03-02', 24, 0, '#Estimate After inspection', 1, '111132022-03-09', 2),
(2, 11, 13, 3, 'VAPI', '10.00am - 11.00am', 4, 'PIPE', '2022-03-07', 0, 0, '#Estimate After inspection', 1, '111132022-03-09', 2),
(3, 11, 13, 3, 'VAPI', '10.00am - 11.00am', 4, 'PIPE', '2022-03-07', 0, 0, '#Estimate After inspection', 1, '111132022-03-09', 2),
(8, 11, 13, 3, 'VAPI', '10.00am - 11.00am', 4, 'PIPE', '2022-03-09', 1, 1, '#Estimate After inspection', 1, '111132022-03-09', 2),
(9, 11, 13, 3, 'VAPI', '10.00am - 11.00am', 4, 'PIPE', '2022-03-09', 1, 1, '#Estimate After inspection', 2, '111132022-03-09', 2),
(10, 11, 13, 3, 'VAPI', '10.00am - 11.00am', 4, 'PIPE', '2022-03-11', 1, 1, '#Estimate After inspection', 1, '111132022-03-11', 2),
(11, 11, 13, 3, 'VAPI', '10.00am - 11.00am', 4, 'PIPE', '2022-03-14', 1, 1, '#Estimate After inspection', 1, '111132022-03-14', 2),
(13, 11, 13, 3, 'VAPI', '10.00am - 11.00am', 4, 'PIPE', '2022-03-19', 1, 1, '#Estimate After inspection', 1, '111132022-03-19', 2),
(14, 11, 13, 3, 'VAPI', '10.00am - 11.00am', 4, 'PIPE', '2022-03-19', 1, 1, '#Estimate After inspection', 1, '111132022-03-19', 2),
(15, 11, 13, 3, 'VAPI', '10.00am - 11.00am', 4, 'PIPE', '2022-03-20', 1, 1, '#Estimate After inspection', 1, '111132022-03-20', 2),
(16, 11, 13, 3, 'VAPI', '10.00am - 11.00am', 4, 'PIPE', '2022-03-20', 1, 1, '#Estimate After inspection', 1, '111132022-03-20', 2),
(17, 11, 13, 3, 'VAPI', '10.00am - 11.00am', 4, 'PIPE', '2022-03-20', 1, 1, '#Estimate After inspection', 1, '111132022-03-20', 2),
(18, 11, 13, 3, 'VAPI', '10.00am - 11.00am', 4, 'NULL', '2022-03-20', 1, 1, '#Estimate After inspection', 1, '111132022-03-20', 2),
(19, 11, 13, 3, 'VAPI', '10.00am - 11.00am', 4, 'NULL', '2022-03-20', 1, 1, '#Estimate After inspection', 2, '111132022-03-20', 2),
(20, 11, 13, 3, 'VAPI', '10.00am - 11.00am', 4, 'NULL', '2022-03-20', 1, 1, '#Estimate After inspection', 1, '111132022-03-20', 2),
(21, 11, 13, 3, 'VAPI', '10.00am - 11.00am', 4, 'PIPE', '2022-03-20', 1, 1, '#Estimate After inspection', 4, '111132022-03-20', 2),
(22, 11, 13, 3, 'VAPI', '10.00am - 11.00am', 4, 'PIPE', '2022-03-20', 1, 1, '#Estimate After inspection', 3, '111132022-03-20', 2),
(23, 11, 13, 3, 'VAPI', '10.00am - 11.00am', 4, 'NULL', '2022-03-20', 1, 1, '#Estimate After inspection', 1, '111132022-03-20', 2),
(24, 11, 13, 3, 'VAPI', '10.00am - 11.00am', 4, 'NULL', '2022-03-20', 1, 1, '#Estimate After inspection', 2, '111132022-03-20', 2),
(25, 12, 15, 6, 'VAPI', '10.00am - 11.00am', 4, 'PIPE', '2022-03-20', 1, 1, '#Estimate After inspection', 1, '121152022-03-20', 2),
(26, 12, 15, 6, 'VAPI', '10.00am - 11.00am', 4, 'PIPE', '2022-03-20', 1, 1, '#Estimate After inspection', 1, '121152022-03-20', 2),
(27, 12, 15, 6, 'VAPI', '10.00am - 11.00am', 4, 'PIPE', '2022-03-21', 1, 1, '#Estimate After inspection', 1, '121152022-03-21', 2),
(28, 12, 15, 6, 'VAPI', '10.00am - 11.00am', 4, 'PIPE', '2022-03-21', 1, 1, '#Estimate After inspection', 2, '121152022-03-21', 2),
(29, 12, 15, 6, 'VAPI', '10.00am - 11.00am', 4, 'PIPE', '2022-03-21', 1, 1, '#Estimate After inspection', 1, '121152022-03-21', 2),
(31, 12, 15, 6, 'VAPI', '10.00am - 11.00am', 4, 'PIPE', '2022-03-23', 4, 1, '#Estimate After inspection', 1, '124152022-03-23', 2),
(32, 12, 15, 6, 'VAPI', '10.00am - 11.00am', 4, 'PIPE', '2022-03-26', 1, 1, '#Estimate After inspection', 2, '121152022-03-26', 2),
(33, 11, 13, 3, 'VAPI', '10.00am - 11.00am', 4, 'NULL', '2022-03-28', 1, 1, '#Estimate After inspection', 1, '111132022-03-28', 2),
(34, 14, 22, 14, 'VAPI', '10.00am - 11.00am', 4, 'FACE', '2022-04-01', 4, 1, '#Estimate After inspection', 1, '144222022-04-01', 2),
(35, 14, 22, 14, 'VAPI', '10.00am - 11.00am', 4, 'FACE', '2022-04-01', 5, 1, '#Estimate After inspection', 1, '145222022-04-01', 2),
(36, 14, 22, 14, 'VAPI', '10.00am - 11.00am', 4, 'FACE', '2022-04-03', 5, 1, '#Estimate After inspection', 1, '145222022-04-03', 2),
(38, 14, 22, 14, 'VAPI', '10.00am - 11.00am', 1, 'FACE', '2022-04-11', 5, 1, '#Estimate After inspection', 1, '145222022-04-11', 1);

-- --------------------------------------------------------

--
-- Table structure for table `city_mst`
--

CREATE TABLE `city_mst` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(50) NOT NULL,
  `city_state` varchar(50) NOT NULL,
  `status` tinyint(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `city_mst`
--

INSERT INTO `city_mst` (`city_id`, `city_name`, `city_state`, `status`) VALUES
(1, 'SURAT', 'GUJRAT', 1),
(2, 'KOLHAPUR', 'MAHARASHTRA', 1),
(3, 'ADILABAD', 'ANDHRA PRADESH', 1),
(4, 'VAPI', 'Gujrat', 1),
(5, 'VALSAD', 'GUJRAT', 0);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `cont_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` mediumtext NOT NULL,
  `pid` int(11) NOT NULL,
  `status` tinyint(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`cont_id`, `name`, `phone`, `email`, `message`, `pid`, `status`) VALUES
(1, 'amul', '9988770066', 'amul@gmail.com', 'I tried to book service in your site but dont know why i am unable to book.', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `description` varchar(250) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fid`, `uid`, `pid`, `description`, `date`, `status`) VALUES
(1, 1, 11, 'Nice work done by service guy.', '0000-00-00', 1),
(17, 4, 12, 'nice one', '0000-00-00', 1),
(18, 4, 14, 'The parlour girl deed nice work and my mom really liked it', '0000-00-00', 0),
(20, 4, 14, 'nice work done by lady', '0000-00-00', 0),
(32, 5, 14, 'very nice work', '0000-00-00', 0),
(34, 5, 14, 'just fantastic', '0000-00-00', 0),
(36, 5, 14, 'nice done', '2022-04-01', 0),
(39, 5, 14, 'test', '2022-04-01', 0),
(40, 5, 14, 'bahot hi acha kaam kiya gaya hai', '2022-04-04', 1);

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(11) NOT NULL,
  `bookingid` varchar(200) NOT NULL,
  `uid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `date` date NOT NULL,
  `invoicedate` date NOT NULL DEFAULT current_timestamp(),
  `visitingcharge` int(11) NOT NULL,
  `servicecharge` int(11) NOT NULL,
  `materialcost` int(11) NOT NULL,
  `totalsubservice` int(11) NOT NULL,
  `company` tinyint(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `bookingid`, `uid`, `pid`, `sid`, `date`, `invoicedate`, `visitingcharge`, `servicecharge`, `materialcost`, `totalsubservice`, `company`) VALUES
(1, '111132022-03-09', 1, 11, 13, '2022-03-09', '0000-00-00', 220, 200, 220, 640, 1),
(2, '111132022-03-09', 1, 11, 13, '2022-03-09', '0000-00-00', 220, 200, 100, 510, 1),
(3, '111132022-03-11', 1, 11, 13, '2022-03-11', '0000-00-00', 220, 0, 0, 0, 1),
(4, '111132022-03-14', 1, 11, 13, '2022-03-14', '0000-00-00', 220, 0, 0, 0, 1),
(5, '111132022-03-19', 1, 11, 13, '2022-03-19', '0000-00-00', 220, 0, 0, 0, 1),
(6, '111132022-03-19', 1, 11, 13, '2022-03-19', '0000-00-00', 220, 0, 0, 0, 1),
(7, '111132022-03-20', 1, 11, 13, '2022-03-20', '0000-00-00', 220, 0, 0, 0, 1),
(8, '111132022-03-20', 1, 11, 13, '2022-03-20', '0000-00-00', 220, 0, 0, 0, 1),
(9, '111132022-03-20', 1, 11, 13, '2022-03-20', '0000-00-00', 220, 0, 0, 0, 1),
(10, '111132022-03-20', 1, 11, 13, '2022-03-20', '0000-00-00', 220, 0, 0, 0, 1),
(11, '111132022-03-20', 1, 11, 13, '2022-03-20', '0000-00-00', 220, 0, 0, 0, 1),
(12, '111132022-03-20', 1, 11, 13, '2022-03-20', '0000-00-00', 220, 0, 0, 0, 1),
(13, '111132022-03-20', 1, 11, 13, '2022-03-20', '0000-00-00', 220, 0, 0, 0, 1),
(14, '111132022-03-20', 1, 11, 13, '2022-03-20', '0000-00-00', 220, 0, 0, 0, 0),
(15, '111132022-03-20', 1, 11, 13, '2022-03-20', '0000-00-00', 220, 0, 0, 0, 1),
(16, '111132022-03-20', 1, 11, 13, '2022-03-20', '0000-00-00', 220, 0, 0, 0, 1),
(17, '121152022-03-20', 1, 12, 15, '2022-03-20', '0000-00-00', 124, 0, 0, 0, 1),
(18, '121152022-03-20', 1, 12, 15, '2022-03-20', '0000-00-00', 124, 0, 0, 0, 1),
(19, '121152022-03-21', 1, 12, 15, '2022-03-21', '0000-00-00', 124, 1500, 2000, 0, 1),
(20, '121152022-03-21', 1, 12, 15, '2022-03-21', '0000-00-00', 124, 1500, 2000, 0, 1),
(21, '121152022-03-21', 1, 12, 15, '2022-03-21', '0000-00-00', 124, 1500, 2000, 0, 1),
(22, '124152022-03-23', 4, 12, 15, '2022-03-23', '0000-00-00', 124, 200, 120, 0, 1),
(23, '121152022-03-26', 1, 12, 15, '2022-03-26', '0000-00-00', 124, 300, 200, 624, 1),
(24, '111132022-03-28', 1, 11, 13, '2022-03-28', '0000-00-00', 220, 200, 200, 620, 1),
(25, '144222022-04-01', 4, 14, 22, '2022-04-01', '0000-00-00', 100, 200, 200, 500, 3),
(26, '145222022-04-01', 5, 14, 22, '2022-04-01', '0000-00-00', 100, 200, 100, 400, 3),
(27, '145222022-04-03', 5, 14, 22, '2022-04-03', '2022-04-03', 100, 150, 150, 400, 3),
(28, '145222022-04-11', 5, 14, 22, '2022-04-11', '2022-04-11', 100, 0, 0, 0, 0),
(29, '145222022-04-11', 5, 14, 22, '2022-04-11', '2022-04-11', 100, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `login_admin`
--

CREATE TABLE `login_admin` (
  `id` int(11) NOT NULL,
  `userid` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `city` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_admin`
--

INSERT INTO `login_admin` (`id`, `userid`, `password`, `name`, `phone`, `city`, `email`, `img`) VALUES
(1, 'amulpande', 'amul1234', 'AMUL', '9624980803', 'vapi', 'amul45@gmail.com', '938101.png'),
(2, 'jay18', 'jay1820', 'Jaymin valaki', '', 'vapi', 'iamjay1820@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `sid` int(11) NOT NULL,
  `s_name` varchar(500) NOT NULL,
  `description` mediumtext NOT NULL,
  `s_img` varchar(500) NOT NULL,
  `visiting_price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`sid`, `s_name`, `description`, `s_img`, `visiting_price`) VALUES
(12, 'CARPENTER', 'we are the best carpenter here you can find', 'carpenterwala.jpeg', '200'),
(13, 'PLUMBER', 'we are the best plumber and trying do our best to solve yout problem.', 'plumbingwala.jpg', '220'),
(15, 'AC REPAIR', 'Want to Repair AC or Remove but can not find the service guy, here we are.', 'acwala.jpeg', '124'),
(16, 'TV REPAIR', 'we are the best tv repair provider', 'tvrepairwala.jpg', '250'),
(17, 'PAINTER', 'We provide best painter for you', 'painterdude.jpg', '123'),
(22, 'PARLOUR', 'best parlour', 'parlourgirl.jpg', '100'),
(24, 'PEST-CONTROL', 'We Just help you clean your house free of insects', 'pest-control.jpg', '200');

-- --------------------------------------------------------

--
-- Table structure for table `service_detail`
--

CREATE TABLE `service_detail` (
  `ssid` int(11) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `sid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service_detail`
--

INSERT INTO `service_detail` (`ssid`, `c_name`, `sid`) VALUES
(1, 'REMOVAL', 12),
(2, 'REMOVAL', 13),
(3, 'INSTALLATION', 13),
(4, 'INSTALLATION', 12),
(5, 'REMOVAL', 15),
(6, 'INSTALLATION', 15),
(7, 'REMOVAL', 16),
(8, 'INSTALLATION', 16),
(9, 'PAINTING', 17),
(10, 'HAIRSPA', 23),
(11, 'HAIRCUT', 23),
(12, 'HAIRCOLOR', 23),
(13, 'SERVICE', 15),
(14, 'MAKEUP', 22),
(15, 'HAIR', 22),
(16, 'BED BUG ', 24),
(18, 'GENERAL PEST CONTROL', 24),
(19, 'HOME COLOR', 17),
(20, 'WALL', 17);

-- --------------------------------------------------------

--
-- Table structure for table `service_provider`
--

CREATE TABLE `service_provider` (
  `pid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `sid` int(11) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `address` varchar(300) NOT NULL,
  `city` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `pimg` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `short_bio` varchar(5000) NOT NULL,
  `experience` varchar(50) NOT NULL,
  `self` tinyint(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service_provider`
--

INSERT INTO `service_provider` (`pid`, `username`, `sid`, `pname`, `address`, `city`, `dob`, `gender`, `email`, `contact`, `pass`, `pimg`, `status`, `short_bio`, `experience`, `self`) VALUES
(1, 'jhondoe', 12, 'JHON DOE', 'Balitha Vapi', 'SURAT', '2001-09-12', 'male', 'jhondoe@gmail.com', '9988776655', '25d55ad283aa400af464c76d713c07ad', 'tvrepair.jpg', 2, 'Just doing my work', '2 year', 0),
(2, 'jhonny', 13, 'JHONNY', 'Balitha vapi', 'SURAT', '2012-10-27', 'male', 'jhonny@gmail.com', '9889766755', '12345678', 'reviewer-4.png', 2, 'just do the work', '3 year', 0),
(3, 'bravo123', 13, 'BRAVO', 'vapi', 'SURAT', '2022-02-03', 'male', 'bravo@gmail.com', '9898989898', 'bravo1234', 'referi (5).jpg', 2, 'nothing', '2 year', 0),
(4, 'justin', 15, 'JUSTIN', 'vapi', 'SURAT', '2022-02-06', 'male', 'justin@gmail.com', '987654321', '12345678', 'electric-geyser-repairing-service-250x250.jpg', 2, 'well', '3 year', 0),
(5, 'guts12', 12, 'GUTS', 'vapi', 'SURAT', '2022-02-04', 'male', 'guts12@gmail.com', '987654321', 'guts1234', 'tvrepair.jpg', 1, 'berserk', '4 year', 0),
(6, 'gutswa', 12, 'GUTSWA', 'wqewa', 'SURAT', '2022-02-11', 'male', 'asdhksa@gmail.com', '7868456484', '12345678', 'reviewer-4.png', 1, 'fsdd ', '2 year', 0),
(7, 'asdasd', 22, 'RWRW', '123123', 'SURAT', '2022-02-15', 'male', 'sadasd@g.com', '1232432245', '12345678', 'referi (5).jpg', 1, 'we', '1 year', 0),
(8, 'wqewqeq', 12, 'QWEQW', 'qwe', 'SURAT', '2022-02-10', 'male', 'okay@g.com', '23135160', '12345678', 'client_4.jpg', 2, 'qweqwasdadaddewfdf', '2 year', 0),
(9, 'okay', 12, 'OKAY', 'qew', 'SURAT', '2021-06-09', 'male', 'okay@g.co', '987654321', 'okayokay', 'client_2.jpg', 1, 'qwewqeqw', '2 year', 0),
(10, 'session12', 16, 'SESSION', '2', 'SURAT', '2019-06-06', 'male', 'okayqw@g.co', '1234567890', '12345678', 'eater (43).jpg', 0, 'asd', '2 year', 0),
(11, 'deeppatel', 13, 'DEEP PATEL', 'Balitha Vapi', 'VAPI', '2001-01-19', 'male', 'deep@gmail.com', '9898776655', 'deep1234', 'client_2.jpg', 1, 'Just doing my work peacfully', '1 year', 0),
(12, 'jaydeep', 15, 'JAYDEEP', 'Udwada', 'VAPI', '2001-02-14', 'male', 'jaydeep@gmail.com', '9898007766', 'jaydeep1234', 'acservice.jpg', 1, 'nothing to see here', '2 year', 0),
(13, 'bhavin12', 12, 'BHAVIN PANCHAL', 'Papolon Hotel', 'VAPI', '2001-01-17', 'male', 'bhavin@gmail.com', '9824889977', 'bhavin1234', 'team.jpg', 1, 'Lazy', '2 year', 0),
(14, 'shikha', 22, 'SHIKHA PANDE', 'balitha vapi', 'VAPI', '1998-05-01', 'female', 'shikha19@gmail.com', '9099897766', 'shikha1234', 'images11.jpg', 1, 'passionate about my work', '2 year', 0),
(15, 'manjit', 17, 'MANJIT', 'Annapurna residency', 'VAPI', '2000-02-17', 'male', 'manjit@gmail.com', '9807667788', 'manjit1234', 'home-theatre-tv-music-system.services.jfif', 0, 'likes movies', '1 year', 0),
(16, 'rudrapatel', 16, 'RUDRA', 'Annapurna residency', 'VAPI', '2000-02-25', 'male', 'rudra@gmail.com', '9807667787', 'rudra1234', 'microwave-oven-repair-services.jpg', 0, 'likes movies', '1 year', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sub_service`
--

CREATE TABLE `sub_service` (
  `sbid` int(11) NOT NULL,
  `ssid` int(11) NOT NULL,
  `sub_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sub_service`
--

INSERT INTO `sub_service` (`sbid`, `ssid`, `sub_name`) VALUES
(1, 3, 'PIPE'),
(2, 10, 'HAIRDRY'),
(3, 3, 'NULL'),
(4, 8, 'SCREEN'),
(5, 6, 'PIPE'),
(6, 14, 'FACE'),
(7, 14, 'EYE'),
(8, 4, 'DOOR'),
(9, 4, 'WOODEN STAIR'),
(10, 1, 'DOOR'),
(11, 15, 'SHAMPOO'),
(12, 15, 'HAIR COLOR'),
(13, 6, 'WINDOW AC'),
(14, 13, 'WINDOW AC'),
(15, 5, 'WINDOW AC'),
(16, 8, 'SCREEN'),
(17, 7, 'SCREEN'),
(18, 2, 'PIPE LEAKAGE');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `p_no` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `name`, `email`, `pass`, `p_no`, `address`, `img`) VALUES
(1, 'AMUL', 'amul@gmail.com', 'amul1234', '9988776655', 'balitha vapi', 'client_4.jpg'),
(4, 'RAJAT', 'rajat@gmail.com', 'rajat1234', '9904998877', 'chala', '3248551.jpg'),
(5, 'PRATEEK', 'prateek@gmail.com', 'prateek1234', '9987866655', 'Chala ', 'images-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE `userlogin` (
  `uid` int(11) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `uemail` varchar(60) NOT NULL,
  `uphoneno` varchar(50) NOT NULL,
  `upassword` varchar(20) NOT NULL,
  `ucpassword` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`uid`, `uname`, `uemail`, `uphoneno`, `upassword`, `ucpassword`) VALUES
(1, 'amul', 'amul@gmail.com', '', 'amul1234', 'amul1234'),
(2, 'amul12', 'amul1@gmail.com', '', '123', '123'),
(3, 'deep', 'deep@gmail.com', '', 'deep', 'deep'),
(4, 'deep12', 'deep12@gmail.com', '', 'deep1234', 'deep1234'),
(5, 'hello', 'hello1@gmail.com', '', 'hello', 'hello'),
(6, 'amul1223', 'amul1223@gmail.com', '', '1223', '1223'),
(7, 'bhaisab', 'bhaisab@gmail.com', '', '1234', '1234'),
(8, 'fund', 'fund1@gmail.com', '', 'funda', 'funda');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `city_mst`
--
ALTER TABLE `city_mst`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`cont_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_admin`
--
ALTER TABLE `login_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `service_detail`
--
ALTER TABLE `service_detail`
  ADD PRIMARY KEY (`ssid`),
  ADD KEY `sid` (`sid`);

--
-- Indexes for table `service_provider`
--
ALTER TABLE `service_provider`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `sub_service`
--
ALTER TABLE `sub_service`
  ADD PRIMARY KEY (`sbid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `userlogin`
--
ALTER TABLE `userlogin`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `city_mst`
--
ALTER TABLE `city_mst`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `cont_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `login_admin`
--
ALTER TABLE `login_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `service_detail`
--
ALTER TABLE `service_detail`
  MODIFY `ssid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `service_provider`
--
ALTER TABLE `service_provider`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `sub_service`
--
ALTER TABLE `sub_service`
  MODIFY `sbid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `userlogin`
--
ALTER TABLE `userlogin`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
