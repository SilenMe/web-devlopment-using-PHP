<?php
/**
 This assignment will add one more table to the database from the previous assignment. We will create a Position table and connect it to the Profile table with a many-to-one relationship.

CREATE TABLE Position (
  position_id INTEGER NOT NULL AUTO_INCREMENT,
  profile_id INTEGER,
  rank INTEGER,
  year INTEGER,
  description TEXT,

  PRIMARY KEY(position_id),

  CONSTRAINT position_ibfk_1
        FOREIGN KEY (profile_id)
        REFERENCES Profile (profile_id)
        ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


There is no logical key for this table.
The rank column should be used to record the order in which the positions are to be displayed. Do not use the year as the sort key when viewing the data.



If you have been doing all the previous assignments, you should have a database set up. Here is the SQL if you are just starting on this assignment:

CREATE DATABASE misc DEFAULT CHARACTER SET utf8 ;

GRANT ALL ON misc.* TO 'fred'@'localhost' IDENTIFIED BY 'zap';
GRANT ALL ON misc.* TO 'fred'@'127.0.0.1' IDENTIFIED BY 'zap';

USE misc;   (If in the command line)

CREATE TABLE users (
   user_id INTEGER NOT NULL AUTO_INCREMENT,
   name VARCHAR(128),
   email VARCHAR(128),
   password VARCHAR(128),

   PRIMARY KEY(user_id),

   INDEX(email)
) ENGINE=InnoDB CHARSET=utf8;

ALTER TABLE users ADD INDEX(email);
ALTER TABLE users ADD INDEX(password);

INSERT INTO users (name,email,password)
    VALUES ('Chuck','csev@umich.edu','1a52e17fa899cf40fb04cfc42e6352f1');

INSERT INTO users (name,email,password)
    VALUES ('UMSI','umsi@umich.edu','1a52e17fa899cf40fb04cfc42e6352f1');   we have added an user
 */

$pdo = new PDO('mysql:host=localhost;port=3306;dbname=misc', 'fred', 'zap'); //see line 30
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
