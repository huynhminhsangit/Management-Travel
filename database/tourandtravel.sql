-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2017 at 12:44 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tourandtravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertisement`
--

CREATE TABLE `advertisement` (
  `adv_id` int(200) NOT NULL,
  `adv_title` varchar(100) NOT NULL,
  `adv_companyName` varchar(100) NOT NULL,
  `adv_pic` varchar(1000) NOT NULL,
  `adv_detail` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advertisement`
--

INSERT INTO `advertisement` (`adv_id`, `adv_title`, `adv_companyName`, `adv_pic`, `adv_detail`) VALUES
(1, 'Tour and Travel', 'Eflio .com', '115.jpg', 'Find information on the travel and trade provided by Kaler Enterprises. Users can get detailed information about the travel agents, inbound tour operators, tourist transport operators, adventure tour operators, domestic tour operators, etc. in India. Guidelines for respective agencies and operators are provided. List of approved travel trade operators can be accessed.\r\n'),
(2, 'Tour and Travel', ' Life Trip Travel Agency ', '117.jpg', 'Find information on the travel and trade provided by My Tour. Users can get detailed information about the travel agents, inbound tour operators, tourist transport operators, adventure tour operators, domestic tour operators, etc. in India. Guidelines for respective agencies and operators are provided. List of approved travel trade operators can be accessed.\r\n'),
(3, 'Tour and Travel', 'New View Travel Agency', '119.jpg', 'Find information on the travel and trade provided by My Tour. Users can get detailed information about the travel agents, inbound tour operators, tourist transport operators, adventure tour operators, domestic tour operators, etc. in India. Guidelines for respective agencies and operators are provided. List of approved travel trade operators can be accessed.'),
(4, 'Tour and Travel', 'Sysny', '118.jpg', 'Find information on the travel and trade provided by My Tour. Users can get detailed information about the travel agents, inbound tour operators, tourist transport operators, adventure tour operators, domestic tour operators, etc. in India. Guidelines for respective agencies and operators are provided. List of approved travel trade operators can be accessed.\r\n'),
(5, 'Tour and Travel', 'Merrific', '124.jpg', 'Find information on the travel and trade provided by My Tour. Users can get detailed information about the travel agents, inbound tour operators, tourist transport operators, adventure tour operators, domestic tour operators, etc. in India. Guidelines for respective agencies and operators are provided. List of approved travel trade operators can be accessed.\r\n'),
(6, 'Tour and Travel', 'Easymost', '125.jpg', 'Find information on the travel and trade provided by My Tour. Users can get detailed information about the travel agents, inbound tour operators, tourist transport operators, adventure tour operators, domestic tour operators, etc. in India. Guidelines for respective agencies and operators are provided. List of approved travel trade operators can be accessed.'),
(7, 'Tour and Travel', 'Guideaid', '118.jpg', 'Find information on the travel and trade provided by My Tour. Users can get detailed information about the travel agents, inbound tour operators, tourist transport operators, adventure tour operators, domestic tour operators, etc. in India. Guidelines for respective agencies and operators are provided. List of approved travel trade operators can be accessed.'),
(8, 'Tour and Travel', 'Vyand', '126.jpg', 'Find information on the travel and trade provided by My Tour. Users can get detailed information about the travel agents, inbound tour operators, tourist transport operators, adventure tour operators, domestic tour operators, etc. in India. Guidelines for respective agencies and operators are provided. List of approved travel trade operators can be accessed.'),
(9, 'Tour and Travel', 'Celouro', '127.jpg', 'Find information on the travel and trade provided by My Tour. Users can get detailed information about the travel agents, inbound tour operators, tourist transport operators, adventure tour operators, domestic tour operators, etc. in India. Guidelines for respective agencies and operators are provided. List of approved travel trade operators can be accessed.'),
(10, 'Tourism', 'Destinations Travel', '113.jpg', 'Find information on the travel and trade provided by My Tour. Users can get detailed information about the travel agents, inbound tour operators, tourist transport operators, adventure tour operators, domestic tour operators, etc. in India. Guidelines for respective agencies and operators are provided. List of approved travel trade operators can be accessed.'),
(11, 'Tourism', 'Adventure Makers', '111.jpg', 'Find information on the travel and trade provided by My Tour. Users can get detailed information about the travel agents, inbound tour operators, tourist transport operators, adventure tour operators, domestic tour operators, etc. in India. Guidelines for respective agencies and operators are provided. List of approved travel trade operators can be accessed.'),
(12, 'Tourism', 'Goin My Way', '104.jpg', 'Find information on the travel and trade provided by My Tour. Users can get detailed information about the travel agents, inbound tour operators, tourist transport operators, adventure tour operators, domestic tour operators, etc. in India. Guidelines for respective agencies and operators are provided. List of approved travel trade operators can be accessed.');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(200) NOT NULL,
  `cat_name` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(1, 'Foreign Tour'),
(2, 'Internal Tour');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `contact_id` int(200) NOT NULL,
  `contact_name` varchar(50) NOT NULL,
  `contact_phoneNumber` varchar(50) NOT NULL,
  `contact_email` varchar(50) NOT NULL,
  `conact_message` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `destination`
--

