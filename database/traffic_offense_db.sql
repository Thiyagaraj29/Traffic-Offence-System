-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2024 at 12:10 PM
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
-- Database: `traffic_offense_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `accused`
--

CREATE TABLE `accused` (
  `acc_id` int(11) NOT NULL,
  `acc_no` varchar(100) NOT NULL,
  `acc_name` varchar(100) NOT NULL,
  `acc_father` varchar(100) NOT NULL,
  `acc_mother` varchar(100) NOT NULL,
  `acc_dob` varchar(100) NOT NULL,
  `acc_age` varchar(100) NOT NULL,
  `acc_gender` varchar(100) NOT NULL,
  `acc_native` varchar(100) NOT NULL,
  `acc_offence` longtext NOT NULL,
  `acc_mark` longtext NOT NULL,
  `acc_station` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `accused`
--

INSERT INTO `accused` (`acc_id`, `acc_no`, `acc_name`, `acc_father`, `acc_mother`, `acc_dob`, `acc_age`, `acc_gender`, `acc_native`, `acc_offence`, `acc_mark`, `acc_station`) VALUES
(1, 'ASD10001', 'x', 'x', 'x', '01/01/1970', '43', 'Male', 'x', 'X', 'x', 'B11 Police Station	'),
(2, 'ASD10002', 'Y', 'Y', 'Y', '1/01/1973', '40', 'Male', 'Y', 'Y', 'Y', 'B11 Police Station	'),
(3, 'ASD10003', 'ABCD', 'EFGH', 'IJK', '01/01/1968', 'XX', 'Male', 'LMN', 'OPQ', 'RST', 'B11 Police Station');

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `comp_id` int(11) NOT NULL,
  `comp_date` varchar(100) NOT NULL,
  `comp_place` varchar(100) NOT NULL,
  `comp_from` varchar(100) NOT NULL,
  `comp_sta` varchar(100) NOT NULL,
  `comp_sub` varchar(100) NOT NULL,
  `comp_comp` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`comp_id`, `comp_date`, `comp_place`, `comp_from`, `comp_sta`, `comp_sub`, `comp_comp`) VALUES
(6, '17/10/2014', 'qwqw', '1', '1', 'qwqwqww', 'd asd ;s kkldf df'),
(7, '25/10/2014', 'dhsvjh', '5', '1', 'dfklnnkj', 'kcnvkjn j fdjff   df dkfhdjhfkjdf d fdhf d f dhfk f df d fd kdfh d fdkf d fdfds hdf ds hfkdsfkls fd fkds kdsf ds.'),
(8, '20/03/2023', 'Rathinapuri', '6', '2', 'Theft', 'fwfwewefwe  wefwerw erfr'),
(9, '07/12/2023', 'Coimbatore', '7', '1', 'Road Rules', 'This person not following the road rules.');

-- --------------------------------------------------------

--
-- Table structure for table `fir`
--

CREATE TABLE `fir` (
  `fir_id` int(11) NOT NULL,
  `fir_no` varchar(100) NOT NULL,
  `fir_date` date NOT NULL,
  `fir_act` varchar(100) NOT NULL,
  `fir_section` varchar(100) NOT NULL,
  `fir_offence` longtext NOT NULL,
  `fir_df` varchar(100) NOT NULL,
  `fir_dt` varchar(100) NOT NULL,
  `fir_tf` varchar(100) NOT NULL,
  `fir_tt` varchar(100) NOT NULL,
  `fir_informant` longtext NOT NULL,
  `fir_suspect` longtext NOT NULL,
  `fir_comp` int(11) NOT NULL,
  `fir_sta` varchar(100) NOT NULL,
  `fir_status` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `fir`
--

INSERT INTO `fir` (`fir_id`, `fir_no`, `fir_date`, `fir_act`, `fir_section`, `fir_offence`, `fir_df`, `fir_dt`, `fir_tf`, `fir_tt`, `fir_informant`, `fir_suspect`, `fir_comp`, `fir_sta`, `fir_status`) VALUES
(1, 'FIR10001', '2013-04-10', '2', '120', 'Respected Sir,\r\n\r\nI would like to report the theft of my mobile phone by persons unknown. My I-Phone 5 (Black color with airtel sim 9876543210) was taken from my person at approximately 43000 on Sunday 03/02/2013. I was walking along VOC PARK Road at the time of the theft on my way to the bus station on Station Road.\r\nAs I passed a two young men one of them bumped into me, but I thought nothing of it. On my arrival at the bus station I reached for my phone to ring my friend to let him know what time I would return only to find my mobile phone missing from my jacket pocket. I then realized that I must have been pick pocketed by the two youths on voc park Road. Please send me any relevant details such as crime numbers or such that may relate to this theft.', 'Thursday, February 14, 2013', 'Thursday, February 14, 2013', '1.00pm', '1.30pm', 'Mani .M,   XX/XX/XXXX,   9876543210,   mani@ymail.com,  -.', 'young man', 1, 'B2 Police Station', 'Under The Investigation'),
(2, 'FIR10002', '2013-04-11', '101', '12', 'qwerty', 'Saturday, April 20, 2013', 'Saturday, April 20, 2013', '10.00 PM', '11.00 PM', 'asasasas', 'sdsdsdsd', 0, 'B11 Police Station', 'Closed'),
(3, 'FIR10003', '2013-04-12', '123', '23', 'testing', 'Friday, April 19, 2013', 'Friday, April 19, 2013', '1.00 PM', '1.30 PM', 'Mani .M   XX/XX/XXXX   9876543210   mani@ymail.com   -', 'qqqqqqqq', 2, 'B11 Police Station', 'Reopened'),
(4, 'FIR10004', '2013-04-25', '111', '11', 'qwertys', 'Saturday, April 20, 2013', 'Saturday, April 20, 2013', '1.00 PM', '1.30 PM', 'Karthi   1-JAN-1988   9876543210   karthi@gmail.com   CBE', 'qqqqqqqqq', 3, 'B11 Police Station', 'Closed'),
(5, 'FIR10005', '2013-12-24', 'EBCO', '148', 'please give me without commision', 'Tuesday, December 24, 2013', 'Thursday, December 26, 2013', '9', '1', 'Mani .M   XX/XX/XXXX   9876543210   mani@ymail.com   -', 'big mousetack', 4, 'B2 Police Station', 'Under The Investigation'),
(6, 'FIR10006', '2014-10-25', '4', '433', 'kcnvkjn j fdjff   df dkfhdjhfkjdf d fdhf d f dhfk f df d fd kdfh d fdkf d fdfds hdf ds hfkdsfkls fd fkds kdsf ds.', '10/25/2014', '10/28/2014', '12.00', '20.00', 'suresh   21-1-1989   9876543210   suresh@gmail.com   CBE', 'SD WS DDS DS', 7, 'B11 Police Station', 'Under The Investigation'),
(7, 'FIR10007', '2023-03-21', 'Sample', 'r', 'd asd ;s kkldf df', '3/22/2023', '3/23/2023', '10', '10', 'Mani .M   XX/XX/XXXX   9876543210   mani@ymail.com   -', 'sample', 6, 'B11 Police Station', 'Under The Investigation');

-- --------------------------------------------------------

--
-- Table structure for table `offence`
--

CREATE TABLE `offence` (
  `id` int(11) NOT NULL,
  `offence` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `police`
--

CREATE TABLE `police` (
  `po_id` int(11) NOT NULL,
  `po_sta` varchar(100) NOT NULL,
  `po_name` varchar(100) NOT NULL,
  `po_dob` varchar(100) NOT NULL,
  `po_pos` varchar(100) NOT NULL,
  `po_con` varchar(100) NOT NULL,
  `po_email` varchar(100) NOT NULL,
  `po_add` longtext NOT NULL,
  `po_user` varchar(100) NOT NULL,
  `po_pwd` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `police`
--

INSERT INTO `police` (`po_id`, `po_sta`, `po_name`, `po_dob`, `po_pos`, `po_con`, `po_email`, `po_add`, `po_user`, `po_pwd`) VALUES
(1, 'B11 Police Station', 'Richard Dennis', 'XX/XX/XXXX', 'Inspector', '9876543210', 'rich@gmail.com', 'Coimbatore\r\n', 'rich', 'rich'),
(2, 'B2 Police Station', 'Saravanan .G', 'XX/XX/XXXX', 'Inspector', '9876543210', 'sara@gmail.com', 'CBE', 'sara', 'sara');

-- --------------------------------------------------------

--
-- Table structure for table `public`
--

CREATE TABLE `public` (
  `pub_id` int(11) NOT NULL,
  `pub_name` varchar(100) NOT NULL,
  `pub_dob` varchar(100) NOT NULL,
  `pub_sta` varchar(100) NOT NULL,
  `pub_con` varchar(100) NOT NULL,
  `pub_email` varchar(100) NOT NULL,
  `pub_add` longtext NOT NULL,
  `pub_user` varchar(100) NOT NULL,
  `pub_pwd` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `public`
--

INSERT INTO `public` (`pub_id`, `pub_name`, `pub_dob`, `pub_sta`, `pub_con`, `pub_email`, `pub_add`, `pub_user`, `pub_pwd`) VALUES
(1, 'Mani .M', 'XX/XX/XXXX', 'B11 Police Station', '9876543210', 'mani@ymail.com', '-', 'mani', 'mani'),
(2, 'Siva .S', 'XX/XX/XXXX', 'B2 Police Station', '9876543210', 'siva@ymail.com', '=', 'siva', 'siva'),
(3, 'Karthi', '1-JAN-1988', 'B11 Police Station', '9876543210', 'karthi@gmail.com', 'CBE', 'kar', 'kar'),
(4, 'mohan', '2/2/2000', 'B2 Police Station', '9952355025', 'aa@gmail.com', 'cbe', 'mohan', '123'),
(5, 'suresh', '21-1-1989', 'B11 Police Station', '9876543210', 'suresh@gmail.com', 'CBE', 'suresh', 'suresh'),
(6, 'John', '14-11-2005', 'B2 Police Station', '99421339445', 'test@gmail.com', 'test', 'john', '12345'),
(7, 'Fredrick', '14/12/120', 'B11 Police Station', 'sdsd', 'dcd@gmail.com', 'fdeffff', 'michael', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `reported_offence`
--

CREATE TABLE `reported_offence` (
  `id` int(11) NOT NULL,
  `offence_id` varchar(200) NOT NULL,
  `vehicle_no` varchar(200) NOT NULL,
  `driver_license` varchar(300) NOT NULL,
  `name` varchar(500) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `gender` varchar(300) NOT NULL,
  `officer_reporting` varchar(500) NOT NULL,
  `offence` varchar(1000) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `reported_offence`
--

INSERT INTO `reported_offence` (`id`, `offence_id`, `vehicle_no`, `driver_license`, `name`, `address`, `gender`, `officer_reporting`, `offence`, `date`) VALUES
(1, '78771c', '08954345355', '467545635', 'Adisa Adetobi', 'Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09', 'Male', 'Trorrahclef', 'Driving Under Drug Influence', '2018-05-28');

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

CREATE TABLE `site_settings` (
  `id` int(11) NOT NULL,
  `site_name` varchar(300) NOT NULL,
  `site_desc` varchar(2000) NOT NULL,
  `email` varchar(300) NOT NULL,
  `phone` varchar(300) NOT NULL,
  `address` varchar(500) NOT NULL,
  `city` varchar(300) NOT NULL,
  `country` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `site_settings`
--

INSERT INTO `site_settings` (`id`, `site_name`, `site_desc`, `email`, `phone`, `address`, `city`, `country`) VALUES
(1, 'Trafity', 'Welcome to Trafity Dashboard - a beautiful Traffic Offence System.', 'admin@we.com', '+2348138652645', 'Alagbaka GRA', 'Lagos', 'Nigeria');

-- --------------------------------------------------------

--
-- Table structure for table `station`
--

CREATE TABLE `station` (
  `ps_id` int(11) NOT NULL,
  `ps_name` varchar(100) NOT NULL,
  `ps_circle` varchar(100) NOT NULL,
  `ps_con` varchar(100) NOT NULL,
  `ps_fax` varchar(100) NOT NULL,
  `ps_add` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `station`
--

INSERT INTO `station` (`ps_id`, `ps_name`, `ps_circle`, `ps_con`, `ps_fax`, `ps_add`) VALUES
(1, 'B11 Police Station', 'Thudiyalur', '0422-234578', '010-12345-789', '#1, Ram Nagar, Thudiyalur, Coimbatore'),
(2, 'B2 Police Station', 'Saibaba colony', '0422-452454', '101-245-35421', 'Saibaba colony main road, Coimbatore.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_id` varchar(200) NOT NULL,
  `name` varchar(500) NOT NULL,
  `username` varchar(300) NOT NULL,
  `pass` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `address` varchar(500) NOT NULL,
  `position` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_id`, `name`, `username`, `pass`, `email`, `address`, `position`) VALUES
(1, 'bcefa114ee', 'Adeyemi   Femipo', 'Torrahclef', 'yemiyemi', 'awolu_faith@live.com', 'Alagbaka, Akure, Ondo Nigeria', 'admin'),
(4, '0fd73c73c1', 'Full Name', 'Olapade', 'uhsfr', 'ayomi@we.com', 'Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09', 'admin'),
(5, '5dea1fd9c3', 'Awolu Faith', 'tobi', 'tobi', 'ayomi@we.com', 'Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09', 'officer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accused`
--
ALTER TABLE `accused`
  ADD PRIMARY KEY (`acc_id`);

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`comp_id`);

--
-- Indexes for table `fir`
--
ALTER TABLE `fir`
  ADD PRIMARY KEY (`fir_id`);

--
-- Indexes for table `police`
--
ALTER TABLE `police`
  ADD PRIMARY KEY (`po_id`);

--
-- Indexes for table `public`
--
ALTER TABLE `public`
  ADD PRIMARY KEY (`pub_id`);

--
-- Indexes for table `reported_offence`
--
ALTER TABLE `reported_offence`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_settings`
--
ALTER TABLE `site_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `station`
--
ALTER TABLE `station`
  ADD PRIMARY KEY (`ps_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accused`
--
ALTER TABLE `accused`
  MODIFY `acc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `comp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `fir`
--
ALTER TABLE `fir`
  MODIFY `fir_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `police`
--
ALTER TABLE `police`
  MODIFY `po_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `public`
--
ALTER TABLE `public`
  MODIFY `pub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `reported_offence`
--
ALTER TABLE `reported_offence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `site_settings`
--
ALTER TABLE `site_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `station`
--
ALTER TABLE `station`
  MODIFY `ps_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
