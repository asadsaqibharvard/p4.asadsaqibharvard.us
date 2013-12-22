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
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `created` int(11) NOT NULL,
  `modified` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `last_login` int(11) NOT NULL,
  `timezone` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=56 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `created`, `modified`, `token`, `password`, `last_login`, `timezone`, `first_name`, `last_name`, `email`) VALUES
(35, 1383528962, 0, '79649d6f60a1eca311f8994ef69afb7c8b582f44', '77aa862c6c5d3e0b768267593082f9ac56c1d817', 0, '', 'Asad', 'Saqib', 'asadsaqib@gmail.com'),
(38, 1383558979, 0, 'feefad84f8ca3789db3808a786e627f291a25320', 'a9f4a865655319caaf27d1c476ca749259328f78', 0, '', 'Walter', 'White', 'walter@aol.com'),
(39, 1383559976, 0, '172a8316d2fe08604cfa811cf91cd64bc20f8bd2', 'ad699a3ba7a58975c610dede72627a7a64ae9c3b', 0, '', 'Gustavo', 'Fring', 'gus@aol.com'),
(40, 1383560566, 0, 'a580c9d5bef1f7d86b53db8c82e97f4e468df45a', '9c28bc5e00b08638a0539afd0213f025b5791194', 0, '', 'Jesse', 'Pinkman', 'jesse@aol.com'),
(48, 1383703011, 0, '2a552cb235c08e7d5a2f77b9f7f6105fd1a244a6', '9c1e426eeb8dab43ff3a46134d5ce8597fc8ac68', 0, '', 'Tuco', 'Salamanca', 'tuco@aol.com'),
(49, 1383759600, 0, '72a7d52ec5c33cc37672926f49019f3fe2ea5500', '008d2e44d6054ae38950e2c7c78f0c067cf94600', 0, '', 'Skyler', 'White', 'skyler@aol.com'),
(50, 1384716419, 0, '3835761cd54d579df9c9ef3ec382f6a285b3767b', '63b9254d5405d5c1642a6df02e8f05bc280a42b2', 0, '', 'Xin', 'Xin', '123'),
(51, 1386732170, 0, '17923d475ac01dd535c39f328cb61367230ae22b', '8f358ff77288e0fa1fe6a82ca8da7d0fd33b7b6a', 0, '', 'Mango', 'Juice', 'mjuice@gmail.com'),
(52, 1386899977, 0, '70854dd09307e8703bbc4d566a2a46bea937383d', '09c636ce9cda517298f8f934f4114cb2e8f06860', 0, '', 'che', 'che', 'che@che.che'),
(53, 1387674197, 0, 'aa0921687676b9e6af2408f713d599004b0e2818', '77aa862c6c5d3e0b768267593082f9ac56c1d817', 0, '', 'asad', 'saqib', 'asad@aol.com'),
(54, 1387683537, 0, '00df0c6956c7248e3ac27d12b0a2801cfae666d0', '153a62a480f80fc2cbef4cea444b80c9881f1008', 0, '', 'test', 'user', 'test@user.com'),
(55, 1387739159, 0, '6e296b4a7cf02af2f432e964f59a5ec35811920f', 'dfaedec3ad319576e2bb3f2a14c3874f6e807b77', 0, '', 'test', 'test', 'test@test.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
         