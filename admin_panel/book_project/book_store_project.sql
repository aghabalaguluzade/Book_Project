-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2022 at 12:26 AM
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
-- Database: `book_store_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `contents` longtext NOT NULL,
  `img` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `contents`, `img`, `author`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(6, 'BLOĞUN BAŞLIĞI Məni necə daha yaxşı bir satıcı etdi', '<p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent ornare tortor ac ante egestas hendrerit. Aliquam et metus pharetra, bibendum massa nec, fermentum odio. Nunc id leo ultrices, mollis ligula in, finibus tortor. Mauris eu dui ut lectus fermentum eleifend. Pellentesque faucibus sem ante, non malesuada odio varius nec. Suspendisse potenti.</p>', 'uploads/blog/blogun-basligi-meni-nece-daha-yaxsi-bir-satici-etdi.jpg', 'Quluzadə Ağabala', 'blogun-basligi-meni-nece-daha-yaxsi-bir-satici-etdi', '0', '2022-04-22 23:38:38', '2022-04-22 23:38:38'),
(7, 'İnkişaf edən bir iş istəyirsiniz? BLOQ BAŞINA diqqət yetirin!', '<p>Aenean et tempor eros, vitae sollicitudin velit. Etiam varius enim nec quam tempor, sed efficitur ex ultrices. Phasellus pretium est vel dui vestibulum condimentum. Aenean nec suscipit nibh. Phasellus nec lacus id arcu facilisis elementum. Curabitur lobortis, elit ut elementum congue, erat ex bibendum odio, nec iaculis lacus sem non lorem. Duis suscipit metus ante, sed convallis quam posuere quis. Ut tincidunt eleifend odio, ac fringilla mi vehicula nec. Nunc vitae lacus eget lectus imperdiet tempus sed in dui. Nam molestie magna at risus consectetur, placerat suscipit justo dignissim. Sed vitae fringilla enim, nec ullamcorper arcu.</p>', 'uploads/blog/inkisaf-eden-bir-is-isteyirsiniz-bloq-basina-diqqet-yetirin.jpg', 'Quluzadə Ağabala', 'inkisaf-eden-bir-is-isteyirsiniz-bloq-basina-diqqet-yetirin', '0', '2022-04-22 23:41:17', '2022-04-22 23:41:17');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) UNSIGNED NOT NULL,
  `writer_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `books_name` varchar(500) NOT NULL,
  `books_description` longtext NOT NULL,
  `books_img` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `old_price` decimal(10,2) DEFAULT NULL,
  `price_cut` int(11) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `page` int(11) DEFAULT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `writer_id`, `category_id`, `books_name`, `books_description`, `books_img`, `slug`, `price`, `old_price`, `price_cut`, `quantity`, `code`, `page`, `status`, `created_at`, `updated_at`) VALUES
