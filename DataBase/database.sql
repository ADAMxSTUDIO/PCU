-- DataBase Name
CREATE DATABASE urgent_case;
USE urgent_case;

-- Users Table is for providing all common infos to patients & admins Tables
CREATE TABLE users(
    ID INT PRIMARY KEY AUTO_INCREMENT,
    firstname VARCHAR(45) NOT NULL,
    lastname VARCHAR(45) NOT NULL,
    phone VARCHAR(13) NOT NULL
);

-- Patients Tables is for gathering all patients infos
CREATE TABLE patients(
    ID INT PRIMARY KEY,
    IDCS INT(10) UNIQUE NULL,
    IDREG INT(29) UNIQUE NULL,
    CONSTRAINT FK_Patient_User FOREIGN KEY patients(ID) REFERENCES users(ID) 
);

-- Cases Table is for storing all case infos of a patient with its responsible (admin/agent)
CREATE TABLE cases(
    ID INT PRIMARY KEY AUTO_INCREMENT,
    details VARCHAR(255) NOT NULL,
    attachment BLOB NOT NULL,
    patient_id INT,
    CONSTRAINT FK_Case_Patient FOREIGN KEY cases(ID) REFERENCES patient(ID)
);

-- Admins Table is for admin infos with the reponsible of the patient's case
CREATE TABLE admins(
    ID INT PRIMARY KEY,
    agent_id INT NULL,   
    CONSTRAINT FK_Admin_User FOREIGN KEY admins(ID) REFERENCES users(ID),
    CONSTRAINT FK_Admin_Patient FOREIGN KEY admins(agent_id) REFERENCES patients(ID) 
);

-- Treatments Table is for storing patient's new treatments after creating his case
CREATE TABLE treatments(
    ID INT PRIMARY KEY AUTO_INCREMENT,
    agent_id INT NULL,
    admin_id INT NULL,
    date_treat DATETIME NOT NULL,
    details VARCHAR(255) NOT NULL,
    isClosed BOOLEAN DEFAULT false,
    CONSTRAINT FK_Treat_Agent FOREIGN KEY treatments(agent_id) REFERENCES agents(ID),
    CONSTRAINT FK_Treat_Admin FOREIGN KEY treatments(admin_id) REFERENCES admins(ID) 
);