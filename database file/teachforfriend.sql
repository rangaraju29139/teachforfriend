-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2018 at 04:49 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teachfriend`
--

-- --------------------------------------------------------

--
-- Table structure for table `chapters`
--

CREATE TABLE `chapters` (
  `userid` varchar(50) NOT NULL,
  `subjectid` int(50) NOT NULL,
  `chapterid` int(50) NOT NULL,
  `chaptername` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chapters`
--

INSERT INTO `chapters` (`userid`, `subjectid`, `chapterid`, `chaptername`) VALUES
('rangaraju29139@gmail.com', 2, 1, 'introduction to chapter2'),
('rangaraju29139@gmail.com', 3, 2, 'introduction to chapter3'),
('rangaraju29139@gmail.com', 4, 3, 'introduction to chapter 4'),
('rangaraju29139@gmail.com', 5, 4, 'introduction to chapter5'),
('rangaraju44777@gmail.com', 11, 5, 'chapter 11 introduction'),
('rangaraju44777@gmail.com', 12, 6, 'chapter 12 introduction'),
('rangaraju29139@gmail.com', 17, 7, 'help'),
('rangaraju29139@gmail.com', 4, 8, 'this is the dbms subject'),
('rangaraju29139@gmail.com', 4, 9, 'this is the dbms subject'),
('rangaraju44777@gmail.com', 11, 10, 'this is the add giit chapter'),
('rangaraju44777@gmail.com', 11, 11, 'this is the add giit chapter'),
('hariandniko87@gmail.com', 30, 12, 'lexical analysis');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `userid` varchar(50) NOT NULL,
  `subjectid` int(20) NOT NULL,
  `subjectname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`userid`, `subjectid`, `subjectname`) VALUES
('rangaraju29139@gmail.com', 2, 'flat'),
('rangaraju29139@gmail.com', 3, 'flat'),
('rangaraju29139@gmail.com', 4, 'dbms'),
('rangaraju29139@gmail.com', 5, 'cn'),
('rangaraju44777@gmail.com', 11, 'git '),
('rangaraju44777@gmail.com', 12, 'cns'),
('rangaraju44777@gmail.com', 13, 'ds'),
('rangaraju44777@gmail.com', 14, 'oose'),
('rangaraju44777@gmail.com', 15, 'dwdm'),
('rangaraju29139@gmail.com', 17, 'help'),
('rangaraju29139@gmail.com', 26, 'this is wrong subject'),
('rangaraju44777@gmail.com', 29, 'this is the sample edit tutorial subject'),
('hariandniko87@gmail.com', 30, 'compiler design');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `userid` varchar(50) NOT NULL,
  `subjectid` int(50) NOT NULL,
  `chapterid` int(50) NOT NULL,
  `topicid` int(50) NOT NULL,
  `topicname` varchar(50) NOT NULL,
  `topicurl` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `materialurl` varchar(255) DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`userid`, `subjectid`, `chapterid`, `topicid`, `topicname`, `topicurl`, `description`, `materialurl`, `date`) VALUES
('rangaraju29139@gmail.com', 2, 1, 1, 'introduction to chapter1', 'https://www.youtube.com/embed/FXiaIH49oAU', 'this is the sample description about the topic 1', 'https://www.tutorialspoint.com/bootstrap/bootstrap...', '2018-03-15 13:24:18'),
('rangaraju29139@gmail.com', 3, 3, 2, 'introduction to chapter 3', 'https://www.youtube.com/embed/FXiaIH49oAU', 'this is the sample description', 'this is  the sample page', '2018-03-15 13:24:18'),
('rangaraju44777@gmail.com', 11, 6, 3, 'chapter 11 introduction giitttttt', 'https://www.youtube.com/embed/jCEdTq3j-0U', 'this is the description about the chapter 11 introduction', 'http://www.pdf995.com/samples/pdf.pdf', '2018-03-15 13:24:18'),
('rangaraju44777@gmail.com', 12, 5, 4, 'introduction to chapter 5', 'https://www.youtube.com/embed/xmU0s2QtaEY', 'this is the description about the chapter 5 tutoriial', 'http://www.pdf995.com/samples/pdf.pdf', '2018-03-15 13:24:18'),
('rangaraju44777@gmail.com', 11, 5, 5, 'chapter 11 introduction', 'https://www.youtube.com/embed/jCEdTq3j-0U', 'this is the description about the chapter 11 introduction', 'http://www.pdf995.com/samples/pdf.pdf', '2018-03-15 13:24:18'),
('rangaraju44777@gmail.com', 12, 5, 6, 'introduction to chapter 5', 'https://www.youtube.com/embed/xmU0s2QtaEY', 'this is the description about the chapter 5 tutoriial', 'http://www.pdf995.com/samples/pdf.pdf', '2018-03-15 13:24:18'),
('rangaraju44777@gmail.com', 13, 6, 7, 'introduction to chapter 6', 'https://www.youtube.com/embed/2ll4IA146YI', 'THIS IS THE DESCRIPTION ABOUT THE CHAPTER 6 TUTORIAL.', 'http://www.pdf995.com/samples/pdf.pdf', '2018-03-15 13:30:25'),
('rangaraju44777@gmail.com', 13, 6, 8, 'introduction to chapter 6', 'https://www.youtube.com/embed/2ll4IA146YI', 'THIS IS THE DESCRIPTION ABOUT THE CHAPTER 6 TUTORIAL.', 'http://www.pdf995.com/samples/pdf.pdf', '2018-03-15 13:30:32'),
('rangaraju29139@gmail.com', 26, 2, 9, 'how to add tutorial', 'https://www.youtube.com/embed/jCEdTq3j-0U', 'To add the tutorial you need to follow these steps:\r\n1)select subject if new subject the add the subject and select subject\r\n2)selcet the chapter if the chapter is new then add the chapter.\r\n3)then enter the topic details.\r\n4)then click on addTutorial.', '', '2018-03-15 14:47:13'),
('rangaraju29139@gmail.com', 17, 7, 10, 'how to edit tutorial', 'https://www.youtube.com/embed/jCEdTq3j-0U', 'To add the tutorial you need to follow these steps:\r\n1)select subject if new subject the add the subject and select subject\r\n2)selcet the chapter if the chapter is new then add the chapter.\r\n3)then check the topic details make necessary changes to that .\r', NULL, '2018-03-15 14:48:14'),
('rangaraju29139@gmail.com', 2, 3, 11, 'THIS IS THE SAMPLE TOPIC', 'https://www.youtube.com/embed/k2qgadSvNyU', 'this is the description abot the sample tutorial', 'http://www.pdf995.com/samples/pdf.pdf', '2018-03-16 18:07:55'),
('rangaraju29139@gmail.com', 4, 3, 12, 'THIS IS THE SAMPLE TOPIC', 'https://www.youtube.com/embed/k2qgadSvNyU', 'this is the description abot the sample tutorial', 'http://www.pdf995.com/samples/pdf.pdf', '2018-03-16 18:08:54'),
('hariandniko87@gmail.com', 30, 12, 13, 'introduction to lexical ananlysis chapter', 'https://www.youtube.com/embed/WccZQSERfCM', 'this is the description of the  lexical analysis', 'https://www.univ-orleans.fr/lifo/Members/Mirian.Halfeld/Cours/TLComp/l3-0708-LexA.pdf', '2018-03-17 11:36:50');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` varchar(255) NOT NULL,
  `givenname` varchar(50) NOT NULL,
  `familyname` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `number` bigint(12) DEFAULT NULL,
  `eduqual` varchar(20) DEFAULT NULL,
  `picture` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `givenname`, `familyname`, `gender`, `number`, `eduqual`, `picture`) VALUES
