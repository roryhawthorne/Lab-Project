CREATE DATABASE games_database;
USE games_database;

CREATE TABLE members (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

/*INSERT INTO members (email, password) VALUES ('adam.able@kcl.ac.uk', '123456789');
INSERT INTO members (email, password) VALUES ('k1763909@kcl.ac.uk', '987654321');*/