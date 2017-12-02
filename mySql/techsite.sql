/*
 database
*/
-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2017 at 05:23 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `techsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `comment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `comment`) VALUES
(12, 'Bill Gates', 'Great Website'),
(13, 'Mark Zukerberg', 'Wow, what a website'),
(22, 'Barack Obama', 'I cant leave this site'),
(28, 'Best', 'At last this webSite is ready'),
(29, 'Christopher', 'Hello'),
(30, 'Faith Ibitoye', 'I am proud of My brother\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `mysubscribers`
--

CREATE TABLE `mysubscribers` (
  `idEmail` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `created at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `author`, `created at`) VALUES
(1, 'Circle with Disney raises $10 million for its parental control device for families', 'Circle Media, the company behind Circle with Disney – a device that helps parents enforce their home’s internet rules and restrictions – has raised $10 million in Series A funding, the company announced this morning. The round was led by early stage venture fund Relay Ventures. There was another private equity investment in the round, but the parties didn’t want to be named.\r\n\r\nThe Portland-based startup had previously raised $800,000 in startup capital and $3 million in convertible notes. We had reported $1.5 million raised in November 2015, while fundraising was ongoing. \r\n\r\nThe A round included $7 million in new money from Relay and others, as well as the $3 million in convertible notes that changed from loan to stock. Counting this as additional new money, Circle has raised $10 million to date. \r\n\r\nThe idea behind Circle with Disney is to offer parents a simpler way of managing the devices on their home network, including when family members are allowed to be online, and what content they’re able to access. This is not a novel concept, to be fair – numerous companies have offered internet control software in the past, and several makers of network-attached hardware exist today that can do much of what Circle with Disney can, too. \r\n\r\nFor example, Circle’s device competes with newer kid-safe routers like Torch, as well as modern routers that include parental control features, like Orbi, Eero, Luma, and others. It also takes on services like OpenDNS’s family shield or even the newer parental control applications rolling out from larger companies, like Comcast’s new Xfinity xFi app, Amazon’s FreeTime, or Google’s Family Link. \r\n\r\nLike many of these devices and services, Circle with Disney allows parents to set device time limits, device “bedtimes,” configure internet and app filters, track web usage, and pause the home’s internet. ', 'Ibitoye Best', '2017-06-08 22:37:44'),
(2, 'Facebook Closes $19 Billion WhatsApp Deal', 'Facebook says it has wrapped up its landmark $19 billion acquisition of WhatsApp, a deal that was hashed out in Mark Zuckerberg\'s house over the course of a few days in February and sealed over a bottle of Jonnie Walker scotch.\r\n\r\nWhatsApp has continued to run its operation completely independently since then, but the closing of the deal marks the start of a gradual integration as Facebook gives the world\'s biggest mobile messaging service legal and administrative support and -- eventually, we can presume -- finds new ways to monetize the company it spent more than Iceland\'s GDP on.\r\n\r\nWhatsApp founders Jan Koum and Brian Acton became billionaires last February when Facebook announced it was buying the company they had started five years ago for a jaw-dropping $19 billion. Having mostly shunned venture capital investments till then the founders had kept large stakes. Koum still had around 45% at the time of the deal, leaving the Ukrainian-born immigrant to pocket $6.8 billion and former Yahoo YHOO +10.25% engineer Acton with $3.5 billion after taxes. WhatsApp founder Jan Koum now gets a seat on the Facebook board and will match Zuckerberg’s $1 salary.\r\n\r\nFacebook will now award 177.8 million shares of its Class A common stock and $4.59 billion in cash to WhatsApp’s shareholders, it said in an SEC filing over the weekend, plus 45.9 million shares (restricted stock units) to WhatsApp\'s employees to complete the deal.\r\n\r\nFortunately for those parties, the value of Facebook\'s shares are now higher than they were when the deal was announced in February, notes Re/code’s Peter Kafka, making the deal worth around $21.8 billion.\r\n\r\nThe acquisition has gone through a few regulatory hoops, but it passed the final one last Friday when the European Union gave it the green light.\r\n\r\nWhatsApp makes money by charging a $1 a year subscription in a handful of countries that have clear carrier billing systems and where credit card penetration is high, bringing in about $20 million in annual revenue, according to Forbes\' estimates. That\'s not enough to justify a $19 billion price tag, so Facebook is almost certainly looking at other ways the messaging service could make money.\r\n\r\nWhatsApp is the most globally diverse messaging service, with more than 600 million monthly active users from Europe to South America to Asia, so some kind of money transfer service for the world\'s increasingly globalized workforce might be one way.\r\n\r\nFacebook\'s interest in the field of money transfer is well known. In April we reported that Facebook had been working since late 2013 on a European-wide money-transfer and storage service. Two months later it hired PayPal CEO David Marcus as head of the company\'s \"Messaging Products.\" Then last week screenshots tweeted by a Stanford computer science student showed Facebook had already put elements of a payments infrastructure into place in Messenger for iOS, which had yet to be activated.', 'Ibitoye Best', '2017-06-08 22:37:44');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `hash` varchar(32) NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `hash`, `active`) VALUES
(1, 'Ibi', 'toye', 'rotimiibitoyebest@yahoo.co.uk', '$2y$10$LL8uaJ6buGCOn62gkp7TNebZ7RI5d.DRjDcnePkVKgnEd.QY5Gdh6', 'a02ffd91ece5e7efeb46db8f10a74059', 0),
(2, 'best', 'ibitoye', 'rotimibitoyebest@yahoo.co.uk', '$2y$10$FFdofmb9wfFnE6h2oMpNIekBYmb7T938D4TLbmG4DynI/4P/dejTW', '00411460f7c92d2124a67ea0f4cb5f85', 0),
(3, 'Best', 'pJo', 'rotimiibitoybest@yahoo.com', '$2y$10$9Oog1dpaosL1cbPEx/.SQOo2M9n.r7F9LR5xlEhdtzGkUuPHDvkqS', '5705e1164a8394aace6018e27d20d237', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mysubscribers`
--
ALTER TABLE `mysubscribers`
  ADD PRIMARY KEY (`idEmail`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
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
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `mysubscribers`
--
ALTER TABLE `mysubscribers`
  MODIFY `idEmail` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
