-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 10 Bulan Mei 2023 pada 18.05
-- Versi server: 5.6.34-log
-- Versi PHP: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dlhdevbw_bwh`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `agendas`
--

CREATE TABLE `agendas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `agendas`
--

INSERT INTO `agendas` (`id`, `judul`, `tanggal_mulai`, `tanggal_selesai`, `deskripsi`, `created_at`, `updated_at`) VALUES
(5, 'Hari lingkungan hidup', '2023-01-10', '2023-02-10', 'Ini adalah hari lingkungan hidup', '2023-02-17 15:50:06', '2023-02-17 15:50:06'),
(6, 'Hari peduli sampah nasional', '2023-02-21', '2023-02-21', '....', '2023-02-17 15:50:46', '2023-02-17 15:50:46'),
(7, 'Hari air sedunia', '2023-03-22', '2023-03-22', '....', '2023-02-17 15:51:26', '2023-02-17 15:51:26'),
(8, 'Global recycling day', '2023-03-18', '2023-03-18', '....', '2023-02-17 15:52:52', '2023-02-17 15:52:52'),
(9, 'Hari perempuan sedunia', '2023-03-08', '2023-03-08', '...', '2023-02-17 15:53:30', '2023-02-17 15:53:30'),
(10, 'Hari bumi', '2023-04-22', '2023-04-22', '...', '2023-02-17 15:54:34', '2023-02-17 15:54:34'),
(11, 'Hari lingkungan hidup sedunia', '2023-06-05', '2023-06-05', '...', '2023-02-17 15:55:50', '2023-02-17 15:55:50'),
(12, 'Hari laut sedunia', '2023-06-08', '2023-06-08', '...', '2023-02-17 15:56:25', '2023-02-17 15:56:25'),
(13, 'Hari kelautan nasional', '2023-07-02', '2023-07-02', '...', '2023-02-17 15:57:01', '2023-02-17 15:57:01'),
(14, 'World clean up day', '2023-09-17', '2023-09-17', '...', '2023-02-17 15:57:54', '2023-02-17 15:57:54'),
(15, 'World maritim day', '2023-09-30', '2023-09-30', '...', '2023-02-17 15:58:38', '2023-02-17 15:58:38'),
(16, 'Hari maritim nasional', '2023-09-21', '2023-09-21', '...', '2023-02-17 15:59:03', '2023-02-17 15:59:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikels`
--

CREATE TABLE `artikels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `artikels`
--

INSERT INTO `artikels` (`id`, `judul`, `deskripsi`, `link`, `gambar`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'SIMPEL (Sistem Pelaporan Lingkungan Secara Elektronik)', '<p style=\"text-align:justify\">Berkembangnya teknologi informasi dan komunikasi yang pesat serta memiliki potensi untuk dimanfaatkan secara luas mendorong pemerintah untuk memanfaatkan teknologi informasi untuk meningkatkan layanan kepada masyarakat dan mendorong terwujudnyan e-government di Indonesia. E-Government ditujukan untuk menjamin keterpaduan sistem pengelolaan dan pengolahan dokumen maupun informasi elektronik dalam mengembangkan sistem pelayanan publik yang efektif, efisien, transparan dan akuntabilitas. Dengan adanya pelayan publik secara digital masyarakat diharapkan secara mandiri memantau langsung pelayanan yang diberikan pemerintah dimana saja dan kapan saja tanpa ada batasan ruang dan waktu</p>\r\n\r\n<p style=\"text-align:justify\">Terdapat lebih dari 250 kegiatan usaha dari berbagai sektor yang wajib melaporkan komitmen pengelolaan lingkungan setiap 3 bulan dan 6 bulan kepada Dinas Lingkungan Hidup Kabupaten Banyuwangi. Dari pengalaman sebelumnya pelaporan komitmen pengelolaan lingkungan masih dilakukan secara manual, para pelaku usaha datang langsung ke kantor untuk melaporkan dan menyerahkan dokumen pelaporan pengelolaan dan pemantauan lingkungan. Pelayanan secara manual menyebabkan lamanya proses, panjangnya birokrasi, dan faktor kesalahan manusia relatif tinggi, serta sulitnya melakukan rekapitulasi pelaporan rutin. Untuk itu, dalam rangka mewujudkan E-Government berbasis Information Technology (IT) di lingkungan Pemerintah Kabupaten Banyuwangi, khususnya pada Dinas Lingkungan Hidup, akan menerapkan fasilitas layanan pelaporan online berbasis IT, dengan adanya pelaporan online ini dapat meningkatkan kualitas pelayanan dan kinerja pemerintah khususnya pada lingkungan Dinas Lingkungan Hidup maupun pada lingkungan Pemerintah Kabupaten Banyuwangi serta lebih memudahkan masyarakat khusunya pelaku usaha.</p>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"\" src=\"https://dlh.banyuwangikab.go.id/images/page/orig/simple.jpg\" />Dinas Lingkungan Hidup dibantu dengan Dinas Komunikasi, Informatika Dan Persandian berinisiasi untuk membuatkan website pelaporan online untuk Dinas Lingkungan Hidup Kabupaten Banyuwangi yaitu SIMPEL (Sistem Informasi Pelaporan Elektronik Lingkungan Hidup). SIMPEL merupakan suatu aplikasi berbasis IT yang difungsikan sebagai media pelaporan online bagi perusahaan atau industri di Kabupaten Banyuwangi. Aplikasi ini berupa sistem informasi berbasis website, sehingga mempermudah pengguna dalam mengaksesnya dan mengoperasikannya. Diharapkan dengan penggunaan SIMPEL ini, kendala dalam menyediakan bentuk pelayanan dan pelaporan pengelolaan lingkungan oleh pelaku usaha di Kabupaten Banyuwangi yang sebelumnya dapat teratasi sehingga dapat mencapai hasil yang maksimal. Aplikasi SIMPEL juga terintegrasi dengan data perizinan berupa NIB kegiatan usaha, sehingga kegiatan usaha yang belum berizin tidak dapat menakses aplikasi SIMPEL.</p>', 'SIMPEL-(Sistem-Pelaporan-Lingkungan-Secara-Elektronik)', 'articles/3NSapiMy2LIwfLujteDg0syjx7faqSnjWwd1w9Ic.jpg', 'husnul', '2023-01-28 23:02:05', '2023-02-15 05:55:42'),
(6, 'Genjot kinerja pegawai, Ka. DLH Banyuwangi berikan arahan jelang Idul Fitri 1439 Hijriah.', '<p><img alt=\"\" src=\"http://dlh.banyuwangikab.go.id/images/content/IMG_0114.JPG\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Bertempat di Lapangan Tenis GOR Tawangalun, Ibu Ka. DLH Banyuwangi melaksanakan pembinaan dan arahan kepada seluruh jajaran DLH Banyuwangi.</p>\r\n\r\n<p>Dalam kesempatan ini Ka. DLH Banyuwangi mengingatkan di Bulan Ramadhan dan Hari Raya Idul Fitri tahun ini, untuk meningkatkan kinerja sesuai dengan SOP yang ada. &ldquo; Saya minta kepada teman-teman kebersihan, di bulan Ramadhan dan Hari Raya ini &nbsp;wajib melaksanakan sesuai tugas masing-masing &ldquo; ucapnya.<br />\r\n<br />\r\n&ldquo;Petugas kebersihan jalan , armada pengangkut sampah, Drainase dan petugas kebersihan di beberapa kecamatan untuk diprioritaskan penanganan sampah di baik pusat-pusat keramaian, sepanjang jalan protokol maupun tempat wisata&rdquo; tambah beliau.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"http://dlh.banyuwangikab.go.id/images/content/IMG_0236.JPG\" /><br />\r\n<br />\r\nSemoga kita semua di bawah DLH Banyuangi diberi kekuatan dan kesehatan dalam menjalankan tugas demi kenyamanan masyarakat Banyuwangi.</p>\r\n\r\n<p>&nbsp;</p>', 'Genjot-kinerja-pegawai,-Ka.-DLH-Banyuwangi-berikan-arahan-jelang-Idul-Fitri-1439-Hijriah.', 'articles/AGgMRjoaWX6xZ339bFZ24WppxaQkzCVV2buHsBs9.jpg', 'admin', '2023-01-29 06:04:07', '2023-01-29 06:04:07'),
(7, 'Dorong Budaya Bersih, PEMKAB Banyuwangi kembali gelar Festival Toilet dan Kali Bersih', '<p>BANYUWANGI - Untuk mengkampanyekan budaya hidup bersih, pemkab Banyuwangi secara ajeg menggelar Festival Toilet dan Kali Bersih. Festival yang digelar di stren Sungai Gadog, Desa&nbsp; Karangbendo Rogojampi, Jumat (26/4/2019) dibuka Bupati Banyuwangi Abdullah Azwar Anas dengan menebar ribuan benih ikan nila secara simbolis.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Dikatakan Bupati Anas, kampanye lewat festival terus digelar sebagai untuk menjadikan hidup bersih sebagai budaya yang tertanam dalam masyarakat.&nbsp;</p>\r\n\r\n<p>&quot;Mudah-mudahan dengan kampanye tentang toilet dan sungai bersih bisa tumbuh kesadaran kolektif dari warga akan pentingnya hal tersebut,&quot; ujarnya.</p>\r\n\r\n<p>Festival tersebut digelar dengan melibatkan murid TK Islam Unggulan Miftahul Falah, yang tak jauh dari lokasi penyelenggaraan. Bahkan, Bupati Anas memberikan contoh menjaga kebersihan toilet dengan cara mengajak mereka membersihkan toilet sekolah.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&quot;Kami terus mendorong upaya membudayakan sikap hidup bersih bukan hanya di level atas, tapi juga ke anak-anak sekolah. Harapannya, agar dalam benak anak-anak tertanam kepedulian akan kebersihan,&quot; kata Anas.&nbsp;</p>\r\n\r\n<p>Sementara itu Kepala Dinas Lingkungan Hidup, Husnul Chotimah menambahkan bahwa dampak festival kali bersih ini telah tumbuh kesadaran pada warga untuk memelihara kebersihan saluran tersier dan sekunder yang ada di wilayahnya.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&quot;Bahkan mereka juga memanfaatkan kebersihan sungai dengan menebar ikan secara terkendali untuk mendapatkan manfaat ekonomi. Kami juga telah melakukan pemasangan screen/filter di sungai-sungai untuk mensterilkan sungai dari sampah,&quot; kata Husnul.</p>\r\n\r\n<p>Setiap tahun Dinas LH juga melakukan kompetisi toilet bersih di tempat pelayanan publik dan lomba kebersihan kali. (humas pemkab. Banyuwangi)</p>', 'Dorong-Budaya-Bersih,-PEMKAB-Banyuwangi-kembali-gelar-Festival-Toilet-dan-Kali-Bersih', 'articles/921RjMy9HS6RDSFCvnqGaP9aJvHfLHTSONojmJLA.jpg', 'admin', '2023-01-29 06:12:12', '2023-01-29 06:12:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `banners`
--

INSERT INTO `banners` (`id`, `nama`, `gambar`, `link`, `created_at`, `updated_at`) VALUES
(1, 'banner 1', 'banners/e7ngkQh8u40pzHojK6bHBfVoBIyrDBRaKSsgrhkM.png', 'banner-1', '2023-01-28 23:02:05', '2023-02-17 07:15:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cerita_sukses`
--

CREATE TABLE `cerita_sukses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `cerita_sukses`
--

INSERT INTO `cerita_sukses` (`id`, `judul`, `deskripsi`, `link`, `gambar`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'Penyiapan Regulasi Pendukung Pelayanan Sampah di Banyuwangi oleh UPT Persampahan', '<p>Saat ini, Pemerintah Kabupaten Banyuwangimelalui Dinas Lingkungan Hidup (DLH) telah memiliki Unit Pelaksana Teknis (UPT) pengelolaan persampahan yang bertugas untuk menangani pelayanan persampahan di se-kabupaten Banyuwangi. UPT Pengelolaan Persamapahan ini merupakan eksekutor dalam menyediakan pelayanan pengangkutan sampah dan melakukan penerapan retribusi persamapahan. Menjelang akhir tahun 2022, melalui Program BWH, dikembangkan konsep kolaborasi desa dalam pelayanan sampah untuk mendukung percepatan penyiapan tata Kelola persampahan di desa. Bersama Dinas Pemberdayaan Masyarakat dan Desa didukung Tenaga Ahli Pemberdayaan Masyarakat Kab. Banyuwangi - Kementerian Desa, Pembangunan Daerah Tertinggal, dan Transmigrasi, tim BWH mengembangkan konsep pendampingan desa untuk mengelola pelayanan sampah bekerjasama dengan UPT Persampahan. Dengan adanya konsep kolaborasi UPT dan Pemerintah Desa dalam pelayanan sampah di wilayah kerja BWH, diharapkan para Pendamping Desa dan Pendamping Lokal Desa dapat dilibatkan dalam membantu pemerintah desa untuk mempersiapkan diri mendukung UPTD Persampahann dalam melakukan pelayanan sampah, salah satunya melalui pertemuan rutin yang diselenggarakan oleh DPMD Banyuwangi untuk memastikan pemahaman Pendamping Desa dan Pendamping Lokal Desa terkait perangkat regulasi, sumber daya dan pendanaan di tingkat desa dalam mendukung pelayanan sampah pada tahun 2023.</p>', 'Penyiapan-Regulasi-Pendukung-Pelayanan-Sampah-di-Banyuwangi-oleh UPT-Persampahan', 'cerita_sukses/3AdhXI84TlXqacC9hFMu8i3mB6sgVHugkI0CV4eM.jpg', 'husnul', '2023-01-28 23:02:05', '2023-01-29 06:36:30'),
(2, 'Pemerintah Kabupaten Banyuwangi dan Program Banyuwangi Hijau Melakukan Pembangunan Fasilitas TPS 3R di Kec. Songgon', '<p>Pembangunan Tempat Pengelolaan Sampah Terpadu Reduce, Reuse, Recycle (TPST 3R) dengan kapasitas 84 ton per hari di Desa Balak, Kecamatan Songgon, Kabupaten Banyuwangi mulai dilaksanakan pada November 2022. Fasilitas ini dibangun untuk meningkatkan kualitas penanganan sampah di wilayah Songgon dan empat kecamatan lain di sekitarnya, antara lain Rogojampi, Sempu, Genteng, dan Singojuruh. Pembangunan TPST 3R pada lahan seluas 1,5 hektar ini merupakan salah satu bentuk pelaksanaan Program Banyuwangi Hijau, sebagai updaya pengendalian sampah plastik dan mendorong perilaku memilah sampah dari rumah tangga dan diperkirakan mampu memproses sampah yang dihasilkan dari 54 ribu rumah per hari. Adapun bangunan TPST ini terdiri dari sejumlah bangunan utama yang meliputi area penimbangan, bongkar muat, pemilahan, pengemasan dan pergudangan, penanganan residu, Gudang kompos, serta area komposting, yang juga akan dilengkapi dengan sarana pendukung seperti mushola, kantor operasional, aula, loker, tempat pengolahan air limbah, dan lokasi parkir. Selain menyediakan fasilitas bangunan, pemerintah Kabupaten Banyuwangi bersama Program BWH juga tengah menyiapkan sejumlah bentuk pendampingan dan pelatihan kepada masyarakat, pendamping, maupun UPT persampahan yang akan menjalankan operasional harian layanan sampah.</p>', 'Pemerintah-Kabupaten-Banyuwangi-dan-Program-Banyuwangi-Hijau-Melakukan-Pembangunan-Fasilitas-TPS-3R-di-Kec.-Songgon', 'cerita_sukses/nLYu1vX2DGlEOGnGzrkCRqUmT0UthhXaRrqnJR3R.jpg', 'husnul', '2023-01-28 23:02:05', '2023-01-29 06:36:56'),
(3, 'Kunjungan Pemerintah Pusat dan Mitra Nasional untuk Mempelajari Proses Pemicuan STBM Pilar 4 di Banyuwangi', '<p>Pemerintah Kabupaten Banyuwangi melalui Program Banyuwangi Hijau (BWH) menyambut kunjungan sejumlah mitra nasional yang terdiri dari berbagai instansi seperti Bappenas, Kementerian Kesehatan, Sekretariat UNICEF, Sekretariat Pamsimas, Sekretariat UWASSH (Urban Water, Sanitation, Solid Waste and hygiene), CPIU-ISWMP (Central Project Implementation UnitImprovement of Solid Waste Management Projects), USAID Indonesia, CCBO (Clean Cities, Blue Ocean) Indonesia, serta Dinas Kesehatan Makassar pada tanggal 19 dan 20 Oktober 2022. Kunjungan ini diadakan untuk mempelajari lebih lanjut mengenai pendekatan program BWH, mendiskusikan kebijakan pengelolaan persampahan di Kabupaten Banyuwangi&mdash;termasuk bentuk kolaborasi desa dengan UPTD; dan kelembagaan pengelola pelayanan persampahan, melakukan kunjungan lapangan untuk melihat fasilitas TPS3R di Desa Tembokrejo, Kecamatan Muncar, serta berbagi pengalaman dan pembelajaran program. Program Banyuwangi Hijau (BWH) merupakan sebuah inisiatif dari Pemerintah Banyuwangi untuk merealisasikan kabupaten yang bersih melalui sistem pengelolaan sampah komprehensif. Program ini dikoordinatori oleh Dinas Lingkungan Hidup (DLH) Banyuwangi, dengan dukungan lintas sektor dari sejumlah dinas terkait. Program BWH mengimplementasikan empat komponen penting dalam kegiatan-kegiatannya, antara lain tata kelola, sistem persampahan, komunikasi perubahan perilaku, dan inovasi pembiayaan. &ldquo;Dalam Program Banyuwangi Hijau, kami berkolaborasi dengan Pemda untuk memperkuat kelembagaan dan menyiapkan fasilitas persampahan, dengan melibatkan DLH dalam mengembangkan desain operasional, pengelolaan bisnis serta administrasi, didukung dengan kampanye perubahan perilaku, bekerja sama dengan Dinas Kesehatan untuk mengembangkan strategi pemicuan khusus untuk persampahan dan penguatan kapasitas sanitarian dan kader Kesehatan beserta monitoringnya di lapangan. Tidak hanya itu, kami berupaya untuk mengeksplorasi sumber pendanaan alternatif yang bisa digunakan untuk membiayai dan menjamin keberlanjutan sistem pengelolaan persampahan, sehingga pengelola TPS3R dapat mengakses pasar atau pembeli komoditas sampah, serta inovasi pembiayaan yang dapat membuka potensi investasi dari pihak swasta untuk sistem pengolahan sampah,&rdquo; kata Andre Kuncoroyekti, Direktur Program BWH dalam sambutannya kepada peserta kunjungan. &ldquo;Isu sampah berkontribusi dalam banyak aspek sosial dan ekonomi. Salah satu misi dalam pengelolaan persampahan di Banyuwangi adalah membangun ekonomi inklusif dan pemerataan infrastruktur yang mampu mengungkit produktifitas sektor unggulan dan menguatkan ekologi lingkungan, yang tertuang dalam Perda no 2 tahun 2021 tentang RPJMD,&rdquo; kata Budi Wahono, Sekretaris Bappeda, dalam sambutannya di Kantor Bappeda Banyuwangi kepada para peserta kunjungan, yang turut dihadiri oleh perwakilan dari DLH, Dinas PU CKPP, dan Dinas Kesehatan Banyuwangi. &ldquo;Diawali dengan Project STOP STop Ocean Plastics) di Kecamatan Muncar, dengan tujuan untuk mengurangi kebocoran sampah plastik ke lingkungan, termasuk laut. Hingga kini, Project STOP telah melayani lebih dari 90.000 penduduk di Kecamatan Muncar. Kini Program BWH berupaya untuk menyediakan sarana dan prasarana pengelolaan sampah, menyiapkan perangkat kebijakan seperti perda dengan melibatkan unsur perangkat daerah, dan menyiapkan UPT Persampahan berikut skema pendanaan.&rdquo; Pada hari pertama kunjungan di Banyuwangi, perwakilan mitra nasional mendatangi fasilitas TPS3R yang dikelola KSM Bio Mandiri Lestari di Desa Tembokrejo, Kecamatan Muncar, disambut oleh Kepala Desa Tembokrejo dan pengelola TPS3R, untuk melihat langsung proses pemilahan dan pengolahan sampah organik dan anorganik, serta berdiskusi dengan pejabat desa dan pengelola terkait operasional dan layanan persampahan yang sudah berjalan di Desa Tembokrejo melalui Project STOP (STop Ocean Plastics), yang diinisiasi sejak tahun 2018. Selain itu, sejumlah perwakilan kunjungan turut melihat proses pelatihan bagi fasilitator Sanitasi Total Berbasis Masyarakat (STBM) Pilar 4&mdash;Pengelolaan Sampah yang Aman di tingkat Rumah Tangga, untuk sanitaria, yang difasilitasi oleh Forum Banyuwangi Sehat, PKK Banyuwangi, SIKIA (Unair), STIKES, HAKLI, dan Dinas Kesehatan Banyuwangi, untuk mendukung kampanye publik pengelolaan sampah yang akan dilaksanakan program BWH. &ldquo;Kami sangat mengapresiasi inisiatif Program BWH di Banyuwangi, dan berharap inisiatif yang tengah berjalan ini&mdash;termasuk Training of Trainer STBM dapat mendukung pemicuan dibidang persampahan sebagai pilot project di tingkat pusat, mendorong perubahan perilaku masyarakat untuk sadar memilah sampah dan ikut layanan persampahan,&rdquo; kata Nur Aisyah Nasution, Koordinator Bidang Air Minum dan Sanitasi, Direktorat Perumahan, Kawasan Permukiman dan Pertanahan, Bappenas, &ldquo;kami ingin belajar bersama bagaimana konsep pengelolaan persampahan dilakukan di Banyuwangi, serta bagaimana regulasi persampahan dapat diterapkan.&rdquo; Di hari kedua kunjungan, peserta melakukan observasi sosialisasi peran desa dalam tata Kelola persamapahan melalui Program BWH, yang merupakan bentuk kolaborasi desa dalam pengelolaan persampahan dengan UPTD, dan proses persiapan desa sebagai pengelola layanan sampah&mdash;dihadiri oleh 33 kepala desa dari kecamatan Songgon, Rogojampi, Genteng, Sempu, Singojuruh, dan Kabat, serta para pendamping desa di wilayah kerja BWH. Kemudian, melakukan audiensi dengan Sekda Banyuwangi untuk berbagi tentang inisiatif pengelolan sampah di tingkat pusat dan kabupaten serta skema-skema kolaborasi. Dengan adanya kunjungan lapangan ini, diharapkan dapat memperkuat koordinasi dan kolaborasi dengan pemerintah pusat dan mitra pembagunan lainnya untuk mendukung sistem persampahan yang berkelanjutan di Kabupaten Banyuwangi, serta mendukung implementasi program BWH. Program Banyuwangi Hijau (BWH) adalah inisiatif pembangunan pengelolaan sampah berkelanjutan Pemerintah Kabupaten Banyuwangi yang menggabungkan model pengelolaan sampah perkotaan dalam pengelolaan sampah sirkular dengan menyediakan solusi daur ulang yang dapat meningkatkan nilai ekonomi sampah. Didukung oleh sejumlah mitra termasuk Kementerian Koordinator Bidang Kemaritiman dan Investasi, Kementerian Lingkungan Hidup dan Kehutanan, Pemerintah Kabupaten Banyuwangi, dan Kedutaan Besar Norwegia untuk Indonesia, BWH mendorong keterlibatan multi-pihak untuk meningkatkan penyediaan layanan persampahan yang terintegrasi didukung partisipasi aktif masyarakat. Hal ini diharapkan mendorong pemulihan ekonomi lokal dan peningkatan kualitas kesehatan masyarakat, sebagaimana misi Program Banyuwangi Rebound. BWH diselenggarakan pada periode 2022-2024 dengan menerapkan integrasi empat komponen program yang diarahkan untuk mendukung pencapaian target JAKSTRANAS Pengelolaan Sampah Rumah Tangga dan Sampah Sejenis Sampah Rumah Tangga tahun 2025, yakni peningkatan penanganan sampah hingga 70% dan pengurangan timbulan sampah hingga 30%.</p>', 'Kunjungan-Pemerintah-Pusat-dan-Mitra-Nasional-untuk-Mempelajari-Proses-Pemicuan-STBM-Pilar-4-di-Banyuwangi', 'cerita_sukses/8xFvRhpYAYVYtzGojGZFQdQGXEB0Q2vF9MNTTKiW.jpg', 'husnul', '2023-01-28 23:02:05', '2023-01-29 06:37:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokumens`
--

CREATE TABLE `dokumens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_id` bigint(20) UNSIGNED NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `dokumens`
--

INSERT INTO `dokumens` (`id`, `nama`, `kategori_id`, `file`, `keterangan`, `created_at`, `updated_at`, `link`) VALUES
(6, '28082022 LP_Program Banyuwangi Hijau May-June - Bahasa Indonesia_', 6, 'documents/258Ay4XAbGXOhtavFa2QrHklTI3lKlNQAgwhCeuO.pdf', '<p>28082022 LP_Program Banyuwangi Hijau May-June - Bahasa Indonesia_</p>', '2023-01-29 05:52:53', '2023-01-29 05:52:53', '28082022-lp-program-banyuwangi-hijau-may-june-bahasa-indonesia'),
(7, 'LP_Program Banyuwangi Hijau #1 Jan-Feb 2022', 6, 'documents/ZDPOZKOOxaZNyFbBSu549VMM5S0PWhrzvPjWKi9d.pdf', '<p>LP_Program Banyuwangi Hijau #1 Jan-Feb 2022</p>', '2023-01-29 05:54:24', '2023-01-29 05:54:24', 'lp-program-banyuwangi-hijau-1-jan-feb-2022'),
(8, 'LP_Program Banyuwangi Hijau #2 Mar-Apr 2022', 6, 'documents/K0LQP4f6jNbsplhWrtgNnDbNfFKSndio23m5hN9A.pdf', '<p>LP_Program Banyuwangi Hijau #2 Mar-Apr 2022</p>', '2023-01-29 05:56:27', '2023-01-29 05:56:27', 'lp-program-banyuwangi-hijau-2-mar-apr-2022'),
(9, 'LP_Program Banyuwangi Hijau #4 Jul-Okt 2022', 6, 'documents/StqpDIlrHwSbJTuQhFWxz2Iof3vaNHzpU4PXPuMB.pdf', '<p>LP_Program Banyuwangi Hijau #4 Jul-Okt 2022</p>', '2023-01-29 05:57:39', '2023-01-29 05:57:39', 'lp-program-banyuwangi-hijau-4-jul-okt-2022');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeries`
--

CREATE TABLE `galeries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `galeries`
--

INSERT INTO `galeries` (`id`, `judul`, `deskripsi`, `link`, `gambar`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'GERAKAN PENANAMAN 4.309 POHON PADA LAHAN KRITIS', '<p>Banyuwangi, 25 Oktober 2022. DLH Kab. Banyuwangi, Dinas Pertanian dan Pangan Kab. Banyuwangi, BPBD Kab. Banyuwangi, Cabang Dinas Kehutanan Prov Jatim Wil. Banyuwangi, KPH Perhutani Banyuwangi Barat, PT. Perkebunan Lidjen Banyuwangi, Kec. Licin, Kec. Glagah, Desa-Desa di Kec. Licin dan Kec. Glagah, LMDH KPH Perhutani Banyuwangi Barat, Forpimka Licin dan masyarakat sekitar berkolaborasi dan bersinergi bersama melaksanakan gerakan penanaman pohon di lahan kritis di Gantasan, Desa Tamansari, Kecamatan Licin sebagai salah satu upaya rehabilitasi lahan guna mencegah potensi bencana banjir dan tanah longsor. Kegiatan tersebut dihadiri dan dibuka oleh Bapak Asisten Perekonomian dan Pembangunan Setda Kab. Banyuwangi. Sebanyak 4.309 bibit pohon, lebih banyak dari rencana awal yaitu 2.784 bibit pohon yang terdiri dari Mahoni, Gmelina, Manting, Wuni, Durian, Jambu, Matoa, Nangka, Alpukat, Asem, Kopi, Kelengkeng, Mangga, Jati, dan Sukun telah selesai ditanam di kanan kiri jalan Gantasan, Desa Tamansari, Kec. Licin, Kawasan Lahan HGU PT. Lidjen Banyuwangi di Gantasan, Kawasan Gunung Ranti Kec. Licin dan Gantasan di bawah kewenangan KPH Perhutani Banyuwangi Barat.</p>\r\n\r\n<hr />\r\n<p><a href=\"https://dlh.banyuwangikab.go.id/images/gallery/resize/Cara_Membuat_Penawaran_untuk_Rumah_Impian_Anda.jpg\"><img src=\"https://dlh.banyuwangikab.go.id/images/gallery/thumb_gallery/Cara_Membuat_Penawaran_untuk_Rumah_Impian_Anda.jpg\" />&nbsp;</a><a href=\"https://dlh.banyuwangikab.go.id/images/gallery/resize/2.jpg\"><img src=\"https://dlh.banyuwangikab.go.id/images/gallery/thumb_gallery/2.jpg\" />&nbsp;</a><a href=\"https://dlh.banyuwangikab.go.id/images/gallery/resize/3.jpg\"><img src=\"https://dlh.banyuwangikab.go.id/images/gallery/thumb_gallery/3.jpg\" />&nbsp;</a><a href=\"https://dlh.banyuwangikab.go.id/images/gallery/resize/4.jpg\"><img src=\"https://dlh.banyuwangikab.go.id/images/gallery/thumb_gallery/4.jpg\" />&nbsp;</a><a href=\"https://dlh.banyuwangikab.go.id/images/gallery/resize/5.jpg\"><img src=\"https://dlh.banyuwangikab.go.id/images/gallery/thumb_gallery/5.jpg\" /></a></p>', 'GERAKAN-PENANAMAN-4.309-POHON-PADA-LAHAN-KRITIS', 'galeries/G5wvdtH6BPpjTtcnZDbYmMWTcdZ5gZI1pNKgTHCK.jpg', 'husnul', '2023-01-28 23:02:05', '2023-01-29 06:18:04'),
(2, 'KA. DLH membuka Bintek calon sekolah Adiwiyata d Aula SD Penganjuran IV', '<p>KA. DLH membuka Bintek calon sekolah Adiwiyata d Aula SD Penganjuran IV</p>\r\n\r\n<hr />\r\n<p><a href=\"https://dlh.banyuwangikab.go.id/images/gallery/resize/IMG-20170123-WA0004.jpg\"><img src=\"https://dlh.banyuwangikab.go.id/images/gallery/thumb_gallery/IMG-20170123-WA0004.jpg\" />&nbsp;</a><a href=\"https://dlh.banyuwangikab.go.id/images/gallery/resize/IMG-20170123-WA0005.jpg\"><img src=\"https://dlh.banyuwangikab.go.id/images/gallery/thumb_gallery/IMG-20170123-WA0005.jpg\" />&nbsp;</a><a href=\"https://dlh.banyuwangikab.go.id/images/gallery/resize/kepala_dinas.jpg\"><img src=\"https://dlh.banyuwangikab.go.id/images/gallery/thumb_gallery/kepala_dinas.jpg\" /></a></p>', 'KA.-DLH-membuka-Bintek-calon-sekolah-Adiwiyata-d-Aula-SD-Penganjuran-IV', 'galeries/QxkjURP3ApdjJXZveeAZjfon2dwNI5WaTPp4K691.jpg', 'husnul', '2023-01-28 23:02:05', '2023-01-29 06:28:07'),
(6, 'FESTIFAL JEDING RIJIG DAN SEDEKAH OKSIGEN', '<p>Banyuwangi Festival juga kami manfaatkan untuk meningkatkan derajat kesehatan masyarakat baik melalui Sedekah Oksigen dan Festival Jeding Rijig. Kami bersyukur warga Banyuwangi mulai sadar untuk menjaga kebersihan. Kami tidak akan pernah bosan untuk selalu mengingatkan masyarakat untuk senantiasa memiliki kehidupan yang sehat lewat Festival yang kami gelar</p>\r\n\r\n<hr />\r\n<p><a href=\"https://dlh.banyuwangikab.go.id/images/gallery/resize/DSCN8772.JPG\"><img src=\"https://dlh.banyuwangikab.go.id/images/gallery/thumb_gallery/DSCN8772.JPG\" />&nbsp;</a><a href=\"https://dlh.banyuwangikab.go.id/images/gallery/resize/DSCN8775.JPG\"><img src=\"https://dlh.banyuwangikab.go.id/images/gallery/thumb_gallery/DSCN8775.JPG\" />&nbsp;</a><a href=\"https://dlh.banyuwangikab.go.id/images/gallery/resize/DSCN8779.JPG\"><img src=\"https://dlh.banyuwangikab.go.id/images/gallery/thumb_gallery/DSCN8779.JPG\" />&nbsp;</a><a href=\"https://dlh.banyuwangikab.go.id/images/gallery/resize/DSCN8783.JPG\"><img src=\"https://dlh.banyuwangikab.go.id/images/gallery/thumb_gallery/DSCN8783.JPG\" /></a></p>\r\n\r\n<ul>\r\n</ul>', 'FESTIFAL-JEDING-RIJIG-DAN-SEDEKAH-OKSIGEN', 'galeries/j8S6TQ131SP4jAgYwsqietkhr9rxg5N6qO7wRw1b.jpg', 'admin', '2023-01-29 06:23:47', '2023-01-29 06:23:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategoris`
--

CREATE TABLE `kategoris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kategoris`
--

INSERT INTO `kategoris` (`id`, `nama`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'Publikasi', 'Dokumen jenis Publikasi', '2023-01-28 23:02:05', '2023-01-28 23:02:05'),
(2, 'Informasi', 'Dokumen jenis Informasi', '2023-01-28 23:02:05', '2023-01-28 23:02:05'),
(3, 'Produk Hukum', 'Dokumen jenis Produk Hukum', '2023-01-28 23:02:05', '2023-01-28 23:02:05'),
(4, 'SOP - PPID', 'Dokumen jenis SOP - PPID', '2023-01-28 23:02:05', '2023-01-28 23:02:05'),
(5, 'DIP-PPID', 'Dokumen jenis DIP-PPID', '2023-01-28 23:02:05', '2023-01-28 23:02:05'),
(6, 'Laporan Persampahan', 'Dokument tentang banyuwangi hijau', '2023-01-29 05:50:38', '2023-01-31 05:21:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_01_17_102929_create_artikels_table', 1),
(6, '2023_01_17_103836_create_galeries_table', 1),
(7, '2023_01_20_033231_create_kategoris_table', 1),
(8, '2023_01_21_040228_create_dokumens_table', 1),
(9, '2023_01_24_034722_create_static_pages_table', 1),
(10, '2023_01_24_103928_create_banners_table', 1),
(11, '2023_01_25_100628_create_cerita_sukses_table', 1),
(12, '2023_01_28_175449_add_column_to_dokumens', 1),
(13, '2023_02_04_052340_create_agendas_table', 1),
(14, '2023_02_06_040655_drop_column_from_static_pages', 1),
(15, '2023_02_17_074111_create_mitra_d_l_h_s_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mitra_d_l_h_s`
--

CREATE TABLE `mitra_d_l_h_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `mitra_d_l_h_s`
--

INSERT INTO `mitra_d_l_h_s` (`id`, `name`, `link`, `gambar`, `created_at`, `updated_at`) VALUES
(14, 'Banyuwangi Hijau', 'https://stagingdev.skom.id/banyuwangi-hijau', 'mitraDLHs/kdnFRVlCe8DpEJlZJUsjMPAtRGgsIBher3l5JCFy.png', NULL, '2023-02-17 07:20:32'),
(15, 'Systemiq', 'https://www.systemiq.earth/', 'mitraDLHs/E2DfpsCKwdB8MEZBz7rUreuLGcXF1eioGeurCMO5.png', NULL, '2023-02-17 07:22:30'),
(16, 'Borealis', 'https://www.borealisgroup.com/', 'mitraDLHs/D6sTve0YPchqR8hmmZgMJaBNyonJXetfOaIa3M9L.jpg', NULL, '2023-02-17 07:23:46'),
(17, 'CLOCC', 'https://www.cloccglobal.org/', 'mitraDLHs/3RxtlHZQ0lzbYLaHoZKkkm6HAAtCclTMhyJU2NOX.png', NULL, '2023-02-17 07:25:02'),
(18, 'EcoRanger', 'https://ecoranger.id/', 'mitraDLHs/7vmxVPVxls7cTSMiDVMsU8vBpuHJujSnQnbA2KS6.png', NULL, '2023-02-17 07:25:30'),
(19, 'Sungai Watch', 'https://sungai.watch/', 'mitraDLHs/MdUZCzLBBt6HXxRDLnYxx4CyRvgWwffnBQpbJ5YK.png', NULL, '2023-02-17 07:25:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `static_pages`
--

CREATE TABLE `static_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `variabel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `konten` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `static_pages`
--

INSERT INTO `static_pages` (`id`, `variabel`, `type`, `created_at`, `updated_at`, `konten`) VALUES
(1, 'banyuwangi-bersih', 'home', '2023-02-17 01:47:04', '2023-02-17 01:47:04', 'banyuwangi merupakan.... indah'),
(132, 'title_operasional_persampahan', 'operasional-persampahan', '2023-02-06 00:54:35', '2023-02-06 00:54:35', 'Teknis Operasional Persampahan'),
(133, 'deskripsi_operasional_persampahan', 'operasional-persampahan', '2023-02-06 00:54:35', '2023-02-17 01:12:36', '<p style=\"text-align:justify\">Dalam Program Banyuwangi Hijau, Komponen Operasional Teknis Persampahan bertanggungjawab pada pengembangan desain dan pelaksanaan operasional persampahan. Komponen ini bekerja untuk menyiapkan desain dan konstruksi fasilitas Tempat Pengolahan Sampah <em>Reduce, Reuse, Recycle</em> (TPS 3R) yang saat ini tengah dibangun di Desa Balak, Kecamatan Songgon, Banyuwangi. Selain itu, komponen ini bertanggungjawab dalam mengembangkan sistem pengumpulan sampah yang handal (yang dapat menjangkau wilayah cakupan layanan sampah, dilakukan secara rutin, dan memastikan sampah terpilah), serta menyiapkan model bisnis dan administrasi operasional di TPS 3R.</p>'),
(134, 'point1', 'operasional-persampahan', '2023-02-06 00:54:35', '2023-02-06 00:57:12', 'Desain dan konstruksi TPS 3R'),
(135, 'point2', 'operasional-persampahan', '2023-02-06 00:54:35', '2023-02-17 01:12:36', 'Pengumpulan Sampah'),
(136, 'point3', 'operasional-persampahan', '2023-02-06 00:54:35', '2023-02-17 01:12:36', 'Bisnis dan administrasi'),
(137, 'header_title', 'home', '2023-02-06 00:55:28', '2023-02-06 00:55:28', 'DLH BANYUWANGI'),
(138, 'header_logo', 'home', '2023-02-06 00:55:28', '2023-02-17 07:34:11', 'storage/static-pages/y9TiIhLFfwfCUPuJqjP8HGdo2quDnYjJi65VjHQI.png'),
(139, 'footer_logo', 'home', '2023-02-06 00:55:28', '2023-02-17 07:34:11', 'storage/static-pages/mP18GaQxsdojK3onge247PXih6AH3evw7a2KzTZQ.png'),
(140, 'footer_title', 'home', '2023-02-06 00:55:28', '2023-02-06 00:55:28', 'DINAS LINGKUNGAN HIDUP KABUPATEN BANYUWANGI'),
(141, 'footer_address', 'home', '2023-02-06 00:55:28', '2023-02-06 00:55:28', 'JALAN WIJAYA KUSUMA NO 102'),
(142, 'footer_contact', 'home', '2023-02-06 00:55:28', '2023-02-06 00:55:28', '(03333) 424113'),
(143, 'footer_youtube', 'home', '2023-02-06 00:55:28', '2023-02-06 00:55:28', 'https://www.youtube.com/@dlhbanyuwangi8131'),
(144, 'footer_facebook', 'home', '2023-02-06 00:55:28', '2023-02-06 00:55:28', 'https://www.facebook.com/@dlhbanyuwangi8131'),
(145, 'footer_instagram', 'home', '2023-02-06 00:55:28', '2023-02-06 00:55:28', 'https://www.instagram.com/@dlhbanyuwangi'),
(146, 'footer_title_bwh', 'banyuwangi-hijau', '2023-02-06 00:55:28', '2023-02-17 00:46:59', 'DINAS LINGKUNGAN HIDUP KABUPATEN BANYUWANGI'),
(147, 'footer_address_bwh', 'banyuwangi-hijau', '2023-02-06 00:55:28', '2023-02-17 01:41:45', 'JALAN WIJAYA KUSUMA NO 102'),
(148, 'footer_contact_bwh', 'banyuwangi-hijau', '2023-02-06 00:55:28', '2023-02-06 00:55:28', '(03333) 424113'),
(149, 'footer_logo_bwh', 'banyuwangi-hijau', '2023-02-06 00:55:28', '2023-02-06 00:55:28', 'vendor/images/bwh-logo.png'),
(150, 'link_instagram_bwh', 'banyuwangi-hijau', '2023-02-06 00:55:28', '2023-02-17 01:40:12', 'https://www.instagram.com/banyuwangi.hijau/'),
(151, 'link_facebook_bwh', 'banyuwangi-hijau', '2023-02-06 00:55:28', '2023-02-17 01:39:41', 'https://m.facebook.com/profile.php?id=100086582382591'),
(152, 'link_youtube_bwh', 'banyuwangi-hijau', '2023-02-06 00:55:28', '2023-02-17 01:40:12', 'https://www.youtube.com/@banyuwangihijau'),
(153, 'title_inovasi_dan_pendanaan', 'operasional-persampahan', '2023-02-06 01:02:05', '2023-02-06 01:02:05', 'Inovasi Dan Pendanaan'),
(154, 'deskripsi_inovasi_dan_pendanaan', 'operasional-persampahan', '2023-02-06 01:02:05', '2023-02-06 01:02:05', 'Data Deskripsi Tidak Ditemukan'),
(155, 'title_inovasi_dan_pendanaan', 'inovasi-pendanaan', '2023-02-06 01:03:48', '2023-02-06 01:03:48', 'Inovasi Dan Pendanaan'),
(156, 'deskripsi_inovasi_dan_pendanaan', 'inovasi-pendanaan', '2023-02-06 01:03:48', '2023-02-15 23:38:25', '<p>Dalam Program Banyuwangi Hijau, Komponen Inovasi Pendanaan bertujuan untuk mengembangkan opsi mekanisme pendanaan guna menyeimbangkan investasi belanja modal bagi infrastruktur pengelolaan sampah serta berkontribusi pada pengembangan aliran pendapatan yang stabil untuk membiayai operasional Unit Pelaksana Teknis Daerah (UPTD) melalui penjualan sampah. Komponen ini juga tengah mengambangkan pendekatan pengelolaan usaha komoditi persampahan melalui pengembangan model <em>blended finance</em> bersama Kementerian Koordinator Bidang Kemaritiman dan Investasi (Kemenkomarves), yang melibatkan kabupaten/kota lainnya.</p>'),
(157, 'point1', 'inovasi-pendanaan', '2023-02-06 01:03:48', '2023-02-06 01:03:48', 'Perdagangan Komuditas'),
(158, 'point2', 'inovasi-pendanaan', '2023-02-06 01:03:48', '2023-02-06 01:03:48', 'Sumber Pendanaan'),
(159, 'title_komunikasi_perubahan_perilaku', 'operasional-persampahan', '2023-02-06 01:09:41', '2023-02-06 01:09:41', 'Teknis Operasional Persampahan'),
(160, 'deskripsi_komunikasi_perubahan_perilaku', 'operasional-persampahan', '2023-02-06 01:09:41', '2023-02-06 01:09:41', 'Data Deskripsi Tidak Ditemukan'),
(161, 'title_komunikasi_perubahan_perilaku', 'komunikasi-perubahan-perilaku', '2023-02-06 01:11:46', '2023-02-06 01:11:46', 'KOMUNIKASI PERUBAHAN PERILAKU'),
(162, 'deskripsi_komunikasi_perubahan_perilaku', 'komunikasi-perubahan-perilaku', '2023-02-06 01:11:46', '2023-02-17 01:16:09', '<p style=\"text-align:justify\">Dalam Program Banyuwangi Hijau, Komponen Komunikasi Perubahan Perilaku bekerja melibatkan masyarakat dalam pengelolaan persampahan di wilayah Banyuwangi Hijau, mengembangkan berbagai strategi kampanye perubahan perilaku berdasaarkan hasil Analisa Studi Formatif Perilaku Pengelolaan Sampah di Tingkat Rumah Tangga, melakukan penguatan kapasitas bagi kader dan sanitarian, maupun pendamping desa, termasuk mengimplementasikan aspek pelaksanaan pengelolaan sampah dan melakukan monitoring secara berkala. Dalam kegiatannya, komponen ini bekerjasama dengan Dinas Kesehatan Kabupaten Banyuwangi untuk mengimplementasikan Pemicuan Sanitasi Total Berbasis Masyarakat (STBM) Pilar 4 sebagai bentuk edukasi pengelolaan sampah berkelanjutan di wilayah dampingan program BWH.</p>\r\n\r\n<p style=\"text-align:justify\"><tt><span dir=\"rtl\">​​​​​​</span></tt></p>\r\n\r\n<ul>\r\n</ul>'),
(163, 'point1', 'komunikasi-perubahan-perilaku', '2023-02-06 01:11:46', '2023-02-06 01:11:46', 'Pengembangan strategi'),
(164, 'point2', 'komunikasi-perubahan-perilaku', '2023-02-06 01:11:46', '2023-02-06 01:11:46', 'Penguatan kapasitas'),
(165, 'point3', 'komunikasi-perubahan-perilaku', '2023-02-06 01:11:46', '2023-02-06 01:11:46', 'Implementasi dan monitoring'),
(166, 'title_tata_kelola_dan_kelembagaan', 'tata-kelola-dan-kelembagaan', '2023-02-06 01:16:28', '2023-02-06 01:16:28', 'Tata Kelola dan Kelembagaan'),
(167, 'deskripsi_tata_kelola_dan_kelembagaan', 'tata-kelola-dan-kelembagaan', '2023-02-06 01:16:28', '2023-02-17 01:16:51', '<p style=\"text-align:justify\">Dalam Program Banyuwangi Hijau, Komponen Tata Kelola dan Kelembagaan melakukan sejumlah proses penyiapan berbagai regulasi pendukung pelayanan sampah - termasuk penentuan tarif retribusi sampah, mendorong terbentuknya kelembagaan UPTD BLUD, membangun komitmen kabupaten maupun desa dalam mendukung pengelolaan pelayanan sampah oleh Unit Pelaksana Teknis (UPT) Persampahan, serta mengadvokasi anggaran operasional persampahan untuk diusulkan dalam proses penganggaran daerah.</p>'),
(168, 'point1', 'tata-kelola-dan-kelembagaan', '2023-02-06 01:16:28', '2023-02-06 01:16:28', 'Tarif retribusi sampah'),
(169, 'point2', 'tata-kelola-dan-kelembagaan', '2023-02-06 01:16:28', '2023-02-17 01:17:16', 'Kelembagaan (UPTD BLUD)'),
(170, 'point3', 'tata-kelola-dan-kelembagaan', '2023-02-06 01:16:28', '2023-02-06 01:16:28', 'Komitmen kabupaten dan desa'),
(171, 'point4', 'tata-kelola-dan-kelembagaan', '2023-02-06 01:16:28', '2023-02-06 01:16:28', 'Dukungan pendanaan pemerintah'),
(172, 'title_tujuan', 'banyuwangi-hijau', '2023-02-06 01:26:48', '2023-02-06 01:26:48', 'TUJUAN'),
(173, 'gambar_tujuan', 'banyuwangi-hijau', '2023-02-06 01:26:48', '2023-02-06 01:26:48', 'vendor/images/bwh-logo.png'),
(174, 'deskripsi_tujuan', 'banyuwangi-hijau', '2023-02-06 01:26:48', '2023-02-17 01:07:48', '<p style=\"text-align:justify\">Secara umum, tujuan dari Program Banyuwangi Hijau adalah meningkatkan cakupan layanan persampahan yang berkelanjutan, dan memenuhi prinsip cost recovery, serta berkontribusi terhadap penurunan prevalensi stunting, melalui kemitraan multi-pihak. Dimana hal ini bisa dicapai dengan lima tujuan program, yakni:</p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\"><a href=\"https://stagingdev.skom.id/banyuwangi-hijau/tata-kelola-dan-kelembagaan\" target=\"_blank\">Memperkuat Unit Pelaksana Teknis Daerah (UPTD) Pengelolaan Sampah dan mengembangkannya menjadi UPTD &ndash; Pola Pengelolaan Keuangan Badan Layanan Umum Daerah (PPK BLUD) Persampahan.</a></li>\r\n	<li style=\"text-align:justify\"><a href=\"https://stagingdev.skom.id/banyuwangi-hijau/komunikasi-perubahan-perilaku\" target=\"_blank\">Mendorong praktik perilaku pengelolaan sampah berkelanjutan di tingkat masyarakat.</a></li>\r\n	<li style=\"text-align:justify\"><a href=\"https://stagingdev.skom.id/banyuwangi-hijau/operational-persampahan\" target=\"_blank\">Mengembangkan sistem pengelolaan sampah yang menguntungkan secara ekonomi.</a></li>\r\n	<li style=\"text-align:justify\"><a href=\"https://stagingdev.skom.id/banyuwangi-hijau/operational-persampahan\" target=\"_blank\">Mengembangkan lingkungan yang mendukung bagi keterlibatan swasta dalam investasi dan pengoperasian sistem pengelolaan sampah yang berkelanjutan.</a></li>\r\n	<li style=\"text-align:justify\"><a href=\"https://stagingdev.skom.id/banyuwangi-hijau/inovasi-pendanaan\" target=\"_blank\">Menguji coba skema inovasi pendanaan untuk persampahan.</a></li>\r\n</ul>'),
(175, 'title_tentang', 'banyuwangi-hijau', '2023-02-06 01:26:48', '2023-02-06 01:26:48', 'TENTANG'),
(176, 'gambar_tentang', 'banyuwangi-hijau', '2023-02-06 01:26:48', '2023-02-06 01:26:48', 'vendor/images/bwh-logo.png'),
(177, 'deskripsi_tentang', 'banyuwangi-hijau', '2023-02-06 01:26:48', '2023-02-17 01:08:54', '<p style=\"text-align:justify\">Program Banyuwangi Hijau (BWH) adalah inisiatif pengembangan pengelolaan sampah berkelanjutan Pemerintah Kabupaten Banyuwangi yang diluncurkan pada 21 Februari 2022. Inisiatif ini menggabungkan model pengelolaan sampah perkotaan dalam sampah sirkular dengan menyediakan solusi daur ulang yang dapat meningkatkan nilai ekonomi sampah. BWH mendorong keterlibatan multi-pihak untuk meningkatkan penyediaan layanan persampahan yang terintegrasi didukung partisipasi aktif masyarakat. Hal ini diharapkan mendorong pemulihan ekonomi lokal dan peningkatan kualitas kesehatan masyarakat, sebagaimana misi Program Banyuwangi Rebound.</p>\r\n\r\n<p style=\"text-align:justify\">BWH diselenggarakan pada periode 2022-2024 dengan menerapkan integrasi komponen program yang diarahkan untuk mendukung pencapaian target JAKSTRANAS Pengelolaan Sampah Rumah Tangga dan Sampah Sejenis Sampah Rumah Tangga tahun 2025, yakni peningkatan penanganan sampah hingga 70% dan pengurangan timbulan sampah hingga 30%. Komponen program adalah Tata Kelola dan Kelembagaan, Sistem Operasional Persampahan, Komunikasi Perubahan Perilaku, dan Inovasi Pendanaan.</p>\r\n\r\n<p style=\"text-align:justify\">Program ini merupakan kerjasama antara&nbsp;<ins><a href=\"https://banyuwangikab.go.id/\" target=\"_blank\">Pemerintah Daerah Kabupaten Banyuwangi</a></ins> dengan <a href=\"http://www.systemiq.earth/\" target=\"_blank\">Systemiq</a>&nbsp;yang&nbsp;didanai&nbsp;oleh Kerajaan&nbsp;Norwegia,<a href=\"http://www.borealisgroup.com/\"> Borealis</a>, <a href=\"https://p4gpartnerships.org/\" target=\"_blank\">P4G (Partnering for Green Growth and the&nbsp;Global Goals) </a>dan <a href=\"https://www.accenture.com/id-en\" target=\"_blank\">Accenture</a>.&nbsp;</p>'),
(178, 'title_layanan_persampahan', 'banyuwangi-hijau', '2023-02-06 01:26:48', '2023-02-06 01:26:48', 'Layanan Persampahan'),
(179, 'youtube_layanan_persampahan', 'banyuwangi-hijau', '2023-02-06 01:26:48', '2023-02-06 01:26:48', 'https://www.youtube.com/embed/JKOU6ddb4w4'),
(180, 'deskripsi_layanan_persampahan', 'banyuwangi-hijau', '2023-02-06 01:26:48', '2023-02-15 23:00:34', '<p style=\"text-align:justify\">Saat ini, Dinas Lingkungan Hidup Banyuwangi dan sektor terkait tengah menyiapkan Unit Pelaksana Teknis Daerah Pola Pengelolaan Keuangan Badan Layanan Umum Daerah (UPTD PPK BLUD) Persampahan. UPTD ini akan mengimplementasikan operasional sistem layanan sampah,dan&nbsp; menyediakan operator harian yang akan mengelola pelayanan sampah secara mandiri dan berkelanjutan di Banyuwangi.</p>'),
(181, 'footer_title', 'banyuwangi-hijau', '2023-02-06 01:26:48', '2023-02-06 01:26:48', 'DINAS LINGKUNGAN HIDUP KABUPATEN BANYUWANGI'),
(182, 'footer_address', 'banyuwangi-hijau', '2023-02-06 01:26:48', '2023-02-06 01:26:48', '-JALAN WIJAYA KUSUMA NO 102'),
(183, 'footer_contact', 'banyuwangi-hijau', '2023-02-06 01:26:48', '2023-02-06 01:26:48', '(03333) 424113'),
(184, 'footer_logo', 'banyuwangi-hijau', '2023-02-06 01:26:48', '2023-02-06 01:26:48', 'vendor/images/bwh-logo.png'),
(185, 'nama_divisi', 'banyuwangi-hijau', '2023-02-06 01:26:48', '2023-02-06 01:26:48', 'KOMPONEN PROGRAM'),
(186, 'contact_layanan_persampahan', 'banyuwangi-hijau', '2023-02-06 01:26:48', '2023-02-17 01:30:36', '085234104447'),
(187, 'title_target_program', 'home', '2023-02-15 06:02:59', '2023-02-15 06:02:59', 'TARGET PROGRAM'),
(188, 'keterangan_target_program', 'home', '2023-02-15 06:02:59', '2023-02-15 06:02:59', 'Dinas Lingkungan Hidup Kabupaten Banyuwangi'),
(189, 'sampah_harian', 'home', '2023-02-15 06:02:59', '2023-02-15 06:02:59', '-'),
(190, 'sampah_bulanan', 'home', '2023-02-15 06:02:59', '2023-02-15 06:02:59', '-'),
(191, 'sampah_tahunan', 'home', '2023-02-15 06:02:59', '2023-02-15 06:02:59', '-'),
(192, 'deskripsi_visi', 'tentang-kami', '2023-02-15 23:10:46', '2023-02-17 02:54:13', 'Terwujudnya Kabupaten Banyuwangi terbebas dari pencemaran dan kerusakan lingkungan hidup.'),
(193, 'deskripsi_misi', 'tentang-kami', '2023-02-15 23:10:46', '2023-02-17 02:54:13', 'Mengendalikan pencemaran baik tanah, udara dan air. Serta\r\nmeningkatkan kualitas sumber daya alam dan lingkungan hidup.'),
(194, 'deskripsi_tugas_pokok', 'tentang-kami', '2023-02-15 23:10:46', '2023-02-17 20:07:02', 'Dinas Lingkungan Hidup mempunyai tugas pokok melaksanakan penyusunan dan pelaksanaan kebijakan daerah di bidang lingkungan hidup'),
(195, 'deskripsi_fungsi1', 'tentang-kami', '2023-02-15 23:10:46', '2023-02-17 20:07:02', 'Perumusan kebijakan teknis di bidang lingkungan hidup'),
(196, 'deskripsi_fungsi2', 'tentang-kami', '2023-02-15 23:10:46', '2023-02-17 20:07:02', 'Pengkoordinasian penyusunan tugas di bidang lingkungan hidup'),
(197, 'deskripsi_fungsi3', 'tentang-kami', '2023-02-15 23:10:46', '2023-02-17 20:07:02', 'Pembinaan dan pelaksanaan tugas di bidang lingkungan hidup'),
(198, 'deskripsi_fungsi4', 'tentang-kami', '2023-02-15 23:10:46', '2023-02-17 20:07:02', 'Pelaksanaan tugas lain yang diberikan oleh Bupati sesuai dengan tugas dan fungsinya'),
(199, 'link_instagram', 'home', '2023-02-15 23:23:59', '2023-02-15 23:23:59', 'https://www.instagram.com/dlh.banyuwangi/'),
(200, 'link_facebook', 'home', '2023-02-15 23:23:59', '2023-02-15 23:23:59', 'https://www.facebook.com/DLHBanyuwangi/'),
(201, 'link_youtube', 'home', '2023-02-15 23:23:59', '2023-02-15 23:23:59', 'https://www.youtube.com/watch?v=eip4WZqymiY');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$9BBvE62YLLqJns/FJDA8UujgLYm0sB4IL3Vr.mlILioMuqXUVfZM2', 'admin', 'eEgPiR8sMYl9liYtMQ9VK1Oy4OKeup4jJLpwZ2PR13ox4jfS6KAlJKvcDmLs', '2023-02-17 01:47:04', '2023-02-17 01:47:04');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `agendas`
--
ALTER TABLE `agendas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `artikels`
--
ALTER TABLE `artikels`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `cerita_sukses`
--
ALTER TABLE `cerita_sukses`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dokumens`
--
ALTER TABLE `dokumens`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `galeries`
--
ALTER TABLE `galeries`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mitra_d_l_h_s`
--
ALTER TABLE `mitra_d_l_h_s`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`(191),`tokenable_id`);

--
-- Indeks untuk tabel `static_pages`
--
ALTER TABLE `static_pages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `agendas`
--
ALTER TABLE `agendas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `artikels`
--
ALTER TABLE `artikels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `cerita_sukses`
--
ALTER TABLE `cerita_sukses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
