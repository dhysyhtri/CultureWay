-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Des 2025 pada 20.56
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cultureway`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `asal` char(100) NOT NULL,
  `content` text NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `articles`
--

INSERT INTO `articles` (`id`, `image`, `judul`, `asal`, `content`, `category_id`) VALUES
(1, 'Ngaben.png', 'Ngaben', 'Bali', '', 1),
(2, 'Rambu Solo.jpeg', 'Rambu Solo', 'Toraja', '', 1),
(3, 'Kasada.jpeg', 'Kasada', 'Tengger, Jawa Timur', '', 1),
(4, 'Tabuik.jpg', 'Tabuik', 'Sumatera Barat', '', 1),
(5, 'Danau Toba.jpeg', 'Festival Danau Toba', 'Sumatra Utara', '', 2),
(7, 'Pasola.jpeg', 'Pasola', 'Sumba, NTT', '', 2),
(8, 'Tambora.jpg', 'Festival Tambora', 'Sumbawa, NTB', '', 2),
(9, 'Jaipong.jpg', 'Tari Jaipong', 'Sunda, Jawa Barat', '', 3),
(10, 'Mondotambe.jpg', 'Tari Mondotambe', 'Sulawesi Tenggara', '', 3),
(11, 'Saman.jpeg', 'Tari Saman', 'Aceh', '', 3),
(12, 'Kecak.png', 'Tari Kecak', 'Bali', '', 3),
(13, 'Gamelan.jpg', 'Gamelan', 'Jawa, Bali', '', 4),
(14, 'Angklung.jpg', 'Angklung', 'Sunda, Jawa Barat', '', 4),
(15, 'Sasando.jepg', 'Sasando', 'Pulau Rote, NTT', '', 4),
(16, 'Kolintang.jpeg', 'Kolintang', 'Minahasa, Sulawesi Utara', '', 4),
(17, 'Batik.png', 'Batik', 'Jawa', '', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `bali`
--

CREATE TABLE `bali` (
  `id` int(11) NOT NULL,
  `tempat` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `bali`
--

INSERT INTO `bali` (`id`, `tempat`, `keterangan`, `gambar`) VALUES
(1, 'Pura Ulun Danu Bratan', 'Pura indah di tepi Danau Bratan yang menjadi ikon Bali.', 'Bali Pura Ulun Danu Bratan.png'),
(2, 'Tanah Lot', 'Pura di atas batu karang yang terkenal dengan pemandangan sunset-nya.', 'Bali Tanah Lot.jpeg'),
(3, 'Ubud Monkey Forest', 'Hutan alami dengan monyet liar dan pura kuno di Ubud.', 'Bali Ubud Monkey Forest.jpg'),
(4, 'Pura Beskih', 'Pura terbesar dan terpenting di Bali yang berada di Gunung Agung.', 'Bali Pura Besakih.jpg'),
(5, 'Museum Bali', 'Museum budaya dan sejarah Bali yang terletak di Denpasar.', 'Bali Museum Bali.jpg'),
(6, 'Goa Gajah', 'Situs arkeologi dengan gua unik dan kolam pemandian kuno.', 'Bali Goa Gajah.jpg'),
(7, 'Taman Saraswati', 'Pura yang indah dengan kolam teratai dan ukiran Bali khas di Ubud.', 'Bali Taman Saraswati.jpg'),
(8, 'Pertunjukan Tari Kecak', 'Tari tradisional Bali yang biasanya digelar di tebing Uluwatu.', 'Bali Pertunjukan Tari Kecak.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `blog_posts`
--

CREATE TABLE `blog_posts` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `img_blog` varchar(255) NOT NULL,
  `isi_blog` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `blog_posts`
--

INSERT INTO `blog_posts` (`id`, `judul`, `tanggal`, `img_blog`, `isi_blog`, `created_at`) VALUES
(1, 'Pemasangan Chattra di Candi Borobudur di Tunda', '2024-12-19', 'chattra1.jpg', 'Melansir dari laman Kementerian Agama (Kemenag), penundaan ini selaras dengan hasil kajian teknis dan Detail Engineering Design (DED) yang disusun oleh tim ahli dari Badan Riset dan Inovasi Nasional (BRIN) yang menyimpulkan bahwa perlu dilakukan studi yang lebih mendalam tentang otentisitas chattra. Dengan demikian, rencana peresmian chattra pada 18 September 2024 ditunda.\r\n\r\nJuru Bicara Kemenag, Sunanto, menjelaskan jika berdasarkan hasil kajian teknis oleh pakar BRIN atas permohonan dari Bimas Buddha Kemenag, kondisi material saat ini belum memungkinkan pemasangan chattra karena kondisi batu yang antara lain tidak utuh.\r\n\r\n\"Berdasarkan hasil kajian teknis yang komprehensif, meliputi pengamatan langsung, pengukuran, pengujian, serta perhitungan dan analisis kekuatan, bahwa kondisi material chattra ada yang tidak utuh atau terbagi banyak bagian batu dan batu bahan material tidak memiliki kait antar batu. Maka, memerlukan tahapan yang harus dikoordinasikan sesuai ketentuan yang berlaku,\" jelas Sunanto dikutip dari laman Kemenag, Jumat (12/9/2024).</p>  \r\n        \r\n        <h3>Penolakan IAAI</h3>\r\n        <p>Ikatan Ahli Arkeologi Indonesia (IAAI) dilansir dari detikTravel dengan tegas menolak rencana pemasangan Chattra di Candi Borobudur. Menurut Ketua IAAI, Marsis Sutopo, kajian yang menjadi dasar pemasangan tersebut dinilai tidak memenuhi standar akademis dan melanggar prosedur hukum yang diatur dalam Undang-Undang Nomor 11 Tahun 2010 tentang Cagar Budaya.\r\n        Marsis menjelaskan bahwa pemasangan Chattra ini didasarkan pada asumsi yang tidak memiliki bukti ilmiah yang kuat. Menurut IAAI, proses kajian tidak sesuai dengan aturan yang seharusnya diterapkan dalam perubahan yang menyangkut situs cagar budaya, apalagi Borobudur adalah warisan dunia yang diakui UNESCO.</p>\r\n        \r\n        <h3>Kehilangan Status dari UNESCO</h3>\r\n        <p>Penolakan ini juga terkait dengan kekhawatiran akan status Borobudur sebagai salah satu situs warisan dunia yang terdaftar di UNESCO. Jika pemasangan chattra dilakukan tanpa prosedur yang benar dan tanpa persetujuan dari UNESCO, status Borobudur sebagai situs warisan dunia bisa terancam.\r\n        Lebih lanjut, Candi Borobudur juga dapat kehilangan autentisitas jika pemasangan chattra dilakukan tanpa kajian yang tepat. Borobudur bukan hanya sebuah bangunan cagar budaya, tetapi juga simbol nasional dan warisan sejarah. Setiap perubahan yang dilakukan pada candi harus melalui prosedur yang sangat ketat untuk menjaga keaslian bentuk dan makna sejarahnya. Pemasangan chattra, yang merupakan semacam payung hiasan yang biasa dipasang di atas stupa, menurut Marsis, tidak relevan dengan data sejarah asli yang dimiliki Borobudur.', '2024-12-26 16:31:01'),
(2, 'Mengenal Desa Adat Ratenggaro', '2024-12-06', 'Ratenggaro.jpg', 'Desa Adat Ratenggaro menyimpan beraneka macam keindahan alam dan keragaman budayanya. Lokasinya yang berada di ujung selatan Pulau Sumba menyuguhkan pesisir pantai yang indah. Berada di dekat pantai, dengan didukung rumah-rumah tradisional Desa Adat Ratenggaro yang luar biasa indahnya. \r\n         Desain arsitektur tradisional dapat terlihat dengan jelas bahkan dari jarak yang cukup jauh. Hal ini dipengaruhi oleh kepercayaan utama masyarakat Desa Adat Ratenggaro yaitu marapu. Marapu menjadi kepercayaan pemujaan terhadap para leluhur yang masih sangat dipegang teguh. \r\n         Rumah penduduk didesain dengan konsep rumah panggung dan memiliki menara atap yang menjulang tinggi. Bahkan rumah adat Ratenggaro menjadi rumah adat tertinggi di Pulau Sumba. \r\n         Menara yang menjulang tinggi tersebut merepresentasikan status sosial dan bentuk penghormatan terhadap arwah para leluhur sehingga fungsi rumah selain sebagai tempat tinggal juga berfungsi sebagai sarana pemujaan.</p>  \r\n     \r\n        <h3>Sejarah</h3>\r\n        <p>Kampung Adat Ratenggaro adalah sebuah kampung adat yang terletak di Desa Umbu Ngedo, Kecamatan Kodi Bangedo, Kabupaten Sumba Barat Daya, Provinsi Nusa Tenggara Timur. \r\n        Berada di ujung selatan dan di pesisir pantai yang indah. Desa ini berjarak dari Tambolaka, ibukota Kabupaten Sumba Barat Daya sejauh 56 kilometer. \r\n        Belum tersedia akomodasi umum yang dapat digunakan pengunjung untuk mencapai ke desa ini sehingga pengunjung harus menyewa kendaraan atau jasa travel dari Tambolaka yang berjarak sekitar 56 km ke lokasi Desa Ratenggaro. \r\n        Akses jalanan dari Tambolaka menuju Ratenggaro dapat ditempuh dalam waktu 1,5 hingga 2 jam dengan kondisi jalan beraspal yang terpelihara baik.\r\n        Kepercayaan utama masyarakat Desa adat Rateranggo adalah Marapu, yakni kegiatan pemujaan terhadap para leluhur yang masih menjadi tradisi yang dipegang teguh. Tradisi ini mempengaruhi bentuk rumah yang mereka tempati. \r\n        Rumah-rumah penduduk merupakan rumah panggung dengan menara atap yang menjulang tinggi. Tinggi menara atapnya bahkan ada yang mencapai 30 meter dan tertinggi di antara menara-menara rumah adat yang ada di Pulau Sumba. \r\n        Menara atap yang menjulang tinggi, selain melambangkan status sosial, juga sebagai bentuk penghormatan terhadap arwah para leluhur sehingga rumah selain sebagai tempat tinggal juga berfungsi sebagai sarana pemujaan.', '2024-12-26 16:56:02'),
(3, 'Wae Rebo Masuk Daftar Desa Kecil Terindah Dunia', '2024-12-26', 'waerebo.jpg', 'TimeOut, media global berbasis di Inggris, merilis daftar kota dan desa kecil terindah di dunia pada Senin (4/3/2024) lalu. \r\n        Sebanyak 16 desa dan kota dari berbagai negara masuk daftar ini. Termasuk Wae Rebo, desa di Flores, Nusa Tenggara Timur (NTT), yang menempati peringkat kedua. \r\n        TimeOut menggambarkan Wae Rebo sebagai desa dengan pemandangan indah yang tak boleh dilewatkan.</p>  \r\n        <p>Desa adat Wae Rebo telah diakui oleh UNESCO dengan Top Award of Excellence pada UNESCO Asia Pacific Heritage Awards 2012. \r\n        Penghargaan ini menegaskan komitmen desa ini dalam membangun kembali rumah adat Mbaru Niang dan memelihara tradisi budaya secara berkelanjutan', '2024-12-26 17:10:31'),
(4, 'Candi Mendut Memiliki Peran dalam Perayaan Waisak', '2024-11-03', 'candi mendut.jpg', 'Ribuan umat Buddha dari seluruh Indonesia melakukan prosesi kirab Waisak dari Candi Mendut menuju Candi Borobudur di Kabupaten Magelang, Jawa Tengah berjarak sekitar tiga kilometer. Berdasarkan pantauan di Magelang, Kamis, sebelum melakukan kirab Waisak, rombongan membacakan paritta, mantra dan sutra di altar utama Candi Mendut. Candi Mendut merupakan salah satu dari tiga candi serangkai di Magelang, Jawa Tengah, yaitu Candi Borobudur, Pawon, dan Mendut. Candi ini diduga dibangun pada abad ke-9 dan merupakan candi Buddha tertua di Indonesia.</p> \r\n        <p> Waisak merupakan momen bagi umat Buddha untuk merenungkan ajaran Buddha, seperti kasih sayang, kedamaian, dan kebijaksanaan. Waisak juga mengingatkan umat Buddha untuk hidup dalam kebajikan. \r\n        </p> \r\n        <p>Seperti yang dikutip dari buku Candi Nusantara, Candi Mendut adalah salah satu situs bersejarah yang sangat penting di Indonesia, terutama karena perannya dalam perayaan Waisak. Candi Mendut, sebuah peninggalan bersejarah yang megah, terletak di Desa Mendut, Magelang, Jawa Tengah.</p>\r\n\r\n        <h3>Isi Relief dan Arca di Candi Mendut</h3>\r\n\r\n        <p>Dilansir dari laman Perpusnes,candi berbentuk segi empat ini memiliki tinggi bangunan seluruhnya 26,40 meter, yang berdiri di atas batur setinggi sekitar 2 meter. </p>\r\n        <p>Di permukaan batur candi terdapat selasar yang cukup lebar dan dilengkapi dengan langkan. Dinding kaki Candi Mendut dihiasi dengan 31 buah panel yang memuat berbagai relief cerita, pahatan bunga dan sulur-suluran yang indah. Pada tangga menuju selasar yang terletak di sisi barat, dihiasi dengan beberapa panil berpahat yang menggambarkan berbagai cerita yang mengandung ajaran Buddha.</p>\r\n        <p>Kemudian di pintu masuk ke ruangan dalam tubuh candi dilengkapi dengan bilik penampil dihiasi dengan relief Kuwera terpahat di dinding utara dan relief Hariti terpahat di dinding selatan</p>\r\n        <p>Dinding tubuh candi dihiasi dengan relief yang berkaitan dengan kehidupan Buddha, yaitu : \r\n           <p>1.  Pada dinding barat (depan), tepatnya di sebelah utara pintu masuk, terdapat relief Sarwaniwaranawiskhambi yang digambarkan sedang berdiri di bawah sebuah payung.</p> \r\n           <p>2. Pada dinding selatan terdapat relief Bodhisattwa Avalokiteswara di mana Sang Buddha duduk di atas padmasana di bawah naungan pohon kalpataru dengan Dewi Tara bersimpuh di sebelah kanannya.</p>\r\n           <p>3. Pada dinding timur terpahat relief Bodhisatwa di mana Sang Buddha yang digambarkan sebagai sosok bertangan empat sedang berdiri di atas tempat yang bentuknya mirip lingga.</p>\r\n           <p>5. Pada dinding sisi utara terpahat relief yang menggambarkan Dewi Tara sedang duduk di atas padmasana, diapit dua orang lelaki.</p>\r\n        <p>Kemudian di dalam Candi Mendut terdapat 3 buah Arca Buddha, yaitu: <p>1. Tepat menghadap pintu terdapat Buddha Sakyamuni, yaitu Buddha sedang berkhotbah.</p> <p>2. Di sebelah kanan terdapat Arca Bodhisattva Avalokiteswara yang menghadap ke selatan, yaitu Buddha sebagai penolong manusia.</p> <p>3. Di sebelah kiri ruangan terdapat Arca Maitreya yang menghadap ke utara, yaitu Bodhisatwa pembebas manusia yang sedang duduk dengan sikap tangan simhakarnamudra, mirip sikap vitarkamudra namun jari-jarinya tertutup.', '2024-12-30 18:36:16'),
(5, 'Istana Maimun Medan Direnovasi', '2024-11-03', 'istana maimun.jpg', 'Istana Maimun di Medan, Sumatera Utara tanggal 27 Juni 2024 sedang direnovasi. Renovasi itu merupakan salah satu langkah untuk merawat istana</p>\r\n        <p>Renovasi istana yang dibangun pada 1888 seluas 2.772 meter persegi tersebut bertujuan untuk merawat bangunan bersejarah peninggalan.\r\n        Kesultanan Deli. Renovasi itu juga untuk mengingkatkan minat wisata sejarah di Kota Medan. \r\n        </p>\r\n        <p>Tak bisa dipungkiri lagi tempat ini sungguh eksotis, tapi hal-hal memperhatinkan terungkap ketika semakin dekat mengenali istana itu. Bukan saja dari eksterior, tetapi juga dari interior. Jelas terlihat situs bersejarah yang turut menjadi bangsa Indonesia ini membutuhkan perawatan lebih. Estetika keselurahan istana yang dibangun oleh Sultan Ma\'amun Al Rashid Perkasa Alamsyah pada 1887-1891 dengan arsitek Theodoor van Erp dari Belanda itu terganggu, jika tidak disebut rusak', '2024-12-30 18:36:16'),
(38, 'berita', '2025-05-24', '', 'guugugi', '2025-05-24 09:57:58'),
(39, 'Berita Borobudur', '2025-05-24', '', 'ddd', '2025-05-24 10:21:11'),
(40, 'Berita Ngaben', '2025-05-24', '', 'dkwdhwdhi', '2025-05-24 10:23:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `NAME` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `NAME`) VALUES
(1, 'Upacara Adat'),
(2, 'Festival Budaya'),
(3, 'Seni Tari'),
(4, 'Seni Musik'),
(5, 'Seni Rupa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `events`
--

INSERT INTO `events` (`id`, `name`, `location`, `date`, `keterangan`, `image`) VALUES
(9, 'Culture Seni', 'Surabaya', '2025-01-03', 'Menampilkan seni dan budaya jawa', 'upload/Poster 4.png'),
(10, 'gg', 'jji', '2025-05-31', 'juug', ''),
(11, 'Goyo', 'Bajo', '2025-05-10', 'ssss', ''),
(12, 'Seminar', 'Surabaya', '2025-05-24', 'Menarik', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jawa`
--

