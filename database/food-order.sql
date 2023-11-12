-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2023 at 09:58 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food-order`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `Password`) VALUES
(1, 'ghayour', 'ahmad');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) UNSIGNED NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `full_name`, `username`, `password`) VALUES
(1, 'Ghayour Ahmad', 'Ghayour', '81dc9bdb52d04dc20036dbd8313ed055'),
(2, 'Umar Zaman', 'stark_here', '81dc9bdb52d04dc20036dbd8313ed055'),
(3, 'ghayour', 'ahmad', '81dc9bdb52d04dc20036dbd8313ed055'),
(15, 'ahmad', 'ahmad', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `featured` varchar(10) NOT NULL,
  `active` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `title`, `image_name`, `featured`, `active`) VALUES
(22, 'Burger', 'Uploaded_images/1648474052burger.jpg', 'No', 'Yes'),
(23, 'Momo', 'Uploaded_images/1648474078momo.jpg', 'Yes', 'Yes'),
(24, 'Pizza', 'Uploaded_images/1648474216pizza.jpg', 'Yes', 'Yes'),
(25, 'Shwarma', 'Uploaded_images/1648474199menu-burger.jpg', 'Yes', 'Yes'),
(26, 'Email', 'Uploaded_images/1652170344ahmed-atef-8TzHYjGhzOw-unsplash.jpg', 'No', 'No'),
(27, 'lato', 'Uploaded_images/1658937628nn.jpg', 'Yes', 'Yes'),
(28, 'vhjhvh', 'Uploaded_images/1663243967martin-sanchez-G78c3DPmD_A-unsplash.jpg', 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Ghayour Ahmad', '', '', ''),
(2, 'Ghayour Ahmad', '', '', ''),
(3, 'Ghayour Ahmad', 'ghayoorahmad0@gmail.com', 'zama pa sar dard dy', 'dfghjkl'),
(4, 'umar', 'umarzaman@gmail.com', 'bad food item', 'der bekara dy ghayour special burger.'),
(5, 'Mansoor', 'Mansoor2@gmail.com', 'da she de bekara de yaar', 'mata zama paisy wapas ka zama ya ra naka');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_food`
--

CREATE TABLE `tbl_food` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image_name` varchar(200) NOT NULL,
  `category_id` int(11) NOT NULL,
  `featured` varchar(10) NOT NULL,
  `active` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_food`
--

