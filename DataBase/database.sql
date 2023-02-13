-- DataBase Name
CREATE DATABASE urgent_case;
USE urgent_case;

-- Roles Table is for fetching all the user roles which can have
CREATE TABLE roles(
    ID INT PRIMARY KEY AUTO_INCREMENT,
    label VARCHAR(10) NOT NULL UNIQUE
);

-- Checks whether the roles are compromised between the values below
ALTER TABLE roles
ADD CONSTRAINT CHK_Role CHECK (label = 'admin' OR label = 'patient' OR label = 'agent');

-- Fill the roles with the sames values by default
INSERT INTO roles(label) VALUES('admin'), ('patient'), ('agent');

-- Users Table is for providing all infos who could be either patients, admin or agents
CREATE TABLE users(
    ID INT PRIMARY KEY AUTO_INCREMENT,
    IDCS INT(10) UNIQUE NULL,
    IDREG INT(29) UNIQUE NULL,
    profile TEXT NULL DEFAULT 'profile.png',
    username VARCHAR(255) UNIQUE NOT NULL,
    password VARCHAR(17) NOT NULL,
    firstname VARCHAR(45) NOT NULL,
    lastname VARCHAR(45) NOT NULL,
    phone VARCHAR(13) NOT NULL,
    hasRole INT NOT NULL,
    CONSTRAINT FK_User_Role FOREIGN KEY users(hasRole) REFERENCES roles(ID) 
);

-- Cases Table is for storing all case infos of a patient with its responsible (admin/agent)
CREATE TABLE cases(
    ID INT PRIMARY KEY AUTO_INCREMENT,
    details VARCHAR(255) NOT NULL,
    attachment BLOB NULL,
    created_by INT NOT NULL,
    patient_id INT NOT NULL,
    responsible_id INT NOT NULL,
    CONSTRAINT FK_Case_Creator FOREIGN KEY cases(created_by) REFERENCES users(ID),
    CONSTRAINT FK_Case_Patient FOREIGN KEY cases(patient_id) REFERENCES users(ID),
    CONSTRAINT FK_Case_Respons FOREIGN KEY cases(responsible_id) REFERENCES users(ID)
);

-- Treatments Table is for storing patient's new treatments after creating his case
CREATE TABLE treatments(
    ID INT PRIMARY KEY AUTO_INCREMENT,
    patient_id INT NOT NULL,
    treated_by TEXT NOT NULL,
    date_treat DATETIME NOT NULL,
    details VARCHAR(255) NOT NULL,
    isClosed BOOLEAN DEFAULT false,
    CONSTRAINT FK_Treat_Patient FOREIGN KEY treatments(patient_id) REFERENCES users(ID)
);