CREATE TABLE `destination` (
  `des_id` int(100) NOT NULL,
  `des_name` varchar(2000) COLLATE latin1_general_ci NOT NULL,
  `des_detail` varchar(8000) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `destination`
--

INSERT INTO `destination` (`des_id`, `des_name`, `des_detail`) VALUES
(1, 'Singapore', '<h3 style=\"color:#C03;\">Long time ago ...</h3>\r\nAlthough the earliest records of Singapore history have been fading away over time, a third-century Chinese documentary describes the land as \"Pu-luo-chung\", or \" Island at the bottom of the peninsula \". Then, when the first communities formed between 1298 and 1299 AD, this land was known as Temasek (meaning \"Sea Town\").<br/>\r\n\r\nIn the 14th century, this small but strategically located island had a new name. According to legend, prince Sang Nila Utama from Palembang (capital of Srivijaya), on a hunting trip encountered a strange animal he had never seen. It was a good omen, he immediately ordered the city where the strange creature was called \"Lion City\" or Singapura, which in Sanskrit means \"simha\" meaning lion, and \"pura\" means is a city.<br/>\r\n\r\nAt that time, the city was under the control of the five kings of ancient Singapura. Situated at the forefront of the Malay Peninsula, is the natural convergence of maritime routes, the city has flourished as a bustling trading port for a myriad of cruise ships, Chinese traders, Arabian sailing ships, Portuguese warships and Bugis sailboats.<br/>\r\n\r\n<h3 style=\"color:#C03;\">Raffles effect</h3>\r\n\r\nPhotographed by: With the permission of the National Archives of Singapore\r\nThe strategic location of the city makes this place an ideal business center.\r\nModern Singapore was founded in the 19th century, thanks to politics, commerce and a man known as Thomas Stamford Raffles.<br/>\r\n\r\nDuring this period, the British Empire was seeking a harbor in the area to anchor its merchant ships, and to block the progress of the Dutch. Singapore, at that time a promising port, along the Straits of Malacca, seemed like an ideal choice.<br/>\r\n\r\nMr. Raffles, then governor of Bencoolen (now Bengkulu) in Sumatra, arrived in Singapore on January 29, 1819. Realizing the great potential of an island covered by swamps, he He negotiated a treaty with the rulers of the area, and built Singapore into a trade center. The city rapidly developed into an import-export trading center, attracting migrants from China, India, the Malay Archipelago and beyond.<br/>\r\n\r\nIn 1822, Raffles commissioned the Raffles Town Plan, also known as the Jackson Plan, to resolve the colonial disorder. The living quarters of the peoples are divided into four regions. The European Town is home to European, Eurasian and Asian merchants, while the Chinese often live in today\'s Chinatown and regional areas. South east of the Singapore River. Indians often live in Chulia Kampong, north of Chinatown, and Kampong Glam is home to Muslims, Malays and Arabs who have migrated to Singapore. Singapore continues to evolve as a trading port, with the establishment of a number of key banks, trade associations, and trade organizations. In 1924, a high embankment road was opened connecting the northern part of Singapore to Johor Bahru.<br/>\r\n\r\n<h3 style=\"color:#C03;\">Road to Independence</h3>\r\n\r\nSingapore has come a long way to become the nation it is today. In 1959, the development of nationalism formed an autonomous system in this country, and the first general election took place. The People\'s Action Party (PAP) won 43 seats, and Lee Kuan Yew became the first prime minister of Singapore. In 1963, Malaysia was established, including the Federation of Malaya, Singapore, Sarawak and North Borneo (now Sabah). This step aims to strengthen relationships more closely. However, the merger did not achieve much success, and almost two years later, particularly on 9 August 1965, Singapore was removed from Malaysia and became an independent state with sovereign democracy. Own territory Today, many slices of Singapore\'s multicultural past, colonial and war periods are still preserved in and around the city. You can visit monuments, museums and monuments, or walk along heritage routes to make the journey through time looking back.'),
(2, 'Tokyo', '<h3 style=\"color:#C03;\">Long time ago ...</h3>\r\nAlthough the earliest records of Singapore history have been fading away over time, a third-century Chinese documentary describes the land as \"Pu-luo-chung\", or \" Island at the bottom of the peninsula \". Then, when the first communities formed between 1298 and 1299 AD, this land was known as Temasek (meaning \"Sea Town\").<br/>\r\n\r\nIn the 14th century, this small but strategically located island had a new name. According to legend, prince Sang Nila Utama from Palembang (capital of Srivijaya), on a hunting trip encountered a strange animal he had never seen. It was a good omen, he immediately ordered the city where the strange creature was called \"Lion City\" or Singapura, which in Sanskrit means \"simha\" meaning lion, and \"pura\" means is a city.<br/>\r\n\r\nAt that time, the city was under the control of the five kings of ancient Singapura. Situated at the forefront of the Malay Peninsula, is the natural convergence of maritime routes, the city has flourished as a bustling trading port for a myriad of cruise ships, Chinese traders, Arabian sailing ships, Portuguese warships and Bugis sailboats.<br/>\r\n\r\n<h3 style=\"color:#C03;\">Raffles effect</h3>\r\n\r\nPhotographed by: With the permission of the National Archives of Singapore\r\nThe strategic location of the city makes this place an ideal business center.\r\nModern Singapore was founded in the 19th century, thanks to politics, commerce and a man known as Thomas Stamford Raffles.<br/>\r\n\r\nDuring this period, the British Empire was seeking a harbor in the area to anchor its merchant ships, and to block the progress of the Dutch. Singapore, at that time a promising port, along the Straits of Malacca, seemed like an ideal choice.<br/>\r\n\r\nMr. Raffles, then governor of Bencoolen (now Bengkulu) in Sumatra, arrived in Singapore on January 29, 1819. Realizing the great potential of an island covered by swamps, he He negotiated a treaty with the rulers of the area, and built Singapore into a trade center. The city rapidly developed into an import-export trading center, attracting migrants from China, India, the Malay Archipelago and beyond.<br/>\r\n\r\nIn 1822, Raffles commissioned the Raffles Town Plan, also known as the Jackson Plan, to resolve the colonial disorder. The living quarters of the peoples are divided into four regions. The European Town is home to European, Eurasian and Asian merchants, while the Chinese often live in today\'s Chinatown and regional areas. South east of the Singapore River. Indians often live in Chulia Kampong, north of Chinatown, and Kampong Glam is home to Muslims, Malays and Arabs who have migrated to Singapore. Singapore continues to evolve as a trading port, with the establishment of a number of key banks, trade associations, and trade organizations. In 1924, a high embankment road was opened connecting the northern part of Singapore to Johor Bahru.<br/>\r\n\r\n<h3 style=\"color:#C03;\">Road to Independence</h3>\r\n\r\nSingapore has come a long way to become the nation it is today. In 1959, the development of nationalism formed an autonomous system in this country, and the first general election took place. The People\'s Action Party (PAP) won 43 seats, and Lee Kuan Yew became the first prime minister of Singapore. In 1963, Malaysia was established, including the Federation of Malaya, Singapore, Sarawak and North Borneo (now Sabah). This step aims to strengthen relationships more closely. However, the merger did not achieve much success, and almost two years later, particularly on 9 August 1965, Singapore was removed from Malaysia and became an independent state with sovereign democracy. Own territory Today, many slices of Singapore\'s multicultural past, colonial and war periods are still preserved in and around the city. You can visit monuments, museums and monuments, or walk along heritage routes to make the journey through time looking back.'),
(3, 'ThaiLand', '<h3 style=\"color:#C03;\">Long time ago ...</h3>\r\nAlthough the earliest records of Singapore history have been fading away over time, a third-century Chinese documentary describes the land as \"Pu-luo-chung\", or \" Island at the bottom of the peninsula \". Then, when the first communities formed between 1298 and 1299 AD, this land was known as Temasek (meaning \"Sea Town\").<br/>\r\n\r\nIn the 14th century, this small but strategically located island had a new name. According to legend, prince Sang Nila Utama from Palembang (capital of Srivijaya), on a hunting trip encountered a strange animal he had never seen. It was a good omen, he immediately ordered the city where the strange creature was called \"Lion City\" or Singapura, which in Sanskrit means \"simha\" meaning lion, and \"pura\" means is a city.<br/>\r\n\r\nAt that time, the city was under the control of the five kings of ancient Singapura. Situated at the forefront of the Malay Peninsula, is the natural convergence of maritime routes, the city has flourished as a bustling trading port for a myriad of cruise ships, Chinese traders, Arabian sailing ships, Portuguese warships and Bugis sailboats.<br/>\r\n\r\n<h3 style=\"color:#C03;\">Raffles effect</h3>\r\n\r\nPhotographed by: With the permission of the National Archives of Singapore\r\nThe strategic location of the city makes this place an ideal business center.\r\nModern Singapore was founded in the 19th century, thanks to politics, commerce and a man known as Thomas Stamford Raffles.<br/>\r\n\r\nDuring this period, the British Empire was seeking a harbor in the area to anchor its merchant ships, and to block the progress of the Dutch. Singapore, at that time a promising port, along the Straits of Malacca, seemed like an ideal choice.<br/>\r\n\r\nMr. Raffles, then governor of Bencoolen (now Bengkulu) in Sumatra, arrived in Singapore on January 29, 1819. Realizing the great potential of an island covered by swamps, he He negotiated a treaty with the rulers of the area, and built Singapore into a trade center. The city rapidly developed into an import-export trading center, attracting migrants from China, India, the Malay Archipelago and beyond.<br/>\r\n\r\nIn 1822, Raffles commissioned the Raffles Town Plan, also known as the Jackson Plan, to resolve the colonial disorder. The living quarters of the peoples are divided into four regions. The European Town is home to European, Eurasian and Asian merchants, while the Chinese often live in today\'s Chinatown and regional areas. South east of the Singapore River. Indians often live in Chulia Kampong, north of Chinatown, and Kampong Glam is home to Muslims, Malays and Arabs who have migrated to Singapore. Singapore continues to evolve as a trading port, with the establishment of a number of key banks, trade associations, and trade organizations. In 1924, a high embankment road was opened connecting the northern part of Singapore to Johor Bahru.<br/>\r\n\r\n<h3 style=\"color:#C03;\">Road to Independence</h3>\r\n\r\nSingapore has come a long way to become the nation it is today. In 1959, the development of nationalism formed an autonomous system in this country, and the first general election took place. The People\'s Action Party (PAP) won 43 seats, and Lee Kuan Yew became the first prime minister of Singapore. In 1963, Malaysia was established, including the Federation of Malaya, Singapore, Sarawak and North Borneo (now Sabah). This step aims to strengthen relationships more closely. However, the merger did not achieve much success, and almost two years later, particularly on 9 August 1965, Singapore was removed from Malaysia and became an independent state with sovereign democracy. Own territory Today, many slices of Singapore\'s multicultural past, colonial and war periods are still preserved in and around the city. You can visit monuments, museums and monuments, or walk along heritage routes to make the journey through time looking back.'),
(4, 'Italy', '<h3 style=\"color:#C03;\">Long time ago ...</h3>\r\nAlthough the earliest records of Singapore history have been fading away over time, a third-century Chinese documentary describes the land as \"Pu-luo-chung\", or \" Island at the bottom of the peninsula \". Then, when the first communities formed between 1298 and 1299 AD, this land was known as Temasek (meaning \"Sea Town\").<br/>\r\n\r\nIn the 14th century, this small but strategically located island had a new name. According to legend, prince Sang Nila Utama from Palembang (capital of Srivijaya), on a hunting trip encountered a strange animal he had never seen. It was a good omen, he immediately ordered the city where the strange creature was called \"Lion City\" or Singapura, which in Sanskrit means \"simha\" meaning lion, and \"pura\" means is a city.<br/>\r\n\r\nAt that time, the city was under the control of the five kings of ancient Singapura. Situated at the forefront of the Malay Peninsula, is the natural convergence of maritime routes, the city has flourished as a bustling trading port for a myriad of cruise ships, Chinese traders, Arabian sailing ships, Portuguese warships and Bugis sailboats.<br/>\r\n\r\n<h3 style=\"color:#C03;\">Raffles effect</h3>\r\n\r\nPhotographed by: With the permission of the National Archives of Singapore\r\nThe strategic location of the city makes this place an ideal business center.\r\nModern Singapore was founded in the 19th century, thanks to politics, commerce and a man known as Thomas Stamford Raffles.<br/>\r\n\r\nDuring this period, the British Empire was seeking a harbor in the area to anchor its merchant ships, and to block the progress of the Dutch. Singapore, at that time a promising port, along the Straits of Malacca, seemed like an ideal choice.<br/>\r\n\r\nMr. Raffles, then governor of Bencoolen (now Bengkulu) in Sumatra, arrived in Singapore on January 29, 1819. Realizing the great potential of an island covered by swamps, he He negotiated a treaty with the rulers of the area, and built Singapore into a trade center. The city rapidly developed into an import-export trading center, attracting migrants from China, India, the Malay Archipelago and beyond.<br/>\r\n\r\nIn 1822, Raffles commissioned the Raffles Town Plan, also known as the Jackson Plan, to resolve the colonial disorder. The living quarters of the peoples are divided into four regions. The European Town is home to European, Eurasian and Asian merchants, while the Chinese often live in today\'s Chinatown and regional areas. South east of the Singapore River. Indians often live in Chulia Kampong, north of Chinatown, and Kampong Glam is home to Muslims, Malays and Arabs who have migrated to Singapore. Singapore continues to evolve as a trading port, with the establishment of a number of key banks, trade associations, and trade organizations. In 1924, a high embankment road was opened connecting the northern part of Singapore to Johor Bahru.<br/>\r\n\r\n<h3 style=\"color:#C03;\">Road to Independence</h3>\r\n\r\nSingapore has come a long way to become the nation it is today. In 1959, the development of nationalism formed an autonomous system in this country, and the first general election took place. The People\'s Action Party (PAP) won 43 seats, and Lee Kuan Yew became the first prime minister of Singapore. In 1963, Malaysia was established, including the Federation of Malaya, Singapore, Sarawak and North Borneo (now Sabah). This step aims to strengthen relationships more closely. However, the merger did not achieve much success, and almost two years later, particularly on 9 August 1965, Singapore was removed from Malaysia and became an independent state with sovereign democracy. Own territory Today, many slices of Singapore\'s multicultural past, colonial and war periods are still preserved in and around the city. You can visit monuments, museums and monuments, or walk along heritage routes to make the journey through time looking back.');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `emp_id` int(100) NOT NULL,
  `emp_code` varchar(50) NOT NULL,
  `emp_name` varchar(150) DEFAULT NULL,
  `emp_gender` varchar(20) DEFAULT NULL,
  `emp_addr` varchar(200) DEFAULT NULL,
  `emp_num` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`emp_id`, `emp_code`, `emp_name`, `emp_gender`, `emp_addr`, `emp_num`) VALUES
