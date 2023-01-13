-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2020 at 11:52 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `club`
--

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `id_artist` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(1500) CHARACTER SET ucs2 COLLATE ucs2_unicode_ci NOT NULL,
  `photo` varchar(110) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`id_artist`, `name`, `description`, `photo`) VALUES
(1, 'Bekon', 'Daniel Tannenbaum may not be a name you’re familiar with, but his portfolio is one for any hip-hop producer to gawk over. Under the moniker “Danny Keyz,” the New York native has collaborated with the likes of RZA, Dr. Dre and Eminem and worked on BJ the Chicago Kid’s Grammy-nominated album In My Mind. But when the mysterious pseudonym “Bekon” popped up all over Kendrick Lamar’s DAMN., it got the Internet asking: “Who is this guy?”\r\n\r\nUnder the new name, Tannenbaum contributed to eight of the lauded album’s 14 tracks. We were talking to discuss the surprise release of his debut album as Bekon, Get With the Times.\r\n\r\n“Imagine holding in a joke that you think is a good joke for 10 years,” the producer says when I ask how it feels to have his own music out in the world. “You keep waiting for your moment to say it. You go to the comedy show and you’re on the list to perform and the performer goes and you’re next, then they’re like, ‘Oh sorry, we’re done for the night.’ That’s what it feels like. It’s this thing that’s been wanting to come out for a long time.”\r\n\r\nWith a schedule as constantly hectic as his, Tannenbaum never felt like the time was right to release his own music, but working with Kendrick Lamar helped his creative juices flow. “Instead of producing -- in a traditional sense -- his record, [Kendrick]’s like, ‘Yo, just go write your music and we’ll find a way to put your music on my album,’” he explains. “So it sort of set the scene for me putting out my own album.”', 'bekon.jpg'),
(2, 'Tiny Meat Gang', 'Tiny Meat Gang was first formed on June 2, 2017 upon the upload of Ko\'s YouTube video \"It\'s Everyday? No.\", which debuted the song at the end of the video. On June 15, 2017, an official music video for the song was uploaded on Ko\'s channel.\r\n\r\nThe duo\'s greatest commercial success is the song \"Walkman\", released June 7, 2019. The official music video has amassed over 13 million views on YouTube and over 20 million streams on Spotify. The song went viral on the app TikTok, spawning the \"#WalkmanChallenge\" in which people would film themselves doing a dance to the song.\r\n\r\nOn October 24, 2019, TMG signed to Sony Music\'s Arista Records, and agreed to release a new EP with the label. On the move, the duo remarked:\r\n\r\n\"We couldn\'t be more pumped to join the Arista family. David [Massey] and Matt [D\'Arduini] and the rest of the team are the best in the biz and have launched careers for some of the most successful acts in the world. As we continue to grow, we wanted to find a home that is as dedicated to our music as we are, and we\'re confident that they are the best people to help take us to the next level.\"\r\n\r\nDavid Massey, Arista\'s CEO and president, and Matt D\'Arduini, the label\'s senior vice president, said that they are \"so happy\" to have the \"brilliant and creative duo\" on their label.', 'can.jpg'),
(3, 'Sophie', 'Sophie primarily uses the Elektron Monomachine and Ableton Live to create music. Instead of sampling, instrumentals are built from waveforms. Likening the construction of a track to building a sculpture out of different materials, Sophie uses the Monomachine to create sounds resembling \"latex, balloons, bubbles, metal, plastic, elastic.\" AllMusic wrote that Sophie\'s \"sophisticated, hyperkinetic productions\" feature a \"surrealist, blatantly artificial quality\", typically making use of high-pitched female vocals in addition to \"sugary synthesizer textures, and beats drawing from underground dance music styles.\" The New York Times described Sophie\'s work as \"giddy fun, but also an invitation to consider pop\'s pleasures, structures and gender expectations, and pop\'s commercial status as both a consumer item and an emotional catalyst.\" The Fader likened it to \"K-Pop, J-Pop, Eurodance at its most chaotic, and even turn of the millennium American/UK boybandisms.\" When Billboard asked Sophie what genre her music falls under, she replied \"advertising\".', 'sophie.jpg'),
(4, 'Yves Tumor', 'Raised in Knoxville, Tennessee, Tumor started making music at age 17 as an outlet away from \"dull, conservative surroundings.\" They taught themself how to play drums, bass, guitar, and keyboards. Describing their experience growing up in Tennessee as unpleasant, they moved at age 20 to San Diego, and after college to Los Angeles, where they met Mykki Blanco in 2012, with whom they later toured for two and a half years throughout Europe and Asia.\r\nIn September 2018, Tumor released their Warp debut, Safe in the Hands of Love, with no prior announcement. It was preceded by the singles \"Noid\" on July 24, \"Licking an Orchid\" featuring James K on August 29, and \"Lifetime\" on September 3. The album received universal acclaim from music critics. Pitchfork\'s Jayson Greene stated in their review that the album \"dwarfs everything the artist has released by several orders of magnitude. The leap is so audacious it\'s disorienting.\"', 'yv.jpg'),
(5, 'Weyes Blood', 'Mering has stated that church music, which figured prominently in her upbringing, has been an influence on her songwriting. \"Most of the great classical music and early music of our time is written for God in a sacred space,\" she said. \"So sacred music and sacred space music — that was my favorite thing about music. Not so much content-wise. Not so much the theory and concept of God, but just the idea that we\'ve built this gigantic, stone cathedral palace for people to sing in...  When I record, I think about sacred space and I think about what would be the sound of your soul if there is music coming out of it. It would probably be an echoey, strange chamber.\" In an interview with Nardwuar in 2019 she revealed that she is also influenced by The Velvet Underground, Wolf Eyes, and experimental artist Inca Ore. Mering states in the same interview that early in her career while making experimental music, people likened her songs to horror film soundtracks. So she began to listen to and be influenced by film soundtracks such as Jaws and the Wizard of Oz.', 'weyes.jpg'),
(6, 'JPEGMafia', 'After the release of Veteran in 2018, Hendricks started working on his next album. He recorded 93 songs, and whittled it down to 18 tracks. He mixed and mastered it at the end of Vince Staples\' tour, posting percentage updates frequently on his Instagram. Prior to the release, he would label his project as a \"disappointment\" in interviews and his social media. The first single from the album, \"Jesus Forgive Me, I Am a Thot\", was released August 13, 2019. He promoted the album by uploading a series of listening sessions to his YouTube channel where his friends were discussing and reacting to the album. All My Heroes Are Cornballs was released on September 13, 2019 to further critical acclaim and was his first album to chart. In October 2019, he went on the JPEGMafia Type Tour to support his new album.\r\n\r\nIn March 2020, Hendricks started a weekly vlog series on his YouTube channel called HTBAR (How To Build A Relationship). The series feature JPEGMafia talking to other artists and friends about various topics, mostly about music, life and politics. Each episode\'s soundtrack consist of unreleased songs, demos and instrumentals produced by JPEGMafia. Artists that have featured on the vlog series include Danny Brown, Kenny Beats, Lykke Li, Orville Peck, Saba and more.', 'peggy.jpg'),
(7, 'King Krule', 'Many reviewers and journalists have noted King Krule\'s unusual transcendence and appropriation of disparate genres. His music has been described mainly with jazz derivatives such as punk jazz and jazz fusion, but also as darkwave, post-punk and hip hop.Writers have also noted elements of trip hop,jazz rap and dub in some of his songs. Jason Lymangrover of Allmusic states that his songs are mainly in the form of ballads with major seventh chords, but by contrast there is also a \"grittiness\" to Archy\'s voice and persona, portraying him as \"the type of kid who would be quick to throw a punch without asking questions.\"\r\n\r\nHis music has been likened to Morrissey and Edwyn Collins. He is inspired by disparate influences such as Elvis Presley, Gene Vincent, Josef K, Chet Baker, Fela Kuti, J Dilla, Billy Bragg, Aztec Camera (his godfather is the band\'s former drummer, Dave Ruffy) and The Penguin Cafe Orchestra.\r\n\r\nMarshall\'s lyrics, according to a Flaunt magazine interview, generally consist of romance, sex, aggression, conflict, and depression. These themes link to his literary influences, in which Marshall further elaborated: “Literature, poems, songs are all very similar. I used to read lots of poetry and sit there for ages trying to decipher the meaning, or work out the narration behind it all, then I found my own form of that. You can see how their metaphors develop and understand their uses. So really, I learnt to do that for myself.”', 'kk.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(4) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `level` int(2) NOT NULL,
  `type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `name`, `link`, `level`, `type`, `parent_id`) VALUES
(2, 'program', 'index.php?page=program', 1, 'header', NULL),
(3, 'stages', 'index.php?page=stages', 1, 'header', NULL),
(4, 'contact', 'index.php?page=contact', 1, 'header', NULL),
(5, 'login', 'index.php?page=login', 1, 'header', NULL),
(6, 'register', 'index.php?page=register', 1, 'header', NULL),
(7, 'author', 'index.php?page=author', 1, 'footer', NULL),
(8, 'documentation', 'documentation.pdf', 1, 'footer', NULL),
(9, 'profile', 'index.php?page=profile', 1, 'header', NULL),
(10, 'dl word (tickets)', 'models/dlWord.php', 2, 'header', 9),
(11, 'logout', 'index.php?logout=1', 2, 'header', 9),
(12, 'control panel', 'index.php?page=controlpanel', 1, 'header', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id_news` int(10) NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `text` varchar(1500) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `news_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id_news`, `title`, `text`, `photo`, `news_date`) VALUES
(1, 'Milking It', 'We talk to American filmmaker Kelly Reichardt about her new film, First Cow.', '1.jpg', '2020-07-13 02:57:14'),
(2, 'Life In Film: Levan Atkin', 'The writer/director of And Then We Danced talks masculinity and queer love stories.', '2.jpg', '2020-07-13 02:57:14'),
(3, 'Portrait Of A Lady On Fire', 'We sit down with one of the leading women of Céline Sciamma’s Portrait of a Lady on Fire.', '3.jpg', '2020-07-12 02:57:14');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id_orders` int(20) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_program` int(12) NOT NULL,
  `id_price` int(12) NOT NULL,
  `ticketsQuantity` int(2) NOT NULL,
  `orders_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id_orders`, `id_user`, `id_program`, `id_price`, `ticketsQuantity`, `orders_date`) VALUES
