-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2019 at 07:25 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `basic_settings`
--

CREATE TABLE `basic_settings` (
  `settings_id` int(11) NOT NULL,
  `owner_name` varchar(255) NOT NULL,
  `site_name` varchar(255) NOT NULL,
  `site_email` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `cell` varchar(255) NOT NULL,
  `aboutus` text NOT NULL,
  `facebook` text NOT NULL,
  `twitter` text NOT NULL,
  `insta` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `basic_settings`
--

INSERT INTO `basic_settings` (`settings_id`, `owner_name`, `site_name`, `site_email`, `logo`, `cell`, `aboutus`, `facebook`, `twitter`, `insta`) VALUES
(1, 'Hariharan', 'testsite', 'mcaharan@gmail.com', '8ebb96be428c20e1418863602b9c4ae2.gif', '9876543210', 'test', 'facebook', 'twitter', 'instaragafmd');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_E` varchar(255) CHARACTER SET latin1 NOT NULL,
  `category_T` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_E`, `category_T`, `status`) VALUES
(1, 'Entertainment', 'பொழுதுபோக்கு', 1),
(2, 'NEWS', 'செய்திகள்', 1),
(3, 'CELEBRITIES ', 'பிரபலங்கள்', 1),
(4, 'PHOTOS ', 'புகைப்படங்கள்', 1),
(5, 'VIDEOS', 'வீடியோக்கள்', 1),
(6, 'REVIEWS ', 'விமர்சனங்கள்', 1),
(7, 'MEMES', ' மீம்ஸ்', 1),
(8, 'HOLLYWOOD', 'ஹாலிவுட்', 1),
(9, 'TV', 'தொலைக்காட்சி ', 1),
(10, 'SPORTS', 'விளையாட்டு ', 1),
(11, 'Cine News', 'சினிமா செய்திகள் ', 1),
(12, 'Politics', 'அரசியல்', 1);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `news_title` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `news_subtitle` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `news_url` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `news_description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `news_thumbile` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `news_category` int(11) NOT NULL,
  `news_tag1` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `news_tag2` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `news_tag3` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `visitors_counts` int(11) NOT NULL DEFAULT '0',
  `news_status` int(11) NOT NULL DEFAULT '1' COMMENT '0=removed by admin, 1 = unpublished(new), 2 = published(live)',
  `created_by` int(11) NOT NULL,
  `publish_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_title`, `news_subtitle`, `news_url`, `news_description`, `news_thumbile`, `news_category`, `news_tag1`, `news_tag2`, `news_tag3`, `visitors_counts`, `news_status`, `created_by`, `publish_date`, `created_date`) VALUES
(18, 'அனல் பறக்கும் அஜித்தின் மாஸ் லுக்.! அசரவைக்கும் நேர்கொண்ட பார்வை ஃபேன்மேட் போஸ்டர்', 'அனல் பறக்கும் அஜித்தின் மாஸ் லுக்.! அசரவைக்கும் நேர்கொண்ட பார்வை ஃபேன்மேட் போஸ்டர்', 'nerkonda-paarvai-fan-made-poster-new/', '<p>ajith nerkonda paarvai :தல அஜித் தீரன் அதிகாரம் ஒன்று வினோத் இயக்கத்தில் நேர்கொண்ட பார்வை திரைப்படத்தில் நடித்து முடித்துள்ளார், இந்த&nbsp; திரைப்படம் விரைவில் திரைக்கு வர இருக்கிறது, மேலும் நேர்கொண்ட பார்வை திரைப்படத்தை போனி கபூர் தான் தயாரித்துள்ளார்.</p>\r\n<div class="code-block code-block-1">&nbsp;</div>\r\n<p>இதனை தொடர்ந்து அஜித்தின் அடுத்த படத்தையும் வினோத் தான் இயக்க இருக்கிறார் என்ற தகவல் சமீபத்தில் வெளியானது. அதேபோல் நேர்கொண்ட பார்வை படத்திலிருந்து update எப்போது வருமென காத்துக்கொண்டு இருக்கிறார்கள் ரசிகர்கள்.</p>\r\n<p>இந்த நிலையில் ரசிகர் ஒருவர் நேர்கொண்ட பார்வையில் அஜித் கெத்தாக இருப்பது&nbsp; போல் போஸ்டர் ஒன்றை எடிட் செய்து கொல மாஸ் புகைப்படத்தை&nbsp; வெளியிட்டுள்ளார்.</p>\r\n<p></p>\r\n<p><img src="/news-portal/public/news_images//028cbde6acd2649fbca742f444bcc71f.jpg" alt="" /></p>\r\n<p></p>', 'ajith-new.jpg', 2, 'Ajith', 'nerkonda paarai', 'செய்திகள்', 0, 1, 1, '2019-04-23 08:48:19', '2019-04-23 08:48:19'),
(19, 'சிவப்பு நிற டீ-சர்ட், கருப்பு கலர் கோர்ட்.! செம சீனாக ஷாப்பிங் வந்த விஜய்.! வைரலாகும் புகைப்படம்', 'சிவப்பு நிற டீ-சர்ட், கருப்பு கலர் கோர்ட்.! செம சீனாக ஷாப்பிங் வந்த விஜய்.! வைரலாகும் புகைப்படம்', 'சிவப்பு நிற டீ-சர்ட், கருப்பு கலர் கோர்ட்.! செம சீனாக ஷாப்பிங் வந்த விஜய்.! வைரலாகும் புகைப்படம்', '<p>thalapathy 63 : நடிகர் விஜய் தற்போது அட்லி இயக்கத்தில் ஒரு தளபதி 63 படத்தில் நடித்து வருகிறார் இந்த திரைப்படத்தில் விஜய்க்கு ஜோடியாக நயன்தாரா நடித்துள்ளார், படத்தை ஏஜிஎஸ் நிறுவனம் மிக பிரமாண்டமாக தயாரித்து வருகிறது.</p>\n<div class="code-block code-block-1">&nbsp;</div>\n<p>மேலும் படத்தில் கதிர், விவேக் ,ஆனந்தராஜ், டேனியல் பாலாஜி, ஜாக்கி ஷராஃப் யோகி பாபு, இந்துஜா ஆகியோர்கள் ஒரு முக்கிய கதாபாத்திரத்தில் நடித்து வருகிறார்கள்.</p>\n<p>கால்பந்து விளையாட்டை மையமாக வைத்து உருவாகும் இந்த&nbsp; திரைப்படத்தில் தளபதி விஜய் கோச்சராக நடித்து வருகிறார் மேலும் படப்பிடிப்பு சென்னை அதன் சுற்றுப்புறங்களில் தான் நடைபெற்று வருகிறது, சென்னையில் மிகப் பெரிய விளையாட்டு மைதானம் செட் அமைக்கப்பட்டு சூட்டிங் நடைபெற்று வருகிறது இன்னும் சில வாரங்கள் இங்குதான் சூட்டிங் நடைபெறும் என தெரிவித்திருந்தார்கள்.</p>\n<div class="code-block code-block-2">&nbsp;</div>\n<p>இந்த நிலையில் விஜய்யின் புதிய புகைப்படம் ஒன்று இணையதளங்களில் வைரலாகி வருகிறது இந்த புகைப்படத்தில் விஜய் சிவப்பு நிற டீசர்ட் மற்றும் கருப்பு கலர் கோர்ட் போட்டுக் கொண்டு செம சீனாக ஷாப்பிங் சென்றுள்ளார் அந்த புகைப்படம் தான் இணையதளங்களில் வைரலாகி வருகிறது,</p>\n<p>&nbsp;</p>\n<p><img src="/news-portal/public/news_images//909b8e4c44829cac147ed6b83d1cceee.jpg" alt="" /></p>', 'vijay-latest-new.jpg', 1, 'செய்திகள்', 'செய்திகள்', 'செய்திகள்', 0, 2, 1, '2019-04-23 09:58:28', '2019-04-23 09:58:28'),
(20, 'asdf', 'asdf', 'adsf', '<p>adf</p>', '8ebb96be428c20e1418863602b9c4ae2.gif', 11, 'விமர்சனங்கள்', 'செய்திகள்', 'விமர்சனங்கள்', 0, 2, 1, '2019-04-23 10:35:06', '2019-04-23 10:35:06'),
(21, 'Id dicta ratione ut', 'Voluptates ducimus', 'Id molestiae et accu', '<p>sdf</p>', 'Culpa nulla invento', 12, 'Doloribus at tempora', 'Dignissimos id dele', 'Molestiae non eiusmo', 0, 0, 1, '2019-04-23 10:55:21', '2019-04-23 10:55:21'),
(22, 'Tempor neque aut qui', 'Similique sequi aut', 'Autem rerum laborum', '<p>dsaf</p>', 'Dolor voluptatem eli', 1, 'In quia architecto b', 'Reprehenderit accusa', 'Laudantium in ipsam', 0, 0, 1, '2019-04-23 11:00:46', '2019-04-23 11:00:46');

-- --------------------------------------------------------

--
-- Table structure for table `news_tag`
--

CREATE TABLE `news_tag` (
  `tag_id` int(11) NOT NULL,
  `tag` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news_tag`
