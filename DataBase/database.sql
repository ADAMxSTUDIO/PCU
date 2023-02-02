CREATE DATABASE cases;
USE cases;

CREATE TABLE case(
    ID INT PRIMARY KEY AUTO_INCREMENT,
    IDCS INT(10) UNIQUE NULL,
    lastname VARCHAR() NOT NULL,
    firstname VARCHAR() NOT NULL,
    phone VARCHAR() NOT NULL,
    details VARCHAR(255) NOT NULL,
    attachment BLOB NOT NULL
);

CREATE TABLE treatment(
    treat_id
    Agent 
);