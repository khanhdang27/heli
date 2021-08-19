-- MySQL dump 10.13  Distrib 5.5.62, for Win64 (AMD64)
--
-- Host: 178.128.213.86    Database: helios
-- ------------------------------------------------------
-- Server version	8.0.26-0ubuntu0.20.04.2

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `banners`
--

DROP TABLE IF EXISTS `banners`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `banners` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `banner_title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `banners`
--

LOCK TABLES `banners` WRITE;
/*!40000 ALTER TABLE `banners` DISABLE KEYS */;
INSERT INTO `banners` VALUES (1,'太陽神教育網上課程 全面協助你的升學計畫','2021-08-18 01:20:34','2021-08-18 01:19:34','2021-08-18 01:20:34'),(2,'太陽神教育網上課程 全面協助你的升學計畫','2021-08-18 01:25:15','2021-08-18 01:20:34','2021-08-18 01:25:15'),(3,'太陽神教育網上課程 全面協助你的升學計畫.','2021-08-18 01:25:46','2021-08-18 01:25:15','2021-08-18 01:25:46'),(4,'太陽神教育網上課程 全面協助你的升學計畫','2021-08-18 01:26:23','2021-08-18 01:25:46','2021-08-18 01:26:23'),(5,'太陽神教育網上課程 全面協助你的升學計畫','2021-08-18 01:26:53','2021-08-18 01:26:23','2021-08-18 01:26:53'),(6,'太陽神教育網上課程 全面協助你的升學計畫','2021-08-19 08:19:03','2021-08-18 01:26:53','2021-08-19 08:19:03'),(7,'Test','2021-08-19 08:19:41','2021-08-19 08:19:03','2021-08-19 08:19:41'),(8,'Test','2021-08-19 08:19:52','2021-08-19 08:19:41','2021-08-19 08:19:52');
/*!40000 ALTER TABLE `banners` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blog_tag`
--

DROP TABLE IF EXISTS `blog_tag`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blog_tag` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `blog_id` bigint unsigned NOT NULL,
  `tag_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `blog_tag_blog_id_foreign` (`blog_id`),
  KEY `blog_tag_tag_id_foreign` (`tag_id`),
  CONSTRAINT `blog_tag_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE,
  CONSTRAINT `blog_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog_tag`
--

LOCK TABLES `blog_tag` WRITE;
/*!40000 ALTER TABLE `blog_tag` DISABLE KEYS */;
INSERT INTO `blog_tag` VALUES (1,1,2,'2021-08-18 02:29:12','2021-08-18 02:29:12'),(2,2,2,'2021-08-18 14:08:43','2021-08-18 14:08:43'),(3,3,2,'2021-08-18 14:13:42','2021-08-18 14:13:42'),(4,3,3,'2021-08-18 14:13:42','2021-08-18 14:13:42'),(5,3,4,'2021-08-18 14:13:42','2021-08-18 14:13:42'),(6,4,2,'2021-08-18 14:14:45','2021-08-18 14:14:45'),(7,4,3,'2021-08-18 14:14:45','2021-08-18 14:14:45'),(8,4,4,'2021-08-18 14:14:45','2021-08-18 14:14:45'),(9,5,3,'2021-08-18 14:16:24','2021-08-18 14:16:24'),(10,5,4,'2021-08-18 14:16:24','2021-08-18 14:16:24'),(11,5,5,'2021-08-18 14:16:24','2021-08-18 14:16:24'),(12,6,2,'2021-08-18 14:17:45','2021-08-18 14:17:45'),(13,6,5,'2021-08-18 14:17:45','2021-08-18 14:17:45'),(14,7,2,'2021-08-18 14:18:59','2021-08-18 14:18:59'),(15,7,5,'2021-08-18 14:18:59','2021-08-18 14:18:59'),(16,8,2,'2021-08-18 14:20:12','2021-08-18 14:20:12'),(17,8,3,'2021-08-18 14:20:12','2021-08-18 14:20:12'),(18,8,4,'2021-08-18 14:20:12','2021-08-18 14:20:12'),(19,8,5,'2021-08-18 14:20:12','2021-08-18 14:20:12'),(20,9,2,'2021-08-18 14:21:12','2021-08-18 14:21:12'),(21,9,3,'2021-08-18 14:21:12','2021-08-18 14:21:12'),(22,9,4,'2021-08-18 14:21:12','2021-08-18 14:21:12'),(23,9,5,'2021-08-18 14:21:12','2021-08-18 14:21:12'),(27,11,2,'2021-08-18 14:24:26','2021-08-18 14:24:26'),(28,11,3,'2021-08-18 14:24:26','2021-08-18 14:24:26'),(29,11,5,'2021-08-18 14:24:26','2021-08-18 14:24:26'),(33,10,2,'2021-08-19 01:58:48','2021-08-19 01:58:48'),(34,10,3,'2021-08-19 01:58:48','2021-08-19 01:58:48'),(35,10,5,'2021-08-19 01:58:48','2021-08-19 01:58:48'),(36,12,3,'2021-08-19 08:45:42','2021-08-19 08:45:42'),(37,12,4,'2021-08-19 08:45:42','2021-08-19 08:45:42'),(38,13,2,'2021-08-19 08:51:40','2021-08-19 08:51:40'),(39,13,3,'2021-08-19 08:51:40','2021-08-19 08:51:40'),(40,15,3,'2021-08-19 09:23:03','2021-08-19 09:23:03');
/*!40000 ALTER TABLE `blog_tag` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blogs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `view_no` bigint NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blogs`
--

