-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2021-08-16 10:53:21
-- 伺服器版本： 10.4.18-MariaDB
-- PHP 版本： 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `db01_resume`
--

-- --------------------------------------------------------

--
-- 資料表結構 `ad`
--

CREATE TABLE `ad` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `ad`
--

INSERT INTO `ad` (`id`, `img`, `text`, `sh`) VALUES
(1, '', 'About Nick', 0),
(2, '', 'Nationality : <br>Taipei, Taiwan', 1),
(5, '', 'Date of Birth : <br>1989/Apr./03', 1),
(8, '', 'Email :<br> yuchi8943@gmail.com', 0),
(9, '', 'MobilePhone :<br> 0928290942', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `ad2`
--

CREATE TABLE `ad2` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `ad2`
--

INSERT INTO `ad2` (`id`, `img`, `text`, `sh`) VALUES
(1, '', '熱愛戶外活動, 對於新事物保持學習態度,目前朝著全端網頁工程師發展 .', 1),
(2, '', '基本介紹 中文名：個人簡介 概念：為某人的簡要介紹 形式：表格或其他形式 一般用於：初次見面時個人介紹或個人履歷表', 0),
(5, '', '姓名：××× 性 別：男/女 聯繫電話：××××-××××× 出生日期：19××年××月××日 家庭電話：××××××××× 地 址：某省科技職業學院xxxx# 手機 ：××××××××× 郵 編：××× 求職意向：加盟連鎖事業部主管', 0),
(8, '', '非常熱愛市場銷售工作，有著十分飽滿的創業激情。在××××兩年從事現磨現煮的咖啡市場銷售工作中積累了大量的實踐經驗和客戶資源。與省內主要的二百多家咖啡店鋪經銷商建立了十分密切的聯繫，並在行業中擁有廣泛的業務關係。在去年某省的咖啡博覽會上為公司首次簽定了海外的定單。能團結自己的同事一起取得優異的銷售業績。', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `admin`
--

CREATE TABLE `admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `acc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pw` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `admin`
--

INSERT INTO `admin` (`id`, `acc`, `pw`) VALUES
(5, 'admin', '1234'),
(12, 'root', '1234');

-- --------------------------------------------------------

--
-- 資料表結構 `bottom`
--

CREATE TABLE `bottom` (
  `id` int(10) UNSIGNED NOT NULL,
  `bottom` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `bottom`
--

INSERT INTO `bottom` (`id`, `bottom`) VALUES
(1, '2021資訊管理系統');

-- --------------------------------------------------------

--
-- 資料表結構 `image`
--

CREATE TABLE `image` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `image`
--

INSERT INTO `image` (`id`, `img`, `text`, `sh`) VALUES
(2, '01D01.jpg', '', 0),
(4, '01D03.jpg', '', 1),
(6, '01D05.jpg', '', 1),
(7, '01D07.jpg', '', 0),
(8, '01D04.jpg', '', 0),
(9, '01D03.jpg', '', 0),
(10, '01D08.jpg', '', 1),
(11, '01D09.jpg', '', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `menu`
--

CREATE TABLE `menu` (
  `id` int(10) UNSIGNED NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `href` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent` int(10) UNSIGNED NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `menu`
--

INSERT INTO `menu` (`id`, `text`, `href`, `parent`, `sh`) VALUES
(2, '管理登入', 'index.php?do=login', 0, 1),
(3, '網站首頁', 'index.php', 0, 1),
(5, '管理登入2', 'index.php?do=login2', 0, 1);

-- --------------------------------------------------------

--
-- 資料表結構 `msg`
--

CREATE TABLE `msg` (
  `id` int(50) UNSIGNED NOT NULL,
  `dataUser` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dataTel` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dataMail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dataMsg` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `msg`
--

INSERT INTO `msg` (`id`, `dataUser`, `dataTel`, `dataMail`, `subject`, `dataMsg`) VALUES
(14, 'gg', 'gg', 'gg@kk', 'kk', 'kk'),
(15, 'bb', 'bb', 'bb@nn', 'nn', 'nnn'),
(16, 'yy', 'yy', 'yyy@tt', 'yy', 'yy'),
(17, 'ss', 'ss', 'ss@ss', 'ss', 'ss');

-- --------------------------------------------------------

--
-- 資料表結構 `mvim`
--

CREATE TABLE `mvim` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `mvim`
--

INSERT INTO `mvim` (`id`, `img`, `text`, `sh`) VALUES
(8, 'AI.png', '', 1),
(9, 'bootstrap.png', '', 1),
(10, 'css.png', '', 1),
(11, 'git.png', '', 1),
(12, 'github.png', '', 0),
(13, 'html.png', '', 1),
(14, 'JQuery.png', '', 1),
(15, 'JS.png', '', 1),
(17, 'php.png', '', 1),
(18, 'PS.png', '', 1),
(20, 'figma.png', '', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `news`
--

INSERT INTO `news` (`id`, `title`, `text`, `sh`) VALUES
(1, '2020／05 - 2020／11<br>\r\n奇思設計有限公司<br>\r\n《專案業務》', '市場開發、討論設計和活動需求，提供方案並給予報價\r\n發包協力商並進場施作處理問題，專案結案報告', 1),
(2, '2013／10 - 2017／10<br>\r\n展昭企業股份有限公司<br>\r\n《展覽業務》', '展覽企劃，宣傳並招攬廠商參加展覽，處理會計及文宣品\r\n準備廠商協調會，圈選位置和水電裝潢業務，處理問題\r\n展覽進退場作業，處理現場問題，展後報告', 1),
(5, '2012／07 - 2013／03<br>\r\nTina Keng Gallery 耿畫廊<br>\r\n《工務倉管》', '展覽佈展，畫廊物流倉儲管理以及其他工程作業', 1),
(11, 'test', 'test', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `news3`
--

CREATE TABLE `news3` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `news3`
--

INSERT INTO `news3` (`id`, `title`, `text`, `sh`) VALUES
(1, '<h5>2021</h5><br>  泰山職訓場《網頁設計學員》', '從\"前端規劃網頁\"到\"後端資料處理\"的訓練,藉由不同的專題演練,讓我知道工作中會遇到各種問題,並且學習如何解決問題.', 1),
(2, '<h5>2018</h5><br>  EV Academy《ESL Course》', 'ESL全英語課程的環境,讓我可以跟其他國家學生交流並且學習不同文化.', 1),
(5, '<h5>2007／06 - 2011／06</h5><br>&nbsp;&nbsp;中國文化大學《應用數學系》', '大學期間除了基礎數理課程,也有選修其他計算機相關課程,例如C語言,資料結構和SQL SERVER.', 1),
(12, '<h5>2004／06 - 2007／06</h5> <br>  淡江高中 《普通科》', '一般普通科別,除了課業上的學習,也常參加校內的其他體育競賽活動', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `title`
--

CREATE TABLE `title` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) NOT NULL,
  `sh2` int(10) UNSIGNED NOT NULL,
  `sh3` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `title`
--

INSERT INTO `title` (`id`, `img`, `text`, `url`, `sh`, `sh2`, `sh3`) VALUES
(16, 'w001.jpg', 'PHP+MySql', '', 1, 0, 0),
(17, 'w002.jpg', 'PHP年曆', 'http://220.128.133.15/s1100205/Perpetual-calendar-yuchi777-master/index.php', 1, 0, 0),
(18, 'w003.jpg', 'Boostrap網頁', '', 1, 0, 0),
(19, 'w004.jpg', 'Css transition', 'http://220.128.133.15/s1100205/transition/transition.html', 1, 0, 0),
(20, 'w005.jpg', 'Css animation', 'http://220.128.133.15/s1100205/animation/hw_animation.html', 1, 0, 0),
(21, 'w006.jpg', 'Java Script Game', 'http://220.128.133.15/s1100205/JS/game.html', 1, 0, 0),
(22, 'w007.jpg', 'Java Script Game', 'http://220.128.133.15/s1100205/alertGame/hw_alertGame_sweetAlert.html', 1, 0, 0),
(23, 'g006.jpg', 'Photoshop旅遊海報', 'http://220.128.133.15/s1100205/img/travelPoster.jpg', 0, 1, 0),
(24, 'g003.jpg', 'Photoshop年曆', 'http://220.128.133.15/s1100205/img/calendar.jpg', 0, 1, 0),
(25, 'g005.jpg', 'illustrator  Bannar', 'http://220.128.133.15/s1100205/img/banner.jpg', 0, 1, 0),
(26, '003.jpg', 'Other_Exhibition ', '', 0, 0, 1),
(27, '001.jpg', 'Other_Exhibition ', '', 0, 0, 1);

-- --------------------------------------------------------

--
-- 資料表結構 `total`
--

CREATE TABLE `total` (
  `id` int(10) UNSIGNED NOT NULL,
  `total` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `total`
--

INSERT INTO `total` (`id`, `total`) VALUES
(1, 56826);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `ad`
--
ALTER TABLE `ad`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `ad2`
--
ALTER TABLE `ad2`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `bottom`
--
ALTER TABLE `bottom`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `msg`
--
ALTER TABLE `msg`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `mvim`
--
ALTER TABLE `mvim`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `news3`
--
ALTER TABLE `news3`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `title`
--
ALTER TABLE `title`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `total`
--
ALTER TABLE `total`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `ad`
--
ALTER TABLE `ad`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `ad2`
--
ALTER TABLE `ad2`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `bottom`
--
ALTER TABLE `bottom`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `image`
--
ALTER TABLE `image`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `msg`
--
ALTER TABLE `msg`
  MODIFY `id` int(50) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `mvim`
--
ALTER TABLE `mvim`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `news3`
--
ALTER TABLE `news3`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `title`
--
ALTER TABLE `title`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `total`
--
ALTER TABLE `total`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
