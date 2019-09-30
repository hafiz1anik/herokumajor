-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 27, 2019 at 06:44 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_first_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

DROP TABLE IF EXISTS `address`;
CREATE TABLE IF NOT EXISTS `address` (
  `address` varchar(255) NOT NULL,
  `opening time` varchar(255) NOT NULL,
  `holiday` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`address`, `opening time`, `holiday`) VALUES
('No.67-A,Jalan Pandan Indah 4/3A Pandan Indah,55100 Kuala Lumpur,Malaysia.\r\n0104370465', 'Monday to Friday\r\n9 Am - 6Pm', 'Saturday & Sunday');

-- --------------------------------------------------------

--
-- Table structure for table `community`
--

DROP TABLE IF EXISTS `community`;
CREATE TABLE IF NOT EXISTS `community` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `signup_date` timestamp(6) NOT NULL,
  `message` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `community`
--

INSERT INTO `community` (`id`, `username`, `signup_date`, `message`) VALUES
(2, 'Hafizur Rahman Anik', '2019-09-11 04:50:53.000000', 'I have joined one of the free session and it was amazing. All the trainer were very friendly.'),
(3, 'Anas abozaid', '2019-09-11 04:53:04.000000', 'It is an amazing gym. All instruments are new and well maintained.'),
(4, 'Anik Rahman', '2019-09-11 14:32:59.000000', 'Great gym with great staff'),
(5, 'Naimul Islam', '2019-09-11 23:59:21.000000', 'Thanks for your appreciation.'),
(10, 'Nasir', '2019-09-27 06:01:30.000000', 'excellent service!!');

-- --------------------------------------------------------

--
-- Table structure for table `communitysignup`
--

DROP TABLE IF EXISTS `communitysignup`;
CREATE TABLE IF NOT EXISTS `communitysignup` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `signup_date` timestamp(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `communitysignup`
--

INSERT INTO `communitysignup` (`id`, `username`, `password`, `email`, `signup_date`) VALUES
(1, 'thasha', '$2y$10$BcLRRPFQPkJC9cu48Hk/3ecNspam91ZoIRpZzd9n8fs6EoHioptsq', 'thasha@gmail.com', '2019-09-27 06:10:15.000000'),
(2, 'din', '$2y$10$1.v3zaivRGk5e4GNjlloauj/4S381oYG7KrREsA.ZXCyXKYXbEf5O', 'din@gmail.com', '2019-09-27 06:23:51.000000'),
(3, 'rauf', '$2y$10$jQRV.RbXTo5wOD05Hr4TcOaZEpcDEEAvY8bFZktxHu8o9CzOWHS0S', 'rauf@gmail.com', '2019-09-27 06:25:01.000000'),
(4, 'lukman', '$2y$10$mx2YU64rk7msmerB0C3EFuP1SPaDOjZVo9425NlZp1J6lpW4f8tYW', 'lukman@gmail.com', '2019-09-27 06:26:43.000000'),
(5, 'atikah', '$2y$10$4/5Ck4soYQTg.50wD2wxrO31FeIluZf0spvT0sDyMvcWM7tQniQZS', 'atikah@gmail.com', '2019-09-27 06:27:39.000000');

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

DROP TABLE IF EXISTS `information`;
CREATE TABLE IF NOT EXISTS `information` (
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(255) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`firstname`, `lastname`, `email`, `phone`, `comment`) VALUES
('Hafizur', 'Rahman', 'hafiz1anik@gmail.com', 104370465, 'I need some information'),
('Hafizur', 'Rahman', 'anas@gmail.com', 104370465, 'yuyriuiui'),
('hafiz', 'anik', 'hafiz@gmail.com', 568798898, 'sdsdsdsd');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(225) NOT NULL,
  `image` varchar(225) NOT NULL,
  `price` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `image`, `price`) VALUES
(1, 'Monthly membership', '6.jpg', 'RM 120'),
(2, '6 months membership', '4.jpg', 'RM 600'),
(3, '12 months membership', '5.png', 'RM 1000');

-- --------------------------------------------------------

--
-- Table structure for table `promocode`
--

DROP TABLE IF EXISTS `promocode`;
CREATE TABLE IF NOT EXISTS `promocode` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `promo` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `promocode`
--

INSERT INTO `promocode` (`id`, `username`, `promo`, `password`) VALUES
(1, 'Darkshaker', 'dgcspng', '$2y$10$wKcIz5XelReUBBDK8Ux7buJMu9b9vNxmyoHhreO9VC3z3EFubXK0q'),
(2, 'Yellowjersey', 'gc46j', '$2y$10$CbSkieKKdObDT1lee06my.z0kR2Da7ywQFvLb9bsl0RscPxEUzGke'),
(3, 'Yogamats', 'y56p9m', '$2y$10$w1cZ567BIVqNIQ84SNA4VeUDMdKPtbALLDed4xUDcoQeNFpBg0zqa'),
(4, 'Bluetowel', 't5819c', '$2y$10$6ZmPqn0wEvFb7AF/IGnUUesFYZBrL0G2eXq1up0J/nMUcdeyPsdpe'),
(5, 'Redjersey', 'r039cj5', '$2y$10$BO8ZOzQIHJQq7vwKeqwPTux0wblcavBG5rJZfo1e5QjINuV78R9iu'),
(6, 'Greyshaker', 'g158c2s', '$2y$10$IJEjKmmMHIrPMsHBQQrWnOL6oPtLATioScOw9FemRpp.YPeUcAXvu');

