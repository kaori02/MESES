-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2021 at 10:10 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `meses`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `forums`
--

CREATE TABLE `forums` (
  `id_forum` bigint(20) UNSIGNED NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `kelas_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategori_soal`
--

CREATE TABLE `kategori_soal` (
  `id_kategori` bigint(20) UNSIGNED NOT NULL,
  `nama_kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori_soal`
--

INSERT INTO `kategori_soal` (`id_kategori`, `nama_kategori`, `created_at`, `updated_at`) VALUES
(1, 'Saraf', NULL, NULL),
(2, 'Psikiatri', NULL, NULL),
(3, 'THT', NULL, NULL),
(4, 'Mata', NULL, NULL),
(5, 'Respirasi', NULL, NULL),
(6, 'Kardiologi', NULL, NULL),
(7, 'Gastrohepato', NULL, NULL),
(8, 'Ginjal', NULL, NULL),
(9, 'Reproduksi', NULL, NULL),
(10, 'Endokrin', NULL, NULL),
(11, 'Hematoimuno', NULL, NULL),
(12, 'Muskuloskeletal', NULL, NULL),
(13, 'Integumentum', NULL, NULL),
(14, 'Sistem Kesehatan', NULL, NULL),
(15, 'Metodologi', NULL, NULL),
(16, 'Etika', NULL, NULL),
(17, 'Forensik', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abstraksi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagesdesc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `funfact` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `kesimpulan1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kesimpulan2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `faq1` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `ans1` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `faq2` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `ans2` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `judul`, `abstraksi`, `body`, `link`, `images`, `imagesdesc`, `funfact`, `kesimpulan1`, `kesimpulan2`, `faq1`, `ans1`, `faq2`, `ans2`, `created_at`, `updated_at`) VALUES
(1, 'Saraf', 'Gangguan Fungsi Luhur', '    \r\nFungsi luhur dapat diterjemahkan sebagai behavioral neurology yang mengacu pada gangguan behavior atau perilaku yang berdasarkan fungsi neurologis.\r\nIlmu saraf menekankan bahwa lokalisasi khusus pada otak yang mengalami kelainan struktural dikaitkan dengan gangguan behavior yang unik \r\nKorelasi antara kerusakan struktural yang fokal dengan kelainan behavior secara klinis merupakan inti subspesialisasi yang disebut the neurology of behavior\r\n<br><br>\r\n    \r\nObservasi perilaku yang cermat dapat menentukan lokalisasi lesi dengan menggunakan pendekatan yang sama seperti neurologi klasikal yang menilai pola abnormal motorik, sensorik, dan refleks untuk membuat kesimpulan tentang letak lesi penyebabnya\r\n<br><br>\r\n    \r\nDibuat dan di dasarkan pada kenyataan bahwa tidak ada gangguan fungsi luhur yang tunggal, tetapi lebih sering dalam bentuk kelompok gangguan\r\n<br><br>\r\n\r\nKategori gangguan utama tersebut adalah sebagai berikut: \r\n<li>Status konfus akut</li>\r\n<li>Demensia</li>\r\n<li>Sindrom otak fokal (Mencakup sindrom afasia, apraksia, agnosia, amnesia dan sindrom lobus)</li>\r\n<li>Demensia</li>\r\n<br><br>\r\n\r\nPendekatan evaluasi dilandaskan pada individual comparison standards yang menilai kemampuan tiap individu\r\n<br><br>\r\n\r\nTujuan\r\n<li>Untuk membantu menetapkan lokalisasi lesi</li>\r\n<li>Membuat program rehabilitasi</li>\r\n<li>Penelitian</li>\r\n<br><br>\r\n\r\nDasar Persekutuan Evaluasi\r\n<li>Longitudinal yang mencakup sindrom lobus</li>\r\n<li>Lateral yang mencakup sindrom hemisfer kiri dan kanan</li>\r\n<br><br>\r\n\r\nPemeriksaan status mental menggunakan elemen prinsip berikut ini :\r\n<li>Attention</li>\r\n<li>Languange</li>\r\n<li>Memory</li>\r\n<li>Visuospatial skills</li>\r\n<li>Executive Function</li>\r\n<br><br>\r\n    \r\nAtensi dapat ditetapkan melalui tes rentang digit / mengulang beberapa digit yang disebutkan. Konsentrasi dapat dievaluasi dengan test performans seperti “A”test. Kontrol mental dapat ditetapkan dengan rentang digit terbalik, mengeja terbalik atau urutan terbalik nama bulan dalam setahun. Penyakit yang dapat menimbulkan gangguan atensi antara lain\r\n<li>Delirium</li>\r\n<li>Meningitis Kronis</li>\r\n<li>Peningkatan tekanan intracranial</li>\r\n<li>Lesi lobus parietal</li>\r\n<li>Lesi lobus oksipital bilateral</li>', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/jqMEOu_PFL4\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'a_1609258742.PNG', '<li>Memori deklaratif mencakup memori tentang kejadian dan fakta</li>\r\n<li>Memori procedural mencakup memori untuk keterampilan</li>\r\n<li>Memori episodic adalah memori untuk kejadian personal yang khusus sedangkan somatic adalah memoru untuk fakta, prinsip dan aturan yang mewakili kemampuan pengetahuan umum</li>', '<b>Sindrom Hemisfer Kiri</b>\r\n<br><br>\r\n<li>Sekitar 500.000 penduduk amerika mengalami stroke tiap tahun\r\n25 - 40% yang hidup, mengalami gangguan dalam kemampuan bicara, membaca, menulis atau memahami pembicaraan</li>\r\n<li>21 – 24% pasien stroke mengalami afasia dan 10 – 18% di antaranya mengalami deficit komunikasi yang signifikan</li>\r\n<li>\r\nAda tiga gangguan komunikasi utama yang terkait dengan stroke yaitu\r\n<li>Afasia</li>\r\n<li>Disartria</li>\r\n<li>Apraksia</li>\r\n</li>', '<b>Pemeriksaan</b> dapat dilakukan dengan 5 cara: Attention, Languange, Memory, Visuospatial skills, Executive Function', '<b>Korelasi</b> antara kerusakan struktural yang fokal dengan kelainan behavior secara klinis merupakan inti subspesialisasi yang disebut the neurology of behavior', 'Disorientasi apa saja yang kemungkinan terjadi', 'Demensia konfus, sindrom amnesia, delusi dan defisiensi mental.  Terutama yang mengenai waktu 🡪 Pukul berapa, hari apa, tahun berapa.', 'Apa itu Defisit Memori ?', 'Paling banyak terjadi dan paling gawat pada penderita pasca cedera kepala\r\nKemampuan daya ingat menurun ini seringkali tidak dikeluhkan oleh yang bersangkutan, bahkan pada keadaan yang menahun akan berubah wujud menjadi gejala konfabulasi yang dapat mengganggu kemampuan sosialisasi\r\nDapat berupa: \r\nDefisit memori global, \r\nDefisit memori spesifik verbal, dan\r\nDefisit memori spesifik visuospasial', NULL, '2020-12-29 09:46:14'),
(2, 'Psikiatri', 'Ini Abstraksi Blok 2', 'Contoh isi\r\n<br>\r\nBody Blok 2', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/FOFZfxaT9PY\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Screenshot (511)_1609182125.png', 'Deskripsi Foto', 'Funfact adalah tempat menaruh fakta unik', '<b>kesimpulan</b> pertama', '<b>kesimpulan</b> kedua', 'Pertanyaan 1', 'Jawaban 1', 'Pertanyaan 2', 'Jawaban 2', NULL, '2020-12-29 09:47:00'),
(3, 'THT', 'Ini Abstraksi Blok 3', 'Contoh isi\r\n<br>\r\nBody Blok 3', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/FOFZfxaT9PY\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'noimage.png', 'Deskripsi Foto', 'Funfact adalah tempat menaruh fakta unik', '<b>kesimpulan</b> pertama', '<b>kesimpulan</b> kedua', 'Pertanyaan 1', 'Jawaban 1', 'Pertanyaan 2', 'Jawaban 2', NULL, NULL),
(4, 'Mata', 'Ini Abstraksi Blok 4', 'Contoh isi\r\n<br>\r\nBody Blok 4', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/FOFZfxaT9PY\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'noimage.png', 'Deskripsi Foto', 'Funfact adalah tempat menaruh fakta unik', '<b>kesimpulan</b> pertama', '<b>kesimpulan</b> kedua', 'Pertanyaan 1', 'Jawaban 1', 'Pertanyaan 2', 'Jawaban 2', NULL, NULL),
(5, 'Respirasi', 'Ini Abstraksi Blok 5', 'Contoh isi <br> Body Blok 5', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/FOFZfxaT9PY\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'noimage.png', 'Deskripsi Foto', 'Funfact adalah tempat menaruh fakta unik', '<b>kesimpulan</b> pertama', '<b>kesimpulan</b> kedua', 'Pertanyaan 1', 'Jawaban 1', 'Pertanyaan 2', 'Jawaban 2', NULL, NULL),
(6, 'Kardiologi', 'Ini Abstraksi Blok 6', 'Contoh isi &nbsp; Body Blok 6', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/FOFZfxaT9PY\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'noimage.png', 'Deskripsi Foto', 'Funfact adalah tempat menaruh fakta unik', '<b>kesimpulan</b> pertama', '<b>kesimpulan</b> kedua', 'Pertanyaan 1', 'Jawaban 1', 'Pertanyaan 2', 'Jawaban 2', NULL, NULL),
(7, 'Gastrohepato', 'Ini Abstraksi Blok 7', 'A<br><br>Hi<br><br>tes', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/FOFZfxaT9PY\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'noimage.png', 'Deskripsi Foto', 'Funfact adalah tempat menaruh fakta unik', '<b>kesimpulan</b> pertama', '<b>kesimpulan</b> kedua', 'Pertanyaan 1', 'Jawaban 1', 'Pertanyaan 2', 'Jawaban 2', NULL, NULL),
(8, 'Ginjal', 'Ini Abstraksi Blok 8', 'Contoh isi <br> Body Blok 8', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/FOFZfxaT9PY\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'noimage.png', 'Deskripsi Foto', 'Funfact adalah tempat menaruh fakta unik', '<b>kesimpulan</b> pertama', '<b>kesimpulan</b> kedua', 'Pertanyaan 1', 'Jawaban 1', 'Pertanyaan 2', 'Jawaban 2', NULL, NULL),
(9, 'Reproduksi', 'Ini Abstraksi Blok 9', 'Contoh isi <br> Body Blok 9', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/FOFZfxaT9PY\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'noimage.png', 'Deskripsi Foto', 'Funfact adalah tempat menaruh fakta unik', '<b>kesimpulan</b> pertama', '<b>kesimpulan</b> kedua', 'Pertanyaan 1', 'Jawaban 1', 'Pertanyaan 2', 'Jawaban 2', NULL, NULL),
(10, 'Endokrin', 'Ini Abstraksi Blok 10', 'Contoh isi <br> Body Blok 10', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/FOFZfxaT9PY\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'noimage.png', 'Deskripsi Foto', 'Funfact adalah tempat menaruh fakta unik', '<b>kesimpulan</b> pertama', '<b>kesimpulan</b> kedua', 'Pertanyaan 1', 'Jawaban 1', 'Pertanyaan 2', 'Jawaban 2', NULL, NULL),
(11, 'Hematoimuno', 'Ini Abstraksi Blok 11', 'Contoh isi <br> Body Blok 11', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/FOFZfxaT9PY\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'noimage.png', 'Deskripsi Foto', 'Funfact adalah tempat menaruh fakta unik', '<b>kesimpulan</b> pertama', '<b>kesimpulan</b> kedua', 'Pertanyaan 1', 'Jawaban 1', 'Pertanyaan 2', 'Jawaban 2', NULL, NULL),
(12, 'Muskuloskeletal', 'Ini Abstraksi Blok 12', 'Contoh isi <br> Body Blok 12', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/FOFZfxaT9PY\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'noimage.png', 'Deskripsi Foto', 'Funfact adalah tempat menaruh fakta unik', '<b>kesimpulan</b> pertama', '<b>kesimpulan</b> kedua', 'Pertanyaan 1', 'Jawaban 1', 'Pertanyaan 2', 'Jawaban 2', NULL, NULL);

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
(4, '2020_12_15_054803_create_kelas_table', 1),
(5, '2020_12_15_054909_create_videos_table', 1),
(6, '2020_12_15_073711_create_kategori_soal_table', 1),
(7, '2020_12_15_073818_create_soals_table', 1),
(8, '2020_12_15_083503_create_forums_table', 1),
(9, '2020_12_26_191849_add_role_to_users_table', 2),
(10, '2020_12_27_222739_add_cover_image_to_kategori_soal', 3),
(11, '2020_12_28_193708_create_pembayarans_table', 4),
(12, '2020_12_28_194743_add_issubscriber_to_users_table', 4),
(13, '2020_12_30_062910_add_is_show_ans_to_soals_table', 5),
(14, '2021_01_03_185029_add_image_to_users_table', 6),
(15, '2021_01_03_185504_create_subscriptions_table', 7);

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
-- Table structure for table `pembayarans`
--

CREATE TABLE `pembayarans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bank` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `norek` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pemilikrek` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgltransfer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `berita` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `caratransfer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pembayarans`
--

INSERT INTO `pembayarans` (`id`, `bank`, `norek`, `pemilikrek`, `tgltransfer`, `jumlah`, `berita`, `caratransfer`, `created_at`, `updated_at`, `user_id`) VALUES
(2, '0', 'Aulia IhzaK', 'Aulia IhzaK', '2020-12-02', 'Aulia IhzaK', 'Aulia IhzaK', '2', '2020-12-28 14:07:56', '2020-12-28 14:07:56', 4),
(3, '0', 'Aulia IhzaKo', 'Aulia IhzaK', '2020-12-02', 'Aulia IhzaK', 'Aulia IhzaK', '2', '2020-12-28 14:08:36', '2020-12-28 14:08:36', 4),
(4, '0', 'Aulia IhzaK', 'Aulia IhzaK', '2020-12-04', '0', 'penis', '0', '2020-12-29 10:51:58', '2020-12-29 10:51:58', 1),
(5, 'BCA', 'Aulia IhzaK', 'Aulia IhzaK', '2020-12-02', 'Rp 1.000.000', 'aaa', 'Setor Tunai', '2020-12-29 10:57:38', '2020-12-29 10:57:38', 1),
(6, 'BCA', '111', 'Aulia IhzaK', '2020-12-04', 'Rp 9.000.000', 'oke', 'Setor Tunai', '2020-12-30 00:19:30', '2020-12-30 00:19:30', 7);

-- --------------------------------------------------------

--
-- Table structure for table `soals`
--

CREATE TABLE `soals` (
  `id_soal` bigint(20) UNSIGNED NOT NULL,
  `cover_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body_soal` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `a` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `b` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `d` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jawaban` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `kategori_id` bigint(20) UNSIGNED NOT NULL,
  `is_show_ans` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `soals`
--

INSERT INTO `soals` (`id_soal`, `cover_image`, `body_soal`, `a`, `b`, `c`, `d`, `jawaban`, `created_at`, `updated_at`, `kategori_id`, `is_show_ans`) VALUES
(1, 'theboi_1609104979.PNG', 'Pertanyaan 1 kasjdbakjsbdkasjbdkjasbdkjasd', 'Opsi 1 Edit', 'Opsi 2 Ediaskdjbas', 'Opsi 3asdasdasd', 'Opsi 4 asdasd', 'KunJawaasdasdasdasd', NULL, '2020-12-27 14:02:52', 5, 'true'),
(6, 'noimage.png', 'psikiatri222', 'jawaban psikiatri222', 'jawaban psikiatri222', 'jawaban psikiatri222', 'jawaban psikiatri222', 'jawaban psikiatri222', '2020-12-28 12:02:05', '2020-12-28 12:02:05', 2, 'true'),
(7, 'theboi_1609104979.PNG', '11111111111111', 'aaaa', 'vvvvv', 'cccc', 'dddd', 'b', '2020-12-27 13:36:38', '2020-12-27 13:36:38', 2, 'true'),
(13, 'noimage.png', 'Pasien usia 60 tahun datang diantar keluarganya dengan keluhan lemah anggota gerak sebelah kanan. Keluhan dirasakan sejak tadi pagi. Ada gangguan berbicara dan menelan. Pasien mengeluhkan nyeri kepala. TD 180/100. N 90. RR 24. Diagnosis yang tepat adalah:', 'Stroke non hemoragik', 'Perdarahan intracranial', 'SGB', 'Myastenia gravis', 'B', NULL, '2021-01-03 14:09:25', 1, 'true'),
(15, 'noimage.png', 'Pasien usia 50an tahun datang dengan keluhan lemah anggota gerak sebelah kanan. Keluhan dirasakan sejak tadi pagi. Tidak ada gangguan menelan, berbicara. Tidak disertai dengan nyeri kepala. TD 140/90, N 90, RR 20. Diagnosis yang tepat adalah:', 'Stroke infark', 'SGB', 'Myastenia Gravis', 'DMP', 'A', NULL, '2021-01-03 14:09:25', 1, 'true'),
(16, 'noimage.png', 'Pasien datang diantar keluarganya dengan keluhan lemah anggota gerak sebelah kanan. Ada riwayat demam 38. Kaku duduk (-). Diagnosisnya:', 'Ensefalitis', 'Meningitis', 'Abses cerebri', 'Stroke', 'A', NULL, '2021-01-03 14:09:25', 1, 'true'),
(17, 'noimage.png', 'Pasien wanita datang dengan nyeri kepala berdenyut sebelah kanan. Nyeri kepala sangat mengganggu bahkan sampai membangunkan saat tidur. Mata pasien juga menjadi berair dan rhinorre. Diagnosisnya adalah:', 'Migrain', 'TTH', 'Nyeri kepala tipe kluster', 'Trigeminal', 'C', NULL, '2021-01-03 14:09:25', 1, 'true'),
(18, 'noimage.png', 'Seorang pasien 31 tahun dengan HIV (+) tanpa penurunan kesadaran dengan demam (+) burzinsky sign (+) kaku duduk (+). Diagnosis yang tepat?', 'Meningoensefalitis toxoplasma', 'Meningoensefalitis TB', 'Ensefalitis TB', 'Ensefalitis virus', 'A', NULL, '2021-01-03 14:09:25', 1, 'true'),
(19, 'noimage.png', 'Pasien datang diantar keluarganya dengan keluhan lemah anggota gerak sebelah kanan. Ada riwayat demam 38. Kaku duduk(-). Diagnosisnya:', 'Ensefalitis', 'Meningitis', 'Abses cerebri', 'Stroke', 'A', NULL, '2021-01-03 14:09:25', 1, 'true'),
(20, 'noimage.png', 'Seorang lelaki datang dengan keluhan nyeri di kedua pelipis. Nyeri seperti ditekan, menjalan hingga belakang kepala dan leher. Keluhan disertai mata kiri seperti tertusuk, berair, dan hidung berair. Diagnosis:', 'Migrain dengan aura', 'Migrain tanpa aura', 'Paroxysmal hemicranial', 'Cluster', 'D', NULL, '2021-01-03 14:09:25', 1, 'true'),
(21, 'noimage.png', 'Seorang wanita datang dengan keluhan kebas pada jari tangan, rasa kebas dirasakan di ibu jari, jari telunjuk dan jari tengah, pasien sering mengendarai sepeda motor, hasil pemeriksaan didapatkan tinnel test (+), phallen test (+), diagnosis:', 'Karpal tunnel syndrome', 'Tarsal tunnel syndrome', 'De Quervain syndrome', 'Guyon syndrome', 'A', NULL, '2021-01-03 14:09:25', 1, 'true'),
(22, 'noimage.png', 'Seorang anak sering terlihat melamun dan pandangan kosong, nilai di sekolah menurun. Keadaan berlangsung beberapa kali dalam sehari selama kurang dari 1 menit tiap kali kejadian, kemudian bias kembali beraktivitas normal setelahnya. Dx?', 'Petit mal', 'Grand mal', 'Kejang tonik', 'Kejang klonik', 'A', NULL, '2021-01-03 14:09:25', 1, 'true'),
(24, 'noimage.png', 'Kasus seseorang cedera kepala, lalu dari gambaran CT Scan keluar gambaran seperti “bulan sabit” cedera apakah itu?', 'Epidural Hematoma', 'Subdural Hematoma', 'Subarachnoid Hematoma', 'Intracerebral Hemorrhage', 'B', NULL, '2021-01-03 14:09:25', 1, 'true'),
(25, 'noimage.png', 'Seorang perempuan berusia 45 tahun mengeluhkan kelemahan pada kedua anggota gerak bagian bawah sejak 2 bulan yang lalu. Pada pemeriksaan fisik, ditemukan reflex patella dan refleks pergelangan kaki meningkat, refleks Babinski +/+, dan terdapat gangguan otonom setinggi pusat.\r\nDimanakah letak lesi pada pasien tersebut?\r\n', 'Medulla spinalis setinggi cervical atas', 'Medulla spinalis setinggi cervical bawah', 'Medulla spinalis setinggi torakalis', 'Medulla spinalis setinggi lumbalis', 'C', NULL, '2021-01-03 14:09:25', 1, 'true'),
(26, 'noimage.png', 'Seorang wanita berusia 28 tahun datang ke puskesmas dengan keluhan sering nyeri kepala sebelah kanan sejak 1 tahun yang lalu. Nyeri kadang-kadang juga dirasakan di kepala sebelah kiri. Sebelum timbul nyeri kepala, mata kanan buram kurang lebih 5 sampai 30 menit. Nyeri kepala disertai mual dan muntah.\r\nApakah diagnosis pada wanita tersebut?\r\n', 'Migraine dengan aura', 'Migraine tanpa aura', 'Cluster headache', 'Tension type headache', 'A', NULL, '2021-01-03 14:09:25', 1, 'true'),
(27, '202010_1609263136.jpg', 'Seorang wanuta berusia 54 tahun datang ke poliklinik dengan keluhan gerakan berulang-ulang seperti bermain piano pada jari – jari tangan dan tangan kiri. Tidak ada riwayat hipertensi.\r\nDimanakah letak kelainan pada pasien tersebut?', 'Putamen', 'Ventrolateral hipotalamus', 'Cortex cerebri', 'Globus pallidum', 'A', NULL, '2021-01-03 14:09:25', 1, 'true'),
(28, 'noimage.png', 'Seorang bayi baru lahir dari ibu G1P0A0 memiliki massa di punggung bawah. Riwayat persalinan dengan SC. Riwayat ANC: ibu tidak pernah melakukan ANC. Kondisi bayi: Menangis kuat, bergerak kurang aktif. Tanda vital masih dalam batas normal. Pada pemeriksaan fisik ditemukan massa pada sakrococcygea dan dilatasi vena pada massa tersebut.\r\nApakah diagnosis pada bayi tersebut?', 'Myelocele', 'Teratoma sacrococcygeal', 'Spina bifida occulta', 'Spida bifida cystica', 'B', NULL, '2021-01-03 14:09:25', 1, 'true'),
(29, 'noimage.png', 'Seorang laki-laki berusia 43 tahun datang ke PKM dengan keluhan nyeri pada pipi kanan. Nyeri dirasakan seperti disetrum. Nyeri bertanbah bila mengunyah. Demam tidak ada. Nyeri terasa hilang timbul setiap hari. Nyeri hanya berkurang sedikit setelah diberi obat anti nyeri. Pemeriksaan fisik pada nervus kranialis diketahui dalam batas normal. \r\nApakah diagnosis pada pasien tersebut?\r\n', 'Neuralgia oksipital\r\n', 'Neuralgia glossofaringeus\r\n', 'Neuralgia trigeminal\r\n', 'Ramsay hunt syndrome', 'C', NULL, '2021-01-03 14:09:25', 1, 'true'),
(30, 'noimage.png', 'Seorang laki-laki, 50 tahun mengelhukan kelopak mata sulit dibuka sejak kurang lebih 1 minggu yang lalu. Pasien juga mengeluhkan kelemahan anggota gerak yang dipicu oleh aktivitas, terutama sore hari menjelang waktu pulang kantor, dan membaik setelah istirahat. Wartenhberg test (+)\r\nApakah diagnosis pada pasien tersebut?\r\n', 'Myasthenia gravis', 'Guillain barre syndrome', 'Amyotrophic lateral sclerosis', 'Accute flaccid paralysis', 'A', NULL, '2021-01-03 14:09:25', 1, 'true'),
(31, 'noimage.png', 'Seorang anak-anak berumur 12 tahun dibawa ke IGD RS dengan kelemahan anggota gerak sejak 4 hari yang lalu. Kelemahan dirasakan mulai dari anggota gerak bawah. Anak tersebut mengalami diare selama seminggu sekitar 2 minggu yang lalu. Tanda vital dalam batas normal. Motorik terkesan tetraparesis. Refleks fisiologis menurun namun tidak ditemukan refleks patologis. \r\nApakah diagnosis pada pasien tersebut?', 'Multiple sclerosis', 'Guillain barre syndrome', 'Amyotrophic lateral sclerosis', 'Stroke', 'B', NULL, '2021-01-03 14:09:25', 1, 'true'),
(32, 'noimage.png', 'Seorang anak berusia 12 tahun mengalami kejang di rumah. Sebelum tiba di RS, pasien tersebut sudah diberikan diazepam per rectal sebanyak 2 kali. Saat tiba di RS, pasien tersebut masih kejang sehingga diberikan diazepam IV. Setelah itu, pasien masih kejang dan hingga saat ini kejang sudah berlangsung selama 15 menit.\r\nApakah tatalaksana yang akan dilakukan saat ini?\r\n', 'Fenitoin IV', 'Fenitoin IM', 'Fenobarbital IV', 'Diazepam IV', 'A', NULL, '2021-01-03 14:09:25', 1, 'true'),
(33, '202011_1609263214.jpg', 'Seorang laki – laki berusia 40 tahun datang ke puskesmas karena mengeluhkan nyeri pada jari tangan kanan. Pada saat pemeriksaan fisik, ditemukan pembengkakan dan kemerahan seperti pada gambar. Kanavel’s four sign (+).\r\nApakah diagnosis pada pasien ini?', 'Tendinitis', 'Tenosinovitis supurativa', 'Carpal tunnel syndrome', 'Guyon canal syndrome', 'B', NULL, '2021-01-03 14:09:25', 1, 'true'),
(34, 'noimage.png', 'Seorang laki-laki mengeluhkan kelemahan anggota gerak sebelah kanan. Pada pemeriksaan fisik, ditemukan lateralisasi kanan dan hemiparesis spastik dengan kekuatan motoric 3 pada ekstremitas atas dan bawah sebelah kanan. Pada pemeriksaan nervus kranialis ditemukan paresis pada n.III sinistra.\r\nApakah diagnosis pada pasien tersebut?\r\n', 'Sindrom Benedict', 'Sindrom Claude', 'Sindrom Weber', 'Sindrom Millard-Gubler', 'C', NULL, '2021-01-03 14:09:25', 1, 'true'),
(35, '3709076646.jpg', 'Dummy', 'Dummy', 'Dummy', 'Dummy', 'Dummy', 'Dummy', '2020-12-28 17:34:12', '2020-12-28 17:34:12', 3, ''),
(36, '3709076646.jpg', 'Dummy', 'Dummy', 'Dummy', 'Dummy', 'Dummy', 'Dummy', '2020-12-28 17:34:12', '2020-12-28 17:34:12', 4, ''),
(37, '3709076646.jpg', 'Dummy', 'Dummy', 'Dummy', 'Dummy', 'Dummy', 'Dummy', '2020-12-28 17:34:12', '2020-12-28 17:34:12', 6, ''),
(38, '3709076646.jpg', 'Dummy', 'Dummy', 'Dummy', 'Dummy', 'Dummy', 'Dummy', '2020-12-28 17:34:12', '2020-12-28 17:34:12', 7, ''),
(39, '3709076646.jpg', 'Dummy', 'Dummy', 'Dummy', 'Dummy', 'Dummy', 'Dummy', '2020-12-28 17:34:12', '2020-12-28 17:34:12', 8, ''),
(40, '3709076646.jpg', 'Dummy', 'Dummy', 'Dummy', 'Dummy', 'Dummy', 'Dummy', '2020-12-28 17:34:12', '2020-12-28 17:34:12', 9, ''),
(41, '3709076646.jpg', 'Dummy', 'Dummy', 'Dummy', 'Dummy', 'Dummy', 'Dummy', '2020-12-28 17:34:12', '2020-12-28 17:34:12', 10, ''),
(42, '3709076646.jpg', 'Dummy', 'Dummy', 'Dummy', 'Dummy', 'Dummy', 'Dummy', '2020-12-28 17:34:12', '2020-12-28 17:34:12', 11, ''),
(43, '3709076646.jpg', 'Dummy', 'Dummy', 'Dummy', 'Dummy', 'Dummy', 'Dummy', '2020-12-28 17:34:12', '2020-12-28 17:34:12', 12, ''),
(44, '3709076646.jpg', 'Dummy', 'Dummy', 'Dummy', 'Dummy', 'Dummy', 'Dummy', '2020-12-28 17:34:12', '2020-12-28 17:34:12', 13, ''),
(45, '3709076646.jpg', 'Dummy', 'Dummy', 'Dummy', 'Dummy', 'Dummy', 'Dummy', '2020-12-28 17:34:12', '2020-12-28 17:34:12', 14, ''),
(46, '3709076646.jpg', 'Dummy', 'Dummy', 'Dummy', 'Dummy', 'Dummy', 'Dummy', '2020-12-28 17:34:12', '2020-12-28 17:34:12', 15, ''),
(47, '3709076646.jpg', 'Dummy', 'Dummy', 'Dummy', 'Dummy', 'Dummy', 'Dummy', '2020-12-28 17:34:12', '2020-12-28 17:34:12', 16, '');

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscriptions`
--

INSERT INTO `subscriptions` (`id`, `start_date`, `end_date`, `status`, `created_at`, `updated_at`) VALUES
(1, '2020-10-01 02:29:51', '2021-05-05 02:29:51', 'Aktif', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `issubscriber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imageprofile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`, `issubscriber`, `imageprofile`) VALUES
(1, 'Aulia Ihza Hendradi', 'auliaihza@gmail.com', NULL, '$2y$10$eWJtAxX8gkS6imlyuOXICOLpRwHOeqsQVXcogsjWVND9PBdPoVhJ.', '7qbwATIw8tNbiCfuRD76bThFw9WgBd7ofYG8n1dC05mKurAMSmgRc4s7hc1R', '2020-12-15 22:55:13', '2020-12-15 22:55:13', 'tutor', '', 'tutor1.jpg'),
(2, 'Dafa Berlian', 'dafaberlian123@gmail.com', NULL, '$2y$10$mIdyVDNYGsUi9JOp8dtIfO./XU87ooEY5BJLwlbqGGw5mKBhTxg5a', 'ZbwN6uHM1ZulBbVR0LH4CBfeFOOMoIGAyUYUrCR1jmvJAkAQKYk9PyqQ666o', '2020-12-26 09:22:42', '2020-12-26 09:22:42', 'tutor', '', 'tutor3.jpg'),
(3, 'kaori', 'kaori@kaori.com', NULL, '$2y$10$hs0QXLXxRxeDeL8uc7PuJeS1LlgRnxBGsq4KeNzHa5DYYWmDs2Pni', NULL, '2020-12-26 12:48:22', '2020-12-26 12:48:22', 'student', '', NULL),
(4, 'KinasiBurat', 'kkk@kkk.com', NULL, '$2y$10$mq3I3YcG8HH8Z.rSpU3rxO1PSHORHTOHpc3BHVmxK9fRL1WxjLRke', 'B9UYv2sKCkmPi4rm25usRTEkPgm7zXfCxKdas3b2EIWGMgG0VhpYv23r6Z1s', '2020-12-26 13:12:07', '2020-12-26 13:12:07', 'student', 'true', NULL),
(5, 'ngeong', 'ngeong@email.com', NULL, '$2y$10$t//kctA/9vwFXAlUPfpHGO9rqVQFbdP2QXLpnZdSQVbsW4wA/6/ii', NULL, '2020-12-29 10:40:25', '2020-12-29 10:40:25', 'admin', 'false', NULL),
(6, 'Kinasihurabb Moralluhung', 'mheing@email.com', NULL, '$2y$10$FdX7JjNBJe2.w1iHZLUCPuMnVIrPuJjYentwJdth5V2VZwmE9YFsa', 'Rf9PFWhdljozfbdC0Y4AYeIw0p3eoe2nG3DCi0tQc54CcdgqTaJQYdbzcSKR', '2020-12-29 11:21:24', '2020-12-29 11:21:24', 'tutor', 'false', 'tutor2.jpg'),
(7, 'Aulia Ihza Hendradi', 'ihza.18051@mhs.its.ac.id', NULL, '$2y$10$q0HH.fc34IZkYObd/G4RBO9/FKnwOunvJ9MVmGtTWTZVNJqc24MWO', 'NhiSe94VtKiZszEBrFUqbNm5oEJCU1x1jxVeYwB91ZYXj5Ihi7IZHJbH5zmn', '2020-12-30 00:18:07', '2020-12-30 00:18:07', 'student', 'false', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id_video` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id_video`, `title`, `body`, `link`, `created_at`, `updated_at`) VALUES
(13, 'Praktik Perawatan Luka dan Alat Minor', 'Skill bedah minor didahului dengan pengenalan alat, dan pemakaian sarung tangan. Perawatan luka merupakan langkah skill bedah minor selanjutnya yang harus dikuasai. PELAJARI dan praktekkan sehingga pada saat langkah berikutnya tinggal pemantapan cara menjahit dan juga  wound debridement. SEMANGAT dan SALAM BELA NEGARA.', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/ucPX4fOFvmk\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2020-12-29 09:52:25', '2020-12-29 09:52:25'),
(14, 'Praktik Muskuloskeletal Dasar', 'Praktik ini menggunakan prinsip GALS examination  (gait, arms, legs and spine) adalah perangkat screening untuk mendeteksi abnormalitas lokomotor dan disabilitas fungsional pada pasien. Pelajari skill pemeriksaan dasar ini sehingga dapat mendiagnosis lebih akurat.', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/RIfCq6_5hIU\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2020-12-29 09:55:56', '2020-12-29 09:55:56'),
(15, 'Praktik Pengukuran Lingkar Pinggang dan Panggul', 'Untuk menentukan apakah seseorang termasuk dalam kategori penyakit metabolik dapat dilihat dari ukuran lingkar pinggang dan lingkar panggul. PELAJARI  dengan SEKSAMA. SELAMAT BELAJAR dan SALAM BELA NEGARA.', '<iframe width=\"710\" height=\"399\" src=\"https://www.youtube.com/embed/dV5GWJi-Awg\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2020-12-29 10:44:35', '2020-12-29 10:44:35'),
(16, 'Praktik Inspeksi, Palpasi, Perkusi, dan Auskultasi', 'Skill pemeriksaan fisik dasar yang harus dikuasai. Ayuk pelajari langkahnya dengan bantuan video ini. SALAM BELA NEGARA.', '<iframe width=\"1280\" height=\"720\" src=\"https://www.youtube.com/embed/NnqMPUga_PY\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2020-12-29 10:46:10', '2020-12-29 10:46:10'),
(17, 'Praktik Penulisan Resep Obat Anti Malaria Blok TM', 'Penulisan Resep merupakan Hal yang akan sering Kita lakukan saat berpraktek sebagai dokter. \r\nDiperlukan Pengetahuan yg Baik untuk dapat melakukan PEMILIHAN OBAT yang tepat dan Rasional dalam menulis resep. Juga diperlukan Skill /Ketrampilan yang baik dalam PENULISAN RESEP OBAT . Selamat mengikuti skill Penulisan Resep Obat Anti Malaria.\r\nSelamat Berlatih .\r\nSemoga Bermanfaat.\r\n#Dokter Untuk Bangsa. Salam Bela Negara', '<iframe width=\"1280\" height=\"720\" src=\"https://www.youtube.com/embed/xioq8SaReWY\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2020-12-29 10:49:40', '2020-12-29 10:49:40'),
(18, 'Praktik Pemeriksaan Fisik Hematologi', 'Pemeriksaan fisik hematologi mencakup pemeriksaan fisik pada pasien dengan keluhan anemia, perdarahan ataupun pada pasien dengan kecurigaan ke arah keganasan. PF ini menggunakan model manekin yang akan berbeda rasa palpasi, perkusi dari pasien sesungguhnya.  Ulangi dan cermati video ini  beberapa kali dan praktek-kan  pada model sehingga tujuan pembelajaran tercapai. Salam bela negara.', '<iframe width=\"1280\" height=\"725\" src=\"https://www.youtube.com/embed/-9DAPLvM29w\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2020-12-29 10:50:42', '2020-12-29 10:50:42'),
(19, 'Praktik Anamnesis Pasien Demam, pemeriksaan Capillary Refill Time dan Rumpel Ledd', 'Demam adalah salah satu keluhan yang sering dikeluhkan pasien. Cara melakukan anamnesis demam harus dikuasai dokter umum. Berlatihlah dengan menggunakan video ini dan silakan beri komentar yang membangun. SELAMAT BELAJAR dan SALAM BELA NEGARA.', '<iframe width=\"1280\" height=\"720\" src=\"https://www.youtube.com/embed/Hgakn7lNalc\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2020-12-29 10:51:40', '2020-12-29 10:51:40'),
(20, 'Praktik Pembuatan Sediaan Apusan Darah Malaria', 'Malaria masih merupakan masalah Kesehatan di Daerah Tropis, termasuk di Indonesia. Diperlukan ketrampilan untuk melakukan Anamnesa dan pemeriksaan Fisik yg Baik. Juga diperlukan PEMERIKSAAN PENUNJANG berupa ketrampilan membuat sediaan Apusan Darah pasien Malaria untuk penegakkan diagnosa Malaria. Silahkan mengikuti video skill berikut dan berlatih berulang kali untuk mempraktekkannya.\r\nSelamat Berlatih.\r\nSemoga bermanfaat.\r\n# Dokter untuk Bangsa. Salam Bela Negara', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/7AtqUFAomWE\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2020-12-29 10:54:12', '2020-12-30 00:24:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forums`
--
ALTER TABLE `forums`
  ADD PRIMARY KEY (`id_forum`),
  ADD KEY `forums_kelas_id_foreign` (`kelas_id`);

--
-- Indexes for table `kategori_soal`
--
ALTER TABLE `kategori_soal`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pembayarans`
--
ALTER TABLE `pembayarans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pembayarans_user_id_foreign` (`user_id`);

--
-- Indexes for table `soals`
--
ALTER TABLE `soals`
  ADD PRIMARY KEY (`id_soal`),
  ADD KEY `soals_kategori_id_foreign` (`kategori_id`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id_video`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forums`
--
ALTER TABLE `forums`
  MODIFY `id_forum` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori_soal`
--
ALTER TABLE `kategori_soal`
  MODIFY `id_kategori` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `pembayarans`
--
ALTER TABLE `pembayarans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `soals`
--
ALTER TABLE `soals`
  MODIFY `id_soal` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id_video` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `forums`
--
ALTER TABLE `forums`
  ADD CONSTRAINT `forums_kelas_id_foreign` FOREIGN KEY (`kelas_id`) REFERENCES `kelas` (`id_kelas`);

--
-- Constraints for table `pembayarans`
--
ALTER TABLE `pembayarans`
  ADD CONSTRAINT `pembayarans_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `soals`
--
ALTER TABLE `soals`
  ADD CONSTRAINT `soals_kategori_id_foreign` FOREIGN KEY (`kategori_id`) REFERENCES `kategori_soal` (`id_kategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
