-- phpMyAdmin SQL Dump
-- version 4.0.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 22, 2013 at 05:12 PM
-- Server version: 5.1.70-cll
-- PHP Version: 5.3.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `asadsaqi_p2_asadsaqibharvard_us`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `created` int(11) NOT NULL,
  `modified` int(11) NOT NULL,
  `user_id` int(11) NOT NULL COMMENT 'FK',
  `content` text NOT NULL,
  PRIMARY KEY (`post_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `created`, `modified`, `user_id`, `content`) VALUES
(1, 1383514882, 1383514882, 33, 'test '),
(2, 1383514889, 1383514889, 33, 'test 2'),
(3, 1383518589, 1383518589, 34, 'test to work'),
(4, 1383518597, 1383518597, 34, 'asdfsadf'),
(5, 1383518601, 1383518601, 34, 'adddddddd'),
(6, 1383524398, 1383524398, 33, ''),
(7, 1383529342, 1383529342, 35, 'I LOVE THIS WEBSITE!!!'),
(8, 1383560028, 1383560028, 39, 'Welcome to Pollos Hermanos!'),
(9, 1383560537, 1383560537, 38, 'We''ve got work to do....'),
(10, 1383560916, 1383560916, 40, 'So what if this is like, math, or algebra? Now you add a plus douchebag to a minus douchebag, you get like, zero douchebags. '),
(11, 1383561041, 1383561041, 40, 'Mr. White? Are you smoking weed? Oh my god... wait a minute, is that, is that my weed? What the hell man, make yourself at home why don''t you.'),
(12, 1383561365, 1383561365, 41, 'Flynn, get your butt in here! '),
(13, 1383561834, 1383561834, 41, 'Walt....I think we have a problem'),
(14, 1383568819, 1383568819, 42, 'test'),
(15, 1383583270, 1383583270, 43, 'I love the interface. Nice job!\r\n\r\nCheers and Good Luck,\r\n\r\n:)'),
(16, 1383617936, 1383617936, 45, 'test.\r\nline2.'),
(17, 1383617968, 1383617968, 45, ''')AND DROP users;'),
(18, 1383703133, 1383703133, 48, 'TIGHT! TIGHT! TIGHT!'),
(19, 1383759682, 1383759682, 49, 'Welcome to A1 Carwash. Have an A1 day!'),
(20, 1384716485, 1384716485, 50, ''),
(21, 1384716490, 1384716490, 50, 's'),
(22, 1384716494, 1384716494, 50, ''),
(23, 1386732236, 1386732236, 51, 'Good job'),
(24, 1387674531, 1387674531, 53, 'asfdsafdsafdsafdsafdsafsadf'),
(25, 1387683841, 1387683841, 54, ''),
(26, 1387683939, 1387683939, 54, 'asfdtest'),
(27, 1387684052, 1387684052, 54, 'test'),
(28, 1387684083, 1387684083, 54, 'sup'),
(31, 1387684679, 1387684679, 54, 'My Workout for Today:pullups 2 sets of 2situps 4 sets of 4'),
(32, 1387686502, 1387686502, 54, 'My Workout for Today:pullups 4 sets of 4situps 2 sets of 2'),
(33, 1387686562, 1387686562, 54, 'dfgdg'),
(34, 1387686573, 1387686573, 54, 'My Workout for Today:pullups 3 sets of 3'),
(35, 1387734049, 1387734049, 54, 'My Workout for Today:'),
(36, 1387737802, 1387737802, 54, 'My Workout for Today: Pullups - 2 sets of 2 reps Situps - 2 sets of 1 reps Leg Extensions - 1 sets of 1 reps'),
(37, 1387739240, 1387739240, 54, 'My Workout for Today: Pullups - Sets: 2, Reps: 1. Situps - Sets: 1, Reps: 3. Leg Extensions - Sets: 2, Reps: 4.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
         