(1, 5, 27, 'Şerlok Holmsun macəraları (bütün hekayələr)', 'Şerlok Holms – dünyanın ən populyar detektivi.\r\nHətta yazarını da kölgədə qoyan, dünyanın hər tərəfində heykəlləri qoyulan bir xarakter. Unikal şəxsiyyəti və macəraları ilə oxucuları 1887-ci ildən bəri ovsunlamağa davam edən bir personaj. Ser Artur Konan Doyl bu əsəri yazarkən, onun 85 dilə çevriləcəyini təxmin etməmişdi. Şerlok Holms – müqəddəs kitablardan və lüğətlərdən sonra dünyada ən çox oxunan kitabdır. “Qorxu vadisi”, “Dördlərin işarəsi”, “Baskervillərin iti”, “Al-qırmızı etüd” və neçə-neçə maraqlı hekayədə Holmsun müşahidə və məntiqin köməyi ilə bir çox cinayətə aydınlıq gətirdiyinin şahidi olacaqsan.\r\n\r\nŞerlok Holms bəzən evdən çıxmadan müəmmalı cinayətlərin üstünü açan unikal fenomendir. Dörd roman və 50-dən çox hekayədən ibarət bu külliyyatda Holms onlarla cinayətin üstünü açır. Ədəbiyyat dünyası bir çox detektiv ortaya çıxarıb. Amma onlardan heç biri Şerlok Holms qədər populyar ola bilməyib. Cinayətləri açmaqda rasional məntiqə üstünlük verməsi onu dünyanın ən məşhur detektivinə çevirib. Holms, haqqında ən çox film çəkilmiş bir xarakterdir. Buna görə Ginnesin Rekordlar Kitabına salınıb.', 'uploads/books/serlok-holmsun-maceralari-butun-hekayeler.png', 'serlok-holmsun-maceralari-butun-hekayeler', '40.49', '9.00', NULL, 150, '625C980312CF2', 1216, '0', '2022-04-17 00:47:14', '2022-04-18 03:03:34'),
(2, 6, 23, 'Zərdüşt belə söyl­ədi', 'Böyük alman filosofu Fridrix Niçenin (1844-1900) yaradıcılığı 3 dövrü əhatə edir. Üçüncü dövrdə o, (1883-1888) “Zərdüşt belə söyl­ədi”, “Xeyir və şərin o tərəfində” və s. əsərlərini yazır. “Zərdüşt belə söylədi” əsəri filosofun ən mühüm əsəri sayılır. Formasına və məzmununa görə bu əsər fəlsəfi əsərə oxşamır. Adə­tən ədəbiyyatı peşə və fiksiya növlərinə böləndə fəlsəfi əsər­lə­ri peşə ədəbiyyatına daxil edirlər. Fəlsəfə fiksiya olmaq istəmir. Pla­ton fiksiya olan mifik ədəbiyyata qarşı məntiqi ədəbiyyatı qo­yur­du. Məntiqi düşüncə həqiqətə gedən yolu müəyyənləşdirir. F.Niçenin “Zərdüşt belə söylədi” əsərini fiktiv ədəbiyyata aid etmək olar. Zərdüşt düşünülmüş obrazdır. Onun adı Şərqdə müdriklik təlimilə bağlıdır, onun fəlsəfəsində məntiqi arqumentdən çox müdriklik var və bu müdrikliyi o, aforistik yolla elan edir. Bəs F. Niçe niyə ona əl atır? İki minillik tarixi olan Qərb fəlsəfəsini qoyub F.Niçe niyə məhz Sokratdan əvvəlki dövrə gedib çıxır. F.Niçe həqiqəti bu yolla vaxtın və zamanın fövqündə duran bir şey kimi götürür. Ancaq bu yolla onu tapmaq olar. Məsələn, ədalətlik ideyası dildən kənara çıxmaqla həqiqətə qovuşur.', 'uploads/books/zerdust-bele-soyledi.png', 'zerdust-bele-soyledi', '11.99', NULL, NULL, 500, '625C9AC80EB45', 448, '0', '2022-04-18 02:55:04', '2022-04-18 03:02:20'),
(3, 7, 23, 'Evlilik və əxlaq', 'Böyük ingilis riyaziyyatçısı və filosofu Bertran Rasselin 1929-cu ildə yazdığı “Evlilik və əxlaq” əsəri öz dövrünü qabaqlayan, bu günümüz üçün də aktuallığını itirməyən ideyalarla zəngindir. İnsanların azadlığı və xoşbəxtliyi üçün maneəyə çevrilən köhnəlmiş əxlaqi prinsiplərin dəyişilməli olduğunu uca səslə dilə gətirən, vəziyyətdən çıxış yolunu göstərməyə çalışan mütəfəkkirlər sırasında Bertran Rassel öncül yer tutması ilə seçilir. Təsadüfi deyildir ki, Rasselin 1950-ci ildə, Ədəbiyyat üzrə Nobel mükafatı almasında böyük rol oynamış “Evlilik və əxlaq” kitabı ilk nəşrindən keçən onilliklər ərzində ən çox oxunan kitablar sırasında qalmaqda davam etmiş və Qərb dünyasında yenilikçi əxlaqi-mənəvi dünyagörüşün formalaşmasında böyük rol oynamışdır. Geniş oxucu kütləsinə ünvanlanmış əsərini anlaşıqlı və oxunaqlı esse janrında yazan Rassel ailənin yarandığı dövrdən başlayaraq keçdiyi tarixi inkişaf yolunu araşdırmış, onun gələcək inkişafında hansı istiqamətlərə yönələcəyi ilə bağlı maraqlı və düşündürücü hipotezlər irəli sürmüşdür.', 'uploads/books/evlilik-ve-exlaq.png', 'evlilik-ve-exlaq', '9.99', NULL, NULL, 120, '625CA07C270A4', 328, '0', '2022-04-18 03:19:24', '2022-04-18 03:19:24'),
(4, 8, 23, 'Özümlə təkbətək. Düşüncələr', '“Özümlə təkbətək. Düşüncələr” Mark Avrelinin era­­mı­zın II əsrinin 70-ci illərində Dunay ətrafındakı müharibə zamanı yunan dilində qələmə aldığı aforistik fikirlər toplusudur. Əsər antik dövrün axırlarında böyük şöhrətə malik olub, XVI əsrdə isə Avropa filosofları arasında yeni intibahını yaşayıb.\r\nBu şəxsi qeydlər dünya duyumunda stoiklərin təliminə inadla sadiq qalmağa çalışan, bu görüşləri inkişaf etdirərək, insanda ruhun deyil, şüurun aparıcı rolunu etiraf edən imperatorun mahiyyətini açır. Mark Avreli şüuru Bütövün təbiətinə uyğunlaşdırmaqla ehtirassızlığa, soyuq­qanlılığa nail olmağın mümkünlüyünə inanırdı.', 'uploads/books/ozumle-tekbetek-dusunceler.png', 'ozumle-tekbetek-dusunceler', '6.99', NULL, NULL, 50, '625CA10A44702', 160, '0', '2022-04-18 03:21:46', '2022-04-18 03:21:46'),
(5, 9, 32, 'Birinci addım', 'Salam! Dost, bilmirəm bu oxuduğun ilk kitabımdır, ya artıq dəfələrlə həmsöhbət olmuşuq. Bil­mi­rəm məni nə dərəcədə yaxşı tanıyırsan. Sənin gö­zündə özün­­dənrazı və şöhrətpərəst bir ulduz, yox­sa sevdiyin, özü­­nə yaxın saydığın bir insanam? Bilmirəm, bu kitabı al­mısan, ya kimdənsə təsadüfən götürmüsən, ya da kitab dükanında açıb ilk cümlələri oxuyursan. Bilmirəm, ümumiyyətlə, kitab oxumaq həvəskarısan, yoxsa sənin gözündə bu boş bir şeydir. Bilmirəm... Amma sənə bir şeyi danışmaq istəyirəm. Bu aralar mənim həyatımda qəribə bir şey baş verdi. Bir anlıq geriyə çevrilib baxdım və qazandığım uğurları gördüm. Cəmi beşcə ilin içində o qədər irəliləyə bilmişdim ki, bu çox adam üçün təəccüblü də görünə bilərdi. 18 yaşımda olarkən arzu etdiyim yerə gəlib çatdığımı gördüm.', 'uploads/books/birinci-addim.png', 'birinci-addim', '8.40', NULL, NULL, 500, '625CA339E90FC', 256, '0', '2022-04-18 03:31:06', '2022-04-18 03:31:06'),
(6, 9, 32, 'İkinci addım. Həqiqətin beş adı', 'Amma burada əsas məsələ var. “Gedəcəyiniz ünvan” – siz onu bilirsiniz, ona görə də oraya çata bilirsiniz. Yaxşı, bəs əgər eyni şərait olsa və siz hara gedəcəyinizi də bilmirsiniz. Kağızı itiribsiniz və ge­də­­cəyiniz stansiya haqda heç nə bilmirsiniz. Sizdə olan məlumat təkcə bu ünvan idi. Siz illərlə qatardan qatara tullanaraq, heç vaxt sizə lazım olan yerə çata bilməzsiniz. Belə ki, sizə nə lazımdır, hara lazımdır bilmirsiniz.', 'uploads/books/ikinci-addim-heqiqetin-bes-adi.jpg', 'ikinci-addim-heqiqetin-bes-adi', '9.99', NULL, NULL, 650, '625CA3BF2027B', 336, '0', '2022-04-18 03:33:19', '2022-04-18 03:33:19'),
(7, 9, 32, 'Üçüncü Addım. Rəqəmsal meşə', 'Üçüncü Addım”ı bu gün oxuyub bitirdim. Yazdıqlarıma baxdım və başa düşdüm ki, bu qarışıq, ağır və inanılmaz kitabdan heç nə anlamaq olmur. Kvant fizikasını, Kemantika, Rasionalizm fəlsəfəsi, Astrofizika, Etologiya və Neyrofiziologiyanı, Dzen məktəbini bir araya sıxışdırmaq, 200 səhifədə tam anlatmaq mümkün olmadı. Bu kitab Üçüncü Addım deyil, Üçüncü Addıma doğru bir işarədir. Onu atmaq üçün isə siz özünüz daha dərindən və hər bir mövzunu ayrılıqda incələməlisiniz. Ümid edirəm ki, Rəqəmsal meşəyə bu alleqorik səyahət sizin yadınızda xoş bir xatirə olaraq qalacaq.\r\n\r\nP.S Kitabı bitirdikdən sonra “Üç Addım” trilogiyasını ye­nidən oxuyun. Yalnız belə dolğun bir nəticəyə gələ biləcəksiniz.', 'uploads/books/ucuncu-addim-reqemsal-mese.png', 'ucuncu-addim-reqemsal-mese', '9.99', NULL, NULL, 700, '625CA412D293E', 208, '0', '2022-04-18 03:34:42', '2022-04-18 03:34:42'),
(8, 9, 32, 'A - roman', 'Bəziləri deyirdi ki, o heç vaxt yatmır. Bəziləri deyirdi ki, anası uşaq vaxtı onu zibil yeşiyinə atıb. Bəziləri deyirdi ki, o, bütün ölkələri gəzib və bütün sirlərdən xəbəri var. Kimsə düşünürdü ki, o bir adam deyil – bir neçə yerə bölünə bilir. Kimlərsə deyirdi ki, o peyğəmbərdi. Bəziləri isə sakitcə pıçıltı ilə deyirdilər: “O şeytandır” .', 'uploads/books/a-roman.png', 'a-roman', '5.49', NULL, NULL, 800, '625CA4586FCA0', 192, '0', '2022-04-18 03:35:52', '2022-04-18 03:35:52'),
(9, 9, 32, 'Art və xaos', 'Mentalitet Nazirliyi xəbərdarlıq edir :\r\n\r\nEydenlə Xloe arasında olan hisslər \"Nə deyərlər?\"inizin sağlamlığına ziyandır.\r\n\r\n4 ilə yaxın susqunluqdan sonra Qaraqan (Elxan Zeynallı) yaşadığı və qarşılaşdığı həyatı \"Art və xaos\" kitabı ilə oxucularına çatdıracaq.', 'uploads/books/art-ve-xaos.jpg', 'art-ve-xaos', '13.00', NULL, NULL, 1000, '625CA4D9AEA66', 376, '0', '2022-04-18 03:38:01', '2022-04-18 03:38:01');

