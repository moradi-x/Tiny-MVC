-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: localhost    Database: mvc_blog
-- ------------------------------------------------------
-- Server version	8.0.29

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `articles` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_id` int unsigned NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_cat_id` (`cat_id`),
  CONSTRAINT `fk_articles_category` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articles`
--

LOCK TABLES `articles` WRITE;
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
INSERT INTO `articles` VALUES (2,'school ',2,'  School is the first place where children learn discipline and knowledge.It shapes their character and builds their confidence.Teachers guide students to discover their hidden talents.A good school creates an environment of respect and teamwork.Students make friends who often stay with them for life.Extracurricular activities add joy to learning.Education in school connects theory with real experiences.Classrooms become the foundation of future success.Schools prepare children for social and professional life.A strong school system helps every society grow.','2025-12-27 08:33:00','2025-12-27 08:37:29'),(3,'university',2,'University is a place of higher education and research.It helps students specialize in different fields of knowledge.Professors guide learners toward academic and professional growth.Universities encourage independent thinking and creativity.They provide opportunities for research and innovation.Campus life builds friendships and leadership skills.Clubs and activities enrich student experiences.Universities connect theory with practical applications.Graduates contribute to society with their expertise.A strong university system strengthens the future of a nation.','2025-12-27 08:33:21',NULL),(4,'programer',3,'Programming is the backbone of the digital world.It allows people to create software and applications.Languages like Python and Java make coding possible.Programmers solve problems with logic and creativity.Debugging teaches patience and persistence.Websites and mobile apps are built through code.Automation saves time thanks to programming.Every industry now depends on software developers.Programming shapes the future of technology.Anyone can learn coding with practice and dedication.','2025-12-27 08:33:43',NULL),(5,'laboratory',4,'A laboratory is the heart of scientific discovery.It provides a safe space for experiments and research.Students and scientists test their ideas in practice.Modern labs are equipped with advanced instruments.Safety rules are always the top priority inside.Laboratories encourage curiosity and problem-solving skills.Great inventions begin with small experiments here.Teamwork in labs creates stronger results.Medical progress depends heavily on laboratory research.Labs turn imagination into real-world innovation.','2025-12-27 08:34:03',NULL),(6,'library',4,'A library is a treasure of wisdom and knowledge.It offers thousands of books on every subject.Libraries are quiet and peaceful places for study.Digital libraries have made reading more accessible.Students use libraries to improve research skills.Reading here builds focus and creativity.Libraries also preserve culture and history.Librarians guide readers toward useful resources.Every visit to a library feels like a journey.Libraries truly empower both individuals and society.','2025-12-27 08:34:31',NULL),(7,'think tank',4,'A think tank is a center for new ideas and solutions.Experts gather to analyze complex global problems.They research topics like education, technology, and policy.Think tanks often influence government decisions.Collaboration between scholars makes their work stronger.They provide independent and critical perspectives.Think tanks publish reports for society and leaders.Their role is to inspire innovation and growth.They connect knowledge with real-world decision-making.','2025-12-27 08:34:49',NULL),(8,'professors and teachers',4,'Teachers are the guiding lights of education.They share knowledge and values with students.Professors inspire curiosity and critical thinking.A good teacher encourages students to ask questions.They build character as well as intelligence.Professors lead research in universities worldwide.Teachers motivate students to follow their dreams.Respect for teachers is respect for learning.Their influence lasts long after school ends.Teachers shape the leaders of tomorrow.','2025-12-27 08:35:54',NULL),(9,'Elites',2,'Elites are people with exceptional talent and skill.They contribute to science, art, and technology.Nations progress faster with the help of elites.They bring new inventions and discoveries to life.Elites often inspire the younger generation.Their hard work becomes a model for others.Universities and research centers support their growth.Elites face challenges but overcome them with vision.They connect creativity with practical solutions.A society that values elites builds a brighter future.','2025-12-27 08:36:15',NULL),(10,'security',5,'Cybersecurity protects data and systems from digital threats.Hackers often try to steal valuable information.Strong passwords are the first line of defense.Firewalls and antivirus tools add extra protection.Encryption secures online communication and privacy.Companies invest heavily in cyber defense.Ethical hackers help find weaknesses in systems.National security relies on strong cybersecurity measures.Public awareness reduces risks of cybercrime.The digital future depends on safe cyberspace.','2025-12-27 08:36:46',NULL),(11,'designers',5,'Web design is the art of creating digital spaces.It combines creativity with technical knowledge.A good website is simple, clear, and attractive.Colors and fonts create a strong brand identity.Responsive design works on both phones and computers.HTML, CSS, and JavaScript are essential tools.User experience is the heart of web design.Fast loading makes a website more successful.Designers mix art with technology to inspire users.Web design brings ideas to life online.!','2025-12-27 08:37:16',NULL);
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (2,'scientific','scientific Description...','2025-12-27 08:29:19','2025-12-27 08:30:21'),(3,'technology','technology Description...','2025-12-27 08:29:37',NULL),(4,'research ','research Description...','2025-12-27 08:29:54',NULL),(5,'design','design Description...','2025-12-27 08:30:14',NULL);
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-12-27 12:14:54
