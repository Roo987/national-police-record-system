 DROP DATABASE IF EXISTS users;
 CREATE DATABASE IF NOT EXISTS users;
 use users;
 
 DROP TABLE IF EXISTS admin;
 CREATE TABLE IF NOT EXISTS admin(
	email varchar(50) NOT NULL,
	username varchar(50) NOT NULL,
	password varchar(50) NOT NULL,
	cpassword varchar(50) NOT NULL,
	PRIMARY KEY(email)
);