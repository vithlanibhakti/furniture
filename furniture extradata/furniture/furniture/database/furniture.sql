-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2013 at 09:23 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `furniture`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_reg`
--

CREATE TABLE IF NOT EXISTS `admin_reg` (
  `ad_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`ad_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin_reg`
--

INSERT INTO `admin_reg` (`ad_id`, `username`, `password`, `email`) VALUES
(1, 'admin', 'admin', 'paragbaraiya@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `branch_detail`
--

CREATE TABLE IF NOT EXISTS `branch_detail` (
  `br_id` int(11) NOT NULL AUTO_INCREMENT,
  `br_name` varchar(50) NOT NULL,
  `br_address` varchar(100) NOT NULL,
  `country` int(11) NOT NULL,
  `state` int(11) NOT NULL,
  `city` int(11) NOT NULL,
  `br_incharge` varchar(30) NOT NULL,
  `br_mobile` varchar(20) NOT NULL,
  `br_phone` varchar(20) NOT NULL,
  `br_email` varchar(50) NOT NULL,
  `br_fax` varchar(20) NOT NULL,
  PRIMARY KEY (`br_id`),
  UNIQUE KEY `br_name` (`br_name`),
  UNIQUE KEY `br_mobile` (`br_mobile`),
  UNIQUE KEY `br_phone` (`br_phone`),
  UNIQUE KEY `br_email` (`br_email`),
  KEY `country` (`country`),
  KEY `state` (`state`),
  KEY `city` (`city`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `branch_detail`
--

INSERT INTO `branch_detail` (`br_id`, `br_name`, `br_address`, `country`, `state`, `city`, `br_incharge`, `br_mobile`, `br_phone`, `br_email`, `br_fax`) VALUES
(1, 'Ahmedabad', 'Apollo house,gr.floor, opp.crossword,navarangpura,Ahmedabad-380009', 11, 15, 57, 'Mr Chintan', '7878025100', '079-30071300', 'chintan@retailfurniture.com', '079-30071301'),
(2, 'Bangalore', '16/A, Millers Road\r\nBangalore- 560052', 11, 19, 71, 'Mr Thomas verghese', '9342455502', '080-40209631', 'thomas@retailfurniture.com', '080-40209610'),
(3, 'Chennai', 'Prestige Point, no. 47, Haddows Road , Chennai-600006', 11, 31, 117, 'Biju Davis K.', '9025193303', '044-28232764', 'biju@retailfurniture.com', '044-28232761'),
(4, 'Hubli', 'Dharwadkar Building, Opp KSRTC Depot, Near Mahila Vidya Peet, Hosur,Hubli-580029', 11, 19, 72, 'Wasim ahmed', '9035047906', '0836-2271194', 'wasim@retailfurniture.com', '0836-2271191'),
(5, 'Mumbai', '604, Eureka Towers B Wing, Mindspace, Malad West, Mumbai', 11, 23, 88, 'Subhasish Ghosh', '8080222339', '022-40229193', 'ghosh@retailfurniture.com', '022-42766000'),
(6, 'Kolkata', 'Merlin Homeland, Ground Floor, 18B Ashutosh Mukherjee Road, Kolkata-700 020', 11, 34, 129, 'Bhaskar Chakravartti', '9339877051', '033-24987601', 'bhaskar@retailfurniture.com', '033-24987601');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(50) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(1, 'Workstations'),
(2, 'Executive Desking Systems'),
(3, 'Chairs'),
(4, 'Education'),
(5, 'Conference And Training'),
(6, 'Office Sofas'),
(7, 'Cafeteria'),
(8, 'Retail Fixtures');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE IF NOT EXISTS `city` (
  `ctid` int(11) NOT NULL AUTO_INCREMENT,
  `sid` int(11) NOT NULL,
  `ctname` varchar(50) NOT NULL,
  PRIMARY KEY (`ctid`),
  KEY `sid` (`sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=133 ;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`ctid`, `sid`, `ctname`) VALUES
(1, 1, 'Boston'),
(2, 1, 'Cooke Plains'),
(3, 1, 'Hamilton'),
(4, 1, 'Linwood'),
(5, 2, 'City of Clarence'),
(6, 2, 'Devonport'),
(7, 2, 'City of Glenorchy'),
(8, 2, 'Hobart'),
(9, 3, 'Melton'),
(10, 3, 'Traralgon'),
(11, 3, 'Portland'),
(12, 3, 'Cobram'),
(13, 4, 'Bridgetown'),
(14, 4, 'Gracetown'),
(15, 4, 'Lake Brown'),
(16, 4, 'Perth'),
(17, 5, 'Bandarban'),
(18, 5, 'Brahmanbaria'),
(19, 5, 'Noakhali'),
(20, 5, 'Rangamati'),
(21, 6, 'Bogra'),
(22, 6, 'Joypurhat'),
(23, 6, 'Natore'),
(24, 6, 'Pabna'),
(25, 7, 'Saidpur'),
(26, 7, 'Dinajpur'),
(27, 7, 'Gaibandha'),
(28, 7, 'Kurigram'),
(29, 8, 'Dhaka'),
(30, 8, 'Faridpur'),
(31, 8, 'Jamalpur'),
(32, 8, 'Madaripur'),
(33, 9, 'Hyderabad'),
(34, 9, 'Visakhapatnam'),
(35, 9, 'Kurnool'),
(36, 9, 'Tirupati'),
(37, 9, 'Secunderabad'),
(38, 9, 'Vijayawada'),
(39, 10, 'Changlang'),
(40, 10, 'Chambang'),
(41, 11, 'Guwahati'),
(42, 11, 'Sivasagar'),
(43, 11, 'Dhemaji'),
(44, 11, 'Tinsukia'),
(45, 12, 'Patna'),
(46, 12, 'Bhagalpur'),
(47, 12, 'Hajipur'),
(48, 12, 'Aurangabad'),
(49, 13, 'Raipur'),
(50, 13, 'Bilaspur'),
(51, 13, 'Raigarh'),
(52, 13, 'Ambikapur'),
(53, 14, 'Canacona'),
(54, 14, 'Candolim'),
(55, 14, 'Margao'),
(56, 14, 'Panaji'),
(57, 15, 'Ahmedabad'),
(58, 15, 'Vadodara'),
(59, 15, 'Rajkot'),
(60, 15, 'Junagadh'),
(61, 16, 'Faridabad'),
(62, 16, 'Gurgaon'),
(63, 16, 'Panipat'),
(64, 16, 'Sonipat'),
(65, 17, 'Srinagar'),
(66, 17, 'Jammu'),
(67, 18, 'Jamshedpur'),
(68, 18, 'Dhanbad'),
(69, 19, 'Mangalore'),
(70, 19, 'Davanagere'),
(71, 19, 'Bangalore'),
(72, 19, 'Hubli'),
(73, 19, 'Bellary'),
(74, 19, 'Mysore'),
(75, 20, 'Kochi'),
(76, 20, 'Ernakulam'),
(77, 20, 'Thiruvananthapuram'),
(78, 20, 'Malappuram'),
(79, 21, 'Amini'),
(80, 21, 'Andrott'),
(81, 21, 'Kavaratti'),
(82, 21, 'Minicoy'),
(83, 22, 'Indore'),
(84, 22, 'Bhopal'),
(85, 22, 'Jabalpur'),
(86, 22, 'Gwalior'),
(87, 23, 'Kolhapur'),
(88, 23, 'Mumbai'),
(89, 23, 'Nagpur'),
(90, 23, 'Pune'),
(91, 24, 'Bishnupur'),
(92, 24, 'Chandel'),
(93, 24, 'Churachandpur'),
(94, 24, 'Imphal'),
(95, 25, 'Ghasuapara'),
(96, 25, 'Baghamara'),
(97, 25, 'Shillong'),
(98, 25, 'Barsora'),
(99, 26, 'New Delhi'),
(100, 26, 'Delhi'),
(101, 27, 'Bhubaneswar'),
(102, 27, 'Cuttack'),
(103, 27, 'Puri'),
(104, 27, 'Balasore'),
(105, 28, 'Amritsar'),
(106, 28, 'Jalandhar'),
(107, 28, 'Patiala'),
(108, 28, 'Chandigarh'),
(109, 29, 'Bikaner'),
(110, 29, 'Jaipur'),
(111, 29, 'Jaisalmer'),
(112, 29, 'Jodhpur'),
(113, 30, 'East Sikkim district'),
(114, 30, 'North Sikkim district'),
(115, 30, 'South Sikkim district'),
(116, 30, 'West Sikkim district'),
(117, 31, 'Chennai'),
(118, 31, 'Coimbatore'),
(119, 31, 'Madurai'),
(120, 31, 'Tirupur'),
(121, 32, 'Kanpur'),
(122, 32, 'Allahabad'),
(123, 32, 'Lucknow'),
(124, 32, 'Agra'),
(125, 33, 'Dehradun'),
(126, 33, 'Haridwar'),
(127, 33, 'Roorkee'),
(128, 33, 'Kashipur'),
(129, 34, 'Kolkata'),
(130, 34, 'Durgapur'),
(131, 34, 'Baharampur'),
(132, 34, 'Kharagpur');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(50) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`cid`, `cname`) VALUES
(1, 'Australia'),
(2, 'Bangladesh'),
(3, 'Brazil'),
(4, 'Canada'),
(5, 'China'),
(6, 'Denmark'),
(7, 'Egypt'),
(8, 'France'),
(9, 'Germany'),
(10, 'Hong Kong'),
(11, 'India'),
(12, 'Japan'),
(13, 'Kenya'),
(14, 'Libya'),
(15, 'Mexico'),
(16, 'New Zealand'),
(17, 'Philippines'),
(18, 'Qatar'),
(19, 'Russia'),
(20, 'Singapore'),
(21, 'Thailand'),
(22, 'United Kingdom'),
(23, 'Vietnam'),
(24, 'Wake Island'),
(25, 'Yemen'),
(26, 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `csr`
--

CREATE TABLE IF NOT EXISTS `csr` (
  `csrid` int(11) NOT NULL AUTO_INCREMENT,
  `photo` varchar(100) NOT NULL,
  PRIMARY KEY (`csrid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `csr`
--

INSERT INTO `csr` (`csrid`, `photo`) VALUES
(1, 'csr.jpg'),
(2, 'csr (1).jpg'),
(3, 'csr (2).jpg'),
(4, 'csr (3).jpg'),
(5, 'csr (4).jpg'),
(6, 'csr (5).jpg'),
(7, 'csr (6).jpg'),
(8, 'csr (7).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `dealer_detail`
--

CREATE TABLE IF NOT EXISTS `dealer_detail` (
  `de_id` int(11) NOT NULL AUTO_INCREMENT,
  `de_name` varchar(50) NOT NULL,
  `de_address` varchar(150) NOT NULL,
  `country` int(11) NOT NULL,
  `state` int(11) NOT NULL,
  `city` int(11) NOT NULL,
  `de_incharge` varchar(30) NOT NULL,
  `de_mobile` varchar(20) NOT NULL,
  `de_phone` varchar(20) NOT NULL,
  `de_email` varchar(50) NOT NULL,
  `de_fax` varchar(20) NOT NULL,
  PRIMARY KEY (`de_id`),
  UNIQUE KEY `de_name` (`de_name`),
  UNIQUE KEY `de_mobile` (`de_mobile`),
  UNIQUE KEY `de_phone` (`de_phone`),
  UNIQUE KEY `de_email` (`de_email`),
  KEY `country` (`country`,`state`,`city`),
  KEY `state` (`state`),
  KEY `city` (`city`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `dealer_detail`
--

INSERT INTO `dealer_detail` (`de_id`, `de_name`, `de_address`, `country`, `state`, `city`, `de_incharge`, `de_mobile`, `de_phone`, `de_email`, `de_fax`) VALUES
(1, 'Ahmedabad', 'Apollo house,gr.floor, opp.crossword,mithkhali six road, navarangpura, Ahmedabad-380009', 11, 15, 57, 'Mr Chintan', '7878025100', '079-30071300', 'chintan@retailfurniture.com', '079-30071301'),
(2, 'Amritsar', 'Cachet Interiors, 6-A First Floor Nai Sadak, Lawrence Road,Amritsar-143001', 11, 28, 105, 'Mr Rohit Saini', '9814005554', '0183-2560515', 'rohit@retailfurniture.com', '0183-2560511'),
(3, 'Assam Tinsukia', 'Khaitan Carpet Corporation, Station Road, Tinsukia -786125', 11, 11, 44, 'Mr Abhishek Khaitan', '9435036546', '0374-2340591', 'abhishek@retailfurniture.com', '0374-2340592'),
(4, 'Bangalore', '16-A, Millers Road, Bangalore- 560052', 11, 19, 71, 'Mr Thomas verghese', '9342455502', '080-40209631', 'thomas@retailfurniture.com', '080-40209610'),
(5, 'Bellary', 'Sadiq Enterprises, Plot No.16, Khaja Complex, Rahim Manzil, Contonment32, Infantry Road, Rahimabad Colony, Bellary', 11, 19, 73, 'Mr Sadiq', '9342876404', '08392-243594', 'sadiq@retailfurniture.com', '08392-243591'),
(6, 'Bhopal', 'Monarch Interiors and Decorators, M3- Laxmi Plaza, Plot No.125, Zone 11,MP Nagar, BHOPAL-462011', 11, 22, 84, 'Mr Sandeep Rawat', '9303100055', '0755-4280039', 'monarch@retailfurniture.com', '0755-4280031'),
(7, 'Bhubaneshwar', 'PGL Furnitures Pvt Ltd., 2nd and 3rd Floor, Baramunda, Fire Station Square, N.H.-5, Bhubaneswar-751003', 11, 27, 101, 'Sujata Mahapatra', '7735730250', '0674-2354131', 'sujata@retailfurniture.com', '0674-2354132'),
(8, 'Chandigarh', 'SCF 8 B, Sec 8 B, Chandigarh-160008', 11, 28, 108, 'Mr Rouf Shah', '9317547666', '172-2676021', 'rouf@retailfurniture.com', '172-2676022'),
(9, 'Chennai', 'Prestige Point, no. 47, Haddows Road , Chennai-600006', 11, 31, 117, 'Mr Biju Davis', '9025193303', '044-28232764', 'biju@retailfurniture.com', '044-28232761'),
(10, 'Coimbatore', 'UKAN IT, 1187 Avinashi Road, Pappanaikenpalayam, Coimbatore-641037', 11, 31, 118, 'Mr Kandavel', '9842220129', '0422-4357129', 'kandavel@retailfurniture.com', '0422-4359129'),
(11, 'Davanagere', 'Nayana Ventures ,815 First Floor, TMN Complex, PB Road, Davangere-577002.', 11, 19, 70, 'Mr Praveen Kumar', '9900550099', '08192-233564', 'praveen@retailfurniture.com', '08192-233561'),
(12, 'Ernakulam', 'Banerji Road, Near Town Hall,Ernakulam North-682 018', 11, 20, 76, 'Mr Ramesh Roy', '9496075508', '0484-2370440', 'ramesh@retailfurniture.com', '0484-2370441'),
(13, 'Goa', 'G. F. Santa Catarina Residency, Seraulim, Margao Coastal Area, Salcette Goa-403708', 11, 14, 55, 'Mr Auspicio Rodrigues', '9325051361', '832-2781111', 'auspicio@retailfurniture.com', '832-2781112'),
(14, 'Guwahati', 'Khaitan Carpet Corporation, 724, Peace Enclave, Ulubari,G.S Road, Guwahati-7', 11, 11, 41, 'Mr Bajrang Khaitan', '9435036547', '0361-2466235', 'khaitan@retailfurniture.com', '0361-2466231'),
(15, 'Hubli', 'Dharwadkar Building, Opp KSRTC Depot, Near Mahila Vidya Peet, Hosur,Hubli-580029', 11, 19, 72, 'Mr Wasim ahmed', '9035047906', '0836-2271194', 'wasim@retailfurniture.com', '0836-2271191'),
(16, 'Hyderabad', 'Banjarahills, Road No. 10, Nr. Start hospital, Hyderabad', 11, 9, 33, 'Mr Mohd Habeeb Uddin', '9912223390', '040-23010227', 'habeeb@retailfurniture.com', '040-23010221'),
(17, 'Jaipur', 'Glorious Deco Pvt. Ltd, Narain Bhawan Bldg. No. 330-332, Near Sanganeri Gate, Moti Doongri Road, Jaipur-302004', 11, 29, 110, 'Mr Umesh Agarwal', '9950145104', '0141-2604189', 'glorious@retailfurniture.com', '0141-2604181'),
(18, 'Jamshedpur', 'Satya Traders,15 Gairaj Mansion, Diagonal Main Road, Bistupur, Jamshedpur-831001', 11, 18, 67, 'Mr Madan Gupta', '9431524051', '0657-2320370', 'gupta@retailfurniture.com', '0657-2320371'),
(19, 'Kochi', 'GR Collections, 33-2477, A 4 Vysali Bus Stop, Vytilla Palarivattom Byepass Road, Thamannam P.O. Kochi-682 032', 11, 20, 75, 'Mr Viswanathan', '9447061656', '0484-2776935', 'viswanathan@retailfurniture.com', '0484-2776931'),
(20, 'Kolhapur', 'M-s Nikhil Traders, Bhupal Towers, Ford Corner Laximpuri, Kolhapur-416 002', 11, 23, 87, 'Mr Gaurav Rampure', '9372445283', '0231-2640917', 'gaurav@retailfurniture.com', '0231-2640911'),
(21, 'Kolkata', 'Merlin Homeland, Ground Floor, 18B Ashutosh Mukherjee Road, Kolkata-700 020', 11, 34, 129, 'Mr Bhaskar Chakravartti', '9339877051', '033-24987602', 'bhaskar@retailfurniture.com', '033-24987601'),
(22, 'Kurnool', 'shop No. 3 and 4, Prakash complex, new best Stand Road, Kurnool-518003', 11, 9, 35, 'Mrs Hymavathi ', '9440290233', '08518-257333', 'hymavathi@retailfurniture.com', '08518-257331'),
(23, 'Lucknow', 'Tejkumar Plaza, 2nd Floor, 75 Hazratganj, Lucknow-226001', 11, 32, 123, 'Mr Adit Jashnani', '9918302012', '0522-4009973', 'adit@retailfurniture.com', '0522-4009971'),
(24, 'Madurai', 'Kalyani Associates Pvt Ltd, 151 Vakil new Street, Near Chokanathar kovil, Madurai-625001', 11, 31, 119, 'Mr Kumaran Babu', '8489944023', '0452-2629898', 'kumaran@retailfurniture.com', '0452-2629891'),
(25, 'Mangalore', 'Mathias Interiors, Division of Mathias Aluminium Systems Pvt Ltd, Saldanha Providence, Balmatta Road, Mangalore-575001', 11, 19, 69, 'Mr Gavin Mathias', '9945245097', '0824-2440142', 'gavin@retailfurniture.com', '0824-2440141'),
(26, 'Mumbai', '604, Eureka Towers B Wing, Mindspace, Malad-West, Mumbai', 11, 23, 88, 'Mr Subhasish Ghosh', '8080222339', '022-40229193', 'ghose@retailfurniture.com', '022-42766000'),
(27, 'Mysore', '441, New Kalidasa Road, Vijayanagara 1st Stg, Mysore-570 017', 11, 19, 74, 'Mr Keshavamurthy', '9845470069', '0821-2411782', 'mysore@retailfurniture.com', '0821-2411781'),
(28, 'Nagpur', 'M-s. Bajaj Innovations, Silver Palace Opp Patwardhan Ground, Dhantoli, Nagpur-440012', 11, 23, 89, 'Mr Akkshay', '9028017311', '0712-2452152', 'akkshay@retailfurniture.com', '0712-2452151'),
(29, 'New Delhi', 'Retail furniture Office Systems Pvt Ltd, Head North, K-1-116, Chitranjan Park, New Delhi-110019', 11, 26, 99, 'Mr Rajib Basu', '9350875502', '011-40638000', 'delhi@retailfurniture.com', '011-40638001'),
(30, 'Patna', 'One and Only Furniture Pvt Ltd, Opp. Patliputra Telephone Exchange, North Industrial Estate Road, Near P and M Mall, Patna-800 010', 11, 12, 45, 'Mr Arvind Kumar', '9031022875', '0612-2270748', 'arvind@retailfurniture.com', '0612-2270741'),
(31, 'Pune', '2-c Choice Apartment , Dhole Patil Road, Pune-411001', 11, 23, 90, 'Mr Mahesh Makhija', '9665055552', '020-66012817', 'mahesh@retailfurniture.com', '020-66012811'),
(32, 'Secunderabad', 'Choice Marketing, 69 Rashtrapathi Road, Opp. Head Post Office, Secunderabad-500003', 11, 9, 37, 'Mr Vijaysreeram', '9849014270', '040-27802602', 'vijaysreeram@retailfurniture.com', '040-27802601'),
(33, 'Thiruvananthapuram', '38-2556, Aryasala ,Near Kalyan Hospital, Thiruvananthapuram-695036', 11, 20, 77, 'Mr Vishwanathan', '9349455501', '0471-2574948', 'vishwa@retailfurniture.com', '0471-2574941'),
(34, 'Tirupathi', 'Sri Sai Krishna Entreprises, 715-A,Sms Towers ,Korlagunta Junction, Tirumala Bypass road,Tirupati-517501', 11, 9, 36, 'Mr Subhas bose', '9866148909', '0877-2281977', 'subhas@retailfurniture.com', '0877-2281971');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `pro_id` int(11) NOT NULL AUTO_INCREMENT,
  `sub_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `pro_name` varchar(30) NOT NULL,
  `pro_price` varchar(30) NOT NULL,
  `model_no` varchar(10) NOT NULL,
  `pro_code` varchar(10) NOT NULL,
  `pro_img` varchar(200) NOT NULL,
  `pro_desc` varchar(200) NOT NULL,
  `pro_color` varchar(50) NOT NULL,
  `pro_war` varchar(20) NOT NULL,
  `pro_quan` varchar(5) NOT NULL,
  PRIMARY KEY (`pro_id`),
  KEY `sub_id` (`sub_id`),
  KEY `cat_id` (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=92 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pro_id`, `sub_id`, `cat_id`, `pro_name`, `pro_price`, `model_no`, `pro_code`, `pro_img`, `pro_desc`, `pro_color`, `pro_war`, `pro_quan`) VALUES
(1, 1, 1, 'Perform', '18000', '1882222911', '9288889111', 'PERFORM(5).jpg', 'Vertical rail-Raceways covers-Particle board-Fabric panel white board-Magnetic board-Lamination board-Cable outlets-Sturdy levelers-Fixing keyboard tray-Separate raceways for electrical works.', 'red,white,black,blue', '2 year', '3'),
(2, 2, 1, 'Evolve', '19000', '1882222912', '9288889112', 'EVOLVE(5).jpg', 'Vertical rail-Raceways covers-Particle board-Fabric panel white board-Magnetic board-Lamination board-Cable outlets-Sturdy levelers-Fixing keyboard tray-Separate raceways for electrical works.', 'green,white,black,blue', '3 year', '5'),
(3, 3, 1, 'Neo', '17500', '1882222913', '9288889113', 'NEO(2).jpg', 'Rounded rail-Raceways covers-Particle board-Extra space for work-Magnetic board-Lamination board-Cable outlets-Sturdy levelers-Extended keyboard tray-Separate raceways for electrical works.', 'purple,white,grey,orange', '5 year', '7'),
(4, 4, 1, 'Fusion', '18500', '1882222914', '9288889114', 'FUSION(12).jpg', 'Extra side rail-Particle board-Wood panel white board-Magnetic board-Lamination board-Cable outlets-Sturdy levelers-Rotate keyboard tray-Separate raceways for electrical works.', 'purple,white,black,yellow', '4 year', '6'),
(5, 5, 1, 'Managers Desk', '21500', '1882222915', '9288889115', 'MANAGERS_DESK(4).jpg', 'Horizontal rail-extra covers-Particle board-wood panel white board-Magnetic board-Lamination board-Cable outlets-Sturdy levelers-Extra keyboard tray-Extra space for electrical works.', 'purple,white,grey,green', '4 year', '9'),
(6, 6, 1, 'Edge', '20100', '1882222916', '9288889116', 'EDGE(7).jpg', 'Two side rail-Extra covers-Cool board-Fabric panel white board-Magnetic board-Lamination board-Cable outlets-Extra space-Fixing keyboard tray-Separate raceways for electrical works.', 'purple,white,red,yellow', '6 year', '7'),
(7, 7, 2, 'Zen', '22000', '1882222917', '9288889117', 'ZEN(1).jpg', 'Horizontal rail-Extra covers-Wood board-cool look-More space for working desk-Fabric panel white board-Lamination board-Cable outlets-Extra keyboard tray-Separate raceways for electrical works.', 'dark pink,white,black,wood', '3 year', '10'),
(8, 8, 2, 'Gamma', '21000', '1882222918', '9288889118', 'GAMMA(1).jpg', 'Horizontal rail-Extra covers-Wood board-cool look-Fabric panel black board-Lamination board-Separate raceways for electrical works.', 'dark grey,white,black,wood', '3 year', '30'),
(9, 9, 2, 'Versaline', '16600', '1882222919', '9288889119', 'VERSALINE(10).jpg', 'Two rail-White covers-Cool board-Cool look-More space for working desk-Wood panel white board-Lamination board-Cable outlets-Extra keyboard tray-extra space for electrical wires.', 'grey,white,black,wood', '3 year', '7'),
(10, 10, 2, 'Flite', '18800', '1882222920', '9288889120', 'FLITE(2).jpg', 'Horizontal rail-Extra covers-Wood board-cool look-More space for working desk-Pure wood slider-Lamination board-Cable outlets-Extra keyboard tray-Cool side bar and extra space.', 'grey,white,black,wood', '5 year', '6'),
(11, 11, 2, 'Charisma', '25600', '1882222921', '9288889121', 'CHARISMA(1).jpg', 'Two side rail-Dark covers-Dark board-cool look-More space for working desk-Extra panel dark board-Lamination board-Cable outlets-Extra keyboard tray-Nice raceways for electrical works.', 'dark pink,white,black,wood', '6 year', '10'),
(12, 12, 3, 'Optima', '7000', 'ODC7058001', 'AJB0080901', 'OPTIMA(6).jpg', 'Ergonomic mesh back chair designed to provide exceptional back support. Optima comes with maximum adjust features to customize your chair to perfection. Adjustable lumbar support and headrest.', 'white,grey,black', '1 year', '20'),
(13, 12, 3, 'Ergon', '7500', 'ODC7058002', 'AJB0080902', 'ERGON(3).jpg', 'This mesh back chair is loaded with ergonomic features including adjustable lumbar support, multi position lock, knee tilt mechanism and 2 way adjustable arms.', 'white,grey,black', '1 year', '21'),
(14, 12, 3, 'Pinnacle', '8000', 'ODC7058003', 'AJB0080903', 'PINNACLE(1).jpg', 'Leather Headrest and Leather Seat. Height and Depth Adjustable Headrest. Pneumatic Seat Height Adjustment. Infinite Locking Syncr Knee Tilt Control.', 'white,grey,black', '2 year', '22'),
(15, 12, 3, 'Elite', '6500', 'ODC7058004', 'AJB0080904', 'ELITE(1).jpg', 'Executive revolving chair- with Syncro-tilt mechanism, adjustable arms; Pu moulded cushion seat & back.', 'white,grey,black', '1 year', '18'),
(16, 13, 3, 'Wiki', '6000', 'ODC7058005', 'AJB0080905', 'WIKI(3).jpg', 'leather chair that brings style and professionalism to your office. This chair with its multiple locking system.', 'grey,white,black,brown', '2 year', '20'),
(17, 13, 3, 'Invention', '6500', 'ODC7058006', 'AJB0080906', 'INVENTION(4).jpg', 'Ergonomically designed high and low back leather chairs, available in various designs and Colour combination, Infinite Locking Syncr Knee Tilt Control.', 'white,grey,black', '1 year', '30'),
(18, 13, 3, 'Crown', '7000', 'ODC7058007', 'AJB0080907', 'CROWN(3).jpg', 'This chair with its multiple locking system, lumbar support adjustment and aluminium arms and base is perfect ergonomic option for any office.', 'grey,white,black,brown', '2 year', '28'),
(19, 13, 3, 'Dynamic', '7500', 'ODC7058008', 'AJB0080908', 'DYNAMIC(1).jpg', 'revolving chair- with Syncro-tilt mechanism, adjustable arms,moulded cushion seat & back,Height and Depth Adjustable Headrest.', 'white,grey,black', '2 year', '25'),
(20, 14, 3, 'Anatom Slide', '8000', 'ODC7058009', 'AJB0080909', 'ANATOM_SLIDE(1).jpg', 'Itâ€™s Dupont mesh back, knee tilt mechanism, two way adjustable armrest and nylon base complete this stylishly designed chair.', 'white,grey,black', '2 year', '26'),
(21, 14, 3, 'Contact Project', '6500', 'ODC7058010', 'AJB0080910', 'CONTACT(1).jpg', 'Itâ€™s ergonomic design with mesh back combined with adjustable lumbar support, synchro mechanism and 2 way adjustable arm rest makes it flexible to every office need.', 'white,grey,black', '1 year', '29'),
(22, 14, 3, 'Astro', '7500', 'ODC7058011', 'AJB0080911', 'ASTRA(1).jpg', 'Astro provides the unique combination of comfort , style and function, Itâ€™s ergonomic design with mesh back combined with adjustable lumbar support.', 'white,grey,black', '2 year', '19'),
(23, 14, 3, 'Anatom', '7500', 'ODC7058012', 'AJB0080912', 'ANATOM(1).jpg', 'Anatom chair is both functional and versatile, Itâ€™s Dupont mesh back, knee tilt mechanism, two way adjustable armrest and nylon base.', 'white,grey,black', '2 year', '21'),
(24, 14, 3, 'Impulse', '6000', 'ODC7058013', 'AJB0080913', 'IMPULSE(1).jpg', 'This ergonomic chair has a seat designed with the waterfall edge feature to reduce pressure at the back of knees for improved circulation. ', 'white,grey,black', '1 year', '24'),
(25, 14, 3, 'Zodiac', '6500', 'ODC7058014', 'AJB0080914', 'ZODIAC(1).jpg', 'Itâ€™s ergonomic design with mesh back combined with adjustable lumbar support, synchro mechanism and 2 way adjustable arm rest makes it flexible to every office need.', 'white,grey,black', '2 year', '25'),
(26, 14, 3, 'Elan', '5500', 'ODC7058015', 'AJB0080915', 'ELAN(1).jpg', 'A multifunction high back mesh chair with synchro mechanism that offers customized support, provides the unique combination of comfort , style and function. ', 'white,grey,black', '2 year', '16'),
(27, 14, 3, 'Spider (Plastic Back)', '6500', 'ODC7058016', 'AJB0080916', 'SPIDER(PLASTIC_BACK)(1).jpg', 'spider plastic back chair is both functional and versatile. Itâ€™s Dupont mesh back, knee tilt mechanism, two way adjustable armrest and nylon base.', 'white,grey,black', '2 year', '18'),
(28, 15, 3, 'Click', '6500', 'ODC7058017', 'AJB0080917', 'CLICK(1).jpg', 'It includes synchro mechanism, seat and back cushion, adjustable back knob and 2 way adjustable arm controls for personal seating comfort.', 'white,grey,black', '2 year', '24'),
(29, 15, 3, 'Engage', '6500', 'ODC7058018', 'AJB0080918', 'ENGAGE(1).jpg', 'Work revolving chair- with Syncro-tilt mechanism, adjustable arms; moulded cushion seat & back, Its features consist of a nylon base.', 'white,grey,black', '2 year', '18'),
(30, 15, 3, 'Nova', '7500', 'ODC7058019', 'AJB0080919', 'NOVA.jpg', 'Height and Depth Adjustable Headrest,It includes synchro mechanism, seat and back cushion, adjustable back knob and 2 way adjustable arm controls for personal seating comfort.', 'white,grey,black,dark blue', '2 year', '22'),
(31, 15, 3, 'Bristol', '7000', 'ODC7058020', 'AJB0080920', 'BRISTOL(1).jpg', 'Its features consist of a nylon base, cushioned seat and back, synchro mechanism and 2 way adjustable arms.', 'red,white,black,grey', '1 year', '22'),
(32, 15, 3, 'Telemate', '8000', 'ODC7058021', 'AJB0080921', 'TELEMATE(1).jpg', 'It provides business that suits both old school and modern office enthusiasts alike. Its features consist of a nylon base, cushioned seat and back, synchro mechanism.', 'red,white,black,blue', '2 year', '25'),
(33, 15, 3, 'Talisma', '6000', 'ODC7058022', 'AJB0080922', 'TALISMA(1).jpg', 'Work revolving chair- with Syncro-tilt mechanism, adjustable arms, available in various designs and Colour combination, cushioned seat and back.', 'white,grey,black', '2 year', '16'),
(34, 15, 3, 'Lead', '6500', 'ODC7058023', 'AJB0080923', 'LEAD(1).jpg', 'lead chair is ideal addition to any office or home. It includes synchro mechanism, seat and back cushion, adjustable back knob and 2 way adjustable arm controls.', 'white,grey,black,blue', '2 year', '17'),
(35, 16, 3, 'Contour Classic', '6000', 'ODC7058024', 'AJB0080924', 'CONTOUR_CLASSIC(1).jpg', 'Re-enforced pipe frame with PU molded seat & back, well rounded Polyurethane arms, These chairs increase productivity of your employees.', 'yellow,white,black,orange', '1 year', '21'),
(36, 16, 3, 'Bodyline Series', '7500', 'ODC7058025', 'AJB0080925', 'BODYLINE_VISITORS(1).jpg', 'From black epoxy powder coated and adjustable to varied heights, our collection of durable conference chairs are immaculate for any formal or casual meeting.', 'white,grey,black,dark pink', '1 year', '23'),
(37, 16, 3, 'Eco Series', '6500', 'ODC7058026', 'AJB0080926', 'ECO_SERIES(1).jpg', 'eco revolving chair- with Syncro-tilt mechanism; adjustable arms, Specially designed chairs to whom sitting for long hours like call centers.', 'white,pink,black,red', '2 year', '27'),
(38, 17, 3, 'Tycoon', '8000', 'ODC7058027', 'AJB0080927', 'TYCOON(1).jpg', 'Ergonomically designed high and low back conference chairs, available in various designs and Colour combination; with Gas lift mechanism.', 'white,grey,black', '2 year', '22'),
(39, 17, 3, 'Contact Leatherlite', '9000', 'ODC7058028', 'AJB0080928', 'CONTACT_LEATHERLITE(1).jpg', 'From black epoxy powder coated maximum Comfort and adjustable to varied heights, our collection of durable conference chairs are immaculate for any formal or casual meeting.', 'white,grey,black', '1 year', '28'),
(40, 17, 3, 'Chrome Leatherlite', '8500', 'ODC7058029', 'AJB0080929', 'CHROME_LEATHERLITE(1).jpg', 'Specially designed chairs to whom sitting for long hours like call centers etc, maximum Comfort, molded foam seat & back, Seat & back cover, comfort and ensures seating ease.', 'white,grey,black', '2 year', '30'),
(41, 17, 3, 'Chrome Mesh', '9000', 'ODC7058030', 'AJB0080930', 'CHROME_MESH(1).jpg', 'Ergonomically designed high and low back , available in various designs and Colour combination,one touch height Adjusting Gas lift mechanism.', 'white,grey,black', '1 year', '31'),
(42, 17, 3, 'Chrome Cushion', '8000', 'ODC7058031', 'AJB0080931', 'CHROME_CUSHION(1).jpg', 'Adjustable Leather Headrest and Leather Seat. Height and Depth Adjustable Headrest. Pneumatic Seat Height Adjustment. Infinite Locking Syncr Knee Tilt Control. Top Grain Leather Seat.', 'white,grey,black', '2 year', '32'),
(43, 18, 3, 'Auditorium', '9500', 'ODC7058032', 'AJB0080932', 'AUDITORIUM_CHAIRS(1).jpg', 'Auditorium Public Seating Chairs are made using best quality raw material that is durable and long lasting.Auditorium Seats are very comfortable and are offered in various specifications and colors.', 'red,white,black,blue,green', '3 year', '44'),
(44, 19, 3, 'Addon Education', '4000', 'ODC7058033', 'AJB0080933', 'ADDON_EDUCATION(1).jpg', 'Our range is designed in order to provide comfort and reduce fatigue at an educational institution and come with hand rest support.', 'white,grey,black,red', '2 year', '23'),
(45, 19, 3, 'Contact Education', '3500', 'ODC7058034', 'AJB0080934', 'CONTACT_EDUCATION(1).jpg', 'This student chair series holds kid-proof strength and are maintenance-free. For extra comfort, try our higher range student chairs, Choose from the most popular styles.', 'white,grey,black', '2 year', '32'),
(46, 19, 3, 'Perfo Education', '3500', 'ODC7058035', 'AJB0080935', 'PERFO_EDUCATION(1).jpg', 'Schools love our chairs because of proven classroom durability. The chairs are highly comfortable and students think better after getting comfortable posture in our chairs.', 'white,grey,black', '2 year', '41'),
(47, 19, 3, 'Woodback', '4000', 'ODC7058036', 'AJB0080936', 'WOODBACK(1).jpg', 'We are the manufacturers and exporters of school chairs made by premium quality, available in lot of colorful designs with good price.', 'white,grey,black,blue', '1 year', '40'),
(48, 19, 3, 'Bodyline Education', '4500', 'ODC7058037', 'AJB0080937', 'BODYLINE_EDUCATION(1).jpg', 'Our student chair series are available in different shapes, sizes, designs and colors. We also manufacture customized chairs and offer them at the industry leading prices.', 'white,grey,black', '1 year', '38'),
(49, 19, 3, 'Plus Education', '4000', 'ODC7058038', 'AJB0080938', 'PLUS_EDUCATION(1).jpg', 'This student chair series holds kid-proof strength and are maintenance-free. For extra comfort,also provided with an extended arm that acts as a table for ease in writing.', 'white,grey,black', '2 year', '19'),
(50, 19, 3, 'Flex', '3500', 'ODC7058039', 'AJB0080939', 'FLEX(1).jpg', 'These chairs also occupy less space and are light in weight. They are widely demanded nowadays as they save the table space and are also convenient to clean and install.', 'white,grey,black', '1 year', '32'),
(51, 19, 3, 'Magna', '4000', 'ODC7058040', 'AJB0080940', 'MAGNA(1).jpg', 'These student chairs are not only relaxing to sit on but are also provided with an extended arm that acts as a table for ease in writing.', 'white,grey,black,red', '1 year', '29'),
(52, 20, 3, 'Brune Tandem', '3500', 'ODC7058041', 'AJB0080941', 'BRUNE_TANDEM(1).jpg', 'Our range of visitor chairs has appealing looks as well as synchronized symmetry, which provides complete comfortably sitting experience.', 'white,grey,black', '2 year', '22'),
(53, 20, 3, 'Contact Tandem', '4000', 'ODC7058042', 'AJB0080942', 'CONTACT_TANDEM(1).jpg', 'Our chairs keep one at ease and boast of perfect finish. Available in various patterns and colors, these can be customized as per the details specified by the clients.', 'white,grey,black', '2 year', '31'),
(54, 20, 3, 'Orbit Tandem', '5000', 'ODC7058043', 'AJB0080943', 'ORBIT_TANDEM(2).jpg', 'An exclusive range of colour, style, and affordable price range has enabled us to take us to the heights of fame among the leading Contemporary orbit Chair Suppliers.', 'white,grey,black', '2 year', '32'),
(55, 20, 3, 'Perfo Tandem', '4500', 'ODC7058044', 'AJB0080944', 'PERFO_TANDEM(1).jpg', 'we design premium quality chairs that are preferred by our clients. Our chairs keep one at ease and boast of perfect finish, Available in various patterns and colors.', 'white,grey,black', '1 year', '37'),
(56, 21, 4, 'Hostel', '2000 to 300000', 'ODC7058045', 'AJB0080945', 'HOSTEL(1).jpg', 'Manufacturer, trader and supplier of hostel bed, hostel bed exporter, hostel furniture, wood bed, sofa beds...furniture, auditorium furniture, office modular workstation,etc', 'white,grey,black,all color', '3 year', '112'),
(57, 22, 4, 'Auditorium', '1000 to 400000', 'ODC7058046', 'AJB0080946', 'AUDITORIUM(1).jpg', 'Auditorium furnitures are very stylish, durable and have excellent capacity for accommodating students and various attendees, Our auditorium furnitures are very smooth.', 'white,grey,black,all color', '4 year', '117'),
(58, 23, 4, 'Classroom', '4000 to 350000', 'ODC7058047', 'AJB0080947', 'CLASSROOM(1).jpg', 'Prominent & Leading Supplier and Manufacturer ,we offer Class Room Furniture such as Play School Furniture, Class Room Chairs and Class Room Tables,etc.', 'white,grey,black,all color', '5 year', '211'),
(59, 24, 4, 'Library', '2000 to 370000', 'ODC7058048', 'AJB0080948', 'LIBRARY(1).jpg', 'Library Products will help you release the full potential of your library with its design ideas and design-led range of library furniture and shelving, educational and commercial libraries worldwide.', 'white,grey,black,all color', '6 year', '216'),
(60, 25, 4, 'Administrative Lobby Seating', '1000 to 430000', 'ODC7058049', 'AJB0080949', 'ADMINISTRATIVE_AND_LOBBY_SEATING(1).jpg', 'We are innovative and creative. We believe in being bold and daring but we also take a long-term view, and turn ideas into reliable long-term solutions.', 'white,grey,black,all color', '2 year', '166'),
(61, 26, 4, 'Office', '2000 to 390000', 'ODC7058050', 'AJB0080950', 'OFFICE(1).jpg', 'We offer a wide range of office tables that can be used in several ways, These tables are made using quality raw material, which makes them sturdy and dimensionally precise.', 'white,grey,black,all color', '3 year', '178'),
(62, 27, 4, 'Storages', '2000 to 350000', 'ODC7058051', 'AJB0080951', 'STORAGES(1).jpg', 'Various manufactures, supplies, and installs archiving and storage systems for libraries, archives, galleries and museums throughout the UK.', 'white,grey,black,all color', '3 year', '189'),
(63, 28, 4, 'Classroom Chairs', '2000 to 100000', 'ODC7058052', 'AJB0080952', 'CLASSROOM_CHAIRS(1).jpg', 'These classroom chairs are ideal for different schools, review centers and many other establishments, Our class room chairs are very sturdy and designed to handle varying weight of the users. ', 'white,grey,black,all color', '6 year', '168'),
(64, 29, 4, 'Cafeteria', '3500 to 580000', 'ODC7058053', 'AJB0080953', 'CAFETERIA(1).jpg', 'We offer an artistic and unique range of Cafeteria Chairs  for our prestigious clients, These chairs are created by using the premium raw material procured from the reputed vendors across the country.', 'white,grey,black,all color', '6 year', '156'),
(65, 30, 4, 'Stadium', '3500 to 680000', 'ODC7058054', 'AJB0080954', 'STADIUM(1).jpg', 'We manufacture, supply and install library shelving systems and accessories that represent the best of Scandinavian design, functionality and quality.', 'white,grey,black,all color', '2 year', '232'),
(66, 31, 4, 'Computer Lab', '3500 to 480000', 'ODC7058055', 'AJB0080955', 'COMPUTER_LAB(1).jpg', 'We are importer and supplier of Computer Lab Furniture such as Computer Lab Stools, Computer Lab Chairs and Computer Lab Tables.', 'white,grey,black,all color', '4 year', '170'),
(67, 32, 5, 'Managers Cabin', '3500 to 280000', 'ODC7058056', 'AJB0080956', 'MANAGERS_CABIN(1).jpg', 'We have gained vast experience in offering a superior range of Manager Cabin to our clients as per their requirement, These are available in attractive designs and sizes.', 'white,grey,black,all color', '3 year', '321'),
(68, 33, 5, 'Conference And Meeting', '1500 to 240000', 'ODC7058057', 'AJB0080957', 'CONFERENCE&MEETING(43).jpg', 'Our large clientele can avail a large collection of supreme quality furniture from us, which are available in different specifications as per the clients specific requirements. ', 'white,grey,black,all color', '4 year', '169'),
(69, 34, 5, 'Laboratory', '2000 to 100000', 'ODC7058058', 'AJB0080958', 'LABORATORY(1).jpg', 'We are Counted among the Prominent Laboratory Island Bench Manufacturers a Wide Variety Within this Range, with Precisely Designed Walls, Sink Cabinets, Valves and Sturdy Base.', 'white,grey,black,all color', '3 year', '125'),
(70, 35, 5, 'Training Room', '2000 to 390000', 'ODC7058059', 'AJB0080959', 'TRAINING_ROOM(5).jpg', 'The wide assortment of Training Room Furniture is procured from the rich vendor-base of our firm, In any company a spacious training room is provided.', 'white,grey,black,all color', '3 year', '231'),
(71, 36, 6, 'Yoko', '28000', 'ODC7058060', 'AJB0080960', 'YOKO(1).jpg', 'Solid and engineered wood,Front solid wood covered with fabric. Rear satin finish stainless steel,Seat springs,Back springs,Simply fold out to turn into a comfy bed for one or a cosy bed for two.', 'white,grey,black,all color', '4 year', '80'),
(72, 37, 6, 'Spark', '32000', 'ODC7058061', 'AJB0080961', 'SPARK(1).jpg', 'Belfort Right Hand Facing Corner Sofa Group, Cinder Grey, You can choose any of the colours offered here, the design of the sofa itself isnt customizable.\r\n', 'white,grey,black,all color', '2 year', '93'),
(73, 38, 6, 'Regency', '35000', 'ODC7058062', 'AJB0080962', 'REGENCY(2).jpg', 'We salute Regency style with our upholstered reproduction of the classic sofa, inspired by the refinement of the period and bestowed with neoclassical scrolls at arms and back.', 'white,grey,black,all color', '4 year', '89'),
(74, 39, 6, 'Premier', '29000', 'ODC7058063', 'AJB0080963', 'PREMIER(1).jpg', 'Our quality and customer oriented approach both are appreciated in the market therefore our clients rely on us for the supply of finest furniture.', 'white,grey,black,all color', '4 year', '78'),
(75, 40, 6, 'Pearl', '33000', 'ODC7058064', 'AJB0080964', 'PEARL(1).jpg', 'Modular Corner Sofa Group, Champagne Beige, We believe that the product we offer is distinctive in terms of design, comfort, quality and function and comes to you at a very attractive price. ', 'white,grey,black,all color', '4 year', '88'),
(76, 41, 6, 'Sofa Picasso', '43000', 'ODC7058065', 'AJB0080965', 'SOFA_PICASSO(2).jpg', 'Our Picasso sofa smooth faux leather is presented in a midnight black finish, and sleek tufting and decorative stitching measure up to the truly modern look. ', 'white,grey,black,all color', '2 year', '95'),
(77, 42, 6, 'Dali', '38000', 'ODC7058066', 'AJB0080966', 'DALI(1).jpg', 'Decorative baseball stitching and tufted detailing enhance the contemporary look,\r\nSmooth bi-cast/faux leather has the look and feel of genuine leather, without the high cost and maintenance.', 'white,grey,black,all color', '4 year', '85'),
(78, 43, 6, 'Eclipse', '42500', 'ODC7058067', 'AJB0080967', 'ECLIPSE(7).jpg', 'Cradle yourself in pure comfort with the generously padded Eclipse sofa, Enjoy the head-to-toe support of chaise bucket seats combined with smooth reclining motion, With updated curves and attractive.', 'white,grey,black,all color', '4 year', '96'),
(79, 44, 6, 'Sofa Ambassador', '24000', 'ODC7058068', 'AJB0080968', 'SOFA_AMBASSADOR(3).jpg', 'With a cool, contemporary look and a choice of static, manual or electric recliner actions, the Ambassador range encompasses both style and comfort, range of fresh and modern colours.', 'white,grey,black,all color', '2 year', '84'),
(80, 45, 7, 'Generick first cafeteria', '4000 to 250000', 'ODC7058069', 'AJB0080969', 'Generick_first_cafeteria_image.jpg', 'All chairs are manufactured to specification. We offer a large range of chair colors and cushion colors, We use advanced technology of injecting moulding, products surface glazed and Shining.', 'white,grey,black,all color', '4 year', '144'),
(81, 46, 7, 'Plastic Line', '2000 to 100000', 'ODC7058070', 'AJB0080970', 'PLASTIC_LINE(1).jpg', 'Our Plastic Stacking chairs customised to your specification, All Prime Stacking chairs are manufactured to specification,Lightweight for easy handing,party rental centers, stores, companies.', 'white,grey,black,all color', '2 year', '342'),
(82, 47, 7, 'Iso Cafe', '1000 to 320000', 'ODC7058071', 'AJB0080971', 'ISO_CAFE(1).jpg', 'Powder coated steel frame also available in below material,\r\nLeather finish, Powder coated steel frame,Plywood finish.', 'white,grey,black,all color', '3 year', '244'),
(83, 48, 7, 'Wood Line', '1000 to 200000', 'ODC7058072', 'AJB0080972', 'WOODLINE.jpg', 'Our company strictly implements a complete management system throughout every procedure from raw material\r\nselection to production under quality control, our products enjoy a high reputation.', 'white,grey,black,all color', '4 year', '217'),
(84, 49, 7, 'ALU Line', '2000 to 100000', 'ODC7058072', 'AJB0080972', 'ALU_LINE.jpg', 'Our products enjoy a high reputation among customers due to attractive designs with high quality, great prices and also good after-sale service,Material specification\r\nAluminium.', 'white,grey,black,all color', '3 year', '218'),
(85, 50, 7, 'Cafe Pub', '2000 to 200000', 'ODC7058072', 'AJB0080972', 'CAFE_PUB.jpg', 'Lightweight for easy handing. Ideal choice for party rental centers, stores, companies and supplies wholesalers,  All our products are widely applauded for their excellent finishing.', 'white,grey,black,all color', '2 year', '207'),
(86, 51, 7, 'Glasstop', '2000 to 100000', 'ODC7058073', 'AJB0080973', 'GLASSTOP.jpg', 'Our company strictly implements a complete management system throughout every procedure from raw material selection to production under quality control using glass material.', 'white,grey,black,all color', '4 year', '177'),
(87, 52, 8, 'Fashion Shelves', '3500 to 180000', 'ODC7058074', 'AJB0080974', 'FASHION_SHELVES(1).jpg', 'Fully adjustable shelf at 1 inch increments, Integrated cable management hides wires, Paintable and trimable cover,Easy to install.', 'white,grey,black,all color', '3 year', '143'),
(88, 53, 8, 'Versatile Fixtures', '1000 to 100000', 'ODC7058075', 'AJB0080975', 'VERSATILE_FIXTURES(1).jpg', 'Powder Coated Scratch Resistant Metal in Gloss Black complimented by Beautiful Black Tempered Safety Glass,Integrated Bell Cable Management System to Hide Wires and Interconnect Cables.', 'white,grey,black,all color', '3 year', '92'),
(89, 54, 8, 'Electronics Wood Shelves', '2000 to 120000', 'ODC7058076', 'AJB0080976', 'ELECTRONICS_WOOD_SHELVES(1).jpg', 'Features the CMS Cable Management System to Hide Wires and Interconnect Cables,Can be used with or without flat panel,Elegantly Curved Front with Cherry Wood Trimmed Accents.', 'white,grey,black,all color', '2 year', '74'),
(90, 55, 8, 'Electronics Metal Shelves', '1200 to 90000', 'ODC7058077', 'AJB0080977', 'ELECTRONICS_METAL_SHELVES(1).jpg', 'Cable Management,Aluminum and Glass Construction,Easy Assembly,Drywall or Stud installation,Installation Manual And All Hardware Included.', 'white,grey,black,all color', '4 year', '82'),
(91, 56, 8, 'Food Shelves', '2000 to 100000', 'ODC7058078', 'AJB0080978', 'FOOD_SHELVES(1).jpg', 'Made of plastic with rugged tubular construction, platinum color,Non-ventilated shelves, with each shelf capable of holding up to 150 pounds.', 'white,grey,black,all color', '3 year', '75');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE IF NOT EXISTS `state` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) NOT NULL,
  `sname` varchar(50) NOT NULL,
  PRIMARY KEY (`sid`),
  KEY `cid` (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`sid`, `cid`, `sname`) VALUES
(1, 1, 'South Australia'),
(2, 1, 'Tasmania'),
(3, 1, 'Victoria'),
(4, 1, 'Western Australia'),
(5, 2, 'Chittagong'),
(6, 2, 'Rajshahi'),
(7, 2, 'Rangpur'),
(8, 2, 'Dhaka'),
(9, 11, 'Andhra Pradesh'),
(10, 11, 'Arunachal Pradesh'),
(11, 11, 'Assam'),
(12, 11, 'Bihar'),
(13, 11, 'Chhattisgarh'),
(14, 11, 'Goa'),
(15, 11, 'Gujarat'),
(16, 11, 'Haryana'),
(17, 11, 'Jammu and Kashmir'),
(18, 11, 'Jharkhand'),
(19, 11, 'Karnataka'),
(20, 11, 'Kerala'),
(21, 11, 'Lakshadweep'),
(22, 11, 'Madhya Pradesh'),
(23, 11, 'Maharashtra'),
(24, 11, 'Manipur'),
(25, 11, 'Meghalaya'),
(26, 11, 'New Delhi'),
(27, 11, 'Odisha'),
(28, 11, 'Punjab'),
(29, 11, 'Rajasthan'),
(30, 11, 'Sikkim'),
(31, 11, 'Tamil Nadu'),
(32, 11, 'Uttar Pradesh'),
(33, 11, 'Uttarakhand'),
(34, 11, 'West Bengal');

-- --------------------------------------------------------

--
-- Table structure for table `subcat`
--

CREATE TABLE IF NOT EXISTS `subcat` (
  `sub_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` int(11) NOT NULL,
  `sub_name` varchar(50) NOT NULL,
  PRIMARY KEY (`sub_id`),
  KEY `cat_id` (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=57 ;

--
-- Dumping data for table `subcat`
--

INSERT INTO `subcat` (`sub_id`, `cat_id`, `sub_name`) VALUES
(1, 1, 'Perform'),
(2, 1, 'Evolve'),
(3, 1, 'Neo'),
(4, 1, 'Fusion'),
(5, 1, 'Managers Desk'),
(6, 1, 'Edge'),
(7, 2, 'Zen'),
(8, 2, 'Gamma'),
(9, 2, 'Versaline'),
(10, 2, 'Flite'),
(11, 2, 'Charisma'),
(12, 3, 'Executive Chairs'),
(13, 3, 'Leather Chairs'),
(14, 3, 'Work Chairs (Mesh)'),
(15, 3, 'Work Chairs (Cushion)'),
(16, 3, 'Work Chairs (Eco)'),
(17, 3, 'Conference Chairs'),
(18, 3, 'Auditorium'),
(19, 3, 'Education Chairs'),
(20, 3, 'Public Seating Chairs'),
(21, 4, 'Hostel'),
(22, 4, 'Auditorium'),
(23, 4, 'Classroom'),
(24, 4, 'Library'),
(25, 4, 'Administrative Lobby Seating'),
(26, 4, 'Office'),
(27, 4, 'Storages'),
(28, 4, 'Classroom Chairs'),
(29, 4, 'Cafeteria'),
(30, 4, 'Stadium'),
(31, 4, 'Computer Lab'),
(32, 5, 'Managers Cabin'),
(33, 5, 'Conference And Meeting'),
(34, 5, 'Laboratory'),
(35, 5, 'Training Room'),
(36, 6, 'Yoko'),
(37, 6, 'Spark'),
(38, 6, 'Regency'),
(39, 6, 'Premier'),
(40, 6, 'Pearl'),
(41, 6, 'Sofa Picasso'),
(42, 6, 'Dali'),
(43, 6, 'Eclipse'),
(44, 6, 'Sofa Ambassador'),
(45, 7, 'Generick first cafeteria'),
(46, 7, 'Plastic Line'),
(47, 7, 'Iso Cafe'),
(48, 7, 'Wood Line'),
(49, 7, 'ALU Line'),
(50, 7, 'Cafe Pub'),
(51, 7, 'Glasstop'),
(52, 8, 'Fashion Shelves'),
(53, 8, 'Versatile Fixtures'),
(54, 8, 'Electronics Wood Shelves'),
(55, 8, 'Electronics Metal Shelves'),
(56, 8, 'Food Shelves');

-- --------------------------------------------------------

--
-- Table structure for table `user_feedback`
--

CREATE TABLE IF NOT EXISTS `user_feedback` (
  `feed_id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile_no` varchar(20) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `message` varchar(200) NOT NULL,
  PRIMARY KEY (`feed_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user_feedback`
--

INSERT INTO `user_feedback` (`feed_id`, `fullname`, `email`, `mobile_no`, `product_name`, `address`, `message`) VALUES
(1, 'parag baraiya', 'paragbaraiya@gmail.com', '9898204048', 'chair', 'junagadh', 'i want to buy 2 chairs'),
(2, 'parag baraiya1', 'paragbaraiya1@gmail.com', '9898204048', 'sofa', 'Junagadh', 'i want to buy 3 sofas.');

-- --------------------------------------------------------

--
-- Table structure for table `user_order`
--

CREATE TABLE IF NOT EXISTS `user_order` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `cust_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `category` int(11) NOT NULL,
  `subcat` int(11) NOT NULL,
  `product` int(11) NOT NULL,
  `quantity` varchar(5) NOT NULL,
  `address` varchar(150) NOT NULL,
  `country` int(11) NOT NULL,
  `state` int(11) NOT NULL,
  `city` int(11) NOT NULL,
  `message` varchar(200) NOT NULL,
  `order_date` varchar(20) NOT NULL,
  PRIMARY KEY (`order_id`),
  KEY `country` (`country`),
  KEY `state` (`state`),
  KEY `city` (`city`),
  KEY `category` (`category`),
  KEY `subcat` (`subcat`),
  KEY `product` (`product`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user_order`
--

INSERT INTO `user_order` (`order_id`, `cust_name`, `email`, `mobile`, `category`, `subcat`, `product`, `quantity`, `address`, `country`, `state`, `city`, `message`, `order_date`) VALUES
(1, 'parag', 'paragbaraiya@gmail.com', '9999999911', 1, 1, 1, '2', 'Junagadh', 11, 15, 60, 'I need 2 workstations of perform type', '22-05-2013'),
(2, 'parag', 'paragbaraiya1@gmail.com', '9999999912', 1, 2, 2, '3', 'Rajkot', 11, 15, 59, 'I need 3 workstations of evolve type', '27-05-2013'),
(3, 'parag baraiya', 'paragbaraiya@gmail.com', '9999999997', 3, 12, 14, '3', 'Some where in Junagadh', 11, 15, 59, 'I need executive chair of pinnacle type', '22-06-2013');

-- --------------------------------------------------------

--
-- Table structure for table `user_reg`
--

CREATE TABLE IF NOT EXISTS `user_reg` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `f_name` varchar(20) NOT NULL,
  `l_name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sec` varchar(200) NOT NULL,
  `ans` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `hobby` varchar(100) NOT NULL,
  `mobile_no` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `country` int(11) NOT NULL,
  `state` int(11) NOT NULL,
  `city` int(11) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'Enabled',
  PRIMARY KEY (`user_id`),
  KEY `country` (`country`,`state`,`city`),
  KEY `state` (`state`),
  KEY `city` (`city`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user_reg`
--

INSERT INTO `user_reg` (`user_id`, `username`, `password`, `f_name`, `l_name`, `email`, `sec`, `ans`, `gender`, `hobby`, `mobile_no`, `address`, `country`, `state`, `city`, `status`) VALUES
(1, 'parag', 'parag', 'parag', 'baraiya', 'paragbaraiya@gmail.com', 'Your favorite color?', 'red', 'Male', 'Reading,Writing,Internet', '9999999911', 'Somewhere In Junagadh', 11, 15, 60, 'Enabled'),
(2, 'parag1', 'parag1', 'parag1', 'baraiya1', 'paragbaraiya1@gmail.com', 'Your favorite game?', 'nfs', 'Male', 'Reading,Writing,Internet', '9999999912', 'Somewhere In Rajkot', 11, 15, 59, 'Enabled');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `branch_detail`
--
ALTER TABLE `branch_detail`
  ADD CONSTRAINT `branch_detail_ibfk_1` FOREIGN KEY (`country`) REFERENCES `country` (`cid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `branch_detail_ibfk_2` FOREIGN KEY (`state`) REFERENCES `state` (`sid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `branch_detail_ibfk_3` FOREIGN KEY (`city`) REFERENCES `city` (`ctid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `city_ibfk_1` FOREIGN KEY (`sid`) REFERENCES `state` (`sid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dealer_detail`
--
ALTER TABLE `dealer_detail`
  ADD CONSTRAINT `dealer_detail_ibfk_1` FOREIGN KEY (`country`) REFERENCES `country` (`cid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dealer_detail_ibfk_2` FOREIGN KEY (`state`) REFERENCES `state` (`sid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dealer_detail_ibfk_3` FOREIGN KEY (`city`) REFERENCES `city` (`ctid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`sub_id`) REFERENCES `subcat` (`sub_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `state`
--
ALTER TABLE `state`
  ADD CONSTRAINT `state_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `country` (`cid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subcat`
--
ALTER TABLE `subcat`
  ADD CONSTRAINT `subcat_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_order`
--
ALTER TABLE `user_order`
  ADD CONSTRAINT `user_order_ibfk_1` FOREIGN KEY (`country`) REFERENCES `country` (`cid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_order_ibfk_2` FOREIGN KEY (`state`) REFERENCES `state` (`sid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_order_ibfk_3` FOREIGN KEY (`city`) REFERENCES `city` (`ctid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_order_ibfk_4` FOREIGN KEY (`category`) REFERENCES `category` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_order_ibfk_5` FOREIGN KEY (`subcat`) REFERENCES `subcat` (`sub_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_order_ibfk_6` FOREIGN KEY (`product`) REFERENCES `product` (`pro_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_reg`
--
ALTER TABLE `user_reg`
  ADD CONSTRAINT `user_reg_ibfk_1` FOREIGN KEY (`country`) REFERENCES `country` (`cid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_reg_ibfk_2` FOREIGN KEY (`state`) REFERENCES `state` (`sid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_reg_ibfk_3` FOREIGN KEY (`city`) REFERENCES `city` (`ctid`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
