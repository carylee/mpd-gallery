DROP TABLE IF EXISTS users, statuses, projects, pictures, participants;

CREATE TABLE statuses (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  label VARCHAR(20)
) ENGINE=InnoDB;

CREATE TABLE projects (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(60) NOT NULL,
  description TEXT,
  mpd_class VARCHAR(20),
  date_presented date,
  patent_number VARCHAR(12),
  status_id INT UNSIGNED,
  created DATETIME DEFAULT NULL,
  modified DATETIME DEFAULT NULL,
  cover int(5) unsigned DEFAULT NULL,
  `like` int(10) unsigned NOT NULL DEFAULT 0,
  FOREIGN KEY (status_id) REFERENCES statuses(id) ON DELETE SET NULL
) ENGINE=InnoDB;

CREATE TABLE pictures(
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  filename VARCHAR(50),
  project_id INT UNSIGNED,
  created DATETIME DEFAULT NULL,
  modified DATETIME DEFAULT NULL,
  dir varchar(255) default NULL,
  mimetype varchar(255) NULL,
  filesize int(11) unsigned default NULL,
  FOREIGN KEY (project_id) REFERENCES projects(id) ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE participants (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  company VARCHAR(40),
  created DATETIME DEFAULT NULL,
  modified DATETIME DEFAULT NULL,
  project_id INT UNSIGNED,
  FOREIGN KEY (project_id) REFERENCES projects(id) ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE users (
  id integer auto_increment PRIMARY KEY,
  username char(50) UNIQUE,
  password char(40) NOT NULL,
  admin tinyint(1)
) ENGINE=InnoDB;

-- ------------------------------------------------------

--
-- These ACL tables should be refactored out
--


DROP TABLE IF EXISTS `acos`;
CREATE TABLE `acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `acos`
--


-- --------------------------------------------------------

--
-- Table structure for table `aros`
--

DROP TABLE IF EXISTS `aros`;
CREATE TABLE `aros` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Table structure for table `aros_acos`
--

DROP TABLE IF EXISTS `aros_acos`;
CREATE TABLE `aros_acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `aro_id` int(10) NOT NULL,
  `aco_id` int(10) NOT NULL,
  `_create` varchar(2) NOT NULL DEFAULT '0',
  `_read` varchar(2) NOT NULL DEFAULT '0',
  `_update` varchar(2) NOT NULL DEFAULT '0',
  `_delete` varchar(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `ARO_ACO_KEY` (`aro_id`,`aco_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