(1, 2, 6, 6, 1, '2020-07-11 21:57:27'),
(2, 2, 4, 4, 2, '2020-07-11 22:13:35');

-- --------------------------------------------------------

--
-- Table structure for table `price`
--

CREATE TABLE `price` (
  `id_price` int(12) NOT NULL,
  `id_program` int(12) NOT NULL,
  `price` int(4) NOT NULL,
  `price_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_unicode_ci;

--
-- Dumping data for table `price`
--

INSERT INTO `price` (`id_price`, `id_program`, `price`, `price_date`) VALUES
(1, 1, 10, '2020-07-01'),
(2, 2, 15, '2020-07-01'),
(3, 3, 8, '2020-07-01'),
(4, 4, 20, '2020-07-08'),
(5, 5, 25, '2020-07-07'),
(6, 6, 15, '2020-07-08'),
(7, 7, 10, '2020-07-03'),
(8, 8, 10, '2020-07-03'),
(9, 1, 15, '2020-07-11');

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `id_program` int(12) NOT NULL,
  `program_name` varchar(100) CHARACTER SET utf16 COLLATE utf16_unicode_ci NOT NULL,
  `program_description` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cover` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `stage_id` int(3) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`id_program`, `program_name`, `program_description`, `cover`, `stage_id`, `date`) VALUES
