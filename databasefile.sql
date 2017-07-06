

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cldetails`
--
CREATE DATABASE IF NOT EXISTS `cldetails` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cldetails`;

-- --------------------------------------------------------

--
-- Table structure for table `KEE`
--

DROP TABLE IF EXISTS `KEE`;
CREATE TABLE `KEE` (
  `ID` int(2) NOT NULL,
  `Category` varchar(20) NOT NULL,
  `Number` int(8) DEFAULT NULL,
  `Rate` float NOT NULL,
  `Total` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `KEE`
--

INSERT INTO `KEE` (`ID`, `Category`, `Number`, `Rate`, `Total`) VALUES
(1, 'Supervisor A A', 0, 1254, 0),
(2, 'Supervisor A J', 0, 1254, 0),
(3, 'Supervisor A B', 5, 1254, 6270),
(4, 'Supervisor A W', 0, 1254, 0),
(5, 'Supervisor A G', 3, 1254, 3762),
(6, 'FITTER A A', 0, 536.77, 0),
(7, 'FITTER A J', 0, 536.77, 0),
(8, 'FITTER A B', 0, 536.77, 0),
(9, 'FITTER A W', 0, 536.77, 0),
(10, 'FITTER A G', 0, 536.77, 0),
(11, 'FITTER B A', 0, 532.42, 0),
(12, 'FITTER B J', 0, 532.42, 0),
(13, 'FITTER B B', 0, 532.42, 0),
(14, 'FITTER B W', 0, 532.42, 0),
(15, 'FITTER B G', 0, 532.42, 0),
(16, 'FLATTNER A', 0, 860, 0),
(17, 'FLATTNER J', 0, 860, 0),
(18, 'FLATTNER B', 0, 860, 0),
(19, 'FLATTNER W', 0, 860, 0),
(20, 'FLATTNER G', 0, 860, 0),
(21, 'WELDER A A', 0, 536.77, 0),
(22, 'WELDER A J', 0, 536.77, 0),
(23, 'WELDER A B', 0, 536.77, 0),
(24, 'WELDER A W', 0, 536.77, 0),
(25, 'WELDER A G', 0, 536.77, 0),
(26, 'WELDER B A', 0, 532.42, 0),
(27, 'WELDER B J', 0, 532.42, 0),
(28, 'WELDER B B', 0, 532.42, 0),
(29, 'WELDER B W', 0, 532.42, 0),
(30, 'WELDER B G', 0, 532.42, 0),
(31, 'WELDER C A', 0, 0, 0),
(32, 'WELDER C J', 0, 0, 0),
(33, 'WELDER C B', 0, 0, 0),
(34, 'WELDER C W', 0, 0, 0),
(35, 'WELDER C G', 0, 0, 0),
(36, ' ORG  WELDER A A', 0, 762.48, 0),
(37, 'ORG  WELDER A J', 0, 762.48, 0),
(38, 'ORG  WELDER A B', 0, 762.48, 0),
(39, 'ORG  WELDER A W', 0, 762.48, 0),
(40, 'ORG  WELDER A G', 0, 762.48, 0),
(41, 'ORG  WELDER B A', 0, 749.45, 0),
(42, 'ORG  WELDER B J', 0, 749.45, 0),
(43, 'ORG  WELDER B B', 0, 749.45, 0),
(44, 'ORG  WELDER B W', 0, 749.45, 0),
(45, 'ORG  WELDER B G', 0, 749.45, 0),
(46, 'GRINDER B A', 0, 464.35, 0),
(47, 'GRINDER B J', 0, 464.35, 0),
(48, 'GRINDER B B', 0, 464.35, 0),
(49, 'GRINDER B W', 0, 464.35, 0),
(50, 'GRINDER B G', 0, 464.35, 0),
(51, 'GRINDER C A', 0, 460.21, 0),
(52, 'GRINDER C J', 0, 460.21, 0),
(53, 'GRINDER C B', 0, 460.21, 0),
(54, 'GRINDER C W', 0, 460.21, 0),
(55, 'GRINDER C G', 0, 460.21, 0),
(56, 'CUTTER B A', 0, 464.35, 0),
(57, 'CUTTER B J', 0, 464.35, 0),
(58, 'CUTTER B B', 0, 464.35, 0),
(59, 'CUTTER B W', 0, 464.35, 0),
(60, 'CUTTER B G', 0, 464.35, 0),
(61, 'CUTTER C A', 0, 460.21, 0),
(62, 'CUTTER C J', 0, 460.21, 0),
(63, 'CUTTER C B', 0, 460.21, 0),
(64, 'CUTTER C W', 0, 460.21, 0),
(65, 'CUTTER C G', 0, 460.21, 0),
(66, 'FABRICATOR A A', 0, 762.48, 0),
(67, 'FABRICATOR A J', 0, 762.48, 0),
(68, 'FABRICATOR A B', 0, 762.48, 0),
(69, 'FABRICATOR A W', 0, 762.48, 0),
(70, 'FABRICATOR A G', 0, 762.48, 0),
(71, 'FABRICATOR B A', 0, 749.45, 0),
(72, 'FABRICATOR B J', 0, 749.45, 0),
(73, 'FABRICATOR B B', 0, 749.45, 0),
(74, 'FABRICATOR B W', 0, 749.45, 0),
(75, 'FABRICATOR B G', 0, 749.45, 0),
(76, 'HELPER D A', 0, 435.46, 0),
(77, 'HELPER D J', 0, 435.46, 0),
(78, 'HELPER D B', 0, 435.46, 0),
(79, 'HELPER D W', 0, 435.46, 0),
(80, 'HELPER D G', 0, 435.46, 0);

-- --------------------------------------------------------

--
-- Table structure for table `KeeShop1`
--

DROP TABLE IF EXISTS `KeeShop1`;
CREATE TABLE `KeeShop1` (
  `ID` int(2) NOT NULL,
  `Category` varchar(20) NOT NULL,
  `Number` int(8) DEFAULT NULL,
  `Rate` float NOT NULL,
  `Total` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `KeeShop1`
--

INSERT INTO `KeeShop1` (`ID`, `Category`, `Number`, `Rate`, `Total`) VALUES
(1, 'Supervisor A', 0, 1254, 0),
(2, 'FITTER A', 0, 536.77, 0),
(3, 'FITTER B', 0, 532.42, 0),
(4, 'FLATTNER', 0, 860, 0),
(5, 'WELDER A', 0, 536.77, 0),
(6, 'WELDER B', 0, 532.42, 0),
(7, 'WELDER C', 0, 0, 0),
(8, 'ORG  WELDER A', 0, 762.48, 0),
(9, 'ORG  WELDER B', 0, 749.45, 0),
(10, 'GRINDER B', 0, 464.35, 0),
(11, 'GRINDER C', 0, 460.21, 0),
(12, 'CUTTER B', 0, 464.35, 0),
(13, 'CUTTER C', 0, 460.21, 0),
(14, 'FABRICATOR A', 0, 762.48, 0),
(15, 'FABRICATOR B', 0, 749.45, 0),
(16, 'HELPER D', 0, 435.46, 0);

-- --------------------------------------------------------

--
-- Table structure for table `Meghraj`
--

DROP TABLE IF EXISTS `Meghraj`;
CREATE TABLE `Meghraj` (
  `ID` int(2) NOT NULL,
  `Category` varchar(20) NOT NULL,
  `Number` int(8) DEFAULT NULL,
  `Rate` float NOT NULL,
  `Total` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Meghraj`
--

INSERT INTO `Meghraj` (`ID`, `Category`, `Number`, `Rate`, `Total`) VALUES
(1, 'Shop No1 G', 0, 565, 0),
(2, 'Shop No1 S', 0, 464.35, 0),
(3, 'Shop No1 U', 0, 435.46, 0),
(4, 'SHOP NO. 3 G', 0, 565, 0),
(5, 'SHOP NO. 3 S', 0, 464.35, 0),
(6, 'SHOP NO. 3 U', 0, 435.46, 0),
(7, 'PACKING G', 0, 565, 0),
(8, 'PACKING S', 0, 464.35, 0),
(9, 'PACKING U', 0, 435.46, 0),
(10, 'POWDER COAT G', 0, 565, 0),
(11, 'POWDER COAT S', 0, 464.35, 0),
(12, 'POWDER COAT U', 0, 435.46, 0),
(13, 'STORES G', 0, 565, 0),
(14, 'STORES S', 0, 464.35, 0),
(15, 'STORES U', 0, 435.46, 0),
(16, 'HOUSEKEEPING G', 0, 565, 0),
(17, 'HOUSEKEEPING S', 0, 464.35, 0),
(18, 'HOUSEKEEPING U', 0, 435.46, 0),
(19, 'GARDENING G', 0, 565, 0),
(20, 'GARDENING S', 0, 464.35, 0),
(21, 'GARDENING U', 0, 435.46, 0),
(22, 'FORKLIFT G', 0, 565, 0),
(23, 'FORKLIFT S', 0, 464.35, 0),
(24, 'FORKLIFT U', 0, 435.46, 0),
(25, 'PANTRY G', 0, 565, 0),
(26, 'PANTRY S', 0, 464.35, 0),
(27, 'PANTRY U', 0, 435.46, 0),
(28, 'PLASMA G', 0, 565, 0),
(29, 'PLASMA S', 0, 464.35, 0),
(30, 'PLASMA U', 0, 435.46, 0),
(47, 'MAINTENANCE G', 0, 565, 0),
(48, 'MAINTENANCE S', 0, 464.35, 0),
(49, 'MAINTENANCE U', 0, 435.46, 0),
(50, 'Q/A G', 0, 565, 0),
(51, 'Q/A S', 0, 464.35, 0),
(52, 'Q/A U', 0, 435.46, 0),
(53, 'Fabrication G', 0, 565, 0),
(54, 'Fabrication S', 0, 464.35, 0),
(55, 'Fabrication U', 0, 435.46, 0);

-- --------------------------------------------------------

--
-- Table structure for table `Miscellaneous`
--

DROP TABLE IF EXISTS `Miscellaneous`;
CREATE TABLE `Miscellaneous` (
  `ID` int(2) NOT NULL,
  `Category` varchar(20) NOT NULL,
  `Number` int(8) DEFAULT NULL,
  `Rate` float NOT NULL,
  `Total` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Miscellaneous`
--

INSERT INTO `Miscellaneous` (`ID`, `Category`, `Number`, `Rate`, `Total`) VALUES
(1, 'Data entry Operators', 2, 535, 1070),
(2, 'Pur/IT AssistantS', 2, 535, 1070),
(3, 'QA Inspector(Dalvi)', 2, 658.46, 1316.92),
(4, 'QA Operators', 2, 565, 1130),
(5, 'Laser Operators (1)', 2, 565, 1130),
(6, 'Laser Operator (2)', 2, 658.46, 1316.92);

-- --------------------------------------------------------

--
-- Table structure for table `Report`
--

DROP TABLE IF EXISTS `Report`;
CREATE TABLE `Report` (
  `ID` int(2) NOT NULL,
  `Department` varchar(30) NOT NULL,
  `Number` int(3) DEFAULT NULL,
  `Cost` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Report`
--

INSERT INTO `Report` (`ID`, `Department`, `Number`, `Cost`) VALUES
(1, 'PSP Shop 1+2', 0, 0),
(2, 'Laser Shop 3', 4, 2446.92),
(3, 'FABRI- SHOP 5 + 6', 15, 15936.7),
(4, 'OTHER SERVICES', 8, 4586.92),
(5, 'PAINTING', 0, 0),
(6, 'MATHADI  (Avge)', 0, 0),
(17, 'TOTAL', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `Samiksha`
--

DROP TABLE IF EXISTS `Samiksha`;
CREATE TABLE `Samiksha` (
  `ID` int(2) NOT NULL,
  `Category` varchar(20) NOT NULL,
  `Number` int(8) DEFAULT NULL,
  `Rate` float NOT NULL,
  `Total` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Samiksha`
--

INSERT INTO `Samiksha` (`ID`, `Category`, `Number`, `Rate`, `Total`) VALUES
(1, 'Supervisor A A', 1, 1254, 1254),
(2, 'Supervisor A J', 1, 1254, 1254),
(3, 'Supervisor A B', 1, 1254, 1254),
(4, 'FITTER A A', 1, 536.77, 536.77),
(5, 'FITTER A J', 1, 536.77, 536.77),
(6, 'FITTER A B', 1, 536.77, 536.77),
(7, 'FITTER B A', 1, 532.42, 532.42),
(8, 'FITTER B J', 0, 532.42, 0),
(9, 'FITTER B B', 0, 532.42, 0),
(10, 'FLATTNER A', 0, 860, 0),
(11, 'FLATTNER J', 0, 860, 0),
(12, 'FLATTNER B', 0, 860, 0),
(13, 'WELDER A A', 0, 536.77, 0),
(14, 'WELDER A J', 0, 536.77, 0),
(15, 'WELDER A B', 0, 536.77, 0),
(16, 'WELDER B A', 0, 532.42, 0),
(17, 'WELDER B J', 0, 532.42, 0),
(18, 'WELDER B B', 0, 532.42, 0),
(19, 'WELDER C A', 0, 0, 0),
(20, 'WELDER C J', 0, 0, 0),
(21, 'WELDER C B', 0, 0, 0),
(22, 'ORG  WELDER A A', 0, 762.48, 0),
(23, 'ORG  WELDER A J', 0, 762.48, 0),
(24, 'ORG  WELDER A B', 0, 762.48, 0),
(25, 'ORG  WELDER B A', 0, 749.45, 0),
(26, 'ORG  WELDER B J', 0, 749.45, 0),
(27, 'ORG  WELDER B B', 0, 749.45, 0),
(28, 'GRINDER B A', 0, 464.35, 0),
(29, 'GRINDER B J', 0, 464.35, 0),
(30, 'GRINDER B B', 0, 464.35, 0),
(31, 'GRINDER C A', 0, 460.21, 0),
(32, 'GRINDER C J', 0, 460.21, 0),
(33, 'GRINDER C B', 0, 460.21, 0),
(34, 'CUTTER B A', 0, 464.35, 0),
(35, 'CUTTER B J', 0, 464.35, 0),
(36, 'CUTTER B B', 0, 464.35, 0),
(37, 'CUTTER C A', 0, 460.21, 0),
(38, 'CUTTER C J', 0, 460.21, 0),
(39, 'CUTTER C B', 0, 460.21, 0),
(40, 'FABRICATOR A A', 0, 762.48, 0),
(41, 'FABRICATOR A J', 0, 762.48, 0),
(42, 'FABRICATOR A B', 0, 762.48, 0),
(43, 'FABRICATOR B A', 0, 749.45, 0),
(44, 'FABRICATOR B J', 0, 749.45, 0),
(45, 'FABRICATOR B B', 0, 749.45, 0),
(46, 'HELPER D A', 0, 435.46, 0),
(47, 'HELPER D J', 0, 435.46, 0),
(48, 'HELPER D B', 0, 435.46, 0);

-- --------------------------------------------------------

--
-- Table structure for table `Shreya`
--

DROP TABLE IF EXISTS `Shreya`;
CREATE TABLE `Shreya` (
  `ID` int(2) NOT NULL,
  `Category` varchar(20) NOT NULL,
  `Number` int(8) DEFAULT NULL,
  `Rate` float NOT NULL,
  `Total` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Shreya`
--

INSERT INTO `Shreya` (`ID`, `Category`, `Number`, `Rate`, `Total`) VALUES
(1, 'PAINTER', 0, 649.64, 0),
(2, 'BLASTER', 0, 649.64, 0),
(3, 'SANDER', 0, 490.7, 0),
(4, 'PT OPERATOR', 0, 649.64, 0),
(5, 'SUPERVISOR', 0, 727.78, 0),
(6, 'HELPER', 0, 435.46, 0),
(7, 'SECURITY', 0, 455.55, 0),
(8, 'MATHADI', 0, 1083.33, 0);

-- --------------------------------------------------------

--
-- Table structure for table `Synergy`
--

DROP TABLE IF EXISTS `Synergy`;
CREATE TABLE `Synergy` (
  `ID` int(2) NOT NULL,
  `Category` varchar(20) NOT NULL,
  `Number` int(8) DEFAULT NULL,
  `Rate` float NOT NULL,
  `Total` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Synergy`
--

INSERT INTO `Synergy` (`ID`, `Category`, `Number`, `Rate`, `Total`) VALUES
(1, 'Supervisor A A', 0, 1254, 0),
(2, 'Supervisor A J', 0, 1254, 0),
(3, 'Supervisor A B', 0, 1254, 0),
(4, 'Supervisor A W', 0, 1254, 0),
(5, 'FITTER A A', 0, 536.77, 0),
(6, 'FITTER A J', 0, 536.77, 0),
(7, 'FITTER A B', 0, 536.77, 0),
(8, 'FITTER A W', 0, 536.77, 0),
(9, 'FITTER B A', 0, 532.42, 0),
(10, 'FITTER B J', 0, 532.42, 0),
(11, 'FITTER B B', 0, 532.42, 0),
(12, 'FITTER B W', 0, 532.42, 0),
(13, 'FLATTNER A', 0, 860, 0),
(14, 'FLATTNER J', 0, 860, 0),
(15, 'FLATTNER B', 0, 860, 0),
(16, 'FLATTNER W', 0, 860, 0),
(17, 'WELDER A A', 0, 536.77, 0),
(18, 'WELDER A J', 0, 536.77, 0),
(19, 'WELDER A B', 0, 536.77, 0),
(20, 'WELDER A W', 0, 536.77, 0),
(21, 'WELDER B A', 0, 532.42, 0),
(22, 'WELDER B J', 0, 532.42, 0),
(23, 'WELDER B B', 0, 532.42, 0),
(24, 'WELDER B W', 0, 532.42, 0),
(25, 'WELDER C A', 0, 0, 0),
(26, 'WELDER C J', 0, 0, 0),
(27, 'WELDER C B', 0, 0, 0),
(28, 'WELDER C W', 0, 0, 0),
(29, 'ORG  WELDER A A', 0, 762.48, 0),
(30, 'ORG  WELDER A J', 0, 762.48, 0),
(31, 'ORG  WELDER A B', 0, 762.48, 0),
(32, 'ORG  WELDER A W', 0, 0, 0),
(33, 'ORG  WELDER B A', 0, 749.45, 0),
(34, 'ORG  WELDER B J', 0, 749.45, 0),
(35, 'ORG  WELDER B B', 0, 749.45, 0),
(36, 'ORG  WELDER B W', 0, 749.45, 0),
(37, 'GRINDER B A', 0, 464.35, 0),
(38, 'GRINDER B J', 0, 464.35, 0),
(39, 'GRINDER B B', 0, 464.35, 0),
(40, 'GRINDER B W', 0, 464.35, 0),
(41, 'GRINDER C A', 0, 460.21, 0),
(42, 'GRINDER C J', 0, 460.21, 0),
(43, 'GRINDER C B', 0, 460.21, 0),
(44, 'GRINDER C W', 0, 460.21, 0),
(45, 'CUTTER B A', 0, 464.35, 0),
(46, 'CUTTER B J', 0, 464.35, 0),
(47, 'CUTTER B B', 0, 464.35, 0),
(48, 'CUTTER B W', 0, 464.35, 0),
(49, 'CUTTER C A', 0, 460.21, 0),
(50, 'CUTTER C J', 0, 460.21, 0),
(51, 'CUTTER C B', 0, 460.21, 0),
(52, 'CUTTER C W', 0, 460.21, 0),
(53, 'FABRICATOR A A', 0, 762.48, 0),
(54, 'FABRICATOR A J', 0, 762.48, 0),
(55, 'FABRICATOR A B', 0, 762.48, 0),
(56, 'FABRICATOR A W', 0, 762.48, 0),
(57, 'FABRICATOR B A', 0, 749.45, 0),
(58, 'FABRICATOR B J', 0, 749.45, 0),
(59, 'FABRICATOR B B', 0, 749.45, 0),
(60, 'FABRICATOR B W', 0, 749.45, 0),
(61, 'HELPER D A', 0, 435.46, 0),
(62, 'HELPER D J', 0, 435.46, 0),
(63, 'HELPER D B', 0, 435.46, 0),
(64, 'HELPER D W', 0, 435.46, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `KEE`
--
ALTER TABLE `KEE`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `KeeShop1`
--
ALTER TABLE `KeeShop1`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Meghraj`
--
ALTER TABLE `Meghraj`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Miscellaneous`
--
ALTER TABLE `Miscellaneous`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Report`
--
ALTER TABLE `Report`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Samiksha`
--
ALTER TABLE `Samiksha`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Shreya`
--
ALTER TABLE `Shreya`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Synergy`
--
ALTER TABLE `Synergy`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `KEE`
--
ALTER TABLE `KEE`
  MODIFY `ID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
--
-- AUTO_INCREMENT for table `KeeShop1`
--
ALTER TABLE `KeeShop1`
  MODIFY `ID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `Meghraj`
--
ALTER TABLE `Meghraj`
  MODIFY `ID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `Miscellaneous`
--
ALTER TABLE `Miscellaneous`
  MODIFY `ID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `Report`
--
ALTER TABLE `Report`
  MODIFY `ID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `Samiksha`
--
ALTER TABLE `Samiksha`
  MODIFY `ID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `Shreya`
--
ALTER TABLE `Shreya`
  MODIFY `ID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `Synergy`
--
ALTER TABLE `Synergy`
  MODIFY `ID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
