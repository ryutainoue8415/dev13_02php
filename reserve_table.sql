-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2023-06-22 14:48:15
-- サーバのバージョン： 10.4.28-MariaDB
-- PHP のバージョン: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `gs_php_kadai`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `reserve_table`
--

CREATE TABLE `reserve_table` (
  `id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `name` varchar(15) NOT NULL,
  `content` varchar(50) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `price` int(11) NOT NULL,
  `tell` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `reserve_table`
--

INSERT INTO `reserve_table` (`id`, `created_at`, `updated_at`, `name`, `content`, `checkin`, `checkout`, `price`, `tell`, `email`) VALUES
(1, '2023-06-21 15:23:19', '2023-06-21 15:23:19', '佐藤様', '大型犬1頭', '2023-07-01', '2023-07-05', 9000, '0', '0'),
(2, '2023-06-21 15:23:19', '2023-06-21 15:23:19', '井上様', '小型犬1頭', '2023-07-03', '2023-07-12', 10000, '0', '0'),
(3, '2023-06-21 21:57:59', '2023-06-21 21:57:59', '井上竜太', '小型犬1頭', '2023-06-22', '2023-07-06', 9000, '2147483647', '0'),
(4, '2023-06-21 21:59:09', '2023-06-21 21:59:09', '山元　佳枝', '大型犬2、小型犬1', '2023-07-01', '2023-07-11', 35000, '2147483647', '0'),
(5, '2023-06-21 22:01:33', '2023-06-21 22:01:33', '藤本　美保', '小型犬2', '2023-07-05', '2023-07-11', 15000, '0120535175', 'rinio@fmail.com'),
(6, '2023-06-21 22:26:58', '2023-06-21 22:26:58', '井上竜太', '大型犬2、小型犬1', '2023-07-06', '2023-07-19', 15000, '12548745', 'r8415i@gmail.com'),
(7, '2023-06-21 22:29:06', '2023-06-21 22:29:06', '川尻　華子', '猫3', '2023-07-04', '2023-07-11', 12000, '08095468745', 'woruti@nnr.co.jp'),
(8, '2023-06-21 22:35:02', '2023-06-21 22:35:02', '井上　千乃', '大型犬3', '2023-06-29', '2023-07-19', 53000, '0928510600', 'cihiiiii@nrr.com'),
(9, '2023-06-21 23:11:43', '2023-06-21 23:11:43', '井上竜太', '大型犬2、小型犬1', '2023-06-29', '2023-06-30', 15000, '08095468745', 'r8415i@gmail.com'),
(10, '2023-06-22 19:05:40', '2023-06-22 19:05:40', '井上竜太', '小型犬1頭', '2023-06-23', '2023-06-29', 35000, '0120535175', 'r8415i@gmail.com');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `reserve_table`
--
ALTER TABLE `reserve_table`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `reserve_table`
--
ALTER TABLE `reserve_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