(1, 'Keep Going', 'Our latest panel brings a fresh perspective on the most recent situation the music and club scenes found themselves in, with some prominent experts answering the most burning questions.', 'Lucas Hesse.png', 1, '2020-07-15'),
(2, 'LOOKIN4U', 'They\'re back after a year long hiatus! And while they retreated for a year of family affairs, now they\'re armed with 365 days of new music. Excited to have them back! Join them for a night of full on techno.', 'Nicola Van Acker.png', 2, '2020-07-28'),
(3, 'GLOBAL DOMINATOR TOUR', 'Coming from Belgrade Serbia, GLOBAL DOMINATOR TOUR is recognized as one of the pillars of the local techno scene over the past decade. As a rebel against genre confinements they were always attracted to the timeless techno archetype.', 'tmg.jpg', 1, '2020-10-04'),
(4, 'Heaven To A Tortured Mind', 'Heaven To A Tortured Mind continues their sonic pursuit into the future, with all the more simple intentions : affirming their style, levelling up their game, and always keeping on taking the audience into uncharted territories of sounds and space, where brutalist atmospheres reign supreme.', 'yves.jpg', 1, '2020-07-31'),
(5, 'PICTURE ME BETTER', 'On AUG 7 we celebrate anniversaries of Drugstore, Dim, and 8 years since it all started in Bivši bar. A big thank you to all the local DJs, guest performers, staff and visitors who have witnessed our deeds! For this occasion we are gathering representatives of some of the beloved Belgrade collectives whose sets marked the past eight years of our existence.', 'Steffen Hotel, Julia Kobel, Salim Kocaaydin, Jonas Becker.png', 2, '2020-08-07'),
(6, 'MATEUS ALMEIDA', 'As Drugstore’s most held event since 2013 with over 40 events and played alongside names such as:\r\nRodhad, DVS1, Dasha Rush, Surgeon, Oscar Mulero, Phase, Dimi Angelis, Ancient Methods ,Shifted, Stanislav Tolkachev, Adam X, Elektrabel, Tommy Four Seven, Blawan, Developer,\r\nVril, Jeroen Search, Abdulla Rashim, Inigo Kennedy, Bas Mooy, Kangding Ray, Pfirter … These sequences of events led to invitations to Berlin\'s iconic Tresor club (August 2014 and November 2015).', 'Mateus Almeida.png', 1, '2020-07-31'),
(7, 'GABRIEL', 'Storming over Europe, a beloved post-punk/new wave/synth-punk GABRIEL will be hitting Belgrade with its thunder! Gritty East-European attitude from Minsk, Belarus.  Dark yet danceable, and with a heavy dose of goth ethos, the music is reminiscent of the masters that predate it, but make no mistake: it creates a sound and meaning that is immediately recognizable as all its own.', 'Gabriel Lim.png', 3, '2020-07-23'),
(8, 'HU?', 'After dancing all night long in the Main Hangar at Belgrade\'s port as well as all around the Serbian capital, join us at HU? 2020 official afterparties at Drugstore Belgrade, the temple of electronic music with brutal interiors and intense industrial atmosphere.', 'Catherine Hu.png', 3, '2020-07-23');