LOCK TABLES `blogs` WRITE;
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
INSERT INTO `blogs` VALUES (1,'Lorem 2 is a lorem ipsum generator brought to you by Manoverboard,','<h2>Paragraphs</h2>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>\r\n\r\n<p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.</p>\r\n\r\n<p>Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat.</p>\r\n\r\n<p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas auguae, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</p>\r\n\r\n<p>Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. Nam nulla quam, gravida non, commodo a, sodales sit amet, nisi.</p>\r\n\r\n<h2>Lists</h2>\r\n\r\n<ul>\r\n	<li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>\r\n	<li>Aliquam tincidunt mauris eu risus.</li>\r\n	<li>Vestibulum auctor dapibus neque.</li>\r\n	<li>Nunc dignissim risus id metus.</li>\r\n	<li>Cras ornare tristique elit.</li>\r\n	<li>Vivamus vestibulum ntulla nec ante.</li>\r\n	<li>Praesent placerat risus quis eros.</li>\r\n	<li>Fusce pellentesque suscipit nibh.</li>\r\n	<li>Integer vitae libero ac risus egestas placerat.</li>\r\n	<li>Vestibulum commodo felis quis tortor.</li>\r\n	<li>Ut aliquam sollicitudin leo.</li>\r\n	<li>Cras iaculis ultricies nulla.</li>\r\n	<li>Donec quis dui at dolor tempor interdum.</li>\r\n</ul>',2,'2021-08-18 02:29:12','2021-08-18 14:52:43',NULL),(2,'[英國留學攻略] UCAS聯招系統、2021大學排名、升學顧問、費用安排','<h3>HISTORY, PURPOSE AND USAGE</h3>\r\n\r\n<p><em>Lorem ipsum</em>, or&nbsp;<em>lipsum</em>&nbsp;as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero&#39;s&nbsp;<em>De Finibus Bonorum et Malorum</em>&nbsp;for use in a type specimen book. It usually begins with:</p>\r\n\r\n<blockquote>&ldquo;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.&rdquo;</blockquote>\r\n\r\n<p>The purpose of&nbsp;<em>lorem ipsum</em>&nbsp;is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesn&#39;t distract from the layout. A practice not without&nbsp;controversy, laying out pages with meaningless filler text can be very useful when the focus is meant to be on design, not content.</p>\r\n\r\n<p>The passage experienced a surge in popularity during the 1960s when Letraset used it on their dry-transfer sheets, and again during the 90s as desktop publishers bundled the text with their software. Today it&#39;s seen all around the web; on templates, websites, and stock designs. Use our&nbsp;generator&nbsp;to get your own, or read on for the authoritative history of&nbsp;<em>lorem ipsum</em>.</p>',0,'2021-08-18 14:08:43','2021-08-18 14:08:43',NULL),(3,'【英國留學費用】英國升學讀書一年費用要幾錢? (大學學費+租金+生活費)','<p>Until recently, the prevailing view assumed&nbsp;<em>lorem ipsum</em>&nbsp;was born as a nonsense text. &ldquo;It&#39;s not Latin, though it looks like it, and it actually says nothing,&rdquo;&nbsp;<em>Before &amp; After</em>&nbsp;magazine&nbsp;answered a curious reader, &ldquo;Its &lsquo;words&rsquo; loosely approximate the frequency with which letters occur in English, which is why at a glance it looks pretty real.&rdquo;</p>\r\n\r\n<p>As Cicero would put it, &ldquo;Um, not so fast.&rdquo;</p>\r\n\r\n<p>The placeholder text, beginning with the line&nbsp;<em>&ldquo;Lorem ipsum dolor sit amet, consectetur adipiscing elit&rdquo;</em>, looks like Latin because in its youth, centuries ago, it was Latin.</p>\r\n\r\n<p>Richard McClintock, a Latin scholar from Hampden-Sydney College, is&nbsp;credited&nbsp;with discovering the source behind the ubiquitous filler text. In seeing a sample of&nbsp;<em>lorem ipsum</em>, his interest was piqued by&nbsp;<em>consectetur</em>&mdash;a genuine, albeit rare, Latin word. Consulting a Latin dictionary led McClintock to a passage from&nbsp;<em>De Finibus Bonorum et Malorum</em>&nbsp;(&ldquo;On the Extremes of Good and Evil&rdquo;), a first-century B.C. text from the Roman philosopher Cicero.</p>\r\n\r\n<p>In particular, the garbled words of&nbsp;<em>lorem ipsum</em>&nbsp;bear an unmistakable resemblance to sections 1.10.32&ndash;33 of Cicero&#39;s work, with the most notable passage excerpted below:</p>\r\n\r\n<blockquote>&ldquo;Neque porro quisquam est, qui&nbsp;<em>dolorem ipsum</em>&nbsp;quia&nbsp;<em>dolor sit amet, consectetur, adipisci velit, sed</em>&nbsp;quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.&rdquo;</blockquote>\r\n\r\n<p>A 1914 English translation by&nbsp;Harris Rackham&nbsp;reads:</p>\r\n\r\n<blockquote>&ldquo;Nor is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but occasionally circumstances occur in which toil and pain can procure him some great pleasure.&rdquo;</blockquote>\r\n\r\n<p>McClintock&#39;s eye for detail certainly helped narrow the whereabouts of&nbsp;<em>lorem ipsum&#39;s</em>&nbsp;origin, however, the &ldquo;how and when&rdquo; still remain something of a mystery, with competing theories and timelines.</p>',0,'2021-08-18 14:13:41','2021-08-18 14:13:41',NULL),(4,'【英國留學攻略】UCAS聯招系統、2021大學排名、升學顧問、費用安排','<p>So how did the classical Latin become so incoherent? According to McClintock, a 15th century typesetter likely scrambled part of Cicero&#39;s&nbsp;<em>De Finibus</em>&nbsp;in order to provide placeholder text to mockup various fonts for a type specimen book.</p>\r\n\r\n<p>It&#39;s difficult to find examples of&nbsp;<em>lorem ipsum</em>&nbsp;in use before Letraset made it popular as a dummy text in the 1960s, although McClintock says he remembers coming across the&nbsp;<em>lorem ipsum</em>&nbsp;passage in a book of old metal type samples. So far he hasn&#39;t relocated where he once saw the passage, but the popularity of Cicero in the 15th century supports the theory that the filler text has been used for centuries.</p>\r\n\r\n<p>And anyways, as&nbsp;Cecil Adams reasoned, &ldquo;[Do you really] think graphic arts supply houses were hiring classics scholars in the 1960s?&rdquo; Perhaps. But it seems reasonable to imagine that there was a version in use far before the age of Letraset.</p>\r\n\r\n<p>McClintock&nbsp;wrote&nbsp;to&nbsp;<em>Before &amp; After</em>&nbsp;to explain his discovery;</p>\r\n\r\n<blockquote>&ldquo;What I find remarkable is that this text has been the industry&#39;s standard dummy text ever since some printer in the 1500s took a galley of type and scrambled it to make a type specimen book; it has survived not only four centuries of letter-by-letter resetting but even the leap into electronic typesetting, essentially unchanged except for an occasional &#39;ing&#39; or &#39;y&#39; thrown in. It&#39;s ironic that when the then-understood Latin was scrambled, it became as incomprehensible as Greek; the phrase &#39;it&#39;s Greek to me&#39; and &#39;greeking&#39; have common semantic roots!&rdquo; (The editors published his letter in a correction headlined &ldquo;Lorem Oopsum&rdquo;).</blockquote>\r\n\r\n<p>As an&nbsp;alternative theory, (and because Latin scholars do this sort of thing) someone tracked down a 1914 Latin edition of&nbsp;<em>De Finibus</em>&nbsp;which challenges McClintock&#39;s 15th century claims and suggests that the dawn of&nbsp;<em>lorem ipsum</em>&nbsp;was as recent as the 20th century. The 1914 Loeb Classical Library Edition ran out of room on page 34 for the Latin phrase &ldquo;dolorem ipsum&rdquo; (sorrow in itself). Thus, the truncated phrase leaves one page dangling with &ldquo;do-&rdquo;, while another begins with the now ubiquitous &ldquo;lorem ipsum&rdquo;.</p>\r\n\r\n<p>Whether a medieval typesetter chose to garble a well-known (but non-Biblical&mdash;that would have been sacrilegious) text, or whether a quirk in the 1914 Loeb Edition inspired a graphic designer, it&#39;s admittedly an odd way for Cicero to sail into the 21st century.</p>',0,'2021-08-18 14:14:45','2021-08-18 14:14:45',NULL),(5,'【英國留學費用】英國升學讀書一年費用要幾錢? (大學學費+租金+生活費)','<p>One brave soul did take a stab at translating the almost-not-quite-Latin. According to&nbsp;The Guardian, Jaspreet Singh Boparai undertook the challenge with the goal of making the text &ldquo;precisely as incoherent in English as it is in Latin - and to make it incoherent in the same way&rdquo;. As a result, &ldquo;the Greek &#39;eu&#39; in Latin became the French &#39;bien&#39; [...] and the &#39;-ing&#39; ending in &#39;lorem ipsum&#39; seemed best rendered by an &#39;-iendum&#39; in English.&rdquo;</p>\r\n\r\n<p>Here is the classic lorem ipsum passage followed by Boparai&#39;s odd, yet mesmerizing version:</p>\r\n\r\n<blockquote>&ldquo;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit nisi sed sollicitudin pellentesque. Nunc posuere purus rhoncus pulvinar aliquam. Ut aliquet tristique nisl vitae volutpat. Nulla aliquet porttitor venenatis. Donec a dui et dui fringilla consectetur id nec massa. Aliquam erat volutpat. Sed ut dui ut lacus dictum fermentum vel tincidunt neque. Sed sed lacinia lectus. Duis sit amet sodales felis. Duis nunc eros, mattis at dui ac, convallis semper risus. In adipiscing ultrices tellus, in suscipit massa vehicula eu.&rdquo;</blockquote>\r\n\r\n<p>Boparai&#39;s version:</p>\r\n\r\n<blockquote>&ldquo;Rrow itself, let it be sorrow; let him love it; let him pursue it, ishing for its acquisitiendum. Because he will ab hold, uniess but through concer, and also of those who resist. Now a pure snore disturbeded sum dust. He ejjnoyes, in order that somewon, also with a severe one, unless of life. May a cusstums offficer somewon nothing of a poison-filled. Until, from a twho, twho chaffinch may also pursue it, not even a lump. But as twho, as a tank; a proverb, yeast; or else they tinscribe nor. Yet yet dewlap bed. Twho may be, let him love fellows of a polecat. Now amour, the, twhose being, drunk, yet twhitch and, an enclosed valley&rsquo;s always a laugh. In acquisitiendum the Furies are Earth; in (he takes up) a lump vehicles bien.&rdquo;</blockquote>\r\n\r\n<p>Nick Richardson&nbsp;described&nbsp;the translation &ldquo;like extreme&nbsp;Mallarm&eacute;, or a&nbsp;Burroughsian&nbsp;cut-up, or a paragraph of&nbsp;Finnegans Wake. Bits of it have surprising power: the desperate insistence on loving and pursuing sorrow, for instance, that is cheated out of its justification &ndash; an incomplete object that has been either fished for, or wished for.&rdquo;</p>',0,'2021-08-18 14:16:24','2021-08-18 14:16:24',NULL),(6,'【英國留學攻略】UCAS聯招系統、2021大學排名、升學顧問、費用安排','<p>The decade that brought us&nbsp;<em>Star Trek</em>&nbsp;and&nbsp;<em>Doctor Who</em>&nbsp;also resurrected Cicero&mdash;or at least what used to be Cicero&mdash;in an attempt to make the days before computerized design a little less painstaking.</p>\r\n\r\n<p>The French lettering company&nbsp;Letraset&nbsp;manufactured a set of dry-transfer sheets which included the&nbsp;<em>lorem ipsum</em>&nbsp;filler text in a variety of fonts, sizes, and layouts. These sheets of lettering could be rubbed on anywhere and were quickly adopted by graphic artists, printers, architects, and advertisers for their professional look and ease of use.</p>\r\n\r\n<p>Aldus Corporation, which later merged with Adobe Systems, ushered&nbsp;<em>lorem ipsum</em>&nbsp;into the information age with its desktop publishing software&nbsp;Aldus PageMaker. The program came bundled with&nbsp;<em>lorem ipsum</em>&nbsp;dummy text for laying out page content, and other word processors like Microsoft Word followed suit. More recently the growth of web design has helped proliferate lorem ipsum across the internet as a placeholder for future text&mdash;and in some cases&nbsp;the final content&nbsp;(this is why we proofread, kids).</p>',0,'2021-08-18 14:17:45','2021-08-18 14:17:45',NULL),(7,'【英國留學費用】英國升學讀書一年費用要幾錢? (大學學費+租金+生活費)','<p>The decade that brought us&nbsp;<em>Star Trek</em>&nbsp;and&nbsp;<em>Doctor Who</em>&nbsp;also resurrected Cicero&mdash;or at least what used to be Cicero&mdash;in an attempt to make the days before computerized design a little less painstaking.</p>\r\n\r\n<p>The French lettering company&nbsp;Letraset&nbsp;manufactured a set of dry-transfer sheets which included the&nbsp;<em>lorem ipsum</em>&nbsp;filler text in a variety of fonts, sizes, and layouts. These sheets of lettering could be rubbed on anywhere and were quickly adopted by graphic artists, printers, architects, and advertisers for their professional look and ease of use.</p>\r\n\r\n<p>Aldus Corporation, which later merged with Adobe Systems, ushered&nbsp;<em>lorem ipsum</em>&nbsp;into the information age with its desktop publishing software&nbsp;Aldus PageMaker. The program came bundled with&nbsp;<em>lorem ipsum</em>&nbsp;dummy text for laying out page content, and other word processors like Microsoft Word followed suit. More recently the growth of web design has helped proliferate lorem ipsum across the internet as a placeholder for future text&mdash;and in some cases&nbsp;the final content&nbsp;(this is why we proofread, kids).</p>',0,'2021-08-18 14:18:58','2021-08-18 14:18:58',NULL),(8,'【英國留學費用】英國升學讀書一年費用要幾錢? (大學學費+租金+生活費)','<p>Among design professionals, there&#39;s a bit of controversy surrounding the filler text. Controversy, as in&nbsp;Death to Lorem Ipsum.</p>\r\n\r\n<p>The strength of&nbsp;<em>lorem ipsum</em>&nbsp;is its weakness: it doesn&#39;t communicate. To some, designing a website around placeholder text is unacceptable, akin to sewing a custom suit without taking measurements.&nbsp;Kristina Halvorson&nbsp;notes:</p>\r\n\r\n<blockquote>&ldquo;I&rsquo;ve heard the argument that &ldquo;lorem ipsum&rdquo; is effective in wireframing or design because it helps people focus on the actual layout, or color scheme, or whatever. What kills me here is that we&rsquo;re talking about creating a user experience that will (whether we like it or not) be DRIVEN by words. The entire structure of the page or app flow is FOR THE WORDS.&rdquo;</blockquote>\r\n\r\n<p><em>Lorem ipsum</em>&nbsp;is so ubiquitous because it is so versatile. Select how many paragraphs you want, copy, paste, and break the lines wherever it is convenient. Real copy doesn&#39;t work that way.</p>\r\n\r\n<p>As front-end developer&nbsp;<a href=\"https://www.smashingmagazine.com/2010/01/lorem-ipsum-killing-designs/\" target=\"_blank\">Kyle Fiedler put it</a>:</p>\r\n\r\n<blockquote>&ldquo;When you are designing with Lorem Ipsum, you diminish the importance of the copy by lowering it to the same level as any other visual element. The text simply becomes another supporting role, serving to make other aspects more aesthetic. Instead of your design enhancing the meaning of the content, your content is enhancing your design.&rdquo;</blockquote>\r\n\r\n<p>But despite zealous cries for the demise of&nbsp;<em>lorem ipsum</em>, others, such as&nbsp;Karen McGrane, offer appeals for moderation:</p>\r\n\r\n<blockquote>&ldquo;Lorem Ipsum doesn&rsquo;t exist because people think the content is meaningless window dressing, only there to be decorated by designers who can&rsquo;t be bothered to read. Lorem Ipsum exists because words are powerful. If you fill up your page with draft copy about your client&rsquo;s business, they will read it. They will comment on it. They will be inexorably drawn to it. Presented the wrong way, draft copy can send your design review off the rails.&rdquo;</blockquote>\r\n\r\n<p>And that&rsquo;s why a 15th century typesetter might have scrambled a passage of Cicero; he wanted people to focus on his fonts, to imagine their own content on the pages. He wanted people to see, and to get them to see he had to keep them from reading.</p>',0,'2021-08-18 14:20:12','2021-08-18 14:20:12',NULL),(9,'【英國留學攻略】UCAS聯招系統、2021大學排名、升學顧問、費用安排','<p>Among design professionals, there&#39;s a bit of controversy surrounding the filler text. Controversy, as in&nbsp;Death to Lorem Ipsum.</p>\r\n\r\n<p>The strength of&nbsp;<em>lorem ipsum</em>&nbsp;is its weakness: it doesn&#39;t communicate. To some, designing a website around placeholder text is unacceptable, akin to sewing a custom suit without taking measurements.&nbsp;Kristina Halvorson&nbsp;notes:</p>\r\n\r\n<blockquote>&ldquo;I&rsquo;ve heard the argument that &ldquo;lorem ipsum&rdquo; is effective in wireframing or design because it helps people focus on the actual layout, or color scheme, or whatever. What kills me here is that we&rsquo;re talking about creating a user experience that will (whether we like it or not) be DRIVEN by words. The entire structure of the page or app flow is FOR THE WORDS.&rdquo;</blockquote>\r\n\r\n<p><em>Lorem ipsum</em>&nbsp;is so ubiquitous because it is so versatile. Select how many paragraphs you want, copy, paste, and break the lines wherever it is convenient. Real copy doesn&#39;t work that way.</p>\r\n\r\n<p>As front-end developer&nbsp;Kyle Fiedler put it:</p>\r\n\r\n<blockquote>&ldquo;When you are designing with Lorem Ipsum, you diminish the importance of the copy by lowering it to the same level as any other visual element. The text simply becomes another supporting role, serving to make other aspects more aesthetic. Instead of your design enhancing the meaning of the content, your content is enhancing your design.&rdquo;</blockquote>\r\n\r\n<p>But despite zealous cries for the demise of&nbsp;<em>lorem ipsum</em>, others, such as&nbsp;Karen McGrane, offer appeals for moderation:</p>\r\n\r\n<blockquote>&ldquo;Lorem Ipsum doesn&rsquo;t exist because people think the content is meaningless window dressing, only there to be decorated by designers who can&rsquo;t be bothered to read. Lorem Ipsum exists because words are powerful. If you fill up your page with draft copy about your client&rsquo;s business, they will read it. They will comment on it. They will be inexorably drawn to it. Presented the wrong way, draft copy can send your design review off the rails.&rdquo;</blockquote>\r\n\r\n<p>And that&rsquo;s why a 15th century typesetter might have scrambled a passage of Cicero; he wanted people to focus on his fonts, to imagine their own content on the pages. He wanted people to see, and to get them to see he had to keep them from reading.</p>',0,'2021-08-18 14:21:11','2021-08-18 14:21:11',NULL),(10,'【英國留學費用】英國升學讀書一年費用要幾錢? (大學學費+租金+生活費)','<p>Until recently, the prevailing view assumed&nbsp;<em>lorem ipsum</em>&nbsp;was born as a nonsense text. &ldquo;It&#39;s not Latin, though it looks like it, and it actually says nothing,&rdquo;&nbsp;<em>Before &amp; After</em>&nbsp;magazine&nbsp;answered a curious reader, &ldquo;Its &lsquo;words&rsquo; loosely approximate the frequency with which letters occur in English, which is why at a glance it looks pretty real.&rdquo;</p>\r\n\r\n<p>As Cicero would put it, &ldquo;Um, not so fast.&rdquo;</p>\r\n\r\n<p>The placeholder text, beginning with the line&nbsp;<em>&ldquo;Lorem ipsum dolor sit amet, consectetur adipiscing elit&rdquo;</em>, looks like Latin because in its youth, centuries ago, it was Latin.</p>\r\n\r\n<p>Richard McClintock, a Latin scholar from Hampden-Sydney College, is&nbsp;credited&nbsp;with discovering the source behind the ubiquitous filler text. In seeing a sample of&nbsp;<em>lorem ipsum</em>, his interest was piqued by&nbsp;<em>consectetur</em>&mdash;a genuine, albeit rare, Latin word. Consulting a Latin dictionary led McClintock to a passage from&nbsp;<em>De Finibus Bonorum et Malorum</em>&nbsp;(&ldquo;On the Extremes of Good and Evil&rdquo;), a first-century B.C. text from the Roman philosopher Cicero.</p>\r\n\r\n<p>In particular, the garbled words of&nbsp;<em>lorem ipsum</em>&nbsp;bear an unmistakable resemblance to sections 1.10.32&ndash;33 of Cicero&#39;s work, with the most notable passage excerpted below:</p>\r\n\r\n<blockquote>&ldquo;Neque porro quisquam est, qui&nbsp;<em>dolorem ipsum</em>&nbsp;quia&nbsp;<em>dolor sit amet, consectetur, adipisci velit, sed</em>&nbsp;quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.&rdquo;</blockquote>\r\n\r\n<p>A 1914 English translation by&nbsp;Harris Rackham&nbsp;reads:</p>\r\n\r\n<blockquote>&ldquo;Nor is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but occasionally circumstances occur in which toil and pain can procure him some great pleasure.&rdquo;</blockquote>\r\n\r\n<p>McClintock&#39;s eye for detail certainly helped narrow the whereabouts of&nbsp;<em>lorem ipsum&#39;s</em>&nbsp;origin, however, the &ldquo;how and when&rdquo; still remain something of a mystery, with competing theories and timelines.</p>',4,'2021-08-18 14:23:20','2021-08-19 01:39:05',NULL),(11,'【英國留學攻略】UCAS聯招系統、2021大學排名、升學顧問、費用安排','<p>Until recently, the prevailing view assumed&nbsp;<em>lorem ipsum</em>&nbsp;was born as a nonsense text. &ldquo;It&#39;s not Latin, though it looks like it, and it actually says nothing,&rdquo;&nbsp;<em>Before &amp; After</em>&nbsp;magazine&nbsp;answered a curious reader, &ldquo;Its &lsquo;words&rsquo; loosely approximate the frequency with which letters occur in English, which is why at a glance it looks pretty real.&rdquo;</p>\r\n\r\n<p>As Cicero would put it, &ldquo;Um, not so fast.&rdquo;</p>\r\n\r\n<p>The placeholder text, beginning with the line&nbsp;<em>&ldquo;Lorem ipsum dolor sit amet, consectetur adipiscing elit&rdquo;</em>, looks like Latin because in its youth, centuries ago, it was Latin.</p>\r\n\r\n<p>Richard McClintock, a Latin scholar from Hampden-Sydney College, is&nbsp;credited&nbsp;with discovering the source behind the ubiquitous filler text. In seeing a sample of&nbsp;<em>lorem ipsum</em>, his interest was piqued by&nbsp;<em>consectetur</em>&mdash;a genuine, albeit rare, Latin word. Consulting a Latin dictionary led McClintock to a passage from&nbsp;<em>De Finibus Bonorum et Malorum</em>&nbsp;(&ldquo;On the Extremes of Good and Evil&rdquo;), a first-century B.C. text from the Roman philosopher Cicero.</p>\r\n\r\n<p>In particular, the garbled words of&nbsp;<em>lorem ipsum</em>&nbsp;bear an unmistakable resemblance to sections 1.10.32&ndash;33 of Cicero&#39;s work, with the most notable passage excerpted below:</p>\r\n\r\n<blockquote>&ldquo;Neque porro quisquam est, qui&nbsp;<em>dolorem ipsum</em>&nbsp;quia&nbsp;<em>dolor sit amet, consectetur, adipisci velit, sed</em>&nbsp;quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.&rdquo;</blockquote>\r\n\r\n<p>A 1914 English translation by&nbsp;Harris Rackham&nbsp;reads:</p>\r\n\r\n<blockquote>&ldquo;Nor is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but occasionally circumstances occur in which toil and pain can procure him some great pleasure.&rdquo;</blockquote>\r\n\r\n<p>McClintock&#39;s eye for detail certainly helped narrow the whereabouts of&nbsp;<em>lorem ipsum&#39;s</em>&nbsp;origin, however, the &ldquo;how and when&rdquo; still remain something of a mystery, with competing theories and timelines.</p>',2,'2021-08-18 14:24:26','2021-08-18 14:47:27',NULL),(12,'​testing1','<p>wqwdqwd</p>',0,'2021-08-19 08:45:42','2021-08-19 08:45:42',NULL),(13,'1','<p>1</p>',0,'2021-08-19 08:51:40','2021-08-19 08:51:40',NULL),(15,'1','<p>1111</p>',0,'2021-08-19 09:23:03','2021-08-19 09:23:03',NULL);
/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `certificates`
--

DROP TABLE IF EXISTS `certificates`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `certificates` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `certificate_code` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `certificate_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `certificates`
--

LOCK TABLES `certificates` WRITE;
/*!40000 ALTER TABLE `certificates` DISABLE KEYS */;
INSERT INTO `certificates` VALUES (1,'intro','introduce_course','2021-08-17 23:57:53','2021-08-17 23:57:53',NULL),(2,'IGCSE','International General Certificate of Secondary Education','2021-08-17 23:57:53','2021-08-17 23:57:53',NULL),(3,'UKISET','UKISET','2021-08-17 23:57:53','2021-08-17 23:57:53',NULL),(4,'IELTS','International English Language Testing System','2021-08-17 23:57:53','2021-08-17 23:57:53',NULL),(5,'IAL','International Advanced Level','2021-08-17 23:57:53','2021-08-17 23:57:53',NULL),(6,'01010103','Testing please dun delete','2021-08-19 08:20:31','2021-08-19 09:12:17',NULL);
/*!40000 ALTER TABLE `certificates` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comments` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `commentable_id` bigint NOT NULL,
  `commentable_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag_user` bigint DEFAULT NULL,
  `detail` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `like_no` bigint NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `comments_user_id_foreign` (`user_id`),
  CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `course_discounts`
--

DROP TABLE IF EXISTS `course_discounts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `course_discounts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `course_id` bigint unsigned NOT NULL,
  `discount_id` bigint unsigned NOT NULL,
  `discount_value` double NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `course_discounts_course_id_discount_id_unique` (`course_id`,`discount_id`),
  KEY `course_discounts_discount_id_foreign` (`discount_id`),
  CONSTRAINT `course_discounts_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`),
  CONSTRAINT `course_discounts_discount_id_foreign` FOREIGN KEY (`discount_id`) REFERENCES `discounts` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course_discounts`
--

LOCK TABLES `course_discounts` WRITE;
/*!40000 ALTER TABLE `course_discounts` DISABLE KEYS */;
/*!40000 ALTER TABLE `course_discounts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `course_material`
--

DROP TABLE IF EXISTS `course_material`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `course_material` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `course_id` bigint unsigned NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `course_material_course_id_foreign` (`course_id`),
  CONSTRAINT `course_material_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course_material`
--

