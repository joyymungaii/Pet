-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2025 at 12:22 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pet_adoption`
--

-- --------------------------------------------------------

--
-- Table structure for table `application_data`
--

CREATE TABLE `application_data` (
  `id` int(11) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `streetAddress` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(50) NOT NULL,
  `zipCode` varchar(20) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `employer` varchar(255) NOT NULL,
  `emergencyContact` varchar(255) NOT NULL,
  `housingType` varchar(50) NOT NULL,
  `housingStatus` varchar(10) NOT NULL,
  `landlordName` varchar(255) DEFAULT NULL,
  `landlordPhone` varchar(20) DEFAULT NULL,
  `yardDescription` varchar(50) NOT NULL,
  `fenceDetails` text DEFAULT NULL,
  `hasPool` tinyint(1) DEFAULT NULL,
  `poolDetails` text DEFAULT NULL,
  `adultsCount` int(11) NOT NULL,
  `childrenCount` int(11) NOT NULL DEFAULT 0,
  `childrenAges` varchar(255) DEFAULT NULL,
  `hasAllergies` tinyint(1) DEFAULT NULL,
  `allergiesDetails` text DEFAULT NULL,
  `hasPets` tinyint(1) DEFAULT NULL,
  `currentPets` text DEFAULT NULL,
  `hadPets` tinyint(1) DEFAULT NULL,
  `previousPets` text DEFAULT NULL,
  `fosterDogs` tinyint(1) DEFAULT NULL,
  `fosterPuppies` tinyint(1) DEFAULT NULL,
  `fosterCats` tinyint(1) DEFAULT NULL,
  `fosterKittens` tinyint(1) DEFAULT NULL,
  `fosterSmallAnimals` tinyint(1) DEFAULT NULL,
  `willingSpecialNeeds` varchar(10) DEFAULT NULL,
  `willingMedication` tinyint(1) DEFAULT NULL,
  `willingTraining` tinyint(1) DEFAULT NULL,
  `fosterDuration` varchar(50) DEFAULT NULL,
  `hoursAlone` varchar(10) DEFAULT NULL,
  `fosterExperience` text DEFAULT NULL,
  `reference1Name` varchar(255) DEFAULT NULL,
  `reference1Phone` varchar(20) DEFAULT NULL,
  `reference1Relationship` varchar(255) DEFAULT NULL,
  `reference2Name` varchar(255) DEFAULT NULL,
  `reference2Phone` varchar(20) DEFAULT NULL,
  `reference2Relationship` varchar(255) DEFAULT NULL,
  `vetName` varchar(255) DEFAULT NULL,
  `vetPhone` varchar(20) DEFAULT NULL,
  `agreedTerms` tinyint(1) DEFAULT NULL,
  `agreedHomeVisit` tinyint(1) DEFAULT NULL,
  `agreedUpdates` tinyint(1) DEFAULT NULL,
  `additionalComments` text DEFAULT NULL,
  `submissionTimestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `application_data`
--

