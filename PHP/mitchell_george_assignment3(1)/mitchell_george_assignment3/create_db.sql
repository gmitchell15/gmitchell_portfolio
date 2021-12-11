DROP DATABASE IF EXISTS george_mitchell_assignment_db;
CREATE DATABASE george_mitchell_assignment_db;
USE george_mitchell_assignment_db;
	
CREATE TABLE student (
	studentID	int(11)	NOT NULL	AUTO_INCREMENT,
	name	VARCHAR(255)	NOT NULL,
	email	VARCHAR(255)	NOT NULL,
	PRIMARY KEY (studentID)
);

INSERT INTO student VALUES 
(1, 'PO BLACK', 'poblack@gmail.com'),
(2, 'SHIFU HOFFMAN', 'shifuhoffman@gmail.com'),
(3, 'TIGRESS JOLIE', 'tigressjolie@gmail.com'),
(4, 'JENNIFER YUH', 'jenniferyuh@gmail.com'),
(5, 'OX STORMING', 'oxstorming@gmail.com'),
(6, 'MONKEY CHAN', 'monkeychan@gmail.com'),
(7, 'VIPER LIU', 'viperliu@gmail.com'),
(8, 'MANTIS ROGEN', 'mantisrogen@gmail.com'),
(9, 'Crane Cross', 'cranecross@gmail.com'),
(10, 'OOGWAY KIM', 'oogway@gmail.com'),
(11, 'PING HONG', 'pinghong@gmail.com');
	
GRANT SELECT, INSERT, DELETE, UPDATE
ON george_mitchell_assignment_db.*
TO georgeweb@localhost
IDENTIFIED BY 'georgechocolate';