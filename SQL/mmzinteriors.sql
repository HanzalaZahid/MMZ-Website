-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2023 at 02:56 PM
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
-- Database: `mmzinteriors`
--

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(28) NOT NULL,
  `city_province` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`city_id`, `city_name`, `city_province`) VALUES
(2, 'Karachi', 1),
(3, 'Lahore', 2),
(4, 'Faisalabad', 2),
(5, 'Rawalpindi', 2),
(6, 'Gujranwala', 2),
(7, 'Peshawar', 3),
(8, 'Multan', 2),
(9, 'Saidu Sharif', 3),
(10, 'Hyderabad City', 1),
(11, 'Islamabad', 5),
(12, 'Quetta', 4),
(13, 'Bahawalpur', 2),
(14, 'Sargodha', 2),
(15, 'Sialkot City', 2),
(16, 'Sukkur', 1),
(17, 'Larkana', 1),
(18, 'Chiniot', 2),
(19, 'Shekhupura', 2),
(20, 'Jhang City', 2),
(21, 'Dera Ghazi Khan', 2),
(22, 'Gujrat', 2),
(23, 'Rahimyar Khan', 2),
(24, 'Kasur', 2),
(25, 'Mardan', 3),
(26, 'Mingaora', 3),
(27, 'Nawabshah', 1),
(28, 'Sahiwal', 2),
(29, 'Mirpur Khas', 1),
(30, 'Okara', 2),
(31, 'Mandi Burewala', 2),
(32, 'Jacobabad', 1),
(33, 'Saddiqabad', 2),
(34, 'Kohat', 3),
(35, 'Muridke', 2),
(36, 'Muzaffargarh', 2),
(37, 'Khanpur', 2),
(38, 'Gojra', 2),
(39, 'Mandi Bahauddin', 2),
(40, 'Abbottabad', 3),
(41, 'Turbat', 4),
(42, 'Dadu', 1),
(43, 'Bahawalnagar', 2),
(44, 'Khuzdar', 4),
(45, 'Pakpattan', 2),
(46, 'Tando Allahyar', 1),
(47, 'Ahmadpur East', 2),
(48, 'Vihari', 2),
(49, 'Jaranwala', 2),
(50, 'New Mirpur', 7),
(51, 'Kamalia', 2),
(52, 'Kot Addu', 2),
(53, 'Nowshera', 3),
(54, 'Swabi', 3),
(55, 'Khushab', 2),
(56, 'Dera Ismail Khan', 3),
(57, 'Chaman', 4),
(58, 'Charsadda', 3),
(59, 'Kandhkot', 1),
(60, 'Chishtian', 2),
(61, 'Hasilpur', 2),
(62, 'Attock Khurd', 2),
(63, 'Muzaffarabad', 7),
(64, 'Mianwali', 2),
(65, 'Jalalpur Jattan', 2),
(66, 'Bhakkar', 2),
(67, 'Zhob', 4),
(68, 'Dipalpur', 2),
(69, 'Kharian', 2),
(70, 'Mian Channun', 2),
(71, 'Bhalwal', 2),
(72, 'Jamshoro', 1),
(73, 'Pattoki', 2),
(74, 'Harunabad', 2),
(75, 'Kahror Pakka', 2),
(76, 'Toba Tek Singh', 2),
(77, 'Samundri', 2),
(78, 'Shakargarh', 2),
(79, 'Sambrial', 2),
(80, 'Shujaabad', 2),
(81, 'Hujra Shah Muqim', 2),
(82, 'Kabirwala', 2),
(83, 'Mansehra', 3),
(84, 'Lala Musa', 2),
(85, 'Chunian', 2),
(86, 'Nankana Sahib', 2),
(87, 'Bannu', 3),
(88, 'Pasrur', 2),
(89, 'Timargara', 3),
(90, 'Parachinar', 3),
(91, 'Chenab Nagar', 2),
(92, 'Gwadar', 4),
(93, 'Abdul Hakim', 2),
(94, 'Hassan Abdal', 2),
(95, 'Tank', 3),
(96, 'Hangu', 3),
(97, 'Risalpur Cantonment', 3),
(98, 'Karak', 3),
(99, 'Kundian', 2),
(100, 'Umarkot', 1),
(101, 'Chitral', 3),
(102, 'Dainyor', 6),
(103, 'Kulachi', 3),
(104, 'Kalat', 4),
(105, 'Kotli', 7),
(106, 'Gilgit', 6),
(107, 'Narowal', 2),
(108, 'Khairpur Mir’s', 1),
(109, 'Khanewal', 2),
(110, 'Jhelum', 2),
(111, 'Haripur', 3),
(112, 'Shikarpur', 1),
(113, 'Rawala Kot', 7),
(114, 'Hafizabad', 2),
(115, 'Lodhran', 2),
(116, 'Malakand', 3),
(117, 'Attock City', 2),
(118, 'Batgram', 3),
(119, 'Matiari', 1),
(120, 'Ghotki', 1),
(121, 'Naushahro Firoz', 1),
(122, 'Alpurai', 3),
(123, 'Bagh', 7),
(124, 'Daggar', 3),
(125, 'Leiah', 2),
(126, 'Tando Muhammad Khan', 1),
(127, 'Chakwal', 2),
(128, 'Badin', 1),
(129, 'Lakki', 3),
(130, 'Rajanpur', 2),
(131, 'Dera Allahyar', 4),
(132, 'Shahdad Kot', 1),
(133, 'Pishin', 4),
(134, 'Sanghar', 1),
(135, 'Upper Dir', 3),
(136, 'Thatta', 1),
(137, 'Dera Murad Jamali', 4),
(138, 'Kohlu', 4),
(139, 'Mastung', 4),
(140, 'Dasu', 3),
(141, 'Athmuqam', 7),
(142, 'Loralai', 4),
(143, 'Barkhan', 4),
(144, 'Musa Khel Bazar', 4),
(145, 'Ziarat', 4),
(146, 'Gandava', 4),
(147, 'Sibi', 4),
(148, 'Dera Bugti', 4),
(149, 'Eidgah', 6),
(150, 'Uthal', 4),
(151, 'Khuzdar', 4),
(152, 'Chilas', 6),
(153, 'Panjgur', 4),
(154, 'Gakuch', 6),
(155, 'Qila Saifullah', 4),
(156, 'Kharan', 4),
(157, 'Aliabad', 6),
(158, 'Awaran', 4),
(159, 'Dalbandin', 4);

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `client_id` int(11) NOT NULL,
  `client_name` varchar(60) NOT NULL,
  `client_type` int(11) NOT NULL,
  `client_address` varchar(200) NOT NULL,
  `client_contact` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`client_id`, `client_name`, `client_type`, `client_address`, `client_contact`) VALUES
