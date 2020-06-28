-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2020 at 12:38 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `anxiety`
--

CREATE TABLE `anxiety` (
  `username` varchar(20) CHARACTER SET utf8 NOT NULL,
  `A1` tinyint(4) DEFAULT NULL,
  `A2` tinyint(4) DEFAULT NULL,
  `A3` tinyint(4) DEFAULT NULL,
  `A4` tinyint(4) DEFAULT NULL,
  `A5` tinyint(4) DEFAULT NULL,
  `A6` tinyint(4) DEFAULT NULL,
  `A7` tinyint(4) DEFAULT NULL,
  `A8` tinyint(4) DEFAULT NULL,
  `A9` tinyint(4) DEFAULT NULL,
  `A10` tinyint(4) DEFAULT NULL,
  `Total_A` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anxiety`
--

INSERT INTO `anxiety` (`username`, `A1`, `A2`, `A3`, `A4`, `A5`, `A6`, `A7`, `A8`, `A9`, `A10`, `Total_A`) VALUES
('gfgdfsfdsj', 0, 0, 2, 3, 0, 0, 0, 0, 0, 0, 5),
('rghtrhrth', 0, 4, 0, 0, 0, 0, 0, 0, 0, 0, 4);

-- --------------------------------------------------------

--
-- Table structure for table `bdd`
--

CREATE TABLE `bdd` (
  `username` varchar(20) CHARACTER SET utf8 NOT NULL,
  `B1` tinyint(4) DEFAULT NULL,
  `B2` tinyint(4) DEFAULT NULL,
  `B3` tinyint(4) DEFAULT NULL,
  `B4` tinyint(4) DEFAULT NULL,
  `B5` tinyint(4) DEFAULT NULL,
  `B6` tinyint(4) DEFAULT NULL,
  `B7` tinyint(4) DEFAULT NULL,
  `B8` tinyint(4) DEFAULT NULL,
  `B9` tinyint(4) DEFAULT NULL,
  `B10` tinyint(4) DEFAULT NULL,
  `Total_B` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bdd`
--

INSERT INTO `bdd` (`username`, `B1`, `B2`, `B3`, `B4`, `B5`, `B6`, `B7`, `B8`, `B9`, `B10`, `Total_B`) VALUES
('fhgfgfd', 0, 0, 0, 0, 0, 0, 0, 0, 5, 4, 9),
('ggjgfhd', 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `hoarding`
--

CREATE TABLE `hoarding` (
  `username` varchar(20) CHARACTER SET utf8 NOT NULL,
  `H1` tinyint(4) DEFAULT NULL,
  `H2` tinyint(4) DEFAULT NULL,
  `H3` tinyint(4) DEFAULT NULL,
  `H4` tinyint(4) DEFAULT NULL,
  `H5` tinyint(4) DEFAULT NULL,
  `Total_H` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hoarding`
--

INSERT INTO `hoarding` (`username`, `H1`, `H2`, `H3`, `H4`, `H5`, `Total_H`) VALUES
('diya123', 8, 0, 0, 0, 6, 14),
('egrthryjty', 8, 0, 0, 0, 4, 12),
('fhgfgfd', 8, 0, 0, 0, 0, 8),
('gjhgfgds', 0, 0, 0, 0, 6, 6);

-- --------------------------------------------------------

--
-- Table structure for table `hypoc`
--

CREATE TABLE `hypoc` (
  `username` varchar(20) CHARACTER SET utf8 NOT NULL,
  `HY1` tinyint(4) DEFAULT NULL,
  `HY2` tinyint(4) DEFAULT NULL,
  `HY3` tinyint(4) DEFAULT NULL,
  `HY4` tinyint(4) DEFAULT NULL,
  `HY5` tinyint(4) DEFAULT NULL,
  `HY6` tinyint(4) DEFAULT NULL,
  `HY7` tinyint(4) DEFAULT NULL,
  `HY8` tinyint(4) DEFAULT NULL,
  `HY9` tinyint(4) DEFAULT NULL,
  `HY10` tinyint(4) DEFAULT NULL,
  `HY11` tinyint(4) DEFAULT NULL,
  `HY12` tinyint(4) DEFAULT NULL,
  `Total_HY` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hypoc`
--

INSERT INTO `hypoc` (`username`, `HY1`, `HY2`, `HY3`, `HY4`, `HY5`, `HY6`, `HY7`, `HY8`, `HY9`, `HY10`, `HY11`, `HY12`, `Total_HY`) VALUES
('egrthryjty', 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 2),
('fhffdsshgkdk', 0, 4, 0, 0, 0, 5, 4, 0, 0, 0, 0, 0, 13);

-- --------------------------------------------------------

--
-- Table structure for table `kleptomania`
--

CREATE TABLE `kleptomania` (
  `username` varchar(20) CHARACTER SET utf8 NOT NULL,
  `K1` tinyint(4) DEFAULT NULL,
  `K2` tinyint(4) DEFAULT NULL,
  `K3` tinyint(4) DEFAULT NULL,
  `K4` tinyint(4) DEFAULT NULL,
  `K5` tinyint(4) DEFAULT NULL,
  `K6` tinyint(4) DEFAULT NULL,
  `K7` tinyint(4) DEFAULT NULL,
  `K8` tinyint(4) DEFAULT NULL,
  `K9` tinyint(4) DEFAULT NULL,
  `K10` tinyint(4) DEFAULT NULL,
  `K11` tinyint(4) DEFAULT NULL,
  `K12` tinyint(4) DEFAULT NULL,
  `Total_K` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kleptomania`
--

INSERT INTO `kleptomania` (`username`, `K1`, `K2`, `K3`, `K4`, `K5`, `K6`, `K7`, `K8`, `K9`, `K10`, `K11`, `K12`, `Total_K`) VALUES
('jkjhjghgffd', 0, 4, 1, 0, 0, 0, 0, 0, 0, 2, 0, 4, 11);

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` mediumint(9) NOT NULL,
  `name` varchar(20) CHARACTER SET utf8 NOT NULL,
  `email` varchar(35) CHARACTER SET utf8 NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `username` varchar(20) CHARACTER SET utf8 NOT NULL,
  `password` varchar(15) CHARACTER SET utf8 NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `gender` varchar(10) CHARACTER SET utf8 NOT NULL,
  `O1A` tinyint(4) DEFAULT NULL,
  `O1B` tinyint(4) DEFAULT NULL,
  `O2` tinyint(4) DEFAULT NULL,
  `O3` tinyint(4) DEFAULT NULL,
  `O4` tinyint(4) DEFAULT NULL,
  `O5` tinyint(4) DEFAULT NULL,
  `C1A` tinyint(4) DEFAULT NULL,
  `C1B` tinyint(4) DEFAULT NULL,
  `C2` tinyint(4) DEFAULT NULL,
  `C3` tinyint(4) DEFAULT NULL,
  `C4` tinyint(4) DEFAULT NULL,
  `C5` tinyint(4) DEFAULT NULL,
  `Total_O` tinyint(4) NOT NULL,
  `Total_C` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `name`, `email`, `mobile`, `username`, `password`, `reg_date`, `gender`, `O1A`, `O1B`, `O2`, `O3`, `O4`, `O5`, `C1A`, `C1B`, `C2`, `C3`, `C4`, `C5`, `Total_O`, `Total_C`) VALUES
(1, 'hrghehg', 'rhreheh', 87654348765, 'rghtrhrth', 'ththhjk', '2020-02-26 16:37:25', 'female', 3, 3, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 5, 0),
(2, 'hrghehg', 'rhreheh', 87654348765, 'rghtrhrth', 'ththhjk', '2020-02-26 16:40:10', 'female', 3, 3, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 5, 0),
(3, 'dfgsdf', 'ghguggfyd', 5678905678, 'ggjgfhd', 'ggyufuf', '2020-02-26 16:48:07', 'male', 2, 4, 3, 2, 2, 4, 0, 0, 0, 3, 4, 0, 14, 7),
(4, 'dfgsdf', 'ghguggfyd', 5678905678, 'ggjgfhd', 'ggyufuf', '2020-02-26 16:49:11', 'male', 2, 4, 3, 2, 2, 4, 0, 0, 0, 3, 4, 0, 14, 7),
(5, 'dfgsdf', 'ghguggfyd', 5678905678, 'ggjgfhd', 'ggyufuf', '2020-02-26 16:57:00', 'male', 2, 4, 3, 2, 2, 4, 0, 0, 0, 3, 4, 0, 14, 7),
(6, 'hsgfsegf', 'jjkjhigufuf', 55678900432, 'gjhgfgds', 'ggjgg', '2020-02-26 16:58:10', 'male', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 0, 4),
(7, 'hsgfsegf', 'jjkjhigufuf', 55678900432, 'gjhgfgds', 'ggjgg', '2020-02-26 17:06:22', 'male', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 0, 4),
(8, 'hsgfsegf', 'jjkjhigufuf', 55678900432, 'gjhgfgds', 'ggjgg', '2020-02-26 17:06:46', 'male', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 0, 4),
(9, 'sfhasgha', 'rrgrghj', 809807685, 'fhgfgfd', 'nkhkjhh', '2020-02-26 17:08:10', 'female', 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 2, 2),
(10, 'sfhasgha', 'rrgrghj', 809807685, 'fhgfgfd', 'nkhkjhh', '2020-02-26 17:30:38', 'female', 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 2, 2),
(11, 'fgdghsdfhgahg', 'gjhgfjgfhgf', 34546580878, 'fhffdsshgkdk', 'kjhhjghgffd', '2020-02-26 17:31:45', 'male', 0, 0, 3, 0, 0, 3, 0, 0, 0, 0, 4, 0, 6, 4),
(12, 'fgdghsdfhgahg', 'gjhgfjgfhgf', 34546580878, 'fhffdsshgkdk', 'kjhhjghgffd', '2020-02-26 17:32:39', 'male', 0, 0, 3, 0, 0, 3, 0, 0, 0, 0, 4, 0, 6, 4),
(13, 'fgdghsdfhgahg', 'gjhgfjgfhgf', 34546580878, 'fhffdsshgkdk', 'kjhhjghgffd', '2020-02-26 18:00:38', 'male', 0, 0, 3, 0, 0, 3, 0, 0, 0, 0, 4, 0, 6, 4),
(14, 'jhggfydtshig', 'njnjnbhyh', 87865545435, 'jkjhjghgffd', 'hiuuhd', '2020-02-26 18:02:49', '', 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0),
(15, 'Akarsh Shrivastava', 'akarsh.400614@gmail.com', 7303746144, 'akrisht', 'akrist', '2020-02-26 18:15:56', 'male', 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 4, 1, 4),
(16, 'afgefgejfgbi', 'fgheguqgeq', 5324613969, 'gheghegh', 'fghsghsghdf', '2020-02-26 18:25:26', 'male', 0, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 2, 4),
(17, 'fhgfydrtteshgg', 'hggdddh', 99876543, 'hghfgftdt', 'hugyftd', '2020-02-26 18:39:42', 'female', 4, 0, 0, 4, 0, 0, 0, 0, 0, 0, 0, 4, 6, 4),
(18, 'Diya', 'diya@gmail.com', 9457422856, 'diya123', 'dd34345', '2020-02-27 05:10:41', 'female', 4, 0, 4, 0, 0, 2, 0, 4, 0, 0, 0, 4, 8, 6),
(19, 'fghfdgj', 'fghdfjdj', 5656677868789, 'egrthryjty', 'efgrth66', '2020-02-28 05:55:37', 'female', 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 2, 4),
(20, 'fghfdgj', 'fghdfjdj', 5656677868789, 'egrthryjty', 'efgrth66', '2020-02-28 06:03:02', 'female', 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 2, 4),
(21, 'fghfdgj', 'fghdfjdj', 5656677868789, 'egrthryjty', 'efgrth66', '2020-02-28 06:03:13', 'female', 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 2, 4),
(22, 'fghfdgj', 'fghdfjdj', 5656677868789, 'egrthryjty', 'efgrth66', '2020-02-28 06:03:32', 'female', 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 2, 4),
(23, 'fghfdgj', 'fghdfjdj', 5656677868789, 'egrthryjty', 'efgrth66', '2020-02-28 06:04:36', 'female', 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 2, 4),
(24, 'fghfdgj', 'fghdfjdj', 5656677868789, 'egrthryjty', 'efgrth66', '2020-02-28 06:04:42', 'female', 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 2, 4),
(25, 'fghfdgj', 'fghdfjdj', 5656677868789, 'egrthryjty', 'efgrth66', '2020-02-28 06:06:52', 'female', 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 2, 4),
(26, 'fghfdgj', 'fghdfjdj', 5656677868789, 'egrthryjty', 'efgrth66', '2020-02-28 06:08:16', 'female', 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 2, 4),
(27, 'ghjfhgdfd', 'lkjkjhghgf', 798685764653, 'gfgdfsfdsj', 'hggf765', '2020-03-13 11:31:15', 'female', 3, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 0),
(28, 'ghjfhgdfd', 'lkjkjhghgf', 798685764653, 'gfgdfsfdsj', 'hggf765', '2020-03-13 11:34:33', 'female', 3, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 0);

-- --------------------------------------------------------

--
-- Table structure for table `skinp`
--

CREATE TABLE `skinp` (
  `username` varchar(20) CHARACTER SET utf8 NOT NULL,
  `E1` tinyint(4) DEFAULT NULL,
  `E2` tinyint(4) DEFAULT NULL,
  `E3` tinyint(4) DEFAULT NULL,
  `E4` tinyint(4) DEFAULT NULL,
  `E5` tinyint(4) DEFAULT NULL,
  `E6` tinyint(4) DEFAULT NULL,
  `E7` tinyint(4) DEFAULT NULL,
  `E8` tinyint(4) DEFAULT NULL,
  `E9` tinyint(4) DEFAULT NULL,
  `E10` tinyint(4) DEFAULT NULL,
  `Total_E` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skinp`
--

INSERT INTO `skinp` (`username`, `E1`, `E2`, `E3`, `E4`, `E5`, `E6`, `E7`, `E8`, `E9`, `E10`, `Total_E`) VALUES
('akrisht', 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tic`
--

CREATE TABLE `tic` (
  `username` varchar(20) CHARACTER SET utf8 NOT NULL,
  `TS1` tinyint(4) DEFAULT NULL,
  `TS2` tinyint(4) DEFAULT NULL,
  `TS3` tinyint(4) DEFAULT NULL,
  `TS4` tinyint(4) DEFAULT NULL,
  `TS5` tinyint(4) DEFAULT NULL,
  `TS6` tinyint(4) DEFAULT NULL,
  `TS7` tinyint(4) DEFAULT NULL,
  `TS8` tinyint(4) DEFAULT NULL,
  `TS9` tinyint(4) DEFAULT NULL,
  `TS10` tinyint(4) DEFAULT NULL,
  `TS11` tinyint(4) DEFAULT NULL,
  `TS12` tinyint(4) DEFAULT NULL,
  `Total_TS` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tic`
--

INSERT INTO `tic` (`username`, `TS1`, `TS2`, `TS3`, `TS4`, `TS5`, `TS6`, `TS7`, `TS8`, `TS9`, `TS10`, `TS11`, `TS12`, `Total_TS`) VALUES
('gfgdfsfdsj', 0, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4),
('gheghegh', 0, 4, 4, 4, 0, 0, 0, 0, 0, 0, 0, 0, 12);

-- --------------------------------------------------------

--
-- Table structure for table `ttm`
--

CREATE TABLE `ttm` (
  `username` varchar(20) CHARACTER SET utf8 NOT NULL,
  `T1` tinyint(4) DEFAULT NULL,
  `T2` tinyint(4) DEFAULT NULL,
  `T3` tinyint(4) DEFAULT NULL,
  `T4` tinyint(4) DEFAULT NULL,
  `T5` tinyint(4) DEFAULT NULL,
  `T6` tinyint(4) DEFAULT NULL,
  `T7` tinyint(4) DEFAULT NULL,
  `Total_T` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ttm`
--

INSERT INTO `ttm` (`username`, `T1`, `T2`, `T3`, `T4`, `T5`, `T6`, `T7`, `Total_T`) VALUES
('hghfgftdt', 0, 0, 1, 0, 0, 4, 0, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anxiety`
--
ALTER TABLE `anxiety`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `bdd`
--
ALTER TABLE `bdd`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `hoarding`
--
ALTER TABLE `hoarding`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `hypoc`
--
ALTER TABLE `hypoc`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `kleptomania`
--
ALTER TABLE `kleptomania`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skinp`
--
ALTER TABLE `skinp`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `tic`
--
ALTER TABLE `tic`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `ttm`
--
ALTER TABLE `ttm`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
