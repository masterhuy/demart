<?php
/**
* 2007-2019 PrestaShop
*
* Jms Mega Menu module for prestashop
*
*  @author    Joommasters <joommasters@gmail.com>
*  @copyright 2007-2019 Joommasters
*  @license   license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*  @Website: http://www.joommasters.com
*/

$query = "DROP TABLE IF EXISTS `_DB_PREFIX_jmsmegamenu`;
CREATE TABLE `_DB_PREFIX_jmsmegamenu` (
  `mitem_id` int(10) UNSIGNED NOT NULL,
  `id_shop` int(11) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED NOT NULL,
  `type` varchar(30) NOT NULL,
  `value` varchar(255) NOT NULL,
  `html_content` text NOT NULL,
  `active` tinyint(1) NOT NULL,
  `target` varchar(25) NOT NULL,
  `params` text NOT NULL,
  `ordering` int(10) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=_MYSQL_ENGINE_ DEFAULT CHARSET=utf8;

INSERT INTO `_DB_PREFIX_jmsmegamenu` (`mitem_id`, `id_shop`, `parent_id`, `type`, `value`, `html_content`, `active`, `target`, `params`, `ordering`) VALUES
(1, 1, 0, 'link', '', '', 1, '_self', '{\"class\":\"sub-home\",\"align\":\"center\",\"sub\":{\"fullwidth\":\"1\",\"row\":[[{\"width\":\"12\",\"items\":[{\"item\":\"232\"},{\"item\":\"233\"},{\"item\":\"234\"},{\"item\":\"235\"},{\"item\":\"236\"},{\"item\":\"237\"},{\"item\":\"238\"},{\"item\":\"239\"}]}]]}}', 0),
(2, 1, 0, 'category', '10', '', 1, '_self', '{\"class\":\"\",\"align\":\"center\",\"sub\":{\"fullwidth\":\"1\",\"row\":[[{\"width\":\"3\",\"items\":[{\"item\":\"315\"},{\"item\":\"329\"},{\"item\":\"330\"},{\"item\":\"332\"},{\"item\":\"334\"},{\"item\":\"356\"},{\"item\":\"340\"},{\"item\":\"343\"},{\"item\":\"344\"},{\"item\":\"341\"},{\"item\":\"345\"},{\"item\":\"346\"}]},{\"width\":\"3\",\"items\":[{\"item\":\"308\"},{\"item\":\"310\"},{\"item\":\"309\"},{\"item\":\"311\"},{\"item\":\"312\"},{\"item\":\"348\"},{\"item\":\"349\"},{\"item\":\"313\"}]},{\"width\":\"3\",\"items\":[{\"item\":\"350\"},{\"item\":\"351\"},{\"item\":\"352\"},{\"item\":\"353\"},{\"item\":\"354\"},{\"item\":\"355\"}]},{\"width\":\"3\",\"items\":[{\"item\":\"314\"},{\"item\":\"317\"},{\"item\":\"318\"},{\"item\":\"319\"},{\"item\":\"320\"},{\"item\":\"321\"},{\"item\":\"328\"},{\"item\":\"322\"},{\"item\":\"323\"},{\"item\":\"324\"},{\"item\":\"325\"},{\"item\":\"326\"},{\"item\":\"327\"}]}]]}}', 1),
(3, 1, 0, 'product', '21', '', 1, '_self', '{\"class\":\"\",\"align\":\"center\",\"sub\":{\"fullwidth\":\"1\",\"row\":[[{\"width\":\"3\",\"items\":[{\"item\":\"259\"},{\"item\":\"260\"},{\"item\":\"261\"},{\"item\":\"262\"},{\"item\":\"263\"},{\"item\":\"264\"},{\"item\":\"265\"}]},{\"width\":\"3\",\"items\":[{\"item\":\"284\"},{\"item\":\"266\"},{\"item\":\"267\"},{\"item\":\"268\"},{\"item\":\"269\"},{\"item\":\"270\"},{\"item\":\"271\"}]},{\"width\":\"3\",\"items\":[{\"item\":\"285\"},{\"item\":\"272\"},{\"item\":\"273\"},{\"item\":\"274\"},{\"item\":\"275\"},{\"item\":\"276\"},{\"item\":\"277\"}]},{\"width\":\"3\",\"items\":[{\"item\":\"286\"},{\"item\":\"278\"},{\"item\":\"279\"},{\"item\":\"280\"},{\"item\":\"281\"},{\"item\":\"282\"},{\"item\":\"283\"}]}]]}}', 2),
(5, 1, 0, 'jmsblog-singlepost', '3', '', 1, '_self', '{\"class\":\"\",\"sub\":{\"row\":[[{\"width\":\"12\",\"items\":[{\"item\":\"287\"},{\"item\":\"294\"},{\"item\":\"298\"},{\"item\":\"305\"},{\"item\":\"306\"}]}]]}}', 4),
(6, 1, 0, 'category', '3', '', 1, '_self', '{\"sub\":{\"row\":[[{\"width\":\"12\",\"items\":[{\"item\":\"253\"},{\"item\":\"254\"},{\"item\":\"256\"},{\"item\":\"255\"},{\"item\":\"307\"},{\"item\":\"258\"}]}]]}}', 5),
(7, 1, 0, 'link', '', '', 1, '_self', '{}', 6),
(232, 1, 1, 'html', 'html_content', '<div class=\"sub-home-content\">\r\n<p><a href=\"index.php?settingpanel=1&jpb_homepage=1\"><img src=\"themes/jms_kasos/assets/img/home-img/h1.jpg\" /></a></p>\r\n<p><a href=\"index.php?settingpanel=1&jpb_homepage=1\">Home 1</a></p>\r\n</div>', 1, '_self', '{\"class\":\"home1\",\"title\":\"0\"}', 1),
(233, 1, 1, 'html', 'html_content', '<div class=\"sub-home-content\">\r\n<p><a href=\"index.php?settingpanel=1&jpb_homepage=2\"><img src=\"themes/jms_kasos/assets/img/home-img/h2.jpg\" /></a></p>\r\n<p><a href=\"index.php?settingpanel=1&jpb_homepage=2\">Home 2</a></p>\r\n</div>', 1, '_self', '{\"class\":\"home2\",\"title\":\"0\"}', 2),
(234, 1, 1, 'html', 'html_content', '<div class=\"sub-home-content\">\r\n<p><a href=\"index.php?settingpanel=1&jpb_homepage=3\"><img src=\"themes/jms_kasos/assets/img/home-img/h3.jpg\" /></a></p>\r\n<p><a href=\"index.php?settingpanel=1&jpb_homepage=3\">Home 3</a></p>\r\n</div>', 1, '_self', '{\"class\":\"home3\",\"title\":\"0\"}', 3),
(235, 1, 1, 'html', 'html_content', '<div class=\"sub-home-content\">\r\n<p><a href=\"index.php?settingpanel=1&jpb_homepage=4\"><img src=\"themes/jms_kasos/assets/img/home-img/h4.jpg\" /></a></p>\r\n<p><a href=\"index.php?settingpanel=1&jpb_homepage=4\">Home 4</a></p>\r\n</div>', 1, '_self', '{\"class\":\"home4\",\"title\":\"0\"}', 4),
(236, 1, 1, 'html', 'html_content', '<div class=\"sub-home-content\">\r\n<p><a href=\"index.php?settingpanel=1&jpb_homepage=5\"><img src=\"themes/jms_kasos/assets/img/home-img/h5.jpg\" /></a></p>\r\n<p><a href=\"index.php?settingpanel=1&jpb_homepage=5\">Home 5</a></p>\r\n</div>', 1, '_self', '{\"class\":\"home5\",\"title\":\"0\"}', 5),
(237, 1, 1, 'html', 'html_content', '<div class=\"sub-home-content\">\r\n<p><a href=\"index.php?settingpanel=1&jpb_homepage=6\"><img src=\"themes/jms_kasos/assets/img/home-img/h6.jpg\" /></a></p>\r\n<p><a href=\"index.php?settingpanel=1&jpb_homepage=6\">Home 6</a></p>\r\n</div>', 1, '_self', '{\"class\":\"home6\",\"title\":\"0\"}', 6),
(238, 1, 1, 'html', 'html_content', '<div class=\"sub-home-content\">\r\n<p><a href=\"index.php?settingpanel=1&jpb_homepage=7\"><img src=\"themes/jms_kasos/assets/img/home-img/h7.jpg\" /></a></p>\r\n<p><a href=\"index.php?settingpanel=1&jpb_homepage=7\">Home 7</a></p>\r\n</div>', 1, '_self', '{\"class\":\"home7\",\"title\":\"0\"}', 7),
(239, 1, 1, 'html', 'html_content', '<div class=\"sub-home-content\">\r\n<p><a href=\"index.php?settingpanel=1&jpb_homepage=8\"><img src=\"themes/jms_kasos/assets/img/home-img/h8.jpg\" /></a></p>\r\n<p><a href=\"index.php?settingpanel=1&jpb_homepage=8\">Home 8</a></p>\r\n</div>', 1, '_self', '{\"class\":\"home8\",\"title\":\"0\"}', 8),
(253, 1, 6, 'link', '', '', 1, '_self', '{\"title\":\"1\"}', 0),
(254, 1, 6, 'link', '', '', 1, '_self', '{\"title\":\"1\"}', 1),
(255, 1, 6, 'link', '', '', 1, '_self', '{\"title\":\"1\"}', 3),
(256, 1, 6, 'link', '', '', 1, '_self', '{\"title\":\"1\"}', 2),
(258, 1, 6, 'link', '', '', 1, '_self', '{\"title\":\"1\"}', 5),
(259, 1, 3, 'html', 'html_content', '<p><a href=\"index.php?id_category=13&controller=category&id_lang=1\"><img src=\"themes/jms_kasos/assets/img/feature-img1.jpg\" /></a></p>', 1, '_self', '{\"title\":\"0\"}', 0),
(260, 1, 3, 'category', '13', '', 1, '_self', '{\"title\":\"1\",\"group\":\"1\"}', 1),
(261, 1, 3, 'product', '21', '', 1, '_self', '{\"title\":\"1\"}', 2),
(262, 1, 3, 'product', '22', '', 1, '_self', '{\"title\":\"1\"}', 3),
(263, 1, 3, 'product', '23', '', 1, '_self', '{\"title\":\"1\"}', 4),
(264, 1, 3, 'product', '24', '', 1, '_self', '{\"title\":\"1\"}', 5),
(265, 1, 3, 'product', '25', '', 1, '_self', '{\"title\":\"1\"}', 6),
(266, 1, 3, 'category', '15', '', 1, '_self', '{\"title\":\"1\",\"group\":\"1\"}', 8),
(267, 1, 3, 'product', '26', '', 1, '_self', '{\"title\":\"1\"}', 9),
(268, 1, 3, 'product', '27', '', 1, '_self', '{\"title\":\"1\"}', 10),
(269, 1, 3, 'product', '28', '', 1, '_self', '{\"title\":\"1\"}', 11),
(270, 1, 3, 'product', '29', '', 1, '_self', '{\"title\":\"1\"}', 12),
(271, 1, 3, 'product', '30', '', 1, '_self', '{\"title\":\"1\"}', 13),
(272, 1, 3, 'category', '11', '', 1, '_self', '{\"title\":\"1\",\"group\":\"1\"}', 15),
(273, 1, 3, 'product', '31', '', 1, '_self', '{\"title\":\"1\"}', 16),
(274, 1, 3, 'product', '32', '', 1, '_self', '{\"title\":\"1\"}', 17),
(275, 1, 3, 'product', '33', '', 1, '_self', '{\"title\":\"1\"}', 18),
(276, 1, 3, 'product', '34', '', 1, '_self', '{\"title\":\"1\"}', 19),
(277, 1, 3, 'product', '21', '', 1, '_self', '{\"title\":\"1\"}', 20),
(278, 1, 3, 'category', '16', '', 1, '_self', '{\"title\":\"1\",\"group\":\"1\"}', 22),
(279, 1, 3, 'product', '22', '', 1, '_self', '{\"title\":\"1\"}', 23),
(280, 1, 3, 'product', '23', '', 1, '_self', '{\"title\":\"1\"}', 24),
(281, 1, 3, 'product', '24', '', 1, '_self', '{\"title\":\"1\"}', 25),
(282, 1, 3, 'product', '25', '', 1, '_self', '{\"title\":\"1\"}', 26),
(283, 1, 3, 'product', '26', '', 1, '_self', '{\"title\":\"1\"}', 27),
(284, 1, 3, 'html', 'html_content', '<p><a href=\"index.php?id_category=15&controller=category&id_lang=1\"><img src=\"themes/jms_kasos/assets/img/feature-img2.jpg\" /></a></p>', 1, '_self', '{\"title\":\"0\"}', 7),
(285, 1, 3, 'html', 'html_content', '<p><a href=\"index.php?id_category=11&controller=category&id_lang=1\"><img src=\"themes/jms_kasos/assets/img/feature-img3.jpg\" /></a></p>', 1, '_self', '{\"title\":\"0\"}', 14),
(286, 1, 3, 'html', 'html_content', '<p><a href=\"index.php?id_category=16&controller=category&id_lang=1\"><img src=\"themes/jms_kasos/assets/img/feature-img4.jpg\" /></a></p>', 1, '_self', '{\"title\":\"0\"}', 21),
(287, 1, 5, 'jmsblog-category', '1', '', 1, '_self', '{\"title\":\"1\"}', 1),
(288, 1, 287, 'link', '', '', 1, '_self', '', 1),
(289, 1, 287, 'link', '', '', 1, '_self', '', 2),
(290, 1, 287, 'link', '', '', 1, '_self', '', 2),
(292, 1, 287, 'link', '', '', 1, '_self', '', 3),
(293, 1, 287, 'link', '', '', 1, '_self', '', 4),
(294, 1, 5, 'jmsblog-singlepost', '1', '', 1, '_self', '{\"title\":\"1\"}', 2),
(295, 1, 294, 'link', '', '', 1, '_self', '', 1),
(296, 1, 294, 'link', '', '', 1, '_self', '', 2),
(297, 1, 294, 'link', '', '', 1, '_self', '', 3),
(298, 1, 5, 'jmsblog-categories', 'jmsblog_categories', '', 1, '_self', '{\"title\":\"1\"}', 3),
(299, 1, 298, 'link', '', '', 1, '_self', '', 1),
(300, 1, 298, 'link', '', '', 1, '_self', '', 2),
(301, 1, 298, 'link', '', '', 1, '_self', '', 3),
(303, 1, 298, 'link', '', '', 1, '_self', '', 4),
(304, 1, 298, 'link', '', '', 1, '_self', '', 5),
(305, 1, 5, 'jmsblog-tag', 'smartphone', '', 1, '_self', '{\"title\":\"1\"}', 4),
(306, 1, 5, 'jmsblog-archive', '2019-07', '', 1, '_self', '{\"title\":\"1\"}', 5),
(307, 1, 6, 'link', '', '', 1, '_self', '{\"title\":\"1\"}', 4),
(308, 1, 2, 'link', '', '', 1, '_self', '{\"title\":\"1\",\"group\":\"1\"}', 1),
(309, 1, 2, 'product', '34', '', 1, '_self', '{\"title\":\"1\"}', 7),
(310, 1, 2, 'product', '33', '', 1, '_self', '{\"title\":\"1\"}', 8),
(311, 1, 2, 'product', '30', '', 1, '_self', '{\"title\":\"1\"}', 9),
(312, 1, 2, 'product', '31', '', 1, '_self', '{\"title\":\"1\"}', 10),
(313, 1, 2, 'product', '28', '', 1, '_self', '{\"title\":\"1\"}', 11),
(314, 1, 2, 'link', '', '', 1, '_self', '{\"title\":\"1\",\"group\":\"1\"}', 0),
(315, 1, 2, 'link', '', '', 1, '_self', '{\"title\":\"1\",\"group\":\"1\"}', 2),
(317, 1, 2, 'link', '', '', 1, '_self', '{\"title\":\"1\"}', 0),
(318, 1, 2, 'link', '', '', 1, '_self', '{\"title\":\"1\"}', 1),
(319, 1, 2, 'link', '', '', 1, '_self', '{\"title\":\"1\"}', 2),
(320, 1, 2, 'link', '', '', 1, '_self', '{\"title\":\"1\"}', 3),
(321, 1, 2, 'link', '', '', 1, '_self', '{\"title\":\"1\"}', 3),
(322, 1, 2, 'link', '', '', 1, '_self', '{\"title\":\"1\"}', 5),
(323, 1, 2, 'link', '', '', 1, '_self', '{\"title\":\"1\"}', 6),
(324, 1, 2, 'link', '', '', 1, '_self', '{\"title\":\"1\"}', 7),
(325, 1, 2, 'link', '', '', 1, '_self', '{\"title\":\"1\"}', 8),
(326, 1, 2, 'link', '', '', 1, '_self', '{\"title\":\"1\"}', 9),
(327, 1, 2, 'link', '', '', 1, '_self', '{\"title\":\"1\"}', 10),
(328, 1, 2, 'link', '', '', 1, '_self', '{\"title\":\"1\"}', 4),
(329, 1, 2, 'link', '', '', 1, '_self', '{\"title\":\"1\"}', 0),
(330, 1, 2, 'link', '', '', 1, '_self', '{\"title\":\"1\"}', 1),
(332, 1, 2, 'link', '', '', 1, '_self', '{\"title\":\"1\"}', 2),
(334, 1, 2, 'link', '', '', 1, '_self', '{\"title\":\"1\"}', 3),
(340, 1, 2, 'link', '', '', 1, '_self', '{\"title\":\"1\",\"group\":\"1\"}', 3),
(341, 1, 2, 'link', '', '', 1, '_self', '{\"title\":\"1\"}', 3),
(343, 1, 2, 'link', '', '', 1, '_self', '{\"title\":\"1\"}', 1),
(344, 1, 2, 'link', '', '', 1, '_self', '{\"title\":\"1\"}', 2),
(345, 1, 2, 'link', '', '', 1, '_self', '{\"title\":\"1\"}', 3),
(346, 1, 2, 'link', '', '', 1, '_self', '{\"title\":\"1\"}', 4),
(348, 1, 2, 'product', '22', '', 1, '_self', '{\"title\":\"1\"}', 12),
(349, 1, 2, 'product', '23', '', 1, '_self', '{\"title\":\"1\"}', 12),
(350, 1, 2, 'link', '', '', 1, '_self', '{\"title\":\"1\",\"group\":\"1\"}', 3),
(351, 1, 2, 'link', '', '', 1, '_self', '{\"title\":\"1\"}', 1),
(352, 1, 2, 'link', '', '', 1, '_self', '{\"title\":\"1\"}', 2),
(353, 1, 2, 'link', '', '', 1, '_self', '{\"title\":\"1\"}', 3),
(354, 1, 2, 'link', '', '', 1, '_self', '{\"title\":\"1\"}', 3),
(355, 1, 2, 'link', '', '', 1, '_self', '{\"title\":\"1\"}', 13),
(356, 1, 2, 'link', '', '', 1, '_self', '{\"title\":\"1\"}', 7);

DROP TABLE IF EXISTS `_DB_PREFIX_jmsmegamenu_lang`;
CREATE TABLE `_DB_PREFIX_jmsmegamenu_lang` (
  `mitem_id` int(11) NOT NULL,
  `id_lang` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `menulink` text NOT NULL
) ENGINE=_MYSQL_ENGINE_ DEFAULT CHARSET=utf8;

INSERT INTO `_DB_PREFIX_jmsmegamenu_lang` (`mitem_id`, `id_lang`, `name`, `menulink`) VALUES
(1, 1, 'Home', 'index.php'),
(1, 6, 'Home', ''),
(2, 1, 'Shop', ''),
(2, 6, 'Store', ''),
(3, 1, 'Features', ''),
(3, 6, 'Latest', ''),
(5, 1, 'Blog', ''),
(5, 6, 'Blog', ''),
(6, 1, 'Pages', ''),
(6, 6, 'Pages', ''),
(7, 1, 'Contact', 'index.php?controller=contact'),
(7, 6, 'Contact', ''),
(1, 2, 'Home', ''),
(2, 2, 'Shop', ''),
(3, 2, 'Features', ''),
(5, 2, 'Blog', ''),
(6, 2, 'Pages', ''),
(7, 2, 'Contact', ''),
(1, 3, 'Home', ''),
(2, 3, 'Shop', ''),
(3, 3, 'Features', ''),
(5, 3, 'Blog', ''),
(6, 3, 'Pages', ''),
(7, 3, 'Contact', ''),
(1, 10, 'Home', ''),
(2, 10, 'Shop', ''),
(3, 10, 'Features', ''),
(5, 10, 'Blog', ''),
(6, 10, 'Pages', ''),
(7, 10, 'Contact', ''),
(232, 1, 'Home 1', ''),
(232, 2, 'Home 1 - Default', ''),
(232, 3, 'Home 1 - Default', ''),
(233, 1, 'Home 2', ''),
(233, 2, 'Home 2 - Modern', ''),
(233, 3, 'Home 2 - Modern', ''),
(234, 1, 'Home 3', ''),
(234, 2, 'Home 3 - Hero Slider', ''),
(234, 3, 'Home 3 - Hero Slider', ''),
(235, 1, 'Home 4', ''),
(235, 2, 'Home 4 - Fullwidth', ''),
(235, 3, 'Home 4 - Fullwidth', ''),
(236, 1, 'Home 5', ''),
(236, 2, 'Home 5 - Minimal', ''),
(236, 3, 'Home 5 - Minimal', ''),
(237, 1, 'Home 6', ''),
(237, 2, 'Home 6 - Boxed', ''),
(237, 3, 'Home 6 - Boxed', ''),
(238, 1, 'Home 7', ''),
(238, 2, 'Home 7 - Left Menu', ''),
(238, 3, 'Home 7 - Left Menu', ''),
(239, 1, 'Home 8', ''),
(239, 2, 'Home 8 - Parallax', ''),
(239, 3, 'Home 8 - Parallax', ''),
(253, 1, 'Our Store', 'index.php?controller=stores'),
(253, 2, 'About Us', ''),
(253, 3, 'About Us', ''),
(254, 1, 'Site Map', 'index.php?controller=sitemap'),
(254, 2, 'New Products', ''),
(254, 3, 'New Products', ''),
(255, 1, 'Wishlist Page', 'index.php?fc=module&module=jmswishlist&controller=mywishlist'),
(255, 2, 'Wishlist Page', ''),
(255, 3, 'Wishlist Page', ''),
(256, 1, 'Search Page', 'index.php?controller=search&search_query=samsung'),
(256, 2, 'Search Page', ''),
(256, 3, 'Search Page', ''),
(258, 1, '404 Page', 'index.php?controller=404'),
(258, 2, '404 Page', ''),
(258, 3, '404 Page', ''),
(259, 1, 'img1', ''),
(259, 2, 'img', ''),
(259, 3, 'img', ''),
(260, 1, 'Cellphones', ''),
(260, 2, 'CATEGORIES 1', ''),
(260, 3, 'CATEGORIES 1', ''),
(261, 1, 'Apple iPhone', ''),
(261, 2, 'Suspend Tempor', ''),
(261, 3, 'Suspend Tempor', ''),
(262, 1, 'Samsung Galaxy', ''),
(262, 2, 'Vestibulum Quam', ''),
(262, 3, 'Vestibulum Quam', ''),
(263, 1, 'Sony Xperia', ''),
(263, 2, 'Dolor Elementum', ''),
(263, 3, 'Dolor Elementum', ''),
(264, 1, 'Xiaomi Redmi Note', ''),
(264, 2, 'Aenean Auctor', ''),
(264, 3, 'Aenean Auctor', ''),
(265, 1, 'Nokia Android One', ''),
(265, 2, 'Efficitur Consecter', ''),
(265, 3, 'Efficitur Consecter', ''),
(266, 1, 'Tablets & iPads', ''),
(266, 2, 'CATEGORIES 2', ''),
(266, 3, 'CATEGORIES 2', ''),
(267, 1, 'iPad Air & iPad Pro', ''),
(267, 2, 'Blandit Viverra', ''),
(267, 3, 'Blandit Viverra', ''),
(268, 1, 'Samsung Galaxy Tab S', ''),
(268, 2, 'Porta Cursus', ''),
(268, 3, 'Porta Cursus', ''),
(269, 1, 'Huawei Mate Tabs', ''),
(269, 2, 'Praesent Enim', ''),
(269, 3, 'Praesent Enim', ''),
(270, 1, 'Asus ZenPad', ''),
(270, 2, 'Nunc Aliquam', ''),
(270, 3, 'Nunc Aliquam', ''),
(271, 1, 'MS Surface', ''),
(271, 2, 'Porta Cursus', ''),
(271, 3, 'Porta Cursus', ''),
(272, 1, 'Computer & Mac', ''),
(272, 2, 'CATEGORIES 3', ''),
(272, 3, 'CATEGORIES 3', ''),
(273, 1, 'Macbook Pro & iMac', ''),
(273, 2, 'Varius Lobortis', ''),
(273, 3, 'Varius Lobortis', ''),
(274, 1, 'Asus Zenbook Pro', ''),
(274, 2, 'Diam Rhoncus', ''),
(274, 3, 'Diam Rhoncus', ''),
(275, 1, 'Mobile Workstation', ''),
(275, 2, 'Congue Tellus', ''),
(275, 3, 'Congue Tellus', ''),
(276, 1, 'Ultrabook', ''),
(276, 2, 'Malesua Fames', ''),
(276, 3, 'Malesua Fames', ''),
(277, 1, 'Notebook Gaming', ''),
(277, 2, 'Lobortis Quisque', ''),
(277, 3, 'Lobortis Quisque', ''),
(278, 1, 'Accessories', ''),
(278, 2, 'CATEGORIES 4', ''),
(278, 3, 'CATEGORIES 4', ''),
(279, 1, 'Smartwatch & iWatch', ''),
(279, 2, 'Vitae Tempor', ''),
(279, 3, 'Vitae Tempor', ''),
(280, 1, 'Airpod & Headphones', ''),
(280, 2, 'Diam Rhoncus', ''),
(280, 3, 'Diam Rhoncus', ''),
(281, 1, 'Phone Case', ''),
(281, 2, 'Congue Tellus', ''),
(281, 3, 'Congue Tellus', ''),
(282, 1, 'Adapter & Chargers', ''),
(282, 2, 'Pulvinar Sapien', ''),
(282, 3, 'Pulvinar Sapien', ''),
(283, 1, 'Smart Speakers', ''),
(283, 2, 'Euismod Turpis', ''),
(283, 3, 'Euismod Turpis', ''),
(284, 1, 'img2', ''),
(284, 2, 'img', ''),
(284, 3, 'img', ''),
(285, 1, 'img3', ''),
(285, 2, 'img', ''),
(285, 3, 'img', ''),
(286, 1, 'img4', ''),
(286, 2, 'img', ''),
(286, 3, 'img', ''),
(287, 1, 'Blog Category', ''),
(287, 2, 'Blog Category', ''),
(287, 3, 'Blog Category', ''),
(288, 1, 'Category - Left Sidebar', 'index.php?fc=module&module=jmsblog&controller=category&category_id=1&sidebar=left'),
(288, 2, 'Category - Left Sidebar', ''),
(288, 3, 'Category - Left Sidebar', ''),
(289, 1, 'Category - Right Sidebar', 'index.php?fc=module&module=jmsblog&controller=category&category_id=1&sidebar=right'),
(289, 2, 'Category - Right Sidebar', ''),
(289, 3, 'Category - Right Sidebar', ''),
(290, 1, 'Category - No Sidebar', 'index.php?fc=module&module=jmsblog&controller=category&category_id=1&sidebar=no'),
(290, 2, 'Category - No Sidebar', ''),
(290, 3, 'Category - No Sidebar', ''),
(292, 1, '3 Columns', 'index.php?fc=module&module=jmsblog&controller=category&category_id=1&sidebar=no&layout=category-layout-3columns'),
(292, 2, '3 Columns', ''),
(292, 3, '3 Columns', ''),
(293, 1, '4 Columns', 'index.php?fc=module&module=jmsblog&controller=category&category_id=1&sidebar=no&layout=category-layout-4columns'),
(293, 2, '4 Columns', ''),
(293, 3, '4 Columns', ''),
(294, 1, 'Blog Single Post', ''),
(294, 2, 'Blog Single Post', ''),
(294, 3, 'Blog Single Post', ''),
(295, 1, 'Left Sidebar', 'index.php?fc=module&module=jmsblog&category_slug=smartphone&post_id=1&controller=post&id_lang=1&sidebar=left'),
(295, 2, 'Left Sidebar', ''),
(295, 3, 'Left Sidebar', ''),
(296, 1, 'Right Sidebar', 'index.php?fc=module&module=jmsblog&category_slug=smartphone&post_id=1&controller=post&id_lang=1&sidebar=right'),
(296, 2, 'Right Sidebar', ''),
(296, 3, 'Right Sidebar', ''),
(297, 1, 'No Sidebar', 'index.php?fc=module&module=jmsblog&category_slug=smartphone&post_id=1&controller=post&id_lang=1&sidebar=no'),
(297, 2, 'No Sidebar', ''),
(297, 3, 'No Sidebar', ''),
(298, 1, 'Blog Categories', ''),
(298, 2, 'Blog Categories', ''),
(298, 3, 'Blog Categories', ''),
(299, 1, 'Categories - Left Sidebar', 'index.php?fc=module&module=jmsblog&controller=categories&sidebar=left'),
(299, 2, 'Categories - Left Sidebar', ''),
(299, 3, 'Categories - Left Sidebar', ''),
(300, 1, 'Categories- Right Sidebar', 'index.php?fc=module&module=jmsblog&controller=categories&sidebar=right'),
(300, 2, 'Categories- Right Sidebar', ''),
(300, 3, 'Categories- Right Sidebar', ''),
(301, 1, 'Categories -No Sidebar', 'index.php?fc=module&module=jmsblog&controller=categories&sidebar=no'),
(301, 2, 'Categories -No Sidebar', ''),
(301, 3, 'Categories -No Sidebar', ''),
(303, 1, '3 Columns', 'index.php?fc=module&module=jmsblog&controller=categories&sidebar=no&layout=categories-layout-3columns'),
(303, 2, '3 Columns', ''),
(303, 3, '3 Columns', ''),
(304, 1, '4 Columns', 'index.php?fc=module&module=jmsblog&controller=categories&sidebar=no&layout=categories-layout-4columns'),
(304, 2, '4 Columns', ''),
(304, 3, '4 Columns', ''),
(305, 1, 'Blog Tags', ''),
(305, 2, 'Blog Tags', ''),
(305, 3, 'Blog Tags', ''),
(306, 1, 'Blog Archives', ''),
(306, 2, 'Blog Archives', ''),
(306, 3, 'Blog Archives', ''),
(307, 1, 'Best Sales', 'index.php?controller=best-sales'),
(307, 2, 'Best Sales', ''),
(307, 3, 'Best Sales', ''),
(308, 1, 'Product Type', '#'),
(308, 2, 'Product Type', ''),
(308, 3, 'Product Type', ''),
(309, 1, 'Standard Product', ''),
(309, 2, 'Standard Product', ''),
(309, 3, 'Standard Product', ''),
(310, 1, 'Virtual Product', ''),
(310, 2, 'Virtual Product', ''),
(310, 3, 'Virtual Product', ''),
(311, 1, 'Pack of Products', ''),
(311, 2, 'Pack of Products', ''),
(311, 3, 'Pack of Products', ''),
(312, 1, 'Product  Color Swatch', ''),
(312, 2, 'Product  Color Swatch', ''),
(312, 3, 'Product  Color Swatch', ''),
(313, 1, 'Product Out of Stock', ''),
(313, 2, 'Product Out of Stock', ''),
(313, 3, 'Product Out of Stock', ''),
(314, 1, 'Category Layout', '#'),
(314, 2, 'Category Layout', ''),
(314, 3, 'Category Layout', ''),
(315, 1, 'Product Layout', '#'),
(315, 2, 'Product Layout', ''),
(315, 3, 'Product Layout', ''),
(317, 1, 'Left Sidebar', 'index.php?id_category=10&controller=category&id_lang=1&sidebar=left'),
(317, 2, 'Left Sidebar', ''),
(317, 3, 'Left Sidebar', ''),
(318, 1, 'Right Sidebar', 'index.php?id_category=10&controller=category&id_lang=1&sidebar=right'),
(318, 2, 'Right Sidebar', ''),
(318, 3, 'Right Sidebar', ''),
(319, 1, 'No Sidebar', 'index.php?id_category=10&controller=category&id_lang=1&sidebar=no'),
(319, 2, 'No Sidebar', ''),
(319, 3, 'No Sidebar', ''),
(320, 1, 'Category Banner', 'index.php?id_category=11&controller=category&id_lang=1&sidebar=left&layout=category-layout-banner'),
(320, 2, 'Category Banner', ''),
(320, 3, 'Category Banner', ''),
(321, 1, 'Category Descriptions', 'index.php?id_category=11&controller=category&id_lang=1&sidebar=left&layout=category-layout-desc'),
(321, 2, 'Category Descriptions', ''),
(321, 3, 'Category Descriptions', ''),
(322, 1, 'Grid 2 Columns', 'index.php?id_category=10&controller=category&id_lang=1&ppr=2'),
(322, 2, 'Grid 2 Column', ''),
(322, 3, 'Grid 2 Column', ''),
(323, 1, 'Grid 3 Columns', 'index.php?id_category=10&controller=category&id_lang=1&ppr=3'),
(323, 2, 'Grid 3 Columns', ''),
(323, 3, 'Grid 3 Columns', ''),
(324, 1, 'Grid 4 Columns', 'index.php?id_category=10&controller=category&id_lang=1&ppr=4'),
(324, 2, 'Grid 4 Columns', ''),
(324, 3, 'Grid 4 Columns', ''),
(325, 1, 'Grid 5 Columns', 'index.php?id_category=10&controller=category&id_lang=1&sidebar=no&ppr=5'),
(325, 2, 'Grid 5 Columns', ''),
(325, 3, 'Grid 5 Columns', ''),
(326, 1, 'Grid 6 Columns', 'index.php?id_category=10&controller=category&id_lang=1&sidebar=no&ppr=6'),
(326, 2, 'Grid 6 Columns', ''),
(326, 3, 'Grid 6 Columns', ''),
(327, 1, 'List Layout', 'index.php?id_category=10&controller=category&id_lang=1&jpb_grid=0&sidebar=left'),
(327, 2, 'List Layout', ''),
(327, 3, 'List Layout', ''),
(328, 1, ' Banner and Descriptions', 'index.php?id_category=11&controller=category&id_lang=1&sidebar=left&layout=category-layout-bannerandesc'),
(328, 2, 'Category Banner and Description', ''),
(328, 3, 'Category Banner and Description', ''),
(329, 1, 'Left Sidebar', 'index.php?id_product=26&id_product_attribute=80&rewrite=samsung-360-speaker-wam&controller=product&id_lang=1&sidebar=left'),
(329, 2, 'Left Sidebar', ''),
(329, 3, 'Left Sidebar', ''),
(330, 1, 'Right Sidebar', 'index.php?id_product=26&id_product_attribute=80&rewrite=samsung-360-speaker-wam&controller=product&id_lang=1&sidebar=right'),
(330, 2, 'Right Sidebar', ''),
(330, 3, 'Right Sidebar', ''),
(332, 1, 'No Sidebar', 'index.php?id_product=26&id_product_attribute=80&rewrite=samsung-360-speaker-wam&controller=product&id_lang=1&sidebar=no'),
(332, 2, 'No Sidebar', ''),
(332, 3, 'No Sidebar', ''),
(334, 1, 'Layout 3 Columns', 'index.php?id_product=24&id_product_attribute=64&rewrite=apple-iphone-xr-black-red&controller=product&id_lang=1&sidebar=no&layout=product-layout-3columns'),
(334, 2, 'Layout 3 Columns', ''),
(334, 3, 'Layout 3 Columns', ''),
(340, 1, 'Product Box Gutter', '#'),
(340, 2, 'Product Box Gutter', ''),
(340, 3, 'Product Box Gutter', ''),
(341, 1, 'Gutter Default (30px)', 'index.php?id_category=10&controller=category&id_lang=1&jpb_gutterwidth=300'),
(341, 2, 'Gutter Default (30px)', ''),
(341, 3, 'Gutter Default (30px)', ''),
(343, 1, 'Small Gutter (10px)', 'index.php?id_category=10&controller=category&id_lang=1&jpb_gutterwidth=10'),
(343, 2, 'Small Gutter (10px)', ''),
(343, 3, 'Small Gutter (10px)', ''),
(344, 1, 'Medium Gutter (20px)', 'index.php?id_category=10&controller=category&id_lang=1&jpb_gutterwidth=20'),
(344, 2, 'Medium Gutter (20px)', ''),
(344, 3, 'Medium Gutter (20px)', ''),
(345, 1, 'Large Gutter (40px)', 'index.php?id_category=10&controller=category&id_lang=1&jpb_gutterwidth=400'),
(345, 2, 'Large Gutter (40px)', ''),
(345, 3, 'Large Gutter (40px)', ''),
(346, 1, 'Extra Large Gutter (60px)', 'index.php?id_category=10&controller=category&id_lang=1&jpb_gutterwidth=60'),
(346, 2, 'Extra Large Gutter (60px)', ''),
(346, 3, 'Extra Large Gutter (60px)', ''),
(348, 1, 'Product With Video', ''),
(348, 2, 'Product With Video', ''),
(348, 3, 'Product With Video', ''),
(349, 1, 'Product with Custom Tab', ''),
(349, 2, 'Product with Custom Tab', ''),
(349, 3, 'Product with Custom Tab', ''),
(350, 1, 'Add To Cart', '#'),
(350, 2, 'Add To Cart', ''),
(350, 3, 'Add To Cart', ''),
(351, 1, 'Ajax Default', 'index.php?jpb_addtocart=default'),
(351, 2, 'Ajax Default', ''),
(351, 3, 'Ajax Default', ''),
(352, 1, 'Ajax + Preview Popup', 'index.php?jpb_addtocart=ajax_popup'),
(352, 2, 'Ajax + Preview Popup', ''),
(352, 3, 'Ajax + Preview Popup', ''),
(353, 1, 'Ajax + Image Moving', 'index.php?jpb_addtocart=ajax_moveimage'),
(353, 2, 'Ajax + Image Moving', ''),
(353, 3, 'Ajax + Image Moving', ''),
(354, 1, 'Ajax + Cart at Bottom', 'index.php?jpb_addtocart=ajax_cartbottom'),
(354, 2, 'Ajax + Cart at Bottom', ''),
(354, 3, 'Ajax + Cart at Bottom', ''),
(259, 4, 'img1', ''),
(259, 6, 'img1', ''),
(284, 4, 'img', ''),
(284, 6, 'img', ''),
(285, 4, 'img', ''),
(285, 6, 'img', ''),
(286, 4, 'img', ''),
(286, 6, 'img', ''),
(260, 4, 'Cellphones', ''),
(260, 6, 'Cellphones', ''),
(261, 4, 'Apple iPhone', ''),
(261, 6, 'Apple iPhone', ''),
(262, 4, 'Samsung Galaxy', ''),
(262, 6, 'Samsung Galaxy', ''),
(263, 4, 'Sony Xperia', ''),
(263, 6, 'Sony Xperia', ''),
(264, 4, 'Xiaomi Redmi Note', ''),
(264, 6, 'Xiaomi Redmi Note', ''),
(265, 4, 'Nokia Android One', ''),
(265, 6, 'Nokia Android One', ''),
(266, 4, 'Tablets & iPads', ''),
(266, 6, 'Tablets & iPads', ''),
(267, 4, 'iPad Air & iPad Pro', ''),
(267, 6, 'iPad Air & iPad Pro', ''),
(268, 4, 'Samsung Galaxy Tab S', ''),
(268, 6, 'Samsung Galaxy Tab S', ''),
(269, 4, 'Huawei Mate Tabs', ''),
(269, 6, 'Huawei Mate Tabs', ''),
(270, 4, 'Asus ZenPad', ''),
(270, 6, 'Asus ZenPad', ''),
(271, 4, 'MS Surface', ''),
(271, 6, 'MS Surface', ''),
(272, 4, 'Computer & Mac', ''),
(272, 6, 'Computer & Mac', ''),
(273, 4, 'Macbook Pro & iMac', ''),
(273, 6, 'Macbook Pro & iMac', ''),
(274, 4, 'Asus Zenbook Pro', ''),
(274, 6, 'Asus Zenbook Pro', ''),
(275, 4, 'Mobile Workstation', ''),
(275, 6, 'Mobile Workstation', ''),
(276, 4, 'Ultrabook', ''),
(276, 6, 'Ultrabook', ''),
(277, 4, 'Notebook Gaming', ''),
(277, 6, 'Notebook Gaming', ''),
(278, 4, 'Accessories', ''),
(278, 6, 'Accessories', ''),
(279, 4, 'Smartwatch & iWatch', ''),
(279, 6, 'Smartwatch & iWatch', ''),
(280, 4, 'Airpod & Headphones', ''),
(280, 6, 'Airpod & Headphones', ''),
(281, 4, 'Phone Case', ''),
(281, 6, 'Phone Case', ''),
(282, 4, 'Adapter & Chargers', ''),
(282, 6, 'Adapter & Chargers', ''),
(283, 4, 'Smart Speakers', ''),
(283, 6, 'Smart Speakers', ''),
(232, 4, 'Home 1', ''),
(232, 6, 'Home 1', ''),
(233, 4, 'Home 2', ''),
(233, 6, 'Home 2', ''),
(234, 4, 'Home 3 - Hero Slider', ''),
(234, 6, 'Home 3 - Hero Slider', ''),
(235, 4, 'Home 4', ''),
(235, 6, 'Home 4', ''),
(236, 4, 'Home 5', ''),
(236, 6, 'Home 5', ''),
(237, 4, 'Home 6', ''),
(237, 6, 'Home 6', ''),
(238, 4, 'Home 7', ''),
(238, 6, 'Home 7', ''),
(239, 4, 'Home 8', ''),
(239, 6, 'Home 8', ''),
(340, 4, 'Product Box Gutter', ''),
(340, 6, 'Product Box Gutter', ''),
(350, 4, 'Add To Cart', ''),
(350, 6, 'Add To Cart', ''),
(317, 4, 'C Left Sidebar', ''),
(317, 6, 'C Left Sidebar', ''),
(318, 4, 'Right Sidebar', ''),
(318, 6, 'Right Sidebar', ''),
(319, 4, 'No Sidebar', ''),
(319, 6, 'No Sidebar', ''),
(320, 4, 'Category Banner', ''),
(320, 6, 'Category Banner', ''),
(321, 4, 'Category Descriptions', ''),
(321, 6, 'Category Descriptions', ''),
(328, 4, ' Banner and Descriptions', ''),
(328, 6, ' Banner and Descriptions', ''),
(322, 4, 'Grid 2 Columns', ''),
(322, 6, 'Grid 2 Columns', ''),
(323, 4, 'Grid 3 Columns', ''),
(323, 6, 'Grid 3 Columns', ''),
(324, 4, 'Grid 4 Columns', ''),
(324, 6, 'Grid 4 Columns', ''),
(325, 4, 'Grid 5 Columns', ''),
(325, 6, 'Grid 5 Columns', ''),
(326, 4, 'Grid 6 Columns', ''),
(326, 6, 'Grid 6 Columns', ''),
(327, 4, 'List Layout', ''),
(327, 6, 'List Layout', ''),
(309, 4, 'Standard Product', ''),
(309, 6, 'Standard Product', ''),
(310, 4, 'Virtual Product', ''),
(310, 6, 'Virtual Product', ''),
(311, 4, 'Pack of Products', ''),
(311, 6, 'Pack of Products', ''),
(312, 4, 'Product  Color Swatch', ''),
(312, 6, 'Product  Color Swatch', ''),
(313, 4, 'Product Out of Stock', ''),
(313, 6, 'Product Out of Stock', ''),
(348, 4, 'Product With Video', ''),
(348, 6, 'Product With Video', ''),
(349, 4, 'Product with Custom Tab', ''),
(349, 6, 'Product with Custom Tab', ''),
(329, 4, 'Left Sidebar', ''),
(329, 6, 'Left Sidebar', ''),
(330, 4, 'Right Sidebar', ''),
(330, 6, 'Right Sidebar', ''),
(332, 4, 'No Sidebar', ''),
(332, 6, 'No Sidebar', ''),
(343, 4, 'Small Gutter (10px)', ''),
(343, 6, 'Small Gutter (10px)', ''),
(344, 4, 'Medium Gutter (20px)', ''),
(344, 6, 'Medium Gutter (20px)', ''),
(341, 4, 'Gutter Default (30px)', ''),
(341, 6, 'Gutter Default (30px)', ''),
(345, 4, 'Large Gutter (40px)', ''),
(345, 6, 'Large Gutter (40px)', ''),
(346, 4, 'Extra Large Gutter (60px)', ''),
(346, 6, 'Extra Large Gutter (60px)', ''),
(351, 4, 'Ajax Default', ''),
(351, 6, 'Ajax Default', ''),
(352, 4, 'Ajax + Preview Popup', ''),
(352, 6, 'Ajax + Preview Popup', ''),
(353, 4, 'Ajax + Image Moving', ''),
(353, 6, 'Ajax + Image Moving', ''),
(354, 4, 'Ajax + Cart at Bottom', ''),
(354, 6, 'Ajax + Cart at Bottom', ''),
(355, 1, 'No Ajax', 'index.php?jpb_addtocart=no_ajax'),
(355, 2, 'No Ajax', ''),
(355, 3, 'No Ajax', ''),
(355, 4, 'No Ajax', ''),
(355, 6, 'No Ajax', ''),
(334, 4, 'Layout 3 Columns', ''),
(334, 6, 'Layout 3 Columns', ''),
(253, 4, 'About Us', ''),
(253, 6, 'About Us', ''),
(254, 4, 'New Products', ''),
(254, 6, 'New Products', ''),
(255, 4, 'Wishlist Page', ''),
(255, 6, 'Wishlist Page', ''),
(256, 4, 'Search Page', ''),
(256, 6, 'Search Page', ''),
(258, 4, '404 Page', ''),
(258, 6, '404 Page', ''),
(307, 4, 'Best Sales', ''),
(307, 6, 'Best Sales', ''),
(7, 4, 'Contact', ''),
(1, 4, 'Home', ''),
(2, 4, 'Shop', ''),
(3, 4, 'Features', ''),
(5, 4, 'Blog', ''),
(314, 4, 'Category Layout', ''),
(314, 6, 'Category Layout', ''),
(315, 4, 'Product Layout', ''),
(315, 6, 'Product Layout', ''),
(287, 4, 'Blog Category', ''),
(287, 6, 'Blog Category', ''),
(288, 4, 'Category - Left Sidebar', ''),
(288, 6, 'Category - Left Sidebar', ''),
(289, 4, 'Category - Right Sidebar', ''),
(289, 6, 'Category - Right Sidebar', ''),
(290, 4, 'Category - No Sidebar', ''),
(290, 6, 'Category - No Sidebar', ''),
(292, 4, '3 Columns', ''),
(292, 6, '3 Columns', ''),
(293, 4, '4 Columns', ''),
(293, 6, '4 Columns', ''),
(294, 4, 'Blog Single Post', ''),
(294, 6, 'Blog Single Post', ''),
(295, 4, 'Left Sidebar', ''),
(295, 6, 'Left Sidebar', ''),
(296, 4, 'Right Sidebar', ''),
(296, 6, 'Right Sidebar', ''),
(297, 4, 'No Sidebar', ''),
(297, 6, 'No Sidebar', ''),
(299, 4, 'Categories - Left Sidebar', ''),
(299, 6, 'Categories - Left Sidebar', ''),
(300, 4, 'Categories- Right Sidebar', ''),
(300, 6, 'Categories- Right Sidebar', ''),
(301, 4, 'Categories -No Sidebar', ''),
(301, 6, 'Categories -No Sidebar', ''),
(303, 4, '3 Columns', ''),
(303, 6, '3 Columns', ''),
(304, 4, '4 Columns', ''),
(304, 6, '4 Columns', ''),
(305, 4, 'Blog Tags', ''),
(305, 6, 'Blog Tags', ''),
(306, 4, 'Blog Archives', ''),
(306, 6, 'Blog Archives', ''),
(356, 1, 'Layout Grid', 'index.php?id_product=34&rewrite=bose-solo-bluetooth-speaker&controller=product&id_lang=1&layout=product-layout-grid'),
(356, 2, 'Layout Grid', ''),
(356, 3, 'Layout Grid', ''),
(356, 4, 'Layout Grid', ''),
(356, 6, 'Layout Grid', ''),
(308, 4, 'Product Type', ''),
(308, 6, 'Product Type', '');

ALTER TABLE `_DB_PREFIX_jmsmegamenu`
  ADD PRIMARY KEY (`mitem_id`);

ALTER TABLE `_DB_PREFIX_jmsmegamenu`
  MODIFY `mitem_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=357;
";
