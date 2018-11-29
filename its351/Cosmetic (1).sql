-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 29, 2018 at 04:40 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Cosmetic`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `ID` int(5) NOT NULL,
  `UserID` int(20) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`ID`, `UserID`, `Address`, `city`, `state`, `zip`) VALUES
(5, 0, 'FKKKkk', 'Lanlukka', 'Pratumtani', 12120),
(6, 17, '134', 'bangkok', 'ramintra', 10230),
(7, 18, '345', 'bangkok', 'bangkok', 2345);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdminID` int(11) NOT NULL,
  `Firstname` varchar(255) NOT NULL,
  `Lastname` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminID`, `Firstname`, `Lastname`, `Email`, `Password`) VALUES
(1, 'r', 'r', 'rrr@gmail.com', '4567'),
(2, 'rr', 'rr', 'rrrr@gmail.com', '666'),
(3, 'eee', 'eee', 'eee@gmail.com', '9999'),
(4, 'its351', 'its351', 'helloe@gmail.com', '00000'),
(5, 'pantitaa', 'Bunnag', 'pantita.fon@gmail.com', 'pp199xppp');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `FID` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`FID`, `userid`, `Name`, `date`, `message`) VALUES
(1, 0, 'Chanuda', '0000-00-00 00:00:00', 'hhhh'),
(2, 0, 'Chanuda', '0000-00-00 00:00:00', 'Hello'),
(3, 0, 'Chanuda', '0000-00-00 00:00:00', 'KKK'),
(4, 0, 'Chanuda', '2018-11-28 04:02:11', 'GGG'),
(5, 20, 'Chanuda', '2018-11-28 04:03:57', 'uuu'),
(6, 1, 'ge', '2018-11-28 06:35:34', 'gd'),
(7, 1, 'gre', '2018-11-28 06:36:39', 're'),
(8, 19, 'nunu', '2018-11-28 06:49:05', 'good');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `OrderID` int(11) NOT NULL,
  `AddID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `trackingNo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`OrderID`, `AddID`, `UserID`, `status`, `trackingNo`) VALUES
(1, 0, 1, 'not', '4567'),
(16, 0, 32, '', ''),
(18, 0, 1, 'delivery', ''),
(19, 7, 18, 'delivery', ''),
(20, 0, 0, 'delivery', ''),
(21, 0, 18, 'not', '4567'),
(22, 0, 0, 'not', '2345'),
(23, 0, 18, 'not', '4567'),
(25, 0, 18, 'delivery', '');

-- --------------------------------------------------------

--
-- Table structure for table `Order_Product`
--

CREATE TABLE `Order_Product` (
  `ID` int(20) NOT NULL,
  `OrderID` int(100) NOT NULL,
  `ProductID` int(10) NOT NULL,
  `Quantity` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Order_Product`
--