LOCK TABLES `course_material` WRITE;
/*!40000 ALTER TABLE `course_material` DISABLE KEYS */;
INSERT INTO `course_material` VALUES (1,13,'2021-08-19 09:18:08','2021-08-19 08:37:37','2021-08-19 09:18:08'),(2,13,'2021-08-19 09:23:45','2021-08-19 09:23:41','2021-08-19 09:23:45');
/*!40000 ALTER TABLE `course_material` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `course_material_translations`
--

DROP TABLE IF EXISTS `course_material_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `course_material_translations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `course_material_id` bigint unsigned NOT NULL,
  `course_material_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_material_description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_material_origin` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `locale` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `course_material_translations_course_material_id_locale_unique` (`course_material_id`,`locale`),
  KEY `course_material_translations_locale_index` (`locale`),
  CONSTRAINT `course_material_translations_course_material_id_foreign` FOREIGN KEY (`course_material_id`) REFERENCES `course_material` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course_material_translations`
--

LOCK TABLES `course_material_translations` WRITE;
/*!40000 ALTER TABLE `course_material_translations` DISABLE KEYS */;
INSERT INTO `course_material_translations` VALUES (1,1,'11','11','11','en','2021-08-19 08:37:37','2021-08-19 08:37:37',NULL),(2,1,'11','11','11','cn','2021-08-19 08:37:37','2021-08-19 08:37:58',NULL),(3,1,'11','11','11','sc','2021-08-19 08:37:37','2021-08-19 08:37:58',NULL),(4,2,'123','123','123','en','2021-08-19 09:23:41','2021-08-19 09:23:41',NULL),(5,2,'123','123','123','cn','2021-08-19 09:23:41','2021-08-19 09:23:41',NULL),(6,2,'123','123','123','sc','2021-08-19 09:23:41','2021-08-19 09:23:41',NULL);
/*!40000 ALTER TABLE `course_material_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `course_membership_discounts`
--

DROP TABLE IF EXISTS `course_membership_discounts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `course_membership_discounts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `course_discount_id` bigint DEFAULT NULL,
  `membership_course_id` bigint NOT NULL,
  `recommended` tinyint(1) NOT NULL DEFAULT '0',
  `welcomes` tinyint(1) NOT NULL DEFAULT '0',
  `hot` tinyint(1) NOT NULL DEFAULT '0',
  `publish` tinyint(1) NOT NULL DEFAULT '0',
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course_membership_discounts`
--

LOCK TABLES `course_membership_discounts` WRITE;
/*!40000 ALTER TABLE `course_membership_discounts` DISABLE KEYS */;
INSERT INTO `course_membership_discounts` VALUES (1,NULL,1,1,1,1,1,'demo','2021-08-18 01:47:08','2021-08-18 02:42:28',NULL),(2,NULL,2,1,1,1,1,'demo','2021-08-18 05:27:41','2021-08-18 05:45:48',NULL),(3,NULL,3,1,0,1,1,'Tutorial how to create Live Course','2021-08-18 14:49:22','2021-08-18 15:28:35',NULL),(4,NULL,4,0,0,1,1,NULL,'2021-08-19 03:38:51','2021-08-19 03:54:35',NULL),(5,NULL,5,0,0,1,1,NULL,'2021-08-19 03:58:00','2021-08-19 04:03:10',NULL),(6,NULL,6,0,0,1,1,NULL,'2021-08-19 04:08:59','2021-08-19 04:11:30',NULL),(7,NULL,7,0,0,1,1,NULL,'2021-08-19 04:14:20','2021-08-19 04:16:22',NULL),(8,NULL,8,0,0,1,1,NULL,'2021-08-19 04:19:34','2021-08-19 04:26:38',NULL),(9,NULL,9,0,0,1,1,NULL,'2021-08-19 04:28:35','2021-08-19 04:33:42',NULL),(10,NULL,10,0,0,1,1,NULL,'2021-08-19 04:43:42','2021-08-19 04:46:01',NULL),(11,NULL,11,1,0,0,1,'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.','2021-08-19 07:26:19','2021-08-19 07:47:08',NULL),(12,NULL,12,0,0,0,0,NULL,'2021-08-19 08:25:45','2021-08-19 09:05:26',NULL);
/*!40000 ALTER TABLE `course_membership_discounts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `course_schedules`
--

DROP TABLE IF EXISTS `course_schedules`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `course_schedules` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `course_id` bigint unsigned NOT NULL,
  `room_live_course_id` bigint unsigned NOT NULL,
  `study_session_id` bigint unsigned NOT NULL,
  `tutor_id` bigint unsigned NOT NULL,
  `is_test` tinyint(1) NOT NULL DEFAULT '0',
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `course_schedules_unique` (`course_id`,`study_session_id`,`tutor_id`,`is_test`,`date`),
  KEY `course_schedules_room_live_course_id_foreign` (`room_live_course_id`),
  KEY `course_schedules_study_session_id_foreign` (`study_session_id`),
  KEY `course_schedules_tutor_id_foreign` (`tutor_id`),
  CONSTRAINT `course_schedules_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  CONSTRAINT `course_schedules_room_live_course_id_foreign` FOREIGN KEY (`room_live_course_id`) REFERENCES `room_live_courses` (`id`) ON DELETE CASCADE,
  CONSTRAINT `course_schedules_study_session_id_foreign` FOREIGN KEY (`study_session_id`) REFERENCES `study_sessions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `course_schedules_tutor_id_foreign` FOREIGN KEY (`tutor_id`) REFERENCES `tutors` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course_schedules`
--

LOCK TABLES `course_schedules` WRITE;
/*!40000 ALTER TABLE `course_schedules` DISABLE KEYS */;
INSERT INTO `course_schedules` VALUES (1,3,1,1,2,0,'2021-08-18','2021-08-18 05:45:22','2021-08-18 05:45:22',NULL),(2,3,1,1,2,0,'2021-08-25','2021-08-18 05:45:22','2021-08-18 05:45:22',NULL),(3,3,1,1,2,0,'2021-09-01','2021-08-18 05:45:22','2021-08-18 05:45:22',NULL),(4,3,1,1,2,0,'2021-09-08','2021-08-18 05:45:22','2021-08-18 05:45:22',NULL),(5,4,2,2,2,0,'2021-08-18','2021-08-18 15:23:36','2021-08-18 15:23:36',NULL),(6,4,2,2,2,0,'2021-08-25','2021-08-18 15:23:36','2021-08-18 15:23:36',NULL),(7,4,2,2,2,0,'2021-09-01','2021-08-18 15:23:36','2021-08-18 15:23:36',NULL),(8,4,2,2,2,0,'2021-09-08','2021-08-18 15:23:36','2021-08-18 15:23:36',NULL),(9,4,2,2,2,0,'2021-09-15','2021-08-18 15:23:36','2021-08-18 15:23:36',NULL),(10,4,2,2,2,0,'2021-09-22','2021-08-18 15:23:36','2021-08-18 15:23:36',NULL),(11,4,2,2,2,0,'2021-09-29','2021-08-18 15:23:36','2021-08-18 15:23:36',NULL),(12,4,2,2,2,0,'2021-10-06','2021-08-18 15:23:36','2021-08-18 15:23:36',NULL),(13,4,2,2,2,0,'2021-10-13','2021-08-18 15:23:36','2021-08-18 15:23:36',NULL),(14,4,2,2,2,0,'2021-10-20','2021-08-18 15:23:36','2021-08-18 15:23:36',NULL),(15,7,3,2,2,0,'2021-08-19','2021-08-19 04:11:16','2021-08-19 04:11:16',NULL),(16,7,3,2,2,0,'2021-08-26','2021-08-19 04:11:16','2021-08-19 04:11:16',NULL),(17,7,3,2,2,0,'2021-09-02','2021-08-19 04:11:16','2021-08-19 04:11:16',NULL),(18,7,3,2,2,0,'2021-09-09','2021-08-19 04:11:16','2021-08-19 04:11:16',NULL),(19,7,3,2,2,0,'2021-09-16','2021-08-19 04:11:16','2021-08-19 04:11:16',NULL),(20,7,3,2,2,0,'2021-09-23','2021-08-19 04:11:16','2021-08-19 04:11:16',NULL),(21,8,4,1,2,0,'2021-08-19','2021-08-19 04:16:03','2021-08-19 04:16:03',NULL),(22,8,4,1,2,0,'2021-08-26','2021-08-19 04:16:03','2021-08-19 04:16:03',NULL),(23,8,4,1,2,0,'2021-09-02','2021-08-19 04:16:03','2021-08-19 04:16:03',NULL),(24,8,4,1,2,0,'2021-09-09','2021-08-19 04:16:03','2021-08-19 04:16:03',NULL),(25,11,5,2,2,0,'2021-08-20','2021-08-19 04:45:48','2021-08-19 04:45:48',NULL),(26,11,5,2,2,0,'2021-08-27','2021-08-19 04:45:48','2021-08-19 04:45:48',NULL),(27,11,5,2,2,0,'2021-09-03','2021-08-19 04:45:48','2021-08-19 04:45:48',NULL),(28,11,5,2,2,0,'2021-09-10','2021-08-19 04:45:48','2021-08-19 04:45:48',NULL),(29,12,6,1,2,0,'2021-08-24','2021-08-19 07:40:29','2021-08-19 07:40:29',NULL),(30,12,6,1,2,0,'2021-08-31','2021-08-19 07:40:29','2021-08-19 07:40:29',NULL),(31,12,6,1,2,0,'2021-09-07','2021-08-19 07:40:29','2021-08-19 07:40:29',NULL),(32,12,6,1,2,0,'2021-09-14','2021-08-19 07:40:29','2021-08-19 07:40:29',NULL),(33,12,6,1,2,0,'2021-09-21','2021-08-19 07:40:29','2021-08-19 07:40:29',NULL),(34,13,7,1,2,0,'2024-12-08','2021-08-19 09:05:03','2021-08-19 09:05:03',NULL);
/*!40000 ALTER TABLE `course_schedules` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `course_translations`
--

DROP TABLE IF EXISTS `course_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `course_translations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `course_id` bigint unsigned NOT NULL,
  `course_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `locale` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `course_translations_course_id_locale_unique` (`course_id`,`locale`),
  KEY `course_translations_locale_index` (`locale`),
  CONSTRAINT `course_translations_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course_translations`
--

LOCK TABLES `course_translations` WRITE;
/*!40000 ALTER TABLE `course_translations` DISABLE KEYS */;
INSERT INTO `course_translations` VALUES (1,1,'introduce course','introduce course','en','2021-08-17 23:57:53','2021-08-17 23:57:53',NULL),(2,1,'介绍课程','介绍课程','cn','2021-08-17 23:57:53','2021-08-17 23:57:53',NULL),(3,1,'介绍课程','介绍课程','sc','2021-08-17 23:57:53','2021-08-17 23:57:53',NULL),(4,2,'Basic Math 1','Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat','en','2021-08-18 01:47:08','2021-08-18 01:47:08',NULL),(5,2,'基础数学 1','Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat','cn','2021-08-18 01:47:08','2021-08-18 01:47:08',NULL),(6,2,'基础数学 1','Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat','sc','2021-08-18 01:47:08','2021-08-18 01:47:08',NULL),(7,3,'Tutorial Create Live Video','Lorem ipsum dolor sit amet, consectetuer adipiscing elit.','en','2021-08-18 05:27:41','2021-08-18 05:37:13',NULL),(8,3,'教程创建实时视频','還建創議一新價人的主定民政林','cn','2021-08-18 05:27:41','2021-08-18 05:27:41',NULL),(9,3,'教程创建实时视频','還建創議一新價人的主定民政林','sc','2021-08-18 05:27:41','2021-08-18 05:27:41',NULL),(10,4,'Create Live Stream Tutorial With Vimeo','Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat','en','2021-08-18 14:49:21','2021-08-18 14:49:21',NULL),(11,4,'使用 Vimeo 创建直播教程','還建創議一新價人的主定民政林','cn','2021-08-18 14:49:21','2021-08-18 14:49:21',NULL),(12,4,'使用 Vimeo 创建直播教程','還建創議一新價人的主定民政林','sc','2021-08-18 14:49:22','2021-08-18 14:49:22',NULL),(13,5,'Basic math 2','IGCSE Basic math 2 course first part of basic math','en','2021-08-19 03:38:51','2021-08-19 03:38:51',NULL),(14,5,'基礎數學 2','IGCSE基礎數學2課程基礎數學第一部分','cn','2021-08-19 03:38:51','2021-08-19 03:38:51',NULL),(15,5,'基础数学 2','IGCSE基础数学2课程基础数学第一部分','sc','2021-08-19 03:38:51','2021-08-19 03:38:51',NULL),(16,6,'Basic math 3','IGCSE基礎數學2課程基礎數學第二部分','en','2021-08-19 03:58:00','2021-08-19 03:58:00',NULL),(17,6,'基礎數學 3','IGCSE基礎數學2課程基礎數學第二部分','cn','2021-08-19 03:58:00','2021-08-19 03:58:00',NULL),(18,6,'基础数学 3','IGCSE基礎數學2課程基礎數學第二部分','sc','2021-08-19 03:58:00','2021-08-19 03:58:00',NULL),(19,7,'Test live course part one','IGCSE Test live course part one','en','2021-08-19 04:08:59','2021-08-19 04:08:59',NULL),(20,7,'測試直播課程第一部分','IGCSE  測試直播課程第一部分','cn','2021-08-19 04:08:59','2021-08-19 04:08:59',NULL),(21,7,'測試直播課程第一部分','IGCSE  測試直播課程第一部分','sc','2021-08-19 04:08:59','2021-08-19 04:08:59',NULL),(22,8,'Test live course part two','IGCSE Live Course Math Course The first part of the explanation','en','2021-08-19 04:14:20','2021-08-19 04:14:20',NULL),(23,8,'測試直播課程第二部分','IGCSE直播課數學課第一部分講解','cn','2021-08-19 04:14:20','2021-08-19 04:14:20',NULL),(24,8,'測試直播課程第二部分','IGCSE直播課數學課第一部分講解','sc','2021-08-19 04:14:20','2021-08-19 04:14:20',NULL),(25,9,'English first part','IGCSE Live Course English Course The first part of the explanation','en','2021-08-19 04:19:34','2021-08-19 04:19:34',NULL),(26,9,'英文 英文課程 第一部分講解','IGCSE 實時直播課程英文課程第一部分講解','cn','2021-08-19 04:19:34','2021-08-19 04:19:34',NULL),(27,9,'英文 英文課程 第一部分講解','IGCSE 實時直播課程英文課程第一部分講解','sc','2021-08-19 04:19:34','2021-08-19 04:19:34',NULL),(28,10,'English second part','IGCSE Live Course English Course The second part of the explanation','en','2021-08-19 04:28:35','2021-08-19 04:28:35',NULL),(29,10,'英文 英文課程 第二部分講解','IGCSE 實時直播課程英文課程第二部分講解','cn','2021-08-19 04:28:35','2021-08-19 04:28:35',NULL),(30,10,'英文 英文課程 第二部分講解','IGCSE 實時直播課程英文課程第二部分講解','sc','2021-08-19 04:28:35','2021-08-19 04:28:35',NULL),(31,11,'Test live course part three','IELTS English Course The first part of the explanation Live broadcast','en','2021-08-19 04:43:42','2021-08-19 04:43:42',NULL),(32,11,'IELTS 英文課程 第一部分講解 實時直播','IELTS 英文課程 第一部分講解 實時直播','cn','2021-08-19 04:43:42','2021-08-19 04:43:42',NULL),(33,11,'IELTS 英文課程 第一部分講解 實時直播','IELTS 英文課程 第一部分講解 實時直播','sc','2021-08-19 04:43:42','2021-08-19 04:43:42',NULL),(34,12,'Helios . App User Guide','Lorem ipsum dolor sit amet, consectetuer adipiscing elit.','en','2021-08-19 07:26:19','2021-08-19 07:26:19',NULL),(35,12,'Helios . 应用程序用户指南','Aliquam tincidunt mauris eu risus.','cn','2021-08-19 07:26:19','2021-08-19 07:26:19',NULL),(36,12,'Helios . 应用程序用户指南','Vestibulum auctor dapibus neque.','sc','2021-08-19 07:26:19','2021-08-19 07:26:19',NULL),(37,13,'Testing Course en','hi','en','2021-08-19 08:25:45','2021-08-19 08:25:45',NULL),(38,13,'Testing Course tc','hi','cn','2021-08-19 08:25:45','2021-08-19 08:25:45',NULL),(39,13,'Testing Course sc','hi','sc','2021-08-19 08:25:45','2021-08-19 08:25:45',NULL);
/*!40000 ALTER TABLE `course_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `courses` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `subject_id` bigint unsigned NOT NULL,
  `tutor_id` bigint unsigned NOT NULL,
  `type` int NOT NULL,
  `course_overview` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_price` double NOT NULL,
  `published` tinyint(1) NOT NULL DEFAULT '0',
  `like_no` bigint NOT NULL DEFAULT '0',
  `comment_no` bigint NOT NULL DEFAULT '0',
  `rating_no` bigint NOT NULL DEFAULT '0',
  `rating_average` bigint NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `courses_subject_id_foreign` (`subject_id`),
  KEY `courses_tutor_id_foreign` (`tutor_id`),
  CONSTRAINT `courses_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE,
  CONSTRAINT `courses_tutor_id_foreign` FOREIGN KEY (`tutor_id`) REFERENCES `tutors` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `courses`
--

LOCK TABLES `courses` WRITE;
/*!40000 ALTER TABLE `courses` DISABLE KEYS */;
INSERT INTO `courses` VALUES (1,1,1,2,'introduce course',0,0,0,0,0,0,NULL,'2021-08-17 23:57:53','2021-08-17 23:57:53'),(2,2,2,2,'<h2>Lists</h2>\r\n\r\n<ul>\r\n	<li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>\r\n	<li>Aliquam tincidunt mauris eu risus.</li>\r\n	<li>Vestibulum auctor dapibus neque.</li>\r\n	<li>Nunc dignissim risus id metus.</li>\r\n	<li>Cras ornare tristique elit.</li>\r\n	<li>Vivamus vestibulum ntulla nec ante.</li>\r\n	<li>Praesent placerat risus quis eros.</li>\r\n	<li>Fusce pellentesque suscipit nibh.</li>\r\n	<li>Integer vitae libero ac risus egestas placerat.</li>\r\n	<li>Vestibulum commodo felis quis tortor.</li>\r\n	<li>Ut aliquam sollicitudin leo.</li>\r\n	<li>Cras iaculis ultricies nulla.</li>\r\n	<li>Donec quis dui at dolor tempor interdum.</li>\r\n</ul>',50,0,0,0,0,0,NULL,'2021-08-18 01:47:08','2021-08-18 01:47:08'),(3,2,2,1,'<ul>\r\n	<li>Integer vitae libero ac risus egestas placerat.</li>\r\n	<li>Vestibulum commodo felis quis tortor.</li>\r\n	<li>Ut aliquam sollicitudin leo.&nbsp;</li>\r\n</ul>',80,0,0,0,0,0,NULL,'2021-08-18 05:27:41','2021-08-18 05:27:41'),(4,3,2,1,'<ul>\r\n	<li>Vivamus vestibulum ntulla nec ante.</li>\r\n	<li>Praesent placerat risus quis eros.</li>\r\n	<li>Fusce pellentesque suscipit nibh.</li>\r\n	<li>Integer vitae libero ac risus egestas placerat.</li>\r\n</ul>',65,0,0,0,0,0,NULL,'2021-08-18 14:49:21','2021-08-18 14:49:21'),(5,2,2,2,'<p>英文差，但 Reading 都可以攞到 Lv 5+？</p>\r\n\r\n<p>要達到以上目標，其實真係一啲都唔難！<br />\r\n&nbsp;<br />\r\n我可以用實戰經驗同大家講，「英文程度」&ne; 「考試技巧掌握程度」。但偏偏，主宰你 DSE 成績嘅，係「後者」。所以大家千祈唔好再俾「英文能力」限制自己喺 DSE 嘅發揮！<br />\r\n&nbsp;<br />\r\n想知點樣掌握主宰你前途嘅「英文考試技巧」？咁就要參加我呢個 75 分鐘免學費 Paper 1 精讀班啦！我會帶你了解考評局擬題方法，教你一套有系統嘅 mindset，令你就算睇唔明篇文，都一樣可以輕鬆攞到 Lv5+！<br />\r\n&nbsp;&nbsp;<br />\r\n課堂精選內容 &middot; 用「技巧」完美命中 marking<br />\r\n極速升 grade 三大秘訣<br />\r\n&nbsp;<br />\r\n數據主導考試模式<br />\r\n考評趨勢一覽無遺<br />\r\n從科學角度了解 英文 Paper 1 嘅考核模式，知己知彼，客觀地分析各種數據，掌握考評局近10年嘅出題趨勢。只有考評數據先有真正話語權！<br />\r\n&nbsp;<br />\r\nDSE 最強 Reading 技巧<br />\r\n無需理解文章亦可有 Lv 5 +<br />\r\n擔心睇唔明，或要花費大量時間閱讀 reading passage？但上完堂嘅你就會明白，只要掌握 5** Reading 技巧，Paper 1 成績就已經可以突飛猛進！<br />\r\n&nbsp;<br />\r\n一般英文 VS DSE 英文<br />\r\n只傳授你 DSE 需考的英文<br />\r\n雖然 75 分鐘內未必提升到你嘅英文水平，但絕對可以令你 DSE 英文大幅進步。花大量時間溫同考試無關嘅英文 ? 不如集中提升自己嘅「DSE 英文能力」!</p>',45,0,0,0,0,0,NULL,'2021-08-19 03:38:51','2021-08-19 03:38:51'),(6,2,2,2,'<p>英文差，但 Reading 都可以攞到 Lv 5+？</p>\r\n\r\n<p>要達到以上目標，其實真係一啲都唔難！<br />\r\n&nbsp;<br />\r\n我可以用實戰經驗同大家講，「英文程度」&ne; 「考試技巧掌握程度」。但偏偏，主宰你 DSE 成績嘅，係「後者」。所以大家千祈唔好再俾「英文能力」限制自己喺 DSE 嘅發揮！<br />\r\n&nbsp;<br />\r\n想知點樣掌握主宰你前途嘅「英文考試技巧」？咁就要參加我呢個 75 分鐘免學費 Paper 1 精讀班啦！我會帶你了解考評局擬題方法，教你一套有系統嘅 mindset，令你就算睇唔明篇文，都一樣可以輕鬆攞到 Lv5+！<br />\r\n&nbsp;&nbsp;<br />\r\n課堂精選內容 &middot; 用「技巧」完美命中 marking<br />\r\n極速升 grade 三大秘訣<br />\r\n&nbsp;<br />\r\n數據主導考試模式<br />\r\n考評趨勢一覽無遺<br />\r\n從科學角度了解 英文 Paper 1 嘅考核模式，知己知彼，客觀地分析各種數據，掌握考評局近10年嘅出題趨勢。只有考評數據先有真正話語權！<br />\r\n&nbsp;<br />\r\nDSE 最強 Reading 技巧<br />\r\n無需理解文章亦可有 Lv 5 +<br />\r\n擔心睇唔明，或要花費大量時間閱讀 reading passage？但上完堂嘅你就會明白，只要掌握 5** Reading 技巧，Paper 1 成績就已經可以突飛猛進！<br />\r\n&nbsp;<br />\r\n一般英文 VS DSE 英文<br />\r\n只傳授你 DSE 需考的英文<br />\r\n雖然 75 分鐘內未必提升到你嘅英文水平，但絕對可以令你 DSE 英文大幅進步。花大量時間溫同考試無關嘅英文 ? 不如集中提升自己嘅「DSE 英文能力」!</p>',70,0,0,0,0,0,NULL,'2021-08-19 03:58:00','2021-08-19 03:58:00'),(7,2,2,1,'<p>英文差，但 Reading 都可以攞到 Lv 5+？</p>\r\n\r\n<p>要達到以上目標，其實真係一啲都唔難！<br />\r\n&nbsp;<br />\r\n我可以用實戰經驗同大家講，「英文程度」&ne; 「考試技巧掌握程度」。但偏偏，主宰你 DSE 成績嘅，係「後者」。所以大家千祈唔好再俾「英文能力」限制自己喺 DSE 嘅發揮！<br />\r\n&nbsp;<br />\r\n想知點樣掌握主宰你前途嘅「英文考試技巧」？咁就要參加我呢個 75 分鐘免學費 Paper 1 精讀班啦！我會帶你了解考評局擬題方法，教你一套有系統嘅 mindset，令你就算睇唔明篇文，都一樣可以輕鬆攞到 Lv5+！<br />\r\n&nbsp;&nbsp;<br />\r\n課堂精選內容 &middot; 用「技巧」完美命中 marking<br />\r\n極速升 grade 三大秘訣<br />\r\n&nbsp;<br />\r\n數據主導考試模式<br />\r\n考評趨勢一覽無遺<br />\r\n從科學角度了解 英文 Paper 1 嘅考核模式，知己知彼，客觀地分析各種數據，掌握考評局近10年嘅出題趨勢。只有考評數據先有真正話語權！<br />\r\n&nbsp;<br />\r\nDSE 最強 Reading 技巧<br />\r\n無需理解文章亦可有 Lv 5 +<br />\r\n擔心睇唔明，或要花費大量時間閱讀 reading passage？但上完堂嘅你就會明白，只要掌握 5** Reading 技巧，Paper 1 成績就已經可以突飛猛進！<br />\r\n&nbsp;<br />\r\n一般英文 VS DSE 英文<br />\r\n只傳授你 DSE 需考的英文<br />\r\n雖然 75 分鐘內未必提升到你嘅英文水平，但絕對可以令你 DSE 英文大幅進步。花大量時間溫同考試無關嘅英文 ? 不如集中提升自己嘅「DSE 英文能力」!</p>',60,0,0,0,0,0,NULL,'2021-08-19 04:08:59','2021-08-19 04:08:59'),(8,2,2,1,'<p>英文差，但 Reading 都可以攞到 Lv 5+？</p>\r\n\r\n<p>要達到以上目標，其實真係一啲都唔難！<br />\r\n&nbsp;<br />\r\n我可以用實戰經驗同大家講，「英文程度」&ne; 「考試技巧掌握程度」。但偏偏，主宰你 DSE 成績嘅，係「後者」。所以大家千祈唔好再俾「英文能力」限制自己喺 DSE 嘅發揮！<br />\r\n&nbsp;<br />\r\n想知點樣掌握主宰你前途嘅「英文考試技巧」？咁就要參加我呢個 75 分鐘免學費 Paper 1 精讀班啦！我會帶你了解考評局擬題方法，教你一套有系統嘅 mindset，令你就算睇唔明篇文，都一樣可以輕鬆攞到 Lv5+！<br />\r\n&nbsp;&nbsp;<br />\r\n課堂精選內容 &middot; 用「技巧」完美命中 marking<br />\r\n極速升 grade 三大秘訣<br />\r\n&nbsp;<br />\r\n數據主導考試模式<br />\r\n考評趨勢一覽無遺<br />\r\n從科學角度了解 英文 Paper 1 嘅考核模式，知己知彼，客觀地分析各種數據，掌握考評局近10年嘅出題趨勢。只有考評數據先有真正話語權！<br />\r\n&nbsp;<br />\r\nDSE 最強 Reading 技巧<br />\r\n無需理解文章亦可有 Lv 5 +<br />\r\n擔心睇唔明，或要花費大量時間閱讀 reading passage？但上完堂嘅你就會明白，只要掌握 5** Reading 技巧，Paper 1 成績就已經可以突飛猛進！<br />\r\n&nbsp;<br />\r\n一般英文 VS DSE 英文<br />\r\n只傳授你 DSE 需考的英文<br />\r\n雖然 75 分鐘內未必提升到你嘅英文水平，但絕對可以令你 DSE 英文大幅進步。花大量時間溫同考試無關嘅英文 ? 不如集中提升自己嘅「DSE 英文能力」!</p>',60,0,0,0,0,0,NULL,'2021-08-19 04:14:20','2021-08-19 04:14:20'),(9,2,2,2,'<p>英文差，但 Reading 都可以攞到 Lv 5+？</p>\r\n\r\n<p>要達到以上目標，其實真係一啲都唔難！<br />\r\n&nbsp;<br />\r\n我可以用實戰經驗同大家講，「英文程度」&ne; 「考試技巧掌握程度」。但偏偏，主宰你 DSE 成績嘅，係「後者」。所以大家千祈唔好再俾「英文能力」限制自己喺 DSE 嘅發揮！<br />\r\n&nbsp;<br />\r\n想知點樣掌握主宰你前途嘅「英文考試技巧」？咁就要參加我呢個 75 分鐘免學費 Paper 1 精讀班啦！我會帶你了解考評局擬題方法，教你一套有系統嘅 mindset，令你就算睇唔明篇文，都一樣可以輕鬆攞到 Lv5+！<br />\r\n&nbsp;&nbsp;<br />\r\n課堂精選內容 &middot; 用「技巧」完美命中 marking<br />\r\n極速升 grade 三大秘訣<br />\r\n&nbsp;<br />\r\n數據主導考試模式<br />\r\n考評趨勢一覽無遺<br />\r\n從科學角度了解 英文 Paper 1 嘅考核模式，知己知彼，客觀地分析各種數據，掌握考評局近10年嘅出題趨勢。只有考評數據先有真正話語權！<br />\r\n&nbsp;<br />\r\nDSE 最強 Reading 技巧<br />\r\n無需理解文章亦可有 Lv 5 +<br />\r\n擔心睇唔明，或要花費大量時間閱讀 reading passage？但上完堂嘅你就會明白，只要掌握 5** Reading 技巧，Paper 1 成績就已經可以突飛猛進！<br />\r\n&nbsp;<br />\r\n一般英文 VS DSE 英文<br />\r\n只傳授你 DSE 需考的英文<br />\r\n雖然 75 分鐘內未必提升到你嘅英文水平，但絕對可以令你 DSE 英文大幅進步。花大量時間溫同考試無關嘅英文 ? 不如集中提升自己嘅「DSE 英文能力」!</p>',25,0,0,0,0,0,NULL,'2021-08-19 04:19:34','2021-08-19 04:19:34'),(10,2,2,2,'<p>英文差，但 Reading 都可以攞到 Lv 5+？</p>\r\n\r\n<p>要達到以上目標，其實真係一啲都唔難！<br />\r\n&nbsp;<br />\r\n我可以用實戰經驗同大家講，「英文程度」&ne; 「考試技巧掌握程度」。但偏偏，主宰你 DSE 成績嘅，係「後者」。所以大家千祈唔好再俾「英文能力」限制自己喺 DSE 嘅發揮！<br />\r\n&nbsp;<br />\r\n想知點樣掌握主宰你前途嘅「英文考試技巧」？咁就要參加我呢個 75 分鐘免學費 Paper 1 精讀班啦！我會帶你了解考評局擬題方法，教你一套有系統嘅 mindset，令你就算睇唔明篇文，都一樣可以輕鬆攞到 Lv5+！<br />\r\n&nbsp;&nbsp;<br />\r\n課堂精選內容 &middot; 用「技巧」完美命中 marking<br />\r\n極速升 grade 三大秘訣<br />\r\n&nbsp;<br />\r\n數據主導考試模式<br />\r\n考評趨勢一覽無遺<br />\r\n從科學角度了解 英文 Paper 1 嘅考核模式，知己知彼，客觀地分析各種數據，掌握考評局近10年嘅出題趨勢。只有考評數據先有真正話語權！<br />\r\n&nbsp;<br />\r\nDSE 最強 Reading 技巧<br />\r\n無需理解文章亦可有 Lv 5 +<br />\r\n擔心睇唔明，或要花費大量時間閱讀 reading passage？但上完堂嘅你就會明白，只要掌握 5** Reading 技巧，Paper 1 成績就已經可以突飛猛進！<br />\r\n&nbsp;<br />\r\n一般英文 VS DSE 英文<br />\r\n只傳授你 DSE 需考的英文<br />\r\n雖然 75 分鐘內未必提升到你嘅英文水平，但絕對可以令你 DSE 英文大幅進步。花大量時間溫同考試無關嘅英文 ? 不如集中提升自己嘅「DSE 英文能力」!</p>',25,0,0,0,0,0,NULL,'2021-08-19 04:28:35','2021-08-19 04:28:59'),(11,2,2,1,'<p>英文差，但 Reading 都可以攞到 Lv 5+？</p>\r\n\r\n<p>要達到以上目標，其實真係一啲都唔難！<br />\r\n&nbsp;<br />\r\n我可以用實戰經驗同大家講，「英文程度」&ne; 「考試技巧掌握程度」。但偏偏，主宰你 DSE 成績嘅，係「後者」。所以大家千祈唔好再俾「英文能力」限制自己喺 DSE 嘅發揮！<br />\r\n&nbsp;<br />\r\n想知點樣掌握主宰你前途嘅「英文考試技巧」？咁就要參加我呢個 75 分鐘免學費 Paper 1 精讀班啦！我會帶你了解考評局擬題方法，教你一套有系統嘅 mindset，令你就算睇唔明篇文，都一樣可以輕鬆攞到 Lv5+！<br />\r\n&nbsp;&nbsp;<br />\r\n課堂精選內容 &middot; 用「技巧」完美命中 marking<br />\r\n極速升 grade 三大秘訣<br />\r\n&nbsp;<br />\r\n數據主導考試模式<br />\r\n考評趨勢一覽無遺<br />\r\n從科學角度了解 英文 Paper 1 嘅考核模式，知己知彼，客觀地分析各種數據，掌握考評局近10年嘅出題趨勢。只有考評數據先有真正話語權！<br />\r\n&nbsp;<br />\r\nDSE 最強 Reading 技巧<br />\r\n無需理解文章亦可有 Lv 5 +<br />\r\n擔心睇唔明，或要花費大量時間閱讀 reading passage？但上完堂嘅你就會明白，只要掌握 5** Reading 技巧，Paper 1 成績就已經可以突飛猛進！<br />\r\n&nbsp;<br />\r\n一般英文 VS DSE 英文<br />\r\n只傳授你 DSE 需考的英文<br />\r\n雖然 75 分鐘內未必提升到你嘅英文水平，但絕對可以令你 DSE 英文大幅進步。花大量時間溫同考試無關嘅英文 ? 不如集中提升自己嘅「DSE 英文能力」!</p>',15,0,0,0,0,0,NULL,'2021-08-19 04:43:42','2021-08-19 04:43:42'),(12,2,2,1,'<ul>\r\n	<li>Fusce pellentesque suscipit nibh.</li>\r\n	<li>Integer vitae libero ac risus egestas placerat.</li>\r\n	<li>Vestibulum commodo felis quis tortor.</li>\r\n	<li>Ut aliquam sollicitudin leo.</li>\r\n</ul>',40,0,0,0,0,0,NULL,'2021-08-19 07:26:19','2021-08-19 07:26:19'),(13,4,2,1,'<h1><span class=\"marker\"><em><strong>hi testing</strong></em></span></h1>\r\n\r\n<p><span class=\"marker\"><em><strong>123123123123</strong></em></span></p>',999,0,0,0,0,0,NULL,'2021-08-19 08:25:45','2021-08-19 08:25:45');
/*!40000 ALTER TABLE `courses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `discounts`
--

DROP TABLE IF EXISTS `discounts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `discounts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `discounts`
--

LOCK TABLES `discounts` WRITE;
/*!40000 ALTER TABLE `discounts` DISABLE KEYS */;
INSERT INTO `discounts` VALUES (1,'Yves Saint Laurent','2021-08-17','2021-08-31','Yves Saint Laurent','2021-08-18 02:34:30','2021-08-18 02:34:30',NULL),(2,'Discount test','2021-01-01','2024-01-01','Discount test','2021-08-19 09:02:27','2021-08-19 09:19:48','2021-08-19 09:19:48'),(3,'123','2020-12-03','2024-12-14','123','2021-08-19 09:25:11','2021-08-19 09:25:11',NULL);
/*!40000 ALTER TABLE `discounts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `examinations`
--

DROP TABLE IF EXISTS `examinations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `examinations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `course_id` bigint unsigned NOT NULL,
  `deadline` date NOT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `examinations_course_id_foreign` (`course_id`),
  CONSTRAINT `examinations_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `examinations`
--

LOCK TABLES `examinations` WRITE;
/*!40000 ALTER TABLE `examinations` DISABLE KEYS */;
/*!40000 ALTER TABLE `examinations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `file`
--

DROP TABLE IF EXISTS `file`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `file` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `fileable_id` bigint NOT NULL,
  `fileable_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `source` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `raw_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_size` double NOT NULL,
  `uploaded_by` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `file`
--

LOCK TABLES `file` WRITE;
/*!40000 ALTER TABLE `file` DISABLE KEYS */;
INSERT INTO `file` VALUES (1,1,'App\\Models\\Banner','files/fxza6g1h1ClgxbsMMSNQnqQdbBBQA3PHH0MWcy3i.jpg','Banner-002.jpg',0.217752,2,'2021-08-18 01:19:34','2021-08-18 01:19:34',NULL),(2,2,'App\\Models\\Banner','files/MHs7rwGzYTxoZ8fonvbnBtKz8Tl8KmEx8iPnlSgh.jpg','banner.jpg',0.765252,2,'2021-08-18 01:20:34','2021-08-18 01:20:34',NULL),(3,3,'App\\Models\\Banner','files/r5XmAWDKElySCHzPv1hqp0enNfwVE0ukEnK9uxYJ.jpg','banner.jpg',0.765252,2,'2021-08-18 01:25:15','2021-08-18 01:25:15',NULL),(4,4,'App\\Models\\Banner','files/MXZv3CMXVystsA6aYLuGtjaP5W11R53THArJBrYr.jpg','banner.jpg',0.765252,2,'2021-08-18 01:25:46','2021-08-18 01:25:46',NULL),(5,5,'App\\Models\\Banner','files/xL7mMUSVKcSYw59cBnP041fZCGo8iIgVj8md1V2O.jpg','banner.jpg',0.765252,2,'2021-08-18 01:26:23','2021-08-18 01:26:23',NULL),(6,6,'App\\Models\\Banner','files/VIt7NmH7G5jS9OnYMY7D9wckKfc6YrkE1kPGspkq.jpg','banner.jpg',0.765252,2,'2021-08-18 01:26:53','2021-08-18 01:26:53',NULL),(7,5,'App\\Models\\User','files/f2kZUfKjWWhQKbhonChhfS6GY3TnYtyMOnhaLWuY.jpg','download.jpg',0.006604,2,'2021-08-18 01:44:32','2021-08-19 07:20:26','2021-08-19 07:20:26'),(8,1,'App\\Models\\News','files/3BlCHEHC3eABlyr3XM7SI7C2QLaoBO65RwtSg4mT.jpg','banner.jpg',0.765252,2,'2021-08-18 02:30:13','2021-08-18 02:30:13',NULL),(9,2,'App\\Models\\News','files/8BxOyoxzGlWGXKyyRyVIb1GNaCpXMeJBcciVOPdA.jpg','bg-subscribe.jpg',0.825928,1,'2021-08-18 13:49:57','2021-08-18 13:49:57',NULL),(10,3,'App\\Models\\News','files/02lCeTimcLvAG81porxjV6qvCyMLIKcGiwQzsWw8.jpg','freeclass-bg.jpg',0.446584,1,'2021-08-18 13:50:55','2021-08-18 13:50:55',NULL),(11,4,'App\\Models\\News','files/fkCJdfGRWzPdK8Tcu5xyK0AADvMuGoWrrglM1byP.jpg','banner.jpg',0.765252,1,'2021-08-18 13:52:04','2021-08-18 13:52:04',NULL),(12,5,'App\\Models\\News','files/dL3BsAukm5mKz0XtlxIgYia49HqwgBUIcv2JCrc7.jpg','Group 8.jpg',0.174085,1,'2021-08-18 13:55:30','2021-08-18 13:55:30',NULL),(13,6,'App\\Models\\News','files/Fgb46UswEnSjCErd64nxpd3yaX0U7RcVfdSKRdbT.jpg','Group 9.jpg',0.184771,1,'2021-08-18 13:57:10','2021-08-18 13:57:10',NULL),(14,7,'App\\Models\\News','files/ktQ3sAkmr2l7xE5ACc5WrDzYn9OX03Mqmu1BLguf.jpg','bg-subscribe.jpg',0.825928,1,'2021-08-18 13:59:23','2021-08-18 14:04:11','2021-08-18 14:04:11'),(15,8,'App\\Models\\News','files/wkLjCOz1xza5zCogVhptyHGuhk5T8Z3IEPcfaRyk.jpg','freeclass-bg.jpg',0.446584,1,'2021-08-18 14:00:11','2021-08-18 14:00:11',NULL),(16,9,'App\\Models\\News','files/ArAXCVif93oEUL33poMou7GbAm2OGiY1e29ykPcZ.jpg','banner.jpg',0.765252,1,'2021-08-18 14:01:57','2021-08-18 14:01:57',NULL),(17,10,'App\\Models\\News','files/MGB9CjvR367V4OP4i720v9fkPxjn0ECzDUmBRCh8.jpg','freeclass-bg.jpg',0.446584,1,'2021-08-18 14:03:11','2021-08-18 14:03:11',NULL),(18,7,'App\\Models\\News','files/gzsYouNKo8rhQZSjCr68ip6bsajkxg032iAXT5Xn.jpg','bg-subscribe.jpg',0.825928,1,'2021-08-18 14:04:11','2021-08-18 14:04:11',NULL),(19,2,'App\\Models\\Blog','files/74Vm9PFHDRJNL7OgISGutZ5OpwdQ2LG7vVEFTOm8.jpg','Group 1.jpg',0.295296,1,'2021-08-18 14:08:44','2021-08-18 14:08:44',NULL),(20,3,'App\\Models\\Blog','files/AE1SQRz6PQ0vkf4o8ndRVVeWZPV6Qiur1qujWOIg.jpg','Group 5.jpg',0.358522,1,'2021-08-18 14:13:42','2021-08-18 14:13:42',NULL),(21,4,'App\\Models\\Blog','files/NKCpXzlCljbbmF4qhhOWPD8ngOCdZBnL4EWva2n1.jpg','Group 4.jpg',0.309112,1,'2021-08-18 14:14:45','2021-08-18 14:14:45',NULL),(22,5,'App\\Models\\Blog','files/o7a6sX3PdCtiHr0mrqgJVu66P9uqhe0pyOssI8sr.jpg','Group 3.jpg',0.314216,1,'2021-08-18 14:16:24','2021-08-18 14:16:24',NULL),(23,6,'App\\Models\\Blog','files/LK6JeWDwjS38irb5lMdVRKWDMbXRXigNXkHnllee.jpg','Group 2.jpg',0.302602,1,'2021-08-18 14:17:45','2021-08-18 14:17:45',NULL),(24,7,'App\\Models\\Blog','files/ikhXkeb4Ah9yV2FPMUSD1WAjk9w9JGV4ngEfNzh5.jpg','Group 6.jpg',0.317992,1,'2021-08-18 14:18:59','2021-08-18 14:18:59',NULL),(25,8,'App\\Models\\Blog','files/XV1GtyGNhX3WbYAYyBDy39YHq8Xgyso4bOQUZqCr.jpg','Group 1.jpg',0.295296,1,'2021-08-18 14:20:12','2021-08-18 14:20:12',NULL),(26,9,'App\\Models\\Blog','files/Htc92UBBuAskXpIuznoy6ZVU1DDtWtswzigeWiBH.jpg','Group 3.jpg',0.314216,1,'2021-08-18 14:21:12','2021-08-18 14:21:12',NULL),(27,11,'App\\Models\\Blog','files/fqKMwGCkW0tnJaLxR9vO6BNNUodFQuvCNpHcvKQT.jpg','Group 4.jpg',0.309112,1,'2021-08-18 14:24:27','2021-08-18 14:24:27',NULL),(28,5,'App\\Models\\User','files/hjrKF6xtl4mtHHe2BL6w5UtOsFq95HZjw7qwtDVJ.png','myavatar.png',0.058553,1,'2021-08-19 07:20:26','2021-08-19 07:20:26',NULL),(29,8,'App\\Models\\Banner','files/7OwazUEVPMoluxk2OVdkPr3AzgDuEsepwpVL2kSX.png','ImageTest.png',0.028574,1,'2021-08-19 08:19:41','2021-08-19 08:19:41',NULL),(30,1,'App\\Models\\CourseMaterial','files/rxwkBg0sskRyK2d8i3fhj6m7nW3Wpp6oniDhZuhF.pdf','test.pdf',0.032586,1,'2021-08-19 08:37:37','2021-08-19 08:37:58','2021-08-19 08:37:58'),(31,1,'App\\Models\\CourseMaterial','files/uH2HkJc2DYepnZtMvOXx7eyMxU5BhOttse0Tu55V.pdf','test.pdf',0.032586,1,'2021-08-19 08:37:58','2021-08-19 08:41:48','2021-08-19 08:41:48'),(32,1,'App\\Models\\CourseMaterial','files/CwLa0Oe0bBP3Y8FhKbhIWp72SaWXTLzFRy2n6OPq.pdf','test.pdf',0.032586,1,'2021-08-19 08:41:48','2021-08-19 08:41:48',NULL),(33,12,'App\\Models\\Blog','files/ao7EksyTsfgXcb41beLm6ic40bVPABeAystkfVAy.png','ImageTest.png',0.028574,1,'2021-08-19 08:45:42','2021-08-19 08:45:42',NULL),(34,13,'App\\Models\\Blog','files/E99ylnOzycelCyLcywpYaDYmW1CsKn9YurT4pBnc.png','ImageTest.png',0.028574,1,'2021-08-19 08:51:40','2021-08-19 08:51:40',NULL),(35,11,'App\\Models\\News','files/M53ZVVR4SpTqR5WGI2RgHJgbQB0Eb0YyIC9OIV90.png','ImageTest.png',0.028574,1,'2021-08-19 08:54:13','2021-08-19 09:11:12','2021-08-19 09:11:12'),(36,11,'App\\Models\\News','files/djGtdJ3zjtky10uS5rVFJT1M76Pjo06zhmvxtt6Y.png','ImageTest.png',0.028574,1,'2021-08-19 09:11:12','2021-08-19 09:11:12',NULL),(37,15,'App\\Models\\Blog','files/wIfMVCA2J3d4zztMRWKsNlhKGvZ6AdQnJVNVaRKW.png','ImageTest.png',0.028574,1,'2021-08-19 09:23:03','2021-08-19 09:23:03',NULL),(38,2,'App\\Models\\CourseMaterial','files/fGm5gJ7LXmAv01VwaPiV3otolkdWgHGTf46U6ZcG.png','ImageTest.png',0.028574,1,'2021-08-19 09:23:41','2021-08-19 09:23:41',NULL);
/*!40000 ALTER TABLE `file` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lectures`
--

DROP TABLE IF EXISTS `lectures`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lectures` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `course_id` bigint unsigned NOT NULL,
  `lectures_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lectures_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_resource` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lectures_course_id_foreign` (`course_id`),
  CONSTRAINT `lectures_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lectures`
--

LOCK TABLES `lectures` WRITE;
/*!40000 ALTER TABLE `lectures` DISABLE KEYS */;
INSERT INTO `lectures` VALUES (1,1,'introduction','introduction','588754544','2021-08-18 01:49:09','2021-08-18 01:49:09',NULL),(2,1,'lesson number 1','lesson number 1','588755007','2021-08-18 01:50:15','2021-08-18 01:50:15',NULL),(3,1,'lesson number 2','lesson number 2','588755203','2021-08-18 01:50:50','2021-08-18 01:50:50',NULL),(4,1,'lesson number 3','lesson number 3','588756480','2021-08-18 01:54:19','2021-08-18 01:54:19',NULL),(5,2,'Introduce','介绍','588759722','2021-08-18 02:03:44','2021-08-18 02:03:44',NULL),(6,2,'第一课','第一课','588760818','2021-08-18 02:06:54','2021-08-18 02:06:54',NULL),(7,2,'第二课','第二课','588760992','2021-08-18 02:07:21','2021-08-18 02:07:21',NULL),(8,2,'第三课','第三课','588761211','2021-08-18 02:08:03','2021-08-18 02:08:03',NULL),(9,2,'第 4 课','第 4 课','588761518','2021-08-18 02:08:51','2021-08-18 02:08:51',NULL),(10,5,'Basic math first video','Basic math first video','589171844','2021-08-19 03:44:40','2021-08-19 03:44:40',NULL),(11,5,'Basic math second video','Basic math second video','589173193','2021-08-19 03:49:45','2021-08-19 03:49:45',NULL),(12,5,'Basic math third video','Basic math third video','589174147','2021-08-19 03:52:55','2021-08-19 03:52:55',NULL),(13,6,'第一部分：閱讀文章技巧一','第一部分：閱讀文章技巧一','589175708','2021-08-19 03:58:42','2021-08-19 03:58:42',NULL),(14,6,'第一部分：閱讀文章技巧二','第一部分：閱讀文章技巧二','589175956','2021-08-19 03:59:32','2021-08-19 03:59:32',NULL),(15,6,'第一部分：閱讀文章技巧三','第一部分：閱讀文章技巧三','589176353','2021-08-19 04:01:09','2021-08-19 04:01:09',NULL),(16,9,'課程簡介','課程簡介','589181416','2021-08-19 04:20:19','2021-08-19 04:20:19',NULL),(17,9,'第一部分：閱讀文章技巧一','第一部分：閱讀文章技巧一','589181604','2021-08-19 04:20:59','2021-08-19 04:20:59',NULL),(18,9,'第一部分：閱讀文章技巧二','第一部分：閱讀文章技巧二','589181924','2021-08-19 04:22:14','2021-08-19 04:22:14',NULL),(19,9,'第一部分：閱讀文章技巧三','第一部分：閱讀文章技巧三','589182412','2021-08-19 04:24:18','2021-08-19 04:24:18',NULL),(20,9,'第一部分：閱讀文章技巧四','第一部分：閱讀文章技巧四','589182700','2021-08-19 04:25:28','2021-08-19 04:25:28',NULL),(21,10,'第一部分：閱讀文章技巧一','第一部分：閱讀文章技巧一','589183825','2021-08-19 04:29:48','2021-08-19 04:29:48',NULL),(22,10,'第一部分：閱讀文章技巧二','第一部分：閱讀文章技巧二','589184130','2021-08-19 04:31:01','2021-08-19 04:31:01',NULL),(23,10,'第一部分：閱讀文章技巧三','第一部分：閱讀文章技巧三','589184571','2021-08-19 04:32:53','2021-08-19 04:32:53',NULL);
/*!40000 ALTER TABLE `lectures` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `membership_course`
--

DROP TABLE IF EXISTS `membership_course`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `membership_course` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `membership_id` bigint unsigned NOT NULL,
  `course_id` bigint unsigned NOT NULL,
  `price_value` double NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `membership_course_membership_id_course_id_unique` (`membership_id`,`course_id`),
  KEY `membership_course_course_id_foreign` (`course_id`),
  CONSTRAINT `membership_course_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`),
  CONSTRAINT `membership_course_membership_id_foreign` FOREIGN KEY (`membership_id`) REFERENCES `memberships` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `membership_course`
--

LOCK TABLES `membership_course` WRITE;
/*!40000 ALTER TABLE `membership_course` DISABLE KEYS */;
INSERT INTO `membership_course` VALUES (1,1,2,50,NULL,'2021-08-18 01:47:08','2021-08-18 01:47:08'),(2,1,3,80,NULL,'2021-08-18 05:27:41','2021-08-18 05:27:41'),(3,1,4,65,NULL,'2021-08-18 14:49:22','2021-08-18 14:49:22'),(4,1,5,45,NULL,'2021-08-19 03:38:51','2021-08-19 03:38:51'),(5,1,6,70,NULL,'2021-08-19 03:58:00','2021-08-19 03:58:00'),(6,1,7,60,NULL,'2021-08-19 04:08:59','2021-08-19 04:08:59'),(7,1,8,60,NULL,'2021-08-19 04:14:20','2021-08-19 04:14:20'),(8,1,9,25,NULL,'2021-08-19 04:19:34','2021-08-19 04:19:34'),(9,1,10,25,NULL,'2021-08-19 04:28:35','2021-08-19 04:28:35'),(10,1,11,15,NULL,'2021-08-19 04:43:42','2021-08-19 04:43:42'),(11,1,12,40,NULL,'2021-08-19 07:26:19','2021-08-19 07:26:19'),(12,1,13,999,NULL,'2021-08-19 08:25:45','2021-08-19 08:25:45');
/*!40000 ALTER TABLE `membership_course` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `memberships`
--

DROP TABLE IF EXISTS `memberships`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `memberships` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `base_point` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `memberships`
--

LOCK TABLES `memberships` WRITE;
/*!40000 ALTER TABLE `memberships` DISABLE KEYS */;
INSERT INTO `memberships` VALUES (1,'new member',0,'2021-08-18 01:17:22','2021-08-18 01:17:22',NULL);
/*!40000 ALTER TABLE `memberships` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'0000_00_00_000000_create_file_table',1),(2,'0001_00_00_000000_create_users_table',1),(3,'0002_00_00_000000_create_student_table',1),(4,'0003_00_00_000000_create_tutor_table',1),(5,'0003_00_00_000001_create_tutor_translations',1),(6,'0003_00_00_100000_create_certificates_table',1),(7,'0004_00_00_000000_create_subject_table',1),(8,'0004_00_00_000001_create_subject_translations_table',1),(9,'0004_00_00_000300_create_tutor_teach_subject_table',1),(10,'0005_00_00_000000_create_course_table',1),(11,'0005_00_00_000000_create_student_courses_table',1),(12,'0005_00_00_000001_create_course_translations_table',1),(13,'0005_00_00_000002_create_course_material_table',1),(14,'0005_00_00_000003_create_course_material_translations_table',1),(15,'0006_00_00_000000_create_lecture_table',1),(16,'0007_00_00_000000_create_banner_table',1),(17,'0008_00_00_000000_create_tags_table',1),(18,'0009_00_00_000000_create_blogs_table',1),(19,'0009_00_00_000001_create_posts_table',1),(20,'0009_00_00_100000_create_comments_table',1),(21,'0009_00_00_200000_create_user_likes_table',1),(22,'0010_00_00_000000_create_study_sessions_table',1),(23,'0010_00_00_000001_create_room_live_courses_table',1),(24,'0010_00_00_100000_create_course_schedules_table',1),(25,'0010_00_00_100002_create_student_schedules_table',1),(26,'0011_00_00_000000_create_news_table',1),(27,'2014_10_12_100000_create_password_resets_table',1),(28,'2019_05_03_000001_create_customer_columns',1),(29,'2019_05_03_000002_create_subscriptions_table',1),(30,'2019_05_03_000003_create_subscription_items_table',1),(31,'2021_06_02_070717_create_blog_tags_table',1),(32,'2021_06_05_105255_create_permission_tables',1),(33,'2021_06_16_070732_create_discounts_table',1),(34,'2021_06_16_071553_create_course_discounts_table',1),(35,'2021_06_16_094905_create_memberships_table',1),(36,'2021_06_16_094955_create_membership_courses_table',1),(37,'2021_06_16_101630_create_course_membership_discounts_table',1),(38,'2021_06_17_082211_create_orders_table',1),(39,'2021_06_18_071425_create_ratings_table',1),(40,'2021_07_06_082346_create_social_accounts_table',1),(41,'2021_07_08_011523_create_moderators_table',1),(42,'2021_07_26_081932_create_examinations_table',1),(43,'2021_07_26_082506_create_submit_examinations_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_permissions`
--

DROP TABLE IF EXISTS `model_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `model_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `model_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_permissions`
--

LOCK TABLES `model_has_permissions` WRITE;
/*!40000 ALTER TABLE `model_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `model_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_roles`
--

DROP TABLE IF EXISTS `model_has_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `model_has_roles` (
  `role_id` bigint unsigned NOT NULL,
  `model_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_roles`
--

LOCK TABLES `model_has_roles` WRITE;
/*!40000 ALTER TABLE `model_has_roles` DISABLE KEYS */;
INSERT INTO `model_has_roles` VALUES (4,'App\\Models\\User',1),(2,'App\\Models\\User',2),(1,'App\\Models\\User',3),(2,'App\\Models\\User',5),(3,'App\\Models\\User',6),(3,'App\\Models\\User',7),(3,'App\\Models\\User',8),(3,'App\\Models\\User',9);
/*!40000 ALTER TABLE `model_has_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `moderators`
--

DROP TABLE IF EXISTS `moderators`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `moderators` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `full_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `moderators_user_id_foreign` (`user_id`),
  CONSTRAINT `moderators_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `moderators`
--

LOCK TABLES `moderators` WRITE;
/*!40000 ALTER TABLE `moderators` DISABLE KEYS */;
INSERT INTO `moderators` VALUES (1,3,'moderator demo','123123123',NULL,'2021-08-18 01:06:38','2021-08-18 01:06:38');
/*!40000 ALTER TABLE `moderators` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `announcement_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (1,'Ut aliquam sollicitudin leo.','<h2>Paragraphs</h2>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>\r\n\r\n<p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.</p>\r\n\r\n<p>Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat.</p>\r\n\r\n<p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas auguae, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</p>\r\n\r\n<p>Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. Nam nulla quam, gravida non, commodo a, sodales sit amet, nisi.</p>','2021-08-18','2021-08-18 02:30:13','2021-08-18 02:30:13',NULL),(2,'IELTS 考試中心最新安排','<p>IELTS 考試中心最新安排</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>\r\n\r\n<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>&nbsp;</p>','2021-08-19','2021-08-18 13:49:57','2021-08-18 13:49:57',NULL),(3,'Ms. Polly Leung 最新實時直播課程公佈','<h3>HISTORY, PURPOSE AND USAGE</h3>\r\n\r\n<p><em>Lorem ipsum</em>, or&nbsp;<em>lipsum</em>&nbsp;as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero&#39;s&nbsp;<em>De Finibus Bonorum et Malorum</em>&nbsp;for use in a type specimen book. It usually begins with:</p>\r\n\r\n<blockquote>&ldquo;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.&rdquo;</blockquote>\r\n\r\n<p>The purpose of&nbsp;<em>lorem ipsum</em>&nbsp;is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesn&#39;t distract from the layout. A practice not without&nbsp;controversy, laying out pages with meaningless filler text can be very useful when the focus is meant to be on design, not content.</p>','2021-08-20','2021-08-18 13:50:55','2021-08-18 13:50:55',NULL),(4,'Ms. Polly Leung 最新課程公佈','<h3>HISTORY, PURPOSE AND USAGE</h3>\r\n\r\n<p><em>Lorem ipsum</em>, or&nbsp;<em>lipsum</em>&nbsp;as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero&#39;s&nbsp;<em>De Finibus Bonorum et Malorum</em>&nbsp;for use in a type specimen book. It usually begins with:</p>\r\n\r\n<blockquote>&ldquo;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.&rdquo;</blockquote>\r\n\r\n<p>The purpose of&nbsp;<em>lorem ipsum</em>&nbsp;is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesn&#39;t distract from the layout. A practice not without&nbsp;controversy, laying out pages with meaningless filler text can be very useful when the focus is meant to be on design, not content.</p>','2021-08-21','2021-08-18 13:52:04','2021-08-18 13:52:04',NULL),(5,'Mr.Kenny Or  最新課程公佈','<p>Mr.Kenny Or &nbsp;最新課程公佈</p>\r\n\r\n<p>The purpose of&nbsp;<em>lorem ipsum</em>&nbsp;is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesn&#39;t distract from the layout. A practice not without&nbsp;controversy, laying out pages with meaningless filler text can be very useful when the focus is meant to be on design, not content.</p>\r\n\r\n<p>The passage experienced a surge in popularity during the 1960s when Letraset used it on their dry-transfer sheets, and again during the 90s as desktop publishers bundled the text with their software. Today it&#39;s seen all around the web; on templates, websites, and stock designs. Use our&nbsp;<a href=\"https://loremipsum.io/#generator\">generator</a>&nbsp;to get your own, or read on for the authoritative history of&nbsp;<em>lorem ipsum</em>.</p>','2021-08-22','2021-08-18 13:55:30','2021-08-18 13:55:30',NULL),(6,'Mr. Kenny Or 最新實時直播課程公佈','<h3>HEDONIST ROOTS</h3>\r\n\r\n<p>Until recently, the prevailing view assumed&nbsp;<em>lorem ipsum</em>&nbsp;was born as a nonsense text. &ldquo;It&#39;s not Latin, though it looks like it, and it actually says nothing,&rdquo;&nbsp;<em>Before &amp; After</em>&nbsp;magazine&nbsp;answered a curious reader, &ldquo;Its &lsquo;words&rsquo; loosely approximate the frequency with which letters occur in English, which is why at a glance it looks pretty real.&rdquo;</p>\r\n\r\n<p>As Cicero would put it, &ldquo;Um, not so fast.&rdquo;</p>\r\n\r\n<p>The placeholder text, beginning with the line&nbsp;<em>&ldquo;Lorem ipsum dolor sit amet, consectetur adipiscing elit&rdquo;</em>, looks like Latin because in its youth, centuries ago, it was Latin.</p>\r\n\r\n<p>Richard McClintock, a Latin scholar from Hampden-Sydney College, is&nbsp;credited&nbsp;with discovering the source behind the ubiquitous filler text. In seeing a sample of&nbsp;<em>lorem ipsum</em>, his interest was piqued by&nbsp;<em>consectetur</em>&mdash;a genuine, albeit rare, Latin word. Consulting a Latin dictionary led McClintock to a passage from&nbsp;<em>De Finibus Bonorum et Malorum</em>&nbsp;(&ldquo;On the Extremes of Good and Evil&rdquo;), a first-century B.C. text from the Roman philosopher Cicero.</p>','2021-08-23','2021-08-18 13:57:10','2021-08-18 13:57:10',NULL),(7,'Until recently, the prevailing view assumed lorem ipsum.','<h3>HEDONIST ROOTS</h3>\r\n\r\n<p>Until recently, the prevailing view assumed&nbsp;<em>lorem ipsum</em>&nbsp;was born as a nonsense text. &ldquo;It&#39;s not Latin, though it looks like it, and it actually says nothing,&rdquo;&nbsp;<em>Before &amp; After</em>&nbsp;magazine&nbsp;answered a curious reader, &ldquo;Its &lsquo;words&rsquo; loosely approximate the frequency with which letters occur in English, which is why at a glance it looks pretty real.&rdquo;</p>\r\n\r\n<p>As Cicero would put it, &ldquo;Um, not so fast.&rdquo;</p>\r\n\r\n<p>The placeholder text, beginning with the line&nbsp;<em>&ldquo;Lorem ipsum dolor sit amet, consectetur adipiscing elit&rdquo;</em>, looks like Latin because in its youth, centuries ago, it was Latin.</p>\r\n\r\n<p>Richard McClintock, a Latin scholar from Hampden-Sydney College, is&nbsp;credited&nbsp;with discovering the source behind the ubiquitous filler text. In seeing a sample of&nbsp;<em>lorem ipsum</em>, his interest was piqued by&nbsp;<em>consectetur</em>&mdash;a genuine, albeit rare, Latin word. Consulting a Latin dictionary led McClintock to a passage from&nbsp;<em>De Finibus Bonorum et Malorum</em>&nbsp;(&ldquo;On the Extremes of Good and Evil&rdquo;), a first-century B.C. text from the Roman philosopher Cicero.</p>','2021-08-24','2021-08-18 13:59:22','2021-08-18 14:04:10',NULL),(8,'Lorem ipsum, or lipsum as it is sometimes known,','<p><em>Lorem ipsum</em>, or&nbsp;<em>lipsum</em>&nbsp;as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero&#39;s&nbsp;<em>De Finibus Bonorum et Malorum</em>&nbsp;for use in a type specimen book. It usually begins with:</p>\r\n\r\n<blockquote>&ldquo;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.&rdquo;</blockquote>\r\n\r\n<p>The purpose of&nbsp;<em>lorem ipsum</em>&nbsp;is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesn&#39;t distract from the layout. A practice not without&nbsp;controversy, laying out pages with meaningless filler text can be very useful when the focus is meant to be on design, not content.</p>\r\n\r\n<p>The passage experienced a surge in popularity during the 1960s when Letraset used it on their dry-transfer sheets, and again during the 90s as desktop publishers bundled the text with their software. Today it&#39;s seen all around the web; on templates, websites, and stock designs. Use our&nbsp;generator&nbsp;to get your own, or read on for the authoritative history of&nbsp;<em>lorem ipsum</em>.</p>','2021-08-24','2021-08-18 14:00:11','2021-08-18 14:00:11',NULL),(9,'So how did the classical Latin become so incoherent','<p>So how did the classical Latin become so incoherent? According to McClintock, a 15th century typesetter likely scrambled part of Cicero&#39;s&nbsp;<em>De Finibus</em>&nbsp;in order to provide placeholder text to mockup various fonts for a type specimen book.</p>\r\n\r\n<p>It&#39;s difficult to find examples of&nbsp;<em>lorem ipsum</em>&nbsp;in use before Letraset made it popular as a dummy text in the 1960s, although McClintock says he remembers coming across the&nbsp;<em>lorem ipsum</em>&nbsp;passage in a book of old metal type samples. So far he hasn&#39;t relocated where he once saw the passage, but the popularity of Cicero in the 15th century supports the theory that the filler text has been used for centuries.</p>\r\n\r\n<p>And anyways, as&nbsp;Cecil Adams reasoned, &ldquo;[Do you really] think graphic arts supply houses were hiring classics scholars in the 1960s?&rdquo; Perhaps. But it seems reasonable to imagine that there was a version in use far before the age of Letraset.</p>','2021-08-25','2021-08-18 14:01:57','2021-08-18 14:01:57',NULL),(10,'Ms. Polly Leung 最新實時直播課程公佈','<p>In particular, the garbled words of&nbsp;<em>lorem ipsum</em>&nbsp;bear an unmistakable resemblance to sections 1.10.32&ndash;33 of Cicero&#39;s work, with the most notable passage excerpted below:</p>\r\n\r\n<blockquote>&ldquo;Neque porro quisquam est, qui&nbsp;<em>dolorem ipsum</em>&nbsp;quia&nbsp;<em>dolor sit amet, consectetur, adipisci velit, sed</em>&nbsp;quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.&rdquo;</blockquote>\r\n\r\n<p>A 1914 English translation by&nbsp;Harris Rackham&nbsp;reads:</p>\r\n\r\n<blockquote>&ldquo;Nor is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but occasionally circumstances occur in which toil and pain can procure him some great pleasure.&rdquo;</blockquote>\r\n\r\n<p>McClintock&#39;s eye for detail certainly helped narrow the whereabouts of&nbsp;<em>lorem ipsum&#39;s</em>&nbsp;origin, however, the &ldquo;how and when&rdquo; still remain something of a mystery, with competing theories and timelines.</p>','2021-08-26','2021-08-18 14:03:11','2021-08-18 14:03:11',NULL),(11,'News Testing1','<p>News Testing</p>','2021-08-20','2021-08-19 08:54:13','2021-08-19 09:11:12',NULL);
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `payment_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_id` bigint unsigned NOT NULL,
  `membership` bigint NOT NULL,
  `membership_discount` double NOT NULL,
  `discount_info` bigint NOT NULL,
  `course_price` double NOT NULL,
  `course_discount` double NOT NULL,
  `final_price` double NOT NULL,
  `status` int NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `orders_user_id_foreign` (`user_id`),
  KEY `orders_course_id_foreign` (`course_id`),
  CONSTRAINT `orders_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,6,'pi_3JPpPMB9muY337mP18qnhJrj',3,1,80,0,80,0,80,10,NULL,NULL,'2021-08-18 14:06:21','2021-08-18 14:06:21',NULL),(2,6,'pi_3JPqnGB9muY337mP0TssHAOC',4,1,65,0,65,0,65,10,NULL,NULL,'2021-08-18 15:35:07','2021-08-18 15:35:07',NULL),(3,6,'pi_3JQ0gAB9muY337mP1H04LjDB',2,1,50,0,50,0,50,10,NULL,NULL,'2021-08-19 02:08:27','2021-08-19 02:08:27',NULL),(4,8,'pi_3JQ157B9muY337mP122tRXPs',3,1,80,0,80,0,80,10,NULL,NULL,'2021-08-19 02:34:14','2021-08-19 02:34:14',NULL),(5,9,'pi_3JQ172B9muY337mP0h29ZOiC',4,1,65,0,65,0,65,10,NULL,NULL,'2021-08-19 02:36:13','2021-08-19 02:36:13',NULL),(6,8,'pi_3JQ18JB9muY337mP0P4VUcDp',2,1,50,0,50,0,50,10,NULL,NULL,'2021-08-19 02:37:32','2021-08-19 02:37:32',NULL),(7,8,'pi_3JQ1IsB9muY337mP0z9PgUL6',4,1,65,0,65,0,65,10,NULL,NULL,'2021-08-19 02:48:27','2021-08-19 02:48:27',NULL),(8,8,'pi_3JQ1JKB9muY337mP0FYsaTE3',3,1,80,0,80,0,80,10,NULL,NULL,'2021-08-19 02:48:55','2021-08-19 02:48:55',NULL),(9,9,'pi_3JQ1M9B9muY337mP1Zas2AHB',4,1,65,0,65,0,65,10,NULL,NULL,'2021-08-19 02:51:50','2021-08-19 02:51:50',NULL),(10,6,'pi_3JQ63kB9muY337mP1q6n6nKB',12,1,40,0,40,0,40,10,NULL,NULL,'2021-08-19 07:53:10','2021-08-19 07:53:10',NULL),(11,8,'pi_3JQ7BFB9muY337mP0uRmJZaL',9,1,25,0,25,0,25,10,NULL,NULL,'2021-08-19 09:04:58','2021-08-19 09:04:58',NULL),(12,8,'pi_3JQ7BiB9muY337mP1DRDBfIk',7,1,60,0,60,0,60,10,NULL,NULL,'2021-08-19 09:05:27','2021-08-19 09:05:27',NULL);
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'role-list','web','2021-08-17 23:57:51','2021-08-17 23:57:51'),(2,'role-create','web','2021-08-17 23:57:51','2021-08-17 23:57:51'),(3,'role-edit','web','2021-08-17 23:57:51','2021-08-17 23:57:51'),(4,'role-delete','web','2021-08-17 23:57:51','2021-08-17 23:57:51'),(5,'tutor-list','web','2021-08-17 23:57:51','2021-08-17 23:57:51'),(6,'tutor-create','web','2021-08-17 23:57:51','2021-08-17 23:57:51'),(7,'tutor-edit','web','2021-08-17 23:57:51','2021-08-17 23:57:51'),(8,'tutor-delete','web','2021-08-17 23:57:51','2021-08-17 23:57:51'),(9,'moderator-list','web','2021-08-17 23:57:51','2021-08-17 23:57:51'),(10,'moderator-create','web','2021-08-17 23:57:51','2021-08-17 23:57:51'),(11,'moderator-edit','web','2021-08-17 23:57:51','2021-08-17 23:57:51'),(12,'moderator-delete','web','2021-08-17 23:57:52','2021-08-17 23:57:52'),(13,'student-list','web','2021-08-17 23:57:52','2021-08-17 23:57:52'),(14,'student-create','web','2021-08-17 23:57:52','2021-08-17 23:57:52'),(15,'student-edit','web','2021-08-17 23:57:52','2021-08-17 23:57:52'),(16,'student-delete','web','2021-08-17 23:57:52','2021-08-17 23:57:52'),(17,'news-list','web','2021-08-17 23:57:52','2021-08-17 23:57:52'),(18,'news-create','web','2021-08-17 23:57:52','2021-08-17 23:57:52'),(19,'news-edit','web','2021-08-17 23:57:52','2021-08-17 23:57:52'),(20,'news-delete','web','2021-08-17 23:57:52','2021-08-17 23:57:52'),(21,'blog-list','web','2021-08-17 23:57:52','2021-08-17 23:57:52'),(22,'blog-create','web','2021-08-17 23:57:52','2021-08-17 23:57:52'),(23,'blog-edit','web','2021-08-17 23:57:52','2021-08-17 23:57:52'),(24,'blog-delete','web','2021-08-17 23:57:52','2021-08-17 23:57:52'),(25,'forum-list','web','2021-08-17 23:57:52','2021-08-17 23:57:52'),(26,'forum-create','web','2021-08-17 23:57:52','2021-08-17 23:57:52'),(27,'forum-edit','web','2021-08-17 23:57:52','2021-08-17 23:57:52'),(28,'forum-delete','web','2021-08-17 23:57:52','2021-08-17 23:57:52'),(29,'document-list','web','2021-08-17 23:57:52','2021-08-17 23:57:52'),(30,'document-create','web','2021-08-17 23:57:52','2021-08-17 23:57:52'),(31,'document-edit','web','2021-08-17 23:57:52','2021-08-17 23:57:52'),(32,'document-delete','web','2021-08-17 23:57:52','2021-08-17 23:57:52'),(33,'course-list','web','2021-08-17 23:57:52','2021-08-17 23:57:52'),(34,'course-create','web','2021-08-17 23:57:52','2021-08-17 23:57:52'),(35,'course-edit','web','2021-08-17 23:57:52','2021-08-17 23:57:52'),(36,'course-delete','web','2021-08-17 23:57:52','2021-08-17 23:57:52'),(37,'subject-list','web','2021-08-17 23:57:52','2021-08-17 23:57:52'),(38,'subject-create','web','2021-08-17 23:57:52','2021-08-17 23:57:52'),(39,'subject-edit','web','2021-08-17 23:57:52','2021-08-17 23:57:52'),(40,'subject-delete','web','2021-08-17 23:57:52','2021-08-17 23:57:52'),(41,'certificate-list','web','2021-08-17 23:57:52','2021-08-17 23:57:52'),(42,'certificate-create','web','2021-08-17 23:57:52','2021-08-17 23:57:52'),(43,'certificate-edit','web','2021-08-17 23:57:52','2021-08-17 23:57:52'),(44,'certificate-delete','web','2021-08-17 23:57:52','2021-08-17 23:57:52'),(45,'forum_post-list','web','2021-08-17 23:57:53','2021-08-17 23:57:53'),(46,'forum_post-create','web','2021-08-17 23:57:53','2021-08-17 23:57:53'),(47,'forum_post-edit','web','2021-08-17 23:57:53','2021-08-17 23:57:53'),(48,'forum_post-delete','web','2021-08-17 23:57:53','2021-08-17 23:57:53'),(49,'study_session-list','web','2021-08-17 23:57:53','2021-08-17 23:57:53'),(50,'study_session-create','web','2021-08-17 23:57:53','2021-08-17 23:57:53'),(51,'study_session-edit','web','2021-08-17 23:57:53','2021-08-17 23:57:53'),(52,'study_session-delete','web','2021-08-17 23:57:53','2021-08-17 23:57:53'),(53,'subscribe-list','web','2021-08-17 23:57:53','2021-08-17 23:57:53'),(54,'subscribe-create','web','2021-08-17 23:57:53','2021-08-17 23:57:53'),(55,'subscribe-edit','web','2021-08-17 23:57:53','2021-08-17 23:57:53'),(56,'subscribe-delete','web','2021-08-17 23:57:53','2021-08-17 23:57:53'),(57,'examination-list','web','2021-08-17 23:57:53','2021-08-17 23:57:53'),(58,'examination-create','web','2021-08-17 23:57:53','2021-08-17 23:57:53'),(59,'examination-edit','web','2021-08-17 23:57:53','2021-08-17 23:57:53'),(60,'examination-delete','web','2021-08-17 23:57:53','2021-08-17 23:57:53'),(61,'membership-list','web','2021-08-17 23:57:53','2021-08-17 23:57:53'),(62,'membership-create','web','2021-08-17 23:57:53','2021-08-17 23:57:53'),(63,'membership-edit','web','2021-08-17 23:57:53','2021-08-17 23:57:53'),(64,'membership-delete','web','2021-08-17 23:57:53','2021-08-17 23:57:53'),(65,'price-list','web','2021-08-17 23:57:53','2021-08-17 23:57:53'),(66,'price-create','web','2021-08-17 23:57:53','2021-08-17 23:57:53'),(67,'price-edit','web','2021-08-17 23:57:53','2021-08-17 23:57:53'),(68,'price-delete','web','2021-08-17 23:57:53','2021-08-17 23:57:53'),(69,'discount-list','web','2021-08-17 23:57:53','2021-08-17 23:57:53'),(70,'discount-create','web','2021-08-17 23:57:53','2021-08-17 23:57:53'),(71,'discount-edit','web','2021-08-17 23:57:53','2021-08-17 23:57:53'),(72,'discount-delete','web','2021-08-17 23:57:53','2021-08-17 23:57:53');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `like_no` bigint NOT NULL DEFAULT '0',
  `comment_no` bigint NOT NULL DEFAULT '0',
  `close_post` tinyint(1) NOT NULL DEFAULT '0',
  `pin_comment` bigint DEFAULT NULL,
  `tag_id` bigint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `posts_user_id_foreign` (`user_id`),
  CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ratings`
--

DROP TABLE IF EXISTS `ratings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ratings` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `rating` int NOT NULL DEFAULT '0',
  `ratingable_id` int NOT NULL,
  `ratingable_type` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `ratings_user_id_foreign` (`user_id`),
  CONSTRAINT `ratings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ratings`
--

LOCK TABLES `ratings` WRITE;
/*!40000 ALTER TABLE `ratings` DISABLE KEYS */;
/*!40000 ALTER TABLE `ratings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_has_permissions`
--

DROP TABLE IF EXISTS `role_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_has_permissions`
--

LOCK TABLES `role_has_permissions` WRITE;
/*!40000 ALTER TABLE `role_has_permissions` DISABLE KEYS */;
INSERT INTO `role_has_permissions` VALUES (1,4),(2,4),(3,4),(4,4),(5,4),(6,4),(7,4),(8,4),(9,4),(10,4),(11,4),(12,4),(13,4),(14,4),(15,4),(16,4),(17,4),(18,4),(19,4),(20,4),(21,4),(22,4),(23,4),(24,4),(25,4),(26,4),(27,4),(28,4),(29,4),(30,4),(31,4),(32,4),(33,4),(34,4),(35,4),(36,4),(37,4),(38,4),(39,4),(40,4),(41,4),(42,4),(43,4),(44,4),(45,4),(46,4),(47,4),(48,4),(49,4),(50,4),(51,4),(52,4),(53,4),(54,4),(55,4),(56,4),(57,4),(58,4),(59,4),(60,4),(61,4),(62,4),(63,4),(64,4),(65,4),(66,4),(67,4),(68,4),(69,4),(70,4),(71,4),(72,4);
/*!40000 ALTER TABLE `role_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'moderator','web','2021-08-17 23:57:53','2021-08-17 23:57:53'),(2,'tutor','web','2021-08-17 23:57:53','2021-08-17 23:57:53'),(3,'student','web','2021-08-17 23:57:53','2021-08-17 23:57:53'),(4,'super-admin','web','2021-08-17 23:57:53','2021-08-17 23:57:53');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `room_live_courses`
--

DROP TABLE IF EXISTS `room_live_courses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `room_live_courses` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `course_id` bigint unsigned NOT NULL,
  `study_session_id` bigint unsigned NOT NULL,
  `room_live_code` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `number_session` int NOT NULL,
  `number_member` int NOT NULL,
  `number_member_maximum` int NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `room_live_courses_course_id_foreign` (`course_id`),
  KEY `room_live_courses_study_session_id_foreign` (`study_session_id`),
  CONSTRAINT `room_live_courses_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  CONSTRAINT `room_live_courses_study_session_id_foreign` FOREIGN KEY (`study_session_id`) REFERENCES `study_sessions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `room_live_courses`
--

LOCK TABLES `room_live_courses` WRITE;
/*!40000 ALTER TABLE `room_live_courses` DISABLE KEYS */;
INSERT INTO `room_live_courses` VALUES (1,3,1,'1214646','2021-08-18',4,1,40,NULL,'2021-08-18 05:45:22','2021-08-19 02:48:55'),(2,4,2,'1215128','2021-08-18',10,3,50,NULL,'2021-08-18 15:23:36','2021-08-19 02:51:50'),(3,7,2,'1216637','2021-08-19',6,1,25,NULL,'2021-08-19 04:11:16','2021-08-19 09:05:27'),(4,8,1,'1216646','2021-08-19',4,0,20,NULL,'2021-08-19 04:16:03','2021-08-19 04:16:03'),(5,11,2,'1216671','2021-08-20',4,0,20,NULL,'2021-08-19 04:45:48','2021-08-19 04:45:48'),(6,12,1,'1216908','2021-08-24',5,1,40,NULL,'2021-08-19 07:40:29','2021-08-19 07:53:10'),(7,13,1,'010101010','2024-12-08',1,0,1,NULL,'2021-08-19 09:05:03','2021-08-19 09:05:03');
/*!40000 ALTER TABLE `room_live_courses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `social_accounts`
--

DROP TABLE IF EXISTS `social_accounts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `social_accounts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `social_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `social_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `social_accounts_user_id_foreign` (`user_id`),
  CONSTRAINT `social_accounts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `social_accounts`
--

LOCK TABLES `social_accounts` WRITE;
/*!40000 ALTER TABLE `social_accounts` DISABLE KEYS */;
INSERT INTO `social_accounts` VALUES (1,7,'116734655030531579662','google','2021-08-19 01:39:21','2021-08-19 01:39:21',NULL),(2,8,'107745423117572503267','google','2021-08-19 02:05:01','2021-08-19 02:05:01',NULL),(3,9,'101169135745616441055','google','2021-08-19 02:11:53','2021-08-19 02:11:53',NULL);
/*!40000 ALTER TABLE `social_accounts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student_courses`
--

DROP TABLE IF EXISTS `student_courses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student_courses` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `course_id` bigint unsigned NOT NULL,
  `student_id` bigint unsigned NOT NULL,
  `latest_study` datetime NOT NULL,
  `lecture_study` bigint NOT NULL,
  `room_live_course_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `student_courses_student_id_course_id_unique` (`student_id`,`course_id`),
  KEY `student_courses_course_id_foreign` (`course_id`),
  CONSTRAINT `student_courses_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  CONSTRAINT `student_courses_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student_courses`
--

LOCK TABLES `student_courses` WRITE;
/*!40000 ALTER TABLE `student_courses` DISABLE KEYS */;
INSERT INTO `student_courses` VALUES (7,4,8,'2021-08-19 02:48:27',0,'2','2021-08-19 02:48:27','2021-08-19 02:48:27',NULL),(8,3,8,'2021-08-19 02:48:55',0,'1','2021-08-19 02:48:55','2021-08-19 02:48:55',NULL),(9,4,9,'2021-08-19 02:51:50',0,'2','2021-08-19 02:51:50','2021-08-19 02:51:50',NULL),(10,12,6,'2021-08-19 07:53:10',0,'6','2021-08-19 07:53:10','2021-08-19 07:53:10',NULL),(11,9,8,'2021-08-19 09:04:58',0,NULL,'2021-08-19 09:04:58','2021-08-19 09:04:58',NULL),(12,7,8,'2021-08-19 09:05:27',0,'3','2021-08-19 09:05:27','2021-08-19 09:05:27',NULL);
/*!40000 ALTER TABLE `student_courses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student_schedules`
--

DROP TABLE IF EXISTS `student_schedules`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student_schedules` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `course_id` bigint unsigned NOT NULL,
  `room_live_course_id` bigint DEFAULT NULL,
  `study_session_id` bigint DEFAULT NULL,
  `tutor_id` bigint DEFAULT NULL,
  `student_id` bigint unsigned NOT NULL,
  `is_test` tinyint(1) NOT NULL DEFAULT '0',
  `date` date NOT NULL,
  `note` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `student_schedules_unique` (`course_id`,`study_session_id`,`is_test`,`student_id`,`date`),
  KEY `student_schedules_student_id_foreign` (`student_id`),
  CONSTRAINT `student_schedules_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  CONSTRAINT `student_schedules_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student_schedules`
--

LOCK TABLES `student_schedules` WRITE;
/*!40000 ALTER TABLE `student_schedules` DISABLE KEYS */;
INSERT INTO `student_schedules` VALUES (1,4,2,2,2,6,0,'2021-08-18',NULL,'2021-08-18 15:35:07','2021-08-18 15:35:07',NULL),(2,4,2,2,2,6,0,'2021-08-25',NULL,'2021-08-18 15:35:08','2021-08-18 15:35:08',NULL),(3,4,2,2,2,6,0,'2021-09-01',NULL,'2021-08-18 15:35:08','2021-08-18 15:35:08',NULL),(4,4,2,2,2,6,0,'2021-09-08',NULL,'2021-08-18 15:35:08','2021-08-18 15:35:08',NULL),(5,4,2,2,2,6,0,'2021-09-15',NULL,'2021-08-18 15:35:08','2021-08-18 15:35:08',NULL),(6,4,2,2,2,6,0,'2021-09-22',NULL,'2021-08-18 15:35:08','2021-08-18 15:35:08',NULL),(7,4,2,2,2,6,0,'2021-09-29',NULL,'2021-08-18 15:35:08','2021-08-18 15:35:08',NULL),(8,4,2,2,2,6,0,'2021-10-06',NULL,'2021-08-18 15:35:08','2021-08-18 15:35:08',NULL),(9,4,2,2,2,6,0,'2021-10-13',NULL,'2021-08-18 15:35:08','2021-08-18 15:35:08',NULL),(10,4,2,2,2,6,0,'2021-10-20',NULL,'2021-08-18 15:35:08','2021-08-18 15:35:08',NULL),(11,4,2,2,2,8,0,'2021-08-18',NULL,'2021-08-19 02:48:27','2021-08-19 02:48:27',NULL),(12,4,2,2,2,8,0,'2021-08-25',NULL,'2021-08-19 02:48:27','2021-08-19 02:48:27',NULL),(13,4,2,2,2,8,0,'2021-09-01',NULL,'2021-08-19 02:48:27','2021-08-19 02:48:27',NULL),(14,4,2,2,2,8,0,'2021-09-08',NULL,'2021-08-19 02:48:27','2021-08-19 02:48:27',NULL),(15,4,2,2,2,8,0,'2021-09-15',NULL,'2021-08-19 02:48:27','2021-08-19 02:48:27',NULL),(16,4,2,2,2,8,0,'2021-09-22',NULL,'2021-08-19 02:48:27','2021-08-19 02:48:27',NULL),(17,4,2,2,2,8,0,'2021-09-29',NULL,'2021-08-19 02:48:27','2021-08-19 02:48:27',NULL),(18,4,2,2,2,8,0,'2021-10-06',NULL,'2021-08-19 02:48:27','2021-08-19 02:48:27',NULL),(19,4,2,2,2,8,0,'2021-10-13',NULL,'2021-08-19 02:48:27','2021-08-19 02:48:27',NULL),(20,4,2,2,2,8,0,'2021-10-20',NULL,'2021-08-19 02:48:27','2021-08-19 02:48:27',NULL),(21,3,1,1,2,8,0,'2021-08-18',NULL,'2021-08-19 02:48:55','2021-08-19 02:48:55',NULL),(22,3,1,1,2,8,0,'2021-08-25',NULL,'2021-08-19 02:48:55','2021-08-19 02:48:55',NULL),(23,3,1,1,2,8,0,'2021-09-01',NULL,'2021-08-19 02:48:55','2021-08-19 02:48:55',NULL),(24,3,1,1,2,8,0,'2021-09-08',NULL,'2021-08-19 02:48:55','2021-08-19 02:48:55',NULL),(25,4,2,2,2,9,0,'2021-08-18',NULL,'2021-08-19 02:51:50','2021-08-19 02:51:50',NULL),(26,4,2,2,2,9,0,'2021-08-25',NULL,'2021-08-19 02:51:50','2021-08-19 02:51:50',NULL),(27,4,2,2,2,9,0,'2021-09-01',NULL,'2021-08-19 02:51:50','2021-08-19 02:51:50',NULL),(28,4,2,2,2,9,0,'2021-09-08',NULL,'2021-08-19 02:51:50','2021-08-19 02:51:50',NULL),(29,4,2,2,2,9,0,'2021-09-15',NULL,'2021-08-19 02:51:50','2021-08-19 02:51:50',NULL),(30,4,2,2,2,9,0,'2021-09-22',NULL,'2021-08-19 02:51:50','2021-08-19 02:51:50',NULL),(31,4,2,2,2,9,0,'2021-09-29',NULL,'2021-08-19 02:51:50','2021-08-19 02:51:50',NULL),(32,4,2,2,2,9,0,'2021-10-06',NULL,'2021-08-19 02:51:50','2021-08-19 02:51:50',NULL),(33,4,2,2,2,9,0,'2021-10-13',NULL,'2021-08-19 02:51:50','2021-08-19 02:51:50',NULL),(34,4,2,2,2,9,0,'2021-10-20',NULL,'2021-08-19 02:51:50','2021-08-19 02:51:50',NULL),(35,12,6,1,2,6,0,'2021-08-24',NULL,'2021-08-19 07:53:10','2021-08-19 07:53:10',NULL),(36,12,6,1,2,6,0,'2021-08-31',NULL,'2021-08-19 07:53:10','2021-08-19 07:53:10',NULL),(37,12,6,1,2,6,0,'2021-09-07',NULL,'2021-08-19 07:53:10','2021-08-19 07:53:10',NULL),(38,12,6,1,2,6,0,'2021-09-14',NULL,'2021-08-19 07:53:10','2021-08-19 07:53:10',NULL),(39,12,6,1,2,6,0,'2021-09-21',NULL,'2021-08-19 07:53:10','2021-08-19 07:53:10',NULL),(40,7,3,2,2,8,0,'2021-08-19',NULL,'2021-08-19 09:05:27','2021-08-19 09:05:27',NULL),(41,7,3,2,2,8,0,'2021-08-26',NULL,'2021-08-19 09:05:27','2021-08-19 09:05:27',NULL),(42,7,3,2,2,8,0,'2021-09-02',NULL,'2021-08-19 09:05:27','2021-08-19 09:05:27',NULL),(43,7,3,2,2,8,0,'2021-09-09',NULL,'2021-08-19 09:05:27','2021-08-19 09:05:27',NULL),(44,7,3,2,2,8,0,'2021-09-16',NULL,'2021-08-19 09:05:27','2021-08-19 09:05:27',NULL),(45,7,3,2,2,8,0,'2021-09-23',NULL,'2021-08-19 09:05:27','2021-08-19 09:05:27',NULL);
/*!40000 ALTER TABLE `student_schedules` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `students` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `full_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `day_of_birth` date DEFAULT NULL,
  `phone_no` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `students_user_id_foreign` (`user_id`),
  CONSTRAINT `students_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `students`
--

LOCK TABLES `students` WRITE;
/*!40000 ALTER TABLE `students` DISABLE KEYS */;
INSERT INTO `students` VALUES (1,6,NULL,NULL,NULL,NULL,'2021-08-18 05:46:20','2021-08-18 05:46:20'),(2,7,NULL,NULL,NULL,NULL,'2021-08-19 01:39:21','2021-08-19 01:39:21'),(3,8,NULL,NULL,NULL,NULL,'2021-08-19 02:05:01','2021-08-19 02:05:01'),(4,9,NULL,NULL,NULL,NULL,'2021-08-19 02:11:53','2021-08-19 02:11:53');
/*!40000 ALTER TABLE `students` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `study_sessions`
--

DROP TABLE IF EXISTS `study_sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `study_sessions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `session_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `session_start` datetime NOT NULL,
  `session_end` datetime NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `study_sessions`
--

LOCK TABLES `study_sessions` WRITE;
/*!40000 ALTER TABLE `study_sessions` DISABLE KEYS */;
INSERT INTO `study_sessions` VALUES (1,'19h to 21h','2021-08-18 07:00:00','2021-08-18 09:00:00',NULL,'2021-08-18 03:18:23','2021-08-18 03:18:23'),(2,'13h to 15h','2021-08-18 01:00:00','2021-08-18 03:00:00',NULL,'2021-08-18 15:13:34','2021-08-18 15:13:34'),(3,'1','2021-08-19 00:00:00','2021-08-19 12:00:00','2021-08-19 09:21:34','2021-08-19 09:21:18','2021-08-19 09:21:34');
/*!40000 ALTER TABLE `study_sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subject_translations`
--

DROP TABLE IF EXISTS `subject_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subject_translations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `subject_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_id` bigint unsigned NOT NULL,
  `locale` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `subject_translations_subject_id_locale_unique` (`subject_id`,`locale`),
  KEY `subject_translations_locale_index` (`locale`),
  CONSTRAINT `subject_translations_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subject_translations`
--

LOCK TABLES `subject_translations` WRITE;
/*!40000 ALTER TABLE `subject_translations` DISABLE KEYS */;
INSERT INTO `subject_translations` VALUES (1,'introduce_course',1,'en','2021-08-17 23:57:53','2021-08-17 23:57:53',NULL),(2,'介绍',1,'cn','2021-08-17 23:57:53','2021-08-17 23:57:53',NULL),(3,'介绍',1,'sc','2021-08-17 23:57:53','2021-08-17 23:57:53',NULL),(4,'Basic Maths',2,'en','2021-08-18 01:34:29','2021-08-18 01:34:29',NULL),(5,'基础数学',2,'cn','2021-08-18 01:34:29','2021-08-18 01:34:29',NULL),(6,'基础数学',2,'sc','2021-08-18 01:34:29','2021-08-18 01:34:29',NULL),(7,'Create Live Stream Tutorial',3,'en','2021-08-18 14:45:45','2021-08-18 14:45:45',NULL),(8,'创建直播教程',3,'cn','2021-08-18 14:45:45','2021-08-18 14:45:45',NULL),(9,'创建直播教程',3,'sc','2021-08-18 14:45:45','2021-08-18 14:45:45',NULL),(10,'Test en',4,'en','2021-08-19 08:21:02','2021-08-19 08:21:02',NULL),(11,'Test tc',4,'cn','2021-08-19 08:21:02','2021-08-19 08:21:02',NULL),(12,'Test sc',4,'sc','2021-08-19 08:21:02','2021-08-19 08:21:02',NULL);
/*!40000 ALTER TABLE `subject_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subjects`
--

DROP TABLE IF EXISTS `subjects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subjects` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `certificate_id` bigint unsigned NOT NULL,
  `subject_color_background` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_color_text` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `subjects_certificate_id_foreign` (`certificate_id`),
  CONSTRAINT `subjects_certificate_id_foreign` FOREIGN KEY (`certificate_id`) REFERENCES `certificates` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subjects`
--

LOCK TABLES `subjects` WRITE;
/*!40000 ALTER TABLE `subjects` DISABLE KEYS */;
INSERT INTO `subjects` VALUES (1,1,'#fff','#fff',1,'2021-08-17 23:57:53','2021-08-17 23:57:53',NULL),(2,2,'#3d6ebd','#ffffff',1,'2021-08-18 01:34:29','2021-08-18 01:34:29',NULL),(3,2,'#811818','#ffffff',1,'2021-08-18 14:45:45','2021-08-18 14:45:45',NULL),(4,6,'#000000','#ffffff',1,'2021-08-19 08:21:02','2021-08-19 08:23:36',NULL);
/*!40000 ALTER TABLE `subjects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `submit_examinations`
--

DROP TABLE IF EXISTS `submit_examinations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `submit_examinations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `student_id` bigint unsigned NOT NULL,
  `examination_id` bigint NOT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `submit_examinations_student_id_foreign` (`student_id`),
  CONSTRAINT `submit_examinations_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `submit_examinations`
--

LOCK TABLES `submit_examinations` WRITE;
/*!40000 ALTER TABLE `submit_examinations` DISABLE KEYS */;
/*!40000 ALTER TABLE `submit_examinations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subscription_items`
--

DROP TABLE IF EXISTS `subscription_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subscription_items` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `subscription_id` bigint unsigned NOT NULL,
  `stripe_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_plan` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `subscription_items_subscription_id_stripe_plan_unique` (`subscription_id`,`stripe_plan`),
  KEY `subscription_items_stripe_id_index` (`stripe_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subscription_items`
--

LOCK TABLES `subscription_items` WRITE;
/*!40000 ALTER TABLE `subscription_items` DISABLE KEYS */;
/*!40000 ALTER TABLE `subscription_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subscriptions`
--

DROP TABLE IF EXISTS `subscriptions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subscriptions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_status` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_plan` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int DEFAULT NULL,
  `trial_ends_at` timestamp NULL DEFAULT NULL,
  `ends_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `subscriptions_user_id_stripe_status_index` (`user_id`,`stripe_status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subscriptions`
--

LOCK TABLES `subscriptions` WRITE;
/*!40000 ALTER TABLE `subscriptions` DISABLE KEYS */;
/*!40000 ALTER TABLE `subscriptions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tags` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tag_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag_type` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tags`
--

LOCK TABLES `tags` WRITE;
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
INSERT INTO `tags` VALUES (1,'ABC',1,'2021-08-18 02:26:47','2021-08-19 09:18:30','2021-08-19 09:18:30'),(2,'DEF',2,'2021-08-18 02:28:07','2021-08-19 09:18:33','2021-08-19 09:18:33'),(3,'#學費',2,'2021-08-18 14:10:02','2021-08-18 14:10:02',NULL),(4,'#英國',2,'2021-08-18 14:10:17','2021-08-18 14:10:17',NULL),(5,'#UCAS',2,'2021-08-18 14:12:36','2021-08-18 14:12:36',NULL),(6,'Test',1,'2021-08-19 08:30:59','2021-08-19 09:12:52','2021-08-19 09:12:52'),(7,'1',1,'2021-08-19 09:20:05','2021-08-19 09:20:09','2021-08-19 09:20:09');
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tutor_teach_subject`
--

DROP TABLE IF EXISTS `tutor_teach_subject`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tutor_teach_subject` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tutor_id` bigint unsigned NOT NULL,
  `subject_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tutor_teach_subject_tutor_id_subject_id_unique` (`tutor_id`,`subject_id`),
  KEY `tutor_teach_subject_subject_id_foreign` (`subject_id`),
  CONSTRAINT `tutor_teach_subject_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`),
  CONSTRAINT `tutor_teach_subject_tutor_id_foreign` FOREIGN KEY (`tutor_id`) REFERENCES `tutors` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tutor_teach_subject`
--

LOCK TABLES `tutor_teach_subject` WRITE;
/*!40000 ALTER TABLE `tutor_teach_subject` DISABLE KEYS */;
INSERT INTO `tutor_teach_subject` VALUES (1,2,2,'2021-08-18 01:44:32','2021-08-18 01:44:32',NULL);
/*!40000 ALTER TABLE `tutor_teach_subject` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tutor_translations`
--

DROP TABLE IF EXISTS `tutor_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tutor_translations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tutor_id` bigint unsigned NOT NULL,
  `tutor_info` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tutor_level` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tutor_specialized` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tutor_experience` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `locale` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tutor_translations_tutor_id_locale_unique` (`tutor_id`,`locale`),
  KEY `tutor_translations_locale_index` (`locale`),
  CONSTRAINT `tutor_translations_tutor_id_foreign` FOREIGN KEY (`tutor_id`) REFERENCES `tutors` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tutor_translations`
--

LOCK TABLES `tutor_translations` WRITE;
/*!40000 ALTER TABLE `tutor_translations` DISABLE KEYS */;
INSERT INTO `tutor_translations` VALUES (1,2,'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','en',NULL,NULL,NULL),(2,2,'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','cn',NULL,NULL,NULL),(3,2,'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','sc',NULL,NULL,NULL);
/*!40000 ALTER TABLE `tutor_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tutors`
--

DROP TABLE IF EXISTS `tutors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tutors` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `full_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `day_of_birth` date DEFAULT NULL,
  `phone_no` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tutors_user_id_foreign` (`user_id`),
  CONSTRAINT `tutors_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tutors`
--

LOCK TABLES `tutors` WRITE;
/*!40000 ALTER TABLE `tutors` DISABLE KEYS */;
INSERT INTO `tutors` VALUES (1,2,'Tutor Demo',NULL,NULL,NULL,'2021-08-17 23:57:53','2021-08-17 23:57:53'),(2,5,'tutor demo',NULL,NULL,NULL,'2021-08-18 01:44:32','2021-08-18 01:44:32');
/*!40000 ALTER TABLE `tutors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_likes`
--

DROP TABLE IF EXISTS `user_likes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_likes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `like_style` int NOT NULL DEFAULT '1',
  `likeable_id` int NOT NULL,
  `likeable_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_likes_user_id_foreign` (`user_id`),
  CONSTRAINT `user_likes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_likes`
--

LOCK TABLES `user_likes` WRITE;
/*!40000 ALTER TABLE `user_likes` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_likes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `membership_group` int NOT NULL DEFAULT '1',
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `stripe_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card_brand` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card_last_four` varchar(4) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trial_ends_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_stripe_id_index` (`stripe_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Super admin','admin@gmail.com',NULL,1,'$2y$10$rKOxTvOLBOOMDqCJvD1YDOPp.SdbRWTnZ8VRfTo/fZGcA27OpXm8S',1,NULL,'2021-08-17 23:57:53','2021-08-17 23:57:53',NULL,NULL,NULL,NULL,NULL),(2,'Tutor Demo','tutor@gmail.com',NULL,1,'$2y$10$HzdjKZMGCkuLtsR5j8PkMuMqAjbtf2w73hdFmRKRvxfco1tF2v2Ou',1,NULL,'2021-08-17 23:57:53','2021-08-17 23:57:53',NULL,NULL,NULL,NULL,NULL),(3,'Moderator','moderator@gmail.com',NULL,1,'$2y$10$ofw6rEGFcv/7OGcOYYWYieuVNBNyzpcXHf4IQnB4MQnYt3IbHA81O',1,NULL,'2021-08-18 01:06:38','2021-08-18 01:06:38',NULL,NULL,NULL,NULL,NULL),(5,'tutor001','tutor001@gmail.com',NULL,1,'$2y$10$0TeNh0sSf9fmYW287rLRXuM/F6INTc8ry35DbMS4WH3rhAERQuwjW',1,NULL,'2021-08-18 01:44:32','2021-08-18 01:44:32',NULL,NULL,NULL,NULL,NULL),(6,'phuoctrungbanh.mkd','phuoctrungbanh.mkd@gmail.com',NULL,1,'$2y$10$Djypv2mrqksXkzWuXpRiXu62AkzhhgofnmhOErk.gzo7HTECUfBym',1,NULL,'2021-08-18 05:46:20','2021-08-18 14:06:17',NULL,'cus_K3w2iPPLVhmMF7','visa','4242',NULL),(7,'Phụng Lê','phungb1605300@gmail.com',NULL,1,'$2y$10$vABeARAygQUKD.P49JSOduo5KDAOL6miI4RQZRn6K1iwGR5gkwUxC',1,NULL,'2021-08-19 01:39:21','2021-08-19 01:39:21',NULL,'cus_K48VN7PlzDb1dG',NULL,NULL,NULL),(8,'Phung Le','phungle.mkd@gmail.com',NULL,1,'$2y$10$qxnp8f6mRX.ocz.vH3c.p.2jnF5NMt90ZuXEZAWzoHQfITPP5AcuC',1,NULL,'2021-08-19 02:05:01','2021-08-19 02:34:13',NULL,'cus_K48uITAyjwnaiV','visa','4242',NULL),(9,'trung bành','trungbanh97@gmail.com',NULL,1,'$2y$10$tIDNjPtwpMWMgltOsVji8eWUJETjSPO4xJ1A7EYlkMMCn9gpBVQHK',1,NULL,'2021-08-19 02:11:53','2021-08-19 02:36:11',NULL,'cus_K491EblGOZvRog','visa','4242',NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'helios'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-08-19 19:24:34
