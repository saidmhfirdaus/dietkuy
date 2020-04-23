-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2020 at 10:18 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dietkuy`
--

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `name` varchar(50) NOT NULL,
  `serving` varchar(20) NOT NULL,
  `calori` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`name`, `serving`, `calori`, `id`) VALUES
('Fried Chicken', '1 piece', 260, 1),
('Cheese Pizza', '1 slice', 237, 2),
('Cook Rice', '1 bowl', 204, 4),
('Fried Duck Meat', '100 gram', 132, 6),
('Cook Red Rice', '100 gram', 110, 7),
('Fried', 'Onion', 200, 14);

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

CREATE TABLE `forum` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forum`
--

INSERT INTO `forum` (`id`, `title`, `desc`) VALUES
(5, 'Cara Diet OCD ala Deddy Corbuzier', 'Diet OCD terbilang unik jika dibandingkan dengan jenis diet terkenal lainnya.  Jika biasanya diet diartikan sebagai cara menurunkan berat badan dengan mengurangi jatah dan porsi makan, maka diet OCD merupakan kebalikannya. Pada waktu tertentu, Anda diperbolehkan makan sesuka hati namun tetap dalam batas normal alias tidak gila makan.  Dalam ebook yang menjelaskan secara jelas diet OCD, ada sebutan khas yang dipakai untuk melabeli penerapan diet OCD, yakni Jendela Makan. Jendela makan merupakan istilah yang merujuk pada pengaturan waktu kapan Anda diperbolehkan makan dalam jangka waktu tertentu. Anda masih bingung? Berikut adalah cara diet OCD seperti yang dirangkum Liputan6.com (15/7). Cara diet OCD 1. Jendela makan pertama  Pada jendela makan yang pertama ini, Anda memiliki waktu makan selama 8 jam kemudian dilanjutkan dengan berpuasa selama 16 jam. Masih bingung? Berikut contohnya:      Anda mulai makan pukul 10 pagi, maka Anda tetap bisa memakan apapun selama 8 jam ke depan, lebih tepatnya hingga pukul 6 sore.     16 jam selanjutnya, Anda diharuskan untuk berpuasa. Tapi tenang, Anda hanya perlu puasa makan. Anda masih bisa minum, namun hanya meminum air mineral saja, bukan minuman yang lain.  Jendela makan pertama ini dapat diterapkan sebagai cara diet OCD untuk pemula. Lakukan hingga tubuh beradaptasi baru kemudian naik pada tingkatan selanjutnya. 2. Jendela makan kedua  Jendela makan kedua ini tentu saja memiliki waktu yang berbeda. Pada tingkatan kedua diet OCD, Anda memiliki waktu bebas makan 6 jam dan 18 jam sisanya berpuasa.Misal Anda mulai makan pukul 11 siang, maka waktu makan berakhir pada pukul 5 sore dan sisanya berpuasa.  Bagi Anda yang sudah terbiasa dengan jendela makan pertama dan merasa berat melakukan jendela makan kedua, Anda bisa mengombinasikannya. Contoh: dalam seminggu Anda melakukan jendela makan pertama selama 6 hari, 1 hari sisanya melakukan jendela makan kedua. Terus lakukan peningkatan agar tubuh Anda dapat terbiasa dengan jendela makan kedua. 3 dari 4 halaman 3. Jendela makan ketiga  Semakin meningkat tentu waktu Anda untuk makan semakin terbatas. Level tiga dari diet OCD hanya memperbolehkan Anda makan selama 4 jam saja dan 20 jam sisanya Anda harus berpuasa.  Misalkan Anda mulai makan pukul 11 siang, maka Anda hanya bisa makan hingga pukul 3 sore dilanjutkan dengan 20 jam berpuasa.  Anda masih belum kuat untuk mempraktekkannya? Anda bisa mengombinasikan dengan 2 tingkatan jendela makan sebelumnya. Anda bisa melakukannya bertingkat, contoh :  Senin hingga Kamis menerapkan jendela makan pertama, Jumat dan Sabtu menerapkan jendela makan kedua, pada hari Minggu menerapkan jendela makan ketiga. Atau Anda bisa mengombinasikannya secara bergantian. Hari ini jendela makan pertama, besok jendela makan kedua, lusa jendela makan ketiga.  Jangan lupa untuk meningkatkan intensitas jendela makan ketiga agar tubuh Anda dapat terbiasa. 4. Jendela makan keempat  Jendela makan terakhir ini sekilas terdengar mengerikan karena Anda harus berpuasa 24 jam. Namun tenang saja, bukannya Anda tidak makan sama sekali. Anda diperbolehkan makan sekali dalam sehari dan waktunya terserah Anda. Misalkan Anda makan pukul 11 siang, maka Anda bisa makan lagi pukul 11 siang keesokan harinya.  Terdengar ekstrim memang, tapi ingat, Anda bisa mengombinasikannya dengan 3 tingkatan jendela makan lainnya.  Setelah Anda mengetahui tingkatan OCD, simak juga tips diet OCD agar lebih berhasil dan hasilnya nampak nyata.'),
(6, 'Diet (nutrition)', 'What is Diet?');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(3, 'Ferry is Me', 'ferry.isme1997@gmail.com', 'assets/default.jpg', '$2y$10$rUSU6UCIJt/7Z/0m0iwik.TPRLL4rKY5RnSqmoyuRJj7SW0ME6dIG', 2, 1, 1587391538),
(4, 'Ferry', 'smfgmr97@gmail.com', 'assets/default.jpg', '$2y$10$LAWDilapuj/TdQ70ortPhOuDc0MKT4rXpUeL314DeS9r6MUrcBC..', 2, 1, 1587628914),
(5, 'Said Muhammad', 'said.mfirdaus@gmail.com', 'assets/default.jpg', '$2y$10$IkVQZImeOHa8916Ffn4/RuX7kamuDqG/cWc2TqEz1lQyYPCgucR5i', 2, 1, 1587629811);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'Member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `forum`
--
ALTER TABLE `forum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