-- --------------------------------------------------------

--
-- Table structure for table `carousel_banner`
--

CREATE TABLE `carousel_banner` (
  `id` int(11) UNSIGNED NOT NULL,
  `banner_name` varchar(255) NOT NULL,
  `banner_title` varchar(255) NOT NULL,
  `banner_content` varchar(255) NOT NULL,
  `banner_link` varchar(500) NOT NULL,
  `banner_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `carousel_banner`
--

INSERT INTO `carousel_banner` (`id`, `banner_name`, `banner_title`, `banner_content`, `banner_link`, `banner_img`) VALUES
(1, 'Magazine Cover', 'Mockup', 'Cover up front of book and leave summary', 'http://smartbook4.demo.towerthemes.com/image/cache/catalog/slider/slider1-smartbooks4-870x494.jpg', 'uploads/banners/.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `slug` varchar(255) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `parent_id`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(10, 'Uşaq Ədəbiyyatı', 0, 'usaq-edebiyyati', '0', '2022-04-16 22:36:53', '2022-04-16 22:36:53'),
(11, 'Uşaqlar Üçün Bədii Ədəbiyyat', 10, 'usaqlar-ucun-bedii-edebiyyat', '0', '2022-04-16 22:38:44', '2022-04-16 22:38:44'),
(12, 'Ensiklopediyalar.Təlim', 10, 'ensiklopediyalartelim', '0', '2022-04-16 22:39:02', '2022-04-16 22:39:02'),
(13, 'Nağıllar', 10, 'nagillar', '0', '2022-04-16 22:39:21', '2022-04-16 22:39:21'),
(14, 'Boyamalar', 10, 'boyamalar', '0', '2022-04-16 22:39:37', '2022-04-16 22:39:37'),
(15, 'Bestseller', 10, 'bestseller', '0', '2022-04-16 22:39:50', '2022-04-16 22:39:50'),
(16, 'Qeyri-Bədii Ədəbiyyat', 0, 'qeyri-bedii-edebiyyat', '0', '2022-04-16 22:40:14', '2022-04-16 22:40:14'),
(17, 'Psixologiya və biznes', 16, 'psixologiya-ve-biznes', '0', '2022-04-16 22:41:54', '2022-04-16 22:41:54'),
(18, 'Tarix. Hüquq', 16, 'tarix-huquq', '0', '2022-04-16 22:42:14', '2022-04-16 22:42:14'),
(19, 'Kulinariya.Asudə Vaxt. Hobbi', 16, 'kulinariyaasude-vaxt-hobbi', '0', '2022-04-16 22:42:32', '2022-04-16 22:42:32'),
(20, 'Tibb, sağlamlıq', 16, 'tibb-saglamliq', '0', '2022-04-16 22:43:49', '2022-04-16 22:43:49'),
(21, 'Memuarlar. Bioqrafiyalar. Aforizmlər', 16, 'memuarlar-bioqrafiyalar-aforizmler', '0', '2022-04-16 22:44:20', '2022-04-16 22:44:20'),
(22, 'Din. Məxfilik', 16, 'din-mexfilik', '0', '2022-04-16 22:44:38', '2022-04-16 22:44:38'),
(23, 'Fəlsəfə və Elm', 16, 'felsefe-ve-elm', '0', '2022-04-16 22:45:14', '2022-04-16 22:45:14'),
(24, 'Hazırlıq. Xarici dil. Lüğətlər', 16, 'hazirliq-xarici-dil-lugetler', '0', '2022-04-16 22:45:54', '2022-04-16 22:45:54'),
(25, 'Bestseller', 16, 'bestseller', '0', '2022-04-16 22:46:13', '2022-04-16 22:46:13'),
(26, 'Bədii Ədəbiyyat', 0, 'bedii-edebiyyat', '1', '2022-04-16 22:46:28', '2022-04-16 22:46:28'),
(27, 'Detektivlər. Trillerlər', 26, 'detektivler-trillerler', '1', '2022-04-16 22:47:02', '2022-04-16 22:47:02'),
(28, 'Tarixi Romanlar', 26, 'tarixi-romanlar', '1', '2022-04-16 22:47:18', '2022-04-16 22:47:18'),
(29, 'Sevgi Romanları', 26, 'sevgi-romanlari', '1', '2022-04-16 22:47:32', '2022-04-16 22:47:32'),
(30, 'Azərbaycan Və Dünya Klassikası', 26, 'azerbaycan-ve-dunya-klassikasi', '1', '2022-04-16 22:48:24', '2022-04-16 22:48:24'),
(31, 'Poeziya', 26, 'poeziya', '1', '2022-04-16 22:48:51', '2022-04-16 22:48:51'),
(32, 'Müasir Azərbaycan Ədəbiyyatı', 26, 'muasir-azerbaycan-edebiyyati', '1', '2022-04-16 22:49:06', '2022-04-16 22:49:06'),
(33, 'Müasir Xarici Nəşrlər', 26, 'muasir-xarici-nesrler', '1', '2022-04-16 22:49:21', '2022-04-16 22:49:21'),
(34, 'Fantastika. Mistika', 26, 'fantastika-mistika', '1', '2022-04-16 22:49:44', '2022-04-16 22:49:44'),
(35, 'Bestseller', 26, 'bestseller', '0', '2022-04-16 22:49:53', '2022-04-16 22:49:53'),
(36, 'Biznes, psixologiya, motivasiya', 0, 'biznes-psixologiya-motivasiya', '0', '2022-04-16 22:50:14', '2022-04-16 22:50:14'),
(37, 'Biznes Haqqında', 36, 'biznes-haqqinda', '0', '2022-04-16 22:50:30', '2022-04-16 22:50:30'),
(38, 'Psixologiya və fərdi inkişaf', 36, 'psixologiya-ve-ferdi-inkisaf', '0', '2022-04-16 22:51:21', '2022-04-16 22:51:21'),
(39, 'Bestseller', 36, 'bestseller', '0', '2022-04-16 22:51:34', '2022-04-16 22:51:34');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feature_section`
--

CREATE TABLE `feature_section` (
  `id` int(11) UNSIGNED NOT NULL,
  `feature_title` varchar(255) NOT NULL,
  `feature_content` varchar(255) NOT NULL,
  `icon` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feature_section`
--

INSERT INTO `feature_section` (`id`, `feature_title`, `feature_content`, `icon`) VALUES
(1, 'Pulsuz Çatdırılma', '500 manatdan yuxarı sifarişlər', ''),
(2, 'Pulun Geri Qayıtması Zəmanəti', '100% Pulun geri qaytarılması', ''),
(3, 'Nəğd Çatdırılma', 'Qapıda Ödəmə', NULL),
(4, 'Kömək & Dəstək', 'Zəng edin bizə :', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `general_question`
--

CREATE TABLE `general_question` (
  `id` int(11) UNSIGNED NOT NULL,
  `question_title` varchar(255) NOT NULL,
  `question_answer` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `general_question`
--

INSERT INTO `general_question` (`id`, `question_title`, `question_answer`, `created_at`, `updated_at`) VALUES
(1, 'Kitabı Necə Ala Bilərik ?', 'Nağd və Kart ilə', '2022-02-27 19:10:34', '2022-02-27 20:18:49'),
(3, 'Bakıda kitabı necə sifariş etmək olar?', 'Yeni texnologiyaların inkişafı ilə, yaşayış yeri iş və təhsildə böyük rol oynamır. Artıq bir çox insanlar meqapolisin səs-küyündən qaçaraq şəhər kənarı evlərdə yaşamağa üstünlük verirlər. Hətta belə hallarda belə internet mağazadan kitab almaq problem deyil, çünki mağaza bütün Bakı və Azərbaycan ərazisində fəaliyyət göstərir. Müxtəlif janrlarda istədiyiniz kitabı indi çox asanlıqda, evdən bayıra çıxmadan sifariş edə bilərsiniz. Mağazamızda istədiyiniz dildə kitablar – azərbaycan, rus, ingilis, türk dilində kitablar, uşaq ədəbiyyatı, bədii ədəbiyyat, detektivlər, klassik əsərlər, romanlar, biznes kitabları, lüğətlər, memarlıq haqqında kitablar, tarixi, hüquq kitabları, dəbə aid kitablar, kulinariya, uşaq tərbiyəsi, tibbi, psixologiya, ezoterika, dini, əl işləri, turizm, filosifiya, elmi-kütləvi ədəbiyyəta aid kitablar var. Bizim mağazamızdan istədiyiniz – fantastikadan tutmuş, elmi ədəbiyyata kimi kitabları əldə edə bilərsiniz.\r\n\r\nKitab almaq heç belə asan olmamışdı. İndi siz nəinki vaxt itirmədən kitab əldə edə biləcəksiniz, həm də mağazamız tərəfindən keçirilən müxtəlif aksiyalar və ya endirimlər, 50 % endirimli kitablar və hətta 1 manata olan kitabları da əldə edə biləcəksiniz. İndi siz çox asanlıqla elektron kataloqdan istifadə etməklə istədiyiz kitabı seçə, kitab annotasiyasını və kitab haqqında digər oxucuların yazdığı rəyləri oxuya bilərsiniz. Siz əmin ola bilərsiniz ki, sifarişi aldıqdan sonra məyus olmayacaqsınız – siz istədiyiniz kitabı əldə etmiş olacaqsınız.', '2022-04-24 04:43:21', '2022-04-24 04:43:21'),
(4, 'Russiya, Amerika və Avropaya kitab sifariş etmək olar?', 'Xarici ölkədə yaşasanız da bizim mağazamızdan internet ilə azərbaycan kitabları və milli suvenirləri ala bilərsiniz. Bu rus dilində və digər dillərdə olan kitablara da aiddir. Azərbaycan dilində olan kitabları biz özümüz tərcümə edib nəşr edirik.\r\nSifariş etdiyiniz kitabı, ödəniş edildiyi gündən bir gün sonra istədiyiniz ölkəyə göndərə bilərik. Siz sifarişlərinizi 3-12 gün arası ala bilərsiniz.', '2022-04-24 04:53:33', '2022-04-24 04:53:33'),
(5, 'Azərbaycanın rayonlarından necə sifariş edə bilərik?', 'Əgər siz Azərbaycanda yaşayırsınızda kitab sifariş etmək sizin üçün çox asan olacaq. 15 illik iş təcrübəsində biz işimizin peşəkarı olmuşuq. Sifarişinizi xüsusi ödənişlə Ağstafa, Naxçıvan, Gəncə, Şamaxı, Lənkəran, Zaqatala, Quba, Qəbələ, Gədəbəy, Mingəçevir və digər şəhərlərə çatdırırıq. Siz ödənişi kitabı aldıqdan sonra edirsiniz.', '2022-04-24 04:54:06', '2022-04-24 04:54:06');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `newsletter_subscribe`
--

CREATE TABLE `newsletter_subscribe` (
  `id` int(11) UNSIGNED NOT NULL,
  `subscribe_email` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `url` varchar(500) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `title`, `url`, `img`, `status`, `created_at`, `updated_at`) VALUES
(1, '3docean', 'https://3docean.net/', 'uploads/partners/3docean.jpg', '1', '2022-02-19 04:45:04', '2022-02-19 04:45:04'),
(4, 'Kitab', 'https://kitab.com/', 'uploads/partners/kitab.jpg', '1', '2022-02-20 01:39:39', '2022-02-20 02:17:59');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) UNSIGNED NOT NULL,
  `books_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `review` longtext NOT NULL,
  `rating` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `books_id`, `name`, `review`, `rating`, `created_at`, `updated_at`) VALUES
(4, 7, 'Ağabala Quluzadə', 'Çox bəyəndim məlumatlandırıcı kitabdı.', 5, '2022-04-25 22:48:11', '2022-04-25 22:48:11'),
(5, 7, 'Ağabala', 'Gözəl kitabdı', 5, '2022-04-25 21:48:19', '2022-04-25 21:48:19');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'bu saytın adminidir', '2022-05-03 23:36:09', '2022-05-03 23:36:09'),
(2, 'user', 'bu istifadəçidir', '2022-05-03 22:28:56', '2022-05-03 22:28:56');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `user_id`, `role_id`) VALUES
(1, 1, 1),
(2, 2, 2),
(5, 8, 2);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) UNSIGNED NOT NULL,
  `seo_title` varchar(255) DEFAULT NULL,
  `seo_description` varchar(255) DEFAULT NULL,
  `seo_keywords` text DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `favicon` varchar(255) DEFAULT NULL,
  `about_us` longtext NOT NULL,
  `contact_address` varchar(255) DEFAULT NULL,
  `map_name` varchar(255) NOT NULL,
  `contact_email` varchar(255) DEFAULT NULL,
  `contact_phone` varchar(25) DEFAULT NULL,
  `social_instagram` varchar(255) DEFAULT NULL,
  `social_facebook` varchar(255) DEFAULT NULL,
  `social_twitter` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `seo_title`, `seo_description`, `seo_keywords`, `logo`, `favicon`, `about_us`, `contact_address`, `map_name`, `contact_email`, `contact_phone`, `social_instagram`, `social_facebook`, `social_twitter`) VALUES
