-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 02, 2018 at 06:30 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `disease`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `sl_no` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`sl_no`, `email`, `password`) VALUES
(1, 'prasenjitpaldmr98@gmail.com', '11041998');

-- --------------------------------------------------------

--
-- Table structure for table `disease_identifier`
--

DROP TABLE IF EXISTS `disease_identifier`;
CREATE TABLE IF NOT EXISTS `disease_identifier` (
  `disease` varchar(50) NOT NULL,
  `Symptom_Id` int(11) NOT NULL,
  `Probable_Diseases` varchar(250) NOT NULL,
  PRIMARY KEY (`disease`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `disease_identifier`
--

INSERT INTO `disease_identifier` (`disease`, `Symptom_Id`, `Probable_Diseases`) VALUES
('ANTIBIOTIC-ASSISTED DIARRHEA', 640, 'IRRETABLE BOWEL MOVEMENT;ANTIBIOTIC-ASSISTED DIARRHEA;DIVERTICULITIS '),
('ASTHMA', 96, 'HEARTBURN;ASTHMA;INFLUENZA;COMMONCOLD'),
('BACTERIAL PNEUMONIA', 544, 'INFLUENZA;ASTHMA;ACUTE SINUSITIS;COMMON COLD;WHOOPING COUGH;BRONCHITIS;BACTERIAL PNEUMONIA'),
('COMMON COLD', 2057, 'VIRAL PNEUMONIA;INFLUENZA;COMMON COLD;STREP THROAT'),
('DRUG ALLERGY', 1040, 'DRUG ALLERGY;HYPOTHYROIDISM'),
('GIARDIASIS', 768, 'GIARDIASIS;VIRAL GASTROENTERITIS;ANTIBIOTIC-ASSISTED DIARRHEA'),
('GOUT', 6080, 'LOW BLOOD SUGAR;PANIC ATTACK;GOUT;BACTERIAL PNEUMONIA'),
('HEADACHE', 2, 'ACUTE SINUSITIS;INFLUENZA;HEADACHE'),
('INFLUENZA', 35, 'INFLUENZA;COMMON COLD;ACUTE SINUSITIS;ASTHMA;VIRAL PNEUMONIA'),
('IRRETABLE-BOWEL SYNDROME', 512, 'GIARDIASIS;VIRAL GASTROENTERITIS;IRRETABLE-BOWEL SYNDROME'),
('LOW BLOOD SUGAR', 2056, 'LOW BLOOD SUGAR(HYPOGLYCEMIA);PANIC ATTACK'),
('MIGRAINE HEADACHE', 3, 'INFLUENZA;MIGRAINE HEADACHE;VIRAL PNEUMONIA;STREP THROAT;COMMON COLD'),
('SEPSIS', 9, 'BACTERIAL PNEUMONIA;INFLUENZA;SEPSIS'),
('STREP THROAT', 17, 'STREP THROAT;VIRAL PNEUMONIA;INFLUENZA;COMMON COLD'),
('TENSION HEADACHE', 2066, 'TENSION HEADACHE'),
('ULCERATIVE COLITIS', 256, 'ULCERATIVE COLITIS;DIVERTICULOSIS'),
('VIRAL GASTROENTERITIS', 20, 'VIRAL GASTROENTERITIS;INTESTINAL OBSTRUCTION;BACTERIAL PNEUMONIA'),
('VIRAL PNEUMONIA', 2059, 'INFLUENZA;VIRAL PNEUMONIA;STREP THROAT;COMMON COLD'),
('WHOOPING COUGH', 32, 'ASTHMA;ACUTE SINUSITIS;INFLUENZA;COMMON COLD;WHOOPING COUGH');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_type`
--

DROP TABLE IF EXISTS `doctor_type`;
CREATE TABLE IF NOT EXISTS `doctor_type` (
  `dno` int(11) NOT NULL,
  `disease` varchar(50) NOT NULL,
  `doctor_type` varchar(50) NOT NULL,
  PRIMARY KEY (`dno`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doctor_type`
--

INSERT INTO `doctor_type` (`dno`, `disease`, `doctor_type`) VALUES
(1, 'VIRAL PNEUMONIA', 'GENERAL MEDICINE'),
(2, 'VIRAL GASTROENTERITIS', 'GASTROENTEROLOGIST'),
(3, 'GIARDIASIS', 'GASTROENTEROLOGIST'),
(4, 'ASTHMA', 'ALLERGIST'),
(5, 'TENSION HEADACHE', 'NEUROLOGIST'),
(6, 'COMMON COLD', 'GENERAL MEDICINE'),
(7, 'SEPSIS', 'PHYSICIAN'),
(8, 'DRUG ALLERGY', 'ALLERGIST'),
(9, 'WHOOPING COUGH', 'INTERNIST'),
(10, 'IRRETABLE BOWEL SYNDROME', 'GASTROENTEROLOGIST'),
(11, 'HEADACHE', 'NEUROLOGIST'),
(12, 'ULCERATIVE COLITIS', 'GASTROENTEROLOGIST'),
(13, 'BACTERIAL PNEUMONIA', 'GENERAL PHYSICIAN'),
(14, 'MIGRAINE HEADACHE', 'NEUROLOGIST'),
(15, 'INFLUENZA', 'PEDIATRICIAN'),
(16, 'GOUT', 'EUROLOGIST'),
(17, 'STREP THROAT', 'ENT'),
(18, 'ANTIBIOTIC ASSISTED DIARRHEA', 'GASTROENTEROLOGIST'),
(19, 'LOW BLOOD SUGAR', 'GENERAL MEDICINE');

-- --------------------------------------------------------

--
-- Table structure for table `precautions`
--

DROP TABLE IF EXISTS `precautions`;
CREATE TABLE IF NOT EXISTS `precautions` (
  `sl_no` int(11) NOT NULL,
  `disease` varchar(100) NOT NULL,
  `natural_precautions` varchar(1000) NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `precautions`
--

INSERT INTO `precautions` (`sl_no`, `disease`, `natural_precautions`) VALUES
(1, 'HEADACHE', '1.try acupuncture;2.try peppermint oil on skin'),
(2, 'JOINT PAIN', '1.avoid food with high uric acid; 2.eat turmeric extracts'),
(3, 'ASTHMA', '1.try fish oil;2.eat food containing vitamin C'),
(4, 'IRRETABLE BOWEL SYNDROME', '1.eat high fiber food such as vegetables,beans and fruits; 2.try peppermint tea'),
(5, 'COUGH', '1.try hot water; 2.try doing gargle; 3.try licorice tea'),
(6, 'FATIGUE', 'TAKR REST'),
(7, 'INFLUENZA', '1.try chicken soup;2.ginger,honey,garlic;3.food containing vitamin C;4.probiotics;5.echinacea'),
(8, 'COMMON COLD', '1.drink hot liquids;2.take steamy shower;3.intake food containing vitamin C;4.blueberry(natural aspirin);5.banana,mustard'),
(9, 'ACUTE SINUSITIS', '1.try to avoid caffeine,sugar and alcohol;2.drink herbal tea;3.take water and clear veggie broth;4.take olive leaf,vitamin C,honey,termaric and ginger herbal tea'),
(10, 'WHOOPING COUGH', '1.vitamin C;2.onion juice,garlic,turmeric,ginger,elderberry syrup;3.green tea;4.salt water;5.honey,lemon;6.licorice,saffron'),
(11, 'GIARDIASIS', '1.try detoxifying herbs; 2.intake essential antiparasitic oils(obtained from black walnut,wormwood,oregano oil,clove oil); 3.take fresh herbs or spiceslike ginger and turmeric'),
(12, 'VIRAL GASTROENTERITITIS', '1.take homemade electrolyte,tender coconut water; 2.baking sod; 3.ehamomine,mint,lemon,banana,broths and soups; 4.rice water; 5.turmeric,garlic,natural yogurt,blueberry; 6.ginger,rooibos tea'),
(13, 'BACTERIAL PNEUMONIA', '1.peppermint,eucalyptus and fenugreek tea; 2.saltwater gargle,caffein,warm-damp air; 3.garlic or turmeric tea'),
(14, 'MIGRAINE HEADACHE', '1.try acupressure; 2.apply peppermint oil; 3.drink ginger tea; 4.avoid food rich in magnesium(such as-almonds,cashew,oatmeal,eggs,milk,sunflower seeds etc); 5.try yoga'),
(15, 'ULCERATIVE COLITIS', '1.aelovera gel; 2.butyrate,tormentil extract,wheatgrass juice; 3.curcumin; 4.avoid food with high fat(diary products); 5.avoid caffein,raw fruits and vegetables; 6.consider omega-3 fatty acids in the diet'),
(16, 'DIVERTICULITIS', '1.avoid consumption of gluten and diary product,refined sugar,eggs,corn,soy,vegetable oils(cottonseed,peanut,soyabean),all grains,shell fish,legumes,night shade vegetables; 2.eat bone broth,coconut oil,apple cider vinegar,ginger,turmeric,fermented foods and drinks'),
(17, 'VIRAL PNEUMONIA', '1.try taking peppermint,eucalyptus or fenugreek tea; 2.salt water gargle; 3.caffein; 4.warm,damp air; 5.ginger or turmeric tea '),
(18, 'TENSION HEADACHE', '1.avoid diary products and artificial sweeteners; 2.intake herbs like-butterbur,feverfew,ginkgo biloba; 3.apply peppermint,eucalyptus,lavender oil'),
(19, 'LOW BLOOD SUGAR', '1.for sugar>80mg/dL-peanut butter with no added sugar; 2.for sugar in 70-80mg/dL range-peanut butter and crackers; 3.for sugar in range 55-70mg/dL-rasin,medjool,dates,applesauce,banana,grapes; 4.for sugar<55mg/dL-grape juice,honey,maple syrup'),
(20, 'STREP THROAT', '1.bone broth; 2.marshmallow root tea and row honey; 3.salt water gargle; 4.garlic,probiotics; 5.food containing vit. C and vit. D'),
(21, 'ANTIBIOTIC-ASSISTED DIARRHEA', '1.drink lots of water; 2.avoid alcohol and caffeine; 3.eat blend diet'),
(22, 'GOUT', '1.limit alcohol and fat intake to lower uric acid level; 2.drink plenty of water and do regular exercise.'),
(23, 'SEPSIS', '1.take proper vaccines like-chickenpox,influenza,viral meningitis and pneumonia vaccines; 2.always wash hand and practise good hygine'),
(24, 'DRUG ALLERGY', '1.take cool shower and avoid strong soap or detergent; 2.for rash apply calamine lotion; 3.for adults take minor dose of antihistamine');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `contact` bigint(12) NOT NULL,
  `age` int(2) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`sl_no`, `name`, `contact`, `age`, `email`, `password`) VALUES
(3, 'Prasenjit Pal', 7022182792, 20, 'prasenjitpaldmr98@gmail.com', '123789'),
(12, 'Janardan Chandra Pal', 9869564578, 61, 'janardanchpal0356@gmail.com', '123456'),
(13, 'Akshay Kumar', 9902231547, 20, 'akshaykumarchai1@gmail.com', '1234565'),
(15, 'Narayan Koushal', 9856784512, 46, 'narayanksl@hotmail.com', '145632'),
(16, 'LAKSHMIKANTHA', 9900796051, 29, 'lakshmikanthas@ewit.edu', '123456'),
(33, 'bharath', 9900796051, 28, 'lakumekantas@gmail.com', '235644'),
(35, 'keerthish n', 1234567890, 21, 'kingkeethishabc@gamil.com', '7777');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