-- --------------------------------------------------------

--
-- Table structure for table `program_artist`
--

CREATE TABLE `program_artist` (
  `id_program_artist` int(15) NOT NULL,
  `id_program` int(12) NOT NULL,
  `id_artist` int(11) NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `program_artist`
--

INSERT INTO `program_artist` (`id_program_artist`, `id_program`, `id_artist`, `time`) VALUES
(1, 1, 1, '23:00:00'),
(2, 3, 2, '21:00:00'),
(3, 2, 3, '23:30:00'),
(4, 4, 4, '23:30:00'),
(5, 5, 5, '20:00:00'),
(6, 6, 6, '22:00:00'),
(7, 7, 7, '18:00:00'),
(8, 8, 3, '22:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id_role` int(5) NOT NULL,
  `name` varchar(50) COLLATE utf32_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id_role`, `name`) VALUES
(1, 'admin'),
(2, 'subscriber');

-- --------------------------------------------------------

--
-- Table structure for table `stage`
--

CREATE TABLE `stage` (
  `id_stage` int(3) NOT NULL,
  `name` varchar(150) COLLATE ucs2_unicode_ci NOT NULL,
  `capacity` int(4) NOT NULL,
  `stage_description` varchar(1500) COLLATE ucs2_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_unicode_ci;

--
-- Dumping data for table `stage`
--

INSERT INTO `stage` (`id_stage`, `name`, `capacity`, `stage_description`) VALUES
(1, 'Main', 1200, 'Main Stage is situated at the very heart of Petrovaradin Fortress, with a capacity for over 35,000 people and a scenic natural backdrop. Every year the Main Stage welcomes renowned stars and artists from all music genres, ranging from rock, pop, hip-hop all the way to house. Along with the most popular performers, it also features the best bass acts in after-headliner sessions, which have become a trademark of the festival, allowing the party to continue until dawn.'),
(2, 'beats', 500, 'When July knocks on the door, all eyes of the global electronic music scene turn to the spectacular Beats Stage. The history of the globally praised stage at Zeta Club is filled with amazing moments, magical sunrises, party insatiable audiences and all of the greatest electronic acts in the world. This year, the famous Stage will showcase even more innovations to be experienced live at the magnificent site of the Petrovaradin Fortress in Belgrade, Serbia.'),
(3, 'dance', 700, 'Is there a better place for metal, HC and punk than the deep trenches of Belgrade? Hardly. Every Zeta Club, Dance stage gets raided by legends and uprising bands that shake the audience to their core. A true treat for any fan of extreme sounds, Dance\'s furious program always delivers.');

-- --------------------------------------------------------

--
-- Table structure for table `stage_photo`
--

CREATE TABLE `stage_photo` (
  `id_stage_photo` int(10) NOT NULL,
  `id_stage` int(3) NOT NULL,
  `photo` varchar(110) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `stage_photo`
--

INSERT INTO `stage_photo` (`id_stage_photo`, `id_stage`, `photo`) VALUES
(1, 1, 's1.jpg'),
(2, 1, 's11.jpg'),
(3, 1, 's12.jpg'),
(4, 2, 's2.jpg'),
(5, 2, 's21.jpg'),
(6, 2, 's22.jpg'),
(7, 3, 's3.jpg'),
(8, 3, 's31.jpg'),
(9, 3, 's32.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `first_name` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `last_name` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `username` varchar(25) COLLATE utf32_unicode_ci NOT NULL,
  `email` varchar(70) COLLATE utf32_unicode_ci NOT NULL,
  `password` varchar(32) COLLATE utf32_unicode_ci NOT NULL,
  `role_id` int(5) NOT NULL DEFAULT 2,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `first_name`, `last_name`, `username`, `email`, `password`, `role_id`, `active`, `date_created`) VALUES
(1, 'Admin', 'Admin', 'admin', 'admin@gmail.com', '2e33a9b0b06aa0a01ede70995674ee23', 1, 1, '2020-07-05 16:58:08'),
(2, 'Teodora', 'Nedeljkovic', 'teodora', 'nedeljkovicteodora3@gmail.com', 'ce256bd982b689e87529b15f85c5cf39', 2, 0, '2020-07-05 17:46:42'),
(3, 'Nina', 'Ninic', 'nina', 'nina3@ict.edu.rs', '913afec07adbb41e4a8cde1c96f87998', 2, 0, '2020-07-13 08:28:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`id_artist`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`),
  ADD KEY `parent_id` (`parent_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_news`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_orders`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_price` (`id_price`),
  ADD KEY `id_program` (`id_program`);

--
-- Indexes for table `price`
--
ALTER TABLE `price`
  ADD PRIMARY KEY (`id_price`),
  ADD KEY `id_program` (`id_program`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`id_program`),
  ADD KEY `stage_id` (`stage_id`);

--
-- Indexes for table `program_artist`
--
ALTER TABLE `program_artist`
  ADD PRIMARY KEY (`id_program_artist`),
  ADD KEY `id_artist` (`id_artist`),
  ADD KEY `id_program` (`id_program`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `stage`
--
ALTER TABLE `stage`
  ADD PRIMARY KEY (`id_stage`);

--
-- Indexes for table `stage_photo`
--
ALTER TABLE `stage_photo`
  ADD PRIMARY KEY (`id_stage_photo`),
  ADD KEY `id_stage` (`id_stage`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artist`
--
ALTER TABLE `artist`
  MODIFY `id_artist` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id_news` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id_orders` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `price`
--
ALTER TABLE `price`
  MODIFY `id_price` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `id_program` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `program_artist`
--
ALTER TABLE `program_artist`
  MODIFY `id_program_artist` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `stage`
--
ALTER TABLE `stage`
  MODIFY `id_stage` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `stage_photo`
--
ALTER TABLE `stage_photo`
  MODIFY `id_stage_photo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`parent_id`) REFERENCES `menu` (`id_menu`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`id_price`) REFERENCES `price` (`id_price`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`id_program`) REFERENCES `program` (`id_program`) ON UPDATE CASCADE;

--
-- Constraints for table `price`
--
ALTER TABLE `price`
  ADD CONSTRAINT `price_ibfk_1` FOREIGN KEY (`id_program`) REFERENCES `program` (`id_program`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `program`
--
ALTER TABLE `program`
  ADD CONSTRAINT `program_ibfk_1` FOREIGN KEY (`stage_id`) REFERENCES `stage` (`id_stage`);

--
-- Constraints for table `program_artist`
--
ALTER TABLE `program_artist`
  ADD CONSTRAINT `program_artist_ibfk_1` FOREIGN KEY (`id_artist`) REFERENCES `artist` (`id_artist`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `program_artist_ibfk_2` FOREIGN KEY (`id_program`) REFERENCES `program` (`id_program`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `stage_photo`
--
ALTER TABLE `stage_photo`
  ADD CONSTRAINT `stage_photo_ibfk_1` FOREIGN KEY (`id_stage`) REFERENCES `stage` (`id_stage`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`id_role`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
