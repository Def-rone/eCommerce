-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2013 at 07:16 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `e_commerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE IF NOT EXISTS `item` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `image_user_name` varchar(100) NOT NULL,
  `image_folder_name` varchar(200) NOT NULL,
  `main_category` varchar(50) NOT NULL,
  `sub_category` varchar(50) NOT NULL,
  `price` float NOT NULL,
  `description` text NOT NULL,
  `features` text NOT NULL,
  `key_words` varchar(200) NOT NULL,
  `sold` int(11) NOT NULL,
  `thumb_up` int(11) NOT NULL,
  `thumb_down` int(11) NOT NULL,
  `item_add_date` datetime NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=119 ;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item_id`, `image_user_name`, `image_folder_name`, `main_category`, `sub_category`, `price`, `description`, `features`, `key_words`, `sold`, `thumb_up`, `thumb_down`, `item_add_date`) VALUES
(1, 'Headphones T-Shirt', 'Apparel_Male_T-Shirts_1355260071.jpg', 'Apparel', 'Men_T-Shirts', 19.99, 'This t-shirt allows you to wear your personality on your sleeve. With subjects covering religion, music, military, humor, novelty, movies, TV, art, fantasy, sports, video games, travel, and nature (just to name a few!), explore additional t-shirts for men, women, and kids.', 'crew neck\nshort sleeves\ncotton/polyester\nwashable\nimported', 'male men gray black white', 0, 19, 11, '2012-12-11 16:07:51'),
(2, 'August Burns Red T-Shirt', 'Apparel_Male_T-Shirts_1355260171.jpg', 'Apparel', 'Men_T-Shirts', 21.99, 'This t-shirt allows you to wear your personality on your sleeve. With subjects covering religion, music, military, humor, novelty, movies, TV, art, fantasy, sports, video games, travel, and nature (just to name a few!), explore additional t-shirts for men, women, and kids.', 'crew neck\r\nshort sleeves\r\ncotton/polyester\r\nwashable\r\nimported', 'male men gray blue yellow', 0, 11, 8, '2012-12-11 16:09:31'),
(3, 'Nightmare Before Christmas T-Shirt', 'Apparel_Male_T-Shirts_1355260524.jpg', 'Apparel', 'Men_T-Shirts', 21.99, 'This t-shirt allows you to wear your personality on your sleeve. With subjects covering religion, music, military, humor, novelty, movies, TV, art, fantasy, sports, video games, travel, and nature (just to name a few!), explore additional t-shirts for men, women, and kids.', 'crew neck\nshort sleeves\ncotton/polyester\nwashable\nimported', 'male men gray black white', 0, 7, 7, '2012-12-11 16:15:24'),
(4, 'Star Wars T-Shirt', 'Apparel_Male_T-Shirts_1355260596.jpg', 'Apparel', 'Men_T-Shirts', 15.99, 'This t-shirt allows you to wear your personality on your sleeve. With subjects covering religion, music, military, humor, novelty, movies, TV, art, fantasy, sports, video games, travel, and nature (just to name a few!), explore additional t-shirts for men, women, and kids.', 'crew neck\nshort sleeves\ncotton/polyester\nwashable\nimported', 'male men gray black white', 0, 36, 35, '2012-12-11 16:16:36'),
(5, 'Green Lantern T-Shirt', 'Apparel_Male_T-Shirts_1355272230.jpg', 'Apparel', 'Men_T-Shirts', 19.99, 'This t-shirt allows you to wear your personality on your sleeve. With subjects covering religion, music, military, humor, novelty, movies, TV, art, fantasy, sports, video games, travel, and nature (just to name a few!), explore additional t-shirts for men, women, and kids.', 'crew neck\nshort sleeves\ncotton/polyester\nwashable\nimported', 'male men green', 0, 21, 20, '2012-12-11 19:30:30'),
(6, 'Batman Classic Logo T-Shirt', 'Apparel_Women_T-Shirts_1355310042.jpg', 'Apparel', 'Women_T-Shirts', 19.99, 'Our Junior shirts are for the women that like to wear slim cut tees. These shirts are form fitting and have a softer feel than your average shirt.', 'machine wash line drypolyesterimported', 'female girl women  black yellow', 0, 32, 27, '2012-12-12 06:00:42'),
(7, 'Buffy the Vampire Slayer T-Shirt', 'Apparel_Women_T-Shirts_1355310162.jpg', 'Apparel', 'Women_T-Shirts', 24.99, 'Our Junior shirts are for the women that like to wear slim cut tees. These shirts are form fitting and have a softer feel than your average shirt.', 'machine wash line dry\r\npolyester\r\nimported', 'female girl women  red yellow', 0, 24, 11, '2012-12-12 06:02:42'),
(8, 'Marilyn Monroe T-Shirt', 'Apparel_Women_T-Shirts_1355310322.jpg', 'Apparel', 'Women_T-Shirts', 24.99, 'Our Junior shirts are for the women that like to wear slim cut tees. These shirts are form fitting and have a softer feel than your average shirt.', 'machine wash line dry\r\npolyester\r\nimported', 'female girl women pink face', 0, 3, 1, '2012-12-12 06:05:22'),
(9, 'Captain America T-Shirt', 'Apparel_Women_T-Shirts_1355310476.jpg', 'Apparel', 'Women_T-Shirts', 21.99, 'Our Junior shirts are for the women that like to wear slim cut tees. These shirts are form fitting and have a softer feel than your average shirt.', 'machine wash line dry\r\npolyester\r\nimported', 'female girl women shield bluw re white', 0, 0, 0, '2012-12-12 06:07:56'),
(10, 'Alice in Wonderland T-Shirt', 'Apparel_Women_T-Shirts_1355310575.jpg', 'Apparel', 'Women_T-Shirts', 19.99, 'Our Junior shirts are for the women that like to wear slim cut tees. These shirts are form fitting and have a softer feel than your average shirt.', 'machine wash line dry\r\npolyester\r\nimported', 'female girl women purple cat tree', 0, 4, 2, '2012-12-12 06:09:35'),
(12, 'Sesame Street - Big Photo Cookie T-Shirt', 'Apparel_Male_T-Shirts_1356382636.jpg', 'Apparel', 'Men_T-Shirts', 21.99, 'This t-shirt allows you to wear your personality on your sleeve. With subjects covering religion, music, military, humor, novelty, movies, TV, art, fantasy, sports, video games, travel, and nature (just to name a few!), explore additional t-shirts for men, women, and kids.', 'crew neck\r\nshort sleeves\r\ncotton/polyester\r\nwashable\r\nimported', 'male men blue black white', 0, 3, 2, '2012-12-24 15:57:16'),
(13, 'Bright Eyes T-Shirt', 'Apparel_Male_T-Shirts_1356382730.jpg', 'Apparel', 'Men_T-Shirts', 24.99, 'This t-shirt allows you to wear your personality on your sleeve. With subjects covering religion, music, military, humor, novelty, movies, TV, art, fantasy, sports, video games, travel, and nature (just to name a few!), explore additional t-shirts for men, women, and kids.', 'crew neck\r\nshort sleeves\r\ncotton/polyester\r\nwashable\r\nimported', 'male men lizard brown green', 0, 17, 1, '2012-12-24 15:58:50'),
(14, 'Sabertooth Face T-Shirt', 'Apparel_Women_T-Shirts_1356382797.jpg', 'Apparel', 'Men_T-Shirts', 21.99, 'This t-shirt allows you to wear your personality on your sleeve. With subjects covering religion, music, military, humor, novelty, movies, TV, art, fantasy, sports, video games, travel, and nature (just to name a few!), explore additional t-shirts for men, women, and kids.', 'crew neck\r\nshort sleeves\r\ncotton/polyester\r\nwashable\r\nimported', 'male men tiger teeth brown', 0, 0, 0, '2012-12-24 15:59:57'),
(15, 'CCCP - Hammer & Sickle T-Shirt', 'Apparel_Male_T-Shirts_1356382863.jpg', 'Apparel', 'Men_T-Shirts', 14.99, 'This t-shirt allows you to wear your personality on your sleeve. With subjects covering religion, music, military, humor, novelty, movies, TV, art, fantasy, sports, video games, travel, and nature (just to name a few!), explore additional t-shirts for men, women, and kids.', 'crew neck\r\nshort sleeves\r\ncotton/polyester\r\nwashable\r\nimported', 'male men red yellow russia', 0, 4, 13, '2012-12-24 16:01:03'),
(16, 'Pi T-Shirt', 'Apparel_Male_T-Shirts_1356382913.jpg', 'Apparel', 'Men_T-Shirts', 19.99, 'This t-shirt allows you to wear your personality on your sleeve. With subjects covering religion, music, military, humor, novelty, movies, TV, art, fantasy, sports, video games, travel, and nature (just to name a few!), explore additional t-shirts for men, women, and kids.', 'crew neck\r\nshort sleeves\r\ncotton/polyester\r\nwashable\r\nimported', 'male men red blue white', 0, 0, 0, '2012-12-24 16:01:53'),
(17, 'AC/DC T-Shirt', 'Apparel_Women_T-Shirts_1356383501.jpg', 'Apparel', 'Women_T-Shirts', 24.99, 'Our Junior shirts are for the women that like to wear slim cut tees. These shirts are form fitting and have a softer feel than your average shirt.', 'machine wash \r\nline dry\r\npolyester\r\nimported', 'female girl women  red black', 0, 0, 0, '2012-12-24 16:11:41'),
(18, 'V-Neck- Freebird T-Shirt', 'Apparel_Women_T-Shirts_1356383580.jpg', 'Apparel', 'Women_T-Shirts', 21.99, 'Our Junior shirts are for the women that like to wear slim cut tees. These shirts are form fitting and have a softer feel than your average shirt.', 'machine wash \r\nline dry\r\npolyester\r\nimported', 'female girl women black white yellow', 0, 1, 1, '2012-12-24 16:13:00'),
(19, 'Metallica - Winged Logo T-Shirt', 'Apparel_Women_T-Shirts_1356383641.jpg', 'Apparel', 'Women_T-Shirts', 15.99, 'Our Junior shirts are for the women that like to wear slim cut tees. These shirts are form fitting and have a softer feel than your average shirt.', 'machine wash \r\nline dry\r\npolyester\r\nimported', 'female girl women black pick', 0, 4, 3, '2012-12-24 16:14:01'),
(21, 'Alien T-Shirt', 'Apparel_Women_T-Shirts_1356383741.jpg', 'Apparel', 'Women_T-Shirts', 19.99, 'Our Junior shirts are for the women that like to wear slim cut tees. These shirts are form fitting and have a softer feel than your average shirt.', 'machine wash \r\nline dry\r\npolyester\r\nimported', 'female girl women red white', 0, 4, 2, '2012-12-24 16:15:41'),
(22, 'Pink Panther T-Shirt', 'Apparel_Women_T-Shirts_1356383904.jpg', 'Apparel', 'Women_T-Shirts', 21.99, 'Our Junior shirts are for the women that like to wear slim cut tees. These shirts are form fitting and have a softer feel than your average shirt.', 'machine wash \r\nline dry\r\npolyester\r\nimported', 'female girl women pick face', 0, 37, 31, '2012-12-24 16:18:24'),
(29, 'Richards Beaded Halter Maxi Dress', 'Apparel_Women_Dresses_1356722573.jpg', 'Apparel', 'Women_Dresses', 80.99, 'Richards beaded halter maxi dress is show-stopping luxe with a fully sequined silhouette that slit at the front hem perfect for showing off a pair of statement heels.', 'Dry clean\r\nImported\r\nV-neckline at front\r\ndeep V-neckline at back\r\nPullover style\r\nSleeveless\r\nSequined throughout\r\nSlit at front hem\r\nFitted\r\nLined\r\nFloor length', 'girl blue teal', 0, 0, 0, '2012-12-28 14:22:53'),
(30, 'Bisou Bisou Dress', 'Apparel_Women_Dresses_1356784255.jpg', 'Apparel', 'Women_Dresses', 40.99, 'A buckle accent on this one-shoulder colorblock dress is cute, cheeky and perfect for a fun night out.', 'Dry clean\nImported\nV-neckline at front\nmachine wash \nline dry\npolyester', 'girl blue black', 0, 0, 0, '2012-12-29 07:30:55'),
(31, 'Cap-Sleeve Peplum Dress', 'Apparel_Women_Dresses_1356784352.jpg', 'Apparel', 'Women_Dresses', 30, 'Form-fitted and fabulous, this elegant cap-sleeve peplum dress is designed to make you stand out from the crowd in all the right ways', 'Dry clean\r\nImported\r\nV-neckline at front\r\nmachine wash \r\nline dry\r\npolyester', 'girl white', 0, 0, 0, '2012-12-29 07:32:32'),
(32, 'Self-Tie Colorblock Dress', 'Apparel_Women_Dresses_1356784418.jpg', 'Apparel', 'Women_Dresses', 35.99, 'Dress it up or go casual – this colorblocked dress is ready for anything.', 'Dry clean\r\nImported\r\nV-neckline at front\r\nmachine wash \r\nline dry\r\npolyester', 'girl black gray', 0, 0, 0, '2012-12-29 07:33:38'),
(33, 'Liz Claiborne Print Dress', 'Apparel_Women_Dresses_1356784539.jpg', 'Apparel', 'Women_Dresses', 28.99, 'A fun print dress is a sure way to inject personality into your fall style.', 'contrast trim\r\npockets\r\nbody: polyester/cotton. \r\nside panel: polyester/cotton\r\nwashable\r\nimported', 'girl black white', 0, 0, 0, '2012-12-29 07:35:39'),
(34, 'ICE Faux Leather Trim Sheath Dress', 'Apparel_Women_Dresses_1356784695.jpg', 'Apparel', 'Women_Dresses', 35.99, 'The season is popular hue against faux leather trim is a hot look on this super chic shift dress.', 'faux leather trim\r\ncontrast sleeves and waist\r\npolyester/rayon/spandex\r\nmachine wash\r\nimported', 'girl blue black', 0, 1, 2, '2012-12-29 07:38:15'),
(35, 'Short-Sleeve Belted Dress', 'Apparel_Women_Dresses_1356784750.jpg', 'Apparel', 'Women_Dresses', 29.99, 'Step out in style in this ultra-feminine belted dress featuring a lace accented waist.', 'polyester/spandex, exclusive of decoration\r\nmachine wash, dry flat\r\nimported', 'girl red black', 0, 0, 0, '2012-12-29 07:39:10'),
(36, 'By Artisan Boatneck Dress', 'Apparel_Women_Dresses_1356784801.jpg', 'Apparel', 'Women_Dresses', 50.99, 'A simple boatneck dress with intricate jacquard stitched detail makes this an interesting piece to wear this fall.', 'boatneck\r\nlong sleeve\r\nstitching detail\r\nfaux leather trim\r\nviscose/spandex\r\nmachine wash, line dry\r\nimported', 'girl gray black', 0, 1, 1, '2012-12-29 07:40:01'),
(37, 'Bisou Bisou Pleated Maxi Dress', 'Apparel_Women_Dresses_1356784869.jpg', 'Apparel', 'Women_Dresses', 60.99, 'Ultra-chic and feminine maxi dress accented with pleats and a soft flowy material.', 'polyester\r\nwashable\r\nimported', 'girl red', 0, 0, 0, '2012-12-29 07:41:09'),
(39, 'Long-Sleeve Striped Sweater Dress', 'Apparel_Women_Dresses_1356785147.jpg', 'Apparel', 'Women_Dresses', 25.99, 'An edgy print on this crew-neck sweater dress lends you an effortless style you will love this season.', 'long-sleeves\r\nzip closer\r\ncotton/rayon/nylon\r\nmachine wash, reshape; dry flat\r\nimported', 'girl white black ', 0, 6, 5, '2012-12-29 07:45:47'),
(40, 'Seamless Cami Top', 'Apparel_Women_Tops_1356799350.jpg', 'Apparel', 'Women_Tops', 8.99, 'A sleek, seamless cami with adjustable straps and flattering side ribbing is the perfect layering piece.', 'adjustable straps\r\nribbed sides\r\nnylon/spandex\r\nwashable\r\nimported', 'girl black', 0, 0, 0, '2012-12-29 11:42:30'),
(41, 'Shirred-Sleeve Button-Font Top', 'Apparel_Women_Tops_1356799403.jpg', 'Apparel', 'Women_Tops', 20.99, 'Shirred sleeves and a skinny belt make this button-front shirt totally trendy.', 'collar with center-front placket\r\nbutton front\r\nshirred 3/4 sleeves with cuffs\r\nrounded hem\r\ncotton/polyester/spandex poplin\r\nwashable\r\nimported', 'girl white', 0, 0, 0, '2012-12-29 11:43:23'),
(42, 'Jacquard Raglan Peplum Top', 'Apparel_Women_Tops_1356799457.jpg', 'Apparel', 'Women_Tops', 18.99, 'Accessorize with a little bit of wow in this curvy, jacquard-knit, raglan-sleeve peplum top.', 'scoop neck\r\nshort, raglan-style sleeves\r\npeplum waist\r\npolyester/spandex jacquard\r\nwashable\r\nimported', 'girl white black', 0, 0, 0, '2012-12-29 11:44:17'),
(43, 'Geometric Print Blouse Top', 'Apparel_Women_Tops_1356799518.jpg', 'Apparel', 'Women_Tops', 25.99, 'Why, you are looking positively geometric this evening in that peter pan collar blouse.', 'peter pan collar\r\nlong sleeves\r\nbutton back with center-back cut-out\r\npolyester\r\ncontrasting polyester trim\r\nmachine wash, line dry\r\nimported', 'girl colorfull ', 0, 0, 0, '2012-12-29 11:45:18'),
(44, 'Striped V-Neck Sweater Top', 'Apparel_Women_Tops_1356799590.jpg', 'Apparel', 'Women_Tops', 22.99, 'Add some cheerful stripes to a basic v-neck sweater for a fun pop of color.', 'v neck\r\nlong sleeves\r\ncotton/nylon\r\nwashable\r\nimported', 'girl colorfull blue yellow gray black', 0, 0, 0, '2012-12-29 11:46:30'),
(45, 'Striped Chunky Knit Top', 'Apparel_Women_Tops_1356799661.jpg', 'Apparel', 'Women_Tops', 25.99, 'A striped chunky knit sweater feels cozy and looks good this winter.', 'square neck\r\n¾ sleeves\r\ncotton/acrylic\r\nmachine wash, dry flat\r\nimported', 'girl black white', 0, 0, 0, '2012-12-29 11:47:41'),
(46, 'Short-Sleeve Polo Top', 'Apparel_Women_Tops_1356799721.jpg', 'Apparel', 'Women_Tops', 10.99, 'A no-nonsense polo shirt offers timeless good looks for casual work days and the weekend.', 'front button placket\r\nflat collar\r\ncotton/spandex\r\nmachine wash, dry flat\r\nimported', 'girl black ', 0, 0, 0, '2012-12-29 11:48:41'),
(47, 'V-Neck Top', 'Apparel_Women_Dresses_1356799807.jpg', 'Apparel', 'Women_Tops', 25.99, 'Make your point subtly yet firmly in this handsome chiffon-trimmed v-neck sweater.', 'v neck with polyester chiffon banding\r\nlong sleeves with ribbed cuffs\r\nacrylic/polyester\r\npolyester back panel\r\nhand wash, dry flat\r\nimported', 'girl pink purple ', 0, 0, 0, '2012-12-29 11:50:07'),
(48, 'Pullover Top', 'Apparel_Women_Tops_1356799858.jpg', 'Apparel', 'Women_Tops', 19.99, 'Classic crewneck pullover has an effortless style.', 'wide crewneck\r\n½ sleeves\r\nramie/cotton/acrylic\r\nmachine wash, dry flat\r\nimported', 'girl pink red', 0, 2, 3, '2012-12-29 11:50:58'),
(49, 'Metallic Layered Top', 'Apparel_Women_Tops_1356799904.jpg', 'Apparel', 'Women_Tops', 29.99, 'Metallic popover sweater tank will add a layered silvery glow to your wardrobe this season.', 'scoop neck\r\nviscose/metallic sweater, polyester inset\r\nhand wash, dry flat\r\nimported', 'girl while gray', 0, 2, 2, '2012-12-29 11:51:44'),
(50, 'Sophie Skinny Corduroy Pant', 'Apparel_Women_Pants_1356979228.jpg', 'Apparel', 'Women_Pants', 20.99, 'A lean fit and the great texture are all rolled into this pair of ultra-modern, comfortably chic corduroy pants.', 'five-pocket styling\r\n32½" inseam\r\ncotton/spandex\r\nwashable\r\nimported', 'girl blue', 0, 0, 0, '2012-12-31 13:40:28'),
(51, 'Belted Stiletto Slim-Leg Pant', 'Apparel_Women_Pants_1356979282.jpg', 'Apparel', 'Women_Pants', 17.99, 'Sharp looking stiletto slim-leg pants offer a little stretch for a comfortable fit and a figure-flattering style.', 'zip closure\r\nbelted\r\nsits just below waist\r\nslim leg\r\npolyester/spandex\r\nwashable\r\nimported', 'girl red', 0, 0, 0, '2012-12-31 13:41:22'),
(52, 'Modern Straight-Leg Pant', 'Apparel_Women_Pants_1356979334.jpg', 'Apparel', 'Women_Pants', 22.99, 'Perfect for work or a night out, these modern straight-leg pants will fit seamlessly into your wardrobe.', 'flat front\r\ntwo faux back pockets\r\nhook, bar, button closure with zipper\r\n30" lnseam\r\nblack: cotton/spandex\r\ncharcoal heather, black pinstripe, gray plaid: polyester/rayon/spandex\r\nwashable\r\nimported', 'girl gray box', 0, 0, 0, '2012-12-31 13:42:14'),
(53, 'Modern-Fit Angle Pocket Pant', 'Apparel_Women_Pants_1356979409.jpg', 'Apparel', 'Women_Pants', 25.99, 'Does your body shape fall between curvy and straight? Our best-selling Worthington pants offer a universal fit for figures more proportional from waist to hips.', 'washable\r\nimported\r\nmisses: 32" inseam\r\nmisses short: 30" inseam\r\nmisses long: 34½" inseam', 'girl black', 0, 9, 7, '2012-12-31 13:43:29'),
(54, 'Curvy Fit Pant', 'Apparel_Women_Pants_1356979485.jpg', 'Apparel', 'Women_Pants', 22.99, 'Trousers by Worthington are always a favorite and an essential anchor to any wardrobe. Smartly tailored to sit slightly below the waist, these classics are crafted with a hint of spandex for a great curvy fit.', 'washable\r\nimported\r\nmisses: 32" inseam\r\nmisses short: 30" inseam\r\nmisses long: 34" inseam', 'girl black', 0, 0, 0, '2012-12-31 13:44:45'),
(55, 'Stiletto Ankle Pant', 'Apparel_Women_Pants_1356979548.jpg', 'Apparel', 'Women_Pants', 17.99, 'These patterned ankle pants are the perfect complement to your sky-high stilettos.', 'sits just below waist\r\nslim leg\r\nnylon zipper front closure\r\nfront pockets\r\n27" inseam', 'girl gray white', 0, 0, 0, '2012-12-31 13:45:48'),
(56, 'Bouble Band Pant', 'Apparel_Women_Pants_1356979647.jpg', 'Apparel', 'Women_Pants', 25.99, 'Workout or simply lounge around in these great-fitting double-band athletic pants.', 'polyester/spandex\r\nwashable\r\nimported', 'girl black', 0, 0, 0, '2012-12-31 13:47:27'),
(57, 'Contrast Tuxedo Pant', 'Apparel_Women_Pants_1356979725.jpg', 'Apparel', 'Women_Pants', 25.99, 'Start the day tailored and step poshly into the night in these contrast tuxedo pants.', 'slim leg\r\nnylon zipper front closure\r\n2 back faux welt pockets\r\n30" inseam', 'girl black white', 0, 0, 0, '2012-12-31 13:48:45'),
(58, 'Ankle-Length Pant', 'Apparel_Women_Pants_1356979777.jpg', 'Apparel', 'Women_Pants', 25.99, 'Chic flat-front ankle-length pants are casually chic and perfect for fall.', 'flat front\r\nankle length\r\ntwo front slant pockets\r\ntwo back welt pockets\r\n28" inseam', 'girl pink', 0, 0, 0, '2012-12-31 13:49:37'),
(59, 'Tuxedo-Striped Ankle Pant', 'Apparel_Women_Pants_1356979828.jpg', 'Apparel', 'Women_Pants', 17.99, 'Make a promising career move into these sophisticated tuxedo-striped ankle pants.', 'black/striking: washable\r\nimported\r\n30" inseam\r\npolyester/rayon/spandex', 'girl black white', 0, 0, 0, '2012-12-31 13:50:28'),
(60, 'Faux Leather Skirt', 'Apparel_Women_Skirts_1356980143.jpg', 'Apparel', 'Women_Skirts', 25.99, 'Sassy faux leather skirt is ready to rock your style.', 'zip closure at center back\r\nfully lined\r\nrayon, polyester lining\r\nhand wash, line dry\r\nimported', 'girl black', 0, 0, 0, '2012-12-31 13:55:43'),
(61, 'Mini Skirt', 'Apparel_Women_Skirts_1356980195.jpg', 'Apparel', 'Women_Skirts', 25.99, 'A black and sand grid pattern gives this mini skirt a graphic edge. It’s retro reinvented with drama that doesn’t overpower.', 'hidden back zip\r\nlined\r\nacrylic\r\nwashable\r\nimported', 'girl black white gray', 0, 0, 0, '2012-12-31 13:56:35'),
(62, 'Long Skirt', 'Apparel_Women_Skirts_1356980487.jpg', 'Apparel', 'Women_Skirts', 20, 'Show a hint of your wild side with this ponte skirt is flamestitch detailing.', 'pencil skirt\r\nelastic waist\r\n20" center-back length', 'girl white', 0, 0, 0, '2012-12-31 14:01:27'),
(63, 'Ponte Flamestitch Skirt', 'Apparel_Women_Skirts_1356980532.jpg', 'Apparel', 'Women_Skirts', 22, 'Show a hint of your wild side with this ponte skirt is flamestitch detailing.', 'pencil skirt\r\nelastic waist\r\n20" center-back length', 'girl white', 0, 0, 0, '2012-12-31 14:02:12'),
(64, 'Slim Skirt Skirt', 'Apparel_Women_Skirts_1356980646.jpg', 'Apparel', 'Women_Skirts', 30.99, 'Look and feel like a top notch executive in this confident, slim-fitting skirt.', 'zip closure in back\r\nback vent\r\npolyester', 'girl gray', 0, 0, 0, '2012-12-31 14:04:06'),
(65, 'Princess Seam Skirt', 'Apparel_Women_Skirts_1356980768.jpg', 'Apparel', 'Women_Skirts', 32.99, 'Well-placed princess seams create a flattering line on this classic skirt featuring a double back vent.', 'side zip\r\n24"L\r\npolyester', 'girl gray', 0, 0, 0, '2012-12-31 14:06:08'),
(66, 'Pleated High-Low Skirt', 'Apparel_Women_Skirts_1356980824.jpg', 'Apparel', 'Women_Skirts', 37.99, 'his breezy skirt in lightweight chiffon features preppy pleats and a sassy high-low hem for extra movement.', 'polyester\r\nwashable\r\nimported', 'girl purple white ', 0, 0, 0, '2012-12-31 14:07:04'),
(67, 'Tuxedo Stripe Pencil Skirt', 'Apparel_Women_Skirts_1356980879.jpg', 'Apparel', 'Women_Skirts', 29.99, 'Professionally chic tuxedo stripe pencil skirt invites a more sleek and sophisticated look into your office.', 'polyester/rayon/spandex insert\r\npolyester lining\r\ndry clean\r\nimported', 'girl red', 0, 1, 1, '2012-12-31 14:07:59'),
(68, 'Houndstooth Ponte Pencil Skirt', 'Apparel_Women_Skirts_1356980945.jpg', 'Apparel', 'Women_Skirts', 21.99, 'Our ponte pencil skirt is absolutely divine in a larger-than-life houndstooth jacquard. Ponte holds its shape but also has give for a super-comfortable fit.', '20" inseam\r\npolyester/rayon/spandex\r\nwashable\r\nimported', 'girl black white', 0, 0, 0, '2012-12-31 14:09:05'),
(69, 'Mixed Pattern Pencil Skirt', 'Apparel_Women_Skirts_1356981018.jpg', 'Apparel', 'Women_Skirts', 27.99, 'The diagonal lines of modern mixed patterns create an ultra-flattering effect on this professional, yet stylish pencil skirt.', 'invisible zipper\r\n22½"L\r\npolyester/rayon/spandex\r\nfully lined\r\nwashable', 'girl black white gray', 0, 2, 2, '2012-12-31 14:10:18'),
(70, 'Swoosh Crew-Neck Tee', 'Apparel_Women_Active-wear_1356997537.jpg', 'Apparel', 'Women_Active-wear', 20.99, 'Relaxed crew-neck tee features slim fit and pearlescent Nike swoosh graphic.', 'cotton\r\nwashable\r\nimported', 'girl black ', 0, 0, 0, '2012-12-31 18:45:37'),
(71, 'Zipper Capri', 'Apparel_Women_Active-wear_1356997621.jpg', 'Apparel', 'Women_Active-wear', 20.99, 'These cropped capris have tapered legs with zippers to accommodate your every move.', 'waistband stitching\r\n19½" inseam\r\npolyester/spandex\r\nwashable\r\nimported', 'girl black yellow', 0, 0, 0, '2012-12-31 18:47:01'),
(72, 'Hooded Soft Sheel Jacket', 'Apparel_Women_Active-wear_1356997694.jpg', 'Apparel', 'Women_Active-wear', 25.99, 'ooded soft shell jacket with side pockets is versatile and relaxed.', 'polyester/spandex\r\nwashable\r\nimported', 'girl teal white', 0, 0, 0, '2012-12-31 18:48:14'),
(73, 'M3 Shirred Woven Pants', 'Apparel_Women_Active-wear_1356997778.jpg', 'Apparel', 'Women_Active-wear', 30.99, 'Great for warm-ups, these shirred woven pants will keep the wind at bay, so get out there!', 'flat front\r\nstraight leg\r\nmoisture-wicking fabric\r\nelastic waistband\r\ndrawstring', 'girl black', 0, 0, 0, '2012-12-31 18:49:38'),
(74, 'Athletic Warm-Up Boxers', 'Apparel_Women_Active-wear_1356997840.jpg', 'Apparel', 'Women_Active-wear', 14.99, 'With drawstring waist and semi-fit, these athletic warm-up boxers are ultra comfortable for your workouts.', 'mid-rise\r\npolyester\r\nwashable\r\nimported', 'girl black pink', 0, 0, 0, '2012-12-31 18:50:40'),
(75, 'Half-Zip Pullover Shirt', 'Apparel_Women_Active-wear_1356997905.jpg', 'Apparel', 'Women_Active-wear', 25.99, 'Half-zip pullover pullover tee offers warmth without weight.', 'front pockets\r\npolyester\r\nwashable\r\nimported', 'girl pink', 0, 0, 0, '2012-12-31 18:51:45'),
(76, 'Double Bank Taped Capris', 'Apparel_Women_Active-wear_1356998000.jpg', 'Apparel', 'Women_Active-wear', 10.99, 'Work out or lounge around in these fitted double-taped inset capris.', 'polyester/spandex\r\nwashable\r\nimported', 'girl pink black', 0, 0, 0, '2012-12-31 18:53:20'),
(77, 'Quilted Puffer Jacket', 'Apparel_Women_Active-wear_1356998070.jpg', 'Apparel', 'Women_Active-wear', 30.99, 'Twill French terry with wicking and convenient zipper pockets are just two features that will make this puffer jacket your go-to cool-weather piece.', 'polyester\r\nwashable\r\nimported', 'girl black teal blue ', 0, 6, 2, '2012-12-31 18:54:30'),
(78, 'Double-Strap Shirred-Side Tank Top', 'Apparel_Women_Active-wear_1356998152.jpg', 'Apparel', 'Women_Active-wear', 28.99, 'Sport meets style with this double-strap shirred-side tank top.', 'polyester/spandex\r\nwashable\r\nimported', 'girl black gray', 0, 3, 2, '2012-12-31 18:55:52'),
(79, 'Colorblock Hoodie', 'Apparel_Women_Active-wear_1356998290.jpg', 'Apparel', 'Women_Active-wear', 17.99, 'This colorblock hoodie is moisture-wicking French terry cloth makes for a comfy cool-down.', 'front zip closure\r\nkangaroo front pockets\r\ncotton/polyester/spandex\r\nwashable\r\nimported', 'girl green black', 0, 0, 0, '2012-12-31 18:58:10'),
(80, 'Fleece Crew-Neck Sweatshirt', 'Apparel_Men_Hoodies_1358359048.jpg', 'Apparel', 'Men_Hoodies', 25.99, 'Our IZOD® crew-neck sweatshirt features a soft sueded fleece fabric and an easy fit for all-day comfort.', 'long sleeves\r\ncotton/polyester\r\nwashable\r\nimported', 'men gray brown dark', 0, 0, 0, '2013-01-16 12:57:28'),
(81, 'Fleece Pullover Hoodie', 'Apparel_Men_Hoodies_1358359182.jpg', 'Apparel', 'Men_Hoodies', 22.99, 'Classic fleece pullover hoodie offers a burst of color and a handy MP3 pocket so your favorite playlist is always at hand.', 'kangaroo pocket\r\nMP3 pocket\r\nsoft polyester fleece\r\nwashable\r\nimported', 'men blue', 0, 0, 0, '2013-01-16 12:59:42'),
(82, 'Nike Fleece Pullover Hoodie', 'Apparel_Men_Hoodies_1358359236.jpg', 'Apparel', 'Men_Hoodies', 35.99, 'For working out or hanging out, nothing beats this ultra-soft classic pullover from Nike.', 'super soft\r\nembroidered logo on left chest\r\nknit cuffs\r\nstraight hem\r\nkangaroo pocket\r\ncotton/polyester\r\nwashable\r\nimported', 'men purple', 0, 0, 0, '2013-01-16 13:00:36'),
(83, 'Hybrid Sherpa-Lined Fleece Jacket', 'Apparel_Men_Hoodies_1358359679.jpg', 'Apparel', 'Men_Hoodies', 35.99, 'Sherpa lining adds a layer of rugged warmth to the fleece jacket.', 'cotton/polyester\r\npolyester lining\r\nwashable\r\nimported', 'male man gray white black', 0, 0, 0, '2013-01-16 13:07:59'),
(84, 'Puma Fleece Track Jacket', 'Apparel_Men_Hoodies_1358359961.jpg', 'Apparel', 'Men_Hoodies', 45.99, 'Wear the cat for style and performance. But know this cotton-rich fleece track jacket from Puma is incredibly comfortable, too.', 'mock neck\r\nzip front\r\nkangaroo pocket\r\nPuma Number One logo\r\nembroidered Puma cat logo\r\ncotton/polyester\r\nwashable\r\nimported', 'male red', 0, 1, 2, '2013-01-16 13:12:41'),
(85, 'Crew-Neck Fleece Pullover', 'Apparel_Men_Hoodies_1358360080.jpg', 'Apparel', 'Men_Hoodies', 35.99, 'Fleece pullover is soft and comfortable, an easy go-to shirt for casual days and weekends.', 'cotton/polyester\r\nwashable\r\nimported', 'male dark brown ', 0, 0, 0, '2013-01-16 13:14:40'),
(86, 'Sueded Fleece Zip Hoodie', 'Apparel_Men_Hoodies_1358360152.jpg', 'Apparel', 'Men_Hoodies', 30.99, 'Our super-soft, sueded fleece hoodie is just right for chilly days and nights.', '2 pockets\r\ncotton/polyester\r\nwashable\r\nimported', 'male black white', 0, 0, 0, '2013-01-16 13:15:52'),
(87, 'Nike Tail Sweep Hoodie', 'Apparel_Men_Hoodies_1358360276.jpg', 'Apparel', 'Men_Hoodies', 40.99, 'This Nike® hoodie offers a cool, classic look in soft, cotton-rich fleece for superior comfort all day long. ', 'drawcord with metal tipping\r\npouch pocket\r\nstandard fit\r\ntackle twill logo on center chest\r\nknit cuffs\r\ncotton/polyester\r\nwashable\r\nimported', 'male gray white', 0, 0, 0, '2013-01-16 13:17:56'),
(88, 'Full-Zip Tech Fleece Hoodie', 'Apparel_Men_Hoodies_1358360349.jpg', 'Apparel', 'Men_Hoodies', 30.99, 'Stay warm through those long fall and winter jogs with this full-zip tech fleece hoodie from Xersion.', 'MP3 pockets\r\npolyester\r\nwashable\r\nimported', 'male red ', 0, 0, 0, '2013-01-16 13:19:09'),
(89, 'Hart And Huntington Fleece Hoodie', 'Apparel_Men_Hoodies_1358360444.jpg', 'Apparel', 'Men_Hoodies', 30.99, 'Zip-front fleece hoodie adds a cool layer of comfort and warmth to your look.', 'polyester\r\nwashable\r\nimported', 'male black white', 0, 0, 0, '2013-01-16 13:20:44'),
(90, 'Diamond Mens Ring', 'Apparel_Men_Jewelry_1358361326.jpg', 'Apparel', 'Men_Jewelry', 300.99, 'Inspired by traditional rings, this jewel carries the luminous glow of 1½ ct. t.w. vibrant diamonds. Radiant 10K gold adds an updated gleam of style. ', 'Metal: 10K gold \r\nMetal Color: Yellow \r\nStones: 1 1/2 ct. t.w. round diamonds \r\nSetting: Prong \r\nColor Rating: J-K \r\nClarity Rating: I2-I3 \r\nSizes: 9-12, whole and 10½ ', 'male yellow white', 0, 1, 0, '2013-01-16 13:35:26'),
(91, 'Stafford Cuff Links', 'Apparel_Men_Jewelry_1358361381.jpg', 'Apparel', 'Men_Jewelry', 25.99, 'Classic cuff links get a modern update with beveled lines and a faux carbon fiber inset in rich blue. ', 'blue faux carbon fiber inset\r\nbeveled bezel\r\npolished nickel finish\r\nimported', 'male white black blue', 0, 0, 0, '2013-01-16 13:36:21'),
(92, 'Eco-Drive Blue Dial Calibre Watch', 'Apparel_Men_Jewelry_1358361473.jpg', 'Apparel', 'Men_Jewelry', 355.99, 'Stay on-time and in-style with this mens Citizen® Eco-Drive® Calibre watch. Must-have features include a perpetual calendar, alarm, dual time, 12/24 hour time and month/day/date displays. ', 'Brand: Citizen® \r\nDial Color: Blue \r\nBracelet: Silvertone stainless steel \r\nMovement: Japanese analog \r\nWater Resistance: 100m \r\nModel No.: BL8000-54L ', 'male white blue', 0, 4, 1, '2013-01-16 13:37:53'),
(93, 'Black Stainless Steel & Tugsten Bracelet', 'Apparel_Men_Jewelry_1358361538.jpg', 'Apparel', 'Men_Jewelry', 95.99, 'A bracelet with black stainless steel links and tungsten embellishments shows off sleek styling for the modern man.', 'Metal: Stainless steel\r\nMetal Color: Black\r\nClosure: Fold-over\r\nLength: 8 1/2”', 'male black white', 0, 1, 0, '2013-01-16 13:38:58'),
(94, 'Bulova Silver Tome Watch', 'Apparel_Men_Jewelry_1358361624.jpg', 'Apparel', 'Men_Jewelry', 180.99, 'Battery is included. Analog/quartz Japanese movement. Imported.', 'Curved crystal\r\nStainless steel bracelet\r\nBlack dial\r\nSilver-tone hands and markers\r\nDate window\r\nDeployment buckle\r\nWater-resistant to 100 ft.\r\nModel No.: 96G46', 'male gray white black', 0, 0, 0, '2013-01-16 13:40:24'),
(95, 'Mens Black Chronograph Watch', 'Apparel_Men_Jewelry_1358361874.jpg', 'Apparel', 'Men_Jewelry', 90.99, 'Form meets function in this black stainless steel watch with a black chronograph dial and rose gold tone accents. Its ultra-masculine styling works equally well for weekday or weekend wear.', 'Brand: Relic®\r\nDial Color: Black\r\nStrap: Black stainless steel\r\nClasp: One pusher sport clasp\r\nMovement: Analog\r\nWater Resistance: 165\r\nCase Width: 44mm\r\nCase Thickness: 14mm\r\nStrap Dimensions: 200mm long, 24mm \r\nModel No.: ZR66031', 'male brown white black dark', 0, 0, 0, '2013-01-16 13:44:34'),
(96, 'Stainless Steel Mens Bracelet', 'Apparel_Men_Jewelry_1358361950.jpg', 'Apparel', 'Men_Jewelry', 50.99, 'Its all about the edgy-cool details on this stainless steel link bracelet featuring textured black carbon fiber elements.', 'Metal: Stainless steel\r\nMetal Color: White\r\nLength: 8 1/2" ', 'male gray black white', 0, 0, 0, '2013-01-16 13:45:50'),
(97, 'Men Flame Dog Tag Stainless Steel', 'Apparel_Men_Jewelry_1358362023.jpg', 'Apparel', 'Men_Jewelry', 50.99, 'This flaming design is certainly not too hot to handle on this stainless steel dog tag.', 'Metal: Stainless steel\r\nMetal Color: Two-tone\r\nClosure: Lobster clasp\r\nLength: 24" bead chain', 'male gray black', 0, 0, 0, '2013-01-16 13:47:03'),
(98, 'Eco-Drive Mens Diamond Calibre', 'Apparel_Men_Jewelry_1358362079.jpg', 'Apparel', 'Men_Jewelry', 550.99, 'Mens Eco-Drive™ Calibre 8700 watch perfects performance and style with 36 brilliant diamonds.', 'Brand: Citizen\r\nDial Color: Black\r\nBracelet: Two-tone stainless steel\r\nClasp: Deployment clasp\r\nMovement: Japanese Analog\r\nWater Resistance: up to 100 meters\r\nCase Dimensions: 39mm x 10mm\r\nBracelet Dimensions: 7 7/8" long x 20mm\r\nModel No.: BL8044-59E', 'male gray white black yellow', 0, 3, 6, '2013-01-16 13:47:59'),
(99, 'Eco-Drive Mens Multifunction Watch', 'Apparel_Men_Jewelry_1358362188.jpg', 'Apparel', 'Men_Jewelry', 430.99, 'This mens Citizen® Eco-Drive™ watch sports serious function with a perpetual calendar, 60-minute chronograph and radion-controlled operation for five cities alternative time zone.', 'Brand: Citizen®\r\nDial Color: Black\r\nMovement: Japanese analog\r\nWater Resistance: 666\r\nCase Width: 43mm\r\nCase Thickness: 11mm', 'male gray black white', 0, 9, 8, '2013-01-16 13:49:48'),
(100, 'Davis Tapered Jeans', 'Apparel_Men_Jeans_1359323599.jpg', 'Apparel', 'Men_Jeans', 37.99, 'These easy-moving jeans featured a comfortable leg that tapers down to show off your favorite kicks.  ', 'five-pocket style\r\nbutton fly\r\nlow rise\r\nrelaxed legs\r\n15" leg opening\r\ncotton\r\nwashable\r\nimported', 'male men blue', 0, 0, 0, '2013-01-27 16:53:19'),
(101, 'Logan Straight-Leg Jeans', 'Apparel_Men_Jeans_1359323658.jpg', 'Apparel', 'Men_Jeans', 37.99, 'With a superb fit and urban attitude, these are your go-to jeans for pretty much anyplace you want to go.  ', 'five-pocket style\r\nbutton fly\r\nlow rise\r\nstraight legs\r\n16½" leg opening\r\ncotton\r\nwashable\r\nimported', 'male men blue dark', 0, 0, 0, '2013-01-27 16:54:18'),
(102, 'Dylan Skinny Jeans', 'Apparel_Men_Jeans_1359323704.jpg', 'Apparel', 'Men_Jeans', 39.99, 'Slim, trim and streetwise savvy, these pared-down jeans have nothing to slow you down.  ', 'five-pocket style\r\nbutton fly\r\nlow rise\r\nskinny legs\r\n14½" leg opening\r\ncotton\r\nwashable\r\nimported', 'male men blue dark', 0, 0, 0, '2013-01-27 16:55:04'),
(103, 'Shrink-To_Fit Jeans', 'Apparel_Men_Jeans_1359323766.jpg', 'Apparel', 'Men_Jeans', 50.99, 'All the quality and details of the original 501® jean, made from rigid denim that you finish yourself. Keep it dark and clean by washing as little as possible or repeat washings to fade them to your liking.\r\n', 'sits at waist\r\nbutton fly\r\nstraight leg\r\nextra room in the seat\r\nclassic 5-pocket styling\r\n17¼" leg opening\r\n100% cotton\r\nwashable\r\nimported', 'male men blue dark', 0, 2, 1, '2013-01-27 16:56:06'),
(104, 'Straight Jeas', 'Apparel_Men_Jeans_1359323828.jpg', 'Apparel', 'Men_Jeans', 40.99, 'Levis 505 straight-fit jeans are made for the guy who wants comfort with great style.', 'sits at waist\r\nclassic fit through seat and thigh\r\nstraight leg\r\ncotton\r\nwashable\r\nimported\r\nmore sizes: regular, extra tall, big', 'male men dark black', 0, 1, 0, '2013-01-27 16:57:08'),
(105, 'Relaxed Staight Jeans', 'Apparel_Men_Jeans_1359323892.jpg', 'Apparel', 'Men_Jeans', 20.99, 'Your everyday, go-to jeans: comfortable, relaxed and made to live in.', 'relaxed fit through seat and thigh\r\nstraight legs\r\n5-pocket style\r\ncotton\r\nwashable\r\nimported', 'male men blue light', 0, 0, 0, '2013-01-27 16:58:12'),
(106, 'Original Fit Jeans', 'Apparel_Men_Jeans_1359323976.jpg', 'Apparel', 'Men_Jeans', 45.99, 'Levis® Red Tab™ 501® jeans, the original fit that is still going strong after 150 years.', 'sit at waist\r\nclassic seat and thighs\r\nstraight legs\r\nbutton fly\r\npreshrunk to retain shape wash after wash\r\ncotton\r\nwashable\r\nmade in USA of imported and domestic fabric, imported or imported of domestic fabric', 'male men blue dark', 0, 0, 0, '2013-01-27 16:59:36'),
(107, 'Basic Bootcut Jeans', 'Apparel_Men_Jeans_1359324055.jpg', 'Apparel', 'Men_Jeans', 20.99, 'Bootcut jeans in our just-right original fit that is comfortable and looks great, too.', 'sits at waist\r\noriginal fit through seat and thigh\r\nbootcut legs\r\n5-pocket style\r\ncotton\r\nwashable\r\nimported', 'male men dark black', 0, 0, 0, '2013-01-27 17:00:55'),
(108, 'Arizona Slim Straight Jeans', 'Apparel_Men_Jeans_1359324122.jpg', 'Apparel', 'Men_Jeans', 20.99, 'Arizona slim-fit straight-leg jeans define the cool and casual look.', 'sits just below waist\r\nslim fit through seat and thigh\r\nstraight legs\r\n5-pocket style\r\ncotton\r\nwashable\r\nimported', 'male men blue dark', 0, 0, 0, '2013-01-27 17:02:02'),
(109, 'Throttle Mens Black Boots', 'Apparel_Men_Shoes_1359326429.jpg', 'Apparel', 'Men_Shoes', 55.99, 'Stylish boots can be the perfect detail to get noticed, in the office or a night on the town.', 'leather upper\r\nsynthetic lining\r\nthermoplastic rubber sole', 'male men black ', 0, 0, 0, '2013-01-27 17:40:29'),
(110, 'Flex Trail Mens Athletic Shoes', 'Apparel_Men_Shoes_1359326642.jpg', 'Apparel', 'Men_Shoes', 85.99, 'The Nike Flex Trail shoe is lightweight and has a reinforced toe and heel for durability over rugged terrain.', 'trail-ready upper with gusseted tongue\r\ndual-density phylon midsole delivers premium cushioning closer to your foot\r\nflexible outsole design with angled edges and spaces for optimal grip in all conditions', 'male men black red', 0, 13, 4, '2013-01-27 17:44:02'),
(111, 'Bolton Mens Leather Slip Ons', 'Apparel_Men_Shoes_1359326726.jpg', 'Apparel', 'Men_Shoes', 70.99, 'With its Flexlite® outsole, this leather slip-on in black combines the performance of an athletic shoe with the look of a dress shoe. Light and flexible, it features a run-off toe, padded collar and removable footbed.', 'full-grain leather\r\nstretch gores for custom fit\r\nfabric linings buffer the foot for allover comfort', 'male men black', 0, 0, 0, '2013-01-27 17:45:26'),
(112, 'Sweet Classic Mens Leather High Tops', 'Apparel_Men_Shoes_1359326863.jpg', 'Apparel', 'Men_Shoes', 65.99, 'This leather high top boasts classic street styling while staying true to its athletic roots.', 'leather upper with micro perfs for enhanced breathability\r\nEVA midsole with traditional vulcanized construction\r\nrubber outsole with a traditional herringbone pattern', 'male men black', 0, 3, 2, '2013-01-27 17:47:43'),
(113, 'Comfort 2 Mens Slide Sandale', 'Apparel_Men_Shoes_1359326937.jpg', 'Apparel', 'Men_Shoes', 35.99, 'This slide sandal is sporty and comfortable—perfect for the pool or whenever you are on the go.', 'soft synthetic strap with mesh lining and adhesive closure\r\nmemory foam footbed for enhanced comfort\r\nNike Free inspired articulated outsole\r\nsynthetic/rubber blend sole', 'male men black', 0, 0, 0, '2013-01-27 17:48:57'),
(114, 'RealFlex Scream 2.0 Mens Running Shoes', 'Apparel_Men_Shoes_1359327004.jpg', 'Apparel', 'Men_Shoes', 70.99, 'Fast colors, quick response and lightweight unite to create athletic gear that is more than just a shoe.', 'synthetic mesh upper\r\nrubber sole\r\nmulti-direction flex nodes for natural motion\r\n3D Ultralite\r\nimported', 'male men black yellow', 0, 0, 0, '2013-01-27 17:50:04'),
(115, 'GT-2170 Mens Running Shoes', 'Apparel_Men_Shoes_1359327085.jpg', 'Apparel', 'Men_Shoes', 80.99, 'These stylish ASICS® GT-2170 men is running shoes will put you on the fast track to a healthy lifestyle.', 'nylon mesh upper\r\nGel Cushioning System\r\nSpace Trusstic System for added support\r\nrubber sole', 'male black white red', 0, 3, 1, '2013-01-27 17:51:25'),
(116, 'Verdict Mens Leather Work Boots', 'Apparel_Men_Shoes_1359327148.jpg', 'Apparel', 'Men_Shoes', 65.99, 'Skechers Verdict men is leather work boot offers sturdy quality and superior support.', 'leather upper\r\nlace-up\r\nwaterproof\r\nfabric lining\r\nrubber sole', 'male yellow', 0, 2, 0, '2013-01-27 17:52:28'),
(117, 'GEL-Blur33 2.0 Mens Running Shoes', 'Apparel_Men_Shoes_1359327243.jpg', 'Apparel', 'Men_Shoes', 50.99, 'ASICS® GEL-Blur33 2.0 men is running shoes are the easiest shoes to customize to your personal stride with a personal heel fit system to go along with GEL cushioning, a removable sockliner, and midsole cushioning.', 'nylon mesh upper\r\nrubber sole', 'male black orange white', 0, 0, 0, '2013-01-27 17:54:03'),
(118, 'Spencer Waterproof Mens Hiking Boots', 'Apparel_Men_Shoes_1359327464.jpg', 'Apparel', 'Men_Shoes', 100.99, 'Waterproof nubuck leather hiking boot with cement construction.', 'removable full-cushioned footbed\r\nmesh fabric lining\r\nD-ring shoelace fasteners\r\nrubber sole', 'male black', 0, 1, 2, '2013-01-27 17:57:44');

