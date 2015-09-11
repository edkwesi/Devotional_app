-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2015 at 02:44 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `devotional`
--

-- --------------------------------------------------------

--
-- Table structure for table `devotion`
--

CREATE TABLE IF NOT EXISTS `devotion` (
  `did` int(4) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `verse` varchar(50) NOT NULL,
  `bible_reading` varchar(200) NOT NULL,
  `devotional_reading` varchar(1000) NOT NULL,
  `prayer` varchar(200) NOT NULL,
  PRIMARY KEY (`did`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `devotion`
--

INSERT INTO `devotion` (`did`, `title`, `date`, `verse`, `bible_reading`, `devotional_reading`, `prayer`) VALUES
(1, 'Heaven is our future reality', '2015-09-09', 'Genesis 16: 1 -6', 'Lord has kept me from having children. Go to sleep with my maidservant, perhaps I can build my family through her. Genesis 16:2', 'I do not propose to examine this argument in detail, or to show the\r\nexact points where, in my opinion, it is fallacious. I have quoted it\r\nonly as an example of method. Most people will admit, I think, that it\r\nis calculated to produce bewilderment rather than conviction, because\r\nthere is more likelihood of error in a very subtle, abstract, and\r\ndifficult argument than in so patent a fact as the interrelatedness of\r\nthe things in the world. To the early Greeks, to whom geometry was\r\npractically the only known science, it was possible to follow reasoning\r\nwith assent even when it led to the strangest conclusions. But to us,\r\nwith our methods of experiment and observation, our knowledge of the\r\nlong history of _a priori_ errors refuted by empirical science, it has\r\nbecome natural to suspect a fallacy in any deduction of which the\r\nconclusion appears to contradict patent facts. It is easy to carry such\r\nsuspicion too far, and it is very desirable, if possible, actually to\r\ndiscover the ', 'But may I never boast except in the cross of our Lord Jesus Christ, though which the world has been crucified to me, and I to the world.'),
(4, 'Day is at Hand', '2015-09-08', 'Revelations 2: 28 - 30', 'Just as I have received the right to rule from Father and I will give in the morning star.', 'The following lectures[1] are an attempt to show, by means of examples,\r\nthe nature, capacity, and limitations of the logical-analytic method in\r\nphilosophy. This method, of which the first complete example is to be\r\nfound in the writings of Frege, has gradually, in the course of actual\r\nresearch, increasingly forced itself upon me as something perfectly\r\ndefinite, capable of embodiment in maxims, and adequate, in all branches\r\nof philosophy, to yield whatever objective scientific knowledge it is\r\npossible to obtain. Most of the methods hitherto practised have\r\nprofessed to lead to more ambitious results than any that logical\r\nanalysis can claim to reach, but unfortunately these results have always\r\nbeen such as many competent philosophers considered inadmissible.\r\nRegarded merely as hypotheses and as aids to imagination, the great\r\nsystems of the past serve a very useful purpose, and are abundantly\r\nworthy of study. But something different is required if philosophy is to\r\nbecome a sci', 'In Christ God was reconciling the world to himself, not counting peoples trespasses against them.'),
(5, 'He Refines them', '2015-09-07', 'Galatians 6 :14 - 17', 'But may I never toast except in the cross of our Lord Jesus Christ, through which the world has been crucified to me, and I to the world.', 'The following lectures[1] are an attempt to show, by means of examples,\r\nthe nature, capacity, and limitations of the logical-analytic method in\r\nphilosophy. This method, of which the first complete example is to be\r\nfound in the writings of Frege, has gradually, in the course of actual\r\nresearch, increasingly forced itself upon me as something perfectly\r\ndefinite, capable of embodiment in maxims, and adequate, in all branches\r\nof philosophy, to yield whatever objective scientific knowledge it is\r\npossible to obtain. Most of the methods hitherto practised have\r\nprofessed to lead to more ambitious results than any that logical\r\nanalysis can claim to reach, but unfortunately these results have always\r\nbeen such as many competent philosophers considered inadmissible.\r\nRegarded merely as hypotheses and as aids to imagination, the great\r\nsystems of the past serve a very useful purpose, and are abundantly\r\nworthy of study. But something different is required if philosophy is to\r\nbecome a sci', 'The one who tends a fig tree will eat its fruit, and whoever takes care of his master will honored.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
