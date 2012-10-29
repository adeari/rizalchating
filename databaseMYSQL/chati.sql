-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 29, 2012 at 12:43 AM
-- Server version: 5.1.61
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `chati`
--

-- --------------------------------------------------------

--
-- Table structure for table `ctb_admin`
--

CREATE TABLE IF NOT EXISTS `ctb_admin` (
  `idadmin` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `pass` text NOT NULL,
  PRIMARY KEY (`idadmin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ctb_admin`
--

INSERT INTO `ctb_admin` (`idadmin`, `username`, `pass`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `ctb_broadcast`
--

CREATE TABLE IF NOT EXISTS `ctb_broadcast` (
  `tgl` datetime NOT NULL,
  `iduser` int(11) NOT NULL,
  `idfakultas` int(11) NOT NULL,
  `pesan` text NOT NULL,
  `filenya` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ctb_broadcast`
--

INSERT INTO `ctb_broadcast` (`tgl`, `iduser`, `idfakultas`, `pesan`, `filenya`) VALUES
('2012-05-25 17:59:50', 1, 4, 'ada lah', ''),
('2012-05-25 18:10:19', 1, 1, 'apa lo', ''),
('2012-05-25 18:11:05', 1, 2, 'apa lo', ''),
('2012-05-25 18:25:23', 1, 1, 'pengalamanmu', 'broadcast120525122523Desert.jpg'),
('2012-05-25 18:25:51', 1, 2, 'kamudeh', 'broadcast120525122551Hydrangeas.jpg'),
('2012-05-25 18:27:50', 1, 2, 'tyuu', ''),
('2012-05-25 18:32:56', 1, 2, 'tttt', ''),
('2012-05-25 18:39:03', 1, 2, 'yfff', ''),
('2012-05-25 21:56:27', 1, 2, 'mereka', 'broadcast120525155627Desert.jpg'),
('2012-07-08 09:38:35', 1, 1, 'ddfdf', '');

-- --------------------------------------------------------

--
-- Table structure for table `ctb_chating`
--

CREATE TABLE IF NOT EXISTS `ctb_chating` (
  `dari` int(11) NOT NULL,
  `ke` int(11) NOT NULL,
  `waktu` datetime NOT NULL,
  `pesan` text NOT NULL,
  `status_baca` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ctb_chating`
--

INSERT INTO `ctb_chating` (`dari`, `ke`, `waktu`, `pesan`, `status_baca`) VALUES
(1, 2, '2012-03-26 21:36:01', 'halo%3Cbr+%2F%3E', 1),
(1, 2, '2012-03-26 21:36:05', 'pa+kabarmu+di+sana+nih+yaa%3Cbr+%2F%3E', 1),
(2, 1, '2012-03-26 21:36:17', 'aku+bengek', 1),
(1, 2, '2012-03-26 21:40:54', 'kenapa+ko+gitu%3Cbr+%2F%3E', 1),
(2, 1, '2012-03-26 21:41:07', 'iy+aneh+kenapa+yaa', 1),
(2, 1, '2012-03-27 04:50:09', 'hi+ade', 1),
(2, 1, '2012-03-27 04:51:41', 'waduh', 1),
(2, 1, '2012-03-27 04:54:12', 'halo', 1),
(2, 1, '2012-03-27 04:54:14', 'ade', 1),
(2, 1, '2012-03-27 05:14:00', 'ada+di+mana+skr', 1),
(2, 1, '2012-03-28 03:52:05', 'hi', 1),
(2, 1, '2012-03-28 03:52:06', 'ini', 1),
(2, 1, '2012-03-28 03:52:08', 'tangkep', 1),
(2, 1, '2012-03-28 03:52:14', '<br/>Download <a  href="javascript:bukachat(202120327215214,''../uploadfile/file120327215214Lighthouse.jpg'',500,500);">file120327215214Lighthouse.jpg<br/>', 1),
(2, 1, '2012-03-28 03:54:00', '<br/>Download <a  href="javascript:bukachat(202120327215400,''../uploadfile/file120327215400Penguins.jpg'',500,500);">file120327215400Penguins.jpg<br/>', 1),
(2, 1, '2012-03-28 03:55:02', '<br/>Download <a  href="javascript:bukachat(202120327215502,''../uploadfile/file120327215502Jellyfish.jpg'',500,500);">file120327215502Jellyfish.jpg<br/>', 1),
(2, 1, '2012-03-28 03:55:05', '<br/>Download <a  href="javascript:bukachat(202120327215505,''../uploadfile/file120327215505Tulips.jpg'',500,500);">file120327215505Tulips.jpg<br/>', 1),
(2, 1, '2012-03-30 05:30:28', 'ngapain+de', 1),
(1, 2, '2012-03-30 05:30:45', 'makan+bakso%3Cbr+%2F%3E', 1),
(1, 2, '2012-04-09 19:43:00', '%3Cbr+%2F%3E%3Cbr+%2F%3E%3Cbr+%2F%3E%3Cbr+%2F%3E', 1),
(1, 2, '2012-04-09 19:43:02', '%3Cbr+%2F%3E', 1),
(1, 2, '2012-04-09 19:43:02', '%3Cbr+%2F%3E', 1),
(1, 2, '2012-04-09 19:43:25', '%3Cbr+%2F%3E', 1),
(1, 2, '2012-04-09 19:44:04', '%3Cbr+%2F%3E', 1),
(1, 2, '2012-04-09 19:45:18', '%3Cbr+%2F%3E', 1),
(1, 2, '2012-04-09 19:47:46', 'sfsfsd%3Cbr+%2F%3E', 1),
(1, 2, '2012-04-09 19:47:51', '%3Cbr+%2F%3E', 1),
(1, 2, '2012-04-09 19:49:19', '%3Cbr+%2F%3Esfsf%3Cbr+%2F%3Esfsf', 1),
(1, 2, '2012-04-09 19:49:21', 'ada%3Cbr+%2F%3E', 1),
(1, 2, '2012-04-09 19:49:27', '%3Cbr+%2F%3E%3Cbr+%2F%3E', 1),
(1, 2, '2012-04-09 19:49:32', '%3Cbr+%2F%3E%3Cbr+%2F%3E', 1),
(1, 2, '2012-04-09 19:50:21', '%3Cbr+%2F%3E%3Cbr+%2F%3E', 1),
(1, 2, '2012-04-09 19:57:40', '%3Cbr+%2F%3E%3Cbr+%2F%3E', 1),
(1, 2, '2012-04-09 20:07:08', 'adsada%3Cbr+%2F%3E', 1),
(1, 2, '2012-04-09 20:10:32', '%3Cbr+%2F%3E%3Cbr+%2F%3E', 1),
(1, 2, '2012-04-09 20:10:34', '%3Cbr+%2F%3E%3Cbr+%2F%3E', 1),
(1, 2, '2012-04-09 20:11:01', '%3Cbr+%2F%3E', 1),
(1, 2, '2012-04-09 20:11:37', '%3Cbr+%2F%3E', 1),
(1, 2, '2012-04-09 20:11:41', '%3Cbr+%2F%3E', 1),
(1, 2, '2012-04-09 20:12:12', '%3Cbr+%2F%3E', 1),
(1, 2, '2012-04-09 20:12:42', '%3Cbr+%2F%3E', 1),
(1, 2, '2012-04-09 20:14:31', '%3Cbr+%2F%3E%3Cbr+%2F%3E', 1),
(1, 2, '2012-04-09 20:51:13', 'gg%3Cbr+%2F%3E', 1),
(1, 2, '2012-04-09 20:51:17', 'sdfsf%3Cbr+%2F%3E', 1),
(1, 2, '2012-04-09 20:53:17', 'sdsd%3Cbr+%2F%3E', 1),
(1, 2, '2012-04-09 21:03:44', 'ff%3Cbr+%2F%3E', 1),
(1, 2, '2012-04-09 21:03:57', 'skfskf+%3Cbr+%2F%3E', 1),
(1, 2, '2012-04-09 21:27:36', 'ada%3Cbr+%2F%3E', 1),
(2, 1, '2012-04-09 21:27:49', 'hai', 1),
(1, 2, '2012-04-09 21:28:27', 'hi%3Cbr+%2F%3E', 1),
(2, 1, '2012-04-09 21:28:37', 'ada+apa', 1),
(1, 2, '2012-04-09 21:28:56', 'ada+aku%3Cbr+%2F%3E', 1),
(2, 1, '2012-05-25 17:58:27', 'ini+deh', 1),
(2, 1, '2012-07-22 12:44:00', 'i%3Cbr+%2F%3E', 1),
(1, 2, '2012-07-22 12:44:25', 'yaaa%3Cbr+%2F%3E', 1),
(1, 2, '2012-07-22 12:45:25', '<br/>Download <a  href="javascript:bukachat(202120722064525,''../uploadfile/file120722064524ini.PNG'',500,500);">file120722064524ini.PNG</a><br/>', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ctb_chatingforum`
--

CREATE TABLE IF NOT EXISTS `ctb_chatingforum` (
  `dari` int(11) NOT NULL,
  `idfakultas` int(11) NOT NULL,
  `waktu` datetime NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ctb_chatingforum`
--

INSERT INTO `ctb_chatingforum` (`dari`, `idfakultas`, `waktu`, `pesan`) VALUES
(2, 0, '2012-03-22 21:53:23', 's');

-- --------------------------------------------------------

--
-- Table structure for table `ctb_fakultas`
--

CREATE TABLE IF NOT EXISTS `ctb_fakultas` (
  `idfakultas` int(11) NOT NULL AUTO_INCREMENT,
  `nama_fakultas` varchar(25) NOT NULL,
  PRIMARY KEY (`idfakultas`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `ctb_fakultas`
--

INSERT INTO `ctb_fakultas` (`idfakultas`, `nama_fakultas`) VALUES
(0, 'Semua Unit'),
(1, 'Teknik'),
(2, 'Sastra'),
(3, 'Ekonomi'),
(4, 'Fisip'),
(5, 'Psikologi'),
(6, 'Hukum'),
(9, 'BAAK'),
(10, 'Perpustakaan');

-- --------------------------------------------------------

--
-- Table structure for table `ctb_file`
--

CREATE TABLE IF NOT EXISTS `ctb_file` (
  `namafile` text NOT NULL,
  `tglfle` datetime NOT NULL,
  `iduser_from` int(11) NOT NULL,
  `iduser_to` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ctb_file`
--

INSERT INTO `ctb_file` (`namafile`, `tglfle`, `iduser_from`, `iduser_to`) VALUES
('uploadfile/file120722064524ini.PNG', '2012-07-22 12:45:25', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `ctb_user`
--

CREATE TABLE IF NOT EXISTS `ctb_user` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `pas` text NOT NULL,
  `waktu_online` datetime NOT NULL,
  `nama` varchar(40) NOT NULL,
  `jenis_klamin` tinyint(1) NOT NULL,
  `idfakultas` int(11) NOT NULL,
  `foto` text NOT NULL,
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `ctb_user`
--

INSERT INTO `ctb_user` (`iduser`, `username`, `pas`, `waktu_online`, `nama`, `jenis_klamin`, `idfakultas`, `foto`) VALUES
(1, 'adeari', '082af334c8d3b226a2d182263c71c812', '2012-07-22 13:05:09', 'ade ari w', 0, 2, 'profile120321110318Hydrangeas.jpg'),
(2, 'adeku', 'a5194205bff37bebfd24fa76df53b3b9', '2012-07-22 13:25:41', 'ade kuku', 1, 4, 'profile120321121658Desert.jpg'),
(5, 'akuakuaku', 'a2849a25e3e700642b0dcca640a50be2', '2012-03-26 04:03:29', 'aku adalah anak', 1, 2, ''),
(6, 'inidia', '73ef5b71f40a9fee827a0d9c6ee9d0e1', '2012-07-08 07:51:52', 'namamu', 0, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `ctb_waktubroadcast`
--

CREATE TABLE IF NOT EXISTS `ctb_waktubroadcast` (
  `iduser` int(11) NOT NULL,
  `waktu` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ctb_waktubroadcast`
--

INSERT INTO `ctb_waktubroadcast` (`iduser`, `waktu`) VALUES
(1, '2012-05-25 21:56:27'),
(2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ctb_waktuforum`
--

CREATE TABLE IF NOT EXISTS `ctb_waktuforum` (
  `iduser` int(11) NOT NULL,
  `idfakultas` int(11) NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ctb_waktuforum`
--

INSERT INTO `ctb_waktuforum` (`iduser`, `idfakultas`, `waktu`) VALUES
(3, 0, '2012-03-24 02:35:21'),
(5, 0, '2012-03-24 02:35:21'),
(5, 2, '2012-03-24 02:37:38'),
(2, 0, '2012-03-26 21:52:29'),
(1, 0, '2012-05-19 20:52:01'),
(2, 4, '2012-05-25 17:19:35'),
(1, 2, '2012-05-25 21:55:41');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
