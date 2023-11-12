-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2022 at 04:37 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

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
(3, 'ghayour', 'ahmad', '81dc9bdb52d04dc20036dbd8313ed055');

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
(22, 'Burgers', 'Uploaded_images/1648474052burger.jpg', 'Yes', 'Yes'),
(23, 'Momo', 'Uploaded_images/1648474078momo.jpg', 'Yes', 'Yes'),
(24, 'Pizza', 'Uploaded_images/1648474216pizza.jpg', 'Yes', 'Yes'),
(25, 'Shwarma', 'Uploaded_images/1648474199menu-burger.jpg', 'Yes', 'Yes');

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
(3, 'Ghayour Ahmad', 'ghayoorahmad0@gmail.com', 'zama pa sar dard dy', 'dfghjkl');

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
(10, 'Zinger Burger', 'Da der kha shy dy. Ao seven eleven ke der Zabrdast melawegi.', '260.00', 'Uploaded_images/1648474327burger.jpg', 22, 'Yes', 'Yes'),
(11, 'Italian Special Pizza', 'Da der garm  e ao der zyat hwand kae.Meenga e kala kala khru', '350.00', 'Uploaded_images/1648474412menu-pizza.jpg', 22, 'Yes', 'Yes'),
(12, 'Chicken Shwarma', 'Da der kha shy dy. Ao Italian Pizza Hut  ke der Zabrdast melawegi.', '150.00', 'Uploaded_images/1648474511menu-pizza.jpg', 25, 'Yes', 'Yes');

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
(2, 'Board Baza wala MoMo', '220.00', '1.00', '220', '2022-03-27 04:37:27', 'Dilivered', 'Ghayour gammaryani yusafzae khattak marwat', '03131996095', 'shafiqqari@gmail.com', 'Village: Pushtoon garshi, Tehsil: Pabbi, district:Nowshera'),
(3, 'Board Baza wala MoMo', '220.00', '1.00', '220', '2022-03-27 04:32:27', 'Delivered', 'Ghayour gammaryani yusafzae khattak marwat', '03131996095', 'shafiqqari@gmail.com', 'Village: Pushtoon garshi, Tehsil: Pabbi, district:Nowshera'),
(4, 'Board Baza wala MoMo', '220.00', '1.00', '220', '2022-03-28 04:23:17', 'Delivered', 'Ghayour gammaryani yusafzae khattak marwat', '03131996095', 'shafiqqari@gmail.com', 'Village: Pushtoon garshi, Tehsil: Pabbi, district:Nowshera'),
(7, 'Board Baza wala MoMo', '220.00', '1.00', '220', '2022-03-27 04:28:26', 'Dilivered', 'Ghayour gammaryani yusafzae khattak marwat', '03131996095', 'shafiqqari@gmail.com', 'Village: Pushtoon garshi, Tehsil: Pabbi, district:Nowshera'),
(9, 'Board Baza wala MoMo', '220.00', '1.00', '220', '2022-03-28 03:24:15', 'Delivered', 'Ghayour gammaryani yusafzae khattak ', '03131996095', 'AbuHamza@gmail.com', 'Village: Pushtoon garshi, Tehsil: Pabbi, district:Nowshera'),
(13, 'burger', '200.00', '1.00', '200', '2022-03-28 03:24:04', 'Delivered', 'Ghayour Ahmad', '03131996095', 'amnaahmad202@gmail.com', 'Village: Pushtoon garshi, Tehsil: Pabbi, district:Nowshera'),
(14, 'burger', '200.00', '1.00', '200', '2022-03-28 04:23:48', 'Cancelled', 'Ghayour Ahmad', '03131996095', 'amnaahmad202@gmail.com', 'Village: Pushtoon garshi, Tehsil: Pabbi, district:Nowshera'),
(15, 'burger', '200.00', '7.00', '1400', '2022-03-27 04:41:39', 'Delivered', 'Ghayour Ahmad', '03131996095', 'amnaahmad202@gmail.com', 'Village: Pushtoon garshi, Tehsil: Pabbi, district:Nowshera'),
(16, 'burger', '200.00', '1.00', '200', '2022-03-28 04:23:37', 'On Delivery', 'Ghayour Ahmad', '03131996095', 'ghayoorahmad0@gmail.com', 'Village: Pushtoon garshi, Tehsil: Pabbi, district:Nowshera');

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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_food`
--
ALTER TABLE `tbl_food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
