CREATE DATABASE login_site;

CREATE TABLE user_login (
  id int(11) NOT NULL AUTO_INCREMENT,
  username varchar(255) NOT NULL,
  Password varchar(100) NOT NULL,
  PRIMARY KEY (id),
  UNIQUE KEY username (username)
);

INSERT INTO user_login (username,Password) VALUES ('admin','admin');