-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- 생성 시간: 16-01-14 01:48
-- 서버 버전: 10.1.9-MariaDB
-- PHP 버전: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `php1`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `board_list`
--

CREATE TABLE `board_list` (
  `idx` int(11) NOT NULL,
  `id` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `text` text NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `board_list`
--

INSERT INTO `board_list` (`idx`, `id`, `name`, `title`, `text`, `date`) VALUES
(1, 'admin', '관리자', '웹프로그래밍입니다', '서울디지텍고입니다', '2016-01-12'),
(2, 'yam0907', '양경식', '메 th l 기모티?', '안녕하세요', '2016-01-13'),
(3, 'Yang', '양금모', '새해는 밝아오는데 제마음은 저물어만 가네요...', '새해는 밝아오는데 제마음은 저물어만 가네요...', '2016-01-13'),
(4, 'Yang2', '앙금모띠', '기모티', '제가 제일좋아하는 간식인 미숫가루도 못먹고있습니다.', '2016-01-13'),
(6, '앙', '금', '모', 'ㅁㄴㅇㄹㄴㄹ', '2016-01-13'),
(7, '양', '금', '모', 'ㅁㄴㄷㅀㅁㄴㄿ', '2016-01-13'),
(8, '메시', '기모', '티', '5', '2016-01-13'),
(9, '앙', '기모', '티?', 'ㅁㄴㅇㄻㄴㅇㄹ', '2016-01-13'),
(10, '나나난ㄴ', '난나나', '나나난나나', 'ㅇㅎㅇㄹㄴㅋㅎㅇㄴ', '2016-01-13');

-- --------------------------------------------------------

--
-- 테이블 구조 `member`
--

CREATE TABLE `member` (
  `idx` int(11) NOT NULL,
  `id` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `member`
--

INSERT INTO `member` (`idx`, `id`, `password`, `name`) VALUES
(1, 'admin', '1234', '관리자');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `board_list`
--
ALTER TABLE `board_list`
  ADD PRIMARY KEY (`idx`);

--
-- 테이블의 인덱스 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`idx`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `board_list`
--
ALTER TABLE `board_list`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- 테이블의 AUTO_INCREMENT `member`
--
ALTER TABLE `member`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