INSERT INTO `application_data` (`id`, `firstName`, `lastName`, `email`, `phone`, `streetAddress`, `city`, `state`, `zipCode`, `occupation`, `employer`, `emergencyContact`, `housingType`, `housingStatus`, `landlordName`, `landlordPhone`, `yardDescription`, `fenceDetails`, `hasPool`, `poolDetails`, `adultsCount`, `childrenCount`, `childrenAges`, `hasAllergies`, `allergiesDetails`, `hasPets`, `currentPets`, `hadPets`, `previousPets`, `fosterDogs`, `fosterPuppies`, `fosterCats`, `fosterKittens`, `fosterSmallAnimals`, `willingSpecialNeeds`, `willingMedication`, `willingTraining`, `fosterDuration`, `hoursAlone`, `fosterExperience`, `reference1Name`, `reference1Phone`, `reference1Relationship`, `reference2Name`, `reference2Phone`, `reference2Relationship`, `vetName`, `vetPhone`, `agreedTerms`, `agreedHomeVisit`, `agreedUpdates`, `additionalComments`, `submissionTimestamp`) VALUES
(1, 'Kevin Mungai', 'Munene', 'munenekevin366@gmail.com', '0790875188', '1020-00219', 'LIMURU', 'AK', '00217', 'tryrt', 'as', '0790875188', 'mobile', 'own', '', '', 'no-yard', '', 1, '', 2, 0, '0', 1, '0', 1, '0', 1, '', 0, 0, 0, 0, 0, '0', 0, 0, 'short', '0-2', 'ned cn dsxnj', 'joyyy', '0790875188', 'gf', 'munga', '0790875188', 'mandem', 'petty', '790875188', 1, 1, 1, 'sjzuhswnxxsbx', '2025-05-07 23:21:14'),
(2, 'Kevin Mungai', 'Munene', 'munenekevin366@gmail.com', '0790875188', '1020-00219', 'LIMURU', 'AZ', '00217', 'dev', 'as', '0734234354', 'house', 'own', '', '', 'unfenced', '', 1, '', 2, 3, '5', 1, '0', 1, '0', 1, '', 0, 0, 0, 0, 0, '0', 1, 0, 'medium', '0-2', 'good', 'joyyy', '0790875673', 'gf', 'munga', '0790875199', 'mandem', 'petty', '790875188', 1, 1, 1, 'none', '2025-05-08 11:50:50'),
(3, 'Kevin Mungai', 'Munene', 'munenekevin366@gmail.com', '0790875188', '1020-00219', 'LIMURU', 'AZ', '00217', 'dev', 'as', '0734234354', 'house', 'own', '', '', 'unfenced', '', 1, '', 2, 3, '5', 1, '0', 1, '0', 1, '', 0, 0, 0, 0, 0, '0', 1, 0, 'medium', '0-2', 'good', 'joyyy', '0790875673', 'gf', 'munga', '0790875199', 'mandem', 'petty', '790875188', 1, 1, 1, 'none', '2025-05-08 11:54:25'),
(4, 'Kevin Mungai', 'Munene', 'munenekevin366@gmail.com', '0790875188', '1020-00219', 'LIMURU', 'AK', '00217', 'dev', 'as', '0790875188', 'apartment', 'own', '', '', 'unfenced', '', 1, '', 1, 1, '0', 1, '0', 1, '0', 1, '', 0, 0, 0, 0, 0, '0', 1, 1, 'short', '3-5', 'bfdb', 'joyyy', '0790875188', 'gf', 'dsaddsadsaasdasd', '0790875188', 'mandem', 'petty', '790875188', 1, 1, 1, 'vdsvfsvf', '2025-05-12 23:19:12');

-- --------------------------------------------------------

--
-- Table structure for table `pets`
--

