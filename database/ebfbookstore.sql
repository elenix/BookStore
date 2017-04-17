-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2014 at 10:46 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tokobukudb`
--

-- --------------------------------------------------------

--
-- Table structure for table `bukutbl`
--

CREATE TABLE IF NOT EXISTS `booktbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `book_code` varchar(10) NOT NULL,
  `book_title` varchar(100) NOT NULL,
  `author` varchar(35) NOT NULL,
  `price` int(11) NOT NULL,
  `description` text NOT NULL,
  `rating` int(11) NOT NULL,
  `category_code` varchar(10) NOT NULL,
  `cover` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `bukutbl`
--

INSERT INTO `booktbl` (`id`, `book_code`, `book_title`, `author`, `price`, `description`, `rating`, `category_code`, `cover`) VALUES
(1, 'B-1', 'Pemrograman Database Dengan Visual Basic 2010', 'Muhammad Sadeli', 45000, 'Buku ini mengajarkan bagaimana cara sederhana membangun program database menggunakan database MySQL, dan bahasa pemrograman Visual Basic 2010. Buku ini dirancang secara sistematis dan bertahap, untuk bab pertama Anda akan diajarkan cara menginstall web server Xampp, dan pengaturan lainnya.', 5, 'K-2', 'B-1.jpg'),
(2, 'B-2', 'Toko Baju Online Dengan PHP & MySQL', 'Muhammad Sadeli', 47500, 'Sebelumnya penulis telah membuat buku yang membahas bagaimana cara membuat toko online dengan php dan mysql. Dan dikesempatan yang kedua ini penulis kembali membahas toko online tapi kali ini lebih fokus ke toko baju, yang akan mengajarkan Anda cara membuat toko baju online dengan php dan mysql serta bantuan software Adobe Dreamweaver CS 6 dengan mudah', 5, 'K-2', 'B-2.jpg'),
(3, 'B-3', '20 Manipulasi Foto edisi Foto Pribadi Photoshop CS6', 'Fandi', 48500, '20 Manipulasi Foto edisi Foto Pribadi Photoshop CS6 merupakan edisi ke-2 yang menyajikan 20 manipulasi baru yang dibagi menjadi 4 Bab yaitu Stunt Master, City Star, It''s Me Again dan Animasi.', 5, 'K-1', 'B-3.jpg'),
(4, 'B-4', '7 Jam Belajar Interaktif Word 2013 untuk Orang Awa', 'Dwi Ninggar', 52500, 'Word 2013 adalah program pengolah kata canggih versi terbaru yang membantu Anda membuat dokumen pribadi maupun dokumen bisnis dengan cepat dan efisien. Dilengkapi dengan fitur - fitur baru seperti mengedit dokumen pdf, membuat bookmark otomatis, reply comment dan fitur baru lainnya.\r\n', 4, 'K-3', 'B-4.jpg'),
(5, 'B-5', '88 Trik Tersembunyi Windows 8', 'Irawan', 53500, 'Windows 8 adalah sistem operasi terbaru dari Microsoft saat ini. Sistem operasi ini dirilis dengan banyak perubahan dari generasi pendahulunya, Windows 7. Sebagai sistem operasi terbaru, windows 8 tentu saja telah disertai perbaikan dan penyempurnaan beberapa kekurangan dari versi sebelumnya.', 5, 'K-4', 'B-5.jpg'),
(6, 'B-6', 'Jaringan Komputer untuk Orang Awam Edisi Ke-2', 'Irawan', 53500, 'Kata-kata "Komputer" bukan hal yang asing lagi di telinga kita. Komputer ada di mana-mana, di kantor, kampus, rumah sakit semuanya menggunakan komputer. Tanpa Anda sadari, saat ini komputer sudah menjadi kebutuhan utama dan menjadi bagian dari kehidupan sehari-hari Anda. Seiring perkembangan zaman, komputer yang tadinya berdiri sendiri, kini bisa saling berhubungan dan bekerja bersamaan. Metode ini disebut sebagai jaringan, atau dikenal dengan istilah "jaringan komputer".', 0, 'K-5', 'B-6.jpg'),
(7, 'B-7', 'Photoshop CS6 untuk Fotografi Digital', 'Fandi', 49500, 'Perkembangan teknologi kamera saat ini sudah semakin pesat, tidak hanya untuk kamera saku atau profesional, ponsel pun sudah dilengkapi kamera yang sangat mumpuni untuk menghasilkan gambar tajam dengan resolusi yang besar, belum lagi ditambah fitur editing dan aplikasi pendukung lainnya membuat kita semakin mudah untuk menjadi seorang fotografer atau editor foto.', 4, 'K-1', 'B-7.jpg'),
(8, 'B-8', 'Pemrograman Database dengan Java', 'Irawan', 53500, 'Java merupakan bahasa pemrograman yang "portabel", sekali compile bisa jalan di mana saja. Hal ini membuat java menjadi bahasa favorit untuk pengembangan software yang dijalankan pada perangkat portabel seperti smartphone.', 5, 'K-2', 'B-8.jpg'),
(9, 'B-9', '7 Jam Belajar Interaktif Excel 2013 untuk Orang Aw', 'Dwi Ninggar', 49500, 'Microsoft telah merilis versi terbaru program Spreadsheet yang sangat populer dan paling banyak digunakan yaitu Microsoft Excel 2013. Excel 2013 hadir dengan beragam fitur baru yang canggih untuk membuat pekerjaan menjadi lebih cepat, lebih mudah dengan hasil yang profesional. Seperti fitur Flash Fill, Quick Analysis Tool, media penyimpanan SkyDrive, fungsi-fungsi baru dan banyak lagi fitur baru lainnya.', 0, 'K-3', 'B-9.jpg'),
(10, 'B-10', 'Windows 8 untuk Orang Awam', 'Irawan', 48500, 'Windows 8 adalah sistem operasi terbaru dari Microsoft saat ini. Sistem operasi ini dirilis dengan banyak perubahan dari generasi pendahulunya, yang tentu saja disertai perbaikan dan penyempurnaan beberapa kekurangan dari versi sebelumnya.', 4, 'K-4', 'B-10.jpg'),
(11, 'B-11', 'Membuat Aplikasi Android untuk Orang Awam', 'Irawan', 52500, 'Android adalah sistem operasi untuk perangkat mobile yang bersifat "open source". Kemudahan mendapatkan aplikasi, serta dukungan komunitas di dunia maya membuat perangkat android menjadi pilihan banyak penggila smartphone.', 4, 'K-2', 'B-11.jpg'),
(12, 'B-12', 'Jaringan Komputer untuk Orang Awam', 'Wahidin', 39500, 'Saat ini siapa yang tidak kenal komputer ?, hampir semua orang mengenalnya, meskipun ada sebagian yang hanya sebatas mengenal dan belum sempat untuk memanfaatkannya. Diluar itu semua, bagi kalangan akademisi, mahasiswa, pelajar, karyawan dan lain-lain, komputer sudah menjadi kebutuhan untuk menunjang efektifitas dan efesiensi kerja sehari-hari. Tetapi jika ditanyakan bagaimana membuat komputer-komputer itu dapat saling berhubungan membentuk sebuah jaringan?, tidak semua para pengguna komputer dapat melakukannya dengan alasan klasik SULIT, walaupun tidak sedikit bahan bacaan yang mengulas masalah ini. Namun referensi tentang jaringan banyak bersifat teoritis sehingga para pembaca hanya tahu tentang peralatan jaringan tanpa tahu bagaimana menggunakannya. Hal ini yang membuat para pengguna komputer merasa sulit untuk mempelajari dan membangun sebuah jaringan.', 3, 'K-5', 'B-12.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kategoritbl`
--

CREATE TABLE IF NOT EXISTS `categorytbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_code` varchar(10) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `kategoritbl`
--

INSERT INTO `categorytbl` (`id`, `category_code`, `category_name`) VALUES
(1, 'K-1', 'Design Grafis'),
(2, 'K-2', 'Pemrograman'),
(3, 'K-3', 'Office'),
(4, 'K-4', 'Sistem Operasi (OS)'),
(5, 'K-5', 'Jaringan');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggantbl`
--

CREATE TABLE IF NOT EXISTS `customertbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `telephone` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `pelanggantbl`
--

INSERT INTO `customertbl` (`id`, `name`, `address`, `email`, `telephone`) VALUES
(1, 'El', 'Johor', 'mael77enix@gmail.com', '0711010101'), (2, 'Besem', 'Arab', 'baseemhabibiyamaulana@gmail.com', '0711010101'), (3, 'Fiey', 'Kelate', 'FieyKerabu@gmail.com', '0711010101'), (4, 'Muhammad Sadeli', 'Palembang', 'muhammad.sadeli@gmail.com', '0711010101');

-- --------------------------------------------------------

--
-- Table structure for table `saran_kritiktbl`
--

CREATE TABLE IF NOT EXISTS `suggestion_advicetbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `saran_kritiktbl`
--

INSERT INTO `suggestion_advicetbl` (`id`, `name`, `email`, `date`, `message`) VALUES
(1, 'El', 'mael77enix@gmail.com', '2014-08-08', 'Toko Buku Online dengan Android'), (2, 'Baseem', 'baseemkirtana@gmail.com', '2014-08-08', 'Toko Buku Online dengan Android'), (3, 'Fiey', 'fieykepok@gmail.com', '2014-08-08', 'Toko Buku Online dengan Android');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_jualtbl`
--

CREATE TABLE IF NOT EXISTS `sale_transactiontbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `total` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `transaksi_jualtbl`
--

INSERT INTO `sale_transactiontbl` (`id`, `email`, `date`, `total`, `status`) VALUES
(1, 'muhammad.sadeli@gmail.com', '2014-09-04', 777700, 0), (2, 'baseemkirtana@gmail.com@gmail.com', '2014-09-04', 153500, 0),(3, 'fieykepok@gmail.com', '2014-09-04', 153500, 0);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_jual_rincitbl`
--

CREATE TABLE IF NOT EXISTS `detail_sale_transactiontbl` (
  `id` int(15) NOT NULL,
  `book_code` varchar(15) NOT NULL,
  `price` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi_jual_rincitbl`
--

INSERT INTO `detail_sale_transactiontbl` (`id`, `book_code`, `price`, `total`, `subtotal`) VALUES
(1, 'B-4', 52500, 1, 52500),
(1, 'B-2', 47500, 1, 47500),
(1, 'B-5', 53500, 1, 53500);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
