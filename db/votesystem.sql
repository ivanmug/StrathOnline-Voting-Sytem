-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2022 at 06:59 PM
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
  `feedback_type` varchar(50) NOT NULL,
  `message` longtext NOT NULL,
  `Date_Sent` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`msg_id`, `admission_number`, `feedback_type`, `message`, `Date_Sent`) VALUES
(1, 136030, 'ivan@gmail.com', 'Good work ', '2022-07-24 00:29:08'),
(2, 136584, 'ivan@gmail.com', 'Sensational', '2022-07-24 00:29:08'),
(3, 136584, 'ivan@gmail.com', 'Ok', '2022-07-24 00:47:36'),
(4, 136030, 'ivan@gmail.com', 'Good', '2022-07-24 15:29:32'),
(5, 136030, 'ivan@gmail.com', 'Good afternoon', '2022-07-26 15:47:52'),
(6, 136030, '', 'hiuohohoihio', '2022-07-27 23:22:31'),
(7, 121212, 'Suggestions', 'jjpojpojio', '2022-07-27 23:23:15'),
(8, 150150, 'Suggestions', 'Keep it up', '2022-07-28 01:07:42');

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
(9, 'I.S AFFAIRS', 1, 1),
(10, 'SECRETARY', 1, 3),
(11, 'CHAIRPERSON', 1, 2),
(12, 'MALE SPORTS REP', 1, 4),
(13, 'FEMALE ACADEMIC REP', 1, 5),
(14, 'FEMALE SPORTS REP', 1, 6),
(15, 'MALE ACADEMIC REP', 1, 8),
(16, 'VICE PRESIDENT', 1, 7),
(17, 'PUBLIC RELATIONS REP', 1, 9),
(18, 'HEALTH AND SANITATION REP', 1, 10);

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
  `course` varchar(255) NOT NULL,
  `joined` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voters`
--

INSERT INTO `voters` (`id`, `admission_number`, `password`, `firstname`, `lastname`, `photo`, `gender`, `email`, `course`, `joined`) VALUES
(2, '136584', '$2y$10$APhxRmOTbAgYYvoaiO7aB.NlWUAOZbrd347A0PQQIEjindl61iysi', 'Claudia', 'Kudwoli', 'uploads/62d9b603a1b052.47812467.jpeg', 'female', 'claudia@gmail.com', 'BBIT', '2022-07-30'),
(4, '136030', '$2y$10$6n3C2mHyaamOpQp9JODOk.cuxxX2xzz6njks8NzX7spkOaqy/TfNS', 'Ivan', 'Shema', 'uploads/62d9bc98936523.87173351.jpeg', 'male', 'ivan@strathmore.edu', 'BBIT', '2022-07-30'),
(5, '125554', '$2y$10$bcnaEAj44NT87wzqaZ7bYOf.b9OKjByMOhq5siHPpKhzE7EElkH4S', 'Titus', 'Tunduny', 'uploads/62d9bcec1be4e8.03106744.jpeg', 'male', 'ivan@gmail.com', 'BBIT', '2022-07-30'),
(6, '111222', '$2y$10$JOp1dBLYgqEsVD4HZIOAYu/APAOwXnKwUcjAkqWo9KIj1/yi3/f7u', 'Brian', 'Owino', 'uploads/62d9c2d8511df3.30300670.jpeg', 'male', 'brian@gmail.com', 'BBIT', '2022-07-30'),
(8, '121212', '$2y$10$Kdo4JcBFEsgWEc29l1cnqufrXMu/ov93lagPgemUK4hY2orOcFb8.', 'Noella', 'Mugunga', 'uploads/62d9c4a6041ae7.51713931.jpeg', 'female', 'ivan@gmail.com', 'BCOM', '2022-07-30'),
(9, '100612', '$2y$10$r8LO8CrtmW5jTyjSal1NTO71b8nvI1N6PUR0UHkqCuqvH7BStOWYK', 'Prince', 'Tobit', 'uploads/62dc6fc2d08608.80280821.jpeg', 'male', 'ivan@gmail.com', 'ICS', '2022-07-30'),
(10, '140150', '$2y$10$/vLY.H2c1F..HgEjGxSHbOaGiMMWJQaVKuNEmRlmkGVLuH6odlsV2', 'Hope', 'Shema', 'uploads/62dc7e0d534b74.64078049.jpeg', 'female', 'ivan@gmail.com', 'BCOM', '2022-07-30'),
(11, '151515', '$2y$10$0zSQjrQo/jsswyeAIflLxe0aeYiuuPlPDRXf.3.PCuVp3UQPYzCAu', 'Peter', 'Suii', 'uploads/62df9dc6189f27.45038816.jpeg', 'male', 'ivan@gmail.com', 'ICS', '2022-07-30'),
(12, '101010', '$2y$10$VYPAf9Ny9g.dc8Br.DLbxeVZVdC5ahaQkuIYNlpGvElQvn7ZmIIvW', 'Muhammed', 'Ali', 'uploads/62dfa3bb2eaa89.14465471.jpeg', 'male', 'ivan@gmail.com', 'BCOM', '2022-07-30'),
(14, '136031', '$2y$10$vMDnFXrVC8mTQ428Rmz24OyQ9yIh3GdYCeRx9Ew2V5QT4J3eHFcEe', 'Ivan', 'Shema', 'uploads/62e1b0586f24c0.45018295.jpeg', 'male', 'ivan@strathmore.edu', 'BBIT', '2022-07-30'),
(15, '136031', '$2y$10$c3pW2g0TVJHiUEqOqC8TpO.gSftAA8CCwZ8rE/C27eh1kf739uuBq', 'Ivan', 'Shema', 'uploads/62e1b0a3a84c03.15904199.jpeg', 'male', 'ivan@strathmore.edu', 'BBIT', '2022-07-30'),
(16, '150150', '$2y$10$ad6c5Ck3Q8XUzKDkH.1xZ.vr/Ld21Hoq3OhQ1YFR4O8JfRnNmVPDK', 'Lionel', 'Messi', 'uploads/62e1b6b03b7562.00568821.png', 'male', 'messi@strathmore.edu', 'BCOM', '2022-07-30'),
(17, '171717', '$2y$10$2a0g4wCaq/IswJ0g6rO6xes0aeYnDGZUTJzAzMJuRdzOSXOZwN4M6', 'Christian', 'Eriksen', 'uploads/62e1b864beb589.01239807.png', 'male', 'messi@strathmore.edu', 'LAW', '2022-07-30'),
(18, '131313', '$2y$10$DozbC5QEKB1Q6qE3Wu3VOedkA7uEZXcIpfz94VHV0fm04jjNsiBma', 'jj', 'aa', 'uploads/62e2626cb0c1d3.91002290.jpeg', 'male', 'ivan@strathmore.edu', 'BBIT', '2022-07-30'),
(19, '121212', '$2y$10$C3qSSjDvnTQL8W01JMpaiOW8Cg1IXLes/M.MVjZaKCepG5pWFPX9O', 'frf', 'frfr', 'uploads/62e54ebc4a1458.43939374.jpeg', 'female', 'iii@strathmore.edu', 'BBIT', '2022-07-30'),
(20, '121212', '$2y$10$MSvr80mvJg.NvHv7YxBMo.qYHCgRpqyaG8YDXJRkBlclzJ8sl3m0.', 'Ivan', 'gergtre', 'uploads/62e5502a2cbec5.62458379.jpeg', 'male', 'ivsn@strathmore.edu', 'BBIT', '2022-07-30'),
(21, '121212', '$2y$10$0LrVpYYgww0llW01hGQLn.8OA3e1QglQIJW4GvQuRuLYBXESkA/CK', 'gerggr', 'greg', 'uploads/62e5506fc42273.89426517.jpeg', 'male', 'str@strathmore.edu', 'BBIT', '2022-07-30'),
(22, '121212', '$2y$10$axk/f/iKtKgrIDev1YxvteYz.1kLhYWux/wlsxIl0vdQTkapX1seq', 'gerggr', 'greg', 'uploads/62e550abadaf31.08577441.jpeg', 'male', 'str@strathmore.edu', 'BBIT', '2022-07-30'),
(23, '121212', '$2y$10$f.Nj3xoSriJY0zNWyshcxOGRkwrnNElgseJTBEw0402Lk04vwimrO', 'efwe', 'fewf', 'uploads/62e55118d2dc36.20271369.jpeg', 'male', 'gg@strathmore.edu', 'BBIT', '2022-07-30'),
(24, '121212', '$2y$10$PDBDsiO7C/s7trxjzVjnm.jJPsGO3.BPDmj9DZPQIvbs3ECTI2Q3e', 'fdef', 'gre', 'uploads/62e5515e179e61.25342242.jpeg', 'male', 'fdf@strathmore.edu', 'BBIT', '2022-07-30'),
(25, '345678', '$2y$10$F0yz1VhuIbPX6gQlq6TEXuyFQ3qFefr11NnRYG1LFwnnwGP82pKvm', 'Max', 'Verstappen', 'uploads/62e555a8451372.01501145.jpeg', 'male', 'maxverstappen@strathmore.edu', 'BICS', '2022-07-30');

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
(84, 2, 18, 9),
(86, 5, 18, 9),
(87, 5, 19, 10),
(88, 6, 18, 9),
(89, 6, 19, 10),
(90, 9, 36, 9),
(91, 9, 37, 10),
(92, 9, 23, 11),
(93, 9, 20, 12),
(94, 9, 24, 13),
(95, 9, 21, 14),
(96, 9, 34, 15),
(97, 9, 32, 16),
(98, 9, 28, 17),
(99, 9, 33, 18),
(100, 10, 18, 9),
(101, 10, 37, 10),
(102, 10, 26, 11),
(103, 10, 20, 12),
(104, 10, 24, 13),
(105, 10, 21, 14),
(106, 10, 35, 15),
(107, 10, 30, 16),
(108, 10, 28, 17),
(109, 10, 29, 18),
(110, 4, 36, 9),
(111, 4, 19, 10),
(112, 4, 23, 11),
(113, 4, 27, 12),
(114, 4, 24, 13),
(115, 4, 21, 14),
(116, 4, 34, 15),
(117, 4, 30, 16),
(118, 4, 28, 17),
(119, 4, 29, 18),
(120, 16, 18, 9),
(121, 16, 19, 10),
(122, 16, 26, 11),
(123, 16, 27, 12),
(124, 16, 22, 13),
(125, 16, 21, 14),
(126, 16, 34, 15),
(127, 16, 32, 16),
(128, 16, 28, 17),
(129, 16, 33, 18),
(130, 17, 18, 9),
(131, 17, 37, 10),
(132, 17, 23, 11),
(133, 17, 20, 12),
(134, 17, 24, 13),
(135, 17, 25, 14),
(136, 17, 35, 15),
(137, 17, 30, 16),
(138, 17, 28, 17),
(139, 17, 33, 18),
(140, 18, 36, 9),
(141, 18, 19, 10),
(142, 18, 23, 11),
(143, 18, 27, 12),
(144, 18, 22, 13),
(145, 18, 25, 14),
(146, 18, 35, 15),
(147, 18, 32, 16),
(148, 18, 28, 17),
(149, 18, 29, 18),
(150, 25, 36, 9),
(151, 25, 37, 10),
(152, 25, 23, 11),
(153, 25, 20, 12),
(154, 25, 22, 13),
(155, 25, 25, 14),
(156, 25, 34, 15),
(157, 25, 32, 16),
(158, 25, 28, 17),
(159, 25, 33, 18);

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
  MODIFY `msg_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `positions`
--
ALTER TABLE `positions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `voters`
--
ALTER TABLE `voters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `votes`
--
ALTER TABLE `votes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
