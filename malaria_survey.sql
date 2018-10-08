-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2017 at 05:08 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `malaria_survey`
--

-- --------------------------------------------------------

--
-- Table structure for table `biomarker`
--

CREATE TABLE IF NOT EXISTS `biomarker` (
  `biomarker_id` int(11) NOT NULL AUTO_INCREMENT,
  `r_id` int(11) NOT NULL,
  `ageofchild` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `auxtemp` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `studynumber` int(11) NOT NULL,
  `parasitedensity` int(11) NOT NULL,
  `parasitespecies` varchar(2) NOT NULL,
  `parasitestage` varchar(2) NOT NULL,
  `illnesssymptoms` varchar(300) NOT NULL,
  `anaemiaconsent` varchar(2) NOT NULL,
  `malariaconsent` varchar(2) NOT NULL,
  `heamoglobin` int(11) NOT NULL,
  `malariaRDTcode` varchar(2) NOT NULL,
  `malariaRDTresult` varchar(2) NOT NULL,
  `malariamicroscopy` varchar(2) NOT NULL,
  `parasitecount` varchar(2) NOT NULL,
  `takenmedicationl2weeks` varchar(2) NOT NULL,
  `acceptedmedication` varchar(2) NOT NULL,
  `precription` varchar(2) NOT NULL,
  `u_email` int(11) NOT NULL,
  `h_id` int(11) NOT NULL,
  `dateofstudy` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`biomarker_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

-- --------------------------------------------------------

--
-- Table structure for table `births`
--

CREATE TABLE IF NOT EXISTS `births` (
  `birth_id` int(11) NOT NULL AUTO_INCREMENT,
  `nameofchild` varchar(200) NOT NULL,
  `genderofchild` varchar(2) NOT NULL,
  `age` int(11) NOT NULL,
  `birth_status` varchar(2) NOT NULL,
  `life_status` varchar(2) NOT NULL,
  `dateofbirth` date NOT NULL,
  `childlivingwithyou` varchar(2) NOT NULL,
  `h_id` int(11) NOT NULL,
  PRIMARY KEY (`birth_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

-- --------------------------------------------------------

--
-- Table structure for table `fever_children`
--

CREATE TABLE IF NOT EXISTS `fever_children` (
  `fc_id` int(11) NOT NULL AUTO_INCREMENT,
  `r_id` int(11) NOT NULL,
  `ill` varchar(2) NOT NULL,
  `malariasuspicion` varchar(2) NOT NULL,
  `bloodtest` varchar(2) NOT NULL,
  `tested4malaria` varchar(2) NOT NULL,
  `malariatest` varchar(2) NOT NULL,
  `mtestreport` varchar(2) NOT NULL,
  `advice4treatment` varchar(2) NOT NULL,
  `soughttreatment` varchar(300) NOT NULL,
  `soughtother` varchar(50) NOT NULL,
  `soughtothermedsources` varchar(200) NOT NULL,
  `firstseektreatment` varchar(1) NOT NULL,
  `otherseektreatment` varchar(200) NOT NULL,
  `delayb4seekingadvice` int(11) NOT NULL,
  `takemedicine` varchar(20) NOT NULL,
  `mediation` varchar(200) NOT NULL,
  `tb4fansidar` int(11) NOT NULL,
  `tb4chloroquine` int(11) NOT NULL,
  `tb4amodiaquinie` int(11) NOT NULL,
  `tb4artesunate` int(11) NOT NULL,
  `tb4quinie` int(11) NOT NULL,
  `tb4ACT` int(11) NOT NULL,
  `othermedications` varchar(300) NOT NULL,
  `tb4otherantimalaria` int(11) NOT NULL,
  `h_id` int(11) NOT NULL,
  PRIMARY KEY (`fc_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

-- --------------------------------------------------------

--
-- Table structure for table `household`
--

CREATE TABLE IF NOT EXISTS `household` (
  `h_id` int(11) NOT NULL AUTO_INCREMENT,
  `h_street` varchar(150) NOT NULL,
  `a_id` int(11) NOT NULL,
  `longtitude` varchar(15) NOT NULL,
  `latitude` varchar(15) NOT NULL,
  `h_headname` varchar(100) NOT NULL,
  `h_gno` varchar(10) NOT NULL,
  `h_size` int(11) DEFAULT NULL,
  `women_pop` int(11) DEFAULT NULL,
  `children_lt5` int(11) DEFAULT NULL,
  `children5_12` int(11) DEFAULT NULL,
  `interview_lang` varchar(1) NOT NULL,
  `il_add_info` varchar(50) DEFAULT NULL,
  `native_lang` varchar(1) NOT NULL,
  `nl_add_info` varchar(50) DEFAULT NULL,
  `questionnaire_lang` varchar(50) NOT NULL,
  `translator` varchar(1) NOT NULL,
  `consented` tinyint(1) NOT NULL,
  `u_email` varchar(100) NOT NULL,
  PRIMARY KEY (`h_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

-- --------------------------------------------------------

--
-- Table structure for table `household_characteristics`
--

CREATE TABLE IF NOT EXISTS `household_characteristics` (
  `hc_id` int(11) NOT NULL AUTO_INCREMENT,
  `sourcedrinkwater` varchar(2) NOT NULL,
  `toiletfacility` varchar(2) NOT NULL,
  `sharedtoilet` varchar(2) NOT NULL,
  `toiletuse` varchar(2) NOT NULL,
  `watersource` varchar(2) NOT NULL,
  `timetowatersource` int(11) NOT NULL,
  `electricity` varchar(3) NOT NULL,
  `radio` varchar(3) NOT NULL,
  `television` varchar(3) NOT NULL,
  `mobilephone` varchar(3) NOT NULL,
  `nonmobilephone` varchar(3) NOT NULL,
  `refrigerator` varchar(3) NOT NULL,
  `cabletv` varchar(3) NOT NULL,
  `generator` varchar(3) NOT NULL,
  `aircondition` varchar(3) NOT NULL,
  `computer` varchar(3) NOT NULL,
  `electriciron` varchar(3) NOT NULL,
  `fan` varchar(3) NOT NULL,
  `fuel` varchar(2) NOT NULL,
  `otherfuel` varchar(200) NOT NULL,
  `floormaterial` varchar(2) NOT NULL,
  `otherfloormaterial` varchar(200) NOT NULL,
  `roofmaterial` varchar(2) NOT NULL,
  `otherroofmaterial` varchar(200) NOT NULL,
  `exwallmaterial` varchar(2) NOT NULL,
  `otherexwallmaterial` varchar(200) NOT NULL,
  `roomnumber` int(11) NOT NULL,
  `sleeproomnum` int(11) NOT NULL,
  `sleepfacility` int(11) NOT NULL,
  `watch` varchar(3) NOT NULL,
  `phone` varchar(3) NOT NULL,
  `bicycle` varchar(3) NOT NULL,
  `motorcycle` varchar(3) NOT NULL,
  `animalcart` varchar(3) NOT NULL,
  `car` varchar(3) NOT NULL,
  `boat` varchar(3) NOT NULL,
  `agricland` varchar(3) NOT NULL,
  `numberplotsland` int(11) NOT NULL,
  `numberhectareland` int(11) NOT NULL,
  `ownanimals` varchar(3) NOT NULL,
  `milkcattle` varchar(4) NOT NULL,
  `nummilkcattle` int(11) NOT NULL,
  `othercattle` varchar(4) NOT NULL,
  `numothercattle` int(11) NOT NULL,
  `beastburden` varchar(4) NOT NULL,
  `numbeastburden` int(11) NOT NULL,
  `goats` varchar(4) NOT NULL,
  `numgoats` int(11) NOT NULL,
  `sheep` varchar(4) NOT NULL,
  `numsheep` int(11) NOT NULL,
  `chicken` varchar(4) NOT NULL,
  `numchicken` int(11) NOT NULL,
  `bankaccount` varchar(3) NOT NULL,
  `fumigation` varchar(3) NOT NULL,
  `fumigator` varchar(1) NOT NULL,
  `otherfumigator` varchar(200) NOT NULL,
  `havemosquitonets` varchar(3) NOT NULL,
  `whynonet` varchar(1) NOT NULL,
  `otherwhynonet` varchar(200) NOT NULL,
  `everownnet` varchar(3) NOT NULL,
  `whynomorenet` varchar(1) NOT NULL,
  `otherwhynomorenet` varchar(200) NOT NULL,
  `sleepinnet` varchar(3) NOT NULL,
  `numsleptinnet` int(11) NOT NULL,
  `childrenunder5sleptinnet` int(11) NOT NULL,
  `children5_12sleptinnet` int(11) NOT NULL,
  `pregwomensleptinnet` int(11) NOT NULL,
  `encouragesleepnet` varchar(1) NOT NULL,
  `otherencouragesleepnet` varchar(200) NOT NULL,
  `numnetlastnight` int(11) NOT NULL,
  `totalnumnet` int(11) NOT NULL,
  `h_id` int(11) NOT NULL,
  PRIMARY KEY (`hc_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

-- --------------------------------------------------------

--
-- Table structure for table `irspray`
--

CREATE TABLE IF NOT EXISTS `irspray` (
  `irs_id` int(11) NOT NULL AUTO_INCREMENT,
  `irs_spraying` varchar(2) NOT NULL,
  `sprayedsince` varchar(2) NOT NULL,
  `sprayedby` varchar(2) NOT NULL,
  `irs_pesticide` varchar(2) NOT NULL,
  `reasonsprayp` varchar(2) NOT NULL,
  `otherreasonsprayp` varchar(2) NOT NULL,
  `othersprayer` varchar(250) NOT NULL,
  `govtspray` varchar(2) NOT NULL,
  `nogovtspray` varchar(2) NOT NULL,
  `reasonnotspray` varchar(500) NOT NULL,
  `otherreasonnotspray` varchar(500) NOT NULL,
  `otherreasongovtspray` varchar(500) NOT NULL,
  `heardIRS` varchar(2) NOT NULL,
  `h_id` int(11) NOT NULL,
  PRIMARY KEY (`irs_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `lga`
--

CREATE TABLE IF NOT EXISTS `lga` (
  `lgacode` varchar(3) NOT NULL,
  `lga_name` varchar(50) NOT NULL,
  `state_code` varchar(2) NOT NULL,
  PRIMARY KEY (`lgacode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lga`
--

INSERT INTO `lga` (`lgacode`, `lga_name`, `state_code`) VALUES
('AKD', 'Ibeju Lekki', '01'),
('BDG', 'Badagry', '01'),
('FKJ', 'Ifako Ijaye', '01'),
('FST', 'Amuwo Odofin Festac', '01'),
('JJJ', 'Ojo', '01'),
('KJA', 'Ikeja', '01'),
('KRD', 'Ikorodu', '01'),
('KSF', 'Kosofe', '01'),
('KTU', 'Alimosho', '01'),
('LND', 'Lagos Mainland', '01');

-- --------------------------------------------------------

--
-- Table structure for table `locality`
--

CREATE TABLE IF NOT EXISTS `locality` (
  `a_id` int(11) NOT NULL AUTO_INCREMENT,
  `locality` varchar(50) NOT NULL,
  `dev_level` varchar(1) NOT NULL,
  `lga_code` varchar(3) NOT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `locality`
--

INSERT INTO `locality` (`a_id`, `locality`, `dev_level`, `lga_code`) VALUES
(1, 'Ayobo', '1', 'KTU'),
(2, 'Ipaja', '1', 'KTU'),
(3, 'Agbado', '1', 'KTU'),
(4, 'Badagry town', '2', 'BDG'),
(5, 'Lakowe', '2', 'AKD'),
(6, 'Iju', '1', 'FKJ'),
(7, 'Akute', '1', 'FKJ'),
(8, 'Ojodu Abiodun', '1', 'KJA'),
(9, 'Isheri - border with Ifo Ogun', '1', 'KJA'),
(10, 'Agric', '2', 'KRD'),
(11, 'Bayeku', '2', 'KRD'),
(12, 'Gberigbe', '2', 'KRD'),
(13, 'Irawo (Owode Onirin)', '1', 'KSF'),
(14, 'Olowora', '1', 'KSF'),
(15, 'Magodo', '1', 'KSF'),
(16, 'Isheri-border with Owode Obafemi LGA Ogun', '1', 'KSF'),
(17, 'Oto Awori', '1', 'JJJ'),
(18, 'Era', '1', 'JJJ'),
(19, 'Makoko', '1', 'LND'),
(20, 'Yaba', '1', 'LND'),
(21, 'Satellite town', '1', 'FST'),
(22, 'Monkey village', '1', 'FST'),
(23, '4th/6th Avenue Festac Town', '1', 'FST');

-- --------------------------------------------------------

--
-- Table structure for table `malaria_knowledge`
--

CREATE TABLE IF NOT EXISTS `malaria_knowledge` (
  `mk_id` int(11) NOT NULL AUTO_INCREMENT,
  `hadmalaria` varchar(2) NOT NULL,
  `malariasymptoms` varchar(300) NOT NULL,
  `othersymptoms` varchar(300) NOT NULL,
  `malariarisk` varchar(300) NOT NULL,
  `malariacauses` varchar(300) NOT NULL,
  `waysavoidingmalaria` varchar(2) NOT NULL,
  `malariaavoidance` varchar(300) NOT NULL,
  `malariaprevention` varchar(300) NOT NULL,
  `othermalprevention` varchar(300) NOT NULL,
  `othermalavoidance` varchar(300) NOT NULL,
  `malariapregprevention` varchar(300) NOT NULL,
  `othermalpregprevention` varchar(300) NOT NULL,
  `malariatreatable` varchar(2) NOT NULL,
  `malariamedications` varchar(300) NOT NULL,
  `childmalmedications` varchar(300) NOT NULL,
  `otherchildmalmedications` varchar(300) NOT NULL,
  `seenmalariamsg` varchar(2) NOT NULL,
  `othermalariamsg` varchar(500) NOT NULL,
  `malariamsg` varchar(300) NOT NULL,
  `sourceseemalariamsg` varchar(300) NOT NULL,
  `othersourceseemalmsg` varchar(300) NOT NULL,
  `malariachances` varchar(2) NOT NULL,
  `medicineworkspregwomen` varchar(2) NOT NULL,
  `malariatest` varchar(2) NOT NULL,
  `ACTsworkswell` varchar(2) NOT NULL,
  `sleptinnet` varchar(2) NOT NULL,
  `encouragesleepnet` varchar(1) NOT NULL,
  `otherencouragesleepnet` varchar(300) NOT NULL,
  `netcolour` varchar(2) NOT NULL,
  `othernetcolour` varchar(300) NOT NULL,
  `choiceofnetshape` varchar(2) NOT NULL,
  `otherchoiceofnetshape` varchar(300) NOT NULL,
  `netsize` varchar(2) NOT NULL,
  `othernetsize` varchar(300) NOT NULL,
  `choicenetsize` varchar(2) NOT NULL,
  `otherchoicenetsize` varchar(300) NOT NULL,
  `h_id` int(11) NOT NULL,
  PRIMARY KEY (`mk_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Table structure for table `net`
--

CREATE TABLE IF NOT EXISTS `net` (
  `net_id` int(11) NOT NULL AUTO_INCREMENT,
  `NetHoles` varchar(2) NOT NULL,
  `Hanging` varchar(2) NOT NULL,
  `NetColour` varchar(2) NOT NULL,
  `OtherNetColour` varchar(50) NOT NULL,
  `NetShape` varchar(2) NOT NULL,
  `OtherNetShape` varchar(50) NOT NULL,
  `NetSize` varchar(2) NOT NULL,
  `OtherNetSize` varchar(50) NOT NULL,
  `NetAge` int(11) NOT NULL,
  `OtherNetAge` int(11) NOT NULL,
  `HowGetetNet` varchar(2) NOT NULL,
  `ObtainNet` varchar(2) NOT NULL,
  `NetOrigin` varchar(2) NOT NULL,
  `NetBrand` varchar(2) NOT NULL,
  `NetPrice` int(11) NOT NULL,
  `SleptInNetLastNight` varchar(2) NOT NULL,
  `ReasonNoSleepInNet` varchar(2) NOT NULL,
  `OtherReasonNoSleepInNet` varchar(100) NOT NULL,
  `rSleptLN` varchar(150) NOT NULL,
  `h_id` int(11) NOT NULL,
  PRIMARY KEY (`net_id`),
  UNIQUE KEY `rSleptLN` (`rSleptLN`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `pregnancy`
--

CREATE TABLE IF NOT EXISTS `pregnancy` (
  `preg_id` int(11) NOT NULL AUTO_INCREMENT,
  `namerecentbirth` varchar(100) NOT NULL,
  `antenatalcare` varchar(2) NOT NULL,
  `healthpersonnel` varchar(200) NOT NULL,
  `othermedicalpract` varchar(200) NOT NULL,
  `fansidarduringpreg` varchar(2) NOT NULL,
  `fansidarfrequency` int(11) NOT NULL,
  `fansidarsource` varchar(2) NOT NULL,
  `antenatalnet` varchar(2) NOT NULL,
  `h_id` int(11) NOT NULL,
  PRIMARY KEY (`preg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

-- --------------------------------------------------------

--
-- Table structure for table `reproduction`
--

CREATE TABLE IF NOT EXISTS `reproduction` (
  `rep_id` int(11) NOT NULL AUTO_INCREMENT,
  `givenbirth` varchar(2) NOT NULL,
  `livingwithchildren` varchar(2) NOT NULL,
  `numsons` int(11) NOT NULL,
  `numdaughters` int(11) NOT NULL,
  `childrenANLWY` varchar(2) NOT NULL,
  `numsonsANLWY` int(11) NOT NULL,
  `numdaughtersANLWY` int(11) NOT NULL,
  `childdie` varchar(2) NOT NULL,
  `numdeadboys` int(11) NOT NULL,
  `numdeadgirls` int(11) NOT NULL,
  `numrecentbirths` int(11) NOT NULL,
  `pregnant` varchar(2) NOT NULL,
  `nummonthspreg` int(11) NOT NULL,
  `h_id` int(11) NOT NULL,
  PRIMARY KEY (`rep_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `resident`
--

CREATE TABLE IF NOT EXISTS `resident` (
  `r_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `rel` varchar(2) NOT NULL,
  `sex` varchar(1) NOT NULL,
  `usual_res` varchar(3) NOT NULL,
  `slept_in` varchar(3) NOT NULL,
  `age` int(11) NOT NULL,
  `attended_school` varchar(3) NOT NULL,
  `pregnant` varchar(3) NOT NULL,
  `edu_level` varchar(2) NOT NULL,
  `grade` varchar(2) NOT NULL,
  `has_fever` varchar(3) NOT NULL,
  `treated` varchar(3) NOT NULL,
  `treatment_source` varchar(2) NOT NULL,
  `treatment_cost` varchar(5) NOT NULL,
  `h_id` int(11) NOT NULL,
  `net_id` int(11) NOT NULL,
  PRIMARY KEY (`r_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `resident`
--

INSERT INTO `resident` (`r_id`, `name`, `rel`, `sex`, `usual_res`, `slept_in`, `age`, `attended_school`, `pregnant`, `edu_level`, `grade`, `has_fever`, `treated`, `treatment_source`, `treatment_cost`, `h_id`, `net_id`) VALUES
(1, 'sola ade', '01', 'M', 'Yes', 'Yes', 24, 'Yes', 'No', '03', '6', 'Yes', 'Yes', '01', '00000', 4, 0),
(2, 'fwfwe', '01', 'M', 'Yes', 'Yes', 21, 'Yes', 'Yes', '04', '1', 'Yes', 'Yes', '01', '00000', 3, 0),
(3, 'efew', '01', 'F', 'No', 'No', 45, 'No', 'No', '', '', 'No', '', '', '', 3, 0),
(4, 'biola', '03', 'M', 'Yes', 'Yes', 4, 'No', 'No', '', '', 'No', '', '', '', 3, 0),
(5, 'Bose', '05', 'F', 'Yes', 'Yes', 1, 'No', 'No', '', '', 'No', '', '', '', 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE IF NOT EXISTS `state` (
  `state_code` varchar(2) NOT NULL,
  `state_name` varchar(50) NOT NULL,
  PRIMARY KEY (`state_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `u_surname` varchar(50) NOT NULL,
  `u_firstname` varchar(50) NOT NULL,
  `u_email` varchar(100) NOT NULL,
  `u_password` varchar(20) NOT NULL,
  `u_role` int(11) NOT NULL,
  PRIMARY KEY (`u_email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_surname`, `u_firstname`, `u_email`, `u_password`, `u_role`) VALUES
('User1', 'User', 'user1@gmail.com', 'user12017;', 0),
('User2', 'User', 'user2@gmail.com', 'User22017;', 0);

-- --------------------------------------------------------

--
-- Table structure for table `visits`
--

CREATE TABLE IF NOT EXISTS `visits` (
  `v_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_email` varchar(100) NOT NULL,
  `h_id` int(11) NOT NULL,
  `v_no` int(11) NOT NULL,
  `v_datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `v_status` int(11) NOT NULL,
  `v_addinfo` varchar(100) NOT NULL,
  PRIMARY KEY (`v_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

-- --------------------------------------------------------

--
-- Table structure for table `woman_respondent`
--

CREATE TABLE IF NOT EXISTS `woman_respondent` (
  `wr_id` int(11) NOT NULL AUTO_INCREMENT,
  `knowDOB` varchar(4) NOT NULL,
  `dateofbirth` date NOT NULL,
  `age` int(11) NOT NULL,
  `attendedschool` varchar(2) NOT NULL,
  `schoollevel` varchar(2) NOT NULL,
  `highestlevelofschool` int(11) NOT NULL,
  `readingtest` varchar(1) NOT NULL,
  `otherlanguage` varchar(100) NOT NULL,
  `religion` varchar(1) NOT NULL,
  `otherreligion` varchar(100) NOT NULL,
  `ethnic` varchar(100) NOT NULL,
  `h_id` int(11) NOT NULL,
  PRIMARY KEY (`wr_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
