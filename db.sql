drop database ryudo;
create database ryudo;
use ryudo;

create table user (
	id int(10) primary key auto_increment,
	username varchar(255),
	password varchar(255)
);
create table content (
	id int(10) primary key auto_increment,
	title varchar(255),
	body text,
	image varchar(255),
	tanggal date
);

insert into user(username, password) values ('rulla', 'root');



