-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2021 at 08:03 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test1`
--

-- --------------------------------------------------------

--
-- Table structure for table `aktiviteter`
--

CREATE TABLE `aktiviteter` (
  `AktivitetID` int(11) NOT NULL,
  `Aktivitet` varchar(255) NOT NULL,
  `Ansvarlig` varchar(255) NOT NULL,
  `Starttid` time NOT NULL,
  `Slutttid` time NOT NULL,
  `Dato` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aktiviteter`
--

INSERT INTO `aktiviteter` (`AktivitetID`, `Aktivitet`, `Ansvarlig`, `Starttid`, `Slutttid`, `Dato`) VALUES
(3, 'Fotball', 'Ola Nordmann', '20:00:00', '22:30:00', '2021-12-29'),
(5, 'Fotball', 'Ola Nordmann', '12:00:00', '19:00:00', '2021-12-14'),
(6, 'Fotball', 'Ola Nordmann', '00:30:00', '04:00:00', '2021-12-21'),
(7, 'Fotball', 'Ola Nordmann', '00:30:00', '04:00:00', '2021-12-21'),
(8, 'Fotball', 'Ola Nordmann', '00:30:00', '04:00:00', '2021-12-21'),
(9, 'Basketball', 'James Bond', '02:30:00', '04:00:00', '2021-12-20'),
(43, 'Fotball', 'Største Sjefen', '00:30:00', '02:00:00', '2000-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `medlemmer`
--

CREATE TABLE `medlemmer` (
  `ID` int(11) NOT NULL,
  `Fornavn` varchar(100) NOT NULL,
  `Etternavn` varchar(100) NOT NULL,
  `Brukernavn` varchar(255) NOT NULL,
  `Epost` varchar(100) NOT NULL,
  `Mobilnummer` int(8) NOT NULL,
  `Adresse` varchar(100) NOT NULL,
  `Postnummer` int(11) NOT NULL,
  `Poststed` varchar(255) NOT NULL,
  `Kjønn` varchar(100) NOT NULL,
  `Fødselsdato` date NOT NULL,
  `MedlemSiden` date NOT NULL,
  `Interesser` varchar(100) NOT NULL,
  `Kursaktiviteter` varchar(100) NOT NULL,
  `Rolle1` varchar(255) NOT NULL,
  `Rolle2` varchar(255) NOT NULL,
  `Kontigentstatus` varchar(100) NOT NULL,
  `Passord` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medlemmer`
--

INSERT INTO `medlemmer` (`ID`, `Fornavn`, `Etternavn`, `Brukernavn`, `Epost`, `Mobilnummer`, `Adresse`, `Postnummer`, `Poststed`, `Kjønn`, `Fødselsdato`, `MedlemSiden`, `Interesser`, `Kursaktiviteter`, `Rolle1`, `Rolle2`, `Kontigentstatus`, `Passord`) VALUES
(23, 'Max', 'Verstappen', 'Crashstappen', 'adrian10hammer@gmail.com', 91166190, 'Holland', 1234, 'Amsterdam', 'Mann', '1990-05-05', '2021-12-08', 'Trening', 'Maling', 'Leder', 'Kursansvarlig', 'Ikke betalt', '$2y$10$WK7qVZWFzfbR/svzkq4V5eMhChySKu4H2qhXHodqCPM6KDzXQkaEm'),
(30, 'Adrian', 'Hammer', 'AdrianSuper', 'adrhmmr@gmail.com', 12345678, 'Kaserneveien 30', 4630, 'Kristiansand', 'Mann', '2000-11-13', '2021-12-08', 'Musikk', 'Programmering', 'Nest Leder', 'Kursansvarlig', 'Ikke betalt', '$2y$10$CIqlAw0ysA3a.ewPfDlDc.VE4MlFCLes/z2e4xypZt5PzrOJCG0W6'),
(33, 'Lewis', 'Hamilton', 'Lewis8WC', 'Mercedes@gmail.com', 12345678, 'Monaco', 1234, 'Monaco', 'Mann', '1980-05-05', '2021-12-08', 'Trening', 'Maling', 'Leder', 'Kursansvarlig', 'Betalt', '$2y$10$5PrnJYVWopSD/GNgpHrmu.Jx1CGktImcrp8s1YFRCaTS7irkbc8sW'),
(35, 'Daniel ', 'Ricciardo', 'HoneyBadger', 'McLaren@gmail.com', 12345678, 'Australia', 1234, 'Down under', 'Mann', '1981-05-05', '2021-12-08', 'Trening', 'Klatring', 'Nest Leder', 'Kursansvarlig', 'Betalt', '$2y$10$5yFU8bc0FFwpKLYd0TlqW.b0nnYthWhOp2KLzWUvDul9mr.WnfdF2'),
(37, 'Lando', 'Norris', 'Lando4', 'Norris@mcLaren.com', 12345678, 'McLarenHQ', 4321, 'England', 'Mann', '1999-11-13', '2021-12-08', 'Gaming', 'Seiling', 'Leder', 'Kursansvarlig', 'Betalt', '$2y$10$U3d9CNlhbebDQBc40/nX1O.4.cNiD7AOb6NJ/ksOjNJWIYyYX/gV.'),
(41, 'Carlos', 'Sainz', 'Sainz55', 'Ferrari@gmail.com', 12345678, 'Madrid', 3421, 'Spain', 'Mann', '1995-05-05', '2021-12-08', 'Trening', 'Seiling', 'Nest Leder', 'Medlem', 'Betalt', '$2y$10$EwO8QoJlN1yIFO18WIxNEOq1unl2aKTIpaNvdanN3H1KzsRJgJV/O'),
(42, 'Sebastian', 'Vettel', 'Vettel5', 'Goat@gmail.com', 12345678, 'Germany', 1234, 'AstonMartin', 'Mann', '1980-05-05', '2021-12-08', 'Trening', 'Klatring', 'Nest Leder', 'Medlem', 'Betalt', '$2y$10$RxJ4v9yF3LpBGVpjprsU/.8/eV05VsV15oexT2M8MVf22LZ7yEl8C');

-- --------------------------------------------------------

--
-- Table structure for table `roller`
--

CREATE TABLE `roller` (
  `RolleID` int(11) NOT NULL,
  `Rolle` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roller`
--

INSERT INTO `roller` (`RolleID`, `Rolle`) VALUES
(1, 'Leder'),
(2, 'Nestleder'),
(3, 'Kasserer'),
(4, 'Kursansvarlig');

-- --------------------------------------------------------

--
-- Table structure for table `sitater`
--

CREATE TABLE `sitater` (
  `sitatID` int(255) NOT NULL,
  `dato` date NOT NULL,
  `sitat` varchar(255) NOT NULL,
  `opphavsperson` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sitater`
--

INSERT INTO `sitater` (`sitatID`, `dato`, `sitat`, `opphavsperson`) VALUES
(1, '2018-11-21', 'The greatest glory in living lies not in never falling, but in rising every time we fall.', 'Nelson Mandela'),
(2, '2016-11-01', 'The way to get started is to quit talking and begin doing.', 'Walt Disney'),
(3, '2011-10-18', 'Your time is limited, so don\'t waste it living someone else\'s life. Don\'t be trapped by dogma – which is living with the results of other people\'s thinking.', 'Steve Jobs'),
(4, '2013-07-17', 'If life were predictable it would cease to be life, and be without flavor. ', 'Eleanor Roosevelt');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aktiviteter`
--
ALTER TABLE `aktiviteter`
  ADD PRIMARY KEY (`AktivitetID`);

--
-- Indexes for table `medlemmer`
--
ALTER TABLE `medlemmer`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `roller`
--
ALTER TABLE `roller`
  ADD PRIMARY KEY (`RolleID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aktiviteter`
--
ALTER TABLE `aktiviteter`
  MODIFY `AktivitetID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `medlemmer`
--
ALTER TABLE `medlemmer`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `roller`
--
ALTER TABLE `roller`
  MODIFY `RolleID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