INSERT INTO `Order_Product` (`ID`, `OrderID`, `ProductID`, `Quantity`) VALUES
(32, 16, 2, 1),
(33, 16, 3, 2),
(34, 17, 2, 1),
(35, 17, 3, 1),
(36, 17, 5, 1),
(37, 18, 2, 1),
(38, 18, 3, 1),
(39, 19, 4, 1),
(40, 19, 5, 1),
(41, 20, 2, 1),
(42, 20, 3, 1),
(43, 21, 2, 1),
(44, 21, 3, 1),
(45, 22, 5, 1),
(46, 22, 6, 1),
(47, 23, 2, 1),
(48, 23, 3, 1),
(49, 24, 1, 3),
(50, 25, 1, 1),
(51, 25, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `PaymentID` int(50) NOT NULL,
  `credit Card` varchar(100) NOT NULL,
  `Payment_Cost` decimal(10,2) NOT NULL,
  `CustID` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ProductID` int(11) NOT NULL,
  `ProductName` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `Price` int(10) NOT NULL,
  `Detail` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `amount` int(5) NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ProductType` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `QuickView` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ProductID`, `ProductName`, `Price`, `Detail`, `amount`, `image`, `ProductType`, `QuickView`) VALUES
(1, 'Beautiful', 359, ' An ultra finely milled, velvety smooth translucent loose powder that perfectly matches every skin tone. ', 100, 'bestcute press.jpg', 'face', 'dbestcutepress.html'),
(2, 'Traceless Touch Foundation', 1620, 'Tom Ford Traceless Touch Foundation Satin Matte Cushion Compact Refill only. Cushion compact case must be purchased separately, Colour: 2.0 Buff, 12g, SPF 45 / PA++++', 10, 'Tom.jpg', 'face', 'Tom.html'),
(3, 'The Luminous Lifting Cushion', 3825, 'Introducing iconic skincare plus radiant coverageâ€”all in one compact.With healing hydration from Miracle BrothTM and color capsule technology, give skin a lift of luminosityâ€”for a fresh, flawless look and a plumper, firmer feel. Includes a refill and additional sponge applicator.', 10, 'la.jpg', 'face', 'la.html'),
(4, '3CE Triple Shadow', 490, 'Bronze Burgundy, High contact system blending, soft sliding touch', 10, '3ce.jpg', 'eye', '3ce.html'),
(5, 'Maybelline NY The Rock Nudes Palette', 549, '12-shade eyeshadow palette, Can be used as duos, trios, quads, Edited for edge, from heavy metal to quietly quartz, dare to rock nude, Maybellineeyeshadow palette delivers the ultimate smoky rock nude look, Sultry, brooding, daring--whatever your mood demands', 10, 'may.jpg', 'eye', ''),
(6, 'NAKED3', 2450, 'Experiment with 12 NEVER-BEFORE-SEEN (and insanely beautiful) rose-hued neutralsâ€”from pale, shimmery pink to deep black matte with rosy red micro-glitter. It\'s finally here: the long-awaited follow-up Naked and Naked2 (two of the industry\'s all-time bestselling palettes)! And this time around, we\'', 10, 'naked.jpg', 'eye', ''),
(7, 'Sheer Shimmer Blush (SB)', 159, 'IN2IT Sheer Shimmer Blush No.SB 02 Rose Pearlâ€‹ 4 G. A dazzling blush of shimmering pearl powder. Super fine texture, soft and smooth. Long wearing with vitamin E as moisturiser vitamin E.', 10, 'in2it.png', 'blush', ''),
(8, 'Make Up Set No.01 (Pink)', 200, 'Fashionista Make up Set, a single set comes with special packaging to simply beautify your face with highlight, blusher, eyeshadows and eye brows together. Shea Butter, Macadamia Oil and Calendula Extract moisturize the skin.', 10, 'Make Up Set No.01.jpg', 'blush', ''),
(9, 'Lovely Cookie Blusher', 260, 'Pong pong pong~ The puff expresses revitalized, pinkish baby cheeks by lightly tapping on the cheeks.', 10, 'etude.png', 'blush', ''),
(10, 'Powder Blush - Ravishing Rose', 340, 'Revlon Powder Blush\'s true-color prismatic pigments to create a vibrant, multi-dimensional cheek color that looks freshly applied all day. The silky, buildable powder blush has a matte, satin or shimmer finish and shades for every skin tone.', 10, 'Ravishing Rose.jpg', 'blush', ''),
(11, 'Fruit Cocktail', 990, 'Buildable payoff for a perfect fruity flush or full-on strobe effect. Two deliciously different finishes in one compact offer maximum versatility & customization. Smells like yummy fruit. Our Inspiration Tutti Frutti is the playful, modern collection inspired by the luscious, sparkling colors of rea', 10, 'Fruit Cocktail_1.png', 'blush', ''),
(12, 'Sweet Peach Glow', 1399, 'Soft blush, bronzer, and highlighter work well on all skin tones. Buildable powders blend effortlessly. Creates an airbrushed effect. Smells like peaches', 10, 'SWEET PEACH GLOW.png', 'blush', ''),
(13, 'Chanel Rouge Allure Velvet Lip Colour', 1399, 'A lipstick as soft and comfortable as velvet. An alternative to shine that dresses lips in deep colours. A real second-skin effect. Result: a matte yet luminous finish from the very first stroke.', 10, 'bestchanel.jpg', 'lip', ''),
(14, 'Luxe Matte Lip Color', 1450, 'A new take on our bestselling Luxe Lip Color and a first-of-its-kind formula for BOBBI BROWN, this luxurious 12-hour matte lipstick gives lips a vivid, maximum-matte look and glides on with a silky-smooth feel.', 10, 'bob.jpg', 'lip', ''),
(15, 'Powder Kiss Lipstick', 880, 'A moisture-matte weightless lipstick that delivers a romantic blur of effortless soft-focus colour.', 10, 'mac.jpg', 'lip', ''),
(18, 'L\'OREAL PARIS - 929 UNICORN', 295, 'These ultra-fashionable shades light up your lips in an ultra-shiny lightweight coat.', 10, 'UNICORN.jpg', 'lip', ''),
(19, 'Sixteen Brand Eye Magazine', 590, 'Mix & Match 2 colors in one step! Quick 3-second tuning makeup regardless of makeup skills. *Quick 3-second tuning shadow for modern people who are too busy to apply makeup before going to work or school. *Daily two-tone colors of Glam Coral & Cacao Brown that add depth to your eyes and amazingly co', 10, '16.png', 'eye', ''),
(20, 'Mascara Duo - 01 Black', 1835, 'Exclusive hybrid brush lets you create different lash looks on demand. Buildable formula means you can dial up the drama throughout the day and into the night. Conditioning oils keep lashes silky soft, even after you reapply. Here in boldest Black. VOLUME + LIFT: Bristle Brush LENGTH + SEPARATION: M', 10, 'Mascara Duo.jpg', 'eye', ''),
(21, 'Longwear Creme Eye Pencil', 765, 'An ultra-smooth long-wearing pencil to line and define with ease. This creamy liner glides on smoothly with foolproof precision to create customizable eye definition. The water-proof formula ensures vibrant colour payoff that lasts all day. Provides comfortable, 12 hour long-wear. Water-proof, Smudg', 10, 'pencil.jpg', 'eye', ''),
(22, 'Double Wear Cushion BB All Day', 1615, 'Lasts all day, no touch-ups needed. A long-wearing cushion compact makeup with 8-hour lasting power. Protects with high level SPF. The lightweight, BB fresh, moisture-infused formula is comfortable and so lightweight, itâ€™s easy to build coverage and keep a natural radiant look. The appearance of p', 10, 'estee.jpg', 'face', ''),
(23, 'Yves Saint Cushion', 2170, 'Liquid Foundation Compace - Customizable radiance & coverage - Luminous cooling hydration', 10, 'Yves.jpg', 'face', ''),
(24, 'LANEIGE Layering Cover Cushion', 935, 'Complete Match of Cushion and Concealer. The 2-in-1 Layering Cover Cushion, Provides Perfectly. Brightened and Anti-darkening. Long-lasting finish. No.21 Beige (16.5 g)', 10, 'LANEIGE.jpg', 'face', ''),
(25, 'L\'OREAL PARIS - R512', 295, 'DRENCHES LIPS IN PURE, FINE PIGMENTS; INFUSED WITH MOISTURIZING OMEGA 3 OIL AND VITAMIN E TO SOFTEN CRACKING AND CHAPPING; CREAMY TEXTURE GOES ON SMOOTHLY AND LEAVES LIPS WITH A SUBTLE SHINE', 10, 'LE ROUGE.jpg', 'lip', ''),
(26, 'CLE DE PEAU BEAUTE - 103 Legend', 1995, 'A lightweight, matte finish lipstick with a cashmere texture that glides on smoothly to deliver bold color that shines through soft and elegant radiance. Flatters lips with a long-lasting moisture and helps improve their condition over time with continued use.', 10, 'Legend.jpeg', 'lip', ''),
(27, 'SRICHAND - LS21', 200, 'Award winning and one of the best-selling facial powders in Thailand. Srichand Translucent Powder is an extremely fine and silky powder that has a unique quality of oil-control benefit.', 10, 'srichand.jpg', 'face', ''),
(28, 'Translucent Compact Powder(10g)', 280, 'Award winning and one of the best-selling facial powders in Thailand. Srichand Translucent Powder is an extremely fine and silky powder that has a unique quality of oil-control benefit.', 10, 'Srichand2.jpg', 'face', ''),
(29, 'Mistine Maya Air Cushion 15g', 360, 'A newly lightweight cushion with full coverage help conceal pores and imperfections. Enriched with natural extracts to moisture and brighten the skin.', 10, 'maya.jpg', 'face', ''),
(30, 'seaNtree TONE UP SETTING POWDER', 550, 'Tone-up finishing powder that helps to complete the base make-up, apprearing bright and natural. Pink color powder helps brightening the skin naturally.', 10, 'seantree.jpg', 'face', ''),
(31, 'Champion Pink Eye Palette', 200, 'Selected for you with 8 shades of romantic pink. Can be both eyeshadow', 10, 'Champion.jpg', 'eye', ''),
(32, 'Eye Shadow - 04 Saharienne', 2465, 'YSL Saharienne (4) Couture Palette ($60.00 for 0.18 oz.) includes five shades of eyeshadow with a variety of textures. According to YSL, the formula has “intense color” and is “long-wearing, crease-proof” with “crease-resistant … 12-hour hold.”', 10, 'Parisienne.jpg', 'eye', ''),
(40, ' nunu', 345, ' ', 10, ' 3ce.jpg ', ' face', '');

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

CREATE TABLE `shipping` (
  `ShipID` int(50) NOT NULL,
  `ShihpID` decimal(10,2) NOT NULL,
  `Shipdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `telephone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `firstname`, `lastname`, `email`, `password`, `telephone`) VALUES
(5, 'Chanuda', 'nunu', 'Fangkzz@gmail.com', '05122540', '0876'),
(7, 'ad', 'd', 't@t.com', '12', '0'),
(8, 'fon', 'jjj', 'fonfon@gmail.com', '11', '0'),
(9, 'ffff', 'hhh', 'kaownam@hotmail.com', '999', '0'),
(10, 'Pantita', 'Thanyathitikul', 'Fonfon1998@gmail.com', '23112017', '0'),
(11, 'belle', 'belle', 'bellebelle@gmail.com', 'belle', '0'),
(12, 'hello', 'world', 'kaownam@hotmail.com', '123456', '0'),
(13, 'hello', 'world', 'hello@gmail.com', '22222', '0'),
(14, 'ooo', 'fff', 'FFF@gmail.com', '8888', '0'),
(15, 'K', 'F', 'sss@gmail.com', '2345', '097'),
(18, 'jin', 'kaew', 'nunu@gmail.com', 'nunu', '0'),
(19, 'jinnapat', 'kaewparuehaschai', 'nunuk@gmail.com', 'nunu', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdminID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`FID`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`OrderID`);

--
-- Indexes for table `Order_Product`
--
ALTER TABLE `Order_Product`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`PaymentID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ProductID`);

--
-- Indexes for table `shipping`
--
ALTER TABLE `shipping`
  ADD PRIMARY KEY (`ShipID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `AdminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `FID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `OrderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `Order_Product`
--
ALTER TABLE `Order_Product`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `PaymentID` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ProductID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `shipping`
--
ALTER TABLE `shipping`
  MODIFY `ShipID` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