-- --------------------------------------------------------

--
-- Table structure for table `item_brought`
--

CREATE TABLE IF NOT EXISTS `item_brought` (
  `brought_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `color` varchar(20) NOT NULL,
  `size` varchar(10) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `brought_add_date` int(11) NOT NULL,
  PRIMARY KEY (`brought_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `item_cart`
--

CREATE TABLE IF NOT EXISTS `item_cart` (
  `cart_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) NOT NULL,
  `item_user_name` varchar(200) NOT NULL,
  `item_folder_name` varchar(210) NOT NULL,
  `description` text NOT NULL,
  `color` varchar(20) NOT NULL,
  `size` varchar(20) NOT NULL,
  `price` float NOT NULL,
  `quantity` int(11) NOT NULL,
  `total` float(10,2) NOT NULL,
  PRIMARY KEY (`cart_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `item_cart`
--

INSERT INTO `item_cart` (`cart_id`, `item_id`, `item_user_name`, `item_folder_name`, `description`, `color`, `size`, `price`, `quantity`, `total`) VALUES
(31, 84, 'Puma Fleece Track Jacket', 'Apparel_Men_Hoodies_1358359961.jpg', 'Wear the cat for style and performance. But know this cotton-rich fleece track jacket from Puma is incredibly comfortable, too.', 'black', 'Medium', 45.99, 2, 91.98),
(32, 98, 'Eco-Drive Mens Diamond Calibre', 'Apparel_Men_Jewelry_1358362079.jpg', 'Mens Eco-Drive™ Calibre 8700 watch perfects performance and style with 36 brilliant diamonds.', 'gray', 'Small', 550.99, 1, 550.99),
(33, 65, 'Princess Seam Skirt', 'Apparel_Women_Skirts_1356980768.jpg', 'Well-placed princess seams create a flattering line on this classic skirt featuring a double back vent.', 'black', 'Medium', 32.99, 1, 32.99);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_add_date` datetime NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `email`, `user_name`, `password`, `user_add_date`) VALUES
(1, 'ikhlas', 'ahmed', 'ikhlas_06@hotmail.com', 'ikhlas', 'ikhlas', '2012-12-01 02:17:28'),
(3, 'ikhlas', 'ikhlas', 'ikhlasa@hotmail.com', 'ahmed', 'ahmed', '2013-02-01 15:19:59'),
(4, 'test', 'test2', 'ikhlasah_06@gmail.com', 'ikhlasahmed', 'ikhlasahmed', '2013-04-03 01:34:14');

-- --------------------------------------------------------

--
-- Table structure for table `view`
--

CREATE TABLE IF NOT EXISTS `view` (
  `view_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  PRIMARY KEY (`view_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=142 ;

--
-- Dumping data for table `view`
--

INSERT INTO `view` (`view_id`, `item_id`, `ip_address`) VALUES
(56, 5, '127.0.0.1'),
(57, 52, '127.0.0.1'),
(58, 4, '127.0.0.1'),
(59, 50, '127.0.0.1'),
(60, 51, '127.0.0.1'),
(61, 49, '127.0.0.1'),
(62, 70, '127.0.0.1'),
(63, 1, '127.0.0.1'),
(64, 37, '127.0.0.1'),
(65, 73, '127.0.0.1'),
(66, 10, '127.0.0.1'),
(67, 19, '127.0.0.1'),
(68, 64, '127.0.0.1'),
(69, 15, '127.0.0.1'),
(70, 47, '127.0.0.1'),
(71, 69, '127.0.0.1'),
(72, 39, '127.0.0.1'),
(73, 57, '127.0.0.1'),
(74, 3, '127.0.0.1'),
(75, 13, '127.0.0.1'),
(76, 42, '127.0.0.1'),
(77, 48, '127.0.0.1'),
(78, 76, '127.0.0.1'),
(79, 12, '127.0.0.1'),
(80, 21, '127.0.0.1'),
(81, 72, '127.0.0.1'),
(82, 17, '127.0.0.1'),
(83, 58, '127.0.0.1'),
(84, 55, '127.0.0.1'),
(85, 78, '127.0.0.1'),
(86, 8, '127.0.0.1'),
(87, 75, '127.0.0.1'),
(88, 65, '127.0.0.1'),
(89, 77, '127.0.0.1'),
(90, 29, '127.0.0.1'),
(91, 44, '127.0.0.1'),
(92, 9, '127.0.0.1'),
(93, 53, '127.0.0.1'),
(94, 79, '127.0.0.1'),
(95, 67, '127.0.0.1'),
(96, 74, '127.0.0.1'),
(97, 66, '127.0.0.1'),
(98, 45, '127.0.0.1'),
(99, 31, '127.0.0.1'),
(100, 18, '127.0.0.1'),
(101, 22, '127.0.0.1'),
(102, 32, '127.0.0.1'),
(103, 46, '127.0.0.1'),
(104, 62, '127.0.0.1'),
(105, 54, '127.0.0.1'),
(106, 61, '127.0.0.1'),
(107, 7, '127.0.0.1'),
(108, 35, '127.0.0.1'),
(109, 68, '127.0.0.1'),
(110, 34, '127.0.0.1'),
(111, 6, '127.0.0.1'),
(112, 16, '127.0.0.1'),
(113, 14, '127.0.0.1'),
(114, 82, '127.0.0.1'),
(115, 80, '127.0.0.1'),
(116, 83, '127.0.0.1'),
(117, 87, '127.0.0.1'),
(118, 81, '127.0.0.1'),
(119, 99, '127.0.0.1'),
(120, 92, '127.0.0.1'),
(121, 36, '127.0.0.1'),
(122, 90, '127.0.0.1'),
(123, 98, '127.0.0.1'),
(124, 84, '127.0.0.1'),
(125, 95, '127.0.0.1'),
(126, 94, '127.0.0.1'),
(127, 104, '127.0.0.1'),
(128, 102, '127.0.0.1'),
(129, 118, '127.0.0.1'),
(130, 116, '127.0.0.1'),
(131, 109, '127.0.0.1'),
(132, 110, '127.0.0.1'),
(133, 103, '127.0.0.1'),
(134, 115, '127.0.0.1'),
(135, 30, '127.0.0.1'),
(136, 97, '127.0.0.1'),
(137, 114, '127.0.0.1'),
(138, 112, '127.0.0.1'),
(139, 96, '127.0.0.1'),
(140, 71, '127.0.0.1'),
(141, 93, '127.0.0.1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
