CREATE DATABASE games_database;
USE games_database;

CREATE TABLE Member (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL    
);

INSERT INTO Member (email, password) VALUES ('adam.able@kcl.ac.uk', '123');
INSERT INTO Member (email, password) VALUES ('k1763909@kcl.ac.uk', '456');