(1, 'HS', 'Huynh Sang', 'Male', '465312a', '4651320'),
(2, 'PV', 'Phan Vu', 'Male', '1315aa', '01234567');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `enq_id` int(200) NOT NULL,
  `pack_id` int(200) NOT NULL,
  `enq_name` varchar(200) NOT NULL,
  `enq_gender` varchar(20) NOT NULL,
  `enq_mobileno` varchar(20) NOT NULL,
  `enq_email` varchar(50) NOT NULL,
  `enq_child` int(50) NOT NULL,
  `enq_adults` int(50) NOT NULL,
  `enq_message` varchar(900) DEFAULT NULL,
  `enq_status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`enq_id`, `pack_id`, `enq_name`, `enq_gender`, `enq_mobileno`, `enq_email`, `enq_child`, `enq_adults`, `enq_message`, `enq_status`) VALUES
(3, 3, 'huynhminhsangit', 'Male', '1646827143', 'huynhminhsangit@gmail.com', 1, 1, '86415320', 'Pending'),
(4, 3, 'huynhminhsangit', 'Male', '1646827143', 'huynhminhsangit@gmail.com', 1, 1, 'aa', 'Pending'),
(5, 3, 'huynhminhsangit', 'Male', '1646827143', 'huynhminhsangit@gmail.com', 1, 2, 'abc', 'Pending'),
(6, 4, 'huynhminhsangit', 'Male', '1646827143', 'huynhminhsangit@gmail.com', 2, 3, 'aaaaa', 'Pending'),
(7, 3, 'huynhminhsangit', 'Male', '1646827143', 'huynhminhsangit@gmail.com', 1, 1, 'aaaaa', 'Pending'),
(8, 4, 'huynhminhsangit', 'Male', '1646827143', 'huynhminhsangit@gmail.com', 1, 2, 'aaaaa', 'Pending'),
(9, 4, 'huynhminhsangit', 'Male', '1646827143', 'huynhminhsangit@gmail.com', 1, 2, 'aaaaaa', 'Pending'),
(10, 4, 'huynhminhsangit', 'Male', '1646827143', 'huynhminhsangit@gmail.com', 2, 7, '', 'Pending'),
(11, 4, 'huynhminhsangit', 'Male', '1646827143', 'huynhminhsangit@gmail.com', 2, 7, '', 'Pending'),
(12, 4, 'huynhminhsangit', 'Male', '1646827143', 'huynhminhsangit@gmail.com', 3, 5, '', 'Pending'),
(13, 4, 'huynhminhsangit', 'Male', '1646827143', 'huynhminhsangit@gmail.com', 3, 5, '', 'Pending'),
(14, 4, 'huynhminhsangit', 'Male', '1646827143', 'huynhminhsangit@gmail.com', 1, 2, '', 'Pending'),
(15, 4, 'huynhminhsangit', 'Male', '1646827143', 'huynhminhsangit@gmail.com', 1, 5, '', 'Pending'),
(16, 4, 'huynhminhsangit', 'Male', '1646827143', 'huynhminhsangit@gmail.com', 1, 5, '', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `hotel_id` int(200) NOT NULL,
  `hotel_name` varchar(200) DEFAULT NULL,
  `hotel_addr` varchar(1000) DEFAULT NULL,
  `hotel_num` varchar(20) DEFAULT NULL,
  `hotel_type` int(11) DEFAULT NULL,
  `hotel_pic` varchar(1000) DEFAULT NULL,
  `hotel_detail` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`hotel_id`, `hotel_name`, `hotel_addr`, `hotel_num`, `hotel_type`, `hotel_pic`, `hotel_detail`) VALUES
(1, 'Muong Thanh', '123 Hung Vuong Street', '0831231234', 3, '123.jpg', 'Welcom to Muong Thanh Hotel'),
(2, 'Hai Au', '123 Hung Vuong Street', '0831231234', 3, '123.jpg', 'Welcom to Hai Au Hotel'),
(3, 'Vinper Lane', '223 Hiyoka, Tokyo japan', '08138439', 5, '98.jpg', 'welcome vinper');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `pack_id` int(200) NOT NULL,
  `pack_code` varchar(100) NOT NULL,
  `pack_name` varchar(1000) NOT NULL,
  `subcat_id` int(200) NOT NULL,
  `emp_id` int(200) NOT NULL,
  `hotel_id` int(200) NOT NULL,
  `pack_price` int(200) NOT NULL,
  `pack_pic1` varchar(8000) NOT NULL,
  `pack_pic2` varchar(8000) NOT NULL,
  `pack_pic3` varchar(8000) NOT NULL,
  `pack_detail` varchar(8000) NOT NULL,
  `pack_seat` int(11) DEFAULT NULL,
  `pack_set` int(11) DEFAULT '0',
  `pack_startday` date DEFAULT NULL,
  `pack_finishday` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`pack_id`, `pack_code`, `pack_name`, `subcat_id`, `emp_id`, `hotel_id`, `pack_price`, `pack_pic1`, `pack_pic2`, `pack_pic3`, `pack_detail`, `pack_seat`, `pack_set`, `pack_startday`, `pack_finishday`) VALUES
(1, 'HCMDN01', 'HCM - Da Nang', 1, 1, 1, 899, '31.jpg', '32.jpg', '33.jpg', 'Welcome to Da Nang City ...', 35, 0, '2017-04-17', '2017-04-19'),
(2, 'HCMPT01', 'HCM - Phan Thiet', 2, 1, 1, 899, '31.jpg', '32.jpg', '33.jpg', 'Welcome to Phan Thiet City ...', 35, 0, '2017-04-17', '2017-04-19'),
(3, 'HCMTKO01', 'HCM - Tokyo', 3, 1, 1, 1899, '31.jpg', '32.jpg', '33.jpg', '<strong style=\"color: red\">FLY HOUR: Notification After</strong><p>\r\n<strong>Day 1: TP. HO CHI MINH - TOKYO (Lunch, Dinner)</strong></br>\r\nBefore 01 Car and guide Vietravel welcome you at 190 Pasteur, District 3, Ho Chi Minh City and Tan Son Nhat airport for flight to Japan. Overnight on board.\r\n\r\nVisit Tokyo Narita International Airport, you visit Tokyo with Asakusa Kannon Temple (or Sensoji Temple) - the oldest temple in Tokyo; Continue to visit the Imperial Palace of Japan built on the foundation of Long Edo - a large park surrounded by lakes and stone walls in the center of Tokyo, this is also the residence of the Royal. Current Japan (outdoor shooting); A view of the city from the Tokyo Tower - built in 1958 with a height of 333 m. At this height, the Tokyo Tower is higher than the Eiffel Tower in Paris, which is 320 meters high. It was built in 1889 and is the tallest steel tower in the world. Have lunch at local restaurant. In the afternoon, you visit, shopping at the Ginza. Have dinner and check in hotel room to rest.<p>\r\n\r\n<strong>Day 2: TOKYO - HAKONE - PHU Si - KAWAGUCHIKO (3 meals)</strong></br>\r\n\r\nBreakfast at the hotel and check out. Pick up your car to Hakone. You will have the opportunity to sail on the romantic Lake Ashi. Arrive in Kawaguchiko, then depart for Mount Fuji - the symbol of Japan at 3776 m above sea level. You will go up the mountain to the 5th station if the weather permits. Take you to the area of Lake Motosu is one of \"Lakes Phu\". From April to May, when the Cherry Blossom season ended in Tokyo, it was the time when Hoa Chi Anh, also known as Fuji Shibazakura, bloomed. At this time, the Fuji Shibazakura Festival takes place annually at the Fuji Motosuko Resort area, with more than 800,000 cherry blossoms in red, pink and white blooming to create brilliant flower beds, far tops. Mt. Fuji stands out, creating an unforgettable scenery. Depart to Kawaguchi for dinner and check in hotel relax and take a dip in the spa.\r\n\r\nNote: Blossoming flowers are susceptible to external weather conditions that bloom early or late. This is the case of force majeure you understand and understand. Sincerely thank.<p>\r\n\r\n<strong>Day 3: KAWAGUCHIKO - MATSUMOTO - HCM (Breakfast)</strong></br>\r\nBreakfast at the hotel. Free time to take you to the airport to check in Ho Chi Minh City. Arrive Tan Son Nhat International Airport, pick up Vietravel car and take you back to 365 Pasteur, District 3, Ho Chi Minh City. Ho Chi Minh. End the tour.', 35, 35, '2017-04-17', '2017-04-19'),
(4, 'HCMSGPO01', 'HCM - Singapore', 4, 1, 1, 1899, '31.jpg', '32.jpg', '33.jpg', '<strong style=\"color: red\">FLY HOUR: Notification After</strong><br/>\r\n\r\n<strong>Day 1: HO CHI MINH CITY - SINGAPORE: (Dinner)</strong> </br>\r\nHead of Vietravel delegation welcome you at Tan Son Nhat airport to travel to Singapore. Changi Changi, car and guide work guidance and reference company Sea Lion Jobs. Journey through Main Town, Esplanade Theater, Wealth Fountain, Suntec City. You will visit the Buddhist temple, the great temple, hold important positions on the spiritual and religious aspects of the people. Have dinner at the restaurant. Delegate to check in and hotel at 3 star.<p>\r\n\r\n<strong>Day 2: SINGAPORE (eat three meals)</strong> </br>\r\n\r\nBreakfast at the hotel. You will visit a special ecological garden called Bay South Garden with solar \"super\" trees. The garden is part of the Gardens by the Bay project, Singapore\'s largest eco-company project that enhances the quality of life and keeps the city green. The entire project has a total area of 101 hectares, divided into three distinct areas: South Bay, East Bay and Central Bay. You will have the opportunity to access the cool climate of the Mediterranean at the Flower Dome, home to 30,000 species of over 150 species, spanning nine gardens. In time, the garden always changes the flower symbol for the season, the festival as well as the owner of the transaction. You have to meet you at the difference of the OCBC Skyway - The path through a long 128m connection between the two superrographs, highly recommended to walk to any any time, where can be seen Look back the region and frameworks from the location of the Marina Bay from the above. Shopping at Diamond Industry, Habour Mart. Nay lunch. Take in panoramic views of beautiful Singapore from the top of Mount Faber. Visit the Marina Dam - a clean water filter company in the center of this beautiful city. In the afternoon, the delegation ride to Sentosa Island. Visiting the Sky Tower - From the Sky Tower, at an altitude of 110 m, you can enlarge the panoramic view and cover Singapore, with the southern islands and the entire island of Sentosa. In particular, you also have the opportunity to participate and try your luck at the resort Resort Casino Resort 5 star resort (For Guests aged 21 and above) Guests under the age of 21 can freely visit the fun Playing in Sentosa). In the evening, the award-winning \"Wings of Time\" - the first totally new and exciting show in Singapore with an effective blend of spark, high-powered water-spraying robot. Lazer current generated, effect to live 3D and an unique. The show takes place on the beautiful Siloso beach along with a fireworks display that will bring unforgettable impression to the guests. Dinner and free time at the hotel. <P>\r\n\r\n<strong>Day 3: SINGAPORE - HCM (Breakfast) </strong></br>\r\n\r\nBreakfast at the hotel. You make your own bus to Changi International Airport (excluding light meals on board). About Tan Son Nhat airport, finish the tour. Head of Vietravel delegation farewell and meet with customers in the following programs.. Arrive Tan Son Nhat International Airport, pick up Vietravel car and take you back to 365 Pasteur, District 3, Ho Chi Minh City. Ho Chi Minh. End the tour.', 35, 31, '2017-04-17', '2017-04-19'),
(5, 'HCMSGPO02', 'HCM - Singapore', 5, 1, 1, 1899, '31.jpg', '32.jpg', '33.jpg', '<strong style=\"color: red\">FLY HOUR: Notification After</strong><br/>\r\n\r\n<strong>Day 1: HO CHI MINH CITY - SINGAPORE: (Dinner)</strong> </br>\r\nHead of Vietravel delegation welcome you at Tan Son Nhat airport to travel to Singapore. Changi Changi, car and guide work guidance and reference company Sea Lion Jobs. Journey through Main Town, Esplanade Theater, Wealth Fountain, Suntec City. You will visit the Buddhist temple, the great temple, hold important positions on the spiritual and religious aspects of the people. Have dinner at the restaurant. Delegate to check in and hotel at 3 star.<p>\r\n\r\n<strong>Day 2: SINGAPORE (eat three meals)</strong> </br>\r\n\r\nBreakfast at the hotel. You will visit a special ecological garden called Bay South Garden with solar \"super\" trees. The garden is part of the Gardens by the Bay project, Singapore\'s largest eco-company project that enhances the quality of life and keeps the city green. The entire project has a total area of 101 hectares, divided into three distinct areas: South Bay, East Bay and Central Bay. You will have the opportunity to access the cool climate of the Mediterranean at the Flower Dome, home to 30,000 species of over 150 species, spanning nine gardens. In time, the garden always changes the flower symbol for the season, the festival as well as the owner of the transaction. You have to meet you at the difference of the OCBC Skyway - The path through a long 128m connection between the two superrographs, highly recommended to walk to any any time, where can be seen Look back the region and frameworks from the location of the Marina Bay from the above. Shopping at Diamond Industry, Habour Mart. Nay lunch. Take in panoramic views of beautiful Singapore from the top of Mount Faber. Visit the Marina Dam - a clean water filter company in the center of this beautiful city. In the afternoon, the delegation ride to Sentosa Island. Visiting the Sky Tower - From the Sky Tower, at an altitude of 110 m, you can enlarge the panoramic view and cover Singapore, with the southern islands and the entire island of Sentosa. In particular, you also have the opportunity to participate and try your luck at the resort Resort Casino Resort 5 star resort (For Guests aged 21 and above) Guests under the age of 21 can freely visit the fun Playing in Sentosa). In the evening, the award-winning \"Wings of Time\" - the first totally new and exciting show in Singapore with an effective blend of spark, high-powered water-spraying robot. Lazer current generated, effect to live 3D and an unique. The show takes place on the beautiful Siloso beach along with a fireworks display that will bring unforgettable impression to the guests. Dinner and free time at the hotel. <P>\r\n\r\n<strong>Day 3: SINGAPORE - HCM (Breakfast) </strong></br>\r\n\r\nBreakfast at the hotel. You make your own bus to Changi International Airport (excluding light meals on board). About Tan Son Nhat airport, finish the tour. Head of Vietravel delegation farewell and meet with customers in the following programs. Arrive Tan Son Nhat International Airport, pick up Vietravel car and take you back to 365 Pasteur, District 3, Ho Chi Minh City. Ho Chi Minh. End the tour.', 35, 0, '2017-04-17', '2017-04-19'),
(6, 'HCMHN01', 'HCM - Ha Noi', 6, 2, 1, 1899, '31.jpg', '32.jpg', '33.jpg', '<strong style=\"color: red\">FLY HOUR: Notification After</strong><br/>\r\n\r\n<strong>Day 1: HO CHI MINH CITY - SINGAPORE: (Dinner)</strong> </br>\r\nHead of Vietravel delegation welcome you at Tan Son Nhat airport to travel to Singapore. Changi Changi, car and guide work guidance and reference company Sea Lion Jobs. Journey through Main Town, Esplanade Theater, Wealth Fountain, Suntec City. You will visit the Buddhist temple, the great temple, hold important positions on the spiritual and religious aspects of the people. Have dinner at the restaurant. Delegate to check in and hotel at 3 star.<p>\r\n\r\n<strong>Day 2: SINGAPORE (eat three meals)</strong> </br>\r\n\r\nBreakfast at the hotel. You will visit a special ecological garden called Bay South Garden with solar \"super\" trees. The garden is part of the Gardens by the Bay project, Singapore\'s largest eco-company project that enhances the quality of life and keeps the city green. The entire project has a total area of 101 hectares, divided into three distinct areas: South Bay, East Bay and Central Bay. You will have the opportunity to access the cool climate of the Mediterranean at the Flower Dome, home to 30,000 species of over 150 species, spanning nine gardens. In time, the garden always changes the flower symbol for the season, the festival as well as the owner of the transaction. You have to meet you at the difference of the OCBC Skyway - The path through a long 128m connection between the two superrographs, highly recommended to walk to any any time, where can be seen Look back the region and frameworks from the location of the Marina Bay from the above. Shopping at Diamond Industry, Habour Mart. Nay lunch. Take in panoramic views of beautiful Singapore from the top of Mount Faber. Visit the Marina Dam - a clean water filter company in the center of this beautiful city. In the afternoon, the delegation ride to Sentosa Island. Visiting the Sky Tower - From the Sky Tower, at an altitude of 110 m, you can enlarge the panoramic view and cover Singapore, with the southern islands and the entire island of Sentosa. In particular, you also have the opportunity to participate and try your luck at the resort Resort Casino Resort 5 star resort (For Guests aged 21 and above) Guests under the age of 21 can freely visit the fun Playing in Sentosa). In the evening, the award-winning \"Wings of Time\" - the first totally new and exciting show in Singapore with an effective blend of spark, high-powered water-spraying robot. Lazer current generated, effect to live 3D and an unique. The show takes place on the beautiful Siloso beach along with a fireworks display that will bring unforgettable impression to the guests. Dinner and free time at the hotel. <P>\r\n\r\n<strong>Day 3: SINGAPORE - HCM (Breakfast) </strong></br>\r\n\r\nBreakfast at the hotel. You make your own bus to Changi International Airport (excluding light meals on board). About Tan Son Nhat airport, finish the tour. Head of Vietravel delegation farewell and meet with customers in the following programs. Arrive Tan Son Nhat International Airport, pick up Vietravel car and take you back to 365 Pasteur, District 3, Ho Chi Minh City. Ho Chi Minh. End the tour.', 40, 0, '2017-04-17', '2017-04-19'),
(7, 'HCMVHL01', 'HCM - Vinh Ha Long', 7, 2, 1, 1899, '31.jpg', '32.jpg', '33.jpg', '<strong style=\"color: red\">FLY HOUR: Notification After</strong><br/>\r\n\r\n<strong>Day 1: HO CHI MINH CITY - SINGAPORE: (Dinner)</strong> </br>\r\nHead of Vietravel delegation welcome you at Tan Son Nhat airport to travel to Singapore. Changi Changi, car and guide work guidance and reference company Sea Lion Jobs. Journey through Main Town, Esplanade Theater, Wealth Fountain, Suntec City. You will visit the Buddhist temple, the great temple, hold important positions on the spiritual and religious aspects of the people. Have dinner at the restaurant. Delegate to check in and hotel at 3 star.<p>\r\n\r\n<strong>Day 2: SINGAPORE (eat three meals)</strong> </br>\r\n\r\nBreakfast at the hotel. You will visit a special ecological garden called Bay South Garden with solar \"super\" trees. The garden is part of the Gardens by the Bay project, Singapore\'s largest eco-company project that enhances the quality of life and keeps the city green. The entire project has a total area of 101 hectares, divided into three distinct areas: South Bay, East Bay and Central Bay. You will have the opportunity to access the cool climate of the Mediterranean at the Flower Dome, home to 30,000 species of over 150 species, spanning nine gardens. In time, the garden always changes the flower symbol for the season, the festival as well as the owner of the transaction. You have to meet you at the difference of the OCBC Skyway - The path through a long 128m connection between the two superrographs, highly recommended to walk to any any time, where can be seen Look back the region and frameworks from the location of the Marina Bay from the above. Shopping at Diamond Industry, Habour Mart. Nay lunch. Take in panoramic views of beautiful Singapore from the top of Mount Faber. Visit the Marina Dam - a clean water filter company in the center of this beautiful city. In the afternoon, the delegation ride to Sentosa Island. Visiting the Sky Tower - From the Sky Tower, at an altitude of 110 m, you can enlarge the panoramic view and cover Singapore, with the southern islands and the entire island of Sentosa. In particular, you also have the opportunity to participate and try your luck at the resort Resort Casino Resort 5 star resort (For Guests aged 21 and above) Guests under the age of 21 can freely visit the fun Playing in Sentosa). In the evening, the award-winning \"Wings of Time\" - the first totally new and exciting show in Singapore with an effective blend of spark, high-powered water-spraying robot. Lazer current generated, effect to live 3D and an unique. The show takes place on the beautiful Siloso beach along with a fireworks display that will bring unforgettable impression to the guests. Dinner and free time at the hotel. <P>\r\n\r\n<strong>Day 3: SINGAPORE - HCM (Breakfast) </strong></br>\r\n\r\nBreakfast at the hotel. You make your own bus to Changi International Airport (excluding light meals on board). About Tan Son Nhat airport, finish the tour. Head of Vietravel delegation farewell and meet with customers in the following programs. Arrive Tan Son Nhat International Airport, pick up Vietravel car and take you back to 365 Pasteur, District 3, Ho Chi Minh City. Ho Chi Minh. End the tour.', 40, 0, '2017-04-19', '2017-04-21'),
(8, 'HCMITA01', 'HCM - Italy', 8, 2, 1, 2199, '31.jpg', '32.jpg', '33.jpg', '<strong style=\"color: red\">FLY HOUR: Notification After</strong><br/>\r\n\r\n<strong>Day 1: HO CHI MINH CITY - SINGAPORE: (Dinner)</strong> </br>\r\nHead of Vietravel delegation welcome you at Tan Son Nhat airport to travel to Singapore. Changi Changi, car and guide work guidance and reference company Sea Lion Jobs. Journey through Main Town, Esplanade Theater, Wealth Fountain, Suntec City. You will visit the Buddhist temple, the great temple, hold important positions on the spiritual and religious aspects of the people. Have dinner at the restaurant. Delegate to check in and hotel at 3 star.<p>\r\n\r\n<strong>Day 2: SINGAPORE (eat three meals)</strong> </br>\r\n\r\nBreakfast at the hotel. You will visit a special ecological garden called Bay South Garden with solar \"super\" trees. The garden is part of the Gardens by the Bay project, Singapore\'s largest eco-company project that enhances the quality of life and keeps the city green. The entire project has a total area of 101 hectares, divided into three distinct areas: South Bay, East Bay and Central Bay. You will have the opportunity to access the cool climate of the Mediterranean at the Flower Dome, home to 30,000 species of over 150 species, spanning nine gardens. In time, the garden always changes the flower symbol for the season, the festival as well as the owner of the transaction. You have to meet you at the difference of the OCBC Skyway - The path through a long 128m connection between the two superrographs, highly recommended to walk to any any time, where can be seen Look back the region and frameworks from the location of the Marina Bay from the above. Shopping at Diamond Industry, Habour Mart. Nay lunch. Take in panoramic views of beautiful Singapore from the top of Mount Faber. Visit the Marina Dam - a clean water filter company in the center of this beautiful city. In the afternoon, the delegation ride to Sentosa Island. Visiting the Sky Tower - From the Sky Tower, at an altitude of 110 m, you can enlarge the panoramic view and cover Singapore, with the southern islands and the entire island of Sentosa. In particular, you also have the opportunity to participate and try your luck at the resort Resort Casino Resort 5 star resort (For Guests aged 21 and above) Guests under the age of 21 can freely visit the fun Playing in Sentosa). In the evening, the award-winning \"Wings of Time\" - the first totally new and exciting show in Singapore with an effective blend of spark, high-powered water-spraying robot. Lazer current generated, effect to live 3D and an unique. The show takes place on the beautiful Siloso beach along with a fireworks display that will bring unforgettable impression to the guests. Dinner and free time at the hotel. <P>\r\n\r\n<strong>Day 3: SINGAPORE - HCM (Breakfast) </strong></br>\r\n\r\nBreakfast at the hotel. You make your own bus to Changi International Airport (excluding light meals on board). About Tan Son Nhat airport, finish the tour. Head of Vietravel delegation farewell and meet with customers in the following programs. Arrive Tan Son Nhat International Airport, pick up Vietravel car and take you back to 365 Pasteur, District 3, Ho Chi Minh City. Ho Chi Minh. End the tour.', 40, 0, '2017-04-19', '2017-04-21'),
(9, 'HCMTL01', 'HCM - ThaiLand', 9, 2, 1, 2199, '31.jpg', '32.jpg', '33.jpg', '<strong style=\"color: red\">FLY HOUR: Notification After</strong><br/>\r\n\r\n<strong>Day 1: HO CHI MINH CITY - SINGAPORE: (Dinner)</strong> </br>\r\nHead of Vietravel delegation welcome you at Tan Son Nhat airport to travel to Singapore. Changi Changi, car and guide work guidance and reference company Sea Lion Jobs. Journey through Main Town, Esplanade Theater, Wealth Fountain, Suntec City. You will visit the Buddhist temple, the great temple, hold important positions on the spiritual and religious aspects of the people. Have dinner at the restaurant. Delegate to check in and hotel at 3 star.<p>\r\n\r\n<strong>Day 2: SINGAPORE (eat three meals)</strong> </br>\r\n\r\nBreakfast at the hotel. You will visit a special ecological garden called Bay South Garden with solar \"super\" trees. The garden is part of the Gardens by the Bay project, Singapore\'s largest eco-company project that enhances the quality of life and keeps the city green. The entire project has a total area of 101 hectares, divided into three distinct areas: South Bay, East Bay and Central Bay. You will have the opportunity to access the cool climate of the Mediterranean at the Flower Dome, home to 30,000 species of over 150 species, spanning nine gardens. In time, the garden always changes the flower symbol for the season, the festival as well as the owner of the transaction. You have to meet you at the difference of the OCBC Skyway - The path through a long 128m connection between the two superrographs, highly recommended to walk to any any time, where can be seen Look back the region and frameworks from the location of the Marina Bay from the above. Shopping at Diamond Industry, Habour Mart. Nay lunch. Take in panoramic views of beautiful Singapore from the top of Mount Faber. Visit the Marina Dam - a clean water filter company in the center of this beautiful city. In the afternoon, the delegation ride to Sentosa Island. Visiting the Sky Tower - From the Sky Tower, at an altitude of 110 m, you can enlarge the panoramic view and cover Singapore, with the southern islands and the entire island of Sentosa. In particular, you also have the opportunity to participate and try your luck at the resort Resort Casino Resort 5 star resort (For Guests aged 21 and above) Guests under the age of 21 can freely visit the fun Playing in Sentosa). In the evening, the award-winning \"Wings of Time\" - the first totally new and exciting show in Singapore with an effective blend of spark, high-powered water-spraying robot. Lazer current generated, effect to live 3D and an unique. The show takes place on the beautiful Siloso beach along with a fireworks display that will bring unforgettable impression to the guests. Dinner and free time at the hotel. <P>\r\n\r\n<strong>Day 3: SINGAPORE - HCM (Breakfast) </strong></br>\r\n\r\nBreakfast at the hotel. You make your own bus to Changi International Airport (excluding light meals on board). About Tan Son Nhat airport, finish the tour. Head of Vietravel delegation farewell and meet with customers in the following programs. Arrive Tan Son Nhat International Airport, pick up Vietravel car and take you back to 365 Pasteur, District 3, Ho Chi Minh City. Ho Chi Minh. End the tour.', 35, 0, '2017-04-19', '2017-04-21'),
(10, 'HCMBD01', 'HCM - Binh Dinh', 10, 2, 1, 399, '31.jpg', '32.jpg', '33.jpg', '<strong style=\"color: red\">FLY HOUR: Notification After</strong><br/>\r\n\r\n<strong>Day 1: HO CHI MINH CITY - SINGAPORE: (Dinner)</strong> </br>\r\nHead of Vietravel delegation welcome you at Tan Son Nhat airport to travel to Singapore. Changi Changi, car and guide work guidance and reference company Sea Lion Jobs. Journey through Main Town, Esplanade Theater, Wealth Fountain, Suntec City. You will visit the Buddhist temple, the great temple, hold important positions on the spiritual and religious aspects of the people. Have dinner at the restaurant. Delegate to check in and hotel at 3 star.<p>\r\n\r\n<strong>Day 2: SINGAPORE (eat three meals)</strong> </br>\r\n\r\nBreakfast at the hotel. You will visit a special ecological garden called Bay South Garden with solar \"super\" trees. The garden is part of the Gardens by the Bay project, Singapore\'s largest eco-company project that enhances the quality of life and keeps the city green. The entire project has a total area of 101 hectares, divided into three distinct areas: South Bay, East Bay and Central Bay. You will have the opportunity to access the cool climate of the Mediterranean at the Flower Dome, home to 30,000 species of over 150 species, spanning nine gardens. In time, the garden always changes the flower symbol for the season, the festival as well as the owner of the transaction. You have to meet you at the difference of the OCBC Skyway - The path through a long 128m connection between the two superrographs, highly recommended to walk to any any time, where can be seen Look back the region and frameworks from the location of the Marina Bay from the above. Shopping at Diamond Industry, Habour Mart. Nay lunch. Take in panoramic views of beautiful Singapore from the top of Mount Faber. Visit the Marina Dam - a clean water filter company in the center of this beautiful city. In the afternoon, the delegation ride to Sentosa Island. Visiting the Sky Tower - From the Sky Tower, at an altitude of 110 m, you can enlarge the panoramic view and cover Singapore, with the southern islands and the entire island of Sentosa. In particular, you also have the opportunity to participate and try your luck at the resort Resort Casino Resort 5 star resort (For Guests aged 21 and above) Guests under the age of 21 can freely visit the fun Playing in Sentosa). In the evening, the award-winning \"Wings of Time\" - the first totally new and exciting show in Singapore with an effective blend of spark, high-powered water-spraying robot. Lazer current generated, effect to live 3D and an unique. The show takes place on the beautiful Siloso beach along with a fireworks display that will bring unforgettable impression to the guests. Dinner and free time at the hotel. <P>\r\n\r\n<strong>Day 3: SINGAPORE - HCM (Breakfast) </strong></br>\r\n\r\nBreakfast at the hotel. You make your own bus to Changi International Airport (excluding light meals on board). About Tan Son Nhat airport, finish the tour. Head of Vietravel delegation farewell and meet with customers in the following programs. Arrive Tan Son Nhat International Airport, pick up Vietravel car and take you back to 365 Pasteur, District 3, Ho Chi Minh City. Ho Chi Minh. End the tour.', 35, 0, '2017-04-19', '2017-04-21');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `subcat_id` int(200) NOT NULL,
  `subcat_name` varchar(1000) NOT NULL,
  `cat_id` int(200) DEFAULT NULL,
  `subcat_pic` varchar(8000) NOT NULL,
  `subcat_detail` varchar(8000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`subcat_id`, `subcat_name`, `cat_id`, `subcat_pic`, `subcat_detail`) VALUES
(1, 'HCM - Da Nang', 2, '131.jpg', 'Visiting Da Nang, the first thing that a customer feels is a land of convergence of texts, and each reunited documentary is concentrated in a separate neighborhood with cultural texts. People. In addition, Singapore is also known as a land of electoral highs and lakes with resorts, commercial and luxury. You will feel the harmony between traditional and modern in this country.'),
(2, 'HCM - Phan Thiet', 2, '68.jpg', 'Visiting Phan Thiet, the first thing that a customer feels is a land of convergence of texts, and each reunited documentary is concentrated in a separate neighborhood with cultural texts. People. In addition, Singapore is also known as a land of electoral highs and lakes with resorts, commercial and luxury. You will feel the harmony between traditional and modern in this country.'),
(3, 'HCM - Tokyo', 1, '138.jpg', 'Visiting Tokyo, the first thing that a customer feels is a land of convergence of texts, and each reunited documentary is concentrated in a separate neighborhood with cultural texts. People. In addition, Singapore is also known as a land of electoral highs and lakes with resorts, commercial and luxury. You will feel the harmony between traditional and modern in this country.'),
(4, 'HCM - Singapore', 1, '137.jpg', 'Visiting Singapore, the first thing that a customer feels is a land of convergence of texts, and each reunited documentary is concentrated in a separate neighborhood with cultural texts. People. In addition, Singapore is also known as a land of electoral highs and lakes with resorts, commercial and luxury. You will feel the harmony between traditional and modern in this country.'),
(5, 'HCM - Singapore', 1, '137.jpg', 'Visiting Singapore, the first thing that a customer feels is a land of convergence of texts, and each reunited documentary is concentrated in a separate neighborhood with cultural texts. People. In addition, Singapore is also known as a land of electoral highs and lakes with resorts, commercial and luxury. You will feel the harmony between traditional and modern in this country.'),
(6, 'HCM - Ha Noi', 2, '67.jpg', 'Visiting Singapore, the first thing that a customer feels is a land of convergence of texts, and each reunited documentary is concentrated in a separate neighborhood with cultural texts. People. In addition, Singapore is also known as a land of electoral highs and lakes with resorts, commercial and luxury. You will feel the harmony between traditional and modern in this country.'),
(7, 'HCM - Vinh Ha Long', 2, '25.jpg', 'Visiting Singapore, the first thing that a customer feels is a land of convergence of texts, and each reunited documentary is concentrated in a separate neighborhood with cultural texts. People. In addition, Singapore is also known as a land of electoral highs and lakes with resorts, commercial and luxury. You will feel the harmony between traditional and modern in this country.'),
(8, 'HCM - Italy', 1, '38.jpg', 'Visiting Singapore, the first thing that a customer feels is a land of convergence of texts, and each reunited documentary is concentrated in a separate neighborhood with cultural texts. People. In addition, Singapore is also known as a land of electoral highs and lakes with resorts, commercial and luxury. You will feel the harmony between traditional and modern in this country.'),
(9, 'HCM - ThaiLand', 1, '42.jpg', 'Visiting Singapore, the first thing that a customer feels is a land of convergence of texts, and each reunited documentary is concentrated in a separate neighborhood with cultural texts. People. In addition, Singapore is also known as a land of electoral highs and lakes with resorts, commercial and luxury. You will feel the harmony between traditional and modern in this country.'),
(10, 'HCM - Binh Dinh', 2, '4.jpg', 'Visiting Singapore, the first thing that a customer feels is a land of convergence of texts, and each reunited documentary is concentrated in a separate neighborhood with cultural texts. People. In addition, Singapore is also known as a land of electoral highs and lakes with resorts, commercial and luxury. You will feel the harmony between traditional and modern in this country.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users_id` int(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  `typeofuser` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_id`, `username`, `pwd`, `typeofuser`) VALUES
(1, 'admin', 'admin', 'Admin'),
(2, 'sang', 'sang', 'General');

-- --------------------------------------------------------

--
-- Table structure for table `visitor_comments`
--

CREATE TABLE `visitor_comments` (
  `com_id` int(200) NOT NULL,
  `com_name` varchar(1000) NOT NULL,
  `pack_id` int(11) NOT NULL,
  `com_date` datetime DEFAULT NULL,
  `com_detail` varchar(8000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advertisement`
--
ALTER TABLE `advertisement`
  ADD PRIMARY KEY (`adv_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `destination`
--
ALTER TABLE `destination`
  ADD PRIMARY KEY (`des_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`emp_id`),
  ADD UNIQUE KEY `emp_code` (`emp_code`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`enq_id`),
  ADD KEY `fk_enq_pack` (`pack_id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`hotel_id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`pack_id`),
  ADD UNIQUE KEY `pack_code` (`pack_code`),
  ADD KEY `fk_pack_subcat` (`subcat_id`),
  ADD KEY `fk_pack_emp` (`emp_id`),
  ADD KEY `fk_pack_hotel` (`hotel_id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`subcat_id`),
  ADD KEY `fk_subcat_cat` (`cat_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- Indexes for table `visitor_comments`
--
ALTER TABLE `visitor_comments`
  ADD PRIMARY KEY (`com_id`),
  ADD KEY `fk_visit_pack` (`pack_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advertisement`
--
ALTER TABLE `advertisement`
  MODIFY `adv_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `contact_id` int(200) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `destination`
--
ALTER TABLE `destination`
  MODIFY `des_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `emp_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `enq_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `hotel_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `pack_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `subcat_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `visitor_comments`
--
ALTER TABLE `visitor_comments`
  MODIFY `com_id` int(200) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD CONSTRAINT `fk_enq_pack` FOREIGN KEY (`pack_id`) REFERENCES `package` (`pack_id`);

--
-- Constraints for table `package`
--
ALTER TABLE `package`
  ADD CONSTRAINT `fk_pack_emp` FOREIGN KEY (`emp_id`) REFERENCES `employees` (`emp_id`),
  ADD CONSTRAINT `fk_pack_hotel` FOREIGN KEY (`hotel_id`) REFERENCES `hotel` (`hotel_id`),
  ADD CONSTRAINT `fk_pack_subcat` FOREIGN KEY (`subcat_id`) REFERENCES `subcategory` (`subcat_id`);

--
-- Constraints for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD CONSTRAINT `fk_subcat_cat` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`);

--
-- Constraints for table `visitor_comments`
--
ALTER TABLE `visitor_comments`
  ADD CONSTRAINT `fk_visit_pack` FOREIGN KEY (`pack_id`) REFERENCES `package` (`pack_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