CREATE TABLE `pets` (
  `pet_id` int(11) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `pet_type` varchar(50) NOT NULL,
  `breed` varchar(100) DEFAULT NULL,
  `age` varchar(20) DEFAULT NULL,
  `size` varchar(20) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `status` enum('adoptable','foster') NOT NULL DEFAULT 'adoptable',
  `description` text DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `shelter_name` varchar(100) DEFAULT NULL,
  `distance` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pets`
--

INSERT INTO `pets` (`pet_id`, `name`, `pet_type`, `breed`, `age`, `size`, `gender`, `location`, `status`, `description`, `image_url`, `shelter_name`, `distance`) VALUES
(1, 'Buddy', 'dog', 'Golden Retriever', '2 years', 'large', 'male', 'Nairobi', 'adoptable', 'Friendly and energetic dog who loves to play fetch.', 'image/golden_retriever.jpg', 'Happy Tails Rescue', '3.2 miles'),
(2, 'Whiskers', 'cat', 'Siamese', '1 year', 'medium', 'female', 'Kiambu', 'adoptable', 'A beautiful and playful Siamese cat.', 'image/siamese_cat.jpg', 'Purrfect Pals Shelter', '5.8 miles'),
(3, 'Hammy', 'small-animal', 'Hamster', '6 months', 'small', 'male', 'Nairobi', 'adoptable', 'A cute and cuddly hamster looking for a loving home.', 'image/hamster.jpg', 'Small Critter Haven', '2.1 miles'),
(4, 'Polly', 'bird', 'Parakeet', '3 years', 'small', 'female', 'Thika', 'foster', 'A colorful parakeet who loves to sing.', 'image/parakeet.jpg', 'Feathered Friends Sanctuary', '10.5 miles'),
(5, 'Rocky', 'dog', 'Beagle', '4 years', 'medium', 'male', 'Kiambu', 'adoptable', 'A curious and loyal Beagle, great for families.', 'image/beagle.jpg', 'Pawsitive Beginnings', '7.1 miles'),
(6, 'Luna', 'cat', 'Persian', '5 years', 'medium', 'female', 'Nairobi', 'foster', 'A calm and affectionate Persian cat seeking a quiet home.', 'image/persian_cat.jpg', 'Comfort Zone Feline Rescue', '1.5 miles'),
(7, 'Pip', 'small-animal', 'Guinea Pig', '1 year', 'small', 'male', 'Machakos', 'adoptable', 'A friendly guinea pig who enjoys company.', 'image/guinea_pig.jpg', 'Critter Cottage', '25.3 miles'),
(8, 'Sunny', 'bird', 'Canary', '2 years', 'small', 'male', 'Nairobi', 'adoptable', 'A cheerful canary with a lovely singing voice.', 'image/canary.jpg', 'Bird Haven', '4.9 miles');

-- --------------------------------------------------------

--
-- Table structure for table `pet_adoption_applications`
--

CREATE TABLE `pet_adoption_applications` (
  `application_id` int(11) NOT NULL,
  `pet_id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `zip` varchar(255) DEFAULT NULL,
  `age_range` varchar(20) DEFAULT NULL,
  `occupation` varchar(255) DEFAULT NULL,
  `housing_type` varchar(50) DEFAULT NULL,
  `ownership` varchar(50) DEFAULT NULL,
  `landlord_name` varchar(255) DEFAULT NULL,
  `landlord_phone` varchar(20) DEFAULT NULL,
  `pet_permission` tinyint(1) DEFAULT NULL,
  `yard` varchar(50) DEFAULT NULL,
  `fence_height` varchar(50) DEFAULT NULL,
  `adults_in_home` int(11) DEFAULT NULL,
  `children_in_home` int(11) DEFAULT NULL,
  `seniors_in_home` int(11) DEFAULT NULL,
  `children_ages` text DEFAULT NULL,
  `allergies` varchar(10) DEFAULT NULL,
  `allergies_description` text DEFAULT NULL,
  `current_pets` varchar(10) DEFAULT NULL,
  `past_pets` varchar(10) DEFAULT NULL,
  `past_pets_description` text DEFAULT NULL,
  `vet_name` varchar(255) DEFAULT NULL,
  `vet_phone` varchar(20) DEFAULT NULL,
  `hours_left_alone` varchar(20) DEFAULT NULL,
  `sleep_location` text DEFAULT NULL,
  `exercise_plans` text DEFAULT NULL,
  `training_plans` text DEFAULT NULL,
  `additional_info` text DEFAULT NULL,
  `applicant_questions` text DEFAULT NULL,
  `terms_agreement` tinyint(1) NOT NULL,
  `home_visit_agreement` tinyint(1) NOT NULL,
  `accurate_info_agreement` tinyint(1) NOT NULL,
  `application_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pet_adoption_applications`
--

INSERT INTO `pet_adoption_applications` (`application_id`, `pet_id`, `first_name`, `last_name`, `email`, `phone`, `address`, `city`, `state`, `zip`, `age_range`, `occupation`, `housing_type`, `ownership`, `landlord_name`, `landlord_phone`, `pet_permission`, `yard`, `fence_height`, `adults_in_home`, `children_in_home`, `seniors_in_home`, `children_ages`, `allergies`, `allergies_description`, `current_pets`, `past_pets`, `past_pets_description`, `vet_name`, `vet_phone`, `hours_left_alone`, `sleep_location`, `exercise_plans`, `training_plans`, `additional_info`, `applicant_questions`, `terms_agreement`, `home_visit_agreement`, `accurate_info_agreement`, `application_date`) VALUES
(1, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'no', NULL, 'no', 'no', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, '2025-05-06 17:46:45'),
(2, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'no', NULL, 'no', 'no', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, '2025-05-06 17:48:39'),
(3, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'no', NULL, 'no', 'no', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, '2025-05-06 17:49:41'),
(4, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'no', NULL, 'no', 'no', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, '2025-05-06 17:51:00'),
(5, 1, NULL, NULL, 'munenekevin366@gmail.com', '0790875188', '1020-00219', 'LIMURU', 'AK', '00217', '26-35', 'tryrt', 'condo', 'own', '', '', 0, '0', '0', 1, 0, 0, '0', 'no', '', 'no', 'no', '', 'Petty', '0790875188', '0-2', 'house', 'dc', 'dsc', 'dsv ', 'bv', 1, 1, 1, '2025-05-06 18:22:50'),
(6, 1, 'Kevin Mungai', 'Munene', 'munenekevin366@gmail.com', '0790875188', '1020-00219', 'LIMURU', 'WY', '00217', '18-25', 'dev', 'condo', 'rent', '', '', 0, '0', '0', 1, 0, 0, '0', 'no', '', 'no', 'no', '', 'Petty', '0790875188', '3-5', 'house', 'playing', 'none', 'no', 'no', 1, 1, 1, '2025-05-07 15:56:27'),
(7, 1, 'Kevin Mungai', 'Munene', 'munenekevin366@gmail.com', '0790875188', '1020-00219', 'LIMURU', 'AK', '00217', '36-45', 'dev', 'apartment', 'rent', '', '', 0, '0', '4', 1, 2, 0, '0', 'no', '', 'no', 'no', '', 'Petty', '0790875188', '3-5', 'house', 'fgd', 'dscs', 'cdscvvfvv', 'sdfds', 1, 1, 1, '2025-05-07 15:57:46'),
(8, 1, 'Kevin Mungai', 'Munene', 'munenekevin366@gmail.com', '0790875188', '1020-00219', 'LIMURU', 'AK', '00217', '26-35', 'dev', 'apartment', 'own', '', '', 0, '0', '0', 1, 2, 0, '0', 'no', '', 'no', 'no', '', 'Petty', '0790875188', '0-2', 'house', 'ssad\r\n', 'dsf', 'cd', 'dc', 1, 1, 1, '2025-05-07 16:04:13'),
(9, 1, 'Kevin Mungai', 'Munene', 'munenekevin366@gmail.com', '0790875188', '1020-00219', 'LIMURU', 'AK', '00217', '26-35', 'dev', 'apartment', 'own', '', '', 0, '0', '0', 1, 2, 0, '0', 'no', '', 'no', 'no', '', 'Petty', '0790875188', '0-2', 'house', 'ssad\r\n', 'dsf', 'cd', 'dc', 1, 1, 1, '2025-05-07 16:04:25'),
(10, 1, 'Kevin Mungai', 'Munene', 'munenekevin366@gmail.com', '0790875188', '1020-00219', 'LIMURU', 'AK', '00217', '26-35', 'dev', 'apartment', 'own', '', '', 0, '0', '0', 1, 2, 0, '0', 'no', '', 'no', 'no', '', 'Petty', '0790875188', '0-2', 'house', 'ssad\r\n', 'dsf', 'cd', 'dc', 1, 1, 1, '2025-05-07 16:08:03'),
(11, 2, 'Kevin Mungai', 'Munene', 'munenekevin366@gmail.com', '0790875188', '1020-00219', 'LIMURU', 'AK', '00217', '46-55', 'gdgf', 'condo', 'rent', 'jooyyyy', '', 0, '0', '0', 1, 5, 0, '0', 'no', '', 'yes', 'no', '', 'Petty', '0790875100', '6-8', 'house', 'walks', 'none', '', '', 1, 1, 1, '2025-05-07 16:15:48');

-- --------------------------------------------------------

--
-- Table structure for table `shelter_applications`
--

CREATE TABLE `shelter_applications` (
  `id` int(11) NOT NULL,
  `shelterName` varchar(255) NOT NULL,
  `shelterType` varchar(255) NOT NULL,
  `yearEstablished` int(11) NOT NULL,
  `taxId` varchar(255) NOT NULL,
  `websiteUrl` varchar(255) DEFAULT NULL,
  `facebookUrl` varchar(255) DEFAULT NULL,
  `instagramHandle` varchar(255) DEFAULT NULL,
  `contactFirstName` varchar(255) NOT NULL,
  `contactLastName` varchar(255) NOT NULL,
  `contactTitle` varchar(255) NOT NULL,
  `contactPhone` varchar(20) NOT NULL,
  `contactEmail` varchar(255) NOT NULL,
  `physicalAddress` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zipCode` varchar(20) NOT NULL,
  `facilityType` varchar(255) NOT NULL,
  `animalCapacity` int(11) NOT NULL,
  `acceptedAnimals` text NOT NULL,
  `vetPartners` text NOT NULL,
  `staffCount` int(11) NOT NULL,
  `agreeTerms` tinyint(1) NOT NULL,
  `agreeUpdates` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shelter_applications`
--

INSERT INTO `shelter_applications` (`id`, `shelterName`, `shelterType`, `yearEstablished`, `taxId`, `websiteUrl`, `facebookUrl`, `instagramHandle`, `contactFirstName`, `contactLastName`, `contactTitle`, `contactPhone`, `contactEmail`, `physicalAddress`, `city`, `state`, `zipCode`, `facilityType`, `animalCapacity`, `acceptedAnimals`, `vetPartners`, `staffCount`, `agreeTerms`, `agreeUpdates`) VALUES
(1, 'fggfn', 'municipal', 2009, '5656', 'nfgg', 'jfgjgj', 'gfjf', 'Kevin Mungai', 'Munene', 'fdsf', '0790875188', 'munenekevin366@gmail.com', '1020-00219', 'LIMURU', 'AZ', '00217', 'physical', 17, '', 'ffdg', 6, 1, 1),
(2, 'fggfn', 'municipal', 2009, '5656', 'nfgg', 'jfgjgj', 'gfjf', 'Kevin Mungai', 'Munene', 'fdsf', '0790875188', 'munenekevin366@gmail.com', '1020-00219', 'LIMURU', 'AZ', '00217', 'physical', 17, '', 'ffdg', 6, 1, 1),
(3, 'fggfn', 'municipal', 2009, '5656', 'hgj', 'ghjg', 'vn', 'Kevin Mungai', 'Munene', 'fdsf', '0790875188', 'munenekevin366@gmail.com', '1020-00219', 'LIMURU', 'AL', '00217', 'physical', 8, '', 'fgdg', 7, 1, 1),
(4, 'fggfn', 'sanctuary', 2004, '353453', 'hgj', 'jfgjgj', '', 'Kevin Mungai', 'Munene', 'fdsf', '0790875188', 'munenekevin366@gmail.com', '1020-00219', 'LIMURU', 'WY', '00217', 'physical', 26, '', 'dbdbd', 5, 1, 1),
(5, 'fggfn', 'foster', 2019, '353453', 'nfgg', 'ghjg', 'vn', 'Kevin Mungai', 'Munene', 'fdsf', '0790875188', 'munenekevin366@gmail.com', '1020-00219', 'LIMURU', 'AZ', '00217', 'physical', 23, '', 'fdgdg', 7, 1, 1),
(6, 'fggfn', 'foster', 2019, '353453', 'nfgg', 'ghjg', 'vn', 'Kevin Mungai', 'Munene', 'fdsf', '0790875188', 'munenekevin366@gmail.com', '1020-00219', 'LIMURU', 'AZ', '00217', 'physical', 23, '', 'fdgdg', 7, 1, 1),
(7, 'fggfn', 'foster', 2019, '353453', 'nfgg', 'ghjg', 'vn', 'Kevin Mungai', 'Munene', 'fdsf', '0790875188', 'munenekevin366@gmail.com', '1020-00219', 'LIMURU', 'AZ', '00217', 'physical', 23, '', 'fdgdg', 7, 1, 1),
(8, 'fggfn', 'sanctuary', 2006, '5656', 'fdfgdf', 'fbdfd', 'vddf', 'Kevin Mungai', 'Munene', 'hgngh', '0790875188', 'munenekevin366@gmail.com', '1020-00219', 'LIMURU', 'AZ', '00217', 'foster', 31, '', 'fdgdh', 8, 1, 1),
(9, 'fggfn', 'sanctuary', 2006, '5656', 'fdfgdf', 'fbdfd', 'vddf', 'Kevin Mungai', 'Munene', 'hgngh', '0790875188', 'munenekevin366@gmail.com', '1020-00219', 'LIMURU', 'AZ', '00217', 'foster', 31, '', 'fdgdh', 8, 1, 1),
(10, 'fggfn', 'sanctuary', 2006, '5656', 'fdfgdf', 'fbdfd', 'vddf', 'Kevin Mungai', 'Munene', 'hgngh', '0790875188', 'munenekevin366@gmail.com', '1020-00219', 'LIMURU', 'AZ', '00217', 'foster', 31, '', 'fdgdh', 8, 1, 1),
(11, 'gbf', 'municipal', 1925, '353453', 'hgj', 'jfgjgj', 'gfjf', 'Kevin Mungai', 'Munene', 'fdsf', '0790875188', 'munenekevin366@gmail.com', '1020-00219', 'LIMURU', 'AK', '00217', 'foster', 26, '', 'cbnvnv', 11, 1, 1),
(12, 'gbf', 'municipal', 1925, '353453', 'hgj', 'jfgjgj', 'gfjf', 'Kevin Mungai', 'Munene', 'fdsf', '0790875188', 'munenekevin366@gmail.com', '1020-00219', 'LIMURU', 'AK', '00217', 'foster', 26, '', 'cbnvnv', 11, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `phone_number`, `address`, `city`, `username`, `password`) VALUES
(1, '', '', '', '', '', '', '', '$2y$10$WDAFsaZEFy1dJ.cWHDOAhub/2Gc2Z2J7pSHsA8Zlk3giVgYn/Nttm'),
(2, '', '', '', '', '', '', '', '$2y$10$mC8IcvSGVMFH1eBd4PEXMuW91TzvnAG0UneXKZm5BU1B3YY5/90TK'),
(3, '', '', '', '', '', '', '', '$2y$10$WxcfCQHDmP1xeWW4oz3kheQWDPWTyiycOxh/Pt/1R.X0wROQb1FI6'),
(4, 'Kevin Mungai', 'Munene', 'munenekevin366@gmail.com', '0790875188', '1020-00219', 'LIMURU', 'plugkevo', '$2y$10$0bSV46XjQYgXmpO8j0dY8efSU7t81R2/C.EWSLXji5O8oidrhLq7q');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application_data`
--
ALTER TABLE `application_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pets`
--
ALTER TABLE `pets`
  ADD PRIMARY KEY (`pet_id`);

--
-- Indexes for table `pet_adoption_applications`
--
ALTER TABLE `pet_adoption_applications`
  ADD PRIMARY KEY (`application_id`),
  ADD KEY `pet_id` (`pet_id`);

--
-- Indexes for table `shelter_applications`
--
ALTER TABLE `shelter_applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application_data`
--
ALTER TABLE `application_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pets`
--
ALTER TABLE `pets`
  MODIFY `pet_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pet_adoption_applications`
--
ALTER TABLE `pet_adoption_applications`
  MODIFY `application_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `shelter_applications`
--
ALTER TABLE `shelter_applications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pet_adoption_applications`
--
ALTER TABLE `pet_adoption_applications`
  ADD CONSTRAINT `pet_adoption_applications_ibfk_1` FOREIGN KEY (`pet_id`) REFERENCES `pets` (`pet_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
