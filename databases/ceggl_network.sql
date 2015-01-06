-- phpMyAdmin SQL Dump
-- version 4.1.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 06, 2015 at 08:50 AM
-- Server version: 5.5.40-cll
-- PHP Version: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ceggl_network`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE IF NOT EXISTS `address` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `address_type` varchar(15) DEFAULT NULL,
  `related_id` int(11) DEFAULT NULL,
  `address1` varchar(70) DEFAULT NULL,
  `address2` varchar(50) DEFAULT NULL,
  `city` varchar(40) DEFAULT NULL,
  `st` varchar(15) DEFAULT NULL,
  `zip` varchar(15) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `fax` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `address_type`, `related_id`, `address1`, `address2`, `city`, `st`, `zip`, `phone`, `fax`) VALUES
(1, 'company', 1, '2312 Wilton Drive', '', 'Wilton Manors', 'FL', '33305', NULL, NULL),
(2, 'company', 1, '2312 Wilton Drive', '', 'Wilton Manors', '', '33305', '(954) 557-2801', ''),
(3, 'company', 2, '2220 Wilton Park Dr', '2312 Wilton Drive', 'Fort Lauderdale', 'FL', '33305', NULL, NULL),
(4, 'company', 3, '2312 Wilton Drive', '', 'fort lauderdle', 'FL', '33305', NULL, NULL),
(5, 'company', 4, '2312 Wilton Drive', '', 'Fort Lauderdale', 'FL', '33305', NULL, NULL),
(6, 'company', 5, '2312 Wilton Drive', '', 'Fort Lauderdale', 'FL', '33305', NULL, NULL),
(7, 'company', 6, '2312 Wilton Drive', '', 'Fort Lauderdale', 'FL', '33305', NULL, NULL),
(8, 'company', 7, '2500 NE 135th St, #B508', '', 'North Miami', 'FL', '33181', NULL, NULL),
(9, 'company', 8, '401 E. Las Olas Blvd', 'Suite 130-542', 'Ft. Lauderdale', 'FL', '33301', NULL, NULL),
(10, 'company', 9, '401 E Las Olas Blvd', '', 'Fort Lauderdale', 'FL', '33301', NULL, NULL),
(11, 'company', 10, '333 SE 2nd Avenue', 'Suite 4400', 'Miami', 'FL', '33131', NULL, NULL),
(12, 'company', 11, '445 East Palmetto Park Road', '', 'Boca Raton', 'FL', '33432', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `associations`
--

CREATE TABLE IF NOT EXISTS `associations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `related_type` varchar(15) DEFAULT NULL,
  `related_id` int(11) DEFAULT NULL,
  `association` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1516 ;

--
-- Dumping data for table `associations`
--

INSERT INTO `associations` (`id`, `related_type`, `related_id`, `association`) VALUES
(1503, 'company', 1, 'Black Women Lawyers Association'),
(1502, 'company', 1, 'Black Lawyers Association of Cincinnati'),
(1501, 'company', 1, 'Black Entertainment and Sports Lawyers Association'),
(1515, 'company', 8, 'Professional Law Group'),
(1514, 'company', 8, 'Gateway Legal Association');

-- --------------------------------------------------------

--
-- Table structure for table `awards`
--

CREATE TABLE IF NOT EXISTS `awards` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `award_type` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `related_id` int(11) NOT NULL,
  `award_name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `award_year` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `awards`
--

INSERT INTO `awards` (`id`, `award_type`, `related_id`, `award_name`, `award_year`) VALUES
(1, 'company', 0, 'Small Business of the Year Award', 2014),
(2, 'company', 1, 'Small Business Award', 2014),
(3, 'company', 1, 'Test Award', 2014),
(4, 'company', 1, 'Test Award', 2015),
(5, 'company', 1, 'Example award', 2012),
(6, 'user', 1, 'Test Award 1', 2015),
(7, 'user', 1, 'Test Award 2', 2015),
(8, 'user', 1, 'Test Award 3', 2015),
(9, 'user', 1, 'Test Award 4', 2015),
(10, 'user', 1, 'Test Award 5', 2015),
(11, 'user', 1, 'Test Award 6', 2015),
(12, 'user', 1, 'Mobile app developer of the year', 2015),
(13, 'user', 9, 'GSD Award', 2014);

-- --------------------------------------------------------

--
-- Table structure for table `barstate`
--

CREATE TABLE IF NOT EXISTS `barstate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `barstate_type` varchar(15) DEFAULT NULL,
  `related_id` int(11) DEFAULT NULL,
  `state` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=829 ;

--
-- Dumping data for table `barstate`
--

INSERT INTO `barstate` (`id`, `barstate_type`, `related_id`, `state`) VALUES
(692, 'company', 1, 'MN'),
(691, 'company', 1, 'FL'),
(690, 'company', 1, 'CA'),
(745, 'user', 1, 'FL'),
(744, 'user', 1, 'CT'),
(743, 'user', 1, 'CA'),
(689, 'company', 1, 'AR'),
(466, 'user', 2, 'CA'),
(467, 'user', 2, 'CT'),
(468, 'user', 2, 'FL'),
(487, 'user', 3, 'CA'),
(488, 'user', 3, 'CT'),
(489, 'user', 3, 'FL'),
(513, 'company', 7, 'NY'),
(512, 'company', 7, 'NJ'),
(511, 'company', 7, 'FL'),
(813, 'company', 8, 'OH'),
(812, 'company', 8, 'MA'),
(811, 'company', 8, 'FL'),
(810, 'company', 8, 'AR'),
(604, 'user', 8, 'FL'),
(828, 'user', 9, 'NM'),
(827, 'user', 9, 'DE'),
(742, 'user', 1, 'AZ'),
(741, 'user', 1, 'AL'),
(603, 'user', 8, 'AL'),
(826, 'user', 9, 'AR');

-- --------------------------------------------------------

--
-- Table structure for table `boardcertification`
--

CREATE TABLE IF NOT EXISTS `boardcertification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `boardcertification_type` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `related_id` int(11) NOT NULL,
  `certification_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=649 ;

--
-- Dumping data for table `boardcertification`
--

INSERT INTO `boardcertification` (`id`, `boardcertification_type`, `related_id`, `certification_id`) VALUES
(531, 'company', 1, 1),
(530, 'company', 1, 225),
(529, 'company', 1, 1),
(528, 'company', 1, 225),
(564, 'user', 1, 1),
(563, 'user', 1, 225),
(648, 'user', 9, 480),
(647, 'user', 9, 129),
(646, 'user', 9, 58),
(645, 'user', 9, 239);

-- --------------------------------------------------------

--
-- Table structure for table `certification`
--

CREATE TABLE IF NOT EXISTS `certification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `related_id` int(11) DEFAULT NULL,
  `certification` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=296 ;

--
-- Dumping data for table `certification`
--

INSERT INTO `certification` (`id`, `related_id`, `certification`) VALUES
(277, 1, 'LGBT'),
(295, 8, 'Disabled Veteran'),
(294, 8, 'WMBE'),
(293, 8, 'MBA');

-- --------------------------------------------------------

--
-- Table structure for table `certification_list`
--

CREATE TABLE IF NOT EXISTS `certification_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=811 ;

--
-- Dumping data for table `certification_list`
--

