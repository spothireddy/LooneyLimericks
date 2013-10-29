-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2013 at 05:11 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `looney_limericks_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `ll_table`
--

CREATE TABLE IF NOT EXISTS `ll_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(30) NOT NULL,
  `author` varchar(30) NOT NULL,
  `poem` text NOT NULL,
  `featuredTime` int(11) DEFAULT NULL,
  `userRating` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `ll_table`
--

INSERT INTO `ll_table` (`id`, `title`, `author`, `poem`, `featuredTime`, `userRating`) VALUES
(1, 'Pajama Man in the Bahamas', 'Mickey Mouse', 'There was a man in the Bahamas\r\nWho likes to wear plaided pajamas.\r\nHe spilled milk on his glass\r\nAnd mowed the tall green grass.\r\nNow he is off to ride the llamas.', NULL, 4.5),
(2, 'One-Heeled Neil', 'Joey Jumper', 'There once was a man named Neil \r\nWho can only walk with one heel.\r\nHe started to make jokes, \r\nWithout having any chokes, \r\nHe thankfully shouted, "Try the veal!"', NULL, 5),
(3, 'Good Golly, Miss Holly', 'Edward Lear', 'There once was a witch named Holly\r\nWho likes to fly around Bali.\r\nWhoosh! She lost her black hat.\r\nThen, her broom snapped. Splat!\r\nNow Holly is riding the trolley.', NULL, 2.5),
(4, 'A Boy from Salt Lake', 'Rudyard Kipling', 'There once was a boy from Salt Lake\r\nWho loved to eat chocolate cake.\r\nWhen he came to the store,\r\nRealizing there is no more,\r\nHe is about to have a headache.', NULL, 4),
(5, 'Polka-Dotted French Man', 'Edward Lear', 'There was an old man in France\r\nWearing polka-dotted pants \r\nOn a summer day.\r\nOnce it is a rainy day,\r\nHe will be doing a rain dance.\r\n', NULL, 1),
(6, 'Lows on Rose', 'Bridget Jones', 'A young lady named Rose\r\nWho has a large zit on her nose.\r\nWhen she had it removed, \r\nHer appearance improved,\r\nBut her makeup spilled on her toes. ', NULL, 5),
(7, 'Complex Rex', 'Rudyard Kipling', 'There once was a young man named Rex\r\nWho was wearing dark round specs.\r\nHe asked to the blue-eyed girl\r\nWith a long blonde curl,\r\n"Do you want to have sex?"', NULL, 3),
(8, 'Peruvian Apple', 'Johnny Depp', 'There once was an apple in Peru.\r\nA big juicy red apple it grew. \r\nIts skin began to rot \r\nAnd fall down in a soft spot.\r\n"I am rotten like an old shoe."', NULL, 3.5),
(9, 'Dinah the Black Chicken', 'Tiny Tom', 'A dark black chicken in China\r\nAnswers by the name of Dinah.\r\nLooking at the blue skies,\r\nA pretty mynah bird flies.\r\n"Cluck. I should be a freaking mynah."', NULL, 4),
(10, 'All About Jean', 'Joey Jumper', 'There once was a lady named Jean\r\nWho wears a sweater that is green.\r\nWhen she drank her tea,\r\nShe jumps up like a flea.\r\n"Oh, snap! I drank too much caffeine!"', NULL, 3.5),
(11, 'Fairy Mary', 'Edward Lear', 'There once was a creature named Mary\r\nWho is actually a fairy.\r\nShe wants some toast with jam,\r\nBut all she got was spam.\r\nHer face became red like a cherry.', NULL, NULL),
(12, 'An Old Woman with Tattoos', 'John Clarke', 'An old woman with tattoos\r\nCame all the way from Santa Cruz.\r\nShe drove her red shiny car,\r\nWalked into a bar and said,\r\n"Who wants to have a shot of booze?"', NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