-- --------------------------------------------------------

--
-- Table structure for table `replymessage`
--

DROP TABLE IF EXISTS `replymessage`;
CREATE TABLE IF NOT EXISTS `replymessage` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) NOT NULL,
  `todaydate` timestamp NOT NULL,
  `reply` varchar(255) NOT NULL,
  `replyname` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `replymessage`
--

INSERT INTO `replymessage` (`id`, `fullname`, `todaydate`, `reply`, `replyname`) VALUES
(2, 'THASHA NATHAN', '2019-09-12 01:21:59', 'Thanks for your appreciation', 'Hafizur Rahman Anik'),
(3, 'Rauf', '2019-09-17 02:27:33', 'Yes off course you can get personal trainer here  but you need to pay them monthly basis.', 'Anie'),
(4, 'Din la saya', '2019-09-27 06:19:55', 'Thanks for your support', 'anas'),
(5, 'Din la saya', '2019-09-27 06:24:09', 'Thanks nasir', 'Nasir'),
(6, 'THASHA NATHAN', '2019-09-27 06:30:15', 'thanks anik', 'anik rahman');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

DROP TABLE IF EXISTS `tbl_product`;
CREATE TABLE IF NOT EXISTS `tbl_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `name`, `image`, `price`) VALUES
(1, 'Dynamic-Training', '1.jpg', 'Saturday 9am-10am'),
(2, 'Freestyle-Training', '2.jpg', 'Sunday 6pm-7pm');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `signup_date` timestamp(6) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `signup_date`, `address`, `phone`) VALUES
(6, 'kamal', '$2y$10$0aFG2sIE7xFCpJUgbWrMyubtsecnzBvu0dFSjMudE1cZDssIOBYMK', 'kamal@gmail.com', '2019-07-25 13:14:14.000000', 'sdfdfdf', '3293289389'),
(7, 'jenifer', '$2y$10$aywOGHQUlMLGAwAF4cKwfOUDE5arPg.ILYDzfr07mi7gevsEESb46', 'jenife@gmail.com', '2019-08-23 01:11:04.000000', 'mutiara', '0104370456'),
(4, 'kamal', '$2y$10$P3zh9NDH6vS4tN59zPpMIOtuLqFrrlqbmMlkPbI872VS2vqBrfyDG', 'kamal@gmail.com', '2019-05-05 14:00:13.000000', 'cyberjaya', '01045690'),
(5, 'kamal', '$2y$10$EMpzAkwATkeUqnEMSZr77OpCMdfrV8uBD9aqQxpSVJV/WuAuJwaWK', 'kamal@gmail.com', '2019-05-11 05:17:23.000000', 'ssddds', '02098867'),
(3, 'hafiz', '$2y$10$D/hKY7pAiobDK0./uVs2w.u7rrJz2sAAzM0vjWjzVMzLsITaooYZ2', 'hafiz@gmail.com', '2019-05-05 13:44:38.000000', 'mutiara', '0104370465'),
(8, 'shakil', '$2y$10$Con.DPfy5zk/Q6zZW.zWIO484UJewlhRiFz17NwiyfFr6ef10Qbs6', 'shakil@gmail.com', '2019-08-29 03:23:13.000000', 'Mutiara Selangor Cyberjaya', '0104370456'),
(9, 'hafiz', '$2y$10$IgRqKV3sMHEGMmbZeqlOVO3c/CRf19axsbManX0f9o2R700OtEOly', 'hafiz1anik@gmail.com', '2019-08-29 03:29:21.000000', 'NO.67-A,JALAN PANDAN INDAH 4/3A PANDAN INDAH,55100 KUALA LUMPUR,MALAYSIA.', '0104370567'),
(11, 'Darkshaker', '$2y$10$4iZSBUMiLAz3kZTZ4LgpS.wbdCTfS4/PAmX2.LAJn/UwAqyma4TnK', 'hafiz@gmail.com', '2019-09-08 05:03:49.000000', 'cyberjaya', '0104370465'),
(12, 'Yellowjersey', '$2y$10$4QnEcMpskW/lD6RLitaAh.Qk3JqdpE0GFriycKSy6BanOLImp84WK', 'yellow@gmail.com', '2019-09-08 05:15:34.000000', 'putrajay', '010457896'),
(13, 'Yogamats', '$2y$10$mseZ3i5K9XftanhfdwOK8e0NMeqqJIvgWWE0jEq3R0fawXVNsX0xa', 'yoga@gmail.com', '2019-09-08 05:16:54.000000', 'KL', '010457899'),
(14, 'Bluetowel', '$2y$10$fUG0ezimfZPUht7BbF4FjO7Gp1E9WyxYK/SQi/Y9bxguBODvO0BJe', 'blue@gmail.com', '2019-09-08 05:17:30.000000', 'KL', '010457897'),
(15, 'Redjersey', '$2y$10$B7CgujDDr7O0hx.Lr4H03O4p2vEHqKkL.NppjWi68p9f39bmFkqS2', 'red@gmail.com', '2019-09-08 05:18:23.000000', 'cyberia', '010457895'),
(16, 'Greyshaker', '$2y$10$1eaMm6zymgNXSW/XYDr1AOov1vQ1jHuAlp2wQO2W/VojsZyI3chzS', 'grey@gmail.com', '2019-09-08 05:19:11.000000', 'Ark', '010457891');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
