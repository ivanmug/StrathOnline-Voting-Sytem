-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2022 at 11:32 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `votesystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `photo` varchar(150) NOT NULL,
  `created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `firstname`, `lastname`, `photo`, `created_on`) VALUES
(1, 'ivan', '$2y$10$8x6kYLvUUY.Vu7GbLYEYSuZp.NytGZi.XZ7K9PoSGztpgOB3uX8AS', 'Ivan', 'Shema', 'qr.png', '2022-07-14');

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `id` int(11) NOT NULL,
  `position_id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `photo` varchar(150) NOT NULL,
  `platform` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`id`, `position_id`, `firstname`, `lastname`, `photo`, `platform`) VALUES
(18, 9, 'Ivan', 'MUGUNGA', '', 'If elected,  I will ensure a smooth collaboration with the school administration for the enhancement and comfort of international students in Strathmore.'),
(19, 10, 'Claudia', 'KUDWOLI', '', 'I am a servant leader who listens and understands the views of the people they serve and to make a positive impact on anything and all that I do.'),
(20, 12, 'Christopher  ', 'NDEMI', '', 'I have a considerable experience of working for students, and I have your best interests at heart. With your support, I can use the knowledge and skills I have to best realize and effectuate your Ideas.'),
(21, 14, 'Alika', 'KAYEMBE', '', 'I intend to advocate for the development and management of new sports teams in Strathmore. I plan to elevate the Strathmore Sports culture by providing transport for supporters to matches, reserving seating areas and having a mascot.'),
(22, 13, 'Jane ', 'MUGO', '', 'I am a servant leader who listens and understands the views of the people they serve  and to make a positive impact on anything and all that I do.'),
(23, 11, 'Hakeem', ' ALAVI', '', 'I am devoted, hardworking and ambitious individual that has the vision and the capability of serving the Strathmore community. You matter, your opinions matter.'),
(24, 13, 'Alison', 'KURIA', '', 'I am a servant leader who listens and understands the views of the people they serve and to make a positive impact on anything and all that I do.'),
(25, 14, 'Sharon', 'MUTITHU', '', 'I am a servant leader who listens and understands the views of the people they serve and to make a positive impact on anything and all that I do.'),
(26, 11, 'Tom', 'ARNOLD', '', 'I am a devoted, hardworking and ambitious individual that has the vision and the capability of serving the Strathmore community.'),
(27, 12, 'Arnold', 'OWOKO', '', 'I aim to magnify the smaller sports teams to increase membership and participation, creating awareness and encouraging greater success in competitions.'),
(28, 17, 'Immanuel', 'MAINA', '', 'I am a servant leader who listens and understands the views of the people they serve and to make a positive impact on anything and all that I do.'),
(29, 18, 'Terry ', 'JOAN', '', 'I am a servant leader who listens and understands the views of the people they serve and to make a positive impact on anything and all that I do.'),
(30, 16, 'June', 'MUTISO', '', 'I am a servant leader who listens and understands the views of the people they serve and to make a positive impact on anything and all that I do.'),
(31, 17, 'Nicholas', 'MUNENE', '', 'I am a servant leader who listens and understands the views of the people they serve and to make a positive impact on anything and all that I do.'),
(32, 16, 'Ayan', 'AHMED', '', 'I am a servant leader who listens and understands the views of the people they serve and to make a positive impact on anything and all that I do.'),
(33, 18, 'Meshack', 'OKOLO', '', 'I am a servant leader who listens and understands the views of the people they serve and to make a positive impact on anything and all that I do.'),
(34, 15, 'Peter', 'ARINGO', '', 'I am a servant leader who listens and understands the views of the people they serve and to make a positive impact on anything and all that I do.'),
(35, 15, 'Emmanuel', 'Kasio', '', 'I am a servant leader who listens and understands the views of the people they serve and to make a positive impact on anything and all that I do.'),
(36, 9, 'Cristiano', 'RONALDO', '', 'I am a servant leader who listens and understands the views of the people they serve and to make a positive impact on anything and all that I do.'),
(37, 10, 'Margot', 'ROBBIE', '', 'I am a servant leader who listens and understands the views of the people they serve and to make a positive impact on anything and all that I do.');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `msg_id` int(255) NOT NULL,
  `admission_number` int(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` longtext NOT NULL,
  `Date_Sent` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`msg_id`, `admission_number`, `email`, `message`, `Date_Sent`) VALUES
