-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2021 at 04:13 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_tubes_203040107`
--

-- --------------------------------------------------------

--
-- Table structure for table `fashion`
--

CREATE TABLE `fashion` (
  `id` int(11) NOT NULL,
  `Picture` varchar(50) NOT NULL,
  `Name` varchar(70) NOT NULL,
  `Description` varchar(600) NOT NULL,
  `Price` int(50) NOT NULL,
  `Category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fashion`
--

INSERT INTO `fashion` (`id`, `Picture`, `Name`, `Description`, `Price`, `Category`) VALUES
(1, 'blus.jpg', 'WOMEN BLUS RAYON KERAH SKIPPER LENGAN 3/4', 'Skipper collar for effortless style. This blouse makes a fashion statement all on its own. - Wrinkle-resistant even after washing for easy care. - Smooth rayon material. - Versatile skipper collar. - Shorter length and slimmer fit through the body and shoulders for a sleek cut. - Button-up cuffs stay closed when you bend your elbows. - Flattering neckline.', 299000, 'Blus'),
(2, 'loungewear.jpg', 'WOMEN AIRism KATUN PIYAMA LENGAN PANJANG', 'Comfortable pajamas made of cotton. New pajamas made of AIRism cotton. - Added comfort features such as DRY technology and Cool Touch. - Feels very smooth and comfortable against your skin. - In addition to the AIRism features, it uses stretchy and comfortable cut and sewn fabric, so it is not see through and keeps the body lines covered. - Simple design that anyone can wear. - Sleek design in the front, so these pajamas look sharp. - The open collar design is easy to wear and does not feel tight when sleeping.', 499000, 'Loungewear'),
(3, 'jacket.jpg', 'JAKET SWEAT HOODIE RETSLETING', 'This item has a modern silhouette, while also looking to achieve the casual feel of sweats. - The item has a relaxed cut inspired by vintage sweats. Wear it in your true size, or go one size up for an oversized look. - Paid particular attention to the details, and used a thick yarn so it’s more durable. - Easy to style in many ways.', 399000, 'Jacket'),
(4, 'slippers.jpg', 'SANDAL RUMAH OPEN TOE WAFFLE', 'Open toe design. Our slippers are now washable. - In a classic waffle fabric. - Available in colors that showcase the waffle texture. - Updated washable design is now easier to keep clean.', 149000, 'Slippers'),
(5, 'backpack.jpg', 'CLASSIC MINI BACKPACK', 'CLASSIC MINI BACKPACK Casual weekends or full-blown festivals. Wherever you wander, this adidas mini backpack keeps your essentials close and easy to access. The zip pockets are perfect for small items like keys, an ID and cards. Throw an extra layer, a water bottle and a snack inside and head out on your next adventure.', 630000, 'Backpack'),
(6, 'shoes.png', 'CHUCK TAYLOR ALL STAR', 'BOLD KICKS FOR BOLD LADIES. These Chuck Taylor All Star sneakers are specifically made for those who love to glitter and shine. Inspired by bold women who were born to stand out, these kicks feature a shiny tile upper for a luxe look and a classic rubber outsole for grip. The high top construction and OrthoLite insole for cushioning add even more comfort, so that when you?re working hard to take over the world, you?ll feel great along the way.', 699000, 'Shoes'),
(7, 'hoddie.jpg', 'COTTON HOODED TOP', 'Oversized top in cotton sweatshirt fabric with a jersey-lined, drawstring hood, low dropped shoulders, long sleeves and ribbing at the cuffs and hem. Soft brushed inside.', 399900, 'Hoddie'),
(8, 'croptea.jpg', 'ZIPPED TOP', 'Short top in sweatshirt fabric with a small stand-up collar, zip at the top, dropped shoulders and long sleeves. Zipped sleeve pocket, a kangaroo pocket and ribbing at the cuffs and hem. Soft brushed inside.', 349900, 'Hoodie'),
(9, 'jeans.jpg', 'CULOTTE HIGH ANKLE JEANS', 'CONSCIOUS Calf-length jeans in washed stretch cotton denim with a high waist, small front pockets, back pockets and straight, wide legs with raw-edge, frayed hems.', 499900, 'Jeans'),
(10, 'jaket.jpg', 'SHIRT JAKCET', 'Shirt jacket in woven fabric containing some linen and cotton. Stand-up collar with a tab and button, buttons down the front, flap chest pockets with a button, and long sleeves with buttoned cuffs. Unlined.', 799900, 'Jacket');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fashion`
--
ALTER TABLE `fashion`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fashion`
--
ALTER TABLE `fashion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
