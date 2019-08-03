CREATE TABLE `logos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `photo` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `photo_dir` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `photo_size` varchar(255) DEFAULT NULL,
  `photo_type` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1