CREATE DATABASE users;

use `users`;

create table users (

id int auto_increment,
email char(100),
password char(100),
primary key (id)


);

insert  into users (email , password) value ("dummy@123.com" , "dummy");
insert  into users (email , password) value ("admin@123.com" , "@dm1n");
insert  into users (email , password) value ("carlitos@123.com" , "carlitos123");




SELECT email, password FROM users where email = "admin@123.com" AND password = '@dm1n';

create table user_personal_data (

id int auto_increment,
given_name char(50),
last_name char(50),
address char (100), 
phone char(20) ,
state char (50) , 
city char (50) , 
zipcode char(20),
primary key (id)

);

insert  into user_personal_data (address) value ("dummy@123.com");
insert  into user_personal_data (address) value ("dummy@123.com");
insert  into user_personal_data (given_name , last_name , address , phone, state , city, zipcode) value ("Carlos" , "Trejo" , "Calle villanueva Col Argenta , No. 800" , "7714185885" ,"Hidalgo" , "Pahuca" , "425678");

select* from users;
select * from user_personal_data;