CREATE TABLE `jawa` (
  `id` int(11) NOT NULL,
  `tempat` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `jawa`
--

INSERT INTO `jawa` (`id`, `tempat`, `keterangan`, `gambar`) VALUES
(1, 'Keraton Yogyakarta', 'Ikon budaya Yogyakarta, tempat tinggal Sultan dan pusat tradisi Jawa. Sangat Menarik', 'Jawa Kraton Jogja.jpeg'),
(2, 'Candi Borobudur', 'Situs warisan dunia yang memukau dengan relief sejarahnya.', 'Jawa Borobudur.jpg'),
(3, 'Candi Prambanan', 'Candi Hindu terbesar di Indonesia dengan arsitektur megah.', 'Jawa Prambanan.jpg'),
(18, 'Pura Ulun Danu Bratan', 'Pura Ulun Danu', 'upload/6772bdd6ed562.png'),
(21, 'Baduy', 'budaya dan gaya hidup masyarakat Baduy, suku asli Indonesia yang masih menjaga tradisi', 'upload/683175fd62c34.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kalimantan`
--

CREATE TABLE `kalimantan` (
  `id` int(11) NOT NULL,
  `tempat` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kalimantan`
--

INSERT INTO `kalimantan` (`id`, `tempat`, `keterangan`, `gambar`) VALUES
(1, 'Desa Adat Miau Baru', 'Desa adat yang melestarikan budaya Dayak di Kutai Timur.', 'Kalimantan Desa Adat Miau Baru.jpeg'),
(2, 'Desa Budaya Pampang', 'Desa budaya di Samarinda yang menawarkan pertunjukan seni Dayak.', 'Kalimantan Desa Budaya Pampang.jpg'),
(3, 'Museum Lambung Mangkurat', 'Museum yang menyimpan koleksi bersejarah Kalimantan Selatan.', 'Kalimantan Museum Lambung Mangkurat.jpg'),
(4, 'Taman Nasional Bukit Baka Bukit Raya', 'Habitat bagi berbagai spesies langka dan merupakan situs wisata alam dan budaya.', 'Kalimantan Taman Nasional Bukit.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `maluku`
--

CREATE TABLE `maluku` (
  `id` int(11) NOT NULL,
  `tempat` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `maluku`
--

INSERT INTO `maluku` (`id`, `tempat`, `keterangan`, `gambar`) VALUES
(1, 'Benteng Nassau', 'Situs bersejarah peninggalan Belanda yang berada di Pulau Banda.', 'Maluku Benteng Nassau.jpg'),
(2, 'Benteng Belgica', 'Bangunan pertahanan megah di Banda Neira yang dikenal sebagai \"Gibraltar of the East.', 'Maluku Benteng Belgica.jpg'),
(3, 'Museum Mini Gong Neira', 'Museum kecil yang menyimpan artefak sejarah Banda Neira.', 'Maluku Museum Mini Gong Neira.jpg'),
(4, 'Masjid Tua Wapauwe', 'Masjid tertua di Maluku yang dibangun tanpa paku dengan nilai sejarah tinggi.', 'Maluku Masjid Tua Wapauwe.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nusa tenggara`
--

CREATE TABLE `nusa tenggara` (
  `id` int(11) NOT NULL,
  `tempat` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `nusa tenggara`
--

INSERT INTO `nusa tenggara` (`id`, `tempat`, `keterangan`, `gambar`) VALUES
(1, 'Pusuk Monkey Forest', 'Hutan tropis yang dihuni monyet-monyet liar, dengan panorama indah di Lombok Utara.', 'Nusa Pusuk Monkey Forest.jpeg'),
(2, 'Pusat Kerajinan Gerabah', 'Tempat pembuatan gerabah tradisional khas Lombok di Banyumulek.', 'Nusa Pusat Kerajinan Gerabah.jpeg'),
(3, 'Masjid Kuno Bayan', 'Masjid bersejarah di Lombok Utara yang menjadi saksi penyebaran Islam di wilayah ini.', 'Nusa Masjid Kuno Bayan.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `papua`
--

CREATE TABLE `papua` (
  `id` int(11) NOT NULL,
  `tempat` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `papua`
--

INSERT INTO `papua` (`id`, `tempat`, `keterangan`, `gambar`) VALUES
(1, 'Taman Imbi', 'Taman kota yang ikonik di Jayapura, tempat bersantai dan menikmati suasana kota.', 'Papua Taman Imbi.jpg'),
(2, 'Danau Sentani', 'Danau indah yang dikelilingi oleh perbukitan hijau, ideal untuk wisata alam dan budaya.', 'Papua Danau Sentani.jpeg'),
(3, 'Raja Ampat', 'Kepulauan eksotis dengan kehidupan bawah laut yang menakjubkan, surga bagi penyelam.', 'Papua Raja Ampat.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemasanan`
--

CREATE TABLE `pemasanan` (
  `id_pemesan` int(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) CHARACTER SET utf16 COLLATE utf16_general_nopad_ci NOT NULL,
  `phone_number` int(20) NOT NULL,
  `destinasi` text NOT NULL,
  `ticket_date` date NOT NULL,
  `ticket_quantity` int(50) NOT NULL,
  `ticket_price` int(100) NOT NULL,
  `total_price` int(100) NOT NULL,
  `virtual_account` varchar(1000) NOT NULL,
  `ticket_id` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pemasanan`
--

INSERT INTO `pemasanan` (`id_pemesan`, `fullname`, `email`, `phone_number`, `destinasi`, `ticket_date`, `ticket_quantity`, `ticket_price`, `total_price`, `virtual_account`, `ticket_id`) VALUES
(85, 'sisi', 'sasa@gmail.com', 9099, 'Danau Sentani, Jayapura', '2024-12-28', 1, 30000, 30000, '2142199974', 'TCKT355254'),
(86, 'abc', 'sasa@gmail.com', 8790056, 'Pulau Biak', '2024-12-28', 3, 20000, 60000, '3921203792', 'TCKT681876'),
(87, 'Dheysavina dwi syahputri', 'sabrinaaamy@gmail.com', 2147483647, 'Taman Imbi', '2024-12-14', 9, 10000, 90000, '4309656011', 'TCKT708678'),
(88, 'Sabrina Mayla', 'sabrinaaamy@gmail.com', 2147483647, 'Taman Imbi', '2024-12-31', 4, 10000, 40000, '1237214626', 'TCKT156942'),
(89, 'Sabrina Mayla', 'sabrinaaamy@gmail.com', 2147483647, 'Taman Imbi', '2025-01-02', 2, 10000, 20000, '5122112621', 'TCKT686260'),
(90, 'Sabrina Mayla', 'sabrinaaamy@gmail.com', 2147483647, 'Taman Imbi', '2025-01-03', 3, 10000, 30000, '7029376637', 'TCKT427919'),
(91, 'hvg', 'yg@mail.com', 9008, 'Taman Imbi', '2025-05-05', 3, 10000, 30000, '8401233929', 'TCKT298629'),
(92, 'Sabrina Mayla', 'sabrinaaamy@gmail.com', 2147483647, 'Taman Imbi', '2025-05-14', 3, 10000, 30000, '7774207536', 'TCKT746236'),
(93, 'Sabrina Mayla', 'sabrinaaamy@gmail.com', 2147483647, 'Taman Imbi', '2025-05-20', 2, 10000, 20000, '8256895405', 'TCKT859480'),
(94, 'Sabrina Mayla', 'sabrinaaamy@gmail.com', 2147483647, 'Taman Imbi', '2025-05-31', 2, 10000, 20000, '6225648801', 'TCKT574263'),
(95, 'Sabrina Mayla', 'sabrinaaamy@gmail.com', 2147483647, 'Taman Imbi', '2025-05-23', 7, 10000, 70000, '1530125733', 'TCKT146014'),
(96, 'Sabrina Mayla', 'sabrinaaamy@gmail.com', 2147483647, 'Taman Imbi', '2025-05-23', 3, 10000, 30000, '9587460906', 'TCKT270250'),
(97, 'Sabrina Mayla', 'sabrinaaamy@gmail.com', 2147483647, 'Taman Imbi', '2025-05-23', 3, 10000, 30000, '1466403452', 'TCKT475796');

-- --------------------------------------------------------

--
-- Struktur dari tabel `registrasi`
--

CREATE TABLE `registrasi` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('user','admin','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `registrasi`
--

INSERT INTO `registrasi` (`id`, `email`, `fullname`, `password`, `role`) VALUES
(20, 'administrator@gmail.com', 'admin', '$2y$10$qzIvOyg9dF1OG7yZkHcFsed251dUrtMyfs162Xe9fxRslPDjBr56O', 'admin'),
(26, 'gabrielriyadi715@gmail.com', 'Gabriel Alfareslanda Riyadi', '$2y$10$FAaYisxe5HPIvucexr17Yetycvyv7EwJVNeFqDnHbFaEcTPueJZSm', 'user'),
(33, 'bima.23276@mhs.unesa.ac.id', 'Bima', '$2y$10$pGhNip1fXdRCyti2/2c6X.esDzw.YlVAMyeeXf/Ji0nzy3I86a89.', 'user'),
(34, 'dheysavina.23252@mhs.unesa.ac.id', 'Dhey', '$2y$10$FdZvsQ9hrmyjuTBbyuePZu1bIfWMkklygtl8rBUDv3LatBaQBQcby', 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `saran`
--

CREATE TABLE `saran` (
  `id_komen` int(100) NOT NULL,
  `komen` text NOT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `saran`
--

INSERT INTO `saran` (`id_komen`, `komen`, `Date`) VALUES
(20, 'wisatanya sangat beragam jadi bisa mengenal budaya dan seni indonesia lebih dalam', '2024-12-16 14:23:04'),
(21, 'damnn', '2025-03-10 21:38:53'),
(23, ',,uhugu', '2025-05-05 16:39:17'),
(24, 'vcfgffg', '2025-05-24 12:59:38'),
(25, '', '2025-05-24 12:59:46'),
(26, 'sangat kerennn', '2025-05-24 13:00:54'),
(27, '', '2025-05-24 13:01:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sulawesi`
--

CREATE TABLE `sulawesi` (
  `id` int(11) NOT NULL,
  `tempat` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `sulawesi`
--

INSERT INTO `sulawesi` (`id`, `tempat`, `keterangan`, `gambar`) VALUES
(1, 'Benteng Rotterdam', 'Bangunan bersejarah peninggalan kolonial Belanda di Makassar.', 'Sulawesi Benteng Rotterdam.jpg'),
(2, 'Museum La Galigo', 'Museum yang menampilkan sejarah dan budaya Sulawesi Selatan.', 'Sulawesi Museum La Galigo.jpg'),
(3, 'Tana Toraja', 'Wilayah dengan tradisi adat yang unik dan pemandangan alam yang indah.', 'Sualwesi Tana Toraja.jpg'),
(4, 'Taman Laut Bunaken', 'Surga bawah laut yang terkenal dengan keanekaragaman biota lautnya.', 'Sulawesi Taman Bunaken.jpg'),
(5, 'Kepulauan Togean', 'Gugusan pulau eksotis dengan pantai putih dan terumbu karang yang menakjubkan.', 'Sulawesi Kepulauan Togean.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sumatra`
--

CREATE TABLE `sumatra` (
  `id` int(11) NOT NULL,
  `tempat` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `sumatra`
--

INSERT INTO `sumatra` (`id`, `tempat`, `keterangan`, `gambar`) VALUES
(1, 'Istana Maimun', 'Ikon kebanggaan Medan dengan arsitektur khas Melayu yang memukau.', 'Sumatra Istana Maimun.jpg'),
(2, 'Museum Kerajaan Sriwijaya', 'Menyimpan sejarah kejayaan Kerajaan Sriwijaya di Palembang.', 'Sumatra Museum Kerajaan Sriwijaya.jpeg'),
(3, 'Museum Tsunami Aceh', 'Monumen mengenang tragedi tsunami dan edukasi tentang mitigasi bencana.', 'Sumatra Museum Tsunami.jpeg'),
(4, 'Museum Adityawarman', 'Melestarikan budaya Minangkabau dengan koleksi bersejarah.', 'Sumatra Museum Adityawarman.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indeks untuk tabel `bali`
--
ALTER TABLE `bali`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jawa`
--
ALTER TABLE `jawa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kalimantan`
--
ALTER TABLE `kalimantan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `maluku`
--
ALTER TABLE `maluku`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `nusa tenggara`
--
ALTER TABLE `nusa tenggara`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `papua`
--
ALTER TABLE `papua`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pemasanan`
--
ALTER TABLE `pemasanan`
  ADD PRIMARY KEY (`id_pemesan`);

--
-- Indeks untuk tabel `registrasi`
--
ALTER TABLE `registrasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `saran`
--
ALTER TABLE `saran`
  ADD PRIMARY KEY (`id_komen`);

--
-- Indeks untuk tabel `sulawesi`
--
ALTER TABLE `sulawesi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sumatra`
--
ALTER TABLE `sumatra`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `bali`
--
ALTER TABLE `bali`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `jawa`
--
ALTER TABLE `jawa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `kalimantan`
--
ALTER TABLE `kalimantan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `maluku`
--
ALTER TABLE `maluku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `nusa tenggara`
--
ALTER TABLE `nusa tenggara`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `papua`
--
ALTER TABLE `papua`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pemasanan`
--
ALTER TABLE `pemasanan`
  MODIFY `id_pemesan` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT untuk tabel `registrasi`
--
ALTER TABLE `registrasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT untuk tabel `saran`
--
ALTER TABLE `saran`
  MODIFY `id_komen` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `sulawesi`
--
ALTER TABLE `sulawesi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `sumatra`
--
ALTER TABLE `sumatra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