(6, 'NDURE', 1, 'JAIL ROAD LAHORE', ''),
(7, 'SERVIS', 1, 'JAIL ROAD LAHORE', ''),
(8, 'Raja Rani', 0, 'City Road Sargodha', '');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `project_id` int(11) NOT NULL,
  `project_name` varchar(100) NOT NULL,
  `project_client` int(11) NOT NULL,
  `project_start_date` date NOT NULL,
  `project_end_date` date NOT NULL,
  `project_city` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `provinces`
--

CREATE TABLE `provinces` (
  `province_id` int(11) NOT NULL,
  `province_name` varchar(28) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `provinces`
--

INSERT INTO `provinces` (`province_id`, `province_name`) VALUES
(1, 'Sindh'),
(2, 'Punjab'),
(3, 'Khyber Pakhtunkhwa'),
(4, 'Balouchistan'),
(5, 'Federal Terrority'),
(6, 'Gilgit Baltistan'),
(7, 'Azad Kashmir');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_firstname` varchar(28) NOT NULL,
  `user_lastname` varchar(28) NOT NULL,
  `user_email` varchar(60) NOT NULL,
  `user_password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_firstname`, `user_lastname`, `user_email`, `user_password`) VALUES
(1, 'Hanzala', 'Zahid', 'hanzlamirza@live.com', '$2y$10$9Z/u6SyqNomWqozQrpDyy.rmdHEKBj8VtPCgu7hihW4MP3.58iNG6'),
(3, 'Tayyab', 'Zahid', 'tayyabzahid33@gmail.com', '$2y$10$0ewQk9knaMm6xxqgET.Cke1vTue3ZM.yXIGPxfG.X0HhGIkR7p4fK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`city_id`),
  ADD KEY `city_province` (`city_province`),
  ADD KEY `city_province_2` (`city_province`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`project_id`),
  ADD KEY `FK_PROJECTS_CLIENT` (`project_client`),
  ADD KEY `FK_PROJECTS_CITIES` (`project_city`);

--
-- Indexes for table `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`province_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=257;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `provinces`
--
ALTER TABLE `provinces`
  MODIFY `province_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cities`
--
ALTER TABLE `cities`
  ADD CONSTRAINT `FK_CITIES_PROVINCES` FOREIGN KEY (`city_province`) REFERENCES `provinces` (`province_id`);

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `FK_PROJECTS_CITIES` FOREIGN KEY (`project_city`) REFERENCES `cities` (`city_id`),
  ADD CONSTRAINT `FK_PROJECTS_CLIENT` FOREIGN KEY (`project_client`) REFERENCES `clients` (`client_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
