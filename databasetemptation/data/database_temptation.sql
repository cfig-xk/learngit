-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2019-07-15 06:05:10
-- 服务器版本： 10.1.39-MariaDB
-- PHP 版本： 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `database temptation`
--

-- --------------------------------------------------------

--
-- 表的结构 `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1562833358),
('m130524_201442_init', 1562833364),
('m190124_110200_add_verification_token_column_to_user_table', 1562833364);

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `verification_token`) VALUES
(1, '123', 'TLFcwJrwNZOAGtZJPpEZWCtS8YZcd6TK', '$2y$13$mSVTpFYSBUsDldDIFai0y.9bfA7yV3BAJKIG7D6ZEFLwa9mXau056', NULL, 'chenxuanbai@126.com', 10, 1563154969, 1563154969, 'fhQHTsUGSs3fJp7a8W1_ElWrmGW93tI4_1563154969');

-- --------------------------------------------------------

--
-- 表的结构 `yii_activity`
--

CREATE TABLE `yii_activity` (
  `activityid` int(11) NOT NULL,
  `collegeid` int(11) NOT NULL,
  `名称` varchar(20) NOT NULL,
  `地点` varchar(20) NOT NULL,
  `时间` datetime NOT NULL,
  `内容` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `yii_comment`
--

CREATE TABLE `yii_comment` (
  `commentid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `发布时间` datetime NOT NULL,
  `内容` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `yii_developer`
--

CREATE TABLE `yii_developer` (
  `学号` varchar(20) NOT NULL,
  `专业` varchar(20) NOT NULL,
  `姓名` varchar(20) NOT NULL,
  `性别` varchar(10) NOT NULL COMMENT '男女之一'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `yii_donation`
--

CREATE TABLE `yii_donation` (
  `moneyid` int(11) NOT NULL,
  `捐款人姓名` varchar(20) DEFAULT NULL,
  `单位` varchar(50) DEFAULT NULL,
  `金额` int(11) NOT NULL,
  `用途` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `yii_history`
--

CREATE TABLE `yii_history` (
  `historyid` int(11) NOT NULL,
  `概要` varchar(255) NOT NULL,
  `时间` datetime NOT NULL,
  `内容` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `yii_news`
--

CREATE TABLE `yii_news` (
  `newsid` int(11) NOT NULL,
  `标题` varchar(255) NOT NULL,
  `内容` varchar(255) NOT NULL,
  `发布时间` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `yii_organization`
--

CREATE TABLE `yii_organization` (
  `collegeid` int(11) NOT NULL,
  `校区` varchar(20) NOT NULL,
  `名称` varchar(20) NOT NULL COMMENT '津南、八里台、泰达之一',
  `人数` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `yii_person`
--

CREATE TABLE `yii_person` (
  `personid` int(11) NOT NULL,
  `性别` varchar(10) NOT NULL COMMENT '男女之一',
  `姓名` varchar(10) NOT NULL,
  `简介` varchar(1024) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `yii_responsible`
--

CREATE TABLE `yii_responsible` (
  `workerid` int(11) NOT NULL,
  `activityid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `yii_story`
--

CREATE TABLE `yii_story` (
  `personid` int(11) NOT NULL,
  `historyid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `yii_worker`
--

CREATE TABLE `yii_worker` (
  `workerid` int(11) NOT NULL,
  `collegeid` int(11) NOT NULL,
  `姓名` varchar(20) NOT NULL,
  `电话` varchar(20) DEFAULT NULL,
  `地址` varchar(100) DEFAULT NULL,
  `邮箱` varchar(100) DEFAULT NULL,
  `身份` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转储表的索引
--

--
-- 表的索引 `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- 表的索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- 表的索引 `yii_activity`
--
ALTER TABLE `yii_activity`
  ADD PRIMARY KEY (`activityid`) USING BTREE,
  ADD KEY `collegeid1` (`collegeid`);

--
-- 表的索引 `yii_comment`
--
ALTER TABLE `yii_comment`
  ADD PRIMARY KEY (`commentid`) USING BTREE,
  ADD KEY `userid` (`userid`);

--
-- 表的索引 `yii_developer`
--
ALTER TABLE `yii_developer`
  ADD PRIMARY KEY (`学号`);

--
-- 表的索引 `yii_donation`
--
ALTER TABLE `yii_donation`
  ADD PRIMARY KEY (`moneyid`) USING BTREE;

--
-- 表的索引 `yii_history`
--
ALTER TABLE `yii_history`
  ADD PRIMARY KEY (`historyid`) USING BTREE,
  ADD KEY `概要` (`概要`),
  ADD KEY `时间` (`时间`);

--
-- 表的索引 `yii_news`
--
ALTER TABLE `yii_news`
  ADD PRIMARY KEY (`newsid`) USING BTREE;

--
-- 表的索引 `yii_organization`
--
ALTER TABLE `yii_organization`
  ADD PRIMARY KEY (`collegeid`) USING BTREE,
  ADD KEY `人数` (`人数`);

--
-- 表的索引 `yii_person`
--
ALTER TABLE `yii_person`
  ADD PRIMARY KEY (`personid`) USING BTREE,
  ADD KEY `性别` (`性别`);

--
-- 表的索引 `yii_responsible`
--
ALTER TABLE `yii_responsible`
  ADD PRIMARY KEY (`workerid`,`activityid`),
  ADD KEY `activityid` (`activityid`);

--
-- 表的索引 `yii_story`
--
ALTER TABLE `yii_story`
  ADD PRIMARY KEY (`personid`,`historyid`),
  ADD KEY `historyid` (`historyid`);

--
-- 表的索引 `yii_worker`
--
ALTER TABLE `yii_worker`
  ADD PRIMARY KEY (`workerid`) USING BTREE,
  ADD KEY `collegeid` (`collegeid`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 限制导出的表
--

--
-- 限制表 `yii_activity`
--
ALTER TABLE `yii_activity`
  ADD CONSTRAINT `collegeid1` FOREIGN KEY (`collegeid`) REFERENCES `yii_organization` (`collegeid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 限制表 `yii_comment`
--
ALTER TABLE `yii_comment`
  ADD CONSTRAINT `userid` FOREIGN KEY (`userid`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 限制表 `yii_responsible`
--
ALTER TABLE `yii_responsible`
  ADD CONSTRAINT `activityid` FOREIGN KEY (`activityid`) REFERENCES `yii_activity` (`activityid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `workerid` FOREIGN KEY (`workerid`) REFERENCES `yii_worker` (`workerid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 限制表 `yii_story`
--
ALTER TABLE `yii_story`
  ADD CONSTRAINT `historyid` FOREIGN KEY (`historyid`) REFERENCES `yii_history` (`historyid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `personid` FOREIGN KEY (`personid`) REFERENCES `yii_person` (`personid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 限制表 `yii_worker`
--
ALTER TABLE `yii_worker`
  ADD CONSTRAINT `collegeid` FOREIGN KEY (`collegeid`) REFERENCES `yii_organization` (`collegeid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