(1, 'Book Home Store', 'Book Home Kitab Satışı və Çatdırılması', 'Book Home, kitab, satış, kitab satışı, kitablar', 'uploads/logo/logo.png', 'uploads/logo/favicon.png', '<p><strong>Missiyamız</strong></p>\r\n<p>&bull; Azərbaycan oxucusunu m&uuml;asir d&uuml;nya ədəbiyyatının ən yaxşı n&uuml;munələri ilə tanış etmək;</p>\r\n<p>&bull; &Ouml;tən əsrin sonlarında ke&ccedil;miş SSRİ-nin ən &ccedil;ox m&uuml;taliə edən respublikalarından sayılan indiki m&uuml;stəqil Azərbaycanın vətəndaşlarında yenidən k&uuml;tləvi oxu vərdişlərini bərpa və daha da inkişaf etdirmək, onların ən m&uuml;xtəlif sahələrə aid maraqlı və dəyərli kitablara olan tələbatının &ouml;dənilməsində fəal iştirak etmək;</p>\r\n<p>&bull; Azərbaycan Respublikasının d&uuml;nyada daha yaxından tanıdılmasında m&uuml;h&uuml;m rol oynaya biləcək m&uuml;xtəlif &ccedil;eşidli kitabların nəşrini təmin etmək və bu nəşrləri yaymaq;</p>\r\n<p>&bull; &Uuml;mummilli lider Heydər Əliyevin Azərbaycan dilinin kiril qrafikasından latın qrafikasına ke&ccedil;irilməsi barədəki tapşırığı əks etdirən bəndin də yer aldığı \"D&ouml;vlət dilinin tətbiqi işinin təkmilləşdirilməsi haqqında\" 18 iyun, 2001-ci il tarixli fərmanından, Azərbaycan Respublikasının Prezidenti cənab İlham Əliyevin \"Azərbaycan dilində latın qrafikası ilə k&uuml;tləvi nəşrlərin həyata ke&ccedil;irilməsi haqqında\" 12 yanvar, 2004-c&uuml; il tarixli və \"D&uuml;nya ədəbiyyatının g&ouml;rkəmli n&uuml;mayəndələrinin əsərlərinin Azərbaycan dilində nəşr edilməsi haqqında\" 24 avqust, 2007-ci il tarixli sərəncamlarından irəli gələn vəzifələrin həyata ke&ccedil;irilməsinə bir nəşriyyat olaraq &ouml;z t&ouml;hfəmizi vermək;</p>\r\n<p>&bull; D&uuml;nyanın m&uuml;xtəlif &ouml;lkələrində yaşayan soydaşlarımızı Azərbaycan ədəbiyyatının m&uuml;xtəlif səpkili n&uuml;munələri, klassik və m&uuml;asir yazı&ccedil;ılarımızın əsərlərinin ən yaxşı &ouml;rnəkləri ilə təmin etmək;</p>\r\n<p>&bull; Azərbaycan vətəndaşlarını, x&uuml;susilə də gənc nəsli, gənc elm və iş adamlarını m&uuml;asir d&uuml;nyanın inkişaf tendensiyalarının nəbzini tutan, yeni texnika və texnologiyalardan bəhs edən, m&uuml;asir biznesin inkişaf istiqamətlərini elmi şəkildə şərh edən elmi-k&uuml;tləvi, habelə bədii-fantastik, əyləncəli, maarif&ccedil;i ədəbiyyatla, m&uuml;asir dərslik və tədris vəsaitləri ilə təmin etmək.</p>', 'Yuptechnology', 'Yuptechnology', 'agabala.oyunda@gmail.com', '0504946684', 'https://www.instagram.com/quluzade_agabala/', 'https://www.facebook.com/profile.php?id=100008415033478', 'https://twitter.com/home');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'https://register.pravasikerala.org/public/images/avatar5.png',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `img`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'uploads/users/agabala-quluzade.jpg', 'Ağabala Quluzadə', 'agabala.oyunda@gmail.com', NULL, '$2y$10$cPGszbMKJW.pmeaMh82NLuv99aiiLayGWwS/zKBirMkLEntLuE7pq', NULL, '2022-05-03 10:47:46', '2022-05-03 20:32:27'),
(2, 'https://register.pravasikerala.org/public/images/avatar5.png', 'Aysun', 'aysun@gmail.com', NULL, '$2y$10$lQMNiFg.UtULbLIynzmYoudYPuTeb3P6FV1a.o1I1qQqYOvWGc3Ou', NULL, '2022-05-03 20:27:13', '2022-05-03 20:27:13'),
(8, 'https://register.pravasikerala.org/public/images/avatar5.png', 'Aysel', 'aysel@gmail.com', NULL, '$2y$10$9slm2qk6Y7KU/iMNtFs97unO0OFtyKBHH8mFmO5kBhFXmrtHOflqG', NULL, '2022-05-04 08:23:24', '2022-05-04 08:23:24');

