DROP TABLE IF EXISTS projects, pictures, participants;

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
  FOREIGN KEY (status_id) REFERENCES statuses(id) ON DELETE SET NULL
) ENGINE=InnoDB;

CREATE TABLE pictures(
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  filename VARCHAR(50),
  project_id INT UNSIGNED,
  FOREIGN KEY (project_id) REFERENCES projects(id) ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE participants (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  company VARCHAR(40),
  project_id INT UNSIGNED,
  FOREIGN KEY (project_id) REFERENCES projects(id) ON DELETE CASCADE
) ENGINE=InnoDB;
