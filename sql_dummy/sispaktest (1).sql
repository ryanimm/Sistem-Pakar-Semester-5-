-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2023 at 08:55 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sispaktest`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'tesadmin2', 'tesadmin222', 'admin'),
(4, 'adminbarulaporan', '123456', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `admin_key`
--

CREATE TABLE `admin_key` (
  `id` int(11) NOT NULL,
  `admin_key` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_key`
--

INSERT INTO `admin_key` (`id`, `admin_key`) VALUES
(1, 'kunciadminrahasia1'),
(2, 'rahasiadongz');

-- --------------------------------------------------------

--
-- Table structure for table `basis_pengetahuan`
--

CREATE TABLE `basis_pengetahuan` (
  `kode_pengetahuan` int(11) NOT NULL,
  `kode_penyakit` int(11) NOT NULL,
  `kode_gejala` int(11) NOT NULL,
  `mb` double(11,1) NOT NULL,
  `md` double(11,1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `basis_pengetahuan`
--

INSERT INTO `basis_pengetahuan` (`kode_pengetahuan`, `kode_penyakit`, `kode_gejala`, `mb`, `md`) VALUES
(1, 1, 1, 0.7, 0.2),
(2, 1, 2, 0.7, 0.2),
(3, 1, 3, 0.6, 0.2),
(4, 1, 4, 0.6, 0.2),
(5, 1, 5, 0.4, 0.1),
(6, 1, 6, 0.4, 0.2),
(7, 1, 7, 0.4, 0.1),
(8, 1, 8, 0.6, 0.4),
(9, 2, 2, 0.6, 0.2),
(10, 2, 5, 0.3, 0.1),
(11, 2, 6, 0.4, 0.1),
(12, 2, 7, 0.3, 0.1),
(13, 2, 9, 0.6, 0.2),
(14, 2, 10, 0.7, 0.3),
(15, 3, 10, 0.8, 0.3),
(16, 3, 11, 0.6, 0.2),
(17, 3, 12, 0.8, 0.2),
(18, 3, 13, 0.8, 0.2),
(19, 3, 16, 0.8, 0.1),
(20, 3, 39, 0.8, 0.1),
(21, 3, 40, 0.9, 0.1),
(22, 4, 11, 0.7, 0.1),
(23, 4, 14, 0.8, 0.1),
(24, 4, 15, 0.6, 0.1),
(25, 4, 16, 0.8, 0.1),
(26, 4, 17, 0.6, 0.1),
(27, 4, 18, 0.6, 0.1),
(28, 4, 19, 0.4, 0.1),
(29, 4, 41, 0.6, 0.1),
(30, 5, 2, 0.5, 0.4),
(31, 5, 3, 0.9, 0.2),
(32, 5, 4, 0.7, 0.2),
(33, 5, 6, 0.6, 0.4),
(34, 5, 20, 0.8, 0.2),
(35, 5, 21, 0.5, 0.2),
(36, 5, 22, 0.7, 0.2),
(37, 5, 23, 0.5, 0.2),
(38, 5, 42, 0.5, 0.2),
(39, 6, 6, 0.5, 0.2),
(40, 6, 11, 0.6, 0.2),
(41, 6, 24, 0.7, 0.4),
(42, 6, 25, 0.8, 0.2),
(43, 6, 26, 0.9, 0.1),
(44, 6, 27, 0.7, 0.3),
(45, 6, 28, 0.5, 0.2),
(46, 6, 43, 0.7, 0.1),
(47, 6, 44, 0.6, 0.1),
(48, 7, 2, 0.5, 0.4),
(49, 7, 11, 0.6, 0.4),
(50, 7, 29, 0.4, 0.3),
(51, 7, 30, 0.6, 0.3),
(52, 7, 31, 0.5, 0.2),
(53, 7, 32, 0.8, 0.2),
(54, 7, 33, 0.8, 0.2),
(55, 7, 45, 0.8, 0.2),
(56, 7, 46, 0.7, 0.2),
(57, 8, 3, 0.7, 0.2),
(58, 8, 6, 0.4, 0.2),
(59, 8, 20, 0.7, 0.2),
(60, 8, 22, 0.7, 0.2),
(61, 8, 34, 0.6, 0.2),
(62, 8, 35, 0.9, 0.1),
(63, 8, 36, 0.8, 0.2),
(64, 8, 37, 0.6, 0.2),
(65, 8, 38, 0.8, 0.1);

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `nama_berita` varchar(255) DEFAULT NULL,
  `keterangan_berita` text DEFAULT NULL,
  `keterangan_gambar` varchar(255) DEFAULT NULL,
  `gambar_berita` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `nama_berita`, `keterangan_berita`, `keterangan_gambar`, `gambar_berita`) VALUES
(1, 'Pentingnya Mengajarkan Kesehatan Gigi dan Mulut pada Anak', 'Menjaga kesehatan anak secara keseluruhan adalah hal yang penting dilakukan, termasuk kesehatan gigi dan mulut, dengan menjaga kesehatan gigi dan mulut sejak dini merupakan faktor penting dalam pertumbuhan dan perkembangan anak itu sendiri.\r\n\r\nPengenalan dan perawatan gigi secara dini adalah sangat penting, mengingat banyak anak dengan tingkat frekwensi karies atau lubang yang cukup tinggi masih banyak yang belum tertangani dengan benar.\r\n\r\nBanyak orangtua yang menganggap bahwa menyikat gigi saja sudah cukup, memang  rutin menyikat gigi bisa menjadi salah satu cara untuk menjaga kesehatan gigi dan mulut. Namun perlu diketahui, hal itu saja tidak cukup, apalagi pada anak-anak. Rutinitas menggosok gigi, membersihkan rongga mulut menggunakan obat kumur, dan menggunakan benang gigi ternyata masih belum efektif untuk menghindari gangguan yang terjadi pada gigi dan mulut.\r\n\r\nMulut bukan sekedar untuk pintu  masuknya makanan dan minuman tetapi fungsi mulut lebih dari itu dan tidak banyak orang menyadari besarnya peranan mulut bagi kesehatan dan kesejahteraan seseorang.\r\n\r\nMenjaga kesehatan mulut dan gigi adalah salah satu kebiasaan baik yang harus diajarkan sejak kecil. Dengan begitu, hal ini bisa menjadi kebiasaan dan membuat anak memiliki kesadaran yang tinggi untuk melakukan hal tersebut seumur hidupnya. Sehinga  kebiasaan ini membantu mencegah karies dan penyakit periodontal seiring bertambahnya usia\r\n\r\nPeran serta  orang tua sangat diperlukan di dalam membimbing, memberikan pengertian, mengingatkan dan menyediakan fasilitas kepada anak agar anak dapat memelihara kebersihan gigi dan mulutnya, karena dengan terpeliharanya kesehatan gigi dan mulut dapat membuat anak –anak makan dengan nyaman dan bicara dengan lancar.\r\n\r\nMengingat pentinganya kesehatan gigi dan mulut ini berikut ada tips yang bisa orang tua lakukan untuk membantu anak menjaga kesehatan gigi dan mulutnya:\r\n\r\n1.  Menjelaskan pentingnya menjaga kesehatan gigi dan mulut denan membaca buku tentunya dengan cerita yang menarik.\r\n2.  Menggunakan kartun dan video dengan topik kesehatan gigi dan mulut\r\n3.  Memutar lagu selama 2 (dua)  menit saat menggosok gigi\r\n4.  Mengajak anak untuk memilih sikat dan pasta giginya ( perlu dipastikan sesuai dengan usia anak)\r\n5.  Menggosok gigi bersama\r\n6.  Memantau kesehatan gigi dan mulutnya dengan membuat kalender dan menempelkan stiker yang lucu di kolom kalender   \r\n7.  Memberikan penghargaan atau hadiah.', 'Penting untuk mengajarkan anak untuk merawat kesehatan gigi sejak dini.', '263-shutterstock_228340486resize.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE `gejala` (
  `kode_gejala` int(11) NOT NULL,
  `nama_gejala` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`kode_gejala`, `nama_gejala`) VALUES
(1, 'Pembengkakan gusi di bagian samping disertai nanah'),
(2, 'Gigi terasa sakit ketika mengunyah dan timbul rasa nyeri'),
(3, 'Gusi kemerahan'),
(4, 'Gusi terasa lunak'),
(5, 'Pembesaran kelenjar getah bening di leher'),
(6, 'Bau mulut yang tidak sedap'),
(7, 'Demam dan merasa tidak enak badan'),
(8, 'Salah satu gigi yang terlibat mengalami kegoyangan'),
(9, 'Pebengkakan pada bagian akar gigi (bagian dalam gusi) sehingga gigi terasa timbul'),
(10, 'Terdapat karies gigi'),
(11, 'Gigi terasa ngilu dan lebih sensitif'),
(12, 'Bentuk gigi tampak terkikis atau memendek'),
(13, 'Akar gigi yang terekspos (dentin) sensitif terhadap panas dan dingin akibat resesi gusi'),
(14, 'Menggeretakkan atau mengerat gigi saat tidur'),
(15, 'Gigi rata, retak, longgar atau goyang'),
(16, 'Lapisan luar gigi rusak dan mengekspos lapisan dalam gigi'),
(17, 'Otot rahang lelah atau kencang'),
(18, 'Sakit rahang, telinga, kepala dari pelipis'),
(19, 'Sering pusing'),
(20, 'Gusi bengkak atau besar karena cairan yang terakumulasi'),
(21, 'Gusi menyusut sehingga akar gigi terlihat'),
(22, 'Gusi mudah berdarah saat sikat gigi atau flossing (menggunakan benang dental)'),
(23, 'Gusi terlihat mengkilat/licin'),
(24, 'Sakit gigi ketika diketuk/perkusi'),
(25, 'Nyeri ringan hingga berat sampai dikepala saat mengonsumsi makanan manis, panas, dingin, pedas, dan asam'),
(26, 'Lubang yang terlihat pada gigi'),
(27, 'Noda berwarna cokelat kehitaman pada permukaan gigi'),
(28, 'Rasa tidak enak di mulut'),
(29, 'Gusi bengkak di sekitar gigi yang patah'),
(30, 'Rasa nyeri yang bisa muncul dan hilang tiba-tiba'),
(31, 'Muncul rasa nyeri di sekitar gusi dan gigi, tapi tidak jelas sumbernya'),
(32, 'Terdapat bagian gigi yang hilang'),
(33, 'Riwayat terbentur, jatuh, atau menggigit benda/makanan yang keras'),
(34, 'Gusi yang nyeri saat disentuh'),
(35, 'Tinggi gusi berkurang (resesi) sehingga membuat akar gigi terlihat atau gigi terlihat lebih panjang'),
(36, 'Terjadi penurunan tulang pada daerah yang terletak diantara gigi(interdental)'),
(37, 'Gigi goyang (mengganggu saat digunakan untuk mengunyah)'),
(38, 'Penumpukan plak dan karang gigi pada gigi'),
(39, 'Terdapat cekungan pada permukaan gigi (dekat gusi bagian enamel) yang berwarna kecoklatan'),
(40, 'Riwayat cara menyikat gigi yang salah'),
(41, 'Nyeri pada sendi rahang dan terdapat bunyi \"clicking\" saat membuka atau menutup mulut'),
(42, 'Terdapat kondisi umum yang menyertai seperti sedang menstruasi, hamil, atau penyakit kelainan darah'),
(43, 'Riwayat nyeri saat makanan masuk atau menyangkut'),
(44, 'Terdapat bagian gigi yang sedikit tajam karena pecah akibat berlubang'),
(45, 'Terdapat bagian permukaan gigi yang retak'),
(46, 'Terdapat permukaan gigi yang tajam sehingga menyebabkan trauma pada jaringan lunak (Sariawan)');

-- --------------------------------------------------------

--
-- Table structure for table `hasil`
--

CREATE TABLE `hasil` (
  `id_hasil` int(11) NOT NULL,
  `tanggal` varchar(50) NOT NULL DEFAULT '0',
  `penyakit` text NOT NULL,
  `gejala` text NOT NULL,
  `hasil_id` int(11) NOT NULL,
  `hasil_nilai` varchar(16) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hasil`
--

INSERT INTO `hasil` (`id_hasil`, `tanggal`, `penyakit`, `gejala`, `hasil_id`, `hasil_nilai`) VALUES
(1, '2023-01-09 14:02:58', 'a:2:{i:1;s:6:\"0.8500\";i:2;s:6:\"0.4000\";}', 'a:3:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";}', 1, '0.8500'),
(2, '2023-01-09 14:03:15', 'a:2:{i:1;s:6:\"0.9370\";i:2;s:6:\"0.5200\";}', 'a:5:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";i:4;s:1:\"1\";i:5;s:1:\"1\";}', 1, '0.9370'),
(3, '2023-01-09 14:03:23', 'a:2:{i:1;s:6:\"0.9559\";i:2;s:6:\"0.6160\";}', 'a:6:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";i:4;s:1:\"1\";i:5;s:1:\"1\";i:7;s:1:\"1\";}', 1, '0.9559'),
(4, '2023-01-09 14:03:51', 'a:2:{i:1;s:6:\"0.9718\";i:2;s:6:\"0.7312\";}', 'a:8:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";i:4;s:1:\"1\";i:5;s:1:\"1\";i:6;s:1:\"1\";i:7;s:1:\"1\";i:8;s:1:\"1\";}', 1, '0.9718'),
(5, '2023-01-09 14:05:25', 'a:2:{i:1;s:6:\"0.9718\";i:2;s:6:\"0.7742\";}', 'a:9:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";i:4;s:1:\"1\";i:5;s:1:\"1\";i:6;s:1:\"1\";i:7;s:1:\"1\";i:8;s:1:\"1\";i:10;s:1:\"4\";}', 1, '0.9718'),
(6, '2023-01-09 14:05:50', 'a:2:{i:1;s:6:\"0.9718\";i:2;s:6:\"0.8645\";}', 'a:10:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";i:4;s:1:\"1\";i:5;s:1:\"1\";i:6;s:1:\"1\";i:7;s:1:\"1\";i:8;s:1:\"1\";i:9;s:1:\"1\";i:10;s:1:\"4\";}', 1, '0.9718'),
(7, '2023-01-09 14:06:07', 'a:2:{i:1;s:6:\"0.8500\";i:2;s:6:\"0.6400\";}', 'a:4:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";i:10;s:1:\"1\";}', 1, '0.8500'),
(8, '2023-01-09 14:06:33', 'a:2:{i:1;s:6:\"0.8500\";i:2;s:6:\"0.7552\";}', 'a:5:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";i:9;s:1:\"2\";i:10;s:1:\"1\";}', 1, '0.8500'),
(9, '2023-01-09 14:27:43', 'a:5:{i:1;s:6:\"0.8500\";i:5;s:6:\"0.7300\";i:8;s:6:\"0.5000\";i:2;s:6:\"0.4000\";i:7;s:6:\"0.1000\";}', 'a:3:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";}', 1, '0.8500'),
(10, '2023-01-10 20:45:33', 'a:2:{i:4;s:6:\"0.8500\";i:1;s:6:\"0.5000\";}', 'a:3:{i:1;s:1:\"1\";i:14;s:1:\"1\";i:15;s:1:\"1\";}', 4, '0.8500'),
(11, '2023-01-10 20:45:46', 'a:3:{i:2;s:6:\"0.6400\";i:3;s:6:\"0.5000\";i:1;s:6:\"0.2000\";}', 'a:3:{i:8;s:1:\"1\";i:9;s:1:\"1\";i:10;s:1:\"1\";}', 2, '0.6400'),
(12, '2023-01-10 20:46:06', 'a:5:{i:1;s:6:\"0.9100\";i:5;s:6:\"0.8650\";i:8;s:6:\"0.5000\";i:2;s:6:\"0.4000\";i:7;s:6:\"0.1000\";}', 'a:4:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";i:4;s:1:\"1\";}', 1, '0.9100'),
(13, '2023-01-10 23:16:10', 'a:5:{i:1;s:6:\"0.9100\";i:5;s:6:\"0.8650\";i:8;s:6:\"0.5000\";i:2;s:6:\"0.4000\";i:7;s:6:\"0.1000\";}', 'a:4:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";i:4;s:1:\"1\";}', 1, '0.9100'),
(14, '2023-01-10 23:17:29', 'a:5:{i:1;s:6:\"0.7500\";i:8;s:6:\"0.5000\";i:5;s:6:\"0.4600\";i:2;s:6:\"0.4000\";i:7;s:6:\"0.1000\";}', 'a:4:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";i:4;s:1:\"9\";}', 1, '0.7500'),
(15, '2023-01-10 23:24:04', 'a:5:{i:1;s:6:\"1.0000\";i:5;s:6:\"0.8650\";i:2;s:6:\"0.5200\";i:8;s:6:\"0.5000\";i:7;s:6:\"0.1000\";}', 'a:5:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";i:4;s:1:\"1\";i:5;s:1:\"1\";}', 1, '1.0000'),
(16, '2023-01-11 11:27:53', 'a:5:{i:1;s:6:\"0.9100\";i:5;s:6:\"0.8650\";i:8;s:6:\"0.5000\";i:2;s:6:\"0.4000\";i:7;s:6:\"0.1000\";}', 'a:4:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";i:4;s:1:\"1\";}', 1, '0.9100'),
(17, '2023-01-11 14:11:31', 'a:5:{i:1;s:6:\"0.9370\";i:5;s:6:\"0.8650\";i:2;s:6:\"0.5200\";i:8;s:6:\"0.5000\";i:7;s:6:\"0.1000\";}', 'a:5:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";i:4;s:1:\"1\";i:5;s:1:\"1\";}', 1, '0.9370'),
(18, '2023-01-11 14:30:28', 'a:1:{i:7;s:6:\"0.5000\";}', 'a:1:{i:46;s:1:\"1\";}', 7, '0.5000'),
(19, '2023-01-11 16:20:31', 'a:5:{i:1;s:6:\"0.9100\";i:5;s:6:\"0.8650\";i:8;s:6:\"0.5000\";i:2;s:6:\"0.4000\";i:7;s:6:\"0.1000\";}', 'a:4:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";i:4;s:1:\"1\";}', 1, '0.9100'),
(20, '2023-01-12 13:26:02', 'a:5:{i:1;s:6:\"0.9100\";i:5;s:6:\"0.8650\";i:8;s:6:\"0.5000\";i:2;s:6:\"0.4000\";i:7;s:6:\"0.1000\";}', 'a:4:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";i:4;s:1:\"1\";}', 1, '0.9100'),
(21, '2023-01-12 13:32:06', 'a:5:{i:1;s:6:\"0.9100\";i:5;s:6:\"0.8650\";i:8;s:6:\"0.5000\";i:2;s:6:\"0.4000\";i:7;s:6:\"0.1000\";}', 'a:4:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";i:4;s:1:\"1\";}', 1, '0.9100'),
(22, '2023-01-12 14:59:45', 'a:6:{i:1;s:6:\"0.9718\";i:5;s:6:\"0.8920\";i:2;s:6:\"0.7312\";i:8;s:6:\"0.6000\";i:6;s:6:\"0.3000\";i:7;s:6:\"0.1000\";}', 'a:8:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";i:4;s:1:\"1\";i:5;s:1:\"1\";i:6;s:1:\"1\";i:7;s:1:\"1\";i:8;s:1:\"1\";}', 1, '0.9718'),
(23, '2023-01-12 15:05:24', 'a:4:{i:1;s:6:\"0.7500\";i:2;s:6:\"0.4000\";i:5;s:6:\"0.1000\";i:7;s:6:\"0.1000\";}', 'a:2:{i:1;s:1:\"1\";i:2;s:1:\"1\";}', 1, '0.7500'),
(24, '2023-01-12 15:05:47', 'a:5:{i:1;s:6:\"0.9100\";i:5;s:6:\"0.8650\";i:8;s:6:\"0.5000\";i:2;s:6:\"0.4000\";i:7;s:6:\"0.1000\";}', 'a:4:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";i:4;s:1:\"1\";}', 1, '0.9100'),
(25, '2023-01-12 15:06:39', 'a:5:{i:1;s:6:\"0.9100\";i:5;s:6:\"0.8650\";i:8;s:6:\"0.5000\";i:2;s:6:\"0.4000\";i:7;s:6:\"0.1000\";}', 'a:4:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";i:4;s:1:\"1\";}', 1, '0.9100'),
(26, '2023-01-12 15:07:06', 'a:0:{}', 'a:0:{}', 0, ''),
(27, '2023-01-13 10:44:17', 'a:0:{}', 'a:1:{i:1;s:1:\"5\";}', 0, ''),
(28, '2023-01-13 10:44:21', 'a:1:{i:1;s:6:\"0.5000\";}', 'a:1:{i:1;s:1:\"1\";}', 1, '0.5000'),
(29, '2023-01-13 10:44:25', 'a:4:{i:1;s:6:\"0.7500\";i:2;s:6:\"0.4000\";i:5;s:6:\"0.1000\";i:7;s:6:\"0.1000\";}', 'a:2:{i:1;s:1:\"1\";i:2;s:1:\"1\";}', 1, '0.7500'),
(30, '2023-01-13 10:44:29', 'a:5:{i:1;s:6:\"0.8500\";i:5;s:6:\"0.7300\";i:8;s:6:\"0.5000\";i:2;s:6:\"0.4000\";i:7;s:6:\"0.1000\";}', 'a:3:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";}', 1, '0.8500'),
(31, '2023-01-13 10:44:32', 'a:5:{i:1;s:6:\"0.9100\";i:5;s:6:\"0.8650\";i:8;s:6:\"0.5000\";i:2;s:6:\"0.4000\";i:7;s:6:\"0.1000\";}', 'a:4:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";i:4;s:1:\"1\";}', 1, '0.9100'),
(32, '2023-01-13 10:44:39', 'a:5:{i:1;s:6:\"0.9100\";i:5;s:6:\"0.8650\";i:8;s:6:\"0.5000\";i:2;s:6:\"0.4000\";i:7;s:6:\"0.1000\";}', 'a:5:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";i:4;s:1:\"1\";i:5;s:1:\"5\";}', 1, '0.9100'),
(33, '2023-01-13 11:09:10', 'a:5:{i:1;s:6:\"0.9100\";i:5;s:6:\"0.8650\";i:8;s:6:\"0.5000\";i:2;s:6:\"0.4000\";i:7;s:6:\"0.1000\";}', 'a:5:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";i:4;s:1:\"1\";i:5;s:1:\"5\";}', 1, '0.9100'),
(34, '2023-01-13 11:16:57', 'a:6:{i:1;s:6:\"0.9718\";i:5;s:6:\"0.8920\";i:2;s:6:\"0.7312\";i:8;s:6:\"0.6000\";i:6;s:6:\"0.3000\";i:7;s:6:\"0.1000\";}', 'a:8:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";i:4;s:1:\"1\";i:5;s:1:\"1\";i:6;s:1:\"1\";i:7;s:1:\"1\";i:8;s:1:\"1\";}', 1, '0.9718'),
(35, '2023-01-13 11:18:32', 'a:6:{i:1;s:6:\"0.8040\";i:2;s:6:\"0.7312\";i:6;s:6:\"0.3000\";i:5;s:6:\"0.2800\";i:8;s:6:\"0.2000\";i:7;s:6:\"0.1000\";}', 'a:4:{i:2;s:1:\"1\";i:5;s:1:\"1\";i:6;s:1:\"1\";i:7;s:1:\"1\";}', 1, '0.8040'),
(36, '2023-01-13 11:19:00', 'a:7:{i:2;s:6:\"0.9032\";i:1;s:6:\"0.8040\";i:3;s:6:\"0.5000\";i:6;s:6:\"0.3000\";i:5;s:6:\"0.2800\";i:8;s:6:\"0.2000\";i:7;s:6:\"0.1000\";}', 'a:6:{i:2;s:1:\"1\";i:5;s:1:\"1\";i:6;s:1:\"1\";i:7;s:1:\"1\";i:9;s:1:\"1\";i:10;s:1:\"1\";}', 2, '0.9032'),
(37, '2023-01-13 12:20:32', 'a:1:{i:1;s:6:\"0.5000\";}', 'a:1:{i:1;s:1:\"1\";}', 1, '0.5000'),
(38, '2023-01-13 12:22:18', 'a:1:{i:1;s:6:\"0.5000\";}', 'a:1:{i:1;s:1:\"1\";}', 1, '0.5000'),
(39, '2023-01-13 14:22:46', 'a:6:{i:1;s:6:\"0.9718\";i:5;s:6:\"0.8920\";i:2;s:6:\"0.7312\";i:8;s:6:\"0.6000\";i:6;s:6:\"0.3000\";i:7;s:6:\"0.1000\";}', 'a:8:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";i:4;s:1:\"1\";i:5;s:1:\"1\";i:6;s:1:\"1\";i:7;s:1:\"1\";i:8;s:1:\"1\";}', 1, '0.9718'),
(40, '2023-01-13 15:23:21', 'a:0:{}', 'a:0:{}', 0, ''),
(41, '2023-01-13 15:42:58', 'a:5:{i:1;s:6:\"0.9370\";i:5;s:6:\"0.8650\";i:2;s:6:\"0.5200\";i:8;s:6:\"0.5000\";i:7;s:6:\"0.1000\";}', 'a:5:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";i:4;s:1:\"1\";i:5;s:1:\"1\";}', 1, '0.9370'),
(42, '2023-01-13 15:43:09', 'a:6:{i:1;s:6:\"0.9718\";i:5;s:6:\"0.8920\";i:2;s:6:\"0.7312\";i:8;s:6:\"0.6000\";i:6;s:6:\"0.3000\";i:7;s:6:\"0.1000\";}', 'a:8:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";i:4;s:1:\"1\";i:5;s:1:\"1\";i:6;s:1:\"1\";i:7;s:1:\"1\";i:8;s:1:\"1\";}', 1, '0.9718'),
(43, '2023-01-13 15:52:29', 'a:0:{}', 'a:0:{}', 0, ''),
(44, '2023-01-13 15:57:51', 'a:0:{}', 'a:0:{}', 0, ''),
(45, '2023-01-13 15:59:13', 'a:1:{i:7;s:6:\"0.5000\";}', 'a:1:{i:46;s:1:\"1\";}', 7, '0.5000'),
(46, '2023-01-13 16:05:14', 'a:4:{i:1;s:6:\"0.7500\";i:2;s:6:\"0.4000\";i:5;s:6:\"0.1000\";i:7;s:6:\"0.1000\";}', 'a:2:{i:1;s:1:\"1\";i:2;s:1:\"1\";}', 1, '0.7500'),
(47, '2023-01-13 16:05:24', 'a:6:{i:1;s:6:\"0.9718\";i:5;s:6:\"0.8920\";i:2;s:6:\"0.7312\";i:8;s:6:\"0.6000\";i:6;s:6:\"0.3000\";i:7;s:6:\"0.1000\";}', 'a:8:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";i:4;s:1:\"1\";i:5;s:1:\"1\";i:6;s:1:\"1\";i:7;s:1:\"1\";i:8;s:1:\"1\";}', 1, '0.9718'),
(48, '2023-01-13 16:12:26', 'a:4:{i:1;s:6:\"0.7500\";i:2;s:6:\"0.4000\";i:5;s:6:\"0.1000\";i:7;s:6:\"0.1000\";}', 'a:2:{i:1;s:1:\"1\";i:2;s:1:\"1\";}', 1, '0.7500'),
(49, '2023-01-13 16:15:14', 'a:4:{i:1;s:6:\"0.7500\";i:2;s:6:\"0.4000\";i:5;s:6:\"0.1000\";i:7;s:6:\"0.1000\";}', 'a:2:{i:1;s:1:\"1\";i:2;s:1:\"1\";}', 1, '0.7500'),
(50, '2023-01-13 16:35:43', 'a:0:{}', 'a:0:{}', 0, ''),
(51, '2023-01-13 17:01:06', 'a:6:{i:1;s:6:\"0.9718\";i:5;s:6:\"0.8920\";i:2;s:6:\"0.7312\";i:8;s:6:\"0.6000\";i:6;s:6:\"0.3000\";i:7;s:6:\"0.1000\";}', 'a:8:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";i:4;s:1:\"1\";i:5;s:1:\"1\";i:6;s:1:\"1\";i:7;s:1:\"1\";i:8;s:1:\"1\";}', 1, '0.9718'),
(52, '2023-01-13 17:03:14', 'a:6:{i:1;s:6:\"0.9718\";i:5;s:6:\"0.8920\";i:2;s:6:\"0.7312\";i:8;s:6:\"0.6000\";i:6;s:6:\"0.3000\";i:7;s:6:\"0.1000\";}', 'a:8:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";i:4;s:1:\"1\";i:5;s:1:\"1\";i:6;s:1:\"1\";i:7;s:1:\"1\";i:8;s:1:\"1\";}', 1, '0.9718'),
(53, '2023-01-13 17:03:45', 'a:0:{}', 'a:0:{}', 0, ''),
(54, '2023-01-13 17:03:51', 'a:5:{i:1;s:6:\"0.8500\";i:5;s:6:\"0.7300\";i:8;s:6:\"0.5000\";i:2;s:6:\"0.4000\";i:7;s:6:\"0.1000\";}', 'a:3:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";}', 1, '0.8500'),
(55, '2023-01-13 17:07:32', 'a:1:{i:1;s:6:\"0.5000\";}', 'a:1:{i:1;s:1:\"1\";}', 1, '0.5000'),
(56, '2023-01-13 17:08:03', 'a:1:{i:1;s:6:\"0.5000\";}', 'a:1:{i:1;s:1:\"1\";}', 1, '0.5000'),
(57, '2023-01-13 17:08:34', 'a:1:{i:1;s:6:\"0.5000\";}', 'a:1:{i:1;s:1:\"1\";}', 1, '0.5000'),
(58, '2023-01-13 17:08:46', 'a:1:{i:2;s:6:\"0.4000\";}', 'a:1:{i:9;s:1:\"1\";}', 2, '0.4000'),
(59, '2023-01-13 17:08:55', 'a:2:{i:7;s:6:\"0.5000\";i:2;s:6:\"0.4000\";}', 'a:2:{i:9;s:1:\"1\";i:46;s:1:\"1\";}', 7, '0.5000'),
(60, '2023-01-13 17:12:14', 'a:1:{i:1;s:6:\"0.5000\";}', 'a:1:{i:1;s:1:\"1\";}', 1, '0.5000'),
(61, '2023-01-13 17:30:55', 'a:6:{i:1;s:6:\"0.9680\";i:5;s:6:\"0.8704\";i:2;s:6:\"0.7312\";i:8;s:6:\"0.6000\";i:6;s:6:\"0.3000\";i:7;s:6:\"0.1000\";}', 'a:8:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";i:4;s:1:\"2\";i:5;s:1:\"1\";i:6;s:1:\"1\";i:7;s:1:\"1\";i:8;s:1:\"1\";}', 1, '0.9680'),
(62, '2023-01-14 01:46:36', 'a:6:{i:1;s:6:\"0.9718\";i:5;s:6:\"0.8920\";i:2;s:6:\"0.7312\";i:8;s:6:\"0.6000\";i:6;s:6:\"0.3000\";i:7;s:6:\"0.1000\";}', 'a:8:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";i:4;s:1:\"1\";i:5;s:1:\"1\";i:6;s:1:\"1\";i:7;s:1:\"1\";i:8;s:1:\"1\";}', 1, '0.9718'),
(63, '2023-01-14 21:20:10', 'a:1:{i:1;s:6:\"0.5000\";}', 'a:1:{i:1;s:1:\"1\";}', 1, '0.5000'),
(64, '2023-01-14 21:20:42', 'a:5:{i:1;s:6:\"0.9100\";i:5;s:6:\"0.8650\";i:8;s:6:\"0.5000\";i:2;s:6:\"0.4000\";i:7;s:6:\"0.1000\";}', 'a:4:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";i:4;s:1:\"1\";}', 1, '0.9100'),
(65, '2023-01-14 21:22:24', 'a:8:{i:4;s:6:\"0.9820\";i:1;s:6:\"0.9597\";i:3;s:6:\"0.9280\";i:5;s:6:\"0.8920\";i:2;s:6:\"0.7984\";i:8;s:6:\"0.6000\";i:6;s:6:\"0.5800\";i:7;s:6:\"0.2800\";}', 'a:13:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";i:4;s:1:\"1\";i:5;s:1:\"1\";i:6;s:1:\"1\";i:8;s:1:\"1\";i:9;s:1:\"1\";i:11;s:1:\"1\";i:12;s:1:\"1\";i:14;s:1:\"1\";i:15;s:1:\"1\";i:16;s:1:\"1\";}', 4, '0.9820'),
(66, '2023-01-14 22:22:58', 'a:6:{i:1;s:6:\"0.9718\";i:5;s:6:\"0.8920\";i:2;s:6:\"0.7312\";i:8;s:6:\"0.6000\";i:6;s:6:\"0.3000\";i:7;s:6:\"0.1000\";}', 'a:8:{i:1;s:1:\"1\";i:2;s:1:\"1\";i:3;s:1:\"1\";i:4;s:1:\"1\";i:5;s:1:\"1\";i:6;s:1:\"1\";i:7;s:1:\"1\";i:8;s:1:\"1\";}', 1, '0.9718');

-- --------------------------------------------------------

--
-- Table structure for table `kondisi`
--

CREATE TABLE `kondisi` (
  `id` int(11) NOT NULL,
  `kondisi` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kondisi`
--

INSERT INTO `kondisi` (`id`, `kondisi`) VALUES
(1, 'Pasti ya'),
(2, 'Hampir pasti ya'),
(3, 'Kemungkinan besar ya'),
(4, 'Mungkin ya'),
(5, 'Tidak tahu'),
(6, 'Mungkin tidak'),
(7, 'Kemungkinan besar tidak'),
(8, 'Hampir pasti tidak'),
(9, 'Pasti tidak');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id`, `fullname`, `email`, `message`) VALUES
(1, 'tes hubungi kami', 'apakahberhasil@gmail.com', 'tes tes tes'),
(2, 'hi', 'teshubungi@kami.com', '123assdasd'),
(5, 'Ryan', 'Tes@gmail.com', 'Halo, Dokter'),
(6, 'Tes untuk laporan', 'teslaporan@gmail.com', 'Hanya tes untuk laporan'),
(7, 'halo tes', 'halotes@gmail.com', 'aaaaa');

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE `penyakit` (
  `kode_penyakit` int(11) NOT NULL,
  `nama_penyakit` varchar(50) NOT NULL,
  `det_penyakit` varchar(500) NOT NULL,
  `srn_penyakit` varchar(500) NOT NULL,
  `gambar` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`kode_penyakit`, `nama_penyakit`, `det_penyakit`, `srn_penyakit`, `gambar`) VALUES
(1, 'Abses Periodontal', 'Abses Peridontal merupakan infeksi yang terletak disekitar poket poriondontal dan dapat menyebabkan kerusakan tulang rahang.', 'Pemberian obat antibiotik.', '63-abses-periodontal.jpg'),
(2, 'Abses Periapikal', 'Abses Peripikal merupakan pembentukan nanah atau pus diujung akar gigi yang merupakan kelanjutan dari infeksi pulpa gigi bermula dari karies atau lubang yang dalam pulpa sehingga pulpa menjadi mati atau nekrosis.', 'Pemberian obat antibiotik.', '508-abses-peprikal.jpeg'),
(3, 'Abrasi Gigi', 'Abrasi gigi adalah hilangnya struktur gigi akibat dari keausan mekanik oleh zat apapun selain zat gigi. Abrasi gigi disebabkan oleh gesekan terhadap gigi yang terlalu kuat dan terus menerus.', 'Penambalan gigi.', '823-abrasi gigi.jpg'),
(4, 'Bruxims', 'Bruxism(Gigi Gemeretak) merupakan gerakan yang tidak sengaja atau reflek dalam menggerakkan gigi, menggerus gigi selama atau saat tidur yang dapat menimbukan gigi terasah atau terkikis hingga rusak dan kadang menyebabkan sakit kepala.', 'Pemberian antibiotik dan menggunakan night guard(pelindung gigi) saat tidur.', '741-Teeth-Grinding-Bruxism.jpg'),
(5, 'Gingivitis (Radang Gusi)', 'Gingivitis merupakan kondisi peradangan pada gusi yang disebabkan karena adanya akumulasi plak gigi serta ditandai kemerahan, pembengkakkan pada gusi (gingiva), dan tidak adanya attachment loss periodontal.', 'Pemberian antibiotik dan pembersihan karang gigi.', '506-gingvitis.jpg'),
(6, 'Karies Gigi (Gigi berlubang)', 'Karies gigi merupakan lapisan keras gigi (enamel) yang mengalami kerusakan sehingga menyebabkan terbentuknya celah atau lubang pada gigi. ', 'Penambalan gigi.', '33-karies gigi.jpg'),
(7, 'Fraktur Gigi ', 'Fraktur gigi merupakan salah satu dari penyebab utama kerusakan pada gigi setelah karies dan penyakit jaringan periodontal. Fraktur gigi adalah suatu kondisi gigi yang memperlihatkan hilangnya atau lepasnya fragmen dari suatu gigi utuh. ', 'Penambalan gigi.', '683-fraktur-gigi.jpg'),
(8, 'Periodontitis', 'Periodontitis adalah infeksi gusi yang merusak gigi, jaringan lunak, dan tulang penyangga gigi.', 'Pemberian obat antibiotik, pembersihan karang gigi dan pencabutan gigi jika sudah terlalu parah.', '85-kesehatan-periodontitis.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_key`
--
ALTER TABLE `admin_key`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `basis_pengetahuan`
--
ALTER TABLE `basis_pengetahuan`
  ADD PRIMARY KEY (`kode_pengetahuan`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`kode_gejala`);

--
-- Indexes for table `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`id_hasil`);

--
-- Indexes for table `kondisi`
--
ALTER TABLE `kondisi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`kode_penyakit`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `admin_key`
--
ALTER TABLE `admin_key`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `basis_pengetahuan`
--
ALTER TABLE `basis_pengetahuan`
  MODIFY `kode_pengetahuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `gejala`
--
ALTER TABLE `gejala`
  MODIFY `kode_gejala` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `hasil`
--
ALTER TABLE `hasil`
  MODIFY `id_hasil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `kondisi`
--
ALTER TABLE `kondisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `penyakit`
--
ALTER TABLE `penyakit`
  MODIFY `kode_penyakit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