INSERT INTO `tbl_food` (`id`, `title`, `description`, `price`, `image_name`, `category_id`, `featured`, `active`) VALUES
(10, 'Zinger Burger', 'Italian special, contains italian spices , capsicum, black olives , mashrooms, fried chicken, cheese.', '260.00', 'Uploaded_images/1648474327burger.jpg', 22, 'Yes', 'Yes'),
(11, 'Italian Special Pizza', 'Italian special, contains italian spices , capsicum, black olives , mashrooms, fried chicken, cheese.', '350.00', 'Uploaded_images/1648474412menu-pizza.jpg', 22, 'Yes', 'Yes'),
(12, 'Chicken Shwarma', 'Italian special, contains italian spices , capsicum, black olives , mashrooms, fried chicken, cheese.', '150.00', 'Uploaded_images/1648474511menu-pizza.jpg', 22, 'No', 'No'),
(13, 'Ghayour Special Burger', 'Italian special, contains italian spices , capsicum, black olives , mashrooms, fried chicken, cheese.', '210.00', 'Uploaded_images/1652170005wallpaperflare.com_wallpaper.jpg', 22, 'Yes', 'Yes'),
(14, 'rice', 'Da der yah e ao der zyat hwand kae.Meenga e e wht hru', '200.00', 'Uploaded_images/1658937679c.jpg', 27, 'Yes', 'Yes'),
(15, 'ggggg', 'Da der yah e ao der zyat hwand kae.Meenga e e wht hru', '220.00', 'Uploaded_images/1658938515c.jpg', 25, 'Yes', 'Yes'),
(16, 'jalees burger', 'Da der yah e ao der zyat hwand kae.Meenga e e wht hru', '200.00', 'Uploaded_images/1678010132sabri-tuzcu-wunVFNvqhfE-unsplash.jpg', 22, 'Yes', 'Yes'),
(17, 'M K special Pizza', 'deer maza kae da ', '1000.00', 'Uploaded_images/1682876570m k pizza.jpg', 24, 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(10) UNSIGNED NOT NULL,
  `food` varchar(150) NOT NULL,
  `price` varchar(255) NOT NULL,
  `qty` decimal(10,2) NOT NULL,
  `total` varchar(255) NOT NULL,
  `order_date` datetime NOT NULL,
  `status` varchar(50) NOT NULL,
  `customer_name` varchar(150) NOT NULL,
  `customer_contact` varchar(20) NOT NULL,
  `customer_email` varchar(150) NOT NULL,
  `customer_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `food`, `price`, `qty`, `total`, `order_date`, `status`, `customer_name`, `customer_contact`, `customer_email`, `customer_address`) VALUES
(3, 'Board Baza wala MoMo', '220.00', '1.00', '220', '2022-03-27 04:32:27', 'Delivered', 'Ghayour gammaryani yusafzae khattak marwat', '03131996095', 'shafiqqari@gmail.com', 'Village: Pushtoon garshi, Tehsil: Pabbi, district:Nowshera'),
(4, 'Board Baza wala MoMo', '220.00', '1.00', '220', '2022-03-28 04:23:17', 'Delivered', 'Ghayour gammaryani yusafzae khattak marwat', '03131996095', 'shafiqqari@gmail.com', 'Village: Pushtoon garshi, Tehsil: Pabbi, district:Nowshera'),
(7, 'Board Baza wala MoMo', '220.00', '1.00', '220', '2022-03-27 04:28:26', 'Dilivered', 'Ghayour gammaryani yusafzae khattak marwat', '03131996095', 'shafiqqari@gmail.com', 'Village: Pushtoon garshi, Tehsil: Pabbi, district:Nowshera'),
(9, 'Board Baza wala MoMo', '220.00', '1.00', '220', '2022-03-28 03:24:15', 'Delivered', 'Ghayour gammaryani yusafzae khattak ', '03131996095', 'AbuHamza@gmail.com', 'Village: Pushtoon garshi, Tehsil: Pabbi, district:Nowshera'),
(13, 'burger', '200.00', '1.00', '200', '2022-03-28 03:24:04', 'Delivered', 'Ghayour Ahmad', '03131996095', 'amnaahmad202@gmail.com', 'Village: Pushtoon garshi, Tehsil: Pabbi, district:Nowshera'),
(14, 'burger', '200.00', '1.00', '200', '2022-03-28 04:23:48', 'Cancelled', 'Ghayour Ahmad', '03131996095', 'amnaahmad202@gmail.com', 'Village: Pushtoon garshi, Tehsil: Pabbi, district:Nowshera'),
(15, 'burger', '200.00', '1.00', '200', '2022-03-28 07:02:13', 'Ordered', 'Ghayour Ahmad', '03131996095', 'amnaahmad202@gmail.com', 'Village: Pushtoon garshi, Tehsil: Pabbi, district:Nowshera'),
(16, 'burger', '200.00', '1.00', '200', '2022-03-28 04:23:37', 'On Delivery', 'Ghayour Ahmad', '03131996095', 'ghayoorahmad0@gmail.com', 'Village: Pushtoon garshi, Tehsil: Pabbi, district:Nowshera'),
(17, 'Zinger Burger', '260.00', '1.00', '260', '2022-03-28 07:04:32', 'Delivered', 'Ghayour Ahmad', '03131996095', 'ghayoorahmad0@gmail.com', 'Village: Pushtoon garshi, Tehsil: Pabbi, district:Nowshera'),
(18, 'Zinger Burger', '260.00', '1.00', '260', '2022-03-28 07:03:47', 'Ordered', 'Ghayour Ahmad', '03131996095', 'shafiq7c71@gmail.com', 'Village: Pushtoon garshi, Tehsil: Pabbi, district:Nowshera'),
(19, 'Zinger Burger', '260.00', '7.00', '1820', '2022-05-10 10:01:25', 'On Delivery', 'Ghayour Ahmad', '03131996095', 'adilshinwari00@gmail.com', 'Village: Pushtoon garshi, Tehsil: Pabbi, district:Nowshera'),
(20, 'Zinger Burger', '260.00', '2.00', '520', '2022-05-10 10:01:46', 'Cancelled', 'salman', '03131996095', 'salman0@gmail.com', 'room 120'),
(21, 'Zinger Burger', '260.00', '5.00', '1300', '2022-05-10 10:01:04', 'On Delivery', 'Ghayour Ahmad', '03131996095', 'ghayoorahmad0@gmail.com', 'hostel 7'),
(22, 'Ghayour Special Burger', '210.00', '3.00', '630', '2022-06-01 02:51:01', 'Cancelled', 'Ghayour Ahmad', '03', 'ghayoorahmad0@gmail.com', 'Village: Pushtoon garshi, Tehsil: Pabbi, district:Nowshera'),
(23, 'rice', '200.00', '3.00', '600', '2022-07-27 06:03:18', 'Delivered', 'Ghayour Ahmad', '03131996095', 'ghayoorahmad0@gmail.com', 'Village: Pushtoon garshi, Tehsil: Pabbi, district:Nowshera'),
(24, 'Zinger Burger', '260.00', '2.00', '520', '2022-09-14 11:45:22', 'Cancelled', 'sher khan', '03131996095', 'ghayoorahmad0@gmail.com', 'Village: Pushtoon garshi, Tehsil: Pabbi, district:Nowshera'),
(25, 'Zinger Burger', '260.00', '3.00', '780', '2023-03-05 10:57:19', 'Delivered', 'Ghayour Ahmad', '03131996095', 'ghayoorahmad0@gmail.com', 'Village: Pushtoon garshi, Tehsil: Pabbi, district:Nowshera'),
(26, 'Zinger Burger', '260.00', '2.00', '520', '2023-03-16 05:40:27', 'Delivered', 'Ghayour Ahmad', '908', 'ghayoorahmad0@gmail.com', 'Village: Pushtoon garshi, Tehsil: Pabbi, district:Nowshera'),
(27, 'M K special Pizza', '1000.00', '2.00', '2000', '2023-05-03 10:07:25', 'Delivered', 'Abdullah khan ', '03131996095', 'M.K@gmail.com', 'hostel 7');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_food`
--
ALTER TABLE `tbl_food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_food`
--
ALTER TABLE `tbl_food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
