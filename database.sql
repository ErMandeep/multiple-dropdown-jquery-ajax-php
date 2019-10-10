DROP DATABASE IF EXISTS `sampletest`;
CREATE DATABASE `sampletest`;
USE `sampletest`;

CREATE TABLE IF NOT EXISTS `tbl_country` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;
 
INSERT INTO `tbl_country` (`id`, `country_name`) VALUES
(1, 'India'),
(2, 'USA'),
(3, 'Australia');

CREATE TABLE IF NOT EXISTS `tbl_state` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `state_name` varchar(255) NOT NULL,
  `country_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

INSERT INTO `tbl_state` (`id`, `state_name`, `country_id`) VALUES
(1, 'West Bengal', 1),
(2, 'Rajasthan', 1),
(3, 'Himachal Pradesh', 1),
(4, 'Maharashtra ', 1),
(5, 'Victoria', 3),
(6, 'Western Australia', 3),
(7, 'Queensland', 3),
(8, 'South Australia', 3),
(10, 'Tasmania', 3),
(11, 'Alaska', 2),
(12, 'California', 2),
(13, 'New York', 2),
(14, 'Florida', 2),
(15, 'Texas', 2),
(16, 'Arizona', 2),
(17, 'Ohio', 2),
(18, 'Mississippi', 2);

CREATE TABLE IF NOT EXISTS `tbl_city` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `city_name` varchar(255) NOT NULL,
  `state_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

INSERT INTO `tbl_city` (`id`, `city_name`, `state_id`) VALUES
(1, 'Kolkata', 1),
(2, 'Asansol', 1),
(3, 'Siliguri', 1),
(4, 'Durgapur', 1),
(5, 'Bardhaman', 1),
(6, 'Dankuni', 1),
(7, 'Ajmer', 2),
(8, 'Bikaner', 2),
(9, 'Jaipur', 2),
(10, 'Udaipur', 2),
(11, 'Shimla', 3),
(12, 'Mumbai ', 4),
(13, 'Pune', 4),
(14, 'Nagpur', 4),
(15, 'Thane', 4),
(16, 'Solapur', 4),
(17, 'Bhiwandi', 4),
(18, 'Amravati', 4),
(19, 'Nashik', 4),
(20, 'Melbourne', 5),
(21, 'Geelong', 5),
(22, 'Kalgoorlie', 6),
(23, 'Rockingham', 6),
(24, 'Bundaberg', 7),
(25, 'Caloundra', 7),
(26, 'Townsville', 7),
(27, 'Mount Isa', 7),
(28, 'Mount Barker', 8),
(29, 'Victor Harbor', 8),
(30, 'Hobart ', 10),
(31, 'Launceston', 10),
(32, 'Sitka', 11),
(33, 'Juneau', 11),
(34, 'Wrangell', 11),
(35, 'Anchorage', 11),
(36, 'Los Angeles', 12),
(37, 'San Diego', 12),
(38, 'New York City', 13),
(39, 'Rome', 13),
(40, 'North Port', 14),
(41, 'Jacksonville', 14),
(42, 'Bunnell', 14),
(43, 'Tampa', 14),
(44, 'Beaumont', 15),
(45, 'Waco', 15),
(46, 'Marana', 16),
(47, 'Eloy', 16),
(48, 'Cleveland', 17),
(49, 'Cincinnati', 17),
(50, 'Jackson', 18);