-- --------------------------------------------------------

--
-- Table structure for table `writers`
--

CREATE TABLE `writers` (
  `id` int(11) UNSIGNED NOT NULL,
  `writer_name` varchar(255) NOT NULL,
  `writer_img` varchar(255) DEFAULT NULL,
  `writer_about` text DEFAULT NULL,
  `writer_status` enum('0','1') NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `writers`
--

INSERT INTO `writers` (`id`, `writer_name`, `writer_img`, `writer_about`, `writer_status`, `created_at`, `updated_at`) VALUES
(5, 'Artur Konan Doyl', 'uploads/writers/artur-konan-doyl.jpg', 'Ser Artur Konan Doyl (ing. Sir Arthur Ignatius Conan Doyle; 22 may 1859 – 7 iyul 1930) — Şotlandiyada doğulmuş ingilis yazıçı, Şerlok Holms və professor Çellencer kimi obrazların yaradıcısı.', '0', '2022-04-17 00:39:06', '2022-04-17 00:39:06'),
(6, 'Fridrix Nitsşe', 'uploads/writers/fridrix-nitsse.jpg', 'Fridrix Vilhelm Nitsşe (alm. Friedrich Nietzsche‎; 15 oktyabr 1844 – 25 avqust 1900, Veymar) — alman filosofu və klassik filoloq. Tarixdə 100 ən çox öyrənilmiş şəxsiyyətlər siyahısına daxil ediliib.Fridrix Nitsşe Almaniyanın keçmiş Prussiya, indiki Saksoniya əyalətinin Lützen şəhəri yaxınlığındakı Röcken kəndində anadan olmuşdur. Atası Karl Lüdviq Nitsşe, Lüteran kilsəsinin keşişi (1813-1849), anası isə Franziska Nitsşe (1826-1897)idi. Hər iki valideyni protestant ailəsindən idilər. Prussiya kralı IV Fridrix Vilhelmin anadan olmasının 49-cü ildönümüylə əlaqədar Nitsşeyə onun adını vermişlər. Bacısı Elizabet 1846-cı ildə, qardaşı Lüdviq İosif isə 1848-ci ildə doğulmuşdur.1849-ci ildə atasının və 1850-ci ildə qardaşının ölümünden sonra ailəsiylə birlikdə Hamburq şəhərinə köçür və orada 1856-cı ilədək yaşayır. Yeniyetmə Nitsşe getdiyi ilk ibtidai məktəbdə özünü təcrid olunmuş hiss etdiyindən özəl bir məktəbə oxumağa göndərilir. 1854-ci ildə Hamburqdakı Dom qimnaziyasına daxil olduqdan sonra onun musiqi və ədəbiyyata meyilli olduğu üzə çıxır. 1858-1864-ci illərdə Şulpforta internat məktəbində oxumağa başlayır. Çalışqan bir şagird olur, antik ədəbiyyatlla maraqlanır, şeir yazır və musiqi bəstələyir. Atasız böyüyən bir yeniyetmə üçün yaşlı şair Ernst Ottlepp (1800-1864) bir ata kimi onun şəxsiyyətinin formalaşmasına böyük təsir göstərir.1864-1865-ci illərdə Bonn universitetinin klassik filologiya və evangelik teologiya fakültəsinə daxil olur, lakin Gənc Hegelçilərin əsərlərini oxuduqdan sonra oranı tərk edir və 1865-1866-ci illərdə filologiya üzrə Leypsiq universitetinə daxil olur. Bu dəfə o, gənc Hegelçilərdən uzaq duran Artur Şopenhaur və Fridrix Albert Langenin əsərləriylə tanış olur.\r\n\r\n1867-ci ildə bir illik könüllü olaraq Prussiya ordusunda xidmət etməyə gedir. Lakin 1868-ci ilin mart ayında at çaparkən atdan düşərək ağır zərbə alır və ordudan kənarlaşdırılır. Geri qayıddıqdan sonra təhsilini davam etdirir. 1868-ci ildə Rixard Vaqnerlə ilk tanışlığı Nitsşenin həyatında önəmli hadisələrdən bir sayılır.\r\n\r\n1879-da, könüllü olaraq qatıldığı 1870-ci ildə alman-fransız döyüşündə keçirdiyi xəstəliklərin xeyli artmasıyla, universitetdəki vəzifəsindən təqaüdə çıxaraq, sağlamlığını qoruya biləcəyi bir yer axtarışı içində, qışları İtaliya sahillərində, yayları İsveçrə dağlarında yaşayaraq, özünü tamamilə yazılarına verdi. 1883-cü ildə, bir il əvvəl tanış olduğu Rus əsilli qadın şair Lu Salomenin də verdiyi ucalma duyğusuyla, Belə Buyurdu Zərdüştün ilk kitabını yazdı. Bundan sonra 1885-ə qədər, ikinci, üçüncü və dördüncü kitablar ilə, Zərdüştün məzmununa nəsr olaraq yaxınlaşan Yaxşı və Pisin ardında (1885) və Əxlaqın Şəcərəsi (1887) kitabları yayımlandı.\r\n\r\n\"Zərdüşt\" sonrası dövründə, müxtəlif zamanlarda müxtəlif başlıqlar hazırlayaraq, bir Böyük Əsər yazmağa girişən Nitsşe, son məhsuldar ili olan 1888-ci ildə, ardıcıl olaraq Vagner Hadisəsi, Bütlərin Qürubu, Dəccal, Ecce Homo və Dionis Difiramosları adlı kitablarını yazdı. 1889-cu ilin ilk günlərində, Turin şəhərində küçədə qırmanclanan bir südçü atının boyuna sarılıb ağlamaya başlayan mütəfəkkir, şagirdlik illərində yoluxduğu sifilis mikrobunun nəticəsi olduğu təxmin edilən dəliliyə düçar oldu. 1900-cü ilə qədər mənəvi qaranlıq içində bitki mənşəli deyilə biləcək həyatını davam etdirən Nitsşe, özündən sonrakı əsrdə təsirləri ən məşhur olacaq düşüncə məhsullarını geridə buraxaraq 25 avqustda həyatdan köçdü…', '0', '2022-04-18 02:50:22', '2022-04-18 02:50:22'),
(7, 'Bertrand Russell', 'uploads/writers/bertrand-russell.jpg', 'Bertran Artur Vilyam Rassel (ing. Bertrand Arthur William Russell, 3rd Earl Russell; 18 may 1872 – 2 fevral 1970) — ingilis riyaziyyatçı, filosof və ictimai xadim, \"məntiqi atomizm\" konsepsiyasının, \"deskripsiya nəzəriyyəsi\"nin yaradıcısı, Alimlərin Paquoş Hərəkatının yaradılmasının təşəbbüskarlarından biri, \"Rassel-Eynşteyn Manifesti\"nin həmmüəllifi, \"Sülh Fondu\"nun qurucusu (1963), Ədəbiyyat üzrə Nobel mükafatı laureatı (1950).İngilis filosofu, məntiqşünas, riyaziyyatçı və ictimai-siyasi xadim Bertran Artur Uilyam Rasseli tam əsasla ensiklopedist adlandırmaq mümkündür. O, Britaniyanın siyasi həyatında XVI əsrdən fəal iştirak edən Rassel nəslindən idi. Nəslin görkəmli nümayəndələrindən biri, Bertranın babası lord Con Rassel 1832-ci ildə kraliça I Viktoriyanın hakimiyyəti dövründə baş nazir vəzifəsini tutmuşdu. İki yaşında anasını, dörd yaşında isə atasını və körpə bacısını itirən Bertran nənəsi, qrafinya Rasselin himayəsində böyümüşdü. Onun və böyük qardaşının təlim-tərbiyəsi ilə alman, İsveçrə quvernantları, eləcə də ingilis müəllimlər məşğul olurdular.\r\n\r\nBertran 1890-cı ildə Kembric Universiteti yanındakı Triniti Kollecdə təhsilə başlamış, 1894-cü ildə incəsənət bakalavrı dərəcəsi almışdı. Elmin müxtəlif sahələrini öyrənsə də, maraq dairəsinə əsasən riyaziyyat və fəlsəfə daxil idi. 1897-ci ildə o, \"Həndəsənin əsasları\" mövzusunda magistr dissertasiyası müdafiə etmişdi. Yeniyetməlik və ilk gənclik illərində Bertran Rassel tənhalıqdan əziyyət çəkmiş, hətta bu səbəbdən bir neçə dəfə intihar fikrinə düşmüşdü. Etirafına görə yalnız riyaziyyata marağı və üzərində işlədiyi riyazi məsələlərin həllini sona çatdırmaq istəyi onu bu qaramsar niyyətindən çəkindirmişdi.\r\n\r\nBritaniya səfirliyinin fəxri attaşesi kimi 1895-ci ildən Parisdə yaşayan Rassel iqtisadiyyatla bağlı tədqiqatlar aparmaq məqsədi ilə bir müddət Almaniya və ABŞ-da da olmuşdu. \"Alman sosial demokratiyası\" (1896) və \"Leybnis fəlsəfəsinin tənqidi şərhi\" (1900) kitablarının yazılmasında bu səfərlər mühüm rol oynamışdı. 1910-1913-cü illərdə Bertran Rassel Triniti-kollecin professoru N.Uaythedlə birlikdə \"Riyaziyyatın əsasları\" adlı 3 cildlik fundamental tədqiqat çap etdirmişdi. Bu dövrdə alim həm də ictimai-siyasi fəaliyyətlə məşğul olurdu. O, İngiltərədə sosializm ideyalarını yayan Fabian cəmiyyətinin üzvü idi. Qadınlara seçki hüququ verilməsi ilə bağlı keçirilən tədbirlərdə fəal iştirak edirdi. Parlament seçkilərinə qatılsa da, dini baxışlarına görə lazımi miqdarda səs toplaya bilməmişdi.', '0', '2022-04-18 03:13:10', '2022-04-18 03:13:10'),
(8, 'Mark Avreli', 'uploads/writers/mark-avreli.jpg', 'Mark Avreli, Markus Avrelius (lat. Marcus Aurelius Antoninus, 26 aprel 121 – 17 mart 180) — Roma imperatoru (161–180), stoaçı filosof. İlk vaxtlar imperiyanı Lutsi Verlə birgə idarə etmişdir. Parfiyalılar (162–166), german və sarmatlarla (166–180, Markoman müharibəsində) hərblər aparmışdır. Stoisizmin ardıcıllarından olan Mark Avreli fəlsəfədə (\"Özü ilə təklikdə\" əsəri) əxlaqi kamilliyi təbliğ etmiş, siyasi quruluşu təkmilləşdirməyin qeyri-mümkünlüyü ideyasını irəli sürmüşdür.\r\n139-cu ildə atası vəfat etdikdən sonra imperator Antonin Piy tərəfindən oğulluğa götürüldükdən sonra Mark Avreli Ver Sezar adlandırılmağa başlanmışdır. Gözəl təhsilə yiyələnmiş Avreli fəlsəfəyə və təsviri sənətə böyük maraq göstərmişdir. Dioqnetin, şagirdi olan Avreli fəlsəvi görüşlərinə görə məhz quru taxt üzərində yatar və üstünü heyvan dərisi ilə örtərmiş. Bacarığına görə gənc olmasına baxmayaraq Hadrianın vəfatından yarım il sonra 5 dekabr 138 ci ildə kvestor vəzifəsinə irəli çəkilərək karyerasına inzibati idarəçiliklə başlamışdır. Elə həmin il Antonin Piyin qızı ilə nişanlandıqdan sonra tax-taca varislik əldə edir. 140 ci ildə konsul və sezar elan edilir. 146 cı ildə Antonin Piy Mark Avreliyə konsul kimi dövləti idarə etmək hüquq verir. 1 yanvar 161 ci ildə qardaşlığı Lutsi Ver ilə birlikdə üçüncu dəfə konsul kimi dövləti idarə edir. 169-cu ildən Lutsi Verin ölümündən sonra dövləti təkbaşına idarə edir.', '0', '2022-04-18 03:20:30', '2022-04-18 03:20:30'),
(9, 'Qaraqan', 'uploads/writers/qaraqan.jpg', 'Elxan Aqşin oğlu Zeynallı (3 aprel 1987, Bakı) — azərbaycanlı repçi, musiqiçi, yazıçı, jurnalist, Azərbaycan Yazıçılar Birliyinin üzvü, Milli Kitab mükafatı müsabiqəsinin ilk qalibi.\r\nHal-hazırda, 10 romanın (9 Azərbaycan,1 Rus dillində) və 4 albomun müəllifidir. Elxan Zeynallı orta təhsilini Bakı Türk Liseyində alıb.\r\nPeşəkar karyerasına 2005-ci ildə Baku Klan qrupunda başlayıb, 2007-ci ildə yaranan H.O.S.T. qrupunun solistidir. Qrup üzvləri 2012-ci ildən etibarən solo ifa etsələrdə, Qaraqan yoluna Madhouse Communnity-də davam edib.[3]\r\n\r\n2007-ci ilin sonlarından yazıçılıq fəaliyyətinə başlayıb. 10 romanın (9 Azərbaycan, 1 Rus dilli) və maraqlı hekayələrin müəllifidir. Əsərlərində ədalət hissi təbliğ olunur. 2007-ci ildə AYB-nin ən gənc üzvü seçilir. 2007-ci ildə \"A\" romanı Azərbaycanda bestsellerə çevrilir. 2008-ci ildə bir müddət Amerikada yaşayır. 2008-ci ildə Azərbaycan səviyyəsində \"İlin Gənci\" adına layiq görülür. 2009-cu ildə Prezident təqaüdü ilə təltif olunur. 2009-cu ildə \"Bir milyon dollarım olsaydı\" romanı ən çox satılan kitab olur. 2010-cu ildə hərbi xidmətdə olur. Rus dilində yazdığı \"Исповедь Одного Извpaщeнцa\" romanı rus dilli kütlə üçün nəzərdə tutulur. 2011-ci ildə \"Qısa qapanma\" adlı solo konserti baş tutur. 2011-ci ildə \"Uşaq yardım\" kampaniyasında iştirak edir və \"Bir\" trekinə klip çəkilir. 2012-ci ildə \"Dəniz vağzalı\"nda \"Beşikdən Məzara\" adlı konserti keçirilir. 2012-ci ildə Ankara və İstanbul konsertləri baş tutur. 2012-ci ildə \"A\" romanı ABŞ-da çap olan ilk azərbaycanlı yazıçıların kitabı olur. 2012-ci ildə fantastik-dram-faciə üslubunda yazılan \"Mələk\" romanı MDB ölkələrində bestsellerə çevrilir. 2013-cü ildə \"Коpоткое Зaмыкaние\" adı altında Moskva konserti baş tutur. 2013-сü ildə \"Evakuasiya\" adlı romanı maraqla qarşılanır. 2013-cü ilin noyabr ayında trilogiyanın birinci hissəsi \"Birinci addım: Beş anonim milyonçu\" təqdim edilir.. 2014-cü ilin Dekabr ayının 27-sində yazıçının \"Üç addım\" trilogiyasının \"İkinci addım\"ı çapdan çıxır. Elə həmin gün oxucuları ilə BMM-də görüşən yazıçı kitabını təqdim edir və kitabdakı mövzularla bağlı seminar keçir. Görüşdə iştirak edən 250 nəfər oxucuya imzalı kitab verilir. 2016-cı ildə isə \"Üçüncü addım\" kitabını çapdan çıxardan yazıçı trilogiyanı başa vurur. 2019-cu il aprel ayının 3 də \"Art və Xaos\" kitabı oxuculara təqdim etdi.', '0', '2022-04-18 03:28:26', '2022-04-18 03:28:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carousel_banner`
--
ALTER TABLE `carousel_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `feature_section`
--
ALTER TABLE `feature_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_question`
--
ALTER TABLE `general_question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter_subscribe`
--
ALTER TABLE `newsletter_subscribe`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subscribe_email` (`subscribe_email`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `writers`
--
ALTER TABLE `writers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `carousel_banner`
--
ALTER TABLE `carousel_banner`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feature_section`
--
ALTER TABLE `feature_section`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `general_question`
--
ALTER TABLE `general_question`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `newsletter_subscribe`
--
ALTER TABLE `newsletter_subscribe`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `writers`
--
ALTER TABLE `writers`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
