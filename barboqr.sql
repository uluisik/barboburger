-- phpMyAdmin SQL Dump
-- version 4.9.11
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3306
-- Üretim Zamanı: 06 Haz 2023, 10:55:17
-- Sunucu sürümü: 10.3.32-MariaDB
-- PHP Sürümü: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `prestijbilisimwe_cafeadisyonv2`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `alerji`
--

CREATE TABLE `alerji` (
  `id` int(11) NOT NULL,
  `baslik` varchar(350) COLLATE utf8_turkish_ci NOT NULL,
  `aciklama` varchar(999) COLLATE utf8_turkish_ci NOT NULL,
  `foto` varchar(520) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `alerji`
--

INSERT INTO `alerji` (`id`, `baslik`, `aciklama`, `foto`) VALUES
(2, 'Alkol', 'alkol içerir', '1436479406.png'),
(3, 'Kereviz', 'kereviz ürünleri', '1985658512.png'),
(4, 'Mısır', 'Mısır (opsiyon)', '2022082424.png'),
(5, 'Kabuklular', 'kabuklu ürünleri', '1866736569.png'),
(6, 'Yumurta', 'yumurta içerir', '1665349091.png'),
(7, 'Balık', 'balık ürünleri', '533747560.png'),
(8, 'Gluten', 'tahıl ve gluten içerir', '313598835.png'),
(9, 'Soya Fasulyesi', 'Soya ürünleri', '1063423730.png'),
(10, 'ET (opsiyon)', 'ET (opsiyon) ', '1133287993.png'),
(11, 'Süt', 'Süt ürünleri', '1912726594.png'),
(12, 'Yumuşakçalar', 'Yumuşakçalar ürünleri', '1354009782.png'),
(13, 'Mantar (opsiyon)', 'Mantar (opsiyon)', '1993681571.png'),
(14, 'Krema (opsiyon)', 'Krema (opsiyon)', '983325239.png'),
(15, 'Sakatat (opsiyon)', 'Sakatat (opsiyon)', '1669684445.png'),
(16, 'Yer Fıstığı', 'Fıstık Ürünleri', '742959305.png'),
(17, 'Yabani Et (opsiyon)', 'Yabani Et (opsiyon)', '1561664307.png'),
(18, 'Sebze (opsiyon)', 'Sebze (opsiyon)', '41965782.png'),
(19, 'ŞEKER (opsiyon)', 'ŞEKER (opsiyon)', '1841547842.png'),
(20, 'Tehlikeli (opsiyonel)', 'Tehlikeli (opsiyonel)', '1679193544.png'),
(21, 'Su (opsiyonel)', 'Su (opsiyonel)', '742741608.png');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayar`
--

CREATE TABLE `ayar` (
  `id` int(11) NOT NULL,
  `sayfa_baslik` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `mail` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `adres` varchar(750) COLLATE utf8_turkish_ci NOT NULL,
  `telefon` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `harita` text COLLATE utf8_turkish_ci NOT NULL,
  `facebook` varchar(999) COLLATE utf8_turkish_ci NOT NULL,
  `instagram` varchar(999) COLLATE utf8_turkish_ci NOT NULL,
  `foto` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `siteadres` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ayar`
--

INSERT INTO `ayar` (`id`, `sayfa_baslik`, `mail`, `adres`, `telefon`, `harita`, `facebook`, `instagram`, `foto`, `siteadres`) VALUES
(1, 'SELİM ÖZTÜRK QR MENU', 'ozturkselim@windowslive.com', '19 Mayıs Mah. Süleymaniye Cad. No:3/20', '0 535 051 70 85', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d385396.6059676668!2d29.01217945!3d41.0053215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14caa7040068086b%3A0xe1ccfe98bc01b0d0!2zxLBzdGFuYnVs!5e0!3m2!1str!2str!4v1684740115073!5m2!1str!2str', 'https://www.facebook.com', 'https://www.instagram.com/?hl=tr', '1457704548.png', 'https://samsunsoftware.net.tr/demo/1003_premium_orj/');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `dil_icerik`
--

CREATE TABLE `dil_icerik` (
  `id` int(255) NOT NULL,
  `kayithash` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `dil` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `icerik` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `dil_icerik`
--

INSERT INTO `dil_icerik` (`id`, `kayithash`, `dil`, `icerik`) VALUES
(1356, '6a80106bef9c1772e5bc3bd42b7a50c0', 'ru', 'Özel hazırlanmış et sote ve pilav ile'),
(1355, 'fb7c1670378f1b8f2eb57fd1b7a0b203', 'ru', 'Et Sote (RU)'),
(1354, 'c855fd02ddf8d4d2d1e14fc186ee2dda', 'ar', 'Özel hazırlanmış et sote ve pilav ile'),
(1353, '6588b5935354d004b35f48132b5cbe1c', 'ar', 'Et Sote (AR)'),
(1352, 'afccadd98e10da44501d0daff84c4153', 'en', 'Özel hazırlanmış et sote ve pilav ile'),
(1351, 'c368879fc18943a41a835053d524212c', 'en', 'Et Sote (ENG)'),
(735, 'aeab3996f703128ba2f7c302d5c6eae0', 'ru', 'ru et'),
(734, 'f25db71c72debaaf4e3051f51d7e6a02', 'ru', 'ru et'),
(733, 'e481c093d76eca09a9f6a0d9d37b30c8', 'ar', 'ar et'),
(732, '839e5df3941bae48efaeebd81593ab87', 'ar', 'ar et'),
(731, 'b51966e875cc3fd00006fe9bbf23e12e', 'en', 'eng stek'),
(730, '16b806bd07989c2171097c66bec0ff5e', 'en', 'eng steak'),
(1116, 'ede89cf4156560e5ca296dfe7db62524', 'ru', 'Горячие и холодные напитки'),
(1115, '62b79faf4016d8b138c27ee5b8760bb7', 'ru', 'напитки'),
(1114, 'b233a2430ae9e804f5cf8ef3a1fd409b', 'ar', 'مشروبات ساخنة وباردة'),
(1113, '9f92559ae1ff518aa7cd8370b7c446dd', 'ar', 'مشروبات'),
(1112, '09494af963752c9087e9e93e5ac1541d', 'en', 'Hot and Cold Drinks'),
(1111, 'c50c2a217f1f9b89509f1a9530116167', 'en', 'Beverages'),
(1122, '7942c82f1fd8352423c0577e0ce39b2c', 'ru', 'Самые вкусные куриные меню'),
(1121, '2794bbc749f5321da0e9c8495aa709ef', 'ru', 'Куриные Меню'),
(1120, '99e52ce1b229a2abd8905adfc627a2a9', 'ar', 'قوائم الدجاج اللذيذة'),
(1119, 'aa47cf916e48f1fd2b00ef50254b826d', 'ar', 'قوائم الدجاج'),
(1118, 'a374f1635a72c1a5be7e8a2cdcc8f84d', 'en', 'The Most Delicious Chicken Menus'),
(1117, 'a1a59a638176c1284775d054d42c2478', 'en', 'Chicken Menus'),
(717, '1ccab18b66ed494024a5cea66c22926c', 'ru', ''),
(716, '1c78569afe3dffcd34e65c811715fd81', 'ru', ''),
(715, '6be2cb2a154bc8ce29971171d5b5a7de', 'ar', ''),
(714, '740674fa43c7b9b7185979497a393e41', 'ar', ''),
(713, 'd636eee7f9c43f9842d8edf6bea73738', 'en', ''),
(712, '0b077b03ba7c0e354d5ed5cad41c597b', 'en', ''),
(1128, '57f9afc54394ad89f1875348c2f60558', 'ru', 'Самые специальные мясные меню'),
(1127, '88f72eba90c947a85b632d9d20ec4391', 'ru', 'Мясные Меню'),
(1126, '901e3d6663d4364fd8c6b2b463acbc37', 'ar', 'معظم قوائم اللحوم الخاصة'),
(1125, '5ec0c2918415f76844adb5d3e374b262', 'ar', 'قوائم اللحوم'),
(1124, '2ca7482162102a8e9a566a5380677784', 'en', 'Most Special Meat Menus'),
(1123, '50acbe3ffdf1982d66ebe08491cd61c3', 'en', 'Meat Menus'),
(705, 'ebf5b34955872800bcf7ddd2c5d8fcd3', 'ru', 'ru'),
(704, 'b2b981fb67f40d056f65c62b337cb311', 'ru', 'ru'),
(703, 'fc62f94b979cc7385ecfab885ef0dbb9', 'ar', 'ar'),
(702, '44c5c08d1392096156d893f87e894b90', 'ar', 'ar'),
(701, '70f7b336d026c24b9e7829f9ee5dddd6', 'en', 'eng'),
(700, '1690cadca426e0b11f2694a2465e6700', 'en', 'eng'),
(693, 'c0fee03cd48acd40672bf0685f9d1759', 'ru', 'sizler için derlediğimiz özel et menüleri'),
(692, '90da8e0dbfd1a23b8e1cf4038bbf5a9c', 'ru', 'Et Menüleri'),
(691, '349661315c521ef0dc8a437896e064bf', 'ar', 'sizler için derlediğimiz özel et menüleri'),
(690, 'bd5a8595c54fbcfadd35be88a67df42b', 'ar', 'Et Menüleri'),
(689, '6554a35f2ecd9131f78336ba6ab041f4', 'en', 'sizler için derlediğimiz özel et menüleri'),
(688, 'e607bdfbcb1692e3ed586318eb7adabc', 'en', 'Steak'),
(1833, '6a854f6e263a9b95422f4aae28e03b16', 'ru', '<p>ru</p>\r\n'),
(1832, 'f2248a31ac353255e8fa618d08c15aa6', 'ar', '<p>ar</p>\r\n'),
(1831, '5fd4843a48155e0cd9372af1799b614c', 'en', '<p>eng</p>\r\n'),
(683, '2b8937fbaf8e0982a7ae94285803ca68', 'ru', 'RU'),
(684, '9b98f2bcac24310f08f037d960dce410', 'ru', 'RU'),
(682, 'c201401f96d4d83921e9c97b45064936', 'ru', 'RU'),
(681, 'b9ff92dfbb1a64db6d39ccf4f919147e', 'ar', 'AR'),
(680, 'ac6502cdcac9624da81dd1bd42847426', 'ar', 'AR'),
(679, 'abd270f72640a99e79310434d8677044', 'ar', 'AR'),
(678, '849194fafa7a3f67b85105d4902ca58c', 'en', 'ENG'),
(677, 'aa41e688b660ada46a1829723d8ac848', 'en', 'ENG'),
(676, '50851ac0b4f0ada0fd10ae5b7a7c99c9', 'en', 'ENG'),
(675, '2a8792fe9d3ea0ec815c72631fbca219', 'ru', '<p>ru</p>\r\n'),
(674, 'a6c1662080ca5ece87d31cc128dc984f', 'ru', 'ru'),
(673, 'dcba24835d6a5e63880508d0ded9c189', 'ar', '<p>ru</p>\r\n'),
(672, '915dd8417d5b6aad38375b5692879b79', 'ar', 'ru'),
(671, 'b8d677106cc3d799b302bb893ee6310a', 'en', '<p>eng</p>\r\n'),
(670, 'e6b65f3b8cab7eb4fcb54f73e30a622c', 'en', 'eng'),
(669, '9b833fabf3f60c2f9637dfc0b05e4928', 'ru', 'ru'),
(668, 'd76b07ba848a712ff05e1ffc04da21b3', 'ru', 'ru'),
(667, 'd37b37e43417272630b0044c8e42ba16', 'ar', 'ar'),
(666, '2cec5ac9339cfcf8f53f8d4f6df0d095', 'ar', 'ar'),
(665, '08aa32eb8b212a6c0794d4a13c177774', 'en', 'eng'),
(664, 'df56758897c90843108c39a0116f1b9f', 'en', 'eng'),
(663, 'bed18feeaf8dae746c336b676436e94f', 'ru', 'ruuu'),
(662, '1ba2107808d6e573cc3109f10b09613f', 'ru', 'ru'),
(661, '2765a6538b5144d172b2ee7c4a2adf46', 'ar', 'arar'),
(660, '4845fb6cf74249127d6f944327393d98', 'ar', 'arr'),
(659, 'fd863eaf3c5e76ff7965ffe1c21fff2f', 'en', 'enggg'),
(658, 'cbd1e2bee91b11f755905f2273b4cb7e', 'en', 'eng'),
(656, 'fa63f194744dd5529fe26546d50583c3', 'ru', 'ru'),
(654, '8fbe430f68c1c6d2a4fa0501feda717c', 'ar', 'a5 yemeği'),
(652, '1ab882fe5b0c306576735c1e81689f6e', 'en', 'a5 yemeği'),
(657, 'd531df853e4d7439fc7469c23d6943e3', 'ru', 'ar'),
(650, '3676ce7dcef9297d231812490e8a5d1e', 'ru', 'ru'),
(655, '701861ccc82f8a76d4391806ba1292e1', 'ar', 'ar'),
(648, 'faecf91e66f3ff94508a0d47c5409599', 'ar', 'ar'),
(653, '4727b90c12ee5f5ab2f827ce47058b11', 'en', 'özel sos ile marina edilmiş et sote  2'),
(646, 'c6bd33109df2c6a0fe56088a2853891e', 'en', 'Steak'),
(645, '81f06fb0a34fdd5000c9faf712a1cf48', 'ru', 'rrr'),
(644, '36b8cc6d2c93cd96abfdd9b24a249df0', 'ru', 'ruuu'),
(643, '34d87d30c6d71ae14acc6f2bd8ef68d3', 'ar', 'ar'),
(642, 'f1d49521299cc7146f7b87580954df57', 'ar', 'arrs'),
(641, 'da53fc8b2f061549011609e5506bb53f', 'en', 'ee'),
(640, 'bd609797d71345a1d10f886516ff3088', 'en', 'eng'),
(639, '15c4fd282eb2a26a42dc1720f083264b', 'ru', 'rrr'),
(638, '9f925ac09d8e7979bc5e1a2c1776d392', 'ru', 'ru'),
(637, '8f11c31d6ceec1542d8f8aed96540488', 'ar', 'ar'),
(636, '17923dfc7651201993d1981ffecf34a0', 'ar', 'ar'),
(635, '9b4a2ab7aaceeebebfbef087a83b956a', 'en', 'nee'),
(634, 'c539ce82e0a3516a0273dafa6ee1abe2', 'en', 'eng'),
(1249, '560743bbd0940daeef8c31994e1e9ed4', 'en', 'Et Kavurma (eng)'),
(1250, '4b525aa0541c3204f2f827ac6ea1ef4c', 'en', 'Klasik et kavurma tava'),
(1251, '68f02a5815ed1e88114097563e0e4c1a', 'ar', 'Et Kavurma (ar)'),
(1252, 'ec570a729f0901296c5b58d8577d10be', 'ar', 'Klasik et kavurma tava'),
(1253, 'a309304e20fd6bf798e2dde2f78c1a5e', 'ru', 'Et Kavurma (ru)'),
(1254, '6630c377374e1e3c94d821f0273aecf4', 'ru', 'Klasik et kavurma tava'),
(1147, 'cf531a33fbc62ece03f47a4b228c8331', 'en', 'Tavuk Ciger Sote (eng)'),
(1148, 'dd9116fc853f1b8316401116158accd6', 'en', 'Special Tavuk Ciger Sote'),
(1149, '25a41a675d875bdec83ddf8a36c7f3f5', 'ar', 'Tavuk Ciger Sote (ar)'),
(1150, '5431b57fcc3074f7ca640678ed01fc8f', 'ar', 'Special Tavuk Ciger Sote'),
(1151, '9ec58b4912dce7bbf092f390d0b7b084', 'ru', 'Tavuk Ciger Sote (ru)'),
(1152, '481a7be53f1dd335b7ccd73f34914283', 'ru', 'Special Tavuk Ciger Sote'),
(1210, '4da4201af8c6b85d5e6d695bce24b0ca', 'en', 'Tavuk Sote (eng)'),
(1211, 'ad434923fc6dd55f3be51799a71e7a2d', 'en', 'Special tavuk marina soslu'),
(1212, '8ce851f9c1bce0caa9c11866b623c9fd', 'ar', 'Tavuk Sote (ar)'),
(1213, '6448bb96b55c4edf9a247bdb443eb961', 'ar', 'Special tavuk marina soslu'),
(1214, '9acb5ddac9f1f2874ebc8a04f6da330e', 'ru', 'Tavuk Sote (ru)'),
(1215, 'b944bdc473abc1ff055f289971af29fe', 'ru', 'Special tavuk marina soslu'),
(760, 'bbcbc9383c2bf1083e436896f48d89df', 'en', 'eng portakala'),
(761, 'c9be13444dab36bd2e37e65877e92a56', 'en', 'eng protakala'),
(762, '0e7a81cba36529e5a5b50644587ba54e', 'ar', 'ar porta'),
(763, '7c71dfdbdbf647ddfd4c7a91d5f1f8e5', 'ar', 'ar prota'),
(764, '6e7c78714b4394f0d271a67bfd0323d4', 'ru', 'ru portakala'),
(765, '3cb6ba5bcc0d37ebf33e55d3a04923cd', 'ru', 'ru port'),
(766, '74b3a091f2d645546a630fcbd449ebcc', 'en', 'eng rfedubull'),
(767, 'd07412b06c6d3a071a7b4bfbc4af1f69', 'en', 'eng redubl'),
(768, '7992dafce189acb4ef2a6500d731bf02', 'ar', 'ar red'),
(769, 'a80fdceaae84d28a3b56be5e103427df', 'ar', 'ar red'),
(770, '86297feac7d2d6f7da70eb87090348ef', 'ru', 'ru redbul'),
(771, 'cc7d0bdafbc075f207ba43913b0a7fe9', 'ru', 'ru rebd'),
(772, '7a61a8cb4759d13946559d0b7237aa9e', 'en', 'eng'),
(773, '4cb8ab2d617213ed18997fd8b3524bbe', 'en', 'eng'),
(774, 'aa8833d9ededea032b725485beaa84e9', 'ar', 'ar'),
(775, 'c0278aadb7640762897fc46ff2134794', 'ar', 'ar'),
(776, '823d462d8a506f89895764144b7873c2', 'ru', 'ru'),
(777, 'a603c4a987e379d6d904880abe7e8501', 'ru', 'ru'),
(958, '67175a3be6b7b3794576c3f0d204c6a0', 'en', 'Alcohol'),
(959, '4920fbf180447fdf85c69a7483ffa818', 'en', 'this product contains alcohol'),
(960, '174ee68ac2933a0283a010a1ef86220b', 'ar', 'الكحول'),
(961, '1d9d2171714025679e4e23176e0b5167', 'ar', 'يحتوي هذا المنتج على الكحول'),
(962, '77983b3f0e2ef10d3d87601df3f567a4', 'ru', 'Алкоголь'),
(963, '9309fba6796ab5d9f0083cb2e08cbb82', 'ru', 'ru'),
(964, '51c0addd79a2d8180651249df0457a56', 'en', 'Celery'),
(965, 'f18518b498b193b083c8c73d8e7b0e90', 'en', 'celery products'),
(966, 'ef64f60bb0b4349f0da2cb972fbf6168', 'ar', 'كرفس'),
(967, 'b7e9092a79868e771b01826a194b768e', 'ar', 'منتجات الكرفس'),
(968, '86c97111fcd59dff5e10a755f3f43716', 'ru', 'Сельдерей'),
(969, 'acc030f7b6ce4593ad041bcf68b34aa4', 'ru', 'продукты из сельдерея'),
(1018, 'd939625c1f8be278c241dd72b0761980', 'en', 'Mısır ENG'),
(1019, 'b346b5f9ed43187cd0460db8a3255a5f', 'en', 'Mısır (opsiyon) ENG'),
(1020, '5412557389b8e456715d2b4d7aecd8f5', 'ar', 'Mısır (opsiyon)'),
(1021, 'edddd118b71f757348c94b04a794945f', 'ar', 'Mısır (opsiyon) AR'),
(1022, 'f2f635bb413eff632b61608fd66f94f1', 'ru', 'Mısır (opsiyon)'),
(1023, '969e55f7c8a65f382fcf69139e748c7c', 'ru', 'Mısır (opsiyon) RU'),
(970, 'a775bf670c49c95388e70447759b4191', 'en', 'Crustaceans'),
(971, '99b1c43f1cfdbb40f38b568de8e12dfc', 'en', 'shellfish products'),
(972, '57af212bacf8a7ff2c5c8aaec20dd70f', 'ar', 'القشريات'),
(973, 'c43ca94a096cb9ec48971266eec43866', 'ar', 'منتجات المحار'),
(974, '7590e622a6395c51a9f63e8250cabdc6', 'ru', 'Ракообразные'),
(975, '71ff22617569f2e3c4246680013209b3', 'ru', 'продукты из моллюсков'),
(976, '62e16c6ea0b4633b682a69712a9e3025', 'en', 'Egg'),
(977, '70c4dcda09b9cd79b8b603754587fdc0', 'en', 'contains eggs'),
(978, 'af602f85b5f132c62abc0ffefe2db4d4', 'ar', 'بيضة'),
(979, '68f940d21bb619260398f8f37fec2a04', 'ar', 'يشمل البيض'),
(980, '557ddec52b7b42974aaddcb4e0c233c9', 'ru', 'Яйцо'),
(981, '2085be175e4847404d8e04bc9900a9fa', 'ru', 'Включает яйца'),
(982, '5ae8cb830559084e649e3fee61f68bd9', 'en', 'Fish'),
(983, '621693b9e9d7a343802fabb125138f7d', 'en', 'fish products'),
(984, '2163b0b67115a7f1ea34ed719222f40b', 'ar', 'السمكة'),
(985, '7c40d205e4c9f2d505dd4b670b9392a1', 'ar', 'منتجات الأسماك'),
(986, 'f3931e69ee109d28159dcb66ad7f5d31', 'ru', 'Рыба'),
(987, '7fa9745fede18c76eb4d0b7d14996510', 'ru', 'рыбные продукты'),
(988, '37ef785b8c8f815d43f39dc4c83830cb', 'en', 'Gluten'),
(989, 'c06c2c71205579ce2e41d46818bd7fec', 'en', 'Contains grain and gluten'),
(990, '51c108e00db0e7bddbcfdd1d44fa6ca2', 'ar', 'الغولتين'),
(991, 'a0b7183decc9652bbb7b8f9c0f347591', 'ar', 'يحتوي على الحبوب والغلوتين'),
(992, 'ba784bf7e6ac120389a355eb449372e9', 'ru', 'Глютен'),
(993, '6a979010e63f3e29657b2ae540f32ca4', 'ru', 'Содержит зерно и глютен'),
(994, '5a4ad2f900e063e3ff6eb4730408f0d7', 'en', 'Soybean'),
(995, '7140fd3824dc7ba9ec017e65c0fa4f54', 'en', 'Soy products'),
(996, '3953e022700032fec82a096b35049f5e', 'ar', 'فول الصويا'),
(997, '488aaca0a2a004e115a5bf1c2157d51a', 'ar', 'منتجات الصويا'),
(998, '8a03f70fe402a60d4bfc44ba7e32595b', 'ru', 'соя'),
(999, '9b8e3a3e71e1810e0da263fd5775b388', 'ru', 'Соевые продукты'),
(1024, '5bd37272e7b05bada694ddfd969f17af', 'en', 'ET (opsiyon) '),
(1025, '412149602204d0b2adf5a4c1c7404941', 'en', 'ET (opsiyon)  ENG'),
(1026, 'e9b622402edc9d9591ca19824337dc57', 'ar', 'ET (opsiyon) '),
(1027, '2a1250f4e86a6be3704f86a77b68268b', 'ar', 'ET (opsiyon) AR'),
(1028, '482d2d9c1570dd75eb88b9a8cb94c3d5', 'ru', 'ET (opsiyon) '),
(1029, 'a2ea1ebbacd32c5313904fc52dede75e', 'ru', 'ET (opsiyon) RU'),
(1000, '0f5370907eafce3e1a26dcdeb1aeb00b', 'en', 'Milk'),
(1001, '6dd629aeb451acb55392b4ab77eaea5e', 'en', 'Milk product'),
(1002, 'aa864c52e618d3ac908557739a25841d', 'ar', 'حليب'),
(1003, '0eb9251946c24a60c73c5e64ef94b478', 'ar', 'منتجات الحليب'),
(1004, 'f2192accacf717c4856d9e04404b450b', 'ru', 'молоко'),
(1005, 'a08972a6b34223017871ac84a102594d', 'ru', 'Молочные продукты'),
(1006, 'c707cbbfbefb1329cc376bb7024ee6a2', 'en', 'Mollusc'),
(1007, '419290a25ca40e6c9fa9a1f1233a56a9', 'en', 'Molluscs products'),
(1008, 'c47f7b64d7445d1aa56a851ac3e88e8f', 'ar', 'الرخويات'),
(1009, 'c611d82364f408db9926e58fc08d7ba8', 'ar', 'منتجات الرخويات'),
(1010, '92d577307184c52c671514c103aba682', 'ru', 'моллюск'),
(1011, 'b98b48753844a4296f8f0bfd4cf77b91', 'ru', 'Продукты моллюсков'),
(1030, '63a0365053718a73238b36fde1314978', 'en', 'Mantar (opsiyon)'),
(1031, 'ba1ebf216152da36ec1db8f02d829e92', 'en', 'Mantar (opsiyon) ENG'),
(1032, '4188e04606a6a18331f4b7ca44be3176', 'ar', 'Mantar (opsiyon)'),
(1033, 'dae4a0f885a76ed538fc61127b10e3b7', 'ar', 'Mantar (opsiyon) AR'),
(1034, '89206bc9b1ab3eddd8d6042a8bcab1cf', 'ru', 'Mantar (opsiyon)'),
(1035, '394c540aed2ff6436922bbefe4806b34', 'ru', 'Mantar (opsiyon) RU'),
(1036, '58e026e006a58dbb0b4248e41abad845', 'en', 'Krema (opsiyon) ENG'),
(1037, '7679a594ab968b592e893e8ec1564b72', 'en', 'Krema (opsiyon) ENG'),
(1038, 'd45e885e75f35858113d699e504dd90d', 'ar', 'Krema (opsiyon) AR'),
(1039, 'f663efc0336dc4cc4d86de8166a76796', 'ar', 'Krema (opsiyon) AR'),
(1040, '1312d4b3bb740b1aebe2acd5f577c782', 'ru', 'Krema (opsiyon) RU'),
(1041, '05d1c727b35300427e2b379d0125bf21', 'ru', 'Krema (opsiyon) RU'),
(1042, '7f2ff2c0c79846d8ae49de27ed7ad1ac', 'en', 'Sakatat (opsiyon) ENG'),
(1043, 'bb69fa53703328a32fd525c698434db2', 'en', 'Sakatat (opsiyon) ENG'),
(1044, 'e680a3f69b7bdd60fe40d589e7853109', 'ar', 'Sakatat (opsiyon) AR'),
(1045, '127d37deaa1517a3ed82cfc1ee5e35f7', 'ar', 'Sakatat (opsiyon) AR'),
(1046, '8c973dc7e0303d64e4b831c70afa09e9', 'ru', 'Sakatat (opsiyon) RU'),
(1047, '4a4e743ee5b7972e68c6c210db9055f3', 'ru', 'Sakatat (opsiyon) RU'),
(1012, '35ddb99ac7e76835b3607560de9df7a6', 'en', 'Peanut'),
(1013, 'fadaf023131288785961a7289f8cc1bc', 'en', 'Peanut Products'),
(1014, '5599542bf507843c3aa71f299cac4ce0', 'ar', 'الفول السوداني'),
(1015, '61acd5460e83e1df003882c3bab27e67', 'ar', 'منتجات الفول السوداني'),
(1016, '15a37078d943324e6148adc7454cedc6', 'ru', 'арахис'),
(1017, 'b5066d1a9b3dd181c219e11080948614', 'ru', 'Арахисовая продукция'),
(1048, '0a2fb24b697d2498ef7897be92565601', 'en', 'Yabani Et (opsiyon) '),
(1049, 'f43e1a8241e4ba9cafcd330c0545d1e9', 'en', 'Yabani Et (opsiyon) ENG'),
(1050, '2291eef6970359d2a3360d0a65db4b46', 'ar', 'Yabani Et (opsiyon)'),
(1051, 'a44419269de7f7e59aca017a779dd3ca', 'ar', 'Yabani Et (opsiyon) AR'),
(1052, '04ad9b4c6e54a5a4a19c613a93f9a196', 'ru', 'Yabani Et (opsiyon)'),
(1053, '3c9d7ebb4151e4a7fc1be8d3537da0a6', 'ru', 'Yabani Et (opsiyon)RU'),
(1054, 'cf630f23191523b1c9ed7ac825b3a6e9', 'en', 'Sebze (opsiyon) ENG'),
(1055, '18a1f51561da83ff0b373642d9586332', 'en', 'Sebze (opsiyon) ENG'),
(1056, '99f5131dd2defb6c1dae263db9da246f', 'ar', 'Sebze (opsiyon) AR'),
(1057, '007c4bbfb0121436190f5108eb951124', 'ar', 'Sebze (opsiyon) AR'),
(1058, 'b47359dea9cf992a273ad04559d5fd48', 'ru', 'Sebze (opsiyon) RU'),
(1059, 'aa2dd538bdb3ce55415e6420f3c8d2db', 'ru', 'Sebze (opsiyon)RU'),
(1060, 'ff66aada0a38ef2e25be2c158249e89f', 'en', 'ŞEKER (opsiyon) eng'),
(1061, '2059e428c6f75a4b20c44a6c53bd7ddd', 'en', 'ŞEKER (opsiyon)eng'),
(1062, '74f04d86490f5fac5c76d363b725a370', 'ar', 'ŞEKER (opsiyon) ar'),
(1063, 'fcffcb8bac94dc2c14713851c5f66325', 'ar', 'ŞEKER (opsiyon) ar'),
(1064, '88a0f70ebba0157d10eb199e84c39737', 'ru', 'ŞEKER (opsiyon)ru'),
(1065, '435e6a9dbed6df49ef52794dfa35deed', 'ru', 'ŞEKER (opsiyon) ru'),
(1066, 'd204e481adb7755dde3c53b49a6116cd', 'en', 'Tehlikeli (opsiyonel) eng'),
(1067, '63fcf2bbae54ba7aac787aac3930b2cc', 'en', 'Tehlikeli (opsiyonel) eng'),
(1068, 'ebc9d2d9d708551d80f90c42662b90d0', 'ar', 'Tehlikeli (opsiyonel)ar'),
(1069, 'd24e310d707ff9d634b39c4a17a7fa8e', 'ar', 'Tehlikeli (opsiyonel)ar'),
(1070, '750f71be64dca68ecfae1ce3c66270e5', 'ru', 'Tehlikeli (opsiyonel) ru'),
(1071, '0f3f50aadc9ab35084e27b44bead4dbc', 'ru', 'Tehlikeli (opsiyonel) ru'),
(1072, 'ffbd0d4c804844a1c8393dd5a98b4b90', 'en', 'Su (opsiyonel) eng'),
(1073, 'f385ecba97c4aaa03b148e2c1652dce1', 'en', 'Su (opsiyonel) eng'),
(1074, '2012b538dd440767d5cff80b0c274cf0', 'ar', 'Su (opsiyonel)ar'),
(1075, '8198552d7abed709894d60c62664259e', 'ar', 'Su (opsiyonel)ar'),
(1076, 'f2868b0b892a6d36492c006c54c84ca1', 'ru', 'Su (opsiyonel) ru'),
(1077, '2b7977ba0a0bc1f6781424c6b2792f00', 'ru', 'Su (opsiyonel)ru'),
(1255, 'f28f1565a293945b9c0fabdb9e673763', 'en', 'Et Bonfile (eng)'),
(1256, 'f8eb13cb465de38599d487b4585d7fa3', 'en', 'özel sos ile marina edilmiş et bonfile'),
(1257, 'cb254c9af16bb5ed008b8cbb963d55dd', 'ar', 'Et Bonfile (AR)'),
(1258, '9a76ec8777330b85ee4e8db0f73b2e80', 'ar', 'özel sos ile marina edilmiş et bonfile'),
(1259, '8e13e90de48570a9d47591cfeb2eb18e', 'ru', 'Et Bonfile (RU)'),
(1260, 'a44060b349c44f1587a9b691742d1972', 'ru', 'özel sos ile marina edilmiş et bonfile'),
(2029, '7014fe148e22503a9f39a73b635697b3', 'en', 'Deal of the Week'),
(2030, '1ecb57b8d6055956ae31387e7ff7049f', 'en', 'In All Meat Products'),
(2031, 'f51ae770c9b9c30a0c1e9437294a4850', 'en', '330 ml coca cola gifts in selected chicken menus'),
(2032, '9c1685ceb1ddb10cff5ae5a1caf53725', 'ar', 'صفقة الأسبوع'),
(2033, '79ed048ae5710cfd8cf16f3212c60590', 'ar', 'في جميع منتجات اللحوم'),
(2034, '8f21e9d5807a4bbe1754db3ba0b470e4', 'ar', ' مل من هدايا كوكا كولا في قوائم الدجاج المختارة'),
(2035, 'dbf7e402556d8a23f6d995854f25f857', 'ru', 'Предложение недели'),
(2036, 'f891c01e965d8f61ec940d46d7f53ef7', 'ru', 'во всех мясных продуктах'),
(2037, '80327cbb1e66f020cd56679f5cc394bf', 'ru', '2 330 мл кока-колы в отборных куриных меню'),
(1165, '21464d17f8d8a7d6ee29dc454bc028b4', 'en', ''),
(1166, 'a596b704035bd0f2ed219389eab3d6d0', 'en', ''),
(1167, '4ac762ca3316835186e85aa76036a1d3', 'ar', ''),
(1168, '70676203e3913d464e42bf2774aa037f', 'ar', ''),
(1169, 'b2759ddbd3a40901dd7dd921b1eb9571', 'ru', ''),
(1170, 'fd057c7a10e374f0aa1c942e8135ce34', 'ru', ''),
(1267, 'c8db3e476b61705306b2de9f06e01328', 'en', 'test '),
(1268, '3c65d9f3f482903e20f5c7f133feb6b1', 'en', '3'),
(1269, '308e4339c0043d29f26a367f8d61cfe7', 'ar', ''),
(1270, 'f85df04bdcc9688beb60a0a40c854333', 'ar', ''),
(1271, 'ed3be35bae1f8ff36f97f3ba81239dbf', 'ru', ''),
(1272, '905dab2744428ec7a14e1db09ab05e45', 'ru', ''),
(1360, '2f7166db1a892de22b62ea3fc2b84b95', 'en', 'thesos'),
(1361, '3f16cfd9ed1c3e28f60a340692a3f5fe', 'ar', ''),
(1362, 'e297ba41185e781c8405bb1407b4187f', 'ru', ''),
(1222, '6db5151f1d1cdd24c90f619feb5e5b2e', 'en', ''),
(1223, '074ae5a22feadd3154d628026535320b', 'en', ''),
(1224, '55242a9e51114ce3e78361206a0555c5', 'ar', ''),
(1225, '6ef0a971407dcf21655d94e0ac1e0113', 'ar', ''),
(1226, '271433cb4276e132bd96658b6431bedc', 'ru', ''),
(1227, '230eb0764c70ae5310f043f6b72503a1', 'ru', ''),
(1402, '92952069e91921295b650ced534b3b81', 'en', 'a15 enfg'),
(1403, 'bb34e17fcb759c0ad75dcb101fd6ca09', 'en', 'a15 eng'),
(1404, '7fa3ef204947692d38328ab5b1194d9c', 'ar', ''),
(1405, '3d5579f2cd13d5d12020b0186574e665', 'ar', ''),
(1406, '3153833c643f2e62f877d6cf2bacf5a9', 'ru', ''),
(1407, '77c53331499a68b99e720980aeea9e31', 'ru', ''),
(1228, '9e69ec3b8dc2837affe020d69d93e9ba', 'en', ''),
(1229, '1ef4daacd84f83fb2efe578afacdeb84', 'ar', ''),
(1230, '558353e21efe70d8a0f369f1f3cc1354', 'ru', ''),
(1231, '99448d942c18a33caa367ec44b41c52a', 'en', ''),
(1232, '8ab580bef526049dcd42e00dfd4c7d10', 'ar', ''),
(1233, '7b8316c9a5ec407023b450e4b4b202a7', 'ru', ''),
(1234, 'afc50b7fb06bb248c6ba73963e7bdec3', 'en', ''),
(1235, '3f9760873a6f1bf1ebefe70edb6ce8d1', 'ar', ''),
(1236, '30c27d9269958267efae4108fe0299c0', 'ru', ''),
(1363, '752866d3b69c631082aee3da64d8f742', 'en', '1.5 Porsiyon ENG'),
(1364, '48c21fbd73066a635d79e6d1987a2b32', 'en', '10'),
(1365, 'ad5f4251d65a77b58a88367a7a199256', 'ar', '1.5 Porsiyon AR'),
(1366, '4360ad28f024d4554d20da7f603751eb', 'ar', '10'),
(1367, 'fbcaacda07ee6241cc5ebfefb41e104c', 'ru', '1.5 Porsiyon RU'),
(1368, '787c1a749c2aac00abc8b4b23973fa80', 'ru', '10'),
(1318, '45d60b2e030fd8702d19e86582f1db82', 'en', 'test'),
(1319, '76c9cfeb074dab3195102ee92bbe7d07', 'en', 'test'),
(1320, '7ca4d05514de09cfa625d4d68f4a8453', 'ar', ''),
(1321, '839cc9b5d9ba43c89f233bb8bc976108', 'ar', ''),
(1322, '16623d3079358f4ab6bce5b54c818e59', 'ru', ''),
(1323, 'f22b0cd6ad477eef6f6d3b8c80c90dad', 'ru', ''),
(1312, 'c18c93682eb50a7e151d10946cf52621', 'en', ''),
(1313, '44f01cfa67ea82aaa6a4f55d8d2a6da8', 'en', ''),
(1314, '65c6b659312cde438dee7d3ba2a6787e', 'ar', ''),
(1315, '3991a44c5e45b432c436eff7173c9416', 'ar', ''),
(1316, '87f89f539c189e967e03f15a9862e44a', 'ru', ''),
(1317, 'e6d9bbd396c6d8d41eaaaf5a9e3268e2', 'ru', ''),
(1273, '33c8f6e8d0d5a90e3537803824798698', 'en', '353535'),
(1274, 'd27535b1b7450516b028efc793f8e6dd', 'ar', ''),
(1275, '1b37a2b3d61a8d40bf88ea6837c23712', 'ru', ''),
(1369, '5b99b4966cd92061ca81990c7a19b2d3', 'en', '2 Porsiyon ENG'),
(1370, '21f9f6242a14f7e80d8441c32986b945', 'en', '15'),
(1371, '605821488400045b3cdaf7fdae5e8309', 'ar', '2 Porsiyon AR'),
(1372, '3b49863a4d08ed8e66dee3d74e20956c', 'ar', '15'),
(1373, 'c35d210c727630ce340313d900e6ac3a', 'ru', '2 Porsiyon RU'),
(1374, '803406d47b9996f968f7c2b3a74a1eca', 'ru', '15'),
(1357, '30de14bd35532466dd0e956bf3877f2e', 'en', 'Marul ENG'),
(1358, 'b379dbf8904b355c3cd9c6ad2405334a', 'ar', ''),
(1359, 'f626a33afd1ac5b80b7d02f6bd178cbd', 'ru', ''),
(1345, '8a6585ef565209fc3e00ade892d6ab1d', 'en', ''),
(1346, '6a214aee151d6830c2b4391455be55d7', 'en', ''),
(1347, 'ed8c4acd078d83dbf56d63dcbb1e2638', 'ar', ''),
(1348, '7de64d7de069a352b11c1647dca31e8d', 'ar', ''),
(1349, '1cf10a74a009439c0d51d1cdfcf86752', 'ru', ''),
(1350, '1f98b58ed5af6d9f3042bf6ad16e4a5d', 'ru', ''),
(1396, 'ef5dc402ad9e2f14edd3b96536527df3', 'en', 'Water ENG'),
(1397, '6e8e7a016426400bc7995781ed371543', 'en', 'Water ENG'),
(1398, 'ca90653443076371029ef00ca69a8630', 'ar', 'Water AR'),
(1399, '5d0e00af5d4b1c53689414b418449b01', 'ar', 'Water AR'),
(1400, '1f8cc9726ffbbb4f975bc8838c178db2', 'ru', 'Water RU'),
(1401, '8a608c53bce4f4e4dcf8bbf0676cb307', 'ru', 'Water RU'),
(1381, '29c2aab822601c3ea585345b4e54fb61', 'en', '1 LT WATER'),
(1382, '12445cb44bc547faa38ba0eceadc64a9', 'en', '10'),
(1383, 'a2ac8a0b43315706e0c9865ccccb9f13', 'ar', '1 LT WATER AR'),
(1384, 'aca7b01f9aa83c637f19a4f163f727a5', 'ar', '10'),
(1385, '7a7901e034a1f3c2357df090be71bafc', 'ru', '1 LT WATER RU'),
(1386, '0338e022f106557efd9c8f5511171618', 'ru', '10'),
(1387, '22d3fa6a335dbf1dbe3086cc4ad4f966', 'en', 'WATER'),
(1388, 'cb592fa134f7044275052e3075791e14', 'ar', 'WATER AR'),
(1389, 'fb3981dc0e6d8ec4517c9ddf2d8e69b9', 'ru', 'WATER RU'),
(1408, '73ae72975de5b429d7f161dbd7d8cf4a', 'en', 'Meat Menus'),
(1409, '7c7a11e80fe0b9c648dda15c78887e78', 'en', 'You Can View Our Meat Products Here'),
(1410, 'f045d3e2dd23865306c21882a93078c2', 'ar', 'قوائم اللحوم'),
(1411, '37a9ae0ea0a4977772d6de4ee0c858db', 'ar', 'يمكنك عرض منتجات اللحوم هنا'),
(1412, '2b884f3b1e2e6b6ca2cab7117eeaada8', 'ru', 'Мясные Меню'),
(1413, '17bc44445d5e59bd8ea7e5f75dee6e8c', 'ru', 'Вы можете посмотреть наши мясные продукты здесь'),
(1414, '3176ef11a6a0eb41bff65cec1c88c5fe', 'en', 'Chicken Menus'),
(1415, '3f0b776d406c9c3ca7c2a4dda3ab3e01', 'en', 'You Can See Our Chicken Products Here'),
(1416, '5a852392243e3983eb3176c7efa32930', 'ar', 'قوائم الدجاج'),
(1417, '35086e86cb81a8ed7fcdb339c2bf323c', 'ar', 'يمكنك رؤية منتجات الدجاج لدينا هنا'),
(1418, '25090dbe695224711d8becff4c926ddd', 'ru', 'Куриные Меню'),
(1419, '8802ce031d8dd9ed8de193fec27b2802', 'ru', 'Вы можете увидеть наши куриные продукты здесь'),
(1420, '47b5d6efbad9d27c82e29326f79e6d2a', 'en', 'Drinks'),
(1421, '71f8d652ad70e4f2dcb9b48ad43f2ae3', 'en', 'You Can View All Our Drinks'),
(1422, 'c6155974e258f7c0538a48597cd206fd', 'ar', 'مشروباتنا'),
(1423, '7313a55bfb2b1b56d92cff54ed6bfc2e', 'ar', 'يمكنك مشاهدة جميع مشروباتنا'),
(1424, 'ba6bb9398b9fc6d3fd84f0a1e53bd7ab', 'ru', 'Наши напитки'),
(1425, '85a825dd4e137237d8ef22dc7cbaf4db', 'ru', 'Вы можете посмотреть все наши напитки'),
(1426, 'b7ed5620e4323e3c8004d22ed9a1da56', 'en', 'Ketchup'),
(1427, 'd809f38bf38b589b72c398501c3d0263', 'ar', 'كاتشب'),
(1428, 'a314ebd2cbc7a0116e92ef17f1731164', 'ru', 'Кетчуп'),
(1429, '3158252e7448868e19e8deacc1014896', 'en', 'Mayonnaise'),
(1430, '86a25f2ec03173f318a77ddb6d6344fb', 'ar', 'مايونيز'),
(1431, '766ac300bdb7ea4e85557c117dfffc3f', 'ru', 'Майонез'),
(1432, 'dcf353fddf82c9ab4ac29ad491b81f3d', 'en', 'Greens'),
(1433, '5269e814ba7ed171c31942f4331ab309', 'ar', 'الخضر'),
(1434, '058703139da6a040bf73edc4a44f2cf8', 'ru', 'Зелень'),
(1435, '635c3451bc79c3ef13088a047daaf43a', 'en', 'Chili Pepper'),
(1436, '4d9690723206738a261108fb4f2395b1', 'ar', 'فلفل حار'),
(1437, '65ff474109ab53294b4765f0295296d2', 'ru', 'Перец чили'),
(1438, '86e9c969dbd9f2a4dbaeb34dd11bbf25', 'en', 'Pickle'),
(1439, 'f3e1eb32da074be45e72a691cf732d44', 'ar', 'مخلل'),
(1440, '07104bf6eb92b603b91165252347d4d6', 'ru', 'Соленый огурец'),
(1441, 'c1fb51480f6e616f2aa1ce1bcecda88e', 'en', 'Curry Sauce Chicken'),
(1442, 'fa21ec3957cad68585a8d8ef670a1495', 'en', 'Chicken with extra legendary curry sauce prepared with our chef\'s special recipe'),
(1443, '04648c1bffd8ce8b35abb8a9c980a433', 'ar', 'دجاج بصلصة الكاري'),
(1444, 'c1a91370a7c6a942cc188ce46d0e5521', 'ar', 'دجاج مع صلصة الكاري الأسطورية المحضرة مع وصفة الشيف الخاصة بنا'),
(1445, 'd83322996ac5e3f93f7aab5fc3bdf2d1', 'ru', 'Соус карри с курицей'),
(1446, 'aeba89e8505c313ee8b55e7646923e5c', 'ru', 'Курица с легендарным соусом карри, приготовленная по особому рецепту нашего шеф-повара'),
(1447, '0db44398fd4340c3cc1d8571e448cc21', 'en', '1.5 servings'),
(1448, 'b4a16ae1131773c32d2b3e9314ee689b', 'en', '10'),
(1449, 'ba08472ea6a88ad7f66b2f2513a7c605', 'ar', '1.5 حصص'),
(1450, '58bec28c6ad41e051b32389801f50462', 'ar', '10'),
(1451, '625740e0dfcf05b67da5be900c0c1a7c', 'ru', '1,5 порции'),
(1452, 'd93d6dcb772d35d8fb8f94815bc86908', 'ru', '10'),
(1453, 'ad77ee991a8cddfc75e75bb12186293f', 'en', '2 servings'),
(1454, '48c09822ba4cf042b04f970843a97926', 'en', '7'),
(1455, '03f7a0fac0dc3293f17f376d6a803287', 'ar', '2 حصص'),
(1456, 'fd4ec40d1226a9dd4c33baca126845be', 'ar', '17'),
(1457, 'b3203c26e7450ebfa488aff33c90382d', 'ru', '2 порции'),
(1458, '892f6e664fccea729a084e495ccf30b4', 'ru', '17'),
(1459, 'a2a334c461e6ab30e7e73061183bc2e8', 'en', 'Chicken Smasher'),
(1460, '556d87e618c7476545279d3bef1cc914', 'en', 'Have you tried our chef\'s special chicken smashing'),
(1461, 'afbe5653dd35cb8cb222064ce459f403', 'ar', 'تحطيم الدجاج'),
(1462, '13a3e1a776669840496c20b0df4eaeec', 'ar', 'هل جربت تحطيم الدجاج الخاص بشيفتنا'),
(1463, '33fc04b83be4de9358432358e375c5ab', 'ru', 'Цыпленок Smasher'),
(1464, '389b6247bf864f0e338cbdbab10bf699', 'ru', 'Вы пробовали специальное куриное измельчение нашего шеф-повара'),
(1465, '3fc1ad98ded9e33aaf61c5ff30a9e124', 'en', 'Meat Crumble'),
(1466, '2f63e69ebf1edc13b9d513deac795fa1', 'en', 'Smash meat with lots of sauce made from beef'),
(1467, '3b4de648b061ec670de1f4080f97fca8', 'ar', 'فتات اللحم'),
(1468, '02defef58dd458f1d2d34d26589424cd', 'ar', 'سحق اللحم مع الكثير من الصلصة المصنوعة من لحم البقر'),
(1469, 'f2152f3f6acc034e11e4676b1430b780', 'ru', 'Мясо крошится'),
(1470, 'd78a5487fcd8898388736ceafa17ee69', 'ru', 'Разбейте мясо с большим количеством соуса из говядины'),
(1471, '8f966d45e045b025d9edb889924ce19a', 'en', 'Grilled meat balls'),
(1472, 'f9f40af219095919d3fca1dab3b75be4', 'en', 'grilled meatballs made of beef'),
(1473, '442a43670f17e37c416e23cf7e9e2642', 'ar', 'كرات اللحم المشوي'),
(1474, 'f95347eaef5ea601362870fa77d5d752', 'ar', 'كرات اللحم المشوية المصنوعة من لحم البقر'),
(1475, '0b92c3be5876c9176372fd1eb1ab008f', 'ru', 'Жареные мясные шарики'),
(1476, 'd81951a0e030ff7b81f8713ae129991c', 'ru', 'жареные фрикадельки из говядины'),
(1549, 'b2fbd4343ce2350f44f7c2cd588ab60b', 'en', 'Meat Saute'),
(1550, 'f161efd96add81ed130feb089712e233', 'en', 'Sauteed meat with special sauce made of beef'),
(1551, '174bb181151a569408a5752f58b4c417', 'ar', 'مقلي اللحم'),
(1552, '5a8a45592a144aeb50653af3c3b33cc0', 'ar', 'لحم سوتيه مع صلصة خاصة مصنوعة من لحم البقر'),
(1553, '96fc9647ecbb57cd6cf32dfee979ee4a', 'ru', 'Мясное соте'),
(1554, 'd22c722f4cae1185b4900d08a4bad977', 'ru', 'Обжаренное мясо со специальным соусом из говядины'),
(1489, '0e44206cb7022bd8ca97cf6aab10aacc', 'en', 'Water'),
(1490, '34c34e956ae3aa60b51a16c38bf1643c', 'en', 'Plum 0.5 ML Water'),
(1491, 'f3d4cb227887aa2a23db70d2df9614cd', 'ar', 'ذلك'),
(1492, '54f04ec6e89e3b1c6e0498f0bda31ace', 'ar', 'برقوق 0.5 مل ماء'),
(1493, 'd9256b3686e5b26decce69a2a7cd5881', 'ru', 'Который'),
(1494, '957fbe6cbb7828467e5dad545c5d6384', 'ru', 'Слива 0,5 мл воды'),
(1537, '40c20e65d15f0df8eee900252f71cc88', 'en', 'Orange juice'),
(1538, '9838bc660238a1dd5e3e1aed8f403cc1', 'en', 'Orange juice that will make you cool like ice'),
(1539, '800038892525adff98ac8ec70ab67cf5', 'ar', 'عصير البرتقال'),
(1540, '663e476eb95cb0e0bf68b0d94e45048a', 'ar', 'عصير برتقال يجعلك باردًا مثل الثلج'),
(1541, '5ab1913a76f04c05d6baccb9c6d95931', 'ru', 'апельсиновый сок'),
(1542, '8d07f514a7c3b3676d207e775ddd7443', 'ru', 'Апельсиновый сок, который заставит вас остыть, как лед'),
(1501, '270fc14a1b4d7d5237c2f92e27d0e56b', 'en', '1.5 servings'),
(1502, '302f0042e97ce074c8cee12bfda9e934', 'en', '10'),
(1503, '007afd9edf3dd2e3d97769273ba8c93d', 'ar', '1.5 حصص'),
(1504, 'bbaf88045cd6495dc21fdb9519a99336', 'ar', '10'),
(1505, 'dea19edbf7d700a6a99f90ac9aebd406', 'ru', '1,5 порции'),
(1506, '4b3d14993c992f9eee6aeae4033c8050', 'ru', '10'),
(1507, '6731871dc2090c3c31c54c747bc4173d', 'en', 'Rice'),
(1508, '56b3d66f43dff7be9620b3cd2d7e49b8', 'en', '10'),
(1509, '6b52600698be363902821c4632b52c20', 'ar', 'أرز'),
(1510, '6d68f3ae73902e582fe6a2945df6601d', 'ar', '10'),
(1511, 'f3ef522d7e20e02455f266ae4f7bfd84', 'ru', 'Рис'),
(1512, '74cf29b8c4e945ada1e5638b2094e542', 'ru', '10'),
(1996, '2c87ed875c31157632a642ba43ef511c', 'en', 'Awesome Product'),
(1997, 'cea3de08d04c28f213e3306b0f77306f', 'en', 'Sauteed Chicken with Special Sauce'),
(1998, '8eec2ea197f0786e06742c6c381d0b68', 'en', 'Brand New Chicken Saute Blended with Mexican Sauce'),
(1999, 'bbfca8aab1934691c3e1c4ccb57b75c8', 'ar', 'منتج رائع'),
(2000, '1d1d0c1cdabf51727b14835927e97d87', 'ar', 'دجاج مقلي مع صلصة خاصة'),
(2001, '7863c7960937cddf7e43c383c97c34b4', 'ar', 'دجاج مقلي مع الصلصة المكسيكية'),
(2002, 'c3914e5452790f0cc9b9af5355e6efcb', 'ru', 'Потрясающий продукт'),
(2003, '3ca18818335c81b5d61af7afbbe9eeb4', 'ru', 'Обжаренная курица с фирменным соусом'),
(2004, '751df0adcfbd879d40bdfb5398b87f84', 'ru', 'Совершенно новая куриная соте, смешанная с мексиканским соусом'),
(1564, 'a12536bdcaa3026cfca76621c5e44a26', 'en', ''),
(1565, '18e885d666c17cb5b2f00a40e91d58c8', 'en', ''),
(1566, 'ba19721241168d2bb0ad656ea40a887d', 'ar', ''),
(1567, '9f1d5b0d5e1010cf7109c4997e504517', 'ar', ''),
(1568, 'a477816aa29911ceffe3037f8d2fb3a2', 'ru', ''),
(1569, 'e57674a272c90021c38fbd536afe4330', 'ru', ''),
(1570, 'f34536a9a02c43106a2d1e53fa83c6a1', 'en', ''),
(1571, '3e2438c9cdbbf814c98ee396166b6a3d', 'en', ''),
(1572, '72f0a50c3b53ccf412f765b33550d76f', 'ar', ''),
(1573, 'a0f4d05bc0120bd53fa0103fc0af631a', 'ar', ''),
(1574, '5272e06c62e9198401f14b1624ab23d1', 'ru', ''),
(1575, 'd2515df2e8da249623fa7735f71f23dd', 'ru', ''),
(1576, '9208981389f6cfcfad0c1f88730e5475', 'en', ''),
(1577, '7960e49e84cbc0eeedb05db6b6f4574b', 'en', ''),
(1578, 'b6d9714b66734c391d2a8cec0eac2a0c', 'ar', ''),
(1579, 'cc2d598422b2e72cb599c8d76c0c3dff', 'ar', ''),
(1580, '409c7463120deb130d53a5e77dc83202', 'ru', ''),
(1581, '4a091e158cf82f0af6a65f3d0e88c146', 'ru', ''),
(1588, '7d1b3f174964b1e2be5b74c508ee0cbd', 'en', ''),
(1589, '1370f557ba34ad88e26e6dd2e5a28be4', 'en', ''),
(1590, '4f75edf5f604c44530c8338a4a0251a3', 'ar', ''),
(1591, 'f4a7e7996ce1e6d6416ce4f50ed25630', 'ar', ''),
(1592, '9c25854441fbacba4581b6e396a6ccb9', 'ru', ''),
(1593, '85eb3c2e5d87ec15c2ded59cdf204cad', 'ru', ''),
(1594, '22a73b454b5a19071c904f98a7a853f4', 'en', ''),
(1595, 'a98d9b048e53f274a4bc580309d4868a', 'en', ''),
(1596, '73b89bc69d3f313a59c2129e614e53dc', 'ar', ''),
(1597, '7b23793eee1d8c87fdd1d8458a91bc5d', 'ar', ''),
(1598, 'de6eb27b72fa8faa7010d1b9565023ce', 'ru', ''),
(1599, '8dac8f58752dad93b79541338e6b51cd', 'ru', ''),
(1600, '5923a84cae8bb965aed5e20f270f1727', 'en', ''),
(1601, 'f8eaedf833ac3d6f333f1da7011971ce', 'en', ''),
(1602, '86a04d709f612c8e2d231aefe2dc23c3', 'ar', ''),
(1603, '2fbba5c18bddbd15c9e8368753b8bf90', 'ar', ''),
(1604, 'c0ac7af8ea8413710ce47ca5c98119fb', 'ru', ''),
(1605, 'bd982be765b115c86fb34b2694488883', 'ru', ''),
(1606, '56acfd7096e54db5df2135dc3410e0f5', 'en', ''),
(1607, '42f9e8b99b67446debacc92ae5a34a77', 'en', ''),
(1608, '6512641540955464cc19152b3d0e379e', 'ar', ''),
(1609, '55206c7d94464f116c9f96bc6c28fabb', 'ar', ''),
(1610, '3a4b1890f8addf3cc1f539b4aeb7b4ff', 'ru', ''),
(1611, '95e1982ad1fc64a2dd4b730c0c134671', 'ru', ''),
(1612, 'a048b86cc2d78f6512638fb64c59d3d3', 'en', ''),
(1613, '89d4a71ec2c782ca778818637580fa36', 'en', ''),
(1614, '0eb3c73303927e99566efc33c2d34c0a', 'ar', ''),
(1615, '54bee7a88ca4a61fdb4d74b6bb2f5c7e', 'ar', ''),
(1616, 'b10a67b039da0bf0b5e4de2dadeefec3', 'ru', ''),
(1617, '3be4ee7ea36d4f2b74b59ce6b097b1e1', 'ru', ''),
(1618, 'd86c1db6089c7e83ceedceb92b027bbe', 'en', ''),
(1619, '1db8728ee4ba4e7a399acef34e8e59e4', 'en', ''),
(1620, '4736622a18a6ddc5c330b59cd0a8e14b', 'ar', ''),
(1621, 'f20f4df99a34a1072cbf9fc93dbcb822', 'ar', ''),
(1622, '4bc3c053970373fbe3060f9a06b862b8', 'ru', ''),
(1623, '296e2dbc3849391b723110949808beb6', 'ru', ''),
(1624, '81b50d8d1030a335546e7b609c04387d', 'en', ''),
(1625, '8c1bc88f8ac9af44ce3e3644552b2caa', 'en', ''),
(1626, '101461644aa7ee3b09dcfd6770616869', 'ar', ''),
(1627, '1901f93fe58f558b4d09ddf12da360bb', 'ar', ''),
(1628, 'cffb5248acf0b4623a997b26a380d30d', 'ru', ''),
(1629, '9340bddc00222fc3edc8c904266b2cee', 'ru', ''),
(1630, 'd972e3de443e3ff3f86daddcc678640e', 'en', ''),
(1631, '0c44f0345aa6b37519aabeed43987b90', 'en', ''),
(1632, '4de5d01afd4d34bf80995bb7ce0e23aa', 'ar', ''),
(1633, 'da07cdccbc6e44795b8801566894a16f', 'ar', ''),
(1634, '8cf3f96144e9b4b3f6d5499bc88648cf', 'ru', ''),
(1635, '14d3bee9d4724765cadecb1e6c1d9914', 'ru', ''),
(1684, '42628b92348f5e0f326045889f287299', 'en', '1'),
(1685, '157467e07775f75df619b4dd6d82b189', 'en', ''),
(1686, '4d2a91073dc36a202da18d77e5b12757', 'ar', ''),
(1687, '1132ce452f28cd68631d80b98afe5558', 'ar', ''),
(1688, '53d035d82c5fd0264ec85d19b3b38289', 'ru', ''),
(1689, '41a0093f0c8badd3bc17fe72be7351d5', 'ru', ''),
(1642, 'f1a275589d0878a51f0055ad42f6a49f', 'en', ''),
(1643, 'e278ab423394ab341ad19ce9383f2b72', 'en', ''),
(1644, '30481bd92046a1e47f9297cef6ac19e0', 'ar', ''),
(1645, '91e112def7cf39c695095792a90ca424', 'ar', ''),
(1646, '206a4fe0729ecc3626d7c40c08a7bead', 'ru', ''),
(1647, '7828e7b442372f3b62aa913b12793f02', 'ru', ''),
(1648, '3e6d3639f2db56d5645fe7a2355db44f', 'en', ''),
(1649, '6f80be81592dc17201ef321fb0cb7fe5', 'en', ''),
(1650, '23604a79e5afcd0c4f8cbd9550a7966e', 'ar', ''),
(1651, '9fb9879cc9caa237b9779a5e25a88600', 'ar', ''),
(1652, '867df0029cc2deb93641488a2619f944', 'ru', ''),
(1653, '40c22a6e50267a4c49e691fb5d87289b', 'ru', ''),
(1654, 'c3057d9803e2c10357596ede2faf9bd8', 'en', ''),
(1655, 'bd836c6dbf87bf438e2b08131bb06251', 'en', ''),
(1656, 'f576bd7b87d3f3293a12d645e961ae0d', 'ar', ''),
(1657, '148925be80a8e93520061a9378639717', 'ar', ''),
(1658, 'b5574777ece356f77e3cea8fff5d9330', 'ru', ''),
(1659, 'f19d5ec5ae9aeb074f091d2b032d0423', 'ru', ''),
(1660, 'a471adde895d44db7ef738ec1e60f113', 'en', ''),
(1661, '6a3ff89a73b48c0238ed870848b2cb2d', 'en', ''),
(1662, '5ad34cd60ecf9d3df7d270cfdaaf8623', 'ar', ''),
(1663, 'aad591cb8543c7fd57877e6608089f04', 'ar', ''),
(1664, '9e2071d6744ff51ad1a3ee06441c0147', 'ru', ''),
(1665, '661e1116e93fcdafa63e4bdb80c4580a', 'ru', ''),
(1666, '61c5961f2c0b989f0e1d44b4d453dc13', 'en', ''),
(1667, '7008fd0d349cff7fcb0f7c34c772a42d', 'en', ''),
(1668, '29ef8cd82f96824b35889f26b0a420f5', 'ar', ''),
(1669, 'e341dfb934b8e19446c749ad126541aa', 'ar', ''),
(1670, '9427f534fed01f3ce3b50568b0417d07', 'ru', ''),
(1671, '46c76888f0e058f7a2e92766c22be094', 'ru', ''),
(1672, 'e1c3e446a24c1d12b709544d8bcf8baf', 'en', ''),
(1673, 'ce234a95efaebf050ca4a381120a11eb', 'en', ''),
(1674, '20d7027b32c47e9cdf8ca42621be8d62', 'ar', ''),
(1675, 'fa9054fe6c5c23772e771640a45773a0', 'ar', ''),
(1676, 'f8c4e3b7eb3ec3e8b8e7421aafe396dc', 'ru', ''),
(1677, '01a5b30b868d2b96cdd895e463410573', 'ru', ''),
(1678, 'c4069a6c95a26d2b15ddf956db47fce9', 'en', ''),
(1679, '8a8c1020943485660128eab01b23f40f', 'en', ''),
(1680, 'ff852b2d6d8fb061c846e33f52c79c00', 'ar', ''),
(1681, 'ac8b171b347611e676dbec013e2349cc', 'ar', ''),
(1682, 'dace194bbe3bac515b0d116da0a51deb', 'ru', ''),
(1683, '2d8ab135be7162958cc81f9e93bafa76', 'ru', ''),
(1690, '22720ef5b0c8e2a277218c9d7b39139a', 'en', ''),
(1691, 'e3d5daf516af2b5f5900b1c38f62cc4c', 'en', ''),
(1692, '7207b22e41fd6c65606fcb47e4af8763', 'ar', ''),
(1693, '6d43eaa6c23326e71090f5814f01032b', 'ar', ''),
(1694, '008b92de8beb49cd73e206484d03bd30', 'ru', ''),
(1695, '51c8c5f6a95b825a9002f52c6580fff1', 'ru', ''),
(1696, '21c9f03c39df4e92815343e2d45c757d', 'en', ''),
(1697, '6aeee6232b14ac7a31dbd3508c4c4a6e', 'en', ''),
(1698, '5488e142dd04aedf0baa31b21e659982', 'ar', ''),
(1699, 'ccd1eadf4aeefff1509dbdb89e9dafd4', 'ar', ''),
(1700, '77c38ada48a939f59b94cbd9e6c2c375', 'ru', ''),
(1701, '08a46e4f08f87fd48632e5302de69cc8', 'ru', ''),
(1702, '4727b78890928bf9e6bafb258c09ca00', 'en', ''),
(1703, '1b1e3a292debded6a0c3860af6de694d', 'en', ''),
(1704, 'aa03b232c9af5520410b5e2d043694c4', 'ar', ''),
(1705, 'b6c1b7dc9d907905424477c7d5bc33e6', 'ar', ''),
(1706, 'c38d9fc44a3ad6485700bc41732e22b2', 'ru', ''),
(1707, '4808de073593c129bb26255db3b9413f', 'ru', ''),
(1708, '0c5565b617c0fa18110968e2cb9492f6', 'en', ''),
(1709, 'de638953dddf30b65d7d44be64c18dd5', 'en', ''),
(1710, '0ef1f033eadc7352949636fd7d072810', 'ar', ''),
(1711, '3c87f8a8f7b98edb65b75f08843f7ad7', 'ar', ''),
(1712, '5c9ae8d8a9ba0fe4188cb89c5c6c0648', 'ru', ''),
(1713, '91166bce29f4bfe55e7ceda05397557f', 'ru', ''),
(1714, 'f7ef979c0f1d55de11c77a790e8f17f7', 'en', ''),
(1715, 'b54b9222f730cdc63add10443642109c', 'en', ''),
(1716, 'f7f24b0973065a5eab1713e1bb49e3c4', 'ar', ''),
(1717, 'ed794eb704cceee7c84ffc45b6782071', 'ar', ''),
(1718, '69d2a66f8a25d0475766eeb3919b0add', 'ru', ''),
(1719, '055e397004a940ce373beea625c3d0d6', 'ru', ''),
(1720, '16dc9d2c73651b5268bed57e08a11b79', 'en', ''),
(1721, 'cdb9ff13d404768958ef17ae70acd18b', 'en', ''),
(1722, 'ffc42c0a89be2949b62f3c57be80eb47', 'ar', ''),
(1723, 'e0245c677cf8668cf598cd225b1c0e52', 'ar', ''),
(1724, '02b707ba86ac58b35c5efb2cc081c673', 'ru', ''),
(1725, '9785b5bc8059cc74e5c2e5093b2902d9', 'ru', ''),
(1726, 'd0be2f6462463e62b104fb618ef8f48f', 'en', ''),
(1727, '0769aaca82d99c136e886120754199d9', 'en', ''),
(1728, '0e9024211f3c9d6169b006c22b790fea', 'ar', ''),
(1729, '8385c9c1ceed774de6691e6689cbf4f3', 'ar', ''),
(1730, '83d5480f772947651972d2afd711a0d9', 'ru', ''),
(1731, '98a4dbb030f2da2f24e18df490e4c59c', 'ru', ''),
(1732, 'e1a6c069ebc58e16025d45a51b4f7dee', 'en', ''),
(1733, '0957dbb19be23c6c8f89469cb2c82b84', 'en', ''),
(1734, '2726afb57a4909f3f6f750c95ac3fdcb', 'ar', ''),
(1735, 'ad37ed041aa0272ef5d2d5f33b950731', 'ar', ''),
(1736, '1bb0b20a26b6378ebc4d9587e1f5b074', 'ru', ''),
(1737, '30080c541710f8f1d4f4b61d248d3904', 'ru', ''),
(1738, 'e99c4bfd1d18bdf36749e9fe835f8f80', 'en', ''),
(1739, '31624a9def64e805783d4dbef4ccfec5', 'en', ''),
(1740, '93c7d117c7ca5aeb95288a0d82e9695e', 'ar', ''),
(1741, 'bc0a0073c576c9a63eda1fdb48d6b75d', 'ar', ''),
(1742, 'dec25944d61d4142a925a90f57fa875f', 'ru', ''),
(1743, '48d553226cfe691bcdd441035f69193f', 'ru', ''),
(1744, '70d68d9752b8b0036b22158f17e1830b', 'en', ''),
(1745, '9c083437bfed097253e67da4b83725d4', 'en', ''),
(1746, 'ea6d70f39c3dc7392f7386fbd2ab437a', 'ar', ''),
(1747, 'e476ecc9169205168eb46a13ae143a97', 'ar', ''),
(1748, '0a8305b7fb0db556d43e80cbeeaf1a7f', 'ru', ''),
(1749, '4faab66817358abddc7fd2387173da1b', 'ru', ''),
(1750, '4c546227ae99519728d92d846f7c0dd9', 'en', ''),
(1751, 'cce430a5ca6c1b6d537f3ca3bbe9951c', 'en', ''),
(1752, 'c171ca8f674d9380bf520a469987ae31', 'ar', ''),
(1753, '356216f2fa226f0f51ee80310de84f18', 'ar', ''),
(1754, '3a64b2768ed6c411161926501d3fa874', 'ru', ''),
(1755, '5ed1259958c06caebc8cc32d415d5a42', 'ru', ''),
(1756, 'd282305fedb0ab6b1a2f08ebf7fb69f3', 'en', ''),
(1757, 'ff6c7ecdc1d4359f129335c223f24d13', 'en', ''),
(1758, '47a078ba16843897f310a0b46a31fb36', 'ar', ''),
(1759, 'fccfbc57472fa18cdc3c5a81fd8ee2a8', 'ar', ''),
(1760, 'f35bb6ed551ff9165f187dc15fd9686d', 'ru', ''),
(1761, '3ba18308a9c015596f3ce0086fc0df9d', 'ru', ''),
(1762, '0477116aca7742fb541cab3662ca58bd', 'en', ''),
(1763, '884b2e796b468e7704a5273aae181813', 'en', ''),
(1764, 'c2ba0a8d60892cf359f21074c19f8d14', 'ar', ''),
(1765, 'a107ccef5875035ce831bb1ec98ca780', 'ar', ''),
(1766, 'a0388da68ebf9ac56415a8cd9fe331be', 'ru', ''),
(1767, '07e60e1ac75a12ce0bee1d61f9635340', 'ru', ''),
(1768, '5aee9061acc7a84a8eacc13d6b467d13', 'en', ''),
(1769, 'cc237e2d8ae330cd45e668ec0cab5986', 'en', ''),
(1770, '512649e67c89a9090b8f18d446e218da', 'ar', ''),
(1771, '6cc59576c51105b24672288724ac854a', 'ar', ''),
(1772, '29a826b76718691a78c8d4c73f113864', 'ru', ''),
(1773, '69ca3d2a0ad0fd21c7b6d008483704c2', 'ru', ''),
(1798, '6d45a0ff855719fdc199c2d4710264ec', 'en', ''),
(1799, 'f3c0114f28143f1e8ccece09008d0b1b', 'en', ''),
(1800, '07e0946d93b3f13b71aac59fd4df8eeb', 'ar', ''),
(1801, '58c763fed571c37b66e130f3596d15da', 'ar', ''),
(1802, '4de4f79437eddaf8c6ad87b31bd22401', 'ru', ''),
(1803, 'e9019656d2ad37180565b813d6f4ea67', 'ru', ''),
(1792, 'cdbce11153c5cd9436d46ca1fcb1be89', 'en', ''),
(1793, '25ede92b3dea05b439c875b3a29e3306', 'en', ''),
(1794, 'b7cea1ebfc5a4fe31ee3884243e99b66', 'ar', ''),
(1795, 'de2e7ff00b0b49c1e3f5089042a1f58d', 'ar', ''),
(1796, '1dddaff15a76b2eea0e91fb0c83e834a', 'ru', ''),
(1797, '454f60f39aff129683e374e82a122810', 'ru', ''),
(1786, '7897aaa689f2358a230ebf595cbdb8f1', 'en', ''),
(1787, '36a34a1307bf6cbeef176bec1066e8af', 'en', ''),
(1788, 'ad1b61161b6a6c5fffddcac89c9479b3', 'ar', ''),
(1789, '0753fcf79411327478a5cf67da7b9c27', 'ar', ''),
(1790, 'bf1a31ace67b1fa84a956e8a764b2955', 'ru', ''),
(1791, 'cd9c8733ecc597d721dfddc9c1c50716', 'ru', ''),
(1804, '8e72a5e89e743e0c552d48985890a779', 'en', ''),
(1805, 'e7f5ac09e573cb4de5941b91da25a8ad', 'en', ''),
(1806, 'eb027b77d8e70c8f188ee1df4017fa5c', 'ar', ''),
(1807, '856ed9fb0225ad0fa80c9b87b4d9033b', 'ar', ''),
(1808, 'a8742e6191a0484d5dabf65f9535b30b', 'ru', ''),
(1809, '779266e421a9b4d4e133ec577c8caca7', 'ru', ''),
(1810, '1506b7a5d709efb5920b3665a51c0b74', 'en', ''),
(1811, 'cd418231b3effc7b93efc60141b44dd6', 'en', ''),
(1812, '45771acf16ed40d6a90a70b82846f0a3', 'ar', ''),
(1813, '352b8b0c0e2f2dda661ed2783ccbdab3', 'ar', ''),
(1814, 'a4f24ed77ba0a0641d2b4b5532988325', 'ru', ''),
(1815, '50bbc58e45f3599e09df687611a11a52', 'ru', ''),
(1816, '24cf9470e0e243fc4d3e3ae82ef65f00', 'en', ''),
(1817, 'e6ad47b90a0a6031cdce9bb07afa2a98', 'en', ''),
(1818, 'cd4890d8d80a5f5b7428fdf90e3fb33e', 'ar', ''),
(1819, 'cfdd5bc1866d3fa22a175889daa0b2ad', 'ar', ''),
(1820, 'db424a40d0b465a0b2dac33bc9e099b4', 'ru', ''),
(1821, 'f1a5ee16a6bb8214cd10c4e5b32b245d', 'ru', ''),
(1834, '9c3e45885b3add2607a5c57d5c22c55f', 'en', ''),
(1835, '26852e67627b352961d3d5052f4bb670', 'en', ''),
(1836, '796098cff49eccd33b2feee04ebacb1c', 'en', ''),
(1837, 'a2af6c7115412661c72789c8b785c96f', 'ar', ''),
(1838, 'a3dfcc3deb6399907b5ddb10a948095e', 'ar', ''),
(1839, '92dc47339fb48dfa059885d8a28db1a4', 'ar', ''),
(1840, 'ed14658636fe10af60544a39b3a9e01e', 'ru', ''),
(1841, '1419439090167490aaac3145febe095e', 'ru', ''),
(1842, 'e9180adb6a2a9f177de6294d846dc87d', 'ru', ''),
(1879, '67a990930ab467a9ac33ca05c178354c', 'en', ''),
(1880, 'cef94f04f2e08b44fdc5709db9b5586a', 'en', ''),
(1881, 'dbe69eb83b0484887770b93c126dd768', 'ar', ''),
(1882, 'f2556397f8cad28f1024115b96b63691', 'ar', ''),
(1883, 'c63f5146d374b6a0ce3053f7e8e6615a', 'ru', ''),
(1884, '4d7ebeb41453750a5c03f0fad7713021', 'ru', ''),
(1885, '0b4e734239675234ad674d8894d8dcb7', 'en', ''),
(1886, '2dd1f6e3d976fcafb01657caa8fe8b5d', 'en', ''),
(1887, 'df75f321b7fd3f1a0070206fe2612fd6', 'ar', ''),
(1888, '667583d2bd9d909389fb375a32e3b514', 'ar', ''),
(1889, '5aecb1f5d59dc319ba572bd1a99bdfe6', 'ru', ''),
(1890, 'a7d6e6872e11ba6102d2f5fdd978886f', 'ru', ''),
(1891, '9acafeb992b025949885264067576be0', 'en', ''),
(1892, 'cbee6896ae7b0be5a9146f78ca145a6e', 'en', ''),
(1893, 'c2031c1414b20f0786bd9dc5791a24be', 'ar', ''),
(1894, '9bd0557bfe5ae9f0166e3c4dae3c6f83', 'ar', ''),
(1895, '266810f5500fe3a13d3edaf98c4d2edf', 'ru', ''),
(1896, '8fc1dd0f47c003aedeef592807e86d6b', 'ru', ''),
(1897, '0606cc2cf13def24a1a401dc33aed0cf', 'en', ''),
(1898, 'c49a5e9566e0a3d1d1a664d73826175b', 'en', ''),
(1899, '0c92b52c71dd7eedd140124e16bae557', 'ar', ''),
(1900, 'e4d4ce7964cdf709e0cd7e1356a62a26', 'ar', ''),
(1901, '7308f395c9835693ad9f5a67e4b7af7c', 'ru', ''),
(1902, 'd0085e307123af1af61f8ce573ccc891', 'ru', ''),
(1903, 'fb47e155ef972aee7cefd0d2101e3544', 'en', ''),
(1904, 'bf61eaf2e53c3e00d2a0bca378662c76', 'en', ''),
(1905, 'c9b827baedfff158b8bda593e2ec5be6', 'ar', ''),
(1906, '20a8274790eb61b31ae30dfcf2ee66d5', 'ar', ''),
(1907, '8a0df3760b6ad3b6958e6b6252d5325c', 'ru', ''),
(1908, 'a32e2151bf9a96107bf9c0538796d3b1', 'ru', ''),
(1909, '30dafdd50887ad1ff2b74815db4f45a6', 'en', ''),
(1910, '07e74759c60661e67f2a37f564308b72', 'en', ''),
(1911, '0a290fe3b2553a68e20b5b2c29b0c78a', 'ar', ''),
(1912, '6e445c32f257e2569b60c552e4fad97a', 'ar', ''),
(1913, '67a46bea2ccb63c458831ba0fa1ed3a8', 'ru', ''),
(1914, 'f247b351de611efd268988842f11c50a', 'ru', ''),
(1915, '86bf94926aa42f0b044538b54737f12f', 'en', ''),
(1916, 'fb18e7c1d068129637809a80a626d2a5', 'en', ''),
(1917, 'ee842934bf9d3a36b9ce287996747b5b', 'ar', ''),
(1918, '77094d3805f1990d189bf096218a8025', 'ar', ''),
(1919, '2a6a0753a2c064331dfd696f3796c2c8', 'ru', ''),
(1920, 'dac8e2fd86887d5a7e2bc01d7c3ce342', 'ru', ''),
(1921, '8e39e7efef574665eab301e20a6ca646', 'en', ''),
(1922, 'c3ade57cdc94be212ae73beafc4f438e', 'en', ''),
(1923, '6e1918f772f6869540ef46344e2f829b', 'ar', ''),
(1924, '54c336a216a4d5eadeffaa9e5cd4b72a', 'ar', ''),
(1925, '4d9ce837f543220c2b30885e406cb7db', 'ru', ''),
(1926, 'fbe306520b9036529cd88916f7879bad', 'ru', ''),
(2014, 'fcd1aad2cb2cd4ca1df5d362f5767570', 'en', ''),
(2015, '4d35b44bd0ab98c6288430fdc2555367', 'en', ''),
(2016, 'ebed7ebaaed28f35ce22d0ef0c50bb42', 'ar', ''),
(2017, '219c36fc37e8b8f674eecb1e12346e66', 'ar', ''),
(2018, '37f508dbb93af73d33c7f0f4c073f225', 'ru', ''),
(2019, '87c5f1ed4f1735d6ec23a357a25f2933', 'ru', ''),
(1933, '9a61883c4ec494c56d0f69983c1df13f', 'en', ''),
(1934, 'c7d230a253a679e25ab246ed51d542cf', 'en', ''),
(1935, 'f195045de0ccb9fe22b7faf3c86c53c0', 'ar', ''),
(1936, 'd59e430b41cdea5dab4194d8de44e895', 'ar', ''),
(1937, '17c0f5ee37ba03755a4b5b7b345a408f', 'ru', ''),
(1938, 'b6c01aa4c6d37bb0df28f31f61617448', 'ru', ''),
(1939, 'a58a9f285adac4c3441e750a712e229b', 'en', ''),
(1940, '5706eb4d3bdebefaa24dd8ced0dc9b18', 'en', ''),
(1941, 'e00dd3aaf88e6470797aa1babb22689c', 'ar', ''),
(1942, '05d7cb2b96803bec167b0784e39f7e6d', 'ar', ''),
(1943, '6bf6d50651c471fb2bd053091ca42157', 'ru', ''),
(1944, '57f6c313c1f276d60a3630e550eca913', 'ru', ''),
(1945, '2e975bb633f5d6bd9b28b9c68c08538f', 'en', ''),
(1946, 'ace5c1cc2a6c087a4034f9f4825c66fb', 'en', ''),
(1947, '188451753b92845279903ed8b63f368c', 'ar', ''),
(1948, '1ba4bd3399ac325bfaa06fa5143b0fff', 'ar', ''),
(1949, 'cafef8467790fa33f896160c343505f1', 'ru', ''),
(1950, 'b9600569563f930dc3d16c9392e27775', 'ru', ''),
(1951, 'ef4532d1a1a9d864393f66e96244977f', 'en', ''),
(1952, '683881078ca289a4e2158530db9fde98', 'en', ''),
(1953, '85d5daf3bfe232c402b9ac29c25a4f67', 'ar', ''),
(1954, 'ebb56397329fafaeb4098656d6005315', 'ar', ''),
(1955, '616ee54513022d7ea4fe083013092432', 'ru', ''),
(1956, '073045d842c579bd07a9c2e2611f2611', 'ru', ''),
(1957, '447f3db68f964b020f67a62aa2930fa6', 'en', ''),
(1958, '47f675800b8343ab23d13cce7e3f3afe', 'en', ''),
(1959, '4ac4d65a91e64657e39e2068423897a9', 'ar', ''),
(1960, '7d68d2ac230dfcbe08004629178b7cdf', 'ar', ''),
(1961, 'ae1e20533b23e1d1c615acbad1d1de33', 'ru', ''),
(1962, '873da0116a39b63583931ea9b0ad0a5d', 'ru', ''),
(1963, '50d7a19322e4befe97f47f1ab3c6ce0d', 'en', ''),
(1964, '2a168bd7a837808478244a228840afff', 'en', ''),
(1965, '9d46450592a3a54908627c92cb46d263', 'ar', ''),
(1966, '8786ee3a47994da27c84dded7037efff', 'ar', ''),
(1967, '3675f895eeb7d9e4f64c7c9cc6266fb3', 'ru', ''),
(1968, '8a6274d7748319ac4d01e25c0f274351', 'ru', ''),
(1969, '27d008d70016d1128042c77729906c2e', 'en', ''),
(1970, 'efb033eb0d07aa34a23e53c5595eece9', 'en', ''),
(1971, '12d0b9776045326bc7a94c7322da1c5e', 'ar', ''),
(1972, '9d2dcdba28c578358b01af35c3458ce3', 'ar', ''),
(1973, '4b5cf0087933864a17e97d0f7a0052d7', 'ru', ''),
(1974, '714c2fa31d105e638f143fc4dc3496c0', 'ru', ''),
(1981, '6418e7119b0aa98febaefc8669ac4fd1', 'en', ''),
(1982, '1899f1124623c592700f0784a4b547fe', 'ar', ''),
(1983, '520dc7366148f8415bca54557d63fe51', 'ru', ''),
(1990, 'fbd48fb75d3d26b7f51f9cfb17e93f8f', 'en', ''),
(1991, 'd7ce5a583df96f3a85aaaa9d69b58a48', 'en', ''),
(1992, '2370d6161049ae09d9d7220578342c28', 'ar', ''),
(1993, 'ed2ad8da229df82b0ad7f66881883ea8', 'ar', ''),
(1994, '7fa68807234c5621b11bc637605987d5', 'ru', ''),
(1995, '718e7d6280c5702b25115d183b08fe76', 'ru', ''),
(2005, '1b54f9c5b242b4ea6dc2194c12a75550', 'en', ''),
(2006, '1c18b9b1038609a4e9528f2fad007f6e', 'ar', ''),
(2007, '0ffef39b8d17e1ab140dcccc26d2bf70', 'ru', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ek_secenek`
--

CREATE TABLE `ek_secenek` (
  `id` int(11) NOT NULL,
  `baslik` varchar(350) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ek_secenek`
--

INSERT INTO `ek_secenek` (`id`, `baslik`) VALUES
(9, 'Ketçap'),
(10, 'Mayonez'),
(11, 'Yeşillik'),
(12, 'Pul Biber'),
(13, 'Turşu'),
(14, 'tuz'),
(15, 'karabiber');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `garson_cagir`
--

CREATE TABLE `garson_cagir` (
  `id` int(11) NOT NULL,
  `masa_adi` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `isim_soyisim` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `telefon` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tarih` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkimizda`
--

CREATE TABLE `hakkimizda` (
  `id` int(11) NOT NULL,
  `icerik` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `hakkimizda`
--

INSERT INTO `hakkimizda` (`id`, `icerik`) VALUES
(1, '<p>Tontrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham</p>\r\n');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hesap_iste`
--

CREATE TABLE `hesap_iste` (
  `id` int(11) NOT NULL,
  `masa_adi` varchar(450) COLLATE utf8_turkish_ci NOT NULL,
  `isim_soyisim` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `telefon` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `uyari` varchar(1) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tarih` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `hesap_iste`
--

INSERT INTO `hesap_iste` (`id`, `masa_adi`, `isim_soyisim`, `telefon`, `uyari`, `tarih`) VALUES
(60, '5', 'Fags', '123', NULL, '2020-10-08 20:46:56'),
(61, '3', 'berej', '123', NULL, '2023-04-05 19:31:22');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim`
--

CREATE TABLE `iletisim` (
  `id` int(11) NOT NULL,
  `isim_soyisim` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `mail` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `telefon` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `icerik` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `masa_no`
--

CREATE TABLE `masa_no` (
  `id` int(11) NOT NULL,
  `masa_adi` varchar(500) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `masa_no`
--

INSERT INTO `masa_no` (`id`, `masa_adi`) VALUES
(1, 'Salon - 1 No'),
(3, 'Salon - 5 No'),
(4, 'Salon - 6 No'),
(5, 'Salon - 7 No'),
(6, 'Salon - 8 No'),
(7, 'Salon - 9 No'),
(8, 'Salon - 10 No'),
(9, 'Salon - 11 No'),
(10, 'Salon - 12 No'),
(11, 'Salon - 13 No'),
(12, 'Salon - 14 No'),
(13, 'Salon - 15 No'),
(14, 'Salon - 16 No'),
(15, 'Salon - 17 No'),
(16, 'Salon - 18 No'),
(17, 'Salon - 19 No'),
(18, 'Salon - 20 No');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `parent` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `urun_adi` varchar(999) COLLATE utf8_turkish_ci NOT NULL,
  `urun_fiyat` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `aciklama` varchar(999) COLLATE utf8_turkish_ci NOT NULL,
  `foto` varchar(250) COLLATE utf8_turkish_ci DEFAULT NULL,
  `aktif` char(1) COLLATE utf8_turkish_ci NOT NULL,
  `sira` int(11) NOT NULL,
  `alerji` varchar(999) COLLATE utf8_turkish_ci DEFAULT NULL,
  `ekstralar` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `menu`
--

INSERT INTO `menu` (`id`, `parent`, `urun_adi`, `urun_fiyat`, `aciklama`, `foto`, `aktif`, `sira`, `alerji`, `ekstralar`) VALUES
(41, '49', 'Tavuk Burger', '50', 'Tavuk Burger', '1830725187.png', '1', 0, NULL, '9|10|11|13'),
(40, '49', 'Whopper Menü', '70', 'Whopper Menü', '1580382945.png', '1', 4, NULL, '9|10|11|13'),
(42, '50', 'Sucuklu Pizza', '100', 'Sucuklu Pizza', '254742918.jpg', '1', 8, 'Alkol|Mısır', '9|10|11|12|13|14|15'),
(43, '50', 'Kırmızı Biberli Pizza', '100', 'Kırmızı Biberli Pizza', '197595298.jpg', '1', 12, NULL, '9|10|11|12'),
(44, '47', 'Coca Cola', '20', 'Coca Cola', '1155037348.png', '1', 16, NULL, NULL),
(45, '47', 'Sade Soda', '5', 'Sade Soda', '240404668.jpg', '1', 20, NULL, NULL),
(46, '46', 'Americano', '30', 'Americano', '272593032.jpg', '1', 24, NULL, NULL),
(47, '46', 'Latte', '40', 'Latte', '830612011.jpg', '1', 28, NULL, NULL),
(48, '51', 'Tavuklu Wrap', '80', 'Tavuklu Wrap', '764177310.jpg', '1', 32, NULL, NULL),
(49, '49', 'Tavuk Burger', '50', 'Tavuk Burger', '1830725187.png', '1', 1, NULL, '9|10|11|13'),
(50, '49', 'Whopper Menü', '70', 'Whopper Menü', '1580382945.png', '1', 5, NULL, '9|10|11|13'),
(51, '50', 'Sucuklu Pizza', '100', 'Sucuklu Pizza', '254742918.jpg', '1', 9, 'Alkol|Mısır', '9|10|11|12|13|14|15'),
(52, '50', 'Kırmızı Biberli Pizza', '100', 'Kırmızı Biberli Pizza', '197595298.jpg', '1', 13, NULL, '9|10|11|12'),
(53, '47', 'Coca Cola', '20', 'Coca Cola', '1155037348.png', '1', 17, NULL, NULL),
(54, '47', 'Sade Soda', '5', 'Sade Soda', '240404668.jpg', '1', 21, NULL, NULL),
(55, '46', 'Americano', '30', 'Americano', '272593032.jpg', '1', 25, NULL, NULL),
(56, '46', 'Latte', '40', 'Latte', '830612011.jpg', '1', 29, NULL, NULL),
(57, '51', 'Tavuklu Wrap', '80', 'Tavuklu Wrap', '764177310.jpg', '1', 33, NULL, NULL),
(58, '49', 'Tavuk Burger', '50', 'Tavuk Burger', '1830725187.png', '1', 2, NULL, '9|10|11|13'),
(59, '49', 'Whopper Menü', '70', 'Whopper Menü', '1580382945.png', '1', 6, NULL, '9|10|11|13'),
(60, '50', 'Sucuklu Pizza', '100', 'Sucuklu Pizza', '254742918.jpg', '1', 10, 'Alkol|Mısır', '9|10|11|12|13|14|15'),
(61, '50', 'Kırmızı Biberli Pizza', '100', 'Kırmızı Biberli Pizza', '197595298.jpg', '1', 14, NULL, '9|10|11|12'),
(62, '47', 'Coca Cola', '20', 'Coca Cola', '1155037348.png', '1', 18, NULL, NULL),
(63, '47', 'Sade Soda', '5', 'Sade Soda', '240404668.jpg', '1', 22, NULL, NULL),
(64, '46', 'Americano', '30', 'Americano', '272593032.jpg', '1', 26, NULL, NULL),
(65, '46', 'Latte', '40', 'Latte', '830612011.jpg', '1', 30, NULL, NULL),
(66, '51', 'Tavuklu Wrap', '80', 'Tavuklu Wrap', '764177310.jpg', '1', 34, NULL, NULL),
(67, '49', 'Tavuk Burger', '50', 'Tavuk Burger', '1830725187.png', '1', 3, NULL, '9|10|11|13'),
(68, '49', 'Whopper Menü', '70', 'Whopper Menü', '1580382945.png', '1', 7, NULL, '9|10|11|13'),
(69, '50', 'Sucuklu Pizza', '100', 'Sucuklu Pizza', '254742918.jpg', '1', 11, 'Alkol|Mısır', '9|10|11|12|13|14|15'),
(70, '50', 'Kırmızı Biberli Pizza', '100', 'Kırmızı Biberli Pizza', '197595298.jpg', '1', 15, NULL, '9|10|11|12'),
(71, '47', 'Coca Cola', '20', 'Coca Cola', '1155037348.png', '1', 19, NULL, NULL),
(72, '47', 'Sade Soda', '5', 'Sade Soda', '240404668.jpg', '1', 23, NULL, NULL),
(73, '46', 'Americano', '30', 'Americano', '272593032.jpg', '1', 27, NULL, NULL),
(74, '46', 'Latte', '40', 'Latte', '830612011.jpg', '1', 31, NULL, NULL),
(75, '51', 'Tavuklu Wrap', '80', 'Tavuklu Wrap', '764177310.jpg', '1', 35, NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `menu_kategori`
--

CREATE TABLE `menu_kategori` (
  `id` int(11) NOT NULL,
  `baslik` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `aciklama` varchar(999) COLLATE utf8_turkish_ci NOT NULL,
  `foto` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `sira` int(11) NOT NULL,
  `parent` longtext COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `menu_kategori`
--

INSERT INTO `menu_kategori` (`id`, `baslik`, `aciklama`, `foto`, `sira`, `parent`) VALUES
(47, 'Soğuk İçecekler', 'Soğuk İçecekler', 'kapak_smoothie.jpg', 0, '45'),
(46, 'Sıcak İçecekler', 'Sıcak İçecekler', 'kahvenin-sunum-cesitliligi-ve-kahve-cesitleri-426.jpg', 5, '45'),
(48, 'Yiyecekler', 'Yiyecekler', 'ingilizce-yiyecekler-ve-icecekler.jpg', 3, ''),
(45, 'İçecekler', 'İçecekler', 'içecek.jpg', 6, ''),
(49, 'Hamburgerler', 'Hamburgerler', 'hqdefault.jpg', 4, '48'),
(50, 'Pizzalar', 'Pizzalar', '2021022109163629.jpg', 1, '48'),
(51, 'Ana Yemekler', 'Ana Yemekler', '1200x627-en-kolay-ana-yemek-tarifleri-etli-ve-etsiz-ana-yemek-cesitleri-1593818417361.jpg', 2, '48'),
(52, '3.nesil kahveler', '3.nesil kahveler', 'latte.jpg', 7, '45');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `odeme_ayar`
--

CREATE TABLE `odeme_ayar` (
  `id` int(11) NOT NULL,
  `merchant_id` varchar(225) NOT NULL,
  `merchant_key` varchar(225) NOT NULL,
  `merchant_salt` varchar(225) NOT NULL,
  `aktif` int(11) NOT NULL,
  `web_url` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `odeme_ayar`
--

INSERT INTO `odeme_ayar` (`id`, `merchant_id`, `merchant_key`, `merchant_salt`, `aktif`, `web_url`) VALUES
(1, '165790', 'G9ZkyH2ziMEW1fWm', 'ZtS69bNy4er5hpeG', 1, 'https://samsunsoftware.net.tr/1004_emenuv2/');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `porsiyon_secenekleri`
--

CREATE TABLE `porsiyon_secenekleri` (
  `id` int(11) NOT NULL,
  `baslik` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `kategori_sec` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `fiyat` varchar(100) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `porsiyon_secenekleri`
--

INSERT INTO `porsiyon_secenekleri` (`id`, `baslik`, `kategori_sec`, `fiyat`) VALUES
(13, 'Büyük Boy Bardak', '39', '5'),
(14, 'Big boy', '39', '7'),
(15, 'large', '39', '9');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparisler`
--

CREATE TABLE `siparisler` (
  `siparis_id` int(11) NOT NULL,
  `adi_soyadi` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `telefon` varchar(15) COLLATE utf8_turkish_ci DEFAULT NULL,
  `mail` varchar(225) COLLATE utf8_turkish_ci DEFAULT NULL,
  `adres` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `masa` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `urun_id` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `urun_adet` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `ekstralar` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `porsiyon_id` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklamalar` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `tarih` timestamp NULL DEFAULT current_timestamp(),
  `payment` int(11) NOT NULL,
  `durum` int(11) NOT NULL DEFAULT 0,
  `odeme_durum` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `baslik` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `ana_baslik` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `aciklama` mediumtext COLLATE utf8_turkish_ci NOT NULL,
  `buton` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `foto` varchar(250) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `slider`
--

INSERT INTO `slider` (`id`, `baslik`, `ana_baslik`, `aciklama`, `buton`, `foto`) VALUES
(1, 'Burger Menülerinde İnanılmaz Fırsatlar', 'Haftanın Fırsatı', 'Seçili Tavuk Menülerinde 2 adet 330ml coco cola hediye', 'menu-et-menuleri', '545792088.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yetkili`
--

CREATE TABLE `yetkili` (
  `id` int(11) NOT NULL,
  `isim` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `soyisim` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(250) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `yetkili`
--

INSERT INTO `yetkili` (`id`, `isim`, `soyisim`, `kullanici`, `sifre`) VALUES
(67, 'admin', 'admin', 'admin', 'admin');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `alerji`
--
ALTER TABLE `alerji`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `ayar`
--
ALTER TABLE `ayar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `dil_icerik`
--
ALTER TABLE `dil_icerik`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `hash` (`kayithash`);

--
-- Tablo için indeksler `ek_secenek`
--
ALTER TABLE `ek_secenek`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `garson_cagir`
--
ALTER TABLE `garson_cagir`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `hakkimizda`
--
ALTER TABLE `hakkimizda`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `hesap_iste`
--
ALTER TABLE `hesap_iste`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `iletisim`
--
ALTER TABLE `iletisim`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `masa_no`
--
ALTER TABLE `masa_no`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `menu_kategori`
--
ALTER TABLE `menu_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `odeme_ayar`
--
ALTER TABLE `odeme_ayar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `porsiyon_secenekleri`
--
ALTER TABLE `porsiyon_secenekleri`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `siparisler`
--
ALTER TABLE `siparisler`
  ADD PRIMARY KEY (`siparis_id`);

--
-- Tablo için indeksler `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `yetkili`
--
ALTER TABLE `yetkili`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `alerji`
--
ALTER TABLE `alerji`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Tablo için AUTO_INCREMENT değeri `ayar`
--
ALTER TABLE `ayar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `dil_icerik`
--
ALTER TABLE `dil_icerik`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2038;

--
-- Tablo için AUTO_INCREMENT değeri `ek_secenek`
--
ALTER TABLE `ek_secenek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Tablo için AUTO_INCREMENT değeri `garson_cagir`
--
ALTER TABLE `garson_cagir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- Tablo için AUTO_INCREMENT değeri `hakkimizda`
--
ALTER TABLE `hakkimizda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `hesap_iste`
--
ALTER TABLE `hesap_iste`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- Tablo için AUTO_INCREMENT değeri `iletisim`
--
ALTER TABLE `iletisim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- Tablo için AUTO_INCREMENT değeri `masa_no`
--
ALTER TABLE `masa_no`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Tablo için AUTO_INCREMENT değeri `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- Tablo için AUTO_INCREMENT değeri `menu_kategori`
--
ALTER TABLE `menu_kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- Tablo için AUTO_INCREMENT değeri `odeme_ayar`
--
ALTER TABLE `odeme_ayar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `porsiyon_secenekleri`
--
ALTER TABLE `porsiyon_secenekleri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Tablo için AUTO_INCREMENT değeri `siparisler`
--
ALTER TABLE `siparisler`
  MODIFY `siparis_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=289;

--
-- Tablo için AUTO_INCREMENT değeri `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `yetkili`
--
ALTER TABLE `yetkili`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
