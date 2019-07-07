 #Author : DIVINE #

CREATE DATABASE IF NOT EXISTS KHealth;

 use KHealth;

 CREATE TABLE IF NOT EXISTS users(

 	Id int not null auto_increment,
 	name varchar(100) not null,
 	email varchar(225) not null,
 	phoneNumber varchar(225) not null,
 	username varchar(225) not null,
 	password varchar(225) not null,
 	level varchar(15) not null,
 	primary key(Id)
); 


 CREATE TABLE IF NOT EXISTS Patients(
 	Id int not null auto_increment,
 	name varchar(100) not null,
 	D_date date not null,
 	guardian_name varchar(100) not null,
 	sex ENUM('M','F'),
 	m_status ENUM('Y','N'),
 	email varchar(225) not null,
 	phoneNumber varchar(225) not null,
 	region varchar(225) not null,
 	subdivision varchar(225) not null,
 	division varchar(225) not null,
 	neighbourhood varchar(225) not null,
 	picture LONGBLOB not null,
 	primary key(Id)

 );

 CREATE TABLE IF NOT EXISTS medical_history(
 	Id int not null auto_increment,
 	patient_id int not null,
 	description text not null,
 	primary key(Id),
 	foreign key(patient_id) references Patients(Id)
 	

 );

 CREATE TABLE IF NOT EXISTS pre_diagnosis(
 	Id int not null auto_increment,
 	user_id int not null,
 	history_id int not null,
 	comments text not null,
 	primary key(Id),
 	foreign key(user_id) references users(Id),
 	foreign key(history_id) references medical_history(Id)

 );

 CREATE TABLE IF NOT EXISTS pre_report(
 	Id int not null auto_increment,
 	user_Id int not null,
 	diag_Id int not null,
 	comments text not null,
 	prescriptions text not null,
 	primary key(Id),
 	foreign key(user_Id) references users(Id),
 	foreign key(diag_Id) references pre_diagnosis(Id)
 	

 );

 CREATE TABLE IF NOT EXISTS final_diagnosis(
 	Id int not null auto_increment,
 	pred_Id int not null,   #pred_id = pre_diagnosis Id
 	remarks text not null,
 	primary key(Id),
 	foreign key(pred_Id) references pre_diagnosis(Id)
 	

 );

 CREATE TABLE IF NOT EXISTS final_report(
 	Id int not null auto_increment,
 	prer_Id int not null,  #prer = pre_report Id
 	remarks text not null,
 	primary key(Id),
 	foreign key(prer_Id) references pre_report(Id)
 	

 );