(1, 136030, 'ivan@gmail.com', 'Good work ', '2022-07-24 00:29:08'),
(2, 136584, 'ivan@gmail.com', 'Sensational', '2022-07-24 00:29:08');

-- --------------------------------------------------------

--
-- Table structure for table `positions`
--

CREATE TABLE `positions` (
  `id` int(11) NOT NULL,
  `description` varchar(50) NOT NULL,
  `max_vote` int(11) NOT NULL,
  `priority` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `positions`
--

INSERT INTO `positions` (`id`, `description`, `max_vote`, `priority`) VALUES
(9, 'INTERNATIONAL STUDENTS AFFAIRS', 1, 2),
(10, 'SECRETARY', 1, 3),
(11, 'CHAIRPERSON', 1, 4),
(12, 'MALE SPORTS REP', 1, 5),
(13, 'FEMALE ACADEMIC REP', 1, 6),
(14, 'FEMALE SPORTS REP', 1, 7),
(15, 'MALE ACADEMIC REP', 1, 8),
(16, 'VICE PRESIDENT', 1, 9),
(17, 'PUBLIC RELATIONS REP', 1, 10),
(18, 'HEALTH AND SANITATION REP', 1, 11);

-- --------------------------------------------------------

--
-- Table structure for table `voters`
--

CREATE TABLE `voters` (
  `id` int(11) NOT NULL,
  `admission_number` varchar(15) NOT NULL,
  `password` varchar(60) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `photo` varchar(150) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voters`
--

INSERT INTO `voters` (`id`, `admission_number`, `password`, `firstname`, `lastname`, `photo`, `gender`, `email`, `course`) VALUES
(2, '136584', '$2y$10$APhxRmOTbAgYYvoaiO7aB.NlWUAOZbrd347A0PQQIEjindl61iysi', 'Claudia', 'Kudwoli', 'uploads/62d9b603a1b052.47812467.jpeg', 'female', 'claudia@gmail.com', 'BBIT'),
(4, '136030', '$2y$10$6n3C2mHyaamOpQp9JODOk.cuxxX2xzz6njks8NzX7spkOaqy/TfNS', 'Ivan', 'Shema', 'uploads/62d9bc98936523.87173351.jpeg', 'male', 'ivan@gmail.com', 'BBIT'),
(5, '125554', '$2y$10$bcnaEAj44NT87wzqaZ7bYOf.b9OKjByMOhq5siHPpKhzE7EElkH4S', 'Titus', 'Tunduny', 'uploads/62d9bcec1be4e8.03106744.jpeg', 'male', 'ivan@gmail.com', 'BBIT'),
(6, '111222', '$2y$10$JOp1dBLYgqEsVD4HZIOAYu/APAOwXnKwUcjAkqWo9KIj1/yi3/f7u', 'Brian', 'Owino', 'uploads/62d9c2d8511df3.30300670.jpeg', 'male', 'brian@gmail.com', 'BBIT'),
(8, '121212', '$2y$10$Kdo4JcBFEsgWEc29l1cnqufrXMu/ov93lagPgemUK4hY2orOcFb8.', 'Noella', 'Mugunga', 'uploads/62d9c4a6041ae7.51713931.jpeg', 'female', 'ivan@gmail.com', 'BCOM');

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `id` int(11) NOT NULL,
  `voters_id` int(11) NOT NULL,
  `candidate_id` int(11) NOT NULL,
  `position_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `votes`
--

INSERT INTO `votes` (`id`, `voters_id`, `candidate_id`, `position_id`) VALUES
(83, 1, 18, 9),
(84, 2, 18, 9),
(85, 3, 19, 10),
(86, 5, 18, 9),
(87, 5, 19, 10),
(88, 6, 18, 9),
(89, 6, 19, 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `positions`
--
ALTER TABLE `positions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voters`
--
ALTER TABLE `voters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `msg_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `positions`
--
ALTER TABLE `positions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `voters`
--
ALTER TABLE `voters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `votes`
--
ALTER TABLE `votes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
