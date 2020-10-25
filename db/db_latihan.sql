-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2020 at 07:43 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_latihansoal`
--

-- --------------------------------------------------------

--
-- Table structure for table `rekapitulasi`
--

CREATE TABLE `rekapitulasi` (
  `id` int(11) NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `kelas_user` varchar(255) NOT NULL,
  `skor` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rekapitulasi`
--

INSERT INTO `rekapitulasi` (`id`, `nama_user`, `kelas_user`, `skor`) VALUES
(1, 'Hendridev', 'pekerja', 8),
(32, 'HARUKA', 'Shōgakkō', 10),
(33, 'roug', 'Shōgakkō', 1),
(34, 'zephy', 'Kōkō', 1),
(35, 'hendri', 'Shōgakkō', 0),
(36, 'hendridev', 'Senmongakkō', 8),
(37, 'yanto', 'Shōgakkō', 10),
(38, 'Dimas', 'Petani', 0),
(39, 'Progate', 'Programmer', 10),
(40, 'Hendri AgusTono', 'Penambang', 0),
(41, 'yanto', 'Penambang', 0),
(42, 'hendri', 'Penambang', 0),
(43, 'zephy', 'Penambang', 1);

-- --------------------------------------------------------

--
-- Table structure for table `soal_latihan`
--

CREATE TABLE `soal_latihan` (
  `id` int(11) NOT NULL,
  `soal_latihan` varchar(255) NOT NULL,
  `jawaban_a` varchar(255) NOT NULL,
  `jawaban_b` varchar(255) NOT NULL,
  `jawaban_c` varchar(255) NOT NULL,
  `jawaban_d` varchar(255) NOT NULL,
  `jawaban_benar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `soal_latihan`
--

INSERT INTO `soal_latihan` (`id`, `soal_latihan`, `jawaban_a`, `jawaban_b`, `jawaban_c`, `jawaban_d`, `jawaban_benar`) VALUES
(1, 'Nilai dari 101 adalah', '5', '3', '10', '15', 'A'),
(2, 'untuk melakukan looping dengan efektif, sebaiknya menggunakan ?', 'if else', 'foreach', 'operator tenary', 'switch case', 'B'),
(3, 'bahasa yang dipakai untuk backend web developer adalah , kecuali ?', 'Java', 'Ruby', 'Go', 'Javascript', 'D'),
(4, 'Pencetus bahasa java adalah..', 'James Gosling', 'Steve jobs', 'Michael finci', 'Ruther vajava', 'A'),
(5, 'jika ingin mencari nilai ganjil dan genap, maka sebaiknya menggunakan operator aritmatika berupa ?', 'Modulus', 'Perpangkatan', 'Perkalian', 'Pemfaktoran', 'A'),
(6, 'Dalam php to sql , cara memasukan data adalah dengan menggunakan logika ?', 'insert kemudian pilih id', 'koneksi kemudian insert dan pilih id', 'koneksi dan insert data', 'koneksi dan insert data kemudian pilih id', 'C'),
(7, 'Dalam java, untuk menampilkan data satu baris pada terminal menggunakan perintah ?', 'java_print();', 'System.out.print();', 'System.out.println();', 'printf();', 'B'),
(8, 'jika ingin menginstall vendor pada project di windows, kita bisa menggunakan software berupa ?', 'git bash', 'git lab', 'git vendor', 'git cmd', 'A'),
(9, 'sebutkan fungsi dns ?', 'menerjemahkan ip address menjadi suatu domain', 'mengubah alur data', 'menghapus gateway', 'menerjemahkan domain menjadi ip address', 'A'),
(10, 'jika saya mau menggandakan atau memperbanyak data, hal yang harus dilakukan adalah ?', 'membuat banyak array', 'menggandakan variabel', 'looping', 'skretch_data', 'C');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rekapitulasi`
--
ALTER TABLE `rekapitulasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soal_latihan`
--
ALTER TABLE `soal_latihan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rekapitulasi`
--
ALTER TABLE `rekapitulasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `soal_latihan`
--
ALTER TABLE `soal_latihan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
