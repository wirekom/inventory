-- phpMyAdmin SQL Dump
-- version 3.1.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 24, 2013 at 06:06 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6-1+lenny16

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `ivan_inventory_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `components`
--

CREATE TABLE IF NOT EXISTS `components` (
  `id` int(11) NOT NULL auto_increment,
  `code` varchar(100) NOT NULL,
  `component_name` varchar(255) NOT NULL,
  `piece_id` int(11) NOT NULL,
  `rate_price` double default NULL,
  `min_stock` int(11) default NULL,
  `stock` int(11) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `piece_id` (`piece_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=61 ;

--
-- Dumping data for table `components`
--

INSERT INTO `components` (`id`, `code`, `component_name`, `piece_id`, `rate_price`, `min_stock`, `stock`) VALUES
(1, 'PLY18MBBC', 'Plywood 18mm BBCC', 2, 7750, 10, 1750),
(2, 'PLY15M4X8BBC', 'Plywood 15mm 4x8 BBCC', 1, 2000, 5, 360),
(3, 'PLY12M4X8BBC', 'Plywood 12mm 4x8 BBCC', 1, NULL, 5, 174),
(4, 'PLY9MM4X8BBC', 'Plywood 9mm 4x8 BBCC', 1, NULL, 5, 74),
(5, 'PLY6MM4X8PAL', 'Plywood 6mm 4x8 palem', 1, NULL, 5, 22),
(6, 'PLY4MM4X8BBC', 'Plywood 4mm/3.6mm 4x8 BBCC', 1, NULL, 5, 125),
(7, 'MELPUTDOP3MM4X8', 'melamin putih dop 3mm 4x8', 1, NULL, 5, 157),
(8, 'PLYSUN3MM4X8', 'Plywood sungkai 3mm 4x8', 1, NULL, 5, 62),
(9, 'PLYNYA3MM4X8', 'Plywood nyatoh 3mm 4x8', 1, NULL, 5, 80),
(10, 'MDF18M4X8', 'MDF 18mm 4x8', 1, NULL, 5, 15),
(11, 'MDF15M4X8', 'MDF 15mm 4x8', 1, NULL, 5, 22),
(12, 'MDF12M4X8', 'MDF 12mm 4x8', 1, NULL, 5, 24),
(13, 'MDF8MM4X8', 'MDF 8mm 4x8', 1, NULL, 5, 9),
(14, 'ACR3MMCLE4X8', 'Acrylic 3mm clear 4x8', 1, 56000, 5, 105),
(15, 'ACR3MMSUS4X8', 'Acrylic 3mm susu 4x8', 1, NULL, 5, 0),
(16, 'ACR3MMPUT4X8', 'Acrylic 3mm putih 4x8', 1, NULL, 5, 6),
(17, 'ACR5MMCLE4X8', 'Acrylic 5mm clear 4x8', 1, NULL, 5, 5),
(18, 'ACR5MMSUS4X8', 'Acrylic 5mm susu 4x8', 1, NULL, 5, 7),
(19, 'ACR5MMHIT4X8', 'Acrylic 5mm hitam 4x8', 1, NULL, 5, 3),
(20, 'ACR3MMHIT4X8', 'Acrylic 3mm hitam 4x8', 1, NULL, 5, 1),
(21, 'ACR2MMHIT4X8', 'Acrylic 2mm hitam 4x8', 1, NULL, 5, 4),
(22, 'LAMPUTBIADOP2214X8', 'laminet putih biasa dop 2217M 4x8', 1, NULL, 5, 58),
(23, 'LAMPUTGLO4X8', 'Laminet putih glossy 4x8', 1, NULL, 5, 10),
(24, 'LAMMERGLO4X8', 'Laminet merah glossy 4x8', 1, NULL, 5, 41),
(25, 'LAMHITDOP4X8', 'Laminet hitam dop 4x8', 1, NULL, 5, 8),
(26, 'LAMSILHAI4X8', 'Laminet silver hairline 4x8', 1, NULL, 5, 5),
(27, 'LAMPUTSAT4X8', 'Laminet putih satin 4x8', 1, NULL, 5, 10),
(28, 'LAMBLU4X8', 'Laminet blue/biru 4x8', 1, NULL, 5, 4),
(29, 'LAMURAKAY5164X8', 'Laminet urat kayu 516E 4x8', 1, NULL, 5, 9),
(30, 'LAMCOC4X8', 'Laminet cocopine 4x8', 1, NULL, 5, 7),
(31, 'LAMHITGAR4X8', 'Laminet hitam garis 4x8', 1, NULL, 5, 10),
(32, 'LAMCOKKAY4X8', 'Laminet coklat kayu 4x8', 1, NULL, 5, 20),
(33, 'LAMPELIMP4X8', 'Laminet pelangi import 4x8', 1, NULL, 5, 5),
(34, 'LAMPUTJER4X8', 'Laminet putih jeruk 4x8', 1, NULL, 5, 10),
(35, 'LAMCREJERIMP', 'Laminet cream jeruk import', 1, NULL, 5, 0),
(36, 'LAMABUJERIMP4X8', 'Laminet abu-abu jeruk import 4x8', 1, NULL, 5, 4),
(37, 'LAMPUTGAR4X8', 'Laminet putih garis 4x8', 1, NULL, 5, 12),
(38, 'CATTOPCOLPERBLU010', 'Cat top colour permanen blue 0106', 17, NULL, 5, 1003),
(39, 'CATTOPCOLPERGRE010', 'Cat top colour permanent gren 0101', 17, NULL, 5, 2),
(40, 'CATDAN505', 'Cat danagloss 5054', 17, NULL, 5, 5),
(41, 'CATTOPCOLVIO011', 'Cat top colour Violet 0116', 17, NULL, 5, 5),
(42, 'CATTOPCOLSIGRED001', 'Cat top colour signal red 0013', 17, NULL, 5, 5),
(43, 'CATTOPCOLBAL002', 'Cat top colour Balck 0020', 17, NULL, 5, 2),
(44, 'CATTOPCOLMAR624', 'Cat top colour maroon 6241', 17, NULL, 5, 1),
(45, 'NIP200VER318', 'Nippe 2000 vermilion 318', 17, NULL, 5, 12),
(46, 'NIP200NASBLU341', 'Nippe 2000 nash blue 341', 17, NULL, 5, 3),
(47, 'NIP200ORAYEL302', 'Nippe 2000 orange yellow 302', 17, NULL, 5, 9),
(48, 'NIP200INTORA403', 'Nippe 2000 inter orange 403', 17, NULL, 5, 2),
(49, 'NIP200SUPBLA486', 'Nippe 2000 super black 486', 17, NULL, 5, 1),
(50, 'NIP200SUPWHI470', 'Nippe 2000 super white 470', 17, NULL, 5, 6),
(51, 'NIP200LEMYEL322', 'Nippe 2000 lemon yellow 322', 1, NULL, 5, 5),
(52, 'NIP200EPOPRI', 'Nippe 2000 epoxy primer', 17, NULL, 5, 7),
(53, 'NIP200PENSUPGLO080', 'Nippe 2000 penta super gloss 0805', 17, NULL, 5, 6),
(54, 'CATMILLBR16@25KG', 'Cat milesi LBR 16 @25 kg', 11, NULL, 5, 2),
(55, 'CATMILLKR1/6@2K', 'Cat milesi LKR 1/60 @2kg', 15, NULL, 5, 1),
(56, 'CATMILLET235@25', 'Cat milesi LET 23573 @25kg', 11, NULL, 5, 1),
(57, 'CATMILPAN500', 'Cat milesi panne 500/s', 10, NULL, 5, 5),
(58, 'CATMILLBR16PUWHIPRI@5K', 'Cat milesi LBR 16 pu white primer @5kg', 17, NULL, 5, 9),
(59, 'CATMILLHR50PUREDHG@5K', 'Cat milesi LHR 50 pu red HG @5kg', 17, NULL, 5, 1),
(60, 'CATMILLHR110@5K', 'Cat milesi LHR 11081 @5kg', 17, NULL, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `component_suplier`
--

CREATE TABLE IF NOT EXISTS `component_suplier` (
  `id` int(11) NOT NULL auto_increment,
  `suplier_id` int(11) NOT NULL,
  `component_id` int(11) NOT NULL,
  `price` double NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `component_id` (`component_id`),
  KEY `suplier_id` (`suplier_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `component_suplier`
--

INSERT INTO `component_suplier` (`id`, `suplier_id`, `component_id`, `price`) VALUES
(9, 1, 1, 1000),
(10, 2, 2, 2000),
(11, 1, 1, 10000),
(12, 1, 1, 10000),
(13, 1, 1, 10000),
(14, 1, 14, 56000);

-- --------------------------------------------------------

--
-- Table structure for table `goods`
--

CREATE TABLE IF NOT EXISTS `goods` (
  `id` int(11) NOT NULL auto_increment,
  `goods_name` varchar(255) NOT NULL,
  `rate_price` double NOT NULL,
  `min_stock` bigint(20) NOT NULL,
  `stock` bigint(20) NOT NULL,
  `image` varchar(11) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `stock` (`stock`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `goods`
--

INSERT INTO `goods` (`id`, `goods_name`, `rate_price`, `min_stock`, `stock`, `image`) VALUES
(1, 'Bangku', 1000, 10, 3924, 'Koala.jpg'),
(2, 'Meja', 1500, 10, 30, 'Penguins.jp');

-- --------------------------------------------------------

--
-- Table structure for table `goods_build`
--

CREATE TABLE IF NOT EXISTS `goods_build` (
  `id` int(11) NOT NULL auto_increment,
  `goods_id` int(11) NOT NULL,
  `components_id` int(11) NOT NULL,
  `component_qty` float NOT NULL,
  `warehouse_id` int(11) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `goods_id` (`goods_id`),
  KEY `warehouse_id` (`warehouse_id`),
  KEY `components_id` (`components_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `goods_build`
--

INSERT INTO `goods_build` (`id`, `goods_id`, `components_id`, `component_qty`, `warehouse_id`) VALUES
(1, 1, 1, 1.5, 0),
(2, 2, 2, 2.5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `goods_transaction`
--

CREATE TABLE IF NOT EXISTS `goods_transaction` (
  `id` int(11) NOT NULL auto_increment,
  `qty` int(11) NOT NULL,
  `date_time` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `decsription` text NOT NULL,
  `goods_id` int(11) NOT NULL,
  `in` bigint(20) NOT NULL,
  `out` bigint(20) NOT NULL,
  `balance_history` bigint(20) NOT NULL,
  `user_id` int(11) NOT NULL,
  `type_order` int(11) NOT NULL,
  `shipping_id` int(11) default NULL,
  `warehouse_from` int(11) default NULL,
  `warehouse_to` int(11) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `type_order` (`type_order`,`shipping_id`),
  KEY `shipping_id` (`shipping_id`),
  KEY `goods_id` (`goods_id`),
  KEY `balance_history` (`balance_history`),
  KEY `warehouse_to` (`warehouse_to`),
  KEY `warehouse_from` (`warehouse_from`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `goods_transaction`
--

INSERT INTO `goods_transaction` (`id`, `qty`, `date_time`, `decsription`, `goods_id`, `in`, `out`, `balance_history`, `user_id`, `type_order`, `shipping_id`, `warehouse_from`, `warehouse_to`) VALUES
(1, 900, '2012-10-11 20:43:43', 'asxasx', 1, 900, 0, 3944, 1, 1, NULL, NULL, 1),
(2, 10, '2012-10-11 20:44:26', 'asx', 1, 0, 10, 3934, 1, 1, NULL, 1, 2),
(3, 10, '2012-10-11 20:46:05', 'asx', 1, 0, 10, 3924, 1, 1, NULL, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `opnam_components`
--

CREATE TABLE IF NOT EXISTS `opnam_components` (
  `id` int(11) NOT NULL auto_increment,
  `date_time` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `component_id` int(11) NOT NULL,
  `warehouse_id` int(11) NOT NULL,
  `stock_component` varchar(100) NOT NULL,
  `decsription` varchar(100) NOT NULL,
  `office` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `component_id` (`component_id`),
  KEY `warehouse_id` (`warehouse_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `opnam_components`
--


-- --------------------------------------------------------

--
-- Table structure for table `opnam_goods`
--

CREATE TABLE IF NOT EXISTS `opnam_goods` (
  `id` int(11) NOT NULL auto_increment,
  `date_time` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `goods_id` int(11) NOT NULL,
  `warehouse_id` int(11) NOT NULL,
  `stock_goods` varchar(100) NOT NULL,
  `decsription` varchar(100) NOT NULL,
  `office` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `goods_id` (`goods_id`),
  KEY `warehouse_id` (`warehouse_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `opnam_goods`
--


-- --------------------------------------------------------

--
-- Table structure for table `order_type`
--

CREATE TABLE IF NOT EXISTS `order_type` (
  `id` int(11) NOT NULL auto_increment,
  `order_name` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `order_type`
--

INSERT INTO `order_type` (`id`, `order_name`) VALUES
(1, 'Shipping');

-- --------------------------------------------------------

--
-- Table structure for table `piece`
--

CREATE TABLE IF NOT EXISTS `piece` (
  `id` int(11) NOT NULL auto_increment,
  `piece_name` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `piece`
--

INSERT INTO `piece` (`id`, `piece_name`) VALUES
(1, 'Lembar'),
(2, 'Blek'),
(3, 'Box'),
(4, 'Pack'),
(5, 'Roll'),
(6, 'Set'),
(7, 'Pcs'),
(8, 'Batang'),
(9, 'Unit'),
(10, 'Kilogram'),
(11, 'Pail (25Kg)'),
(12, 'Jerigen'),
(13, 'Botol'),
(14, 'Buah'),
(15, 'Galon'),
(16, 'dus'),
(17, 'kaleng'),
(19, 'Drum'),
(20, 'pail (20 kg)'),
(21, 'meter'),
(22, 'liter');

-- --------------------------------------------------------

--
-- Table structure for table `procurement`
--

CREATE TABLE IF NOT EXISTS `procurement` (
  `id` int(11) NOT NULL auto_increment,
  `date_time` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `suplier_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `type_order` int(11) NOT NULL,
  `shipping_id` int(11) default NULL,
  PRIMARY KEY  (`id`),
  KEY `suplier_id` (`suplier_id`,`type_order`,`shipping_id`),
  KEY `type_order` (`type_order`),
  KEY `shipping_id` (`shipping_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `procurement`
--


-- --------------------------------------------------------

--
-- Table structure for table `production`
--

CREATE TABLE IF NOT EXISTS `production` (
  `id` int(11) NOT NULL auto_increment,
  `decsription` text NOT NULL,
  `goods_id` int(11) NOT NULL,
  `components_qty` int(11) NOT NULL,
  `warehouse_id` int(11) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `goods_id` (`goods_id`),
  KEY `warehouse_id` (`warehouse_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `production`
--


-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `id` int(11) NOT NULL auto_increment,
  `role` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `seller_components`
--

CREATE TABLE IF NOT EXISTS `seller_components` (
  `id` int(11) NOT NULL auto_increment,
  `date_time` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `decsription` text NOT NULL,
  `component_id` int(11) NOT NULL,
  `type_order` int(11) NOT NULL,
  `sender_name` text NOT NULL,
  `user_id` int(11) default NULL,
  PRIMARY KEY  (`id`),
  KEY `component_id` (`component_id`),
  KEY `user_id` (`user_id`),
  KEY `type_order` (`type_order`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `seller_components`
--


-- --------------------------------------------------------

--
-- Table structure for table `seller_goods`
--

CREATE TABLE IF NOT EXISTS `seller_goods` (
  `id` int(11) NOT NULL auto_increment,
  `date_time` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `decsription` text NOT NULL,
  `goods_id` int(11) NOT NULL,
  `type_order` int(11) NOT NULL,
  `sender_name` text NOT NULL,
  `user_id` int(11) default NULL,
  PRIMARY KEY  (`id`),
  KEY `component_id` (`goods_id`),
  KEY `user_id` (`user_id`),
  KEY `type_order` (`type_order`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `seller_goods`
--


-- --------------------------------------------------------

--
-- Table structure for table `shipping_zone`
--

CREATE TABLE IF NOT EXISTS `shipping_zone` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `cost` double NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `shipping_zone`
--


-- --------------------------------------------------------

--
-- Table structure for table `stock_components`
--

CREATE TABLE IF NOT EXISTS `stock_components` (
  `id` int(11) NOT NULL auto_increment,
  `component_id` int(11) NOT NULL,
  `warehouse_id` int(11) default NULL,
  `stock` int(11) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `warehouse_id` (`warehouse_id`),
  KEY `component_id` (`component_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `stock_components`
--


-- --------------------------------------------------------

--
-- Table structure for table `stock_goods`
--

CREATE TABLE IF NOT EXISTS `stock_goods` (
  `id` int(11) NOT NULL auto_increment,
  `goods_id` int(11) NOT NULL,
  `warehouse_id` int(11) NOT NULL,
  `stock` bigint(11) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `goods_id` (`goods_id`),
  KEY `warehouse_id` (`warehouse_id`),
  KEY `stock` (`stock`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `stock_goods`
--

INSERT INTO `stock_goods` (`id`, `goods_id`, `warehouse_id`, `stock`) VALUES
(1, 1, 1, 900),
(2, 1, 2, 10);

-- --------------------------------------------------------

--
-- Table structure for table `suplier`
--

CREATE TABLE IF NOT EXISTS `suplier` (
  `id` int(11) NOT NULL auto_increment,
  `suplier_name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `post_code` varchar(10) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `web` varchar(100) NOT NULL,
  `cost_order` double NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `suplier`
--

INSERT INTO `suplier` (`id`, `suplier_name`, `address`, `email`, `city`, `post_code`, `phone`, `web`, `cost_order`) VALUES
(1, 'PT.ABCDE', 'jl ABCDE', 'acbde@abcd.com', 'bekasi', '1900', '37328017', 'abcd.com', 1000),
(2, 'PT.FGHIJ', 'jl fghij', 'fghij@fghij.com', 'krawang', '1800', '23740734', 'fghij.com', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `transaction_type`
--

CREATE TABLE IF NOT EXISTS `transaction_type` (
  `id` int(11) NOT NULL auto_increment,
  `type` varchar(255) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `transaction_type`
--

INSERT INTO `transaction_type` (`id`, `type`, `description`) VALUES
(1, 'Goods Build', 'This component is needed to build Goods '),
(2, 'Unbuilded', 'This transaction to outer component in no one builded goods'),
(3, 'adamdmas', 'hahahahihih');

-- --------------------------------------------------------

--
-- Table structure for table `t_components_in`
--

CREATE TABLE IF NOT EXISTS `t_components_in` (
  `id_trans` int(11) NOT NULL auto_increment,
  `qty` bigint(20) NOT NULL,
  `date_time` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `decsription` text NOT NULL,
  `balance_history` bigint(20) NOT NULL,
  `component_id` int(11) NOT NULL,
  `user_id` int(11) default NULL,
  `warehouse_from` int(11) default NULL,
  `warehouse_to` int(11) NOT NULL,
  PRIMARY KEY  (`id_trans`),
  KEY `component_id` (`component_id`),
  KEY `user_id` (`user_id`),
  KEY `warehouse_to` (`warehouse_to`),
  KEY `warehouse_from` (`warehouse_from`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `t_components_in`
--

INSERT INTO `t_components_in` (`id_trans`, `qty`, `date_time`, `decsription`, `balance_history`, `component_id`, `user_id`, `warehouse_from`, `warehouse_to`) VALUES
(1, 230, '2012-10-11 22:59:09', 'assxs', 250, 1, 1, NULL, 1),
(2, 50, '2012-10-11 23:03:39', 'asxa', 300, 1, 1, NULL, 1),
(3, 200, '2012-10-11 23:05:38', 'asxasx', 500, 1, 1, NULL, 1),
(4, 500, '2012-10-11 23:08:07', 'asxs', 1000, 1, 1, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_components_out`
--

CREATE TABLE IF NOT EXISTS `t_components_out` (
  `id_trans` int(11) NOT NULL auto_increment,
  `qty` bigint(20) NOT NULL,
  `date_time` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `decsription` text NOT NULL,
  `balance_history` bigint(20) NOT NULL,
  `component_id` int(11) NOT NULL,
  `transaction_type` int(11) NOT NULL,
  `goods_id` int(11) default NULL,
  `goods_t_id` int(11) default NULL,
  `user_id` int(11) default NULL,
  `warehouse_from` int(11) NOT NULL,
  `warehouse_to` int(11) NOT NULL,
  PRIMARY KEY  (`id_trans`),
  KEY `component_id` (`component_id`,`goods_id`,`goods_t_id`),
  KEY `goods_id` (`goods_id`),
  KEY `goods_t_id` (`goods_t_id`),
  KEY `transaction_type` (`transaction_type`),
  KEY `user_id` (`user_id`),
  KEY `warehouse_to` (`warehouse_to`),
  KEY `warehouse_from` (`warehouse_from`),
  KEY `warehouse_from_2` (`warehouse_from`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `t_components_out`
--

INSERT INTO `t_components_out` (`id_trans`, `qty`, `date_time`, `decsription`, `balance_history`, `component_id`, `transaction_type`, `goods_id`, `goods_t_id`, `user_id`, `warehouse_from`, `warehouse_to`) VALUES
(1, 250, '2012-10-11 23:09:21', 'asx', 0, 1, 3, NULL, NULL, 1, 1, 2),
(2, 250, '2012-10-11 23:09:41', 'asx', 1500, 1, 3, NULL, NULL, 1, 1, 2),
(3, 250, '2012-10-11 23:12:33', 'asx', 1750, 1, 3, NULL, NULL, 1, 1, 2),
(4, 12, '2013-05-22 14:56:26', 'test', 174, 3, 2, NULL, NULL, 1, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `role_id` int(11) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `role_id` (`role_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `name`, `role_id`) VALUES
(1, 'administrator', '200ceb26807d6bf99fd6f4f0d1ca54d4', 'Sulistiyo Adi Nugroho', 1),
(5, 'admin', '0192023a7bbd73250516f069df18b500', 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `warehouse`
--

CREATE TABLE IF NOT EXISTS `warehouse` (
  `id` int(11) NOT NULL auto_increment,
  `name_warehouse` text NOT NULL,
  `address` text NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `warehouse`
--

INSERT INTO `warehouse` (`id`, `name_warehouse`, `address`) VALUES
(1, 'Bekasi Timur 5', 'ABCDE'),
(2, 'Bekasi Barat 2', 'JL ABCDE NO.12345');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `components`
--
ALTER TABLE `components`
  ADD CONSTRAINT `components_ibfk_1` FOREIGN KEY (`piece_id`) REFERENCES `piece` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `component_suplier`
--
ALTER TABLE `component_suplier`
  ADD CONSTRAINT `component_suplier_ibfk_1` FOREIGN KEY (`suplier_id`) REFERENCES `suplier` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `component_suplier_ibfk_2` FOREIGN KEY (`component_id`) REFERENCES `components` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `goods_transaction`
--
ALTER TABLE `goods_transaction`
  ADD CONSTRAINT `goods_transaction_ibfk_1` FOREIGN KEY (`type_order`) REFERENCES `order_type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `goods_transaction_ibfk_2` FOREIGN KEY (`shipping_id`) REFERENCES `shipping_zone` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `goods_transaction_ibfk_3` FOREIGN KEY (`goods_id`) REFERENCES `goods` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `goods_transaction_ibfk_7` FOREIGN KEY (`warehouse_to`) REFERENCES `warehouse` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `goods_transaction_ibfk_8` FOREIGN KEY (`warehouse_from`) REFERENCES `warehouse` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `opnam_components`
--
ALTER TABLE `opnam_components`
  ADD CONSTRAINT `opnam_components_ibfk_1` FOREIGN KEY (`component_id`) REFERENCES `components` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `opnam_components_ibfk_2` FOREIGN KEY (`warehouse_id`) REFERENCES `warehouse` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `opnam_goods`
--
ALTER TABLE `opnam_goods`
  ADD CONSTRAINT `opnam_goods_ibfk_1` FOREIGN KEY (`goods_id`) REFERENCES `goods` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `opnam_goods_ibfk_2` FOREIGN KEY (`warehouse_id`) REFERENCES `warehouse` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `procurement`
--
ALTER TABLE `procurement`
  ADD CONSTRAINT `procurement_ibfk_1` FOREIGN KEY (`suplier_id`) REFERENCES `suplier` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `procurement_ibfk_2` FOREIGN KEY (`type_order`) REFERENCES `order_type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `procurement_ibfk_3` FOREIGN KEY (`shipping_id`) REFERENCES `shipping_zone` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `production`
--
ALTER TABLE `production`
  ADD CONSTRAINT `production_ibfk_1` FOREIGN KEY (`goods_id`) REFERENCES `goods` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `production_ibfk_2` FOREIGN KEY (`warehouse_id`) REFERENCES `warehouse` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `seller_components`
--
ALTER TABLE `seller_components`
  ADD CONSTRAINT `seller_components_ibfk_1` FOREIGN KEY (`component_id`) REFERENCES `components` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `seller_components_ibfk_2` FOREIGN KEY (`type_order`) REFERENCES `order_type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `seller_components_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `seller_goods`
--
ALTER TABLE `seller_goods`
  ADD CONSTRAINT `seller_goods_ibfk_1` FOREIGN KEY (`goods_id`) REFERENCES `goods` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `seller_goods_ibfk_2` FOREIGN KEY (`type_order`) REFERENCES `order_type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `seller_goods_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `stock_components`
--
ALTER TABLE `stock_components`
  ADD CONSTRAINT `stock_components_ibfk_5` FOREIGN KEY (`component_id`) REFERENCES `t_components_in` (`component_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `stock_components_ibfk_8` FOREIGN KEY (`warehouse_id`) REFERENCES `t_components_in` (`warehouse_to`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `stock_goods`
--
ALTER TABLE `stock_goods`
  ADD CONSTRAINT `stock_goods_ibfk_1` FOREIGN KEY (`goods_id`) REFERENCES `goods_transaction` (`goods_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `stock_goods_ibfk_2` FOREIGN KEY (`warehouse_id`) REFERENCES `goods_transaction` (`warehouse_to`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `t_components_in`
--
ALTER TABLE `t_components_in`
  ADD CONSTRAINT `t_components_in_ibfk_1` FOREIGN KEY (`component_id`) REFERENCES `components` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `t_components_in_ibfk_2` FOREIGN KEY (`warehouse_from`) REFERENCES `warehouse` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `t_components_in_ibfk_3` FOREIGN KEY (`warehouse_to`) REFERENCES `warehouse` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `t_components_out`
--
ALTER TABLE `t_components_out`
  ADD CONSTRAINT `t_components_out_ibfk_1` FOREIGN KEY (`component_id`) REFERENCES `components` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `t_components_out_ibfk_2` FOREIGN KEY (`goods_id`) REFERENCES `goods` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `t_components_out_ibfk_3` FOREIGN KEY (`goods_t_id`) REFERENCES `goods_transaction` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `t_components_out_ibfk_4` FOREIGN KEY (`transaction_type`) REFERENCES `transaction_type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `t_components_out_ibfk_8` FOREIGN KEY (`warehouse_to`) REFERENCES `warehouse` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `t_components_out_ibfk_9` FOREIGN KEY (`warehouse_from`) REFERENCES `warehouse` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
