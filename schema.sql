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
  FOREIGN KEY (status_id) REFERENCES statuses(id) ON DELETE SET NULL
) ENGINE=InnoDB;

CREATE TABLE pictures(
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  filename VARCHAR(50),
  project_id INT UNSIGNED,
  created DATETIME DEFAULT NULL,
  modified DATETIME DEFAULT NULL,
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
  id integer auto_increment,
  username char(50),
  password char(40),
  PRIMARY KEY (id)
) ENGINE=InnoDB;


-- Create statuses
INSERT INTO statuses VALUES(1, 'Active');
INSERT INTO statuses VALUES(2, 'Inactive');

--
-- Dumping data for table 'projects'
--

INSERT INTO projects VALUES(1, 'Banana Peeler', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ', 'MPD9', '2011-04-07', '0123456789', 1, NULL, NULL);
INSERT INTO projects VALUES(2, 'Better Banana Peeler', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ', 'MPD9', '2011-04-07', '1341h1313', 1, NULL, NULL);

-- Create participants
INSERT INTO participants VALUES(1, 'Cary Lee', 'carylee@gmail.com', 'Motorola', NULL, NULL, 2);
INSERT INTO participants VALUES(2, 'Bob Cowles', 'bobcowels@fl.gov', 'ZS Associates', NULL, NULL, 1);

--
-- Dumping data for table 'pictures'
--

INSERT INTO pictures VALUES(1, 'city.jpg', 1, NULL, NULL);
INSERT INTO pictures VALUES(2, 'city.jpg', 2, NULL, NULL);
INSERT INTO pictures VALUES(3, 'cactus.jpg', 1, NULL, NULL);
INSERT INTO pictures VALUES(4, 'camera.jpg', 1, NULL, NULL);