('hariandniko87@gmail.com', 'Harry', 'Narayan', 'male', NULL, NULL, 0x6148523063484d364c793973614451755a3239765a32786c64584e6c636d4e76626e526c626e5175593239744c7930785933567954577042546e67315a79394251554642515546425155464253533942515546425155464251554e616479397156585978583231554e544e596379397761473930627935716347633d),
('rangaraju29139@gmail.com', 'ranga raju', 'penmatsa', '', NULL, NULL, ''),
('rangaraju44777@gmail.com', '', '', '', NULL, NULL, ''),
('vijaynadimpalliraju@gmail.com', 'vijaynadimpalli', 'raju', 'male', NULL, NULL, 0x6148523063484d364c793973614455755a3239765a32786c64584e6c636d4e76626e526c626e5175593239744c79314e65484644554531565358707562793942515546425155464251554642535339425155464251554642515546434f433936517a464a4e316b35595852596379397761473930627935716347633d);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chapters`
--
ALTER TABLE `chapters`
  ADD PRIMARY KEY (`chapterid`,`userid`,`subjectid`),
  ADD KEY `userid` (`userid`),
  ADD KEY `subjectid` (`subjectid`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`subjectid`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`topicid`,`userid`,`subjectid`,`chapterid`),
  ADD KEY `userid` (`userid`),
  ADD KEY `chapterid` (`chapterid`),
  ADD KEY `subjectid` (`subjectid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chapters`
--
ALTER TABLE `chapters`
  MODIFY `chapterid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `subjectid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `topicid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chapters`
--
ALTER TABLE `chapters`
  ADD CONSTRAINT `chapters_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chapters_ibfk_2` FOREIGN KEY (`subjectid`) REFERENCES `subjects` (`subjectid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subjects`
--
ALTER TABLE `subjects`
  ADD CONSTRAINT `subjects_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `topics`
--
ALTER TABLE `topics`
  ADD CONSTRAINT `topics_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `topics_ibfk_2` FOREIGN KEY (`chapterid`) REFERENCES `chapters` (`chapterid`) ON UPDATE CASCADE,
  ADD CONSTRAINT `topics_ibfk_4` FOREIGN KEY (`subjectid`) REFERENCES `subjects` (`subjectid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
