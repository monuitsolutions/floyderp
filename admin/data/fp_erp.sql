-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2023 at 01:25 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fp_erp`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_group`
--

CREATE TABLE `add_group` (
  `group_sno` int(11) NOT NULL,
  `group_name` varchar(256) NOT NULL,
  `group_timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `group_users_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_group`
--

INSERT INTO `add_group` (`group_sno`, `group_name`, `group_timestamp`, `group_users_id`) VALUES
(1, 'oil', '2023-11-30 08:05:08', 1),
(2, 'dry', '2023-11-30 08:05:08', 1),
(3, 'raw-material', '2023-11-30 08:31:47', 22),
(4, 'operator', '2023-11-30 12:17:52', 1);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employee_sno` int(11) NOT NULL,
  `employee_name` varchar(256) NOT NULL,
  `employee_phone` varchar(20) NOT NULL,
  `employee_address` varchar(256) NOT NULL,
  `employee_email` varchar(56) NOT NULL,
  `employee_father` varchar(256) NOT NULL,
  `employee_post` int(11) DEFAULT NULL,
  `employee_pan_no` varchar(56) NOT NULL,
  `employee_timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `employee_users_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_sno`, `employee_name`, `employee_phone`, `employee_address`, `employee_email`, `employee_father`, `employee_post`, `employee_pan_no`, `employee_timestamp`, `employee_users_id`) VALUES
(1, 'abc', '92xxxxxxxx', 'agra', 'ak@gmail.com', 'ramsingh', 4, 'akfdka', '2023-11-30 12:19:40', 1);

-- --------------------------------------------------------

--
-- Table structure for table `fp_ledger`
--

CREATE TABLE `fp_ledger` (
  `ledger_sno` int(11) NOT NULL,
  `ledger_name` varchar(256) NOT NULL,
  `ledger_contact_person` varchar(256) NOT NULL,
  `ledger_address` varchar(256) NOT NULL,
  `ledger_city` varchar(256) NOT NULL,
  `ledger_state` varchar(256) NOT NULL,
  `ledger_country` varchar(256) NOT NULL,
  `ledger_phone` varchar(20) NOT NULL,
  `ledger_fax` varchar(256) NOT NULL,
  `ledger_email` varchar(56) NOT NULL,
  `ledger_pincode` varchar(20) NOT NULL,
  `ledger_pan_no` varchar(20) NOT NULL,
  `ledger_tin` varchar(256) NOT NULL,
  `ledger_ecc` varchar(256) NOT NULL,
  `ledger_gst_no` varchar(20) NOT NULL,
  `ledger_agent_name` varchar(256) NOT NULL,
  `ledger_timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `ledger_user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fp_ledger`
--

INSERT INTO `fp_ledger` (`ledger_sno`, `ledger_name`, `ledger_contact_person`, `ledger_address`, `ledger_city`, `ledger_state`, `ledger_country`, `ledger_phone`, `ledger_fax`, `ledger_email`, `ledger_pincode`, `ledger_pan_no`, `ledger_tin`, `ledger_ecc`, `ledger_gst_no`, `ledger_agent_name`, `ledger_timestamp`, `ledger_user_id`) VALUES
(20, 'bcxv', 'bxcvb', 'xbcv', '', '', 'vxcb', 'xb', 'vxcb', '', '', '', 'xvcb', 'xb', '', 'xb', '2023-11-30 08:00:28', 1),
(21, '1', '1', '1', '', '', '1', '1', '1', '', '', '', '1', '1', '', '1', '2023-11-30 08:00:28', 1),
(22, '.', '.', '.', '', '', '.', '.', '.', '', '', '', '.', '.', '', '.', '2023-11-30 08:00:28', 1),
(23, 'a r s', '.', 'sikandra agra', '', '', 'india', '92xxxxxxxx', '.', '', '', '', '.', '.', '', '.', '2023-11-30 08:00:28', 1),
(24, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2023-11-30 08:00:28', 0),
(25, '00', '00', '00', '', '', '00', '00', '00', '', '', '', '00', '00', '', '00', '2023-11-30 08:00:28', 1),
(26, 'as', '00', 'agra', 'agra', 'up', '', '92xxxxxxxx', '00', '00', '', '', '00', '00', '', '', '2023-11-30 08:00:28', 1);

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE `grade` (
  `grade_sno` int(11) NOT NULL,
  `grade_name` varchar(256) NOT NULL,
  `grade_timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `grade_users_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `grade`
--

INSERT INTO `grade` (`grade_sno`, `grade_name`, `grade_timestamp`, `grade_users_id`) VALUES
(1, 'verify ', '2023-11-30 08:05:34', 1);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `images_sno` int(11) NOT NULL,
  `images_name` varchar(256) NOT NULL,
  `images_timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `images_img_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `incharge`
--

CREATE TABLE `incharge` (
  `incharge_sno` int(11) NOT NULL,
  `incharge_name` varchar(256) NOT NULL,
  `incharge_timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `incharge_users_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `incharge`
--

INSERT INTO `incharge` (`incharge_sno`, `incharge_name`, `incharge_timestamp`, `incharge_users_id`) VALUES
(1, 'kamal singh', '2023-11-30 11:12:25', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_item`
--

CREATE TABLE `order_item` (
  `item_sno` int(11) NOT NULL,
  `item_name` varchar(256) NOT NULL,
  `item_timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `item_users_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_item`
--

INSERT INTO `order_item` (`item_sno`, `item_name`, `item_timestamp`, `item_users_id`) VALUES
(1, 'MONU KUMAR', '2023-11-30 08:06:09', 1);

-- --------------------------------------------------------

--
-- Table structure for table `process`
--

CREATE TABLE `process` (
  `process_sno` int(11) NOT NULL,
  `process_name` varchar(256) NOT NULL,
  `process_timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `process_users_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `process`
--

INSERT INTO `process` (`process_sno`, `process_name`, `process_timestamp`, `process_users_id`) VALUES
(1, 'adjustment', '2023-11-30 11:38:59', 1);

-- --------------------------------------------------------

--
-- Table structure for table `qty`
--

CREATE TABLE `qty` (
  `qty_sno` int(11) NOT NULL,
  `qty_qty` int(11) NOT NULL,
  `qty_timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `qty_qty_id` int(11) NOT NULL,
  `qty_users_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rs`
--

CREATE TABLE `rs` (
  `rs_sno` int(11) NOT NULL,
  `rs_name` varchar(256) NOT NULL,
  `rs_timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `rs_user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stock_group`
--

CREATE TABLE `stock_group` (
  `stock_group_sno` int(11) NOT NULL,
  `stock_group_name` varchar(256) NOT NULL,
  `stock_group_timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `stock_group_users_id` int(11) NOT NULL,
  `stock_group_group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stock_group`
--

INSERT INTO `stock_group` (`stock_group_sno`, `stock_group_name`, `stock_group_timestamp`, `stock_group_users_id`, `stock_group_group_id`) VALUES
(15, 'OIL', '2023-11-30 08:01:44', 1, 1),
(16, 'sbs', '2023-11-30 08:01:44', 1, 1),
(17, 'fillers', '2023-11-30 08:01:44', 1, 1),
(18, 'plastic resins', '2023-11-30 08:01:44', 1, 1),
(20, 'on floar', '2023-11-30 09:47:35', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `stock_item`
--

CREATE TABLE `stock_item` (
  `stock_item_sno` int(11) NOT NULL,
  `stock_item_group_id` int(11) DEFAULT NULL,
  `stock_item_name` varchar(256) NOT NULL,
  `stock_item_unit_id` int(11) DEFAULT NULL,
  `stock_item_rate_id` int(11) DEFAULT NULL,
  `stock_item_qty_id` int(11) DEFAULT NULL,
  `stock_item_timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `stock_item_users_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stock_item`
--

INSERT INTO `stock_item` (`stock_item_sno`, `stock_item_group_id`, `stock_item_name`, `stock_item_unit_id`, `stock_item_rate_id`, `stock_item_qty_id`, `stock_item_timestamp`, `stock_item_users_id`) VALUES
(3, 15, 'n-15', 4, 0, 0, '2023-11-30 10:18:00', 1),
(4, 20, 'tpr am', 4, 0, 0, '2023-11-30 10:18:42', 1),
(5, 20, 'c-51', 4, 0, 0, '2023-11-30 10:30:48', 1);

-- --------------------------------------------------------

--
-- Table structure for table `timestamp`
--

CREATE TABLE `timestamp` (
  `timestamp_sno` int(11) NOT NULL,
  `timestamp_ids` int(11) NOT NULL,
  `timestamp_users_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `unit_sno` int(11) NOT NULL,
  `unit_name` varchar(20) NOT NULL,
  `unit_timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `unit_users_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`unit_sno`, `unit_name`, `unit_timestamp`, `unit_users_id`) VALUES
(4, 'KGS', '2023-11-30 07:59:38', 1),
(5, 'LTR', '2023-11-30 07:59:38', 1),
(6, 'PKT', '2023-11-30 07:59:38', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users_sno` int(11) NOT NULL,
  `users_name` varchar(256) NOT NULL,
  `users_username` varchar(256) NOT NULL,
  `users_password` varchar(20) NOT NULL,
  `users_group_name` varchar(256) NOT NULL,
  `users_email` varchar(56) NOT NULL,
  `users_phone` varchar(20) NOT NULL,
  `users_users_id` int(11) NOT NULL,
  `users_timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_sno`, `users_name`, `users_username`, `users_password`, `users_group_name`, `users_email`, `users_phone`, `users_users_id`, `users_timestamp`) VALUES
(1, 'Monu Kumar', 'admin', '123', 'admin', 'monu@floyd.com', '7202964544', 1, '2023-11-30 07:54:16'),
(22, '', 'administrator', '123', 'Administrator', '', '', 1, '2023-11-30 07:57:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_group`
--
ALTER TABLE `add_group`
  ADD PRIMARY KEY (`group_sno`),
  ADD KEY `REFERENCE` (`group_users_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employee_sno`),
  ADD KEY `employee_post` (`employee_post`),
  ADD KEY `employee_users_id` (`employee_users_id`) USING BTREE;

--
-- Indexes for table `fp_ledger`
--
ALTER TABLE `fp_ledger`
  ADD PRIMARY KEY (`ledger_sno`),
  ADD KEY `user_id` (`ledger_user_id`);

--
-- Indexes for table `grade`
--
ALTER TABLE `grade`
  ADD PRIMARY KEY (`grade_sno`),
  ADD KEY `users_id` (`grade_users_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`images_sno`),
  ADD KEY `img_image_id` (`images_img_id`);

--
-- Indexes for table `incharge`
--
ALTER TABLE `incharge`
  ADD PRIMARY KEY (`incharge_sno`),
  ADD KEY `incharge_users_id` (`incharge_users_id`);

--
-- Indexes for table `order_item`
--
ALTER TABLE `order_item`
  ADD PRIMARY KEY (`item_sno`),
  ADD KEY `users_id` (`item_users_id`);

--
-- Indexes for table `process`
--
ALTER TABLE `process`
  ADD PRIMARY KEY (`process_sno`),
  ADD KEY `process_users_id` (`process_users_id`);

--
-- Indexes for table `qty`
--
ALTER TABLE `qty`
  ADD PRIMARY KEY (`qty_sno`),
  ADD KEY `users_id` (`qty_users_id`),
  ADD KEY `qty_id` (`qty_qty_id`);

--
-- Indexes for table `rs`
--
ALTER TABLE `rs`
  ADD PRIMARY KEY (`rs_sno`),
  ADD KEY `user_id` (`rs_user_id`);

--
-- Indexes for table `stock_group`
--
ALTER TABLE `stock_group`
  ADD PRIMARY KEY (`stock_group_sno`),
  ADD KEY `user_id` (`stock_group_users_id`) USING BTREE,
  ADD KEY `group_id` (`stock_group_group_id`);

--
-- Indexes for table `stock_item`
--
ALTER TABLE `stock_item`
  ADD PRIMARY KEY (`stock_item_sno`),
  ADD KEY `user_id` (`stock_item_users_id`),
  ADD KEY `group_id` (`stock_item_group_id`),
  ADD KEY `unit_id` (`stock_item_unit_id`),
  ADD KEY `qty_id` (`stock_item_qty_id`),
  ADD KEY `rate_id` (`stock_item_rate_id`);

--
-- Indexes for table `timestamp`
--
ALTER TABLE `timestamp`
  ADD PRIMARY KEY (`timestamp_sno`),
  ADD KEY `timestamp_ids` (`timestamp_ids`),
  ADD KEY `timestamp_users_id` (`timestamp_users_id`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`unit_sno`),
  ADD KEY `users_id` (`unit_users_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_sno`),
  ADD KEY `REFERENCE` (`users_users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_group`
--
ALTER TABLE `add_group`
  MODIFY `group_sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employee_sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fp_ledger`
--
ALTER TABLE `fp_ledger`
  MODIFY `ledger_sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `grade`
--
ALTER TABLE `grade`
  MODIFY `grade_sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `images_sno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `incharge`
--
ALTER TABLE `incharge`
  MODIFY `incharge_sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order_item`
--
ALTER TABLE `order_item`
  MODIFY `item_sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `process`
--
ALTER TABLE `process`
  MODIFY `process_sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `qty`
--
ALTER TABLE `qty`
  MODIFY `qty_sno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rs`
--
ALTER TABLE `rs`
  MODIFY `rs_sno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stock_group`
--
ALTER TABLE `stock_group`
  MODIFY `stock_group_sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `stock_item`
--
ALTER TABLE `stock_item`
  MODIFY `stock_item_sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `timestamp`
--
ALTER TABLE `timestamp`
  MODIFY `timestamp_sno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
  MODIFY `unit_sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