INSERT INTO `certification_list` (`id`, `name`) VALUES
(1, 'Administrative Law'),
(2, 'Administrative Adjudications'),
(3, 'Administrative Agency Practice'),
(4, 'Administrative Hearings and Appeals'),
(5, 'Administrative Litigation'),
(6, 'Federal Administrative Law'),
(7, 'Judicial Review'),
(8, 'Professional Licensing'),
(9, 'Professional Licensing Regulation'),
(10, 'Public Law'),
(11, 'Admiralty & Maritime Law'),
(12, 'Admiralty Law'),
(13, 'Charter Parties'),
(14, 'International Shipping'),
(15, 'Jones Act'),
(16, 'Longshore and Harbor Workers Compensation Act'),
(17, 'Marine Cargo'),
(18, 'Marine Insurance'),
(19, 'Marine Law'),
(20, 'Maritime Accidents'),
(21, 'Maritime Finance'),
(22, 'Maritime Law'),
(23, 'Maritime Personal Injury'),
(24, 'Ship Finance'),
(25, 'Shipping'),
(26, 'Agricultural Law'),
(27, 'Aerial Chemical Application'),
(28, 'Agribusiness'),
(29, 'Agricultural Cooperatives'),
(30, 'Agricultural Finance'),
(31, 'Agricultural Litigation'),
(32, 'Crop Damage'),
(33, 'Farm and Ranch Law'),
(34, 'Food and Agriculture'),
(35, 'Food Labeling and Inspection'),
(36, 'Perishable Agricultural Commodities Act (PACA)'),
(37, 'Winery Law'),
(38, 'Alternative Dispute Resolution'),
(39, 'Antitrust & Trade Regulation'),
(40, 'Antiboycott Compliance'),
(41, 'Antitrust'),
(42, 'Antitrust Class Actions'),
(43, 'Business Combinations'),
(44, 'Antitrust & Trade RegulatioCompetition'),
(45, 'Deceptive Trade Practices'),
(46, 'International Antitrust'),
(47, 'Price-Fixing'),
(48, 'Trade Regulation'),
(49, 'Unfair Trade'),
(50, 'Appellate Practice'),
(51, 'Civil Appeals'),
(52, 'Aviation & Aerospace'),
(53, 'Aerospace Law'),
(54, 'Aircraft Finance and Leasing'),
(55, 'Aircraft Sales'),
(56, 'Aircraft Title'),
(57, 'Airplane Crash Litigation'),
(58, 'Airport Law'),
(59, 'Aviation Accidents'),
(60, 'Aviation Insurance'),
(61, 'Aviation Law'),
(62, 'Aviation Litigation'),
(63, 'Aviation Regulation'),
(64, 'Helicopter Crash Litigation'),
(65, 'International Aviation Law'),
(66, 'Space Law'),
(67, 'Banking Law'),
(68, 'Banking Litigation'),
(69, 'Banking Regulation'),
(70, 'Banks and Banking'),
(71, 'Commercial Banking'),
(72, 'Commercial Loans'),
(73, 'Consumer Banking'),
(74, 'Credit'),
(75, 'Currency'),
(76, 'Financial Law'),
(77, 'Lender Law'),
(78, 'Lender Liability'),
(79, 'Lending'),
(80, 'Letters of Credit'),
(81, 'Loan Restructuring'),
(82, 'Loans'),
(83, 'Secured Lending'),
(84, 'Truth in Lending'),
(85, 'Bankruptcy'),
(86, 'Bankruptcy Chapter 7'),
(87, 'Bankruptcy Chapter 11'),
(88, 'Bankruptcy Chapter 13'),
(89, 'Bankruptcy Litigation'),
(90, 'Bankruptcy Reorganization'),
(91, 'Business Bankruptcy'),
(92, 'Commercial Bankruptcy'),
(93, 'Consumer Bankruptcy'),
(94, 'Creditor Bankruptcy'),
(95, 'Foreclosure'),
(96, 'Insolvency'),
(97, 'Personal Bankruptcy'),
(98, 'Receiverships'),
(99, 'Workouts'),
(100, 'Business Law'),
(101, 'Business Formation'),
(102, 'Business Litigation'),
(103, 'Business Planning'),
(104, 'Business Reorganization'),
(105, 'Business Start-Ups'),
(106, 'Closely-Held Business Law'),
(107, 'Franchise Law'),
(108, 'International Business Law'),
(109, 'Joint Ventures'),
(110, 'Limited Liability Company Law'),
(111, 'Partnership Law'),
(112, 'Privatization'),
(113, 'Small Business Law'),
(114, 'Civil Rights'),
(115, 'Civil Liberties'),
(116, 'Civil Rights Defense'),
(117, 'Civil Rights Section 1983'),
(118, 'Discrimination'),
(119, 'Gay and Lesbian Rights'),
(120, 'Human Rights'),
(121, 'International Human Rights'),
(122, 'Personal Rights'),
(123, 'Prisoners Rights'),
(124, 'Public Interest Law'),
(125, 'Race Discrimination'),
(126, 'Reproductive Rights'),
(127, 'Sex Discrimination'),
(128, 'Womens Rights'),
(129, 'Class Actions'),
(130, 'Commercial Law'),
(131, 'Commercial Arbitration'),
(132, 'Commercial Fraud'),
(133, 'Commercial Liability'),
(134, 'Commercial Litigation'),
(135, 'Commercial Torts'),
(136, 'Commercial Transactions'),
(137, 'International Commercial Law'),
(138, 'Negotiable Instruments'),
(139, 'Sale of Goods'),
(140, 'Secured Transactions'),
(141, 'Uniform Commercial Code'),
(142, 'Communications Law'),
(143, 'Broadcast Law'),
(144, 'Cable Communications'),
(145, 'Cable Franchising'),
(146, 'Cable TV'),
(147, 'Cellular Communications'),
(148, 'Communications and Media'),
(149, 'FCC Regulation'),
(150, 'International Telecom'),
(151, 'Mass Media'),
(152, 'Telecommunications Law'),
(153, 'Telecommunications Regulation'),
(154, 'Wireless Communications'),
(155, 'Constitutional Law'),
(156, 'Fifth Amendment Law'),
(157, 'First Amendment Law'),
(158, 'Fourth Amendment Law'),
(159, 'Freedom of Information'),
(160, 'Freedom of Religion'),
(161, 'Media and First Amendment'),
(162, 'Construction Law'),
(163, 'Construction Accidents'),
(164, 'Construction and Design Law'),
(165, 'Construction Claims'),
(166, 'Construction Contracts'),
(167, 'Construction Defects'),
(168, 'Construction Insurance'),
(169, 'Construction Liens'),
(170, 'Construction Litigation'),
(171, 'Contractors Liability'),
(172, 'International Construction'),
(173, 'Mechanics Lien'),
(174, 'Public Works'),
(175, 'Contracts'),
(176, 'Breach of Contract'),
(177, 'Commercial Contracts'),
(178, 'Contract Fraud'),
(179, 'Contract Litigation'),
(180, 'International Commercial Contracts'),
(181, 'International Contracts'),
(182, 'Corporate Law'),
(183, 'Closely Held Corporations'),
(184, 'Corporate Commercial Law'),
(185, 'Corporate Finance'),
(186, 'Corporate Governance'),
(187, 'Corporate Investigations'),
(188, 'Corporate Litigation'),
(189, 'Corporate Reorganization'),
(190, 'Corporate Taxation'),
(191, 'International Corporate Law'),
(192, 'Nonprofit Corporations'),
(193, 'Offshore Corporations'),
(194, 'Criminal Law'),
(195, 'Assault and Battery'),
(196, 'Capital Offenses'),
(197, 'Criminal Appeals'),
(198, 'Criminal Defense'),
(199, 'Criminal Fraud'),
(200, 'Domestic Violence'),
(201, 'Drug Crimes'),
(202, 'DUI/DWI'),
(203, 'Federal Criminal Law'),
(204, 'Felonies'),
(205, 'Homicide'),
(206, 'Juvenile Law'),
(207, 'Misdemeanors'),
(208, 'Murder'),
(209, 'Sex Crimes'),
(210, 'Sexual Assault'),
(211, 'Traffic Violations'),
(212, 'Weapons Charges'),
(213, 'Debtor & Creditor'),
(214, 'Creditors Rights'),
(215, 'Creditors Rights in Bankruptcy'),
(216, 'Collections'),
(217, 'Debtor and Creditor Remedies'),
(218, 'Debtor and Creditor Workouts'),
(219, 'Debtors Rights'),
(220, 'Fair Debt Collection Practices Act'),
(221, 'International Creditors Rights'),
(222, 'Secured Creditors Rights'),
(223, 'Unsecured Creditors Rights'),
(224, 'Education Law'),
(225, 'Academic Employment'),
(226, 'Charter School Law'),
(227, 'College and University Law'),
(228, 'Private Education Law'),
(229, 'Public School Law'),
(230, 'School Board Defense'),
(231, 'School Board Liability'),
(232, 'School District Liability'),
(233, 'School Law'),
(234, 'Special Education'),
(235, 'Student Loans'),
(236, 'Title IX Discrimination'),
(237, 'University Finance'),
(238, 'Elder Law'),
(239, 'Advance Directives'),
(240, 'Age Discrimination'),
(241, 'Aged and Aging'),
(242, 'Elder Abuse'),
(243, 'Elder Care'),
(244, 'Elder Guardianship'),
(245, 'Elder Rights'),
(246, 'Estate Planning for the Elderly'),
(247, 'Medicaid Hearings'),
(248, 'Election, Campaign & Political'),
(249, 'Administrative Lobbying'),
(250, 'Campaign Ethics'),
(251, 'Election and Campaign Finance'),
(252, 'Election Law'),
(253, 'Executive Lobbying'),
(254, 'Legislative Lobbying'),
(255, 'Legislative Redistricting'),
(256, 'Lobbying'),
(257, 'Voting Rights'),
(258, 'Eminent Domain '),
(259, 'Condemnation'),
(260, 'Inverse Condemnation'),
(261, 'Land Annexation'),
(262, 'Property Rights'),
(263, 'Employee Benefits'),
(264, 'Cash Balance Plans'),
(265, 'COBRA'),
(266, 'Deferred Compensation'),
(267, 'Disability Benefits'),
(268, 'Employee Compensation'),
(269, 'ESOPs'),
(270, 'ERISA'),
(271, 'ERISA Litigation'),
(272, 'Executive Compensation'),
(273, 'Health Benefits'),
(274, 'Pension and Profit Sharing Plans'),
(275, 'Pension Plans'),
(276, 'Retirement Benefit Plans'),
(277, 'Veterans Benefits'),
(278, 'Energy'),
(279, 'Alternative Energy'),
(280, 'Electric Power'),
(281, 'Energy Acquisitions'),
(282, 'Energy Contracts'),
(283, 'Energy Finance'),
(284, 'Energy Project Development'),
(285, 'Energy Regulation'),
(286, 'Federal Energy Regulation'),
(287, 'Hydroelectricity'),
(288, 'Independent Power'),
(289, 'International Energy'),
(290, 'Nuclear Energy'),
(291, 'Renewable Energy'),
(292, 'Wind Energy'),
(293, 'Entertainment Law'),
(294, 'Art Law'),
(295, 'Entertainment Contracts'),
(296, 'Entertainment Finance'),
(297, 'Entertainment Litigation'),
(298, 'Film'),
(299, 'Interactive Multimedia'),
(300, 'Motion Picture Finance'),
(301, 'Music Copyright and Music Law'),
(302, 'Environmental Law'),
(303, 'Air Quality'),
(304, 'Brownfields Redevelopment'),
(305, 'Environmental Cleanup'),
(306, 'Environmental Compliance'),
(307, 'Environmental Insurance'),
(308, 'Environmental Litigation'),
(309, 'Environmental Regulation'),
(310, 'Hazardous Waste'),
(311, 'Pollution'),
(312, 'Solid Waste'),
(313, 'Superfund'),
(314, 'Water Quality'),
(315, 'Wetlands'),
(316, 'Family Law'),
(317, 'Adoption Law'),
(318, 'Alimony'),
(319, 'Annulment'),
(320, 'Child Custody'),
(321, 'Child Support'),
(322, 'Cohabitation Agreements'),
(323, 'Divorce'),
(324, 'Domestic Relations'),
(325, 'Domestic Violence'),
(326, 'Fathers Rights'),
(327, 'Matrimonial Law'),
(328, 'Military Divorce'),
(329, 'Paternity'),
(330, 'Premarital Agreements'),
(331, 'Separation Agreements'),
(332, 'Spousal Support'),
(333, 'Visitation Rights'),
(334, 'Finance'),
(335, 'Asset Based Finance'),
(336, 'Commercial Finance'),
(337, 'Corporate Finance'),
(338, 'Equipment Finance and Leasing'),
(339, 'Financial Institutions Law'),
(340, 'International Finance'),
(341, 'Municipal Bonds'),
(342, 'Municipal Finance'),
(343, 'Project Finance'),
(344, 'Public Finance'),
(345, 'Secured Finance'),
(346, 'Securitization'),
(347, 'Structured Finance'),
(348, 'Tax Exempt Finance'),
(349, 'Government'),
(350, 'False Claims Act'),
(351, 'Federal Government Law'),
(352, 'Federal Tort Claims'),
(353, 'Government Affairs'),
(354, 'Government Investigations'),
(355, 'Government Relations'),
(356, 'Government Tort Liability'),
(357, 'Governmental Law'),
(358, 'Legislative Practice'),
(359, 'Local Government Law'),
(360, 'Public Policy'),
(361, 'Qui Tam Litigation'),
(362, 'State Government'),
(363, 'Government Contracts'),
(364, 'Bid Protests'),
(365, 'Defense Contract Fraud'),
(366, 'Defense Contracts'),
(367, 'Federal Contracts'),
(368, 'Foreign Military Sales'),
(369, 'Government Construction Contracts'),
(370, 'Government Contract Fraud'),
(371, 'Government Procurement'),
(372, 'Public Bidding'),
(373, 'Public Contract Law'),
(374, 'Public Procurement'),
(375, 'Health Care'),
(376, 'Health Care Fraud'),
(377, 'Health Care Licensing'),
(378, 'Health Care Litigation'),
(379, 'Health Care Regulation'),
(380, 'Health Insurance'),
(381, 'Health Law'),
(382, 'HIPAA'),
(383, 'Hospital Law'),
(384, 'Hospital Liability'),
(385, 'Hospital Negligence'),
(386, 'Long Term Care'),
(387, 'Managed Care'),
(388, 'Medicaid Planning'),
(389, 'Medicare and Medicaid'),
(390, 'Mental Health Law'),
(391, 'Immigration'),
(392, 'Asylum'),
(393, 'Business Immigration'),
(394, 'Citizenship'),
(395, 'Consular Law'),
(396, 'Deportation'),
(397, 'Employment Authorizations'),
(398, 'Employment Immigration'),
(399, 'Employment Visas'),
(400, 'Family Immigration'),
(401, 'Investor Visas'),
(402, 'Labor Certifications'),
(403, 'Permanent Visas'),
(404, 'Political Asylum'),
(405, 'Refugee Law'),
(406, 'Removal Proceedings'),
(407, 'Visas'),
(408, 'Indians & Native Populations'),
(409, 'Aboriginal Law'),
(410, 'Alaska Native Law'),
(411, 'Federal Indian Law'),
(412, 'First Nations Law'),
(413, 'Indian Child Welfare Act'),
(414, 'Indian Economic Development'),
(415, 'Indian Gaming Law'),
(416, 'Indian Law'),
(417, 'Indian Land Law'),
(418, 'Native American Civil Rights'),
(419, 'Native American Law'),
(420, 'State-Tribal Relations'),
(421, 'Tribal Law'),
(422, 'Insurance'),
(423, 'Automobile Insurance'),
(424, 'Casualty Insurance'),
(425, 'Commercial Insurance'),
(426, 'Fidelity and Surety'),
(427, 'General Liability'),
(428, 'Insurance Bad Faith'),
(429, 'Insurance Coverage'),
(430, 'Insurance Defense'),
(431, 'Insurance Fraud'),
(432, 'Insurance Litigation'),
(433, 'Insurance Regulation'),
(434, 'Life and Health Insurance'),
(435, 'Property Insurance'),
(436, 'Reinsurance'),
(437, 'Subrogation'),
(438, 'Intellectual Property'),
(439, 'Copyrights'),
(440, 'Counterfeiting'),
(441, 'Industrial Property'),
(442, 'Intellectual Property Licensing'),
(443, 'Intellectual Property Litigation'),
(444, 'International Copyright Law'),
(445, 'Patent Infringement'),
(446, 'Patent Litigation'),
(447, 'Patent Prosecution'),
(448, 'Patents'),
(449, 'Piracy'),
(450, 'Trade Secrets'),
(451, 'Trademark Litigation'),
(452, 'Trademarks'),
(453, 'International Law'),
(454, 'Foreign Asset Control'),
(455, 'Foreign Corrupt Practices Act'),
(456, 'Foreign Sovereign Immunities Act'),
(457, 'Hague Convention Proceedings'),
(458, 'International Comparative Law'),
(459, 'International Conflict of Laws'),
(460, 'International Treaty Law'),
(461, 'United Nations Law'),
(462, 'International Trade'),
(463, 'Antidumping'),
(464, 'China Trade'),
(465, 'Countervailing Duties'),
(466, 'Customs Law'),
(467, 'EU Competition'),
(468, 'Export Compliance'),
(469, 'Foreign Trade Sanctions'),
(470, 'GATT'),
(471, 'Import and Export Law'),
(472, 'ITC Section 337'),
(473, 'International Trade Regulation'),
(474, 'Latin America Trade'),
(475, 'NAFTA'),
(476, 'World Trade Organization (WTO)'),
(477, 'Internet Law'),
(478, 'Content Licensing'),
(479, 'Cybersquatting'),
(480, 'Digital Signatures'),
(481, 'Domain Name Infringement'),
(482, 'Domain Names'),
(483, 'E-commerce'),
(484, 'E-commerce Taxation'),
(485, 'Electronic Security'),
(486, 'Internet Crimes'),
(487, 'Internet Insurance'),
(488, 'Internet Liability'),
(489, 'Internet Licensing'),
(490, 'Internet Litigation'),
(491, 'Web Site Development'),
(492, 'Investment Law'),
(493, 'Capital Markets'),
(494, 'Emerging Markets'),
(495, 'Financial Services Law'),
(496, 'Foreign Investment'),
(497, 'Hedge Funds'),
(498, 'International Investment'),
(499, 'Investment Company Law'),
(500, 'Investment Fraud'),
(501, 'Investment Management'),
(502, 'Investment Regulation'),
(503, 'Mezzanine Finance'),
(504, 'Mutual Funds'),
(505, 'Private Equity'),
(506, 'Venture Capital'),
(507, 'Labor & Employment'),
(508, 'Collective Bargaining'),
(509, 'Employment Contracts'),
(510, 'Employment Discrimination'),
(511, 'Employment Law'),
(512, 'Employment Litigation'),
(513, 'Equal Employment Opportunity Law'),
(514, 'Family and Medical Leave Act'),
(515, 'Labor Law'),
(516, 'Labor Relations'),
(517, 'Sexual Harassment'),
(518, 'Wage and Hour Law'),
(519, 'Wrongful Termination'),
(520, 'Legal Malpractice'),
(521, 'Attorney Discipline'),
(522, 'Attorney Errors and Omissions'),
(523, 'Attorney Fee Disputes'),
(524, 'Attorney Grievances'),
(525, 'Conflicts of Interest'),
(526, 'Judicial Discipline'),
(527, 'Legal Ethics'),
(528, 'Legal Malpractice'),
(529, 'Legal Malpractice Defense'),
(530, 'Legal Negligence'),
(531, 'Legal Professional Liability'),
(532, 'Litigation'),
(533, 'Civil Litigation'),
(534, 'Complex Litigation'),
(535, 'Defense Litigation'),
(536, 'Federal Civil Litigation'),
(537, 'Federal Litigation'),
(538, 'International Litigation'),
(539, 'Long-arm Litigation'),
(540, 'Trial Practice'),
(541, 'U.S. Supreme Court Litigation'),
(542, 'Media Law'),
(543, 'Newspaper Contracts'),
(544, 'Newspaper Law'),
(545, 'Publishing Contracts'),
(546, 'Publishing Law'),
(547, 'Medical Malpractice'),
(548, 'Birth Injuries'),
(549, 'Birth Trauma'),
(550, 'Dental Malpractice'),
(551, 'Failure to Diagnose'),
(552, 'Medical-Legal'),
(553, 'Medical Liability'),
(554, 'Medical Malpractice Defense'),
(555, 'Medical Negligence'),
(556, 'Military Medical Malpractice'),
(557, 'Nursing Malpractice'),
(558, 'Obstetric Malpractice'),
(559, 'Pediatric Malpractice'),
(560, 'Pharmacists Liability'),
(561, 'Mergers & Acquisitions'),
(562, 'Business Acquisitions'),
(563, 'Cross Border Mergers'),
(564, 'Divestitures'),
(565, 'LBOs'),
(566, 'Leveraged Acquisitions'),
(567, 'Leveraged Buyouts'),
(568, 'MBOs'),
(569, 'Merger Control'),
(570, 'Merger Reorganization'),
(571, 'Mergers Acquisitions Finance'),
(572, 'Mergers Acquisitions Taxation'),
(573, 'Premerger Notification'),
(574, 'Spin-Offs'),
(575, 'Takeovers'),
(576, 'Military Law'),
(577, 'Military Administrative Law'),
(578, 'Military Base Closures'),
(579, 'Military Base Conversions'),
(580, 'Military Courts Martial'),
(581, 'Military Criminal Law'),
(582, 'Military Housing'),
(583, 'Military Justice'),
(584, 'Military Medical Malpractice'),
(585, 'National Security'),
(586, 'Veterans Appeals'),
(587, 'Veterans Benefits'),
(588, 'Veterans Disability Law'),
(589, 'Veterans Rights'),
(590, 'Natural Resources'),
(591, 'Coal Mining'),
(592, 'Conservation Law'),
(593, 'Drainage and Levee Law'),
(594, 'Forestry Law'),
(595, 'Mine Safety'),
(596, 'Mineral Law'),
(597, 'Mineral Rights'),
(598, 'Mining Law'),
(599, 'Natural Gas'),
(600, 'Oil and Gas'),
(601, 'Oil and Gas Litigation'),
(602, 'Petroleum Law'),
(603, 'Public Land Law'),
(604, 'Riparian Rights'),
(605, 'Timber and Logging Law'),
(606, 'Water Law'),
(607, 'Water Rights'),
(608, 'Occupational Safety & Health'),
(609, 'Industrial Accidents'),
(610, 'Occupational Injuries'),
(611, 'OSHA'),
(612, 'Personal Injury'),
(613, 'Accidents'),
(614, 'Automobile Accidents'),
(615, 'Brain Injury'),
(616, 'Catastrophic Injury'),
(617, 'Dog Bites'),
(618, 'Head Injury'),
(619, 'Motor Vehicle Accidents'),
(620, 'Motorcycle Accidents'),
(621, 'Nursing Home Litigation'),
(622, 'Personal Injury Defense'),
(623, 'Plaintiffs Personal Injury'),
(624, 'Sexual Abuse'),
(625, 'Slip and Fall'),
(626, 'Spinal Injury'),
(627, 'Wrongful Death'),
(628, 'Products Liability'),
(629, 'Automotive Products Liability'),
(630, 'Breast Implant Litigation'),
(631, 'Drug Litigation'),
(632, 'Drug and Medical Device Litigation'),
(633, 'Explosions'),
(634, 'Food Products Liability'),
(635, 'Lemon Law'),
(636, 'Manufacturers Liability'),
(637, 'Pharmaceutical Litigation'),
(638, 'Product Defects'),
(639, 'Products Liability Defense'),
(640, 'Warranty Law'),
(641, 'Professional Liability'),
(642, 'Accountants Liability'),
(643, 'Accountants Malpractice'),
(644, 'Agents and Brokers Liability'),
(645, 'Architects Engineers Liability'),
(646, 'Design Professionals Liability'),
(647, 'Directors and Officers Liability'),
(648, 'Professional Discipline'),
(649, 'Professional Malpractice'),
(650, 'Professional Negligence'),
(651, 'Professional Responsibility'),
(652, 'Real Estate'),
(653, 'Commercial Real Estate'),
(654, 'Condominium Law'),
(655, 'Cooperative Housing Law'),
(656, 'Easements'),
(657, 'Homeowners Association Law'),
(658, 'Real Estate Development'),
(659, 'Real Estate Finance'),
(660, 'Real Estate Foreclosure'),
(661, 'Real Estate Leasing'),
(662, 'Real Estate Litigation'),
(663, 'Real Property'),
(664, 'Residential Real Estate'),
(665, 'Shopping Center Law'),
(666, 'Sports Law'),
(667, 'Amateur Sports'),
(668, 'Auto Racing'),
(669, 'Equestrian Law'),
(670, 'Motor Sports attorneys'),
(671, 'NCAA Regulation'),
(672, 'Sports Agency Law'),
(673, 'Sports Antitrust lawyers'),
(674, 'Sports Contracts'),
(675, 'Sports Injury'),
(676, 'Sports Licensing'),
(677, 'Sports Marketing and Sports Sponsorship'),
(678, 'Securities Law'),
(679, 'Blue Sky Law'),
(680, 'Broker-Dealer Regulation'),
(681, 'Initial Public Offerings'),
(682, 'Insider Trading'),
(683, 'Private Placement'),
(684, 'Public Offerings'),
(685, 'SEC Enforcement'),
(686, 'Securities Arbitration'),
(687, 'Securities Class Actions'),
(688, 'Securities Fraud'),
(689, 'Securities Litigation'),
(690, 'Securities Offerings'),
(691, 'Securities Regulation'),
(692, 'Shareholders Law'),
(693, 'Taxation'),
(694, 'Criminal Taxation'),
(695, 'Estate and Gift Taxation'),
(696, 'Federal Taxation'),
(697, 'Generation Skipping Tax'),
(698, 'Income Tax'),
(699, 'International Taxation'),
(700, 'Local Taxation'),
(701, 'Property Tax'),
(702, 'Sales and Use Tax'),
(703, 'State Taxation'),
(704, 'Tax Appeals'),
(705, 'Tax Audits'),
(706, 'Tax Controversies'),
(707, 'Tax Credits'),
(708, 'Tax Law'),
(709, 'Tax Litigation'),
(710, 'Tax Planning'),
(711, 'Technology & Science'),
(712, 'Biotechnology'),
(713, 'Chemistry'),
(714, 'Computer Law'),
(715, 'Computers and Software'),
(716, 'Information Technology'),
(717, 'Life Sciences'),
(718, 'Nanotechnology'),
(719, 'Semiconductor Technology'),
(720, 'Software Licensing'),
(721, 'Technical Litigation'),
(722, 'Technology Contracts'),
(723, 'Technology Law'),
(724, 'Technology Licensing'),
(725, 'Technology Transfer'),
(726, 'Toxic Torts'),
(727, 'Asbestos Defense'),
(728, 'Asbestos Litigation'),
(729, 'Carbon Monoxide Poisoning'),
(730, 'Chemical Exposure'),
(731, 'Lead Poisoning'),
(732, 'Mesothelioma'),
(733, 'Mold Litigation'),
(734, 'Occupational Disease'),
(735, 'Pesticide Litigation'),
(736, 'Radiation Injury'),
(737, 'Silicosis Litigation'),
(738, 'Toxic Exposure'),
(739, 'Toxic Tort Class Actions'),
(740, 'Toxic Tort Defense'),
(741, 'Transportation'),
(742, 'Cargo Claims'),
(743, 'Carriage of Goods'),
(744, 'Federal Employers Liability Act (FELA)'),
(745, 'Motor Carrier Law'),
(746, 'Motor Carrier Liability'),
(747, 'Railroad Accidents'),
(748, 'Railroad Law'),
(749, 'Railroad Litigation'),
(750, 'Transportation Regulation'),
(751, 'Truck Accidents'),
(752, 'Trucking Law'),
(753, 'Trucking Liability'),
(754, 'Trucking Litigation'),
(755, 'Trusts & Estates'),
(756, 'Asset Protection'),
(757, 'Estate Administration'),
(758, 'Estate Litigation'),
(759, 'Estate Planning'),
(760, 'Estate Settlements'),
(761, 'Family Wealth Transfer'),
(762, 'Fiduciary Law'),
(763, 'Fiduciary Litigation'),
(764, 'Guardianship'),
(765, 'Offshore Trusts'),
(766, 'Powers of Attorney'),
(767, 'Special Needs Trusts'),
(768, 'Trust Administration'),
(769, 'Trust Litigation'),
(770, 'Trust Planning'),
(771, 'Wills & Probate'),
(772, 'Contested Trusts and Estates'),
(773, 'Contested Wills'),
(774, 'Decedents Estates'),
(775, 'Estate Administration'),
(776, 'Estate Planning'),
(777, 'Inheritance Law'),
(778, 'International Probate'),
(779, 'Living Wills'),
(780, 'Missing Heir Searches'),
(781, 'Probate Administration'),
(782, 'Probate Litigation'),
(783, 'Probate Taxation'),
(784, 'Successions'),
(785, 'Will Contests'),
(786, 'White Collar Crime'),
(787, 'Workers Compensation'),
(788, 'Black Lung'),
(789, 'Federal Workers Compensation'),
(790, 'Industrial Insurance'),
(791, 'Workers Compensation Appeals'),
(792, 'Workers Compensation Defense'),
(793, 'Workers Compensation Mediation'),
(794, 'Workers Compensation Self Insurance'),
(795, 'Workers Compensation Subrogation'),
(796, 'Zoning Planning & Land Use'),
(797, 'Cemetery Law'),
(798, 'Environmental Land Use'),
(799, 'Improvement Districts'),
(800, 'Land Conservation'),
(801, 'Land Development'),
(802, 'Land Entitlement'),
(803, 'Land Use Litigation'),
(804, 'Land Use Permitting'),
(805, 'Land Use Regulation'),
(806, 'Rezoning Law'),
(807, 'Special Districts'),
(808, 'Subdivision Law'),
(809, 'Variances'),
(810, 'Water Districts');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `related_type` varchar(15) DEFAULT NULL,
  `related_id` int(11) DEFAULT NULL,
  `sector` varchar(15) DEFAULT NULL,
  `client` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=348 ;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `related_type`, `related_id`, `sector`, `client`) VALUES
