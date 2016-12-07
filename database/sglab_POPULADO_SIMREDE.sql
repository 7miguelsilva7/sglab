-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 05, 2016 at 04:54 PM
-- Server version: 5.5.53-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sglab`
--

-- --------------------------------------------------------

--
-- Table structure for table `anulada`
--

CREATE TABLE IF NOT EXISTS `anulada` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ano` decimal(16,0) DEFAULT NULL,
  `simulado` enum('01','02','03','04','05','06','07','08','09','10') DEFAULT NULL,
  `nivel` enum('3','4','5','8','9') DEFAULT NULL,
  `anuq1` enum('0','1') DEFAULT '0',
  `anuq2` enum('0','1') DEFAULT '0',
  `anuq3` enum('0','1') DEFAULT '0',
  `anuq4` enum('0','1') DEFAULT '0',
  `anuq5` enum('0','1') DEFAULT '0',
  `anuq6` enum('0','1') DEFAULT '0',
  `anuq7` enum('0','1') DEFAULT '0',
  `anuq8` enum('0','1') DEFAULT '0',
  `anuq9` enum('0','1') DEFAULT '0',
  `anuq10` enum('0','1') DEFAULT '0',
  `anuq11` enum('0','1') DEFAULT '0',
  `anuq12` enum('0','1') DEFAULT '0',
  `anuq13` enum('0','1') DEFAULT '0',
  `anuq14` enum('0','1') DEFAULT '0',
  `anuq15` enum('0','1') DEFAULT '0',
  `anuq16` enum('0','1') DEFAULT '0',
  `anuq17` enum('0','1') DEFAULT '0',
  `anuq18` enum('0','1') DEFAULT '0',
  `anuq19` enum('0','1') DEFAULT '0',
  `anuq20` enum('0','1') DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `anulada`
--

INSERT INTO `anulada` (`id`, `ano`, `simulado`, `nivel`, `anuq1`, `anuq2`, `anuq3`, `anuq4`, `anuq5`, `anuq6`, `anuq7`, `anuq8`, `anuq9`, `anuq10`, `anuq11`, `anuq12`, `anuq13`, `anuq14`, `anuq15`, `anuq16`, `anuq17`, `anuq18`, `anuq19`, `anuq20`) VALUES
(1, 16, '01', '3', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(2, 16, '01', '4', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(3, 16, '01', '8', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(4, 16, '02', '3', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0'),
(5, 16, '02', '4', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(6, 16, '02', '5', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(7, 16, '02', '8', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');

<!-- PMA-SQL-ERROR -->
    <div class="error"><h1>Error</h1>
<p><strong>SQL query:</strong>
<a href="tbl_sql.php?sql_query=SHOW+TABLE+STATUS+FROM+%60sglab%60+LIKE+%27cs_media_alunos%27&amp;show_query=1&amp;db=sglab&amp;table=cs_media_alunos&amp;token=91686cfa1d1d50f661888b37a774fb38"><span class="nowrap"><img src="themes/dot.gif" title="Edit" alt="Edit" class="icon ic_b_edit" /> Edit</span></a>    </p>
<p>
<span class="syntax"><span class="inner_sql"><a href="./url.php?url=http%3A%2F%2Fdev.mysql.com%2Fdoc%2Frefman%2F5.5%2Fen%2Fshow.html&amp;token=91686cfa1d1d50f661888b37a774fb38" target="mysql_doc"><span class="syntax_alpha syntax_alpha_reservedWord">SHOW</span></a>  <span class="syntax_alpha syntax_alpha_reservedWord">TABLE</span>  <span class="syntax_alpha syntax_alpha_reservedWord">STATUS</span>  <span class="syntax_alpha syntax_alpha_reservedWord">FROM</span>  <span class="syntax_quote syntax_quote_backtick">`sglab`</span>  <a href="./url.php?url=http%3A%2F%2Fdev.mysql.com%2Fdoc%2Frefman%2F5.5%2Fen%2Fstring-comparison-functions.html%23operator_like&amp;token=91686cfa1d1d50f661888b37a774fb38" target="mysql_doc"><span class="syntax_alpha syntax_alpha_reservedWord">LIKE</span></a>  <span class="syntax_quote syntax_quote_single">'cs_media_alunos'</span></span></span>
</p>
<p>
    <strong>MySQL said: </strong><a href="./url.php?url=http%3A%2F%2Fdev.mysql.com%2Fdoc%2Frefman%2F5.5%2Fen%2Ferror-messages-server.html&amp;token=91686cfa1d1d50f661888b37a774fb38" target="mysql_doc"><img src="themes/dot.gif" title="Documentation" alt="Documentation" class="icon ic_b_help" /></a>
</p>
<code>
#1143 - SELECT command denied to user ''@'localhost' for column 'nmEscola' in table 'siem_escolas'
</code><br />
</div>