--

INSERT INTO `news_tag` (`tag_id`, `tag`, `status`, `time`) VALUES
(1, 'செய்திகள்', 1, '2019-04-22 07:20:38'),
(2, 'விமர்சனங்கள்', 1, '2019-04-22 07:20:57');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `test_count`
--

CREATE TABLE `test_count` (
  `id` int(11) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test_count`
--

INSERT INTO `test_count` (`id`, `count`) VALUES
(1, 55555);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'hari', 'admin@admin.com', '$2y$10$RwDxgAq4G.ewCI8vfns2IOMpwVSWWHbDPu/IlcWr5kARjsNAf4kGG', 'zOjpp9Q9c9HewiJpVJM2qerpNFIBJnYbirBNWbc8oKge9JsU2jVdhIg5Btak', '2019-04-11 03:41:10', '2019-04-11 03:41:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `basic_settings`
--
ALTER TABLE `basic_settings`
  ADD PRIMARY KEY (`settings_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `news_tag`
--
ALTER TABLE `news_tag`
  ADD PRIMARY KEY (`tag_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `test_count`
--
ALTER TABLE `test_count`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `basic_settings`
--
ALTER TABLE `basic_settings`
  MODIFY `settings_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `news_tag`
--
ALTER TABLE `news_tag`
  MODIFY `tag_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `test_count`
--
ALTER TABLE `test_count`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