(16, 'user', 1, 'goverment', 'The Center'),
(17, 'user', 1, 'goverment', 'A Client'),
(19, 'company', 1, 'goverment', 'Dept of Education'),
(315, 'company', 8, 'private', 'test'),
(314, 'company', 8, 'private', 'MediumFour'),
(146, 'company', 1, 'private', 'MediumFour'),
(205, 'user', 1, 'private', 'Gateway Software Development'),
(204, 'user', 1, 'private', 'Digital Grass'),
(203, 'user', 1, 'private', 'Another Client'),
(147, 'company', 1, 'private', 'MetroMediaWorks'),
(145, 'company', 1, 'private', 'Gateway Software Development'),
(144, 'company', 1, 'private', 'Digital Grass'),
(143, 'company', 1, 'private', 'Another Client'),
(148, 'company', 1, 'public', 'City of Miami Gardens'),
(208, 'user', 1, 'public', 'Test'),
(207, 'user', 1, 'public', 'New Government Client'),
(206, 'user', 1, 'public', 'City of Miami Gardens'),
(344, 'user', 9, 'private', 'MyDrinkTicket'),
(342, 'user', 9, 'private', 'Coldfinger'),
(343, 'user', 9, 'private', 'Digital Grass'),
(313, 'company', 8, 'private', 'Digital Grass'),
(347, 'user', 9, 'public', 'City of West Park'),
(317, 'company', 8, 'public', 'test2'),
(316, 'company', 8, 'public', 'City of Miami Gardens'),
(346, 'user', 9, 'public', 'City of Miami Gardens'),
(345, 'user', 9, 'public', 'City of Atlanta');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `date_added` date NOT NULL,
  `deleted` tinyint(4) NOT NULL,
  `company_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `company_type` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  `num_of_attorneys` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fax` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `years_of_practice` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diversity_statement` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_overview` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diversity_link` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `website` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `workonsite` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `martingale` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `linkedin` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `governmentclearance` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `logo` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `package_type` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`ID`, `date_added`, `deleted`, `company_name`, `company_type`, `date_modified`, `num_of_attorneys`, `phone`, `fax`, `years_of_practice`, `diversity_statement`, `company_overview`, `diversity_link`, `website`, `workonsite`, `martingale`, `linkedin`, `governmentclearance`, `logo`, `package_type`) VALUES
(1, '2014-06-25', 0, 'MetroMediaWorks', 'Government', '2014-09-03 10:59:38', '1 - 25', '9545572801', '', '11 - 15', 'Test diversity statemetn', 'Test company overview', 'http://www.metromediaworks.com', 'http://www.google.com', 'yes', 'http://www.google.com', 'http://www.linkedin.com', 'None', '1_logo_MetroMediaWorksLogoLarge.jpg', NULL),
(7, '2014-08-05', 0, 'Genesis Law', 'Solo Practioner', '2014-08-05 16:33:25', '1 - 25', '786 315-9638', '', '6 - 10', '', '', '', 'www.genesislawpa.com', 'yes', '', '', 'None', NULL, 'Solo'),
(8, '2014-08-11', 0, 'Gateway Software Development TEST Change 2', 'Firm', '2014-11-10 13:21:28', '1 - 25', '9546368298', '', '', 'As prospective law students begin to prepare their applications this summer and fall, undoubtedly many will wonder how to best share their diverse backgrounds and experiences with the school admissions committees. Law school admissions directors seek a varied student body in which peers can learn from one another and contribute unique perspectives to foster discussion.\r\n\r\nKeep in mind, however, that diversity is very broadly defined and is just one factor among many â€“ such as LSAT score, GPA, essays and recommendations â€“ that are considered in admissions decisions. Most law schools allow you to submit an optional diversity or supplemental statement to give you the chance to elaborate further on your background, experiences and unique qualities.', 'As prospective law students begin to prepare their applications this summer and fall, undoubtedly many will wonder how to best share their diverse backgrounds and experiences with the school admissions committees. Law school admissions directors seek a varied student body in which peers can learn from one another and contribute unique perspectives to foster discussion.\r\n\r\nKeep in mind, however, that diversity is very broadly defined and is just one factor among many â€“ such as LSAT score, GPA, essays and recommendations â€“ that are considered in admissions decisions. Most law schools allow you to submit an optional diversity or supplemental statement to give you the chance to elaborate further on your background, experiences and unique qualities.', 'http://gatewaylegal.co', 'http://connectexpandgrow.com', 'yes', '', '', 'None', NULL, 'Platinum'),
(9, '2014-08-14', 0, 'Gateway Software Development', 'Corporate', '2014-08-14 10:00:37', '', '7707782879', '', '', '', 'Gateway Software Development, LLC\r\nGateway Software Development develops diversity focused search engines which facilitate business to business transactions across multiple platforms while providing a seamless and measurable method to track and maintain diversity goals.   There is no single solution for identifying diverse businesses by corporations.  Similarly, conferences, symposia and other meetings can be expensive â€œspeed datingâ€ formats that do not always offer manageable, efficient ways to identity vet or compare companies you wish to do business with.  Our target partners are global businesses who understand that accessing diverse talent as enablers of business growth and success.   Gatewayâ€™s peer vetted virtual platforms allow institutional users of its proprietary technology to participate in an innovative culture that values the power of diversity in a global world. \r\n\r\n', '', 'www.connectexpandgrow.com', '', '', '', 'None', NULL, 'Corporate'),
(10, '2014-08-25', 0, 'Greenberg Traurig', 'Firm', '2014-08-25 13:21:31', '61+', '3055790567', '3059615567', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Gold'),
(11, '2014-09-04', 0, 'Lewis & Thomas, LLP', 'Firm', '2014-09-04 08:53:04', '1 - 25', '(561) 368-7474', '(561) 368-0293', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Corporate');

-- --------------------------------------------------------

--
-- Table structure for table `connections`
--

CREATE TABLE IF NOT EXISTS `connections` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `from_id` int(11) NOT NULL,
  `from_type` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `to_id` int(11) NOT NULL,
  `to_type` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `approved` tinyint(1) NOT NULL,
  `date_added` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `connections`
--

INSERT INTO `connections` (`id`, `from_id`, `from_type`, `to_id`, `to_type`, `approved`, `date_added`) VALUES
(12, 9, 'user', 10, 'user', 1, '2014-09-15 13:29:16'),
(10, 1, 'user', 10, 'user', 1, '2014-09-03 12:29:32'),
(13, 1, 'user', 9, 'user', 1, '2014-09-28 15:39:18'),
(7, 1, 'user', 1, 'user', 1, '2014-09-02 09:27:24');

-- --------------------------------------------------------

--
-- Table structure for table `engagements`
--

CREATE TABLE IF NOT EXISTS `engagements` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `engagement_type` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `related_id` int(11) NOT NULL,
  `engagement_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `company_attorney` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `year` int(10) NOT NULL,
  `month` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `to_user_id` int(11) NOT NULL,
  `approved` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=18 ;

