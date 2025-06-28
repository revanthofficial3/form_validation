create database form_valid;

use form_valid;
create table users(
    id INT AUTO_INCREMENT primary key,
    name varchar(100),
    password varchar(100),
    address TEXT,
    email varchar(100),
    district varchar(50),
    gender varchar(10),
    languages varchar(100),
    about TEXT,
    created_at DATETIME default current_timestamp
);