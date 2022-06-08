-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 07, 2022 at 04:40 AM
-- Server version: 5.7.34
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web-ciplek`
--

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `umkm_business`
--

CREATE TABLE `umkm_business` (
  `id` bigint(20) NOT NULL,
  `location` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `owner` varchar(255) DEFAULT NULL,
  `type_of_busines` varchar(255) DEFAULT NULL,
  `product` varchar(255) DEFAULT NULL,
  `license_number` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `initial_capital` varchar(255) DEFAULT NULL,
  `income` varchar(255) DEFAULT NULL,
  `problem` varchar(255) DEFAULT NULL,
  `opportunity` varchar(255) DEFAULT NULL,
  `challenge` varchar(255) DEFAULT NULL,
  `path_image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `umkm_business`
--

INSERT INTO `umkm_business` (`id`, `location`, `name`, `owner`, `type_of_busines`, `product`, `license_number`, `address`, `phone_number`, `initial_capital`, `income`, `problem`, `opportunity`, `challenge`, `path_image`) VALUES
(1, 'Dusun Kantong', 'Rambak Kemiri / Pak Salim', 'Pak Salim', 'Makanan Ringan ', 'Kripik Rambak', '-', 'Desa kemiri, dusun kantong Rt 1 Rw-', '-', '-', 'Sehari 1 kwintal kripik', 'Minyak goreng mahal', 'Tidak ada pesaing dan murah meriah', 'Untuk lokasi di desa tidak di kota, untuk pemasaran melalui mulut kemulut', 'asset/img/undraw-web-shop.png'),
(2, 'Dusun Kantong', 'Triple L / Bu Titik', 'Bu Titik', 'Makanan ringan dan Makanan Berat', 'Jajanan kering, basah dan katering', '-', 'Desa kemiri, dusun kantong Rt 6 Rw 2', '081553648172 ( mbak luci) ', '-', '-', 'Minyak goreng dan Mentega naik', 'Tidak ada pesaing di daerah desa kemiri untuk jajanan kering ( kue lebaran )', 'Adanya makanan instan dan pesaing katering di daerah sekitar', 'asset/img/undraw-web-shop.png'),
(3, 'Dusun Kantong', 'Maju Mapan / Pak Sukardi', 'Pak Sukardi', 'Makanan Ringan', 'Kripik Singkong', '-', 'Desa kemiri, dusun kantong Rt 1  Rw 2', '-', '-', 'Permintaan Pernah 100kg perhari', 'Banyaknya Penjual kripik singkong di dusun sebelah', 'Tidak hanya menjual kripik singkong, akan mencoba kripik lainnya', 'Produk bisa melempam apabila terlalu lama', 'asset/img/undraw-web-shop.png'),
(4, 'Dusun Kantong', 'Toko Hasanah Jaya ', 'Hasanah Jaya', 'Mebel ', 'Peralatan mebel rumah tangga, kayu bahan banguan dan lainnya', '-', '-', '-', '-', '-', 'bbm naik pengaruh ke harga kayu', 'saingan sedikit', 'rawan kemalingan dikarenakan toko produksi tidak ada pagar\n', 'asset/img/undraw-web-shop.png'),
(5, 'Dusun Krajan', 'Valen\'s Cake / vetlin ika anggraini', 'vetlin ika anggraini', 'Makanan berat dan ringan', 'Katering, kue basah, kue tart', ' - ', 'Dusun Krajan, Desa Kemiri RW6 / RT1 ( PASAR KEMIRI PANTI )', '085707288263', '-', 'Sebulan -+1juta terjual sekitar 70 kotak', 'Naiknya harga minyak dan mentega', 'Unggul rasa dan kualitas', 'Pesaing banyak di seputar dusun, menunggu orderan', 'asset/img/undraw-web-shop.png'),
(6, 'Dusun Kantong', 'Sumari Mandiri', 'Sumari Mandiri', 'Kerajinan perabot rumah tangga', 'Lemari aluminium kusen pintu besi pager ranjang jemuran', '-', '-', '085232665326', '-', 'Perbulan 50 juta', 'Masalah bahan kurang stok tidak ada', 'Bekerja di tempat dingin', 'Harga kirim keluar kota naik karena bbm naik', 'asset/img/undraw-web-shop.png'),
(7, 'Dusun Delima', 'Rumah jamur nafisna dani', 'nafisna dani', 'Petani jamur', 'Jamur tiram', '-', 'Rt 04 rw 03 ', '085607682047', '-', 'Tidak tentu', 'Bahan bahan dan pemasaran', '-', '-', 'asset/img/undraw-web-shop.png'),
(8, 'Dusun Kantong', 'CV.Prima Rosandries', 'Prima Rosandries', 'Asap cair dan minyak sirih', 'Antiseptik obat sakit gigi kosmetik', 'Belum ada', 'Rt 3 Rw 5 ', '082117838379', '-', '35-50 juta ', 'Pemasaran 2011 baru ada pasar yang sustain, di jember kecil sekali pembelian nya dan perizinan sulit', 'Karena usaha asap cair jarang yang bisa mengolah', 'Perizinan edar paling sulit kosmetik dan farmasi tidak umum di kerjakan umkm, karena perizinan mahal', 'asset/img/undraw-web-shop.png'),
(9, 'Dusun Kantong', 'Kopi Gentong / Pak Farid', 'Pak Farid', 'Minuman', 'Kopi, tanaman hias (anggrek)', 'Ada PIRT', 'Dusun kantong', '08123492723', '-', '34kwintal -+', 'Sudah di kirim kopinya tapi karna macet jadu ngga ada pemasukan', 'Usaha kopi kekinian sekarang prospek untuk dijadikan usaha ', 'Tantangannya adalah pasar', 'asset/img/undraw-web-shop.png'),
(10, 'Dusun Delima', 'Kenzo bakery / Pak Imam', 'Pak Imam', 'Makanan ringan', 'Roti sobek', 'Ada (NIB)', 'Dusun Delima RT2 / RW3', '085776432207', '-', '-+80juta', 'Modal', 'Setiap hari produksi, terdapat cabang / agen, membuka lapangan pekerjaan bagi lingkungan sekitar', 'Retur (limbah)', 'asset/img/undraw-web-shop.png'),
(11, 'Dusun Delima', 'Ibu fendi hasanah', 'fendi hasanah', 'Makanan ringan', 'Kue basah dan kering', '-', 'Rt 06 rw 04', '081357337863', '-', '1 juta perbulan', 'Harga bahan pokok mahal', 'Meningkatkan ekonomi keluarga', 'Harus telaten bikinnya, permintaan kostumer macam\"', 'asset/img/undraw-web-shop.png'),
(12, 'Dusun Kantong', 'Laundry Zahra/ ibu lasmini', 'ibu lasmini', 'Pencucian baju sprei dll', 'Baju yang sudah di cuci dan setrika', '-', 'Rt 01 Rw 01', '081252467131', '-', 'Sebulan 2 juta ', 'Musim hujan kering lama, bbm untuk pengambilan bahan pewangi', 'Deket pesantren banyak anak yang laundry ', 'Ada pesaing, pandemi kemarin', 'asset/img/undraw-web-shop.png'),
(13, 'Dusun Kantong', 'Wulan laundry / Ibu siti rokayah', 'Ibu siti rokayah', 'Jasa cuci', 'Laundry', 'Belum ada', 'Dusun kantong, rt 01/ rw 01', '085855575618', '-', 'Belum tentu', 'Parfum naik, plastii naik. Kebutuhan laundry naik', 'Lebih dekat pondok', 'Pesaing', 'asset/img/undraw-web-shop.png'),
(14, 'Dusun Kantong', 'Dika laundry ibu eli ', 'ibu eli', ' Laundry', 'Baju bersih', '-', 'Perumahan kantong rejo Blok A no 10', '085821331915', '-', '3 juta perbulan', 'Cucian banyak musim hujan gaada pengering', 'Karena dulu disini gaada laundry', 'Sekarang banyak pesaing yang pernah dulu ikut bu eli ', 'asset/img/undraw-web-shop.png'),
(15, 'Dusun Kantong', 'Mbok yem / rengginang', 'rengginang', 'Makanan ringan', 'Krupuk rengginang', 'Tidak ada', 'Rt 01 rw 01', 'Tidak ada', '-', 'Tidak tentu', 'Minyak mahal', 'Makanan ringan dijual untuk camilan', 'Karna minyak mahal.. Jualan rengginang saja', 'asset/img/undraw-web-shop.png'),
(16, 'Dusun Kantong', 'Ibu sutinah', 'Ibu sutinah', 'Makanan ringan', 'Penbuat kripik rengginang', 'Tidak ada', 'Rt 2 Rw ', 'Tidak ada', '-', 'Belum tentu', 'Dikarenakan minyak mahal', 'Makanan ringan dijual  murah meriah', 'Minyak mahal', 'asset/img/undraw-web-shop.png'),
(17, 'Dusun Kantong', 'Galvii kitchen/ novi', 'novi', 'Makanan berat ringan ', 'Katering', '-', ' Dusun kantong Rt 8 rw 2', '082145561259', '-', '2-3 juta perbulan', 'Banyak pesanan kurangnya tenaga kerja', 'Jarang katering di dusun kantong juga suka hobi kuliner', 'Minyak naik tetap harga normal', 'asset/img/undraw-web-shop.png'),
(18, 'Dusun Krajan', 'Bengkel adis / bapak dedy', 'bapak dedy', 'Jasa', 'Bengkel motor', 'Belum ada', 'Rt 3 rw 6', '082140469820', '-', '-+ 1 juta', 'Tempat kurang strategis', 'Punya pengalaman sebelumnya (meneruskan) ', 'Alat kurang mendukung untuk motor injection', 'asset/img/undraw-web-shop.png'),
(19, 'Dusun Krajan', 'Ibu sutinah', 'Ibu sutinah', 'Camilan', 'Serabi', 'Tidak ada', 'Rt 1 rw 6', 'Tidak ada', '-', '200 ribu perminggu', 'Tidak setiap haru jual', 'Makanan cemilan laris', 'Minyak mahal bahan baku naik', 'asset/img/undraw-web-shop.png'),
(20, 'Dusun Kantong', 'Salon winata / bu habibah', 'bu habibah', 'Jasa', 'Salon', '-', 'Rt08 rw02', '081216443784', '-', 'Perminggu 500 kalo rame', 'Modal usaha, bahan peralatan masih ke jember (kota), tidak ada bantuan dari pemerintah dan minim informasi', 'Karena dekat jalan, dan ada minat membuka salon', 'Pesaing yang ada di sekitar kemiri', 'asset/img/undraw-web-shop.png'),
(21, 'Dusun Delima', 'Fahlia collection ibu lia', 'ibu lia', 'Jasa', 'Baju', '-', 'Rt 07 rw 04', '085236332882', '-', '6.000.000 perbulan', 'Konsumen agak berkurang karena pandemi', 'Karena rumah tangga mencari kerjaan yang hobi', 'Banyak pesaing penjahit baju', 'asset/img/undraw-web-shop.png'),
(22, 'Dusun Kantong', 'Pak hasan ahli pasang gigi', 'pasang gigi', 'Jasa', 'Ahli pasang gigi', '-', 'Rt 09 rw 08', '085238051785', '-', 'Tergantung rejeki, tidak mesti', 'Konsumen jarang karena tidak setiap hari orang bersihkan dan pasang gigi', 'Karena bakat yang di salurkan untuk membuka ahli pasang gigi', 'Pesaing yang banyak', 'asset/img/undraw-web-shop.png'),
(23, 'Dusun Tenggiling', 'Dua putra/ pak tik', 'pak tik', 'Makanan ringan ', 'Kripik singkong, kripik pisang, kripik tela ungu, kripik talas', '2701220044469', 'Rt 11 rw 12', '085780364478', '-', '12 juta perminggu bulan ini', 'Hujan sedikit produksi', 'Untuk penghasilan keluarga sehari\"', 'Minyak mahal harga jadi naik ', 'asset/img/undraw-web-shop.png'),
(24, 'Dusun Danci', 'Pak saudi', 'Pak saudi', 'Makanan ringan ', 'Opak gulung dan kripik tempe', '-', 'Rt 11 rw 04', '085646488544', '-', '5 juta lebih perbulan', 'Bahan baku naik', 'Peluang\nAwal diajak distributor karena distributor tidak bisa membuat opak kebetulan pak saudi bisa dan pasar rame', 'Pesaing yang banyak di kota', 'asset/img/undraw-web-shop.png'),
(25, 'Dusun Kantong', 'KERUPUK RAMBAK / MOH TASLIM', 'MOH TASLIM', 'KERUPUK RAMBAK', 'KERUPUK RAMBAK', '-', 'Dusun Kantong rt 06 rw 02', '-', '50000000', '3000000', '-', '-', '-', 'asset/img/undraw-web-shop.png'),
(26, 'Dusun Kantong', 'KUE KERING DAN BASAH / TITIK INDRIANI', 'TITIK INDRIANI', 'KUE KERING DAN BASAH', 'KUE KERING DAN BASAH', '-', 'Dusun Kantong rt 07 rw 02', '081336141391.', '25000000', '3500000', '-', '-', '-', 'asset/img/undraw-web-shop.png'),
(27, 'Dusun Kantong', 'Meuble / FAHRI ALI', 'FAHRI ALI', 'Meuble', 'Meuble', '-', 'Dusun Kantong rt 08 rw 02', '-', '41000000', '2500000', '-', '-', '-', 'asset/img/undraw-web-shop.png'),
(28, 'Dusun kantong', 'Kerajinan alumanium / SUMARI', 'SUMARI', 'Kerajinan alumanium', 'Kerajinan alumanium', '-', 'Dusun kantonbg rt 08 rw 02', '085233665326.', '100000000', '7500000', '-', '-', '-', 'asset/img/undraw-web-shop.png'),
(29, 'Dusun Delima', 'Konveksi / LIA MARTALINA', 'LIA MARTALINA', 'Konveksi', 'Konveksi', '-', 'Dusun Delima rt 07 rw 04', '085236332882.', '50000000', '3500000', '-', '-', '-', 'asset/img/undraw-web-shop.png'),
(30, 'Dusun Delima', 'Pembuatan ROTI / IMAM  MA\'RUF', 'IMAM  MA\'RUF', 'Pembuatan ROTI', 'Pembuatan ROTI', '-', 'Dusun Delima rt 03 rw 03', '085776432207.', '80000000', '100000000', '-', '-', '-', 'asset/img/undraw-web-shop.png'),
(31, 'Dusun Delima', 'Distributor roti  / SAIFUL ROHMAN', 'SAIFUL ROHMAN', 'Distributor roti ', 'Distributor roti ', '-', 'Dusun Delima rt 06 rw 04', '081233870559.', '20000000', '50000000', '-', '-', '-', 'asset/img/undraw-web-shop.png'),
(32, 'Dusun danci', 'Opak gulung / NASIR', 'NASIR', 'Opak gulung', 'Opak gulung', '-', 'Dusun danci rt 09 rw 14', '-', '10000000', '2000000', '-', '-', '-', 'asset/img/undraw-web-shop.png'),
(33, 'Dusun danci', 'Opak gulung / SUGENG PRONOTO', 'SUGENG PRONOTO', 'Opak gulung', 'Opak gulung', '-', 'Dusun danci rt 01 rw 013', '-', '7500000', '1500000', '-', '-', '-', 'asset/img/undraw-web-shop.png'),
(34, 'Dusun danci', 'Kopi Argopuro / USMAN', 'USMAN', 'Kopi Argopuro', 'Kopi Argopuro', '-', 'Dusun danci rt 04 rw 13', '-', '75000000', '2000000', '-', '-', '-', 'asset/img/undraw-web-shop.png'),
(35, 'Dusun danci', 'Kripik singkong / HOLIL', 'HOLIL', 'Kripik singkong', 'Kripik singkong', '-', 'Dusun danci rt 12 rw 13', '-', '15000000', '2000000', '-', '-', '-', 'asset/img/undraw-web-shop.png'),
(36, 'Dusun danci', 'Kripik singkong / M TAUFIQ', 'M TAUFIQ', 'Kripik singkong', 'Kripik singkong', '-', 'Dusun danci rt 08 rw 14', '-', '15000000', '2000000', '-', '-', '-', 'asset/img/undraw-web-shop.png'),
(37, 'Dusun danci', 'Kripik singkong / YONO', 'YONO', 'Kripik singkong', 'Kripik singkong', '-', 'Dusun danci rt 08 rw 14', '-', '12000000', '1500000', '-', '-', '-', 'asset/img/undraw-web-shop.png'),
(38, 'Dusun danci', 'Kripik singkong / NILAM', 'NILAM', 'Kripik singkong', 'Kripik singkong', '-', 'Dusun danci rt 08 rw 14', '-', '15000000', '2000000', '-', '-', '-', 'asset/img/undraw-web-shop.png'),
(39, 'Dususn Sodong ', 'Cilok / JUNAIDAH', 'JUNAIDAH', 'Cilok', 'Cilok', '-', 'Dususn Sodong rt ', '-', '1000000', '500000', '-', '-', '-', 'asset/img/undraw-web-shop.png'),
(40, 'Dususn Sodong ', 'CILOK / CHOLIFAH', 'CHOLIFAH', 'CILOK', 'CILOK', '-', 'Dusun Sodong rt 03 rw 08 ', '081515959464.', '1000000', '1000000', '-', '-', '-', 'asset/img/undraw-web-shop.png'),
(41, 'Dususn Sodong ', 'bajongan / MOCH ALI RIDHO', 'MOCH ALI RIDHO', 'bajongan', 'bajongan', '-', 'Dusun Sodong rt 01 rw 08', '085859835650.', '2000000', '950000', '-', '-', '-', 'asset/img/undraw-web-shop.png'),
(42, 'Dususn Sodong ', 'Bajongan / HERYANTO EKA P', 'HERYANTO EKA P', 'Bajongan', 'Bajongan', '-', 'Dususn Sodong rt 04 rw 08 ', '085607537059.', '1500000', '750000', '-', '-', '-', 'asset/img/undraw-web-shop.png'),
(43, 'Dususn Sodong ', 'Jual Accesoris / ROVITAMALA', 'ROVITAMALA', 'Jual Accesoris', 'Jual Accesoris', '-', 'Dususn Sodong rt 08 rw 09', '081252727657.', '30000000', '1000000', '-', '-', '-', 'asset/img/undraw-web-shop.png'),
(44, 'Dususn Sodong ', 'Jual Tahu / MUHAMMAD SOLEH', 'MUHAMMAD SOLEH', 'Jual Tahu', 'Jual Tahu', '-', 'Dusun Sodong rt 7 rw 09', '082144850420.', '1000000', '750000', '-', '-', '-', 'asset/img/undraw-web-shop.png'),
(45, 'Dususn Sodong ', 'Rujak / MISNATI', 'MISNATI', 'Rujak', 'Rujak', '-', 'Dusun Sodong rt ', '-', '750000', '500000', '-', '-', '-', 'asset/img/undraw-web-shop.png'),
(46, 'Dususn Sodong ', 'Jula Buah / ABD LATIF', 'ABD LATIF', 'Jula Buah', 'Jula Buah', '-', 'Dusun Sodong rt 02 rw 08', '-', '5000000', '2000000', '-', '-', '-', 'asset/img/undraw-web-shop.png'),
(47, 'Dususn Sodong ', 'Jual Rujak / ARGIMA', 'ARGIMA', 'Jual Rujak', 'Jual Rujak', '-', 'Dusun Sodong rt 05 rw 09', '-', '500000', '300000', '-', '-', '-', 'asset/img/undraw-web-shop.png'),
(48, 'Dususn Sodong ', 'Jula bakso / NAWI', 'NAWI', 'Jula bakso', 'Jula bakso', '-', 'Dusun Sodong rt 05 rw 09', '085780364566.', '2000000', '1000000', '-', '-', '-', 'asset/img/undraw-web-shop.png'),
(49, 'Dususn Sodong ', 'Jula Pisang / AHMAD', 'AHMAD', 'Jula Pisang', 'Jula Pisang', '-', 'Dusun Sodong rt 01 rw 08', '085745807535.', '3000000', '1000000', '-', '-', '-', 'asset/img/undraw-web-shop.png'),
(50, 'Dususn Sodong ', 'KuE Kering / SITI FATIMAH', 'SITI FATIMAH', 'KuE Kering', 'KuE Kering', '-', 'Dusun Sodong rt ', '085607000741.', '750000', '500000', '-', '-', '-', 'asset/img/undraw-web-shop.png'),
(51, 'Dususn Sodong ', 'Bajongan / AHMAD FELANI', 'AHMAD FELANI', 'Bajongan', 'Bajongan', '-', 'Dusun Sodong rt 03 rw 08 ', '0853337189328.', '1000000', '750000', '-', '-', '-', 'asset/img/undraw-web-shop.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `password`) VALUES
(1, 'admin1', 'admin 1', '$2y$10$f5mSeuIGJb6rhiDDl8Yi6eUSMIUuC5qR/1BM6UCU1Ug2ru5aKA6vO'),
(2, 'admin2', 'admin 2', '$2y$10$g753000TFrZNlY.c9D19RuadhC1uthkeNowbExLH/npN8Sbj7Rohm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `umkm_business`
--
ALTER TABLE `umkm_business`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `umkm_business`
--
ALTER TABLE `umkm_business`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