--
-- Dumping data for table `engagements`
--

INSERT INTO `engagements` (`id`, `engagement_type`, `related_id`, `engagement_name`, `description`, `company_attorney`, `year`, `month`, `to_user_id`, `approved`) VALUES
(1, 'company', 1, 'test', 'test', 'test', 1993, 'July', 0, 0),
(2, 'company', 1, 'test', 'test', 'test', 1995, 'June', 0, 0),
(12, 'user', 1, 'Test', 'Test', 'Dante Fillyau', 2007, 'June', 9, 1),
(4, 'user', 1, 'Engagement in the Future', 'Engagement in the Future Engagement in the Future Engagement in the Future Engagement in the Future Engagement in the Future Engagement in the Future Engagement in the Future Engagement in the Future Engagement in the Future ', 'Company ', 0, '', 0, 0),
(5, 'user', 1, 'Engagement ', 'Engagement in the Future Engagement in the Future Engagement in the Future Engagement in the Future Engagement in the Future Engagement in the Future Engagement in the Future ', 'Attorney #45', 2015, 'April', 0, 0),
(6, 'company', 0, 'test', 'test', 'test', 1993, 'March', 0, 0),
(7, 'user', 1, 'test', 'test', 'test', 1992, 'February', 0, 0),
(8, 'company', 8, 'MediumFour Corporate', 'Gateway Software Development develops diversity focused search engines which facilitate business to business transactions across multiple platforms while providing a seamless and measurable method to track and maintain diversity goals. ', 'MediumFour,LLC ', 2006, 'March', 0, 0),
(9, 'user', 1, 'Test', 'Test', 'Chris Caputo', 2014, 'January', 1, 0),
(11, 'user', 9, 'GSD Significant Engagement', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce at dictum dolor. Nam ultricies volutpat feugiat. Integer fermentum dolor mauris, nec tristique turpis aliquet eget. Nullam orci mauris,', 'Patrice Lewis', 2009, 'March', 0, 0),
(13, 'user', 9, 'GSD Signficant Engagement', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc pretium, quam a tristique tempor, lacus diam congue dolor, vitae hendrerit metus libero quis ante. Suspendisse sit amet sagittis quam. Ut id tempus ex, hendrerit mattis neque orci aliquam.', 'MetroMedia Works', 2002, 'February', 0, 0),
(14, 'user', 9, 'GSD Significant Engagement', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc pretium, quam a tristique tempor, lacus diam congue dolor, vitae hendrerit metus libero quis ante. Suspendisse sit amet sagittis quam. Ut id tempus ex, hendrerit mattis neque orci aliquam.', 'Coldfinger Studios', 2006, 'August', 0, 0),
(15, 'user', 9, 'GSD Significant Engagement', 'And there''s a fine line between love and hate you seeCame way too late, but baby I''m on it..', 'Patrice Lewis', 1999, 'August', 0, 0),
(16, 'user', 9, 'GSD Significant Engagement', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce accumsan, odio eget sagittis fermentum, dui ligula porttitor mi, a tempor nunc urna sed massa. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos massa nunc.', 'MediumFour', 2005, 'August', 0, 0),
(17, 'user', 9, 'GSD Significant Engagement', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce accumsan, odio eget sagittis fermentum, dui ligula porttitor mi, a tempor nunc urna sed massa. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos massa nunc.', 'MetroMedia Works', 2010, 'November', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE IF NOT EXISTS `language` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `language_type` varchar(15) DEFAULT NULL,
  `related_id` int(11) DEFAULT NULL,
  `language` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=721 ;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`id`, `language_type`, `related_id`, `language`) VALUES
(678, 'user', 1, 'Mandarin'),
(626, 'company', 1, 'Cantonese'),
(625, 'company', 1, 'Arabic'),
(677, 'user', 1, 'Japanese'),
(676, 'user', 1, 'Farsi'),
(675, 'user', 1, 'French'),
(674, 'user', 1, 'English'),
(673, 'user', 1, 'Cantonese'),
(536, 'user', 8, 'English'),
(720, 'user', 9, 'Japanese'),
(719, 'user', 9, 'English');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `message_type` varchar(10) DEFAULT NULL,
  `from_id` int(11) DEFAULT NULL,
  `to_id` int(11) DEFAULT NULL,
  `related_rfp` int(11) DEFAULT NULL,
  `body` text,
  `date_sent` datetime DEFAULT NULL,
  `read` tinyint(1) DEFAULT '0',
  `deleted` tinyint(1) DEFAULT '0',
  `subject` varchar(65) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=63 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `message_type`, `from_id`, `to_id`, `related_rfp`, `body`, `date_sent`, `read`, `deleted`, `subject`) VALUES
(19, 'rfpaward', 1, 1, 12, 'test', NULL, 0, 0, NULL),
(20, 'mail', 1, 1, 0, 'test', NULL, 0, 1, NULL),
(21, 'mail', 1, 1, 0, 'test', '2014-07-23 11:58:40', 0, 1, NULL),
(22, 'mail', 1, 1, 0, 'test', '2014-07-23 12:13:47', 0, 1, NULL),
(23, 'mail', 1, 1, 0, 'message', '2014-07-23 12:17:16', 0, 1, 'subject'),
(24, 'mail', 1, 1, 0, 'my reply', '2014-07-23 12:19:17', 0, 1, ''),
(25, 'mail', 1, 1, 0, 'test', '2014-07-23 12:20:02', 0, 1, 'RE: subject'),
(26, 'mail', 1, 1, 0, 'hello', '2014-07-23 12:22:06', 0, 0, 'hello'),
(27, 'rfpaward', 2, 1, 13, 'test', '2014-07-23 14:00:50', 0, 0, ''),
(28, 'rfpaward', 1, 1, 12, 'you have been awarded', '2014-07-23 14:01:10', 0, 0, ''),
(29, 'mail', 1, 1, 0, 'test', '2014-07-23 14:14:59', 0, 0, 'RE: hello'),
(30, 'mail', 9, 10, 0, 'Going through the bugs in the system.', '2014-08-25 21:44:38', 0, 1, 'Test Message'),
(31, 'mail', 9, 1, 0, 'Hey Chris!! ', '2014-08-26 09:32:29', 0, 0, 'Test Message from Dante'),
(32, 'mail', 1, 9, 0, 'test', '2014-08-26 09:32:52', 0, 1, 'RE: Test Message from Dante'),
(33, 'mail', 10, 9, 0, 'Well hey that worked.  Is it possible to have the system forward the message to the email on file?', '2014-09-02 17:25:15', 0, 0, 'RE: Test Message'),
(34, 'rfpapply', 10, 9, 16, 'FROM PREVIOUS EXPERIENCE, WHAT MAKES YOUR COMPANY THE BEST CANDIDATE FOR THIS REQUEST? <br>I am the best<br><br>PLEASE GIVE US SOME CASE EXAMPLES THAT RELATE DIRECTLY TO THIS REQUEST. <br>Because I am a goddess<br><br>', '2014-09-02 17:25:59', 0, 0, NULL),
(35, 'mail', 10, 9, 0, 'It does not track messages sent.', '2014-09-02 17:26:59', 0, 0, 'RE: Test Message'),
(36, 'rfpapply', 9, 9, 19, 'FROM PREVIOUS EXPERIENCE, WHAT MAKES YOUR COMPANY THE BEST CANDIDATE FOR THIS REQUEST? <br>Because I am Just super<br><br>PLEASE GIVE US SOME CASE EXAMPLES THAT RELATE DIRECTLY TO THIS REQUEST. <br>Again I am super.<br><br>', '2014-09-03 10:20:37', 0, 0, NULL),
(37, 'mail', 1, 1, 0, 'test', '2014-09-08 13:31:29', 0, 1, 'RE: RE: subject'),
(38, 'mail', 10, 9, 0, 'Great!', '2014-09-11 11:38:13', 0, 1, 'RE: Test Message'),
(39, 'rfpapply', 10, 9, 19, 'FROM PREVIOUS EXPERIENCE, WHAT MAKES YOUR COMPANY THE BEST CANDIDATE FOR THIS REQUEST? <br>Because<br><br>PLEASE GIVE US SOME CASE EXAMPLES THAT RELATE DIRECTLY TO THIS REQUEST. <br>Why not<br><br>', '2014-09-11 11:42:42', 0, 1, NULL),
(40, 'mail', 9, 10, 0, 'Testing the sent messages', '2014-09-11 11:47:26', 0, 1, 'Testing the Sent Messages'),
(41, 'mail', 10, 9, 0, 'There is a delay- a long one.  Is that to be expected because of the amount of data passing through.  My sent image just appeared, but my message button still reads 2 unread messages.', '2014-09-11 11:50:33', 0, 0, 'RE: Test Message'),
(42, 'mail', 9, 1, 0, 'Testing Sent Messages', '2014-09-11 12:16:46', 0, 1, 'RE: RE: Test Message from Dante'),
(43, 'mail', 9, 10, 0, 'He is working on it now. Still testing. ', '2014-09-11 12:18:28', 0, 1, 'RE: RE: Test Message'),
(44, 'mail', 10, 9, 0, 'Thanks!', '2014-09-11 12:22:58', 0, 0, 'RE: RE: RE: Test Message'),
(45, 'mail', 9, 10, 0, 'testing', '2014-09-11 12:35:06', 0, 1, 'RE: RE: RE: RE: Test Message'),
(46, 'mail', 9, 10, 0, 'Let me know what time this appears on your message on your side. Doing a speed test. Thanks. ', '2014-09-11 13:37:40', 0, 1, 'Time is 2:35 pm'),
(47, 'mail', 1, 1, 0, 'test', '2014-09-24 18:57:07', 0, 0, 'test'),
(48, 'rfpaward', 9, 9, 19, 'You have won this RFP', '2014-10-01 12:09:05', 0, 0, ''),
(49, 'rfpapply', 1, 9, 19, 'FROM PREVIOUS EXPERIENCE, WHAT MAKES YOUR COMPANY THE BEST CANDIDATE FOR THIS REQUEST? <br>test<br><br>PLEASE GIVE US SOME CASE EXAMPLES THAT RELATE DIRECTLY TO THIS REQUEST. <br>test<br><br>', '2014-10-01 17:14:10', 0, 0, NULL),
(50, 'rfpapply', 1, 1, 21, 'FROM PREVIOUS EXPERIENCE, WHAT MAKES YOUR COMPANY THE BEST CANDIDATE FOR THIS REQUEST? <br>test<br><br>PLEASE GIVE US SOME CASE EXAMPLES THAT RELATE DIRECTLY TO THIS REQUEST. <br>test<br><br>', '2014-10-01 17:22:13', 0, 0, NULL),
(51, 'rfpaward', 1, 1, 21, 'test', '2014-10-01 17:30:35', 0, 1, ''),
(52, 'rfpapply', 1, 1, 21, 'FROM PREVIOUS EXPERIENCE, WHAT MAKES YOUR COMPANY THE BEST CANDIDATE FOR THIS REQUEST? <br>test<br><br>PLEASE GIVE US SOME CASE EXAMPLES THAT RELATE DIRECTLY TO THIS REQUEST. <br>test<br><br>', '2014-10-01 17:57:42', 0, 0, NULL),
(53, 'rfpaward', 1, 1, 21, 'test', '2014-10-01 18:18:55', 0, 1, ''),
(54, 'rfpaward', 1, 1, 21, 'test', '2014-10-01 18:20:26', 0, 1, ''),
(55, 'rfpaward', 1, 1, 21, 'you won!', '2014-10-01 18:20:46', 0, 0, ''),
(56, 'rfpaward', 1, 9, 19, 'Congrats!', '2014-10-02 09:47:08', 0, 0, ''),
(57, 'rfpaward', 1, 9, 19, 'Chris you have been awarded this RFP. Let me know when you want to talk?', '2014-10-13 12:30:39', 0, 0, ''),
(58, 'rfpapply', 9, 9, 19, 'FROM PREVIOUS EXPERIENCE, WHAT MAKES YOUR COMPANY THE BEST CANDIDATE FOR THIS REQUEST? <br>Because<br><br>PLEASE GIVE US SOME CASE EXAMPLES THAT RELATE DIRECTLY TO THIS REQUEST. <br>Because<br><br>', '2014-10-27 21:26:50', 0, 0, NULL),
(59, 'rfpaward', 9, 9, 19, 'You have been rewarded', '2014-10-27 21:28:16', 0, 0, ''),
(60, 'mail', 9, 10, 0, 'Sending a test Message', '2014-10-27 21:32:10', 0, 0, 'Test Message'),
(61, 'rfpapply', 9, 9, 19, 'FROM PREVIOUS EXPERIENCE, WHAT MAKES YOUR COMPANY THE BEST CANDIDATE FOR THIS REQUEST? <br>TEST because I can<br><br>PLEASE GIVE US SOME CASE EXAMPLES THAT RELATE DIRECTLY TO THIS REQUEST. <br>TEST because  I can<br><br>', '2014-11-10 13:10:10', 0, 0, NULL),
(62, 'rfpaward', 1, 9, 19, 'We Will be in contact in the next 48 hours via telephone.', '2014-11-10 13:14:45', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `practicearea`
--

CREATE TABLE IF NOT EXISTS `practicearea` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `practicearea_type` varchar(15) DEFAULT NULL,
  `related_id` int(11) DEFAULT NULL,
  `practicearea_id` int(75) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=723 ;

--
-- Dumping data for table `practicearea`
--

INSERT INTO `practicearea` (`id`, `practicearea_type`, `related_id`, `practicearea_id`) VALUES
(562, 'company', 1, 9),
(561, 'company', 1, 7),
(560, 'company', 1, 2),
(608, 'user', 1, 6),
(607, 'user', 1, 5),
(606, 'user', 1, 1),
(499, 'user', 8, 33),
(498, 'user', 8, 22),
(497, 'user', 8, 21),
(496, 'user', 8, 11),
(495, 'user', 8, 10),
(418, 'company', 7, 33),
(417, 'company', 7, 22),
(416, 'company', 7, 21),
(415, 'company', 7, 11),
(414, 'company', 7, 10),
(722, 'user', 9, 33),
(721, 'user', 9, 17),
(720, 'user', 9, 12),
(702, 'company', 8, 72),
(701, 'company', 8, 55),
(700, 'company', 8, 53),
(699, 'company', 8, 31),
(698, 'company', 8, 25),
(697, 'company', 8, 12),
(719, 'user', 9, 6);

-- --------------------------------------------------------

--
-- Table structure for table `practicearea_list`
--

CREATE TABLE IF NOT EXISTS `practicearea_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(75) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=78 ;

--
-- Dumping data for table `practicearea_list`
--

INSERT INTO `practicearea_list` (`id`, `name`) VALUES
(1, 'Administrative Law'),
(2, 'Admiralty/Maritime Law'),
(3, 'Agricultural Law'),
(4, 'Antitrust Law'),
(5, 'Appellate Practice'),
(6, 'Arbitration'),
(7, 'Asset Protection'),
(8, 'Aviation Law'),
(9, 'Banking Law'),
(10, 'Bankruptcy Law'),
(11, 'Business Law'),
(12, 'Civil Rights'),
(13, 'Civil Trial Practice'),
(14, 'Class Actions'),
(15, 'Commercial Law'),
(16, 'Commercial Litigation'),
(17, 'Communications Law'),
(18, 'Computer Law'),
(19, 'Constitutional Law'),
(20, 'Construction Law'),
(21, 'Corporate Law'),
(22, 'Creditors Rights'),
(23, 'Criminal Trial Practice'),
(24, 'Education Law'),
(25, 'Elder Law'),
(26, 'Eminent Domain'),
(27, 'Employment Benefits Law'),
(28, 'Energy Law'),
(29, 'Environmental Law'),
(30, 'Family Law'),
(31, 'Franchise Law'),
(32, 'Gaming Law'),
(33, 'General Practice'),
(34, 'Government Contracts'),
(35, 'Government Relations'),
(36, 'Guardianship and Conservatorship'),
(37, 'Health Care Law'),
(38, 'Immigration And Naturalization'),
(39, 'Insurance Defense'),
(40, 'Insurance Law'),
(41, 'Intellectual Property Law'),
(42, 'International Business Law'),
(43, 'International Trade Law'),
(44, 'Labor And Employment Law'),
(45, 'Land Use Law'),
(46, 'Legal Malpractice'),
(47, 'Legislative Practice'),
(48, 'Libel Slander and Defamation'),
(49, 'Medical Malpractice'),
(50, 'Medicare and Medicaid'),
(51, 'Mergers And Acquisitions'),
(52, 'Military Law'),
(53, 'Municipal And Zoning Law'),
(54, 'Municipal Bond/Public Authority Financing'),
(55, 'Natural Resources Law'),
(56, 'Nonprofit And Tax Exempt Organizations'),
(57, 'Occupational Safety and Health'),
(58, 'Oil And Gas Law<option value="65">Partnership Law'),
(59, 'Patent Trademark Copyright And Unfair Competition'),
(60, 'Pension And Profit Sharing'),
(61, 'Personal Injury'),
(62, 'Premises Liability'),
(63, 'Product Liability Law'),
(64, 'Professional Liability'),
(65, 'Public Utilities Law'),
(66, 'Real Estate Law'),
(67, 'Securities Law'),
(68, 'Social Security'),
(69, 'Sports And Entertainment Law'),
(70, 'Tax Law'),
(71, 'Telecommunications Law'),
(72, 'Toxic Torts'),
(73, 'Trademark Copyright And Unfair Competition'),
(74, 'Transportation Law'),
(75, 'Trusts And Estates Wills And Probate'),
(76, 'White Collar Crime'),
(77, 'Workers Compensation');

-- --------------------------------------------------------

--
-- Table structure for table `press`
--

CREATE TABLE IF NOT EXISTS `press` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `press_type` varchar(15) DEFAULT NULL,
  `related_id` int(11) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `publication` varchar(50) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `press`
--

INSERT INTO `press` (`id`, `press_type`, `related_id`, `title`, `publication`, `description`, `date`) VALUES
(1, 'company', 1, 'test', '', 'test', '2015-05-02'),
(2, 'company', 1, 'test', '', 'test', '2015-05-02'),
(3, 'company', 1, 'test', '', 'test', '3232-05-02'),
(4, 'company', 1, 'test', 'some journal', 'test', '2014-05-02'),
(5, 'user', 1, 'test', 'test', 'test', '2014-05-02'),
(6, 'user', 1, 'Hotspots', 'This is a description of the publication. This is ', 'This is a general description. This is a general description. This is a general description. This is a general description. This is a general description. This is a general description. This is a general description. This is a general description. Th', '2014-12-12'),
(7, 'company', 8, 'Shocase Magazine', 'Entertainment and Social Life', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non lectus sit amet metus venenatis cursus. Integer diam est, sagittis nec elit eu, ullamcorper consectetur sem. Fusce eget lacinia neque, nec consequat nisi. Morbi nec lorem non purus ull', '2010-02-01'),
(8, 'user', 8, 'GSD Today', 'Gateway Software Development Annual Newsletter', 'Gateway Software Development Annual Newsletter, Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce at dictum dolor. Nam ultricies volutpat feugiat. Integer fermentum dolor mauris, nec tristique turpis aliquet eget. Nullam orci mauris.', '2014-01-14');

-- --------------------------------------------------------

--
-- Table structure for table `rfp`
--

CREATE TABLE IF NOT EXISTS `rfp` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `date_added` date NOT NULL,
  `deleted` tinyint(4) NOT NULL,
  `rfp_title` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `bar_admittance_state` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `number_of_attorneys` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `job_type` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `job_category` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `rfp_description` text COLLATE utf8_unicode_ci NOT NULL,
  `job_timeframe` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `rfp_submission_deadline` date NOT NULL,
  `special_certifications` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `minority_certifications` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `language` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `company_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `years_of_practice` varchar(35) COLLATE utf8_unicode_ci NOT NULL,
  `diversity` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `practice_areas` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rfp_project_start` text COLLATE utf8_unicode_ci NOT NULL,
  `rfp_project_end` text COLLATE utf8_unicode_ci NOT NULL,
  `ethnicity` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=24 ;

--
-- Dumping data for table `rfp`
--

INSERT INTO `rfp` (`ID`, `date_added`, `deleted`, `rfp_title`, `bar_admittance_state`, `number_of_attorneys`, `job_type`, `job_category`, `rfp_description`, `job_timeframe`, `rfp_submission_deadline`, `special_certifications`, `minority_certifications`, `language`, `company_id`, `user_id`, `years_of_practice`, `diversity`, `gender`, `practice_areas`, `rfp_project_start`, `rfp_project_end`, `ethnicity`) VALUES
(19, '0000-00-00', 0, 'Test RFP - Dante Fillyau', 'CO,FL,TN,WA', 'Any Number', '', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc efficitur, tellus at maximus aliquet, ante orci ornare purus, sit amet ultrices quam odio mollis lacus. Proin dignissim consequat mollis. Nam bibendum mauris ac turpis commodo, sit amet maximus metus pharetra. Etiam eros augue, egestas in blandit et, viverra a arcu. Quisque consectetur bibendum libero quis hendrerit. Integer vehicula non elit eget tempus. Nam finibus nulla ut diam consequat blandit. Quisque ligula risus, sollicitudin a libero et, consectetur suscipit sapien. Phasellus sit amet semper sapien, et interdum felis. Integer porta sem et tortor tempor, vel pharetra tellus pharetra. Sed congue cursus ante sit amet placerat. Nullam cursus magna neque, ac luctus ipsum consectetur quis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam bibendum, sapien et egestas imperdiet, diam ex placerat augue, sed vestibulum ex nibh ut nunc. Nulla nulla tortor, fermentum nec lobortis non, egestas quis nisi.\r\n', '', '2014-09-26', '', '', '', 8, 9, 'Any Year', '', 'N/A', '57,64,71,75', '2014-10-01', '2014-10-31', ''),
(21, '0000-00-00', 0, 'Test', '', '', '', '', '', '', '0000-00-00', '', '', '', 1, 1, '', '', '', '', '', '', ''),
(22, '0000-00-00', 0, 'MediumFour RFP', 'IL,IN,NM', 'Any Number', '', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque a facilisis nisl, nec mattis leo. Proin et auctor diam, nec laoreet ante. Cras ultricies tempor sapien, non tincidunt metus tempus fermentum. Quisque ultrices in dui sed blandit. Aenean a massa sollicitudin, volutpat nibh et, vestibulum orci. Nulla ac diam quis arcu elementum vehicula ac vel massa. Etiam eget arcu commodo, imperdiet nisi iaculis, vestibulum urna. Fusce sed semper ipsum. Donec et leo urna. Nunc sagittis pharetra lacus, auctor cursus massa aliquam et.\r\n', '', '2014-12-31', '', '', '', 8, 9, '11 - 15', 'WMBE,LGBT,Disabled Veteran', 'N/A', '21,63,69', '2015-02-09', '2015-04-21', ''),
(23, '0000-00-00', 0, 'MediumFour RFP', 'NJ,OH', '25 - 60', '', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ac sem at metus imperdiet pharetra at quis lorem. Vivamus ut diam malesuada, bibendum dolor vitae, dictum mi. Mauris blandit luctus cursus. Vestibulum imperdiet, lectus sit amet malesuada tristique, magna felis maximus elit, quis sagittis arcu tortor sit amet erat. Donec maximus nisl eu urna sodales cursus. Ut egestas neque rutrum sagittis viverra. Sed commodo lectus vel turpis congue maximus. Nullam nec enim ut magna porta interdum. Cras suscipit iaculis arcu a sagittis. Pellentesque blandit purus vulputate lectus sollicitudin, quis accumsan diam iaculis. Duis a est ut leo cursus aliquet at ut elit. Curabitur aliquam suscipit neque ut mattis. Aliquam congue sem nulla, non pretium libero aliquam eu.\r\n', '', '2015-03-13', '', '', '', 8, 9, '6 - 10', 'LGBT,Disabled Veteran', 'N/A', '4,8', '2014-11-28', '2015-04-03', '');

-- --------------------------------------------------------

--
-- Table structure for table `rfp_qa`
--

CREATE TABLE IF NOT EXISTS `rfp_qa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rfp_id` int(11) DEFAULT NULL,
  `question_id` int(11) DEFAULT NULL,
  `body` text,
  `user_id` int(11) DEFAULT NULL,
  `date_added` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `rfp_qa`
--

INSERT INTO `rfp_qa` (`id`, `rfp_id`, `question_id`, `body`, `user_id`, `date_added`) VALUES
(3, 7, NULL, 'is it for any ehtnicity', 1, NULL),
(4, 7, NULL, 'what is the pay', 1, '2014-07-15 13:10:02'),
(5, 7, 3, 'yes', 1, '2014-07-15 13:18:10'),
(6, 12, NULL, 'tell me more', 1, '2014-07-15 14:25:50'),
(7, 12, 6, 'this is my magical reply', 1, '2014-07-15 14:26:08'),
(8, 12, NULL, 'second question', 1, '2014-07-15 14:26:24'),
(9, 12, NULL, 'what is this about', 1, '2014-07-15 14:47:39'),
(10, 12, 9, 'here is my response', 1, '2014-07-15 14:47:56');

-- --------------------------------------------------------

--
-- Table structure for table `speaking`
--

CREATE TABLE IF NOT EXISTS `speaking` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `speaking_type` varchar(15) DEFAULT NULL,
  `related_id` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `date_month` varchar(15) DEFAULT NULL,
  `date_year` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `speaking`
--

INSERT INTO `speaking` (`id`, `speaking_type`, `related_id`, `name`, `location`, `date`, `date_month`, `date_year`) VALUES
(1, 'company', 1, 'TEst', 'Test', '0000-00-00', NULL, NULL),
(2, 'company', 1, 'Test Again', 'test', '1981-12-01', NULL, NULL),
(11, 'users', 1, 'test', 'test', NULL, 'February', '2014'),
(10, 'company', 1, 'Test', 'test', NULL, 'February', '2012'),
(5, 'user', 1, 'Another Event', 'West Palm Beach', '2014-10-10', NULL, NULL),
(6, 'user', 1, 'Halloween 2015', 'South Florida', '2015-10-31', NULL, NULL),
(7, 'user', 1, 'Halloween 2016', 'Fort Lauderdale, FL', '2016-10-31', NULL, NULL),
(8, 'user', 1, 'Speaking Engagement 2017', 'Miami, FL', '2013-10-10', NULL, NULL),
(9, 'company', 1, 'LinkedIn For Seniors', 'Pride Center', NULL, 'January', '2014'),
(12, 'company', 8, 'MediumFour Awards', 'Miami, Florida', NULL, 'June', '2010'),
(13, 'user', 9, 'GSD Conference', 'Miami, Florida', NULL, 'January', '2014'),
(14, 'company', 8, 'GSD Speaking 2', 'Tallahassee, Florida', NULL, 'May', '2011'),
(15, 'company', 8, 'GSD Speaking Engagement 3', 'Atlanta, GA', NULL, 'November', '2007'),
(16, 'company', 8, 'GSD Speaking 4', 'Chicago, IL', NULL, 'November', '2013'),
(17, 'company', 8, 'GSD Speaking 5', 'Atlantic City, NJ', NULL, 'November', '2010'),
(18, 'company', 8, 'GSD Speaking 6', 'Miami, Florida', NULL, 'November', '2012'),
(19, 'user', 9, 'GSD Speaking 2', 'Miami, Florida ', NULL, 'October', '2004'),
(20, 'user', 9, 'GSD Speaking 3', 'Chicago, IL', NULL, 'March', '2007'),
(21, 'user', 9, 'GSD Speaking 4', 'New York, New York', NULL, 'November', '2013'),
(22, 'user', 9, 'GSD Speaking 5', 'Los Angeles, CA', NULL, 'August', '2011'),
(23, 'user', 9, 'GSD Speaking 6', 'Phoenix, AZ', NULL, 'August', '2012');

-- --------------------------------------------------------

--
-- Table structure for table `temp_users`
--

CREATE TABLE IF NOT EXISTS `temp_users` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `bustype` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prefix` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `middle_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `suffix` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `partnershipinfo` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `law_firm` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `num_of_attorneys` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `street_address` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `street_address2` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `zip` int(5) NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `fax` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `office_locations` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `practice_areas` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `bar_states` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `clientsp1` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `clientsp2` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `clientsp3` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `clientsp4` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `clientsp5` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `clientsp6` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `clientsg1` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `clientsg2` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `clientsg3` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `clientsg4` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `clientsg5` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `clientsg6` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `sigengage1` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `sigengage2` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `sigengage3` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `sigengage4` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `sigengage5` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `sigengage6` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `years_in_practice` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `law_school` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `diversity_statement` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `diversity_link` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `min_cert` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `speccert1` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `speccert2` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `speccert3` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `speccert4` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `speccert5` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `speccert6` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `prof_assoc` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `martindale_member` tinyint(1) NOT NULL,
  `gov_clear` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `awards1` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `awards2` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `awards3` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `awards4` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `awards5` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `awards6` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `speaking1` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `speaking2` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `speaking3` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `speaking4` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `speaking5` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `speaking6` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `pubpress1` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `pubpress2` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `pubpress3` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `pubpress4` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `pubpress5` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `pubpress6` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `languages` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `engage1` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `engage2` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `engage3` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `engage4` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `engage5` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `engage6` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `bio` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `work_on_site` tinyint(1) NOT NULL,
  `pkg` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=79 ;

--
-- Dumping data for table `temp_users`
--

INSERT INTO `temp_users` (`id`, `bustype`, `email`, `password`, `key`, `prefix`, `first_name`, `middle_name`, `last_name`, `suffix`, `partnershipinfo`, `law_firm`, `num_of_attorneys`, `street_address`, `street_address2`, `city`, `state`, `zip`, `phone`, `fax`, `office_locations`, `practice_areas`, `bar_states`, `clientsp1`, `clientsp2`, `clientsp3`, `clientsp4`, `clientsp5`, `clientsp6`, `clientsg1`, `clientsg2`, `clientsg3`, `clientsg4`, `clientsg5`, `clientsg6`, `sigengage1`, `sigengage2`, `sigengage3`, `sigengage4`, `sigengage5`, `sigengage6`, `years_in_practice`, `law_school`, `diversity_statement`, `diversity_link`, `min_cert`, `speccert1`, `speccert2`, `speccert3`, `speccert4`, `speccert5`, `speccert6`, `prof_assoc`, `martindale_member`, `gov_clear`, `awards1`, `awards2`, `awards3`, `awards4`, `awards5`, `awards6`, `speaking1`, `speaking2`, `speaking3`, `speaking4`, `speaking5`, `speaking6`, `pubpress1`, `pubpress2`, `pubpress3`, `pubpress4`, `pubpress5`, `pubpress6`, `languages`, `engage1`, `engage2`, `engage3`, `engage4`, `engage5`, `engage6`, `bio`, `work_on_site`, `pkg`) VALUES
(17, 'law_firm', 'chris@metromediaworks.com', '7ae29c9cd4ac757fc4ba7a7aa30fd2dc', '52ee7d2423d7c88ec166329e78c4ad0c', 'none', '', '', '', 'none', 'associate', '', '1-25', '', '', '', 'alabama', 0, '', '', '', '0', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0-5', '', '', '', '0', '', '', '', '', '', '', '0', 0, 'none', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', '', '', '', '', '', '', '', 0, ''),
(18, 'corporation', 'dante@mediumfour.com', '854c17986f74758f35d9898a71f04773', '15b80dc3d19415008687a63a72263836', 'none', 'Dante''', '', 'Fillyau', 'none', 'associate', 'Dante & Mike', '1-25', '690 NE 13th Street', 'Suite 104', 'Ft. Lauderdale', 'florida', 33304, '9547651474', '', 'United States', 'bankruptcy-related-litigation', 'goergia', 'Test 1', 'Test 2', '', '', '', '', 'Test 4', 'Test 5', '', '', '', '', 'Test 6', 'Test 7', 'Test 8', '', '', '', '0-5', 'Dante & Mike Law School', 'My diversity Statement from my web site', 'http://www.mikedante.com', 'WMBE', '', '', '', '', '', '', '0', 0, 'secret', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', '', '', '', '', '', '', 'My bio ', 0, ''),
(19, 'corporation', 'chris@metromediaworks.com', '7311b96816a0a255657bc51a28a10c56', 'd792948b20140d93a21a99c5c01ff85b', 'none', 'Chris', '', 'Caputo', 'none', 'associate', '', '1-25', '2312 Wilton Drive', '', 'Wilton Manors', 'florida', 33305, '9545572801', '', 'United States', '0', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0-5', '', '', '', '0', '', '', '', '', '', '', '0', 0, 'none', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', '', '', '', '', '', '', '', 0, ''),
(64, 'law_firm', 'mizumedia@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '84bbeb39d1f5ef444e54c106fbc2dcd2', 'mr.', 'Korrenti', '', 'Mayweather', 'esq', 'associate', '', '1-25', '4718 Russwood Avenue', '', 'Stone Mountain', 'georgia', 30083, '6783900841', '', 'United States', '0', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0-5', '', '', '', 'MBE', '', '', '', '', '', '', 'nblsa', 0, 'ts/sci', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'english', '', '', '', '', '', '', 'my bio', 0, ''),
(65, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '0'),
(66, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '0'),
(67, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '0'),
(68, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '0'),
(69, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '0'),
(70, 'law_firm', 'mizumedia@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '3b2e66290a365176fbc70005abd05c82', 'mr.', 'Korrenti', '', 'Mayweather', 'esq', 'associate', '', '1-25', '4718 Russwood Avenue', '', 'Stone Mountain', 'georgia', 30083, '6783900841', '', 'United States', '0', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0-5', '', '', '', 'MBE', '', '', '', '', '', '', 'nblsa', 0, 'ts/sci', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'english', '', '', '', '', '', '', 'my bio', 0, ''),
(71, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '0'),
(72, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '0'),
(73, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '0'),
(74, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '0'),
(75, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '0'),
(76, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '0'),
(77, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '0'),
(78, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '0');

-- --------------------------------------------------------

--
-- Table structure for table `users_old`
--

CREATE TABLE IF NOT EXISTS `users_old` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `bustype` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prefix` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `middle_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `suffix` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `partnershipinfo` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `law_firm` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `num_of_attorneys` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `street_address` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `street_address2` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `zip` int(5) NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `fax` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `office_locations` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `practice_areas` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `bar_states` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `clientsp1` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `clientsp2` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `clientsp3` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `clientsp4` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `clientsp5` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `clientsp6` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `clientsg1` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `clientsg2` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `clientsg3` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `clientsg4` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `clientsg5` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `clientsg6` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `sigengage1` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `sigengage2` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `sigengage3` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `sigengage4` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `sigengage5` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `sigengage6` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `years_in_practice` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `law_school` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `diversity_statement` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `diversity_link` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `min_cert` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `speccert1` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `speccert2` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `speccert3` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `speccert4` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `speccert5` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `speccert6` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `prof_assoc` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `martindale_member` tinyint(1) NOT NULL,
  `gov_clear` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `awards1` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `awards2` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `awards3` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `awards4` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `awards5` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `speaking1` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `speaking2` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `speaking3` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `speaking4` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `speaking5` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `speaking6` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `pubpress1` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `pubpress2` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `pubpress3` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `pubpress4` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `pubpress5` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `pubpress6` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `languages` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `engage1` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `engage2` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `engage3` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `engage4` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `engage5` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `engage6` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `bio` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `work_on_site` tinyint(1) NOT NULL,
  `pkg` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE IF NOT EXISTS `user_profile` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `date_added` date NOT NULL,
  `date_modified` date NOT NULL,
  `deleted` tinyint(4) NOT NULL DEFAULT '0',
  `prefix` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `suffix` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `fax` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `area_of_practice` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bar_admittance_state` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `years_of_practice` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `law_school` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `bio` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `client_private_sector` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `clients_government_sector` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `significant_engagements` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `minority_certifications` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `professional_associations` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `special_certifications` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mh_membership_verify` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `governmentclearance` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `awards_honors` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `speaking_engagements` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `publication_press` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `languages` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `workonsite` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `company_id` int(11) NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `middle_name` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ethnicity` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `martingale` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location_id` int(11) DEFAULT NULL,
  `package_type` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`ID`, `date_added`, `date_modified`, `deleted`, `prefix`, `last_name`, `first_name`, `email`, `suffix`, `title`, `gender`, `phone`, `fax`, `area_of_practice`, `bar_admittance_state`, `years_of_practice`, `law_school`, `bio`, `client_private_sector`, `clients_government_sector`, `significant_engagements`, `minority_certifications`, `professional_associations`, `special_certifications`, `mh_membership_verify`, `governmentclearance`, `awards_honors`, `speaking_engagements`, `publication_press`, `languages`, `website`, `workonsite`, `company_id`, `password`, `middle_name`, `ethnicity`, `linkedin`, `martingale`, `image`, `location_id`, `package_type`) VALUES
(1, '2014-06-25', '2014-09-26', 0, 'Mr.', 'Caputo', 'Chris', 'chris@metromediaworks.com', 'PhD', 'Partner', 'Male', '9545572801', '9545572801', '', '', '11 - 15', 'This is the name of the Law School', 'Test Bio for this user. Test Bio for this user. Test Bio for this user. Test Bio for this user. Test Bio for this user. Test Bio for this user. Test Bio for this user. Test Bio for this user. Test Bio for this user. Test Bio for this user. Test Bio for this user. Test Bio for this user. Test Bio for this user. Test Bio for this user. Test Bio for this user. Test Bio for this user. Test Bio for this user. Test Bio for this user. Test Bio for this user. Test Bio for this user. Test Bio for this user. Test Bio for this user. Test Bio for this user. Test Bio for this user. Test Bio for this user. Test Bio for this user. Test Bio for this user. Test Bio for this user. Test Bio for this user. Test Bio for this user. Test Bio for this user. ', '', '', '', '', '', '', '', 'Secret', '', '', '', '', 'http://www.google.com', 'no', 1, '7311b96816a0a255657bc51a28a10c56', 'Joseph', 'White', 'http://www.linkedin.com', 'http://www.gogole.com', '1_photo_ChrisCaputo.png', 2, NULL),
(2, '2014-07-15', '2014-07-15', 0, 'Mr.', 'Garcia', 'Ed', 'ed@metromediaworks.com', '', '', 'Male', '', '', '', '', 'Â ', '', '', '', '', '', '', '', '', '', 'None', '', '', '', '', '', 'yes', 1, '5f4dcc3b5aa765d61d8327deb882cf99', '', 'Hispanic/Latino', '', '', NULL, NULL, NULL),
(9, '2014-08-11', '2014-11-12', 0, 'Mr.', 'Fillyau', 'Dante', 'dfillyau@gatewaylegal.co', '', 'Partner', 'Male', '9546368298', '9547779311', '', '', '11 - 15', 'Florida A&M University', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non lectus sit amet metus venenatis cursus. Integer diam est, sagittis nec elit eu, ullamcorper consectetur sem. Fusce eget lacinia neque, nec consequat nisi. Morbi nec lorem non purus ullamcorper blandit. Vivamus gravida convallis dignissim. Etiam egestas neque eu tincidunt imperdiet. Maecenas at accumsan nulla, quis hendrerit lectus. Fusce diam enim, ultrices at pharetra in, pretium id nisl. Mauris auctor lacus vel diam cursus, sed condimentum magna rutrum. Donec eget est laoreet massa sagittis tempus a ut nisi. Donec lacinia faucibus elementum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec elementum feugiat ex ac rhoncus.\r\n\r\nFusce at semper velit, ac sodales sem. Proin elit lorem, sodales eget ex a, porttitor aliquet odio. Integer sit amet est imperdiet, laoreet dolor nec, ornare mauris. Cras lacinia eu ipsum eu varius. ', '', '', '', '', '', '', '', 'None', '', '', '', '', 'www.connectexpandgrow.com', 'yes', 8, '2c9341ca4cf3d87b9e4eb905d6a3ec45', 'Diakos', 'African-American', 'http://linkedin.com/dantefillyau', '', '9_photo_1534298_10100622762980187_2954860321818637149_n.jpg', 9, NULL),
(8, '2014-08-05', '2014-09-03', 0, '', 'Daniel', 'Alecia', 'Genesislawpa@gmail.com', '', 'Partner', 'Female', '(786) 315-9638', '', '', '', '6 - 10', 'Western New England College School of Law', '', '', '', '', '', '', '', '', 'None', '', '', '', '', 'www.genesislawpa.com', 'yes', 7, '357621274aa98298f4d65a7b01b980c8', '', 'African-American', '', '', NULL, 8, NULL),
(10, '2014-08-14', '2014-08-14', 0, 'Ms.', 'Lewis', 'Patrice', 'plewis@gatewaylegal.co', '', 'Account Manager', 'Female', '770-778-2879', '', '', '', 'Â ', '', '\r\nGateway Software Development develops diversity focused search engines which facilitate business to business transactions across multiple platforms while providing a seamless and measurable method to track and maintain diversity goals.   There is no single solution for identifying diverse businesses by corporations.  Similarly, conferences, symposium and other meetings can be expensive â€œspeed datingâ€ formats that do not always offer manageable, efficient ways to identity vet or compare companies you wish to do business with.  Our target partners are global businesses who understand that accessing diverse talent as enablers of business growth and success.   Gatewayâ€™s peer vetted virtual platforms allow institutional users of its proprietary technology to participate in an innovative culture that values the power of diversity in a global world. \r\n', '', '', '', '', '', '', '', 'None', '', '', '', '', 'www.connectexpandgrow.com', 'yes', 9, '6782ec7c679693fa652ca036b2c0ddc4', '', 'African-American', '', '', '10_photo_GatewayLegal_Logo.jpg', 10, NULL),
(11, '2014-08-25', '2014-08-25', 0, 'Ms.', 'Simon', 'Nikki', 'simonn@gtlaw.com', '', '', 'Gender', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 10, '639cd1edd92834a6b76a380906da7cf7', '', 'African-American', NULL, NULL, NULL, NULL, NULL),
(12, '2014-09-04', '2014-09-04', 0, 'Mr.', 'Bearden', 'James', 'james@beltlawyers.com', 'Esq', '', 'Male', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 11, 'da1bdda35cc4d3066df7c3560a565673', '', 'African-American', NULL, NULL, NULL, NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
